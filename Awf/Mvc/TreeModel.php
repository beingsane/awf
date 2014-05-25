<?php
/**
 * @package		awf
 * @copyright	2014 Nicholas K. Dionysopoulos / Akeeba Ltd 
 * @license		GNU GPL version 3 or later
 */

namespace Awf\Mvc;

use Awf\Application\Application;
use Awf\Container\Container;
use Awf\Event\Dispatcher as EventDispatcher;
use Awf\Inflector\Inflector;
use Awf\Mvc\DataModel\RelationManager;
use Awf\Utils\String;

/**
 * A DataModel which implements nested trees
 *
 * @package Awf\Mvc
 *
 * @property int $lft Left value (for nested set implementation)
 * @property int $rgt Right value (for nested set implementation)
 * @property string $hash Slug hash (for faster searching)
 */
class TreeModel extends DataModel
{
	/** @var int The level (depth) of this node in the tree */
	protected $treeDepth = null;

	/** @var TreeModel The root node in the tree */
	protected $treeRoot = null;

	/**
	 * Public constructor. Overrides the parent constructor, making sure there are lft/rgt columns which make it
	 * compatible with nested sets.
	 *
	 * @see \Awf\Mvc\DataModel::__construct()
	 *
	 * @param Container $container
	 *
	 * @throws \RuntimeException When lft/rgt columns are not found
	 */
	public function __construct(\Awf\Container\Container $container = null)
	{
		parent::__construct($container);

		if (!$this->hasField('lft') || !$this->hasField('rgt'))
		{
			throw new \RuntimeException("Table $this->tableName is not compatible with TreeModel: it does not have lft/rgt columns");
		}
	}

	/**
	 * Overrides the automated table checks to handle the 'hash' column for faster searching
	 *
	 * @return $this|DataModel
	 */
	public function check()
	{
		parent::check();

		// Create a slug if there is a title and an empty slug
		if ($this->hasField('title') && $this->hasField('slug') && empty($this->slug))
		{
			$this->slug = String::toSlug($this->title);
		}

		// Create the SHA-1 hash of the slug for faster searching (make sure the hash column is CHAR(64) to take
		// advantage of MySQL's optimised searching for fixed size CHAR columns)
		if ($this->hasField('hash') && $this->hasField('slug'))
		{
			$this->hash = sha1($this->slug);
		}

		// Reset cached values
		$this->treeDepth = null;
		$this->treeRoot = null;

		return $this;
	}

	/**
	 * Delete a node, either the currently loaded one or the one specified in $id. If an $id is specified that node
	 * is loaded before trying to delete it. In the end the data model is reset. If the node has any children nodes
	 * they will be removed before the node itself is deleted if $recursive == true (default: true).
	 *
	 * @param   mixed $id        Primary key (id field) value
	 * @param   bool  $recursive Should I recursively delete any nodes in the subtree? (default: true)
	 *
	 * @return  $this  for chaining
	 */
	public function forceDelete($id = null, $recursive = true)
	{
		// Load the specified record (if necessary)
		if (!empty($id))
		{
			$this->findOrFail($id);
		}

		// Recursively delete all children nodes as long as we are not a leaf node and $recursive is enabled
		if ($recursive && !$this->isLeaf())
		{
			// Get a reference to the database
			$db = $this->getDbo();

			// Get my lft/rgt values
			$myLeft = $this->lft;
			$myRight = $this->rgt;

			$fldLft = $db->qn($this->getFieldAlias('lft'));
			$fldRgt = $db->qn($this->getFieldAlias('rgt'));

			// Get all sub-nodes
			$subNodes = $this->getClone()->reset()
				->whereRaw($fldLft . ' > ' . $fldLft)
				->whereRaw($fldRgt . ' < ' . $fldRgt)
				->get(true);

			// Delete all subnodes (goes through the model to trigger the observers)
			if (!empty($subNodes))
			{
				array_walk($subNodes, function($item, $key){
					/** @var TreeModel $item */
					$item->forceDelete(null, false);
				});
			}
		}

		// Finally delete the node itself
		parent::delete($id);

		return $this;
	}

	/**
	 * Not supported in nested sets
	 *
	 * @param   string $where Ignored
	 *
	 * @return  static  Self, for chaining
	 *
	 * @throws  \RuntimeException
	 */
	public function reorder($where = '')
	{
		throw new \RuntimeException('reorder() is not supported by TreeModel');
	}

