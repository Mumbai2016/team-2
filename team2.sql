-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2016 at 01:36 PM
-- Server version: 5.5.39-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `team2`
--

-- --------------------------------------------------------

--
-- Table structure for table `keyactivities`
--

CREATE TABLE IF NOT EXISTS `keyactivities` (
  `id` int(11) DEFAULT NULL,
  `keyid` int(11) NOT NULL,
  `keyact_no` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keyactivities`
--

INSERT INTO `keyactivities` (`id`, `keyid`, `keyact_no`, `description`) VALUES
(1, 1, 1, 'some key activity 1'),
(2, 1, 2, 'some key activity 2');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
`id` int(11) NOT NULL,
  `project_no` int(11) NOT NULL,
  `strategy_no` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_no`, `strategy_no`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keyactivities`
--
ALTER TABLE `keyactivities`
 ADD KEY `keyid` (`keyid`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `keyactivities`
--
ALTER TABLE `keyactivities`
ADD CONSTRAINT `keyactivities_ibfk_1` FOREIGN KEY (`keyid`) REFERENCES `project` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
