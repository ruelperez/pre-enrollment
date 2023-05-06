-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 05:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiosk`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'bscs', NULL, NULL),
(2, 'bsais', NULL, NULL),
(3, 'entrep', NULL, NULL),
(4, 'act', NULL, NULL);

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
-- Table structure for table `fill_ups`
--

CREATE TABLE `fill_ups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `course_id` smallint(5) UNSIGNED NOT NULL,
  `yearlevel_id` smallint(5) UNSIGNED NOT NULL,
  `semester_id` smallint(5) UNSIGNED NOT NULL,
  `student_number` bigint(20) DEFAULT NULL,
  `student_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_year_start` int(11) NOT NULL,
  `school_year_end` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthplace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fill_ups`
--

INSERT INTO `fill_ups` (`id`, `user_id`, `course_id`, `yearlevel_id`, `semester_id`, `student_number`, `student_class`, `school_year_start`, `school_year_end`, `first_name`, `last_name`, `middle_name`, `address`, `guardian`, `contact_number`, `birthdate`, `birthplace`, `sex`, `created_at`, `updated_at`) VALUES
(1, 101, 1, 1, 1, 22000644400, NULL, 65378, 786, 'Ma. Eliza Filipina', 'Beldad', 'fth', 'ert', 'the', '4638', 'dfh', 'gdh', 'male', '2023-05-02 00:02:02', '2023-05-02 00:10:20'),
(2, 102, 1, 1, 1, NULL, NULL, 689, 98698, 'q', 'q', 'fj', 'sr', 'dryh', 'setew', 'ert', 'srt', '', '2023-05-02 00:11:14', '2023-05-02 00:13:28'),
(3, 103, 1, 1, 1, 18004097800, NULL, 453, 45345, 'Julie ', 'Gueruela', 'gfhg', 'gsdggd', 'dh', '+68+8', 'dhd', 'cfhfd', 'male', '2023-05-02 00:14:59', '2023-05-02 00:14:59'),
(4, 104, 1, 1, 1, NULL, NULL, 2022, 2023, 'ruel', 'perez', 'flor', 'san juan, baao, camarines sur', 'armida perez', '09955415702', 'october 7, 2001', 'san juan, baao, camarines sur', 'male', '2023-05-02 00:20:48', '2023-05-02 03:32:15'),
(5, 104, 1, 2, 1, NULL, 'new', 2022, 2023, 'ruel', 'perez', 'flor', 'san juan, baao, camarine sur', 'armida perez', '09955415702', 'october 7 2001', 'san juan, baao, camarine sur', 'male', '2023-05-02 05:14:53', '2023-05-02 05:14:53'),
(6, 106, 1, 2, 1, 19001038500, 'old', 2022, 2023, 'Joselyn', 'Castroverde', 'flor', 'san juan,  baao, camarines sur', 'armida perez', '09955415702', 'october 7 2001', 'san juan,  baao, camarines sur', 'male', '2023-05-02 05:45:20', '2023-05-02 05:45:41'),
(7, 111, 1, 2, 1, 17004144500, 'old', 2202, 3202, 'RUEL', 'PEREZ', 'Flor', 'San juan baao cmasir', 'Armida perez', '0995415702', 'October 7,2001', 'San juan baao cmaari es sur', 'male', '2023-05-03 21:45:03', '2023-05-04 03:50:55'),
(10, 105, 1, 2, 1, 12003473800, 'old', 2022, 2023, 'LAINE MARIE', 'SALES', 'flor', 'san juan, baao, camarines sur', 'armida perez', '09955415702', 'october 7, 2001', 'san juan, baao, camarines sur', '', '2023-05-04 04:44:18', '2023-05-04 05:36:37');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_22_140000_create_courses_table', 1),
(6, '2023_04_22_140552_create_yearlevels_table', 1),
(7, '2023_04_22_140747_create_semisters_table', 1),
(8, '2023_04_22_140832_create_subjects_table', 1),
(9, '2023_04_22_154943_create_users_table', 2),
(10, '2023_04_22_155021_create_users_table', 3),
(11, '2023_04_22_140747_create_semesters_table', 4),
(12, '2023_04_23_144319_create_subjects_table', 5),
(13, '2023_04_24_041331_create_subjects_table', 6),
(14, '2023_04_24_072955_create_subjects_table', 7),
(15, '2023_04_26_135908_create_users_table', 8),
(16, '2023_04_26_143404_create_users_table', 9),
(17, '2023_04_27_064737_create_student_subjects_table', 10),
(18, '2023_04_27_164720_create_student_subjects_table', 11),
(19, '2023_04_30_084925_create_fill_ups_table', 12),
(20, '2023_04_30_100534_create_fill_ups_table', 13),
(21, '2023_04_30_102456_create_fill_ups_table', 14),
(22, '2023_05_02_035112_create_usn_lists_table', 15),
(23, '2023_05_02_043256_create_usn_lists_table', 16),
(24, '2023_05_02_043807_create_usn_lists_table', 17),
(25, '2023_05_02_050422_create_usn_lists_table', 18),
(26, '2023_05_02_050614_create_usn_lists_table', 19),
(27, '2023_05_02_050714_create_usn_lists_table', 20),
(28, '2023_05_02_053113_create_usn_lists_table', 21),
(29, '2023_05_02_055740_create_usn_lists_table', 22),
(30, '2023_05_02_061018_create_users_table', 23),
(31, '2023_05_02_072720_create_users_table', 24),
(32, '2023_05_02_073505_create_fill_ups_table', 25),
(33, '2023_05_02_074406_create_users_table', 26),
(34, '2023_05_02_133618_create_usn_lists_table', 27);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `sem`, `created_at`, `updated_at`) VALUES
(1, '1st', NULL, NULL),
(2, '2nd', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_subjects`
--

