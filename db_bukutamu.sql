-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Agu 2025 pada 09.40
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bukutamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ttamu`
--

CREATE TABLE `ttamu` (
  `id` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `nohp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ttamu`
--

INSERT INTO `ttamu` (`id`, `tanggal`, `nama`, `alamat`, `tujuan`, `nohp`) VALUES
(1, '2025-08-01', 'Andi Saputra', 'Jl. Merdeka No.1, Jakarta', 'Tata Usaha', '081234567890'),
(2, '2025-08-02', 'Budi Santoso', 'Jl. Mawar No.2, Bandung', 'Kepegawaian', '081234567891'),
(3, '2025-08-03', 'Citra Dewi', 'Jl. Melati No.3, Surabaya', 'Perencanaan', '081234567892'),
(4, '2025-08-04', 'Doni Pratama', 'Jl. Anggrek No.4, Medan', 'Keuangan', '081234567893'),
(5, '2025-08-05', 'Eka Putri', 'Jl. Kenanga No.5, Semarang', 'Sarana dan Prasarana', '081234567894'),
(6, '2025-08-06', 'Fajar Hidayat', 'Jl. Dahlia No.6, Yogyakarta', 'Bidang Kurikulum', '081234567895'),
(7, '2025-08-07', 'Gina Maharani', 'Jl. Flamboyan No.7, Malang', 'Bidang Kesiswaan', '081234567896'),
(8, '2025-08-08', 'Hari Wijaya', 'Jl. Mangga No.8, Bekasi', 'Bidang GTK', '081234567897'),
(9, '2025-08-09', 'Intan Sari', 'Jl. Jeruk No.9, Depok', 'Pengawas Sekolah', '081234567898'),
(10, '2025-08-10', 'Joko Susilo', 'Jl. Durian No.10, Tangerang', 'Perpustakaan', '081234567899'),
(11, '2025-08-11', 'Kiki Amalia', 'Jl. Rambutan No.11, Bogor', 'Laboratorium', '081234567800'),
(12, '2025-08-12', 'Lukman Hakim', 'Jl. Apel No.12, Solo', 'Subbag Umum', '081234567801'),
(13, '2025-08-13', 'Maya Oktavia', 'Jl. Nangka No.13, Palembang', 'Subbag Program', '081234567802'),
(14, '2025-08-14', 'Nanda Firman', 'Jl. Pisang No.14, Pekanbaru', 'Subbag Evaluasi', '081234567803'),
(15, '2025-08-15', 'Olivia Lestari', 'Jl. Pepaya No.15, Padang', 'Bidang Pendidikan Dasar', '081234567804'),
(16, '2025-08-16', 'Putra Gunawan', 'Jl. Duku No.16, Makassar', 'Bidang Pendidikan Menengah', '081234567805'),
(17, '2025-08-17', 'Qori Anisa', 'Jl. Sawo No.17, Banjarmasin', 'Bidang Pendidikan Nonformal', '081234567806'),
(18, '2025-08-18', 'Rudi Hartono', 'Jl. Alpukat No.18, Pontianak', 'Bidang PAUD', '081234567807'),
(19, '2025-08-19', 'Sinta Amelia', 'Jl. Belimbing No.19, Samarinda', 'Bidang Penjaminan Mutu', '081234567808'),
(20, '2025-08-20', 'Tono Kurniawan', 'Jl. Kelapa No.20, Batam', 'Bidang Data & Statistik', '081234567809'),
(21, '2025-08-21', 'Umar Syahputra', 'Jl. Pinang No.21, Jambi', 'Bidang IT & Sistem Informasi', '081234567810'),
(22, '2025-08-22', 'Vina Kartika', 'Jl. Cempedak No.22, Banda Aceh', 'Sekretariat Dinas', '081234567811'),
(23, '2025-08-23', 'Wawan Setiawan', 'Jl. Sukun No.23, Manado', 'Kabag Hukum', '081234567812'),
(24, '2025-08-24', 'Xenia Anggraini', 'Jl. Jambu No.24, Denpasar', 'Kabag Humas', '081234567813'),
(25, '2025-08-25', 'Yoga Prasetyo', 'Jl. Salak No.25, Mataram', 'Bidang Penilaian', '081234567814'),
(26, '2025-08-26', 'Zahra Rahma', 'Jl. Kedondong No.26, Kupang', 'Bidang Supervisi', '081234567815'),
(27, '2025-08-27', 'Ahmad Fauzi', 'Jl. Matoa No.27, Cirebon', 'Ruang Kepala Dinas', '081234567816'),
(28, '2025-08-28', 'Bella Novita', 'Jl. Sirsak No.28, Cianjur', 'Ruang Sekretaris', '081234567817'),
(29, '2025-08-29', 'Cahyo Adi', 'Jl. Kelengkeng No.29, Garut', 'Ruang Rapat', '081234567818'),
(30, '2025-08-30', 'Dewi Ayu', 'Jl. Nanas No.30, Sukabumi', 'Ruang Arsip', '081234567819');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tuser`
--

CREATE TABLE `tuser` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tuser`
--

INSERT INTO `tuser` (`id_user`, `username`, `password`, `nama_pengguna`, `status`) VALUES
(1, '@dmin', '35d3b5550a18664be3f1e38022f40f13', 'Administator', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ttamu`
--
ALTER TABLE `ttamu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ttamu`
--
ALTER TABLE `ttamu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
