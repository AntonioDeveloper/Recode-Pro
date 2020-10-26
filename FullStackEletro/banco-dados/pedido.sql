-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 26-Out-2020 às 17:41
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fstackeletro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_cli` int(11) NOT NULL,
  `nome_cli` varchar(100) NOT NULL,
  `end_cli` varchar(100) NOT NULL,
  `tel_cli` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `nome_prod` varchar(100) DEFAULT NULL,
  `val_unit` decimal(8,2) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `val_total` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id_cli`, `nome_cli`, `end_cli`, `tel_cli`, `id_produto`, `nome_prod`, `val_unit`, `quantidade`, `val_total`) VALUES
(1, 'Antonio José', 'Rua dos Doces, 20', 1144872590, 2, 'Lava Louças Brastemp 20 Litros', '5019.00', 2, '10038.00'),
(2, 'Paulo Ricardo', 'Rua Falsa, 171', 1195455636, 5, 'Lavadora de Roupas LG 12 Litros', '1300.00', 4, '5200.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_cli`),
  ADD KEY `id_prod_ind` (`id_produto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id_prod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
