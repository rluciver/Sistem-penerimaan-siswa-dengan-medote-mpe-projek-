/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.21-MariaDB : Database - db_biayasiswa
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_biayasiswa` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_biayasiswa`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','ks') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`username`,`password`,`level`) values 
('admin','admin','admin'),
('ks','ks','ks');

/*Table structure for table `countries` */

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(100) NOT NULL DEFAULT '',
  `country_code` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`country_id`),
  UNIQUE KEY `code` (`country_code`)
) ENGINE=InnoDB AUTO_INCREMENT=240 DEFAULT CHARSET=utf8;

/*Data for the table `countries` */

insert  into `countries`(`country_id`,`country_name`,`country_code`) values 
(1,'Aruba','ABW'),
(2,'Afghanistan','AFG'),
(3,'Angola','AGO'),
(4,'Anguilla','AIA'),
(5,'Albania','ALB'),
(6,'Andorra','AND'),
(7,'Netherlands Antilles','ANT'),
(8,'United Arab Emirates','ARE'),
(9,'Argentina','ARG'),
(10,'Armenia','ARM'),
(11,'American Samoa','ASM'),
(12,'Antarctica','ATA'),
(13,'French Southern territories','ATF'),
(14,'Antigua and Barbuda','ATG'),
(15,'Australia','AUS'),
(16,'Austria','AUT'),
(17,'Azerbaijan','AZE'),
(18,'Burundi','BDI'),
(19,'Belgium','BEL'),
(20,'Benin','BEN'),
(21,'Burkina Faso','BFA'),
(22,'Bangladesh','BGD'),
(23,'Bulgaria','BGR'),
(24,'Bahrain','BHR'),
(25,'Bahamas','BHS'),
(26,'Bosnia and Herzegovina','BIH'),
(27,'Belarus','BLR'),
(28,'Belize','BLZ'),
(29,'Bermuda','bermuda'),
(30,'Bolivia','BOL'),
(31,'Brazil','BRA'),
(32,'Barbados','BRB'),
(33,'Brunei','BRN'),
(34,'Bhutan','BTN'),
(35,'Bouvet Island','BVT'),
(36,'Botswana','botswana'),
(37,'Central African Republic','CAF'),
(38,'Canada','CAN'),
(39,'Cocos (Keeling) Islands','CCK'),
(40,'Switzerland','CHE'),
(41,'Chile','CHL'),
(42,'China','CHN'),
(43,'CÃ´te d?Ivoire','CIV'),
(44,'Cameroon','CMR'),
(45,'Congo, DRO','COD'),
(46,'Congo','COG'),
(47,'Cook Islands','COK'),
(48,'Colombia','COL'),
(49,'Comoros','COM'),
(50,'Cape Verde','CPV'),
(51,'Costa Rica','CRI'),
(52,'Cuba','CUB'),
(53,'Christmas Island','CXR'),
(54,'Cayman Islands','CYM'),
(55,'Cyprus','CYP'),
(56,'Czech Republic','CZE'),
(57,'Germany','DEU'),
(58,'Djibouti','DJI'),
(59,'Dominica','DMA'),
(60,'Denmark','DNK'),
(61,'Dominican Republic','DOM'),
(62,'Algeria','DZA'),
(63,'Ecuador','ECU'),
(64,'Egypt','EGY'),
(65,'Eritrea','ERI'),
(66,'Western Sahara','ESH'),
(67,'Spain','ESP'),
(68,'Estonia','EST'),
(69,'Ethiopia','ETH'),
(70,'Finland','FIN'),
(71,'Fiji Islands','FJI'),
(72,'Falkland Islands','FLK'),
(73,'France','FRA'),
(74,'Faroe Islands','FRO'),
(75,'Micronesia, Federated States of','FSM'),
(76,'Gabon','GAB'),
(77,'United Kingdom','GBR'),
(78,'Georgia','GEO'),
(79,'Ghana','GHA'),
(80,'Gibraltar','GIB'),
(81,'Guinea','GIN'),
(82,'Guadeloupe','GLP'),
(83,'Gambia','GMB'),
(84,'Guinea-Bissau','GNB'),
(85,'Equatorial Guinea','GNQ'),
(86,'Greece','GRC'),
(87,'Grenada','GRD'),
(88,'Greenland','GRL'),
(89,'Guatemala','GTM'),
(90,'French Guiana','GUF'),
(91,'Guam','GUM'),
(92,'Guyana','GUY'),
(93,'Hong Kong','HKG'),
(94,'Heard Island and McDonald Islands','HMD'),
(95,'Honduras','HND'),
(96,'Croatia','HRV'),
(97,'Haiti','HTI'),
(98,'Hungary','HUN'),
(99,'Indonesia','IDN'),
(100,'India','IND'),
(101,'British Indian Ocean Territory','IOT'),
(102,'Ireland','IRL'),
(103,'Iran','IRN'),
(104,'Iraq','IRQ'),
(105,'Iceland','ISL'),
(106,'Israel','ISR'),
(107,'Italy','ITA'),
(108,'Jamaica','JAM'),
(109,'Jordan','JOR'),
(110,'Japan','JPN'),
(111,'Kazakstan','KAZ'),
(112,'Kenya','KEN'),
(113,'Kyrgyzstan','KGZ'),
(114,'Cambodia','KHM'),
(115,'Kiribati','KIR'),
(116,'Saint Kitts and Nevis','KNA'),
(117,'South Korea','KOR'),
(118,'Kuwait','KWT'),
(119,'Laos','LAO'),
(120,'Lebanon','LBN'),
(121,'Liberia','LBR'),
(122,'Libyan Arab Jamahiriya','LBY'),
(123,'Saint Lucia','LCA'),
(124,'Liechtenstein','LIE'),
(125,'Sri Lanka','LKA'),
(126,'Lesotho','LSO'),
(127,'Lithuania','LTU'),
(128,'Luxembourg','LUX'),
(129,'Latvia','LVA'),
(130,'Macao','MAC'),
(131,'Morocco','MAR'),
(132,'Monaco','MCO'),
(133,'Moldova','MDA'),
(134,'Madagascar','MDG'),
(135,'Maldives','MDV'),
(136,'Mexico','MEX'),
(137,'Marshall Islands','MHL'),
(138,'Macedonia','MKD'),
(139,'Mali','MLI'),
(140,'Malta','MLT'),
(141,'Myanmar','MMR'),
(142,'Mongolia','MNG'),
(143,'Northern Mariana Islands','MNP'),
(144,'Mozambique','MOZ'),
(145,'Mauritania','MRT'),
(146,'Montserrat','MSR'),
(147,'Martinique','MTQ'),
(148,'Mauritius','MUS'),
(149,'Malawi','MWI'),
(150,'Malaysia','MYS'),
(151,'Mayotte','MYT'),
(152,'Namibia','NAM'),
(153,'New Caledonia','NCL'),
(154,'Niger','NER'),
(155,'Norfolk Island','NFK'),
(156,'Nigeria','NGA'),
(157,'Nicaragua','NIC'),
(158,'Niue','NIU'),
(159,'Netherlands','NLD'),
(160,'Norway','NOR'),
(161,'Nepal','NPL'),
(162,'Nauru','NRU'),
(163,'New Zealand','NZL'),
(164,'Oman','OMN'),
(165,'Pakistan','PAK'),
(166,'Panama','PAN'),
(167,'Pitcairn','PCN'),
(168,'Peru','PER'),
(169,'Philippines','PHL'),
(170,'Palau','PLW'),
(171,'Papua New Guinea','PNG'),
(172,'Poland','POL'),
(173,'Puerto Rico','PRI'),
(174,'North Korea','PRK'),
(175,'Portugal','PRT'),
(176,'Paraguay','PRY'),
(177,'Palestine','PSE'),
(178,'French Polynesia','PYF'),
(179,'Qatar','QAT'),
(180,'RÃ©union','REU'),
(181,'Romania','ROM'),
(182,'Russian Federation','RUS'),
(183,'Rwanda','RWA'),
(184,'Saudi Arabia','SAU'),
(185,'Sudan','SDN'),
(186,'Senegal','SEN'),
(187,'Singapore','SGP'),
(188,'South Georgia and the S S I','SGS'),
(189,'Saint Helena','SHN'),
(190,'Svalbard and Jan Mayen','SJM'),
(191,'Solomon Islands','SLB'),
(192,'Sierra Leone','SLE'),
(193,'El Salvador','SLV'),
(194,'San Marino','SMR'),
(195,'Somalia','SOM'),
(196,'Saint Pierre and Miquelon','SPM'),
(197,'Sao Tome and Principe','STP'),
(198,'Suriname','SUR'),
(199,'Slovakia','SVK'),
(200,'Slovenia','SVN'),
(201,'Sweden','SWE'),
(202,'Swaziland','SWZ'),
(203,'Seychelles','SYC'),
(204,'Syria','SYR'),
(205,'Turks and Caicos Islands','TCA'),
(206,'Chad','TCD'),
(207,'Togo','TGO'),
(208,'Thailand','THA'),
(209,'Tajikistan','TJK'),
(210,'Tokelau','TKL'),
(211,'Turkmenistan','TKM'),
(212,'East Timor','TMP'),
(213,'Tonga','TON'),
(214,'Trinidad and Tobago','TTO'),
(215,'Tunisia','TUN'),
(216,'Turkey','TUR'),
(217,'Tuvalu','TUV'),
(218,'Taiwan','TWN'),
(219,'Tanzania','TZA'),
(220,'Uganda','UGA'),
(221,'Ukraine','UKR'),
(222,'United States Minor Outlying I','UMI'),
(223,'Uruguay','URY'),
(224,'United States','USA'),
(225,'Uzbekistan','UZB'),
(226,'Holy See (Vatican City State)','VAT'),
(227,'Saint Vincent and the Grenadines','VCT'),
(228,'Venezuela','VEN'),
(229,'Virgin Islands, British','VGB'),
(230,'Virgin Islands, U.S.','VIR'),
(231,'Vietnam','VNM'),
(232,'Vanuatu','VUT'),
(233,'Wallis and Futuna','WLF'),
(234,'Samoa','WSM'),
(235,'Yemen','YEM'),
(236,'Yugoslavia','YUG'),
(237,'South Africa','ZAF'),
(238,'Zambia','ZMB'),
(239,'Zimbabwe','ZWE');

