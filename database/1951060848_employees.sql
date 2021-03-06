-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 09, 2022 at 02:02 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1951060848_employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `1951060848_employees`
--

CREATE TABLE `1951060848_employees` (
  `ma` int(11) NOT NULL,
  `ho_ten` varchar(200) NOT NULL,
  `chuc_vu` varchar(200) NOT NULL,
  `phong_ban` varchar(50) NOT NULL,
  `luong` float NOT NULL,
  `ngay_vao_lam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `1951060848_employees`
--

INSERT INTO `1951060848_employees` (`ma`, `ho_ten`, `chuc_vu`, `phong_ban`, `luong`, `ngay_vao_lam`) VALUES
(1, 'Nguyễn Văn Mạnh', 'Quản lý', 'IT', 100000, '2022-01-08 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1951060848_employees`
--
ALTER TABLE `1951060848_employees`
  ADD PRIMARY KEY (`ma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1951060848_employees`
--
ALTER TABLE `1951060848_employees`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
