-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2023 at 10:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsoundproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblalbum`
--

CREATE TABLE `tblalbum` (
  `Id` int(11) NOT NULL,
  `Albumname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblalbum`
--

INSERT INTO `tblalbum` (`Id`, `Albumname`) VALUES
(1, 'kk'),
(2, 'album2'),
(3, 'album1');

-- --------------------------------------------------------

--
-- Table structure for table `tblartist`
--

CREATE TABLE `tblartist` (
  `Id` int(11) NOT NULL,
  `Artistname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblartist`
--

INSERT INTO `tblartist` (`Id`, `Artistname`) VALUES
(1, 'Atif Aslam'),
(2, 'kk'),
(3, 'Talha Anjum');

-- --------------------------------------------------------

--
-- Table structure for table `tblgenre`
--

CREATE TABLE `tblgenre` (
  `Id` int(11) NOT NULL,
  `Genrename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblgenre`
--

INSERT INTO `tblgenre` (`Id`, `Genrename`) VALUES
(4, 'Punjabi'),
(5, 'Cultural'),
(6, 'Western Hip Hop'),
(7, 'Pakistani  Hip Hop'),
(8, 'Pop Music');

-- --------------------------------------------------------

--
-- Table structure for table `tblsong`
--

CREATE TABLE `tblsong` (
  `Id` int(11) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Songname` varchar(50) NOT NULL,
  `Artistname` int(11) NOT NULL,
  `Albumname` int(11) NOT NULL,
  `Genre` int(11) NOT NULL,
  `Language` varchar(50) NOT NULL,
  `Year` varchar(50) NOT NULL,
  `Audio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblsong`
--

INSERT INTO `tblsong` (`Id`, `Image`, `Songname`, `Artistname`, `Albumname`, `Genre`, `Language`, `Year`, `Audio`) VALUES
(22, 'meraMusafir.jpg', 'Mera Musafir', 1, 2, 4, 'English', '2023', 'mera musafir.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `tbltopsong`
--

CREATE TABLE `tbltopsong` (
  `Id` int(11) NOT NULL,
  `Songname` varchar(50) NOT NULL,
  `Artistname` varchar(50) NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbltopsong`
--

INSERT INTO `tbltopsong` (`Id`, `Songname`, `Artistname`, `Image`) VALUES
(2, 'Still Rollin', 'Shubhneet Singh', 'shubhhd.jpg'),
(3, 'Introduction', 'Faris Shafi', 'faris.jpg'),
(4, 'La Hasil', 'Sunnny Khan ', 'duraani.jpg'),
(5, 'Chen k', 'Toota Ghar', 'chen k.jpg'),
(6, 'Mashoor Nahi', 'JJ47', 'j.jpg'),
(7, 'Basick Bars', 'Fadi', 'fadi.jpg'),
(8, 'Hath Bandh', 'Talha Yunus', 'yunus.jpg'),
(9, 'Still Rollin', 'Shubhneet Singh', 'Shubh.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`Id`, `Name`, `Email`, `Pass`) VALUES
(1, 'saad', 'saad@gmail.com', '111'),
(2, 'Hammad', 'hammad@gmail.com', '123'),
(3, 'Maaz', 'maaz@gmail.com', '123'),
(4, 'Hamza', 'hamza@gmail.com', '123'),
(5, 'moiz', 'moiz@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblalbum`
--
ALTER TABLE `tblalbum`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblartist`
--
ALTER TABLE `tblartist`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblgenre`
--
ALTER TABLE `tblgenre`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblsong`
--
ALTER TABLE `tblsong`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Albumname` (`Albumname`),
  ADD KEY `Genre` (`Genre`),
  ADD KEY `Artistname` (`Artistname`);

--
-- Indexes for table `tbltopsong`
--
ALTER TABLE `tbltopsong`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblalbum`
--
ALTER TABLE `tblalbum`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblartist`
--
ALTER TABLE `tblartist`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblgenre`
--
ALTER TABLE `tblgenre`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblsong`
--
ALTER TABLE `tblsong`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbltopsong`
--
ALTER TABLE `tbltopsong`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblsong`
--
ALTER TABLE `tblsong`
  ADD CONSTRAINT `tblsong_ibfk_1` FOREIGN KEY (`Albumname`) REFERENCES `tblalbum` (`Id`),
  ADD CONSTRAINT `tblsong_ibfk_2` FOREIGN KEY (`Genre`) REFERENCES `tblgenre` (`Id`),
  ADD CONSTRAINT `tblsong_ibfk_3` FOREIGN KEY (`Artistname`) REFERENCES `tblartist` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
