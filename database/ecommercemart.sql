-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2023 at 05:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommercemart`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `subtitle`, `image`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'HTML,JavaScript and Framework', 'sdfagh aseghl ukdf sfg ehrjlk', 'admin/assets/images/upload-images/banner/1679567103119Square COVER_e2534ac9d0e803f677d91609d9fb912eeab1f5e3 (1).jpg', 'http://azizulhaque.engineer/', 1, '2023-03-23 04:25:03', '2023-03-23 04:29:24'),
(2, 'Best Clinic Template', 'sdfagh aseghl ukdf sfg ehrjlk', 'admin/assets/images/upload-images/banner/1679567164716inbound9095185329515956921_275712e9929b7446bb5a9a51afbe7ea9d6b2d714 (1).jpg', 'www.facebook.com', 1, '2023-03-23 04:26:04', '2023-03-23 04:26:04');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Shopping Ethically', '<p>We Respect The Hardship Of Millions Of Cmsme Entrepreneurs And Their Workforce Which Reflects On The Products Of Our Market.</p>', 'admin/assets/images/upload-images/blog/167989355561Shoping-Ethically-Oikko-bd_bf9df002cdc5dcd73d93301b3d3ff6938455bd7b (2).jpg', 2, '2023-03-26 23:05:55', '2023-03-26 23:10:26'),
(2, 'CMSME Sales Only', '<p>Our Determination On Selling Each And Every Product Impacts The Development Of CMSME Sector, Empowerment Of CMSME Entrepreneurs And Significant Growth Of Country&rsquo;s Economy.</p>', 'admin/assets/images/upload-images/blog/1679893859999CMSME-Sales-Only-oikko-bd_0af8e4e36afe74495020dac7c2ef2d1374e29f96 (2).jpg', 1, '2023-03-26 23:10:59', '2023-03-26 23:10:59'),
(3, 'Oikko Community', '<p>Oikko, A Family With Strongest Bondage Among Millions Of Cmsme Entrepreneurs Countrywide.</p>', 'admin/assets/images/upload-images/blog/1679893884963Oikko Community-Oikko-bd_da26181b4f19316e796b7bfbb884f5dc09faa5d4 (2).jpg', 1, '2023-03-26 23:11:24', '2023-03-26 23:11:24'),
(4, 'Unparalleled Customer Service', '<p>Oikko, A Sincere Entity Of Enriched CMSME Entrepreneurs By Delighted Customer.</p>', 'admin/assets/images/upload-images/blog/1679893908816Unparalleled-Customer-Service-oikko-bd_4918f00789d93bda0503bc53f7844cf4e0694a02 (2).jpg', 1, '2023-03-26 23:11:48', '2023-03-26 23:11:48'),
(6, 'mdll', '<p>test2</p>', 'admin/assets/images/upload-images/blog/1694930134745png-mail.png', 1, '2023-09-16 23:55:34', '2023-09-17 01:02:48');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `subtotal` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `user_id`, `quantity`, `price`, `subtotal`, `created_at`, `updated_at`) VALUES
(16, '1', '1', '1', '585', '585', '2023-09-11 01:21:18', '2023-09-17 01:59:31'),
(17, '1', '3', '3', '585', '1755', '2023-09-11 04:50:01', '2023-09-11 22:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'MEN’S PLAZA', 'admin/assets/images/upload-images/category/1679472338760Chemical free dresses_8edb5290ae0fef056ffc5b065d19c49fbed1b4fe (1).jpg', 1, '2023-03-22 02:05:38', '2023-03-22 02:05:38'),
(2, 'WOMEN’S PLAZA', 'admin/assets/images/upload-images/category/1679475329377Shoping-Ethically-Oikko-bd_bf9df002cdc5dcd73d93301b3d3ff6938455bd7b (1).jpg', 1, '2023-03-22 02:55:29', '2023-04-03 01:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `phone`, `website`, `street`, `city`, `postal_code`, `country`, `logo`, `favicon`, `date`, `created_at`, `updated_at`) VALUES
(1, 'AAA', 'azizulhaque4198@gmail.com', '01635031519', 'http://www.azizulhaque.engineer/', 'Nurjahan RD', 'Dhaka', '1207', 'Bangladesh', 'admin/assets/images/upload-images/company/1678477245835logo.png', 'admin/assets/images/upload-images/company/1678477245158logo2.png', '2025-04-01 18:00:00', '2023-03-10 13:40:45', '2023-03-10 13:40:45');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `capital` varchar(255) DEFAULT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `country_code` char(3) NOT NULL DEFAULT '',
  `currency` varchar(255) DEFAULT NULL,
  `currency_code` varchar(255) DEFAULT NULL,
  `currency_sub_unit` varchar(255) DEFAULT NULL,
  `currency_symbol` varchar(3) DEFAULT NULL,
  `currency_decimals` int(11) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `iso_3166_2` char(2) NOT NULL DEFAULT '',
  `iso_3166_3` char(3) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `region_code` char(3) NOT NULL DEFAULT '',
  `sub_region_code` char(3) NOT NULL DEFAULT '',
  `eea` tinyint(1) NOT NULL DEFAULT 0,
  `calling_code` varchar(3) DEFAULT NULL,
  `flag` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `city`, `state`, `zip`, `country`, `balance`, `created_at`, `updated_at`) VALUES
(1, 'Azizul Haque', 'azizulhaque@gmail.com', '01635031519', 'Nurjahan Rd, Muhammadpur', 'Dhaka', 'Nurjahan rd', '1207', 'Bangladesh', '1200', '2023-03-15 04:48:22', '2023-03-15 04:48:46');

-- --------------------------------------------------------

--
-- Table structure for table `enterprises`
--

CREATE TABLE `enterprises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `bios` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enterprises`
--

INSERT INTO `enterprises` (`id`, `name`, `email`, `phone`, `address`, `image`, `bios`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tanjila Akter', 'tanjilaakter@gmail.com', '01236985472', '<p>ashgfuig wjkafrtyi iaswfriwe&nbsp; &nbsp;ftwae</p>', 'admin/assets/images/upload-images/enterprise/1679478309796Tanjila-Akter_(1).png', '<p>তানজিলা আক্তার স্নাতকোত্তর সম্পন্ন করার পর একটি স্বনামধন্য কোম্পানিতে যোগদানের মাধ্যমে কর্ম জীবন শুরু করেন। কিন্তু নিজে কিছু করার প্রত্যয়ে চাকরি থেকে ইস্তফা দেন। ২০২১ সালে সামান্যকিছু মূলধন দিয়ে শুরু করেন পোশাকশিল্প নিয়ে কাজ। নিজে ঘরে বসে শুরু করেন পণ্য তৈরির কাজ। তৈরিকৃত পণ্য বাজারজাত করে হয়েছেন সফল।</p>', 1, '2023-03-22 03:45:09', '2023-03-22 03:45:09'),
(2, 'Nishu Islam', 'nishuislam@gmail.com', '01235896478', '<p>sdfaw67&nbsp; jhqwert iuqwery wquyryt67 qwrjqwygrf</p>', 'admin/assets/images/upload-images/enterprise/1679478489582Nishu-Islam (4).png', '<p>নিশু ইসলাম স্নাতকে অধ্যয়নরত অবস্থায় চাকরি করার পাশাপাশি নিজে কিছু করার কথা ভাবতেন সবসময়। কারণ তিনি কাজ করতেন উদ্যোক্তাদের নিয়েই। তাই তাঁর মনে উদ্যোক্তা হওয়ার প্রবল ইচ্ছা জাগ্রত হতো। কিন্তু সময় সুযোগের অভাবে তা আর হয়ে উঠতো না। অবশেষে সুযোগটি আসে ২০২২ সালে। সন্তান সম্ভবা হওয়ায় মাতৃত্বকালীন ছুটিতে তিনি তাঁর বড় বোনের কাছ থেকে পোশাক তৈরির প্রশিক্ষণ গ্রহণ করেন। কাজ শেখার পর মাত্র ৫ হাজার টাকা মূলধন নিয়ে শুরু করেন পণ্য তৈরির কাজ। তৈরিকৃত পণ্য বাজারজাত করে হয়েছেন সফল।</p>', 1, '2023-03-22 03:48:09', '2023-03-22 03:58:17');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2023_03_10_155111_create_sessions_table', 1),
(10, '2023_03_10_181945_create_companies_table', 2),
(15, '2023_03_12_082939_create_roles_table', 3),
(16, '2023_03_12_083156_create_permissions_table', 3),
(17, '2023_03_12_183918_create_services_table', 4),
(20, '2023_03_14_182554_create_customers_table', 5),
(21, '2023_03_19_062846_create_sections_table', 6),
(22, '2023_03_19_112029_create_categories_table', 7),
(23, '2023_03_20_053807_create_sub_categories_table', 7),
(24, '2023_03_20_065046_create_sub_sub_categories_table', 7),
(26, '2023_03_22_090830_create_enterprises_table', 8),
(28, '2023_03_22_100433_create_products_table', 9),
(30, '2023_03_23_070048_create_banners_table', 10),
(31, '2023_03_27_045201_create_blogs_table', 11),
(32, '2023_03_27_065744_create_carts_table', 12),
(33, '2023_03_27_071201_create_orders_table', 12),
(34, '2023_03_28_045909_create_socials_table', 12),
(35, '2023_03_28_071653_create_show_products_table', 12),
(36, '2017_11_29_223842_create_countries_table', 13),
(37, '2023_03_24_161256_create_role_types_table', 13),
(38, '2023_03_25_041943_create_roles_table', 13),
(39, '2023_03_25_164620_create_user_infos_table', 13),
(40, '2023_03_28_205235_create_permissions_table', 13),
(41, '2023_03_29_061821_create_wishes_table', 13),
(42, '2023_03_31_182900_create_oreder_details_table', 13),
(43, '2023_04_05_132909_create_reviews_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `subtotal` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oreder_details`
--

