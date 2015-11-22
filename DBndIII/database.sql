-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db3
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `subjectId` int(6) NOT NULL,
  `date` varchar(10) DEFAULT NULL,
  `text` text,
  `author` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,1,'2015 11 22','Cia daug teksto, kuris nieko daug nereiskia','Mantas'),(2,1,'2015 11 22','Viskas kas titai gali buti pasakyta sakoma cia','Andrius'),(3,1,'2015 11 22','Cia dar daugiau teksto, kuris nesusijes su niekuo','Marius'),(4,2,'2015 11 22','Shaalalala ir dar daug visokiu dalyku, is tikro turinio atzvilgiu nelabai skirias nuo tikru komentaru','Joana'),(5,2,'2015 11 22','Ir as manau, kad taip yra, ypac kai tas ir anas yra negerai','Eimantas'),(6,3,'2015 11 22','Dar daugiau teksto reiskia reik prirasyt, butaforija nieko daugiau','Agne'),(7,3,'2015 11 22','Standartinio komentatoriaus zodis kaip zvirblis','Temiteja'),(26,2,'2015 11 22','Lambada lambada lambada','Anonymous'),(27,3,'2015 11 22','Lambada lambada lambada','Anonymous'),(28,2,'2015 11 22','Lambada lambada lambada','Anonymous'),(29,3,'2015, 11, ','Sitas komentaras skirtas identifikuoti tai, kad kazkas buvo prideta naudojant DDD','Anonymous DDD');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temos`
--

DROP TABLE IF EXISTS `temos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temos` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `subject_date` varchar(10) DEFAULT NULL,
  `comment_count` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temos`
--

LOCK TABLES `temos` WRITE;
/*!40000 ALTER TABLE `temos` DISABLE KEYS */;
INSERT INTO `temos` VALUES (1,'Susisaudymas','2015 11 22',3),(2,'Pinkles','2015 11 22',4),(3,'Sapnas','2015 11 22',4);
/*!40000 ALTER TABLE `temos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-22 22:47:09
