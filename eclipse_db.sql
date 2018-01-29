-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2018 at 11:54 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

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
-- Table structure for table `activitylog`
--

CREATE TABLE `activitylog` (
  `AL_Code` int(8) NOT NULL,
  `CLIENT_ID` int(8) NOT NULL,
  `COACH_ID` int(8) NOT NULL,
  `Activity` int(8) NOT NULL,
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
  `A_TimeIn` varchar(10) NOT NULL,
  `A_TimeOut` varchar(10) NOT NULL,
  `A_TowelQty` int(2) NOT NULL,
  `A_LockerKey` int(2) NOT NULL,
  `A_Year` varchar(10) NOT NULL,
  `A_Month` varchar(10) NOT NULL,
  `A_fdate` varchar(11) NOT NULL,
  `A_id` int(2) NOT NULL,
  `A_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`A_Code`, `CLIENT_ID`, `GA_Code`, `A_TimeIn`, `A_TimeOut`, `A_TowelQty`, `A_LockerKey`, `A_Year`, `A_Month`, `A_fdate`, `A_id`, `A_status`) VALUES
(100, 54, 0, '19:09:58', '', 3, 1, '2018', 'Jan', '2018-17-01', 1, ''),
(101, 54, 0, '19:10:02', '', 3, 1, '2018', 'Jan', '2018-17-01', 1, ''),
(102, 56, 0, '03:35:19', '', 3, 1, '2018', 'Jan', '2018-17-01', 1, ''),
(103, 56, 0, '03:29:07', '', 2, 2, '2018', 'Jan', '2018-22-01', 1, 'Unpaid'),
(104, 56, 0, '03:31:59', '', 2, 2, '2018', 'Jan', '2018-22-01', 1, 'Unpaid'),
(105, 56, 0, '03:32:02', '', 2, 2, '2018', 'Jan', '2018-22-01', 1, 'Unpaid'),
(106, 56, 0, '03:35:53', '', 2, 2, '2018', 'Jan', '2018-22-01', 1, 'Unpaid'),
(107, 56, 0, '03:39:21', '', 2, 2, '2018', 'Jan', '2018-22-01', 1, 'Unpaid'),
(108, 55, 0, '03:44:17', '', 2, 2, '2018', 'Jan', '2018-22-01', 1, 'Unpaid'),
(109, 56, 0, '03:45:07', '', 2, 3, '2018', 'Jan', '2018-22-01', 1, 'Walk-in'),
(110, 54, 0, '05:49:54', '', 2, 1, '2018', 'Jan', '2018-22-01', 1, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `CLIENT_ID` int(8) NOT NULL,
  `CLIENT_FirstName` text NOT NULL,
  `CLIENT_MiddleName` text NOT NULL,
  `CLIENT_LastName` text NOT NULL,
  `CLIENT_Gender` text NOT NULL,
  `CLIENT_Email` varchar(20) NOT NULL,
  `CLIENT_RegStatus` text NOT NULL,
  `CLIENT_StatusDuration` varchar(11) NOT NULL,
  `CLIENT_ContactNumber` text NOT NULL,
  `CLIENT_userAccount` text NOT NULL,
  `CLIENT_bday` date NOT NULL,
  `CLIENT_year` varchar(10) NOT NULL,
  `CLIENT_month` varchar(10) NOT NULL,
  `CLIENT_day` varchar(10) NOT NULL,
  `CLIENT_regDATE` varchar(11) NOT NULL,
  `CLIENT_regMONTH` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`CLIENT_ID`, `CLIENT_FirstName`, `CLIENT_MiddleName`, `CLIENT_LastName`, `CLIENT_Gender`, `CLIENT_Email`, `CLIENT_RegStatus`, `CLIENT_StatusDuration`, `CLIENT_ContactNumber`, `CLIENT_userAccount`, `CLIENT_bday`, `CLIENT_year`, `CLIENT_month`, `CLIENT_day`, `CLIENT_regDATE`, `CLIENT_regMONTH`) VALUES
(54, 'Brix', '', 'Nessia', 'Male', 'brixaissen@gmail.com', 'Member', '', '9954144982', 'brix123', '1954-08-09', '1954', '08', '09', '2018-01-22', ''),
(55, 'Ivan', '', 'Buglosa', 'Male', 'ivan@yahoo.com', 'Member', '', '09919273231', 'ivan123', '1958-11-13', '1958', '11', '13', '2018-01-22', ''),
(56, 'Nina', '', 'Garcia', 'Female', 'nina@yahoo.com', 'Member', '', '0993897232', 'nina12', '1958-10-12', '1958', '10', '12', '2018-01-17', ''),
(57, 'Hans', '', 'Legislador', 'Male', 'hans@yaho.com', 'Member', '', '9993808653', 'hans', '1959-11-13', '1959', '11', '13', '', ''),
(58, 'Vicmar', '', 'Yanson', 'Male', 'vicmaryanson@gmail.c', '', '', '09123142151', 'vicmaryanson', '1948-01-02', '1948', '01', '02', '', ''),
(59, 's', '', 's', 'Male', 'd', 'Walk-in', '', 's', 'a', '1956-10-10', '1956', '10', '10', '', ''),
(60, 's', '', 's', 'Male', 'd', 'Walk-in', '', 's', 'a', '1956-10-10', '1956', '10', '10', '', ''),
(61, 's', '', 'dsadass', 'Female', 's', 'Walk-in', '', 'a', 's', '1948-03-02', '1948', '03', '02', '', ''),
(62, 'dsad', '', 'ssssssssss', 'Male', 's', 'Walk-in', '', 's', 'a', '0000-00-00', '- Year -', '- Month -', '- Day -', '', ''),
(63, 'fsad', '', 'buglosa', 'Male', 's', 'Walk-in', '', 'd', 'd', '1956-07-09', '1956', '07', '09', '', ''),
(64, 'maple', '', 'buglosa', 'Male', '2', 'Walk-in', '', '1', 'a', '0000-00-00', '- Year -', '- Month -', '- Day -', '', ''),
(65, 'c', '', 'b', 'Male', '2', 'Walk-in', '', '1', '1', '0000-00-00', '- Year -', '- Month -', '- Day -', '', ''),
(66, 'b', '', 'c', 'Male', 'a', 'Walk-in', '', 's', 'd', '0000-00-00', '- Year -', '- Month -', '- Day -', '', ''),
(67, 'b', '', 'c', 'Male', 'a', 'Walk-in', '', 'c', 's', '0000-00-00', '- Year -', '- Month -', '- Day -', '', ''),
(68, 'b', '', 'c', 'Female', 'e', 'Walk-in', '', 's', 'd', '1955-10-08', '1955', '10', '08', '', ''),
(69, 'a', 'b', 'c', 'Male', 'd', 'Member', '', 's', 's', '0000-00-00', '- Year -', '- Month -', '- Day -', '', ''),
(70, 'as', '', 'sds', 'Male', 'da', 'Member', '', 'ds', 'ds', '1955-09-08', '1955', '09', '08', '2018-01-22', '');

-- --------------------------------------------------------

--
-- Table structure for table `clientassignment`
--

CREATE TABLE `clientassignment` (
  `CA_Code` int(8) NOT NULL,
  `CLIENT_ID` int(8) NOT NULL,
  `SCS_Code` int(8) NOT NULL,
  `CA_RegDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientassignment`
--

INSERT INTO `clientassignment` (`CA_Code`, `CLIENT_ID`, `SCS_Code`, `CA_RegDate`) VALUES
(24, 28, 20, '2018-01-13'),
(25, 46, 15, '2018-01-13'),
(26, 45, 16, '2018-01-13'),
(27, 28, 15, '2018-01-13'),
(28, 40, 16, '2018-01-13'),
(29, 28, 16, '2018-01-13'),
(30, 28, 16, '2018-01-13'),
(31, 28, 16, '2018-01-13'),
(32, 42, 16, '2018-01-13'),
(33, 41, 16, '2018-01-13'),
(34, 41, 16, '2018-01-13'),
(35, 42, 16, '2018-01-13'),
(36, 41, 21, '2018-01-13'),
(37, 41, 15, '2018-01-13'),
(38, 55, 27, '2018-01-17'),
(39, 54, 27, '2018-01-17');

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
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`COACH_ID`, `Coach_LastName`, `Coach_FirstName`, `Coach_Gender`, `Coach_ContactNumber`, `Coach_EmailAddress`, `Coach_Specialty`, `Coach_Type`, `userID`) VALUES
(15, 'Benjamin', 'Mark', 'Male', 2147483647, 'markbenjamin@gmail.c', 'fitness coach', 'Senior', 66),
(16, 'Ang', 'Cherniguin', 'Female', 912345678, 'cherniguinang@gmail.', 'Fitness Coach', 'Junior', 66),
(17, 'Arellano', 'Nelson', 'Male', 2147483647, 'nelsonarellano@gmail', 'Fitness Coach', 'Senior', 66),
(18, 'Morales', 'Paul Jake', 'Male', 2147483647, 'pauljakemorales@gmai', 'Fitness Coach', 'Junior', 66),
(19, 'Fernandez', 'Samryl', 'Female', 2147483647, 'samrylfernandez@gmai', 'Fitness Coach', 'Junior', 66),
(21, 'Buglosa', 'Ivan', 'Male', 912345667, 'ivanraybuglosa@gmail', 'Fitness Coach', 'Junior', 66);

-- --------------------------------------------------------

--
-- Table structure for table `conditionassignment`
--

CREATE TABLE `conditionassignment` (
  `Condition_Code` int(8) NOT NULL,
  `CLIENT_ID` int(8) NOT NULL,
  `HC_Code` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `E_Code` int(8) NOT NULL,
  `E_Name` text NOT NULL,
  `E_Type` text NOT NULL,
  `E_Quantity` int(3) NOT NULL,
  `E_Status` text NOT NULL,
  `E_DateChecked` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `healthcondition`
--

CREATE TABLE `healthcondition` (
  `HC_Code` int(8) NOT NULL,
  `TL_Code` int(11) NOT NULL,
  `HC_Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `healthcondition`
--

INSERT INTO `healthcondition` (`HC_Code`, `TL_Code`, `HC_Name`) VALUES
(1, 15, 'on,on,on'),
(2, 15, 'Osteoporosis,Seizure,Paralysis,Fibromyalgia,sample');

-- --------------------------------------------------------

--
-- Table structure for table `measurements`
--

CREATE TABLE `measurements` (
  `M_Code` int(11) NOT NULL,
  `TL_Code` int(11) DEFAULT NULL,
  `M_Weight` int(11) DEFAULT NULL,
  `M_SkeletalMass` int(11) DEFAULT NULL,
  `M_BodyFatMass` int(11) DEFAULT NULL,
  `M_FatFreeMass` int(11) DEFAULT NULL,
  `M_BodyMassIndex` int(11) DEFAULT NULL,
  `M_PercentBodyFat` int(11) DEFAULT NULL,
  `M_WaistHipRatio` int(11) DEFAULT NULL,
  `M_BasalMetabolicRate` int(11) DEFAULT NULL,
  `M_LeftUpperArm` int(11) DEFAULT NULL,
  `M_RightUpperArm` int(11) DEFAULT NULL,
  `M_Chest` int(11) DEFAULT NULL,
  `M_Waist` int(11) DEFAULT NULL,
  `M_Hips` int(11) DEFAULT NULL,
  `M_LeftUpperThigh` int(11) DEFAULT NULL,
  `M_RightUpperThigh` int(11) DEFAULT NULL,
  `M_RestingHR` int(11) DEFAULT NULL,
  `M_DateMeasured` date DEFAULT NULL,
  `M_MeasurementType` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `measurements`
--

INSERT INTO `measurements` (`M_Code`, `TL_Code`, `M_Weight`, `M_SkeletalMass`, `M_BodyFatMass`, `M_FatFreeMass`, `M_BodyMassIndex`, `M_PercentBodyFat`, `M_WaistHipRatio`, `M_BasalMetabolicRate`, `M_LeftUpperArm`, `M_RightUpperArm`, `M_Chest`, `M_Waist`, `M_Hips`, `M_LeftUpperThigh`, `M_RightUpperThigh`, `M_RestingHR`, `M_DateMeasured`, `M_MeasurementType`) VALUES
(4, 15, 12, 2, 1, 3, 1, 6, 5, 4, 3, 2, 5, 6, 5, 4, 3, 2, '2018-01-17', 'Initial'),
(5, 15, 2, 3, 1, 4, 2, 7, 5, 6, 6, 3, 4, 5, 6, 7, 3, 3, '2018-01-17', 'Final'),
(6, 17, 23, 1, 2, 3, 7, 6, 4, 5, 8, 1, 3, 2, 5, 2, 3, 4, '2018-01-19', 'Initial'),
(7, 16, 2, 3, 2, 3, 6, 1, 2, 1, 5, 2, 3, 2, 3, 4, 5, 4, '2018-01-19', 'Initial'),
(8, 17, 4, 2, 1, 2, 6, 5, 3, 4, 2, 5, 3, 4, 1, 3, 5, 6, '2018-01-20', 'Final'),
(9, 19, 3, 2, 1, 3, 7, 6, 4, 5, 3, 2, 1, 2, 4, 3, 2, 3, '2018-01-22', 'Initial'),
(10, 19, 2, 2, 2, 5, 2, 3, 4, 6, 3, 1, 7, 2, 4, 5, 6, 2, '2018-01-22', 'Final');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `MS_Code` int(8) NOT NULL,
  `MS_Type` varchar(8) NOT NULL,
  `MS_Duration` varchar(9) NOT NULL,
  `MS_Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`MS_Code`, `MS_Type`, `MS_Duration`, `MS_Price`) VALUES
(1, 'Regular', '3', 5697),
(6, 'Regular', '6', 10794),
(7, 'Regular', '12', 20388),
(9, 'Student', '3', 3597),
(11, 'Student', '6', 7194),
(12, 'Student', '12', 11988),
(13, 'sa', '5', 41),
(112, 'Walk-In', '0', 400);

-- --------------------------------------------------------

--
-- Table structure for table `membershiptype`
--

CREATE TABLE `membershiptype` (
  `M_Code` int(5) NOT NULL,
  `CLIENT_ID` int(8) NOT NULL,
  `MS_Code` int(8) NOT NULL,
  `M_classType` varchar(15) NOT NULL,
  `M_regDate` date NOT NULL,
  `M_expiryDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membershiptype`
--

INSERT INTO `membershiptype` (`M_Code`, `CLIENT_ID`, `MS_Code`, `M_classType`, `M_regDate`, `M_expiryDate`) VALUES
(3, 0, 12, '', '2018-01-22', '0000-00-00'),
(4, 0, 12, '', '2018-01-22', '0000-00-00'),
(5, 0, 7, '', '2018-01-22', '0000-00-00'),
(6, 69, 11, '', '2018-01-22', '0000-00-00'),
(7, 69, 12, '', '2018-01-22', '0000-00-00'),
(8, 69, 12, '', '2018-01-22', '0000-00-00'),
(9, 69, 6, '', '2018-01-22', '0000-00-00'),
(10, 69, 11, '', '2018-01-22', '0000-00-00'),
(11, 69, 11, '', '2018-01-22', '0000-00-00'),
(12, 69, 11, '', '2018-01-22', '0000-00-00'),
(13, 69, 12, '', '2018-01-22', '0000-00-00'),
(14, 54, 11, '', '2018-01-22', '0000-00-00'),
(15, 54, 11, '', '2018-01-22', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `Rec_id` int(8) NOT NULL,
  `Rec_lastName` text NOT NULL,
  `Rec_FirstName` text NOT NULL,
  `Rec_contact` int(11) NOT NULL,
  `Rec_emailAdd` text NOT NULL,
  `Rec_gender` text NOT NULL,
  `userID` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`Rec_id`, `Rec_lastName`, `Rec_FirstName`, `Rec_contact`, `Rec_emailAdd`, `Rec_gender`, `userID`) VALUES
(32, 'ivan', 'buglosa', 1234, 'ivanbuglosa', 'Male', 40),
(33, 'buglosan', 'a', 123, 'aaaa', 'Male', 1),
(34, 'buglosa', 'ivan', 3131312, 'ivanraybuglosa@gmail.com', 'Female', 64),
(35, '', '', 0, '', 'Male', 66),
(36, 'lll', '', 0, '', 'Male', 66),
(37, 'asd', '', 0, '', 'Male', 66);

-- --------------------------------------------------------

--
-- Table structure for table `studioclass`
--

CREATE TABLE `studioclass` (
  `SC_Code` int(8) NOT NULL,
  `SC_Name` text NOT NULL,
  `SC_Capacity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studioclass`
--

INSERT INTO `studioclass` (`SC_Code`, `SC_Name`, `SC_Capacity`) VALUES
(5, 'Aqua Zumba', 5),
(6, 'Spinning', 39),
(7, 'HIIT', 5),
(8, 'Yoga', 10),
(9, 'F360', 10),
(10, 'TRX', 10),
(11, 'Dance Aero', 10),
(12, 'Pound Fit', 15),
(13, 'Pilates', 12),
(14, 'Swimming', 5),
(15, 'Zumba', 10),
(16, 'Abs Clinic', 15);

-- --------------------------------------------------------

--
-- Table structure for table `studioclasssession`
--

CREATE TABLE `studioclasssession` (
  `SCS_Code` int(8) NOT NULL,
  `SC_Code` int(8) NOT NULL,
  `COACH_ID` int(8) NOT NULL,
  `SCS_StartTime` varchar(6) NOT NULL,
  `SCS_EndTime` varchar(6) NOT NULL,
  `SCS_Date` date NOT NULL,
  `SCS_Venue` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studioclasssession`
--

INSERT INTO `studioclasssession` (`SCS_Code`, `SC_Code`, `COACH_ID`, `SCS_StartTime`, `SCS_EndTime`, `SCS_Date`, `SCS_Venue`) VALUES
(15, 7, 17, '00:11', '01:01', '1221-12-11', '3sdadada'),
(16, 11, 18, '00:11', '00:12', '2123-12-13', 'r12121'),
(20, 12, 18, '', '', '1965-12-11', 'q'),
(21, 10, 21, '00:00', '13:00', '2017-12-27', 'trx room'),
(22, 8, 19, '', '', '0000-00-00', ''),
(23, 0, 15, '', '', '0000-00-00', ''),
(24, 10, 21, '01:12', '00:12', '2018-01-03', 'trx room'),
(25, 13, 19, '', '', '0000-00-00', ''),
(26, 7, 17, '23:21', '14:11', '2018-01-20', 'qweq'),
(27, 6, 15, '12:21', '00:12', '2018-01-20', 'ddddddddd'),
(28, 12, 21, '', '', '0000-00-00', ''),
(29, 5, 15, '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `towels`
--

CREATE TABLE `towels` (
  `towel_ID` int(8) NOT NULL,
  `towel_date` varchar(11) NOT NULL,
  `towel_type` varchar(10) NOT NULL,
  `towel_amount` int(10) NOT NULL,
  `towel_time` varchar(11) NOT NULL,
  `towel_suppLeft` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `towels`
--

INSERT INTO `towels` (`towel_ID`, `towel_date`, `towel_type`, `towel_amount`, `towel_time`, `towel_suppLeft`) VALUES
(13, '2018-01-15', 'Supply', 300, '01:00:00 AM', 0);

-- --------------------------------------------------------

--
-- Table structure for table `traininglog`
--

CREATE TABLE `traininglog` (
  `TL_Code` int(8) NOT NULL,
  `COACH_ID` int(8) NOT NULL,
  `CLIENT_ID` int(8) NOT NULL,
  `TP_Code` int(8) NOT NULL,
  `TL_Expiry` date NOT NULL,
  `TL_RegDate` date NOT NULL,
  `TL_regMONTH` varchar(11) NOT NULL,
  `TL_HealthConditions` text NOT NULL,
  `TL_ClientPerformance` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traininglog`
--

INSERT INTO `traininglog` (`TL_Code`, `COACH_ID`, `CLIENT_ID`, `TP_Code`, `TL_Expiry`, `TL_RegDate`, `TL_regMONTH`, `TL_HealthConditions`, `TL_ClientPerformance`) VALUES
(1, 15, 39, 13, '0000-00-00', '0000-00-00', 'Jan', '', ''),
(2, 15, 39, 15, '0000-00-00', '0000-00-00', 'Feb', '', ''),
(3, 15, 27, 10, '0000-00-00', '0000-00-00', 'Mar', '', ''),
(4, 17, 28, 15, '0000-00-00', '2018-01-08', 'Apr', '', ''),
(5, 18, 41, 13, '0000-00-00', '2018-01-12', 'Mar', '', ''),
(6, 21, 48, 13, '2018-01-14', '2018-01-14', 'Apr', '', ''),
(7, 21, 50, 17, '2018-01-14', '2018-01-14', 'May', '', ''),
(8, 16, 50, 13, '2018-01-15', '2018-01-14', 'Jun', '', ''),
(9, 15, 50, 13, '1970-01-01', '2018-01-14', 'Jul', '', ''),
(10, 15, 50, 13, '2018-03-11', '2018-01-14', 'Aug', '', ''),
(11, 15, 51, 13, '2018-03-11', '2018-01-14', 'Sep', '', ''),
(12, 16, 51, 14, '2018-04-08', '2018-01-14', 'Oct', '', ''),
(13, 18, 51, 13, '2018-03-11', '2018-01-14', 'Nov', '', ''),
(14, 15, 50, 13, '2018-03-11', '2018-01-14', 'Dec', '', ''),
(15, 19, 54, 13, '2018-03-14', '2018-01-17', '', '', ''),
(16, 15, 55, 13, '2018-03-14', '2018-01-17', '', 'Hypertension,High Blood,Disability,Seizure,Anemia,other1,other2', 'Beginner'),
(17, 15, 57, 14, '2018-04-11', '2018-01-17', '', 'Heart Disease,Disability,Seizure,Anemia,other1', 'Beginner'),
(18, 15, 56, 15, '2018-04-14', '2018-01-20', '', '', ''),
(19, 15, 54, 15, '2018-04-14', '2018-01-20', '', 'Stroke,Osteoporosis,Sclerosis,sample1', 'Beginner');

-- --------------------------------------------------------

--
-- Table structure for table `traininglogsession`
--

CREATE TABLE `traininglogsession` (
  `TLS_Code` int(8) NOT NULL,
  `TL_Code` int(11) NOT NULL,
  `TLS_Date` date NOT NULL,
  `TLS_StartTime` time(4) NOT NULL,
  `TLS_EndTime` time(4) NOT NULL,
  `TLS_Exercise` varchar(15) NOT NULL,
  `TLS_Sets` int(2) NOT NULL,
  `TLS_Reps` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traininglogsession`
--

INSERT INTO `traininglogsession` (`TLS_Code`, `TL_Code`, `TLS_Date`, `TLS_StartTime`, `TLS_EndTime`, `TLS_Exercise`, `TLS_Sets`, `TLS_Reps`) VALUES
(15, 0, '2018-01-16', '12:12:00.0000', '00:12:00.0000', '', 0, 0),
(16, 0, '2018-01-16', '00:31:00.0000', '00:31:00.0000', '', 0, 0),
(17, 0, '2018-01-16', '01:21:00.0000', '00:31:00.0000', '', 0, 0),
(18, 0, '2018-01-16', '00:31:00.0000', '00:01:00.0000', '', 0, 0),
(19, 0, '2018-01-16', '00:11:00.0000', '00:01:00.0000', '', 0, 0),
(20, 0, '2018-01-16', '00:11:00.0000', '03:23:00.0000', '', 0, 0),
(21, 0, '2018-01-16', '14:31:00.0000', '03:23:00.0000', '', 0, 0),
(22, 0, '2018-01-16', '00:01:00.0000', '02:01:00.0000', '', 0, 0),
(23, 0, '2018-01-19', '02:12:00.0000', '03:21:00.0000', '', 0, 0),
(24, 17, '2018-01-19', '02:12:00.0000', '03:21:00.0000', 'exercise1', 2, 1),
(25, 15, '2018-01-20', '14:31:00.0000', '15:30:00.0000', 'push-ups', 3, 13),
(26, 15, '2018-01-20', '00:00:00.0000', '00:00:00.0000', '', 0, 0),
(27, 15, '2018-01-20', '02:33:00.0000', '03:23:00.0000', 'sample1', 2, 3),
(29, 15, '2018-01-20', '00:31:00.0000', '23:23:00.0000', 'asd', 2, 1),
(30, 16, '2018-01-20', '00:00:00.0000', '00:00:00.0000', 'sad', 12, 32),
(31, 15, '2018-01-20', '00:00:00.0000', '00:00:00.0000', 'ssss', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `trainingpackage`
--

CREATE TABLE `trainingpackage` (
  `TP_Code` int(8) NOT NULL,
  `TP_PackageType` text NOT NULL,
  `TP_CoachType` text NOT NULL,
  `TP_Price` int(6) NOT NULL,
  `TP_Validity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainingpackage`
--

INSERT INTO `trainingpackage` (`TP_Code`, `TP_PackageType`, `TP_CoachType`, `TP_Price`, `TP_Validity`) VALUES
(10, '1', 'Senior', 600, 7),
(11, '1', 'Junior', 500, 7),
(12, '8', 'Senior', 4800, 56),
(13, '8', 'Junior', 4000, 56),
(14, '12', 'Senior', 6600, 84),
(15, '12', 'Junior', 5400, 84),
(16, '24', 'Senior', 12000, 168),
(17, '24', 'Junior', 9600, 168),
(18, '30', 'Senior', 5555555, 250);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `TR_Code` int(8) NOT NULL,
  `A_Code` int(8) NOT NULL,
  `CLIENT_ID` int(8) NOT NULL,
  `TL_Code` int(8) NOT NULL,
  `TP_Code` int(8) NOT NULL,
  `M_Code` int(8) NOT NULL,
  `TR_status` varchar(10) NOT NULL,
  `TR_type` varchar(15) NOT NULL,
  `TR_Price` varchar(11) NOT NULL,
  `TR_Date` varchar(15) NOT NULL,
  `TR_f` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`TR_Code`, `A_Code`, `CLIENT_ID`, `TL_Code`, `TP_Code`, `M_Code`, `TR_status`, `TR_type`, `TR_Price`, `TR_Date`, `TR_f`) VALUES
(76, 164, 54, 0, 0, 1, 'Member', '', '400', '', 2),
(77, 165, 55, 0, 0, 2, 'Walk-in', '', '400', '', 2),
(78, 108, 55, 0, 0, 0, 'Unpaid', '', '400', '2018-22-01', 2),
(79, 109, 56, 0, 0, 0, 'Walk-in', '', '400', '2018-22-01', 2),
(80, 0, 69, 0, 0, 12, '', '', '', '', 0),
(81, 0, 69, 0, 0, 6, 'Member', '', '', '', 0),
(82, 0, 69, 0, 0, 11, 'Member', '', '7194', '', 0),
(83, 0, 69, 0, 0, 7, 'Member', '', '11988', '', 0),
(84, 110, 54, 0, 0, 0, 'Member', '', '400', '2018-22-01', 2),
(85, 0, 54, 0, 0, 14, 'Member', '', '7194', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` enum('admin','receptionist','coach','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `userType`) VALUES
(1, 'aaaa', '4c14a808735abb4b205d1c8cb54ec845', 'admin'),
(65, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(66, '', '1f16a6c017f12c1539c4947e234de78a', 'coach'),
(67, '', 'd41d8cd98f00b204e9800998ecf8427e', 'coach'),
(68, '', 'd41d8cd98f00b204e9800998ecf8427e', 'receptionist'),
(69, 'coach1', '1bf06497729c4c55cb24a10c99ce4525', 'coach'),
(70, 'leki', 'e1ef1a8976bd53dd748c15632e64fe8c', 'coach'),
(71, '', 'd41d8cd98f00b204e9800998ecf8427e', 'coach'),
(72, '', 'd41d8cd98f00b204e9800998ecf8427e', 'receptionist'),
(73, 'markbenjamin', '81dc9bdb52d04dc20036dbd8313ed055', 'coach'),
(74, 'cherniguinang', '81dc9bdb52d04dc20036dbd8313ed055', 'coach'),
(75, 'nelsonarellano', '81dc9bdb52d04dc20036dbd8313ed055', 'coach'),
(76, 'pauljakemorales', '81dc9bdb52d04dc20036dbd8313ed055', 'coach'),
(77, 'samrylfernandez', '81dc9bdb52d04dc20036dbd8313ed055', 'coach'),
(78, '', 'd41d8cd98f00b204e9800998ecf8427e', 'coach'),
(79, '', 'd41d8cd98f00b204e9800998ecf8427e', 'receptionist'),
(80, 'ivanbuglosa', '000f8670aeebb215cb60c2e5ed72b153', 'coach');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activitylog`
--
ALTER TABLE `activitylog`
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
-- Indexes for table `clientassignment`
--
ALTER TABLE `clientassignment`
  ADD PRIMARY KEY (`CA_Code`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`COACH_ID`);

--
-- Indexes for table `conditionassignment`
--
ALTER TABLE `conditionassignment`
  ADD PRIMARY KEY (`Condition_Code`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`E_Code`);

--
-- Indexes for table `healthcondition`
--
ALTER TABLE `healthcondition`
  ADD PRIMARY KEY (`HC_Code`);

--
-- Indexes for table `measurements`
--
ALTER TABLE `measurements`
  ADD PRIMARY KEY (`M_Code`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`MS_Code`);

--
-- Indexes for table `membershiptype`
--
ALTER TABLE `membershiptype`
  ADD PRIMARY KEY (`M_Code`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`Rec_id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `studioclass`
--
ALTER TABLE `studioclass`
  ADD PRIMARY KEY (`SC_Code`);

--
-- Indexes for table `studioclasssession`
--
ALTER TABLE `studioclasssession`
  ADD PRIMARY KEY (`SCS_Code`);

--
-- Indexes for table `towels`
--
ALTER TABLE `towels`
  ADD PRIMARY KEY (`towel_ID`);

--
-- Indexes for table `traininglog`
--
ALTER TABLE `traininglog`
  ADD PRIMARY KEY (`TL_Code`);

--
-- Indexes for table `traininglogsession`
--
ALTER TABLE `traininglogsession`
  ADD PRIMARY KEY (`TLS_Code`);

--
-- Indexes for table `trainingpackage`
--
ALTER TABLE `trainingpackage`
  ADD PRIMARY KEY (`TP_Code`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`TR_Code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activitylog`
--
ALTER TABLE `activitylog`
  MODIFY `AL_Code` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `A_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `CLIENT_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `clientassignment`
--
ALTER TABLE `clientassignment`
  MODIFY `CA_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `COACH_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `conditionassignment`
--
ALTER TABLE `conditionassignment`
  MODIFY `Condition_Code` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `E_Code` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `healthcondition`
--
ALTER TABLE `healthcondition`
  MODIFY `HC_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `measurements`
--
ALTER TABLE `measurements`
  MODIFY `M_Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `MS_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `membershiptype`
--
ALTER TABLE `membershiptype`
  MODIFY `M_Code` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `Rec_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `studioclass`
--
ALTER TABLE `studioclass`
  MODIFY `SC_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `studioclasssession`
--
ALTER TABLE `studioclasssession`
  MODIFY `SCS_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `towels`
--
ALTER TABLE `towels`
  MODIFY `towel_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `traininglog`
--
ALTER TABLE `traininglog`
  MODIFY `TL_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `traininglogsession`
--
ALTER TABLE `traininglogsession`
  MODIFY `TLS_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `trainingpackage`
--
ALTER TABLE `trainingpackage`
  MODIFY `TP_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `TR_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
