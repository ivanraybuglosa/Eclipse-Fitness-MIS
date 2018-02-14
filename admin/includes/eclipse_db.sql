-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2018 at 03:03 PM
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
  `CLIENT_ID` int(8) DEFAULT NULL,
  `COACH_ID` int(8) NOT NULL,
  `Activity` text NOT NULL,
  `AL_Date` date NOT NULL,
  `AL_StartTime` time NOT NULL,
  `AL_EndTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activitylog`
--

INSERT INTO `activitylog` (`AL_Code`, `CLIENT_ID`, `COACH_ID`, `Activity`, `AL_Date`, `AL_StartTime`, `AL_EndTime`) VALUES
(75, NULL, 22, 'Studio Class Session', '2018-02-06', '16:01:00', '18:01:00'),
(76, 69, 23, 'Personal Training Session', '2018-02-06', '14:00:00', '15:59:00'),
(77, 68, 22, 'Studio Class Session', '2018-02-06', '14:01:00', '16:00:00'),
(78, 68, 23, 'Personal Training Session', '2018-02-06', '08:01:00', '09:01:00'),
(79, 72, 22, 'Studio Class Session', '2018-02-04', '14:01:00', '16:00:00'),
(80, 68, 22, 'Studio Class Session', '2018-02-05', '16:01:00', '18:01:00'),
(81, 68, 22, 'Studio Class Session', '2018-02-05', '16:01:00', '18:01:00'),
(82, 68, 22, 'Studio Class Session', '2018-02-05', '16:01:00', '18:01:00'),
(83, 69, 22, 'Studio Class Session', '2018-02-05', '16:01:00', '18:01:00'),
(84, 73, 22, 'Studio Class Session', '2018-02-05', '16:01:00', '18:01:00'),
(85, 69, 22, 'Studio Class Session', '2018-02-05', '16:01:00', '18:01:00'),
(86, 69, 22, 'Studio Class Session', '2018-02-05', '16:01:00', '18:01:00'),
(87, 71, 22, 'Studio Class Session', '2018-02-05', '16:01:00', '18:01:00'),
(88, 76, 23, 'Personal Training Session', '2018-02-07', '14:01:00', '15:04:00'),
(89, 77, 23, 'Personal Training Session', '2018-02-07', '14:00:00', '15:01:00'),
(90, 78, 23, 'Personal Training Session', '2018-02-07', '15:02:00', '17:03:00'),
(91, 68, 23, 'Personal Training Session', '2018-02-07', '14:02:00', '16:01:00'),
(92, 69, 23, 'Personal Training Session', '2018-02-08', '14:01:00', '15:02:00'),
(93, 69, 23, 'Personal Training Session', '2018-02-09', '14:01:00', '14:03:00'),
(94, 69, 23, 'Personal Training Session', '2018-02-10', '14:01:00', '15:01:00'),
(95, 69, 23, 'Personal Training Session', '2018-02-15', '14:01:00', '14:02:00'),
(96, 69, 23, 'Personal Training Session', '2018-02-11', '15:03:00', '17:02:00'),
(97, 69, 23, 'Personal Training Session', '2018-02-16', '15:02:00', '16:01:00'),
(98, 69, 23, 'Personal Training Session', '2018-02-23', '15:00:00', '16:02:00'),
(99, 69, 23, 'Personal Training Session', '2018-02-28', '14:01:00', '16:02:00'),
(100, 68, 22, 'Studio Class Session', '2018-02-04', '14:01:00', '16:00:00'),
(101, 68, 22, 'Studio Class Session', '2018-02-04', '14:01:00', '16:00:00'),
(102, 68, 22, 'Studio Class Session', '2018-02-04', '14:01:00', '16:00:00'),
(103, 68, 22, 'Studio Class Session', '2018-02-04', '14:01:00', '16:00:00'),
(104, 68, 22, 'Studio Class Session', '2018-02-04', '14:01:00', '16:00:00'),
(105, 69, 22, 'Studio Class Session', '2018-02-04', '14:01:00', '16:00:00'),
(106, 68, 22, 'Studio Class Session', '2018-02-04', '14:01:00', '16:00:00'),
(107, 69, 22, 'Studio Class Session', '2018-02-04', '14:01:00', '16:00:00'),
(108, 68, 22, 'Studio Class Session', '2018-02-04', '14:01:00', '16:00:00'),
(109, 68, 22, 'Studio Class Session', '2018-02-04', '14:01:00', '16:00:00'),
(110, 69, 22, 'Studio Class Session', '2018-02-04', '14:01:00', '16:00:00'),
(111, 70, 22, 'Studio Class Session', '2018-02-04', '14:01:00', '16:00:00'),
(112, 69, 22, 'Studio Class Session', '2018-02-04', '14:01:00', '16:00:00'),
(113, NULL, 23, 'Studio Class Session', '0000-00-00', '03:15:00', '14:02:00'),
(114, 69, 22, 'Studio Class Session', '2018-02-04', '14:01:00', '16:00:00'),
(115, 70, 22, 'Studio Class Session', '2018-02-04', '14:01:00', '16:00:00'),
(116, 69, 22, 'Personal Training Session', '2018-02-23', '13:02:00', '17:02:00'),
(117, 74, 23, 'Personal Training Session', '2018-02-16', '14:01:00', '15:02:00'),
(118, 76, 23, 'Personal Training Session', '2018-02-21', '14:01:00', '15:02:00'),
(119, 68, 25, 'Personal Training Session', '2018-02-16', '14:01:00', '15:02:00'),
(120, 69, 25, 'Personal Training Session', '2018-01-31', '13:01:00', '15:01:00'),
(121, 76, 23, 'Personal Training Session', '2018-02-03', '13:01:00', '15:00:00'),
(122, 72, 25, 'Personal Training Session', '2018-02-03', '14:02:00', '15:02:00'),
(123, 70, 23, 'Personal Training Session', '2018-02-16', '14:01:00', '15:01:00'),
(124, 69, 23, 'Personal Training Session', '2018-02-10', '14:01:00', '15:02:00'),
(125, 77, 23, 'Personal Training Session', '2018-02-11', '13:00:00', '13:00:00'),
(126, 72, 23, 'Personal Training Session', '2018-02-02', '13:00:00', '14:00:00'),
(127, 70, 23, 'Personal Training Session', '2018-02-09', '14:03:00', '15:03:00'),
(128, 72, 23, 'Personal Training Session', '2018-02-09', '14:02:00', '15:03:00'),
(129, 69, 23, 'Personal Training Session', '2018-02-02', '14:02:00', '15:03:00'),
(130, 69, 23, 'Personal Training Session', '2018-02-11', '13:01:00', '14:02:00'),
(131, 76, 23, 'Personal Training Session', '2018-02-09', '14:02:00', '14:02:00'),
(132, 72, 23, 'Personal Training Session', '2018-02-01', '13:01:00', '14:00:00'),
(133, 69, 23, 'Personal Training Session', '2018-02-02', '14:00:00', '14:00:00'),
(134, 76, 23, 'Personal Training Session', '2018-02-14', '14:01:00', '15:01:00'),
(135, 69, 23, 'Personal Training Session', '2018-02-04', '14:02:00', '15:01:00'),
(136, 69, 23, 'Personal Training Session', '2018-02-01', '13:01:00', '15:02:00'),
(137, 69, 23, 'Personal Training Session', '2018-02-01', '13:01:00', '15:02:00'),
(138, 69, 23, 'Personal Training Session', '2018-02-01', '13:01:00', '15:02:00'),
(139, 69, 23, 'Personal Training Session', '2018-02-01', '13:01:00', '15:02:00'),
(140, 69, 23, 'Personal Training Session', '2018-02-01', '13:01:00', '15:02:00'),
(141, 69, 23, 'Personal Training Session', '2018-02-08', '14:01:00', '14:02:00'),
(142, 69, 23, 'Personal Training Session', '2018-02-16', '14:01:00', '14:02:00'),
(143, 72, 23, 'Personal Training Session', '2018-02-09', '14:01:00', '15:01:00'),
(144, 76, 23, 'Personal Training Session', '2018-02-08', '14:02:00', '15:01:00'),
(145, 69, 23, 'Personal Training Session', '2018-02-09', '14:02:00', '15:02:00'),
(146, 68, 23, 'Personal Training Session', '2018-02-01', '16:01:00', '17:01:00'),
(147, 77, 23, 'Personal Training Session', '2018-02-01', '14:01:00', '15:02:00'),
(148, 76, 23, 'Personal Training Session', '2018-02-08', '14:02:00', '15:01:00'),
(149, 69, 23, 'Personal Training Session', '2018-02-08', '13:01:00', '14:01:00'),
(150, 68, 22, 'Personal Training Session', '2018-02-07', '14:02:00', '15:01:00'),
(151, 77, 23, 'Personal Training Session', '2018-02-15', '14:02:00', '14:02:00'),
(152, 69, 23, 'Personal Training Session', '2018-02-21', '13:02:00', '15:01:00'),
(153, 76, 23, 'Personal Training Session', '2018-02-08', '14:01:00', '16:02:00'),
(154, NULL, 23, 'Studio Class Session', '2018-02-14', '14:02:00', '17:02:00'),
(155, 68, 23, 'Studio Class Session', '2018-02-14', '14:02:00', '17:02:00'),
(156, 69, 23, 'Studio Class Session', '2018-02-14', '14:02:00', '17:02:00'),
(157, NULL, 23, 'Studio Class Session', '2018-02-07', '14:00:00', '15:03:00'),
(158, 68, 23, 'Studio Class Session', '2018-02-07', '14:00:00', '15:03:00'),
(159, 69, 23, 'Personal Training Session', '2018-02-08', '14:59:00', '14:01:00'),
(160, 72, 23, 'Personal Training Session', '2018-02-13', '14:01:00', '15:02:00'),
(161, 76, 23, 'Personal Training Session', '2018-02-14', '14:02:00', '15:01:00'),
(162, 68, 23, 'Personal Training Session', '2018-02-09', '12:01:00', '15:02:00'),
(163, 70, 23, 'Personal Training Session', '2018-02-08', '14:01:00', '15:01:00'),
(164, 69, 23, 'Personal Training Session', '2018-02-14', '14:01:00', '15:02:00'),
(165, 68, 23, 'Personal Training Session', '2018-02-13', '14:01:00', '15:01:00'),
(166, 77, 23, 'Personal Training Session', '2018-02-15', '14:01:00', '14:01:00'),
(167, 70, 23, 'Personal Training Session', '2018-02-15', '14:01:00', '14:00:00'),
(168, 76, 23, 'Personal Training Session', '2018-02-07', '14:01:00', '15:02:00'),
(169, 69, 23, 'Personal Training Session', '2018-02-15', '14:01:00', '15:02:00'),
(170, 72, 23, 'Personal Training Session', '2018-02-14', '14:01:00', '15:03:00'),
(171, 68, 23, 'Personal Training Session', '2018-02-15', '14:01:00', '14:02:00'),
(172, 70, 23, 'Personal Training Session', '2018-02-08', '13:01:00', '14:02:00'),
(173, 76, 23, 'Personal Training Session', '2018-02-14', '14:03:00', '14:02:00'),
(174, 69, 23, 'Personal Training Session', '2018-02-13', '13:01:00', '14:02:00'),
(175, 72, 23, 'Personal Training Session', '2018-02-08', '13:01:00', '13:00:00'),
(176, 0, 0, 'Personal Training Session', '2018-02-08', '14:01:00', '14:02:00'),
(177, 1, 23, 'Personal Training Session', '2018-02-15', '13:02:00', '14:01:00'),
(178, 19, 23, 'Personal Training Session', '2018-02-15', '14:00:00', '14:01:00'),
(179, 8, 23, 'Personal Training Session', '2018-02-09', '15:02:00', '15:03:00'),
(180, 20, 23, 'Personal Training Session', '2018-02-15', '13:02:00', '13:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `A_Code` int(8) NOT NULL,
  `CLIENT_ID` int(8) NOT NULL,
  `A_TimeIn` time NOT NULL,
  `A_TimeOut` text,
  `A_TowelQty` int(2) NOT NULL,
  `A_TowelReturn` int(2) NOT NULL,
  `A_LockerKey` int(2) NOT NULL,
  `A_ReturnedKey` text NOT NULL,
  `A_Year` varchar(10) NOT NULL,
  `A_Month` varchar(10) NOT NULL,
  `A_Date` date NOT NULL,
  `A_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`A_Code`, `CLIENT_ID`, `A_TimeIn`, `A_TimeOut`, `A_TowelQty`, `A_TowelReturn`, `A_LockerKey`, `A_ReturnedKey`, `A_Year`, `A_Month`, `A_Date`, `A_status`) VALUES
(481, 68, '03:24:55', '03:25:01', 1, 1, 1, 'Returned', '2018', 'Feb', '2018-02-11', 'Member'),
(482, 68, '03:25:08', NULL, 2, 0, 1, '', '2018', 'Feb', '2018-02-11', 'Member'),
(483, 78, '03:25:27', '03:25:39', 2, 2, 2, 'Returned', '2018', 'Feb', '2018-02-11', 'Walk-in'),
(484, 78, '03:25:46', NULL, 4, 0, 2, '', '2018', 'Feb', '2018-02-11', 'Walk-in'),
(485, 80, '03:37:15', '03:37:39', 2, 2, 3, 'Returned', '2018', 'Feb', '2018-02-11', 'Walk-in'),
(486, 80, '03:37:42', '03:38:01', 2, 2, 3, 'Returned', '2018', 'Feb', '2018-02-11', 'Walk-in'),
(487, 80, '03:38:04', '03:39:35', 2, 2, 3, 'Returned', '2018', 'Feb', '2018-02-11', 'Walk-in'),
(488, 80, '03:39:38', '03:41:33', 2, 2, 3, 'Returned', '2018', 'Feb', '2018-02-11', 'Walk-in'),
(489, 80, '03:41:36', '03:42:44', 2, 2, 3, 'Returned', '2018', 'Feb', '2018-02-11', 'Walk-in'),
(490, 80, '03:42:48', '03:50:36', 1, 1, 3, 'Returned', '2018', 'Feb', '2018-02-11', 'Walk-in'),
(491, 80, '03:49:53', '03:50:39', 1, 1, 3, 'Returned', '2018', 'Feb', '2018-02-11', 'Walk-in'),
(492, 80, '03:50:08', '03:50:43', 1, 1, 3, 'Returned', '2018', 'Feb', '2018-02-11', 'Walk-in'),
(493, 80, '03:50:30', '03:50:46', 1, 1, 3, 'Returned', '2018', 'Feb', '2018-02-11', 'Walk-in'),
(494, 80, '03:50:49', '03:51:42', 2, 2, 3, 'Returned', '2018', 'Feb', '2018-02-11', 'Walk-in'),
(495, 80, '03:51:39', '03:51:47', 2, 2, 3, 'Returned', '2018', 'Feb', '2018-02-11', 'Walk-in'),
(496, 80, '03:51:52', '03:52:21', 2, 2, 3, 'Returned', '2018', 'Feb', '2018-02-11', 'Walk-in'),
(497, 80, '03:52:23', '03:57:01', 2, 2, 3, 'Returned', '2018', 'Feb', '2018-02-11', 'Walk-in'),
(498, 80, '03:57:03', '03:59:08', 2, 2, 3, 'Returned', '2018', 'Feb', '2018-02-11', 'Walk-in'),
(499, 80, '03:59:10', '03:59:15', 2, 2, 3, 'Returned', '2018', 'Feb', '2018-02-11', 'Walk-in'),
(500, 80, '04:00:15', '04:00:20', 2, 2, 3, 'Returned', '2018', 'Feb', '2018-02-11', 'Member'),
(501, 80, '04:00:45', '04:01:15', 1, 1, 3, 'Returned', '2018', 'Feb', '2018-02-11', 'Member'),
(502, 80, '04:01:17', '04:01:25', 2, 2, 3, 'Returned', '2018', 'Feb', '2018-02-11', 'Member'),
(503, 82, '23:28:24', '23:28:37', 2, 2, 1, 'Returned', '2018', 'Feb', '2018-02-13', 'CLIENT_Reg'),
(504, 1, '18:45:17', '18:45:25', 1, 1, 2, 'Unreturned', '2018', 'Feb', '2018-02-14', 'Member'),
(505, 1, '18:45:54', '18:45:58', 2, 2, 1, 'Unreturned', '2018', 'Feb', '2018-02-14', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `backuphistory`
--

CREATE TABLE `backuphistory` (
  `backup_id` int(8) NOT NULL,
  `backup_type` varchar(6) NOT NULL,
  `backup_date` date NOT NULL,
  `backup_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backuphistory`
--

INSERT INTO `backuphistory` (`backup_id`, `backup_type`, `backup_date`, `backup_time`) VALUES
(2, 'Export', '2018-01-27', '02:14:00'),
(3, 'Import', '2018-01-27', '02:19:00'),
(4, 'Export', '2018-01-27', '02:20:00'),
(5, 'Import', '2018-01-27', '02:49:00'),
(11, 'Export', '2018-01-27', '03:25:00'),
(12, 'Export', '2018-02-02', '07:51:00'),
(13, 'Import', '2018-02-06', '11:53:00'),
(14, 'Import', '2018-02-06', '11:53:00'),
(15, 'Export', '2018-02-06', '11:53:00'),
(16, 'Import', '2018-02-06', '05:01:00'),
(17, 'Import', '2018-02-06', '05:01:00'),
(18, 'Import', '2018-02-06', '08:00:00');

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
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`CLIENT_ID`, `CLIENT_FirstName`, `CLIENT_MiddleName`, `CLIENT_LastName`, `CLIENT_Gender`, `CLIENT_Email`, `CLIENT_RegStatus`, `CLIENT_StatusDuration`, `CLIENT_ContactNumber`, `CLIENT_userAccount`, `CLIENT_bday`, `CLIENT_year`, `CLIENT_month`, `CLIENT_day`, `CLIENT_regDATE`, `month`, `year`) VALUES
(1, 'Abigail', 'Castillo', 'Ball', 'Male', 'Abigail Ball@gmail.c', 'Member', '', '09371481926', '', '1984-08-10', '1984', '08', '10', '2013-08-15', 'Aug', '2013'),
(2, 'Aiza', 'Bell', 'College', 'Male', 'Aiza College@gmail.c', 'Member', '', '09737992613', '', '1990-04-15', '1990', '04', '15', '2011-02-01', 'Feb', '2011'),
(3, 'Alden', 'Smith', 'Mary', 'Male', 'Alden Mary@gmail.com', 'Member', '', '09659482157', '', '1996-05-30', '1996', '05', '30', '2011-04-29', 'Apr', '2011'),
(4, 'Amihan', 'Jones', 'Hayes', 'Male', 'Amihan Hayes@gmail.c', 'Member', '', '09691780421', '', '1999-05-11', '1999', '05', '11', '2006-03-19', 'Mar', '2006'),
(5, 'Amparo', 'Brown', 'Page', 'Male', 'Amparo Page@gmail.co', 'Member', '', '09353615042', '', '1988-09-20', '1988', '09', '20', '2016-09-24', 'Sep', '2016'),
(6, 'Apolinario', 'Johnson', 'Rose', 'Male', 'Apolinario Rose@gmai', 'Member', '', '09791359392', '', '2005-09-29', '2005', '09', '29', '2011-10-26', 'Oct', '2011'),
(7, 'Amado', 'Williams', 'Patterson', 'Male', 'Amado Patterson@gmai', 'Member', '', '09390787081', '', '1983-09-23', '1983', '09', '23', '2016-06-15', 'Jun', '2016'),
(8, 'Alejandro', 'Miller', 'Ann', 'Male', 'Alejandro Ann@gmail.', 'Member', '', '09708880925', '', '2004-11-10', '2004', '11', '10', '2015-06-20', 'Jun', '2015'),
(9, 'Andres', 'Taylor', 'Crawford', 'Male', 'Andres Crawford@gmai', 'Member', '', '09929659028', '', '2002-03-21', '2002', '03', '21', '2010-08-29', 'Aug', '2010'),
(10, 'Armando', 'Wilson', 'Arnold', 'Male', 'Armando Arnold@gmail', 'Member', '', '09507625599', '', '1995-03-20', '1995', '03', '20', '2007-07-05', 'Jul', '2007'),
(11, 'Angel', 'Davis', 'House', 'Male', 'Angel House@gmail.co', 'Member', '', '09370609024', '', '1987-09-16', '1987', '09', '16', '2007-03-26', 'Mar', '2007'),
(12, 'Antonio', 'White', 'Fletcher', 'Male', 'Antonio Fletcher@gma', 'Member', '', '09427705188', '', '1997-01-10', '1997', '01', '10', '2015-01-15', 'Jan', '2015'),
(13, 'Aquilino', 'Clark', 'Harvey', 'Male', 'Aquilino Harvey@gmai', 'Member', '', '09715926994', '', '2002-04-20', '2002', '04', '20', '2005-06-17', 'Jul', '2005'),
(14, 'Arnel', 'Hall', 'Fuller', 'Male', 'Arnel Fuller@gmail.c', 'Member', '', '09944723323', '', '2002-04-29', '2002', '04', '29', '2006-05-30', 'May', '2006'),
(15, 'Avelino', 'Thomas', 'Elliott', 'Male', 'Avelino Elliott@gmai', 'Member', '', '09499283209', '', '1991-01-13', '1991', '01', '13', '2016-10-29', 'Oct', '2016'),
(16, 'Aaron', 'Thompson', 'Carpenter', 'Male', 'Aaron Carpenter@gmai', 'Member', '', '09491266302', '', '1996-03-19', '1996', '03', '19', '2006-03-15', 'Mar', '2006'),
(17, 'Abigail', 'Moore', 'Perkins', 'Male', 'Abigail Perkins@gmai', 'Member', '', '09409696357', '', '2005-12-23', '2005', '12', '23', '2013-06-29', 'Jun', '2013'),
(18, 'Abraham', 'Hill', 'Morrison', 'Male', 'Abraham Morrison@gma', 'Member', '', '09633901659', '', '2004-07-19', '2004', '07', '19', '2007-02-06', 'Feb', '2007'),
(19, 'Adonis', 'Walker', 'Peterson', 'Male', 'Adonis Peterson@gmai', 'Member', '', '09939382893', '', '2005-02-17', '2005', '02', '17', '2010-01-30', 'Jan', '2010'),
(20, 'Adrian', 'Anderson', 'Davidson', 'Male', 'Adrian Davidson@gmai', 'Member', '', '09708120524', '', '1984-09-30', '1984', '09', '30', '2011-01-15', 'Jan', '2011'),
(21, 'Dalisay', 'Wright', 'Ferguson', 'Male', 'Dalisay Ferguson@gma', 'Member', '', '09444465535', '', '1990-01-23', '1990', '01', '23', '2006-08-07', 'Aug', '2006'),
(22, 'Danilo', 'Martin', 'Park', 'Male', 'Danilo Park@gmail.co', 'Member', '', '09590550552', '', '2003-11-29', '2003', '11', '29', '2009-11-04', 'Nov', '2009'),
(23, 'Divina', 'Wood', 'Myers', 'Male', 'Divina Myers@gmail.c', 'Member', '', '09835449302', '', '1992-04-19', '1992', '04', '19', '2009-05-05', 'May', '2009'),
(24, 'Daisy', 'Allen', 'Ryan', 'Male', 'Daisy Ryan@gmail.com', 'Member', '', '09393101629', '', '1988-09-19', '1988', '09', '19', '2016-05-05', 'May', '2016'),
(25, 'Damien', 'Robinson', 'Freeman', 'Male', 'Damien Freeman@gmail', 'Member', '', '09364648600', '', '2003-06-27', '2003', '06', '27', '2016-10-24', 'Oct', '2016'),
(26, 'Danica', 'Lewis', 'Pierce', 'Female', 'Danica Pierce@gmail.', 'Member', '', '09400809511', '', '2005-12-13', '2005', '12', '13', '2012-02-08', 'Feb', '2012'),
(27, 'Daniel', 'Scott', 'Fellows', 'Female', 'Daniel Fellows@gmail', 'Walk-in', '', '09457851001', '', '1993-05-30', '1993', '05', '30', '2007-07-21', 'Jul', '2007'),
(28, 'Daniela, Danielle', 'Young', 'Douglas', 'Female', 'Daniela, Danielle Do', 'Walk-in', '', '09567091921', '', '2002-05-25', '2002', '05', '25', '2011-07-10', 'Jul', '2011'),
(29, 'Danika', 'Jackson', 'Tucker', 'Female', 'Danika Tucker@gmail.', 'Walk-in', '', '09523142577', '', '1990-05-13', '1990', '05', '13', '2017-08-30', 'Aug', '2017'),
(30, 'Dante', 'Adams', 'Dixon', 'Female', 'Dante Dixon@gmail.co', 'Walk-in', '', '09926301688', '', '1996-04-19', '1996', '04', '19', '2012-02-15', 'Feb', '2012'),
(31, 'Daphne', 'Tryniski', 'Bradley', 'Female', 'Daphne Bradley@gmail', 'Walk-in', '', '09735399423', '', '2001-03-19', '2001', '03', '19', '2007-01-26', 'Jan', '2007'),
(32, 'Daria', 'Green', 'Hopkins', 'Female', 'Daria Hopkins@gmail.', 'Walk-in', '', '09396207172', '', '2004-03-20', '2004', '03', '20', '2005-10-11', 'Oct', '2005'),
(33, 'Darius', 'Evans', 'Potter', 'Female', 'Darius Potter@gmail.', 'Walk-in', '', '09965980473', '', '1997-06-17', '1997', '06', '17', '2011-12-22', 'Dec', '2011'),
(34, 'Darlene', 'King', 'Lloyd', 'Female', 'Darlene Lloyd@gmail.', 'Walk-in', '', '09412261059', '', '1999-11-19', '1999', '11', '19', '2011-04-26', 'Apr', '2011'),
(35, 'Darryl', 'Baker', 'Owen', 'Female', 'Darryl Owen@gmail.co', 'Walk-in', '', '09595939557', '', '2000-07-11', '2000', '07', '11', '2010-01-09', 'Jan', '2010'),
(36, 'Darwin', 'John', 'Payne', 'Female', 'Darwin Payne@gmail.c', 'Walk-in', '', '09529824616', '', '1979-08-12', '1979', '08', '12', '2017-02-16', 'Feb', '2017'),
(37, 'David', 'Harris', 'Curtis', 'Female', 'David Curtis@gmail.c', 'Walk-in', '', '09449666107', '', '1996-07-11', '1996', '07', '11', '2010-12-12', 'Dec', '2010'),
(38, 'Dean', 'Roberts', 'Newton', 'Female', 'Dean Newton@gmail.co', 'Walk-in', '', '09935668380', '', '1986-07-21', '1986', '07', '21', '2014-05-08', 'May', '2014'),
(39, 'Deither', 'Campbell', 'Woods', 'Female', 'Deither Woods@gmail.', 'Walk-in', '', '09454096138', '', '1993-04-13', '1993', '04', '13', '2014-11-15', 'Nov', '2014'),
(40, 'Delila', 'James', 'Carr', 'Female', 'Delila Carr@gmail.co', 'Walk-in', '', '09516039339', '', '1982-03-22', '1982', '03', '22', '2016-05-24', 'May', '2016'),
(41, 'Demetria', 'Stewart', 'Duncan', 'Female', 'Demetria Duncan@gmai', 'Walk-in', '', '09634371167', '', '1978-09-11', '1978', '09', '11', '2015-10-20', 'Oct', '2015'),
(42, 'Denis, Dennis', 'Lee', 'French', 'Female', 'Denis, Dennis French', 'Walk-in', '', '09464812233', '', '1978-03-30', '1978', '03', '30', '2015-05-31', 'May', '2015'),
(43, 'Denise', 'County', 'Baldwin', 'Female', 'Denise Baldwin@gmail', 'Walk-in', '', '09734494051', '', '1990-02-13', '1990', '02', '13', '2006-08-14', 'Aug', '2006'),
(44, 'Pablo', 'Turner', 'Field', 'Female', 'Pablo Field@gmail.co', 'Walk-in', '', '09660653609', '', '1989-09-13', '1989', '09', '13', '2013-02-22', 'Feb', '2013'),
(45, 'Paco', 'Parker', 'Bishop', 'Female', 'Paco Bishop@gmail.co', 'Walk-in', '', '09418806282', '', '1998-11-16', '1998', '11', '16', '2009-09-05', 'Sep', '2009'),
(46, 'Palma', 'Cook', 'Pearson', 'Female', 'Palma Pearson@gmail.', 'Walk-in', '', '09921192741', '', '1993-10-12', '1993', '10', '12', '2010-05-26', 'May', '2010'),
(47, 'Palmer', 'Mc', 'Brien', 'Female', 'Palmer Brien@gmail.c', 'Walk-in', '', '09817084254', '', '1997-08-28', '1997', '08', '28', '2015-06-19', 'Jun', '2015'),
(48, 'Paloma', 'Edwards', 'Williamson', 'Female', 'Paloma Williamson@gm', 'Walk-in', '', '09684663643', '', '1981-07-16', '1981', '07', '16', '2005-12-09', 'Dec', '2005'),
(49, 'Pamela', 'Morris', 'Nichols', 'Female', 'Pamela Nichols@gmail', 'Walk-in', '', '09633278399', '', '1989-09-22', '1989', '09', '22', '2012-08-28', 'Aug', '2012'),
(50, 'Pancho', 'Mitchell', 'Wilkinson', 'Female', 'Pancho Wilkinson@gma', 'Walk-in', '', '09844105713', '', '2001-10-29', '2001', '10', '29', '2005-07-19', 'Jul', '2005');

-- --------------------------------------------------------

--
-- Table structure for table `clientassignment`
--

CREATE TABLE `clientassignment` (
  `CA_Code` int(8) NOT NULL,
  `CLIENT_ID` int(8) NOT NULL,
  `SCS_Code` int(8) NOT NULL,
  `CA_RegDate` date NOT NULL,
  `CA_Remaining` int(2) NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientassignment`
--

INSERT INTO `clientassignment` (`CA_Code`, `CLIENT_ID`, `SCS_Code`, `CA_RegDate`, `CA_Remaining`, `month`, `year`) VALUES
(110, 68, 45, '2018-02-07', 36, 'Feb', '2018'),
(111, 69, 45, '2018-02-09', 36, 'Feb', '2018'),
(112, 70, 45, '2018-02-09', 36, 'Feb', '2018'),
(114, 69, 50, '2018-02-10', 38, 'Feb', '2018'),
(115, 68, 51, '2018-02-10', 4, 'Feb', '2018');

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
  `Coach_EmailAddress` varchar(50) NOT NULL,
  `Coach_Specialty` text NOT NULL,
  `Coach_Type` text NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`COACH_ID`, `Coach_LastName`, `Coach_FirstName`, `Coach_Gender`, `Coach_ContactNumber`, `Coach_EmailAddress`, `Coach_Specialty`, `Coach_Type`, `userID`) VALUES
