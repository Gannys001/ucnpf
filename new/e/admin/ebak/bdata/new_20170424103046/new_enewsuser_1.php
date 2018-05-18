<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `new_enewsuser`;");
E_C("CREATE TABLE `new_enewsuser` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `rnd` varchar(20) NOT NULL DEFAULT '',
  `adminclass` mediumtext NOT NULL,
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `styleid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `filelevel` tinyint(1) NOT NULL DEFAULT '0',
  `salt` varchar(8) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(120) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pretime` int(10) unsigned NOT NULL DEFAULT '0',
  `preip` varchar(20) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `addip` varchar(20) NOT NULL DEFAULT '',
  `userprikey` varchar(50) NOT NULL DEFAULT '',
  `salt2` varchar(20) NOT NULL DEFAULT '',
  `lastipport` varchar(6) NOT NULL DEFAULT '',
  `preipport` varchar(6) NOT NULL DEFAULT '',
  `addipport` varchar(6) NOT NULL DEFAULT '',
  `uprnd` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `new_enewsuser` values('2','lvzhongqi','7fef0134f3b969c263cc1f9d41e9620c','GIk67vq6ngPiooXMudMz','|','1','0','1','0','gX1qoNaU','9','1491016284','124.207.109.234','','','0','1491013106','124.207.109.234','1485137873','124.207.109.234','RB3WriVjPA4p98O4EOxdCn88gSidJSrDLhzhY0y0n7EIlKNZ','iiYOPqm4KjpVDWY1h1wM','53245','50273','55256','');");
E_D("replace into `new_enewsuser` values('3','lipan','0d4863e7eca2c6604b69f3890500ddac','GMloHZ79zitGrhYFtvbp','|','1','0','1','0','b7BDdVsT','36','1493001027','124.207.109.234','','','0','1492571560','124.207.109.234','1485226258','124.207.109.234','M5lxipifwCdiJcW5WHB3byYQpXcTazq8oSyeLjizx6lLCsTf','6cxVbImKCmgazpdzxR2Y','40022','40904','51174','');");

@include("../../inc/footer.php");
?>