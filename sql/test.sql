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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `status_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `status_no` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `auto` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(500) NOT NULL,
  PRIMARY KEY (`auto`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=128 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`status_id`, `comment_id`, `status_no`, `comment`, `auto`, `time`) VALUES
(1, 4, 48, 'Overall Good....', 33, 'Sunday 15th of March 2015 @ 02:45:11 AM'),
(1, 29, 48, '&#2447;&#2439;&#2468;&#2507; &#2477;&#2494;&#2482;... But &#2535;&#2463;&#2494; question &#2474;&#2494;&#2480;&#2495; &#2472;&#2495;... :-(', 32, 'Sunday 15th of March 2015 @ 02:42:55 AM'),
(4, 1, 49, 'ok...', 94, 'Monday 16th of March 2015 @ 01:46:01 PM'),
(4, 4, 49, 'tnx...', 95, 'Monday 16th of March 2015 @ 01:46:31 PM'),
(4, 69, 49, '&#2438;&#2460; &#2480;&#2494;&#2468;&#2503;&#2439; &#2474;&#2503;&#2479;&#2492;&#2503; &#2479;&#2494;&#2476;&#2503;&#2472; &#2438;&#2486;&#2494; &#2453;&#2480;&#2494; &#2479;&#2494;&#2479;&#2492;...', 90, 'Monday 16th of March 2015 @ 01:43:53 PM');

-- --------------------------------------------------------

--
-- Table structure for table `image_link`
--

DROP TABLE IF EXISTS `image_link`;
CREATE TABLE IF NOT EXISTS `image_link` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_link`
--

INSERT INTO `image_link` (`id`, `image`) VALUES
(1, 'http://localhost/image/uploads/_MG_5908.JPG'),
(1, 'http://localhost/image/uploads/bornomala.jpg'),
(1, 'http://localhost/image/uploads/_MG_5909.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

DROP TABLE IF EXISTS `people`;
CREATE TABLE IF NOT EXISTS `people` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `image` varchar(200) NOT NULL,
  `admin_panel` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`user_id`, `username`, `age`, `password`, `email`, `image`, `admin_panel`) VALUES
(1, 'shopnil', 20, '12345', 'sopnilfattah59@gmail', 'http://localhost/project/upload/11426493419_MG_7569.JPG', 'no'),
(74, 'tuhin', 22, '123', 'tuhin@gmail.com', 'http://localhost/project/upload/741426423117_MG_3313.JPG', 'no'),
(4, 'masum', 22, '12', 'masum@gmail.com', 'http://localhost/project/upload/41426493493IMG_0600.JPG', 'no'),
(29, 'sajol', 21, '12345', 'sazol@gmail.com', 'http://localhost/project/upload/291426652551IMG_20150116_121247.jpg', 'no'),
(67, 'prince', 22, '12', 'sopnilfattah59@gmail.com', '0', 'no'),
(69, 'admin', 22, 'admin', 'admin@gmail.com', '', 'yes');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `user_id`, `status`, `time`) VALUES
(49, 4, '&#2438;&#2460; &#2453;&#2503;&#2480; &#2447;&#2453;&#2509;&#2488;&#2494;&#2478; &#2447;&#2480; &#2488;&#2482;&#2509;&#2479;&#2497;&#2486;&#2472; &#2463;&#2494; &#2455;&#2509;&#2480;&#2497;&#2474; &#2447; &#2470;&#2495;&#2482;&#2503; &#2454;&#2497;&#2476; &#2477;&#2494;&#2482; &#2489;&#2527;... #admin', 'Sunday 15th of March 2015 @ 02:48:14 AM'),
(48, 1, '&#2447;&#2453;&#2509;&#2488;&#2494;&#2478; &#2453;&#2503;&#2478;&#2472; &#2489;&#2482;&#2507; &#2488;&#2476;&#2494;&#2480;...??', 'Sunday 15th of March 2015 @ 02:38:13 AM');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `status_id` int(11) NOT NULL,
  `status` varchar(5000) NOT NULL,
  `video_link` varchar(200) NOT NULL,
  `categories` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`status_id`, `status`, `video_link`, `categories`) VALUES
(1, 'What You Should Already Know  Before you continue you should have a basic understanding of the following:      HTML     CSS     JavaScript  If you want to study these subjects first, find the tutorials on our Home page. What is PHP?      PHP is an acronym for "PHP: Hypertext Preprocessor"     PHP is a widely-used, open source scripting language     PHP scripts are executed on the server     PHP is free to download and use', 'https://www.youtube.com/watch?v=7t1ARhyZ_50', 'php'),
(2, 'Welcome to JavaScript. This tutorial will help you a lot. We tried to give you some basic concept about javascript. Good luck guys.', 'https://www.youtube.com/watch?v=9b9qKaXv-5A', 'javascript');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
