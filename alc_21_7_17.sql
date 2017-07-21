-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2017 at 05:44 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alc`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `can_reply` tinyint(1) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `id_user`, `can_reply`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 12, 1, 'Human Capital participation in Job Fair and Career Expo', 'May 30th, 2017 – Human Capital Division of Aerofood ACS conducted open recruitment by participating the 11th International Tourism And Hospitality Grand Recuitment 2017 event held at Sekolah Tinggi Pariwisata NHI Bandung from 23rd – 24th of May 2017. The purpose of the event is to recruit qualified candidates for company’s human resource regeneration. Hundreds of candidates applied to join Aerofood ACS during this two day event.\r\n\r\nDespite Aerofood ACS, other companies such as airlines, property, tour and travel companies also joined the event. STP NHI is well – known as an education institution expert and excellent in providing quality education for its students. This was the second event participated by Aerofood ACS. Previously, Aerofood ACS participated in Indonesia Career Expo 2017 in Balai Kartini, Jakarta from the 5th – 6th of April 2017.\r\n\r\nHuman resource is important element and asset in a company’s business. The availability and good quality of human resource are necessary for Aerofood ACS to ensure the company’s business run accordingly to achieve company’s mission and vision.', 'uploads/wolu.png', '2017-07-19 06:07:42', '2017-07-19 06:07:42');

-- --------------------------------------------------------

--
-- Table structure for table `content_learnings`
--

CREATE TABLE `content_learnings` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_section` int(10) UNSIGNED NOT NULL,
  `file_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_learnings`
--

