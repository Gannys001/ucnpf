<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `new_enewsfile_1`;");
E_C("CREATE TABLE `new_enewsfile_1` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8");
E_D("replace into `new_enewsfile_1` values('46','1000010000000012','bf1869b40862e76f1a54c6869f348a0d.jpg','56673','2017-02-14','admin','1487060255','5','3.jpg','1','0','12','0','0','0');");
E_D("replace into `new_enewsfile_1` values('45','1000010000000012','73a587bc02a418e50e3279187c00db87.jpg','55770','2017-02-14','admin','1487060215','5','2.jpg','1','0','12','0','0','0');");
E_D("replace into `new_enewsfile_1` values('44','1000010000000012','27975334f1f0d9d8069e780850337710.jpg','35952','2017-02-14','admin','1487060140','5','1.jpg','1','0','12','0','0','0');");
E_D("replace into `new_enewsfile_1` values('63','1000010000000051','00f6ca6b16d676c1e4c29f4ef6f80e04.jpg','14525','2017-03-28','admin','1490685076','5','法学院.jpg','1','0','51','0','0','0');");
E_D("replace into `new_enewsfile_1` values('42','1000010000000016','b2251a63f40c7c21d979ef575fa6ecfa.png','618353','2017-02-13','admin','1486958867','5','图片.png','1','0','16','0','0','0');");
E_D("replace into `new_enewsfile_1` values('41','1000010000000016','5d330ce32e5e81ffb58ca330159a6049.png','577765','2017-02-13','admin','1486958481','5','图片.png','1','0','16','0','0','0');");
E_D("replace into `new_enewsfile_1` values('40','1000010000000016','d67338cec5f986902f34cd94b98cad50.jpg','111881','2017-02-13','admin','1486957848','5','39271469786900_副本.jpg','1','0','16','0','0','0');");
E_D("replace into `new_enewsfile_1` values('8','0','f0332680b0a52591445e45241e924216.jpg','29894','2017-01-23','lvzhongqi','1485159858','5','5142688353742074058.jpg','1','0','1485159627','1485159627','0','0');");
E_D("replace into `new_enewsfile_1` values('39','1000010000000020','b73a24e78940746a1b4f0d2011b800da.png','23338','2017-02-09','admin','1486607464','17','fankongtitle.png','1','0','20','0','0','0');");
E_D("replace into `new_enewsfile_1` values('38','1000010000000024','c92831320af7aae578589126df41402d.png','131465','2017-02-08','admin','1486537417','3','飓风250x187.png','1','0','24','0','0','0');");
E_D("replace into `new_enewsfile_1` values('37','1000010000000025','bdae8c258c57303513eb45c0ed43c58b.png','133020','2017-02-08','admin','1486537121','3','反恐250x187.png','1','0','25','0','0','0');");
E_D("replace into `new_enewsfile_1` values('36','1000010000000026','fc87bb708d4cde9e42c428a1db037883.png','93076','2017-02-08','admin','1486537084','3','交流250x187.png','1','0','26','0','0','0');");
E_D("replace into `new_enewsfile_1` values('35','1000040000000001','bbb86aa230d0403640a2d3acd030a293.png','143281','2017-02-08','admin','1486523518','24','jiurivideo.png','1','0','1','0','0','0');");
E_D("replace into `new_enewsfile_1` values('64','1000010000000052','fd0ca48b8d41940b7a1f7c39e53452a9.jpg','7833','2017-03-28','admin','1490686230','7','加拉格尔.jpg','1','0','52','0','0','0');");
E_D("replace into `new_enewsfile_1` values('15','1000010000000012','b018dcfe50e08ca038ab0b23e3c8e82e.jpg','136132','2017-01-23','lvzhongqi','1485167047','5','134305898_14337259075751n.jpg','1','0','12','0','0','0');");
E_D("replace into `new_enewsfile_1` values('66','1000010000000074','6017af1c9cd861502e76c6e3ff2d595a.jpg','146351','2017-04-06','lipan','1491443901','30','beijing_2.JPG','1','0','74','0','0','0');");
E_D("replace into `new_enewsfile_1` values('19','1000010000000016','a02636c19dd0bea8d338667802e31506.jpg','327271','2017-01-23','lvzhongqi','1485168050','5','39271469786900.jpg','1','0','16','0','0','0');");
E_D("replace into `new_enewsfile_1` values('62','1000010000000051','4a18652910ed7e190da9046509f50eb6.jpg','93667','2017-03-28','lvzhongqi','1490670334','5','武大.jpg','1','0','51','0','0','0');");
E_D("replace into `new_enewsfile_1` values('20','1000010000000026','599a58760c5c25c13843b4a097293c3e.png','868202','2017-01-24','admin','1485235762','3','Picture1.png','1','0','26','0','0','0');");
E_D("replace into `new_enewsfile_1` values('21','1000010000000017','17c19eb797d6685e2f1ebf633b91cedc.png','488944','2017-01-24','admin','1485238170','7','观点1.png','1','0','17','0','0','0');");
E_D("replace into `new_enewsfile_1` values('22','1000010000000018','e858e21a06f754c6c8ffad419cf5bb73.jpg','50230','2017-01-24','admin','1485238197','7','6e9feb6d23ebb0bf31ee23a0a33537c1.jpg','1','0','18','0','0','0');");
E_D("replace into `new_enewsfile_1` values('34','1000040000000001','bd5d44d5471682f9d11defb2797a1974.png','31007','2017-02-07','admin','1486457191','24','jiuri.png','1','0','1','0','0','0');");
E_D("replace into `new_enewsfile_1` values('33','1000040000000001','193528751065b75947053c040c343cc9.flv','7714958','2017-02-07','admin','1486440393','24','旋风九日_标清.flv','3','0','1','0','0','0');");
E_D("replace into `new_enewsfile_1` values('26','0','1fb510b0b73c0b9b478accfff985478d.png','91220','2017-02-06','lvzhongqi','1486361989','34','图片2.png','1','0','1486361958','1486361958','0','0');");
E_D("replace into `new_enewsfile_1` values('79','1000010000000023','1c26b119567c1d09db25d7091ddc8a0a.jpg','55770','2017-04-18','lipan','1492484095','18','2.jpg','1','0','23','0','0','0');");
E_D("replace into `new_enewsfile_1` values('28','1000010000000033','af33d8dc873857b612abbdc9343a95e3.png','161386','2017-02-06','lvzhongqi','1486362352','36','图片3.png','1','0','33','0','0','0');");
E_D("replace into `new_enewsfile_1` values('78','1000010000000023','331c75f69e01cef4a2b67e310da5b27d.jpg','35952','2017-04-18','lipan','1492484083','18','1.jpg','1','0','23','0','0','0');");
E_D("replace into `new_enewsfile_1` values('47','1000010000000012','b18f7ee17b64c006e28551a866b25dd6.jpg','45454','2017-02-14','admin','1487060774','5','4.jpg','1','0','12','0','0','0');");
E_D("replace into `new_enewsfile_1` values('48','1000010000000024','d00f42915601ec97e56a3faec55ae659.jpg','21737','2017-02-15','admin','1487146749','3','1_250x.jpg','1','0','24','0','0','0');");
E_D("replace into `new_enewsfile_1` values('49','1000010000000025','88d17263cb1a85c7a318a13f6f1d98d0.jpg','29290','2017-02-15','admin','1487147174','3','fankong250.jpg','1','0','25','0','0','0');");
E_D("replace into `new_enewsfile_1` values('50','1000010000000026','64ee13550e825a96b27a0e194c0e2240.jpg','23221','2017-02-15','admin','1487147370','3','jiaoliu250.jpg','1','0','26','0','0','0');");
E_D("replace into `new_enewsfile_1` values('51','1000010000000016','c380be7dfe21d386eb46060bdd639e28.jpg','112540','2017-02-15','admin','1487147848','5','2.jpg','1','0','16','0','0','0');");
E_D("replace into `new_enewsfile_1` values('52','1000010000000017','78acde1bb19c191422350183115045da.jpg','9137','2017-02-15','admin','1487148049','7','fankong126.jpg','1','0','17','0','0','0');");
E_D("replace into `new_enewsfile_1` values('53','1000010000000018','9c993f6b3b442230c2423218c925e3b1.jpg','9754','2017-02-15','admin','1487148165','7','130.jpg','1','0','18','0','0','0');");
E_D("replace into `new_enewsfile_1` values('54','1000040000000001','ad696506081ce230e72a26fd713aba63.jpg','31003','2017-02-15','admin','1487148645','24','video.jpg','1','0','1','0','0','0');");
E_D("replace into `new_enewsfile_1` values('80','1000010000000023','45ec6eee82b14b4d5528c277a62f7feb.jpg','56673','2017-04-18','lipan','1492484104','18','3.jpg','1','0','23','0','0','0');");
E_D("replace into `new_enewsfile_1` values('65','1000010000000074','ceccd0fa267d40d08cf11ec95b327f63.jpg','141511','2017-04-06','lipan','1491443799','30','beijing_1.jpg','1','0','74','0','0','0');");
E_D("replace into `new_enewsfile_1` values('77','1000010000000020','d66b737a561e9ced6d20303ef4e36942.jpg','327271','2017-04-18','lipan','1492482903','17','39271469786900.jpg','1','0','20','0','0','0');");
E_D("replace into `new_enewsfile_1` values('58','1000010000000041','e4ff4ecb286f6d2d6833d279541942c1.jpg','21737','2017-02-17','admin','1487312975','33','1_250x.jpg','1','0','41','0','0','0');");
E_D("replace into `new_enewsfile_1` values('59','1000010000000042','68fafe35455c1a028ed90097f04edfd4.jpg','29290','2017-02-17','admin','1487313058','33','fankong250.jpg','1','0','42','0','0','0');");
E_D("replace into `new_enewsfile_1` values('60','1000010000000043','e2750094e7d187dfd2c6493fa5252df6.jpg','23221','2017-02-17','admin','1487313099','33','jiaoliu250.jpg','1','0','43','0','0','0');");
E_D("replace into `new_enewsfile_1` values('61','1000010000000050','96582d10206fa4bf2c99cc511ac65f27.jpg','83688','2017-03-28','lvzhongqi','1490669822','5','中日学者对话.jpg','1','0','50','0','0','0');");
E_D("replace into `new_enewsfile_1` values('67','1000010000000074','eb4f5ac6377577393dc4a08697e85ce3.jpg','98144','2017-04-06','lipan','1491444184','30','shanghai_3.jpg','1','0','74','0','0','0');");
E_D("replace into `new_enewsfile_1` values('68','1000010000000074','4e22c6acbec960c07c35057e25a6a037.jpg','113980','2017-04-06','lipan','1491444249','30','beijing_4.JPG','1','0','74','0','0','0');");
E_D("replace into `new_enewsfile_1` values('69','1000010000000065','6b8440325719589e5a4d68e1621cc80a.jpg','31138','2017-04-06','lipan','1491444948','30','jiu1.jpg','1','0','65','0','0','0');");
E_D("replace into `new_enewsfile_1` values('70','1000010000000065','a1966adc813757ed74ace57570c98c04.jpg','43724','2017-04-06','lipan','1491444997','30','jiu2.jpg','1','0','65','0','0','0');");
E_D("replace into `new_enewsfile_1` values('71','1000010000000068','a4c8eab3de6c44fc68c85fea1aa73b19.jpg','21635','2017-04-06','lipan','1491449010','32','thediplomat_2017-03-16_19-23-44-386x257.jpg','1','0','68','0','0','0');");
E_D("replace into `new_enewsfile_1` values('72','1000010000000070','7d6875dae86b0f793e38e0a454ec383d.jpg','15945','2017-04-06','lipan','1491449522','32','thediplomat_2017-01-23_20-51-30-386x257.jpg','1','0','70','0','0','0');");
E_D("replace into `new_enewsfile_1` values('73','1000010000000068','2b441f752522ff3a24323582a26efaf0.jpg','7724','2017-04-06','lipan','1491459968','32','chao_126.jpg','1','0','68','0','0','0');");
E_D("replace into `new_enewsfile_1` values('74','1000010000000070','b1bb5e5dd1d0a366a299b51787fb883d.jpg','6208','2017-04-06','lipan','1491460011','32','hong_126.jpg','1','0','70','0','0','0');");
E_D("replace into `new_enewsfile_1` values('75','1000010000000065','7f0b0b8550768d11d88ee979f37017b4.jpg','14173','2017-04-06','lipan','1491460084','30','jiu2_169.jpg','1','0','65','0','0','0');");
E_D("replace into `new_enewsfile_1` values('76','1000010000000074','18426d8a884949e6f5bc8e8b6ff4d8cf.jpg','17778','2017-04-06','lipan','1491460116','30','beijing_169.jpg','1','0','74','0','0','0');");

@include("../../inc/footer.php");
?>