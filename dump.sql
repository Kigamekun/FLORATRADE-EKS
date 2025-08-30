# ************************************************************
# Sequel Ace SQL dump
# Version 20062
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 8.4.4)
# Database: plantsasri
# Generation Time: 2025-08-30 14:19:23 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table address_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `address_users`;

CREATE TABLE `address_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `address_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `address_users` WRITE;
/*!40000 ALTER TABLE `address_users` DISABLE KEYS */;

INSERT INTO `address_users` (`id`, `user_id`, `address`, `created_at`, `updated_at`)
VALUES
	(2,52,'Jl. Boulevard Grand Depok City, Jatimulya, Kec. Cilodong, Kota Depok, Jawa Barat 16413',NULL,NULL);

/*!40000 ALTER TABLE `address_users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table banners
# ------------------------------------------------------------

DROP TABLE IF EXISTS `banners`;

CREATE TABLE `banners` (
  `id` int NOT NULL AUTO_INCREMENT,
  `gambar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;

INSERT INTO `banners` (`id`, `gambar`, `created_at`, `updated_at`)
VALUES
	(3,'1653637996-Banner.png',NULL,NULL),
	(4,'1653637996-Banner.png',NULL,NULL),
	(5,'1653637996-Banner.png',NULL,NULL);

/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table base_plants
# ------------------------------------------------------------

DROP TABLE IF EXISTS `base_plants`;

CREATE TABLE `base_plants` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name_indonesia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_latin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `base_plants` WRITE;
/*!40000 ALTER TABLE `base_plants` DISABLE KEYS */;

