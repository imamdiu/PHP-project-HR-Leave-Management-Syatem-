-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 07:44 AM
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
-- Table structure for table `updatee_educational_info`
--

CREATE TABLE `updatee_educational_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `degree_title` varchar(255) NOT NULL,
  `major_group` varchar(255) DEFAULT NULL,
  `inst_name` varchar(255) DEFAULT NULL,
  `uni_board` varchar(255) DEFAULT NULL,
  `pass_year` int(255) NOT NULL,
  `grade_division` varchar(255) DEFAULT NULL,
  `marks_cgpa` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updatee_educational_info`
--

INSERT INTO `updatee_educational_info` (`id`, `user_id`, `user_name`, `degree_title`, `major_group`, `inst_name`, `uni_board`, `pass_year`, `grade_division`, `marks_cgpa`, `remarks`) VALUES
(1, 2, 'aalim', 'Bachelor/ Honors ', 'Computer Science & enginerring', 'Daffodil International Unuversity', 'Daffodil International Unuversity', 2014, '3.38', '4.00', ' Average result.'),
(2, 3, 'imam', 'H.S.C', 'Science', 'Govt. Kabi Nazrul Colleage', 'Dhaka', 2009, '4.10', '5.00', 'Not very good result. '),
(3, 1, 'admin', '', NULL, NULL, NULL, 0, NULL, NULL, ''),
(4, 0, '', 'S.S.C', 'Science', 'Panchgachai Union High School', 'Comillah', 2007, '4.56', '5.00', 'Not a very good result.'),
(5, 0, '', 'S.S.C', 'Science', 'Panchgachai Union High School', 'Comillah', 2009, '3.38', '5.00', 'xzxz'),
(6, 3, 'imam', 'S.S.C', 'Science', 'Panchgachai Union High School', 'Comillah', 2007, '4.56', '5.00', ' Not a very good result.'),
(7, 0, '', 'Diploma ', '', '', '', 0, '', '', ' '),
(8, 0, '', 'Diploma ', '', '', '', 0, '', '', ' '),
(9, 3, '', 'Diploma ', '', '', '', 0, '', '', ' '),
(10, 3, '', 'Bachelor/ Honors ', '', '', '', 0, '', '', ' '),
(11, 3, '', 'Masters  ', '', '', '', 0, '', '', ' '),
(12, 3, '', 'Masters  ', '', '', '', 0, '', '', ' '),
(13, 3, '', 'Bachelor/ Honors ', '', '', '', 0, '', '', ' '),
(14, 3, '', 'Bachelor/ Honors ', '', '', '', 0, '', '', ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `updatee_educational_info`
--
ALTER TABLE `updatee_educational_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `updatee_educational_info`
--
ALTER TABLE `updatee_educational_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
