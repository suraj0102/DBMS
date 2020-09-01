-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 24, 2018 at 04:22 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `company13`
--

DROP TABLE IF EXISTS `company13`;
CREATE TABLE IF NOT EXISTS `company13` (
  `C_ID` varchar(20) NOT NULL,
  `C_Name` varchar(40) DEFAULT NULL,
  `C_Location` varchar(35) DEFAULT NULL,
  `Website` varchar(30) DEFAULT NULL,
  `Package` varchar(20) DEFAULT NULL,
  `Contact` int(20) DEFAULT NULL,
  `Profile` varchar(50) DEFAULT NULL,
  `Shift` varchar(20) DEFAULT NULL,
  `C_Cutoff` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`C_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company13`
--

INSERT INTO `company13` (`C_ID`, `C_Name`, `C_Location`, `Website`, `Package`, `Contact`, `Profile`, `Shift`, `C_Cutoff`) VALUES
('BST101', 'BigspireTechnologies', 'Bengaluru', 'Bigspiretechnologies.Com', '500000', 979797979, 'ITService', 'Day', '7'),
('IBM123', 'IBM Global Services', 'Bengaluru', 'Ibmglobal.Com', '700000', 797979797, 'ITService', 'Night', '6.5'),
('CSPl312', 'Craftsiliconlimited', 'Bengaluru', 'Craftsili.Com', '400000', 878787978, 'Softwaresolution', 'Day', '7'),
('ATS213', 'Arianetechsolution', 'Bengaluru', 'Arts.Com', '400000', 787878787, 'Softwareproduct', 'Day', '7.5'),
('ACER321', 'Acer India Pvt Ltd', 'Bengaluru', 'Acerindia.Com', '700000', 76767676, 'IT Service', 'Night', '7'),
('QBX111', 'QBIX Integrated', 'Bengaluru', 'Qbix.Com', '350000', 96969696, 'Software Solution', 'Day', '6');

--
-- Triggers `company13`
--
DROP TRIGGER IF EXISTS `C_DELETE`;
DELIMITER $$
CREATE TRIGGER `C_DELETE` BEFORE DELETE ON `company13` FOR EACH ROW INSERT into company_log values (old.C_ID,old.C_Name,old.C_Location,old.Website,old.Package,old.Contact,old.Profile,old.Shift,old.C_Cutoff,'DELETED')
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `C_INSERT`;
DELIMITER $$
CREATE TRIGGER `C_INSERT` BEFORE INSERT ON `company13` FOR EACH ROW INSERT into company_log values (new.C_ID,new.C_Name,new.C_Location,new.Website,new.Package,new.Contact,new.Profile,new.Shift,new.C_Cutoff,'INSERTED')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `company_log`
--

DROP TABLE IF EXISTS `company_log`;
CREATE TABLE IF NOT EXISTS `company_log` (
  `C_ID` varchar(20) NOT NULL,
  `C_Name` varchar(20) NOT NULL,
  `C_Location` varchar(20) NOT NULL,
  `Website` varchar(20) NOT NULL,
  `Package` varchar(20) NOT NULL,
  `Contact` int(20) NOT NULL,
  `Profile` varchar(20) NOT NULL,
  `Shift` varchar(20) NOT NULL,
  `C_Cutoff` varchar(20) NOT NULL,
  `Action` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_log`
--

INSERT INTO `company_log` (`C_ID`, `C_Name`, `C_Location`, `Website`, `Package`, `Contact`, `Profile`, `Shift`, `C_Cutoff`, `Action`) VALUES
('INF13', 'INFOSYS', 'BANGALORE', 'INF.COM', '500000', 741258963, 'HR', 'DAY', '8', 'INSERTED'),
('INF13', 'INFOSYS', 'BANGALORE', 'INF.COM', '500000', 741258963, 'HR', 'DAY', '8', 'DELETED'),
('cvts12', 'infjb', 'bangalore', 'ibn.com', '200000', 741258963, 'vv', 'day', '6', 'INSERTED'),
('cvts12', 'infjb', 'bangalore', 'ibn.com', '200000', 741258963, 'vv', 'day', '6', 'DELETED');

-- --------------------------------------------------------

--
-- Table structure for table `criteria13`
--

DROP TABLE IF EXISTS `criteria13`;
CREATE TABLE IF NOT EXISTS `criteria13` (
  `D_Cut_Off` varchar(40) DEFAULT NULL,
  `Skills` varchar(40) DEFAULT NULL,
  `Age` varchar(20) DEFAULT NULL,
  `S_Dept` varchar(20) DEFAULT NULL,
  `C_Id` varchar(40) DEFAULT NULL,
  KEY `C_Id` (`C_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criteria13`
--

INSERT INTO `criteria13` (`D_Cut_Off`, `Skills`, `Age`, `S_Dept`, `C_Id`) VALUES
('9', 'ihy', '25', 'ise', 'atcff'),
('6.2', 'Technical Writing', '30', 'ECE', 'Qbx111'),
('6.4', 'Project Management', '27', 'ECE', 'Cspl312');

-- --------------------------------------------------------

--
-- Table structure for table `interview13`
--

DROP TABLE IF EXISTS `interview13`;
CREATE TABLE IF NOT EXISTS `interview13` (
  `I_No` varchar(20) NOT NULL,
  `I_Loc` varchar(40) DEFAULT NULL,
  `Rounds` varchar(40) DEFAULT NULL,
  `C_Id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`I_No`),
  KEY `C_Id` (`C_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview13`
--

INSERT INTO `interview13` (`I_No`, `I_Loc`, `Rounds`, `C_Id`) VALUES
('201', 'Campus', '3', 'BST101'),
('202', 'Campus', '3', 'IBM123'),
('203', 'Campus', '2', 'CSPl312'),
('204', 'Campus', '3', 'ACER321'),
('205', 'Campus', '2', 'BST101'),
('206', 'Campus', '2', 'QBX111'),
('207', 'Campus', '3', 'IBM123'),
('208', 'Campus', '3', 'ATS213'),
('1123', 'CAMPUS', '2', 'ATS123'),
('', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `job_offer13`
--

DROP TABLE IF EXISTS `job_offer13`;
CREATE TABLE IF NOT EXISTS `job_offer13` (
  `Offr_Id` varchar(20) NOT NULL,
  `Domain` varchar(50) DEFAULT NULL,
  `Bond` varchar(50) DEFAULT NULL,
  `Role` varchar(50) DEFAULT NULL,
  `Salary` varchar(30) DEFAULT NULL,
  `Location` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`Offr_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_offer13`
--

INSERT INTO `job_offer13` (`Offr_Id`, `Domain`, `Bond`, `Role`, `Salary`, `Location`) VALUES
('Ofid_1', 'Software Production', '13 Months', 'Developer', '40000p/M', 'Banglore'),
('Ofid_2', 'Software Solution', '13 Months', 'Analyst', '35000p/M', 'Chennai'),
('Ofid_3', 'Software Production', '11 Months', 'Designer', '70000p/M', 'Hyderabad'),
('Ofid_4', 'Software Solution', '9 Months', 'Developer', '50000p/M', 'Banglore'),
('Ofid_5', 'IT Service ', '12 Months', 'Analyst', '40000p/M', 'Mumbai'),
('Ofid_6', 'Software Production', '15 Months', 'Team Lead', '50000p/M', 'Banglore'),
('Ofid_7', 'Software Solution', '17 Months', 'Analyst', '35000p/M', 'Banglore');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('GLOBAL', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `student13`
--

DROP TABLE IF EXISTS `student13`;
CREATE TABLE IF NOT EXISTS `student13` (
  `USN` varchar(20) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Dept` varchar(15) DEFAULT NULL,
  `DOB` varchar(30) DEFAULT NULL,
  `Proj` varchar(40) DEFAULT NULL,
  `Sex` varchar(1) DEFAULT NULL,
  `Phno` int(10) DEFAULT NULL,
  `Aggrt` varchar(10) DEFAULT NULL,
  `Tech_Skills` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`USN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student13`
--

INSERT INTO `student13` (`USN`, `Name`, `Dept`, `DOB`, `Proj`, `Sex`, `Phno`, `Aggrt`, `Tech_Skills`) VALUES
('1GA16CS100', 'Samyuktha', 'CSE', '13-Aug-1997', 'Cloud', 'F', 994566912, '7.5', 'Bigdata Analysis'),
('1GA16EC123', 'Anusha', 'ECE', '01-Jul-1997', 'Smart Invertor', 'F', 894545454, '6.3', 'Technical Writing'),
('1GA16IS132', 'Shravya', 'ISE', '31-Jul-1997', 'Image Prossesing', 'F', 944545455, '6.1', 'Project Management'),
('1GA16CS213', 'Santosh', 'CSE', '21-Feb-1997', 'Machine Learning', 'M', 994544545, '8.3', 'Coding and Programing'),
('1GA16CS312', 'Sukruth', 'CSE', '06-Apr-1997', 'Brain Chip', 'M', 984545454, '7.9', 'Technical Writing'),
('1GA16IS122', 'Namith', 'ISE', '21-Dec-1997', 'E-Aggriculture', 'M', 975454545, '8.2', 'Tech Support');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