INSERT INTO `base_plants` (`id`, `name_indonesia`, `name_latin`, `price`, `created_at`, `updated_at`)
VALUES
	(2,'Akalipa','Acalypha spp',5,'2022-01-10 13:03:09',NULL),
	(3,'Agave','Agave spp',5,'2022-01-10 13:03:09',NULL),
	(4,'Alamanda','Allamanda spp',5,'2022-01-10 13:03:09',NULL),
	(5,'Alpinia','Alpinia spp',5,'2022-01-10 13:03:09',NULL),
	(6,'Alstromeria','Alstroemeria spp',5,'2022-01-10 13:03:09',NULL),
	(7,'Anggrek','Orchidaceae',5,'2022-01-10 13:03:09',NULL),
	(8,'Anyelir','Dianthus spp',5,'2022-01-10 13:03:09',NULL),
	(9,'Sri Rejeki','Aglaonema spp',5,'2022-01-10 13:03:09',NULL),
	(10,'Amarantus','Amaranthus spp',5,'2022-01-10 13:03:09',NULL),
	(11,'Ascocenda','Ascocenda spp',5,'2022-01-10 13:03:09',NULL),
	(12,'Bahagia','Dieffenbachia spp',5,'2022-01-10 13:03:09',NULL),
	(13,'Bambu hias','Chamaedorea spp',5,'2022-01-10 13:03:09',NULL),
	(14,'Bambu kuning','Phyllostachys aurea',5,'2022-01-10 13:03:09',NULL),
	(15,'Beringin','Ficus spp',5,'2022-01-10 13:03:09',NULL),
	(16,'Amarilis','Amaryllis spp',5,'2022-01-10 13:03:09',NULL),
	(17,'Banga bokor','Hydrangea sp  ',5,'2022-01-10 13:03:09',NULL),
	(18,'Bunga kertas','Bougainvillea spp',5,'2022-01-10 13:03:09',NULL),
	(19,'Bunga matahari','Helianthus annuus',5,'2022-01-10 13:03:09',NULL),
	(20,'Bunga pisang','Musa uranoscopus',5,'2022-01-10 13:03:09',NULL),
	(21,'Melati air','Echinodorus sp',5,'2022-01-10 13:03:09',NULL),
	(22,'Bunga pukul empat','Mirabilis jalapa',5,'2022-01-10 13:03:09',NULL),
	(23,'Bunga tasbih','Canna sp',5,'2022-01-10 13:03:09',NULL),
	(24,'Calistemon','Callistemon spp',5,'2022-01-10 13:03:09',NULL),
	(25,'Bambu air/ lidi air','Equisetum hyemale',5,'2022-01-10 13:03:09',NULL),
	(26,'Celosia','Celosia spp',5,'2022-01-10 13:03:09',NULL),
	(27,'Bakung rimba','Hanguana malayana',5,'2022-01-10 13:03:09',NULL),
	(28,'Cemara irian','Cupressus spp',5,'2022-01-10 13:03:09',NULL),
	(29,'Limut','Hydrilla verticillata',5,'2022-01-10 13:03:09',NULL),
	(30,'Cemara laut','Casuarina spp',5,'2022-01-10 13:03:09',NULL),
	(31,'Cemara susun','Araucaria spp',5,'2022-01-10 13:03:09',NULL),
	(32,'Ciplukan','Physalis peruviana',5,'2022-01-10 13:03:09',NULL),
	(33,'Crosandra','Crossandra spp',5,'2022-01-10 13:03:09',NULL),
	(34,'Kaktus','Cactaceae',5,'2022-01-10 13:03:09',NULL),
	(35,'Iris air','Iris versicolor',5,'2022-01-10 13:03:09',NULL),
	(36,'Lotus/ seroja','Nelumbo nucifera',5,'2022-01-10 13:03:09',NULL),
	(37,'Cyperus','Cyperus spp',5,'2022-01-10 13:03:09',NULL),
	(38,'Cocor bebek','Kalanchoe spp',5,'2022-01-10 13:03:09',NULL),
	(39,'Hanjuang/Andong','Cordyline spp',5,'2022-01-10 13:03:09',NULL),
	(40,'Daun beludru','Episcia spp',5,'2022-01-10 13:03:09',NULL),
	(41,'Parrotfeather','Myriophyllum aquaticum',5,'2022-01-10 13:03:09',NULL),
	(42,'Sirih Gading','Philodendron spp',5,'2022-01-10 13:03:09',NULL),
	(43,'Pisang brazil','Typhonodorum lindZeyanum',5,'2022-01-10 13:03:09',NULL),
	(44,'Dracaena','Dracaena spp',5,'2022-01-10 13:03:09',NULL),
	(45,'Tape grass','Vallisneria spiralis',5,'2022-01-10 13:03:09',NULL),
	(46,'Fitonia','Fittonia spp',5,'2022-01-10 13:03:09',NULL),
	(47,'Bunga Lipstik','Aeschynanthus Radicans Jack',5,'2022-01-10 13:03:09',NULL),
	(48,'Gipsophila','Gypsophila spp',5,'2022-01-10 13:03:09',NULL),
	(49,'Air Mata Pengantin','Antigonon Leptopus Hook. & Arne',5,'2022-01-10 13:03:09',NULL),
	(50,'Gladiol','Gladiolus spp',5,'2022-01-10 13:03:09',NULL),
	(51,'Hoya','Hoya spp',5,'2022-01-10 13:03:09',NULL),
	(52,'Asparagus Sangga Langit','Asparagus Setaceus (Kunth) Jessop',5,'2022-01-10 13:03:09',NULL),
	(53,'Herbras','Gerbera spp',5,'2022-01-10 13:03:09',NULL),
	(54,'Kongea','Congea Tomentosa Roxb.',5,'2022-01-10 13:03:09',NULL),
	(55,'Bunga Wijayakusuma','Ephipillum Anguliger (Lem.) G. Don',5,'2022-01-10 13:03:09',NULL),
	(56,'Dollar-dollaran','Ficus Repens Roxb. Ex Sm.',5,'2022-01-10 13:03:09',NULL),
	(57,'Ranggis','Lonicera Japonica',5,'2022-01-10 13:03:09',NULL),
	(58,'Bunga Terompet','Mandevilla Sanderi sp',5,'2022-01-10 13:03:09',NULL),
	(59,'Stephanut Ungu','Mansoa Hymenaea',5,'2022-01-10 13:03:09',NULL),
	(60,'Ivy','Hedera helix',5,'2022-01-10 13:03:09',NULL),
	(61,'Janggut musa','Cissus discolor',5,'2022-01-10 13:03:09',NULL),
	(62,'Jawer kotok','Coleus scutellarioides',5,'2022-01-10 13:03:09',NULL),
	(63,'Kala lili','Zanthedeschicia spp ',5,'2022-01-10 13:03:09',NULL),
	(64,'Kamboja jepang','Adenium spp',5,'2022-01-10 13:03:09',NULL),
	(65,'Pandorea','Pandorea Jasminoides',5,'2022-01-10 13:03:09',NULL),
	(66,'Kastuba','Euphorbia pulcherima',5,'2022-01-10 13:03:09',NULL),
	(67,'Passiflora','Passiflora sp',5,'2022-01-10 13:03:09',NULL),
	(68,'Kembang Api','Pyrostegia Venusta',5,'2022-01-10 13:03:09',NULL),
	(69,'Udani, Bidani, Ceguk','Quisqualis Indica L',5,'2022-01-10 13:03:09',NULL),
	(70,'Kuku Macan/Jade Flower','Strongyłodon Macrobotrys',5,'2022-01-10 13:03:09',NULL),
	(71,'Tillandsia','Tillandsia sp',5,'2022-01-10 13:03:09',NULL),
	(72,'Kecombrang','Zingiber officinela',5,'2022-01-10 13:03:09',NULL),
	(73,'Tanaman Jade','Crassula sp',5,'2022-01-10 13:03:09',NULL),
	(74,'Kedondong laup','Nothopanax fruticosum',5,'2022-01-10 13:03:09',NULL),
	(75,'Sukulen','Echeveria sp',5,'2022-01-10 13:03:09',NULL),
	(76,'Bunga kancing','Gomphrena globosa',5,'2022-01-10 13:03:09',NULL),
	(77,'Mahkota duri','Euphorbia milii',5,'2022-01-10 13:03:09',NULL),
	(78,'Haworthia','Haworthia sp',5,'2022-01-10 13:03:09',NULL),
	(79,'Bunga nona makan sirih','Clerodendron spp',5,'2022-01-10 13:03:09',NULL),
	(80,'Portulacaria','Portulacaria sp',5,'2022-01-10 13:03:09',NULL),
	(81,'Kembang sepatu','Hibiscus spp',5,'2022-01-10 13:03:09',NULL),
	(82,'Tradescantia','Tradescantia sp',5,'2022-01-10 13:03:09',NULL),
	(83,'Kembang sungsang','Gloriosa superba L.',5,'2022-01-10 13:03:09',NULL),
	(84,'Kembang telang','Clitoria ternatea L.',5,'2022-01-10 13:03:09',NULL),
	(85,'Tem belekan / Marigold','Tagetes spp ',5,'2022-01-10 13:03:09',NULL),
	(86,'Kolojengking','Aranthera spp',5,'2022-01-10 13:03:09',NULL),
	(87,'Kuping gajah','Anthurium spp',5,'2022-01-10 13:03:09',NULL),
	(88,'Lantana','Lantana camara',5,'2022-01-10 13:03:09',NULL),
	(89,'Tanaman Zebra','Aphelandra Squarrosa',5,'2022-01-10 13:03:09',NULL),
	(90,'Lilin emas','Pachystachys lutea',5,'2022-01-10 13:03:09',NULL),
	(91,'Calatea','Calathea sp',5,'2022-01-10 13:03:09',NULL),
	(92,'Mawar','Rosa spp',5,'2022-01-10 13:03:09',NULL),
	(93,'Puring','Codiaeum Variegatum',5,'2022-01-10 13:03:09',NULL),
	(94,'Melati','Jasminum spp',5,'2022-01-10 13:03:09',NULL),
	(95,'Sambang Darah','Exocaria Cochinencis',5,'2022-01-10 13:03:09',NULL),
	(96,'Anting-anting','Fuchsia speciosa',5,'2022-01-10 13:03:09',NULL),
	(97,'Leather leaf','Leather leaf',5,'2022-01-10 13:03:09',NULL),
	(98,'Lomandra','Lomandra sp',5,'2022-01-10 13:03:09',NULL),
	(99,'Aralia Kuning','Osmoxilon Liniare',5,'2022-01-10 13:03:09',NULL),
	(100,'Mirten','Malphigia spp',5,'2022-01-10 13:03:09',NULL),
	(101,'Pachira (pohon uang)','Pachira aquatica',5,'2022-01-10 13:03:09',NULL),
	(102,'Patah Tulang','Pedilanthus Tithymaloides',5,'2022-01-10 13:03:09',NULL),
	(103,'Monstera','Monstera spp',5,'2022-01-10 13:03:09',NULL),
	(104,'Pilea','Pilea peperomioides',5,'2022-01-10 13:03:09',NULL),
	(105,'Nanas-nanasan','Bromelia spp.',5,'2022-01-10 13:03:09',NULL),
	(106,'Pulmonaria','Pulmonaria sp',5,'2022-01-10 13:03:09',NULL),
	(107,'Oxalys','Oxalis spp',5,'2022-01-10 13:03:09',NULL),
	(108,'Kamboja','Plumeria spp',5,'2022-01-10 13:03:09',NULL),
	(109,'Pacar air','Impatiens spp',5,'2022-01-10 13:03:09',NULL),
	(110,'Glodokan Tiang','Polyalthia longifolia',5,'2022-01-10 13:03:09',NULL),
	(111,'Pacing','Costus spp',5,'2022-01-10 13:03:09',NULL),
	(112,'Air mancur','Russelia equisetifonnis',5,'2022-01-10 13:03:09',NULL),
	(113,'Pakis haji','Cycas revoluta',5,'2022-01-10 13:03:09',NULL),
	(114,'Paku-pakuan','Nephrolepis spp',5,'2022-01-10 13:03:09',NULL),
	(115,'Palm j epang','Ptychosperrna macarthurii',5,'2022-01-10 13:03:09',NULL),
	(116,'Palm kuning','Chrysalidocarpus lutescens',5,'2022-01-10 13:03:09',NULL),
	(117,'Palm merah','Cyrtostachys lakka',5,'2022-01-10 13:03:09',NULL),
	(118,'Sage','Salvia Officinałis',5,'2022-01-10 13:03:09',NULL),
	(119,'Walisongo','Schefflera Arboricola',5,'2022-01-10 13:03:09',NULL),
	(120,'Pucuk Merah','Syzygium oleana',5,'2022-01-10 13:03:09',NULL),
	(121,'Tabebuya','Tabebuia spp',5,'2022-01-10 13:03:09',NULL),
	(122,'Taberna','Tabemaemontana Corimbosa',5,'2022-01-10 13:03:09',NULL),
	(123,'Anting Putri Kuning','Wrightia Religiosa',5,'2022-01-10 13:03:09',NULL),
	(124,'Tumbak Raja','Yucca sp',5,'2022-01-10 13:03:09',NULL),
	(125,'Zamia','Zamia Furfuraceae',5,'2022-01-10 13:03:09',NULL),
	(126,'Mukgenia','Mukgenia sp',5,'2022-01-10 13:03:09',NULL),
	(127,'Palm waregu','Rhapis excelsa',5,'2022-01-10 13:03:09',NULL),
	(128,'Echinacea','Echinacea',5,'2022-01-10 13:03:09',NULL),
	(129,'Pandan kuning','Pandanus pygmaeus',5,'2022-01-10 13:03:09',NULL),
	(130,'Agaphantus','Agapanthus sp',5,'2022-01-10 13:03:09',NULL),
	(131,'Pentas','Pentas lanceolata',5,'2022-01-10 13:03:09',NULL),
	(132,'Ctenanthe','Ctenanthe sp',5,'2022-01-10 13:03:09',NULL),
	(133,'Peperomia','Peperomia spp',5,'2022-01-10 13:03:09',NULL),
	(134,'Tacca','Tacca sp',5,'2022-01-10 13:03:09',NULL),
	(135,'Petrea','Petrea spp',5,'2022-01-10 13:03:09',NULL),
	(136,'Aridarum','Aridarum sp',5,'2022-01-10 13:03:09',NULL),
	(137,'Pinus','Pinus merkusii',5,'2022-01-10 13:03:09',NULL),
	(138,'Otellia','Ottelia sp',5,'2022-01-10 13:03:09',NULL),
	(139,'Burung Surga','Sterilitza spp',5,'2022-01-10 13:03:09',NULL),
	(140,'Eriocaulon','Eriocaulon sp',5,'2022-01-10 13:03:09',NULL),
	(141,'Pisang-pisangan','Heliconia spp',5,'2022-01-10 13:03:09',NULL),
	(142,'Pisang hias','Ravenala madagascariensis',5,'2022-01-10 13:03:09',NULL),
	(143,'Pohon dollar','Eucalyptus gunnii',5,'2022-01-10 13:03:09',NULL),
	(144,'Ponix','Phoenix roebelenii',5,'2022-01-10 13:03:09',NULL),
	(145,'Pteris','Pteris spp',5,'2022-01-10 13:03:09',NULL),
	(146,'Rushes','Juncus sp',5,'2022-01-10 13:03:09',NULL),
	(147,'Pakis-pakisan','Polypodiaceae',5,'2022-01-10 13:03:09',NULL),
	(148,'Cryptocoryne','Cryptocoryne sp',5,'2022-01-10 13:03:09',NULL),
	(149,'Pedang-pedangan','Sansevieria spp',5,'2022-01-10 13:03:09',NULL),
	(150,'Homalomena','Homalomena sp',5,'2022-01-10 13:03:09',NULL),
	(151,'Pule pandak','Plumbago spp',5,'2022-01-10 13:03:09',NULL),
	(152,'Sonerilla','Sonerila sp',5,'2022-01-10 13:03:09',NULL),
	(153,'Polyscias','Polyscias spp  ',5,'2022-01-10 13:03:09',NULL),
	(154,'Senggani','Melastoma sp',5,'2022-01-10 13:03:09',NULL),
	(155,'Rose bombay','Portulaca grandifiora',5,'2022-01-10 13:03:09',NULL),
	(156,'Gardenia','Gardenia sp  ',5,'2022-01-10 13:03:09',NULL),
	(157,'Murdania','Murdannia sp',5,'2022-01-10 13:03:09',NULL),
	(158,'Rumput embun','Polytrias amaura Hacky',5,'2022-01-10 13:03:09',NULL),
	(159,'Flamboyan','Delonix sp',5,'2022-01-10 13:03:09',NULL),
	(160,'Rumput golf','Poa pratensis',5,'2022-01-10 13:03:09',NULL),
	(161,'Rumput bermuda','Panicum dactylon',5,'2022-01-10 13:03:09',NULL),
	(162,'Bauhinia','Bauhinia sp',5,'2022-01-10 13:03:09',NULL),
	(163,'Hosta','Hosta sp',5,'2022-01-10 13:03:09',NULL),
	(164,'Rumput Hutan Jepang','Hakonechloa sp',5,'2022-01-10 13:03:09',NULL),
	(165,'Mischanthus','Mischanthus sp',5,'2022-01-10 13:03:09',NULL),
	(166,'Arecaceae','Arecaceae',5,'2022-01-10 13:03:09',NULL),
	(167,'Sage merah','Salvia splendens',5,'2022-01-10 13:03:09',NULL),
	(168,'Violet bertanduk','Viola cornuta',5,'2022-01-10 13:03:09',NULL),
	(169,'Petunia','Petunia sp.',5,'2022-01-10 13:03:09',NULL),
	(170,'Rumput jarum','Andropogon aciculatus Retz',5,'2022-01-10 13:03:09',NULL),
	(171,'Pansy','Viola wittrockiana',5,'2022-01-10 13:03:09',NULL),
	(172,'Snappy','Antirrhinum snappy',5,'2022-01-10 13:03:09',NULL),
	(173,'Rumput manila','Zoysia matrella Merr.',5,'2022-01-10 13:03:09',NULL),
	(174,'Floss flower','Ageratum houstonianum',5,'2022-01-10 13:03:09',NULL),
	(175,'Rumput paitan','Axonopus commpressus',5,'2022-01-10 13:03:09',NULL),
	(176,'Bakung biru','Agapanthus sp.',5,'2022-01-10 13:03:09',NULL),
	(177,'Rumput peking','Agrostis canina',5,'2022-01-10 13:03:09',NULL),
	(178,'Mata boneka','Actaea',5,'2022-01-10 13:03:09',NULL),
	(179,'Scindapsus','Scindapsus spp',5,'2022-01-10 13:03:09',NULL),
	(180,'Aralia','Aralia sp.',5,'2022-01-10 13:03:09',NULL),
	(181,'Sirih-sirihan','Syngonium spp',5,'2022-01-10 13:03:09',NULL),
	(182,'Aster','Aster sp.',5,'2022-01-10 13:03:09',NULL),
	(183,'Sedap malam','Polianthes tuberosa',5,'2022-01-10 13:03:09',NULL),
	(184,'Bergenia','Bergenia sp.',5,'2022-01-10 13:03:09',NULL),
	(185,'Bellflower','Campanula sp.',5,'2022-01-10 13:03:09',NULL),
	(186,'Krisan / Seruni','Chrysanthemum spp',5,'2022-01-10 13:03:09',NULL),
	(187,'Sedges','Carex sp.',5,'2022-01-10 13:03:09',NULL),
	(188,'Soka','Ixora spp',5,'2022-01-10 13:03:09',NULL),
	(189,'Corydalis','Corydalis sp.',5,'2022-01-10 13:03:09',NULL),
	(190,'Solidago','Solidago spp',5,'2022-01-10 13:03:09',NULL),
	(191,'Crocosmia','Crocosmia sp.',5,'2022-01-10 13:03:09',NULL),
	(192,'Spathipyllum','Spathiphyllum spp',5,'2022-01-10 13:03:09',NULL),
	(193,'Bleeding heart','Dicentra sp.',5,'2022-01-10 13:03:09',NULL),
	(194,'Eryngium','Eryngium sp.',5,'2022-01-10 13:03:09',NULL),
	(195,'Melati Madagaskar','Stephanotis spp',5,'2022-01-10 13:03:09',NULL),
	(196,'Suplir','Adiantum spp',5,'2022-01-10 13:03:09',NULL),
	(197,'Teratai','Nymphaea lotus',5,'2022-01-10 13:03:09',NULL),
	(198,'Fatsia','Fatsia sp.',5,'2022-01-10 13:03:09',NULL),
	(199,'Talas-talasan','Alocasia spp',5,'2022-01-10 13:03:09',NULL),
	(200,'Typa','Typha spp',5,'2022-01-10 13:03:09',NULL),
	(201,'Verbena','Verbena tenera',5,'2022-01-10 13:03:09',NULL),
	(202,'Jacobinia','Jacobinia spp',5,'2022-01-10 13:03:09',NULL),
	(203,'Gaillardia','Gaillardia sp.',5,'2022-01-10 13:03:09',NULL),
	(204,'Anigozanthos','Anigozanthos flavidus',5,'2022-01-10 13:03:09',NULL),
	(205,'Geranium','Geranium sp.',5,'2022-01-10 13:03:09',NULL),
	(206,'Kamelia','Camellia japonica L.',5,'2022-01-10 13:03:09',NULL),
	(207,'Avens','Geum sp.',5,'2022-01-10 13:03:09',NULL),
	(208,'Bunga pagoda','Clerodendnurn paniculatum',5,'2022-01-10 13:03:09',NULL),
	(209,'Heucherella','Heucherella sp.',5,'2022-01-10 13:03:09',NULL),
	(210,'Heuchera','Heuchera sp',5,'2022-01-10 13:03:09',NULL),
	(211,'Poker panas','Kniphofia sp.',5,'2022-01-10 13:03:09',NULL),
	(212,'Hemerocallis (Daylili)','Hemerocallis sp',5,'2022-01-10 13:03:09',NULL),
	(213,'Aster Leucanthemum','Leucanthemum sp.',5,'2022-01-10 13:03:09',NULL),
	(214,'Bunga udang','Justicia brandegeana',5,'2022-01-10 13:03:09',NULL),
	(215,'Persicaria','Persicaria sp.',5,'2022-01-10 13:03:09',NULL),
	(216,'Bunga Lily','Lilium sp',5,'2022-01-10 13:03:09',NULL),
	(217,'Nusa indah','Mussaenda phylippica',5,'2022-01-10 13:03:09',NULL),
	(218,'Phormium','Phormium sp.',5,'2022-01-10 13:03:09',NULL),
	(219,'Pulmonaria','Pulmonaria sp.',5,'2022-01-10 13:03:09',NULL),
	(220,'Bunga oleander','Nerium oleander',5,'2022-01-10 13:03:09',NULL),
	(221,'Pelargonium','Pelargonium sp',5,'2022-01-10 13:03:09',NULL),
	(222,'Corimbosa','Tabemaemontana corymbosa',5,'2022-01-10 13:03:09',NULL),
	(223,'Jasmin star','Trachelospermu m jasminoides',5,'2022-01-10 13:03:09',NULL),
	(224,'Sambung Colok','Aerva Sanguinolenta',5,'2022-01-10 13:03:09',NULL),
	(225,'Coneflower','Rudbeckia sp.',5,'2022-01-10 13:03:09',NULL),
	(226,'Scabiosa','Scabiosa sp.',5,'2022-01-10 13:03:09',NULL),
	(227,'Thalictrum','Thalictrum sp',5,'2022-01-10 13:03:09',NULL),
	(228,'Krokot','Alternantera Ficoidea',5,'2022-01-10 13:03:09',NULL),
	(229,'Begonia','Begonia sp',5,'2022-01-10 13:03:09',NULL),
	(230,'Brojo lintang','Belamcanda chinensis',5,'2022-01-10 13:03:09',NULL),
	(231,'Foam flower','Tiarella sp',5,'2022-01-10 13:03:09',NULL),
	(232,'Brunnera','Brunnera sp',5,'2022-01-10 13:03:09',NULL),
	(233,'Lily Tricyrtis','Tricyrtis sp',5,'2022-01-10 13:03:09',NULL),
	(234,'Keladi','Caladium spp',5,'2022-01-10 13:03:09',NULL),
	(235,'Jeruju','Acanthus sp',5,'2022-01-10 13:03:09',NULL),
	(236,'Tapak darah','Catharanthus sp',5,'2022-01-10 13:03:09',NULL),
	(237,'Mapel','Acer sp',5,'2022-01-10 13:03:09',NULL),
	(238,'Palisota','Chlorophytum Amaniense',5,'2022-01-10 13:03:09',NULL),
	(239,'Actaea','Actaea sp',5,'2022-01-10 13:03:09',NULL),
	(240,'Cryptantus','Cwptantus spp',5,'2022-01-10 13:03:09',NULL),
	(241,'Flannel flower','Actinotus helianthi',5,'2022-01-10 13:03:09',NULL),
	(242,'Lili Brazil','Dianella sp',5,'2022-01-10 13:03:09',NULL),
	(243,'Aeonium','Aeonium sp',5,'2022-01-10 13:03:09',NULL),
	(244,'Bakung','Hymenocallis Littoralis Variegata',5,'2022-01-10 13:03:09',NULL),
	(245,'Aloe hybrid','Aloe hybHds',5,'2022-01-10 13:03:09',NULL),
	(246,'Ubi Kuning','Ipomoea Potato Vine',5,'2022-01-10 13:03:09',NULL),
	(247,'Anubias','Anubias sp',5,'2022-01-10 13:03:09',NULL),
	(248,'Aponogeton','Aponogeton sp',5,'2022-01-10 13:03:09',NULL),
	(249,'Paris daisy','Argyranthemum frutescens',5,'2022-01-10 13:03:09',NULL),
	(250,'Kaktus bintang','Astrophytum sp',5,'2022-01-10 13:03:09',NULL),
	(251,'Bayam-bayaman','Iresine Herbstii',5,'2022-01-10 13:03:09',NULL),
	(252,'Aztekium','Aztekium sp',5,'2022-01-10 13:03:09',NULL),
	(253,'Meranti Sepat','Marantha Leuconeura',5,'2022-01-10 13:03:09',NULL),
	(254,'Calibrachoa','Calibrachoa hybrida',5,'2022-01-10 13:03:09',NULL),
	(255,'Jeruk Nagami','Citrus kumquat',5,'2022-01-10 13:03:09',NULL),
	(256,'Cotyledon','Cotyledon sp',5,'2022-01-10 13:03:09',NULL),
	(257,'Conophytum','Conophytum sp',5,'2022-01-10 13:03:09',NULL),
	(258,'Kaktus sarang lebah','Coryphanta sp',5,'2022-01-10 13:03:09',NULL),
	(259,'Copiapoa','Copiapoa sp',5,'2022-01-10 13:03:09',NULL),
	(260,'Iris','Neornarica longifolia',5,'2022-01-10 13:03:09',NULL),
	(261,'Kucai Jepang, Kucai Mini, Rumput Mondo','Ophiopogon Japonicus Nana',5,'2022-01-10 13:03:09',NULL),
	(262,'Adam Hawa','Rhoeo Discolor',5,'2022-01-10 13:03:09',NULL),
	(263,'Spatipilum','Spatiphyllum sp',5,'2022-01-10 13:03:09',NULL),
	(264,'Bunga pukul delapan','mrnera subulata',5,'2022-01-10 13:03:09',NULL),
	(265,'Violces/ Saintpaulia','Saintpaulia ionantha',5,'2022-01-10 13:03:09',NULL),
	(266,'Cryptocoryne','Cryptocoryne sp',5,'2022-01-10 13:03:09',NULL),
	(267,'Suruni ambat','Wedelia triloba',5,'2022-01-10 13:03:09',NULL),
	(268,'Bunga Larkspur','Delphinium sp',5,'2022-01-10 13:03:09',NULL),
	(269,'Bunga bawang','Zephyrantes rosea',5,'2022-01-10 13:03:09',NULL),
	(270,'Dietes','Dietes sp',5,'2022-01-10 13:03:09',NULL),
	(271,'Bacopa','Bacopa caroliniana',5,'2022-01-10 13:03:09',NULL),
	(272,'Tanaman Buce','Bucephalandra sp',5,'2022-01-10 13:03:09',NULL),
	(273,'Discocactus','Discocactus sp',5,'2022-01-10 13:03:09',NULL),
	(274,'Dorstenia','Dorstenia sp',5,'2022-01-10 13:03:09',NULL),
	(275,'Dudleya','Dudleya sp',5,'2022-01-10 13:03:09',NULL),
	(276,'Echinocactus','Echinocactus sp',5,'2022-01-10 13:03:09',NULL),
	(277,'Echinopsis','Echinopsis sp',5,'2022-01-10 13:03:09',NULL),
	(278,'Button cactus','Epithelantha sp',5,'2022-01-10 13:03:09',NULL),
	(279,'Tanaman ekor naga','Epipremnum pinnatum',5,'2022-01-10 13:03:09',NULL),
	(280,'Araucaria','Araucaria sp',5,'2022-01-10 13:03:09',NULL),
	(281,'Perocactus','Ferocactus sp',5,'2022-01-10 13:03:09',NULL),
	(282,'Firewheel','Gaillardia sp',5,'2022-01-10 13:03:09',NULL),
	(283,'Garcinia','Garcinia sp',5,'2022-01-10 13:03:09',NULL),
	(284,'Gastrolea','Gastrolea sp',5,'2022-01-10 13:03:09',NULL),
	(285,'Geranium','Geranium sp',5,'2022-01-10 13:03:09',NULL),
	(286,'Graptoveria','Graptovena sp',5,'2022-01-10 13:03:09',NULL),
	(287,'Gymnocalycium','Gymnocalycium sp',5,'2022-01-10 13:03:09',NULL),
	(288,'Tanaman beludru','Gynura aurantiaca',5,'2022-01-10 13:03:09',NULL),
	(289,'Hamatocactus','Hamatocactus sp',5,'2022-01-10 13:03:09',NULL),
	(290,'Rumput mutiara','Hemianthus micranthemoides',5,'2022-01-10 13:03:09',NULL),
	(291,'Brazilian pennywort','Hydrocotyle leucocephala',5,'2022-01-10 13:03:09',NULL),
	(292,'Lepidosperma','Lepidosperma effusum',5,'2022-01-10 13:03:09',NULL),
	(293,'Lithops','Lithops sp',5,'2022-01-10 13:03:09',NULL),
	(294,'Liriope','Liriope muscari',5,'2022-01-10 13:03:09',NULL),
	(295,'Cardinal flower','Lobelia cardinalis',5,'2022-01-10 13:03:09',NULL),
	(296,'Lysimachia','Lysimachia nummularia',5,'2022-01-10 13:03:09',NULL),
	(297,'Macropedia','Macropedia fulignosa',5,'2022-01-10 13:03:09',NULL),
	(298,'Mammilaria','Mammillaria sp',5,'2022-01-10 13:03:09',NULL),
	(299,'Medinilla','Medinilla sp',5,'2022-01-10 13:03:09',NULL),
	(300,'Mimulus','Mimulus sp',5,'2022-01-10 13:03:09',NULL),
	(301,'Monadenium','Monadenium sp',5,'2022-01-10 13:03:09',NULL),
	(302,'Yangmei','Myrica rubra',5,'2022-01-10 13:03:09',NULL),
	(303,'Nandina','Nandina domestica',5,'2022-01-10 13:03:09',NULL),
	(304,'Notocactus','Notocactus sp',5,'2022-01-10 13:03:09',NULL),
	(305,'Obregonia','Obregonia sp',5,'2022-01-10 13:03:09',NULL),
	(306,'Opuntia','Opuntia sp',5,'2022-01-10 13:03:09',NULL),
	(307,'Ortegocactus','Ortegocactus sp',5,'2022-01-10 13:03:09',NULL),
	(308,'Osteospermum','Osteospermum ecklonis',5,'2022-01-10 13:03:09',NULL),
	(309,'Pachypodium','Pachypodium sp',5,'2022-01-10 13:03:09',NULL),
	(310,'Platycodon','Platycodon grandiflorus',5,'2022-01-10 13:03:09',NULL),
	(311,'Podocarpus','Podocarpus sp',5,'2022-01-10 13:03:09',NULL),
	(312,'Pseudolithos','Pseudolithos sp',5,'2022-01-10 13:03:09',NULL),
	(313,'Rhubarb','Rhubarb \'glaskins perpetual\'',5,'2022-01-10 13:03:09',NULL),
	(314,'Crystalwort','Riccia fluitans',5,'2022-01-10 13:03:09',NULL),
	(315,'Rodgersia','Rodgersia sp',5,'2022-01-10 13:03:09',NULL),
	(316,'Schlumbergera','Schlumbergera sp',5,'2022-01-10 13:03:09',NULL),
	(317,'Sedum','Sedum spp',5,'2022-01-10 13:03:09',NULL),
	(318,'Senecio','Senecio sp',5,'2022-01-10 13:03:09',NULL),
	(319,'Sinningia','Sinningia sp',5,'2022-01-10 13:03:09',NULL),
	(320,'Anggrek tanah','Spathoglottis plicata',5,'2022-01-10 13:03:09',NULL),
	(321,'Brain cactus','Stenocactus sp',5,'2022-01-10 13:03:09',NULL),
	(322,'Sticherus','Sticherus flabellatus',5,'2022-01-10 13:03:09',NULL),
	(323,'Stromanthe','Stromanthe sanguine',5,'2022-01-10 13:03:09',NULL),
	(324,'Sulcorebutia','Sulcorebutia sp',5,'2022-01-10 13:03:09',NULL),
	(325,'Sempervivum','Sempervivum sp',5,'2022-01-10 13:03:09',NULL),
	(326,'Ketapang kencana','Terminalia Mantaly',5,'2022-01-10 13:03:09',NULL),
	(327,'Tephrocactus','Tephrocactus sp',5,'2022-01-10 13:03:09',NULL),
	(328,'Bunga kertas','Zinnia elegans',5,'2022-01-10 13:03:09',NULL),
	(329,'Anemone','Anemone sp',5,'2022-01-10 13:03:09',NULL),
	(330,'Fritillaria','Fritillaria sp',5,'2022-01-10 13:03:09',NULL),
	(331,'Gasteria','Gasteria sp',5,'2022-01-10 13:03:09',NULL),
	(332,'Rain lily','Habranthus sp',5,'2022-01-10 13:03:09',NULL),
	(333,'Amarilis','Hippeastrum sp',5,'2022-01-10 13:03:09',NULL),
	(334,'Limonium','Limonium caspea',5,'2022-01-10 13:03:09',NULL),
	(335,'Liriope','Liriope sp',5,'2022-01-10 13:03:09',NULL),
	(336,'Sandersonia','Sandersonia aurantiaca',5,'2022-01-10 13:03:09',NULL),
	(337,'Statice','Statice sp',5,'2022-01-10 13:03:09',NULL),
	(338,'Catchfly','Silene sp',5,'2022-01-10 13:03:09',NULL),
	(339,'Cyclamen','Cyclamen spp',5,'2022-01-10 13:03:09',NULL),
	(340,'Kerudung pengantin','Asparagus asparagoides (smilax)',5,'2022-01-10 13:03:09',NULL),
	(341,'Lily Paris','Chlorophytum comosum',5,'2022-01-10 13:03:09',NULL),
	(342,'Tulip siam','Curcuma siam',5,'2022-01-10 13:03:09',NULL),
	(343,'Bambu','Bambusa balcooa',5,'2022-01-10 13:03:09',NULL),
	(344,'Bambu','Bambusa chungii barbellata',5,'2022-01-10 13:03:09',NULL),
	(345,'B ambu','Bambusa eutuldoides viridi vittata',5,'2022-01-10 13:03:09',NULL),
	(346,'Bambu','Bambusa heterostachya',5,'2022-01-10 13:03:09',NULL),
	(347,'Bambu','Bambusa lako',5,'2022-01-10 13:03:09',NULL),
	(348,'Bambu','Bambusa oldhamii',5,'2022-01-10 13:03:09',NULL),
	(349,'Bambu','Bambusa textilis gracilis',5,'2022-01-10 13:03:09',NULL),
	(350,'Bambu','Dendrocalamus brandisii',5,'2022-01-10 13:03:09',NULL),
	(351,'Bambu','Dendrocalamus hamiltonii',5,'2022-01-10 13:03:09',NULL),
	(352,'Bambu','Dendrocalamus minor amoenus',5,'2022-01-10 13:03:09',NULL),
	(353,'Bambu','Guadua amplexifolia',5,'2022-01-10 13:03:09',NULL),
	(354,'Bambu','Guaaua angustifolia',5,'2022-01-10 13:03:09',NULL),
	(355,'Bambu','Himalayacałamus porcatus   ',5,'2022-01-10 13:03:09',NULL),
	(356,'Bambu','Oxytenanthera abyssinica',5,'2022-01-10 13:03:09',NULL),
	(357,'Bambu','Phyllostachys atrovaginata',5,'2022-01-10 13:03:09',NULL),
	(358,'Bambu','Phyllostachys aureosułcata aureocaulis',5,'2022-01-10 13:03:09',NULL),
	(359,'Bambu','Phyllostachys nigra',5,'2022-01-10 13:03:09',NULL),
	(360,'Bambu','Pleioblastus variegatus',5,'2022-01-10 13:03:09',NULL),
	(361,'Bambu','Semiarundinariafastuosa',5,'2022-01-10 13:03:09',NULL);

