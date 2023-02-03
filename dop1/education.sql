-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 19, 2023 at 06:04 AM
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
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl6_9`
--

DROP TABLE IF EXISTS `tbl6_9`;
CREATE TABLE IF NOT EXISTS `tbl6_9` (
  `gadivision` varchar(10) NOT NULL,
  `eduname` varchar(100) NOT NULL,
  `subno` int(10) NOT NULL AUTO_INCREMENT,
  `al` int(10) DEFAULT NULL,
  `ol` int(10) DEFAULT NULL,
  `g5` int(10) DEFAULT NULL,
  `other` int(10) DEFAULT NULL,
  `totchild` int(10) DEFAULT NULL,
  `totteach` int(10) DEFAULT NULL,
  PRIMARY KEY (`gadivision`,`eduname`,`subno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
