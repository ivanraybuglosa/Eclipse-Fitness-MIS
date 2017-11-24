-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 09:59 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eclipse_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `User_ID` int(8) NOT NULL,
  `User_UserName` varchar(15) NOT NULL,
  `User_UserPassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `userID` int(11) NOT NULL,
  `accountName` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `accountType` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `activity log`
--

CREATE TABLE `activity log` (
  `AL_Code` int(8) NOT NULL,
  `CLIENT_ID` int(8) NOT NULL,
  `COACH_ID` int(8) NOT NULL,
  `ACT_Code` int(8) NOT NULL,
  `AL_RegType` text NOT NULL,
  `AL_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `A_Code` int(8) NOT NULL,
  `CLIENT_ID` int(8) NOT NULL,
  `GA_Code` int(8) NOT NULL,
  `A_TimeIn` time(5) NOT NULL,
  `A_TimeOut` time(5) NOT NULL,
  `A_TowelQty` int(2) NOT NULL,
  `A_LockerKey` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `CLIENT_ID` int(6) NOT NULL,
  `CLIENT_FirstName` text NOT NULL,
  `CLIENT_LastName` text NOT NULL,
  `CLIENT_BirthDate` date NOT NULL,
  `CLIENT_Gender` text NOT NULL,
  `CLIENT_Email` varchar(20) NOT NULL,
  `CLIENT_RegStatus` text NOT NULL,
  `MS_Code` int(8) NOT NULL,
  `CA_Code` int(8) NOT NULL,
  `CLIENT_Bday` varchar(15) NOT NULL,
  `CLIENT_StatusDuration` varchar(15) NOT NULL,
  `CLIENT_ContactNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client assignment`
--

