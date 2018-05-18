<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `new_enewsclass`;");
E_C("CREATE TABLE `new_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8");
E_D("replace into `new_enewsclass` values('1','0','简体中文','|3|5|6|7|16|17|18|19|20|21|22|23|24|42|43|','0','25','10','0','0','0','','0','zh-cn','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','简体中文','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','1','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1484793227');");
E_D("replace into `new_enewsclass` values('3','1','运营项目','','0','25','10','13','0','13','|1|','1','zh-cn/programs','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','运营项目','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','9','9','1484793577');");
E_D("replace into `new_enewsclass` values('5','1','新闻动态','','0','25','10','11','0','10','|1|','1','zh-cn/news','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','新闻动态','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','10','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','5','5','1484793767');");
E_D("replace into `new_enewsclass` values('6','1','工作动态','','0','25','10','1','0','1','|1|','1','zh-cn/work','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','工作动态','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1484793852');");
E_D("replace into `new_enewsclass` values('7','1','观点分享','','0','25','10','12','0','12','|1|','1','zh-cn/view','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','观点分享','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','12','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','9','9','1484794003');");
E_D("replace into `new_enewsclass` values('10','0','English','|30|31|32|33|34|35|36|37|38|39|40|41|','0','25','10','0','0','1','','0','en','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','English','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1484795243');");
E_D("replace into `new_enewsclass` values('34','10','Third Annual Sino-U.S. Counterterrorism Dialogue','','0','25','10','16','0','17','|10|','1','en/counterterrorism','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','Third Annual Sino-U.S. Counterterrorism Dialogue','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','17','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1486202943');");
E_D("replace into `new_enewsclass` values('16','1','相关新闻','','0','25','10','1','0','11','|1|','1','zh-cn/xiangguanxinwen','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','相关新闻','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1485065731');");
E_D("replace into `new_enewsclass` values('17','1','中美国际反恐学术研讨会','','0','25','10','13','0','13','|1|','1','zh-cn/fankong','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','中美国际反恐学术研讨会','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1485137412');");
E_D("replace into `new_enewsclass` values('18','1','《旋风九日》美国放映活动','','0','25','10','18','0','13','|1|','1','zh-cn/jiuri','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','《旋风九日》美国放映活动','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1485137482');");
E_D("replace into `new_enewsclass` values('19','1','中日学者交流项目','','0','25','10','13','0','13','|1|','1','zh-cn/jiaoliu','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','中日学者交流项目','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1485137540');");
E_D("replace into `new_enewsclass` values('20','1','美国市长代表团访华','','0','25','10','13','0','13','|1|','1','zh-cn/fanghua','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','美国市长代表团访华','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1485137587');");
E_D("replace into `new_enewsclass` values('21','1','中美青年军官交流','','0','25','10','13','0','13','|1|','1','zh-cn/junguan','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','中美青年军官交流','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1485137649');");
E_D("replace into `new_enewsclass` values('22','1','新视角论文颁奖典礼','','0','25','10','13','0','13','|1|','1','zh-cn/lunwen','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','新视角论文颁奖典礼','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1485137707');");
E_D("replace into `new_enewsclass` values('23','1','中国民间外交发展报告','','0','25','10','13','0','13','|1|','1','zh-cn/minjianwaijiao','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','中国民间外交发展报告','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1485184723');");
E_D("replace into `new_enewsclass` values('24','1','视频资料','','0','25','10','5','0','4','|1|','1','zh-cn/video','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','4','1','10','视频资料','0','0','4','flash','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','4','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1485241333');");
E_D("replace into `new_enewsclass` values('30','10','Event','','0','25','10','14','0','14','|10|','1','en/news','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','Event','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','14','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','2','2','1486197836');");
E_D("replace into `new_enewsclass` values('32','10','View Point','','0','25','10','15','0','16','|10|','1','en/view','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','View Point','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','16','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','4','4','1486198361');");
E_D("replace into `new_enewsclass` values('33','10','Programs','','0','25','10','16','0','17','|10|','1','en/programs','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','Programs','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','17','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','9','9','1486199490');");
E_D("replace into `new_enewsclass` values('31','10','Related news','','0','25','10','14','0','15','|10|','1','en/related','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','Related news','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','15','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1486197899');");
E_D("replace into `new_enewsclass` values('35','10','Screening Mr. Deng Goes to Washington in the U.S.','','0','25','10','16','0','17','|10|','1','en/screening','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','Screening Mr. Deng Goes to Washington in the U.S.','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','17','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1486202986');");
E_D("replace into `new_enewsclass` values('36','10','Chinese and Japanese Scholar Exchange Program','','0','25','10','16','0','17','|10|','1','en/exchange','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','Chinese and Japanese Scholar Exchange Program','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','17','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1486203039');");
E_D("replace into `new_enewsclass` values('37','10','U.S. Mayors Delegation Visit to China','','0','25','10','16','0','17','|10|','1','en/delegation','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','U.S. Mayors Delegation Visit to China','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','17','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1486203087');");
E_D("replace into `new_enewsclass` values('38','10','U.S. – China Young Military Cadets Exchange Progra','','0','25','10','16','0','17','|10|','1','en/Military','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','U.S. – China Young Military Cadets Exchange Progra','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','17','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1486203124');");
E_D("replace into `new_enewsclass` values('39','10','“New Perspectives” Award Ceremony','','0','25','10','16','0','17','|10|','1','en/award','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','“New Perspectives” Award Ceremony','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','17','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1486203166');");
E_D("replace into `new_enewsclass` values('40','10','The Report of the Chinese Civil Diplomacy','','0','25','10','16','0','17','|10|','1','en/diplomacy','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','The Report of the Chinese Civil Diplomacy','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','17','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1486203221');");
E_D("replace into `new_enewsclass` values('41','10','video','','0','25','10','17','0','18','|10|','1','en/video','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','4','1','10','video','0','0','4','flash','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','18','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1487239414');");
E_D("replace into `new_enewsclass` values('42','1','中日学者对话：朝鲜半岛核问题','','0','25','10','13','0','13','|1|','1','zh-cn/chaohe','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','中日学者对话：朝鲜半岛核问题','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1490674238');");
E_D("replace into `new_enewsclass` values('43','1','国际合规论坛','','0','25','10','13','0','13','|1|','1','zh-cn/hegui','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','国际合规论坛','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1490674296');");

@include("../../inc/footer.php");
?>