/*!40000 ALTER TABLE `base_plants` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cache
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cache`;

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table cache_locks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cache_locks`;

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table carts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `carts`;

CREATE TABLE `carts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `plant_id` bigint unsigned NOT NULL,
  `qty` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `has_paid` tinyint(1) NOT NULL,
  `order_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cart_user_id_foreign` (`user_id`),
  KEY `cart_plant_id_foreign` (`plant_id`),
  KEY `cart_order_id_foreign` (`order_id`),
  CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`plant_id`) REFERENCES `plants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `carts` WRITE;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;

INSERT INTO `carts` (`id`, `user_id`, `plant_id`, `qty`, `total`, `has_paid`, `order_id`, `created_at`, `updated_at`)
VALUES
	(1,52,1,'1','2',0,1,'2025-04-29 06:41:49','2025-04-29 06:42:18'),
	(4,52,1,'1','2',0,3,'2025-05-01 14:06:47','2025-05-01 15:00:47'),
	(5,52,3,'1','4',0,4,'2025-05-03 04:42:53','2025-05-03 04:44:49'),
	(6,52,4,'1','5',0,5,'2025-05-03 04:50:23','2025-05-03 04:56:21'),
	(9,52,1,'1','2',0,7,'2025-05-16 02:04:18','2025-05-16 02:05:19'),
	(10,52,1,'1','2',0,9,'2025-05-19 22:48:25','2025-05-19 22:49:40'),
	(12,52,2,'2','6',0,10,'2025-05-19 23:47:20','2025-05-19 23:48:29'),
	(13,52,3,'1','4',0,10,'2025-05-19 23:47:24','2025-05-19 23:48:29'),
	(14,52,1,'1','2',0,11,'2025-05-20 09:03:34','2025-05-20 09:05:17'),
	(15,52,2,'1','3',0,12,'2025-05-23 02:52:37','2025-05-23 02:54:39'),
	(16,52,3,'1','4',0,13,'2025-05-23 02:58:42','2025-05-23 02:59:48'),
	(17,52,4,'1','5',0,14,'2025-05-23 03:00:54','2025-05-23 03:01:52'),
	(18,52,4,'1','5',0,15,'2025-05-23 03:00:54','2025-05-23 03:01:52'),
	(19,52,4,'1','5',0,16,'2025-05-23 03:00:54','2025-05-23 03:01:52'),
	(21,52,3,'1','4',0,18,'2025-05-27 02:13:19','2025-05-27 02:14:29'),
	(22,52,1,'1','2',0,20,'2025-05-30 11:25:04','2025-05-30 11:27:15');

/*!40000 ALTER TABLE `carts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `plant_id` bigint unsigned NOT NULL,
  `order_id` int NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` tinyint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `plant_id` (`plant_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`plant_id`) REFERENCES `plants` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_chk_1` CHECK ((`rate` between 1 and 5))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;

INSERT INTO `comments` (`id`, `plant_id`, `order_id`, `user_id`, `comment`, `rate`, `created_at`, `updated_at`)
VALUES
	(1,1,9,52,'Bagus banget ini',2,'2025-05-20 00:25:11','2025-05-20 00:25:11'),
	(2,3,10,52,'Baik sekali ini',5,'2025-05-20 00:30:51','2025-05-20 00:30:51'),
	(4,2,10,52,'TEST',5,'2025-05-20 09:07:19','2025-05-20 09:07:19');

/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table countries
# ------------------------------------------------------------

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `phone_code` int NOT NULL,
  `country_code` char(2) NOT NULL,
  `country_name` varchar(80) NOT NULL,
  `file_lisensi` tinyint(1) NOT NULL DEFAULT '0',
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;

INSERT INTO `countries` (`id`, `phone_code`, `country_code`, `country_name`, `file_lisensi`, `latitude`, `longitude`, `created_at`, `updated_at`)
VALUES
	(1,93,'AF','Afghanistan',1,'33','65',NULL,NULL),
	(2,358,'AX','Aland Islands',1,NULL,NULL,NULL,NULL),
	(3,355,'AL','Albania',0,'41','20',NULL,NULL),
	(4,213,'DZ','Algeria',0,'28','3',NULL,NULL),
	(5,1684,'AS','American Samoa',1,'-14.33','-170',NULL,NULL),
	(6,376,'AD','Andorra',0,'42.5','1.5',NULL,NULL),
	(7,244,'AO','Angola',0,'-12.5','18.5',NULL,NULL),
	(8,1264,'AI','Anguilla',0,'18.25','-63.17',NULL,NULL),
	(9,672,'AQ','Antarctica',0,'-90','0',NULL,NULL),
	(10,1268,'AG','Antigua and Barbuda',0,'17.05','-61.8',NULL,NULL),
	(11,54,'AR','Argentina',0,'-34','-64',NULL,NULL),
	(12,374,'AM','Armenia',0,'40','45',NULL,NULL),
	(13,297,'AW','Aruba',0,'12.5','-69.97',NULL,NULL),
	(14,61,'AU','Australia',0,'-27','133',NULL,NULL),
	(15,43,'AT','Austria',0,'47.33','13.33',NULL,NULL),
	(16,994,'AZ','Azerbaijan',0,'40.5','47.5',NULL,NULL),
	(17,1242,'BS','Bahamas',0,'24.25','-76',NULL,NULL),
	(18,973,'BH','Bahrain',0,'26','50.55',NULL,NULL),
	(19,880,'BD','Bangladesh',0,'24','90',NULL,NULL),
	(20,1246,'BB','Barbados',0,'13.17','-59.53',NULL,NULL),
	(21,375,'BY','Belarus',0,'53','28',NULL,NULL),
	(22,32,'BE','Belgium',0,'50.83','4',NULL,NULL),
	(23,501,'BZ','Belize',0,'17.25','-88.75',NULL,NULL),
	(24,229,'BJ','Benin',0,'9.5','2.25',NULL,NULL),
	(25,1441,'BM','Bermuda',0,'32.33','-64.75',NULL,NULL),
	(26,975,'BT','Bhutan',0,'27.5','90.5',NULL,NULL),
	(27,591,'BO','Bolivia',0,'-17','-65',NULL,NULL),
	(28,599,'BQ','Bonaire, Sint Eustatius and Saba',0,NULL,NULL,NULL,NULL),
	(29,387,'BA','Bosnia and Herzegovina',0,'44','18',NULL,NULL),
	(30,267,'BW','Botswana',0,'-22','24',NULL,NULL),
	(31,55,'BV','Bouvet Island',0,'-54.43','3.4',NULL,NULL),
	(32,55,'BR','Brazil',0,'-10','-55',NULL,NULL),
	(33,246,'IO','British Indian Ocean Territory',0,'-6','71.5',NULL,NULL),
	(34,673,'BN','Brunei Darussalam',0,'4.5','114.67',NULL,NULL),
	(35,359,'BG','Bulgaria',0,'43','25',NULL,NULL),
	(36,226,'BF','Burkina Faso',0,'13','-2',NULL,NULL),
	(37,257,'BI','Burundi',0,'-3.5','30',NULL,NULL),
	(38,855,'KH','Cambodia',0,'13','105',NULL,NULL),
	(39,237,'CM','Cameroon',0,'6','12',NULL,NULL),
	(40,1,'CA','Canada',0,'60','-95',NULL,NULL),
	(41,238,'CV','Cape Verde',0,'16','-24',NULL,NULL),
	(42,1345,'KY','Cayman Islands',0,'19.5','-80.5',NULL,NULL),
	(43,236,'CF','Central African Republic',0,'7','21',NULL,NULL),
	(44,235,'TD','Chad',0,'15','19',NULL,NULL),
	(45,56,'CL','Chile',0,'-30','-71',NULL,NULL),
	(46,86,'CN','China',0,'35','105',NULL,NULL),
	(47,61,'CX','Christmas Island',0,'-10.5','105.67',NULL,NULL),
	(48,672,'CC','Cocos (Keeling) Islands',0,'-12.5','96.83',NULL,NULL),
	(49,57,'CO','Colombia',0,'4','-72',NULL,NULL),
	(50,269,'KM','Comoros',0,'-12.17','44.25',NULL,NULL),
	(51,242,'CG','Congo',0,'-1','15',NULL,NULL),
	(52,242,'CD','Congo, Democratic Republic of the Congo',0,'0','25',NULL,NULL),
	(53,682,'CK','Cook Islands',0,'-21.23','-159.77',NULL,NULL),
	(54,506,'CR','Costa Rica',0,'10','-84',NULL,NULL),
	(55,225,'CI','Cote D\'Ivoire',0,'8','-5',NULL,NULL),
	(56,385,'HR','Croatia',0,'45.17','15.5',NULL,NULL),
	(57,53,'CU','Cuba',0,'21.5','-80',NULL,NULL),
	(58,599,'CW','Curacao',0,NULL,NULL,NULL,NULL),
	(59,357,'CY','Cyprus',0,'35','33',NULL,NULL),
	(60,420,'CZ','Czech Republic',0,'49.75','15.5',NULL,NULL),
	(61,45,'DK','Denmark',0,'56','10',NULL,NULL),
	(62,253,'DJ','Djibouti',0,'11.5','43',NULL,NULL),
	(63,1767,'DM','Dominica',0,'15.42','-61.33',NULL,NULL),
	(64,1809,'DO','Dominican Republic',0,'19','-70.67',NULL,NULL),
	(65,593,'EC','Ecuador',0,'-2','-77.5',NULL,NULL),
	(66,20,'EG','Egypt',0,'27','30',NULL,NULL),
	(67,503,'SV','El Salvador',0,'13.83','-88.92',NULL,NULL),
	(68,240,'GQ','Equatorial Guinea',0,'2','10',NULL,NULL),
	(69,291,'ER','Eritrea',0,'15','39',NULL,NULL),
	(70,372,'EE','Estonia',0,'59','26',NULL,NULL),
	(71,251,'ET','Ethiopia',0,'8','38',NULL,NULL),
	(72,500,'FK','Falkland Islands (Malvinas)',0,'-51.75','-59',NULL,NULL),
	(73,298,'FO','Faroe Islands',0,'62','-7',NULL,NULL),
	(74,679,'FJ','Fiji',0,'-18','175',NULL,NULL),
	(75,358,'FI','Finland',0,'64','26',NULL,NULL),
	(76,33,'FR','France',0,'46','2',NULL,NULL),
	(77,594,'GF','French Guiana',0,'4','-53',NULL,NULL),
	(78,689,'PF','French Polynesia',0,'-15','-140',NULL,NULL),
	(79,262,'TF','French Southern Territories',0,'-43','67',NULL,NULL),
	(80,241,'GA','Gabon',0,'-1','11.75',NULL,NULL),
	(81,220,'GM','Gambia',0,'13.47','-16.57',NULL,NULL),
	(82,995,'GE','Georgia',0,'42','43.5',NULL,NULL),
	(83,49,'DE','Germany',0,'51','9',NULL,NULL),
	(84,233,'GH','Ghana',0,'8','-2',NULL,NULL),
	(85,350,'GI','Gibraltar',0,'36.18','-5.37',NULL,NULL),
	(86,30,'GR','Greece',0,'39','22',NULL,NULL),
	(87,299,'GL','Greenland',0,'72','-40',NULL,NULL),
	(88,1473,'GD','Grenada',0,'12.12','-61.67',NULL,NULL),
	(89,590,'GP','Guadeloupe',0,'16.25','-61.58',NULL,NULL),
	(90,1671,'GU','Guam',0,'13.47','144.78',NULL,NULL),
	(91,502,'GT','Guatemala',0,'15.5','-90.25',NULL,NULL),
	(92,44,'GG','Guernsey',0,NULL,NULL,NULL,NULL),
	(93,224,'GN','Guinea',0,'11','-10',NULL,NULL),
	(94,245,'GW','Guinea-Bissau',0,'12','-15',NULL,NULL),
	(95,592,'GY','Guyana',0,'5','-59',NULL,NULL),
	(96,509,'HT','Haiti',0,'19','-72.42',NULL,NULL),
	(97,0,'HM','Heard Island and Mcdonald Islands',0,'-53.1','72.52',NULL,NULL),
	(98,39,'VA','Holy See (Vatican City State)',0,'41.9','12.45',NULL,NULL),
	(99,504,'HN','Honduras',0,'15','-86.5',NULL,NULL),
	(100,852,'HK','Hong Kong',0,'22.25','114.17',NULL,NULL),
	(101,36,'HU','Hungary',0,'47','20',NULL,NULL),
	(102,354,'IS','Iceland',0,'65','-18',NULL,NULL),
	(103,91,'IN','India',0,'20','77',NULL,NULL),
	(104,62,'ID','Indonesia',1,'-5','120',NULL,NULL),
	(105,98,'IR','Iran, Islamic Republic of',0,'32','53',NULL,NULL),
	(106,964,'IQ','Iraq',0,'33','44',NULL,NULL),
	(107,353,'IE','Ireland',0,'53','-8',NULL,NULL),
	(108,44,'IM','Isle of Man',0,NULL,NULL,NULL,NULL),
	(109,972,'IL','Israel',0,'31.5','34.75',NULL,NULL),
	(110,39,'IT','Italy',0,'42.83','12.83',NULL,NULL),
	(111,1876,'JM','Jamaica',0,'18.25','-77.5',NULL,NULL),
	(112,81,'JP','Japan',0,'36','138',NULL,NULL),
	(113,44,'JE','Jersey',0,NULL,NULL,NULL,NULL),
	(114,962,'JO','Jordan',0,'31','36',NULL,NULL),
	(115,7,'KZ','Kazakhstan',0,'48','68',NULL,NULL),
	(116,254,'KE','Kenya',0,'1','38',NULL,NULL),
	(117,686,'KI','Kiribati',0,'1.42','173',NULL,NULL),
	(118,850,'KP','Korea, Democratic People\'s Republic of',0,'40','127',NULL,NULL),
	(119,82,'KR','Korea, Republic of',0,'37','127.5',NULL,NULL),
	(120,381,'XK','Kosovo',0,NULL,NULL,NULL,NULL),
	(121,965,'KW','Kuwait',0,'29.34','47.66',NULL,NULL),
	(122,996,'KG','Kyrgyzstan',0,'41','75',NULL,NULL),
	(123,856,'LA','Lao People\'s Democratic Republic',0,'18','105',NULL,NULL),
	(124,371,'LV','Latvia',0,'57','25',NULL,NULL),
	(125,961,'LB','Lebanon',0,'33.83','35.83',NULL,NULL),
	(126,266,'LS','Lesotho',0,'-29.5','28.5',NULL,NULL),
	(127,231,'LR','Liberia',0,'6.5','-9.5',NULL,NULL),
	(128,218,'LY','Libyan Arab Jamahiriya',0,'25','17',NULL,NULL),
	(129,423,'LI','Liechtenstein',0,'47.17','9.53',NULL,NULL),
	(130,370,'LT','Lithuania',0,'56','24',NULL,NULL),
	(131,352,'LU','Luxembourg',0,'49.75','6.17',NULL,NULL),
	(132,853,'MO','Macao',0,'22.17','113.55',NULL,NULL),
	(133,389,'MK','Macedonia, the Former Yugoslav Republic of',0,'41.83','22',NULL,NULL),
	(134,261,'MG','Madagascar',0,'-20','47',NULL,NULL),
	(135,265,'MW','Malawi',0,'-13.5','34',NULL,NULL),
	(136,60,'MY','Malaysia',0,'2.5','112.5',NULL,NULL),
	(137,960,'MV','Maldives',0,'3.25','73',NULL,NULL),
	(138,223,'ML','Mali',0,'17','-4',NULL,NULL),
	(139,356,'MT','Malta',0,'35.83','14.58',NULL,NULL),
	(140,692,'MH','Marshall Islands',0,'9','168',NULL,NULL),
	(141,596,'MQ','Martinique',0,'14.67','-61',NULL,NULL),
	(142,222,'MR','Mauritania',0,'20','-12',NULL,NULL),
	(143,230,'MU','Mauritius',0,'-20.28','57.55',NULL,NULL),
	(144,269,'YT','Mayotte',0,'-12.83','45.17',NULL,NULL),
	(145,52,'MX','Mexico',0,'23','-102',NULL,NULL),
	(146,691,'FM','Micronesia, Federated States of',0,'6.92','158.25',NULL,NULL),
	(147,373,'MD','Moldova, Republic of',0,'47','29',NULL,NULL),
	(148,377,'MC','Monaco',0,'43.73','7.4',NULL,NULL),
	(149,976,'MN','Mongolia',0,'46','105',NULL,NULL),
	(150,382,'ME','Montenegro',0,'42','19',NULL,NULL),
	(151,1664,'MS','Montserrat',0,'16.75','-62.2',NULL,NULL),
	(152,212,'MA','Morocco',0,'32','-5',NULL,NULL),
	(153,258,'MZ','Mozambique',0,'-18.25','35',NULL,NULL),
	(154,95,'MM','Myanmar',0,'22','98',NULL,NULL),
	(155,264,'NA','Namibia',0,'-22','17',NULL,NULL),
	(156,674,'NR','Nauru',0,'-0.53','166.92',NULL,NULL),
	(157,977,'NP','Nepal',0,'28','84',NULL,NULL),
	(158,31,'NL','Netherlands',0,'52.5','5.75',NULL,NULL),
	(159,599,'AN','Netherlands Antilles',0,'12.25','-68.75',NULL,NULL),
	(160,687,'NC','New Caledonia',0,'-21.5','165.5',NULL,NULL),
	(161,64,'NZ','New Zealand',0,'-41','174',NULL,NULL),
	(162,505,'NI','Nicaragua',0,'13','-85',NULL,NULL),
	(163,227,'NE','Niger',0,'16','8',NULL,NULL),
	(164,234,'NG','Nigeria',0,'10','8',NULL,NULL),
	(165,683,'NU','Niue',0,'-19.03','-169.87',NULL,NULL),
	(166,672,'NF','Norfolk Island',0,'-29.03','167.95',NULL,NULL),
	(167,1670,'MP','Northern Mariana Islands',0,'15.2','145.75',NULL,NULL),
	(168,47,'NO','Norway',0,'62','10',NULL,NULL),
	(169,968,'OM','Oman',0,'21','57',NULL,NULL),
	(170,92,'PK','Pakistan',0,'30','70',NULL,NULL),
	(171,680,'PW','Palau',0,'7.5','134.5',NULL,NULL),
	(172,970,'PS','Palestinian Territory, Occupied',0,'32','35.25',NULL,NULL),
	(173,507,'PA','Panama',0,'9','-80',NULL,NULL),
	(174,675,'PG','Papua New Guinea',0,'-6','147',NULL,NULL),
	(175,595,'PY','Paraguay',0,'-23','-58',NULL,NULL),
	(176,51,'PE','Peru',0,'-10','-76',NULL,NULL),
	(177,63,'PH','Philippines',0,'13','122',NULL,NULL),
	(178,64,'PN','Pitcairn',0,NULL,NULL,NULL,NULL),
	(179,48,'PL','Poland',0,'52','20',NULL,NULL),
	(180,351,'PT','Portugal',0,'39.5','-8',NULL,NULL),
	(181,1787,'PR','Puerto Rico',0,'18.25','-66.5',NULL,NULL),
	(182,974,'QA','Qatar',0,'25.5','51.25',NULL,NULL),
	(183,262,'RE','Reunion',0,'-21.1','55.6',NULL,NULL),
	(184,40,'RO','Romania',0,'46','25',NULL,NULL),
	(185,70,'RU','Russian Federation',0,'60','100',NULL,NULL),
	(186,250,'RW','Rwanda',0,'-2','30',NULL,NULL),
	(187,590,'BL','Saint Barthelemy',0,NULL,NULL,NULL,NULL),
	(188,290,'SH','Saint Helena',0,'-15.93','-5.7',NULL,NULL),
	(189,1869,'KN','Saint Kitts and Nevis',0,'17.33','-62.75',NULL,NULL),
	(190,1758,'LC','Saint Lucia',0,'13.88','-61.13',NULL,NULL),
	(191,590,'MF','Saint Martin',0,NULL,NULL,NULL,NULL),
	(192,508,'PM','Saint Pierre and Miquelon',0,'46.83','-56.33',NULL,NULL),
	(193,1784,'VC','Saint Vincent and the Grenadines',0,'13.25','-61.2',NULL,NULL),
	(194,684,'WS','Samoa',0,'-13.58','-172.33',NULL,NULL),
	(195,378,'SM','San Marino',0,'43.77','12.42',NULL,NULL),
	(196,239,'ST','Sao Tome and Principe',0,'1','7',NULL,NULL),
	(197,966,'SA','Saudi Arabia',0,'25','45',NULL,NULL),
	(198,221,'SN','Senegal',0,'14','-14',NULL,NULL),
	(199,381,'RS','Serbia',0,'44','21',NULL,NULL),
	(200,381,'CS','Serbia and Montenegro',0,NULL,NULL,NULL,NULL),
	(201,248,'SC','Seychelles',0,'-4.58','55.67',NULL,NULL),
	(202,232,'SL','Sierra Leone',0,'8.5','-11.5',NULL,NULL),
	(203,65,'SG','Singapore',0,'1.37','103.8',NULL,NULL),
	(204,1,'SX','Sint Maarten',0,NULL,NULL,NULL,NULL),
	(205,421,'SK','Slovakia',0,'48.67','19.5',NULL,NULL),
	(206,386,'SI','Slovenia',0,'46','15',NULL,NULL),
	(207,677,'SB','Solomon Islands',0,'-8','159',NULL,NULL),
	(208,252,'SO','Somalia',0,'10','49',NULL,NULL),
	(209,27,'ZA','South Africa',0,'-29','24',NULL,NULL),
	(210,500,'GS','South Georgia and the South Sandwich Islands',0,'-54.5','-37',NULL,NULL),
	(211,211,'SS','South Sudan',0,NULL,NULL,NULL,NULL),
	(212,34,'ES','Spain',0,'40','-4',NULL,NULL),
	(213,94,'LK','Sri Lanka',0,'7','81',NULL,NULL),
	(214,249,'SD','Sudan',0,'15','30',NULL,NULL),
	(215,597,'SR','Suriname',0,'4','-56',NULL,NULL),
	(216,47,'SJ','Svalbard and Jan Mayen',0,'78','20',NULL,NULL),
	(217,268,'SZ','Swaziland',0,'-26.5','31.5',NULL,NULL),
	(218,46,'SE','Sweden',0,'62','15',NULL,NULL),
	(219,41,'CH','Switzerland',0,'47','8',NULL,NULL),
	(220,963,'SY','Syrian Arab Republic',0,'35','38',NULL,NULL),
	(221,886,'TW','Taiwan, Province of China',0,'23.5','121',NULL,NULL),
	(222,992,'TJ','Tajikistan',0,'39','71',NULL,NULL),
	(223,255,'TZ','Tanzania, United Republic of',0,'-6','35',NULL,NULL),
	(224,66,'TH','Thailand',0,'15','100',NULL,NULL),
	(225,670,'TL','Timor-Leste',0,NULL,NULL,NULL,NULL),
	(226,228,'TG','Togo',0,'8','1.17',NULL,NULL),
	(227,690,'TK','Tokelau',0,'-9','-172',NULL,NULL),
	(228,676,'TO','Tonga',0,'-20','-175',NULL,NULL),
	(229,1868,'TT','Trinidad and Tobago',0,'11','-61',NULL,NULL),
	(230,216,'TN','Tunisia',0,'34','9',NULL,NULL),
	(231,90,'TR','Turkey',0,'39','35',NULL,NULL),
	(232,7370,'TM','Turkmenistan',0,'40','60',NULL,NULL),
	(233,1649,'TC','Turks and Caicos Islands',0,'21.75','-71.58',NULL,NULL),
	(234,688,'TV','Tuvalu',0,'-8','178',NULL,NULL),
	(235,256,'UG','Uganda',0,'1','32',NULL,NULL),
	(236,380,'UA','Ukraine',0,'49','32',NULL,NULL),
	(237,971,'AE','United Arab Emirates',0,'24','54',NULL,NULL),
	(238,44,'GB','United Kingdom',0,'54','-2',NULL,NULL),
	(239,1,'US','United States',0,'38','-97',NULL,NULL),
	(240,1,'UM','United States Minor Outlying Islands',0,'19.28','166.6',NULL,NULL),
	(241,598,'UY','Uruguay',0,'-33','-56',NULL,NULL),
	(242,998,'UZ','Uzbekistan',0,'41','64',NULL,NULL),
	(243,678,'VU','Vanuatu',0,'-16','167',NULL,NULL),
	(244,58,'VE','Venezuela',0,'8','-66',NULL,NULL),
	(245,84,'VN','Viet Nam',0,'16','106',NULL,NULL),
	(246,1284,'VG','Virgin Islands, British',0,'18.5','-64.5',NULL,NULL),
	(247,1340,'VI','Virgin Islands, U.s.',0,'18.33','-64.83',NULL,NULL),
	(248,681,'WF','Wallis and Futuna',0,'-13.3','-176.2',NULL,NULL),
	(249,212,'EH','Western Sahara',0,'24.5','-13',NULL,NULL),
	(250,967,'YE','Yemen',0,'15','48',NULL,NULL),
	(251,260,'ZM','Zambia',0,'-15','30',NULL,NULL),
	(252,263,'ZW','Zimbabwe',0,'-20','30',NULL,NULL);

/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table credit_cards
# ------------------------------------------------------------

DROP TABLE IF EXISTS `credit_cards`;

CREATE TABLE `credit_cards` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `account_holder` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_payment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BIC` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IBAN` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transit_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wise_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `routing_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_symbol` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `credit_cards` WRITE;
/*!40000 ALTER TABLE `credit_cards` DISABLE KEYS */;

