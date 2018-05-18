<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `new_ecms_news_index`;");
E_C("CREATE TABLE `new_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8");
E_D("replace into `new_ecms_news_index` values('40','3','1','1486950366','1486950412','1486950412','1');");
E_D("replace into `new_ecms_news_index` values('24','3','1','1432521374','1485166971','1490838128','1');");
E_D("replace into `new_ecms_news_index` values('26','3','1','1485235390','1485235677','1490838148','1');");
E_D("replace into `new_ecms_news_index` values('37','3','1','1486950217','1486950276','1486950276','1');");
E_D("replace into `new_ecms_news_index` values('38','3','1','1486950279','1486950316','1490673553','1');");
E_D("replace into `new_ecms_news_index` values('25','3','1','1485226818','1485227248','1487147180','1');");
E_D("replace into `new_ecms_news_index` values('54','7','1','1487053469','1490671432','1492401956','1');");
E_D("replace into `new_ecms_news_index` values('12','5','1','1466151360','1485167084','1492484525','1');");
E_D("replace into `new_ecms_news_index` values('55','7','1','1487061407','1490671794','1492401985','1');");
E_D("replace into `new_ecms_news_index` values('56','7','1','1490060324','1490670105','1492569795','1');");
E_D("replace into `new_ecms_news_index` values('51','5','1','1484028420','1490670532','1492401840','1');");
E_D("replace into `new_ecms_news_index` values('16','5','1','1469786901','1485168112','1492484785','1');");
E_D("replace into `new_ecms_news_index` values('17','7','1','1477272240','1485168316','1492401889','1');");
E_D("replace into `new_ecms_news_index` values('18','7','1','1487116800','1485168498','1492401906','1');");
E_D("replace into `new_ecms_news_index` values('20','17','1','1469786901','1485169902','1492483880','1');");
E_D("replace into `new_ecms_news_index` values('63','3','1','1490754898','1490754968','1490754968','1');");
E_D("replace into `new_ecms_news_index` values('62','5','1','1466071444','1490695628','1490695691','1');");
E_D("replace into `new_ecms_news_index` values('23','18','1','1466151360','1485167084','1492484525','1');");
E_D("replace into `new_ecms_news_index` values('39','3','1','1486950318','1486950364','1486950364','1');");
E_D("replace into `new_ecms_news_index` values('70','32','1','1491015630','1491015021','1492417835','1');");
E_D("replace into `new_ecms_news_index` values('33','36','1','1478845462','1486362373','1486362373','1');");
E_D("replace into `new_ecms_news_index` values('41','33','1','1487227406','1487227425','1487312983','1');");
E_D("replace into `new_ecms_news_index` values('42','33','1','1487227427','1487227456','1491380880','1');");
E_D("replace into `new_ecms_news_index` values('43','33','1','1487227458','1487227494','1487313101','1');");
E_D("replace into `new_ecms_news_index` values('44','33','1','1487227496','1487227529','1491794314','1');");
E_D("replace into `new_ecms_news_index` values('45','33','1','1487227531','1487227558','1487227558','1');");
E_D("replace into `new_ecms_news_index` values('46','33','1','1487227560','1487227589','1487227589','1');");
E_D("replace into `new_ecms_news_index` values('47','33','1','1487227591','1487227631','1487227631','1');");
E_D("replace into `new_ecms_news_index` values('65','30','1','1491028320','1491013329','1492417780','1');");
E_D("replace into `new_ecms_news_index` values('69','32','1','1491014537','1491014537','1492417874','1');");
E_D("replace into `new_ecms_news_index` values('50','5','1','1489541924','1490670105','1492401810','1');");
E_D("replace into `new_ecms_news_index` values('52','7','1','1490582953','1490670753','1492401931','1');");
E_D("replace into `new_ecms_news_index` values('71','32','1','1491017137','1491015226','1492417813','1');");
E_D("replace into `new_ecms_news_index` values('57','7','1','1489973926','1490672117','1492569383','1');");
E_D("replace into `new_ecms_news_index` values('58','7','1','1489716037','1490672253','1492569401','1');");
E_D("replace into `new_ecms_news_index` values('59','7','1','1489545740','1490672370','1492569421','1');");
E_D("replace into `new_ecms_news_index` values('68','32','1','1489717980','1491014292','1492417897','1');");
E_D("replace into `new_ecms_news_index` values('64','3','1','1490754972','1490755002','1490755002','1');");
E_D("replace into `new_ecms_news_index` values('72','33','1','1491372494','1491372556','1491372556','1');");
E_D("replace into `new_ecms_news_index` values('73','33','1','1491372559','1491372626','1491372626','1');");
E_D("replace into `new_ecms_news_index` values('74','30','1','1491443485','1491444368','1492417747','1');");

@include("../../inc/footer.php");
?>