-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 12 Apr 2023 pada 10.46
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trigunabhakti`
--
CREATE DATABASE IF NOT EXISTS `trigunabhakti` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `trigunabhakti`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `album_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `album_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `albums`
--

INSERT INTO `albums` (`id`, `album_name`, `album_description`, `created_at`, `updated_at`) VALUES
(1, 'Kegiatan Yayasan', 'Kegiatan Yayasan Tri Guna Bhakti Surabaya', '2021-12-12 05:12:12', '2023-04-11 16:21:56'),
(2, 'Pengumuman', 'Pengumuman Tri Guna Bhakti Surabaya', '2021-12-12 05:12:12', '2023-04-11 16:38:26'),
(3, 'Jiu JitSu', 'EktraKulikuler Jiu JitSu Yayasan Tri Guna Bhakti', '2022-12-31 11:17:10', '2023-04-11 16:36:53'),
(4, 'Futsal', 'Futsal Yayasan Tri Guna Bhakti', '2022-12-31 11:17:29', '2023-04-11 16:37:19'),
(5, 'Fasilitas', 'Fasilitas Yayasan Tri Guna Bhakti', '2023-04-11 18:02:41', '2023-04-11 18:02:41'),
(6, 'Prestasi', 'daftar Prestasi yang didapat', '2023-04-11 18:13:35', '2023-04-11 18:13:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `category_name`, `category_slug`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'Headline', 'headline', 1, '2021-12-12 05:12:12', '2021-12-12 05:12:12'),
(4, 1, 'Pengumuman', 'pengumuman', 1, '2021-12-12 05:12:12', '2023-04-11 15:31:55'),
(5, 1, 'SD', 'sd', 1, '2022-12-31 06:11:05', '2022-12-31 06:11:05'),
(6, 1, 'SMP', 'smp', 1, '2022-12-31 12:53:38', '2022-12-31 12:53:38'),
(7, 1, 'SMK', 'smk', 1, '2022-12-31 12:53:49', '2022-12-31 12:53:49'),
(8, 1, 'Ekstrakulikuler', 'ekskul', 1, '2022-12-31 12:54:18', '2022-12-31 12:54:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commenter_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commenter_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 1,
  `child_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `comments`
--