CREATE TABLE `oreder_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `cart_id` varchar(255) NOT NULL,
  `total` double(8,2) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oreder_details`
--

INSERT INTO `oreder_details` (`id`, `user_id`, `cart_id`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 1180.00, 'pending', '2023-04-03 01:04:13', '2023-04-03 01:04:13'),
(2, 1, '1,2', 1180.00, 'pending', '2023-09-10 23:23:58', '2023-09-10 23:23:58'),
(3, 1, '15,16', 1495.00, 'pending', '2023-09-11 05:03:04', '2023-09-11 05:03:04'),
(4, 1, '15,16', 1045.00, 'pending', '2023-09-14 00:24:00', '2023-09-14 00:24:00'),
(5, 1, '16', 595.00, 'pending', '2023-09-16 21:05:50', '2023-09-16 21:05:50'),
(6, 1, '16', 595.00, 'pending', '2023-09-16 21:26:12', '2023-09-16 21:26:12'),
(7, 1, '16', 595.00, 'pending', '2023-09-16 21:43:10', '2023-09-16 21:43:10'),
(8, 1, '16', 595.00, 'pending', '2023-09-17 22:56:35', '2023-09-17 22:56:35'),
(9, 1, '16', 595.00, 'pending', '2023-09-17 23:05:48', '2023-09-17 23:05:48');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `section`, `route`, `controller`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'dashboard.index', 'DashboardController', 'uil-home-alt', 1, '2023-04-03 00:22:24', '2023-04-03 00:25:28'),
(2, 'Company Info', 'company-info.index', 'CompanyController', 'uil-building', 1, '2023-04-03 00:29:30', '2023-04-03 00:29:30'),
(3, 'Permission', 'permission.index', 'PermissionController', 'uil-keyhole-circle', 1, '2023-04-03 00:30:28', '2023-04-03 00:30:28'),
(4, 'Role Type', 'roletype.index', 'RoleTypeController', 'uil-shield-question', 1, '2023-04-03 00:31:15', '2023-04-03 00:31:15'),
(5, 'Role', 'role.index', 'RoleController', 'uil-shield-slash', 1, '2023-04-03 00:32:05', '2023-04-03 00:32:05'),
(6, 'Section', 'section.index', 'SectionController', 'uil-web-section-alt', 1, '2023-04-03 00:32:55', '2023-04-03 00:32:55'),
(7, 'Social', 'social.index', 'SocialController', 'uil-rss', 1, '2023-04-03 00:34:26', '2023-04-03 00:34:26'),
(8, 'User Information', 'userInfo.index', 'UserInfoController', 'uil-users-alt', 1, '2023-04-03 00:36:27', '2023-04-03 00:36:27'),
(9, 'Category', 'category.index', 'CategoryController', 'uil-th-large', 1, '2023-04-03 00:38:12', '2023-04-03 00:38:12'),
(10, 'Sub Category', 'sub-category.index', 'SubCategoryController', 'uil-table', 1, '2023-04-03 00:39:38', '2023-04-03 00:39:38'),
(11, 'Sub Sub Category', 'sub-sub-category.index', 'SubSubCategoryController', 'uil-layers-alt', 1, '2023-04-03 00:40:49', '2023-04-03 00:40:49'),
(12, 'Entrepreneurs', 'entrepreneurs.index', 'EnterpriseController', 'uil-user', 1, '2023-04-03 00:42:45', '2023-04-03 00:42:45'),
(13, 'Product', 'product.index', 'ProductController', 'uil-store', 1, '2023-04-03 00:44:04', '2023-04-03 00:44:04'),
(14, 'Banner', 'banner.index', 'BannerController', 'uil-sliders-v-alt', 1, '2023-04-03 00:45:18', '2023-04-03 00:45:18'),
(15, 'Blog', 'blog.index', 'BlogController', 'uil-notebooks', 1, '2023-04-03 00:46:41', '2023-04-03 00:46:41');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `sub_category_id` bigint(20) NOT NULL,
  `sub_sub_category_id` bigint(20) DEFAULT NULL,
  `enterprise_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `sku` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `discount` double DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `sub_sub_category_id`, `enterprise_id`, `name`, `slug`, `price`, `quantity`, `description`, `sku`, `code`, `discount`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 2, 'Men’s Panjabi', 'Men’s-Panjabi', 650, 0, '<p><strong>Men&rsquo;s Panjabi&nbsp;</strong></p>\r\n\r\n<p>Color: Same as Shown in the picture</p>\r\n\r\n<p>Fabrics:&nbsp;</p>\r\n\r\n<p>&bull; Pure Cotton&nbsp;</p>\r\n\r\n<p>Available Size: XS, S, M, L, XL, XXL, XXXL&nbsp;</p>\r\n\r\n<p>Size Guide:&nbsp;</p>\r\n\r\n<p>&nbsp;<img alt=\"\" src=\"https://s3.amazonaws.com/ep-files/app/public/ckeditor_assets/pictures/11036/content_whatsapp_image_2023-02-26_at_8_59_43_pm.jpeg\" /></p>\r\n\r\n<p>Measurement Unit:&nbsp;</p>\r\n\r\n<p>&bull; Inch&nbsp;</p>\r\n\r\n<p>Cut/ Fit:&nbsp;</p>\r\n\r\n<p>&bull; Regular Fit</p>\r\n\r\n<p>Place of Origin: Bangladesh</p>\r\n\r\n<p>Care Instructions:&nbsp;</p>\r\n\r\n<p>&bull; Dry clean recommended</p>\r\n\r\n<p>&bull; Wash Separately with mild detergent in cold water&nbsp;</p>\r\n\r\n<p>&bull; Line dry.&nbsp;</p>\r\n\r\n<p>&bull; Do not tumble dry&nbsp;</p>\r\n\r\n<p>&bull; Iron Medium Heat</p>\r\n\r\n<p>&bull; Do Not Iron Over the Label.&nbsp;&nbsp;</p>\r\n\r\n<p>Features:&nbsp;</p>\r\n\r\n<p>&bull; Washable</p>\r\n\r\n<p>&bull; Very Soft</p>\r\n\r\n<p>&bull; Comfortable.&nbsp;</p>\r\n\r\n<p>Disclaimer: Product Color May Slightly Vary Due to the Photographic Lighting Sources or Your Monitor Settings.</p>', 'NISS-25', 'NISS-25', 10, 'admin/assets/images/upload-images/product/1679484370381IMG_8327 (1).jpg', 1, '2023-03-22 05:26:10', '2023-03-23 02:35:10'),
(2, 2, 2, 2, 1, 'Kaftan For Women-edit', 'Kaftan-For-Women-edit', 500, 20, '<p>Color: Same as Shown in the Picture<br />\r\nFabric:&nbsp;<br />\r\n&bull; Alex Georgette&nbsp;&nbsp;<br />\r\nValue Addition:&nbsp;<br />\r\n&bull; Print&nbsp;<br />\r\nAvailable Size:&nbsp;<br />\r\n&bull; 36, 38, 40, 42, 44, 46&nbsp;&nbsp;<br />\r\nMeasurement Unit:&nbsp;<br />\r\n&bull; Inch&nbsp;<br />\r\nPlace of Origin:&nbsp;<br />\r\n&bull; Bangladesh&nbsp;<br />\r\nCare Instructions:&nbsp;<br />\r\n&bull; Wash Separately with mild detergent in cold water &amp; line dry<br />\r\n&bull; Iron Medium Heat, Do Not Iron Over the Label.&nbsp;<br />\r\nFeatures:&nbsp;<br />\r\n&bull; Washable<br />\r\n&bull; High-Quality Material<br />\r\n&bull; Breathable<br />\r\n&bull; Lightweight<br />\r\n&bull; Color Guaranty&nbsp;<br />\r\nDisclaimer: Product Color May Slightly Vary Due to the Photographic Lighting Sources or Your Device Display Settings</p>', 'NISS-26', 'THAN-25', 10, 'admin/assets/images/upload-images/product/1680505864196IMG_9132.jpg', 1, '2023-04-03 01:11:04', '2023-09-17 00:31:43'),
(3, 2, 2, 2, 1, 'Test', 'Test', 100, 2, '<p>fsdfsfsdfsdfdfsdf</p>', '00', '3232', 0, 'admin/assets/images/upload-images/product/169432144933email.png', 1, '2023-09-09 22:50:49', '2023-09-09 22:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `roletype_id` bigint(20) NOT NULL,
  `permission_id` bigint(20) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `user_id`, `roletype_id`, `permission_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 2, 1, '2023-04-03 00:47:39', '2023-04-03 00:47:39'),
