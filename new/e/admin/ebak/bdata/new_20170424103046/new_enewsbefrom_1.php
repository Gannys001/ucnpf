<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `new_enewsbefrom`;");
E_C("CREATE TABLE `new_enewsbefrom` (
  `befromid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `sitename` char(60) NOT NULL DEFAULT '',
  `siteurl` char(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`befromid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `new_enewsbefrom` values('1','中国网','http://news.china.com.cn/rollnews/news/live/2015-05/25/content_32845931.htm');");
E_D("replace into `new_enewsbefrom` values('5','钝角网','http://www.dunjiaodu.com/');");

@include("../../inc/footer.php");
?>