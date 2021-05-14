-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 14, 2021 la 07:13 PM
-- Versiune server: 10.4.18-MariaDB
-- Versiune PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `mlb2018`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `title_np` varchar(100) NOT NULL,
  `title_cn` varchar(100) NOT NULL,
  `is_active` varchar(5) NOT NULL,
  `include_in_menu` varchar(5) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_np` varchar(255) NOT NULL,
  `title_cn` varchar(255) NOT NULL,
  `description_en` mediumtext NOT NULL,
  `description_np` mediumtext NOT NULL,
  `description_cn` mediumtext NOT NULL,
  `url` varchar(255) NOT NULL,
  `category` int(10) UNSIGNED NOT NULL,
  `is_active` varchar(5) NOT NULL,
  `is_featured` varchar(5) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `tbl_posts`
--

INSERT INTO `tbl_posts` (`id`, `title_en`, `title_np`, `title_cn`, `description_en`, `description_np`, `description_cn`, `url`, `category`, `is_active`, `is_featured`, `created_at`) VALUES
(13, 'Hello World', '1', '1', 'Hello!', '1', '1', 'hello-world', 0, 'Yes', 'Yes', '2021-05-06 17:17:55');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nume` varchar(100) NOT NULL,
  `prenume` varchar(100) NOT NULL,
  `initialatata` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(40) NOT NULL,
  `avatar_path` varchar(1024) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `points` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `nume`, `prenume`, `initialatata`, `full_name`, `email`, `username`, `avatar_path`, `password`, `created_at`, `points`) VALUES
(3, 'An', 'Admin', 'A', 'Administrator', 'admin@admin.com', 'admin', 'avatar/avatar_default.png', '21232f297a57a5a743894a0e4a801fc3', '2021-05-07 13:14:42', 0),
(6, 'Panaite', 'Razvan', 'N', 'Panaite N Razvan', 'co@gmail.com', 'PanaiteNRazvan', 'avatar/avatar_default.png', '202cb962ac59075b964b07152d234b70', '2021-05-08 13:45:24', 0),
(8, 'Gigel', 'Ionel', 'G', 'Gigel G Ionel', 'gigi@game.com', 'Gigel_G_Ionel', 'avatar/8.png', '81dc9bdb52d04dc20036dbd8313ed055', '2021-05-13 11:28:41', 0);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pentru tabele `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pentru tabele `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