	/**
	 * Not supported in nested sets
	 *
	 * @param   integer $delta   Ignored
	 * @param   string  $where   Ignored
	 *
	 * @return  static  Self, for chaining
	 *
	 * @throws  \RuntimeException
	 */
	public function move($delta, $where = '')
	{
		throw new \RuntimeException('move() is not supported by TreeModel');
	}

	/**
	 * Create a new record with the provided data. It is inserted as the last child of the current node's parent
	 *
	 * @param   array $data The data to use in the new record
	 *
	 * @return  static  The new node
	 */
	public function create($data)
	{
		return $this->reset()->bind($data)->insertAsChildOf($this->getParent());
	}

	/**
	 * Makes a copy of the record, inserting it as the last child of the current node's parent.
	 *
	 * @return static
	 */
	public function copy()
	{
		return $this->create($this->toArray());
	}

	/**
	 * Insert the current node as a tree root. It is a good idea to never use this method, instead providing a root node
	 * in your schema installation and then sticking to only one root.
	 *
	 * @return DataModel
	 */
	public function insertAsRoot()
	{
		// First we need to find the right value of the last parent, a.k.a. the max(rgt) of the table
		$db = $this->getDbo();

		// Get the lft/rgt names
		$fldRgt = $db->qn($this->getFieldAlias('rgt'));

		$query = $db->getQuery(true)
			->select('MAX(' . $fldRgt . ')')
			->from($db->qn($this->tableName));
		$maxRgt = $db->setQuery($query, 0, 1)->loadResult();

		if (empty($maxRgt))
		{
			$maxRgt = 0;
		}

		$this->lft = ++$maxRgt;
		$this->rgt = ++$maxRgt;

		return $this->save();
	}

	/**
	 * Insert the current node as the first (leftmost) child of a parent node.
	 *
	 * WARNING: If it's an existing node it will be COPIED, not moved.
	 *
	 * @param TreeModel $parentNode The node which will become our parent
	 *
	 * @return $this for chaining
	 * @throws \Exception
	 */
	public function insertAsFirstChildOf(TreeModel $parentNode)
	{
		// Get a reference to the database
		$db = $this->getDbo();

		// Get the field names
		$fldRgt = $db->qn($this->getFieldAlias('rgt'));
		$fldLft = $db->qn($this->getFieldAlias('lft'));

		// Get the value of the parent node's rgt
		$myRight = $parentNode->rgt;

		// Update my lft/rgt values
		$this->lft = $myRight;
		$this->rgt = $myRight;

		// Wrap everything in a transaction
		$db->transactionStart();

		try
		{
			// Make a hole (2 queries)
			$query = $db->getQuery(true)
				->update($db->qn($this->tableName))
				->set($fldRgt . ' = ' . $fldRgt . '+2')
				->where($fldRgt . '>=' . $db->q($myRight));
			$db->setQuery($query)->execute();

			$query = $db->getQuery(true)
				->update($db->qn($this->tableName))
				->set($fldLft . ' = ' . $fldLft . '+2')
				->where($fldLft . '>' . $db->q($myRight));
			$db->setQuery($query)->execute();

			// Insert the new node
			$this->save();

			// Commit the transaction
			$db->transactionCommit();
		}
		catch (\Exception $e)
		{
			// Roll back the transaction on error
			$db->transactionRollback();

			throw $e;
		}

		return $this;
	}

	/**
	 * Insert the current node as the last (rightmost) child of a parent node.
	 *
	 * WARNING: If it's an existing node it will be COPIED, not moved.
	 *
	 * @param TreeModel $parentNode The node which will become our parent
	 *
	 * @return $this for chaining
	 * @throws \Exception
	 */
	public function insertAsLastChildOf(TreeModel $parentNode)
	{
		// Get a reference to the database
		$db = $this->getDbo();

		// Get the field names
		$fldRgt = $db->qn($this->getFieldAlias('rgt'));
		$fldLft = $db->qn($this->getFieldAlias('lft'));

		// Get the value of the parent node's lft
		$myLeft = $parentNode->lft;

		// Update my lft/rgt values
		$this->lft = $myLeft + 1;
		$this->rgt = $myLeft + 2;

		// Wrap everything in a transaction
		$db->transactionStart();

		try
		{
			// Make a hole (2 queries)
			$query = $db->getQuery(true)
				->update($db->qn($this->tableName))
				->set($fldLft . ' = ' . $fldLft . '+2')
				->where($fldLft . '>' . $db->q($myLeft));
			$db->setQuery($query)->execute();

			$query = $db->getQuery(true)
				->update($db->qn($this->tableName))
				->set($fldRgt . ' = ' . $fldRgt . '+2')
				->where($fldLft . '>' . $db->q($fldLft));
			$db->setQuery($query)->execute();

			// Insert the new node
			$this->save();

			// Commit the transaction
			$db->transactionCommit();
		}
		catch (\Exception $e)
		{
			// Roll back the transaction on error
			$db->transactionRollback();

			throw $e;
		}

		return $this;
	}