(22, 'buglosaaaah', 'aaa', 'Male', 0, 'ivanbuglosa@gmail.com', 'fitness', '', 66),
(23, 'Benjamin', 'Mark', 'Male', 2147483647, 'markbenjamin@gmail.com', 'fitness coach', 'Senior', 66),
(25, 'a', 'a', 'Male', 2131232, 'a@g.com', 'a', 'a', 66),
(26, 'a', 'a', 'Male', 123, 'a@g.com', 'a', 'a', 66),
(27, 'a', 'a', 'Male', 231, 'a@g.com', 'a', 's', 66),
(28, 'a', 'a', 'Male', 22, 'a@g.com', 'a', 'd1', 66),
(29, 'asd', 'asd', 'Male', 11, 'a@g.com', 'asd', 'ds', 66),
(30, 'a', 'a', 'Male', 231, 'a@g.com', 'a', 'sd', 66),
(31, 'a', 'a', 'Male', 213, 'a@g.com', 'a', 'sd', 66),
(32, 's', 's', 'Male', 123, 'a@g.com', 'd', 'sda', 66),
(33, 'sd', 'sad', 'Male', 123, 'a@g.com', 'd', 'd', 66),
(34, 's', 's', 'Male', 1231231, 'd@gmail.com', 'sad', 's', 96);

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `E_Code` int(8) NOT NULL,
  `E_Type` text NOT NULL,
  `E_Model` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`E_Code`, `E_Type`, `E_Model`) VALUES
