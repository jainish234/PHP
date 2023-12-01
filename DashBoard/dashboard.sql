-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 04:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `details_my`
--

CREATE TABLE `details_my` (
  `Id` int(40) NOT NULL,
  `AboutMe` varchar(550) NOT NULL,
  `Skillset` varchar(550) NOT NULL,
  `Project_Details` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `details_my`
--

INSERT INTO `details_my` (`Id`, `AboutMe`, `Skillset`, `Project_Details`) VALUES
(1, 'I am Barbhaya Jainish completed my bachelor of computer applications degree in saurashtra university for R.P.BHALODIA COLLAGE.now i started Master of Computer Application in atmiya university, rajkot.', 'C,PHP,HTML,GAMING SKILL,READING & WRITTING.\r\n', 'Project goals and objectives\r\nStakeholders and their roles\r\nMetrics for measuring success\r\nTimeline\r\nEstimated budget.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
