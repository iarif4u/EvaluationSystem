-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 30, 2018 at 05:13 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eval`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(20) NOT NULL,
  `username` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role` varchar(191) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `role`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', 'f0cdc29fbf9af3602799603bfbfaa15dc4a46098', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_info`
--

CREATE TABLE `course_info` (
  `id` int(11) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `course_name` varchar(25) NOT NULL,
  `department` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `total_marks` varchar(11) NOT NULL,
  `credit` varchar(11) NOT NULL,
  `remark` varchar(55) NOT NULL,
  `course_content` varchar(155) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_info`
--

INSERT INTO `course_info` (`id`, `course_id`, `course_name`, `department`, `category`, `total_marks`, `credit`, `remark`, `course_content`, `status`) VALUES
(7, '307', 'Marketing Research', 'Marketing', 'Marketing - M', '100', '4', 'ok', 'php_tutorial.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `instructor_register`
--

CREATE TABLE `instructor_register` (
  `id` int(11) NOT NULL,
  `instructor_id` varchar(20) NOT NULL,
  `instructor_name` varchar(120) NOT NULL,
  `department` varchar(55) NOT NULL,
  `designation` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `remark` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instructor_register`
--

INSERT INTO `instructor_register` (`id`, `instructor_id`, `instructor_name`, `department`, `designation`, `email`, `contact_no`, `present_address`, `permanent_address`, `remark`, `status`) VALUES
(2, 'INS-221134555', 'Md Arifur Ramanh', 'CSE', 'Department Head', 'arif@gmai.com', '01921345017', 'dh', 'dh', 'success', 1);

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

CREATE TABLE `myguests` (
  `id` int(11) NOT NULL,
  `firstname` varchar(44) NOT NULL,
  `lastname` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `myguests`
--

INSERT INTO `myguests` (`id`, `firstname`, `lastname`) VALUES
(1, 'Tanvirul', 'Islam'),
(2, 'Minhajul', 'Islam');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `id` int(11) NOT NULL,
  `std_id` varchar(20) NOT NULL,
  `std_name` varchar(55) NOT NULL,
  `std_session` varchar(20) NOT NULL,
  `std_department` varchar(20) NOT NULL,
  `hall` varchar(25) NOT NULL,
  `admission_year` date NOT NULL,
  `std_present_address` text NOT NULL,
  `std_permanent_address` text NOT NULL,
  `std_con_no` varchar(15) NOT NULL,
  `std_email` varchar(30) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`id`, `std_id`, `std_name`, `std_session`, `std_department`, `hall`, `admission_year`, `std_present_address`, `std_permanent_address`, `std_con_no`, `std_email`, `remark`, `status`) VALUES
(14, 'STU-1002003111', 'Md Tanvir', '2009-2011', 'EEE', 'Nazrul Ialam', '2018-10-21', 'DH', 'DH', '01825285011', 'minhaj@yahoo.com', 'Success', 1),
(63, 'STU-10020039999', 'Md', '2009-2011', 'EEE', 'Nazrul', '0000-00-00', 'DH', 'DH', '01825285011', 'minhaj@yahoo.coms', 'ok', 1),
(64, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(65, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(66, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(69, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(70, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(71, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(73, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(74, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(75, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(76, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(77, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(78, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(79, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(80, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(81, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(82, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(83, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(84, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(85, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(86, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(87, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(88, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(89, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(90, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(91, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(92, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(93, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(94, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(95, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(96, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(97, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(98, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(99, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(100, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(101, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(102, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(103, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(104, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(105, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(106, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(107, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(108, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(109, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(110, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(111, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(112, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(113, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(114, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(115, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(116, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(117, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(118, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(119, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(120, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(121, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(122, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(123, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(124, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(125, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(126, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(127, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(128, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(129, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(130, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(131, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(132, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(133, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(134, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(135, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(136, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(137, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(138, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(139, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(140, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(141, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(142, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(143, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(144, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(145, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(146, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(147, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(148, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(149, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(150, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(151, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(152, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(153, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(154, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(155, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(156, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(157, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(158, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(159, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(160, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(161, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(162, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(163, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(164, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(165, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(166, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(167, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(168, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(169, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(170, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(171, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(172, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(173, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(174, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(175, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(176, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(177, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(178, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(179, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(180, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(181, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(182, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(183, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(184, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(185, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(186, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(187, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(188, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(189, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(190, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(191, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(192, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(193, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(194, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(195, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(196, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(197, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(198, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(199, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(200, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(201, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(202, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(203, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(204, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(205, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(206, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(207, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(208, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(209, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(210, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(211, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(212, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(213, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(214, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(215, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(216, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(217, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(218, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(219, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(220, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(221, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(222, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(223, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(224, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(225, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(226, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(227, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(228, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(229, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(230, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(231, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(232, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(233, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(234, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(235, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(236, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(237, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(238, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(239, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(240, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(241, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(242, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(243, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(244, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(245, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(246, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(247, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(248, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(249, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(250, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(251, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(252, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(253, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(254, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(255, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(256, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(257, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(258, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(259, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(260, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(261, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(262, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(263, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(264, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(265, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(266, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(267, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(268, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(269, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(270, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(271, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(272, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(273, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(274, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(275, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(276, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(277, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(278, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(279, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(280, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(281, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(282, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(283, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(284, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(285, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(286, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(287, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(288, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(289, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(290, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(291, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(292, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(293, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(294, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(295, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(296, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(297, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(298, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(299, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(300, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(301, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(302, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(303, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(304, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(305, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(306, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(307, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(308, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(309, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(310, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(311, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(312, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(313, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(314, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(315, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(316, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(317, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(318, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(319, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(320, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(321, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(322, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(323, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(324, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(325, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(326, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(327, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(328, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(329, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(330, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(331, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(332, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(333, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(334, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(335, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(336, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(337, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(338, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(339, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(340, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(341, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(342, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(343, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(344, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(345, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(346, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(347, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(348, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(349, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(350, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(351, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(352, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(353, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(354, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(355, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(356, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(357, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(358, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(359, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(360, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(361, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(362, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(363, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(364, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(365, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(366, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(367, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(368, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(369, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(370, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(371, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(372, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(373, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(374, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(375, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(376, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(377, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(378, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(379, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(380, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(381, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(382, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(383, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(384, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(385, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(386, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(387, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(388, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(389, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(390, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(391, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(392, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(393, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(394, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(395, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(396, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1);
INSERT INTO `student_reg` (`id`, `std_id`, `std_name`, `std_session`, `std_department`, `hall`, `admission_year`, `std_present_address`, `std_permanent_address`, `std_con_no`, `std_email`, `remark`, `status`) VALUES
(397, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(398, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1),
(399, 'STU-1002003110', 'Md Tanvirul Islam', '2009-2011', 'EEE', 'Nazrul Ialam', '0000-00-00', 'DH', 'DH', '1825285011', 'minhaj@yahoo.coms', 'ok', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_info`
--
ALTER TABLE `course_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor_register`
--
ALTER TABLE `instructor_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myguests`
--
ALTER TABLE `myguests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `course_info`
--
ALTER TABLE `course_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `instructor_register`
--
ALTER TABLE `instructor_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `myguests`
--
ALTER TABLE `myguests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student_reg`
--
ALTER TABLE `student_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
