<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `new_enewsloginfail`;");
E_C("CREATE TABLE `new_enewsloginfail` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `num` tinyint(4) NOT NULL DEFAULT '0',
  `lasttime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `new_enewsloginfail` values('124.207.109.234','2','1494988915');");

@include("../../inc/footer.php");
?>