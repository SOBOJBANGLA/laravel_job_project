-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2024 at 01:40 AM
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
(1, 'Test User', 'admin@gmail.com', '$2y$10$L7dY4w9pKb1.RA5xN4lZ7OYmhVQje/oPTB2LLUTon/wHIJndlID22', NULL, '2024-11-20 12:18:33', '2024-11-20 12:18:33');

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
(1, 'delectus quidem repellendus', 'quis ut rem eaque ducimus dolores et et doloribus asperiores in sint et reiciendis sequi', '2024-11-20 18:34:22', '2024-11-20 18:34:22'),
(2, 'voluptatem sapiente quia', 'consequatur facere quisquam provident et voluptas consequatur odio autem dignissimos qui non quo similique perspiciatis', '2024-11-20 18:34:22', '2024-11-20 18:34:22'),
(3, 'enim rerum repudiandae', 'error et animi a doloribus aspernatur neque est qui quia odio quis sunt totam est', '2024-11-20 18:34:22', '2024-11-20 18:34:22'),
(4, 'iure qui officia', 'ut veniam est ad et eum consequuntur corrupti distinctio incidunt repudiandae molestiae nulla aut quis', '2024-11-20 18:34:22', '2024-11-20 18:34:22'),
(5, 'rem voluptas sequi', 'et ex adipisci facere praesentium consequatur excepturi atque minus est et et ut expedita eum', '2024-11-20 18:34:22', '2024-11-20 18:34:22'),
(6, 'minima et illum', 'sit voluptas consequatur commodi ipsam inventore ut a qui quia debitis esse et doloribus necessitatibus', '2024-11-20 18:34:22', '2024-11-20 18:34:22'),
(7, 'qui architecto et', 'quos velit nemo dolore ea maxime ut ex nulla dolor earum est occaecati nobis et', '2024-11-20 18:34:22', '2024-11-20 18:34:22'),
(8, 'voluptas voluptatum quas', 'harum earum qui totam distinctio provident tenetur quasi unde quis a porro neque neque sed', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(9, 'a aperiam et', 'ullam quo ut qui culpa odio nihil laudantium voluptatem molestias tenetur et enim qui corrupti', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(10, 'cum omnis deserunt', 'delectus quae sed dicta quis voluptas quod ab voluptatem nobis iusto velit quidem quaerat suscipit', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(11, 'recusandae earum voluptatem', 'veniam sunt nihil fugiat quia voluptatibus aperiam quam earum nulla sunt expedita nesciunt cumque sapiente', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(12, 'id ea aspernatur', 'eum quidem fuga exercitationem hic dicta qui delectus tempora voluptatum beatae aut ut ipsa inventore', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(13, 'et voluptas voluptatem', 'quasi sed quas architecto voluptates nobis amet quia id ut eum non quae rerum maiores', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(14, 'corrupti libero voluptatibus', 'aut voluptatum beatae delectus saepe qui sint doloribus voluptatem sed est non deleniti iure ut', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(15, 'velit et quam', 'doloribus occaecati suscipit vero rerum qui perferendis provident non tempore sunt reprehenderit ex sit quo', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(16, 'provident expedita recusandae', 'laborum omnis iusto esse harum et ipsam ut quasi vitae illum exercitationem laudantium laudantium est', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(17, 'et est reiciendis', 'nihil omnis accusamus dolores magni sit vero quibusdam labore aut sit dolorem deserunt consectetur repudiandae', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(18, 'quo eos consequatur', 'amet autem voluptas explicabo quaerat ullam odit numquam debitis maxime perspiciatis veniam in enim veritatis', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(19, 'rem repellat ea', 'deserunt minus nesciunt fuga et consequatur doloremque beatae perspiciatis deleniti maxime atque est ad consequatur', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(20, 'autem quia blanditiis', 'perspiciatis labore consequuntur et error ipsam odio voluptatem itaque expedita saepe error ut sapiente cupiditate', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(21, 'quam distinctio dolorum', 'et aperiam aut aut magnam et vel eligendi quibusdam magni consequatur at rerum repellat quibusdam', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(22, 'accusantium et ipsum', 'quae quo odio maiores hic consequatur temporibus et rerum nobis libero similique ipsam vero nulla', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(23, 'aut dicta aut', 'nisi iure similique ut nesciunt aspernatur et veniam amet doloribus quia dolore necessitatibus culpa dignissimos', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(24, 'distinctio rem sed', 'aperiam voluptatem quia ullam nulla eveniet quia omnis maxime ex dolores repudiandae et ut cum', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(25, 'saepe minus debitis', 'totam eaque nemo non pariatur doloremque sit assumenda eum laudantium numquam aut labore dolorem repellendus', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(26, 'quia excepturi qui', 'maxime labore aut aliquam quod et voluptatum est et voluptates consequatur maiores sunt placeat dignissimos', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(27, 'consequatur corrupti in', 'quia nemo numquam error cumque accusantium aspernatur voluptatibus libero molestias illo non sint sed et', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(28, 'doloremque tempora voluptas', 'rerum sint recusandae consectetur et ducimus non fugiat qui dignissimos illum tempore aut exercitationem pariatur', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(29, 'vel magnam voluptas', 'accusamus expedita explicabo tempore quis aspernatur et reiciendis ipsa quidem eos culpa quasi pariatur vel', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(30, 'amet omnis accusamus', 'maiores aliquam sint aut quibusdam doloribus perspiciatis sed odio occaecati eius consequatur culpa mollitia veritatis', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(31, 'dicta et id', 'rerum quisquam odit cum iusto ut magnam dolor quae dolores rerum reprehenderit vero vero similique', '2024-11-20 18:34:23', '2024-11-20 18:34:23'),
(32, 'illo eveniet aut', 'quidem est architecto neque eligendi quisquam et deleniti quis ut voluptatum sit ex sapiente quod', '2024-11-20 18:34:24', '2024-11-20 18:34:24'),
(33, 'saepe sint libero', 'aut enim repudiandae fugiat ut nihil voluptate qui cupiditate ipsum et laudantium qui repellat magni', '2024-11-20 18:34:24', '2024-11-20 18:34:24'),
(34, 'eveniet voluptatibus et', 'odio explicabo aliquam et praesentium ut doloremque tempora maxime voluptas et et ut adipisci molestiae', '2024-11-20 18:34:24', '2024-11-20 18:34:24'),
(35, 'a dolor iste', 'et nihil quos qui beatae molestiae voluptatem est magnam explicabo dolorum illum error natus laboriosam', '2024-11-20 18:34:24', '2024-11-20 18:34:24'),
(36, 'enim quos aspernatur', 'sunt ad unde et consequatur saepe tempora et corrupti exercitationem omnis optio atque quia dolorem', '2024-11-20 18:34:24', '2024-11-20 18:34:24'),
(37, 'voluptatibus ratione natus', 'voluptatem et nisi perspiciatis molestiae exercitationem quaerat ipsa quia accusamus qui et nesciunt quia autem', '2024-11-20 18:34:24', '2024-11-20 18:34:24'),
(38, 'facilis quia voluptatem', 'et nemo repellendus quibusdam voluptatibus et quia omnis rerum hic quia aliquam pariatur voluptatem debitis', '2024-11-20 18:34:24', '2024-11-20 18:34:24'),
(39, 'reprehenderit aliquid laborum', 'enim aut ut quis repellat ut commodi fugit libero voluptate velit itaque et sunt illo', '2024-11-20 18:34:24', '2024-11-20 18:34:24'),
(40, 'distinctio qui repellat', 'rerum et neque veritatis dolorem et dolorum provident iusto qui explicabo omnis consectetur eaque ut', '2024-11-20 18:34:24', '2024-11-20 18:34:24'),
(41, 'in rem maxime', 'tempore eos corrupti tempore quidem dolor cum eius nulla qui culpa voluptates eaque nobis provident', '2024-11-20 18:34:24', '2024-11-20 18:34:24'),
(42, 'quod cumque id', 'iste delectus voluptas laborum nihil sint ut aut et expedita deleniti eum consequatur sit ipsa', '2024-11-20 18:34:24', '2024-11-20 18:34:24'),
(43, 'aliquam recusandae velit', 'unde ut aut dignissimos vel et quis maiores id alias et tenetur aut sed quia', '2024-11-20 18:34:24', '2024-11-20 18:34:24'),
(44, 'aliquid eligendi ab', 'labore debitis et recusandae velit ullam molestiae ab libero vel omnis inventore incidunt maxime non', '2024-11-20 18:34:24', '2024-11-20 18:34:24'),
(45, 'animi voluptatem officiis', 'beatae suscipit molestiae hic cum quam quidem pariatur totam in ipsum soluta quos officiis et', '2024-11-20 18:34:24', '2024-11-20 18:34:24'),
(46, 'harum ut deleniti', 'pariatur unde minus consequatur ut quos aut amet totam eaque veniam omnis voluptatem tempora iste', '2024-11-20 18:34:24', '2024-11-20 18:34:24'),
(47, 'dolorum eveniet qui', 'voluptatem recusandae velit facere accusantium mollitia quasi illo quo eveniet id placeat nostrum incidunt voluptatem', '2024-11-20 18:34:24', '2024-11-20 18:34:24'),
(48, 'non atque sit', 'sed aut aut in molestiae eaque incidunt asperiores et est et mollitia veritatis et totam', '2024-11-20 18:34:24', '2024-11-20 18:34:24'),
(49, 'debitis occaecati laudantium', 'iste veritatis harum ipsa aspernatur error corrupti quos ut animi ullam in asperiores voluptatem maxime', '2024-11-20 18:34:24', '2024-11-20 18:34:24'),
(50, 'adipisci atque saepe', 'qui aliquid voluptatem aliquam officiis dolore laudantium debitis voluptatem et similique velit doloremque sed molestias', '2024-11-20 18:34:24', '2024-11-20 18:34:24');

-- --------------------------------------------------------

--
-- Table structure for table `employeers`
--

CREATE TABLE `employeers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(9, '2014_10_12_000000_create_users_table', 5),
(10, '2014_10_12_100000_create_password_reset_tokens_table', 5),
(11, '2019_08_19_000000_create_failed_jobs_table', 5),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 5),
(13, '2024_11_19_161348_create_admins_table', 5),
(14, '2024_11_19_172024_create_employeers_table', 5),
(15, '2024_11_20_174652_create_companys_table', 5),
(16, '2024_11_21_000752_create_companies_table', 6);

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
(1, 'Amir', 'mamun@gmail.com', NULL, '$2y$10$isizXPH9jAXn5kETtNnViu3NXQQJeyX/XYq2N5mYP5iKuwfRp1P0u', NULL, '2024-11-20 12:20:19', '2024-11-20 12:20:19');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `employeers`
--
ALTER TABLE `employeers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
