-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2015 at 01:24 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `question`
--

-- --------------------------------------------------------

--
-- Table structure for table `question_set`
--

DROP TABLE IF EXISTS `question_set`;
CREATE TABLE IF NOT EXISTS `question_set` (
  `question_set_id` int(11) NOT NULL,
  `set_id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `a` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_set`
--

INSERT INTO `question_set` (`question_set_id`, `set_id`, `question`, `a`, `b`, `c`, `d`, `answer`) VALUES
(1, 1, '2+3=?', '2', '3', '5', '23', 'c'),
(1, 2, 'Definition of PHP....?', 'a', 'b', 'php', 'd', 'c'),
(1, 3, '5*6-5=?', '25', '30', '5', '50', 'a'),
(1, 4, 'How many students can admit in cse per year?', '30', '60', '120', '180', 'b'),
(3, 1, '2+3=?', '2', '3', '5', '12', 'c'),
(2, 4, 'Why do you want to study CSE ?', 'a', 'b', 'cse', 'd', 'c'),
(2, 3, 'Write some useful application of learning php.', 'a', 'b', 'c', 'application', 'd'),
(3, 4, '2*5-3=?', '2', '3', '5', '7', 'd'),
(3, 3, '3*3*3=?', '3', '9', '33', '27', 'd'),
(3, 2, '9/3=?', '3', '9', '0', '2', 'a'),
(2, 2, 'What is ROM?', 'rom', 'b', 'c', 'd', 'a'),
(2, 1, 'What is RAM?', 'a', 'b', 'rom', 'd', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `written`
--

DROP TABLE IF EXISTS `written`;
CREATE TABLE IF NOT EXISTS `written` (
  `set_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  PRIMARY KEY (`set_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `written`
--

INSERT INTO `written` (`set_id`, `question`) VALUES
(1, 'Why do you want to study in CSE ?'),
(2, 'Write some useful application of learning php.'),
(3, 'Write something About you');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
