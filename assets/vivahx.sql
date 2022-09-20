-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 10, 2022 at 10:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vivah`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `rec_id` char(4) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `minit` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `aphone` int(10) NOT NULL,
  `aemail` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `height` float(2,2) NOT NULL,
  `weight` float(3,2) NOT NULL,
  `complexion` varchar(100) NOT NULL,
  `face_photo` longblob NOT NULL,
  `body_photo` longblob NOT NULL,
  `about` varchar(500) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `earnings` float(6,2) NOT NULL,
  `requirement` varchar(500) NOT NULL,
  `aadhar` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `FAMILY`
--

CREATE TABLE `FAMILY` (
  `dependant_id` varchar(4) NOT NULL,
  `dp_nm` varchar(20) NOT NULL,
  `dp_relation` varchar(20) NOT NULL,
  `dp_occupation` varchar(20) NOT NULL,
  `dp_details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `FEEDBACK`
--

CREATE TABLE `FEEDBACK` (
  `feed_id` varchar(4) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `user_id` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `JAATAKA`
--

CREATE TABLE `JAATAKA` (
  `jtk_id` varchar(4) NOT NULL,
  `gotra` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `paada` int(2) NOT NULL,
  `nakshatra` varchar(20) NOT NULL,
  `user_id` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `QUALIFICATION`
--

CREATE TABLE `QUALIFICATION` (
  `rec_id` varchar(4) NOT NULL,
  `quali1` varchar(20) NOT NULL,
  `quali2` varchar(20) DEFAULT NULL,
  `quali3` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` char(4) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `acnt_type` char(2) NOT NULL,
  `validate` tinyint(1) NOT NULL,
  `rec_id` char(4) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`rec_id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `FEEDBACK`
--
ALTER TABLE `FEEDBACK`
  ADD PRIMARY KEY (`feed_id`),
  ADD KEY `FEEDBACK` (`user_id`);

--
-- Indexes for table `JAATAKA`
--
ALTER TABLE `JAATAKA`
  ADD PRIMARY KEY (`jtk_id`),
  ADD KEY `JAATAKA` (`user_id`);

--
-- Indexes for table `QUALIFICATION`
--
ALTER TABLE `QUALIFICATION`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `user` (`rec_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `FEEDBACK`
--
ALTER TABLE `FEEDBACK`
  ADD CONSTRAINT `FEEDBACK` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `JAATAKA`
--
ALTER TABLE `JAATAKA`
  ADD CONSTRAINT `JAATAKA` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `QUALIFICATION`
--
ALTER TABLE `QUALIFICATION`
  ADD CONSTRAINT `QUALIFICATION` FOREIGN KEY (`rec_id`) REFERENCES `details` (`rec_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user` FOREIGN KEY (`rec_id`) REFERENCES `details` (`rec_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
