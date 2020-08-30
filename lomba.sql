-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Agu 2020 pada 17.08
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

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
-- Struktur dari tabel `actual`
--

CREATE TABLE `actual` (
  `actual_id` varchar(16) NOT NULL,
  `actual_date` varchar(16) NOT NULL,
  `leader_name` varchar(32) NOT NULL,
  `actual_branch` varchar(32) NOT NULL,
  `plan_id` varchar(16) NOT NULL,
  `ppm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model`
--

CREATE TABLE `model` (
  `model_id` int(11) NOT NULL,
  `model_name` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `model`
--

INSERT INTO `model` (`model_id`, `model_name`) VALUES
(1, 'PC2000-8'),
(2, 'GD825A-2'),
(3, 'HD785-7'),
(4, 'HD785-5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pc2000-8_actual`
--

CREATE TABLE `pc2000-8_actual` (
  `id_update` int(11) NOT NULL,
  `engine_low_idle` varchar(64) NOT NULL,
  `engine_high_idle` varchar(64) NOT NULL,
  `engine_full_throttle_raise` varchar(64) NOT NULL,
  `engine_full_throttle_heavy` varchar(64) NOT NULL,
  `engine_control_valve_neutral` varchar(64) NOT NULL,
  `blow_horsepower` varchar(64) NOT NULL,
  `oil_run_low_idle` varchar(64) NOT NULL,
  `oil_run_high_idle` varchar(64) NOT NULL,
  `boost_horsepower` varchar(64) NOT NULL,
  `exhaust_speed_range` varchar(64) NOT NULL,
  `exhaust_ambient_temp` varchar(64) NOT NULL,
  `visual_inspection` varchar(64) NOT NULL,
  `check_of_thermo` varchar(64) NOT NULL,
  `boom_raise` varchar(64) NOT NULL,
  `boom_lower` varchar(64) NOT NULL,
  `arm_in` varchar(64) NOT NULL,
  `arm_out` varchar(64) NOT NULL,
  `bucket_curl` varchar(64) NOT NULL,
  `bucket_dump` varchar(64) NOT NULL,
  `swing_5_turns` varchar(64) NOT NULL,
  `drive_right_track` varchar(64) NOT NULL,
  `drive_left_track` varchar(64) NOT NULL,
  `whole_work` varchar(64) NOT NULL,
  `boom_cylinder` varchar(64) NOT NULL,
  `arm_cylinder` varchar(64) NOT NULL,
  `bucket_cylinder` varchar(64) NOT NULL,
  `control_pressure` varchar(64) NOT NULL,
  `jet_control_lever` varchar(64) NOT NULL,
  `jet_right_travel_lever` varchar(64) NOT NULL,
  `jet_left_travel_lever` varchar(64) NOT NULL,
  `pump_control_lever` varchar(64) NOT NULL,
  `pump_right_travel_lever` varchar(64) NOT NULL,
  `pump_left_travel_lever` varchar(64) NOT NULL,
  `p1f_boom_raise` varchar(64) NOT NULL,
  `p1f_boom_raise_heavy` varchar(64) NOT NULL,
  `p1f_arm_in` varchar(64) NOT NULL,
  `p1f_arm_out` varchar(64) NOT NULL,
  `p1f_bucket_curl` varchar(64) NOT NULL,
  `p1f_swing` varchar(64) NOT NULL,
  `p1r_boom_raise` varchar(64) NOT NULL,
  `p1r_boom_raise_heavy` varchar(64) NOT NULL,
  `p1r_arm_in` varchar(64) NOT NULL,
  `p1r_arm_out` varchar(64) NOT NULL,
  `p1r_bucket_curl` varchar(64) NOT NULL,
  `p2f_boom_raise` varchar(64) NOT NULL,
  `p2f_boom_raise_heavy` varchar(64) NOT NULL,
  `p2f_arm_in` varchar(64) NOT NULL,
  `p2f_arm_out` varchar(64) NOT NULL,
  `p2f_bucket_curl` varchar(64) NOT NULL,
  `p2r_boom_raise` varchar(64) NOT NULL,
  `p2r_boom_raise_heavy` varchar(64) NOT NULL,
  `p2r_arm_in` varchar(64) NOT NULL,
  `p2r_arm_out` varchar(64) NOT NULL,
  `p2r_bucket_curl` varchar(64) NOT NULL,
  `fan_pump_radiator` varchar(64) NOT NULL,
  `fan_pump_oil` varchar(64) NOT NULL,
  `fan_speed_radiator` varchar(64) NOT NULL,
  `fan_speed_oil` varchar(64) NOT NULL,
  `hydraulic_oil_temp` varchar(64) NOT NULL,
  `visual_check_hydraulic` varchar(64) NOT NULL,
  `drive_drain_plug` varchar(64) NOT NULL,
  `drive_oil_leak` varchar(64) NOT NULL,
  `drive_abnormal_noise` varchar(64) NOT NULL,
  `swing_drain_plug` varchar(64) NOT NULL,
  `swing_oil_leak` varchar(64) NOT NULL,
  `axial_play` varchar(64) NOT NULL,
  `id_remark` int(11) NOT NULL,
  `id_other` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pc2000-8_remark`
--

CREATE TABLE `pc2000-8_remark` (
  `id_remark` int(11) NOT NULL,
  `engine_low_idle_remark` varchar(64) NOT NULL,
  `engine_high_idle_remark` varchar(64) NOT NULL,
  `engine_full_throttle_raise_remark` varchar(64) NOT NULL,
  `engine_full_throttle_heavy_remark` varchar(64) NOT NULL,
  `engine_control_valve_neutral_remark` varchar(64) NOT NULL,
  `blow_horsepower_remark` varchar(64) NOT NULL,
  `oil_run_low_idle_remark` varchar(64) NOT NULL,
  `oil_run_high_idle_remark` varchar(64) NOT NULL,
  `boost_horsepower_remark` varchar(64) NOT NULL,
  `exhaust_speed_range_remark` varchar(64) NOT NULL,
  `exhaust_ambient_temp_remark` varchar(64) NOT NULL,
  `visual_inspection_remark` varchar(64) NOT NULL,
  `check_of_thermo_remark` varchar(64) NOT NULL,
  `boom_raise_remark` varchar(64) NOT NULL,
  `boom_lower_remark` varchar(64) NOT NULL,
  `arm_in_remark` varchar(64) NOT NULL,
  `arm_out_remark` varchar(64) NOT NULL,
  `bucket_curl_remark` varchar(64) NOT NULL,
  `bucket_dump_remark` varchar(64) NOT NULL,
  `swing_5_turns_remark` varchar(64) NOT NULL,
  `drive_right_track_remark` varchar(64) NOT NULL,
  `drive_left_track_remark` varchar(64) NOT NULL,
  `whole_work_remark` varchar(64) NOT NULL,
  `boom_cylinder_remark` varchar(64) NOT NULL,
  `arm_cylinder_remark` varchar(64) NOT NULL,
  `bucket_cylinder_remark` varchar(64) NOT NULL,
  `control_pressure_remark` varchar(64) NOT NULL,
  `jet_control_lever_remark` varchar(64) NOT NULL,
  `jet_right_travel_lever_remark` varchar(64) NOT NULL,
  `jet_left_travel_lever_remark` varchar(64) NOT NULL,
  `pump_control_lever_remark` varchar(64) NOT NULL,
  `pump_right_travel_lever_remark` varchar(64) NOT NULL,
  `pump_left_travel_lever_remark` varchar(64) NOT NULL,
  `p1f_boom_raise_remark` varchar(64) NOT NULL,
  `p1f_boom_raise_heavy_remark` varchar(64) NOT NULL,
  `p1f_arm_in_remark` varchar(64) NOT NULL,
  `p1f_arm_out_remark` varchar(64) NOT NULL,
  `p1f_bucket_curl_remark` varchar(64) NOT NULL,
  `p1f_swing_remark` varchar(64) NOT NULL,
  `p1r_boom_raise_remark` varchar(64) NOT NULL,
  `p1r_boom_raise_heavy_remark` varchar(64) NOT NULL,
  `p1r_arm_in_remark` varchar(64) NOT NULL,
  `p1r_arm_out_remark` varchar(64) NOT NULL,
  `p1r_bucket_curl_remark` varchar(64) NOT NULL,
  `p2f_boom_raise_remark` varchar(64) NOT NULL,
  `p2f_boom_raise_heavy_remark` varchar(64) NOT NULL,
  `p2f_arm_in_remark` varchar(64) NOT NULL,
  `p2f_arm_out_remark` varchar(64) NOT NULL,
  `p2f_bucket_curl_remark` varchar(64) NOT NULL,
  `p2r_boom_raise_remark` varchar(64) NOT NULL,
  `p2r_boom_raise_heavy_remark` varchar(64) NOT NULL,
  `p2r_arm_in_remark` varchar(64) NOT NULL,
  `p2r_arm_out_remark` varchar(64) NOT NULL,
  `p2r_bucket_curl_remark` varchar(64) NOT NULL,
  `fan_pump_radiator_remark` varchar(64) NOT NULL,
  `fan_pump_oil_remark` varchar(64) NOT NULL,
  `fan_speed_radiator_remark` varchar(64) NOT NULL,
  `fan_speed_oil_remark` varchar(64) NOT NULL,
  `hydraulic_oil_temp_remark` varchar(64) NOT NULL,
  `visual_check_hydraulic_remark` varchar(64) NOT NULL,
  `drive_drain_plug_remark` varchar(64) NOT NULL,
  `drive_oil_leak_remark` varchar(64) NOT NULL,
  `drive_abnormal_noise_remark` varchar(64) NOT NULL,
  `swing_drain_plug_remark` varchar(64) NOT NULL,
  `swing_oil_leak_remark` varchar(64) NOT NULL,
  `axial_play_remark` varchar(64) NOT NULL,
  `id_other_remark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `plan`
--

CREATE TABLE `plan` (
  `plan_id` varchar(16) NOT NULL,
  `plan_date` varchar(16) NOT NULL,
  `ps_type` varchar(4) NOT NULL,
  `remark` varchar(64) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `plan`
--

INSERT INTO `plan` (`plan_id`, `plan_date`, `ps_type`, `remark`, `product_id`) VALUES
('5f3f893cb4ca9', '2020-08-22', 'PS3', 'SB Admin', 2),
('5f3f894abd15a', '2020-08-29', 'PS2', 'dsadsa', 4),
('5f3fd8d59c538', '2020-08-28', 'PS3', 'Ayam Goreng', 4),
('5f3ff83849e9a', '2020-08-29', 'PS3', 'dsadsa', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppm`
--

CREATE TABLE `ppm` (
  `ppm_id` int(11) NOT NULL,
  `ppm_table` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_code` varchar(16) NOT NULL,
  `model_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
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

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `actual`
--
ALTER TABLE `actual`
  ADD KEY `fk_plan_id` (`plan_id`),
  ADD KEY `fk_ppm_id` (`ppm_id`);

--
-- Indeks untuk tabel `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`model_id`);

--
-- Indeks untuk tabel `pc2000-8_actual`
--
ALTER TABLE `pc2000-8_actual`
  ADD PRIMARY KEY (`id_update`);

--
-- Indeks untuk tabel `pc2000-8_remark`
--
ALTER TABLE `pc2000-8_remark`
  ADD PRIMARY KEY (`id_remark`);

--
-- Indeks untuk tabel `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`plan_id`),
  ADD KEY `fk_product_id` (`product_id`);

--
-- Indeks untuk tabel `ppm`
--
ALTER TABLE `ppm`
  ADD PRIMARY KEY (`ppm_id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_model_id` (`model_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pc2000-8_actual`
--
ALTER TABLE `pc2000-8_actual`
  MODIFY `id_update` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pc2000-8_remark`
--
ALTER TABLE `pc2000-8_remark`
  MODIFY `id_remark` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `actual`
--
ALTER TABLE `actual`
  ADD CONSTRAINT `fk_plan_id` FOREIGN KEY (`plan_id`) REFERENCES `plan` (`plan_id`),
  ADD CONSTRAINT `fk_ppm_id` FOREIGN KEY (`ppm_id`) REFERENCES `ppm` (`ppm_id`);

--
-- Ketidakleluasaan untuk tabel `plan`
--
ALTER TABLE `plan`
  ADD CONSTRAINT `fk_product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Ketidakleluasaan untuk tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_model_id` FOREIGN KEY (`model_id`) REFERENCES `model` (`model_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