INSERT INTO `credit_cards` (`id`, `account_holder`, `type_payment`, `account_number`, `institution_number`, `BIC`, `IBAN`, `transit_number`, `sort_code`, `wise_address`, `routing_number`, `currency_code`, `currency_symbol`, `created_at`, `updated_at`)
VALUES
	(1,'REKSA PRAYOGA S','US DOLLAR MANUAL PAYMENT','9600000000081031','','','','','','19 W 24th Street New York NY 10010 United States','084009519','USD','$','2022-04-22 00:00:00','2022-04-22 00:00:00'),
	(2,'REKSA PRAYOGA S','EURO MANUAL PAYMENT','','','TRWIBEB1XXX','BE17 9671 7400 4121','','','Avenue Louise 54, Room S52 Brussels 1050 Belgium','','EUR','€','2022-04-22 00:00:00','2022-04-22 00:00:00'),
	(3,'REKSA PRAYOGA S','BRITISH POUND MANUAL PAYMENT','29470731',NULL,NULL,'GB76 TRWI 2314 7029 4707 31',NULL,'23-14-70','56 Shoreditch High Street London E1 6JJ United',NULL,'GBP','£',NULL,NULL),
	(4,'REKSA PRAYOGA S','CANADIAN DOLLAR MANUAL PAYMENT','200110029849','621',NULL,NULL,'16001',NULL,'99 Bank Street, Suite 1420 Ottawa ON K1P 1H4 Canada',NULL,'CAD','C$',NULL,NULL);

