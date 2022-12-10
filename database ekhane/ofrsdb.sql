-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 07:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ofrsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `AdminuserName` varchar(20) NOT NULL,
  `MobileNumber` bigint(12) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp(),
  `userRole` int(1) DEFAULT NULL,
  `isActive` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `AdminuserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`, `userRole`, `isActive`) VALUES
(1, 'Admin', 'admin', 12345678901, 'taufiq@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2022-02-24 18:30:00', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblfirereport`
--

CREATE TABLE `tblfirereport` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `mobileNumber` bigint(12) DEFAULT NULL,
  `location` mediumtext DEFAULT NULL,
  `messgae` mediumtext DEFAULT NULL,
  `assignTo` int(11) DEFAULT NULL,
  `status` varchar(120) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `assignTime` varchar(255) DEFAULT NULL,
  `assignTme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfirereport`
--

INSERT INTO `tblfirereport` (`id`, `fullName`, `mobileNumber`, `location`, `messgae`, `assignTo`, `status`, `postingDate`, `assignTime`, `assignTme`) VALUES
(1, 'taufiq hoq', 1234567890, 'ctg ,bangladesh', ' sdfsdf', 2, 'Request Completed', '2022-11-02 14:55:50', NULL, '02-11-22 03:04:11'),
(2, 'mehedi', 1425362514, 'gec,agrabad', 'asf', 2, 'Fire Relief Work in Progress', '2022-11-03 09:02:18', NULL, '03-11-22 09:09:57'),
(3, 'chowdhury ', 4758963210, 'sda', 'Fire in versity', 2, 'Request Completed', '2022-11-05 01:46:41', NULL, '05-11-22 03:04:13'),
(4, 'taufiq', 1212, 'khulsi , holy crisent', ' fire in the city', 3, 'Team On the Way', '2022-11-10 13:37:35', NULL, '12-11-22 06:11:37'),
(5, 'asdf', 12312, 'dfsdf', 'dafdaf', 2, 'Request Completed', '2022-11-10 13:54:27', NULL, '12-11-22 06:11:32'),
(6, 'PCIU', 12345678901, 'GEC', 'asd', 2, 'Assigned', '2022-12-01 14:37:16', NULL, '01-12-22 03:12:08'),
(7, 'asd', 1, 'sdasd', 'asdasd', NULL, NULL, '2022-12-01 15:00:27', NULL, ''),
(8, 'Solamain Shukon', 1231241241, 'ctg', '', NULL, NULL, '2022-12-02 05:58:44', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tblfiretequesthistory`
--

CREATE TABLE `tblfiretequesthistory` (
  `id` int(11) NOT NULL,
  `requestId` int(11) DEFAULT NULL,
  `status` varchar(120) DEFAULT NULL,
  `remark` mediumtext DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfiretequesthistory`
--

INSERT INTO `tblfiretequesthistory` (`id`, `requestId`, `status`, `remark`, `postingDate`) VALUES
(1, 1, 'Team On the Way', 'Team is on the way.', '2022-11-02 01:35:35'),
(2, 1, 'Fire Relief Work in Progress', 'Team work in progress.', '2022-11-02 01:42:18'),
(3, 1, 'Request Completed', 'Fire controlled. Request completed', '2022-11-02 01:43:29'),
(4, 3, 'Team On the Way', 'Team is on the for relief work.', '2022-11-05 01:47:48'),
(5, 3, 'Fire Relief Work in Progress', 'Fire relief work in progress. Team will control the fire soon.', '2022-11-05 01:48:20'),
(6, 3, 'Request Completed', 'Job FInished. Fire is under control now.', '2022-11-05 01:48:49'),
(7, 2, 'Team On the Way', 'wrter', '2022-11-03 14:11:41'),
(8, 4, 'Team On the Way', 'tertrt', '2022-11-12 17:02:59'),
(9, 5, 'Team On the Way', 'ertert', '2022-11-12 17:03:53'),
(10, 5, 'Fire Relief Work in Progress', 'fgf', '2022-11-12 17:04:12'),
(11, 5, 'Request Completed', 'ereere', '2022-11-12 17:04:27'),
(12, 2, 'Fire Relief Work in Progress', 'dfsdfsdf', '2022-11-03 17:05:09');

-- --------------------------------------------------------

--
-- Table structure for table `tblmanager`
--

CREATE TABLE `tblmanager` (
  `ManagerID` int(11) NOT NULL,
  `ManagerName` varchar(50) NOT NULL,
  `ManagerUsername` varchar(200) NOT NULL,
  `ManagerContact` varchar(12) NOT NULL,
  `ManagerEmail` varchar(100) NOT NULL,
  `ManagerPass` varchar(100) NOT NULL,
  `isActive` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmanager`
--

INSERT INTO `tblmanager` (`ManagerID`, `ManagerName`, `ManagerUsername`, `ManagerContact`, `ManagerEmail`, `ManagerPass`, `isActive`) VALUES
(1, 'Taufiqul Hoq ', 'Taufiq', '15151515151', 'taufiqul@gmail.com', '1d0258c2440a8d19e716292b231e3190', NULL),
(2, 'kollol mehedi', 'kollol', '14232232132', 'kollol@gmail.com', '21232f297a57a5a743894a0e4a801fc3', NULL),
(3, 'PCIU', 'PCIU', '12123123123', 'PCIU@gmail.com', '89bb8edef3f243cd301243447942c3d5', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblsite`
--

CREATE TABLE `tblsite` (
  `id` int(11) NOT NULL,
  `siteTitle` varchar(255) DEFAULT NULL,
  `siteLogo` varchar(255) DEFAULT NULL,
  `sitephone` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsite`
--

INSERT INTO `tblsite` (`id`, `siteTitle`, `siteLogo`, `sitephone`) VALUES
(1, 'OFRS', 'd1a432069b9f6ca959a9cf54408d58d1.png', '16163 help');

-- --------------------------------------------------------

--
-- Table structure for table `tblteams`
--

CREATE TABLE `tblteams` (
  `id` int(11) NOT NULL,
  `teamName` varchar(255) DEFAULT NULL,
  `teamLeaderName` varchar(255) DEFAULT NULL,
  `teamLeadMobno` bigint(12) DEFAULT NULL,
  `teamMembers` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblteams`
--

INSERT INTO `tblteams` (`id`, `teamName`, `teamLeaderName`, `teamLeadMobno`, `teamMembers`, `postingDate`) VALUES
(2, 'Team 1', 'Taufiq', 13131313131, 'tawfiq,tofiq,towfiq, hoq', '2022-04-23 07:57:39'),
(3, 'Team 2', 'kollol', 2214123, 'kolloll,mehedi,chy,', '2022-04-23 08:09:17'),
(6, 'Team 4', 'PCIU', 12121212121, 'pciu1,pciu2,pciu3,pciu4', '2022-11-18 04:26:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblfirereport`
--
ALTER TABLE `tblfirereport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblfiretequesthistory`
--
ALTER TABLE `tblfiretequesthistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmanager`
--
ALTER TABLE `tblmanager`
  ADD PRIMARY KEY (`ManagerID`);

--
-- Indexes for table `tblsite`
--
ALTER TABLE `tblsite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblteams`
--
ALTER TABLE `tblteams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblfirereport`
--
ALTER TABLE `tblfirereport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblfiretequesthistory`
--
ALTER TABLE `tblfiretequesthistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblmanager`
--
ALTER TABLE `tblmanager`
  MODIFY `ManagerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblsite`
--
ALTER TABLE `tblsite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblteams`
--
ALTER TABLE `tblteams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblsite`
--
ALTER TABLE `tblsite`
  ADD CONSTRAINT `tblsite_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tblmanager` (`ManagerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
