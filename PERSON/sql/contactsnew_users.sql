-- MySQL dump 10.13  Distrib 8.0.12, for Win64 (x86_64)
--
-- Host: localhost    Database: contactsnew
-- ------------------------------------------------------
-- Server version	8.0.11

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'Vesna','vesa@g.com','vesa','99b98b14049307f7f3859f85453f1ece'),(3,'Zdravko Colic','zc@g.com','cola','56cc37d66c414c61c2cfa629d40bf625'),(4,'Niko Nikic','niko@gmail.com','niko','ef8092b53330859354c138eb70ea8632'),(5,'Tomo Tomic','tomo@g.com','tomo','cee970a6c4a5cfb761af430e06638aee'),(6,'Rade Radic','rade@g.com','rade','a239144a48653f40c0fb399cc23212f8'),(7,'Kosta','k@g.com','kosta','1c1f375525f8f775c086c10a4c10a20b'),(8,'Rade Rodic','rader@g.com','rader','77e20e071d581115b89f70cf5b39316b'),(9,'Zdravko Colic','zc@g.com','cola','56cc37d66c414c61c2cfa629d40bf625'),(24,'User2','user2@g.com','user2','3c2124ef380f6af8e31ec6c26ce9b3d4'),(25,'User3','user3@g.com','user3','jasamuser3'),(26,'Provjera','p@g','proba','c1c876490101d68c8792675c676d31f4'),(40,'Gospodin Admin','ga@g.com','gospodin','d148f9bb76f8dc4ff3bf284233185737'),(41,'Novi Admin','na@g.com','novi','d148f9bb76f8dc4ff3bf284233185737');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-28 15:06:37
