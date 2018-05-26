-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 06:15 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maljuburi`
--

-- --------------------------------------------------------

--
-- Table structure for table `fp_employees`
--

CREATE TABLE `fp_employees` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(5) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `department` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fp_employees`
--

INSERT INTO `fp_employees` (`id`, `username`, `password`, `firstname`, `lastname`, `address`, `city`, `state`, `zip`, `phone`, `department`, `status`, `email`, `role`) VALUES
(1, 'admin', 'password', 'Muhammad', 'Al Juburi', '11 Alden Ave', 'Albany', 'NY', '12209', '5185127510', 'Administration', 'Active', 'm-aljuburi@hvcc.edu', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fp_employees`
--
ALTER TABLE `fp_employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fp_employees`
--
ALTER TABLE `fp_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
