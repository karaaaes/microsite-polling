-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2024 at 12:32 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ninja_express`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(4, '2024-06-23-152611', 'App\\Database\\Migrations\\CreateTContentTable', 'default', 'App', 1719157574, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_content`
--

CREATE TABLE `t_content` (
  `id` int UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `usia` int NOT NULL,
  `domisili` int NOT NULL COMMENT '0 = Jabodetabek, 1 = Luar Jabodetabek',
  `is_buy` int NOT NULL COMMENT '0 = Tidak, 1 = Ya',
  `deskripsi` text COLLATE utf8mb4_general_ci,
  `frekuensi` varchar(1) COLLATE utf8mb4_general_ci DEFAULT '' COMMENT '0 = 1-2 Kali, 1 = 3-4 Kali, 2 = > 5 Kali',
  `faktor` text COLLATE utf8mb4_general_ci,
  `date_created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_content`
--

INSERT INTO `t_content` (`id`, `nama`, `email`, `usia`, `domisili`, `is_buy`, `deskripsi`, `frekuensi`, `faktor`, `date_created`) VALUES
(1, 'Raka', 'rakaeshardiansyah@gmail.com', 16, 0, 1, 'Chicken Nugget', '0', 'Kecepatan,Tarif', '2024-06-23 22:46:21'),
(2, 'Raka Putra Eshardiansyah 123', 'rakaeshardiansyah@gmail.com', 17, 1, 0, '', NULL, 'Pelacakan Realtime,Tidak Menggunakan Jasa Ekspedisi', '2024-06-23 23:37:13'),
(3, 'Raka Putra Eshardiansyah 123', 'rakaeshardian1syah@gmail.com', 15, 1, 1, 'zsdsadas', '2', 'Pemesanan Mudah & Praktis,Pelacakan Realtime,other,Keren', '2024-06-24 00:08:11'),
(4, 'Raka Putra Eshardiansyah 123', 'admin@gmail.com', 16, 0, 1, 'sadasdasd', '1', 'Tarif,Kecepatan,Keamanan,Pelacakan Realtime,Mantab', '2024-06-24 00:09:22'),
(5, 'Raka Putra Eshardiansyah 123', 'rakaeshardi1ansyah@gmail.com', 14, 0, 1, 'sdasda', '1', 'Kecepatan,Keamanan', '2024-06-24 00:10:14'),
(6, 'raka', 'rakaeshardia1nsyah@gmail.com', 3, 0, 1, 'sadasdsa', '1', 'Kecepatan,Keamanan,Pemesanan Mudah & Praktis', '2024-06-24 00:12:58'),
(7, '213', 'rakaeshssardiansyah@gmail.com', 32, 0, 0, '', NULL, 'Kecepatan,Keamanan', '2024-06-24 00:13:39'),
(8, 'Raka2', 'rakaeshardia11nsyah@gmail.com', 15, 0, 1, 'sadad', '1', 'Kecepatan,Keamanan,Pemesanan Mudah & Praktis', '2024-06-24 00:15:26'),
(9, 'asdasd', 'rakaeshar11diansyah@gmail.com', 15, 0, 0, '', NULL, 'Tidak Menggunakan Jasa Ekspedisi,other,kurang oke', '2024-06-24 00:16:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_content`
--
ALTER TABLE `t_content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_content`
--
ALTER TABLE `t_content`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
