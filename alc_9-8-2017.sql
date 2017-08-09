-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2017 at 09:40 PM
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
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `id_user`, `can_reply`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 12, 1, 'Human Capital participation in Job Fair and Career Expo', 'May 30th, 2017 – Human Capital Division of Aerofood ACS conducted open recruitment by participating the 11th International Tourism And Hospitality Grand Recuitment 2017 event held at Sekolah Tinggi Pariwisata NHI Bandung from 23rd – 24th of May 2017. The purpose of the event is to recruit qualified candidates for company’s human resource regeneration. Hundreds of candidates applied to join Aerofood ACS during this two day event.\r\n\r\nDespite Aerofood ACS, other companies such as airlines, property, tour and travel companies also joined the event. STP NHI is well – known as an education institution expert and excellent in providing quality education for its students. This was the second event participated by Aerofood ACS. Previously, Aerofood ACS participated in Indonesia Career Expo 2017 in Balai Kartini, Jakarta from the 5th – 6th of April 2017.\r\n\r\nHuman resource is important element and asset in a company’s business. The availability and good quality of human resource are necessary for Aerofood ACS to ensure the company’s business run accordingly to achieve company’s mission and vision.', 'uploads/wolu.png', '2017-07-19 06:07:42', '2017-07-19 06:07:42'),
(2, 12, 1, 'Headline News', 'Apa aja dehhhh', NULL, '2017-07-31 08:56:04', '2017-07-31 08:56:04');

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
(2, NULL, 1, 'Apakah Lorem Ipsum itu?', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.', NULL, '2017-07-05 12:47:13', '2017-07-05 12:47:13'),
(3, NULL, 1, 'abcadasdsad', 'xjsfas sadasda sdsad asd as dsa d sad sad sad sad sad as dsa dsa dsa d sadasd asd asd sad sad sad', 'uploads/clouds-png-22.png', '2017-07-30 07:25:47', '2017-07-30 07:28:17'),
(4, NULL, 1, 'dfqd dqwd qwdqwd qw d', 'hU SADASD fwef fwef ew f ewfusdcj fwhfbdsajcuyd fuefa dandbiadiasjn disdncsdbci csdcj', 'uploads/user.png', '2017-07-30 07:26:24', '2017-07-30 07:28:23'),
(5, NULL, 0, 'we fwefiwf wef few fw e iwebfwef', 'kndsda w dasdasjd sadue fa duad ascbasc ascsdcjz x zxuca uewgfsd zxuc', 'uploads/ikemasui.png', '2017-07-30 07:27:07', '2017-07-30 07:27:07'),
(6, NULL, 1, 'obo dasidvia adjasd', 'hf9ws cdscskdc 93 dscsai2easdsao dasdbaus 4bsdv sjsan 40 sdckhsa akadbowdgdc jkdscs iad adbn ascasncias dw', 'uploads/student2.jpg', '2017-07-30 07:28:10', '2017-07-30 07:28:28');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id_department` int(11) NOT NULL,
  `nama_departmen` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id_department`, `nama_departmen`, `created_at`, `updated_at`) VALUES
(1, 'Quality & HSE', '2017-08-01 22:40:26', '2017-08-01 22:40:26'),
(2, 'Security', '2017-08-01 22:41:57', '2017-08-01 22:41:57'),
(3, 'Operation GA', '2017-08-01 22:41:58', '2017-08-01 22:41:58');

-- --------------------------------------------------------

--
-- Table structure for table `divisis`
--

CREATE TABLE `divisis` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisis`
--

INSERT INTO `divisis` (`id_divisi`, `nama_divisi`, `created_at`, `updated_at`) VALUES
(1, 'Inflight', '2017-08-01 22:37:51', '2017-08-01 22:37:51'),
(2, 'Finance', '2017-08-01 22:37:51', '2017-08-01 22:37:51'),
(3, 'Business Process & System Integration', '2017-08-01 22:37:51', '2017-08-01 22:37:51');

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
(1, 13, '44234242', 2, 2, NULL, NULL);

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
(4, NULL, 'Supporting Training', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid igitur, inquit, eos responsuros putas? Quamvis enim depravatae non sint, pravae tamen esse possunt. Ab his oratores, ab his imperatores ac rerum publicarum principes extiterunt. Eam tum adesse, cum dolor omnis absit; Duo Reges: constructio interrete. Quis enim potest ea, quae probabilia videantur ei, non probare?\r\n\r\nAn tu me de L. Sic enim maiores nostri labores non fugiendos tristissimo tamen verbo aerumnas etiam in deo nominaverunt. Quid enim possumus hoc agere divinius? Idemne potest esse dies saepius, qui semel fuit?', '2017-07-17 18:46:51', '2017-07-17 18:46:51'),
(5, NULL, 'Development Training', 'adalah training untuk meningkatkan kemampuan karyawan..  Karyawan harus meminta izin telebih dahulu ketika ingin masuk pada training ini', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_replies`
--