/*Table structure for table `tbl_bobot` */

DROP TABLE IF EXISTS `tbl_bobot`;

CREATE TABLE `tbl_bobot` (
  `id_bobot` int(11) NOT NULL,
  `prestasi` int(1) NOT NULL,
  `kedisiplinan` int(1) NOT NULL,
  `kehadiran` int(1) NOT NULL,
  `stbobot` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_bobot` */

insert  into `tbl_bobot`(`id_bobot`,`prestasi`,`kedisiplinan`,`kehadiran`,`stbobot`) values 
(0,3,3,3,60);

/*Table structure for table `tbl_datasiswa` */

DROP TABLE IF EXISTS `tbl_datasiswa`;

CREATE TABLE `tbl_datasiswa` (
  `nis` int(15) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `kelas` char(10) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_orang_tua` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_datasiswa` */

insert  into `tbl_datasiswa`(`nis`,`nama_siswa`,`jenis_kelamin`,`kelas`,`tempat_lahir`,`tanggal_lahir`,`nama_orang_tua`) values 
(12,'sakl','L','klasl','klalk','2017-11-06','l;as'),
(129210,'jjkasjsak','L','slakaskl','lasklasl','2017-11-05','salksakas'),
(15312489,'ega rinika','L','tkj1','PALAS','2017-04-30','KEPO'),
(15312491,'rahmat hidayattullah','L','galer','sidomulyo','2017-11-05','kepo');

/*Table structure for table `tbl_hasil` */

DROP TABLE IF EXISTS `tbl_hasil`;

CREATE TABLE `tbl_hasil` (
  `nama_siswa` varchar(50) NOT NULL,
  `prestasi` varchar(25) NOT NULL,
  `nilai_prestasi` int(1) NOT NULL,
  `disiplin` varchar(25) NOT NULL,
  `nilai_disiplin` int(1) NOT NULL,
  `absensi` varchar(25) NOT NULL,
  `nilai_absensi` int(1) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `nilai_mpe` int(3) NOT NULL,
  `id_prestasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_hasil` */

insert  into `tbl_hasil`(`nama_siswa`,`prestasi`,`nilai_prestasi`,`disiplin`,`nilai_disiplin`,`absensi`,`nilai_absensi`,`keterangan`,`nilai_mpe`,`id_prestasi`) values 
('ega','',3,'',2,'',3,'MENDAPAT BIAYA SISWA',62,0),
('ega rinika','',3,'',3,'',3,'MENDAPAT BIAYA SISWA',81,0);

/*Table structure for table `tbl_loginks` */

DROP TABLE IF EXISTS `tbl_loginks`;

CREATE TABLE `tbl_loginks` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_loginks` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
