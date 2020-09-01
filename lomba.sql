-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 01:20 PM
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
  `leader_name` varchar(32) NOT NULL,
  `actual_branch` varchar(32) NOT NULL,
  `plan_id` varchar(16) NOT NULL,
  `ppm_id` int(11) NOT NULL,
  `id_update` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gd825a-2`
--

CREATE TABLE `gd825a-2` (
  `id_update` varchar(64) NOT NULL,
  `engine_low_speed` varchar(64) DEFAULT NULL,
  `engine_high_speed` varchar(64) DEFAULT NULL,
  `tc_stall_press` varchar(64) DEFAULT NULL,
  `engine_low_press` varchar(64) DEFAULT NULL,
  `engine_low_press2` varchar(64) DEFAULT NULL,
  `engine_rated_press` varchar(64) DEFAULT NULL,
  `tc_stall_temp` varchar(64) DEFAULT NULL,
  `operating_effect` varchar(64) DEFAULT NULL,
  `pedal_height` varchar(64) DEFAULT NULL,
  `pedal_height_operated` varchar(64) DEFAULT NULL,
  `pedal_travel` varchar(64) DEFAULT NULL,
  `pilot_oil` varchar(64) DEFAULT NULL,
  `lubricating_oil` varchar(64) DEFAULT NULL,
  `main_oil` varchar(64) DEFAULT NULL,
  `clutch_f` varchar(64) DEFAULT NULL,
  `clutch_r` varchar(64) DEFAULT NULL,
  `clutch_high` varchar(64) DEFAULT NULL,
  `clutch_low` varchar(64) DEFAULT NULL,
  `clutch_1` varchar(64) DEFAULT NULL,
  `clutch_2` varchar(64) DEFAULT NULL,
  `clutch_3` varchar(64) DEFAULT NULL,
  `clutch_4` varchar(64) DEFAULT NULL,
  `steering_wheel` varchar(64) DEFAULT NULL,
  `operating_effort_wheel` varchar(64) DEFAULT NULL,
  `priority_relief` varchar(64) DEFAULT NULL,
  `operating_effort_brake` varchar(64) DEFAULT NULL,
  `engine_full_throtte` varchar(64) DEFAULT NULL,
  `raise_speed` varchar(64) DEFAULT NULL,
  `lower_speed` varchar(64) DEFAULT NULL,
  `left_out` varchar(64) DEFAULT NULL,
  `right_out` varchar(64) DEFAULT NULL,
  `left_compared` varchar(64) DEFAULT NULL,
  `right_compared` varchar(64) DEFAULT NULL,
  `raise_ripper` varchar(64) DEFAULT NULL,
  `lower_ripper` varchar(64) DEFAULT NULL,
  `rotation_down` varchar(64) DEFAULT NULL,
  `rotation_up` varchar(64) DEFAULT NULL,
  `drift_ext_blade` varchar(64) DEFAULT NULL,
  `drift_rtn_blade` varchar(64) DEFAULT NULL,
  `drift_ext_ripper` varchar(64) DEFAULT NULL,
  `drift_rtn_ripper` varchar(64) DEFAULT NULL,
  `hydraulic_priority` varchar(64) DEFAULT NULL,
  `hydraulic_valve_rh` varchar(64) DEFAULT NULL,
  `hydraulic_valve_lh` varchar(64) DEFAULT NULL,
  `diff_drain` varchar(64) DEFAULT NULL,
  `tandem_drain_lh` varchar(64) DEFAULT NULL,
  `tandem_drain_rh` varchar(64) DEFAULT NULL,
  `engine_low_speed_remark` varchar(64) DEFAULT NULL,
  `engine_high_speed_remark` varchar(64) DEFAULT NULL,
  `tc_stall_press_remark` varchar(64) DEFAULT NULL,
  `engine_low_press_remark` varchar(64) DEFAULT NULL,
  `engine_low_press2_remark` varchar(64) DEFAULT NULL,
  `engine_rated_press_remark` varchar(64) DEFAULT NULL,
  `tc_stall_temp_remark` varchar(64) DEFAULT NULL,
  `operating_effect_remark` varchar(64) DEFAULT NULL,
  `pedal_height_remark` varchar(64) DEFAULT NULL,
  `pedal_height_operated_remark` varchar(64) DEFAULT NULL,
  `pedal_travel_remark` varchar(64) DEFAULT NULL,
  `pilot_oil_remark` varchar(64) DEFAULT NULL,
  `lubricating_oil_remark` varchar(64) DEFAULT NULL,
  `main_oil_remark` varchar(64) DEFAULT NULL,
  `clutch_f_remark` varchar(64) DEFAULT NULL,
  `clutch_r_remark` varchar(64) DEFAULT NULL,
  `clutch_high_remark` varchar(64) DEFAULT NULL,
  `clutch_low_remark` varchar(64) DEFAULT NULL,
  `clutch_1_remark` varchar(64) DEFAULT NULL,
  `clutch_2_remark` varchar(64) DEFAULT NULL,
  `clutch_3_remark` varchar(64) DEFAULT NULL,
  `clutch_4_remark` varchar(64) DEFAULT NULL,
  `steering_wheel_remark` varchar(64) DEFAULT NULL,
  `operating_effort_wheel_remark` varchar(64) DEFAULT NULL,
  `priority_relief_remark` varchar(64) DEFAULT NULL,
  `operating_effort_brake_remark` varchar(64) DEFAULT NULL,
  `engine_full_throtte_remark` varchar(64) DEFAULT NULL,
  `raise_speed_remark` varchar(64) DEFAULT NULL,
  `lower_speed_remark` varchar(64) DEFAULT NULL,
  `left_out_remark` varchar(64) DEFAULT NULL,
  `right_out_remark` varchar(64) DEFAULT NULL,
  `left_compared_remark` varchar(64) DEFAULT NULL,
  `right_compared_remark` varchar(64) DEFAULT NULL,
  `raise_ripper_remark` varchar(64) DEFAULT NULL,
  `lower_ripper_remark` varchar(64) DEFAULT NULL,
  `rotation_down_remark` varchar(64) DEFAULT NULL,
  `rotation_up_remark` varchar(64) DEFAULT NULL,
  `drift_ext_blade_remark` varchar(64) DEFAULT NULL,
  `drift_rtn_blade_remark` varchar(64) DEFAULT NULL,
  `drift_ext_ripper_remark` varchar(64) DEFAULT NULL,
  `drift_rtn_ripper_remark` varchar(64) DEFAULT NULL,
  `hydraulic_priority_remark` varchar(64) DEFAULT NULL,
  `hydraulic_valve_rh_remark` varchar(64) DEFAULT NULL,
  `hydraulic_valve_lh_remark` varchar(64) DEFAULT NULL,
  `diff_drain_remark` varchar(64) DEFAULT NULL,
  `tandem_drain_lh_remark` varchar(64) DEFAULT NULL,
  `tandem_drain_rh_remark` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hd785-5`
