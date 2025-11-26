-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2025 at 05:38 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsekolahnasional`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'adminsekolahkutoarjo012025', '$2y$12$xNEejfyUcFm...wKGgWdWOVOKeoorbnrxJE34nGRLgGPcjCtA3jjm', 'Administrator', 'admin@sekolah.com', '2025-11-25 11:47:23', '2025-11-25 11:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_review`
--

CREATE TABLE `alumni_review` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_alumni` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_lulus` year NOT NULL,
  `kesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumni_review`
--

INSERT INTO `alumni_review` (`id`, `nama_alumni`, `tahun_lulus`, `kesan`, `pekerjaan`, `foto`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'Lukas Ade Wismaji', 2004, 'Menemukan banyak teman baru yang baik dan mudah bergaul, menciptakan lingkungan yang tidak membuat merasa sendirian. Merasa nyaman dan aman di lingkungan sekolah yang ramah dan bersih. Mendapat dukungan dan bimbingan dari guru-guru yang sabar dan berdedikasi. ', 'Paspampres', 'alumni-photos/01KAZ7A1MTW763JEVEFFQ1SCK2.png', 1, '2025-11-25 21:38:51', '2025-11-25 21:38:51'),
(2, 'Kris Nur Cahyani', 2010, 'SD Nasional menjadi sekolah yang sangat membantu anak     untuk berkembang, baik di bidang akademik maupun non akademik. Para guru sangat sabar dan telaten dalam membimbing siswa-siswa dalam belajar. Saya termasuk siswa yang sedikit lamban dalam memahami suatu materi. Akan tetapi kesabaran dan ketelatenan guru-guru dalam mendidik, menjadikan saya dapat bertumbuh menjadi pribadi yang setia dan percaya pada setiap proses yang harus dijalani.', 'Pendeta', 'alumni-photos/01KAZW0MKGZ1E7Q4BGR9FEBRNT.jpg', 1, '2025-11-25 21:40:35', '2025-11-26 03:40:43'),
(3, 'Dyta Aprilia Christ Setiani', 2010, 'SD Nasional Indonesia adalah sekolah ketiga dan terakhir yang saya jalani selama pendidikan Sekolah Dasar setelah sebelumnya bersekolah di Padang dan Kalimantan. Karena sudah beberapa kali berpindah sekolah, saya telah mengalami berbagai jenis guru dan kurikulum pendidikan. Di SD Nasional, kurikulumnya sudah cukup baik, tersedia ekstrakurikuler yang memadai, mengikuti perkembangan teknologi dengan adanya laboratorium komputer, serta menyediakan pembelajaran bahasa daerah yang tidak saya dapatkan di kota lain. Kompetensi guru juga sesuai standar sekolah dasar di Indonesia, dengan guru dari berbagai usia yang saling melengkapi dalam mengikuti perkembangan zaman. Kurikulumnya pun menyesuaikan kurikulum nasional sehingga lulusannya dapat melanjutkan ke jenjang sekolah yang lebih tinggi dengan baik dan berprestasi.', 'Solution Design Engineer di CJ Logistics Indonesia ', 'alumni-photos/01KAZWGW0N949YDB6MA8GYCTDE.jpg', 1, '2025-11-26 03:49:35', '2025-11-26 03:49:35'),
(4, 'Victoria Yaniar Christ Setianti', 2011, 'Sangat menyenangkan di SD Nasional sering ikut serta dalam perlombaan - perlombaan sehingga memotivasi peserta didiknya untuk berprestasi. Guru – guru SD Nasional bagus, mengajar tepat waktu, sangat dekat dengan murid dan merangkul semua tidak pilih – pilih.', 'PNS di Pemprov Babel', 'alumni-photos/01KAZWMB3XEAC1Z94VVY4F4G04.jpg', 1, '2025-11-26 03:51:29', '2025-11-26 03:51:29'),
(5, 'Yohanes Benny Satria', 2011, 'Ketika dipilih untuk menjadi peserta lomba LCC IPA tingkat kecamatan. Saya mendapatkan kesempatan belajar yang lebih.', 'Guru SD Santo Antonius 02 Semarang', 'alumni-photos/01KAZWPZMJG172FHJFB04559NB.png', 1, '2025-11-26 03:52:55', '2025-11-26 03:52:55'),
(6, 'Shelly Alfina Damayanti', 2012, 'Apapun hobi nya akan selalu di dukung oleh guru. Saya hobi menyanyi dan menari dan saya pernah di suruh ikut lomba menyanyi solo walaupun blm juara tetapi guru” selalu support dan mendorong apa yg di hobi kan oleh murid nyaa. Itu juga termasuk mendorong mental anak agar punya keberanian berdiri di atas panggung di depan banyak orang.Guru nya baik, ramah, sayang sekali dengan muridnya, dan murid selalu di perhatikan dengan baik.', 'Wirausaha Ayam Geprek \"Chilicious\"', 'alumni-photos/01KAZWSBWJ0V8ZJWC2Z10QEBG5.jpg', 1, '2025-11-26 03:54:13', '2025-11-26 03:54:13'),
(7, 'Tegar Saktiputra', 2014, 'SD Nasional memilki guru- guru  yang dekat dan sayang pada anak- anak', 'Wedding Music', 'alumni-photos/01KAZWW81H8TPGCK9W3DDKX06J.jpg', 1, '2025-11-26 03:55:48', '2025-11-26 03:55:48');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_fasilitas` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `kategori`, `foto_url`, `admin_id`, `created_at`, `updated_at`) VALUES
(2, 'Diseminasi Gugus Kartini bersama Gerakan Sekolah Menyenangkan (GSM) di SD Nasional Indonesia', 'kegiatan', 'galeri/kegiatan/01KB0C9BE8X9245XJSEWYS7TKQ.heic', 1, '2025-11-26 08:25:06', '2025-11-26 08:25:06'),
(3, 'Diseminasi Gugus Kartini bersama Gerakan Sekolah Menyenangkan (GSM) di SD Nasional Indonesia', 'kegiatan', 'galeri/kegiatan/01KB0C9SQJ6KJ1CAARKBAME39S.heic', 1, '2025-11-26 08:25:21', '2025-11-26 08:25:21'),
(4, 'Diseminasi Gugus Kartini bersama Gerakan Sekolah Menyenangkan (GSM) di SD Nasional Indonesia', 'kegiatan', 'galeri/kegiatan/01KB0CB50PD6PSBGP90MJ8M4GR.heic', 1, '2025-11-26 08:26:05', '2025-11-26 08:26:05'),
(5, 'Karnaval Hari Kemerdekaan', 'kegiatan', 'galeri/kegiatan/01KB0CCM9X1CWCH7ZC60B8BANW.heic', 1, '2025-11-26 08:26:53', '2025-11-26 08:26:53'),
(6, 'Karnaval Hari Kemerdekaan', 'kegiatan', 'galeri/kegiatan/01KB0CD33ZWWYSBRKD8GHWYCD6.heic', 1, '2025-11-26 08:27:08', '2025-11-26 08:27:08'),
(7, 'Karnaval Hari Kemerdekaan', 'kegiatan', 'galeri/kegiatan/01KB0CDYRPMNMFR4SCJC0TB3F8.heic', 1, '2025-11-26 08:27:37', '2025-11-26 08:27:37'),
(8, 'Karnaval Hari Kemerdekaan', 'kegiatan', 'galeri/kegiatan/01KB0CEJ1FZNFADGXZB98WG90Y.heic', 1, '2025-11-26 08:27:56', '2025-11-26 08:27:56'),
(9, 'Karnaval Hari Kemerdekaan', 'kegiatan', 'galeri/kegiatan/01KB0CF45ZHBDQHZZE7H9H4X8A.heic', 1, '2025-11-26 08:28:15', '2025-11-26 08:28:15'),
(10, 'Karnaval Hari Kemerdekaan', 'kegiatan', 'galeri/kegiatan/01KB0CFRF751SSJBEA3C9M8WB4.heic', 1, '2025-11-26 08:28:36', '2025-11-26 08:28:36'),
(11, 'Makrab Kelas 4, 5, dan 6 ', 'kegiatan', 'galeri/kegiatan/01KB0CHD9EQ589T0ZCCEYHS0M4.heic', 1, '2025-11-26 08:29:30', '2025-11-26 08:29:30'),
(12, 'Makrab Kelas 4, 5, dan 6 ', 'kegiatan', 'galeri/kegiatan/01KB0CHSTM9EN4VPG91S1VEKDG.heic', 1, '2025-11-26 08:29:43', '2025-11-26 08:29:43'),
(13, 'Makrab Kelas 4, 5, dan 6 ', 'kegiatan', 'galeri/kegiatan/01KB0CJ91XS6AYPJN4C1EM15QS.heic', 1, '2025-11-26 08:29:58', '2025-11-26 08:29:58');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang` enum('TK','SD') COLLATE utf8mb4_unicode_ci NOT NULL,
  `moto` text COLLATE utf8mb4_unicode_ci,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `jabatan`, `jenjang`, `moto`, `foto`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'Lily Halim, S.Pd.', 'Kepala Sekolah', 'SD', NULL, 'guru-fotos/01KAZ5SG5M2F79M6EK3QNWKSEQ.jpg', 1, '2025-11-25 21:12:21', '2025-11-25 21:12:21'),
