-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 06:22 PM
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
-- Table structure for table `artikli`
--

CREATE TABLE `artikli` (
  `idArtikal` int(11) NOT NULL,
  `brandName` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `oldprice` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `image` text NOT NULL,
  `category` varchar(200) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikli`
--

INSERT INTO `artikli` (`idArtikal`, `brandName`, `name`, `oldprice`, `discount`, `image`, `category`, `sex`, `size`) VALUES
(1, 'Hugo Boss', 'HUGO men T-Shirt', 7350, 10, 'img/articleimgbos.jpg', 'tshirt', 'men', 's,m,l,xl'),
(2, 'Hugo Boss', 'HUGO woman T-Shirt', 7350, 10, 'img/articleimgbos.jpg', 'tshirt', 'woman', 's,m,l,xl,xxl'),
(3, 'Hugo Boss', 'HUGO kid T-Shirt', 7350, 10, 'img/articleimgbos.jpg', 'tshirt', 'kids', 'xs,m,l,xl'),
(4, 'Armani', 'Armani men Jeans', 10000, 0, 'img/articleimgbos.jpg', 'jeans', 'men', 's,m,l,xl'),
(5, 'Armani', 'Armani women Jeans', 10000, 0, 'img/articleimgbos.jpg', 'jeans', 'woman', 's,m,l,xl,xxl'),
(6, 'Armani', 'Armani Jeans for kids', 5000, 20, 'img/articleimgbos.jpg', 'jeans', 'kids', 'xs,s,m,l'),
(7, 'Moncler', 'Moncler Puffer jacket for men', 50000, 10, 'img/articleimgbos.jpg', 'jacket', 'men', 's,m,l,xl,xxl,xxxl'),
(8, 'Moncler', 'Moncler Puffer jacket for kids', 50000, 10, 'img/articleimgbos.jpg', 'jacket', 'kids', 's,m,l');

-- --------------------------------------------------------

--
-- Table structure for table `artiklitest`
--

CREATE TABLE `artiklitest` (
  `idArtikal` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `oldprice` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artiklitest`
--

INSERT INTO `artiklitest` (`idArtikal`, `name`, `oldprice`, `discount`, `image`) VALUES
(1, 'Muhammad Ali', 38500, 10, 'img/articleimgbos.jpg'),
(2, 'Myike Tyson', 38500, 20, 'img/articleimgbos.jpg'),
(3, 'Canelo Alvarez', 38500, 20, 'img/articleimgbos.jpg'),
(4, 'Tyson Fury', 38500, 20, 'img/articleimgbos.jpg');

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
-- Indexes for table `artikli`
--
ALTER TABLE `artikli`
  ADD PRIMARY KEY (`idArtikal`);

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
-- AUTO_INCREMENT for table `artikli`
--
ALTER TABLE `artikli`
  MODIFY `idArtikal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