/*!40000 ALTER TABLE `credit_cards` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table faqs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `faqs`;

CREATE TABLE `faqs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;

INSERT INTO `faqs` (`id`, `title`, `description`, `created_at`, `updated_at`)
VALUES
	(4,'Bagaimana cara mengekspor tanaman?','Untuk mengekspor tanaman, pastikan Anda memiliki izin ekspor dari otoritas terkait. Kemudian, pilih tanaman yang akan diekspor, siapkan dokumen yang diperlukan, dan gunakan layanan logistik yang mendukung pengiriman internasional.','2025-03-11 21:09:23',NULL),
	(5,'Apa saja persyaratan untuk mengimpor tanaman?','Persyaratan impor tanaman berbeda-beda tergantung negara tujuan. Umumnya, Anda memerlukan sertifikat fitosanitari, izin impor, serta memastikan tanaman tidak masuk dalam daftar tanaman terlarang.','2025-03-11 21:09:23',NULL),
	(6,'Bagaimana cara mendapatkan sertifikat fitosanitari?','Sertifikat fitosanitari dapat diperoleh dari dinas pertanian setempat. Tanaman akan diperiksa kesehatannya sebelum sertifikat diterbitkan.','2025-03-11 21:09:23',NULL),
	(7,'Apakah ada pembatasan untuk tanaman yang dapat diekspor?','Ya, beberapa tanaman mungkin memiliki pembatasan ekspor tergantung pada peraturan negara asal dan tujuan. Pastikan untuk memeriksa daftar tanaman yang dilarang atau dibatasi.','2025-03-11 21:09:23',NULL),
	(8,'Bagaimana cara mengemas tanaman agar aman selama pengiriman?','Gunakan media tanam yang sesuai, pastikan akar tetap lembab, dan kemas tanaman dengan bahan yang kuat tetapi tetap memberikan ventilasi. Penggunaan kotak kayu atau plastik dengan lubang udara sangat disarankan.','2025-03-11 21:09:23',NULL),
	(9,'Berapa lama waktu yang dibutuhkan untuk ekspor tanaman?','Waktu ekspor tanaman tergantung pada proses perizinan, ketersediaan transportasi, dan regulasi negara tujuan. Biasanya, proses ini memakan waktu antara beberapa hari hingga beberapa minggu.','2025-03-11 21:09:23',NULL),
	(10,'Apakah ada pajak atau biaya tambahan saat mengimpor tanaman?','Ya, impor tanaman biasanya dikenakan pajak bea cukai dan biaya inspeksi. Pastikan untuk mengecek regulasi pajak di negara tujuan sebelum melakukan impor.','2025-03-11 21:09:23',NULL),
	(11,'Bagaimana cara memastikan tanaman tetap sehat selama proses impor?','Pastikan tanaman dikemas dengan baik, gunakan nutrisi tambahan jika diperlukan, dan segera lakukan aklimatisasi setelah tiba di lokasi tujuan.','2025-03-11 21:09:23',NULL),
	(12,'Bisakah saya mengimpor tanaman dari luar negeri untuk dijual kembali?','Tentu, tetapi Anda harus memiliki izin usaha, izin impor, serta memastikan kepatuhan terhadap regulasi perdagangan tanaman di negara Anda.','2025-03-11 21:09:23',NULL),
	(13,'Di mana saya bisa mendapatkan daftar tanaman yang dilarang untuk impor?','Anda dapat mengakses daftar tanaman yang dilarang impor di situs web otoritas pertanian atau bea cukai di negara tujuan.','2025-03-11 21:09:23',NULL);

/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table invoices
# ------------------------------------------------------------

DROP TABLE IF EXISTS `invoices`;

CREATE TABLE `invoices` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode_transaksi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `currency` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `hasPaid` tinyint(1) NOT NULL,
  `tax` double DEFAULT NULL,
  `nama_penerima` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_penerima` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_penerima` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `negara_tujuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi_tujuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_tujuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` enum('1','2','3') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1 : Pembayaran Manual , 2 Pembayaran Paypall , Pembayaran Xendit',
  `manual_file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `manual_payment_id` int DEFAULT NULL,
  `shipping_method` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_price` double DEFAULT NULL,
  `no_resi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_resi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plants` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `invoices` WRITE;
/*!40000 ALTER TABLE `invoices` DISABLE KEYS */;

