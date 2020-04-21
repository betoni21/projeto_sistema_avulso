-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 21-Abr-2020 às 22:10
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avulso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` double NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `telefone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `dia` varchar(10) CHARACTER SET utf8 NOT NULL,
  `hora_entrada` varchar(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `telefone`, `dia`, `hora_entrada`) VALUES
(1, 'Lucas Betoni', 'lucasbetoni@gmail.com', '92323423324', '19/11/2019', '16:55:04'),
(2, 'Mateus Cunha', 'Mateus@gmail.com', '492342392383', '19/11/2019', '16:55:31'),
(3, 'Adriany ', 'n21312sdo@gmail.com', '4312321', '19/11/2019', '16:56:00'),
(4, 'Natiele', 'Naty@gmail.com', '31231321322', '19/11/2019', '16:56:19'),
(5, 'Daniel Douglass', 'hacker@gmail.com', '12313322212', '19/11/2019', '16:56:39'),
(6, 'Lucas Martins Betoni', 'lldasdh@gmail.com', '92992209806', '03/04/2020', '19:25:57'),
(7, 'Priscilla Lino Betoni', 'priscillalino1@gmail.com', '92992898080', '03/04/2020', '19:27:32'),
(8, 'Lucas Martins Betoni ldasksandaskdmasdak', 'lucasbetonisak@gmial.com.br', '92992209806', '04/04/2020', '22:37:05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
