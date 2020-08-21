-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 02:22 PM
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
-- Table structure for table `actual`
--

CREATE TABLE `actual` (
  `actual_id` varchar(16) NOT NULL,
  `actual_date` varchar(16) NOT NULL,
  `plan_id` varchar(16) NOT NULL,
  `ppm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `model_id` int(11) NOT NULL,
  `model_name` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`model_id`, `model_name`) VALUES
(1, 'PC2000-8'),
(2, 'GD825A-2'),
(3, 'HD785-7'),
(4, 'HD785-5');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `plan_id` varchar(16) NOT NULL,
  `plan_date` varchar(16) NOT NULL,
  `ps_type` varchar(4) NOT NULL,
  `remark` varchar(64) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`plan_id`, `plan_date`, `ps_type`, `remark`, `product_id`) VALUES
('5f3f893cb4ca9', '2020-08-22', 'PS3', 'SB Admin', 2),
('5f3f894abd15a', '2020-08-29', 'PS2', 'dsadsa', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ppm`
--

CREATE TABLE `ppm` (
  `ppm_id` int(11) NOT NULL,
  `ppm_table` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_code` varchar(16) NOT NULL,
  `model_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_code`, `model_id`) VALUES
(1, 'EX275', 1),
(2, 'EX276', 1),
(3, 'EX277', 1),
(4, 'EX278', 1),
(5, 'MG4003', 2),
(6, 'MG4004', 2),
(7, 'MG4005', 2),
(8, 'MG5301', 2),
(9, 'MG5302', 2),
(10, 'MG5303', 2),
(11, 'MG815', 2),
(12, 'MG816', 2),
(13, 'MG817', 2),
(14, 'MG818', 2),
(15, 'HD1114', 3),
(16, 'HD1115', 3),
(17, 'HD1116', 3),
(18, 'HD1117', 3),
(19, 'HD1118', 3),
(20, 'HD1119', 3),
(21, 'HD1120', 3),
(22, 'HD1121', 3),
(23, 'HD1122', 3),
(24, 'HD1123', 3),
(25, 'HD1124', 3),
(26, 'HD1125', 3),
(27, 'HD1130', 3),
(28, 'HD1131', 3),
(29, 'HD1132', 3),
(30, 'HD1133', 3),
(31, 'HD1134', 3),
(34, 'HD1135', 3),
(35, 'HD1136', 3),
(36, 'HD1137', 3),
(37, 'HD1138', 3),
(38, 'HD1139', 3),
(39, 'HD1140', 3),
(40, 'HD1141', 3),
(41, 'HD1142', 3),
(42, 'HD616', 3),
(43, 'HD617', 3),
(44, 'HD618', 3),
(45, 'HD619', 3),
(46, 'HD6601', 3),
(47, 'HD6602', 3),
(48, 'HD6603', 3),
(49, 'HD6604', 3),
(50, 'WT9012', 3),
(51, 'HD1109', 4),
(52, 'HD110', 4),
(53, 'HD1111', 4),
(54, 'HD1112', 4),
(55, 'HD1113', 4),
(56, 'HD601', 4),
(57, 'HD602', 4),
(58, 'HD603', 4),
(59, 'HD604', 4),
(60, 'HD605', 4),
(61, 'HD606', 4),
(62, 'HD607', 4),
(63, 'HD608', 4),
(64, 'HD609', 4),
(65, 'HD610', 4),
(66, 'HD611', 4),
(67, 'HD612', 4),
(68, 'HD613', 4),
(69, 'HD614', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ps2`
--

CREATE TABLE `ps2` (
  `id_ps2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ps3/4`
--

CREATE TABLE `ps3/4` (
  `id_ps3/4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actual`
--
ALTER TABLE `actual`
  ADD KEY `fk_plan_id` (`plan_id`),
  ADD KEY `fk_ppm_id` (`ppm_id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`model_id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`plan_id`),
  ADD KEY `fk_product_id` (`product_id`);

--
-- Indexes for table `ppm`
--
ALTER TABLE `ppm`
  ADD PRIMARY KEY (`ppm_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_model_id` (`model_id`);

--
-- Indexes for table `ps2`
--
ALTER TABLE `ps2`
  ADD PRIMARY KEY (`id_ps2`);

--
-- Indexes for table `ps3/4`
--
ALTER TABLE `ps3/4`
  ADD PRIMARY KEY (`id_ps3/4`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `ps2`
--
ALTER TABLE `ps2`
  MODIFY `id_ps2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ps3/4`
--
ALTER TABLE `ps3/4`
  MODIFY `id_ps3/4` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actual`
--
ALTER TABLE `actual`
  ADD CONSTRAINT `fk_plan_id` FOREIGN KEY (`plan_id`) REFERENCES `plan` (`plan_id`),
  ADD CONSTRAINT `fk_ppm_id` FOREIGN KEY (`ppm_id`) REFERENCES `ppm` (`ppm_id`);

--
-- Constraints for table `plan`
--
ALTER TABLE `plan`
  ADD CONSTRAINT `fk_product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_model_id` FOREIGN KEY (`model_id`) REFERENCES `model` (`model_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