INSERT INTO `content_learnings` (`id`, `id_section`, `file_name`, `url`, `created_at`, `updated_at`) VALUES
(1, 2, 'Content One', '/ViewerJS/index.html#../contents/cv.pdf', '2017-07-18 07:44:52', '2017-07-18 07:44:52'),
(2, 2, 'Content Two', '/ViewerJS/index.html#../contents/manpro.pdf', '2017-07-18 07:45:37', '2017-07-18 07:45:37'),
(3, 5, 'Content 1', '/ViewerJS/index.html#../contents/cv.pdf', '2017-07-19 07:47:54', '2017-07-19 07:47:54'),
(4, 9, 'Content One', '/ViewerJS/index.html#../contents/resume-rohmattaufik.pdf', '2017-07-20 11:43:10', '2017-07-20 11:43:10'),
(5, 12, 'Materi Satu', '/ViewerJS/index.html#../contents/resume-rohmattaufik.pdf', '2017-07-20 14:09:22', '2017-07-20 14:09:22'),
(6, 15, 'qwe', '/ViewerJS/index.html#../contents/cv.pdf', '2017-07-21 07:28:29', '2017-07-21 07:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `content_sliders`
--

CREATE TABLE `content_sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_forum` int(10) UNSIGNED DEFAULT NULL,
  `is_activ` tinyint(1) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_sliders`
--

INSERT INTO `content_sliders` (`id`, `id_forum`, `is_activ`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Mandatory Training 2017', 'Aerofood ACS demonstrates its commitment by delivering innovative and creative catering service through the implementation of ‘IFRESH’ (Integrity, Fast, Reliable, Effective & Efficient, Service Excellence and Hygiene). These five elements are a set of corporate value shared by our employees, which in turn has led to the company scoring numerous business accomplishments.', NULL, '2017-07-05 12:40:13', '2017-07-05 12:40:13'),
(2, NULL, 1, 'Apakah Lorem Ipsum itu?', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.', NULL, '2017-07-05 12:47:13', '2017-07-05 12:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id_department` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_departmen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_job_family` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id_department`, `nama_departmen`, `id_job_family`, `created_at`, `updated_at`) VALUES
('A123', 'Sales', 2, '2017-07-04 12:40:59', '2017-07-04 12:40:59'),
('B123', 'Procurement', 3, '2017-07-05 07:08:08', '2017-07-05 07:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `divisis`
--

CREATE TABLE `divisis` (
  `id_divisi` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_divisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisis`
--

INSERT INTO `divisis` (`id_divisi`, `nama_divisi`, `created_at`, `updated_at`) VALUES
('D001', 'Human Capital', '2017-07-11 15:24:37', '2017-07-11 15:24:37'),
('D002', 'Corporate Secretary, Legal & General Affair', '2017-07-11 15:24:37', '2017-07-11 15:24:37'),
('D003', 'Ancillary Revenue & Business Development', '2017-07-11 15:24:37', '2017-07-11 15:24:37'),
('D004', 'Strategic Sourcing', '2017-07-11 15:24:38', '2017-07-11 15:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_personnel` int(10) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `struktur` int(10) UNSIGNED DEFAULT NULL,
  `level_position` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `id_personnel`, `nip`, `struktur`, `level_position`, `created_at`, `updated_at`) VALUES
(4, 4, '11212345876', 6, 6, NULL, NULL),
(5, 5, '123123123123', 7, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `can_reply` tinyint(1) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_department` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_job_family` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`id`, `id_user`, `can_reply`, `title`, `content`, `id_department`, `id_job_family`, `created_at`, `updated_at`) VALUES
(1, 13, 1, 'Forum Pertama Saya', 'Lorem Ipsum ..........', NULL, NULL, '2017-07-19 13:48:15', '2017-07-19 13:48:15'),
(2, 13, 1, 'Forum Job Family saya', 'ehem ehem', NULL, 2, '2017-07-20 07:20:06', '2017-07-20 07:20:06'),
(3, 13, 1, 'Forum department saya', 'qwertyqwerty', 'A123', NULL, '2017-07-20 07:20:30', '2017-07-20 07:20:30');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_trainees`
--

CREATE TABLE `jawaban_trainees` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_question` int(10) UNSIGNED NOT NULL,
  `isi_jawaban` int(10) UNSIGNED DEFAULT NULL,
  `skor` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `jawaban_trainees`
--

INSERT INTO `jawaban_trainees` (`id`, `id_user`, `id_question`, `isi_jawaban`, `skor`, `created_at`, `updated_at`) VALUES
(1, 13, 1, 3, 0, '2017-07-18 07:51:01', '2017-07-18 07:51:01'),
(2, 13, 2, 7, 1, '2017-07-18 07:51:02', '2017-07-18 07:51:02'),
(3, 13, 3, 12, 1, '2017-07-18 07:51:02', '2017-07-18 07:51:02'),
(4, 13, 4, 14, 0, '2017-07-18 07:51:02', '2017-07-18 07:51:02'),
(5, 13, 5, 16, 0, '2017-07-18 07:51:02', '2017-07-18 07:51:02'),
(6, 13, 6, 18, 1, '2017-07-18 07:58:12', '2017-07-18 07:58:12'),
(7, 13, 7, 23, 1, '2017-07-18 07:58:12', '2017-07-18 07:58:12');

-- --------------------------------------------------------

--
-- Table structure for table `job_families`
--

CREATE TABLE `job_families` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_families`
--

INSERT INTO `job_families` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Sales and Marketing', '2017-07-04 11:32:32', '2017-07-04 11:32:32'),
(3, 'General Operation Management', '2017-07-04 11:34:24', '2017-07-04 11:34:24');

-- --------------------------------------------------------

--
-- Table structure for table `level_positions`
--

CREATE TABLE `level_positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `level_positions`
--

INSERT INTO `level_positions` (`id`, `nama_level`, `created_at`, `updated_at`) VALUES
(1, 'Staff', '2017-07-11 15:15:04', '2017-07-11 15:15:04'),
(2, 'Supervisor', '2017-07-11 15:15:04', '2017-07-11 15:15:04'),
(3, 'Officer', '2017-07-11 15:15:05', '2017-07-11 15:15:05'),
(4, 'Head Business Unit', '2017-07-11 15:15:05', '2017-07-11 15:15:05'),
(5, 'Assistance Manager', '2017-07-11 15:15:05', '2017-07-11 15:15:05'),
(6, 'Manager', '2017-07-11 15:15:05', '2017-07-11 15:15:05'),
(7, 'Executif Manager', '2017-07-11 15:15:05', '2017-07-11 15:15:05'),
(8, 'Senior Manager', '2017-07-11 15:15:05', '2017-07-11 15:15:05'),
(9, 'General Manager', '2017-07-11 15:15:05', '2017-07-11 15:15:05'),
(10, 'Vice President', '2017-07-11 15:15:05', '2017-07-11 15:15:05'),
(11, 'Board of Director', '2017-07-11 15:15:05', '2017-07-11 15:15:05');

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
(3, '2017_07_02_174330_create_sessions_table', 1),
(4, '2017_07_02_174412_create_personnels_table', 1),
(5, '2017_07_02_174532_create_divisis_table', 1),
(6, '2017_07_02_174545_create_job_families_table', 1),
(7, '2017_07_02_174556_create_departments_table', 1),
(8, '2017_07_02_174606_create_units_table', 1),
(9, '2017_07_02_174621_create_sections_table', 1),
(10, '2017_07_02_174633_create_struktur_organisasis_table', 1),
(11, '2017_07_02_174646_create_level_positions_table', 1),
(12, '2017_07_02_174657_create_employees_table', 1),
(13, '2017_07_02_174708_create_modules_table', 1),
(14, '2017_07_02_174720_create_trainings_table', 1),
(15, '2017_07_02_174731_create_section_training_types_table', 1),
(16, '2017_07_02_174742_create_section_trainings_table', 1),
(17, '2017_07_02_174753_create_trainer_trainings_table', 1),
(18, '2017_07_02_174806_create_trainee_trainings_table', 1),
(19, '2017_07_02_174815_create_tests_table', 1),
(20, '2017_07_02_174839_create_questions_table', 1),
(21, '2017_07_02_174850_create_opsi_jawabans_table', 1),
(22, '2017_07_02_174903_create_jawaban_trainees_table', 1),
(23, '2017_07_02_174916_create_user_tests_table', 1),
(24, '2017_07_02_174927_create_activity_logs_table', 1),
(25, '2017_07_02_174938_create_score_summaries_table', 1),
(26, '2017_07_02_174950_create_user_training_auths_table', 1),
(27, '2017_07_02_175001_create_content_learnings_table', 1),
(28, '2017_07_02_175015_create_forums_table', 1),
(29, '2017_07_02_175028_create_replies_table', 1),
(30, '2017_07_02_175039_create_content_sliders_table', 1),
(31, '2017_07_02_201021_create_beritas_table', 1),
(32, '2017_07_02_201316_create_news_replies_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `short_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `short_name`, `nama`, `description`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Induction Training', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.', '2017-07-04 09:02:15', '2017-07-04 09:02:15'),
(2, NULL, 'Mandatory Training', 'Ada banyak variasi tulisan Lorem Ipsum yang tersedia, tapi kebanyakan sudah mengalami perubahan bentuk, entah karena unsur humor atau kalimat yang diacak hingga nampak sangat tidak masuk akal. Jika anda ingin menggunakan tulisan Lorem Ipsum, anda harus yakin tidak ada bagian yang memalukan yang tersembunyi di tengah naskah tersebut. Semua generator Lorem Ipsum di internet cenderung untuk mengulang bagian-bagian tertentu. Karena itu inilah generator pertama yang sebenarnya di internet. Ia menggunakan kamus perbendaharaan yang terdiri dari 200 kata Latin, yang digabung dengan banyak contoh struktur kalimat untuk menghasilkan Lorem Ipsun yang nampak masuk akal. Karena itu Lorem Ipsun yang dihasilkan akan selalu bebas dari pengulangan, unsur humor yang sengaja dimasukkan, kata yang tidak sesuai dengan karakteristiknya dan lain sebagainya.', '2017-07-04 09:19:32', '2017-07-04 09:19:32'),
(3, NULL, 'Functional Training', 'Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti \"Bagian isi disini, bagian isi disini\", sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat \"Lorem Ipsum\" akan berujung pada banyak situs web yang masih dalam tahap pengembangan. Berbagai versi juga telah berubah dari tahun', '2017-07-04 11:47:35', '2017-07-04 11:47:35'),
(4, NULL, 'Supporting Training', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid igitur, inquit, eos responsuros putas? Quamvis enim depravatae non sint, pravae tamen esse possunt. Ab his oratores, ab his imperatores ac rerum publicarum principes extiterunt. Eam tum adesse, cum dolor omnis absit; Duo Reges: constructio interrete. Quis enim potest ea, quae probabilia videantur ei, non probare?\r\n\r\nAn tu me de L. Sic enim maiores nostri labores non fugiendos tristissimo tamen verbo aerumnas etiam in deo nominaverunt. Quid enim possumus hoc agere divinius? Idemne potest esse dies saepius, qui semel fuit?', '2017-07-17 18:46:51', '2017-07-17 18:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `news_replies`
--

CREATE TABLE `news_replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_news` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_replies`
--

INSERT INTO `news_replies` (`id`, `id_user`, `id_news`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 12, 1, '[RE:] Human Capital participation in Job Fair and Career Expo', 'Kamu.... iya kamuu', '2017-07-19 08:17:15', '2017-07-19 08:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `opsi_jawabans`
--

CREATE TABLE `opsi_jawabans` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_question` int(10) UNSIGNED NOT NULL,
  `isi_opsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_true` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opsi_jawabans`
--

INSERT INTO `opsi_jawabans` (`id`, `id_question`, `isi_opsi`, `is_true`, `created_at`, `updated_at`) VALUES
(1, 1, '2', 1, '2017-07-18 07:37:18', '2017-07-18 07:37:18'),
(2, 1, '3', 0, '2017-07-18 07:37:18', '2017-07-18 07:37:18'),
(3, 1, '4', 0, '2017-07-18 07:37:18', '2017-07-18 07:37:18'),
(4, 1, '5', 0, '2017-07-18 07:37:18', '2017-07-18 07:37:18'),
(5, 2, '6', 0, '2017-07-18 07:37:48', '2017-07-18 07:37:48'),
(6, 2, '4', 0, '2017-07-18 07:37:48', '2017-07-18 07:37:48'),
(7, 2, '5', 1, '2017-07-18 07:37:48', '2017-07-18 07:37:48'),
(8, 2, '1', 0, '2017-07-18 07:37:48', '2017-07-18 07:37:48'),
(9, 3, '5', 0, '2017-07-18 07:38:19', '2017-07-18 07:38:19'),
(10, 3, '6', 0, '2017-07-18 07:38:20', '2017-07-18 07:38:20'),
(11, 3, '7', 0, '2017-07-18 07:38:20', '2017-07-18 07:38:20'),
(12, 3, '8', 1, '2017-07-18 07:38:20', '2017-07-18 07:38:20'),
(13, 4, '6', 1, '2017-07-18 07:42:08', '2017-07-18 07:42:08'),
(14, 4, '7', 0, '2017-07-18 07:42:08', '2017-07-18 07:42:08'),
(15, 4, '8', 0, '2017-07-18 07:42:08', '2017-07-18 07:42:08'),
(16, 5, '6', 0, '2017-07-18 07:43:32', '2017-07-18 07:43:32'),
(17, 5, '4', 1, '2017-07-18 07:43:32', '2017-07-18 07:43:32'),
(18, 6, '5', 1, '2017-07-18 07:47:09', '2017-07-18 07:47:09'),
(19, 6, '1', 0, '2017-07-18 07:47:09', '2017-07-18 07:47:09'),
(20, 6, '2', 0, '2017-07-18 07:47:09', '2017-07-18 07:47:09'),
(21, 7, '5', 0, '2017-07-18 07:47:39', '2017-07-18 07:47:39'),
(22, 7, '3', 0, '2017-07-18 07:47:39', '2017-07-18 07:47:39'),
(23, 7, '1', 1, '2017-07-18 07:47:39', '2017-07-18 07:47:39'),
(24, 8, 'Bintang Kejora', 0, '2017-07-19 07:41:47', '2017-07-19 07:41:47'),
(25, 8, 'Bintang Buana', 0, '2017-07-19 07:41:47', '2017-07-19 07:41:47'),
(26, 8, 'Kamu', 1, '2017-07-19 07:41:47', '2017-07-19 07:41:47'),
(27, 9, 'Kenangan', 0, '2017-07-19 07:47:18', '2017-07-19 07:47:18'),
(28, 9, 'Kamu', 1, '2017-07-19 07:47:19', '2017-07-19 07:47:19'),
(29, 10, 'Matahari', 1, '2017-07-19 07:49:24', '2017-07-19 07:49:24'),
(30, 10, 'Bintang', 0, '2017-07-19 07:49:24', '2017-07-19 07:49:24'),
(31, 10, 'Kamu', 0, '2017-07-19 07:49:24', '2017-07-19 07:49:24'),
(32, 11, '1', 1, '2017-07-19 07:50:04', '2017-07-19 07:50:04'),
(33, 11, '3', 0, '2017-07-19 07:50:04', '2017-07-19 07:50:04'),
(34, 11, '2', 0, '2017-07-19 07:50:04', '2017-07-19 07:50:04'),
(35, 12, 'Matahari', 0, '2017-07-20 11:42:17', '2017-07-20 11:42:17'),
(36, 12, 'Bulan', 0, '2017-07-20 11:42:18', '2017-07-20 11:42:18'),
(37, 12, 'Kamuuu', 1, '2017-07-20 11:42:18', '2017-07-20 11:42:18'),
(38, 13, '1', 0, '2017-07-20 11:43:50', '2017-07-20 11:43:50'),
(39, 13, '3', 0, '2017-07-20 11:43:51', '2017-07-20 11:43:51'),
(40, 13, '2', 1, '2017-07-20 11:43:51', '2017-07-20 11:43:51'),
(41, 14, '4', 0, '2017-07-20 11:44:16', '2017-07-20 11:44:16'),
(42, 14, '3', 0, '2017-07-20 11:44:16', '2017-07-20 11:44:16'),
(43, 14, '2', 1, '2017-07-20 11:44:16', '2017-07-20 11:44:16'),
(44, 15, '3', 0, '2017-07-20 14:07:32', '2017-07-20 14:07:32'),
(45, 15, '4', 0, '2017-07-20 14:07:32', '2017-07-20 14:07:32'),
(46, 15, '2', 1, '2017-07-20 14:07:32', '2017-07-20 14:07:32'),
(47, 16, '3', 1, '2017-07-20 14:10:13', '2017-07-20 14:10:13'),
(48, 16, '4', 0, '2017-07-20 14:10:13', '2017-07-20 14:10:13'),
(49, 16, '2', 0, '2017-07-20 14:10:13', '2017-07-20 14:10:13'),
(50, 17, '1', 1, '2017-07-20 14:10:35', '2017-07-20 14:10:35'),
(51, 17, '2', 0, '2017-07-20 14:10:35', '2017-07-20 14:10:35'),
(52, 17, '3', 0, '2017-07-20 14:10:35', '2017-07-20 14:10:35'),
(53, 18, '0', 1, '2017-07-21 07:26:09', '2017-07-21 07:26:09'),
(54, 18, '2', 0, '2017-07-21 07:26:09', '2017-07-21 07:26:09'),
(55, 18, '21', 0, '2017-07-21 07:26:09', '2017-07-21 07:26:09'),
(56, 19, '1', 0, '2017-07-21 07:26:40', '2017-07-21 07:26:40'),
(57, 19, '2', 0, '2017-07-21 07:26:40', '2017-07-21 07:26:40'),
(58, 19, '3', 0, '2017-07-21 07:26:40', '2017-07-21 07:26:40'),
(59, 19, '0', 1, '2017-07-21 07:26:40', '2017-07-21 07:26:40'),
(60, 20, '5', 0, '2017-07-21 07:29:07', '2017-07-21 07:29:07'),
(61, 20, '3', 0, '2017-07-21 07:29:07', '2017-07-21 07:29:07'),
(62, 20, '1', 1, '2017-07-21 07:29:07', '2017-07-21 07:29:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personnels`
--

CREATE TABLE `personnels` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personnels`
--

INSERT INTO `personnels` (`id`, `id_user`, `fname`, `lname`, `jenis_kelamin`, `email`, `alamat`, `no_hp`, `photo`, `tanggal_lahir`, `created_at`, `updated_at`) VALUES
(4, 12, 'Lutpii', 'Cupu', 1, 'admin@admin.com', 'Jl Kepodang V Jakarta Selatan', '098678921', NULL, '1990-02-06', NULL, NULL),
(5, 13, 'Hans', 'Dono', 1, 'hans@hans.com', 'Jln Kadus V Jakarta Utara', '0987654321', NULL, '1995-07-20', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_test` int(10) UNSIGNED NOT NULL,
  `no_soal` int(11) DEFAULT NULL,
  `pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skor_maks` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `id_test`, `no_soal`, `pertanyaan`, `skor_maks`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '1 + 1 = ....', NULL, '2017-07-18 14:37:18', '2017-07-18 14:37:18'),
(2, 1, NULL, '2 + 3 = ...', NULL, '2017-07-18 14:37:48', '2017-07-18 14:37:48'),
(3, 1, NULL, '4 + 4 = ...', NULL, '2017-07-18 14:38:19', '2017-07-18 14:38:19'),
(4, 1, NULL, '5 + 1 = ....', NULL, '2017-07-18 14:42:08', '2017-07-18 14:42:08'),
(5, 1, NULL, '5 - 1 = ....', NULL, '2017-07-18 14:43:32', '2017-07-18 14:43:32'),
(6, 2, NULL, '2 + 3 = ...', NULL, '2017-07-18 14:47:09', '2017-07-18 14:47:09'),
(7, 2, NULL, '5 - 4 = ...', NULL, '2017-07-18 14:47:39', '2017-07-18 14:47:39'),
(8, 3, NULL, 'Sebutkan nama bintang yang bersinar terang ...', NULL, '2017-07-19 14:41:47', '2017-07-19 14:41:47'),
(9, 3, NULL, 'Ada sesuatu yang tak bisa dilupakan manusia, yaitu ...', NULL, '2017-07-19 14:47:18', '2017-07-19 14:47:18'),
(10, 5, NULL, 'Dunia bisa terang karena ....  selalu bersinar', NULL, '2017-07-19 14:49:24', '2017-07-19 14:49:24'),
(11, 5, NULL, '1+ 1 = ...', NULL, '2017-07-19 14:50:04', '2017-07-19 14:50:04'),
(12, 6, NULL, 'Dibawah ini manakah yang bersinar paling terang ?', NULL, '2017-07-20 18:42:17', '2017-07-20 18:42:17'),
(13, 7, NULL, '1 + 1 = ...', NULL, '2017-07-20 18:43:50', '2017-07-20 18:43:50'),
(14, 7, NULL, '3 + 3 = ...', NULL, '2017-07-20 18:44:16', '2017-07-20 18:44:16'),
(15, 8, NULL, '1+1 = ...', NULL, '2017-07-20 21:07:32', '2017-07-20 21:07:32'),
(16, 9, NULL, '1 + 1 = ..', NULL, '2017-07-20 21:10:13', '2017-07-20 21:10:13'),
(17, 9, NULL, '2 + 2 ...', NULL, '2017-07-20 21:10:35', '2017-07-20 21:10:35'),
(18, 10, NULL, '22 - 1', NULL, '2017-07-21 14:26:09', '2017-07-21 14:26:09'),
(19, 10, NULL, '2 - 2', NULL, '2017-07-21 14:26:40', '2017-07-21 14:26:40'),
(20, 11, NULL, '2 - 1 = ..', NULL, '2017-07-21 14:29:07', '2017-07-21 14:29:07');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_forum` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `id_user`, `id_forum`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 13, 2, '[RE:] Forum Job Family saya', 'Haha in aja', '2017-07-20 08:04:39', '2017-07-20 08:04:39'),
(2, 12, 1, '[RE:] Forum Pertama Saya', 'Aku ganteng', '2017-07-20 08:29:41', '2017-07-20 08:29:41');

-- --------------------------------------------------------

--
-- Table structure for table `score_summaries`
--

CREATE TABLE `score_summaries` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `file_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_file_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `score_summaries`
--

INSERT INTO `score_summaries` (`id`, `id_user`, `file_name`, `url_file_pdf`, `created_at`, `updated_at`) VALUES
(1, 12, 'cv.pdf', 'ViewerJS/#..home.html/cv.pdf', '2017-07-20 11:31:54', '2017-07-20 11:31:54'),
(2, 12, 'transkrip.pdf', 'ViewerJS/#..home.html/transkrip.pdf', '2017-07-20 13:52:47', '2017-07-20 13:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id_section` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id_section`, `nama_section`, `created_at`, `updated_at`) VALUES
('S001', 'Assembly GA', '2017-07-11 15:29:12', '2017-07-11 15:29:12'),
('S002', 'Handling GA', '2017-07-11 15:30:00', '2017-07-11 15:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `section_trainings`
--

CREATE TABLE `section_trainings` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_training` int(10) UNSIGNED NOT NULL,
  `id_type` int(10) UNSIGNED NOT NULL,
  `sequence` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_trainings`
--

INSERT INTO `section_trainings` (`id`, `id_training`, `id_type`, `sequence`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, '2017-07-18 14:35:50', '2017-07-18 14:35:50'),
(2, 1, 2, NULL, '2017-07-18 14:38:30', '2017-07-18 14:38:30'),
(3, 1, 3, NULL, '2017-07-18 14:46:33', '2017-07-18 14:46:33'),
(4, 2, 1, NULL, '2017-07-19 14:40:43', '2017-07-19 14:40:43'),
(5, 2, 2, NULL, '2017-07-19 14:41:53', '2017-07-19 14:41:53'),
(6, 2, 1, NULL, '2017-07-19 14:47:23', '2017-07-19 14:47:23'),
(7, 2, 3, NULL, '2017-07-19 14:48:08', '2017-07-19 14:48:08'),
(8, 3, 1, NULL, '2017-07-20 18:39:54', '2017-07-20 18:39:54'),
(9, 3, 2, NULL, '2017-07-20 18:42:38', '2017-07-20 18:42:38'),
(10, 3, 3, NULL, '2017-07-20 18:43:24', '2017-07-20 18:43:24'),
(11, 4, 1, NULL, '2017-07-20 21:06:35', '2017-07-20 21:06:35'),
(12, 4, 2, NULL, '2017-07-20 21:08:56', '2017-07-20 21:08:56'),
(13, 4, 3, NULL, '2017-07-20 21:09:53', '2017-07-20 21:09:53'),
(14, 5, 1, NULL, '2017-07-21 14:24:04', '2017-07-21 14:24:04'),
(15, 5, 2, NULL, '2017-07-21 14:28:08', '2017-07-21 14:28:08'),
(16, 5, 3, NULL, '2017-07-21 14:28:39', '2017-07-21 14:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `section_training_types`
--

CREATE TABLE `section_training_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_training_types`
--

INSERT INTO `section_training_types` (`id`, `nama`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Pre-Test', NULL, '2017-07-06 18:37:39', '2017-07-06 18:37:39'),
(2, 'Modul', NULL, '2017-07-06 18:37:39', '2017-07-06 18:37:39'),
(3, 'Post-Test', NULL, '2017-07-06 18:37:39', '2017-07-06 18:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasis`
--

CREATE TABLE `struktur_organisasis` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_divisi` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_department` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_unit` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_section` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `struktur_organisasis`
--

INSERT INTO `struktur_organisasis` (`id`, `id_divisi`, `id_department`, `id_unit`, `id_section`, `created_at`, `updated_at`) VALUES
(1, NULL, 'A123', NULL, NULL, NULL, NULL),
(2, NULL, 'B123', NULL, NULL, NULL, NULL),
(3, 'D002', 'B123', NULL, NULL, NULL, NULL),
(4, 'D003', 'A123', NULL, 'S002', NULL, NULL),
(5, 'D002', 'B123', 'U001', NULL, NULL, NULL),
(6, 'D004', 'B123', NULL, NULL, NULL, NULL),
(7, 'D003', 'A123', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_section_training` int(10) UNSIGNED NOT NULL,
  `time` int(11) DEFAULT NULL,
  `jumlah_soal` int(11) DEFAULT NULL,
  `attemp` int(11) DEFAULT NULL,
  `question_per_page` int(11) DEFAULT NULL,
  `publised` int(11) DEFAULT NULL,
  `min_score` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `id_section_training`, `time`, `jumlah_soal`, `attemp`, `question_per_page`, `publised`, `min_score`, `created_at`, `updated_at`) VALUES
(1, 1, 60, 5, 1, NULL, 1, NULL, '2017-07-18 14:35:50', '2017-07-18 07:43:32'),
(2, 3, 30, 2, 1, NULL, 1, NULL, '2017-07-18 14:46:33', '2017-07-18 07:47:39'),
(3, 4, 30, 2, 1, NULL, 1, NULL, '2017-07-19 14:40:44', '2017-07-19 07:47:19'),
(4, 6, 30, 0, 1, NULL, 1, NULL, '2017-07-19 14:47:23', '2017-07-19 14:47:23'),
(5, 7, 20, 2, 1, NULL, 1, NULL, '2017-07-19 14:48:08', '2017-07-19 07:50:04'),
(6, 8, 20, 1, 1, NULL, 1, NULL, '2017-07-20 18:39:54', '2017-07-20 11:42:18'),
(7, 10, 20, 2, 1, NULL, 1, NULL, '2017-07-20 18:43:24', '2017-07-20 11:44:16'),
(8, 11, 20, 1, 1, NULL, 1, NULL, '2017-07-20 21:06:36', '2017-07-20 14:07:32'),
(9, 13, 10, 2, 1, NULL, 1, NULL, '2017-07-20 21:09:53', '2017-07-20 14:10:35'),
(10, 14, 20, 2, 1, NULL, 1, NULL, '2017-07-21 14:24:04', '2017-07-21 07:26:40'),
(11, 16, 12, 1, 1, NULL, 1, NULL, '2017-07-21 14:28:39', '2017-07-21 07:29:07');

-- --------------------------------------------------------

--
-- Table structure for table `trainee_trainings`
--

CREATE TABLE `trainee_trainings` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_training` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainer_trainings`
--

CREATE TABLE `trainer_trainings` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_training` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `id_module` int(10) UNSIGNED NOT NULL,
  `enroll_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_job_family` int(10) UNSIGNED DEFAULT NULL,
  `id_department` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_publish` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `title`, `description`, `id_module`, `enroll_key`, `id_job_family`, `id_department`, `is_publish`, `created_at`, `updated_at`) VALUES
(1, 'Induction Training', 'Lorem ipsum dolor sit amet, ea duo quidam appetere, labores dolorem albucius mei te, decore verear prompta te vix. Vim vocent senserit et, in has reformidans ullamcorper. Minimum iracundia his an. Nam ea ridens debitis.\r\n\r\nVix te nusquam sadipscing, nam natum minimum reprimique te. Ad munere iracundia sit, cibo vidisse pertinax nec eu. Ei impetus percipitur ius. Mea ex intellegat voluptaria. Noluisse postulant cu duo, te fastidii oportere gloriatur vel.\r\n\r\nPorro officiis pro cu, id sumo dissentiet per. Doctus dissentiet ad mel, paulo appellantur an eos. Ea mei latine sententiae. In cibo apeirian dissentiunt has. Duo ei equidem fierent consectetuer, qui esse commune apeirian cu, purto virtute pri ad. Primis omnesque vim ne.', 1, NULL, NULL, 'A123', 1, NULL, '2017-07-20 12:25:05'),
(2, 'Training Procurement', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembara', 3, NULL, 3, 'B123', 0, NULL, NULL),
(3, 'Mandatory Training 2017', 'Lorem ipsum', 2, NULL, NULL, 'A123', 0, NULL, NULL),
(4, 'Training Satu', 'Description', 3, NULL, 3, 'B123', 1, NULL, '2017-07-20 14:11:27'),
(5, '124 Training', 'Trainings Kuh', 1, NULL, NULL, 'A123', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id_unit` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id_unit`, `nama_unit`, `created_at`, `updated_at`) VALUES
('U001', 'ACS Cengkareng', '2017-07-11 15:27:35', '2017-07-11 15:27:35'),
('U002', 'ACS Surabaya', '2017-07-11 15:27:35', '2017-07-11 15:27:35'),
('U003', 'ACS Yogyakarta', '2017-07-11 15:27:35', '2017-07-11 15:27:35'),
('U004', 'ACS Denpasar', '2017-07-11 15:27:35', '2017-07-11 15:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 'admin', '$2y$10$GAdF0iGenVcTd0LgXJehH.8wP1xUZs2TiXaWcgIlPf2dUKGf26Elq', 1, 'kUI3aT5ZGbWZvaQ6l2NUP5ef8k0g6k48WZwuvICHnjYDNBcaIWtQwHRyXZKD', NULL, NULL),
(13, '123123', '$2y$10$ck4hjTa71twXhheQ/4K9b.gOj9cTkSYXwAL4PGKnYIlrgQX5N./Fy', 0, 'F3ZY3rnqNtBFfcXuxCGJSgTH4xgp1QHL5CzPXNpDdWIapHsOnHvbY1Eyj4ZF', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_tests`
--

CREATE TABLE `user_tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_training` int(11) NOT NULL,
  `id_pre_test` int(10) UNSIGNED NOT NULL,
  `id_post_test` int(10) UNSIGNED DEFAULT NULL,
  `pre_test_score` int(11) DEFAULT NULL,
  `post_test_score` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user_tests`
--

INSERT INTO `user_tests` (`id`, `id_user`, `id_training`, `id_pre_test`, `id_post_test`, `pre_test_score`, `post_test_score`, `created_at`, `updated_at`) VALUES
(1, 13, 1, 1, 2, 40, 100, '2017-07-18 07:51:02', '2017-07-18 07:58:12');

-- --------------------------------------------------------

--
-- Table structure for table `user_training_auths`
--

CREATE TABLE `user_training_auths` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_training` int(10) UNSIGNED NOT NULL,
  `auth` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_training_auths`
--

INSERT INTO `user_training_auths` (`id`, `id_user`, `id_training`, `auth`, `created_at`, `updated_at`) VALUES
(7, 13, 2, 0, '2017-07-19 08:34:29', '2017-07-19 08:34:29'),
(8, 13, 4, 1, '2017-07-20 14:14:25', '2017-07-20 14:14:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_logs_id_user_foreign` (`id_user`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beritas_id_user_foreign` (`id_user`);

--
-- Indexes for table `content_learnings`
--
ALTER TABLE `content_learnings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_learnings_id_section_foreign` (`id_section`);

--
-- Indexes for table `content_sliders`
--
ALTER TABLE `content_sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_sliders_id_forum_foreign` (`id_forum`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id_department`),
  ADD KEY `departments_id_job_family_foreign` (`id_job_family`);

--
-- Indexes for table `divisis`
--
ALTER TABLE `divisis`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_id_personnel_foreign` (`id_personnel`),
  ADD KEY `employees_struktur_foreign` (`struktur`),
  ADD KEY `employees_level_position_foreign` (`level_position`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forums_id_user_foreign` (`id_user`);

--
-- Indexes for table `jawaban_trainees`
--
ALTER TABLE `jawaban_trainees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawaban_trainees_id_question_foreign` (`id_question`),
  ADD KEY `jawaban_trainees_isi_jawaban_foreign` (`isi_jawaban`);

--
-- Indexes for table `job_families`
--
ALTER TABLE `job_families`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level_positions`
--
ALTER TABLE `level_positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_replies`
--
ALTER TABLE `news_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_replies_id_user_foreign` (`id_user`),
  ADD KEY `news_replies_id_news_foreign` (`id_news`);

--
-- Indexes for table `opsi_jawabans`
--
ALTER TABLE `opsi_jawabans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `opsi_jawabans_id_question_foreign` (`id_question`);

--
-- Indexes for table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personnels_id_user_foreign` (`id_user`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_id_test_foreign` (`id_test`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replies_id_user_foreign` (`id_user`),
  ADD KEY `replies_id_forum_foreign` (`id_forum`);

--
-- Indexes for table `score_summaries`
--
ALTER TABLE `score_summaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `score_summaries_id_user_foreign` (`id_user`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id_section`);

--
-- Indexes for table `section_trainings`
--
ALTER TABLE `section_trainings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_trainings_id_training_foreign` (`id_training`),
  ADD KEY `section_trainings_id_type_foreign` (`id_type`);

--
-- Indexes for table `section_training_types`
--
ALTER TABLE `section_training_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur_organisasis`
--
ALTER TABLE `struktur_organisasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `struktur_organisasis_id_divisi_foreign` (`id_divisi`),
  ADD KEY `struktur_organisasis_id_department_foreign` (`id_department`),
  ADD KEY `struktur_organisasis_id_unit_foreign` (`id_unit`),
  ADD KEY `struktur_organisasis_id_section_foreign` (`id_section`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tests_id_section_training_foreign` (`id_section_training`);

--
-- Indexes for table `trainee_trainings`
--
ALTER TABLE `trainee_trainings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trainee_trainings_id_user_foreign` (`id_user`),
  ADD KEY `trainee_trainings_id_training_foreign` (`id_training`);

--
-- Indexes for table `trainer_trainings`
--
ALTER TABLE `trainer_trainings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trainer_trainings_id_user_foreign` (`id_user`),
  ADD KEY `trainer_trainings_id_training_foreign` (`id_training`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trainings_id_module_foreign` (`id_module`),
  ADD KEY `trainings_id_job_family_foreign` (`id_job_family`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tests`
--
ALTER TABLE `user_tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_tests_id_pre_test_foreign` (`id_pre_test`),
  ADD KEY `user_tests_id_post_test_foreign` (`id_post_test`),
  ADD KEY `user_tests_id_user_foreign` (`id_user`);

--
-- Indexes for table `user_training_auths`
--
ALTER TABLE `user_training_auths`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_training_auths_id_user_foreign` (`id_user`),
  ADD KEY `user_training_auths_id_training_foreign` (`id_training`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `content_learnings`
--
ALTER TABLE `content_learnings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `content_sliders`
--
ALTER TABLE `content_sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jawaban_trainees`
--
ALTER TABLE `jawaban_trainees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `job_families`
--
ALTER TABLE `job_families`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `level_positions`
--
ALTER TABLE `level_positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news_replies`
--
ALTER TABLE `news_replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `opsi_jawabans`
--
ALTER TABLE `opsi_jawabans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `score_summaries`
--
ALTER TABLE `score_summaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `section_trainings`
--
ALTER TABLE `section_trainings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `section_training_types`
--
ALTER TABLE `section_training_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `struktur_organisasis`
--
ALTER TABLE `struktur_organisasis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `trainee_trainings`
--
ALTER TABLE `trainee_trainings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trainer_trainings`
--
ALTER TABLE `trainer_trainings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user_tests`
--
ALTER TABLE `user_tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_training_auths`
--
ALTER TABLE `user_training_auths`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD CONSTRAINT `activity_logs_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `beritas`
--
ALTER TABLE `beritas`
  ADD CONSTRAINT `beritas_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `content_learnings`
--
ALTER TABLE `content_learnings`
  ADD CONSTRAINT `content_learnings_id_section_foreign` FOREIGN KEY (`id_section`) REFERENCES `section_trainings` (`id`);

--
-- Constraints for table `content_sliders`
--
ALTER TABLE `content_sliders`
  ADD CONSTRAINT `content_sliders_id_forum_foreign` FOREIGN KEY (`id_forum`) REFERENCES `forums` (`id`);

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_id_job_family_foreign` FOREIGN KEY (`id_job_family`) REFERENCES `job_families` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_id_personnel_foreign` FOREIGN KEY (`id_personnel`) REFERENCES `personnels` (`id`),
  ADD CONSTRAINT `employees_level_position_foreign` FOREIGN KEY (`level_position`) REFERENCES `level_positions` (`id`),
  ADD CONSTRAINT `employees_struktur_foreign` FOREIGN KEY (`struktur`) REFERENCES `struktur_organisasis` (`id`);

--
-- Constraints for table `forums`
--
ALTER TABLE `forums`
  ADD CONSTRAINT `forums_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `jawaban_trainees`
--
ALTER TABLE `jawaban_trainees`
  ADD CONSTRAINT `jawaban_trainees_id_question_foreign` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id`),
  ADD CONSTRAINT `jawaban_trainees_isi_jawaban_foreign` FOREIGN KEY (`isi_jawaban`) REFERENCES `opsi_jawabans` (`id`);

--
-- Constraints for table `news_replies`
--
ALTER TABLE `news_replies`
  ADD CONSTRAINT `news_replies_id_news_foreign` FOREIGN KEY (`id_news`) REFERENCES `beritas` (`id`),
  ADD CONSTRAINT `news_replies_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `opsi_jawabans`
--
ALTER TABLE `opsi_jawabans`
  ADD CONSTRAINT `opsi_jawabans_id_question_foreign` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id`);

--
-- Constraints for table `personnels`
--
ALTER TABLE `personnels`
  ADD CONSTRAINT `personnels_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_id_test_foreign` FOREIGN KEY (`id_test`) REFERENCES `tests` (`id`);

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_id_forum_foreign` FOREIGN KEY (`id_forum`) REFERENCES `forums` (`id`),
  ADD CONSTRAINT `replies_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `score_summaries`
--
ALTER TABLE `score_summaries`
  ADD CONSTRAINT `score_summaries_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `section_trainings`
--
ALTER TABLE `section_trainings`
  ADD CONSTRAINT `section_trainings_id_training_foreign` FOREIGN KEY (`id_training`) REFERENCES `trainings` (`id`),
  ADD CONSTRAINT `section_trainings_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `section_training_types` (`id`);

--
-- Constraints for table `struktur_organisasis`
--
ALTER TABLE `struktur_organisasis`
  ADD CONSTRAINT `struktur_organisasis_id_department_foreign` FOREIGN KEY (`id_department`) REFERENCES `departments` (`id_department`),
  ADD CONSTRAINT `struktur_organisasis_id_divisi_foreign` FOREIGN KEY (`id_divisi`) REFERENCES `divisis` (`id_divisi`),
  ADD CONSTRAINT `struktur_organisasis_id_section_foreign` FOREIGN KEY (`id_section`) REFERENCES `sections` (`id_section`),
  ADD CONSTRAINT `struktur_organisasis_id_unit_foreign` FOREIGN KEY (`id_unit`) REFERENCES `units` (`id_unit`);

--
-- Constraints for table `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `tests_id_section_training_foreign` FOREIGN KEY (`id_section_training`) REFERENCES `section_trainings` (`id`);

--
-- Constraints for table `trainee_trainings`
--
ALTER TABLE `trainee_trainings`
  ADD CONSTRAINT `trainee_trainings_id_training_foreign` FOREIGN KEY (`id_training`) REFERENCES `trainings` (`id`),
  ADD CONSTRAINT `trainee_trainings_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `trainer_trainings`
--
ALTER TABLE `trainer_trainings`
  ADD CONSTRAINT `trainer_trainings_id_training_foreign` FOREIGN KEY (`id_training`) REFERENCES `trainings` (`id`),
  ADD CONSTRAINT `trainer_trainings_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `trainings`
--
ALTER TABLE `trainings`
  ADD CONSTRAINT `trainings_id_job_family_foreign` FOREIGN KEY (`id_job_family`) REFERENCES `job_families` (`id`),
  ADD CONSTRAINT `trainings_id_module_foreign` FOREIGN KEY (`id_module`) REFERENCES `modules` (`id`);

--
-- Constraints for table `user_tests`
--
ALTER TABLE `user_tests`
  ADD CONSTRAINT `user_tests_id_post_test_foreign` FOREIGN KEY (`id_post_test`) REFERENCES `tests` (`id`),
  ADD CONSTRAINT `user_tests_id_pre_test_foreign` FOREIGN KEY (`id_pre_test`) REFERENCES `tests` (`id`),
  ADD CONSTRAINT `user_tests_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_training_auths`
--
ALTER TABLE `user_training_auths`
  ADD CONSTRAINT `user_training_auths_id_training_foreign` FOREIGN KEY (`id_training`) REFERENCES `trainings` (`id`),
  ADD CONSTRAINT `user_training_auths_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
