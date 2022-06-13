-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2022 pada 00.42
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbmrib`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `balita`
--

CREATE TABLE `balita` (
  `id_balita` bigint(20) UNSIGNED NOT NULL,
  `nama_balita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(11) NOT NULL,
  `data_tahun` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_keluarga` bigint(20) UNSIGNED NOT NULL,
  `id_bbBalita` bigint(20) UNSIGNED NOT NULL,
  `id_tbBalita` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bb_balita`
--

CREATE TABLE `bb_balita` (
  `id_bbBalita` bigint(20) UNSIGNED NOT NULL,
  `januari` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `februari` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `april` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mei` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `juni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `juli` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agustus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `september` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oktober` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `november` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desember` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_balita` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bb_bumil`
--

CREATE TABLE `bb_bumil` (
  `id_bbBumil` bigint(20) UNSIGNED NOT NULL,
  `januari` int(11) DEFAULT NULL,
  `februari` int(11) DEFAULT NULL,
  `maret` int(11) DEFAULT NULL,
  `april` int(11) DEFAULT NULL,
  `mei` int(11) DEFAULT NULL,
  `juni` int(11) DEFAULT NULL,
  `juli` int(11) DEFAULT NULL,
  `agustus` int(11) DEFAULT NULL,
  `september` int(11) DEFAULT NULL,
  `oktober` int(11) DEFAULT NULL,
  `november` int(11) DEFAULT NULL,
  `desember` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_bumil` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bumil`
--

CREATE TABLE `bumil` (
  `id_bumil` bigint(20) UNSIGNED NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `usia_kandungan` int(11) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `data_tahun` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_keluarga` bigint(20) UNSIGNED NOT NULL,
  `id_bbBumil` bigint(20) UNSIGNED NOT NULL,
  `id_llBumil` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `keluarga`
--

CREATE TABLE `keluarga` (
  `id_keluarga` bigint(20) UNSIGNED NOT NULL,
  `no_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `nik_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `keluarga`
--

INSERT INTO `keluarga` (`id_keluarga`, `no_kk`, `nik_ayah`, `nama_ayah`, `tanggal_lahir_ayah`, `nik_ibu`, `nama_ibu`, `tanggal_lahir_ibu`, `alamat`, `id_user`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', '2022-06-07', '1', '1', '2022-06-14', 'Jl. Beringin', 2, '2022-06-11 15:32:40', '2022-06-11 15:32:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ll_bumil`
--

CREATE TABLE `ll_bumil` (
  `id_llBumil` bigint(20) UNSIGNED NOT NULL,
  `januari` int(11) DEFAULT NULL,
  `februari` int(11) DEFAULT NULL,
  `maret` int(11) DEFAULT NULL,
  `april` int(11) DEFAULT NULL,
  `mei` int(11) DEFAULT NULL,
  `juni` int(11) DEFAULT NULL,
  `juli` int(11) DEFAULT NULL,
  `agustus` int(11) DEFAULT NULL,
  `september` int(11) DEFAULT NULL,
  `oktober` int(11) DEFAULT NULL,
  `november` int(11) DEFAULT NULL,
  `desember` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_bumil` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_kader` bigint(20) UNSIGNED NOT NULL,
  `nama_kader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_kader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(5, '2021_09_02_133411_create_member_table', 1),
(6, '2021_10_23_112947_create_keluarga_table', 1),
(7, '2021_10_23_113443_create_balita_table', 1),
(8, '2021_10_23_113453_create_bumil_table', 1),
(9, '2021_10_23_125221_create_bb_balita_table', 1),
(10, '2021_10_23_125235_create_tb_balita_table', 1),
(11, '2021_10_23_125251_create_bb_bumil_table', 1),
(12, '2021_10_23_141224_create_ll_bumil_table', 1),
(13, '2021_10_24_000816_add_id_keluarga_to_balita_table', 1),
(14, '2021_10_24_000837_add_id_keluarga_to_bumil_table', 1),
(15, '2021_10_24_005215_add_id_balita_to_bb_balita_table', 1),
(16, '2021_10_24_005322_add_id_balita_to_tb_balita_table', 1),
(17, '2021_10_24_005417_add_id_bumil_to_bb_bumil_table', 1),
(18, '2021_10_24_005429_add_id_bumil_to_ll_bumil_table', 1),
(19, '2021_10_26_082324_alter_id_from_users_table', 1);

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
-- Struktur dari tabel `tb_balita`
--

CREATE TABLE `tb_balita` (
  `id_tbBalita` bigint(20) UNSIGNED NOT NULL,
  `januari` int(11) DEFAULT NULL,
  `februari` int(11) DEFAULT NULL,
  `maret` int(11) DEFAULT NULL,
  `april` int(11) DEFAULT NULL,
  `mei` int(11) DEFAULT NULL,
  `juni` int(11) DEFAULT NULL,
  `juli` int(11) DEFAULT NULL,
  `agustus` int(11) DEFAULT NULL,
  `september` int(11) DEFAULT NULL,
  `oktober` int(11) DEFAULT NULL,
  `november` int(11) DEFAULT NULL,
  `desember` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_balita` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', 1, NULL, '$2y$10$OaGVrtOmyMO/F04woP774e5LStXX7BBtm99tDsxb5CJDCrgpwZtCC', NULL, '2022-06-11 15:32:31', '2022-06-11 15:32:31'),
(2, 'keluarga', 'keluarga@gmail.com', 2, NULL, '$2y$10$6ljYhThM7E/bTB4f2c4V8OF0HGu7YEZ1sQaNS4D9tmExf6tjM5sqa', NULL, '2022-06-11 15:32:40', '2022-06-11 15:32:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `balita`
--
ALTER TABLE `balita`
  ADD PRIMARY KEY (`id_balita`),
  ADD KEY `balita_id_keluarga_foreign` (`id_keluarga`),
  ADD KEY `balita_id_bbbalita_foreign` (`id_bbBalita`),
  ADD KEY `balita_id_tbbalita_foreign` (`id_tbBalita`);

--
-- Indeks untuk tabel `bb_balita`
--
ALTER TABLE `bb_balita`
  ADD PRIMARY KEY (`id_bbBalita`),
  ADD KEY `bb_balita_id_balita_foreign` (`id_balita`);

--
-- Indeks untuk tabel `bb_bumil`
--
ALTER TABLE `bb_bumil`
  ADD PRIMARY KEY (`id_bbBumil`),
  ADD KEY `bb_bumil_id_bumil_foreign` (`id_bumil`);

--
-- Indeks untuk tabel `bumil`
--
ALTER TABLE `bumil`
  ADD PRIMARY KEY (`id_bumil`),
  ADD KEY `bumil_id_keluarga_foreign` (`id_keluarga`),
  ADD KEY `bumil_id_bbbumil_foreign` (`id_bbBumil`),
  ADD KEY `bumil_id_llbumil_foreign` (`id_llBumil`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id_keluarga`),
  ADD KEY `keluarga_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `ll_bumil`
--
ALTER TABLE `ll_bumil`
  ADD PRIMARY KEY (`id_llBumil`),
  ADD KEY `ll_bumil_id_bumil_foreign` (`id_bumil`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_kader`),
  ADD KEY `member_id_user_foreign` (`id_user`);

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
-- Indeks untuk tabel `tb_balita`
--
ALTER TABLE `tb_balita`
  ADD PRIMARY KEY (`id_tbBalita`),
  ADD KEY `tb_balita_id_balita_foreign` (`id_balita`);

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
-- AUTO_INCREMENT untuk tabel `balita`
--
ALTER TABLE `balita`
  MODIFY `id_balita` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bb_balita`
--
ALTER TABLE `bb_balita`
  MODIFY `id_bbBalita` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bb_bumil`
--
ALTER TABLE `bb_bumil`
  MODIFY `id_bbBumil` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bumil`
--
ALTER TABLE `bumil`
  MODIFY `id_bumil` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id_keluarga` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ll_bumil`
--
ALTER TABLE `ll_bumil`
  MODIFY `id_llBumil` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_kader` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_balita`
--
ALTER TABLE `tb_balita`
  MODIFY `id_tbBalita` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `balita`
--
ALTER TABLE `balita`
  ADD CONSTRAINT `balita_id_bbbalita_foreign` FOREIGN KEY (`id_bbBalita`) REFERENCES `bb_balita` (`id_bbBalita`),
  ADD CONSTRAINT `balita_id_keluarga_foreign` FOREIGN KEY (`id_keluarga`) REFERENCES `keluarga` (`id_keluarga`),
  ADD CONSTRAINT `balita_id_tbbalita_foreign` FOREIGN KEY (`id_tbBalita`) REFERENCES `tb_balita` (`id_tbBalita`);

--
-- Ketidakleluasaan untuk tabel `bb_balita`
--
ALTER TABLE `bb_balita`
  ADD CONSTRAINT `bb_balita_id_balita_foreign` FOREIGN KEY (`id_balita`) REFERENCES `balita` (`id_balita`);

--
-- Ketidakleluasaan untuk tabel `bb_bumil`
--
ALTER TABLE `bb_bumil`
  ADD CONSTRAINT `bb_bumil_id_bumil_foreign` FOREIGN KEY (`id_bumil`) REFERENCES `bumil` (`id_bumil`);

--
-- Ketidakleluasaan untuk tabel `bumil`
--
ALTER TABLE `bumil`
  ADD CONSTRAINT `bumil_id_bbbumil_foreign` FOREIGN KEY (`id_bbBumil`) REFERENCES `bb_bumil` (`id_bbBumil`),
  ADD CONSTRAINT `bumil_id_keluarga_foreign` FOREIGN KEY (`id_keluarga`) REFERENCES `keluarga` (`id_keluarga`),
  ADD CONSTRAINT `bumil_id_llbumil_foreign` FOREIGN KEY (`id_llBumil`) REFERENCES `ll_bumil` (`id_llBumil`);

--
-- Ketidakleluasaan untuk tabel `keluarga`
--
ALTER TABLE `keluarga`
  ADD CONSTRAINT `keluarga_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `ll_bumil`
--
ALTER TABLE `ll_bumil`
  ADD CONSTRAINT `ll_bumil_id_bumil_foreign` FOREIGN KEY (`id_bumil`) REFERENCES `bumil` (`id_bumil`);

--
-- Ketidakleluasaan untuk tabel `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_balita`
--
ALTER TABLE `tb_balita`
  ADD CONSTRAINT `tb_balita_id_balita_foreign` FOREIGN KEY (`id_balita`) REFERENCES `balita` (`id_balita`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
