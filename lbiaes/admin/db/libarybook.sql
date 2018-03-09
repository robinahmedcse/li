-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2017 at 02:04 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libarybook`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_deposit`
--

CREATE TABLE `tbl_book_deposit` (
  `depositId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `bookId` int(10) NOT NULL,
  `issueDate` varchar(100) NOT NULL,
  `returnDate` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tbl_book_deposit`
--

INSERT INTO `tbl_book_deposit` (`depositId`, `userId`, `bookId`, `issueDate`, `returnDate`, `status`) VALUES
(2, 1, 3, '2017-09-28', '2017-10-05', 1),
(3, 2, 4, '0000-00-00', '0000-00-00', 1),
(4, 1, 4, '0000-00-00', '0000-00-00', 1),
(5, 2, 2, '0000-00-00', '0000-00-00', 1),
(6, 1, 4, '0000-00-00', '0000-00-00', 1),
(7, 2, 4, '09/30/2017', '10/02/2017', 1),
(8, 2, 4, '09/30/2017', '09/30/2017', 1),
(9, 1, 4, '09/30/2017', '10/02/2017', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_info`
--

CREATE TABLE `tbl_book_info` (
  `bookId` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `isbn` int(10) NOT NULL,
  `edition` varchar(25) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tbl_book_info`
--

INSERT INTO `tbl_book_info` (`bookId`, `title`, `isbn`, `edition`, `author`, `publisher`, `category_id`) VALUES
(1, 'C programming ', 1025836, '10th', 'xxx', 'xyz publication', 3),
(2, 'C programming', 1025837, '10th', 'xxx', 'xyz publication', 3),
(3, 'Java', 1025900, '10th', 'yyy', 'aaa publication', 3),
(4, 'Java programming ', 102050, '12th', 'zzz', 'xya', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'IT'),
(2, 'NETWORKING'),
(3, 'programing'),
(4, 'DataBase');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_info`
--

CREATE TABLE `tbl_user_info` (
  `userId` int(10) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `phoneNumber` int(10) NOT NULL,
  `presentAddress` text NOT NULL,
  `parmanentAddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tbl_user_info`
--

INSERT INTO `tbl_user_info` (`userId`, `userName`, `userEmail`, `userPassword`, `phoneNumber`, `presentAddress`, `parmanentAddress`) VALUES
(1, 'Robin Ahmed', 'robin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1677942640, 'tangail', 'tangail'),
(2, 'Piashe', 'piashe@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1677942641, 'tangail', 'tangail'),
(3, 'Zerin', 'zerin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1677942643, 'tangail', 'tangail'),
(4, 'Tabassum', 'tabassum@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1677942644, 'tangail', 'tangail');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book_deposit`
--
ALTER TABLE `tbl_book_deposit`
  ADD PRIMARY KEY (`depositId`);

--
-- Indexes for table `tbl_book_info`
--
ALTER TABLE `tbl_book_info`
  ADD PRIMARY KEY (`bookId`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_user_info`
--
ALTER TABLE `tbl_user_info`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_book_deposit`
--
ALTER TABLE `tbl_book_deposit`
  MODIFY `depositId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_book_info`
--
ALTER TABLE `tbl_book_info`
  MODIFY `bookId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_user_info`
--
ALTER TABLE `tbl_user_info`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
