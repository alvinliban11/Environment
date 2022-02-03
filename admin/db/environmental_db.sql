-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 01:47 PM
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
-- Table structure for table `admintbl`
--

CREATE TABLE `admintbl` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bookstbl`
--

CREATE TABLE `bookstbl` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_author` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookstbl`
--

INSERT INTO `bookstbl` (`book_id`, `book_name`, `book_author`, `description`) VALUES
(1, 'Book1', 'John Doe', 'Sample Description'),
(2, 'Book2', 'Josh Doe', 'Test Description ');

-- --------------------------------------------------------

--
-- Table structure for table `contexttbl`
--

CREATE TABLE `contexttbl` (
  `context_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `course_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contexttbl`
--

INSERT INTO `contexttbl` (`context_id`, `book_id`, `course_code`) VALUES
(10, 1, 'Water1'),
(11, 2, 'Water1');

-- --------------------------------------------------------

--
-- Table structure for table `coursetbl`
--

CREATE TABLE `coursetbl` (
  `ID` int(11) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `syllabus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursetbl`
--

INSERT INTO `coursetbl` (`ID`, `course_code`, `course_name`, `description`, `syllabus`) VALUES
(1, 'Water1', 'Water Course', 'Test Water', 'Test'),
(2, 'Earth1', 'Earth Course', 'Test Eart', 'Earth Test');

-- --------------------------------------------------------

--
-- Table structure for table `enrolledtbl`
--

CREATE TABLE `enrolledtbl` (
  `enrolled_id` int(11) NOT NULL,
  `learner_id` int(11) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `date_enrolled` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `learnertbl`
--

CREATE TABLE `learnertbl` (
  `learner_id` int(11) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `suffix` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `otp` varchar(50) NOT NULL,
  `verification` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lessontbl`
--

CREATE TABLE `lessontbl` (
  `lesson_id` int(11) NOT NULL,
  `context_id` int(11) NOT NULL,
  `lesson_name` varchar(50) NOT NULL,
  `lesson_no` int(11) NOT NULL,
  `context` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lessontbl`
--

INSERT INTO `lessontbl` (`lesson_id`, `context_id`, `lesson_name`, `lesson_no`, `context`) VALUES
(9, 10, 'Lesson 1', 1, '<p><a href=\"https://www.sitepoint.com/author/abouchefra/\">Ahmed Bouchefra</a></p>\r\n\r\n<p>Ahmed is a technical author and web developer living in Morocco with a Master&#39;s degree in software development. He authors technical content about JavaScript, Angular and Ionic. He is also a fan of entrepreneurship, poetry, and teaching. You can contact me on my&nbsp;<a href=\"https://www.ahmedbouchefra.com/contact/\">personal website</a>&nbsp;and read my other articles on&nbsp;<a href=\"https://www.techiediaries.com/author/ahmed/\">Techiediaries</a>.</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n'),
(10, 10, 'asdasd', 2, '<p>asdasda</p>\r\n');

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
(14, 1, '10', 'Q1', 'A1', 'A2', 'A3', 'A4', 'A4'),
(15, 2, '10', 'Q2', 'A1', 'A2', 'A3', 'A4', 'A1');

-- --------------------------------------------------------

--
-- Table structure for table `resulttbl`
--

CREATE TABLE `resulttbl` (
  `result_id` int(11) NOT NULL,
  `learner_id` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `learner_name` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `total_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resulttbl`
--

INSERT INTO `resulttbl` (`result_id`, `learner_id`, `lesson_id`, `learner_name`, `score`, `total_item`) VALUES
(29, 1, 10, '', 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintbl`
--
ALTER TABLE `admintbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bookstbl`
--
ALTER TABLE `bookstbl`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `contexttbl`
--
ALTER TABLE `contexttbl`
  ADD PRIMARY KEY (`context_id`);

--
-- Indexes for table `coursetbl`
--
ALTER TABLE `coursetbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `enrolledtbl`
--
ALTER TABLE `enrolledtbl`
  ADD PRIMARY KEY (`enrolled_id`);

--
-- Indexes for table `learnertbl`
--
ALTER TABLE `learnertbl`
  ADD PRIMARY KEY (`learner_id`);

--
-- Indexes for table `lessontbl`
--
ALTER TABLE `lessontbl`
  ADD PRIMARY KEY (`lesson_id`);

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
-- AUTO_INCREMENT for table `admintbl`
--
ALTER TABLE `admintbl`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookstbl`
--
ALTER TABLE `bookstbl`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contexttbl`
--
ALTER TABLE `contexttbl`
  MODIFY `context_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `coursetbl`
--
ALTER TABLE `coursetbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enrolledtbl`
--
ALTER TABLE `enrolledtbl`
  MODIFY `enrolled_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `learnertbl`
--
ALTER TABLE `learnertbl`
  MODIFY `learner_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessontbl`
--
ALTER TABLE `lessontbl`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quiztbl`
--
ALTER TABLE `quiztbl`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `resulttbl`
--
ALTER TABLE `resulttbl`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
