<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `new_enewssearchtemp`;");
E_C("CREATE TABLE `new_enewssearchtemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(60) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `subnews` smallint(6) NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `listvar` text NOT NULL,
  `rownum` smallint(6) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `showdate` varchar(50) NOT NULL DEFAULT '',
  `subtitle` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `docode` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `new_enewssearchtemp` values('1','默认搜索模板','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD HTML 4.01//EN\\\\\"\r\n   \\\\\"http://www.w3.org/TR/html4/strict.dtd\\\\\">\r\n\r\n<html lang=\\\\\"en\\\\\">\r\n  <head profile=\\\\\"http://www.w3.org/2005/10/profile\\\\\">\r\n    <meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\">\r\n	<link rel=\\\\\"icon\\\\\" href=\\\\\"../images/shared/favicon.png\\\\\" type=\\\\\"image/png\\\\\" />\r\n    <title>美中新视角基金会</title>\r\n\r\n    <!-- Framework CSS -->\r\n    <link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/blueprint/screen.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"screen, projection, print\\\\\">\r\n    <!--link rel=\\\\\"stylesheet\\\\\" href=\\\\\"../css/blueprint/print.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"print\\\\\"-->\r\n    <!--[if lt IE 8]><link rel=\\\\\"stylesheet\\\\\" href=\\\\\"../css/blueprint/ie.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"screen, projection\\\\\"><![endif]-->\r\n\r\n    <!-- Import fancy-type plugin for the sample page. -->\r\n    <link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/blueprint/plugins/fancy-type/screen.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"screen, projection\\\\\">\r\n  	\r\n  	<!-- Common js -->\r\n    <script type=\\\\\"text/javascript\\\\\" src=\\\\\"/js/print.js\\\\\"></script>\r\n    <script type=\\\\\"text/javascript\\\\\" src=\\\\\"/js/cookie.js\\\\\"></script>\r\n\r\n	<!-- Import for global files -->\r\n	<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/global.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"screen, projection, print\\\\\">\r\n  	<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/zh-cn/css/global.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"screen, projection, print\\\\\">\r\n  	\r\n  	<!--Import for page specific file-->\r\n  	<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/news.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"screen, projection, print\\\\\">\r\n  	<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/news2.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"screen, projection, print\\\\\">\r\n  	\r\n  	\r\n  	\r\n  	<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/style.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"screen, projection, print\\\\\">\r\n   <link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/reset.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"screen, projection, print\\\\\">\r\n\r\n    <style type=\\\\\"text/css\\\\\">\r\n<!--\r\n.STYLE1 {\r\n	font-size: 16px;\r\n	font-weight: bold;\r\n}\r\n.STYLE3 {\r\n	font-size: 12px\r\n}\r\n.STYLE4 {\r\n	font-size: 13px;\r\n	color: #333333;\r\n}\r\n-->\r\n    </style>\r\n</head>\r\n  <body>\r\n  	\r\n    <div class=\\\\\"container\\\\\">\r\n      	<div class=\\\\\"span-24\\\\\">\r\n      		<a id=\\\\\"headerlogo\\\\\" href=\\\\\"index.html\\\\\"><img src=\\\\\"/images/shared/logo.gif\\\\\"/><span>美中新视角基金会</span></a>\r\n      	</div>\r\n\r\n[!--temp.header--]\r\n      	\r\n      	<div id=\\\\\"main_content\\\\\" class=\\\\\"span-24\\\\\">\r\n      		<div id=\\\\\"news_content\\\\\" class=\\\\\"span-17 last\\\\\">\r\n                        [!--empirenews.listtemp--]\r\n                         <ul id=\\\\\"newslist\\\\\" class=\\\\\"prepend-top\\\\\">\r\n                         <!--list.var1-->\r\n                         </ul>\r\n                      [!--empirenews.listtemp--]	\r\n   		  </div>\r\n   	  </div>\r\n      	<!--Footer-->\r\n[!--temp.footer--]\r\n      	\r\n    </div>\r\n  </body>\r\n</html>\r\n\r\n','180','1','<li class=\\\\\"STYLE4\\\\\"><a href=\\\\\"[!--titleurl--]\\\\\">[!--title--]</a></li>\r\n','1','1','Y-m-d','0','0','0');");

@include("../../inc/footer.php");
?>