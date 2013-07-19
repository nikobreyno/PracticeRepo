CREATE DATABASE  IF NOT EXISTS `healthtime` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `healthtime`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: healthtime
-- ------------------------------------------------------
-- Server version	5.5.28

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
-- Table structure for table `parent`
--

DROP TABLE IF EXISTS `parent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parent` (
  `parent_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `blood_type` varchar(3) DEFAULT NULL,
  `parent_image_id` int(11) DEFAULT NULL,
  `family_id` int(11) DEFAULT NULL,
  `account_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parent`
--

LOCK TABLES `parent` WRITE;
/*!40000 ALTER TABLE `parent` DISABLE KEYS */;
INSERT INTO `parent` VALUES (1,'Aldrich','Choi',1,'email','5f4dcc3b5aa765d61d8327deb882cf99',NULL,NULL,1,NULL),(2,'Juliard','Soriaga',1,'juli','soriaga',NULL,NULL,2,NULL),(3,'juloard','reyno',1,'choichoi','5100e11822ed14fb0a9afc3394b00b3e','A',NULL,NULL,1),(4,'niko','que',1,'corning','857659774af0490b65d62b4f15c74a2a','A',NULL,NULL,1),(5,'nikou','que',1,'corning','857659774af0490b65d62b4f15c74a2a','A',NULL,NULL,1),(6,NULL,NULL,2,NULL,'d41d8cd98f00b204e9800998ecf8427e',NULL,NULL,NULL,1),(7,NULL,NULL,2,NULL,'d41d8cd98f00b204e9800998ecf8427e',NULL,NULL,NULL,1),(8,'nikou','que',1,'corningpp','857659774af0490b65d62b4f15c74a2a','A',NULL,NULL,1),(9,'nikou','que',1,'corningpp','fbbd272dd3dcf5ca5b24c5629d9fba31','A',NULL,NULL,1),(10,'nikou','queu',1,'corningpp','f36123e82cd99065618d09583c3f9ee4','A',NULL,NULL,1),(11,'nikou','queu',1,'corningppbeautifil','f36123e82cd99065618d09583c3f9ee4','A',NULL,NULL,1),(12,'matthew','soriaga',1,'wahoah','b39bb9025313ff165c70a203377c9ab0','A',NULL,NULL,1),(13,'hardgay','ramob',1,'manga','209e6c4e8adad5fa2f9e92b5cc4883ab','A',NULL,NULL,1),(14,'ramoun','hardgay',1,'hallo','7d793037a0760186574b0282f2f435e7','A',NULL,NULL,1),(15,'dptcom','youtube',1,'hello','7d793037a0760186574b0282f2f435e7','A',NULL,NULL,1),(16,'johm','legend',1,'little','43dd5461ea090b1115a4eaab4ee7c80e','A',NULL,NULL,1),(17,'wayne','lil',1,'tenwnw','3189934774aa880fa7fbf8da8f9e446d','A',NULL,NULL,1),(18,'bike','bakc',1,'worldwarz','598d4c200461b81522a3328565c25f7c','A',NULL,NULL,1),(19,'mariah','beautiful',2,'hahahaha','de2f15d014d40b93578d255e6221fd60','A',NULL,NULL,1),(20,'mariah','beautiful',2,'hahahahaw4','de2f15d014d40b93578d255e6221fd60','A',NULL,NULL,1),(21,'bacones','bacon',1,'hackathon','d78b6f30225cdc811adfe8d4e7c9fd34','A',NULL,NULL,1),(22,'Bj mcncb','zbzjccj',1,'messed','332d69e43466a23a1afde44e889f47f6','A',NULL,NULL,1),(23,'xjfkskzbx','qjdjffj',1,'skxncfmfn','76d80224611fc919a5d54f0ff9fba446','A',NULL,NULL,1),(24,'xjfkskzbx','qjdjffj',1,'skxncfmfwecn','76d80224611fc919a5d54f0ff9fba446','A',NULL,NULL,1);
/*!40000 ALTER TABLE `parent` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-07-19  8:25:16
