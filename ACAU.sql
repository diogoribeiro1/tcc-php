-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 10/07/2022 às 17:00
-- Versão do servidor: 10.5.15-MariaDB-cll-lve
-- Versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
  CREATE IF NOT EXISTS DATABASE 'u727039026_ACAU_BD';
  USE DATABASE 'u727039026_ACAU_BD';
--
-- Banco de dados: `u727039026_ACAU_BD`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `idaluno` varchar(11) NOT NULL,
  `rg` varchar(16) NOT NULL,
  `senha` varchar(60) DEFAULT NULL,
  `nome` varchar(45) NOT NULL,
  `sta` varchar(20) DEFAULT 'online',
  `carg_al` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `aluno`
--

INSERT INTO `aluno` (`id`, `idaluno`, `rg`, `senha`, `nome`, `sta`, `carg_al`) VALUES
(11, '12011unaba', '1201118883', '$2y$04$weOrmUe34BKa9rR.8naxhubC6daCq3FFjF9AivsW.06mQQbpOYVRG', 'LAISE XAVIER', 'online', NULL),
(12, '88866unaba', '888667661', '$2y$04$1jGs8MwOHzGzm.Ii61KzreqQgDf3tuFC3gGHY5gfK8au74qxfmG7u', 'LAISE XAVIER', 'online', NULL),
(13, '05626unaba', '0562669562', '$2y$04$ul5k8bkE3xXyc17FiiYEve0ayaInQ0uVVB.rseeJFWIRl5EA89qIG', 'ana', 'online', NULL),
(15, '65431unaba', '65431436876', '$2y$04$b7rQ6GfkZvaGkKDewWHdHuCJUJuzisqFZRjsqmskE.X90Lzpw2BTm', 'dudatxr21', 'online', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno_forum`
--

CREATE TABLE `aluno_forum` (
  `topico` varchar(20) NOT NULL,
  `idaluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno_p`
--

CREATE TABLE `aluno_p` (
  `idaluno` int(11) NOT NULL,
  `id_prof` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id_disc` int(11) NOT NULL,
  `nome_disc` varchar(45) DEFAULT NULL,
  `nota_disc` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `forum`
--

CREATE TABLE `forum` (
  `topico` varchar(20) NOT NULL,
  `tforum` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `instituicao`
--

CREATE TABLE `instituicao` (
  `id_instituicao` int(11) NOT NULL,
  `nome_ins` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `tel` varchar(13) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `palavras_banidas`
--

CREATE TABLE `palavras_banidas` (
  `id_PalavrasBanidas` int(11) NOT NULL,
  `nome_Pbanidas` varchar(200) DEFAULT NULL,
  `Nome_correto` varchar(200) DEFAULT '------'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='armazena filtros de palavras';

-- --------------------------------------------------------

--
-- Estrutura para tabela `postagem`
--

CREATE TABLE `postagem` (
  `idpost` int(45) NOT NULL,
  `idaluno` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(240) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `tforum` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idaluno` (`idaluno`),
  ADD UNIQUE KEY `rg` (`rg`);

--
-- Índices de tabela `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`idpost`),
  ADD KEY `idaluno` (`idaluno`),
  ADD KEY `post` (`post`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `postagem`
--
ALTER TABLE `postagem`
  MODIFY `idpost` int(45) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
