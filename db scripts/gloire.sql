-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2016 at 06:33 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gloire`
--

-- --------------------------------------------------------

--
-- Table structure for table `delegate`
--

CREATE TABLE IF NOT EXISTS `delegate` (
`uid` int(10) unsigned NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` bigint(20) DEFAULT NULL,
  `altcontact` bigint(20) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `syear` varchar(100) DEFAULT NULL,
  `muncount` varchar(100) DEFAULT NULL,
  `experience` varchar(2000) DEFAULT NULL,
  `accom` varchar(10) DEFAULT NULL,
  `preference` varchar(100) DEFAULT NULL,
  `country1` varchar(100) DEFAULT NULL,
  `country2` varchar(100) DEFAULT NULL,
  `payment` varchar(10) DEFAULT NULL,
  `socials` varchar(10) DEFAULT NULL,
  `feedback` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `eb`
--

CREATE TABLE IF NOT EXISTS `eb` (
`uid` int(10) unsigned NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` bigint(20) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `muncount` varchar(100) DEFAULT NULL,
  `expdel` varchar(2000) DEFAULT NULL,
  `expeb` varchar(2000) DEFAULT NULL,
  `accom` varchar(10) DEFAULT NULL,
  `preference1` varchar(100) DEFAULT NULL,
  `preference2` varchar(100) DEFAULT NULL,
  `que1` varchar(5000) DEFAULT NULL,
  `que2` varchar(5000) DEFAULT NULL,
  `que3` varchar(5000) DEFAULT NULL,
  `que4` varchar(5000) DEFAULT NULL,
  `demotion` varchar(10) DEFAULT NULL,
  `feedback` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ip`
--

CREATE TABLE IF NOT EXISTS `ip` (
`uid` int(10) unsigned NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` bigint(20) DEFAULT NULL,
  `altcontact` bigint(20) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `syear` varchar(100) DEFAULT NULL,
  `muncount` varchar(100) DEFAULT NULL,
  `experience` varchar(2000) DEFAULT NULL,
  `accom` varchar(10) DEFAULT NULL,
  `preference` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `agency` varchar(100) DEFAULT NULL,
  `payment` varchar(10) DEFAULT NULL,
  `socials` varchar(10) DEFAULT NULL,
  `feedback` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `iphd`
--

CREATE TABLE IF NOT EXISTS `iphd` (
`uid` int(10) unsigned NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` bigint(20) DEFAULT NULL,
  `altcontact` bigint(20) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `syear` varchar(100) DEFAULT NULL,
  `muncount` varchar(100) DEFAULT NULL,
  `ipcount` varchar(100) DEFAULT NULL,
  `experience` varchar(2000) DEFAULT NULL,
  `accom` varchar(10) DEFAULT NULL,
  `que1` varchar(5000) DEFAULT NULL,
  `que2` varchar(5000) DEFAULT NULL,
  `que3` varchar(5000) DEFAULT NULL,
  `que4` varchar(5000) DEFAULT NULL,
  `que5` varchar(5000) DEFAULT NULL,
  `other_exp` varchar(2000) DEFAULT NULL,
  `feedback` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delegate`
--
ALTER TABLE `delegate`
 ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `eb`
--
ALTER TABLE `eb`
 ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `ip`
--
ALTER TABLE `ip`
 ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `iphd`
--
ALTER TABLE `iphd`
 ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delegate`
--
ALTER TABLE `delegate`
MODIFY `uid` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eb`
--
ALTER TABLE `eb`
MODIFY `uid` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ip`
--
ALTER TABLE `ip`
MODIFY `uid` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `iphd`
--
ALTER TABLE `iphd`
MODIFY `uid` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
