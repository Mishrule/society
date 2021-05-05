-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 04:28 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `society`
--

-- --------------------------------------------------------

--
-- Table structure for table `groupings`
--

CREATE TABLE `groupings` (
  `group_id` int(20) NOT NULL,
  `group_name` varchar(250) NOT NULL,
  `date_time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupings`
--

INSERT INTO `groupings` (`group_id`, `group_name`, `date_time`) VALUES
(1, 'Christian Community', 'March-27-2021 22:31:14');

-- --------------------------------------------------------

--
-- Table structure for table `group_activity`
--

CREATE TABLE `group_activity` (
  `groupname` varchar(250) NOT NULL,
  `male` varchar(250) NOT NULL,
  `female` varchar(250) NOT NULL,
  `group_month` varchar(250) NOT NULL,
  `group_year` varchar(250) NOT NULL,
  `group_total` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group_activity`
--

INSERT INTO `group_activity` (`groupname`, `male`, `female`, `group_month`, `group_year`, `group_total`) VALUES
('Christian Community', '25', '1', 'January', '2021', '26');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(50) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `mobilenumber` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `community` varchar(250) NOT NULL,
  `fullmember` varchar(250) NOT NULL,
  `juniormember` varchar(250) NOT NULL,
  `catechumens` varchar(250) NOT NULL,
  `adherents` varchar(250) NOT NULL,
  `registrationdate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `fullname`, `address`, `mobilenumber`, `dob`, `location`, `gender`, `community`, `fullmember`, `juniormember`, `catechumens`, `adherents`, `registrationdate`) VALUES
(2, 'Alfred Quayson', 'Tema', '025489654', '2021-03-02', 'Kumasi', 'Male', 'yes', 'yes', 'yes', 'yes', 'no', 'March-28-2021 09:56:49'),
(3, 'Anord Kwofie', 'Synaide', '26854858', '2021-03-09', ' Tarkwa', 'Male', 'yes', 'no', 'yes', 'yes', 'yes', 'March-30-2021 14:24:01'),
(4, 'Wop3 saa', 'Kumasi', '236589654', '2021-04-07', 'Kumasi', 'Female', 'yes', 'yes', 'no', 'yes', 'no', 'April-05-2021 22:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `operations`
--

CREATE TABLE `operations` (
  `operation_id` int(20) NOT NULL,
  `operation_name` varchar(250) NOT NULL,
  `date_time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `operations`
--

INSERT INTO `operations` (`operation_id`, `operation_name`, `date_time`) VALUES
(1, 'Number of Classes', 'March-27-2021 22:50:11'),
(2, 'Class Membership (Total)', 'March-28-2021 12:12:54');

-- --------------------------------------------------------

--
-- Table structure for table `operationtype`
--

CREATE TABLE `operationtype` (
  `operationtype` varchar(250) NOT NULL,
  `week1` varchar(250) NOT NULL,
  `week2` varchar(250) NOT NULL,
  `week3` varchar(250) NOT NULL,
  `week4` varchar(250) NOT NULL,
  `week5` varchar(250) NOT NULL,
  `total` varchar(250) NOT NULL,
  `month` varchar(250) NOT NULL,
  `years` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `operationtype`
--

INSERT INTO `operationtype` (`operationtype`, `week1`, `week2`, `week3`, `week4`, `week5`, `total`, `month`, `years`) VALUES
('Number of Classes', '10', '25', '20', '5', '2', '62', 'January', '2021'),
('Class Membership (Total)', '12', '25', '33', '0', '2', '72', 'January', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

CREATE TABLE `society` (
  `society_id` int(20) NOT NULL,
  `society_name` varchar(250) NOT NULL,
  `circuit_name` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `registrationdate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`society_id`, `society_name`, `circuit_name`, `location`, `registrationdate`) VALUES
(1, 'Camp City', 'Tarkwa', 'Tarkwa', 'March-27-2021 22:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `user_id` int(20) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `userlocation` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `societyname` varchar(250) NOT NULL,
  `circuitname` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `registrationDate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `year_id` int(20) NOT NULL,
  `years_year` varchar(250) NOT NULL,
  `year_created` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`year_id`, `years_year`, `year_created`) VALUES
(1, '2021', 'March-27-2021 23:24:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groupings`
--
ALTER TABLE `groupings`
  ADD PRIMARY KEY (`group_id`),
  ADD UNIQUE KEY `group_name` (`group_name`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `operations`
--
ALTER TABLE `operations`
  ADD PRIMARY KEY (`operation_id`),
  ADD UNIQUE KEY `operation_name` (`operation_name`);

--
-- Indexes for table `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`society_id`),
  ADD UNIQUE KEY `society_name` (`society_name`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`(20));

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groupings`
--
ALTER TABLE `groupings`
  MODIFY `group_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `operations`
--
ALTER TABLE `operations`
  MODIFY `operation_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `society`
--
ALTER TABLE `society`
  MODIFY `society_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `year_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
