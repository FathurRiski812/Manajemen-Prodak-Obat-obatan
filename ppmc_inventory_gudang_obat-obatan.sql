-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2024 pada 12.22
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppmc_inventory_gudang_obat-obatan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mutasi`
--

CREATE TABLE `tb_mutasi` (
  `Id_Mutasi` int(8) NOT NULL,
  `Id_Pegawai` int(8) NOT NULL,
  `Kode_Obat` int(8) NOT NULL,
  `Jumlah_Masuk` varchar(20) NOT NULL,
  `Jumlah_Keluar` varchar(20) NOT NULL,
  `Tanggal_Mutasi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_obat`
--

CREATE TABLE `tb_obat` (
  `KodeObat` int(8) NOT NULL,
  `Nama_Obat` varchar(25) NOT NULL,
  `Jenis_Obat` varchar(25) NOT NULL,
  `Tanggal_Expired` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `Id_Pegawai` int(8) NOT NULL,
  `Nama_Pegawai` varchar(25) NOT NULL,
  `Alamat_Pegawai` varchar(255) NOT NULL,
  `No_Telepon` int(15) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_mutasi`
--
ALTER TABLE `tb_mutasi`
  ADD PRIMARY KEY (`Id_Mutasi`),
  ADD KEY `Id_Pegawai` (`Id_Pegawai`),
  ADD KEY `Kode_Obat` (`Kode_Obat`);

--
-- Indeks untuk tabel `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`KodeObat`);

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`Id_Pegawai`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_mutasi`
--
ALTER TABLE `tb_mutasi`
  ADD CONSTRAINT `tb_mutasi_ibfk_1` FOREIGN KEY (`Id_Pegawai`) REFERENCES `tb_pegawai` (`Id_Pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD CONSTRAINT `tb_obat_ibfk_1` FOREIGN KEY (`KodeObat`) REFERENCES `tb_mutasi` (`Kode_Obat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
