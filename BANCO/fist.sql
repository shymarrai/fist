-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Fev-2018 às 21:11
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fist`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `idcategorias` int(11) NOT NULL,
  `nomecat` varchar(45) DEFAULT NULL,
  `marca` varchar(150) NOT NULL,
  `colecao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`idcategorias`, `nomecat`, `marca`, `colecao`) VALUES
(1, 'casual', 'rolex', 'outono'),
(2, 'esportivo', 'thecnos', 'inverno'),
(3, 'smartwatch', 'samsung', 'verão'),
(4, 'masculino', 'oakley', 'primavera'),
(5, 'feminino', 'champion', 'primavera'),
(6, 'casual', 'rolex', 'inverno'),
(7, 'casual', 'rolex', 'outono'),
(8, 'casual', 'rolex', 'outono'),
(9, 'casual', 'rolex', 'outono'),
(10, 'yydyy', 'uyt', 'uckdujk'),
(11, 'yydyy', 'uyt', 'uckdujk'),
(12, 'yydyy', 'uyt', 'uckdujk'),
(13, 'indefinida', 'orient', 'executivo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `rg` varchar(15) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `cep` varchar(11) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nome`, `rg`, `cpf`, `email`, `senha`, `telefone`, `cep`, `endereco`, `cidade`, `estado`) VALUES
(1, 'josecreudo', '123', '123', 'test@test.com', '123', '456', '010203', 'rua a', 'rj', 'rj'),
(2, 'maria', '666', '1111', 'maria@maria.com', '000', '222', '333', 'rua b', 'cx', 'rj'),
(3, 'jagun?o', '123', '456', 'jagunço@capial.com', '0321', '030201', '3333', 'rua c', 'sjm', 'rj'),
(4, 'Vanderwilson', '1234', '0000', 'vander@vander.com', '55555', '1589', '9874', 'rua d', 'bfrx', 'rj');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL,
  `datadopedido` date DEFAULT NULL,
  `idstatuspedido` int(11) NOT NULL,
  `idclien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idprodutos` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `detalhes` varchar(45) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `categoriasid` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idprodutos`, `nome`, `valor`, `modelo`, `detalhes`, `quantidade`, `categoriasid`, `img1`, `img2`, `img3`, `img4`) VALUES
(2, 'lllll', 1010, 'kkkkk', 'hfghdfgh', 52, 12, '15198467065a970532291bf.jpg', '15198467065a970532295a7.jpg', '15198467065a970532295a7.jpg', '15198467065a9705322998f.jpg'),
(3, '469GP079-D1KX 02 orient', 798, '469GP079-D1KX 02', 'com caixa em Aço+Dourado e pulseira em Aço+Do', 1, 13, '15198481165a970ab4d526f.png', '15198481165a970ab4d526f.png', '15198481165a970ab4d5657.png', '15198481165a970ab4d5657.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `statuspedido`
--

CREATE TABLE `statuspedido` (
  `idstatuspedido` int(11) NOT NULL,
  `descricaostatus` varchar(45) DEFAULT NULL,
  `datavalida` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `rg` varchar(15) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `nivel` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `rg`, `cpf`, `email`, `login`, `senha`, `telefone`, `endereco`, `nivel`) VALUES
(1, 'Admin', '0001', '0002', 'test@test.com', 'admin', '1234', '30201', 'rua m', '6'),
(2, 'Luci', '6666', '666', 'devil@devil.com', 'Hellman', '666666', '666666', 'Curva do Diabo', '666');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `idvenda` int(11) NOT NULL,
  `totvenda` double DEFAULT NULL,
  `frete` double DEFAULT NULL,
  `idcli` int(11) NOT NULL,
  `idu` int(11) NOT NULL,
  `pedidoid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcategorias`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`),
  ADD UNIQUE KEY `rg` (`rg`,`cpf`,`email`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `idclien` (`idclien`),
  ADD KEY `idstatuspedido` (`idstatuspedido`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idprodutos`),
  ADD KEY `categoriasid` (`categoriasid`);

--
-- Indexes for table `statuspedido`
--
ALTER TABLE `statuspedido`
  ADD PRIMARY KEY (`idstatuspedido`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `rg` (`rg`,`cpf`,`email`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`idvenda`),
  ADD KEY `idcli` (`idcli`),
  ADD KEY `idu` (`idu`),
  ADD KEY `pedidoid` (`pedidoid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idcategorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idprodutos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `statuspedido`
--
ALTER TABLE `statuspedido`
  MODIFY `idstatuspedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `idvenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`idclien`) REFERENCES `cliente` (`idcliente`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`idstatuspedido`) REFERENCES `statuspedido` (`idstatuspedido`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`categoriasid`) REFERENCES `categorias` (`idcategorias`);

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `venda_ibfk_1` FOREIGN KEY (`idcli`) REFERENCES `cliente` (`idcliente`),
  ADD CONSTRAINT `venda_ibfk_2` FOREIGN KEY (`idu`) REFERENCES `usuario` (`idusuario`),
  ADD CONSTRAINT `venda_ibfk_3` FOREIGN KEY (`pedidoid`) REFERENCES `pedido` (`idpedido`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
