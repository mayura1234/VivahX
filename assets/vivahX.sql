-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2022 at 04:14 PM
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
-- Database: `vivahx`
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
  `aadhar` mediumblob NOT NULL,
  `qualification` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`rec_id`, `fname`, `minit`, `lname`, `phone`, `aphone`, `aemail`, `address`, `height`, `weight`, `complexion`, `face_photo`, `body_photo`, `about`, `profession`, `earnings`, `requirement`, `aadhar`, `qualification`) VALUES
('2222', 'keshava', '', 'murali', 99999, 0, '', '', 0.00, 0.00, '', '', '', '', '', 0.00, '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `family_id` char(4) NOT NULL,
  `father` varchar(25) NOT NULL,
  `mother` varchar(25) NOT NULL,
  `fa_occu` varchar(50) NOT NULL,
  `mo_occu` varchar(50) NOT NULL,
  `bro_no` int(2) NOT NULL,
  `sis_no` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` varchar(4) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `user_id` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jaataka`
--

CREATE TABLE `jaataka` (
  `jtk_id` varchar(4) NOT NULL,
  `gotra` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `paada` int(2) NOT NULL,
  `nakshatra` varchar(20) NOT NULL,
  `user_id` char(4) NOT NULL,
  `document` longblob NOT NULL
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
  `rec_id` char(4) DEFAULT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `uname`, `password`, `acnt_type`, `validate`, `rec_id`, `email`) VALUES
('0162', 'jajnj', 'haa123', 'bg', 0, '1111', 'janj@j.c'),
('1101', 'Guru', 'pass', 'ma', 0, '1111', 'gururaj@gmail.com'),
('1102', 'hi', 'may123@', 'on', 0, '1111', 'hey@1.com'),
('2211', 'kes2', '123', 'as', 0, '1223', 'kes2@k.c'),
('2222', 'kes', '123', 'a', 0, '1112', 'ke@c.c'),
('3035', 'c', 'hihi44', 'bg', 0, '1111', 'c@c.com');

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
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`family_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`),
  ADD KEY `FEEDBACK` (`user_id`);

--
-- Indexes for table `jaataka`
--
ALTER TABLE `jaataka`
  ADD PRIMARY KEY (`jtk_id`),
  ADD KEY `JAATAKA` (`user_id`);

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
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `FEEDBACK` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `jaataka`
--
ALTER TABLE `jaataka`
  ADD CONSTRAINT `JAATAKA` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
