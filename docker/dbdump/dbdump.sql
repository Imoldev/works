-- MySQL dump 10.13  Distrib 8.3.0, for Linux (x86_64)
--
-- Host: localhost    Database: testdb
-- ------------------------------------------------------
-- Server version	8.3.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `photo` text NOT NULL,
  `on_reg` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (10,'Илон Маск','ilon_mask@spacex.com','','/resources/uploads/65ad718558983756057534781297-1200x743.jpeg','2024-01-21 19:33:25'),(12,'Дима Билан','bilan@beeline.ru','89876544455','/resources/uploads/65ad7600dafc415375145150.jpg','2024-01-21 19:52:32'),(13,'Альберт Энштейн','enshtein@gmail.com','','/resources/uploads/65ad765b51601slide27507.jpg','2024-01-21 19:54:03'),(14,'Александр Сергеевич Пушкин','as.pushkin@mail.ru','','/resources/uploads/65ad768c33ba41696498080_gas-kvas-com-p-kartinki-pushkin-5.jpg','2024-01-21 19:54:52'),(15,'Энн Хетэуэй','het.ann@yahooo.com','89346374366','/resources/uploads/65ad76fd7476a20142406124134.jpg','2024-01-21 19:56:45'),(16,'Роберт Д. Младший','rob.d@gmail.com','','/resources/uploads/65ad78413fd225dad47787f4b7d1026491cf164586fd3.jpg','2024-01-21 20:02:09'),(17,'Джекки Чан','dj_jan@gmail.com','89548761234','/resources/uploads/65ad787cc3020266055-dzheki-chan-30.jpg','2024-01-21 20:03:08'),(18,'Леонадро Ди Каприо','leo.di.kap@mail.ru','89823453322','/resources/uploads/65ad78b455e33952e38588d5350e4f2dbf853a2861a22.jpg','2024-01-21 20:04:04'),(19,'Кира Найтли','kira_nn@gmail.com','','/resources/uploads/65ad78dc596c51654612226_2-celes-club-p-kira-naitli-oboi-krasivie-2.jpg','2024-01-21 20:04:44'),(20,'Иван Ургант','i.urgant@yandex.ru','','/resources/uploads/65ad790265ad51617042343_36-p-ivan-urgant-38.jpg','2024-01-21 20:05:22'),(21,'Джонни Депп','johnny_depp@yahoo.com','','/resources/uploads/65ad794c4b4eaMen___Male_Celebrity_Popular_Actor_Johnny_Depp_057213_.jpg','2024-01-21 20:06:36'),(22,'Клеопатра','kleo60@gmail.com','','/resources/uploads/65ad7a2d7d784e4160363b2024f8286ec3283fbaf0df1.jpg','2024-01-21 20:10:21'),(23,'Гарри Поттер','gar_potter@yandex.ru','89356748865','/resources/uploads/65ad7a5b447d51695805189_gas-kvas-com-p-kartinki-garri-potter-18.jpg','2024-01-21 20:11:07'),(24,'Анджелина Джолли','anj_joll@cloud.com','89063547223','/resources/uploads/65ad7a9a52b50pictured-angelina-jolie_25.jpg','2024-01-21 20:12:10'),(25,'Стив Джобс','steeve.jobs@apple.com','','/resources/uploads/65ad7ad12571dscale_1200.jpeg','2024-01-21 20:13:05'),(27,'Тим Кук','tim.coockie@apple.com','89334445522','/resources/uploads/65ad7b1a3559ashutterstock_569993581.jpg','2024-01-21 20:14:18'),(30,'Иван Иванов','ivanivan@yandex.ru','','/resources/images/person.svg','2024-01-21 21:41:50'),(31,'Марго Робби','margo_r@gmail.com','89991234567','/resources/uploads/65ad8fc44796765ad5b4e5b8f81666306157_38-mykaleidoscope-ru-p-margo-robbi-krasivo-40.jpg','2024-01-21 21:42:28'),(33,' Николай Мшецян','mshecyan@yandex.ru','89207587591','/resources/uploads/65ad93bf37539photo_2023-12-04_07-58-02.jpg','2024-01-21 21:59:27');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-21 22:20:07
