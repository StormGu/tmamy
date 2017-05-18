-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2017 at 04:05 AM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hdswe_soqtmamy`
--

--
-- Truncate table before insert `categories`
--

TRUNCATE TABLE `categories`;
--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `lft`, `rgt`, `depth`, `name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, NULL, NULL, NULL, '{"en":"Health","ar":"\\u0635\\u062d\\u0629"}', 'health', '2017-04-30 03:46:28', '2017-05-01 08:07:54', NULL),
(2, NULL, NULL, NULL, NULL, '{"en":"Real Estate"}', 'real-estate', '2017-04-30 17:27:35', '2017-04-30 17:27:35', NULL),
(3, NULL, NULL, NULL, NULL, '{"en":"Vehicles"}', 'vehicles', '2017-04-30 17:27:59', '2017-04-30 17:27:59', NULL),
(4, NULL, NULL, NULL, NULL, '{"en":"Shopping"}', 'shopping', '2017-04-30 17:28:14', '2017-04-30 17:28:14', NULL),
(5, NULL, NULL, NULL, NULL, '{"en":"Industrial"}', 'industrial', '2017-04-30 17:28:34', '2017-04-30 17:28:34', NULL),
(6, NULL, NULL, NULL, NULL, '{"en":"Agriculture"}', 'agriculture', '2017-04-30 17:28:51', '2017-04-30 17:28:51', NULL),
(7, NULL, NULL, NULL, NULL, '{"en":"Careers"}', 'careers', '2017-04-30 17:29:08', '2017-04-30 17:29:08', NULL),
(8, NULL, NULL, NULL, NULL, '{"en":"Services"}', 'services', '2017-04-30 17:29:22', '2017-04-30 17:29:22', NULL),
(9, NULL, NULL, NULL, NULL, '{"en":"Wholesalers"}', 'wholesalers', '2017-04-30 17:29:34', '2017-04-30 17:29:34', NULL),
(10, NULL, NULL, NULL, NULL, '{"en":"Exhibitions"}', 'exhibitions', '2017-04-30 17:29:48', '2017-04-30 17:29:48', NULL),
(11, NULL, NULL, NULL, NULL, '{"en":"Tenders"}', 'tenders', '2017-04-30 17:30:15', '2017-04-30 17:30:15', NULL),
(12, NULL, NULL, NULL, NULL, '{"en":"Restaurants"}', 'restaurants', '2017-04-30 17:30:28', '2017-04-30 17:30:28', NULL),
(13, 2, NULL, NULL, NULL, '{"en":"Residential"}', 'residential', '2017-04-30 17:32:00', '2017-04-30 17:32:00', NULL),
(14, 2, NULL, NULL, NULL, '{"en":"Commercial"}', 'commercial', '2017-04-30 17:32:08', '2017-04-30 17:32:08', NULL),
(15, 2, NULL, NULL, NULL, '{"en":"Land"}', 'land', '2017-04-30 17:32:19', '2017-04-30 17:32:19', NULL),
(16, 2, NULL, NULL, NULL, '{"en":"Buildings"}', 'buildings', '2017-04-30 17:32:27', '2017-04-30 17:32:27', NULL),
(17, 2, NULL, NULL, NULL, '{"en":"Tourism Facilities"}', 'tourism-facilities', '2017-04-30 17:32:46', '2017-04-30 17:32:46', NULL),
(18, 2, NULL, NULL, NULL, '{"en":"Projects"}', 'projects', '2017-04-30 17:32:54', '2017-04-30 17:32:54', NULL),
(19, 2, NULL, NULL, NULL, '{"en":"Business Centers"}', 'business-centers', '2017-04-30 17:33:07', '2017-04-30 17:33:07', NULL),
(20, 3, NULL, NULL, NULL, '{"en":"Cars & SUVs"}', 'Cars_SUVs', '2017-04-30 17:35:39', '2017-04-30 17:35:39', NULL),
(21, 3, NULL, NULL, NULL, '{"en":"Motorcycles & Scooters"}', 'Motorcycles_Scooters', '2017-04-30 17:35:55', '2017-04-30 17:35:55', NULL),
(22, 3, NULL, NULL, NULL, '{"en":"Heavy & Commercial Vehicles"}', 'Heavy-Commercial-Vehicles', '2017-04-30 17:36:11', '2017-04-30 17:36:11', NULL),
(23, 3, NULL, NULL, NULL, '{"en":"Vehicles Rental"}', 'Vehicles Rental', '2017-04-30 17:36:18', '2017-04-30 17:36:18', NULL),
(24, 3, NULL, NULL, NULL, '{"en":"Boats & Watercraft"}', 'Boats & Watercraft', '2017-04-30 17:36:27', '2017-04-30 17:36:27', NULL),
(25, 3, NULL, NULL, NULL, '{"en":"Damaged Vehicles"}', 'Damaged Vehicles', '2017-04-30 17:36:34', '2017-04-30 17:36:34', NULL),
(26, 3, NULL, NULL, NULL, '{"en":"Classic Vehicles"}', 'Classic Vehicles', '2017-04-30 17:36:41', '2017-04-30 17:36:41', NULL),
(27, 3, NULL, NULL, NULL, '{"en":"ATV & UTV"}', 'ATV & UTV', '2017-04-30 17:36:47', '2017-04-30 17:36:47', NULL),
(28, 3, NULL, NULL, NULL, '{"en":"Handicap Vehicles"}', 'Handicap Vehicles', '2017-04-30 17:36:53', '2017-04-30 17:36:53', NULL),
(29, 3, NULL, NULL, NULL, '{"en":"Electric Vehicles"}', 'Electric Vehicles', '2017-04-30 17:37:00', '2017-04-30 17:37:00', NULL),
(30, 3, NULL, NULL, NULL, '{"en":"RVs & Campers"}', 'RVs & Campers', '2017-04-30 17:37:06', '2017-04-30 17:37:06', NULL),
(31, 3, NULL, NULL, NULL, '{"en":"Auto Accessories & Parts"}', 'Auto Accessories & Parts', '2017-04-30 17:37:14', '2017-04-30 17:37:14', NULL),
(32, 1, NULL, NULL, NULL, '{"en":"Doctors"}', 'Doctors', '2017-04-30 17:41:19', '2017-04-30 17:41:19', NULL),
(33, 1, NULL, NULL, NULL, '{"en":"Medicine"}', 'Medicine', '2017-04-30 17:41:26', '2017-04-30 17:41:26', NULL),
(34, 1, NULL, NULL, NULL, '{"en":"Pharmacy"}', 'Pharmacy', '2017-04-30 17:41:34', '2017-04-30 17:41:34', NULL),
(35, 1, NULL, NULL, NULL, '{"en":"Clinic"}', 'Clinic', '2017-04-30 17:41:43', '2017-04-30 17:41:43', NULL),
(36, 1, NULL, NULL, NULL, '{"en":"Hospital"}', 'Hospital', '2017-04-30 17:41:49', '2017-04-30 17:41:49', NULL),
(37, 1, NULL, NULL, NULL, '{"en":"Labs"}', 'Labs', '2017-04-30 17:41:56', '2017-04-30 17:41:56', NULL),
(38, 1, NULL, NULL, NULL, '{"en":"Radiology Center"}', 'Radiology Center', '2017-04-30 17:42:03', '2017-04-30 17:42:03', NULL),
(39, 1, NULL, NULL, NULL, '{"en":"Medical Supplies"}', 'Medical Supplies', '2017-04-30 17:42:12', '2017-04-30 17:42:12', NULL),
(40, 1, NULL, NULL, NULL, '{"en":"Medical Equipments"}', 'Medical Equipments', '2017-04-30 17:42:19', '2017-04-30 17:42:19', NULL),
(41, 1, NULL, NULL, NULL, '{"en":"Medical Products"}', 'Medical Products', '2017-04-30 17:42:25', '2017-04-30 17:42:25', NULL),
(42, 4, NULL, NULL, NULL, '{"en":"Mobile Phones"}', 'Mobile Phones', '2017-04-30 17:44:52', '2017-04-30 17:44:52', NULL),
(43, 4, NULL, NULL, NULL, '{"en":"Computers & Software"}', 'Computers & Software', '2017-04-30 17:44:58', '2017-04-30 17:44:58', NULL),
(44, 4, NULL, NULL, NULL, '{"en":"Home Appliances"}', 'Home Appliances', '2017-04-30 17:45:04', '2017-04-30 17:45:04', NULL),
(45, 4, NULL, NULL, NULL, '{"en":"Cameras & Photos"}', 'Cameras & Photos', '2017-04-30 17:45:11', '2017-04-30 17:45:11', NULL),
(46, 4, NULL, NULL, NULL, '{"en":"Clothes, Footwear & Accessories"}', 'Clothes, Footwear & Accessories', '2017-04-30 17:45:18', '2017-04-30 17:45:18', NULL),
(47, 4, NULL, NULL, NULL, '{"en":"Home Decoration & Furniture"}', 'Home Decoration & Furniture', '2017-04-30 17:45:28', '2017-04-30 17:45:28', NULL),
(48, 4, NULL, NULL, NULL, '{"en":"Garden Furniture & Home Improvements"}', 'Garden Furniture & Home Improvements', '2017-04-30 17:45:36', '2017-04-30 17:45:36', NULL),
(49, 4, NULL, NULL, NULL, '{"en":"Office & Stationery"}', 'Office & Stationery', '2017-04-30 17:45:42', '2017-04-30 17:45:42', NULL),
(50, 4, NULL, NULL, NULL, '{"en":"Audio,  DVD & Video"}', 'Audio,  DVD & Video', '2017-04-30 17:45:48', '2017-04-30 17:45:48', NULL),
(51, 4, NULL, NULL, NULL, '{"en":"Beauty & Cosmetics"}', 'Beauty & Cosmetics', '2017-04-30 17:45:55', '2017-04-30 17:45:55', NULL),
(52, 4, NULL, NULL, NULL, '{"en":"Baby, Child & Junior"}', 'Baby, Child & Junior', '2017-04-30 17:46:01', '2017-04-30 17:46:01', NULL),
(53, 4, NULL, NULL, NULL, '{"en":"Electronics"}', 'Electronics', '2017-04-30 17:46:09', '2017-04-30 17:46:09', NULL),
(54, 4, NULL, NULL, NULL, '{"en":"Antiques & Arts"}', 'Antiques & Arts', '2017-04-30 17:46:16', '2017-04-30 17:46:16', NULL),
(55, 4, NULL, NULL, NULL, '{"en":"Books, Magazines & Movies"}', 'Books, Magazines & Movies', '2017-04-30 17:46:26', '2017-04-30 17:46:26', NULL),
(56, 4, NULL, NULL, NULL, '{"en":"Jewelry"}', 'Jewelry', '2017-04-30 17:46:32', '2017-04-30 17:46:32', NULL),
(57, 4, NULL, NULL, NULL, '{"en":"Sports"}', 'Sports', '2017-04-30 17:46:40', '2017-04-30 17:46:40', NULL),
(58, 4, NULL, NULL, NULL, '{"en":"Food & Beverage"}', 'Food & Beverage', '2017-04-30 17:46:46', '2017-04-30 17:46:46', NULL),
(59, 4, NULL, NULL, NULL, '{"en":"Toys & Hobbies"}', 'Toys & Hobbies', '2017-04-30 17:46:58', '2017-04-30 17:46:58', NULL),
(60, 4, NULL, NULL, NULL, '{"en":"Video Games & Systems"}', 'Video Games & Systems', '2017-04-30 17:47:05', '2017-04-30 17:47:05', NULL),
(61, 4, NULL, NULL, NULL, '{"en":"Collectibles"}', 'Collectibles', '2017-04-30 17:47:11', '2017-04-30 17:47:11', NULL),
(62, 4, NULL, NULL, NULL, '{"en":"Tickets & Vouchers"}', 'Tickets & Vouchers', '2017-04-30 17:47:17', '2017-04-30 17:47:17', NULL),
(63, 4, NULL, NULL, NULL, '{"en":"Something else"}', 'Something else', '2017-04-30 17:47:23', '2017-04-30 17:47:23', NULL),
(64, 5, NULL, NULL, NULL, '{"en":"Industrial Machinery"}', 'Industrial Machinery', '2017-04-30 17:48:12', '2017-04-30 17:48:12', NULL),
(65, 5, NULL, NULL, NULL, '{"en":"Industrial Supplies"}', 'Industrial Supplies', '2017-04-30 17:48:20', '2017-04-30 17:48:20', NULL),
(66, 6, NULL, NULL, NULL, '{"en":"Farming"}', 'Farming', '2017-04-30 17:49:01', '2017-04-30 17:49:01', NULL),
(67, 6, NULL, NULL, NULL, '{"en":"Forestry"}', 'Forestry', '2017-04-30 17:49:10', '2017-04-30 17:49:10', NULL),
(68, 6, NULL, NULL, NULL, '{"en":"Livestocks"}', 'Livestocks', '2017-04-30 17:49:19', '2017-04-30 17:49:19', NULL),
(69, 6, NULL, NULL, NULL, '{"en":"Aviculture"}', 'Aviculture', '2017-04-30 17:49:27', '2017-04-30 17:49:27', NULL),
(70, 6, NULL, NULL, NULL, '{"en":"Apiaries"}', 'Apiaries', '2017-04-30 17:49:34', '2017-04-30 17:49:34', NULL),
(71, 6, NULL, NULL, NULL, '{"en":"Fish"}', 'Fish', '2017-04-30 17:49:42', '2017-04-30 17:49:42', NULL),
(72, 6, NULL, NULL, NULL, '{"en":"Accessories"}', 'Accessories', '2017-04-30 17:49:48', '2017-04-30 17:49:48', NULL),
(73, 7, NULL, NULL, NULL, '{"en":"Jobs"}', 'Jobs', '2017-04-30 17:50:12', '2017-04-30 17:50:12', NULL),
(74, 7, NULL, NULL, NULL, '{"en":"Resumes"}', 'Resumes', '2017-04-30 17:50:27', '2017-04-30 17:50:27', NULL),
(75, 8, NULL, NULL, NULL, '{"en":"Car Service & Maintenance"}', 'Car Service & Maintenance', '2017-04-30 17:51:55', '2017-04-30 17:51:55', NULL),
(76, 8, NULL, NULL, NULL, '{"en":"Classrooms, Study Centres & Courses"}', 'Classrooms, Study Centres & Courses', '2017-04-30 17:52:03', '2017-04-30 17:52:03', NULL),
(77, 8, NULL, NULL, NULL, '{"en":"Counceling"}', 'Counceling', '2017-04-30 17:52:10', '2017-04-30 17:52:10', NULL),
(78, 8, NULL, NULL, NULL, '{"en":"Dealerships"}', 'Dealerships', '2017-04-30 17:52:16', '2017-04-30 17:52:16', NULL),
(79, 8, NULL, NULL, NULL, '{"en":"Food & Nutrition"}', 'Food & Nutrition', '2017-04-30 17:52:27', '2017-04-30 17:52:27', NULL),
(80, 8, NULL, NULL, NULL, '{"en":"Funerals"}', 'Funerals', '2017-04-30 17:52:34', '2017-04-30 17:52:34', NULL),
(81, 8, NULL, NULL, NULL, '{"en":"Hand Arts"}', 'Hand Arts', '2017-04-30 17:52:43', '2017-04-30 17:52:43', NULL),
(82, 8, NULL, NULL, NULL, '{"en":"Home Remodeling & Decorating"}', 'Home Remodeling & Decorating', '2017-04-30 17:52:56', '2017-04-30 17:52:56', NULL),
(83, 8, NULL, NULL, NULL, '{"en":"Kindergarten"}', 'Kindergarten', '2017-04-30 17:53:02', '2017-04-30 17:53:02', NULL),
(84, 8, NULL, NULL, NULL, '{"en":"Pets"}', 'Pets', '2017-04-30 17:53:11', '2017-04-30 17:53:11', NULL),
(85, 8, NULL, NULL, NULL, '{"en":"Printing Services"}', 'Printing Services', '2017-04-30 17:53:17', '2017-04-30 17:53:17', NULL),
(86, 8, NULL, NULL, NULL, '{"en":"Repair & Technical Services"}', 'Repair & Technical Services', '2017-04-30 17:53:25', '2017-04-30 17:53:25', NULL),
(87, 8, NULL, NULL, NULL, '{"en":"Shipping"}', 'Shipping', '2017-04-30 17:53:31', '2017-04-30 17:53:31', NULL),
(89, 8, NULL, NULL, NULL, '{"en":"Sports"}', 'sport', '2017-04-30 17:53:53', '2017-04-30 17:53:53', NULL),
(90, 8, NULL, NULL, NULL, '{"en":"Wedding & Events"}', 'Wedding & Events', '2017-04-30 17:54:01', '2017-04-30 17:54:01', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
