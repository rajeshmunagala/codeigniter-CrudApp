-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2020 at 03:37 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(4) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `firstname`, `lastname`, `email`, `created_on`) VALUES
(1, 'Rajesh', 'Munagala', 'rajesh.mungala@blocmatrix.com', '2020-01-10 00:00:00'),
(2, 'jitender', 'sridar', 'jitender.sridar@gmail.com', '2020-01-10 00:00:00'),
(3, 'Karan', 'Arjun', 'test@test.com', '0000-00-00 00:00:00'),
(4, 'jitender', 'sridar', 'jitender.srider@gmail.com', '0000-00-00 00:00:00'),
(5, 'Kumara', 'Mangala', 'brila@biral.com', '0000-00-00 00:00:00'),
(6, 'jitender', 'sridar', 'jitender.sridar@gmail.com', '2020-01-10 15:06:26'),
(7, 'Kumara', 'Mangala', 'brila@biral.com', '2020-01-10 15:06:37'),
(8, 'jitender', 'sridar', 'jitender.sridar@gmail.com', '2020-01-10 15:06:50'),
(9, 'Jevan', 'Mohana', 'mohan.jevan@gmail.com', '2020-01-10 15:24:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
