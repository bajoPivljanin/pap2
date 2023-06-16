-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 11:53 PM
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
-- Database: `baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `artiklitest`
--

CREATE TABLE `artiklitest` (
  `idArtikal` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `oldprice` int(11) NOT NULL,
  `newprice` int(11) NOT NULL,
  `discount` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artiklitest`
--

INSERT INTO `artiklitest` (`idArtikal`, `name`, `oldprice`, `newprice`, `discount`, `image`) VALUES
(1, 'Muhammad Ali', 38500, 30800, '20%', 'img/articleimgbos.jpg'),
(2, 'Myike Tyson', 38500, 30800, '20%', 'img/articleimgbos.jpg'),
(3, 'Canelo Alvarez', 38500, 30800, '20%', 'img/articleimgbos.jpg'),
(4, 'Tyson Fury', 38500, 30800, '20%', 'img/articleimgbos.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `postCode` int(11) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `email`, `username`, `password`, `country`, `state`, `postCode`, `phoneNumber`) VALUES
(3, 'prvi', 'drugi', 'prvidrugi@gmail.com', 'prvidrugi', '$2y$10$wcIkQrB9VSlE8YMgxbIe3OjC51yNRjyectYY5R.AodK5SdwxAitO2', '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artiklitest`
--
ALTER TABLE `artiklitest`
  ADD PRIMARY KEY (`idArtikal`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artiklitest`
--
ALTER TABLE `artiklitest`
  MODIFY `idArtikal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
