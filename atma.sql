-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2016 at 04:15 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `atma`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
`id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `comment` varchar(5000) NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `comment`, `page_id`) VALUES
(1, 'Deepak', 'Too Good Deepak Well done!', 4),
(2, 'Deepak', 'Well done', 4),
(3, 'Deepak', 'testing', 2),
(4, 'Anonymous', 'baap', 21),
(5, 'divya tiwari', 'M Gr8', 22),
(12, 'Deepak', 'Too good', 3),
(13, 'KS', 'Mast h', 19);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_no`, `strategy_no`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pwdrec`
--

CREATE TABLE IF NOT EXISTS `pwdrec` (
  `id` int(10) NOT NULL,
  `string` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pwdrec`
--

INSERT INTO `pwdrec` (`id`, `string`) VALUES
(287, '057f3587'),
(53, '05d17714'),
(355, '069d99f2'),
(1231, '0758345e'),
(337, '08adb80a'),
(25, '08f3b637'),
(191, '0a73fe5e'),
(218, '0af929f5'),
(37, '0bc3907a'),
(322, '0f3b68aa'),
(201, '0ff4f0e6'),
(1231, '14ad0e37'),
(1228, '168e776b'),
(759, '1efbd985'),
(670, '20204a5c'),
(147, '22c948b7'),
(275, '260bebbc'),
(665, '2a9b1989'),
(707, '2b801050'),
(314, '33b945c0'),
(1230, '343713f6'),
(684, '35691d8f'),
(358, '3923d27d'),
(271, '39b42d69'),
(630, '3a209e5a'),
(721, '3bb5143b'),
(630, '3c4c1bde'),
(692, '3d1541a9'),
(257, '3daed926'),
(121, '40079a39'),
(840, '40c6eebb'),
(198, '46068ffb'),
(526, '481b12ac'),
(524, '485eca67'),
(207, '4e7d0d75'),
(623, '53385775'),
(369, '55e4078c'),
(218, '569b4eb9'),
(926, '58540b94'),
(26, '58a680b9'),
(620, '599e4b08'),
(729, '5da0b0de'),
(26, '5e0bec18'),
(223, '5e95331f'),
(148, '5edc2c22'),
(621, '612417a5'),
(461, '61b2d9dc'),
(552, '643548f0'),
(537, '69b6b06d'),
(1101, '6f002b79'),
(622, '70f9ee34'),
(25, '71acbfe6'),
(107, '721f028a'),
(167, '78fd6239'),
(1231, '79c926d4'),
(37, '7a312491'),
(630, '7a88aad6'),
(1127, '7c7c4917'),
(835, '7d6c8c56'),
(363, '7e250b21'),
(1230, '7e553b36'),
(721, '7f2e06d8'),
(160, '833f4116'),
(871, '87de064d'),
(549, '8825e500'),
(177, '89f7adea'),
(651, '8ba3181b'),
(641, '8cc3e9ab'),
(1055, '8ffadc1c'),
(888, '92111d4e'),
(1228, '958136da'),
(409, '99204e92'),
(269, '9ccd34f2'),
(838, 'a06c5adf'),
(525, 'a4fb0ea4'),
(237, 'ab003d8a'),
(802, 'ab2d9563'),
(623, 'abad27ae'),
(990, 'ace29d49'),
(1228, 'aeb66281'),
(713, 'aed0a8c9'),
(1131, 'af229440'),
(835, 'b5204b33'),
(1231, 'b5237d94'),
(734, 'bb411056'),
(453, 'bc742a2e'),
(926, 'c287c469'),
(218, 'c401e84e'),
(121, 'c54d6df6'),
(525, 'c73fcb0d'),
(314, 'c76de2dc'),
(1230, 'c8ed2d2b'),
(66, 'ca8b4083'),
(39, 'cb70a5f6'),
(624, 'cb92afb5'),
(606, 'cc94b03b'),
(423, 'cf1e098a'),
(25, 'd32eab3a'),
(1100, 'd890c9ba'),
(636, 'dcd8312f'),
(28, 'de27124a'),
(774, 'e4f9159b'),
(269, 'e5b1c7c8'),
(842, 'eba3d92b'),
(269, 'ecae16e5'),
(322, 'ecf2c21e'),
(644, 'edbdc975'),
(549, 'f16f518e'),
(549, 'f2987ee6'),
(1231, 'f43ecaab'),
(573, 'f452fac4'),
(168, 'f87a8d08'),
(26, 'fbb83ae1'),
(621, 'fcf63163'),
(738, 'ff7c4950');

-- --------------------------------------------------------

--
-- Table structure for table `reg_users`
--

CREATE TABLE IF NOT EXISTS `reg_users` (
`Memberid` int(10) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Mob` varchar(141) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Activation` varchar(200) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_users`
--

INSERT INTO `reg_users` (`Memberid`, `Username`, `Email`, `Mob`, `Password`, `Activation`) VALUES
(1, 'Deepak123', 'deodaardeepak@gmail.com', '9898989898', 'd8578edf8458ce06fbc5bb76a58c5ca4', NULL),
(2, 'Admin', 'admin@atma.com', '9898989898', 'd8578edf8458ce06fbc5bb76a58c5ca4', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `position` varchar(45) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `position`) VALUES
(1, 'admin@atma.com', 'admin', 'front desk');

-- --------------------------------------------------------

--
-- Table structure for table `usernames`
--

CREATE TABLE IF NOT EXISTS `usernames` (
`id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usernames`
--

INSERT INTO `usernames` (`id`, `username`) VALUES
(1, 'arunkumar'),
(2, '2my4edge'),
(3, 'hellow'),
(4, 'world'),
(5, 'Deepak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pwdrec`
--
ALTER TABLE `pwdrec`
 ADD UNIQUE KEY `string` (`string`);

--
-- Indexes for table `reg_users`
--
ALTER TABLE `reg_users`
 ADD PRIMARY KEY (`Memberid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `usernames`
--
ALTER TABLE `usernames`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reg_users`
--
ALTER TABLE `reg_users`
MODIFY `Memberid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usernames`
--
ALTER TABLE `usernames`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
