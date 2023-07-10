-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 11:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stdconn`
--

-- --------------------------------------------------------

--
-- Table structure for table `std_conn`
--

CREATE TABLE `std_conn` (
  `Roll_No` int(4) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `Section` varchar(5) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Gurdian_Name` varchar(50) NOT NULL,
  `Gurdian_phone` int(12) NOT NULL,
  `Emr_phone` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `std_conn`
--

INSERT INTO `std_conn` (`Roll_No`, `First_Name`, `Last_Name`, `Class`, `Section`, `Gender`, `Gurdian_Name`, `Gurdian_phone`, `Emr_phone`) VALUES
(1, 'ifra', 'saba', 'bs', 'F', 'female', 'saba ahmed', 1234567890, 1234567890),
(3, 'izma ', 'waheed', '6', 'D', 'female', 'waheed Ahmed', 987654321, 987654321),
(5, 'sadia', 'khalid', 'bs', '3', 'female', 'ahmed', 1234567890, 1234567890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `std_conn`
--
ALTER TABLE `std_conn`
  ADD PRIMARY KEY (`Roll_No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
