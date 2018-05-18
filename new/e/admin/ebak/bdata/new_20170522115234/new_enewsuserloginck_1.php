<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `new_enewsuserloginck`;");
E_C("CREATE TABLE `new_enewsuserloginck` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `andauth` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `new_enewsuserloginck` values('1','2f96fa5dfd61c5e55fbe3fc82870fed7');");
E_D("replace into `new_enewsuserloginck` values('2','5a3516f84b9fdf851828bdc3293ebeb8');");
E_D("replace into `new_enewsuserloginck` values('3','40d8a644a851139fc502c0896fa33562');");

@include("../../inc/footer.php");
?>