-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2017 at 10:29 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tmamy-last`
--

--
-- Truncate table before insert `settings`
--

TRUNCATE TABLE `settings`;
--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `name`, `description`, `value`, `field`, `active`, `created_at`, `updated_at`) VALUES
(1, 'contact_email', 'Contact form email address', 'The email address that all emails from the contact form will go to.', 'admin@updivision.com', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"email\"}', 1, NULL, NULL),
(2, 'contact_cc', 'Contact form CC field', 'Email adresses separated by comma, to be included as CC in the email sent by the contact form.', '', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"email\"}', 1, NULL, NULL),
(3, 'contact_bcc', 'Contact form BCC field', 'Email adresses separated by comma, to be included as BCC in the email sent by the contact form.', '', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"email\"}', 1, NULL, NULL),
(4, 'motto', 'Motto', 'Website motto', 'this is the valueasdasd', '{\"name\":\"value\",\"label\":\"Value\", \"title\":\"Motto value\" ,\"type\":\"textarea\"}', 1, NULL, '2017-05-02 06:42:30'),
(6, 'facebook_url', 'Facebook URL', 'Facebook URL', 'http://www.facebook.com/', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"text\"}', 1, NULL, '2017-05-02 06:42:15'),
(7, 'instagram_url', 'Instagram URL', 'Instagram URL ', 'http://www.instagram.com', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"text\"}', 1, NULL, '2017-05-02 09:34:27'),
(8, 'twitter_url', 'Twitter URL', 'Twitter URL', '', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"text\"}', 1, NULL, '2017-05-02 06:42:15'),
(9, 'youtube_url', 'Youtube URL', 'Youtube URL', '', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"text\"}', 1, NULL, '2017-05-02 06:42:15'),
(10, 'linkedin_url', 'Linkedin URL', 'Linkedin URL', '', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"text\"}', 1, NULL, '2017-05-02 06:42:15'),
(11, 'google_url', 'Google URL', 'Google URL', '', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"text\"}', 1, NULL, '2017-05-02 06:42:15'),
(12, 'mobile_no', 'Mobile No', 'Mobile No', '(+971) 50-555-4444', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"text\"}', 1, NULL, '2017-05-02 09:36:20'),
(13, 'site_logo', 'Site Logo', 'Site Logo', 'uploads/site_images/log.png', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"browse\"}', 1, NULL, '2017-05-14 23:42:17'),
(14, 'address', 'Site Address', '', 'Model Town Link Road Lahore, 60 Street. Pakistan 54770 ', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"text\"}', 1, NULL, NULL),
(15, 'description', 'Site Description', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et dolor eget erat\r\n                            fringilla port.', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"textarea\"}', 1, NULL, NULL),
(16, 'footer_logo', 'Footer Logo', 'Footer Logo', 'uploads\\site_images\\footer_logo.png', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"browse\"}', 1, NULL, '2017-05-06 11:55:16'),
(17, 'basic_user_points', 'Basic User Points', 'Basic User Points', '3000', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"text\"}', 1, NULL, NULL),
(18, 'health_doctor_categories', 'Health Doctor Categories', '', '32', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"text\"}', 1, NULL, '2017-05-11 12:56:32'),
(19, 'normal_adv', 'Normal Advertisement', '', '300', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"text\"}', 1, NULL, '2017-05-11 12:56:32'),
(20, 'hot_adv', 'Hot Advertisement', '', '4000', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"text\"}', 1, NULL, '2017-05-11 12:56:32'),
(21, 'business_points', 'Business User Points', '', '10000', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"text\"}', 1, NULL, '2017-05-11 12:56:32'),
(22, 'services_categories', 'Services Categories', '', '75,76,77,78,79,80,81,82,83,84,85,86,87,89,90', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"text\"}', 1, NULL, '2017-05-11 17:56:32'),
(23, 'restaurant_categories', 'Restaurant Categories', '', '206,205,204,203,202,201,200,199,198,197,196,195,194,193,192,191,190,189,188,187,186,185,184,183,182,181,180,179,178,177,176,175,174,173,172,171,170,169,168,167,166,165,164,163,162,161,160,159,158,157,156,155,154,153,152,151,150,149,148,147,146,145', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"textarea\"}', 1, NULL, '2017-05-11 17:56:32');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
