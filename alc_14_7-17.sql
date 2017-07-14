-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2017 at 03:36 PM
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
(6, 1, 0, 'Aerofood ACS Chefs won Professional Culinary Salon Competition 2017', 'Jakarta, April 2017 – 22 Junior and Senior Chefs of Aerofood ACS won several classes in the 11th Indonesian Salon Culinary 2017 Competition held by the Association of Culinary Professional. The winners received 3 titles for various category of championships which are diploma, Bronze and Silver for canape appetizer menu, Japanese and Indonesian style menu, pastry, bakery and many more.  Over 750 chefs and cooks from local and overseas such as from Taiwan, Korea, Thailand and Malaysia gathered in the biggest cooking competition in Indonesia Food & Hotel Exhibition 2017 which took place from Wednesday – Saturday the 5th – 8th of April 2017 at JIEXPO Kemayoran, Central Jakarta.  Beside the national participants, international juries also attended the competition to assess and give competitive score for the participants’ creation. It is an honor to Aerofood ACS’ Chefs to participate and to win the prestigious medals.  Congratulations for the achievement.', 'uploads/user_male2-512.png', '2017-07-05 11:41:13', '2017-07-13 11:43:45'),
(7, 1, 1, 'Aerofood ACS Chefs won Professional Culinary Salon Competition 2017', 'Jakarta, April 2017 – 22 Junior and Senior Chefs of Aerofood ACS won several classes in the 11th Indonesian Salon Culinary 2017 Competition held by the Association of Culinary Professional. The winners received 3 titles for various category of championships which are diploma, Bronze and Silver for canape appetizer menu, Japanese and Indonesian style menu, pastry, bakery and many more.  Over 750 chefs and cooks from local and overseas such as from Taiwan, Korea, Thailand and Malaysia gathered in the biggest cooking competition in Indonesia Food & Hotel Exhibition 2017 which took place from Wednesday – Saturday the 5th – 8th of April 2017 at JIEXPO Kemayoran, Central Jakarta.  Beside the national participants, international juries also attended the competition to assess and give competitive score for the participants’ creation. It is an honor to Aerofood ACS’ Chefs to participate and to win the prestigious medals.  Congratulations for the achievement.', NULL, '2017-07-05 11:58:58', '2017-07-05 11:58:58'),
(8, 10, 1, 'Headline News', 'tidak terjadi apa apa sihh', 'uploads/user_male2-512.png', '2017-07-13 10:03:20', '2017-07-13 10:03:20');

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
(1, 2, 'Materi 1', '/ViewerJS/index.html#../KAKP.pdf', NULL, NULL);

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
(5, NULL, 1, 'Lutpiiii', 'coba - coba', 'uploads/ktm.jpg', '2017-07-13 09:07:01', '2017-07-14 06:24:24'),
(6, NULL, 1, 'New', 'adasds', 'uploads/clouds-png-22.png', '2017-07-13 09:39:59', '2017-07-13 09:40:09');

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
(1, 2, '423123', 3, 1, NULL, '2017-07-12 13:21:29'),
(2, 1, '12563534', 4, 2, NULL, NULL);

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

--
-- Dumping data for table `jawaban_trainees`
--

