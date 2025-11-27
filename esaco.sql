-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 26, 2025 at 05:42 AM
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
-- Database: `esaco`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `date`, `description`, `image_url`, `content`) VALUES
(12, 'Pentingnya K3 di Tempat Kerja', '2025-08-21', 'Artikel ini membahas mengapa K3 sangat penting untuk keselamatan dan kesehatan pekerja di berbagai sektor industri.', 'uploads/kebakrann-768x432.jpg', '<p><span>K3 bertujuan untuk melindungi pekerja dari risiko kecelakaan dan penyakit akibat kerja. Implementasi K3 yang baik dapat meningkatkan produktivitas dan menciptakan lingkungan kerja yang aman.</span></p>'),
(13, 'Kebijakan K3 di Perusahaan', '2025-08-22', 'Menjelaskan kebijakan K3 yang harus diterapkan oleh perusahaan untuk menjaga keselamatan pekerja.', 'uploads/Opr.Alat-Berat-3-768x576.jpeg', '<p><span>Setiap perusahaan wajib memiliki kebijakan K3 yang jelas, termasuk pelatihan keselamatan, penggunaan alat pelindung diri, dan prosedur darurat. Kebijakan ini harus disosialisasikan kepada seluruh karyawan.</span></p>'),
(14, 'Pelatihan K3 untuk Karyawan', '2025-08-23', 'Menguraikan pentingnya pelatihan K3 bagi karyawan dan jenis pelatihan yang perlu diadakan.', 'uploads/Praktek-Forklift-Crane-SBS-batch-1-4-768x576.jpeg', '<p><span>Pelatihan K3 membantu karyawan memahami risiko di tempat kerja dan cara menghindarinya. Jenis pelatihan meliputi penggunaan alat pelindung, penanganan bahan berbahaya, dan prosedur evakuasi serta keselamatan pekerja.</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(10, 'Asset'),
(1, 'Kebakaran'),
(4, 'Ketinggian'),
(3, 'Listrik'),
(16, 'Manajemen K3'),
(13, 'Partner'),
(14, 'Pesawat Angkat & Angkut'),
(15, 'Pesawat Tenaga & Produksi');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `alt_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `category_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image_url`, `alt_text`, `date`, `category`, `category_id`) VALUES
(4, '1755656047_web-esaco-logo-1-2048x702.png', 'logo', '2025-08-20', 'logo', 10),
(5, '1755660402_hm-sampoerna.svg', 'partner_hm_sampoerna', '2025-08-20', 'partner', 13),
(6, '1755660436_Campina_Es_Krim.svg-300x204.png', 'partner campina', '2025-08-20', 'partner', 13),
(7, '1755660465_Logo_PLN.svg-300x107.png', 'partner pln', '2025-08-20', 'partner', 13),
(13, '1755744094_teklis-4-576x1024.jpeg', 'foto-hero', '2025-08-21', 'asset', 3),
(14, '1755744618_foto-esaco.png', 'kantor', '2025-08-21', 'asset', 10),
(15, '1755750652_Praktek-Forklift-Crane-SBS-batch-1-4-768x576.jpeg', 'service-foto', '2025-08-21', 'asset', 14),
(16, '1755756358_All-Personel.jpeg', 'foto-anggota', '2025-08-21', 'asset', 10),
(17, '1755757304_Opr.Alat-Berat-3-768x576.jpeg', 'foto-alat-berat', '2025-08-21', 'asset', 14),
(18, '1755757382_kebakrann-768x432.jpg', 'kebakaran siram', '2025-08-21', 'kebakaran', 1),
(20, '1756025374_page_1_thumb_large (1).png', 'partner aice', '2025-08-24', 'partner', 13),
(21, '1756090043_Ak3-Listrik-6-768x1024.jpeg', 'listrikk', '2025-08-25', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
