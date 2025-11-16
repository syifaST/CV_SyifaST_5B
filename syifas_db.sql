-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 16, 2025 at 02:47 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `syifas_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `umur` int DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `nama`, `umur`, `no_hp`, `email`, `occupation`, `nationality`, `linkedin`) VALUES
(1, 'Syifa Shefiany Tsalitsa ', 21, '+6285861691275', 'syifashefiany@gmail.com', 'Collage Student', 'Indonesian', 'https://www.linkedin.com/in/syifa-shefiany-tsalitsa-762079294?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `lokasi` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `no_hp`, `lokasi`, `created_at`) VALUES
(1, 'Syifa Shefiany Tsalitsa ', 'syifashefiany@gmail.com', '+6285861691275', 'Jl. Pelabuhan II Gg. Bahagia 1 No. 8,Kota Sukabumi, Jawa Barat', '2025-11-13 07:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int NOT NULL,
  `jenjang` varchar(100) NOT NULL,
  `institusi` varchar(150) NOT NULL,
  `jurusan` varchar(150) DEFAULT NULL,
  `tahun_mulai` year NOT NULL,
  `tahun_selesai` year DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `jenjang`, `institusi`, `jurusan`, `tahun_mulai`, `tahun_selesai`, `deskripsi`) VALUES
(1, 'S1', 'Universitas Muhammadiyah Sukabumi', 'Teknik Informatika', '2023', NULL, 'Mempelajari pengembangan web, desain antarmuka pengguna, dan lainnya'),
(2, 'SMA', 'SMAN 1 Kota Sukabumi', 'IPA', '2020', '2023', 'Mempelajari bidang ilmu IPA dan berpartisipasi dalam kegiatan organisasi yang mendukung pengembangan karakter, kepemimpinan, dan komunikasi.'),
(3, 'SMP', 'SMPN 2 Kota Sukabumi', NULL, '2017', '2020', 'Memperdalam kemampuan akademik dasar serta mengasah keterampilan sosial dan kerja sama tim.'),
(4, 'SD', 'SDN Dewi Sartika CBM', NULL, '2011', '2017', 'Membangun dasar pengetahuan umum serta mengembangkan kemampuan membaca, menulis, dan berhitung.');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int NOT NULL,
  `nama_kegiatan` varchar(150) NOT NULL,
  `posisi` varchar(150) NOT NULL,
  `tahun_mulai` year NOT NULL,
  `tahun_selesai` year DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `nama_kegiatan`, `posisi`, `tahun_mulai`, `tahun_selesai`, `deskripsi`) VALUES
(1, 'Panitia Hari Teknik Informatika UMMI Kota Sukabumi ', 'Divisi Konsumsi', '2025', NULL, 'Bertanggung jawab dalam penyediaan dan distribusi konsumsi bagi peserta dan panitia selama kegiatan.'),
(2, 'Panitia Mastaka Fakultas SAINTEK', 'Devisi Kesehatan', '2024', NULL, 'Mengoordinasikan kesiapan tim kesehatan, menyediakan perlengkapan P3K, serta memastikan keamanan dan kesehatan peserta selama kegiatan berlangsung.'),
(3, 'MPK SMAN 1 Kota Sukabumi', 'Koordinator Komisi 7', '2021', '2022', 'Memimpin dan mengatur pelaksanaan program kerja Komisi 7. Bertanggung jawab dalam mengoordinasikan anggota, menyusun laporan, dan menjembatani komunikasi antara MPK dan OSIS.');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text,
  `gambar` varchar(255) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `judul`, `deskripsi`, `gambar`, `kategori`, `link`) VALUES
(1, 'Hallyuphoria', 'project web untuk matakuliah IMK.', 'Portfolio-design1.png', 'filter-design', 'publicassetsimgportfolioPortfolio-design1.png'),
(2, 'Keychain', 'DIY Keychain.', 'portfolio-crafting1.jpg', 'filter-crafting', 'publicassetsimgportfolioportfolio-crafting1.jpg'),
(3, 'SewaKu', 'UI beranda dan detail pesanan aplikasi SewaKu untuk mata kuliah mobile multi platform .', 'portfolio-design2.jpg', 'filter-design', 'publicassetsimgportfolioportfolio-design2.jpg'),
(4, 'LiLy', 'DIY bunga lily dari kawat bulu.', 'portfolio-crafting2.jpg', 'filter-crafting', 'publicassetsimgportfolioportfolio-crafting2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `nama_skill` varchar(100) NOT NULL,
  `deskripsi` text,
  `persen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `nama_skill`, `deskripsi`, `persen`) VALUES
(1, 'UI/UX', 'Mendesain antarmuka pengguna menggunakan figma.', 80),
(2, 'Front-End', 'Membuat tampilan web yang responsif dan interaktif.', 80),
(3, 'Database', 'Mengelola data menggunakan MySQL dan phpMyAdmin.', 75),
(4, 'Crafting ', 'Menbuat karya kreatif untuk melatih ketelitian dan estetika.', 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
