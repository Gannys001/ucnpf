<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `new_enewslog`;");
E_C("CREATE TABLE `new_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=159 DEFAULT CHARSET=utf8");
E_D("replace into `new_enewslog` values('1','admin','2017-01-19 10:28:57','124.207.109.234','1','','0','37664');");
E_D("replace into `new_enewslog` values('2','admin','2017-01-19 10:30:23','124.207.109.234','0','','1','37678');");
E_D("replace into `new_enewslog` values('3','admin','2017-01-19 10:30:29','124.207.109.234','1','','0','37678');");
E_D("replace into `new_enewslog` values('4','admin','2017-01-19 16:33:03','124.207.109.234','1','','0','42446');");
E_D("replace into `new_enewslog` values('5','admin','2017-01-20 10:14:04','124.207.109.234','1','','0','46424');");
E_D("replace into `new_enewslog` values('6','admin','2017-01-20 10:40:46','124.207.109.234','1','','0','46526');");
E_D("replace into `new_enewslog` values('7','admin','2017-01-20 16:15:14','124.207.109.234','1','','0','51212');");
E_D("replace into `new_enewslog` values('8','admin','2017-01-20 16:48:16','124.207.109.234','1','','0','52978');");
E_D("replace into `new_enewslog` values('9','admin','2017-01-21 18:52:24','118.199.71.219','1','','0','64763');");
E_D("replace into `new_enewslog` values('10','admin','2017-01-21 19:24:30','118.199.71.219','1','','0','49298');");
E_D("replace into `new_enewslog` values('11','admin','2017-01-22 00:11:20','118.199.71.219','1','','0','52251');");
E_D("replace into `new_enewslog` values('12','admin','2017-01-22 00:42:26','118.199.71.219','1','','0','53075');");
E_D("replace into `new_enewslog` values('13','admin','2017-01-22 09:35:33','124.207.109.234','1','','0','57026');");
E_D("replace into `new_enewslog` values('14','admin','2017-01-22 09:49:59','124.207.109.234','1','','0','57314');");
E_D("replace into `new_enewslog` values('15','admin','2017-01-22 10:57:50','124.207.109.234','1','','0','58220');");
E_D("replace into `new_enewslog` values('16','admin','2017-01-22 11:43:17','124.207.109.234','1','','0','58516');");
E_D("replace into `new_enewslog` values('17','admin','2017-01-22 14:21:33','124.207.109.234','1','','0','59276');");
E_D("replace into `new_enewslog` values('18','admin','2017-01-22 16:25:09','124.207.109.234','1','','0','59982');");
E_D("replace into `new_enewslog` values('19','admin','2017-01-22 17:19:12','124.207.109.234','1','','0','32866');");
E_D("replace into `new_enewslog` values('20','admin','2017-01-23 09:36:21','124.207.109.234','1','','0','35352');");
E_D("replace into `new_enewslog` values('21','admin','2017-01-23 10:16:59','124.207.109.234','1','','0','55261');");
E_D("replace into `new_enewslog` values('22','lvzhongqi','2017-01-23 10:25:37','124.207.109.234','1','','0','55613');");
E_D("replace into `new_enewslog` values('23','lvzhongqi','2017-01-23 10:35:24','124.207.109.234','1','','0','50245');");
E_D("replace into `new_enewslog` values('24','admin','2017-01-23 11:17:47','124.207.109.234','1','','0','36230');");
E_D("replace into `new_enewslog` values('25','admin','2017-01-23 15:03:43','124.207.109.234','1','','0','53832');");
E_D("replace into `new_enewslog` values('26','admin','2017-01-23 15:38:48','124.207.109.234','1','','0','37656');");
E_D("replace into `new_enewslog` values('27','admin','2017-01-23 15:46:09','124.207.109.234','1','','0','54523');");
E_D("replace into `new_enewslog` values('28','admin','2017-01-23 16:08:02','124.207.109.234','1','','0','37804');");
E_D("replace into `new_enewslog` values('29','lvzhongqi','2017-01-23 16:18:56','124.207.109.234','1','','0','55099');");
E_D("replace into `new_enewslog` values('30','admin','2017-01-23 16:24:17','124.207.109.234','1','','0','37946');");
E_D("replace into `new_enewslog` values('31','admin','2017-01-23 17:52:04','124.207.109.234','1','','0','41334');");
E_D("replace into `new_enewslog` values('32','admin','2017-01-23 22:18:21','118.199.71.219','1','','0','53315');");
E_D("replace into `new_enewslog` values('33','admin','2017-01-24 09:32:10','124.207.109.234','1','','0','50226');");
E_D("replace into `new_enewslog` values('34','lipan','2017-01-24 10:57:42','124.207.109.234','1','','0','51196');");
E_D("replace into `new_enewslog` values('35','admin','2017-01-24 10:58:13','124.207.109.234','1','','0','51196');");
E_D("replace into `new_enewslog` values('36','lipan','2017-01-24 11:01:36','124.207.109.234','1','','0','51308');");
E_D("replace into `new_enewslog` values('37','lipan','2017-01-24 11:22:30','124.207.109.234','1','','0','57149');");
E_D("replace into `new_enewslog` values('38','lipan','2017-01-24 13:21:58','124.207.109.234','1','','0','52132');");
E_D("replace into `new_enewslog` values('39','admin','2017-01-24 15:04:48','124.64.125.80','1','','0','62936');");
E_D("replace into `new_enewslog` values('40','lipan','2017-01-24 15:09:13','124.207.109.234','1','','0','62669');");
E_D("replace into `new_enewslog` values('41','admin','2017-01-24 16:06:15','124.207.109.234','1','','0','54910');");
E_D("replace into `new_enewslog` values('42','admin','2017-01-24 17:40:53','124.207.109.234','1','','0','55644');");
E_D("replace into `new_enewslog` values('43','admin','2017-02-04 09:50:25','124.207.109.234','1','','0','44820');");
E_D("replace into `new_enewslog` values('44','admin','2017-02-04 11:17:23','124.207.109.234','1','','0','45442');");
E_D("replace into `new_enewslog` values('45','admin','2017-02-04 15:21:48','124.207.109.234','1','','0','46582');");
E_D("replace into `new_enewslog` values('46','admin','2017-02-04 17:04:27','124.207.109.234','1','','0','47960');");
E_D("replace into `new_enewslog` values('47','admin','2017-02-04 18:01:37','124.207.109.234','1','','0','48984');");
E_D("replace into `new_enewslog` values('48','lvzhongqi','2017-02-06 09:29:26','124.207.109.234','1','','0','50273');");
E_D("replace into `new_enewslog` values('49','admin','2017-02-06 10:00:00','124.207.109.234','1','','0','51850');");
E_D("replace into `new_enewslog` values('50','admin','2017-02-06 15:33:07','124.207.109.234','1','','0','54136');");
E_D("replace into `new_enewslog` values('51','admin','2017-02-06 18:10:33','124.207.109.234','1','','0','56516');");
E_D("replace into `new_enewslog` values('52','admin','2017-02-07 09:28:46','124.207.109.234','1','','0','58474');");
E_D("replace into `new_enewslog` values('53','admin','2017-02-07 11:03:45','124.207.109.234','1','','0','49454');");
E_D("replace into `new_enewslog` values('54','admin','2017-02-07 11:12:46','124.207.109.234','1','','0','59716');");
E_D("replace into `new_enewslog` values('55','admin','2017-02-07 11:42:25','124.207.109.234','1','','0','51145');");
E_D("replace into `new_enewslog` values('56','admin','2017-02-07 12:12:41','124.207.109.234','1','','0','53714');");
E_D("replace into `new_enewslog` values('57','admin','2017-02-07 12:28:03','124.207.109.234','1','','0','54781');");
E_D("replace into `new_enewslog` values('58','admin','2017-02-07 15:31:42','114.241.187.97','1','','0','55866');");
E_D("replace into `new_enewslog` values('59','admin','2017-02-07 15:53:53','124.207.109.234','1','','0','60756');");
E_D("replace into `new_enewslog` values('60','admin','2017-02-07 16:02:19','124.207.109.234','1','','0','61179');");
E_D("replace into `new_enewslog` values('61','admin','2017-02-07 16:07:33','124.207.109.234','1','','0','33106');");
E_D("replace into `new_enewslog` values('62','admin','2017-02-07 16:11:38','124.207.109.234','1','','0','61533');");
E_D("replace into `new_enewslog` values('63','admin','2017-02-07 16:49:46','124.207.109.234','1','','0','33226');");
E_D("replace into `new_enewslog` values('64','admin','2017-02-08 10:05:43','124.207.109.234','1','','0','37796');");
E_D("replace into `new_enewslog` values('65','admin','2017-02-08 10:46:56','124.207.109.234','1','','0','38128');");
E_D("replace into `new_enewslog` values('66','admin','2017-02-08 11:11:26','124.207.109.234','1','','0','54749');");
E_D("replace into `new_enewslog` values('67','admin','2017-02-08 11:12:59','124.207.109.234','1','','0','38322');");
E_D("replace into `new_enewslog` values('68','admin','2017-02-08 12:03:19','124.207.109.234','1','','0','58935');");
E_D("replace into `new_enewslog` values('69','admin','2017-02-08 12:09:08','124.207.109.234','1','','0','39348');");
E_D("replace into `new_enewslog` values('70','admin','2017-02-08 14:57:34','124.207.109.234','1','','0','60223');");
E_D("replace into `new_enewslog` values('71','admin','2017-02-08 15:12:43','124.207.109.234','1','','0','40566');");
E_D("replace into `new_enewslog` values('72','admin','2017-02-08 16:47:52','124.207.109.234','1','','0','41168');");
E_D("replace into `new_enewslog` values('73','admin','2017-02-09 09:56:43','124.207.109.234','1','','0','53166');");
E_D("replace into `new_enewslog` values('74','admin','2017-02-09 10:29:56','124.207.109.234','1','','0','52958');");
E_D("replace into `new_enewslog` values('75','admin','2017-02-09 10:43:02','124.207.109.234','1','','0','53794');");
E_D("replace into `new_enewslog` values('76','admin','2017-02-10 15:22:53','124.207.109.234','1','','0','51311');");
E_D("replace into `new_enewslog` values('77','admin','2017-02-10 15:38:16','124.207.109.234','1','','0','40668');");
E_D("replace into `new_enewslog` values('78','admin','2017-02-10 17:10:57','124.207.109.234','1','','0','40996');");
E_D("replace into `new_enewslog` values('79','admin','2017-02-13 09:40:37','124.207.109.234','1','','0','44620');");
E_D("replace into `new_enewslog` values('80','admin','2017-02-13 11:29:40','124.207.109.234','1','','0','45140');");
E_D("replace into `new_enewslog` values('81','admin','2017-02-13 11:48:58','124.207.109.234','1','','0','59988');");
E_D("replace into `new_enewslog` values('82','admin','2017-02-13 15:22:41','124.207.109.234','1','','0','47230');");
E_D("replace into `new_enewslog` values('83','admin','2017-02-13 15:38:06','124.207.109.234','0','','0','63621');");
E_D("replace into `new_enewslog` values('84','admin','2017-02-13 15:38:14','124.207.109.234','1','','0','63621');");
E_D("replace into `new_enewslog` values('85','admin','2017-02-13 16:00:04','124.207.109.234','1','','0','47298');");
E_D("replace into `new_enewslog` values('86','admin','2017-02-14 10:32:42','124.207.109.234','1','','0','49662');");
E_D("replace into `new_enewslog` values('87','admin','2017-02-14 14:03:53','124.207.109.234','1','','0','50354');");
E_D("replace into `new_enewslog` values('88','admin','2017-02-14 16:01:17','124.207.109.234','1','','0','52396');");
E_D("replace into `new_enewslog` values('89','admin','2017-02-14 16:12:01','124.207.109.234','1','','0','53285');");
E_D("replace into `new_enewslog` values('90','admin','2017-02-14 16:27:47','124.207.109.234','1','','0','52584');");
E_D("replace into `new_enewslog` values('91','admin','2017-02-15 09:41:58','124.207.109.234','1','','0','54490');");
E_D("replace into `new_enewslog` values('92','admin','2017-02-15 10:51:15','124.207.109.234','1','','0','36596');");
E_D("replace into `new_enewslog` values('93','admin','2017-02-15 14:09:30','124.207.109.234','1','','0','40788');");
E_D("replace into `new_enewslog` values('94','admin','2017-02-15 15:17:11','124.207.109.234','1','','0','37960');");
E_D("replace into `new_enewslog` values('95','admin','2017-02-15 15:49:26','124.207.109.234','1','','0','42164');");
E_D("replace into `new_enewslog` values('96','admin','2017-02-15 16:18:13','124.207.109.234','1','','0','52848');");
E_D("replace into `new_enewslog` values('97','admin','2017-02-15 18:01:41','124.207.109.234','1','','0','43282');");
E_D("replace into `new_enewslog` values('98','admin','2017-02-16 10:31:46','124.207.109.234','1','','0','46026');");
E_D("replace into `new_enewslog` values('99','admin','2017-02-16 10:54:39','124.207.109.234','1','','0','46228');");
E_D("replace into `new_enewslog` values('100','admin','2017-02-16 14:25:50','124.207.109.234','1','','0','40096');");
E_D("replace into `new_enewslog` values('101','admin','2017-02-16 14:27:50','124.207.109.234','1','','0','40130');");
E_D("replace into `new_enewslog` values('102','admin','2017-02-16 17:33:45','124.207.109.234','1','','0','43642');");
E_D("replace into `new_enewslog` values('103','admin','2017-02-17 10:17:11','124.207.109.234','1','','0','46638');");
E_D("replace into `new_enewslog` values('104','admin','2017-02-17 14:14:59','124.207.109.234','1','','0','45400');");
E_D("replace into `new_enewslog` values('105','admin','2017-02-17 14:22:39','124.207.109.234','1','','0','62765');");
E_D("replace into `new_enewslog` values('106','admin','2017-02-17 14:23:43','124.207.109.234','1','','0','62873');");
E_D("replace into `new_enewslog` values('107','admin','2017-02-17 15:21:56','124.207.109.234','0','','1','43822');");
E_D("replace into `new_enewslog` values('108','admin','2017-02-17 15:22:03','124.207.109.234','1','','0','43822');");
E_D("replace into `new_enewslog` values('109','admin','2017-02-17 16:31:03','124.207.109.234','1','','0','53620');");
E_D("replace into `new_enewslog` values('110','admin','2017-03-28 10:44:18','124.207.109.234','1','','0','36108');");
E_D("replace into `new_enewslog` values('111','lvzhongqi','2017-03-28 10:51:57','124.207.109.234','1','','0','52912');");
E_D("replace into `new_enewslog` values('112','lvzhongqi','2017-03-28 14:33:33','124.207.109.234','1','','0','55696');");
E_D("replace into `new_enewslog` values('113','admin','2017-03-28 17:37:55','124.207.109.234','1','','0','38910');");
E_D("replace into `new_enewslog` values('114','admin','2017-03-28 18:03:50','124.207.109.234','1','','0','39282');");
E_D("replace into `new_enewslog` values('115','admin','2017-03-29 09:43:19','124.207.109.234','0','','1','42274');");
E_D("replace into `new_enewslog` values('116','admin','2017-03-29 09:43:27','124.207.109.234','1','','0','42274');");
E_D("replace into `new_enewslog` values('117','lipan','2017-03-29 09:44:46','124.207.109.234','1','','0','42274');");
E_D("replace into `new_enewslog` values('118','lipan','2017-03-30 09:40:32','124.207.109.234','0','','0','54632');");
E_D("replace into `new_enewslog` values('119','lipan','2017-03-30 09:40:48','124.207.109.234','1','','0','54632');");
E_D("replace into `new_enewslog` values('120','lvzhongqi','2017-03-31 16:23:32','124.207.109.234','1','','0','52245');");
E_D("replace into `new_enewslog` values('121','lipan','2017-03-31 16:27:16','124.207.109.234','1','','0','59078');");
E_D("replace into `new_enewslog` values('122','lipan','2017-03-31 16:58:52','124.207.109.234','1','','0','60506');");
E_D("replace into `new_enewslog` values('123','lvzhongqi','2017-04-01 10:18:26','124.207.109.234','1','','0','50273');");
E_D("replace into `new_enewslog` values('124','lvzhongqi','2017-04-01 11:11:24','124.207.109.234','1','','0','53245');");
E_D("replace into `new_enewslog` values('125','lipan','2017-04-05 10:27:08','124.207.109.234','1','','0','55066');");
E_D("replace into `new_enewslog` values('126','lipan','2017-04-06 09:50:11','124.207.109.234','1','','0','33670');");
E_D("replace into `new_enewslog` values('127','lipan','2017-04-06 11:52:00','124.207.109.234','0','','0','35832');");
E_D("replace into `new_enewslog` values('128','lipan','2017-04-06 11:52:11','124.207.109.234','0','','0','35832');");
E_D("replace into `new_enewslog` values('129','lipan','2017-04-06 11:52:23','124.207.109.234','0','','0','35832');");
E_D("replace into `new_enewslog` values('130','lipan','2017-04-06 11:52:44','124.207.109.234','1','','0','35832');");
E_D("replace into `new_enewslog` values('131','lipan','2017-04-06 14:14:00','124.207.109.234','1','','0','36622');");
E_D("replace into `new_enewslog` values('132','lipan','2017-04-07 15:43:06','124.207.109.234','1','','0','45180');");
E_D("replace into `new_enewslog` values('133','lipan','2017-04-10 10:50:50','124.207.109.234','1','','0','53934');");
E_D("replace into `new_enewslog` values('134','lipan','2017-04-10 15:40:54','124.207.109.234','1','','0','56648');");
E_D("replace into `new_enewslog` values('135','lipan','2017-04-10 16:13:54','124.207.109.234','0','','0','56896');");
E_D("replace into `new_enewslog` values('136','lipan','2017-04-10 16:14:11','124.207.109.234','1','','0','56896');");
E_D("replace into `new_enewslog` values('137','lipan','2017-04-10 17:12:08','124.207.109.234','1','','0','58372');");
E_D("replace into `new_enewslog` values('138','lipan','2017-04-11 10:14:55','124.207.109.234','1','','0','60654');");
E_D("replace into `new_enewslog` values('139','lipan','2017-04-11 14:07:16','124.207.109.234','1','','0','33456');");
E_D("replace into `new_enewslog` values('140','lipan','2017-04-11 15:19:51','124.207.109.234','1','','0','34098');");
E_D("replace into `new_enewslog` values('141','lipan','2017-04-11 15:40:07','124.207.109.234','1','','0','34494');");
E_D("replace into `new_enewslog` values('142','leepan','2017-04-13 16:10:04','124.207.109.234','0','','0','46688');");
E_D("replace into `new_enewslog` values('143','lipan','2017-04-13 16:10:31','124.207.109.234','1','','0','46688');");
E_D("replace into `new_enewslog` values('144','lipan','2017-04-17 10:47:22','124.207.109.234','1','','0','33508');");
E_D("replace into `new_enewslog` values('145','lipan','2017-04-17 11:13:43','124.207.109.234','1','','0','34076');");
E_D("replace into `new_enewslog` values('146','lipan','2017-04-17 11:21:55','124.207.109.234','0','','1','53397');");
E_D("replace into `new_enewslog` values('147','lipan','2017-04-17 11:22:10','124.207.109.234','1','','0','53397');");
E_D("replace into `new_enewslog` values('148','lipan','2017-04-17 11:31:20','124.207.109.234','1','','0','34454');");
E_D("replace into `new_enewslog` values('149','lipan','2017-04-17 16:26:22','124.207.109.234','1','','0','37872');");
E_D("replace into `new_enewslog` values('150','lipan','2017-04-17 17:26:57','124.207.109.234','1','','0','39702');");
E_D("replace into `new_enewslog` values('151','lipan','2017-04-18 09:40:45','124.207.109.234','0','','0','43256');");
E_D("replace into `new_enewslog` values('152','lipan','2017-04-18 09:41:26','124.207.109.234','1','','0','43256');");
E_D("replace into `new_enewslog` values('153','lipan','2017-04-19 10:00:14','124.207.109.234','1','','0','56044');");
E_D("replace into `new_enewslog` values('154','lipan','2017-04-19 10:05:49','124.207.109.234','1','','0','56092');");
E_D("replace into `new_enewslog` values('155','lipan','2017-04-19 10:19:11','124.207.109.234','1','','0','59650');");
E_D("replace into `new_enewslog` values('156','lipan','2017-04-19 10:23:37','124.207.109.234','1','','0','34162');");
E_D("replace into `new_enewslog` values('157','lipan','2017-04-19 11:12:40','124.207.109.234','1','','0','40904');");
E_D("replace into `new_enewslog` values('158','lipan','2017-04-24 10:30:27','124.207.109.234','1','','0','40022');");

@include("../../inc/footer.php");
?>