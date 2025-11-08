-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2025 at 06:58 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE `guestbook` (
  `id` int NOT NULL,
  `guest_name` varchar(100) NOT NULL,
  `guest_phone` varchar(16) NOT NULL,
  `guest_address` varchar(100) NOT NULL,
  `purpose_of_visit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `approved_at` datetime DEFAULT NULL,
  `approved_by` int DEFAULT NULL,
  `rejected_at` datetime DEFAULT NULL,
  `rejected_by` int DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`id`, `guest_name`, `guest_phone`, `guest_address`, `purpose_of_visit`, `approved_at`, `approved_by`, `rejected_at`, `rejected_by`, `created_at`, `created_by`) VALUES
(1, 'Ahmad Fauzi', '081312300001', 'Kec. Subang', 'Pengajuan berkas BOS', '2025-07-26 08:07:00', 3, NULL, NULL, '2025-07-26 08:03:00', 3),
(2, 'Siti Nurhaliza', '081312300002', 'Kec. Jalancagak', 'Legalisasi ijazah SMA', '2025-07-27 09:10:00', 3, NULL, NULL, '2025-07-27 09:06:00', 3),
(3, 'Budi Santoso', '081312300003', 'Kec. Sagalaherang', 'Konsultasi mutasi guru', '2025-07-28 08:14:00', 3, NULL, NULL, '2025-07-28 08:10:00', 3),
(4, 'Dewi Anggraini', '081312300004', 'Kec. Pagaden', 'Pengambilan SK kenaikan pangkat', '2025-07-29 10:09:00', 3, NULL, NULL, '2025-07-29 10:05:00', 3),
(5, 'Rizki Maulana', '081312300005', 'Kec. Cisalak', 'Verifikasi data Dapodik', '2025-07-30 08:08:00', 3, NULL, NULL, '2025-07-30 08:03:00', 3),
(6, 'Indah Permatasari', '081312300006', 'Kec. Pamanukan', 'Pengajuan NPSN sekolah baru', '2025-07-31 09:10:00', 3, NULL, NULL, '2025-07-31 09:06:00', 3),
(7, 'Arif Setiawan', '081312300007', 'Kec. Binong', 'Konsultasi akreditasi sekolah', '2025-08-01 08:19:00', 3, NULL, NULL, '2025-08-01 08:14:00', 3),
(8, 'Maya Kartika', '081312300008', 'Kec. Compreng', 'Pengajuan beasiswa siswa berprestasi', '2025-08-02 09:11:00', 3, NULL, NULL, '2025-08-02 09:07:00', 3),
(9, 'Fajar Nugraha', '081312300009', 'Kec. Kalijati', 'Koordinasi pelatihan guru', '2025-08-03 10:04:00', 3, NULL, NULL, '2025-08-03 10:00:00', 3),
(10, 'Lina Marlina', '081312300010', 'Kec. Pusakanagara', 'Legalisasi rapor', '2025-08-03 10:28:00', 3, NULL, NULL, '2025-08-03 10:24:00', 3),
(11, 'Yusuf Pratama', '081312300011', 'Kec. Cipeundeuy', 'Konsultasi zonasi PPDB', '2025-08-04 08:05:00', 3, NULL, NULL, '2025-08-04 08:00:00', 3),
(12, 'Anisa Rahmawati', '081312300012', 'Kec. Blanakan', 'Pengajuan pindah tugas guru', '2025-08-04 09:13:00', 3, NULL, NULL, '2025-08-04 09:09:00', 3),
(13, 'Hendra Gunawan', '081312300013', 'Kec. Pabuaran', 'Pelaporan bantuan TIK', '2025-08-05 09:09:00', 3, NULL, NULL, '2025-08-05 09:05:00', 3),
(14, 'Fitri Yuliani', '081312300014', 'Kec. Cipunagara', 'Pengambilan SK kepala sekolah', '2025-08-05 09:23:00', 3, NULL, NULL, '2025-08-05 09:18:00', 3),
(15, 'Bayu Ramadhan', '081312300015', 'Kec. Purwadadi', 'Konsultasi program literasi', '2025-08-06 10:16:00', 3, NULL, NULL, '2025-08-06 10:12:00', 3),
(16, 'Rika Puspita', '081312300016', 'Kec. Tambakdahan', 'Pengajuan bantuan rehab ruang kelas', '2025-08-07 08:06:00', 3, NULL, NULL, '2025-08-07 08:02:00', 3),
(17, 'Eko Firmansyah', '081312300017', 'Kec. Pagaden Barat', 'Verifikasi data guru honorer', '2025-08-08 08:25:00', 3, NULL, NULL, '2025-08-08 08:21:00', 3),
(18, 'Melati Kusuma', '081312300018', 'Kec. Sukasari', 'Pengajuan rekomendasi studi lanjut', '2025-08-08 09:13:00', 3, NULL, NULL, '2025-08-08 09:09:00', 3),
(19, 'Adi Putra', '081312300019', 'Kec. Kasomalang', 'Koordinasi lomba OSN', '2025-08-09 09:35:00', 3, NULL, NULL, '2025-08-09 09:30:00', 3),
(20, 'Rosa Amelia', '081312300020', 'Kec. Ciater', 'Legalisasi ijazah SMP', '2025-08-09 10:06:00', 3, NULL, NULL, '2025-08-09 10:02:00', 3),
(21, 'Heri Susanto', '081312300021', 'Kec. Subang', 'Pengajuan surat tugas dinas', '2025-08-10 08:05:00', 3, NULL, NULL, '2025-08-10 08:00:00', 3),
(22, 'Tika Ayu', '081312300022', 'Kec. Jalancagak', 'Konsultasi BOS afirmasi', '2025-08-10 09:20:00', 3, NULL, NULL, '2025-08-10 09:16:00', 3),
(23, 'Dedi Kurniawan', '081312300023', 'Kec. Binong', 'Pengambilan dokumen akreditasi', '2025-08-11 09:08:00', 3, NULL, NULL, '2025-08-11 09:04:00', 3),
(24, 'Putri Maharani', '081312300024', 'Kec. Cikaum', 'Pengajuan izin operasional PAUD', '2025-08-11 09:24:00', 3, NULL, NULL, '2025-08-11 09:19:00', 3),
(25, 'Agus Suryana', '081312300025', 'Kec. Pamanukan', 'Konsultasi sertifikasi guru', '2025-08-12 10:05:00', 3, NULL, NULL, '2025-08-12 10:01:00', 3),
(26, 'Nur Aini', '081312300026', 'Kec. Compreng', 'Pengajuan beasiswa siswa kurang mampu', '2025-08-13 08:03:00', 3, NULL, NULL, '2025-08-13 08:00:00', 3),
(27, 'Taufik Hidayat', '081312300027', 'Kec. Cisalak', 'Pelaporan kegiatan MGMP', '2025-08-14 08:17:00', 3, NULL, NULL, '2025-08-14 08:13:00', 3),
(28, 'Sari Melinda', '081312300028', 'Kec. Pusakajaya', 'Legalisasi ijazah SD', '2025-08-14 09:14:00', 3, NULL, NULL, '2025-08-14 09:10:00', 3),
(29, 'Dian Anggara', '081312300029', 'Kec. Cibogo', 'Konsultasi kurikulum merdeka', '2025-08-15 09:29:00', 3, NULL, NULL, '2025-08-15 09:24:00', 3),
(30, 'Sinta Dewi', '081312300030', 'Kec. Kalijati', 'Pengajuan data EMIS/PD', '2025-08-16 10:07:00', 3, NULL, NULL, '2025-08-16 10:03:00', 3),
(31, 'Andi Wijaya', '081312300031', 'Kec. Patokbeusi', 'Pengajuan mutasi peserta didik', '2025-08-17 08:04:00', 3, NULL, NULL, '2025-08-17 08:00:00', 3),
(32, 'Ratna Sari', '081312300032', 'Kec. Blanakan', 'Konsultasi bantuan perpustakaan', '2025-08-18 08:22:00', 3, NULL, NULL, '2025-08-18 08:17:00', 3),
(33, 'Ilham Setiadi', '081312300033', 'Kec. Pabuaran', 'Pengambilan SK penempatan', '2025-08-19 09:11:00', 3, NULL, NULL, '2025-08-19 09:07:00', 3),
(34, 'Dewi Kurniasih', '081312300034', 'Kec. Purwadadi', 'Legalisasi nilai ujian', '2025-08-20 09:33:00', 3, NULL, NULL, '2025-08-20 09:28:00', 3),
(35, 'Robby Firmansyah', '081312300035', 'Kec. Sagalaherang', 'Koordinasi Kegiatan MPLS', '2025-08-21 10:06:00', 3, NULL, NULL, '2025-08-21 10:02:00', 3),
(36, 'Laila Fauziah', '081312300036', 'Kec. Pusakanagara', 'Pengajuan beasiswa guru', '2025-08-22 08:05:00', 3, NULL, NULL, '2025-08-22 08:01:00', 3),
(37, 'Slamet Riyadi', '081312300037', 'Kec. Tambakdahan', 'Konsultasi PKG/PKKS', '2025-08-23 08:18:00', 3, NULL, NULL, '2025-08-23 08:14:00', 3),
(38, 'Citra Puspa', '081312300038', 'Kec. Subang', 'Pengambilan dokumen BOS', '2025-08-24 09:09:00', 3, NULL, NULL, '2025-08-24 09:04:00', 3),
(39, 'Yoga Pratama', '081312300039', 'Kec. Jalancagak', 'Pengajuan rekomendasi lomba', '2025-08-25 09:25:00', 3, NULL, NULL, '2025-08-25 09:21:00', 3),
(40, 'Mega Ayuningtyas', '081312300040', 'Kec. Kasomalang', 'Legalisasi ijazah SMP', '2025-08-26 10:08:00', 3, NULL, NULL, '2025-08-26 10:03:00', 3),
(41, 'Rahmat Hidayat', '081312300041', 'Kec. Cipeundeuy', 'Konsultasi bantuan sarpras', '2025-08-27 08:03:00', 3, NULL, NULL, '2025-08-27 08:00:00', 3),
(42, 'Desi Oktaviani', '081312300042', 'Kec. Binong', 'Pengajuan perubahan data sekolah', '2025-08-28 08:17:00', 3, NULL, NULL, '2025-08-28 08:13:00', 3),
(43, 'Fauzan Ramadhan', '081312300043', 'Kec. Pamanukan', 'Pengambilan SK penugasan', '2025-08-29 09:12:00', 3, NULL, NULL, '2025-08-29 09:07:00', 3),
(44, 'Lutfia Zahra', '081312300044', 'Kec. Compreng', 'Konsultasi dana BOP PAUD', '2025-08-30 09:27:00', 3, NULL, NULL, '2025-08-30 09:22:00', 3),
(45, 'Syahrul Anwar', '081312300045', 'Kec. Cikaum', 'Legalisasi rapor', '2025-08-31 10:06:00', 3, NULL, NULL, '2025-08-31 10:02:00', 3),
(46, 'Widya Aprilia', '081312300046', 'Kec. Blanakan', 'Pengajuan berkas BOS', '2025-09-01 08:05:00', 3, NULL, NULL, '2025-09-01 08:01:00', 3),
(47, 'Hafidz Maulana', '081312300047', 'Kec. Pagaden', 'Koordinasi monitoring sekolah', '2025-09-02 08:21:00', 3, NULL, NULL, '2025-09-02 08:16:00', 3),
(48, 'Novi Setiawati', '081312300048', 'Kec. Legonkulon', 'Konsultasi PPDB', '2025-09-03 09:11:00', 3, NULL, NULL, '2025-09-03 09:06:00', 3),
(49, 'Hendra Prakoso', '081312300049', 'Kec. Cibogo', 'Pengajuan bantuan perpustakaan', '2025-09-04 09:32:00', 3, NULL, NULL, '2025-09-04 09:28:00', 3),
(50, 'Yuni Marlina', '081312300050', 'Kec. Subang', 'Konsultasi jadwal diklat', '2025-11-08 13:42:52', 3, NULL, NULL, '2025-09-05 10:00:00', 3),
(51, 'Ahmad Fauzi', '081312300001', 'Kec. Subang', 'Pengajuan berkas BOS', '2025-11-05 08:05:00', 3, NULL, NULL, '2025-11-05 08:00:00', 3),
(52, 'Siti Nurhaliza', '081312300002', 'Kec. Jalancagak', 'Legalisasi ijazah SMA', '2025-11-05 08:12:00', 3, NULL, NULL, '2025-11-05 08:07:00', 3),
(53, 'Budi Santoso', '081312300003', 'Kec. Pagaden', 'Konsultasi mutasi guru', '2025-11-05 09:04:00', 3, NULL, NULL, '2025-11-05 08:59:00', 3),
(54, 'Dewi Anggraini', '081312300004', 'Kec. Binong', 'Pengambilan SK kenaikan pangkat', '2025-11-06 08:07:00', 3, NULL, NULL, '2025-11-06 08:02:00', 3),
(55, 'Rizki Maulana', '081312300005', 'Kec. Pusakanagara', 'Verifikasi data Dapodik', '2025-11-06 09:15:00', 3, NULL, NULL, '2025-11-06 09:10:00', 3),
(56, 'Indah Permatasari', '081312300006', 'Kec. Pamanukan', 'Pengajuan NPSN sekolah baru', '2025-11-06 10:04:00', 3, NULL, NULL, '2025-11-06 09:59:00', 3),
(57, 'Arif Setiawan', '081312300007', 'Kec. Compreng', 'Konsultasi akreditasi sekolah', '2025-11-06 10:21:00', 3, NULL, NULL, '2025-11-06 10:16:00', 3),
(58, 'Maya Kartika', '081312300008', 'Kec. Kalijati', 'Pengajuan beasiswa siswa berprestasi', '2025-11-07 08:04:00', 3, NULL, NULL, '2025-11-07 08:00:00', 3),
(59, 'Fajar Nugraha', '081312300009', 'Kec. Cisalak', 'Koordinasi pelatihan guru', '2025-11-07 09:08:00', 3, NULL, NULL, '2025-11-07 09:03:00', 3),
(60, 'Lina Marlina', '081312300010', 'Kec. Pabuaran', 'Legalisasi rapor', '2025-11-08 08:07:00', 3, NULL, NULL, '2025-11-08 08:03:00', 3),
(61, 'Yusuf Pratama', '081312300011', 'Kec. Cipeundeuy', 'Konsultasi zonasi PPDB', '2025-11-08 08:12:00', 3, NULL, NULL, '2025-11-08 08:07:00', 3),
(62, 'Anisa Rahmawati', '081312300012', 'Kec. Blanakan', 'Pengajuan pindah tugas guru', '2025-11-08 09:16:00', 3, NULL, NULL, '2025-11-08 09:11:00', 3),
(63, 'Hendra Gunawan', '081312300013', 'Kec. Pabuaran', 'Pelaporan bantuan TIK', '2025-11-08 09:22:00', 3, NULL, NULL, '2025-11-08 09:17:00', 3),
(64, 'Fitri Yuliani', '081312300014', 'Kec. Cipunagara', 'Pengambilan SK kepala sekolah', '2025-11-09 08:05:00', 3, NULL, NULL, '2025-11-09 08:01:00', 3),
(65, 'Bayu Ramadhan', '081312300015', 'Kec. Purwadadi', 'Konsultasi program literasi', '2025-11-09 09:06:00', 3, NULL, NULL, '2025-11-09 09:01:00', 3),
(66, 'Rika Puspita', '081312300016', 'Kec. Tambakdahan', 'Pengajuan bantuan rehab ruang kelas', '2025-11-10 08:04:00', 3, NULL, NULL, '2025-11-10 08:00:00', 3),
(67, 'Eko Firmansyah', '081312300017', 'Kec. Pagaden Barat', 'Verifikasi data guru honorer', '2025-11-10 09:12:00', 3, NULL, NULL, '2025-11-10 09:08:00', 3),
(68, 'Melati Kusuma', '081312300018', 'Kec. Sukasari', 'Pengajuan rekomendasi studi lanjut', '2025-11-10 09:22:00', 3, NULL, NULL, '2025-11-10 09:17:00', 3),
(69, 'Adi Putra', '081312300019', 'Kec. Kasomalang', 'Koordinasi lomba OSN', '2025-11-10 10:10:00', 3, NULL, NULL, '2025-11-10 10:05:00', 3),
(70, 'Rosa Amelia', '081312300020', 'Kec. Ciater', 'Legalisasi ijazah SMP', '2025-11-11 08:06:00', 3, NULL, NULL, '2025-11-11 08:01:00', 3),
(71, 'Heri Susanto', '081312300021', 'Kec. Subang', 'Pengajuan surat tugas dinas', '2025-11-11 08:19:00', 3, NULL, NULL, '2025-11-11 08:14:00', 3),
(72, 'Tika Ayu', '081312300022', 'Kec. Jalancagak', 'Konsultasi BOS afirmasi', '2025-11-11 09:09:00', 3, NULL, NULL, '2025-11-11 09:04:00', 3),
(73, 'Dedi Kurniawan', '081312300023', 'Kec. Binong', 'Pengambilan dokumen akreditasi', '2025-11-11 09:23:00', 3, NULL, NULL, '2025-11-11 09:18:00', 3),
(74, 'Putri Maharani', '081312300024', 'Kec. Cikaum', 'Pengajuan izin operasional PAUD', '2025-11-11 10:07:00', 3, NULL, NULL, '2025-11-11 10:03:00', 3),
(75, 'Agus Suryana', '081312300025', 'Kec. Pamanukan', 'Konsultasi sertifikasi guru', '2025-11-12 08:03:00', 3, NULL, NULL, '2025-11-12 08:00:00', 3),
(76, 'Nur Aini', '081312300026', 'Kec. Compreng', 'Pengajuan beasiswa siswa kurang mampu', '2025-11-12 09:09:00', 3, NULL, NULL, '2025-11-12 09:04:00', 3),
(77, 'Taufik Hidayat', '081312300027', 'Kec. Cisalak', 'Pelaporan kegiatan MGMP', '2025-11-12 09:25:00', 3, NULL, NULL, '2025-11-12 09:20:00', 3),
(78, 'Sari Melinda', '081312300028', 'Kec. Pusakajaya', 'Legalisasi ijazah SD', '2025-11-12 10:06:00', 3, NULL, NULL, '2025-11-12 10:01:00', 3),
(79, 'Dian Anggara', '081312300029', 'Kec. Cibogo', 'Konsultasi kurikulum merdeka', '2025-11-13 08:03:00', 3, NULL, NULL, '2025-11-13 08:00:00', 3),
(80, 'Sinta Dewi', '081312300030', 'Kec. Kalijati', 'Pengajuan data EMIS/PD', '2025-11-13 09:11:00', 3, NULL, NULL, '2025-11-13 09:06:00', 3),
(81, 'Andi Wijaya', '081312300031', 'Kec. Patokbeusi', 'Pengajuan mutasi peserta didik', '2025-11-13 09:25:00', 3, NULL, NULL, '2025-11-13 09:20:00', 3),
(82, 'Ratna Sari', '081312300032', 'Kec. Blanakan', 'Konsultasi bantuan perpustakaan', '2025-11-13 10:07:00', 3, NULL, NULL, '2025-11-13 10:02:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `created_at`) VALUES
(0, 'guest', 'user', '1a1dc91c907325c69271ddf0c944bc72', '2025-10-05 08:33:12'),
(3, 'Yasa', 'yasa', 'c513972f3c3431dc85d2cf4ba0784bef', '2025-10-05 08:33:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_by` (`approved_by`,`rejected_by`,`created_by`),
  ADD KEY `rejected_by` (`rejected_by`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guestbook`
--
ALTER TABLE `guestbook`
  ADD CONSTRAINT `guestbook_ibfk_1` FOREIGN KEY (`approved_by`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `guestbook_ibfk_2` FOREIGN KEY (`rejected_by`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `guestbook_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
