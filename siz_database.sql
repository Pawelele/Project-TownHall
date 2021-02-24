-- MySQL dump 10.16  Distrib 10.1.48-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: SIZ_Database
-- ------------------------------------------------------
-- Server version	10.1.48-MariaDB-0+deb9u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
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
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Monika16','moniczka123'),(2,'Marcin99','haslo123');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zapisy`
--

DROP TABLE IF EXISTS `zapisy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zapisy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `operacja` varchar(255) NOT NULL,
  `termin` date DEFAULT NULL,
  `imie` varchar(255) DEFAULT NULL,
  `nazwisko` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `potwierdzenie` tinyint(1) DEFAULT NULL,
  `data_dodania` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pesel` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zapisy`
--

LOCK TABLES `zapisy` WRITE;
/*!40000 ALTER TABLE `zapisy` DISABLE KEYS */;
INSERT INTO `zapisy` VALUES (67,'1. Rej pojazdu','2021-02-25','Adam','Nowak','adam@nowak.pl',0,'2021-01-05 10:55:13','12345678900'),(68,'3. Prawo jazdy odbior','2021-03-18','Pawel','Kowalski','pawel@gmail.com',0,'2021-01-05 10:55:56','19876543211'),(69,'4. Prawo jazdy wniosek','2021-01-17','Joanna','Marcinkowska','joasia96@onet.pl',0,'2021-01-05 10:56:40','87674564762'),(71,'1. Rej pojazdu','1999-02-25','Anna','Nowakowska','anulka@gmail.com',0,'2021-01-07 08:41:54','29887409874'),(72,'2. zgl zbyc, odb dow rej','2021-03-25','Marta','Kowalska','marta@gmail.com',0,'2021-01-07 09:20:41','11111111111'),(73,'','0000-00-00','','','',0,'2021-01-10 17:13:37',''),(74,'2. zgl zbyc, odb dow rej','2021-04-30','Joanna','Jeziorkowska','joanna@onet.pl',0,'2021-01-14 08:53:39','09876543211'),(75,'1. Rej pojazdu','2021-03-04','Anna','Nowak','ksjgas@gmail.com',0,'2021-01-14 09:24:48','12345612345');
/*!40000 ALTER TABLE `zapisy` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-24 21:31:36
