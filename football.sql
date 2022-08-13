-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 09:45 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football`
--

-- --------------------------------------------------------

--
-- Table structure for table `current`
--

CREATE TABLE `current` (
  `current_id` bigint(20) UNSIGNED NOT NULL,
  `current_pekan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_arr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `current`
--

INSERT INTO `current` (`current_id`, `current_pekan`, `current_arr`, `created_at`, `updated_at`) VALUES
(845, '1', '3,6,4,11,2,13,1,8,5,9,12,10', '2022-08-13 12:41:09', '2022-08-13 12:41:24'),
(846, '2', '14,6,4,13,12,2,9,8,1,11,10,5', '2022-08-13 12:41:09', '2022-08-13 12:41:24'),
(847, '3', '8,6,5,3,1,2,14,11,10,13,9,4', '2022-08-13 12:41:10', '2022-08-13 12:41:24'),
(848, '4', '5,6,8,3,12,14,4,2,1,13,10,11', '2022-08-13 12:41:10', '2022-08-13 12:41:24'),
(849, '5', '11,6,12,3,5,2,4,14,9,13,10,1', '2022-08-13 12:41:10', '2022-08-13 12:41:24'),
(850, '6', '14,3,8,11,4,6,10,2,12,1', '2022-08-13 12:41:10', '2022-08-13 12:41:24'),
(851, '7', '4,3,8,13,2,6,5,11,1,14,10,9', '2022-08-13 12:41:10', '2022-08-13 12:41:24'),
(852, '8', '8,2,12,6,5,13,11,3,4,1,10,14', '2022-08-13 12:41:10', '2022-08-13 12:41:24'),
(853, '9', '9,6,2,3,13,11,8,14,5,1,10,4', '2022-08-13 12:41:10', '2022-08-13 12:41:24'),
(854, '10', '10,6,9,3,12,11,5,14,4,8', '2022-08-13 12:41:10', '2022-08-13 12:41:24'),
(855, '11', '9,11,12,13,1,6,10,3,5,8', '2022-08-13 12:41:10', '2022-08-13 12:41:24'),
(856, '12', '13,6,10,8,2,11,1,3,5,4', '2022-08-13 12:41:10', '2022-08-13 12:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `histori`
--

CREATE TABLE `histori` (
  `histori_id` bigint(20) UNSIGNED NOT NULL,
  `histori_jadwal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `histori_team` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `histori_pekan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `histori_pertandingan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `histori_musim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `histori_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histori`
--

INSERT INTO `histori` (`histori_id`, `histori_jadwal`, `histori_team`, `histori_pekan`, `histori_pertandingan`, `histori_musim`, `histori_status`, `created_at`, `updated_at`) VALUES
(1, '3684', '1,6', '1', '2022-08-21', '1', 1, '2022-08-13 12:27:58', '2022-08-13 12:27:58'),
(2, '3662', '5,8', '1', '2022-08-21', '1', 1, '2022-08-13 12:28:40', '2022-08-13 12:28:40'),
(3, '3652', '4,10', '1', '2022-08-21', '1', 1, '2022-08-13 12:28:52', '2022-08-13 12:28:52'),
(4, '3651', '11,10', '1', '2022-08-21', '1', 1, '2022-08-13 12:29:01', '2022-08-13 12:29:01'),
(5, '3717', '2,12', '1', '2022-08-21', '1', 1, '2022-08-13 12:29:13', '2022-08-13 12:29:13'),
(6, '3704', '13,14', '1', '2022-08-21', '1', 1, '2022-08-13 12:29:22', '2022-08-13 12:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `jadwal_id` bigint(20) UNSIGNED NOT NULL,
  `jadwal_team` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_pekan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_pertandingan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_musim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_status` int(11) NOT NULL DEFAULT 0,
  `jadwal_delete` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`jadwal_id`, `jadwal_team`, `jadwal_pekan`, `jadwal_pertandingan`, `jadwal_musim`, `jadwal_status`, `jadwal_delete`, `created_at`, `updated_at`) VALUES
(3727, '10,6', '10', '2022-10-24', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3728, '4,6', '6', '2022-09-26', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3729, '8,6', '3', '2022-09-05', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3730, '1,6', '11', '2022-10-31', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:11'),
(3731, '12,6', '8', '2022-10-10', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3732, '3,6', '1', '2022-08-22', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:09'),
(3733, '2,6', '7', '2022-10-03', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3734, '14,6', '2', '2022-08-29', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:09'),
(3735, '13,6', '12', '2022-11-07', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3736, '5,6', '4', '2022-09-12', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3737, '9,6', '9', '2022-10-17', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3738, '11,6', '5', '2022-09-19', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3739, '5,3', '3', '2022-09-05', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3740, '12,3', '5', '2022-09-19', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3741, '8,3', '4', '2022-09-12', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3742, '14,3', '6', '2022-09-26', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3743, '4,3', '7', '2022-10-03', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3744, '13,3', '1', '2022-08-22', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:24'),
(3745, '2,3', '9', '2022-10-17', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3746, '9,3', '10', '2022-10-24', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3747, '10,3', '11', '2022-10-31', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:11'),
(3748, '11,3', '8', '2022-10-10', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3749, '1,3', '12', '2022-11-07', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:11'),
(3750, '13,11', '9', '2022-10-17', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3751, '9,11', '11', '2022-10-31', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3752, '14,11', '3', '2022-09-05', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3753, '4,11', '1', '2022-08-22', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3754, '8,11', '6', '2022-09-26', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3755, '2,11', '12', '2022-11-07', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3756, '5,11', '7', '2022-10-03', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3757, '12,11', '10', '2022-10-24', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3758, '10,11', '4', '2022-09-12', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:11'),
(3759, '1,11', '2', '2022-08-29', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:11'),
(3760, '2,13', '1', '2022-08-22', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3761, '9,13', '5', '2022-09-19', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:12'),
(3762, '4,13', '2', '2022-08-29', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3763, '12,13', '11', '2022-10-31', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3764, '8,13', '7', '2022-10-03', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3765, '1,13', '4', '2022-09-12', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:11'),
(3766, '14,13', '10', '2022-10-24', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:24'),
(3767, '10,13', '3', '2022-09-05', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:15'),
(3768, '5,13', '8', '2022-10-10', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3769, '1,2', '3', '2022-09-05', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3770, '10,2', '6', '2022-09-26', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:11'),
(3771, '9,2', '10', '2022-10-24', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:24'),
(3772, '12,2', '2', '2022-08-29', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3773, '8,2', '8', '2022-10-10', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3774, '14,2', '11', '2022-10-31', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:24'),
(3775, '5,2', '5', '2022-09-19', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:11'),
(3776, '4,2', '4', '2022-09-12', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:11'),
(3777, '9,14', '11', '2022-10-31', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:24'),
(3778, '12,14', '4', '2022-09-12', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:11'),
(3779, '10,14', '8', '2022-10-10', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:16'),
(3780, '4,14', '5', '2022-09-19', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:11'),
(3781, '8,14', '9', '2022-10-17', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3782, '5,14', '10', '2022-10-24', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:11'),
(3783, '1,14', '7', '2022-10-03', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:11'),
(3784, '10,8', '12', '2022-11-07', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3785, '9,8', '2', '2022-08-29', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:10'),
(3786, '1,8', '1', '2022-08-22', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:11'),
(3787, '5,8', '11', '2022-10-31', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:12'),
(3788, '4,8', '10', '2022-10-24', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:12'),
(3789, '12,8', '12', '2022-11-07', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:24'),
(3790, '12,1', '6', '2022-09-26', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:12'),
(3791, '9,1', '12', '2022-11-07', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:24'),
(3792, '4,1', '8', '2022-10-10', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:13'),
(3793, '10,1', '5', '2022-09-19', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:16'),
(3794, '5,1', '9', '2022-10-17', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:12'),
(3795, '9,4', '3', '2022-09-05', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:16'),
(3796, '12,4', '2', '2022-08-29', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:24'),
(3797, '5,4', '12', '2022-11-07', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:12'),
(3798, '10,4', '9', '2022-10-17', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:16'),
(3799, '12,9', '3', '2022-09-05', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:25'),
(3800, '5,9', '1', '2022-08-22', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:12'),
(3801, '10,9', '7', '2022-10-03', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:17'),
(3802, '10,5', '2', '2022-08-29', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:13'),
(3803, '12,5', '4', '2022-09-12', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:25'),
(3804, '12,10', '1', '2022-08-22', '1', 0, 0, '2022-08-13 12:41:09', '2022-08-13 12:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_07_20_113114_user', 1),
(3, '2022_07_21_145841_team', 1),
(4, '2022_07_22_184510_musim', 1),
(5, '2022_07_23_173309_jadwal', 1),
(6, '2022_07_27_114450_current', 1),
(7, '2022_07_31_231642_skor', 2),
(8, '2022_08_13_191848_histori', 3);

-- --------------------------------------------------------

--
-- Table structure for table `musim`
--

CREATE TABLE `musim` (
  `musim_id` bigint(20) UNSIGNED NOT NULL,
  `musim_tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `musim_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `musim_delete` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `musim`
--

INSERT INTO `musim` (`musim_id`, `musim_tahun`, `musim_status`, `musim_delete`, `created_at`, `updated_at`) VALUES
(1, '2020-2021', '1', 0, '2022-07-24 02:03:45', '2022-08-13 12:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skor`
--

CREATE TABLE `skor` (
  `skor_id` bigint(20) UNSIGNED NOT NULL,
  `skor_jadwal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skor_musim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skor_team` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skor_nilai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skor_bobol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skor_poin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skor_delete` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skor`
--

INSERT INTO `skor` (`skor_id`, `skor_jadwal`, `skor_musim`, `skor_team`, `skor_nilai`, `skor_bobol`, `skor_poin`, `skor_delete`, `created_at`, `updated_at`) VALUES
(103, '3684', '1', '1', '1', '1', '1', 1, '2022-08-13 12:27:58', '2022-08-13 12:27:58'),
(104, '3684', '1', '6', '1', '1', '1', 1, '2022-08-13 12:27:58', '2022-08-13 12:27:58'),
(105, '3662', '1', '5', '1', '2', '0', 1, '2022-08-13 12:28:40', '2022-08-13 12:28:40'),
(106, '3662', '1', '8', '2', '1', '3', 1, '2022-08-13 12:28:40', '2022-08-13 12:28:40'),
(107, '3652', '1', '4', '2', '1', '3', 1, '2022-08-13 12:28:52', '2022-08-13 12:28:52'),
(108, '3652', '1', '10', '1', '2', '0', 1, '2022-08-13 12:28:52', '2022-08-13 12:28:52'),
(109, '3651', '1', '10', '0', '0', '1', 1, '2022-08-13 12:29:01', '2022-08-13 12:29:01'),
(110, '3651', '1', '11', '0', '0', '1', 1, '2022-08-13 12:29:01', '2022-08-13 12:29:01'),
(111, '3717', '1', '2', '1', '2', '0', 1, '2022-08-13 12:29:13', '2022-08-13 12:29:13'),
(112, '3717', '1', '12', '2', '1', '3', 1, '2022-08-13 12:29:13', '2022-08-13 12:29:13'),
(113, '3704', '1', '13', '3', '1', '3', 1, '2022-08-13 12:29:22', '2022-08-13 12:29:22'),
(114, '3704', '1', '14', '1', '3', '0', 1, '2022-08-13 12:29:22', '2022-08-13 12:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `team_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_penanggung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_delete` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `team_penanggung`, `team_logo`, `team_delete`, `created_at`, `updated_at`) VALUES
(1, 'AMBASSADOR FC', 'anonimus', '7811cc6543f9b765f06cacbf10f877ac.png', 0, '2022-07-24 02:04:49', '2022-07-24 02:04:49'),
(2, 'BINTANG MUDA JOMBANG', 'anonimus', '76bca69e7867f79351ad010d12748891.png', 0, '2022-07-24 02:05:03', '2022-07-24 02:05:03'),
(3, 'GEN B', 'anonimus', '822bf1bc10ec3509e76def081ee9b987.jpeg', 0, '2022-07-24 02:05:16', '2022-07-24 02:05:16'),
(4, 'KKO ESPERODI', 'anonimus', 'd606e94730b0dca603b02409ec995c41.jpeg', 0, '2022-07-24 02:05:31', '2022-07-24 02:05:31'),
(5, 'PASOPATI FA', 'anonimus', '7724b2d77e44ec2f2efbdce663c2d0b6.png', 0, '2022-07-24 02:05:45', '2022-07-24 02:05:45'),
(6, 'PENDOWO FC', 'anonimus', '83cdb1558e2c3bdb0ca9dd5b082d41d9.png', 0, '2022-07-24 02:06:03', '2022-08-01 09:00:40'),
(8, 'PERSIK KEDIRI', 'Anonimus', '4db56fe83ef38b3ab9488707395d7096.jpeg', 0, '2022-07-31 04:52:53', '2022-07-31 04:52:53'),
(9, 'PFA SURAKARTA', 'Anonimus', '5c0ee36f6a745f22af3ecd95108065c7.png', 0, '2022-07-31 04:53:10', '2022-07-31 04:53:10'),
(10, 'PS AL SURABAYA', 'Anonimus', 'f1a50b9da7511e96f66c9fc4f60a426e.jpeg', 0, '2022-07-31 04:53:37', '2022-07-31 04:53:37'),
(11, 'PSAD BRAWIJAYA', 'Anonimus', '5e7e0d3dbb786006509863e01bb080a6.jpeg', 0, '2022-07-31 04:54:03', '2022-07-31 04:54:03'),
(12, 'RICKY NELSON ACADEMY', 'Anonimus', '998f8a486d6a4f636aa25d71007bedf2.jpeg', 0, '2022-07-31 04:54:40', '2022-07-31 04:54:40'),
(13, 'SRA INDONESIA', 'Anonimus', 'c49696cba83d59f6fe44a3238d4681f0.png', 0, '2022-07-31 04:55:04', '2022-07-31 04:55:04'),
(14, 'TULUNGAGUNG PUTRA', 'Anonimus', '188f54ae0166e08a68aa11b0e8f593bc.jpeg', 0, '2022-07-31 04:55:24', '2022-08-07 09:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_level` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_delete` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`, `user_delete`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super@admin.com', '$2y$10$E4ayBPji6FsN.pb2JbJ7rut8Ptr68W/qkfCnCvU./HlvsQj3tixl2', '1', 0, '2022-07-24 02:00:59', '2022-08-01 09:33:18'),
(4, 'Admin', 'admin@admin.com', '$2y$10$6eQm9ZPWAclExfLN1WLeu.B/4q12GVaf5n/UXj4pHvfh74kUgDmr.', '2', 0, '2022-08-01 09:33:30', '2022-08-01 09:33:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `current`
--
ALTER TABLE `current`
  ADD PRIMARY KEY (`current_id`);

--
-- Indexes for table `histori`
--
ALTER TABLE `histori`
  ADD PRIMARY KEY (`histori_id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `musim`
--
ALTER TABLE `musim`
  ADD PRIMARY KEY (`musim_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `skor`
--
ALTER TABLE `skor`
  ADD PRIMARY KEY (`skor_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_user_email_unique` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `current`
--
ALTER TABLE `current`
  MODIFY `current_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=857;

--
-- AUTO_INCREMENT for table `histori`
--
ALTER TABLE `histori`
  MODIFY `histori_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `jadwal_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3805;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `musim`
--
ALTER TABLE `musim`
  MODIFY `musim_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skor`
--
ALTER TABLE `skor`
  MODIFY `skor_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