INSERT INTO `invoices` (`id`, `kode_transaksi`, `total_price`, `date`, `currency`, `status`, `hasPaid`, `tax`, `nama_penerima`, `alamat_penerima`, `email_penerima`, `negara_tujuan`, `provinsi_tujuan`, `kota_tujuan`, `zipcode`, `payment_method`, `manual_file`, `manual_payment_id`, `shipping_method`, `shipping_price`, `no_resi`, `file_resi`, `plants`, `created_at`, `updated_at`)
VALUES
	(8,'MTPLC-PLT-#UJ11655312769','3','2022-06-15',NULL,NULL,0,NULL,'Consequatur Nam nem','Magni omnis qui illo','dadogeqe@mailinator.com','Porro porro ipsum si','Rerum quo maxime lab','Excepteur sit moles','76283',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'[[\"3\"],[\"2\"],[\"3\"]]',NULL,NULL);

/*!40000 ALTER TABLE `invoices` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table job_batches
# ------------------------------------------------------------

DROP TABLE IF EXISTS `job_batches`;

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(19,'2014_10_12_000000_create_users_table',1),
	(20,'2014_10_12_100000_create_password_resets_table',1),
	(21,'2019_08_19_000000_create_failed_jobs_table',1),
	(22,'2019_12_14_000001_create_personal_access_tokens_table',1),
	(23,'2022_02_11_173430_create_plants_table',1),
	(24,'2022_02_11_173433_create_plant_table',1),
	(25,'2022_02_11_173439_create_order_table',1),
	(26,'2022_02_11_173445_create_cart_table',1),
	(27,'2022_02_11_174319_create_history_transaksi_table',1),
	(28,'0001_01_01_000000_create_users_table',2),
	(29,'0001_01_01_000001_create_cache_table',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table notifications
# ------------------------------------------------------------

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `for` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;

INSERT INTO `notifications` (`id`, `title`, `message`, `for`, `created_at`, `updated_at`)
VALUES
	(8,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 37/PA/SPm/P1/II/2022 has been changed status to Your Request Is Accepted, Please Complete Payment',39,NULL,NULL),
	(9,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 40/PA/SPn/P2/II/2025 has been Approved ',39,NULL,NULL),
	(10,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 40/PA/SPn/P2/II/2025 has been changed status to Your Request Is Accepted, Please Complete Payment',39,NULL,NULL),
	(11,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 40/PA/SPn/P2/II/2025 has been changed status to Quarantine Process',39,NULL,NULL),
	(12,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 40/PA/SPn/P2/II/2025 has been changed status to Delivery',39,NULL,NULL),
	(13,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 40/PA/SPn/P2/II/2025 has been changed status to Done',39,NULL,NULL),
	(14,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 40/PA/SPn/P2/II/2025 has been changed status to Verifikasi Teknis',39,NULL,NULL),
	(15,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 40/PA/SPn/P2/II/2025 has been changed status to Your Request Is Accepted, Please Complete Payment',39,NULL,NULL),
	(16,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 42/PA/SPn/P2/III/2025 has been Approved ',39,NULL,NULL),
	(17,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 42/PA/SPn/P2/III/2025 has been changed status to Your Request Is Accepted, Please Complete Payment',39,NULL,NULL),
	(18,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 42/PA/SPn/P2/III/2025 has been changed status to Quarantine Process',39,NULL,NULL),
	(19,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 42/PA/SPn/P2/III/2025 has been changed status to Delivery',39,NULL,NULL),
	(20,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 42/PA/SPn/P2/III/2025 has been changed status to Done',39,NULL,NULL),
	(21,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 44/PA/SPn/P2/III/2025 has been Approved ',51,NULL,NULL),
	(22,'New Request Has Been Created','New Request Has Been Created , with ID = 46/PA/SPm/P1/IV/2025',0,NULL,NULL),
	(23,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 45/PA/SPn/P2/IV/2025 has been Approved ',52,NULL,NULL),
	(24,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 45/PA/SPn/P2/IV/2025 has been changed status to Verifikasi Teknis',52,NULL,NULL),
	(25,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 45/PA/SPn/P2/IV/2025 has been changed status to Approval Director General',52,NULL,NULL),
	(26,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 45/PA/SPn/P2/IV/2025 has been changed status to Your Request Is Accepted, Please Complete Payment',52,NULL,NULL),
	(27,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 46/PA/SPn/P2/IV/2025 has been Approved ',52,NULL,NULL),
	(28,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 46/PA/SPn/P2/IV/2025 has been changed status to Your Request Is Accepted, Please Complete Payment',52,NULL,NULL),
	(29,'New Request Has Been Created','New Request Has Been Created , with ID = 47/PA/SPm/P1/IV/2025',0,NULL,NULL),
	(30,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 47/PA/SPn/P2/IV/2025 has been Approved ',52,NULL,NULL),
	(31,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 47/PA/SPn/P2/IV/2025 has been changed status to Your Request Is Accepted, Please Complete Payment',52,NULL,NULL),
	(32,'New Request Has Been Created','New Request Has Been Created , with ID = 48/PA/SPm/P1/IV/2025',0,NULL,NULL),
	(33,'New Request Has Been Created','New Request Has Been Created , with ID = 49/PA/SPm/P1/V/2025',0,NULL,NULL),
	(34,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 49/PA/SPn/P2/V/2025 has been Approved ',52,NULL,NULL),
	(35,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 49/PA/SPn/P2/V/2025 has been changed status to Verifikasi Teknis',52,NULL,NULL),
	(36,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 49/PA/SPn/P2/V/2025 has been changed status to Approval Director General',52,NULL,NULL),
	(37,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 49/PA/SPn/P2/V/2025 has been changed status to Your Request Is Accepted, Please Complete Payment',52,NULL,NULL),
	(38,'New Request Has Been Created','New Request Has Been Created , with ID = 50/PA/SPm/P1/V/2025',0,NULL,NULL),
	(39,'New Request Has Been Created','New Request Has Been Created , with ID = 52/PA/SPm/P1/V/2025',0,NULL,NULL),
	(40,'New Request Has Been Created','New Request Has Been Created , with ID = 53/PA/SPm/P1/V/2025',0,NULL,NULL),
	(41,'New Request Has Been Created','New Request Has Been Created , with ID = 1/PA/SPm/P1/V/2025',0,NULL,NULL),
	(42,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 1/PA/SPn/P2/V/2025 has been Approved ',52,NULL,NULL),
	(43,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 1/PA/SPn/P2/V/2025 has been changed status to Your Request Is Accepted, Please Complete Payment',52,NULL,NULL),
	(44,'New Request Has Been Created','New Request Has Been Created , with ID = 2/PA/SPm/P1/V/2025',0,NULL,NULL),
	(45,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 2/PA/SPn/P2/V/2025 has been Approved ',52,NULL,NULL),
	(46,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 2/PA/SPn/P2/V/2025 has been changed status to Your Request Is Accepted, Please Complete Payment',52,NULL,NULL),
	(47,'New Request Has Been Created','New Request Has Been Created , with ID = 3/PA/SPm/P1/V/2025',0,NULL,NULL),
	(48,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 3/PA/SPn/P2/V/2025 has been Approved ',52,NULL,NULL),
	(49,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 3/PA/SPn/P2/V/2025 has been changed status to Your Request Is Accepted, Please Complete Payment',52,NULL,NULL),
	(50,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 3/PA/SPn/P2/V/2025 has been changed status to Quarantine Process',52,NULL,NULL),
	(51,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 3/PA/SPn/P2/V/2025 has been changed status to Delivery',52,NULL,NULL),
	(52,'New Request Has Been Created','New Request Has Been Created , with ID = 4/PA/SPm/P1/V/2025',0,NULL,NULL),
	(53,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 4/PA/SPn/P2/V/2025 has been Approved ',52,NULL,NULL),
	(54,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 4/PA/SPn/P2/V/2025 has been changed status to Your Request Is Accepted, Please Complete Payment',52,NULL,NULL),
	(55,'New Request Has Been Created','New Request Has Been Created , with ID = 5/PA/SPm/P1/V/2025',0,NULL,NULL),
	(56,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 5/PA/SPn/P2/V/2025 has been Approved ',52,NULL,NULL),
	(57,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 5/PA/SPn/P2/V/2025 has been changed status to Your Request Is Accepted, Please Complete Payment',52,NULL,NULL),
	(58,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 5/PA/SPn/P2/V/2025 has been changed status to Done',52,NULL,NULL),
	(59,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 4/PA/SPn/P2/V/2025 has been changed status to Approval Director General',52,NULL,NULL),
	(60,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 4/PA/SPn/P2/V/2025 has been changed status to Approved',52,NULL,NULL),
	(61,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 4/PA/SPn/P2/V/2025 has been changed status to Waiting For Approval',52,NULL,NULL),
	(62,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 4/PA/SPn/P2/V/2025 has been changed status to Your Request Is Accepted, Please Complete Payment',52,NULL,NULL),
	(63,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 4/PA/SPn/P2/V/2025 has been changed status to Approved',52,NULL,NULL),
	(64,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 4/PA/SPn/P2/V/2025 has been changed status to Approval Director General',52,NULL,NULL),
	(65,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 4/PA/SPn/P2/V/2025 has been changed status to Your Request Is Accepted, Please Complete Payment',52,NULL,NULL),
	(66,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 3/PA/SPn/P2/V/2025 has been changed status to Done',52,NULL,NULL),
	(67,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 3/PA/SPn/P2/V/2025 has been changed status to Delivery',52,NULL,NULL),
	(68,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 3/PA/SPn/P2/V/2025 has been changed status to Done',52,NULL,NULL),
	(69,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 3/PA/SPn/P2/V/2025 has been changed status to Delivery',52,NULL,NULL),
	(70,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 3/PA/SPn/P2/V/2025 has been changed status to Done',52,NULL,NULL),
	(71,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 5/PA/SPn/P2/V/2025 has been changed status to Delivery',52,NULL,NULL),
	(72,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 5/PA/SPn/P2/V/2025 has been changed status to Done',52,NULL,NULL),
	(73,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 5/PA/SPn/P2/V/2025 has been changed status to Your Request Is Accepted, Please Complete Payment',52,NULL,NULL),
	(74,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 3/PA/SPn/P2/V/2025 has been changed status to Delivery',52,NULL,NULL),
	(75,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 5/PA/SPn/P2/V/2025 has been changed status to Delivery',52,NULL,NULL),
	(76,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 3/PA/SPn/P2/V/2025 has been changed status to Delivery',52,NULL,NULL),
	(77,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 5/PA/SPn/P2/V/2025 has been changed status to Delivery',52,NULL,NULL),
	(78,'New Request Has Been Created','New Request Has Been Created , with ID = 6/PA/SPm/P1/VIII/2025',0,NULL,NULL),
	(79,'Your Request Has Been Decline','Hello Sir / Ma\'am , Your request with ID = 6/PA/SPn/P2/VIII/2025 has been Declined ',52,NULL,NULL),
	(80,'New Request Has Been Created','New Request Has Been Created , with ID = 7/PA/SPm/P1/VIII/2025',0,NULL,NULL),
	(81,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 7/PA/SPn/P2/VIII/2025 has been Approved ',52,NULL,NULL),
	(82,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 7/PA/SPn/P2/VIII/2025 has been changed status to Verifikasi Teknis',52,NULL,NULL),
	(83,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 7/PA/SPn/P2/VIII/2025 has been changed status to Approval Director General',52,NULL,NULL),
	(84,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 7/PA/SPn/P2/VIII/2025 has been changed status to Your Request Is Accepted, Please Complete Payment',52,NULL,NULL),
	(85,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 7/PA/SPn/P2/VIII/2025 has been changed status to Quarantine Process',52,NULL,NULL),
	(86,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 7/PA/SPn/P2/VIII/2025 has been changed status to Delivery',52,NULL,NULL),
	(87,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 7/PA/SPn/P2/VIII/2025 has been changed status to Quarantine Process',52,NULL,NULL),
	(88,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 7/PA/SPn/P2/VIII/2025 has been changed status to Delivery',52,NULL,NULL),
	(89,'New Request Has Been Created','Hello Sir / Ma\'am , Your request with ID = 7/PA/SPn/P2/VIII/2025 has been changed status to Done',52,NULL,NULL);

/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `kode_transaksi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `currency` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price_after_disc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `hasPaid` tinyint(1) NOT NULL,
  `discount_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `tax` double DEFAULT NULL,
  `nama_penerima` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_penerima` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_penerima` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `negara_tujuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi_tujuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_tujuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` enum('1','2','3') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1 : Pembayaran Manual , 2 Pembayaran Paypall , Pembayaran Xendit',
  `manual_file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `manual_payment_id` int DEFAULT NULL,
  `shipping_method` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_price` double DEFAULT NULL,
  `no_resi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_resi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table password_reset_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table personal_access_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table plant_attributes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `plant_attributes`;

CREATE TABLE `plant_attributes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `stock` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table plants
# ------------------------------------------------------------

DROP TABLE IF EXISTS `plants`;

CREATE TABLE `plants` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `wholesale_price` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `thumb` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `category_id` bigint unsigned NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `plant_category_id_foreign` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `plants` WRITE;
/*!40000 ALTER TABLE `plants` DISABLE KEYS */;

