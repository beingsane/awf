<?php

class DataModelDataprovider
{
    public static function getTest__construct()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'state' => array()
                ),
                'container'   => false,
                'id'          => 'id',
                'table'       => '#__dbtest',
                'knownFields' => null,
                'autoChecks'  => null,
                'skipChecks'  => null,
                'aliasFields' => null,
                'behaviours'  => null,
                'fillable'    => null,
                'guarded'     => null,
                'relations'   => null
            ),
            array(
                'case' => 'Not passing a container',
                'addBehaviour' => 0,
                'id' => 'id',
                'table' => '#__dbtest',
                'fields' => null,
                'autochecks' => true,
                'skipchecks' => array(),
                'alias' => array(),
                'fillable' => array(),
                'autofill' => false,
                'guarded' => array(),
                'values'  => array(),
                'relations' => array(),
                'counterApp' => 1,
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'state' => array()
                ),
                'container'   => true,
                'id'          => 'id',
                'table'       => '#__dbtest',
                'knownFields' => null,
                'autoChecks'  => true,
                'skipChecks'  => array('title'),
                'aliasFields' => array('foobar' => 'title'),
                'behaviours'  => array('foo', 'bar'),
                'fillable'    => '',
                'guarded'     => '',
                'relations'   => null
            ),
            array(
                'case' => 'Passing id, tablename, autochecks are on, skipchecks fields, alias field and behaviours',
                'addBehaviour' => 2,
                'id' => 'id',
                'table' => '#__dbtest',
                'fields' => array(
                    'id' => (object) array(
                        'Field' => 'id',
                        'Type' => 'int(10) unsigned',
                        'Collation' => null,
                        'Null' => 'NO',
                        'Key' => 'PRI',
                        'Default' => null,
                        'Extra' => 'auto_increment',
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'title' => (object) array(
                        'Field' => 'title',
                        'Type' => 'varchar(50)',
                        'Collation' => 'utf8_general_ci',
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' =>null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'start_date' => (object) array(
                        'Field' => 'start_date',
                        'Type' => 'datetime',
                        'Collation' => null,
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' => null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'description' => (object) array(
                        'Field' => 'description',
                        'Type' => 'text',
                        'Collation' => 'utf8_general_ci',
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' => null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    )
                ),
                'autochecks' => true,
                'skipchecks' => array('title'),
                'alias' => array('foobar' => 'title'),
                'fillable' => array(),
                'autofill' => false,
                'guarded' => array(),
                'values'  => array(),
                'relations' => array(),
                'counterApp' => 0,
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'state' => array()
                ),
                'container'   => true,
                'id'          => null,
                'table'       => null,
                'knownFields' => null,
                'autoChecks'  => null,
                'skipChecks'  => null,
                'aliasFields' => null,
                'behaviours'  => null,
                'fillable'    => null,
                'guarded'     => null,
                'relations'   => null
            ),
            array(
                'case' => 'Not passing anything',
                'addBehaviour' => 0,
                'id' => 'fakeapp_test_id',
                'table' => '#__fakeapp_tests',
                'fields' => array(
                    'fakeapp_test_id' => (object) array(
                        'Field' => 'fakeapp_test_id',
                        'Type' => 'int(10) unsigned',
                        'Collation' => null,
                        'Null' => 'NO',
                        'Key' => 'PRI',
                        'Default' => null,
                        'Extra' => 'auto_increment',
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'title' => (object) array(
                        'Field' => 'title',
                        'Type' => 'varchar(50)',
                        'Collation' => 'utf8_general_ci',
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' =>null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'start_date' => (object) array(
                        'Field' => 'start_date',
                        'Type' => 'datetime',
                        'Collation' => null,
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' => null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'description' => (object) array(
                        'Field' => 'description',
                        'Type' => 'text',
                        'Collation' => 'utf8_general_ci',
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' => null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    )
                ),
                'autochecks' => true,
                'skipchecks' => array(),
                'alias' => array(),
                'fillable' => array(),
                'autofill' => false,
                'guarded' => array(),
                'values'  => array(),
                'relations' => array(),
                'counterApp' => 0,
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'state' => array()
                ),
                'container'   => true,
                'id'          => 'id',
                'table'       => '#__dbtest',
                'knownFields' => array(
                    'id' => (object) array(
                        'Field' => 'id',
                        'Type' => 'int(10) unsigned',
                        'Default' => null,
                    ),
                    'title' => (object) array(
                        'Field' => 'title',
                        'Type' => 'varchar(50)',
                        'Default' =>null,
                    ),
                    'start_date' => (object) array(
                        'Field' => 'start_date',
                        'Type' => 'datetime',
                        'Default' => null,
                    ),
                    'description' => (object) array(
                        'Field' => 'description',
                        'Type' => 'text',
                        'Default' => null,
                    )
                ),
                'autoChecks'  => null,
                'skipChecks'  => null,
                'aliasFields' => null,
                'behaviours'  => null,
                'fillable'    => '',
                'guarded'     => '',
                'relations'   => null
            ),
            array(
                'case' => 'Passing id, tablename and known fields',
                'addBehaviour' => 0,
                'id' => 'id',
                'table' => '#__dbtest',
                'fields' => array(
                    'id' => (object) array(
                        'Field' => 'id',
                        'Type' => 'int(10) unsigned',
                        'Default' => null,
                    ),
                    'title' => (object) array(
                        'Field' => 'title',
                        'Type' => 'varchar(50)',
                        'Default' =>null,
                    ),
                    'start_date' => (object) array(
                        'Field' => 'start_date',
                        'Type' => 'datetime',
                        'Default' => null,
                    ),
                    'description' => (object) array(
                        'Field' => 'description',
                        'Type' => 'text',
                        'Default' => null,
                    )
                ),
                'autochecks' => true,
                'skipchecks' => array(),
                'alias' => array(),
                'fillable' => array(),
                'autofill' => false,
                'guarded' => array(),
                'values'  => array(),
                'relations' => array(),
                'counterApp' => 0,
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'state' => array()
                ),
                'container'   => true,
                'id'          => 'id',
                'table'       => '#__dbtest',
                'knownFields' => null,
                'autoChecks'  => null,
                'skipChecks'  => null,
                'aliasFields' => array('foobar' => 'description'),
                'behaviours'  => null,
                'fillable'    => array('title', 'wrong', 'foobar'),
                'guarded'     => '',
                'relations'   => null
            ),
            array(
                'case' => 'Setting up fillable fields, no guarded ones',
                'addBehaviour' => 0,
                'id' => 'id',
                'table' => '#__dbtest',
                'fields' => null,
                'autochecks' => true,
                'skipchecks' => array(),
                'alias' => array('foobar' => 'description'),
                'fillable' => array('title', 'description'),
                'autofill' => true,
                'guarded' => array(),
                'values'  => array(),
                'relations' => array(),
                'counterApp' => 0,
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'state' => array(
                        'title' => 'test'
                    )
                ),
                'container'   => true,
                'id'          => 'id',
                'table'       => '#__dbtest',
                'knownFields' => null,
                'autoChecks'  => null,
                'skipChecks'  => null,
                'aliasFields' => array('foobar' => 'description'),
                'behaviours'  => null,
                'fillable'    => array('title', 'wrong', 'foobar'),
                'guarded'     => '',
                'relations'   => null
            ),
            array(
                'case' => 'Setting up fillable fields, no guarded ones, data in the request',
                'addBehaviour' => 0,
                'id' => 'id',
                'table' => '#__dbtest',
                'fields' => null,
                'autochecks' => true,
                'skipchecks' => array(),
                'alias' => array('foobar' => 'description'),
                'fillable' => array('title', 'description'),
                'autofill' => true,
                'guarded' => array(),
                'values'  => array('title' => 'test', 'description' => null),
                'relations' => array(),
                'counterApp' => 0,
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'state' => array(
                        'title' => 'test',
                        'description' => 'test'
                    )
                ),
                'container'   => true,
                'id'          => 'id',
                'table'       => '#__dbtest',
                'knownFields' => null,
                'autoChecks'  => null,
                'skipChecks'  => null,
                'aliasFields' => array('foobar' => 'description'),
                'behaviours'  => null,
                'fillable'    => null,
                'guarded'     => array('foobar'),
                'relations'   => null
            ),
            array(
                'case' => 'Setting up guarded fields, no fillable ones, data in the request',
                'addBehaviour' => 0,
                'id' => 'id',
                'table' => '#__dbtest',
                'fields' => null,
                'autochecks' => true,
                'skipchecks' => array(),
                'alias' => array('foobar' => 'description'),
                'fillable' => array(),
                'autofill' => true,
                'guarded' => array('description'),
                'values'  => array('title' => 'test', 'description' => null),
                'relations' => array(),
                'counterApp' => 0,
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'state' => array(
                        'title'       => 'test',
                        'description' => 'test'
                    )
                ),
                'container'   => true,
                'id'          => 'id',
                'table'       => '#__dbtest',
                'knownFields' => null,
                'autoChecks'  => null,
                'skipChecks'  => null,
                'aliasFields' => null,
                'behaviours'  => null,
                'fillable'    => array('title', 'description'),
                'guarded'     => array('description'),
                'relations'   => null
            ),
            array(
                'case' => 'Setting up guarded fields AND fillable ones, data in the request',
                'addBehaviour' => 0,
                'id' => 'id',
                'table' => '#__dbtest',
                'fields' => null,
                'autochecks' => true,
                'skipchecks' => array(),
                'alias' => array(),
                'fillable' => array('title', 'description'),
                'autofill' => true,
                'guarded' => array('description'),
                'values'  => array('title' => 'test', 'description' => null, 'start_date' => null),
                'relations' => array(),
                'counterApp' => 0,
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'state' => array(
                        'title'       => 'test',
                        'description' => 'test'
                    )
                ),
                'container'   => true,
                'id'          => 'id',
                'table'       => '#__dbtest_defaults',
                'knownFields' => null,
                'autoChecks'  => null,
                'skipChecks'  => null,
                'aliasFields' => null,
                'behaviours'  => null,
                'fillable'    => array('title', 'description'),
                'guarded'     => array('description'),
                'relations'   => null
            ),
            array(
                'case' => 'Setting up guarded fields AND fillable ones, data in the request, table with defaults values',
                'addBehaviour' => 0,
                'id' => 'id',
                'table' => '#__dbtest_defaults',
                'fields' => null,
                'autochecks' => true,
                'skipchecks' => array(),
                'alias' => array(),
                'fillable' => array('title', 'description'),
                'autofill' => true,
                'guarded' => array('description'),
                'values'  => array('title' => 'test', 'description' => null, 'start_date' => '0000-00-00 00:00:00'),
                'relations' => array(),
                'counterApp' => 0,
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'state' => array()
                ),
                'container'   => true,
                'id'          => 'fakeapp_parent_id',
                'table'       => '#__fakeapp_parents',
                'knownFields' => null,
                'autoChecks'  => null,
                'skipChecks'  => null,
                'aliasFields' => null,
                'behaviours'  => null,
                'fillable'    => null,
                'guarded'     => null,
                'relations'   => ''
            ),
            array(
                'case' => 'Passing a relation - Wrong format',
                'addBehaviour' => 0,
                'id' => 'fakeapp_parent_id',
                'table' => '#__fakeapp_parents',
                'fields' => null,
                'autochecks' => true,
                'skipchecks' => array(),
                'alias' => array(),
                'fillable' => array(),
                'autofill' => false,
                'guarded' => array(),
                'values'  => array(),
                'relations' => array(),
                'counterApp' => 0,
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'state' => array()
                ),
                'container'   => true,
                'id'          => 'fakeapp_parent_id',
                'table'       => '#__fakeapp_parents',
                'knownFields' => null,
                'autoChecks'  => null,
                'skipChecks'  => null,
                'aliasFields' => null,
                'behaviours'  => null,
                'fillable'    => null,
                'guarded'     => null,
                'relations'   => array()
            ),
            array(
                'case' => 'Passing a relation - Wrong format',
                'addBehaviour' => 0,
                'id' => 'fakeapp_parent_id',
                'table' => '#__fakeapp_parents',
                'fields' => null,
                'autochecks' => true,
                'skipchecks' => array(),
                'alias' => array(),
                'fillable' => array(),
                'autofill' => false,
                'guarded' => array(),
                'values'  => array(),
                'relations' => array(),
                'counterApp' => 0,
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'state' => array()
                ),
                'container'   => true,
                'id'          => 'fakeapp_parent_id',
                'table'       => '#__fakeapp_parents',
                'knownFields' => null,
                'autoChecks'  => null,
                'skipChecks'  => null,
                'aliasFields' => null,
                'behaviours'  => null,
                'fillable'    => null,
                'guarded'     => null,
                'relations'   => array('dummy' => '')
            ),
            array(
                'case' => 'Passing a relation - Wrong format',
                'addBehaviour' => 0,
                'id' => 'fakeapp_parent_id',
                'table' => '#__fakeapp_parents',
                'fields' => null,
                'autochecks' => true,
                'skipchecks' => array(),
                'alias' => array(),
                'fillable' => array(),
                'autofill' => false,
                'guarded' => array(),
                'values'  => array(),
                'relations' => array(),
                'counterApp' => 0,
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'state' => array()
                ),
                'container'   => true,
                'id'          => 'fakeapp_parent_id',
                'table'       => '#__fakeapp_parents',
                'knownFields' => null,
                'autoChecks'  => null,
                'skipChecks'  => null,
                'aliasFields' => null,
                'behaviours'  => null,
                'fillable'    => null,
                'guarded'     => null,
                'relations'   => array(
                    'children' => array(
                        'type' => 'hasMany',
                        'foreignModelClass' => 'Fakeapp\Model\Children',
                        'localKey' => 'fakeapp_parent_id',
                        'foreignKey' => 'fakeapp_parent_id'
                    )
                )
            ),
            array(
                'case' => 'Passing a relation - Correct format',
                'addBehaviour' => 0,
                'id' => 'fakeapp_parent_id',
                'table' => '#__fakeapp_parents',
                'fields' => null,
                'autochecks' => true,
                'skipchecks' => array(),
                'alias' => array(),
                'fillable' => array(),
                'autofill' => false,
                'guarded' => array(),
                'values'  => array(),
                'relations' => array('children'),
                'counterApp' => 0,
            )
        );

        return $data;
    }

    public static function getTestGetTableFields()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'tables'     => null,
                    'tableName'  => null
                ),
                'table' => '#__dbtest'
            ),
            array(
                'case' => 'Table exists, abstract name, loaded cache',
                'result' => array(
                    'id' => (object) array(
                        'Field' => 'id',
                        'Type' => 'int(10) unsigned',
                        'Collation' => null,
                        'Null' => 'NO',
                        'Key' => 'PRI',
                        'Default' => null,
                        'Extra' => 'auto_increment',
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'title' => (object) array(
                        'Field' => 'title',
                        'Type' => 'varchar(50)',
                        'Collation' => 'utf8_general_ci',
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' =>null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'start_date' => (object) array(
                        'Field' => 'start_date',
                        'Type' => 'datetime',
                        'Collation' => null,
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' => null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'description' => (object) array(
                        'Field' => 'description',
                        'Type' => 'text',
                        'Collation' => 'utf8_general_ci',
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' => null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    )
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'tables'     => null,
                    'tableName'  => '#__dbtest'
                ),
                'table' => null
            ),
            array(
                'case' => 'Table exists, abstract name, loaded cache, table name got from the object',
                'result' => array(
                    'id' => (object) array(
                        'Field' => 'id',
                        'Type' => 'int(10) unsigned',
                        'Collation' => null,
                        'Null' => 'NO',
                        'Key' => 'PRI',
                        'Default' => null,
                        'Extra' => 'auto_increment',
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'title' => (object) array(
                        'Field' => 'title',
                        'Type' => 'varchar(50)',
                        'Collation' => 'utf8_general_ci',
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' =>null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'start_date' => (object) array(
                        'Field' => 'start_date',
                        'Type' => 'datetime',
                        'Collation' => null,
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' => null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'description' => (object) array(
                        'Field' => 'description',
                        'Type' => 'text',
                        'Collation' => 'utf8_general_ci',
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' => null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    )
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'tables'     => null,
                    'tableName'  => null
                ),
                'table' => '#__wrong'
            ),
            array(
                'case' => 'Table does not exist, abstract name, loaded cache',
                'result' => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'tables'     => null,
                    'tableName'  => null
                ),
                'table' => 'awf_dbtest'
            ),
            array(
                'case' => 'Table exists, actual name, loaded cache',
                'result' => array(
                    'id' => (object) array(
                        'Field' => 'id',
                        'Type' => 'int(10) unsigned',
                        'Collation' => null,
                        'Null' => 'NO',
                        'Key' => 'PRI',
                        'Default' => null,
                        'Extra' => 'auto_increment',
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'title' => (object) array(
                        'Field' => 'title',
                        'Type' => 'varchar(50)',
                        'Collation' => 'utf8_general_ci',
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' =>null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'start_date' => (object) array(
                        'Field' => 'start_date',
                        'Type' => 'datetime',
                        'Collation' => null,
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' => null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'description' => (object) array(
                        'Field' => 'description',
                        'Type' => 'text',
                        'Collation' => 'utf8_general_ci',
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' => null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    )
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'tables'     => 'nuke',
                    'tableName'  => null
                ),
                'table' => '#__dbtest'
            ),
            array(
                'case' => 'Table exists, abstract name, clean cache',
                'result' => array(
                    'id' => (object) array(
                        'Field' => 'id',
                        'Type' => 'int(10) unsigned',
                        'Collation' => null,
                        'Null' => 'NO',
                        'Key' => 'PRI',
                        'Default' => null,
                        'Extra' => 'auto_increment',
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'title' => (object) array(
                        'Field' => 'title',
                        'Type' => 'varchar(50)',
                        'Collation' => 'utf8_general_ci',
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' =>null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'start_date' => (object) array(
                        'Field' => 'start_date',
                        'Type' => 'datetime',
                        'Collation' => null,
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' => null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'description' => (object) array(
                        'Field' => 'description',
                        'Type' => 'text',
                        'Collation' => 'utf8_general_ci',
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' => null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    )
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'tables'     => array(
                        '#__dbtest' => 'unset'
                    ),
                    'tableName'  => null
                ),
                'table' => '#__dbtest'
            ),
            array(
                'case' => 'Table exists, abstract name, table not inside the cache',
                'result' => array(
                    'id' => (object) array(
                        'Field' => 'id',
                        'Type' => 'int(10) unsigned',
                        'Collation' => null,
                        'Null' => 'NO',
                        'Key' => 'PRI',
                        'Default' => null,
                        'Extra' => 'auto_increment',
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'title' => (object) array(
                        'Field' => 'title',
                        'Type' => 'varchar(50)',
                        'Collation' => 'utf8_general_ci',
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' =>null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'start_date' => (object) array(
                        'Field' => 'start_date',
                        'Type' => 'datetime',
                        'Collation' => null,
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' => null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'description' => (object) array(
                        'Field' => 'description',
                        'Type' => 'text',
                        'Collation' => 'utf8_general_ci',
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' => null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    )
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'tables'     => array(
                        '#__dbtest' => false
                    ),
                    'tableName'  => null
                ),
                'table' => '#__dbtest'
            ),
            array(
                'case' => 'Table exists, abstract name, table had a false value inside the cache',
                'result' => array(
                    'id' => (object) array(
                        'Field' => 'id',
                        'Type' => 'int(10) unsigned',
                        'Collation' => null,
                        'Null' => 'NO',
                        'Key' => 'PRI',
                        'Default' => null,
                        'Extra' => 'auto_increment',
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'title' => (object) array(
                        'Field' => 'title',
                        'Type' => 'varchar(50)',
                        'Collation' => 'utf8_general_ci',
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' =>null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'start_date' => (object) array(
                        'Field' => 'start_date',
                        'Type' => 'datetime',
                        'Collation' => null,
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' => null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    ),
                    'description' => (object) array(
                        'Field' => 'description',
                        'Type' => 'text',
                        'Collation' => 'utf8_general_ci',
                        'Null' => 'NO',
                        'Key' => null,
                        'Default' => null,
                        'Extra' => null,
                        'Privileges' => 'select,insert,update,references',
                        'Comment' => null
                    )
                )
            )
        );

        return $data;
    }

    public static function getTestGetDbo()
    {
        $data[] = array(
            array(
                'nuke' => false
            ),
            array(
                'case' => 'The internal db pointer is an object',
                'dbCounter' => 0
            )
        );

        $data[] = array(
            array(
                'nuke' => true
            ),
            array(
                'case' => 'The internal db pointer is not an object, getting from the container',
                'dbCounter' => 1
            )
        );

        return $data;
    }

    public static function getTestSetFieldValue()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'alias' => array()
                ),
                'name'  => 'foo',
                'value' => 'bar'
            ),
            array(
                'case'  => 'Setting a method, no alias nor specific setter',
                'method' => 'SetFooAttribute',
                'count' => 0,
                'set'   => true,
                'key'   => 'foo',
                'value' => 'bar'
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'alias' => array(
                        'foo' => 'test'
                    )
                ),
                'name'  => 'foo',
                'value' => 'bar'
            ),
            array(
                'case'  => 'Setting a method, with alias and no specific setter',
                'method' => 'SetFooAttribute',
                'count' => 0,
                'set'   => true,
                'key'   => 'test',
                'value' => 'bar'
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'alias' => array()
                ),
                'name'  => 'dummy',
                'value' => 'bar'
            ),
            array(
                'case'  => 'Setting a method, no alias and with a specific setter',
                'method' => 'SetDummyAttribute',
                'count' => 1,
                'set'   => false,
                'key'   => '',
                'value' => ''
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'alias' => array(
                        'dummy' => 'foo'
                    )
                ),
                'name'  => 'dummy',
                'value' => 'bar'
            ),
            array(
                'case'  => 'Setting a method, method with a specific setter AND a different alias',
                'method' => 'SetFooAttribute',
                'count' => 0,
                'set'   => true,
                'key'   => 'foo',
                'value' => 'bar'
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'alias' => array(
                        'foo' => 'dummy'
                    )
                ),
                'name'  => 'foo',
                'value' => 'bar'
            ),
            array(
                'case'  => 'Setting a method, with an alias pointing to a specific setter',
                'method' => 'SetDummyAttribute',
                'count' => 1,
                'set'   => false,
                'key'   => '',
                'value' => ''
            )
        );

        return $data;
    }

    public static function getTestReset()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'recordData'      => array('id' => null, 'title' => null, 'start_date' => null, 'description' => null),
                    'eagerRelations'  => array(),
                    'relationFilters' => array()
                ),
                'table'     => '#__dbtest',
                'default'   => true,
                'relations' => false
            ),
            array(
                'case'           => 'Table with no defaults, no relations nor filters. Resetting to default, not resetting the relations',
                'resetRelations' => false,
                'eager'          => array(),
                'data'           => array(
                    'id'          => null,
                    'title'       => null,
                    'start_date'  => null,
                    'description' => null
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'recordData'      => array('id' => null, 'title' => null, 'start_date' => null, 'description' => null, 'foobar' => 'test'),
                    'eagerRelations'  => array(),
                    'relationFilters' => array()
                ),
                'table'     => '#__dbtest',
                'default'   => true,
                'relations' => false
            ),
            array(
                'case'           => 'Table with no defaults, no relations nor filters. Resetting to default, not resetting the relations. Additional fields set',
                'resetRelations' => false,
                'eager'          => array(),
                'data'           => array(
                    'id'          => null,
                    'title'       => null,
                    'start_date'  => null,
                    'description' => null
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'recordData'      => array('id' => null, 'title' => null, 'start_date' => null, 'description' => null),
                    'eagerRelations'  => array(),
                    'relationFilters' => array()
                ),
                'table'     => '#__dbtest',
                'default'   => false,
                'relations' => false
            ),
            array(
                'case'           => 'Table with no defaults, no relations nor filters. Not resetting to default, not resetting the relations',
                'resetRelations' => false,
                'eager'          => array(),
                'data'           => array(
                    'id'          => null,
                    'title'       => null,
                    'start_date'  => null,
                    'description' => null
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'recordData'      => array('id' => null, 'title' => null, 'start_date' => null, 'description' => null),
                    'eagerRelations'  => array(),
                    'relationFilters' => array()
                ),
                'table'     => '#__dbtest_defaults',
                'default'   => true,
                'relations' => false
            ),
            array(
                'case'           => 'Table with defaults, no relations nor filters. Resetting to defaults, not resetting the relations',
                'resetRelations' => false,
                'eager'          => array(),
                'data'           => array(
                    'id'          => null,
                    'title'       => 'dummy',
                    'start_date'  => '0000-00-00 00:00:00',
                    'description' => null
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'recordData'      => array('id' => null, 'title' => null, 'start_date' => null, 'description' => null),
                    'eagerRelations'  => array(),
                    'relationFilters' => array()
                ),
                'table'     => '#__dbtest_defaults',
                'default'   => false,
                'relations' => false
            ),
            array(
                'case'           => 'Table with defaults, no relations nor filters. Not resetting to defaults, not resetting the relations',
                'resetRelations' => false,
                'eager'          => array(),
                'data'           => array(
                    'id'          => null,
                    'title'       => null,
                    'start_date'  => null,
                    'description' => null
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'recordData'      => array(),
                    'eagerRelations'  => array('foo' => 'bar'),
                    'relationFilters' => array('dummy')
                ),
                'table'     => '#__dbtest',
                'default'   => true,
                'relations' => false
            ),
            array(
                'case'           => 'Relations set, but we are not resetting them',
                'resetRelations' => false,
                'eager'          => array('foo' => 'bar'),
                'data'           => array(
                    'id'          => null,
                    'title'       => null,
                    'start_date'  => null,
                    'description' => null
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'recordData'      => array(),
                    'eagerRelations'  => array('foo' => 'bar'),
                    'relationFilters' => array('dummy')
                ),
                'table'     => '#__dbtest',
                'default'   => true,
                'relations' => true
            ),
            array(
                'case'           => 'Relations set, we are resetting them',
                'resetRelations' => true,
                'eager'          => array(),
                'data'           => array(
                    'id'          => null,
                    'title'       => null,
                    'start_date'  => null,
                    'description' => null
                )
            )
        );

        return $data;
    }

    public static function getTest__call()
    {
        $data[] = array(
            array(
                'method'   => 'dummyProperty',
                'argument' => null,
                'mock'     => array(
                    'magic' => false
                )
            ),
            array(
                'case'     => 'Property with a specific method, no argument passed',
                'method'   => 'scopeDummyProperty',
                'property' => 'dummyProperty',
                'value'    => 'default',
                'count'    => 1,
                'magic'    => false,
                'relationCall' => false
            )
        );

        $data[] = array(
            array(
                'method'   => 'dummyProperty',
                'argument' => array('test', null),
                'mock'     => array(
                    'magic' => false
                )
            ),
            array(
                'case'     => 'Property with a specific method, argument passed',
                'method'   => 'scopeDummyProperty',
                'property' => 'dummyProperty',
                'value'    => 'test',
                'count'    => 0,
                'magic'    => true,
                'relationCall' => false
            )
        );

        $data[] = array(
            array(
                'method'   => 'dummyPropertyNoFunction',
                'argument' => null,
                'mock'     => array(
                    'magic' => false
                )
            ),
            array(
                'case'     => 'Property without a specific method, no argument passed',
                'method'   => 'scopeDummyPropertyNoFunction',
                'property' => 'dummyPropertyNoFunction',
                'value'    => null,
                'count'    => 0,
                'magic'    => true,
                'relationCall' => false
            )
        );

        $data[] = array(
            array(
                'method'   => 'dummyPropertyNoFunction',
                'argument' => array('test', null),
                'mock'     => array(
                    'magic' => false
                )
            ),
            array(
                'case'     => 'Property without a specific method, argument passed',
                'method'   => 'scopeDummyPropertyNoFunction',
                'property' => 'dummyPropertyNoFunction',
                'value'    => 'test',
                'count'    => 0,
                'magic'    => true,
                'relationCall' => false
            )
        );

        $data[] = array(
            array(
                'method'   => 'dummyPropertyNoFunction',
                'argument' => array('test', null),
                'mock'     => array(
                    'magic' => true
                )
            ),
            array(
                'case'     => 'Property without a specific method, a magic method exists inside the relation manager',
                'method'   => 'scopeDummyPropertyNoFunction',
                'property' => 'dummyPropertyNoFunction',
                'value'    => 'default',
                'count'    => 0,
                'magic'    => true,
                'relationCall' => true
            )
        );

        return $data;
    }

    public static function getTest__isset()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'getField'  => 1,
                    'magic'     => '',
                    'alias'     => array(),
                    'relationGet' => null
                ),
                'property' => 'id'
            ),
            array(
                'case'          => 'Field is set and has a NOT NULL value',
                'getField'      => 'id',
                'magic'         => false,
                'relationGet'   => false,
                'isset'         => true
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'getField'  => null,
                    'magic'     => '',
                    'alias'     => array(),
                    'relationGet' => null
                ),
                'property' => 'id'
            ),
            array(
                'case'          => 'Field is set and has a NULL value',
                'getField'      => 'id',
                'magic'         => false,
                'relationGet'   => false,
                'isset'         => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'getField'  => 1,
                    'magic'     => '',
                    'alias'     => array(
                        'foobar' => 'id'
                    ),
                    'relationGet' => null
                ),
                'property' => 'foobar'
            ),
            array(
                'case'          => 'Field had an alias and has a NOT NULL value',
                'getField'      => 'id',
                'magic'         => false,
                'relationGet'   => false,
                'isset'         => true
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'getField'  => null,
                    'magic'     => '',
                    'alias'     => array(
                        'foobar' => 'id'
                    ),
                    'relationGet' => null
                ),
                'property' => 'foobar'
            ),
            array(
                'case'          => 'Field had an alias and has a NULL value',
                'getField'      => 'id',
                'magic'         => false,
                'relationGet'   => false,
                'isset'         => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'getField'  => null,
                    'magic'     => false,
                    'alias'     => array(),
                    'relationGet' => null
                ),
                'property' => 'foobar'
            ),
            array(
                'case'          => 'Field is not set and is not a magic property',
                'getField'      => false,
                'magic'         => 'foobar',
                'relationGet'  => false,
                'isset'         => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'getField'  => null,
                    'magic'     => true,
                    'alias'     => array(),
                    'relationGet' => 1
                ),
                'property' => 'foobar'
            ),
            array(
                'case'          => 'Field is not set and is a magic property, returns NOT NULL',
                'getField'      => false,
                'magic'         => 'foobar',
                'relationGet'   => true,
                'isset'         => true
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'getField'  => null,
                    'magic'     => true,
                    'alias'     => array(),
                    'relationGet' => null
                ),
                'property' => 'foobar'
            ),
            array(
                'case'          => 'Field is not set and is a magic property, returns NULL',
                'getField'      => false,
                'magic'         => 'foobar',
                'relationGet'   => true,
                'isset'         => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'getField'  => false,
                    'magic'     => '',
                    'alias'     => array(),
                    'relationGet' => null
                ),
                'property' => 'fltState'
            ),
            array(
                'case'          => 'Field starts with flt, no magic property set',
                'getField'      => null,
                'magic'         => 'state',
                'relationGet'   => false,
                'isset'         => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'getField'  => false,
                    'magic'     => true,
                    'alias'     => array(),
                    'relationGet' => null
                ),
                'property' => 'fltState'
            ),
            array(
                'case'          => 'Field starts with flt, magic property set and returns NULL',
                'getField'      => null,
                'magic'         => 'state',
                'relationGet'   => true,
                'isset'         => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'getField'  => false,
                    'magic'     => true,
                    'alias'     => array(),
                    'relationGet' => 1
                ),
                'property' => 'fltState'
            ),
            array(
                'case'          => 'Field starts with flt, magic property set and returns NOT NULL',
                'getField'      => null,
                'magic'         => 'state',
                'relationGet'   => true,
                'isset'         => true
            )
        );

        return $data;
    }

    public static function getTest__get()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'getField'    => 1,
                    'getState'    => 0,
                    'magic'       => '',
                    'alias'       => array(),
                    'relationGet' => null
                ),
                'property' => 'id'
            ),
            array(
                'case'          => 'Standard field of the DataModel',
                'getField'      => 'id',
                'getState'      => false,
                'magic'         => false,
                'relationGet'   => false,
                'get'           => 1
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'getField'    => 1,
                    'getState'    => 0,
                    'magic'       => '',
                    'alias'       => array(
                        'foobar' => 'id'
                    ),
                    'relationGet' => null
                ),
                'property' => 'foobar'
            ),
            array(
                'case'          => 'Standard field with an alias of the DataModel',
                'getField'      => 'id',
                'getState'      => false,
                'magic'         => false,
                'relationGet'   => false,
                'get'           => 1
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'getField'    => 0,
                    'getState'    => 1,
                    'magic'       => false,
                    'alias'       => array(),
                    'relationGet' => null
                ),
                'property' => 'foobar'
            ),
            array(
                'case'          => 'Field with has not a magic property method inside the relation manager',
                'getField'      => false,
                'getState'      => 'foobar',
                'magic'         => 'foobar',
                'relationGet'   => false,
                'get'           => 1
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'getField'    => 0,
                    'getState'    => 0,
                    'magic'       => true,
                    'alias'       => array(),
                    'relationGet' => 1
                ),
                'property' => 'foobar'
            ),
            array(
                'case'          => 'Field has a magic property method inside the relation manager',
                'getField'      => false,
                'getState'      => false,
                'magic'         => 'foobar',
                'relationGet'   => 'foobar',
                'get'           => 1
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'getField'    => 0,
                    'getState'    => 1,
                    'magic'       => false,
                    'alias'       => array(),
                    'relationGet' => null
                ),
                'property' => 'fltFoobar'
            ),
            array(
                'case'          => 'Field with has not a magic property method inside the relation manager - Magic name',
                'getField'      => false,
                'getState'      => 'foobar',
                'magic'         => 'foobar',
                'relationGet'   => false,
                'get'           => 1
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'getField'    => 0,
                    'getState'    => 0,
                    'magic'       => true,
                    'alias'       => array(),
                    'relationGet' => 1
                ),
                'property' => 'fltFoobar'
            ),
            array(
                'case'          => 'Field has a magic property method inside the relation manager - Magic name',
                'getField'      => false,
                'getState'      => false,
                'magic'         => 'foobar',
                'relationGet'   => 'foobar',
                'get'           => 1
            )
        );

        return $data;
    }

    public static function getTest__set()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'alias'    => array()
                ),
                'property' => 'id',
                'value'    => 10
            ),
            array(
                'case'     => 'Setting a property that exists in the table',
                'call'     => false,
                'count'    => 0,
                'method'   => 'scopeId',
                'setField' => 'id',
                'setState' => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'alias'    => array(
                        'foobar' => 'id'
                    )
                ),
                'property' => 'foobar',
                'value'    => 10
            ),
            array(
                'case'     => 'Setting a property that exists in the table using an alias',
                'call'     => false,
                'count'    => 0,
                'method'   => 'scopeId',
                'setField' => 'id',
                'setState' => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'alias'    => array()
                ),
                'property' => 'foobar',
                'value'    => 10
            ),
            array(
                'case'     => 'Property does not exists, so we set the state',
                'call'     => false,
                'count'    => 0,
                'method'   => 'scopeFoobar',
                'setField' => false,
                'setState' => 'foobar'
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'alias'    => array()
                ),
                'property' => 'dummyNoProperty',
                'value'    => 10
            ),
            array(
                'case'     => 'Property does not exists, but we have a magic method scope',
                'call'     => false,
                'count'    => 1,
                'method'   => 'scopeDummyNoProperty',
                'setField' => false,
                'setState' => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'alias'    => array()
                ),
                'property' => 'fltFoobar',
                'value'    => 10
            ),
            array(
                'case'     => 'Property does not exists, but its name is magic for the state',
                'call'     => false,
                'count'    => 0,
                'method'   => 'scopeFoobar',
                'setField' => false,
                'setState' => 'foobar'
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'alias'    => array()
                ),
                'property' => 'scopeFoobar',
                'value'    => 10
            ),
            array(
                'case'     => 'Property does not exists, but its name is magic for the state - Going to invoke the call method of the model',
                'call'     => true,
                'count'    => 0,
                'method'   => 'scopeFoobar',
                'setField' => false,
                'setState' => false
            )
        );

        return $data;
    }

    public static function getTestGetFieldValue()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'alias' => array()
                ),
                'find'     => 1,
                'property' => 'id',
                'default'  => null
            ),
            array(
                'case'   => 'Getting a property that exists',
                'method' => 'GetIdAttribute',
                'result' => 1,
                'count'  => 0
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'alias' => array()
                ),
                'find'     => null,
                'property' => 'id',
                'default'  => null
            ),
            array(
                'case'   => 'Getting a property that exists, record not loaded',
                'method' => 'GetIdAttribute',
                'result' => null,
                'count'  => 0
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'alias' => array()
                ),
                'find'     => null,
                'property' => 'foobar',
                'default'  => 'test'
            ),
            array(
                'case'   => 'Getting a property that does not exist',
                'method' => 'GetFoobarAttribute',
                'result' => 'test',
                'count'  => 0
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'alias' => array(
                        'foobar' => 'title'
                    )
                ),
                'find'     => 1,
                'property' => 'foobar',
                'default'  => null
            ),
            array(
                'case'   => 'Getting a property that exists using an alias',
                'method' => 'GetTitleAttribute',
                'result' => 'Testing',
                'count'  => 0
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'alias' => array()
                ),
                'find'     => 1,
                'property' => 'dummy',
                'default'  => null
            ),
            array(
                'case'   => 'Getting a property that has a specific getter',
                'method' => 'GetDummyAttribute',
                'result' => null,
                'count'  => 1
            )
        );

        return $data;
    }

    public static function getTestArchive()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'before' => '',
                    'after'  => '',
                    'alias'  => array()
                ),
                'table' => '#__dbtest'
            ),
            array(
                'case'       => 'Table with no enabled field',
                'dispatcher' => 0,
                'save'       => false,
                'exception'  => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'before' => '',
                    'after'  => '',
                    'alias'  => array(
                        'enabled' => 'xx_enabled'
                    )
                ),
                'table' => '#__dbtest_alias'
            ),
            array(
                'case'       => 'Table with enabled field (alias)',
                'dispatcher' => 2,
                'save'       => true,
                'exception'  => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'before' => '',
                    'after'  => '',
                    'alias'  => array()
                ),
                'table' => '#__dbtest_extended'
            ),
            array(
                'case'       => 'Table with enabled field',
                'dispatcher' => 2,
                'save'       => true,
                'exception'  => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'before' => function(){ return false;},
                    'after'  => '',
                    'alias'  => array()
                ),
                'table' => '#__dbtest_extended'
            ),
            array(
                'case'       => 'Table with enabled field, onBefore returns false',
                'dispatcher' => 2,
                'save'       => true,
                'exception'  => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'before' => function(){ return true;},
                    'after'  => function(){ return false;},
                    'alias'  => array()
                ),
                'table' => '#__dbtest_extended'
            ),
            array(
                'case'       => 'Table with enabled field, onAfter returns false',
                'dispatcher' => 2,
                'save'       => true,
                'exception'  => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'before' => function(){ throw new \Exception();},
                    'after'  => function(){ return false;},
                    'alias'  => array()
                ),
                'table' => '#__dbtest_extended'
            ),
            array(
                'case'       => 'Table with enabled field, onBefore throws an exception',
                'dispatcher' => 0,
                'save'       => false,
                'exception'  => true
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'before' => function(){ return true;},
                    'after'  => function(){ throw new \Exception();},
                    'alias'  => array()
                ),
                'table' => '#__dbtest_extended'
            ),
            array(
                'case'       => 'Table with enabled field, onAfter throws an exception',
                'dispatcher' => 1,
                'save'       => true,
                'exception'  => true
            )
        );

        return $data;
    }

    public static function getTestHasField()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'getAlias' => 'id',
                    'fields'   => array(
                        'id' => 'dummy'
                    )
                ),
                'field' => 'id'
            ),
            array(
                'case'   => 'Field exists, no alias',
                'result' => true
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'getAlias' => 'nothere',
                    'fields'   => array(
                        'id' => 'dummy'
                    )
                ),
                'field' => 'nothere'
            ),
            array(
                'case'   => 'Field does not exists, no alias',
                'result' => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'getAlias' => 'foobar',
                    'fields'   => array(
                        'id' => 'dummy'
                    )
                ),
                'field' => 'id'
            ),
            array(
                'case'   => 'Field does no exists, has an alias',
                'result' => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'getAlias' => 'foobar',
                    'fields'   => array(
                        'foobar' => 'dummy'
                    )
                ),
                'field' => 'id'
            ),
            array(
                'case'   => 'Field exists, has an alias',
                'result' => true
            )
        );

        return $data;
    }

    public static function getTestGetFieldAlias()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'alias' => array(
                        'foobar' => 'test'
                    )
                ),
                'field' => 'id'
            ),
            array(
                'case'   => 'Alias not set for the field',
                'result' => 'id'
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'alias' => array(
                        'id' => 'foobar'
                    )
                ),
                'field' => 'id'
            ),
            array(
                'case'   => 'Alias set for the field',
                'result' => 'foobar'
            )
        );

        return $data;
    }

    public static function getTestSave()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'dataSave'   => null,
                    'dataCreate' => null,
                    'dataUpdate' => null,
                    'blankId'    => false
                ),
                'id'        => 1,
                'table'     => '#__dbtest',
                'relations' => null,
                'data'      => array('title' => 'foobar'),
                'ordering'  => '',
                'ignore'    => null
            ),
            array(
                'case'        => 'Updating object without any "special" field',
                'reorder'     => false,
                'modelEvents' => array('onBeforeSave' => 1, 'onBeforeUpdate' => 1, 'onAfterUpdate' => 1, 'onAfterSave' => 1),
                'dispEvents'  => array('onBeforeSave' => 1, 'onBeforeUpdate' => 1, 'onAfterUpdate' => 1, 'onAfterSave' => 1),
                'id'          => 1,
                'row'         => (object) array('id' => 1, 'title' => 'foobar', 'start_date' => '1980-04-18 00:00:00', 'description' => 'one'),
                'created_on'  => false,
                'modified_on' => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'dataSave'   => array('title' => 'foobar'),
                    'dataCreate' => null,
                    'dataUpdate' => null,
                    'blankId'    => false
                ),
                'id'        => 1,
                'table'     => '#__dbtest',
                'relations' => null,
                'data'      => null,
                'ordering'  => '',
                'ignore'    => null
            ),
            array(
                'case'        => 'Updating the record, change the data in the onBeforeSave dispatcher event',
                'reorder'     => false,
                'modelEvents' => array('onBeforeSave' => 1, 'onBeforeUpdate' => 1, 'onAfterUpdate' => 1, 'onAfterSave' => 1),
                'dispEvents'  => array('onBeforeSave' => 1, 'onBeforeUpdate' => 1, 'onAfterUpdate' => 1, 'onAfterSave' => 1),
                'id'          => 1,
                'row'         => (object) array('id' => 1, 'title' => 'foobar', 'start_date' => '1980-04-18 00:00:00', 'description' => 'one'),
                'created_on'  => false,
                'modified_on' => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'dataSave'   => null,
                    'dataCreate' => null,
                    'dataUpdate' => array('title' => 'foobar'),
                    'blankId'    => false
                ),
                'id'        => 1,
                'table'     => '#__dbtest',
                'relations' => null,
                'data'      => null,
                'ordering'  => '',
                'ignore'    => null
            ),
            array(
                'case'        => 'Updating the record, change the data in the dispatcher event',
                'reorder'     => false,
                'modelEvents' => array('onBeforeSave' => 1, 'onBeforeUpdate' => 1, 'onAfterUpdate' => 1, 'onAfterSave' => 1),
                'dispEvents'  => array('onBeforeSave' => 1, 'onBeforeUpdate' => 1, 'onAfterUpdate' => 1, 'onAfterSave' => 1),
                'id'          => 1,
                'row'         => (object) array('id' => 1, 'title' => 'foobar', 'start_date' => '1980-04-18 00:00:00', 'description' => 'one'),
                'created_on'  => false,
                'modified_on' => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'dataSave'   => null,
                    'dataCreate' => null,
                    'dataUpdate' => null,
                    'blankId'    => true
                ),
                'id'        => 1,
                'table'     => '#__dbtest',
                'relations' => null,
                'data'      => null,
                'ordering'  => '',
                'ignore'    => null
            ),
            array(
                'case'        => 'Blank out the id before saving the record (dispatcher event)',
                'reorder'     => false,
                'modelEvents' => array('onBeforeSave' => 1, 'onBeforeCreate' => 1, 'onAfterCreate' => 1, 'onAfterSave' => 1),
                'dispEvents'  => array('onBeforeSave' => 1, 'onBeforeCreate' => 1, 'onAfterCreate' => 1, 'onAfterSave' => 1),
                'id'          => 'max',
                'row'         => (object) array('title' => 'Testing', 'start_date' => '1980-04-18 00:00:00', 'description' => 'one'),
                'created_on'  => false,
                'modified_on' => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'dataSave'   => null,
                    'dataCreate' => null,
                    'dataUpdate' => null,
                    'blankId'    => false
                ),
                'id'        => null,
                'table'     => '#__dbtest',
                'relations' => null,
                'data'      => array('title' => 'foobar'),
                'ordering'  => '',
                'ignore'    => null
            ),
            array(
                'case'        => 'Inserting a new record without any "special" field',
                'reorder'     => false,
                'modelEvents' => array('onBeforeSave' => 1, 'onBeforeCreate' => 1, 'onAfterCreate' => 1, 'onAfterSave' => 1),
                'dispEvents'  => array('onBeforeSave' => 1, 'onBeforeCreate' => 1, 'onAfterCreate' => 1, 'onAfterSave' => 1),
                'id'          => 'max',
                'row'         => (object) array('title' => 'foobar', 'start_date' => '0000-00-00 00:00:00', 'description' => ''),
                'created_on'  => false,
                'modified_on' => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'dataSave'   => null,
                    'dataCreate' => array('title' => 'foobar'),
                    'dataUpdate' => null,
                    'blankId'    => false
                ),
                'id'        => null,
                'table'     => '#__dbtest',
                'relations' => null,
                'data'      => null,
                'ordering'  => '',
                'ignore'    => null
            ),
            array(
                'case'        => 'Inserting a new record, changing the data in the onBeforeCreate dispatcher event',
                'reorder'     => false,
                'modelEvents' => array('onBeforeSave' => 1, 'onBeforeCreate' => 1, 'onAfterCreate' => 1, 'onAfterSave' => 1),
                'dispEvents'  => array('onBeforeSave' => 1, 'onBeforeCreate' => 1, 'onAfterCreate' => 1, 'onAfterSave' => 1),
                'id'          => 'max',
                'row'         => (object) array('title' => 'foobar', 'start_date' => '0000-00-00 00:00:00', 'description' => ''),
                'created_on'  => false,
                'modified_on' => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'dataSave'   => null,
                    'dataCreate' => null,
                    'dataUpdate' => null,
                    'blankId'    => false
                ),
                'id'        => 1,
                'table'     => '#__dbtest_extended',
                'relations' => null,
                'data'      => array('title' => 'foobar'),
                'ordering'  => '',
                'ignore'    => null
            ),
            array(
                'case'        => 'Updating object with special field',
                'reorder'     => false,
                'modelEvents' => array('onBeforeSave' => 1, 'onBeforeUpdate' => 1, 'onAfterUpdate' => 1, 'onAfterSave' => 1),
                'dispEvents'  => array('onBeforeSave' => 1, 'onBeforeUpdate' => 1, 'onAfterUpdate' => 1, 'onAfterSave' => 1),
                'id'          => 1,
                'row'         => (object) array('id' => 1, 'title' => 'foobar', 'start_date' => '1980-04-18 00:00:00', 'description' => 'one',
                                                    'ordering' => 1, 'enabled' => 0, 'locked_on' => '0000-00-00 00:00:00', 'locked_by' => 0,
                                                    'created_by' => 0, 'modified_by' => 99, 'created_on' => '0000-00-00 00:00:00'),
                'created_on'  => false,
                'modified_on' => true
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'dataSave'   => null,
                    'dataCreate' => null,
                    'dataUpdate' => null,
                    'blankId'    => false
                ),
                'id'        => 1,
                'table'     => '#__dbtest_extended',
                'relations' => null,
                'data'      => array('title' => 'foobar'),
                'ordering'  => 'ordering',
                'ignore'    => null
            ),
            array(
                'case'        => 'Updating object with special field, passing an ordering field',
                'reorder'     => "`ordering` = '1'",
                'modelEvents' => array('onBeforeSave' => 1, 'onBeforeUpdate' => 1, 'onAfterUpdate' => 1, 'onAfterSave' => 1),
                'dispEvents'  => array('onBeforeSave' => 1, 'onBeforeUpdate' => 1, 'onAfterUpdate' => 1, 'onAfterSave' => 1),
                'id'          => 1,
                'row'         => (object) array('id' => 1, 'title' => 'foobar', 'start_date' => '1980-04-18 00:00:00', 'description' => 'one',
                    'ordering' => 1, 'enabled' => 0, 'locked_on' => '0000-00-00 00:00:00', 'locked_by' => 0,
                    'created_by' => 0, 'modified_by' => 99, 'created_on' => '0000-00-00 00:00:00'),
                'created_on'  => false,
                'modified_on' => true
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'dataSave'   => null,
                    'dataCreate' => null,
                    'dataUpdate' => null,
                    'blankId'    => false
                ),
                'id'        => null,
                'table'     => '#__dbtest_extended',
                'relations' => null,
                'data'      => array('title' => 'foobar'),
                'ordering'  => '',
                'ignore'    => null
            ),
            array(
                'case'        => 'Inserting a new record with special field',
                'reorder'     => false,
                'modelEvents' => array('onBeforeSave' => 1, 'onBeforeCreate' => 1, 'onAfterCreate' => 1, 'onAfterSave' => 1),
                'dispEvents'  => array('onBeforeSave' => 1, 'onBeforeCreate' => 1, 'onAfterCreate' => 1, 'onAfterSave' => 1),
                'id'          => 'max',
                'row'         => (object) array('title' => 'foobar', 'start_date' => '0000-00-00 00:00:00', 'description' => '',
                    'ordering' => 0, 'enabled' => 0, 'locked_on' => '0000-00-00 00:00:00', 'locked_by' => 0,
                    'created_by' => 99, 'modified_by' => 0, 'modified_on' => '0000-00-00 00:00:00'),
                'created_on'  => true,
                'modified_on' => false
            )
        );

        return $data;
    }

    public static function getTestPush()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'names' => array('test1', 'test2'),
                    'touches' => array()
                ),
                'relations' => null
            ),
            array(
                'case' => 'No touches, saving all relations',
                'save' => array('test1', 'test2'),
                'touches' => array(),
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'names' => array('test1', 'test2'),
                    'touches' => array()
                ),
                'relations' => array('test1')
            ),
            array(
                'case' => 'No touches, saving some relations',
                'save' => array('test1'),
                'touches' => array(),
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'names' => array('test1', 'test2', 'children'),
                    'touches' => array('children')
                ),
                'relations' => null
            ),
            array(
                'case' => 'With touches, saving all relations',
                'save' => array('test1', 'test2', 'children'),
                'touches' => array('children'),
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'names' => array('test1', 'test2', 'children'),
                    'touches' => array('children')
                ),
                'relations' => array('test1')
            ),
            array(
                'case' => 'With touches, saving some relations',
                'save' => array('test1'),
                'touches' => array('children'),
            )
        );

        return $data;
    }

    public static function getTestBind()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'beforeDisp' => null
                ),
                'data' => array(
                    'id' => 1,
                    'title' => 'test'
                ),
                'ignore' => array()
            ),
            array(
                'case' => 'Data array contains properties that exists',
                'dispatcher' => 2,
                'bind' => array('id' => 1, 'title' => 'test')
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'beforeDisp' => null
                ),
                'data' => array(
                    'id' => 1,
                    'title' => 'test'
                ),
                'ignore' => array('title')
            ),
            array(
                'case' => 'Data array contains properties that exists, ignoring some of them (array format)',
                'dispatcher' => 2,
                'bind' => array('id' => 1)
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'beforeDisp' => null
                ),
                'data' => array(
                    'id' => 1,
                    'title' => 'test',
                    'description' => 'test'
                ),
                'ignore' => 'title description'
            ),
            array(
                'case' => 'Data array contains properties that exists, ignoring some of them (string format)',
                'dispatcher' => 2,
                'bind' => array('id' => 1)
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'beforeDisp' => null
                ),
                'data' => array(
                    'id' => 1,
                    'title' => 'test',
                    'foobar' => 'foo'
                ),
                'ignore' => array()
            ),
            array(
                'case' => 'Trying to bind a property that does not exist',
                'dispatcher' => 2,
                'bind' => array('id' => 1, 'title' => 'test')
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'beforeDisp' => array(
                        'id' => 1,
                        'title' => 'test',
                    )
                ),
                'data' => null,
                'ignore' => array()
            ),
            array(
                'case' => 'Passing invalid data, however the onBeforeBind converts it to a valid one',
                'dispatcher' => 2,
                'bind' => array('id' => 1, 'title' => 'test')
            )
        );

        return $data;
    }

    public static function getTestBindException()
    {
        $data[] = array(
            array(
                'data' => ''
            )
        );

        $data[] = array(
            array(
                'data' => 1
            )
        );

        $data[] = array(
            array(
                'data' => null
            )
        );

        $data[] = array(
            array(
                'data' => false
            )
        );

        return $data;
    }

    public static function getTestCheck()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'auto' => false
                ),
                'table' => '#__dbtest',
                'load'  => null
            ),
            array(
                'case' => 'No autochecks set',
                'exception' => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'auto' => true
                ),
                'table' => '#__dbtest',
                'load'  => 1
            ),
            array(
                'case' => 'Table loaded',
                'exception' => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'auto' => true
                ),
                'table' => '#__dbtest',
                'load'  => null
            ),
            array(
                'case' => 'Check failed',
                'exception' => 'FAKEAPP_NESTEDSET_ERR_TITLE_EMPTY'
            )
        );

        return $data;
    }

    public static function getTestReorder()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'ordering' => array(1 => 1, 2 => 2, 3 => 3, 4 => 4)
                ),
                'where' => ''
            ),
            array(
                'case' => 'Records are have the same ordering as the id',
                'order' => array(1, 2, 3, 4)
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'ordering' => array(1 => 4, 2 => 3, 3 => 2, 4 => 1)
                ),
                'where' => ''
            ),
            array(
                'case' => 'Records in "reversed" order',
                'order' => array(4, 3, 2, 1)
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'ordering' => array(1 => 1, 2 => 3, 3 => 2, 4 => 1)
                ),
                'where' => ''
            ),
            array(
                'case' => 'Records with same order value',
                'order' => array(1, 4, 3, 2)
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'ordering' => array(1 => 0, 2 => 0, 3 => 0, 4 => 0)
                ),
                'where' => ''
            ),
            array(
                'case' => 'Records with no ordering',
                'order' => array(1, 2, 3, 4)
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'ordering' => array(1 => 0, 2 => 3, 3 => 8, 4 => 7)
                ),
                'where' => ''
            ),
            array(
                'case' => 'Records with non sequential order',
                'order' => array(1, 2, 4, 3)
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'ordering' => array(1 => 1, 2 => 2, 3 => 3, 4 => 4)
                ),
                'where' => 'id IN(2, 3)'
            ),
            array(
                'case' => 'Applying a reorder where',
                'order' => array(1, 1, 2, 4)
            )
        );

        return $data;
    }

    public static function getTestMove()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'find'     => null,
                    'delta'    => null,
                    'where'    => null
                ),
                'id'    => 1,
                'delta' => -1,
                'where' => ''
            ),
            array(
                'case' => 'Move the first record up, no where',
                'order' => array(1, 2, 3, 4)
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'find'     => null,
                    'delta'    => null,
                    'where'    => null
                ),
                'id'    => 1,
                'delta' => 0,
                'where' => ''
            ),
            array(
                'case' => 'Empty delta',
                'order' => array(1, 2, 3, 4)
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'find'     => null,
                    'delta'    => -1,
                    'where'    => null
                ),
                'id'    => 2,
                'delta' => '',
                'where' => ''
            ),
            array(
                'case' => 'Move the second record up, no where, delta changed by the event',
                'order' => array(2, 1, 3, 4)
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'find'     => null,
                    'delta'    => null,
                    'where'    => null
                ),
                'id'    => 2,
                'delta' => -1,
                'where' => ''
            ),
            array(
                'case' => 'Move the second record up, no where',
                'order' => array(2, 1, 3, 4)
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'find'     => null,
                    'delta'    => null,
                    'where'    => null
                ),
                'id'    => 2,
                'delta' => 1,
                'where' => ''
            ),
            array(
                'case' => 'Move the second record down, no where',
                'order' => array(1, 3, 2, 4)
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'find'     => null,
                    'delta'    => null,
                    'where'    => null
                ),
                'id'    => 2,
                'delta' => 1,
                'where' => 'description = "one"'
            ),
            array(
                'case' => 'Move the second record down, with where matching nothing',
                'order' => array(1, 2, 3, 4)
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'find'     => null,
                    'delta'    => null,
                    'where'    => null
                ),
                'id'    => 2,
                'delta' => -1,
                'where' => 'description = "one"'
            ),
            array(
                'case' => 'Move the second record up, with where matching one record',
                'order' => array(2, 1, 3, 4)
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'find'     => null,
                    'delta'    => 'description = "one"',
                    'where'    => null
                ),
                'id'    => 2,
                'delta' => -1,
                'where' => ''
            ),
            array(
                'case' => 'Move the second record up, where matching one record (changed by the dispatcher)',
                'order' => array(2, 1, 3, 4)
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'find'     => 2,
                    'delta'    => null,
                    'where'    => null
                ),
                'id'    => null,
                'delta' => 1,
                'where' => ''
            ),
            array(
                'case' => 'Record loaded by the dispatcher, move the second record down, no where',
                'order' => array(1, 3, 2, 4)
            )
        );

        return $data;
    }

    public static function getTestMoveException()
    {
        // Table with no ordering support
        $data[] = array(
            array(
                'table' => '#__dbtest'
            ),
            array(
                'exception' => 'Awf\Mvc\DataModel\Exception\SpecialColumnMissing'
            )
        );

        // Table with no ordering support
        $data[] = array(
            array(
                'table' => '#__dbtest_extended'
            ),
            array(
                'exception' => 'Awf\Mvc\DataModel\Exception\RecordNotLoaded'
            )
        );

        return $data;
    }

    public static function getTestChunk()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'count' => 0
                ),
                'chunksize' => 5
            ),
            array(
                'case' => 'Records not found',
                'get'  => 0
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'count' => 10
                ),
                'chunksize' => 5
            ),
            array(
                'case' => 'Records found they are a multiple of the chunksize',
                'get'  => 2
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'count' => 10
                ),
                'chunksize' => 4
            ),
            array(
                'case' => 'Records found they are not a multiple of the chunksize',
                'get'  => 3
            )
        );

        return $data;
    }

    public static function getTestBuildQuery()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'where' => array()
                ),
                'override' => false
            ),
            array(
                'case' => 'No limits override, no additional query, no order field or direction',
                'filter' => true,
                'where'  => array(),
                'order'  => array('`id` ASC')
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'where' => array(),
                    'order' => 'title'
                ),
                'override' => false
            ),
            array(
                'case' => 'No limits override, no additional query or direction, with (known) order field',
                'filter' => true,
                'where'  => array(),
                'order'  => array('`title` ASC')
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'where' => array(),
                    'order' => 'foobar'
                ),
                'override' => false
            ),
            array(
                'case' => 'No limits override, no additional query or direction, with (unknown) order field',
                'filter' => true,
                'where'  => array(),
                'order'  => array('`id` ASC')
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'where' => array(),
                    'order' => 'title',
                    'dir'   => 'asc'
                ),
                'override' => false
            ),
            array(
                'case' => 'No limits override, no additional query, with (known) order field and lowercase direction',
                'filter' => true,
                'where'  => array(),
                'order'  => array('`title` ASC')
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'where' => array(),
                    'order' => 'title',
                    'dir'   => 'DESC'
                ),
                'override' => false
            ),
            array(
                'case' => 'No limits override, no additional query, with (known) order field and uppercase direction',
                'filter' => true,
                'where'  => array(),
                'order'  => array('`title` DESC')
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'where' => array(),
                    'order' => 'title',
                    'dir'   => 'wrong'
                ),
                'override' => false
            ),
            array(
                'case' => 'No limits override, no additional query, with (known) order field and invalid direction',
                'filter' => true,
                'where'  => array(),
                'order'  => array('`title` ASC')
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'where' => array(
                        'foobar = 1'
                    ),
                    'order' => 'title',
                    'dir'   => 'DESC'
                ),
                'override' => true
            ),
            array(
                'case' => 'Limits override, additional query, with (known) order field and uppercase direction',
                'filter' => false,
                'where'  => array('foobar = 1'),
                'order'  => array()
            )
        );


        return $data;
    }

    public static function getTestGet()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'limitstart' => 10,
                    'limit'      => 10
                ),
                'override'   => false,
                'limitstart' => 0,
                'limit'      => 0
            ),
            array(
                'case'       => 'Not overriding the limits',
                'limitstart' => 10,
                'limit'      => 10
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'limitstart' => 10,
                    'limit'      => 10
                ),
                'override'   => true,
                'limitstart' => 5,
                'limit'      => 5
            ),
            array(
                'case'       => 'Overriding the limits',
                'limitstart' => 5,
                'limit'      => 5
            )
        );

        return $data;
    }

    public static function getTestEagerLoad()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'eager' => array()
                ),
                'items'     => true,
                'relations' => array(
                    'test' => function(){}
                )
            ),
            array(
                'case' => 'Passing a relation with callable callback, collection is not empty',
                'getData' => array(
                    'relation' => 'test',
                    'callback' => 'function'
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'eager' => array()
                ),
                'items'     => true,
                'relations' => array(
                    'test' => 'dummy'
                )
            ),
            array(
                'case' => 'Passing a relation without a callable callback, collection is not empty',
                'getData' => array(
                    'relation' => 'dummy',
                    'callback' => null
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'eager' => array(
                        'test' => function(){}
                    )
                ),
                'items'     => true,
                'relations' => null
            ),
            array(
                'case' => 'Using the relation defined inside the object, collection is not empty',
                'getData' => array(
                    'relation' => 'test',
                    'callback' => 'function'
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'eager' => array(
                        'test' => function(){}
                    )
                ),
                'items'     => false,
                'relations' => null
            ),
            array(
                'case' => 'Collection is empty',
                'getData' => array()
            )
        );

        return $data;
    }

    public static function getTestDelete()
    {
        $data[] = array(
            array(
                'id'   => null,
                'soft' => true
            ),
            array(
                'case' => 'Id not provided, soft delete',
                'trash' => true,
                'force' => false
            )
        );

        $data[] = array(
            array(
                'id'   => null,
                'soft' => false
            ),
            array(
                'case' => 'Id not provided, db delete',
                'trash' => false,
                'force' => true
            )
        );

        $data[] = array(
            array(
                'id'   => 2,
                'soft' => true
            ),
            array(
                'case' => 'Id provided, soft delete',
                'trash' => true,
                'force' => false
            )
        );

        $data[] = array(
            array(
                'id'   => 2,
                'soft' => false
            ),
            array(
                'case' => 'Id provided, db delete',
                'trash' => false,
                'force' => true
            )
        );

        return $data;
    }

    public static function getTestTrash()
    {
        $data[] = array(
            array(
                'id' => null
            ),
            array(
                'case'   => 'Table with publish support, already loaded',
                'before' => 1,
                'after'  => 1,
                'find'   => false,
                'dispatcher' => 2,
                'enabled' => -2
            )
        );

        $data[] = array(
            array(
                'id' => 1
            ),
            array(
                'case'   => 'Table with publish support, not loaded',
                'before' => 1,
                'after'  => 1,
                'find'   => true,
                'dispatcher' => 2,
                'enabled' => -2
            )
        );

        return $data;
    }

    public static function getTestTrashException()
    {
        $data[] = array(
            array(
                'table' => '#__dbtest',
                'id' => 1
            ),
            array(
                'case'      => 'Table with no publish support',
                'exception' => '\\Awf\\Mvc\\DataModel\\Exception\\SpecialColumnMissing'
            )
        );

        $data[] = array(
            array(
                'table' => '#__dbtest',
                'id' => null
            ),
            array(
                'case'      => 'Table not loaded',
                'exception' => 'Awf\Mvc\DataModel\Exception\RecordNotLoaded'
            )
        );

        return $data;
    }

    public static function getTestFindOrFail()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'getId' => 1
                ),
                'keys' => null
            ),
            array(
                'case' => 'Record found, not passing any keys',
                'exception' => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'getId' => null
                ),
                'keys' => null
            ),
            array(
                'case' => 'Record not found, not passing any keys',
                'exception' => true
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'getId' => 1
                ),
                'keys' => 1
            ),
            array(
                'case' => 'Record found, passing keys',
                'exception' => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'getId' => null
                ),
                'keys' => 1
            ),
            array(
                'case' => 'Record not found, passing keys',
                'exception' => true
            )
        );

        return $data;
    }

    public static function getTestFind()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'id'       => '',
                    'state_id' => null,
                    'keys'     => null
                ),
                'keys' => 1
            ),
            array(
                'case' => 'Passing the record id',
                'bind' => true
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id'       => 0,
                    'state_id' => 1,
                    'keys'     => null
                ),
                'keys' => ''
            ),
            array(
                'case' => 'No argument, no object id, getting it from the state',
                'bind' => true
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id'       => 1,
                    'state_id' => null,
                    'keys'     => null
                ),
                'keys' => ''
            ),
            array(
                'case' => 'No argument, getting the id from the object',
                'bind' => true
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id'       => null,
                    'state_id' => null,
                    'keys'     => 1
                ),
                'keys' => ''
            ),
            array(
                'case' => 'No argument, getting the id from the event dispatcher',
                'bind' => true
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id'       => null,
                    'state_id' => null,
                    'keys'     => null
                ),
                'keys' => null
            ),
            array(
                'case' => 'No key set anywhere',
                'bind' => false
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id'       => null,
                    'state_id' => null,
                    'keys'     => null
                ),
                'keys' => array(
                    'title' => 'Testing'
                )
            ),
            array(
                'case' => 'Passing an indexed array',
                'bind' => true
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id'       => null,
                    'state_id' => null,
                    'keys'     => null
                ),
                'keys' => array(
                    'title' => 'Testing',
                    'description' => 'one'
                )
            ),
            array(
                'case' => 'Passing an indexed array',
                'bind' => true
            )
        );

        return $data;
    }

    public static function getTestForceDelete()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'id' => 1
                ),
                'id' => 1
            ),
            array(
                'case' => 'Passing the id',
                'id'   => 1,
                'find' => true
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id' => 1
                ),
                'id' => null
            ),
            array(
                'case' => 'Loaded record',
                'id'   => 1,
                'find' => false
            )
        );

        return $data;
    }

    public static function getTestFirstOrCreate()
    {
        $data[] = array(
            array(
                'mock' => array(
                    // I just need to return any value to flag the record as loaded
                    'first' => 'foobar'
                )
            ),
            array(
                'case' => 'I was able to get first record',
                'create' => false,
                'result' => 'foobar'
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'first' => null
                )
            ),
            array(
                'case' => "I couldn't get the first record",
                'create' => true,
                'result' => 'object'
            )
        );

        return $data;
    }

    public static function getTestFirstOrFail()
    {
        $data[] = array(
            array(
                'mock' => array(
                    // I just need to return any value to flag the record as loaded
                    'first' => 'foobar'
                )
            ),
            array(
                'case' => 'I was able to get first record',
                'exception' => false,
                'result' => 'foobar'
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'first' => null
                )
            ),
            array(
                'case' => "I couldn't get the first record",
                'exception' => true,
                'result' => ''
            )
        );

        return $data;
    }

    public static function getTestFirstOrNew()
    {
        $data[] = array(
            array(
                'mock' => array(
                    // I just need to return any value to flag the record as loaded
                    'first' => 'foobar'
                )
            ),
            array(
                'case' => 'I was able to get first record',
                'reset' => false,
                'result' => 'foobar'
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'first' => null
                )
            ),
            array(
                'case' => "I couldn't get the first record",
                'reset' => true,
                'result' => 'object'
            )
        );

        return $data;
    }

    public static function getTestAddBehaviour()
    {
        $data[] = array(
            array(
                'class' => 'Foofilters'
            ),
            array(
                'case'     => 'Adding behaviour from Fakeapp\\Model\\DataModel\\Behaviour',
                'class'    => 'Fakeapp\\Model\\DataModel\\Behaviour\\Foofilters',
                'attached' => true
            )
        );

        $data[] = array(
            array(
                'class' => 'NamedBehaviour'
            ),
            array(
                'case'     => 'Adding behaviour from Fakeapp\\Model\\Nestedset\\Behaviour\\NamedBehaviour',
                'class'    => 'Fakeapp\Model\Nestedset\Behaviour\NamedBehaviour',
                'attached' => true
            )
        );

        $data[] = array(
            array(
                'class' => 'Filters'
            ),
            array(
                'case'     => 'Adding behaviour from Awf\\Mvc\\DataModel\\Behaviour',
                'class'    => 'Awf\\Mvc\\DataModel\\Behaviour\\Filters',
                'attached' => true
            )
        );

        $data[] = array(
            array(
                'class' => 'Wrong'
            ),
            array(
                'case'     => 'Trying to add non-existant behaviour',
                'class'    => 'Awf\\Mvc\\DataModel\\Behaviour\\Wrong',
                'attached' => false
            )
        );

        return $data;
    }

    public static function getTestLock()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'user_id' => ''
                ),
                'table' => '#__dbtest',
                'user_id' => ''
            ),
            array(
                'case' => 'Table without locking support',
                'before' => 0,
                'after'  => 0,
                'dispatcher' => 0,
                'locked_by' => null,
                'locked_on' => null
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'user_id' => ''
                ),
                'table' => '#__dbtest_extended',
                'user_id' => 90
            ),
            array(
                'case' => 'Table with locking support, user_id passed',
                'before' => 1,
                'after'  => 1,
                'dispatcher' => 2,
                'locked_by' => 90,
                'locked_on' => true
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'user_id' => 88
                ),
                'table' => '#__dbtest_extended',
                'user_id' => null
            ),
            array(
                'case' => 'Table with locking support, user_id not passed',
                'before' => 1,
                'after'  => 1,
                'dispatcher' => 2,
                'locked_by' => 88,
                'locked_on' => true
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'user_id' => ''
                ),
                'table' => '#__dbtest_lockedby',
                'user_id' => 90
            ),
            array(
                'case' => 'Table with only the locked_by field',
                'before' => 1,
                'after'  => 1,
                'dispatcher' => 2,
                'locked_by' => 90,
                'locked_on' => null
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'user_id' => ''
                ),
                'table' => '#__dbtest_lockedon',
                'user_id' => 90
            ),
            array(
                'case' => 'Table with only the locked_on field',
                'before' => 1,
                'after'  => 1,
                'dispatcher' => 2,
                'locked_by' => null,
                'locked_on' => true
            )
        );

        return $data;
    }

    public static function getTestOrderBy()
    {
        $data[] = array(
            array(
                'field' => 'foobar',
                'dir'   => 'asc'
            ),
            array(
                'case'  => 'Passing field and direction (lowercase)',
                'field' => 'foobar',
                'dir'   => 'ASC'
            )
        );

        $data[] = array(
            array(
                'field' => 'foobar',
                'dir'   => 'desc'
            ),
            array(
                'case'  => 'Passing field and direction (lowercase)',
                'field' => 'foobar',
                'dir'   => 'DESC'
            )
        );

        $data[] = array(
            array(
                'field' => 'foobar',
                'dir'   => ''
            ),
            array(
                'case'  => 'Passing field only',
                'field' => 'foobar',
                'dir'   => 'ASC'
            )
        );

        return $data;
    }

    public static function getTestPublish()
    {
        $data[] = array(
            array(
                'table' => '#__dbtest',
                'state' => 1
            ),
            array(
                'case'    => 'Table with no publish support',
                'dispatcher' => 0,
                'before'  => 0,
                'after'   => 0,
                'enabled' => null
            )
        );

        $data[] = array(
            array(
                'table' => '#__dbtest_extended',
                'state' => 1
            ),
            array(
                'case'    => 'Table with publish support (record enabling)',
                'dispatcher' => 2,
                'before'  => 1,
                'after'   => 1,
                'enabled' => 1
            )
        );

        $data[] = array(
            array(
                'table' => '#__dbtest_extended',
                'state' => 0
            ),
            array(
                'case'    => 'Table with publish support (record disabling)',
                'dispatcher' => 2,
                'before'  => 1,
                'after'   => 1,
                'enabled' => 0
            )
        );

        return $data;
    }

    public static function getTestRestore()
    {
        $data[] = array(
            array(
                'table' => '#__dbtest',
                'id' => ''
            ),
            array(
                'case'   => 'Table with no publish support',
                'before' => 0,
                'after'  => 0,
                'find'   => false,
                'dispatcher' => 0,
                'enabled' => null
            )
        );

        $data[] = array(
            array(
                'table' => '#__dbtest_extended',
                'id' => null
            ),
            array(
                'case'   => 'Table with publish support, already loaded',
                'before' => 1,
                'after'  => 1,
                'find'   => false,
                'dispatcher' => 2,
                'enabled' => 0
            )
        );

        $data[] = array(
            array(
                'table' => '#__dbtest_extended',
                'id' => 1
            ),
            array(
                'case'   => 'Table with publish support, not loaded',
                'before' => 1,
                'after'  => 1,
                'find'   => true,
                'dispatcher' => 2,
                'enabled' => 0
            )
        );

        return $data;
    }

    public static function getTestSkip()
    {
        $data[] = array(
            array(
                'limitstart' => 10
            ),
            array(
                'case' => 'Limitstart is positive',
                'limitstart' => 10
            )
        );

        $data[] = array(
            array(
                'limitstart' => null
            ),
            array(
                'case' => 'Limitstart is null',
                'limitstart' => 0
            )
        );

        $data[] = array(
            array(
                'limitstart' => -1
            ),
            array(
                'case' => 'Limitstart is negative',
                'limitstart' => 0
            )
        );

        $data[] = array(
            array(
                'limitstart' => array(1)
            ),
            array(
                'case' => 'Wrong type',
                'limitstart' => 0
            )
        );

        $data[] = array(
            array(
                'limitstart' => new stdClass()
            ),
            array(
                'case' => 'Wrong type',
                'limitstart' => 0
            )
        );

        $data[] = array(
            array(
                'limitstart' => true
            ),
            array(
                'case' => 'Wrong type',
                'limitstart' => 0
            )
        );

        return $data;
    }

    public static function getTestTake()
    {
        $data[] = array(
            array(
                'limit' => 10
            ),
            array(
                'case' => 'Limit is positive',
                'limit' => 10
            )
        );

        $data[] = array(
            array(
                'limit' => null
            ),
            array(
                'case' => 'Limit is null',
                'limit' => 0
            )
        );

        $data[] = array(
            array(
                'limit' => -1
            ),
            array(
                'case' => 'Limit is negative',
                'limit' => 0
            )
        );

        $data[] = array(
            array(
                'limit' => array(1)
            ),
            array(
                'case' => 'Wrong type',
                'limit' => 0
            )
        );

        $data[] = array(
            array(
                'limit' => new stdClass()
            ),
            array(
                'case' => 'Wrong type',
                'limit' => 0
            )
        );

        $data[] = array(
            array(
                'limit' => true
            ),
            array(
                'case' => 'Wrong type',
                'limit' => 0
            )
        );

        return $data;
    }

    public static function getTestTouch()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'user_id' => ''
                ),
                'table' => '#__dbtest',
                'user_id' => ''
            ),
            array(
                'case' => 'Table without modifying support',
                'modified_by' => null,
                'modified_on' => null
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'user_id' => ''
                ),
                'table' => '#__dbtest_extended',
                'user_id' => 90
            ),
            array(
                'case' => 'Table with modifying support, user_id passed',
                'modified_by' => 90,
                'modified_on' => true
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'user_id' => 88
                ),
                'table' => '#__dbtest_extended',
                'user_id' => null
            ),
            array(
                'case' => 'Table with modifying support, user_id not passed',
                'modified_by' => 88,
                'modified_on' => true
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'user_id' => ''
                ),
                'table' => '#__dbtest_modifiedby',
                'user_id' => 90
            ),
            array(
                'case' => 'Table with only the modified_by field',
                'modified_by' => 90,
                'modified_on' => null
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'user_id' => ''
                ),
                'table' => '#__dbtest_modifiedon',
                'user_id' => 90
            ),
            array(
                'case' => 'Table with only the modified_on field',
                'modified_by' => null,
                'modified_on' => true
            )
        );

        return $data;
    }

    public static function getTestUnlock()
    {
        $data[] = array(
            array(
                'table' => '#__dbtest',
            ),
            array(
                'case' => 'Table without locking support',
                'before' => 0,
                'after'  => 0,
                'dispatcher' => 0,
                'locked_by' => null,
                'locked_on' => null
            )
        );

        $data[] = array(
            array(
                'table' => '#__dbtest_extended',
            ),
            array(
                'case' => 'Table with locking support, user_id passed',
                'before' => 1,
                'after'  => 1,
                'dispatcher' => 2,
                'locked_by' => 0,
                'locked_on' => true
            )
        );

        $data[] = array(
            array(
                'table' => '#__dbtest_extended',
            ),
            array(
                'case' => 'Table with locking support, user_id not passed',
                'before' => 1,
                'after'  => 1,
                'dispatcher' => 2,
                'locked_by' => 0,
                'locked_on' => true
            )
        );

        $data[] = array(
            array(
                'table' => '#__dbtest_lockedby',
            ),
            array(
                'case' => 'Table with only the locked_by field',
                'before' => 1,
                'after'  => 1,
                'dispatcher' => 2,
                'locked_by' => 0,
                'locked_on' => null
            )
        );

        $data[] = array(
            array(
                'table' => '#__dbtest_lockedon',
            ),
            array(
                'case' => 'Table with only the locked_on field',
                'before' => 1,
                'after'  => 1,
                'dispatcher' => 2,
                'locked_by' => null,
                'locked_on' => true
            )
        );

        return $data;
    }

    public static function getTestUnpublish()
    {
        $data[] = array(
            array(
                'table' => '#__dbtest',
            ),
            array(
                'case'   => 'Table with no publish support',
                'before' => 0,
                'after'  => 0,
                'dispatcher' => 0,
                'enabled' => null
            )
        );

        $data[] = array(
            array(
                'table' => '#__dbtest_extended',
            ),
            array(
                'case'   => 'Table with publish support',
                'before' => 1,
                'after'  => 1,
                'dispatcher' => 2,
                'enabled' => 0
            )
        );

        return $data;
    }

    public static function getTestWhere()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'foobar',
                    'hasClass' => false
                ),
                'field'  => 'foobar',
                'method' => '=',
                'values' => null
            ),
            array(
                'case'    => 'Behaviors not loaded, field is the primary key',
                'add'     => true,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => null,
                    'operator' => '='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'dummy',
                    'hasClass' => true
                ),
                'field'  => 'foobar',
                'method' => '=',
                'values' => null
            ),
            array(
                'case'    => 'Behaviors loaded, field is not the primary key',
                'add'     => false,
                'field'   => 'foobar',
                'options' => array(
                    'method'   => 'search',
                    'value'    => null,
                    'operator' => '='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '<>',
                'values' => 12
            ),
            array(
                'case'    => '<> method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => 'lt',
                'values' => 12
            ),
            array(
                'case'    => 'lt method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '<'
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => 'le',
                'values' => 12
            ),
            array(
                'case'    => 'le method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '<='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => 'gt',
                'values' => 12
            ),
            array(
                'case'    => 'gt method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '>'
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => 'ge',
                'values' => 12
            ),
            array(
                'case'    => 'ge method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '>='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => 'eq',
                'values' => 12
            ),
            array(
                'case'    => 'eq method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => 'neq',
                'values' => 12
            ),
            array(
                'case'    => 'neq method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => 'ne',
                'values' => 12
            ),
            array(
                'case'    => 'ne method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '<',
                'values' => 12
            ),
            array(
                'case'    => '< method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '<'
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '!<',
                'values' => 12
            ),
            array(
                'case'    => '!< method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!<'
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '<=',
                'values' => 12
            ),
            array(
                'case'    => '<= method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '<='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '!<=',
                'values' => 12
            ),
            array(
                'case'    => '!<= method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!<='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '>',
                'values' => 12
            ),
            array(
                'case'    => '> method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '>'
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '!>',
                'values' => 12
            ),
            array(
                'case'    => '!> method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!>'
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '>=',
                'values' => 12
            ),
            array(
                'case'    => '>= method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '>='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '!>=',
                'values' => 12
            ),
            array(
                'case'    => '!>= method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!>='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '!=',
                'values' => 12
            ),
            array(
                'case'    => '!= method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '=',
                'values' => 12
            ),
            array(
                'case'    => '= method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => 'like',
                'values' => 'foobar'
            ),
            array(
                'case'    => 'like method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'partial',
                    'value'    => 'foobar'
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '~',
                'values' => 'foobar'
            ),
            array(
                'case'    => '~ method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'partial',
                    'value'    => 'foobar'
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '%',
                'values' => 'foobar'
            ),
            array(
                'case'    => '%% method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'partial',
                    'value'    => 'foobar'
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '==',
                'values' => 12
            ),
            array(
                'case'    => '== method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'exact',
                    'value'    => 12
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '=[]',
                'values' => 12
            ),
            array(
                'case'    => '=[] method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'exact',
                    'value'    => 12
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '=()',
                'values' => 12
            ),
            array(
                'case'    => '=() method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'exact',
                    'value'    => 12
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => 'in',
                'values' => 12
            ),
            array(
                'case'    => 'in method, values passed',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'exact',
                    'value'    => 12
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '()',
                'values' => 12
            ),
            array(
                'case'    => 'between method, values is not an array',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '[]',
                'values' => 12
            ),
            array(
                'case'    => '[] method, values is not an array',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '[)',
                'values' => 12
            ),
            array(
                'case'    => '[) method, values is not an array',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '(]',
                'values' => 12
            ),
            array(
                'case'    => '(] method, values is not an array',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '()',
                'values' => array(12)
            ),
            array(
                'case'    => 'between method, values is an array with a single element',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '()',
                'values' => array(12, 22)
            ),
            array(
                'case'    => 'between method, values is an array, but no from/to keys',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'between',
                    'from'     => 12,
                    'to'       => 22
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '()',
                'values' => array(12, 22, 'from' => 5)
            ),
            array(
                'case'    => 'between method, values is an array, but no "from" key',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'between',
                    'from'     => 12,
                    'to'       => 22
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '()',
                'values' => array(12, 22, 'to' => 5)
            ),
            array(
                'case'    => 'between method, values is an array, but no "to" key',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'between',
                    'from'     => 12,
                    'to'       => 22
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '()',
                'values' => array(12, 22, 'from' => 5, 'to' => 7)
            ),
            array(
                'case'    => 'between method, values is an array, with "from/to" keys',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'between',
                    'from'     => 5,
                    'to'       => 7
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => ')(',
                'values' => 12
            ),
            array(
                'case'    => 'outside method, values is not an array',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => ')[',
                'values' => 12
            ),
            array(
                'case'    => ')[ method, values is not an array',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '](',
                'values' => 12
            ),
            array(
                'case'    => ']( method, values is not an array',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '][',
                'values' => 12
            ),
            array(
                'case'    => '][ method, values is not an array',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => ')(',
                'values' => array(12)
            ),
            array(
                'case'    => 'outside method, values is an array with a single element',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => ')(',
                'values' => array(12, 22)
            ),
            array(
                'case'    => 'outside method, values is an array, but no from/to keys',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'outside',
                    'from'     => 12,
                    'to'       => 22
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => ')(',
                'values' => array(12, 22, 'from' => 5)
            ),
            array(
                'case'    => 'outside method, values is an array, but no "from" key',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'outside',
                    'from'     => 12,
                    'to'       => 22
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => ')(',
                'values' => array(12, 22, 'to' => 5)
            ),
            array(
                'case'    => 'outside method, values is an array, but no "to" key',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'outside',
                    'from'     => 12,
                    'to'       => 22
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => ')(',
                'values' => array(12, 22, 'from' => 5, 'to' => 7)
            ),
            array(
                'case'    => 'outside method, values is an array, with "from/to" keys',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'outside',
                    'from'     => 5,
                    'to'       => 7
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => 'every',
                'values' => 12
            ),
            array(
                'case'    => 'every (interval) method, values is not an array',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '*=',
                'values' => 12
            ),
            array(
                'case'    => 'interval method, values is not an array',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '*=',
                'values' => array(12)
            ),
            array(
                'case'    => 'interval method, values is an array with a single item',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '='
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '*=',
                'values' => array(12, 22)
            ),
            array(
                'case'    => 'interval method, values is an array, but no value/interval keys',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'interval',
                    'value'    => 12,
                    'interval' => 22
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '*=',
                'values' => array(12, 22, 'value' => 5)
            ),
            array(
                'case'    => 'interval method, values is an array, but no "value" key',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'interval',
                    'value'    => 12,
                    'interval' => 22
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '*=',
                'values' => array(12, 22, 'interval' => 5)
            ),
            array(
                'case'    => 'interval method, values is an array, but no "interval" key',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'interval',
                    'value'    => 12,
                    'interval' => 22
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '*=',
                'values' => array(12, 22, 'value' => 5, 'interval' => 7)
            ),
            array(
                'case'    => 'interval method, values is an array, with "value/interval" keys',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'interval',
                    'value'    => 5,
                    'interval' => 7
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '?=',
                'values' => 12
            ),
            array(
                'case'    => '?= method, values is not an array',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => 12
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '?=',
                'values' => array(12)
            ),
            array(
                'case'    => '?= method, values is an array with a single item',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'value'    => array(12)
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '?=',
                'values' => array(12, 22)
            ),
            array(
                'case'    => '?= method, values is an array with no "operator/value" keys',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'operator' => 12,
                    'value'    => 22
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '?=',
                'values' => array(12, 22, 'operator' => 'XX')
            ),
            array(
                'case'    => '?= method, values is an array with no "value" key',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'operator' => 12,
                    'value'    => 22
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '?=',
                'values' => array(12, 22, 'value' => 'XX')
            ),
            array(
                'case'    => '?= method, values is an array with no "operator" key',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'operator' => 12,
                    'value'    => 22
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'id_field' => 'id',
                    'hasClass' => true
                ),
                'field'  => 'id',
                'method' => '?=',
                'values' => array(12, 22, 'value' => 5, 'operator' => 'XX')
            ),
            array(
                'case'    => '?= method, values is an array with "operator/value" keys',
                'add'     => false,
                'field'   => 'id',
                'options' => array(
                    'method'   => 'search',
                    'operator' => 'XX',
                    'value'    => 5
                )
            )
        );

        return $data;
    }

    public static function getTestHas()
    {
        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => false
                ),
                'relation' => 'posts',
                'method' => '<>',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => 'Behaviors not loaded',
                'add'     => true,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(array(
                        'relation' => 'posts',
                        'method'   => 'search',
                        'value'    => 1,
                        'operator' => '='
                    )),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '<>',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => 'Filter already set, not replacing it',
                'add'     => false,
                'filters' => array(
                    array(
                        'relation' => 'posts',
                        'method'   => 'search',
                        'value'    => 1,
                        'operator' => '='
                    ),
                    array(
                        'relation' => 'posts',
                        'method'   => 'search',
                        'value'    => 12,
                        'operator' => '!='
                    )
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(array(
                        'relation' => 'posts',
                        'method'   => 'search',
                        'value'    => 1,
                        'operator' => '='
                    )),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '<>',
                'values' => 12,
                'replace' => true
            ),
            array(
                'case'    => 'Filter already set, replacing it',
                'add'     => false,
                'filters' => array(
                    1 => array(
                            'relation' => 'posts',
                            'method'   => 'search',
                            'operator' => '!=',
                            'value'    => 12,
                    )
                )
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '<>',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => '<> method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => 'lt',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => 'lt method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '<'
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => 'le',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => 'le method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '<='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => 'gt',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => 'gt method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '>'
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => 'ge',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => 'ge method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '>='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => 'eq',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => 'eq method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => 'neq',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => 'neq method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => 'ne',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => 'ne method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '<',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => '< method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '<'
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '!<',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => '!< method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!<'
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '<=',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => '<= method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '<='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '!<=',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => '!<= method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!<='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '>',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => '> method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '>'
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '!>',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => '!> method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!>'
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '>=',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => '>= method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '>='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '!>=',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => '!>= method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!>='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '!=',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => '!= method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '=',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => '= method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => 'like',
                'values' => 'foobar',
                'replace' => false
            ),
            array(
                'case'    => 'like method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'partial',
                    'operator' => 'like',
                    'value'    => 'foobar'
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '~',
                'values' => 'foobar',
                'replace' => false
            ),
            array(
                'case'    => '~ method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'partial',
                    'operator' => '~',
                    'value'    => 'foobar'
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '%',
                'values' => 'foobar',
                'replace' => false
            ),
            array(
                'case'    => '%% method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'partial',
                    'operator' => '%',
                    'value'    => 'foobar'
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '==',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => '== method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'exact',
                    'operator' => '==',
                    'value'    => 12
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '=[]',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => '=[] method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'exact',
                    'operator' => '=[]',
                    'value'    => 12
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '=()',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => '=() method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'exact',
                    'operator' => '=()',
                    'value'    => 12
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => 'in',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => 'in method, values passed',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'exact',
                    'operator' => 'in',
                    'value'    => 12
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '()',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => 'between method, values is not an array',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '[]',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => '[] method, values is not an array',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '[)',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => '[) method, values is not an array',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '(]',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => '(] method, values is not an array',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '()',
                'values' => array(12),
                'replace' => false
            ),
            array(
                'case'    => 'between method, values is an array with a single element',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '()',
                'values' => array(12, 22),
                'replace' => false
            ),
            array(
                'case'    => 'between method, values is an array, but no from/to keys',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'between',
                    'operator' => '()',
                    'from'     => 12,
                    'to'       => 22
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '()',
                'values' => array(12, 22, 'from' => 5),
                'replace' => false
            ),
            array(
                'case'    => 'between method, values is an array, but no "from" key',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'between',
                    'operator' => '()',
                    'from'     => 12,
                    'to'       => 22
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '()',
                'values' => array(12, 22, 'to' => 5),
                'replace' => false
            ),
            array(
                'case'    => 'between method, values is an array, but no "to" key',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'between',
                    'operator' => '()',
                    'from'     => 12,
                    'to'       => 22
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '()',
                'values' => array(12, 22, 'from' => 5, 'to' => 7),
                'replace' => false
            ),
            array(
                'case'    => 'between method, values is an array, with "from/to" keys',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'between',
                    'operator' => '()',
                    'from'     => 5,
                    'to'       => 7
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => ')(',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => 'outside method, values is not an array',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => ')[',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => ')[ method, values is not an array',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '](',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => ']( method, values is not an array',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '][',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => '][ method, values is not an array',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => ')(',
                'values' => array(12),
                'replace' => false
            ),
            array(
                'case'    => 'outside method, values is an array with a single element',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '!='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => ')(',
                'values' => array(12, 22),
                'replace' => false
            ),
            array(
                'case'    => 'outside method, values is an array, but no from/to keys',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'outside',
                    'operator' => ')(',
                    'from'     => 12,
                    'to'       => 22
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => ')(',
                'values' => array(12, 22, 'from' => 5),
                'replace' => false
            ),
            array(
                'case'    => 'outside method, values is an array, but no "from" key',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'outside',
                    'operator' => ')(',
                    'from'     => 12,
                    'to'       => 22
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => ')(',
                'values' => array(12, 22, 'to' => 5),
                'replace' => false
            ),
            array(
                'case'    => 'outside method, values is an array, but no "to" key',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'outside',
                    'operator' => ')(',
                    'from'     => 12,
                    'to'       => 22
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => ')(',
                'values' => array(12, 22, 'from' => 5, 'to' => 7),
                'replace' => false
            ),
            array(
                'case'    => 'outside method, values is an array, with "from/to" keys',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'outside',
                    'operator' => ')(',
                    'from'     => 5,
                    'to'       => 7
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => 'every',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => 'every (interval) method, values is not an array',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '*=',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => 'interval method, values is not an array',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '*=',
                'values' => array(12),
                'replace' => false
            ),
            array(
                'case'    => 'interval method, values is an array with a single item',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'value'    => 12,
                    'operator' => '='
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '*=',
                'values' => array(12, 22),
                'replace' => false
            ),
            array(
                'case'    => 'interval method, values is an array, but no value/interval keys',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'interval',
                    'operator' => '*=',
                    'value'    => 12,
                    'interval' => 22
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '*=',
                'values' => array(12, 22, 'value' => 5),
                'replace' => false
            ),
            array(
                'case'    => 'interval method, values is an array, but no "value" key',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'interval',
                    'operator' => '*=',
                    'value'    => 12,
                    'interval' => 22
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '*=',
                'values' => array(12, 22, 'interval' => 5),
                'replace' => false
            ),
            array(
                'case'    => 'interval method, values is an array, but no "interval" key',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'interval',
                    'operator' => '*=',
                    'value'    => 12,
                    'interval' => 22
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '*=',
                'values' => array(12, 22, 'value' => 5, 'interval' => 7),
                'replace' => false
            ),
            array(
                'case'    => 'interval method, values is an array, with "value/interval" keys',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'interval',
                    'operator' => '*=',
                    'value'    => 5,
                    'interval' => 7
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '?=',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => '?= method, values is not an array',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'operator' => '?=',
                    'value'    => 12
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '?=',
                'values' => array(12),
                'replace' => false
            ),
            array(
                'case'    => '?= method, values is an array with a single item',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'operator' => '?=',
                    'value'    => array(12)
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => '?=',
                'values' => array(12, 22),
                'replace' => false
            ),
            array(
                'case'    => '?= method, values is an array with no "operator/value" keys',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'operator' => '?=',
                    'value'    => array(12,22)
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => 'callback',
                'values' => function(){},
                'replace' => false
            ),
            array(
                'case'    => 'callback method, values is a callable function',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'callback',
                    'operator' => 'callback',
                    'value'    => function(){}
                ))
            )
        );

        $data[] = array(
            array(
                'mock' => array(
                    'filters' => array(),
                    'hasClass' => true
                ),
                'relation' => 'posts',
                'method' => 'callback',
                'values' => 12,
                'replace' => false
            ),
            array(
                'case'    => 'callback method, values is NOT a callable function',
                'add'     => false,
                'filters' => array(array(
                    'relation' => 'posts',
                    'method'   => 'search',
                    'operator' => '=',
                    'value'    => 1
                ))
            )
        );

        return $data;
    }
}