(32, 'SQUAT RACK', 's1'),
(33, 'SQUAT RACK', 's2'),
(34, 'BARBELLS', 'b1'),
(35, 'BARBELLS', 'b2');

-- --------------------------------------------------------

--
-- Table structure for table `equipmentinventory`
--

CREATE TABLE `equipmentinventory` (
  `EI_Code` int(8) NOT NULL,
  `E_Code` int(8) NOT NULL,
  `EI_Quantity` int(4) NOT NULL,
  `EI_DeliveryDate` date NOT NULL,
  `EI_DeliveryTime` time NOT NULL,
  `EI_Activity` text NOT NULL,
  `EI_Status` text NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipmentinventory`
--

INSERT INTO `equipmentinventory` (`EI_Code`, `E_Code`, `EI_Quantity`, `EI_DeliveryDate`, `EI_DeliveryTime`, `EI_Activity`, `EI_Status`, `month`, `year`) VALUES
(27, 32, 100, '2019-01-17', '14:00:00', 'Restock', '', 'Feb', '2018'),
(28, 33, 123, '2018-02-20', '14:01:00', 'Restock', '', 'Feb', '2018'),
(29, 34, 21, '2018-02-20', '14:02:00', 'Restock', '', 'Feb', '2018'),
(30, 35, 200, '2018-02-13', '14:02:00', 'Restock', '', 'Feb', '2018'),
(31, 34, 50, '2018-02-13', '13:00:00', 'Restock', '', 'Feb', '2018'),
(32, 34, 20, '2018-02-16', '15:01:00', 'Discard', '', 'Feb', '2018'),
(33, 34, 100, '2018-02-15', '15:02:00', 'Discard', '', 'Feb', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `measurements`
--

CREATE TABLE `measurements` (
  `M_Code` int(11) NOT NULL,
  `TL_Code` int(11) DEFAULT NULL,
  `M_Weight` float DEFAULT NULL,
  `M_SkeletalMass` float DEFAULT NULL,
  `M_BodyFatMass` float DEFAULT NULL,
  `M_FatFreeMass` float DEFAULT NULL,
  `M_BodyMassIndex` float DEFAULT NULL,
  `M_PercentBodyFat` float DEFAULT NULL,
  `M_WaistHipRatio` float DEFAULT NULL,
  `M_BasalMetabolicRate` float DEFAULT NULL,
  `M_LeftUpperArm` float DEFAULT NULL,
  `M_RightUpperArm` float DEFAULT NULL,
  `M_Chest` float DEFAULT NULL,
  `M_Waist` float DEFAULT NULL,
  `M_Hips` float DEFAULT NULL,
  `M_LeftUpperThigh` float DEFAULT NULL,
  `M_RightUpperThigh` float DEFAULT NULL,
  `M_RestingHR` float DEFAULT NULL,
  `M_DateMeasured` date DEFAULT NULL,
  `M_MeasurementType` text,
  `M_Classification` text NOT NULL,
  `month` text NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `measurements`
--

INSERT INTO `measurements` (`M_Code`, `TL_Code`, `M_Weight`, `M_SkeletalMass`, `M_BodyFatMass`, `M_FatFreeMass`, `M_BodyMassIndex`, `M_PercentBodyFat`, `M_WaistHipRatio`, `M_BasalMetabolicRate`, `M_LeftUpperArm`, `M_RightUpperArm`, `M_Chest`, `M_Waist`, `M_Hips`, `M_LeftUpperThigh`, `M_RightUpperThigh`, `M_RestingHR`, `M_DateMeasured`, `M_MeasurementType`, `M_Classification`, `month`, `year`) VALUES
(69, 40, 150, 4, 1, 1, 15, 4, 2, 3, 2, 5, 3, 4, 2, 3, 2, 5, '2018-02-07', 'Initial', 'Class III Obesity', 'Feb', 2018),
(70, 40, 50, 3, 2, 1, 2, 2, 3, 2, 1, 3, 2, 3, 2, 5, 4, 3, '2018-02-07', 'Final', 'Class III Obesity', 'Feb', 2018),
(72, 39, 27, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 1, 1, 1, 1, '2018-02-07', 'Initial', 'Overweight', 'Feb', 2018),
(73, 39, 60, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '2018-02-07', 'Final', 'Class III Obesity', 'Feb', 2018),
(74, 41, 1, 2, 3, 4, 5, 23, 31, 12, 2, 3, 23, 23, 23, 31, 23, 32, '2018-02-09', 'Initial', 'Underweight', 'Feb', 2018),
(75, 42, 1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 5, 5, 55, 5, 5, 5, '2018-02-09', 'Initial', 'Underweight', 'Feb', 2018),
(76, 42, 2, 21, 22, 212, 12, 2, 121, 2, 121, 2, 12, 12, 12, 12, 12, 12, '2018-02-09', 'Initial', 'Underweight', 'Feb', 2018),
(77, 43, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '2018-02-09', 'Initial', 'Underweight', 'Feb', 2018),
(78, 43, 33, 333, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, '2018-02-09', 'Final', 'Class I Obesity', 'Feb', 2018),
(79, 90, 1, 1111110, 1, 1, 1, 1, 1, 1, 1, 11, 12, 1, 1, 1, 1, 1, '2018-02-13', 'Initial', 'Underweight', 'Feb', 2018),
(80, 90, 111, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2018-02-13', 'Final', 'Class III Obesity', 'Feb', 2018);

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
(13, 'sa', '5', 41);

-- --------------------------------------------------------

--
-- Table structure for table `membershiptype`
--

CREATE TABLE `membershiptype` (
  `M_Code` int(5) NOT NULL,
  `CLIENT_ID` int(8) NOT NULL,
  `MS_Code` int(8) NOT NULL,
  `M_regDate` date NOT NULL,
  `M_expiryDate` date NOT NULL,
  `M_membershipStatus` text NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membershiptype`
--

INSERT INTO `membershiptype` (`M_Code`, `CLIENT_ID`, `MS_Code`, `M_regDate`, `M_expiryDate`, `M_membershipStatus`, `month`, `year`) VALUES
(52, 80, 1, '2018-02-11', '2018-02-13', 'Active', 'Feb', '2018'),
(53, 25, 6, '2018-02-12', '2018-02-17', 'Active', 'Feb', '2018'),
(54, 3, 6, '2018-02-12', '2018-02-14', 'Active', 'Feb', '2018'),
(55, 26, 6, '2018-02-14', '2018-08-14', 'Active', 'Feb', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Pay_ID` int(8) NOT NULL,
  `TR_ID` int(8) NOT NULL,
  `Pay_amount` float NOT NULL,
  `Pay_date` date NOT NULL,
  `Pay_time` time NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Pay_ID`, `TR_ID`, `Pay_amount`, `Pay_date`, `Pay_time`, `month`, `year`) VALUES
(7, 135, 400, '2018-02-10', '14:01:00', '', ''),
(8, 135, 200, '2018-02-08', '15:01:00', '', ''),
(9, 136, 600, '2018-02-11', '14:01:00', '', ''),
(10, 172, 200, '2018-02-20', '13:01:00', 'Feb', '2018'),
(11, 200, 7000, '2018-02-14', '14:01:00', 'Feb', '2018'),
(12, 197, 600, '2018-02-15', '14:01:00', 'Feb', '2018'),
(13, 198, 400, '2018-02-15', '13:00:00', 'Feb', '2018'),
(14, 198, 200, '2018-02-16', '14:00:00', 'Feb', '2018'),
(15, 201, 400, '0000-00-00', '00:00:00', 'Feb', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `penalties`
--

CREATE TABLE `penalties` (
  `P_ID` int(8) NOT NULL,
  `P_Type` text NOT NULL,
  `P_Fee` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penalties`
--

INSERT INTO `penalties` (`P_ID`, `P_Type`, `P_Fee`) VALUES
(1, 'Lost Towel(s)', 50),
(2, 'Lost Locker Key', 200),
(3, 'Walk-in', 400);

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
  `SC_Capacity` int(2) NOT NULL,
  `SC_Venue` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studioclass`
--

INSERT INTO `studioclass` (`SC_Code`, `SC_Name`, `SC_Capacity`, `SC_Venue`) VALUES
(6, 'Spinning', 39, 'room2'),
(7, 'HIIT', 5, ''),
(8, 'Yoga', 10, ''),
(9, 'F360', 10, ''),
(10, 'TRX', 10, ''),
(11, 'Dance Aero', 10, ''),
(12, 'Pound Fit', 15, ''),
(13, 'Pilates', 12, ''),
(14, 'Swimming', 5, ''),
(15, 'Zumba', 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `studioclasssession`
--

CREATE TABLE `studioclasssession` (
  `SCS_Code` int(8) NOT NULL,
  `SC_Code` int(8) NOT NULL,
  `COACH_ID` int(8) NOT NULL,
  `SCS_StartTime` time(6) NOT NULL,
  `SCS_EndTime` time(6) NOT NULL,
  `SCS_Date` date NOT NULL,
  `SCS_Venue` text NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL,
  `SCS_Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studioclasssession`
--

INSERT INTO `studioclasssession` (`SCS_Code`, `SC_Code`, `COACH_ID`, `SCS_StartTime`, `SCS_EndTime`, `SCS_Date`, `SCS_Venue`, `month`, `year`, `SCS_Status`) VALUES
(50, 6, 23, '14:02:00.000000', '17:02:00.000000', '2018-02-14', '', '', '', ''),
(51, 7, 23, '14:00:00.000000', '15:03:00.000000', '2018-02-07', '', 'Feb', '2018', '');

-- --------------------------------------------------------

--
-- Table structure for table `towelinventory`
--

CREATE TABLE `towelinventory` (
  `TI_Code` int(8) NOT NULL,
  `TI_Date` date NOT NULL,
  `TI_Time` time NOT NULL,
  `TI_Supplied` int(4) DEFAULT NULL,
  `TI_Laundry` int(4) DEFAULT NULL,
  `TI_Available` int(4) NOT NULL,
  `TI_Borrowed` int(4) DEFAULT NULL,
  `TI_Returned` int(4) DEFAULT NULL,
  `TI_Type` text,
  `month` varchar(3) NOT NULL,
  `year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `towelinventory`
--

INSERT INTO `towelinventory` (`TI_Code`, `TI_Date`, `TI_Time`, `TI_Supplied`, `TI_Laundry`, `TI_Available`, `TI_Borrowed`, `TI_Returned`, `TI_Type`, `month`, `year`) VALUES
(130, '2018-02-11', '08:24:00', 1000, NULL, 955, 11, 34, 'Supply', 'Feb', '2018');

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
  `month` varchar(11) NOT NULL,
  `year` char(4) NOT NULL,
  `TL_HealthConditions` text NOT NULL,
  `TL_ClientPerformance` text NOT NULL,
  `TL_TrainingStatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traininglog`
--

INSERT INTO `traininglog` (`TL_Code`, `COACH_ID`, `CLIENT_ID`, `TP_Code`, `TL_Expiry`, `TL_RegDate`, `month`, `year`, `TL_HealthConditions`, `TL_ClientPerformance`, `TL_TrainingStatus`) VALUES
(88, 23, 69, 10, '2018-02-18', '2018-02-11', 'Feb', '2018', '', '', 'On-Going'),
(89, 23, 72, 10, '2018-02-18', '2018-02-11', 'Feb', '2018', '', '', 'On-Going'),
(90, 23, 16, 10, '2018-02-19', '2018-02-12', 'Feb', '2018', 'Osteoporosis,Seizure,Anemia,', 'Beginner', 'On-Going'),
(91, 23, 1, 10, '2018-02-19', '2018-02-12', 'Feb', '2018', '', '', 'On-Going'),
(92, 23, 19, 10, '2018-02-20', '2018-02-13', 'Feb', '2018', '', '', 'On-Going'),
(93, 23, 8, 10, '2018-02-20', '2018-02-13', 'Feb', '2018', '', '', 'Completed'),
(94, 23, 20, 10, '2018-02-20', '2018-02-13', 'Feb', '2018', '', '', 'Completed');

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
  `TLS_Reps` int(2) NOT NULL,
  `month` text NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traininglogsession`
--

INSERT INTO `traininglogsession` (`TLS_Code`, `TL_Code`, `TLS_Date`, `TLS_StartTime`, `TLS_EndTime`, `TLS_Exercise`, `TLS_Sets`, `TLS_Reps`, `month`, `year`) VALUES
(118, 88, '2018-02-13', '13:01:00.0000', '14:02:00.0000', 'asd', 2, 1, 'Feb', 2018),
(119, 89, '2018-02-08', '13:01:00.0000', '13:00:00.0000', 'asd', 1, 11, 'Feb', 2018),
(120, 0, '2018-02-08', '14:01:00.0000', '14:02:00.0000', 'asd', 2, 1, 'Feb', 2018),
(121, 91, '2018-02-15', '13:02:00.0000', '14:01:00.0000', 'asd', 2, 1, 'Feb', 2018),
(122, 92, '2018-02-15', '14:00:00.0000', '14:01:00.0000', 'asd', 1, 2, 'Feb', 2018),
(123, 93, '2018-02-09', '15:02:00.0000', '15:03:00.0000', 'asd', 3, 2, 'Feb', 2018),
(124, 94, '2018-02-15', '13:02:00.0000', '13:02:00.0000', 'ads', 2, 1, 'Feb', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `trainingpackage`
--

CREATE TABLE `trainingpackage` (
  `TP_Code` int(8) NOT NULL,
  `TP_PackageType` int(2) NOT NULL,
  `TP_CoachType` text NOT NULL,
  `TP_Price` int(6) NOT NULL,
  `TP_Validity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainingpackage`
--

INSERT INTO `trainingpackage` (`TP_Code`, `TP_PackageType`, `TP_CoachType`, `TP_Price`, `TP_Validity`) VALUES
(10, 1, 'Senior', 600, 7),
(11, 1, 'Junior', 500, 7),
(12, 8, 'Senior', 4800, 56),
(13, 8, 'Junior', 4000, 56),
(14, 12, 'Senior', 6600, 84),
(15, 12, 'Junior', 5400, 84),
(16, 24, 'Senior', 12000, 168),
(17, 24, 'Junior', 9600, 168),
(18, 30, 'Senior', 5555555, 250);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `TR_ID` int(8) NOT NULL,
  `CLIENT_ID` int(8) NOT NULL,
  `TR_Type` text NOT NULL,
  `TR_Bill` int(6) NOT NULL,
  `TR_TransactionDate` date NOT NULL,
  `TR_status` text NOT NULL,
  `year` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`TR_ID`, `CLIENT_ID`, `TR_Type`, `TR_Bill`, `TR_TransactionDate`, `TR_status`, `year`, `month`) VALUES
(194, 78, 'Walk-in', 400, '2018-02-11', 'unpaid', '2018', 'Feb'),
(195, 80, 'Walk-in', 400, '2018-02-11', 'unpaid', '2018', 'Feb'),
(196, 80, 'Membership', 5697, '2018-02-11', 'unpaid', '2018', 'Feb'),
(197, 16, 'Personal Training', 600, '2018-02-12', 'paid', '2018', 'Feb'),
(198, 1, 'Personal Training', 600, '2018-02-12', 'paid', '2018', 'Feb'),
(199, 25, 'Membership', 10794, '2018-02-12', 'unpaid', '2018', 'Feb'),
(200, 3, 'Membership', 10794, '2018-02-12', 'unpaid', '2018', 'Feb'),
(201, 19, 'Personal Training', 600, '2018-02-13', 'unpaid', '2018', 'Feb'),
(202, 8, 'Personal Training', 600, '2018-02-13', 'unpaid', '2018', 'Feb'),
(203, 20, 'Personal Training', 600, '2018-02-13', 'unpaid', '2018', 'Feb'),
(204, 26, 'Membership', 10794, '2018-02-14', 'unpaid', '2018', 'Feb');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` enum('admin','receptionist','coach','') NOT NULL,
  `stat` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `userType`, `stat`) VALUES
(65, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1),
(99, 'Brix', '81dc9bdb52d04dc20036dbd8313ed055', 'coach', 0),
(103, 'receptionist', '81dc9bdb52d04dc20036dbd8313ed055', 'receptionist', 0),
(104, 'vincent', '81dc9bdb52d04dc20036dbd8313ed055', 'coach', 1);

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
-- Indexes for table `backuphistory`
--
ALTER TABLE `backuphistory`
  ADD PRIMARY KEY (`backup_id`);

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
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`E_Code`);

--
-- Indexes for table `equipmentinventory`
--
ALTER TABLE `equipmentinventory`
  ADD PRIMARY KEY (`EI_Code`);

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
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Pay_ID`);

--
-- Indexes for table `penalties`
--
ALTER TABLE `penalties`
  ADD PRIMARY KEY (`P_ID`);

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
-- Indexes for table `towelinventory`
--
ALTER TABLE `towelinventory`
  ADD PRIMARY KEY (`TI_Code`);

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
  ADD PRIMARY KEY (`TR_ID`),
  ADD KEY `TR_ID` (`TR_ID`);

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
  MODIFY `AL_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `A_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=506;
--
-- AUTO_INCREMENT for table `backuphistory`
--
ALTER TABLE `backuphistory`
  MODIFY `backup_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `CLIENT_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `clientassignment`
--
ALTER TABLE `clientassignment`
  MODIFY `CA_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `COACH_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `E_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `equipmentinventory`
--
ALTER TABLE `equipmentinventory`
  MODIFY `EI_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `measurements`
--
ALTER TABLE `measurements`
  MODIFY `M_Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `MS_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `membershiptype`
--
ALTER TABLE `membershiptype`
  MODIFY `M_Code` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Pay_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `Rec_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `studioclass`
--
ALTER TABLE `studioclass`
  MODIFY `SC_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `studioclasssession`
--
ALTER TABLE `studioclasssession`
  MODIFY `SCS_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `towelinventory`
--
ALTER TABLE `towelinventory`
  MODIFY `TI_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `traininglog`
--
ALTER TABLE `traininglog`
  MODIFY `TL_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `traininglogsession`
--
ALTER TABLE `traininglogsession`
  MODIFY `TLS_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `trainingpackage`
--
ALTER TABLE `trainingpackage`
  MODIFY `TP_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `TR_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
