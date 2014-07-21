CREATE DATABASE  IF NOT EXISTS `proyecto` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `proyecto`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: proyecto
-- ------------------------------------------------------
-- Server version	5.6.19

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
-- Table structure for table `recordario_por_grupo`
--

DROP TABLE IF EXISTS `recordario_por_grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recordario_por_grupo` (
  `idRECORDARIO_POR_GRUPO` int(11) NOT NULL,
  `grupo` int(11) NOT NULL,
  `fx_recordatorio` int(11) NOT NULL,
  PRIMARY KEY (`idRECORDARIO_POR_GRUPO`),
  UNIQUE KEY `idRECORDARIO_POR_GRUPO_UNIQUE` (`idRECORDARIO_POR_GRUPO`),
  KEY `fx_recordatorio_idx` (`fx_recordatorio`),
  KEY `grupo_idx` (`grupo`),
  CONSTRAINT `grupo` FOREIGN KEY (`grupo`) REFERENCES `grupo` (`idGRUPO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fx_recordatorio` FOREIGN KEY (`fx_recordatorio`) REFERENCES `recordatorio` (`idRECORDATORIO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recordario_por_grupo`
--

LOCK TABLES `recordario_por_grupo` WRITE;
/*!40000 ALTER TABLE `recordario_por_grupo` DISABLE KEYS */;
/*!40000 ALTER TABLE `recordario_por_grupo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-14 12:55:31