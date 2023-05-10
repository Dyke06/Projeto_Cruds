-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/05/2023 às 06:43
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
(3, 'Naruto', 'Igor', '2023-05-10', '2023-05-17'),
(4, 'Uzumaki', 'Dyke', '2023-05-06', '2023-05-12');

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
(1, 'Igor', 'ids522275@gmail.com', 8698432, 'www.abu23.com.br'),
(2, 'mara', 'ids5275@gmail.com', 85984321, 'www.Kj3.com.br'),
(6, 'Bea', 'ids5275@gmail.com', 8698432, 'www.Kj3.com.br');

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
(1, 'A morte do cara', 'Maria Gonsalves', 'Limajk Kubov', '2023-05-04', 4),
(2, 'O caçador', 'Juninho da Silva', 'Eschaul', '2023-05-11', 4),
(4, 'Mazer runner', 'Jamica Kamano', 'Japão', '2023-05-02', 10),
(7, 'Dyke', 'Igor Vrishidikev', 'Animation', '2023-05-09', 22);

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
(39, 'Alguém', '32321', 0, 'Rua raio 22', 'd@gmail.com'),
(42, 'Ademir', 'Maracanaú', 85984157, 'Rua raio 22', 'd@gmail.com'),
(43, 'Aijaa', 'Mad', 756745321, 'Rua raio 22', 'd@gmail.com'),
(44, 'Alguém', 'Pirata', 40028922, 'Rua raio 22', 'lima@gmail.com'),
(46, 'Luara Silva', 'Fortaleza', 40028922, 'Lugar estranho', 'bd522275@gmail.com'),
(47, 'beatriz dantas', 'Fortaleza', 985984157, 'rua 32 casa 294', 'bd522275@gmail.com'),
(48, 'Igor', 'Fortaleza', 8598417, 'rua 32 casa 294', 'hv522275@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `userlogin`
--

CREATE TABLE `userlogin` (
  `emailLogin` varchar(50) NOT NULL,
  `senhaLogin` varchar(60) NOT NULL,
  `nomeLogin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `userlogin`
--

INSERT INTO `userlogin` (`emailLogin`, `senhaLogin`, `nomeLogin`) VALUES
('wda@gmail.com', '123', 'Caio');

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
  ADD PRIMARY KEY (`emailLogin`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbaluguel`
--
ALTER TABLE `tbaluguel`
  MODIFY `idAluguel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbeditora`
--
ALTER TABLE `tbeditora`
  MODIFY `idEditora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tblivro`
--
ALTER TABLE `tblivro`
  MODIFY `idLivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