CREATE TABLE `student_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `subject_id` smallint(5) UNSIGNED NOT NULL,
  `course_id` smallint(5) UNSIGNED NOT NULL,
  `yearlevel_id` smallint(5) UNSIGNED NOT NULL,
  `semester_id` smallint(5) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_subjects`
--

INSERT INTO `student_subjects` (`id`, `user_id`, `subject_id`, `course_id`, `yearlevel_id`, `semester_id`, `created_at`, `updated_at`) VALUES
(204, 101, 29, 1, 1, 1, '2023-05-02 00:00:38', '2023-05-02 00:00:38'),
(205, 101, 30, 1, 1, 1, '2023-05-02 00:00:38', '2023-05-02 00:00:38'),
(206, 101, 31, 1, 1, 1, '2023-05-02 00:00:38', '2023-05-02 00:00:38'),
(208, 101, 35, 1, 1, 1, '2023-05-02 00:00:49', '2023-05-02 00:00:49'),
(213, 102, 21, 1, 3, 1, '2023-05-02 00:12:59', '2023-05-02 00:12:59'),
(214, 102, 22, 1, 3, 1, '2023-05-02 00:12:59', '2023-05-02 00:12:59'),
(218, 102, 34, 1, 2, 1, '2023-05-02 00:13:09', '2023-05-02 00:13:09'),
(219, 102, 35, 1, 2, 1, '2023-05-02 00:13:09', '2023-05-02 00:13:09'),
(220, 102, 40, 1, 2, 1, '2023-05-02 00:13:09', '2023-05-02 00:13:09'),
(221, 102, 29, 1, 1, 1, '2023-05-02 00:13:16', '2023-05-02 00:13:16'),
(222, 102, 30, 1, 1, 1, '2023-05-02 00:13:16', '2023-05-02 00:13:16'),
(223, 102, 31, 1, 1, 1, '2023-05-02 00:13:16', '2023-05-02 00:13:16'),
(224, 102, 32, 1, 1, 1, '2023-05-02 00:13:16', '2023-05-02 00:13:16'),
(225, 103, 29, 1, 1, 1, '2023-05-02 00:14:42', '2023-05-02 00:14:42'),
(226, 103, 30, 1, 1, 1, '2023-05-02 00:14:42', '2023-05-02 00:14:42'),
(227, 103, 31, 1, 1, 1, '2023-05-02 00:14:42', '2023-05-02 00:14:42'),
(228, 103, 32, 1, 1, 1, '2023-05-02 00:14:42', '2023-05-02 00:14:42'),
(229, 104, 29, 1, 1, 1, '2023-05-02 00:20:11', '2023-05-02 00:20:11'),
(230, 104, 30, 1, 1, 1, '2023-05-02 00:20:11', '2023-05-02 00:20:11'),
(231, 104, 31, 1, 1, 1, '2023-05-02 00:20:11', '2023-05-02 00:20:11'),
(232, 104, 32, 1, 1, 1, '2023-05-02 00:20:11', '2023-05-02 00:20:11'),
(249, 104, 34, 1, 2, 1, '2023-05-02 05:27:58', '2023-05-02 05:27:58'),
(250, 104, 35, 1, 2, 1, '2023-05-02 05:27:58', '2023-05-02 05:27:58'),
(251, 104, 40, 1, 2, 1, '2023-05-02 05:27:58', '2023-05-02 05:27:58'),
(252, 104, 41, 1, 2, 1, '2023-05-02 05:27:58', '2023-05-02 05:27:58'),
(253, 104, 42, 1, 2, 1, '2023-05-02 05:27:58', '2023-05-02 05:27:58'),
(254, 104, 43, 1, 2, 1, '2023-05-02 05:27:58', '2023-05-02 05:27:58'),
(255, 104, 44, 1, 2, 1, '2023-05-02 05:27:58', '2023-05-02 05:27:58'),
(256, 104, 45, 1, 2, 1, '2023-05-02 05:27:58', '2023-05-02 05:27:58'),
(257, 104, 46, 1, 2, 1, '2023-05-02 05:27:58', '2023-05-02 05:27:58'),
(258, 104, 47, 1, 2, 1, '2023-05-02 05:27:58', '2023-05-02 05:27:58'),
(259, 104, 48, 1, 2, 1, '2023-05-02 05:27:58', '2023-05-02 05:27:58'),
(260, 104, 49, 1, 2, 1, '2023-05-02 05:27:58', '2023-05-02 05:27:58'),
(261, 104, 50, 1, 2, 1, '2023-05-02 05:27:58', '2023-05-02 05:27:58'),
(262, 104, 51, 1, 2, 1, '2023-05-02 05:27:58', '2023-05-02 05:27:58'),
(263, 104, 52, 1, 2, 1, '2023-05-02 05:27:58', '2023-05-02 05:27:58'),
(264, 104, 53, 1, 2, 1, '2023-05-02 05:27:58', '2023-05-02 05:27:58'),
(265, 105, 29, 1, 1, 1, '2023-05-02 05:41:49', '2023-05-02 05:41:49'),
(266, 105, 30, 1, 1, 1, '2023-05-02 05:41:49', '2023-05-02 05:41:49'),
(267, 105, 31, 1, 1, 1, '2023-05-02 05:41:49', '2023-05-02 05:41:49'),
(268, 105, 32, 1, 1, 1, '2023-05-02 05:41:49', '2023-05-02 05:41:49'),
(303, 106, 34, 1, 2, 1, '2023-05-02 05:43:46', '2023-05-02 05:43:46'),
(304, 106, 35, 1, 2, 1, '2023-05-02 05:43:46', '2023-05-02 05:43:46'),
(305, 106, 40, 1, 2, 1, '2023-05-02 05:43:46', '2023-05-02 05:43:46'),
(306, 106, 41, 1, 2, 1, '2023-05-02 05:43:46', '2023-05-02 05:43:46'),
(307, 106, 42, 1, 2, 1, '2023-05-02 05:43:46', '2023-05-02 05:43:46'),
(308, 106, 43, 1, 2, 1, '2023-05-02 05:43:46', '2023-05-02 05:43:46'),
(309, 106, 44, 1, 2, 1, '2023-05-02 05:43:46', '2023-05-02 05:43:46'),
(310, 106, 45, 1, 2, 1, '2023-05-02 05:43:46', '2023-05-02 05:43:46'),
(311, 106, 46, 1, 2, 1, '2023-05-02 05:43:46', '2023-05-02 05:43:46'),
(319, 106, 34, 1, 2, 1, '2023-05-02 05:44:28', '2023-05-02 05:44:28'),
(320, 106, 31, 1, 2, 1, '2023-05-02 05:44:32', '2023-05-02 05:44:32'),
(390, 111, 21, 1, 3, 1, '2023-05-03 23:24:44', '2023-05-03 23:24:44'),
(391, 111, 22, 1, 3, 1, '2023-05-03 23:24:44', '2023-05-03 23:24:44'),
(432, 111, 29, 1, 1, 1, '2023-05-03 23:37:36', '2023-05-03 23:37:36'),
(433, 111, 30, 1, 1, 1, '2023-05-03 23:37:36', '2023-05-03 23:37:36'),
(487, 105, 34, 1, 2, 1, '2023-05-04 05:34:56', '2023-05-04 05:34:56'),
(488, 105, 35, 1, 2, 1, '2023-05-04 05:34:56', '2023-05-04 05:34:56'),
(489, 105, 40, 1, 2, 1, '2023-05-04 05:34:56', '2023-05-04 05:34:56'),
(490, 105, 41, 1, 2, 1, '2023-05-04 05:34:56', '2023-05-04 05:34:56'),
(491, 105, 42, 1, 2, 1, '2023-05-04 05:34:56', '2023-05-04 05:34:56'),
(492, 105, 43, 1, 2, 1, '2023-05-04 05:34:56', '2023-05-04 05:34:56'),
(493, 105, 44, 1, 2, 1, '2023-05-04 05:34:56', '2023-05-04 05:34:56'),
(504, 111, 34, 1, 2, 1, '2023-05-04 18:33:07', '2023-05-04 18:33:07'),
(505, 111, 35, 1, 2, 1, '2023-05-04 18:33:07', '2023-05-04 18:33:07'),
(506, 111, 40, 1, 2, 1, '2023-05-04 18:33:07', '2023-05-04 18:33:07'),
(507, 111, 41, 1, 2, 1, '2023-05-04 18:33:07', '2023-05-04 18:33:07'),
(508, 111, 42, 1, 2, 1, '2023-05-04 18:33:07', '2023-05-04 18:33:07'),
(509, 111, 43, 1, 2, 1, '2023-05-04 18:33:07', '2023-05-04 18:33:07'),
(510, 111, 44, 1, 2, 1, '2023-05-04 18:33:07', '2023-05-04 18:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` int(11) DEFAULT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuition` double(8,2) DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `yearlevel_id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `subject_code`, `unit`, `day`, `time`, `room`, `modality`, `teacher`, `tuition`, `course_id`, `yearlevel_id`, `semester_id`, `created_at`, `updated_at`) VALUES
(21, 'j', 'j', 89, '4', 'y', '45', '', 'w', 45.00, 1, 3, 1, '2023-04-27 05:38:09', '2023-04-27 05:38:09'),
(22, 'fdg', 'dfg', 54, 'we', 'sdf', 'sf', '', 's', 6.00, 1, 3, 1, '2023-04-27 05:38:19', '2023-04-27 05:38:19'),
(29, '1', '12345', 1, '1', '11', '1', '', '1', 1.00, 1, 1, 1, '2023-04-27 06:01:49', '2023-04-27 06:16:20'),
(30, '1', '45678', 11, '1', '1', '1', '', '1', 1.00, 1, 1, 1, '2023-04-27 06:01:59', '2023-04-27 06:16:36'),
(31, '1', '789', 1, '11', '1', '1', '', '11', 1.00, 1, 1, 1, '2023-04-27 06:02:06', '2023-04-27 06:16:45'),
(32, '1', '4', 1, '1', '1', '1', '', '1', 1.00, 1, 1, 1, '2023-04-27 06:02:13', '2023-04-27 06:02:39'),
(34, 'load testing hgyudw', 'jghs655', 3, 'MWF', '10am-1pm', '10', 'f2f', 'annabelel nadal', 5000.00, 1, 2, 1, '2023-04-27 06:03:26', '2023-05-01 02:35:52'),
(35, 'general mathematics', 'dfghg545', 3, 'WTF', '8AM-5PM', '2', 'f2f', 'laine sales', 4000.00, 1, 2, 1, '2023-04-27 06:03:34', '2023-05-01 02:36:57'),
(36, 'gyug', 'yy', 78, 'hjh', 'ghuh', 'jkh', '', 'hjhji', 67.00, 1, 4, 1, '2023-04-27 09:15:04', '2023-04-27 09:15:04'),
(37, 'kyt', 'yt6', 23, 'yugyu', 'ygtyt', 'yty', '', 'tyt', 34.00, 1, 4, 1, '2023-04-27 09:15:17', '2023-04-27 09:15:17'),
(40, 'sciene and technology', 'dghds54844', 3, 'SSM', '10am-2pm', '9', 'online', 'emmalyn serios', 7000.00, 1, 2, 1, '2023-05-01 02:38:56', '2023-05-01 02:47:54'),
(41, 'dfhtytreyrrer', '463658', 2, 'gtry54y', 'rtyerty', '56', 'f2f', 'dhtr', 4567.00, 1, 2, 1, '2023-05-02 05:10:49', '2023-05-02 05:10:49'),
(42, 'dhtrhrtyeetet', '86879879', 58, 'fyjuyt', 'drhey', 'erye', 'f2f', 'dht', 45.00, 1, 2, 1, '2023-05-02 05:11:03', '2023-05-02 05:11:03'),
(43, 'efhrtrt', '57867', 56, 'xfgdfg', 'dhyte', '45', '', 'fthrt', 756.00, 1, 2, 1, '2023-05-02 05:11:15', '2023-05-02 05:11:15'),
(44, 'ethtr', '75', 7586, 'hjy', 'htr', '6', 'online', 'fgjy', 42.00, 1, 2, 1, '2023-05-02 05:11:27', '2023-05-02 05:11:27'),
(45, 'gdhhdhhth', '53', 656, 'fghtr', 'yjutyjt', '5', '', 'jytyt', 357.00, 1, 2, 1, '2023-05-02 05:11:40', '2023-05-02 05:11:40'),
(46, 'ghyty', '56', 4535, 'gkukuy', 'hkuyu', '43', '', 'gjkyu', 43.00, 1, 2, 1, '2023-05-02 05:11:51', '2023-05-02 05:11:51'),
(47, 'ghrthrtt', '5', 5434, 'bhbjg', 'ghjyg', '1', '', 'hjg', 453.00, 1, 2, 1, '2023-05-02 05:12:03', '2023-05-02 05:12:03'),
(48, 'scvdfg', '453', 32, 'bmgh', 'fhj', '6', '', 'jk', 4563.00, 1, 2, 1, '2023-05-02 05:12:22', '2023-05-02 05:12:22'),
(49, 'fdghtr', '476', 56, 'gvhg', 'gkg', '53', '', 'fhj', 54.00, 1, 2, 1, '2023-05-02 05:12:34', '2023-05-02 05:12:34'),
(50, 'ghjkggu', '277', 433, 'hkgu', '4532', '222', '', 'vbjhj', 43.00, 1, 2, 1, '2023-05-02 05:12:48', '2023-05-02 05:12:48'),
(51, 'hfjf', '4545', 5354, 'johj', 'bjkj', '32', '', 'jkbhkbh', 45345.00, 1, 2, 1, '2023-05-02 05:13:21', '2023-05-02 05:13:21'),
(52, 'ghig', '53254', 422, 'hjv', 'jlhj', '253', '', 'hoh', 534.00, 1, 2, 1, '2023-05-02 05:13:31', '2023-05-02 05:13:31'),
(53, 'fhjh', '752', 757, 'fhth', 'xbdf', '752', 'online', 'dgdg', 752.00, 1, 2, 1, '2023-05-02 05:13:46', '2023-05-02 05:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usn` bigint(20) DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usn`, `first_name`, `last_name`, `username`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(100, NULL, 'admin', 'admin', 'admin', '$2y$10$nykzPCELP8U3cYnR21X4M.a6EBBKnNCpR65x46rWrStkaCjW/8mBO', '1', NULL, '2023-05-01 23:52:51', '2023-05-01 23:52:51'),
(101, 22000644400, 'Ma. Eliza Filipina', 'Beldad', '22000644400', '$2y$10$8Cs2HMKMCmcY9tQITsnOpe/72bjK.EvjXOQh6psPcd9Rt5W39TvgW', '0', NULL, '2023-05-01 23:56:36', '2023-05-01 23:56:36'),
(102, NULL, 'q', 'q', 'qqqqq', '$2y$10$K085GwaYbWvmoeBuUwYyie0IPZh7OcWH3VCnNVm1.X8sWS6p9gUMC', '0', NULL, '2023-05-02 00:10:51', '2023-05-02 00:10:51'),
(103, 18004097800, 'Julie ', 'Gueruela', '18004097800', '$2y$10$5AqGDp8fuEfsGIdb43UBNeu88M7CMrlXZbw7fJ1bqTk8RhfW6DK4.', '0', NULL, '2023-05-02 00:14:01', '2023-05-02 00:14:01'),
(104, NULL, 'ruel', 'perez', 'ruelperez', '$2y$10$SQ27tDAPWn.NWWaChh8zCO8O/W.ChR6vKubMcJXdRCGsNPRAXGcdK', '0', NULL, '2023-05-02 00:20:05', '2023-05-02 00:20:05'),
(105, 12003473800, 'LAINE MARIE', 'SALES', '12003473800', '$2y$10$Dx6vf3Kzzhr7kWqFSP5R5e/7RIsmwR.L2RfiorQhxTpaSf.Ns1Uhy', '0', NULL, '2023-05-02 05:41:42', '2023-05-02 05:41:42'),
(106, 19001038500, 'Joselyn', 'Castroverde', '19001038500', '$2y$10$E8.LNuNQj2ef7V6mbNzwCOIMVAn1d2NgzgGQx3H6irLR9omPP5fuK', '0', NULL, '2023-05-02 05:42:58', '2023-05-02 05:42:58'),
(107, NULL, 'K', 'K', 'kkkkk', '$2y$10$nlCFCeu4lVh8lJ1fATsiPuXP4t.Tp0yVugmAr4mVyeSDNJNVFvh7C', '0', NULL, '2023-05-02 22:26:47', '2023-05-02 22:26:47'),
(108, 16002306200, ' ALBERT R.', 'BELMONTE', '16002306200', '$2y$10$EvtwsDc7katn10UukBxtOetIQ52XHfBsQiBz48eY5yAfcnAAxznXW', '0', NULL, '2023-05-02 22:29:34', '2023-05-02 22:29:34'),
(109, 15000656200, 'JOSEPHINE P.', 'TANAY', '15000656200', '$2y$10$8AmnKPbl1/r6rhHh6tZtQeR3CVFxfCqP3i1DDX0sfyNqzSrDu1lzS', '0', NULL, '2023-05-02 23:25:03', '2023-05-02 23:25:03'),
(111, 17004144500, 'RUEL', 'PEREZ', '17004144500', '$2y$10$otcdmijmhJ30aO1nPOlrd.MO.kVPX377IY1BCanoQ5xkhWyM2QxQ6', '0', NULL, '2023-05-03 19:00:30', '2023-05-03 19:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `usn_lists`
--

CREATE TABLE `usn_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usn_lists`
--

INSERT INTO `usn_lists` (`id`, `fname`, `lname`) VALUES
(12003473800, 'LAINE MARIE', 'SALES'),
(15000656200, 'JOSEPHINE P.', 'TANAY'),
(16002129300, 'JOSEE WILMA C.', 'IBARRETA'),
(16002255900, 'EDGAR JR.', 'CABANBAN'),
(16002306200, ' ALBERT R.', 'BELMONTE'),
(16002564800, 'JENCY P.', 'TALAGTAG'),
(17001182900, 'SIMON  Ll.', 'ROGANDO'),
(17001906700, 'LEAN JOSHUA T.', 'SARMIENTO'),
(17001907400, 'JEFFREY V.', 'LAGDAAN'),
(17001911600, 'LAARNI C.', 'MAGNA'),
(17001912800, 'ANGELA PAULA G.', 'VIÑAS'),
(17002092400, 'ZYDEL B.', 'LULA'),
(17002197800, 'MIKEE C.', 'TAÑADA'),
(17002201600, 'MICHELLE', 'FERNANDEZ'),
(17002813600, 'JAYVEE C.', 'LAVAPIE'),
(17003040200, 'EDMARK', 'CORNELIO'),
(17003212600, 'JOHN BERN', 'BOLO'),
(17003213700, 'FAIZAL C.', 'REMPILLO'),
(17003315800, 'RONNIE', 'RODILAS'),
(17003594700, 'JAYSON S.', 'PRAXIDES'),
(17003596500, 'CARLA JOY I.', 'CATLI'),
(17003986700, 'LUCY E.', 'MAGISTRADO'),
(17003993600, 'MARY ROSE C.', 'SALAZAR'),
(17004144500, 'RUEL', 'PEREZ'),
(17004315600, 'BENHUR', 'TATARO'),
(17004361200, 'JOHN MICHAEL B.', 'PEÑAFLOR'),
(18002081400, 'Cyril', 'Marmol'),
(18002668900, 'JOHN TRISTAN D.', 'SILVA'),
(18003170800, 'MANUEL S.', 'MONGE'),
(18003533200, 'RON HEDWIG A.', 'ZAPE'),
(18004071200, 'Decy Amber', 'Baduria'),
(18004076800, 'JAMELA', 'NAVA'),
(18004077000, 'Roann', 'Nantez'),
(18004078400, 'ANGELI C.', 'CADAG'),
(18004079700, 'Nicky Jacintha', 'Masotes'),
(18004080900, 'JESSEBEL B.', 'BATAN'),
(18004081300, 'LUIMHAR D.', 'BERIÑA'),
(18004082000, 'CEDRICK C.', 'EMBESTRO'),
(18004082300, 'HANS JASPER D.', 'LABIOS'),
(18004082900, 'EARL JAMES A.', 'ACAL'),
(18004083300, 'Josie', 'Negado'),
(18004086300, 'Franzel', 'Scarella'),
(18004086600, 'ANGELEN B.', 'PRAXIDES'),
(18004089200, 'MA. ADA KRIZETTE D.', 'ALFELOR'),
(18004095000, 'Mark Anthony', 'Corong'),
(18004097800, 'Julie LL.', 'Gueruela'),
(18004103400, 'Goldi Adrienne L.', 'Parro'),
(18004302400, 'JAPHET H', 'ESCOREL'),
(18004409500, 'BERNA', 'ZUÑIGA'),
(18004421600, 'PAULINE DANIELLE', 'POMASIN'),
(19000941700, 'Simoun Angelo', 'Dimabogte'),
(19000991600, 'Mark Luigie', 'Espiritu'),
(19001038500, 'Joselyn', 'Castroverde'),
(19001756400, ' Roschelle B.', 'Villar'),
(19001816100, 'Neri T.', 'Manchete'),
(19001898800, 'Evelyn', 'Etomay'),
(19001903200, 'Angeline', 'Balbuena'),
(19002406000, 'Camille', 'Delfino'),
(19002485300, 'Florence', 'Miralpes'),
(19002631100, 'Ma, Clarisse Z.', 'Folloso'),
(19002651700, 'Jhon Paul L.', 'Felices'),
(19002962500, 'Jhoanna Rose', 'Paz'),
(19003186700, 'Jaysan', 'Pontillas'),
(19003187900, 'CYNEL COWEN L.', 'TADURAN'),
(19003188600, 'Brian', 'Rebancos'),
(19003193200, 'Gwyneth Avriele', 'Lagyap'),
(19003205900, 'Kassandra J.', 'Flor'),
(19003315000, 'Rizaline', 'Bonilla'),
(19003411200, 'Joven', 'Aguilar'),
(19003864000, 'METHUSELAH A.', 'TAN'),
(19003866200, 'JONALYN S.', 'PENOLIO'),
(19003867400, 'April Anne ', 'Cadag'),
(19003905000, 'SARAH MAE M.', 'TUYAY'),
(19003997300, 'MALVIN R.', 'VILLAFLOR'),
(19004046600, 'Ahngelo', 'Baylon'),
(19004197900, 'GINALYN M.', 'PARPAN'),
(19004198700, 'GEMA R.', 'BUGTONG'),
(19004199000, 'JESSA R.', 'CERENO'),
(19004199300, 'JENALYN N.', 'CURATIVO'),
(19004199700, 'ALEXHANDRIA WINE A.', 'VARGAS'),
(19004286100, 'RON ANDREW S.', 'VILLALUZ'),
(19004325000, 'MARY JOY E.', 'ARGARIN'),
(19004327100, 'JHANXENT C.', 'ALVARADO'),
(19004342700, 'ZYRA MAE G.', 'CABALTERA'),
(19004377500, 'RECHELLE T.', 'GABARDA'),
(19004377600, 'SHEILA MAE M.', 'ONGOG'),
(19004378000, 'Sweet Honeylet', 'Ramos'),
(19004424800, 'GELLA MAE M.', 'ONGOG'),
(19004425100, 'BENJIE C.', 'MONDIA'),
(19004502300, 'Magistrado, Princess Janeille', 'Magistrado'),
(20001966800, 'Mark Anthony P.', 'Ampongan'),
(20001967500, 'Michael James I.', 'Evallar'),
(20001967900, 'Leighmae Ciedel F.', 'Estadilla'),
(20001968500, 'John Paul T.', 'Magayanes'),
(20001968600, 'John Roy B.', 'Bricenio'),
(20001968800, 'Julius P.', 'Nava'),
(20001995500, 'Princess Jaycel R.', 'Ibarreta'),
(20002048600, 'Resabel C', 'Olaso'),
(20002228400, 'Angelo Sandel S.', 'Baesa'),
(20002336300, 'Marl Angelo T.', 'Doroteo'),
(20002339600, 'Althea G.', 'De Villa'),
(20002672000, 'Fritz Gerard S.', 'Olaso'),
(20002697900, 'CARLOS MARVIN S.', 'TANAY'),
(20002849300, 'RACHELLE LOUD V.', 'RIVERA'),
(20002849500, 'JETRO G.', 'BAGASALA'),
(20002956300, 'MA. ANGELICA P.', 'OJERA'),
(20002961700, 'Kathleen M.', 'Garcia'),
(20003001700, 'SHIELA MARIE F.', 'BALBUENA'),
(21000382600, 'Zhia', 'Villaflor'),
(21000425100, 'Salvacion', 'Penilla'),
(21000465300, 'Jean B.', 'Ayen'),
(21000465600, 'Felma', 'Colico'),
(21000466100, 'John Michael', 'De Villa'),
(21000475320, 'Melissa', 'Morada'),
(21000475700, 'Julie Ann', 'Aquino'),
(21000475900, 'Maria', 'Lorzano'),
(21000479300, 'Ronna May', 'Sumpay'),
(21000499300, 'Marianne', 'Bernardo'),
(21000499900, ' Mary joy', 'Sergio'),
(21000506200, 'Shrel John', 'Castilla'),
(21000506900, 'Filma', 'Baluca'),
(21000530000, 'Kris Jane', 'Cabilan'),
(21000530500, 'Danly', 'Perdigon'),
(21000573400, 'Mae-Ann', 'Canton'),
(21000633200, 'Bea Andrei', 'Roy'),
(21000633300, 'Jericho', 'Rafael'),
(21000633400, 'Gelie', 'Veras'),
(21000656100, 'Ma. Leny', 'Agapito'),
(21000656800, 'Marilou', 'Gloria'),
(21000691900, 'John Laurence', 'Relles'),
(21000692000, 'Arvin ', 'Escobar'),
(21000692100, 'Llagas III, Rudy', 'Llagas III'),
(21000795600, 'Jasmine Rose', 'Osana'),
(21000801700, 'Eman Jaisuz', 'Monte'),
(21000804300, 'Nerline', 'Broncano'),
(21000827900, 'Flordeliza', 'Manaog'),
(21000849300, 'Ma. Dimple', 'Padrigone'),
(21000852800, 'Shiela Mae', 'Bertumen'),
(21000914700, 'Gracelyn', 'Galopa'),
(21000923600, 'Shaine A.', 'Ebrada'),
(21000923900, 'Mel Angelo', 'Vallejo'),
(21000974800, 'Gonzales, Shiela Marie', 'Gonzales'),
(21000982400, 'Rayjemil', 'Edradan'),
(21000983300, 'Angelo', 'Gonowon'),
(21000995600, 'Joshua', 'Bermas'),
(21001003500, 'John Louie', 'Navales'),
(21001016100, 'Justine', 'Rodriguez'),
(21001016700, 'John Henry', 'Obelidor'),
(21001016900, 'Gonzaga, Charles Harvey', 'Gonzaga'),
(21001117900, 'Marites', 'Camacho'),
(21001238800, 'Hariette ', 'Manchete'),
(21001268400, 'Sian Kyle ', 'De la rosa'),
(21001268600, 'Ma. Catherine Joy R.', 'Turalde'),
(21001329400, 'Joan B.', 'Llagas'),
(22000644400, 'Ma. Eliza Filipina P.', 'Beldad'),
(22000644900, 'Princess Mae G.', 'Quiaño'),
(22000645200, 'Sunshine M.', 'Muñoz'),
(22000646800, 'Ires N.', 'Dio'),
(22000648100, 'John Rey E.', 'Bongcayao'),
(22000651900, 'Kristine Jeire E.', 'Dela Cruz'),
(22000761700, 'Ericson M.', 'Rivera'),
(22000768200, 'Ronelyn A.', 'Presentacion'),
(22000769100, 'John Gabriel', 'Corvera'),
(22000773600, 'Mark Christian L.', 'Manaog'),
(22000808400, ' Analyn T.', 'Magistrado'),
(22000895700, 'Kimberly S.', 'Folledo'),
(22000895900, 'Sean Glenn S.', 'Macapagat'),
(22000952300, 'Jenecel N.', 'Paz'),
(22000952500, 'Jamaica Mae C.', 'Buena'),
(22000964100, 'Nylavoj M.', 'Enriquez'),
(22001046900, 'Romelda L.', 'Daet'),
(22001073700, 'Apollo Jr. S.', 'Barela'),
(22001073900, 'John Rey L.', 'Ronda'),
(22001074100, 'Gerald B.', 'Sabinorio'),
(22001078400, 'Niño Allain Glecer O.', 'Borromeo'),
(22001107200, 'Trixie Ann B.', 'Ofalsa'),
(22001230600, 'Yuri P.', 'Adesas'),
(22001312700, 'Mary Rose R.', 'Sadullo'),
(22001347400, 'Karyll Myra', 'Bagalihog'),
(22001374600, 'Abegail N.', 'Espanto'),
(112837070025, 'JONEL M.', 'DAZA');

-- --------------------------------------------------------

--
-- Table structure for table `yearlevels`
--

CREATE TABLE `yearlevels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `yearlevels`
--

INSERT INTO `yearlevels` (`id`, `level`, `created_at`, `updated_at`) VALUES
(1, '1st', NULL, NULL),
(2, '2nd', NULL, NULL),
(3, '3rd', NULL, NULL),
(4, '4th', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fill_ups`
--
ALTER TABLE `fill_ups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_subjects`
--
ALTER TABLE `student_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_password_unique` (`password`);

--
-- Indexes for table `usn_lists`
--
ALTER TABLE `usn_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yearlevels`
--
ALTER TABLE `yearlevels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fill_ups`
--
ALTER TABLE `fill_ups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_subjects`
--
ALTER TABLE `student_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=520;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `usn_lists`
--
ALTER TABLE `usn_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112837070028;

--
-- AUTO_INCREMENT for table `yearlevels`
--
ALTER TABLE `yearlevels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
