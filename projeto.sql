-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jun-2021 às 02:27
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `incidents`
--

CREATE TABLE `incidents` (
  `titulo` varchar(20) NOT NULL,
  `descricao` varchar(144) NOT NULL,
  `valor` text NOT NULL,
  `ong` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `incidents`
--

INSERT INTO `incidents` (`titulo`, `descricao`, `valor`, `ong`) VALUES
('Cachorro resgatado', 'Valor necessário para fazer os exames.', '100', 'a@mail.com'),
('Castração gatinho', 'Ajude a castrar o Mingau.', '130', 'a@mail.com'),
('Ajude Belinha', 'Belinha foi resgatada e o diagnóstico é de Cinomose. Precisamos do valor para os exames e remédios.', '2.5', 'a@mail.com'),
('Lar temporário', 'Vamos conseguir um lar temporário para o jaiminho!', '10', 'a@mail.com'),
('Teste valor', 'Alow', '2.5', 'a@mail.com'),
('teste', 'asdasd', '2.5', 'a@mail.com'),
('a', '123we', '2.500,00', 'a@mail.com'),
('Caso Matheus', 'Teste do Matheus', '10.000,00', 'm@mail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ongs`
--

CREATE TABLE `ongs` (
  `nome` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `whatsapp` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ongs`
--

INSERT INTO `ongs` (`nome`, `email`, `senha`, `cidade`, `estado`, `whatsapp`) VALUES
('', '', '', '', '', ''),
('Ong do Guilherme', 'a@mail.com', '123', 'Araras', 'ac', '19971149913'),
('Ong do Matheus', 'm@mail.com', '123', 'Araras', '', '19982680755');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `incidents`
--
ALTER TABLE `incidents`
  ADD KEY `test` (`ong`);

--
-- Índices para tabela `ongs`
--
ALTER TABLE `ongs`
  ADD PRIMARY KEY (`email`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `incidents`
--
ALTER TABLE `incidents`
  ADD CONSTRAINT `test` FOREIGN KEY (`ong`) REFERENCES `ongs` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
