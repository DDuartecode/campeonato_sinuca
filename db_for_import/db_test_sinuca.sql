CREATE DATABASE  IF NOT EXISTS `db_test_sinuca` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_test_sinuca`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_test_sinuca
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.14-MariaDB

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
-- Table structure for table `tb_tables`
--

DROP TABLE IF EXISTS `tb_tables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_tables` (
  `id_table` int(11) NOT NULL AUTO_INCREMENT,
  `name_table` varchar(100) NOT NULL,
  `awardDescription_table` varchar(250) DEFAULT NULL,
  `maximum_score` int(11) DEFAULT NULL,
  `rule_score` varchar(250) DEFAULT NULL,
  `maximum_team_number` int(11) DEFAULT NULL,
  `score_by_victory` int(11) NOT NULL,
  PRIMARY KEY (`id_table`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_tables`
--

LOCK TABLES `tb_tables` WRITE;
/*!40000 ALTER TABLE `tb_tables` DISABLE KEYS */;
INSERT INTO `tb_tables` VALUES (7,'Campeonato 2020','Uma manga',30,'Vitória 5 pontos - Derrota 0 pontos',6,5),(8,'Campeonato 2021','Caneca do Batman',80,'Vitória 10 pontos - Derrota 0 pontos',4,10),(9,'Campeonato 2022','Um par de meias',100,'Vitória 10 pontos - Derrota 0 pontos',5,10);
/*!40000 ALTER TABLE `tb_tables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_teams`
--

DROP TABLE IF EXISTS `tb_teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_teams` (
  `id_team` int(11) NOT NULL AUTO_INCREMENT,
  `name_team` varchar(100) NOT NULL,
  `player1` varchar(100) NOT NULL,
  `player2` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_team`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_teams`
--

LOCK TABLES `tb_teams` WRITE;
/*!40000 ALTER TABLE `tb_teams` DISABLE KEYS */;
INSERT INTO `tb_teams` VALUES (7,'Titans','João da Faca','Gumercindo Tacada Fatal'),(8,'Taurus','Jean Claude van Damme','Sylvester Stallone'),(9,'Rivals','Bruce Lee','Chuck Norris');
/*!40000 ALTER TABLE `tb_teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_teams_by_tables`
--

DROP TABLE IF EXISTS `tb_teams_by_tables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_teams_by_tables` (
  `id_teams_by_tables` int(11) NOT NULL AUTO_INCREMENT,
  `id_team` int(11) NOT NULL,
  `id_table` int(11) NOT NULL,
  `score_team` int(11) DEFAULT NULL,
  `last_add_score` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_teams_by_tables`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_teams_by_tables`
--

LOCK TABLES `tb_teams_by_tables` WRITE;
/*!40000 ALTER TABLE `tb_teams_by_tables` DISABLE KEYS */;
INSERT INTO `tb_teams_by_tables` VALUES (47,1,3,0,NULL),(48,2,3,80,10),(49,3,3,0,NULL),(50,4,3,0,NULL),(51,1,4,0,NULL),(52,2,4,80,5),(53,3,4,0,NULL),(54,4,4,0,NULL),(55,1,5,80,5),(56,2,5,25,5),(57,3,5,0,NULL),(58,4,5,0,NULL),(59,1,6,85,5),(60,2,6,25,5),(61,3,6,0,NULL),(62,4,6,30,5),(63,7,7,0,NULL),(64,9,8,0,NULL),(65,8,8,0,NULL),(66,7,8,0,NULL),(67,7,9,0,NULL),(68,9,9,0,NULL);
/*!40000 ALTER TABLE `tb_teams_by_tables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'db_test_sinuca'
--

--
-- Dumping routines for database 'db_test_sinuca'
--
/*!50003 DROP PROCEDURE IF EXISTS `sp_table_save` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_table_save`(
pid_table int(11),
pname_table varchar(100),
pawardDescription_table varchar(250),
pmaximum_score int(11),
prule_score varchar(250),
pmaximum_team_number int(11),
pscore_by_victory int(11)
)
BEGIN
	
	IF pid_table > 0 THEN
		
		UPDATE tb_tables
        SET 
            name_table = pname_table,
            awardDescription_table = pawardDescription_table,
            maximum_score = pmaximum_score,
            rule_score = prule_score,
            maximum_team_number = pmaximum_team_number,
            score_by_victory = pscore_by_victory
        WHERE id_table = pid_table;
        
    ELSE
		
		INSERT INTO tb_tables (name_table, awardDescription_table, maximum_score, rule_score, maximum_team_number, score_by_victory) 
        VALUES(pname_table, pawardDescription_table, pmaximum_score, prule_score, pmaximum_team_number, pscore_by_victory);
        
        SET pid_table = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * FROM tb_tables WHERE id_table = pid_table;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_team_save` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_team_save`(
pid_team int(11),
pname_team varchar(100),
pplayer1 varchar(100),
pplayer2 varchar(100)
)
BEGIN
	
	IF pid_team > 0 THEN
		
		UPDATE tb_teams
        SET 
            name_team = pname_team,
            player1 = pplayer1,
            player2 = pplayer2
        WHERE id_team = pid_team;
        
    ELSE
		
		INSERT INTO tb_teams (name_team, player1, player2) 
        VALUES(pname_team, pplayer1, pplayer2);
        
        SET pid_team = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * FROM tb_teams WHERE id_team = pid_team;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-08  0:43:59
