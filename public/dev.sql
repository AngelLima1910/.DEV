CREATE DATABASE  IF NOT EXISTS `dev` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `dev`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: dev
-- ------------------------------------------------------
-- Server version	8.0.33

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
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_06_03_183142_create_t_cat_carreras_table',1),(6,'2023_06_03_183206_create_t_cat_periodos_table',1),(7,'2023_06_03_183228_create_t_cat_creditos_table',1),(8,'2023_06_03_183346_create_t_alumnos_table',1),(9,'2023_06_05_032700_create_t_cat_estatus_table',1),(10,'2023_06_05_033110_create_t_creditos_table',1),(11,'2023_06_06_013502_create_t_constancias_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_alumnos`
--

DROP TABLE IF EXISTS `t_alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_alumnos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `id_carrera` int unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paterno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `control` int NOT NULL,
  `celular` bigint NOT NULL,
  `carrera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `procedencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `t_alumnos_id_carrera_foreign` (`id_carrera`),
  CONSTRAINT `t_alumnos_id_carrera_foreign` FOREIGN KEY (`id_carrera`) REFERENCES `t_cat_carreras` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_alumnos`
--

LOCK TABLES `t_alumnos` WRITE;
/*!40000 ALTER TABLE `t_alumnos` DISABLE KEYS */;
INSERT INTO `t_alumnos` VALUES (1,1,'Angel','Lima','López',181190120,5547601941,'1','2000-10-19','Conalep Tlalpan I','2018-08-27','2023-06-04 06:59:19','2023-06-04 07:11:29'),(2,1,'Leslie Ithadui','Martínez','Mata',181190095,5539626923,'1','1996-11-27','Conalep Tlalpan I','2018-08-22','2023-06-06 08:12:57','2023-06-06 08:12:57');
/*!40000 ALTER TABLE `t_alumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_cat_carreras`
--

DROP TABLE IF EXISTS `t_cat_carreras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_cat_carreras` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_cat_carreras`
--

