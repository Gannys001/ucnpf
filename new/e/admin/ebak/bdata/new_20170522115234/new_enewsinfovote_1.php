<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `new_enewsinfovote`;");
E_C("CREATE TABLE `new_enewsinfovote` (
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `title` varchar(120) NOT NULL DEFAULT '',
  `votenum` int(10) unsigned NOT NULL DEFAULT '0',
  `voteip` mediumtext NOT NULL,
  `votetext` text NOT NULL,
  `voteclass` tinyint(1) NOT NULL DEFAULT '0',
  `doip` tinyint(1) NOT NULL DEFAULT '0',
  `dotime` date NOT NULL DEFAULT '0000-00-00',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `width` int(10) unsigned NOT NULL DEFAULT '0',
  `height` int(10) unsigned NOT NULL DEFAULT '0',
  `diyotherlink` tinyint(1) NOT NULL DEFAULT '0',
  `infouptime` int(10) unsigned NOT NULL DEFAULT '0',
  `infodowntime` int(10) unsigned NOT NULL DEFAULT '0',
  `copyids` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`pubid`),
  KEY `id` (`id`,`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `new_enewsinfovote` values('1000010000000016','16','5','','0','','','0','0','0000-00-00','1','0','0','0','0','0',',19,');");
E_D("replace into `new_enewsinfovote` values('1000010000000050','50','5','','0','','','0','0','0000-00-00','1','0','0','0','0','0',',56,');");
E_D("replace into `new_enewsinfovote` values('1000010000000069','69','32','','0','','','0','0','0000-00-00','1','0','0','0','0','0','1');");
E_D("replace into `new_enewsinfovote` values('1000010000000056','56','7','','0','','','0','0','0000-00-00','1','0','0','0','0','0','1');");
E_D("replace into `new_enewsinfovote` values('1000010000000023','23','18','','0','','','0','0','0000-00-00','1','0','0','0','0','0','1');");
E_D("replace into `new_enewsinfovote` values('1000010000000012','12','5','','0','','','0','0','0000-00-00','1','0','0','0','0','0',',23,');");
E_D("replace into `new_enewsinfovote` values('1000010000000024','24','3','','0','','','0','0','0000-00-00','1','0','0','0','0','0','1');");
E_D("replace into `new_enewsinfovote` values('1000010000000068','68','32','','0','','','0','0','0000-00-00','1','0','0','0','0','0','1');");

@include("../../inc/footer.php");
?>