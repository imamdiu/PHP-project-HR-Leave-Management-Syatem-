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
(1, 2, 'aalim', 'Bachelor/ Honors', 'Computer Science & enginerring', 'Daffodil International Unuversity', 'Daffodil International Unuversity', 2014, '3.38', '4.00', '    Average result.'),
(3, 1, 'admin', 'S.S.C', 'Science', 'ABC School', 'Dhaka', 2012, '5.00', '4.68', ' Very Good result'),
(4, 0, '', 'S.S.C', 'Science', 'Panchgachai Union High School', 'Comillah', 2007, '4.56', '5.00', 'Not a very good result.'),
(5, 0, '', 'S.S.C', 'Science', 'Panchgachai Union High School', 'Comillah', 2009, '3.38', '5.00', 'xzxz'),
(6, 3, 'imam', 'Diploma', 'Science', 'Panchgachai Union High School', 'Comillah', 2007, '5.00', '4.56', '    Not a very good result.'),
(7, 0, '', 'Diploma ', '', '', '', 0, '', '', ' '),
(8, 0, '', 'Diploma ', '', '', '', 0, '', '', ' '),
(15, 3, '', 'Bachelor/ Honors', 'Science  ', 'Govt. Kabi Nazrul Isalm', 'Dhaka', 2009, '5.00', '4.10', '   Average result. Please '),
(17, 3, '', 'S.S.C', 'Computer Science & Engineering', 'Daffodil International University', 'Daffodil International University', 2018, '4.00', '3.44', '    Good'),
(26, 1, '', 'Bachelor/ Honors', 'Economices', 'SUST', 'SUST', 2012, '4.00', '3.67', '    Good result'),
(57, 2, '', 'Diploma ', 'Science  ', 'Govt. Kabi Nazrul Isalm', 'Dhaka', 2003, '5.00', '4.10', ' Good'),
(58, 2, '', 'S.S.C', 'Science  ', 'Govt. Kabi Nazrul Isalm', 'Dhaka', 2003, '5.00', '4.00', ' df'),
(69, 0, '', 'H.S.C', '', '', '', 2003, '4.10', '5.00', ' '),
(70, 0, '', 'H.S.C', '', '', '', 2003, '4.10', '5.00', ' '),
(71, 2, '', 'Diploma ', 'Science  ', '', '', 2003, '5.00', '5.00', ' '),
(72, 2, '', 'Bachelor/ Honors ', 'Science  ', '', '', 2003, '5.00', '5.00', ' '),
(79, 3, '', 'Masters  ', 'Science  ', 'Govt. Kabi Nazrul Isalm', 'Dhaka', 2003, '5.00', '5.00', ' '),
(80, 3, '', 'S.S.C', 'Science  ', 'Govt. Kabi Nazrul Isalm', 'Dhaka', 2003, '5.00', '5.00', ' '),
(81, 3, '', 'S.S.C', 'Science  ', 'Govt. Kabi Nazrul Isalm', 'Dhaka', 2003, '5.00', '5.00', ' '),
(82, 1, '', 'H.S.C', 'se ', 'SUST', 'SUST', 2003, '5.00', '4.56', ' good'),
(85, 0, '', 'H.S.C', 'Science  ', 'Govt. Kabi Nazrul Isalm', 'Dhaka', 1212, '5.00', '12', ' '),
(87, 0, '', 'S.S.C', 'Science  ', 'Govt. Kabi Nazrul Isalm', 'Dhaka', 1212, '4.10', '5.00', ' '),
(88, 6, 'imam', 'S.S.C', 'Science  ', 'Panchgachia Union High School', 'Comillah', 1212, '4.10', '5.00', '  ewe'),
(89, 0, '', 'S.S.C', 'Science  ', 'Govt. Kabi Nazrul Isalm', 'Dhaka', 1212, '4.10', '5.00', ' wqe'),
(90, 0, '', 'H.S.C', 'Science  ', 'Govt. Kabi Nazrul Isalm', 'Comillah', 2003, '5.00', '3.44', ' good'),
(91, 6, '', 'H.S.C', 'Science  ', 'Govt. Kabi Nazrul Isalm', 'Dhaka', 2012, '5.00', '4.10', ' '),
(92, 7, '', 'S.S.C', 'Science  ', 'Govt. Kabi Nazrul Isalm', 'Dhaka', 1212, '4.10', '5.00', ' ds'),
(93, 7, '', 'H.S.C', 'Science  ', 'Govt. Kabi Nazrul Isalm', 'Dhaka', 2003, '5.00', '4.98', '  good'),
(94, 8, 'aalim', 'S.S.C', 'Science  ', 'Panchgachia Union High School', 'Comillah', 2003, '5.00', '4.00', ' Good'),
(96, 8, '', 'H.S.C', 'Science  ', 'Govt. Kabi Nazrul Isalm', 'Dhaka', 2008, '5.00', '3.44', ' dfd'),
(97, 6, '', 'Bachelor/ Honors ', 'Computer Science & Engineering', 'Daffodil International University', 'Daffodil International University', 2014, '4.00', '3.44', ' Neat international standard result.'),
(98, 9, 'aalim', '', NULL, NULL, NULL, 0, NULL, NULL, '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
