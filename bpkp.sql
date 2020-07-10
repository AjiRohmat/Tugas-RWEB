-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 09:36 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpkp`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `hp`, `alamat`, `email`) VALUES
(50, 'Aji Rohmat Hakim', '082245261234', 'Cawas,Klaten,Jawa tengah', 'rohmathakim46@gmail.com'),
(51, 'Aden Setia Hadi', '089971614212', 'Pedan,Klaten, Jawa Tengah', 'Adensetiah78@gmail.com'),
(73, 'Auliana Ayu S', '08672615121', 'Sukoharjo, Jawatengah', 'aulianaayu321@gmail.com'),
(74, 'Diandra Eka Safitri', '082343345345', 'Bayat, Klaten , Jawa tengah', 'diandraeka324@gmail.com'),
(75, 'Agus Promono', '08466456443', 'Cawas,Klaten,Jawa tengah', 'aguspromono24@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `tanggal`, `isi`) VALUES
(15, 'BPKP Dampingi K/L agar Penanganan COVID-19 Cepat dan Akuntabel', '2020-07-10', 'Jakarta (10/7) - Deputi Kepala BPKP Bidwas Instansi Pemerintah Bidang Perekonomian dan Kemaritiman Salamat Simanullang menegaskan, BPKP tidak mempersulit penggunaan anggaran, melainkan membuka ruang pendampingan agar penyerapan anggaran penanganan Covid-19 cepat dan akuntabel.'),
(16, 'BPKP dan Pemprov Riau Jalin Kerja Sama Mata Bansos', '2020-07-10', 'Jakarta (10/7) - Auditorium Gandhi menjadi saksi penandatanganan nota kesepakatan oleh Deputi Kepala BPKP Bidang Pengawasan Penyelenggaraan Keuangan Daerah (PPKD) Dadang Kurnia dan Gubernur Provinsi Riau Syamsuar. Nota kesepakatan ini terkait penggunaan kode (source code) aplikasi monitoring data bantuan sosial (Mata Bansos) untuk pengembangan sistem pengawasan dana bantuan pemerintah yang dilakukan. Kegiatan ini dihadiri oleh Sekretaris Utama BPKP Ernadhi Sudarmanto, Deputi Kepala BPKP Bidwas PIP Bidang Polhukam PMK Iwan Taufiq Purwanto, dan Kepala Perwakilan BPKP Provinsi Riau Farid Firman.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama`) VALUES
(1, 'ajirohmat', '12345', 'Aji Rohmat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
