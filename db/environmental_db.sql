-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 07:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `environmental_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiztbl`
--

CREATE TABLE `quiztbl` (
  `quiz_id` int(11) NOT NULL,
  `quiz_no` int(11) NOT NULL,
  `lesson_id` varchar(50) NOT NULL,
  `question` varchar(250) NOT NULL,
  `ans1` varchar(50) NOT NULL,
  `ans2` varchar(50) NOT NULL,
  `ans3` varchar(50) NOT NULL,
  `ans4` varchar(50) NOT NULL,
  `correct_ans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiztbl`
--

INSERT INTO `quiztbl` (`quiz_id`, `quiz_no`, `lesson_id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `correct_ans`) VALUES
(1, 1, '2', 'Q1', '1', '2', '3', '5', '1'),
(2, 2, '2', 'Q2', '1', '2', '3', '4', '2');

-- --------------------------------------------------------

--
-- Table structure for table `resulttbl`
--

CREATE TABLE `resulttbl` (
  `result_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `total_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiztbl`
--
ALTER TABLE `quiztbl`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `resulttbl`
--
ALTER TABLE `resulttbl`
  ADD PRIMARY KEY (`result_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiztbl`
--
ALTER TABLE `quiztbl`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resulttbl`
--
ALTER TABLE `resulttbl`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