INSERT INTO `jawaban_trainees` (`id`, `id_user`, `id_question`, `isi_jawaban`, `skor`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 0, '2017-07-07 12:44:10', '2017-07-07 12:44:10'),
(2, 2, 2, 7, 1, '2017-07-07 12:44:10', '2017-07-07 12:44:10'),
(3, 2, 3, 11, 1, '2017-07-07 12:44:10', '2017-07-07 12:44:10'),
(4, 2, 4, 16, 0, '2017-07-07 12:44:11', '2017-07-07 12:44:11'),
(5, 2, 5, 19, 1, '2017-07-07 12:44:11', '2017-07-07 12:44:11'),
(6, 1, 1, 3, 0, '2017-07-07 12:47:29', '2017-07-07 12:47:29'),
(7, 1, 2, 7, 1, '2017-07-07 12:47:29', '2017-07-07 12:47:29'),
(8, 1, 3, 11, 1, '2017-07-07 12:47:29', '2017-07-07 12:47:29'),
(9, 1, 4, 14, 0, '2017-07-07 12:47:29', '2017-07-07 12:47:29'),
(10, 1, 5, 19, 1, '2017-07-07 12:47:29', '2017-07-07 12:47:29'),
(11, 1, 1, 3, 0, '2017-07-07 12:48:23', '2017-07-07 12:48:23'),
(12, 1, 2, 7, 1, '2017-07-07 12:48:23', '2017-07-07 12:48:23'),
(13, 1, 3, 11, 1, '2017-07-07 12:48:23', '2017-07-07 12:48:23'),
(14, 1, 4, 14, 0, '2017-07-07 12:48:23', '2017-07-07 12:48:23'),
(15, 1, 5, 19, 1, '2017-07-07 12:48:23', '2017-07-07 12:48:23'),
(16, 2, 1, 2, 0, '2017-07-10 06:16:21', '2017-07-10 06:16:21'),
(17, 2, 2, 6, 0, '2017-07-10 06:16:22', '2017-07-10 06:16:22'),
(18, 2, 3, 11, 1, '2017-07-10 06:16:22', '2017-07-10 06:16:22'),
(19, 2, 4, 15, 1, '2017-07-10 06:16:22', '2017-07-10 06:16:22'),
(20, 2, 5, 18, 0, '2017-07-10 06:16:22', '2017-07-10 06:16:22'),
(21, 2, 1, 1, 0, '2017-07-10 06:33:11', '2017-07-10 06:33:11'),
(22, 2, 2, 6, 0, '2017-07-10 06:33:12', '2017-07-10 06:33:12'),
(23, 2, 3, 10, 0, '2017-07-10 06:33:12', '2017-07-10 06:33:12'),
(24, 2, 4, 15, 1, '2017-07-10 06:33:12', '2017-07-10 06:33:12'),
(25, 2, 5, 18, 0, '2017-07-10 06:33:12', '2017-07-10 06:33:12'),
(26, 2, 1, 2, 0, '2017-07-10 07:04:24', '2017-07-10 07:04:24'),
(27, 2, 2, 5, 0, '2017-07-10 07:04:24', '2017-07-10 07:04:24'),
(28, 2, 3, 10, 0, '2017-07-10 07:04:24', '2017-07-10 07:04:24'),
(29, 2, 4, 14, 0, '2017-07-10 07:04:24', '2017-07-10 07:04:24'),
(30, 2, 5, 20, 0, '2017-07-10 07:04:24', '2017-07-10 07:04:24'),
(31, 2, 6, 22, 0, '2017-07-10 07:35:50', '2017-07-10 07:35:50'),
(32, 2, 7, 27, 1, '2017-07-10 07:35:50', '2017-07-10 07:35:50'),
(33, 2, 8, 34, 0, '2017-07-10 07:35:50', '2017-07-10 07:35:50'),
(34, 2, 9, 39, 1, '2017-07-10 07:35:50', '2017-07-10 07:35:50'),
(35, 2, 10, 42, 0, '2017-07-10 07:35:50', '2017-07-10 07:35:50'),
(36, 2, 6, 21, 1, '2017-07-10 07:39:21', '2017-07-10 07:39:21'),
(37, 2, 7, 27, 1, '2017-07-10 07:39:21', '2017-07-10 07:39:21'),
(38, 2, 8, 32, 0, '2017-07-10 07:39:21', '2017-07-10 07:39:21'),
(39, 2, 9, 39, 1, '2017-07-10 07:39:21', '2017-07-10 07:39:21'),
(40, 2, 10, 42, 0, '2017-07-10 07:39:21', '2017-07-10 07:39:21'),
(41, 2, 6, 21, 1, '2017-07-10 07:40:00', '2017-07-10 07:40:00'),
(42, 2, 7, 27, 1, '2017-07-10 07:40:00', '2017-07-10 07:40:00'),
(43, 2, 8, 32, 0, '2017-07-10 07:40:00', '2017-07-10 07:40:00'),
(44, 2, 9, 39, 1, '2017-07-10 07:40:00', '2017-07-10 07:40:00'),
(45, 2, 10, 42, 0, '2017-07-10 07:40:00', '2017-07-10 07:40:00'),
(46, 4, 1, 2, 0, '2017-07-10 08:37:19', '2017-07-10 08:37:19'),
(47, 4, 2, 7, 1, '2017-07-10 08:37:19', '2017-07-10 08:37:19'),
(48, 4, 3, 11, 1, '2017-07-10 08:37:19', '2017-07-10 08:37:19'),
(49, 4, 4, 15, 1, '2017-07-10 08:37:20', '2017-07-10 08:37:20'),
(50, 4, 5, 20, 0, '2017-07-10 08:37:20', '2017-07-10 08:37:20'),
(51, 4, 1, 1, 0, '2017-07-10 08:38:35', '2017-07-10 08:38:35'),
(52, 4, 2, 6, 0, '2017-07-10 08:38:35', '2017-07-10 08:38:35'),
(53, 4, 3, 10, 0, '2017-07-10 08:38:35', '2017-07-10 08:38:35'),
(54, 4, 4, 15, 1, '2017-07-10 08:38:35', '2017-07-10 08:38:35'),
(55, 4, 5, 18, 0, '2017-07-10 08:38:35', '2017-07-10 08:38:35'),
(56, 4, 6, 21, 1, '2017-07-10 08:39:52', '2017-07-10 08:39:52'),
(57, 4, 7, 27, 1, '2017-07-10 08:39:52', '2017-07-10 08:39:52'),
(58, 4, 8, 33, 1, '2017-07-10 08:39:52', '2017-07-10 08:39:52'),
(59, 4, 9, 39, 1, '2017-07-10 08:39:52', '2017-07-10 08:39:52'),
(60, 4, 10, 45, 1, '2017-07-10 08:39:52', '2017-07-10 08:39:52'),
(61, 4, 6, 21, 1, '2017-07-10 08:40:53', '2017-07-10 08:40:53'),
(62, 4, 7, 27, 1, '2017-07-10 08:40:54', '2017-07-10 08:40:54'),
(63, 4, 8, 33, 1, '2017-07-10 08:40:54', '2017-07-10 08:40:54'),
(64, 4, 9, 39, 1, '2017-07-10 08:40:54', '2017-07-10 08:40:54'),
(65, 4, 10, 42, 0, '2017-07-10 08:40:54', '2017-07-10 08:40:54'),
(66, 4, 1, 2, 0, '2017-07-10 08:43:46', '2017-07-10 08:43:46'),
(67, 4, 2, 8, 0, '2017-07-10 08:43:46', '2017-07-10 08:43:46'),
(68, 4, 3, 11, 1, '2017-07-10 08:43:46', '2017-07-10 08:43:46'),
(69, 4, 4, 14, 0, '2017-07-10 08:43:46', '2017-07-10 08:43:46'),
(70, 4, 5, 19, 1, '2017-07-10 08:43:46', '2017-07-10 08:43:46'),
(71, 4, 6, 21, 1, '2017-07-10 08:44:15', '2017-07-10 08:44:15'),
(72, 4, 7, 27, 1, '2017-07-10 08:44:15', '2017-07-10 08:44:15'),
(73, 4, 8, 33, 1, '2017-07-10 08:44:15', '2017-07-10 08:44:15'),
(74, 4, 9, 39, 1, '2017-07-10 08:44:15', '2017-07-10 08:44:15'),
(75, 4, 10, 45, 1, '2017-07-10 08:44:15', '2017-07-10 08:44:15'),
(76, 1, 6, 21, 1, '2017-07-10 11:31:53', '2017-07-10 11:31:53'),
(77, 1, 7, 27, 1, '2017-07-10 11:31:53', '2017-07-10 11:31:53'),
(78, 1, 6, 21, 1, '2017-07-10 11:35:07', '2017-07-10 11:35:07'),
(79, 1, 7, 28, 0, '2017-07-10 11:35:08', '2017-07-10 11:35:08'),
(80, 1, 8, 32, 0, '2017-07-10 11:35:08', '2017-07-10 11:35:08'),
(81, 1, 9, NULL, 0, '2017-07-10 11:35:08', '2017-07-10 11:35:08'),
(82, 1, 10, NULL, 0, '2017-07-10 11:35:08', '2017-07-10 11:35:08'),
(83, 1, 6, 21, 1, '2017-07-10 11:37:49', '2017-07-10 11:37:49'),
(84, 1, 7, 27, 1, '2017-07-10 11:37:49', '2017-07-10 11:37:49'),
(85, 1, 8, 33, 1, '2017-07-10 11:37:49', '2017-07-10 11:37:49'),
(86, 1, 9, 39, 1, '2017-07-10 11:37:49', '2017-07-10 11:37:49'),
(87, 1, 10, 45, 1, '2017-07-10 11:37:49', '2017-07-10 11:37:49'),
(88, 1, 1, 2, 0, '2017-07-10 11:39:37', '2017-07-10 11:39:37'),
(89, 1, 2, 6, 0, '2017-07-10 11:39:38', '2017-07-10 11:39:38'),
(90, 1, 3, 11, 1, '2017-07-10 11:39:38', '2017-07-10 11:39:38'),
(91, 1, 4, NULL, 0, '2017-07-10 11:39:38', '2017-07-10 11:39:38'),
(92, 1, 5, NULL, 0, '2017-07-10 11:39:38', '2017-07-10 11:39:38'),
(93, 1, 6, NULL, 0, '2017-07-10 12:28:55', '2017-07-10 12:28:55'),
(94, 1, 7, NULL, 0, '2017-07-10 12:28:55', '2017-07-10 12:28:55'),
(95, 1, 8, NULL, 0, '2017-07-10 12:28:55', '2017-07-10 12:28:55'),
(96, 1, 9, NULL, 0, '2017-07-10 12:28:55', '2017-07-10 12:28:55'),
(97, 1, 10, NULL, 0, '2017-07-10 12:28:55', '2017-07-10 12:28:55'),
(98, 1, 1, NULL, 0, '2017-07-10 12:36:28', '2017-07-10 12:36:28'),
(99, 1, 2, NULL, 0, '2017-07-10 12:36:28', '2017-07-10 12:36:28'),
(100, 1, 3, NULL, 0, '2017-07-10 12:36:28', '2017-07-10 12:36:28'),
(101, 1, 4, NULL, 0, '2017-07-10 12:36:28', '2017-07-10 12:36:28'),
(102, 1, 5, NULL, 0, '2017-07-10 12:36:28', '2017-07-10 12:36:28'),
(103, 1, 6, NULL, 0, '2017-07-10 12:39:13', '2017-07-10 12:39:13'),
(104, 1, 7, NULL, 0, '2017-07-10 12:39:14', '2017-07-10 12:39:14'),
(105, 1, 8, NULL, 0, '2017-07-10 12:39:14', '2017-07-10 12:39:14'),
(106, 1, 9, NULL, 0, '2017-07-10 12:39:14', '2017-07-10 12:39:14'),
(107, 1, 10, NULL, 0, '2017-07-10 12:39:14', '2017-07-10 12:39:14'),
(108, 1, 1, NULL, 0, '2017-07-10 13:06:33', '2017-07-10 13:06:33'),
(109, 1, 2, NULL, 0, '2017-07-10 13:06:33', '2017-07-10 13:06:33'),
(110, 1, 3, NULL, 0, '2017-07-10 13:06:33', '2017-07-10 13:06:33'),
(111, 1, 4, NULL, 0, '2017-07-10 13:06:33', '2017-07-10 13:06:33'),
(112, 1, 5, NULL, 0, '2017-07-10 13:06:33', '2017-07-10 13:06:33'),
(113, 1, 6, NULL, 0, '2017-07-10 14:03:08', '2017-07-10 14:03:08'),
(114, 1, 7, NULL, 0, '2017-07-10 14:03:08', '2017-07-10 14:03:08'),
(115, 1, 8, NULL, 0, '2017-07-10 14:03:09', '2017-07-10 14:03:09'),
(116, 1, 9, NULL, 0, '2017-07-10 14:03:09', '2017-07-10 14:03:09'),
(117, 1, 10, NULL, 0, '2017-07-10 14:03:09', '2017-07-10 14:03:09');

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

