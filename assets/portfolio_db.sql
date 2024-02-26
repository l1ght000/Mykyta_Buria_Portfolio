-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 10, 2024 at 01:59 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_db`
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

-- --------------------------------------------------------

--
-- Table structure for table `gallery_items`
--

DROP TABLE IF EXISTS `gallery_items`;
CREATE TABLE IF NOT EXISTS `gallery_items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_main` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gallery_items`
--

INSERT INTO `gallery_items` (`id`, `image_path`, `title`, `description`, `is_main`) VALUES
(1, 'images/prjct-img-1.png', 'Project 1 Title', 'Project 1 Description...', 0),
(2, 'images/prjct-img-2.png', 'This Title is now Dynamic and Also Main Title', 'This project description is also Dynamic. ', 1),
(3, 'images/prjct-img-3.png', 'Project 3 Title', 'Project 3 Description...', 0),
(4, 'images/prjct-img-4.png', 'Project 4 Title', 'Project 4 Description...', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_items_2`
--

DROP TABLE IF EXISTS `gallery_items_2`;
CREATE TABLE IF NOT EXISTS `gallery_items_2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_main` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gallery_items_2`
--

INSERT INTO `gallery_items_2` (`id`, `image_path`, `title`, `description`, `is_main`) VALUES
(5, 'images/prjct-img-1.1.png', 'Project 1 Title', 'Project 1 Description...', 0),
(6, 'images/prjct-img-2.2.png', 'Project 2 Title', 'Project 2 Description...', 1),
(7, 'images/prjct-img-3.2.png', 'Project 3 Title', 'Project 3 Description...', 0),
(8, 'images/prjct-img-4.2.png', 'Project 4 Title', 'Project 4 Description...', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_items_3`
--

DROP TABLE IF EXISTS `gallery_items_3`;
CREATE TABLE IF NOT EXISTS `gallery_items_3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_main` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gallery_items_3`
--

INSERT INTO `gallery_items_3` (`id`, `image_path`, `title`, `description`, `is_main`) VALUES
(5, 'images/prjct-img-1.2.png', 'Project 1 Title', 'Project 1 Description...', 0),
(6, 'images/prjct-img-2.3.png', 'Project 2 Title', 'Project 2 Description...', 1),
(7, 'images/prjct-img-3.3.png', 'Project 3 Title', 'Project 3 Description...', 0),
(8, 'images/prjct-img-4.3.png', 'Project 4 Title', 'Project 4 Description...', 0);

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
  `BuiltWith` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`ID`, `Title`, `Description`, `Image`, `ProjectLink`, `CodeLink`, `BuiltWith`) VALUES
(1, 'Project 1 Title', 'Project 1 description', 'images/project-1.png', 'case_study1.php', 'http://github.com/example/project1', 'Technologies used'),
(2, 'Project 2 Title', 'Project 2 description', 'images/project-2.png', 'case_study2.php', 'http://github.com/example/project2', 'Technologies used'),
(3, 'Project 3 Title', 'Project 3 description', 'images/project-3.png', 'case_study3.php', 'http://github.com/example/project3', 'Technologies used');

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
