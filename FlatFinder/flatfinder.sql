-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 10:35 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flatfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminmsg`
--

CREATE TABLE `adminmsg` (
  `A_ID` int(10) NOT NULL,
  `Message` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminmsg`
--

INSERT INTO `adminmsg` (`A_ID`, `Message`) VALUES
(1, 'Hello all...welcome to flat finder..'),
(2, 'Hello all..'),
(4, 'Hello..how are you');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `M_ID` int(10) NOT NULL,
  `RecEmail` varchar(30) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Message` varchar(700) NOT NULL,
  `SenEmail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`M_ID`, `RecEmail`, `Subject`, `Message`, `SenEmail`) VALUES
(2, 'haydar@gmail.com', 'Welcome Message', ' Hello...i want to visit your flat.', 'bilkis@gmail.com'),
(3, 'bilkis@gmail.com', 'Visit flat', ' Ok..you can visit my flat', 'haydar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `O_ID` int(30) NOT NULL,
  `Catagory` varchar(20) NOT NULL,
  `Size` varchar(200) NOT NULL,
  `Rent` varchar(100) NOT NULL,
  `NOR` varchar(200) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `SP_Condition` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`O_ID`, `Catagory`, `Size`, `Rent`, `NOR`, `Phone`, `Email`, `SP_Condition`) VALUES
(1, 'Flat Rent', '1400 Square fts', '20000', '2', '01232423423', 'sa@gmail.com', ' Need good tenants.'),
(2, 'Flat Sell', '1800 sft Space ,1st Floor, Tiled Floor', '50,00,000.00', '4', '1231234124', 'pa@gmail.com', 'Only for gentle people'),
(4, 'Flat Sell', '1600', '2132312', '4', '12312312', 'bilkis@gmail.com', ' Need good people');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `RID` int(11) NOT NULL,
  `FName` varchar(20) NOT NULL,
  `LName` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Occupation` varchar(20) NOT NULL,
  `Marital` varchar(15) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `ZipCode` varchar(10) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Catagory` varchar(10) NOT NULL,
  `About` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`RID`, `FName`, `LName`, `Gender`, `Occupation`, `Marital`, `Phone`, `Email`, `Password`, `Address`, `City`, `State`, `ZipCode`, `Country`, `Catagory`, `About`) VALUES
(2, 'Haydar', 'Khan', 'Male', 'Business', 'Married', '1232342', 'haydar@gmail.com', '12345', '37, Main street', 'dhaka', 'Dhaka', '1213', 'Bangladesh', 'Owner', 'Good Man'),
(3, 'Bikis', 'Begum', 'Female', 'Housewife', 'Married', '1232342', 'bilkis@gmail.com', 'bilkis', '32,dhanmondi', 'dhaka', 'Dhaka', '1200', 'Bangladesh', 'Tenant', 'Nice Lady');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `RA_ID` int(10) NOT NULL,
  `SenEmail` varchar(40) NOT NULL,
  `Report` varchar(20) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`RA_ID`, `SenEmail`, `Report`, `Subject`, `Message`) VALUES
(1, 'haydar@gmail.com', 'Query', 'Information', ' I want to know how to post add..'),
(3, 'haydar@gmail.com', 'Complaint', 'Reply', ' Please reply my message');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `id` int(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id`, `file`, `type`, `size`) VALUES
(1, '34844-rental.png', 'image/png', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `T_ID` int(20) NOT NULL,
  `Catagory` varchar(25) NOT NULL,
  `Member` varchar(50) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `Room` varchar(30) NOT NULL,
  `F_Range` varchar(30) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `About` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`T_ID`, `Catagory`, `Member`, `Area`, `Room`, `F_Range`, `Phone`, `Email`, `About`) VALUES
(3, 'Flat Searching', '5 people', 'Bashundhara R/A', '4', '20,000-30,000/-', '01232423423', 'gam@gmail.com', 'Good people'),
(4, 'Room Searching', '2 people', 'Badda', '1', '10,000-20,000/-', '1231243124', 'fa@gmail.com', 'Good human being'),
(6, 'Flat Searching', '3 people', 'Bashundhara R/A', '2', '10,000-20,000/-', '123123124', 'ka@gmail.com', ' We are nice'),
(7, 'Flat Searching', '5 people', 'Badda', '4', '10,000-20,000/-', '3124312', 'fa@gmail.com', 'we are nice'),
(12, 'Room Searching', '1', 'Gulshan', '2', '10,000-20,000/-', '123123', 'sa@gmail.com', ' Good and nice '),
(14, 'Flat Searching', '4', 'gulshan', '3', '30,000-40,000/-', '3124312', 'bilkis@gmail.com', ' Nice Lady');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminmsg`
--
ALTER TABLE `adminmsg`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`M_ID`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`O_ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`RA_ID`);

--
-- Indexes for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`T_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminmsg`
--
ALTER TABLE `adminmsg`
  MODIFY `A_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `M_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `O_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `RA_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tenant`
--
ALTER TABLE `tenant`
  MODIFY `T_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
