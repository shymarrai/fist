-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`idcategorias`, `nomecat`, `marca`, `colecao`) VALUES
(1, 'casual', 'rolex', 'outono'),
(2, 'esportivo', 'thecnos', 'inverno'),
(3, 'smartwatch', 'samsung', 'verão'),
(4, 'masculino', 'oakley', 'primavera'),
(5, 'feminino', 'champion', 'primavera');

-- --------------------------------------------------------



-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nome`, `rg`, `cpf`, `email`, `senha`, `telefone`, `cep`, `endereco`, `cidade`, `estado`) VALUES
(1, 'josecreudo', '123', '123', 'test@test.com', '123', '456', '010203', 'rua a', 'rj', 'rj'),
(2, 'maria', '666', '1111', 'maria@maria.com', '000', '222', '333', 'rua b', 'cx', 'rj'),
(3, 'jagun?o', '123', '456', 'jagunço@capial.com', '0321', '030201', '3333', 'rua c', 'sjm', 'rj'),
(4, 'Vanderwilson', '1234', '0000', 'vander@vander.com', '55555', '1589', '9874', 'rua d', 'bfrx', 'rj');

-- --------------------------------------------------------

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `rg`, `cpf`, `email`, `login`, `senha`, `telefone`, `endereco`, `nivel`) VALUES
(1, 'Admin', '0001', '0002', 'test@test.com', 'admin', '1234', '30201', 'rua m', '6'),
(2, 'Luci', '6666', '666', 'devil@devil.com', 'Hellman', '666666', '666666', 'Curva do Diabo', '666');

-- --------------------------------------------------------

