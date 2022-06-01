-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 30-Maio-2022 às 16:17
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrodev`
--

CREATE TABLE `cadastrodev` (
  `cod` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `dataNascimento` date NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `linguagem` text NOT NULL,
  `experiencia` text NOT NULL,
  `escolaridade` varchar(20) NOT NULL,
  `chave` varchar(12) NOT NULL,
  `informe` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastrodev`
--

INSERT INTO `cadastrodev` (`cod`, `nome`, `dataNascimento`, `cpf`, `telefone`, `linguagem`, `experiencia`, `escolaridade`, `chave`, `informe`, `email`, `senha`) VALUES
(1, 'Lucas', '0000-00-00', '03877978070', '51985534016', 'php', 'nenhuma', 'medioCompleto', 'celular', '51985534016', 'lucasortlieb@hotmail.com', '1234'),
(2, 'Paulo Donini', '0000-00-00', '01042569070', '51986586674', 'Php, Html, Css', 'Professor Técnico', 'superiorCompleto', 'cpf', '01042569070', 'deko.sete@gmail.com', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastrodev`
--
ALTER TABLE `cadastrodev`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastrodev`
--
ALTER TABLE `cadastrodev`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
