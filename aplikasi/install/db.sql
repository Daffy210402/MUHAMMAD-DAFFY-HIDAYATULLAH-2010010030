-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 16 Jul 2024 pada 06.14
-- Versi server: 11.4.0-MariaDB-log
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daffy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal_pengajuan` date DEFAULT NULL,
  `dari_tanggal` date DEFAULT NULL,
  `sampai_tanggal` date DEFAULT NULL,
  `tipe_cuti` enum('Sakit','Izin') DEFAULT NULL,
  `keterangan_cuti` varchar(255) DEFAULT NULL,
  `status_cuti` enum('Proses','Diterima','Ditolak') DEFAULT NULL,
  `upload` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Kepala Seksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi`
--

CREATE TABLE `mutasi` (
  `id_mutasi` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tgl_mutasi` date DEFAULT NULL,
  `keterangan_mutasi` varchar(255) DEFAULT NULL,
  `upload` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `naik_gaji`
--

CREATE TABLE `naik_gaji` (
  `id_naik_gaji` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal_pengajuan` date DEFAULT NULL,
  `gaji_awal` varchar(255) DEFAULT NULL,
  `gaji_berikutnya` varchar(255) DEFAULT NULL,
  `ketarangan_gaji` varchar(255) DEFAULT NULL,
  `status_gaji` enum('Pending','Selesai') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `naik_pangkat`
--

CREATE TABLE `naik_pangkat` (
  `id_naik_pangkat` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_pangkat_awal` int(11) DEFAULT NULL,
  `id_pangkat_berikutnya` int(11) DEFAULT NULL,
  `tanggal_pengajuan` date DEFAULT NULL,
  `alasan_pengajuan` varchar(255) DEFAULT NULL,
  `status_pengajuan` enum('Pending','Selesai') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pangkat`
--

CREATE TABLE `pangkat` (
  `id_pangkat` int(11) NOT NULL,
  `nama_pangkat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pangkat`
--

INSERT INTO `pangkat` (`id_pangkat`, `nama_pangkat`) VALUES
(1, 'Golongan II'),
(2, 'Golongan I'),
(3, 'Ketua/VI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pensiun`
--

CREATE TABLE `pensiun` (
  `id_pensiun` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal_pengajuan` date DEFAULT NULL,
  `tanggal_pensiun` date DEFAULT NULL,
  `alasan_pensiun` varchar(255) DEFAULT NULL,
  `upload` text NOT NULL,
  `status_pensiun` enum('Proses','Diterima','Ditolak') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `skp`
--

CREATE TABLE `skp` (
  `id_skp` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal_skp` date DEFAULT NULL,
  `unit_kerja` varchar(255) DEFAULT NULL,
  `nilai_skp` int(11) DEFAULT NULL,
  `orientasi_pelayanan` int(11) DEFAULT NULL,
  `integritas` int(11) DEFAULT NULL,
  `komitmen` int(11) DEFAULT NULL,
  `disiplin` int(11) DEFAULT NULL,
  `kerjasama` int(11) DEFAULT NULL,
  `kepemimpinan` int(11) DEFAULT NULL,
  `id_ppenilai` int(11) DEFAULT NULL,
  `id_papenilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sppd`
--

CREATE TABLE `sppd` (
  `id_sppd` int(11) NOT NULL,
  `id_spt` int(11) DEFAULT NULL,
  `status_sppd` enum('Proses','Diterima','Ditolak') DEFAULT NULL,
  `tanggal_sppd` date DEFAULT NULL,
  `upload_sppd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `spt`
--

CREATE TABLE `spt` (
  `id_spt` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal_perintah` date DEFAULT NULL,
  `tujuan_perintah` varchar(255) DEFAULT NULL,
  `dari_tanggal` date DEFAULT NULL,
  `sampai_tanggal` date DEFAULT NULL,
  `keterangan_perintah` varchar(255) DEFAULT NULL,
  `upload` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `unitkerja`
--

CREATE TABLE `unitkerja` (
  `id_unitkerja` int(11) NOT NULL,
  `nama_unitkerja` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `unitkerja`
--

INSERT INTO `unitkerja` (`id_unitkerja`, `nama_unitkerja`) VALUES
(1, 'Bagian Pengadaan Barang/Jasa Kabupaten Tapin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_pangkat` int(11) NOT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `id_unitkerja` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_pengguna` varchar(255) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `akses` enum('Administrator','Pegawai') DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `tanggal_np` date DEFAULT NULL,
  `tanggal_ng` date DEFAULT NULL,
  `agama` enum('Islam','Hindu','Budha','Kristen','Katolik','Konghuchu','Protestan') DEFAULT NULL,
  `gaji` varchar(20) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_pangkat`, `id_jabatan`, `id_unitkerja`, `nip`, `nama_pengguna`, `telp`, `email`, `password`, `akses`, `tanggal_lahir`, `alamat`, `tanggal_masuk`, `tanggal_np`, `tanggal_ng`, `agama`, `gaji`, `foto`) VALUES
(1, 1, 1, 1, '31111111111', 'Administrator', '0888778', 'admin', 'admin', 'Administrator', '1998-06-11', 'abc', '2000-02-04', '2020-06-23', NULL, 'Islam', '', 'user.png'),
(2, 1, 1, 1, '310117012526', 'Udin', '082310838377', 'user@gmail.com', 'user', 'Pegawai', '1998-06-11', 'abc', '2000-02-04', '2020-04-01', '2022-06-09', 'Islam', '2000000', 'cropped-logo-uniska-ok.png'),
(3, 1, 1, 1, '', 'Imam', '081234567890', 'tycops07@gmail.com', '1234', 'Pegawai', '1994-01-06', 'banjarbaru', '2020-01-21', '2022-06-08', '2021-06-15', 'Islam', '5000000', ''),
(4, 1, 1, 1, '310224012526', 'Imam 2', '081234567890', 'tycops07@gmail.com', '1234', 'Pegawai', '1994-01-06', 'banjarbaru', '2020-01-21', '2024-07-16', '2021-06-15', 'Islam', '5000000', 'cropped-logo-uniska-ok.png'),
(5, 1, 1, 1, '', 'Imam3', '081234567890', 'tycops07@gmail.com', '1234', 'Pegawai', '1994-01-06', 'banjarbaru', '2018-01-01', '2018-07-02', '2019-06-01', 'Islam', '5000000', ''),
(6, 1, 1, 1, '11222333344455', 'Daffy', '082310838377', 'ttt@tt.com', '1234', 'Pegawai', '1990-01-16', 'banjarbaru', '2020-01-07', '2022-07-02', '2020-01-07', 'Islam', '2000000', 'Ivan Borneo.jpg'),
(7, 1, 1, 1, '445666888', 'Sondang', '123123', 'ss@ss.cc', '1234', 'Pegawai', '1969-12-31', 'JL. TRIKORA NO. 3 BANJARBARU', '2000-01-13', '2000-01-13', '2000-01-13', 'Islam', '10000000', 'cropped-logo-uniska-ok.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`),
  ADD KEY `Pegawai` (`id_user`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id_mutasi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `naik_gaji`
--
ALTER TABLE `naik_gaji`
  ADD PRIMARY KEY (`id_naik_gaji`);

--
-- Indeks untuk tabel `naik_pangkat`
--
ALTER TABLE `naik_pangkat`
  ADD PRIMARY KEY (`id_naik_pangkat`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `pangkat`
--
ALTER TABLE `pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- Indeks untuk tabel `pensiun`
--
ALTER TABLE `pensiun`
  ADD PRIMARY KEY (`id_pensiun`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `skp`
--
ALTER TABLE `skp`
  ADD PRIMARY KEY (`id_skp`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_ppenilai` (`id_ppenilai`),
  ADD KEY `id_papenilai` (`id_papenilai`);

--
-- Indeks untuk tabel `sppd`
--
ALTER TABLE `sppd`
  ADD PRIMARY KEY (`id_sppd`),
  ADD KEY `id_spt` (`id_spt`);

--
-- Indeks untuk tabel `spt`
--
ALTER TABLE `spt`
  ADD PRIMARY KEY (`id_spt`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `unitkerja`
--
ALTER TABLE `unitkerja`
  ADD PRIMARY KEY (`id_unitkerja`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_pangkat` (`id_pangkat`),
  ADD KEY `id_unitkerja` (`id_unitkerja`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `naik_gaji`
--
ALTER TABLE `naik_gaji`
  MODIFY `id_naik_gaji` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `naik_pangkat`
--
ALTER TABLE `naik_pangkat`
  MODIFY `id_naik_pangkat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pangkat`
--
ALTER TABLE `pangkat`
  MODIFY `id_pangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pensiun`
--
ALTER TABLE `pensiun`
  MODIFY `id_pensiun` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `skp`
--
ALTER TABLE `skp`
  MODIFY `id_skp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sppd`
--
ALTER TABLE `sppd`
  MODIFY `id_sppd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `spt`
--
ALTER TABLE `spt`
  MODIFY `id_spt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `unitkerja`
--
ALTER TABLE `unitkerja`
  MODIFY `id_unitkerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
