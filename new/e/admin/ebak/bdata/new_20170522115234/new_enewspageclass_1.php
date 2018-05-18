<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `new_enewspageclass`;");
E_C("CREATE TABLE `new_enewspageclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `classname` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `new_enewspageclass` values('1','英文');");
E_D("replace into `new_enewspageclass` values('2','中文');");

@include("../../inc/footer.php");
?>