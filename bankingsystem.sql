-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 03:37 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Sno` int(3) DEFAULT NULL,
  `NAME` char(15) COLLATE utf8mb4_bin NOT NULL,
  `EMAIL` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `BALANCE` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Sno`, `NAME`, `EMAIL`, `BALANCE`) VALUES
(1, 'Anshika', 'anshika@gmail.com', 100),
(2, 'Arunita', 'arunita@gmail.com', 100),
(3, 'Danish', 'damish@gmail.com', 100),
(4, 'Esha', 'esha@gmail.com', 100),
(5, 'Jay', 'jay@gmail.com', 100),
(6, 'Kiara', 'kiara@gmail.com', 100),
(7, 'Sanchit', 'sanchit@gmail.com', 100),
(8, 'Shreeshti', 'shreeshti@gmail.com', 100),
(9, 'Vishu', 'vishu@gmail.com', 100),
(10, 'Vivansh', 'vivansh@gmail.com ', 100);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `SENDER` char(15) COLLATE utf8mb4_bin NOT NULL,
  `SEMAIL` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `RECIEVER` char(15) COLLATE utf8mb4_bin NOT NULL,
  `AMOUNT` int(10) NOT NULL,
  `TIMESTAMPS` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
