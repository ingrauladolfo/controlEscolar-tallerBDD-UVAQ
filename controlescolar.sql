-- MySQL dump 10.16  Distrib 10.1.34-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: controlescolar
-- ------------------------------------------------------
-- Server version	10.1.34-MariaDB

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
-- Table structure for table `administrativos`
--

DROP TABLE IF EXISTS `administrativos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrativos` (
  `Id_administrativos` int(11) NOT NULL AUTO_INCREMENT,
  `Nomina` bigint(20) NOT NULL,
  `Id_informacion_personas` int(11) NOT NULL,
  `Estudios` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `Especialidades` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `Departamento_asignado` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `RFC` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`Id_administrativos`,`Id_informacion_personas`),
  KEY `Id_informacion_personas` (`Id_informacion_personas`),
  CONSTRAINT `administrativos_ibfk_1` FOREIGN KEY (`Id_informacion_personas`) REFERENCES `informacion_personas` (`Id_informacion_personas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrativos`
--

LOCK TABLES `administrativos` WRITE;
/*!40000 ALTER TABLE `administrativos` DISABLE KEYS */;
/*!40000 ALTER TABLE `administrativos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumnos` (
  `Id_alumnos` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` bigint(20) NOT NULL,
  `Id_informacion_personas` int(11) NOT NULL,
  `semestre` int(11) DEFAULT NULL,
  `Id_facultades_carreras` int(11) NOT NULL,
  `Status` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id_alumnos`,`Id_informacion_personas`,`Id_facultades_carreras`),
  KEY `Id_informacion_personas` (`Id_informacion_personas`),
  KEY `Id_facultades_carreras` (`Id_facultades_carreras`),
  CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`Id_informacion_personas`) REFERENCES `informacion_personas` (`Id_informacion_personas`),
  CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`Id_facultades_carreras`) REFERENCES `facultades_carreras` (`Id_facultades_carreras`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos`
--

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aspirantes`
--

DROP TABLE IF EXISTS `aspirantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aspirantes` (
  `Id_aspirantes` int(11) NOT NULL AUTO_INCREMENT,
  `Id_informacion_personas` int(11) NOT NULL,
  `Id_facultades_carreras` int(11) NOT NULL,
  `Status` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `Matrícula_nómina_temporal` bigint(20) NOT NULL,
  `RFC` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`Id_aspirantes`,`Id_informacion_personas`,`Id_facultades_carreras`),
  KEY `Id_informacion_personas` (`Id_informacion_personas`),
  KEY `Id_facultades_carreras` (`Id_facultades_carreras`),
  CONSTRAINT `aspirantes_ibfk_1` FOREIGN KEY (`Id_informacion_personas`) REFERENCES `informacion_personas` (`Id_informacion_personas`),
  CONSTRAINT `aspirantes_ibfk_2` FOREIGN KEY (`Id_facultades_carreras`) REFERENCES `facultades_carreras` (`Id_facultades_carreras`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aspirantes`
--

LOCK TABLES `aspirantes` WRITE;
/*!40000 ALTER TABLE `aspirantes` DISABLE KEYS */;
/*!40000 ALTER TABLE `aspirantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calificaciones`
--

DROP TABLE IF EXISTS `calificaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calificaciones` (
  `Id_calificaciones` int(11) NOT NULL AUTO_INCREMENT,
  `calificacion` int(11) NOT NULL,
  `tipo_evaluacion` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `Id_alumnos` int(11) NOT NULL,
  `Id_materias` int(11) NOT NULL,
  PRIMARY KEY (`Id_calificaciones`,`Id_alumnos`,`Id_materias`),
  KEY `Id_materias` (`Id_materias`),
  KEY `Id_alumnos` (`Id_alumnos`),
  CONSTRAINT `calificaciones_ibfk_1` FOREIGN KEY (`Id_materias`) REFERENCES `materias` (`Id_materias`),
  CONSTRAINT `calificaciones_ibfk_2` FOREIGN KEY (`Id_alumnos`) REFERENCES `alumnos` (`Id_alumnos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calificaciones`
--

LOCK TABLES `calificaciones` WRITE;
/*!40000 ALTER TABLE `calificaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `calificaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campus`
--

DROP TABLE IF EXISTS `campus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campus` (
  `Id_campus` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `Id_direcciones` int(11) NOT NULL,
  PRIMARY KEY (`Id_campus`,`Id_direcciones`),
  KEY `Id_direcciones` (`Id_direcciones`),
  CONSTRAINT `campus_ibfk_1` FOREIGN KEY (`Id_direcciones`) REFERENCES `direcciones` (`Id_direcciones`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campus`
--

LOCK TABLES `campus` WRITE;
/*!40000 ALTER TABLE `campus` DISABLE KEYS */;
INSERT INTO `campus` VALUES (1,'Santa Maria',1),(2,'Queretaro',2),(3,'Irapuato',5);
/*!40000 ALTER TABLE `campus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carrera_asignada`
--

DROP TABLE IF EXISTS `carrera_asignada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrera_asignada` (
  `Id_carrera_asignada` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id_carrera_asignada`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrera_asignada`
--

LOCK TABLES `carrera_asignada` WRITE;
/*!40000 ALTER TABLE `carrera_asignada` DISABLE KEYS */;
INSERT INTO `carrera_asignada` VALUES (1,'Fisioterapia y rehabilitacion'),(2,'Medicina'),(3,'Nutricion'),(4,'Optometria'),(5,'Psicologia'),(6,'Administracion'),(7,'Comercio Electronico y Administracion'),(8,'Comercio Internacional'),(9,'Contaduria Publica'),(10,'Desarrollo Empresarial'),(11,'Gastronomia'),(12,'Informatica Administrativa'),(13,'Mercadotecnia y Ventas'),(14,'Ciencias de la Comunicacion'),(15,'Cultura fisica y deporte'),(16,'Derecho'),(17,'Filosofia'),(18,'Lenguas europeas'),(19,'Arquitectura'),(20,'Disenio Grafico'),(21,'Disenio de Interiores'),(22,'Ingenieria Industrial en Procesos y Servicios'),(23,'Ingenieria en Mecatronica'),(24,'Ingeniera en Sistemas Computacionales'),(25,'Agronegocios'),(26,'Ciencias ambientales'),(27,'Ingenieria en Innovacion y Tecnologia Agricola');
/*!40000 ALTER TABLE `carrera_asignada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciclos_escolares`
--

DROP TABLE IF EXISTS `ciclos_escolares`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciclos_escolares` (
  `Id_ciclos_escolares` int(11) NOT NULL AUTO_INCREMENT,
  `Inicio_ciclo_escolar` date NOT NULL,
  `Fin_periodo_escolar` date NOT NULL,
  `Id_periodos` int(11) NOT NULL,
  PRIMARY KEY (`Id_ciclos_escolares`,`Id_periodos`),
  KEY `Id_periodos` (`Id_periodos`),
  CONSTRAINT `ciclos_escolares_ibfk_1` FOREIGN KEY (`Id_periodos`) REFERENCES `periodos` (`Id_periodos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciclos_escolares`
--

LOCK TABLES `ciclos_escolares` WRITE;
/*!40000 ALTER TABLE `ciclos_escolares` DISABLE KEYS */;
/*!40000 ALTER TABLE `ciclos_escolares` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clases`
--

DROP TABLE IF EXISTS `clases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clases` (
  `Id_clases` int(11) NOT NULL AUTO_INCREMENT,
  `Id_facultades_carreras` int(11) NOT NULL,
  `Id_materias` int(11) NOT NULL,
  `Id_docentes` int(11) NOT NULL,
  `Id_grupos` int(11) NOT NULL,
  `Id_horarios` int(11) NOT NULL,
  PRIMARY KEY (`Id_clases`,`Id_facultades_carreras`,`Id_materias`,`Id_docentes`,`Id_grupos`,`Id_horarios`),
  KEY `Id_facultades_carreras` (`Id_facultades_carreras`),
  KEY `Id_materias` (`Id_materias`),
  KEY `Id_docentes` (`Id_docentes`),
  KEY `Id_grupos` (`Id_grupos`),
  KEY `Id_horarios` (`Id_horarios`),
  CONSTRAINT `clases_ibfk_1` FOREIGN KEY (`Id_facultades_carreras`) REFERENCES `facultades_carreras` (`Id_facultades_carreras`),
  CONSTRAINT `clases_ibfk_2` FOREIGN KEY (`Id_materias`) REFERENCES `materias` (`Id_materias`),
  CONSTRAINT `clases_ibfk_3` FOREIGN KEY (`Id_docentes`) REFERENCES `docentes` (`Id_docentes`),
  CONSTRAINT `clases_ibfk_4` FOREIGN KEY (`Id_grupos`) REFERENCES `grupos` (`Id_grupos`),
  CONSTRAINT `clases_ibfk_5` FOREIGN KEY (`Id_horarios`) REFERENCES `horarios` (`Id_horarios`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clases`
--

LOCK TABLES `clases` WRITE;
/*!40000 ALTER TABLE `clases` DISABLE KEYS */;
/*!40000 ALTER TABLE `clases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `direcciones`
--

DROP TABLE IF EXISTS `direcciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `direcciones` (
  `Id_direcciones` int(11) NOT NULL AUTO_INCREMENT,
  `calle` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `colonia` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `CP` int(11) NOT NULL,
  `Id_paises` int(11) NOT NULL,
  `Id_estados` int(11) NOT NULL,
  `ciudad` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `municipios_delegaciones` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`Id_direcciones`,`Id_paises`,`Id_estados`),
  KEY `Id_paises` (`Id_paises`),
  KEY `Id_estados` (`Id_estados`),
  CONSTRAINT `direcciones_ibfk_1` FOREIGN KEY (`Id_paises`) REFERENCES `paises` (`Id_paises`),
  CONSTRAINT `direcciones_ibfk_2` FOREIGN KEY (`Id_estados`) REFERENCES `estados` (`Id_estados`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direcciones`
--

LOCK TABLES `direcciones` WRITE;
/*!40000 ALTER TABLE `direcciones` DISABLE KEYS */;
INSERT INTO `direcciones` VALUES (1,'Blvrd Juan Pablo II',555,'Santa Maria de Guido',58090,157,16,'Morelia','Morelia'),(2,'Av. Jose Maria Pino Suarez',339,'Ninios Heroes',76010,157,22,'Santiago de Queretaro','Santiago de Queretaro'),(3,'Hermon',52,'Fracc Jardines del Valle',58350,157,16,'Morelia','Morelia'),(5,'Rosario',454,'tijeras',588958,4,2,'tijerina','paloma');
/*!40000 ALTER TABLE `direcciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docentes`
--

DROP TABLE IF EXISTS `docentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `docentes` (
  `Id_docentes` int(11) NOT NULL AUTO_INCREMENT,
  `Nomina` bigint(20) NOT NULL,
  `Id_informacion_personas` int(11) NOT NULL,
  `Id_facultades_carreras` int(11) NOT NULL,
  `Estudios` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `Especialidades` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `RFC` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Tipo` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id_docentes`,`Id_informacion_personas`,`Id_facultades_carreras`),
  KEY `Id_facultades_carreras` (`Id_facultades_carreras`),
  KEY `Id_informacion_personas` (`Id_informacion_personas`),
  CONSTRAINT `docentes_ibfk_1` FOREIGN KEY (`Id_facultades_carreras`) REFERENCES `facultades_carreras` (`Id_facultades_carreras`),
  CONSTRAINT `docentes_ibfk_2` FOREIGN KEY (`Id_informacion_personas`) REFERENCES `informacion_personas` (`Id_informacion_personas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docentes`
--

LOCK TABLES `docentes` WRITE;
/*!40000 ALTER TABLE `docentes` DISABLE KEYS */;
/*!40000 ALTER TABLE `docentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estados`
--

DROP TABLE IF EXISTS `estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estados` (
  `Id_estados` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id_estados`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES (1,'Aguascalientes'),(2,'Baja California'),(3,'Baja California Sur'),(4,'Campeche'),(5,'Chiapas'),(6,'Chihuahua'),(7,'Coahuila de Zaragoza'),(8,'Colima'),(9,'Ciudad de Mexico'),(10,'Durango'),(11,'Guanajuato'),(12,'Guerrero'),(13,'Hidalgo'),(14,'Jalisco'),(15,'Mexico'),(16,'Michoacan de Ocampo'),(17,'Morelos'),(18,'Nayarit'),(19,'Nuevo Leon'),(20,'Oaxaca'),(21,'Puebla'),(22,'Queretaro'),(23,'Quintana Roo'),(24,'San Luis Potosi'),(25,'Sinaloa'),(26,'Sonora'),(27,'Tabasco'),(28,'Tamaulipas'),(29,'Tlaxcala'),(30,'Veracruz Ignacio de la Llave'),(31,'Yucatan'),(32,'Zacatecas');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facultad_asignada`
--

DROP TABLE IF EXISTS `facultad_asignada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facultad_asignada` (
  `Id_facultad_asignada` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id_facultad_asignada`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facultad_asignada`
--

LOCK TABLES `facultad_asignada` WRITE;
/*!40000 ALTER TABLE `facultad_asignada` DISABLE KEYS */;
INSERT INTO `facultad_asignada` VALUES (1,'Ciencias de la salud'),(2,'Economico administrativas'),(3,'Sociales y humanidades'),(4,'Artes'),(5,'Ciencias exactas e ingenierias'),(6,'Ciencias biologicas y agropecuarias');
/*!40000 ALTER TABLE `facultad_asignada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facultades_carreras`
--

DROP TABLE IF EXISTS `facultades_carreras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facultades_carreras` (
  `Id_facultades_carreras` int(11) NOT NULL AUTO_INCREMENT,
  `Id_facultad_asignada` int(11) NOT NULL,
  `Id_carrera_asignada` int(11) NOT NULL,
  PRIMARY KEY (`Id_facultades_carreras`,`Id_facultad_asignada`,`Id_carrera_asignada`),
  KEY `Id_facultad_asignada` (`Id_facultad_asignada`,`Id_carrera_asignada`),
  KEY `Id_carrera_asignada` (`Id_carrera_asignada`),
  CONSTRAINT `facultades_carreras_ibfk_1` FOREIGN KEY (`Id_facultad_asignada`) REFERENCES `facultad_asignada` (`Id_facultad_asignada`),
  CONSTRAINT `facultades_carreras_ibfk_2` FOREIGN KEY (`Id_carrera_asignada`) REFERENCES `carrera_asignada` (`Id_carrera_asignada`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facultades_carreras`
--

LOCK TABLES `facultades_carreras` WRITE;
/*!40000 ALTER TABLE `facultades_carreras` DISABLE KEYS */;
INSERT INTO `facultades_carreras` VALUES (1,1,1),(2,1,2),(3,1,3),(4,1,4),(5,1,5),(6,2,6),(7,2,7),(8,2,8),(9,2,9),(10,2,10),(11,2,11),(12,2,12),(13,2,13),(14,3,14),(15,3,15),(16,3,16),(17,3,17),(18,3,18),(19,4,19),(20,4,20),(21,4,21),(22,5,22),(23,5,23),(24,5,24),(25,6,25),(26,6,26),(27,6,27);
/*!40000 ALTER TABLE `facultades_carreras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupos`
--

DROP TABLE IF EXISTS `grupos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupos` (
  `Id_grupos` int(11) NOT NULL AUTO_INCREMENT,
  `Id_horarios` int(11) NOT NULL,
  `Id_salones` int(11) NOT NULL,
  `Turno` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id_grupos`,`Id_horarios`,`Id_salones`),
  KEY `Id_salones` (`Id_salones`),
  KEY `Id_horarios` (`Id_horarios`),
  CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`Id_salones`) REFERENCES `salones` (`Id_salones`),
  CONSTRAINT `grupos_ibfk_2` FOREIGN KEY (`Id_horarios`) REFERENCES `horarios` (`Id_horarios`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupos`
--

LOCK TABLES `grupos` WRITE;
/*!40000 ALTER TABLE `grupos` DISABLE KEYS */;
/*!40000 ALTER TABLE `grupos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horarios`
--

DROP TABLE IF EXISTS `horarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horarios` (
  `Id_horarios` int(11) NOT NULL AUTO_INCREMENT,
  `Id_usuarios` int(11) NOT NULL,
  `hora_entrada` time NOT NULL,
  `hora_salida` time NOT NULL,
  `hora_entrada_break` time NOT NULL,
  `hora_salida_break` time NOT NULL,
  PRIMARY KEY (`Id_horarios`,`Id_usuarios`),
  KEY `Id_usuarios` (`Id_usuarios`),
  CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`Id_usuarios`) REFERENCES `usuarios` (`Id_usuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horarios`
--

LOCK TABLES `horarios` WRITE;
/*!40000 ALTER TABLE `horarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `horarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `informacion_personas`
--

DROP TABLE IF EXISTS `informacion_personas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `informacion_personas` (
  `Id_informacion_personas` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `apellidos` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `fch_nacimiento` date NOT NULL,
  `Id_direcciones` int(11) NOT NULL,
  `sexo` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `correo` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `Id_campus` int(11) NOT NULL,
  `CURP` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id_informacion_personas`,`Id_direcciones`,`Id_campus`),
  KEY `Id_direcciones` (`Id_direcciones`),
  KEY `Id_campus` (`Id_campus`),
  CONSTRAINT `informacion_personas_ibfk_1` FOREIGN KEY (`Id_direcciones`) REFERENCES `direcciones` (`Id_direcciones`),
  CONSTRAINT `informacion_personas_ibfk_2` FOREIGN KEY (`Id_campus`) REFERENCES `campus` (`Id_campus`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `informacion_personas`
--

LOCK TABLES `informacion_personas` WRITE;
/*!40000 ALTER TABLE `informacion_personas` DISABLE KEYS */;
INSERT INTO `informacion_personas` VALUES (1,'Raul Adolfo','Torres Vargas','1994-08-11',3,'Masculino','raul@raul.com',4434578343,1,'TOVR940811HMNRRL05');
/*!40000 ALTER TABLE `informacion_personas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materias`
--

DROP TABLE IF EXISTS `materias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materias` (
  `Id_materias` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `semestre` int(11) NOT NULL,
  `Id_temarios` int(11) NOT NULL,
  `horas_clase_semana` int(11) NOT NULL,
  `horas_laboratorio_semana` int(11) NOT NULL,
  PRIMARY KEY (`Id_materias`,`Id_temarios`),
  KEY `Id_temarios` (`Id_temarios`),
  CONSTRAINT `materias_ibfk_1` FOREIGN KEY (`Id_temarios`) REFERENCES `temarios` (`Id_temarios`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materias`
--

LOCK TABLES `materias` WRITE;
/*!40000 ALTER TABLE `materias` DISABLE KEYS */;
/*!40000 ALTER TABLE `materias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paises`
--

DROP TABLE IF EXISTS `paises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paises` (
  `Id_paises` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id_paises`)
) ENGINE=InnoDB AUTO_INCREMENT=261 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paises`
--

LOCK TABLES `paises` WRITE;
/*!40000 ALTER TABLE `paises` DISABLE KEYS */;
INSERT INTO `paises` VALUES (1,'Afganistan'),(2,'Akrotiri'),(3,'Albania'),(4,'Alemania'),(5,'Andorra'),(6,'Angola'),(7,'Anguila'),(8,'Antartida'),(9,'Antigua y Barbuda'),(10,'Arabia Saudi'),(11,'Arctic Ocean'),(12,'Argelia'),(13,'Argentina'),(14,'Armenia'),(15,'Aruba'),(16,'Ashmore and Cartier Islands'),(17,'Atlantic Ocean'),(18,'Australia'),(19,'Austria'),(20,'Azerbaiyan'),(21,'Bahamas'),(22,'Bahrain'),(23,'Bangladesh'),(24,'Barbados'),(25,'Belgica'),(26,'Belice'),(27,'Benin'),(28,'Bermudas'),(29,'Bielorrusia'),(30,'Birmania; Myanmar'),(31,'Bolivia'),(32,'Bosnia y Hercegovina'),(33,'Botsuana'),(34,'Brasil'),(35,'Brunei'),(36,'Bulgaria'),(37,'Burkina Faso'),(38,'Burundi'),(39,'Butan'),(40,'Cabo Verde'),(41,'Camboya'),(42,'Camerun'),(43,'Canada'),(44,'Chad'),(45,'Chile'),(46,'China'),(47,'Chipre'),(48,'Clipperton Island'),(49,'Colombia'),(50,'Comoras'),(51,'Congo'),(52,'Coral Sea Islands'),(53,'Corea del Norte'),(54,'Corea del Sur'),(55,'Costa de Marfil'),(56,'Costa Rica'),(57,'Croacia'),(58,'Cuba'),(59,'Curacao'),(60,'Dhekelia'),(61,'Dinamarca'),(62,'Dominica'),(63,'Ecuador'),(64,'Egipto'),(65,'El Salvador'),(66,'El Vaticano'),(67,'Emiratos Arabes Unidos'),(68,'Eritrea'),(69,'Eslovaquia'),(70,'Eslovenia'),(71,'Espania'),(72,'Estados Unidos'),(73,'Estonia'),(74,'Etiopia'),(75,'Filipinas'),(76,'Finlandia'),(77,'Fiyi'),(78,'Francia'),(79,'Gabon'),(80,'Gambia'),(81,'Gaza Strip'),(82,'Georgia'),(83,'Ghana'),(84,'Gibraltar'),(85,'Granada'),(86,'Grecia'),(87,'Groenlandia'),(88,'Guam'),(89,'Guatemala'),(90,'Guernsey'),(91,'Guinea'),(92,'Guinea Ecuatorial'),(93,'Guinea-Bissau'),(94,'Guyana'),(95,'Haiti'),(96,'Honduras'),(97,'Hong Kong'),(98,'Hungria'),(99,'India'),(100,'Indian Ocean'),(101,'Indonesia'),(102,'Iran'),(103,'Iraq'),(104,'Irlanda'),(105,'Isla Bouvet'),(106,'Isla Christmas'),(107,'Isla Norfolk'),(108,'Islandia'),(109,'Islas Caiman'),(110,'Islas Cocos'),(111,'Islas Cook'),(112,'Islas Feroe'),(113,'Islas Georgia del Sur y Sandwich del Sur'),(114,'Islas Heard y McDonald'),(115,'Islas Malvinas'),(116,'Isle of Man'),(117,'Islas Marianas del Norte'),(118,'Islas Marshall'),(119,'Islas Pitcairn'),(120,'Islas Salomon'),(121,'Islas Turcas y Caicos'),(122,'Islas Virgenes Americanas'),(123,'Islas Virgenes Britanicas'),(124,'Israel'),(125,'Italia'),(126,'Jamaica'),(127,'Jan Mayen'),(128,'Japon'),(129,'Jersey'),(130,'Jordania'),(131,'Kazajistan'),(132,'Kenia'),(133,'Kirguizistan'),(134,'Kiribati'),(135,'Kosovo'),(136,'Kuwait'),(137,'Laos'),(138,'Lesoto'),(139,'Letonia'),(140,'Libano'),(141,'Liberia'),(142,'Libia'),(143,'Liechtenstein'),(144,'Lituania'),(145,'Luxemburgo'),(146,'Macao'),(147,'Macedonia'),(148,'Madagascar'),(149,'Malasia'),(150,'Malaui'),(151,'Maldivas'),(152,'Mali'),(153,'Malta'),(154,'Marruecos'),(155,'Mauricio'),(156,'Mauritania'),(157,'Mexico'),(158,'Micronesia'),(159,'Moldavia'),(160,'Monaco'),(161,'Mongolia'),(162,'Montenegro'),(163,'Montserrat'),(164,'Mozambique'),(165,'Mundo'),(166,'Namibia'),(167,'Nauru'),(168,'Navassa Island'),(169,'Nepal'),(170,'Nicaragua'),(171,'Niger'),(172,'Nigeria'),(173,'Niue'),(174,'Noruega'),(175,'Nueva Caledonia'),(176,'Nueva Zelanda'),(177,'Oman'),(178,'Pacific Ocean'),(179,'Paises Bajos'),(180,'Pakistan'),(181,'Palaos'),(182,'Panama'),(183,'Papua-Nueva Guinea'),(184,'Paracel Islands'),(185,'Paraguay'),(186,'Peru'),(187,'Polinesia Francesa'),(188,'Polonia'),(189,'Portugal'),(190,'Puerto Rico'),(191,'Qatar'),(192,'Reino Unido'),(193,'Republica Centroafricana'),(194,'Republica Checa'),(195,'Republica Democratica del Congo'),(196,'Republica Dominicana'),(197,'Ruanda'),(198,'Rumania'),(199,'Rusia'),(200,'Sahara Occidental'),(201,'Samoa'),(202,'Samoa Americana'),(203,'San Bartolome'),(204,'San Cristobal y Nieves'),(205,'San Marino'),(206,'San Martin'),(207,'San Pedro y Miquelon'),(208,'San Vicente y las Granadinas'),(209,'Santa Helena'),(210,'Santa Lucia'),(211,'Santo Tome y Principe'),(212,'Senegal'),(213,'Serbia'),(214,'Seychelles'),(215,'Sierra Leona'),(216,'Singapur'),(217,'Sint Maarten'),(218,'Siria'),(219,'Somalia'),(220,'Southern Ocean'),(221,'Spratly Islands'),(222,'Sri Lanka'),(223,'Suazilandia'),(224,'Sudafrica'),(225,'Sudan'),(226,'Sudan del Sur'),(227,'Suecia'),(228,'Suiza'),(229,'Surinam'),(230,'Svalbard y Jan Mayen'),(231,'Tailandia'),(232,'Taiwan'),(233,'Tanzania'),(234,'Tayikistan'),(235,'Territorio Britanico del Oceano Indico'),(236,'Territorios Australes Franceses'),(237,'Timor Oriental'),(238,'Togo'),(239,'Tokelau'),(240,'Tonga'),(241,'Trinidad y Tobago'),(242,'Tunez'),(243,'Turkmenistan'),(244,'Turquia'),(245,'Tuvalu'),(246,'Ucrania'),(247,'Uganda'),(248,'Union Europea'),(249,'Uruguay'),(250,'Uzbekistan'),(251,'Vanuatu'),(252,'Venezuela'),(253,'Vietnam'),(254,'Wake Island'),(255,'Wallis y Futuna'),(256,'West Bank'),(257,'Yemen'),(258,'Yibuti'),(259,'Zambia'),(260,'Zimbabue');
/*!40000 ALTER TABLE `paises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodos`
--

DROP TABLE IF EXISTS `periodos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodos` (
  `Id_periodos` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo_periodo` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id_periodos`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodos`
--

LOCK TABLES `periodos` WRITE;
/*!40000 ALTER TABLE `periodos` DISABLE KEYS */;
INSERT INTO `periodos` VALUES (1,'Semestral'),(2,'Cuatrimestral'),(3,'Trimestral'),(4,'Variable');
/*!40000 ALTER TABLE `periodos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan_estudios`
--

DROP TABLE IF EXISTS `plan_estudios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plan_estudios` (
  `Id_plan_estudios` int(11) NOT NULL AUTO_INCREMENT,
  `RVOE` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `Id_facultades_carreras` int(11) NOT NULL,
  `Id_materias` int(11) NOT NULL,
  PRIMARY KEY (`Id_plan_estudios`,`Id_facultades_carreras`,`Id_materias`),
  KEY `Id_facultades_carreras` (`Id_facultades_carreras`),
  KEY `Id_materias` (`Id_materias`),
  CONSTRAINT `plan_estudios_ibfk_1` FOREIGN KEY (`Id_facultades_carreras`) REFERENCES `facultades_carreras` (`Id_facultades_carreras`),
  CONSTRAINT `plan_estudios_ibfk_2` FOREIGN KEY (`Id_materias`) REFERENCES `materias` (`Id_materias`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan_estudios`
--

LOCK TABLES `plan_estudios` WRITE;
/*!40000 ALTER TABLE `plan_estudios` DISABLE KEYS */;
/*!40000 ALTER TABLE `plan_estudios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salones`
--

DROP TABLE IF EXISTS `salones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salones` (
  `Id_salones` int(11) NOT NULL AUTO_INCREMENT,
  `edificio` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `numero` bigint(20) DEFAULT NULL,
  `capacidad_alumnos` bigint(20) NOT NULL,
  `tipo` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id_salones`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salones`
--

LOCK TABLES `salones` WRITE;
/*!40000 ALTER TABLE `salones` DISABLE KEYS */;
INSERT INTO `salones` VALUES (1,'Edificio C',0,60,'Auditorio'),(2,'Edificio D',0,100,'Auditorio'),(3,'Edificio D',0,100,'Auditorio');
/*!40000 ALTER TABLE `salones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temarios`
--

DROP TABLE IF EXISTS `temarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temarios` (
  `Id_temarios` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_temas` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `semestre` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id_temarios`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temarios`
--

LOCK TABLES `temarios` WRITE;
/*!40000 ALTER TABLE `temarios` DISABLE KEYS */;
INSERT INTO `temarios` VALUES (1,'Arboles y grafos','Tercer semestre');
/*!40000 ALTER TABLE `temarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `Id_usuarios` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `clave` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `tipo` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id_usuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (2,'cylindrusskary','cylindrusskary','Alumno'),(4,'asasas','asasq','Administrativo');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-27 13:05:33
