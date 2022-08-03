-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 05:49 PM
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
(641, '1', '2,13,3,9,10,1,8,5,11,6,14,12', '2022-08-03 08:42:00', '2022-08-03 08:42:14'),
(642, '2', '6,13,2,5,12,3,9,1,14,11', '2022-08-03 08:42:00', '2022-08-03 08:42:14'),
(643, '3', '11,13,9,8,6,5,14,3,1,4,10,12', '2022-08-03 08:42:00', '2022-08-03 08:42:14'),
(644, '4', '11,5,10,13,12,1,9,6,14,8,2,3', '2022-08-03 08:42:00', '2022-08-03 08:42:14'),
(645, '5', '2,4,10,5,11,3,12,8,14,6', '2022-08-03 08:42:00', '2022-08-03 08:42:14'),
(646, '6', '3,13,10,8,6,4,1,5,11,2,12,9', '2022-08-03 08:42:00', '2022-08-03 08:42:14'),
(647, '7', '12,13,3,5,11,4,6,1,2,9', '2022-08-03 08:42:00', '2022-08-03 08:42:14'),
(648, '8', '12,5,3,4,9,13,14,1,11,8,2,6', '2022-08-03 08:42:00', '2022-08-03 08:42:14'),
(649, '9', '14,13,3,1,10,4,11,9,12,6', '2022-08-03 08:42:00', '2022-08-03 08:42:14'),
(650, '10', '2,1,12,4,3,8,14,5,10,9', '2022-08-03 08:42:00', '2022-08-03 08:42:14'),
(651, '11', '9,5,1,13,14,4,2,8,3,6,12,11', '2022-08-03 08:42:00', '2022-08-03 08:42:14'),
(652, '12', '11,1,9,4,5,13,6,8,10,3,12,2', '2022-08-03 08:42:00', '2022-08-03 08:42:14');

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
(2323, '14,13', '9', '2022-10-05', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2324, '3,13', '6', '2022-09-14', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2325, '1,13', '11', '2022-10-19', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2326, '10,13', '4', '2022-08-31', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2327, '6,13', '2', '2022-08-17', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2328, '9,13', '8', '2022-09-28', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2329, '11,13', '3', '2022-08-24', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2330, '5,13', '12', '2022-10-26', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2331, '4,13', '1', '2022-08-10', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:14'),
(2332, '2,13', '1', '2022-08-10', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2333, '8,13', '10', '2022-10-12', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:14'),
(2334, '12,13', '7', '2022-09-21', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2335, '9,5', '11', '2022-10-19', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2336, '8,5', '1', '2022-08-10', '1', 1, 0, '2022-08-03 08:41:59', '2022-08-03 08:47:15'),
(2337, '10,5', '5', '2022-09-07', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2338, '6,5', '3', '2022-08-24', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2339, '1,5', '6', '2022-09-14', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2340, '4,5', '10', '2022-10-12', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:14'),
(2341, '2,5', '2', '2022-08-17', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2342, '3,5', '7', '2022-09-21', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2343, '14,5', '10', '2022-10-12', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2344, '12,5', '8', '2022-09-28', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2345, '11,5', '4', '2022-08-31', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2346, '10,4', '9', '2022-10-05', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2347, '9,4', '12', '2022-10-26', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2348, '8,4', '11', '2022-10-19', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:14'),
(2349, '14,4', '11', '2022-10-19', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2350, '6,4', '6', '2022-09-14', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2351, '3,4', '8', '2022-09-28', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2352, '1,4', '3', '2022-08-24', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:03'),
(2353, '11,4', '7', '2022-09-21', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2354, '12,4', '10', '2022-10-12', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2355, '2,4', '5', '2022-09-07', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2356, '2,1', '10', '2022-10-12', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2357, '6,1', '7', '2022-09-21', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2358, '9,1', '2', '2022-08-17', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2359, '11,1', '12', '2022-10-26', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2360, '12,1', '4', '2022-08-31', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2361, '14,1', '8', '2022-09-28', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2362, '10,1', '1', '2022-08-10', '1', 1, 0, '2022-08-03 08:41:59', '2022-08-03 08:47:04'),
(2363, '8,1', '12', '2022-10-26', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:14'),
(2364, '3,1', '9', '2022-10-05', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2365, '2,8', '11', '2022-10-19', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2366, '11,8', '8', '2022-09-28', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2367, '9,8', '3', '2022-08-24', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2368, '3,8', '10', '2022-10-12', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2369, '12,8', '5', '2022-09-07', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2370, '6,8', '12', '2022-10-26', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2371, '10,8', '6', '2022-09-14', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2372, '14,8', '4', '2022-08-31', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2373, '11,6', '1', '2022-08-10', '1', 1, 0, '2022-08-03 08:41:59', '2022-08-03 08:46:53'),
(2374, '10,6', '2', '2022-08-17', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:14'),
(2375, '3,6', '11', '2022-10-19', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:00'),
(2376, '9,6', '4', '2022-08-31', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2377, '14,6', '5', '2022-09-07', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:02'),
(2378, '2,6', '8', '2022-09-28', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2379, '12,6', '9', '2022-10-05', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:02'),
(2380, '3,9', '1', '2022-08-10', '1', 1, 0, '2022-08-03 08:41:59', '2022-08-03 08:46:44'),
(2381, '11,9', '9', '2022-10-05', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2382, '10,9', '10', '2022-10-12', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2383, '12,9', '6', '2022-09-14', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2384, '2,9', '7', '2022-09-21', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:02'),
(2385, '14,9', '2', '2022-08-17', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:14'),
(2386, '12,3', '2', '2022-08-17', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2387, '14,3', '3', '2022-08-24', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2388, '10,3', '12', '2022-10-26', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2389, '2,3', '4', '2022-08-31', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:02'),
(2390, '11,3', '5', '2022-09-07', '1', 0, 0, '2022-08-03 08:41:59', '2022-08-03 08:42:01'),
(2391, '14,2', '3', '2022-08-24', '1', 0, 0, '2022-08-03 08:42:00', '2022-08-03 08:42:14'),
(2392, '12,2', '12', '2022-10-26', '1', 0, 0, '2022-08-03 08:42:00', '2022-08-03 08:42:02'),
(2393, '11,2', '6', '2022-09-14', '1', 0, 0, '2022-08-03 08:42:00', '2022-08-03 08:42:01'),
(2394, '10,2', '4', '2022-08-31', '1', 0, 0, '2022-08-03 08:42:00', '2022-08-03 08:42:14'),
(2395, '14,11', '2', '2022-08-17', '1', 0, 0, '2022-08-03 08:42:00', '2022-08-03 08:42:02'),
(2396, '12,11', '11', '2022-10-19', '1', 0, 0, '2022-08-03 08:42:00', '2022-08-03 08:42:03'),
(2397, '10,11', '5', '2022-09-07', '1', 0, 0, '2022-08-03 08:42:00', '2022-08-03 08:42:14'),
(2398, '10,12', '3', '2022-08-24', '1', 0, 0, '2022-08-03 08:42:00', '2022-08-03 08:42:04'),
(2399, '14,12', '1', '2022-08-10', '1', 1, 0, '2022-08-03 08:42:00', '2022-08-03 08:46:36'),
(2400, '14,10', '5', '2022-09-07', '1', 0, 0, '2022-08-03 08:42:00', '2022-08-03 08:42:14');

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
(7, '2022_07_31_231642_skor', 2);

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
(1, '2020-2021', '1', 0, '2022-07-24 02:03:45', '2022-08-03 08:42:14');

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
(74, '2399', '1', '12', '1', '1', '1', 0, '2022-08-03 08:46:36', '2022-08-03 08:46:36'),
(75, '2399', '1', '14', '1', '1', '1', 0, '2022-08-03 08:46:36', '2022-08-03 08:46:36'),
(76, '2380', '1', '3', '2', '3', '0', 0, '2022-08-03 08:46:44', '2022-08-03 08:46:44'),
(77, '2380', '1', '9', '3', '2', '3', 0, '2022-08-03 08:46:44', '2022-08-03 08:46:44'),
(78, '2373', '1', '6', '2', '1', '3', 0, '2022-08-03 08:46:53', '2022-08-03 08:46:53'),
(79, '2373', '1', '11', '1', '2', '0', 0, '2022-08-03 08:46:53', '2022-08-03 08:46:53'),
(80, '2362', '1', '1', '3', '3', '1', 0, '2022-08-03 08:47:03', '2022-08-03 08:47:03'),
(81, '2362', '1', '10', '3', '3', '1', 0, '2022-08-03 08:47:04', '2022-08-03 08:47:04'),
(82, '2336', '1', '5', '2', '2', '1', 0, '2022-08-03 08:47:15', '2022-08-03 08:47:15'),
(83, '2336', '1', '8', '2', '2', '1', 0, '2022-08-03 08:47:15', '2022-08-03 08:47:15');

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
(14, 'TULUNGAGUNG PUTRA', 'Anonimus', '188f54ae0166e08a68aa11b0e8f593bc.jpeg', 0, '2022-07-31 04:55:24', '2022-07-31 04:55:24');

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
  MODIFY `current_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=653;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `jadwal_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2401;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `skor_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
