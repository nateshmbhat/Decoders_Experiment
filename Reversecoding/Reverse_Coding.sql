-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2017 at 08:47 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Reverse_Coding`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `serial` int(11) NOT NULL,
  `mem1_email` varchar(40) NOT NULL,
  `mem1_USN` varchar(10) NOT NULL,
  `mem1_contact` int(10) NOT NULL,
  `mem1_name` varchar(30) NOT NULL,
  `mem2_email` varchar(40) NOT NULL,
  `mem2_USN` int(10) NOT NULL,
  `mem2_contact` int(10) NOT NULL,
  `mem2_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`serial`, `mem1_email`, `mem1_USN`, `mem1_contact`, `mem1_name`, `mem2_email`, `mem2_USN`, `mem2_contact`, `mem2_name`) VALUES
(21, 'kps@gmail.com', '046', 11111, 'kps', 'kps2@gmail.com', 47, 22222, 'kps2'),
(24, 'kps@gmail.com', '1231', 1231, 'kps', '', 0, 11111, 'kps2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`mem1_USN`,`mem2_USN`),
  ADD UNIQUE KEY `serial` (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
