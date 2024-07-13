-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 09, 2023 at 02:31 PM
-- Server version: 10.9.2-MariaDB-log
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal_absen` date DEFAULT NULL,
  `jam_masuk` time DEFAULT NULL,
  `lang_masuk` varchar(255) DEFAULT NULL,
  `long_masuk` varchar(255) DEFAULT NULL,
  `jam_pulang` time DEFAULT NULL,
  `long_pulang` varchar(255) DEFAULT NULL,
  `lang_pulang` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `jenis_cuti` enum('Cuti Tahunan','Cuti Roster','Cuti Melahirkan','Cuti Ibadah') DEFAULT NULL,
  `tanggal_mulai_cuti` date DEFAULT NULL,
  `tanggal_selesai_cuti` date DEFAULT NULL,
  `status_cuti` enum('Proses','Disetujui','Ditolak') DEFAULT NULL,
  `alasan_tolak_cuti` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id_golongan` int(11) NOT NULL,
  `nama_golongan` varchar(255) DEFAULT NULL,
  `gaji` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id_golongan`, `nama_golongan`, `gaji`) VALUES
(1, 'Golongan I', '5000000'),
(2, 'Golongan II/A', '5500000'),
(3, 'Golongan II/B', '6000000'),
(4, 'Golongan II/C', '6500000'),
(5, 'Golongan II/D', '7000000'),
(6, 'Golongan III/A', '7500000'),
(7, 'Golongan III/B', '8000000'),
(8, 'Golongan III/C', '8500000'),
(9, 'Golongan III/D', '9000000'),
(10, 'Golongan IV/A', '9500000'),
(11, 'Golongan IV/B', '10000000'),
(12, 'Golongan IV/C', '10500000'),
(13, 'Golongan IV/D', '11000000'),
(14, 'Golongan IV/E', '11500000');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) DEFAULT NULL,
  `tanggal_kegiatan` date DEFAULT NULL,
  `jam_kegiatan` time DEFAULT NULL,
  `keterangan_kegiatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kehadirankegiatan`
--

CREATE TABLE `kehadirankegiatan` (
  `id_kehadirankegiatan` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_kegiatan` int(11) DEFAULT NULL,
  `status_kehadiran` enum('Hadir','Tidak Hadir') DEFAULT NULL,
  `keterangan_kehadiran_kegiatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perjalanandinas`
--

CREATE TABLE `perjalanandinas` (
  `id_perjalanandinas` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal_perjalanandinas` date DEFAULT NULL,
  `jenis_tujuan` enum('Domestik','Manca Negara') DEFAULT NULL,
  `kepentingan` varchar(255) DEFAULT NULL,
  `tipe_transportasi` enum('Pesawat','Mobil','Lainnya') DEFAULT NULL,
  `total_tujuan` enum('1','2','3','4','5') DEFAULT NULL,
  `jumlah_biaya` varchar(255) DEFAULT NULL,
  `status_perjalanandinas` enum('Proses','Terima','Tolak') DEFAULT NULL,
  `keterangan_pengajuan_ditolak` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(11) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `nama_ketua` text NOT NULL,
  `nip_ketua` text NOT NULL,
  `logo_kantor` text NOT NULL,
  `background_login` text NOT NULL,
  `background_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `nama`, `alamat`, `nama_ketua`, `nip_ketua`, `logo_kantor`, `background_login`, `background_user`) VALUES
(1, 'Pengadaan Barang dan Jasa', 'a', 'Anwar', ' ', 'logo.png', 'qrcode.png', 'background.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `spt`
--

CREATE TABLE `spt` (
  `id_spt` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal_spt` date DEFAULT NULL,
  `bukti_spt` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `kontak` varchar(30) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `kebangsaan` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jk` varchar(255) DEFAULT NULL,
  `kawin` varchar(255) DEFAULT NULL,
  `npwp` varchar(20) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status_kepegawaian` varchar(255) DEFAULT NULL,
  `no_pegawai` int(20) DEFAULT NULL,
  `cost_center` varchar(255) DEFAULT NULL,
  `tanggal_bergabung` date DEFAULT NULL,
  `tanggal_ng` date DEFAULT NULL,
  `divisi` varchar(255) DEFAULT NULL,
  `ttd` varchar(255) DEFAULT NULL,
  `level` enum('Administrator','Karyawan') NOT NULL,
  `id_golongan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `kontak`, `alamat`, `username`, `password`, `kebangsaan`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jk`, `kawin`, `npwp`, `agama`, `email`, `status_kepegawaian`, `no_pegawai`, `cost_center`, `tanggal_bergabung`, `tanggal_ng`, `divisi`, `ttd`, `level`, `id_golongan`) VALUES
(1, 'Administrator', '085173333433', '-', 'admin', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, 'Administrator', NULL),
(2, 'Muhammad Iqbal', '085273333433', 'Banjarbaru', 'karyawan', 'karyawan', 'Indonesia', '6303051206980010', 'Trenggalek', '1969-01-27', 'Laki-Laki', 'Kawin', '623.213.123.12', 'Islam', 'rcesarmorales@gmail.com', 'Karyawan Tetap', 12312313, 'PT Sinar Jaya Baru', '2017-01-29', '2017-01-29', NULL, 'qrcode.png', 'Karyawan', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kehadirankegiatan`
--
ALTER TABLE `kehadirankegiatan`
  ADD PRIMARY KEY (`id_kehadirankegiatan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kegiatan` (`id_kegiatan`);

--
-- Indexes for table `perjalanandinas`
--
ALTER TABLE `perjalanandinas`
  ADD PRIMARY KEY (`id_perjalanandinas`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `spt`
--
ALTER TABLE `spt`
  ADD PRIMARY KEY (`id_spt`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_golongan` (`id_golongan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kehadirankegiatan`
--
ALTER TABLE `kehadirankegiatan`
  MODIFY `id_kehadirankegiatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perjalanandinas`
--
ALTER TABLE `perjalanandinas`
  MODIFY `id_perjalanandinas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spt`
--
ALTER TABLE `spt`
  MODIFY `id_spt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cuti`
--
ALTER TABLE `cuti`
  ADD CONSTRAINT `cuti_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perjalanandinas`
--
ALTER TABLE `perjalanandinas`
  ADD CONSTRAINT `perjalanandinas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `spt`
--
ALTER TABLE `spt`
  ADD CONSTRAINT `spt_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_golongan`) REFERENCES `golongan` (`id_golongan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
