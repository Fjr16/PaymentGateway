-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2024 pada 09.05
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
-- Database: `wahana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `abouts`
--

INSERT INTO `abouts` (`id`, `deskripsi`, `created_at`, `updated_at`) VALUES
(2, '<p>Website tiket wahana pasar malam adalah platform online yang menyediakan layanan pemesanan dan pembelian tiket untuk berbagai wahana dan atraksi yang tersedia di pasar malam. Pasar malam adalah acara populer yang sering diadakan di berbagai tempat di seluruh dunia, menampilkan berbagai macam hiburan seperti wahana permainan, pertunjukan seni, makanan dan minuman</p><p>Yang bisa dilakukan pada website ini :</p><ol><li><strong>Pemesanan Tiket</strong>: Pengunjung dapat memesan tiket untuk berbagai macam wahana dan atraksi yang tersedia di pasar malam&nbsp;</li><li><strong>Informasi Wahana</strong>: Menyediakan informasi detail mengenai setiap wahana yang tersedia di pasar malam, seperti deskripsi singkat</li><li><strong>Pembayaran Online</strong>: Pengunjung dapat melakukan pembayaran tiket secara online melalui website ini</li><li><strong>Peta Lokasi</strong>: Website ini menyediakan peta lokasi yang membantu pengunjung dalam merencanakan kunjungan mereka.</li><li><strong>Melihat tiket yang sudah di beli</strong></li><li><strong>Mencetak E-Tiket</strong></li></ol>', '2024-04-28 21:30:37', '2024-04-29 13:23:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL DEFAULT '',
  `maps` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `lokasi`, `no_hp`, `maps`, `created_at`, `updated_at`) VALUES
(2, 'sadirafathina24@gmail.com', 'Kota Padang', '081277256734', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.329141259665!2d100.34815797372521!3d-0.8972210353220655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8accb64ea31%3A0x9e6d3a9be19372d1!2sUniversitas%20Negeri%20Padang!5e0!3m2!1sid!2sid!4v1714361701735!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '2024-04-28 20:39:06', '2024-04-29 11:29:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `headers`
--

CREATE TABLE `headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `headers`
--

