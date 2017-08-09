-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2017 at 07:37 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soccer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `home` varchar(255) NOT NULL,
  `odd` varchar(255) NOT NULL,
  `away` varchar(255) NOT NULL,
  `tips` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  `result` enum('?','win','lose','draw') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`id`, `date`, `home`, `odd`, `away`, `tips`, `score`, `result`) VALUES
(1, '2017-06-07', 'Atletico Mineiro', '1/2/17 0:01', 'Avai SC', 'Atletico Mineiro', 'Jan-00', 'lose'),
(2, '2017-06-06', 'ABC RN', '0:1/4', 'Paysandu PA', 'ABC RN', '1-Feb', 'win'),
(3, '2017-06-04', 'Aalesund', '0:1/2', 'Haugesund', 'Haugesund', '0-1', 'win'),
(4, '2017-06-03', 'Juventus', '0:00', 'Real Madrid', 'Real Madrid', '4-Jan', 'win'),
(5, '2017-06-02', 'Elfsborg', '0:1/4', 'BK Hacken', 'Elfsborg', 'Feb-00', 'win');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
