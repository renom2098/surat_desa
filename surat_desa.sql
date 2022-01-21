-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 01:50 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelola_surat`
--

CREATE TABLE `kelola_surat` (
  `id` int(11) NOT NULL,
  `nama_surat` text DEFAULT NULL,
  `deskripsi_surat` text DEFAULT NULL,
  `dari` varchar(128) DEFAULT NULL,
  `nomor_kk` varchar(128) DEFAULT NULL,
  `nomor_nik` varchar(128) DEFAULT NULL,
  `upload_ktp` varchar(500) DEFAULT NULL,
  `upload_kk` varchar(500) DEFAULT NULL,
  `agama` varchar(128) DEFAULT NULL,
  `jenis_kelamin` varchar(128) DEFAULT NULL,
  `tempat_lahir` varchar(128) DEFAULT NULL,
  `tanggal_lahir` varchar(128) DEFAULT NULL,
  `pekerjaan` varchar(128) DEFAULT NULL,
  `alamat` varchar(128) DEFAULT NULL,
  `file_surat_dw` varchar(500) DEFAULT NULL COMMENT 'surat dari warga',
  `file_surat_dsd` varchar(500) DEFAULT NULL COMMENT 'surat dari staf desa',
  `status_surat` int(11) NOT NULL DEFAULT 1,
  `komentar_surat` text DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelola_surat`
--

INSERT INTO `kelola_surat` (`id`, `nama_surat`, `deskripsi_surat`, `dari`, `nomor_kk`, `nomor_nik`, `upload_ktp`, `upload_kk`, `agama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `alamat`, `file_surat_dw`, `file_surat_dsd`, `status_surat`, `komentar_surat`, `id_user`) VALUES
(1, 'Pengajuan pembuatan KK', 'lampiran tembusan untuk membuat KK', 'Warga01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '', 0),
(2, 'surat untuk pembuatan SIM  cek ', 'pembuatan SIM di samsat membutuhkan surat dari desa  cek ', 'Coba cek', '101010 cek', '1010 cek', NULL, NULL, 'aa', 'dd', 'hh', 'ss', 'aa', 'gg', NULL, 'RH_StudyGuide_V24.pdf', 3, 'good', 0),
(29, 'Cek7  ', 'Cek8  ', 'Cek', '11', '22', 'foto_bebas.jpg', 'foto_kk1.jpg', 'Cek2', 'Cek3', 'Cek4', '12', 'Cek5', 'Cek6', NULL, '', 1, ' ', 0),
(30, 'Pembuatan Surat Domisili  ', 'Deskripsi Pembuatan Surat Domisili  ', 'Nama Dari Orang', '332211', '112233', 'blangko-kosong-e-ktp.jpg', 'KARTU_KELUARGA_KOSONGAN.png', 'Agama', 'Laki-Laki', 'Subang', '11 Oktober 2000', 'Staff IT PT Mekanik Jaya', 'Subang', NULL, 'RH_StudyGuide_V27.pdf', 3, 'KTP agak buram tolong foto dan upload ulang ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `level_user`
--

CREATE TABLE `level_user` (
  `id` int(11) NOT NULL,
  `nama_level` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level_user`
--

INSERT INTO `level_user` (`id`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'Staff Desa'),
(3, 'Warga');

-- --------------------------------------------------------

--
-- Table structure for table `status_surat`
--

CREATE TABLE `status_surat` (
  `id` int(11) NOT NULL,
  `nama_status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_surat`
--

INSERT INTO `status_surat` (`id`, `nama_status`) VALUES
(1, 'Surat sedang diproses di pelayanan desa'),
(2, 'Surat Ditolak'),
(3, 'Surat Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', 'admin', 'admin bin admin', 1),
(2, 'romi', 'romi', 'romi fahrenheit', 2),
(3, 'warga1', 'warga1', 'warga 1 warga 1', 3),
(4, 'warga2', 'warga2', 'warga 2', 3),
(10, 'warga3', 'warga3', 'Warga 3', 3),
(11, 'warga4', 'warga4', 'Warga 4', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelola_surat`
--
ALTER TABLE `kelola_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level_user`
--
ALTER TABLE `level_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_surat`
--
ALTER TABLE `status_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelola_surat`
--
ALTER TABLE `kelola_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `level_user`
--
ALTER TABLE `level_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status_surat`
--
ALTER TABLE `status_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
