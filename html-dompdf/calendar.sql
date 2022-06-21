-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 04:39 PM
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
(1, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2021-12-31', 1, 0, 1, 0, 'asdasd', '2022-01-14', '0000-00-00', '2022-01-31', '0000-00-00', '2022-01-07'),
(2, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-02', 1, 1, 1, 1, 'sdfsf', '2022-01-16', '2022-01-04', '2022-02-02', '2022-01-04', '2022-01-09'),
(3, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-02', 1, 1, 0, 1, 'asd', '2022-01-16', '2022-01-04', '0000-00-00', '2022-01-04', '2022-01-09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