INSERT INTO `plants` (`id`, `name`, `color`, `size`, `stock`, `price`, `wholesale_price`, `thumb`, `category_id`, `description`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'Plant Anggrek',NULL,NULL,'941',2,'{\"10\":\"1.5\",\"15\":\"1.2\",\"20\":\"1.0\"}','[\"1745900398-1000648478-scaled.jpg\"]',118,'Cuma Plant',1,'2022-05-26 15:56:48','2025-05-30 11:27:15'),
	(2,'Plant Bukita',NULL,NULL,'983',3,'{\"10\":\"1.5\",\"15\":\"1.2\",\"20\":\"1.0\"}','[\"1745900437-f10u5x9qbwxez4c.jpeg\"]',110,'Cuma Plant',1,'2022-05-26 15:56:48','2025-05-23 02:54:39'),
	(3,'Plant Ceremai',NULL,NULL,'6',4,'{\"10\":\"1.5\",\"15\":\"1.2\",\"20\":\"1.0\"}','[\"1745900516-f4243740-19c3-410e-99f7-8b45f2e94c7c.jpg\"]',117,'Cuma Plant',1,'2022-05-26 15:56:48','2025-05-27 02:14:29'),
	(4,'Plant Dialosipaola',NULL,NULL,'998',5,'{\"10\":\"1.5\",\"15\":\"1.2\",\"20\":\"1.0\"}','[\"1653580608-tanaman-hias-yang-tidak-membutuhkan-banyak-sinar-matahari-6_43.jpeg\"]',118,'Cuma Plant',1,'2022-05-26 15:56:48','2025-05-23 03:01:52');

