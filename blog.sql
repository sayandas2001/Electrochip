-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 15, 2023 at 04:11 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `banner_image` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `link` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `image`, `banner_image`, `description`, `link`) VALUES
(1, 'About us', 'about-img13.jpg', 'about-img22.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit', 'https://www.google.com/search?q=w3schools&rlz=1C1C');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `banner_id` int NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'ELECTRICAL SERVICE PROVIDERS', 'slider-img.jpg', '2023-09-05 14:04:21', '2023-09-05 14:05:11'),
(3, 'ELECTRICAL SERVICE PROVIDERS', 'slider-img1.jpg', '2023-09-05 14:05:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `image`, `description`) VALUES
(1, 'Blog Title Goes Here', 'blog11.jpg', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised'),
(3, 'Blog Title Goes Here', 'blog25.jpg', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

DROP TABLE IF EXISTS `cms`;
CREATE TABLE IF NOT EXISTS `cms` (
  `cms_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `isdeleted` tinyint NOT NULL,
  PRIMARY KEY (`cms_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `contact_id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

DROP TABLE IF EXISTS `queries`;
CREATE TABLE IF NOT EXISTS `queries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(90) NOT NULL,
  `phone_number` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `name`, `email`, `phone_number`, `message`) VALUES
(1, 'suman das', 'info@gmail.com', '7098921', 'Admin'),
(12, 'ranjan da', 'ra@gmail.com', '9769856780', 'hello'),
(13, 'sayan', 's@yahoo.com', '908597874', 'contact'),
(14, 'ayan', 'hi@gmail.com', '978569456', 'new subject');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `image`, `description`) VALUES
(1, 'Equipment installation', 's1.png', 'There are many variations of passages of Lorem Ipsum available,'),
(2, 'Windmill Energy', 's2.png', 'There are many variations of passages of Lorem Ipsum available,'),
(3, 'Equipment Maintenance', 's3.png', 'There are many variations of passages of Lorem Ipsum available,'),
(4, 'Offshore Engineering', 's4.png', 'There are many variations of passages of Lorem Ipsum available,'),
(5, 'Electrical Wiring', 's5.png', 'There are many variations of passages of Lorem Ipsum available,');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

DROP TABLE IF EXISTS `site_settings`;
CREATE TABLE IF NOT EXISTS `site_settings` (
  `site_settings_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `image` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `isdeleted` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`site_settings_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `contact_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` bigint NOT NULL,
  `telephone` int NOT NULL,
  `address` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `fb_link` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `twitter_link` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `instagram_link` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_last_login`
--

DROP TABLE IF EXISTS `tbl_last_login`;
CREATE TABLE IF NOT EXISTS `tbl_last_login` (
  `iii` int NOT NULL AUTO_INCREMENT,
  `id` bigint NOT NULL,
  `userId` bigint NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iii`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_last_login`
--

INSERT INTO `tbl_last_login` (`iii`, `id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES
(1, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 114.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Windows 10', '2023-07-24 17:43:03'),
(2, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-08-22 17:04:17'),
(3, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-08-22 17:49:44'),
(4, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-08-22 18:19:07'),
(5, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-08-28 16:08:56'),
(6, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-08-28 16:17:33'),
(7, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-08-28 22:46:59'),
(8, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-08-28 22:47:51'),
(9, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-08-29 12:04:18'),
(10, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-08-30 11:56:08'),
(11, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-08-31 11:58:16'),
(12, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-08-31 16:50:14'),
(13, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-08-31 16:51:23'),
(14, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-08-31 16:53:30'),
(15, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-01 10:35:52'),
(16, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-02 21:29:54'),
(17, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-02 22:44:53'),
(18, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-03 10:25:20'),
(19, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-03 18:41:24'),
(20, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-04 10:51:09'),
(21, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-04 20:26:20'),
(22, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-05 10:30:23'),
(23, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-05 16:07:50'),
(24, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-06 10:56:33'),
(25, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-06 17:04:58'),
(26, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-07 11:00:38'),
(27, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-08 11:07:04'),
(28, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-10 22:06:27'),
(29, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-11 09:31:26'),
(30, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-11 11:53:17'),
(31, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-11 11:53:35'),
(32, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-12 13:10:53'),
(33, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-12 13:11:27'),
(34, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-12 13:12:11'),
(35, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-13 18:45:24'),
(36, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-14 09:59:29'),
(37, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"SKMAT\"}', '::1', 'Chrome 116.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'Windows 10', '2023-09-15 21:09:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mail`
--

DROP TABLE IF EXISTS `tbl_mail`;
CREATE TABLE IF NOT EXISTS `tbl_mail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_mail`
--

INSERT INTO `tbl_mail` (`id`, `name`, `email`, `phone`, `message`, `created_at`) VALUES
(10, 'SAYAK DAS', 'sayakdas14091999@gmail.com', 7685052883, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-12-28 19:01:17'),
(14, 'SAYAK DAS', 'sayakdas14091999@gmail.com', 7685052883, 'assdfghjklpoiuytrewqazxcvbnm', '2022-01-06 09:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

DROP TABLE IF EXISTS `tbl_roles`;
CREATE TABLE IF NOT EXISTS `tbl_roles` (
  `roleId` tinyint NOT NULL AUTO_INCREMENT COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text',
  PRIMARY KEY (`roleId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `userId` int NOT NULL AUTO_INCREMENT,
  `empid` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `dob` date NOT NULL,
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `roleId` tinyint NOT NULL,
  `fathername` varchar(250) DEFAULT NULL,
  `multi_file` varchar(250) NOT NULL,
  `isDeleted` tinyint NOT NULL DEFAULT '0',
  `createdBy` int NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `empid`, `email`, `dob`, `password`, `name`, `mobile`, `address`, `roleId`, `fathername`, `multi_file`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, '', 'admin', '0000-00-00', '$2a$04$zMm32EJHc9U6CVSFHBpLbOizUiydR5TGg9p2/kAaTmPAh7Sv021Ia', 'SKMAT', '7685052883', NULL, 1, NULL, '', 0, 0, '2015-07-01 18:56:49', 1, '2021-12-22 15:03:48');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