--

CREATE TABLE `hd785-5` (
  `id_update` varchar(64) NOT NULL,
  `engine_low` varchar(64) DEFAULT NULL,
  `engine_hi` varchar(64) DEFAULT NULL,
  `engine_power` varchar(64) DEFAULT NULL,
  `engine_eco` varchar(64) DEFAULT NULL,
  `engine_power_high` varchar(64) DEFAULT NULL,
  `engine_power_eco` varchar(64) DEFAULT NULL,
  `blow_power` varchar(64) DEFAULT NULL,
  `lub_power` varchar(64) DEFAULT NULL,
  `lub_low` varchar(64) DEFAULT NULL,
  `boost_stall_rh` varchar(64) DEFAULT NULL,
  `boost_stall_lh` varchar(64) DEFAULT NULL,
  `exhaust_ambient` varchar(64) DEFAULT NULL,
  `exhaust_stall_rh` varchar(64) DEFAULT NULL,
  `exhaust_stall_lh` varchar(64) DEFAULT NULL,
  `inlet_high` varchar(64) DEFAULT NULL,
  `inlet_low` varchar(64) DEFAULT NULL,
  `outlet_high` varchar(64) DEFAULT NULL,
  `outlet_low` varchar(64) DEFAULT NULL,
  `lock_high` varchar(64) DEFAULT NULL,
  `lock_low` varchar(64) DEFAULT NULL,
  `lubricating_full` varchar(64) DEFAULT NULL,
  `main_relieve_low` varchar(64) DEFAULT NULL,
  `main_relieve_power` varchar(64) DEFAULT NULL,
  `steering_time_rl` varchar(64) DEFAULT NULL,
  `steering_time_lr` varchar(64) DEFAULT NULL,
  `steering_relieve_low` varchar(64) DEFAULT NULL,
  `steering_relieve_power` varchar(64) DEFAULT NULL,
  `air_gov_cutin` varchar(64) DEFAULT NULL,
  `air_gov_cutout` varchar(64) DEFAULT NULL,
  `service_brake1` varchar(64) DEFAULT NULL,
  `service_brake2` varchar(64) DEFAULT NULL,
  `retarder_brake1` varchar(64) DEFAULT NULL,
  `retarder_brake2` varchar(64) DEFAULT NULL,
  `parking_brake1` varchar(64) DEFAULT NULL,
  `parking_brake2` varchar(64) DEFAULT NULL,
  `emergency_brake1` varchar(64) DEFAULT NULL,
  `emergency_brake2` varchar(64) DEFAULT NULL,
  `front_brake_left` varchar(64) DEFAULT NULL,
  `front_brake_right` varchar(64) DEFAULT NULL,
  `rear_brake_left` varchar(64) DEFAULT NULL,
  `rear_brake_right` varchar(64) DEFAULT NULL,
  `oil_temp` varchar(64) DEFAULT NULL,
  `hoist_low` varchar(64) DEFAULT NULL,
  `hoist_power` varchar(64) DEFAULT NULL,
  `raising_speed` varchar(64) DEFAULT NULL,
  `hydrolic_drift` varchar(64) DEFAULT NULL,
  `left_front_suspension` varchar(64) DEFAULT NULL,
  `left_front_oil` varchar(64) DEFAULT NULL,
  `right_front_suspension` varchar(64) DEFAULT NULL,
  `right_front_oil` varchar(64) DEFAULT NULL,
  `left_rear_suspension` varchar(64) DEFAULT NULL,
  `left_rear_oil` varchar(64) DEFAULT NULL,
  `right_rear_suspension` varchar(64) DEFAULT NULL,
  `right_rear_oil` varchar(64) DEFAULT NULL,
  `diff_drain` varchar(64) DEFAULT NULL,
  `final_drive_lh` varchar(64) DEFAULT NULL,
  `final_drive_rh` varchar(64) DEFAULT NULL,
  `engine_low_remark` varchar(64) DEFAULT NULL,
  `engine_hi_remark` varchar(64) DEFAULT NULL,
  `engine_power_remark` varchar(64) DEFAULT NULL,
  `engine_eco_remark` varchar(64) DEFAULT NULL,
  `engine_power_high_remark` varchar(64) DEFAULT NULL,
  `engine_power_eco_remark` varchar(64) DEFAULT NULL,
  `blow_power_remark` varchar(64) DEFAULT NULL,
  `lub_power_remark` varchar(64) DEFAULT NULL,
  `lub_low_remark` varchar(64) DEFAULT NULL,
  `boost_stall_rh_remark` varchar(64) DEFAULT NULL,
  `boost_stall_lh_remark` varchar(64) DEFAULT NULL,
  `exhaust_ambient_remark` varchar(64) DEFAULT NULL,
  `exhaust_stall_rh_remark` varchar(64) DEFAULT NULL,
  `exhaust_stall_lh_remark` varchar(64) DEFAULT NULL,
  `inlet_high_remark` varchar(64) DEFAULT NULL,
  `inlet_low_remark` varchar(64) DEFAULT NULL,
  `outlet_high_remark` varchar(64) DEFAULT NULL,
  `outlet_low_remark` varchar(64) DEFAULT NULL,
  `lock_high_remark` varchar(64) DEFAULT NULL,
  `lock_low_remark` varchar(64) DEFAULT NULL,
  `lubricating_full_remark` varchar(64) DEFAULT NULL,
  `main_relieve_low_remark` varchar(64) DEFAULT NULL,
  `main_relieve_power_remark` varchar(64) DEFAULT NULL,
  `steering_time_rl_remark` varchar(64) DEFAULT NULL,
  `steering_time_lr_remark` varchar(64) DEFAULT NULL,
  `steering_relieve_low_remark` varchar(64) DEFAULT NULL,
  `steering_relieve_power_remark` varchar(64) DEFAULT NULL,
  `air_gov_cutin_remark` varchar(64) DEFAULT NULL,
  `air_gov_cutout_remark` varchar(64) DEFAULT NULL,
  `service_brake1_remark` varchar(64) DEFAULT NULL,
  `service_brake2_remark` varchar(64) DEFAULT NULL,
  `retarder_brake1_remark` varchar(64) DEFAULT NULL,
  `retarder_brake2_remark` varchar(64) DEFAULT NULL,
  `parking_brake1_remark` varchar(64) DEFAULT NULL,
  `parking_brake2_remark` varchar(64) DEFAULT NULL,
  `emergency_brake1_remark` varchar(64) DEFAULT NULL,
  `emergency_brake2_remark` varchar(64) DEFAULT NULL,
  `front_brake_left_remark` varchar(64) DEFAULT NULL,
  `front_brake_right_remark` varchar(64) DEFAULT NULL,
  `rear_brake_left_remark` varchar(64) DEFAULT NULL,
  `rear_brake_right_remark` varchar(64) DEFAULT NULL,
  `oil_temp_remark` varchar(64) DEFAULT NULL,
  `hoist_low_remark` varchar(64) DEFAULT NULL,
  `hoist_power_remark` varchar(64) DEFAULT NULL,
  `raising_speed_remark` varchar(64) DEFAULT NULL,
  `hydrolic_drift_remark` varchar(64) DEFAULT NULL,
  `left_front_suspension_remark` varchar(64) DEFAULT NULL,
  `left_front_oil_remark` varchar(64) DEFAULT NULL,
  `right_front_suspension_remark` varchar(64) DEFAULT NULL,
  `right_front_oil_remark` varchar(64) DEFAULT NULL,
  `left_rear_suspension_remark` varchar(64) DEFAULT NULL,
  `left_rear_oil_remark` varchar(64) DEFAULT NULL,
  `right_rear_suspension_remark` varchar(64) DEFAULT NULL,
  `right_rear_oil_remark` varchar(64) DEFAULT NULL,
  `diff_drain_remark` varchar(64) DEFAULT NULL,
  `final_drive_lh_remark` varchar(64) DEFAULT NULL,
  `final_drive_rh_remark` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hd785-7`
--

CREATE TABLE `hd785-7` (
  `id_update` varchar(64) NOT NULL,
  `engine_low_idle_low` varchar(64) DEFAULT NULL,
  `engine_low_idle_hi` varchar(64) DEFAULT NULL,
  `engine_high_idle_power` varchar(64) DEFAULT NULL,
  `engine_high_idle_eco` varchar(64) DEFAULT NULL,
  `engine_high_idle_rev` varchar(64) DEFAULT NULL,
  `engine_high_idle_rev_power` varchar(64) DEFAULT NULL,
  `engine_torque_a` varchar(64) DEFAULT NULL,
  `engine_torque_b` varchar(64) DEFAULT NULL,
  `engine_torque_c` varchar(64) DEFAULT NULL,
  `engine_torque_d` varchar(64) DEFAULT NULL,
  `blow_power` varchar(64) DEFAULT NULL,
  `lub_oil_rated` varchar(64) DEFAULT NULL,
  `lub_oil_low` varchar(64) DEFAULT NULL,
  `boost_press_rh` varchar(64) DEFAULT NULL,
  `boost_press_lh` varchar(64) DEFAULT NULL,
  `exhaust_ambient` varchar(64) DEFAULT NULL,
  `exhaust_speed_rh` varchar(64) DEFAULT NULL,
  `exhaust_speed_lh` varchar(64) DEFAULT NULL,
  `oil_inlet` varchar(64) DEFAULT NULL,
  `oil_outlet_on` varchar(64) DEFAULT NULL,
  `oil_outlet_off` varchar(64) DEFAULT NULL,
  `oil_lockup` varchar(64) DEFAULT NULL,
  `oil_main_f1` varchar(64) DEFAULT NULL,
  `oil_main_f4` varchar(64) DEFAULT NULL,
  `oil_transmission` varchar(64) DEFAULT NULL,
  `turn_time_rl` varchar(64) DEFAULT NULL,
  `turn_time_lr` varchar(64) DEFAULT NULL,
  `steering_low` varchar(64) DEFAULT NULL,
  `steering_rated` varchar(64) DEFAULT NULL,
  `brake_oil_service` varchar(64) DEFAULT NULL,
  `brake_oil_retarder` varchar(64) DEFAULT NULL,
  `charge_cutin` varchar(64) DEFAULT NULL,
  `charge_cutout` varchar(64) DEFAULT NULL,
  `service` varchar(64) DEFAULT NULL,
  `retarder` varchar(64) DEFAULT NULL,
  `parking` varchar(64) DEFAULT NULL,
  `emergency` varchar(64) DEFAULT NULL,
  `oil_temp` varchar(64) DEFAULT NULL,
  `hoist_relief_rated` varchar(64) DEFAULT NULL,
  `hoist_relief_low` varchar(64) DEFAULT NULL,
  `dump_epc_high` varchar(64) DEFAULT NULL,
  `dump_epc_low` varchar(64) DEFAULT NULL,
  `dump_raising_speed` varchar(64) DEFAULT NULL,
  `dump_lowering_speed` varchar(64) DEFAULT NULL,
  `hyd_drift` varchar(64) DEFAULT NULL,
  `left_front_susp` varchar(64) DEFAULT NULL,
  `left_front_oil` varchar(64) DEFAULT NULL,
  `right_front_susp` varchar(64) DEFAULT NULL,
  `right_front_oil` varchar(64) DEFAULT NULL,
  `left_rear_susp` varchar(64) DEFAULT NULL,
  `left_rear_oil` varchar(64) DEFAULT NULL,
  `right_rear_susp` varchar(64) DEFAULT NULL,
  `right_rear_oil` varchar(64) DEFAULT NULL,
  `diff_drain` varchar(64) DEFAULT NULL,
  `final_drive_lh` varchar(64) DEFAULT NULL,
  `final_drive_rh` varchar(64) DEFAULT NULL,
  `engine_low_idle_low_remark` varchar(64) DEFAULT NULL,
  `engine_low_idle_hi_remark` varchar(64) DEFAULT NULL,
  `engine_high_idle_power_remark` varchar(64) DEFAULT NULL,
  `engine_high_idle_eco_remark` varchar(64) DEFAULT NULL,
  `engine_high_idle_rev_remark` varchar(64) DEFAULT NULL,
  `engine_high_idle_rev_power_remark` varchar(64) DEFAULT NULL,
  `engine_torque_a_remark` varchar(64) DEFAULT NULL,
  `engine_torque_b_remark` varchar(64) DEFAULT NULL,
  `engine_torque_c_remark` varchar(64) DEFAULT NULL,
  `engine_torque_d_remark` varchar(64) DEFAULT NULL,
  `blow_power_remark` varchar(64) DEFAULT NULL,
  `lub_oil_rated_remark` varchar(64) DEFAULT NULL,
  `lub_oil_low_remark` varchar(64) DEFAULT NULL,
  `boost_press_rh_remark` varchar(64) DEFAULT NULL,
  `boost_press_lh_remark` varchar(64) DEFAULT NULL,
  `exhaust_ambient_remark` varchar(64) DEFAULT NULL,
  `exhaust_speed_rh_remark` varchar(64) DEFAULT NULL,
  `exhaust_speed_lh_remark` varchar(64) DEFAULT NULL,
  `oil_inlet_remark` varchar(64) DEFAULT NULL,
  `oil_outlet_on_remark` varchar(64) DEFAULT NULL,
  `oil_outlet_off_remark` varchar(64) DEFAULT NULL,
  `oil_lockup_remark` varchar(64) DEFAULT NULL,
  `oil_main_f1_remark` varchar(64) DEFAULT NULL,
  `oil_main_f4_remark` varchar(64) DEFAULT NULL,
  `oil_transmission_remark` varchar(64) DEFAULT NULL,
  `turn_time_rl_remark` varchar(64) DEFAULT NULL,
  `turn_time_lr_remark` varchar(64) DEFAULT NULL,
  `steering_low_remark` varchar(64) DEFAULT NULL,
  `steering_rated_remark` varchar(64) DEFAULT NULL,
  `brake_oil_service_remark` varchar(64) DEFAULT NULL,
  `brake_oil_retarder_remark` varchar(64) DEFAULT NULL,
  `charge_cutin_remark` varchar(64) DEFAULT NULL,
  `charge_cutout_remark` varchar(64) DEFAULT NULL,
  `service_remark` varchar(64) DEFAULT NULL,
  `retarder_remark` varchar(64) DEFAULT NULL,
  `parking_remark` varchar(64) DEFAULT NULL,
  `emergency_remark` varchar(64) DEFAULT NULL,
  `oil_temp_remark` varchar(64) DEFAULT NULL,
  `hoist_relief_rated_remark` varchar(64) DEFAULT NULL,
  `hoist_relief_low_remark` varchar(64) DEFAULT NULL,
  `dump_epc_high_remark` varchar(64) DEFAULT NULL,
  `dump_epc_low_remark` varchar(64) DEFAULT NULL,
  `dump_raising_speed_remark` varchar(64) DEFAULT NULL,
  `dump_lowering_speed_remark` varchar(64) DEFAULT NULL,
  `hyd_drift_remark` varchar(64) DEFAULT NULL,
  `left_front_susp_remark` varchar(64) DEFAULT NULL,
  `left_front_oil_remark` varchar(64) DEFAULT NULL,
  `right_front_susp_remark` varchar(64) DEFAULT NULL,
  `right_front_oil_remark` varchar(64) DEFAULT NULL,
  `left_rear_susp_remark` varchar(64) DEFAULT NULL,
  `left_rear_oil_remark` varchar(64) DEFAULT NULL,
  `right_rear_susp_remark` varchar(64) DEFAULT NULL,
  `right_rear_oil_remark` varchar(64) DEFAULT NULL,
  `diff_drain_remark` varchar(64) DEFAULT NULL,
  `final_drive_lh_remark` varchar(64) DEFAULT NULL,
  `final_drive_rh_remark` varchar(64) DEFAULT NULL
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
-- Table structure for table `pc2000-8`
--

CREATE TABLE `pc2000-8` (
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
  `id_other` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('5f3f894abd15a', '2020-08-29', 'PS2', 'dsadsa', 4),
('5f3fd8d59c538', '2020-08-28', 'PS3', 'Ayam Goreng', 4),
('5f3ff83849e9a', '2020-08-29', 'PS3', 'dsadsa', 13);

-- --------------------------------------------------------

--
-- Table structure for table `ppm`
--

CREATE TABLE `ppm` (
  `ppm_id` int(11) NOT NULL,
  `ppm_table` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ppm`
--

INSERT INTO `ppm` (`ppm_id`, `ppm_table`) VALUES
(1, 'pc2000-8'),
(2, 'gd825a-2'),
(3, 'hd785-5'),
(4, 'hd785-7');

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
-- Indexes for table `gd825a-2`
--
ALTER TABLE `gd825a-2`
  ADD PRIMARY KEY (`id_update`);

--
-- Indexes for table `hd785-5`
--
ALTER TABLE `hd785-5`
  ADD PRIMARY KEY (`id_update`);

--
-- Indexes for table `hd785-7`
--
ALTER TABLE `hd785-7`
  ADD PRIMARY KEY (`id_update`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

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
