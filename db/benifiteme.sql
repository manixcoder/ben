-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 08:16 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `benifiteme`
--

-- --------------------------------------------------------

--
-- Table structure for table `adverting`
--

CREATE TABLE `adverting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_product` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `advertings`
--

CREATE TABLE `advertings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `advertings`
--

INSERT INTO `advertings` (`id`, `ad_name`, `ad_image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'hgjhjg', 'file62628e14e3c01-2.jpg', 'jkhj', '2022-04-22 05:44:28', '2022-04-22 05:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amenities_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `amenities_name`, `created_at`, `updated_at`) VALUES
(1, 'Free WiFi', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(2, 'Air Condition', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(3, 'Shower', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(4, 'Tile/marble floor', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(5, 'Balcony', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(6, 'Ironing facilities', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(7, 'Hairdryer', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(8, 'Satellite channels', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(9, 'Tumble dryer', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(10, 'Electric kettle', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(11, 'Socket near the bed', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(12, 'Additional toilet', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(13, 'Toilet', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(14, 'Desk', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(15, 'Clothes rack', '2022-03-04 00:37:45', '2022-03-04 00:37:45');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merchent_id` int(11) NOT NULL,
  `appointment_start` date DEFAULT NULL,
  `appointment_end` date DEFAULT NULL,
  `appointment_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment_time_start` time DEFAULT NULL,
  `appointment_time_end` time DEFAULT NULL,
  `appointment_product_services` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `merchent_id`, `appointment_start`, `appointment_end`, `appointment_title`, `appointment_time_start`, `appointment_time_end`, `appointment_product_services`, `created_at`, `updated_at`) VALUES
(1, 2, '2022-03-06', '2022-04-01', 'Test Appointment', '08:00:00', '22:00:00', NULL, '2022-03-04 06:45:53', '2022-03-04 06:45:53'),
(2, 2, '2022-03-20', '2022-04-01', 'Test Appointment', '10:00:00', '22:00:00', '', '2022-03-04 06:49:15', '2022-03-04 06:49:15'),
(3, 2, '2022-03-04', '2022-03-31', 'Test Appointment 2', '08:35:16', '21:35:27', '', '2022-03-04 06:57:30', '2022-03-04 06:57:30'),
(4, 2, '2022-12-04', '2022-12-16', '45646', '02:00:00', '14:03:00', '', '2022-03-04 07:14:37', '2022-03-04 07:14:37'),
(5, 2, '2022-03-08', '2022-03-25', 'Test Appointment', '08:00:00', '22:00:00', '', '2022-03-08 04:54:25', '2022-03-08 04:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regular_visitor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visitor_points` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `big_spender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spendor_point` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sharing_app_points` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `regular_visitor`, `visitor_points`, `big_spender`, `spendor_point`, `sharing_app_points`, `created_at`, `updated_at`) VALUES
(1, '15 Days', '10 Points', '700', '15 Points', '15 Points', '2022-03-04 00:37:45', '2022-03-04 00:37:45');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) NOT NULL DEFAULT 0,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1 = Active; 0 = Deactive',
  `c_type` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 = businesscategory; 2 = usercategory',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `status`, `c_type`, `created_at`, `updated_at`) VALUES
(1, 'Normal Business', 0, '1', '1', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(2, 'Restaurant', 0, '1', '1', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(3, 'Hotel', 0, '1', '1', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(4, 'Company Owner', 0, '1', '2', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(5, 'Manager', 0, '1', '2', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(6, 'Accountant', 0, '1', '2', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(7, 'N2', 1, '1', '1', '2022-03-04 00:40:06', '2022-03-04 00:40:06'),
(8, 'R2', 2, '1', '1', '2022-03-04 00:40:15', '2022-03-04 00:40:15'),
(9, 'H2', 3, '1', '1', '2022-03-04 00:40:24', '2022-03-04 00:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `check_in`
--

CREATE TABLE `check_in` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merchent_id` int(11) NOT NULL,
  `reward_value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_conditions` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_in_qr_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `crud_events`
--

CREATE TABLE `crud_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_start` date NOT NULL,
  `event_end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `crud_events`
--

INSERT INTO `crud_events` (`id`, `event_name`, `event_start`, `event_end`, `created_at`, `updated_at`) VALUES
(1, '45656', '2022-03-04', '2022-03-05', '2022-03-04 01:38:05', '2022-03-04 01:38:05');

-- --------------------------------------------------------

--
-- Table structure for table `food_category`
--

CREATE TABLE `food_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merchent_id` int(11) NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `food_dises`
--

CREATE TABLE `food_dises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merchent_id` int(11) NOT NULL,
  `disk_category_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dise_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dise_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk_discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk_valid` date DEFAULT NULL,
  `disk_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_with_category` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=with_category , 1 = with_category',
  `is_available` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=available, 2 = not available',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_room`
--

CREATE TABLE `hotel_room` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merchent_id` int(11) NOT NULL,
  `room_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_for` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_room` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_booking_for` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_per_night` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_discription` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_sq_ft` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `single_beds` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotle_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_in` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_out` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_rows` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `health_safety` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selected_amenities` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `invite_people`
--

CREATE TABLE `invite_people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `merchent_id` int(11) NOT NULL,
  `invite_qr_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `merchent_advertings`
--

CREATE TABLE `merchent_advertings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merchent_id` int(11) NOT NULL,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_product` int(11) DEFAULT NULL,
  `product_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2022_01_20_062139_entrust_setup_tables', 1),
(4, '2022_01_20_073825_create_categories_table', 1),
(5, '2022_01_21_070553_add_column_users_table', 1),
(6, '2022_01_21_112749_create_advertings_table', 1),
(7, '2022_01_21_115623_create_awards_table', 1),
(8, '2022_02_03_104244_create_food_category_table', 1),
(9, '2022_02_03_105144_create_food_dises_table', 1),
(10, '2022_02_03_110316_create_hotel_room_table', 1),
(11, '2022_02_03_112713_create_amenities_table', 1),
(12, '2022_02_04_100344_create_tables_table', 1),
(13, '2022_02_04_100853_create_products_table', 1),
(14, '2022_02_19_123645_create_adverting_table', 1),
(15, '2022_02_22_111907_create_merchent_advertings_table', 1),
(16, '2022_02_25_130425_create_services_category_table', 1),
(17, '2022_02_25_130824_create_services_loyalty_table', 1),
(18, '2022_02_28_093728_create_invite_people_table', 1),
(19, '2022_03_01_084318_create_check_in_table', 1),
(20, '2022_03_03_073715_create_subscription_plans_table', 1),
(21, '2022_03_04_055734_create_appointments_table', 1),
(22, '2022_03_03_130223_create_crud_events_table', 2),
(23, '2016_06_01_000001_create_oauth_auth_codes_table', 3),
(24, '2016_06_01_000002_create_oauth_access_tokens_table', 3),
(25, '2016_06_01_000003_create_oauth_refresh_tokens_table', 3),
(26, '2016_06_01_000004_create_oauth_clients_table', 3),
(27, '2016_06_01_000005_create_oauth_personal_access_clients_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('325bb65851c76b5ee4d537a35b24ea39c78364da03bb158dd4e3fddaed0740c724d42328f0526507', 8, 1, 'MyApp', '[]', 0, '2022-03-05 08:31:19', '2022-03-05 08:31:19', '2023-03-05 14:01:19'),
('a82e3a2790f5dc3067bae75897c32f40c1a96fdec7578ef8539af783b0b0725f37b8d8cac33c8390', 6, 1, NULL, '[]', 0, '2022-03-05 08:21:19', '2022-03-05 08:21:19', '2023-03-05 13:51:19'),
('d10b884d7a08a2ce50ff3670b6417f6242a8dd41d0241acdc0be5a64dfdba871dc0e8b306e561c0d', 7, 1, 'MyApp', '[]', 0, '2022-03-05 08:22:53', '2022-03-05 08:22:53', '2023-03-05 13:52:53');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'benefit.me Personal Access Client', 'zL0rOcRLIjC9Q3PaoxQGEoGtldIgIc6RvwhqKu4T', 'http://localhost', 1, 0, 0, '2022-03-05 03:40:17', '2022-03-05 03:40:17'),
(2, NULL, 'benefit.me Password Grant Client', 'Uq7B3mAtlNFpeJ87GkoBPB3pqmb8xs3gitzMrGmh', 'http://localhost', 0, 1, 0, '2022-03-05 03:40:17', '2022-03-05 03:40:17');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-03-05 03:40:17', '2022-03-05 03:40:17');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'Dashboard', 'Dashboard permission', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(2, 'Products & Services', 'Products & Services', 'Products & Services permission', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(3, 'Loyalty Points', 'Loyalty Points', 'Loyalty Points permission', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(4, 'My QR Code', 'My QR Code', 'My QR Code permission', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(5, 'Messages', 'Messages', 'Messages permission', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(6, 'Appointments', 'Appointments', 'Appointments permission', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(7, 'Tables', 'Tables', 'Tables permission', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(8, 'Rooms', 'Rooms', 'Rooms permission', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(9, 'Menu', 'Menu', 'Menu permission', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(10, 'Check In', 'Check In', 'Check In permission', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(11, 'Advertising', 'Advertising', 'Advertising permission', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(12, 'Awards', 'Awards', 'Awards permission', '2022-03-04 00:37:45', '2022-03-04 00:37:45');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-03-05 07:35:11', '2022-03-05 07:35:11'),
(2, 1, '2022-03-05 07:35:12', '2022-03-05 07:35:12'),
(3, 1, '2022-03-05 07:35:13', '2022-03-05 07:35:13'),
(7, 1, '2022-03-05 07:35:14', '2022-03-05 07:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merchent_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_valid_till` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_type` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=product, 2 = services',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `merchent_id`, `product_name`, `pro_category`, `pro_price`, `pro_discount`, `pro_valid_till`, `pro_description`, `pro_image`, `product_type`, `created_at`, `updated_at`) VALUES
(1, 2, 'ff', '1', '', '546', '2022-05-29', '456456', 'Services1650606637.jpg', '2', '2022-04-22 00:20:37', '2022-04-22 00:20:37'),
(2, 2, 'fggdfg', '3', '456', '45', '2022-06-26', '45654645', 'Product1650606666.jpg', '1', '2022-04-22 00:21:06', '2022-04-22 00:21:06');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'This is super admin role for login', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(2, 'merchant', 'Merchant', 'Merchant', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(3, 'users', 'Users', 'Users', '2022-03-04 00:37:45', '2022-03-04 00:37:45');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(2, 2, '2022-03-04 00:43:51', '2022-03-04 00:43:51'),
(3, 3, '2022-03-05 07:33:18', '2022-03-05 07:33:18'),
(4, 2, '2022-03-05 07:40:20', '2022-03-05 07:40:20'),
(5, 3, '2022-03-05 08:20:26', '2022-03-05 08:20:26'),
(6, 3, '2022-03-05 08:21:19', '2022-03-05 08:21:19'),
(7, 3, '2022-03-05 08:22:53', '2022-03-05 08:22:53'),
(8, 3, '2022-03-05 08:31:19', '2022-03-05 08:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `services_category`
--

CREATE TABLE `services_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) DEFAULT 0,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1 = Active; 0 = Deactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `services_category`
--

INSERT INTO `services_category` (`id`, `category_name`, `parent_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Personal Care Appliances', 0, '1', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(2, 'Home appliances', 0, '1', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(3, 'Men\'s Shoes & T-Shirt', 0, '1', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(4, 'Fresh vegetables & fruits', 0, '1', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(5, 'Developer', 4, '1', '2022-03-08 05:43:35', '2022-03-08 05:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `services_loyalty`
--

CREATE TABLE `services_loyalty` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `services_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_plans`
--

CREATE TABLE `subscription_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan_permission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `subscription_plans`
--

INSERT INTO `subscription_plans` (`id`, `plan_name`, `plan_price`, `plan_permission`, `created_at`, `updated_at`) VALUES
(1, 'Free', '0', '', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(2, 'Basic', '30', '', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(3, 'Standard', '35', '', '2022-03-04 00:37:45', '2022-03-04 00:37:45'),
(4, 'Premium', '45', '', '2022-03-04 00:37:45', '2022-03-04 00:37:45');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merchent_id` int(11) NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Table name',
  `table_for` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Average Booking Time (in hours)',
  `number_tables` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Number of Tables',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1 = Admin, 2 = Merchant 3 = Users ',
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_restaurant_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `general_layality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_birthday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('1','2','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Male, 2 = Female 0=Special ',
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscription_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `about_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opening_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `closing_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comp_short_descriptin` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_confirmation_chk` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 =Yes ,0 No',
  `is_active` enum('1','2','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active, 2 = decline 0=Inactive ',
  `is_audience` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 =Yes ,0 No',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_role`, `first_name`, `last_name`, `name`, `email`, `email_verified_at`, `password`, `company_name`, `profile_image`, `company_logo`, `company_banner`, `company_type`, `sub_restaurant_type`, `address`, `city`, `zip_code`, `uid_number`, `general_layality`, `user_type`, `date_birthday`, `gender`, `mobile`, `otp`, `subscription_id`, `last_login`, `about_description`, `opening_time`, `closing_time`, `website_link`, `facebook_link`, `instagram_link`, `twitter_link`, `comp_short_descriptin`, `is_confirmation_chk`, `is_active`, `is_audience`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1', 'Super', 'Admin', 'administrator', 'admin@yopmail.com', '2022-03-04 00:37:45', '$2y$10$HcHKGtWWk99Xf0RGkzmTPuk5CHtNFFMdXxxkjUbEmuSufJpt3tNu.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, '2022-05-17 05:48:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', NULL, '2022-03-04 00:37:45', '2022-05-17 00:18:17'),
(2, '2', 'Manish', 'Pathak', 'ARK NEW TECH', 'mani@yopmail.com', NULL, '$2y$10$4e8Camc2y3mTCRfDZXOyH.8BJLLBh0P0xsB5aQT6YPqf3avME9y2W', 'ARK NEW TECH', 'boy.png', NULL, NULL, '1', '7', 'Noida', 'Noida', '345345', '456346456', 'yes', '4', '2006-02-04', '1', '8054251404', NULL, '1', '2022-05-17 05:49:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', NULL, '2022-03-04 00:43:51', '2022-05-17 00:19:15'),
(3, '3', 'Manish', 'Pathak', 'mmm', 'mmm@yopmail.com', NULL, '$2y$10$i0gp6fzmyYV./vjQ6YLKCuJfaa2BRf8RZK1Zw2UsgFE8UwIDJM9gu', NULL, 'boy.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '9708364910', NULL, NULL, '2022-03-05 13:07:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', NULL, '2022-03-05 07:33:18', '2022-03-05 07:37:36'),
(4, '2', 'Manish22', 'Pathak22', 'ARK NEW TECH2', 'mani56465@yopmail.com', NULL, '$2y$10$3S/tYnwNd1RBkesQ5wf0m.lTmBTHm.Z3yPfNcQeVQ2UHQEUCONBrW', 'ARK NEW TECH2', 'boy.png', NULL, NULL, '3', '9', 'Noida', 'Noida', '345345', '8789798', 'yes', '4', '2011-06-08', '1', '8054251405', NULL, '1', '2022-03-05 13:10:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', NULL, '2022-03-05 07:40:20', '2022-03-05 07:40:20'),
(5, '3', 'Manish', 'Pathak', 'mani3345', 'mani3345@yopmail.com', NULL, '$2y$10$o5vVTPUbsuC32r2e5KkpUuqgWvVyMez/9McFcq7XR2pmfIeTfwQjG', NULL, 'boy.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '8054251404', NULL, NULL, '2022-03-05 13:50:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', NULL, '2022-03-05 08:20:26', '2022-03-05 08:20:26'),
(6, '3', 'Manish', 'Pathak', 'mani3345456', 'mani3345546@yopmail.com', NULL, '$2y$10$jqPUyxtWNdSTs/HeIzMbFe/PVB9NN53m16WLilbQk1OCOQRmo8xlC', NULL, 'boy.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '8054251404', NULL, NULL, '2022-03-05 13:51:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', NULL, '2022-03-05 08:21:19', '2022-03-05 08:21:19'),
(7, '3', 'Manish', 'Pathak', 'mani334545656', 'mani334554656@yopmail.com', NULL, '$2y$10$SQPsE5ujJbKH9abehCRi/eLI6XYV61dJyb8xurEaT/DG6LuWKMyDi', NULL, 'boy.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '8054251404', NULL, NULL, '2022-03-05 13:52:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', NULL, '2022-03-05 08:22:53', '2022-03-05 08:22:53'),
(8, '3', 'Manish', 'Pathak', 'mani334545656435', 'mani33455465645@yopmail.com', NULL, '$2y$10$yq3W8u0p.yR64yKOFXlDCuMlHh9T20dDGKD251KG1uERWTS7OXRH2', NULL, 'boy.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '8054251404', NULL, NULL, '2022-03-08 10:31:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', NULL, '2022-03-05 08:31:19', '2022-03-08 05:01:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adverting`
--
ALTER TABLE `adverting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertings`
--
ALTER TABLE `advertings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `check_in`
--
ALTER TABLE `check_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_events`
--
ALTER TABLE `crud_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_category`
--
ALTER TABLE `food_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_dises`
--
ALTER TABLE `food_dises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_room`
--
ALTER TABLE `hotel_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invite_people`
--
ALTER TABLE `invite_people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchent_advertings`
--
ALTER TABLE `merchent_advertings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `services_category`
--
ALTER TABLE `services_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_loyalty`
--
ALTER TABLE `services_loyalty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
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
-- AUTO_INCREMENT for table `adverting`
--
ALTER TABLE `adverting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `advertings`
--
ALTER TABLE `advertings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `check_in`
--
ALTER TABLE `check_in`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crud_events`
--
ALTER TABLE `crud_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food_category`
--
ALTER TABLE `food_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_dises`
--
ALTER TABLE `food_dises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_room`
--
ALTER TABLE `hotel_room`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invite_people`
--
ALTER TABLE `invite_people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchent_advertings`
--
ALTER TABLE `merchent_advertings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services_category`
--
ALTER TABLE `services_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services_loyalty`
--
ALTER TABLE `services_loyalty`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