--
-- Dumping data for table `news_replies`
--

INSERT INTO `news_replies` (`id`, `id_user`, `id_news`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 7, '[Re] Judulnya', 'Coba - coba reply', NULL, NULL),
(2, 10, 7, '[RE:] Aerofood ACS Chefs won Professional Culinary Salon Competition 2017', 'Berita yang sangat menarik dan bagus sekali... saya bahagia', '2017-07-13 06:43:20', '2017-07-13 06:43:20'),
(3, 10, 7, '[RE:] Aerofood ACS Chefs won Professional Culinary Salon Competition 2017', 'Bagus bagus bagus', '2017-07-13 06:44:28', '2017-07-13 06:44:28'),
(4, 10, 7, '[RE:] Aerofood ACS Chefs won Professional Culinary Salon Competition 2017', 'Hahaha', '2017-07-13 06:45:02', '2017-07-13 06:45:02'),
(5, 10, 7, '[RE:] Aerofood ACS Chefs won Professional Culinary Salon Competition 2017', 'kikikikiik', '2017-07-13 06:45:49', '2017-07-13 06:45:49'),
(6, 10, 7, '[RE:] Aerofood ACS Chefs won Professional Culinary Salon Competition 2017', 'kikikikiik', '2017-07-13 06:46:44', '2017-07-13 06:46:44'),
(7, 10, 7, '[RE:] Aerofood ACS Chefs won Professional Culinary Salon Competition 2017', 'ayolah brooo', '2017-07-13 06:49:00', '2017-07-13 06:49:00'),
(8, 10, 3, '[RE:] Human Capital participation in Job Fair and Career Expo', 'Cakep bangets.............', '2017-07-13 07:11:54', '2017-07-13 07:11:54'),
(9, 8, 7, '[RE:] Aerofood ACS Chefs won Professional Culinary Salon Competition 2017', 'adasdbsajdsa', '2017-07-14 06:16:06', '2017-07-14 06:16:06'),
(10, 8, 7, '[RE:] Aerofood ACS Chefs won Professional Culinary Salon Competition 2017', 'paisal', '2017-07-14 06:16:13', '2017-07-14 06:16:13');

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
(1, 1, 'Depok', 0, '2017-07-07 14:46:53', '2017-07-07 14:46:53'),
(2, 1, 'Medan', 0, '2017-07-07 14:46:53', '2017-07-07 14:46:53'),
(3, 1, 'Bogor', 0, '2017-07-07 14:46:53', '2017-07-07 14:46:53'),
(4, 1, 'Dimana-mana', 1, '2017-07-07 14:46:53', '2017-07-07 14:46:53'),
(5, 2, 'Ani', 0, '2017-07-07 15:02:53', '2017-07-07 15:02:53'),
(6, 2, 'Budi', 0, '2017-07-07 15:02:53', '2017-07-07 15:02:53'),
(7, 2, 'Novi', 1, '2017-07-07 15:02:53', '2017-07-07 15:02:53'),
(8, 2, 'Kadiyem', 0, '2017-07-07 15:02:53', '2017-07-07 15:02:53'),
(9, 3, '1', 0, '2017-07-07 15:04:35', '2017-07-07 15:04:35'),
(10, 3, '2', 0, '2017-07-07 15:04:35', '2017-07-07 15:04:35'),
(11, 3, '1 atau 2', 1, '2017-07-07 15:04:35', '2017-07-07 15:04:35'),
(12, 3, '4', 0, '2017-07-07 15:04:35', '2017-07-07 15:04:35'),
(13, 4, '10', 0, '2017-07-07 15:04:35', '2017-07-07 15:04:35'),
(14, 4, '20', 0, '2017-07-07 15:04:35', '2017-07-07 15:04:35'),
(15, 4, 'saya puasa', 1, '2017-07-07 15:04:35', '2017-07-07 15:04:35'),
(16, 4, '90', 0, '2017-07-07 15:04:36', '2017-07-07 15:04:36'),
(17, 5, '10', 0, '2017-07-07 15:04:36', '2017-07-07 15:04:36'),
(18, 5, '20', 0, '2017-07-07 15:04:36', '2017-07-07 15:04:36'),
(19, 5, 'lupa lupa ingat', 1, '2017-07-07 15:04:36', '2017-07-07 15:04:36'),
(20, 5, '99', 0, '2017-07-07 15:04:36', '2017-07-07 15:04:36'),
(21, 6, '2', 1, '2017-07-10 14:13:31', '2017-07-10 14:13:31'),
(22, 6, '3', 0, '2017-07-10 14:13:31', '2017-07-10 14:13:31'),
(23, 6, '4', 0, '2017-07-10 14:13:31', '2017-07-10 14:13:31'),
(24, 6, '5', 0, '2017-07-10 14:13:31', '2017-07-10 14:13:31'),
(25, 6, '6', 0, '2017-07-10 14:13:31', '2017-07-10 14:13:31'),
(26, 7, '2', 0, '2017-07-10 14:13:31', '2017-07-10 14:13:31'),
(27, 7, '3', 1, '2017-07-10 14:13:31', '2017-07-10 14:13:31'),
(28, 7, '4', 0, '2017-07-10 14:13:31', '2017-07-10 14:13:31'),
(29, 7, '5', 0, '2017-07-10 14:13:31', '2017-07-10 14:13:31'),
(30, 7, '6', 0, '2017-07-10 14:13:31', '2017-07-10 14:13:31'),
(31, 8, '2', 0, '2017-07-10 14:13:31', '2017-07-10 14:13:31'),
(32, 8, '3', 0, '2017-07-10 14:13:32', '2017-07-10 14:13:32'),
(33, 8, '4', 1, '2017-07-10 14:13:32', '2017-07-10 14:13:32'),
(34, 8, '5', 0, '2017-07-10 14:13:32', '2017-07-10 14:13:32'),
(35, 8, '6', 0, '2017-07-10 14:13:32', '2017-07-10 14:13:32'),
(36, 9, '2', 0, '2017-07-10 14:13:32', '2017-07-10 14:13:32'),
(37, 9, '3', 0, '2017-07-10 14:13:32', '2017-07-10 14:13:32'),
(38, 9, '4', 0, '2017-07-10 14:13:32', '2017-07-10 14:13:32'),
(39, 9, '5', 1, '2017-07-10 14:13:32', '2017-07-10 14:13:32'),
(40, 9, '6', 0, '2017-07-10 14:13:32', '2017-07-10 14:13:32'),
(41, 10, '2', 0, '2017-07-10 14:13:32', '2017-07-10 14:13:32'),
(42, 10, '3', 0, '2017-07-10 14:13:32', '2017-07-10 14:13:32'),
(43, 10, '4', 0, '2017-07-10 14:13:32', '2017-07-10 14:13:32'),
(44, 10, '5', 0, '2017-07-10 14:13:32', '2017-07-10 14:13:32'),
(45, 10, '6', 1, '2017-07-10 14:13:32', '2017-07-10 14:13:32');

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
(1, 9, 'Wewe', 'Wewe', 0, 'scw@sdsdf.com', 'sadasdsadsad', '3241122', NULL, '2017-07-02', NULL, '2017-07-13 13:17:09'),
(2, 10, 'Faishal', 'sdfsd', 0, 'dwe@fds.com', 'asdadsd', '1321321', NULL, '2017-07-01', NULL, '2017-07-12 13:21:28');

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
(1, 1, NULL, 'Dimanakah anda tinggal ?', NULL, '2017-07-07 14:42:17', '2017-07-07 14:42:17'),
(2, 1, NULL, 'Siapakah nama kucing saya ?', NULL, '2017-07-07 14:42:17', '2017-07-07 14:42:17'),
(3, 1, NULL, 'Berapakah nilai matematika 1+1+1 ?', NULL, '2017-07-07 14:42:18', '2017-07-07 14:42:18'),
(4, 1, NULL, 'Berapa kali anda makan dalam 10 hari ?', NULL, '2017-07-07 14:42:18', '2017-07-07 14:42:18'),
(5, 1, NULL, 'Berapa nilai matematika saya saat ujian SD ?', NULL, '2017-07-07 14:42:18', '2017-07-07 14:42:18'),
(6, 2, NULL, '1+1 = ...', NULL, '2017-07-10 14:10:29', '2017-07-10 14:10:29'),
(7, 2, NULL, '1+2 = ...', NULL, '2017-07-10 14:10:29', '2017-07-10 14:10:29'),
(8, 2, NULL, '1+3 = ...', NULL, '2017-07-10 14:10:29', '2017-07-10 14:10:29'),
(9, 2, NULL, '1+4 = ...', NULL, '2017-07-10 14:10:29', '2017-07-10 14:10:29'),
(10, 2, NULL, '1+5 = ...', NULL, '2017-07-10 14:10:29', '2017-07-10 14:10:29');

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

