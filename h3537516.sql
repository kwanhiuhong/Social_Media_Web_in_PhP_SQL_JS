-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: sophia
-- Generation Time: Mar 03, 2018 at 10:27 AM
-- Server version: 5.1.35
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `h3537516`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendancelist`
--

CREATE TABLE IF NOT EXISTS `attendancelist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentname` varchar(256) DEFAULT NULL,
  `major` varchar(256) DEFAULT NULL,
  `course` varchar(256) DEFAULT NULL,
  `coursedate` date DEFAULT NULL,
  `attendOrNot` varchar(7) NOT NULL DEFAULT 'PRESENT',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `attendancelist`
--

INSERT INTO `attendancelist` (`id`, `studentname`, `major`, `course`, `coursedate`, `attendOrNot`) VALUES
(1, 'Alice', 'BEng', 'COMP3322', '2017-10-05', 'PRESENT'),
(2, 'Bob', 'BEcon', 'COMP3327', '2017-10-06', 'PRESENT'),
(3, 'Charlie', 'BBA', 'COMP3329', '2017-10-11', 'PRESENT'),
(4, 'Dave', 'BBA', 'COMP3322', '2017-10-01', 'PRESENT'),
(5, 'Eve', 'BJ', 'COMP3403', '2017-10-05', 'PRESENT'),
(6, 'Isaac', 'BEng', 'COMP3403', '2017-10-06', 'PRESENT');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `commentID` int(11) NOT NULL,
  `postID` int(11) NOT NULL,
  `time` varchar(20) NOT NULL,
  `commContent` longtext NOT NULL,
  PRIMARY KEY (`commentID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `postID`, `time`, `commContent`) VALUES
(2, 2, '2018/03/03-10:19', 'yeah it took me an week to finish'),
(3, 8, '2018/03/03-10:20', 'halo'),
(1, 2, '2018/03/03-10:18', 'I took a lot of time doing this assignment');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `friendID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `starred` varchar(1) NOT NULL,
  PRIMARY KEY (`friendID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`friendID`, `name`, `starred`) VALUES
(1, 'Apple', 'N'),
(2, 'Ben', 'Y'),
(3, 'Candy', 'N'),
(4, 'Dick', 'N'),
(5, 'Eggplant', 'N'),
(6, 'Floreance', 'N'),
(7, 'Giggle', 'N'),
(8, 'Hippy', 'Y'),
(9, 'Ink', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `postID` int(11) NOT NULL,
  `friendID` int(11) NOT NULL,
  `time` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postID`, `friendID`, `time`, `location`, `content`, `image`) VALUES
(1, 1, 'February 12 2018', 'Calgary, Canada', 'I am currently traveling in Calgary.', 'images1.jpg'),
(2, 2, 'February 13 2018', 'Hong Kong', 'I am currently studying at HKU.', 'images2.jpg'),
(3, 3, 'February 14 2018', 'Xian, China', 'I am currently studying at Xian Jiaotong University.', 'images3.jpg'),
(4, 4, 'February 15 2018', 'Shanghai, China', 'I am currently studying at Fudan University.', 'images4.jpg'),
(5, 5, 'February 16 2018', 'Hong Kong, China', 'I am currently doing my assignment1 of COMP3322.', 'images5.jpg'),
(6, 6, 'February 17 2018', 'Hong Kong, China', 'I am currently dying.', 'images6.jpg'),
(7, 7, 'February 18 2018', 'Hong Kong, China', 'The workload now is damn too much.', 'images7.jpg'),
(8, 8, 'February 19 2018', 'Hong Kong, China', 'I love C++.', 'images8.jpg'),
(9, 9, 'February 20 2018', 'Hong Kong, China', 'I love financial programming.', 'images9.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
