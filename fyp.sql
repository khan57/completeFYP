-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2018 at 01:19 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(10) NOT NULL,
  `name` text NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `mobile` text NOT NULL,
  `cnic` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `uname`, `pass`, `mobile`, `cnic`, `address`) VALUES
(1, 'Haseeb', 'haseeb123', 'haseeb', '0308552833', '611101', 'rwp'),
(2, 'Taimoor khan', 'tamoor2496', 'taimoor', '0312587979594646', '6110178945556', 'ISMALABAD'),
(3, 'Adnan khan', 'adnani', 'kohat', '4798651531561', '1284878948645564', 'kohat'),
(4, 'admin', 'admin', 'admin', '41541515', '454648484', 'rwp');

-- --------------------------------------------------------

--
-- Table structure for table `admin_shecdule`
--

CREATE TABLE IF NOT EXISTS `admin_shecdule` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `stime` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_shecdule`
--

INSERT INTO `admin_shecdule` (`id`, `name`, `day`, `stime`, `description`) VALUES
(1, 'test', '1', '10 am - 12pm', 'test description'),
(2, 'Cardio', '1', '7:00 AM - 8AM', 'Angel Adams'),
(3, 'Body Building', '2', '9:00 AM - 11AM', 'Angel Adams'),
(4, 'Taimoor Ali khan', '3', '10 am - 12pm', 'test description'),
(5, 'Client', '7', '7:00 AM - 8AM', 'test description'),
(6, 'hasseeb', '1', '5:00 pm', 'test description');

-- --------------------------------------------------------

--
-- Table structure for table `assignednutri`
--

CREATE TABLE IF NOT EXISTS `assignednutri` (
`id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `tid` int(10) NOT NULL,
  `day` text NOT NULL,
  `timee` text NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignednutri`
--

INSERT INTO `assignednutri` (`id`, `uid`, `tid`, `day`, `timee`, `des`) VALUES
(10, 2, 1, 'Saturday', 'breakfast', 'egggs and tea and cofee.'),
(11, 5, 1, 'Tuesday', 'lunch', 'dhcbh'),
(12, 2, 1, 'Monday', 'lunch', 's nac'),
(13, 2, 1, 'Monday', 'breakfast', 'chaii'),
(14, 2, 1, 'Monday', 'breakfast', '			dhal chaawal + one glass milk'),
(16, 16, 1, 'Wednesday', 'breakfast', 'tea + 3 eggs'),
(17, 16, 1, 'Tuesday', 'lunch', 'pasta + 2 roti'),
(18, 16, 1, 'Wednesday', 'dinner', 'roti + fried chicken .'),
(19, 6, 2, 'Monday', 'breakfast', '						egg			'),
(20, 6, 2, 'Wednesday', 'breakfast', 'j'),
(21, 6, 2, 'Monday', 'dinner', 'chiken'),
(22, 6, 2, 'Monday', 'breakfast', 'jojo	'),
(23, 16, 2, 'Saturday', 'breakfast', ' sdhsabdb'),
(24, 2, 2, 'Monday', 'breakfast', '			2 cup tea + 2 paratassssssssssssssssssssssssssssssssssssssssssssss'),
(26, 8, 2, 'Monday', 'breakfast', 'uyguygjuh');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
`id` int(100) NOT NULL,
  `complain_t` text NOT NULL,
  `c_b` text NOT NULL,
  `uid` int(11) NOT NULL,
  `tid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `complain_t`, `c_b`, `uid`, `tid`) VALUES
(1, 'Compalaints about health', 'back bone paian', 16, 0),
(2, 'jskandjk', '45jhs abs y', 16, 3),
(3, 'jskandjk', '45jhs abs y', 16, 3),
(4, 'jskandjk', '45jhs abs y', 16, 3),
(5, 'jskandjk', '45jhs abs y', 16, 3),
(6, 'jskandjk', '45jhs abs y', 16, 3),
(7, 'jskandjk', '45jhs abs y', 16, 3),
(8, 'jskandjk', '45jhs abs y', 16, 3);

