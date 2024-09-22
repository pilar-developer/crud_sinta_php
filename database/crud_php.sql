-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2024 at 05:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama`, `username`, `email`, `password`, `level`) VALUES
(7, 'Awe Wewewewe', 'arif', 'awe13@gmail.com', '$2y$10$IR7jOF0TXbr2Jp6ZoKYNxOhJii5ZImYnQoThQnFzW7k40TktyDpZm', '2'),
(8, 'Muhamad Arif', 'awe', 'arif130401@gmail.com', '$2y$10$X6jsVmWajpnAjEaNpnQlLusnFVMJWKjQJBoPl63ypPIg.y6Xl3LoK', 'Ad'),
(10, 'admin', 'admin', 'admin2@gmail.com', '$2y$10$n4U0t8v4FiFSIlOnoXCaZ.C9rRJH1bU7DAfoJi05cgCn96FP87m6S', '2'),
(11, 'Sekar Dwi', 'sekar', 'sekar@gmail.com', '$2y$10$Xvjc3hsM45Co6r/ZmyD1HOk7i2ANOtqmDdYoCZ9XwGIT/nzixLAyy', '1');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nidn` char(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `mata_kuliah` varchar(30) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `ruang` varchar(30) NOT NULL,
  `nohp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nidn`, `nama`, `mata_kuliah`, `kelas`, `email`, `ruang`, `nohp`) VALUES
(1, '1265445', 'Achmad', 'Pemrograman Berorientasi Objek', 'TI21R2', 'achmad@gmail.com', 'Labkom 2', '089182781916'),
(3, '777790', 'Roy Amrullah, M. Kom', 'Perancangan & Pemrograman Web', 'TI20R2', 'roy45@gmail.com', 'Labkom 1', '08917191081222'),
(6, '777790000', 'Fahrudin, M, M.Kom', 'Mobile Programming', 'SI21R1', 'fahrudin@gmail.com', 'Labkom 3', '0897164241'),
(7, '0082716', 'Roy Setiawan, M. Kom', 'Perancangan & Pemrograman Web', 'SI22R1', 'royiu@gmail.com', 'Labkom 4', '089999999999999'),
(8, '0011192', 'Putri Lestari, S. Pd', 'Pemahaman Etika Beragama', 'SI21R2', 'putriiu@gmail.com', 'L003', '0888888888'),
(10, '00891827', 'Muhamad Arif Setiawa', 'Mobile Programming', 'TI22R1', 'setiawan78@gmail.com', 'Labkom 4', '089726515241');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` char(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `jk` varchar(25) NOT NULL,
  `nohp` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim`, `nama`, `jurusan`, `jk`, `nohp`, `email`, `alamat`, `foto`) VALUES
(1, '2019182790', 'Awe', 'Sistem Informasi', 'Laki-Laki', '082928121212', 'awe117@gmail.com', 'Cilegon', ''),
(2, '20198271', 'Fitriah', 'Teknik Informatika', 'Perempuan', '08888277777', 'fit637@gmail.com', 'Merak', ''),
(5, '20819182', 'Mia Khalifah', 'Sistem Informasi', 'Perempuan', '0838198271', 'mia12@gmail.com', 'Jakarta Pusat', ''),
(6, '2021120202', 'Muhamad Arif', 'Teknik Informatika', 'Laki-Laki', '0892817191', 'arif2@gmail.com', 'Gerogol', ''),
(7, '20281720', 'Sekar Dwi', 'Komputerisasi Akutansi', 'Perempuan', '089765525413', 'sdwi5@gmail.com', 'Cilegon', ''),
(8, '2022111030', 'Lestari Indah', 'Manajemen Informatika', 'Perempuan', '08191727', 'lestari90@gmail.com', 'Mancak', '');

-- --------------------------------------------------------

--
-- Table structure for table `ta`
--

CREATE TABLE `ta` (
  `id` int(11) NOT NULL,
  `nota` varchar(20) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `mahasiswa` varchar(100) NOT NULL,
  `pembimbing` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ta`
--

INSERT INTO `ta` (`id`, `nota`, `judul`, `mahasiswa`, `pembimbing`) VALUES
(1, '20918189', 'Sistem Informasi Manajemen Sekolah Berbasis Mobile', 'Susilawati', 'Susy, MM. Kom'),
(3, '8901', 'Sistem Perpustakaan Berbasis Web Pada STTIKOM Insan Unggul', 'Muhamad Arif', 'Roy, M. Kom');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_buah`
--

CREATE TABLE `tabel_buah` (
  `id_buah` int(15) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `tanggal_masuk` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `harga` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_buah`
--

INSERT INTO `tabel_buah` (`id_buah`, `kode`, `nama`, `jenis`, `tanggal_masuk`, `harga`) VALUES
(4, 'A001', 'Jeruk Bandung', 'Lokal', '2024-02-07 17:00:00', 'Rp. 15.000'),
(5, 'A002', 'Jeruk Cilegon', 'Lokal', '2024-01-31 17:00:00', 'Rp. 25.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `ta`
--
ALTER TABLE `ta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_buah`
--
ALTER TABLE `tabel_buah`
  ADD PRIMARY KEY (`id_buah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ta`
--
ALTER TABLE `ta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_buah`
--
ALTER TABLE `tabel_buah`
  MODIFY `id_buah` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
