-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2017 at 10:49 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stims`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Department_id` int(11) NOT NULL,
  `Dept_Name` varchar(255) NOT NULL,
  `School_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department_id`, `Dept_Name`, `School_id`) VALUES
(1, 'IT', 1),
(2, 'SNE', 2);

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `Id` int(11) NOT NULL,
  `AdmNo` varchar(30) NOT NULL,
  `Fee` int(11) DEFAULT NULL,
  `Amount_Paid` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `Path` varchar(255) NOT NULL,
  `Name` varchar(65) NOT NULL,
  `AdmNo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `Prog_name` varchar(255) NOT NULL,
  `Prog_Id` int(11) NOT NULL,
  `Department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`Prog_name`, `Prog_Id`, `Department_id`) VALUES
('BscIT', 5, 1),
('BedSne', 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `Unit_code` varchar(10) NOT NULL,
  `Unit_name` varchar(100) NOT NULL,
  `AdmNo` varchar(30) NOT NULL,
  `Results` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `School_name` varchar(255) NOT NULL,
  `School_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`School_name`, `School_Id`) VALUES
('Computing and Informatics', 1),
('Education', 2);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Fname` varchar(25) NOT NULL,
  `Mname` varchar(25) NOT NULL,
  `Lname` varchar(25) NOT NULL,
  `AdmNo` varchar(30) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `DOA` varchar(50) NOT NULL,
  `IdNo` varchar(12) NOT NULL,
  `Tel` varchar(20) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Image` blob,
  `Hash` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Fname`, `Mname`, `Lname`, `AdmNo`, `DOB`, `DOA`, `IdNo`, `Tel`, `Email`, `Password`, `Image`, `Hash`, `active`) VALUES
('Test', 'Test', 'Test', 'test', '04/18/2017', '04/18/2017', 'test', '0702293572', 'o2jose43@gmail.com', '$2y$10$4EhfVfea.2uxx2ZR7wM39.pr00Ew6m7uyMEBKS4OLdgM289k8t5tS', NULL, '0336dcbab05b9d5ad24f4333c7658a0e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `Prog_Id` int(11) NOT NULL,
  `Unit_Name` varchar(100) NOT NULL,
  `Unit_Code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Fname` varchar(25) NOT NULL,
  `Mname` varchar(25) NOT NULL,
  `Lname` varchar(25) NOT NULL,
  `StaffNo` varchar(16) NOT NULL,
  `IdNo` int(12) NOT NULL,
  `Tel` varchar(12) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Hash` text NOT NULL,
  `Regisration_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Is_Admin` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Fname`, `Mname`, `Lname`, `StaffNo`, `IdNo`, `Tel`, `Email`, `Password`, `Hash`, `Regisration_Time`, `Is_Admin`, `active`) VALUES
('Tosby', 'Tosby', 'Tosby', '123456', 123456, '0702293572', 'otienolucie6@gmail.com', '$2y$10$tt.H/SIdIq.2fNLpyOR9E.uxETQsU6wTlcFJtrQ3qNRXQWg0uISMC', '149e9677a5989fd342ae44213df68868', '2017-05-04 12:56:24', 0, 0),
('Test', 'Test', 'Test', 'Test', 28789722, 'Test', 'test@test.com', '$2y$10$jO78.tvtxBUhEAskgvD29OoUWl7WexYkiuFcJDiSirDzHqG8cpssu', '07cdfd23373b17c6b337251c22b7ea57', '2017-05-04 12:44:49', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Department_id`),
  ADD KEY `School_id` (`School_id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `AdmNo` (`AdmNo`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`AdmNo`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `AdmNo` (`AdmNo`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`Prog_Id`),
  ADD KEY `Department_id` (`Department_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Course_code` (`Unit_code`),
  ADD KEY `AdmNo` (`AdmNo`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`School_Id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`AdmNo`),
  ADD UNIQUE KEY `IdNo` (`IdNo`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`Unit_Code`),
  ADD KEY `AdmNo` (`Prog_Id`),
  ADD KEY `AdmNo_2` (`Prog_Id`),
  ADD KEY `Prog_Id` (`Prog_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`StaffNo`),
  ADD UNIQUE KEY `IdNo` (`IdNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `Prog_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `School_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`School_id`) REFERENCES `schools` (`School_Id`);

--
-- Constraints for table `fees`
--
ALTER TABLE `fees`
  ADD CONSTRAINT `fees_ibfk_1` FOREIGN KEY (`AdmNo`) REFERENCES `students` (`AdmNo`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`AdmNo`) REFERENCES `students` (`AdmNo`);

--
-- Constraints for table `programs`
--
ALTER TABLE `programs`
  ADD CONSTRAINT `programs_ibfk_1` FOREIGN KEY (`Department_id`) REFERENCES `department` (`Department_id`);

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`Unit_code`) REFERENCES `units` (`Unit_Code`),
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`AdmNo`) REFERENCES `students` (`AdmNo`);

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `units_ibfk_1` FOREIGN KEY (`Prog_Id`) REFERENCES `programs` (`Prog_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
