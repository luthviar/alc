-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2017 at 03:43 PM
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
(1, 1, 1, '“Aerofood Way” Training', 'May 24th, 2017 – Aerofood ACS Human Capital Division conducted 2-day training for its internal employees located in Garuda Maintenance Facility from 23rd – 24th of May 2017.  The training was conducted to make all Aerofood ACS employees have same mindset, attitude and behavior according to corporate culture in order to run the corporate business properly. This training is targeted to be applied in every line of business and will become the guidance in acting and doing responsibilities. This training was attended by 57 Aerofood ACS employees from several divisions.  Beside Jakarta, this training similarly was conducted in every unit of Aerofood ACS and facilitated by trained facilitators. The trainers are Managers and Executive Managers and they had passed Spiritual Management Training & Training for Trainers. They are expected to understand spiritual management that has become the core of Aerofood Way and to comprehend how to deliver spiritual management to all teams thus Aerofood ACS employees are encouraged to show gratitude, work sincere and always give their best to their work. Other than that, they are expected to be responsible leader in implementing values and core competencies.  Aerofood Way is a belief system illustrated as a strong building consists of foundation, pillars, wall and top roof as displayed below.', NULL, '2017-07-05 08:22:13', '2017-07-05 08:22:13'),
(2, 1, 0, 'Malaysia Airlines Presented an Award for “Excellent On Time Performance in 2016”', 'Hamburg – Germany, April 6th 2017 Head In Flight Operations of Malaysia Airlines Bhd, Mrs Rahimah Farjan Ali delivered herself the award to Mr Bambang Sujatmiko, The President & CEO Of Aerofood ACS at WTCE 2017. Aerofood ACS for sure will consistently improve its products and services quality from time to time to achieve higher level of customer satisfaction.', NULL, '2017-07-05 08:47:21', '2017-07-05 08:47:21'),
(3, 1, 1, 'Human Capital participation in Job Fair and Career Expo', 'May 30th, 2017 – Human Capital Division of Aerofood ACS conducted open recruitment by participating the 11th International Tourism And Hospitality Grand Recuitment 2017 event held at Sekolah Tinggi Pariwisata NHI Bandung from 23rd – 24th of May 2017. The purpose of the event is to recruit qualified candidates for company’s human resource regeneration. Hundreds of candidates applied to join Aerofood ACS during this two day event.  Despite Aerofood ACS, other companies such as airlines, property, tour and travel companies also joined the event. STP NHI is well – known as an education institution expert and excellent in providing quality education for its students. This was the second event participated by Aerofood ACS. Previously, Aerofood ACS participated in Indonesia Career Expo 2017 in Balai Kartini, Jakarta from the 5th – 6th of April 2017.', NULL, '2017-07-05 08:49:57', '2017-07-05 08:49:57'),
(4, 1, 0, '“Signatura” Premium Banquet Service at Java Jazz Event 2017', 'Jakarta on March 19th, 2017 – In Indonesia, spesifically in Jakarta, there is a musical event so called “Java Jazz Festival” organized every year. Located in Jakarta Internationa Expo Kemayoran, Java Jazz Festival 2017 was held between 3rd – 5th of March 2017. Garuda Indonesia, as one of main sponsors for the event, opened their booth and lounges. There were two lounges provided by Garuda Indonesia for Garuda Indonesia Frequent Flyer and Java Jazz VIP visitors. One was located side by side with Garuda Indonesia booth and the other one on the 3rd floor between Hall D and E.  Aerofood ACS, as one of business unit of Garuda Indonesia Group, presented its premium banquet, Signatura, to support Garuda Indonesia Lounge service. Various food and beverages were served for lounge customers thus they could enjoy the food and drink while listening to the beautiful jazz music concerts. Types of food and beverages served such as cookies, beef rissoles, types of sushi, tofu with egg, apple, orange, martebe juice, etc. There were also tea and selected types of coffee served for customers. Signatura also brought its best servers to serve customers in these two different located lounges.', NULL, '2017-07-05 08:50:48', '2017-07-05 08:50:48'),
(5, 1, 1, '“SIGNATURA” PREMIUM BANQUET SERVICE AT JAVA JAZZ EVENT 2017', 'Jakarta on March 19th, 2017 – In Indonesia, spesifically in Jakarta, there is a musical event so called “Java Jazz Festival” organized every year. Located in Jakarta Internationa Expo Kemayoran, Java Jazz Festival 2017 was held between 3rd – 5th of March 2017. Garuda Indonesia, as one of main sponsors for the event, opened their booth and lounges. There were two lounges provided by Garuda Indonesia for Garuda Indonesia Frequent Flyer and Java Jazz VIP visitors. One was located side by side with Garuda Indonesia booth and the other one on the 3rd floor between Hall D and E.  Aerofood ACS, as one of business unit of Garuda Indonesia Group, presented its premium banquet, Signatura, to support Garuda Indonesia Lounge service. Various food and beverages were served for lounge customers thus they could enjoy the food and drink while listening to the beautiful jazz music concerts. Types of food and beverages served such as cookies, beef rissoles, types of sushi, tofu with egg, apple, orange, martebe juice, etc. Ther', NULL, '2017-07-05 08:52:30', '2017-07-05 08:52:30'),
(6, 1, 1, 'Aerofood ACS Chefs won Professional Culinary Salon Competition 2017', 'Jakarta, April 2017 – 22 Junior and Senior Chefs of Aerofood ACS won several classes in the 11th Indonesian Salon Culinary 2017 Competition held by the Association of Culinary Professional. The winners received 3 titles for various category of championships which are diploma, Bronze and Silver for canape appetizer menu, Japanese and Indonesian style menu, pastry, bakery and many more.  Over 750 chefs and cooks from local and overseas such as from Taiwan, Korea, Thailand and Malaysia gathered in the biggest cooking competition in Indonesia Food & Hotel Exhibition 2017 which took place from Wednesday – Saturday the 5th – 8th of April 2017 at JIEXPO Kemayoran, Central Jakarta.  Beside the national participants, international juries also attended the competition to assess and give competitive score for the participants’ creation. It is an honor to Aerofood ACS’ Chefs to participate and to win the prestigious medals.  Congratulations for the achievement.', NULL, '2017-07-05 11:41:13', '2017-07-05 11:41:13'),
(7, 1, 1, 'Aerofood ACS Chefs won Professional Culinary Salon Competition 2017', 'Jakarta, April 2017 – 22 Junior and Senior Chefs of Aerofood ACS won several classes in the 11th Indonesian Salon Culinary 2017 Competition held by the Association of Culinary Professional. The winners received 3 titles for various category of championships which are diploma, Bronze and Silver for canape appetizer menu, Japanese and Indonesian style menu, pastry, bakery and many more.  Over 750 chefs and cooks from local and overseas such as from Taiwan, Korea, Thailand and Malaysia gathered in the biggest cooking competition in Indonesia Food & Hotel Exhibition 2017 which took place from Wednesday – Saturday the 5th – 8th of April 2017 at JIEXPO Kemayoran, Central Jakarta.  Beside the national participants, international juries also attended the competition to assess and give competitive score for the participants’ creation. It is an honor to Aerofood ACS’ Chefs to participate and to win the prestigious medals.  Congratulations for the achievement.', NULL, '2017-07-05 11:58:58', '2017-07-05 11:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `content_learnings`
--

CREATE TABLE `content_learnings` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_section` int(10) UNSIGNED NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_personnel` int(10) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `struktur` int(10) UNSIGNED NOT NULL,
  `level_position` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_trainees`
--

CREATE TABLE `jawaban_trainees` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_question` int(10) UNSIGNED NOT NULL,
  `isi_jawaban` int(10) UNSIGNED NOT NULL,
  `skor` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, NULL, 'Functional Training', 'Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti \"Bagian isi disini, bagian isi disini\", sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat \"Lorem Ipsum\" akan berujung pada banyak situs web yang masih dalam tahap pengembangan. Berbagai versi juga telah berubah dari tahun', '2017-07-04 11:47:35', '2017-07-04 11:47:35');

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

