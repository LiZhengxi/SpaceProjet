-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 06, 2019 at 02:04 PM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neoma`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonce`
--

CREATE TABLE `annonce` (
  `planetNom` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `planetCouleur` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `planetTaille` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `planetDistance` int(11) NOT NULL,
  `planetComposition` varchar(1000) COLLATE utf8mb4_bin NOT NULL,
  `planetHabitant` int(11) NOT NULL,
  `planetProprietaire` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `planetViabilite` tinyint(1) NOT NULL,
  `prix` int(11) NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_bin NOT NULL,
  `description` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