INSERT INTO `headers` (`id`, `judul`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(2, 'Website Wahana Pasar Malam', 'ZBZ39NUv82dLtgdIBtv00JdlrigOEfyF1MtqdInU.jpg', 'By Sadira Fathina', '2024-04-28 21:31:32', '2024-04-29 11:27:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
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
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualans`
--

CREATE TABLE `penjualans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tiket` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_total` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penjualans`
--

INSERT INTO `penjualans` (`id`, `id_tiket`, `id_user`, `bukti_pembayaran`, `status`, `jumlah`, `harga_total`, `created_at`, `updated_at`) VALUES
(4, 3, 3, 'vJHCVdhn7riqvb0E8qiPaAZwlYRnoSyWfD9zCvAO.png', 'Selesai', 2, 30000, '2024-04-29 04:26:25', '2024-04-29 13:00:40'),
(6, 3, 5, 'EKexmAWh4KkTmTLU1wPWQ5k4tnymtSvbXUNTa8f7.jpg', 'Selesai', 2, 30000, '2024-04-29 13:03:09', '2024-04-29 13:04:00'),
(7, 5, 6, 'UaZb0w30Cet5NWozEHiEB3vFRnorQzXVLKMbUuuZ.jpg', 'Selesai', 3, 45000, '2024-04-29 18:55:49', '2024-04-29 18:58:41'),
(8, 3, 7, 'uaApH8renuDwye67ds7ycqwhMgNaxyCLSuJBV6GG.jpg', 'Selesai', 4, 60000, '2024-04-29 19:10:17', '2024-04-29 19:11:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tikets`
--

CREATE TABLE `tikets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_wahana` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tikets`
--

INSERT INTO `tikets` (`id`, `id_wahana`, `judul`, `harga`, `created_at`, `updated_at`) VALUES
(2, 5, 'Tiket A', 10000, '2024-04-28 21:35:19', '2024-04-29 12:14:46'),
(3, 4, 'Tiket B', 15000, '2024-04-29 00:50:13', '2024-04-29 00:50:13'),
(4, 3, 'TIket C', 15000, '2024-04-29 00:50:28', '2024-04-29 00:50:28'),
(5, 2, 'Tiket D', 15000, '2024-04-29 00:50:46', '2024-04-29 12:15:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$ghL4/Whu9bMSG/gGWFyjuetteVQ1pFRlbW4Iqg.nLr6DIuUileSWG', 'admin', NULL, '2024-04-28 18:39:45', '2024-04-28 18:39:45'),
(3, 'coba', 'coba@gmail.com', NULL, '$2y$10$1NYJawLRmhruz9XMBEoFJuJ1AQWuyjeHkGZlh6e4Sv0y/oyuq3TCC', 'user', NULL, '2024-04-29 01:28:20', '2024-04-29 01:28:20'),
(4, 'sadira', 'sadirafathina24@gmail.com', NULL, '$2y$10$c5aGkJq.5vXeMnvmEQJR6eSLkWGB7oGOTIefS6yO9QPlTxUbkaylu', 'user', NULL, '2024-04-29 06:48:38', '2024-04-29 06:48:38'),
(5, 'anja', 'anja@gmail.com', NULL, '$2y$10$Xh.abXKwcmN5Ut0F7yWmV.BWKHLn8NLxlnAhpfecoN7r9CVfMVG0O', 'user', NULL, '2024-04-29 13:02:40', '2024-04-29 13:02:40'),
(6, 'halimah', 'adik123@gmail.com', NULL, '$2y$10$A6xfgL5RSbp/6.JU1BvbieoqqQBwsr1wKE2.B6JHoP3GrQVz.VfVi', 'user', NULL, '2024-04-29 18:55:07', '2024-04-29 18:55:07'),
(7, 'naluri', 'naluri@gmail.com', NULL, '$2y$10$sbkrrME43wIhoJmAvxfqyeGSxjtEvmNQSMdiAmrdfQB3e3kOiFJpe', 'user', NULL, '2024-04-29 19:09:57', '2024-04-29 19:09:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wahanas`
--

CREATE TABLE `wahanas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wahanas`
--

INSERT INTO `wahanas` (`id`, `nama`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(2, 'Kora-kora', 'puCLXbbgFHdTfsLNVowz66Rsv52yYKlidQaoEGwA.jpg', 'Wahana Kora-Kora merupakan wahana berbentuk kapal layar dengan kursi di sekelilingnya. Saat wahana dijalankan, kapal akan bergerak bolak-balik seperti ombak laut sambil berputar-putar. Daya tarik utama dari wahana Kora-Kora adalah sensasi berayun yang menantang dan menyenangkan. Bagi pengunjung yang menyukai sensasi adrenalin, wahana ini bisa menjadi salah satu pilihan yang menarik untuk dicoba.', '2024-04-28 20:46:37', '2024-04-29 13:25:27'),
(3, 'Bianglala', 'CRvXmSS8JXy5ysxBHPI8Hzi8viASsDhMAv6Cpsej.jpg', 'Bianglala adalah salah satu wahana pasar malam yang selalu menjadi daya tarik utama. Wahana ini terkenal dengan desainnya yang menarik dan sensasi berputar di udara yang membuat pengunjung merasa terhanyut dalam keseruan. Bianglala biasanya mengambil bentuk roda raksasa yang dipasang secara vertikal dan memiliki kursi-kursi yang tergantung di sekelilingnya.', '2024-04-29 00:30:52', '2024-04-29 12:07:58'),
(4, 'Rumah Hantu', 'OZfJXK69knWQjm4MPAiqeP1cEszrhCMwTvh2Eiou.jpg', 'Wahana Rumah Hantu menjadi salah satu wahana pasar malam yang paling dicari. Dengan suasana gelap dan berbagai efek suara yang menyeramkan, wahana ini mampu menarik perhatian para pengunjung yang mencari sensasi seram dan menegangkan. Wahana rumah hantu pasar malam seringkali dihiasi dengan elemen-elemen yang menakutkan, seperti hantu, mayat, labirin gelap, dan berbagai macam perangkap yang mengejutkan.', '2024-04-29 00:41:38', '2024-04-29 13:26:54'),
(5, 'Komedi Putar', 'Iw4fk5tajAdlSJE3qqt3F4tFk5U3aYYCDazQETtq.jpg', 'Komedi Putar adalah jenis wahana permainan yang terdiri dari platform bundar yang berputar di sekitar poros vertikal. Di sekitar platform tersebut terdapat kursi atau gambar hewan yang dipasang pada kolom-kolom yang naik turun, sehingga memberikan sensasi naik turun dan berputar kepada penumpangnya.  Para penumpang dapat naik ke kursi dan menikmati sensasi berputar dan naik turun selama wahana ini beroperasi.', '2024-04-29 12:14:09', '2024-04-29 12:14:09');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `penjualans`
--
ALTER TABLE `penjualans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tikets`
--
ALTER TABLE `tikets`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `wahanas`
--
ALTER TABLE `wahanas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `headers`
--
ALTER TABLE `headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `penjualans`
--
ALTER TABLE `penjualans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tikets`
--
ALTER TABLE `tikets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `wahanas`
--
ALTER TABLE `wahanas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
