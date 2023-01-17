-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 12:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `level_login`
--

CREATE TABLE `level_login` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `level_login`
--

INSERT INTO `level_login` (`id`, `user`, `password`) VALUES
(1, 'admin', 'admin');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `pass`, `type`) VALUES
(3, 'Apoorv Sharat', '20cs1a1006@kristujayanti.com', '123', 0),
(4, 'Suyash Anurag', '20cs1a4199@kristujayanti.com', '123', 0),
(5, 'Rishi Naman Singh', '21bcad51@kristujayanti.com', '123', 0),
(6, 'Rohit Raj', '20cs1h1039@kristujayanti.com', '123', 0),
(7, 'Shakir Ali', '21bcae35@kristujayanti.com', '123', 0),
(8, 'Sayan Ghosh', '20cs1a3141@kristujayanti.com', '123', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id`, `uid`, `name`, `level`, `type`, `score`, `time`) VALUES
(114, 1, 'Test', 2, 3, 0, '2023-01-12 11:56:19'),
(115, 2, 'Test2', 2, 3, 0, '2023-01-13 11:26:48'),
(116, 2, 'Test2', 4, 3, 0, '2023-01-13 11:27:10'),
(117, 2, 'Test2', 5, 3, 0, '2023-01-13 11:27:16'),
(118, 2, 'Test2', 6, 3, 0, '2023-01-13 11:27:25'),
(119, 2, 'Test2', 1, 3, 0, '2023-01-13 11:31:04'),
(120, 2, 'Test2', 3, 3, 0, '2023-01-13 11:33:36'),
(121, 2, 'Test2', 6, 2, 0, '2023-01-13 11:35:41'),
(122, 1, 'Test', 1, 3, 0, '2023-01-14 12:50:15'),
(123, 1, 'Test', 5, 3, 0, '2023-01-17 00:36:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hints`
--
ALTER TABLE `hints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level_login`
--
ALTER TABLE `level_login`
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
-- AUTO_INCREMENT for table `level_login`
--
ALTER TABLE `level_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
