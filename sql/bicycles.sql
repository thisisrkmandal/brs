-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 05:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brs`
--

-- --------------------------------------------------------

--
-- Table structure for table `bicycles`
--

CREATE TABLE `bicycles` (
  `bicycle_id` varchar(10) NOT NULL,
  `bicycle_name` varchar(30) NOT NULL,
  `bicycle_model` varchar(50) NOT NULL,
  `bicycle_color` varchar(20) NOT NULL,
  `bicycle_type` varchar(20) NOT NULL,
  `rental_status` text NOT NULL,
  `rent_price` int(11) NOT NULL,
  `bicycle_img` varchar(200) NOT NULL,
  `bicycle_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bicycles`
--

INSERT INTO `bicycles` (`bicycle_id`, `bicycle_name`, `bicycle_model`, `bicycle_color`, `bicycle_type`, `rental_status`, `rent_price`, `bicycle_img`, `bicycle_location`) VALUES
('brs001', 'Leader Scout', 'LS34235 - Leader', 'Cyan BLue', 'Non - Geared', 'Available', 10, 'img/bicycles/bicycle-1.webp', 'pushpagiri'),
('brs002', 'Hero MTB', 'HMTB, single shaft', 'Black', 'Geared', 'Available', 12, 'img/bicycles/bicycle-2.webp', 'mega tower'),
('brs003', 'Atlas Mountain', 'Atlas MTB, dual shocker', 'matte green', 'geared', 'Not Available', 15, 'img/bicycles/bicycle-3.webp', 'pushpagiri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bicycles`
--
ALTER TABLE `bicycles`
  ADD PRIMARY KEY (`bicycle_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
