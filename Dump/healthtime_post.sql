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
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `to_parent_id` int(11) DEFAULT NULL,
  `from_parent_id` int(11) DEFAULT NULL,
  `child_id` int(11) DEFAULT NULL,
  `post_content` varchar(200) DEFAULT NULL,
  `post_date` datetime DEFAULT NULL,
  `post_category_id` int(11) DEFAULT NULL,
  `file_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (1,1,NULL,1,'Hello world!','2013-03-07 02:24:49',1,NULL),(2,1,NULL,1,'Hello world!','2013-03-07 02:29:18',1,NULL),(3,1,NULL,1,'Hello world!','2013-03-07 02:33:17',1,NULL),(4,30,NULL,12,'My child is sick today','2013-03-07 11:20:36',6,NULL),(5,5,NULL,2,'corn','2013-04-10 01:27:22',3,12),(6,6,NULL,2,'corn','2013-04-10 01:30:07',3,12),(7,1,NULL,4,'hallo','2013-04-11 19:37:27',3,2),(8,2,NULL,4,'hallo','2013-04-11 19:44:54',3,2),(9,1,NULL,4,'ble','2013-04-11 20:06:18',5,12),(10,1,NULL,1,'ble','2013-04-11 20:07:33',5,12),(11,1,NULL,1,'ble','2013-04-11 20:08:34',5,12),(12,1,NULL,1,'ble','2013-04-11 20:09:20',5,1),(13,1,NULL,1,'ble','2013-04-11 21:47:59',5,1),(14,1,NULL,1,'ble','2013-04-11 21:49:38',5,1),(15,1,NULL,1,'wazzap','2013-04-11 21:52:40',5,1),(16,4,NULL,3,'mango sage','2013-04-11 21:54:48',2,NULL),(21,3,NULL,1,'blahblah','2013-04-11 22:24:50',5,1),(22,3,NULL,1,'taena mo','2013-04-11 22:25:16',5,1),(23,1,NULL,1,'Hallo','2013-04-11 22:26:12',5,1),(24,1,NULL,1,'Pak u choi','2013-04-11 22:26:56',5,1),(25,2,NULL,1,'I love corn','2013-04-11 22:31:22',5,1),(26,2,NULL,1,'Alaj','2013-04-11 22:33:41',5,1),(27,2,NULL,1,'Fat ass','2013-04-11 22:34:05',5,1),(28,2,NULL,1,'Oanatwpm','2013-04-11 22:34:44',5,1),(29,2,NULL,1,'Shsjsaj','2013-04-11 22:35:07',5,1),(30,3,NULL,1,'corning again','2013-04-12 02:03:17',5,1),(31,2,NULL,1,'Hallo','2013-04-12 02:03:44',5,1),(32,2,NULL,1,'Slider overrrrr','2013-04-12 02:04:31',5,1),(33,2,NULL,1,'Slide over','2013-04-12 02:12:08',5,1),(34,2,NULL,1,'Wla rn','2013-04-12 02:43:41',5,1),(35,1,NULL,1,'Pao ma ko lei','2013-04-12 03:28:04',5,1),(36,1,NULL,1,'Anime','2013-04-12 03:28:19',5,1),(37,1,NULL,1,'Youtube','2013-04-12 03:28:47',5,1),(38,1,NULL,1,'Checked','2013-04-12 03:28:58',5,1),(39,1,NULL,1,'Howdy','2013-04-12 06:25:37',5,1),(40,1,1,1,'my son is #sick ','2013-07-11 23:25:17',5,1),(41,1,1,1,'My son is #sick with @fever','2013-07-12 00:46:53',5,1),(42,1,1,1,'Yahallo my son is very #sick with @fever  today :(','2013-07-12 02:43:11',5,1),(43,1,1,1,'Yahallo again! My daughter is #walking!','2013-07-12 02:44:28',1,1),(44,1,1,1,'My son is #corn','2013-07-12 02:45:04',0,1),(45,1,1,1,'My daughter is #drinking @biogesic ','2013-07-12 02:46:10',3,1),(46,1,1,1,'My daughter have @chickenpox ','2013-07-12 02:49:59',0,1),(47,1,1,1,'Hshsh @chickenpox ','2013-07-12 09:27:55',0,1),(48,1,1,1,'My son is #studying @math ','2013-07-12 09:48:12',1,1);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-07-19  2:33:48
