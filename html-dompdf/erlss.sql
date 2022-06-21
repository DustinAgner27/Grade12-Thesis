-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 06:52 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erlss`
--

-- --------------------------------------------------------

--
-- Table structure for table `asr`
--

CREATE TABLE `asr` (
  `stud_id` varchar(30) NOT NULL,
  `asrfile` varchar(100) NOT NULL,
  `asraccess` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asr`
--

INSERT INTO `asr` (`stud_id`, `asrfile`, `asraccess`) VALUES
('123123', 'asr/asr123123.pdf', 1),
('160801', '', 0),
('12345', '', 0),
('121214', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `reqid` int(100) NOT NULL,
  `stud_id` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mi` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `form137` int(11) NOT NULL,
  `form138` int(11) NOT NULL,
  `diploma` int(11) NOT NULL,
  `asr` int(11) NOT NULL,
  `others` varchar(30) NOT NULL,
  `form137date` date NOT NULL,
  `form138date` date NOT NULL,
  `diplomadate` date NOT NULL,
  `asrdate` date NOT NULL,
  `othersdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`reqid`, `stud_id`, `lname`, `fname`, `mi`, `date`, `form137`, `form138`, `diploma`, `asr`, `others`, `form137date`, `form138date`, `diplomadate`, `asrdate`, `othersdate`) VALUES
