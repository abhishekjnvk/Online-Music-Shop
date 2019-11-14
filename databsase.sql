-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 12:01 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `songName` varchar(5000) NOT NULL,
  `artist` varchar(5000) NOT NULL,
  `price` varchar(5000) NOT NULL,
  `coverimage` varchar(5000) NOT NULL,
  `url` varchar(5000) NOT NULL,
  `email` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `songName`, `artist`, `price`, `coverimage`, `url`, `email`) VALUES
(8, 'Afreen Afreen', 'Rahat Fateh Ali Khan, Momina Mustehsan', '10', 'http://hck.re/kWWxUI', 'http://hck.re/Rh8KTk', 'admin@admin.com'),
(9, 'Afreen Afreen', 'Rahat Fateh Ali Khan, Momina Mustehsan', '10', 'http://hck.re/kWWxUI', 'http://hck.re/Rh8KTk', 'abhishek@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `fav_songs`
--

CREATE TABLE `fav_songs` (
  `sl` int(11) NOT NULL,
  `songName` varchar(3000) NOT NULL,
  `url` varchar(3000) NOT NULL,
  `artist` varchar(3000) NOT NULL,
  `albumPic` varchar(3000) NOT NULL,
  `email` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fav_songs`
--

INSERT INTO `fav_songs` (`sl`, `songName`, `url`, `artist`, `albumPic`, `email`) VALUES
(5, 'Ae dil', 'http://hck.re/2nCncK', 'Ali Zafar, Sara Haider', 'http://hck.re/eLtjUb', 'abhishek@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `last_played`
--

CREATE TABLE `last_played` (
  `sl` int(11) NOT NULL,
  `songName` varchar(3000) NOT NULL,
  `url` varchar(3000) NOT NULL,
  `artist` varchar(3000) NOT NULL,
  `albumPic` varchar(3000) NOT NULL,
  `email` varchar(3000) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `last_played`
--

INSERT INTO `last_played` (`sl`, `songName`, `url`, `artist`, `albumPic`, `email`, `time`) VALUES
(79, 'Aik Alif', 'http://hck.re/ZeSJFd', 'Saieen Zahoor, Noori', 'http://hck.re/3Cm0IX', 'abhishek@gmail.com', '14/11/2019 04:28:48'),
(80, 'Aaj Rung', 'http://hck.re/H5nMm3', 'Amjad Sabri,  Rahat Fateh Ali Khan', 'http://hck.re/U1bRnt', 'abhishek@gmail.com', '14/11/2019 04:28:49'),
(81, 'Tera woh pyar', 'http://hck.re/64Tzod', 'Momina Mustehsan, Asim Azhar', 'http://hck.re/rlYqJY', 'abhishek@gmail.com', '14/11/2019 04:29:01'),
(82, 'Aaj Rung', 'http://hck.re/H5nMm3', 'Amjad Sabri,  Rahat Fateh Ali Khan', 'http://hck.re/U1bRnt', 'abhishek@gmail.com', '14/11/2019 04:29:04'),
(83, 'Aik Alif', 'http://hck.re/ZeSJFd', 'Saieen Zahoor, Noori', 'http://hck.re/3Cm0IX', 'abhishek@gmail.com', '14/11/2019 04:29:04'),
(84, 'Ae dil', 'http://hck.re/2nCncK', 'Ali Zafar, Sara Haider', 'http://hck.re/eLtjUb', 'abhishek@gmail.com', '14/11/2019 04:29:04'),
(85, 'Aaj Rung', 'http://hck.re/H5nMm3', 'Amjad Sabri,  Rahat Fateh Ali Khan', 'http://hck.re/U1bRnt', 'abhishek@gmail.com', '14/11/2019 04:29:07'),
(86, 'Ae dil', 'http://hck.re/2nCncK', 'Ali Zafar, Sara Haider', 'http://hck.re/eLtjUb', 'abhishek@gmail.com', '14/11/2019 04:29:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sl` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `varification` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sl`, `email`, `password`, `username`, `varification`) VALUES
(1, 'abhishek@gmail.com', 'admin', 'abhi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE `verification` (
  `sl` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `token` varchar(500) NOT NULL,
  `code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fav_songs`
--
ALTER TABLE `fav_songs`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `last_played`
--
ALTER TABLE `last_played`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `verification`
--
ALTER TABLE `verification`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fav_songs`
--
ALTER TABLE `fav_songs`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `last_played`
--
ALTER TABLE `last_played`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `verification`
--
ALTER TABLE `verification`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
