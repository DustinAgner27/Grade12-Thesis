-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 04:40 PM
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
(2, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-02', '2022-01-16', 'Form 137'),
(2, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-02', '2022-01-04', 'Form 138'),
(2, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-02', '2022-02-02', 'Diploma'),
(2, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-02', '2022-01-04', 'Authentication of School Records'),
(2, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-02', '2022-01-09', 'sdfsf'),
(3, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-02', '2022-01-16', 'Form 137'),
(3, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-02', '2022-01-04', 'Form 138'),
(3, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-02', '2022-01-04', 'Authentication of School Records'),
(3, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2022-01-02', '2022-01-09', 'asd'),
(1, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2021-12-31', '2022-01-14', 'Form 137'),
(1, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2021-12-31', '2022-01-31', 'Diploma'),
(1, '160801', 'Gabor', 'Ryv Biensent', 'Daclizon', '2021-12-31', '2022-01-07', 'asdasd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
