-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.5.20 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              12.15.0.7171
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para mdlaluguel
CREATE DATABASE IF NOT EXISTS `mdlaluguel` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mdlaluguel`;

-- Copiando estrutura para tabela mdlaluguel.aluguel
CREATE TABLE IF NOT EXISTS `aluguel` (
  `idAluguel` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) DEFAULT NULL,
  `idFuncionario` int(11) DEFAULT NULL,
  `dataHoraRetirada` datetime NOT NULL,
  `datahoraDevolucao` datetime DEFAULT NULL,
  `valorAPagar` decimal(10,2) DEFAULT NULL,
  `valorPago` decimal(10,2) DEFAULT NULL,
  `pago` bit(1) DEFAULT NULL,
  `formaPagamento` varchar(50) DEFAULT NULL,
  `qtVezes` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAluguel`),
  KEY `fk_Aluguel_Cliente` (`idCliente`),
  KEY `fk_Aluguel_Funcionario` (`idFuncionario`),
  CONSTRAINT `fk_Aluguel_Cliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`),
  CONSTRAINT `fk_Aluguel_Funcionario` FOREIGN KEY (`idFuncionario`) REFERENCES `funcionario` (`idFuncionario`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela mdlaluguel.aluguel: ~8 rows (aproximadamente)
REPLACE INTO `aluguel` (`idAluguel`, `idCliente`, `idFuncionario`, `dataHoraRetirada`, `datahoraDevolucao`, `valorAPagar`, `valorPago`, `pago`, `formaPagamento`, `qtVezes`) VALUES
	(4, 11, 1, '2024-12-08 08:00:00', NULL, 2.00, 2.00, b'1', 'Debito Mastercard', 1),
	(5, 9, 3, '2024-12-10 14:00:00', NULL, 10.00, 10.00, b'1', 'Credito Visa', 2),
	(6, 4, 1, '2024-12-31 14:00:00', '2025-01-02 07:00:00', 2.00, 2.00, b'1', 'Dinheiro', 1),
	(7, 9, 1, '2025-01-02 07:00:00', NULL, 2.00, 2.00, b'1', 'Debito Mastercard', 1),
	(8, 6, 1, '2024-12-02 14:00:00', '2024-12-16 07:00:00', 2.00, 2.00, b'1', 'Debito Elo', 1),
	(9, 11, 3, '2025-07-11 15:00:00', NULL, 7.00, 7.00, b'1', 'Dinheiro', 1),
	(10, 1, 3, '2025-02-21 18:35:00', '2025-03-01 09:00:00', 7.00, 7.00, b'1', 'Dinheiro', 1),
	(11, 14, 3, '2025-12-25 00:35:00', '2026-01-01 07:00:00', 7.00, 7.00, b'1', 'Debito Visa', 1);

-- Copiando estrutura para tabela mdlaluguel.aluguelequipamento
CREATE TABLE IF NOT EXISTS `aluguelequipamento` (
  `idAluguelEquipamento` int(11) NOT NULL AUTO_INCREMENT,
  `idEquipamento` int(11) DEFAULT NULL,
  `idAluguel` int(11) DEFAULT NULL,
  `valorItem` decimal(10,2) NOT NULL,
  `valorUnitario` decimal(10,2) NOT NULL,
  `qtd` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAluguelEquipamento`),
  KEY `fk_aluguelEquipamento_equipamento` (`idEquipamento`),
  KEY `fk_aluguelEquipamento_aluguel` (`idAluguel`),
  CONSTRAINT `fk_aluguelEquipamento_aluguel` FOREIGN KEY (`idAluguel`) REFERENCES `aluguel` (`idAluguel`),
  CONSTRAINT `fk_aluguelEquipamento_equipamento` FOREIGN KEY (`idEquipamento`) REFERENCES `equipamento` (`idEquipamento`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela mdlaluguel.aluguelequipamento: ~9 rows (aproximadamente)
REPLACE INTO `aluguelequipamento` (`idAluguelEquipamento`, `idEquipamento`, `idAluguel`, `valorItem`, `valorUnitario`, `qtd`) VALUES
	(1, 1, 4, 2.00, 2.00, 1),
	(2, 2, 5, 7.00, 3.50, 2),
	(3, 4, 5, 3.00, 3.00, 1),
	(4, 1, 6, 2.00, 2.00, 1),
	(5, 1, 7, 2.00, 2.00, 1),
	(6, 1, 8, 2.00, 2.00, 1),
	(7, 1, 9, 2.00, 2.00, 1),
	(8, 1, 10, 2.00, 2.00, 1),
	(9, 1, 11, 4.00, 2.00, 1);

-- Copiando estrutura para tabela mdlaluguel.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nmCliente` varchar(50) NOT NULL,
  `cpf` char(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `cep` char(8) DEFAULT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` char(2) NOT NULL,
  `nomeLogradouro` varchar(100) NOT NULL,
  `numero` varchar(12) NOT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(40) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela mdlaluguel.cliente: ~20 rows (aproximadamente)
REPLACE INTO `cliente` (`idCliente`, `nmCliente`, `cpf`, `email`, `cep`, `cidade`, `estado`, `nomeLogradouro`, `numero`, `complemento`, `bairro`) VALUES
	(1, 'Donald', '42212978839', 'Quack123@uol.com', '11015906', 'Santos', 'SP', 'Rua Julio Conceição', '102', 'casa', 'Vila Mathias'),
	(2, 'Margarida', '70414816897', 'DuckDodgers123@uol.com', '11346140', 'São Vicente', 'SP', 'Rua Milton Pinto', '411', 'apto 255', 'Parque das Bandeiras'),
	(3, 'Patinhas', '17395511921', 'TenhoMaisDinheiroQueVoce@uol.com', '88064672', 'Florianópolis', 'SC', 'Rua Souza', '16', 'casa', 'Ribeirão da Ilha'),
	(4, 'Huguinho', '02962048897', 'DuckDodgers123@uol.com', '11015265', 'Santos', 'SP', 'Travessa José do Patrocínio', '666', 'apto 55A', 'Macuco'),
	(5, 'Luizinho', '38696205871', 'PericlesMagoExecutivo2020@gmail.com', '11702215', 'Praia Grande', 'SP', 'Avenida Doutor Roberto de Almeida Vinhas', '321', 'apto 616B', 'Guilhermina'),
	(6, 'Zezinho', '28710474803', 'JosePalmeira334@gmail.com', '11310350', 'São Vicente', 'SP', 'Rua Campos de Bury', '23', 'casa', 'Centro'),
	(7, 'Pardal', '57333836827', 'DestinyLight@uol.com', '11085000', 'Santos', 'SP', 'Avenida Martins Fontes', '41', 'casa', 'Saboó'),
	(8, 'Zé Carioca', '59507717706', NULL, '23030437', 'Rio de Janeiro', 'RJ', 'Rua Joacir Cruz', '75', 'casa', 'Guaratiba'),
	(9, 'Mickey', '10080634443', 'FaceofDisney@hotmail.com', '50740083', 'Recife', 'PE', '3ª Travessa Barão de Bonito', '420', 'apto 77A', 'Cidade Universitária'),
	(10, 'Minie', '92694644406', 'ElegantMouseXOXO@gmail.com', '50740083', 'Recife', 'PE', '3ª Travessa Barão de Bonito', '420', 'apto 77A', 'Cidade Universitária'),
	(11, 'Pateta', '44078507875', 'PlutosFriend@gmail.com', '-', '-', 'SP', '-', '-', '-', '-'),
	(12, 'Branca de Neve', '84829230991', 'FFFFFF@hotmail.com', '88600971', 'São Joaquim', 'SC', 'Rua Marcos Batista', '520', 'apto 24', 'Centro'),
	(13, 'Aladin', '62117314422', 'PrinceAli@gmail.com', '66610130', 'Belém', 'PA', 'Passagem Vinte e Cinco de Dezembro', '5', 'apto 12', 'Curió-Utinga'),
	(14, 'Cinderela', '16219041135', 'CrystalClear@uol.com', '74395040', 'Goiania', 'GO', 'Rua R', '10', 'casa', 'Setor Solar Santa Rita'),
	(15, 'Mulan', '28380652703', 'AmantedosAnimaisOG@gmail.com', '28898080', 'Rio das Ostras', 'RJ', 'Rua Ponte das Tábuas', '79', 'apto 33', 'Mar do Norte'),
	(16, 'Moana', '25469253775', 'FilhaDoOceano@gmail.com', '23970970', 'Parati', 'RJ', 'Rua José Milton de Oliveira', 'S/N', 'casa', 'Centro'),
	(17, 'Asnésio', '98073163675', 'AnestesiaBrasileira@uol.com', '30421635', 'Belo Horizonte', 'MG', 'Beco da Terezinha', '420', 'apto 12', 'Ventosa'),
	(18, 'Maga Patólogica', '71369705808', 'contemplem-A-Maga@gmail.com', '11531240', 'Cubatão', 'SP', 'Rua São Clóvis', '1074', 'apto 2', 'Vila dos Pescadores'),
	(19, 'Capitão Boeing', '43563235210', 'biggest747@uol.com', '69073129', 'Manaus', 'AM', 'Beco Patu', '20', 'casa', 'Crespo'),
	(20, 'Pão Duro Mac Money', '07251764822', 'manda10conto@ig.com', '06264170', 'Osasco', 'SP', 'Rua da Boa Vitória', '322', 'apto 135A', 'Portal D Oeste');

-- Copiando estrutura para tabela mdlaluguel.equipamento
CREATE TABLE IF NOT EXISTS `equipamento` (
  `idEquipamento` int(11) NOT NULL AUTO_INCREMENT,
  `nmEquipamento` varchar(50) NOT NULL,
  `qtd` int(11) NOT NULL,
  `valorHora` decimal(5,2) NOT NULL,
  PRIMARY KEY (`idEquipamento`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela mdlaluguel.equipamento: ~5 rows (aproximadamente)
REPLACE INTO `equipamento` (`idEquipamento`, `nmEquipamento`, `qtd`, `valorHora`) VALUES
	(1, 'Cadeira 02 Posições', 49, 2.00),
	(2, 'Cadeira 04 Posições', 86, 3.50),
	(3, 'Guarda Sol P', 37, 2.00),
	(4, 'Guarda Sol G', 47, 3.00),
	(5, 'Mesinha', 30, 1.50);

-- Copiando estrutura para tabela mdlaluguel.funcionario
CREATE TABLE IF NOT EXISTS `funcionario` (
  `idFuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `nmFuncionario` varchar(50) NOT NULL,
  `cpf` char(11) NOT NULL,
  `celular` char(11) NOT NULL,
  `ddd` char(3) DEFAULT NULL,
  PRIMARY KEY (`idFuncionario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela mdlaluguel.funcionario: ~3 rows (aproximadamente)
REPLACE INTO `funcionario` (`idFuncionario`, `nmFuncionario`, `cpf`, `celular`, `ddd`) VALUES
	(1, 'Cebolinha', '43527947086', '997132541', '11'),
	(2, 'Cascão', '41675117039', '986428894', '13'),
	(3, 'Chico Bento', '90524241015', '977245565', '13');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
