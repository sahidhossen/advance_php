-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2015 at 03:37 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL DEFAULT '0',
  `f_name` varchar(25) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `currentDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `f_name`, `l_name`, `username`, `pass`, `email`, `currentDate`) VALUES
(0, 'Rafiq', 'Hossain', 'admin', 'admin', 'admin@me.com', '2015-11-21 09:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `main_page`
--

CREATE TABLE IF NOT EXISTS `main_page` (
  `id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_page`
--

INSERT INTO `main_page` (`id`, `user_id`, `name`, `position`, `date`) VALUES
(1, 1, 'HTML', 1, '2015-11-21'),
(2, 1, 'CSS (Casecade Style Sheet)', 3, '2015-11-21'),
(3, 1, 'Javascript', 3, '2015-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `publish_date` datetime NOT NULL,
  `comments` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--


-- --------------------------------------------------------

--
-- Table structure for table `sub_page`
--

CREATE TABLE IF NOT EXISTS `sub_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `main_page_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `position` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sub_page`
--

INSERT INTO `sub_page` (`id`, `user_id`, `main_page_id`, `name`, `position`, `date`) VALUES
(1, 1, 1, 'HTML Introduction ', 1, '2015-11-22'),
(2, 1, 1, 'About HTML Tags', 2, '2015-11-22'),
(3, 1, 1, 'DIV Tags ', 3, '2015-11-22'),
(4, 1, 2, 'CSS Introduction ', 1, '2015-11-22'),
(5, 1, 2, 'CSS Basic ', 2, '2015-11-22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
