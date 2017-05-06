-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2015 at 01:28 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `class_7`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_list`
--

DROP TABLE IF EXISTS `admin_list`;
CREATE TABLE IF NOT EXISTS `admin_list` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `name` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin_list`
--

INSERT INTO `admin_list` (`id`, `username`, `password`, `name`) VALUES
(0, 'foysal', '1209014', 'foysal'),
(1, 'tuhin', '1211054', 'tuhin');

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `roll` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `name` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `roll`, `name`) VALUES
(1, 'alamin', '1207050', '1207050', 'amin'),
(2, 'fattah', '1207059', '1207059', 'FATTAH'),
(0, 'saif', '1207046', '1207046', 'mahmud');

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
