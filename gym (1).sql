-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 19, 2021 at 05:16 AM
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
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpass`
--

CREATE TABLE `adminpass` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminpass`
--

INSERT INTO `adminpass` (`id`, `email`, `password`) VALUES
(1, 'system', 'system');

-- --------------------------------------------------------

--
-- Table structure for table `customer_feedback`
--

CREATE TABLE `customer_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_feedback`
--

INSERT INTO `customer_feedback` (`id`, `name`, `contact`, `email`, `feedback`) VALUES
(1, 'Homen Nath', '784525854587', 'cs19msiit019@kazirangauniversity.in', 'Good Gym'),
(2, 'Sweta Kumari Mishra', '+918754558956', 'sweta1232@gmail.com', 'Very Good Gym. All facilities are very good.');

-- --------------------------------------------------------

--
-- Table structure for table `join_member`
--

CREATE TABLE `join_member` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `join_member`
--

INSERT INTO `join_member` (`id`, `name`, `email`, `phone`, `address`) VALUES
(0, 'Homen Nath', 'homennath444@gmail.com', '7638062621', 'Udalguri, Assam'),
(0, '', '', '', ''),
(0, '', '', '', ''),
(0, 'anurag kumar', 'abgfj@gmail.com', '98547854896', '125478965874'),
(0, 'Krishnangi Borgohain', '', '', ''),
(0, 'Krishnangi', 'abcddfadf@gmail.com', '9101033690', 'Duliajan, Assam'),
(0, 'Krishnangi', 'abcddfadf@gmail.com', '9101033690', 'Duliajan, Assam');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`) VALUES
(1, 'hello everyone');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `amount`, `description`) VALUES
(1, '3 Months', '5000', 'This package included the basics things for a beginners'),
(4, '6 Months Course', '12000', 'In this course member can make their body prfect. They can use every equipments. They got helps from the trainer.'),
(5, '12 Months Course', '20000', 'In this course include everything from beginners too the advance level, In this course members learn every basics things and after 6 month they can take every equipments.');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `package`, `amount`, `date`) VALUES
(2, 'Debashish', '3 Months', '6000', '17-09-2021'),
(3, 'Sweta', '6 Months Course', '1500', '18-09-2021');

-- --------------------------------------------------------

--
-- Table structure for table `registrationmember`
--

CREATE TABLE `registrationmember` (
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
-- Dumping data for table `registrationmember`
--

INSERT INTO `registrationmember` (`id`, `firstname`, `middlename`, `lastname`, `email`, `phone`, `address`, `caddress`, `adhar`) VALUES
(3, 'Debashish', '', 'Baruah', 'cs19msiit005@kazirangauniversity.in', '9101033690', 'Dibrugarh, Assam', 'Naharkatia, Assam', '123456789012'),
(4, 'Sweta', 'Kumari', 'Mishra', 'cs19msiit016@kazirangauniversity.in', '7638062621', 'Jorhat, Assam', 'Jorhat, Asssam', '605737759956'),
(5, 'Jimmy', '', 'Basumatari', 'cs19msiit011@kazirangauniversity.in', '9101033690', 'Dhekiajuli, sonitpur, Assam', 'Dhekiajuli, sonitpur, Assam', '123456789012'),
(6, 'Jimmy', '', 'Basumatari', 'cs19msiit011@kazirangauniversity.in', '9101033690', 'Dhekiajuli, sonitpur, Assam', 'Dhekiajuli, sonitpur, Assam', '123456789012'),
(8, 'Debashish', '', 'Baruah', 'ldfasdfk054@gmail.com', '784525854587', 'Dibrugarh, Assam', 'Dibrugarh', '123456789012');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
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
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `firstname`, `middlename`, `lastname`, `phone`, `email`, `experience`, `address`, `adhar`) VALUES
(2, 'Homen', '', 'Nath', '', 'Homennath444@gmail.com', '5 Years', 'Vill: Majarchuba', '879525486589'),
(3, 'Gourav ', 'Kumar', 'Gogoi', '7638062621', 'cs19msiit004@kazirangauniversity.in', '5 Years', 'Dhemaji, Assam', '1234256789032'),
(4, 'Dbashish', '', 'Baruah', '7845258545', 'cs19msiit005@kazirangauniversity.in', '3', 'Dibrugarh, Assam', '213456789032');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminpass`
--
ALTER TABLE `adminpass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_feedback`
--
ALTER TABLE `customer_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrationmember`
--
ALTER TABLE `registrationmember`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminpass`
--
ALTER TABLE `adminpass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_feedback`
--
ALTER TABLE `customer_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registrationmember`
--
ALTER TABLE `registrationmember`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
