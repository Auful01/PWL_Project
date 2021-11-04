-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 09:34 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggotas`
--

CREATE TABLE `anggotas` (
  `kode` bigint(20) UNSIGNED NOT NULL,
  `nama_pelanggan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cetakan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `penulis`, `gambar`, `cetakan`, `penerbit`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'sda', 'asdad', 'asdads', 'asda', 'sdaas', 'dasda', NULL, NULL),
(2, 'sda', 'asdad', 'asdads', 'asda', 'sdaas', 'dasda', NULL, NULL),
(3, 'coba', 'test', 'gambar/bazYDlIGvqhepWHAyprui2OooHlzU0YWPEl6go4m.jpg', '2019', 'john', 'tes', NULL, NULL),
(212, 'coba', 'test', 'gambar/4hP7BugcWGyCjdCScHqLCz4e61V2LmCecPYPI8d7.jpg', '2019', 'john', 'tes', NULL, NULL),
(213, 'coba', 'test', 'gambar/v4rgB1OU282GUXFODnL7rJneQjYwYDvtHNWpjVMG.jpg', '2019', 'john', 'tes', NULL, NULL);

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
-- Table structure for table `kamera`
--

CREATE TABLE `kamera` (
  `kode` bigint(20) UNSIGNED NOT NULL,
  `id_merek` bigint(20) UNSIGNED NOT NULL,
  `tipe` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_sewa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kamera`
--

INSERT INTO `kamera` (`kode`, `id_merek`, `tipe`, `deskripsi`, `gambar`, `harga_sewa`, `created_at`, `updated_at`) VALUES
(92, 3, 'X1', 'weqqwe', 'gambar/X9T4uIq74hCUv1BtMYEcn9143mjwdqX1ATY7vqPo.jpg', '123000', NULL, NULL),
(23132, 1, 'X1', 'Coba', 'https://objectstorage.ap-sydney-1.oraclecloud.com/p/2_fpo_W9QG5amBFf_B1sMw6ZhN-9wpcK1d6aDbYe_2aMfevOG0PNKMl4t8HsXXK7/n/sd1gwrxto4nv/b/bukcet-uts/o/gambar/ayang.png', '123000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lensa`
--

CREATE TABLE `lensa` (
  `kode` bigint(20) UNSIGNED NOT NULL,
  `id_merek` bigint(20) UNSIGNED NOT NULL,
  `tipe` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_sewa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lensa`
--

INSERT INTO `lensa` (`kode`, `id_merek`, `tipe`, `deskripsi`, `gambar`, `harga_sewa`, `created_at`, `updated_at`) VALUES
(5, 1, '700D', 'sda', 'gambar/on14Biv2pZkhx9pw4megY2t4vqNgUGcx6ktaWjvV.jpg', '2333', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `merek`
--

CREATE TABLE `merek` (
  `id_merek` bigint(20) UNSIGNED NOT NULL,
  `nama_merek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merek`
--

INSERT INTO `merek` (`id_merek`, `nama_merek`) VALUES
(1, 'Canon'),
(2, 'Sony'),
(3, 'Fuji');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_21_140422_table_buku', 1),
(5, '2021_05_23_030229_add_username', 2),
(6, '2021_05_29_151718_table_kamera', 3),
(7, '2021_05_29_153105_table_merek', 4),
(8, '2021_06_01_001757_create_anggotas_table', 5),
(9, '2021_06_05_015918_table_peminjaman', 5),
(10, '2021_06_05_020819_update_table_kamera', 6),
(11, '2021_06_07_061352_rename_table', 7),
(12, '2021_06_07_063539_rename_column_merek', 8),
(13, '2021_06_08_021557_add_column_desc', 9),
(14, '2021_06_14_023621_add_role', 10),
(18, '2021_06_14_025442_add_roles_relasi_users_table', 11),
(21, '2021_06_14_152826_add_table_harga', 12),
(22, '2021_06_21_134606_lens_table', 13),
(23, '2021_06_21_232456_add_column_in_peminjaman', 14),
(25, '2021_06_22_020102_add_column_in_peminjaman', 15),
(27, '2021_06_22_022010_add_column_in_peminjaman', 16),
(28, '2021_06_22_022024_add_constraint', 16),
(29, '2021_06_22_022537_add_constraint_merek', 17),
(30, '2021_06_22_031321_delete', 18),
(31, '2021_06_22_094037_add_default_value', 19),
(32, '2021_06_24_145906_add_column_status_user', 20),
(33, '2021_06_24_150251_add_column_status_users', 21);

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
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `kode_pinjam` bigint(20) UNSIGNED NOT NULL,
  `id_kamera` bigint(20) UNSIGNED DEFAULT NULL,
  `id_lensa` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga_sewa` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`kode_pinjam`, `id_kamera`, `id_lensa`, `id_user`, `tanggal_pinjam`, `tanggal_kembali`, `harga_sewa`, `created_at`, `updated_at`) VALUES
(123, 7, 0, 4, '2021-06-15', '2021-06-15', 0, NULL, NULL),
(124, 7, 0, 4, '2021-06-14', '2021-06-15', 0, NULL, NULL),
(125, 8, 0, 4, '2021-06-15', '2021-06-23', 0, NULL, NULL),
(126, 8, 0, 4, '2021-06-14', '2021-06-16', 0, NULL, NULL),
(127, 7, 0, 4, '2021-06-08', '2021-06-24', 0, NULL, NULL),
(128, 7, 0, 5, '2021-06-01', '2021-06-30', 0, NULL, NULL),
(129, 7, 0, 5, '2021-06-01', '2021-06-30', 0, NULL, NULL),
(134, 7, NULL, 4, '2021-06-23', '2021-06-24', 80000, NULL, NULL),
(135, NULL, 5, 4, '2021-06-23', '2021-06-30', 16331, NULL, NULL),
(136, 8, NULL, 4, '2021-06-23', '2021-06-30', 560000, NULL, NULL),
(138, NULL, 5, 4, '2021-06-30', '2021-07-10', 23330, NULL, NULL),
(139, 7, NULL, 4, '2021-06-22', '2021-06-30', 640000, NULL, NULL),
(140, NULL, 5, 4, '2021-06-22', '2021-06-30', 18664, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `role`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', 1, 0, NULL, '$2y$10$erQe99KiBj77Px.zhu3zzuhJY3EnJGjX6ab.bf/45Z9BX0DUCSrLS', NULL, '2021-05-22 19:57:37', '2021-06-29 09:07:00'),
(2, 'admin', 'super@admin.com', 'admin', 1, 0, '2021-06-12 07:20:17', '12345678', NULL, NULL, '2021-06-29 09:07:03'),
(4, 'user', 'user@user.com', 'user', 0, 1, NULL, '$2y$10$u8vozxpjbR12/h9sHZ5YPuxR5MTYtPyL2kUnTGLP2RQaV8fH49ItG', NULL, '2021-06-12 10:01:38', '2021-06-29 09:06:51'),
(5, 'kirom', 'kirom@gmail.com', 'kirom', 0, 1, NULL, '$2y$10$40oSlTN.J5HMpZ9iyO3OieLMtbuLUgAFTWKSw5PLpO/doo6uEwlI6', NULL, '2021-06-21 03:15:11', '2021-06-29 09:06:54'),
(6, 'auful', 'auful03@gmail.com', 'auful', 0, 0, NULL, '$2y$10$CiPYLb9AbckwB.bnGtYEyegsM6fkKqLgnBW.CfZSzDkDKMdo4wuOG', NULL, '2021-06-21 22:46:27', '2021-06-21 22:46:27'),
(7, 'seli', 'seli@gmail.com', 'seli', 1, 0, NULL, '$2y$10$UDGfjgDYqzCxp5Upbplmyen4gGad54kPnpoKVZCdWpWpKne.EfZkS', NULL, '2021-06-21 22:52:32', '2021-06-21 22:52:32'),
(8, 'ipul', 'ipul@gmail.com', 'ipul', 0, 0, NULL, '$2y$10$PSAUb4BS9JMYJVLF65ppauIaEGLBYBoZlwk4tnKYAeVlt8/3Fo1uO', NULL, '2021-06-22 05:34:04', '2021-06-22 05:34:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kamera`
--
ALTER TABLE `kamera`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `lensa`
--
ALTER TABLE `lensa`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `lensa_id_merek_foreign` (`id_merek`);

--
-- Indexes for table `merek`
--
ALTER TABLE `merek`
  ADD PRIMARY KEY (`id_merek`);

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
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`kode_pinjam`),
  ADD KEY `peminjaman_id_kamera_foreign` (`id_kamera`),
  ADD KEY `peminjaman_id_user_foreign` (`id_user`),
  ADD KEY `peminjaman_id_lensa_foreign` (`id_lensa`);

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
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `kode` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kamera`
--
ALTER TABLE `kamera`
  MODIFY `kode` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23133;

--
-- AUTO_INCREMENT for table `lensa`
--
ALTER TABLE `lensa`
  MODIFY `kode` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `merek`
--
ALTER TABLE `merek`
  MODIFY `id_merek` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `kode_pinjam` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lensa`
--
ALTER TABLE `lensa`
  ADD CONSTRAINT `lensa_id_merek_foreign` FOREIGN KEY (`id_merek`) REFERENCES `merek` (`id_merek`) ON DELETE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_id_kamera_foreign` FOREIGN KEY (`id_kamera`) REFERENCES `kamera` (`kode`),
  ADD CONSTRAINT `peminjaman_id_lensa_foreign` FOREIGN KEY (`id_lensa`) REFERENCES `lensa` (`kode`) ON DELETE CASCADE,
  ADD CONSTRAINT `peminjaman_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
