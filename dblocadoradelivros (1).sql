-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/05/2023 às 02:41
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dblocadoradelivros`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbaluguel`
--

CREATE TABLE `tbaluguel` (
  `idAluguel` int(11) NOT NULL,
  `livroAluguel` varchar(100) NOT NULL,
  `nomeAluguel` varchar(100) NOT NULL,
  `dataAluguel` date NOT NULL,
  `devolucaoAluguel` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbaluguel`
--

INSERT INTO `tbaluguel` (`idAluguel`, `livroAluguel`, `nomeAluguel`, `dataAluguel`, `devolucaoAluguel`) VALUES
(1, 'O caçador', 'Dyke', '2023-05-04', '2023-05-10'),
(14, 'A morte do cara', 'Igor', '2023-05-06', '2023-05-20'),
(62, 'Dyke', 'Igor', '2023-05-05', '2023-05-06'),
(63, 'A morte do cara', 'karl', '2023-05-12', '2023-05-13'),
(64, 'Mazer runner', 'ademir', '2023-05-06', '2023-05-11'),
(65, 'O caçador', 'Igor', '2023-05-05', '2023-05-13'),
(67, 'O pequeno muleque', 'Bruno', '2023-05-06', '2023-05-27'),
(68, 'Mazer runner', 'Igor', '2023-05-05', '2023-05-06');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbeditora`
--

CREATE TABLE `tbeditora` (
  `idEditora` int(11) NOT NULL,
  `nomeEditora` varchar(100) NOT NULL,
  `emailEditora` varchar(100) NOT NULL,
  `telefoneEditora` int(11) NOT NULL,
  `siteEditora` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbeditora`
--

INSERT INTO `tbeditora` (`idEditora`, `nomeEditora`, `emailEditora`, `telefoneEditora`, `siteEditora`) VALUES
(1, 'Igor', 'ids522275@gmail.com', 8698432, 'www.abu23.com.b'),
(2, 'mara', 'ids5275@gmail.com', 85984321, 'www.Kj3.com.br'),
(6, 'Bea', 'ids5275@gmail.com', 869843, 'www.Kj3.com.br');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblivro`
--

CREATE TABLE `tblivro` (
  `idLivro` int(11) NOT NULL,
  `nomeLivro` varchar(150) NOT NULL,
  `autorLivro` varchar(150) NOT NULL,
  `editoraLivro` varchar(150) NOT NULL,
  `dataLivro` date NOT NULL,
  `estoqueLivro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblivro`
--

INSERT INTO `tblivro` (`idLivro`, `nomeLivro`, `autorLivro`, `editoraLivro`, `dataLivro`, `estoqueLivro`) VALUES
(2, 'O caçador', 'Juninho da Silva', 'Eschaul', '2023-05-11', 4),
(4, 'Mazer runner', 'Jamica Kamano', 'Japão', '2023-05-02', 10),
(7, 'Dyke', 'Igor Vrishidikev', 'Animation', '2023-05-09', 22),
(10, 'O cara', 'Ednaldo Pereira', 'Eschaulffff', '2023-05-26', 4),
(11, 'A morte do cara', 'Juninho', 'Eschaulffff', '2023-05-06', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(200) NOT NULL,
  `cidadeUsuario` varchar(150) NOT NULL,
  `numeroUsuario` int(10) NOT NULL,
  `endereçoUsuario` varchar(200) NOT NULL,
  `emailUsuario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nomeUsuario`, `cidadeUsuario`, `numeroUsuario`, `endereçoUsuario`, `emailUsuario`) VALUES
(17, 'Igor Dantas Soares', 'Fortaleza', 40028922, 'caverna das tartarugas ninjas', 'ids522275@gmail.com'),
(37, 'Alguém', 'Maranhão', 85985431, 'Rua raio 22', 'd@gmail.com'),
(39, 'Alguém', '32321', 555555, 'Rua raio 22', 'd@gmail.com'),
(42, 'Ademir', 'Maracanaú', 85984157, 'Rua raio 22', 'd@gmail.com'),
(46, 'Luara Silva', 'Fortaleza', 40028922, 'Lugar estranho', 'bd522275@gmail.com'),
(47, 'beatriz dantas', 'Fortaleza', 985984157, 'rua 32 casa 294', 'bd522275@gmail.com'),
(48, 'Igor', 'Fortaleza', 8598417, 'rua 32 casa 294', 'hv522275@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `userlogin`
--

CREATE TABLE `userlogin` (
  `idLogin` int(11) NOT NULL,
  `nomeLogin` varchar(50) NOT NULL,
  `emailLogin` varchar(60) NOT NULL,
  `senhaLogin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `userlogin`
--

INSERT INTO `userlogin` (`idLogin`, `nomeLogin`, `emailLogin`, `senhaLogin`) VALUES
(1, 'Caio', 'wda@gmail.com', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbaluguel`
--
ALTER TABLE `tbaluguel`
  ADD PRIMARY KEY (`idAluguel`);

--
-- Índices de tabela `tbeditora`
--
ALTER TABLE `tbeditora`
  ADD PRIMARY KEY (`idEditora`);

--
-- Índices de tabela `tblivro`
--
ALTER TABLE `tblivro`
  ADD PRIMARY KEY (`idLivro`);

--
-- Índices de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Índices de tabela `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`idLogin`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbaluguel`
--
ALTER TABLE `tbaluguel`
  MODIFY `idAluguel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de tabela `tbeditora`
--
ALTER TABLE `tbeditora`
  MODIFY `idEditora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tblivro`
--
ALTER TABLE `tblivro`
  MODIFY `idLivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
