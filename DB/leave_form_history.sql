-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2019 at 01:17 PM
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
(19, 3, 'raz', '20-11-2018', '26-11-2018', '28-11-2018', '3', 'enjoy leave ................', '29-11-2018'),
(32, 6, 'imam', '', '', '', '', '', ''),
(33, 9, 'aalim', '', '', '', '', '', ''),
(34, 6, 'imam', '', '', '', '', '', ''),
(35, 6, 'imam', '', '', '', '', '', ''),
(36, 6, 'imam', '', '', '', '', '', ''),
(37, 1, 'admin', '02-12-2018', '12-12-2018', '12-12-2018', '1', '', '19-12-2018'),
(38, 6, 'imam', '', '', '', '', '', ''),
(39, 6, 'admin', '', '', '', '', '', ''),
(40, 6, 'admin', '', '', '', '', '', ''),
(41, 6, 'imam', '', '', '', '', '', ''),
(42, 0, '', '', '', '', '', '', ''),
(43, 6, 'imam', '', '', '', '', 'good', '28-01-2019'),
(44, 6, 'imam', '', '', '', '', '', '20-01-2019'),
(45, 1, 'admin', '', '', '', '', '', ''),
(46, 1, 'admin', '', '', '', '', '', ''),
(47, 6, 'imam', '', '', '', '', '', ''),
(48, 6, '', '', '', '', '', '', ''),
(49, 6, '', '', '', '', '', '', ''),
(50, 6, 'imam', '', '', '', '', '', ''),
(51, 1, 'admin', '', '', '', '', '', ''),
(52, 1, 'admin', '', '', '', '', '', ''),
(53, 6, 'imam', '', '', '', '', '', ''),
(54, 1, 'admin', '', '', '', '', '', ''),
(55, 6, 'imam', '', '', '', '', '', ''),
(56, 1, 'admin', '', '', '', '', '', ''),
(57, 1, 'admin', '', '', '', '', '', ''),
(58, 1, '', '', '', '', '', '', ''),
(59, 1, 'admin', '', '', '', '', '', ''),
(60, 1, 'admin', '', '', '', '', '', ''),
(61, 6, 'imam', '16-01-2019', '21-01-2019', '22-01-2019', '2', 'Personal', '23-01-2019'),
(62, 6, 'imam', '16-01-2019', '23-01-2019', '24-01-2019', '1', 'fff', '26-01-2019'),
(63, 9, 'aalim', '16-01-2019', '21-01-2019', '21-01-2019', '1', 'good', '22-01-2019'),
(64, 9, 'aalim', '16-01-2019', '21-01-2019', '21-01-2019', '1', 'good', '30-01-2019'),
(65, 0, '', '', '', '', '', '', ''),
(66, 1, 'admin', '', '', '', '', '', ''),
(67, 9, 'aalim', '', '', '', '', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
