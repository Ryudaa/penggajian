-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 01:10 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penggajian`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `kdkaryawan` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notelp` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`kdkaryawan`, `nama`, `alamat`, `notelp`, `email`) VALUES
('00002', 'Budi', 'Kudus', '0821321', 'budi@sss'),
('00003', 'Caca', 'Surabaya', '0821314', 'Caca@kkk'),
('00004', 'Danu', 'Surakarta', '08213412', 'danu@gg'),
('00005', 'Eka', 'Kudus', '0812313', 'eka@gg'),
('00006', 'Farhan', 'Kudus', '0815233', 'farhan@gg'),
('00007', 'Ganesha', 'Kudus', '08766214', 'Ganesh69@gg'),
('00008', 'Harun', 'Cilacap', '0876634', 'harun@gg'),
('00009', 'Intan', 'Surakarta', '0852324', 'intan@gg'),
('00010', 'Jamal', 'Kudus', '08213145', 'jamal@gg'),
('00011', 'Kamelia', 'Kudus', '086723574', 'kameliacantik@gg'),
('00012', 'Lia', 'Kudus', '0826354', 'liacynkkmu@gg'),
('00013', 'Mahmud', 'Kudus', '0867465136', 'mahmud@gg'),
('00014', 'Nisa', 'Bojonegoro', '081624571', 'nisa@gg'),
('00015', 'Oktaviani', 'Gresik', '086723567', 'vivi@gg'),
('00016', 'Putri', 'Kudus', '08657465', 'putri@gg'),
('00017', 'Qi Yuin Yang', 'Jakarta', '0813414757', 'qiqi@gg'),
('00018', 'Rizal', 'Semarang', '086574657', 'rizal@gg'),
('00019', 'Sarah', 'Surakarta', '08757421315', 'sarah@gg'),
('00020', 'Tika', 'Surakarta', '089265784', 'tika@gg'),
('00021', 'Ulya', 'Surakarta', '08723656', 'ulya@gg'),
('00022', 'Vindy', 'Kudus', '087236582326', 'vindi@gg');

-- --------------------------------------------------------

--
-- Table structure for table `penggajian`
--

CREATE TABLE `penggajian` (
  `kdgaji` int(255) NOT NULL,
  `kdkaryawan` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `bulan` varchar(9) NOT NULL,
  `tahun` int(4) NOT NULL,
  `nominal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penggajian`
--

INSERT INTO `penggajian` (`kdgaji`, `kdkaryawan`, `tanggal`, `bulan`, `tahun`, `nominal`) VALUES
(3, '00005', '2018-10-29', 'Maret', 1999, '2300000'),
(4, '00006', '2020-06-03', 'Februari', 2018, '232323'),
(5, '00003', '2020-06-03', 'Januari', 2021, '23414');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`kdkaryawan`);

--
-- Indexes for table `penggajian`
--
ALTER TABLE `penggajian`
  ADD PRIMARY KEY (`kdgaji`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penggajian`
--
ALTER TABLE `penggajian`
  MODIFY `kdgaji` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
