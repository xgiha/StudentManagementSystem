-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 09:38 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `fee` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `content`, `fee`, `duration`, `img`) VALUES
(2, 'Java', 'Java, Javascript', 'Rs 20000', '10 months', 'course3.jpg'),
(3, 'PHP', 'HTML, CSS, Javascript, PHP', 'Rs 20000', '3 months', 'course1.jpg'),
(5, 'PHP', 'HTML, CSS, Javascript, PHP', 'Rs 20000', '3 months', 'course3.jpg'),
(6, 'C++', 'C++', 'Rs 30000', '1 Month', 'course4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fullname`, `username`, `dob`, `course`, `gender`, `password`, `email`, `usertype`) VALUES
(14, 'Gehan', 'Gehan', '1998/05/21', 'Java', 'Male', '4a7d1ed414474e4033ac29ccb8653d9b', 'gehan@live.com', 'User'),
(15, 'Max', 'Max', '05/01/1998', 'Null', 'Male', '4a7d1ed414474e4033ac29ccb8653d9b', 'max@gmail.com', 'User'),
(16, 'Ben', 'Ben', '05/01/1998', 'Null', 'Male', '4a7d1ed414474e4033ac29ccb8653d9b', 'Ben@gmail.com', 'User'),
(17, 'Jack', 'Jack', '05/26/2000', 'Null', 'Male', '4a7d1ed414474e4033ac29ccb8653d9b', 'jack@gmail.com', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
