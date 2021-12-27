-- MySQL dump 10.13  Distrib 5.7.36, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: hh
-- ------------------------------------------------------
-- Server version	5.7.32

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
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` tinytext,
  `description` text,
  `type` enum('article','video','news') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `keywords` json NOT NULL,
  `image` tinytext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `content_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (1,'asf231','asf1','article','2021-12-24 14:42:57','[\"ass\", \"fg\"]','/var/www/test/image/content-images/Screenshot from 2021-12-07 15-24-54.png'),(2,'asf','asf','news','2021-12-24 15:22:52','[\"asfs\", \"fg\"]','/var/www/test/image/content-images/1611932453807.jpg'),(3,'asf','asf','article','2021-12-24 14:20:24','[\"afs\", \"fg\"]','/var/www/test/image/content-images/Screenshot from 2021-12-16 11-33-57.png'),(4,'fsa1','https://www.youtube.com/embed/VShtPwEkDD0','video','2021-12-24 15:42:51','[\"dsfs\"]','/var/www/test/image/content-images/photo_2021-07-08_22-39-18.jpg');
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-24 18:00:31
