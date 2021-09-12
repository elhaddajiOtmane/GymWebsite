-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 12, 2021 at 06:03 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rimi_gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpass1`
--

CREATE TABLE `adminpass1` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminpass1`
--

INSERT INTO `adminpass1` (`id`, `email`, `password`) VALUES
(1, 'system', 'system');

-- --------------------------------------------------------

--
-- Table structure for table `customer_feedback1`
--

CREATE TABLE `customer_feedback1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_feedback1`
--

INSERT INTO `customer_feedback1` (`id`, `name`, `contact`, `email`, `feedback`) VALUES
(1, 'debashish baruah', '1234567890', 'cs19msiit005@gmail.com', 'it is very good gym'),
(2, 'Debashish Baruah', '+91 73846896453', 'coderhomen1@gmail.com', 'sdfnahdfhasjhdasdf');

-- --------------------------------------------------------

--
-- Table structure for table `join_member1`
--

CREATE TABLE `join_member1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `join_member1`
--

INSERT INTO `join_member1` (`id`, `name`, `email`, `phone`, `address`) VALUES
(1, 'homen nath', 'homennath444@gmail.com', '9854225648', 'Mangaldai, Assam'),
(2, 'Debashish Baruah', 'cs19msiit005@kazirangauniversity.in', '9451452545', 'Dibrugarh, Assam');

-- --------------------------------------------------------

--
-- Table structure for table `notice1`
--

CREATE TABLE `notice1` (
  `id` int(11) NOT NULL,
  `notice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice1`
--

INSERT INTO `notice1` (`id`, `notice`) VALUES
(1, 'Welcome to ABC GYM ');

-- --------------------------------------------------------

--
-- Table structure for table `registrationmember1`
--

CREATE TABLE `registrationmember1` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `adhar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrationmember1`
--

INSERT INTO `registrationmember1` (`id`, `firstname`, `middlename`, `lastname`, `email`, `phone`, `address`, `caddress`, `adhar`) VALUES
(1, 'homen', '', 'nath', 'coderhomen1@gmail.com', '7638062621', 'Udalgui, Assam', 'Mangaldai ', '784598745412');

-- --------------------------------------------------------

--
-- Table structure for table `trainer1`
--

CREATE TABLE `trainer1` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `adhar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminpass1`
--
ALTER TABLE `adminpass1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_feedback1`
--
ALTER TABLE `customer_feedback1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `join_member1`
--
ALTER TABLE `join_member1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice1`
--
ALTER TABLE `notice1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrationmember1`
--
ALTER TABLE `registrationmember1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer1`
--
ALTER TABLE `trainer1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminpass1`
--
ALTER TABLE `adminpass1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_feedback1`
--
ALTER TABLE `customer_feedback1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `join_member1`
--
ALTER TABLE `join_member1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice1`
--
ALTER TABLE `notice1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registrationmember1`
--
ALTER TABLE `registrationmember1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trainer1`
--
ALTER TABLE `trainer1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
