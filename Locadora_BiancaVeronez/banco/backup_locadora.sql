-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.22-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para bd_locadora
CREATE DATABASE IF NOT EXISTS `bd_locadora` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `bd_locadora`;

-- Copiando estrutura para tabela bd_locadora.tb_cliente
CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(45) NOT NULL,
  `rg_cliente` varchar(13) NOT NULL,
  `cpf_cliente` varchar(15) NOT NULL,
  `email_cliente` varchar(60) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `cpf_cliente` (`cpf_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela bd_locadora.tb_cliente: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_cliente` DISABLE KEYS */;
REPLACE INTO `tb_cliente` (`id_cliente`, `nome_cliente`, `rg_cliente`, `cpf_cliente`, `email_cliente`) VALUES
	(1, 'Pedrinho', '7437834', '38432843', 'pedrinho@gmail.com'),
	(2, 'Pedrão', '0750458', '42152377', 'pedrao@gmail.com'),
	(3, 'Jorgin', '135372387', '215216231', 'jorgin@gmail.com'),
	(4, 'Jorjão', '243263276', '5316327234', 'jorjao@gmail.com');
/*!40000 ALTER TABLE `tb_cliente` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_locadora.tb_locacao
CREATE TABLE IF NOT EXISTS `tb_locacao` (
  `cod_cliente` int(11) NOT NULL,
  `cod_veiculo` int(11) NOT NULL,
  `saida_veiculo` date NOT NULL,
  `retorno_veiculo` date NOT NULL,
  PRIMARY KEY (`cod_cliente`,`cod_veiculo`,`saida_veiculo`,`retorno_veiculo`),
  KEY `fk_cod_veiculo` (`cod_veiculo`),
  CONSTRAINT `fk_cod_cliente` FOREIGN KEY (`cod_cliente`) REFERENCES `tb_cliente` (`id_cliente`),
  CONSTRAINT `fk_cod_veiculo` FOREIGN KEY (`cod_veiculo`) REFERENCES `tb_veiculo` (`id_veiculo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela bd_locadora.tb_locacao: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_locacao` DISABLE KEYS */;
REPLACE INTO `tb_locacao` (`cod_cliente`, `cod_veiculo`, `saida_veiculo`, `retorno_veiculo`) VALUES
	(1, 1, '2022-03-07', '2022-03-11'),
	(1, 1, '2022-03-11', '2022-03-12'),
	(1, 1, '2022-03-14', '2022-03-19');
/*!40000 ALTER TABLE `tb_locacao` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_locadora.tb_veiculo
CREATE TABLE IF NOT EXISTS `tb_veiculo` (
  `id_veiculo` int(11) NOT NULL AUTO_INCREMENT,
  `nome_veiculo` varchar(45) NOT NULL,
  `placa_veiculo` varchar(7) NOT NULL,
  `ano_veiculo` varchar(4) NOT NULL,
  PRIMARY KEY (`id_veiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela bd_locadora.tb_veiculo: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_veiculo` DISABLE KEYS */;
REPLACE INTO `tb_veiculo` (`id_veiculo`, `nome_veiculo`, `placa_veiculo`, `ano_veiculo`) VALUES
	(1, 'Hilux', 'TAR4M56', '2010'),
	(2, 'Fiesta', 'PNF3I90', '2011'),
	(3, 'Golf ', 'ERF1B09', '2012'),
	(4, 'Fox', 'ASC4V76', '2013');
/*!40000 ALTER TABLE `tb_veiculo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
