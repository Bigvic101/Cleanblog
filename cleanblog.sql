-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 29, 2021 at 04:53 PM
-- Server version: 5.7.33-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cleanblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_tbl`
--

CREATE TABLE `comment_tbl` (
  `ID` int(11) NOT NULL,
  `comment_name` varchar(50) NOT NULL,
  `comment_title` varchar(50) NOT NULL,
  `comment_message` varchar(50) NOT NULL,
  `comment_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_tbl`
--

INSERT INTO `comment_tbl` (`ID`, `comment_name`, `comment_title`, `comment_message`, `comment_date`) VALUES
(1, 'Oluwatoni', 'Nice one', 'Extremely hillarious', 'Thursday'),
(2, 'Nice', 'Number 2', 'To check', 'Friday'),
(3, 'Nice', 'Number 2', 'To check', 'Friday');

-- --------------------------------------------------------

--
-- Table structure for table `csv_tbl`
--

CREATE TABLE `csv_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csv_tbl`
--

INSERT INTO `csv_tbl` (`id`, `name`, `email`, `phone`, `status`) VALUES
(5, 'Crystal', 'John Smith', '9091909194', 'Active'),
(6, 'Clean', 'Advert Brown', '9091909194', 'Active'),
(7, 'Iron Man', 'Jimmy K', '9091909194', 'Active'),
(8, 'Harry Potter', 'Aden Cario', '9091909194', 'Active'),
(9, 'Dream', 'Saleem Akhtar', '9091909194', 'Active'),
(10, 'Hope', 'Markus', '9091909194', 'Active'),
(11, 'Destiny', 'Ana Helly', '9091909194', 'Active'),
(12, 'Wild', 'Robert', '9091909194', 'Active'),
(13, 'Idea', 'Patison', '9091909194', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `signup_tbl`
--

CREATE TABLE `signup_tbl` (
  `ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Miscallenous` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup_tbl`
--

INSERT INTO `signup_tbl` (`ID`, `Email`, `Password`, `Miscallenous`) VALUES
(1, 'toni@gmail.com', '123456', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_tbl`
--
ALTER TABLE `comment_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `csv_tbl`
--
ALTER TABLE `csv_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup_tbl`
--
ALTER TABLE `signup_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment_tbl`
--
ALTER TABLE `comment_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `csv_tbl`
--
ALTER TABLE `csv_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `signup_tbl`
--
ALTER TABLE `signup_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