CREATE TABLE `client assignment` (
  `CA_Code` int(8) NOT NULL,
  `CLIENT_ID` int(8) NOT NULL,
  `SCS_Code` int(8) NOT NULL,
  `CA_RegDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `COACH_ID` int(8) NOT NULL,
  `Coach_LastName` text NOT NULL,
  `Coach_FirstName` text NOT NULL,
  `Coach_Gender` text NOT NULL,
  `Coach_ContactNumber` int(11) NOT NULL,
  `Coach_EmailAddress` varchar(20) NOT NULL,
  `Coach_Specialty` text NOT NULL,
  `Coach_Type` text NOT NULL,
  `COACH_password` varchar(30) NOT NULL,
  `COACH_username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `condition assignment`
--

CREATE TABLE `condition assignment` (
  `CA_Code` int(8) NOT NULL,
  `CLIENT_ID` int(8) NOT NULL,
  `HC_Code` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gym amenity`
--

CREATE TABLE `gym amenity` (
  `GA_Code` int(8) NOT NULL,
  `GA_Name` text NOT NULL,
  `GA_Quantity` int(2) NOT NULL,
  `GA_Model` varchar(10) NOT NULL,
  `GA_Color` varchar(6) NOT NULL,
  `GA_Status` varchar(10) NOT NULL,
  `GA_DateChecked` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `health condition`
--

CREATE TABLE `health condition` (
  `HC_Code` int(8) NOT NULL,
  `HC_Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `MS_Code` int(8) NOT NULL,
  `MS_Type` varchar(8) NOT NULL,
  `MS_Duration` varchar(2) NOT NULL,
  `MS_Price` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studio class`
--

CREATE TABLE `studio class` (
  `SC_Code` int(8) NOT NULL,
  `SC_Name` text NOT NULL,
  `SC_Capacity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studio class session`
--

CREATE TABLE `studio class session` (
  `SCS_Code` int(8) NOT NULL,
  `SC_Code` int(8) NOT NULL,
  `COACH_ID` int(8) NOT NULL,
  `SCS_StartTime` time(5) NOT NULL,
  `SCS_EndTime` time(5) NOT NULL,
  `SCS_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training log`
--

CREATE TABLE `training log` (
  `TL_Code` int(8) NOT NULL,
  `COACH_ID` int(8) NOT NULL,
  `CLIENT_ID` int(8) NOT NULL,
  `TP_Code` int(8) NOT NULL,
  `TL_RegDate` date NOT NULL,
  `TL_Weight` varchar(10) NOT NULL,
  `TL_SkeletalMass` varchar(10) NOT NULL,
  `TL_BodyFatMass` varchar(10) NOT NULL,
  `TL_TotalBodyMass` varchar(10) NOT NULL,
  `TL_FatFreeMass` varchar(10) NOT NULL,
  `TL_BodyMassIndex` varchar(10) NOT NULL,
  `TL_PercentBodyFat` varchar(10) NOT NULL,
  `TL_WaistHipRation` varchar(10) NOT NULL,
  `TL_BasalMetabolicRate` varchar(10) NOT NULL,
  `TL_LUArm` varchar(10) NOT NULL,
  `TL_RUArm` varchar(10) NOT NULL,
  `TL_RUThight` varchar(10) NOT NULL,
  `TL_LUThight` varchar(10) NOT NULL,
  `TL_RestingHr` varchar(10) NOT NULL,
  `TL_MaxHr` varchar(10) NOT NULL,
  `TL_Wasit` varchar(10) NOT NULL,
  `TL_Hip` varchar(10) NOT NULL,
  `TL_Chest` varchar(10) NOT NULL,
  `TL_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training log session`
--

CREATE TABLE `training log session` (
  `TLS_Code` int(8) NOT NULL,
  `WORKOUT_Code` int(8) NOT NULL,
  `PT_Code` int(8) NOT NULL,
  `TLS_Repetition` int(2) NOT NULL,
  `TLS_Sets` int(2) NOT NULL,
  `TLS_Date` date NOT NULL,
  `TLS_StartTime` time(4) NOT NULL,
  `TLS_EndTime` time(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training package`
--

CREATE TABLE `training package` (
  `TP_Code` int(8) NOT NULL,
  `TP_PackageType` int(10) NOT NULL,
  `TP_CoachType` int(10) NOT NULL,
  `TP_Price` varchar(6) NOT NULL,
  `TP_Validity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` enum('admin','receptionist','coach','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `userType`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'coach', 'f931b13aead002d7fcdb02f84e0f794f', 'coach'),
(5, 'receptionist', '0a9b3767c8b9b69cea129110e8daeda2', 'receptionist');

-- --------------------------------------------------------

--
-- Table structure for table `workout`
--

CREATE TABLE `workout` (
  `WORKOUT_Code` int(8) NOT NULL,
  `WORKOUT_Name` text NOT NULL,
  `WORKOUT_Type` text NOT NULL,
  `WORKOUT_Category` text NOT NULL,
  `WORKOUT_BodyPart` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `activity log`
--
ALTER TABLE `activity log`
  ADD PRIMARY KEY (`AL_Code`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`A_Code`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`CLIENT_ID`);

--
-- Indexes for table `client assignment`
--
ALTER TABLE `client assignment`
  ADD PRIMARY KEY (`CA_Code`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`COACH_ID`);

--
-- Indexes for table `condition assignment`
--
ALTER TABLE `condition assignment`
  ADD PRIMARY KEY (`CA_Code`);

--
-- Indexes for table `gym amenity`
--
ALTER TABLE `gym amenity`
  ADD PRIMARY KEY (`GA_Code`);

--
-- Indexes for table `health condition`
--
ALTER TABLE `health condition`
  ADD PRIMARY KEY (`HC_Code`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`MS_Code`);

--
-- Indexes for table `studio class`
--
ALTER TABLE `studio class`
  ADD PRIMARY KEY (`SC_Code`);

--
-- Indexes for table `training log`
--
ALTER TABLE `training log`
  ADD PRIMARY KEY (`TL_Code`);

--
-- Indexes for table `training log session`
--
ALTER TABLE `training log session`
  ADD PRIMARY KEY (`TLS_Code`);

--
-- Indexes for table `training package`
--
ALTER TABLE `training package`
  ADD PRIMARY KEY (`TP_Code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `workout`
--
ALTER TABLE `workout`
  ADD PRIMARY KEY (`WORKOUT_Code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `User_ID` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
--
-- AUTO_INCREMENT for table `activity log`
--
ALTER TABLE `activity log`
  MODIFY `AL_Code` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `A_Code` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `CLIENT_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `client assignment`
--
ALTER TABLE `client assignment`
  MODIFY `CA_Code` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `COACH_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `condition assignment`
--
ALTER TABLE `condition assignment`
  MODIFY `CA_Code` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gym amenity`
--
ALTER TABLE `gym amenity`
  MODIFY `GA_Code` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `health condition`
--
ALTER TABLE `health condition`
  MODIFY `HC_Code` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `MS_Code` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `studio class`
--
ALTER TABLE `studio class`
  MODIFY `SC_Code` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `training log`
--
ALTER TABLE `training log`
  MODIFY `TL_Code` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `training package`
--
ALTER TABLE `training package`
  MODIFY `TP_Code` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `workout`
--
ALTER TABLE `workout`
  MODIFY `WORKOUT_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
