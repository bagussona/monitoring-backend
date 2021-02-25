-- MariaDB dump 10.18  Distrib 10.5.8-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: sprint_4
-- ------------------------------------------------------
-- Server version	10.5.8-MariaDB

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
-- Table structure for table `data_santri`
--

DROP TABLE IF EXISTS `data_santri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_santri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_santri`
--

LOCK TABLES `data_santri` WRITE;
/*!40000 ALTER TABLE `data_santri` DISABLE KEYS */;
INSERT INTO `data_santri` VALUES (1,'Bagus','Backend','Garut'),(3,'Gema','Backend','Bekasi'),(4,'Hana','Backend','Semarang'),(7,'Faris','Backend','Bogor'),(11,'Alfian','Frontend','Kudus'),(12,'Ismail','Fullstack','Magelang'),(15,'Fadil','Mobile','Lampung');
/*!40000 ALTER TABLE `data_santri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `postingan`
--

DROP TABLE IF EXISTS `postingan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `postingan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_post` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_post` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `postingan`
--

LOCK TABLES `postingan` WRITE;
/*!40000 ALTER TABLE `postingan` DISABLE KEYS */;
INSERT INTO `postingan` VALUES (1,'Jago Ngaji, Jago IT!','Life Passion','Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo molestias temporibus non aliquid magni maiores quos provident dignissimos qui velit alias nihil, illo laborum explicabo vel perspiciatis quaerat! Non, labore.','pondokit.jpg','2021-02-23'),(3,'Koneksi Database PHP','Programming','Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo molestias temporibus non aliquid magni maiores quos provident dignissimos qui velit alias nihil, illo laborum explicabo vel perspiciatis quaerat! Non, labore.','img.jpg','2021-02-24'),(4,'Monitoring Backend','Programming','Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo molestias temporibus non aliquid magni maiores quos provident dignissimos qui velit alias nihil, illo laborum explicabo vel perspiciatis quaerat! Non, labore.','pit_gel/2021.jpg','2021-02-25'),(6,'PHP Serverside Language','PHP','Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo molestias temporibus non aliquid magni maiores quos provident dignissimos qui velit alias nihil, illo laborum explicabo vel perspiciatis quaerat! Non, labore.','syntax-php.jpg','2021-02-25');
/*!40000 ALTER TABLE `postingan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','admin123'),(2,'bagus','awsd3'),(3,'krisna','krisna1'),(4,'login_tes','banget_random'),(5,'tes_login','random_banget'),(7,'ismail','ismailify');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-25 20:51:56
