-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2022 at 07:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mccaaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `checklist`
--

CREATE TABLE `checklist` (
  `department` varchar(30) DEFAULT NULL,
  `department_files` varchar(30) DEFAULT NULL,
  `course_files` varchar(30) DEFAULT NULL,
  `faculty_files` varchar(30) DEFAULT NULL,
  `student_files` varchar(30) DEFAULT NULL,
  `cocurricular_activity_files` varchar(30) DEFAULT NULL,
  `Miscellaneous` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checklist`
--

INSERT INTO `checklist` (`department`, `department_files`, `course_files`, `faculty_files`, `student_files`, `cocurricular_activity_files`, `Miscellaneous`) VALUES
('MCA', '3', NULL, NULL, NULL, NULL, NULL),
('BCA', '1', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `years` varchar(30) DEFAULT NULL,
  `history` varchar(30) DEFAULT NULL,
  `stream` varchar(30) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `programme` varchar(30) DEFAULT NULL,
  `pname` varchar(30) DEFAULT NULL,
  `specializtion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`years`, `history`, `stream`, `category`, `programme`, `pname`, `specializtion`) VALUES
('2022-10-07', 'Message', 'Aided', 'Science', 'B.Sc', 'Bachelor of Computer Applicati', 'Computer Application');

-- --------------------------------------------------------

--
-- Table structure for table `dept2`
--

CREATE TABLE `dept2` (
  `course` varchar(30) DEFAULT NULL,
  `curriculum` varchar(30) DEFAULT NULL,
  `syllabus` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept2`
--

INSERT INTO `dept2` (`course`, `curriculum`, `syllabus`) VALUES
('da', 'fas', '2022-10-14');

-- --------------------------------------------------------

--
-- Table structure for table `dept3`
--

CREATE TABLE `dept3` (
  `name` varchar(30) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `mou` varchar(30) DEFAULT NULL,
  `validity` varchar(30) DEFAULT NULL,
  `details` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept3`
--

INSERT INTO `dept3` (`name`, `category`, `mou`, `validity`, `details`) VALUES
('a', 'International', '2222-02-12', '2', 'sdaff'),
('da', 'National', '2022-10-08', '5', 'dasf');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `cate` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `desig` varchar(30) DEFAULT NULL,
  `dept` varchar(30) DEFAULT NULL,
  `college` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`cate`, `name`, `desig`, `dept`, `college`, `phone`) VALUES
('', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `name` varchar(40) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `cate` varchar(30) DEFAULT NULL,
  `dept` varchar(30) DEFAULT NULL,
  `college` varchar(30) DEFAULT NULL,
  `dos` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
