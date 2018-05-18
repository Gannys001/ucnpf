<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `new_enewsclassadd`;");
E_C("CREATE TABLE `new_enewsclassadd` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  `ttids` text NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `new_enewsclassadd` values('1','','');");
E_D("replace into `new_enewsclassadd` values('3','','');");
E_D("replace into `new_enewsclassadd` values('5','','');");
E_D("replace into `new_enewsclassadd` values('6','','');");
E_D("replace into `new_enewsclassadd` values('7','','');");
E_D("replace into `new_enewsclassadd` values('10','','');");
E_D("replace into `new_enewsclassadd` values('33','','');");
E_D("replace into `new_enewsclassadd` values('16','','');");
E_D("replace into `new_enewsclassadd` values('17','','');");
E_D("replace into `new_enewsclassadd` values('18','','');");
E_D("replace into `new_enewsclassadd` values('19','','');");
E_D("replace into `new_enewsclassadd` values('20','','');");
E_D("replace into `new_enewsclassadd` values('21','','');");
E_D("replace into `new_enewsclassadd` values('22','','');");
E_D("replace into `new_enewsclassadd` values('23','','');");
E_D("replace into `new_enewsclassadd` values('24','','');");
E_D("replace into `new_enewsclassadd` values('30','','');");
E_D("replace into `new_enewsclassadd` values('32','','');");
E_D("replace into `new_enewsclassadd` values('31','','');");
E_D("replace into `new_enewsclassadd` values('34','','');");
E_D("replace into `new_enewsclassadd` values('35','','');");
E_D("replace into `new_enewsclassadd` values('36','','');");
E_D("replace into `new_enewsclassadd` values('37','','');");
E_D("replace into `new_enewsclassadd` values('38','','');");
E_D("replace into `new_enewsclassadd` values('39','','');");
E_D("replace into `new_enewsclassadd` values('40','','');");
E_D("replace into `new_enewsclassadd` values('41','','');");
E_D("replace into `new_enewsclassadd` values('42','','');");
E_D("replace into `new_enewsclassadd` values('43','','');");

@include("../../inc/footer.php");
?>