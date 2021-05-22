-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 22, 2021 la 09:38 PM
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
-- Bază de date: `moxie`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name_en` varchar(100) NOT NULL,
  `subcategory_name_en` varchar(100) NOT NULL,
  `category_name_ro` varchar(100) NOT NULL,
  `subcategory_name_ro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `category_name_en`, `subcategory_name_en`, `category_name_ro`, `subcategory_name_ro`) VALUES
(21, 'Mathematics', 'Grade 4', 'Matematica', 'Clasa 4');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `description_en` mediumtext NOT NULL,
  `url` varchar(255) NOT NULL,
  `category` int(10) UNSIGNED NOT NULL,
  `subcategory` varchar(100) NOT NULL,
  `is_active` varchar(5) NOT NULL,
  `is_featured` varchar(5) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `tbl_posts`
--

INSERT INTO `tbl_posts` (`id`, `title_en`, `description_en`, `url`, `category`, `subcategory`, `is_active`, `is_featured`, `created_at`) VALUES
(13, 'Hello World', 'Hello!', 'hello-world', 0, '0', 'Yes', 'Yes', '2021-05-06 17:17:55');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `tbl_rewards`
--

CREATE TABLE `tbl_rewards` (
  `id` int(10) NOT NULL,
  `hair_1` int(10) NOT NULL DEFAULT 1,
  `hair_2` int(10) NOT NULL DEFAULT 0,
  `hair_3` int(10) NOT NULL DEFAULT 0,
  `hair_4` int(10) NOT NULL DEFAULT 0,
  `hair_5` int(10) NOT NULL DEFAULT 0,
  `hair_6` int(10) NOT NULL DEFAULT 0,
  `hair_7` int(10) NOT NULL DEFAULT 0,
  `hair_8` int(11) NOT NULL DEFAULT 0,
  `hair_9` int(10) NOT NULL DEFAULT 0,
  `hair_10` int(10) NOT NULL DEFAULT 0,
  `hair_11` int(10) NOT NULL DEFAULT 0,
  `hair_12` int(10) NOT NULL DEFAULT 0,
  `eyes_1` int(10) NOT NULL DEFAULT 0,
  `eyes_2` int(10) NOT NULL DEFAULT 0,
  `eyes_3` int(10) NOT NULL DEFAULT 0,
  `eyes_4` int(10) NOT NULL DEFAULT 0,
  `eyes_5` int(10) NOT NULL DEFAULT 0,
  `eyes_6` int(10) NOT NULL DEFAULT 0,
  `eyes_7` int(10) NOT NULL DEFAULT 0,
  `eyes_8` int(10) NOT NULL DEFAULT 0,
  `eyes_9` int(10) NOT NULL DEFAULT 0,
  `eyes_10` int(10) NOT NULL DEFAULT 0,
  `eyes_11` int(10) NOT NULL DEFAULT 0,
  `eyes_12` int(10) NOT NULL DEFAULT 0,
  `mouth_1` int(10) NOT NULL DEFAULT 0,
  `mouth_2` int(10) NOT NULL DEFAULT 0,
  `mouth_3` int(10) NOT NULL DEFAULT 0,
  `mouth_4` int(10) NOT NULL DEFAULT 0,
  `mouth_5` int(10) NOT NULL DEFAULT 0,
  `mouth_6` int(10) NOT NULL DEFAULT 0,
  `mouth_7` int(10) NOT NULL DEFAULT 0,
  `mouth_8` int(10) NOT NULL DEFAULT 0,
  `mouth_9` int(10) NOT NULL DEFAULT 0,
  `mouth_10` int(10) NOT NULL DEFAULT 0,
  `mouth_11` int(10) NOT NULL DEFAULT 0,
  `mouth_12` int(10) NOT NULL DEFAULT 0,
  `mouth_13` int(10) NOT NULL DEFAULT 0,
  `pants_1` int(10) NOT NULL DEFAULT 0,
  `pants_2` int(10) NOT NULL DEFAULT 0,
  `pants_3` int(10) NOT NULL DEFAULT 0,
  `pants_4` int(10) NOT NULL DEFAULT 0,
  `pants_5` int(10) NOT NULL DEFAULT 0,
  `pants_6` int(10) NOT NULL DEFAULT 0,
  `pants_7` int(10) NOT NULL DEFAULT 0,
  `pants_8` int(10) NOT NULL DEFAULT 0,
  `shoes_1` int(10) NOT NULL DEFAULT 0,
  `shoes_2` int(10) NOT NULL DEFAULT 0,
  `shoes_3` int(10) NOT NULL DEFAULT 0,
  `shoes_4` int(10) NOT NULL DEFAULT 0,
  `shoes_5` int(10) NOT NULL DEFAULT 0,
  `shoes_6` int(10) NOT NULL DEFAULT 0,
  `shoes_7` int(10) NOT NULL DEFAULT 0,
  `shoes_8` int(10) NOT NULL DEFAULT 0,
  `shoes_9` int(10) NOT NULL DEFAULT 0,
  `shoes_10` int(10) NOT NULL DEFAULT 0,
  `shoes_11` int(10) NOT NULL DEFAULT 0,
  `shoes_12` int(10) NOT NULL DEFAULT 0,
  `tshirt_1` int(10) NOT NULL DEFAULT 0,
  `tshirt_2` int(10) NOT NULL DEFAULT 0,
  `tshirt_3` int(10) NOT NULL DEFAULT 0,
  `tshirt_4` int(10) NOT NULL DEFAULT 0,
  `tshirt_5` int(10) NOT NULL DEFAULT 0,
  `tshirt_6` int(10) NOT NULL DEFAULT 0,
  `tshirt_7` int(10) NOT NULL DEFAULT 0,
  `tshirt_8` int(10) NOT NULL DEFAULT 0,
  `tshirt_9` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `tbl_rewards`
--

INSERT INTO `tbl_rewards` (`id`, `hair_1`, `hair_2`, `hair_3`, `hair_4`, `hair_5`, `hair_6`, `hair_7`, `hair_8`, `hair_9`, `hair_10`, `hair_11`, `hair_12`, `eyes_1`, `eyes_2`, `eyes_3`, `eyes_4`, `eyes_5`, `eyes_6`, `eyes_7`, `eyes_8`, `eyes_9`, `eyes_10`, `eyes_11`, `eyes_12`, `mouth_1`, `mouth_2`, `mouth_3`, `mouth_4`, `mouth_5`, `mouth_6`, `mouth_7`, `mouth_8`, `mouth_9`, `mouth_10`, `mouth_11`, `mouth_12`, `mouth_13`, `pants_1`, `pants_2`, `pants_3`, `pants_4`, `pants_5`, `pants_6`, `pants_7`, `pants_8`, `shoes_1`, `shoes_2`, `shoes_3`, `shoes_4`, `shoes_5`, `shoes_6`, `shoes_7`, `shoes_8`, `shoes_9`, `shoes_10`, `shoes_11`, `shoes_12`, `tshirt_1`, `tshirt_2`, `tshirt_3`, `tshirt_4`, `tshirt_5`, `tshirt_6`, `tshirt_7`, `tshirt_8`, `tshirt_9`) VALUES
(3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
(3, 'An', 'Admin', 'A', 'Administrator', 'admin@admin.com', 'admin', 'avatar/3.png', '21232f297a57a5a743894a0e4a801fc3', '2021-05-07 13:14:42', 0),
(6, 'Panaite', 'Razvan', 'N', 'Panaite N Razvan', 'co@gmail.com', 'PanaiteNRazvan', 'assets/img/avatar_assets/default_avatar.png', '202cb962ac59075b964b07152d234b70', '2021-05-08 13:45:24', 0),
(8, 'Gigel', 'Ionel', 'G', 'Gigel G Ionel', 'gigi@game.com', 'Gigel_G_Ionel', 'assets/img/avatar_assets/default_avatar.png', '81dc9bdb52d04dc20036dbd8313ed055', '2021-05-13 11:28:41', 0);

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
-- Indexuri pentru tabele `tbl_rewards`
--
ALTER TABLE `tbl_rewards`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pentru tabele `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pentru tabele `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