-- --------------------------------------------------------

--
-- Table structure for table `enrolled`
--

CREATE TABLE IF NOT EXISTS `enrolled` (
`id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `tid` int(11) NOT NULL,
  `doj` date NOT NULL,
  `ed` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolled`
--

INSERT INTO `enrolled` (`id`, `uid`, `tid`, `doj`, `ed`) VALUES
(62, 6, 1, '2018-07-20', '2019-07-20'),
(63, 6, 2, '2018-07-20', '2019-07-20'),
(64, 7, 3, '2018-07-20', '2019-01-20'),
(65, 7, 1, '2018-07-20', '2019-01-20'),
(66, 7, 2, '2018-07-21', '2019-01-21'),
(67, 16, 2, '2018-07-22', '2018-10-22'),
(68, 16, 1, '2018-07-22', '2018-10-22'),
(70, 8, 1, '2018-07-31', '2019-07-31'),
(71, 8, 2, '2018-07-31', '2019-07-31'),
(72, 16, 1, '2018-08-07', '2018-11-07'),
(73, 16, 1, '2018-08-07', '2018-11-07'),
(74, 16, 1, '2018-08-07', '2018-11-07'),
(75, 17, 1, '2018-08-10', '2019-02-10'),
(76, 17, 3, '2018-08-10', '2019-02-10'),
(77, 17, 4, '2018-08-10', '2019-02-10'),
(78, 17, 2, '2018-08-10', '2019-02-10'),
(79, 2, 1, '2018-08-10', '2019-02-10'),
(80, 2, 2, '2018-08-10', '2019-02-10'),
(81, 2, 3, '2018-08-10', '2019-02-10'),
(82, 2, 4, '2018-08-10', '2019-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `etemp`
--

CREATE TABLE IF NOT EXISTS `etemp` (
`id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etemp`
--

INSERT INTO `etemp` (`id`, `title`, `start`, `end`) VALUES
(1, 'run', '2018-07-30', '2018-07-31'),
(4, 'wash', '2018-08-09', '2018-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`id` int(10) NOT NULL,
  `title` text NOT NULL,
  `decrip` text NOT NULL,
  `dati` text NOT NULL,
  `organizer` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `decrip`, `dati`, `organizer`, `img`) VALUES
(49, ' dhb', 'asdbj', '2018-07-18', 'Haseeb khan', 'fridge.jpg'),
(50, 'laptop', 'eight lifting competition is going to be held in described date.', '2018-08-13', 'taimoor1122', '97e48bd2ef943330164d5cf91416e444_400x400.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE IF NOT EXISTS `fees` (
`id` int(10) NOT NULL,
  `package` int(10) NOT NULL,
  `fees` int(10) NOT NULL,
  `speciality` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `package`, `fees`, `speciality`) VALUES
(1, 3, 5000, 'Cardiovascular'),
(5, 3, 5000, 'Cardiovascular'),
(6, 3, 5000, 'Cardiovascular'),
(7, 3, 5000, 'Cardiovascular');

-- --------------------------------------------------------

--
-- Table structure for table `financeresult`
--

CREATE TABLE IF NOT EXISTS `financeresult` (
`id` int(10) NOT NULL,
  `expenses` int(11) NOT NULL,
  `income` int(11) NOT NULL,
  `mn` int(11) NOT NULL,
  `yr` int(11) NOT NULL,
  `profit` int(11) NOT NULL,
  `loss` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `msalary`
--

CREATE TABLE IF NOT EXISTS `msalary` (
`id` int(10) NOT NULL,
  `tid` int(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
`nid` int(10) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `state` tinyint(1) NOT NULL,
  `tid` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`nid`, `title`, `body`, `state`, `tid`) VALUES
(2, 'message', 'class has been started', 1, 1),
(7, 'swimming', 'its coming', 1, 3),
(6, 'notificaton 2', 'dieting', 1, 1),
(8, 'jjhklhkl', 'jhjhk', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE IF NOT EXISTS `pays` (
`id` int(10) NOT NULL,
  `tid` int(10) NOT NULL,
  `frm` date NOT NULL,
  `too` date NOT NULL,
  `month` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`id`, `tid`, `frm`, `too`, `month`, `amount`) VALUES
(3, 1, '2018-08-14', '2018-08-07', 8, 500);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
`sid` int(10) NOT NULL,
  `timee` text NOT NULL,
  `datee` text NOT NULL,
  `session` text NOT NULL,
  `description` text NOT NULL,
  `instructor` int(10) NOT NULL,
  `too` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sid`, `timee`, `datee`, `session`, `description`, `instructor`, `too`) VALUES
(2, '17:45', '2018-08-22', 'therapy', 'lecturess,............', 2, '20:00'),
(3, '11:47', '2018-08-11', 'hagsjdxga', 'asdadadsadasd', 2, '08:52'),
(4, '07:53', '2018-09-11', 'dc', 'sdcs', 2, '09:54'),
(5, '', '', 'taimoor', 'dfesfs', 2, ''),
(6, '01:00', '2018-08-15', 'saSs', 'Sas', 2, '13:01'),
(7, '16:53', '2018-08-15', 'loss weight', 'every one', 2, '17:00'),
(8, '02:03', '2018-08-16', 'taimoor', 'qswsw', 2, '12:22');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE IF NOT EXISTS `trainer` (
`id` int(10) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `cnic` text NOT NULL,
  `mobile` text NOT NULL,
  `special` text NOT NULL,
  `timing` text NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `name`, `username`, `password`, `address`, `cnic`, `mobile`, `special`, `timing`, `img`) VALUES
(1, 'haseeb', 'hassiii', '55', '308', '555153135', '0', 'Cardiovascular', 'Evening', ''),
(2, 'Taimoor khan', 'taimoor1122', '1234', 'rwp', '546464', '46464', 'weigh gaining', 'evening', ''),
(3, 'abc', 'abcc', '5151', 'njnjn', '554151', '515', 'morning', 'Morning', ''),
(4, 'jbj', 'hassiii', 'jnjnjn', '454', '54541', '45', 'Strength Training', 'Morning', ''),
(5, 'Haseeb khattak', 'haseeb1234', 'haseeb', 'Rawalpindi', '5345645645', '4544545', 'Strength Training', 'Morning', 'body_parlour_gym_logo_design_by_hammadmalik-d3g07wp.jpg'),
(6, 'Haseeb khattak', 'haseeb1234', 'haseeb', 'Rawalpindi', '5345645645', '4544545', 'Strength Training', 'Morning', 'body_parlour_gym_logo_design_by_hammadmalik-d3g07wp.jpg'),
(7, 'Haseeb khattak', 'haseeb1234', 'haseeb', 'Rawalpindi', '5345645645', '4544545', 'Strength Training', 'Morning', 'body_parlour_gym_logo_design_by_hammadmalik-d3g07wp.jpg'),
(8, 'Haseeb khattak', 'haseeb1234', 'haseeb', 'Rawalpindi', '5345645645', '4544545', 'Strength Training', 'Morning', 'body_parlour_gym_logo_design_by_hammadmalik-d3g07wp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userfee`
--

CREATE TABLE IF NOT EXISTS `userfee` (
`id` int(11) NOT NULL,
  `uid` int(10) NOT NULL,
  `pdate` date NOT NULL,
  `amount` int(10) NOT NULL,
  `mnth` int(10) NOT NULL,
  `yeaar` int(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userfee`
--

INSERT INTO `userfee` (`id`, `uid`, `pdate`, `amount`, `mnth`, `yeaar`) VALUES
(1, 2, '2018-08-02', 4500, 8, 18),
(2, 3, '2018-08-15', 500, 8, 18),
(3, 5, '2017-02-07', 3000, 2, 17),
(4, 3, '2018-09-19', 1599, 9, 18);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` text NOT NULL,
  `uname` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cnic` text NOT NULL,
  `mobile` text NOT NULL,
  `address` text NOT NULL,
  `subtype` varchar(100) NOT NULL,
  `height` text NOT NULL,
  `weight` text NOT NULL,
  `img` text NOT NULL,
  `age` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `uname`, `password`, `email`, `cnic`, `mobile`, `address`, `subtype`, `height`, `weight`, `img`, `age`) VALUES
(2, 'Adnan', 'adnan112', '12', 'adnan@yahoo.com', '21215489484', '415151561', 'kohat', '6', '', '', '', 0),
(3, 'Junaid khan', 'junaid1', '1122', 'junaid@yahoo.com', '6564564', '664848494894', '6484848', '12', '', '', '', 33),
(4, 'abc', 'abc', '33', 'a@yahoo.com', '45648465', '151516', 'hty', '3', '7', '45', '', 40),
(5, 'pidepiiper', 'pide', 'pide', 'w@yahoo.com', '555', '55', 'isb', '3', '', '', '', 84),
(6, 'cc', 'c', 'c', 'c@yahoom', '1115', '151', 'rwp', '12', '6', '', '', 5),
(7, 'gvg', 'a', 'a', 'a@yahoo.com', '848484', '48', 'hbhn', '6', '', '', '', 0),
(8, 'njnn', 'o', 'o', 'o@yahoo.com', '166', '1616', 'h', '12', '', '', '', 0),
(9, 'lo', 'lo', 'lo', 'lo@yahoo.com', '44646', '6464', '646', '3', '', '', '', 0),
(10, 'Muheet ahmad', 'muheet21', '789', 'muheet@gmail.com', '61101487484', '448998898989498', 'RWP', '6', '6''12', '64', '', 0),
(13, 'Haseeb ur rehman', 'hh', 'hh', 'h@yahoo.com', '25316546546', '515641561566', 'rwp', '3', '5''9''''', '60', '', 0),
(15, 'abskj', 'bjkbjk', 'jk', 'bjkb@gmail.com', '1354', '454', '54', '3', '5''1''''', '53', 'bike.png', 0),
(16, 'yaow321', 'yaow', 'yaow', 'yaow457@yahoo.com', '61101', '03085283303', 'KARACHI', '3', '5''1''''', '5454', 'geeky.jpg', 0),
(17, 'Yahya', 'y', 'y', 'y@gmail.com', '611017885858', '84885225252525', 'rwp', '6', '4''7''''', '65', 'DSC05435.JPG', 0),
(18, 'hasbhj', 'abc', 'haseeb', 'a@hotmail.com', '655645645', '515151', 'rbhjb', '12', '6''4''''', '4894', 'AllCustoms.PNG', 0),
(19, 'ojoij', 'yaow', 'njnj', 'muheet@gmail.com', '554', '545', '45454', '3', '5''7''''', '4', 'home.PNG', 0),
(20, 'ojoij', 'yaow', 'njnj', 'muheet@gmail.com', '554', '545', '45454', '3', '5''7''''', '4', 'home.PNG', 0),
(21, 'ojoij', 'yaow', 'njnj', 'muheet@gmail.com', '554', '545', '45454', '3', '5''7''''', '4', 'home.PNG', 0),
(22, 'ojoij', 'yaow', 'njnj', '', '554', '545', '45454', '3', '5''7''''', '4', 'home.PNG', 0),
(23, 'sf', 'c', 'nj', 'njnnjnjnj@yahoo.com', '45456', '45645', '4', '3', '7''4''''', '78', '1.JPG', 0),
(24, 'sf', 'c', '4455', 'njnnjnjnj@yahoo.com', '45456', '45645', '4', '3', '7''4''''', '78', '1.JPG', 0),
(25, 'waleed', 'waleed23', 'waleed', 'w@yahoo.com', '4548489', '4848484', 'rwp', '3', '4''8''''', '50', '97e48bd2ef943330164d5cf91416e444_400x400.jpeg', 32);

-- --------------------------------------------------------

--
-- Table structure for table `websitem`
--

CREATE TABLE IF NOT EXISTS `websitem` (
`id` int(10) NOT NULL,
  `mfor` varchar(100) NOT NULL,
  `mname` text NOT NULL,
  `mdate` date NOT NULL,
  `mcost` int(11) NOT NULL,
  `month` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `websitem`
--

INSERT INTO `websitem` (`id`, `mfor`, `mname`, `mdate`, `mcost`, `month`) VALUES
(2, 'website update', 'javaid ahmad', '2018-08-09', 5000, 8),
(3, 'add page', 'khan', '2017-11-09', 1200, 11),
(4, 'GUI', 'adeel', '2017-12-13', 999, 12);

-- --------------------------------------------------------

--
-- Table structure for table `workouts`
--

CREATE TABLE IF NOT EXISTS `workouts` (
`id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `tid` int(10) NOT NULL,
  `description` text NOT NULL,
  `sdate` text NOT NULL,
  `edate` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workouts`
--

INSERT INTO `workouts` (`id`, `uid`, `tid`, `description`, `sdate`, `edate`) VALUES
(19, 2, 2, 'njhui', '2018-08-09', '2018-08-10'),
(8, 16, 1, 'sit stands 10,chainups 20 ', '2018-07-23', '2018-07-29'),
(7, 7, 1, 'sajkdha', '2018-07-19', '2018-07-12'),
(6, 5, 1, 'umer', '2018-07-10', '2018-07-10'),
(16, 6, 2, 'hgbh', '2018-08-10', '2018-08-21'),
(17, 8, 2, 'ejfhji', '2018-08-04', '2018-08-10'),
(18, 6, 2, 'sf', '2018-08-02', '2018-08-03'),
(20, 2, 2, 'njhui', '2018-08-02', '2018-08-16'),
(21, 17, 2, 'bhbh', '', ''),
(22, 17, 2, 'jjhb', '2018-08-18', '2018-08-01'),
(23, 8, 2, 'hbhjb', '2018-08-15', '2018-08-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_shecdule`
--
ALTER TABLE `admin_shecdule`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignednutri`
--
ALTER TABLE `assignednutri`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `uid` (`uid`), ADD KEY `tid` (`tid`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolled`
--
ALTER TABLE `enrolled`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `tid` (`tid`), ADD KEY `uid` (`uid`);

--
-- Indexes for table `etemp`
--
ALTER TABLE `etemp`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financeresult`
--
ALTER TABLE `financeresult`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msalary`
--
ALTER TABLE `msalary`
 ADD PRIMARY KEY (`id`), ADD KEY `tid` (`tid`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
 ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
 ADD PRIMARY KEY (`id`), ADD KEY `tid` (`tid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
 ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `userfee`
--
ALTER TABLE `userfee`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `websitem`
--
ALTER TABLE `websitem`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workouts`
--
ALTER TABLE `workouts`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `admin_shecdule`
--
ALTER TABLE `admin_shecdule`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `assignednutri`
--
ALTER TABLE `assignednutri`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `enrolled`
--
ALTER TABLE `enrolled`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `etemp`
--
ALTER TABLE `etemp`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `financeresult`
--
ALTER TABLE `financeresult`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `msalary`
--
ALTER TABLE `msalary`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
MODIFY `nid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pays`
--
ALTER TABLE `pays`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `userfee`
--
ALTER TABLE `userfee`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `websitem`
--
ALTER TABLE `websitem`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `workouts`
--
ALTER TABLE `workouts`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignednutri`
--
ALTER TABLE `assignednutri`
ADD CONSTRAINT `assignednutri_ibfk_2` FOREIGN KEY (`tid`) REFERENCES `trainer` (`id`),
ADD CONSTRAINT `assignednutri_ibfk_3` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);

--
-- Constraints for table `enrolled`
--
ALTER TABLE `enrolled`
ADD CONSTRAINT `enrolled_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `trainer` (`id`),
ADD CONSTRAINT `enrolled_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
