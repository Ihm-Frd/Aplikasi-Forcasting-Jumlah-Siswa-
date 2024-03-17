-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2024 pada 10.06
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apk_prediksi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penerimaan_siswa`
--

CREATE TABLE `data_penerimaan_siswa` (
  `kd_pmb` int(8) NOT NULL,
  `tahun_akademik` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jumlah_pmb` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_penerimaan_siswa`
--

INSERT INTO `data_penerimaan_siswa` (`kd_pmb`, `tahun_akademik`, `jumlah_pmb`) VALUES
(19, '2020/2021', 230),
(20, '2021/2022', 330),
(21, '2022/2023', 299),
(22, '2023/2024', 550);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_penerimaan_siswa`
--
ALTER TABLE `data_penerimaan_siswa`
  ADD PRIMARY KEY (`kd_pmb`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_penerimaan_siswa`
--
ALTER TABLE `data_penerimaan_siswa`
  MODIFY `kd_pmb` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
