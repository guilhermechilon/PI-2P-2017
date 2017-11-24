-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Nov-2017 às 17:27
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `achados_perdidos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `id_coment` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `comentario` varchar(355) NOT NULL,
  `data_coment` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`id_coment`, `id_post`, `id_usuario`, `comentario`, `data_coment`) VALUES
(7, 13, 3, 'inbox', '2017-11-24 15:14:06'),
(6, 13, 4, 'Minha colega achou ela', '2017-11-24 15:13:29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id_mensagem` int(11) NOT NULL,
  `id_de` int(11) NOT NULL,
  `id_para` int(11) NOT NULL,
  `mensagem` varchar(2000) NOT NULL,
  `data_hora` datetime NOT NULL,
  `visualizado` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id_mensagem`, `id_de`, `id_para`, `mensagem`, `data_hora`, `visualizado`) VALUES
(70, 4, 3, 'Blz', '2017-11-24 15:19:12', 2),
(69, 3, 4, 'Tudo bem, me encontra em frente o bloco A as 19:00', '2017-11-24 15:19:09', 2),
(68, 4, 3, 'Uma amiga de sala, vejo com ela para me entregar e eu lhe devolver', '2017-11-24 15:17:53', 2),
(67, 3, 4, 'Ei, quem é a sua colega que achou a mochila?', '2017-11-24 15:15:35', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE `postagem` (
  `id_post` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `post` varchar(355) NOT NULL,
  `img_post` varchar(65) NOT NULL,
  `data_post` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`id_post`, `id_usuario`, `post`, `img_post`, `data_post`) VALUES
(13, 3, 'Pessoinhas, esqueci minha mochila no bloco F no 1º piso na sala de informatica branca, se alguem achar me manda mensagem. . .\r\nEla é do estilo dessa aqui.', '755298841c6e7087d70cbf328067cd5c.jpg', '2017-11-24 15:13:02'),
(12, 1, 'Gente, perdi um pendrive no 2º piso do bloco E, ele é parecido com esse da foto, se alguem achar me manda inbox, plss!!', '717fa87f13aa730949a434c8d325c9fc.jpg', '2017-11-24 15:10:24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(65) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(35) CHARACTER SET latin1 NOT NULL,
  `nome` varchar(65) CHARACTER SET latin1 NOT NULL,
  `curso` varchar(25) CHARACTER SET latin1 NOT NULL,
  `foto_perfil` varchar(65) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `senha`, `nome`, `curso`, `foto_perfil`) VALUES
(1, 'a@a', '0cc175b9c0f1b6a831c399e269772661', 'Não é o Chilon', 'Sistemas de Informação', 'avatar1.png'),
(3, 'b@b', '0cc175b9c0f1b6a831c399e269772661', 'Agatha Lima', 'Agronomia', 'avatar2.png'),
(4, 's@s', '0cc175b9c0f1b6a831c399e269772661', 'Carlos Chave', 'Administração', 'avatar3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_coment`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_post` (`id_post`);

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id_mensagem`);

--
-- Indexes for table `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_coment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id_mensagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `postagem`
--
ALTER TABLE `postagem`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
