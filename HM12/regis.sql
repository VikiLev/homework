-- MySQL dump 10.13  Distrib 5.6.37, for Win32 (AMD64)
--
-- Host: localhost    Database: regis
-- ------------------------------------------------------
-- Server version	5.6.37

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username1` varchar(100) NOT NULL DEFAULT '',
  `username2` varchar(100) NOT NULL DEFAULT '',
  `username3` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `password2` varchar(100) NOT NULL DEFAULT '',
  `login` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'viki','Lev','Nikolaevna','vikivikivikikoryagina@gmail.com','12345','','vikilev'),(2,'viki','Lev','Nikolaevna','vikivikivikikoryagina@gmail.com','12345','','vikilev'),(3,'alex','Lev','kon','serialkillers1990@gmail.com','123','','sanochiek'),(4,'adm','adm','admin','111','7336b355bf3576f319646da1ec6c13de','','adm'),(5,'123','123','123','1234','1a1dc91c907325c69271ddf0c944bc72','','ggg'),(6,'','','','vikivikivikikoryagina@gmail.com','1a1dc91c907325c69271ddf0c944bc72','',''),(7,'','','','vikivikivikikoryagina@gmail.com','1a1dc91c907325c69271ddf0c944bc72','',''),(8,'','','','1','1a1dc91c907325c69271ddf0c944bc72','',''),(9,'','','','vikivikivikikoryagina@gmail.com','1a1dc91c907325c69271ddf0c944bc72','',''),(10,'','','','vikivikivikikoryagina@gmail.com','1a1dc91c907325c69271ddf0c944bc72','',''),(11,'','','','vikivikivikikoryagina@gmail.com','1a1dc91c907325c69271ddf0c944bc72','',''),(12,'','','','vikivikivikikoryagina@gmail.com','1a1dc91c907325c69271ddf0c944bc72','',''),(13,'','','','vikivikivikikoryagina@gmail.com','1a1dc91c907325c69271ddf0c944bc72','',''),(14,'','','','2','1a1dc91c907325c69271ddf0c944bc72','',''),(15,'','','','vikivikivikikoryagina@gmail.com','1a1dc91c907325c69271ddf0c944bc72','',''),(16,'2','2','2','2','1a1dc91c907325c69271ddf0c944bc72','','2'),(17,'vikik','Levk','Nikolaevnak','vikivikivikikoryagina@','1a1dc91c907325c69271ddf0c944bc72','','k'),(18,'viki','Lev','NIK','amail','1a1dc91c907325c69271ddf0c944bc72','','lo'),(19,'ko','ko','ko','ko','1a1dc91c907325c69271ddf0c944bc72','','ko');
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

-- Dump completed on 2019-11-25 18:20:26
