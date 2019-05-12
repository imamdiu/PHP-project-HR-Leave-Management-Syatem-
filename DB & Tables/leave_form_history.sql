-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 12:32 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `leave_form_history`
--

CREATE TABLE `leave_form_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `todaySdate` varchar(255) NOT NULL,
  `fromdate` varchar(255) NOT NULL,
  `todate` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `reason_leave` varchar(255) NOT NULL,
  `joindate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_form_history`
--

INSERT INTO `leave_form_history` (`id`, `user_id`, `user_name`, `todaySdate`, `fromdate`, `todate`, `days`, `reason_leave`, `joindate`) VALUES
(14, 4, 'raz', '27-11-2018', '28-11-2018', '29-11-2018', '1', 'sd', '29-11-2018'),
(16, 4, 'raz', '24-11-2018', '25-12-2018', '25-12-2018', '1', 'fdfd', '26-11-2018'),
(17, 4, 'raz', '29-11-2018', '21-01-2019', '23-01-2019', '3', 'dfdf', '24-01-2019'),
(18, 4, '', '', '', '', '', '', ''),
(19, 4, 'raz', '20-11-2018', '26-11-2018', '28-11-2018', '3', 'enjoy leave ................', '29-11-2018'),
(20, 4, '', '', '', '', '', '', ''),
(21, 4, 'raz', '05-11-2018', '06-11-2018', '07-11-2018', '2', 'leave..............', '08-11-2018'),
(22, 4, 'raz', '14-11-2018', '15-11-2018', '19-11-2018', '4', 'jjjjjjjjjj', '20-11-2018'),
(23, 3, 'imam', '27-11-2018', '28-11-2018', '28-11-2018', '1', 'For my brother,,,,,,,,,,,', '29-11-2018'),
(24, 4, 'raz', '20-11-2018', '16-12-2018', '18-12-2018', '3', 'dfd', '19-11-2018'),
(25, 19, 'mobin', '01-12-2018', '11-12-2018', '15-12-2018', '4', 'dfdf', '16-12-2018'),
(26, 3, 'imam', '15-11-2018', '21-11-2018', '21-11-2018', '9', 'fdf', '22-11-2018'),
(28, 20, 'imtiaz', '20-11-2018', '24-12-2018', '26-12-2018', '3', 'dfdf', '27-12-2018'),
(29, 3, 'imam', '02-12-2018', '21-11-2018', '22-11-2018', '1', 'dfd', '27-12-2018'),
(30, 22, 'fff', '02-12-2018', '17-12-2018', '19-12-2018', '3', 'dfd', '20-12-2018'),
(31, 3, 'imam', '02-12-2018', '17-12-2018', '17-12-2018', '1', 'gffgf', '18-12-2018'),
(32, 3, 'imam', '03-12-2018', '10-12-2018', '12-12-2018', '3', 'jhjhj', '13-12-2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leave_form_history`
--
ALTER TABLE `leave_form_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leave_form_history`
--
ALTER TABLE `leave_form_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