INSERT INTO `comments` (`id`, `commenter_id`, `commenter_type`, `guest_name`, `guest_email`, `commentable_type`, `commentable_id`, `comment`, `approved`, `child_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', 'App\\Models\\User', NULL, NULL, 'App\\Models\\Post', '5', 'tes', 1, NULL, NULL, '2022-12-31 11:33:39', '2022-12-31 11:33:39'),
(2, NULL, NULL, 'njk', 'ibk@gmail.com', 'App\\Models\\Post', '1', 'ydrtfvgbhnj', 1, NULL, NULL, '2023-01-07 19:50:05', '2023-01-07 19:50:05');

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
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `album_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `album_id`, `title`, `picture`, `description`, `created_at`, `updated_at`) VALUES
(12, 1, 'Foto Bersama', '64358b19132c8.jpg', 'Para murid tercinta', '2023-04-11 16:30:17', '2023-04-11 16:30:17'),
(13, 1, 'Foto bersama Guru', '64358b7334fc6.jpg', 'Foto bersama Guru', '2023-04-11 16:31:47', '2023-04-11 16:31:47'),
(14, 3, 'Jujitsu Tri Guna Bhakti', '64358bee3f064.jpg', 'Logo Jujitsu Tri Guna Bhakti', '2023-04-11 16:33:50', '2023-04-11 16:33:50'),
(15, 4, 'Futsal', '64358d42a5b0c.jpg', 'Logo Futsal', '2023-04-11 16:39:30', '2023-04-11 16:39:30'),
(16, 4, 'Latihan futsal', '64358d77bde5a.jpg', 'latihan bersama', '2023-04-11 16:40:23', '2023-04-11 16:40:23'),
(17, 4, 'Foto Bersama', '64358da2a3941.jpg', 'foto bersama', '2023-04-11 16:41:06', '2023-04-11 16:41:06'),
(18, 4, 'Latihan rutin', '64358ddeb7185.jpg', 'latihan', '2023-04-11 16:42:06', '2023-04-11 16:42:06'),
(19, 4, 'kegiatan futsal', '64358e0f73634.jpg', 'futsal bersama', '2023-04-11 16:42:55', '2023-04-11 16:42:55'),
(20, 4, 'Ektra Futsal', '64358e4b7b6f3.jpg', 'deskripsi ekstra futsal', '2023-04-11 16:43:55', '2023-04-11 16:43:55'),
(21, 4, 'Latihan Indor', '64358e78ae855.jpg', 'latihan bersama', '2023-04-11 16:44:40', '2023-04-11 16:44:40'),
(22, 3, 'Latihan Rutin', '64358ec3280d4.jpg', 'latihan rutin bersama', '2023-04-11 16:45:55', '2023-04-11 16:45:55'),
(23, 3, 'Juara Jiujitsu 2022', '64358f16ced01.jpg', 'juara 2 2022', '2023-04-11 16:47:18', '2023-04-11 16:47:18'),
(24, 2, 'PPDB 2023-2024', '64358f58433cb.jpg', 'pendaftaran siswa baru', '2023-04-11 16:48:24', '2023-04-11 16:48:24'),
(25, 2, 'PPDB SD 2023-2024', '64358f8a1578d.jpg', 'pendaftaran siswa 2023-2024', '2023-04-11 16:49:14', '2023-04-11 16:49:14'),
(26, 2, 'PPDB SMK 2023-2024', '64358fb50e694.jpg', 'pendaftaran siswa baru smk 2023-2024', '2023-04-11 16:49:57', '2023-04-11 16:49:57'),
(27, 2, 'PPDB SMP 2023', '643592c25aef8.jpeg', 'pendaftaran siswa baru smp', '2023-04-11 17:02:58', '2023-04-11 17:02:58'),
(28, 1, 'Upacara', '6435a07761b82.jpeg', 'upacara bendera rutin', '2023-04-11 17:59:20', '2023-04-11 18:01:27'),
(29, 5, 'Masjid', '6435a160cec68.jpeg', 'tempat ibadah', '2023-04-11 18:05:20', '2023-04-11 18:05:20'),
(30, 5, 'Halaman depan', '6435a20b7bb95.jpeg', 'lapangan, gedung, parkir, kantin', '2023-04-11 18:08:11', '2023-04-11 18:08:11'),
(31, 1, 'Paskibraka', '643600e7bbb71.jpeg', 'upacara rutin', '2023-04-12 00:52:55', '2023-04-12 00:52:55');

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
(1, '2014_01_07_073615_create_tagged_table', 1),
(2, '2014_01_07_073615_create_tags_table', 1),
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2016_06_29_073615_create_tag_groups_table', 1),
(6, '2016_06_29_073615_update_tags_table', 1),
(7, '2018_06_30_113500_create_comments_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2020_03_13_083515_add_description_to_tags_table', 1),
(11, '2021_12_14_121109_create_posts_table', 1),
(12, '2021_12_15_045306_create_categories_table', 1),
(13, '2021_12_17_102559_create_galleries_table', 1),
(14, '2021_12_20_134747_create_albums_table', 1),
(15, '2021_12_22_135636_create_todos_table', 1),
(16, '2021_12_22_191300_add_google_id_column', 1),
(17, '2021_12_27_124949_create_todo_statuses_table', 1),
(18, '2021_12_27_151614_add_description_to_todos_table', 1),
(19, '2021_12_29_045404_alter_is_publish_to_string_in_posts_table', 1),
(20, '2021_12_29_095957_create_poststatuses_table', 1),
(21, '2021_12_29_111825_add_tags_to_posts_table', 1),
(22, '2022_01_05_004435_add_post_type_to_posts_table', 1),
(23, '2023_01_31_101257_create_pegawai_table', 2),
(24, '2023_02_07_212204_add_struktur_to_pegawai_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@test.com', '$2y$10$1cwNSKtheh/Vxe11EH/guutTN3gMhUiMXMGinpyq./p0D/MnzWPgS', '2022-12-31 12:08:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `struktur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `jabatan`, `struktur`, `jenis_kelamin`, `foto`, `key_pegawai`, `created_at`, `updated_at`) VALUES
(4, 'Suharnanik', 'Pendiri', 'Pendiri', 'Perempuan', 'default.jpg', 'yysn', '2023-02-07 14:29:29', '2023-02-07 14:29:29'),
(5, 'Drs. Lamijan Hadi Susarno M.Pd', 'Anggota', 'Pembina', 'Laki-laki', 'default.jpg', 'yysn', '2023-02-07 14:37:39', '2023-02-07 14:37:39'),
(6, 'Bambang Gunawan Ir., M. Kes', 'Anggota', 'Pembina', 'Laki-laki', 'default.jpg', 'yysn', '2023-02-07 14:38:31', '2023-02-07 14:41:53'),
(7, 'Yuni Suyanti', 'Ketua Umum', 'Pengurus', 'Perempuan', 'default.jpg', 'yysn', '2023-02-07 14:39:55', '2023-02-07 14:50:04'),
(8, 'H. Moch. Yatemin Gianto', 'Ketua', 'Pengurus', 'Laki-laki', 'default.jpg', 'yysn', '2023-02-07 14:41:19', '2023-02-07 14:41:19'),
(9, 'Yufrida Nirwagiasih', 'Sekretaris', 'Pengurus', 'Perempuan', 'default.jpg', 'yysn', '2023-02-07 14:43:10', '2023-02-07 14:43:10'),
(10, 'Suharnanik', 'Pengurus', 'Bendahara', 'Perempuan', 'default.jpg', 'yysn', '2023-02-07 14:44:08', '2023-02-07 14:44:08'),
(11, 'Dr. Kuswandi M.Si, MM.', 'Anggota', 'Pengawas', 'Laki-laki', 'default.jpg', 'yysn', '2023-02-07 14:45:24', '2023-02-07 14:45:24'),
(12, 'Dian Purwa Ariaska', 'Anggota', 'Pengawas', 'Laki-laki', 'default.jpg', 'yysn', '2023-02-07 14:48:56', '2023-02-07 14:48:56'),
(16, 'Dra. SRI WILUDJENG', 'Kepala Sekolah', 'Pengurus', 'Perempuan', '1676861803-DRA. SRI WILUDJENG.JPG', 'sd', '2023-02-10 02:52:59', '2023-02-20 02:56:43'),
(17, 'Nur Rahimah S.Pd', 'Guru Kelas', 'Anggota', 'Perempuan', '1676861202-NUR RAHIMAH, S.PD.JPG', 'sd', '2023-02-10 03:06:50', '2023-02-20 02:46:42'),
(18, 'Silvya Rahmawati S.Pd', 'Guru Kelas', 'Anggota', 'Perempuan', '1676861220-SILVYA RAHMAWATI, S.PD.JPG', 'sd', '2023-02-10 03:10:38', '2023-02-20 02:47:00'),
(19, 'Nur Lailatul R S.Pd', 'Guru Kelas', 'Anggota', 'Perempuan', '1676861279-NUR LAILATUR RAHMAH, S.PD.JPG', 'sd', '2023-02-10 03:12:25', '2023-02-20 02:47:59'),
(20, 'Nurul Hidayati', 'Guru Kelas', 'Anggota', 'Perempuan', '1676861327-NURUL HIDAYATI, S.PD.JPG', 'sd', '2023-02-10 03:13:46', '2023-02-20 02:48:47'),
(21, 'Febrina Kusuma Dewi S.Pd', 'Guru Kelas', 'Anggota', 'Perempuan', '1676861358-Febrina Kusuma Dewi, S.Pd..JPG', 'sd', '2023-02-10 03:14:37', '2023-02-20 02:49:18'),
(22, 'Fatimatus Alfaroh S.Pd', 'Guru Kelas', 'Anggota', 'Perempuan', '1676861389-FATIMATUS ALFAROH, S.PD.JPG', 'sd', '2023-02-10 03:15:06', '2023-02-20 02:49:49'),
(23, 'Imam Buchori S.Pd', 'Guru Agama Islam', 'Anggota', 'Laki-laki', '1676861410-IMAM BUHORI, S.PD.JPG', 'sd', '2023-02-10 03:17:18', '2023-02-20 02:50:10'),
(24, 'Novita Rachman S.Pd', 'Guru Bahasa Inggris', 'Anggota', 'Perempuan', '1676861425-NOVITA RACHMAN, S.PD.JPG', 'sd', '2023-02-10 03:17:41', '2023-02-20 02:50:25'),
(25, 'Vita Bella S.Pd', 'Guru Kelas\n', 'Anggota', 'Perempuan', 'default.jpg', 'sd', '2023-02-10 03:18:06', '2023-02-10 03:18:06'),
(26, 'Subiyakta', 'Guru Kelas', 'Anggota', 'Laki-laki', '1676861477-SUBIYAKTA.JPG', 'sd', '2023-02-10 03:18:26', '2023-02-20 02:51:17'),
(27, 'Risvanda Aulya Putri', 'Operator', 'Pegawai', 'Perempuan', '1676861501-RISVANDA AULYA PUTRI.JPG', 'sd', '2023-02-10 03:33:02', '2023-02-20 02:51:41'),
(28, 'Achmad Putra Adinata', 'Security\n', 'Pegawai', 'Laki-laki', 'default.jpg', 'sd', '2023-02-10 03:33:28', '2023-02-10 03:33:28'),
(29, 'Anis Nuril Laili', 'Kasir', 'Pegawai', 'Perempuan', '1676861546-ANIS NURIL LAILI.JPG', 'sd', '2023-02-10 03:33:57', '2023-02-20 02:52:26'),
(30, 'Murdiono, S.Pd.', 'Kepala Sekolah', 'Pengurus', 'Laki-laki', '1681236996-bapakmurdiono.jpeg', 'smp', '2023-02-20 00:59:17', '2023-04-11 18:16:36'),
(31, 'Tri Soedarmanto, S.Pd.', 'Guru IPA', 'Anggota', 'Laki-laki', 'default.jpg', 'smp', '2023-02-20 01:01:58', '2023-02-20 01:01:58'),
(32, 'Supangat Rahayu, S.Pd.', 'Guru Olah Raga', 'Anggota', 'Laki-laki', 'default.jpg', 'smp', '2023-02-20 01:05:57', '2023-02-20 01:05:57'),
(33, 'Afdillah Farida, S.Pd.', 'Guru Prakarya', 'Anggota', 'Perempuan', 'default.jpg', 'smp', '2023-02-20 01:08:22', '2023-02-20 01:08:22'),
(34, 'Noefe Hari Hastutik, S.Pd.', 'Guru IPS', 'Anggota', 'Perempuan', 'default.jpg', 'smp', '2023-02-20 01:08:53', '2023-02-20 01:08:53'),
(35, 'Drs. Ikraman', 'Guru PPKN', 'Anggota', 'Laki-laki', 'default.jpg', 'smp', '2023-02-20 01:09:22', '2023-02-20 01:09:22'),
(36, 'Siska Pariwiyana, S.Pd.', 'Guru Agama Islam', 'Anggota', 'Perempuan', 'default.jpg', 'smp', '2023-02-20 01:10:32', '2023-02-20 01:10:32'),
(37, 'Imro’atun Nisa Prawira, S.Pd.', 'Guru Bahasa Inggris', 'Anggota', 'Perempuan', 'default.jpg', 'smp', '2023-02-20 01:10:50', '2023-02-20 01:10:50'),
(38, 'Rullyawan, S.Pd.', 'Guru Matematika', 'Anggota', 'Laki-laki', 'default.jpg', 'smp', '2023-02-20 01:12:42', '2023-02-20 01:12:42'),
(39, 'Fatikhatul Koiroh, S.Pd.', 'Guru Bahasa Indonesia', 'Anggota', 'Perempuan', 'default.jpg', 'smp', '2023-02-20 01:13:35', '2023-02-20 01:13:35'),
(40, 'Aurora Sis, S.Psi.', 'Guru BK', 'Anggota', 'Perempuan', 'default.jpg', 'smp', '2023-02-20 01:13:59', '2023-02-20 01:13:59'),
(41, 'Siti Khotimah', 'Tata Usaha', 'Pegawai', 'Perempuan', 'default.jpg', 'smp', '2023-02-20 01:14:19', '2023-02-20 01:14:19'),
(42, 'Nur Soliha', 'Kasir', 'Pegawai', 'Perempuan', 'default.jpg', 'smp', '2023-02-20 01:14:41', '2023-02-20 01:14:41'),
(43, 'Endang Sekarsari Muljaningsih', 'Perpustakaan', 'Pegawai', 'Perempuan', 'default.jpg', 'smp', '2023-02-20 01:15:05', '2023-02-20 01:15:05'),
(44, 'Brigitta Tyaslalita Putri, S.Pd.', 'Guru Bahasa Jawa', 'Anggota', 'Perempuan', 'default.jpg', 'smp', '2023-02-20 01:15:24', '2023-02-20 01:15:24'),
(45, 'Kristiani Yanti Kana, S.Th', 'Guru Agama Kristen', 'Anggota', 'Perempuan', 'default.jpg', 'smp', '2023-02-20 01:15:43', '2023-02-20 01:15:43'),
(46, 'Siti Hanifah', 'Operator', 'Pegawai', 'Perempuan', 'default.jpg', 'smp', '2023-02-20 01:16:05', '2023-02-20 01:16:05'),
(47, 'Murdiono, S.Pd', 'Kepala Sekolah', 'Kepala Sekolah', 'Laki-laki', '1681237095-bapakmurdiono.jpeg', 'smk', '2023-02-20 01:36:21', '2023-04-11 18:18:15'),
(48, 'Eva Ria Wiguna, S.Pd', 'Guru Produktif Akuntasi', 'Anggota', 'Perempuan', 'default.jpg', 'smk', '2023-02-20 01:37:32', '2023-02-20 01:37:32'),
(49, 'Nurida, S.Pd', 'Guru Bahasa Inggris', 'Anggota', 'Perempuan', 'default.jpg', 'smk', '2023-02-20 01:37:59', '2023-02-20 01:37:59'),
(50, 'Ari Budiarti, S.Pd', 'Guru Matematika', 'Anggota', 'Perempuan', 'default.jpg', 'smk', '2023-02-20 01:38:15', '2023-02-20 01:38:15'),
(51, 'Mariya Ulfah, S.Pd', 'Guru Bahasa Inggris', 'Anggota', 'Perempuan', 'default.jpg', 'smk', '2023-02-20 01:38:39', '2023-02-20 01:38:39'),
(52, 'Dandun Tri Pajar Prana, S.Pd', 'Guru PKN', 'Anggota', 'Laki-laki', 'default.jpg', 'smk', '2023-02-20 01:38:56', '2023-02-20 01:38:56'),
(53, 'Diana Rievera Anggraeni, S.Pd.M.Pd.', 'Guru Bahasa Inggris', 'Anggota', 'Perempuan', 'default.jpg', 'smk', '2023-02-20 01:39:13', '2023-02-20 01:39:13'),
(54, 'Fifin Ashari, S.Pd', 'Guru Matematika', 'Anggota', 'Perempuan', 'default.jpg', 'smk', '2023-02-20 01:39:27', '2023-02-20 01:39:27'),
(55, 'Hendro Winarso, S.Pd', 'Guru Produktif Akuntasi & Keuangan Lembaga', 'Anggota', 'Laki-laki', 'default.jpg', 'smk', '2023-02-20 01:39:40', '2023-02-20 01:39:40'),
(56, 'Taufiqurrahman, S.Pd', 'Guru Bahasa Indonesia', 'Anggota', 'Laki-laki', 'default.jpg', 'smk', '2023-02-20 01:39:57', '2023-02-20 01:39:57'),
(57, 'Rr Indrahayu Restu Wardhani, S.Pd', 'Guru Bahasa Indonesia', 'Anggota', 'Perempuan', 'default.jpg', 'smk', '2023-02-20 01:40:11', '2023-02-20 01:40:11'),
(58, 'Nur Rohman, S.Pd.I', 'Guru Pendidikan Agama Islam', 'Anggota', 'Perempuan', 'default.jpg', 'smk', '2023-02-20 01:40:28', '2023-02-20 01:40:28'),
(59, 'Dipta Ayu Nilam Sari, S.Psi', 'Guru Bimbingan Konseling', 'Anggota', 'Perempuan', 'default.jpg', 'smk', '2023-02-20 01:40:46', '2023-02-20 01:40:46'),
(60, 'Nailin Najah, S.Pd.I', 'Guru Pendidikan Agama Islam', 'Anggota', 'Perempuan', 'default.jpg', 'smk', '2023-02-20 01:41:03', '2023-02-20 01:41:03'),
(61, 'Dwi Anggraini, S.Pd', 'Guru Produktif OTKP', 'Anggota', 'Perempuan', 'default.jpg', 'smk', '2023-02-20 01:41:20', '2023-02-20 01:41:20'),
(62, 'Rendy Putra Pratama', 'Guru Produktif Akuntasi & Keuangan Lembaga', 'Anggota', 'Laki-laki', 'default.jpg', 'smk', '2023-02-20 01:41:38', '2023-02-20 01:41:38'),
(63, 'Brigitta Tyaslalita Putri, S.Pd', 'Guru Bahasa Jawa', 'Anggota', 'Perempuan', 'default.jpg', 'smk', '2023-02-20 01:41:55', '2023-02-20 01:41:55'),
(64, 'Siska Pariwiyana, S.Pd.I.', 'Bendahara 1', 'Pegawai', 'Perempuan', 'default.jpg', 'smk', '2023-02-20 01:42:15', '2023-02-20 01:42:15'),
(65, 'Yani Dwi Astuti, S.E', 'Bendahara 2', 'Pegawai', 'Perempuan', 'default.jpg', 'smk', '2023-02-20 01:42:39', '2023-02-20 01:42:39'),
(66, 'Ayu Julia Eka Siwi', 'Tata Usaha', 'Pegawai', 'Perempuan', 'default.jpg', 'smk', '2023-02-20 01:42:59', '2023-02-20 01:42:59'),
(67, 'Siti Hanifah', 'Operator Sekolah', 'Pegawai', 'Perempuan', 'default.jpg', 'smk', '2023-02-20 01:43:19', '2023-02-20 01:43:19'),
(68, 'Soewarno, S.Th.I, M.Pd.I', 'Guru Pendidikan Agama Islam', 'Anggota', 'Laki-laki', 'default.jpg', 'smk', '2023-02-20 01:43:39', '2023-02-20 01:43:39'),
(69, 'Afdillah Farida, S.Pd', 'Guru Produktif Akuntasi', 'Anggota', 'Perempuan', 'default.jpg', 'smk', '2023-02-20 01:43:59', '2023-02-20 01:43:59'),
(70, 'Vistabela Asri, S.Pd', 'Guru Pendidikan Jasmani', 'Anggota', 'Perempuan', 'default.jpg', 'smk', '2023-02-20 01:44:29', '2023-02-20 01:44:29'),
(71, 'Kristiani Yanti Kana, S. Th, SS', 'Guru Pendidikan Agama Kristen', 'Anggota', 'Perempuan', 'default.jpg', 'smk', '2023-02-20 01:44:47', '2023-02-20 01:44:47'),
(72, 'Mochamad Adi Setiawan', 'Teknisi Komputer', 'Pegawai', 'Laki-laki', 'default.jpg', 'smk', '2023-02-20 01:45:27', '2023-02-20 01:45:27');

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
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `banner` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_publish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `banner`, `title`, `slug`, `post_type`, `category_id`, `excerpt`, `body`, `tags`, `is_publish`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'banner63b012d6343ed.jpg', 'YAYASAN PENDIDIKAN TRI GUNA BHAKTI', 'tri-bhakti', 'Blog', 1, 'Tri Guna Bhakti siap mencetak SDM Indonesia yang unggul, humanis, cerdas dan mencetak pemimpin', '<ol style=\"border: 0px rgb(230, 230, 230); outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin-right: 0px; margin-left: 35px; padding: 0px 0px 0px 2rem; list-style-position: initial; list-style-image: initial; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\"><li style=\"border: 0px rgb(230, 230, 230); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; text-align: justify;\">Lulusan berkarakter humanis, berjiwa kewirausahaan dan professional serta dibekali dengan sertifikasi profesi</li><li style=\"border: 0px rgb(230, 230, 230); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; text-align: justify;\">Kegiatan intrakurikuler, ekstrakulikuler dan okurikuler yang didukung fasilitas diantaranya :<ul style=\"border: 0px rgb(230, 230, 230); outline: 0px; vertical-align: baseline; background: transparent; margin-right: 0px; margin-left: 35px; padding: 0px 0px 0px 2rem; list-style: disc;\"><li style=\"border: 0px rgb(230, 230, 230); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px;\"><p style=\"border: 0px rgb(230, 230, 230); outline: 0px; vertical-align: baseline; background: transparent; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.7;\">Inkubator Bisnis</p></li><li style=\"border: 0px rgb(230, 230, 230); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px;\"><p style=\"border: 0px rgb(230, 230, 230); outline: 0px; vertical-align: baseline; background: transparent; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.7;\">Lab Bahasa Inggris, Dll.</p></li><li style=\"border: 0px rgb(230, 230, 230); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px;\"><p style=\"border: 0px rgb(230, 230, 230); outline: 0px; vertical-align: baseline; background: transparent; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.7;\">Galeri Investasi</p></li></ul></li><li style=\"border: 0px rgb(230, 230, 230); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; text-align: justify;\">Kurikulum berorientasi digital dan Kampus Merdeka dengan metode pembelajaran&nbsp;<em style=\"border: 0px rgb(230, 230, 230); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px;\">student learning center</em>&nbsp;dengan masa Studi S.1 selama 3,5 tahun dan dari D.3 ke S.1 selama 1 tahun.</li><li style=\"border: 0px rgb(230, 230, 230); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; text-align: justify;\">Kerjasama dengan Dunia Industri (IndoPremier&nbsp;<em style=\"border: 0px rgb(230, 230, 230); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px;\">Online Technology</em>&nbsp;/ IPOT, Adira Finance), Kantor Akuntan Publik, Kantor Konsultan Pajak, Kantor Pemerintah, Industri Manufaktur dan Jasa.</li></ol>', NULL, '1', 1, '2021-12-12 05:12:12', '2022-12-31 10:47:09'),
(2, 1, 'banner63b0197b7880b.jpg', 'SD Tri Guna Bhakti', 'sd-tgb', 'Blog', 1, 'SD Tri Guna Bhakti Unggul Dalam Prestasi Yang Berakhlak Mulia, Berjiwa Patriot Serta Bernuansa Iman dan Taqwa', '<p>Program unggulan</p><p>- English day</p><p>- kelas mengaji</p><p>- Pramuka</p><p><br></p><p>Ekstrakulikuler</p><p>- Futsal</p><p>- Ju Jitsu</p><p>-Tari</p><p>- Paskibraka&nbsp;</p><p>- banjari</p>', NULL, '1', 1, '2021-12-12 05:12:12', '2023-02-07 12:16:46'),
(3, 1, 'banner63b0155fbffd7.jpg', 'SMP Tri Guna Bhakti', 'smp-tgb', 'Blog', 1, 'SMP Tri Guna Bhakti Mencetak Pemuda Yang Siap Menata Masa Depan', '<p>SMP</p><p>Program unggulan</p><p>- Pramuka</p><p>- kelas mengaji</p><p>- English day</p><p><br></p><p>Ekstrakulikuler</p><p>- futsal</p><p>- Ju Jitsu</p><p>- Tari</p><p>- paskibraka</p><p>- banjari</p>', NULL, '1', 1, '2021-12-12 05:12:12', '2022-12-31 11:01:47'),
(4, 1, 'banner63b0150a3749c.jpg', 'SMK Tri Guna Bhakti', 'smk-tgb', 'Blog', 1, 'SMK Tri Guna Bhakti Mencetak manusia yang Mandiri, Kreatif, Disiplin', '<p>Program unggulan\r\n</p><p>- English day\r\n</p><p>- kelas mengaji\r\n</p><p>- Pramuka</p><p>\r\n\r\nEkstrakulikuler\r\n</p><p>- Futsal\r\n</p><p>-<span style=\"background-color: transparent;\">Ju Jitsu</span></p><p><span style=\"background-color: transparent;\">\r\n-Tari\r\n</span></p><p><span style=\"background-color: transparent;\">- Paskibraka </span></p><p><span style=\"background-color: transparent;\">\r\n-</span><span style=\"background-color: transparent;\">banjari</span></p>', NULL, '1', 1, '2021-12-12 05:12:12', '2022-12-31 10:55:06'),
(20, 1, 'banner-63b02ec21fd4e.png', 'Gedung', 'gedung', 'Blog', 4, 'gedung', '<p>gedung milik sendiri</p>', NULL, '1', 1, '2022-12-31 12:44:50', '2022-12-31 12:48:05'),
(24, 1, 'banner-64357e7db3ff9.jpg', 'PPDB', 'ppdb', 'Blog', 4, 'Pendaftaran Siswa Baru 2023-2024', '<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xdj266r x126k92a\" style=\"margin: 0px; white-space: pre-wrap; overflow-wrap: break-word; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;\"><div dir=\"auto\" style=\"font-family: inherit;\">Masih bingung mau masuk sekolah mana? </div><div dir=\"auto\" style=\"font-family: inherit;\">Gabung dan daftar saja ke sekolah kami, sekolah kami juga menyediakan fasilitas untuk memaksimalkan pendidikan yang terbaik dan didukung tenaga guru yang profesional.</div><div dir=\"auto\" style=\"font-family: inherit;\">Kami pastikan anda mendapatkan pendidikan terbaik di sekolahan kami.</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"margin: 0.5em 0px 0px; white-space: pre-wrap; overflow-wrap: break-word; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;\"><div dir=\"auto\" style=\"font-family: inherit;\">Yukkk segera daftar ke sekolahan kami</div><div dir=\"auto\" style=\"font-family: inherit;\">Mulai 10 Februari sampai 13 Juli 2023</div></div>', NULL, '1', 1, '2023-04-11 15:36:29', '2023-04-11 15:36:33'),
(25, 1, 'banner-643593655aa2e.jpg', 'PPDB SD 2023', 'ppdbsd23', 'Blog', 4, 'Pendaftaran Siswa Baru SD tahun ajaran 2023-2024', '<p>Pendaftaran Siswa Baru SD tahun ajaran 2023-2024<br></p>', NULL, '1', 1, '2023-04-11 17:05:41', '2023-04-11 17:09:01'),
(26, 1, 'banner-64359429d1ab2.jpeg', 'PPDB SMP 2023', 'ppdbsmp23', 'Blog', 4, 'Pendaftaran Siswa Baru SMP tahun ajaran 2023-2024', '<p>Pendaftaran Siswa Baru SMP tahun ajaran 2023-2024<br></p>', NULL, '1', 1, '2023-04-11 17:08:57', '2023-04-11 17:08:57'),
(27, 1, 'banner-6435946846405.jpg', 'PPDB SMK 2023', 'ppdbsmk23', 'Blog', 4, 'Pendaftaran Siswa Baru SMK tahun ajaran 2023-2024', '<p>Pendaftaran Siswa Baru SMK tahun ajaran 2023-2024<br></p>', NULL, '1', 1, '2023-04-11 17:10:00', '2023-04-11 17:10:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poststatuses`
--

CREATE TABLE `poststatuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `poststatuses`
--

INSERT INTO `poststatuses` (`id`, `status_post`, `status_description`, `created_at`, `updated_at`) VALUES
(1, 'Publish', 'Post has been published', '2021-12-12 05:12:12', '2021-12-12 05:12:12'),
(2, 'Draft', 'Post has been drafted', '2021-12-12 05:12:12', '2021-12-12 05:12:12'),
(3, 'Pending', 'Post has been pending', '2021-12-12 05:12:12', '2021-12-12 05:12:12'),
(4, 'Rejected', 'Post has been rejected', '2021-12-12 05:12:12', '2021-12-12 05:12:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagging_tagged`
--

CREATE TABLE `tagging_tagged` (
  `id` int(10) UNSIGNED NOT NULL,
  `taggable_id` int(10) UNSIGNED NOT NULL,
  `taggable_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagging_tags`
--

CREATE TABLE `tagging_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suggest` tinyint(1) NOT NULL DEFAULT 0,
  `count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `tag_group_id` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagging_tag_groups`
--

CREATE TABLE `tagging_tag_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `todos`
--

CREATE TABLE `todos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `todo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assigned_to` int(10) UNSIGNED DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `todos`
--

INSERT INTO `todos` (`id`, `user_id`, `todo`, `description`, `assigned_to`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Google Single Sign On', 'Lorem Ipsum is simply dummy text of the printing', 3, '2021-12-12', '2021-12-31', 3, '2022-12-31 05:30:45', '2022-12-31 06:10:24'),
(2, 3, 'Landing Page Slider', 'Lorem Ipsum is simply dummy text of the printing', 3, '2021-12-12', '2021-12-31', 0, '2022-12-31 05:30:45', '2022-12-31 05:30:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `todo_statuses`
--

CREATE TABLE `todo_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `todo_statuses`
--

INSERT INTO `todo_statuses` (`id`, `status_name`, `status_description`, `created_at`, `updated_at`) VALUES
(1, 'Todo', 'New Task', '2022-12-31 05:30:45', NULL),
(2, 'On Progress', 'Task on Progress', '2022-12-31 05:30:45', NULL),
(3, 'Completed', 'Task Completed', '2022-12-31 05:30:45', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blod_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'guest',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `id_number`, `name`, `gender`, `religion`, `dob`, `address`, `blod_type`, `phone`, `instagram`, `facebook`, `twitter`, `photo`, `bio`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `google_id`) VALUES
(1, '11211121', 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin@test.com', '2022-12-01 06:04:24', '$2y$10$.ka1kFvxBHanuX3ii/.ecOHUpRWoCZGAnZ.U9YCMVtuXAaCOkMsim', 'admin', 'eTYMkuKjedEMlxTKOrKDN4cEKxVY54BWS3D0CskPq725TxOLepXEwtUdOLK2', NULL, '2022-12-31 10:34:46', NULL),
(10, NULL, 'trigunabhakti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trigunabhakti@gmail.com', '2023-04-12 08:43:51', '$2y$10$O0vVEU6r2RYtQjHqAb17ou9ZC/TDneIbARXCVV7ZqjE4OnCpRvseW', 'guest', NULL, '2023-04-12 08:43:31', '2023-04-12 08:43:31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_slug_unique` (`category_slug`);

--
-- Indeks untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_commenter_id_commenter_type_index` (`commenter_id`,`commenter_type`),
  ADD KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`),
  ADD KEY `comments_child_id_foreign` (`child_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
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
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indeks untuk tabel `poststatuses`
--
ALTER TABLE `poststatuses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tagging_tagged`
--
ALTER TABLE `tagging_tagged`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tagged_taggable_id_index` (`taggable_id`),
  ADD KEY `tagging_tagged_taggable_type_index` (`taggable_type`),
  ADD KEY `tagging_tagged_tag_slug_index` (`tag_slug`);

--
-- Indeks untuk tabel `tagging_tags`
--
ALTER TABLE `tagging_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tags_slug_index` (`slug`),
  ADD KEY `tagging_tags_tag_group_id_foreign` (`tag_group_id`);

--
-- Indeks untuk tabel `tagging_tag_groups`
--
ALTER TABLE `tagging_tag_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tag_groups_slug_index` (`slug`);

--
-- Indeks untuk tabel `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `todo_statuses`
--
ALTER TABLE `todo_statuses`
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
-- AUTO_INCREMENT untuk tabel `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `poststatuses`
--
ALTER TABLE `poststatuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tagging_tagged`
--
ALTER TABLE `tagging_tagged`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tagging_tags`
--
ALTER TABLE `tagging_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tagging_tag_groups`
--
ALTER TABLE `tagging_tag_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `todos`
--
ALTER TABLE `todos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `todo_statuses`
--
ALTER TABLE `todo_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tagging_tags`
--
ALTER TABLE `tagging_tags`
  ADD CONSTRAINT `tagging_tags_tag_group_id_foreign` FOREIGN KEY (`tag_group_id`) REFERENCES `tagging_tag_groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