(3, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-02', 1, 1, 0, 1, 'asd', '2022-01-16', '2022-01-04', '0000-00-00', '2022-01-04', '2022-01-09'),
(4, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', 1, 1, 0, 0, '', '2022-01-19', '2022-01-07', '0000-00-00', '0000-00-00', '0000-00-00'),
(5, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '0000-00-00', 0, 0, 0, 0, '0', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(6, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', 0, 1, 1, 0, '', '0000-00-00', '2022-01-07', '2022-02-05', '0000-00-00', '0000-00-00'),
(7, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', 1, 2, 2, 1, '', '2022-01-19', '0000-00-00', '0000-00-00', '2022-01-07', '0000-00-00'),
(8, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', 0, 1, 1, 0, '', '0000-00-00', '2022-01-07', '2022-02-05', '0000-00-00', '0000-00-00'),
(9, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', 0, 1, 1, 0, '', '0000-00-00', '2022-01-07', '2022-02-05', '0000-00-00', '0000-00-00'),
(10, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', 0, 1, 1, 0, '', '0000-00-00', '2022-01-07', '2022-02-05', '0000-00-00', '0000-00-00'),
(12, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 2, 1, 2, 2, '', '0000-00-00', '2022-01-10', '0000-00-00', '0000-00-00', '0000-00-00'),
(14, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', '0000-00-00', '2022-01-10', '2022-02-08', '0000-00-00', '0000-00-00'),
(15, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '0', '0000-00-00', '2022-01-10', '2022-02-08', '0000-00-00', '2022-01-15'),
(16, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', '0000-00-00', '2022-01-10', '2022-02-08', '0000-00-00', '0000-00-00'),
(17, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', '0000-00-00', '2022-01-10', '2022-02-08', '0000-00-00', '0000-00-00'),
(18, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 1, 1, 2, 1, '', '2022-01-22', '2022-01-10', '0000-00-00', '2022-01-10', '0000-00-00'),
(19, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', '0000-00-00', '2022-01-10', '2022-02-08', '0000-00-00', '0000-00-00'),
(20, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '0000-00-00', 0, 0, 0, 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(21, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', '0000-00-00', '2022-01-10', '2022-02-08', '0000-00-00', '0000-00-00'),
(22, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', '0000-00-00', '2022-01-10', '2022-02-08', '0000-00-00', '0000-00-00'),
(23, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', '0000-00-00', '2022-01-10', '2022-02-08', '0000-00-00', '0000-00-00'),
(24, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', '0000-00-00', '2022-01-10', '2022-02-08', '0000-00-00', '0000-00-00'),
(25, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', '0000-00-00', '2022-01-10', '2022-02-08', '0000-00-00', '0000-00-00'),
(26, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 1, 1, 2, 1, '', '2022-01-22', '2022-01-10', '0000-00-00', '2022-01-10', '0000-00-00'),
(27, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', '0000-00-00', '2022-01-10', '2022-02-08', '0000-00-00', '0000-00-00'),
(28, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', '0000-00-00', '2022-01-10', '2022-02-08', '0000-00-00', '0000-00-00'),
(30, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', '0000-00-00', '2022-01-10', '2022-02-08', '0000-00-00', '0000-00-00'),
(31, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', '0000-00-00', '2022-01-10', '2022-02-08', '0000-00-00', '0000-00-00'),
(32, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '0000-00-00', 0, 0, 0, 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(33, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 1, 1, 1, 2, '', '2022-01-22', '2022-01-10', '2022-02-08', '0000-00-00', '0000-00-00'),
(34, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 2, 1, 0, '', '0000-00-00', '0000-00-00', '2022-02-08', '0000-00-00', '0000-00-00'),
(35, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '0000-00-00', 0, 0, 0, 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(36, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 2, 1, 0, '', '0000-00-00', '0000-00-00', '2022-02-08', '0000-00-00', '0000-00-00'),
(37, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', '0000-00-00', '2022-01-10', '2022-02-08', '0000-00-00', '0000-00-00'),
(38, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 1, 0, 0, 0, 'asdasd', '2022-01-22', '0000-00-00', '0000-00-00', '0000-00-00', '2022-01-15'),
(39, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 1, 0, 0, 0, 'asdasd', '2022-01-22', '0000-00-00', '0000-00-00', '0000-00-00', '2022-01-15'),
(40, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 0, 1, 0, '', '2022-01-23', '0000-00-00', '2022-02-09', '0000-00-00', '0000-00-00'),
(41, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 0, 1, 0, '', '2022-01-23', '0000-00-00', '2022-02-09', '0000-00-00', '0000-00-00'),
(42, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 2, 0, 1, 0, '', '0000-00-00', '0000-00-00', '2022-02-09', '0000-00-00', '0000-00-00'),
(43, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 0, 0, 0, '', '2022-01-23', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(44, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 1, 0, 0, '', '2022-01-23', '2022-01-11', '0000-00-00', '0000-00-00', '0000-00-00'),
(45, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 0, 0, 0, 'Dhshe', '2022-01-23', '0000-00-00', '0000-00-00', '0000-00-00', '2022-01-16'),
(46, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 0, 1, 0, 0, '', '0000-00-00', '2022-01-11', '0000-00-00', '0000-00-00', '0000-00-00'),
(47, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 0, 0, 0, '', '2022-01-23', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(48, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 0, 1, 0, 0, '', '0000-00-00', '2022-01-11', '0000-00-00', '0000-00-00', '0000-00-00'),
(49, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 0, 0, 0, '', '2022-01-23', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(50, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 0, 1, 0, '', '2022-01-23', '0000-00-00', '2022-02-09', '0000-00-00', '0000-00-00'),
(51, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 1, 0, 0, '', '2022-01-23', '2022-01-11', '0000-00-00', '0000-00-00', '0000-00-00'),
(52, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 0, 0, 0, 0, 'asd', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2022-01-16'),
(53, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 0, 0, 0, '', '2022-01-23', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(54, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 0, 0, 0, '', '2022-01-23', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(55, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 0, 0, 0, '', '2022-01-23', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(56, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 0, 1, 0, 0, 'asd', '0000-00-00', '2022-01-11', '0000-00-00', '0000-00-00', '2022-01-16'),
(57, '123123', 'd', 'w', 'GO', '2022-01-10', 2, 2, 0, 2, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(58, '121214', 'Quisado', 'Krysta', 'Misoles', '2022-01-10', 2, 1, 0, 0, '', '0000-00-00', '2022-01-12', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `diploma`
--

CREATE TABLE `diploma` (
  `stud_id` varchar(30) NOT NULL,
  `dipfile` varchar(100) NOT NULL,
  `dipaccess` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diploma`
--

INSERT INTO `diploma` (`stud_id`, `dipfile`, `dipaccess`) VALUES
('123123', 'diploma/diploma123123.pdf', 1),
('160801', 'diploma/diploma160801.pdf', 1),
('12345', '', 0),
('121214', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `reqid` varchar(30) NOT NULL,
  `stud_id` varchar(30) NOT NULL,
  `payfile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`reqid`, `stud_id`, `payfile`) VALUES
('57', '123123', 'payments/pay57.jpg'),
('58', '121214', 'payments/pay58.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registrar`
--

CREATE TABLE `registrar` (
  `lname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrar`
--

INSERT INTO `registrar` (`lname`, `fname`, `email`, `username`, `password`) VALUES
('Cobacha', 'Jhun', 'jjcobacha@evc.pshs.edu.ph', 'jjcob', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `reportcard`
--

CREATE TABLE `reportcard` (
  `stud_id` varchar(30) NOT NULL,
  `repcardfile` varchar(100) NOT NULL,
  `repcardaccess` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reportcard`
--

INSERT INTO `reportcard` (`stud_id`, `repcardfile`, `repcardaccess`) VALUES
('160801', 'repcard/repcard160801.pdf', 0),
('123123', 'repcard/repcard123123.pdf', 1),
('121214', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `reqid` int(100) NOT NULL,
  `stud_id` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mi` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `form137` int(11) NOT NULL,
  `form138` int(11) NOT NULL,
  `diploma` int(11) NOT NULL,
  `asr` int(11) NOT NULL,
  `others` varchar(30) NOT NULL,
  `purpose` text NOT NULL,
  `batch` varchar(4) NOT NULL,
  `sig` varchar(50) NOT NULL,
  `number` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sex` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`reqid`, `stud_id`, `lname`, `fname`, `mi`, `date`, `form137`, `form138`, `diploma`, `asr`, `others`, `purpose`, `batch`, `sig`, `number`, `email`, `sex`) VALUES
(3, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-02', 1, 1, 0, 1, 'asd', 'asdadsd', '2123', ' ', 231231313, 'ryvbiensent@gmail.com', 'Male'),
(4, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', 1, 1, 0, 0, '', 'asd', '213', ' ', 1321, 'ryvbiensent@gmail.com', 'Male'),
(5, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '0000-00-00', 0, 0, 0, 0, '0', '', '', ' ', 0, '', ''),
(6, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', 0, 1, 1, 0, '', 'asdasd', 'ad', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(7, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', 1, 2, 2, 1, '', 'asdasd', 'ad', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(8, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', 0, 1, 1, 0, '', 'asdasd', 'ad', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(9, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', 0, 1, 1, 0, '', 'asdasd', 'ad', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(10, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', 0, 1, 1, 0, '', 'asdasd', 'ad', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(12, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 2, 1, 2, 2, '', 'sdfsdf', 'asd', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(14, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', 'sdfsdf', 'asd', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(15, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '0', 'sdfsdf', 'asd', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(16, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', 'sdfsdf', 'asd', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(17, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', 'sdfsdf', 'asd', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(18, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 1, 1, 2, 1, '', 'sdfsdf', 'asd', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(19, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', 'sdfsdf', 'asd', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(20, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '0000-00-00', 0, 0, 0, 0, '', '', '', ' ', 0, '', ''),
(21, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', 'sdfsdf', 'asd', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(22, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', 'sdfsdf', 'asd', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(23, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', 'sdfsdf', '', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(24, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', 'sdfsdf', 'asd', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(25, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', 'sdfsdf', 'asd', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(26, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 1, 1, 2, 1, '', 'sdfsdf', 'asd', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(27, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', 'sdfsdf', 'asd', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(28, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', 'sdfsdf', 'asd', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(30, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', 'sdfsdf', 'asd', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(31, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', 'sdfsdf', 'asd', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(32, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '0000-00-00', 0, 0, 0, 0, '', '', '', ' ', 0, '', ''),
(33, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 1, 1, 1, 2, '', 'sdfsdf', 'asd', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(34, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 2, 1, 0, '', 'sdfsdf', 'asd', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(35, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '0000-00-00', 0, 0, 0, 0, '', '', '', ' ', 0, '', ''),
(36, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 2, 1, 0, '', 'sdfsdf', 'asd', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(37, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', 'sdfsdf', 'asd', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
(38, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 1, 0, 0, 0, 'asdasd', 'asd', '2131', '', 0, 'ryvbiensent@gmail.com', 'Female'),
(39, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 1, 0, 0, 0, 'asdasd', 'asd', '2131', '', 0, 'ryvbiensent@gmail.com', 'Female'),
(40, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 0, 1, 0, '', 'College Apps', '2022', '', 2147483647, 'ryvbiensent@gmail.com', 'Male'),
(41, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 0, 1, 0, '', 'College Apps', '2022', '', 2147483647, 'ryvbiensent@gmail.com', 'Male'),
(42, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 2, 0, 1, 0, '', 'College Apps', '2022', '', 2147483647, 'ryvbiensent@gmail.com', 'Male'),
(43, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 0, 0, 0, '', 'Hsbwj', '2022', '', 0, 'ryvbiensent@gmail.com', 'Male'),
(44, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 1, 0, 0, '', 'Djwind', '2022', '', 160801, 'ryvbiensent@gmail.com', 'Male'),
(45, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 0, 0, 0, 'Dhshe', 'Idjwk', 'Wi2j', '', 0, 'ryvbiensent@gmail.com', 'Male'),
(46, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 0, 1, 0, 0, '', 'Iwjwhw', '2022', '', 1, 'ryvbiensent@gmail.com', 'Male'),
(47, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 0, 0, 0, '', 'Jsj', '2922', '', 1819, 'ryvbiensent@gmail.com', 'Male'),
(48, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 0, 1, 0, 0, '', 'H', '2', '', 2, 'ryvbiensent@gmail.com', 'Male'),
(49, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 0, 0, 0, '', 'S', '2', '', 2, 'ryvbiensent@gmail.com', 'Male'),
(50, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 0, 1, 0, '', 'asdasd', 'asd', 'reqforms/sig/sig50.', 0, 'ryvbiensent@gmail.com', 'Male'),
(51, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 1, 0, 0, '', 'asd', 'asda', 'reqforms/sig/sig51.', 0, 'ryvbiensent@gmail.com', 'Male'),
(52, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 0, 0, 0, 0, 'asd', 'asdasd', 'asd', 'reqforms/sig/sig52.jpg', 0, 'ryvbiensent@gmail.com', 'Male'),
(53, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 0, 0, 0, '', 'sd', 'asda', 'reqforms/sig/sig53.jpgjpg', 0, 'ryvbiensent@gmail.com', 'Male'),
(54, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 0, 0, 0, '', 'asd', 'asd', 'reqforms/sig/sig54.jpg', 0, 'ryvbiensent@gmail.com', 'Male'),
(55, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 1, 0, 0, 0, '', 'asd', 'asd', 'reqforms/sig/sig55.jpg', 0, 'ryvbiensent@gmail.com', 'Male'),
(56, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', 0, 1, 0, 0, 'asd', 'asd', 'asd', 'reqforms/sig/sig56.png', 0, 'ryvbiensent@gmail.com', 'Male'),
(57, '123123', 'd', 'w', 'GO', '2022-01-10', 2, 2, 0, 2, '', 'sasdasd', 'asda', 'reqforms/sig/sig57.jpg', 0, 'awawawaaw', 'Male'),
(58, '121214', 'Quisado', 'Krysta', 'Misoles', '2022-01-10', 2, 1, 0, 0, '', 'College', '2022', 'reqforms/sig/sig58.jpg', 2147483647, 'setsuki408@gmail.com', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `requestslogs`
--

CREATE TABLE `requestslogs` (
  `datefin` date NOT NULL,
  `reqid` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mi` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `form137` int(11) NOT NULL DEFAULT 0,
  `form138` int(11) NOT NULL DEFAULT 0,
  `diploma` int(11) NOT NULL DEFAULT 0,
  `asr` int(11) NOT NULL DEFAULT 0,
  `others` varchar(30) NOT NULL,
  `purpose` text NOT NULL,
  `batch` varchar(4) NOT NULL,
  `sig` varchar(50) NOT NULL,
  `number` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sex` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestslogs`
--

INSERT INTO `requestslogs` (`datefin`, `reqid`, `stud_id`, `lname`, `fname`, `mi`, `date`, `form137`, `form138`, `diploma`, `asr`, `others`, `purpose`, `batch`, `sig`, `number`, `email`, `sex`) VALUES
('2021-12-31', 2, 160801, 'Gabor', 'Ryv Biensent', 'Daclizon', '2021-12-31', 1, 1, 1, 1, '', 'chekret', 'chek', ' ', 12312313, 'ryvbiensent@gmail.com', 'Male'),
('2021-12-31', 2, 160801, 'Gabor', 'Ryv Biensent', 'Daclizon', '2021-12-31', 1, 1, 1, 1, '', 'chekret', 'chek', ' ', 12312313, 'ryvbiensent@gmail.com', 'Male'),
('2021-12-31', 2, 160801, 'Gabor', 'Ryv Biensent', 'Daclizon', '2021-12-31', 1, 1, 1, 1, '', 'chekret', 'chek', ' ', 12312313, 'ryvbiensent@gmail.com', 'Male'),
('2021-12-31', 2, 160801, 'Gabor', 'Ryv Biensent', 'Daclizon', '2021-12-31', 1, 1, 1, 1, '', 'chekret', 'chek', ' ', 12312313, 'ryvbiensent@gmail.com', 'Male'),
('2021-12-31', 2, 160801, 'Gabor', 'Ryv Biensent', 'Daclizon', '2021-12-31', 1, 1, 1, 1, '', 'chekret', 'chek', ' ', 12312313, 'ryvbiensent@gmail.com', 'Male'),
('2021-12-31', 2, 160801, 'Gabor', 'Ryv Biensent', 'Daclizon', '2021-12-31', 1, 1, 1, 1, '', 'chekret', 'chek', ' ', 12312313, 'ryvbiensent@gmail.com', 'Male'),
('2021-12-31', 2, 160801, 'Gabor', 'Ryv Biensent', 'Daclizon', '2021-12-31', 1, 1, 1, 1, '', 'chekret', 'chek', ' ', 12312313, 'ryvbiensent@gmail.com', 'Male'),
('2021-12-31', 2, 160801, 'Gabor', 'Ryv Biensent', 'Daclizon', '2021-12-31', 1, 1, 1, 1, '', 'chekret', 'chek', ' ', 12312313, 'ryvbiensent@gmail.com', 'Male'),
('2021-12-31', 2, 160801, 'Gabor', 'Ryv Biensent', 'Daclizon', '2021-12-31', 1, 1, 1, 1, '', 'chekret', 'chek', ' ', 12312313, 'ryvbiensent@gmail.com', 'Male'),
('2021-12-31', 0, 0, '', '', '', '0000-00-00', 0, 0, 0, 0, '', '', '', '', 0, '', ''),
('2021-12-31', 0, 0, '', '', '', '0000-00-00', 0, 0, 0, 0, '', '', '', '', 0, '', ''),
('2021-12-31', 1, 160801, 'Gabor', 'Ryv Biensent', 'Daclizon', '2021-12-31', 1, 0, 1, 0, 'azs', '', '', '', 0, '', '0'),
('2021-12-31', 0, 0, '', '', '', '0000-00-00', 0, 0, 0, 0, '', '', '', '', 0, '', ''),
('2022-01-09', 11, 160801, 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', 'sdfsdf', 'sdfs', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
('2022-01-09', 29, 160801, 'Gabor', 'Ryv Biensent', 'Daclizon', '0000-00-00', 0, 0, 0, 0, '', '', '', ' ', 0, '', ''),
('2022-01-09', 13, 160801, 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', 0, 1, 1, 0, '', 'sdfsdf', 'sdfs', ' ', 0, 'ryvbiensent@gmail.com', 'Male'),
('2022-01-09', 0, 0, '', '', '', '0000-00-00', 0, 0, 0, 0, '', '', '', '', 0, '', ''),
('2022-01-09', 1, 160801, 'Gabor', 'Ryv Biensent', 'Daclizon', '2021-12-31', 2, 0, 2, 0, 'asdasd', 'asd', 'asd', ' ', 21313213, 'ryvbiensent@gmail.com', 'Female'),
('2022-01-09', 0, 0, '', '', '', '0000-00-00', 0, 0, 0, 0, '', '', '', '', 0, '', ''),
('2022-01-09', 0, 0, '', '', '', '0000-00-00', 0, 0, 0, 0, '', '', '', '', 0, '', ''),
('2022-01-09', 0, 0, '', '', '', '0000-00-00', 0, 0, 0, 0, '', '', '', '', 0, '', ''),
('2022-01-09', 0, 0, '', '', '', '0000-00-00', 0, 0, 0, 0, '', '', '', '', 0, '', ''),
('2022-01-09', 2, 160801, 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-02', 2, 2, 2, 2, 'sdfsf', 'adad', 'adad', ' ', 123123, 'ryvbiensent@gmail.com', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `reqid` int(11) NOT NULL,
  `stud_id` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `m` varchar(30) NOT NULL,
  `datesub` date NOT NULL,
  `dateend` date NOT NULL,
  `task` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`reqid`, `stud_id`, `lname`, `fname`, `m`, `datesub`, `dateend`, `task`) VALUES
(58, '121214', 'Quisado', 'Krysta', 'Misoles', '2022-01-10', '2022-01-12', 'Form 138'),
(46, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-01-11', 'Form 138'),
(45, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-01-23', 'Form 137'),
(45, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-01-16', 'Dhshe'),
(44, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-01-23', 'Form 137'),
(44, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-01-11', 'Form 138'),
(43, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-01-23', 'Form 137'),
(42, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-02-09', 'Diploma'),
(41, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-01-23', 'Form 137'),
(41, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-02-09', 'Diploma'),
(40, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-01-23', 'Form 137'),
(40, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-02-09', 'Diploma'),
(47, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-01-23', 'Form 137'),
(48, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-01-11', 'Form 138'),
(49, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-01-23', 'Form 137'),
(56, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-01-11', 'Form 138'),
(56, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-01-16', 'asd'),
(55, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-01-23', 'Form 137'),
(54, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-01-23', 'Form 137'),
(53, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-01-23', 'Form 137'),
(52, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-01-16', 'asd'),
(51, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-01-23', 'Form 137'),
(51, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-01-11', 'Form 138'),
(50, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-01-23', 'Form 137'),
(50, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-09', '2022-02-09', 'Diploma'),
(39, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-22', 'Form 137'),
(39, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-15', 'asdasd'),
(37, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Form 138'),
(37, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-02-08', 'Diploma'),
(36, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-02-08', 'Diploma'),
(34, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-02-08', 'Diploma'),
(33, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-22', 'Form 137'),
(33, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Form 138'),
(33, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-02-08', 'Diploma'),
(38, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-22', 'Form 137'),
(38, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-15', 'asdasd'),
(31, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Form 138'),
(31, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-02-08', 'Diploma'),
(30, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Form 138'),
(30, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-02-08', 'Diploma'),
(12, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Form 138'),
(14, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Form 138'),
(14, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-02-08', 'Diploma'),
(15, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Form 138'),
(15, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-02-08', 'Diploma'),
(15, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-15', '0'),
(16, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Form 138'),
(16, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-02-08', 'Diploma'),
(18, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-22', 'Form 137'),
(18, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Form 138'),
(18, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Authentication of School Records'),
(19, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Form 138'),
(19, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-02-08', 'Diploma'),
(21, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Form 138'),
(21, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-02-08', 'Diploma'),
(22, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Form 138'),
(22, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-02-08', 'Diploma'),
(23, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Form 138'),
(23, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-02-08', 'Diploma'),
(28, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Form 138'),
(28, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-02-08', 'Diploma'),
(27, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Form 138'),
(27, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-02-08', 'Diploma'),
(26, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-22', 'Form 137'),
(26, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Form 138'),
(26, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Authentication of School Records'),
(25, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Form 138'),
(25, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-02-08', 'Diploma'),
(17, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Form 138'),
(17, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-02-08', 'Diploma'),
(24, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-01-10', 'Form 138'),
(24, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-08', '2022-02-08', 'Diploma'),
(4, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', '2022-01-19', 'Form 137'),
(4, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', '2022-01-07', 'Form 138'),
(6, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', '2022-01-07', 'Form 138'),
(6, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', '2022-02-05', 'Diploma'),
(7, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', '2022-01-19', 'Form 137'),
(7, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', '2022-01-07', 'Authentication of School Records'),
(8, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', '2022-01-07', 'Form 138'),
(8, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', '2022-02-05', 'Diploma'),
(9, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', '2022-01-07', 'Form 138'),
(9, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', '2022-02-05', 'Diploma'),
(10, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', '2022-01-07', 'Form 138'),
(10, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-05', '2022-02-05', 'Diploma'),
(3, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-02', '2022-01-16', 'Form 137'),
(3, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-02', '2022-01-04', 'Form 138'),
(3, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-02', '2022-01-04', 'Authentication of School Records'),
(3, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-02', '2022-01-09', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stud_id` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mi` varchar(30) NOT NULL,
  `batch` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stud_id`, `lname`, `fname`, `mi`, `batch`, `email`, `password`) VALUES
('160801', 'Gabor', 'Ryv Biensent', 'Daclizon', 12, 'ryvbiensent@gmail.com', 'gwapoako408'),
('12345', 'NICOLAS', 'HANS DANIELLE', 'GO', 12, 'daniellehans60@gmail.com', 'gwapoako408'),
('123123', 'd', 'w', 'GO', 11, 'awawawaaw', 'qeqeeqeqq'),
('[value-1]', '[value-2]', '[value-3]', '[value-4]', 12, '[value-6]', '[value-7]'),
('[value-1]', '[value-2]', '[value-3]', '[value-4]', 12, '[value-6]', '[value-7]'),
('[value-1]', '[value-2]', '[value-3]', '[value-4]', 12, '[value-6]', '[value-7]'),
('[value-1]', '[value-2]', '[value-3]', '[value-4]', 12, '[value-6]', '[value-7]'),
('[value-1]', '[value-2]', '[value-3]', '[value-4]', 12, '[value-6]', '[value-7]'),
('121214', 'Quisado', 'Krysta', 'Misoles', 2022, 'setsuki408@gmail.com', 'gwapoako408');

-- --------------------------------------------------------

--
-- Table structure for table `studrec`
--

CREATE TABLE `studrec` (
  `stud_id` varchar(30) NOT NULL,
  `sy` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `miname` varchar(30) NOT NULL,
  `sex` varchar(30) NOT NULL,
  `nickname` varchar(30) NOT NULL,
  `gradel` varchar(10) NOT NULL,
  `section` varchar(30) NOT NULL,
  `bdate` date NOT NULL,
  `bplace` varchar(30) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `nation` varchar(30) NOT NULL,
  `citiz` varchar(30) NOT NULL,
  `dua` varchar(30) NOT NULL,
  `houseno` varchar(30) NOT NULL,
  `street` varchar(30) NOT NULL,
  `brgy` varchar(30) NOT NULL,
  `town` varchar(30) NOT NULL,
  `prov` varchar(30) NOT NULL,
  `congdis` varchar(30) NOT NULL,
  `zip` varchar(30) NOT NULL,
  `telno` varchar(30) NOT NULL,
  `cellno` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `prevschool` varchar(50) NOT NULL,
  `schooladd` varchar(100) NOT NULL,
  `dateofgrad` date NOT NULL,
  `noofgrad` varchar(30) NOT NULL,
  `finalave` varchar(10) NOT NULL,
  `honors` varchar(30) NOT NULL,
  `faname` varchar(50) NOT NULL,
  `fsig` varchar(100) NOT NULL,
  `fhomeadd` varchar(30) NOT NULL,
  `ftelno` varchar(30) NOT NULL,
  `fcitiz` varchar(30) NOT NULL,
  `fcellno` varchar(30) NOT NULL,
  `femail` varchar(50) NOT NULL,
  `foccup` varchar(30) NOT NULL,
  `foff` varchar(30) NOT NULL,
  `foffadd` varchar(50) NOT NULL,
  `fofftelno` varchar(30) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `msig` varchar(100) NOT NULL,
  `mhomeadd` varchar(50) NOT NULL,
  `mtelno` varchar(30) NOT NULL,
  `mcitiz` varchar(30) NOT NULL,
  `mcellno` varchar(30) NOT NULL,
  `memail` varchar(50) NOT NULL,
  `moccup` varchar(30) NOT NULL,
  `moff` varchar(30) NOT NULL,
  `moffadd` varchar(50) NOT NULL,
  `mofftelno` varchar(30) NOT NULL,
  `gname1` varchar(50) NOT NULL,
  `gsig1` varchar(100) NOT NULL,
  `grelat1` varchar(30) NOT NULL,
  `ghomeadd1` varchar(50) NOT NULL,
  `gtelno1` varchar(30) NOT NULL,
  `goffadd1` varchar(50) NOT NULL,
  `gofftelno1` varchar(30) NOT NULL,
  `gname2` varchar(50) NOT NULL,
  `gsig2` varchar(100) NOT NULL,
  `grelat2` varchar(30) NOT NULL,
  `ghomeadd2` varchar(50) NOT NULL,
  `gtelno2` varchar(30) NOT NULL,
  `goffadd2` varchar(50) NOT NULL,
  `gofftelno2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studrec`
--

INSERT INTO `studrec` (`stud_id`, `sy`, `name`, `fname`, `miname`, `sex`, `nickname`, `gradel`, `section`, `bdate`, `bplace`, `religion`, `nation`, `citiz`, `dua`, `houseno`, `street`, `brgy`, `town`, `prov`, `congdis`, `zip`, `telno`, `cellno`, `email`, `prevschool`, `schooladd`, `dateofgrad`, `noofgrad`, `finalave`, `honors`, `faname`, `fsig`, `fhomeadd`, `ftelno`, `fcitiz`, `fcellno`, `femail`, `foccup`, `foff`, `foffadd`, `fofftelno`, `mname`, `msig`, `mhomeadd`, `mtelno`, `mcitiz`, `mcellno`, `memail`, `moccup`, `moff`, `moffadd`, `mofftelno`, `gname1`, `gsig1`, `grelat1`, `ghomeadd1`, `gtelno1`, `goffadd1`, `gofftelno1`, `gname2`, `gsig2`, `grelat2`, `ghomeadd2`, `gtelno2`, `goffadd2`, `gofftelno2`) VALUES
('160801', 'sda', '', 'dsa', 'dasd', 'as', 'ds', 'da', 'sda', '2022-01-12', 'da', 'dsa', 'dsa', 'dsa', 'sa', 'dasd', 'dsa', 'dasd', 'das', 'da', 'das', 'dsad', 'dsa', 'dsad', 'dsads', 'sda', 'dsa', '2022-01-10', 'dad', 'das', 'dsa', 'dsa', 'infosheets/fsigs/fsig.jpg', 'dsa', 'asd', 'a', 'asd', 'dsa', 'asd', 'da', 'dsa', 'd', 'ds', 'infosheets/msigs/msig.png', 'd', 'sad', 'd', 'das', 'dsad', 'dsa', 'dsa', 'dasd', 'as', '', 'infosheets/gsigs/gsig1.', '', '', '', '', '', '', 'infosheets/gsigs/gsig2.png', '', '', '', '', ''),
('160801', 'sda', '', 'dsa', 'dasd', 'as', 'ds', 'da', 'sda', '2022-01-12', 'da', 'dsa', 'dsa', 'dsa', 'sa', 'dasd', 'dsa', 'dasd', 'das', 'da', 'das', 'dsad', 'dsa', 'dsad', 'dsads', 'sda', 'dsa', '2022-01-10', 'dad', 'das', 'dsa', 'dsa', 'infosheets/fsigs/fsig.jpg', 'dsa', 'asd', 'a', 'asd', 'dsa', 'asd', 'da', 'dsa', 'd', 'ds', 'infosheets/msigs/msig.png', 'd', 'sad', 'd', 'das', 'dsad', 'dsa', 'dsa', 'dasd', 'as', '', 'infosheets/gsigs/gsig1.', '', '', '', '', '', '', 'infosheets/gsigs/gsig2.png', '', '', '', '', ''),
('121214', 'asd', '', 'dsa', 'dsa', 'dsa', 'dsad', 'dasd', 'dsa', '2022-01-10', 'dsa', 'sad', 'dsa', 'dsa', 'dsa', 'dsa', 'dsa', 'dsa', 'asd', 'dsa', 'dsa', 'asd', 'ds', 'ds', 'dsa', 'dsa', 'asd', '2022-01-10', 'dsa', 'dsadsa', 'dsa', 'dsa', 'infosheets/fsigs/fsig121214.png', 'dsa', 'dsa', 'dsa', 'das', 'dsa', 'd', 'sd', 'das', 'das', 'dsa', 'infosheets/msigs/msig121214.jpg', 'ds', 'das', 'das', 'dsa', 'das', 'as', 'a', 'asd', 'das', '', 'infosheets/gsigs/gsig1121214.', '', '', '', '', '', '', 'infosheets/gsigs/gsig2121214.jpg', '', '', '', '', ''),
('121214', 'asd', '', 'asd', 'asd', 'asd', 'asd', 'dsa', 'asd', '2022-01-10', 'asd', 'asd', 'asd', 'as', 'asd', 'asd', 'as', 'das', 'dsa', 'dsa', 'dasd', 'asd', 'asd', 'asdd', 'asd', 'asd', 'ddsa', '2022-01-10', 'dsa', 'das', 'asd', 'asd', 'infosheets/fsigs/fsig121214.jpg', 'asd', 'dsa', 'd', 'sa', 'das', 'dsa', 'asd', 'dsa', 'das', 'asd', 'infosheets/msigs/msig121214.png', 'asd', 'dsa', 'dsa', 'dsa', 'dsa', 'asdd', 'dsa', 'dsa', 'dsa', '', 'infosheets/gsigs/gsig1121214.', '', '', '', '', '', '', 'infosheets/gsigs/gsig2121214.png', '', '', '', '', ''),
('121214', 'asd', '', 'dsa', 'dsa', 'dsa', 'dasd', 'd', 'dsa', '2022-01-10', 'asd', 'dsa', 'dsa', 'da', 'dsa', 'dsa', 'sa', 'sda', 'dsa', 'dsa', 'dasd', 'dsa', 'das', 'sdas', 'sda', 'dsa', 'sad', '2022-01-10', 'dsa', 'das', 'asd', 'das', 'infosheets/fsigs/fsig121214.png', 'das', 'sda', 'dsa', 'dsa', 'dsadsa', 'dsa', 'sda', 'asd', 'asd', 'dsa', 'infosheets/msigs/msig121214.jpg', 'dad', 'dsa', 'dsa', 'dsa', 'sadd', 'asd', 'asd', 'asd', 'dsa', '', 'infosheets/gsigs/gsig1121214.', '', '', '', '', '', '', 'infosheets/gsigs/gsig2121214.jpg', '', '', '', '', ''),
('121214', 'asd', '', 'dsa', 'dsa', 'dsa', 'dsas', 'dsa', 'dsa', '2022-01-12', 'das', 'sad', 'dsa', 'dsa', 'dsa', 'dsa', 'da', 'das', 'dsa', 'dsa', 'dsa', 'asd', 'ds', 'dsa', 'dsa', 'das', 'das', '2022-01-10', 'dsa', 'dsa', 'dsa', 'das', 'infosheets/fsigs/fsig121214.jpg', 'dsa', 'dsa', 'dsa', 'ds', 'dsa', 'dsa', 'dsa', 'dsa', 'dsa', 'dsa', 'infosheets/msigs/msig121214.jpg', 'ds', 'dsa', 'dsa', 'asd', 'd', 'dsa', 'dsa', 'dsa', 'ds', '', 'infosheets/gsigs/gsig1121214.', '', '', '', '', '', '', 'infosheets/gsigs/gsig2121214.jpg', '', '', '', '', ''),
('121214', 'sad', '', 'dsa', 'dsa', 'dsa', 'dsa', 'dsa', 'das', '2022-01-10', 'das', 'asd', 'sda', 'dsa', 'das', 'dsa', 'dsa', 'dsa', 'dsa', 'dsa', 'dsa', 'asd', 'dsa', 'dsa', 'dsa', 'dsa', 'dsa', '2022-01-10', 'asd', 'asd', 'asd', 'dsa', 'infosheets/fsigs/fsig121214.jpg', 'asd', 'asd', 'asd', 'das', 'das', 'asd', 'das', 'da', 'ads', 'dsa', 'infosheets/msigs/msig121214.png', 'dsa', 'sad', 'sa', 'das', 'dsad', 'dsa', 'das', 's', 'dasd', '', 'infosheets/gsigs/gsig1121214.', '', '', '', '', '', '', 'infosheets/gsigs/gsig2121214.png', '', '', '', '', ''),
('121214', 'sad', '', 'das', 'd', 'asd', 'asdd', 'asd', 'dsa', '2022-01-05', 'asd', 'asd', 'dsa', 'sa', 'das', 'sda', 'dsa', 'asd', 'das', 'asd', 'asd', 'sda', 'asdd', 'das', 'sda', 'asd', 'sad', '2022-01-03', 'dasd', 'sad', 'asd', 'sad', 'infosheets/fsigs/fsig121214.jpg', 'dsa', 'das', 'dsa', 'asd', 'da', 'das', 'dsa', 'das', 'sda', 'asd', 'infosheets/msigs/msig121214.jpg', 'dsa', 'asd', 'das', 'dsa', 'asd', 'asd', 'das', 'asd', 'dsa', '', 'infosheets/gsigs/gsig1121214.', '', '', '', '', '', '', 'infosheets/gsigs/gsig2121214.jpg', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tor`
--

CREATE TABLE `tor` (
  `stud_id` varchar(30) NOT NULL,
  `torfile` varchar(100) NOT NULL,
  `toraccess` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tor`
--

INSERT INTO `tor` (`stud_id`, `torfile`, `toraccess`) VALUES
('123123', 'tor/tor123123.pdf', 1),
('160801', 'tor/tor160801.pdf', 1),
('12345', '', 0),
('[value-1]', '', 0),
('121214', 'tor/tor121214.pdf', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
