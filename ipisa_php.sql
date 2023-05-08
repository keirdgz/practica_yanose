-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: ipisa_php
-- ------------------------------------------------------
-- Server version	8.0.32

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
  `cedula` char(12) NOT NULL,
  `carrera_tec` varchar(70) NOT NULL,
  `tec_basico` char(20) NOT NULL,
  `nombre` char(20) NOT NULL,
  `apellido` char(20) NOT NULL,
  `fecha_nac` varchar(45) NOT NULL,
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
  `contrasena` char(20) NOT NULL,
  `confirmacion_contra` char(20) NOT NULL,
  `anos_xp` char(10) NOT NULL,
  `curriculum` varchar(250) NOT NULL,
  `area_trabajo` varchar(100) NOT NULL,
  PRIMARY KEY (`idegresados`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `egresados`
--

LOCK TABLES `egresados` WRITE;
/*!40000 ALTER TABLE `egresados` DISABLE KEYS */;
INSERT INTO `egresados` VALUES (2,'2018-2022','Instituto Politécnico Hainamosa (Juan Félix Pepén)','5to','234242','03193928323','Gestión Administrativa y Tributaria','basico','Alfonso','Vasquez','12 de julio de 1995','Masculino','dadsadsasad','csdcds','dcsdcs','sdcsddcds','Independencia','Republica Dominicana','8093737212','on','on','alfonsito@gmail.com','','12345','12345','2','Ciberprestamos SAN.jpg','Electromecánica de vehículos'),(5,'2019-2023','Instituto Politécnico Industrial de Santiago (IPISA)','6to','878765567','00099897','Desarrollo y Administración de Aplicaciones Informáticas','basico','Caroline','Jimenez','090523','Femenino','DJAKJSJSKLAJDGRKJG','DKSDJFKJSF','LSJDFLKJS','Punal','Distrito Nacional','Republica Dominicana','8294274899','on','on','carolinejimenez888@gmail.com','','rosario24','rosario24','2','Azul Cielo Fondo Color Hermoso.jpg','Desarrollo y Administración de Aplicaciones Informáticas');
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
  `rnc` char(12) NOT NULL,
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
  `contrasena` varchar(45) NOT NULL,
  `confirmacion_contrasena` varchar(45) NOT NULL,
  `contacto_dentro_emp` varchar(45) NOT NULL,
  `tel_contacto` char(12) NOT NULL,
  `email_contacto` varchar(45) NOT NULL,
  PRIMARY KEY (`idempresa`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES (1,'Secomsa','2345676543','Si','No','Nacional/Local','ctfvyhjikoluhygtfrdftvgbhnjmkcs','ganaderia','pequeña','Calle principal','Arenoso','nkdoakda','Punal','santiago','Repdom','8095707867','8296212814','kei@gmail.com','kei@gmail.com','12345','12345','Luis GOmez','8096212929','luis@gmail.com'),(2,'','','','','','','','','','','','','','','','','','','','','','',''),(3,'Celucell','989000444','Si','No','Nacional/Local','wedrftgyuiojuhygt5fr4d3eseso mimo','comercio','micro','La torre','La torre','jadaddjasd','La torre','lavega','Repdom','8094445555','8093334444','celucell@gmail.com','celucell@gmail.com','celucell','celucell','8095556666','8095556666','celucell@gmail.com');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vacantes`
--

LOCK TABLES `vacantes` WRITE;
/*!40000 ALTER TABLE `vacantes` DISABLE KEYS */;
INSERT INTO `vacantes` VALUES (5,'Secomsa','ascvfsdsa','cvbgrteredcvgfws',10000,'Calsldaldada','Temporal','1pm a 12pm','kei@gmail.com','Luis reyes','8097319382');
/*!40000 ALTER TABLE `vacantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'ipisa_php'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-08 12:53:25
