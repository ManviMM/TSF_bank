-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 06:26 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsf`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `accno` varchar(20) NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `email`, `accno`, `balance`) VALUES
(1, 'Manvi', 'manvi@gmail.com', 'UIN00010241', 80000),
(2, 'Ayushi', 'ayushi@gmail.com', 'UIN00010245', 40000),
(3, 'Digza', 'digza@gmail.com', 'UIN00010248', 66000),
(4, 'Joe', 'joe@gmail.com', 'UIN00010250', 75000),
(5, 'Nikhil', 'nikhil@gmail.com', 'UIN00010251', 83000),
(6, 'Aditya', 'aditya@gmail.com', 'UIN00010255', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(2) NOT NULL,
  `transcat` datetime DEFAULT current_timestamp(),
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `transcat`, `sender`, `receiver`, `balance`) VALUES
(1, '2021-07-10 19:36:21', 'Aditya', 'Digza', 2000),
(2, '2021-07-10 20:42:19', 'Ayushi', 'Nikhil', 3000),
(3, '2021-07-10 20:44:28', 'Manvi', 'Joe', 6000),
(4, '2021-07-10 20:45:34', 'Digza', 'Ayushi', 4000),
(5, '2021-07-10 20:58:38', 'Manvi', 'Aditya', 4000),
(6, '2021-07-10 20:59:00', 'Nikhil', 'Joe', 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
