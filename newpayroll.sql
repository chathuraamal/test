-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2015 at 12:05 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newpayroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_outbox`
--

CREATE TABLE IF NOT EXISTS `admin_outbox` (
`ao_id` int(11) NOT NULL,
  `staff_id` int(100) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `msg_subject` text NOT NULL,
  `msg_msg` text NOT NULL,
  `sent_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assert`
--

CREATE TABLE IF NOT EXISTS `assert` (
`assert_id` int(8) NOT NULL,
  `branch_id` int(5) NOT NULL,
  `type` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `trade_name` varchar(100) NOT NULL,
  `serial_no` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `memory_type` varchar(100) NOT NULL,
  `ram_capacity` varchar(50) NOT NULL,
  `hard_capacity` varchar(50) NOT NULL,
  `rom_type` int(2) NOT NULL,
  `moniter` varchar(50) NOT NULL,
  `monitor_serial` varchar(50) NOT NULL,
  `ups_trade` varchar(50) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `ups_serial` varchar(50) NOT NULL,
  `printer_trade` varchar(50) NOT NULL,
  `printer_serial` varchar(50) NOT NULL,
  `os_type` varchar(50) NOT NULL,
  `oos_key` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `other` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assert`
--

INSERT INTO `assert` (`assert_id`, `branch_id`, `type`, `division`, `trade_name`, `serial_no`, `model`, `processor`, `memory_type`, `ram_capacity`, `hard_capacity`, `rom_type`, `moniter`, `monitor_serial`, `ups_trade`, `capacity`, `ups_serial`, `printer_trade`, `printer_serial`, `os_type`, `oos_key`, `user`, `other`, `status`, `comment`, `added_date`) VALUES
(103, 1, 'Assert Type ', 'Division ', 'Assert Type  ', 'Assert Serial No ', 'Model ', 'Processor Speed ', 'Memory Type ', 'RAM Capacity ', 'Hard Capacity ', 1, 'Monitor Trade ', 'Monitor Serial No ', 'UPS Trade Name ', 'UPS Serial No ', 'ups Capacity ', 'Printer Trade Name ', 'Printer Serial No ', 'OS Type ', 'OS License Key ', 'User ', 'Status ', 'Comments ', 'Other Information ', '2012-05-26 18:16:09'),
(104, 1, 'sfds', 'sfsfd', 'fsfsf', 'sfs', 'sfsfs', 'fsff', 'sfs', 'sfsfss', 'fs', 0, 'sfs', 'sfsf', 'sf', 'sfs', 'sfsf', 'sfsf', 'sfs', 'sfsfs', 'sf', 'fsfsf', 'fss', 'fsfsf', 'sf', '2012-05-27 06:45:43');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `empno` varchar(6) NOT NULL,
  `work_date` date NOT NULL,
  `in_time` time NOT NULL,
  `out_time` time NOT NULL,
  `late_duration` int(10) NOT NULL,
  `overtime` int(10) NOT NULL,
  `attendance` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `dept_id` int(5) NOT NULL,
  `dept_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(1, 'admin'),
(2, 'hr'),
(3, 'marketing'),
(4, 'recovery'),
(5, 'legal'),
(6, 'it');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE IF NOT EXISTS `designation` (
  `designation_id` int(5) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `basic` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation`, `basic`) VALUES
(1, 'junior executive', 10000),
(2, 'executive', 15000),
(3, 'senior executive', 20000),
(4, 'assistant manager', 25000),
(5, 'manager', 30000),
(6, 'senior manager', 35000),
(7, 'assitant general manager', 40000),
(8, 'general manager', 50000),
(9, 'ceo', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
`id` int(5) NOT NULL,
  `epfno` int(6) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `department` int(5) NOT NULL,
  `designation` int(5) NOT NULL,
  `appointment_date` date NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `epfno`, `fname`, `lname`, `dob`, `address`, `phone`, `department`, `designation`, `appointment_date`, `password`) VALUES
