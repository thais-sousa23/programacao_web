-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.3.0 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para amaurirobsonteam
CREATE DATABASE IF NOT EXISTS `amaurirobsonteam` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `amaurirobsonteam`;

-- Copiando estrutura para tabela amaurirobsonteam.academia
CREATE TABLE IF NOT EXISTS `academia` (
  `ID_academia` bigint NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cnpj` text NOT NULL,
  `endereco` text,
  `responsavel` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `telefone` text NOT NULL,
  PRIMARY KEY (`ID_academia`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela amaurirobsonteam.academia: ~2 rows (aproximadamente)
INSERT INTO `academia` (`ID_academia`, `nome`, `cnpj`, `endereco`, `responsavel`, `telefone`) VALUES
	(5, 'Amauri Robson', '33.120.482/0001-99', 'Av Florianopolis, Mexico, 666', 'Marcos José', '77 955912780'),
	(6, 'Pedrinhas Academy', '90.393.366/0001-60', 'Rua das Pedrinhas, Cruzeiro', 'Rock', '(74) 3418-6631');

-- Copiando estrutura para tabela amaurirobsonteam.atleta
CREATE TABLE IF NOT EXISTS `atleta` (
  `ID_atleta` bigint NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `telefone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `dataNascimento` date NOT NULL,
  `email` text,
  `senha` varchar(50) DEFAULT NULL,
  `ID_sexo` bigint NOT NULL,
  `ID_academia` bigint NOT NULL,
  PRIMARY KEY (`ID_atleta`),
  KEY `ID_sexo` (`ID_sexo`),
  KEY `ID_academia` (`ID_academia`),
  CONSTRAINT `atleta_ibfk_1` FOREIGN KEY (`ID_sexo`) REFERENCES `categoria_sexo` (`ID_sexo`),
  CONSTRAINT `atleta_ibfk_2` FOREIGN KEY (`ID_academia`) REFERENCES `academia` (`ID_academia`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela amaurirobsonteam.atleta: ~3 rows (aproximadamente)
INSERT INTO `atleta` (`ID_atleta`, `nome`, `telefone`, `dataNascimento`, `email`, `senha`, `ID_sexo`, `ID_academia`) VALUES
	(1, 'Nádila', '77777777777777', '2000-06-29', 'thais@gmail.com', 'cacau', 4, 5),
	(2, 'Cauan', '77 988480458', '2001-07-12', 'tatai34@gmail.com', 'cacaushow', 5, 5),
	(3, 'Mirela Bispo', '77 998678608', '2002-07-05', 'mirelacome@gmail.com', 'mixao', 5, 5);

-- Copiando estrutura para tabela amaurirobsonteam.campeonato
CREATE TABLE IF NOT EXISTS `campeonato` (
  `ID_campeonato` bigint NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `local` text NOT NULL,
  `data` date NOT NULL,
  `organizador` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`ID_campeonato`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela amaurirobsonteam.campeonato: ~2 rows (aproximadamente)
INSERT INTO `campeonato` (`ID_campeonato`, `nome`, `local`, `data`, `organizador`) VALUES
	(3, 'Konkas Lutas', 'IFBA', '2024-04-04', 'Mirele Bispo'),
	(4, 'Dance and Fat', 'Praça Sá Barreto', '2024-10-15', 'Petter');

-- Copiando estrutura para tabela amaurirobsonteam.categoria_faixa
CREATE TABLE IF NOT EXISTS `categoria_faixa` (
  `ID_faixa` bigint NOT NULL AUTO_INCREMENT,
  `cor` varchar(50) DEFAULT NULL,
  `ID_idade` bigint NOT NULL,
  PRIMARY KEY (`ID_faixa`),
  KEY `ID_idade` (`ID_idade`),
  CONSTRAINT `categoria_faixa_ibfk_1` FOREIGN KEY (`ID_idade`) REFERENCES `categoria_idade` (`ID_idade`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela amaurirobsonteam.categoria_faixa: ~8 rows (aproximadamente)
INSERT INTO `categoria_faixa` (`ID_faixa`, `cor`, `ID_idade`) VALUES
	(1, 'azul', 6),
	(5, 'Branca', 6),
	(6, 'roxa', 6),
	(7, 'Amarela', 6),
	(8, 'pINK', 6),
	(9, 'Coral', 6),
	(10, 'Vermelha', 6),
	(14, 'Cinza', 6);

-- Copiando estrutura para tabela amaurirobsonteam.categoria_idade
CREATE TABLE IF NOT EXISTS `categoria_idade` (
  `ID_idade` bigint NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `idade_minima` int DEFAULT NULL,
  `idade_maximo` int DEFAULT NULL,
  PRIMARY KEY (`ID_idade`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela amaurirobsonteam.categoria_idade: ~2 rows (aproximadamente)
INSERT INTO `categoria_idade` (`ID_idade`, `nome`, `idade_minima`, `idade_maximo`) VALUES
	(6, 'Juvenil', 8, 9),
	(7, 'Mirim', 4, 5);

-- Copiando estrutura para tabela amaurirobsonteam.categoria_peso
CREATE TABLE IF NOT EXISTS `categoria_peso` (
  `ID_peso` bigint NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ID_sexo` bigint NOT NULL,
  `ID_idade` bigint NOT NULL,
  `peso_maximo` decimal(20,2) NOT NULL,
  PRIMARY KEY (`ID_peso`),
  KEY `ID_sexo` (`ID_sexo`),
  KEY `ID_idade` (`ID_idade`),
  CONSTRAINT `categoria_peso_ibfk_1` FOREIGN KEY (`ID_sexo`) REFERENCES `categoria_sexo` (`ID_sexo`),
  CONSTRAINT `categoria_peso_ibfk_2` FOREIGN KEY (`ID_idade`) REFERENCES `categoria_idade` (`ID_idade`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela amaurirobsonteam.categoria_peso: ~3 rows (aproximadamente)
INSERT INTO `categoria_peso` (`ID_peso`, `nome`, `ID_sexo`, `ID_idade`, `peso_maximo`) VALUES
	(4, 'galo', 5, 6, 60.00),
	(5, 'Pena', 4, 6, 80.00),
	(6, 'Pluma', 5, 7, 64.00);

-- Copiando estrutura para tabela amaurirobsonteam.categoria_sexo
CREATE TABLE IF NOT EXISTS `categoria_sexo` (
  `ID_sexo` bigint NOT NULL AUTO_INCREMENT,
  `genero` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`ID_sexo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela amaurirobsonteam.categoria_sexo: ~3 rows (aproximadamente)
INSERT INTO `categoria_sexo` (`ID_sexo`, `genero`) VALUES
	(4, 'Feminino'),
	(5, 'Masculino'),
	(6, 'Não-Binario');

-- Copiando estrutura para tabela amaurirobsonteam.inscricao
CREATE TABLE IF NOT EXISTS `inscricao` (
  `ID_inscricao` bigint NOT NULL AUTO_INCREMENT,
  `ID_atleta` bigint NOT NULL,
  `ID_academia` bigint NOT NULL,
  `ID_faixa` bigint NOT NULL,
  `ID_peso` bigint NOT NULL,
  `ID_sexo` bigint NOT NULL,
  PRIMARY KEY (`ID_inscricao`) USING BTREE,
  KEY `ID_atleta` (`ID_atleta`),
  KEY `ID_academia` (`ID_academia`),
  KEY `ID_faixa` (`ID_faixa`),
  KEY `ID_peso` (`ID_peso`),
  KEY `ID_sexo` (`ID_sexo`),
  CONSTRAINT `inscricao_ibfk_1` FOREIGN KEY (`ID_atleta`) REFERENCES `atleta` (`ID_atleta`),
  CONSTRAINT `inscricao_ibfk_2` FOREIGN KEY (`ID_academia`) REFERENCES `academia` (`ID_academia`),
  CONSTRAINT `inscricao_ibfk_3` FOREIGN KEY (`ID_faixa`) REFERENCES `categoria_faixa` (`ID_faixa`),
  CONSTRAINT `inscricao_ibfk_4` FOREIGN KEY (`ID_peso`) REFERENCES `categoria_peso` (`ID_peso`),
  CONSTRAINT `inscricao_ibfk_5` FOREIGN KEY (`ID_sexo`) REFERENCES `categoria_sexo` (`ID_sexo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela amaurirobsonteam.inscricao: ~2 rows (aproximadamente)
INSERT INTO `inscricao` (`ID_inscricao`, `ID_atleta`, `ID_academia`, `ID_faixa`, `ID_peso`, `ID_sexo`) VALUES
	(1, 1, 5, 5, 5, 5),
	(2, 2, 6, 9, 4, 5);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
