-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 10:36 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`id`, `email`, `password`) VALUES
(1, 'chitofami29@gmail.com', '2222'),
(2, 'chitosalvacionfami23@gmain', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `lsi`
--

CREATE TABLE `lsi` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `place_from` varchar(100) NOT NULL,
  `date_of_arrival` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lsi`
--

INSERT INTO `lsi` (`id`, `name`, `age`, `address`, `birthdate`, `citizenship`, `mobile_number`, `place_from`, `date_of_arrival`, `status`) VALUES
(16, 'FEDERICO PALMES, JR.', '66', 'Jose Riel St., Jugaban', '0000-00-00', 'hdhghgf', '9054591883', '', '0000-00-00', ''),
(17, 'FEDERICO PALMES, JR.', '55', 'Jose Riel St., Jugaban', '0000-00-00', 'dsgfgf', '', '', '0000-00-00', 'fhfdhhhhd'),
(18, 'FEDERICO PALMES, JR.', '44', 'Jose Riel St., Jugaban', '0000-00-00', 'dfsdgsdg', '', '', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_register`
--
ALTER TABLE `admin_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lsi`
--
ALTER TABLE `lsi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_register`
--
ALTER TABLE `admin_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lsi`
--
ALTER TABLE `lsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
