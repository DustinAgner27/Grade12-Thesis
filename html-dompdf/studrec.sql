-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 06:30 PM
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
-- Table structure for table `studrec`
--

CREATE TABLE `studrec` (
  `stud_id` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
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
  `mhomeadd` varchar(50) NOT NULL,
  `mtelno` varchar(30) NOT NULL,
  `mcitiz` varchar(30) NOT NULL,
  `mcellno` varchar(30) NOT NULL,
  `memail` varchar(50) NOT NULL,
  `moccup` varchar(30) NOT NULL,
  `moff` varchar(30) NOT NULL,
  `moffadd` varchar(50) NOT NULL,
  `mofftelno` varchar(30) NOT NULL,
  `gname` varchar(50) NOT NULL,
  `ghomeadd` varchar(50) NOT NULL,
  `gtelno` varchar(30) NOT NULL,
  `gcitiz` varchar(30) NOT NULL,
  `gcellno` varchar(30) NOT NULL,
  `gemail` varchar(50) NOT NULL,
  `goccup` varchar(30) NOT NULL,
  `goff` varchar(30) NOT NULL,
  `goffadd` varchar(50) NOT NULL,
  `gofftelno` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studrec`
--

INSERT INTO `studrec` (`stud_id`, `name`, `sex`, `nickname`, `gradel`, `section`, `bdate`, `bplace`, `religion`, `nation`, `citiz`, `dua`, `houseno`, `street`, `brgy`, `town`, `prov`, `congdis`, `zip`, `telno`, `cellno`, `email`, `prevschool`, `schooladd`, `dateofgrad`, `noofgrad`, `finalave`, `honors`, `faname`, `fhomeadd`, `ftelno`, `fcitiz`, `fcellno`, `femail`, `foccup`, `foff`, `foffadd`, `fofftelno`, `mname`, `mhomeadd`, `mtelno`, `mcitiz`, `mcellno`, `memail`, `moccup`, `moff`, `moffadd`, `mofftelno`, `gname`, `ghomeadd`, `gtelno`, `gcitiz`, `gcellno`, `gemail`, `goccup`, `goff`, `goffadd`, `gofftelno`) VALUES
('160801', 'asd', 'sda', 'dasd', 'asdad', 'asd', '2021-12-29', 'asda', 'ddsad', 'asdasd', 'adsd', 'dasd', 'sdasda', 'dasda', 'asdas', 'sdasd', 'asda', 'asdasd', 'sd', 'daaaa', 'a', 'aasad', 'ad', 'asd', '0000-00-00', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'dasd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'dsa', 'asd', 'asd', 'ad', 'asd', 'asd', 'sad', 'ads', 'dsa', 'ad', 'as', 'asd', 'asd', 'asd', 'dsa'),
('160801', 'asd', 'sda', 'dasd', 'asdad', 'asd', '2021-12-29', 'asda', 'ddsad', 'asdasd', 'adsd', 'dasd', 'sdasda', 'dasda', 'asdas', 'sdasd', 'asda', 'asdasd', 'sd', 'daaaa', 'a', 'aasad', 'ad', 'asd', '0000-00-00', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'dasd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'dsa', 'asd', 'asd', 'ad', 'asd', 'asd', 'sad', 'ads', 'dsa', 'ad', 'as', 'asd', 'asd', 'asd', 'dsa'),
('160801', 'asd', 'asd', 'asd', 'asd', 'asd', '2022-01-04', 'asd', 'asd', 'asd', 'dasd', '', 'asd', 'asd', 'asd', 'asd', 'asdd', 'asd', 'd', 'asd', 'asd', 'asda', 'sdasd', 'asdasd', '0000-00-00', 'asd', 'asdad', 'ad', 'asda', 'asdasd', 'ad', 'asdad', 'asd', 'asd', 'adasd', 'asd', 'ad', 'asd', 'asd', 'asdad', 'ad', 'asd', 'asd', 'ads', 'asd', 'asd', 'asd', 'aads', 'asd', 'asd', 'ads', 'asd', 'asd', 'asd', 'ad', 'sada', 'da', 'ads');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
