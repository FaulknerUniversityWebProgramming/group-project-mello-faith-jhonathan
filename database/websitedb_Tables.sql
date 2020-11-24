-- MySQL dump 10.13  Distrib 5.7.31, for Linux (x86_64)
--
-- Host: localhost    Database: websitedb
-- ------------------------------------------------------
-- Server version	5.7.31-0ubuntu0.18.04.1

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
-- Table structure for table `Product`
--

DROP TABLE IF EXISTS `Product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Product` (
  `idProduct` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`idProduct`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Product` (productName, image, price, description) VALUES
('Faulkner Soccer T-Shirt Blue', 'img/faulkner-soccer-tshirt.png', 19.99, 'Faulkner University Fruit Of The Loom Mens 5oz Cotton T-Shirt'),
('Faulkner Soccer T-Shirt Grey', 'img/faulkner-soccer-grey.png', 19.99, 'Faulkner University Fruit Of The Loom Mens 5oz Cotton T-Shirt'),
('Faulkner Soccer Sweatshirt', 'img/faulkner-sweatshirt.png', 29.99, 'Faulkner University JERZEES Unisex 50/50 NuBlend 8oz Crewneck Sweatshirt '),
('Faulkner Soccer Hoodie','img/faulkner-hoodie.png', 39.99, 'Faulkner University SofSpun 7.2oz Unisex Hooded Sweatshirt '),
('Faulkner Soccer Hat','img/soccer-hat.png', 23.99, 'Embroidered Fanthread™ Cool & Dry Flexcap');




DROP TABLE IF EXISTS `Purchase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Purchase` (
  `idPurchase` int(11) NOT NULL AUTO_INCREMENT,
    `image` varchar(255) NOT NULL,
    `productName` varchar(255) NOT NULL,
  `price` float(11) NOT NULL,
  PRIMARY KEY (`idPurchase`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users` (
  `idUsers` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`idUsers`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Users`( fullName, username, password)VALUES 
('Admin', 'admin', 'admin123'),
('Matheus Mello', 'mellom', '123456'),
('Faith King', 'kingf', '654321'),
('Johnathan Sabir', 'sabirj', '123123');


/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;