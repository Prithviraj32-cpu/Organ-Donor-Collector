-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 25, 2022 at 03:44 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `od`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE IF NOT EXISTS `donate` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `fname` text NOT NULL,
  `addr` longtext NOT NULL,
  `cno` text NOT NULL,
  `otype` text NOT NULL,
  `fmname` text NOT NULL,
  `fmcno` text NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`did`, `username`, `fname`, `addr`, `cno`, `otype`, `fmname`, `fmcno`) VALUES
(1, 'aaa', 'aaa', 'hhj', '9845098450', 'Cornea', 'ppp', '9845698456');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `addr` longtext NOT NULL,
  `cno` text NOT NULL,
  `email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`username`, `password`, `fname`, `lname`, `addr`, `cno`, `email`) VALUES
('dsi', 'dsi1', 'Sagar Hospitals', 'ppp', 'khj', '9845298452', 'ds@ds.com');

-- --------------------------------------------------------

--
-- Table structure for table `ordet`
--

CREATE TABLE IF NOT EXISTS `ordet` (
  `orid` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `addr` longtext NOT NULL,
  `cno` text NOT NULL,
  `email` text NOT NULL,
  `uname` text NOT NULL,
  `ufname` text NOT NULL,
  `uaddr` longtext NOT NULL,
  `ucno` text NOT NULL,
  `otype` text NOT NULL,
  `astatus` text NOT NULL,
  `hstatus` longtext NOT NULL,
  PRIMARY KEY (`orid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ordet`
--

INSERT INTO `ordet` (`orid`, `username`, `fname`, `lname`, `addr`, `cno`, `email`, `uname`, `ufname`, `uaddr`, `ucno`, `otype`, `astatus`, `hstatus`) VALUES
(3, 'dsi', 'Sagar Hospitals', 'ppp', 'khj', '9845298452', 'ds@ds.com', 'aaa', 'aaa', 'hhj', '9845098450', 'Cornea', 'kjhjkhjk', 'kjhjkhjk');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `addr` longtext NOT NULL,
  `cno` text NOT NULL,
  `email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`username`, `password`, `fname`, `lname`, `addr`, `cno`, `email`) VALUES
('aaa', 'bbb', 'aaa', 'bbb', 'hhj', '9845098450', 'aa@aa.com');
