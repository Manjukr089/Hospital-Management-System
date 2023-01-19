-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 05:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'manju', '$2y$10$51ImeknNM5uDbWwlTVQeMeZ5dA/1t9nz9zzzPL/G.snCGLpARft.W', '2022-03-17 20:10:56'),
(2, 'anjan', '$2y$10$YdsYYwWNmP9FW7vjlwXnXOofLOQWBzwrO8AtEeAJqe9nLdriRVc1W', '2022-03-17 20:42:50'),
(3, 'sandeep', '$2y$10$S2UEnJNp6HKOukwOrNPQzunzWZSXULKE0SumlzohBbjRmBrd2eKYG', '2022-03-18 03:43:03'),
(4, 'nithin', '$2y$10$YxcwGhB3AUGi3TFIlVX7CO21q5MTKFTwv/.1wzDuW9iX5Mipp8xy6', '2022-03-21 19:13:51'),
(5, 'anish', '$2y$10$gXLHEYjCVzm4FgrurhOAfeDh.vkN744wm9bsev5pPFhLB7u7GOLhu', '2022-03-21 19:54:13'),
(6, 'prashanth', '$2y$10$zQ6XOPNTkqOzaJeY5ZZyY.Xr16SyxohLEria3glhG5mGfSmeaHy.m', '2022-03-21 23:12:12'),
(7, 'manjukr', '$2y$10$M9JHHmCwQASuKfgvFRKSXeX16nwU5kkayM/TiDO8BGCnM/6.nkMJi', '2022-03-22 02:03:21'),
(8, 'pgca21021', '$2y$10$2kCQk/7IQv/8ZB50IEEAAOC75cCvKrN44/yDXvV.iHaVWVMAGJJNC', '2022-03-22 03:02:30'),
(9, 'manjunath', '$2y$10$BtcByhktBxU.Z4G/bdmbd.vRTaMzsnxhylAQooHminPkCG07AFP9K', '2022-03-23 02:47:18'),
(10, 'sachin', '$2y$10$Q/hGiUNtcWdUBwXcmO46iOPxqArlCU0JFsXULRcvwhPUOTGUzGrdK', '2022-03-23 23:50:34'),
(11, 'ramesh', '$2y$10$gEZQHZoHTGFUw1XEkPhxMuZYMuMbQ4rUYddO9JieePYlSoNqwwfni', '2022-03-24 00:23:04'),
(12, 'ram', '$2y$10$j/db2eclLozsUE2b8J9MmO4eFWR20eU.6kqW39Hzvr7DwbtXyexyC', '2022-03-24 00:55:14'),
(13, 'mahesh', '$2y$10$Q5HLjLbDmD36yA1v.ViReO1Yys/2fExQOWx6pgApaXUCTahQfmkAG', '2022-03-24 11:14:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