/*!40000 ALTER TABLE `plants` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pricings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pricings`;

CREATE TABLE `pricings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `count` int NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `pricings` WRITE;
/*!40000 ALTER TABLE `pricings` DISABLE KEYS */;

INSERT INTO `pricings` (`id`, `count`, `value`)
VALUES
	(1,10,'1'),
	(2,20,'1.7'),
	(4,1,'5000');

/*!40000 ALTER TABLE `pricings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`)
VALUES
	('7Z5n3jOz0tUYIsXTM7Ym3F4unNgR5Zo1AeSRoRRU',NULL,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:141.0) Gecko/20100101 Firefox/141.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoicTVJVUtwT2d1c1FsZFAyUVhvSVNPZ0FseXZ0b0haOUQ3aGxQcDBPSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1750914651),
	('AVmfA45nFceWgGVV9qc9vUY03g2ss24XgBajabsK',52,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:141.0) Gecko/20100101 Firefox/141.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNzRTMkU4WFh0cEsxam5oVW9tSEdJOTQ1WTR2aktlemlaUTBsb3YxZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjUyO30=',1750917244),
	('bvcxusC4kDdrrZ5nfwa2ZmUVsQHd96e4H4iEMoRc',NULL,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:141.0) Gecko/20100101 Firefox/141.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZjVqTEgwMDBqZmRWZW9MdVZFZWV0NjFKSXNSOGxUUXFMMTFzckZseCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1750916476),
	('fzNMwQiJNcavxBKlAKWh7MLaeFDfeojyxrSblZx1',NULL,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:141.0) Gecko/20100101 Firefox/141.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVGVyaEQ3eW91WlZWVFlqakFqU2g3TU9xTnRDUml2V2hQS0pJcHI4QiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1750916476),
	('l56o9QlDk9A7giEWt9JK6hdkI9aG3M8IZoa0q01c',NULL,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.1 Safari/605.1.15','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVGEwQld0RzVYeXR1UThUS3R0ZGpYY1p6UjhINlljdkZKak1UOVBDYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1750896458),
	('LzRbSBBqUtcBysBmdUBiYecu1W5zYnAy00SVvwWo',52,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.1 Safari/605.1.15','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiakRmOVJPRm9teUxBSEkzU25NcTZYbnFUMDFJdlVKbklWNzZocFBJOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjUyO30=',1748605177),
	('Nmk00pF1Ye77ydxZlLvzhtDeGxmFzLBJQBusFVGL',NULL,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:141.0) Gecko/20100101 Firefox/141.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoieHFDRm0xVm9PUHc1YmVEbktmam1pVkxDckloaTk4d0tKdTlKS1ZUYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1750896447),
	('z0ad2pey0YcD52zzfctxsAm6NzCOw1pJFOb1syVn',NULL,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.1 Safari/605.1.15','YTozOntzOjY6Il90b2tlbiI7czo0MDoicmh0RmowYzFHMlhzYXk5UXloY3JXOHZDaUtYODJHRExYbFdhdzNTSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1750914644);

/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shipping_fees
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shipping_fees`;

CREATE TABLE `shipping_fees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ship_method` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `shipping_fees` WRITE;
/*!40000 ALTER TABLE `shipping_fees` DISABLE KEYS */;

INSERT INTO `shipping_fees` (`id`, `ship_method`, `count`, `price`, `created_at`, `updated_at`)
VALUES
	(1,'DHL',10,'10',NULL,NULL),
	(2,'UPS',10,'11',NULL,NULL),
	(3,'KARGO',10,'12',NULL,NULL),
	(5,'DHL',20,'15',NULL,NULL),
	(6,'UPS',20,'16',NULL,NULL);

/*!40000 ALTER TABLE `shipping_fees` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sub_submissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sub_submissions`;

CREATE TABLE `sub_submissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `pengajuan_id` bigint unsigned NOT NULL,
  `tanaman_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `varietas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sub_pengajuan_pengajuan_id_foreign` (`pengajuan_id`),
  KEY `sub_pengajuan_tanaman_id_foreign` (`tanaman_id`),
  KEY `sub_pengajuan_user_id_foreign` (`user_id`),
  CONSTRAINT `sub_submissions_ibfk_1` FOREIGN KEY (`pengajuan_id`) REFERENCES `submissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sub_submissions_ibfk_2` FOREIGN KEY (`tanaman_id`) REFERENCES `base_plants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table submissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `submissions`;

CREATE TABLE `submissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `pengajuan_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `negara_tujuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penerima` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_penerima` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp_penerima` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_penerima` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_resi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_resi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_lisensi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `no_sip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_pyhto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_pyhto` date DEFAULT NULL,
  `invoice_usd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_tanaman` int DEFAULT NULL,
  `terealisasi` int DEFAULT NULL,
  `ongkir` int DEFAULT NULL,
  `biaya_karantina` int DEFAULT NULL,
  `status_ongkir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `courier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `airplane` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0' COMMENT '-1 = Declined ,0 = menunggu approval, 1 = menunggu pembayaran, 2 = verifikasi teknis, 3 = persetujuan dirjen, 4 = masa inkubasi, 5 = mendapat resi, 6 = tahap ekspor, 7 = selesai',
  `payment_status` enum('1','2','3','4') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1 = menunggu pembayaran, 2 = sudah dibayar, 3 = kadaluarsa, 4 = gagal / batal',
  `jumlah_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status_message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_time` timestamp NULL DEFAULT NULL,
  `payment_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approval_code_payment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snap_token` varchar(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snap_token_tambahan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pengajuan_user_id_foreign` (`user_id`),
  CONSTRAINT `submissions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table terms
# ------------------------------------------------------------

DROP TABLE IF EXISTS `terms`;

CREATE TABLE `terms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `terms` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `terms` WRITE;
/*!40000 ALTER TABLE `terms` DISABLE KEYS */;

INSERT INTO `terms` (`id`, `terms`, `created_at`, `updated_at`)
VALUES
	(1,'h1>Syarat dan Ketentuan</h1>\n    <p>Selamat datang di website kami! Dengan menggunakan layanan kami, Anda setuju untuk mematuhi syarat dan ketentuan berikut.</p>\n    \n    <h2>1. Penggunaan Layanan</h2>\n    <p>Layanan ini disediakan untuk membantu pengguna dalam melakukan ekspor dan impor tanaman. Pengguna harus mematuhi hukum dan regulasi yang berlaku.</p>\n    \n    <h2>2. Hak dan Kewajiban Pengguna</h2>\n    <p>Pengguna bertanggung jawab atas informasi yang mereka unggah dan memastikan bahwa semua transaksi dilakukan secara sah.</p>\n    \n    <h2>3. Kebijakan Privasi</h2>\n    <p>Kami menghormati privasi pengguna dan tidak akan membagikan data pribadi tanpa izin.</p>\n    \n    <h2>4. Perubahan Syarat dan Ketentuan</h2>\n    <p>Kami berhak untuk mengubah ketentuan ini kapan saja. Pengguna disarankan untuk selalu memeriksa halaman ini secara berkala.</p>\n    \n    <h2>5. Hubungi Kami</h2>\n    <p>Jika Anda memiliki pertanyaan lebih lanjut, silakan hubungi kami melalui email atau formulir kontak di website.</p>',NULL,NULL);

/*!40000 ALTER TABLE `terms` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table transaction_histories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `transaction_histories`;

CREATE TABLE `transaction_histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint unsigned NOT NULL,
  `amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `history_transaksi_order_id_foreign` (`order_id`),
  CONSTRAINT `transaction_histories_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int NOT NULL DEFAULT '1',
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `role`, `email`, `phone`, `address`, `email_verified_at`, `password`, `remember_token`, `thumb`, `confirmed`, `created_at`, `updated_at`)
VALUES
	(52,'Farrel Fitra',0,'farrel@gmail.com','0895331493506','Kp Pondok Bitung',NULL,'$2y$12$hvTWs6X5TQ6.8a28HQzpWO2OLYKgTf.KJn6ZGUrn9dk9b5g6x3yW.',NULL,'https://ui-avatars.com/api/?name=Farrel+Fitra&color=7F9CF5&background=EBF4FF',1,'2025-04-28 14:56:33','2025-04-28 14:56:33');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table vouchers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `vouchers`;

CREATE TABLE `vouchers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `disc` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `vouchers` WRITE;
/*!40000 ALTER TABLE `vouchers` DISABLE KEYS */;

INSERT INTO `vouchers` (`id`, `code`, `disc`, `created_at`, `updated_at`)
VALUES
	(1,'XXX',7,NULL,'2022-04-10 06:20:05'),
	(4,'XVXX',10,'2025-04-28 14:59:10','2025-04-28 14:59:10');

/*!40000 ALTER TABLE `vouchers` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
