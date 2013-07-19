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
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(45) DEFAULT NULL,
  `tag_category` int(11) DEFAULT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (61,'#walking',1),(62,'#crawling',1),(63,'#sleeping',1),(64,'#playing',1),(65,'#crying',1),(66,'#studying',1),(67,'#laughing',1),(68,'#exercising',1),(69,'#running',1),(70,'#ate',2),(71,'#eat',2),(72,'#eating',2),(73,'#consuming',2),(74,'#drink_meds',3),(75,'#drank_meds',3),(76,'#drinking_meds',3),(77,'#drunk_meds',3),(78,'#drink_liquids',4),(79,'#drank_liquids',4),(80,'#drinking_liquids',4),(81,'#drunk_liquids',4),(82,'#sick',5),(83,'#not_well',5),(84,'#undertheweather',5),(85,'#injected',6),(86,'#immunized',6),(87,'#vaccinated',6),(88,'#clinic',7),(89,'#checkup',7),(90,'#first',8),(91,'@playstation1',1),(92,'@playstation2',1),(93,'@playstation3',1),(94,'@psp',1),(95,'@bratz',1),(96,'@barbie',1),(97,'@dolls',1),(98,'@math',1),(99,'@science',1),(100,'@english',1),(101,'@hamburger',2),(102,'@congee',2),(103,'@siomai',2),(104,'@gerber',2),(105,'@oatmeal',2),(106,'@babyfood',2),(107,'@chicken',2),(108,'@pork',2),(109,'@biogesic',3),(110,'@tempra',3),(111,'@growee',3),(112,'@vitC',3),(113,'@centrum',3),(114,'@alaxan',3),(115,'@water',4),(116,'@juice',4),(117,'@gatorade',4),(118,'@icedtea',4),(119,'@coke',4),(120,'@fever',5),(121,'@flu',5),(122,'@cough',5),(123,'@runnynose',5),(124,'@uti',5),(125,'@crush',8),(126,'@love',8),(127,'@word',8),(128,'@curse',8),(129,'@picture',8);
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-07-19  8:25:29
