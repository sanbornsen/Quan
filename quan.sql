-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2013 at 10:39 AM
-- Server version: 5.5.31
-- PHP Version: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quan`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `a_id` int(4) NOT NULL AUTO_INCREMENT,
  `q_id` int(4) NOT NULL,
  `a_body` text NOT NULL,
  `vote` varchar(1000) DEFAULT NULL,
  `add_time` datetime NOT NULL,
  `last_update` datetime NOT NULL,
  `user_id` varchar(50) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;


--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `com_id` int(10) NOT NULL AUTO_INCREMENT,
  `com_name` varchar(1000) NOT NULL,
  `com_add` text NOT NULL,
  `com_logo` varchar(200) NOT NULL,
  `com_emp` text NOT NULL,
  `com_follower` text NOT NULL,
  `com_about` text NOT NULL,
  `com_creator` varchar(200) NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;


--
-- Table structure for table `follow`
--

CREATE TABLE IF NOT EXISTS `follow` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_follower` text NOT NULL,
  `user_following` text NOT NULL,
  `topic_following` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE IF NOT EXISTS `institution` (
  `inst_id` int(10) NOT NULL AUTO_INCREMENT,
  `inst_name` varchar(100) NOT NULL,
  `inst_add` text NOT NULL,
  `inst_website` varchar(100) NOT NULL,
  `inst_about` text NOT NULL,
  `inst_follower` text NOT NULL,
  `inst_logo` varchar(200) NOT NULL,
  `inst_student` text NOT NULL,
  `inst_creator` text NOT NULL,
  PRIMARY KEY (`inst_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;


--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `not_id` int(10) NOT NULL AUTO_INCREMENT,
  `q_id` int(5) NOT NULL,
  `a_id` int(10) NOT NULL,
  `person1` varchar(50) NOT NULL,
  `person2` varchar(50) NOT NULL,
  `activity` text NOT NULL,
  PRIMARY KEY (`not_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=268 ;


--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `q_id` int(4) NOT NULL AUTO_INCREMENT,
  `q_body` text NOT NULL,
  `q_desc` text NOT NULL,
  `add_time` datetime NOT NULL,
  `last_update` datetime NOT NULL,
  `user_id` varchar(50) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT 'unknown.jpg',
  `education` text NOT NULL,
  `job` text NOT NULL,
  `score` int(10) DEFAULT NULL,
  `last_not` int(50) NOT NULL,
  `verification` int(122) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `users`
--



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
