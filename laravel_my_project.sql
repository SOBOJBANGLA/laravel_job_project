-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 04:24 AM
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
-- Database: `laravel_my_project`
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
(1, 'Test User', 'admin@gmail.com', '$2y$10$dmRs6DGirUokaBaV9lD75.mD1W7jg9nFdNyzFm72/Gw.0VqqGD8p.', NULL, '2024-12-01 04:58:08', '2024-12-01 04:58:08');

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
(2, 'Banking', '2024-12-01 05:04:17', '2024-12-01 05:04:17');

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
(6, 'Taskin Group', 'Dhaka', '2024-12-02 19:32:00', '2024-12-02 19:32:00');

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
(9, 'Hashim', 4, 'hashim@gmail.com', '$2y$10$xnlOFRfifhREWIf4gkD41OMeFO8CmDVcqgMTzw9p/niQM0KzEL0bq', 'images/20241202110642.jpg', 3, 'hhhhhhhhhhhhhhhh', NULL, 'active', '2024-12-02 05:06:43', '2024-12-02 05:06:43'),
(11, 'Habibb', 2, 'habib@gmail.com', '$2y$10$QMmbflpSgWoargpn4N4Rv.JpwEYjVMsuLsX3S83VavR8fMYx.kKJi', 'images/20241202141305.jpg', 1, 'fffffffffff', NULL, 'active', '2024-12-02 08:12:24', '2024-12-02 08:13:05'),
(12, 'Babul', 2, 'babul@gmail.com', '$2y$10$PTsVWul897h3SOsFAgYamOzHfxiMYJvs1aqE7ATD5P/GOds7blyEO', 'images/20241202141744.jpg', 1, 'fffffffffff', NULL, 'active', '2024-12-02 08:15:17', '2024-12-02 08:17:44'),
(14, 'Abdullah Sanii', 1, 'asm@gmail.com', '$2y$10$vpY0GyScOYlDv.zwGicVr.XkYt2EBueV/KWuDE7dTqsztlNyg1Gpe', 'images/20241203025417.jpg', 1, 'jfjlkaoeo,mfd;preorepfkfvvv', NULL, NULL, '2024-12-02 18:43:19', '2024-12-02 20:54:17'),
(15, 'Jakir Khan', 5, 'jakir@gmail.com', '$2y$10$JVU2yJMieGdefMI2s96N.eZFE4C/Un5BGLH4aENS6zQkdlAIxE4vK', 'images/20241203012629.jpg', 4, 'jjjjjjjjjjjjjjj', NULL, 'active', '2024-12-02 19:26:29', '2024-12-02 19:26:29'),
(16, 'Taskin Ahmed', 6, 'taskin@gmail.com', '$2y$10$OxcHhK0/yO3iIlzRbtCLRevSTAxEiTmBRYo.rIfV2Y3BD6eCZMP36', 'images/20241203013346.jpg', 1, 'tttttttttttttttttttttttttttttttttt', NULL, NULL, '2024-12-02 19:32:43', '2024-12-02 19:33:46'),
(17, 'Saifdd', 1, 'saif@gmail.com', '$2y$10$V9bjqq.tddf4EN950XH2teeywRL3gSAkgQg20yMq7GnVdnHNOrZLC', 'images/20241203025158.jpg', 1, 'dddddddddddd', NULL, 'active', '2024-12-02 20:51:35', '2024-12-02 20:51:58'),
(18, 'Joyyyyyyvvvvii', 2, 'joy@gmail.com', '$2y$10$FJ3u0ZAHGsY46umUp6nqZeh2RMhX/3Ns0G79afHlKaB2FvLNFgCNK', 'images/20241203031615.jpg', 2, 'aaaaaaaaaaaaaaaaaavvccc', NULL, NULL, '2024-12-02 20:56:14', '2024-12-02 21:16:15'),
(19, 'Arifff', 4, 'arif@gmail.com', '$2y$10$dW47Wnn6bFByagLk5YTT0OxqBuuSY0UH7GfPm7yEGJbCRvbu/RB4i', 'images/20241203032306.jpg', 2, 'jjjjjjjjjjjjjj', NULL, NULL, '2024-12-02 21:21:13', '2024-12-02 21:23:06');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `company_id`, `location_id`, `category_id`, `jobtype_id`, `vacancy`, `salary`, `description`, `benefits`, `responsibility`, `qualifications`, `keywords`, `experience`, `company_website`, `job_end_date`, `created_at`, `updated_at`) VALUES
(1, 'Senior Officer', 1, 1, 1, 1, 5, '20000', 'ddddddddd', 'bbbbbbbbbb', 'rrrrrrrrrrr', 'qqqqqqqqqqq', 'kkkkkkkkk', '2 Years', 'www.city.ltd', '2024-12-16 00:00:00', '2024-12-01 05:06:58', '2024-12-02 06:27:42'),
(2, 'Audit officer', 1, 1, 1, 1, 3, '20000', 'dddddddddvvv', 'bbbbbbbbccc', 'rrrrrrrrrraa', 'qqqqqqqqqqee', 'kkkkkkkkktt', '2 Years', 'www.city.ltd', '2024-12-09 00:00:00', '2024-12-02 06:20:54', '2024-12-02 06:24:12');

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
(2, 'Part Time', '2024-12-01 05:04:58', '2024-12-01 05:04:58');

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
(4, 'Chittagong', '2024-12-02 19:25:30', '2024-12-02 19:25:30');

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
(31, '2024_11_29_060605_create_locations_table', 6);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employeers`
--
ALTER TABLE `employeers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobtypes`
--
ALTER TABLE `jobtypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
