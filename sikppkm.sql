-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2017 at 02:00 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikppkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'adminku'),
(2, 'arya', 'aryadna'),
(3, 'joko', 'lambda');

-- --------------------------------------------------------

--
-- Table structure for table `kependudukan`
--

CREATE TABLE `kependudukan` (
  `id` int(10) NOT NULL,
  `nik` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `ID_komentar` int(10) NOT NULL COMMENT '101',
  `komentar` varchar(140) NOT NULL,
  `username` varchar(12) NOT NULL,
  `ID_Project` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `ID_Project` varchar(10) NOT NULL,
  `judul` varchar(80) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `priority` int(5) NOT NULL,
  `satisfaction` int(5) NOT NULL,
  `progress` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ID_Project`, `judul`, `isi`, `priority`, `satisfaction`, `progress`) VALUES
('111AB', 'Jembatan Layang', 'Jembatan penghubung yang menghubungkan Kampung Kuliner dengan wisata Watu Bengkung.', 8, 4, 89),
('111CB', 'Kampung Kuliner', 'Kampung dengan berbagai macam kuliner khas Malang yang dapat dinikmati pengunjung.', 5, 10, 55),
('111BM', 'Wisata Batu Wengkung', 'Wisata nuansa alam dengan kolam air dari mata air dan dekat dengan air terjun yang terawat.', 0, 3, 100);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `ID_report` int(11) NOT NULL,
  `report` varchar(140) NOT NULL,
  `status` varchar(10) NOT NULL,
  `username` varchar(12) NOT NULL,
  `ID_project` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`ID_report`, `report`, `status`, `username`, `ID_project`) VALUES
(6, 'astar.PNG', 'pending', 'budianto', '111CB');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `noTelp` varchar(14) NOT NULL,
  `NIK` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `noTelp`, `NIK`) VALUES
('budianto', 'budianto', 'budd@mail.com', '08888888', '123456789'),
('jakawid', 'jakajaka', 'jaka@mail.com', '089999999', '123645978'),
('kambing', 'kambingku', 'kambing@ymail.c', '087123789123', '3312412313212');

-- --------------------------------------------------------

--
-- Table structure for table `usulan`
--

CREATE TABLE `usulan` (
  `id_usulan` int(10) NOT NULL,
  `username` varchar(12) NOT NULL,
  `judul` varchar(80) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `vote` int(5) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `usulan`
--

INSERT INTO `usulan` (`id_usulan`, `username`, `judul`, `isi`, `vote`, `status`) VALUES
(1, 'budianto', 'Green Park', 'Sebuah area taman asri, diperuntukkan untuk bersantai dengan fasilitas menyenangkan dan kemudahan akses bagi pengunjung.', 3, 'approve'),
(2, 'budianto', 'CFD', 'asdasdasdadas', 0, 'approve');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kependudukan`
--
ALTER TABLE `kependudukan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`ID_komentar`),
  ADD KEY `username` (`username`),
  ADD KEY `ID_Project` (`ID_Project`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ID_Project`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`ID_report`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `usulan`
--
ALTER TABLE `usulan`
  ADD PRIMARY KEY (`id_usulan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kependudukan`
--
ALTER TABLE `kependudukan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `ID_komentar` int(10) NOT NULL AUTO_INCREMENT COMMENT '101';
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `ID_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `usulan`
--
ALTER TABLE `usulan`
  MODIFY `id_usulan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
