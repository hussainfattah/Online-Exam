-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2015 at 01:27 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mark`
--

-- --------------------------------------------------------

--
-- Table structure for table `mcq`
--

DROP TABLE IF EXISTS `mcq`;
CREATE TABLE IF NOT EXISTS `mcq` (
  `user_id` int(11) NOT NULL,
  `question_set` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  `percent` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcq`
--

INSERT INTO `mcq` (`user_id`, `question_set`, `mark`, `percent`) VALUES
(4, 1, 4, 100),
(1, 1, 4, 100),
(74, 1, 3, 75),
(1, 3, 3, 75),
(29, 1, 4, 100),
(31, 2, 3, 75),
(29, 3, 4, 100),
(1, 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `written`
--

DROP TABLE IF EXISTS `written`;
CREATE TABLE IF NOT EXISTS `written` (
  `user_id` int(11) NOT NULL,
  `question_set` int(11) NOT NULL,
  `answer` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `written`
--

INSERT INTO `written` (`user_id`, `question_set`, `answer`) VALUES
(4, 3, 'My name is Masum.\r\nI am a student of khulna university of engineering and technology,khulna.\r\nMy home town is Rangpur.'),
(67, 3, 'My name is Prince.\r\nI am a student of kuet.\r\nbatch -2k12'),
(29, 3, 'Hi, I am sazol. Now i am studying cse in khulna university of engineering and technology.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
