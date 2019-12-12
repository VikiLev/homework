-- MySQL dump 10.13  Distrib 5.6.37, for Win32 (AMD64)
--
-- Host: localhost    Database: film
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
-- Table structure for table `RES`
--

DROP TABLE IF EXISTS `RES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RES` (
  `name` varchar(50) NOT NULL DEFAULT '',
  `genre` varchar(50) DEFAULT '',
  `title` varchar(50) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RES`
--

LOCK TABLES `RES` WRITE;
/*!40000 ALTER TABLE `RES` DISABLE KEYS */;
INSERT INTO `RES` VALUES ('Taxi','comedy','Tax'),('The Matrix','actoin','Mat'),('Requiem for a Dream','drama','Re'),('Green Book','drama','ze');
/*!40000 ALTER TABLE `RES` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `film1`
--

DROP TABLE IF EXISTS `film1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `film1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `genre_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `film1`
--

LOCK TABLES `film1` WRITE;
/*!40000 ALTER TABLE `film1` DISABLE KEYS */;
INSERT INTO `film1` VALUES (1,'The Matrix',3),(2,'Taxi',1),(3,'Green Book',2),(4,'Requiem for a Dream',2);
/*!40000 ALTER TABLE `film1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `films`
--

DROP TABLE IF EXISTS `films`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `films` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name_film` text,
  `producer` varchar(20) DEFAULT NULL,
  `genre` varchar(128) DEFAULT NULL,
  `year` int(4) NOT NULL DEFAULT '2010',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `films`
--

LOCK TABLES `films` WRITE;
/*!40000 ALTER TABLE `films` DISABLE KEYS */;
INSERT INTO `films` VALUES (1,'The Matrix',' Wachowski','science fiction action',1999),(2,'Taxi','G?rard Pir?s','comedy action movie',1998),(3,'The Shawshank Redemption','Frank Darabont','drama',1994),(4,'Green Book','Farrelly','drama',2018),(5,'Requiem for a Dream',' Darren Aronofsky','drama',2000);
/*!40000 ALTER TABLE `films` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genre` varchar(50) NOT NULL DEFAULT '',
  `genre_id` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genre`
--

LOCK TABLES `genre` WRITE;
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` VALUES (1,'comedy',''),(2,'drama',''),(3,'actoin','');
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mas`
--

DROP TABLE IF EXISTS `mas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `title_id` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mas`
--

LOCK TABLES `mas` WRITE;
/*!40000 ALTER TABLE `mas` DISABLE KEYS */;
INSERT INTO `mas` VALUES (1,'Tax','2'),(2,'Mat','1'),(3,'Re','4'),(4,'ze','3');
/*!40000 ALTER TABLE `mas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `myltik`
--

DROP TABLE IF EXISTS `myltik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `myltik` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name_myltik` varchar(100) NOT NULL DEFAULT 'noname',
  `genre` varchar(100) NOT NULL DEFAULT 'unknown',
  `year` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `myltik`
--

LOCK TABLES `myltik` WRITE;
/*!40000 ALTER TABLE `myltik` DISABLE KEYS */;
INSERT INTO `myltik` VALUES (1,'The Lion King','drama',1994),(2,'The Little Mermaid','drama',1989);
/*!40000 ALTER TABLE `myltik` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-15 18:33:01
