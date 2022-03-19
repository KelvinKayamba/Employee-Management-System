-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 11:41 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee-management`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `userid` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(12) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(8) NOT NULL,
  `role` varchar(10) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`userid`, `fullname`, `username`, `email`, `password`, `role`, `status`) VALUES
(1, 'Kelvin Kayamba', 'kelvin', 'kelkayamba@gmail.com', 'kel12KEL', 'admin', '0'),
(2, 'Thoko Chiwisa', 'thoko', 'thokokayamba@gmail.com', 'chi123TK', 'user', '0');

-- --------------------------------------------------------

--
-- Table structure for table `aleave`
--

CREATE TABLE `aleave` (
  `leaveid` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `post` varchar(100) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `employeeid` varchar(100) NOT NULL,
  `reason` varchar(400) NOT NULL,
  `nodays` int(12) NOT NULL,
  `startdate` date NOT NULL,
  `finishdate` date NOT NULL,
  `returnday` date NOT NULL,
  `leaveaddress` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aleave`
--

INSERT INTO `aleave` (`leaveid`, `fullname`, `post`, `grade`, `employeeid`, `reason`, `nodays`, `startdate`, `finishdate`, `returnday`, `leaveaddress`, `date`) VALUES
(1, 'Michael Kayamba', 'System analyst', 'K', '3', 'sick', 5, '2021-09-29', '2021-10-29', '2021-11-29', '18B', '2021-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendanceid` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `employeeid` varchar(100) NOT NULL,
  `attendancetype` varchar(20) NOT NULL,
  `attenddescription` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `initial` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendanceid`, `fullname`, `employeeid`, `attendancetype`, `attenddescription`, `date`, `initial`) VALUES
(1, 'Kelvin Kayamba', '1', 'Present', '', '2021-09-28', 'KK'),
(2, 'moreen msewu', '2', 'Absent', 'sick', '2021-09-28', 'MM');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `deptno` varchar(100) NOT NULL,
  `departmentname` varchar(100) NOT NULL,
  `employeeid` varchar(100) NOT NULL,
  `ministry` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `roomno` varchar(50) NOT NULL,
  `post` varchar(100) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `dateofappoint` date NOT NULL,
  `salary` varchar(100) NOT NULL,
  `terms` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`deptno`, `departmentname`, `employeeid`, `ministry`, `location`, `roomno`, `post`, `grade`, `dateofappoint`, `salary`, `terms`) VALUES
('2000', 'IT', '1', 'Transport', 'upstair', '20', 'System analyst', 'M', '2021-09-30', '400 000', 'permanet');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeid` varchar(100) NOT NULL,
  `prefix` varchar(5) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `dateofbirth` date NOT NULL,
  `sex` varchar(9) NOT NULL,
  `maritialstatus` varchar(10) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `nationality` varchar(25) NOT NULL,
  `district` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL,
  `traditionalauthority` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `disability` varchar(50) NOT NULL,
  `maidenname` varchar(50) NOT NULL,
  `nextofkin` varchar(70) NOT NULL,
  `addressofkin` text NOT NULL,
  `intial` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeid`, `prefix`, `fullname`, `dateofbirth`, `sex`, `maritialstatus`, `qualification`, `nationality`, `district`, `village`, `traditionalauthority`, `address`, `disability`, `maidenname`, `nextofkin`, `addressofkin`, `intial`) VALUES
('1', 'Mr', 'Kelvin Kayamba', '2000-01-13', 'Male', 'Single', 'Level 4 Diploma in Computing', 'Malawian', 'Ntchisi', 'Malomo', 'Chilooko', '18 B Malawi', 'none', 'N/A', 'Thoko Chiwisa', '18 A', 'KK');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `start` date NOT NULL,
  `stime` varchar(12) NOT NULL,
  `end` date NOT NULL,
  `ftime` time(6) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `description`, `start`, `stime`, `end`, `ftime`, `status`) VALUES
(1, 'meeting', 'Ungrade of system', '2021-10-04', '00:00:00.000', '2021-10-05', '00:00:00.000000', 0),
(2, 'IT conference', 'Discussion about projects', '2021-10-05', '00:00:00.000', '2021-10-06', '00:00:00.000000', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `aleave`
--
ALTER TABLE `aleave`
  ADD PRIMARY KEY (`leaveid`),
  ADD UNIQUE KEY `foreign key` (`employeeid`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendanceid`),
  ADD UNIQUE KEY `foreign key` (`employeeid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`deptno`),
  ADD UNIQUE KEY `foreign key` (`employeeid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeid`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `userid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aleave`
--
ALTER TABLE `aleave`
  MODIFY `leaveid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendanceid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