--
-- Dumping data for table `score_summaries`
--

INSERT INTO `score_summaries` (`id`, `id_user`, `file_name`, `url_file_pdf`, `created_at`, `updated_at`) VALUES
(1, 10, 'Situs Resmi PT.pdf', 'ViewerJS/#..home.html/Situs Resmi PT.pdf', '2017-07-13 13:07:41', '2017-07-13 13:07:41'),
(2, 9, 'cv.pdf', 'ViewerJS/#..home.html/cv.pdf', '2017-07-13 13:25:21', '2017-07-13 13:25:21'),
(3, 9, 'resume-rohmattaufik.pdf', 'ViewerJS/#..home.html/resume-rohmattaufik.pdf', '2017-07-13 13:26:03', '2017-07-13 13:26:03'),
(4, 9, 'Paragraphdevelopment (1).pdf', 'ViewerJS/#..home.html/Paragraphdevelopment (1).pdf', '2017-07-13 13:31:32', '2017-07-13 13:31:32'),
(5, 10, 'manpro.pdf', 'ViewerJS/#..home.html/manpro.pdf', '2017-07-13 13:35:40', '2017-07-13 13:35:40');

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
(1, 5, 1, NULL, '2017-07-06 20:55:15', '2017-07-06 20:55:15'),
(2, 5, 2, NULL, '2017-07-06 20:55:15', '2017-07-06 20:55:15'),
(3, 5, 3, NULL, '2017-07-06 20:55:15', '2017-07-06 20:55:15');

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
(4, 'D003', 'A123', NULL, 'S002', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_section_training` int(10) UNSIGNED NOT NULL,
  `time` int(11) DEFAULT NULL,
  `jumlah_soal` int(11) NOT NULL,
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
(1, 1, 30, 5, 1, 5, 0, 50, '2017-07-07 14:10:19', '2017-07-07 14:10:19'),
(2, 3, 100, 5, 1, NULL, 1, NULL, '2017-07-10 14:06:44', '2017-07-10 14:06:44');

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
(4, 'Procurement Training', 'orem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia', 3, NULL, 3, 'B123', '2017-07-05 07:08:59', '2017-07-05 07:08:59'),
(5, 'Induction Training', 'Lorem ipsum dolor sit amet, at sit idque discere abhorreant, in eos labitur omittantur, est te nonumy petentium. Ut case verear commodo vel, alterum aliquam vis at, mel nulla noster honestatis ea. Eum nulla labore molestie in. Eam dolor primis ne, in sed regione luptatum. At quo diam saepe, ut nec alienum lobortis.', 1, NULL, NULL, NULL, '2017-07-06 08:01:22', '2017-07-06 08:01:22');

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
(1, 'admin', '$2y$10$hdpp1pjA8.Z2FJ4DcTp/o.V5pY6hwG73T6Tevq..VEgNbJoEkjqqC', 1, 'pvvJ5252n9LGcb5JPgl1MvAw7yZOGrK22HrP9Gcq3qYGSRvN9oOVUx8kSfZG', '2017-07-04 08:13:22', '2017-07-04 08:13:22'),
(2, '123', '$2y$10$RTX9h0PXRC74cNjuFdC/YOsJL9.p6xGNq7Y3.8hkZ2EQhKDm63L46', 0, 'V9h3pplLeBEsRJLJFKU3q3SgSAWUngyseD5Lz87aeaW1ce3jnwkhRpYYNBeT', '2017-07-04 08:19:34', '2017-07-04 08:19:34'),
(3, 'Toni', '$2y$10$xvaavQGm8QQdPlfHJY5Pl./3h/40TDHaZP3Ef62AJ2/8R7Q5zI.7.', 0, 'uf5EDCICkxUtc35f7T70E1fZhOKhffCRRm0HZDvHeOrXfISzHRmoyd5LZQ5T', '2017-07-06 08:03:54', '2017-07-06 08:03:54'),
(4, 'zxc', '$2y$10$sb.FeekPaC27ZGRWG9Vfxe7Hr2D6.iJ01DqaGlg.GxktkS8nFY39.', 0, 'KKZb6hftrBuiz2LkHPjhy2Y3bFUNeYnJqnD63RHP0uRKYRll8htTt6ClLrhJ', '2017-07-06 08:04:59', '2017-07-06 08:04:59'),
(5, '11223344', 'qwert', 0, NULL, NULL, NULL),
(6, '12332424', '$2y$10$ScX2a5mksjjzYEppbEpGgeCAzbCHLIaF7TMxFpLJSZaw1KLeUpztW', 0, NULL, NULL, NULL),
(7, '123324245', '$2y$10$wyphCOqB4J9sJ73m/OcfMOiPQ4Y5apq6fIFr2DUK3GNrMbidzrt9K', 0, NULL, NULL, NULL),
(8, '12121', '$2y$10$PMgFI7/PlP.hDHBbCjnyv.qseLUEKhnRSv0FiugDZwmLhObgWfm4i', 0, 'gIL4ygF434iCE1RvG4cKUG33Sf64kCeBPU2fDaHH89tKOTFuu8fyNUOFjLRr', NULL, NULL),
(9, '12121', '$2y$10$KbkU7dyXxhIymGYGf0UtoOIZzK7jGiAwf/0pWUhTpy9ouSzvml3ki', 0, NULL, NULL, NULL),
(10, '1212121', '$2y$10$Mb1Xg3m9mCsavhtBM8jbPuELyOy8x6IxhHMvDMxYlu6osA3RWKRWW', 0, NULL, NULL, NULL);

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
(1, 2, 5, 1, 2, 60, 60, '2017-07-07 12:44:11', '2017-07-10 07:40:00'),
(9, 4, 5, 1, 2, 40, 100, '2017-07-10 08:43:46', '2017-07-10 08:44:15'),
(12, 1, 5, 1, 2, 0, 0, '2017-07-10 13:06:33', '2017-07-10 14:03:09');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `content_learnings`
--
ALTER TABLE `content_learnings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `content_sliders`
--
ALTER TABLE `content_sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jawaban_trainees`
--
ALTER TABLE `jawaban_trainees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news_replies`
--
ALTER TABLE `news_replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `opsi_jawabans`
--
ALTER TABLE `opsi_jawabans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `score_summaries`
--
ALTER TABLE `score_summaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `section_trainings`
--
ALTER TABLE `section_trainings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `section_training_types`
--
ALTER TABLE `section_training_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `struktur_organisasis`
--
ALTER TABLE `struktur_organisasis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user_tests`
--
ALTER TABLE `user_tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
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
