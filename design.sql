-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 06:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `design`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '7b902e6ff1db9f560443f2048974fd7d386975b0'),
(2, 'admin', '7b902e6ff1db9f560443f2048974fd7d386975b0'),
(3, 'admin', '7b902e6ff1db9f560443f2048974fd7d386975b0'),
(4, 'admin', '7b902e6ff1db9f560443f2048974fd7d386975b0'),
(5, 'admin', '7b902e6ff1db9f560443f2048974fd7d386975b0'),
(6, 'admin', '7b902e6ff1db9f560443f2048974fd7d386975b0');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `items` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registrationweb`
--

CREATE TABLE `registrationweb` (
  `id` int(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `items` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrationweb`
--

INSERT INTO `registrationweb` (`id`, `contact`, `name`, `address`, `email`, `items`, `date`) VALUES
(1, '', 'Tharusha', '', 'gshcwucvw@gmail.com', '', '0000-00-00 00:00:00'),
(2, '', 'pulasthigama', '', 'tharusha@gmail.com', '', '0000-00-00 00:00:00'),
(3, '0712412987', 'Tharusha', 'pulasthigama', 'gshcwucvw@gmail.com', 'full stack web developer', '2023-10-02 10:55:11'),
(4, '0720529087', 'achintha', 'pulasthigama', 'gshcwucvw@gmail.com', 'full stack web developer', '2023-10-02 10:55:45'),
(5, '0712412987', 'nadun', '400', 'tharusha@gmail.com', 'software development', '2023-10-02 12:06:15'),
(6, 'gsdgsdgsd', 'gsdgsdg', 'sdgsdgds', 'gdsgds@gmail.com', 'full stack web developer', '2023-10-08 20:04:33'),
(7, 'vdvdvdvssvs', 'vsvvsvsvs', 'h', 'tharusha@gmail.com', 'full stack web developer', '2023-10-09 08:31:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrationweb`
--
ALTER TABLE `registrationweb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrationweb`
--
ALTER TABLE `registrationweb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
