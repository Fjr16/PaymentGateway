-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2024 at 11:55 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wahana`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `deskripsi`, `created_at`, `updated_at`) VALUES
(2, '<p>A <strong>website</strong> (also written as a <strong>web site</strong>) is a collection of <a href=\"https://en.wikipedia.org/wiki/Web_page\">web pages</a> and related content that is identified by a common <a href=\"https://en.wikipedia.org/wiki/Domain_name\">domain name</a> and published on at least one <a href=\"https://en.wikipedia.org/wiki/Web_server\">web server</a>. Websites are typically dedicated to a particular topic or purpose, such as news, education, commerce, entertainment, or <a href=\"https://en.wikipedia.org/wiki/Social_media\">social media</a>. <a href=\"https://en.wikipedia.org/wiki/Hyperlink\">Hyperlinking</a> between web pages guides the navigation of the site, which often starts with a <a href=\"https://en.wikipedia.org/wiki/Home_page\">home page</a>. The <a href=\"https://en.wikipedia.org/wiki/List_of_most-visited_websites\">most-visited</a> sites are <a href=\"https://en.wikipedia.org/wiki/Google_Search\">Google</a>, <a href=\"https://en.wikipedia.org/wiki/YouTube\">YouTube</a>, and <a href=\"https://en.wikipedia.org/wiki/Facebook\">Facebook</a>.</p>', '2024-04-28 21:30:37', '2024-04-28 21:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `maps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `lokasi`, `no_hp`, `maps`, `created_at`, `updated_at`) VALUES
(2, 'admin@gmail.com', 'Kota Padangf', '086434675634', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.329141259665!2d100.34815797372521!3d-0.8972210353220655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8accb64ea31%3A0x9e6d3a9be19372d1!2sUniversitas%20Negeri%20Padang!5e0!3m2!1sid!2sid!4v1714361701735!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '2024-04-28 20:39:06', '2024-04-28 20:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `judul`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(2, 'Website Wahana Pasar Malam', 'ZqqcCVTSe5uis4GwiiaExUVMrmFvoZ9wP6gvutUc.jpg', 'Website Baru', '2024-04-28 21:31:32', '2024-04-28 21:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2024_04_28_120946_create_abouts_table', 1),
(10, '2024_04_28_121219_create_headers_table', 1),
(11, '2024_04_28_121723_create_wahanas_table', 1),
(12, '2024_04_28_121858_create_tikets_table', 1),
(13, '2024_04_28_122428_create_contacts_table', 1),
(14, '2024_04_29_085643_create_penjualans_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penjualans`
--

CREATE TABLE `penjualans` (
  `id` bigint UNSIGNED NOT NULL,
  `id_tiket` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `bukti_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int NOT NULL,
  `harga_total` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualans`
--

INSERT INTO `penjualans` (`id`, `id_tiket`, `id_user`, `bukti_pembayaran`, `status`, `jumlah`, `harga_total`, `created_at`, `updated_at`) VALUES
(3, 2, 3, 'RlmuUfwX1WicMc0DXpgSavyTOhEWEQhr8XWHbt0S.jpg', 'Selesai', 3, 30000, '2024-04-29 03:18:57', '2024-04-29 04:22:04'),
(4, 3, 3, 'vJHCVdhn7riqvb0E8qiPaAZwlYRnoSyWfD9zCvAO.png', 'Diproses', 2, 30000, '2024-04-29 04:26:25', '2024-04-29 04:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tikets`
--

CREATE TABLE `tikets` (
  `id` bigint UNSIGNED NOT NULL,
  `id_wahana` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tikets`
--

INSERT INTO `tikets` (`id`, `id_wahana`, `judul`, `harga`, `created_at`, `updated_at`) VALUES
(2, 2, 'Wahana A', 10000, '2024-04-28 21:35:19', '2024-04-28 21:35:19'),
(3, 4, 'Tiket B', 15000, '2024-04-29 00:50:13', '2024-04-29 00:50:13'),
(4, 3, 'TIket C', 15000, '2024-04-29 00:50:28', '2024-04-29 00:50:28'),
(5, 2, 'Tiket D', 20000, '2024-04-29 00:50:46', '2024-04-29 00:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$ghL4/Whu9bMSG/gGWFyjuetteVQ1pFRlbW4Iqg.nLr6DIuUileSWG', 'admin', NULL, '2024-04-28 18:39:45', '2024-04-28 18:39:45'),
(3, 'coba', 'coba@gmail.com', NULL, '$2y$10$1NYJawLRmhruz9XMBEoFJuJ1AQWuyjeHkGZlh6e4Sv0y/oyuq3TCC', 'user', NULL, '2024-04-29 01:28:20', '2024-04-29 01:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `wahanas`
--

CREATE TABLE `wahanas` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wahanas`
--

INSERT INTO `wahanas` (`id`, `nama`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(2, 'Kora-kora', 'L6sp5qbAbGmWcnPFjZURtJ0fF0eOssD6RcQNOOis.jpg', 'Testing', '2024-04-28 20:46:37', '2024-04-28 20:46:37'),
(3, 'Bianglala', 'EoAtclc9TE9GXZKi8G1GMFflaEhYm3LVqTndvPtZ.jpg', 'Bianglala adalah salah satu wahana pasar malam yang selalu menjadi daya tarik utama. Wahana ini terkenal dengan desainnya yang menarik dan sensasi berputar di udara yang membuat pengunjung merasa terhanyut dalam keseruan. Bianglala biasanya mengambil bentuk roda raksasa yang dipasang secara vertikal dan memiliki kursi-kursi yang tergantung di sekelilingnya.', '2024-04-29 00:30:52', '2024-04-29 00:30:52'),
(4, 'Rumah Hantu', 'ak77NJa323W8XEMMFWJwCmucYwY5m9Qe72aTcHZD.jpg', 'Wahana Rumah Hantu menjadi salah satu wahana pasar malam yang paling dicari. Dengan suasana gelap dan berbagai efek suara yang menyeramkan, wahana ini mampu menarik perhatian para pengunjung yang mencari sensasi seram dan menegangkan.', '2024-04-29 00:41:38', '2024-04-29 00:43:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penjualans`
--
ALTER TABLE `penjualans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tikets`
--
ALTER TABLE `tikets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wahanas`
--
ALTER TABLE `wahanas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `penjualans`
--
ALTER TABLE `penjualans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tikets`
--
ALTER TABLE `tikets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wahanas`
--
ALTER TABLE `wahanas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
