-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: May 11, 2026 at 11:40 AM
-- Server version: 10.6.12-MariaDB-1:10.6.12+maria~ubu2004-log
-- PHP Version: 8.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `preco` decimal(7,2) NOT NULL,
  `promocao` tinyint(1) DEFAULT 0,
  `lancamento` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `preco`, `promocao`, `lancamento`) VALUES
(1, 'Smartphone Galaxy A14', 'Smartphone com tela de 6.6 polegadas, 128GB de armazenamento e câmera tripla.', '1299.90', 0, 0),
(2, 'Notebook Lenovo IdeaPad 3', 'Notebook com processador Ryzen 5, 8GB RAM e SSD de 256GB.', '3499.00', 0, 0),
(3, 'Smart TV 50 Polegadas 4K', 'Televisão LED 4K com HDR, Wi-Fi integrado e acesso a aplicativos.', '2799.90', 0, 0),
(4, 'Fone de Ouvido Bluetooth JBL Tune 510BT', 'Fone sem fio com até 40 horas de bateria e som potente.', '199.90', 0, 0),
(5, 'Mouse Gamer RGB', 'Mouse com iluminação RGB, 6 botões e ajuste de DPI.', '89.90', 0, 0),
(6, 'Teclado Mecânico Redragon Kumara', 'Teclado mecânico com switches azuis e iluminação LED vermelha.', '249.90', 0, 0),
(7, 'Monitor 24 Polegadas Full HD', 'Monitor LED com resolução 1920x1080 e taxa de atualização de 75Hz.', '899.90', 0, 0),
(8, 'Caixa de Som Bluetooth Portátil', 'Caixa de som compacta com conexão Bluetooth e bateria recarregável.', '149.90', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
