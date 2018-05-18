<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `new_ecms_flash`;");
E_C("CREATE TABLE `new_ecms_flash` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` varchar(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(1) NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` varchar(14) NOT NULL DEFAULT '',
  `titleurl` varchar(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` varchar(80) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` varchar(120) NOT NULL DEFAULT '',
  `flashwriter` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(80) NOT NULL DEFAULT '',
  `star` tinyint(1) NOT NULL DEFAULT '0',
  `filesize` varchar(16) NOT NULL DEFAULT '',
  `flashurl` varchar(255) NOT NULL DEFAULT '',
  `width` varchar(12) NOT NULL DEFAULT '',
  `height` varchar(12) NOT NULL DEFAULT '',
  `flashsay` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `new_ecms_flash` values('1','24','0','2','0','0','2017-01-24','1','1','admin','0','0','1','0','0','0','0','1485241421','1487148649','1','0','0','','/zh-cn/video/2017-01-24/1.html','1','1','1','','华盛顿子午线中心举办《旋风九日》展映活动','1485241343','/d/file/zh-cn/video/2017-02-15/ad696506081ce230e72a26fd713aba63.jpg','','','2','','/d/file/zh-cn/video/2017-02-07/jiuri.mp4','650','480','2016年11月10日至22日，美中新视角基金会策划并组织了反映邓小平1979年访美全程记录的影片《旋风九日》在美国的放映活动');");
E_D("replace into `new_ecms_flash` values('2','41','0','0','0','0','2017-02-17','2','1','admin','0','0','1','0','0','0','0','1487313415','1487313840','1','0','0','','/en/video/2017-02-17/2.html','1','1','1','','华盛顿子午线中心举办《旋风九日》展映活动','1487313274','/d/file/zh-cn/video/2017-02-15/ad696506081ce230e72a26fd713aba63.jpg','','','2','','/d/file/zh-cn/video/2017-02-07/jiuri.mp4','600','450','2016年11月10日至22日，美中新视角基金会策划并组织了反映邓小平1979年访美全程记录的影片《旋风九日》在美国的放映活动');");

@include("../../inc/footer.php");
?>