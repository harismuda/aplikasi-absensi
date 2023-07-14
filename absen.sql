-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2023 pada 10.44
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`id_absen`, `id_user`, `waktu`, `tanggal`, `jenis`, `kategori`, `keterangan`) VALUES
(11, 4, '2023-06-21 07:33:38', '2023-06-21', 'Keluar', 'Guru', ''),
(12, 4, '2023-06-21 16:33:38', '2023-06-21', 'Masuk', 'Guru', 'tes'),
(13, 4, '2023-06-22 08:35:31', '2023-06-22', 'Keluar', 'Guru', ''),
(14, 4, '2023-06-22 16:35:31', '2023-06-22', 'Keluar', 'Guru', ''),
(15, 10, '2023-06-21 07:38:26', '2023-06-21', 'Masuk', 'Guru', ''),
(16, 10, '2023-06-21 16:38:26', '2023-06-21', 'Keluar', 'Guru', ''),
(17, 10, '2023-06-22 07:38:26', '2023-06-22', 'Keluar', 'Guru', ''),
(18, 10, '2023-06-22 16:38:26', '2023-06-22', 'Keluar', 'Guru', ''),
(19, 7, '2023-06-21 08:42:37', '2023-06-21', 'Masuk', 'Siswa', ''),
(20, 7, '2023-06-21 16:42:37', '2023-06-21', 'Keluar', 'Siswa', ''),
(21, 7, '2023-06-22 08:44:05', '2023-06-22', 'Keluar', 'Siswa', ''),
(22, 7, '2023-06-22 16:44:05', '2023-06-22', 'Masuk', 'Siswa', ''),
(23, 6, '2023-06-21 08:46:10', '2023-06-21', 'Keluar', 'Siswa', ''),
(24, 6, '2023-06-21 16:46:10', '2023-06-21', 'Keluar', 'Siswa', ''),
(25, 6, '2023-06-22 08:46:10', '2023-06-22', 'Keluar', 'Siswa', ''),
(26, 6, '2023-06-22 16:46:10', '2023-06-22', 'Keluar', 'Siswa', ''),
(32, 4, '2023-06-22 16:10:02', '2023-06-22', 'Keluar', 'Guru', ''),
(36, 7, '2023-06-23 15:37:51', '2023-06-23', 'Masuk', 'Guru', ''),
(41, 10, '2023-06-26 23:28:02', '2023-06-26', 'Masuk', 'Guru', ''),
(42, 10, '2023-06-26 23:30:38', '2023-06-26', 'Keluar', 'Guru', ''),
(45, 10, '2023-06-27 00:19:03', '2023-06-27', 'Masuk', 'Guru', ''),
(46, 4, '2023-06-27 00:24:23', '2023-06-27', 'Masuk', 'Guru', ''),
(47, 4, '2023-06-27 00:24:30', '2023-06-27', 'Keluar', 'Guru', ''),
(77, 7, '2023-07-03 15:28:31', '2023-07-03', 'Masuk', 'Siswa', ''),
(78, 4, '2023-07-04 14:40:37', '2023-07-04', 'Masuk', 'Guru', ''),
(91, 7, '2023-07-06 16:01:24', '2023-07-06', 'Masuk', 'Siswa', 'Terlambat 8 jam, 1 menit, 24 detik'),
(92, 7, '2023-07-06 16:01:36', '2023-07-06', 'Keluar', 'Siswa', 'Tepat Waktu'),
(93, 4, '2023-07-06 19:59:06', '2023-07-06', 'Masuk', 'Guru', 'Terlambat 11 jam, 59 menit, 6 detik'),
(94, 4, '2023-07-06 19:59:14', '2023-07-06', 'Keluar', 'Guru', 'Tepat Waktu'),
(97, 11, '2023-07-06 21:16:20', '2023-07-06', 'Masuk', 'Guru', 'Terlambat 13 jam, 16 menit, 20 detik'),
(98, 11, '2023-07-06 21:16:27', '2023-07-06', 'Keluar', 'Guru', 'Tepat Waktu'),
(99, 4, '2023-07-11 14:35:12', '2023-07-11', 'Masuk', 'Guru', 'Terlambat 6 jam, 35 menit, 12 detik'),
(100, 4, '2023-07-11 14:35:16', '2023-07-11', 'Keluar', 'Guru', 'Terlalu Cepat Pulang 2 jam, 24 menit, 44 detik'),
(101, 11, '2023-07-11 14:35:16', '2023-07-11', 'Keluar', 'Guru', 'Terlalu Cepat Pulang 2 jam, 24 menit, 44 detik'),
(102, 10, '2023-07-11 07:28:02', '2023-07-11', 'Masuk', 'Guru', 'Tepat Waktu'),
(103, 4, '2023-07-12 18:09:50', '2023-07-12', 'Masuk', 'Guru', 'Terlambat 10 jam, 9 menit, 50 detik'),
(104, 4, '2023-07-12 18:09:54', '2023-07-12', 'Keluar', 'Guru', 'Tepat Waktu'),
(105, 10, '2023-07-12 18:10:12', '2023-07-12', 'Masuk', 'Guru', 'Terlambat 10 jam, 10 menit, 12 detik'),
(106, 10, '2023-07-12 18:10:15', '2023-07-12', 'Keluar', 'Guru', 'Tepat Waktu'),
(107, 12, '2023-07-12 18:40:49', '2023-07-12', 'Masuk', 'Siswa', 'Terlambat 10 jam, 40 menit, 49 detik'),
(108, 12, '2023-07-12 18:40:57', '2023-07-12', 'Keluar', 'Siswa', 'Tepat Waktu');

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
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama`, `no_hp`, `id_user`) VALUES
(6, '24124234', 'Fadly', '09174291', 4),
(8, '07867675566', 'Yura', '097866', 10),
(9, '12351637', 'Cocok', '07867675562', 11);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nisn`, `nama`, `alamat`, `id_user`) VALUES
(6, '8687', 'Fanny', 'Limbanang', 6),
(8, '293613', 'Arif', 'Rumbai', 7),
(9, '896465', 'Ipat', 'Tuah Karya', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','siswa','guru') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Haris', 'email1@gmail.com', NULL, '$2y$10$ArxnDbnd8j7R61Fd3OTyw.Qm8UQ2Xe5eE0C/bq.kxPF5F3AlBTn8C', 'admin', NULL, NULL, NULL),
(4, 'Fadly', 'email2@gmail.com', NULL, '$2y$10$U2BXKKfweLq7JlX91KohxOJqrr/xNbABy7MSROqTpfgKRoBbKncJi', 'guru', NULL, NULL, NULL),
(6, 'Fanny', 'email4@gmail.com', NULL, '$2y$10$gd9DiSityvCyYBvP0IJhQOtqaxIfpFwU9JfEixyAq5dwwvWEjYCNO', 'siswa', NULL, NULL, NULL),
(7, 'Arif', 'email5@gmail.com', NULL, '$2y$10$196opru2FBp8ZMouto6gxe9e2hrPs.KtUjIDXuTLlL1xvBVhdIl.a', 'siswa', NULL, NULL, NULL),
(10, 'Yura', 'email3@gmail.com', NULL, '$2y$10$st3qxb2E0VK8zFaF24MAS.tofnRSfEieBlhA/MjePEQXiAJ32Oznq', 'guru', NULL, NULL, NULL),
(11, 'cocok', 'email6@gmail.com', NULL, '$2y$10$v6aaKqrIjMSPKoqOH1zCVeojmOjm6E22rQuTcJqcG0Ngcocu9y42q', 'guru', NULL, NULL, NULL),
(12, 'Ipat', 'ipat@gmail.com', NULL, '$2y$10$QHTzq5LuyZ8txhOghZYcrui./cAu38P3ufzQZKJSN/U7ci/ScvczK', 'siswa', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

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
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

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
-- AUTO_INCREMENT untuk tabel `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
