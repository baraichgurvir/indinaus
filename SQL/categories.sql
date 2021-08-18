-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 18, 2021 at 02:20 PM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `australiawork`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `cat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat`, `created_at`, `updated_at`) VALUES
(1, 'Accounts', NULL, NULL),
(2, 'Astrologers', NULL, NULL),
(123, 'Automotive', '2021-08-18 08:47:32', '2021-08-18 08:47:32'),
(124, 'Barber’s Shop', '2021-08-18 08:47:32', '2021-08-18 08:47:32'),
(125, 'Beauty Shop', '2021-08-18 08:47:32', '2021-08-18 08:47:32'),
(126, 'Bhangra & Giddha Classes', '2021-08-18 08:47:32', '2021-08-18 08:47:32'),
(127, 'Bricklaying Service', '2021-08-18 08:47:32', '2021-08-18 08:47:32'),
(128, 'Building Supply', '2021-08-18 08:47:32', '2021-08-18 08:47:32'),
(129, 'Conveyancing Service', '2021-08-18 08:47:32', '2021-08-18 08:47:32'),
(130, 'Carpenters', '2021-08-18 08:47:32', '2021-08-18 08:47:32'),
(131, 'Catering Service', '2021-08-18 08:47:32', '2021-08-18 08:47:32'),
(132, 'Cleaning Service', '2021-08-18 08:47:32', '2021-08-18 08:47:32'),
(133, 'Computer Service', '2021-08-18 08:47:32', '2021-08-18 08:47:32'),
(134, 'Curtains Blinds Service', '2021-08-18 08:47:32', '2021-08-18 08:47:32'),
(135, 'DJ Service', '2021-08-18 08:47:32', '2021-08-18 08:47:32'),
(136, 'Doctor', '2021-08-18 08:47:32', '2021-08-18 08:47:32'),
(137, 'Driving School', '2021-08-18 08:47:32', '2021-08-18 08:47:32'),
(138, 'Electricians', '2021-08-18 08:47:32', '2021-08-18 08:47:32'),
(139, 'Grocery Shop', '2021-08-18 08:47:32', '2021-08-18 08:47:32'),
(140, 'Handy Man', '2021-08-18 08:47:32', '2021-08-18 08:47:32'),
(141, 'Henna or Mehendi Service\r\n', '2021-08-18 08:47:32', '2021-08-18 08:47:32'),
(142, 'Insurance Agent', NULL, NULL),
(143, 'Lawyers', NULL, NULL),
(144, 'Loan & Credit Card', NULL, NULL),
(145, 'Migration Agents', NULL, NULL),
(146, 'Mobile Phone Repair', NULL, NULL),
(147, 'Optical Stores', NULL, NULL),
(148, 'Packers & Movers', NULL, NULL),
(149, 'Painters', NULL, NULL),
(150, 'Pest Control', NULL, NULL),
(151, 'Photographer or Videographers', NULL, NULL),
(152, 'Plumbers', NULL, NULL),
(153, 'Printing Service', NULL, NULL),
(154, 'Property Maintenance', NULL, NULL),
(155, 'Restaurants', NULL, NULL),
(156, 'Security Service', NULL, NULL),
(157, 'Solar Panel', NULL, NULL),
(158, 'Tiffin Service', NULL, NULL),
(159, 'Tiling Service', NULL, NULL),
(160, 'Tree Cutting Service', NULL, NULL),
(161, 'TV Repair', NULL, NULL),
(162, 'Tailors', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
