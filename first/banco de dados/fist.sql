-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Fev-2018 às 02:10
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 5.6.33

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
  `nome` varchar(45) DEFAULT NULL,
  `descricao` varchar(205) DEFAULT NULL,
  `marca` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`idcategorias`, `nome`, `descricao`, `marca`) VALUES
(1, 'Luxo', 'foda', 'rolex'),
(2, 'Casual', 'naosei', 'champion'),
(3, 'outro', 'sdfsadf', 'oakley');

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
(1, 'cliente', '0000000', '00000000', 'test@test.com', '1234', '000000000', '00000000', 'sfkndsdjfb 0', 'rj', 'rj');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `idimagem` int(11) NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  `idprodutos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itempedido`
--

CREATE TABLE `itempedido` (
  `iditempedido` int(11) NOT NULL,
  `qtd` varchar(45) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `idpedi` int(11) NOT NULL,
  `idprod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemvenda`
--

CREATE TABLE `itemvenda` (
  `iditemvenda` int(11) NOT NULL,
  `datavenda` date DEFAULT NULL,
  `prazo` varchar(45) DEFAULT NULL,
  `idpedi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `idcategorias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idprodutos`, `nome`, `valor`, `modelo`, `detalhes`, `idcategorias`) VALUES
(1, ' VANDARMIER 1800 ACCIAIO', 1800, 'ACCIAIO', 'topzera', 1);

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
(1, 'test', '000000000', '00000000000', 'test@test.com', 'admin', '1234', '000000000', 'aaaaaaaaaaaaaaaa 0', 'total');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `idvenda` int(11) NOT NULL,
  `totvenda` double DEFAULT NULL,
  `frete` double DEFAULT NULL,
  `iditemv` int(11) NOT NULL,
  `idcli` int(11) NOT NULL,
  `idu` int(11) NOT NULL
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
-- Indexes for table `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`idimagem`),
  ADD KEY `idprodutos` (`idprodutos`);

--
-- Indexes for table `itempedido`
--
ALTER TABLE `itempedido`
  ADD PRIMARY KEY (`iditempedido`),
  ADD KEY `idpedi` (`idpedi`),
  ADD KEY `idprod` (`idprod`);

--
-- Indexes for table `itemvenda`
--
ALTER TABLE `itemvenda`
  ADD PRIMARY KEY (`iditemvenda`),
  ADD KEY `idpedi` (`idpedi`);

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
  ADD KEY `idcategorias` (`idcategorias`);

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
  ADD KEY `iditemv` (`iditemv`),
  ADD KEY `idu` (`idu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idcategorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `imagem`
--
ALTER TABLE `imagem`
  MODIFY `idimagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itempedido`
--
ALTER TABLE `itempedido`
  MODIFY `iditempedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itemvenda`
--
ALTER TABLE `itemvenda`
  MODIFY `iditemvenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idprodutos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statuspedido`
--
ALTER TABLE `statuspedido`
  MODIFY `idstatuspedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `idvenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `imagem`
--
ALTER TABLE `imagem`
  ADD CONSTRAINT `imagem_ibfk_1` FOREIGN KEY (`idprodutos`) REFERENCES `produtos` (`idprodutos`);

--
-- Limitadores para a tabela `itempedido`
--
ALTER TABLE `itempedido`
  ADD CONSTRAINT `itempedido_ibfk_1` FOREIGN KEY (`idpedi`) REFERENCES `pedido` (`idpedido`),
  ADD CONSTRAINT `itempedido_ibfk_2` FOREIGN KEY (`idprod`) REFERENCES `produtos` (`idprodutos`);

--
-- Limitadores para a tabela `itemvenda`
--
ALTER TABLE `itemvenda`
  ADD CONSTRAINT `itemvenda_ibfk_1` FOREIGN KEY (`idpedi`) REFERENCES `pedido` (`idpedido`);

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
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`idcategorias`) REFERENCES `categorias` (`idcategorias`);

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `venda_ibfk_1` FOREIGN KEY (`idcli`) REFERENCES `cliente` (`idcliente`),
  ADD CONSTRAINT `venda_ibfk_2` FOREIGN KEY (`iditemv`) REFERENCES `itemvenda` (`iditemvenda`),
  ADD CONSTRAINT `venda_ibfk_3` FOREIGN KEY (`idu`) REFERENCES `usuario` (`idusuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
