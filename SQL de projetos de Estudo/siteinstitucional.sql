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
-- Banco de dados: `siteinstitucional`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `portfolio`
--

INSERT INTO `portfolio` (`id`, `imagem`) VALUES
(1, 'imagem.jpg'),
(2, 'imagem.jpg'),
(3, 'imagem.jpg'),
(4, 'imagem.jpg'),
(5, 'imagem.jpg'),
(6, 'imagem.jpg'),
(7, 'imagem.jpg'),
(8, 'imagem.jpg'),
(9, 'imagem.jpg'),
(10, 'imagem.jpg');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
