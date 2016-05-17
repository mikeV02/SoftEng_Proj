-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: softeng
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `softeng`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `softeng` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `softeng`;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `cID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `tmp` int(11) NOT NULL,
  PRIMARY KEY (`cID`),
  UNIQUE KEY `cID` (`cID`),
  KEY `name` (`name`),
  KEY `tmp` (`tmp`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Sports',0);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `user_registered` datetime DEFAULT '0000-00-00 00:00:00',
  `user_status` int(11) DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`),
  KEY `user_login_key` (`user_login`),
  KEY `ID_2` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','Admin','admin','34f3aba31219244bac97957bcc7406ae95f217cf2d7b8bfcc546b6315f89ff55','admin@mikedlv.com','2016-04-08 00:00:00',0,'admin'),(2,'Miguel','De Lora Velasquez','mikedlv','ada27473e6371679432df7e069bac6b4447332d15bac1bf05252708e106a9165','admin@mikedlv.com',NULL,0,'mikedlv'),(3,'Jaewung','Ryu','jryu','cf6b74586a9c5f1a396ab7c0622b463fef5de4ec7c22efa835f1902875af2052','jryu@email.uark.edu',NULL,0,'jryu'),(4,'Tuan','Truong','truongbatuan@gmail.com','090b235e9eb8f197f2dd927937222c570396d971222d9009a9189e2b6cc0a2c1','truongbatuan@gmail.com',NULL,0,'truongbatuan@gmail.com'),(5,'Fabian','Monasterio','frmonast','4e277367962fe66d5fc9a0c6ce788b9d78f59ff72f2768dc984af0a948eb333c','frmonast@email.uark.edu',NULL,0,'frmonast'),(6,'Tuan','Truong','tbt','090b235e9eb8f197f2dd927937222c570396d971222d9009a9189e2b6cc0a2c1','truongbatuan@gmail.com',NULL,0,'tbt'),(7,'Britny','Ryu','bryu','2a90de86ffb95f5702ac276aaefe3c68820f0332af48145c57daf4d70741c878','jryu@uark.edu',NULL,0,'bryu'),(8,'diango','diango','diango','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3','diango@diango.com',NULL,0,'diango'),(9,'Nota','Realname','notarealname','3a1516644d6e3bc5b0280ee34cbc17c4ff6fcc83ee0f90b5f878a801be0b12fb','notarealname@notreal.com',NULL,0,'notarealname'),(10,'duango','duango','duango','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3','duango@duango.com',NULL,0,'duango'),(11,'Benito','Camela','benito','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3','benitocamela@grande.com',NULL,0,'benito'),(12,'Hogs','Uark','hogstest','5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5','hogs@uark.edu',NULL,0,'hogstest'),(13,'herp','derp','herp','831dfc58290c25a3fd8852b2b7a001095914dd0c595f27542da2b7aa91d5b4f3','herp@derp.com',NULL,0,'herp'),(14,'Andres','Diskobomb','andy','26429a356b1d25b7d57c0f9a6d5fed8a290cb42374185887dcd2874548df0779','discuabomb69@hotmail.com',NULL,0,'andy');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `vId` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'AUTO_INCREMENT',
  `name` varchar(30) NOT NULL,
  `url` varchar(100) NOT NULL,
  `uID` int(11) NOT NULL,
  `public` tinyint(1) NOT NULL,
  PRIMARY KEY (`vId`),
  UNIQUE KEY `name` (`name`,`url`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,'rabbit.mp4','http://softeng.mikedlv.com/videos/rabbit.mp4',0,0),(3,'Ulpiano Vergara Gotitas de Amo','http://softeng.mikedlv.com/videos/Ulpiano Vergara Gotitas de Amor [HD, 720p].mp4',0,0),(12,'economicsSydney.mp4','http://softeng.mikedlv.com/videos/economicsSydney.mp4',0,0),(13,'temp_video','http://softeng.mikedlv.com/videos/temp_video',0,0),(14,'capturedvideo.MOV','http://softeng.mikedlv.com/videos/capturedvideo.MOV',0,0),(15,'image.jpg','http://softeng.mikedlv.com/videos/image.jpg',0,0),(16,'trim.42DE647A-DFDE-4223-B929-C','http://softeng.mikedlv.com/videos/trim.42DE647A-DFDE-4223-B929-CEBD4BDB5BD1.MOV',0,0);
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-17 16:58:36
