-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2023 at 09:35 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactformsubmissions`
--

DROP TABLE IF EXISTS `contactformsubmissions`;
CREATE TABLE IF NOT EXISTS `contactformsubmissions` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` text NOT NULL,
  `SubmissionDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `contactformsubmissions`
--

INSERT INTO `contactformsubmissions` (`ID`, `Name`, `Email`, `Message`, `SubmissionDate`) VALUES
(1, 'Nick', 'nikitaburia68@gmail.com', 'Testing my DB', '2023-12-10 16:09:19'),
(2, 'Nick', 'nikitaburia68@gmail.com', 'Testing my DB second time', '2023-12-10 16:10:15'),
(3, 'Nick', 'm_buria@fanshaweonline.ca', 'Testing my DB', '2023-12-10 16:11:47'),
(4, 'Nick', 'nikitaburia68@gmail.com', '123', '2023-12-10 16:20:55'),
(5, 'Nick', 'nikitaburia68@gmail.com', '123', '2023-12-10 16:20:56'),
(6, 'Nick', 'nikitaburia68@gmail.com', '123', '2023-12-10 16:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Image` varchar(255) NOT NULL,
  `ProjectLink` varchar(255) DEFAULT NULL,
  `CodeLink` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `SkillName` varchar(50) NOT NULL,
  `Proficiency` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`ID`, `SkillName`, `Proficiency`) VALUES
(1, 'HTML5', 90),
(2, 'CSS3', 70),
(3, 'JavaScript', 40),
(4, 'PHP', 40);

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

DROP TABLE IF EXISTS `tools`;
CREATE TABLE IF NOT EXISTS `tools` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ProjectID` int NOT NULL,
  `ToolName` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ProjectID` (`ProjectID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
