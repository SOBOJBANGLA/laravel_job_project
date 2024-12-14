-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2024 at 02:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_abd_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$dmRs6DGirUokaBaV9lD75.mD1W7jg9nFdNyzFm72/Gw.0VqqGD8p.', NULL, '2024-12-01 04:58:08', '2024-12-01 04:58:08');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cv` varchar(50) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `employeer_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Apply Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `name`, `email`, `contact`, `cv`, `candidate_id`, `job_id`, `employeer_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 'MD.ABDULLAH', 'abuhmdabdullah72@gmail.com', '01624632072', 'images/20241209014756.pdf', 1, 11, 15, 'Apply Decline', '2024-12-08 19:47:56', '2024-12-09 23:57:13'),
(4, 'A.S.M Abdullah', 'mamun@gmail.com', '1234567895', 'images/20241209122903.pdf', 5, 7, 15, 'Apply Approved', '2024-12-09 06:29:03', '2024-12-09 23:42:48'),
(5, 'A.S.M Abdullah', 'mamun@gmail.com', '1234567895', 'images/20241209124449.pdf', 5, 12, 15, 'pending', '2024-12-09 06:44:49', '2024-12-09 06:44:49'),
(6, 'A.S.M Abdullah', 'mamun@gmail.com', '1234567895', 'images/20241209125104.pdf', 5, 9, 9, 'pending', '2024-12-09 06:51:04', '2024-12-09 06:51:04'),
(7, 'A.S.M Abdullah', 'mamun@gmail.com', '1234567895', 'images/20241209141600.pdf', 5, 10, 15, 'Apply Approved', '2024-12-09 08:16:00', '2024-12-09 23:59:22'),
(8, 'MD.ABDULLAH', 'abuhmdabdullah72@gmail.com', '01624632072', 'images/20241209141722.pdf', 1, 8, 15, 'pending', '2024-12-09 08:17:22', '2024-12-09 08:17:22'),
(9, 'Hasib Ahmed', 'hasib@gmail.com', '012546789', 'images/20241209164810.pdf', 2, 7, 15, 'Pending Apply', '2024-12-09 10:48:10', '2024-12-09 23:15:19'),
(10, 'Noman Abdullah', 'noman@gmail.com', '215455', 'images/20241209182037.pdf', 7, 6, 6, 'pending', '2024-12-09 12:20:37', '2024-12-09 12:20:37'),
(11, 'A.S.M Abdullah', 'abuhmdabdullah72@gmail.com', '1234567895', 'images/20241211135643.pdf', 1, 13, 15, 'Apply Approved', '2024-12-11 07:56:43', '2024-12-11 07:58:24'),
(12, 'A.S.M Abdullah', 'abuhmdabdullah72@gmail.com', '1234567895', 'images/20241212135116.pdf', 1, 10, 15, 'Apply Pending', '2024-12-12 07:51:16', '2024-12-12 07:51:16'),
(13, 'A.S.M Abdullah', 'abuhmdabdullah72@gmail.com', '1234567895', 'images/20241212135728.pdf', 1, 10, 15, 'Apply Pending', '2024-12-12 07:57:28', '2024-12-12 07:57:28'),
(14, 'Kabir Ahmed', 'kabir@gmail.com', '01624632072', 'images/20241212141702.pdf', 4, 15, 15, 'Apply Pending', '2024-12-12 08:17:02', '2024-12-12 08:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_details`
--

CREATE TABLE `candidate_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f_name` varchar(20) DEFAULT NULL,
  `l_name` varchar(20) DEFAULT NULL,
  `occupation` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `about` varchar(300) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `bio` varchar(50) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_details`
--

INSERT INTO `candidate_details` (`id`, `f_name`, `l_name`, `occupation`, `phone`, `address`, `about`, `image`, `bio`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(6, 'MD.', 'Yousuf Mollah', 'WD', NULL, 'Dhaka,Bangladesh', 'aaaaaaaaaaaaa', 'images/20241207171556.jpg', 'images/20241207171556.pdf', 3, 1, '2024-12-07 11:15:56', '2024-12-07 11:15:56'),
(10, 'Hasib', 'Ahmed', 'WD', '012546789', 'Dhaka', 'dddddddddd', 'images/20241209164733.jpg', 'images/20241207175039.pdf', 2, 1, '2024-12-07 11:50:39', '2024-12-09 10:47:33'),
(12, 'Kabir', 'Ahmed', 'WD', '01624632072', 'jjjjjjjjjjjjjjjjj', 'llllllllllllllllllllllll', 'images/20241207180024.jpg', 'images/20241207180024.pdf', 4, 1, '2024-12-07 12:00:24', '2024-12-07 12:00:24'),
(13, 'Masud', 'Kamal', 'WD', '02154699777', 'ggggggggggggg', 'ddddddddddddddrr', 'images/20241208121154.jpg', 'documents/20241208121154.pdf', 5, 1, '2024-12-07 12:28:50', '2024-12-08 06:11:54'),
(14, 'Kawsar', 'Ahmed', 'WD', '012345678', 'ggggggggggggg', 'hhhhhhhhhhhh', 'images/20241208115701.jpg', 'documents/20241208115701.pdf', 6, 1, '2024-12-08 05:21:06', '2024-12-08 05:57:01'),
(15, 'Abu Saleh', 'Abdullah', 'WD', '2154699777', 'aaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbb', 'images/20241208125518.jpg', 'documents/20241208125518.pdf', 1, 1, '2024-12-08 06:54:44', '2024-12-08 06:55:18'),
(16, 'Noman', 'Abdullah', 'WD', '01234567897', 'Basabo,Dhaka', 'gggggggggg', 'images/20241208125946.jpg', 'images/20241208125923.pdf', 7, 1, '2024-12-08 06:59:23', '2024-12-08 06:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Accounting', '2024-12-01 05:04:01', '2024-12-01 05:04:01'),
(2, 'Banking', '2024-12-01 05:04:17', '2024-12-01 05:04:17'),
(3, 'Teaching', '2024-12-03 10:44:23', '2024-12-03 10:44:23'),
(4, 'Web Development', '2024-12-05 21:35:34', '2024-12-05 21:35:34');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`, `created_at`, `updated_at`) VALUES
(1, 'City Ltd', 'Dhaka', '2024-12-01 05:03:13', '2024-12-01 05:03:13'),
(2, 'Bashundhara Ltd', 'Dhaka', '2024-12-01 05:03:41', '2024-12-01 05:03:41'),
(4, 'Hashim Group', 'Savar,Dhaka', '2024-12-02 05:05:16', '2024-12-02 05:05:16'),
(5, 'Jakir Group', 'Chittagong', '2024-12-02 19:25:03', '2024-12-02 19:25:03'),
(6, 'Taskin Group', 'Dhaka', '2024-12-02 19:32:00', '2024-12-02 19:32:00'),
(7, 'Cumilla Mordern School', 'Cumilla', '2024-12-03 10:43:55', '2024-12-03 10:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `comment`, `candidate_id`, `created_at`, `updated_at`) VALUES
(1, 'A.S.M ABDULLAH WAZI ULLAH', 'abuhmdabdullah72@gmail.com', 'job', 'gggggggg', 1, '2024-12-12 23:40:01', '2024-12-12 23:40:01'),
(2, 'A.S.M ABDULLAH', 'abuhmdabdullah72@gmail.com', 'job', 'gggggggg', 1, '2024-12-13 00:03:33', '2024-12-13 00:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `employeers`
--

CREATE TABLE `employeers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employeers`
--

INSERT INTO `employeers` (`id`, `name`, `company_id`, `email`, `password`, `photo`, `location_id`, `description`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Samir Hasan', 1, 'samir@gmail.com', '$2y$10$gmlzxEG/.UDKXOTILcE.qeWEIvX1G35.1jvK2sM12/bjNoyYzRJei', 'images/20241201130040.jpg', 1, 'aaaaaaaaaaaaaaaaaa', NULL, 'active', '2024-12-01 07:00:40', '2024-12-01 07:00:40'),
(6, 'Abir Mahmud', 1, 'abir@gmail.com', '$2y$10$FwXxAbHjBBIqzXLoL/NOX.lJQgAMxuDDFIO/HFMWL/NreuRdFsVC6', 'images/20241201170205.jpg', 2, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaeeeeeeeeeeeeeee', NULL, 'active', '2024-12-01 11:02:05', '2024-12-01 11:02:05'),
(9, 'Hashim', 4, 'hashim@gmail.com', '$2y$10$xnlOFRfifhREWIf4gkD41OMeFO8CmDVcqgMTzw9p/niQM0KzEL0bq', 'images/20241202110642.jpg', 3, 'hhhhhhhhhhhhhhhh', NULL, 'active', '2024-12-02 05:06:43', '2024-12-02 05:06:43'),
(11, 'Habibb', 2, 'habib@gmail.com', '$2y$10$QMmbflpSgWoargpn4N4Rv.JpwEYjVMsuLsX3S83VavR8fMYx.kKJi', 'images/20241202141305.jpg', 1, 'fffffffffff', NULL, 'active', '2024-12-02 08:12:24', '2024-12-02 08:13:05'),
(12, 'Babul', 2, 'babul@gmail.com', '$2y$10$PTsVWul897h3SOsFAgYamOzHfxiMYJvs1aqE7ATD5P/GOds7blyEO', 'images/20241202141744.jpg', 1, 'fffffffffff', NULL, 'active', '2024-12-02 08:15:17', '2024-12-02 08:17:44'),
(15, 'Jakir Khan', 5, 'jakir@gmail.com', '$2y$10$JVU2yJMieGdefMI2s96N.eZFE4C/Un5BGLH4aENS6zQkdlAIxE4vK', 'images/20241203012629.jpg', 4, 'jjjjjjjjjjjjjjj', NULL, 'active', '2024-12-02 19:26:29', '2024-12-02 19:26:29'),
(16, 'Taskin Ahmed', 6, 'taskin@gmail.com', '$2y$10$OxcHhK0/yO3iIlzRbtCLRevSTAxEiTmBRYo.rIfV2Y3BD6eCZMP36', 'images/20241203013346.jpg', 1, 'tttttttttttttttttttttttttttttttttt', NULL, NULL, '2024-12-02 19:32:43', '2024-12-02 19:33:46'),
(17, 'Kabir', 2, 'kabir@gmail.com', '$2y$10$gLz3EHaDVnXueteLqKQV2OsjSY0vw0xcMbA0TSVb/qpB9Xlj1eKey', 'images/20241203103947.jpg', 2, 'kkkkkkkkkkkk', NULL, 'active', '2024-12-03 04:39:47', '2024-12-03 04:39:47'),
(18, 'Abdullah', 4, 'asm@gmail.com', '$2y$10$JumaMGsztQvTm6Xqbu4RO.u0.yShtgXwGz0FHtrAQMTwSvDCoHCEK', 'images/20241203122343.jpg', 2, 'assddddddddddd', NULL, NULL, '2024-12-03 04:43:04', '2024-12-03 06:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `employeer_id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `jobtype_id` bigint(20) UNSIGNED NOT NULL,
  `vacancy` int(11) NOT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `benefits` text DEFAULT NULL,
  `responsibility` text DEFAULT NULL,
  `qualifications` text DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `experience` varchar(255) NOT NULL,
  `company_website` varchar(255) DEFAULT NULL,
  `job_end_date` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `isFeatured` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `employeer_id`, `company_id`, `location_id`, `category_id`, `jobtype_id`, `vacancy`, `salary`, `description`, `benefits`, `responsibility`, `qualifications`, `keywords`, `experience`, `company_website`, `job_end_date`, `status`, `isFeatured`, `created_at`, `updated_at`) VALUES
(1, 'Senior Officer', 3, 1, 1, 1, 1, 5, '20000', 'ddddddddd', 'bbbbbbbbbb', 'rrrrrrrrrrr', 'qqqqqqqqqqq', 'kkkkkkkkk', '2 Years', 'www.city.ltd', '2024-12-16 00:00:00', 1, 0, '2024-12-01 05:06:58', '2024-12-02 06:27:42'),
(4, 'Cashier', 18, 4, 1, 1, 1, 2, '20000', 'dddddddddddddd', 'bbbbbbbbbbbbbb', 'ddddddd', 'qqqqqqqqqqqq', 'kkkkkkkkkkkkkkk', '2 Years', 'www.fff.com', '2024-12-10 00:00:00', 1, 0, '2024-12-03 08:41:24', '2024-12-03 09:58:37'),
(6, 'Sr.Officer', 6, 4, 1, 2, 1, 5, '25000', 'ttttt', 'eeee', 'yyyyyy', 'uuuuuuu', 'ooooooo', '2', 'www.hhee.com', '2024-12-09 00:00:00', 1, 0, '2024-12-03 10:42:03', '2024-12-03 10:42:03'),
(7, 'Headmaster', 15, 7, 5, 3, 1, 1, '27000', 'rrrrr', 'tttt', 'yyyyy', 'aaaa', 'ddd', '2', 'www.mordern.school', '2024-12-16 00:00:00', 1, 0, '2024-12-03 10:46:58', '2024-12-03 10:49:00'),
(8, 'Teacher(Bangla)', 15, 7, 5, 3, 1, 2, '20000', 'eeee', 'rrrrrr', 'wwww', 'ddddd', 'eeeeee', '2', 'www.hhh.com', '2024-12-24 00:00:00', 1, 0, '2024-12-03 10:50:17', '2024-12-03 10:50:17'),
(9, 'Cashier', 9, 6, 3, 1, 1, 2, '20000', 'ddddd', 'bbb', 'rrrrrrr', 'qqqqq', 'kkkk', '2 Years', 'www.fff.com', '2024-12-16 00:00:00', 1, 0, '2024-12-03 12:34:32', '2024-12-03 12:34:32'),
(10, 'Junior Developer', 15, 5, 4, 4, 2, 2, '20000', 'sssssssssss', 'bbbbbbbbbbb', 'rrrrrrrrrrrrrrr', 'qqqqqqqqqqqqqqq', 'kkkkkkkkkkkkkk', '0', 'www.jakir.com', '2024-12-18 00:00:00', 1, 0, '2024-12-05 21:37:38', '2024-12-05 21:37:38'),
(11, 'Senior Developer', 15, 5, 2, 4, 4, 15, '25000', 'ffffffff', 'tttttttttt', 'eeeeeeeeee', 'qqqqqqqqqqq', 'fffffffffffff', '2', 'www.jakir.com', '2024-12-27 00:00:00', 1, 0, '2024-12-05 21:42:11', '2024-12-05 21:42:11'),
(12, 'Senior Developer', 15, 5, 4, 4, 1, 2, '40000', 'fffffffffff', 'eeeeeeeeee', 'ttttttttt', 'wwwwwwwww', 'tyyyyyyyyy', '2', 'www.jakir.com', '2024-12-25 00:00:00', 1, 1, '2024-12-05 21:45:54', '2024-12-11 07:41:47'),
(13, 'Teacher(English)', 15, 5, 2, 3, 1, 6, '21000', 'fffffffffff', 'gggggggggg', 'rrrrrrrrrrrrr', 'wwwwwwwwwwwwww', 'eeeeee', '2 Year', 'www.jakir.com', '2024-12-24 00:00:00', 1, 1, '2024-12-11 07:45:23', '2024-12-11 07:48:57'),
(14, 'Junior operator', 15, 5, 1, 2, 1, 2, '12000', 'ggggg', 'ttt', 'yyyyyy', 'uuuuuuuu', 'rrrrrrrr', '2 Years', 'www.jakir.com', '2024-12-24 00:00:00', 0, 1, '2024-12-11 07:50:24', '2024-12-11 07:51:36'),
(15, 'Trainee Officer', 15, 5, 3, 2, 1, 2, '20000', 'dddddd', 'bbbbbb', 'rrrrrrrrr', 'qqqqqqqq', 'kkkkkkkkk', '0', 'www.jakir.com', '2024-12-24 00:00:00', 1, 1, '2024-12-12 08:10:49', '2024-12-12 08:15:28');

-- --------------------------------------------------------

--
-- Table structure for table `jobtypes`
--

CREATE TABLE `jobtypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jobtype_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobtypes`
--

INSERT INTO `jobtypes` (`id`, `jobtype_name`, `created_at`, `updated_at`) VALUES
(1, 'Full Time', '2024-12-01 05:04:37', '2024-12-01 05:04:37'),
(2, 'Part Time', '2024-12-01 05:04:58', '2024-12-01 05:04:58'),
(3, 'Mid Time', '2024-12-05 20:32:42', '2024-12-05 20:32:42'),
(4, 'Freelancer', '2024-12-05 20:33:05', '2024-12-05 20:33:05');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location_name`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', '2024-12-01 05:05:32', '2024-12-01 05:05:32'),
(2, 'Cumilla', '2024-12-01 05:05:47', '2024-12-01 05:05:47'),
(3, 'Savar,Dhaka', '2024-12-02 05:05:40', '2024-12-02 05:05:40'),
(4, 'Chittagong', '2024-12-02 19:25:30', '2024-12-02 19:25:30'),
(5, 'Noakhali', '2024-12-03 10:44:40', '2024-12-03 10:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2024_11_20_161300_create_companies_table', 4),
(15, '2024_11_20_174652_create_companys_table', 5),
(21, '2014_10_12_000000_create_users_table', 6),
(22, '2014_10_12_100000_create_password_reset_tokens_table', 6),
(23, '2019_08_19_000000_create_failed_jobs_table', 6),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 6),
(25, '2024_11_19_161348_create_admins_table', 6),
(26, '2024_11_19_172024_create_employeers_table', 6),
(27, '2024_11_21_000752_create_companies_table', 6),
(28, '2024_11_27_130701_create_categories_table', 6),
(29, '2024_11_27_134635_create_jobtypes_table', 6),
(30, '2024_11_29_052128_create_jobs_table', 6),
(31, '2024_11_29_060605_create_locations_table', 6),
(32, '2024_12_03_140842_alter_jobs_table', 7),
(33, '2024_12_07_115709_create_candidate_details_table', 8),
(34, '2024_12_08_153941_create_applicants_table', 9),
(35, '2024_12_10_041828_alter_applicants_table', 10),
(36, '2024_12_11_131955_alter_jobs_table', 11),
(37, '2024_12_13_045133_create_contacts_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MD.ABDULLAH', 'abuhmdabdullah72@gmail.com', NULL, '$2y$10$OA9Mc6TiQZ8qNE.RmtE3KOox0D.Pus.toaqqe/xMKDbonVjDFUUzq', NULL, '2024-12-05 07:14:59', '2024-12-05 07:14:59'),
(2, 'Hasib', 'hasib@gmail.com', NULL, '$2y$10$WybFottHrPfMsQJ3ULQfBegFNvr.7E100ForSU46l5a16MX9HXibW', NULL, '2024-12-05 07:52:24', '2024-12-05 07:52:24'),
(3, 'Yousuf Mollah', 'yousuf@gmail.com', NULL, '$2y$10$BZFQG5/ssRGITWz8Ht17YuJhpdNZP0viSjALCHskMkq052ealcek6', NULL, '2024-12-07 11:13:49', '2024-12-07 11:13:49'),
(4, 'Kabir', 'kabir@gmail.com', NULL, '$2y$10$Rr7d9hjE/ECK7SnLq9HZ6ei2MpUTwkaNrm7Louc1eqPpN1tXnduw2', NULL, '2024-12-07 11:56:06', '2024-12-07 11:56:06'),
(5, 'Masud Kamal', 'mamun@gmail.com', NULL, '$2y$10$plOZTKQCkbC5c0y4SWcmSeIzYsgEMTqoKuDO8NsvVg/EuuZNaTl0K', NULL, '2024-12-07 12:26:24', '2024-12-07 12:26:24'),
(6, 'Kawsar', 'kawsar@gmail.com', NULL, '$2y$10$s97h2g0Y51t6unZELgOO5.G/fYx4qwomxzviKZgd/bpmvv7vOWizm', NULL, '2024-12-08 05:19:20', '2024-12-08 05:19:20'),
(7, 'Noman', 'noman@gmail.com', NULL, '$2y$10$/T0NmUkwt5.j/yNjguVmMuEsXDY/sFLniZBdVOP/uYrkpxZmVeVZS', NULL, '2024-12-08 06:57:52', '2024-12-08 06:57:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_details`
--
ALTER TABLE `candidate_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeers`
--
ALTER TABLE `employeers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employeers_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobtypes`
--
ALTER TABLE `jobtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `candidate_details`
--
ALTER TABLE `candidate_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employeers`
--
ALTER TABLE `employeers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jobtypes`
--
ALTER TABLE `jobtypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
