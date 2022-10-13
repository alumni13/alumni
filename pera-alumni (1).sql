-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 06:45 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pera-alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_05_30_083145_create_sessions_table', 1),
(7, '2022_06_07_074725_add_title_field_to_users_table', 2),
(8, '2022_06_07_091212_add_iname_field_to_users_table', 3),
(9, '2022_06_09_033935_add_dob_field_to_users_table', 4),
(10, '2022_06_09_041737_add_gender_field_to_users_table', 5),
(11, '2022_06_09_043611_add_address_field_to_users_table', 6),
(12, '2022_06_09_043920_add_address_field_to_users_table', 7),
(13, '2022_06_09_050152_add_phone_field_to_users_table', 8),
(14, '2022_06_09_051712_add_nic_field_to_users_table', 9),
(15, '2022_06_09_052436_add_profession_field_to_users_table', 10),
(16, '2022_06_09_052714_add_profession_field_to_users_table', 11),
(17, '2022_06_09_053747_add_currentplaceofwork_field_to_users_table', 12),
(18, '2022_06_09_055839_add_ppd_field_to_users_table', 13),
(19, '2022_06_09_063630_add_periodofassociation_field_to_users_table', 14),
(20, '2022_06_09_065254_add_typeofassociation_field_to_users_table', 15),
(21, '2022_06_09_071818_add_qoff_field_to_users_table', 16),
(22, '2022_06_09_074445_add_yoa_field_to_users_table', 17),
(23, '2022_06_09_081411_add_oq_field_to_users_table', 18),
(24, '2022_06_09_091527_add_areasofspecialization_field_to_users_table', 19),
(25, '2022_06_09_093205_add_amtpaid_field_to_users_table', 20),
(26, '2022_06_09_094602_add_mop_field_to_users_table', 21),
(27, '2022_06_09_095339_add_nob_field_to_users_table', 22),
(28, '2022_06_09_100749_add_dop_field_to_users_table', 23);

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
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('12WpAbgN2lo4nhoq8ZAySgm8HXoW4Ga5cxiSA99g', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSEhtaVlXYTNQalc5WlNybzAxTU1oN0x0WXpnU1hIck9pZThyVzliNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1656574203),
('3aw815SPCEgoKAVlewSSdQHTY3jz48LVYNIKVWL5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZkJPcnBVUGgwcDFma0YzYUxyc0FNSEZEVThKcE5xMWVaVmVkdzlWZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1665635921),
('cm8np4BB33nC4AWS69tfqMlS19VEbWxlnWxTLgMy', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieXJaMXozVE1laFk1UlpTMkRneTlNZGVsNjB4RWh3TlBmSEEwVzhrUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC92aWV3dXNlcnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFdSa3N1Mmt4aXhpYXBCSUx1WUJLeWV1RzdYeC45ek9YUXIuVVR6UHRjV0xsYjJnUU0uSEFtIjt9', 1656387345),
('cXBHppHjGHRS3P8InGhgFbaqKrmE8IUmHB8LbL9M', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSE9PUnVqbUM4dW9Jdnc2WldNcUdwSEgxS1U1ZXN1SXp1MElvbnVjNCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fX0=', 1665567221),
('P2tZszAsVkSvudscfmpS176JBKGHrP1kFdFKpowG', 24, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoib1NDQzJmSGozcmdUczR5VzJwQmRSYnplNVgwT0F1SU5OV1NpeTdxVyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9lbWFpbC92ZXJpZnkiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyNDtzOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjI2OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvaG9tZSI7fX0=', 1665567119),
('Rsd9Pz8RQUNsE89TULTNdDFlodCwbL4PICB3Rxbs', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibDFrTXUzRjFBbUVVemtwbGsyekhibjBhMzFxQllnSW5ZOElxUjJ1RyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC91cGRhdGV1c2VyLzEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFdSa3N1Mmt4aXhpYXBCSUx1WUJLeWV1RzdYeC45ek9YUXIuVVR6UHRjV0xsYjJnUU0uSEFtIjt9', 1656566957),
('wNk8211W7XO5IBoIgjmEv2SXOS1Agde3nXXJbdNs', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.124 Safari/537.36 Edg/102.0.1245.44', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZlQzcUNGcmQyOWt1WmxMU1ZmU2VtMDBCNTUxdnVrbEszWGJrQkd4eiI7czozOiJ1cmwiO2E6MDp7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkV1Jrc3Uya3hpeGlhcEJJTHVZQkt5ZXVHN1h4Ljl6T1hRci5VVHpQdGNXTGxiMmdRTS5IQW0iO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvdXBkYXRldXNlci8xIjt9fQ==', 1655977360),
('wSzSGdPM5mFVWqihivRc8gpODTFN1CtVQWFOmL6c', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicTduZExHTjRCNVNMM0p0amRWa1llM3lldzRLd1pFcHloVFBSQlIzdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC91cGRhdGV1c2VyLzEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFdSa3N1Mmt4aXhpYXBCSUx1WUJLeWV1RzdYeC45ek9YUXIuVVR6UHRjV0xsYjJnUU0uSEFtIjt9', 1657089794);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` enum('Prof','Dr','Eng(Mr)','Eng(Ms)','Mr','Ms','Mrs') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female','others') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `nic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currentplaceofwork` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `periodofassociation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typeofassociation` enum('Undergraduate','Postgraduate','Academic Staff') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qoff` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yoa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oq` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `areasofspecialization` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amtpaid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mop` enum('Cash','Bank Transfer','Cheque','Bank Draft','Credit Card','Other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dop` date DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `name`, `iname`, `gender`, `dob`, `address`, `phone`, `nic`, `profession`, `currentplaceofwork`, `periodofassociation`, `typeofassociation`, `qoff`, `yoa`, `oq`, `areasofspecialization`, `amtpaid`, `mop`, `nob`, `dop`, `email`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Sarani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'saranimanodya1313@gmail.com', '0', NULL, '$2y$10$IpeeM7NrY9WPT50nA2W7b.SJbfham.w6Ro.Xb/txWRTx7IWnwSu5a', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-30 03:17:12', '2022-05-30 03:17:12'),
(2, NULL, 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'eng.pera.alumni@gmail.com', '1', '2022-06-01 01:37:37', '$2y$10$808qy07ol4iwVjI0BXDOlOcy6j3CC.7fpyqqJn9DQWZA2Hu0RhTd6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-30 03:24:11', '2022-06-01 01:37:37'),
(7, NULL, 'Alumni Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'alumnii.ad1313@gmail.com', '1', '2022-05-31 01:16:40', '$2y$10$WRksu2kxixiapBILuYBKyeuG7Xx.9zOXQr.UTzPtcWLlb2gQM.HAm', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-31 01:16:04', '2022-05-31 01:16:40'),
(22, 'Dr', 'sarani', 'r.d.s. manodya', 'female', '2022-06-09', 'Kandy', 713456789, '0000000', 'trainee', 'xdgfd', '1234-1234', 'Undergraduate', 'jhhk', '6656', 'hfjg', 'none', '8767', 'Bank Transfer', 'jhjk', '2022-06-09', 'saranirathnayake.sr@gmail.com', '0', '2022-06-09 04:50:20', '$2y$10$CjcFp/teQ/Q5PCwRSxDsGuNW1fZTn8bppx0GdvB18/XruPrTZQ8aC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-09 04:49:18', '2022-06-09 04:50:20'),
(23, 'Prof', 'Bishan', 'B.', 'male', '2022-10-03', 'GALLE', 65764565, '767867678678', 'GHGCF', 'hjkgjbhj', '1234-1234', 'Undergraduate', 'dfgcdf', '6789', 'vbvbmv', 'jgfhjg', '6786', 'Cash', 'gfhjgfj', '2022-10-04', 'bishansadharuwan@gmail.com', '0', NULL, '$2y$10$1c7RFFUlW882cooCFqWGVOzwcOlIQ8LebToyNr6HKiUQqhN9goG4y', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-12 03:55:54', '2022-10-12 03:55:54'),
(24, 'Dr', 'hgjhjg', 'm.', 'female', '2015-01-12', 'kandy', 65758, '4564745', 'cnhcmhgcf', 'bkbgh', '1234-1234', 'Undergraduate', 'bvnmjbgjh', '67856', 'bcvnjhcvh', 'jjjkhj', '76896', 'Cash', 'jkhkh', '2022-10-03', 'manodya.edu@gmail.com', '0', '2022-10-12 04:03:07', '$2y$10$R2BpjkjZgPDl/AmPT/RRK.A/uTfGmksKJhQ.XoGNfqNN1uOXmCkV.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-12 04:01:54', '2022-10-12 04:03:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
