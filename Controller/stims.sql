-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2017 at 02:58 PM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stims`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Fname` varchar(25) NOT NULL,
  `Mname` varchar(25) NOT NULL,
  `Lname` varchar(25) NOT NULL,
  `StaffNo` varchar(16) NOT NULL,
  `IdNo` int(12) NOT NULL,
  `Tel` varchar(12) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Time` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Course_Id` int(11) NOT NULL,
  `AdmNo` varchar(30) NOT NULL,
  `Course_Name` varchar(100) NOT NULL,
  `Course_Code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `Id` int(11) NOT NULL,
  `AdmNo` varchar(30) NOT NULL,
  `Fee` int(11) NOT NULL,
  `Amount_Paid` int(11) NOT NULL,
  `Balance` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `Course_code` varchar(10) NOT NULL,
  `Course_name` varchar(100) NOT NULL,
  `AdmNo` varchar(30) NOT NULL,
  `Results` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Fname` varchar(25) NOT NULL,
  `Mname` varchar(25) NOT NULL,
  `Lname` varchar(25) NOT NULL,
  `AdmNo` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `DOA` date NOT NULL,
  `IdNo` varchar(12) NOT NULL,
  `School` varchar(255) NOT NULL,
  `Dept` varchar(255) NOT NULL,
  `Course` varchar(255) NOT NULL,
  `Tel` int(12) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`StaffNo`),
  ADD UNIQUE KEY `IdNo` (`IdNo`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`Course_Code`),
  ADD KEY `AdmNo` (`AdmNo`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `AdmNo` (`AdmNo`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Course_code` (`Course_code`),
  ADD KEY `AdmNo` (`AdmNo`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`AdmNo`),
  ADD UNIQUE KEY `IdNo` (`IdNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`AdmNo`) REFERENCES `students` (`AdmNo`);

--
-- Constraints for table `fees`
--
ALTER TABLE `fees`
  ADD CONSTRAINT `fees_ibfk_1` FOREIGN KEY (`AdmNo`) REFERENCES `students` (`AdmNo`);

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`Course_code`) REFERENCES `courses` (`Course_Code`),
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`AdmNo`) REFERENCES `students` (`AdmNo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
