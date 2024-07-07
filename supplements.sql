-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 11:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supplements`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`username`, `password`) VALUES
('dina', 'dina12345'),
('nada', 'nada1234'),
('rawan', 'rawan1234');

-- --------------------------------------------------------

--
-- Table structure for table `nutrition`
--

CREATE TABLE `nutrition` (
  `supplements` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nutrition`
--

INSERT INTO `nutrition` (`supplements`, `quantity`, `price`) VALUES
('Educational Materials', 200, 2500),
('Food Processors and Blenders', 200, 400000),
('Food Scales', 200, 30000),
('Kitchen Equipment', 200, 10000),
('Measuring Cups and Spoons', 200, 90000),
('Software Programs', 200, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `physiotherapy`
--

CREATE TABLE `physiotherapy` (
  `supplements` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,4) NOT NULL,
  `brand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `physiotherapy`
--

INSERT INTO `physiotherapy` (`supplements`, `quantity`, `price`, `brand`) VALUES
('Faradic Stimulation', 200, 60000.0000, 'compex'),
('High Voltage Pulsed Galvanic Stimulation (HVPGS)', 150, 60000.0000, 'Omron'),
('Inferential Therapy (IFT)', 200, 40000.0000, 'compex'),
('Iontophoresis', 300, 50000.0000, 'compex'),
('Neuromuscular Electrical Stimulation', 400, 50000.0000, 'Omron'),
('Transcutaneous Electrical Nerve Stimulation (TENS)', 100, 20000.0000, 'Compex');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `nutrition`
--
ALTER TABLE `nutrition`
  ADD PRIMARY KEY (`supplements`);

--
-- Indexes for table `physiotherapy`
--
ALTER TABLE `physiotherapy`
  ADD PRIMARY KEY (`supplements`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
