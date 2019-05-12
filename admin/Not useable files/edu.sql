CREATE TABLE `updatee_educational_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
 
  `degree_title` varchar(255) NOT NULL,
  `major_group` varchar(255) DEFAULT NULL,
  `inst_name` varchar(255) DEFAULT NULL,
  `emuni_board_name` varchar(255) DEFAULT NULL,

  `pass_year` int(255) NOT NULL,
  `grade_division` varchar(255) DEFAULT NULL,
  `marks_cgpa` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) NOT NULL,


) 


CREATE TABLE `updatee_educational_info` (
  `id` int(11) NOT NULL auto_increment primary key,
  `user_id` int(11) NOT NULL,
 
  `degree_title` varchar(255) NOT NULL,
  `major_group` varchar(255) DEFAULT NULL,
  `inst_name` varchar(255) DEFAULT NULL,
  `uni_board` varchar(255) DEFAULT NULL,

  `pass_year` int(255) NOT NULL,
  `grade_division` varchar(255) DEFAULT NULL,
  `marks_cgpa` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB;