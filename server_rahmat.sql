-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2018 at 03:41 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `server_rahmat`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(3) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(14, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `t_lampu`
--

CREATE TABLE `t_lampu` (
  `id` int(2) NOT NULL,
  `nama_lampu` varchar(99) NOT NULL,
  `lokasi` varchar(99) NOT NULL,
  `state` int(1) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_lampu`
--

INSERT INTO `t_lampu` (`id`, `nama_lampu`, `lokasi`, `state`, `datetime`) VALUES
(1, 'Lampu 1', 'Lantai 1', 1, '2018-01-02 21:49:15'),
(2, 'Lampu 2', 'Lantai 1', 1, '2018-01-02 21:49:15'),
(3, 'Lampu 3', 'Lantai 1', 1, '2018-01-02 21:49:15'),
(4, 'Lampu 4', 'Lantai 1', 1, '2018-01-02 21:49:15'),
(5, 'Lampu 5', 'Lantai 2', 1, '2018-01-02 21:49:20'),
(6, 'Lampu 6', 'Lantai 2', 1, '2018-01-02 21:49:20'),
(7, 'Lampu 7', 'Lantai 2', 1, '2018-01-02 21:49:20'),
(8, 'Lampu 8 ', 'Lantai 2', 1, '2018-01-02 21:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `t_sensor`
--

CREATE TABLE `t_sensor` (
  `id_s` int(5) NOT NULL,
  `nm_sensor` varchar(15) NOT NULL,
  `nilai` int(11) NOT NULL,
  `status` enum('gelap','redup','terang','terang_sekali') NOT NULL,
  `tgl_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_sensor`
--

INSERT INTO `t_sensor` (`id_s`, `nm_sensor`, `nilai`, `status`, `tgl_update`) VALUES
(1, 'Sensor 1', 450, 'terang', '2017-09-12 05:22:15'),
(2, 'Sensor 2', 465, 'terang_sekali', '2017-09-06 07:15:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_lampu`
--
ALTER TABLE `t_lampu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_sensor`
--
ALTER TABLE `t_sensor`
  ADD PRIMARY KEY (`id_s`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `t_lampu`
--
ALTER TABLE `t_lampu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `t_sensor`
--
ALTER TABLE `t_sensor`
  MODIFY `id_s` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
