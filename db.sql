create database sumatufuerza;

use sumatufuerza;

create table registro (nombre varchar(200),email varchar(256), fuerza varchar(300));

alter table registro add id integer;

alter table registro add primary key(id);

alter table registro modify id integer auto_increment;

alter table registro add fecha_ult_modificacion datetime;

alter table registro add fecha_alta datetime;

--
-- Table structure for table `usuarios_bo`
--

DROP TABLE IF EXISTS `usuarios_bo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios_bo` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `id_perfil` double DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `estado` smallint(1) DEFAULT NULL,
  `fecha_ult_acceso` datetime DEFAULT NULL,
  `fecha_ult_modificacion` datetime DEFAULT NULL,
  `fecha_alta` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `NewIndex1` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios_bo`
--

LOCK TABLES `usuarios_bo` WRITE;
/*!40000 ALTER TABLE `usuarios_bo` DISABLE KEYS */;
INSERT INTO `usuarios_bo` VALUES (1,'admin','0192023a7bbd73250516f069df18b500','admin','admin',1,'',1,NULL,NULL,'2013-07-22 18:43:08');
/*!40000 ALTER TABLE `usuarios_bo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
