-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2017 at 09:08 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spiderbull`
--

-- --------------------------------------------------------

--
-- Table structure for table `getval`
--

CREATE TABLE `getval` (
  `srno` int(60) NOT NULL,
  `userid` int(60) NOT NULL,
  `location` int(60) NOT NULL,
  `NAV` double(50,5) NOT NULL,
  `UNIT` decimal(60,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `getval`
--

INSERT INTO `getval` (`srno`, `userid`, `location`, `NAV`, `UNIT`) VALUES
(28, 3, 501, 109.85000, '12.00000'),
(29, 3, 648, 22.29330, '14.00000'),
(30, 3, 767, 87.97250, '12.00000'),
(31, 8, 130, 196.05000, '12.00000'),
(32, 8, 382, 124.29500, '42.00000'),
(33, 10, 11, 10.91800, '42.00000'),
(34, 10, 452, 446.11700, '12.00000'),
(35, 7, 11, 10.85360, '22.00000'),
(36, 7, 151, 641.92999, '22.00000'),
(37, 7, 375, 28.14300, '222.00000'),
(38, 7, 676, 40.14120, '22.00000'),
(39, 7, 1061, 29.56670, '33.00000'),
(40, 7, 1404, 11.05000, '33.00000'),
(41, 4, 11, 10.85360, '33.00000'),
(42, 4, 228, 123.88000, '45.00000'),
(43, 4, 599, 41.90150, '56.00000'),
(44, 4, 963, 65.40460, '36.00000'),
(45, 4, 1341, 47.77000, '676.00000'),
(46, 4, 1404, 11.05000, '4.00000'),
(47, 6, 11, 10.85360, '74.00000'),
(48, 6, 193, 10.53190, '45.00000'),
(49, 6, 333, 110.79790, '45.00000'),
(50, 6, 452, 442.14499, '44.00000'),
(51, 6, 739, 16.92100, '55.00000'),
(52, 6, 942, 79.76720, '64.00000'),
(53, 6, 1299, 39.20000, '11.00000'),
(54, 6, 1404, 11.05000, '21.00000'),
(58, 12, 11, 10.85360, '23.00000'),
(59, 12, 151, 641.92999, '45.00000'),
(60, 12, 11, 10.85360, '23.00000'),
(61, 16, 18, 10.96100, '343.00000'),
(62, 16, 319, 18.15340, '56.00000'),
(63, 16, 767, 88.23220, '67.00000'),
(69, 18, 130, 197.21000, '1.00000');

-- --------------------------------------------------------

--
-- Table structure for table `logindetail`
--

CREATE TABLE `logindetail` (
  `userid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(12) NOT NULL,
  `pan` varchar(50) NOT NULL,
  `currentRate` decimal(60,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logindetail`
--

INSERT INTO `logindetail` (`userid`, `name`, `dob`, `pan`, `currentRate`) VALUES
(1, 'abhijeet', '0000-00-00', 'a', '1.00000'),
(2, 'rahul', '0000-00-00', 'a', '0.00000'),
(3, 'rohan', '0000-00-00', 'a', '0.00273'),
(4, 'atul', '0000-00-00', 'adfasdf', '0.01528'),
(5, 'rohit', '0000-00-00', 'a', '0.00000'),
(6, 'rakesh', '0000-00-00', 'a', '0.01453'),
(7, 'anshul', '2017-01-12', 'a', '0.01310'),
(8, 'gaurav', '0000-00-00', 'a', '0.00767'),
(9, 'mahesh', '0000-00-00', 'a', '0.00000'),
(10, 'amrendra', '0000-00-00', 'a', '0.00775'),
(11, 'a', '2017-12-31', 'a', '0.00000'),
(12, 'b', '0000-00-00', 'a', '0.01283'),
(13, 'internjeet', '0000-00-00', 'a', '0.00000'),
(14, 'it', '0000-00-00', 'a', '0.00000'),
(15, 'cs', '0000-00-00', 'a', '0.00000'),
(16, 'ece', '0000-00-00', 'a', '0.00000'),
(17, 'final', '0000-00-00', 'a', '0.00000'),
(18, 'voila', '02/01/2017', 'a', '0.00000');

-- --------------------------------------------------------

--
-- Table structure for table `userdashboard`
--

CREATE TABLE `userdashboard` (
  `srno` int(60) NOT NULL,
  `USERID` int(60) NOT NULL,
  `MFNAME` varchar(200) NOT NULL,
  `NAV (buyingprice)` double(50,5) NOT NULL,
  `UNITSPURCHASED` decimal(65,2) NOT NULL,
  `DATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdashboard`
--

INSERT INTO `userdashboard` (`srno`, `USERID`, `MFNAME`, `NAV (buyingprice)`, `UNITSPURCHASED`, `DATE`) VALUES
(43, 7, 'Axis Children*s Gift Fund - Lock in - Dividend', 10.72350, '44.00', '0000-00-00 00:00:00'),
(53, 3, 'Axis Children*s Gift Fund - Lock in - Direct Dividend', 10.91800, '14.00', '2017-01-31 18:54:45'),
(54, 3, 'BARODA PIONEER BALANCE FUND - Plan B (Direct) - Growth Option', 49.23000, '18.00', '2017-01-31 18:54:45'),
(55, 3, 'Edelweiss Balanced Advantage Fund - Regular Plan - Bonus Option', 10.37730, '20.00', '2017-01-31 18:54:45'),
(56, 3, 'IDBI Prudence Fund Dividend Direct', 10.51190, '25.00', '2017-01-31 18:54:45'),
(57, 3, 'ICICI Prudential Balanced Fund - Growth', 109.85000, '12.00', '2017-01-31 18:57:02'),
(58, 3, 'JM Balanced Fund (Direct) - Quarterly Dividend Option', 22.29330, '14.00', '2017-01-31 18:57:03'),
(59, 3, 'LIC MF Balanced Fund-Growth', 87.97250, '12.00', '2017-01-31 18:57:03'),
(60, 8, 'Birla Sun Life Balanced *95 Fund - Direct Plan-Dividend', 196.05000, '12.00', '2017-01-31 19:33:18'),
(61, 8, 'HDFC Balanced Fund - Growth Option', 124.29500, '42.00', '2017-01-31 19:33:18'),
(62, 10, 'Axis Children*s Gift Fund - Lock in - Direct Dividend', 10.91800, '42.00', '2017-01-31 19:42:28'),
(63, 10, 'HDFC Prudence Fund -Direct Plan - Growth Option', 446.11700, '12.00', '2017-01-31 19:42:28'),
(64, 7, 'Axis Children*s Gift Fund - Lock in - Direct Dividend', 10.85360, '22.00', '2017-02-01 01:30:00'),
(65, 7, 'Birla Sun Life Balanced *95 Fund - Regular Plan-Growth', 641.93000, '22.00', '2017-02-01 01:30:00'),
(66, 7, 'HDFC Balanced Fund - Dividend Option', 28.14300, '222.00', '2017-02-01 01:30:00'),
(67, 7, 'JM Balanced Fund - Half Yearly Bonus Option - Principal Units', 40.14120, '22.00', '2017-02-01 01:30:00'),
(68, 7, 'UTI - Balanced Fund-Income - Direct', 29.56670, '33.00', '2017-02-01 01:30:00'),
(69, 7, 'DHFL Pramerica Tax Savings Fund - Regular Plan - Dividend Option', 11.05000, '33.00', '2017-02-01 01:30:00'),
(70, 4, 'Axis Children*s Gift Fund - Lock in - Direct Dividend', 10.85360, '33.00', '2017-02-01 01:34:41'),
(71, 4, 'Canara Robeco Balance - Regular Plan - Growth', 123.88000, '45.00', '2017-02-01 01:34:41'),
(72, 4, 'JM Balanced Fund (Direct) - Bonus Option - Principal Units', 41.90150, '56.00', '2017-02-01 01:34:41'),
(73, 4, 'Tata Balanced Fund Regular Plan- Monthly Dividend Option', 65.40460, '36.00', '2017-02-01 01:34:41'),
(74, 4, 'Canara Robeco Equity Taxsaver - Regular Plan - Growth', 47.77000, '676.00', '2017-02-01 01:34:41'),
(75, 4, 'DHFL Pramerica Tax Savings Fund - Regular Plan - Dividend Option', 11.05000, '4.00', '2017-02-01 01:34:41'),
(76, 6, 'Axis Children*s Gift Fund - Lock in - Direct Dividend', 10.85360, '74.00', '2017-02-01 01:35:58'),
(77, 6, 'BOI AXA EQUITY DEBT REBALANCER FUND  REGULAR PLAN DIVIDEND', 10.53190, '45.00', '2017-02-01 01:35:58'),
(78, 6, 'Escorts Balanced Fund-Growth Option', 110.79790, '45.00', '2017-02-01 01:35:58'),
(79, 6, 'HDFC Prudence Fund -Direct Plan - Growth Option', 442.14500, '44.00', '2017-02-01 01:35:58'),
(80, 6, 'Kotak Balance - Dividend - Direct', 16.92100, '55.00', '2017-02-01 01:35:58'),
(81, 6, 'Tata Balanced Fund -Direct Plan-Dividend Option', 79.76720, '64.00', '2017-02-01 01:35:58'),
(82, 6, 'BOI AXA Tax Advantage Fund-Regular Plan- Growth', 39.20000, '11.00', '2017-02-01 01:35:58'),
(83, 6, 'DHFL Pramerica Tax Savings Fund - Regular Plan - Dividend Option', 11.05000, '21.00', '2017-02-01 01:35:58'),
(87, 12, 'Axis Children*s Gift Fund - Lock in - Direct Dividend', 10.85360, '23.00', '2017-02-01 09:23:45'),
(88, 12, 'Birla Sun Life Balanced *95 Fund - Regular Plan-Growth', 641.93000, '45.00', '2017-02-01 09:23:46'),
(89, 12, 'Axis Children*s Gift Fund - Lock in - Direct Dividend', 10.85360, '23.00', '2017-02-01 17:09:11'),
(90, 16, 'Axis Children*s Gift Fund - Lock in - Direct Growth', 10.96100, '343.00', '2017-02-01 21:26:41'),
(91, 16, 'Escorts Balanced Fund-Dividend Option', 18.15340, '56.00', '2017-02-01 21:26:41'),
(92, 16, 'LIC MF Balanced Fund-Growth', 88.23220, '67.00', '2017-02-01 21:26:42'),
(98, 18, 'Birla Sun Life Balanced *95 Fund - Direct Plan-Dividend', 197.21000, '1.00', '2017-02-02 00:06:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `getval`
--
ALTER TABLE `getval`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `logindetail`
--
ALTER TABLE `logindetail`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `userdashboard`
--
ALTER TABLE `userdashboard`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `getval`
--
ALTER TABLE `getval`
  MODIFY `srno` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `logindetail`
--
ALTER TABLE `logindetail`
  MODIFY `userid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `userdashboard`
--
ALTER TABLE `userdashboard`
  MODIFY `srno` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