CREATE TABLE `news_replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_news` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_process` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
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
(11, 13, 'don', 'din', 1, 'd@d.d', 'Jl. 123 pagar', '09876246', NULL, '1999-12-12', NULL, NULL),
(12, 12, 'Bon', 'Bin', 1, 'bon@bin.don', 'Jl. Apa aja deh', '0965789', NULL, '1997-12-08', NULL, NULL),
(13, 16, 'qwe', 'rty', 0, 'qw2@TFT.COM', 'Jalan kehidupan yang indah', '7520353', NULL, '2017-07-02', NULL, NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id_section` int(11) NOT NULL,
  `nama_section` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id_section`, `nama_section`, `created_at`, `updated_at`) VALUES
(1, 'Assembly GA', '2017-08-01 22:43:23', '2017-08-01 22:43:23'),
(2, 'Handling GA', '2017-08-01 22:43:24', '2017-08-01 22:43:24');

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
  `id` int(11) NOT NULL,
  `id_divisi` int(11) DEFAULT NULL,
  `id_unit` int(11) DEFAULT NULL,
  `id_department` int(11) DEFAULT NULL,
  `id_section` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `struktur_organisasis`
--

INSERT INTO `struktur_organisasis` (`id`, `id_divisi`, `id_unit`, `id_department`, `id_section`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, NULL, '2017-08-02 07:11:01', '2017-08-02 07:11:01'),
(2, 1, 3, 3, 1, '2017-08-02 07:13:06', '2017-08-02 07:13:06');

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
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id_unit` int(11) NOT NULL,
  `nama_unit` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id_unit`, `nama_unit`, `created_at`, `updated_at`) VALUES
(1, 'ACS Cengkareng', '2017-08-01 22:38:59', '2017-08-01 22:38:59'),
(2, 'ACS Yogyakarta', '2017-08-01 22:38:59', '2017-08-01 22:38:59'),
(3, 'ACS Denpasar', '2017-08-01 22:38:59', '2017-08-01 22:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `is_aktif` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `is_admin`, `is_aktif`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 'admin', '$2y$10$O.k6qROzKNUXPRbXGSf.ce/ZyzCBewN4jfeAO1LQ1.sqT6iAJ4FDi', 1, 1, '9jIHRU8PUusf0tGoxQmUIGT90nSlvLGaBa4zk7DOhhUdqboNIRyjOJilqedY', NULL, '2017-07-31 13:01:07'),
(13, '123123', '$2y$10$ck4hjTa71twXhheQ/4K9b.gOj9cTkSYXwAL4PGKnYIlrgQX5N./Fy', 1, 1, 'A31qc7SJimbn8MFVEScj1DaIykuTsP5mFpEtgkUTT64zAH1LfpoZPp1ZjswZ', NULL, '2017-07-31 13:29:32'),
(14, 'qwerty', '$2y$10$aNtkPUwcNbIgsWFCKi4qIeot0pVXA8RjLZoOJczSJOW37iL3ympuG', 0, 1, NULL, NULL, NULL),
(15, 'qwerty', '$2y$10$TBXTM2jtbLT30Nmo7lk06evJQxJLplupi0NZPhaCES3YrlxssMAeC', 0, 1, NULL, NULL, NULL),
(16, 'qwerty', '$2y$10$mGUNGRZr/jCXubvdXVH4eut.Ppg.2vYYk8.Jm67M0HDc3PG5XGQCS', 0, 1, NULL, NULL, NULL);

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
  ADD PRIMARY KEY (`id_department`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `content_learnings`
--
ALTER TABLE `content_learnings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `content_sliders`
--
ALTER TABLE `content_sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `divisis`
--
ALTER TABLE `divisis`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jawaban_trainees`
--
ALTER TABLE `jawaban_trainees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `news_replies`
--
ALTER TABLE `news_replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `opsi_jawabans`
--
ALTER TABLE `opsi_jawabans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `score_summaries`
--
ALTER TABLE `score_summaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id_section` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `section_trainings`
--
ALTER TABLE `section_trainings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `section_training_types`
--
ALTER TABLE `section_training_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `struktur_organisasis`
--
ALTER TABLE `struktur_organisasis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user_tests`
--
ALTER TABLE `user_tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_training_auths`
--
ALTER TABLE `user_training_auths`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
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
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_id_personnel_foreign` FOREIGN KEY (`id_personnel`) REFERENCES `personnels` (`id`),
  ADD CONSTRAINT `employees_level_position_foreign` FOREIGN KEY (`level_position`) REFERENCES `level_positions` (`id`);

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
