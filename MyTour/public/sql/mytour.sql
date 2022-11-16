-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2022 pada 17.22
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytour`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `categories_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `categories_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'khusus', NULL, NULL),
(2, 2, 'umum', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_14_064545_create_categories_table', 1),
(6, '2022_11_14_064841_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `title`, `image`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Acara Keluarga di Bali 2018', 'img\\media\\holiday1.jpg', 'Perjalanan ini sangat menyenangkan sekali, buruan gabung sini gaes :)', NULL, '2022-11-16 01:21:17'),
(2, 1, 2, 'Acara Reuni di Bali 2020', 'img\\media\\holiday2.jpg', 'Perjalanan ini sangat menyenangkan sekali, buruan gabung sini gaes :)', NULL, '2022-11-16 01:21:29'),
(3, 1, 1, 'Agenda Kerja di Bali 2022', 'img\\media\\holiday3.jpg', 'Perjalanan ini sangat menyenangkan sekali, buruan gabung sini gaes :)', NULL, '2022-11-16 02:22:14'),
(4, 1, 1, 'Kunjungan Kerja Dubes Indonesia di Korea Selatan 2022', 'img\\media\\holiday4.jpg', 'Perjalanan ini sangat menyenangkan sekali, buruan gabung sini gaes :)', NULL, '2022-11-16 02:22:53'),
(5, 2, 2, 'Liburan di Namsan Tower Korea Selatan 2022', 'img\\media\\holiday5.jpg', 'Perjalanan ini sangat menyenangkan sekali, buruan gabung sini gaes :)', NULL, '2022-11-16 01:22:49'),
(6, 2, 1, 'Studi Banding Ilmu Teknologi di Korea Selatan 2022', 'img\\media\\holiday6.jpg', 'Perjalanan ini sangat menyenangkan sekali, buruan gabung sini gaes :)', NULL, '2022-11-16 03:19:59'),
(7, 2, 1, 'Pengadaan Barang di Tokyo Jepang 2022', 'img\\media\\holiday7.jpg', 'Perjalanan ini sangat menyenangkan sekali, buruan gabung sini gaes :)', NULL, '2022-11-16 03:20:17'),
(8, 2, 2, 'Festival Hwangnyeongsan Azalea di Korea Selatan 2022', 'img\\media\\holiday8.jpg', 'Perjalanan ini sangat menyenangkan sekali, buruan gabung sini gaes :)', NULL, '2022-11-16 01:23:18'),
(9, 3, 2, 'Liburan di Pantai Aragusuku Jepang 2022', 'img\\media\\holiday9.jpg', 'Perjalanan ini sangat menyenangkan sekali, buruan gabung sini gaes :)', NULL, '2022-11-16 01:24:43'),
(10, 3, 1, 'Kunjungan Kerja di Dubai 2022', 'img\\media\\holiday10.jpg', 'Perjalanan ini sangat menyenangkan sekali, buruan gabung sini gaes :)', NULL, '2022-11-16 03:21:14'),
(11, 3, 2, 'Liburan di Pulau Palm Jumeirah Dubai 2022', 'img\\media\\holiday11.jpg', 'Liburan ini sangat menyenangkan sekali, buruan gabung sini gaes :)', NULL, '2022-11-16 01:25:02'),
(12, 3, 1, 'Kunjungan Kerja di Beijing Tiongkok 2022', 'img\\media\\holiday12.jpg', 'Liburan ini sangat menyenangkan sekali, buruan gabung sini gaes :)', NULL, '2022-11-16 03:21:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `jenis_kelamin`, `pekerjaan`, `tinggal`, `image`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Anastasya Geraldine', 'P', 'Dosen', 'Kalimantan Timur', 'img\\profile\\admin.jpg', 'admin', 'admin@mytour.ac.id', NULL, '$2y$10$FZ18CE1dOoeLV1e82EbzNe9OCPXe8zZhaMQxfniQduSpFDVOveZTa', NULL, NULL, '2022-11-14 06:12:22'),
(2, 'Andikha Refanza', 'L', 'Pegawai Swasta', 'Jakarta', 'img\\profile\\user.jpg', 'user', 'user1@mytour.ac.id', NULL, '$2y$10$/6vDb6l5ZGa7qZGoBENrpuKTjzFeCQePmTvnULZAv/mEVEiAU5cF6', NULL, NULL, NULL),
(3, 'Alfiansyah Nukita Prada', 'L', 'Mahasiswa', 'Bandung', 'img\\profile\\default.jpg', 'user', 'user2@mytour.ac.id', NULL, '$2y$10$pABYZOKBOm1epoPwqFYhteSm.LFCkxfZEAUPHq2plslX755XJ/im6', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
