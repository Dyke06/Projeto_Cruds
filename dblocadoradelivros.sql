-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/05/2023 às 06:14
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
  `devolucaoAluguel` date NOT NULL,
  `statusAluguel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbaluguel`
--

INSERT INTO `tbaluguel` (`idAluguel`, `livroAluguel`, `nomeAluguel`, `dataAluguel`, `devolucaoAluguel`, `statusAluguel`) VALUES
(102, 'Mazer runner', 'Cayo', '2023-05-06', '2023-05-19', '(No prazo)'),
(119, 'O caçador', 'Igor Dantas', '2023-05-13', '2023-05-28', '(No prazo)'),
(124, 'Dyke', 'Ana', '2023-05-26', '2023-05-31', '(No prazo)'),
(156, 'O caçador', 'Igor Dantas', '2023-05-20', '2023-05-27', '(Com atraso)');

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
(1, 'Karks', 'ids522275@gmail.com', 8698432, 'www.abu23.com.b'),
(2, 'KJ', 'ids5275@gmail.com', 85984321, 'www.Kj3.com.br'),
(6, 'Bea', 'ids5275@gmail.com', 869843, 'www.Kj3.com.br'),
(8, 'Animation', 'Anims32@gmail.com', 857643212, 'www.AnimationDr.com');

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
  `estoqueLivro` int(11) NOT NULL,
  `alugadoLivro` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblivro`
--

INSERT INTO `tblivro` (`idLivro`, `nomeLivro`, `autorLivro`, `editoraLivro`, `dataLivro`, `estoqueLivro`, `alugadoLivro`) VALUES
(2, 'O caçador', 'Juninho da Silva', 'Karks', '2023-05-11', 9, 1),
(4, 'Mazer runner', 'Jamica Kamano', 'Japão', '2023-05-02', 10, 2),
(7, 'Dyke', 'Igor Vrishidikev', 'Karks', '2023-05-09', 9, 1),
(10, 'O cara', 'Ednaldo Pereira', 'Animation', '2023-05-26', 21, 0),
(11, 'A morte do cara', 'Juninho', 'Eschaulffff', '2023-05-06', 5, 0),
(12, 'Animation', 'rea', 'Bea', '2023-05-05', 3, 0);

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
(17, 'Igor Dantas ', 'Fortaleza', 40028922, 'New York', 'ids522275@gmail.com'),
(37, 'Ana', 'Maranhão', 85985431, 'Rua raio 22', 'd@gmail.com'),
(39, 'Cayo', 'Maracanaú', 555555, 'Rua raio 22', 'd@gmail.com'),
(42, 'Ademir', 'Maracanaú', 85984157, 'Rua raio 22', 'd@gmail.com'),
(46, 'Luara Silva', 'Fortaleza', 40028922, 'Lugar estranho', 'bd522275@gmail.com'),
(47, 'beatriz dantas', 'Fortaleza', 985984157, 'rua 43 - 223', 'bd522275@gmail.com'),
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
  MODIFY `idAluguel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT de tabela `tbeditora`
--
ALTER TABLE `tbeditora`
  MODIFY `idEditora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tblivro`
--
ALTER TABLE `tblivro`
  MODIFY `idLivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
