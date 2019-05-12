-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2019 at 01:16 PM
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
-- Table structure for table `updatee_personal_info`
--

CREATE TABLE `updatee_personal_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `blood` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `about_you` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updatee_personal_info`
--

INSERT INTO `updatee_personal_info` (`id`, `user_id`, `fname`, `lname`, `father_name`, `mother_name`, `gender`, `dob`, `marital_status`, `blood`, `religion`, `nationality`, `nid`, `about_you`) VALUES
(15, 4, 'AL', 'Raziur Rhaman', 'Abu Raz', 'Ummey Raz', 'male', '1985-10-01', 'Married', 'B +ve', 'Islam', 'Bangladeshi', '199300003', '      this is Raz profiles.... 1993'),
(23, 2, 'Abdul', 'Alim', 'Abu A. Alim', 'Ummey A. Alim', 'others', '2016-09-26', 'Married', 'O +ve', 'Islam', 'European', '1993000003', '         This is A. Alim officer of JML is i Jalalabad Meatal Ltd.'),
(52, 1, 'Emran ', 'UL Azam', 'Abu Imran', 'Ummey Imran', 'male', '1980-02-12', 'Select Please', 'O +ve', 'Islam', 'Asian', '198500003', ' Accounts And Admin\r\nChef Accounts And Admin'),
(59, 19, 'Md.', 'Nazirul', 'Abu mobin', 'Ummey MObin', 'male', '1992-12-31', 'Married', 'A +ve', 'Islam', 'Bangladeshi', '192000002', ' Progmmer '),
(60, 3, 'Mohammad Imam', 'Hossain', 'Abu Imam', 'Ummey Imam', 'male', '1990-06-05', 'Select Please', 'O +ve', 'Islam', 'European', '198600000011212', '            This is Imam Hossain. Erp Project head and IT officer. Jalalalba Gruoup.'),
(61, 5, '', '', '', '', '', '', '', '', '', '', '', ''),
(62, 6, 'Imam', 'Hossain', 'Abu Imam', 'Ummey Imam', 'male', '1991-10-31', 'Single', 'O +ve', 'Islam', 'Bangladeshi', '19920006', 'Web designer & programmer.\r\nERP Project Head.  '),
(63, 7, '', '', '', '', '', '', '', '', '', '', '', ''),
(64, 8, '', '', '', '', '', '', '', '', '', '', '', ''),
(65, 9, 'dfd', 'f', 'ff', 'df', '', '2018-11-19', 'Select Please', 'Select Please', 'Select Please', 'Select Please', '123', ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `updatee_personal_info`
--
ALTER TABLE `updatee_personal_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `updatee_personal_info`
--
ALTER TABLE `updatee_personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
