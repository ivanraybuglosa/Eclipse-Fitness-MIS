-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2018 at 10:06 PM
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
(1, 37, 50, 'Personal Training Session', '2012-08-04', '13:30:50', '14:30:50'),
(2, 13, 48, 'Personal Training Session', '2014-01-03', '09:30:50', '10:30:50'),
(3, 21, 44, 'Personal Training Session', '2014-06-06', '10:30:50', '11:30:50'),
(4, 16, 48, 'Personal Training Session', '2015-05-10', '11:30:50', '12:30:50'),
(5, 33, 39, 'Personal Training Session', '2013-05-29', '12:30:50', '13:30:50'),
(6, 42, 42, 'Personal Training Session', '2013-09-29', '13:30:50', '14:30:50'),
(7, 6, 41, 'Personal Training Session', '2013-06-07', '14:30:50', '15:30:50'),
(8, 44, 49, 'Personal Training Session', '2006-02-03', '15:30:50', '16:30:50'),
(9, 48, 50, 'Personal Training Session', '2008-12-09', '16:30:50', '17:30:50'),
(10, 22, 45, 'Personal Training Session', '2012-10-31', '17:30:50', '18:30:50'),
(11, 2, 38, 'Personal Training Session', '2006-07-23', '18:30:50', '19:30:50'),
(12, 13, 43, 'Personal Training Session', '2015-07-23', '19:30:50', '20:30:50'),
(13, 1, 39, 'Personal Training Session', '2014-02-13', '20:30:50', '21:30:50'),
(14, 49, 39, 'Personal Training Session', '2007-03-06', '21:30:50', '22:30:50'),
(15, 5, 46, 'Personal Training Session', '2017-11-10', '22:30:50', '13:30:50'),
(16, 17, 47, 'Personal Training Session', '2016-12-03', '13:30:50', '14:30:50'),
(17, 23, 38, 'Personal Training Session', '2017-06-08', '09:30:50', '10:30:50'),
(18, 10, 45, 'Personal Training Session', '2012-08-02', '10:30:50', '11:30:50'),
(19, 27, 39, 'Personal Training Session', '2016-07-01', '11:30:50', '12:30:50'),
(20, 45, 39, 'Personal Training Session', '2011-07-23', '12:30:50', '13:30:50'),
(21, 12, 45, 'Personal Training Session', '2008-10-05', '13:30:50', '14:30:50'),
(22, 37, 46, 'Personal Training Session', '2010-11-21', '14:30:50', '15:30:50'),
(23, 45, 46, 'Personal Training Session', '2007-07-05', '15:30:50', '16:30:50'),
(24, 40, 42, 'Personal Training Session', '2008-04-29', '16:30:50', '17:30:50'),
(25, 24, 46, 'Studio Class Session', '2017-02-22', '17:30:50', '18:30:50'),
(26, 37, 48, 'Studio Class Session', '2012-05-12', '18:30:50', '19:30:50'),
(27, 0, 39, 'Studio Class Session', '2013-08-29', '19:30:50', '20:30:50'),
(28, 47, 50, 'Studio Class Session', '2011-01-10', '20:30:50', '21:30:50'),
(29, 25, 39, 'Studio Class Session', '2013-12-22', '21:30:50', '22:30:50'),
(30, 50, 42, 'Studio Class Session', '2009-06-28', '22:30:50', '13:30:50'),
(31, 0, 40, 'Studio Class Session', '2008-01-28', '13:30:50', '14:30:50'),
(32, 8, 48, 'Studio Class Session', '2017-06-04', '09:30:50', '10:30:50'),
(33, 15, 48, 'Studio Class Session', '2006-12-12', '10:30:50', '11:30:50'),
(34, 41, 41, 'Studio Class Session', '2006-02-13', '11:30:50', '12:30:50'),
(35, 0, 41, 'Studio Class Session', '2006-03-05', '12:30:50', '13:30:50'),
(36, 44, 40, 'Studio Class Session', '2016-02-27', '13:30:50', '14:30:50'),
(37, 43, 48, 'Studio Class Session', '2010-10-18', '14:30:50', '15:30:50'),
(38, 9, 48, 'Studio Class Session', '2007-08-06', '15:30:50', '16:30:50'),
(39, 11, 44, 'Studio Class Session', '2008-09-23', '16:30:50', '17:30:50'),
(40, 1, 39, 'Studio Class Session', '2007-11-25', '17:30:50', '18:30:50'),
(41, 0, 49, 'Studio Class Session', '2009-01-14', '18:30:50', '19:30:50'),
(42, 26, 40, 'Studio Class Session', '2014-09-24', '19:30:50', '20:30:50'),
(43, 14, 44, 'Studio Class Session', '2009-05-26', '20:30:50', '21:30:50'),
(44, 50, 38, 'Studio Class Session', '2008-07-25', '21:30:50', '22:30:50'),
(45, 0, 45, 'Studio Class Session', '2014-11-04', '22:30:50', '13:30:50'),
(46, 44, 45, 'Studio Class Session', '2014-01-28', '13:30:50', '14:30:50'),
(47, 19, 50, 'Studio Class Session', '2006-06-08', '09:30:50', '10:30:50'),
(48, 43, 41, 'Studio Class Session', '2012-05-11', '10:30:50', '11:30:50'),
(49, 37, 44, 'Studio Class Session', '2016-12-04', '11:30:50', '12:30:50'),
(50, 36, 46, 'Studio Class Session', '2015-06-11', '12:30:50', '13:30:50'),
(51, 4, 46, 'Personal Training Session', '2015-09-21', '13:30:50', '14:30:50'),
(52, 26, 43, 'Personal Training Session', '2015-07-28', '14:30:50', '15:30:50'),
(53, 0, 42, 'Studio Class Session', '2012-03-28', '15:30:50', '16:30:50'),
(54, 35, 50, 'Personal Training Session', '2011-08-17', '16:30:50', '17:30:50'),
(55, 38, 48, 'Personal Training Session', '2016-11-18', '17:30:50', '18:30:50'),
(56, 44, 48, 'Personal Training Session', '2010-02-25', '18:30:50', '19:30:50'),
(57, 1, 47, 'Personal Training Session', '2009-04-30', '19:30:50', '20:30:50'),
(58, 50, 42, 'Personal Training Session', '2008-09-15', '20:30:50', '21:30:50'),
(59, 19, 48, 'Personal Training Session', '2013-03-10', '21:30:50', '22:30:50'),
(60, 9, 47, 'Personal Training Session', '2017-04-09', '22:30:50', '13:30:50'),
(61, 37, 39, 'Studio Class Session', '2006-04-01', '13:30:50', '14:30:50'),
(62, 4, 39, 'Studio Class Session', '2009-10-03', '09:30:50', '10:30:50'),
(63, 34, 39, 'Studio Class Session', '2008-06-14', '10:30:50', '11:30:50'),
(64, 4, 49, 'Personal Training Session', '2008-10-30', '11:30:50', '12:30:50'),
(65, 21, 46, 'Personal Training Session', '2018-02-14', '12:30:50', '13:30:50'),
(66, 0, 48, 'Studio Class Session', '2010-04-15', '13:30:50', '14:30:50'),
(67, 23, 50, 'Studio Class Session', '2017-11-20', '14:30:50', '15:30:50'),
(68, 13, 38, 'Studio Class Session', '2009-07-30', '15:30:50', '16:30:50'),
(69, 26, 39, 'Studio Class Session', '2013-07-03', '16:30:50', '17:30:50'),
(70, 26, 45, 'Studio Class Session', '2017-04-28', '17:30:50', '18:30:50'),
(71, 49, 45, 'Studio Class Session', '2009-05-28', '18:30:50', '19:30:50'),
(72, 22, 39, 'Studio Class Session', '2010-04-04', '19:30:50', '20:30:50'),
(73, 3, 44, 'Studio Class Session', '2011-04-15', '20:30:50', '21:30:50'),
(74, 46, 46, 'Studio Class Session', '2012-08-17', '21:30:50', '22:30:50'),
(75, 20, 40, 'Personal Training Session', '2010-05-13', '22:30:50', '13:30:50'),
(76, 40, 48, 'Personal Training Session', '2008-09-25', '13:30:50', '14:30:50'),
(77, 37, 41, 'Personal Training Session', '2008-04-10', '09:30:50', '10:30:50'),
(78, 49, 41, 'Personal Training Session', '2006-11-23', '10:30:50', '11:30:50'),
(79, 27, 45, 'Personal Training Session', '2007-03-23', '11:30:50', '12:30:50'),
(80, 25, 38, 'Personal Training Session', '2007-06-20', '12:30:50', '13:30:50'),
(81, 41, 46, 'Personal Training Session', '2007-02-17', '13:30:50', '14:30:50'),
(82, 12, 38, 'Personal Training Session', '2005-12-24', '14:30:50', '15:30:50'),
(83, 26, 39, 'Personal Training Session', '2005-06-09', '15:30:50', '16:30:50'),
(84, 43, 44, 'Personal Training Session', '2015-01-27', '16:30:50', '17:30:50'),
(85, 47, 38, 'Personal Training Session', '2005-05-17', '17:30:50', '18:30:50'),
(86, 21, 47, 'Personal Training Session', '2007-04-23', '18:30:50', '19:30:50'),
(87, 28, 40, 'Personal Training Session', '2005-08-26', '19:30:50', '20:30:50'),
(88, 4, 42, 'Studio Class Session', '2008-03-26', '20:30:50', '21:30:50'),
(89, 18, 40, 'Studio Class Session', '2007-09-02', '21:30:50', '22:30:50'),
(90, 17, 42, 'Studio Class Session', '2012-08-22', '22:30:50', '13:30:50'),
(91, 45, 43, 'Studio Class Session', '2011-08-02', '13:30:50', '14:30:50'),
(92, 21, 46, 'Studio Class Session', '2007-07-25', '09:30:50', '10:30:50'),
(93, 49, 48, 'Studio Class Session', '2005-06-27', '10:30:50', '11:30:50'),
(94, 17, 38, 'Studio Class Session', '2010-06-05', '11:30:50', '12:30:50'),
(95, 14, 39, 'Studio Class Session', '2013-03-17', '12:30:50', '13:30:50'),
(96, 2, 39, 'Personal Training Session', '2017-01-12', '13:30:50', '14:30:50'),
(97, 11, 46, 'Personal Training Session', '2006-04-07', '14:30:50', '15:30:50'),
(98, 48, 45, 'Personal Training Session', '2011-07-12', '15:30:50', '16:30:50'),
(99, 1, 45, 'Studio Class Session', '2005-08-23', '16:30:50', '17:30:50'),
(100, 10, 47, 'Studio Class Session', '2006-10-20', '17:30:50', '18:30:50'),
(187, 83, 38, 'Personal Training Session', '2018-02-16', '14:01:00', '15:02:00'),
(188, NULL, 39, 'Studio Class Session', '2018-02-16', '14:01:00', '14:02:00'),
(189, 83, 39, 'Studio Class Session', '2018-02-16', '14:01:00', '14:05:00'),
(190, 1, 39, 'Studio Class Session', '2018-02-16', '14:01:00', '14:05:00'),
(191, 2, 39, 'Studio Class Session', '2018-02-16', '14:01:00', '14:05:00'),
(192, 9, 39, 'Studio Class Session', '2018-02-16', '14:01:00', '14:05:00'),
(193, 2, 39, 'Studio Class Session', '2018-02-16', '14:01:00', '14:05:00'),
(194, 1, 39, 'Studio Class Session', '2018-02-16', '14:01:00', '14:05:00'),
(195, NULL, 38, 'Studio Class Session', '2018-02-09', '15:02:00', '16:00:00');

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
(503, 1, '08:00:00', '9:00:00AM', 1, 1, 1, 'Returned', '2017', 'Jan', '2017-01-01', 'Walk-in'),
(504, 2, '09:00:00', '10:00:00AM', 1, 1, 2, 'Returned', '2017', 'Feb', '2017-02-02', 'Walk-in'),
(505, 3, '10:00:00', '11:00:00AM', 2, 2, 3, 'Returned', '2017', 'Mar', '2017-03-03', 'Walk-in'),
(506, 4, '11:00:00', '12:00:00PM', 3, 3, 4, 'Returned', '2017', 'Apr', '2017-04-04', 'Walk-in'),
(507, 5, '12:00:00', '1:00:00PM', 2, 2, 5, 'Returned', '2017', 'May', '2017-05-05', 'Walk-in'),
(508, 6, '01:00:00', '2:00:00PM', 1, 1, 6, 'Returned', '2017', 'Jun', '2017-06-06', 'Walk-in'),
(509, 7, '02:00:00', '3:00:00PM', 2, 2, 7, 'Returned', '2017', 'Jul', '2017-07-07', 'Walk-in'),
(510, 8, '03:00:00', '4:00:00PM', 3, 3, 8, 'Returned', '2017', 'Aug', '2017-08-08', 'Walk-in'),
(511, 9, '04:00:00', '5:00:00PM', 2, 2, 9, 'Returned', '2017', 'Sep', '2017-09-09', 'Walk-in'),
(512, 10, '05:00:00', '6:00:00PM', 1, 1, 10, 'Returned', '2017', 'Oct', '2017-10-10', 'Walk-in'),
(513, 11, '06:00:00', '7:00:00PM', 2, 2, 11, 'Returned', '2017', 'Nov', '2017-11-11', 'Walk-in'),
(514, 12, '07:00:00', '8:00:00PM', 3, 3, 12, 'Returned', '2017', 'Dec', '2017-12-12', 'Walk-in'),
(515, 13, '08:00:00', '9:00:00PM', 2, 2, 13, 'Returned', '2017', 'Jan', '2017-01-13', 'Walk-in'),
(516, 14, '09:00:00', '10:00:00PM', 1, 1, 14, 'Returned', '2017', 'Feb', '2017-02-14', 'Walk-in'),
(517, 15, '10:00:00', '11:00:00PM', 1, 1, 15, 'Returned', '2017', 'Mar', '2017-03-15', 'Walk-in'),
(518, 16, '11:00:00', '9:00:00AM', 2, 2, 16, 'Returned', '2017', 'Apr', '2017-04-16', 'Walk-in'),
(519, 17, '08:00:00', '10:00:00AM', 3, 3, 17, 'Returned', '2017', 'May', '2017-05-17', 'Walk-in'),
(520, 18, '09:00:00', '11:00:00AM', 2, 2, 18, 'Returned', '2017', 'Jun', '2017-06-18', 'Walk-in'),
(521, 19, '10:00:00', '12:00:00PM', 1, 1, 19, 'Returned', '2017', 'Jul', '2017-07-19', 'Walk-in'),
(522, 20, '11:00:00', '1:00:00PM', 2, 2, 20, 'Returned', '2017', 'Aug', '2017-08-20', 'Walk-in'),
(523, 21, '12:00:00', '2:00:00PM', 3, 3, 21, 'Returned', '2017', 'Sep', '2017-09-21', 'Walk-in'),
(524, 22, '01:00:00', '3:00:00PM', 2, 2, 22, 'Returned', '2017', 'Oct', '2017-10-22', 'Walk-in'),
(525, 23, '02:00:00', '4:00:00PM', 1, 1, 23, 'Returned', '2017', 'Nov', '2017-11-23', 'Walk-in'),
(526, 24, '03:00:00', '5:00:00PM', 2, 2, 24, 'Returned', '2017', 'Dec', '2017-12-24', 'Walk-in'),
(527, 25, '04:00:00', '6:00:00PM', 3, 3, 25, 'Returned', '2017', 'Jan', '2017-01-25', 'Walk-in'),
(528, 26, '05:00:00', '7:00:00PM', 2, 2, 26, 'Returned', '2017', 'Feb', '2017-02-26', 'Walk-in'),
(529, 27, '06:00:00', '8:00:00PM', 1, 1, 27, 'Returned', '2017', 'Mar', '2017-03-27', 'Walk-in'),
(530, 28, '07:00:00', '9:00:00PM', 1, 1, 28, 'Returned', '2017', 'Apr', '2017-04-28', 'Walk-in'),
(531, 29, '08:00:00', '10:00:00PM', 2, 2, 29, 'Returned', '2017', 'May', '2017-05-29', 'Walk-in'),
(532, 30, '09:00:00', '11:00:00PM', 3, 3, 30, 'Returned', '2017', 'May', '2017-05-30', 'Walk-in'),
(533, 31, '10:00:00', '9:00:00AM', 2, 2, 31, 'Returned', '2017', 'May', '2017-05-31', 'Walk-in'),
(534, 32, '11:00:00', '10:00:00AM', 1, 1, 32, 'Returned', '2017', 'Aug', '2017-06-01', 'Walk-in'),
(535, 33, '08:00:00', '11:00:00AM', 2, 2, 33, 'Returned', '2017', 'Aug', '2017-06-02', 'Walk-in'),
(536, 34, '09:00:00', '12:00:00PM', 3, 3, 34, 'Returned', '2017', 'Aug', '2017-06-03', 'Walk-in'),
(537, 35, '10:00:00', '1:00:00PM', 2, 2, 35, 'Returned', '2017', 'Aug', '2017-06-04', 'Walk-in'),
(538, 36, '11:00:00', '2:00:00PM', 1, 1, 36, 'Returned', '2017', 'Dec', '2017-12-04', 'Walk-in'),
(539, 37, '12:00:00', '3:00:00PM', 2, 2, 37, 'Returned', '2017', 'Dec', '2017-12-05', 'Walk-in'),
(540, 38, '01:00:00', '4:00:00PM', 3, 3, 38, 'Returned', '2017', 'Dec', '2017-12-06', 'Walk-in'),
(541, 39, '02:00:00', '5:00:00PM', 2, 2, 39, 'Returned', '2017', 'Dec', '2017-12-07', 'Walk-in'),
(542, 40, '03:00:00', '6:00:00PM', 1, 1, 40, 'Returned', '2017', 'Dec', '2017-12-08', 'Walk-in'),
(543, 41, '04:00:00', '7:00:00PM', 1, 1, 41, 'Returned', '2017', 'Dec', '2017-12-09', 'Walk-in'),
(544, 42, '05:00:00', '8:00:00PM', 2, 2, 42, 'Returned', '2017', 'Dec', '2017-12-10', 'Walk-in'),
(545, 43, '06:00:00', '9:00:00PM', 3, 3, 43, 'Returned', '2017', 'Jul', '2017-07-10', 'Walk-in'),
(546, 44, '07:00:00', '10:00:00PM', 2, 2, 44, 'Returned', '2017', 'Jul', '2017-07-11', 'Walk-in'),
(547, 45, '08:00:00', '11:00:00PM', 1, 1, 45, 'Returned', '2017', 'Jul', '2017-07-12', 'Walk-in'),
(548, 46, '09:00:00', '9:00:00AM', 2, 2, 46, 'Returned', '2017', 'Jul', '2017-07-13', 'Walk-in'),
(549, 47, '10:00:00', '10:00:00AM', 3, 3, 47, 'Returned', '2017', 'Jul', '2017-07-14', 'Walk-in'),
(550, 48, '11:00:00', '11:00:00AM', 2, 2, 48, 'Returned', '2017', 'Jul', '2017-07-15', 'Walk-in'),
(551, 49, '08:00:00', '12:00:00PM', 1, 1, 49, 'Returned', '2017', 'Jul', '2017-07-16', 'Walk-in'),
(552, 50, '09:00:00', '1:00:00PM', 2, 2, 50, 'Returned', '2017', 'Jul', '2017-07-17', 'Walk-in'),
(553, 1, '10:00:00', '2:00:00PM', 3, 3, 51, 'Returned', '2017', 'Jul', '2017-07-18', 'Member'),
(554, 2, '11:00:00', '3:00:00PM', 2, 2, 52, 'Returned', '2017', 'Jul', '2017-07-19', 'Member'),
(555, 3, '12:00:00', '4:00:00PM', 1, 1, 53, 'Returned', '2017', 'Jul', '2017-07-20', 'Member'),
(556, 4, '01:00:00', '5:00:00PM', 1, 1, 54, 'Returned', '2017', 'Jun', '2017-06-20', 'Member'),
(557, 5, '02:00:00', '6:00:00PM', 2, 2, 55, 'Returned', '2017', 'Jun', '2017-06-21', 'Member'),
(558, 6, '03:00:00', '7:00:00PM', 3, 3, 56, 'Returned', '2017', 'Jun', '2017-06-22', 'Member'),
(559, 7, '04:00:00', '8:00:00PM', 2, 2, 57, 'Returned', '2017', 'Jun', '2017-06-23', 'Member'),
(560, 8, '05:00:00', '9:00:00PM', 1, 1, 58, 'Returned', '2017', 'Jun', '2017-06-24', 'Member'),
(561, 9, '06:00:00', '10:00:00PM', 2, 2, 59, 'Returned', '2017', 'Jun', '2017-06-25', 'Member'),
(562, 10, '07:00:00', '11:00:00PM', 3, 3, 60, 'Returned', '2017', 'Jun', '2017-06-26', 'Member'),
(563, 11, '08:00:00', '9:00:00AM', 2, 2, 61, 'Returned', '2017', 'Jan', '2017-01-27', 'Member'),
(564, 12, '09:00:00', '10:00:00AM', 1, 1, 62, 'Returned', '2017', 'Jan', '2017-01-28', 'Member'),
(565, 13, '10:00:00', '11:00:00AM', 2, 2, 63, 'Returned', '2017', 'Jan', '2017-01-29', 'Member'),
(566, 14, '11:00:00', '12:00:00PM', 3, 3, 64, 'Returned', '2017', 'Jan', '2017-01-30', 'Member'),
(567, 15, '08:00:00', '1:00:00PM', 2, 2, 100, 'Returned', '2017', 'Jan', '2017-01-31', 'Member'),
(568, 16, '09:00:00', '2:00:00PM', 1, 1, 101, 'Returned', '2017', 'Feb', '2017-02-01', 'Member'),
(569, 17, '10:00:00', '3:00:00PM', 1, 1, 102, 'Returned', '2017', 'Feb', '2017-02-02', 'Member'),
(570, 18, '11:00:00', '4:00:00PM', 2, 2, 103, 'Returned', '2017', 'Feb', '2017-02-03', 'Member'),
(571, 19, '12:00:00', '5:00:00PM', 3, 3, 104, 'Returned', '2017', 'Feb', '2017-02-04', 'Member'),
(572, 20, '01:00:00', '6:00:00PM', 2, 2, 105, 'Returned', '2017', 'Feb', '2017-02-05', 'Member'),
(573, 21, '02:00:00', '7:00:00PM', 1, 1, 106, 'Returned', '2017', 'Feb', '2017-02-06', 'Member'),
(574, 22, '03:00:00', '8:00:00PM', 2, 2, 107, 'Returned', '2017', 'Feb', '2017-02-07', 'Member'),
(575, 23, '04:00:00', '9:00:00PM', 3, 3, 108, 'Returned', '2017', 'Feb', '2017-02-08', 'Member'),
(576, 24, '05:00:00', '10:00:00PM', 2, 2, 109, 'Returned', '2017', 'Feb', '2017-02-09', 'Member'),
(577, 25, '06:00:00', '11:00:00PM', 1, 1, 110, 'Returned', '2017', 'Mar', '2017-03-10', 'Member'),
(578, 26, '07:00:00', '9:00:00AM', 2, 2, 111, 'Returned', '2017', 'Mar', '2017-03-11', 'Member'),
(579, 27, '08:00:00', '10:00:00AM', 3, 3, 112, 'Returned', '2017', 'Mar', '2017-03-12', 'Member'),
(580, 28, '09:00:00', '11:00:00AM', 2, 2, 113, 'Returned', '2017', 'Mar', '2017-03-13', 'Member'),
(581, 29, '10:00:00', '12:00:00PM', 1, 1, 114, 'Returned', '2017', 'Mar', '2017-03-14', 'Member'),
(582, 30, '11:00:00', '1:00:00PM', 1, 1, 115, 'Returned', '2017', 'Mar', '2017-03-15', 'Member'),
(583, 31, '08:00:00', '2:00:00PM', 2, 2, 116, 'Returned', '2017', 'Mar', '2017-03-16', 'Member'),
(584, 32, '09:00:00', '3:00:00PM', 3, 3, 117, 'Returned', '2017', 'Mar', '2017-03-17', 'Member'),
(585, 33, '10:00:00', '4:00:00PM', 2, 2, 118, 'Returned', '2017', 'Mar', '2017-03-18', 'Member'),
(586, 34, '11:00:00', '5:00:00PM', 1, 1, 119, 'Returned', '2017', 'Mar', '2017-03-19', 'Member'),
(587, 35, '12:00:00', '6:00:00PM', 2, 2, 120, 'Returned', '2017', 'Apr', '2017-04-19', 'Member'),
(588, 36, '01:00:00', '7:00:00PM', 3, 3, 121, 'Returned', '2017', 'Apr', '2017-04-20', 'Member'),
(589, 37, '02:00:00', '8:00:00PM', 2, 2, 122, 'Returned', '2017', 'Apr', '2017-04-21', 'Member'),
(590, 38, '03:00:00', '9:00:00PM', 1, 1, 123, 'Returned', '2017', 'Apr', '2017-04-22', 'Member'),
(591, 39, '04:00:00', '10:00:00PM', 2, 2, 124, 'Returned', '2017', 'May', '2017-05-23', 'Member'),
(592, 40, '05:00:00', '11:00:00PM', 3, 3, 125, 'Returned', '2017', 'May', '2017-05-24', 'Member'),
(593, 41, '06:00:00', '9:00:00AM', 2, 2, 126, 'Returned', '2017', 'May', '2017-05-25', 'Member'),
(594, 42, '07:00:00', '10:00:00AM', 1, 1, 127, 'Returned', '2017', 'May', '2017-05-26', 'Member'),
(595, 43, '08:00:00', '11:00:00AM', 1, 1, 128, 'Returned', '2017', 'May', '2017-05-27', 'Member'),
(596, 44, '09:00:00', '12:00:00PM', 2, 2, 129, 'Returned', '2017', 'May', '2017-05-28', 'Member'),
(597, 45, '10:00:00', '1:00:00PM', 3, 3, 130, 'Returned', '2017', 'May', '2017-05-29', 'Member'),
(598, 46, '11:00:00', '2:00:00PM', 2, 2, 131, 'Returned', '2017', 'May', '2017-05-30', 'Member'),
(599, 47, '08:00:00', '3:00:00PM', 1, 1, 132, 'Returned', '2017', 'Jun', '2017-05-31', 'Member'),
(600, 48, '09:00:00', '4:00:00PM', 2, 2, 133, 'Returned', '2017', 'Jun', '2017-06-01', 'Member'),
(601, 49, '10:00:00', '5:00:00PM', 3, 3, 134, 'Returned', '2017', 'Jun', '2017-06-02', 'Member'),
(602, 50, '11:00:00', '6:00:00PM', 2, 2, 135, 'Returned', '2017', 'Jun', '2017-06-03', 'Member'),
(630, 1, '03:05:22', '03:06:12', 4, 3, 1, 'Returned', '2018', 'Feb', '2018-02-14', 'Member');

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
(50, 'Pancho', 'Mitchell', 'Wilkinson', 'Female', 'Pancho Wilkinson@gma', 'Walk-in', '', '09844105713', '', '2001-10-29', '2001', '10', '29', '2005-07-19', 'Jul', '2005'),
(83, 'Ivan', 'Maple', 'Buglosa', 'Male', 'ivanraybuglosa@gmail', 'Member', '', '09123132123', '', '1996-10-23', '1996', '10', '23', '2018-02-14', 'Feb', '2018');

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
  `Coach_ContactNumber` varchar(13) NOT NULL,
  `Coach_EmailAddress` varchar(50) NOT NULL,
  `Coach_Specialty` text NOT NULL,
  `Coach_Type` text NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`COACH_ID`, `Coach_LastName`, `Coach_FirstName`, `Coach_Gender`, `Coach_ContactNumber`, `Coach_EmailAddress`, `Coach_Specialty`, `Coach_Type`, `userID`) VALUES
