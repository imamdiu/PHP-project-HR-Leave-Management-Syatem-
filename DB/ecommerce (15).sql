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
-- Table structure for table `leave_form_draft`
--

CREATE TABLE `leave_form_draft` (
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
-- Dumping data for table `leave_form_draft`
--

INSERT INTO `leave_form_draft` (`id`, `user_id`, `user_name`, `todaySdate`, `fromdate`, `todate`, `days`, `reason_leave`, `joindate`) VALUES
(56, 9, 'aalim', '22-01-2019', '21-01-2019', '28-01-2019', '7', '', '22-01-2019');

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

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL,
  `user_id` int(20) NOT NULL,
  `user_name` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `user_id`, `user_name`) VALUES
(64, 'This is  A. Alim ', 'New post form A. Alim', 2, 0),
(78, 's', 'qwq', 7, 0),
(85, 'ca', 'dfd', 22, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `id` int(11) NOT NULL,
  `user_role` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`id`, `user_role`) VALUES
(1, 'admin'),
(2, 'employee');

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
(1, 3, '12121212', '12121212', 'iiiii@gmail.com', 'asa', '12', '12', 'imam@gmail.com', '   House # 15/A, Road # 05, Block # F,', 'Banani', 'Dhanka', 'Barisal', 'electronic typesetting, remaining ', 'Matlob', 'Chadur', 'Barisal'),
(18, 1, '454', '454', 'imran_admin@jsbl.com', 'Muaz Hossain', '01722222', '017600000', 'muaz@gmail.com', '          Sukrabad  Jil Bangla Suger Mill', 'Dhanmidi', 'Dhaka', 'Barisal', '          Jil Bangla Suger Mill', 'Deouan Gong', 'JamalPurss', 'Barisal'),
(20, 2, '', NULL, NULL, '', '', NULL, NULL, '', '', '', '', '', '', '', ''),
(33, 22, '12112', '12121', 'imam@gmail.com', 'dfdf', '23232', '232323', 'dfdf@gmail.com', ' dfd', 'dfdf', 'dfdfd', 'Dhaka', ' dfd', 'dfd', 'dfdf', 'Dhaka'),
(34, 4, '', NULL, NULL, '', '', NULL, NULL, '', '', '', '', '', '', '', ''),
(35, 5, '', NULL, NULL, '', '', NULL, NULL, '', '', '', '', '', '', '', ''),
(36, 6, '0172643381', '', 'imam@gmail.com', 'Imam Hasan', '01726543382', '', 'hasan@gmail.com', ' 61/2 Sukrabad, Dhaka', 'Dhanmondi', 'Dhaka', 'Dhaka', ' Gangkanda', 'Daudkandi', 'Comillah', 'Chittagong'),
(37, 7, '', NULL, NULL, '', '', NULL, NULL, '', '', '', '', '', '', '', ''),
(38, 8, '', NULL, NULL, '', '', NULL, NULL, '', '', '', '', '', '', '', ''),
(39, 9, '', NULL, NULL, '', '', NULL, NULL, '', '', '', '', '', '', '', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_role_id` int(11) DEFAULT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `joining_date` varchar(20) NOT NULL,
  `emp_leave_enjoy` decimal(7,2) NOT NULL,
  `emp_leave_balance` decimal(7,2) NOT NULL,
  `last_leave_date` varchar(255) NOT NULL,
  `regDate` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_role_id`, `user_name`, `email`, `pass`, `profile_image`, `department`, `designation`, `joining_date`, `emp_leave_enjoy`, `emp_leave_balance`, `last_leave_date`, `regDate`, `status`) VALUES
(1, 1, 'admin', 'admin@jsbl.com', '202cb962ac59075b964b07152d234b70', '1547119906_6665.jpg', 'Marketing', 'Manager', '2013-01-01', '20.00', '18.00', '', '2018-10-16 11:37:26', 'active'),
(6, 2, 'imam', 'imam@jsbl.com', '202cb962ac59075b964b07152d234b70', '1547529744_6820.jpg', 'IT', 'Head of IT', '2016-02-15', '6.00', '4.00', '24-01-2019', '2019-01-15 11:21:24', ''),
(9, 2, 'aalim', 'aalim@jsbl.com', '202cb962ac59075b964b07152d234b70', '1547550259_6805.jpg', 'Admin', 'COO', '2014-04-30', '7.00', '1.50', '', '2019-01-15 17:03:35', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leave_form_draft`
--
ALTER TABLE `leave_form_draft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_form_history`
--
ALTER TABLE `leave_form_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updatee_contact_info`
--
ALTER TABLE `updatee_contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updatee_educational_info`
--
ALTER TABLE `updatee_educational_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updatee_personal_info`
--
ALTER TABLE `updatee_personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leave_form_draft`
--
ALTER TABLE `leave_form_draft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `leave_form_history`
--
ALTER TABLE `leave_form_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `updatee_contact_info`
--
ALTER TABLE `updatee_contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `updatee_educational_info`
--
ALTER TABLE `updatee_educational_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `updatee_personal_info`
--
ALTER TABLE `updatee_personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `update_leave_balance_daywise` ON SCHEDULE EVERY 1 DAY STARTS '2018-12-15 00:00:00' ENDS '2030-01-21 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE ecommerce.users SET emp_leave_balance = emp_leave_balance + 1.5$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
