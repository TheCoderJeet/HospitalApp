-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 05:36 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `ipdpatients`
--

CREATE TABLE `ipdpatients` (
  `id` int(255) NOT NULL,
  `ipdid` int(5) UNSIGNED ZEROFILL NOT NULL,
  `opdid` int(5) UNSIGNED ZEROFILL NOT NULL,
  `patient` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `fatherORhusband` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `caste` text NOT NULL,
  `gender` text NOT NULL,
  `disease` text NOT NULL,
  `fee` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ipdpatients`
--

INSERT INTO `ipdpatients` (`id`, `ipdid`, `opdid`, `patient`, `name`, `fatherORhusband`, `date`, `address`, `age`, `caste`, `gender`, `disease`, `fee`) VALUES
(70, 00001, 00001, 'General', 'ggg', 'jiten', '2021-12-25', 'hhh', 3, 'hindu', 'Female', 'teeth', '40/-'),
(71, 00002, 00002, 'Other', 'Hariprashaad Mishra', 'Dhanuram', '2021-12-25', 'sadasd', 55, 'hindu', 'Male', 'Skin', 'Free'),
(72, 00003, 00003, 'ANC', 'kk', 'Sevak', '2021-12-25', 'kk', 4, 'st', 'Male', 'as', 'Free');

-- --------------------------------------------------------

--
-- Table structure for table `mlcpatients`
--

CREATE TABLE `mlcpatients` (
  `id` int(255) NOT NULL,
  `mlcid` int(5) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(255) NOT NULL,
  `fatherORhusband` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `caste` text NOT NULL,
  `gender` text NOT NULL,
  `disease` text NOT NULL,
  `fee` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mlcpatients`
--

INSERT INTO `mlcpatients` (`id`, `mlcid`, `name`, `fatherORhusband`, `date`, `address`, `age`, `caste`, `gender`, `disease`, `fee`) VALUES
(45, 00001, 'Hariprashaad Mishra', 'Dhanuram HarindarPrashaad Mishra', '2021-12-25', '79 asdas asdas asdasd asdad aSDAS', 10, 'hindu', 'Female', 'Skin', 'Free'),
(46, 00002, 'rkp', 'bl', '2021-12-25', 'bhag', 3, 'st', 'Male', '', 'Free');

-- --------------------------------------------------------

--
-- Table structure for table `opdpatients`
--

CREATE TABLE `opdpatients` (
  `id` int(255) NOT NULL,
  `opdid` int(5) UNSIGNED ZEROFILL NOT NULL,
  `patient` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fatherORhusband` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `caste` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `disease` text NOT NULL,
  `fee` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opdpatients`
--

INSERT INTO `opdpatients` (`id`, `opdid`, `patient`, `name`, `fatherORhusband`, `date`, `address`, `age`, `caste`, `gender`, `disease`, `fee`) VALUES
(109, 00001, 'General', 'ggg', 'jiten', '2021-12-25', 'hhh', 3, 'hindu', 'Female', 'teeth', '10/-'),
(110, 00002, 'Other', 'Hariprashaad Mishra', 'Dhanuram HarindarPrashaad Mishra', '2021-12-01', '', 55, 'hindu', 'Male', 'Skin', 'Free'),
(111, 00003, 'ANC', 'kk', 'Sevak', '2021-12-25', 'kk', 4, 'st', 'Male', 'as', 'Free');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `occupation` text NOT NULL,
  `gender` text NOT NULL,
  `bio` text NOT NULL,
  `hobbies` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `address`, `dob`, `occupation`, `gender`, `bio`, `hobbies`) VALUES
(20, 'admin', 'Patidar', 'abcdxyz@mailinator.com', '123456', 222, '112, xyz city cojuntry', '2020-11-14', 'Employee', 'Male', 'GGG', 'Movies,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ipdpatients`
--
ALTER TABLE `ipdpatients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mlcpatients`
--
ALTER TABLE `mlcpatients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opdpatients`
--
ALTER TABLE `opdpatients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ipdpatients`
--
ALTER TABLE `ipdpatients`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `mlcpatients`
--
ALTER TABLE `mlcpatients`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `opdpatients`
--
ALTER TABLE `opdpatients`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
