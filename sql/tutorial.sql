-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2015 at 01:31 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `facebook`
--

DROP TABLE IF EXISTS `facebook`;
CREATE TABLE IF NOT EXISTS `facebook` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `facebook`
--

INSERT INTO `facebook` (`user_id`, `username`, `email`, `password`) VALUES
(8, 'fattah', 's@gmail.com', '52'),
(9, 'shopnil', 's@gmail.com', '52'),
(10, 'raju', 'raju@gmail.com', '123'),
(11, 'new', 'new@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`first_name`, `last_name`, `age`) VALUES
('shopnil', 'fattah', 20),
('raju', 'marma', 50),
('iker', 'casillas', 40);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `status_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `status` text NOT NULL,
  `time` varchar(50) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `user_id`, `status`, `time`) VALUES
(16, 4, 'hi!!', 'Tuesday 10th of February 2015 07:19:40 AM'),
(13, 11, 'Do or Die...!!!!', 'Monday 19th of January 2015 02:42:00 PM'),
(12, 11, 'Um coming home...!!!', 'Monday 19th of January 2015 02:40:02 PM'),
(14, 35, '', 'Friday 6th of February 2015 11:26:09 AM'),
(15, 35, 'Hi guys !!!!\r\nHow are you?', 'Friday 6th of February 2015 11:26:33 AM'),
(10, 10, 'hi friends', 'Monday 19th of January 2015 02:03:32 PM');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
