-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 05:47 PM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `disease` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`name`, `email`, `mobile`, `sex`, `disease`) VALUES
('bhanu', 'b@gmail.com', '877687870', 'male', 'fe'),
('Ajay', 'ajay@gmail.com', '2147483647', 'male', 'Gynacology'),
('Ramesh', 'ramesh@gmail.com', '2147483647', 'male', 'Dermatologist'),
('Anjan', 'anjan@gmail.com', '2147483647', 'male', 'Orthology'),
('Ramu', 'ramu@gmail.com', '2147483647', 'male', 'Ayurvedic'),
('Nayana', 'nayana@gmail.com', '2147483647', 'female', 'Dermatologist'),
('Likith', 'liki@gmail.com', '2147483647', 'male', 'Anesthesiology'),
('sachin', 'sachinagchinnu2@gmail.com', '2147483647', 'male', 'Ayurvedic'),
('vinayak', 'vinu@gmail.com', '6578654432', 'male', 'Anesthesiology'),
('v', 'vijay@gmail.com', '8766554531', 'male', 'Dermatologist'),
('vinayak', 'manju@gmail.com', '9731078099', 'male', 'Orthology'),
('vinayak', 'manju@gmail.com', '9731078099', 'male', 'Orthology'),
('vinayak', 'manju@gmail.com', '9731078099', 'male', 'Orthology'),
('vinayak', 'manju@gmail.com', '9731078099', 'male', 'Orthology'),
('vinayak', 'manju@gmail.com', '9731078099', 'male', 'Orthology'),
('vinayak', 'manju@gmail.com', '9731078099', 'male', 'Orthology'),
('vinayak', 'manju@gmail.com', '9731078099', 'male', 'Orthology'),
('prashanth', 'vinu@gmail.com', '9731078099', 'male', 'Family Physicians'),
('sanjay', 'sachi@gmail.com', '9731078099', 'male', 'Cardiologists');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
