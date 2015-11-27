-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2015 at 11:51 AM
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `position` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `main_page`
--

INSERT INTO `main_page` (`id`, `user_id`, `name`, `desc`, `position`, `date`) VALUES
(1, 1, 'HTML', 'Hypertext Markup Language, a standardized system for tagging text files to achieve font, colour, graphic, and hyperlink effects on World Wide Web pages.', 1, '2015-11-21'),
(2, 1, 'CSS (Casecade Style Sheet)', 'Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language.', 2, '2015-11-21'),
(3, 1, 'Javascript', 'an object-oriented computer programming language commonly used to create interactive effects within web browsers.', 3, '2015-11-22'),
(4, 0, 'PHP Page', 'PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.', 4, '0000-00-00'),
(5, 0, 'ASP Dot Net ', 'asf asdfas fasdf asdfas dfasdfasfasdf ', 5, '2015-11-27'),
(6, 0, 'Python', 'This is paython page descriptoin', 6, '2015-11-27'),
(7, 0, 'PHP Page', 'asfasdf asdf asdfas df asdfas fasdf ', 7, '2015-11-27'),
(8, 0, 'PHP Page', 'asdfasdfa sdfasdf asdf ', 8, '2015-11-27'),
(9, 0, 'safasfd', 'asdfasdf asdfas dfas dfasd ', 9, '2015-11-27'),
(10, 0, 'PHP asfasdf', 'a sdfas dfsadf asdf asd', 10, '2015-11-27'),
(11, 0, 'ASPfsadfsad', 'asfasdf asdfasdf asdfa sdf', 11, '2015-11-27'),
(12, 0, 'asdfasfasdf', 'asdfas dfasdfasdf ', 12, '2015-11-27'),
(13, 0, 'PHP Page', 'asdfasdf asdf ', 13, '2015-11-27'),
(14, 0, 'Change the title ', 'asdfasdfa sdfas d', 14, '2015-11-27'),
(15, 0, 'PHP Page has been chaned', 'asdfasdf asdfasdf asdf', 15, '2015-11-27'),
(16, 0, 'PHP Page', 'asdfasdf asdf asdf asd', 16, '2015-11-27'),
(17, 0, 'PHP asdfasdf', 'asdf asdfasd fasdfasdf asdf ', 17, '2015-11-27'),
(18, 0, 'safasfd asfasfsadf', 'asdfas fasdf sadf asdf asdfasd ', 18, '2015-11-27'),
(19, 0, 'safasfd asdfas dfdas ', 'asdfas fasdf sadf asdf asdfasd ', 18, '2015-11-27'),
(20, 0, 'asfasdfsad', 'asfasdf asdfasdf asdfasfa sdf', 20, '2015-11-27');

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
  `desc` text NOT NULL,
  `position` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sub_page`
--

INSERT INTO `sub_page` (`id`, `user_id`, `main_page_id`, `name`, `desc`, `position`, `date`) VALUES
(1, 1, 1, 'HTML Introduction ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, beatae blanditiis ea iure nisi quae quisquam repudiandae temporibus', 1, '2015-11-22'),
(2, 1, 1, 'About HTML Tags', 'ea iure nisi quae quisquam repudiandae temporibus. Accusantium fugit ipsam laboriosam laborum maiores natus nobis quidem, rem rerum velit', 2, '2015-11-22'),
(3, 1, 1, 'DIV Tags ', 'e Accusantium fugit ipsam laboriosam laborum maiores natus nobis quidem, rem rerum velit', 3, '2015-11-22'),
(4, 1, 2, 'CSS Introduction ', 'ea iure nisi quae quisquam repudiandae temporibus. ea iure nisi quae quisquam repudiandae tem velit', 1, '2015-11-22'),
(5, 1, 2, 'CSS Basic ', 'ea iure nisi quae quisquam repudiandae temporibus. Accusantium fugit ipsam laboriosam laborum maiores natus nobis quidem, rem rerum velit', 2, '2015-11-22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
