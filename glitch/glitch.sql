-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 02:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glitch`
--

-- --------------------------------------------------------

--
-- Table structure for table `hints`
--

CREATE TABLE `hints` (
  `id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `hint` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hints`
--

INSERT INTO `hints` (`id`, `level`, `hint`) VALUES
(1, 1, 'Test'),
(2, 1, 'Test2'),
(3, 2, 'Test Level 2 Hint'),
(4, 3, 'Level 3 Hint'),
(5, 4, 'Level 4 Hint'),
(6, 5, 'Level 5 Hint'),
(7, 6, 'Level 6 Hint');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `pass`, `type`) VALUES
(1, 'Test', 'test@gmail.com', '12345', 0);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id`, `uid`, `name`, `level`, `type`, `score`, `time`) VALUES
(85, 1, 'Test', 2, 3, 0, '2023-01-11 18:02:10'),
(86, 1, 'Test', 2, 1, 0, '2023-01-11 18:08:16'),
(91, 1, 'Test', 2, 2, 1, '2023-01-11 18:09:10'),
(96, 1, 'Test', 3, 2, 4, '2023-01-11 18:20:31'),
(99, 1, 'Test', 3, 3, 0, '2023-01-11 18:27:28'),
(100, 1, 'Test', 3, 1, 2, '2023-01-11 18:29:21'),
(101, 1, 'Test', 4, 2, 2, '2023-01-11 18:36:53'),
(102, 1, 'Test', 4, 1, 2, '2023-01-11 18:37:13'),
(103, 1, 'Test', 4, 3, 0, '2023-01-11 18:38:19'),
(104, 1, 'Test', 1, 3, 0, '2023-01-11 18:39:17'),
(105, 1, 'Test', 1, 3, 0, '2023-01-11 18:39:17'),
(106, 1, 'Test', 1, 3, 0, '2023-01-11 18:39:19'),
(107, 1, 'Test', 1, 3, 0, '2023-01-11 18:39:19'),
(108, 1, 'Test', 5, 3, 0, '2023-01-11 18:42:46'),
(109, 1, 'Test', 5, 2, 4, '2023-01-11 18:42:58'),
(110, 1, 'Test', 5, 1, 2, '2023-01-11 18:43:10'),
(111, 1, 'Test', 6, 3, 0, '2023-01-11 18:48:28'),
(112, 1, 'Test', 6, 2, 4, '2023-01-11 18:48:38'),
(113, 1, 'Test', 6, 1, 2, '2023-01-11 18:48:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hints`
--
ALTER TABLE `hints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hints`
--
ALTER TABLE `hints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
