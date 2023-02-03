-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 03, 2023 at 03:59 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl6_9`
--

DROP TABLE IF EXISTS `tbl6_9`;
CREATE TABLE IF NOT EXISTS `tbl6_9` (
  `subno` int(50) NOT NULL AUTO_INCREMENT,
  `gadivision` varchar(50) NOT NULL,
  `eduname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `caddress` varchar(100) DEFAULT NULL,
  `subject` int(50) DEFAULT NULL,
  `totchild` int(50) DEFAULT NULL,
  `totteach` int(50) DEFAULT NULL,
  `inno` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`subno`,`gadivision`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl6_9`
--

INSERT INTO `tbl6_9` (`subno`, `gadivision`, `eduname`, `caddress`, `subject`, `totchild`, `totteach`, `inno`) VALUES
(7, 'GA125A', 'akura', 'rsdfgdgdg', 5, 10000, 1111, 'dfghfdgh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl11_2`
--

DROP TABLE IF EXISTS `tbl11_2`;
CREATE TABLE IF NOT EXISTS `tbl11_2` (
  `gadivision` varchar(20) NOT NULL,
  `rel` int(10) NOT NULL,
  `bus` int(10) NOT NULL,
  `fac` int(10) NOT NULL,
  `home` int(10) NOT NULL,
  `gov` int(10) NOT NULL,
  `pvt` int(10) NOT NULL,
  PRIMARY KEY (`gadivision`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl11_2`
--

INSERT INTO `tbl11_2` (`gadivision`, `rel`, `bus`, `fac`, `home`, `gov`, `pvt`) VALUES
('GA125A', 1, 10, 100, 1000, 10000, 100000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