LOCK TABLES `t_cat_carreras` WRITE;
/*!40000 ALTER TABLE `t_cat_carreras` DISABLE KEYS */;
INSERT INTO `t_cat_carreras` VALUES (1,'Ing. en Sistemas Computacionales','1',NULL,NULL),(2,'Ing. Gestión Empresarial','2',NULL,NULL),(3,'Ing. Industrial','3',NULL,NULL);
/*!40000 ALTER TABLE `t_cat_carreras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_cat_creditos`
--

DROP TABLE IF EXISTS `t_cat_creditos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_cat_creditos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_cat_creditos`
--

LOCK TABLES `t_cat_creditos` WRITE;
/*!40000 ALTER TABLE `t_cat_creditos` DISABLE KEYS */;
INSERT INTO `t_cat_creditos` VALUES (1,'Crédito Deportivo','Primer crédito',NULL,NULL),(2,'Crédito Cultural','Segundo crédito',NULL,NULL),(3,'Crédito Civico','Tercer crédito',NULL,NULL);
/*!40000 ALTER TABLE `t_cat_creditos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_cat_estatus`
--

DROP TABLE IF EXISTS `t_cat_estatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_cat_estatus` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_cat_estatus`
--

LOCK TABLES `t_cat_estatus` WRITE;
/*!40000 ALTER TABLE `t_cat_estatus` DISABLE KEYS */;
INSERT INTO `t_cat_estatus` VALUES (1,'En trámite','1',NULL,NULL),(2,'Liberado','2',NULL,NULL);
/*!40000 ALTER TABLE `t_cat_estatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_cat_periodos`
--

DROP TABLE IF EXISTS `t_cat_periodos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_cat_periodos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_cat_periodos`
--

LOCK TABLES `t_cat_periodos` WRITE;
/*!40000 ALTER TABLE `t_cat_periodos` DISABLE KEYS */;
INSERT INTO `t_cat_periodos` VALUES (1,'Ene - Jun 2023','Primer periodo',NULL,NULL),(2,'Ago - Dic 2023','Segundo periodo',NULL,NULL);
/*!40000 ALTER TABLE `t_cat_periodos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_constancias`
--

DROP TABLE IF EXISTS `t_constancias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_constancias` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `id_alumnos` int unsigned NOT NULL,
  `id_periodos` int unsigned NOT NULL,
  `estudiante` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `control` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actividad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periodo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `grupo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hrsAcreditadas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `t_constancias_id_alumnos_foreign` (`id_alumnos`),
  KEY `t_constancias_id_periodos_foreign` (`id_periodos`),
  CONSTRAINT `t_constancias_id_alumnos_foreign` FOREIGN KEY (`id_alumnos`) REFERENCES `t_alumnos` (`id`),
  CONSTRAINT `t_constancias_id_periodos_foreign` FOREIGN KEY (`id_periodos`) REFERENCES `t_cat_periodos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_constancias`
--

LOCK TABLES `t_constancias` WRITE;
/*!40000 ALTER TABLE `t_constancias` DISABLE KEYS */;
INSERT INTO `t_constancias` VALUES (1,1,1,'1','1','Futbol','1','2023-06-05','8 SIS','5 horas deportivas','2023-06-06 08:10:57','2023-06-06 08:10:57'),(2,2,1,'2','2','Futbol','1','2023-06-05','8 SIS','5 horas deportivas','2023-06-06 08:17:38','2023-06-06 08:17:38');
/*!40000 ALTER TABLE `t_constancias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_creditos`
--

DROP TABLE IF EXISTS `t_creditos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_creditos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `id_alumnos` int unsigned NOT NULL,
  `id_creditos` int unsigned NOT NULL,
  `id_periodos` int unsigned NOT NULL,
  `id_estatus` int unsigned NOT NULL,
  `credito` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mooc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `evidencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estudiante` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periodo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carpeta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `t_creditos_id_alumnos_foreign` (`id_alumnos`),
  KEY `t_creditos_id_creditos_foreign` (`id_creditos`),
  KEY `t_creditos_id_periodos_foreign` (`id_periodos`),
  KEY `t_creditos_id_estatus_foreign` (`id_estatus`),
  CONSTRAINT `t_creditos_id_alumnos_foreign` FOREIGN KEY (`id_alumnos`) REFERENCES `t_alumnos` (`id`),
  CONSTRAINT `t_creditos_id_creditos_foreign` FOREIGN KEY (`id_creditos`) REFERENCES `t_cat_creditos` (`id`),
  CONSTRAINT `t_creditos_id_estatus_foreign` FOREIGN KEY (`id_estatus`) REFERENCES `t_cat_estatus` (`id`),
  CONSTRAINT `t_creditos_id_periodos_foreign` FOREIGN KEY (`id_periodos`) REFERENCES `t_cat_periodos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_creditos`
--

LOCK TABLES `t_creditos` WRITE;
/*!40000 ALTER TABLE `t_creditos` DISABLE KEYS */;
INSERT INTO `t_creditos` VALUES (1,2,2,1,1,'2','certificadoMOOC.pdf','LESLIE.pdf','2','1','1','Carpeta 009-2023-1','2023-06-05','2023-06-06 08:14:12','2023-06-06 08:14:12');
/*!40000 ALTER TABLE `t_creditos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','angellima200@hotmail.com','admin',NULL,'$2y$10$FkPTSMuzayduLWjfoMpaR.J.vko8M1fJWFDb7wC18As8cO3/evK92',NULL,'2023-06-06 07:42:51','2023-06-06 07:42:51');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `v_constancias`
--

DROP TABLE IF EXISTS `v_constancias`;
/*!50001 DROP VIEW IF EXISTS `v_constancias`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `v_constancias` AS SELECT 
 1 AS `id`,
 1 AS `nombre`,
 1 AS `paterno`,
 1 AS `materno`,
 1 AS `control`,
 1 AS `actividad`,
 1 AS `grupo`,
 1 AS `periodo`,
 1 AS `horaAcreditada`,
 1 AS `fecha`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `v_creditos`
--

DROP TABLE IF EXISTS `v_creditos`;
/*!50001 DROP VIEW IF EXISTS `v_creditos`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `v_creditos` AS SELECT 
 1 AS `id`,
 1 AS `credito`,
 1 AS `mooc`,
 1 AS `evidencia`,
 1 AS `estudiante`,
 1 AS `periodo`,
 1 AS `estatus`,
 1 AS `carpeta`,
 1 AS `fechaReg`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `v_estudiantes`
--

DROP TABLE IF EXISTS `v_estudiantes`;
/*!50001 DROP VIEW IF EXISTS `v_estudiantes`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `v_estudiantes` AS SELECT 
 1 AS `id`,
 1 AS `nombreAlumno`,
 1 AS `apellidoPaterno`,
 1 AS `apellidoMaterno`,
 1 AS `numeroControl`,
 1 AS `celular`,
 1 AS `carrera`,
 1 AS `fechaNac`,
 1 AS `procedencia`,
 1 AS `ingreso`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `v_constancias`
--

/*!50001 DROP VIEW IF EXISTS `v_constancias`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_constancias` AS select `t_constancias`.`id` AS `id`,`t_alumnos`.`nombre` AS `nombre`,`t_alumnos`.`paterno` AS `paterno`,`t_alumnos`.`materno` AS `materno`,`t_alumnos`.`control` AS `control`,`t_constancias`.`actividad` AS `actividad`,`t_constancias`.`grupo` AS `grupo`,`t_cat_periodos`.`nombre` AS `periodo`,`t_constancias`.`hrsAcreditadas` AS `horaAcreditada`,`t_constancias`.`fecha` AS `fecha` from ((`t_constancias` join `t_alumnos` on((`t_constancias`.`id_alumnos` = `t_alumnos`.`id`))) join `t_cat_periodos` on((`t_constancias`.`id_periodos` = `t_cat_periodos`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_creditos`
--

/*!50001 DROP VIEW IF EXISTS `v_creditos`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_creditos` AS select `t_creditos`.`id` AS `id`,`t_cat_creditos`.`nombre` AS `credito`,`t_creditos`.`mooc` AS `mooc`,`t_creditos`.`evidencia` AS `evidencia`,`t_alumnos`.`control` AS `estudiante`,`t_cat_periodos`.`nombre` AS `periodo`,`t_cat_estatus`.`nombre` AS `estatus`,`t_creditos`.`carpeta` AS `carpeta`,`t_creditos`.`fecha_registro` AS `fechaReg` from ((((`t_creditos` join `t_cat_creditos` on((`t_creditos`.`id_creditos` = `t_cat_creditos`.`id`))) join `t_alumnos` on((`t_creditos`.`id_alumnos` = `t_alumnos`.`id`))) join `t_cat_periodos` on((`t_creditos`.`id_periodos` = `t_cat_periodos`.`id`))) join `t_cat_estatus` on((`t_creditos`.`id_estatus` = `t_cat_estatus`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_estudiantes`
--

/*!50001 DROP VIEW IF EXISTS `v_estudiantes`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_estudiantes` AS select `t_alumnos`.`id` AS `id`,`t_alumnos`.`nombre` AS `nombreAlumno`,`t_alumnos`.`paterno` AS `apellidoPaterno`,`t_alumnos`.`materno` AS `apellidoMaterno`,`t_alumnos`.`control` AS `numeroControl`,`t_alumnos`.`celular` AS `celular`,`t_cat_carreras`.`nombre` AS `carrera`,`t_alumnos`.`fecha_nac` AS `fechaNac`,`t_alumnos`.`procedencia` AS `procedencia`,`t_alumnos`.`fecha_ingreso` AS `ingreso` from (`t_alumnos` join `t_cat_carreras` on((`t_alumnos`.`id_carrera` = `t_cat_carreras`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-06 10:42:28
