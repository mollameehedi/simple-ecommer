-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 11:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sohanthink`
--

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phon_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billings`
--

INSERT INTO `billings` (`id`, `name`, `email`, `phon_number`, `country`, `city`, `address`, `zip_code`, `notes`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user3@gmail.com', '012368', 'sdfa', 'xcvz', 'adsfa', 'zxcv', 'zxcvzxcv', '2021-05-02 22:16:21', NULL),
(2, 'user3.', 'user3@gmail.com', '0185556', 'fgjhfghj', 'fgjh', 'fghjfjh', 'fghj', 'asdfasdfasdf', '2021-05-06 02:46:14', NULL),
(3, 'user3.', 'user3@gmail.com', '0185556', 'adf', 'asdf', 'asdf', 'asdf', 'asdfadf', '2021-05-06 02:51:34', NULL),
(4, 'sohan', 'sohan@gmail.com', 'hhhh', 'adsf', 'adf', 'adf', 'adf', 'sadf', '2021-05-06 08:45:36', NULL),
(5, 'sohan', 'sohan@gmail.com', '0185556', 'DDD', 'asdfasdf', 'fghjfjh', 'asd', 'sdsdsssd', '2021-05-06 09:18:40', NULL),
(6, 'sohan', 'sohan@gmail.com', '0185556', 'asdfa', 'fgjh', 'asdf', 'asdf', 'tyhgggggggggggggfd', '2021-05-06 09:20:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `genareted_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactmessages`
--

CREATE TABLE `contactmessages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactmessages`
--

INSERT INTO `contactmessages` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'developer sohan', 'mahadi@gmail.com', 'sadf', 'asdfasdf', '2021-04-28 00:08:07', NULL),
(3, 'developer sohan', 'mahadi@gmail.com', 'sadf', 'asdfasdf', '2021-04-28 00:10:36', NULL),
(4, 'developer sohan', 'mahadi@gmail.com', 'sadf', 'asdfasdf', '2021-04-28 00:10:46', NULL),
(5, 'admin', 'admin@gmail.com', 'asdfasd', 'fasdf', '2021-04-28 00:11:28', NULL),
(6, 'admin', 'admin@gmail.com', 'asdfasd', 'fasdf', '2021-04-28 00:12:10', NULL),
(9, 'sohan', 'sohan@gmail.com', 'nothing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2021-05-06 11:17:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_28_055957_create_contactmessages_table', 2),
(7, '2021_04_28_161531_create_products_table', 3),
(12, '2014_10_12_000000_create_users_table', 5),
(13, '2021_04_28_175453_create_carts_table', 6),
(28, '2021_04_29_201306_create_billings_table', 7),
(29, '2021_04_29_201546_create_shippings_table', 7),
(30, '2021_04_29_211615_create_orders_table', 7),
(31, '2021_04_29_211801_create_order_details_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` double(8,2) NOT NULL,
  `payment_option` int(11) NOT NULL,
  `billing_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total`, `payment_option`, `billing_id`, `shipping_id`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 9, 245.00, 1, 1, 2, 2, '2021-05-02 22:16:21', '2021-05-02 22:16:58'),
(2, 9, 760.00, 2, 2, 3, 3, '2021-05-06 02:46:14', '2021-05-06 02:47:42'),
(3, 9, 1420.00, 1, 3, 4, 2, '2021-05-06 02:51:34', '2021-05-06 02:53:02'),
(4, 12, 80.00, 2, 4, 5, 2, '2021-05-06 08:45:36', '2021-05-06 09:14:11'),
(5, 12, 80.00, 1, 5, 6, 2, '2021-05-06 09:18:40', '2021-05-06 09:19:20'),
(6, 12, 130.00, 2, 6, 7, 1, '2021-05-06 09:20:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `review` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stars` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `user_id`, `product_id`, `product_quantity`, `product_price`, `review`, `stars`, `created_at`, `updated_at`) VALUES
(1, 1, 9, 2, 1, 220, 'this is three ster', 4, '2021-05-02 22:16:21', '2021-05-03 04:42:29'),
(2, 1, 9, 2, 1, 25, 'wow super', 5, '2021-05-02 22:16:21', '2021-05-03 04:58:41'),
(3, 2, 9, 2, 4, 25, 'sdfgsdfg', 3, '2021-05-06 02:46:14', '2021-05-06 02:49:48'),
(4, 2, 9, 1, 3, 220, NULL, NULL, '2021-05-06 02:46:14', NULL),
(5, 3, 9, 1, 6, 220, NULL, NULL, '2021-05-06 02:51:34', NULL),
(6, 3, 9, 2, 4, 25, NULL, NULL, '2021-05-06 02:51:34', NULL),
(7, 4, 12, 2, 2, 40, NULL, NULL, '2021-05-06 08:45:36', NULL),
(8, 5, 12, 2, 2, 40, NULL, NULL, '2021-05-06 09:18:40', NULL),
(9, 6, 12, 1, 2, 65, NULL, NULL, '2021-05-06 09:20:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$LGOasOxduXIXUMe4MN/1pOhKRSaSD0/lQeQYxdioBIoAnKy899rP6', '2021-05-06 15:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_short_decription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_long_decription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_thambnaill_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'product_thambnaill_photo.png',
  `slug_link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_short_decription`, `product_long_decription`, `product_price`, `product_thambnaill_photo`, `slug_link`, `created_at`, `updated_at`) VALUES
(1, 'sweatshirts', ' black owned business for the multi fasciated upper echelon individuals in today\'s society. BlueHunchoGang is just one of the many movements started by De\'Marea Jackson', ' black owned business for the multi fasciated upper echelon individuals in today\'s society. BlueHunchoGang is just one of the many movements started by De\'Marea Jackson', 65, '1.png', 'Nature-Honey', NULL, NULL),
(2, 'Tee-shirts', ' black owned business for the multi fasciated upper echelon individuals in today\'s society. BlueHunchoGang is just one of the many movements started by De\'Marea Jackson', ' black owned business for the multi fasciated upper echelon individuals in today\'s society. BlueHunchoGang is just one of the many movements started by De\'Marea Jackson', 40, '2.png', 'Sunrise-Oil', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phon_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `shipping_name`, `shipping_email`, `shipping_phon_number`, `shipping_country`, `shipping_city`, `shipping_address`, `shipping_zip_code`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user3@gmail.com', '0185556', 'sad', 'asdf', 'DD', 'asd', '2021-05-02 22:15:59', NULL),
(2, 'user', 'user3@gmail.com', '012368', 'sdfa', 'xcvz', 'adsfa', 'zxcv', '2021-05-02 22:16:21', NULL),
(3, 'difarent', 'mehedi@gmail.com', 'asdf', 'adsf', 'asdf', 'asdfasdf', 'adsf', '2021-05-06 02:46:14', NULL),
(4, 'user3.', 'user3@gmail.com', '0185556', 'adf', 'asdf', 'asdf', 'asdf', '2021-05-06 02:51:34', NULL),
(5, 'sohan', 'sohan@gmail.com', 'hhhh', 'adsf', 'adf', 'adf', 'adf', '2021-05-06 08:45:36', NULL),
(6, 'sohan', 'sohan@gmail.com', '0185556', 'DDD', 'asdfasdf', 'fghjfjh', 'asd', '2021-05-06 09:18:40', NULL),
(7, 'sohan', 'sohan@gmail.com', '0185556', 'asdfa', 'fgjh', 'asdf', 'asdf', '2021-05-06 09:20:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `role` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `profile_photo`, `role`, `created_at`, `updated_at`) VALUES
(1, 'customer', 'mmmehediislam0186@gmail.com', '2021-04-11 21:08:22', '$2y$10$KUYgM9IRaT/C.TidqSp./.XnnXGsFp6oCGl51yCB9bpknudnjMgcG', NULL, 'default.png', 2, '2021-04-28 15:03:08', NULL),
(2, 'admin', 'admin@gmail.com', '2021-04-01 13:49:18', '$2y$10$eZqDOo8bOAwmHo4cCsIkqueJ2XRUAqLyrinMe0eX7Z0YGZwz6GtiG', NULL, 'default.png', 1, '2021-04-28 15:11:42', NULL),
(4, 'mehedi', 'mehedi@gmail.com', '2021-03-31 18:31:51', '$2y$10$w8pRIEfK/fiy3GJbOghUceSh/gU56TzehkwlorCT/ln2w/Tx/8aCm', NULL, 'default.png', 2, '2021-04-28 15:12:28', NULL),
(5, 'user', 'user@gmail.com', '2021-03-31 18:31:48', '2', NULL, 'default.png', 1, '2021-04-28 15:19:16', '2021-04-28 15:19:16'),
(6, 'user', 'mehed4i@gmail.com', '2021-03-31 18:31:17', '$2y$10$NPJ4eUiRxusQplZg3CA4eOs91e907lp19qEilncMEQx5RGwvnBcKG', NULL, 'default.png', 1, '2021-04-28 15:20:45', '2021-04-28 15:20:45'),
(8, 'user2', 'like62277@gmail.com', '2021-04-01 18:31:13', '$2y$10$vYKGu3yfUcdIGMrzfNwM6uFsRltKxD1Rau/0c572Z41wLxXM4tXFq', NULL, 'default.png', 2, '2021-04-29 11:49:34', '2021-04-29 12:32:23'),
(9, 'user3.', 'user3@gmail.com', '2021-03-31 18:30:06', '$2y$10$6GI8qdN43RsTO4E3EDJoJOSbA3Ywz30dxXp669bpazfR718ULBiA2', NULL, 'default.png', 2, '2021-04-29 11:50:30', '2021-05-03 03:56:38'),
(10, 'user', 'user4@gmail.com', '2021-03-31 18:14:26', '$2y$10$nef0t7rL32Zo25Jn92rt/eA.sDInS8QpVPdXHczPX.18zIo8LyZ36', NULL, 'default.png', 2, '2021-04-29 11:51:20', NULL),
(12, 'sohan', 'sohan@gmail.com', NULL, '$2y$10$wXNnDjrvDctnIyNijKKfkuepTbZHQzGsLUuwJHZAuiU3CD3fO4C7q', NULL, 'default.png', 2, '2021-05-06 03:00:02', NULL),
(14, 'mehedi', 'mahadi@gmail.com', NULL, '$2y$10$RdTsUGHl.fioS20jE1dZKeiAEjhR1hHPoQhX0dVDGwYFI7zbi2IrC', NULL, 'default.png', 2, '2021-05-06 12:00:58', NULL),
(15, 'pervesh', 'pervesh@gmail.com', NULL, '$2y$10$itCUFwdIDtyGRTQK7VBhE.B6USaEoACP0eYNbhxpiPPRLXfMy60IK', NULL, 'default.png', 2, '2021-05-06 12:04:56', NULL),
(16, 'arman', 'arman@gmail.com', NULL, '$2y$10$KhnFpXkXBteIBWu0HiEoYud5L5EOekuav5y7fqSfCoL55DZ7wrK92', NULL, 'default.png', 2, '2021-05-06 12:13:56', NULL),
(17, 'rakib', 'rakib@gmail.com', NULL, '$2y$10$ZtVfUkMUVmyNI8NqZIcJEeJ67r/hXechHKGpD16IYwUGoIIS4IeWy', NULL, 'default.png', 2, '2021-05-06 12:14:34', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactmessages`
--
ALTER TABLE `contactmessages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `contactmessages`
--
ALTER TABLE `contactmessages`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
