-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: agence_voyage
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `genre` varchar(10) COLLATE utf8_bin NOT NULL,
  `type` varchar(30) COLLATE utf8_bin NOT NULL,
  `password` varchar(30) COLLATE utf8_bin NOT NULL,
  `image` varchar(100) COLLATE utf8_bin NOT NULL,
  `Phone` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (11,'mery','oumaimaabouelhaitam@gmail.com','1','économiser ','1234','aaa','9JFJFJJFJF'),(12,'mery','oumaimaabouelhaitam@gmail.com','1','économiser ','1234','aaa','9JFJFJJFJF'),(13,'oumaima','o@gmail.com','1','admin_general','1234','mypic','0680855137'),(14,'mery','oumaimaabouelhaitam@gmail.com','1','économiser ','1234','aaa','9JFJFJJFJF'),(15,'mery','oumaimaabouelhaitam@gmail.com','1','économiser ','1234','aaa','9JFJFJJFJF'),(16,'mery','oumaimaabouelhaitam@gmail.com','1','économiser ','1234','aaa','9JFJFJJFJF');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chambre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) COLLATE utf8_bin NOT NULL,
  `taille` varchar(30) COLLATE utf8_bin NOT NULL,
  `discription` text COLLATE utf8_bin NOT NULL,
  `prix` float NOT NULL,
  `remise` float NOT NULL,
  `image` varchar(100) COLLATE utf8_bin NOT NULL,
  `id_hotel` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_hotel` (`id_hotel`),
  CONSTRAINT `id_hotel` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chambre`
--

