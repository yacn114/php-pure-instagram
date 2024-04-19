-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2024 at 11:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showgram`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentID` int(11) NOT NULL,
  `PostID` int(11) DEFAULT NULL,
  `commentText` varchar(255) DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL,
  `commentW` varchar(15) DEFAULT NULL,
  `userid` varchar(15) DEFAULT NULL,
  `Tlike` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentID`, `PostID`, `commentText`, `time`, `commentW`, `userid`, `Tlike`) VALUES
(1, 0, 'test comment', '2022-05-23', 'test', '3', 0),
(2, 0, '213', '2022-05-23', 'test', '3', 0),
(3, 2, '3qt3', '2022-05-23', 'test', '3', 0),
(4, 3, 'q4', '2022-05-23', 'test', '3', 4),
(5, 2, 'era', '2022-05-23', 'test', '3', 0),
(6, 2, 'era', '2022-05-23', 'test', '3', 0),
(7, 3, 'qt3', '2022-05-23', 'test', '3', 1),
(8, 3, 'qt3', '2022-05-23', 'test', '3', 0),
(9, 1, '1', '2022-05-23', 'test', '3', 0),
(10, 1, '2', '2022-05-23', 'test', '3', 0),
(11, 1, '3', '2022-05-23', 'test', '3', 0),
(12, 3, '1', '2022-05-23', 'yacnyacn', '9', 1),
(13, 6, 'instagram', '2022-05-24', 'yacnyacn', '9', 2);

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `FollowID` int(11) NOT NULL,
  `FollowerID` int(11) DEFAULT NULL,
  `FollowingID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`FollowID`, `FollowerID`, `FollowingID`) VALUES
(1, 9, 3),
(2, 9, 1),
(3, 9, 1),
(4, 9, 1),
(5, 9, 1),
(6, 9, 9),
(7, 9, 9),
(8, 9, 9);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `PostID` int(11) NOT NULL,
  `date` varchar(20) DEFAULT NULL,
  `Tlike` int(11) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `PostW` varchar(15) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`PostID`, `date`, `Tlike`, `caption`, `image`, `PostW`, `userid`) VALUES
(1, '2022-05-23', 0, 'wghomho[bge', 'image/Firefox_wallpaper.png', 'amir', 1),
(2, '2022-05-23', 0, ' Lorem Ipsum  Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'image/Screenshotfrom2022-05-0102-43-36.png', 'amir', 1),
(3, '2022-05-23', 0, 'aerfwEAF', 'image/Screenshotfrom2022-04-2621-19-47.png', 'amir', 1),
(4, '2022-05-23', 0, 'eoihapoa', 'image/Firefox_wallpaper.png', 'NEWyacn', 1),
(5, '2022-05-23', 0, 'Lorem Ipsum  Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'image/Screenshotfrom2022-05-1019-44-51.png', 'test', 3),
(6, '2022-05-24', 0, 'test follower', 'image/instagram.webp', 'yacnyacn', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(15) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `passowrd` varchar(255) DEFAULT NULL,
  `follower` varchar(255) DEFAULT NULL,
  `following` varchar(255) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `PersonID` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `Tpost` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `passowrd`, `follower`, `following`, `about`, `admin`, `PersonID`, `image`, `Tpost`) VALUES
('NEWyacn', 'yacn1214@gmail.com', 'yacb', '7', '0', 'i`m this site programer', 1, 1, 'image/Firefox_wallpaper.png', '0'),
('yacn1414', 'yacnop1414@gmail.com', 'yacb', '0', '0', 'iam this site programer', 0, 2, 'https://www.kindpng.com/picc/m/21-214439_free-high-quality-person-icon-default-profile-picture.png', '0'),
('test', 'test@gmail.com', 'test', '4', '0', '', 0, 3, 'image/logo-php.png', '0'),
('fsd', 'fsd@gm.s', '', '0', '0', '', 0, 6, 'https://www.kindpng.com/picc/m/21-214439_free-high-quality-person-icon-default-profile-picture.png', '0'),
('', '', '', '0', '0', '', 0, 7, 'https://www.kindpng.com/picc/m/21-214439_free-high-quality-person-icon-default-profile-picture.png', '0'),
('yacnyacn', 'jgoipnd@gmail.com', '123', '3', '8', 'im yek user simple', 0, 9, 'image/Firefox_wallpaper.png', '0'),
('yacn2000', 'zy11hey@gmail.com', '1300', '0', '0', '', 0, 10, 'https://www.kindpng.com/picc/m/21-214439_free-high-quality-person-icon-default-profile-picture.png', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`FollowID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`PostID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`PersonID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `FollowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `PostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `PersonID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
