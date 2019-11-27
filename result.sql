-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 08:39 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_result`
--

CREATE TABLE `tb_result` (
  `term` varchar(10) NOT NULL,
  `course` varchar(10) NOT NULL,
  `credit` float NOT NULL,
  `grade` float NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_result`
--

INSERT INTO `tb_result` (`term`, `course`, `credit`, `grade`, `name`) VALUES
('L4T1', 'CSE-447', 3, 2, 'Neural Networks and Fuzzy Logic'),
('L1T1', 'CSE_141', 3, 3, 'Computer Basis & Programming'),
('L1T1', 'CSE_142', 1.5, 4, 'Computer Basis & Programming(sessional)'),
('L4T1', 'CSE_411', 3, 3.5, 'Computer Network '),
('L4T1', 'CSE_412', 0.75, 3.5, 'Computer Network(Sessional)'),
('L4T1', 'CSE_431', 3, 3, 'Compiler Design'),
('L4T1', 'CSE_432', 1.5, 3.25, 'Compiler Design(Sessional )'),
('L4T1', 'CSE_437', 3, 3.25, 'Computer peripherals and Interfacing '),
('L4T1', 'CSE_438', 0.75, 3.25, 'Computer peripherals and Interfacing(Sessional)'),
('L4T1', 'CSE_487', 3, 2.75, 'Communication Engineering'),
('L1T1', 'Hum_141', 4, 2.5, 'English and Economics'),
('L1T1', 'Math_141', 3, 2.75, 'Differentiation and Integration'),
('L1T1', 'ME_143', 3, 3.5, 'Basic Mechanical Engineering'),
('L1T1', 'ME_144', 0.75, 3, 'Basic Mechanical Engineering(sessional)'),
('L1T1', 'Phy_141', 3, 2.75, 'Physics'),
('L1T1', 'Phy_142', 1.5, 3.75, 'Physics(sessional)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_result`
--
ALTER TABLE `tb_result`
  ADD PRIMARY KEY (`course`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
