-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Jan-2025 às 20:08
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
-- Banco de dados: `tcc1`
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
-- Estrutura da tabela `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_comentario` int NOT NULL AUTO_INCREMENT,
  `id_forum` int NOT NULL,
  `id_usuario` int NOT NULL,
  `coment` varchar(255) NOT NULL,
  `data_comment` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_comentario`),
  KEY `fk_usuario` (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `id_forum`, `id_usuario`, `coment`, `data_comment`) VALUES
(13, 47, 133, ' dsadsa', '2025-01-27 10:42:14'),
(14, 47, 133, ' sadsadsa', '2025-01-27 10:42:14'),
(15, 49, 133, ' dsadsadsa', '2025-01-27 10:42:14'),
(16, 50, 133, ' dsadsadsa', '2025-01-27 10:42:14'),
(17, 51, 133, ' dsadsadsa', '2025-01-27 10:42:14'),
(18, 47, 133, ' dsa', '2025-01-27 12:43:37'),
(26, 47, 134, ' ggg', '2025-01-27 17:01:37'),
(25, 47, 134, ' fasdfasdfsadf', '2025-01-27 16:58:05'),
(24, 47, 133, ' dsa', '2025-01-27 15:28:17');

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
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `forum`
--

INSERT INTO `forum` (`id_forum`, `id_jogo`, `id_usuario`, `titulo`, `subtitulo`, `corpo_texto`) VALUES
(47, 33, 133, 'dsa', 'dsa', ' dsa'),
(48, 33, 133, 'dsadsa', 'dasds', ' sdadsa'),
(49, 34, 133, 'dsadsa', 'dsadsa', ' dsadsa'),
(50, 35, 133, 'dsad', 'sadsad', ' sadsa'),
(51, 36, 133, 'dsadsa', 'dsadsadsa', ' dsadsa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

DROP TABLE IF EXISTS `jogos`;
CREATE TABLE IF NOT EXISTS `jogos` (
  `id_jogo` int NOT NULL AUTO_INCREMENT,
  `nome_jogo` varchar(255) NOT NULL,
  `empresa_jogo` varchar(255) NOT NULL,
  `id_categoria` int NOT NULL,
  `foto_jogo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_jogo`),
  KEY `fk_categoria` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`id_jogo`, `nome_jogo`, `empresa_jogo`, `id_categoria`, `foto_jogo`) VALUES
(33, 'dsa', 'dsa', 2, '679784b502525.jpg'),
(34, 'dsadsa', 'dsadsa', 2, '67978b9249616.png'),
(35, 'dsadsa', 'dsadsa', 1, '67978b9cdade9.jpg'),
(36, 'dsads', 'dsadsa', 1, '67978ba80e5c0.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `recuperar-senha`
--

DROP TABLE IF EXISTS `recuperar-senha`;
CREATE TABLE IF NOT EXISTS `recuperar-senha` (
  `email` varchar(255) NOT NULL,
  `token` char(102) NOT NULL,
  `data_criacao` datetime NOT NULL,
  `usado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `recuperar-senha`
--

INSERT INTO `recuperar-senha` (`email`, `token`, `data_criacao`, `usado`) VALUES
('martin.2022311000@aluno.iffar.edu.br', '3fd45234fec06b39b9929ebbbaf150a01aad424575da629bfc0cd92ad5ef1746596087316ff8f71ebad3d679c3ae13b2c759', '2025-01-27 11:28:05', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome_user` varchar(255) NOT NULL,
  `foto_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `senha_user` varchar(255) NOT NULL,
  `nivel_acesso` varchar(3) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email_user` (`email_user`)
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_user`, `foto_user`, `email_user`, `senha_user`, `nivel_acesso`) VALUES
(133, 'Martin1', '6797a6f3b4c54.jpg', 'Martin@gmail.com1', '1231', 'adm'),
(134, 'Thiago Krug', '6797e67e41e75.jpg', 'thiago.krug@iffarroupilha.edu.br', '123', 'usr'),
(135, 'Martin', 'user_padrao.png', 'martin.2022311000@aluno.iffar.edu.br', '1234', 'usr'),
(136, 'qq', 'user_padrao.png', 'qq@q.c', 'asdf', 'usr');

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
