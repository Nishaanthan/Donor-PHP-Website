-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2018 at 08:49 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joinhand`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation-info`
--

CREATE TABLE `donation-info` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `ContactNo` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation-info`
--

INSERT INTO `donation-info` (`Name`, `Email`, `Address`, `ContactNo`, `Amount`, `Message`) VALUES
('James Brrok', 'james@gmail.com', 'Colombo Sri Lanka', 775433333, 55, 'mnjbjbj'),
('James Brrok', 'james@gmail.com', 'Colombo Sri Lanka', 775433333, 55, 'mnjbjbj'),
('Selvakumaran', 'shahan@gmail.com', 'Colombo, Sri Lanka', 779806454, 50, 'Doneate for Small Child'),
('Selvakumaran', 'shahan@gmail.com', 'Colombo, Sri Lanka', 779806454, 50, 'Doneate for Small Child'),
('Akshan Wimal', 'akshanwimal234@gmail.com', 'Kandy, Sri Lanka', 773212345, 45, 'The Supporting Hand for School Children'),
('Akshan Wimal', 'akshanwimal234@gmail.com', 'Kandy, Sri Lanka', 773212345, 45, 'The Supporting Hand for School Children'),
('Selvakumaran', 'james@gmail.com', 'Colombo, Sri Lanka', 775433333, 35, 'kmkmkk'),
('Selvakumaran', 'james@gmail.com', 'Colombo, Sri Lanka', 775433333, 35, 'kmkmkk'),
('', '', '', 0, 0, ''),
('', '', '', 0, 0, ''),
('', '', '', 0, 0, ''),
('', '', '', 0, 0, ''),
('', '', '', 0, 0, ''),
('', '', '', 0, 0, ''),
('Akshan Wimal', 'akshanwimal234@gmail.com', 'dfdfdfd', 4343434, 3232, 'wsdadfdf'),
('Akshan Wimal', 'akshanwimal234@gmail.com', 'dfdfdfd', 4343434, 3232, 'wsdadfdf'),
('Akshan Wimal', 'akshanwimal234@gmail.com', 'fsfdf', 444423, 333, 'rfwfwdfdfd'),
('Akshan Wimal', 'akshanwimal234@gmail.com', 'fsfdf', 444423, 333, 'rfwfwdfdfd');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `image` varbinary(30) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `image`, `first_name`, `last_name`, `country_name`, `email`, `phone`, `password`, `hash`, `active`) VALUES
(1, '', 'Akshan Wimal', '', 'SriLanka', 'akshanwimal234@gmail.com', '', '$2y$10$v3v6VGie6gYTl50dH2VJyeGCBmeUCYSuTEl0dsQf1QhVp5RbXW10C', '698d51a19d8a121ce581499d7b701668', 0);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `SurName` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `FirstName`, `SurName`, `Email`, `Phone`, `Message`) VALUES
(1, 'James Brrok', 'Bond', 'james@gmail.com', '3423423423', 'vsdfsdfffdfsdf'),
(2, 'James Brrok', 'Bond', 'james@gmail.com', '3423423423', 'vsdfsdfffdfsdf'),
(3, 'Akshan', 'Wimal', 'akshanwimal234@gmail.com', '0775645345', 'I want to become your help'),
(4, 'Akshan', 'Wimal', 'akshanwimal234@gmail.com', '0775645345', 'I want to become your help');

-- --------------------------------------------------------

--
-- Table structure for table `educationproject`
--

CREATE TABLE `educationproject` (
  `ID` int(9) NOT NULL,
  `organizationname` varchar(50) NOT NULL,
  `creater` varchar(50) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `requirement1` varchar(50) NOT NULL,
  `requirement2` varchar(50) NOT NULL,
  `requirement3` varchar(50) NOT NULL,
  `requirement4` varchar(50) NOT NULL,
  `requirement5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educationproject`
--

INSERT INTO `educationproject` (`ID`, `organizationname`, `creater`, `Email`, `title`, `description`, `requirement1`, `requirement2`, `requirement3`, `requirement4`, `requirement5`) VALUES
(3, 'ABC Organization', 'sdfsdf', 'abc@gmail.com', 'dsssc', 'm,xcnsdklcn', ',dndnd', 'alxla', '', '', ''),
(4, 'ABC Organization', 'sdfsdf', 'abc@gmail.com', 'dsssc', 'm,xcnsdklcn', ',dndnd', 'alxla', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `educationrequest`
--

CREATE TABLE `educationrequest` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educationrequest`
--

