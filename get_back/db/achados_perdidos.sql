-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Out-2017 às 17:57
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
(1, 1, 1, 'sadawda', '2017-10-18 17:19:13'),
(2, 8, 3, 'asdawsaasd asdaw asdaw aw awaw w wd dvdf', '2017-10-25 12:54:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id_mensagem` int(11) NOT NULL,
  `id_de` int(11) NOT NULL,
  `id_para` int(11) NOT NULL,
  `mensagem` varchar(2000) NOT NULL,
  `data_hora` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id_mensagem`, `id_de`, `id_para`, `mensagem`, `data_hora`) VALUES
(1, 1, 4, 'as', '2017-10-24 18:23:41'),
(2, 1, 4, 'as', '2017-10-24 18:25:13'),
(3, 1, 4, 'asawd', '2017-10-24 18:29:50'),
(4, 4, 1, 'a', '2017-10-24 18:52:25'),
(5, 4, 1, 'sad', '2017-10-24 18:52:30'),
(6, 4, 1, 'asd', '2017-10-24 18:52:34'),
(7, 4, 1, 'wds', '2017-10-24 18:53:05'),
(8, 4, 1, 'aw', '2017-10-24 18:53:10'),
(9, 4, 1, 'aw', '2017-10-24 18:53:17');

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
(6, 3, 'xvasdsac', 'cd3fc411a410a3661e24f372bcb117c0.jpg', '2017-10-06 19:56:23'),
(8, 4, 'uma postagem', 'c4c5ea114db5b64dfac66b9ee1438824.jpg', '2017-10-10 21:39:30');

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
(1, 'a@a', '0cc175b9c0f1b6a831c399e269772661', 'Não é o Chilon', 'Sistemas de Informação', '5368097f883574b9404195c995337494.jpg'),
(3, 'b@b', '0cc175b9c0f1b6a831c399e269772661', 'b', 'b', '5368097f883574b9404195c995337494.jpg'),
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
  MODIFY `id_mensagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `postagem`
--
ALTER TABLE `postagem`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
