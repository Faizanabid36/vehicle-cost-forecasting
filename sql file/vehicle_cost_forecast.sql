-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 03:32 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle_cost_forecast`
--

-- --------------------------------------------------------

--
-- Table structure for table `dispatches`
--

CREATE TABLE `dispatches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fac_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ware_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty_disp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty_stock` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dispatches`
--

INSERT INTO `dispatches` (`id`, `fac_name`, `ware_name`, `qty_disp`, `qty_stock`, `created_at`, `updated_at`) VALUES
(1, 'Coronet Food Limited', 'Multan Warehouse', '10', NULL, '2020-07-02 07:58:15', '2020-07-02 07:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `factories`
--

CREATE TABLE `factories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_employees` int(11) NOT NULL,
  `num_offices` int(11) NOT NULL,
  `head_office` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factories`
--

INSERT INTO `factories` (`id`, `name`, `location`, `num_employees`, `num_offices`, `head_office`, `type`, `f_img`, `created_at`, `updated_at`) VALUES
(4, 'English Biscuits Manufacturers', 'Address: P.O Box 5536, Karachi, Pakistan Plot 1-4, Sector 23, Korangi Industrial Area, Karachi, 74900, Pakistan', 350, 6, 'Karachi, Pakistan', 'Private', '649244026.jfif', '2019-06-25 11:40:23', '2019-06-25 11:40:23'),
(5, 'Coronet Food Limited', 'PLOT NO. 55, Road No. I Phase III, Industrial Estate Hattar, Haripur, KPK', 280, 3, 'Hattar, KPK', 'Private', '324679668.jpg', '2019-06-25 11:45:08', '2019-06-25 11:46:24');

-- --------------------------------------------------------

--
-- Table structure for table `factory_warehouses`
--

CREATE TABLE `factory_warehouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fac_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `war_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distance` bigint(20) NOT NULL,
  `cpkm` bigint(20) NOT NULL,
  `distribution` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factory_warehouses`
--

INSERT INTO `factory_warehouses` (`id`, `fac_name`, `war_name`, `distance`, `cpkm`, `distribution`, `created_at`, `updated_at`) VALUES
(1, 'Coronet Foods Limited', 'Karachi Warehouse', 1442, 70, 8910, '2019-06-23 00:05:30', '2019-06-23 00:05:30'),
(2, 'English Biscuits Manufacturers', 'Karachi Warehouse', 1491, 70, 8910, '2019-06-23 01:14:25', '2019-06-23 01:14:25'),
(3, 'English Biscuits Manufacturers', 'Multan Warehouse', 909, 58, 6859, '2019-06-23 06:19:34', '2019-06-23 06:19:34'),
(4, 'English Biscuits Manufacturers', 'Multan Warehouse', 909, 58, 6859, '2019-06-23 07:01:11', '2019-06-23 07:01:11'),
(5, 'Coronet Foods Limited', 'Hattar Warehouse', 6433, 56, 54335, '2019-06-23 19:07:31', '2019-06-23 19:07:31'),
(6, 'English Biscuits Manufacturers', 'Karachi Warehouse', 1250, 85, 8000, '2019-06-23 20:02:33', '2019-06-23 20:02:33'),
(7, 'English Biscuits Manufacturers', 'Karachi Warehouse', 1250, 85, 8000, '2019-06-23 20:08:31', '2019-06-23 20:08:31'),
(8, 'English Biscuits Manufacturers', 'Karachi Warehouse', 1250, 85, 8000, '2019-06-23 20:08:42', '2019-06-23 20:08:42'),
(9, 'Coronet Foods Limited', 'Hattar Warehouse', 123218, 70, 123213, '2019-06-24 00:16:59', '2019-06-24 00:16:59'),
(10, 'Coronet Foods Limited', 'Hattar Warehouse', 123218, 70, 123213, '2019-06-24 00:19:13', '2019-06-24 00:19:13'),
(11, 'Coronet Foods Limited', 'Hattar Warehouse', 123218, 70, 123213, '2019-06-24 00:19:34', '2019-06-24 00:19:34'),
(12, 'Coronet Foods Limited', 'Hattar Warehouse', 123218, 70, 123213, '2019-06-24 00:19:49', '2019-06-24 00:19:49'),
(13, 'English Biscuits Manufacturers', 'Hyderabad Warehouse', 51, 55, 60, '2019-06-24 09:28:19', '2019-06-24 09:28:19'),
(14, 'English Biscuits Manufacturers', 'Faisalabad Warehosue', 17613213, 1233, 1221312, '2019-06-25 01:20:16', '2019-06-25 01:20:16'),
(15, 'Coronet Foods Limited', 'Karachi Warehouse', 1491, 70, 8910, '2019-06-25 02:45:47', '2019-06-25 02:45:47'),
(16, 'Coronet Foods Limited', 'Karachi Warehouse', 1491, 70, 8910, '2019-06-25 02:46:07', '2019-06-25 02:46:07'),
(17, 'English Biscuits Manufacturers', 'Hattar Warehouse', 1550, 60, 9910, '2019-06-25 09:59:43', '2019-06-25 09:59:43'),
(18, 'English Biscuits Manufacturers', 'Hattar Warehouse', 1550, 60, 9910, '2019-06-25 10:00:43', '2019-06-25 10:00:43'),
(19, 'English Biscuits Manufacturers', 'Hattar Warehouse', 1550, 60, 9910, '2019-06-25 10:00:46', '2019-06-25 10:00:46'),
(20, 'English Biscuits Manufacturers', 'Hattar Warehouse', 1550, 60, 9910, '2019-06-25 10:00:56', '2019-06-25 10:00:56'),
(21, 'Coronet Food Limited', 'Karachi Warehouse', 1441, 70, 8910, '2019-06-25 12:09:19', '2019-06-25 12:09:19'),
(22, 'Coronet Food Limited', 'Karachi Warehouse', 1441, 70, 8910, '2019-06-25 12:12:34', '2019-06-25 12:12:34');

-- --------------------------------------------------------

--
-- Table structure for table `factory_warehouse_vehicles`
--

CREATE TABLE `factory_warehouse_vehicles` (
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `facory_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warehouse_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `T_60` bigint(20) NOT NULL,
  `T_50` bigint(20) NOT NULL,
  `T_40` bigint(20) NOT NULL,
  `T_20` bigint(20) NOT NULL,
  `T_16` bigint(20) NOT NULL,
  `C_60` bigint(20) NOT NULL,
  `C_50` bigint(20) NOT NULL,
  `C_40` bigint(20) NOT NULL,
  `C_20` bigint(20) NOT NULL,
  `C_16` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factory_warehouse_vehicles`
--

INSERT INTO `factory_warehouse_vehicles` (`id`, `facory_name`, `warehouse_name`, `T_60`, `T_50`, `T_40`, `T_20`, `T_16`, `C_60`, `C_50`, `C_40`, `C_20`, `C_16`, `created_at`, `updated_at`) VALUES
(6, 'Coronet Food Limited', 'Karachi Warehouse', 5, 6, 6, 20, 26, 504350, 605220, 605220, 2017400, 2622620, '2019-06-25 12:17:17', '2019-06-25 12:17:17');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_10_130331_create_managers_table', 1),
(4, '2019_06_10_130432_create_transporters_table', 1),
(5, '2019_06_10_140616_create_warehouses_table', 1),
(6, '2019_06_10_140654_create_factories_table', 1),
(7, '2019_06_17_140217_create_vehicles_table', 1),
(8, '2019_06_17_140500_create_products_table', 1),
(9, '2019_06_22_091200_create_factory_warehouses_table', 1),
(10, '2019_06_22_194610_create_factory_warehouse_vehicles_table', 1),
(11, '2019_06_28_093223_create_images_table', 1),
(12, '2019_06_29_200106_create_productions_table', 1),
(13, '2019_06_29_203004_create_dispatches_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productions`
--

CREATE TABLE `productions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fac_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` bigint(20) DEFAULT NULL,
  `total_qty` bigint(20) DEFAULT NULL,
  `date_prod` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productions`
--

INSERT INTO `productions` (`id`, `fac_name`, `qty`, `total_qty`, `date_prod`, `created_at`, `updated_at`) VALUES
(1, 'English Biscuits Manufacturers', 10, 110, '2020-07-02 00:00:00', '2020-07-01 19:00:00', '2020-07-02 08:02:19'),
(2, 'Coronet Food Limited', 10, 110, '2020-07-01 00:00:00', '2020-06-30 19:00:00', '2020-07-02 08:02:19'),
(3, 'English Biscuits Manufacturers', 100, NULL, '02 July 2020', NULL, NULL),
(4, 'Coronet Food Limited', 20, NULL, '02 July 2020', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_boxes` int(11) NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_name`, `num_boxes`, `type`, `p_img`, `created_at`, `updated_at`) VALUES
(7, 'Super', 250, 'Biscuits', '177204399.jpg', '2019-06-24 00:34:02', '2019-06-25 12:03:07'),
(20, 'Marie Gold', 250, 'Biscuits', '1165768223.jpg', '2019-06-24 05:08:28', '2019-06-24 05:08:28'),
(21, 'Cake Up', 800, 'Cupcakes', '259407011.jpg', '2019-06-25 12:01:52', '2019-06-25 12:01:52'),
(22, 'Rio', 500, 'Cream Biscuits', '1281334748.webp', '2019-06-25 12:02:22', '2019-06-25 12:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `transporters`
--

CREATE TABLE `transporters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `veh_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `veh_loadability` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `veh_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `veh_type`, `veh_loadability`, `veh_img`, `created_at`, `updated_at`) VALUES
(1, '60', '1800', '1475253673.jpg', '2019-06-23 00:15:40', '2019-06-23 00:15:40'),
(2, '50', '1700', '371506489.jpg', '2019-06-23 00:16:06', '2019-06-23 00:16:06'),
(3, '40', '1600', '1640214329.jpg', '2019-06-23 00:16:27', '2019-06-23 00:16:27'),
(4, '20', '450', '316435767.jpg', '2019-06-23 00:16:53', '2019-06-23 00:16:53'),
(7, '16', '350', '1519008803.jpg', '2019-06-25 11:58:10', '2019-06-25 11:58:10');

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `w_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `w_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `storage` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warehouses`
--

INSERT INTO `warehouses` (`id`, `w_name`, `w_location`, `storage`, `created_at`, `updated_at`) VALUES
(2, 'Hyderabad Warehouse', 'Hyderabad', 60000, '2019-06-22 23:39:52', '2019-06-22 23:39:52'),
(3, 'Multan Warehouse', 'Multan', 70000, '2019-06-22 23:40:18', '2019-06-25 11:53:26'),
(4, 'Faisalabad Warehosue', 'Faisalabad', 50000, '2019-06-22 23:40:38', '2019-06-22 23:40:38'),
(6, 'Lala Mussa Warehouse', 'Lala Mussa', 60000, '2019-06-22 23:42:32', '2019-06-22 23:42:32'),
(8, 'Hattar Warehouse', 'Hattar', 90000, '2019-06-22 23:44:41', '2019-06-22 23:44:41'),
(9, 'Karachi Warehouse', 'Karachi', 140000, '2019-06-25 11:52:49', '2019-06-25 11:52:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dispatches`
--
ALTER TABLE `dispatches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `productions`
--
ALTER TABLE `productions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transporters`
--
ALTER TABLE `transporters`
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
-- AUTO_INCREMENT for table `dispatches`
--
ALTER TABLE `dispatches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `productions`
--
ALTER TABLE `productions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transporters`
--
ALTER TABLE `transporters`
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