INSERT INTO `educationrequest` (`id`, `FirstName`, `LastName`, `Email`, `Phone`, `Message`) VALUES
(1, 'James Kamal', 'Bond', 'james@gmail.com', '23442343', 'vsdfdffedff'),
(2, 'James Kamal', 'Bond', 'james@gmail.com', '23442343', 'vsdfdffedff'),
(3, 'James Kamal', 'Bond', 'james@gmail.com', '23442343', 'fsfdfdffdvd'),
(4, 'James Kamal', 'Bond', 'james@gmail.com', '23442343', 'fsfdfdffdvd'),
(5, 'James Kamal', 'Bond', 'james@gmail.com', '23442343', 'assdcsdcdcd'),
(6, 'James Kamal', 'Bond', 'james@gmail.com', '23442343', 'assdcsdcdcd'),
(7, 'James Kamal', 'Bond', 'james@gmail.com', '23442343', 'datrhthett'),
(8, 'James Kamal', 'Bond', 'james@gmail.com', '23442343', 'datrhthett');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `first_name`, `country_name`, `email`, `password`, `hash`, `active`) VALUES
(1, 'ABC Organization', 'Australia', 'abc@gmail.com', '$2y$10$4d.5R/DZtb5XCdbMDyVL6uIEH8WHlwP9hflxXYY8U3u/t3WI2XgN.', '9b70e8fe62e40c570a322f1b0b659098', 0),
(2, 'Akshan Wimal', 'Andorra', 'akshanwimal234@gmail.com', '$2y$10$I49jJM7ZUzO9H982iY2DLuJsoYiSnq.IMGh2NA8Nh29BQAkSqt5qe', '5ef059938ba799aaa845e1c2e8a762bd', 0),
(3, 'XYZ', 'SriLanka', 'xyz@gmail.com', '$2y$10$ZvNQKhk84C7ePkHFZd86ve/kVJ7IRVbsBY/Dswkha6Osl5IxqACSW', '0bb4aec1710521c12ee76289d9440817', 0);

-- --------------------------------------------------------

--
-- Table structure for table `organizationinfo`
--

CREATE TABLE `organizationinfo` (
  `id` int(11) NOT NULL,
  `image` varbinary(30) NOT NULL,
  `organization-name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone1` varchar(15) NOT NULL,
  `phone2` varchar(15) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `website` varchar(50) NOT NULL,
  `purpose` varchar(300) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizationinfo`
--

INSERT INTO `organizationinfo` (`id`, `image`, `organization-name`, `email`, `address`, `phone1`, `phone2`, `fax`, `website`, `purpose`, `category`) VALUES
(1, '', 'ABC Organization', '', ' zxcsdfsdf', '58475948', '', '', 'https://www.google.com/', 'scsffvfv', 'Array'),
(2, '', 'ABC Organization', '', ' zxcsdfsdf', '58475948', '', '', 'https://www.google.com/', 'scsffvfv', 'Array'),
(3, '', 'ABC Organization', '', ' dferf', '34234234', '', '', '', 'Xsdd', 'Array'),
(4, '', 'ABC Organization', '', ' dferf', '34234234', '', '', '', 'Xsdd', 'Array');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `Name`, `Email`, `Phone`, `Message`) VALUES
(1, 'James Kamal', 'james@gmail.com', '3453454', 'vdfvdfdf'),
(2, 'James Kamal', 'james@gmail.com', '3453454', 'vdfvdfdf'),
(3, 'James Kamal', 'james@gmail.com', '3453454', 'vdfvdfdf'),
(4, 'James Kamal', 'james@gmail.com', '3453454', 'vdfvdfdf');

-- --------------------------------------------------------

--
-- Table structure for table `requester`
--

CREATE TABLE `requester` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requester`
--

INSERT INTO `requester` (`id`, `first_name`, `country_name`, `email`, `password`, `hash`, `active`) VALUES
(1, 'James Kamal', 'Bangladesh', 'james@gmail.com', '$2y$10$xtic4fGW95cdL6kTSdV5F.RpyeZWa0qnok1ySo7OVwp6isa1nuYqi', '310dcbbf4cce62f762a2aaa148d556bd', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educationproject`
--
ALTER TABLE `educationproject`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `educationrequest`
--
ALTER TABLE `educationrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizationinfo`
--
ALTER TABLE `organizationinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requester`
--
ALTER TABLE `requester`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `educationproject`
--
ALTER TABLE `educationproject`
  MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `educationrequest`
--
ALTER TABLE `educationrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `organizationinfo`
--
ALTER TABLE `organizationinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `requester`
--
ALTER TABLE `requester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
