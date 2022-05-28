-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Maio-2022 às 03:49
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_integrado`
--
CREATE DATABASE IF NOT EXISTS `projeto_integrado` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `projeto_integrado`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `contato_id` int(11) NOT NULL,
  `contato_email` varchar(50) DEFAULT NULL,
  `contato_telefone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`contato_id`, `contato_email`, `contato_telefone`) VALUES
(1, 'contato_descarte@gmail.com', '(12) 3600 - 9048'),
(2, 'descarte_topolandia@gmail.com', '(12) 3600 - 9045');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ponto`
--

CREATE TABLE `ponto` (
  `ponto_id` int(11) NOT NULL,
  `ponto_nome` varchar(100) DEFAULT NULL,
  `ponto_rua` varchar(150) DEFAULT NULL,
  `ponto_numero` varchar(10) DEFAULT NULL,
  `ponto_bairro` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ponto`
--

INSERT INTO `ponto` (`ponto_id`, `ponto_nome`, `ponto_rua`, `ponto_numero`, `ponto_bairro`) VALUES
(1, 'Vila Amélia', 'Rua Vila Amélia', '2390', 'Centro'),
(2, 'Topolândia', 'Rua Armando João de Santana', '129', 'Topolândia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ponto_contato`
--

CREATE TABLE `ponto_contato` (
  `ponto_contato_id` int(11) NOT NULL,
  `ponto_contato_ponto_fk` int(11) NOT NULL,
  `ponto_contato_contato_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ponto_contato`
--

INSERT INTO `ponto_contato` (`ponto_contato_id`, `ponto_contato_ponto_fk`, `ponto_contato_contato_fk`) VALUES
(1, 1, 1),
(2, 2, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`contato_id`);

--
-- Índices para tabela `ponto`
--
ALTER TABLE `ponto`
  ADD PRIMARY KEY (`ponto_id`);

--
-- Índices para tabela `ponto_contato`
--
ALTER TABLE `ponto_contato`
  ADD PRIMARY KEY (`ponto_contato_id`),
  ADD KEY `ponto_contato_ponto_fk` (`ponto_contato_ponto_fk`),
  ADD KEY `ponto_contato_contato_fk` (`ponto_contato_contato_fk`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `contato_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `ponto`
--
ALTER TABLE `ponto`
  MODIFY `ponto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `ponto_contato`
--
ALTER TABLE `ponto_contato`
  MODIFY `ponto_contato_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `ponto_contato`
--
ALTER TABLE `ponto_contato`
  ADD CONSTRAINT `ponto_contato_ibfk_1` FOREIGN KEY (`ponto_contato_ponto_fk`) REFERENCES `ponto` (`ponto_id`),
  ADD CONSTRAINT `ponto_contato_ibfk_2` FOREIGN KEY (`ponto_contato_contato_fk`) REFERENCES `contato` (`contato_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
