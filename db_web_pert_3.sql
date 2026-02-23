-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 23, 2026 at 04:04 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web_pert_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `ulasan_film`
--

CREATE TABLE `ulasan_film` (
  `id` int NOT NULL,
  `judul_film` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nilai` enum('1','2','3','4','5') COLLATE utf8mb4_general_ci NOT NULL,
  `ulasan` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ulasan_film`
--

INSERT INTO `ulasan_film` (`id`, `judul_film`, `nilai`, `ulasan`) VALUES
(5, 'A Man Called Otto', '5', 'The darkly funny story of a man who just wants to kill himself but his annoying neighbors keep interrupting him'),
(21, 'The Perks of Being a Wallflower', '4', 'Makes you so sad, happy and comforted all at the same time.'),
(23, 'Train Dreams', '4', 'Chill jone. Cool camera shots. Awesome atmosphere. Relaxing beginning but kinda loomy feeling then nicely turns into what it set up.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ulasan_film`
--
ALTER TABLE `ulasan_film`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ulasan_film`
--
ALTER TABLE `ulasan_film`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
