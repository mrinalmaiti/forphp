-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2016 at 03:02 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `le_student`
--

CREATE TABLE IF NOT EXISTS `le_student` (
`std_id` int(11) NOT NULL COMMENT 'student id',
  `std_name` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT 'student name',
  `status` enum('Y','N') NOT NULL DEFAULT 'Y' COMMENT 'student status'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `le_student`
--

INSERT INTO `le_student` (`std_id`, `std_name`, `status`) VALUES
(1, 'Srabasti Biswas', 'Y'),
(2, 'Ruby Hazra', 'Y'),
(3, 'Mrinal Maiti', 'Y'),
(4, 'Rahul Thakur', 'Y'),
(5, 'Prabir Sarkar', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `le_student`
--
ALTER TABLE `le_student`
 ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `le_student`
--
ALTER TABLE `le_student`
MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'student id',AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
