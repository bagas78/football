-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 03:29 AM
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
(605, '1', '3,2,11,4,13,14,6,1,12,10', '2022-07-31 13:02:53', '2022-07-31 13:03:07'),
(606, '2', '4,2,3,14,6,11,8,10,13,1', '2022-07-31 13:02:54', '2022-07-31 13:03:07'),
(607, '3', '12,2,3,4,11,1,6,10,8,14', '2022-07-31 13:02:54', '2022-07-31 13:03:07'),
(608, '4', '10,2,5,1,9,14,12,11,13,4,6,8', '2022-07-31 13:02:54', '2022-07-31 13:03:07'),
(609, '5', '4,14,5,2,3,1,6,9,13,11', '2022-07-31 13:02:54', '2022-07-31 13:03:07'),
(610, '6', '3,11,1,2,5,14,8,4,6,12,9,10', '2022-07-31 13:02:54', '2022-07-31 13:03:07'),
(611, '7', '1,14,6,2,3,10,5,4,8,12', '2022-07-31 13:02:54', '2022-07-31 13:03:07'),
(612, '8', '11,2,10,14,3,12,1,4,5,9,6,13', '2022-07-31 13:02:54', '2022-07-31 13:03:08'),
(613, '9', '12,14,13,2,3,9,10,4,5,11,8,1', '2022-07-31 13:02:54', '2022-07-31 13:03:08'),
(614, '10', '10,1,12,4,14,2,5,13,9,11,6,3', '2022-07-31 13:02:54', '2022-07-31 13:03:08'),
(615, '11', '6,4,12,1,11,14,9,2,3,13,5,10', '2022-07-31 13:02:54', '2022-07-31 13:03:08'),
(616, '12', '8,3,10,11,6,14,5,12,9,4', '2022-07-31 13:02:54', '2022-07-31 13:03:08');

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
(2089, '1,2', '6', '2022-09-12', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2090, '6,2', '7', '2022-09-19', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2091, '11,2', '8', '2022-09-26', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2092, '12,2', '3', '2022-08-22', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2093, '4,2', '2', '2022-08-15', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2094, '13,2', '9', '2022-10-03', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2095, '10,2', '4', '2022-08-29', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2096, '14,2', '10', '2022-10-10', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2097, '5,2', '5', '2022-09-05', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2098, '3,2', '1', '2022-08-08', '1', 1, 0, '2022-07-31 13:02:53', '2022-07-31 18:19:26'),
(2099, '8,2', '1', '2022-08-08', '1', 1, 0, '2022-07-31 13:02:53', '2022-07-31 18:18:46'),
(2100, '9,2', '11', '2022-10-17', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2101, '1,14', '7', '2022-09-19', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2102, '8,14', '3', '2022-08-22', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:56'),
(2103, '10,14', '8', '2022-09-26', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2104, '11,14', '11', '2022-10-17', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2105, '12,14', '9', '2022-10-03', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2106, '9,14', '4', '2022-08-29', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:55'),
(2107, '13,14', '1', '2022-08-08', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 18:01:45'),
(2108, '5,14', '6', '2022-09-12', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2109, '4,14', '5', '2022-09-05', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2110, '3,14', '2', '2022-08-15', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2111, '6,14', '12', '2022-10-24', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2112, '8,4', '6', '2022-09-12', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2113, '6,4', '11', '2022-10-17', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2114, '3,4', '3', '2022-08-22', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2115, '1,4', '8', '2022-09-26', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2116, '10,4', '9', '2022-10-03', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2117, '11,4', '1', '2022-08-08', '1', 1, 0, '2022-07-31 13:02:53', '2022-07-31 18:20:05'),
(2118, '5,4', '7', '2022-09-19', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2119, '9,4', '12', '2022-10-24', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:55'),
(2120, '12,4', '10', '2022-10-10', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2121, '13,4', '4', '2022-08-29', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:55'),
(2122, '10,1', '10', '2022-10-10', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2123, '11,1', '3', '2022-08-22', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2124, '6,1', '1', '2022-08-08', '1', 1, 0, '2022-07-31 13:02:53', '2022-07-31 18:19:56'),
(2125, '8,1', '9', '2022-10-03', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:55'),
(2126, '3,1', '5', '2022-09-05', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2127, '12,1', '11', '2022-10-17', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2128, '9,1', '1', '2022-08-08', '1', 1, 0, '2022-07-31 13:02:53', '2022-07-31 18:19:48'),
(2129, '13,1', '2', '2022-08-15', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:56'),
(2130, '5,1', '4', '2022-08-29', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:55'),
(2131, '10,11', '12', '2022-10-24', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2132, '6,11', '2', '2022-08-15', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2133, '9,11', '10', '2022-10-10', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:55'),
(2134, '5,11', '9', '2022-10-03', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:55'),
(2135, '3,11', '6', '2022-09-12', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2136, '13,11', '5', '2022-09-05', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:56'),
(2137, '12,11', '4', '2022-08-29', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:55'),
(2138, '8,11', '10', '2022-10-10', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:03:08'),
(2139, '9,10', '6', '2022-09-12', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:55'),
(2140, '6,10', '3', '2022-08-22', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2141, '8,10', '2', '2022-08-15', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:56'),
(2142, '13,10', '11', '2022-10-17', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:03:08'),
(2143, '12,10', '1', '2022-08-08', '1', 1, 0, '2022-07-31 13:02:53', '2022-07-31 18:19:36'),
(2144, '5,10', '11', '2022-10-17', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:55'),
(2145, '3,10', '7', '2022-09-19', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2146, '6,12', '6', '2022-09-12', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:55'),
(2147, '8,12', '7', '2022-09-19', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:56'),
(2148, '3,12', '8', '2022-09-26', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2149, '5,12', '12', '2022-10-24', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:55'),
(2150, '13,12', '12', '2022-10-24', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:03:08'),
(2151, '9,12', '12', '2022-10-24', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:03:08'),
(2152, '8,9', '2', '2022-08-15', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:03:08'),
(2153, '3,9', '9', '2022-10-03', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2154, '6,9', '5', '2022-09-05', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:56'),
(2155, '13,9', '2', '2022-08-15', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:03:08'),
(2156, '5,9', '8', '2022-09-26', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:55'),
(2157, '8,13', '3', '2022-08-22', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:03:08'),
(2158, '6,13', '8', '2022-09-26', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:57'),
(2159, '5,13', '10', '2022-10-10', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:55'),
(2160, '3,13', '11', '2022-10-17', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2161, '8,3', '12', '2022-10-24', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:54'),
(2162, '5,3', '3', '2022-08-22', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:03:08'),
(2163, '6,3', '10', '2022-10-10', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:57'),
(2164, '5,8', '4', '2022-08-29', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:03:08'),
(2165, '6,8', '4', '2022-08-29', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:02:58'),
(2166, '6,5', '5', '2022-09-05', '1', 0, 0, '2022-07-31 13:02:53', '2022-07-31 13:03:08');

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
  `musim_delete` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `musim`
--

INSERT INTO `musim` (`musim_id`, `musim_tahun`, `musim_delete`, `created_at`, `updated_at`) VALUES
(1, '2020-2021', 0, '2022-07-24 02:03:45', '2022-07-24 02:03:45');

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

INSERT INTO `skor` (`skor_id`, `skor_jadwal`, `skor_team`, `skor_nilai`, `skor_bobol`, `skor_poin`, `skor_delete`, `created_at`, `updated_at`) VALUES
(46, '2099', '2', '1', '2', '0', 0, '2022-07-31 18:18:46', '2022-07-31 18:18:46'),
(47, '2099', '8', '2', '1', '3', 0, '2022-07-31 18:18:46', '2022-07-31 18:18:46'),
(48, '2098', '2', '2', '2', '1', 0, '2022-07-31 18:19:26', '2022-07-31 18:19:26'),
(49, '2098', '3', '2', '2', '1', 0, '2022-07-31 18:19:26', '2022-07-31 18:19:26'),
(50, '2143', '10', '2', '4', '0', 0, '2022-07-31 18:19:36', '2022-07-31 18:19:36'),
(51, '2143', '12', '4', '2', '3', 0, '2022-07-31 18:19:36', '2022-07-31 18:19:36'),
(52, '2128', '1', '1', '3', '0', 0, '2022-07-31 18:19:48', '2022-07-31 18:19:48'),
(53, '2128', '9', '3', '1', '3', 0, '2022-07-31 18:19:48', '2022-07-31 18:19:48'),
(54, '2124', '1', '0', '0', '1', 0, '2022-07-31 18:19:56', '2022-07-31 18:19:56'),
(55, '2124', '6', '0', '0', '1', 0, '2022-07-31 18:19:56', '2022-07-31 18:19:56'),
(56, '2117', '4', '1', '2', '0', 0, '2022-07-31 18:20:05', '2022-07-31 18:20:05'),
(57, '2117', '11', '2', '1', '3', 0, '2022-07-31 18:20:05', '2022-07-31 18:20:05');

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
(6, 'PENDOWO FC', 'Atta Halilintar', '83cdb1558e2c3bdb0ca9dd5b082d41d9.png', 0, '2022-07-24 02:06:03', '2022-07-31 04:49:08'),
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
  `user_delete` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_delete`, `created_at`, `updated_at`) VALUES
(1, 'Bagas', 'admin@admin.com', '$2y$10$E4ayBPji6FsN.pb2JbJ7rut8Ptr68W/qkfCnCvU./HlvsQj3tixl2', 0, '2022-07-24 02:00:59', '2022-07-24 02:00:59'),
(2, 'test', 'test@gmail.com', '$2y$10$UPq65e0hn4EzhKvokQfQJu.WDdp0sGgWEymUabraf.S50oC1tXRGm', 1, '2022-07-25 06:53:29', '2022-07-25 06:53:44');

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
  MODIFY `current_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=617;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `jadwal_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2167;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `musim`
--
ALTER TABLE `musim`
  MODIFY `musim_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skor`
--
ALTER TABLE `skor`
  MODIFY `skor_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
