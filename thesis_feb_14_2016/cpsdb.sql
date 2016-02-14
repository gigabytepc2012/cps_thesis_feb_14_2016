-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2016 at 05:47 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cpsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pay_records`
--

CREATE TABLE IF NOT EXISTS `pay_records` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_balance`
--

CREATE TABLE IF NOT EXISTS `tbl_balance` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(25) NOT NULL,
  `tuitionfee` int(25) NOT NULL,
  `current` int(25) NOT NULL,
  `discount` int(25) NOT NULL,
  `level` varchar(25) NOT NULL,
  `year` int(25) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_balance`
--

INSERT INTO `tbl_balance` (`no`, `id`, `tuitionfee`, `current`, `discount`, `level`, `year`) VALUES
(3, 1, 4000, 4000, 0, 'SRHS', 2012),
(4, 2, 3000, 3000, 0, 'JRHS', 2012),
(5, 3, 2000, 2000, 0, 'PREP', 2013),
(6, 4, 2600, 2600, 0, 'JRHS', 2014),
(7, 5, 6000, 6000, 0, 'PREP', 2015),
(8, 6, 10000, 10000, 0, 'SRHS', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studreg`
--

CREATE TABLE IF NOT EXISTS `tbl_studreg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(24) NOT NULL,
  `mname` varchar(24) NOT NULL,
  `lname` varchar(24) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `bday` date NOT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_studreg`
--

INSERT INTO `tbl_studreg` (`id`, `fname`, `mname`, `lname`, `gender`, `bday`, `created`) VALUES
(1, 'John', 'L', 'Smith', 'm', '0000-00-00', '2016-02-05 06:14:27'),
(2, 'Julie Ann', 'G', 'Sarmiento', 'f', '0000-00-00', '2016-02-05 06:15:01'),
(3, 'Richard', 'L', 'Torres', 'm', '0000-00-00', '2016-02-05 06:15:25'),
(4, 'Edison', 'M', 'Enchanes', 'm', '0000-00-00', '2016-02-05 06:15:52'),
(5, 'Angelica', 'B', 'Lunar', 'f', '0000-00-00', '2016-02-05 06:16:13'),
(6, 'Venus', 'P', 'Eubra', 'f', '0000-00-00', '2016-02-05 06:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tuitionfees`
--

CREATE TABLE IF NOT EXISTS `tbl_tuitionfees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(20) NOT NULL,
  `PREP` int(15) NOT NULL,
  `ELEM` int(15) NOT NULL,
  `JRHS` int(15) NOT NULL,
  `SRHS` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_tuitionfees`
--

INSERT INTO `tbl_tuitionfees` (`id`, `year`, `PREP`, `ELEM`, `JRHS`, `SRHS`) VALUES
(1, '2012', 1000, 2000, 3000, 4000),
(2, '2013', 2000, 2500, 3000, 4000),
(3, '2014', 2300, 2500, 2600, 2800),
(4, '2015', 6000, 8000, 9000, 10000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
