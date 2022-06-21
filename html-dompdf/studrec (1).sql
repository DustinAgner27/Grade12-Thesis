-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 05:16 AM
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
