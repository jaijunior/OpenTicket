-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 09-Set-2022 às 03:48
-- Versão do servidor: 10.8.3-MariaDB
-- versão do PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `chamados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamados`
--

CREATE TABLE `chamados` (
  `id` int(11) NOT NULL,
  `solicitante` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `setor` varchar(40) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mensagem` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `tecnico` varchar(40) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'Aberto',
  `inicio` datetime NOT NULL DEFAULT current_timestamp(),
  `fim` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `chamados`
--

INSERT INTO `chamados` (`id`, `solicitante`, `setor`, `mensagem`, `tecnico`, `status`, `inicio`, `fim`) VALUES
(1, 'maria', 'RH', 'Meu computador quebrou', '', '', '2022-09-08 20:40:54', '2022-09-08 23:40:21'),
(2, 'maria', 'RH', 'Meu computador quebrou', '', '', '2022-09-08 20:40:58', '2022-09-08 23:40:21'),
(5, 'JOão', 'Patrimonio', 'Sem camera', '', 'Aberto', '2022-09-08 23:20:49', NULL),
(6, 'JOão', 'Patrimonio', 'Sem camera', '', 'Aberto', '2022-09-08 23:21:56', NULL),
(7, 'JOão', 'Patrimonio', 'Sem camera', 'Jairo', 'Aberto', '2022-09-08 23:23:12', NULL),
(8, 'JOão', 'Patrimonio', 'Sem camera', 'Não Definido', 'Aberto', '2022-09-08 23:23:23', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnicos`
--

CREATE TABLE `tecnicos` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `tecnicos`
--

INSERT INTO `tecnicos` (`id`, `nome`) VALUES
(1, 'Jairo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `chamados`
--
ALTER TABLE `chamados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tecnicos`
--
ALTER TABLE `tecnicos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `chamados`
--
ALTER TABLE `chamados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tecnicos`
--
ALTER TABLE `tecnicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
