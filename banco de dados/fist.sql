-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Fev-2018 às 11:33
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
  `nomecat` varchar(45) DEFAULT NULL,
  `marca` varchar(150) NOT NULL,
  `colecao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`idcategorias`, `nomecat`, `marca`, `colecao`) VALUES
(1, 'alterandocat2', 'alterandomarc2', 'alterandocole2'),
(2, 'gfh', 'gh', 'gh');

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
(1, 'test', '8465465', '56465454', 'fkdn@sdnf.com', '1234', '561651', 'dfkgn', '561', 'jfnvjfbn', 'lkfvnvfknbgd');

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

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`idpedido`, `datadopedido`, `idstatuspedido`, `idclien`) VALUES
(1, '2018-02-07', 1, 1);

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
  `img4` varchar(255) NOT NULL,
  `idped` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idprodutos`, `nome`, `valor`, `modelo`, `detalhes`, `quantidade`, `categoriasid`, `img1`, `img2`, `img3`, `img4`, `idped`) VALUES
(1, 'alterandoprod2', 81, 'alterandomod2', 'alterandodet2', 666, 1, '7ee3c05aa395b1e34c0bcc0531490d02.jpg', '620b3cfbe92b4a40304a49c11b5af809.jpg', '4c7f6e6617cc714e780c4d26760bd085.jpg', '821941065e3dcb4e47f15fbcb2646e87.jpg', 1),
(2, 'fhg', 18, 'fgdh', 'gdh', 2, 2, 'fd7f0d2872e379ff941b40f43c2c802e.jpg', '57f2590d5f276e1bcee8502061cf12c7.jpg', 'c00c580f95f5d86aaee4587e420318d3.png', 'ad21a5d925a034874f09d1dc54e27ff1.png', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `statuspedido`
--

CREATE TABLE `statuspedido` (
  `idstatuspedido` int(11) NOT NULL,
  `descricaostatus` varchar(45) DEFAULT NULL,
  `datavalida` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `statuspedido`
--

INSERT INTO `statuspedido` (`idstatuspedido`, `descricaostatus`, `datavalida`) VALUES
(1, 'Pago', '2018-02-01');

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
(1, 'admin', '65151', '515151', 'sadbn@dsufb.com', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '564564', 'dfgxdfgf', 'Alto');

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
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`idvenda`, `totvenda`, `frete`, `idcli`, `idu`, `pedidoid`) VALUES
(1, NULL, NULL, 1, 1, 1);

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
  ADD KEY `categoriasid` (`categoriasid`),
  ADD KEY `idped` (`idped`);

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
  MODIFY `idcategorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idprodutos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statuspedido`
--
ALTER TABLE `statuspedido`
  MODIFY `idstatuspedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `idvenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`categoriasid`) REFERENCES `categorias` (`idcategorias`),
  ADD CONSTRAINT `produtos_ibfk_2` FOREIGN KEY (`idped`) REFERENCES `pedido` (`idpedido`);

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
