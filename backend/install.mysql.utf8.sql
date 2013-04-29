CREATE TABLE IF NOT EXISTS #__sh_classified_ads (
`id` int(11) unsigned NOT NULL auto_increment,
`text` text,
`author` varchar(50) NOT NULL default '',
`phone` varchar(50) NOT NULL default '',
`ad_type` varchar(50) NOT NULL default '',
`cat` varchar(50) NOT NULL default '',
`quantity` int(10) NOT NULL default 0,
`publish_date` date NOT NULL default 0,
`checked` tinyint(1) unsigned NOT NULL default 0,
`money` varchar(10) NOT NULL default '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM;