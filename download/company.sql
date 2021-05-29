-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 11:52 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `Firstname`, `Lastname`, `Email`, `emp_id`, `created_at`, `updated_at`) VALUES
(1, 'Ezabella', 'Alexon', 'ezabella@gmail.com', 2, '2021-05-09 10:06:10', '2021-05-09 10:06:10'),
(3, 'Alex', 'Alsadon', 'dana@gmail.com', 1, '2021-05-09 10:27:26', '2021-05-09 10:27:26'),
(4, 'Lara', 'Oldon', 'lara@gmail.com', 11, '2021-05-09 11:07:49', '2021-05-09 11:07:49'),
(5, 'Olivia', 'Larox', 'olivia@gmail.com', 10, '2021-05-09 11:08:06', '2021-05-09 11:08:06'),
(6, 'Polared', 'Saoleds', 'poldsjka@gmail.com', 10, '2021-05-09 11:08:24', '2021-05-09 11:08:24'),
(7, 'Redons', 'Wewjjdn', 'dknrek@gmail.com', 5, '2021-05-09 11:08:40', '2021-05-09 11:08:40'),
(8, 'Klwnkq', 'Ghfqwq', 'nfdjsm@gmail.com', 7, '2021-05-09 11:09:02', '2021-05-09 11:09:02'),
(9, 'Fadia', 'Khattab', 'fadiadsa@gmail.com', 2, '2021-05-10 15:20:24', '2021-05-10 15:20:24'),
(10, 'Liam', 'Noah', 'Liam@gmail.com', 3, '2021-05-10 15:51:19', '2021-05-10 15:51:19'),
(11, 'Elijah', 'William', 'Elijah@gmail.com', 3, '2021-05-10 15:51:36', '2021-05-10 15:51:36'),
(13, 'James', 'Benjamin', 'James@gmail.com', 5, '2021-05-10 15:52:01', '2021-05-10 15:52:01'),
(14, 'Lucas', 'Henry', 'Lucas@gmail.com', 5, '2021-05-10 15:52:24', '2021-05-10 15:52:24'),
(15, 'Alexander', 'Mason', 'Alexander@gmail.com', 5, '2021-05-10 15:52:41', '2021-05-10 15:52:41'),
(16, 'bobna', 'redax', 'fbewfe@gmail.com', 1, '2021-05-29 18:35:46', '2021-05-29 18:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) NOT NULL,
  `Firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `officeCode` bigint(20) DEFAULT NULL,
  `jobTitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `Firstname`, `Lastname`, `Email`, `officeCode`, `jobTitle`, `created_at`, `updated_at`) VALUES
(1, 'Omar', 'Ghanam', 'xilivone@gmail.com', 1, 'Founder', '2021-05-09 10:04:50', '2021-05-09 10:04:50'),
(2, 'Dana', 'Farouq', 'dana@gmail.com', 1, 'Co Founder', '2021-05-09 10:05:19', '2021-05-22 17:40:38'),
(3, 'Fadi', 'Alsadon', 'fadi@gmail.com', 1, 'Call Center', '2021-05-09 10:05:34', '2021-05-09 10:05:34'),
(5, 'Mohammed', 'Alhasan', 'mohammed.alhasan@gmail.com', 2, 'Call Center', '2021-05-09 10:35:17', '2021-05-09 10:35:17'),
(6, 'Loaw', 'Roaden', 'loawedsa@gmail.com', 2, 'Call Center', '2021-05-09 10:35:36', '2021-05-09 10:35:36'),
(7, 'Morphoe', 'ekwmla', 'mogrfhdsa1@gmail.com', 3, 'Call Center', '2021-05-09 10:36:02', '2021-05-09 10:36:02'),
(8, 'Kamel', 'Alhaji', 'kamelaldjs@gmail.com', 3, 'Sales', '2021-05-09 10:36:25', '2021-05-09 10:36:25'),
(9, 'Merna', 'Khalad', 'mernalkds@gmail.com', 2, 'Sales', '2021-05-09 10:36:53', '2021-05-09 10:36:53'),
(10, 'Somaya', 'Waddour', 'somayadfnsk@gmail.com', 2, 'Sales', '2021-05-09 10:37:13', '2021-05-22 14:23:12'),
(11, 'Oppo', 'Rolex', 'oppoweds@gmail.com', 2, 'Sales', '2021-05-09 10:37:30', '2021-05-22 14:23:15'),
(12, 'Ezabella', 'Alexon', 'ezabella@gmail.com', 1, 'Call Center', '2021-05-09 10:37:45', '2021-05-09 10:37:45'),
(13, 'Fadi', 'Alexon', 'virus.vboot@gmail.com', 2, 'Call Center', '2021-05-09 10:37:58', '2021-05-22 15:42:50'),
(15, 'employee', 'no office', 'employee@gmail.com', 1, 'Call Center', '2021-05-15 06:21:46', '2021-05-15 06:24:56'),
(16, 'Employee', 'has no office', 'fsdnklf@gmail.com', 2, 'Call Center', '2021-05-15 06:24:10', '2021-05-15 07:31:39'),
(17, 'Employee', 'Has no office', 'emplowef@gmail.com', 3, 'Call Center', '2021-05-15 07:32:30', '2021-05-29 18:32:00'),
(18, 'employee', 'no office', 'fnmieskw@gmail.com', 3, 'Call Center', '2021-05-15 07:35:30', '2021-05-15 07:55:24'),
(19, 'Employee', 'no office', 'dfs@gmail.com', 2, 'Call Center', '2021-05-15 08:47:05', '2021-05-15 09:20:57'),
(20, 'Employee', 'no offices', 'dsfvds@gmail.com', 2, 'Call Center', '2021-05-15 08:47:19', '2021-05-29 18:30:42'),
(21, 'fhdsjkk', 'fmndks', 'fsdnkm@gmail.com', 3, 'Call Center', '2021-05-15 08:47:31', '2021-05-29 18:31:18'),
(25, 'Marna', 'Olivia', 'marna@gmail.com', 2, 'Call Center', '2021-05-16 15:07:59', '2021-05-22 14:19:34'),
(26, 'Sola', 'Meraka', 'Sola@gmail.com', 1, 'Call Center', '2021-05-16 15:10:35', '2021-05-16 15:10:35'),
(27, 'Karna', 'Meraka', 'karna@gmail.com', 1, 'Call Center', '2021-05-16 15:10:52', '2021-05-16 15:10:52'),
(28, 'Polar', 'Deka', 'polar@gmail.com', 1, 'Call Center', '2021-05-16 15:11:24', '2021-05-16 15:11:24'),
(29, 'Rolad', 'Deka', 'rolad@gmail.com', 2, 'Call Center', '2021-05-16 15:11:52', '2021-05-16 15:11:52'),
(30, 'renas', 'oliasda', 'renas@gmail.com', 1, 'Call Center', '2021-05-16 15:12:03', '2021-05-29 18:31:55'),
(31, 'maernaa', 'oliasda', 'merana@gmail.com', 3, 'Call Center', '2021-05-16 15:12:12', '2021-05-29 18:31:52'),
(32, 'ceeeca', 'ccascaca', 'ceccaca@gmail.com', 3, 'Call Center', '2021-05-29 18:31:03', '2021-05-29 18:31:48'),
(33, 'veeeer', 'veeerdo', 'veer@gmail.com', NULL, 'Call Center', '2021-05-29 18:34:16', '2021-05-29 18:34:16'),
(34, 'rooole', 'roolea', 'role@gmail.com', NULL, 'Call Center', '2021-05-29 18:34:30', '2021-05-29 18:34:30'),
(35, 'Hegina', 'Lovieka', 'hgein@gmail.com', NULL, 'Call Center', '2021-05-29 18:34:47', '2021-05-29 18:34:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2021_05_08_195057_create_offices_table', 1),
(3, '2021_05_08_201733_create_employees_table', 1),
(4, '2021_05_08_201811_create_customers_table', 1),
(5, '2021_05_08_204144_create_payments_table', 1),
(6, '2021_05_09_095758_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `officeCode` bigint(20) NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`officeCode`, `city`, `phone`, `address`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Istanbul', 587484118, 'Levent', 'Turkey', '2021-05-09 10:03:35', '2021-05-09 10:03:35'),
(2, 'Ankara', 1245148451, 'Kizlay Street', 'Turkey', '2021-05-09 10:03:45', '2021-05-09 10:03:45'),
(3, 'Baghdad', 4545181484, 'North Baghdad', 'Iraq', '2021-05-09 10:03:56', '2021-05-09 14:59:14');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('xilivone@gmail.com', '$2y$10$NeL0OwANFmAJuT3dJNJFbegFa/I.PTe9BlIkW.rdL8kEnk4H.osGu', '2021-05-29 13:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `checkNumber` bigint(20) NOT NULL,
  `amount` double NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Omar Ghanam', 'xilivone@gmail.com', NULL, '$2y$10$588QKoZXGVyfvIZ39M8muu3pKi5pJNHo7QfQIbeCCdd/FmVC09Iai', NULL, '2021-05-29 14:06:57', '2021-05-29 18:36:09'),
(2, 'Dana Farouq', 'dana@gmail.com', NULL, '$2y$10$8/E4EafZ7QXdER1jZEM1..R3f..ZYcu/odcgWqf1WtoW5VagzuZhC', NULL, '2021-05-29 14:08:07', '2021-05-29 18:02:40'),
(5, 'Farah Eid', 'farah@gmail.com', NULL, '$2y$10$Pmch.POiR6TKaNFvpnLr9OZ7ERuYlxPnCZ96jqdT7oeUO25O4o4Qi', NULL, '2021-05-29 16:14:43', '2021-05-29 16:14:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_emp_id_foreign` (`emp_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_officecode_foreign` (`officeCode`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`officeCode`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`checkNumber`),
  ADD KEY `payments_customer_id_foreign` (`customer_id`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `officeCode` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `checkNumber` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_emp_id_foreign` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_officecode_foreign` FOREIGN KEY (`officeCode`) REFERENCES `offices` (`officeCode`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
