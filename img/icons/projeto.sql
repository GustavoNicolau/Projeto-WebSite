-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Nov-2020 às 18:25
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(30) NOT NULL,
  `descricao_categoria` varchar(30) DEFAULT NULL,
  `status_categoria` varchar(7) NOT NULL,
  `obs_categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(50) NOT NULL,
  `senha_cliente` varchar(60) NOT NULL,
  `cpf_cliente` char(14) NOT NULL,
  `endereco_cliente` varchar(50) NOT NULL,
  `cep_cliente` char(9) NOT NULL,
  `NE_cliente` varchar(5) NOT NULL,
  `bairro_cliente` varchar(30) NOT NULL,
  `cidade_cliente` varchar(30) NOT NULL,
  `UF_cliente` char(2) NOT NULL,
  `email_cliente` varchar(100) NOT NULL,
  `telFixo_cliente` char(14) DEFAULT NULL,
  `telCel_cliente` varchar(15) DEFAULT NULL,
  `status_cliente` varchar(7) NOT NULL,
  `obs_cliente` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(11) NOT NULL,
  `id_fornecedor` int(11) NOT NULL,
  `valor_compra` decimal(10,2) NOT NULL,
  `data_compra` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_compra` varchar(7) NOT NULL,
  `obs_compra` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id_fornecedor` int(11) NOT NULL,
  `nome_fornecedor` varchar(30) NOT NULL,
  `cnpj_fornecedor` char(18) NOT NULL,
  `email_fornecedor` varchar(100) NOT NULL,
  `endereco_fornecedor` varchar(50) NOT NULL,
  `telFixo_fornecedor` char(14) DEFAULT NULL,
  `telCel_fornecedor` char(15) DEFAULT NULL,
  `status_fornecedor` varchar(7) NOT NULL,
  `obs_fornecedor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotoproduto`
--

CREATE TABLE `fotoproduto` (
  `id_fotoproduto` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `caminho_fotoproduto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemcompra`
--

CREATE TABLE `itemcompra` (
  `id_itemcompra` int(11) NOT NULL,
  `id_produto_itemcompra` int(11) NOT NULL,
  `id_compra_itemcompra` int(11) NOT NULL,
  `valor_itemcompra` decimal(10,2) DEFAULT NULL,
  `qtde_itemcompra` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemvenda`
--

