-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2015 at 08:21 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `youth`
--

-- --------------------------------------------------------

--
-- Table structure for table `guj_ctd`
--

CREATE TABLE IF NOT EXISTS `guj_ctd` (
  `id` int(11) NOT NULL,
  `district` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guj_ctd`
--

INSERT INTO `guj_ctd` (`id`, `district`) VALUES
(1, 'Ahmedabad'),
(2, 'Amreli district'),
(3, 'Anand'),
(4, 'Banaskantha'),
(5, 'Bharuch'),
(6, 'Bhavnagar'),
(7, 'Dahod'),
(8, 'The Dangs'),
(9, 'Gandhinagar'),
(10, 'Jamnagar'),
(11, 'Junagadh'),
(12, 'Kutch'),
(13, 'Kheda'),
(14, 'Mehsana'),
(15, 'Narmada'),
(16, 'Navsari'),
(17, 'Patan'),
(18, 'Panchmahal'),
(19, 'Porbandar'),
(20, 'Rajkot'),
(21, 'Sabarkantha'),
(22, 'Surendranagar'),
(23, 'Surat'),
(24, 'Tapi'),
(25, 'Vadodara'),
(26, 'Valsad');

-- --------------------------------------------------------

--
-- Table structure for table `ngo_detail`
--

CREATE TABLE IF NOT EXISTS `ngo_detail` (
`id` int(100) NOT NULL,
  `name` varchar(1024) NOT NULL,
  `unique_id` varchar(1024) NOT NULL,
  `contact_name` varchar(1024) NOT NULL,
  `area` varchar(1024) NOT NULL,
  `city` varchar(1024) NOT NULL,
  `district` varchar(1024) NOT NULL,
  `state` varchar(200) NOT NULL,
  `mobile` bigint(255) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `link` varchar(1024) NOT NULL,
  `tags` varchar(1024) NOT NULL,
  `images_path` varchar(64) NOT NULL,
  `verified` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo_detail`
--

INSERT INTO `ngo_detail` (`id`, `name`, `unique_id`, `contact_name`, `area`, `city`, `district`, `state`, `mobile`, `email`, `link`, `tags`, `images_path`, `verified`) VALUES
(1, 'test', 'test_blah', 'Navneet', 'DAIICT', 'test_city', 'Ahmedabad', 'test_state', 1111111111, 'test_email', 'test_link', 'test_tag', '', 1),
(102, 'Jeevantirth', '', 'Raju Deepti', 'Juna KOBA', 'Gandhinagar', 'Gandhinagar', 'Gujarat', 9898110897, 'jeevantirth@hotmail.com', 'http://www.jeevantirth.org', 'Education', 'assets/ngos/jeevan.png', 1),
(103, 'Arzoo', '', 'Sulekha Ali', 'Jamalpur Cross Road', 'Ahmedabad', 'Ahmedabad', 'Gujarat', 9374041393, 'info@hamaripathshala.org', 'http://www.arzoolive.org/', 'Education', 'assets/ngos/arzoo.png', 1),
(104, 'dsa', 'd', '', '', '', 'Ahmedabad', '', 91, '', 'http://', 'Child Welfare', '', 0),
(105, 'dsa', 'd', '', '', '', 'Ahmedabad', '', 91, '', 'http://', 'Child Welfare', '', 0),
(106, '', '', '', '', '', 'Ahmedabad', '', 91, 'test', 'http://', 'Child Welfare', '', 0),
(107, '', '', '', '', '', 'Ahmedabad', '', 91, 'nav@gmail.com', 'http://', 'Child Welfare', '', 0),
(108, '', '', '', '', '', 'Ahmedabad', '', 91, 'nav@gmail.com', 'http://', 'Child Welfare', '', 0),
(109, 'asd', 'das', 'ads', 'das', 'sada', 'Ahmedabad', '', 91, 'das', 'http://sad', 'Child Welfare', '', 0),
(110, 'dasd', 'dsa', 'sd', 'dsa', 'dsa', 'Ahmedabad', '', 91, 'bhanupratapsinghrathore19@gmail.com', 'http://', 'Child Welfare', '', 0),
(111, 'dasd', 'dsa', 'sd', 'dsa', 'dsa', 'Ahmedabad', '', 91, 'bhanupratapsinghrathore19@gmail.com', 'http://', 'Child Welfare', '', 0),
(112, 'dasd', 'dsa', 'sd', 'dsa', 'dsa', 'Ahmedabad', '', 91, 'bhanupratapsinghrathore19@gmail.com', 'http://', 'Child Welfare', '', 0),
(113, 'dasd', 'dsa', 'sd', 'dsa', 'dsa', 'Ahmedabad', '', 91, 'bhanupratapsinghrathore19@gmail.com', 'http://', 'Child Welfare', '', 0),
(114, 'dasd', 'dsa', 'sd', 'dsa', 'dsa', 'Ahmedabad', '', 91, 'bhanupratapsinghrathore19@gmail.com', 'http://', 'Child Welfare', '', 0),
(115, 'dasd', 'dsa', 'sd', 'dsa', 'dsa', 'Ahmedabad', '', 91, 'bhanupratapsinghrathore19@gmail.com', 'http://', 'Child Welfare', '', 0),
(116, 'dasd', 'dsa', 'sd', 'dsa', 'dsa', 'Ahmedabad', '', 91, 'bhanupratapsinghrathore19@gmail.com', 'http://', 'Child Welfare', '', 0),
(117, 'dasd', 'dsa', 'sd', 'dsa', 'dsa', 'Ahmedabad', '', 91, 'bhanupratapsinghrathore19@gmail.com', 'http://', 'Child Welfare', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ngo_lgn`
--

CREATE TABLE IF NOT EXISTS `ngo_lgn` (
`lg_id` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo_lgn`
--

INSERT INTO `ngo_lgn` (`lg_id`, `id`, `username`, `password`) VALUES
(1, 1, 'test', NULL),
(2, 2, 'test2', NULL),
(55, 45, 'cx', NULL),
(99, 102, 'admin', 'test123.'),
(100, 1, 'test1', 'edbd1887e772e13c251f688a5f10c1ffbb67960d');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE IF NOT EXISTS `subscribe` (
`sid` int(10) NOT NULL,
  `id` int(100) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`sid`, `id`, `email`) VALUES
(1, 103, 'test'),
(39, 103, 'das'),
(40, 103, 'hfhdsfbsdf'),
(41, 103, 'hfhdsfbsdf'),
(42, 103, 'hfhdsfbsdf'),
(43, 102, 'namste'),
(44, 1, 'nav@gmail.com'),
(45, 1, 'navneet3520@gmail.com'),
(46, 1, 'bhanupratapsinghrathore19@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `tid` int(11) NOT NULL DEFAULT '0',
  `name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tid`, `name`) VALUES
(1, 'Child Welfare'),
(2, 'Education'),
(3, 'Poverty'),
(4, 'Clothing & Shelter'),
(5, 'Environment'),
(6, 'Healthcare'),
(7, 'HIV-AIDS'),
(8, 'Gender Equality'),
(9, 'Human Rights'),
(10, 'Women Rights & Empowerment'),
(11, 'Acid Attacks'),
(12, 'Women Safety'),
(13, 'Elderly People Welfare'),
(14, 'Disability'),
(15, 'Youth Welfare'),
(16, 'Active Citizenship'),
(17, 'Street Children'),
(18, 'Girl Child'),
(19, 'E-Governance'),
(20, 'Employment'),
(21, 'Right To Information'),
(22, 'Yoga');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` smallint(5) unsigned NOT NULL,
  `flags` set('validate') NOT NULL DEFAULT 'validate',
  `created` int(10) unsigned NOT NULL,
  `lastlogin` int(10) unsigned NOT NULL,
  `username` varchar(255) NOT NULL,
  `salt` binary(32) NOT NULL,
  `password` binary(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guj_ctd`
--
ALTER TABLE `guj_ctd`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo_detail`
--
ALTER TABLE `ngo_detail`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo_lgn`
--
ALTER TABLE `ngo_lgn`
 ADD PRIMARY KEY (`lg_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
 ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
 ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ngo_detail`
--
ALTER TABLE `ngo_detail`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `ngo_lgn`
--
ALTER TABLE `ngo_lgn`
MODIFY `lg_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
