-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2019 at 05:19 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `idForms` int(11) NOT NULL,
  `fname` tinytext NOT NULL,
  `lname` tinytext NOT NULL,
  `age` int(11) NOT NULL,
  `city` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`idForms`, `fname`, `lname`, `age`, `city`) VALUES
(1, 'Rohan', 'Tammewar', 22, 'Ambernath'),
(2, 'Rohan', 'Tammewar', 22, 'Ambernath'),
(3, 'Rohan', 'Tammewar', 22, 'Ambernath'),
(4, 'Rohan', 'Tammewar', 22, 'Ambernath'),
(5, 'Yadnesh', 'khode', 22, 'Ambernath'),
(6, 'Yadnesh', 'khode', 22, 'Ambernath'),
(7, 'Yadnesh', 'khode', 22, 'Ambernath'),
(8, 'Yadnesh', 'khode', 22, 'Ambernath'),
(9, 'Yadnesh', 'khode', 22, 'Ambernath'),
(10, 'Rohan', 'Tammewar', 22, 'Ambernath'),
(11, 'Rohan', 'Tammewar', 22, 'Ambernath'),
(12, 'Rohan', 'Tammewar', 22, 'Ambernath'),
(13, 'Rohan', 'Tammewar', 22, 'Ambernath'),
(14, 'Rohan', 'Tammewar', 22, 'Ambernath'),
(15, 'Rohan', 'Tammewar', 22, 'Ambernath'),
(16, 'Rohan', 'Tammewar', 22, 'Ambernath'),
(17, 'Rohan', 'Tammewar', 22, 'Ambernath'),
(18, 'Rohan', 'Tammewar', 22, 'Ambernath'),
(19, 'Rohan', 'Tammewar', 22, 'Ambernath'),
(20, 'Rohan', 'Tammewar', 22, 'Ambernath'),
(21, 'Rohan', 'Tammewar', 22, 'Ambernath'),
(22, 'Rohan', 'Tammewar', 22, 'Ambernath'),
(23, 'Rohan', 'Tammewar', 22, 'Ambernath'),
(24, 'Yadnesh', 'khode', 22, 'Ambernath'),
(25, 'Yadnesh', 'khode', 22, 'Ambernath'),
(26, 'Yadnesh', 'khode', 22, 'Ambernath'),
(27, 'Yadnesh', 'khode', 22, 'Ambernath'),
(28, 'Yadnesh', 'khode', 22, 'Ambernath'),
(29, 'Yadnesh', 'khode', 22, 'Ambernath'),
(30, 'Yadnesh', 'khode', 22, 'Ambernath'),
(31, 'Yadnesh', 'khode', 22, 'Ambernath'),
(32, 'Yadnesh', 'khode', 22, 'Ambernath'),
(33, 'aniket', 'shrirao', 22, 'ulhasnagar'),
(34, 'Saurabh', 'Tammewar', 25, 'ambernath'),
(35, 'aniket', 'iubiy', 23, 'ulhasnagar'),
(36, 'hbiby', 'shrirao', 34, 'ulhasnagar'),
(37, 'hbiby', 'shrirao', 34, 'Ambernath'),
(38, 'aniket', 'shrirao', 68, 'ulhasnagar'),
(39, 'hbibsdcy', 'shriracsdo', 45, 'jvhgkcsdv'),
(40, 'hbiby', 'shrirao', 66, 'gv'),
(41, 'aniket', 'shrirao', 34, 'sdcsf'),
(42, 'rtgr', 'gtrg', 45, 'vfs'),
(43, 'rtgr', 'gtrg', 45, 'vfs'),
(44, 'rtgr', 'gtrg', 45, 'vfs'),
(45, 'aniket', 'shrirao', 45, 'gv'),
(46, 'aniket', 'tg', 354, 'fgv'),
(47, 'aniket', 'tg', 354, 'fgv'),
(48, 'aniket', 'shrirao', 45, 'gv'),
(49, 'hbiby', 'shrirao', 76, 'ercvf'),
(50, 'aniket', 'shrirao', 65, 'grv'),
(51, 'aniket', 'shrirao', 423, 'grv'),
(52, 'aniket', 'shrirao', 22, 'ulhasnagar'),
(53, 'hbiby', 'iubiy', 21, 'grv'),
(54, 'aniket', 'shrirao', 76, 'sdcsf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(123742378, 'yadnesh', 'Yadnesh.khode@gmail.com', '$2y$10$FpbEKLW/BQYPCUSCzDRQKe2L11VphpMWFUdyEQFn7mu7U/TKMJu96'),
(123742379, 'Rohan', 'rohan.tammewar@gmail.com', '$2y$10$nvttfPfAS2iC3W.dlc6Vj.99WgUe01i41Dk5DpkszKbaj/tAXVPcy'),
(123742380, 'yadnesh', 'y@k.com', '$2y$10$Temhqi/4Sf8qAO2iyWZNc./0RIy//n76i.dh9jux61TBTammDuV4e'),
(123742381, 'Saurabh', 'tammewars4@gmail.com', '$2y$10$720/G2l9qlJMFg95jYFWleF3Sl2JtFzfA7JjpLPWI35dCo/ajfX1K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`idForms`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `idForms` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123742382;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
