-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Mar-2021 às 16:26
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Mercado`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Mercado`
--

CREATE TABLE `Mercado` (
  `idProduto` int(11) NOT NULL,
  `nameProduto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `city`
--

INSERT INTO `Mercado` (`idProduto`, `nameProduto`) VALUES
(1, 'Shampoo'),
(2, 'Leite');
(3, 'panela');
(4, 'macarrão');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reg`
--

CREATE TABLE `regp` (
  `nome` varchar(20) NOT NULL,
  `fornecedor` varchar(20) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `id` varchar(20) NOT NULL,
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reg`
--

INSERT INTO `regp` ('nome','fornecedor','cidade','image','id') VALUES
('Shampoo', 'Seda', 'CAmpinas','image/images.png', 1),
('Leite', 'Nestle', 'Hortolândia', 'image/github-octocat.png', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `Mercado`
--
ALTER TABLE `Mercado`
  ADD PRIMARY KEY (`idProduto`);

--
-- Índices para tabela `reg`
--
ALTER TABLE `regp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Mercado`
--
ALTER TABLE `Mercado`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `reg`
--
ALTER TABLE `regp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
