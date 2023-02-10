-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: ipisa_php
-- ------------------------------------------------------
-- Server version	8.0.26

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
-- Table structure for table `egresados`
--

DROP TABLE IF EXISTS `egresados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `egresados` (
  `idegresados` int NOT NULL AUTO_INCREMENT,
  `ano_graduacion` varchar(20) NOT NULL,
  `inst_pertenece` char(100) NOT NULL,
  `curso` char(10) NOT NULL,
  `matricula` char(20) NOT NULL,
  `cedula` int NOT NULL,
  `carrera_tec` char(50) NOT NULL,
  `tec_basico` char(20) NOT NULL,
  `nombre` char(20) NOT NULL,
  `apellido` char(20) NOT NULL,
  `fecha_nac` date NOT NULL,
  `sexo` char(10) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `sector` varchar(45) NOT NULL,
  `seccion` varchar(45) NOT NULL,
  `municipio` varchar(45) NOT NULL,
  `provincia` varchar(45) NOT NULL,
  `pais_nacionalidad` varchar(45) NOT NULL,
  `telefono` char(12) NOT NULL,
  `licencia_cd` char(3) NOT NULL,
  `vehiculo` char(3) NOT NULL,
  `email` varchar(45) NOT NULL,
  `confirmacion_em` char(10) NOT NULL,
  `contraseña` char(20) NOT NULL,
  `confirmacion_contra` char(20) NOT NULL,
  `anos_xp` char(10) NOT NULL,
  `curriculum` varchar(250) NOT NULL,
  `area_trabajo` varchar(100) NOT NULL,
  `egresadoscol` varchar(45) NOT NULL,
  PRIMARY KEY (`idegresados`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `egresados`
--

LOCK TABLES `egresados` WRITE;
/*!40000 ALTER TABLE `egresados` DISABLE KEYS */;
/*!40000 ALTER TABLE `egresados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empresa` (
  `idempresa` int NOT NULL AUTO_INCREMENT,
  `nom_emp` varchar(45) NOT NULL,
  `rnc` int NOT NULL,
  `ident_emp` char(2) NOT NULL,
  `dept_formacion` char(2) NOT NULL,
  `alcance_emp` char(15) NOT NULL,
  `actividad_emp` varchar(255) NOT NULL,
  `industria` varchar(60) NOT NULL,
  `tamano_emp` varchar(10) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `seccion` varchar(45) NOT NULL,
  `municipio` varchar(45) NOT NULL,
  `provincia` varchar(45) NOT NULL,
  `pais_emp` varchar(45) NOT NULL,
  `tel_principal` char(12) NOT NULL,
  `tel_directo` char(12) NOT NULL,
  `email` varchar(45) NOT NULL,
  `confirmacion_email` varchar(45) NOT NULL,
  `contacto_dentro_emp` varchar(45) NOT NULL,
  `tel_contacto` char(12) NOT NULL,
  `email_contacto` varchar(45) NOT NULL,
  PRIMARY KEY (`idempresa`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vacantes`
--

DROP TABLE IF EXISTS `vacantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vacantes` (
  `idvacantes` int NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(50) NOT NULL,
  `nombre_puesto` varchar(45) NOT NULL,
  `funciones_puesto` varchar(250) NOT NULL,
  `sueldo` float NOT NULL,
  `ubicacion` varchar(45) NOT NULL,
  `tipo_contrato` varchar(45) NOT NULL,
  `horario` varchar(45) NOT NULL,
  `correo_curriculum` varchar(45) NOT NULL,
  `persona_contacto` char(20) NOT NULL,
  `telefono` char(12) NOT NULL,
  PRIMARY KEY (`idvacantes`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vacantes`
--

LOCK TABLES `vacantes` WRITE;
/*!40000 ALTER TABLE `vacantes` DISABLE KEYS */;
/*!40000 ALTER TABLE `vacantes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-09 22:53:33
