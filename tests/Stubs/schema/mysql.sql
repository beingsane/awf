CREATE TABLE `#__dbtest` (  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,  `title` varchar(50) NOT NULL,  `start_date` datetime NOT NULL,  `description` text NOT NULL,  PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `#__dbtest_ordering` (  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,  `title` varchar(50) NOT NULL,  `start_date` datetime NOT NULL,  `description` text NOT NULL, `ordering` TINYINT NOT NULL DEFAULT '0', PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `#__dbtest_nestedsets` (`dbtest_nestedset_id` int(11) unsigned NOT NULL AUTO_INCREMENT, `title` varchar(255) NOT NULL DEFAULT '', `slug` varchar(255) NOT NULL DEFAULT '', `lft` int(11) DEFAULT NULL, `rgt` int(11) DEFAULT NULL, `hash` char(40) DEFAULT NULL,  PRIMARY KEY (`dbtest_nestedset_id`),  KEY `lft` (`lft`),  KEY `rgt` (`rgt`),  KEY `lft_2` (`lft`,`rgt`),  KEY `char` (`hash`)) DEFAULT CHARSET=utf8;
CREATE TABLE `#__dbtest_nestedbares` ( `id` int(11) unsigned NOT NULL AUTO_INCREMENT,  `title` varchar(255) NOT NULL DEFAULT '',  `lft` int(11) DEFAULT NULL,  `rgt` int(11) DEFAULT NULL,  PRIMARY KEY (`id`),  KEY `lft` (`lft`),  KEY `rgt` (`rgt`),  KEY `lft_2` (`lft`,`rgt`)) DEFAULT CHARSET=utf8;