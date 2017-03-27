-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2017 at 07:15 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `name` varchar(100) NOT NULL,
  `path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`name`, `path`) VALUES
('Lab Assignment IT351 HCI 2017.pdf', 'upload/Lab Assignment IT351 HCI 2017.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `c_rate` int(1) NOT NULL,
  `t_rate` int(1) NOT NULL,
  `t_k` int(1) NOT NULL,
  `t_c` int(1) NOT NULL,
  `c_i` int(1) NOT NULL,
  `c_e` int(1) NOT NULL,
  `c_m` int(1) NOT NULL,
  `rollno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`c_rate`, `t_rate`, `t_k`, `t_c`, `c_i`, `c_e`, `c_m`, `rollno`) VALUES
(5, 5, 1, 1, 1, 1, 1, '00ITF01');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `ques` varchar(1000) NOT NULL,
  `ans` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`ques`, `ans`) VALUES
('	x+q', '	2');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `rollno` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `mq1` int(5) NOT NULL,
  `mq2` int(5) NOT NULL,
  `mq3` int(5) NOT NULL,
  `ml` int(5) NOT NULL,
  `eq1` int(5) NOT NULL,
  `eq2` int(5) NOT NULL,
  `eq3` int(5) NOT NULL,
  `eq4` int(5) NOT NULL,
  `el` int(5) NOT NULL,
  `assignment` decimal(5,2) NOT NULL,
  `project` int(5) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `performance` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`rollno`, `name`, `mq1`, `mq2`, `mq3`, `ml`, `eq1`, `eq2`, `eq3`, `eq4`, `el`, `assignment`, `project`, `course_id`, `performance`) VALUES
('00ITF01', 'Name1', 13, 12, 0, 8, 15, 20, 10, 5, 8, '12.50', 20, 'IT351', '60.75'),
('00ITF02', 'Name2', 20, 20, 0, 8, 12, 15, 13, 10, 8, '13.00', 22, 'IT351', '67.50'),
('00ITF03', 'Name3', 10, 20, 0, 7, 16, 16, 18, 10, 8, '13.00', 19, 'IT351', '64.00'),
('00ITF04', 'Name4', 20, 10, 1, 7, 13, 17, 20, 10, 7, '13.00', 18, 'IT351', '62.30'),
('00ITF05', 'Name5', 20, 20, 3, 9, 15, 17, 23, 10, 8, '14.00', 21, 'IT351', '72.90'),
('00ITF06', 'Name6', 12, 13, 0, 6, 20, 12, 15, 8, 7, '13.00', 19, 'IT351', '59.50'),
('00ITF07', 'Name7', 20, 20, 4, 7, 17, 20, 16, 10, 8, '14.00', 19, 'IT351', '69.60'),
('00ITF08', 'Name8', 10, 12, 0, 8, 15, 15, 17, 10, 8, '13.00', 22, 'IT351', '64.20'),
('00ITF09', 'Name9', 20, 20, 6, 9, 22, 22, 15, 10, 7, '14.00', 22, 'IT351', '75.00'),
('00ITF10', 'Name10', 20, 20, 0, 8, 17, 15, 18, 10, 7, '12.50', 20, 'IT351', '67.25'),
('00ITF11', 'Name11', 20, 20, 0, 7, 22, 20, 20, 8, 8, '13.50', 18, 'IT351', '69.25'),
('00ITF12', 'Name12', 19, 20, 7, 8, 22, 20, 18, 10, 8, '13.00', 20, 'IT351', '73.30'),
('00ITF13', 'Name13', 10, 10, 0, 8, 15, 18, 18, 7, 7, '13.00', 19, 'IT351', '59.90'),
('00ITF14', 'Name14', 19, 11, 8, 7, 20, 13, 10, 10, 7, '13.00', 19, 'IT351', '63.30'),
('00ITF15', 'Name15', 20, 20, 0, 9, 15, 22, 18, 10, 8, '13.50', 22, 'IT351', '72.75'),
('00ITF16', 'Name16', 20, 20, 1, 8, 18, 18, 18, 11, 7, '13.00', 20, 'IT351', '69.30');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`username`, `password`, `type`) VALUES
('001', '001', 0),
('002', '002', 0),
('00ITF01', '01', 1),
('00ITF02', '02', 1),
('00ITF03', '03', 1),
('admin', 'admin', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
