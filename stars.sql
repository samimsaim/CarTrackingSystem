-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2019 at 06:31 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stars`
--

-- --------------------------------------------------------

--
-- Table structure for table `cloths`
--

CREATE TABLE IF NOT EXISTS `cloths` (
`id` int(11) NOT NULL,
  `qad` varchar(100) COLLATE utf8_bin NOT NULL,
  `asten` varchar(100) COLLATE utf8_bin NOT NULL,
  `shana` varchar(100) COLLATE utf8_bin NOT NULL,
  `yakhan` varchar(100) COLLATE utf8_bin NOT NULL,
  `daman` varchar(100) COLLATE utf8_bin NOT NULL,
  `baghal` varchar(100) COLLATE utf8_bin NOT NULL,
  `qadTunban` varchar(100) COLLATE utf8_bin NOT NULL,
  `pacha` varchar(100) COLLATE utf8_bin NOT NULL,
  `astenGol` tinyint(4) NOT NULL,
  `kafBedonPalit` tinyint(4) NOT NULL,
  `kafDar` tinyint(4) NOT NULL,
  `kolor` tinyint(4) NOT NULL,
  `cutKolor` tinyint(4) NOT NULL,
  `nemaBain` tinyint(4) NOT NULL,
  `golBain` tinyint(4) NOT NULL,
  `bedonJaib` tinyint(4) NOT NULL,
  `jaibBaghal` tinyint(4) NOT NULL,
  `jaibTunban` tinyint(4) NOT NULL,
  `patloneTunban` tinyint(4) NOT NULL,
  `charKonjDaman` tinyint(4) NOT NULL,
  `daplSulali` tinyint(4) NOT NULL,
  `custId` int(12) NOT NULL,
  `tailerId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cloths`
--

INSERT INTO `cloths` (`id`, `qad`, `asten`, `shana`, `yakhan`, `daman`, `baghal`, `qadTunban`, `pacha`, `astenGol`, `kafBedonPalit`, `kafDar`, `kolor`, `cutKolor`, `nemaBain`, `golBain`, `bedonJaib`, `jaibBaghal`, `jaibTunban`, `patloneTunban`, `charKonjDaman`, `daplSulali`, `custId`, `tailerId`) VALUES
(16, '8', '789', '9', '87', '987', '87', '98', '78', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 60, 0),
(20, '8', '۵', '9', '87', '۸', '87', '98', '78', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 63, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `lastN` varchar(255) COLLATE utf8_bin NOT NULL,
  `phone` varchar(12) COLLATE utf8_bin NOT NULL,
  `insertDate` date NOT NULL,
  `updateDate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `lastN`, `phone`, `insertDate`, `updateDate`) VALUES
(62, 'عنایت الله', 'ژکفر', '۰۷۸۷۴۴۴۱۴۵', '2019-06-08', '0000-00-00'),
(63, 'jamshaid', 'hamad', '0783670859', '2019-06-10', '2019-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `purches`
--

CREATE TABLE IF NOT EXISTS `purches` (
`id` int(11) NOT NULL,
  `purches` varchar(255) COLLATE utf8_bin NOT NULL,
  `insertDate` datetime NOT NULL,
  `updateDate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `purches`
--

INSERT INTO `purches` (`id`, `purches`, `insertDate`, `updateDate`) VALUES
(2, '988768', '2019-06-10 00:00:00', '0000-00-00 00:00:00'),
(4, '8979878', '2019-06-10 00:00:00', '0000-00-00 00:00:00'),
(5, '8976875', '2019-06-10 00:00:00', '0000-00-00 00:00:00'),
(7, '9879878', '2019-06-10 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sails`
--

CREATE TABLE IF NOT EXISTS `sails` (
`id` int(11) NOT NULL,
  `dailySails` varchar(255) COLLATE utf8_bin NOT NULL,
  `dailyPayment` varchar(255) COLLATE utf8_bin NOT NULL,
  `insertDate` datetime NOT NULL,
  `updateDate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `sails`
--

INSERT INTO `sails` (`id`, `dailySails`, `dailyPayment`, `insertDate`, `updateDate`) VALUES
(2, '09998', '766', '2019-06-03 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `toiler`
--

CREATE TABLE IF NOT EXISTS `toiler` (
`id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `lastN` varchar(255) COLLATE utf8_bin NOT NULL,
  `phone` int(13) NOT NULL,
  `clothMad` int(255) NOT NULL,
  `manyRecieve` varchar(255) COLLATE utf8_bin NOT NULL,
  `clothId` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `toiler`
--

INSERT INTO `toiler` (`id`, `name`, `lastN`, `phone`, `clothMad`, `manyRecieve`, `clothId`) VALUES
(1, 'صمیم', 'hamad', 0, 788, '898', 0),
(2, 'hamad', 'tamim', 78968464, 7, '675', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8_bin NOT NULL,
  `password` varchar(200) COLLATE utf8_bin NOT NULL,
  `user_level` int(2) NOT NULL,
  `phone` varchar(13) COLLATE utf8_bin NOT NULL,
  `create_at` date NOT NULL,
  `update_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_level`, `phone`, `create_at`, `update_at`) VALUES
(2, 'tamim', 'bbe64c8dde712d228aacb15a9c273bc0c15d59cc', 1, '078956847', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `waskat`
--

CREATE TABLE IF NOT EXISTS `waskat` (
`id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `lastN` varchar(255) COLLATE utf8_bin NOT NULL,
  `phone` varchar(255) COLLATE utf8_bin NOT NULL,
  `qad` varchar(250) COLLATE utf8_bin NOT NULL,
  `shana` varchar(250) COLLATE utf8_bin NOT NULL,
  `asten` varchar(250) COLLATE utf8_bin NOT NULL,
  `sena` varchar(250) COLLATE utf8_bin NOT NULL,
  `kamar` varchar(250) COLLATE utf8_bin NOT NULL,
  `soren` varchar(250) COLLATE utf8_bin NOT NULL,
  `design` varchar(250) COLLATE utf8_bin NOT NULL,
  `tailerId` int(200) NOT NULL,
  `insertDate` date NOT NULL,
  `updateDate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `waskat`
--

INSERT INTO `waskat` (`id`, `name`, `lastN`, `phone`, `qad`, `shana`, `asten`, `sena`, `kamar`, `soren`, `design`, `tailerId`, `insertDate`, `updateDate`) VALUES
(3, 'samim', 'saim', '0783670859', '8', '789', '789', '8', '9', '8', '9', 1, '2019-06-27', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cloths`
--
ALTER TABLE `cloths`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purches`
--
ALTER TABLE `purches`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sails`
--
ALTER TABLE `sails`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toiler`
--
ALTER TABLE `toiler`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `waskat`
--
ALTER TABLE `waskat`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cloths`
--
ALTER TABLE `cloths`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `purches`
--
ALTER TABLE `purches`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sails`
--
ALTER TABLE `sails`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `toiler`
--
ALTER TABLE `toiler`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `waskat`
--
ALTER TABLE `waskat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
