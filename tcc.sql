-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Out-2024 às 15:07
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(255) NOT NULL,
  `quant_jogos` int NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nome_categoria`, `quant_jogos`) VALUES
(1, 'Terror', 1),
(2, 'Ação', 1),
(3, 'Esporte', 1),
(4, 'Luta', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum` (
  `id_forum` int NOT NULL AUTO_INCREMENT,
  `id_jogo` int NOT NULL,
  `id_usuario` int NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `corpo_texto` text NOT NULL,
  PRIMARY KEY (`id_forum`),
  KEY `fk_usuarios` (`id_usuario`),
  KEY `fk_jogo_forum` (`id_jogo`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `forum`
--

INSERT INTO `forum` (`id_forum`, `id_jogo`, `id_usuario`, `titulo`, `subtitulo`, `corpo_texto`) VALUES
(34, 29, 109, 'dsadsa', 'sdadsa', ' dsadsa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

DROP TABLE IF EXISTS `jogos`;
CREATE TABLE IF NOT EXISTS `jogos` (
  `id_jogo` int NOT NULL AUTO_INCREMENT,
  `nome_jogo` varchar(255) NOT NULL,
  `empresa_jogo` varchar(255) NOT NULL,
  `quant_forum_jogo` int DEFAULT NULL,
  `id_categoria` int NOT NULL,
  `foto_jogo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_jogo`),
  KEY `fk_categoria` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`id_jogo`, `nome_jogo`, `empresa_jogo`, `quant_forum_jogo`, `id_categoria`, `foto_jogo`) VALUES
(26, 'Fortnite', 'Epic Games', NULL, 2, '66f30861289bc.jpg'),
(29, 'League of Legends', 'Riot Games', NULL, 2, '66fff26b4aef1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `senha_user` varchar(255) NOT NULL,
  `nivel_acesso` varchar(3) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email_user` (`email_user`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_user`, `email_user`, `senha_user`, `nivel_acesso`) VALUES
(109, 'das', 'das@gmail.com', '123', 'usr'),
(118, 'dsadas', 'dsadas@gmail.com', '123', 'usr');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `fk_jogo_forum` FOREIGN KEY (`id_jogo`) REFERENCES `jogos` (`id_jogo`),
  ADD CONSTRAINT `fk_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Limitadores para a tabela `jogos`
--
ALTER TABLE `jogos`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
