-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 03:26 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dokkhin_shikolbaha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `password`) VALUES
('dokkhin_admin', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `serial` int(255) NOT NULL,
  `passing_year` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(2500) NOT NULL,
  `Sex` varchar(20) NOT NULL,
  `Date_of_Birth` varchar(255) NOT NULL,
  `Age` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_1`
--

CREATE TABLE `class_1` (
  `roll` int(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(2500) NOT NULL,
  `Sex` varchar(20) NOT NULL,
  `Date_of_Birth` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_2`
--

CREATE TABLE `class_2` (
  `roll` int(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(2500) NOT NULL,
  `Sex` varchar(20) NOT NULL,
  `Date_of_Birth` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_3`
--

CREATE TABLE `class_3` (
  `roll` int(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(2500) NOT NULL,
  `Sex` varchar(20) NOT NULL,
  `Date_of_Birth` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_4`
--

CREATE TABLE `class_4` (
  `roll` int(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(2500) NOT NULL,
  `Sex` varchar(20) NOT NULL,
  `Date_of_Birth` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_5`
--

CREATE TABLE `class_5` (
  `roll` int(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(2500) NOT NULL,
  `Sex` varchar(20) NOT NULL,
  `Date_of_Birth` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_no` int(11) NOT NULL,
  `notice_title` varchar(1000) NOT NULL,
  `notice_body` varchar(2500) NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_no`, `notice_title`, `notice_body`, `time`) VALUES
(1, 'title', '         Body', '02-04-2020 02:06:05'),
(3, 'title', '         grfhtgj', '02-04-2020 02:06:46'),
(4, 'title', '         grfhtgj', '02-04-2020 02:08:53'),
(5, 'title', '         grfhtgj', '02-04-2020 02:09:04');

-- --------------------------------------------------------

--
-- Table structure for table `school_info`
--

CREATE TABLE `school_info` (
  `SI_id` int(20) NOT NULL,
  `School_Information` varchar(3000) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `telnum` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_info`
--

INSERT INTO `school_info` (`SI_id`, `School_Information`, `address`, `telnum`, `email`) VALUES
(1, '                                                                                \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"\r\n\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"                                                                                                                                       ', 'Dokkhin shikolbaha', 1521212632, 'dokkhin_shikol@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE `teacher_info` (
  `T_ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`T_ID`, `Name`, `Subject`, `Designation`) VALUES
(1, 'Rahim Shiekh', 'English', 'Assistant Teacher'),
(3, 'Mazhar', 'English', 'Professor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `class_1`
--
ALTER TABLE `class_1`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `class_2`
--
ALTER TABLE `class_2`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `class_3`
--
ALTER TABLE `class_3`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `class_4`
--
ALTER TABLE `class_4`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `class_5`
--
ALTER TABLE `class_5`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_no`);

--
-- Indexes for table `school_info`
--
ALTER TABLE `school_info`
  ADD PRIMARY KEY (`SI_id`);

--
-- Indexes for table `teacher_info`
--
ALTER TABLE `teacher_info`
  ADD PRIMARY KEY (`T_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `serial` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `school_info`
--
ALTER TABLE `school_info`
  MODIFY `SI_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_info`
--
ALTER TABLE `teacher_info`
  MODIFY `T_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
