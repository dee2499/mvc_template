-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2011 at 02:17 AM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` enum('Deactive','Active') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'Admin', 'admin123', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `cityname` varchar(20) NOT NULL,
  PRIMARY KEY (`city_id`),
  KEY `state_id` (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`state_id`, `city_id`, `cityname`) VALUES
(1, 1, 'Ahmedabad'),
(1, 2, 'Surat'),
(2, 3, 'Mumbai'),
(2, 4, 'Pune');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `countryname` varchar(20) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `countryname`) VALUES
(1, 'India'),
(2, 'USA'),
(3, 'Australia');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE IF NOT EXISTS `date` (
  `date_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(3) NOT NULL,
  PRIMARY KEY (`date_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`date_id`, `date`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13'),
(14, '14'),
(15, '15'),
(16, '16'),
(17, '17'),
(18, '18'),
(19, '19'),
(20, '20'),
(21, '21'),
(22, '22'),
(23, '23'),
(24, '24'),
(25, '25'),
(26, '26'),
(27, '27'),
(28, '28'),
(29, '29'),
(30, '30'),
(31, '31');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `date` varchar(3) NOT NULL,
  `age` varchar(10) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `hobby` varchar(50) NOT NULL,
  `status` enum('Deactive','Active') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `username`, `password`, `firstname`, `lastname`, `date`, `age`, `gender`, `address`, `city`, `state`, `country`, `mobile`, `fax`, `email`, `hobby`, `status`) VALUES
(1, 'Pratik', 'pratik', 'Pratik', 'Parikh', '26', '25', 'Male', 'Vaibhav Bang', '1', '1', '1', '9725004143', '9876543', 'pnsp007@yahoo.co.in', 'Music,Singing', 'Active'),
(2, 'Arth', 'arth', 'Arth', 'Shah', '9', '23', 'Male', 'knslajfkdsjf', '1', '1', '1', '987945664', '095657435', 'knkjhzdfnn', 'Music,Walking,Singing', 'Active'),
(3, 'Kush', 'kushpatel', 'Kush', 'Patel', '11', '23', 'Male', 'njdufmm', '1', '1', '1', '83698264', '86976865', 'ksnmkdlnf', 'Music,Singing', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `statename` varchar(20) NOT NULL,
  PRIMARY KEY (`state_id`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`country_id`, `state_id`, `statename`) VALUES
(1, 1, 'Gujarat'),
(1, 2, 'Maharashtra'),
(2, 3, 'Chicago'),
(2, 4, 'Verginia');
