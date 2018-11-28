-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 12:55 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fruitadda`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruit_store`
--

CREATE TABLE `fruit_store` (
  `seller_email` varchar(40) DEFAULT NULL,
  `fruit_name` varchar(40) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruit_store`
--

INSERT INTO `fruit_store` (`seller_email`, `fruit_name`, `quantity`, `price`) VALUES
('charan@gmail.com', 'aplle', 3, 2),
('alluaravind1313@gmail.com', 'apple', 25, 1),
('pa1kumarmaddula@gmail.com', 'banana', 13, 2),
('alluaravind1313@gmail.com', 'custard', 34, 3),
('ram@gmail.com', 'fruit3', 500, 156),
('ram@gmail.com', 'fruit4', 100, 12),
('ram@gmail.com', 'fruit5', 500, 200),
('ram@gmail.com', 'fruit6', 10, 1200),
('ram@gmail.com', 'fruit7', 150, 1000),
('ram@gmail.com', 'fruit8', 100, 15),
('charan@gmail.com', 'mango', 3, 11),
('alluaravind1313@gmail.com', 'pappaaya', 190, 2),
('alluaravind1313@gmail.com', 'pappaya', 45, 30),
('alluaravind1313@gmail.com', 'pine', 45, 34),
('ram@gmail.coma', 'sapota', 1000, 10),
('pa1kumarmaddula@gmail.com', 'apple', 10, 1),
('pa1kumarmaddula@gmail.com', 'mango', 15, 1),
('pa1kumarmaddula@gmail.com', 'pine', 20, 2),
('sundar@gmail.com', 'apple', 0, 1),
('sundar@gmail.com', 'banana', 0, 1),
('sundar@gmail.com', 'pine', 0, 1),
('sundar@gmail.com', 'sapota', 2, 1),
('gopi@gmail.com', 'orange', 0, 1),
('gopi@gmail.com', 'apple', 0, 1),
('gopi@gmail.com', 'pappaya', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchasetable`
--

CREATE TABLE `purchasetable` (
  `seller_email` varchar(255) NOT NULL,
  `buyer_email` varchar(255) NOT NULL,
  `temp_fruitname` varchar(255) NOT NULL,
  `tempquan` int(128) NOT NULL,
  `tempprice` bigint(255) NOT NULL,
  `seller_wallet` int(255) NOT NULL,
  `buyer_wallet` int(255) NOT NULL,
  `currentdate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchasetable`
--

INSERT INTO `purchasetable` (`seller_email`, `buyer_email`, `temp_fruitname`, `tempquan`, `tempprice`, `seller_wallet`, `buyer_wallet`, `currentdate`) VALUES
('sundar@gmail.com', 'alluaravind1313@gmail.com', 'apple', 30, 1, 3400, 3400, '0000-00-00 00:00:00.000000'),
('sundar@gmail.com', 'alluaravind1313@gmail.com', 'banana', 40, 1, 3400, 3400, '0000-00-00 00:00:00.000000'),
('sundar@gmail.com', 'alluaravind1313@gmail.com', 'pine', 30, 1, 3400, 3400, '0000-00-00 00:00:00.000000'),
('gopi@gmail.com', 'alluaravind1313@gmail.com', 'orange', 30, 1, 3700, 3300, '2018-11-28 05:18:49.000000'),
('gopi@gmail.com', 'alluaravind1313@gmail.com', 'apple', 40, 1, 3700, 3300, '2018-11-28 05:18:49.000000'),
('gopi@gmail.com', 'alluaravind1313@gmail.com', 'pappaya', 30, 1, 3700, 3300, '2018-11-28 05:18:49.000000');

-- --------------------------------------------------------

--
-- Table structure for table `retailerregistration`
--

CREATE TABLE `retailerregistration` (
  `email` varchar(50) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `pannumber` varchar(15) DEFAULT NULL,
  `phonenumber` bigint(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `securityanswer` varchar(20) DEFAULT NULL,
  `wallet` varchar(255) NOT NULL,
  `storename` varchar(255) NOT NULL,
  `storelocation` varchar(255) NOT NULL,
  `storedescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retailerregistration`
--

INSERT INTO `retailerregistration` (`email`, `firstname`, `lastname`, `pannumber`, `phonenumber`, `address`, `password`, `securityanswer`, `wallet`, `storename`, `storelocation`, `storedescription`) VALUES
('alluaravind1313@gmail.com', 'ALLU', 'ARAVIND', 'BWCPA5752P', 7032390280, '74-6/7-1/7, Netaji road, Ayyappa nagar', 'aravind@123', '2', '3500', 'Banana shop', 'vijayawada', 'banana is very good to eat'),
('charan@gmail.com', 'charan', 'teja', 'BWCPA5752P', 7032390280, '74-6/7-1/7, Netaji road, Ayyappa nagar', 'charan@123', 'pawan kalay', '3500', 'sapota', 'vijayawada', 'desciption store good'),
('divya@gmail.com', 'divya', 'latha', 'abcde1234a', 7032390280, 'jissh', 'divya@123', '3', '3500', 'pine apple', 'hyderabad', 'very good store'),
('gopi@gmail.com', 'gopi', 'krishna', 'abcde4232d', 7032390280, '74-6/7-1/7, Netaji road, Ayyappa nagar', 'gopi@123', '4', '3700', 'gopi stores', 'VIJAYAWADA', 'gopi store is excellent'),
('neerajagutti97@gmaill.com', 'neeru', 'gutti', 'BWCPA5752w', 8297332058, 'HIGH SKL ROAD', 'neeraja@123', 'dog', '3500', 'apple', 'vij', 'good store'),
('pa1kumarmaddula@gmail.com', 'maddul', 'pavan', 'BWCPA5752E', 9052250672, 'vijayawada', 'pavan@123', 'kankipadu', '3500', 'apple', 'vijaa', 'good store'),
('ram@gmail.com', 'ram', 'kumar', 'abcde1234a', 7032390280, '74-6/7-1/7, Netaji road, Ayyappa nagar', 'Ram@123', '2', '3500', 'custard apple', 'mumbai', 'very good store'),
('sundar@gmail.com', 'sundar', 'suma', 'BWCPA5752P', 7032390280, '74-6/7-1/7, Netaji road, Ayyappa nagar', 'sundar@123', '3', '3600', 'sundar services', 'gandhi nagar', 'sundar store is good');

-- --------------------------------------------------------

--
-- Table structure for table `shopperregistration`
--

CREATE TABLE `shopperregistration` (
  `useremail` varchar(50) NOT NULL,
  `userfirstname` varchar(30) DEFAULT NULL,
  `userlastname` varchar(30) DEFAULT NULL,
  `userpannumber` varchar(15) DEFAULT NULL,
  `userphonenumber` bigint(10) DEFAULT NULL,
  `useraddress` varchar(50) DEFAULT NULL,
  `userpassword` varchar(20) DEFAULT NULL,
  `usersecurityanswer` varchar(20) DEFAULT NULL,
  `wallet` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopperregistration`
--

INSERT INTO `shopperregistration` (`useremail`, `userfirstname`, `userlastname`, `userpannumber`, `userphonenumber`, `useraddress`, `userpassword`, `usersecurityanswer`, `wallet`) VALUES
('alluarav@gmail.com', 'ALLU', 'ARAVIND', 'ABHCS4343W', 7032390280, '74-6/7-1/7, Netaji road, Ayyappa nagar', 'aravind@123', '3', 3500),
('alluaravind1313@gmail.com', 'ALLU', 'ARAVIND', 'ABHCS4343W', 7032390280, '74-6/7-1/7, Netaji road, Ayyappa nagar', 'aravind@123', '3', 3300),
('divya@gmail.com', 'divya', 'latha', 'ABHCS4343W', 7032390280, '74-6/7-1/7, Netaji road, Ayyappa nagar', 'divya@123', '123', 3500),
('kiran@gmail.com', 'kiran', 'kumar', 'abcde2323h', 7032390280, '74-6/7-1/7, Netaji road, Ayyappa nagar', 'kiran@123', '4', 3400),
('pa1kumarmaddula@gmail.com', 'pavan', 'kumar', 'ABHCS4343W', 9052250672, 'chowdary peta', 'pavan@123', '3', 3500),
('sumasundar123@gmail.com', 'kopela', 'suma sundar', 'ABHCS4343W', 8142525454, 'vijayawada', 'Sundar@123', 'allu aravaind', 3500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `retailerregistration`
--
ALTER TABLE `retailerregistration`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `shopperregistration`
--
ALTER TABLE `shopperregistration`
  ADD PRIMARY KEY (`useremail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