LOCK TABLES `chambre` WRITE;
/*!40000 ALTER TABLE `chambre` DISABLE KEYS */;
INSERT INTO `chambre` VALUES (3,'économiser ','1','Join With Us Within 21 January, 2018 And Get Upto 40% Discount\r\n',700,2,'ifran2.jpg',5),(4,'standard ','3','Join With Us Within 21 January, 2018 And Get Upto 40% Discount\r\n',900,5,'Marrakech.jpg',6),(5,'économiser ','1','HHHHHHHHHHHHHHHHHHHHHHHHH',700,2,'hbiqa-pavilion.jpg',7);
/*!40000 ALTER TABLE `chambre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `commentaire` varchar(200) COLLATE utf8_bin NOT NULL,
  `image` varchar(60) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'oumaima','									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. \r\n','1ca8.jpg'),(2,'mery','									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. \r\n','ulzzangs .jpg'),(3,'dounia','									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. \r\n','The.jpg'),(4,'maemoun','									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. \r\n','The.jpg');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `subjet` varchar(100) COLLATE utf8_bin NOT NULL,
  `message` varchar(300) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'ouma','abou','zzzz','dddzdz');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `etoile` int(11) NOT NULL,
  `ville` varchar(20) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(30) COLLATE utf8_bin NOT NULL,
  `image` varchar(100) COLLATE utf8_bin NOT NULL,
  `nbrchambre` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel`
--

LOCK TABLES `hotel` WRITE;
/*!40000 ALTER TABLE `hotel` DISABLE KEYS */;
INSERT INTO `hotel` VALUES (5,'nigagire',4,'Laayoune','hay al amal','Marrakech.jpg',5),(6,'Westpoint ',5,'Dakhla','HAY AL QASSAM','ifran2.jpg',4),(7,'ifran',4,'sidiifni','hay al amal','hbiqa-pavilion.jpg',5);
/*!40000 ALTER TABLE `hotel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) COLLATE utf8_bin NOT NULL,
  `password` varchar(30) COLLATE utf8_bin NOT NULL,
  `type` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organisation`
--

DROP TABLE IF EXISTS `organisation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `organisation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_hotel` int(11) NOT NULL,
  `id_voyage` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_voyage` (`id_voyage`),
  CONSTRAINT `id_voyage` FOREIGN KEY (`id_voyage`) REFERENCES `voyage` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organisation`
--

LOCK TABLES `organisation` WRITE;
/*!40000 ALTER TABLE `organisation` DISABLE KEYS */;
/*!40000 ALTER TABLE `organisation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tour`
--

DROP TABLE IF EXISTS `tour`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_de_group` int(11) NOT NULL,
  `duree` int(11) NOT NULL,
  `nbr_place_de_tour` int(11) NOT NULL,
  `prix` float NOT NULL,
  `remise` int(11) NOT NULL,
  `Description` varchar(200) COLLATE utf8_bin NOT NULL,
  `image` varchar(200) COLLATE utf8_bin NOT NULL,
  `voyage` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `voyage` (`voyage`),
  CONSTRAINT `voyage` FOREIGN KEY (`voyage`) REFERENCES `voyage` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tour`
--

LOCK TABLES `tour` WRITE;
/*!40000 ALTER TABLE `tour` DISABLE KEYS */;
INSERT INTO `tour` VALUES (18,10,15,15,700,2,'Identify web technologies\nWappalyzer is a browser extension that uncovers the technologies used on websites. It detects content management systems, web shops, web servers, JavaScript frameworks, analy','',3),(19,30,15,7,700,2,'Happy<span>Travel</span>','Sahara-Maroc-Morocco-e1562965551379.jpg',6),(20,20,15,15,12,0,'marzoga.jpgmarzoga.jpgmarzoga.jpgmarzoga.jpgmarzoga.jpg','marzoga.jpg',5),(21,6,4,1,12,0,'marzoga.jpgmarzoga.jpgmarzoga.jpg','image4.jpeg',7),(22,10,15,15,12,2,'AAQSSSAZ','Sahara-Maroc-Morocco-e1562965551379.jpg',4),(23,11,23,22,1222,0,'ZZ2Z','Sahara-Maroc-Morocco-e1562965551379.jpg',6);
/*!40000 ALTER TABLE `tour` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type`
--

LOCK TABLES `type` WRITE;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` VALUES (1,'admin_general'),(2,'admin secondaire'),(5,'Agent'),(6,'client');
/*!40000 ALTER TABLE `type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ville`
--

DROP TABLE IF EXISTS `ville`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `ville` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ville`
--

LOCK TABLES `ville` WRITE;
/*!40000 ALTER TABLE `ville` DISABLE KEYS */;
INSERT INTO `ville` VALUES (1,'Aïn Harrouda'),(2,'Ben Yakhlef'),(3,'Bouskoura'),(4,'Casablanca'),(5,'Médiouna'),(6,'Mohammadia'),(7,'Tit Mellil'),(8,'Ben Yakhlef'),(9,'Bejaâd'),(10,'Ben Ahmed'),(11,'Benslimane'),(12,'Berrechid'),(13,'Boujniba'),(14,'Boulanouare'),(15,'Bouznika'),(16,'Deroua'),(17,'El Borouj'),(18,'El Gara'),(19,'Guisser'),(20,'Hattane'),(21,'Khouribga'),(22,'Loulad'),(23,'Oued Zem'),(24,'Oulad Abbou'),(25,'Oulad H\'Riz Sahel'),(26,'Oulad M\'rah'),(27,'Oulad Saïd'),(28,'Oulad Sidi Ben Daoud'),(29,'Ras El Aïn'),(30,'Settat'),(31,'Sidi Rahhal Chataï'),(32,'Soualem'),(33,'Azemmour'),(34,'Bir Jdid'),(35,'Bouguedra'),(36,'Echemmaia'),(37,'El Jadida'),(38,'Hrara'),(39,'Ighoud'),(40,'Jamâat Shaim'),(41,'Jorf Lasfar'),(42,'Khemis Zemamra'),(43,'Laaounate'),(44,'Moulay Abdallah'),(45,'Oualidia'),(46,'Oulad Amrane'),(47,'Oulad Frej'),(48,'Oulad Ghadbane'),(49,'Safi'),(50,'Sebt El Maârif'),(51,'Sebt Gzoula'),(52,'Sidi Ahmed'),(53,'Sidi Ali Ban Hamdouc'),(54,'Sidi Bennour'),(55,'Sidi Bouzid'),(56,'Sidi Smaïl'),(57,'Youssoufia'),(58,'Fès'),(59,'Aïn Cheggag'),(60,'Bhalil'),(61,'Boulemane'),(62,'El Menzel'),(63,'Guigou'),(64,'Imouzzer Kandar'),(65,'Imouzzer Marmoucha'),(66,'Missour'),(67,'Moulay Yaâcoub'),(68,'Ouled Tayeb'),(69,'Outat El Haj'),(70,'Ribate El Kheir'),(71,'Séfrou'),(72,'Skhinate'),(73,'Tafajight'),(74,'Arbaoua'),(75,'Aïn Dorij'),(76,'Dar Gueddari'),(77,'Had Kourt'),(78,'Jorf El Melha'),(79,'Kénitra'),(80,'Khenichet'),(81,'Lalla Mimouna'),(82,'Mechra Bel Ksiri'),(83,'Mehdia'),(84,'Moulay Bousselham'),(85,'Sidi Allal Tazi'),(86,'Sidi Kacem'),(87,'Sidi Slimane'),(88,'Sidi Taibi'),(89,'Sidi Yahya El Gharb'),(90,'Souk El Arbaa'),(91,'Akka'),(92,'Assa'),(93,'Bouizakarne'),(94,'El Ouatia'),(95,'Es-Semara'),(96,'Fam El Hisn'),(97,'Foum Zguid'),(98,'Guelmim'),(99,'Taghjijt'),(100,'Tan-Tan'),(101,'Tata'),(102,'Zag'),(103,'Marrakech'),(104,'Ait Daoud'),(115,'Amizmiz'),(116,'Assahrij'),(117,'Aït Ourir'),(118,'Ben Guerir'),(119,'Chichaoua'),(120,'El Hanchane'),(121,'El Kelaâ des Sraghna'),(122,'Essaouira'),(123,'Fraïta'),(124,'Ghmate'),(125,'Ighounane'),(126,'Imintanoute'),(127,'Kattara'),(128,'Lalla Takerkoust'),(129,'Loudaya'),(130,'Lâattaouia'),(131,'Moulay Brahim'),(132,'Mzouda'),(133,'Ounagha'),(134,'Sid L\'Mokhtar'),(135,'Sid Zouin'),(136,'Sidi Abdallah Ghiat'),(137,'Sidi Bou Othmane'),(138,'Sidi Rahhal'),(139,'Skhour Rehamna'),(140,'Smimou'),(141,'Tafetachte'),(142,'Tahannaout'),(143,'Talmest'),(144,'Tamallalt'),(145,'Tamanar'),(146,'Tamansourt'),(147,'Tameslouht'),(148,'Tanalt'),(149,'Zeubelemok'),(150,'Meknès‎'),(151,'Khénifra'),(152,'Agourai'),(153,'Ain Taoujdate'),(154,'MyAliCherif'),(155,'Rissani'),(156,'Amalou Ighriben'),(157,'Aoufous'),(158,'Arfoud'),(159,'Azrou'),(160,'Aïn Jemaa'),(161,'Aïn Karma'),(162,'Aïn Leuh'),(163,'Aït Boubidmane'),(164,'Aït Ishaq'),(165,'Boudnib'),(166,'Boufakrane'),(167,'Boumia'),(168,'El Hajeb'),(169,'Elkbab'),(170,'Er-Rich'),(171,'Errachidia'),(172,'Gardmit'),(173,'Goulmima'),(174,'Gourrama'),(175,'Had Bouhssoussen'),(176,'Haj Kaddour'),(177,'Ifrane'),(178,'Itzer'),(179,'Jorf'),(180,'Kehf Nsour'),(181,'Kerrouchen'),(182,'M\'haya'),(183,'M\'rirt'),(184,'Midelt'),(185,'Moulay Ali Cherif'),(186,'Moulay Bouazza'),(187,'Moulay Idriss Zerhou'),(188,'Moussaoua'),(189,'N\'Zalat Bni Amar'),(190,'Ouaoumana'),(191,'Oued Ifrane'),(192,'Sabaa Aiyoun'),(193,'Sebt Jahjouh'),(194,'Sidi Addi'),(195,'Tichoute'),(196,'Tighassaline'),(197,'Tighza'),(198,'Timahdite'),(199,'Tinejdad'),(200,'Tizguite'),(201,'Toulal'),(202,'Tounfite'),(203,'Zaouia d\'Ifrane'),(204,'Zaïda'),(205,'Ahfir'),(206,'Aklim'),(207,'Al Aroui'),(208,'Aïn Bni Mathar'),(209,'Aïn Erreggada'),(210,'Ben Taïeb'),(211,'Berkane'),(212,'Bni Ansar'),(213,'Bni Chiker'),(214,'Bni Drar'),(215,'Bni Tadjite'),(216,'Bouanane'),(217,'Bouarfa'),(218,'Bouhdila'),(219,'Dar El Kebdani'),(220,'Debdou'),(221,'Douar Kannine'),(222,'Driouch'),(223,'El Aïoun Sidi Mellou'),(224,'Farkhana'),(225,'Figuig'),(226,'Ihddaden'),(227,'Jaâdar'),(228,'Jerada'),(229,'Kariat Arekmane'),(230,'Kassita'),(231,'Kerouna'),(232,'Laâtamna'),(233,'Madagh'),(234,'Midar'),(235,'Nador'),(236,'Naima'),(237,'Oued Heimer'),(238,'Oujda'),(239,'Ras El Ma'),(240,'Saïdia'),(241,'Selouane'),(242,'Sidi Boubker'),(243,'Sidi Slimane Echchar'),(244,'Talsint'),(245,'Taourirt'),(246,'Tendrara'),(247,'Tiztoutine'),(248,'Touima'),(249,'Touissit'),(250,'Zaïo'),(251,'Zeghanghane'),(252,'Rabat'),(253,'Salé'),(254,'Ain El Aouda'),(255,'Harhoura'),(256,'Khémisset'),(257,'Oulmès'),(258,'Rommani'),(259,'Sidi Allal El Bahrao'),(260,'Sidi Bouknadel'),(261,'Skhirate'),(262,'Tamesna'),(263,'Témara'),(264,'Tiddas'),(265,'Tiflet'),(266,'Touarga'),(267,'Agadir'),(268,'Agdz'),(269,'Agni Izimmer'),(270,'Aït Melloul'),(271,'Alnif'),(272,'Anzi'),(273,'Aoulouz'),(274,'Aourir'),(275,'Arazane'),(276,'Aït Baha'),(277,'Aït Iaâza'),(278,'Aït Yalla'),(279,'Ben Sergao'),(280,'Biougra'),(281,'Boumalne-Dadès'),(282,'Dcheira El Jihadia'),(283,'Drargua'),(284,'El Guerdane'),(285,'Harte Lyamine'),(286,'Ida Ougnidif'),(287,'Ifri'),(288,'Igdamen'),(289,'Ighil n\'Oumgoun'),(290,'Imassine'),(291,'Inezgane'),(292,'Irherm'),(293,'Kelaat-M\'Gouna'),(294,'Lakhsas'),(295,'Lakhsass'),(296,'Lqliâa'),(297,'M\'semrir'),(298,'Massa (Maroc)'),(299,'Megousse'),(300,'Ouarzazate'),(301,'Oulad Berhil'),(302,'Oulad Teïma'),(303,'Sarghine'),(304,'Sidi Ifni'),(305,'Skoura'),(306,'Tabounte'),(307,'Tafraout'),(308,'Taghzout'),(309,'Tagzen'),(310,'Taliouine'),(311,'Tamegroute'),(312,'Tamraght'),(313,'Tanoumrite Nkob Zago'),(314,'Taourirt ait zaghar'),(315,'Taroudannt'),(316,'Temsia'),(317,'Tifnit'),(318,'Tisgdal'),(319,'Tiznit'),(320,'Toundoute'),(321,'Zagora'),(322,'Afourar'),(323,'Aghbala'),(324,'Azilal'),(325,'Aït Majden'),(326,'Beni Ayat'),(327,'Béni Mellal'),(328,'Bin elouidane'),(329,'Bradia'),(330,'Bzou'),(331,'Dar Oulad Zidouh'),(332,'Demnate'),(333,'Dra\'a'),(334,'El Ksiba'),(335,'Foum Jamaa'),(336,'Fquih Ben Salah'),(337,'Kasba Tadla'),(338,'Ouaouizeght'),(339,'Oulad Ayad'),(340,'Oulad M\'Barek'),(341,'Oulad Yaich'),(342,'Sidi Jaber'),(343,'Souk Sebt Oulad Nemm'),(344,'Zaouïat Cheikh'),(345,'Tanger‎'),(346,'Tétouan‎'),(347,'Akchour'),(348,'Assilah'),(349,'Bab Berred'),(350,'Bab Taza'),(351,'Brikcha'),(352,'Chefchaouen'),(353,'Dar Bni Karrich'),(354,'Dar Chaoui'),(355,'Fnideq'),(356,'Gueznaia'),(357,'Jebha'),(358,'Karia'),(359,'Khémis Sahel'),(360,'Ksar El Kébir'),(361,'Larache'),(362,'M\'diq'),(363,'Martil'),(364,'Moqrisset'),(365,'Oued Laou'),(366,'Oued Rmel'),(367,'Ouazzane'),(368,'Point Cires'),(369,'Sidi Lyamani'),(370,'Sidi Mohamed ben Abd'),(371,'Zinat'),(372,'Ajdir‎'),(373,'Aknoul‎'),(374,'Al Hoceïma‎'),(375,'Aït Hichem‎'),(376,'Bni Bouayach‎'),(377,'Bni Hadifa‎'),(378,'Ghafsai‎'),(379,'Guercif‎'),(380,'Imzouren‎'),(381,'Inahnahen‎'),(382,'Issaguen (Ketama)‎'),(383,'Karia (El Jadida)‎'),(384,'Karia Ba Mohamed‎'),(385,'Oued Amlil‎'),(386,'Oulad Zbair‎'),(387,'Tahla‎'),(388,'Tala Tazegwaght‎'),(389,'Tamassint‎'),(390,'Taounate‎'),(391,'Targuist‎'),(392,'Taza‎'),(393,'Taïnaste‎'),(394,'Thar Es-Souk‎'),(395,'Tissa‎'),(396,'Tizi Ouasli‎'),(397,'Laayoune‎'),(398,'El Marsa‎'),(399,'Tarfaya‎'),(400,'Boujdour‎'),(401,'Awsard'),(402,'Oued-Eddahab'),(403,'Stehat'),(404,'Aït Attab');
/*!40000 ALTER TABLE `ville` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voyage`
--

DROP TABLE IF EXISTS `voyage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `voyage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_de_depart` date NOT NULL,
  `date_du_retour` date NOT NULL,
  `destination` varchar(20) COLLATE utf8_bin NOT NULL,
  `ville` varchar(10) COLLATE utf8_bin NOT NULL,
  `image` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voyage`
--

LOCK TABLES `voyage` WRITE;
/*!40000 ALTER TABLE `voyage` DISABLE KEYS */;
INSERT INTO `voyage` VALUES (3,'2022-06-02','2022-06-09','compagne','dakhla','marzoga.jpg'),(4,'2022-06-02','2022-06-09','plage','sidiifni','image4.jpeg'),(5,'2022-06-02','2022-06-02','desert','Laayoune','MA1KNIF_1.jpg'),(6,'2022-06-08','2022-06-14','plage','sidiifni','TARFAYA (3).jpg'),(7,'2022-06-07','2022-06-17','desert','CASA','Sahara-Maroc-Morocco-e1562965551379.jpg');
/*!40000 ALTER TABLE `voyage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voyage_tour`
--

DROP TABLE IF EXISTS `voyage_tour`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `voyage_tour` (
  `id_tout` int(11) NOT NULL,
  `ivoyage` int(11) NOT NULL,
  KEY `id_tour` (`id_tout`),
  CONSTRAINT `id_tour` FOREIGN KEY (`id_tout`) REFERENCES `tour` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voyage_tour`
--

LOCK TABLES `voyage_tour` WRITE;
/*!40000 ALTER TABLE `voyage_tour` DISABLE KEYS */;
/*!40000 ALTER TABLE `voyage_tour` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-08 13:35:30
