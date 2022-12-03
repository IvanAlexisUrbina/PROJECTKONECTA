-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 06:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konecta`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_producto`
--

CREATE TABLE `tbl_producto` (
  `prod_id` int(11) NOT NULL,
  `prod_nombre` varchar(30) NOT NULL,
  `prod_referencia` varchar(30) NOT NULL,
  `prod_precio` int(11) NOT NULL,
  `prod_peso` int(11) NOT NULL,
  `prod_categoria` varchar(30) NOT NULL,
  `prod_stock` int(11) NOT NULL,
  `prod_fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_producto`
--

INSERT INTO `tbl_producto` (`prod_id`, `prod_nombre`, `prod_referencia`, `prod_precio`, `prod_peso`, `prod_categoria`, `prod_stock`, `prod_fecha`) VALUES
(2, 'AGUA', 'ABC20000', 3000, 5, 'INSUMOS', 1, '2022-08-07'),
(3, 'LECHE', 'ABDC31231', 2000, 5, 'LACTEOS', 1, '2022-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ventas`
--

CREATE TABLE `tbl_ventas` (
  `vent_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_nombre` varchar(30) NOT NULL,
  `vent_cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ventas`
--

INSERT INTO `tbl_ventas` (`vent_id`, `prod_id`, `prod_nombre`, `vent_cantidad`) VALUES
(1, 2, 'AGUA', 111),
(2, 3, 'LECHE', 10),
(3, 3, 'LECHE', 1),
(4, 3, 'LECHE', 34),
(5, 2, 'AGUA', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_producto`
--
ALTER TABLE `tbl_producto`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `tbl_ventas`
--
ALTER TABLE `tbl_ventas`
  ADD PRIMARY KEY (`vent_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_producto`
--
ALTER TABLE `tbl_producto`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
