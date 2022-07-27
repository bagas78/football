-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 04:03 PM
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
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `jadwal_id` bigint(20) UNSIGNED NOT NULL,
  `jadwal_team` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_pekan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_pertandingan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_musim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_delete` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`jadwal_id`, `jadwal_team`, `jadwal_pekan`, `jadwal_pertandingan`, `jadwal_musim`, `jadwal_delete`, `created_at`, `updated_at`) VALUES
(306, '5,4', '', '', '1', 0, '2022-07-24 10:28:44', '2022-07-24 10:28:44'),
(307, '5,6', '', '', '1', 0, '2022-07-24 10:28:44', '2022-07-24 10:28:44'),
(308, '5,3', '', '', '1', 0, '2022-07-24 10:28:44', '2022-07-24 10:28:44'),
(309, '5,2', '', '', '1', 0, '2022-07-24 10:28:44', '2022-07-24 10:28:44'),
(310, '5,1', '', '', '1', 0, '2022-07-24 10:28:44', '2022-07-24 10:28:44'),
(311, '3,1', '', '', '1', 0, '2022-07-24 10:28:44', '2022-07-24 10:28:44'),
(312, '3,2', '', '', '1', 0, '2022-07-24 10:28:44', '2022-07-24 10:28:44'),
(313, '3,6', '', '', '1', 0, '2022-07-24 10:28:44', '2022-07-24 10:28:44'),
(314, '3,4', '', '', '1', 0, '2022-07-24 10:28:44', '2022-07-24 10:28:44'),
(315, '1,6', '', '', '1', 0, '2022-07-24 10:28:44', '2022-07-24 10:28:44'),
(316, '1,2', '', '', '1', 0, '2022-07-24 10:28:44', '2022-07-24 10:28:44'),
(317, '1,4', '', '', '1', 0, '2022-07-24 10:28:44', '2022-07-24 10:28:44'),
(318, '4,2', '', '', '1', 0, '2022-07-24 10:28:44', '2022-07-24 10:28:44'),
(319, '4,6', '', '', '1', 0, '2022-07-24 10:28:44', '2022-07-24 10:28:44'),
(320, '2,6', '', '', '1', 0, '2022-07-24 10:28:44', '2022-07-24 10:28:44');

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
(5, '2022_07_23_173309_jadwal', 1);

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
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `team_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_delete` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `team_logo`, `team_delete`, `created_at`, `updated_at`) VALUES
(1, 'AMBASSADOR FC', '7811cc6543f9b765f06cacbf10f877ac.png', 0, '2022-07-24 02:04:49', '2022-07-24 02:04:49'),
(2, 'BINTANG MUDA JOMBANG', '76bca69e7867f79351ad010d12748891.png', 0, '2022-07-24 02:05:03', '2022-07-24 02:05:03'),
(3, 'GEN B', '822bf1bc10ec3509e76def081ee9b987.jpeg', 0, '2022-07-24 02:05:16', '2022-07-24 02:05:16'),
(4, 'KKO ESPERODI', 'd606e94730b0dca603b02409ec995c41.jpeg', 0, '2022-07-24 02:05:31', '2022-07-24 02:05:31'),
(5, 'PASOPATI FA', '7724b2d77e44ec2f2efbdce663c2d0b6.png', 0, '2022-07-24 02:05:45', '2022-07-24 02:05:45'),
(6, 'PENDOWO FC', '83cdb1558e2c3bdb0ca9dd5b082d41d9.png', 0, '2022-07-24 02:06:03', '2022-07-24 02:06:03');

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
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `jadwal_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
