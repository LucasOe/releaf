-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: releaf
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Current Database: `releaf`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `releaf` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `releaf`;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `image` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Konzentrationstee','tee_001'),(2,'Gesundheitstee','tee_002'),(3,'Entspannungstee','tee_003'),(4,'Früchtetee','tee_004');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `price` double NOT NULL,
  `image` char(50) NOT NULL,
  `category` int DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `description` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_category_categoryId_fk` (`category`),
  CONSTRAINT `product_category_categoryId_fk` FOREIGN KEY (`category`) REFERENCES `category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Mate Ingwer Zitrone',9.99,'tee_000',1,1,'Der auffrischende Geschmack von Mate trifft auf den leicht säuerlich-/bitteren Geschmack von Ingwer und Zitrone. Der Tee hat eine Konzentrationsstärkende Wirkung.'),(2,'Guaven Blätter Tee',5.99,'tee_001',1,3,'Der sanfte fruchtig, exotische Geschmack der Guave kommt mit einer süßlichen Note zum Vorschein. Der Tee hat eine Konzentrationsstärkende Wirkung.'),(3,'Jute Tee',8.5,'tee_002',1,4,'Der frische Tee bringt einen mild-blumigen Geschmack mit einer Süßen Note hervor. Der Tee hat eine Konzentrationsstärkende Wirkung.'),(4,'Respaldar Tee',10.85,'tee_003',1,5,'Der frische Genuss aus Mango- und Papayablättern verleiht dem Tee seine einzigartige süße. Der Tee hat eine Konzentrationsstärkende Wirkung.'),(5,'Mangoblätter Tee',12.99,'tee_004',1,2,'Der Tee überzeugt mit seinem süß tropischem Geschmack. Der Tee hat eine Konzentrationsstärkende Wirkung.'),(6,'Yunnan Pu Erh',9.99,'tee_005',2,3,'Der Tee überzeugt mit seinem kräftigen, würzig-erdigen Geschmack und senkt den Cholesterinspiegel und den Blutdruck.'),(7,'Lapsang Souchong',10.99,'tee_006',2,1,'Mit seiner feinen rauchigen und holzigen Note und leichter süße überzeugt dieser Tee aus China. Dieser Tee hilft bei Magen- und Darmbeschwerden und hat eine Heilende Wirkung auf den Verdauungstrakt.'),(8,'Yerba Mate Zitrone',9.99,'tee_007',2,5,'Dieser Tee überzeugt durch seinen erdig, rauchigen Geschmack mit seiner frischen süßlich-bitteren Note. Neben den vielen Vitaminen die der Tee enthält, ist der Tee Leistungsstärkend und kreislauffördernd'),(9,'Yerba Mate Minze',11.99,'tee_008',2,4,'Dieser Tee überzeugt durch seinen erdig, rauchigen Geschmack mit seiner erfrischenden leicht scharfen Note. Neben den vielen Vitaminen die der Tee enthält, ist der Tee leistungsstärkend und kreislauffördernd.'),(10,'Mate Waldbeere',12.99,'tee_001',2,2,'Der auffrischende Geschmack der Mate vereint sich harmonisch mit verschiedenen Waldbeeren. Dieser Tee fördert die Verdauung und sorgt für Linderungen von Entzündungen der Harnwege.'),(11,'Blooming Tea Carmelia Lady',9.99,'tee_002',3,3,'Nicht nur der leichte Jasmin Geschmack überzeugt bei dem Tee, sondern auch die besonderen Teeröschen die sich in dem Wasser öffnen. Dieser Tee ist genau richtig zum Entspannen.'),(12,'Jasmin White Dragon',20.99,'tee_003',3,5,'Ein lieblicher, stark duftender, aromatischer chinesischer Grüntee mit weißen Jasminblüten. Dieser Tee ist genau richtig zum Entspannen.'),(13,'Bai Hao Yin Zhen',19.99,'tee_004',3,0,'Der weiße Tee harmoniert wunderbar mit seinem süß, pflanzlichen zarten Geschmack. Dieser Tee ist genau richtig zum Entspannen.'),(14,'Basilikum Orange Ingwer',21.99,'tee_005',4,5,'Dieser Tee vereint die fruchtige süße der Orange mit der sanften schärfe der Ingwer und der frische des Basilikums.'),(15,'Aloe Vera Beeryfrucht',9.99,'tee_006',4,4,'Die sanfte Milde der Aloe Vera harmoniert hervorragend mit dem frischen Fruchtgeschmack.'),(16,'Birnen Mango Physalis',15.99,'tee_007',4,4,'Dieser Früchtetee überzeugt mit seinem sanften, süßen Geschmack und ist wertvoll an Vitamin B und C.'),(17,'Winterglitzern',9.99,'tee_008',4,3,'Die Kirsch-Mandel-Marzipan Note versetzt einen direkt in eine kuschelige Winterstimmung.'),(18,'Glühweinmischung Weihnachtsmarkt',7.99,'tee_001',4,2,'Gewürznelken und Zimtrinde verleihen den typischen Geschmack des Glühweins und bringen einem die Weihnachtsmarktatmosphäre nach Hause.'),(19,'Acerola Kirsche',10.99,'tee_002',4,5,'Der Kraftvolle aromatische Kirschgeschmack bei diesem Tee ist für jeden Kirschliebhaber die richtige Entscheidung. \r\n');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-28 14:48:26