(2, 1, 'andy', 'carson', '1955-10-07', '12,test st,colombo', 123456789, 1, 1, '2014-10-20', '123.123'),
(3, 2, 'jhon', 'kerry', '1950-10-07', '12,one road,newyork', 123456789, 2, 2, '2015-10-06', '123.123'),
(5, 3, 'roshantha', 'kannangara', '2015-10-14', '12,test road,colombo', 1234567890, 2, 4, '2015-10-01', '123.123');

-- --------------------------------------------------------

--
-- Table structure for table `register_staff`
--

CREATE TABLE IF NOT EXISTS `register_staff` (
`staff_id` int(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `department` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `years` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_staff`
--

INSERT INTO `register_staff` (`staff_id`, `fname`, `sex`, `birthday`, `department`, `position`, `grade`, `years`, `username`, `password`, `date_registered`) VALUES
(1, 'Manoj Saman', 'Male', '1989-06-06', 'I.T.', 'GMD/CEO', '18', '18', 'Manoj', '1234', '2013-06-29 20:44:29'),
(2, 'Semini Dayathma', 'Female', '1988-12-16', 'Human Resources', 'Manager', '12', '15', 'Semini', '12345', '2013-06-29 20:54:48'),
(3, 'Shalika Priyadarshani', 'Female', '1988-11-26', 'I.T.', 'Manager', '6', '13', 'Shalika', '123456', '2013-06-29 20:56:07'),
(4, 'Hishali Shanika', 'Female', '1990-07-21', 'Accounting', 'As. Director', '6', '15', 'Hishali', 'Hi1', '2013-06-30 01:12:55'),
(6, 'Isuru Aravinda', 'Male', '1980-12-31', 'Administration', 'Manager', '7', '16', 'Isuru', 'Is1', '2013-06-30 01:14:43'),
(7, 'Sangeetha samanmalee', 'Female', '1987-11-08', 'Administration', 'As.Manager', '9', '14', 'Sangeetha', 'Sa1', '2013-06-30 01:15:43'),
(8, 'Erandi Nayanathara', 'Female', '1990-12-31', 'Marketing', 'As.Manager', '13', '16', 'Erandi', 'erandi', '2013-06-30 17:22:47'),
(9, 'Harmith Hassim', 'Male', '1997-04-28', 'Production', 'Director', '13', '16', 'Harmith', 'harmith', '2013-06-30 17:35:07'),
(10, 'Thakshila Perera', 'Female', '1970-03-11', 'Human Resources', 'Supervisor', '18', '16', 'Thakshila', 'thakshila', '2013-06-30 17:50:43'),
(11, 'Kalani Gunasekara', 'Female', '1967-09-23', 'Accounting', 'Head', '9', '12', 'kalani', 'kalani', '2013-06-30 17:51:50'),
(12, 'Devin samarakon', 'Male', '1950-07-17', 'Marketing', 'Ass. Head', '20', '20', 'Devin', 'devin', '2013-06-30 17:53:18'),
(13, 'Shaheen Saboor', 'Male', '1998-03-01', 'Research', 'Head', '12', '16', 'Shaheen', 'shaheen', '2013-06-30 20:09:42'),
(14, 'yasantha Balasuriya', 'Male', '1977-06-26', 'Marketing', 'Clerk', '5', '12', 'Yasantha', 'yasantha', '2013-07-01 20:21:50'),
(15, 'Nashath Hardy', 'Male', '2010-07-12', 'Accounting', 'Director', '25', '10', 'Nashath', 'nashath', '2013-07-26 17:33:15'),
(16, 'test', 'Male', '2015-07-15', 'Human Resources', 'Supervisor', '1', '1', 'testtest', '1234', '2015-07-02 05:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
`salary_id` int(50) NOT NULL,
  `staff_id` int(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `years` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `basic` varchar(50) NOT NULL,
  `meal` varchar(50) NOT NULL,
  `housing` varchar(50) NOT NULL,
  `transport` varchar(50) NOT NULL,
  `entertainment` varchar(50) NOT NULL,
  `long_service` int(11) NOT NULL,
  `tax` varchar(50) NOT NULL,
  `totall` int(60) NOT NULL,
  `date_s` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`salary_id`, `staff_id`, `fname`, `department`, `position`, `years`, `grade`, `basic`, `meal`, `housing`, `transport`, `entertainment`, `long_service`, `tax`, `totall`, `date_s`) VALUES
(1, 1, 'Manoj Saman', 'I.T.', 'MD/CEO', '18', '18', '17237612', '263738', '2585641.8', '1379008.96', '344752.24', 301658, '1551385.08', 20561026, '2013-06-30 00:08:17'),
(2, 2, 'Semini Dayathma', 'Human Resources', 'Manager', '15', '12', '1998837', '637721', '299825.55', '159906.96', '39976.74', 34980, '179895.33', 2991352, '2013-06-30 00:09:05'),
(3, 3, 'Shalika Priyadarshani', 'I.T.', 'Manager', '13', '6', '7827627', '162783', '1174144.05', '626210.16', '0', 0, '704486.43', 9086278, '2013-06-30 00:09:28'),
(4, 4, 'Hishali Shanika', 'Accounting', 'As. Director', '15', '6', '500000', '50000', '75000', '40000', '0', 8750, '45000', 628750, '2013-06-30 17:20:05'),
(6, 6, 'Isuru Aravinda', 'Administration', 'Manager', '16', '7', '400000', '120000', '60000', '32000', '0', 7000, '36000', 583000, '2013-06-30 17:20:50'),
(7, 7, 'Sangeetha samanmalee', 'Administration', 'As.Manager', '14', '9', '820000', '50000', '123000', '65600', '16400', 0, '73800', 1001200, '2013-06-30 17:21:14'),
(9, 8, 'Erandi Nayanathara', 'Marketing', 'As.Manager', '16', '13', '465344', '124434', '69801.6', '37227.52', '9306.88', 8144, '41880.96', 672377, '2013-06-30 17:32:12'),
(10, 9, 'Harmith Hassim', 'Production', 'Director', '16', '13', '700000', '245856', '105000', '56000', '14000', 12250, '63000', 1070106, '2013-06-30 17:35:38'),
(11, 10, 'Thakshila Perera', 'Human Resources', 'Supervisor', '16', '18', '890000', '234676', '133500', '71200', '17800', 15575, '80100', 1282651, '2013-06-30 20:13:48'),
(16, 11, 'Kalani Gunasekara', 'Accounting', 'Head', '12', '9', '100000', '100000', '15000', '8000', '2000', 0, '9000', 216000, '2013-06-30 20:18:14'),
(17, 12, 'Devin samarakon', 'Marketing', 'Ass. Head', '20', '20', '200000', '10000', '30000', '16000', '4000', 3500, '18000', 245500, '2013-06-30 20:18:35'),
(18, 13, 'Shaheen Saboor', 'Research', 'Head', '16', '12', '500000', '200000', '75000', '40000', '10000', 8750, '45000', 788750, '2013-06-30 20:18:48'),
(20, 1, 'Manoj Saman', 'I.T.', 'MD/CEO', '18', '18', '17237612', '1000000', '2585641.8', '1379008.96', '344752.24', 301658, '1551385.08', 21297288, '2013-07-01 07:08:07'),
(21, 2, 'Semini Dayathma', 'Human Resources', 'Manager', '15', '12', '2000000', '32424', '300000', '160000', '40000', 35000, '180000', 2387424, '2013-07-01 07:08:58'),
(25, 3, 'Shalika Priyadarshani', 'I.T.', 'Manager', '13', '6', '1000000', '1000000', '150000', '80000', '0', 0, '90000', 2140000, '2013-07-02 10:03:45'),
(26, 4, 'Hishali Shanika', 'Accounting', 'As. Director', '15', '6', '2004898', '1873783', '300734.7', '160391.84', '0', 35086, '180440.82', 4194452, '2013-07-02 10:04:24'),
(27, 6, 'Isuru Aravinda', 'Administration', 'Manager', '16', '7', '500000', '500000', '75000', '40000', '0', 8750, '45000', 1078750, '2013-07-02 10:04:37'),
(28, 7, 'Sangeetha samanmalee', 'Administration', 'As.Manager', '14', '9', '545766', '128473', '81864.9', '43661.28', '10915.32', 0, '49118.94', 761562, '2013-07-02 10:05:46'),
(30, 8, 'Erandi Nayanathara', 'Marketing', 'As.Manager', '16', '13', '721538', '252713', '108230.7', '57723.04', '14430.76', 12627, '64938.42', 1102324, '2013-07-02 10:08:52'),
(31, 9, 'Harmith Hassim', 'Production', 'Director', '16', '13', '8739928', '183732', '1310989.2', '699194.24', '174798.56', 152949, '786593.52', 10474997, '2013-07-02 10:18:01'),
(32, 10, 'Thakshila Perera', 'Human Resources', 'Supervisor', '16', '18', '83671', '777229', '12550.65', '6693.68', '1673.42', 1464, '7530.39', 875752, '2013-07-02 10:18:34'),
(33, 11, 'Kalani Gunasekara', 'Accounting', 'Head', '12', '9', '23232', '131311', '3484.8', '1858.56', '464.64', 0, '2090.88', 158260, '2013-07-02 10:18:51'),
(34, 12, 'Devin samarakon', 'Marketing', 'Ass. Head', '20', '20', '773883', '363633', '116082.45', '61910.64', '15477.66', 13543, '69649.47', 1274880, '2013-07-02 10:19:17'),
(35, 15, 'Nashath Hardy', 'Accounting', 'Director', '10', '25', '1000000', '100000', '150000', '80000', '20000', 0, '90000', 1260000, '2013-07-26 17:35:24');

-- --------------------------------------------------------

--
-- Table structure for table `staff_inbox`
--

CREATE TABLE IF NOT EXISTS `staff_inbox` (
`id` int(11) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `msg_subject` text NOT NULL,
  `msg_msg` text NOT NULL,
  `received_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_inbox`
--

INSERT INTO `staff_inbox` (`id`, `staff_id`, `sender`, `receiver`, `msg_subject`, `msg_msg`, `received_date`) VALUES
(1, '1', '2', 'Semini Dayathma', 'Hi', 'This is the abstract of the project/business feasibility for the donor.  It is the first thing that the donor will read.  It should be direct, clear and concise.  The content of the summary should include who you are, the scope of your project and cost. Your Executive Summary should be able to arrest the attention of the reviewing officer.  For example, the Executive Summary of NOIC proposal for collaboration with Local Governments in Lagos State (November 2001) is as follows:', '2013-08-12 20:36:17'),
(2, '', '1', 'Isuru Aravinda', '', 'This is the abstract of the project/business feasibility for the donor.  It is the first thing that the donor will read.  It should be direct, clear and concise.  The content of the summary should include who you are, the scope of your project and cost. Your Executive Summary should be able to arrest the attention of the reviewing officer.  For example, the Executive Summary of NOIC proposal for collaboration with Local Governments in Lagos State (November 2001) is as follows:\r\n\r\n\r\nThis is the abstract of the project/business feasibility for the donor.  It is the first thing that the donor will read.  It should be direct, clear and concise.  The content of the summary should include who you are, the scope of your project and cost. Your Executive Summary should be able to arrest the attention of the reviewing officer.  For example, the Executive Summary of NOIC proposal for collaboration with Local Governments in Lagos State (November 2001) is as follows:', '2013-08-12 20:37:55'),
(3, '2', '1', 'Shaheen Sabor', 'Hi', 'This is the abstract of the project/business feasibility for the donor.  It is the first thing that the donor will read.  It should be direct, clear and concise.  The content of the summary should include who you are, the scope of your project and cost. Your Executive Summary should be able to arrest the attention of the reviewing officer.  For example, the Executive Summary of NOIC proposal for collaboration with Local Governments in Lagos State (November 2001) is as follows:This is the abstract of the project/business feasibility for the donor.  It is the first thing that the donor will read.  It should be direct, clear and concise.  The content of the summary should include who you are, the scope of your project and cost. Your Executive Summary should be able to arrest the attention of the reviewing officer.  For example, the Executive Summary of NOIC proposal for collaboration with Local Governments in Lagos State (November 2001) is as follows:This is the abstract of the project/business feasibility for the donor.  It is the first thing that the donor will read.  It should be direct, clear and concise.  The content of the summary should include who you are, the scope of your project and cost. Your Executive Summary should be able to arrest the attention of the reviewing officer.  For example, the Executive Summary of NOIC proposal for collaboration with Local Governments in Lagos State (November 2001) is as follows:', '2013-08-12 20:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `staff_outbox`
--

CREATE TABLE IF NOT EXISTS `staff_outbox` (
`so_id` int(11) NOT NULL,
  `staff_id` int(50) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `msg_subject` text NOT NULL,
  `msg_msg` text NOT NULL,
  `date_sent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_outbox`
--

INSERT INTO `staff_outbox` (`so_id`, `staff_id`, `sender`, `receiver`, `msg_subject`, `msg_msg`, `date_sent`) VALUES
(1, 1, '2', 'Semini Dayathma', 'Hi', 'This is the abstract of the project/business feasibility for the donor.  It is the first thing that the donor will read.  It should be direct, clear and concise.  The content of the summary should include who you are, the scope of your project and cost. Your Executive Summary should be able to arrest the attention of the reviewing officer.  For example, the Executive Summary of NOIC proposal for collaboration with Local Governments in Lagos State (November 2001) is as follows:', '2013-08-12 20:36:17'),
(3, 2, '1', 'Isuru Aravinda', 'Hi', 'This is the abstract of the project/business feasibility for the donor.  It is the first thing that the donor will read.  It should be direct, clear and concise.  The content of the summary should include who you are, the scope of your project and cost. Your Executive Summary should be able to arrest the attention of the reviewing officer.  For example, the Executive Summary of NOIC proposal for collaboration with Local Governments in Lagos State (November 2001) is as follows:This is the abstract of the project/business feasibility for the donor.  It is the first thing that the donor will read.  It should be direct, clear and concise.  The content of the summary should include who you are, the scope of your project and cost. Your Executive Summary should be able to arrest the attention of the reviewing officer.  For example, the Executive Summary of NOIC proposal for collaboration with Local Governments in Lagos State (November 2001) is as follows:This is the abstract of the project/business feasibility for the donor.  It is the first thing that the donor will read.  It should be direct, clear and concise.  The content of the summary should include who you are, the scope of your project and cost. Your Executive Summary should be able to arrest the attention of the reviewing officer.  For example, the Executive Summary of NOIC proposal for collaboration with Local Governments in Lagos State (November 2001) is as follows:', '2013-08-12 20:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `variables`
--

CREATE TABLE IF NOT EXISTS `variables` (
  `housing` float NOT NULL,
  `transport` float NOT NULL,
  `tax` float NOT NULL,
  `entertainment` float NOT NULL,
  `long_service` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `variables`
--

INSERT INTO `variables` (`housing`, `transport`, `tax`, `entertainment`, `long_service`) VALUES
(0.15, 0.08, 0.09, 0.02, 0.0175);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_outbox`
--
ALTER TABLE `admin_outbox`
 ADD PRIMARY KEY (`ao_id`);

--
-- Indexes for table `assert`
--
ALTER TABLE `assert`
 ADD PRIMARY KEY (`assert_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
 ADD PRIMARY KEY (`empno`,`work_date`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
 ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
 ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `epfno` (`epfno`), ADD KEY `designation` (`designation`);

--
-- Indexes for table `register_staff`
--
ALTER TABLE `register_staff`
 ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
 ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `staff_inbox`
--
ALTER TABLE `staff_inbox`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_outbox`
--
ALTER TABLE `staff_outbox`
 ADD PRIMARY KEY (`so_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_outbox`
--
ALTER TABLE `admin_outbox`
MODIFY `ao_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `assert`
--
ALTER TABLE `assert`
MODIFY `assert_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `register_staff`
--
ALTER TABLE `register_staff`
MODIFY `staff_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
MODIFY `salary_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `staff_inbox`
--
ALTER TABLE `staff_inbox`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `staff_outbox`
--
ALTER TABLE `staff_outbox`
MODIFY `so_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
