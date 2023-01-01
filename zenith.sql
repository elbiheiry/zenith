-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 03:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zenith`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image1`, `image2`, `created_at`, `updated_at`) VALUES
(1, '2VV6IlWbkg9DUd5aj2hXvvPb9wWa5miPjE7P1mQl.jpg', 'tbj5i985SF0r8yuSbNzrPnYUdBM28BOw47vwJaRf.jpg', NULL, '2022-11-17 17:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `about_translations`
--

CREATE TABLE `about_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_translations`
--

INSERT INTO `about_translations` (`id`, `title1`, `subtitle`, `description1`, `title2`, `description2`, `about_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT OUR PROGRAM', 'DEDICATED FOR EDUCATORS AND LEARNERS.', 'Allows the purchase of Apple products on preferential terms and include discount on purchasing Apple products for school activities and an agreement on training and support services.', 'ZenithArabia', 'ZenithArabia is an Apple Authorized Education seller and a provider of customized & tailored education solutions.\r\nThis store is part of the education program for parental purchase provided to schools & students', 1, 'en', NULL, '2022-12-01 16:12:09'),
(2, 'ABOUT OUR PROGRAM', 'DEDICATED FOR EDUCATORS AND LEARNERS.', 'Allows the purchase of Apple products on preferential terms and include discount on purchasing Apple products for school activities and an agreement on training and support services.', 'ZenithArabia', 'ZenithArabia is an Apple Authorized Education seller and a provider of customized & tailored education solutions.\r\nThis store is part of the education program for parental purchase provided to schools & students', 1, 'ar', NULL, '2022-12-01 16:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(4, 'smart-folio-ipad-pro-12-9-inch-6th-generation', 'yeuBdut2bLcwVVt7Jtu99jAHDQ28mA9DXD3jkuxk.jpg', '2022-11-29 17:24:17', '2022-11-29 17:24:17'),
(5, 'magic-keyboard-folio-ipad-10th-generation', 'hBOIjhELN6767paGv13cBu4l7HxrgC1J1oF7IUeq.jpg', '2022-11-29 19:42:39', '2022-11-29 19:42:39'),
(6, 'apple-pencil-1st-generation', 'sbKLEltvcRFxyeWi4gofxwVow9ePPTBoH8675bm8.jpg', '2022-11-29 20:45:13', '2022-11-29 20:45:13'),
(7, 'apple-pencil-2nd-generation', 'JGljhz74Uh9XCD5TVxwDKbOGlYQCOBHvyg3KwfC0.jpg', '2022-11-29 20:54:34', '2022-11-29 20:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `accessory_images`
--

CREATE TABLE `accessory_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accessory_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accessory_images`
--

INSERT INTO `accessory_images` (`id`, `image`, `accessory_id`, `created_at`, `updated_at`) VALUES
(2, 'A0M4oPNuMOEdgo7HhzxIJkAidh1U5TBsRtUHUe3c.jpg', 5, '2022-11-29 19:46:08', '2022-11-29 19:46:08'),
(3, 'f1HRHeFxsRnXULERBMJ8Tc2aaZnDdtRm1MCKuO9Z.jpg', 5, '2022-11-29 19:46:23', '2022-11-29 19:46:23'),
(4, '5DGgmb0V8a3KIoKGvxSsygdwA4U3tj7j7U1AeUPh.jpg', 5, '2022-11-29 19:46:39', '2022-11-29 19:46:39'),
(5, 'UIueckHqpsBsKdjJR57Yj7erQ1ATA2PlrYoUAtAO.jpg', 6, '2022-11-29 20:45:35', '2022-11-29 20:45:35'),
(6, 'nLiEpS8vZRBsl5gAKWI1szOyUxo3rb3wQ4P2r0dV.jpg', 7, '2022-11-29 20:55:04', '2022-11-29 20:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `accessory_product`
--

CREATE TABLE `accessory_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `accessory_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accessory_product`
--

INSERT INTO `accessory_product` (`id`, `product_id`, `accessory_id`, `created_at`, `updated_at`) VALUES
(1, 15, 4, NULL, NULL),
(4, 16, 5, NULL, NULL),
(5, 15, 6, NULL, NULL),
(6, 16, 6, NULL, NULL),
(7, 15, 7, NULL, NULL),
(8, 16, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accessory_specifications`
--

CREATE TABLE `accessory_specifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `accessory_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accessory_specifications`
--

INSERT INTO `accessory_specifications` (`id`, `accessory_id`, `price`, `sku`, `color_id`, `locale`, `created_at`, `updated_at`) VALUES
(6, 4, '336.01', 'MJMG3ZE/A', 33, NULL, '2022-11-29 17:24:17', '2022-11-29 18:25:49'),
(7, 4, '336.01', 'MJML3ZE/A', 18, NULL, '2022-11-29 17:27:02', '2022-11-29 17:27:02'),
(8, 4, '336.01', 'MJMK3ZE/A', 31, NULL, '2022-11-29 17:28:04', '2022-11-29 17:28:04'),
(9, 4, '336.01', 'MJMH3ZE/A', 19, NULL, '2022-11-29 17:28:21', '2022-11-29 17:28:21'),
(10, 4, '336.01', 'MM6P3ZE/A', 32, NULL, '2022-11-29 17:28:36', '2022-11-29 17:28:36'),
(11, 4, '336.01', 'MJMJ3ZE/A', 16, NULL, '2022-11-29 18:26:16', '2022-11-29 18:26:16'),
(12, 5, '1411.55', 'MJQK3AB/A', 33, 'Arabic', '2022-11-29 19:42:39', '2022-11-29 19:42:39'),
(13, 5, '1411.55', 'MJQL3AB/A', 19, 'Arabic', '2022-11-29 19:44:25', '2022-11-29 19:44:25'),
(14, 5, '1411.55', 'MJQK3Z/A', 33, 'International English', '2022-11-29 19:44:55', '2022-11-29 19:44:55'),
(15, 5, '1411.55', 'MJQL3Z/A', 19, 'International English', '2022-11-29 19:45:25', '2022-11-29 19:45:25'),
(16, 6, '444.27', 'MK0C2ZE/A', NULL, NULL, '2022-11-29 20:45:13', '2022-11-29 20:45:13'),
(17, 7, '615.47', 'MU8F2ZE/A', NULL, NULL, '2022-11-29 20:54:34', '2022-11-29 20:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `accessory_translations`
--

CREATE TABLE `accessory_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accessory_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accessory_translations`
--

INSERT INTO `accessory_translations` (`id`, `name`, `overview`, `description`, `accessory_id`, `locale`, `created_at`, `updated_at`) VALUES
(7, 'Smart Folio (iPad Pro 12.9-inch (6th generation)', 'Thin and light keyboard.\r\nFront and back protection.', NULL, 4, 'en', '2022-11-29 17:24:17', '2022-11-29 17:24:17'),
(8, 'Smart Folio (iPad Pro 12.9-inch (6th generation)', 'Thin and light keyboard.\r\nFront and back protection.', NULL, 4, 'ar', '2022-11-29 17:24:17', '2022-11-29 17:24:17'),
(9, 'Magic Keyboard Folio iPad (10th generation)', 'Magic Keyboard Folio.\r\nAn amazing typing experience with a versatile two-piece design.', NULL, 5, 'en', '2022-11-29 19:42:39', '2022-11-29 19:42:39'),
(10, 'Magic Keyboard Folio iPad (10th generation)', 'Magic Keyboard Folio.\r\nAn amazing typing experience with a versatile two-piece design.', NULL, 5, 'ar', '2022-11-29 19:42:39', '2022-11-29 19:42:39'),
(11, 'Apple pencil (1st generation)', 'Apple Pencil lets you easily take notes, mark up, and draw on iPad with pixel-perfect precision—as naturally as you do on paper.', '<p>&nbsp;</p>\r\n<p><strong>Dimensions</strong></p>\r\n<ul>\r\n<li>Length: 175.7 mm (6.92 inches) measured from tip to cap</li>\r\n<li>Diameter: 8.9 mm (0.35 inch)</li>\r\n<li>Weight: 20.7 grams (0.73 ounce)</li>\r\n</ul>\r\n<p><strong>Connections</strong></p>\r\n<ul>\r\n<li>Bluetooth</li>\r\n<li>Lightning connector</li>\r\n</ul>\r\n<p><strong>Compatibility ( iPad Models )</strong></p>\r\n<ul>\r\n<li>iPad Pro 12.9-inch (1st and 2nd generation)</li>\r\n<li>iPad Pro 10.5-inch</li>\r\n<li>iPad Pro 9.7-inch</li>\r\n<li>iPad (6th, 7th, 8th, and 9th generation)</li>\r\n<li>iPad (10th generation); requires USB-C to Apple Pencil Adapter</li>\r\n<li>iPad Air (3rd generation)</li>\r\n<li>iPad mini (5th generation)</li>\r\n</ul>', 6, 'en', '2022-11-29 20:45:13', '2022-11-29 20:46:19'),
(12, 'Apple pencil (1st generation)', 'Apple Pencil lets you easily take notes, mark up, and draw on iPad with pixel-perfect precision—as naturally as you do on paper.', '<p>&nbsp;</p>\r\n<p><strong>Dimensions</strong></p>\r\n<ul>\r\n<li>Length: 175.7 mm (6.92 inches) measured from tip to cap</li>\r\n<li>Diameter: 8.9 mm (0.35 inch)</li>\r\n<li>Weight: 20.7 grams (0.73 ounce)</li>\r\n</ul>\r\n<p><strong>Connections</strong></p>\r\n<ul>\r\n<li>Bluetooth</li>\r\n<li>Lightning connector</li>\r\n</ul>\r\n<p><strong>Compatibility (&nbsp;iPad Models )</strong></p>\r\n<ul>\r\n<li>iPad Pro 12.9-inch (1st and 2nd generation)</li>\r\n<li>iPad Pro 10.5-inch</li>\r\n<li>iPad Pro 9.7-inch</li>\r\n<li>iPad (6th, 7th, 8th, and 9th generation)</li>\r\n<li>iPad (10th generation); requires USB-C to Apple Pencil Adapter</li>\r\n<li>iPad Air (3rd generation)</li>\r\n<li>iPad mini (5th generation)</li>\r\n</ul>', 6, 'ar', '2022-11-29 20:45:13', '2022-11-29 20:46:30'),
(13, 'Apple pencil (2nd generation)', 'With pixel-perfect precision and tilt and pressure sensitivity, Apple Pencil (2nd generation) transforms into your favorite creative instrument, your paintbrush, your charcoal, or your pencil.\r\nIt makes painting, sketching, doodling, and even note-taking better than ever.', '<p>&nbsp;</p>\r\n<p><strong>Dimensions</strong></p>\r\n<ul>\r\n<li>Length: 166 mm (6.53 inches)</li>\r\n<li>Diameter: 8.9 mm (0.35 inch)</li>\r\n<li>Weight: 20.7 grams (0.73 ounce)</li>\r\n</ul>\r\n<p><strong>Connections</strong></p>\r\n<ul>\r\n<li>Bluetooth</li>\r\n</ul>\r\n<p><strong>Compatibility ( iPad Models )</strong></p>\r\n<ul>\r\n<li>iPad Pro 12.9-inch (3rd, 4th, and 5th generation)</li>\r\n<li>iPad Pro 11-inch (1st, 2nd, and 3rd generation)</li>\r\n<li>iPad Air (4th and 5th generation)</li>\r\n<li>iPad mini (6th generation)</li>\r\n</ul>', 7, 'en', '2022-11-29 20:54:34', '2022-11-29 20:54:34'),
(14, 'Apple pencil (2nd generation)', 'With pixel-perfect precision and tilt and pressure sensitivity, Apple Pencil (2nd generation) transforms into your favorite creative instrument, your paintbrush, your charcoal, or your pencil.\r\nIt makes painting, sketching, doodling, and even note-taking better than ever.', '<p>&nbsp;</p>\r\n<p><strong>Dimensions</strong></p>\r\n<ul>\r\n<li>Length: 166 mm (6.53 inches)</li>\r\n<li>Diameter: 8.9 mm (0.35 inch)</li>\r\n<li>Weight: 20.7 grams (0.73 ounce)</li>\r\n</ul>\r\n<p><strong>Connections</strong></p>\r\n<ul>\r\n<li>Bluetooth</li>\r\n</ul>\r\n<p><strong>Compatibility ( iPad Models )</strong></p>\r\n<ul>\r\n<li></li>\r\n<li>iPad Pro 12.9-inch (3rd, 4th, and 5th generation)</li>\r\n<li>iPad Pro 11-inch (1st, 2nd, and 3rd generation)</li>\r\n<li>iPad Air (4th and 5th generation)</li>\r\n<li>iPad mini (6th generation)</li>\r\n</ul>', 7, 'ar', '2022-11-29 20:54:34', '2022-11-29 20:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@zenith.com', NULL, '$2y$10$xtQ8F6iuFromKPV1z66X6uPi0ah7kTTX6MYR5491/2Lm29nR8BdD.', NULL, NULL, '2022-10-31 22:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `benefits`
--

CREATE TABLE `benefits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `benefits`
--

INSERT INTO `benefits` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '93OqQDbRmDm4hVQ282QASJ7m8nXuNHPbK5vW2fZm.png', '2022-11-02 19:51:31', '2022-11-02 19:51:31'),
(2, '4TM2oXVFML8feJXmWv9e1jJ7ygfqpvncGqNdVHIB.png', '2022-11-02 19:52:01', '2022-11-02 19:52:01'),
(3, 'm8UWuXDF7BYIh5LC2AOi0ZKzI4Nx4UJQvZtGcas4.png', '2022-11-02 19:52:21', '2022-11-02 19:52:21');

-- --------------------------------------------------------

--
-- Table structure for table `benefit_translations`
--

CREATE TABLE `benefit_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefit_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `benefit_translations`
--

INSERT INTO `benefit_translations` (`id`, `title`, `description`, `benefit_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'EPROCUREMENT', 'Want to make purchasing easier?integrate Academia in your system', 1, 'en', '2022-11-02 19:51:31', '2022-11-02 19:51:31'),
(2, 'EPROCUREMENT', 'Want to make purchasing easier?integrate Academia in your system', 1, 'ar', '2022-11-02 19:51:31', '2022-11-02 19:51:31'),
(3, 'SUPPORT', 'We are here to support you. so contact us today to see how we can help you.', 2, 'en', '2022-11-02 19:52:01', '2022-11-02 19:52:01'),
(4, 'SUPPORT', 'We are here to support you. so contact us today to see how we can help you.', 2, 'ar', '2022-11-02 19:52:01', '2022-11-02 19:52:01'),
(5, 'START QUOTING', 'Find out how much academia could save you by quoting large orders today!', 3, 'en', '2022-11-02 19:52:21', '2022-11-02 19:52:21'),
(6, 'START QUOTING', 'Find out how much academia could save you by quoting large orders today!', 3, 'ar', '2022-11-02 19:52:21', '2022-11-02 19:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `bundles`
--

CREATE TABLE `bundles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_specification_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bundles`
--

INSERT INTO `bundles` (`id`, `school_id`, `product_id`, `product_specification_id`, `price`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 3, 15, 43, '2000.00', '3wu4wlJrkfiS2Jp5x6npK93H4p2ag3H9rW6Hf18n.jpg', 'first-bundle', '2022-12-25 13:07:52', '2022-12-25 13:54:09'),
(2, 3, 16, 63, '5000.00', 'Pxz5VM7pd9aqOmE3QMYNRPcg4qB0AwovVLlOlcLv.jpg', 'second-bundle', '2022-12-25 13:52:34', '2022-12-25 13:53:56');

-- --------------------------------------------------------

--
-- Table structure for table `bundle_accessories`
--

CREATE TABLE `bundle_accessories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bundle_id` bigint(20) UNSIGNED NOT NULL,
  `accessory_id` bigint(20) UNSIGNED NOT NULL,
  `accessory_specification_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bundle_accessories`
--

INSERT INTO `bundle_accessories` (`id`, `bundle_id`, `accessory_id`, `accessory_specification_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 9, '2022-12-25 13:29:23', '2022-12-25 13:41:31'),
(2, 2, 6, 16, '2022-12-25 13:52:44', '2022-12-25 13:52:44');

-- --------------------------------------------------------

--
-- Table structure for table `bundle_translations`
--

CREATE TABLE `bundle_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bundle_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bundle_translations`
--

INSERT INTO `bundle_translations` (`id`, `name`, `bundle_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'First bundle', 1, 'en', '2022-12-25 13:07:52', '2022-12-25 13:50:45'),
(2, 'First bundle', 1, 'ar', '2022-12-25 13:07:52', '2022-12-25 13:50:45'),
(3, 'Second bundle', 2, 'en', '2022-12-25 13:52:34', '2022-12-25 13:52:34'),
(4, 'Second bundle', 2, 'ar', '2022-12-25 13:52:34', '2022-12-25 13:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `capacities`
--

CREATE TABLE `capacities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `capacities`
--

INSERT INTO `capacities` (`id`, `created_at`, `updated_at`) VALUES
(3, '2022-11-01 14:01:22', '2022-11-01 14:01:22'),
(4, '2022-11-01 14:01:41', '2022-11-01 14:01:41'),
(5, '2022-11-20 20:24:14', '2022-11-20 20:24:14'),
(6, '2022-11-20 20:24:32', '2022-11-20 20:24:32'),
(7, '2022-11-20 20:24:45', '2022-11-20 20:24:45'),
(8, '2022-11-23 21:50:35', '2022-11-23 21:50:35');

-- --------------------------------------------------------

--
-- Table structure for table `capacity_translations`
--

CREATE TABLE `capacity_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `capacity_translations`
--

INSERT INTO `capacity_translations` (`id`, `name`, `capacity_id`, `locale`, `created_at`, `updated_at`) VALUES
(5, '128 GB', 3, 'en', '2022-11-01 14:01:22', '2022-11-01 14:01:22'),
(6, '128 جيجا', 3, 'ar', '2022-11-01 14:01:22', '2022-11-20 20:22:52'),
(7, '256 GB', 4, 'en', '2022-11-01 14:01:41', '2022-11-01 14:01:41'),
(8, '256 جيجا', 4, 'ar', '2022-11-01 14:01:41', '2022-11-20 20:22:42'),
(9, '512 GB', 5, 'en', '2022-11-20 20:24:14', '2022-11-20 20:24:14'),
(10, '512 جيجا', 5, 'ar', '2022-11-20 20:24:14', '2022-11-20 20:24:14'),
(11, '1 TB', 6, 'en', '2022-11-20 20:24:32', '2022-11-20 20:24:32'),
(12, '1 تيرا', 6, 'ar', '2022-11-20 20:24:32', '2022-11-20 20:24:32'),
(13, '2 TB', 7, 'en', '2022-11-20 20:24:45', '2022-11-20 20:24:45'),
(14, '2 تيرا', 7, 'ar', '2022-11-20 20:24:45', '2022-11-20 20:24:45'),
(15, '64 GB', 8, 'en', '2022-11-23 21:50:35', '2022-11-23 21:50:35'),
(16, '64 جيجا', 8, 'ar', '2022-11-23 21:50:35', '2022-11-23 21:50:35');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `created_at`, `updated_at`) VALUES
(1, '2022-11-23 21:41:33', '2022-11-23 21:41:34'),
(2, '2022-11-01 14:02:12', '2022-11-01 14:02:12'),
(8, '2022-11-20 20:03:35', '2022-11-20 20:03:35'),
(9, '2022-11-23 19:15:36', '2022-11-23 19:15:36'),
(10, '2022-11-23 21:47:29', '2022-11-23 21:47:29'),
(11, '2022-11-23 21:47:51', '2022-11-23 21:47:51'),
(12, '2022-11-23 21:48:05', '2022-11-23 21:48:05'),
(13, '2022-11-23 21:49:10', '2022-11-23 21:49:10'),
(14, '2022-11-23 21:49:52', '2022-11-23 21:49:52'),
(15, '2022-11-23 21:50:07', '2022-11-23 21:50:07'),
(16, '2022-11-29 16:19:39', '2022-11-29 16:19:39'),
(17, '2022-11-29 16:19:50', '2022-11-29 16:19:50'),
(18, '2022-11-29 16:20:02', '2022-11-29 16:20:02'),
(19, '2022-11-29 16:21:25', '2022-11-29 16:21:25'),
(20, '2022-11-29 16:22:17', '2022-11-29 16:22:17'),
(21, '2022-11-29 16:30:55', '2022-11-29 16:30:55'),
(22, '2022-11-29 16:34:09', '2022-11-29 16:34:09'),
(23, '2022-11-29 16:34:21', '2022-11-29 16:34:21'),
(24, '2022-11-29 16:34:31', '2022-11-29 16:34:31'),
(25, '2022-11-29 16:34:38', '2022-11-29 16:34:38'),
(26, '2022-11-29 16:34:51', '2022-11-29 16:34:51'),
(27, '2022-11-29 16:35:00', '2022-11-29 16:35:00'),
(28, '2022-11-29 16:35:05', '2022-11-29 16:35:05'),
(29, '2022-11-29 16:37:26', '2022-11-29 16:37:26'),
(30, '2022-11-29 16:37:46', '2022-11-29 16:37:46'),
(31, '2022-11-29 17:27:26', '2022-11-29 17:27:26'),
(32, '2022-11-29 17:27:35', '2022-11-29 17:27:35'),
(33, '2022-11-29 18:25:12', '2022-11-29 18:25:12');

-- --------------------------------------------------------

--
-- Table structure for table `color_translations`
--

CREATE TABLE `color_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_translations`
--

INSERT INTO `color_translations` (`id`, `name`, `color_id`, `locale`, `created_at`, `updated_at`) VALUES
(3, 'Silver', 2, 'en', '2022-11-01 14:02:12', '2022-11-01 14:02:12'),
(4, 'فضي', 2, 'ar', '2022-11-01 14:02:12', '2022-11-01 14:02:12'),
(15, 'Space Grey', 8, 'en', '2022-11-20 20:03:35', '2022-11-20 20:03:35'),
(16, 'Space Grey', 8, 'ar', '2022-11-20 20:03:35', '2022-11-20 20:03:35'),
(17, 'Blue', 9, 'en', '2022-11-23 19:15:36', '2022-11-23 19:32:28'),
(18, 'أزرق', 9, 'ar', '2022-11-23 19:15:36', '2022-11-23 19:32:28'),
(19, 'general', 1, 'en', NULL, NULL),
(20, 'general', 1, 'ar', NULL, NULL),
(21, 'Pink', 10, 'en', '2022-11-23 21:47:29', '2022-11-23 21:47:29'),
(22, 'Pink', 10, 'ar', '2022-11-23 21:47:29', '2022-11-23 21:49:26'),
(23, 'StarLight', 11, 'en', '2022-11-23 21:47:51', '2022-11-23 21:47:51'),
(24, 'StarLight', 11, 'ar', '2022-11-23 21:47:51', '2022-11-23 21:47:51'),
(25, 'Purple', 12, 'en', '2022-11-23 21:48:05', '2022-11-23 21:48:05'),
(26, 'بنفسجى', 12, 'ar', '2022-11-23 21:48:05', '2022-11-23 21:48:05'),
(27, 'Rose Gold', 13, 'en', '2022-11-23 21:49:10', '2022-11-23 21:49:10'),
(28, 'Rose Gold', 13, 'ar', '2022-11-23 21:49:10', '2022-11-23 21:49:10'),
(29, 'Sky Blue', 14, 'en', '2022-11-23 21:49:52', '2022-11-23 21:49:52'),
(30, 'أزرق سماوى', 14, 'ar', '2022-11-23 21:49:52', '2022-11-23 21:49:52'),
(31, 'Green', 15, 'en', '2022-11-23 21:50:07', '2022-11-23 21:50:07'),
(32, 'أخضر', 15, 'ar', '2022-11-23 21:50:07', '2022-11-23 21:50:07'),
(33, 'Deep Navy', 16, 'en', '2022-11-29 16:19:39', '2022-11-29 16:19:39'),
(34, 'Deep Navy', 16, 'ar', '2022-11-29 16:19:39', '2022-11-29 16:19:39'),
(35, 'Sunflower', 17, 'en', '2022-11-29 16:19:50', '2022-11-29 16:19:50'),
(36, 'Sunflower', 17, 'ar', '2022-11-29 16:19:50', '2022-11-29 16:19:50'),
(37, 'Electric Orange', 18, 'en', '2022-11-29 16:20:02', '2022-11-29 16:20:02'),
(38, 'Electric Orange', 18, 'ar', '2022-11-29 16:20:02', '2022-11-29 16:20:02'),
(39, 'White', 19, 'en', '2022-11-29 16:21:25', '2022-11-29 16:21:25'),
(40, 'أبيض', 19, 'ar', '2022-11-29 16:21:25', '2022-11-29 16:21:25'),
(41, 'Capri Blue', 20, 'en', '2022-11-29 16:22:17', '2022-11-29 16:22:17'),
(42, 'Capri Blue', 20, 'ar', '2022-11-29 16:22:17', '2022-11-29 16:22:17'),
(43, 'Pink Citrus', 21, 'en', '2022-11-29 16:30:55', '2022-11-29 16:30:55'),
(44, 'Pink Citrus', 21, 'ar', '2022-11-29 16:30:55', '2022-11-29 16:30:55'),
(45, 'Baltic Blue', 22, 'en', '2022-11-29 16:34:09', '2022-11-29 16:34:09'),
(46, 'Baltic Blue', 22, 'ar', '2022-11-29 16:34:09', '2022-11-29 16:34:09'),
(47, 'Red', 23, 'en', '2022-11-29 16:34:21', '2022-11-29 16:34:21'),
(48, 'أحمر', 23, 'ar', '2022-11-29 16:34:21', '2022-11-29 16:34:21'),
(49, 'Saddle Brown', 24, 'en', '2022-11-29 16:34:31', '2022-11-29 16:34:31'),
(50, 'Saddle Brown', 24, 'ar', '2022-11-29 16:34:31', '2022-11-29 16:34:31'),
(51, 'Meyer Lemon', 25, 'en', '2022-11-29 16:34:38', '2022-11-29 16:34:38'),
(52, 'Meyer Lemon', 25, 'ar', '2022-11-29 16:34:38', '2022-11-29 16:34:38'),
(53, 'Forest Green', 26, 'en', '2022-11-29 16:34:51', '2022-11-29 16:34:51'),
(54, 'Forest Green', 26, 'ar', '2022-11-29 16:34:51', '2022-11-29 16:34:51'),
(55, 'California Poppy', 27, 'en', '2022-11-29 16:35:00', '2022-11-29 16:35:00'),
(56, 'California Poppy', 27, 'ar', '2022-11-29 16:35:00', '2022-11-29 16:35:00'),
(57, 'Midnight', 28, 'en', '2022-11-29 16:35:05', '2022-11-29 16:35:33'),
(58, 'Midnight', 28, 'ar', '2022-11-29 16:35:05', '2022-11-29 16:35:33'),
(59, 'Golden Brown', 29, 'en', '2022-11-29 16:37:26', '2022-11-29 16:37:26'),
(60, 'Golden Brown', 29, 'ar', '2022-11-29 16:37:26', '2022-11-29 16:37:26'),
(61, 'Wisteria', 30, 'en', '2022-11-29 16:37:46', '2022-11-29 16:37:46'),
(62, 'Wisteria', 30, 'ar', '2022-11-29 16:37:46', '2022-11-29 16:37:46'),
(63, 'Mallard Green', 31, 'en', '2022-11-29 17:27:26', '2022-11-29 17:27:26'),
(64, 'Mallard Green', 31, 'ar', '2022-11-29 17:27:26', '2022-11-29 17:27:26'),
(65, 'English Lavender', 32, 'en', '2022-11-29 17:27:35', '2022-11-29 17:27:35'),
(66, 'English Lavender', 32, 'ar', '2022-11-29 17:27:35', '2022-11-29 17:27:35'),
(67, 'Black', 33, 'en', '2022-11-29 18:25:12', '2022-11-29 18:25:12'),
(68, 'أسود', 33, 'ar', '2022-11-29 18:25:12', '2022-11-29 18:25:12');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'AWCFA1MS4pOWKYgrcZM79vMOAtdi1oN0jZr4FDCh.jpg', NULL, '2022-11-29 23:52:41');

-- --------------------------------------------------------

--
-- Table structure for table `content_translations`
--

CREATE TABLE `content_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_translations`
--

INSERT INTO `content_translations` (`id`, `title`, `subtitle`, `description`, `content_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT OUR PROGRAM', 'DEDICATED FOR EDUCATORS AND LEARNERS.', 'Parental Purchase Program is part of the educational solution presented to educational community, where parents of registered schools are able to purchase and quote directly from the store the Apple devices needed with special discount and seamless integration.\r\nZenithArabia, as an Authorized Educational Specialist, adheres to the parental purchase program by offering solutions that include discount on purchasing iPads & mac for school activities and an agreement on training and support service.', 1, 'en', NULL, '2022-12-01 16:20:03'),
(2, 'ABOUT OUR PROGRAM', 'DEDICATED FOR EDUCATORS AND LEARNERS.', 'Parental Purchase Program is part of the educational solution presented to educational community, where parents of registered schools are able to purchase and quote directly from the store the Apple devices needed with special discount and seamless integration.\r\nZenithArabia, as an Authorized Educational Specialist, adheres to the parental purchase program by offering solutions that include discount on purchasing iPads & mac for school activities and an agreement on training and support service.', 1, 'ar', NULL, '2022-12-01 16:20:03');

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
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'lc4WHzYBmIgN2CFEgSGdsgLtCU1LgCA8J9VsSXzq.jpg', NULL, '2022-11-30 20:19:25');

-- --------------------------------------------------------

--
-- Table structure for table `home_translations`
--

CREATE TABLE `home_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_translations`
--

INSERT INTO `home_translations` (`id`, `title`, `subtitle`, `description1`, `title1`, `description2`, `home_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT OUR PROGRAM', 'DEDICATED FOR EDUCATORS AND LEARNERS.', 'Parental Purchase Program is part of the educational solution presented to educational community, where parents of registered schools are able to purchase and quote directly from the store the Apple devices needed with special discount and seamless integration.', 'BE A PARTNER AT ZenithArabia', 'ZenithArabia is an Apple Authorized Education Seller and a provider of customized & tailored education solutions.', 1, 'en', NULL, '2022-12-01 16:13:51'),
(2, 'ABOUT OUR PROGRAM', 'DEDICATED FOR EDUCATORS AND LEARNERS.', 'Parental Purchase Program is part of the educational solution presented to educational community, where parents of registered schools are able to purchase and quote directly from the store the Apple devices needed with special discount and seamless integration.', 'BE A PARTNER AT ZenithArabia', 'ZenithArabia is an Apple Authorized Education Seller and a provider of customized & tailored education solutions.', 1, 'ar', NULL, '2022-12-01 16:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Abdelaziz Gamal', 'zeezo.gamal@gmail.com', '01210224040', 'test', 'test contact us', '2022-11-07 20:10:22', '2022-11-07 20:10:22'),
(3, 'Abdelaziz Gamal', 'zeezo.gamal@gmail.com', '01210224040', 'New customer', 'test message', '2022-12-14 20:15:28', '2022-12-14 20:15:28');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_13_145107_create_admins_table', 1),
(12, '2022_11_01_143903_create_capacities_table', 2),
(13, '2022_11_01_144152_create_capacity_translations_table', 2),
(14, '2022_11_01_144525_create_colors_table', 2),
(15, '2022_11_01_144540_create_color_translations_table', 2),
(17, '2022_11_01_155709_create_schools_table', 3),
(18, '2022_11_01_155716_create_school_translations_table', 3),
(19, '2022_11_01_171604_create_products_table', 4),
(20, '2022_11_01_171614_create_product_specifications_table', 4),
(21, '2022_11_01_171642_create_product_translations_table', 4),
(22, '2022_11_01_171652_create_product_images_table', 4),
(23, '2022_11_01_232407_drop_color_id_colomn_in_product_specifications_table', 5),
(24, '2022_11_02_131148_update_inputs_in_products_table', 6),
(25, '2022_05_24_181111_create_social_links_table', 7),
(26, '2022_11_02_152909_create_privacies_table', 8),
(27, '2022_11_02_152935_create_terms_table', 8),
(28, '2022_11_02_152949_create_privacy_translations_table', 8),
(29, '2022_11_02_152957_create_term_translations_table', 8),
(30, '2022_11_02_153018_create_refunds_table', 8),
(31, '2022_11_02_153024_create_refund_translations_table', 8),
(32, '2022_11_02_153048_create_shippings_table', 8),
(33, '2022_11_02_153100_create_shipping_translations_table', 8),
(34, '2022_05_24_231421_create_messages_table', 9),
(35, '2022_11_02_163825_create_sliders_table', 10),
(36, '2022_11_02_163842_create_slider_translations_table', 10),
(37, '2022_11_02_213428_create_benefits_table', 11),
(38, '2022_11_02_213434_create_benefit_translations_table', 11),
(39, '2022_11_02_220127_create_abouts_table', 12),
(40, '2022_11_02_220157_create_about_translations_table', 12),
(41, '2022_11_02_224910_create_programs_table', 13),
(42, '2022_11_02_224916_create_program_translations_table', 13),
(43, '2022_11_02_233843_create_registeration_requests_table', 14),
(44, '2022_11_03_115559_create_parents_table', 15),
(45, '2022_11_03_115611_create_parent_translations_table', 15),
(46, '2022_11_03_123814_add_inputs_to_users_table', 16),
(47, '2022_11_06_121014_create_orders_table', 17),
(48, '2022_11_07_232101_create_settings_table', 18),
(49, '2022_11_07_232238_create_setting_translations_table', 18),
(50, '2022_11_14_132058_drop_colomns_from_products_table', 19),
(51, '2022_11_14_132603_add_inputs_to_product_specifications_table', 20),
(52, '2022_11_15_213426_create_user_childrens_table', 21),
(53, '2022_11_15_213626_drop_inputs_from_users_table', 21),
(54, '2022_11_16_201116_add_inputs_to_registeration_requests_table', 22),
(56, '2022_11_16_202938_add_input_to_product_specifications_table', 23),
(57, '2022_11_16_202949_add_input_to_product_images_table', 23),
(58, '2022_11_19_140554_drop_colomn_from_products_table', 24),
(59, '2022_11_19_143248_drop_school_id_from_products_table', 25),
(60, '2022_11_19_143355_create_product_schools_table', 26),
(61, '2022_11_19_154711_update_inputs_in_product_specifications_table', 27),
(62, '2022_11_20_120520_add_colomn_to_product_translations_table', 28),
(65, '2022_11_20_140957_add_colomn_to_products_table', 29),
(66, '2022_11_28_111925_create_accessories_table', 30),
(67, '2022_11_28_111934_create_accessory_translations_table', 30),
(68, '2022_11_28_112119_create_accessory_images_table', 30),
(69, '2022_11_28_112903_create_accessory_specifications_table', 30),
(70, '2022_11_29_132521_update_inputs_in_accessory_translations_table', 31),
(71, '2022_11_29_224939_update_inputs_in_sliders_table', 32),
(72, '2022_11_29_231040_update_inputs_in_slider_translations_table', 33),
(73, '2022_11_29_232235_update_inputs_in_parental_translations_table', 34),
(74, '2022_11_30_001731_create_offers_table', 35),
(75, '2022_11_30_001736_create_offer_translations_table', 35),
(76, '2022_11_30_004757_update_inputs_in_programs_table', 36),
(77, '2022_11_30_012151_create_works_table', 37),
(78, '2022_11_30_012157_create_work_translations_table', 37),
(79, '2022_11_30_013854_create_contents_table', 38),
(80, '2022_11_30_013859_create_content_translation_table', 38),
(81, '2022_11_30_125527_create_homes_table', 39),
(82, '2022_11_30_125543_create_home_translations_table', 39),
(83, '2022_12_13_134427_create_product_accessories_table', 40),
(84, '2022_12_13_151015_add_input_to_orders_table', 41),
(85, '2022_12_18_144113_add_input_in_orders_table', 42),
(86, '2022_12_18_212827_add_payment_details_input_to_orders_table', 43),
(87, '2022_12_19_140923_add_terms_input_to_product_translations_table', 44),
(88, '2022_12_25_123327_create_bundles_table', 45),
(89, '2022_12_25_123734_create_bundle_translations_table', 45),
(90, '2022_12_25_124322_update_inputs_in_bundles_table', 46),
(91, '2022_12_25_124644_create_bundle_accessories_table', 47);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `type`, `image`, `created_at`, `updated_at`) VALUES
(1, 'parental', 'lPrSc0ccjbnA9pkquNbsSah1kpEn1dKxKjv3fCPF.png', '2022-11-29 22:35:38', '2022-11-29 22:35:38'),
(2, 'parental', '8oJ8e98WDUMtU5HwsVNKDLHNfuEcdDTdRkBqxzt7.png', '2022-11-29 22:36:19', '2022-11-29 22:36:19'),
(3, 'parental', 'B1U0EhkMd6yaWkusInoRatG9po09bkVaCXfmA81r.png', '2022-11-29 22:36:39', '2022-11-29 22:36:39'),
(4, 'parental', 'TIzl8hBt8nxUALtm620cYNNCc3kQNJNB9eXeFoDZ.png', '2022-11-29 22:36:57', '2022-11-29 22:36:57'),
(5, 'parental', 'D09A7kf7SkS9buam7eA3Be0wpVKVV8ssRbvzcWuG.png', '2022-11-29 22:37:15', '2022-11-29 22:37:15'),
(6, 'parental', 'CTELTJFOk8Ax3sAPsHd17dJsHjrbYutkHkaP4IP6.png', '2022-11-29 22:37:30', '2022-11-29 22:37:30'),
(7, 'parental', 'Q387X2eH1O925oV0P2jZ5qjDDRW4Apn3SA5XGSPZ.png', '2022-11-29 22:37:48', '2022-11-29 22:37:48'),
(8, 'parental', 'DjIHP8UCEKt9Ki8BZ64zyLHvlWObnPd9NQ0s7gCw.png', '2022-11-29 22:38:00', '2022-11-29 22:38:00'),
(9, 'school', 'TQTswKsH36ZtorI1aeEJNs76vUeIEnp5GFJ8Qy56.png', '2022-11-29 22:39:04', '2022-11-29 22:39:04'),
(10, 'school', 'xoFO5iHL5tAGRldyPdhOYRuLguAuVCL0mFRxeYbj.png', '2022-11-29 22:39:13', '2022-11-29 22:39:13'),
(11, 'school', 'PsSAuh0MuA1mlLcEfX6U9ok2izo0g4a79CvkP5sD.png', '2022-11-29 22:40:28', '2022-11-29 22:40:28'),
(12, 'school', 'S1uDXABp9hCOCOrCNvzK7J2rrd4pOGQiXlRz0ucM.png', '2022-11-29 22:40:43', '2022-11-29 22:40:43'),
(13, 'school', 'njGfPhCf4cHCiTt3CW3WUePsuOJxUYPlDrtb2d8K.png', '2022-11-29 22:40:59', '2022-11-29 22:40:59'),
(14, 'school', 'bAJp9oN219lLUCTgL0cAQqDh9qkY7xFlw9dDNlnt.png', '2022-11-29 22:41:14', '2022-11-29 22:41:14'),
(15, 'school', 'vJIDT4p0HxH1E9nQ8AXmyXet1YZf4jbXVBWtcUFr.png', '2022-11-29 22:41:30', '2022-11-29 22:41:30'),
(16, 'school', 'XbBVfrKQF5XcQMYzEFlf26aeaD7ca3y95CyvLCIz.png', '2022-11-29 22:41:40', '2022-11-29 22:41:40'),
(17, 'parents', 'sIAtAgXDcCr3hNLgxd4h3BF6EH6GNfHEsioVjhxt.png', '2022-11-29 23:12:42', '2022-11-29 23:13:40'),
(18, 'parents', '2vkuodioMof22BJ3KI2l1FxTPod4p4MHvWd7PchS.png', '2022-11-29 23:13:01', '2022-11-29 23:13:31'),
(19, 'parents', 'JnFHNaTei9skPkBQTjuQhhgFDjIXhR8TIcABqKqI.png', '2022-11-29 23:13:49', '2022-11-29 23:13:49'),
(20, 'parents', '5MDamqnP02YekfX4Gi6XRzHjYinCK9jwVCrH3twS.png', '2022-11-29 23:13:59', '2022-11-29 23:13:59'),
(21, 'parents', 'i4FLNSnCYoQnYeTJWkUYODV9rdAul1qLgxtQFKg6.png', '2022-11-29 23:14:15', '2022-11-29 23:14:15'),
(22, 'parents', 'poPG2QrCQhk2cVcDSFYhLqrArggehxyFqmyPSNoj.png', '2022-11-29 23:14:34', '2022-11-29 23:14:34'),
(23, 'parents', 'ruvTgBZw5mf087Ue5j2rB1QLwhGeOCu3OlrzFdEe.png', '2022-11-29 23:14:43', '2022-11-29 23:14:43'),
(24, 'parents', 'B7R1g5JAK7SPib7piP6qEqJckm9bzd6Ppo47oy6h.png', '2022-11-29 23:14:53', '2022-11-29 23:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `offer_translations`
--

CREATE TABLE `offer_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offer_translations`
--

INSERT INTO `offer_translations` (`id`, `title`, `offer_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'END OF USE IN SCHOOL', 1, 'en', '2022-11-29 22:35:38', '2022-11-29 22:35:38'),
(2, 'END OF USE IN SCHOOL', 1, 'ar', '2022-11-29 22:35:38', '2022-11-29 22:35:38'),
(3, 'DEVICE CARE PLANS & EXTENDED WARRANTY', 2, 'en', '2022-11-29 22:36:19', '2022-11-29 22:36:19'),
(4, 'DEVICE CARE PLANS & EXTENDED WARRANTY', 2, 'ar', '2022-11-29 22:36:19', '2022-11-29 22:36:19'),
(5, 'DOOR TO DOOR DELIVERY', 3, 'en', '2022-11-29 22:36:39', '2022-11-29 22:36:39'),
(6, 'DOOR TO DOOR DELIVERY', 3, 'ar', '2022-11-29 22:36:39', '2022-11-29 22:36:39'),
(7, 'EDUCATIONAL DISCOUNT', 4, 'en', '2022-11-29 22:36:57', '2022-11-29 22:36:57'),
(8, 'EDUCATIONAL DISCOUNT', 4, 'ar', '2022-11-29 22:36:57', '2022-11-29 22:36:57'),
(9, 'TABBY / TAMMARA 4 MONTHS INSTALLMENT SERVICES', 5, 'en', '2022-11-29 22:37:15', '2022-11-29 22:37:15'),
(10, 'TABBY / TAMMARA 4 MONTHS INSTALLMENT SERVICES', 5, 'ar', '2022-11-29 22:37:15', '2022-11-29 22:37:15'),
(11, 'ACCESSORIES ( SCREE PROTECTOR , COVERS ENGRAVING, ETC.)', 6, 'en', '2022-11-29 22:37:30', '2022-11-29 22:37:30'),
(12, 'ACCESSORIES ( SCREE PROTECTOR , COVERS ENGRAVING, ETC.)', 6, 'ar', '2022-11-29 22:37:30', '2022-11-29 22:37:30'),
(13, 'DEPLOYMENT SERVICES', 7, 'en', '2022-11-29 22:37:48', '2022-11-29 22:37:48'),
(14, 'DEPLOYMENT SERVICES', 7, 'ar', '2022-11-29 22:37:48', '2022-11-29 22:37:48'),
(15, 'CUSTOMIZED PORTAL WITH THE SCHOOL LOGO', 8, 'en', '2022-11-29 22:38:00', '2022-11-29 22:38:00'),
(16, 'CUSTOMIZED PORTAL WITH THE SCHOOL LOGO', 8, 'ar', '2022-11-29 22:38:00', '2022-11-29 22:38:00'),
(17, 'END OF USE IN SCHOOL', 9, 'en', '2022-11-29 22:39:04', '2022-11-29 22:39:04'),
(18, 'END OF USE IN SCHOOL', 9, 'ar', '2022-11-29 22:39:04', '2022-11-29 22:39:04'),
(19, 'DEVICE CARE PLANS & EXTENDED WARRANTY', 10, 'en', '2022-11-29 22:39:13', '2022-11-29 22:39:13'),
(20, 'DEVICE CARE PLANS & EXTENDED WARRANTY', 10, 'ar', '2022-11-29 22:39:13', '2022-11-29 22:39:13'),
(21, 'DOOR TO DOOR DELIVERY', 11, 'en', '2022-11-29 22:40:28', '2022-11-29 22:40:28'),
(22, 'DOOR TO DOOR DELIVERY', 11, 'ar', '2022-11-29 22:40:28', '2022-11-29 22:40:28'),
(23, 'EDUCATIONAL DISCOUNT', 12, 'en', '2022-11-29 22:40:43', '2022-11-29 22:40:43'),
(24, 'EDUCATIONAL DISCOUNT', 12, 'ar', '2022-11-29 22:40:43', '2022-11-29 22:40:43'),
(25, 'TABBY / TAMMARA 4 MONTHS INSTALLMENT SERVICES', 13, 'en', '2022-11-29 22:40:59', '2022-11-29 22:40:59'),
(26, 'TABBY / TAMMARA 4 MONTHS INSTALLMENT SERVICES', 13, 'ar', '2022-11-29 22:40:59', '2022-11-29 22:40:59'),
(27, 'ACCESSORIES ( SCREE PROTECTOR , COVERS ENGRAVING, ETC.)', 14, 'en', '2022-11-29 22:41:14', '2022-11-29 22:41:14'),
(28, 'ACCESSORIES ( SCREE PROTECTOR , COVERS ENGRAVING, ETC.)', 14, 'ar', '2022-11-29 22:41:14', '2022-11-29 22:41:14'),
(29, 'DEPLOYMENT SERVICES', 15, 'en', '2022-11-29 22:41:30', '2022-11-29 22:41:30'),
(30, 'DEPLOYMENT SERVICES', 15, 'ar', '2022-11-29 22:41:30', '2022-11-29 22:41:30'),
(31, 'CUSTOMIZED PORTAL WITH THE SCHOOL LOGO', 16, 'en', '2022-11-29 22:41:40', '2022-11-29 22:41:40'),
(32, 'CUSTOMIZED PORTAL WITH THE SCHOOL LOGO', 16, 'ar', '2022-11-29 22:41:40', '2022-11-29 22:41:40'),
(33, 'END OF USE RESET TO COMMERCIAL SETTING.', 17, 'en', '2022-11-29 23:12:42', '2022-11-29 23:12:42'),
(34, 'END OF USE RESET TO COMMERCIAL SETTING.', 17, 'ar', '2022-11-29 23:12:42', '2022-11-29 23:12:42'),
(35, 'CUSTOMER SUPPORT.', 18, 'en', '2022-11-29 23:13:01', '2022-11-29 23:13:01'),
(36, 'CUSTOMER SUPPORT.', 18, 'ar', '2022-11-29 23:13:01', '2022-11-29 23:13:01'),
(37, 'PARENT DEVICE-OWNERSHIP.', 19, 'en', '2022-11-29 23:13:49', '2022-11-29 23:13:49'),
(38, 'PARENT DEVICE-OWNERSHIP.', 19, 'ar', '2022-11-29 23:13:49', '2022-11-29 23:13:49'),
(39, 'PRIVACY AND SECURITY', 20, 'en', '2022-11-29 23:13:59', '2022-11-29 23:13:59'),
(40, 'PRIVACY AND SECURITY', 20, 'ar', '2022-11-29 23:13:59', '2022-11-29 23:13:59'),
(41, 'DOOR TO DOOR DELIVERY.', 21, 'en', '2022-11-29 23:14:15', '2022-11-29 23:14:15'),
(42, 'DOOR TO DOOR DELIVERY.', 21, 'ar', '2022-11-29 23:14:15', '2022-11-29 23:14:15'),
(43, 'FINANCIAL INSTALLMENT SERVICES.', 22, 'en', '2022-11-29 23:14:34', '2022-11-29 23:14:34'),
(44, 'FINANCIAL INSTALLMENT SERVICES.', 22, 'ar', '2022-11-29 23:14:34', '2022-11-29 23:14:34'),
(45, 'ONLINE PAYMENT PLATFORM.', 23, 'en', '2022-11-29 23:14:43', '2022-11-29 23:14:43'),
(46, 'ONLINE PAYMENT PLATFORM.', 23, 'ar', '2022-11-29 23:14:43', '2022-11-29 23:14:43'),
(47, 'PURCHASE OF PRECONFIGURED APPLE DEVICES & ACCESSORIES', 24, 'en', '2022-11-29 23:14:53', '2022-11-29 23:14:53'),
(48, 'PURCHASE OF PRECONFIGURED APPLE DEVICES & ACCESSORIES', 24, 'ar', '2022-11-29 23:14:53', '2022-11-29 23:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_no` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `items` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_no`, `name`, `phone`, `email`, `city`, `state`, `address`, `address2`, `items`, `total`, `status`, `payment_details`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '5a16d23b-3b47-4eb0-8a60-63e4531e8d05', 'Abdelaziz Gamal', '01210224040', 'zeezo.gamal@gmail.com', 'New Cairo', 'Cairo', 'Ibn Malka St', '37', '{\"15\":{\"id\":\"15\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/NZJ0ibZlSwVOGsXoZjC1H5lV1s88C5a5UJEbPJVQ.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}}}', '4232.64', 'pending', NULL, 11, '2022-12-14 20:21:29', '2022-12-14 20:21:29'),
(2, '9d9a0cca-b0e7-4b2c-b256-16f1d5b87c2c', 'Abdelaziz Gamal', '01210224040', 'zeezo.gamal@gmail.com', 'New Cairo', 'Cairo', 'Ibn Malka St', '37', '{\"15\":{\"id\":\"15\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/NZJ0ibZlSwVOGsXoZjC1H5lV1s88C5a5UJEbPJVQ.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}},\"4\":{\"id\":\"4\",\"name\":\"Smart Folio (iPad Pro 12.9-inch (6th generation)\",\"price\":336.009999999999990905052982270717620849609375,\"quantity\":\"3\",\"attributes\":{\"id\":4,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/accessories\\/yeuBdut2bLcwVVt7Jtu99jAHDQ28mA9DXD3jkuxk.jpg\",\"name_en\":\"Smart Folio (iPad Pro 12.9-inch (6th generation)\",\"name_ar\":\"Smart Folio (iPad Pro 12.9-inch (6th generation)\",\"slug\":\"smart-folio-ipad-pro-12-9-inch-6th-generation\",\"sku\":\"MJMG3ZE\\/A\"},\"conditions\":[],\"associatedModel\":\"accessory\",\"spec\":{\"id\":6,\"accessory_id\":\"4\",\"price\":\"336.01\",\"sku\":\"MJMG3ZE\\/A\",\"color_id\":\"33\",\"locale\":null,\"created_at\":\"2022-11-29T10:24:17.000000Z\",\"updated_at\":\"2022-11-29T11:25:49.000000Z\",\"color\":{\"id\":33,\"created_at\":\"2022-11-29T11:25:12.000000Z\",\"updated_at\":\"2022-11-29T11:25:12.000000Z\",\"name\":\"Black\",\"translations\":[{\"id\":68,\"name\":\"\\u0623\\u0633\\u0648\\u062f\",\"color_id\":\"33\",\"locale\":\"ar\",\"created_at\":\"2022-11-29T11:25:12.000000Z\",\"updated_at\":\"2022-11-29T11:25:12.000000Z\"},{\"id\":67,\"name\":\"Black\",\"color_id\":\"33\",\"locale\":\"en\",\"created_at\":\"2022-11-29T11:25:12.000000Z\",\"updated_at\":\"2022-11-29T11:25:12.000000Z\"}]}}},\"6\":{\"id\":\"6\",\"name\":\"Apple pencil (1st generation)\",\"price\":444.26999999999998181010596454143524169921875,\"quantity\":\"1\",\"attributes\":{\"id\":6,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/accessories\\/sbKLEltvcRFxyeWi4gofxwVow9ePPTBoH8675bm8.jpg\",\"name_en\":\"Apple pencil (1st generation)\",\"name_ar\":\"Apple pencil (1st generation)\",\"slug\":\"apple-pencil-1st-generation\",\"sku\":\"MK0C2ZE\\/A\"},\"conditions\":[],\"associatedModel\":\"accessory\",\"spec\":{\"id\":16,\"accessory_id\":\"6\",\"price\":\"444.27\",\"sku\":\"MK0C2ZE\\/A\",\"color_id\":null,\"locale\":null,\"created_at\":\"2022-11-29T13:45:13.000000Z\",\"updated_at\":\"2022-11-29T13:45:13.000000Z\"}},\"16\":{\"id\":\"16\",\"name\":\"iPad 10.9 (10th generation)\",\"price\":2327.579999999999927240423858165740966796875,\"quantity\":\"1\",\"attributes\":{\"id\":16,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/JD9PtFbTFOMNC2RLxFr8vwR2C8HxjVBm7F1IECLm.jpg\",\"name_en\":\"iPad 10.9 (10th generation)\",\"name_ar\":\"iPad 10.9 (10th generation)\",\"slug\":\"ipad-10-9-10th-generation\",\"sku\":\"MM9C3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":51,\"product_id\":\"16\",\"capacity_id\":\"8\",\"type\":null,\"price\":\"2327.58\",\"sku\":\"MM9C3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-23T14:47:02.000000Z\",\"updated_at\":\"2022-11-23T14:51:17.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":8,\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\",\"name\":\"64 GB\",\"translations\":[{\"id\":16,\"name\":\"64 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\"},{\"id\":15,\"name\":\"64 GB\",\"capacity_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\"}]}}}}', '8012.52', 'pending', NULL, 11, '2022-12-14 20:32:23', '2022-12-14 20:32:23'),
(3, 'b2e144cb-71ae-4e7d-a80b-6d60d98213ce', 'mostafa', '01011093385', 'elbiheiry2@gmail.com', 'test', 'test', 'test', 'test', '{\"16\":{\"id\":\"16\",\"name\":\"iPad 10.9 (10th generation)\",\"price\":2327.579999999999927240423858165740966796875,\"quantity\":\"1\",\"attributes\":{\"id\":16,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/JD9PtFbTFOMNC2RLxFr8vwR2C8HxjVBm7F1IECLm.jpg\",\"name_en\":\"iPad 10.9 (10th generation)\",\"name_ar\":\"iPad 10.9 (10th generation)\",\"slug\":\"ipad-10-9-10th-generation\",\"sku\":\"MM9C3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":51,\"product_id\":\"16\",\"capacity_id\":\"8\",\"type\":null,\"price\":\"2327.58\",\"sku\":\"MM9C3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-23T14:47:02.000000Z\",\"updated_at\":\"2022-11-23T14:51:17.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":8,\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\",\"name\":\"64 GB\",\"translations\":[{\"id\":16,\"name\":\"64 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\"},{\"id\":15,\"name\":\"64 GB\",\"capacity_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\"}]}}}}', '2327.58', 'pending', NULL, 1, '2022-12-14 20:52:41', '2022-12-14 20:52:41'),
(4, '42938045', 'mostafa', '01011093385', 'elbiheiry2@gmail.com', 'test', 'test', 'test', 'test', '{\"15\":{\"id\":\"15\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/NZJ0ibZlSwVOGsXoZjC1H5lV1s88C5a5UJEbPJVQ.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}}}', '4232.64', 'pending', NULL, 1, '2022-12-14 20:56:27', '2022-12-14 20:56:27'),
(5, '58737496', 'Abdelaziz Gamal', '01210224040', 'zeezo.gamal@gmail.com', 'New Cairo', 'Cairo', 'Ibn Malka St', '37', '{\"15\":{\"id\":\"15\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/NZJ0ibZlSwVOGsXoZjC1H5lV1s88C5a5UJEbPJVQ.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}}}', '4232.64', 'pending', NULL, 11, '2022-12-14 21:10:53', '2022-12-14 21:10:53'),
(6, '61954578', 'Hesham Gamal', '01090353855', 'hesham.gamal23192@gmail.com', 'cairo', 'cairo', 'nasr city', NULL, '{\"15\":{\"id\":\"15\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/NZJ0ibZlSwVOGsXoZjC1H5lV1s88C5a5UJEbPJVQ.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}}}', '4232.64', 'pending', NULL, 13, '2022-12-18 15:07:34', '2022-12-18 15:07:34'),
(7, '79551537', 'mostafa', '01011093385', 'elbiheiry2@gmail.com', 'test', 'test', 'test', 'test', '{\"15\":{\"id\":\"15\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/NZJ0ibZlSwVOGsXoZjC1H5lV1s88C5a5UJEbPJVQ.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}}}', '4232.64', 'pending', NULL, 1, '2022-12-19 00:07:27', '2022-12-19 00:07:27'),
(8, '87337995', 'mostafa', '01011093385', 'elbiheiry2@gmail.com', 'Alexandria', 'alex', 'test', 'test', '{\"15\":{\"id\":\"15\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/NZJ0ibZlSwVOGsXoZjC1H5lV1s88C5a5UJEbPJVQ.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}}}', '4232.64', 'pending', NULL, 1, '2022-12-19 03:19:50', '2022-12-19 03:19:50'),
(9, '99860525', 'mostafa', '01011093385', 'elbiheiry2@gmail.com', 'cairo', 'giza', 'test', 'test', '{\"15\":{\"id\":\"15\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/NZJ0ibZlSwVOGsXoZjC1H5lV1s88C5a5UJEbPJVQ.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}}}', '4232.64', 'pending', NULL, 1, '2022-12-19 03:23:25', '2022-12-19 03:23:25'),
(10, '105305545', 'mostafa', '01011093385', 'elbiheiry2@gmail.com', 'cairo', 'egypt', 'test', 'test', '{\"16\":{\"id\":\"16\",\"name\":\"iPad 10.9 (10th generation)\",\"price\":2327.579999999999927240423858165740966796875,\"quantity\":\"1\",\"attributes\":{\"id\":16,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/JD9PtFbTFOMNC2RLxFr8vwR2C8HxjVBm7F1IECLm.jpg\",\"name_en\":\"iPad 10.9 (10th generation)\",\"name_ar\":\"iPad 10.9 (10th generation)\",\"slug\":\"ipad-10-9-10th-generation\",\"sku\":\"MM9C3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":51,\"product_id\":\"16\",\"capacity_id\":\"8\",\"type\":null,\"price\":\"2327.58\",\"sku\":\"MM9C3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-23T14:47:02.000000Z\",\"updated_at\":\"2022-11-23T14:51:17.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":8,\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\",\"name\":\"64 GB\",\"translations\":[{\"id\":16,\"name\":\"64 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\"},{\"id\":15,\"name\":\"64 GB\",\"capacity_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\"}]}}}}', '2327.58', 'pending', NULL, 1, '2022-12-19 03:25:19', '2022-12-19 03:25:19'),
(11, '111732642', 'mostafa', '01011093385', 'elbiheiry2@gmail.com', 'cairo', 'egypt', 'test', 'test', '{\"16\":{\"id\":\"16\",\"name\":\"iPad 10.9 (10th generation)\",\"price\":2327.579999999999927240423858165740966796875,\"quantity\":\"1\",\"attributes\":{\"id\":16,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/JD9PtFbTFOMNC2RLxFr8vwR2C8HxjVBm7F1IECLm.jpg\",\"name_en\":\"iPad 10.9 (10th generation)\",\"name_ar\":\"iPad 10.9 (10th generation)\",\"slug\":\"ipad-10-9-10th-generation\",\"sku\":\"MM9C3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":51,\"product_id\":\"16\",\"capacity_id\":\"8\",\"type\":null,\"price\":\"2327.58\",\"sku\":\"MM9C3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-23T14:47:02.000000Z\",\"updated_at\":\"2022-11-23T14:51:17.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":8,\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\",\"name\":\"64 GB\",\"translations\":[{\"id\":16,\"name\":\"64 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\"},{\"id\":15,\"name\":\"64 GB\",\"capacity_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\"}]}}}}', '2327.58', 'pending', NULL, 1, '2022-12-19 03:34:09', '2022-12-19 03:34:09'),
(12, '122252376', 'mostafa', '01011093385', 'elbiheiry2@gmail.com', 'test', 'test', 'test', 'test', '{\"4\":{\"id\":\"4\",\"name\":\"Smart Folio (iPad Pro 12.9-inch (6th generation)\",\"price\":336.009999999999990905052982270717620849609375,\"quantity\":\"1\",\"attributes\":{\"id\":4,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/public\\/storage\\/accessories\\/yeuBdut2bLcwVVt7Jtu99jAHDQ28mA9DXD3jkuxk.jpg\",\"name_en\":\"Smart Folio (iPad Pro 12.9-inch (6th generation)\",\"name_ar\":\"Smart Folio (iPad Pro 12.9-inch (6th generation)\",\"slug\":\"smart-folio-ipad-pro-12-9-inch-6th-generation\",\"sku\":\"MJMG3ZE\\/A\"},\"conditions\":[],\"associatedModel\":\"accessory\",\"spec\":{\"id\":6,\"accessory_id\":\"4\",\"price\":\"336.01\",\"sku\":\"MJMG3ZE\\/A\",\"color_id\":\"33\",\"locale\":null,\"created_at\":\"2022-11-29T10:24:17.000000Z\",\"updated_at\":\"2022-11-29T11:25:49.000000Z\",\"color\":{\"id\":33,\"created_at\":\"2022-11-29T11:25:12.000000Z\",\"updated_at\":\"2022-11-29T11:25:12.000000Z\",\"name\":\"Black\",\"translations\":[{\"id\":68,\"name\":\"\\u0623\\u0633\\u0648\\u062f\",\"color_id\":\"33\",\"locale\":\"ar\",\"created_at\":\"2022-11-29T11:25:12.000000Z\",\"updated_at\":\"2022-11-29T11:25:12.000000Z\"},{\"id\":67,\"name\":\"Black\",\"color_id\":\"33\",\"locale\":\"en\",\"created_at\":\"2022-11-29T11:25:12.000000Z\",\"updated_at\":\"2022-11-29T11:25:12.000000Z\"}]}}}}', '336.01', 'pending', NULL, 1, '2022-12-19 03:50:54', '2022-12-19 03:50:54'),
(13, '137006723', 'mostafa', '01011093385', 'elbiheiry2@gmail.com', 'cairo', 'egypt', 'test', 'test', '{\"15\":{\"id\":\"15\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/NZJ0ibZlSwVOGsXoZjC1H5lV1s88C5a5UJEbPJVQ.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}}}', '4232.64', 'pending', NULL, 1, '2022-12-19 03:55:43', '2022-12-19 03:55:43'),
(14, '147417645', 'mostafa', '01011093385', 'elbiheiry2@gmail.com', 'test', 'test', 'test', 'test', '{\"16\":{\"id\":\"16\",\"name\":\"iPad 10.9 (10th generation)\",\"price\":2327.579999999999927240423858165740966796875,\"quantity\":\"1\",\"attributes\":{\"id\":16,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/public\\/storage\\/products\\/JD9PtFbTFOMNC2RLxFr8vwR2C8HxjVBm7F1IECLm.jpg\",\"name_en\":\"iPad 10.9 (10th generation)\",\"name_ar\":\"iPad 10.9 (10th generation)\",\"slug\":\"ipad-10-9-10th-generation\",\"sku\":\"MM9C3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":51,\"product_id\":\"16\",\"capacity_id\":\"8\",\"type\":null,\"price\":\"2327.58\",\"sku\":\"MM9C3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-23T14:47:02.000000Z\",\"updated_at\":\"2022-11-23T14:51:17.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":8,\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\",\"name\":\"64 GB\",\"translations\":[{\"id\":16,\"name\":\"64 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\"},{\"id\":15,\"name\":\"64 GB\",\"capacity_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\"}]}}}}', '2327.58', 'pending', NULL, 1, '2022-12-19 04:02:30', '2022-12-19 04:02:30'),
(15, '153341971', 'mostafa', '01011093385', 'elbiheiry2@gmail.com', 'test', 'test', 'test', 'test', '{\"15\":{\"id\":\"15\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/public\\/storage\\/products\\/NZJ0ibZlSwVOGsXoZjC1H5lV1s88C5a5UJEbPJVQ.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}}}', '4232.64', 'pending', NULL, 1, '2022-12-19 04:10:49', '2022-12-19 04:10:49'),
(16, '161891665', 'mostafa', '01011093385', 'elbiheiry2@gmail.com', 'test', 'test', 'test', 'test', '{\"15\":{\"id\":\"15\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/NZJ0ibZlSwVOGsXoZjC1H5lV1s88C5a5UJEbPJVQ.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}}}', '4232.64', 'pending', NULL, 1, '2022-12-19 04:13:46', '2022-12-19 04:13:46'),
(17, '174442038', 'mostafa', '01011093385', 'elbiheiry2@gmail.com', 'test', 'test', 'test', 'test', '{\"15\":{\"id\":\"15\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/NZJ0ibZlSwVOGsXoZjC1H5lV1s88C5a5UJEbPJVQ.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}}}', '4232.64', 'pending', NULL, 1, '2022-12-19 04:14:35', '2022-12-19 04:14:35'),
(18, '181084060', 'mostafa', '01011093385', 'elbiheiry2@gmail.com', 'test', 'test', 'test', 'test', '{\"15\":{\"id\":\"15\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/NZJ0ibZlSwVOGsXoZjC1H5lV1s88C5a5UJEbPJVQ.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}}}', '4232.64', 'Done', NULL, 1, '2022-12-19 04:17:46', '2022-12-19 04:19:03'),
(19, '198130097', 'mostafa', '01011093385', 'elbiheiry2@gmail.com', 'test', 'test', 'test', 'test', '{\"15\":{\"id\":\"15\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/NZJ0ibZlSwVOGsXoZjC1H5lV1s88C5a5UJEbPJVQ.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}}}', '4232.64', 'Done', NULL, 1, '2022-12-19 04:20:44', '2022-12-19 04:22:04'),
(20, '201951232', 'mostafa', '01011093385', 'elbiheiry2@gmail.com', 'test', 'test', 'test', 'test', '{\"15\":{\"id\":\"15\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/NZJ0ibZlSwVOGsXoZjC1H5lV1s88C5a5UJEbPJVQ.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}}}', '4232.64', 'Done', NULL, 1, '2022-12-19 04:23:33', '2022-12-19 04:24:01'),
(21, '214300474', 'mostafa', '01011093385', 'elbiheiry2@gmail.com', 'test', 'test', 'test', 'test', '{\"15\":{\"id\":\"15\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/NZJ0ibZlSwVOGsXoZjC1H5lV1s88C5a5UJEbPJVQ.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}}}', '4232.64', 'Done', '{\"InvoiceId\":1915834,\"InvoiceStatus\":\"Paid\",\"InvoiceReference\":\"2022351531\",\"CustomerReference\":\"21\",\"CreatedDate\":\"2022-12-19T00:32:31.247\",\"ExpiryDate\":\"December 22, 2022\",\"ExpiryTime\":\"00:32:31.247\",\"InvoiceValue\":342.696,\"Comments\":null,\"CustomerName\":\"mostafa\",\"CustomerMobile\":\"+96501011093385\",\"CustomerEmail\":\"elbiheiry2@gmail.com\",\"UserDefinedField\":null,\"InvoiceDisplayValue\":\"4,232.640 SR\",\"DueDeposit\":342.269,\"DepositStatus\":\"Not Deposited\",\"InvoiceItems\":[],\"InvoiceTransactions\":[{\"TransactionDate\":\"2022-12-19T00:32:58.8933333\",\"PaymentGateway\":\"Sadad\",\"ReferenceId\":\"235221275749\",\"TrackId\":\"19-12-2022_1382331\",\"TransactionId\":\"275749\",\"PaymentId\":\"07071915834138233172\",\"AuthorizationId\":\"275749\",\"TransactionStatus\":\"Succss\",\"TransationValue\":\"342.696\",\"CustomerServiceCharge\":\"8.668\",\"DueValue\":\"351.370\",\"PaidCurrency\":\"SR\",\"PaidCurrencyValue\":\"4,339.700\",\"IpAddress\":\"197.63.215.84\",\"Country\":\"Egypt\",\"Currency\":\"KD\",\"Error\":null,\"CardNumber\":\"512345xxxxxx0008\",\"ErrorCode\":\"\"}],\"Suppliers\":[],\"InvoiceError\":\"\",\"focusTransaction\":{\"TransactionDate\":\"2022-12-19T00:32:58.8933333\",\"PaymentGateway\":\"Sadad\",\"ReferenceId\":\"235221275749\",\"TrackId\":\"19-12-2022_1382331\",\"TransactionId\":\"275749\",\"PaymentId\":\"07071915834138233172\",\"AuthorizationId\":\"275749\",\"TransactionStatus\":\"Succss\",\"TransationValue\":\"342.696\",\"CustomerServiceCharge\":\"8.668\",\"DueValue\":\"351.370\",\"PaidCurrency\":\"SR\",\"PaidCurrencyValue\":\"4,339.700\",\"IpAddress\":\"197.63.215.84\",\"Country\":\"Egypt\",\"Currency\":\"KD\",\"Error\":null,\"CardNumber\":\"512345xxxxxx0008\",\"ErrorCode\":\"\"}}', 1, '2022-12-19 04:32:28', '2022-12-19 04:33:37'),
(22, '226240785', 'mostafa', '01011093385', 'elbiheiry2@gmail.com', 'test', 'test', 'test', 'test', '{\"15\":{\"id\":\"15\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/NZJ0ibZlSwVOGsXoZjC1H5lV1s88C5a5UJEbPJVQ.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}}}', '4232.64', 'pending', NULL, 1, '2022-12-19 05:11:45', '2022-12-19 05:11:45');
INSERT INTO `orders` (`id`, `order_no`, `name`, `phone`, `email`, `city`, `state`, `address`, `address2`, `items`, `total`, `status`, `payment_details`, `user_id`, `created_at`, `updated_at`) VALUES
(23, '235452297', 'Abdelaziz Gamal', '01210224040', 'zeezo.gamal@gmail.com', 'New Cairo', 'Cairo', 'Ibn Malka St', '37', '{\"16\":{\"id\":\"16\",\"name\":\"iPad 10.9 (10th generation)\",\"price\":2327.579999999999927240423858165740966796875,\"quantity\":2,\"attributes\":{\"id\":16,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/JD9PtFbTFOMNC2RLxFr8vwR2C8HxjVBm7F1IECLm.jpg\",\"name_en\":\"iPad 10.9 (10th generation)\",\"name_ar\":\"iPad 10.9 (10th generation)\",\"slug\":\"ipad-10-9-10th-generation\",\"sku\":\"MM9C3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":51,\"product_id\":\"16\",\"capacity_id\":\"8\",\"type\":null,\"price\":\"2327.58\",\"sku\":\"MM9C3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-23T14:47:02.000000Z\",\"updated_at\":\"2022-11-23T14:51:17.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":8,\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\",\"name\":\"64 GB\",\"translations\":[{\"id\":16,\"name\":\"64 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\"},{\"id\":15,\"name\":\"64 GB\",\"capacity_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\"}]}}}}', '4655.16', 'pending', NULL, 7, '2022-12-19 14:00:16', '2022-12-19 14:00:16'),
(24, '241072909', 'Abdelaziz Gamal', '01210224040', 'zeezo.gamal@gmail.com', 'New Cairo', 'Cairo', 'Ibn Malka St', '37', '{\"16\":{\"id\":\"16\",\"name\":\"iPad 10.9 (10th generation)\",\"price\":2327.579999999999927240423858165740966796875,\"quantity\":2,\"attributes\":{\"id\":16,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/JD9PtFbTFOMNC2RLxFr8vwR2C8HxjVBm7F1IECLm.jpg\",\"name_en\":\"iPad 10.9 (10th generation)\",\"name_ar\":\"iPad 10.9 (10th generation)\",\"slug\":\"ipad-10-9-10th-generation\",\"sku\":\"MM9C3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":51,\"product_id\":\"16\",\"capacity_id\":\"8\",\"type\":null,\"price\":\"2327.58\",\"sku\":\"MM9C3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-23T14:47:02.000000Z\",\"updated_at\":\"2022-11-23T14:51:17.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":8,\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\",\"name\":\"64 GB\",\"translations\":[{\"id\":16,\"name\":\"64 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\"},{\"id\":15,\"name\":\"64 GB\",\"capacity_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\"}]}}}}', '4655.16', 'pending', NULL, 7, '2022-12-19 14:04:32', '2022-12-19 14:04:32'),
(25, '255525373', 'Abdelaziz Gamal', '01210224040', 'zeezo.gamal@gmail.com', 'New Cairo', 'Cairo', 'Ibn Malka St', '37', '{\"16\":{\"id\":\"16\",\"name\":\"iPad 10.9 (10th generation)\",\"price\":2327.579999999999927240423858165740966796875,\"quantity\":2,\"attributes\":{\"id\":16,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/JD9PtFbTFOMNC2RLxFr8vwR2C8HxjVBm7F1IECLm.jpg\",\"name_en\":\"iPad 10.9 (10th generation)\",\"name_ar\":\"iPad 10.9 (10th generation)\",\"slug\":\"ipad-10-9-10th-generation\",\"sku\":\"MM9C3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":51,\"product_id\":\"16\",\"capacity_id\":\"8\",\"type\":null,\"price\":\"2327.58\",\"sku\":\"MM9C3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-23T14:47:02.000000Z\",\"updated_at\":\"2022-11-23T14:51:17.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":8,\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\",\"name\":\"64 GB\",\"translations\":[{\"id\":16,\"name\":\"64 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\"},{\"id\":15,\"name\":\"64 GB\",\"capacity_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\"}]}}}}', '4655.16', 'pending', NULL, 7, '2022-12-19 14:06:14', '2022-12-19 14:06:14'),
(26, '268743709', 'Ghada', '92832', 'ghada.adel@zenitharabia.com', 'riyadh', 'riyadh', 'yarmouk', NULL, '{\"15\":{\"id\":\"15\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":2,\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/WmUO57N5TLmyhvyWVqdVi860byg6B2vPPsI3QJxg.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNM3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":37,\"product_id\":\"15\",\"capacity_id\":\"6\",\"type\":null,\"price\":\"6899.73\",\"sku\":\"MHNM3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:26:12.000000Z\",\"updated_at\":\"2022-11-20T13:26:12.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":6,\"created_at\":\"2022-11-20T13:24:32.000000Z\",\"updated_at\":\"2022-11-20T13:24:32.000000Z\",\"name\":\"1 TB\",\"translations\":[{\"id\":12,\"name\":\"1 \\u062a\\u064a\\u0631\\u0627\",\"capacity_id\":\"6\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:24:32.000000Z\",\"updated_at\":\"2022-11-20T13:24:32.000000Z\"},{\"id\":11,\"name\":\"1 TB\",\"capacity_id\":\"6\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:24:32.000000Z\",\"updated_at\":\"2022-11-20T13:24:32.000000Z\"}]}}},\"16\":{\"id\":\"16\",\"name\":\"iPad 10.9 (10th generation)\",\"price\":2327.579999999999927240423858165740966796875,\"quantity\":\"1\",\"attributes\":{\"id\":16,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/JD9PtFbTFOMNC2RLxFr8vwR2C8HxjVBm7F1IECLm.jpg\",\"name_en\":\"iPad 10.9 (10th generation)\",\"name_ar\":\"iPad 10.9 (10th generation)\",\"slug\":\"ipad-10-9-10th-generation\",\"sku\":\"MM9E3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":53,\"product_id\":\"16\",\"capacity_id\":\"8\",\"type\":null,\"price\":\"2327.58\",\"sku\":\"MM9E3AB\\/A\",\"color_id\":\"9\",\"created_at\":\"2022-11-23T14:52:11.000000Z\",\"updated_at\":\"2022-11-23T14:52:11.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":9,\"created_at\":\"2022-11-23T12:15:36.000000Z\",\"updated_at\":\"2022-11-23T12:15:36.000000Z\",\"name\":\"Blue\",\"translations\":[{\"id\":18,\"name\":\"\\u0623\\u0632\\u0631\\u0642\",\"color_id\":\"9\",\"locale\":\"ar\",\"created_at\":\"2022-11-23T12:15:36.000000Z\",\"updated_at\":\"2022-11-23T12:32:28.000000Z\"},{\"id\":17,\"name\":\"Blue\",\"color_id\":\"9\",\"locale\":\"en\",\"created_at\":\"2022-11-23T12:15:36.000000Z\",\"updated_at\":\"2022-11-23T12:32:28.000000Z\"}]},\"capacity\":{\"id\":8,\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\",\"name\":\"64 GB\",\"translations\":[{\"id\":16,\"name\":\"64 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\"},{\"id\":15,\"name\":\"64 GB\",\"capacity_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-23T14:50:35.000000Z\",\"updated_at\":\"2022-11-23T14:50:35.000000Z\"}]}}}}', '10792.86', 'pending', NULL, 8, '2022-12-19 15:20:43', '2022-12-19 15:20:43'),
(27, '278927180', 'Abdelaziz Gamal', '01210224040', 'zeezo.gamal@gmail.com', 'New Cairo', 'Cairo', 'Ibn Malka St', '37', '{\"1530\":{\"id\":\"1530\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/WmUO57N5TLmyhvyWVqdVi860byg6B2vPPsI3QJxg.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}}}', '4232.64', 'pending', NULL, 7, '2022-12-22 17:01:10', '2022-12-22 17:01:10'),
(28, '284668463', 'Abdelaziz Gamal', '01210224040', 'zeezo.gamal@gmail.com', 'New Cairo', 'Cairo', 'Ibn Malka St', '37', '{\"1530\":{\"id\":\"1530\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":2,\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/WmUO57N5TLmyhvyWVqdVi860byg6B2vPPsI3QJxg.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}},\"1535\":{\"id\":\"1535\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":5375.6800000000002910383045673370361328125,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/WmUO57N5TLmyhvyWVqdVi860byg6B2vPPsI3QJxg.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNK3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":35,\"product_id\":\"15\",\"capacity_id\":\"5\",\"type\":null,\"price\":\"5375.68\",\"sku\":\"MHNK3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:25:18.000000Z\",\"updated_at\":\"2022-11-20T13:25:18.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":5,\"created_at\":\"2022-11-20T13:24:14.000000Z\",\"updated_at\":\"2022-11-20T13:24:14.000000Z\",\"name\":\"512 GB\",\"translations\":[{\"id\":10,\"name\":\"512 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"5\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:24:14.000000Z\",\"updated_at\":\"2022-11-20T13:24:14.000000Z\"},{\"id\":9,\"name\":\"512 GB\",\"capacity_id\":\"5\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:24:14.000000Z\",\"updated_at\":\"2022-11-20T13:24:14.000000Z\"}]}}},\"1548\":{\"id\":\"1548\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":7450.09000000000014551915228366851806640625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/WmUO57N5TLmyhvyWVqdVi860byg6B2vPPsI3QJxg.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHRC3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":48,\"product_id\":\"15\",\"capacity_id\":\"6\",\"type\":null,\"price\":\"7450.09\",\"sku\":\"MHRC3AB\\/A\",\"color_id\":\"2\",\"created_at\":\"2022-11-20T13:47:42.000000Z\",\"updated_at\":\"2022-11-20T13:47:42.000000Z\",\"connectivity\":\"Wi-Fi + Cellular\",\"color\":{\"id\":2,\"created_at\":\"2022-11-01T07:02:12.000000Z\",\"updated_at\":\"2022-11-01T07:02:12.000000Z\",\"name\":\"Silver\",\"translations\":[{\"id\":4,\"name\":\"\\u0641\\u0636\\u064a\",\"color_id\":\"2\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:02:12.000000Z\",\"updated_at\":\"2022-11-01T07:02:12.000000Z\"},{\"id\":3,\"name\":\"Silver\",\"color_id\":\"2\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:02:12.000000Z\",\"updated_at\":\"2022-11-01T07:02:12.000000Z\"}]},\"capacity\":{\"id\":6,\"created_at\":\"2022-11-20T13:24:32.000000Z\",\"updated_at\":\"2022-11-20T13:24:32.000000Z\",\"name\":\"1 TB\",\"translations\":[{\"id\":12,\"name\":\"1 \\u062a\\u064a\\u0631\\u0627\",\"capacity_id\":\"6\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:24:32.000000Z\",\"updated_at\":\"2022-11-20T13:24:32.000000Z\"},{\"id\":11,\"name\":\"1 TB\",\"capacity_id\":\"6\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:24:32.000000Z\",\"updated_at\":\"2022-11-20T13:24:32.000000Z\"}]}}}}', '21291.05', 'pending', NULL, 7, '2022-12-22 17:34:44', '2022-12-22 17:34:44'),
(29, '296905340', 'Abdelaziz Gamal', '01210224040', 'zeezo.gamal@gmail.com', 'New Cairo', 'Cairo', 'Ibn Malka St', '37', '{\"1530\":{\"id\":\"1530\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":2,\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/WmUO57N5TLmyhvyWVqdVi860byg6B2vPPsI3QJxg.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}},\"1535\":{\"id\":\"1535\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":5375.6800000000002910383045673370361328125,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/WmUO57N5TLmyhvyWVqdVi860byg6B2vPPsI3QJxg.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNK3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":35,\"product_id\":\"15\",\"capacity_id\":\"5\",\"type\":null,\"price\":\"5375.68\",\"sku\":\"MHNK3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:25:18.000000Z\",\"updated_at\":\"2022-11-20T13:25:18.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":5,\"created_at\":\"2022-11-20T13:24:14.000000Z\",\"updated_at\":\"2022-11-20T13:24:14.000000Z\",\"name\":\"512 GB\",\"translations\":[{\"id\":10,\"name\":\"512 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"5\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:24:14.000000Z\",\"updated_at\":\"2022-11-20T13:24:14.000000Z\"},{\"id\":9,\"name\":\"512 GB\",\"capacity_id\":\"5\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:24:14.000000Z\",\"updated_at\":\"2022-11-20T13:24:14.000000Z\"}]}}},\"1548\":{\"id\":\"1548\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":7450.09000000000014551915228366851806640625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/WmUO57N5TLmyhvyWVqdVi860byg6B2vPPsI3QJxg.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHRC3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":48,\"product_id\":\"15\",\"capacity_id\":\"6\",\"type\":null,\"price\":\"7450.09\",\"sku\":\"MHRC3AB\\/A\",\"color_id\":\"2\",\"created_at\":\"2022-11-20T13:47:42.000000Z\",\"updated_at\":\"2022-11-20T13:47:42.000000Z\",\"connectivity\":\"Wi-Fi + Cellular\",\"color\":{\"id\":2,\"created_at\":\"2022-11-01T07:02:12.000000Z\",\"updated_at\":\"2022-11-01T07:02:12.000000Z\",\"name\":\"Silver\",\"translations\":[{\"id\":4,\"name\":\"\\u0641\\u0636\\u064a\",\"color_id\":\"2\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:02:12.000000Z\",\"updated_at\":\"2022-11-01T07:02:12.000000Z\"},{\"id\":3,\"name\":\"Silver\",\"color_id\":\"2\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:02:12.000000Z\",\"updated_at\":\"2022-11-01T07:02:12.000000Z\"}]},\"capacity\":{\"id\":6,\"created_at\":\"2022-11-20T13:24:32.000000Z\",\"updated_at\":\"2022-11-20T13:24:32.000000Z\",\"name\":\"1 TB\",\"translations\":[{\"id\":12,\"name\":\"1 \\u062a\\u064a\\u0631\\u0627\",\"capacity_id\":\"6\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:24:32.000000Z\",\"updated_at\":\"2022-11-20T13:24:32.000000Z\"},{\"id\":11,\"name\":\"1 TB\",\"capacity_id\":\"6\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:24:32.000000Z\",\"updated_at\":\"2022-11-20T13:24:32.000000Z\"}]}}}}', '21291.05', 'pending', NULL, 7, '2022-12-22 17:35:44', '2022-12-22 17:35:44'),
(30, '304566278', 'mostafa', '01011093385', 'elbiheiry2@gmail.com', 'Test', 'Test', 'Test', 'Test', '{\"1530\":{\"id\":\"1530\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/WmUO57N5TLmyhvyWVqdVi860byg6B2vPPsI3QJxg.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}}}', '4232.64', 'Done', '{\"InvoiceId\":1923571,\"InvoiceStatus\":\"Paid\",\"InvoiceReference\":\"2022357138\",\"CustomerReference\":\"30\",\"CreatedDate\":\"2022-12-22T13:38:17.337\",\"ExpiryDate\":\"December 25, 2022\",\"ExpiryTime\":\"13:38:17.337\",\"InvoiceValue\":342.696,\"Comments\":null,\"CustomerName\":\"mostafa\",\"CustomerMobile\":\"+96501011093385\",\"CustomerEmail\":\"elbiheiry2@gmail.com\",\"UserDefinedField\":null,\"InvoiceDisplayValue\":\"4,232.640 SR\",\"DueDeposit\":342.269,\"DepositStatus\":\"Not Deposited\",\"InvoiceItems\":[],\"InvoiceTransactions\":[{\"TransactionDate\":\"2022-12-22T13:38:58.3933333\",\"PaymentGateway\":\"Sadad\",\"ReferenceId\":\"235610302775\",\"TrackId\":\"22-12-2022_1385996\",\"TransactionId\":\"302775\",\"PaymentId\":\"07071923571138599674\",\"AuthorizationId\":\"302775\",\"TransactionStatus\":\"Succss\",\"TransationValue\":\"342.696\",\"CustomerServiceCharge\":\"8.668\",\"DueValue\":\"351.370\",\"PaidCurrency\":\"SR\",\"PaidCurrencyValue\":\"4,339.700\",\"IpAddress\":\"102.44.28.107\",\"Country\":\"Egypt\",\"Currency\":\"KD\",\"Error\":null,\"CardNumber\":\"512345xxxxxx0008\",\"ErrorCode\":\"\"}],\"Suppliers\":[],\"InvoiceError\":\"\",\"focusTransaction\":{\"TransactionDate\":\"2022-12-22T13:38:58.3933333\",\"PaymentGateway\":\"Sadad\",\"ReferenceId\":\"235610302775\",\"TrackId\":\"22-12-2022_1385996\",\"TransactionId\":\"302775\",\"PaymentId\":\"07071923571138599674\",\"AuthorizationId\":\"302775\",\"TransactionStatus\":\"Succss\",\"TransationValue\":\"342.696\",\"CustomerServiceCharge\":\"8.668\",\"DueValue\":\"351.370\",\"PaidCurrency\":\"SR\",\"PaidCurrencyValue\":\"4,339.700\",\"IpAddress\":\"102.44.28.107\",\"Country\":\"Egypt\",\"Currency\":\"KD\",\"Error\":null,\"CardNumber\":\"512345xxxxxx0008\",\"ErrorCode\":\"\"}}', 1, '2022-12-22 17:38:14', '2022-12-22 17:41:44'),
(31, '316533979', 'Abdelaziz Gamal', '01210224040', 'zeezo.gamal@gmail.com', 'New Cairo', 'Cairo', 'Ibn Malka St', '37', '{\"1530\":{\"id\":\"1530\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":2,\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/WmUO57N5TLmyhvyWVqdVi860byg6B2vPPsI3QJxg.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}},\"1535\":{\"id\":\"1535\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":5375.6800000000002910383045673370361328125,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/WmUO57N5TLmyhvyWVqdVi860byg6B2vPPsI3QJxg.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNK3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":35,\"product_id\":\"15\",\"capacity_id\":\"5\",\"type\":null,\"price\":\"5375.68\",\"sku\":\"MHNK3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:25:18.000000Z\",\"updated_at\":\"2022-11-20T13:25:18.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":5,\"created_at\":\"2022-11-20T13:24:14.000000Z\",\"updated_at\":\"2022-11-20T13:24:14.000000Z\",\"name\":\"512 GB\",\"translations\":[{\"id\":10,\"name\":\"512 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"5\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:24:14.000000Z\",\"updated_at\":\"2022-11-20T13:24:14.000000Z\"},{\"id\":9,\"name\":\"512 GB\",\"capacity_id\":\"5\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:24:14.000000Z\",\"updated_at\":\"2022-11-20T13:24:14.000000Z\"}]}}},\"1548\":{\"id\":\"1548\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":7450.09000000000014551915228366851806640625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/WmUO57N5TLmyhvyWVqdVi860byg6B2vPPsI3QJxg.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHRC3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":48,\"product_id\":\"15\",\"capacity_id\":\"6\",\"type\":null,\"price\":\"7450.09\",\"sku\":\"MHRC3AB\\/A\",\"color_id\":\"2\",\"created_at\":\"2022-11-20T13:47:42.000000Z\",\"updated_at\":\"2022-11-20T13:47:42.000000Z\",\"connectivity\":\"Wi-Fi + Cellular\",\"color\":{\"id\":2,\"created_at\":\"2022-11-01T07:02:12.000000Z\",\"updated_at\":\"2022-11-01T07:02:12.000000Z\",\"name\":\"Silver\",\"translations\":[{\"id\":4,\"name\":\"\\u0641\\u0636\\u064a\",\"color_id\":\"2\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:02:12.000000Z\",\"updated_at\":\"2022-11-01T07:02:12.000000Z\"},{\"id\":3,\"name\":\"Silver\",\"color_id\":\"2\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:02:12.000000Z\",\"updated_at\":\"2022-11-01T07:02:12.000000Z\"}]},\"capacity\":{\"id\":6,\"created_at\":\"2022-11-20T13:24:32.000000Z\",\"updated_at\":\"2022-11-20T13:24:32.000000Z\",\"name\":\"1 TB\",\"translations\":[{\"id\":12,\"name\":\"1 \\u062a\\u064a\\u0631\\u0627\",\"capacity_id\":\"6\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:24:32.000000Z\",\"updated_at\":\"2022-11-20T13:24:32.000000Z\"},{\"id\":11,\"name\":\"1 TB\",\"capacity_id\":\"6\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:24:32.000000Z\",\"updated_at\":\"2022-11-20T13:24:32.000000Z\"}]}}}}', '21291.05', 'Done', '{\"InvoiceId\":1923583,\"InvoiceStatus\":\"Paid\",\"InvoiceReference\":\"2022357146\",\"CustomerReference\":\"31\",\"CreatedDate\":\"2022-12-22T13:42:18.35\",\"ExpiryDate\":\"December 25, 2022\",\"ExpiryTime\":\"13:42:18.350\",\"InvoiceValue\":1723.832,\"Comments\":null,\"CustomerName\":\"Abdelaziz Gamal\",\"CustomerMobile\":\"+96501210224040\",\"CustomerEmail\":\"zeezo.gamal@gmail.com\",\"UserDefinedField\":null,\"InvoiceDisplayValue\":\"21,291.050 SR\",\"DueDeposit\":1723.34,\"DepositStatus\":\"Not Deposited\",\"InvoiceItems\":[],\"InvoiceTransactions\":[{\"TransactionDate\":\"2022-12-22T13:42:52.17\",\"PaymentGateway\":\"Sadad\",\"ReferenceId\":\"235610303795\",\"TrackId\":\"22-12-2022_1386005\",\"TransactionId\":\"303795\",\"PaymentId\":\"07071923583138600572\",\"AuthorizationId\":\"303795\",\"TransactionStatus\":\"Succss\",\"TransationValue\":\"1,723.832\",\"CustomerServiceCharge\":\"10.000\",\"DueValue\":\"1,733.840\",\"PaidCurrency\":\"SR\",\"PaidCurrencyValue\":\"21,414.560\",\"IpAddress\":\"45.246.239.160\",\"Country\":\"Egypt\",\"Currency\":\"KD\",\"Error\":null,\"CardNumber\":\"512345xxxxxx0008\",\"ErrorCode\":\"\"}],\"Suppliers\":[],\"InvoiceError\":\"\",\"focusTransaction\":{\"TransactionDate\":\"2022-12-22T13:42:52.17\",\"PaymentGateway\":\"Sadad\",\"ReferenceId\":\"235610303795\",\"TrackId\":\"22-12-2022_1386005\",\"TransactionId\":\"303795\",\"PaymentId\":\"07071923583138600572\",\"AuthorizationId\":\"303795\",\"TransactionStatus\":\"Succss\",\"TransationValue\":\"1,723.832\",\"CustomerServiceCharge\":\"10.000\",\"DueValue\":\"1,733.840\",\"PaidCurrency\":\"SR\",\"PaidCurrencyValue\":\"21,414.560\",\"IpAddress\":\"45.246.239.160\",\"Country\":\"Egypt\",\"Currency\":\"KD\",\"Error\":null,\"CardNumber\":\"512345xxxxxx0008\",\"ErrorCode\":\"\"}}', 7, '2022-12-22 17:42:15', '2022-12-22 17:42:53'),
(32, '327174783', 'mostafa', '01011093385', 'elbiheiry2@gmail.com', 'Test', 'Test', 'Test', 'Test', '{\"1530\":{\"id\":\"1530\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/WmUO57N5TLmyhvyWVqdVi860byg6B2vPPsI3QJxg.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}}}', '4232.64', 'Done', '{\"InvoiceId\":1923584,\"InvoiceStatus\":\"Paid\",\"InvoiceReference\":\"2022357147\",\"CustomerReference\":\"32\",\"CreatedDate\":\"2022-12-22T13:42:31.42\",\"ExpiryDate\":\"December 25, 2022\",\"ExpiryTime\":\"13:42:31.420\",\"InvoiceValue\":342.696,\"Comments\":null,\"CustomerName\":\"mostafa\",\"CustomerMobile\":\"+96501011093385\",\"CustomerEmail\":\"elbiheiry2@gmail.com\",\"UserDefinedField\":null,\"InvoiceDisplayValue\":\"4,232.640 SR\",\"DueDeposit\":342.269,\"DepositStatus\":\"Not Deposited\",\"InvoiceItems\":[],\"InvoiceTransactions\":[{\"TransactionDate\":\"2022-12-22T13:42:58.0233333\",\"PaymentGateway\":\"Sadad\",\"ReferenceId\":\"235610304815\",\"TrackId\":\"22-12-2022_1386008\",\"TransactionId\":\"304815\",\"PaymentId\":\"07071923584138600873\",\"AuthorizationId\":\"304815\",\"TransactionStatus\":\"Succss\",\"TransationValue\":\"342.696\",\"CustomerServiceCharge\":\"8.668\",\"DueValue\":\"351.370\",\"PaidCurrency\":\"SR\",\"PaidCurrencyValue\":\"4,339.700\",\"IpAddress\":\"102.44.28.107\",\"Country\":\"Egypt\",\"Currency\":\"KD\",\"Error\":null,\"CardNumber\":\"512345xxxxxx0008\",\"ErrorCode\":\"\"}],\"Suppliers\":[],\"InvoiceError\":\"\",\"focusTransaction\":{\"TransactionDate\":\"2022-12-22T13:42:58.0233333\",\"PaymentGateway\":\"Sadad\",\"ReferenceId\":\"235610304815\",\"TrackId\":\"22-12-2022_1386008\",\"TransactionId\":\"304815\",\"PaymentId\":\"07071923584138600873\",\"AuthorizationId\":\"304815\",\"TransactionStatus\":\"Succss\",\"TransationValue\":\"342.696\",\"CustomerServiceCharge\":\"8.668\",\"DueValue\":\"351.370\",\"PaidCurrency\":\"SR\",\"PaidCurrencyValue\":\"4,339.700\",\"IpAddress\":\"102.44.28.107\",\"Country\":\"Egypt\",\"Currency\":\"KD\",\"Error\":null,\"CardNumber\":\"512345xxxxxx0008\",\"ErrorCode\":\"\"}}', 1, '2022-12-22 17:42:28', '2022-12-22 17:42:58'),
(33, '338118733', 'Hesham Gamal', '01090353855', 'hesham.gamal23192@gmail.com', 'cairo', 'cairo', 'nasr city', NULL, '{\"1530\":{\"id\":\"1530\",\"name\":\"iPad pro 12.9 (6th generation)\",\"price\":4232.6400000000003274180926382541656494140625,\"quantity\":\"1\",\"attributes\":{\"id\":15,\"image\":\"https:\\/\\/zenith.brandbourne.com\\/storage\\/products\\/WmUO57N5TLmyhvyWVqdVi860byg6B2vPPsI3QJxg.jpg\",\"name_en\":\"iPad pro 12.9 (6th generation)\",\"name_ar\":\"iPad pro 12.9 (6th generation)\",\"slug\":\"ipad-pro-12-9-6th-generation\",\"sku\":\"MHNF3AB\\/A\"},\"conditions\":[],\"associatedModel\":\"product\",\"spec\":{\"id\":30,\"product_id\":\"15\",\"capacity_id\":\"3\",\"type\":null,\"price\":\"4232.64\",\"sku\":\"MHNF3AB\\/A\",\"color_id\":\"8\",\"created_at\":\"2022-11-20T13:03:07.000000Z\",\"updated_at\":\"2022-11-20T13:04:03.000000Z\",\"connectivity\":\"Wi-Fi\",\"color\":{\"id\":8,\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\",\"name\":\"Space Grey\",\"translations\":[{\"id\":16,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"ar\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"},{\"id\":15,\"name\":\"Space Grey\",\"color_id\":\"8\",\"locale\":\"en\",\"created_at\":\"2022-11-20T13:03:35.000000Z\",\"updated_at\":\"2022-11-20T13:03:35.000000Z\"}]},\"capacity\":{\"id\":3,\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\",\"name\":\"128 GB\",\"translations\":[{\"id\":6,\"name\":\"128 \\u062c\\u064a\\u062c\\u0627\",\"capacity_id\":\"3\",\"locale\":\"ar\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-20T13:22:52.000000Z\"},{\"id\":5,\"name\":\"128 GB\",\"capacity_id\":\"3\",\"locale\":\"en\",\"created_at\":\"2022-11-01T07:01:22.000000Z\",\"updated_at\":\"2022-11-01T07:01:22.000000Z\"}]}}}}', '4232.64', 'pending', NULL, 13, '2022-12-23 20:33:52', '2022-12-23 20:33:52');

-- --------------------------------------------------------

--
-- Table structure for table `parentals`
--

CREATE TABLE `parentals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parentals`
--

INSERT INTO `parentals` (`id`, `image1`, `image2`, `created_at`, `updated_at`) VALUES
(1, 'Zibt3KqrzpXZtveJOjXZdDDp7tJrI7Fsfgr3M1vo.jpg', 'FxGiWThEqp1hzLv8GxrsNWVYWSU8aZEHkNx44mem.jpg', NULL, '2022-11-29 21:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `parental_translations`
--

CREATE TABLE `parental_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parental_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parental_translations`
--

INSERT INTO `parental_translations` (`id`, `title`, `subtitle`, `description1`, `description2`, `parental_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT OUR PROGRAM', 'DEDICATED FOR EDUCATORS AND LEARNERS.', 'Parental Purchase Program is part of the educational solution presented to educational community, where parents of registered schools are able to purchase and quote directly from the store the Apple devices needed with special discount and seamless integration.\r\nZenithArabia, as an Authorized Educational Specialist, adheres to the parental purchase program by offering solutions that include discount on purchasing iPads & mac for school activities and an agreement on training and support service.', 'Educational discount reserved for institutions\r\nEach school can choose the appropriate iPad configurations\r\nThe process will be managed through an internet portal dedicated to each schools community\r\nAt the end of the school use period. On request device can be reconfigured with commercial settings for students private use.', 1, 'en', NULL, '2022-12-01 16:18:51'),
(2, 'ABOUT OUR PROGRAM', 'DEDICATED FOR EDUCATORS AND LEARNERS.', 'Parental Purchase Program is part of the educational solution presented to educational community, where parents of registered schools are able to purchase and quote directly from the store the Apple devices needed with special discount and seamless integration.\r\nZenithArabia, as an Authorized Educational Specialist, adheres to the parental purchase program by offering solutions that include discount on purchasing iPads & mac for school activities and an agreement on training and support service.', 'Educational discount reserved for institutions\r\nEach school can choose the appropriate iPad configurations\r\nThe process will be managed through an internet portal dedicated to each schools community\r\nAt the end of the school use period. On request device can be reconfigured with commercial settings for students private use.', 1, 'ar', NULL, '2022-12-01 16:18:51');

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
('m.elbiheiry@brandbourne.com', '$2y$10$LXR1.VAGkCJJF/qZwcKtn.oyP35WlRkx0DpFtb9eglnoH0u4DDWlu', '2022-11-07 22:51:02'),
('zeezo.gamal@gmail.com', '$2y$10$t1EA1gMeQ9oPqDflzbpBv.6zpWTzK3kbUw.r7Cil7pcN/iuWIVvOi', '2022-11-08 18:08:07');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacies`
--

CREATE TABLE `privacies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacies`
--

INSERT INTO `privacies` (`id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `privacy_translations`
--

CREATE TABLE `privacy_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `privacy_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_translations`
--

INSERT INTO `privacy_translations` (`id`, `description`, `privacy_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, '<h3 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; line-height: 1.2; font-size: 32px; color: #14568a; letter-spacing: 1px; text-transform: uppercase; font-family: Cairo, sans-serif; outline: 0px !important;\">PRIVACY POLICY</h3>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Overview Zenith Arabia is strongly committed to respecting the privacy of all persons using our websites and mobile applications (\"the Web Sites/Apps\") and the protection of any personally identifiable information which we may collect on our Websites/Apps and/ or use as part of our data collection process and/ or which you may choose to share via telephone, email or otherwise (&ldquo;the Other Channels&rdquo;). Such personal information will be collected and/ or used in accordance with the terms and conditions of this Privacy Policy, which is part of and incorporated into the Terms of Use of the Web Site.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Your Express Consent to Collection and Use of Information</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Zenith Arabia reserves the right to collect such personally identifiable information as, name, address, telephone number, e-mail address, etc., as well as demographic, transactional and profile data such as IP address, internet domain or browser, referrer or user agent information or other relevant information that we use as part of our data collection process on the Web Sites/Apps or via the Other Channels, such as the use of cookies or certain other information you may provide to us, etc. (\"Personal Information\") as set forth in this Privacy Policy. We hold all such Personal Information on secure servers and treat it as fully confidential.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">BY CHOOSING TO ACCESS OUR WEB SITES/APPS AND/OR COMMUNICATING WITH US THROUGH THE OTHER CHANNELS, YOU ARE INDICATING YOUR EXPRESS CONSENT AND AGREEMENT TO THE COLLECTION, TRANSFER, PROCESSING, USE AND STORAGE IN ACCORDANCE WITH THIS PRIVACY POLICY OF ANY PERSONAL INFORMATION WHICH MAY BE OBTAINED FROM YOU AS A RESULT.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">If you do not agree with any of the terms and conditions set forth in the Privacy Policy, or have any questions, please contact us directly at Zenith Arabia.com and we will be pleased to assist you with your concerns. By accessing or using the Web Sites/Apps and/or communicating with us through the Other Channels, you grant Zenith Arabia a non-exclusive, worldwide, royalty-free perpetual license to use your Personal Information for the purposes set forth herein.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We will not sell your Personal Information to third parties. We may, however, share selected customer information with the following third parties: our group companies;</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Our franchisors; companies such as payment service providers, warehousing service providers and delivery companies for the purposes of processing your payment and managing your order, including delivery and returns; concessions and cosmetics partners who are responsible for delivering their products directly to you or providing services. purchasers and their advisors following a sale of all or part of our business, so that they can continue to provide services to you; third party databases to which Zenith Arabia and/or one of our brands subscribes; government bodies or other authorities if necessary to comply with regulations or law or to assist with law enforcement, or to protect our property and other rights; agencies who help us collate statistics about site traffic, sales, demographics and other commercial information to enable us to tailor the services we provide to you and other customers. We will retain your Personal Information for as long as it is legally required, and to support the business purposes for which it was obtained - we will then dispose of it promptly and securely.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Depending on your country of residence, we may transfer your Personal Information both inside and outside the European Economic Area. When we transfer your Personal Information, we ensure a similar degree of protection is afforded to it by ensuring we only transfer it to countries that are deemed to provide an adequate level of protection for personal data and under contractual terms that provide appropriate data protection.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You have the following rights which you may exercise in relation to the Personal Information we process about you: to access a copy of your Personal Information; to require us to correct inaccurate Personal Information; to restrict our use of your Personal Information; to object to our use of your Personal Information; Where you wish to exercise any of these rights, you must first verify your identity to our satisfaction.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Cookies As part of our normal data collection process on our Web Sites, the Web Site may deposit \"cookies\" in your device in order to identify you and/ or as a means of tracking the validity of sessions as well as enhancing your browsing experience. Cookies are small pieces of data that a website automatically sends to your computer, tablet or mobile phone while you are viewing the website.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">We use two types of cookies on our website:</h4>\r\n<ul class=\"list\" style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; position: relative; padding: 0px; list-style: none; color: #212529; font-family: Cairo, sans-serif; font-size: 16px; outline: 0px !important;\">\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">&ldquo;Session&rdquo; cookies, which are used to allow you to: carry information from one page of our website to another without having to re-enter information; and access stored information when you are logged in to your online account.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">&ldquo;Persistent&rdquo; cookies, which allow us to offer you tailored content on our website by helping us to remember: any personal information that you have provided on previous visits to our website; the number of visits that you have made to our website; and your preferences .Third parties are not able to identify customers using cookies.</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We also reserve the right to use an outside advertising company to display ads on our Web Sites. These ads may also contain cookies. While we may use cookies in other parts of our Web sites, cookies received with banner ads or from other third-party sources may be collected by any such third-party companies, and we do not have direct access to or control over such processes. No cookies used by Zenith Arabia are stored permanently on your device. All cookies are automatically removed from your device either when you close your browser or your session times out.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">By using our Websites, you agree to the placing of cookies on your device. However, if you do not want to receive a cookie from our Website, you may set your browser to refuse cookies or to notify you when you receive a cookie (to find out how to do this, please consult your browser&rsquo;s help section). If cookies aren&rsquo;t enabled on your device, it may limit your enjoyment of the Web Site.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">To enable cookies:</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">If you\'re not sure of the type and version of web browser you use to access the Internet:</p>\r\n<ul class=\"list\" style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; position: relative; padding: 0px; list-style: none; color: #212529; font-family: Cairo, sans-serif; font-size: 16px; outline: 0px !important;\">\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">For PCs: click on \'Help\' at the top of your browser window and select the \'About\' option</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">For Macs: with the browser window open, click on the Apple menu and select the \'About\' option If you\'d like to learn more about cookies in general and how to manage them, visit aboutcookies.org (opens in a new window).</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">If you\'d like to opt out of cookies, please go to the Network Advertising Initiative website (opens in a new window).</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Please note that we\'re not responsible for the content of external websites.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Protection of Personal Information Against Third-Party Access or Use</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We store all Personal Information on a secure server and we seek to use procedures designed to protect Personal Information from accidental or unauthorised access, destruction, use, modification or disclosure. We will seek to ensure that your Personal Information is kept confidential and secure in accordance with this Privacy Policy, and that the appropriate technical and organisational measures to prevent unlawful or accidental destruction, accidental loss, unauthorised disclosure or access or other unlawful forms of processing are implemented. Although we will strive to take commercially reasonable security precautions regarding all Personal Information, visitors or users to the Web Sites/Apps acknowledge and agree that Zenith Arabia does not control the transfer of information or data via the Web Sites/Apps or over any other electronic facilities or media.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Changes to Privacy Policy</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Since we are constantly making changes and upgrades to our systems and services in order to better serve you, we anticipate updating this Privacy Policy from time-to-time. Therefore, we reserve the right to revise or alter the content of this Privacy Policy in any manner and at any time, without notice. Your subsequent and/ or continued use of the Web Sites/Apps and the other Channels following a posting of changes to the Privacy Policy will constitute your acceptance of such changes.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Third Party Web Sites</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You may be able to access certain third-party websites through links on our Web Sites/Apps. We are not, however, responsible for any other websites, their respective privacy policies or other content nor how they treat information about their visitors or users. We strongly advise you to check their privacy policies to find out how they are treating your Personal Information.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">All credit/debit cards details and personally identifiable information will NOT be stored, sold, shared, rented or leased to any third parties.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">No Warranty</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You understand that zenith arabia does not provide any warranty, guarantee or representation of any kind concerning our ability to control, collect, correct, access, process, use,protect or transfer any personal information or concerning the existence or effectiveness of any security measures undertaken by us. you agree that zenith arabia will not be liable for any claims, losses, or damages of any kind whatsoever which may result from the access, disclosure, use or modification by any party not authorised or authorised by us, or the introduction of viruses, worms, or other harmful elements into the system and their possible effects on your personal information.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Limitation of Liability</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">in no event will zenith arabia , its affiliates, partners, and their respective employees, officers, directors or insurers be liable to you or to any other person for any costs, damages (including any special, incidental, exemplary, indirect or consequential damages), or liability of any nature, arising or resulting from the collection, use, transfer, processing or storage of personal information obtained by us and resulting from your access to and use of the web sites/apps or collected via the other channels.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Governing Law; Jurisdiction</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">This Privacy Policy will be governed by the laws of the relevant country in which your Personal Information is first registered with Zenith Arabia (&ldquo;the Applicable Territory&rdquo;). For the avoidance of doubt, the relevant Applicable Territory may only include those countries in which Zenith ArabiaWebsites/Apps as the case may be. The exclusive jurisdiction for any claim, action or dispute with Zenith Arabia under this Privacy Policy will be in the appropriate courts of the Applicable Territory.</p>', 1, 'en', NULL, '2022-11-02 14:18:07'),
(2, '<h3 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; line-height: 1.2; font-size: 32px; color: #14568a; letter-spacing: 1px; text-transform: uppercase; font-family: Cairo, sans-serif; outline: 0px !important;\">PRIVACY POLICY</h3>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Overview Zenith Arabia is strongly committed to respecting the privacy of all persons using our websites and mobile applications (\"the Web Sites/Apps\") and the protection of any personally identifiable information which we may collect on our Websites/Apps and/ or use as part of our data collection process and/ or which you may choose to share via telephone, email or otherwise (&ldquo;the Other Channels&rdquo;). Such personal information will be collected and/ or used in accordance with the terms and conditions of this Privacy Policy, which is part of and incorporated into the Terms of Use of the Web Site.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Your Express Consent to Collection and Use of Information</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Zenith Arabia reserves the right to collect such personally identifiable information as, name, address, telephone number, e-mail address, etc., as well as demographic, transactional and profile data such as IP address, internet domain or browser, referrer or user agent information or other relevant information that we use as part of our data collection process on the Web Sites/Apps or via the Other Channels, such as the use of cookies or certain other information you may provide to us, etc. (\"Personal Information\") as set forth in this Privacy Policy. We hold all such Personal Information on secure servers and treat it as fully confidential.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">BY CHOOSING TO ACCESS OUR WEB SITES/APPS AND/OR COMMUNICATING WITH US THROUGH THE OTHER CHANNELS, YOU ARE INDICATING YOUR EXPRESS CONSENT AND AGREEMENT TO THE COLLECTION, TRANSFER, PROCESSING, USE AND STORAGE IN ACCORDANCE WITH THIS PRIVACY POLICY OF ANY PERSONAL INFORMATION WHICH MAY BE OBTAINED FROM YOU AS A RESULT.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">If you do not agree with any of the terms and conditions set forth in the Privacy Policy, or have any questions, please contact us directly at Zenith Arabia.com and we will be pleased to assist you with your concerns. By accessing or using the Web Sites/Apps and/or communicating with us through the Other Channels, you grant Zenith Arabia a non-exclusive, worldwide, royalty-free perpetual license to use your Personal Information for the purposes set forth herein.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We will not sell your Personal Information to third parties. We may, however, share selected customer information with the following third parties: our group companies;</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Our franchisors; companies such as payment service providers, warehousing service providers and delivery companies for the purposes of processing your payment and managing your order, including delivery and returns; concessions and cosmetics partners who are responsible for delivering their products directly to you or providing services. purchasers and their advisors following a sale of all or part of our business, so that they can continue to provide services to you; third party databases to which Zenith Arabia and/or one of our brands subscribes; government bodies or other authorities if necessary to comply with regulations or law or to assist with law enforcement, or to protect our property and other rights; agencies who help us collate statistics about site traffic, sales, demographics and other commercial information to enable us to tailor the services we provide to you and other customers. We will retain your Personal Information for as long as it is legally required, and to support the business purposes for which it was obtained - we will then dispose of it promptly and securely.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Depending on your country of residence, we may transfer your Personal Information both inside and outside the European Economic Area. When we transfer your Personal Information, we ensure a similar degree of protection is afforded to it by ensuring we only transfer it to countries that are deemed to provide an adequate level of protection for personal data and under contractual terms that provide appropriate data protection.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You have the following rights which you may exercise in relation to the Personal Information we process about you: to access a copy of your Personal Information; to require us to correct inaccurate Personal Information; to restrict our use of your Personal Information; to object to our use of your Personal Information; Where you wish to exercise any of these rights, you must first verify your identity to our satisfaction.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Cookies As part of our normal data collection process on our Web Sites, the Web Site may deposit \"cookies\" in your device in order to identify you and/ or as a means of tracking the validity of sessions as well as enhancing your browsing experience. Cookies are small pieces of data that a website automatically sends to your computer, tablet or mobile phone while you are viewing the website.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">We use two types of cookies on our website:</h4>\r\n<ul class=\"list\" style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; position: relative; padding: 0px; list-style: none; color: #212529; font-family: Cairo, sans-serif; font-size: 16px; outline: 0px !important;\">\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">&ldquo;Session&rdquo; cookies, which are used to allow you to: carry information from one page of our website to another without having to re-enter information; and access stored information when you are logged in to your online account.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">&ldquo;Persistent&rdquo; cookies, which allow us to offer you tailored content on our website by helping us to remember: any personal information that you have provided on previous visits to our website; the number of visits that you have made to our website; and your preferences .Third parties are not able to identify customers using cookies.</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We also reserve the right to use an outside advertising company to display ads on our Web Sites. These ads may also contain cookies. While we may use cookies in other parts of our Web sites, cookies received with banner ads or from other third-party sources may be collected by any such third-party companies, and we do not have direct access to or control over such processes. No cookies used by Zenith Arabia are stored permanently on your device. All cookies are automatically removed from your device either when you close your browser or your session times out.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">By using our Websites, you agree to the placing of cookies on your device. However, if you do not want to receive a cookie from our Website, you may set your browser to refuse cookies or to notify you when you receive a cookie (to find out how to do this, please consult your browser&rsquo;s help section). If cookies aren&rsquo;t enabled on your device, it may limit your enjoyment of the Web Site.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">To enable cookies:</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">If you\'re not sure of the type and version of web browser you use to access the Internet:</p>\r\n<ul class=\"list\" style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; position: relative; padding: 0px; list-style: none; color: #212529; font-family: Cairo, sans-serif; font-size: 16px; outline: 0px !important;\">\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">For PCs: click on \'Help\' at the top of your browser window and select the \'About\' option</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">For Macs: with the browser window open, click on the Apple menu and select the \'About\' option If you\'d like to learn more about cookies in general and how to manage them, visit aboutcookies.org (opens in a new window).</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">If you\'d like to opt out of cookies, please go to the Network Advertising Initiative website (opens in a new window).</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Please note that we\'re not responsible for the content of external websites.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Protection of Personal Information Against Third-Party Access or Use</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We store all Personal Information on a secure server and we seek to use procedures designed to protect Personal Information from accidental or unauthorised access, destruction, use, modification or disclosure. We will seek to ensure that your Personal Information is kept confidential and secure in accordance with this Privacy Policy, and that the appropriate technical and organisational measures to prevent unlawful or accidental destruction, accidental loss, unauthorised disclosure or access or other unlawful forms of processing are implemented. Although we will strive to take commercially reasonable security precautions regarding all Personal Information, visitors or users to the Web Sites/Apps acknowledge and agree that Zenith Arabia does not control the transfer of information or data via the Web Sites/Apps or over any other electronic facilities or media.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Changes to Privacy Policy</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Since we are constantly making changes and upgrades to our systems and services in order to better serve you, we anticipate updating this Privacy Policy from time-to-time. Therefore, we reserve the right to revise or alter the content of this Privacy Policy in any manner and at any time, without notice. Your subsequent and/ or continued use of the Web Sites/Apps and the other Channels following a posting of changes to the Privacy Policy will constitute your acceptance of such changes.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Third Party Web Sites</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You may be able to access certain third-party websites through links on our Web Sites/Apps. We are not, however, responsible for any other websites, their respective privacy policies or other content nor how they treat information about their visitors or users. We strongly advise you to check their privacy policies to find out how they are treating your Personal Information.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">All credit/debit cards details and personally identifiable information will NOT be stored, sold, shared, rented or leased to any third parties.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">No Warranty</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You understand that zenith arabia does not provide any warranty, guarantee or representation of any kind concerning our ability to control, collect, correct, access, process, use,protect or transfer any personal information or concerning the existence or effectiveness of any security measures undertaken by us. you agree that zenith arabia will not be liable for any claims, losses, or damages of any kind whatsoever which may result from the access, disclosure, use or modification by any party not authorised or authorised by us, or the introduction of viruses, worms, or other harmful elements into the system and their possible effects on your personal information.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Limitation of Liability</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">in no event will zenith arabia , its affiliates, partners, and their respective employees, officers, directors or insurers be liable to you or to any other person for any costs, damages (including any special, incidental, exemplary, indirect or consequential damages), or liability of any nature, arising or resulting from the collection, use, transfer, processing or storage of personal information obtained by us and resulting from your access to and use of the web sites/apps or collected via the other channels.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Governing Law; Jurisdiction</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">This Privacy Policy will be governed by the laws of the relevant country in which your Personal Information is first registered with Zenith Arabia (&ldquo;the Applicable Territory&rdquo;). For the avoidance of doubt, the relevant Applicable Territory may only include those countries in which Zenith ArabiaWebsites/Apps as the case may be. The exclusive jurisdiction for any claim, action or dispute with Zenith Arabia under this Privacy Policy will be in the appropriate courts of the Applicable Territory.</p>', 1, 'ar', NULL, '2022-11-02 14:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `image2`, `slug`, `created_at`, `updated_at`) VALUES
(15, 'WmUO57N5TLmyhvyWVqdVi860byg6B2vPPsI3QJxg.jpg', '', 'ipad-pro-12-9-6th-generation', '2022-11-20 20:03:07', '2022-12-19 13:52:28'),
(16, 'JD9PtFbTFOMNC2RLxFr8vwR2C8HxjVBm7F1IECLm.jpg', '', 'ipad-10-9-10th-generation', '2022-11-23 21:47:02', '2022-11-23 21:47:02'),
(17, 'oWZU0WZrcbk0R4mDDjE0WiGVWf31uH3dFvwjnqSE.jpg', '', 'airtag', '2022-11-23 22:36:15', '2022-11-23 22:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `locale`, `color_id`, `product_id`, `created_at`, `updated_at`) VALUES
(28, '7l6YxwauvtvA1yH3bSQq40fipaQ5XxRHddQnhrU5.jpg', 'general', 1, 15, '2022-11-20 20:37:44', '2022-12-19 13:56:04'),
(29, 'M878HtVJKv4OIqG6gCAuGHnaHt13BoYrHuD0tDmF.jpg', 'general', 2, 15, '2022-11-20 20:38:01', '2022-11-20 20:38:01'),
(30, 'iZl5MwMnemAbsaG3VJjbztZw9PCw2cFizeXnbpxq.jpg', 'general', 8, 15, '2022-11-20 20:38:16', '2022-11-20 20:38:16'),
(31, '0z92epBqNLAkv0ylcjRbyhooXB1fiOl56kJIvlta.jpg', 'general', 2, 15, '2022-11-20 20:38:31', '2022-11-20 20:38:31'),
(33, 'IUNYhvXsmA0UyGqPC8eD0XxZzIvsLVemSfV1Vlbf.jpg', 'ar', 1, 15, '2022-11-23 20:22:17', '2022-11-23 20:22:17'),
(34, 'npxMUpO6L6JANuQKGcjkfXWbHLI08LFq8bz2oaCb.jpg', 'en', 1, 15, '2022-11-23 20:22:31', '2022-11-23 20:22:31'),
(35, 'G0mlJa6LG5wWCYlXgBzWvZdf6bXLMKq2MmsNWyPu.jpg', 'ar', 1, 15, '2022-11-23 20:22:41', '2022-11-23 20:22:41'),
(36, 'nF7Y636Qw8ViTNQooOCR9WSKNe2NA4B6gRF0ufcT.jpg', 'en', 1, 15, '2022-11-23 20:22:52', '2022-11-23 20:22:52'),
(39, 'DhvYJiq4guJ0UVk6MbwRmzOettg8zYzdFiUXiGdh.jpg', 'general', 9, 16, '2022-11-23 22:16:12', '2022-11-23 22:16:12'),
(40, 'LQuaSETx4zmo7a39QKAdj11P6mU2Bx2UAF31HS0I.jpg', 'general', 10, 16, '2022-11-23 22:16:25', '2022-11-23 22:16:25'),
(41, '2ZqS41GPxBru4swA1y7ryT7x9EwCQ0MelKZVFNfC.jpg', 'general', 8, 16, '2022-11-23 22:16:45', '2022-11-23 22:16:45'),
(42, '2XesYZGdNtURj6Yl8EL28K3rjfusIB7otZmOLCuQ.jpg', 'general', 13, 16, '2022-11-23 22:17:12', '2022-11-23 22:17:12'),
(43, '9PXap1zthj3FyDjV6w6rfsQC6dstI4wB4vNHuVvZ.jpg', 'general', 1, 16, '2022-11-23 22:17:23', '2022-11-23 22:17:23'),
(44, 'k7JR3Zl5hEy7YvmYNCW9lwubqN7g2qCutwJH2VFh.jpg', 'ar', 1, 16, '2022-11-23 22:17:38', '2022-11-23 22:17:38'),
(45, '41Z8QBgQJZp8m8tnbW1WDQZGCbpZpB7esrWkFMSb.jpg', 'en', 1, 16, '2022-11-23 22:17:49', '2022-11-23 22:17:49'),
(46, 'bj3ZsYjJ1neh25VvAVLuPBJbJV9gFkpjPP8ZQdHS.jpg', 'en', 10, 16, '2022-11-23 22:18:46', '2022-11-23 22:18:46'),
(47, 'B3oYMM34lYdHO5oj0OZwebpwE2IrMuKUIKzOYQD1.jpg', 'ar', 10, 16, '2022-11-23 22:18:56', '2022-11-23 22:18:56'),
(48, 'mJ7Ufk1DFsCzxCltZ5gU284VkuIv2K0Cx1Cj3sNW.jpg', 'ar', 9, 16, '2022-11-23 22:19:07', '2022-11-23 22:19:07'),
(49, 'Kvd5i7WRGVlY7vBtuasDkoHbIaVBAi2nSWBcCm12.jpg', 'en', 9, 16, '2022-11-23 22:19:30', '2022-11-23 22:19:30'),
(50, 'LsS0LKoyAX6Rl306sJaFvKVXxMqGsdlN79o61Deb.jpg', 'ar', 10, 16, '2022-11-23 22:19:42', '2022-11-23 22:19:42'),
(51, 'yKiiwtuF0PTtmldVMKhfxS4uDtXPLRqrnNoU74E3.jpg', 'en', 10, 16, '2022-11-23 22:19:59', '2022-11-23 22:19:59'),
(52, 'rBGVXYS0SqydySOK3D63M9TXDmAxyrCIFMwtgNvO.jpg', 'ar', 8, 16, '2022-11-23 22:20:13', '2022-11-23 22:20:13'),
(53, '5rBx9tzm52ydqrfh4sDLpBdMP4eboOKYOKf41QbM.jpg', 'en', 8, 16, '2022-11-23 22:20:23', '2022-11-23 22:20:23'),
(54, '0dvfbV5waB8hWB3OK4u5QAR2fnDQOcr1LltTwGHm.jpg', 'ar', 13, 16, '2022-11-23 22:20:40', '2022-11-23 22:20:40'),
(55, 'AwLk4E1BDvv3q3TDNGQYYKw5oLtGU5UxcZ0HwgeF.jpg', 'en', 13, 16, '2022-11-23 22:20:51', '2022-11-23 22:20:51'),
(57, '23HVJLSjf14cUaz7j8oq8DF4sGugeGMv6UJOc5LN.jpg', 'general', 1, 17, '2022-11-29 17:11:27', '2022-11-29 17:11:27'),
(58, '1a3Gos8bhhfOPD5P2bTDcXWLN1L6oprcLUgo7L1H.jpg', 'ar', 1, 17, '2022-11-29 17:12:19', '2022-11-29 17:12:19'),
(59, 'Q4ey4BxZOQ8btpxB80Y4xyiv1wugiroOlIiw8ENN.jpg', 'en', 1, 17, '2022-11-29 17:12:37', '2022-11-29 17:12:37'),
(60, 'k6jcHM5hoRT8Oam7tLzIOGvdiGWImjOD3tnVowc9.jpg', 'ar', 1, 17, '2022-11-29 17:12:54', '2022-11-29 17:12:54'),
(61, 'iD0xYTAvyGQkOHpzGvtx719ucXRxceJaZbnb4gd5.jpg', 'ar', 1, 17, '2022-11-29 17:13:13', '2022-11-29 17:13:13'),
(62, 'v7BOT39AP33n7AloylM1n3D5IvzAE227QAn9LwoS.jpg', 'en', 1, 17, '2022-11-29 17:13:27', '2022-11-29 17:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `product_school`
--

CREATE TABLE `product_school` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_school`
--

INSERT INTO `product_school` (`id`, `school_id`, `product_id`, `created_at`, `updated_at`) VALUES
(21, 12, 15, NULL, NULL),
(22, 11, 15, NULL, NULL),
(23, 10, 15, NULL, NULL),
(24, 9, 15, NULL, NULL),
(25, 8, 15, NULL, NULL),
(26, 7, 15, NULL, NULL),
(27, 6, 15, NULL, NULL),
(28, 5, 15, NULL, NULL),
(29, 4, 15, NULL, NULL),
(30, 3, 15, NULL, NULL),
(31, 2, 15, NULL, NULL),
(32, 1, 15, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_specifications`
--

CREATE TABLE `product_specifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `capacity_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `connectivity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_specifications`
--

INSERT INTO `product_specifications` (`id`, `product_id`, `capacity_id`, `type`, `price`, `sku`, `color_id`, `created_at`, `updated_at`, `connectivity`) VALUES
(30, 15, 3, NULL, '4232.64', 'MHNF3AB/A', 8, '2022-11-20 20:03:07', '2022-11-20 20:04:03', 'Wi-Fi'),
(31, 15, 3, NULL, '4232.64', 'MHNG3AB/A', 2, '2022-11-20 20:07:36', '2022-11-20 20:16:55', 'Wi-Fi'),
(33, 15, 4, NULL, '4613.66', 'MHNH3AB/A', 8, '2022-11-20 20:18:31', '2022-11-20 20:18:31', 'Wi-Fi'),
(34, 15, 4, NULL, '4613.66', 'MHNJ3AB/A', 2, '2022-11-20 20:19:30', '2022-11-20 20:19:30', 'Wi-Fi'),
(35, 15, 5, NULL, '5375.68', 'MHNK3AB/A', 8, '2022-11-20 20:25:18', '2022-11-20 20:25:18', 'Wi-Fi'),
(36, 15, 5, NULL, '5375.68', 'MHNL3AB/A', 2, '2022-11-20 20:25:46', '2022-11-20 20:25:46', 'Wi-Fi'),
(37, 15, 6, NULL, '6899.73', 'MHNM3AB/A', 8, '2022-11-20 20:26:12', '2022-11-20 20:26:12', 'Wi-Fi'),
(38, 15, 6, NULL, '6899.73', 'MHNN3AB/A', 2, '2022-11-20 20:29:48', '2022-11-20 20:29:48', 'Wi-Fi'),
(39, 15, 7, NULL, '8423.79', 'MHNP3AB/A', 8, '2022-11-20 20:30:17', '2022-11-20 20:30:17', 'Wi-Fi'),
(40, 15, 7, NULL, '8423.79', 'MHNQ3AB/A', 2, '2022-11-20 20:30:44', '2022-11-20 20:30:44', 'Wi-Fi'),
(41, 15, 3, NULL, '4783.00', 'MHR43AB/A', 8, '2022-11-20 20:44:24', '2022-11-20 20:44:24', 'Wi-Fi + Cellular'),
(42, 15, 3, NULL, '4783.00', 'MHR53AB/A', 2, '2022-11-20 20:44:56', '2022-11-20 20:44:56', 'Wi-Fi + Cellular'),
(43, 15, 4, NULL, '5164.00', 'MHR63AB/A', 8, '2022-11-20 20:45:22', '2022-11-20 20:45:22', 'Wi-Fi + Cellular'),
(44, 15, 4, NULL, '5164.00', 'MHR73AB/A', 2, '2022-11-20 20:45:55', '2022-11-20 20:45:55', 'Wi-Fi + Cellular'),
(45, 15, 5, NULL, '5926.03', 'MHR83AB/A', 8, '2022-11-20 20:46:18', '2022-11-20 20:46:18', 'Wi-Fi + Cellular'),
(46, 15, 5, NULL, '5926.03', 'MHR93AB/A', 2, '2022-11-20 20:46:44', '2022-11-20 20:46:44', 'Wi-Fi + Cellular'),
(47, 15, 6, NULL, '7450.09', 'MHRA3AB/A', 8, '2022-11-20 20:47:11', '2022-11-20 20:47:11', 'Wi-Fi + Cellular'),
(48, 15, 6, NULL, '7450.09', 'MHRC3AB/A', 2, '2022-11-20 20:47:42', '2022-11-20 20:47:42', 'Wi-Fi + Cellular'),
(49, 15, 7, NULL, '9016.46', 'MHRD3AB/A', 8, '2022-11-20 20:48:05', '2022-11-20 20:48:05', 'Wi-Fi + Cellular'),
(50, 15, 7, NULL, '9016.46', 'MHRE3AB/A', 2, '2022-11-20 20:48:27', '2022-11-20 20:48:27', 'Wi-Fi + Cellular'),
(51, 16, 8, NULL, '2327.58', 'MM9C3AB/A', 8, '2022-11-23 21:47:02', '2022-11-23 21:51:17', 'Wi-Fi'),
(52, 16, 8, NULL, '2327.58', 'MM9D3AB/A', 10, '2022-11-23 21:51:40', '2022-11-23 21:51:40', 'Wi-Fi'),
(53, 16, 8, NULL, '2327.58', 'MM9E3AB/A', 9, '2022-11-23 21:52:11', '2022-11-23 21:52:11', 'Wi-Fi'),
(54, 16, 8, NULL, '2327.58', 'MM9F3AB/A', 11, '2022-11-23 21:52:41', '2022-11-23 21:52:41', 'Wi-Fi'),
(55, 16, 8, NULL, '2327.58', 'MME23AB/A', 12, '2022-11-23 21:53:07', '2022-11-23 21:53:07', 'Wi-Fi'),
(56, 16, 4, NULL, '2920.27', 'MM9L3AB/A', 8, '2022-11-23 21:53:57', '2022-11-23 21:53:57', 'Wi-Fi'),
(57, 16, 4, NULL, '2920.27', 'MM9M3AB/A', 10, '2022-11-23 21:54:54', '2022-11-23 21:54:54', 'Wi-Fi'),
(58, 16, 4, NULL, '2920.27', 'MM9N3AB/A', 9, '2022-11-23 21:55:22', '2022-11-23 21:55:22', 'Wi-Fi'),
(59, 16, 4, NULL, '2920.27', 'MM9P3AB/A', 11, '2022-11-23 21:55:57', '2022-11-23 21:55:57', 'Wi-Fi'),
(60, 16, 4, NULL, '2920.27', 'MME63AB/A', 12, '2022-11-23 21:56:25', '2022-11-23 21:56:25', 'Wi-Fi'),
(61, 16, 8, NULL, '2920.27', 'MM6R3AB/A', 8, '2022-11-23 21:56:59', '2022-11-23 21:56:59', 'Wi-Fi + Cellular'),
(62, 16, 8, NULL, '2920.27', 'MM6T3AB/A', 10, '2022-11-23 21:57:39', '2022-11-23 21:57:39', 'Wi-Fi + Cellular'),
(63, 16, 8, NULL, '2920.27', 'MM6U3AB/A', 9, '2022-11-23 21:58:03', '2022-11-23 21:58:03', 'Wi-Fi + Cellular'),
(64, 16, 8, NULL, '2920.27', 'MM6V3AB/A', 11, '2022-11-23 21:58:35', '2022-11-23 21:58:35', 'Wi-Fi + Cellular'),
(65, 16, 8, NULL, '2920.27', 'MME93AB/A', 12, '2022-11-23 21:59:10', '2022-11-23 21:59:10', 'Wi-Fi + Cellular'),
(66, 16, 4, NULL, '3512.95', 'MM713AB/A', 8, '2022-11-23 21:59:38', '2022-11-23 21:59:38', 'Wi-Fi + Cellular'),
(67, 16, 4, NULL, '3512.95', 'MM723AB/A', 10, '2022-11-23 22:00:09', '2022-11-23 22:00:09', 'Wi-Fi + Cellular'),
(68, 16, 4, NULL, '3512.95', 'MM733AB/A', 9, '2022-11-23 22:00:49', '2022-11-23 22:00:49', 'Wi-Fi + Cellular'),
(69, 16, 4, NULL, '3512.95', 'MM743AB/A', 11, '2022-11-23 22:01:27', '2022-11-23 22:01:27', 'Wi-Fi + Cellular'),
(70, 16, 4, NULL, '3512.95', 'MMED3AB/A', 12, '2022-11-23 22:01:54', '2022-11-23 22:01:54', 'Wi-Fi + Cellular'),
(71, 16, 8, NULL, '2835.60', 'MYGY2AB/A', 13, '2022-11-23 22:02:44', '2022-11-23 22:02:44', 'Wi-Fi + Cellular'),
(72, 16, 8, NULL, '2835.60', 'MYH02AB/A', 14, '2022-11-23 22:03:09', '2022-11-23 22:03:09', 'Wi-Fi + Cellular'),
(73, 16, 8, NULL, '2835.60', 'MYH12AB/A', 15, '2022-11-23 22:03:35', '2022-11-23 22:03:35', 'Wi-Fi + Cellular'),
(74, 16, 4, NULL, '3428.28', 'MYH62AB/A', 14, '2022-11-23 22:03:58', '2022-11-23 22:03:58', 'Wi-Fi + Cellular'),
(75, 16, 4, NULL, '3428.28', 'MYH72AB/A', 15, '2022-11-23 22:04:20', '2022-11-23 22:04:20', 'Wi-Fi + Cellular'),
(76, 17, NULL, 'Loop', '110.92', 'MHJ03ZE/A', 16, '2022-11-23 22:36:15', '2022-11-29 16:46:59', NULL),
(78, 17, NULL, 'Loop', '110.92', 'MK0W3ZE/A', 17, '2022-11-29 16:52:11', '2022-11-29 16:52:11', NULL),
(79, 17, NULL, 'Loop', '110.92', 'MK0X3ZE/A', 18, '2022-11-29 16:57:30', '2022-11-29 16:57:30', NULL),
(80, 17, NULL, 'Loop', '110.92', 'MX4F2ZE/A', 19, '2022-11-29 16:57:52', '2022-11-29 16:57:52', NULL),
(81, 17, NULL, 'Loop', '110.92', 'MLYX3ZE/A', 20, '2022-11-29 16:58:14', '2022-11-29 16:58:14', NULL),
(82, 17, NULL, 'Loop', '110.92', 'MLYY3ZE/A', 21, '2022-11-29 16:58:41', '2022-11-29 16:58:41', NULL),
(83, 17, NULL, 'Leather Key Ring', '133.25', 'MHJ23ZE/A', 22, '2022-11-29 16:59:08', '2022-11-29 16:59:08', NULL),
(84, 17, NULL, 'Leather Key Ring', '133.25', 'MK103ZE/A', 23, '2022-11-29 16:59:43', '2022-11-29 16:59:43', NULL),
(85, 17, NULL, 'Leather Key Ring', '133.25', 'MX4M2ZE/A', 24, '2022-11-29 17:00:09', '2022-11-29 17:00:09', NULL),
(86, 17, NULL, 'Leather Key Ring', '133.25', 'MM063ZE/A', 25, '2022-11-29 17:00:36', '2022-11-29 17:00:36', NULL),
(87, 17, NULL, 'Leather Key Ring', '133.25', 'MM073ZE/A', 26, '2022-11-29 17:01:25', '2022-11-29 17:01:25', NULL),
(88, 17, NULL, 'Leather Key Ring', '133.25', 'MM083ZE/A', 27, '2022-11-29 17:01:48', '2022-11-29 17:01:48', NULL),
(89, 17, NULL, 'Leather Key Ring', '133.25', 'MMF93ZE/A', 28, '2022-11-29 17:02:17', '2022-11-29 17:02:17', NULL),
(90, 17, NULL, 'Leather Key Ring', '133.25', 'MMFA3ZE/A', 29, '2022-11-29 17:02:44', '2022-11-29 17:02:44', NULL),
(91, 17, NULL, 'Leather Key Ring', '133.25', 'MMFC3ZE/A', 30, '2022-11-29 17:03:06', '2022-11-29 17:03:06', NULL),
(92, 17, NULL, 'Leather Loop', '148.13', 'MX4A2ZE/A', 24, '2022-11-29 17:03:37', '2022-11-29 17:03:37', NULL),
(93, 17, NULL, 'Leather Loop', '148.13', 'MK0V3ZE/A', 23, '2022-11-29 17:04:04', '2022-11-29 17:04:04', NULL),
(94, 17, NULL, 'Leather Loop', '148.13', 'MM003ZE/A', 25, '2022-11-29 17:04:32', '2022-11-29 17:04:32', NULL),
(95, 17, NULL, 'Leather Loop', '148.13', 'MM013ZE/A', 26, '2022-11-29 17:04:56', '2022-11-29 17:04:56', NULL),
(96, 17, NULL, 'Leather Loop', '148.13', 'MM023ZE/A', 27, '2022-11-29 17:05:16', '2022-11-29 17:05:16', NULL),
(97, 17, NULL, 'Leather Loop', '148.13', 'MM043ZE/A', 22, '2022-11-29 17:05:39', '2022-11-29 17:05:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_translations`
--

CREATE TABLE `product_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `features` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `legal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `terms` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_translations`
--

INSERT INTO `product_translations` (`id`, `name`, `description`, `features`, `legal`, `terms`, `product_id`, `locale`, `created_at`, `updated_at`) VALUES
(29, 'iPad pro 12.9 (6th generation)', '<p><span id=\"docs-internal-guid-70889313-7fff-2e62-de3d-fbadc728e326\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">iPad Pro.</span></span></p>\r\n<p><span id=\"docs-internal-guid-70889313-7fff-2e62-de3d-fbadc728e326\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">With astonishing performance, superfast wireless connectivity, and next-generation Apple Pencil experience.</span></span></p>\r\n<p><span id=\"docs-internal-guid-70889313-7fff-2e62-de3d-fbadc728e326\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">Plus, powerful new productivity and collaboration features in iPadOS 16.</span></span></p>\r\n<p><span id=\"docs-internal-guid-70889313-7fff-2e62-de3d-fbadc728e326\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">iPad Pro is the ultimate iPad. </span></span></p>', '<ul>\r\n<li>Brilliant 12.9-inch Liquid Retina XDR display1 with ProMotion, True Tone, and P3 wide color</li>\r\n<li>M2 chip with 8-core CPU and 10-core GPU</li>\r\n<li>12MP Wide camera, 10MP Ultra Wide back camera, and LiDAR Scanner for immersive AR</li>\r\n<li>12MP Ultra Wide front camera with Center Stage</li>\r\n<li>Superfast Wi-Fi 6E2 and 5G cellular3&nbsp;</li>\r\n<li>USB-C connector with support for Thunderbolt / USB 4</li>\r\n<li>Face ID for secure authentication and Apple Pay</li>\r\n<li>Go far with all-day battery life4</li>\r\n<li>Works with Apple Pencil (2nd generation), Magic Keyboard, and Smart Keyboard Folio</li>\r\n<li>Support for Apple Pencil hover for more precise marking and sketching</li>\r\n<li>iPadOS 16 makes your iPad even more capable with powerful new productivity and collaboration features</li>\r\n</ul>', '<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; font-size: 18px; color: #3cb2c3; font-family: Cairo, sans-serif; outline: 0px !important;\">Legal:</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\">Accessories sold separately and subject to availability.<br style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\" />Compatibility varies by generation.<br style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\" />Apps are available on the App Store.<br style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\" />Title availability is subject to change.<br style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\" />Third-party software sold separately.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\"><span style=\"color: #212529; font-family: Cairo, sans-serif;\"><span style=\"font-size: 12pt;\"><sup>1&nbsp;</sup></span>The display has rounded corners. When measured diagonally as a rectangle, the iPad Pro 12.9-inch screen is 12.9 inches. Actual viewable area is less.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; outline: 0px !important;\"><span style=\"color: #212529; font-family: Cairo, sans-serif;\"><span style=\"font-size: 12pt;\"><sup>2&nbsp;</sup></span>Wi‑Fi 6E not available in China mainland and Japan.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; outline: 0px !important;\"><span style=\"color: #212529; font-family: Cairo, sans-serif;\"><span style=\"font-size: 12pt;\"><sup>3&nbsp;</sup></span>Data plan required. 5G is available in select markets and through select carriers. Speeds vary based on site conditions and carrier. For details on 5G support, contact your carrier and see <a href=\"https://www.apple.com/sa/ipad/cellular/\" target=\"_blank\" rel=\"noopener\">apple.com/sa/ipad/cellular</a>.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; outline: 0px !important;\"><span style=\"font-size: 12pt;\"><sup><span style=\"color: #212529; font-family: Cairo, sans-serif;\">4&nbsp;</span></sup></span><span style=\"color: #212529; font-family: Cairo, sans-serif;\">Battery life varies by use and configuration. See <a href=\"https://www.apple.com/sa/batteries/\" target=\"_blank\" rel=\"noopener\">apple.com/sa/batteries</a> for more information.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\"><span style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; font-weight: bolder;\">Technical Specification:</span>&nbsp;Go to <a href=\"https://www.apple.com/sa/ipad-pro/specs/\" target=\"_blank\" rel=\"noopener\">apple.com/sa/ipad-pro/specs</a> for a complete set.</p>', '<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; line-height: 28px; font-size: 16px; font-family: Cairo, sans-serif; outline: 0px !important;\">By agreeing to these Terms of Service, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; line-height: 28px; font-size: 16px; font-family: Cairo, sans-serif; outline: 0px !important;\">You may not use our products for any illegal or unauthorized purpose nor may you, in the use of the Service, violate any laws in your jurisdiction (including but not limited to copyright laws). You must not transmit any worms or viruses or any code of a destructive nature. A breach or violation of any of the Terms will result in an immediate termination of your Services.</p>', 15, 'en', '2022-11-20 20:03:07', '2022-12-19 23:41:29'),
(30, 'iPad pro 12.9 (6th generation)', '<p><span id=\"docs-internal-guid-70889313-7fff-2e62-de3d-fbadc728e326\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">iPad Pro.</span></span></p>\r\n<p><span id=\"docs-internal-guid-70889313-7fff-2e62-de3d-fbadc728e326\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">With astonishing performance, superfast wireless connectivity, and next-generation Apple Pencil experience.</span></span></p>\r\n<p><span id=\"docs-internal-guid-70889313-7fff-2e62-de3d-fbadc728e326\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">Plus, powerful new productivity and collaboration features in iPadOS 16.</span></span></p>\r\n<p><span id=\"docs-internal-guid-70889313-7fff-2e62-de3d-fbadc728e326\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">iPad Pro is the ultimate iPad. </span></span></p>', '<ul>\r\n<li>Brilliant 12.9-inch Liquid Retina XDR display1 with ProMotion, True Tone, and P3 wide color</li>\r\n<li>M2 chip with 8-core CPU and 10-core GPU</li>\r\n<li>12MP Wide camera, 10MP Ultra Wide back camera, and LiDAR Scanner for immersive AR</li>\r\n<li>12MP Ultra Wide front camera with Center Stage</li>\r\n<li>Superfast Wi-Fi 6E2 and 5G cellular3&nbsp;</li>\r\n<li>USB-C connector with support for Thunderbolt / USB 4</li>\r\n<li>Face ID for secure authentication and Apple Pay</li>\r\n<li>Go far with all-day battery life4</li>\r\n<li>Works with Apple Pencil (2nd generation), Magic Keyboard, and Smart Keyboard Folio</li>\r\n<li>Support for Apple Pencil hover for more precise marking and sketching</li>\r\n<li>iPadOS 16 makes your iPad even more capable with powerful new productivity and collaboration features</li>\r\n</ul>', '<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; font-size: 18px; color: #3cb2c3; font-family: Cairo, sans-serif; outline: 0px !important;\">Legal:</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\">Accessories sold separately and subject to availability.<br style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\" />Compatibility varies by generation.<br style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\" />Apps are available on the App Store.<br style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\" />Title availability is subject to change.<br style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\" />Third-party software sold separately.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\"><span style=\"color: #212529; font-family: Cairo, sans-serif;\"><span style=\"font-size: 12pt;\"><sup>1&nbsp;</sup></span>The display has rounded corners. When measured diagonally as a rectangle, the iPad Pro 12.9-inch screen is 12.9 inches. Actual viewable area is less.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; outline: 0px !important;\"><span style=\"color: #212529; font-family: Cairo, sans-serif;\"><span style=\"font-size: 12pt;\"><sup>2&nbsp;</sup></span>Wi‑Fi 6E not available in China mainland and Japan.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; outline: 0px !important;\"><span style=\"color: #212529; font-family: Cairo, sans-serif;\"><span style=\"font-size: 12pt;\"><sup>3&nbsp;</sup></span>Data plan required. 5G is available in select markets and through select carriers. Speeds vary based on site conditions and carrier. For details on 5G support, contact your carrier and see <a href=\"https://www.apple.com/sa/ipad/cellular/\" target=\"_blank\" rel=\"noopener\">apple.com/sa/ipad/cellular</a>.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; outline: 0px !important;\"><span style=\"font-size: 12pt;\"><sup><span style=\"color: #212529; font-family: Cairo, sans-serif;\">4&nbsp;</span></sup></span><span style=\"color: #212529; font-family: Cairo, sans-serif;\">Battery life varies by use and configuration. See <a href=\"https://www.apple.com/sa/batteries/\" target=\"_blank\" rel=\"noopener\">apple.com/sa/batteries</a> for more information.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\"><span style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; font-weight: bolder;\">Technical Specification:</span>&nbsp;Go to <a href=\"https://www.apple.com/sa/ipad-pro/specs/\" target=\"_blank\" rel=\"noopener\">apple.com/sa/ipad-pro/specs</a> for a complete set.</p>', '<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; line-height: 28px; font-size: 16px; font-family: Cairo, sans-serif; outline: 0px !important;\">By agreeing to these Terms of Service, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; line-height: 28px; font-size: 16px; font-family: Cairo, sans-serif; outline: 0px !important;\">You may not use our products for any illegal or unauthorized purpose nor may you, in the use of the Service, violate any laws in your jurisdiction (including but not limited to copyright laws). You must not transmit any worms or viruses or any code of a destructive nature. A breach or violation of any of the Terms will result in an immediate termination of your Services.</p>', 15, 'ar', '2022-11-20 20:03:07', '2022-12-19 23:41:29'),
(31, 'iPad 10.9 (10th generation)', '<p><span id=\"docs-internal-guid-cb4ead15-7fff-f7e5-5f63-7cdf36471a3f\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">Colorfully reimagined and more versatile than ever.</span></span></p>\r\n<p><span id=\"docs-internal-guid-cb4ead15-7fff-f7e5-5f63-7cdf36471a3f\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">With an all-screen design,10.9-inch Liquid Retina display,</span><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\"><span style=\"font-size: 0.6em; vertical-align: super;\">1</span></span><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\"> and four gorgeous colors.</span></span></p>\r\n<p><span id=\"docs-internal-guid-cb4ead15-7fff-f7e5-5f63-7cdf36471a3f\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">iPad delivers a powerful way to create, stay connected, and get things done.</span></span></p>', '<ul>\r\n<li>Striking 10.9-inch Liquid Retina display1 with True Tone</li>\r\n<li>A14 Bionic chip with 6-core CPU and 4-core GPU</li>\r\n<li>12MP Wide back camera&nbsp;</li>\r\n<li>Landscape 12MP Ultra Wide front camera with Center Stage</li>\r\n<li>Touch ID for secure authentication and Apple Pay</li>\r\n<li>Wi-Fi 6 and 5G (sub-6 GHz) cellular2</li>\r\n<li>USB-C connector for charging and accessories</li>\r\n<li>Go far with all-day battery life3</li>\r\n<li>iPadOS 16 makes your iPad even more capable with powerful new productivity and collaboration features</li>\r\n<li>Works with Apple Pencil (1st generation)4 and Magic Keyboard Folio</li>\r\n</ul>', '<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; font-size: 18px; color: #3cb2c3; font-family: Cairo, sans-serif; outline: 0px !important;\">Legal:</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\">Accessories sold separately and subject to availability.<br style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\" />Compatibility varies by generation.<br style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\" />Apps are available on the App Store.<br style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\" />Title availability is subject to change.<br style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\" />Third-party software sold separately.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\"><span style=\"font-size: 12pt;\"><sup>1</sup></span>&nbsp;<span style=\"background-color: transparent; font-family: \'Helvetica Neue\', sans-serif; font-size: 10pt; white-space: pre-wrap; color: #000000;\">The display has rounded corners. When measured diagonally as a rectangle, the iPad 10.9-inch screen is 10.9 inches. Actual viewable area is less.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\"><span style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\"><span style=\"font-size: 12pt;\"><sup>2</sup></span> Data plan required. 5G is available in select markets and through select carriers. Speeds vary based on site conditions and carrier. For details on 5G support, contact your carrier and see&nbsp;<a style=\"box-sizing: border-box; scroll-behavior: smooth; color: #3cb2c3; text-decoration-line: none; background-color: transparent; cursor: pointer; display: inline-block; outline: 0px !important;\" href=\"https://www.apple.com/sa/ipad/cellular/\" target=\"_blank\" rel=\"noopener\">apple.com/sa/ipad/cellular</a>.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\"><span style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\"><span style=\"font-size: 12pt;\"><sup>3</sup></span>&nbsp;</span><span style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\">Battery life varies by use and configuration. See&nbsp;<a style=\"box-sizing: border-box; scroll-behavior: smooth; color: #3cb2c3; text-decoration-line: none; background-color: transparent; cursor: pointer; display: inline-block; outline: 0px !important;\" href=\"https://www.apple.com/sa/batteries/\" target=\"_blank\" rel=\"noopener\">apple.com/sa/batteries</a>&nbsp;for more information.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\"><span style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\"><span style=\"font-size: 12pt;\"><sup>4</sup></span>&nbsp;</span><span style=\"background-color: transparent; font-family: \'Helvetica Neue\', sans-serif; font-size: 10pt; white-space: pre-wrap; color: #000000;\">USB-C to Apple Pencil Adapter required to work with iPad (10th generation). Subject to availability.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\"><span style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; font-weight: bolder;\">Technical Specification:</span>&nbsp;Go to&nbsp;<a style=\"box-sizing: border-box; scroll-behavior: smooth; color: #3cb2c3; text-decoration-line: none; background-color: transparent; cursor: pointer; display: inline-block; outline: 0px !important;\" href=\"https://www.apple.com/sa/ipad-10.9/specs/\" target=\"_blank\" rel=\"noopener\">apple.com/sa/ipad-10.9/specs</a>&nbsp;for a complete set.</p>', NULL, 16, 'en', '2022-11-23 21:47:02', '2022-12-01 16:56:08'),
(32, 'iPad 10.9 (10th generation)', '<p><span id=\"docs-internal-guid-cb4ead15-7fff-f7e5-5f63-7cdf36471a3f\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">Colorfully reimagined and more versatile than ever.</span></span></p>\r\n<p><span id=\"docs-internal-guid-cb4ead15-7fff-f7e5-5f63-7cdf36471a3f\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">With an all-screen design,10.9-inch Liquid Retina display,</span><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\"><span style=\"font-size: 0.6em; vertical-align: super;\">1</span></span><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\"> and four gorgeous colors.</span></span></p>\r\n<p><span id=\"docs-internal-guid-cb4ead15-7fff-f7e5-5f63-7cdf36471a3f\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">iPad delivers a powerful way to create, stay connected, and get things done.</span></span></p>', '<ul>\r\n<li>Striking 10.9-inch Liquid Retina display1 with True Tone</li>\r\n<li>A14 Bionic chip with 6-core CPU and 4-core GPU</li>\r\n<li>12MP Wide back camera&nbsp;</li>\r\n<li>Landscape 12MP Ultra Wide front camera with Center Stage</li>\r\n<li>Touch ID for secure authentication and Apple Pay</li>\r\n<li>Wi-Fi 6 and 5G (sub-6 GHz) cellular2</li>\r\n<li>USB-C connector for charging and accessories</li>\r\n<li>Go far with all-day battery life3</li>\r\n<li>iPadOS 16 makes your iPad even more capable with powerful new productivity and collaboration features</li>\r\n<li>Works with Apple Pencil (1st generation)4 and Magic Keyboard Folio</li>\r\n</ul>', '<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; font-size: 18px; color: #3cb2c3; font-family: Cairo, sans-serif; outline: 0px !important;\">Legal:</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\">Accessories sold separately and subject to availability.<br style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\" />Compatibility varies by generation.<br style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\" />Apps are available on the App Store.<br style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\" />Title availability is subject to change.<br style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\" />Third-party software sold separately.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\">1.&nbsp;<span style=\"background-color: transparent; font-family: \'Helvetica Neue\', sans-serif; font-size: 10pt; white-space: pre-wrap; color: #000000;\">The display has rounded corners. When measured diagonally as a rectangle, the iPad 10.9-inch screen is 10.9 inches. Actual viewable area is less.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\"><span style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\">2.&nbsp;Data plan required. 5G is available in select markets and through select carriers. Speeds vary based on site conditions and carrier. For details on 5G support, contact your carrier and see&nbsp;<a style=\"box-sizing: border-box; scroll-behavior: smooth; color: #3cb2c3; text-decoration-line: none; background-color: transparent; cursor: pointer; display: inline-block; outline: 0px !important;\" href=\"https://www.apple.com/sa/ipad/cellular/\" target=\"_blank\" rel=\"noopener\">apple.com/sa/ipad/cellular</a>.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\"><span style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\">3.&nbsp;</span><span style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\">Battery life varies by use and configuration. See&nbsp;<a style=\"box-sizing: border-box; scroll-behavior: smooth; color: #3cb2c3; text-decoration-line: none; background-color: transparent; cursor: pointer; display: inline-block; outline: 0px !important;\" href=\"https://www.apple.com/sa/batteries/\" target=\"_blank\" rel=\"noopener\">apple.com/sa/batteries</a>&nbsp;for more information.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\"><span style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\">4.&nbsp;</span><span style=\"background-color: transparent; font-family: \'Helvetica Neue\', sans-serif; font-size: 10pt; white-space: pre-wrap; color: #000000;\">USB-C to Apple Pencil Adapter required to work with iPad (10th generation). Subject to availability.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\"><span style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; font-weight: bolder;\">Technical Specification:</span>&nbsp;Go to&nbsp;<a style=\"box-sizing: border-box; scroll-behavior: smooth; color: #3cb2c3; text-decoration-line: none; background-color: transparent; cursor: pointer; display: inline-block; outline: 0px !important;\" href=\"https://www.apple.com/sa/ipad-10.9/specs/\" target=\"_blank\" rel=\"noopener\">apple.com/sa/ipad-10.9/specs</a>&nbsp;for a complete set.</p>', NULL, 16, 'ar', '2022-11-23 21:47:02', '2022-12-01 16:56:08'),
(33, 'AirTag', '<p><span id=\"docs-internal-guid-7c854cae-7fff-0a26-2ef0-c75473ca89ec\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">Keep track of your keys, wallet, luggage, backpack, and more, all in the Find My app.</span></span></p>\r\n<p><span id=\"docs-internal-guid-7c854cae-7fff-0a26-2ef0-c75473ca89ec\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">Play a sound on the built-in speaker, or say &ldquo;Hey Siri, find my gym bag.</span></span><span id=\"docs-internal-guid-7c854cae-7fff-0a26-2ef0-c75473ca89ec\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">&rdquo; With select iPhone models, Precision Finding can lead you right to your nearby AirTag.</span></span></p>\r\n<p><span id=\"docs-internal-guid-7c854cae-7fff-0a26-2ef0-c75473ca89ec\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">If it&rsquo;s farther away, hundreds of millions of Apple devices in the Find My network can help track it down.</span></span></p>\r\n<p><span id=\"docs-internal-guid-7c854cae-7fff-0a26-2ef0-c75473ca89ec\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">All anonymously and encrypted for privacy.</span></span></p>', '<ul>\r\n<li>Keep track of and find your items alongside friends and devices in the Find My app</li>\r\n<li>Simple one-tap setup instantly connects AirTag with your iPhone or iPad</li>\r\n<li>Play a sound on the built-in speaker to help find your things, or just ask Siri for help</li>\r\n<li>Precision Finding with Ultra Wideband technology leads you right to your nearby AirTag (on select iPhone models)</li>\r\n<li>Find items farther away with the help of hundreds of millions of Apple devices in the Find My network</li>\r\n<li>Put AirTag into Lost Mode to be automatically notified when it&rsquo;s detected in the Find My network</li>\r\n<li>All communication with the Find My network is anonymous and encrypted for privacy</li>\r\n<li>Location data and history are never stored on AirTag</li>\r\n<li>Replaceable battery lasts over a year2</li>\r\n<li>AirTag is IP67 water and dust resistant3</li>\r\n<li>Make AirTag yours with a range of colorful accessories</li>\r\n</ul>', '<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; font-size: 18px; color: #3cb2c3; font-family: Cairo, sans-serif; outline: 0px !important;\">Legal:</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\"><span style=\"font-size: 12pt;\"><sup>1</sup></span>&nbsp;<span style=\"background-color: transparent; font-family: \'Helvetica Neue\', sans-serif; font-size: 10pt; white-space: pre-wrap; color: #000000;\">Precision Finding compatible with iPhone 11, iPhone 11 Pro, iPhone 11 Pro Max, iPhone 12 mini, iPhone 12, iPhone 12 Pro, iPhone 12 Pro Max, iPhone 13 mini, iPhone 13, iPhone 13 Pro, iPhone 13 Pro Max, iPhone 14, iPhone 14 Plus, iPhone 14 Pro, and iPhone 14 Pro Max.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\"><span style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\"><span style=\"font-size: 12pt;\"><sup>2</sup></span>&nbsp;</span><span style=\"background-color: transparent; font-family: \'Helvetica Neue\', sans-serif; font-size: 10pt; white-space: pre-wrap; color: #000000;\">Testing conducted by Apple in March 2021 using preproduction AirTag units and software paired with iPhone 11, iPhone 11 Pro, iPhone 11 Pro Max, iPhone 12 mini, iPhone 12, iPhone 12 Pro, and iPhone 12 Pro Max units running preproduction software. Battery life based on an everyday use of four play sound events and one Precision Finding event per day. Battery life varies with usage, environmental conditions, replacement battery manufacturer, and many other factors; actual results will vary.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\"><span style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\"><span style=\"font-size: 12pt;\"><sup>3</sup></span>&nbsp;</span><span style=\"background-color: transparent; font-family: \'Helvetica Neue\', sans-serif; font-size: 10pt; white-space: pre-wrap; color: #000000;\">AirTag is splash, water, and dust resistant and was tested under controlled laboratory conditions with a rating of IP67 under IEC standard 60529 (maximum depth of 1 meter up to 30 minutes). Splash, water, and dust resistance are not permanent conditions and resistance might decrease as a result of normal wear. Refer to the Safety and Handling documentation for cleaning and drying instructions.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\"><span style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; font-weight: bolder;\">Technical Specification:</span>&nbsp;Go to&nbsp;<a style=\"box-sizing: border-box; scroll-behavior: smooth; color: #3cb2c3; text-decoration-line: none; background-color: transparent; cursor: pointer; display: inline-block; outline: 0px !important;\" href=\"https://www.apple.com/airtag/\" target=\"_blank\" rel=\"noopener\">apple.com/airtag</a>&nbsp;for a complete set.</p>', NULL, 17, 'en', '2022-11-23 22:36:15', '2022-12-01 16:57:34'),
(34, 'AirTag', '<p><span id=\"docs-internal-guid-7c854cae-7fff-0a26-2ef0-c75473ca89ec\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">Keep track of your keys, wallet, luggage, backpack, and more, all in the Find My app.</span></span></p>\r\n<p><span id=\"docs-internal-guid-7c854cae-7fff-0a26-2ef0-c75473ca89ec\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">Play a sound on the built-in speaker, or say &ldquo;Hey Siri, find my gym bag.</span></span><span id=\"docs-internal-guid-7c854cae-7fff-0a26-2ef0-c75473ca89ec\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">&rdquo; With select iPhone models, Precision Finding can lead you right to your nearby AirTag.</span></span></p>\r\n<p><span id=\"docs-internal-guid-7c854cae-7fff-0a26-2ef0-c75473ca89ec\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">1 If it&rsquo;s farther away, hundreds of millions of Apple devices in the Find My network can help track it down.</span></span></p>\r\n<p><span id=\"docs-internal-guid-7c854cae-7fff-0a26-2ef0-c75473ca89ec\"><span style=\"font-size: 10pt; font-family: \'Helvetica Neue\', sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">All anonymously and encrypted for privacy.</span></span></p>', '<ul>\r\n<li>Keep track of and find your items alongside friends and devices in the Find My app</li>\r\n<li>Simple one-tap setup instantly connects AirTag with your iPhone or iPad</li>\r\n<li>Play a sound on the built-in speaker to help find your things, or just ask Siri for help</li>\r\n<li>Precision Finding with Ultra Wideband technology leads you right to your nearby AirTag (on select iPhone models)</li>\r\n<li>Find items farther away with the help of hundreds of millions of Apple devices in the Find My network</li>\r\n<li>Put AirTag into Lost Mode to be automatically notified when it&rsquo;s detected in the Find My network</li>\r\n<li>All communication with the Find My network is anonymous and encrypted for privacy</li>\r\n<li>Location data and history are never stored on AirTag</li>\r\n<li>Replaceable battery lasts over a year2</li>\r\n<li>AirTag is IP67 water and dust resistant3</li>\r\n<li>Make AirTag yours with a range of colorful accessories</li>\r\n</ul>', '<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; font-size: 18px; color: #3cb2c3; font-family: Cairo, sans-serif; outline: 0px !important;\">Legal:</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\">1.&nbsp;<span style=\"background-color: transparent; font-family: \'Helvetica Neue\', sans-serif; font-size: 10pt; white-space: pre-wrap; color: #000000;\">Precision Finding compatible with iPhone 11, iPhone 11 Pro, iPhone 11 Pro Max, iPhone 12 mini, iPhone 12, iPhone 12 Pro, iPhone 12 Pro Max, iPhone 13 mini, iPhone 13, iPhone 13 Pro, iPhone 13 Pro Max, iPhone 14, iPhone 14 Plus, iPhone 14 Pro, and iPhone 14 Pro Max.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\"><span style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\">2.&nbsp;</span><span style=\"background-color: transparent; font-family: \'Helvetica Neue\', sans-serif; font-size: 10pt; white-space: pre-wrap; color: #000000;\">Testing conducted by Apple in March 2021 using preproduction AirTag units and software paired with iPhone 11, iPhone 11 Pro, iPhone 11 Pro Max, iPhone 12 mini, iPhone 12, iPhone 12 Pro, and iPhone 12 Pro Max units running preproduction software. Battery life based on an everyday use of four play sound events and one Precision Finding event per day. Battery life varies with usage, environmental conditions, replacement battery manufacturer, and many other factors; actual results will vary.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\"><span style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\">3.&nbsp;</span><span style=\"background-color: transparent; font-family: \'Helvetica Neue\', sans-serif; font-size: 10pt; white-space: pre-wrap; color: #000000;\">AirTag is splash, water, and dust resistant and was tested under controlled laboratory conditions with a rating of IP67 under IEC standard 60529 (maximum depth of 1 meter up to 30 minutes). Splash, water, and dust resistance are not permanent conditions and resistance might decrease as a result of normal wear. Refer to the Safety and Handling documentation for cleaning and drying instructions.</span></p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px auto; color: #212529; font-family: Cairo, sans-serif; outline: 0px !important;\"><span style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; font-weight: bolder;\">Technical Specification:</span>&nbsp;Go to&nbsp;<a style=\"box-sizing: border-box; scroll-behavior: smooth; color: #3cb2c3; text-decoration-line: none; background-color: transparent; cursor: pointer; display: inline-block; outline: 0px !important;\" href=\"https://www.apple.com/airtag/\" target=\"_blank\" rel=\"noopener\">apple.com/airtag</a>&nbsp;for a complete set.</p>', NULL, 17, 'ar', '2022-11-23 22:36:15', '2022-12-01 16:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `image1`, `image2`, `image3`, `created_at`, `updated_at`) VALUES
(1, 'adXERxX7mmXAolEvo6vZ9aEcII20sPJdiU8BHIEI.jpg', '1BxjtfYnOgovv4z1RvsFuKiWAhGzfRxCfilMfnL3.jpg', '6fIFQ7yEA1Ppqf1RtZZ4yIbclUBFpyJC9mCz9r1r.jpg', NULL, '2022-11-29 23:06:20');

-- --------------------------------------------------------

--
-- Table structure for table `program_translations`
--

CREATE TABLE `program_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program_translations`
--

INSERT INTO `program_translations` (`id`, `title`, `subtitle`, `description`, `description1`, `description2`, `description3`, `program_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT OUR PROGRAM', 'DEDICATED FOR EDUCATORS AND LEARNERS.', '<p>the Parental Purchase Program is an innovative teaching technology implementation program that allows teachers and students to purchase Apple products on preferential terms. the goal is to make school education more sustainable and inclusive with technologically advanced tools.</p>\r\n<p>ZenithArabia, as an Authorised Education Specialist, adheres to the parental purchase program by offering solutions that include discount on purchasing iPads &amp; mac for school activities and an agreement on training and support services.</p>', 'Parental Purchase Program is part of the educational solution presented to educational community, where parents of registered schools are able to purchase and quote directly from the store the Apple devices needed with special discount and seamless integration.\r\nZenithArabia, as an Authorized Educational Specialist, adheres to the parental purchase program by offering solutions that include discount on purchasing iPads & mac for school activities and an agreement on training and support service.', 'E-store for Parents with pre-configured bundles.\r\nZero-touch device deployment to Apple school Manager\r\nApple professional learning training\r\nTechnical Support\r\nMobile Device Management', 'Schools have a framework agreement with service provider\r\nBuild dedicated customized portal for school bundle.\r\nParents can sign up to access their account and start ordering.', 1, 'en', NULL, '2022-12-01 16:19:11'),
(2, 'ABOUT OUR PROGRAM', 'DEDICATED FOR EDUCATORS AND LEARNERS.', '<p>the Parental Purchase Program is an innovative teaching technology implementation program that allows teachers and students to purchase Apple products on preferential terms. the goal is to make school education more sustainable and inclusive with technologically advanced tools.</p>\r\n<p>ZenithArabia, as an Authorised Education Specialist, adheres to the parental purchase program by offering solutions that include discount on purchasing iPads &amp; mac for school activities and an agreement on training and support services.</p>', 'Parental Purchase Program is part of the educational solution presented to educational community, where parents of registered schools are able to purchase and quote directly from the store the Apple devices needed with special discount and seamless integration.\r\nZenithArabia, as an Authorized Educational Specialist, adheres to the parental purchase program by offering solutions that include discount on purchasing iPads & mac for school activities and an agreement on training and support service.', 'E-store for Parents with pre-configured bundles.\r\nZero-touch device deployment to Apple school Manager\r\nApple professional learning training\r\nTechnical Support\r\nMobile Device Management', 'Schools have a framework agreement with service provider\r\nBuild dedicated customized portal for school bundle.\r\nParents can sign up to access their account and start ordering.', 1, 'ar', NULL, '2022-12-01 16:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `refunds`
--

CREATE TABLE `refunds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `refunds`
--

INSERT INTO `refunds` (`id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `refund_translations`
--

CREATE TABLE `refund_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `refund_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `refund_translations`
--

INSERT INTO `refund_translations` (`id`, `description`, `refund_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, '<h3 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; line-height: 1.2; font-size: 32px; color: #14568a; letter-spacing: 1px; text-transform: uppercase; font-family: Cairo, sans-serif; outline: 0px !important;\">RETURN &amp; REFUND POLICY</h3>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Please note that we have extended the returns window following government regulations.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Returns Process</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You have 3 days post the delivery to return or exchange products.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">The Cost of return Shipment will be discounted from the paid account</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Please note that the duration is in accordance to the relevant applicable laws in your country, and in case of offers, special conditions are to be applied.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Policies</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Products purchased online can only be returned to any of our stores.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Any items whatsoever which have been provided free-of-charge with the relevant products must also be returned.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You must take reasonable care of any products that you wish to return and not use them. The products must be returned in their original conditions. We will not be responsible for any loss or damage caused to the items during your possession and may reject the request to return, exchange or refund.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">In accordance with global retail industry standards, we are unable to accept returns or exchanges of products in the following categories: underwear, shape wear, lingerie, bikini bottoms &amp; one piece swimsuits, fragrances, health &amp; beauty (such as skincare, make-up &amp; cosmetics) or other products which are personalized to your order.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Exchanges Process</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">In the case of faulty, damaged or incorrectly supplied goods, we may offer you a substitute or replacement product or we will give you a full refund through the possible means, including any delivery charges you paid for (if any). In any case you must return the faulty, damaged or incorrect products to us as soon as possible in the same condition as supplied.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">If you would like to exchange any products, you may: Please note that this is subject to availability and is per our applicable policies.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Refunds</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Subject to the above exclusions, we will process a refund upon receipt of the returned/exchanged products, excluding any delivery charges you paid for through ordering.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">The refund process will be processed in the same medium in which payment has been received on the refund process duration can take up to 14 working days</p>', 1, 'en', NULL, '2022-11-02 14:19:31'),
(2, '<h3 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; line-height: 1.2; font-size: 32px; color: #14568a; letter-spacing: 1px; text-transform: uppercase; font-family: Cairo, sans-serif; outline: 0px !important;\">RETURN &amp; REFUND POLICY</h3>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Please note that we have extended the returns window following government regulations.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Returns Process</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You have 3 days post the delivery to return or exchange products.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">The Cost of return Shipment will be discounted from the paid account</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Please note that the duration is in accordance to the relevant applicable laws in your country, and in case of offers, special conditions are to be applied.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Policies</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Products purchased online can only be returned to any of our stores.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Any items whatsoever which have been provided free-of-charge with the relevant products must also be returned.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You must take reasonable care of any products that you wish to return and not use them. The products must be returned in their original conditions. We will not be responsible for any loss or damage caused to the items during your possession and may reject the request to return, exchange or refund.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">In accordance with global retail industry standards, we are unable to accept returns or exchanges of products in the following categories: underwear, shape wear, lingerie, bikini bottoms &amp; one piece swimsuits, fragrances, health &amp; beauty (such as skincare, make-up &amp; cosmetics) or other products which are personalized to your order.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Exchanges Process</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">In the case of faulty, damaged or incorrectly supplied goods, we may offer you a substitute or replacement product or we will give you a full refund through the possible means, including any delivery charges you paid for (if any). In any case you must return the faulty, damaged or incorrect products to us as soon as possible in the same condition as supplied.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">If you would like to exchange any products, you may: Please note that this is subject to availability and is per our applicable policies.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Refunds</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Subject to the above exclusions, we will process a refund upon receipt of the returned/exchanged products, excluding any delivery charges you paid for through ordering.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">The refund process will be processed in the same medium in which payment has been received on the refund process duration can take up to 14 working days</p>', 1, 'ar', NULL, '2022-11-02 14:19:31');

-- --------------------------------------------------------

--
-- Table structure for table `registeration_requests`
--

CREATE TABLE `registeration_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registeration_requests`
--

INSERT INTO `registeration_requests` (`id`, `name`, `role`, `phone`, `email`, `school`, `region`, `created_at`, `updated_at`) VALUES
(5, 'Abdelaziz Gamal', 'Tester', '01210224040', 'zeezo.gamal@gmail.com', 'Test School Name', 'Cairo', '2022-11-17 06:47:52', '2022-11-17 06:47:52'),
(6, 'Abdelaziz Gamal', 'PHP Developer', '01210224040', 'zeezo.gamal@gmail.com', 'AUC', 'Cairo', '2022-12-14 20:16:37', '2022-12-14 20:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `slug`, `logo`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'king-abdullah-university-of-science-and-technology', 'f5lYwkDTZ2Y2ATp9mtQh3Vg7NCYsSZyaIfMckHSw.jpg', 'test@test.com', '010000000000', '2022-11-01 14:51:52', '2022-11-03 13:03:02'),
(2, 'king-abdulaziz-university', 'DsKk1px7IcMeQGXa48bTgmxi2RhmfpsWdghaMijS.jpg', 'test@test.com', '01000000000000', '2022-11-01 15:01:43', '2022-11-03 13:03:19'),
(3, 'king-faisal-university', 'WPuZbbxgL4hJJbNWCsipkWpnKmDfYVuUV9Cgle9y.jpg', 'test@test.com', '0100000000000000', '2022-11-01 15:02:29', '2022-11-03 13:03:31'),
(4, 'tatwer-co-for-educational-services', '19gDlIurdRWsiwfaKcFJBlkgVWbZDEKOr0aEwNCh.jpg', 'test@test.com', '01000000000000', '2022-11-01 15:11:55', '2022-11-03 13:03:44'),
(5, 'king-khaled-university', 'vCfxK0Z3xQCjahBDa3WAs3Z0oxGrLb1FzrUFVyCj.jpg', 'test@test.com', '0100000000', '2022-11-07 22:42:12', '2022-11-07 22:42:12'),
(6, 'shaqra-university', 'R7xnzhGP1hGuwfsRbLmLa0yDUT6anSoW337mAZrR.jpg', 'test@test.com', '01000000000000', '2022-11-07 22:43:12', '2022-11-07 22:43:12'),
(7, 'british-international-school', 'WljHZgutdjP6EYnGnxArqJKVer1nJSnaExRUQ9lj.jpg', 'test@test.com', '010000000', '2022-11-07 22:43:58', '2022-11-07 22:43:58'),
(8, 'american-international-school', 'mDxfpicIx2vyyaLUs7SaY6xejOPT2HJtZAPRODy1.jpg', 'test@test.com', '010000000', '2022-11-07 22:44:34', '2022-11-07 22:44:34'),
(9, 'technical-and-vocational-training-corporation', '5T3Izz6PqQyRR4a4W5oFROGFwJTNLOdIJjljSek1.jpg', 'test@test.com', '0100000000000', '2022-11-07 22:45:40', '2022-11-07 22:45:40'),
(10, 'arrowad-international-school', 'O1AhDsKPIw86LvvzSUZWXiYBOmN54uZO2Bq6vZJi.jpg', 'test@test.com', '010000000000', '2022-11-07 22:46:19', '2022-11-07 22:46:19'),
(11, 'imam-abdultanman-bin-faisal-university', 'JGF6FVyT4eBzj2uivUtHHX1AdxTTHUi65Kwa6dtQ.jpg', 'test@test.com', '01000000000', '2022-11-07 22:47:25', '2022-11-07 22:47:25'),
(12, 'waad-academy', 'J8CWT6bQ7AqNk9tpTJxnhAHYR5ygVsoVWLxcfEIg.jpg', 'test@test.com', '010000000', '2022-11-07 22:48:09', '2022-11-07 22:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `school_translations`
--

CREATE TABLE `school_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_translations`
--

INSERT INTO `school_translations` (`id`, `name`, `description`, `school_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'King Abdullah university of science and technology', 'Test data', 1, 'en', '2022-11-01 14:51:52', '2022-11-01 15:00:14'),
(2, 'جامعة الملك عبد الله للعلوم والتكنولوجيا', 'بيانات تجريبية', 1, 'ar', '2022-11-01 14:51:52', '2022-11-01 14:51:52'),
(3, 'King abdulaziz university', 'test', 2, 'en', '2022-11-01 15:01:43', '2022-11-01 15:01:43'),
(4, 'جامعة الملك عبد العزيز', 'بيانات تجريبيه', 2, 'ar', '2022-11-01 15:01:43', '2022-11-01 15:01:43'),
(5, 'King faisal university', 'test', 3, 'en', '2022-11-01 15:02:29', '2022-11-01 15:02:29'),
(6, 'جامعة الملك فيصل', 'بيانات تجريبية', 3, 'ar', '2022-11-01 15:02:29', '2022-11-01 15:02:29'),
(7, 'Tatwer co. for educational services', 'test data', 4, 'en', '2022-11-01 15:11:55', '2022-11-01 15:11:55'),
(8, 'شركه تطوير للخدمات التعليمية', 'بيانات تجريبيه', 4, 'ar', '2022-11-01 15:11:55', '2022-11-01 15:11:55'),
(9, 'King khaled university', 'test', 5, 'en', '2022-11-07 22:42:12', '2022-11-07 22:42:12'),
(10, 'جامعة الملك خالد', 'test', 5, 'ar', '2022-11-07 22:42:12', '2022-11-07 22:42:12'),
(11, 'Shaqra university', 'test data', 6, 'en', '2022-11-07 22:43:12', '2022-11-07 22:43:12'),
(12, 'جامعة شقراء', 'بيانات تجريبيه', 6, 'ar', '2022-11-07 22:43:12', '2022-11-07 22:43:12'),
(13, 'British international school', 'test', 7, 'en', '2022-11-07 22:43:58', '2022-11-07 22:43:58'),
(14, 'المدرسة الانجليزية الدولية', 'test', 7, 'ar', '2022-11-07 22:43:58', '2022-11-07 22:43:58'),
(15, 'American international school', 'test', 8, 'en', '2022-11-07 22:44:34', '2022-11-07 22:44:34'),
(16, 'المدرسة الأمريكية الدولية', 'test', 8, 'ar', '2022-11-07 22:44:34', '2022-11-07 22:44:34'),
(17, 'Technical and vocational training corporation', 'test', 9, 'en', '2022-11-07 22:45:40', '2022-11-07 22:45:40'),
(18, 'المؤسسة العامة للتدريب التقني والمهني', 'test', 9, 'ar', '2022-11-07 22:45:40', '2022-11-07 22:45:40'),
(19, 'Arrowad international school', 'test', 10, 'en', '2022-11-07 22:46:19', '2022-11-07 22:46:19'),
(20, 'مدرسة الرواد العالمية', 'test', 10, 'ar', '2022-11-07 22:46:19', '2022-11-07 22:46:19'),
(21, 'Imam Abdultanman bin faisal university', 'test', 11, 'en', '2022-11-07 22:47:25', '2022-11-07 22:47:25'),
(22, 'جامعة الإمام عبد الرحمن ابن فيصل', 'test', 11, 'ar', '2022-11-07 22:47:25', '2022-11-07 22:47:25'),
(23, 'Waad academy', 'test', 12, 'en', '2022-11-07 22:48:09', '2022-11-07 22:48:09'),
(24, 'مدارس أكاديمية وعد', 'test', 12, 'ar', '2022-11-07 22:48:09', '2022-11-07 22:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `phone`, `facebook`, `twitter`, `linkedin`, `youtube`, `instagram`, `map`, `created_at`, `updated_at`) VALUES
(1, 'info@zenitharabia.com', '+966 (11) 4192270', 'https://www.facebook.com/profile.php?id=100032330966914', 'https://twitter.com/zenitharabia?lang=en', 'https://www.linkedin.com/company/zenith-arabia/', NULL, NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.273095713444!2d46.67139311537481!3d24.71750290705881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03a9ddf0fcab%3A0xb79ffa5284283c95!2sZenith%20Arabia!5e0!3m2!1sen!2seg!4v1667042130361!5m2!1sen!2seg', NULL, '2022-12-14 20:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `setting_translations`
--

CREATE TABLE `setting_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `setting_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_translations`
--

INSERT INTO `setting_translations` (`id`, `address`, `setting_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, '6367 Al Ulaya 2716 Riyadh 12251', 1, 'en', NULL, NULL),
(2, '6367 Al Ulaya 2716 Riyadh 12251', 1, 'ar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_translations`
--

CREATE TABLE `shipping_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_translations`
--

INSERT INTO `shipping_translations` (`id`, `description`, `shipping_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, '<h3 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; line-height: 1.2; font-size: 32px; color: #14568a; letter-spacing: 1px; text-transform: uppercase; font-family: Cairo, sans-serif; outline: 0px !important;\">DELIVERY &amp; SHIPPING POLICY</h3>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">The moment you complete your purchase, your order will be processed. We will send you a confirmation email to the email address you have provided, which includes the goods you have ordered and their cost.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Delivery Options</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Home delivery - we provide home delivery services within Saudi Arabia through logistics partner (Aramex)</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Safety Measures</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">In light of current circumstances, we are taking every measure to ensure the safety of our customers &amp; employees. We have imposed strict hygiene and sanitation protocols at every step of the order &amp; delivery process that put safety first. The precautionary measures include: We will always continue to uphold all measures to offer you the best shopping experience from the safety and comfort of your home. We offer home delivery and extended returns policies for your convenience, for more information, visit our returns &amp; refunds page.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Duration</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">All orders placed expected delivery as per below if there is. no delay from Vendor , for available stock order will take 3 working days</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Expected Weeks</h4>\r\n<table class=\"table table-bordered\" style=\"scroll-behavior: smooth; border-collapse: collapse; width: 1110px; margin-bottom: 25px; color: #212529; border: 1px solid #dee2e6; font-family: Cairo, sans-serif; font-size: 16px; outline: 0px !important;\">\r\n<tbody style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\">\r\n<tr style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\">\r\n<th style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; text-align: inherit; padding: 0.75rem; vertical-align: top; border: 1px solid #dee2e6;\">iPad Air , iPad 10.2</th>\r\n<td style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; padding: 0.75rem; vertical-align: top; border: 1px solid #dee2e6;\">12 - 16 weeks</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\">\r\n<th style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; text-align: inherit; padding: 0.75rem; vertical-align: top; border: 1px solid #dee2e6;\">iPad Pro 12.9, iPad Pro 11</th>\r\n<td style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; padding: 0.75rem; vertical-align: top; border: 1px solid #dee2e6;\">12 - 20 weeks</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\">\r\n<th style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; text-align: inherit; padding: 0.75rem; vertical-align: top; border: 1px solid #dee2e6;\">\"MacBook Air, Mac mini, Mac Studio, iMac 24 , MacBook Pro 14&rdquo;, MacBook Pro 13</th>\r\n<td style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; padding: 0.75rem; vertical-align: top; border: 1px solid #dee2e6;\">8-12 weeks</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\">\r\n<th style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; text-align: inherit; padding: 0.75rem; vertical-align: top; border: 1px solid #dee2e6;\">MacBook Pro 16&rdquo;</th>\r\n<td style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; padding: 0.75rem; vertical-align: top; border: 1px solid #dee2e6;\">8-12 weeks except M1 Max no ETA</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\">\r\n<th style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; text-align: inherit; padding: 0.75rem; vertical-align: top; border: 1px solid #dee2e6;\">Accessories</th>\r\n<td style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; padding: 0.75rem; vertical-align: top; border: 1px solid #dee2e6;\">12 - 20 weeks</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Home Delivery</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We deliver to all areas covered by logistics partner (Aramex) in the kingdom of Saudi Arabia</p>', 1, 'en', NULL, '2022-11-02 14:19:48'),
(2, '<h3 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; line-height: 1.2; font-size: 32px; color: #14568a; letter-spacing: 1px; text-transform: uppercase; font-family: Cairo, sans-serif; outline: 0px !important;\">DELIVERY &amp; SHIPPING POLICY</h3>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">The moment you complete your purchase, your order will be processed. We will send you a confirmation email to the email address you have provided, which includes the goods you have ordered and their cost.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Delivery Options</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Home delivery - we provide home delivery services within Saudi Arabia through logistics partner (Aramex)</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Safety Measures</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">In light of current circumstances, we are taking every measure to ensure the safety of our customers &amp; employees. We have imposed strict hygiene and sanitation protocols at every step of the order &amp; delivery process that put safety first. The precautionary measures include: We will always continue to uphold all measures to offer you the best shopping experience from the safety and comfort of your home. We offer home delivery and extended returns policies for your convenience, for more information, visit our returns &amp; refunds page.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Duration</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">All orders placed expected delivery as per below if there is. no delay from Vendor , for available stock order will take 3 working days</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Expected Weeks</h4>\r\n<table class=\"table table-bordered\" style=\"scroll-behavior: smooth; border-collapse: collapse; width: 1110px; margin-bottom: 25px; color: #212529; border: 1px solid #dee2e6; font-family: Cairo, sans-serif; font-size: 16px; outline: 0px !important;\">\r\n<tbody style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\">\r\n<tr style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\">\r\n<th style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; text-align: inherit; padding: 0.75rem; vertical-align: top; border: 1px solid #dee2e6;\">iPad Air , iPad 10.2</th>\r\n<td style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; padding: 0.75rem; vertical-align: top; border: 1px solid #dee2e6;\">12 - 16 weeks</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\">\r\n<th style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; text-align: inherit; padding: 0.75rem; vertical-align: top; border: 1px solid #dee2e6;\">iPad Pro 12.9, iPad Pro 11</th>\r\n<td style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; padding: 0.75rem; vertical-align: top; border: 1px solid #dee2e6;\">12 - 20 weeks</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\">\r\n<th style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; text-align: inherit; padding: 0.75rem; vertical-align: top; border: 1px solid #dee2e6;\">\"MacBook Air, Mac mini, Mac Studio, iMac 24 , MacBook Pro 14&rdquo;, MacBook Pro 13</th>\r\n<td style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; padding: 0.75rem; vertical-align: top; border: 1px solid #dee2e6;\">8-12 weeks</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\">\r\n<th style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; text-align: inherit; padding: 0.75rem; vertical-align: top; border: 1px solid #dee2e6;\">MacBook Pro 16&rdquo;</th>\r\n<td style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; padding: 0.75rem; vertical-align: top; border: 1px solid #dee2e6;\">8-12 weeks except M1 Max no ETA</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important;\">\r\n<th style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; text-align: inherit; padding: 0.75rem; vertical-align: top; border: 1px solid #dee2e6;\">Accessories</th>\r\n<td style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; padding: 0.75rem; vertical-align: top; border: 1px solid #dee2e6;\">12 - 20 weeks</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">Home Delivery</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We deliver to all areas covered by logistics partner (Aramex) in the kingdom of Saudi Arabia</p>', 1, 'ar', NULL, '2022-11-02 14:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `link`, `created_at`, `updated_at`) VALUES
(2, '7AflU4BlWYV71U0bMnZjcfqWvnolr8ldrKzPXnCu.jpg', 'https://zenith.brandbourne.com/en/signin', '2022-11-02 19:32:31', '2022-12-22 17:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `slider_translations`
--

CREATE TABLE `slider_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_translations`
--

INSERT INTO `slider_translations` (`id`, `title`, `description`, `button`, `slider_id`, `locale`, `created_at`, `updated_at`) VALUES
(3, 'PARENTAL PURCHASE PROGRAM', 'Special offer with our online Parental Portal for Education Sector', 'Store Sign in', 2, 'en', '2022-11-02 19:32:31', '2022-12-22 17:06:48'),
(4, 'PARENTAL PURCHASE PROGRAM', 'Special offer with our online Parental Portal for Education Sector', 'تسجيل الدخول', 2, 'ar', '2022-11-02 19:32:31', '2022-12-22 17:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `name`, `icon`, `link`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'fab fa-facebook-f', 'https://www.facebook.com/profile.php?id=100032330966914', '2022-11-02 12:17:12', '2022-11-02 12:17:12'),
(2, 'twitter', 'fab fa-twitter', 'https://twitter.com/zenitharabia?lang=en', '2022-11-02 12:17:31', '2022-11-02 12:17:31'),
(3, 'linkedin', 'fab fa-linkedin-in', 'https://www.linkedin.com/company/zenith-arabia/', '2022-11-02 12:17:59', '2022-11-02 12:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `term_translations`
--

CREATE TABLE `term_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `term_translations`
--

INSERT INTO `term_translations` (`id`, `description`, `term_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, '<h3 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; line-height: 1.2; font-size: 32px; color: #14568a; letter-spacing: 1px; text-transform: uppercase; font-family: Cairo, sans-serif; outline: 0px !important;\">TERMS AND CONDITIONS</h3>\r\n<ul class=\"list\" style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; position: relative; padding: 0px; list-style: none; color: #212529; font-family: Cairo, sans-serif; font-size: 16px; outline: 0px !important;\">\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">Terms of service OVERVIEW This website is operated by Zenith Arabia Store.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">Throughout the site, the terms &ldquo;we&rdquo;, &ldquo;us&rdquo; and &ldquo;our&rdquo; refer to Zenith Arabia Store.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">Zenith Arabia Store offers this website, including all information, tools and services available from this site to you, the user, conditioned upon your acceptance of all terms, conditions, policies and notices stated here.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">By visiting our site and/ or purchasing something from us, you engage in our &ldquo;Service&rdquo; and agree to be bound by the following terms and conditions (&ldquo;Terms of Service&rdquo;, &ldquo;Terms&rdquo;), including those additional terms and conditions and policies referenced herein and/or available by hyperlink.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">These Terms of Service apply to all users of the site, including without limitation users who are browsers, vendors, customers, merchants, and/ or contributors of content.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">Please read these Terms of Service carefully before accessing or using our website.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">By accessing or using any part of the site, you agree to be bound by these Terms of Service.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">If you do not agree to all the terms and conditions of this agreement, then you may not access the website or use any services.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">If these Terms of Service are considered an offer, acceptance is expressly limited to these Terms of Service.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">Any new features or tools which are added to the current store shall also be subject to the Terms of Service.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">You can review the most current version of the Terms of Service at any time on this page.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">We reserve the right to update, change or replace any part of these Terms of Service by posting updates and/or changes to our website. It is your responsibility to check this page periodically for changes.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">Your continued use of or access to the website following the posting of any changes constitutes acceptance of those changes. Our store is hosted on Shopify Inc.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">They provide us with an online e-commerce platform that allows us to sell our products and services to you.</li>\r\n</ul>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 1 - ONLINE STORE TERMS</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">By agreeing to these Terms of Service, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You may not use our products for any illegal or unauthorized purpose nor may you, in the use of the Service, violate any laws in your jurisdiction (including but not limited to copyright laws). You must not transmit any worms or viruses or any code of a destructive nature. A breach or violation of any of the Terms will result in an immediate termination of your Services.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 2 - GENERAL CONDITIONS</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We reserve the right to refuse service to anyone for any reason at any time. You understand that your content (not including credit card information), may be transferred unencrypted and involve (a) transmissions over various networks; and (b) changes to conform and adapt to technical requirements of connecting networks or devices.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Credit card information is always encrypted during transfer over networks. You agree not to reproduce, duplicate, copy, sell, resell or exploit any portion of the Service, use of the Service, or access to the Service or any contact on the website through which the service is provided, without express written permission by us.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">The headings used in this agreement are included for convenience only and will not limit or otherwise affect these Terms.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 3 - ACCURACY, COMPLETENESS AND TIMELINESS OF INFORMATION</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We are not responsible if information made available on this site is not accurate, complete or current.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">The material on this site is provided for general information only and should not be relied upon or used as the sole basis for making decisions without consulting primary, more accurate, more complete or more timely sources of information. Any reliance on the material on this site is at your own risk.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">This site may contain certain historical information. Historical information, necessarily, is not current and is provided for your reference only.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We reserve the right to modify the contents of this site at any time, but we have no obligation to update any information on our site. You agree that it is your responsibility to monitor changes to our site.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 4 - MODIFICATIONS TO THE SERVICE AND PRICES</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Prices for our products are subject to change without notice. We reserve the right at any time to modify or discontinue the Service (or any part or content thereof) without notice at any time. We shall not be liable to you or to any third-party for any modification, price change, suspension or discontinuance of the Service.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 5 - PRODUCTS OR SERVICES</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">(if applicable) certain products or services may be available exclusively online through the website. These products or services may have limited quantities and are subject to return or exchange only according to our Return Policy.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We have made every effort to display as accurately as possible the colors and images of our products that appear at the store.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We cannot guarantee that your computer monitor\'s display of any color will be accurate. We reserve the right, but are not obligated, to limit the sales of our products or Services to any person, geographic region or jurisdiction.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We may exercise this right on a case-by-case basis. We reserve the right to limit the quantities of any products or services that we offer.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">All descriptions of products or product pricing are subject to change at anytime without notice, at the sole discretion of us.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We reserve the right to discontinue any product at any time. Any offer for any product or service made on this site is void where prohibited. We do not warrant that the quality of any products, services, information, or other material purchased or obtained by you will meet your expectations, or that any errors in the Service will be corrected.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 6 - ACCURACY OF BILLING AND ACCOUNT INFORMATION</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We reserve the right to refuse any order you place with us. We may, in our sole discretion, limit or cancel quantities purchased per person, per household or per order.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">These restrictions may include orders placed by or under the same customer account, the same credit card, and/or orders that use the same billing and/or shipping address. In the event that we make a change to or cancel an order, we may attempt to notify you by contacting the e mail and/or billing address/phone number provided at the time the order was made.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We reserve the right to limit or prohibit orders that, in our sole judgment, appear to be placed by dealers, resellers or distributors. You agree to provide current, complete and accurate purchase and account information for all purchases made at our store.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You agree to promptly update your account and other information, including your email address and credit card numbers and expiration dates, so that we can complete your transactions and contact you as needed. For more detail, please review our Returns Policy.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 7 - OPTIONAL TOOLS</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We may provide you with access to third-party tools over which we neither monitor nor have any control nor input. You acknowledge and agree that we provide access to such tools &rdquo;as is&rdquo; and &ldquo;as available&rdquo; without any warranties, representations or conditions of any kind and without any endorsement.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We shall have no liability whatsoever arising from or relating to your use of optional third-party tools.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Any use by you of optional tools offered through the site is entirely at your own risk and discretion and you should ensure that you are familiar with and approve of the terms on which tools are provided by the relevant third-party provider(s).</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We may also, in the future, offer new services and/or features through the website (including, the release of new tools and resources). Such new features and/or services shall also be subject to these Terms of Service.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 8 - THIRD-PARTY LINKS</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Certain content, products and services available via our Service may include materials from third-parties. Third-party links on this site may direct you to third-party websites that are not affiliated with us.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We are not responsible for examining or evaluating the content or accuracy and we do not warrant and will not have any liability or responsibility for any third-party materials or websites, or for any other materials, products, or services of third-parties.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We are not liable for any harm or damages related to the purchase or use of goods, services, resources, content, or any other transactions made in connection with any third-party websites. Please review carefully the third-party\'s policies and practices and make sure you understand them before you engage in any transaction. Complaints, claims, concerns, or questions regarding third-party products should be directed to the third-party.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 9 - USER COMMENTS, FEEDBACK AND OTHER SUBMISSIONS</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">If, at our request, you send certain specific submissions (for example contest entries) or without a request from us you send creative ideas, suggestions, proposals, plans, or other materials, whether online, by email, by postal mail, or otherwise (collectively, \'comments\'), you agree that we may, at any time, without restriction, edit, copy, publish, distribute, translate and otherwise use in any medium any comments that you forward to us.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We are and shall be under no obligation (1) to maintain any comments in confidence; (2) to pay compensation for any comments; or (3) to respond to any comments. We may, but have no obligation to, monitor, edit or remove content that we determine in our sole discretion are unlawful, offensive, threatening, libelous, defamatory, pornographic, obscene or otherwise objectionable or violates any party&rsquo;s intellectual property or these Terms of Service.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You agree that your comments will not violate any right of any third-party, including copyright, trademark, privacy, personality or other personal or proprietary right. You further agree that your comments will not contain libelous or otherwise unlawful, abusive or obscene material, or contain any computer virus or other malware that could in any way affect the operation of the Service or any related website.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You may not use a false e mail address, pretend to be someone other than yourself, or otherwise mislead us or third-parties as to the origin of any comments. You are solely responsible for any comments you make and their accuracy. We take no responsibility and assume no liability for any comments posted by you or any third-party.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 10 - PERSONAL INFORMATION</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Your submission of personal information through the store is governed by our Privacy Policy. To view our Privacy Policy.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 11 - ERRORS, INACCURACIES AND OMISSIONS Occasionally</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">there may be information on our site or in the Service that contains typographical errors, inaccuracies or omissions that may relate to product descriptions, pricing, promotions, offers, product shipping charges, transit times and availability.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We reserve the right to correct any errors, inaccuracies or omissions, and to change or update information or cancel orders if any information in the Service or on any related website is inaccurate at any time without prior notice (including after you have submitted your order).</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We undertake no obligation to update, amend or clarify information in the Service or on any related website, including without limitation, pricing information, except as required by law. No specified update or refresh date applied in the Service or on any related website, should be taken to indicate that all information in the Service or on any related website has been modified or updated.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 12 - PROHIBITED USES</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">In addition to other prohibitions as set forth in the Terms of Service, you are prohibited from using the site or its content: (a) for any unlawful purpose; (b) to solicit others to perform or participate in any unlawful acts; (c) to violate any international, federal, provincial or state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation, religion, ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g) to upload or transmit viruses or any other type of malicious code that will or may be used in any way that will affect the functionality or operation of the Service or of any related website, other websites, or the Internet; (h) to collect or track the personal information of others; (i) to spam, phish, pharm, pretext, spider, crawl, or scrape; (j) for any obscene or immoral purpose; or (k) to interfere with or circumvent the security features of the Service or any related website, other websites, or the Internet.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We reserve the right to terminate your use of the Service or any related website for violating any of the prohibited uses.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 13 - DISCLAIMER OF WARRANTIES; LIMITATION OF LIABILITY</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We do not guarantee, represent or warrant that your use of our service will be uninterrupted, timely, secure or error-free.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We do not warrant that the results that may be obtained from the use of the service will be accurate or reliable. You agree that from time to time we may remove the service for indefinite periods of time or cancel the service at any time, without notice to you.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You expressly agree that your use of, or inability to use, the service is at your sole risk. The service and all products and services delivered to you through the service are (except as expressly stated by us) provided \'as is\' and \'as available\' for your use, without any representation, warranties or conditions of any kind, either express or implied, including all implied warranties or conditions of merchantability, merchantable quality, fitness for a particular purpose, durability, title, and non-infringement.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">In no case shall Zenith Arabia Store, our directors, officers, employees, affiliates, agents, contractors, interns, suppliers, service providers or licensors be liable for any injury, loss, claim, or any direct, indirect, incidental, punitive, special, or consequential damages of any kind, including, without limitation lost profits, lost revenue, lost savings, loss of data, replacement costs, or any similar damages, whether based in contract, tort (including negligence), strict liability or otherwise, arising from your use of any of the service or any products procured using the service, or for any other claim related in any way to your use of the service or any product, including, but not limited to, any errors or omissions in any content, or any loss or damage of any kind incurred as a result of the use of the service or any content (or product) posted, transmitted, or otherwise made available via the service, even if advised of their possibility. Because some states or jurisdictions do not allow the exclusion or the limitation of liability for consequential or incidental damages, in such states or jurisdictions, our liability shall be limited to the maximum extent permitted by law.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 14 - INDEMNIFICATION</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You agree to indemnify, defend and hold harmless Zenith Arabia Store and our parent, subsidiaries, affiliates, partners, officers, directors, agents, contractors, licensors, service providers, subcontractors, suppliers, interns and employees, harmless from any claim or demand, including reasonable attorneys&rsquo; fees, made by any third-party due to or arising out of your breach of these Terms of Service or the documents they incorporate by reference, or your violation of any law or the rights of a third-party.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 15 - SEVERABILITY</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">In the event that any provision of these Terms of Service is determined to be unlawful, void or unenforceable, such provision shall nonetheless be enforceable to the fullest extent permitted by applicable law, and the unenforceable portion shall be deemed to be severed from these Terms of Service, such determination shall not affect the validity and enforceability of any other remaining provisions.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 16 - TERMINATION</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">The obligations and liabilities of the parties incurred prior to the termination date shall survive the termination of this agreement for all purposes. These Terms of Service are effective unless and until terminated by either you or us.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You may terminate these Terms of Service at any time by notifying us that you no longer wish to use our Services, or when you cease using our site. If in our sole judgment you fail, or we suspect that you have failed, to comply with any term or provision of these Terms of Service, we also may terminate this agreement at any time without notice and you will remain liable for all amounts due up to and including the date of termination; and/or accordingly may deny you access to our Services (or any part thereof).</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 17 - ENTIRE AGREEMENT</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">The failure of us to exercise or enforce any right or provision of these Terms of Service shall not constitute a waiver of such right or provision.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">These Terms of Service and any policies or operating rules posted by us on this site or in respect to The Service constitutes the entire agreement and understanding between you and us and govern your use of the Service, superseding any prior or contemporaneous agreements, communications and proposals, whether oral or written, between you and us (including, but not limited to, any prior versions of the Terms of Service). Any ambiguities in the interpretation of these Terms of Service shall not be construed against the drafting party.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 18 - GOVERNING LAW</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">These Terms of Service and any separate agreements whereby we provide you Services shall be governed by and construed in accordance with the laws of Saudi Arabia. SECTION 19 - CHANGES TO TERMS OF SERVICE You can review the most current version of the Terms of Service at any time at this page.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We reserve the right, at our sole discretion, to update, change or replace any part of these Terms of Service by posting updates and changes to our website. It is your responsibility to check our website periodically for changes. Your continued use of or access to our website or the Service following the posting of any changes to these Terms of Service constitutes acceptance of those changes.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 20 - CONTACT INFORMATION</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Questions about the Terms of Service should be sent to us at store@ZenithArabia.com.</p>', 1, 'en', NULL, '2022-11-02 14:19:06');
INSERT INTO `term_translations` (`id`, `description`, `term_id`, `locale`, `created_at`, `updated_at`) VALUES
(2, '<h3 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; line-height: 1.2; font-size: 32px; color: #14568a; letter-spacing: 1px; text-transform: uppercase; font-family: Cairo, sans-serif; outline: 0px !important;\">TERMS AND CONDITIONS</h3>\r\n<ul class=\"list\" style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; position: relative; padding: 0px; list-style: none; color: #212529; font-family: Cairo, sans-serif; font-size: 16px; outline: 0px !important;\">\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">Terms of service OVERVIEW This website is operated by Zenith Arabia Store.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">Throughout the site, the terms &ldquo;we&rdquo;, &ldquo;us&rdquo; and &ldquo;our&rdquo; refer to Zenith Arabia Store.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">Zenith Arabia Store offers this website, including all information, tools and services available from this site to you, the user, conditioned upon your acceptance of all terms, conditions, policies and notices stated here.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">By visiting our site and/ or purchasing something from us, you engage in our &ldquo;Service&rdquo; and agree to be bound by the following terms and conditions (&ldquo;Terms of Service&rdquo;, &ldquo;Terms&rdquo;), including those additional terms and conditions and policies referenced herein and/or available by hyperlink.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">These Terms of Service apply to all users of the site, including without limitation users who are browsers, vendors, customers, merchants, and/ or contributors of content.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">Please read these Terms of Service carefully before accessing or using our website.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">By accessing or using any part of the site, you agree to be bound by these Terms of Service.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">If you do not agree to all the terms and conditions of this agreement, then you may not access the website or use any services.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">If these Terms of Service are considered an offer, acceptance is expressly limited to these Terms of Service.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">Any new features or tools which are added to the current store shall also be subject to the Terms of Service.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">You can review the most current version of the Terms of Service at any time on this page.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">We reserve the right to update, change or replace any part of these Terms of Service by posting updates and/or changes to our website. It is your responsibility to check this page periodically for changes.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">Your continued use of or access to the website following the posting of any changes constitutes acceptance of those changes. Our store is hosted on Shopify Inc.</li>\r\n<li style=\"box-sizing: border-box; scroll-behavior: smooth; outline: 0px !important; display: block; line-height: 25px; margin-bottom: 15px; padding-inline-start: 30px; font-size: 18px; color: #14568a; position: relative;\">They provide us with an online e-commerce platform that allows us to sell our products and services to you.</li>\r\n</ul>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 1 - ONLINE STORE TERMS</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">By agreeing to these Terms of Service, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You may not use our products for any illegal or unauthorized purpose nor may you, in the use of the Service, violate any laws in your jurisdiction (including but not limited to copyright laws). You must not transmit any worms or viruses or any code of a destructive nature. A breach or violation of any of the Terms will result in an immediate termination of your Services.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 2 - GENERAL CONDITIONS</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We reserve the right to refuse service to anyone for any reason at any time. You understand that your content (not including credit card information), may be transferred unencrypted and involve (a) transmissions over various networks; and (b) changes to conform and adapt to technical requirements of connecting networks or devices.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Credit card information is always encrypted during transfer over networks. You agree not to reproduce, duplicate, copy, sell, resell or exploit any portion of the Service, use of the Service, or access to the Service or any contact on the website through which the service is provided, without express written permission by us.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">The headings used in this agreement are included for convenience only and will not limit or otherwise affect these Terms.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 3 - ACCURACY, COMPLETENESS AND TIMELINESS OF INFORMATION</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We are not responsible if information made available on this site is not accurate, complete or current.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">The material on this site is provided for general information only and should not be relied upon or used as the sole basis for making decisions without consulting primary, more accurate, more complete or more timely sources of information. Any reliance on the material on this site is at your own risk.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">This site may contain certain historical information. Historical information, necessarily, is not current and is provided for your reference only.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We reserve the right to modify the contents of this site at any time, but we have no obligation to update any information on our site. You agree that it is your responsibility to monitor changes to our site.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 4 - MODIFICATIONS TO THE SERVICE AND PRICES</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Prices for our products are subject to change without notice. We reserve the right at any time to modify or discontinue the Service (or any part or content thereof) without notice at any time. We shall not be liable to you or to any third-party for any modification, price change, suspension or discontinuance of the Service.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 5 - PRODUCTS OR SERVICES</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">(if applicable) certain products or services may be available exclusively online through the website. These products or services may have limited quantities and are subject to return or exchange only according to our Return Policy.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We have made every effort to display as accurately as possible the colors and images of our products that appear at the store.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We cannot guarantee that your computer monitor\'s display of any color will be accurate. We reserve the right, but are not obligated, to limit the sales of our products or Services to any person, geographic region or jurisdiction.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We may exercise this right on a case-by-case basis. We reserve the right to limit the quantities of any products or services that we offer.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">All descriptions of products or product pricing are subject to change at anytime without notice, at the sole discretion of us.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We reserve the right to discontinue any product at any time. Any offer for any product or service made on this site is void where prohibited. We do not warrant that the quality of any products, services, information, or other material purchased or obtained by you will meet your expectations, or that any errors in the Service will be corrected.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 6 - ACCURACY OF BILLING AND ACCOUNT INFORMATION</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We reserve the right to refuse any order you place with us. We may, in our sole discretion, limit or cancel quantities purchased per person, per household or per order.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">These restrictions may include orders placed by or under the same customer account, the same credit card, and/or orders that use the same billing and/or shipping address. In the event that we make a change to or cancel an order, we may attempt to notify you by contacting the e mail and/or billing address/phone number provided at the time the order was made.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We reserve the right to limit or prohibit orders that, in our sole judgment, appear to be placed by dealers, resellers or distributors. You agree to provide current, complete and accurate purchase and account information for all purchases made at our store.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You agree to promptly update your account and other information, including your email address and credit card numbers and expiration dates, so that we can complete your transactions and contact you as needed. For more detail, please review our Returns Policy.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 7 - OPTIONAL TOOLS</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We may provide you with access to third-party tools over which we neither monitor nor have any control nor input. You acknowledge and agree that we provide access to such tools &rdquo;as is&rdquo; and &ldquo;as available&rdquo; without any warranties, representations or conditions of any kind and without any endorsement.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We shall have no liability whatsoever arising from or relating to your use of optional third-party tools.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Any use by you of optional tools offered through the site is entirely at your own risk and discretion and you should ensure that you are familiar with and approve of the terms on which tools are provided by the relevant third-party provider(s).</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We may also, in the future, offer new services and/or features through the website (including, the release of new tools and resources). Such new features and/or services shall also be subject to these Terms of Service.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 8 - THIRD-PARTY LINKS</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Certain content, products and services available via our Service may include materials from third-parties. Third-party links on this site may direct you to third-party websites that are not affiliated with us.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We are not responsible for examining or evaluating the content or accuracy and we do not warrant and will not have any liability or responsibility for any third-party materials or websites, or for any other materials, products, or services of third-parties.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We are not liable for any harm or damages related to the purchase or use of goods, services, resources, content, or any other transactions made in connection with any third-party websites. Please review carefully the third-party\'s policies and practices and make sure you understand them before you engage in any transaction. Complaints, claims, concerns, or questions regarding third-party products should be directed to the third-party.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 9 - USER COMMENTS, FEEDBACK AND OTHER SUBMISSIONS</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">If, at our request, you send certain specific submissions (for example contest entries) or without a request from us you send creative ideas, suggestions, proposals, plans, or other materials, whether online, by email, by postal mail, or otherwise (collectively, \'comments\'), you agree that we may, at any time, without restriction, edit, copy, publish, distribute, translate and otherwise use in any medium any comments that you forward to us.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We are and shall be under no obligation (1) to maintain any comments in confidence; (2) to pay compensation for any comments; or (3) to respond to any comments. We may, but have no obligation to, monitor, edit or remove content that we determine in our sole discretion are unlawful, offensive, threatening, libelous, defamatory, pornographic, obscene or otherwise objectionable or violates any party&rsquo;s intellectual property or these Terms of Service.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You agree that your comments will not violate any right of any third-party, including copyright, trademark, privacy, personality or other personal or proprietary right. You further agree that your comments will not contain libelous or otherwise unlawful, abusive or obscene material, or contain any computer virus or other malware that could in any way affect the operation of the Service or any related website.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You may not use a false e mail address, pretend to be someone other than yourself, or otherwise mislead us or third-parties as to the origin of any comments. You are solely responsible for any comments you make and their accuracy. We take no responsibility and assume no liability for any comments posted by you or any third-party.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 10 - PERSONAL INFORMATION</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Your submission of personal information through the store is governed by our Privacy Policy. To view our Privacy Policy.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 11 - ERRORS, INACCURACIES AND OMISSIONS Occasionally</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">there may be information on our site or in the Service that contains typographical errors, inaccuracies or omissions that may relate to product descriptions, pricing, promotions, offers, product shipping charges, transit times and availability.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We reserve the right to correct any errors, inaccuracies or omissions, and to change or update information or cancel orders if any information in the Service or on any related website is inaccurate at any time without prior notice (including after you have submitted your order).</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We undertake no obligation to update, amend or clarify information in the Service or on any related website, including without limitation, pricing information, except as required by law. No specified update or refresh date applied in the Service or on any related website, should be taken to indicate that all information in the Service or on any related website has been modified or updated.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 12 - PROHIBITED USES</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">In addition to other prohibitions as set forth in the Terms of Service, you are prohibited from using the site or its content: (a) for any unlawful purpose; (b) to solicit others to perform or participate in any unlawful acts; (c) to violate any international, federal, provincial or state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation, religion, ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g) to upload or transmit viruses or any other type of malicious code that will or may be used in any way that will affect the functionality or operation of the Service or of any related website, other websites, or the Internet; (h) to collect or track the personal information of others; (i) to spam, phish, pharm, pretext, spider, crawl, or scrape; (j) for any obscene or immoral purpose; or (k) to interfere with or circumvent the security features of the Service or any related website, other websites, or the Internet.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We reserve the right to terminate your use of the Service or any related website for violating any of the prohibited uses.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 13 - DISCLAIMER OF WARRANTIES; LIMITATION OF LIABILITY</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We do not guarantee, represent or warrant that your use of our service will be uninterrupted, timely, secure or error-free.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We do not warrant that the results that may be obtained from the use of the service will be accurate or reliable. You agree that from time to time we may remove the service for indefinite periods of time or cancel the service at any time, without notice to you.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You expressly agree that your use of, or inability to use, the service is at your sole risk. The service and all products and services delivered to you through the service are (except as expressly stated by us) provided \'as is\' and \'as available\' for your use, without any representation, warranties or conditions of any kind, either express or implied, including all implied warranties or conditions of merchantability, merchantable quality, fitness for a particular purpose, durability, title, and non-infringement.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">In no case shall Zenith Arabia Store, our directors, officers, employees, affiliates, agents, contractors, interns, suppliers, service providers or licensors be liable for any injury, loss, claim, or any direct, indirect, incidental, punitive, special, or consequential damages of any kind, including, without limitation lost profits, lost revenue, lost savings, loss of data, replacement costs, or any similar damages, whether based in contract, tort (including negligence), strict liability or otherwise, arising from your use of any of the service or any products procured using the service, or for any other claim related in any way to your use of the service or any product, including, but not limited to, any errors or omissions in any content, or any loss or damage of any kind incurred as a result of the use of the service or any content (or product) posted, transmitted, or otherwise made available via the service, even if advised of their possibility. Because some states or jurisdictions do not allow the exclusion or the limitation of liability for consequential or incidental damages, in such states or jurisdictions, our liability shall be limited to the maximum extent permitted by law.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 14 - INDEMNIFICATION</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You agree to indemnify, defend and hold harmless Zenith Arabia Store and our parent, subsidiaries, affiliates, partners, officers, directors, agents, contractors, licensors, service providers, subcontractors, suppliers, interns and employees, harmless from any claim or demand, including reasonable attorneys&rsquo; fees, made by any third-party due to or arising out of your breach of these Terms of Service or the documents they incorporate by reference, or your violation of any law or the rights of a third-party.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 15 - SEVERABILITY</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">In the event that any provision of these Terms of Service is determined to be unlawful, void or unenforceable, such provision shall nonetheless be enforceable to the fullest extent permitted by applicable law, and the unenforceable portion shall be deemed to be severed from these Terms of Service, such determination shall not affect the validity and enforceability of any other remaining provisions.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 16 - TERMINATION</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">The obligations and liabilities of the parties incurred prior to the termination date shall survive the termination of this agreement for all purposes. These Terms of Service are effective unless and until terminated by either you or us.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">You may terminate these Terms of Service at any time by notifying us that you no longer wish to use our Services, or when you cease using our site. If in our sole judgment you fail, or we suspect that you have failed, to comply with any term or provision of these Terms of Service, we also may terminate this agreement at any time without notice and you will remain liable for all amounts due up to and including the date of termination; and/or accordingly may deny you access to our Services (or any part thereof).</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 17 - ENTIRE AGREEMENT</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">The failure of us to exercise or enforce any right or provision of these Terms of Service shall not constitute a waiver of such right or provision.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">These Terms of Service and any policies or operating rules posted by us on this site or in respect to The Service constitutes the entire agreement and understanding between you and us and govern your use of the Service, superseding any prior or contemporaneous agreements, communications and proposals, whether oral or written, between you and us (including, but not limited to, any prior versions of the Terms of Service). Any ambiguities in the interpretation of these Terms of Service shall not be construed against the drafting party.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 18 - GOVERNING LAW</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">These Terms of Service and any separate agreements whereby we provide you Services shall be governed by and construed in accordance with the laws of Saudi Arabia. SECTION 19 - CHANGES TO TERMS OF SERVICE You can review the most current version of the Terms of Service at any time at this page.</p>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">We reserve the right, at our sole discretion, to update, change or replace any part of these Terms of Service by posting updates and changes to our website. It is your responsibility to check our website periodically for changes. Your continued use of or access to our website or the Service following the posting of any changes to these Terms of Service constitutes acceptance of those changes.</p>\r\n<h4 style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 15px 0px; line-height: 1.2; font-size: 22px; color: #14568a; font-family: Cairo, sans-serif; outline: 0px !important;\">SECTION 20 - CONTACT INFORMATION</h4>\r\n<p style=\"box-sizing: border-box; scroll-behavior: smooth; margin: 0px 0px 15px; font-size: 16px; line-height: 28px; font-family: Cairo, sans-serif; outline: 0px !important;\">Questions about the Terms of Service should be sent to us at store@ZenithArabia.com.</p>', 1, 'ar', NULL, '2022-11-02 14:19:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `parent`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'elbiheiry2@gmail.com', 'mostafa', '01011093385', '2022-12-13 10:55:16', '$2y$10$O5AEvfFZ9lvBSHuKpvteKecmNnvzpD0oYnooae.Q8Ry7FvA6BRrKq', 'Y54aCSA5YRoti6iyaEC2PuKtk5uDHbAdSd6riSVkugceG12UQQwQXR5ecZlO', '2022-11-04 19:18:02', '2022-12-13 10:55:16'),
(6, 'm.elbiheiry@brandbourne.com', 'mostafa', '01011093385', NULL, '$2y$10$0ATzh2HUYIhGRHf8NtE1DuQOU5ayqimMyO7Mcz7aNgQtR1tGnZx46', NULL, '2022-11-15 19:45:08', '2022-11-15 19:45:08'),
(7, 'zeezo.gamal@gmail.com', 'Abdelaziz Gamal', '01210224040', '2022-12-13 22:05:10', '$2y$10$X5ozjMqUuQxHyja9pw9k7eBpoMGL4CiCKUObSiug4Q8lrTFUb68Ru', NULL, '2022-11-17 06:52:18', '2022-12-13 22:05:10'),
(8, 'ghada.adel@zenitharabia.com', 'Ghada', '92832', '2022-12-15 18:22:31', '$2y$10$6xmodMVUXVUe9zPZic103.872xisprLwOWCK0NMUtUPkXxtQjOB8e', NULL, '2022-11-17 17:42:07', '2022-12-15 18:22:31'),
(9, 'adminf@sdf.com', 'fghfghfgh', '0123456789', NULL, '$2y$10$g9.jRncO6x.Gzck0e4R3ye4uDn5lrUOK0gEAiUwqexpinGIy2lAcC', NULL, '2022-11-20 02:29:05', '2022-11-20 02:29:05'),
(10, 'h.aburas@zenitharabia.com', 'hosam', '0556660831', '2022-12-15 00:43:58', '$2y$10$kBBJ91.FZ8D/GnqnMHQxuu2suKGKvhMCzvdCikVHvw42VmoZbeqKa', 'wHtWa5RBeeOwGfkge2fpbzXP2cCJRzA1mdxgeFQYvODR87gcwdSmPl6JgVXa', '2022-12-04 13:29:41', '2022-12-15 00:43:58'),
(11, 'a.gamal@brandbourne.com', 'Abdelaziz Gamal', '01210224040', '2022-12-14 20:19:52', '$2y$10$hBfd6cPgMQBtn1z04T6wMer04UHEEMJQ2DmQp2ncN7qh0eYoXVLFq', NULL, '2022-12-14 20:18:46', '2022-12-14 20:19:52'),
(12, 'store@zenitharabia.com', 'hosam', '5566660831', NULL, '$2y$10$gbOXKMRMD1Fh7plA0hoDqOnLQR2Zb1U./cqh1jBD1MIeGBAZzUaM.', NULL, '2022-12-15 00:41:10', '2022-12-15 00:41:10'),
(13, 'hesham.gamal23192@gmail.com', 'teba', '01090353855', '2022-12-18 04:35:48', '$2y$10$O5AvomQ1K9N2gLpP8XFwDOWp9.xNBsz.MYr9S3c4Qt6zUn0KBLHJK', NULL, '2022-12-18 04:35:33', '2022-12-18 04:35:48'),
(14, 'dfdfsd@ggfgd.com', 't', '0123456789', NULL, '$2y$10$v9rXpkx4seRWWxOXhUX6AO89cqgvYb9Mo5EzaJhJC46udX7NL.cK2', NULL, '2022-12-18 15:13:33', '2022-12-18 15:13:33'),
(15, 'zeezo.gamal@gmail.com1', 'Abdelaziz Gamal', '12345678', NULL, '$2y$10$x70u14M3JwxE9aSiLbndEe7FVYAxOVPk6sscq9lYa/fuwmZY1iJv2', NULL, '2022-12-19 02:28:23', '2022-12-19 02:28:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_childrens`
--

CREATE TABLE `user_childrens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_childrens`
--

INSERT INTO `user_childrens` (`id`, `name`, `code`, `grade`, `school_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'mohamed', '423692', '4', 3, 6, '2022-11-15 19:45:08', '2022-11-15 19:45:08'),
(3, 'Ahmed', '1452', '4', 4, 6, '2022-11-15 19:45:08', '2022-11-15 19:45:08'),
(5, 'mohamed', '423692', '5', 3, 1, '2022-11-16 18:28:40', '2022-12-13 10:06:24'),
(6, 'Hamza', '050167', '2022', 3, 7, '2022-11-17 06:52:18', '2022-12-26 02:13:37'),
(9, 'Habeeba', 'dd', '4', 3, 8, '2022-11-17 17:42:07', '2022-11-17 17:42:07'),
(10, 'ghfgh', 'ghfh', '15', 12, 9, '2022-11-20 02:29:05', '2022-11-20 02:29:05'),
(11, 'demo', 'EG', '12', 10, 9, '2022-11-20 02:30:00', '2022-11-20 02:30:00'),
(12, 'Aburas', '1234', '5', 5, 10, '2022-12-04 13:29:41', '2022-12-04 13:29:41'),
(14, 'Hamza', '050167', '2022', 9, 11, '2022-12-14 20:18:46', '2022-12-14 20:18:46'),
(15, 'Aburas', '1234', '3', 3, 12, '2022-12-15 00:41:10', '2022-12-15 00:41:10'),
(17, 'younis', '806131', '1', 11, 13, '2022-12-18 04:36:22', '2022-12-18 04:36:22'),
(18, 'hfgh', '806131', '12', 11, 14, '2022-12-18 15:13:33', '2022-12-18 15:13:33'),
(19, 'Abdelaziz Gamal', '050199', '2022', 12, 15, '2022-12-19 02:28:23', '2022-12-19 02:28:23'),
(20, 'Hala', '999', '5', 8, 8, '2022-12-19 15:16:03', '2022-12-19 15:16:03'),
(23, 'aos', '806131', '12', 11, 13, '2022-12-29 05:03:24', '2022-12-29 05:03:24'),
(24, 'admin', '806131', '1', 3, 13, '2022-12-29 05:03:40', '2022-12-29 05:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `created_at`, `updated_at`) VALUES
(1, '2022-11-29 23:32:58', '2022-11-29 23:32:58'),
(2, '2022-11-29 23:33:08', '2022-11-29 23:33:08'),
(3, '2022-11-29 23:33:18', '2022-11-29 23:33:18'),
(4, '2022-11-29 23:33:27', '2022-11-29 23:33:27'),
(5, '2022-11-29 23:33:37', '2022-11-29 23:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `work_translations`
--

CREATE TABLE `work_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_translations`
--

INSERT INTO `work_translations` (`id`, `title`, `subtitle`, `work_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'PRODUCT DEVLIVERED', 'Start Learning journey with preconfigured devices', 1, 'en', '2022-11-29 23:32:58', '2022-11-29 23:32:58'),
(2, 'PRODUCT DEVLIVERED', 'Start Learning journey with preconfigured devices', 1, 'ar', '2022-11-29 23:32:58', '2022-11-29 23:32:58'),
(3, 'WE PROCESS', 'Door to Door Delivery', 2, 'en', '2022-11-29 23:33:08', '2022-11-29 23:33:08'),
(4, 'WE PROCESS', 'Door to Door Delivery', 2, 'ar', '2022-11-29 23:33:08', '2022-11-29 23:33:08'),
(5, 'PAYMENT', 'Pay online via desired Method', 3, 'en', '2022-11-29 23:33:18', '2022-11-29 23:33:18'),
(6, 'PAYMENT', 'Pay online via desired Method', 3, 'ar', '2022-11-29 23:33:18', '2022-11-29 23:33:18'),
(7, 'CHOOSE PRODUCT', 'Choose the devices, accessories, and school bundle', 4, 'en', '2022-11-29 23:33:27', '2022-11-29 23:33:27'),
(8, 'CHOOSE PRODUCT', 'Choose the devices, accessories, and school bundle', 4, 'ar', '2022-11-29 23:33:27', '2022-11-29 23:33:27'),
(9, 'CREATE ACCOUNT', 'Fill your contact details with the school registered', 5, 'en', '2022-11-29 23:33:37', '2022-11-29 23:33:37'),
(10, 'CREATE ACCOUNT', 'Fill your contact details with the school registered', 5, 'ar', '2022-11-29 23:33:37', '2022-11-29 23:33:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_translations`
--
ALTER TABLE `about_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `about_translations_about_id_locale_unique` (`about_id`,`locale`),
  ADD KEY `about_translations_locale_index` (`locale`);

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accessory_images`
--
ALTER TABLE `accessory_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accessory_images_accessory_id_index` (`accessory_id`);

--
-- Indexes for table `accessory_product`
--
ALTER TABLE `accessory_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_accessory_product_id_index` (`product_id`),
  ADD KEY `product_accessory_accessory_id_index` (`accessory_id`);

--
-- Indexes for table `accessory_specifications`
--
ALTER TABLE `accessory_specifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accessory_specifications_accessory_id_index` (`accessory_id`),
  ADD KEY `accessory_specifications_color_id_index` (`color_id`);

--
-- Indexes for table `accessory_translations`
--
ALTER TABLE `accessory_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `accessory_translations_accessory_id_locale_unique` (`accessory_id`,`locale`),
  ADD KEY `accessory_translations_locale_index` (`locale`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `benefits`
--
ALTER TABLE `benefits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benefit_translations`
--
ALTER TABLE `benefit_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `benefit_translations_benefit_id_locale_unique` (`benefit_id`,`locale`),
  ADD KEY `benefit_translations_locale_index` (`locale`);

--
-- Indexes for table `bundles`
--
ALTER TABLE `bundles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bundles_school_id_index` (`school_id`),
  ADD KEY `bundles_product_id_index` (`product_id`),
  ADD KEY `bundles_product_specification_id_index` (`product_specification_id`);

--
-- Indexes for table `bundle_accessories`
--
ALTER TABLE `bundle_accessories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bundle_accessories_bundle_id_index` (`bundle_id`),
  ADD KEY `bundle_accessories_accessory_id_index` (`accessory_id`),
  ADD KEY `bundle_accessories_accessory_specification_id_index` (`accessory_specification_id`);

--
-- Indexes for table `bundle_translations`
--
ALTER TABLE `bundle_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bundle_translations_bundle_id_locale_unique` (`bundle_id`,`locale`),
  ADD KEY `bundle_translations_locale_index` (`locale`);

--
-- Indexes for table `capacities`
--
ALTER TABLE `capacities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `capacity_translations`
--
ALTER TABLE `capacity_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `capacity_translations_capacity_id_locale_unique` (`capacity_id`,`locale`),
  ADD KEY `capacity_translations_locale_index` (`locale`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_translations`
--
ALTER TABLE `color_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `color_translations_color_id_locale_unique` (`color_id`,`locale`),
  ADD KEY `color_translations_locale_index` (`locale`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_translations`
--
ALTER TABLE `content_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `content_translations_content_id_locale_unique` (`content_id`,`locale`),
  ADD KEY `content_translations_locale_index` (`locale`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_translations`
--
ALTER TABLE `home_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `home_translations_home_id_locale_unique` (`home_id`,`locale`),
  ADD KEY `home_translations_locale_index` (`locale`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_translations`
--
ALTER TABLE `offer_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `offer_translations_offer_id_locale_unique` (`offer_id`,`locale`),
  ADD KEY `offer_translations_locale_index` (`locale`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_index` (`user_id`);

--
-- Indexes for table `parentals`
--
ALTER TABLE `parentals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parental_translations`
--
ALTER TABLE `parental_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `parent_translations_parental_id_locale_unique` (`parental_id`,`locale`) USING BTREE,
  ADD KEY `parent_translations_locale_index` (`locale`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `privacies`
--
ALTER TABLE `privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy_translations`
--
ALTER TABLE `privacy_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `privacy_translations_privacy_id_locale_unique` (`privacy_id`,`locale`),
  ADD KEY `privacy_translations_locale_index` (`locale`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_color_id_index` (`color_id`),
  ADD KEY `product_images_product_id_index` (`product_id`);

--
-- Indexes for table `product_school`
--
ALTER TABLE `product_school`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_schools_school_id_index` (`school_id`),
  ADD KEY `product_schools_product_id_index` (`product_id`);

--
-- Indexes for table `product_specifications`
--
ALTER TABLE `product_specifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_specifications_product_id_index` (`product_id`),
  ADD KEY `product_specifications_capacity_id_index` (`capacity_id`),
  ADD KEY `product_specifications_color_id_index` (`color_id`);

--
-- Indexes for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_translations_product_id_locale_unique` (`product_id`,`locale`),
  ADD KEY `product_translations_locale_index` (`locale`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_translations`
--
ALTER TABLE `program_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `program_translations_program_id_locale_unique` (`program_id`,`locale`),
  ADD KEY `program_translations_locale_index` (`locale`);

--
-- Indexes for table `refunds`
--
ALTER TABLE `refunds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refund_translations`
--
ALTER TABLE `refund_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `refund_translations_refund_id_locale_unique` (`refund_id`,`locale`),
  ADD KEY `refund_translations_locale_index` (`locale`);

--
-- Indexes for table `registeration_requests`
--
ALTER TABLE `registeration_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_translations`
--
ALTER TABLE `school_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `school_translations_school_id_locale_unique` (`school_id`,`locale`),
  ADD KEY `school_translations_locale_index` (`locale`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_translations_setting_id_locale_unique` (`setting_id`,`locale`),
  ADD KEY `setting_translations_locale_index` (`locale`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_translations`
--
ALTER TABLE `shipping_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shipping_translations_shipping_id_locale_unique` (`shipping_id`,`locale`),
  ADD KEY `shipping_translations_locale_index` (`locale`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_translations`
--
ALTER TABLE `slider_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slider_translations_slider_id_locale_unique` (`slider_id`,`locale`),
  ADD KEY `slider_translations_locale_index` (`locale`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term_translations`
--
ALTER TABLE `term_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `term_translations_term_id_locale_unique` (`term_id`,`locale`),
  ADD KEY `term_translations_locale_index` (`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_childrens`
--
ALTER TABLE `user_childrens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_childrens_school_id_index` (`school_id`),
  ADD KEY `user_childrens_user_id_index` (`user_id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_translations`
--
ALTER TABLE `work_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `work_translations_work_id_locale_unique` (`work_id`,`locale`),
  ADD KEY `work_translations_locale_index` (`locale`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_translations`
--
ALTER TABLE `about_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `accessory_images`
--
ALTER TABLE `accessory_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `accessory_product`
--
ALTER TABLE `accessory_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `accessory_specifications`
--
ALTER TABLE `accessory_specifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `accessory_translations`
--
ALTER TABLE `accessory_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `benefits`
--
ALTER TABLE `benefits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `benefit_translations`
--
ALTER TABLE `benefit_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bundles`
--
ALTER TABLE `bundles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bundle_accessories`
--
ALTER TABLE `bundle_accessories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bundle_translations`
--
ALTER TABLE `bundle_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `capacities`
--
ALTER TABLE `capacities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `capacity_translations`
--
ALTER TABLE `capacity_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `color_translations`
--
ALTER TABLE `color_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content_translations`
--
ALTER TABLE `content_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_translations`
--
ALTER TABLE `home_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `offer_translations`
--
ALTER TABLE `offer_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `parentals`
--
ALTER TABLE `parentals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parental_translations`
--
ALTER TABLE `parental_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacies`
--
ALTER TABLE `privacies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `privacy_translations`
--
ALTER TABLE `privacy_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `product_school`
--
ALTER TABLE `product_school`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product_specifications`
--
ALTER TABLE `product_specifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `product_translations`
--
ALTER TABLE `product_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `program_translations`
--
ALTER TABLE `program_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `refunds`
--
ALTER TABLE `refunds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `refund_translations`
--
ALTER TABLE `refund_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registeration_requests`
--
ALTER TABLE `registeration_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `school_translations`
--
ALTER TABLE `school_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_translations`
--
ALTER TABLE `setting_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping_translations`
--
ALTER TABLE `shipping_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider_translations`
--
ALTER TABLE `slider_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `term_translations`
--
ALTER TABLE `term_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_childrens`
--
ALTER TABLE `user_childrens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `work_translations`
--
ALTER TABLE `work_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_translations`
--
ALTER TABLE `about_translations`
  ADD CONSTRAINT `about_translations_about_id_foreign` FOREIGN KEY (`about_id`) REFERENCES `abouts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `accessory_images`
--
ALTER TABLE `accessory_images`
  ADD CONSTRAINT `accessory_images_accessory_id_foreign` FOREIGN KEY (`accessory_id`) REFERENCES `accessories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `accessory_product`
--
ALTER TABLE `accessory_product`
  ADD CONSTRAINT `product_accessory_accessory_id_foreign` FOREIGN KEY (`accessory_id`) REFERENCES `accessories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_accessory_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `accessory_specifications`
--
ALTER TABLE `accessory_specifications`
  ADD CONSTRAINT `accessory_specifications_accessory_id_foreign` FOREIGN KEY (`accessory_id`) REFERENCES `accessories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `accessory_specifications_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `accessory_translations`
--
ALTER TABLE `accessory_translations`
  ADD CONSTRAINT `accessory_translations_accessory_id_foreign` FOREIGN KEY (`accessory_id`) REFERENCES `accessories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `benefit_translations`
--
ALTER TABLE `benefit_translations`
  ADD CONSTRAINT `benefit_translations_benefit_id_foreign` FOREIGN KEY (`benefit_id`) REFERENCES `benefits` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bundles`
--
ALTER TABLE `bundles`
  ADD CONSTRAINT `bundles_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bundles_product_specification_id_foreign` FOREIGN KEY (`product_specification_id`) REFERENCES `product_specifications` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bundles_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bundle_accessories`
--
ALTER TABLE `bundle_accessories`
  ADD CONSTRAINT `bundle_accessories_accessory_id_foreign` FOREIGN KEY (`accessory_id`) REFERENCES `accessories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bundle_accessories_accessory_specification_id_foreign` FOREIGN KEY (`accessory_specification_id`) REFERENCES `accessory_specifications` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bundle_accessories_bundle_id_foreign` FOREIGN KEY (`bundle_id`) REFERENCES `bundles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bundle_translations`
--
ALTER TABLE `bundle_translations`
  ADD CONSTRAINT `bundle_translations_bundle_id_foreign` FOREIGN KEY (`bundle_id`) REFERENCES `bundles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `capacity_translations`
--
ALTER TABLE `capacity_translations`
  ADD CONSTRAINT `capacity_translations_capacity_id_foreign` FOREIGN KEY (`capacity_id`) REFERENCES `capacities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `color_translations`
--
ALTER TABLE `color_translations`
  ADD CONSTRAINT `color_translations_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `content_translations`
--
ALTER TABLE `content_translations`
  ADD CONSTRAINT `content_translations_content_id_foreign` FOREIGN KEY (`content_id`) REFERENCES `contents` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `home_translations`
--
ALTER TABLE `home_translations`
  ADD CONSTRAINT `home_translations_home_id_foreign` FOREIGN KEY (`home_id`) REFERENCES `homes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `offer_translations`
--
ALTER TABLE `offer_translations`
  ADD CONSTRAINT `offer_translations_offer_id_foreign` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `parental_translations`
--
ALTER TABLE `parental_translations`
  ADD CONSTRAINT `parent_translations_parent_id_foreign` FOREIGN KEY (`parental_id`) REFERENCES `parentals` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `privacy_translations`
--
ALTER TABLE `privacy_translations`
  ADD CONSTRAINT `privacy_translations_privacy_id_foreign` FOREIGN KEY (`privacy_id`) REFERENCES `privacies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_school`
--
ALTER TABLE `product_school`
  ADD CONSTRAINT `product_schools_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_schools_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_specifications`
--
ALTER TABLE `product_specifications`
  ADD CONSTRAINT `product_specifications_capacity_id_foreign` FOREIGN KEY (`capacity_id`) REFERENCES `capacities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_specifications_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_specifications_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD CONSTRAINT `product_translations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `program_translations`
--
ALTER TABLE `program_translations`
  ADD CONSTRAINT `program_translations_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `refund_translations`
--
ALTER TABLE `refund_translations`
  ADD CONSTRAINT `refund_translations_refund_id_foreign` FOREIGN KEY (`refund_id`) REFERENCES `refunds` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `school_translations`
--
ALTER TABLE `school_translations`
  ADD CONSTRAINT `school_translations_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD CONSTRAINT `setting_translations_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shipping_translations`
--
ALTER TABLE `shipping_translations`
  ADD CONSTRAINT `shipping_translations_shipping_id_foreign` FOREIGN KEY (`shipping_id`) REFERENCES `shippings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slider_translations`
--
ALTER TABLE `slider_translations`
  ADD CONSTRAINT `slider_translations_slider_id_foreign` FOREIGN KEY (`slider_id`) REFERENCES `sliders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `term_translations`
--
ALTER TABLE `term_translations`
  ADD CONSTRAINT `term_translations_term_id_foreign` FOREIGN KEY (`term_id`) REFERENCES `terms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_childrens`
--
ALTER TABLE `user_childrens`
  ADD CONSTRAINT `user_childrens_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_childrens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `work_translations`
--
ALTER TABLE `work_translations`
  ADD CONSTRAINT `work_translations_work_id_foreign` FOREIGN KEY (`work_id`) REFERENCES `works` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
