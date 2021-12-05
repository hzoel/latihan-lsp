-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: lat_lsp2
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `m_mahasiswa`
--

DROP TABLE IF EXISTS `m_mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `m_mahasiswa` (
  `nim_mahasiswa` varchar(10) NOT NULL,
  `kd_prodi` varchar(7) NOT NULL,
  `nm_mhs` varchar(50) NOT NULL,
  `tempat_lhr_mhs` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `tgl_lhr_mhs` date NOT NULL,
  `jenis_klmn_mhs` varchar(2) NOT NULL,
  `tgl_msk_mhs` date NOT NULL,
  `kd_status_mhs` varchar(2) NOT NULL,
  `alamat_mhs` varchar(500) NOT NULL,
  `tlp_mhs` varchar(15) NOT NULL,
  KEY `nim_mhsw` (`nim_mahasiswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_mahasiswa`
--

LOCK TABLES `m_mahasiswa` WRITE;
/*!40000 ALTER TABLE `m_mahasiswa` DISABLE KEYS */;
INSERT INTO `m_mahasiswa` VALUES ('2016141785','001','handri','tangerang','Islam','1996-03-26','L','2016-12-16','1','tangerang','081808784785');
/*!40000 ALTER TABLE `m_mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_semester`
--

DROP TABLE IF EXISTS `m_semester`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `m_semester` (
  `kd_semester` varchar(7) NOT NULL,
  `ket_semester` varchar(20) NOT NULL,
  `thn_semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_semester`
--

LOCK TABLES `m_semester` WRITE;
/*!40000 ALTER TABLE `m_semester` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_semester` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_krs_mhs`
--

DROP TABLE IF EXISTS `t_krs_mhs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_krs_mhs` (
  `id_krs_mhs` int(11) NOT NULL AUTO_INCREMENT,
  `kd_matkul` varchar(10) NOT NULL,
  `thn_semester` varchar(10) NOT NULL,
  `nim_mhs` varchar(20) NOT NULL,
  `kd_prodi` varchar(20) NOT NULL,
  `kd_kelas` varchar(30) NOT NULL,
  PRIMARY KEY (`id_krs_mhs`,`kd_matkul`,`nim_mhs`),
  KEY `fk_nim_idx` (`nim_mhs`),
  CONSTRAINT `fk_nim` FOREIGN KEY (`nim_mhs`) REFERENCES `m_mahasiswa` (`nim_mahasiswa`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_krs_mhs`
--

LOCK TABLES `t_krs_mhs` WRITE;
/*!40000 ALTER TABLE `t_krs_mhs` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_krs_mhs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-12 18:38:33
