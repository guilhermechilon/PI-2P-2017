-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Nov-2017 às 11:03
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
(1, 1, 1, 'sadawda', '2017-10-18 17:19:13');

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
(1, 1, 4, 'as', '2017-10-24 18:23:41', 2),
(2, 1, 4, 'as', '2017-10-24 18:25:13', 2),
(3, 1, 4, 'asawd', '2017-10-24 18:29:50', 2),
(4, 4, 1, 'a', '2017-10-24 18:52:25', 2),
(5, 4, 1, 'sad', '2017-10-24 18:52:30', 2),
(6, 4, 1, 'asd', '2017-10-24 18:52:34', 2),
(7, 4, 1, 'wds', '2017-10-24 18:53:05', 2),
(8, 4, 1, 'aw', '2017-10-24 18:53:10', 2),
(9, 4, 1, 'aw', '2017-10-24 18:53:17', 2),
(10, 1, 4, 'was', '2017-10-31 13:47:06', 2),
(11, 1, 4, 'aw', '2017-10-31 13:49:47', 2),
(12, 1, 4, 'aaaawa', '2017-10-31 13:57:43', 2),
(13, 1, 4, 'hj é dia das bruxas', '2017-10-31 13:57:57', 2),
(14, 1, 4, '52', '2017-10-31 13:58:06', 2),
(15, 1, 4, '478', '2017-10-31 13:58:24', 2),
(16, 4, 1, '2w', '2017-10-31 14:00:43', 2),
(17, 1, 4, 'ws235', '2017-10-31 17:28:19', 2),
(18, 4, 1, '56', '2017-10-31 13:28:46', 2),
(19, 1, 3, 'awasdwawasdwawasdwawasdw awasdw awasdw awasdw dwaqwd acac acac   a a assad acac acac   a a assad acac acac   a a assad acac acac   a a assad acac acac   a a assad acac acac   a a assad acac acac   a a assad acac acac   a a assad acac acac   a a assad acac acac   a a assad acac acac   a a assad acac acac   a a assad acac acac   a a assad acac acac   a a assa', '2017-10-31 17:33:57', 2),
(20, 4, 1, 'aw', '2017-10-31 16:36:19', 2),
(21, 3, 1, 'aw', '2017-10-31 16:36:21', 2),
(22, 4, 1, 'wadsaw', '2017-10-31 18:26:55', 2),
(23, 1, 3, 'awasd', '2017-10-31 17:29:04', 2),
(24, 3, 1, 'awda', '2017-10-31 17:29:09', 2),
(25, 3, 1, 'awdwaa513', '2017-10-31 17:29:21', 2),
(26, 3, 1, '333', '2017-10-31 17:34:51', 2),
(27, 1, 3, 'axwd', '2017-10-31 18:45:55', 2),
(28, 3, 1, '123', '2017-10-31 18:46:27', 2),
(29, 1, 4, '23123', '2017-10-31 18:50:21', 2),
(30, 3, 4, 'wadas', '2017-10-31 18:51:45', 2),
(31, 3, 4, 'awq', '2017-10-31 18:52:47', 2),
(35, 1, 4, 'xcve', '2017-10-31 18:54:20', 2),
(34, 3, 4, 'awq', '2017-10-31 18:53:56', 2),
(36, 4, 3, '12', '2017-10-31 18:55:04', 1),
(37, 4, 1, '31', '2017-10-31 18:55:17', 2),
(38, 1, 4, 'wadw', '2017-10-31 18:56:12', 2),
(39, 1, 4, 'opa', '2017-10-31 18:56:32', 2),
(40, 4, 1, 'ola', '2017-10-31 18:56:37', 2),
(41, 1, 4, 'all right', '2017-10-31 18:56:43', 2),
(42, 4, 1, 'yep', '2017-10-31 18:56:49', 2),
(43, 4, 1, 'and u', '2017-10-31 18:56:55', 2),
(44, 1, 4, '2', '2017-10-31 18:57:00', 2),
(45, 1, 4, 'hey, ur here?', '2017-10-31 18:57:28', 2),
(46, 4, 1, 'wadqqs', '2017-10-31 20:34:37', 2),
(47, 4, 1, '23412', '2017-10-31 20:34:55', 2),
(48, 4, 1, 'awq', '2017-10-31 20:35:38', 2),
(49, 1, 4, 'google.com', '2017-10-31 20:43:54', 2),
(50, 4, 1, '564', '2017-11-01 16:10:08', 2),
(51, 1, 4, 'awdda', '2017-11-01 17:13:38', 1),
(52, 1, 3, 'awdasaw', '2017-11-01 17:13:50', 1),
(53, 4, 3, 'sadawdas', '2017-11-01 17:14:56', 1);

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
(1, 1, 'asdwasd', '0de5c4bb76323ae88d7b59aba5aa0a98.jpg', '2017-09-25 08:54:12'),
(2, 4, 'asdaw', '0de5c4bb76323ae88d7b59aba5aa0a98.jpg', '2017-09-27 08:54:13'),
(6, 3, 'xvasdsac', '0de5c4bb76323ae88d7b59aba5aa0a98.jpg', '2017-10-06 19:56:23');

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
(1, 'a@a', '0cc175b9c0f1b6a831c399e269772661', 'Não é o Chilon', 'Sistemas de Informação', 'd41dcecca96949d4c85a9da9998f4030.jpg'),
(3, 'b@b', '0cc175b9c0f1b6a831c399e269772661', 'b', 'b', 'c4c5ea114db5b64dfac66b9ee1438824.jpg'),
(4, 's@s', '0cc175b9c0f1b6a831c399e269772661', 'asd', 'asd', '5368097f883574b9404195c995337494.jpg');

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
  MODIFY `id_coment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id_mensagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `postagem`
--
ALTER TABLE `postagem`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
