-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 04:15 AM
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
(12, 1, 'admin', '02-12-2018', '12-12-2018', '12-12-2018', '1', '', '19-12-2018'),
(13, 3, 'imam', '29-10-2018', '23-01-2019', '30-01-2019', '7', '', '29-11-2018');

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
(32, 3, 'imam', '03-12-2018', '10-12-2018', '12-12-2018', '3', 'jhjhj', '13-12-2018'),
(33, 3, 'imam', '24-12-2018', '26-12-2018', '27-12-2018', '1', 'hghg', '29-12-2018');

-- --------------------------------------------------------

--
-- Table structure for table `leave_leadger`
--

CREATE TABLE `leave_leadger` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `leave_enjoy` int(20) NOT NULL,
  `leave_add` int(20) NOT NULL,
  `leave_balance` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(35, 5, '', NULL, NULL, '', '', NULL, NULL, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `updatee_educational_info`
--

CREATE TABLE `updatee_educational_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
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

INSERT INTO `updatee_educational_info` (`id`, `user_id`, `degree_title`, `major_group`, `inst_name`, `uni_board`, `pass_year`, `grade_division`, `marks_cgpa`, `remarks`) VALUES
(1, 2, '', NULL, NULL, NULL, 0, NULL, NULL, ''),
(2, 3, 'H.S.C', 'Science  ', 'Govt. Kabi Nazrul Isalm', 'Dhaka', 2009, '4.10', '5.00', 'good');

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
(61, 5, '', '', '', '', '', '', '', '', '', '', '', '');

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
  `image` varchar(255) NOT NULL,
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

INSERT INTO `users` (`user_id`, `user_role_id`, `user_name`, `email`, `pass`, `image`, `department`, `designation`, `joining_date`, `emp_leave_enjoy`, `emp_leave_balance`, `last_leave_date`, `regDate`, `status`) VALUES
(1, 1, 'admin', 'admin@jsbl.com', '202cb962ac59075b964b07152d234b70', '1547119906_6665.jpg', 'Marketing', 'Manager', '2013-01-01', '19.00', '19.00', '2018-12-03', '2018-10-16 11:37:26', 'active'),
(2, 2, 'aalim', 'aalim@jsbl.com', '202cb962ac59075b964b07152d234b70', '1543737685_1863.jpg', 'Admin', 'COO', '2014-04-24', '0.00', '5.00', '2018-11-19', '2018-11-01 00:00:00', 'active'),
(3, 2, 'imam', 'imam@jsbl.com', '202cb962ac59075b964b07152d234b70', '1547102156_7808.jpg', 'IT', 'Head of IT', '2016-02-20', '16.00', '20.00', '2018-12-27', '2018-11-12 09:23:24', 'deactive'),
(4, 2, 'raz', 'raz@jsbl.com', '202cb962ac59075b964b07152d234b70', '1547107280_2148.png', 'Admin', 'COO', '2019-01-01', '0.00', '5.00', '2019-01-03', '2019-01-07 11:24:49', ''),
(5, 2, 'mukter', 'mukter@jsl.com', '202cb962ac59075b964b07152d234b70', '1547107549_6781.jpg', 'Office Assistant', 'Jonior Office Assistant', '2018-01-01', '0.00', '5.50', '2019-01-01', '2019-01-10 14:02:31', '');

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
-- Indexes for table `leave_leadger`
--
ALTER TABLE `leave_leadger`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `leave_form_history`
--
ALTER TABLE `leave_form_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `leave_leadger`
--
ALTER TABLE `leave_leadger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `updatee_educational_info`
--
ALTER TABLE `updatee_educational_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `updatee_personal_info`
--
ALTER TABLE `updatee_personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
