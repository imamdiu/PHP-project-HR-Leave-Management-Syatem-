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
-- Table structure for table `updatee_contact_info`
--

CREATE TABLE `updatee_contact_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `mobile2` varchar(255) DEFAULT NULL,
  `email2` varchar(255) DEFAULT NULL,
  `em_name` varchar(255) NOT NULL,
  `em_mobile` varchar(255) NOT NULL,
  `em_mobile2` varchar(255) DEFAULT NULL,
  `em_email` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `thana` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `pthana` varchar(255) NOT NULL,
  `pdistrict` varchar(255) NOT NULL,
  `pdivision` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updatee_contact_info`
--

INSERT INTO `updatee_contact_info` (`id`, `user_id`, `mobile`, `mobile2`, `email2`, `em_name`, `em_mobile`, `em_mobile2`, `em_email`, `address`, `thana`, `district`, `division`, `paddress`, `pthana`, `pdistrict`, `pdivision`) VALUES
(1, 3, '12121212', '12121212', 'iiiii@gmail.com', 'asa', '12', '12', 'imam@gmail.com', '     df', 'fd', 'dfd', 'Barisal', '    dfdf', 'df', 'dfd', 'Barisal'),
(18, 1, '454', '454', 'imran_admin@jsbl.com', 'Muaz', '01722222', '017600000', 'muaz@gmail.com', 'Sukrabad  Jil Bangla Suger Mill', 'Dhanmidi', 'Dhaka', 'Barisal', 'Jil Bangla Suger Mill', 'Deouan Gong', 'JamalPur', 'Barisal'),
(20, 2, '', NULL, NULL, '', '', NULL, NULL, '', '', '', '', '', '', '', ''),
(33, 22, '12112', '12121', 'imam@gmail.com', 'dfdf', '23232', '232323', 'dfdf@gmail.com', ' dfd', 'dfdf', 'dfdfd', 'Dhaka', ' dfd', 'dfd', 'dfdf', 'Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `updatee_contact_info`
--
ALTER TABLE `updatee_contact_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `updatee_contact_info`
--
ALTER TABLE `updatee_contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
