-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Nov-2021 às 14:35
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_integrado`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto_descartei`
--

CREATE TABLE `projeto_descartei` (
  `ID_PESQUISA` int(11) NOT NULL,
  `PESQUISA` varchar(200) DEFAULT NULL,
  `NOME_RUA` varchar(200) DEFAULT NULL,
  `NUMERO` int(11) DEFAULT NULL,
  `BAIRRO` varchar(200) DEFAULT NULL,
  `TELEFONE` varchar(200) DEFAULT NULL,
  `EMAIL` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `projeto_descartei`
--

INSERT INTO `projeto_descartei` (`ID_PESQUISA`, `PESQUISA`, `NOME_RUA`, `NUMERO`, `BAIRRO`, `TELEFONE`, `EMAIL`) VALUES
(1, 'Vila Amélia', 'Vila Amélia', 2390, 'Centro', '1236009048', 'contato_descarte@gmail.com'),
(3, 'Topolândia', 'Armando João de Santana', 129, 'Topolândia', '1236009045', 'descarte_topolandia@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `projeto_descartei`
--
ALTER TABLE `projeto_descartei`
  ADD PRIMARY KEY (`ID_PESQUISA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
