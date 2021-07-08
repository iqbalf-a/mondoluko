-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 11:45 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mondoluko`
--

-- --------------------------------------------------------

--
-- Table structure for table `ektp`
--

CREATE TABLE `ektp` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `file1` varchar(255) NOT NULL,
  `file2` varchar(255) NOT NULL,
  `file3` varchar(255) DEFAULT NULL,
  `file4` varchar(255) DEFAULT NULL,
  `file5` varchar(255) DEFAULT NULL,
  `file6` varchar(255) DEFAULT NULL,
  `file7` varchar(255) DEFAULT NULL,
  `file8` varchar(255) DEFAULT NULL,
  `kode` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ektp`
--

INSERT INTO `ektp` (`id`, `user_id`, `nama`, `nik`, `file1`, `file2`, `file3`, `file4`, `file5`, `file6`, `file7`, `file8`, `kode`, `status`, `date_created`) VALUES
(1, 2, 'asda', '12', '7e32c8e7cd0d3e2c2a564efcabfcc51e.pdf', '96f888ba1aa6f86fbe727e60cf8180fe.pdf', NULL, NULL, NULL, NULL, NULL, NULL, 'EKTP6sREY', 1, 1625178026),
(2, 2, 'qweqweqwe', '12', '05a651981c7407848dd0e6e2b3d5bf0e.pdf', 'defed049b5c67c86368aa9c48ca6dd62.pdf', NULL, NULL, NULL, NULL, NULL, NULL, 'EKTPbWjYT', 2, 1625180089),
(3, 2, 'contoh 3', '12345', '5a55644320614b98f6e802ad35586fbe.pdf', '386d64cbe085e5886a5652eb5dbcfb56.pdf', 'b4439e18bd8844c905d5dee35545b39b.pdf', NULL, NULL, NULL, NULL, '57cab98e60e04145afd0e62e95a8fc0e.pdf', 'EKTPaCRom', 2, 1625328622),
(4, 3, 'Asede', '123456789', '977cc0000394f381942b7f5f5d28f6ab.pdf', '228f8663cd032f98c714bb600c0e4083.pdf', NULL, NULL, NULL, NULL, '6c37d048407847e98745064fbf5c5882.pdf', '2155c23f708b6f99d251ec9c2b589c0f.pdf', 'EKTPrEX2b', 1, 1625599093);

-- --------------------------------------------------------

--
-- Table structure for table `ektp_catatan`
--

CREATE TABLE `ektp_catatan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ektp_id` int(11) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ektp_catatan`
--

INSERT INTO `ektp_catatan` (`id`, `user_id`, `ektp_id`, `catatan`, `date_created`) VALUES
(1, 3, 4, 'Tolak', 1625610004),
(2, 2, 1, 'ini diterima gaess', 1625610121);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `password`, `role_id`, `date_created`) VALUES
(1, 'Hafifatussyabila31@gmail.com', 'Hafifatus Syabila', '$2y$10$oN21OFQxUAaWZhlpB8oHq.Jo5j2g6i9YNUtFvIDU9Pyu8ASxhyWCC', 2, 1624226081),
(2, 'admin@gmail.com', 'Aku', '$2y$10$V7R.zDSVDKX7UoP3HXSO2OLliSPG8frEVGlx6.O6zEIL8.oSJ8kBm', 1, 1624520747),
(3, 'tes2@gmail.com', 'aseek', '$2y$10$Dz29riJ3rFq0u/nXo5lKuOutuFIp0yHXE/WhI49PxWzcijbnXM2JK', 2, 1625180680);

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE `user_access` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access`
--

INSERT INTO `user_access` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'admin'),
(2, 'dashboard');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ektp`
--
ALTER TABLE `ektp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ektp_catatan`
--
ALTER TABLE `ektp_catatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ektp`
--
ALTER TABLE `ektp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ektp_catatan`
--
ALTER TABLE `ektp_catatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_access`
--
ALTER TABLE `user_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
