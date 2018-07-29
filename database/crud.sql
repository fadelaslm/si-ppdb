-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 12:00 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_tugas`
--

CREATE TABLE `tb_tugas` (
  `id` int(11) NOT NULL,
  `nama_tugas` varchar(250) NOT NULL,
  `matkul` varchar(150) NOT NULL,
  `dosen` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `mulai` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `akhir` datetime NOT NULL,
  `keterangan` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tugas`
--

INSERT INTO `tb_tugas` (`id`, `nama_tugas`, `matkul`, `dosen`, `kelas`, `mulai`, `akhir`, `keterangan`, `status`) VALUES
(1, 'Tugas Pemrograman', 'Algoritma Pemrograman', 'Ahlihi Masruro, M.Kom', 'D3-TI-01', '2018-01-12 23:53:23', '2018-01-30 00:00:00', 'Buatlah program sesuai lampiran di link ini https://goo.gl/tugas', 1),
(2, 'Remastering', 'Sistem Operasi', 'Eny Pujiastuti, M.Kom', 'D3-TI-01', '2018-01-13 00:58:17', '2018-01-30 00:00:00', 'Buatlah program sesuai lampiran di link ini https://goo.gl/tugas', 1),
(3, 'Tugas KKPI', 'KKPI', 'Joko Dwi Santoso, M.Kom', 'D3-TI-01', '2018-01-13 00:58:27', '2018-01-30 00:00:00', 'Buatlah program sesuai lampiran di link ini https://goo.gl/tugas', 1),
(4, 'Tugas Jarkom', 'Jarkom II', 'Melwin Syafrizal, M.Kom', 'D3-TI-01', '2018-01-13 00:58:36', '2018-01-30 00:00:00', 'Buatlah program sesuai lampiran di link ini https://goo.gl/tugas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_auth`
--

CREATE TABLE `users_auth` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_auth`
--

INSERT INTO `users_auth` (`id`, `username`, `password`, `status`) VALUES
(1, 'user', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'kamil', '81dc9bdb52d04dc20036dbd8313ed055', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `id_usr` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `kelas` varchar(150) NOT NULL,
  `jurusan` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `id_usr`, `nama`, `kelas`, `jurusan`, `alamat`, `telp`, `photo`) VALUES
(1, 2, 'Kamil', 'D3-TI-01', 'Diploma III Teknik Informatika', '', '', ''),
(2, 1, 'Robin', 'D3-TI-05', 'Diploma III Teknik Informatika', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_auth`
--
ALTER TABLE `users_auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_auth`
--
ALTER TABLE `users_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
