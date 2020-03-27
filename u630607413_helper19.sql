-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Mar-2020 às 02:16
-- Versão do servidor: 10.2.30-MariaDB
-- versão do PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u630607413_helper19`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa_delivery`
--

CREATE TABLE `empresa_delivery` (
  `id_empresa` int(11) NOT NULL,
  `nome_empresa` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `whatsapp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `seguimento` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `UF` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `empresa_delivery`
--

INSERT INTO `empresa_delivery` (`id_empresa`, `nome_empresa`, `whatsapp`, `telefone`, `seguimento`, `descricao`, `UF`, `cidade`, `longitude`, `latitude`, `created`, `modified`) VALUES
(1, 'Kuka Cabeleireiro', '11974978736', '11443369', 'Estética e Beleza', 'Devido a paralisação corte somente com horário marcado com 1 hora entre cada cliente.Atendemos também a domicilio.', 'São Paulo (SP)', 'Atibaia', '-46.5844592', '-23.1384847', '2020-03-26 13:10:10', '2020-03-26 16:45:27'),
(2, 'André Godoi Lomba', '11982489841', '11982489841', 'Outros', 'Atendimento de fisioterapia domiciliar', 'São Paulo (SP)', 'Atibaia', '-46.5666048', '-23.1145472', '2020-03-26 15:01:06', '2020-03-26 15:01:06'),
(3, 'Mecânica auto giro', '981983977', '11981983977', 'Outros', 'Mecânica de auto...', 'São Paulo (SP)', 'Atibaia', '', '', '2020-03-26 18:24:50', '2020-03-26 18:24:50'),
(4, 'Três Pontos Manutenção e Limpeza de Piscinas, Spas e Banheiras', '11947776525', '1141192723', 'Outros', 'Limpeza e manutenção de piscinas, Spas e banheiras. ', 'São Paulo (SP)', 'Bragança Paulista', '', '', '2020-03-26 18:46:07', '2020-03-26 18:46:07'),
(5, 'Açougue JM', '999330579', '444131179', 'Varejo', 'Açougue e mercearia. Trabalhamos com carnes frescas (bovino, suíno e frango). Embutidos e produtos básicos de mercado. Oferecemos entrega de carnes frescas, preparadas no momento do pedido, já cortadas e separadas conforme o pedido. Sábados e domingos var', 'São Paulo (SP)', 'Atibaia', '', '', '2020-03-26 18:52:52', '2020-03-26 18:52:52'),
(6, 'Big Supermercados', '11974612081', '1144116600', '', 'Supermercado de Atibaia. Retirada e Entrega indisponível a partir de 26/03 até 31/03 23:59', '25', 'Atibaia', '', '', '2020-03-26 23:43:48', '2020-03-26 23:43:48'),
(7, 'Rancho da viola', '', '24274917', '', 'Serviço de entregas de almoço', '25', 'Atibaia', '', '', '2020-03-26 23:58:46', '2020-03-26 23:58:46'),
(8, 'Delícias da Nona', '(11) 986446880', '', '', 'Tortas, doces e salgados por encomenda!! Estamos com bolachas decoradas para a páscoa, receita alemã! ', '25', 'Atibaia', '', '', '2020-03-27 00:20:30', '2020-03-27 00:20:30'),
(9, 'Máscaras artesanais ', '(11) 986446880', '', '', 'Mascáras aresanais de tecido duplo! Somente por encomenda. Marcamos local de entrega!!', '25', 'Atibaia', '', '', '2020-03-27 00:22:22', '2020-03-27 00:22:22'),
(10, 'Batatas Pizzaria e Lanchonete', '11974950252', '1144117961', '', 'Estamos entregando ate as 23:30', '25', 'Atibaia', '', '', '2020-03-27 00:58:02', '2020-03-27 00:58:02'),
(11, '', '', '', '', '', '', '', '', '', '2020-03-27 01:57:12', '2020-03-27 01:57:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `preciso_ajuda`
--

CREATE TABLE `preciso_ajuda` (
  `id_ajuda` int(9) NOT NULL,
  `nome` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `whatsapp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `idade` int(3) NOT NULL,
  `uf` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `preciso_ajuda`
--

INSERT INTO `preciso_ajuda` (`id_ajuda`, `nome`, `whatsapp`, `idade`, `uf`, `cidade`, `longitude`, `latitude`, `created`, `modified`) VALUES
(1, 'Maria de Lourdes', '11951196469', 65, '', 'Atibaia', '-46.58446980000001', '-23.138502499999998', '2020-03-24 14:15:51', '2020-03-24 14:15:51'),
(2, 'RAFFAELLO DAMGAARD NEVES', '22988317391', 41, '', 'Cabo Frio', '-46.7065781', '-23.6494306', '2020-03-24 19:16:16', '2020-03-24 19:16:16'),
(3, 'Nicolas', '11954385711', 18, '', 'Atibaia', '-46.564429999999994', '-23.1144675', '2020-03-25 02:08:57', '2020-03-25 02:08:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quero_ajudar`
--

CREATE TABLE `quero_ajudar` (
  `id_ajudante` int(11) NOT NULL,
  `nome` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `whatsapp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `uf` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `idade` int(3) NOT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `quero_ajudar`
--

INSERT INTO `quero_ajudar` (`id_ajudante`, `nome`, `whatsapp`, `uf`, `idade`, `cidade`, `longitude`, `latitude`, `created`, `modified`) VALUES
(1, 'Felipe Moreira ', '11933008587', '', 27, 'Atibaia', '-46.58446980000001', '-23.138502499999998', '2020-03-24 14:14:37', '2020-03-24 14:14:37'),
(2, 'Monica Silva ', '11984449558', '', 30, 'Atibaia', '-46.58446980000001', '-23.138502499999998', '2020-03-24 14:16:35', '2020-03-24 14:16:35'),
(3, 'Lucas Lomba', '11965898933', '', 20, 'Atibaia', '-46.5666048', '-23.1145472', '2020-03-26 16:09:41', '2020-03-26 16:09:41'),
(4, 'Téo Sobrino Alves', '11956529182', '', 16, 'Bragança Paulista', '', '', '2020-03-26 16:18:46', '2020-03-26 16:18:46'),
(5, 'Nicolas', '11954385711', '', 20, 'Atibaia', '', '', '2020-03-26 16:19:12', '2020-03-26 16:19:12'),
(6, 'Giovana ', '11954240500', '', 17, 'Bragança Paulista ', '', '', '2020-03-26 16:21:55', '2020-03-26 16:21:55'),
(7, 'Ana Luiza ', '19998757753', '', 15, 'Águas de Lindóia ', '', '', '2020-03-26 16:44:41', '2020-03-26 16:44:41'),
(8, 'Vinícius', '14981985858', '', 15, 'Itapira', '', '', '2020-03-26 16:45:53', '2020-03-26 16:45:53'),
(9, 'Amanda ', '19995212540', '', 17, 'Leme', '', '', '2020-03-26 16:46:10', '2020-03-26 16:46:10'),
(10, 'Edu', '11966653566', '', 38, 'Atibaia', '', '', '2020-03-26 21:13:09', '2020-03-26 21:13:09'),
(11, 'Tiago Pechini', '11964043296', '', 14, 'Bragança Paulista', '', '', '2020-03-26 21:33:16', '2020-03-26 21:33:16'),
(12, 'Marina Maeda', '11996888106', '', 35, 'Atibaia', '', '', '2020-03-26 21:43:06', '2020-03-26 21:43:06'),
(13, 'Vinicius', '1', '', 16, 'Bragança paulista', '', '', '2020-03-26 23:56:45', '2020-03-27 01:30:25');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresa_delivery`
--
ALTER TABLE `empresa_delivery`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Índices para tabela `preciso_ajuda`
--
ALTER TABLE `preciso_ajuda`
  ADD PRIMARY KEY (`id_ajuda`);

--
-- Índices para tabela `quero_ajudar`
--
ALTER TABLE `quero_ajudar`
  ADD PRIMARY KEY (`id_ajudante`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresa_delivery`
--
ALTER TABLE `empresa_delivery`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `preciso_ajuda`
--
ALTER TABLE `preciso_ajuda`
  MODIFY `id_ajuda` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `quero_ajudar`
--
ALTER TABLE `quero_ajudar`
  MODIFY `id_ajudante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