(3, 1, 1, 3, 1, '2023-04-03 00:48:01', '2023-04-03 00:48:01'),
(4, 1, 1, 4, 1, '2023-04-03 00:48:13', '2023-04-03 00:48:13'),
(5, 1, 1, 5, 1, '2023-04-03 00:48:24', '2023-04-03 00:48:24'),
(6, 1, 1, 6, 1, '2023-04-03 00:48:35', '2023-04-03 00:48:35'),
(7, 1, 1, 7, 1, '2023-04-03 00:48:49', '2023-04-03 00:48:49'),
(8, 1, 1, 8, 1, '2023-04-03 00:49:09', '2023-04-03 00:49:09'),
(9, 1, 1, 9, 1, '2023-04-03 00:49:23', '2023-04-03 00:49:23'),
(10, 1, 1, 10, 1, '2023-04-03 00:49:34', '2023-04-03 00:49:34'),
(12, 1, 1, 1, 1, '2023-04-03 00:50:12', '2023-04-03 00:50:12'),
(13, 1, 1, 11, 1, '2023-04-03 00:50:26', '2023-04-03 00:50:26'),
(14, 1, 1, 12, 1, '2023-04-03 00:50:41', '2023-04-03 00:50:41'),
(15, 1, 1, 13, 1, '2023-04-03 00:50:57', '2023-04-03 00:50:57'),
(16, 1, 1, 14, 1, '2023-04-03 00:51:15', '2023-04-03 00:51:15'),
(17, 1, 1, 15, 1, '2023-04-03 00:51:32', '2023-04-03 00:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `role_types`
--

CREATE TABLE `role_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_types`
--

INSERT INTO `role_types` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 1, '2023-04-03 00:26:20', '2023-04-03 00:26:20'),
(2, 'fwelkmfwekjfn', 1, '2023-04-08 10:59:54', '2023-04-08 10:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `price`, `image`, `location`, `date`, `created_at`, `updated_at`) VALUES
(1, 'afsa', 'afgdhnhgkhj', '324', 'admin/assets/images/upload-images/services/16786508701532.jpg', 'Kolkata', '2023-03-28 18:00:00', '2023-03-12 13:54:30', '2023-03-13 03:23:40');

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

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('amrs0Nx7rx0fkd06q2M5FNT79JbM4MPImPk2UoTE', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUG03UmxGQkMxWHpodm5uQlloa2N1UWNRYlJXYlhmQXJIVncwSmEySSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9iYW5uZXIvMi9lZGl0Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRBUkYzTmpBS1BmenUyY1AvN242Qzgud29OSlNqaTF5WUgvQllsVHhlelVmRkFTd09nUkVJeSI7fQ==', 1695018674),
('GTo5UTf2ZY8ZTr1ARS5FyEZOa8lpolFsDmhpYdIe', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiekNZS3JuSWRXY01jdHVQQXlLOTJqRVI4Nk9nQlQxWVM5V0hTOWxFUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEFSRjNOakFLUGZ6dTJjUC83bjZDOC53b05KU2ppMXlZSC9CWWxUeGV6VWZGQVN3T2dSRUl5Ijt9', 1695101779),
('IqGpbxOFBXwWC1kTMZyQtLHgcHxAh4qvtff0b9tM', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiVmJSZTB6WXc3WlM4QVFpeGdhWEVtOG80d21YSlRvT3JwM2E4a0VlbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEFSRjNOakFLUGZ6dTJjUC83bjZDOC53b05KU2ppMXlZSC9CWWxUeGV6VWZGQVN3T2dSRUl5Ijt9', 1694937855),
('jZNuZWEYtvVSH0LVHpASLzVWDf7XqYoTG6d9eIag', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVFFYUE96cVc5Nzl5cEljazVTNXkzS2U1NkNxSkRBOTJjQVNYdVhIYyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEFSRjNOakFLUGZ6dTJjUC83bjZDOC53b05KU2ppMXlZSC9CWWxUeGV6VWZGQVN3T2dSRUl5Ijt9', 1695526403),
('SlUAiMC71jRrpW52OjUJsZjk4KfdLyLqtQpPWW1x', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR045NTVKRnNLTzc0WTdzd0xieTV5UHhPN21TWmt5QTBBRm5JV0xuaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1695201795),
('V3Qo4jDYxlRQXSKqTS6ihEY6EfvBh6OMzm6Dl5d4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.31', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVlA0OXdqWW9uNDVNVWRJaGNIZnFrY2oySW1ydzhXMlo3ZkVROVg2SCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1695006109);

-- --------------------------------------------------------

--
-- Table structure for table `show_products`
--

CREATE TABLE `show_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `sub_category_id` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'PANJABI', 'PANJABI', 'admin/assets/images/upload-images/sub-category/1679472392251Chemical free dresses_8edb5290ae0fef056ffc5b065d19c49fbed1b4fe (1).jpg', 1, '2023-03-22 02:06:32', '2023-03-22 02:06:32'),
(2, 2, 'ACCESSORIES', 'ACCESSORIES', 'admin/assets/images/upload-images/sub-category/1679475371923Shoping-Ethically-Oikko-bd_bf9df002cdc5dcd73d93301b3d3ff6938455bd7b (1).jpg', 1, '2023-03-22 02:56:11', '2023-03-22 02:56:11'),
(3, 1, 'Test sub', 'Test-sub', 'admin/assets/images/upload-images/sub-category/1694421095247-121610564853gg73ucwrdk.png', 1, '2023-09-11 02:31:35', '2023-09-11 02:31:35');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `sub_category_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`id`, `category_id`, `sub_category_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Cotton', 1, '2023-03-22 02:17:46', '2023-03-22 03:05:44'),
(2, 2, 2, 'Shoulder Bags', 1, '2023-03-22 23:56:46', '2023-03-22 23:56:46');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'Azizul\'s Team', 1, '2023-03-10 10:04:19', '2023-03-10 10:04:19'),
(2, 2, 'shoop\'s Team', 1, '2023-04-03 01:23:38', '2023-04-03 01:23:38'),
(3, 3, 'Md\'s Team', 1, '2023-09-11 04:49:31', '2023-09-11 04:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) DEFAULT NULL,
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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Azizul Haque', 'azizulhaque@gmail.com', NULL, '$2y$10$ARF3NjAKPfzu2cP/7n6C8.woNJSji1yYH/BYlTxezUfFASwOgREIy', NULL, NULL, NULL, 'TpjrQawftUuMHnq1YA7wmoNlxThBpio5uCo0WDvXxdFl9V0bvWilNNPWq4Sz', 1, NULL, '2023-03-10 10:04:19', '2023-03-10 10:04:22'),
(2, 'shoop', 'shoop@gmail.com', NULL, '$2y$10$oljRzSEy6f8O5f.OlTSKoeLJypYPLKLPi.vJls7J.Wvj3XT1/nyj.', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-03 01:23:38', '2023-04-03 01:23:38'),
(3, 'Md Mostofa Shahid', 'admin@gmail.com', NULL, '$2y$10$SAsqWYB91cATeZM3e4ooNOZ.YhLor0VzIxK/1C9V0LY.Spov.XQqq', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-11 04:49:31', '2023-09-11 04:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `user_infos`
--

CREATE TABLE `user_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `card_image` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishes`
--

CREATE TABLE `wishes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishes`
--

INSERT INTO `wishes` (`id`, `created_at`, `updated_at`, `product_id`, `user_id`) VALUES
(7, '2023-09-12 22:10:55', '2023-09-12 22:10:55', '1', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
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
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `enterprises`
--
ALTER TABLE `enterprises`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enterprises_email_unique` (`email`),
  ADD UNIQUE KEY `enterprises_phone_unique` (`phone`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oreder_details`
--
ALTER TABLE `oreder_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_types`
--
ALTER TABLE `role_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `show_products`
--
ALTER TABLE `show_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_infos_nid_unique` (`nid`);

--
-- Indexes for table `wishes`
--
ALTER TABLE `wishes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enterprises`
--
ALTER TABLE `enterprises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oreder_details`
--
ALTER TABLE `oreder_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `role_types`
--
ALTER TABLE `role_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `show_products`
--
ALTER TABLE `show_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_infos`
--
ALTER TABLE `user_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishes`
--
ALTER TABLE `wishes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
