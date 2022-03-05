-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2022 at 02:14 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `borassaunited`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `ContentID` int(11) NOT NULL,
  `fkRouteID` int(11) NOT NULL,
  `Page` varchar(100) NOT NULL,
  `PageIndex` int(11) DEFAULT NULL,
  `PageContent` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`ContentID`, `fkRouteID`, `Page`, `PageIndex`, `PageContent`) VALUES
(1, 5, 'History', 0, '<p>fdsartf</p>'),
(2, 7, 'Newsletters', 0, '<p><strong style=\"background-color: rgb(255, 255, 255);\">Policies</strong></p><p><br></p><p><strong>Newsletters</strong></p><p>Barossa United Junior Soccer Club produced Newsletters during the playing season. You can find our previous editions here:</p><p><a href=\"https://spark.adobe.com/page/Geca8QAmSUbL6/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">October 2021</a></p><p><a href=\"https://spark.adobe.com/page/mHENwiTq9XQu4/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">February 2021</a></p><p><a href=\"https://spark.adobe.com/page/ixIXimhjxomQN/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">August 2020</a></p><p><a href=\"https://spark.adobe.com/page/aVXPy0SJ27YFC/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">September 2019</a></p><p><a href=\"https://spark.adobe.com/page/EohgnCm8k1RLL/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">June 2019</a></p><p><a href=\"https://spark.adobe.com/page/I1XBVlyZzgdW7/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">April 2019</a></p><p><a href=\"https://spark.adobe.com/page/7cqZUIwj4qe9a/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">September 2018</a></p><p><a href=\"https://spark.adobe.com/page/weOPHFNOlWf1w/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">August 2018</a></p><p><a href=\"https://spark.adobe.com/page/ZxzEaFhUQaTXr/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">July 2018</a></p>');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `RouteID` int(11) NOT NULL,
  `RouteName` varchar(20) NOT NULL,
  `RoutePath` varchar(20) NOT NULL,
  `Public` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`RouteID`, `RouteName`, `RoutePath`, `Public`) VALUES
(1, 'Home', '/', 1),
(2, 'Presidents Welcome!', '/presidents-welcome', 1),
(3, 'Fees & Registration', '/fees-registration', 1),
(4, 'Player Info', '/player-info', 1),
(5, 'History', '/history', 1),
(6, 'Policies', '/policies', 1),
(7, 'Newsletters', '/newsletters', 1),
(8, 'Contact', '/contact', 1),
(9, 'Admin Login', '/admin-portal', 0),
(10, 'Admin Page', '/admin-page', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`ContentID`),
  ADD KEY `ContentRoute` (`fkRouteID`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`RouteID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `ContentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `ContentRoute` FOREIGN KEY (`fkRouteID`) REFERENCES `route` (`RouteID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