	/**
	 * Alias for insertAsLastchildOf
	 *
	 * @param $parentNode
	 */
	public function insertAsChildOf(TreeModel $parentNode)
	{
		return $this->insertAsLastChildOf($parentNode);
	}

	/**
	 * Insert the current node to the left of (before) a sibling node
	 *
	 * WARNING: If it's an existing node it will be COPIED, not moved.
	 *
	 * @param TreeModel $siblingNode We will be inserted before this node
	 *
	 * @return $this for chaining
	 * @throws \Exception
	 */
	public function insertLeftOf(TreeModel $siblingNode)
	{
		// Get a reference to the database
		$db = $this->getDbo();

		// Get the field names
		$fldRgt = $db->qn($this->getFieldAlias('rgt'));
		$fldLft = $db->qn($this->getFieldAlias('lft'));

		// Get the value of the parent node's rgt
		$myRight = $siblingNode->rgt;

		// Update my lft/rgt values
		$this->lft = $myRight + 1;
		$this->rgt = $myRight + 2;

		$db->transactionStart();

		try
		{
			$db->setQuery(
				$db->getQuery(true)
					->update($db->qn($this->tableName))
					->set($fldRgt . ' = ' . $fldRgt . '+2')
					->where($fldRgt . ' > ' . $db->q($myRight))
			)->execute();

			$db->setQuery(
				$db->getQuery(true)
				->update($db->qn($this->tableName))
				->set($fldLft . ' = ' . $fldLft . '+2')
				->where($fldLft . ' > ' . $db->q($myRight))
			)->execute();

			$this->save();
		}
		catch (\Exception $e)
		{
			$db->transactionRollback();

			throw $e;
		}

		return $this;
	}

	/**
	 * Insert the current node to the right of (after) a sibling node
	 *
	 * WARNING: If it's an existing node it will be COPIED, not moved.
	 *
	 * @param TreeModel $siblingNode We will be inserted after this node
	 *
	 * @return $this for chaining
	 * @throws \Exception
	 */
	public function insertRightOf(TreeModel $siblingNode)
	{
		// Get a reference to the database
		$db = $this->getDbo();

		// Get the field names
		$fldRgt = $db->qn($this->getFieldAlias('rgt'));
		$fldLft = $db->qn($this->getFieldAlias('lft'));

		// Get the value of the parent node's lft
		$myLeft = $siblingNode->lft;

		// Update my lft/rgt values
		$this->lft = $myLeft;
		$this->rgt = $myLeft + 1;

		$db->transactionStart();

		try
		{
			$db->setQuery(
				$db->getQuery(true)
					->update($db->qn($this->tableName))
					->set($fldLft . ' = ' . $fldLft . '+2')
					->where($fldLft . ' >= ' . $db->q($myLeft))
			)->execute();

			$db->setQuery(
				$db->getQuery(true)
					->update($db->qn($this->tableName))
					->set($fldRgt . ' = ' . $fldRgt . '+2')
					->where($fldRgt . ' > ' . $db->q($myLeft))
			)->execute();

			$this->save();
		}
		catch (\Exception $e)
		{
			$db->transactionRollback();

			throw $e;
		}

		return $this;

		/**

		 */
		/**/
	}

	/**
	 * Alias for insertRightOf
	 *
	 * @param TreeModel $siblingNode
	 *
	 * @return $this for chaining
	 */
	public function insertAsSiblingOf(TreeModel $siblingNode)
	{
		return $this->insertRightOf($siblingNode);
	}

	public function moveLeft()
	{
		// @todo
	}

	public function moveRight()
	{
		// @todo
	}

	public function moveToLeftOf(TreeModel $siblingNode)
	{
		// @todo
	}

	public function moveToRightOf(TreeModel $siblingNode)
	{
		// @todo
	}

	/**
	 * Alias for moveToRightOf
	 *
	 * @param TreeModel $siblingNode
	 *
	 * @return $this for chaining
	 */
	public function makeNextSiblingOf(TreeModel $siblingNode)
	{
		return $this->moveToRightOf($siblingNode);
	}

	/**
	 * Alias for makeNextSiblingOf
	 *
	 * @param TreeModel $siblingNode
	 *
	 * @return $this for chaining
	 */
	public function makeSiblingOf(TreeModel $siblingNode)
	{
		return $this->makeNextSiblingOf($siblingNode);
	}

