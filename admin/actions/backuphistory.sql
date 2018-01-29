-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2018 at 08:29 PM
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
(11, 'Export', '2018-01-27', '03:25:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backuphistory`
--
ALTER TABLE `backuphistory`
  ADD PRIMARY KEY (`backup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backuphistory`
--
ALTER TABLE `backuphistory`
  MODIFY `backup_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
