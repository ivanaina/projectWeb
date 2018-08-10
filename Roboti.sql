-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 10, 2018 at 09:53 PM
-- Server version: 5.7.22-0ubuntu0.17.10.1
-- PHP Version: 7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Roboti`
--

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `Username` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`Username`, `Email`, `Password`) VALUES
('cetvrti', 'cetvrti@yahoo.com', 'das'),
('drugi', 'drugi@drugi.com', 'drugi'),
('dusan', 'dusan@dusan.com', 'asd'),
('lkjh', 'lkjh@asd.com', 'man'),
('nesto', 'nesto@com.com', 'asd'),
('nst3', 'nes3@yahoo.com', 'qwe'),
('peti', 'peti@yahoo.com', 'peti'),
('poiu', 'poiu@asd.sda', '123'),
('prvi', 'prvi@prvi.com', 'prvi'),
('qwe', 'root@root.com', 'qwe'),
('qwert', 'qwert@qwe.qwe', 'qwe'),
('razzil1', 'razzil1@yahoo.com', 'raz'),
('root', 'root@root.com', ',epBfoj:o9do'),
('rty', 'rty@mimi.com', 'rty'),
('sda', 'dsa@sad.com', 'qwe'),
('srdjan', 'srdjan@matf.com', 'srkii'),
('treci', 'treci@treci.com', 'asd'),
('user', 'user@sasad.sad', 'fffff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`Username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