	/**
	 * Alias for moveToLeftOf
	 *
	 * @param TreeModel $siblingNode
	 *
	 * @return $this for chaining
	 */
	public function makePreviousSiblingOf(TreeModel $siblingNode)
	{
		return $this->moveToLeftOf($siblingNode);
	}

	public function makeFirstChildOf(TreeModel $parentNode)
	{
		// @todo
	}

	public function makeLastChildOf(TreeModel $parentNode)
	{
		// @todo
	}

	/**
	 * Alias for makeLastChildOf
	 *
	 * @param TreeModel $parentNode
	 *
	 * @return $this for chaining
	 */
	public function makeChildOf(TreeModel $parentNode)
	{
		return $this->makeLastChildOf($parentNode);
	}

	/**
	 * Makes the current node a root (and moving its entire subtree along the way). This is achieved by moving the node
	 * to the right of its root node
	 *
	 * @return  $this  for chaining
	 */
	public function makeRoot()
	{
		// Make sure we are not a root
		if ($this->isRoot())
		{
			return $this;
		}

		// Get a reference to my root
		$myRoot = $this->getRoot();

		// Double check I am not a root
		if ($this->equals($myRoot))
		{
			return $this;
		}

		// Move myself to the right of my root
		return $this->moveToRightOf($myRoot);
	}

	/**
	 * Gets the level (depth) of this node in the tree. The result is cached in $this->treeDepth for faster retrieval.
	 *
	 * @return int|mixed
	 */
	public function getLevel()
	{
		if (is_null($this->treeDepth))
		{
			$db = $this->getDbo();

			$fldLft = $db->qn($this->getFieldAlias('lft'));
			$fldRgt = $db->qn($this->getFieldAlias('rgt'));

			$query = $db->getQuery(true)
				->select('(COUNT(' . $db->qn('parent') . '.' . $fldLft . ') - 1) AS ' . $db->qn('depth'))
				->from($db->qn($this->tableName), $db->qn('node'))
				->from($db->qn($this->tableName), $db->qn('parent'))
				->where($db->qn('node') . '.' . $fldLft . ' >= ' . $db->qn('parent') . '.' . $fldLft)
				->where($db->qn('node') . '.' . $fldLft . ' <= ' . $db->qn('parent') . '.' . $fldRgt)
				->where($db->qn('node') . '.' . $fldLft . ' = ' . $db->q($this->lft))
				->group($db->qn('node') . '.' . $fldLft)
				->order($db->qn('node') . '.' . $fldLft . ' ASC');

			$this->treeDepth = $db->setQuery($query, 0, 1)->loadResult();
		}

		return $this->treeDepth;
	}

	public function getParent()
	{
		// @todo
	}

	/**
	 * Is this a top-level root node?
	 *
	 * @return bool
	 */
	public function isRoot()
	{
		// If lft=1 it is necessarily a root node
		if ($this->lft == 1)
		{
			return true;
		}

		// Otherwise make sure its level is 0
		return $this->getLevel() == 0;
	}

	/**
	 * Is this a leaf node (a node without children)?
	 *
	 * @return bool
	 */
	public function isLeaf()
	{
		return ($this->rgt - 1) == $this->lft;
	}

	/**
	 * Is this a child node (not root)?
	 *
	 * @return bool
	 */
	public function isChild()
	{
		return !$this->isRoot();
	}

	public function isDescendantOf($otherNode)
	{
		// @todo returns true if node is a descendant of the other
	}

	public function isSelfOrDescendantOf($otherNode)
	{
		// @todo returns true if node is self or a descendant
	}

	public function isAncestorOf($otherNode)
	{
		// @todo returns true if node is an ancestor of the other
	}

	public function isSelfOrAncestorOf($otherNode)
	{
		// @todo returns true if node is self or an ancestor of the other
	}

	/**
	 * Is $node this very node?
	 *
	 * @param $node
	 *
	 * @return bool
	 */
	public function equals($node)
	{
		return ($this == $node);
		// @todo current node instance equals the other
	}

	public function insideSubtree($otherNode)
	{
		// @todo checks whether the given node is inside the subtree defined by the left and right indices of the current node
	}

	public function inSameScope($otherNode)
	{
		// @todo returns true if both this node and $otherNode are root, leaf or child (same tree scope)
	}

	protected function scopeAncestorsAndSelf()
	{
		// @todo
	}

	protected function scopeAncestors()
	{
		// @todo
	}

	protected function scopeSiblingsAndSelf()
	{
		// @todo
	}