(38, 'Ang', 'Minmin', 'Female', '09993898752', 'minmin@gmail.com', 'Spinning Coach', 'Senior', 1),
(39, 'Uy', 'Jan Nicole', 'Female', '0999876253', 'jannicole@gmail.com', 'Spinning Coach', 'Senior', 2),
(40, 'Arellano', 'Nelson', 'Male', '09998276312', 'arellano@gmail.com', 'Boxing Coach', 'Senior', 3),
(41, 'Morales', 'Rey', 'Male', '09992763123', 'rey@gmail.com', 'Boxing Coach', 'Junior', 4),
(42, 'Fernandez', 'Samryl', 'Male', '0999281231', 'samryl@gmail.com', 'Fitness Coach', 'Junior', 5),
(43, 'Pilalpi', 'Michelle', 'Female', '0999231231', 'michelle@gmail.com', 'Fitness Coach', 'Senior', 6),
(44, 'Benjamin', 'Angelo', 'Male', '0999872631', 'angelo@gmail.com', 'Fitness Coach', 'Junior', 7),
(45, 'Magbanua', 'Henrel', 'Male', '09992371232', 'Henrel@gmail.com', 'Fitness Coach', 'Senior', 8),
(46, 'Prado', 'Ivan', 'Male', '09928327122', 'ivan@gmail.com', 'Fitness Coach', 'Junior', 9),
(47, 'Divinagracia', 'Jay', 'Male', '0999281723', 'jay@gmail.com', 'Fitness Coach', 'Senior', 10),
(48, 'Larry', 'Bril', 'Male', '09992731232', 'bril@gmail.com', 'Mad Dog Spinning', 'Senior', 11),
(49, 'Menosa', 'Keeward', 'Male', '09993892761', 'keeward@gmail.com', 'Boxing Instructor', 'Senior', 12),
(50, 'Olis', 'Keiven', 'Male', '099276351232', 'keiven@gmail.com', 'Fitness Coach', 'Junior', 13),
(51, 'Legislador', 'Hans', 'Male', '09123131222', 'hans@gmail.com', 'fitness coach', 'Senior', 107);

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
(1, 'SQR001', 'SQUAT RACK'),
(2, 'BB001', 'BARBELLS'),
(3, 'BP001', 'BENCH PRESS'),
(4, 'IBP001', 'INCLINE BENCH P'),
(5, 'HSM001', 'HAMMER STRENGTH'),
(6, 'CP001', 'CABLES AND PULL'),
(7, 'DB001', 'DUMBBELLS'),
(8, 'PB001', 'PULLUP BAR'),
(9, 'LPD001', 'LAT PULLDOWN MA'),
(10, 'LEM001', 'LEG EXTENSION M'),
(11, 'LGM001', 'LEG CURL MACHIN'),
(12, 'SQR002', 'SQUAT RACK'),
(13, 'BB002', 'BARBELLS'),
(14, 'BP002', 'BENCH PRESS'),
(15, 'IBP002', 'INCLINE BENCH P'),
(16, 'HSM002', 'HAMMER STRENGTH'),
(17, 'CP002', 'CABLES AND PULL'),
(18, 'DB002', 'DUMBBELLS'),
(19, 'PB002', 'PULLUP BAR'),
(20, 'LPD002', 'LAT PULLDOWN MA'),
(21, 'LEM002', 'LEG EXTENSION M'),
(22, 'LGM002', 'LEG CURL MACHIN'),
(23, 'HEB001', 'HYPER EXTENSION'),
(24, 'DP001', 'DIPPING BARS'),
(25, 'SM001', 'SMITH MACHINE'),
(26, 'PRB001', 'PREACHER BENCH'),
(27, 'ABB001', 'ABDOMINAL BENCH'),
(28, 'LPM001', 'LEG PRESS MACHI'),
(29, 'HSQM001', 'HACK SQUAT MACH'),
(30, 'CM001', 'CALF MACHINE'),
(31, 'LAM001', 'LEG ADDUCTION M'),
(32, 'KB001', 'KETTLEBELLS'),
(33, 'WB001', 'WALL BALL'),
(34, 'FR001', 'FOAM ROLLER'),
(35, 'SB001', 'STABILITY BALL'),
(36, 'HEB002', 'HYPER EXTENSION'),
(37, 'DP002', 'DIPPING BARS'),
(38, 'SM002', 'SMITH MACHINE'),
(40, 'DUMBBELLS', 'du002');

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
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipmentinventory`
--

INSERT INTO `equipmentinventory` (`EI_Code`, `E_Code`, `EI_Quantity`, `EI_DeliveryDate`, `EI_DeliveryTime`, `EI_Activity`, `month`, `year`) VALUES
(1, 1, 13, '2007-12-14', '08:54:33', 'Restock', 'Dec', '2017'),
(2, 2, 10, '2008-09-30', '06:10:39', 'Restock', 'Sep', '2008'),
(3, 3, 9, '2016-09-29', '08:13:19', 'Restock', 'Sep', '2016'),
(4, 4, 13, '2010-11-09', '08:41:47', 'Restock', 'Nov', '2010'),
(5, 5, 13, '2016-04-27', '08:13:38', 'Restock', 'Apr', '2016'),
(6, 6, 14, '2007-08-28', '08:38:17', 'Restock', 'Aug', '2007'),
(7, 7, 12, '2017-01-10', '08:10:48', 'Restock', 'Jan', '2017'),
(8, 8, 10, '2010-02-11', '08:41:08', 'Restock', 'Feb', '2010'),
(9, 9, 14, '2011-06-28', '06:38:13', 'Restock', 'Jun', '2011'),
(10, 10, 12, '2005-08-19', '07:35:49', 'Restock', 'Aug', '2005'),
(11, 11, 8, '2006-06-22', '07:45:02', 'Restock', 'Jun', '2006'),
(12, 12, 14, '2016-05-10', '06:01:55', 'Restock', 'May', '2016'),
(13, 13, 6, '2007-11-07', '06:30:23', 'Restock', 'Nov', '2007'),
(14, 14, 11, '2008-07-17', '08:15:24', 'Restock', 'Jul', '2008'),
(15, 15, 7, '2017-01-16', '07:37:17', 'Restock', 'Jan', '2017'),
(16, 16, 7, '2014-08-25', '06:31:40', 'Restock', 'Aug', '2014'),
(17, 17, 7, '2009-02-10', '07:03:28', 'Restock', 'Feb', '2009'),
(18, 18, 10, '2011-08-14', '08:42:53', 'Restock', 'Aug', '2011'),
(19, 19, 6, '2008-01-01', '06:05:08', 'Restock', 'Jan', '2008'),
(20, 20, 5, '2013-07-04', '07:22:31', 'Restock', 'Jul', '2013'),
(21, 21, 14, '2016-06-04', '06:49:04', 'Restock', 'Jun', '2016'),
(22, 22, 10, '2008-11-02', '08:26:45', 'Restock', 'Nov', '2008'),
(23, 23, 5, '2018-02-10', '07:55:10', 'Restock', 'Feb', '2018'),
(24, 24, 8, '2005-05-22', '07:57:30', 'Restock', 'May', '2005'),
(25, 25, 15, '2014-07-08', '08:28:42', 'Restock', 'Jul', '2014'),
(26, 26, 12, '2012-06-04', '06:47:43', 'Restock', 'Jun', '2012'),
(27, 27, 8, '2012-07-29', '08:44:44', 'Restock', 'Jul', '2012'),
(28, 28, 9, '2011-07-28', '06:31:50', 'Restock', 'Jul', '2011'),
(29, 29, 15, '2014-10-07', '06:11:10', 'Restock', 'Oct', '2014'),
(30, 30, 6, '2008-04-13', '07:42:29', 'Restock', 'Apr', '2008'),
(31, 31, 14, '2010-03-24', '06:54:13', 'Restock', 'Mar', '2010'),
(32, 32, 10, '2007-11-05', '07:55:13', 'Restock', 'Nov', '2007'),
(33, 33, 8, '2008-08-24', '06:41:42', 'Restock', 'Aug', '2008'),
(34, 34, 7, '2011-03-31', '06:13:28', 'Restock', 'Mar', '2011'),
(35, 35, 5, '2015-03-15', '06:20:17', 'Restock', 'Mar', '2015'),
(36, 36, 8, '2010-02-04', '07:50:49', 'Restock', 'Feb', '2010'),
(37, 37, 14, '2014-05-12', '08:57:23', 'Restock', 'May', '2014'),
(38, 38, 8, '2011-07-29', '06:48:48', 'Restock', 'Jul', '2011'),
(39, 39, 12, '2014-08-01', '07:33:24', 'Restock', 'Aug', '2014'),
(40, 40, 8, '2016-08-05', '07:27:04', 'Restock', 'Aug', '2016'),
(41, 10, 7, '2007-07-26', '08:24:16', 'Restock', 'Jul', '2007'),
(42, 9, 11, '2015-03-04', '06:58:31', 'Restock', 'Mar', '2015'),
(43, 24, 8, '2006-11-22', '07:21:49', 'Restock', 'Nov', '2006'),
(44, 32, 15, '2007-09-02', '06:32:22', 'Restock', 'Sep', '2007'),
(45, 3, 7, '2015-08-29', '06:26:59', 'Restock', 'Aug', '2015'),
(46, 34, 10, '2006-01-31', '06:36:16', 'Restock', 'Jan', '2006'),
(47, 24, 14, '2012-11-12', '07:51:09', 'Restock', 'Nov', '2012'),
(48, 3, 5, '2010-10-01', '06:14:55', 'Restock', 'Oct', '2010'),
(49, 27, 6, '2011-02-18', '07:10:42', 'Restock', 'Feb', '2011'),
(50, 39, 9, '2009-12-11', '06:05:23', 'Restock', 'Dec', '2009');

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
(80, 90, 111, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2018-02-13', 'Final', 'Class III Obesity', 'Feb', 2018),
(81, 88, 120, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-01-01', 'Initial', 'ClassIIIObesity', 'Jan', 2018),
(82, 88, 65, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-01-02', 'Final', 'Overweigh', 'Jan', 2018),
(83, 89, 120, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-01-03', 'Initial', 'ClassIIIObesity', 'Jan', 2018),
(84, 89, 65, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-01-04', 'Final', 'Overweigh', 'Jan', 2018),
(85, 90, 120, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-01-05', 'Initial', 'ClassIIIObesity', 'Jan', 2018),
(86, 90, 65, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-01-06', 'Final', 'Overweigh', 'Jan', 2018),
(87, 91, 60, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-01-07', 'Initial', 'ClassIIIObesity', 'Jan', 2018),
(88, 91, 80, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-01-08', 'Final', 'Overweigh', 'Jan', 2018),
(89, 92, 60, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-01-09', 'Initial', 'ClassIIIObesity', 'Jan', 2018),
(90, 92, 80, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-01-10', 'Final', 'Overweigh', 'Jan', 2018),
(91, 93, 120, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-01-11', 'Initial', 'ClassIIIObesity', 'Jan', 2018),
(92, 93, 65, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-01-12', 'Final', 'Overweigh', 'Jan', 2018),
(93, 94, 60, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-01-13', 'Initial', 'ClassIIIObesity', 'Jan', 2018),
(94, 94, 80, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-01-14', 'Final', 'Overweigh', 'Jan', 2018),
(95, 95, 120, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-01-15', 'Initial', 'ClassIIIObesity', 'Jan', 2018),
(96, 95, 65, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-01-16', 'Final', 'Overweigh', 'Jan', 2018),
(97, 96, 120, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-01-17', 'Initial', 'ClassIIIObesity', 'Jan', 2018),
(98, 96, 100, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-01-18', 'Final', 'Overweigh', 'Jan', 2018),
(99, 97, 60, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-01-19', 'Initial', 'ClassIIIObesity', 'Jan', 2018),
(100, 97, 80, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-01-20', 'Final', 'Overweigh', 'Jan', 2018),
(101, 98, 50, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-01-21', 'Initial', 'ClassIIIObesity', 'Jan', 2018),
(102, 98, 80, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-01-22', 'Final', 'Overweigh', 'Jan', 2018),
(103, 99, 60, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-01-23', 'Initial', 'ClassIIIObesity', 'Jan', 2018),
(104, 99, 80, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-01-24', 'Final', 'Overweigh', 'Jan', 2018),
(105, 100, 120, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-01-25', 'Initial', 'ClassIIIObesity', 'Jan', 2018),
(106, 100, 65, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-01-26', 'Final', 'Overweigh', 'Jan', 2018),
(107, 101, 60, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-01-27', 'Initial', 'ClassIIIObesity', 'Jan', 2018),
(108, 101, 80, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-01-28', 'Final', 'Overweigh', 'Jan', 2018),
(109, 102, 120, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-01-29', 'Initial', 'ClassIIIObesity', 'Jan', 2018),
(110, 102, 65, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-01-30', 'Final', 'Overweigh', 'Jan', 2018),
(111, 103, 111, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-01-31', 'Initial', 'ClassIIIObesity', 'Jan', 2018),
(112, 103, 50, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-02-01', 'Final', 'Overweigh', 'Feb', 2018),
(113, 104, 80, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-02-02', 'Initial', 'ClassIIIObesity', 'Feb', 2018),
(114, 104, 60, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-02-03', 'Final', 'Overweigh', 'Feb', 2018),
(115, 105, 120, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-02-04', 'Initial', 'ClassIIIObesity', 'Feb', 2018),
(116, 105, 50, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-02-05', 'Final', 'Overweigh', 'Feb', 2018),
(117, 106, 120, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-02-06', 'Initial', 'ClassIIIObesity', 'Feb', 2018),
(118, 106, 65, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-02-07', 'Final', 'Overweigh', 'Feb', 2018),
(119, 107, 65, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-02-08', 'Initial', 'ClassIIIObesity', 'Feb', 2018),
(120, 107, 45, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-02-09', 'Final', 'Overweigh', 'Feb', 2018),
(121, 108, 120, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-02-10', 'Initial', 'ClassIIIObesity', 'Feb', 2018),
(122, 108, 65, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-02-11', 'Final', 'Overweigh', 'Feb', 2018),
(123, 109, 65, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-02-12', 'Initial', 'Overweigh', 'Feb', 2018),
(124, 109, 45, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-02-13', 'Final', 'Overweigh', 'Feb', 2018),
(125, 110, 65, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-02-14', 'Initial', 'Overweigh', 'Feb', 2018),
(126, 110, 45, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-02-15', 'Final', 'Overweigh', 'Feb', 2018),
(127, 111, 65, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-02-16', 'Initial', 'ClassIIIObesity', 'Feb', 2018),
(128, 11, 45, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-02-17', 'Final', 'Overweigh', 'Feb', 2018),
(129, 112, 55, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-02-18', 'Initial', 'ClassIIIObesity', 'Feb', 2018),
(130, 112, 45, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-02-19', 'Final', 'Overweigh', 'Feb', 2018),
(131, 113, 55, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-02-20', 'Initial', 'ClassIIIObesity', 'Feb', 2018),
(132, 113, 50, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-02-21', 'Final', 'Overweigh', 'Feb', 2018),
(133, 114, 80, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-02-22', 'Initial', 'ClassIIIObesity', 'Feb', 2018),
(134, 114, 50, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-02-23', 'Final', 'Overweigh', 'Feb', 2018),
(135, 115, 80, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-02-24', 'Initial', 'ClassIIIObesity', 'Feb', 2018),
(136, 115, 45, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-02-25', 'Final', 'Overweigh', 'Feb', 2018),
(137, 116, 55, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-02-26', 'Initial', 'ClassIIIObesity', 'Feb', 2018),
(138, 116, 65, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-02-27', 'Final', 'Overweigh', 'Feb', 2018),
(139, 117, 45, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-02-28', 'Initial', 'ClassIIIObesity', 'Feb', 2018),
(140, 117, 45, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-03-01', 'Final', 'Overweigh', 'Mar', 2018),
(141, 118, 55, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-03-02', 'Initial', 'ClassIIIObesity', 'Mar', 2018),
(142, 118, 65, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-03-03', 'Final', 'Overweigh', 'Mar', 2018),
(143, 120, 45, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-03-04', 'Initial', 'ClassIIIObesity', 'Mar', 2018),
(144, 120, 80, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-03-05', 'Final', 'Overweigh', 'Mar', 2018),
(145, 121, 45, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-03-06', 'Initial', 'Overweigh', 'Mar', 2018),
(146, 121, 55, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-03-07', 'Final', 'Overweigh', 'Mar', 2018),
(147, 122, 45, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-03-08', 'Initial', 'ClassIIIObesity', 'Mar', 2018),
(148, 122, 55, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-03-09', 'Final', 'Overweigh', 'Mar', 2018),
(149, 123, 65, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-03-10', 'Initial', 'ClassIIIObesity', 'Mar', 2018),
(150, 123, 45, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-03-11', 'Final', 'Overweigh', 'Mar', 2018),
(151, 124, 50, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-03-12', 'Initial', 'ClassIIIObesity', 'Mar', 2018),
(152, 124, 80, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-03-13', 'Final', 'Overweigh', 'Mar', 2018),
(153, 125, 45, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-03-14', 'Initial', 'ClassIIIObesity', 'Mar', 2018),
(154, 125, 55, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-03-15', 'Final', 'Overweigh', 'Mar', 2018),
(155, 126, 120, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-03-16', 'Initial', 'ClassIIIObesity', 'Mar', 2018),
(156, 126, 100, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-03-17', 'Final', 'Overweigh', 'Mar', 2018),
(157, 127, 50, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-03-18', 'Initial', 'ClassIIIObesity', 'Mar', 2018),
(158, 127, 80, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-03-19', 'Final', 'ClassIIIObesity', 'Mar', 2018),
(159, 128, 120, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-03-20', 'Initial', 'Overweigh', 'Mar', 2018),
(160, 128, 100, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-03-21', 'Final', 'ClassIIIObesity', 'Mar', 2018),
(161, 129, 120, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-03-22', 'Initial', 'Overweigh', 'Mar', 2018),
(162, 129, 100, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-03-23', 'Final', 'ClassIIIObesity', 'Mar', 2018),
(163, 130, 50, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-03-24', 'Initial', 'Overweigh', 'Mar', 2018),
(164, 130, 80, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-03-25', 'Final', 'ClassIIIObesity', 'Mar', 2018),
(165, 131, 120, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-03-26', 'Initial', 'Overweigh', 'Mar', 2018),
(166, 131, 100, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-03-27', 'Final', 'ClassIIIObesity', 'Mar', 2018),
(167, 132, 120, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-03-28', 'Initial', 'Overweigh', 'Mar', 2018),
(168, 132, 100, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-03-29', 'Final', 'ClassIIIObesity', 'Mar', 2018),
(169, 133, 120, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-03-30', 'Initial', 'Overweigh', 'Mar', 2018),
(170, 133, 100, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-03-31', 'Final', 'ClassIIIObesity', 'Mar', 2018),
(171, 134, 120, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-04-01', 'Initial', 'Overweigh', 'Apr', 2018),
(172, 134, 100, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-04-02', 'Final', 'ClassIIIObesity', 'Apr', 2018),
(173, 135, 120, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-04-03', 'Initial', 'Overweigh', 'Apr', 2018),
(174, 135, 100, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-04-04', 'Final', 'ClassIIIObesity', 'Apr', 2018),
(175, 136, 50, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-04-05', 'Initial', 'Overweigh', 'Apr', 2018),
(176, 136, 80, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-04-06', 'Final', 'ClassIIIObesity', 'Apr', 2018),
(177, 137, 120, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-04-07', 'Initial', 'Overweigh', 'Apr', 2018),
(178, 137, 100, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-04-08', 'Final', 'ClassIIIObesity', 'Apr', 2018),
(179, 138, 50, 12, 15, 32, 12, 15, 32, 32, 32, 11, 22, 33, 21, 22, 31, 31, '2018-04-09', 'Initial', 'Overweigh', 'Apr', 2018),
(180, 138, 80, 17, 18, 30, 22, 20, 20, 20, 31, 12, 29, 31, 22, 31, 41, 41, '2018-04-10', 'Final', 'ClassIIIObesity', 'Apr', 2018),
(181, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', '', '', '', 0),
(182, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', '', '', '', 0);

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
(12, 'Student', '12', 11988);

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
(55, 26, 6, '2018-02-14', '2018-08-14', 'Active', 'Feb', '2018'),
(56, 83, 1, '2018-02-14', '2018-05-14', 'Active', 'Feb', '2018');

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
(1, 51, 400, '2017-03-15', '08:45:35', 'Jan', '2017'),
(2, 52, 400, '2006-05-27', '07:16:39', 'Feb', '2006'),
(3, 53, 400, '2008-08-24', '06:51:53', 'Mar', '2008'),
(4, 54, 400, '2005-04-06', '07:22:56', 'May', '2005'),
(5, 55, 400, '2014-03-16', '06:17:09', 'Jun', '2014'),
(6, 56, 400, '2014-12-29', '07:16:09', 'Jul', '2014'),
(7, 57, 400, '2007-09-07', '06:44:07', 'Aug', '2007'),
(8, 58, 400, '2015-04-14', '07:54:13', 'Sep', '2015'),
(9, 59, 400, '2005-08-17', '06:59:09', 'Oct', '2005'),
(10, 60, 400, '2006-05-15', '08:43:30', 'Nov', '2006'),
(11, 61, 400, '2007-05-28', '08:59:17', 'Dec', '2007'),
(12, 62, 400, '2014-09-21', '07:06:32', 'Jan', '2014'),
(13, 63, 400, '2010-03-31', '06:28:35', 'Feb', '2010'),
(14, 64, 400, '2009-01-19', '08:32:05', 'Mar', '2009'),
(15, 65, 400, '2008-03-20', '06:08:46', 'May', '2008'),
(16, 66, 400, '2006-03-30', '08:01:58', 'Jun', '2006'),
(17, 67, 400, '2010-04-09', '06:25:13', 'Jul', '2010'),
(18, 68, 400, '2013-04-06', '08:09:57', 'Aug', '2013'),
(19, 69, 400, '2015-09-12', '08:45:10', 'Sep', '2015'),
(20, 70, 400, '2005-11-12', '06:50:02', 'Oct', '2005'),
(21, 71, 400, '2012-02-20', '07:07:32', 'Nov', '2012'),
(22, 72, 400, '2016-08-07', '07:48:51', 'Dec', '2016'),
(23, 73, 400, '2011-05-09', '08:34:20', 'Jan', '2011'),
(24, 74, 400, '2007-08-04', '06:36:35', 'Feb', '2007'),
(25, 75, 400, '2006-04-16', '08:43:11', 'Mar', '2006'),
(26, 76, 400, '2016-03-16', '06:19:52', 'May', '2016'),
(27, 77, 400, '2010-03-17', '07:45:26', 'Jun', '2010'),
(28, 78, 400, '2009-10-26', '07:47:07', 'Jul', '2009'),
(29, 79, 400, '2008-02-16', '07:10:36', 'Aug', '2008'),
(30, 80, 400, '2007-08-29', '08:07:53', 'Sep', '2007'),
(31, 81, 400, '2013-06-17', '06:41:07', 'Oct', '2013'),
(32, 82, 400, '2015-10-01', '06:41:07', 'Nov', '2015'),
(33, 83, 400, '2011-07-16', '07:05:18', 'Dec', '2011'),
(34, 84, 400, '2006-06-15', '08:22:35', 'Jan', '2006'),
(35, 85, 400, '2007-09-27', '08:27:57', 'Feb', '2007'),
(36, 86, 400, '2016-02-25', '07:30:58', 'Mar', '2016'),
(37, 87, 400, '2013-11-25', '06:23:21', 'May', '2013'),
(38, 88, 400, '2011-04-13', '06:22:38', 'Jun', '2011'),
(39, 89, 400, '2017-04-11', '07:58:04', 'Jul', '2017'),
(40, 90, 400, '2009-01-20', '08:58:57', 'Aug', '2009'),
(41, 91, 400, '2010-04-29', '06:17:34', 'Sep', '2010'),
(42, 92, 400, '2011-05-08', '06:40:16', 'Oct', '2011'),
(43, 93, 400, '2015-10-26', '08:38:29', 'Nov', '2015'),
(44, 94, 400, '2005-06-17', '07:07:34', 'Dec', '2005'),
(45, 95, 400, '2016-10-27', '08:51:42', 'Jan', '2016'),
(46, 96, 400, '2014-09-07', '07:12:40', 'Feb', '2014'),
(47, 97, 400, '2009-09-26', '06:23:11', 'Mar', '2009'),
(48, 98, 400, '2011-03-01', '07:11:14', 'May', '2011'),
(49, 99, 400, '2011-10-12', '06:45:48', 'Jun', '2011'),
(50, 100, 400, '2015-03-30', '06:34:15', 'Jul', '2015');

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
(6, 'Spinning', 39, 'Spinning Room'),
(7, 'HIIT', 5, 'Center'),
(8, 'Yoga', 10, 'Studio'),
(9, 'F360', 10, 'Studio'),
(10, 'TRX', 10, 'Studio'),
(11, 'Dance Aero', 10, 'Center'),
(12, 'Pound Fit', 15, 'Center'),
(13, 'Pilates', 12, 'Center'),
(14, 'Swimming', 5, 'Pool'),
(15, 'Zumba', 10, 'Center');

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
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studioclasssession`
--

