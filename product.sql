-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 02:00 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lomba`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` varchar(128) NOT NULL,
  `product_model` varchar(16) NOT NULL,
  `product_code` varchar(16) NOT NULL,
  `product_plandate` varchar(16) NOT NULL,
  `product_type` varchar(16) NOT NULL,
  `product_remark` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_model`, `product_code`, `product_plandate`, `product_type`, `product_remark`) VALUES
('MjAyMC0wNS0wNiAzMDoxNDoyNw', 'PC2000-8', 'EX277', '2020-06-06', 'PS2', 'Ayam Bakar'),
('MjAyMC0wNS0wNiAzMToxNDozNA', 'HD785-7', 'HD616', '2020-06-05', 'PS2', 'SB Admin'),
('MjAyMC0wNS0wNiAzNjoxMzo1OA', 'GD825A-2', 'MG4004', '2020-06-05', 'PS3', 'Ayam Goreng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
