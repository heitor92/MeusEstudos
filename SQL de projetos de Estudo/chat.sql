-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 25/07/2019 às 19:44
-- Versão do servidor: 10.3.16-MariaDB
-- Versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `chat`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `chamados`
--

CREATE TABLE `chamados` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `data_inicio` time NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `chamados`
--

INSERT INTO `chamados` (`id`, `ip`, `nome`, `data_inicio`, `status`) VALUES
(1, '0', 'Fulano', '10:00:00', 0),
(2, '1', 'Cicrano', '11:00:00', 1),
(3, '2', 'Beltrano', '12:00:00', 1),
(4, '192.168.0.14', 'heitor', '03:51:51', 0),
(5, '192.168.0.14', 'heitor', '03:53:33', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL,
  `id_chamado` int(11) NOT NULL,
  `mensagem` text NOT NULL,
  `origem` tinyint(1) NOT NULL,
  `data_enviado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `chamados`
--
ALTER TABLE `chamados`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mensagem_chamado` (`id_chamado`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `chamados`
--
ALTER TABLE `chamados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `mensagens`
--
ALTER TABLE `mensagens`
  ADD CONSTRAINT `fk_mensagem_chamado` FOREIGN KEY (`id_chamado`) REFERENCES `chamados` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