CREATE TABLE `itemvenda` (
  `id_itemvenda` int(11) NOT NULL,
  `id_venda_itemvenda` int(11) NOT NULL,
  `id_produto_itemvenda` int(11) NOT NULL,
  `valor_itemvenda` decimal(10,2) NOT NULL,
  `qtde_itemvenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(50) NOT NULL,
  `descricao_produto` varchar(255) DEFAULT NULL,
  `peso_produto` decimal(10,2) NOT NULL,
  `tamanho_produto` varchar(2) NOT NULL,
  `qtde_produto` int(11) NOT NULL,
  `preco_produto` decimal(10,2) NOT NULL,
  `status_produto` varchar(7) NOT NULL,
  `obs_produto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtocategoria`
--

CREATE TABLE `produtocategoria` (
  `id_produtocategoria` int(11) NOT NULL,
  `id_categoria_produtocategoria` int(11) NOT NULL,
  `id_produto_produtocategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `pessoa_usuario` varchar(50) DEFAULT NULL,
  `nome_usuario` varchar(50) NOT NULL,
  `senha_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id_venda` int(11) NOT NULL,
  `id_cliente_venda` int(11) NOT NULL,
  `valor_venda` decimal(10,2) NOT NULL,
  `data_venda` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_venda` char(1) NOT NULL,
  `obs_venda` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`),
  ADD UNIQUE KEY `nome_categoria` (`nome_categoria`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `cpf_cliente` (`cpf_cliente`),
  ADD UNIQUE KEY `email_cliente` (`email_cliente`),
  ADD UNIQUE KEY `telFixo_cliente` (`telFixo_cliente`),
  ADD UNIQUE KEY `telCel_cliente` (`telCel_cliente`);

--
-- Índices para tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `FK_id_fornecedor` (`id_fornecedor`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id_fornecedor`),
  ADD UNIQUE KEY `nome_fornecedor` (`nome_fornecedor`),
  ADD UNIQUE KEY `cnpj_fornecedor` (`cnpj_fornecedor`),
  ADD UNIQUE KEY `telCel_fornecedor` (`telCel_fornecedor`);

--
-- Índices para tabela `fotoproduto`
--
ALTER TABLE `fotoproduto`
  ADD PRIMARY KEY (`id_fotoproduto`),
  ADD KEY `FK_id_fotoproduto_produto` (`id_produto`);

--
-- Índices para tabela `itemcompra`
--
ALTER TABLE `itemcompra`
  ADD PRIMARY KEY (`id_itemcompra`),
  ADD KEY `fk_id_produto_itemcompra` (`id_produto_itemcompra`);

--
-- Índices para tabela `itemvenda`
--
ALTER TABLE `itemvenda`
  ADD PRIMARY KEY (`id_itemvenda`),
  ADD KEY `FK_id_venda_itemvenda` (`id_venda_itemvenda`),
  ADD KEY `FK_id_produto_itemvenda` (`id_produto_itemvenda`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD UNIQUE KEY `nome_produto` (`nome_produto`);

--
-- Índices para tabela `produtocategoria`
--
ALTER TABLE `produtocategoria`
  ADD PRIMARY KEY (`id_produtocategoria`),
  ADD UNIQUE KEY `UQ_produtocategoria_Prod_cat` (`id_categoria_produtocategoria`,`id_produto_produtocategoria`),
  ADD KEY `FK_id_produto_produtocategoria` (`id_produto_produtocategoria`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `nome_usuario` (`nome_usuario`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id_venda`),
  ADD KEY `FK_id_cliente_venda` (`id_cliente_venda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fotoproduto`
--
ALTER TABLE `fotoproduto`
  MODIFY `id_fotoproduto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `itemcompra`
--
ALTER TABLE `itemcompra`
  MODIFY `id_itemcompra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `itemvenda`
--
ALTER TABLE `itemvenda`
  MODIFY `id_itemvenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtocategoria`
--
ALTER TABLE `produtocategoria`
  MODIFY `id_produtocategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `FK_id_fornecedor` FOREIGN KEY (`id_fornecedor`) REFERENCES `fornecedor` (`id_fornecedor`);

--
-- Limitadores para a tabela `fotoproduto`
--
ALTER TABLE `fotoproduto`
  ADD CONSTRAINT `FK_id_fotoproduto_produto` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id_produto`);

--
-- Limitadores para a tabela `itemcompra`
--
ALTER TABLE `itemcompra`
  ADD CONSTRAINT `fk_id_produto_itemcompra` FOREIGN KEY (`id_produto_itemcompra`) REFERENCES `produto` (`id_produto`);

--
-- Limitadores para a tabela `itemvenda`
--
ALTER TABLE `itemvenda`
  ADD CONSTRAINT `FK_id_produto_itemvenda` FOREIGN KEY (`id_produto_itemvenda`) REFERENCES `produto` (`id_produto`),
  ADD CONSTRAINT `FK_id_venda_itemvenda` FOREIGN KEY (`id_venda_itemvenda`) REFERENCES `venda` (`id_venda`);

--
-- Limitadores para a tabela `produtocategoria`
--
ALTER TABLE `produtocategoria`
  ADD CONSTRAINT `FK_id_categoria_produtocategoria` FOREIGN KEY (`id_categoria_produtocategoria`) REFERENCES `categoria` (`id_categoria`),
  ADD CONSTRAINT `FK_id_produto_produtocategoria` FOREIGN KEY (`id_produto_produtocategoria`) REFERENCES `produto` (`id_produto`);

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `FK_id_cliente_venda` FOREIGN KEY (`id_cliente_venda`) REFERENCES `cliente` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
