-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 11:54 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astra_requests`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_name` varchar(255) NOT NULL,
  `ar_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `en_name`, `ar_name`, `created_at`, `updated_at`) VALUES
(3, 'foods', 'مأكولات', '2023-09-21 10:43:34', '2023-09-22 06:08:30'),
(5, 'drinks', 'مشروبات', '2023-09-22 06:08:01', '2023-09-22 06:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_name` varchar(255) NOT NULL,
  `ar_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `en_name`, `ar_name`, `created_at`, `updated_at`) VALUES
(12, 'Astra', 'استرا', '2023-09-06 09:07:56', '2023-09-06 12:08:31'),
(14, 'MedRight', 'ميدرايت', '2023-09-07 04:18:53', '2023-09-07 04:18:53'),
(15, 'Approval', 'الموافقات', '2023-09-12 06:36:37', '2023-09-12 06:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `embloyees`
--

CREATE TABLE `embloyees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hr_code` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `floor_number` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'avatar.png',
  `titlemodel_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `embloyees`
--

INSERT INTO `embloyees` (`id`, `hr_code`, `name`, `phone`, `email`, `password`, `floor_number`, `image`, `titlemodel_id`, `status_id`, `created_at`, `updated_at`) VALUES
(7, 1, 'Ali Salem', '01222222222', 'ali@email.com', '$2y$10$HCn/lJOxl3GiX9n/79Co6Oqoamc9aHtHXTr5Q/dqGzPx4Mit.oqt2', 6, 'profile1695021460.jpg', 2, 1, '2023-09-18 04:17:40', '2023-09-18 04:19:28'),
(8, 3, 'mm', '01234567983', 'emp@gmail.com', '$2y$10$5Pf3WcTgvAhiqijLceBkle26PaHZa0kN641dNbBfSkzB.ZlCsILn.', 6, 'avatar.png', 2, 1, '2023-09-21 09:30:32', '2023-09-21 09:30:32'),
(9, 5, 'mostafa', '01234567988', 'me260@gmail.com', '$2y$10$NoyZAkFC8dsEzRPEHnVnf.UukU8kraI4k.JU.nOgsv/7j1.lEzCdy', 6, 'avatar.png', 2, 1, '2023-09-25 05:23:52', '2023-09-25 05:23:52');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_29_112757_create_sessions_table', 2),
(6, '2023_09_04_134038_create_departments_table', 2),
(7, '2023_09_07_074101_create_title_models_table', 3),
(8, '2023_09_11_142913_create_user_statuses_table', 4),
(9, '2023_09_20_121002_create_officeboys_table', 5),
(10, '2023_09_21_121222_create_categories_table', 6),
(11, '2023_09_21_121327_create_products_table', 7),
(12, '2023_09_24_095730_create_products_table', 8),
(13, '2023_09_24_130029_create_order_statuses_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `officeboys`
--

CREATE TABLE `officeboys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hr_code` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'avatar.png',
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `officeboys`
--

INSERT INTO `officeboys` (`id`, `hr_code`, `name`, `phone`, `email`, `password`, `image`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'mostafa', '01222254564', 'me2609314@gmail.com', '$2y$10$W/XWvQZ8CDvcR9bJIcJ5GOu6Qi2aVaO.FOEQ9xwTjAdVEx27CZLEG', 'profile1695217434.jpg', 1, '2023-09-20 10:13:48', '2023-09-20 10:43:54'),
(2, 2, 'Test office boy 01', '01222254564', 'me25@gmail.com', '$2y$10$CuLrItmDtTr28/dP/oBKbu2Bi69ffO.i.wqc5rigHB.c06n.FSGke', 'profile1695217791.jpg', 1, '2023-09-20 10:48:29', '2023-09-20 10:49:51');

-- --------------------------------------------------------

--
-- Table structure for table `order_statuses`
--

CREATE TABLE `order_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_name` varchar(255) NOT NULL,
  `ar_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_statuses`
--

INSERT INTO `order_statuses` (`id`, `en_name`, `ar_name`, `created_at`, `updated_at`) VALUES
(1, 'pending', 'انتظار', '2023-09-24 10:26:30', '2023-09-24 10:26:30'),
(2, 'in progress', 'قيد التحضير', '2023-09-24 10:29:49', '2023-09-24 10:29:49'),
(3, 'delivered', 'تم التوصيل', '2023-09-24 10:30:14', '2023-09-24 10:30:14'),
(4, 'cancelled', 'تم الالغاء', '2023-09-24 10:30:44', '2023-09-24 10:30:44');

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(14, 'App\\Models\\Embloyee', 8, 'ol5469', 'f7e8a4ca4c1f1fac74be1e3df90b2ee5a40f87e02be863ab2443c0dae68b8d61', '[\"*\"]', '2023-09-25 05:36:45', NULL, '2023-09-25 05:36:13', '2023-09-25 05:36:45'),
(15, 'App\\Models\\Officeboy', 1, 'mo15156', '6642e8eaba0ddf1c2c07baf9fd2aadb2f3610240fda7d22eddb942dfd5f95a1b', '[\"*\"]', '2023-09-25 05:37:12', NULL, '2023-09-25 05:36:56', '2023-09-25 05:37:12');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_name` varchar(255) NOT NULL,
  `ar_name` varchar(255) NOT NULL,
  `en_details` varchar(255) NOT NULL,
  `ar_details` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'productAvatar.png',
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `en_name`, `ar_name`, `en_details`, `ar_details`, `price`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'sandwitch', 'سندوتش', 'mmmm', 'مممم', 20, 'productAvatar.png', 3, '2023-09-24 08:15:50', '2023-09-24 08:15:50'),
(2, 'juice', 'عصير', 'mmm', 'ىىى', 80, 'productAvatar.png', 5, '2023-09-24 08:22:48', '2023-09-24 08:22:48'),
(3, 'water', 'مياه', 'water', 'مياه', 10, 'productAvatar.png', 5, '2023-09-25 05:39:05', '2023-09-25 05:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `title_models`
--

CREATE TABLE `title_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_name` varchar(255) NOT NULL,
  `ar_name` varchar(255) NOT NULL,
  `floor_number` int(11) NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `title_models`
--

INSERT INTO `title_models` (`id`, `en_name`, `ar_name`, `floor_number`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 'CEO', 'المدير التنفيذي', 6, 12, '2023-09-07 07:00:33', '2023-09-07 08:07:04'),
(2, 'Tech Lead', 'قائد فريق العمل', 6, 12, '2023-09-07 07:35:37', '2023-09-07 07:35:37'),
(3, 'Providers Admin', 'مدير العملاء', 4, 14, '2023-09-07 07:36:14', '2023-09-07 07:36:14');

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
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$ygUfmcplL7uINSlTsBqqreM0QGAmU2mSnfym0wKtqWxDYQypkO9fq', NULL, '2023-08-29 07:37:46', '2023-08-29 07:37:46');

-- --------------------------------------------------------

--
-- Table structure for table `user_statuses`
--

CREATE TABLE `user_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_name` varchar(255) NOT NULL,
  `ar_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_statuses`
--

INSERT INTO `user_statuses` (`id`, `en_name`, `ar_name`, `created_at`, `updated_at`) VALUES
(1, 'Active', 'مفعل', '2023-09-11 11:43:18', '2023-09-11 11:43:18'),
(2, 'In Active', 'غير مفعل', '2023-09-11 11:44:37', '2023-09-11 11:44:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `embloyees`
--
ALTER TABLE `embloyees`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `officeboys`
--
ALTER TABLE `officeboys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `officeboys_status_id_foreign` (`status_id`);

--
-- Indexes for table `order_statuses`
--
ALTER TABLE `order_statuses`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `title_models`
--
ALTER TABLE `title_models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title_models_department_id_foreign` (`department_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_statuses`
--
ALTER TABLE `user_statuses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `embloyees`
--
ALTER TABLE `embloyees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `officeboys`
--
ALTER TABLE `officeboys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_statuses`
--
ALTER TABLE `order_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `title_models`
--
ALTER TABLE `title_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_statuses`
--
ALTER TABLE `user_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `officeboys`
--
ALTER TABLE `officeboys`
  ADD CONSTRAINT `officeboys_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `user_statuses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `title_models`
--
ALTER TABLE `title_models`
  ADD CONSTRAINT `title_models_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