-- --------------------------------------------------------

--
-- Table structure for table `opsi_jawabans`
--

CREATE TABLE `opsi_jawabans` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_question` int(10) UNSIGNED NOT NULL,
  `isi_opsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_true` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_test` int(10) UNSIGNED NOT NULL,
  `no_soal` int(11) NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skor_maks` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `url_file_pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id_section` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section_trainings`
--

CREATE TABLE `section_trainings` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_training` int(10) UNSIGNED NOT NULL,
  `id_type` int(10) UNSIGNED NOT NULL,
  `sequence` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section_training_types`
--

CREATE TABLE `section_training_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `id_divisi` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_department` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_unit` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_section` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_section_training` int(10) UNSIGNED NOT NULL,
  `time` time DEFAULT NULL,
  `jumlah_soal` int(11) NOT NULL,
  `attemp` int(11) DEFAULT NULL,
  `question_per_page` int(11) DEFAULT NULL,
  `publised` date NOT NULL,
  `min_score` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `title`, `description`, `id_module`, `enroll_key`, `id_job_family`, `id_department`, `created_at`, `updated_at`) VALUES
(1, 'Mandatory Training 2017', 'Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun. Richard McClintock, seorang professor Bahasa Latin dari Hampden-Sidney College di Virginia, mencoba mencari makna salah satu kata latin yang dianggap paling tidak jelas, yakni consectetur, yang diambil dari salah satu bagian Lorem Ipsum. Setelah ia mencari maknanya di di literatur klasik, ia mendapatkan sebuah sumber yang tidak bisa diragukan. Lorem Ipsum berasal dari bagian 1.10.32 dan 1.10.33 dari naskah \"de Finibus Bonorum et Malorum\" (Sisi Ekstrim dari Kebaikan dan Kejahatan) karya Cicero, yang ditulis pada tahun 45 sebelum masehi. BUku ini adalah risalah dari teori etika yang sangat terkenal pada masa Renaissance. Baris pertama dari Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", berasal dari sebuah baris di bagian 1.10.32.', 2, NULL, NULL, '0', '2017-07-04 11:56:30', '2017-07-04 11:56:30'),
(2, 'Marketing Training', 'Bagian standar dari teks Lorem Ipsum yang digunakan sejak tahun 1500an kini di reproduksi kembali di bawah ini untuk mereka yang tertarik. Bagian 1.10.32 dan 1.10.33 dari \"de Finibus Bonorum et Malorum\" karya Cicero juga di reproduksi persis seperti bentuk aslinya, diikuti oleh versi bahasa Inggris yang berasal dari terjemahan tahun 1914 oleh H. Rackham.', 3, NULL, 2, 'A123', '2017-07-04 12:15:39', '2017-07-04 12:15:39'),
(3, 'Sales Training', 'klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun. Richard McClintock, seorang professor Bahasa Latin dari Hampden-Sidney College di Virginia, mencoba mencari makna salah satu kata latin yang dianggap paling tidak jelas, yakni consectetur, yang diambil dari salah', 3, NULL, 2, 'A123', '2017-07-04 13:18:30', '2017-07-04 13:18:30'),
(4, 'Procurement Training', 'orem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia', 3, NULL, 3, 'B123', '2017-07-05 07:08:59', '2017-07-05 07:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id_unit` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$hdpp1pjA8.Z2FJ4DcTp/o.V5pY6hwG73T6Tevq..VEgNbJoEkjqqC', 'WQVkSs6xN74Yt0Upja1m20QblDMZrVTkMGbBZFYvKTw2uPuFesDJpgC2mSTk', '2017-07-04 08:13:22', '2017-07-04 08:13:22'),
(2, '123', '$2y$10$RTX9h0PXRC74cNjuFdC/YOsJL9.p6xGNq7Y3.8hkZ2EQhKDm63L46', '3pQcMA8kB4D2KHj0IC0dP5ziigIh5ZHs05HjnPEsphxKGpPL84NUPrdzv28L', '2017-07-04 08:19:34', '2017-07-04 08:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_tests`
--

CREATE TABLE `user_tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_pre_test` int(10) UNSIGNED NOT NULL,
  `id_post_test` int(10) UNSIGNED NOT NULL,
  `pre_test_score` int(11) DEFAULT NULL,
  `post_test_score` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `content_learnings`
--
ALTER TABLE `content_learnings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `content_sliders`
--
ALTER TABLE `content_sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
-- AUTO_INCREMENT for table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `section_trainings`
--
ALTER TABLE `section_trainings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `section_training_types`
--
ALTER TABLE `section_training_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `struktur_organisasis`
--
ALTER TABLE `struktur_organisasis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
