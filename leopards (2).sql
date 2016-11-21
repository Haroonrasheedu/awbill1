-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2016 at 12:49 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leopards`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passcode` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `passcode`) VALUES
(1, 'haroon', 'haroon');

-- --------------------------------------------------------

--
-- Table structure for table `awbill`
--

CREATE TABLE `awbill` (
  `awbno` int(11) NOT NULL,
  `date` text NOT NULL,
  `sconper` varchar(255) NOT NULL,
  `scompname` varchar(255) NOT NULL,
  `sflat` int(12) NOT NULL,
  `sbuild` varchar(255) NOT NULL,
  `sstreet` varchar(255) NOT NULL,
  `sarea` varchar(255) NOT NULL,
  `scity` varchar(255) NOT NULL,
  `szip` int(12) NOT NULL,
  `scountry` varchar(255) NOT NULL,
  `sphone` int(15) NOT NULL,
  `ccontper` varchar(255) NOT NULL,
  `consphone` int(15) NOT NULL,
  `ccompname` varchar(255) NOT NULL,
  `cflat` int(12) NOT NULL,
  `cbuilding` varchar(255) NOT NULL,
  `cstreet` varchar(255) NOT NULL,
  `carea` varchar(255) NOT NULL,
  `ccity` varchar(255) NOT NULL,
  `czip` int(12) NOT NULL,
  `ccountry` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `sinst` varchar(255) NOT NULL,
  `pieces` varchar(255) NOT NULL,
  `weight` int(12) NOT NULL,
  `amt` int(12) NOT NULL,
  `pickup` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awbill`
--

INSERT INTO `awbill` (`awbno`, `date`, `sconper`, `scompname`, `sflat`, `sbuild`, `sstreet`, `sarea`, `scity`, `szip`, `scountry`, `sphone`, `ccontper`, `consphone`, `ccompname`, `cflat`, `cbuilding`, `cstreet`, `carea`, `ccity`, `czip`, `ccountry`, `mode`, `sinst`, `pieces`, `weight`, `amt`, `pickup`, `descr`) VALUES
(19, '12-02-2018', 'Mr. Jack', 'LEOPARDS WORLDWIDE', 2, 'Al Dhagya Building', 'Ayal Nasser Street', 'Deira', 'Dubai', 57775, 'AEs', 7877, 'Ms. Asifa', 5593989, 'AL Qannas Cargo', 12, 'Al Dhagaya ', 'Ayal Nasser', 'Deira', 'Dubai', 57775, 'AE', 'Pick-up-Cash', '/ncnd', '02', 2, 25, 'niwas', 'Hardware'),
(23, '12-02-2016', 'Mr. Jack', 'LEOPARDS WORLDWIDE', 2, 'Al Dhagya Building', 'Ayal Nasser Street', 'Deira', 'Dubai', 57775, 'AE', 559105560, 'Ms. Asifa', 5593989, 'AL Qannas Cargo', 12, 'Al Dhagaya ', 'Ayal Nasser', 'Deira', 'Dubai', 57775, 'AE', 'Pick-up-Cash', '/ncnd', '02', 2, 25, 'abbas', 'Hardware'),
(24, '12-02-2016', 'Mr. Jack', 'LEOPARDS WORLDWIDE', 2, 'Al Dhagya Building', 'Ayal Nasser Street', 'Deira', 'Dubai', 57775, 'AE', 559105560, 'Ms.Asifa', 5593989, 'AL Qa', 12, 'Al Dhagaya ', 'Ayal Nasser', 'Deira', 'Dubai', 57775, 'AE', 'Pick-up-Cash', 'ncnd', '02', 2, 25, 'abbas', 'Hardware'),
(25, '12-02-2016', 'Mr. Jack', 'LEOPARDS WORLDWIDE', 2, 'Al Dhagya Building', 'Ayal Nasser Street', 'Deira', 'Dubai', 57775, 'AE', 559105560, 'Ms. Asifa', 5593989, 'AL Qannas Cargo', 12, 'Al Dhagaya ', 'Ayal Nasser', 'Deira', 'Dubai', 57775, 'AE', 'Pick-up-Cash', '/ncnd', '02', 2, 25, 'abbas', 'Hardware'),
(26, '12-02-2016', 'Mr. Jack', 'LEOPARDS WORLDWIDE', 2, 'Al Dhagya Building', 'Ayal Nasser Street', 'Deira', 'Dubai', 57775, 'AE', 559105560, 'Ms. Asifa', 5593989, 'AL Qannas Cargo', 12, 'Al Dhagaya ', 'Ayal Nasser', 'Deira', 'Dubai', 57775, 'AE', 'Pick-up-Cash', '/ncnd', '02', 2, 25, 'abbas', 'Hardware'),
(27, '12-02-2016', 'Mr. Jack', 'LEOPARDS WORLDWIDE', 2, 'Al Dhagya Building', 'Ayal Nasser Street', 'Deira', 'Dubai', 57775, 'AE', 559105560, 'Ms. Asifa', 5593989, 'AL Qannas Cargo', 12, 'Al Dhagaya ', 'Ayal Nasser', 'Deira', 'Dubai', 57775, 'AE', 'Pick-up-Cash', '/ncnd', '02', 2, 25, 'abbas', 'Hardware'),
(28, '12-02-2016', 'Mr. Jack', 'LEOPARDS WORLDWIDE', 2, 'Al Dhagya Building', 'Ayal Nasser Street', 'Deira', 'Dubai', 57775, 'AE', 559105560, 'Ms. Asifa', 5593989, 'AL Qannas Cargo', 12, 'Al Dhagaya ', 'Ayal Nasser', 'Deira', 'Dubai', 57775, 'AE', 'Pick-up-Cash', '/ncnd', '02', 2, 25, 'abbas', 'Hardware'),
(29, '12-02-2016', 'Mr. Jack', 'LEOPARDS WORLDWIDE', 2, 'Al Dhagya Building', 'Ayal Nasser Street', 'Deira', 'Dubai', 57775, 'AE', 559105560, 'Ms. Asifa', 5593989, 'AL Qannas Cargo', 12, 'Al Dhagaya ', 'Ayal Nasser', 'Deira', 'Dubai', 57775, 'AE', 'Pick-up-Cash', '/ncnd', '02', 2, 25, 'abbas', 'Hardware'),
(30, '12-02-2016', 'Mr. Jack', 'LEOPARDS WORLDWIDE', 2, 'Al Dhagya Building', 'Ayal Nasser Street', 'Deira', 'Dubai', 57775, 'AE', 559105560, 'Ms. Asifa', 5593989, 'AL Qannas Cargo', 12, 'Al Dhagaya ', 'Ayal Nasser', 'Deira', 'Dubai', 57775, 'AE', 'Pick-up-Cash', '/ncnd', '02', 2, 25, 'abbas', 'Hardware'),
(31, '12-02-2016', 'Mr. Jack', 'LEOPARDS WORLDWIDE', 2, 'Al Dhagya Building', 'Ayal Nasser Street', 'Deira', 'Dubai', 57775, 'AE', 559105560, 'Ms. Asifa', 5593989, 'AL Qannas Cargo', 12, 'Al Dhagaya ', 'Ayal Nasser', 'Deira', 'Dubai', 57775, 'AE', 'Pick-up-Cash', '/ncnd', '02', 2, 25, 'abbas', 'Hardware'),
(32, '12-02-2016', 'Mr. Jack', 'LEOPARDS WORLDWIDE', 2, 'Al Dhagya Building', 'Ayal Nasser Street', 'Deira', 'Dubai', 57775, 'AE', 559105560, 'Ms. Asifa', 5593989, 'AL Qannas Cargo', 12, 'Al Dhagaya ', 'Ayal Nasser', 'Deira', 'Dubai', 57775, 'AE', 'Pick-up-Cash', '/ncnd', '02', 2, 25, 'abbas', 'Hardware');

-- --------------------------------------------------------

--
-- Table structure for table `consignee`
--

CREATE TABLE `consignee` (
  `cid` int(11) NOT NULL,
  `ccontper` varchar(255) NOT NULL,
  `compname` varchar(255) NOT NULL,
  `consphone` int(12) NOT NULL,
  `flat` int(12) NOT NULL,
  `building` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` int(12) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consignee`
--

INSERT INTO `consignee` (`cid`, `ccontper`, `compname`, `consphone`, `flat`, `building`, `street`, `area`, `city`, `zip`, `country`) VALUES
(1, 'Mr. Haroon', 'AL BAA', 559102345, 2, 'Sogo ', 'King Faisal Street', 'Rolla', 'Sharjah', 432, 'AE'),
(2, 'Mr. Rasheed', 'AL Dora', 559102345, 2, 'Al Dhagaya', 'Ayal', 'Rolla', 'Dubai', 53, 'AE'),
(3, 'Mr. Rasheed', 'AL Dor', 559102345, 2, 'Al Dhagaya', 'Ayal', 'Rolla', 'Dubai', 43, 'AE'),
(4, 'Mr. Rasheed', 'ALL BAA', 559102345, 2, 'SOGO', 'King Faisal Street', 'Rolla', 'Sharjah', 58998, 'AE'),
(5, '', 'hj', 9, 9, 'hj', 'j', 'h', 'Dubai', 43, 'AE'),
(6, '', 'hj', 9, 9, 'hj', 'j', 'h', 'Dubai', 43, 'AE'),
(7, '', 'hj', 9, 9, 'hj', 'j', 'h', 'Dubai', 43, 'AE'),
(8, '', 'hj', 9, 9, 'hj', 'j', 'h', 'Dubai', 43, 'AE'),
(9, 'hj', 'hj', 8, 87, 'j', 'g', 'h', 'Dubai', 8, 'AF'),
(10, 'hj', 'hj', 8, 87, 'j', 'g', 'h', 'Dubai', 8, 'AF'),
(11, 'jh', 'hj', 98, 8, 'j', 'kh', 'kj', 'Dubai', 9, 'AF'),
(12, 'hj', 'fd', 98, 89, 'jh', 'jh', 'j', 'Dubai', 8, 'AF');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `firstname`, `lastname`) VALUES
(1, 'haneef irfa', 'Mohammed haseef');

-- --------------------------------------------------------

--
-- Table structure for table `sender`
--

CREATE TABLE `sender` (
  `sid` int(12) NOT NULL,
  `sconper` varchar(255) NOT NULL,
  `scompname` varchar(255) NOT NULL,
  `sflat` int(12) NOT NULL,
  `sbuild` varchar(255) NOT NULL,
  `sstreet` varchar(255) NOT NULL,
  `sarea` varchar(255) NOT NULL,
  `scity` varchar(255) NOT NULL,
  `szip` int(12) NOT NULL,
  `scountry` varchar(255) NOT NULL,
  `sphone` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sender`
--

INSERT INTO `sender` (`sid`, `sconper`, `scompname`, `sflat`, `sbuild`, `sstreet`, `sarea`, `scity`, `szip`, `scountry`, `sphone`) VALUES
(1, 'Mr.Haroon', 'AL BAA', 2, 'Al Dhagaya Building', 'Ayal Nasser Street', 'Deira', 'Dubai', 57775, 'AE', 559105560),
(2, 'Mr.Haroon', 'AL BAA', 2, 'King Faisal', 'Ayal', 'Rolla', 'Dubai', 34, 'AE', 559105560),
(3, 'Mr.Haroon', 'AL BAA', 2, 'Al Dhagaya Building', 'Ayal Nasser Street', 'Deira', 'Dubai', 57775, 'AE', 559105560),
(4, 'jh', 'j', 98, 'ii', 'hj', 'j', 'Dubai', 980, 'AF', 90),
(5, '`jh', 'hj', 98, 'jh', 'j', 'jk', 'Dubai', 98, 'AF', 89),
(6, 'jhk', 'hj', 89, 'hj', 'h', 'jk', 'Dubai', 980, 'AF', 8),
(7, 'jhk', 'hj', 89, 'hj', 'h', 'jk', 'Dubai', 980, 'AF', 8),
(8, 'hjk', 'hj', 98, 'jk', 'jh', 'hj', 'Dubai', 980, 'AF', 89);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `cpassword`) VALUES
(1, 'Haroon', 'rasheedharoonu@gmail.com', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c'),
(2, 'Ameer', 'ameer@gmail.com', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c'),
(3, 'h', 'h@gmail.com', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c'),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, 'fdsa', 's@gmail.com', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c'),
(20, 'haroon', 'haroon@gmail.com', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c'),
(21, 'har', 'dhar@gmail.com', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c'),
(22, 'haneef', 'haneef@gmail.com', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c'),
(23, 'haroon', 'rasheed@gmail.com', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c'),
(24, 'Haroon Rasheed', 'haneef@gmail.com', 'ab9587890ddf183c3c9d7f23d952d869', 'ab9587890ddf183c3c9d7f23d952d869'),
(25, 'hdsfaf', 'h@gmail.com', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c'),
(26, 'Asifa', 'asifa@gmail.com', '9e4c35255bb8015fe8dba76ccaf595ed', '9e4c35255bb8015fe8dba76ccaf595ed'),
(27, 'ashik', 'as@gmail.com', 'c7dc74ce73b27808500b7f1f1e3a880e', 'c7dc74ce73b27808500b7f1f1e3a880e'),
(28, 'ashik', 'as@gmail.com', 'c7dc74ce73b27808500b7f1f1e3a880e', 'c7dc74ce73b27808500b7f1f1e3a880e'),
(29, 'Rasheed', 'rasheed@gmail.com', '2c3987bc0adbe2e83765feb252b8dbbe', '2c3987bc0adbe2e83765feb252b8dbbe'),
(30, 'jahir', 'jahir@gmail.com', '508c439a252ffd60d8062060cc1dd0bd', '508c439a252ffd60d8062060cc1dd0bd'),
(31, 'jahir', 'jahir@gmail.com', '508c439a252ffd60d8062060cc1dd0bd', '508c439a252ffd60d8062060cc1dd0bd'),
(32, 'Sathil', 'sathik@gmail.com', '28014193a42d982b53d98a7a5d162c1f', '28014193a42d982b53d98a7a5d162c1f'),
(33, 'waqas', 'waqas@gmail.com', '0b216aae1f63fdb520d896652b03ce53', '0b216aae1f63fdb520d896652b03ce53'),
(34, 'fas', 'a@gmail.com', '9ae01c1a4cc577e7d46a733968a75478', '9ae01c1a4cc577e7d46a733968a75478'),
(35, 'haseef', 'haneef@gmail.com', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c'),
(36, 'haroon', 'he@gmail.com', 'ab9587890ddf183c3c9d7f23d952d869', 'ab9587890ddf183c3c9d7f23d952d869'),
(37, 'ja', 'ja@gmail.com', '508c439a252ffd60d8062060cc1dd0bd', '508c439a252ffd60d8062060cc1dd0bd'),
(38, 'Haq', 'haq@gmail.com', 'f20355e6ae208fdcebe8f6b980a6b174', 'f20355e6ae208fdcebe8f6b980a6b174'),
(39, 'safi', 'safi@gmail.com', 'bf653979187a7d8181d165b0d01cc3dc', 'bf653979187a7d8181d165b0d01cc3dc'),
(40, 'arsalan', 'arsalan@gmail.com', 'ab9587890ddf183c3c9d7f23d952d869', 'ab9587890ddf183c3c9d7f23d952d869'),
(41, 'leopards', 'leopards@gmail.com', '5a3f6998ba1b459df5e69c89b21b113b', '5a3f6998ba1b459df5e69c89b21b113b'),
(42, '&lt;br /&gt;&lt;font size=\'1\'&gt;&lt;table class=\'xdebug-error xe-notice\' dir=\'ltr\' border=\'1\' cellspacing=\'0\' cellpadding=\'1\'&gt;&lt;tr&gt;&lt;th align=\'left\' bgcolor=\'#f57900\' colspan=', '&lt;br /&gt;&lt;font size=\'1\'&gt;&lt;table class=\'xdebug-error xe-notice\' dir=\'ltr\' border=\'1\' cellspacing=\'0\' cellpadding=\'1\'&gt;&lt;tr&gt;&lt;th align=\'left\' bgcolor=\'#f57900\' colspan=', '&lt;br /&gt;&lt;font size=\'1\'&gt;&lt;table class=\'xdebug-error xe-notice\' dir=\'ltr\' border=\'1\' cellspacing=\'0\' cellpadding=\'1\'&gt;&lt;tr&gt;&lt;th align=\'left\' bgcolor=\'#f57900\' colspan=', '&lt;br /&gt;&lt;font size=\'1\'&gt;&lt;table class=\'xdebug-error xe-notice\' dir=\'ltr\' border=\'1\' cellspacing=\'0\' cellpadding=\'1\'&gt;&lt;tr&gt;&lt;th align=\'left\' bgcolor=\'#f57900\' colspan='),
(43, '&lt;br /&gt;&lt;font size=\'1\'&gt;&lt;table class=\'xdebug-error xe-notice\' dir=\'ltr\' border=\'1\' cellspacing=\'0\' cellpadding=\'1\'&gt;&lt;tr&gt;&lt;th align=\'left\' bgcolor=\'#f57900\' colspan=', '&lt;br /&gt;&lt;font size=\'1\'&gt;&lt;table class=\'xdebug-error xe-notice\' dir=\'ltr\' border=\'1\' cellspacing=\'0\' cellpadding=\'1\'&gt;&lt;tr&gt;&lt;th align=\'left\' bgcolor=\'#f57900\' colspan=', '&lt;br /&gt;&lt;font size=\'1\'&gt;&lt;table class=\'xdebug-error xe-notice\' dir=\'ltr\' border=\'1\' cellspacing=\'0\' cellpadding=\'1\'&gt;&lt;tr&gt;&lt;th align=\'left\' bgcolor=\'#f57900\' colspan=', '&lt;br /&gt;&lt;font size=\'1\'&gt;&lt;table class=\'xdebug-error xe-notice\' dir=\'ltr\' border=\'1\' cellspacing=\'0\' cellpadding=\'1\'&gt;&lt;tr&gt;&lt;th align=\'left\' bgcolor=\'#f57900\' colspan='),
(44, 'Liyakath Ali', 'ali@gmail.com', 'Ali111', 'Ali111'),
(45, 'haneef', 'haseef@gmail.com', 'ab9587890ddf183c3c9d7f23d952d869', 'ab9587890ddf183c3c9d7f23d952d869');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `testid` int(11) NOT NULL,
  `testname` varchar(255) NOT NULL,
  `testadd` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`testid`, `testname`, `testadd`) VALUES
(1, 'haroon', 'haroon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awbill`
--
ALTER TABLE `awbill`
  ADD PRIMARY KEY (`awbno`);

--
-- Indexes for table `consignee`
--
ALTER TABLE `consignee`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sender`
--
ALTER TABLE `sender`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`testid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `awbill`
--
ALTER TABLE `awbill`
  MODIFY `awbno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `consignee`
--
ALTER TABLE `consignee`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sender`
--
ALTER TABLE `sender`
  MODIFY `sid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `testid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