(2, 'Sudarmi, S.Pd.', 'Guru Pendidikan Agama Kristen', 'SD', NULL, 'guru-fotos/01KAZ61G2C9MZKH7FB6HMHF8FT.jpg', 1, '2025-11-25 21:16:43', '2025-11-25 21:16:43'),
(3, 'Dewi Ayvina Lisanjaya, S.E. ', 'Guru Kelas V', 'SD', NULL, 'guru-fotos/01KAZ69XR0XZDHVF7ES71BHRC3.jpg', 1, '2025-11-25 21:21:19', '2025-11-25 21:21:19'),
(4, 'Eva Febri Andriyani, S.Pd.', 'Guru Kelas IV', 'SD', NULL, 'guru-fotos/01KAZ6C1Z83XG12GJ7EF7ZF09P.jpg', 1, '2025-11-25 21:22:29', '2025-11-25 21:22:29'),
(5, 'Maria Dwi Permata', 'Guru Kelas II', 'SD', NULL, 'guru-fotos/01KAZ6E0Z4JVZGFYHJ0ZG6PE3W.jpg', 1, '2025-11-25 21:23:33', '2025-11-25 21:23:33'),
(6, 'Evi Longgariati, S.Pd. ', 'Kepala Sekolah', 'TK', NULL, 'guru-fotos/01KAZ6G8P6WGSX7PH2NF4PBQHH.jpg', 1, '2025-11-25 21:24:47', '2025-11-25 21:24:47'),
(7, 'Teti Mulyawati, S.Pd. ', 'Guru TK A', 'TK', NULL, 'guru-fotos/01KAZ6JK686KD7KDQC3DB8P60V.jpg', 1, '2025-11-25 21:26:03', '2025-11-25 21:26:03'),
(8, 'Ulfa Rodiah,S.Hum ', 'Mitra', 'SD', NULL, 'guru-fotos/01KAZ6N2G66APMNNJA9GWCTGAD.jpg', 1, '2025-11-25 21:27:24', '2025-11-25 21:27:24'),
(9, 'Siyam Ritawati, A.Md.', 'Guru Kelas VI ', 'SD', NULL, 'guru-fotos/01KAZX41JE3GGKGRK5N9GHWM07.jpg', 1, '2025-11-26 04:00:03', '2025-11-26 04:00:03'),
(10, 'Fransisca Ninik Setyaningsi, S.Pd Aud', 'Guru Kelas III', 'SD', NULL, 'guru-fotos/01KAZX6431BE5P82Y8MT9H7KKN.jpg', 1, '2025-11-26 04:01:11', '2025-11-26 04:01:11'),
(11, 'Ezra Yessy Santhika, S.Pd. ', 'Guru Kelas I', 'SD', NULL, 'guru-fotos/01KAZXHCNX4H9VFHF8KDWZY7NP.jpg', 1, '2025-11-26 04:07:21', '2025-11-26 04:07:21'),
(12, 'Samuel Priadi, S.Si', 'Guru Pendidikan Jasmani, Olahraga, dan Kesehatan', 'SD', NULL, 'guru-fotos/01KAZXPWV7WTAB18GTRB2F93N1.jpg', 1, '2025-11-26 04:10:21', '2025-11-26 04:10:21'),
(13, 'Yohana Eka Praptiwi Narsih ', 'Guru Pendamping TK A', 'TK', NULL, 'guru-fotos/01KAZY2DBV97T2YX5NNDRW89TS.jpg', 1, '2025-11-26 04:16:38', '2025-11-26 04:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` bigint UNSIGNED NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_yt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_ig` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `embed_google_maps` text COLLATE utf8mb4_unicode_ci,
  `admin_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `alamat`, `email`, `telepon`, `link_yt`, `link_ig`, `link_fb`, `embed_google_maps`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'JL. MT. Haryono, No. 94 Rt. 1 Rw. 8, Kauman, Kutoarjo, Kembang Arum, Kutoarjo, Purworejo, Kabupaten Purworejo, Jawa Tengah 54251', 'sdnasional@yahoo.co.id', '0812', 'http://www.youtube.com/@sdnasionalindonesia2347', 'https://www.instagram.com/tk_sd_nasional_kutoarjo?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==', 'https://web.facebook.com/tksd.kutoarjo?locale=id_ID', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1662.3024478756154!2d109.9095120549169!3d-7.721313094171253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7ac19ed14a47ab%3A0xf89838fb8d0eadca!2sSD%20Nasional%20Indonesia!5e0!3m2!1sid!2sid!4v1764159002445!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, '2025-11-26 05:11:08', '2025-11-26 05:11:08');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_10_01_000000_create_admin_table', 1),
(5, '2024_10_01_000001_create_profil_sekolah_table', 1),
(6, '2024_10_01_000001_create_tujuan_table', 1),
(7, '2024_10_01_000002_create_sejarah_table', 1),
(8, '2024_10_01_000003_create_guru_table', 1),
(9, '2024_10_01_000004_create_staf_table', 1),
(10, '2024_10_01_000005_create_galeri_table', 1),
(11, '2024_10_01_000006_create_kegiatan_table', 1),
(12, '2024_10_01_000007_create_fasilitas_table', 1),
(13, '2024_10_01_000008_create_mitra_table', 1),
(14, '2024_10_01_000009_create_alumni_review_table', 1),
(15, '2024_10_01_000010_create_kontak_table', 1),
(16, '2025_10_16_005653_create_personal_access_tokens_table', 1),
(17, '2025_11_06_000837_update_database_structure_v2', 1),
(18, '2025_11_06_030000_remove_urutan_from_visi_misi', 1),
(19, '2025_11_10_000000_remove_tanggal_from_kegiatan', 1),
(20, '2025_11_26_000000_rename_deskripsi_to_moto_in_guru_and_staf', 2);

-- --------------------------------------------------------

--
-- Table structure for table `misi`
--

CREATE TABLE `misi` (
  `id` bigint UNSIGNED NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `misi`
--

INSERT INTO `misi` (`id`, `isi`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'Melaksanakan pembelajaran dan bimbingan secara efektif dan menyenangkan, sehingga siswa mampu dan berkembangs ecara optimal dan maksimal sesuai dengan potensi yang dimiliki.\n', 1, '2025-11-25 21:51:26', '2025-11-26 09:18:14'),
(2, 'Menumbuhkembangkan pemahaman, penghayatan, dan pengalaman terrhadap agama untuk membentuk budi pekerti yang luhur dan beraklak mulia.\n', 1, '2025-11-26 09:18:41', '2025-11-26 09:18:41'),
(3, 'Melaksanakan managemen dalam Pendidikan berbasis sekolah yang bercorak demokratis, adil, pertisipatif, inovatif, dan berfungsi pada otonomi sekolah.\n', 1, '2025-11-26 09:18:54', '2025-11-26 09:18:54'),
(4, 'Mengembangkan budaya kompetitif bagi siswa dalam Upaya meningkatkan prestasi.\n', 1, '2025-11-26 09:19:14', '2025-11-26 09:19:14'),
(5, 'Mengadakan pembinaan kesiswaaan dan kegiatan intrakurikuler maupun ekstrakurikuler', 1, '2025-11-26 09:19:21', '2025-11-26 09:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_mitra` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `admin_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id`, `nama_mitra`, `logo`, `deskripsi`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'Bantu Guru Belajar Lagi (BGBL) ', 'mitra-logos/01KB00W6EZZYGBPHBXVCTNQCYX.jpg', 'Bantu Guru Belajar Lagi (BGBL) hadir di daerah sebagai upaya menyebarkan kesadaran bahwa pendidikan adalah tanggung jawab bersama dan peningkatan kualitas guru merupakan keharusan, termasuk di Kecamatan Kutoarjo, Purworejo, Jawa Tengah. Sejak 2022, BGBL bermitra dengan Sekolah Nasional, mendampingi guru TK Nasional dan mulai tahun ajaran 2025/2026 juga mendampingi guru SD Nasional melalui Fasilitator Guru Merdeka Belajar (GMB) yang berperan sebagai teman belajar guru sekaligus penggerak komunitas Guru Kutoarjo Merdeka Belajar. Pada tahun pertama, Fasilitator GMB membimbing TK Nasional dalam berbagai keterampilan seperti Filosofi & Metode Montessori, Filosofi Ki Hajar Dewantara, Disiplin Positif, Manajemen Kelas, dan Komunikasi Efektif, serta mendorong pelibatan orang tua sebagai bagian penting pendidikan. Selain Sekolah Nasional, pendampingan juga dilakukan pada TK Handayani I di bawah Kelurahan Kutoarjo. Di samping kemitraan dengan BGBL, SD Nasional sebelumnya bermitra dengan Yayasan Anak Bangsa Berbagi pada 2020–2022 untuk memperkuat karakter sekolah sebagai sekolah Kristen.\n\nUntuk memperkuat proses pendampingan di Sekolah Dasar Nasional, Ulfa Rodiah, S.Hum turut berperan sebagai mitra BGBL dalam mendukung peningkatan kompetensi guru. Dengan latar belakang pendidikan yang solid serta pengalaman dalam pengembangan komunitas belajar, beliau membantu memastikan pendampingan berlangsung efektif, berkelanjutan, dan selaras dengan semangat Merdeka Belajar.', 1, '2025-11-26 05:05:40', '2025-11-26 05:05:40'),
(2, 'Ulfa Rodiah,S.Hum ', 'mitra-logos/01KB00X7DG7D13CNDPQZTNDN5Z.jpg', NULL, 1, '2025-11-26 05:06:14', '2025-11-26 05:06:14');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('mB7qGAkuLABmoxfncfCHbHFNMTvKmBcKIzOmOd5K', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicmVJYlZmeWRGVWZoZm5aZUNaalBhTkcyblBsZGpOdTBNUTBNMGptMyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7czo1OiJyb3V0ZSI7czoyNToiZmlsYW1lbnQuYWRtaW4uYXV0aC5sb2dpbiI7fX0=', 1764177031);

-- --------------------------------------------------------

--
-- Table structure for table `staf`
--

CREATE TABLE `staf` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moto` text COLLATE utf8mb4_unicode_ci,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staf`
--

INSERT INTO `staf` (`id`, `nama`, `jabatan`, `moto`, `foto`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'Ety Nurani', 'Tata Usaha ', NULL, 'staf-photos/01KAZ6WA5SCZW1TMBJ7CHF8Y5N.jpg', 1, '2025-11-25 21:31:21', '2025-11-25 21:31:21'),
(2, 'Karjiyanti ', 'Pustakawati ', NULL, 'staf-photos/01KAZ6ZKF54NT894CAH8SGZ0QJ.jpg', 1, '2025-11-25 21:33:09', '2025-11-25 21:33:09'),
(3, 'Asih Sunarni', 'Pembantu Pelaksana', NULL, 'staf-photos/01KAZY5PATHJX65QCVQK6RQZZV.jpg', 1, '2025-11-26 04:18:26', '2025-11-26 04:18:26');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE `tujuan` (
  `id` bigint UNSIGNED NOT NULL,
  `tujuan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` (`id`, `tujuan`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'Membentuk dasar-dasar Kemahiran membaca, menulis, berhitung.', 1, '2025-11-25 21:48:21', '2025-11-26 09:16:24'),
(2, 'Meningkatkan kualitas dan kuantitas peserta akademik dan non-akademik\n', 1, '2025-11-26 09:16:48', '2025-11-26 09:16:48'),
(3, 'Menerapkan perilaku santun dan jujur dalam kehidupan sehari-hari\n', 1, '2025-11-26 09:16:59', '2025-11-26 09:16:59'),
(4, 'Meningkatkan minat baca\n', 1, '2025-11-26 09:17:10', '2025-11-26 09:17:10'),
(5, 'Mengamalkan ajaran agama yang dianut secara selaras, serasi, dan seimbang dengan illmu pengetahuan dan teknologi', 1, '2025-11-26 09:17:26', '2025-11-26 09:17:26');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE `visi` (
  `id` bigint UNSIGNED NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visi`
--

INSERT INTO `visi` (`id`, `isi`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'Terbentuknya insan yang unggul dalam prestasi, ebrbudi luhur, beriman dan bertaqwa kepada Tuhan yang Maha Esa', 1, '2025-11-25 21:50:16', '2025-11-25 21:50:16');

-- --------------------------------------------------------

--
-- Table structure for table `yayasan`
--

CREATE TABLE `yayasan` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `yayasan`
--

INSERT INTO `yayasan` (`id`, `nama`, `deskripsi`, `gambar`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'Yayasan Pembina Pendidikan Kristen Kutoarjo (YPPK Kutoarjo)', 'Taman Kanak-kanak (TK) dan Sekolah Dasar Nasional Indonesia Kutoarjo (SD Nasional) berada di bawah naungan Yayasan Pembina Pendidikan Kristen Kutoarjo (YPPK Kutoarjo). Yayasan ini dikelola langsung oleh GKI Kutoarjo sebagai bagian dari kesaksian dan pelayanan jemaat. Saat ini, TK dan SD Nasional merupakan satu-satunya sekolah Kristen yang masih beroperasi di Kecamatan Kutoarjo, Kabupaten Purworejo, Jawa Tengah. Sejak dilakukannya penilaian mutu dan kinerja sekolah oleh Badan Akreditasi Nasional (BAN) pada tahun 2007 hingga sekarang, sekolah ini secara konsisten mempertahankan status Terakreditasi A (Sekolah Unggul). Gedung sekolah ini sebelumnya dikelola oleh Sekolah Tiong Hoa Hwee Kwan (THHK) dan dibangun pada masa kolonial menjelang kemerdekaan dengan arsitektur bergaya Tionghoa. Saat ini, sekolah berdiri di atas lahan seluas 1.827 m² yang berlokasi strategis di pusat Kota Kutoarjo.\n', 'yayasan-images/01KB0F5772X644S48QYYMTDT5P.jpg', 1, '2025-11-26 09:15:16', '2025-11-26 09:15:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_username_unique` (`username`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `alumni_review`
--
ALTER TABLE `alumni_review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumni_review_tahun_lulus_index` (`tahun_lulus`),
  ADD KEY `alumni_review_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fasilitas_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galeri_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guru_jenjang_index` (`jenjang`),
  ADD KEY `guru_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `heroes_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kontak_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `misi_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mitra_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  ADD KEY `personal_access_tokens_expires_at_index` (`expires_at`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staf_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tujuan_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visi_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `yayasan`
--
ALTER TABLE `yayasan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `yayasan_admin_id_foreign` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumni_review`
--
ALTER TABLE `alumni_review`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `misi`
--
ALTER TABLE `misi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staf`
--
ALTER TABLE `staf`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visi`
--
ALTER TABLE `visi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `yayasan`
--
ALTER TABLE `yayasan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni_review`
--
ALTER TABLE `alumni_review`
  ADD CONSTRAINT `alumni_review_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fasilitas_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `heroes`
--
ALTER TABLE `heroes`
  ADD CONSTRAINT `heroes_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `kontak`
--
ALTER TABLE `kontak`
  ADD CONSTRAINT `kontak_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `misi`
--
ALTER TABLE `misi`
  ADD CONSTRAINT `misi_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `mitra`
--
ALTER TABLE `mitra`
  ADD CONSTRAINT `mitra_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `staf`
--
ALTER TABLE `staf`
  ADD CONSTRAINT `staf_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD CONSTRAINT `tujuan_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `visi`
--
ALTER TABLE `visi`
  ADD CONSTRAINT `visi_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `yayasan`
--
ALTER TABLE `yayasan`
  ADD CONSTRAINT `yayasan_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
