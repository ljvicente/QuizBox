-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2013 at 10:10 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ami`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('ad11d612fe18161ec146ff2d4d29cd38', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', 1365933989, 'a:8:{s:9:"user_data";s:0:"";s:2:"id";s:1:"3";s:8:"username";s:3:"oca";s:8:"password";s:32:"81dc9bdb52d04dc20036dbd8313ed055";s:11:"displayname";s:13:"Oscar Velasco";s:5:"email";s:25:"oscarvelasco123@yahoo.com";s:10:"permission";s:10:"instructor";s:12:"is_logged_in";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permission` varchar(15) NOT NULL,
  `displayname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `imagepath` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `permission`, `displayname`, `email`, `imagepath`) VALUES
(1, 'carongoy', '81dc9bdb52d04dc20036dbd8313ed055', 'student', 'R is Love', 'racarongoy@yahoo.com', ''),
(2, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'administrator', 'Administrator', 'admin@alliancemansols.com', ''),
(3, 'oca', '81dc9bdb52d04dc20036dbd8313ed055', 'instructor', 'Oscar Velasco', 'oscarvelasco123@yahoo.com', ''),
(4, 'clerk', '81dc9bdb52d04dc20036dbd8313ed055', 'hr', 'HR Clerk', 'hr@alliancemansols.com', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
