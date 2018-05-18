<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `new_enewssearch`;");
E_C("CREATE TABLE `new_enewssearch` (
  `searchid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyboard` varchar(255) NOT NULL DEFAULT '',
  `searchtime` int(10) unsigned NOT NULL DEFAULT '0',
  `searchclass` varchar(255) NOT NULL DEFAULT '',
  `result_num` int(10) unsigned NOT NULL DEFAULT '0',
  `searchip` varchar(20) NOT NULL DEFAULT '',
  `classid` varchar(255) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `orderby` varchar(30) NOT NULL DEFAULT '0',
  `myorder` tinyint(1) NOT NULL DEFAULT '0',
  `checkpass` varchar(32) NOT NULL DEFAULT '',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `iskey` tinyint(1) NOT NULL DEFAULT '0',
  `andsql` text NOT NULL,
  `trueclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`),
  KEY `checkpass` (`checkpass`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `new_enewssearch` values('1','中日学者','1486371182','title,smalltext','1','124.207.109.234','','1','newstime','0','ae3ff4a9a92f923707c2c79575006bf3','news','1','0',' and ((title LIKE ''%中日学者%'') or (smalltext LIKE ''%中日学者%''))','0');");
E_D("replace into `new_enewssearch` values('2','学者','1492482167','title,smalltext','11','124.207.109.234','','1','newstime','0','04e28f00724686625b6310b2b55d3e8e','news','1','0',' and ((title LIKE ''%学者%'') or (smalltext LIKE ''%学者%''))','0');");

@include("../../inc/footer.php");
?>