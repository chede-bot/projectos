-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 09:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestao_acesso`
--

-- --------------------------------------------------------

--
-- Table structure for table `atribuir_permissao`
--

CREATE TABLE `atribuir_permissao` (
  `utilizador` varchar(100) NOT NULL,
  `permissao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `atribuir_permissao`
--

INSERT INTO `atribuir_permissao` (`utilizador`, `permissao`) VALUES
('amilton@gmail.com', 'aaaa'),
('bila@email', ''),
('chinana@gmail.com', 'administrar'),
('dfghj@fghj', 'ghjk'),
('joao@gmail.com', 'adicionar-artigo'),
('joao@gmail.com', 'dfghj'),
('joao@gmail.com', 'qqqqqqqqqqqqqqqqqq'),
('joao@gmail.com', 'registar-utilizador'),
('wamba@gmail.com', 'aaaa'),
('wamba@gmail.com', 'adicionar-artigo'),
('wamba@gmail.com', 'administrar');

-- --------------------------------------------------------

--
-- Table structure for table `permissao`
--

CREATE TABLE `permissao` (
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permissao`
--

INSERT INTO `permissao` (`nome`, `descricao`) VALUES
('', ''),
('aaaa', 'aaaaaaaaaaaaaaaaaa'),
('adicionar-artigo', 'adicionar novos artigos ao sistema'),
('administrar', 'descricao administrar'),
('cintya', 'asdfgyhujkjhgfd'),
('dfghj', 'gghj'),
('ffff', 'fffffffffffffffff'),
('ghjk', 'jcvbnm,mnbv'),
('hhhhhhhhhhhh', 'hhhhhhhhhhhhhhhhh'),
('login', 'autenticacao'),
('pemisson', 'dfghjknbvcvbnm,mnbvcvbnm,'),
('permissao 2', 'aaaaaaaaaaaaaaaaaaaaaaaaa'),
('permissao 3', '12345678'),
('qqqqqqqqqqq', 'aaaaaaaaaa'),
('qqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqq\r\nqqqqqqqqqqqqqqqq'),
('registar-utilizador', 'sdfghjklkjhgfghjkl'),
('sssssssssss', 'ssssssssssssssssss'),
('wert', 'sdfgbnm'),
('wwwwwwwwwww', 'wwwwwwwwwwwwwwwwwwwwwwwwwwww');

-- --------------------------------------------------------

--
-- Table structure for table `utilizador`
--

CREATE TABLE `utilizador` (
  `email` varchar(100) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilizador`
--

INSERT INTO `utilizador` (`email`, `username`, `password`) VALUES
('amilton@gmail.com', '', '1234'),
('bila@email', 'bila', '1234'),
('chinana@gmail.com', 'joaquim', '1234'),
('cintya@gmail.com', 'Cintya', '1234'),
('dfghj@fghj', 'rachid', 'fghj'),
('faizal@gmail.com', 'Faizal', '1234'),
('joao@gmail.com', 'Joao', '12345'),
('laisse@email', '', '23456'),
('mabasso@gmail.com', 'Sergio', '1234'),
('nilza@email', 'NILZA', '123456'),
('shirley@email.com', 'shirley', '1234567'),
('szxdcv@sdf.kjhg', 'zxcvbn', 'qwsdfg'),
('tivane@gmail.com', 'Tivane', '12345'),
('wamba@gmail.com', 'wamba', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atribuir_permissao`
--
ALTER TABLE `atribuir_permissao`
  ADD PRIMARY KEY (`utilizador`,`permissao`),
  ADD KEY `nome_permissao` (`permissao`);

--
-- Indexes for table `permissao`
--
ALTER TABLE `permissao`
  ADD PRIMARY KEY (`nome`);

--
-- Indexes for table `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `atribuir_permissao`
--
ALTER TABLE `atribuir_permissao`
  ADD CONSTRAINT `atribuir_permissao_ibfk_1` FOREIGN KEY (`utilizador`) REFERENCES `utilizador` (`email`),
  ADD CONSTRAINT `atribuir_permissao_ibfk_2` FOREIGN KEY (`permissao`) REFERENCES `permissao` (`nome`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
