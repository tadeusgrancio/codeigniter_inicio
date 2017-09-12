-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Set-2017 às 21:36
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `destineja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas_pessoas`
--

CREATE TABLE `empresas_pessoas` (
  `id` int(11) NOT NULL,
  `tipo_cadastro` char(1) NOT NULL,
  `cnpj` char(14) DEFAULT NULL,
  `nome_empresa` varchar(255) DEFAULT NULL,
  `contato` varchar(255) DEFAULT NULL,
  `telefone1` varchar(15) NOT NULL,
  `telefone2` int(15) DEFAULT NULL,
  `cpf` char(11) DEFAULT NULL,
  `nome_pessoa` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresas_pessoas`
--

INSERT INTO `empresas_pessoas` (`id`, `tipo_cadastro`, `cnpj`, `nome_empresa`, `contato`, `telefone1`, `telefone2`, `cpf`, `nome_pessoa`) VALUES
(33, '', 'wergfwqef', 'qergqerg', 'qerg', 'qerg', 0, '', ''),
(32, '', '', '', '', 'erhgwerht', 0, 'qgqg', 'eqrgqwer'),
(31, '', 'rwe4gtwerg', 'eargaerg', 'aergaerg', 'aergaer', 0, '', ''),
(30, '', 'BRASIL SA', 'aergaer', 'gaerga', 'aergaerg', 0, '', ''),
(29, '', '12345678911447', 'DESTINE JÁ SA', NULL, '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empresas_pessoas`
--
ALTER TABLE `empresas_pessoas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empresas_pessoas`
--
ALTER TABLE `empresas_pessoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
