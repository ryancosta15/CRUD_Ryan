-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/10/2022 às 04:05
-- Versão do servidor: 10.4.24-MariaDB
-- Versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `camara_ryan`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `deputados`
--

CREATE TABLE `deputados` (
  `cod_deputado` int(11) NOT NULL COMMENT 'código identificador do deputado',
  `nome` varchar(80) NOT NULL COMMENT 'nome completo do deputado',
  `partido` varchar(12) NOT NULL COMMENT 'partido que o deputado pertence',
  `uf` varchar(2) NOT NULL COMMENT 'unidade federativa do deputado',
  `sexo` varchar(15) NOT NULL COMMENT 'sexo biologico do deputado',
  `legislatura` varchar(3) NOT NULL COMMENT 'legislatura do deputado (período de mandato)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `deputados`
--

INSERT INTO `deputados` (`cod_deputado`, `nome`, `partido`, `uf`, `sexo`, `legislatura`) VALUES
(0, '', '', 'RJ', '', '56ª');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `deputados`
--
ALTER TABLE `deputados`
  ADD PRIMARY KEY (`cod_deputado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
