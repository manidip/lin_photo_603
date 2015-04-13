-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2015 at 08:12 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lin_photo`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(200) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(21, 'Spring'),
(22, 'Valentine'),
(23, 'Autumn'),
(24, 'abstract'),
(25, 'Water'),
(26, 'Nature');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(20) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_massage` text NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(500) NOT NULL,
  `reply_id` int(11) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE IF NOT EXISTS `gallary` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_headline` varchar(100) NOT NULL,
  `photo_url` varchar(100) NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `latest_blog_posts`
--

CREATE TABLE IF NOT EXISTS `latest_blog_posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_headline` varchar(50) NOT NULL,
  `post_contant` longtext NOT NULL,
  `post_photo_url` varchar(100) NOT NULL,
  `post_date` date NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `latest_blog_posts`
--

INSERT INTO `latest_blog_posts` (`post_id`, `post_headline`, `post_contant`, `post_photo_url`, `post_date`) VALUES
(10, 'Portrait Of Michael Crichton', 'Jack Robinson was born in Mississippi in 1928 and grew up in Clarksdale. In the early 50s, he honed his craft through photographing his life and friends in the New Orleans French Quarter.', 'images/1428490613-Michael_Crichton.jpg', '2015-04-08'),
(20, 'Aenean a bibendum augue123', 'bdcdddhhhgdshgsh', 'images/1428503982-Poolside_Glamour.jpg', '2015-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_url` varchar(200) NOT NULL,
  `photo_description` varchar(500) NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `photo_url`, `photo_description`) VALUES
(3, 'images/templatemo_image_02.jpg', 'Nam sit amet justo vel libero tincidunt dignissim. Cras magna velit, pellentesque mattis, faucibus vitae, feugiat vitae'),
(4, 'images/templatemo_image_03.jpg', 'Pellentesque tortor metus, gravida ut aliquet non, iaculis nec nisi. Null am ornare, mauris vitae vehicula veh icula'),
(5, 'images/templatemo_image_04.jpg', 'Proin consequat interdum mauris id auctor. In justo dolor, luctus sed tristique vel, porttitor eu enim. In molestie vehicula pretium iaculis.'),
(6, 'images/templatemo_image_05.jpg', 'Suspendisse odio erat, mattis in hend rerit id, iaculis at metus. Aliquam ligula justo, gravida sed pretium eu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