INSERT INTO `studioclasssession` (`SCS_Code`, `SC_Code`, `COACH_ID`, `SCS_StartTime`, `SCS_EndTime`, `SCS_Date`, `month`, `year`) VALUES
(1, 6, 38, '09:00:00.000000', '10:00:00.000000', '2014-06-11', 'Jun', '2014'),
(2, 7, 39, '10:00:00.000000', '11:00:00.000000', '2017-05-29', 'May', '2017'),
(3, 8, 40, '11:00:00.000000', '12:00:00.000000', '2011-05-26', 'May', '2011'),
(4, 9, 41, '12:00:00.000000', '13:00:00.000000', '2010-06-02', 'Jun', '2010'),
(5, 10, 42, '13:00:00.000000', '14:00:00.000000', '2013-05-18', 'May', '2013'),
(6, 11, 43, '14:00:00.000000', '15:00:00.000000', '2006-02-04', 'Feb', '2006'),
(7, 12, 44, '15:00:00.000000', '16:00:00.000000', '2015-08-12', 'Aug', '2015'),
(8, 13, 45, '16:00:00.000000', '17:00:00.000000', '2006-10-23', 'Oct', '2006'),
(9, 14, 46, '17:00:00.000000', '18:00:00.000000', '2006-02-18', 'Feb', '2006'),
(10, 15, 47, '09:00:00.000000', '10:00:00.000000', '2016-12-04', 'Dec', '2016'),
(11, 6, 48, '10:00:00.000000', '11:00:00.000000', '2012-08-16', 'Aug', '2012'),
(12, 7, 49, '11:00:00.000000', '12:00:00.000000', '2012-01-23', 'Jan', '2012'),
(13, 8, 50, '12:00:00.000000', '13:00:00.000000', '2014-08-15', 'Aug', '2014'),
(14, 9, 51, '13:00:00.000000', '14:00:00.000000', '2016-04-30', 'Apr', '2016'),
(15, 10, 38, '14:00:00.000000', '15:00:00.000000', '2015-12-22', 'Dec', '2015'),
(16, 11, 39, '15:00:00.000000', '16:00:00.000000', '2013-09-25', 'Sep', '2013'),
(17, 12, 40, '16:00:00.000000', '17:00:00.000000', '2005-03-15', 'Mar', '2005'),
(18, 13, 41, '17:00:00.000000', '18:00:00.000000', '2009-07-13', 'Jul', '2009'),
(19, 14, 42, '09:00:00.000000', '10:00:00.000000', '2015-09-26', 'Sep', '2015'),
(20, 15, 43, '10:00:00.000000', '11:00:00.000000', '2007-07-27', 'Jul', '2007'),
(21, 6, 44, '11:00:00.000000', '12:00:00.000000', '2006-11-22', 'Nov', '2006'),
(22, 7, 45, '12:00:00.000000', '13:00:00.000000', '2013-11-30', 'Nov', '2013'),
(23, 8, 46, '13:00:00.000000', '14:00:00.000000', '2006-12-29', 'Dec', '2006'),
(24, 9, 47, '14:00:00.000000', '15:00:00.000000', '2006-06-13', 'Jun', '2006'),
(25, 10, 48, '15:00:00.000000', '16:00:00.000000', '2012-06-12', 'Jun', '2012'),
(26, 11, 49, '16:00:00.000000', '17:00:00.000000', '2009-01-31', 'Jan', '2009'),
(27, 12, 50, '17:00:00.000000', '18:00:00.000000', '2006-12-07', 'Dec', '2006'),
(28, 13, 51, '09:00:00.000000', '10:00:00.000000', '2014-09-23', 'Sep', '2014'),
(29, 14, 38, '10:00:00.000000', '11:00:00.000000', '2008-06-22', 'Jun', '2008'),
(30, 15, 39, '11:00:00.000000', '12:00:00.000000', '2006-12-09', 'Dec', '2006'),
(31, 6, 40, '12:00:00.000000', '13:00:00.000000', '2017-01-04', 'Jan', '2017'),
(32, 7, 41, '13:00:00.000000', '14:00:00.000000', '2005-12-14', 'Dec', '2005'),
(33, 8, 42, '14:00:00.000000', '15:00:00.000000', '2010-10-28', 'Oct', '2010'),
(34, 9, 43, '15:00:00.000000', '16:00:00.000000', '2008-09-13', 'Sep', '2008'),
(35, 10, 44, '16:00:00.000000', '17:00:00.000000', '2011-02-18', 'Feb', '2011'),
(36, 11, 45, '17:00:00.000000', '18:00:00.000000', '2012-11-23', 'Nov', '2012'),
(37, 12, 46, '09:00:00.000000', '10:00:00.000000', '2011-01-24', 'Jan', '2011'),
(38, 13, 47, '10:00:00.000000', '11:00:00.000000', '2007-03-30', 'Mar', '2007'),
(39, 14, 48, '11:00:00.000000', '12:00:00.000000', '2005-07-03', 'Jul', '2005'),
(40, 15, 49, '12:00:00.000000', '13:00:00.000000', '2009-02-25', 'Feb', '2009'),
(41, 6, 50, '13:00:00.000000', '14:00:00.000000', '2012-03-21', 'Mar', '2012'),
(42, 7, 51, '14:00:00.000000', '15:00:00.000000', '2009-04-15', 'Apr', '2009'),
(43, 8, 38, '15:00:00.000000', '16:00:00.000000', '2005-12-05', 'Dec', '2005'),
(44, 9, 39, '16:00:00.000000', '17:00:00.000000', '2014-06-13', 'Jun', '2014'),
(45, 10, 40, '17:00:00.000000', '18:00:00.000000', '2012-10-29', 'Oct', '2012'),
(46, 11, 41, '09:00:00.000000', '10:00:00.000000', '2014-11-14', 'Nov', '2014'),
(47, 12, 42, '10:00:00.000000', '11:00:00.000000', '2014-09-19', 'Sep', '2014'),
(48, 13, 43, '11:00:00.000000', '12:00:00.000000', '2016-04-20', 'Apr', '2016'),
(49, 14, 44, '12:00:00.000000', '13:00:00.000000', '2015-09-26', 'Sep', '2015'),
(50, 15, 45, '13:00:00.000000', '14:00:00.000000', '2011-12-03', 'Dec', '2011'),
(51, 6, 46, '14:00:00.000000', '15:00:00.000000', '2012-11-17', 'Nov', '2012'),
(52, 7, 47, '15:00:00.000000', '16:00:00.000000', '2017-08-31', 'Aug', '2017'),
(53, 8, 48, '16:00:00.000000', '17:00:00.000000', '2005-10-24', 'Oct', '2005'),
(54, 9, 49, '17:00:00.000000', '18:00:00.000000', '2009-07-07', 'Jul', '2009'),
(55, 10, 50, '09:00:00.000000', '10:00:00.000000', '2012-06-29', 'Jun', '2012'),
(56, 11, 51, '10:00:00.000000', '11:00:00.000000', '2008-08-26', 'Aug', '2008'),
(57, 12, 38, '11:00:00.000000', '12:00:00.000000', '2009-07-07', 'Jul', '2009'),
(58, 13, 39, '12:00:00.000000', '13:00:00.000000', '2016-01-05', 'Jan', '2016'),
(59, 14, 40, '13:00:00.000000', '14:00:00.000000', '2008-02-14', 'Feb', '2008'),
(60, 15, 41, '14:00:00.000000', '15:00:00.000000', '2015-11-25', 'Nov', '2015'),
(61, 6, 42, '15:00:00.000000', '16:00:00.000000', '2014-05-25', 'May', '2014'),
(62, 7, 43, '16:00:00.000000', '17:00:00.000000', '2008-03-27', 'Mar', '2008'),
(63, 8, 44, '17:00:00.000000', '18:00:00.000000', '2008-12-30', 'Dec', '2008'),
(64, 9, 45, '09:00:00.000000', '10:00:00.000000', '2017-11-04', 'Nov', '2017'),
(65, 10, 46, '10:00:00.000000', '11:00:00.000000', '2011-06-28', 'Jun', '2011'),
(66, 11, 47, '11:00:00.000000', '12:00:00.000000', '2016-08-02', 'Aug', '2016'),
(67, 12, 48, '12:00:00.000000', '13:00:00.000000', '2006-07-13', 'Jul', '2006'),
(68, 13, 49, '13:00:00.000000', '14:00:00.000000', '2017-10-05', 'Oct', '2017'),
(69, 14, 50, '14:00:00.000000', '15:00:00.000000', '2012-09-20', 'Sep', '2012'),
(70, 15, 51, '15:00:00.000000', '16:00:00.000000', '2016-04-08', 'Apr', '2016'),
(71, 6, 38, '16:00:00.000000', '17:00:00.000000', '2013-07-21', 'Jul', '2013'),
(72, 7, 39, '17:00:00.000000', '18:00:00.000000', '2009-08-23', 'Aug', '2009'),
(73, 8, 40, '09:00:00.000000', '10:00:00.000000', '2017-06-12', 'Jun', '2017'),
(74, 9, 41, '10:00:00.000000', '11:00:00.000000', '2013-03-10', 'Mar', '2013'),
(75, 10, 42, '11:00:00.000000', '12:00:00.000000', '2016-06-04', 'Jun', '2016'),
(76, 11, 43, '12:00:00.000000', '13:00:00.000000', '2008-09-12', 'Sep', '2008'),
(77, 12, 44, '13:00:00.000000', '14:00:00.000000', '2010-10-30', 'Oct', '2010'),
(78, 13, 45, '14:00:00.000000', '15:00:00.000000', '2008-10-22', 'Oct', '2008'),
(79, 14, 46, '15:00:00.000000', '16:00:00.000000', '2009-03-17', 'Mar', '2009'),
(80, 15, 47, '16:00:00.000000', '17:00:00.000000', '2007-06-07', 'Jun', '2007'),
(81, 0, 0, '00:00:00.000000', '00:00:00.000000', '0000-00-00', '', '');

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
(1, '2017-07-09', '09:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Jul', '2017'),
(2, '2017-02-25', '10:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Feb', '2017'),
(3, '2017-09-19', '11:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Sep', '2017'),
(4, '2017-04-07', '12:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Apr', '2017'),
(5, '2017-04-06', '13:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Apr', '2017'),
(6, '2017-03-24', '14:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Mar', '2017'),
(7, '2017-09-24', '15:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Sep', '2017'),
(8, '2017-11-30', '16:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Nov', '2017'),
(9, '2017-11-30', '17:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Nov', '2017'),
(10, '2017-03-23', '18:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Mar', '2017'),
(11, '2017-09-01', '19:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Sep', '2017'),
(12, '2017-02-24', '20:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Feb', '2017'),
(13, '2017-09-28', '09:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Sep', '2017'),
(14, '2017-11-15', '10:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Nov', '2017'),
(15, '2017-12-03', '11:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Dec', '2017'),
(16, '2017-07-11', '12:00:00', 0, 100, 2200, 0, 0, 'Laundry', 'Jul', '2017'),
(17, '2017-05-23', '13:00:00', 0, 100, 2200, 0, 0, 'Laundry', 'May', '2017'),
(18, '2017-12-10', '14:00:00', 0, 100, 2200, 0, 0, 'Laundry', 'Dec', '2017'),
(19, '2017-07-14', '15:00:00', 0, 100, 2200, 0, 0, 'Laundry', 'Jul', '2017'),
(20, '2017-12-12', '16:00:00', 0, 100, 2200, 0, 0, 'Laundry', 'Dec', '2017'),
(21, '2017-07-14', '17:00:00', 0, 100, 2200, 0, 0, 'Laundry', 'Jul', '2017'),
(22, '2017-02-20', '18:00:00', 0, 100, 2200, 0, 0, 'Laundry', 'Feb', '2017'),
(23, '2017-11-25', '19:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Nov', '2017'),
(24, '2018-01-25', '20:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Jan', '2018'),
(25, '2017-12-24', '09:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Dec', '2017'),
(26, '2017-09-18', '10:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Sep', '2017'),
(27, '2018-01-19', '11:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Jan', '2018'),
(28, '2017-05-15', '12:00:00', 100, 0, 2200, 0, 0, 'Supply', 'May', '2017'),
(29, '2017-07-24', '13:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Jul', '2017'),
(30, '2017-10-16', '14:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Oct', '2017'),
(31, '2017-02-19', '15:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Feb', '2017'),
(32, '2018-01-13', '16:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Jan', '2018'),
(33, '2017-03-25', '17:00:00', 0, 100, 2200, 0, 0, 'Laundry', 'Mar', '2017'),
(34, '2017-11-01', '18:00:00', 0, 100, 2200, 0, 0, 'Laundry', 'Nov', '2017'),
(35, '2017-05-21', '19:00:00', 0, 100, 2200, 0, 0, 'Laundry', 'May', '2017'),
(36, '2017-09-24', '20:00:00', 0, 100, 2200, 0, 0, 'Laundry', 'Sep', '2017'),
(37, '2017-08-28', '09:00:00', 0, 100, 2200, 0, 0, 'Laundry', 'Aug', '2017'),
(38, '2017-02-16', '10:00:00', 0, 100, 2200, 0, 0, 'Laundry', 'Feb', '2017'),
(39, '2017-02-18', '11:00:00', 0, 100, 2200, 0, 0, 'Laundry', 'Feb', '2017'),
(40, '2017-08-15', '12:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Aug', '2017'),
(41, '2017-03-16', '13:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Mar', '2017'),
(42, '2017-04-02', '14:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Apr', '2017'),
(43, '2017-11-06', '15:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Nov', '2017'),
(44, '2017-03-23', '16:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Mar', '2017'),
(45, '2017-07-23', '17:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Jul', '2017'),
(46, '2017-07-25', '18:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Jul', '2017'),
(47, '2017-08-22', '19:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Aug', '2017'),
(48, '2017-10-18', '20:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Oct', '2017'),
(49, '2017-10-08', '09:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Oct', '2017'),
(50, '2017-06-30', '10:00:00', 100, 0, 2200, 0, 0, 'Supply', 'Jun', '2017'),
(140, '2018-02-14', '09:20:00', 100, NULL, 2300, 0, 0, 'Supply', 'Feb', '2018');

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
(94, 23, 20, 10, '2018-02-20', '2018-02-13', 'Feb', '2018', '', '', 'Completed'),
(95, 38, 50, 10, '2018-02-21', '2018-02-14', 'Feb', '2018', '', '', 'On-Going'),
(96, 38, 1, 10, '2017-02-01', '2017-01-01', 'Jan', '2017', 'Osteoporosis', 'Beginner', 'Completed'),
(97, 39, 2, 11, '2017-03-02', '2017-01-02', 'Jan', '2017', 'Osteoporosis', 'Beginner', 'Completed'),
(98, 40, 3, 12, '2017-04-03', '2017-01-03', 'Jan', '2017', '', 'Intermediate', 'Completed'),
(99, 41, 4, 13, '2017-08-04', '2017-01-04', 'Jan', '2017', '', 'Intermediate', 'Completed'),
(100, 42, 5, 14, '2017-05-05', '2017-01-05', 'Jan', '2017', '', 'Intermediate', 'Completed'),
(101, 43, 6, 15, '2017-05-05', '2017-01-06', 'Jan', '2017', '', 'Advance', 'Completed'),
(102, 44, 7, 16, '2017-12-07', '2017-01-07', 'Jan', '2017', '', 'Advance', 'Completed'),
(103, 45, 8, 17, '2017-11-08', '2017-01-08', 'Jan', '2017', 'Anemia', 'Beginner', 'Completed'),
(104, 46, 9, 10, '2017-03-09', '2017-01-09', 'Jan', '2017', 'Anemia', 'Beginner', 'Completed'),
(105, 47, 10, 11, '2017-03-10', '2017-01-10', 'Jan', '2017', 'Anemia', 'Beginner', 'Completed'),
(106, 48, 11, 12, '2017-08-20', '2017-02-20', 'Feb', '2017', 'Anemia', 'Beginner', 'Completed'),
(107, 49, 12, 13, '2017-07-21', '2017-02-21', 'Feb', '2017', '', 'Intermediate', 'Completed'),
(108, 50, 13, 14, '2017-06-22', '2017-02-22', 'Feb', '2017', '', 'Advance', 'Completed'),
(109, 38, 14, 15, '2018-02-23', '2017-02-23', 'Feb', '2017', '', 'Intermediate', 'On-Going'),
(110, 39, 15, 16, '2018-02-24', '2017-02-24', 'Feb', '2017', '', 'Advance', 'On-Going'),
(111, 40, 16, 17, '2018-02-25', '2017-02-25', 'Feb', '2017', '', 'Intermediate', 'On-Going'),
(112, 41, 17, 10, '2018-02-26', '2017-02-26', 'Feb', '2017', '', 'Advance', 'On-Going'),
(113, 42, 18, 11, '2018-02-27', '2017-02-27', 'Feb', '2017', '', 'Intermediate', 'On-Going'),
(114, 43, 19, 12, '2018-02-28', '2017-02-28', 'Feb', '2017', '', 'Advance', 'On-Going'),
(115, 44, 20, 13, '2018-03-01', '2017-03-01', 'Mar', '2017', '', 'Intermediate', 'On-Going'),
(116, 45, 21, 14, '2018-03-02', '2017-03-02', 'Mar', '2017', 'Seizure', 'Beginner', 'On-Going'),
(117, 46, 22, 15, '2018-03-03', '2017-03-03', 'Mar', '2017', 'Seizure', 'Beginner', 'On-Going'),
(118, 47, 23, 16, '2018-03-04', '2017-03-04', 'Mar', '2017', 'Seizure', 'Beginner', 'On-Going'),
(119, 48, 24, 17, '2018-03-05', '2017-03-05', 'Mar', '2017', 'Seizure', 'Beginner', 'On-Going'),
(120, 49, 25, 10, '2018-03-06', '2017-03-06', 'Mar', '2017', 'Seizure', 'Beginner', 'On-Going'),
(121, 50, 26, 11, '2018-03-07', '2017-03-07', 'Mar', '2017', 'Seizure', 'Beginner', 'On-Going'),
(122, 38, 27, 12, '2018-03-08', '2017-03-08', 'Mar', '2017', '', 'Advance', 'On-Going'),
(123, 39, 28, 13, '2018-03-09', '2017-03-09', 'Mar', '2017', '', 'Intermediate', 'On-Going'),
(124, 40, 29, 14, '2018-03-10', '2017-03-10', 'Mar', '2017', '', 'Advance', 'On-Going'),
(125, 41, 30, 15, '2018-03-11', '2017-03-11', 'Mar', '2017', '', 'Intermediate', 'On-Going'),
(126, 42, 31, 16, '2018-03-12', '2017-03-12', 'Mar', '2017', 'Anemia', 'Beginner', 'On-Going'),
(127, 43, 32, 17, '2018-03-13', '2017-04-12', 'Apr', '2017', 'Osteoporosis', 'Beginner', 'On-Going'),
(128, 44, 33, 10, '2018-03-14', '2017-04-13', 'Apr', '2017', '', 'Intermediate', 'On-Going'),
(129, 45, 34, 11, '2018-03-15', '2017-04-14', 'Apr', '2017', '', 'Advance', 'On-Going'),
(130, 46, 35, 12, '2018-03-16', '2017-04-15', 'Apr', '2017', '', 'Advance', 'On-Going'),
(131, 47, 36, 13, '2018-03-17', '2017-04-16', 'Apr', '2017', '', 'Advance', 'On-Going'),
(132, 48, 37, 14, '2017-12-01', '2017-04-17', 'Apr', '2017', 'Seizure', 'Beginner', 'Completed'),
(133, 49, 38, 15, '2017-12-02', '2017-04-18', 'Apr', '2017', '', 'Intermediate', 'Completed'),
(134, 50, 39, 16, '2017-12-03', '2017-04-19', 'Apr', '2017', '', 'Intermediate', 'Completed'),
(135, 38, 40, 17, '2017-12-04', '2017-04-20', 'Apr', '2017', '', 'Intermediate', 'Completed'),
(136, 39, 41, 10, '2017-12-05', '2017-04-21', 'Apr', '2017', '', 'Intermediate', 'Completed'),
(137, 40, 42, 11, '2017-12-06', '2017-05-21', 'May', '2017', '', 'Intermediate', 'Completed'),
(138, 41, 43, 12, '2017-12-07', '2017-05-22', 'May', '2017', '', 'Intermediate', 'Completed'),
(139, 42, 44, 13, '2017-12-08', '2017-05-23', 'May', '2017', 'Seizure', 'Beginner', 'Completed'),
(140, 43, 45, 14, '2017-12-09', '2017-05-24', 'May', '2017', '', 'Intermediate', 'Completed'),
(141, 44, 46, 15, '2017-12-10', '2017-05-25', 'May', '2017', '', 'Intermediate', 'Completed'),
(142, 45, 47, 16, '2017-12-11', '2017-05-26', 'May', '2017', '', 'Intermediate', 'Completed'),
(143, 46, 48, 17, '2017-12-12', '2017-06-26', 'Jun', '2017', '', 'Intermediate', 'Completed'),
(144, 47, 49, 10, '2017-12-13', '2017-06-27', 'Jun', '2017', '', 'Intermediate', 'Completed'),
(145, 48, 50, 11, '2017-12-14', '2017-06-28', 'Jun', '2017', 'Seizure', 'Beginner', 'Completed'),
(146, 49, 1, 12, '2017-12-15', '2017-06-29', 'Jun', '2017', '', 'Intermediate', 'Completed'),
(147, 50, 2, 13, '2017-12-16', '2017-06-30', 'Jun', '2017', '', 'Intermediate', 'Completed'),
(148, 38, 3, 14, '2017-12-17', '2017-07-01', 'Jul', '2017', '', 'Intermediate', 'Completed'),
(149, 39, 4, 15, '2017-12-18', '2017-07-02', 'Jul', '2017', 'Seizure', 'Beginner', 'Completed'),
(150, 40, 5, 16, '2017-12-19', '2017-07-03', 'Jul', '2017', '', 'Intermediate', 'Completed'),
(151, 41, 6, 17, '2017-12-20', '2017-07-04', 'Jul', '2017', '', 'Intermediate', 'Completed'),
(152, 42, 7, 15, '2017-12-21', '2017-07-05', 'Jul', '2017', '', 'Intermediate', 'Completed'),
(153, 43, 8, 16, '2017-12-22', '2017-08-05', 'Aug', '2017', '', 'Intermediate', 'Completed'),
(154, 44, 9, 17, '2017-12-23', '2017-08-06', 'Aug', '2017', 'Seizure', 'Beginner', 'Completed'),
(155, 45, 10, 10, '2017-12-24', '2017-08-07', 'Aug', '2017', '', 'Intermediate', 'Completed'),
(156, 46, 11, 11, '2017-12-25', '2017-08-08', 'Aug', '2017', '', 'Intermediate', 'Completed'),
(157, 47, 12, 12, '2017-12-26', '2017-08-09', 'Aug', '2017', 'Seizure', 'Beginner', 'Completed'),
(158, 48, 13, 13, '2017-12-27', '2017-08-10', 'Aug', '2017', '', 'Intermediate', 'Completed'),
(159, 49, 14, 14, '2017-12-28', '2017-08-11', 'Aug', '2017', '', 'Intermediate', 'Completed'),
(160, 50, 15, 15, '2017-12-29', '2017-08-12', 'Aug', '2017', '', 'Intermediate', 'Completed'),
(161, 38, 16, 16, '2017-12-30', '2017-08-13', 'Aug', '2017', '', 'Intermediate', 'Completed'),
(162, 39, 17, 17, '2017-12-31', '2017-09-13', 'Sep', '2017', 'Seizure', 'Beginner', 'Completed'),
(163, 40, 18, 10, '2018-01-01', '2017-09-14', 'Sep', '2017', '', 'Intermediate', 'Completed'),
(164, 41, 19, 11, '2018-01-02', '2017-09-15', 'Sep', '2017', '', 'Intermediate', 'Completed'),
(165, 42, 20, 12, '2018-01-03', '2017-09-16', 'Sep', '2017', '', 'Intermediate', 'Completed'),
(166, 43, 21, 13, '2018-01-04', '2017-09-17', 'Sep', '2017', '', 'Intermediate', 'Completed'),
(167, 44, 22, 14, '2018-01-05', '2017-09-18', 'Sep', '2017', '', 'Intermediate', 'Completed'),
(168, 45, 23, 15, '2018-01-06', '2017-09-19', 'Sep', '2017', 'Seizure', 'Beginner', 'Completed'),
(169, 46, 24, 16, '2018-01-07', '2017-09-20', 'Sep', '2017', '', 'Intermediate', 'Completed'),
(170, 47, 25, 17, '2018-01-08', '2017-09-21', 'Sep', '2017', 'Seizure', 'Beginner', 'Completed'),
(171, 48, 26, 10, '2018-01-09', '2017-09-22', 'Sep', '2017', '', 'Intermediate', 'Completed'),
(172, 49, 27, 11, '2018-01-10', '2017-09-22', 'Sep', '2017', '', 'Intermediate', 'Completed'),
(173, 50, 28, 12, '2018-01-11', '2017-10-22', 'Oct', '2017', '', 'Intermediate', 'Completed'),
(174, 38, 29, 13, '2018-01-12', '2017-10-23', 'Oct', '2017', '', 'Intermediate', 'Completed'),
(175, 39, 30, 14, '2018-01-13', '2017-10-24', 'Oct', '2017', '', 'Intermediate', 'Completed'),
(176, 40, 31, 15, '2018-01-14', '2017-10-25', 'Oct', '2017', 'Seizure', 'Beginner', 'Completed'),
(177, 41, 32, 16, '2018-01-15', '2017-10-26', 'Oct', '2017', '', 'Intermediate', 'Completed'),
(178, 42, 33, 17, '2018-01-16', '2017-10-27', 'Oct', '2017', '', 'Intermediate', 'Completed'),
(179, 43, 34, 10, '2018-01-17', '2017-10-28', 'Oct', '2017', '', 'Intermediate', 'Completed'),
(180, 44, 35, 11, '2018-01-18', '2017-10-29', 'Oct', '2017', '', 'Intermediate', 'Completed'),
(181, 45, 36, 12, '2018-01-19', '2017-10-30', 'Oct', '2017', '', 'Intermediate', 'Completed'),
(182, 46, 37, 13, '2018-01-01', '2017-11-30', 'Nov', '2017', '', 'Intermediate', 'Completed'),
(183, 47, 38, 14, '2018-01-02', '2017-12-01', 'Dec', '2017', 'Seizure', 'Beginner', 'Completed'),
(184, 48, 39, 15, '2018-01-03', '2017-12-02', 'Dec', '2017', '', 'Intermediate', 'Completed'),
(185, 49, 40, 16, '2018-01-04', '2017-12-03', 'Dec', '2017', '', 'Intermediate', 'Completed'),
(186, 50, 41, 17, '2018-01-05', '2017-12-04', 'Dec', '2017', '', 'Intermediate', 'Completed'),
(187, 38, 42, 10, '2018-01-06', '2017-12-05', 'Dec', '2017', '', 'Intermediate', 'Completed'),
(188, 39, 43, 11, '2018-01-07', '2017-11-05', 'Nov', '2017', '', 'Intermediate', 'Completed'),
(189, 40, 44, 12, '2018-01-08', '2017-11-06', 'Nov', '2017', '', 'Intermediate', 'Completed'),
(190, 41, 45, 13, '2018-01-09', '2017-11-07', 'Nov', '2017', 'Seizure', 'Beginner', 'Completed'),
(191, 42, 46, 14, '2018-01-10', '2017-11-08', 'Nov', '2017', '', 'Intermediate', 'Completed'),
(192, 43, 47, 15, '2018-01-11', '2017-11-09', 'Nov', '2017', '', 'Intermediate', 'Completed'),
(193, 44, 48, 16, '2018-01-12', '2017-11-10', 'Nov', '2017', '', 'Intermediate', 'Completed'),
(194, 45, 49, 17, '2018-01-13', '2017-11-11', 'Nov', '2017', '', 'Intermediate', 'Completed'),
(195, 46, 50, 12, '2018-01-14', '2017-11-12', 'Nov', '2017', '', 'Intermediate', 'Completed');

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
(118, 88, '2018-02-13', '13:01:00.0000', '14:02:00.0000', 'push-up', 2, 1, 'Feb', 2018),
(119, 89, '2018-02-08', '13:01:00.0000', '13:00:00.0000', 'chestup', 1, 11, 'Feb', 2018),
(121, 91, '2018-02-15', '13:02:00.0000', '14:01:00.0000', 'push-ups', 2, 1, 'Feb', 2018),
(122, 92, '2018-02-15', '14:00:00.0000', '14:01:00.0000', 'push-ups', 1, 2, 'Feb', 2018),
(123, 93, '2018-02-09', '15:02:00.0000', '15:03:00.0000', 'push-ups', 3, 2, 'Feb', 2018),
(124, 94, '2018-02-15', '13:02:00.0000', '13:02:00.0000', 'push-ups', 2, 1, 'Feb', 2018),
(125, 88, '2017-01-01', '08:00:00.0000', '09:00:00.0000', 'Push-up', 1, 12, 'Jan', 2017),
(126, 89, '2017-01-02', '09:00:00.0000', '10:00:00.0000', 'Push-up', 2, 12, 'Jan', 2017),
(127, 90, '0000-00-00', '10:00:00.0000', '11:00:00.0000', 'Push-up', 3, 12, 'Jan', 2017),
(128, 91, '2017-01-04', '11:00:00.0000', '12:00:00.0000', 'Push-up', 1, 12, 'Jan', 2017),
(129, 92, '2017-01-05', '12:00:00.0000', '01:00:00.0000', 'Push-up', 2, 12, 'Jan', 2017),
(130, 93, '2017-01-06', '01:00:00.0000', '02:00:00.0000', 'Push-up', 3, 12, 'Jan', 2017),
(131, 94, '2017-01-07', '02:00:00.0000', '03:00:00.0000', 'Push-up', 1, 12, 'Jan', 2017),
(132, 95, '2017-01-08', '03:00:00.0000', '04:00:00.0000', 'Push-up', 2, 12, 'Jan', 2017),
(133, 96, '2017-01-09', '04:00:00.0000', '05:00:00.0000', 'KettleBell', 3, 12, 'Jan', 2017),
(134, 97, '2017-01-10', '05:00:00.0000', '06:00:00.0000', 'KettleBell', 1, 12, 'Jan', 2017),
(135, 98, '2017-02-20', '06:00:00.0000', '07:00:00.0000', 'KettleBell', 2, 12, 'Feb', 2017),
(136, 99, '2017-02-21', '07:00:00.0000', '08:00:00.0000', 'KettleBell', 3, 12, 'Feb', 2017),
(137, 100, '2017-02-22', '08:00:00.0000', '09:00:00.0000', 'KettleBell', 1, 12, 'Feb', 2017),
(138, 101, '2017-02-23', '09:00:00.0000', '10:00:00.0000', 'KettleBell', 2, 12, 'Feb', 2017),
(139, 102, '2017-02-24', '10:00:00.0000', '11:00:00.0000', 'KettleBell', 3, 12, 'Feb', 2017),
(140, 103, '2017-02-25', '11:00:00.0000', '09:00:00.0000', 'KettleBell', 1, 12, 'Feb', 2017),
(141, 104, '2017-02-26', '08:00:00.0000', '10:00:00.0000', 'KettleBell', 2, 12, 'Feb', 2017),
(142, 105, '2017-02-27', '09:00:00.0000', '11:00:00.0000', 'Deadlift', 3, 12, 'Feb', 2017),
(143, 106, '2017-02-28', '10:00:00.0000', '12:00:00.0000', 'LegCurl', 1, 12, 'Feb', 2017),
(144, 107, '2017-03-01', '11:00:00.0000', '01:00:00.0000', 'BenchPress', 2, 12, 'Mar', 2017),
(145, 108, '2017-03-02', '12:00:00.0000', '02:00:00.0000', 'ChestFly', 3, 12, 'Mar', 2017),
(146, 109, '2017-03-03', '01:00:00.0000', '03:00:00.0000', 'BicepsCurl', 1, 12, 'Mar', 2017),
(147, 110, '2017-03-04', '02:00:00.0000', '04:00:00.0000', 'Legraise', 2, 12, 'Mar', 2017),
(148, 111, '2017-03-05', '03:00:00.0000', '05:00:00.0000', 'KettleBell', 3, 12, 'Mar', 2017),
(149, 112, '2017-03-06', '04:00:00.0000', '06:00:00.0000', 'Deadlift', 1, 12, 'Mar', 2017),
(150, 113, '2017-03-07', '05:00:00.0000', '07:00:00.0000', 'LegCurl', 2, 12, 'Mar', 2017),
(151, 114, '2017-03-08', '06:00:00.0000', '08:00:00.0000', 'BenchPress', 3, 12, 'Mar', 2017),
(152, 115, '2017-03-09', '07:00:00.0000', '09:00:00.0000', 'ChestFly', 1, 12, 'Mar', 2017),
(153, 116, '2017-03-10', '08:00:00.0000', '10:00:00.0000', 'BicepsCurl', 2, 12, 'Mar', 2017),
(154, 117, '2017-03-11', '09:00:00.0000', '11:00:00.0000', 'Legraise', 3, 12, 'Mar', 2017),
(155, 118, '2017-03-12', '10:00:00.0000', '09:00:00.0000', 'KettleBell', 1, 12, 'Mar', 2017),
(156, 119, '2017-04-12', '11:00:00.0000', '10:00:00.0000', 'Deadlift', 2, 12, 'Apr', 2017),
(157, 120, '2017-04-13', '08:00:00.0000', '11:00:00.0000', 'LegCurl', 3, 12, 'Apr', 2017),
(158, 121, '2017-04-14', '09:00:00.0000', '12:00:00.0000', 'BenchPress', 1, 12, 'Apr', 2017),
(159, 122, '2017-04-15', '10:00:00.0000', '01:00:00.0000', 'ChestFly', 2, 12, 'Apr', 2017),
(160, 123, '2017-04-16', '11:00:00.0000', '02:00:00.0000', 'BicepsCurl', 3, 12, 'Apr', 2017),
(161, 124, '2017-04-17', '12:00:00.0000', '03:00:00.0000', 'Legraise', 1, 12, 'Apr', 2017),
(162, 125, '2017-04-18', '01:00:00.0000', '04:00:00.0000', 'KettleBell', 2, 12, 'Apr', 2017),
(163, 126, '2017-04-19', '02:00:00.0000', '05:00:00.0000', 'Deadlift', 3, 12, 'Apr', 2017),
(164, 127, '2017-04-20', '03:00:00.0000', '06:00:00.0000', 'LegCurl', 1, 12, 'Apr', 2017),
(165, 128, '2017-04-21', '04:00:00.0000', '07:00:00.0000', 'BenchPress', 2, 12, 'Apr', 2017),
(166, 129, '2017-05-21', '05:00:00.0000', '08:00:00.0000', 'ChestFly', 3, 12, 'May', 2017),
(167, 130, '2017-05-22', '06:00:00.0000', '09:00:00.0000', 'BicepsCurl', 1, 12, 'May', 2017),
(168, 131, '2017-05-23', '07:00:00.0000', '10:00:00.0000', 'Legraise', 2, 12, 'May', 2017),
(169, 132, '2017-05-24', '08:00:00.0000', '11:00:00.0000', 'KettleBell', 3, 12, 'May', 2017),
(170, 133, '2017-05-25', '09:00:00.0000', '09:00:00.0000', 'Deadlift', 1, 12, 'May', 2017),
(171, 134, '2017-05-26', '10:00:00.0000', '10:00:00.0000', 'LegCurl', 2, 12, 'May', 2017),
(172, 135, '2017-06-26', '11:00:00.0000', '11:00:00.0000', 'BenchPress', 3, 12, 'Jun', 2017),
(173, 136, '2017-06-27', '08:00:00.0000', '12:00:00.0000', 'ChestFly', 1, 12, 'Jun', 2017),
(174, 137, '2017-06-28', '09:00:00.0000', '01:00:00.0000', 'BicepsCurl', 2, 12, 'Jun', 2017),
(175, 138, '2017-06-29', '10:00:00.0000', '02:00:00.0000', 'Legraise', 3, 12, 'Jun', 2017),
(176, 139, '2017-06-30', '11:00:00.0000', '03:00:00.0000', 'KettleBell', 1, 12, 'Jun', 2017),
(177, 140, '2017-07-01', '12:00:00.0000', '04:00:00.0000', 'Deadlift', 2, 12, 'Jul', 2017),
(178, 141, '2017-07-02', '01:00:00.0000', '05:00:00.0000', 'LegCurl', 3, 12, 'Jul', 2017),
(179, 142, '2017-07-03', '02:00:00.0000', '06:00:00.0000', 'BenchPress', 1, 12, 'Jul', 2017),
(180, 143, '2017-07-04', '03:00:00.0000', '07:00:00.0000', 'ChestFly', 2, 12, 'Jul', 2017),
(181, 144, '2017-07-05', '04:00:00.0000', '08:00:00.0000', 'BicepsCurl', 3, 12, 'Jul', 2017),
(182, 145, '2017-08-05', '05:00:00.0000', '09:00:00.0000', 'Legraise', 1, 12, 'Aug', 2017),
(183, 146, '2017-08-06', '06:00:00.0000', '10:00:00.0000', 'KettleBell', 2, 12, 'Aug', 2017),
(184, 147, '2017-08-07', '07:00:00.0000', '11:00:00.0000', 'Deadlift', 3, 12, 'Aug', 2017),
(185, 148, '2017-08-08', '08:00:00.0000', '09:00:00.0000', 'LegCurl', 1, 12, 'Aug', 2017),
(186, 149, '2017-08-09', '09:00:00.0000', '10:00:00.0000', 'BenchPress', 2, 12, 'Aug', 2017),
(187, 150, '2017-08-10', '10:00:00.0000', '11:00:00.0000', 'ChestFly', 3, 12, 'Aug', 2017),
(188, 151, '2017-08-11', '11:00:00.0000', '12:00:00.0000', 'BicepsCurl', 1, 12, 'Aug', 2017),
(189, 152, '2017-08-12', '08:00:00.0000', '01:00:00.0000', 'Legraise', 2, 12, 'Aug', 2017),
(190, 153, '2017-08-13', '09:00:00.0000', '02:00:00.0000', 'KettleBell', 3, 12, 'Aug', 2017),
(191, 154, '2017-09-13', '10:00:00.0000', '03:00:00.0000', 'Deadlift', 1, 12, 'Sep', 2017),
(192, 155, '2017-09-14', '11:00:00.0000', '04:00:00.0000', 'LegCurl', 2, 12, 'Sep', 2017),
(193, 156, '2017-09-15', '12:00:00.0000', '05:00:00.0000', 'BenchPress', 3, 12, 'Sep', 2017),
(194, 157, '2017-09-16', '01:00:00.0000', '06:00:00.0000', 'ChestFly', 1, 12, 'Sep', 2017),
(195, 158, '2017-09-17', '02:00:00.0000', '07:00:00.0000', 'BicepsCurl', 2, 12, 'Sep', 2017),
(196, 159, '2017-09-18', '03:00:00.0000', '08:00:00.0000', 'Legraise', 3, 12, 'Sep', 2017),
(197, 160, '2017-09-19', '04:00:00.0000', '09:00:00.0000', 'KettleBell', 1, 12, 'Sep', 2017),
(198, 161, '2017-09-20', '05:00:00.0000', '10:00:00.0000', 'Deadlift', 2, 12, 'Sep', 2017),
(199, 162, '2017-09-21', '06:00:00.0000', '11:00:00.0000', 'LegCurl', 3, 12, 'Sep', 2017),
(200, 163, '2017-09-22', '07:00:00.0000', '09:00:00.0000', 'BenchPress', 1, 12, 'Sep', 2017),
(201, 164, '2017-09-22', '08:00:00.0000', '10:00:00.0000', 'ChestFly', 2, 12, 'Sep', 2017),
(202, 165, '2017-10-22', '09:00:00.0000', '11:00:00.0000', 'BicepsCurl', 3, 12, 'Oct', 2017),
(203, 166, '2017-10-23', '10:00:00.0000', '12:00:00.0000', 'Legraise', 1, 12, 'Oct', 2017),
(204, 167, '2017-10-24', '11:00:00.0000', '01:00:00.0000', 'KettleBell', 2, 12, 'Oct', 2017),
(205, 168, '2017-10-25', '08:00:00.0000', '02:00:00.0000', 'Deadlift', 3, 12, 'Oct', 2017),
(206, 169, '2017-10-26', '09:00:00.0000', '03:00:00.0000', 'LegCurl', 1, 12, 'Oct', 2017),
(207, 170, '2017-10-27', '10:00:00.0000', '04:00:00.0000', 'BenchPress', 2, 12, 'Oct', 2017),
(208, 171, '2017-10-28', '11:00:00.0000', '05:00:00.0000', 'ChestFly', 3, 12, 'Oct', 2017),
(209, 172, '2017-10-29', '12:00:00.0000', '06:00:00.0000', 'BicepsCurl', 1, 12, 'Oct', 2017),
(210, 173, '2017-10-30', '01:00:00.0000', '07:00:00.0000', 'Legraise', 2, 12, 'Oct', 2017),
(211, 174, '2017-11-30', '02:00:00.0000', '08:00:00.0000', 'KettleBell', 3, 12, 'Nov', 2017),
(212, 175, '2017-12-01', '03:00:00.0000', '09:00:00.0000', 'Deadlift', 1, 12, 'Dec', 2017),
(213, 176, '2017-12-02', '04:00:00.0000', '10:00:00.0000', 'LegCurl', 2, 12, 'Dec', 2017),
(214, 177, '2017-12-03', '05:00:00.0000', '11:00:00.0000', 'BenchPress', 3, 12, 'Dec', 2017),
(215, 178, '2017-12-04', '06:00:00.0000', '09:00:00.0000', 'ChestFly', 1, 12, 'Dec', 2017),
(216, 179, '2017-12-05', '07:00:00.0000', '10:00:00.0000', 'BicepsCurl', 2, 12, 'Dec', 2017),
(217, 180, '2017-11-05', '08:00:00.0000', '11:00:00.0000', 'Legraise', 3, 12, 'Nov', 2017),
(218, 181, '2017-11-06', '09:00:00.0000', '12:00:00.0000', 'KettleBell', 1, 12, 'Nov', 2017),
(219, 182, '2017-11-07', '10:00:00.0000', '01:00:00.0000', 'Deadlift', 2, 12, 'Nov', 2017),
(220, 183, '2017-11-08', '11:00:00.0000', '02:00:00.0000', 'LegCurl', 3, 12, 'Nov', 2017),
(221, 184, '2017-11-09', '08:00:00.0000', '03:00:00.0000', 'BenchPress', 1, 12, 'Nov', 2017),
(222, 185, '2017-11-10', '09:00:00.0000', '04:00:00.0000', 'ChestFly', 2, 12, 'Nov', 2017),
(223, 186, '2017-11-11', '10:00:00.0000', '05:00:00.0000', 'BicepsCurl', 3, 12, 'Nov', 2017),
(224, 187, '2017-11-12', '11:00:00.0000', '06:00:00.0000', 'KettleBell', 1, 12, 'Nov', 2017);

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
(17, 24, 'Junior', 9600, 168);

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
(1, 1, 'Membership', 5697, '2017-10-11', 'unpaid', '2017', 'Jan'),
(2, 2, 'Membership', 5697, '2017-07-04', 'unpaid', '2017', 'Feb'),
(3, 3, 'Membership', 5697, '2014-07-16', 'unpaid', '2014', 'Mar'),
(4, 4, 'Membership', 5697, '2013-10-31', 'unpaid', '2013', 'May'),
(5, 5, 'Membership', 5697, '2014-01-14', 'unpaid', '2014', 'Jun'),
(6, 6, 'Membership', 5697, '2015-01-18', 'unpaid', '2015', 'Jul'),
(7, 7, 'Membership', 5697, '2018-01-04', 'unpaid', '2018', 'Aug'),
(8, 8, 'Membership', 5697, '2014-08-12', 'unpaid', '2014', 'Sep'),
(9, 9, 'Membership', 5697, '2015-11-24', 'unpaid', '2015', 'Oct'),
(10, 10, 'Membership', 5697, '2014-05-16', 'unpaid', '2014', 'Nov'),
(11, 11, 'Membership', 5697, '2013-10-20', 'unpaid', '2013', 'Dec'),
(12, 12, 'Membership', 5697, '2017-04-03', 'unpaid', '2017', 'Jan'),
(13, 13, 'Membership', 5697, '2016-10-03', 'unpaid', '2016', 'Feb'),
(14, 14, 'Membership', 5697, '2015-07-19', 'unpaid', '2015', 'Mar'),
(15, 15, 'Membership', 5697, '2016-06-27', 'unpaid', '2016', 'May'),
(16, 16, 'Membership', 5697, '2016-02-20', 'unpaid', '2016', 'Jun'),
(17, 17, 'Membership', 5697, '2017-12-05', 'unpaid', '2017', 'Jul'),
(18, 18, 'Membership', 5697, '2014-12-23', 'unpaid', '2014', 'Aug'),
(19, 19, 'Membership', 5697, '2016-02-27', 'unpaid', '2016', 'Sep'),
(20, 20, 'Membership', 5697, '2016-08-04', 'unpaid', '2016', 'Oct'),
(21, 21, 'Membership', 5697, '2017-08-24', 'unpaid', '2017', 'Nov'),
(22, 22, 'Membership', 5697, '2016-01-31', 'unpaid', '2016', 'Dec'),
(23, 23, 'Membership', 5697, '2013-03-11', 'unpaid', '2013', 'Jan'),
(24, 24, 'Membership', 5697, '2017-01-10', 'unpaid', '2017', 'Feb'),
(25, 25, 'Membership', 5697, '2014-07-29', 'unpaid', '2014', 'Mar'),
(26, 26, 'Personal Training', 4000, '2014-05-25', 'unpaid', '2014', 'May'),
(27, 27, 'Personal Training', 4000, '2014-01-25', 'unpaid', '2014', 'Jun'),
(28, 28, 'Personal Training', 4000, '2014-06-28', 'unpaid', '2014', 'Jul'),
(29, 29, 'Personal Training', 4000, '2015-06-29', 'unpaid', '2015', 'Aug'),
(30, 30, 'Personal Training', 4000, '2016-06-10', 'unpaid', '2016', 'Sep'),
(31, 31, 'Personal Training', 4000, '2016-04-18', 'unpaid', '2016', 'Oct'),
(32, 32, 'Personal Training', 4000, '2017-01-12', 'unpaid', '2017', 'Nov'),
(33, 33, 'Personal Training', 4000, '2016-02-16', 'unpaid', '2016', 'Dec'),
(34, 34, 'Personal Training', 4000, '2015-01-25', 'unpaid', '2015', 'Jan'),
(35, 35, 'Personal Training', 4000, '2013-10-27', 'unpaid', '2013', 'Feb'),
(36, 36, 'Personal Training', 4000, '2017-07-27', 'unpaid', '2017', 'Mar'),
(37, 37, 'Personal Training', 4000, '2015-09-20', 'unpaid', '2015', 'May'),
(38, 38, 'Personal Training', 4000, '2016-10-30', 'unpaid', '2016', 'Jun'),
(39, 39, 'Personal Training', 4000, '2016-07-18', 'unpaid', '2016', 'Jul'),
(40, 40, 'Personal Training', 4000, '2017-06-04', 'unpaid', '2017', 'Aug'),
(41, 41, 'Personal Training', 4000, '2018-01-04', 'unpaid', '2018', 'Sep'),
(42, 42, 'Personal Training', 4000, '2017-05-18', 'unpaid', '2017', 'Oct'),
(43, 43, 'Personal Training', 4000, '2016-06-06', 'unpaid', '2016', 'Nov'),
(44, 44, 'Personal Training', 4000, '2015-09-25', 'unpaid', '2015', 'Dec'),
(45, 45, 'Personal Training', 4000, '2016-07-09', 'unpaid', '2016', 'Jan'),
(46, 46, 'Personal Training', 4000, '2015-12-28', 'unpaid', '2015', 'Feb'),
(47, 47, 'Personal Training', 4000, '2015-10-09', 'unpaid', '2015', 'Mar'),
(48, 48, 'Personal Training', 4000, '2015-02-17', 'unpaid', '2015', 'May'),
(49, 49, 'Personal Training', 4000, '2017-02-01', 'unpaid', '2017', 'Jun'),
(50, 50, 'Personal Training', 4000, '2013-11-17', 'unpaid', '2013', 'Jul'),
(51, 1, 'Lost Locker Key', 400, '2015-06-19', 'paid', '2015', 'Aug'),
(52, 2, 'Lost Towel(s)', 400, '2014-07-30', 'paid', '2014', 'Sep'),
(53, 3, 'Lost Towel(s)', 400, '2017-07-05', 'paid', '2017', 'Oct'),
(54, 4, 'Walk-in', 400, '2013-06-04', 'paid', '2013', 'Nov'),
(55, 5, 'Walk-in', 400, '2015-06-30', 'paid', '2015', 'Dec'),
(56, 6, 'Lost Towel(s)', 400, '2015-12-24', 'paid', '2015', 'Jan'),
(57, 7, 'Lost Towel(s)', 200, '2015-06-25', 'paid', '2015', 'Feb'),
(58, 8, 'Walk-in', 400, '2015-09-11', 'paid', '2015', 'Mar'),
(59, 9, 'Lost Towel(s)', 200, '2014-01-16', 'paid', '2014', 'May'),
(60, 10, 'Lost Locker Key', 200, '2017-03-29', 'paid', '2017', 'Jun'),
(61, 11, 'Lost Locker Key', 200, '2015-06-07', 'paid', '2015', 'Jul'),
(62, 12, 'Lost Locker Key', 200, '2013-09-17', 'paid', '2013', 'Aug'),
(63, 13, 'Walk-in', 400, '2013-11-09', 'paid', '2013', 'Sep'),
(64, 14, 'Walk-in', 400, '2013-09-11', 'paid', '2013', 'Oct'),
(65, 15, 'Lost Towel(s)', 50, '2017-09-24', 'paid', '2017', 'Nov'),
(66, 16, 'Lost Locker Key', 200, '2015-12-25', 'paid', '2015', 'Dec'),
(67, 17, 'Lost Towel(s)', 200, '2014-11-08', 'paid', '2014', 'Jan'),
(68, 18, 'Lost Towel(s)', 200, '2016-10-18', 'paid', '2016', 'Feb'),
(69, 19, 'Walk-in', 200, '2016-03-20', 'paid', '2016', 'Mar'),
(70, 20, 'Lost Towel(s)', 200, '2013-12-28', 'paid', '2013', 'May'),
(71, 21, 'Lost Locker Key', 200, '2015-11-22', 'paid', '2015', 'Jun'),
(72, 22, 'Walk-in', 400, '2013-07-31', 'paid', '2013', 'Jul'),
(73, 23, 'Lost Towel(s)', 200, '2015-08-15', 'paid', '2015', 'Aug'),
(74, 24, 'Lost Locker Key', 200, '2015-11-17', 'paid', '2015', 'Sep'),
(75, 25, 'Lost Towel(s)', 200, '2015-10-01', 'paid', '2015', 'Oct'),
(76, 26, 'Walk-in', 400, '2013-04-20', 'paid', '2013', 'Nov'),
(77, 27, 'Walk-in', 400, '2017-12-24', 'paid', '2017', 'Dec'),
(78, 28, 'Walk-in', 400, '2015-07-03', 'paid', '2015', 'Jan'),
(79, 29, 'Walk-in', 400, '2015-10-12', 'paid', '2015', 'Feb'),
(80, 30, 'Walk-in', 400, '2017-10-04', 'paid', '2017', 'Mar'),
(81, 31, 'Walk-in', 400, '2017-09-05', 'paid', '2017', 'May'),
(82, 32, 'Walk-in', 400, '2015-03-22', 'paid', '2015', 'Jun'),
(83, 33, 'Walk-in', 400, '2017-05-14', 'paid', '2017', 'Jul'),
(84, 34, 'Walk-in', 400, '2015-08-12', 'paid', '2015', 'Aug'),
(85, 35, 'Walk-in', 400, '2013-07-19', 'paid', '2013', 'Sep'),
(86, 36, 'Walk-in', 400, '2013-03-14', 'paid', '2013', 'Oct'),
(87, 37, 'Walk-in', 400, '2017-04-09', 'paid', '2017', 'Nov'),
(88, 38, 'Walk-in', 400, '2015-03-18', 'paid', '2015', 'Dec'),
(89, 39, 'Walk-in', 400, '2017-09-23', 'paid', '2017', 'Jan'),
(90, 40, 'Walk-in', 400, '2014-10-11', 'paid', '2014', 'Feb'),
(91, 41, 'Walk-in', 400, '2016-06-15', 'paid', '2016', 'Mar'),
(92, 42, 'Walk-in', 400, '2015-09-02', 'paid', '2015', 'May'),
(93, 43, 'Walk-in', 400, '2016-08-28', 'paid', '2016', 'Jun'),
(94, 44, 'Walk-in', 400, '2016-06-16', 'paid', '2016', 'Jul'),
(95, 45, 'Walk-in', 400, '2017-07-15', 'paid', '2017', 'Aug'),
(96, 46, 'Walk-in', 400, '2015-07-13', 'paid', '2015', 'Sep'),
(97, 47, 'Walk-in', 400, '2014-10-18', 'paid', '2014', 'Oct'),
(98, 48, 'Walk-in', 400, '2016-08-31', 'paid', '2016', 'Nov'),
(99, 49, 'Walk-in', 400, '2017-11-06', 'paid', '2017', 'Dec'),
(100, 50, 'Walk-in', 400, '2013-10-25', 'paid', '2013', 'Jan');

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
(1, 'Ang', '81dc9bdb52d04dc20036dbd8313ed055', 'coach', 0),
(2, 'Uy', '81dc9bdb52d04dc20036dbd8313ed055', 'coach', 0),
(3, 'Arellano', '81dc9bdb52d04dc20036dbd8313ed055', 'coach', 0),
(4, 'Morales', '81dc9bdb52d04dc20036dbd8313ed055', 'coach', 0),
(5, 'Fernandez', '81dc9bdb52d04dc20036dbd8313ed055', 'coach', 0),
(6, 'Pilalpi', '81dc9bdb52d04dc20036dbd8313ed055', 'coach', 0),
(7, 'Benjamin', '81dc9bdb52d04dc20036dbd8313ed055', 'coach', 0),
(8, 'Magbanua', '81dc9bdb52d04dc20036dbd8313ed055', 'coach', 0),
(9, 'Prado', '81dc9bdb52d04dc20036dbd8313ed055', 'coach', 0),
(10, 'Divinagracia', '81dc9bdb52d04dc20036dbd8313ed055', 'coach', 0),
(11, 'Larry', '81dc9bdb52d04dc20036dbd8313ed055', 'coach', 0),
(12, 'Menosa', '81dc9bdb52d04dc20036dbd8313ed055', 'coach', 0),
(13, 'Olis', '81dc9bdb52d04dc20036dbd8313ed055', 'coach', 0),
(65, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1),
(103, 'receptionist', '81dc9bdb52d04dc20036dbd8313ed055', 'receptionist', 0),
(107, 'Hans', '1234', 'coach', 0);

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
  MODIFY `AL_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `A_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=631;
--
-- AUTO_INCREMENT for table `backuphistory`
--
ALTER TABLE `backuphistory`
  MODIFY `backup_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `CLIENT_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `clientassignment`
--
ALTER TABLE `clientassignment`
  MODIFY `CA_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `COACH_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `E_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `equipmentinventory`
--
ALTER TABLE `equipmentinventory`
  MODIFY `EI_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `measurements`
--
ALTER TABLE `measurements`
  MODIFY `M_Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;
--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `MS_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `membershiptype`
--
ALTER TABLE `membershiptype`
  MODIFY `M_Code` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Pay_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
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
  MODIFY `SCS_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `towelinventory`
--
ALTER TABLE `towelinventory`
  MODIFY `TI_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `traininglog`
--
ALTER TABLE `traininglog`
  MODIFY `TL_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;
--
-- AUTO_INCREMENT for table `traininglogsession`
--
ALTER TABLE `traininglogsession`
  MODIFY `TLS_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;
--
-- AUTO_INCREMENT for table `trainingpackage`
--
ALTER TABLE `trainingpackage`
  MODIFY `TP_Code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `TR_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