	protected function scopeSiblings()
	{
		// @todo
	}

	protected function scopeLeaves()
	{
		// @todo
	}

	protected function scopeDescendantsAndSelf()
	{
		// @todo
	}

	protected function scopeDescendants()
	{
		// @todo
	}

	protected function scopeImmediateDescendants()
	{
		// @todo
	}

	public function withoutNode(TreeModel $node)
	{
		// @todo
	}

	protected function scopeWithoutSelf()
	{
		// @todo
	}

	protected function scopeWithoutRoot()
	{
		// @todo
	}

	public function getRoot()
	{
		// If this is a root node return itself (there is no such thing as the root of a root node)
		if ($this->isRoot())
		{
			return $this;
		}

		if (empty($this->treeRoot) || !is_object($this->treeRoot) || !($this->treeRoot instanceof TreeModel))
		{
			$this->treeRoot = null;

			// First try to get the record with the minimum ID
			$db = $this->getDbo();

			$fldLft = $db->qn($this->getFieldAlias('lft'));
			$fldRgt = $db->qn($this->getFieldAlias('rgt'));

			$subQuery = $db->getQuery(true)
				->select('MIN(' . $fldLft . ')')
				->from($db->qn($this->tableName));

			try
			{
				$root = $this->getClone()->reset()
					->whereRaw($fldLft . ' = (' . (string)$subQuery . ')')
					->firstOrFail();

				if (($root->lft < $this->lft) && ($root->rgt > $this->rgt))
				{
					$this->treeRoot = $root;
				}
			}
			catch (\RuntimeException $e)
			{
				// If there is no root found throw an exception. Basically: your table is FUBAR.
				throw new \RuntimeException("No root found for table {$this->tableName}, node lft=" . $this->lft);
			}

			// If the above method didn't work, get all roots and select the one with the appropriate lft/rgt values
			if (is_null($this->treeRoot))
			{
				// Find the node with depth = 0, lft < our lft and rgt > our right. That's our root node.
				$query = $db->getQuery(true)
					->select(array(
						$fldLft,
						'(COUNT(' . $db->qn('parent') . '.' . $fldLft . ') - 1) AS ' . $db->qn('depth')
					))
					->from($db->qn($this->tableName), $db->qn('node'))
					->from($db->qn($this->tableName), $db->qn('parent'))
					->where($db->qn('node') . '.' . $fldLft . ' >= ' . $db->qn('parent') . '.' . $fldLft)
					->where($db->qn('node') . '.' . $fldLft . ' <= ' . $db->qn('parent') . '.' . $fldRgt)
					->where($db->qn('node') . '.' . $fldLft . ' < ' . $db->q($this->lft))
					->where($db->qn('node') . '.' . $fldRgt . ' > ' . $db->q($this->rgt))
					->having($db->qn('depth') . ' = ' . $db->q(0))
					->group($db->qn('node') . '.' . $fldLft);

				// Get the lft value
				$targetLeft = $db->setQuery($query)->loadResult();

				if (empty($targetLeft))
				{
					// If there is no root found throw an exception. Basically: your table is FUBAR.
					throw new \RuntimeException("No root found for table {$this->tableName}, node lft=" . $this->lft);
				}

				try
				{
					$this->treeRoot = $this->getClone()->reset()
						->whereRaw($fldLft . ' = ' . $db->q($targetLeft))
						->firstOrFail();
				}
				catch (\RuntimeException $e)
				{
					// If there is no root found throw an exception. Basically: your table is FUBAR.
					throw new \RuntimeException("No root found for table {$this->tableName}, node lft=" . $this->lft);
				}
			}
		}

		return $this->treeRoot;
	}

	public function getAncestorsAndSelf()
	{
		// @todo
	}

	public function getAncestorsAndSelfWithoutRoot()
	{
		// @todo
	}

	public function getAncestors()
	{
		// @todo
	}

	public function getAncestorsWithoutRoot()
	{
		// @todo
	}

	public function getSiblingsAndSelf()
	{
		// @todo
	}

	public function getSiblings()
	{
		// @todo
	}

	public function getLeaves()
	{
		// @todo
	}

	public function getDescendantsAndSelf()
	{
		// @todo
	}

	public function getDescendants()
	{
		// @todo
	}

	public function getImmediateDescendants()
	{
		// @todo
	}

	public function getNestedList($column, $key = null, $seperator = ' ')
	{
		// @todo returns a key-value pair array indicating a node's depth. Useful for filling <select> elements, etc.
	}

	public function isValid()
	{
		// @todo
	}

	public function rebuild()
	{
		// @todo
	}
} 