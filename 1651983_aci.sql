-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2015 at 06:07 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `1651983_aci`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `pid` int(101) NOT NULL AUTO_INCREMENT,
  `age` varchar(100) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `food` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date_k` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `exercise` varchar(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `age`, `blood`, `weight`, `food`, `location`, `date_k`, `exercise`, `gender`) VALUES
(1, '464', '6546', '46', '465', '464', '2015-07-07 20:18:03', '646', 'male'),
(2, '20', 'O+', '200', 'burger', 'dhaka', '2015-07-07 20:22:16', 'joggin', 'male'),
(3, '10', 'A+', '60', 'cake', 'khulna', '2015-07-07 20:23:01', 'eating', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `esr` int(100) NOT NULL,
  `cholesterol` int(100) NOT NULL,
  `sugar` int(100) NOT NULL,
  `himo` int(100) NOT NULL,
  `tid` int(100) NOT NULL AUTO_INCREMENT,
  `patient` int(100) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE IF NOT EXISTS `user_auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contact_num` varchar(12) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `user_cat_id` int(11) DEFAULT NULL,
  `prev` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `user_auth`
--

INSERT INTO `user_auth` (`id`, `username`, `password`, `contact_num`, `email`, `city`, `area`, `user_cat_id`, `prev`) VALUES
(7, 'admin', '21232f297a57a5a743894a0e4a801fc3', '01670021785', 'kk@kk.com', 1, 1, 1, 'admin'),
(13, 'omar', '202cb962ac59075b964b07152d234b70', '016788888888', 'om@om.copm', 1, 2, 3, 'nuser'),
(14, 'rat', '202cb962ac59075b964b07152d234b70', '2323', 'omar@trivooz.com', NULL, NULL, NULL, 'nuser'),
(20, 'kiron', '202cb962ac59075b964b07152d234b70', '1212', 'tajul.islam.3576224@gmail.com', 1, 1, 2, 'admin'),
(23, 'oo', '123', '213', '32332', 2, 2, 3, 'asd'),
(24, 'ismail', '123456', '12312313', 'ismailkironn5@gmail.com', NULL, NULL, NULL, 'nuser'),
(26, 'labib', 'a01610228fe998f515a72dd730294d87', '01978787575', 'omar@trivooz.com', NULL, NULL, NULL, 'nuser'),
(27, 'dip', '202cb962ac59075b964b07152d234b70', '019212', 'ismai@gmail.com', NULL, NULL, NULL, 'nuser');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
