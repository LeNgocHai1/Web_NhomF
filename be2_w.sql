-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 06, 2021 at 04:43 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be2_w`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'dien thoai', '2021-11-05 19:53:23', '2021-11-05 19:53:23'),
(2, 'lap top', '2021-11-05 19:57:26', '2021-11-05 19:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

DROP TABLE IF EXISTS `category_product`;
CREATE TABLE IF NOT EXISTS `category_product` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `category_id`, `product_id`, `created_at`, `updated_at`) VALUES
(2, 1, 4, '2021-11-06 07:11:50', '2021-11-06 07:11:50'),
(3, 1, 5, '2021-11-06 07:18:34', '2021-11-06 07:18:34'),
(4, 1, 6, '2021-11-06 07:18:49', '2021-11-06 07:18:49'),
(5, 1, 7, '2021-11-06 07:19:13', '2021-11-06 07:19:13'),
(6, 1, 8, '2021-11-06 07:19:26', '2021-11-06 07:19:26'),
(7, 1, 9, '2021-11-06 07:19:43', '2021-11-06 07:19:43'),
(8, 1, 10, '2021-11-06 08:15:12', '2021-11-06 08:15:12');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_product_id_foreign` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_21_062255_create_comments_table', 1),
(4, '2021_10_13_153152_create_categories_table', 1),
(5, '2021_10_14_164143_create_products_table', 1),
(6, '2021_10_15_042725_create_category_product_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `description`, `created_at`, `updated_at`) VALUES
(5, 'samsung', 12000.00, 'uploads/oppo-reno6-z-5g-aurora-1-600x600.jpg', NULL, '2021-11-06 07:18:34', '2021-11-06 07:18:34'),
(4, 'samsung', 12000.00, 'uploads/samsung-galaxy-z-fold-3-green-1-600x600.jpg', 'dfd', '2021-11-06 07:11:50', '2021-11-06 07:11:50'),
(7, 'samsung', 12000.00, 'uploads/vi-vn-iphone-12-1.jpg', NULL, '2021-11-06 07:19:13', '2021-11-06 07:19:13'),
(6, 'samsung', 12000.00, 'uploads/samsung-galaxy-z-fold-3-slider-tong-quan-1020x570.jpg', NULL, '2021-11-06 07:18:49', '2021-11-06 07:18:49'),
(8, 'samsung', 12000.00, 'uploads/oppo-reno6-z-5g-aurora-1-600x600.jpg', NULL, '2021-11-06 07:19:26', '2021-11-06 07:19:26'),
(9, 'samsung', 12000.00, 'uploads/oppo-reno6-z-5g-aurora-1-600x600.jpg', NULL, '2021-11-06 07:19:43', '2021-11-06 07:19:43'),
(10, 'samsung', 12000.00, 'uploads/oppo-reno6-z-5g-aurora-1-600x600.jpg', NULL, '2021-11-06 08:15:12', '2021-11-06 08:15:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'thachssss', 'thach@gmail.com', NULL, '$2y$10$VDMWC6i7kGo3Os3A/qhTSOmQIqAwShMlII0oSbQMQ6V8rvl9dGiLq', NULL, '2021-11-05 19:50:18', '2021-11-05 19:50:18', 1),
(2, 'thachnhe1', 'thach1@gmail.com', NULL, '$2y$10$82Nqv7WlXojFv/F9xj/rsuCpcSLUuENnUKjZJ9rA8GlDNWzc1mcyW', NULL, '2021-11-06 01:04:12', '2021-11-06 01:04:12', 1),
(3, 'admin', 'thach121@gmail.com', NULL, '$2y$10$q4MsyDV6.ClE7l02kwCDtOXr.p0SM2lxoZZMWRwsp2qGfIAozK2.O', NULL, '2021-11-06 07:01:37', '2021-11-06 07:01:37', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
