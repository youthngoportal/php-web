-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2015 at 05:42 PM
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
  `mobile` bigint(255) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `link` varchar(1024) NOT NULL,
  `tags` varchar(1024) NOT NULL,
  `verified` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo_detail`
--

INSERT INTO `ngo_detail` (`id`, `name`, `unique_id`, `contact_name`, `area`, `city`, `district`, `mobile`, `email`, `link`, `tags`, `verified`) VALUES
(1, 'nav', 'A14541S', 'Navneet', 'info', 'gandhinagar', 'gandhinagar', 2147483647, 'navnatgmail', 'facebook.com', 'peace', 0),
(4, 'JeevanDena', 'GJ/2011/A5HYT7547', 'Mr. Ramesh Yadav Ji', 'Maneka Gaon', 'Dudh Jagah', 'Narmada', 91, 'navsss@gmail.com', 'http://google.com', 'Healthcare', 0),
(60, 'tyrrjhyg', '', '', '', '', 'Ahmedabad', 91, '', 'http://', 'Poverty', 0),
(61, 'Jeevan Booti', 'GJ/2003/3520', 'Vikki', 'Ramiya', 'Pur', 'Surendranagar', 918747854785, 'bhanupratapsinghrathore19@gmail.com', 'http://google.com', 'Disability', 0),
(62, 'Jeevan Booti', 'GJ/2003/3520', 'Vikki', 'Ramiya', 'Pur', 'Surendranagar', 918747854785, 'bhanupratapsinghrathore19@gmail.com', 'http://google.com', 'Disability', 0),
(63, '', '', '', '', '', 'Ahmedabad', 91, '', 'http://', 'Child Welfare', 0),
(64, 'dsad', 'das', '', '', '', 'Ahmedabad', 91, '', 'http://', 'Child Welfare', 0),
(65, 'dsadasiojgodfk[gd5f46g54fd+6fgv', '', '', '', '', 'Ahmedabad', 91, '', 'http://', 'Child Welfare', 0),
(66, 'Roy', '745ASASA', 'bdhsab', 'LOL', 'sds', 'Dahod', 915745454, '', 'http://', 'Child Welfare', 0),
(67, 'dsa', 'dsa', 'dsa', '', '', 'Bhavnagar', 91, '', 'http://', 'Environment', 0);

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
-- Indexes for table `tags`
--
ALTER TABLE `tags`
 ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ngo_detail`
--
ALTER TABLE `ngo_detail`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
