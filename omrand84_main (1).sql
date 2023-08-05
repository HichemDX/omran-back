-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2023 at 01:58 PM
-- Server version: 5.7.42-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omrand84_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `status`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'admin', 'khaled@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, NULL, NULL, '2022-11-09 05:08:01', '2022-11-09 05:08:01'),
(9, 'admin', 'khaledhadria1@gmail.com', '$2y$10$IN71PKo5TyDCO1Pp9F3R.uJZbaGc95htJpMDO5pvmv4AivoTwUIh6', 0, NULL, NULL, '2022-12-08 17:49:11', '2023-03-27 17:54:21'),
(10, 'adminTest', 'admin@gmail.com', '$2y$10$exYgbKCb4GiWc39HPYziUOOUxA3Z9iqdnstQPjGFeNVlYto80.Fge', 0, NULL, NULL, '2022-12-08 17:49:11', '2023-03-27 17:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent` int(11) DEFAULT '0',
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_fr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homepage` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent`, `name_ar`, `name_fr`, `icon`, `homepage`, `created_at`, `updated_at`) VALUES
(2, NULL, 'حديد', 'Fer', 'storage/images/categories/6466431f6ce155ab01b00673366490b792869f9252e6d.jpg', 1, '2023-02-19 18:44:59', '2023-05-18 15:24:15'),
(3, NULL, 'رمل', 'Sable', 'storage/images/categories/646516fb5edb90e258c386cdbe1ea03baa88160d90806.jpg', 1, '2023-02-19 18:47:04', '2023-05-17 18:03:39'),
(4, NULL, 'حجارة', 'Gravier', 'storage/images/categories/646642ec681ce66fcccb2653a814adc8de734950fbdf0.jpg', 1, '2023-02-19 18:52:28', '2023-05-18 15:23:24'),
(5, NULL, 'إسمنت', 'Ciment', 'storage/images/categories/64664362dc773bfbb6c1ef4bd7b7ccc00500458673b7e.jpg', 1, '2023-02-19 18:53:47', '2023-05-18 15:25:22'),
(6, NULL, 'خرسانة مسلحة', 'Béton armé', 'storage/images/categories/646645d30069d3c39fbca98b5bda6cac4ced2776b2c12.jpg', 1, '2023-02-19 18:54:51', '2023-05-18 15:35:47'),
(7, NULL, 'قرميد', 'Brique', 'storage/images/categories/64664542f1ac263efab1271702fda86eb0b04a6a8ba81.jpg', 1, '2023-02-19 18:56:17', '2023-05-18 15:33:23'),
(8, NULL, 'حطب', 'Bois', 'storage/images/categories/646645aa08e36338b8b736369838eb4d7dccf9666c177.jpg', 1, '2023-02-19 18:58:03', '2023-05-18 15:35:06'),
(9, NULL, 'السباكة', 'Plomberie', 'storage/images/categories/6465189d056c5e064b4c32aafa00919bf506ace7cfb4e.jpg', 1, '2023-02-19 19:01:57', '2023-05-17 18:10:37'),
(10, NULL, 'زجاج', 'verre', 'storage/images/categories/646516622b2c419262fadca0fb1505f1ed16f819f3adf.jpg', 1, '2023-02-19 20:20:50', '2023-05-17 18:01:06'),
(11, NULL, 'سيراميك', 'Céramique', 'storage/images/categories/646644d7771062ebac133305613859321c3808c22b5e2.jpg', 1, '2023-02-19 20:35:47', '2023-05-18 15:31:35'),
(12, NULL, 'دهان', 'peinture', 'storage/images/categories/6466424fce61975d337da5f3b2082a7baf8a83402384b.jpg', 1, '2023-02-19 20:43:21', '2023-05-18 15:20:47'),
(13, NULL, 'خدمات', 'services', 'storage/images/categories/646517c2b96b2f0b53a5f637318a25540e24dc6e72c56.jpg', 1, '2023-02-19 20:45:04', '2023-05-17 18:06:58'),
(14, NULL, 'أدوات', 'Outils', 'storage/images/categories/646647444cbb8f65059c0e84cf8e7fe502864d72598a9.jpg', 1, '2023-02-19 20:48:09', '2023-05-18 15:41:56'),
(15, 2, 'سيخ 08ملم', 'Brochette 08mm', 'storage/images/categories/', 0, '2023-02-19 20:50:18', '2023-02-19 20:55:58'),
(16, 2, 'سيخ 06 ملم', 'Brochette 06 mm', 'storage/images/categories/', 1, '2023-02-19 20:53:51', '2023-02-19 20:53:51'),
(17, 2, 'سيخ 50ملم', 'Brochette 50 mm', 'storage/images/categories/', 0, '2023-02-19 20:58:36', '2023-02-19 20:59:17'),
(18, 2, 'سيخ 40ملم', 'Brochette 40 mm', 'storage/images/categories/', 1, '2023-02-19 20:59:51', '2023-02-19 20:59:51'),
(19, 2, 'سيخ 32 ملم', 'Brochette 32 mm', 'storage/images/categories/', 1, '2023-02-19 21:00:43', '2023-02-19 21:00:43'),
(20, 2, 'سيخ 25 ملم', 'Brochette 25 mm', 'storage/images/categories/', 1, '2023-02-19 21:01:22', '2023-02-19 21:01:22'),
(21, 2, 'سيخ 20 ملم', 'Brochette 20 mm', 'storage/images/categories/', 1, '2023-02-19 21:02:19', '2023-02-19 21:02:19'),
(22, 2, 'سيخ 16 ملم', 'Brochette 16 mm', 'storage/images/categories/', 1, '2023-02-19 21:03:11', '2023-02-19 21:03:11'),
(23, 2, 'سيخ 22 ملم', 'Brochette 22 mm', 'storage/images/categories/', 1, '2023-02-19 21:05:42', '2023-02-19 21:05:42'),
(24, 2, 'سيخ 18 ملم', 'Brochette 18 mm', 'storage/images/categories/', 1, '2023-02-19 21:06:19', '2023-02-19 21:06:19'),
(25, 2, 'سيخ 14 ملم', 'Brochette 14 mm', 'storage/images/categories/', 1, '2023-02-19 21:06:57', '2023-02-19 21:06:57'),
(26, 2, 'سيخ 12 ملم', 'Brochette 12 mm', 'storage/images/categories/', 1, '2023-02-19 21:07:23', '2023-02-19 21:07:23'),
(27, 2, 'سيخ 10 ملم', 'Brochette 10 mm', 'storage/images/categories/', 1, '2023-02-19 21:07:46', '2023-02-19 21:07:46'),
(28, 7, 'قرميد 08', 'Brique 08', 'storage/images/categories/', 1, '2023-02-19 21:09:59', '2023-02-19 21:09:59'),
(29, 7, 'قرميد 12', 'Brique 12', 'storage/images/categories/', 0, '2023-02-19 21:10:39', '2023-05-13 22:32:55'),
(30, NULL, 'أبواب ونوافذ', 'Portes et fenêtres', 'storage/images/categories/646518590fa4e2d227dbef1d6d77419d0dc851b039341.jpg', 1, '2023-02-20 18:18:21', '2023-05-17 18:09:29'),
(31, NULL, 'جبس', 'Plâtre', 'storage/images/categories/646518f004055f525e8bd528141c7d6a625068397ad8a.jpg', 1, '2023-02-20 20:24:48', '2023-05-17 18:12:00'),
(32, 4, 'آخر', 'Autre', 'storage/images/categories/', 1, '2023-02-20 20:44:53', '2023-02-20 20:44:53'),
(33, NULL, 'كهرباء', 'électricité', 'storage/images/categories/64664339906c507946f0edf40ff3fc2386398d5b24fe5.jpg', 1, '2023-02-20 21:08:44', '2023-05-18 15:24:41'),
(34, NULL, 'آلات وشاحنات', 'Camions et machines', 'storage/images/categories/646645061e3226055aac1365301aea3c6d0320eff25bf.jpg', 1, '2023-02-20 21:13:53', '2023-05-18 15:32:22'),
(35, NULL, 'ألمنيوم وبيفيسي', 'Aluminium et pvc', 'storage/images/categories/646646d309cef117ca60ecd44eae412a0c13189d190c5.jpg', 1, '2023-02-23 20:36:37', '2023-05-18 15:40:03'),
(36, NULL, 'كراء معدات', 'Location d’équipement', 'storage/images/categories/646646eb2a3d12e65579acd557c0ff76d8a615fad3b99.jpg', 1, '2023-02-24 21:04:05', '2023-05-18 15:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`category_id`, `product_id`) VALUES
(7, 2),
(2, 4),
(14, 11),
(14, 10),
(5, 9),
(5, 12);

-- --------------------------------------------------------

--
-- Table structure for table `communes`
--

CREATE TABLE `communes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wilaya_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_fr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `communes`
--

INSERT INTO `communes` (`id`, `wilaya_id`, `name_ar`, `name_fr`, `created_at`, `updated_at`) VALUES
(1, 1, 'أدرار', 'Adrar', NULL, NULL),
(2, 1, 'اقبلي', 'Akabli', NULL, NULL),
(3, 49, 'أوقروت', 'Aougrout', NULL, NULL),
(4, 1, 'أولف', 'Aoulef', NULL, NULL),
(5, 50, 'برج باجي مختار', 'Bordj Badji Mokhtar', NULL, NULL),
(6, 1, 'بودة', 'Bouda', NULL, NULL),
(7, 49, 'شروين', 'Charouine', NULL, NULL),
(8, 49, 'دلدول', 'Deldoul', NULL, NULL),
(9, 1, 'فنوغيل', 'Fenoughil', NULL, NULL),
(10, 1, 'إن زغمير', 'In Zghmir', NULL, NULL),
(11, 49, 'قصر قدور', 'Ksar Kaddour', NULL, NULL),
(12, 49, 'المطارفة', 'Metarfa', NULL, NULL),
(13, 1, 'أولاد أحمد تيمي', 'Ouled Ahmed Timmi', NULL, NULL),
(14, 49, 'أولاد عيسى', 'Ouled Aissa', NULL, NULL),
(15, 49, 'أولاد السعيد', 'Ouled Said', NULL, NULL),
(16, 1, 'رقان', 'Reggane', NULL, NULL),
(17, 1, 'سالي', 'Sali', NULL, NULL),
(18, 1, 'السبع', 'Sebaa', NULL, NULL),
(19, 49, 'طالمين', 'Talmine', NULL, NULL),
(20, 1, 'تامنطيط', 'Tamantit', NULL, NULL),
(21, 1, 'تامست', 'Tamest', NULL, NULL),
(22, 1, 'تيمقتن', 'Timekten', NULL, NULL),
(23, 50, 'تيمياوين', 'Timiaouine', NULL, NULL),
(24, 49, 'تيميمون', 'Timimoun', NULL, NULL),
(25, 49, 'تنركوك', 'Tinerkouk', NULL, NULL),
(26, 1, 'تيت', 'Tit', NULL, NULL),
(27, 1, 'تسابيت', 'Tsabit', NULL, NULL),
(28, 1, 'زاوية كنتة', 'Zaouiet Kounta', NULL, NULL),
(29, 2, 'أبو الحسن', 'Abou El Hassane', NULL, NULL),
(30, 2, 'عين مران', 'Ain Merane', NULL, NULL),
(31, 2, 'بنايرية', 'Benairia', NULL, NULL),
(32, 2, 'بني بوعتاب', 'Beni  Bouattab', NULL, NULL),
(33, 2, 'بني حواء', 'Beni Haoua', NULL, NULL),
(34, 2, 'بني راشد', 'Beni Rached', NULL, NULL),
(35, 2, 'بوقادير', 'Boukadir', NULL, NULL),
(36, 2, 'بوزغاية', 'Bouzeghaia', NULL, NULL),
(37, 2, 'بريرة', 'Breira', NULL, NULL),
(38, 2, 'الشطية', 'Chettia', NULL, NULL),
(39, 2, 'الشلف', 'Chlef', NULL, NULL),
(40, 2, 'الظهرة', 'Dahra', NULL, NULL),
(41, 2, 'الحجاج', 'El Hadjadj', NULL, NULL),
(42, 2, 'الكريمية', 'El Karimia', NULL, NULL),
(43, 2, 'المرسى', 'El Marsa', NULL, NULL),
(44, 2, 'حرشون', 'Harchoun', NULL, NULL),
(45, 2, 'الهرانفة', 'Herenfa', NULL, NULL),
(46, 2, 'الأبيض مجاجة', 'Labiod Medjadja', NULL, NULL),
(47, 2, 'مصدق', 'Moussadek', NULL, NULL),
(48, 2, 'وادي الفضة', 'Oued Fodda', NULL, NULL),
(49, 2, 'وادي قوسين', 'Oued Goussine', NULL, NULL),
(50, 2, 'وادي سلي', 'Oued Sly', NULL, NULL),
(51, 2, 'أولاد عباس', 'Ouled Abbes', NULL, NULL),
(52, 2, 'أولاد بن عبد القادر', 'Ouled Ben Abdelkader', NULL, NULL),
(53, 2, 'أولاد فارس', 'Ouled Fares', NULL, NULL),
(54, 2, 'أم الدروع', 'Oum Drou', NULL, NULL),
(55, 2, 'سنجاس', 'Sendjas', NULL, NULL),
(56, 2, 'سيدي عبد الرحمن', 'Sidi Abderrahmane', NULL, NULL),
(57, 2, 'سيدي عكاشة', 'Sidi Akkacha', NULL, NULL),
(58, 2, 'الصبحة', 'Sobha', NULL, NULL),
(59, 2, 'تاجنة', 'Tadjena', NULL, NULL),
(60, 2, 'تلعصة', 'Talassa', NULL, NULL),
(61, 2, 'تاوقريت', 'Taougrit', NULL, NULL),
(62, 2, 'تنس', 'Tenes', NULL, NULL),
(63, 2, 'الزبوجة', 'Zeboudja', NULL, NULL),
(64, 3, 'أفلو', 'Aflou', NULL, NULL),
(65, 3, 'عين ماضي', 'Ain Madhi', NULL, NULL),
(66, 3, 'عين سيدي علي', 'Ain Sidi Ali', NULL, NULL),
(67, 3, 'البيضاء', 'El Beidha', NULL, NULL),
(68, 3, 'بن ناصر بن شهرة', 'Benacer Benchohra', NULL, NULL),
(69, 3, 'بريدة', 'Brida', NULL, NULL),
(70, 3, 'العسافية', 'El Assafia', NULL, NULL),
(71, 3, 'الغيشة', 'El Ghicha', NULL, NULL),
(72, 3, 'الحويطة', 'El Haouaita', NULL, NULL),
(73, 3, 'قلتة سيدي سعد', 'Gueltat Sidi Saad', NULL, NULL),
(74, 3, 'الحاج مشري', 'Hadj Mechri', NULL, NULL),
(75, 3, 'حاسي الدلاعة', 'Hassi Delaa', NULL, NULL),
(76, 3, 'حاسي الرمل', 'Hassi R\'mel', NULL, NULL),
(77, 3, 'الخنق', 'Kheneg', NULL, NULL),
(78, 3, 'قصر الحيران', 'Ksar El Hirane', NULL, NULL),
(79, 3, 'الأغواط', 'Laghouat', NULL, NULL),
(80, 3, 'وادي مرة', 'Oued Morra', NULL, NULL),
(81, 3, 'وادي مزي', 'Oued M\'zi', NULL, NULL),
(82, 3, 'سبقاق', 'Sebgag', NULL, NULL),
(83, 3, 'سيدي بوزيد', 'Sidi Bouzid', NULL, NULL),
(84, 3, 'سيدي مخلوف', 'Sidi Makhlouf', NULL, NULL),
(85, 3, 'تاجموت', 'Tadjemout', NULL, NULL),
(86, 3, 'تاجرونة', 'Tadjrouna', NULL, NULL),
(87, 3, 'تاويالة', 'Taouiala', NULL, NULL),
(88, 4, 'عين ببوش', 'Ain Babouche', NULL, NULL),
(89, 4, 'عين البيضاء', 'Ain Beida', NULL, NULL),
(90, 4, 'عين الديس', 'Ain Diss', NULL, NULL),
(91, 4, 'عين فكرون', 'Ain Fekroun', NULL, NULL),
(92, 4, 'عين كرشة', 'Ain Kercha', NULL, NULL),
(93, 4, 'عين مليلة', 'Ain M\'lila', NULL, NULL),
(94, 4, 'عين الزيتون', 'Ain Zitoun', NULL, NULL),
(95, 4, 'بحير الشرقي', 'Behir Chergui', NULL, NULL),
(96, 4, 'بريش', 'Berriche', NULL, NULL),
(97, 4, 'بئر الشهداء', 'Bir Chouhada', NULL, NULL),
(98, 4, 'الضلعة', 'Dhalaa', NULL, NULL),
(99, 4, 'العامرية', 'El Amiria', NULL, NULL),
(100, 4, 'البلالة', 'El Belala', NULL, NULL),
(101, 4, 'الجازية', 'El Djazia', NULL, NULL),
(102, 4, 'الفجوج بوغرارة سعودي', 'El Fedjoudj Boughrara Sa', NULL, NULL),
(103, 4, 'الحرملية', 'El Harmilia', NULL, NULL),
(104, 4, 'فكيرينة', 'Fkirina', NULL, NULL),
(105, 4, 'هنشير تومغني', 'Hanchir Toumghani', NULL, NULL),
(106, 4, 'قصر الصباحي', 'Ksar Sbahi', NULL, NULL),
(107, 4, 'مسكيانة', 'Meskiana', NULL, NULL),
(108, 4, 'وادي نيني', 'Oued Nini', NULL, NULL),
(109, 4, 'أولاد قاسم', 'Ouled Gacem', NULL, NULL),
(110, 4, 'أولاد حملة', 'Ouled Hamla', NULL, NULL),
(111, 4, 'أولاد زواي', 'Ouled Zouai', NULL, NULL),
(112, 4, 'أم البواقي', 'Oum El Bouaghi', NULL, NULL),
(113, 4, 'الرحية', 'Rahia', NULL, NULL),
(114, 4, 'سيقوس', 'Sigus', NULL, NULL),
(115, 4, 'سوق نعمان', 'Souk Naamane', NULL, NULL),
(116, 4, 'الزرق', 'Zorg', NULL, NULL),
(117, 5, 'عين جاسر', 'Ain Djasser', NULL, NULL),
(118, 5, 'عين التوتة', 'Ain Touta', NULL, NULL),
(119, 5, 'عين ياقوت', 'Ain Yagout', NULL, NULL),
(120, 5, 'أريس', 'Arris', NULL, NULL),
(121, 5, 'عزيل عبد القادر', 'Azil Abedelkader', NULL, NULL),
(122, 5, 'بريكة', 'Barika', NULL, NULL),
(123, 5, 'باتنة', 'Batna', NULL, NULL),
(124, 5, 'بني فضالة الحقانية', 'Beni Foudhala El Hakania', NULL, NULL),
(125, 5, 'بيطام', 'Bitam', NULL, NULL),
(126, 5, 'بولهيلات', 'Boulhilat', NULL, NULL),
(127, 5, 'بومقر', 'Boumagueur', NULL, NULL),
(128, 5, 'بومية', 'Boumia', NULL, NULL),
(129, 5, 'بوزينة', 'Bouzina', NULL, NULL),
(130, 5, 'الشمرة', 'Chemora', NULL, NULL),
(131, 5, 'شير', 'Chir', NULL, NULL),
(132, 5, 'جرمة', 'Djerma', NULL, NULL),
(133, 5, 'الجزار', 'Djezzar', NULL, NULL),
(134, 5, 'الحاسي', 'El Hassi', NULL, NULL),
(135, 5, 'المعذر', 'El Madher', NULL, NULL),
(136, 5, 'فسديس', 'Fesdis', NULL, NULL),
(137, 5, 'فم الطوب', 'Foum Toub', NULL, NULL),
(138, 5, 'غسيرة', 'Ghassira', NULL, NULL),
(139, 5, 'القصبات', 'Gosbat', NULL, NULL),
(140, 5, 'القيقبة', 'Guigba', NULL, NULL),
(141, 5, 'حيدوسة', 'Hidoussa', NULL, NULL),
(142, 5, 'إشمول', 'Ichemoul', NULL, NULL),
(143, 5, 'إينوغيسن', 'Inoughissen', NULL, NULL),
(144, 5, 'كيمل', 'Kimmel', NULL, NULL),
(145, 5, 'قصر بلزمة', 'Ksar Bellezma', NULL, NULL),
(146, 5, 'لارباع', 'Larbaa', NULL, NULL),
(147, 5, 'لازرو', 'Lazrou', NULL, NULL),
(148, 5, 'لمسان', 'Lemcene', NULL, NULL),
(149, 5, 'إمدوكل', 'M Doukal', NULL, NULL),
(150, 5, 'معافة', 'Maafa', NULL, NULL),
(151, 5, 'منعة', 'Menaa', NULL, NULL),
(152, 5, 'مروانة', 'Merouana', NULL, NULL),
(153, 5, 'نقاوس', 'N Gaous', NULL, NULL),
(154, 5, 'وادي الشعبة', 'Oued Chaaba', NULL, NULL),
(155, 5, 'وادي الماء', 'Oued El Ma', NULL, NULL),
(156, 5, 'وادي الطاقة', 'Oued Taga', NULL, NULL),
(157, 5, 'أولاد عمار', 'Ouled Ammar', NULL, NULL),
(158, 5, 'أولاد عوف', 'Ouled Aouf', NULL, NULL),
(159, 5, 'أولاد فاضل', 'Ouled Fadel', NULL, NULL),
(160, 5, 'أولاد سلام', 'Ouled Sellem', NULL, NULL),
(161, 5, 'أولاد سي سليمان', 'Ouled Si Slimane', NULL, NULL),
(162, 5, 'عيون العصافير', 'Ouyoun El Assafir', NULL, NULL),
(163, 5, 'الرحبات', 'Rahbat', NULL, NULL),
(164, 5, 'رأس العيون', 'Ras El Aioun', NULL, NULL),
(165, 5, 'سفيان', 'Sefiane', NULL, NULL),
(166, 5, 'سقانة', 'Seggana', NULL, NULL),
(167, 5, 'سريانة', 'Seriana', NULL, NULL),
(168, 5, 'تكوت', 'T Kout', NULL, NULL),
(169, 5, 'تالخمت', 'Talkhamt', NULL, NULL),
(170, 5, 'تاكسلانت', 'Taxlent', NULL, NULL),
(171, 5, 'تازولت', 'Tazoult', NULL, NULL),
(172, 5, 'ثنية العابد', 'Teniet El Abed', NULL, NULL),
(173, 5, 'تيغانمين', 'Tighanimine', NULL, NULL),
(174, 5, 'تغرغار', 'Tigharghar', NULL, NULL),
(175, 5, 'تيلاطو', 'Tilatou', NULL, NULL),
(176, 5, 'تيمقاد', 'Timgad', NULL, NULL),
(177, 5, 'زانة البيضاء', 'Zanet El Beida', NULL, NULL),
(178, 6, 'أدكار', 'Adekar', NULL, NULL),
(179, 6, 'أيت رزين', 'Ait R\'zine', NULL, NULL),
(180, 6, 'أيت إسماعيل', 'Ait-Smail', NULL, NULL),
(181, 6, 'أقبو', 'Akbou', NULL, NULL),
(182, 6, 'أكفادو', 'Akfadou', NULL, NULL),
(183, 6, 'أمالو', 'Amalou', NULL, NULL),
(184, 6, 'أميزور', 'Amizour', NULL, NULL),
(185, 6, 'أوقاس', 'Aokas', NULL, NULL),
(186, 6, 'برباشة', 'Barbacha', NULL, NULL),
(187, 6, 'بجاية', 'Bejaia', NULL, NULL),
(188, 6, 'بني جليل', 'Beni Djellil', NULL, NULL),
(189, 6, 'بني كسيلة', 'Beni K\'sila', NULL, NULL),
(190, 6, 'بني مليكش', 'Beni-Mallikeche', NULL, NULL),
(191, 6, 'بني معوش', 'Benimaouche', NULL, NULL),
(192, 6, 'بو جليل', 'Boudjellil', NULL, NULL),
(193, 6, 'بوحمزة', 'Bouhamza', NULL, NULL),
(194, 6, 'بوخليفة', 'Boukhelifa', NULL, NULL),
(195, 6, 'شلاطة', 'Chellata', NULL, NULL),
(196, 6, 'شميني', 'Chemini', NULL, NULL),
(197, 6, 'درقينة', 'Darguina', NULL, NULL),
(198, 6, 'ذراع القايد', 'Dra El Caid', NULL, NULL),
(199, 6, 'الفلاي', 'Leflaye', NULL, NULL),
(200, 6, 'القصر', 'El Kseur', NULL, NULL),
(201, 6, 'فناية الماثن', 'Fenaia Il Maten', NULL, NULL),
(202, 6, 'فرعون', 'Feraoun', NULL, NULL),
(203, 6, 'أوزلاقن', 'Ouzellaguen', NULL, NULL),
(204, 6, 'إغيل علي', 'Ighil-Ali', NULL, NULL),
(205, 6, 'اغرم', 'Ighram', NULL, NULL),
(206, 6, 'كنديرة', 'Kendira', NULL, NULL),
(207, 6, 'خراطة', 'Kherrata', NULL, NULL),
(208, 6, 'مسيسنة', 'M\'cisna', NULL, NULL),
(209, 6, 'مالبو', 'Melbou', NULL, NULL),
(210, 6, 'وادي غير', 'Oued Ghir', NULL, NULL),
(211, 6, 'صدوق', 'Seddouk', NULL, NULL),
(212, 6, 'سيدي عياد', 'Sidi Ayad', NULL, NULL),
(213, 6, 'سيدي عيش', 'Sidi-Aich', NULL, NULL),
(214, 6, 'سمعون', 'Smaoun', NULL, NULL),
(215, 6, 'سوق لإثنين', 'Souk El Tenine', NULL, NULL),
(216, 6, 'سوق اوفلا', 'Souk Oufella', NULL, NULL),
(217, 6, 'تالة حمزة', 'Tala Hamza', NULL, NULL),
(218, 6, 'تامقرة', 'Tamokra', NULL, NULL),
(219, 6, 'تامريجت', 'Tamridjet', NULL, NULL),
(220, 6, 'تاوريرت إغيل', 'Taourit Ighil', NULL, NULL),
(221, 6, 'تاسكريوت', 'Taskriout', NULL, NULL),
(222, 6, 'تازمالت', 'Tazmalt', NULL, NULL),
(223, 6, 'طيبان', 'Tibane', NULL, NULL),
(224, 6, 'تيشي', 'Tichy', NULL, NULL),
(225, 6, 'تيفرة', 'Tifra', NULL, NULL),
(226, 6, 'تيمزريت', 'Timezrit', NULL, NULL),
(227, 6, 'تينبدار', 'Tinebdar', NULL, NULL),
(228, 6, 'تيزي نبربر', 'Tizi-N\'berber', NULL, NULL),
(229, 6, 'توجة', 'Toudja', NULL, NULL),
(230, 7, 'عين الناقة', 'Ain Naga', NULL, NULL),
(231, 7, 'عين زعطوط', 'Ain Zaatout', NULL, NULL),
(232, 51, 'بسباس', 'Besbes', NULL, NULL),
(233, 7, 'بسكرة', 'Biskra', NULL, NULL),
(234, 7, 'برج بن عزوز', 'Bordj Ben Azzouz', NULL, NULL),
(235, 7, 'بوشقرون', 'Bouchakroun', NULL, NULL),
(236, 7, 'برانيس', 'Branis', NULL, NULL),
(237, 51, 'الشعيبة', 'Chaiba', NULL, NULL),
(238, 7, 'شتمة', 'Chetma', NULL, NULL),
(239, 7, 'جمورة', 'Djemorah', NULL, NULL),
(240, 51, 'الدوسن', 'Doucen', NULL, NULL),
(241, 7, 'الفيض', 'El Feidh', NULL, NULL),
(242, 7, 'الغروس', 'El Ghrous', NULL, NULL),
(243, 7, 'الحاجب', 'El Hadjab', NULL, NULL),
(244, 7, 'الحوش', 'El Haouch', NULL, NULL),
(245, 7, 'القنطرة', 'El Kantara', NULL, NULL),
(246, 7, 'الوطاية', 'El Outaya', NULL, NULL),
(247, 7, 'فوغالة', 'Foughala', NULL, NULL),
(248, 7, 'خنقة سيدي ناجي', 'Khenguet Sidi Nadji', NULL, NULL),
(249, 7, 'ليشانة', 'Lichana', NULL, NULL),
(250, 7, 'ليوة', 'Lioua', NULL, NULL),
(251, 7, 'مشونش', 'M\'chouneche', NULL, NULL),
(252, 7, 'مخادمة', 'Mekhadma', NULL, NULL),
(253, 7, 'المزيرعة', 'Meziraa', NULL, NULL),
(254, 7, 'مليلي', 'M\'lili', NULL, NULL),
(255, 51, 'أولاد جلال', 'Ouled Djellal', NULL, NULL),
(256, 7, 'أوماش', 'Oumache', NULL, NULL),
(257, 7, 'أورلال', 'Ourlal', NULL, NULL),
(258, 51, 'رأس الميعاد', 'Ras El Miad', NULL, NULL),
(259, 51, 'سيدي  خالد', 'Sidi Khaled', NULL, NULL),
(260, 7, 'سيدي عقبة', 'Sidi Okba', NULL, NULL),
(261, 7, 'طولقة', 'Tolga', NULL, NULL),
(262, 7, 'زريبة الوادي', 'Zeribet El Oued', NULL, NULL),
(263, 8, 'العبادلة', 'Abadla', NULL, NULL),
(264, 8, 'بشار', 'Bechar', NULL, NULL),
(265, 52, 'بني عباس', 'Beni-Abbes', NULL, NULL),
(266, 52, 'بن يخلف', 'Beni-Ikhlef', NULL, NULL),
(267, 8, 'بني ونيف', 'Beni-Ounif', NULL, NULL),
(268, 8, 'بوكايس', 'Boukais', NULL, NULL),
(269, 52, 'الواتة', 'El Ouata', NULL, NULL),
(270, 8, 'عرق فراج', 'Erg-Ferradj', NULL, NULL),
(271, 52, 'إقلي', 'Igli', NULL, NULL),
(272, 8, 'القنادسة', 'Kenadsa', NULL, NULL),
(273, 52, 'كرزاز', 'Kerzaz', NULL, NULL),
(274, 52, 'القصابي', 'Ksabi', NULL, NULL),
(275, 8, 'لحمر', 'Lahmar', NULL, NULL),
(276, 8, 'مشرع هواري بومدين', 'Machraa-Houari-Boumediene', NULL, NULL),
(277, 8, 'المريجة', 'Meridja', NULL, NULL),
(278, 8, 'موغل', 'Mogheul', NULL, NULL),
(279, 52, 'أولاد خضير', 'Ouled-Khodeir', NULL, NULL),
(280, 8, 'تبلبالة', 'Tabelbala', NULL, NULL),
(281, 8, 'تاغيت', 'Taghit', NULL, NULL),
(282, 52, 'تامترت', 'Tamtert', NULL, NULL),
(283, 52, 'تيمودي', 'Timoudi', NULL, NULL),
(284, 9, 'عين الرمانة', 'Ain Romana', NULL, NULL),
(285, 9, 'بني مراد', 'Beni Mered', NULL, NULL),
(286, 9, 'بني تامو', 'Beni-Tamou', NULL, NULL),
(287, 9, 'بن خليل', 'Benkhelil', NULL, NULL),
(288, 9, 'البليدة', 'Blida', NULL, NULL),
(289, 9, 'بوعرفة', 'Bouarfa', NULL, NULL),
(290, 9, 'بوفاريك', 'Boufarik', NULL, NULL),
(291, 9, 'بوقرة', 'Bougara', NULL, NULL),
(292, 9, 'بوعينان', 'Bouinan', NULL, NULL),
(293, 9, 'الشبلي', 'Chebli', NULL, NULL),
(294, 9, 'الشفة', 'Chiffa', NULL, NULL),
(295, 9, 'الشريعة', 'Chrea', NULL, NULL),
(296, 9, 'جبابرة', 'Djebabra', NULL, NULL),
(297, 9, 'العفرون', 'El-Affroun', NULL, NULL),
(298, 9, 'قرواو', 'Guerrouaou', NULL, NULL),
(299, 9, 'حمام ملوان', 'Hammam Elouane', NULL, NULL),
(300, 9, 'الأربعاء', 'Larbaa', NULL, NULL),
(301, 9, 'مفتاح', 'Meftah', NULL, NULL),
(302, 9, 'موزاية', 'Mouzaia', NULL, NULL),
(303, 9, 'وادي جر', 'Oued  Djer', NULL, NULL),
(304, 9, 'وادي العلايق', 'Oued El Alleug', NULL, NULL),
(305, 9, 'اولاد سلامة', 'Ouled Slama', NULL, NULL),
(306, 9, 'أولاد يعيش', 'Ouled Yaich', NULL, NULL),
(307, 9, 'صوحان', 'Souhane', NULL, NULL),
(308, 9, 'الصومعة', 'Soumaa', NULL, NULL),
(309, 10, 'أغبالو', 'Aghbalou', NULL, NULL),
(310, 10, 'أهل القصر', 'Ahl El Ksar', NULL, NULL),
(311, 10, 'عين الحجر', 'Ain El Hadjar', NULL, NULL),
(312, 10, 'عين العلوي', 'Ain Laloui', NULL, NULL),
(313, 10, 'عين الترك', 'Ain Turk', NULL, NULL),
(314, 10, 'عين بسام', 'Ain-Bessem', NULL, NULL),
(315, 10, 'أيت لعزيز', 'Ait Laaziz', NULL, NULL),
(316, 10, 'أعمر', 'Aomar', NULL, NULL),
(317, 10, 'بشلول', 'Bechloul', NULL, NULL),
(318, 10, 'بئر غبالو', 'Bir Ghbalou', NULL, NULL),
(319, 10, 'برج أوخريص', 'Bordj Okhriss', NULL, NULL),
(320, 10, 'بودربالة', 'Bouderbala', NULL, NULL),
(321, 10, 'البويرة', 'Bouira', NULL, NULL),
(322, 10, 'بوكرم', 'Boukram', NULL, NULL),
(323, 10, 'شرفة', 'Chorfa', NULL, NULL),
(324, 10, 'الدشمية', 'Dechmia', NULL, NULL),
(325, 10, 'ديرة', 'Dirah', NULL, NULL),
(326, 10, 'جباحية', 'Djebahia', NULL, NULL),
(327, 10, 'العجيبة', 'El Adjiba', NULL, NULL),
(328, 10, 'الأسنام', 'El Asnam', NULL, NULL),
(329, 10, 'الهاشمية', 'El Hachimia', NULL, NULL),
(330, 10, 'الخبوزية', 'El Khabouzia', NULL, NULL),
(331, 10, 'الحاكمية', 'El-Hakimia', NULL, NULL),
(332, 10, 'المقراني', 'El-Mokrani', NULL, NULL),
(333, 10, 'قرومة', 'Guerrouma', NULL, NULL),
(334, 10, 'الحجرة الزرقاء', 'Hadjera Zerga', NULL, NULL),
(335, 10, 'حيزر', 'Haizer', NULL, NULL),
(336, 10, 'حنيف', 'Hanif', NULL, NULL),
(337, 10, 'قادرية', 'Kadiria', NULL, NULL),
(338, 10, 'الأخضرية', 'Lakhdaria', NULL, NULL),
(339, 10, 'أمشدالة', 'M Chedallah', NULL, NULL),
(340, 10, 'معلة', 'Maala', NULL, NULL),
(341, 10, 'المعمورة', 'Maamora', NULL, NULL),
(342, 10, 'مزدور', 'Mezdour', NULL, NULL),
(343, 10, 'وادي البردي', 'Oued El Berdi', NULL, NULL),
(344, 10, 'أولاد راشد', 'Ouled Rached', NULL, NULL),
(345, 10, 'روراوة', 'Raouraoua', NULL, NULL),
(346, 10, 'ريدان', 'Ridane', NULL, NULL),
(347, 10, 'سحاريج', 'Saharidj', NULL, NULL),
(348, 10, 'سوق الخميس', 'Souk El Khemis', NULL, NULL),
(349, 10, 'سور الغزلان', 'Sour El Ghozlane', NULL, NULL),
(350, 10, 'تاغزوت', 'Taghzout', NULL, NULL),
(351, 10, 'تاقديت', 'Taguedite', NULL, NULL),
(352, 10, 'آث  منصور', 'Ath Mansour', NULL, NULL),
(353, 10, 'زبربر', 'Z\'barbar (El Isseri )', NULL, NULL),
(354, 11, 'ابلسة', 'Abelsa', NULL, NULL),
(355, 11, 'عين امقل', 'Ain Amguel', NULL, NULL),
(356, 54, 'عين قزام', 'Ain Guezzam', NULL, NULL),
(357, 53, 'عين صالح', 'Ain Salah', NULL, NULL),
(358, 53, 'فقارة الزوى', 'Foggaret Ezzoua', NULL, NULL),
(359, 11, 'أدلس', 'Idles', NULL, NULL),
(360, 53, 'إينغر', 'Inghar', NULL, NULL),
(361, 11, 'تمنراست', 'Tamanrasset', NULL, NULL),
(362, 11, 'تاظروك', 'Tazrouk', NULL, NULL),
(363, 54, 'تين زواتين', 'Tin Zouatine', NULL, NULL),
(364, 12, 'عين الزرقاء', 'Ain Zerga', NULL, NULL),
(365, 12, 'بجن', 'Bedjene', NULL, NULL),
(366, 12, 'بكارية', 'Bekkaria', NULL, NULL),
(367, 12, 'بئر الذهب', 'Bir Dheheb', NULL, NULL),
(368, 12, 'بئر مقدم', 'Bir Mokkadem', NULL, NULL),
(369, 12, 'بئر العاتر', 'Bir-El-Ater', NULL, NULL),
(370, 12, 'بوخضرة', 'Boukhadra', NULL, NULL),
(371, 12, 'بولحاف الدير', 'Boulhaf Dyr', NULL, NULL),
(372, 12, 'الشريعة', 'Cheria', NULL, NULL),
(373, 12, 'الكويف', 'El Kouif', NULL, NULL),
(374, 12, 'الماء الابيض', 'El Malabiod', NULL, NULL),
(375, 12, 'المريج', 'El Meridj', NULL, NULL),
(376, 12, 'المزرعة', 'El Mezeraa', NULL, NULL),
(377, 12, 'العقلة', 'El Ogla', NULL, NULL),
(378, 12, 'العقلة المالحة', 'El Ogla El Malha', NULL, NULL),
(379, 12, 'العوينات', 'El-Aouinet', NULL, NULL),
(380, 12, 'الحويجبات', 'El-Houidjbet', NULL, NULL),
(381, 12, 'فركان', 'Ferkane', NULL, NULL),
(382, 12, 'قريقر', 'Guorriguer', NULL, NULL),
(383, 12, 'الحمامات', 'Hammamet', NULL, NULL),
(384, 12, 'مرسط', 'Morsott', NULL, NULL),
(385, 12, 'نقرين', 'Negrine', NULL, NULL),
(386, 12, 'الونزة', 'Ouenza', NULL, NULL),
(387, 12, 'أم علي', 'Oum Ali', NULL, NULL),
(388, 12, 'صفصاف الوسرى', 'Saf Saf El Ouesra', NULL, NULL),
(389, 12, 'سطح قنطيس', 'Stah Guentis', NULL, NULL),
(390, 12, 'تبسة', 'Tebessa', NULL, NULL),
(391, 12, 'ثليجان', 'Telidjen', NULL, NULL),
(392, 13, 'عين فتاح', 'Ain Fetah', NULL, NULL),
(393, 13, 'عين فزة', 'Ain Fezza', NULL, NULL),
(394, 13, 'عين غرابة', 'Ain Ghoraba', NULL, NULL),
(395, 13, 'عين الكبيرة', 'Ain Kebira', NULL, NULL),
(396, 13, 'عين النحالة', 'Ain Nehala', NULL, NULL),
(397, 13, 'عين تالوت', 'Ain Tellout', NULL, NULL),
(398, 13, 'عين يوسف', 'Ain Youcef', NULL, NULL),
(399, 13, 'عمير', 'Amieur', NULL, NULL),
(400, 13, 'باب العسة', 'Bab El Assa', NULL, NULL),
(401, 13, 'بني بهدل', 'Beni Bahdel', NULL, NULL),
(402, 13, 'بني بوسعيد', 'Beni Boussaid', NULL, NULL),
(403, 13, 'بني خلاد', 'Beni Khellad', NULL, NULL),
(404, 13, 'بني مستر', 'Beni Mester', NULL, NULL),
(405, 13, 'بني وارسوس', 'Beni Ouarsous', NULL, NULL),
(406, 13, 'بني صميل', 'Beni Smiel', NULL, NULL),
(407, 13, 'بني سنوس', 'Beni Snous', NULL, NULL),
(408, 13, 'بن سكران', 'Bensekrane', NULL, NULL),
(409, 13, 'بوحلو', 'Bouhlou', NULL, NULL),
(410, 13, 'البويهي', 'Bouihi', NULL, NULL),
(411, 13, 'شتوان', 'Chetouane', NULL, NULL),
(412, 13, 'دار يغمراسن', 'Dar Yaghmoracen', NULL, NULL),
(413, 13, 'جبالة', 'Djebala', NULL, NULL),
(414, 13, 'العريشة', 'El Aricha', NULL, NULL),
(415, 13, 'العزايل', 'Azail', NULL, NULL),
(416, 13, 'الفحول', 'El Fehoul', NULL, NULL),
(417, 13, 'القور', 'El Gor', NULL, NULL),
(418, 13, 'فلاوسن', 'Fellaoucene', NULL, NULL),
(419, 13, 'الغزوات', 'Ghazaouet', NULL, NULL),
(420, 13, 'حمام بوغرارة', 'Hammam Boughrara', NULL, NULL),
(421, 13, 'الحناية', 'Hennaya', NULL, NULL),
(422, 13, 'هنين', 'Honnaine', NULL, NULL),
(423, 13, 'مغنية', 'Maghnia', NULL, NULL),
(424, 13, 'منصورة', 'Mansourah', NULL, NULL),
(425, 13, 'مرسى بن مهيدي', 'Marsa Ben M\'hidi', NULL, NULL),
(426, 13, 'مسيردة الفواقة', 'M\'sirda Fouaga', NULL, NULL),
(427, 13, 'ندرومة', 'Nedroma', NULL, NULL),
(428, 13, 'وادي الخضر', 'Oued Lakhdar', NULL, NULL),
(429, 13, 'أولاد ميمون', 'Ouled Mimoun', NULL, NULL),
(430, 13, 'أولاد رياح', 'Ouled Riyah', NULL, NULL),
(431, 13, 'الرمشي', 'Remchi', NULL, NULL),
(432, 13, 'صبرة', 'Sabra', NULL, NULL),
(433, 13, 'سبعة شيوخ', 'Sebbaa Chioukh', NULL, NULL),
(434, 13, 'سبدو', 'Sebdou', NULL, NULL),
(435, 13, 'سيدي العبدلي', 'Sidi Abdelli', NULL, NULL),
(436, 13, 'سيدي الجيلالي', 'Sidi Djillali', NULL, NULL),
(437, 13, 'سيدي مجاهد', 'Sidi Medjahed', NULL, NULL),
(438, 13, 'السواحلية', 'Souahlia', NULL, NULL),
(439, 13, 'السواني', 'Souani', NULL, NULL),
(440, 13, 'سوق الثلاثاء', 'Souk Tleta', NULL, NULL),
(441, 13, 'تيرني بني هديل', 'Terny Beni Hediel', NULL, NULL),
(442, 13, 'تيانت', 'Tianet', NULL, NULL),
(443, 13, 'تلمسان', 'Tlemcen', NULL, NULL),
(444, 13, 'زناتة', 'Zenata', NULL, NULL),
(445, 14, 'عين بوشقيف', 'Ain Bouchekif', NULL, NULL),
(446, 14, 'عين الذهب', 'Ain Deheb', NULL, NULL),
(447, 14, 'عين دزاريت', 'Ain Dzarit', NULL, NULL),
(448, 14, 'عين الحديد', 'Ain El Hadid', NULL, NULL),
(449, 14, 'عين كرمس', 'Ain Kermes', NULL, NULL),
(450, 14, 'بوقرة', 'Bougara', NULL, NULL),
(451, 14, 'شحيمة', 'Chehaima', NULL, NULL),
(452, 14, 'دحموني', 'Dahmouni', NULL, NULL),
(453, 14, 'جبيلات الرصفاء', 'Djebilet Rosfa', NULL, NULL),
(454, 14, 'جيلالي بن عمار', 'Djillali Ben Amar', NULL, NULL),
(455, 14, 'الفايجة', 'Faidja', NULL, NULL),
(456, 14, 'فرندة', 'Frenda', NULL, NULL),
(457, 14, 'قرطوفة', 'Guertoufa', NULL, NULL),
(458, 14, 'حمادية', 'Hamadia', NULL, NULL),
(459, 14, 'قصر الشلالة', 'Ksar Chellala', NULL, NULL),
(460, 14, 'مادنة', 'Madna', NULL, NULL),
(461, 14, 'مهدية', 'Mahdia', NULL, NULL),
(462, 14, 'مشرع الصفا', 'Mechraa Safa', NULL, NULL),
(463, 14, 'مدريسة', 'Medrissa', NULL, NULL),
(464, 14, 'مدروسة', 'Medroussa', NULL, NULL),
(465, 14, 'مغيلة', 'Meghila', NULL, NULL),
(466, 14, 'ملاكو', 'Mellakou', NULL, NULL),
(467, 14, 'الناظورة', 'Nadorah', NULL, NULL),
(468, 14, 'النعيمة', 'Naima', NULL, NULL),
(469, 14, 'وادي ليلي', 'Oued Lilli', NULL, NULL),
(470, 14, 'الرحوية', 'Rahouia', NULL, NULL),
(471, 14, 'الرشايقة', 'Rechaiga', NULL, NULL),
(472, 14, 'السبعين', 'Sebaine', NULL, NULL),
(473, 14, 'السبت', 'Sebt', NULL, NULL),
(474, 14, 'سرغين', 'Serghine', NULL, NULL),
(475, 14, 'سي عبد الغني', 'Si Abdelghani', NULL, NULL),
(476, 14, 'سيدي عبد الرحمن', 'Sidi Abderrahmane', NULL, NULL),
(477, 14, 'سيدي علي ملال', 'Sidi Ali Mellal', NULL, NULL),
(478, 14, 'سيدي بختي', 'Sidi Bakhti', NULL, NULL),
(479, 14, 'سيدي حسني', 'Sidi Hosni', NULL, NULL),
(480, 14, 'السوقر', 'Sougueur', NULL, NULL),
(481, 14, 'تاقدمت', 'Tagdempt', NULL, NULL),
(482, 14, 'تخمرت', 'Takhemaret', NULL, NULL),
(483, 14, 'تيارت', 'Tiaret', NULL, NULL),
(484, 14, 'تيدة', 'Tidda', NULL, NULL),
(485, 14, 'توسنينة', 'Tousnina', NULL, NULL),
(486, 14, 'زمالة  الأمير عبد القادر', 'Zmalet El Emir Abdelkade', NULL, NULL),
(487, 15, 'أبي يوسف', 'Abi-Youcef', NULL, NULL),
(488, 15, 'أغريب', 'Aghribs', NULL, NULL),
(489, 15, 'أقني قغران', 'Agouni-Gueghrane', NULL, NULL),
(490, 15, 'عين الحمام', 'Ain-El-Hammam', NULL, NULL),
(491, 15, 'عين الزاوية', 'Ain-Zaouia', NULL, NULL),
(492, 15, 'أيت عقـواشة', 'Ait Aggouacha', NULL, NULL),
(493, 15, 'أيت بــوادو', 'Ait Bouaddou', NULL, NULL),
(494, 15, 'أيت بومهدي', 'Ait Boumahdi', NULL, NULL),
(495, 15, 'أيت خليلي', 'Ait Khellili', NULL, NULL),
(496, 15, 'أيت يحي موسى', 'Ait Yahia Moussa', NULL, NULL),
(497, 15, 'أيت عيسى ميمون', 'Ait-Aissa-Mimoun', NULL, NULL),
(498, 15, 'أيت شافع', 'Ait-Chafaa', NULL, NULL),
(499, 15, 'أيت محمود', 'Ait-Mahmoud', NULL, NULL),
(500, 15, 'أيت  أومالو', 'Ait-Oumalou', NULL, NULL),
(501, 15, 'أيت تودرت', 'Ait-Toudert', NULL, NULL),
(502, 15, 'أيت يحيى', 'Ait-Yahia', NULL, NULL),
(503, 15, 'اقبيل', 'Akbil', NULL, NULL),
(504, 15, 'أقرو', 'Akerrou', NULL, NULL),
(505, 15, 'أسي يوسف', 'Assi-Youcef', NULL, NULL),
(506, 15, 'عزازقة', 'Azazga', NULL, NULL),
(507, 15, 'أزفون', 'Azeffoun', NULL, NULL),
(508, 15, 'بنــــي زمنزار', 'Beni Zmenzer', NULL, NULL),
(509, 15, 'بني عيسي', 'Beni-Aissi', NULL, NULL),
(510, 15, 'بني دوالة', 'Beni-Douala', NULL, NULL),
(511, 15, 'بني يني', 'Beni-Yenni', NULL, NULL),
(512, 15, 'بني زيكــي', 'Beni-Zikki', NULL, NULL),
(513, 15, 'بوغني', 'Boghni', NULL, NULL),
(514, 15, 'بوجيمة', 'Boudjima', NULL, NULL),
(515, 15, 'بونوح', 'Bounouh', NULL, NULL),
(516, 15, 'بوزقــن', 'Bouzeguene', NULL, NULL),
(517, 15, 'ذراع بن خدة', 'Draa-Ben-Khedda', NULL, NULL),
(518, 15, 'ذراع الميزان', 'Draa-El-Mizan', NULL, NULL),
(519, 15, 'فريحة', 'Freha', NULL, NULL),
(520, 15, 'فريقات', 'Frikat', NULL, NULL),
(521, 15, 'إبودرارن', 'Iboudrarene', NULL, NULL),
(522, 15, 'إيجــار', 'Idjeur', NULL, NULL),
(523, 15, 'إفــرحــونان', 'Iferhounene', NULL, NULL),
(524, 15, 'إيفيغاء', 'Ifigha', NULL, NULL),
(525, 15, 'إفليـــسن', 'Iflissen', NULL, NULL),
(526, 15, 'إيلـيــلتـن', 'Illilten', NULL, NULL),
(527, 15, 'إيلولة أومـــالو', 'Illoula Oumalou', NULL, NULL),
(528, 15, 'إمســوحال', 'Imsouhal', NULL, NULL),
(529, 15, 'إيرجـــن', 'Irdjen', NULL, NULL),
(530, 15, 'الأربعــاء ناث إيراثن', 'Larbaa Nath Irathen', NULL, NULL),
(531, 15, 'معـــاتقة', 'Maatkas', NULL, NULL),
(532, 15, 'ماكودة', 'Makouda', NULL, NULL),
(533, 15, 'مشطراس', 'Mechtras', NULL, NULL),
(534, 15, 'مقــلع', 'Mekla', NULL, NULL),
(535, 15, 'ميزرانـــة', 'Mizrana', NULL, NULL),
(536, 15, 'مكيرة', 'M\'kira', NULL, NULL),
(537, 15, 'واسيف', 'Ouacif', NULL, NULL),
(538, 15, 'واضية', 'Ouadhias', NULL, NULL),
(539, 15, 'واقنون', 'Ouaguenoun', NULL, NULL),
(540, 15, 'سيدي نعمان', 'Sidi Namane', NULL, NULL),
(541, 15, 'صوامـــع', 'Souama', NULL, NULL),
(542, 15, 'سوق الإثنين', 'Souk-El-Tenine', NULL, NULL),
(543, 15, 'تادمايت', 'Tadmait', NULL, NULL),
(544, 15, 'تيقـزيرت', 'Tigzirt', NULL, NULL),
(545, 15, 'تيمـيزار', 'Timizart', NULL, NULL),
(546, 15, 'تيرمتين', 'Tirmitine', NULL, NULL),
(547, 15, 'تيزي نثلاثة', 'Tizi N\'tleta', NULL, NULL),
(548, 15, 'تيزي غنيف', 'Tizi-Gheniff', NULL, NULL),
(549, 15, 'تيزي وزو', 'Tizi-Ouzou', NULL, NULL),
(550, 15, 'تيزي راشد', 'Tizi-Rached', NULL, NULL),
(551, 15, 'إعــكورن', 'Yakourene', NULL, NULL),
(552, 15, 'يطــافن', 'Yatafene', NULL, NULL),
(553, 15, 'زكري', 'Zekri', NULL, NULL),
(554, 16, 'عين بنيان', 'Ain Benian', NULL, NULL),
(555, 16, 'عين طاية', 'Ain Taya', NULL, NULL),
(556, 16, 'الجزائر الوسطى', 'Alger Centre', NULL, NULL),
(557, 16, 'باب الوادي', 'Bab El Oued', NULL, NULL),
(558, 16, 'باب الزوار', 'Bab Ezzouar', NULL, NULL),
(559, 16, 'بابا حسن', 'Baba Hassen', NULL, NULL),
(560, 16, 'باش جراح', 'Bachedjerah', NULL, NULL),
(561, 16, 'براقي', 'Baraki', NULL, NULL),
(562, 16, 'ابن عكنون', 'Ben Aknoun', NULL, NULL),
(563, 16, 'بني مسوس', 'Beni Messous', NULL, NULL),
(564, 16, 'بئر مراد رايس', 'Bir Mourad Rais', NULL, NULL),
(565, 16, 'بئر خادم', 'Birkhadem', NULL, NULL),
(566, 16, 'بئر توتة', 'Bir Touta', NULL, NULL),
(567, 16, 'بولوغين بن زيري', 'Bologhine Ibnou Ziri', NULL, NULL),
(568, 16, 'برج البحري', 'Bordj El Bahri', NULL, NULL),
(569, 16, 'برج الكيفان', 'Bordj El Kiffan', NULL, NULL),
(570, 16, 'بوروبة', 'Bourouba', NULL, NULL),
(571, 16, 'بوزريعة', 'Bouzareah', NULL, NULL),
(572, 16, 'القصبة', 'Casbah', NULL, NULL),
(573, 16, 'الشراقة', 'Cheraga', NULL, NULL),
(574, 16, 'الدار البيضاء', 'Dar El Beida', NULL, NULL),
(575, 16, 'دالي ابراهيم', 'Dely Ibrahim', NULL, NULL),
(576, 16, 'جسر قسنطينة', 'Djasr Kasentina', NULL, NULL),
(577, 16, 'الدويرة', 'Douira', NULL, NULL),
(578, 16, 'الدرارية', 'Draria', NULL, NULL),
(579, 16, 'العاشور', 'El Achour', NULL, NULL),
(580, 16, 'الابيار', 'El Biar', NULL, NULL),
(581, 16, 'الحراش', 'El Harrach', NULL, NULL),
(582, 16, 'المدنية', 'El Madania', NULL, NULL),
(583, 16, 'المغارية', 'El Magharia', NULL, NULL),
(584, 16, 'المرسى', 'El Marsa', NULL, NULL),
(585, 16, 'المرادية', 'El Mouradia', NULL, NULL),
(586, 16, 'الحمامات', 'Hammamet', NULL, NULL),
(587, 16, 'هراوة', 'Herraoua', NULL, NULL),
(588, 16, 'حسين داي', 'Hussein Dey', NULL, NULL),
(589, 16, 'حيدرة', 'Hydra', NULL, NULL),
(590, 16, 'الخرايسية', 'Khraissia', NULL, NULL),
(591, 16, 'القبة', 'Kouba', NULL, NULL),
(592, 16, 'الكاليتوس', 'Les Eucalyptus', NULL, NULL),
(593, 16, 'المعالمة', 'Maalma', NULL, NULL),
(594, 16, 'محمد بلوزداد', 'Mohamed Belouzdad', NULL, NULL),
(595, 16, 'المحمدية', 'Mohammadia', NULL, NULL),
(596, 16, 'وادي قريش', 'Oued Koriche', NULL, NULL),
(597, 16, 'وادي السمار', 'Oued Smar', NULL, NULL),
(598, 16, 'اولاد شبل', 'Ouled Chebel', NULL, NULL),
(599, 16, 'اولاد فايت', 'Ouled Fayet', NULL, NULL),
(600, 16, 'الرحمانية', 'Rahmania', NULL, NULL),
(601, 16, 'الرايس حميدو', 'Rais Hamidou', NULL, NULL),
(602, 16, 'رغاية', 'Reghaia', NULL, NULL),
(603, 16, 'الرويبة', 'Rouiba', NULL, NULL),
(604, 16, 'السحاولة', 'Sehaoula', NULL, NULL),
(605, 16, 'سيدي امحمد', 'Sidi M\'hamed', NULL, NULL),
(606, 16, 'سيدي موسى', 'Sidi Moussa', NULL, NULL),
(607, 16, 'سويدانية', 'Souidania', NULL, NULL),
(608, 16, 'سطاوالي', 'Staoueli', NULL, NULL),
(609, 16, 'تسالة المرجة', 'Tessala El Merdja', NULL, NULL),
(610, 16, 'زرالدة', 'Zeralda', NULL, NULL),
(611, 17, 'عين الشهداء', 'Ain Chouhada', NULL, NULL),
(612, 17, 'عين الإبل', 'Ain El Ibel', NULL, NULL),
(613, 17, 'عين فقه', 'Ain Fekka', NULL, NULL),
(614, 17, 'عين معبد', 'Ain Maabed', NULL, NULL),
(615, 17, 'عين وسارة', 'Ain Oussera', NULL, NULL),
(616, 17, 'عمورة', 'Amourah', NULL, NULL),
(617, 17, 'بنهار', 'Benhar', NULL, NULL),
(618, 17, 'بن يعقوب', 'Benyagoub', NULL, NULL),
(619, 17, 'بيرين', 'Birine', NULL, NULL),
(620, 17, 'بويرة الأحداب', 'Bouira Lahdab', NULL, NULL),
(621, 17, 'الشارف', 'Charef', NULL, NULL),
(622, 17, 'دار الشيوخ', 'Dar Chioukh', NULL, NULL),
(623, 17, 'دلدول', 'Deldoul', NULL, NULL),
(624, 17, 'الجلفة', 'Djelfa', NULL, NULL),
(625, 17, 'دويس', 'Douis', NULL, NULL),
(626, 17, 'القديد', 'El Guedid', NULL, NULL),
(627, 17, 'الادريسية', 'El Idrissia', NULL, NULL),
(628, 17, 'الخميس', 'El Khemis', NULL, NULL),
(629, 17, 'فيض البطمة', 'Faidh El Botma', NULL, NULL),
(630, 17, 'قرنيني', 'Guernini', NULL, NULL),
(631, 17, 'قطارة', 'Guettara', NULL, NULL),
(632, 17, 'حد الصحاري', 'Had Sahary', NULL, NULL),
(633, 17, 'حاسي بحبح', 'Hassi Bahbah', NULL, NULL),
(634, 17, 'حاسي العش', 'Hassi El Euch', NULL, NULL),
(635, 17, 'حاسي فدول', 'Hassi Fedoul', NULL, NULL),
(636, 17, 'مسعد', 'Messaad', NULL, NULL),
(637, 17, 'مليليحة', 'M\'liliha', NULL, NULL),
(638, 17, 'مجبارة', 'Moudjebara', NULL, NULL),
(639, 17, 'أم العظام', 'Oum Laadham', NULL, NULL),
(640, 17, 'سد الرحال', 'Sed Rahal', NULL, NULL),
(641, 17, 'سلمانة', 'Selmana', NULL, NULL),
(642, 17, 'سيدي بايزيد', 'Sidi Baizid', NULL, NULL),
(643, 17, 'سيدي لعجال', 'Sidi Laadjel', NULL, NULL),
(644, 17, 'تعظميت', 'Taadmit', NULL, NULL),
(645, 17, 'زعفران', 'Zaafrane', NULL, NULL),
(646, 17, 'زكار', 'Zaccar', NULL, NULL),
(647, 18, 'برج الطهر', 'Bordj T\'har', NULL, NULL),
(648, 18, 'بودريعة بني  ياجيس', 'Boudria Beniyadjis', NULL, NULL),
(649, 18, 'بوراوي بلهادف', 'Bouraoui Belhadef', NULL, NULL),
(650, 18, 'بوسيف أولاد عسكر', 'Boussif Ouled Askeur', NULL, NULL),
(651, 18, 'الشحنة', 'Chahna', NULL, NULL),
(652, 18, 'الشقفة', 'Chekfa', NULL, NULL),
(653, 18, 'الجمعة بني حبيبي', 'Djemaa Beni Habibi', NULL, NULL),
(654, 18, 'جيملة', 'Djimla', NULL, NULL),
(655, 18, 'العنصر', 'El Ancer', NULL, NULL),
(656, 18, 'العوانة', 'El Aouana', NULL, NULL),
(657, 18, 'القنار نشفي', 'El Kennar Nouchfi', NULL, NULL),
(658, 18, 'الميلية', 'El Milia', NULL, NULL),
(659, 18, 'الامير عبد القادر', 'Emir Abdelkader', NULL, NULL),
(660, 18, 'أراقن سويسي', 'Erraguene Souissi', NULL, NULL),
(661, 18, 'غبالة', 'Ghebala', NULL, NULL),
(662, 18, 'جيجل', 'Jijel', NULL, NULL),
(663, 18, 'قاوس', 'Kaous', NULL, NULL),
(664, 18, 'خيري واد عجول', 'Khiri Oued Adjoul', NULL, NULL),
(665, 18, 'وجانة', 'Oudjana', NULL, NULL),
(666, 18, 'أولاد رابح', 'Ouled Rabah', NULL, NULL),
(667, 18, 'أولاد يحيى خدروش', 'Ouled Yahia Khadrouch', NULL, NULL),
(668, 18, 'سلمى بن زيادة', 'Selma Benziada', NULL, NULL),
(669, 18, 'السطارة', 'Settara', NULL, NULL),
(670, 18, 'سيدي عبد العزيز', 'Sidi Abdelaziz', NULL, NULL),
(671, 18, 'سيدي معروف', 'Sidi Marouf', NULL, NULL),
(672, 18, 'الطاهير', 'Taher', NULL, NULL),
(673, 18, 'تاكسنة', 'Texenna', NULL, NULL),
(674, 18, 'زيامة منصورية', 'Ziama Mansouriah', NULL, NULL),
(675, 19, 'عين عباسة', 'Ain Abessa', NULL, NULL),
(676, 19, 'عين أرنات', 'Ain Arnat', NULL, NULL),
(677, 19, 'عين أزال', 'Ain Azel', NULL, NULL),
(678, 19, 'عين الكبيرة', 'Ain El Kebira', NULL, NULL),
(679, 19, 'عين الحجر', 'Ain Lahdjar', NULL, NULL),
(680, 19, 'عين ولمان', 'Ain Oulmene', NULL, NULL),
(681, 19, 'عين لقراج', 'Ain-Legradj', NULL, NULL),
(682, 19, 'عين الروى', 'Ain-Roua', NULL, NULL),
(683, 19, 'عين السبت', 'Ain-Sebt', NULL, NULL),
(684, 19, 'أيت نوال مزادة', 'Ait Naoual Mezada', NULL, NULL),
(685, 19, 'ايت تيزي', 'Ait-Tizi', NULL, NULL),
(686, 19, 'عموشة', 'Amoucha', NULL, NULL),
(687, 19, 'بابور', 'Babor', NULL, NULL),
(688, 19, 'بازر سكرة', 'Bazer-Sakra', NULL, NULL),
(689, 19, 'بيضاء برج', 'Beidha Bordj', NULL, NULL),
(690, 19, 'بلاعة', 'Bellaa', NULL, NULL),
(691, 19, 'بني شبانة', 'Beni Chebana', NULL, NULL),
(692, 19, 'بني فودة', 'Beni Fouda', NULL, NULL),
(693, 19, 'بني ورتيلان', 'Beni Ourtilane', NULL, NULL),
(694, 19, 'بني وسين', 'Beni Oussine', NULL, NULL),
(695, 19, 'بني عزيز', 'Beni-Aziz', NULL, NULL),
(696, 19, 'بني موحلي', 'Beni-Mouhli', NULL, NULL),
(697, 19, 'بئر حدادة', 'Bir Haddada', NULL, NULL),
(698, 19, 'بئر العرش', 'Bir-El-Arch', NULL, NULL),
(699, 19, 'بوعنداس', 'Bouandas', NULL, NULL),
(700, 19, 'بوقاعة', 'Bougaa', NULL, NULL),
(701, 19, 'بوسلام', 'Bousselam', NULL, NULL),
(702, 19, 'بوطالب', 'Boutaleb', NULL, NULL),
(703, 19, 'الدهامشة', 'Dehamcha', NULL, NULL),
(704, 19, 'جميلة', 'Djemila', NULL, NULL),
(705, 19, 'ذراع قبيلة', 'Draa-Kebila', NULL, NULL),
(706, 19, 'العلمة', 'El Eulma', NULL, NULL),
(707, 19, 'أوريسيا', 'El Ouricia', NULL, NULL),
(708, 19, 'الولجة', 'El-Ouldja', NULL, NULL),
(709, 19, 'قلال', 'Guellal', NULL, NULL),
(710, 19, 'قلتة زرقاء', 'Guelta Zerka', NULL, NULL),
(711, 19, 'قنزات', 'Guenzet', NULL, NULL),
(712, 19, 'قجال', 'Guidjel', NULL, NULL),
(713, 19, 'حمام السخنة', 'Hamam Soukhna', NULL, NULL),
(714, 19, 'الحامة', 'Hamma', NULL, NULL),
(715, 19, 'حمام قرقور', 'Hammam Guergour', NULL, NULL),
(716, 19, 'حربيل', 'Harbil', NULL, NULL),
(717, 19, 'قصر الابطال', 'Kasr El Abtal', NULL, NULL),
(718, 19, 'معاوية', 'Maaouia', NULL, NULL),
(719, 19, 'ماوكلان', 'Maouaklane', NULL, NULL),
(720, 19, 'مزلوق', 'Mezloug', NULL, NULL),
(721, 19, 'واد البارد', 'Oued El Bared', NULL, NULL),
(722, 19, 'أولاد عدوان', 'Ouled Addouane', NULL, NULL),
(723, 19, 'أولاد صابر', 'Ouled Sabor', NULL, NULL),
(724, 19, 'أولاد سي أحمد', 'Ouled Si Ahmed', NULL, NULL),
(725, 19, 'أولاد تبان', 'Ouled Tebben', NULL, NULL),
(726, 19, 'الرصفة', 'Rosfa', NULL, NULL),
(727, 19, 'صالح باي', 'Salah Bey', NULL, NULL),
(728, 19, 'سرج الغول', 'Serdj-El-Ghoul', NULL, NULL),
(729, 19, 'سطيف', 'Setif', NULL, NULL),
(730, 19, 'تاشودة', 'Tachouda', NULL, NULL),
(731, 19, 'تالة إيفاسن', 'Tala-Ifacene', NULL, NULL),
(732, 19, 'الطاية', 'Taya', NULL, NULL),
(733, 19, 'التلة', 'Tella', NULL, NULL),
(734, 19, 'تيزي نبشار', 'Tizi N\'bechar', NULL, NULL),
(735, 20, 'عين الحجر', 'Ain El Hadjar', NULL, NULL),
(736, 20, 'عين السخونة', 'Ain Sekhouna', NULL, NULL),
(737, 20, 'عين السلطان', 'Ain Soltane', NULL, NULL),
(738, 20, 'دوي ثابت', 'Doui Thabet', NULL, NULL),
(739, 20, 'الحساسنة', 'El Hassasna', NULL, NULL),
(740, 20, 'هونت', 'Hounet', NULL, NULL),
(741, 20, 'المعمورة', 'Maamora', NULL, NULL),
(742, 20, 'مولاي العربي', 'Moulay Larbi', NULL, NULL),
(743, 20, 'أولاد إبراهيم', 'Ouled Brahim', NULL, NULL),
(744, 20, 'أولاد خالد', 'Ouled Khaled', NULL, NULL),
(745, 20, 'سعيدة', 'Saida', NULL, NULL),
(746, 20, 'سيدي احمد', 'Sidi Ahmed', NULL, NULL),
(747, 20, 'سيدي عمر', 'Sidi Amar', NULL, NULL),
(748, 20, 'سيدي بوبكر', 'Sidi Boubekeur', NULL, NULL),
(749, 20, 'تيرسين', 'Tircine', NULL, NULL),
(750, 20, 'يوب', 'Youb', NULL, NULL),
(751, 21, 'عين بوزيان', 'Ain Bouziane', NULL, NULL),
(752, 21, 'عين شرشار', 'Ain Charchar', NULL, NULL),
(753, 21, 'عين قشرة', 'Ain Kechra', NULL, NULL),
(754, 21, 'عين زويت', 'Ain Zouit', NULL, NULL),
(755, 21, 'عزابة', 'Azzaba', NULL, NULL),
(756, 21, 'بكوش لخضر', 'Bekkouche Lakhdar', NULL, NULL),
(757, 21, 'بن عزوز', 'Ben Azzouz', NULL, NULL),
(758, 21, 'بني بشير', 'Beni Bechir', NULL, NULL),
(759, 21, 'بني ولبان', 'Beni Oulbane', NULL, NULL),
(760, 21, 'بني زيد', 'Beni Zid', NULL, NULL),
(761, 21, 'بين الويدان', 'Bin El Ouiden', NULL, NULL),
(762, 21, 'بوشطاطة', 'Bouchetata', NULL, NULL),
(763, 21, 'الشرايع', 'Cheraia', NULL, NULL),
(764, 21, 'القل', 'Collo', NULL, NULL),
(765, 21, 'جندل سعدي محمد', 'Djendel Saadi Mohamed', NULL, NULL),
(766, 21, 'الحروش', 'El Arrouch', NULL, NULL),
(767, 21, 'الغدير', 'El Ghedir', NULL, NULL),
(768, 21, 'الحدائق', 'El Hadaiek', NULL, NULL),
(769, 21, 'المرسى', 'El Marsa', NULL, NULL),
(770, 21, 'مجاز الدشيش', 'Emjez Edchich', NULL, NULL),
(771, 21, 'السبت', 'Es Sebt', NULL, NULL),
(772, 21, 'فلفلة', 'Filfila', NULL, NULL),
(773, 21, 'حمادي كرومة', 'Hammadi Krouma', NULL, NULL),
(774, 21, 'قنواع', 'Kanoua', NULL, NULL),
(775, 21, 'الكركرة', 'Kerkara', NULL, NULL),
(776, 21, 'خناق مايو', 'Khenag Maoune', NULL, NULL),
(777, 21, 'وادي الزهور', 'Oued Zhour', NULL, NULL),
(778, 21, 'الولجة بولبلوط', 'Ouldja Boulbalout', NULL, NULL),
(779, 21, 'أولاد عطية', 'Ouled Attia', NULL, NULL),
(780, 21, 'أولاد حبابة', 'Ouled Habbaba', NULL, NULL),
(781, 21, 'أم الطوب', 'Oum Toub', NULL, NULL),
(782, 21, 'رمضان جمال', 'Ramdane Djamel', NULL, NULL),
(783, 21, 'صالح بو الشعور', 'Salah Bouchaour', NULL, NULL),
(784, 21, 'سيدي مزغيش', 'Sidi Mezghiche', NULL, NULL),
(785, 21, 'سكيكدة', 'Skikda', NULL, NULL),
(786, 21, 'تمالوس', 'Tamalous', NULL, NULL),
(787, 21, 'زردازة', 'Zerdezas', NULL, NULL),
(788, 21, 'الزيتونة', 'Zitouna', NULL, NULL),
(789, 22, 'عين البرد', 'Ain El Berd', NULL, NULL),
(790, 22, 'عين قادة', 'Ain Kada', NULL, NULL),
(791, 22, 'عين الثريد', 'Ain Thrid', NULL, NULL),
(792, 22, 'عين تندمين', 'Ain Tindamine', NULL, NULL),
(793, 22, 'عين أدن', 'Ain- Adden', NULL, NULL),
(794, 22, 'العمارنة', 'Amarnas', NULL, NULL),
(795, 22, 'بضرابين المقراني', 'Bedrabine El Mokrani', NULL, NULL),
(796, 22, 'بلعربي', 'Belarbi', NULL, NULL),
(797, 22, 'بن باديس', 'Ben Badis', NULL, NULL),
(798, 22, 'بن عشيبة شلية', 'Benachiba Chelia', NULL, NULL),
(799, 22, 'بئر الحمام', 'Bir El Hammam', NULL, NULL),
(800, 22, 'بوجبهة البرج', 'Boudjebaa El Bordj', NULL, NULL),
(801, 22, 'بوخنفيس', 'Boukhanefis', NULL, NULL),
(802, 22, 'شيطوان البلايلة', 'Chetouane Belaila', NULL, NULL),
(803, 22, 'الضاية', 'Dhaya', NULL, NULL),
(804, 22, 'الحصيبة', 'El Hacaiba', NULL, NULL),
(805, 22, 'حاسي دحو', 'Hassi Dahou', NULL, NULL),
(806, 22, 'حاسي زهانة', 'Hassi Zahana', NULL, NULL),
(807, 22, 'لمطار', 'Lamtar', NULL, NULL),
(808, 22, 'مكدرة', 'Makedra', NULL, NULL),
(809, 22, 'مرحوم', 'Marhoum', NULL, NULL),
(810, 22, 'مسيد', 'M\'cid', NULL, NULL),
(811, 22, 'مرين', 'Merine', NULL, NULL),
(812, 22, 'مزاورو', 'Mezaourou', NULL, NULL),
(813, 22, 'مصطفى بن ابراهيم', 'Mostefa  Ben Brahim', NULL, NULL),
(814, 22, 'مولاي سليسن', 'Moulay Slissen', NULL, NULL),
(815, 22, 'وادي السبع', 'Oued Sebaa', NULL, NULL),
(816, 22, 'وادي سفيون', 'Oued Sefioun', NULL, NULL),
(817, 22, 'وادي تاوريرة', 'Oued Taourira', NULL, NULL),
(818, 22, 'راس الماء', 'Ras El Ma', NULL, NULL),
(819, 22, 'رجم دموش', 'Redjem Demouche', NULL, NULL),
(820, 22, 'السهالة الثورة', 'Sehala Thaoura', NULL, NULL),
(821, 22, 'سفيزف', 'Sfisef', NULL, NULL),
(822, 22, 'سيدي علي بن يوب', 'Sidi Ali Benyoub', NULL, NULL),
(823, 22, 'سيدي علي بوسيدي', 'Sidi Ali Boussidi', NULL, NULL),
(824, 22, 'سيدي بلعباس', 'Sidi Bel-Abbes', NULL, NULL),
(825, 22, 'سيدي ابراهيم', 'Sidi Brahim', NULL, NULL),
(826, 22, 'سيدي شعيب', 'Sidi Chaib', NULL, NULL),
(827, 22, 'سيدي دحو الزاير', 'Sidi Dahou Zairs', NULL, NULL),
(828, 22, 'سيدي حمادوش', 'Sidi Hamadouche', NULL, NULL),
(829, 22, 'سيدي خالد', 'Sidi Khaled', NULL, NULL),
(830, 22, 'سيدي لحسن', 'Sidi Lahcene', NULL, NULL),
(831, 22, 'سيدي يعقوب', 'Sidi Yacoub', NULL, NULL),
(832, 22, 'طابية', 'Tabia', NULL, NULL),
(833, 22, 'تاودموت', 'Taoudmout', NULL, NULL),
(834, 22, 'تفسور', 'Tefessour', NULL, NULL),
(835, 22, 'تغاليمت', 'Teghalimet', NULL, NULL),
(836, 22, 'تلاغ', 'Telagh', NULL, NULL),
(837, 22, 'تنيرة', 'Tenira', NULL, NULL),
(838, 22, 'تسالة', 'Tessala', NULL, NULL),
(839, 22, 'تلموني', 'Tilmouni', NULL, NULL),
(840, 22, 'زروالة', 'Zerouala', NULL, NULL),
(841, 23, 'عين الباردة', 'Ain El Berda', NULL, NULL),
(842, 23, 'عنابة', 'Annaba', NULL, NULL),
(843, 23, 'برحال', 'Berrahal', NULL, NULL),
(844, 23, 'شطايبي', 'Chetaibi', NULL, NULL),
(845, 23, 'الشرفة', 'Cheurfa', NULL, NULL),
(846, 23, 'البوني', 'El Bouni', NULL, NULL),
(847, 23, 'العلمة', 'El Eulma', NULL, NULL),
(848, 23, 'الحجار', 'El Hadjar', NULL, NULL),
(849, 23, 'واد العنب', 'Oued El Aneb', NULL, NULL),
(850, 23, 'سرايدي', 'Seraidi', NULL, NULL),
(851, 23, 'سيدي عمار', 'Sidi Amar', NULL, NULL),
(852, 23, 'التريعات', 'Treat', NULL, NULL),
(853, 24, 'عين بن بيضاء', 'Ain Ben Beida', NULL, NULL),
(854, 24, 'عين العربي', 'Ain Larbi', NULL, NULL),
(855, 24, 'عين مخلوف', 'Ain Makhlouf', NULL, NULL),
(856, 24, 'عين رقادة', 'Ain Regada', NULL, NULL),
(857, 24, 'عين صندل', 'Ain Sandel', NULL, NULL),
(858, 24, 'بلخير', 'Belkheir', NULL, NULL),
(859, 24, 'بن جراح', 'Bendjarah', NULL, NULL),
(860, 24, 'بني مزلين', 'Beni Mezline', NULL, NULL),
(861, 24, 'برج صباط', 'Bordj Sabath', NULL, NULL),
(862, 24, 'بوحشانة', 'Bou Hachana', NULL, NULL),
(863, 24, 'بوحمدان', 'Bou Hamdane', NULL, NULL),
(864, 24, 'بوعاتي محمود', 'Bouati Mahmoud', NULL, NULL),
(865, 24, 'بوشقوف', 'Bouchegouf', NULL, NULL),
(866, 24, 'بومهرة أحمد', 'Boumahra Ahmed', NULL, NULL),
(867, 24, 'الدهوارة', 'Dahouara', NULL, NULL),
(868, 24, 'جبالة الخميسي', 'Djeballah Khemissi', NULL, NULL),
(869, 24, 'الفجوج', 'El Fedjoudj', NULL, NULL),
(870, 24, 'قلعة بوصبع', 'Guelaat Bou Sbaa', NULL, NULL),
(871, 24, 'قالمة', 'Guelma', NULL, NULL),
(872, 24, 'حمام دباغ', 'Hammam Debagh', NULL, NULL),
(873, 24, 'حمام النبايل', 'Hammam N\'bail', NULL, NULL),
(874, 24, 'هيليوبوليس', 'Heliopolis', NULL, NULL),
(875, 24, 'نشماية', 'Nechmaya', NULL, NULL),
(876, 24, 'لخزارة', 'Khezaras', NULL, NULL),
(877, 24, 'مجاز عمار', 'Medjez Amar', NULL, NULL),
(878, 24, 'مجاز الصفاء', 'Medjez Sfa', NULL, NULL),
(879, 24, 'هواري بومدين', 'Houari Boumedienne', NULL, NULL),
(880, 24, 'وادي الشحم', 'Oued Cheham', NULL, NULL),
(881, 24, 'وادي فراغة', 'Oued Ferragha', NULL, NULL),
(882, 24, 'وادي الزناتي', 'Oued Zenati', NULL, NULL),
(883, 24, 'رأس العقبة', 'Ras El Agba', NULL, NULL),
(884, 24, 'الركنية', 'Roknia', NULL, NULL),
(885, 24, 'سلاوة عنونة', 'Sellaoua Announa', NULL, NULL),
(886, 24, 'تاملوكة', 'Tamlouka', NULL, NULL),
(887, 25, 'عين عبيد', 'Ain Abid', NULL, NULL),
(888, 25, 'عين السمارة', 'Ain Smara', NULL, NULL),
(889, 25, 'أبن باديس الهرية', 'Ben Badis', NULL, NULL),
(890, 25, 'بني حميدان', 'Beni Hamidane', NULL, NULL),
(891, 25, 'قسنطينة', 'Constantine', NULL, NULL),
(892, 25, 'ديدوش مراد', 'Didouche Mourad', NULL, NULL),
(893, 25, 'الخروب', 'El Khroub', NULL, NULL),
(894, 25, 'حامة بوزيان', 'Hamma Bouziane', NULL, NULL),
(895, 25, 'ابن زياد', 'Ibn Ziad', NULL, NULL),
(896, 25, 'بوجريو مسعود', 'Messaoud Boudjeriou', NULL, NULL),
(897, 25, 'أولاد رحمون', 'Ouled Rahmoun', NULL, NULL),
(898, 25, 'زيغود يوسف', 'Zighoud Youcef', NULL, NULL),
(899, 26, 'عين بوسيف', 'Ain Boucif', NULL, NULL),
(900, 26, 'عين اقصير', 'Ain Ouksir', NULL, NULL),
(901, 26, 'العيساوية', 'Aissaouia', NULL, NULL),
(902, 26, 'عزيز', 'Aziz', NULL, NULL),
(903, 26, 'بعطة', 'Baata', NULL, NULL),
(904, 26, 'بن شكاو', 'Ben Chicao', NULL, NULL),
(905, 26, 'بني سليمان', 'Beni Slimane', NULL, NULL),
(906, 26, 'البرواقية', 'Berrouaghia', NULL, NULL),
(907, 26, 'بئر بن عابد', 'Bir Ben Laabed', NULL, NULL),
(908, 26, 'بوغار', 'Boghar', NULL, NULL),
(909, 26, 'بوعيش', 'Bouaiche', NULL, NULL),
(910, 26, 'بوعيشون', 'Bouaichoune', NULL, NULL),
(911, 26, 'بوشراحيل', 'Bouchrahil', NULL, NULL),
(912, 26, 'بوغزول', 'Boughzoul', NULL, NULL),
(913, 26, 'بوسكن', 'Bouskene', NULL, NULL),
(914, 26, 'الشهبونية', 'Chabounia', NULL, NULL),
(915, 26, 'شلالة العذاورة', 'Chelalet El Adhaoura', NULL, NULL),
(916, 26, 'شنيقل', 'Cheniguel', NULL, NULL),
(917, 26, 'دراق', 'Derrag', NULL, NULL),
(918, 26, 'جواب', 'Djouab', NULL, NULL),
(919, 26, 'ذراع السمار', 'Draa Esmar', NULL, NULL),
(920, 26, 'العزيزية', 'El Azizia', NULL, NULL),
(921, 26, 'القلب الكبير', 'El Guelbelkebir', NULL, NULL),
(922, 26, 'الحمدانية', 'El Hamdania', NULL, NULL),
(923, 26, 'الحوضان', 'El Haoudane', NULL, NULL),
(924, 26, 'العمارية', 'El Omaria', NULL, NULL),
(925, 26, 'العوينات', 'El Ouinet', NULL, NULL),
(926, 26, 'حناشة', 'Hannacha', NULL, NULL),
(927, 26, 'الكاف الاخضر', 'Kef Lakhdar', NULL, NULL),
(928, 26, 'خمس جوامع', 'Khams Djouamaa', NULL, NULL),
(929, 26, 'قصر البخاري', 'Ksar El Boukhari', NULL, NULL),
(930, 26, 'مغراوة', 'Maghraoua', NULL, NULL),
(931, 26, 'المدية', 'Medea', NULL, NULL),
(932, 26, 'مجبر', 'Medjebar', NULL, NULL),
(933, 26, 'مزغنة', 'Mezerana', NULL, NULL),
(934, 26, 'مفاتحة', 'M\'fatha', NULL, NULL),
(935, 26, 'ميهوب', 'Mihoub', NULL, NULL),
(936, 26, 'عوامري', 'Ouamri', NULL, NULL),
(937, 26, 'وادي حربيل', 'Oued Harbil', NULL, NULL),
(938, 26, 'أولاد عنتر', 'Ouled Antar', NULL, NULL),
(939, 26, 'أولاد بوعشرة', 'Ouled Bouachra', NULL, NULL),
(940, 26, 'أولاد إبراهيم', 'Ouled Brahim', NULL, NULL),
(941, 26, 'أولاد دايد', 'Ouled Deid', NULL, NULL),
(942, 26, 'أولاد امعرف', 'Ouled Emaaraf', NULL, NULL),
(943, 26, 'أولاد هلال', 'Ouled Hellal', NULL, NULL),
(944, 26, 'أم الجليل', 'Oum El Djellil', NULL, NULL),
(945, 26, 'وزرة', 'Ouzera', NULL, NULL),
(946, 26, 'الربعية', 'Rebaia', NULL, NULL),
(947, 26, 'السانق', 'Saneg', NULL, NULL),
(948, 26, 'سدراية', 'Sedraya', NULL, NULL),
(949, 26, 'سغوان', 'Seghouane', NULL, NULL),
(950, 26, 'سي المحجوب', 'Si Mahdjoub', NULL, NULL),
(951, 26, 'سيدي دامد', 'Sidi Demed', NULL, NULL),
(952, 26, 'سيدي نعمان', 'Sidi Naamane', NULL, NULL),
(953, 26, 'سيدي الربيع', 'Sidi Rabie', NULL, NULL),
(954, 26, 'سيدي زهار', 'Sidi Zahar', NULL, NULL),
(955, 26, 'سيدي زيان', 'Sidi Ziane', NULL, NULL),
(956, 26, 'السواقي', 'Souagui', NULL, NULL),
(957, 26, 'تابلاط', 'Tablat', NULL, NULL),
(958, 26, 'تفراوت', 'Tafraout', NULL, NULL),
(959, 26, 'تمسقيدة', 'Tamesguida', NULL, NULL),
(960, 26, 'تيزي مهدي', 'Tizi Mahdi', NULL, NULL),
(961, 26, 'ثلاث دوائر', 'Tletat Ed Douair', NULL, NULL),
(962, 26, 'الزبيرية', 'Zoubiria', NULL, NULL),
(963, 27, 'عشعاشة', 'Achaacha', NULL, NULL),
(964, 27, 'عين بودينار', 'Ain-Boudinar', NULL, NULL),
(965, 27, 'عين نويسي', 'Ain-Nouissy', NULL, NULL),
(966, 27, 'عين سيدي الشريف', 'Ain-Sidi Cherif', NULL, NULL),
(967, 27, 'عين تادلس', 'Ain-Tedles', NULL, NULL),
(968, 27, 'بن عبد المالك رمضان', 'Benabdelmalek Ramdane', NULL, NULL),
(969, 27, 'بوقيراط', 'Bouguirat', NULL, NULL),
(970, 27, 'فرناقة', 'Fornaka', NULL, NULL),
(971, 27, 'حجاج', 'Hadjadj', NULL, NULL),
(972, 27, 'حاسي ماماش', 'Hassi Mameche', NULL, NULL),
(973, 27, 'الحسيان (بني ياحي', 'Hassiane', NULL, NULL),
(974, 27, 'خضرة', 'Khadra', NULL, NULL),
(975, 27, 'خير الدين', 'Kheir-Eddine', NULL, NULL),
(976, 27, 'منصورة', 'Mansourah', NULL, NULL),
(977, 27, 'مزغران', 'Mazagran', NULL, NULL),
(978, 27, 'ماسرة', 'Mesra', NULL, NULL),
(979, 27, 'مستغانم', 'Mostaganem', NULL, NULL),
(980, 27, 'نكمارية', 'Nekmaria', NULL, NULL),
(981, 27, 'وادي الخير', 'Oued El Kheir', NULL, NULL),
(982, 27, 'أولاد بوغالم', 'Ouled Boughalem', NULL, NULL),
(983, 27, 'أولاد مع الله', 'Ouled-Maalah', NULL, NULL),
(984, 27, 'صفصاف', 'Safsaf', NULL, NULL),
(985, 27, 'صيادة', 'Sayada', NULL, NULL),
(986, 27, 'سيدي علي', 'Sidi Ali', NULL, NULL),
(987, 27, 'سيدي بلعطار', 'Sidi Belaattar', NULL, NULL),
(988, 27, 'سيدي لخضر', 'Sidi-Lakhdar', NULL, NULL),
(989, 27, 'سيرات', 'Sirat', NULL, NULL),
(990, 27, 'السوافلية', 'Souaflia', NULL, NULL),
(991, 27, 'سور', 'Sour', NULL, NULL),
(992, 27, 'ستيدية', 'Stidia', NULL, NULL),
(993, 27, 'تزقايت', 'Tazgait', NULL, NULL),
(994, 27, 'الطواهرية', 'Touahria', NULL, NULL),
(995, 28, 'عين الحجل', 'Ain El Hadjel', NULL, NULL),
(996, 28, 'عين الملح', 'Ain El Melh', NULL, NULL),
(997, 28, 'عين فارس', 'Ain Fares', NULL, NULL),
(998, 28, 'عين الخضراء', 'Ain Khadra', NULL, NULL),
(999, 28, 'عين الريش', 'Ain Rich', NULL, NULL),
(1000, 28, 'بلعايبة', 'Belaiba', NULL, NULL),
(1001, 28, 'بن سرور', 'Ben Srour', NULL, NULL),
(1002, 28, 'بني يلمان', 'Beni Ilmane', NULL, NULL),
(1003, 28, 'بن زوه', 'Benzouh', NULL, NULL),
(1004, 28, 'برهوم', 'Berhoum', NULL, NULL),
(1005, 28, 'بئر فضة', 'Bir Foda', NULL, NULL),
(1006, 28, 'بوسعادة', 'Bou Saada', NULL, NULL),
(1007, 28, 'بوطي السايح', 'Bouti Sayeh', NULL, NULL),
(1008, 28, 'شلال', 'Chellal', NULL, NULL),
(1009, 28, 'دهاهنة', 'Dehahna', NULL, NULL),
(1010, 28, 'جبل مساعد', 'Djebel Messaad', NULL, NULL),
(1011, 28, 'الهامل', 'El Hamel', NULL, NULL),
(1012, 28, 'الحوامد', 'El Houamed', NULL, NULL),
(1013, 28, 'حمام الضلعة', 'Hammam Dalaa', NULL, NULL),
(1014, 28, 'خطوطي سد الجير', 'Khettouti Sed-El-Jir', NULL, NULL),
(1015, 28, 'خبانة', 'Khoubana', NULL, NULL),
(1016, 28, 'المعاضيد', 'Maadid', NULL, NULL),
(1017, 28, 'معاريف', 'Maarif', NULL, NULL),
(1018, 28, 'مقرة', 'Magra', NULL, NULL),
(1019, 28, 'مسيف', 'M\'cif', NULL, NULL),
(1020, 28, 'امجدل', 'Medjedel', NULL, NULL),
(1021, 28, 'مناعة', 'Menaa', NULL, NULL),
(1022, 28, 'محمد بوضياف', 'Mohamed Boudiaf', NULL, NULL),
(1023, 28, 'المسيلة', 'M\'sila', NULL, NULL),
(1024, 28, 'المطارفة', 'M\'tarfa', NULL, NULL),
(1025, 28, 'ونوغة', 'Ouanougha', NULL, NULL),
(1026, 28, 'أولاد عدي لقبالة', 'Ouled Addi Guebala', NULL, NULL),
(1027, 28, 'أولاد دراج', 'Ouled Derradj', NULL, NULL),
(1028, 28, 'أولاد ماضي', 'Ouled Madhi', NULL, NULL),
(1029, 28, 'أولاد منصور', 'Ouled Mansour', NULL, NULL),
(1030, 28, 'أولاد سيدي ابراهيم', 'Ouled Sidi Brahim', NULL, NULL),
(1031, 28, 'أولاد سليمان', 'Ouled Slimane', NULL, NULL),
(1032, 28, 'ولتام', 'Oulteme', NULL, NULL),
(1033, 28, 'سيدي عيسى', 'Sidi Aissa', NULL, NULL),
(1034, 28, 'سيدي عامر', 'Sidi Ameur', NULL, NULL),
(1035, 28, 'سيدي هجرس', 'Sidi Hadjeres', NULL, NULL),
(1036, 28, 'سيدي امحمد', 'Sidi M\'hamed', NULL, NULL),
(1037, 28, 'سليم', 'Slim', NULL, NULL),
(1038, 28, 'السوامع', 'Souamaa', NULL, NULL),
(1039, 28, 'تامسة', 'Tamsa', NULL, NULL),
(1040, 28, 'تارمونت', 'Tarmount', NULL, NULL),
(1041, 28, 'زرزور', 'Zarzour', NULL, NULL),
(1042, 29, 'عين فارس', 'Ain Fares', NULL, NULL),
(1043, 29, 'عين فكان', 'Ain Fekan', NULL, NULL),
(1044, 29, 'عين فراح', 'Ain Ferah', NULL, NULL),
(1045, 29, 'عين أفرص', 'Ain Frass', NULL, NULL),
(1046, 29, 'العلايمية', 'Alaimia', NULL, NULL),
(1047, 29, 'عوف', 'Aouf', NULL, NULL),
(1048, 29, 'بنيان', 'Benian', NULL, NULL),
(1049, 29, 'بوهني', 'Bou Henni', NULL, NULL),
(1050, 29, 'بوحنيفية', 'Bouhanifia', NULL, NULL),
(1051, 29, 'الشرفاء', 'Chorfa', NULL, NULL),
(1052, 29, 'البرج', 'El Bordj', NULL, NULL),
(1053, 29, 'القعدة', 'El Gaada', NULL, NULL),
(1054, 29, 'الغمري', 'El Ghomri', NULL, NULL),
(1055, 29, 'القطنة', 'El Gueitena', NULL, NULL),
(1056, 29, 'الحشم', 'El Hachem', NULL, NULL),
(1057, 29, 'القرط', 'El Keurt', NULL, NULL),
(1058, 29, 'المأمونية', 'El Mamounia', NULL, NULL),
(1059, 29, 'المنور', 'El Menaouer', NULL, NULL),
(1060, 29, 'فراقيق', 'Ferraguig', NULL, NULL),
(1061, 29, 'فروحة', 'Froha', NULL, NULL),
(1062, 29, 'غروس', 'Gharrous', NULL, NULL),
(1063, 29, 'غريس', 'Ghriss', NULL, NULL),
(1064, 29, 'قرجوم', 'Guerdjoum', NULL, NULL),
(1065, 29, 'حسين', 'Hacine', NULL, NULL),
(1066, 29, 'خلوية', 'Khalouia', NULL, NULL),
(1067, 29, 'ماقضة', 'Makhda', NULL, NULL),
(1068, 29, 'ماوسة', 'Maoussa', NULL, NULL),
(1069, 29, 'معسكر', 'Mascara', NULL, NULL),
(1070, 29, 'المطمور', 'Matemore', NULL, NULL),
(1071, 29, 'مقطع الدوز', 'Mocta-Douz', NULL, NULL),
(1072, 29, 'المحمدية', 'Mohammadia', NULL, NULL),
(1073, 29, 'نسمط', 'Nesmot', NULL, NULL),
(1074, 29, 'عقاز', 'Oggaz', NULL, NULL),
(1075, 29, 'وادي الأبطال', 'Oued El Abtal', NULL, NULL),
(1076, 29, 'وادي التاغية', 'Oued Taria', NULL, NULL),
(1077, 29, 'رأس عين عميروش', 'Ras El Ain Amirouche', NULL, NULL),
(1078, 29, 'سجرارة', 'Sedjerara', NULL, NULL),
(1079, 29, 'السهايلية', 'Sehailia', NULL, NULL);
INSERT INTO `communes` (`id`, `wilaya_id`, `name_ar`, `name_fr`, `created_at`, `updated_at`) VALUES
(1080, 29, 'سيدي عبد الجبار', 'Sidi Abdeldjebar', NULL, NULL),
(1081, 29, 'سيدي عبد المومن', 'Sidi Abdelmoumene', NULL, NULL),
(1082, 29, 'سيدي بوسعيد', 'Sidi Boussaid', NULL, NULL),
(1083, 29, 'سيدي قادة', 'Sidi Kada', NULL, NULL),
(1084, 29, 'سيق', 'Sig', NULL, NULL),
(1085, 29, 'تيغنيف', 'Tighennif', NULL, NULL),
(1086, 29, 'تيزي', 'Tizi', NULL, NULL),
(1087, 29, 'زهانة', 'Zahana', NULL, NULL),
(1088, 29, 'زلامطة', 'Zelamta', NULL, NULL),
(1089, 30, 'عين البيضاء', 'Ain Beida', NULL, NULL),
(1090, 55, 'بن ناصر', 'Benaceur', NULL, NULL),
(1091, 55, 'بلدة اعمر', 'Blidet Amor', NULL, NULL),
(1092, 55, 'العالية', 'El Alia', NULL, NULL),
(1093, 30, 'البرمة', 'El Borma', NULL, NULL),
(1094, 55, 'الحجيرة', 'El-Hadjira', NULL, NULL),
(1095, 30, 'حاسي بن عبد الله', 'Hassi Ben Abdellah', NULL, NULL),
(1096, 30, 'حاسي مسعود', 'Hassi Messaoud', NULL, NULL),
(1097, 55, 'المقارين', 'Megarine', NULL, NULL),
(1098, 55, 'المنقر', 'M\'naguer', NULL, NULL),
(1099, 55, 'النزلة', 'Nezla', NULL, NULL),
(1100, 30, 'انقوسة', 'N\'goussa', NULL, NULL),
(1101, 30, 'ورقلة', 'Ouargla', NULL, NULL),
(1102, 30, 'الرويسات', 'Rouissat', NULL, NULL),
(1103, 30, 'سيدي خويلد', 'Sidi Khouiled', NULL, NULL),
(1104, 55, 'سيدي سليمان', 'Sidi Slimane', NULL, NULL),
(1105, 55, 'الطيبات', 'Taibet', NULL, NULL),
(1106, 55, 'تبسبست', 'Tebesbest', NULL, NULL),
(1107, 55, 'تماسين', 'Temacine', NULL, NULL),
(1108, 55, 'تقرت', 'Touggourt', NULL, NULL),
(1109, 55, 'الزاوية العابدية', 'Zaouia El Abidia', NULL, NULL),
(1110, 31, 'عين البية', 'Ain Biya', NULL, NULL),
(1111, 31, 'عين الكرمة', 'Ain Kerma', NULL, NULL),
(1112, 31, 'عين الترك', 'Ain Turk', NULL, NULL),
(1113, 31, 'أرزيو', 'Arzew', NULL, NULL),
(1114, 31, 'بن فريحة', 'Ben Freha', NULL, NULL),
(1115, 31, 'بطيوة', 'Bethioua', NULL, NULL),
(1116, 31, 'بئر الجير', 'Bir El Djir', NULL, NULL),
(1117, 31, 'بوفاتيس', 'Boufatis', NULL, NULL),
(1118, 31, 'بوسفر', 'Bousfer', NULL, NULL),
(1119, 31, 'بوتليليس', 'Boutlelis', NULL, NULL),
(1120, 31, 'العنصر', 'El Ancor', NULL, NULL),
(1121, 31, 'البراية', 'El Braya', NULL, NULL),
(1122, 31, 'الكرمة', 'El Kerma', NULL, NULL),
(1123, 31, 'السانية', 'Es Senia', NULL, NULL),
(1124, 31, 'قديل', 'Gdyel', NULL, NULL),
(1125, 31, 'حاسي بن عقبة', 'Hassi Ben Okba', NULL, NULL),
(1126, 31, 'حاسي بونيف', 'Hassi Bounif', NULL, NULL),
(1127, 31, 'حاسي مفسوخ', 'Hassi Mefsoukh', NULL, NULL),
(1128, 31, 'مرسى الحجاج', 'Marsat El Hadjadj', NULL, NULL),
(1129, 31, 'المرسى الكبير', 'Mers El Kebir', NULL, NULL),
(1130, 31, 'مسرغين', 'Messerghin', NULL, NULL),
(1131, 31, 'وهران', 'Oran', NULL, NULL),
(1132, 31, 'وادي تليلات', 'Oued Tlelat', NULL, NULL),
(1133, 31, 'سيدي بن يبقى', 'Sidi Ben Yebka', NULL, NULL),
(1134, 31, 'سيدي الشحمي', 'Sidi Chami', NULL, NULL),
(1135, 31, 'طفراوي', 'Tafraoui', NULL, NULL),
(1136, 32, 'عين العراك', 'Ain El Orak', NULL, NULL),
(1137, 32, 'اربوات', 'Arbaouat', NULL, NULL),
(1138, 32, 'بوعلام', 'Boualem', NULL, NULL),
(1139, 32, 'بوقطب', 'Bougtoub', NULL, NULL),
(1140, 32, 'بوسمغون', 'Boussemghoun', NULL, NULL),
(1141, 32, 'بريزينة', 'Brezina', NULL, NULL),
(1142, 32, 'الشقيق', 'Cheguig', NULL, NULL),
(1143, 32, 'شلالة', 'Chellala', NULL, NULL),
(1144, 32, 'البيض', 'El Bayadh', NULL, NULL),
(1145, 32, 'الأبيض سيدي الشيخ', 'Labiodh Sidi Cheikh', NULL, NULL),
(1146, 32, 'البنود', 'El Bnoud', NULL, NULL),
(1147, 32, 'الخيثر', 'El Kheiter', NULL, NULL),
(1148, 32, 'المحرة', 'El Mehara', NULL, NULL),
(1149, 32, 'الغاسول', 'Ghassoul', NULL, NULL),
(1150, 32, 'الكاف الأحمر', 'Kef El Ahmar', NULL, NULL),
(1151, 32, 'كراكدة', 'Krakda', NULL, NULL),
(1152, 32, 'رقاصة', 'Rogassa', NULL, NULL),
(1153, 32, 'سيدي عامر', 'Sidi Ameur', NULL, NULL),
(1154, 32, 'سيدي سليمان', 'Sidi Slimane', NULL, NULL),
(1155, 32, 'سيدي طيفور', 'Sidi Tiffour', NULL, NULL),
(1156, 32, 'ستيتن', 'Stitten', NULL, NULL),
(1157, 32, 'توسمولين', 'Tousmouline', NULL, NULL),
(1158, 56, 'برج الحواس', 'Bordj El Haouass', NULL, NULL),
(1159, 33, 'برج عمر إدريس', 'Bordj Omar Driss', NULL, NULL),
(1160, 33, 'دبداب', 'Debdeb', NULL, NULL),
(1161, 56, 'جانت', 'Djanet', NULL, NULL),
(1162, 33, 'إيليزي', 'Illizi', NULL, NULL),
(1163, 33, 'إن أمناس', 'In Amenas', NULL, NULL),
(1164, 34, 'عين تاغروت', 'Ain Taghrout', NULL, NULL),
(1165, 34, 'عين تسرة', 'Ain Tesra', NULL, NULL),
(1166, 34, 'برج بوعريرج', 'B. B. Arreridj', NULL, NULL),
(1167, 34, 'بليمور', 'Belimour', NULL, NULL),
(1168, 34, 'بن داود', 'Ben Daoud', NULL, NULL),
(1169, 34, 'بئر قاصد علي', 'Bir Kasdali', NULL, NULL),
(1170, 34, 'برج الغدير', 'Bordj Ghedir', NULL, NULL),
(1171, 34, 'برج زمورة', 'Bordj Zemmoura', NULL, NULL),
(1172, 34, 'القلة', 'Colla', NULL, NULL),
(1173, 34, 'جعافرة', 'Djaafra', NULL, NULL),
(1174, 34, 'العش', 'El Euch', NULL, NULL),
(1175, 34, 'الياشير', 'El Achir', NULL, NULL),
(1176, 34, 'العناصر', 'El Annasseur', NULL, NULL),
(1177, 34, 'الحمادية', 'Elhammadia', NULL, NULL),
(1178, 34, 'الماين', 'El Main', NULL, NULL),
(1179, 34, 'المهير', 'El M\'hir', NULL, NULL),
(1180, 34, 'غيلاسة', 'Ghailasa', NULL, NULL),
(1181, 34, 'حرازة', 'Haraza', NULL, NULL),
(1182, 34, 'حسناوة', 'Hasnaoua', NULL, NULL),
(1183, 34, 'خليل', 'Khelil', NULL, NULL),
(1184, 34, 'القصور', 'Ksour', NULL, NULL),
(1185, 34, 'المنصورة', 'Mansoura', NULL, NULL),
(1186, 34, 'مجانة', 'Medjana', NULL, NULL),
(1187, 34, 'أولاد أبراهم', 'Ouled Brahem', NULL, NULL),
(1188, 34, 'أولاد دحمان', 'Ouled Dahmane', NULL, NULL),
(1189, 34, 'أولاد سيدي ابراهيم', 'Ouled Sidi-Brahim', NULL, NULL),
(1190, 34, 'الرابطة', 'Rabta', NULL, NULL),
(1191, 34, 'رأس الوادي', 'Ras El Oued', NULL, NULL),
(1192, 34, 'سيدي أمبارك', 'Sidi-Embarek', NULL, NULL),
(1193, 34, 'تفرق', 'Tefreg', NULL, NULL),
(1194, 34, 'تقلعيت', 'Taglait', NULL, NULL),
(1195, 34, 'تسامرت', 'Tassamert', NULL, NULL),
(1196, 34, 'ثنية النصر', 'Teniet En Nasr', NULL, NULL),
(1197, 34, 'تيكستار', 'Tixter', NULL, NULL),
(1198, 35, 'أعفير', 'Afir', NULL, NULL),
(1199, 35, 'عمال', 'Ammal', NULL, NULL),
(1200, 35, 'بغلية', 'Baghlia', NULL, NULL),
(1201, 35, 'بن شود', 'Ben Choud', NULL, NULL),
(1202, 35, 'بني عمران', 'Beni Amrane', NULL, NULL),
(1203, 35, 'برج منايل', 'Bordj Menaiel', NULL, NULL),
(1204, 35, 'بودواو', 'Boudouaou', NULL, NULL),
(1205, 35, 'بودواو البحري', 'Boudouaou El Bahri', NULL, NULL),
(1206, 35, 'بومرداس', 'Boumerdes', NULL, NULL),
(1207, 35, 'بوزقزة قدارة', 'Bouzegza Keddara', NULL, NULL),
(1208, 35, 'شعبة العامر', 'Chabet El Ameur', NULL, NULL),
(1209, 35, 'قورصو', 'Corso', NULL, NULL),
(1210, 35, 'دلس', 'Dellys', NULL, NULL),
(1211, 35, 'جنات', 'Djinet', NULL, NULL),
(1212, 35, 'الخروبة', 'El Kharrouba', NULL, NULL),
(1213, 35, 'حمادي', 'Hammedi', NULL, NULL),
(1214, 35, 'يسر', 'Isser', NULL, NULL),
(1215, 35, 'خميس الخشنة', 'Khemis El Khechna', NULL, NULL),
(1216, 35, 'الاربعطاش', 'Larbatache', NULL, NULL),
(1217, 35, 'لقاطة', 'Leghata', NULL, NULL),
(1218, 35, 'الناصرية', 'Naciria', NULL, NULL),
(1219, 35, 'أولاد عيسى', 'Ouled Aissa', NULL, NULL),
(1220, 35, 'أولاد هداج', 'Ouled Hedadj', NULL, NULL),
(1221, 35, 'أولاد موسى', 'Ouled Moussa', NULL, NULL),
(1222, 35, 'سي مصطفى', 'Si Mustapha', NULL, NULL),
(1223, 35, 'سيدي داود', 'Sidi Daoud', NULL, NULL),
(1224, 35, 'سوق الحد', 'Souk El Had', NULL, NULL),
(1225, 35, 'تاورقة', 'Taourga', NULL, NULL),
(1226, 35, 'الثنية', 'Thenia', NULL, NULL),
(1227, 35, 'تيجلابين', 'Tidjelabine', NULL, NULL),
(1228, 35, 'تيمزريت', 'Timezrit', NULL, NULL),
(1229, 35, 'زموري', 'Zemmouri', NULL, NULL),
(1230, 36, 'عين العسل', 'Ain El Assel', NULL, NULL),
(1231, 36, 'عين الكرمة', 'Ain Kerma', NULL, NULL),
(1232, 36, 'عصفور', 'Asfour', NULL, NULL),
(1233, 36, 'بن مهيدي', 'Ben M Hidi', NULL, NULL),
(1234, 36, 'بريحان', 'Berrihane', NULL, NULL),
(1235, 36, 'البسباس', 'Besbes', NULL, NULL),
(1236, 36, 'بوقوس', 'Bougous', NULL, NULL),
(1237, 36, 'بوحجار', 'Bouhadjar', NULL, NULL),
(1238, 36, 'بوثلجة', 'Bouteldja', NULL, NULL),
(1239, 36, 'شبيطة مختار', 'Chebaita Mokhtar', NULL, NULL),
(1240, 36, 'الشافية', 'Chefia', NULL, NULL),
(1241, 36, 'شحاني', 'Chihani', NULL, NULL),
(1242, 36, 'الذرعـان', 'Drean', NULL, NULL),
(1243, 36, 'الشط', 'Echatt', NULL, NULL),
(1244, 36, 'العيون', 'El Aioun', NULL, NULL),
(1245, 36, 'القالة', 'El Kala', NULL, NULL),
(1246, 36, 'الطارف', 'El Tarf', NULL, NULL),
(1247, 36, 'حمام بني صالح', 'Hammam Beni Salah', NULL, NULL),
(1248, 36, 'بحيرة الطيور', 'Lac Des Oiseaux', NULL, NULL),
(1249, 36, 'وادي الزيتون', 'Oued Zitoun', NULL, NULL),
(1250, 36, 'رمل السوق', 'Raml Souk', NULL, NULL),
(1251, 36, 'السوارخ', 'Souarekh', NULL, NULL),
(1252, 36, 'زريزر', 'Zerizer', NULL, NULL),
(1253, 36, 'الزيتونة', 'Zitouna', NULL, NULL),
(1254, 37, 'أم العسل', 'Oum El Assel', NULL, NULL),
(1255, 37, 'تندوف', 'Tindouf', NULL, NULL),
(1256, 38, 'عماري', 'Ammari', NULL, NULL),
(1257, 38, 'بني شعيب', 'Beni Chaib', NULL, NULL),
(1258, 38, 'بني لحسن', 'Beni Lahcene', NULL, NULL),
(1259, 38, 'برج بونعامة', 'Bordj Bounaama', NULL, NULL),
(1260, 38, 'برج الأمير عبد القادر', 'Bordj El Emir Abdelkader', NULL, NULL),
(1261, 38, 'بوقائد', 'Boucaid', NULL, NULL),
(1262, 38, 'خميستي', 'Khemisti', NULL, NULL),
(1263, 38, 'الأربعاء', 'Larbaa', NULL, NULL),
(1264, 38, 'لرجام', 'Lardjem', NULL, NULL),
(1265, 38, 'العيون', 'Layoune', NULL, NULL),
(1266, 38, 'الأزهرية', 'Lazharia', NULL, NULL),
(1267, 38, 'المعاصم', 'Maacem', NULL, NULL),
(1268, 38, 'الملعب', 'Melaab', NULL, NULL),
(1269, 38, 'أولاد بسام', 'Ouled Bessam', NULL, NULL),
(1270, 38, 'سيدي عابد', 'Sidi Abed', NULL, NULL),
(1271, 38, 'سيدي بوتوشنت', 'Sidi Boutouchent', NULL, NULL),
(1272, 38, 'سيدي العنتري', 'Sidi Lantri', NULL, NULL),
(1273, 38, 'سيدي سليمان', 'Sidi Slimane', NULL, NULL),
(1274, 38, 'تملاحت', 'Tamellahet', NULL, NULL),
(1275, 38, 'ثنية الاحد', 'Theniet El Had', NULL, NULL),
(1276, 38, 'تيسمسيلت', 'Tissemsilt', NULL, NULL),
(1277, 38, 'اليوسفية', 'Youssoufia', NULL, NULL),
(1278, 39, 'البياضة', 'Bayadha', NULL, NULL),
(1279, 39, 'بن  قشة', 'Ben Guecha', NULL, NULL),
(1280, 39, 'الدبيلة', 'Debila', NULL, NULL),
(1281, 57, 'جامعة', 'Djamaa', NULL, NULL),
(1282, 39, 'دوار الماء', 'Douar El Maa', NULL, NULL),
(1283, 39, 'العقلة', 'El Ogla', NULL, NULL),
(1284, 57, 'المغير', 'El-M\'ghaier', NULL, NULL),
(1285, 39, 'الوادي', 'El-Oued', NULL, NULL),
(1286, 39, 'قمار', 'Guemar', NULL, NULL),
(1287, 39, 'الحمراية', 'Hamraia', NULL, NULL),
(1288, 39, 'حساني عبد الكريم', 'Hassani Abdelkrim', NULL, NULL),
(1289, 39, 'حاسي خليفة', 'Hassi Khalifa', NULL, NULL),
(1290, 39, 'كوينين', 'Kouinine', NULL, NULL),
(1291, 39, 'المقرن', 'Magrane', NULL, NULL),
(1292, 39, 'اميه وانسة', 'Mih Ouansa', NULL, NULL),
(1293, 57, 'المرارة', 'M\'rara', NULL, NULL),
(1294, 39, 'النخلة', 'Nakhla', NULL, NULL),
(1295, 39, 'وادي العلندة', 'Oued El Alenda', NULL, NULL),
(1296, 57, 'أم الطيور', 'Oum Touyour', NULL, NULL),
(1297, 39, 'ورماس', 'Ourmes', NULL, NULL),
(1298, 39, 'الرقيبة', 'Reguiba', NULL, NULL),
(1299, 39, 'الرباح', 'Robbah', NULL, NULL),
(1300, 57, 'سيدي عمران', 'Sidi Amrane', NULL, NULL),
(1301, 39, 'سيدي عون', 'Sidi Aoun', NULL, NULL),
(1302, 57, 'سيدي خليل', 'Sidi Khelil', NULL, NULL),
(1303, 57, 'سطيل', 'Still', NULL, NULL),
(1304, 39, 'تغزوت', 'Taghzout', NULL, NULL),
(1305, 39, 'الطالب العربي', 'Taleb Larbi', NULL, NULL),
(1306, 57, 'تندلة', 'Tenedla', NULL, NULL),
(1307, 39, 'الطريفاوي', 'Trifaoui', NULL, NULL),
(1308, 40, 'عين الطويلة', 'Ain Touila', NULL, NULL),
(1309, 40, 'بابار', 'Babar', NULL, NULL),
(1310, 40, 'بغاي', 'Baghai', NULL, NULL),
(1311, 40, 'بوحمامة', 'Bouhmama', NULL, NULL),
(1312, 40, 'ششار', 'Chechar', NULL, NULL),
(1313, 40, 'شلية', 'Chelia', NULL, NULL),
(1314, 40, 'جلال', 'Djellal', NULL, NULL),
(1315, 40, 'الحامة', 'El Hamma', NULL, NULL),
(1316, 40, 'المحمل', 'El Mahmal', NULL, NULL),
(1317, 40, 'الولجة', 'El Oueldja', NULL, NULL),
(1318, 40, 'انسيغة', 'Ensigha', NULL, NULL),
(1319, 40, 'قايس', 'Kais', NULL, NULL),
(1320, 40, 'خنشلة', 'Khenchela', NULL, NULL),
(1321, 40, 'خيران', 'Khirane', NULL, NULL),
(1322, 40, 'مصارة', 'M\'sara', NULL, NULL),
(1323, 40, 'متوسة', 'M\'toussa', NULL, NULL),
(1324, 40, 'أولاد رشاش', 'Ouled Rechache', NULL, NULL),
(1325, 40, 'الرميلة', 'Remila', NULL, NULL),
(1326, 40, 'طامزة', 'Tamza', NULL, NULL),
(1327, 40, 'تاوزيانت', 'Taouzianat', NULL, NULL),
(1328, 40, 'يابوس', 'Yabous', NULL, NULL),
(1329, 41, 'عين سلطان', 'Ain Soltane', NULL, NULL),
(1330, 41, 'عين الزانة', 'Ain Zana', NULL, NULL),
(1331, 41, 'بئر بوحوش', 'Bir Bouhouche', NULL, NULL),
(1332, 41, 'الدريعة', 'Drea', NULL, NULL),
(1333, 41, 'الحدادة', 'Haddada', NULL, NULL),
(1334, 41, 'الحنانشة', 'Hanencha', NULL, NULL),
(1335, 41, 'الخضارة', 'Khedara', NULL, NULL),
(1336, 41, 'خميسة', 'Khemissa', NULL, NULL),
(1337, 41, 'المشروحة', 'Machroha', NULL, NULL),
(1338, 41, 'مداوروش', 'M\'daourouche', NULL, NULL),
(1339, 41, 'المراهنة', 'Merahna', NULL, NULL),
(1340, 41, 'وادي الكبريت', 'Oued Kebrit', NULL, NULL),
(1341, 41, 'أولاد إدريس', 'Ouled Driss', NULL, NULL),
(1342, 41, 'أولاد مومن', 'Ouled Moumen', NULL, NULL),
(1343, 41, 'أم العظايم', 'Oum El Adhaim', NULL, NULL),
(1344, 41, 'ويلان', 'Ouillen', NULL, NULL),
(1345, 41, 'الراقوبة', 'Ragouba', NULL, NULL),
(1346, 41, 'سافل الويدان', 'Safel El Ouiden', NULL, NULL),
(1347, 41, 'سدراتة', 'Sedrata', NULL, NULL),
(1348, 41, 'سيدي فرج', 'Sidi Fredj', NULL, NULL),
(1349, 41, 'سوق أهراس', 'Souk Ahras', NULL, NULL),
(1350, 41, 'تاورة', 'Taoura', NULL, NULL),
(1351, 41, 'ترقالت', 'Terraguelt', NULL, NULL),
(1352, 41, 'تيفاش', 'Tiffech', NULL, NULL),
(1353, 41, 'الزعرورية', 'Zaarouria', NULL, NULL),
(1354, 41, 'الزوابي', 'Zouabi', NULL, NULL),
(1355, 42, 'أغبال', 'Aghbal', NULL, NULL),
(1356, 42, 'أحمر العين', 'Ahmer El Ain', NULL, NULL),
(1357, 42, 'عين تاقورايت', 'Ain Tagourait', NULL, NULL),
(1358, 42, 'الحطاطبة', 'Attatba', NULL, NULL),
(1359, 42, 'بني ميلك', 'Beni Mileuk', NULL, NULL),
(1360, 42, 'بوهارون', 'Bou Haroun', NULL, NULL),
(1361, 42, 'بواسماعيل', 'Bou Ismail', NULL, NULL),
(1362, 42, 'بورقيقة', 'Bourkika', NULL, NULL),
(1363, 42, 'الشعيبة', 'Chaiba', NULL, NULL),
(1364, 42, 'شرشال', 'Cherchell', NULL, NULL),
(1365, 42, 'الداموس', 'Damous', NULL, NULL),
(1366, 42, 'دواودة', 'Douaouda', NULL, NULL),
(1367, 42, 'فوكة', 'Fouka', NULL, NULL),
(1368, 42, 'قوراية', 'Gouraya', NULL, NULL),
(1369, 42, 'حجوط', 'Hadjout', NULL, NULL),
(1370, 42, 'حجرة النص', 'Hadjret Ennous', NULL, NULL),
(1371, 42, 'خميستي', 'Khemisti', NULL, NULL),
(1372, 42, 'القليعة', 'Kolea', NULL, NULL),
(1373, 42, 'الأرهاط', 'Larhat', NULL, NULL),
(1374, 42, 'مناصر', 'Menaceur', NULL, NULL),
(1375, 42, 'مراد', 'Merad', NULL, NULL),
(1376, 42, 'مسلمون', 'Messelmoun', NULL, NULL),
(1377, 42, 'الناظور', 'Nador', NULL, NULL),
(1378, 42, 'سيدي غيلاس', 'Sidi Ghiles', NULL, NULL),
(1379, 42, 'سيدي راشد', 'Sidi Rached', NULL, NULL),
(1380, 42, 'سيدي سميان', 'Sidi Semiane', NULL, NULL),
(1381, 42, 'سيدي عامر', 'Sidi-Amar', NULL, NULL),
(1382, 42, 'تيبازة', 'Tipaza', NULL, NULL),
(1383, 43, 'أحمد راشدي', 'Ahmed Rachedi', NULL, NULL),
(1384, 43, ' عين البيضاء أحريش', 'Ain Beida Harriche', NULL, NULL),
(1385, 43, 'عين الملوك', 'Ain Mellouk', NULL, NULL),
(1386, 43, 'عين التين', 'Ain Tine', NULL, NULL),
(1387, 43, 'اعميرة اراس', 'Amira Arres', NULL, NULL),
(1388, 43, 'بن يحي عبد الرحمن', 'Benyahia Abderrahmane', NULL, NULL),
(1389, 43, 'بوحاتم', 'Bouhatem', NULL, NULL),
(1390, 43, 'شلغوم العيد', 'Chelghoum Laid', NULL, NULL),
(1391, 43, 'الشيقارة', 'Chigara', NULL, NULL),
(1392, 43, 'دراحي بوصلاح', 'Derrahi Bousselah', NULL, NULL),
(1393, 43, 'العياضي برباس', 'El Ayadi Barbes', NULL, NULL),
(1394, 43, 'مشيرة', 'El Mechira', NULL, NULL),
(1395, 43, 'فرجيوة', 'Ferdjioua', NULL, NULL),
(1396, 43, 'القرارم قوقة', 'Grarem Gouga', NULL, NULL),
(1397, 43, 'حمالة', 'Hamala', NULL, NULL),
(1398, 43, 'ميلة', 'Mila', NULL, NULL),
(1399, 43, 'مينار زارزة', 'Minar Zarza', NULL, NULL),
(1400, 43, 'وادي العثمانية', 'Oued Athmenia', NULL, NULL),
(1401, 43, 'وادي النجاء', 'Oued Endja', NULL, NULL),
(1402, 43, 'وادي سقان', 'Oued Seguen', NULL, NULL),
(1403, 43, 'أولاد اخلوف', 'Ouled Khalouf', NULL, NULL),
(1404, 43, 'الرواشد', 'Rouached', NULL, NULL),
(1405, 43, 'سيدي خليفة', 'Sidi Khelifa', NULL, NULL),
(1406, 43, 'سيدي مروان', 'Sidi Merouane', NULL, NULL),
(1407, 43, 'تاجنانت', 'Tadjenanet', NULL, NULL),
(1408, 43, 'تسدان حدادة', 'Tassadane Haddada', NULL, NULL),
(1409, 43, 'التلاغمة', 'Teleghma', NULL, NULL),
(1410, 43, 'ترعي باينان', 'Terrai Bainen', NULL, NULL),
(1411, 43, 'تسالة لمطاعي', 'Tassala Lematai', NULL, NULL),
(1412, 43, 'تيبرقنت', 'Tiberguent', NULL, NULL),
(1413, 43, 'يحي بني قشة', 'Yahia Beniguecha', NULL, NULL),
(1414, 43, 'زغاية', 'Zeghaia', NULL, NULL),
(1415, 44, 'عين البنيان', 'Ain-Benian', NULL, NULL),
(1416, 44, 'عين بويحيى', 'Ain-Bouyahia', NULL, NULL),
(1417, 44, 'عين الدفلى', 'Ain-Defla', NULL, NULL),
(1418, 44, 'عين الاشياخ', 'Ain-Lechiakh', NULL, NULL),
(1419, 44, 'عين السلطان', 'Ain-Soltane', NULL, NULL),
(1420, 44, 'عين التركي', 'Ain-Torki', NULL, NULL),
(1421, 44, 'عريب', 'Arib', NULL, NULL),
(1422, 44, 'بربوش', 'Birbouche', NULL, NULL),
(1423, 44, 'بطحية', 'Bathia', NULL, NULL),
(1424, 44, 'بلعاص', 'Belaas', NULL, NULL),
(1425, 44, 'بن علال', 'Ben Allal', NULL, NULL),
(1426, 44, 'بئر ولد خليفة', 'Bir-Ould-Khelifa', NULL, NULL),
(1427, 44, 'برج الأمير خالد', 'Bordj-Emir-Khaled', NULL, NULL),
(1428, 44, 'بومدفع', 'Boumedfaa', NULL, NULL),
(1429, 44, 'بوراشد', 'Bourached', NULL, NULL),
(1430, 44, 'جليدة', 'Djelida', NULL, NULL),
(1431, 44, 'جمعة أولاد الشيخ', 'Djemaa Ouled Cheikh', NULL, NULL),
(1432, 44, 'جندل', 'Djendel', NULL, NULL),
(1433, 44, 'العبادية', 'El-Abadia', NULL, NULL),
(1434, 44, 'العامرة', 'El-Amra', NULL, NULL),
(1435, 44, 'العطاف', 'El-Attaf', NULL, NULL),
(1436, 44, 'الماين', 'El-Maine', NULL, NULL),
(1437, 44, 'حمام ريغة', 'Hammam-Righa', NULL, NULL),
(1438, 44, 'الحسانية', 'Hassania', NULL, NULL),
(1439, 44, 'الحسينية', 'Hoceinia', NULL, NULL),
(1440, 44, 'خميس مليانة', 'Khemis-Miliana', NULL, NULL),
(1441, 44, 'المخاطرية', 'Mekhatria', NULL, NULL),
(1442, 44, 'مليانة', 'Miliana', NULL, NULL),
(1443, 44, 'وادي الشرفاء', 'Oued Chorfa', NULL, NULL),
(1444, 44, 'واد الجمعة', 'Oued Djemaa', NULL, NULL),
(1445, 44, 'الروينة', 'Rouina', NULL, NULL),
(1446, 44, 'سيدي الأخضر', 'Sidi-Lakhdar', NULL, NULL),
(1447, 44, 'تاشتة زقاغة', 'Tacheta Zegagha', NULL, NULL),
(1448, 44, 'طارق بن زياد', 'Tarik-Ibn-Ziad', NULL, NULL),
(1449, 44, 'تبركانين', 'Tiberkanine', NULL, NULL),
(1450, 44, 'زدين', 'Zeddine', NULL, NULL),
(1451, 45, 'عين بن خليل', 'Ain Ben Khelil', NULL, NULL),
(1452, 45, 'عين الصفراء', 'Ain Sefra', NULL, NULL),
(1453, 45, 'عسلة', 'Asla', NULL, NULL),
(1454, 45, 'جنين بورزق', 'Djenienne Bourezg', NULL, NULL),
(1455, 45, 'البيوض', 'El Biodh', NULL, NULL),
(1456, 45, 'القصدير', 'Kasdir', NULL, NULL),
(1457, 45, 'مكمن بن عمار', 'Makmen Ben Amar', NULL, NULL),
(1458, 45, 'المشرية', 'Mecheria', NULL, NULL),
(1459, 45, 'مغرار', 'Moghrar', NULL, NULL),
(1460, 45, 'النعامة', 'Naama', NULL, NULL),
(1461, 45, 'سفيسيفة', 'Sfissifa', NULL, NULL),
(1462, 45, 'تيوت', 'Tiout', NULL, NULL),
(1463, 46, 'أغلال', 'Aghlal', NULL, NULL),
(1464, 46, 'عين الأربعاء', 'Ain El Arbaa', NULL, NULL),
(1465, 46, 'عين الكيحل', 'Ain Kihal', NULL, NULL),
(1466, 46, 'عين تموشنت', 'Ain Temouchent', NULL, NULL),
(1467, 46, 'عين الطلبة', 'Ain Tolba', NULL, NULL),
(1468, 46, 'عقب الليل', 'Aoubellil', NULL, NULL),
(1469, 46, 'بني صاف', 'Beni Saf', NULL, NULL),
(1470, 46, 'بوزجار', 'Bouzedjar', NULL, NULL),
(1471, 46, 'شعبة اللحم', 'Chaabat El Ham', NULL, NULL),
(1472, 46, 'شنتوف', 'Chentouf', NULL, NULL),
(1473, 46, 'العامرية', 'El Amria', NULL, NULL),
(1474, 46, 'المالح', 'El Maleh', NULL, NULL),
(1475, 46, 'المساعيد', 'El Messaid', NULL, NULL),
(1476, 46, 'الأمير عبد القادر', 'Emir Abdelkader', NULL, NULL),
(1477, 46, 'حمام بوحجر', 'Hammam Bou Hadjar', NULL, NULL),
(1478, 46, 'الحساسنة', 'Hassasna', NULL, NULL),
(1479, 46, 'حاسي الغلة', 'Hassi El Ghella', NULL, NULL),
(1480, 46, 'وادي برقش', 'Oued Berkeche', NULL, NULL),
(1481, 46, 'وادي الصباح', 'Oued Sebbah', NULL, NULL),
(1482, 46, 'أولاد بوجمعة', 'Ouled Boudjemaa', NULL, NULL),
(1483, 46, 'أولاد الكيحل', 'Ouled Kihal', NULL, NULL),
(1484, 46, 'ولهاصة الغرابة', 'Oulhaca El Gheraba', NULL, NULL),
(1485, 46, 'سيدي بن عدة', 'Sidi Ben Adda', NULL, NULL),
(1486, 46, 'سيدي بومدين', 'Sidi Boumediene', NULL, NULL),
(1487, 46, 'سيدي ورياش', 'Sidi Ouriache', NULL, NULL),
(1488, 46, 'سيدي صافي', 'Sidi Safi', NULL, NULL),
(1489, 46, 'تامزورة', 'Tamzoura', NULL, NULL),
(1490, 46, 'تارقة', 'Terga', NULL, NULL),
(1491, 47, 'بريان', 'Berriane', NULL, NULL),
(1492, 47, 'بونورة', 'Bounoura', NULL, NULL),
(1493, 47, 'ضاية بن ضحوة', 'Dhayet Bendhahoua', NULL, NULL),
(1494, 47, 'العطف', 'El Atteuf', NULL, NULL),
(1495, 58, 'المنيعة', 'El Meniaa', NULL, NULL),
(1496, 47, 'غرداية', 'Ghardaia', NULL, NULL),
(1497, 47, 'القرارة', 'El Guerrara', NULL, NULL),
(1498, 58, 'حاسي الفحل', 'Hassi Fehal', NULL, NULL),
(1499, 58, 'حاسي القارة', 'Hassi Gara', NULL, NULL),
(1500, 47, 'المنصورة', 'Mansoura', NULL, NULL),
(1501, 47, 'متليلي', 'Metlili', NULL, NULL),
(1502, 47, 'سبسب', 'Sebseb', NULL, NULL),
(1503, 47, 'زلفانة', 'Zelfana', NULL, NULL),
(1504, 48, 'عين الرحمة', 'Ain Rahma', NULL, NULL),
(1505, 48, 'عين طارق', 'Ain-Tarek', NULL, NULL),
(1506, 48, 'عمي موسى', 'Ammi Moussa', NULL, NULL),
(1507, 48, 'بلعسل بوزقزة', 'Belaassel Bouzagza', NULL, NULL),
(1508, 48, 'بن داود', 'Bendaoud', NULL, NULL),
(1509, 48, 'بني درقن', 'Beni Dergoun', NULL, NULL),
(1510, 48, 'بني زنطيس', 'Beni Zentis', NULL, NULL),
(1511, 48, 'دار بن عبد الله', 'Dar Ben Abdelah', NULL, NULL),
(1512, 48, 'جديوية', 'Djidiouia', NULL, NULL),
(1513, 48, 'الحاسي', 'El Hassi', NULL, NULL),
(1514, 48, 'الحمادنة', 'El H\'madna', NULL, NULL),
(1515, 48, 'الولجة', 'El Ouldja', NULL, NULL),
(1516, 48, 'القطار', 'El-Guettar', NULL, NULL),
(1517, 48, 'المطمر', 'El-Matmar', NULL, NULL),
(1518, 48, 'حد الشكالة', 'Had Echkalla', NULL, NULL),
(1519, 48, 'حمري', 'Hamri', NULL, NULL),
(1520, 48, 'القلعة', 'Kalaa', NULL, NULL),
(1521, 48, 'لحلاف', 'Lahlef', NULL, NULL),
(1522, 48, 'مازونة', 'Mazouna', NULL, NULL),
(1523, 48, 'مديونة', 'Mediouna', NULL, NULL),
(1524, 48, 'منداس', 'Mendes', NULL, NULL),
(1525, 48, 'مرجة سيدي عابد', 'Merdja Sidi Abed', NULL, NULL),
(1526, 48, 'واريزان', 'Ouarizane', NULL, NULL),
(1527, 48, 'وادي الجمعة', 'Oued El Djemaa', NULL, NULL),
(1528, 48, 'وادي السلام', 'Oued Essalem', NULL, NULL),
(1529, 48, 'وادي رهيو', 'Oued-Rhiou', NULL, NULL),
(1530, 48, 'أولاد يعيش', 'Ouled Aiche', NULL, NULL),
(1531, 48, 'أولاد سيدي الميهوب', 'Ouled Sidi Mihoub', NULL, NULL),
(1532, 48, 'الرمكة', 'Ramka', NULL, NULL),
(1533, 48, 'غليزان', 'Relizane', NULL, NULL),
(1534, 48, 'سيدي  خطاب', 'Sidi Khettab', NULL, NULL),
(1535, 48, 'سيدي لزرق', 'Sidi Lazreg', NULL, NULL),
(1536, 48, 'سيدي أمحمد بن علي', 'Sidi M\'hamed Benali', NULL, NULL),
(1537, 48, 'سيدي امحمد بن عودة', 'Sidi M\'hamed Benaouda', NULL, NULL),
(1538, 48, 'سيدي سعادة', 'Sidi Saada', NULL, NULL),
(1539, 48, 'سوق الحد', 'Souk El Had', NULL, NULL),
(1540, 48, 'يلل', 'Yellel', NULL, NULL),
(1541, 48, 'زمورة', 'Zemmoura', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `commune_store`
--

CREATE TABLE `commune_store` (
  `commune_id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL DEFAULT '0',
  `price_wilaya` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commune_store`
--

INSERT INTO `commune_store` (`commune_id`, `store_id`, `price`, `price_wilaya`) VALUES
(554, 15, 500, 500),
(555, 15, 500, 500),
(556, 15, 500, 500),
(557, 15, 500, 500),
(558, 15, 500, 500),
(559, 15, 500, 500),
(560, 15, 500, 500),
(561, 15, 500, 500),
(562, 15, 500, 500),
(563, 15, 500, 500),
(564, 15, 500, 500),
(565, 15, 500, 500),
(566, 15, 500, 500),
(567, 15, 500, 500),
(568, 15, 500, 500),
(569, 15, 500, 500),
(570, 15, 500, 500),
(571, 15, 500, 500),
(572, 15, 500, 500),
(573, 15, 500, 500),
(574, 15, 500, 500),
(575, 15, 500, 500),
(576, 15, 500, 500),
(577, 15, 500, 500),
(578, 15, 500, 500),
(579, 15, 500, 500),
(580, 15, 500, 500),
(581, 15, 500, 500),
(582, 15, 500, 500),
(583, 15, 500, 500),
(584, 15, 500, 500),
(585, 15, 500, 500),
(586, 15, 500, 500),
(587, 15, 500, 500),
(588, 15, 500, 500),
(589, 15, 500, 500),
(590, 15, 500, 500),
(591, 15, 500, 500),
(592, 15, 500, 500),
(593, 15, 500, 500),
(594, 15, 500, 500),
(595, 15, 500, 500),
(596, 15, 500, 500),
(597, 15, 500, 500),
(598, 15, 500, 500),
(599, 15, 500, 500),
(600, 15, 500, 500),
(601, 15, 500, 500),
(602, 15, 500, 500),
(603, 15, 500, 500),
(604, 15, 500, 500),
(605, 15, 500, 500),
(606, 15, 500, 500),
(607, 15, 500, 500),
(608, 15, 500, 500),
(609, 15, 500, 500),
(610, 15, 500, 500),
(284, 15, 800, 800),
(285, 15, 800, 800),
(286, 15, 800, 800),
(287, 15, 800, 800),
(288, 15, 800, 800),
(289, 15, 800, 800),
(290, 15, 800, 800),
(291, 15, 800, 800),
(292, 15, 800, 800),
(293, 15, 800, 800),
(294, 15, 800, 800),
(295, 15, 800, 800),
(296, 15, 800, 800),
(297, 15, 800, 800),
(298, 15, 800, 800),
(299, 15, 800, 800),
(300, 15, 800, 800),
(301, 15, 800, 800),
(302, 15, 800, 800),
(303, 15, 800, 800),
(304, 15, 800, 800),
(305, 15, 800, 800),
(306, 15, 800, 800),
(307, 15, 800, 800),
(308, 15, 800, 800),
(1110, 18, 1500, 1500),
(1111, 18, 1500, 1500),
(1112, 18, 1500, 1500),
(1113, 18, 1500, 1500),
(1114, 18, 1500, 1500),
(1115, 18, 1500, 1500),
(1116, 18, 1500, 1500),
(1117, 18, 1500, 1500),
(1118, 18, 1500, 1500),
(1119, 18, 1500, 1500),
(1120, 18, 1500, 1500),
(1121, 18, 1500, 1500),
(1122, 18, 1500, 1500),
(1123, 18, 1500, 1500),
(1124, 18, 1500, 1500),
(1125, 18, 1500, 1500),
(1126, 18, 1500, 1500),
(1127, 18, 1500, 1500),
(1128, 18, 1500, 1500),
(1129, 18, 1500, 1500),
(1130, 18, 1500, 1500),
(1131, 18, 1500, 1500),
(1132, 18, 1500, 1500),
(1133, 18, 1500, 1500),
(1134, 18, 1500, 1500),
(1135, 18, 1500, 1500),
(554, 18, 0, 0),
(555, 18, 0, 0),
(556, 18, 0, 0),
(557, 18, 0, 0),
(558, 18, 0, 0),
(559, 18, 0, 0),
(560, 18, 0, 0),
(561, 18, 0, 0),
(562, 18, 0, 0),
(563, 18, 0, 0),
(564, 18, 0, 0),
(565, 18, 0, 0),
(566, 18, 0, 0),
(567, 18, 0, 0),
(568, 18, 0, 0),
(569, 18, 0, 0),
(570, 18, 0, 0),
(571, 18, 0, 0),
(572, 18, 0, 0),
(573, 18, 0, 0),
(574, 18, 0, 0),
(575, 18, 0, 0),
(576, 18, 0, 0),
(577, 18, 0, 0),
(578, 18, 0, 0),
(579, 18, 0, 0),
(580, 18, 0, 0),
(581, 18, 0, 0),
(582, 18, 0, 0),
(583, 18, 0, 0),
(584, 18, 0, 0),
(585, 18, 0, 0),
(586, 18, 0, 0),
(587, 18, 0, 0),
(588, 18, 0, 0),
(589, 18, 0, 0),
(590, 18, 0, 0),
(591, 18, 0, 0),
(592, 18, 0, 0),
(593, 18, 0, 0),
(594, 18, 0, 0),
(595, 18, 0, 0),
(596, 18, 0, 0),
(597, 18, 0, 0),
(598, 18, 0, 0),
(599, 18, 0, 0),
(600, 18, 0, 0),
(601, 18, 0, 0),
(602, 18, 0, 0),
(603, 18, 0, 0),
(604, 18, 0, 0),
(605, 18, 0, 0),
(606, 18, 0, 0),
(607, 18, 0, 0),
(608, 18, 0, 0),
(609, 18, 0, 0),
(610, 18, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customerdevices`
--

CREATE TABLE `customerdevices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fcm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fcm_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune_id` bigint(20) UNSIGNED DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `longitude` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validated` tinyint(4) NOT NULL DEFAULT '0',
  `code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `provider`, `provider_id`, `fcm_token`, `key`, `phone`, `password`, `commune_id`, `address`, `longitude`, `latitude`, `image`, `ban`, `remember_token`, `validated`, `code`, `created_at`, `updated_at`) VALUES
(22, 'test', 'marwan.miloudi.03@gmail.com', NULL, NULL, 'sdfsdfsd', NULL, NULL, '$2y$10$Gc7WQhGf.yddba8tzJpIROh2GgE7h3d94Y/o/UGOQnqb27Tic9F1O', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '481849', '2023-05-16 15:50:40', '2023-05-17 14:34:03'),
(23, 'خالد', 'khaledlearn2023@gmail.com', NULL, NULL, 'd705HSqnSTWof01b0OlQcs:APA91bEVcYRYYO0MlItsaOvebvK4ECsrEhrfasT8pc1tr25OFDqZNONLqwoT7ng_lrsre32RpzzwFucNLS_jQueopw96QOLbZgR-A21OKMUX485CQooUgwSbfKnxsM29gTPRqe9pzLcN', NULL, NULL, '$2y$10$r0raHrZ.Wi7d4Wm4qgxXGOI7NRc2xr2i1TAE7ifVj6/8vRPcObIKO', NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, '413268', '2023-05-17 17:38:40', '2023-06-25 22:00:34'),
(24, 'ayoub', 'khaledlearn2203@gmail.com', NULL, NULL, 'fWFjL-SRQ3GPyFQSKhEZwI:APA91bF9bvelv7znXwFipDxg_JgnAxqIVZhHWS_XGNR1L039PpFrf3YinMb51QDS2LKoUP9FcYXH6JpczfbYMKn3_gguXDh1rLTg8sYRaCM1ldDZoRIHIHkJXP8ogleL37vffJwwkN5o', NULL, '0666042021', '$2y$10$VtDZRpNodyHdp7cG9CLnG.hmrix47Mx5OqBgqQNxu1di2KZjuTTXy', 1084, 'add', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-05-17 17:51:11', '2023-05-18 15:17:07'),
(25, 'hadii', 'hamidbeghdaoui.b@gmail.com', NULL, NULL, 'cLBxYEkmR3CiOL_IYe4E5L:APA91bFY5fVEYbkImV9MgcV5fNoe_i_z9B_pakQhuqem2yVPukwFrJoWeEnhSkD-0qLwZNknB_l8121xhXiv0WhwpDZuvmqQHh-i73X_2loTGUxtKDCDKsh6IZ9K2roVLBZWEvnll-wm', NULL, '0561353857', '$2y$10$cUr9otCbAXqGF/S3Q3vg/OebOtROQU48XuYl9yTWoL3P0F5HVbc3y', 294, 'blida', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-05-18 10:48:35', '2023-05-20 11:24:16'),
(26, 'ahmed', 'ahmed.emballage2019@gmail.com', NULL, NULL, 'f1-5HfX5SraraEbz_GEY5p:APA91bF7s71k2cPOCLuCL49N3wSBFC9EjxOAJERrOkQrFmbBztAXYhgUrG8NCPY6f6LkXXNAb81oHuBfWyzKWq2_ExNrQVgqcnNk6RMfsVg1DvIY-SPe74EbQkDP7YG4vLu90TM7LM58', NULL, '0555081602', '$2y$10$YbEVtSLxWcNE5ZlWccxUDOP9ujH/dz.OIvFcaLp6kNiV62ltywHtK', 1084, 'sig 490lgts', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-05-18 14:30:27', '2023-05-18 14:32:06'),
(27, 'أحمد', 'aboiyad@gmail.com', NULL, NULL, 'dBNKFYrUSp-TiwZke8rqPJ:APA91bHYqI6XtvdaS5PyD6fdHaNtipZtH4ckx9kEwD_hwo1q6ZfdxK_LJpbPb2TozKobg_dzYYeBX9eyZWg-ICLisNV6-hi_AGX9sckgpsdO-m3g6PWh42XdxsL-nX5mJ3XeDuxnvJI6', NULL, NULL, '$2y$10$8ORSL9fJqn2YiM0Q6HjLWuYReLoC0MDGDk4JtW2WDXvziJRlXm/Sm', NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, '188225', '2023-05-19 07:49:33', '2023-07-04 03:23:42'),
(28, 'aaa', 'siad41amina@gmail.com', NULL, NULL, 'dw2SzMM8SIqkbGKqVryF0K:APA91bGCihcDUHtd7Er__zqq08CWBhrYev3vTpTudy2567WWwz78AmxY7EoA-0tF4cks5QCIoWjTRFy_dRgCNaIPmOM49Kct2WBCRdlsRPqhm6Y0vpG3MVMAYEQJ05CGBAIaGYcRFUlc', NULL, '0668418740', '$2y$10$qrfe/40qtAV62eCZBMhRR.1dqy.G0lUiRiOKN7zwGxe1IGOlQiSyq', 561, 'address', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-05-22 10:32:32', '2023-05-22 10:34:19'),
(29, 'hadj sadok Abdellah', 'abdoou09@gmail.com', NULL, NULL, 'dNN9sEdqRWGQb6s4-tu4cZ:APA91bHH2l8CnCr_rygL3C9_wxGoTa30uv_Lqw73bMaEmFdWR2wH3CSTRO4158Vg4Wt4LB9xG4KcKSgyMURfb74wtCuiaaDbtLRc9mHDwytFzqldZt9Zjrbux7gR5Grn_nioQlCYFTk8', NULL, NULL, '$2y$10$I7ZyzE23JPjYZyaGIpTSou3ZVJZumb/kuW7mdLgmWnkDpBUxqhsei', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '900435', '2023-06-07 17:18:12', '2023-07-01 18:08:08'),
(30, 'ayoub', 'hadriaayoub718@gmail.com', NULL, NULL, 'cZYgVa_MR7erm1ZnnB_mer:APA91bHLDACGNRosDCdMLJWaRSsZJFKJuq9rTYLJaQJe6qbuFDo9g55GG_aQYSWDL8K42HAFHvsXBW-NI30GgthhJvu8UHuytAJ6fbMu5ZrRy-cjWpX_bo9hlVBlzxLUj0f9zSuOaB_I', NULL, NULL, '$2y$10$V8KMEGadZUimCwT6mNL1VuUrcezuhoW4.lYjtAjPXCvP2.rJLR/qm', NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, '281857', '2023-06-07 22:32:35', '2023-07-09 07:36:40'),
(31, 'خالد', 'med75105@gmail.com', NULL, NULL, 'cZYgVa_MR7erm1ZnnB_mer:APA91bHgQ5kqqK4LlOsPvU1Djy4idR8aPPR1BGb4JG3jWihYa6PGhaDpcdtCbx1KG1-Ji69A2fdDin49gfJQNIR7tL_Whpj20Fzw4pElZWbbOMZwTcjzOmLEA2LKsWV560qZI76UIfE5', NULL, '0696741006', '$2y$10$cqkkFuQxByJwy1kN/6Teae2ZWOl1hKJ8cgV.GtwT9Xre9Mi9bf4su', 270, 'address', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-06-10 19:54:39', '2023-07-01 20:09:31'),
(32, 'adicolor', 'hdjt01803@gmail.com', NULL, NULL, 'dDaJgzT1SuOKE6Eakbv01p:APA91bEmPNWC2S_nGLr5q9GIKqt_7JWRJjMxf9vBtE5VL5f2jmy6HfMXQBALmE50eib64QpADImR3A_TtHTe9EzocBEsM6IogWDpGxDT8iRxjFu4VXrmPTfxjKf_UvMAYVNtpw0wR5Yx', NULL, '0541661802', '$2y$10$yk/lQaHcafQ0Zl1ujM3MXeTLhMP5FpL/JMlZKBwL9fLVqSZ3Z9vAG', 1131, 'avenue sid chahmi', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-06-21 10:01:05', '2023-06-21 10:02:37'),
(33, 'salim soualhia', 'salimsoualhia85@gmail.com', NULL, NULL, 'ftpHZvN_SdeGmhN8dJ9wUn:APA91bFw1yBJMw45iG5Wyfu52xpM3NJbFSd5nTaCRvDRQZQUXgStzGTU0-7emn2X9VwtvLu5tYnEoaZnTYMJILfnwB9EBWWva7nSSDd-kxC0wYOIVLKY51y0uZ-uY8ozgGt_w8uN3FR-', NULL, NULL, '$2y$10$JLst5ZGd0CF2qxs3rDjckeBbjyercLuwayC24LMHjWpee34D06swC', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '378852', '2023-06-22 22:49:42', '2023-06-22 22:50:28'),
(34, 'hadj sadok Abdellah', 'krmkrm14@gmail.com', NULL, NULL, 'dNN9sEdqRWGQb6s4-tu4cZ:APA91bHoaL-HYJgoleBRY-GmFjBV3dMwS41dAofx-4II09beB_jiuS2i0aRxDfz9VJcyzWY1AwuvkT__lhjzhxt3IsNrOPXLva-fdqG-M_yKfxZdXFPUEJPXRwF61PaV3nx9vgWU0rLD', NULL, '0671710420', '$2y$10$QTif9/AyfklbtxQwaU5CCOL3oXwlAWTTGYbsyA3l5ObyyleJZQqna', 294, 'cite 300 logement', NULL, NULL, '34_64a06d681a4f0image_cropper_1688235320178.jpg', 0, NULL, 1, NULL, '2023-06-23 06:54:44', '2023-07-01 18:16:08'),
(35, 'Hafsi momamed', 'ahmadh898@gmail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$47vhGs5igaRN8NaVlPT.DuQQQ/NuCELG64Lmc7ozcLs713YGs2GHi', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2023-06-23 10:23:29', '2023-06-23 10:23:29'),
(36, 'حفصي محمد', 'ahmedh899@gmail.com', NULL, NULL, 'dY6oY07STo-efeun5OFX01:APA91bG7e1MjXQRp7R4W1HIKAxLqQHhEg140WkX_uPwrd4zP-TwwEhV_vWAmzQCGJzm11IEJf3Z0KNXxvofRZabcueKLTuGgUtJ41Xbl0FgR8GLe47hlajCMcl9O0vif3GUzBmfFL4xm', NULL, '0698004929', '$2y$10$pZK91IRsjT7EMHMQK9pz7euprO5UT1e6s2OydMcl6YNwss8azaaim', 1101, 'القصر العتيق ورقلة', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-06-23 10:31:24', '2023-06-23 10:37:11'),
(37, 'lina', 'lina20.quotex@gmail.com', NULL, NULL, 'eQa02cTUQb-dF9IpDwfJvS:APA91bF545D4pRdjHwSTypgzMV5O9DC3taijfHo5GKwaEPBKOrZbETHz9vB39Fs3FdS10_dwVlaWUmhIdgrGn47E-VRt_wKCLlIh-XCl2NreOM3Rm4yDOZbOaOxEtL-jtcPCEc9YpqWl', NULL, '0542991306', '$2y$10$Q82XXzhArnRq0CnZhUIroeD6wuQQlHDp26b8qHmdhKDIoroghWzf2', 566, 'birtouta', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-06-24 05:24:36', '2023-06-24 05:25:38'),
(38, 'amro messouci', 'amroroods@gmail.com', NULL, NULL, 'ekK4QrG2TT2Ef7AsnJNyLC:APA91bFbuuDwfO4pwvhq0S_wUe4H1ykpODa1SBrfKT5BQE2HVx_BXZpxFlYQRFE4m5n5At8u7Ob4gan5xFlbT1oWCHb5RveBAFrXbEWjtGkWxW86i19gQpb5fbN4a2zQKn7onDzTnnAu', NULL, '0668954934', '$2y$10$cwkyS5TmZHClqIB.xMwoN.pfk48SOjzmcx5VCOGHkNMz.L3TWRptm', 335, 'chaabet Brahim taghzoit daïra haizar', NULL, NULL, '38_6496d9980691fimage_cropper_1687607627868.jpg', 0, NULL, 1, NULL, '2023-06-24 11:53:03', '2023-06-24 11:55:04'),
(39, 'حضرية', 'khaledhadria1@gmail.com', NULL, NULL, 'cZYgVa_MR7erm1ZnnB_mer:APA91bEbqaKIzaQO37BrlIkU9AnmureXVq3m5lJiv7BHuPpq3nn4iz6PUOFH2ke-gj6L4rxPFkcAXc9Oi2KMi_DwYsiYRhwoAg7cdYIkg120N24CS2wh7zaDGxCmVMVBpjVh3UJo7MD-', NULL, '0696741006', '$2y$10$wQHxiSXMtWofQI4GM5us7.3uqgWoAHwuAe8jBu9KrcEuD5WMqJs.u', 1051, 'سد الشرفاء', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-06-25 14:46:57', '2023-07-09 09:33:39'),
(40, 'mess', 'messhan@laiv.fr', NULL, NULL, 'daBAJ6R_RD6572mm1O41WS:APA91bFhtj9XB15Kmuzq8wS76SwNoBtk2XAUR3Z9kxxMIfhzX10Bq5eDQ55QYQCKQwTZxszpHSwaWs5Vb0bMRmc1bMW4Gf08rfy4Tf3HBkXV-6QJ-353FNadEcW7Ie1WuXqyjip6uSyk', NULL, NULL, '$2y$10$HeA.DgXDc2T9.dJqYrlH1eT6BpHiEMvv/W54NSSTpcA9v0N8D4PxK', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '165366', '2023-06-26 01:02:20', '2023-06-26 01:04:45'),
(41, 'salah', 'salaheddineakkouche19@gmail.com', NULL, NULL, 'cW_HfTZtRdGVKQJNDd15L7:APA91bHVMzA6JfzFB9KSMbbHjHfA_MrbUZC7N0vhNV4Re3x150qpxY-1RiKTZbJKgOfFBm2Xuo7WHTTcG_jJcBvQQH3q-gi7-vXTNxH_HYtaCKENoyx4QOEgvgWA2nz47-dp_ku8Juil', NULL, '0659022716', '$2y$10$Gy4s1xReWDH7hF6WZRFLMuhXTqnZxW3gL0QjbrTXDG59MH/B0I31i', 729, 'setif', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-06-26 06:32:07', '2023-06-26 06:34:21'),
(42, 'latati hamid', 'latatihamid307@gmail.com', NULL, NULL, 'cV6sk3o1SR2__5HHPpmwpI:APA91bGNrhv8tw_drOwvFZ2NqzBYiMizG-7uLWD5FAGVYA2JhRolOGRzGAqZ-CjjTIwR1fZcz2qWFX0UIMjnQw0x6umQgfsKuBXwJPVsQZOTL1uVRbNkahqLfkXDH_vsb5N9uJb1wLoW', NULL, '0556547741', '$2y$10$zsMtME426imBqLnnXiIL4eYYOMPVWf9AUAF/cYV4RaCFasECb4XkW', 434, 'lati', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-06-26 06:54:01', '2023-06-26 06:56:37'),
(43, 'doma construction', 'doma.construction.dz@gmail.com', NULL, NULL, 'fta8RhrQSMuOR0OehFBERe:APA91bFUd9_tVl1yXbXt3oMo0oEPGff6DLygOcpdSxZ7XJCFLuWNmjLpbKFvNSJAPvRPGgZIVKMCd6KE6_9dOMoj7Z7NXxOXHrBUMfUVw-TpO0YFUK_Wgw9jhuQO4g1qzw43tyst8nvK', NULL, '0540217508', '$2y$10$zGF45nrPD94tQzjRA30ulO7PqXKSdsXjvsV3wgbUJ0/GgOkuhDfwC', 288, 'Rue Belkacem El ouazri N°03, RDC.', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-06-26 09:18:03', '2023-06-26 09:20:43'),
(44, 'gmn', 'nounounono88@gmail.com', NULL, NULL, 'cUZ4toVBQNyl02dHi32VCY:APA91bGVaBzd_AlLCexK8Kd3gR7IHXhYYjRlWDiN7LyOYCV1ALoRJgO0MDypI2FG0bxgExHcAQXLyTozFyL9ueQGpP_QoF8eIfX27kOB416bbcwLa-EN794oHom2JHoP0Oex1zxh0PwM', NULL, '0549355237', '$2y$10$qvd9WIEVQTYyEaCwAgdM3eIauqcFGgKhcxP.ADendlcV72bPe.69m', 107, 'meskiana', NULL, NULL, '44_64996c84cb47fimage_cropper_1687776358240.jpg', 0, NULL, 1, NULL, '2023-06-26 10:44:47', '2023-06-26 10:46:28'),
(45, 'Haroun hadfani', 'hadfani@gmail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$2LqiLyw.5VqvK7zemFQJW.2CwnOQmuxNFYosAEWyEQ6PHwe7HRUE6', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2023-06-26 11:39:52', '2023-06-26 11:39:52'),
(46, 'HAMDI Brahim', 'hamdibr03@gmail.com', NULL, NULL, 'cePPvIxiS8KvpRAonOOnnU:APA91bEew81gvvVsTZVPHCV1r7qa1WGAszgRIc3F3o44Vcc5VZMVMZwxGQcg4E_QgdTBC2O7CJwNpQVxEZ_5UXy59x6umVQedmiDBa0n7sEqoJQ7ZV3VXmQp8Zamwvf6Zc1JU1dCgSLk', NULL, '0668441313', '$2y$10$/5sAND29g2Rg36JSrac/D.hJEHvTQkOO3hVqKjWgYrwwBGcKijGKC', 79, 'mhafir', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-06-26 22:47:12', '2023-06-26 22:49:30'),
(47, 'gacem noureddine', 'gacemnoureddine21@gmail.com', NULL, NULL, 'f_j4SX7YRma-bQ-N8-X6q-:APA91bGJ0gz0F0Bh0qCTsFwy_JdEPVMl7Qz4bw3LpJY356FfmjT9X2GKkA42bAaR_RvO8eVizDoJaViL7mQP3dwuMS4TH1CWLDXXfajLA0IohjL1AeHHcO2fZ1Sj_3fr29b9wqXYS31H', NULL, '0793281405', '$2y$10$i4VVSPfdL92WpvmEW/XMpug9g8U6C6gujPLG97GdG7R9RiYfzfekG', 337, 'cité aadl', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-06-27 00:34:08', '2023-06-27 00:35:52'),
(48, 'med', 'chasing.markets@gmail.com', NULL, NULL, 'f30tYd_wQpCM9IL39iPWNG:APA91bECRaAmoY3YFdADv2LqEMK9ogLfSx_8_Fl0hfjUnN9FPgVjoIUH-1quan2jqxrnoaMwwb0cgsk90XZisYMKYFSnPOehSgG7pJVVbKa7atW0KqVCYBsAr9EhjiSWMN0AJ4jrSlyg', NULL, '0658719769', '$2y$10$jvbGjXnyviJHwSSvAyzBBun8m7Jb5gkduYRdYwNEL/iHggR9FHFeu', 432, 'sabra', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-06-27 07:02:08', '2023-06-27 07:03:04'),
(49, 'rochdi jarray', 'wiwibricol@gmail.com', NULL, NULL, 'c8tarde_Tqm7Gzuq81BLZA:APA91bGiQq2l_0mwoAzgjItnF83lFgIvPqNge-G3DCQYiyrSmwP5KVLWdREHqztU8e2uEJRldn0ThdVPWN3EUYCmwg4ExqdXGY4GkR_6nNuJRos9SARCLShPfxSsGzW-wngYed1RQzXP', NULL, '0559269923', '$2y$10$38xYiniSE075CF5iPjKI9.aRt5fXluTECMOmds9Hgz9oVOJaxIYv.', 122, 'barika', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-06-27 10:46:56', '2023-06-27 10:58:51'),
(50, 'your builing', 'atrouzyounesplatre@gmail.com', NULL, NULL, 'dcLFUXIIQOei-euwp-uiG1:APA91bHX5_KCaoLpBCGX8drzZR0maSQe1RqkWcRHDtYcLiIkPLju0fDeu3LNi-1kEsgQ8fBTpcJU1ls00mHwycOaDcJbuLES836lZYwx80wuSN7WGXkKbilaVR6JNquV_VnBGD4gvo1Q', NULL, '0661434769', '$2y$10$OVGBuA5eKAYNEVyb9EGNx.oRMba7u9/JiMPhJl8oWJZ/EdeLtMNTq', 578, 'lotissement Boudjemaa temim', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-06-27 11:20:29', '2023-06-27 11:57:32'),
(51, 'cheikh nail', 'cheikhnailloutfi@gmail.com', NULL, NULL, 'efNYwVl1THmwxauBSUGcL3:APA91bEpKHe8ilpTphG6UBwJXN8qKOx279K4b3AHLO8xC_lQ5kxP57PzfZap2O4h2ylJcf4C4mLnu3NjwVGZfzmoavzQltd2ULbxpsKHyzKPUcXQ8RAfXUqlVXRoar0qjNGlsH-Hnw5H', NULL, '0779757448', '$2y$10$uApmb.j.mSIzs5Sf451ajuLrzbQrt2OUNp7NTc6gaANBU01n9rd1C', 636, 'lotissement 213', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-06-29 08:32:01', '2023-06-29 17:37:38'),
(52, 'ELKEBICH Mohamed', 'elkebich.larbi3@gmail.com', NULL, NULL, 'e89wmB1wRaSb5UiQnhZUsp:APA91bFFLqTEcoYssba9JQz9SogZChYYM0O2oJl4LNULKJcd8dQqID_S39H09NqKrIAmzHQXeVUOnVyxmuicnaokXDNeiTOBHQU5q4qWzypRqjbpqTQvMoFBBXAw7op1v7C4iRd7R251', NULL, '0790438401', '$2y$10$6RGUZKWlsRuFJB5jY2K2qe1wDHxnuHquiIFId.KnrdUo7P9F6glQW', 563, 'Hôpital Beni Messous', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-07-01 13:59:05', '2023-07-01 14:00:57'),
(53, '0662467350', 'faridmiloudi442@gmail.com', NULL, NULL, 'eksdaKhNQW-e1QciEtI_zN:APA91bHRBnvpc34dX7dyIiHkQbCcjYIpYctjSoyip9KKHbRaawRNU2vTDiW_o6E6Yz2hxdUBvXpioUtG865fF5vBpy5A9JWGwPte-QlY8WdRF_rmuxqGT6miaW_EL6MCUesZw1xv8qu9', NULL, NULL, '$2y$10$pdvXNbz4r5NBJ7yunIH2UuZd8UuHjt.nyCsA9OHw32RWivPK.StkW', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '340149', '2023-07-02 21:43:58', '2023-07-02 21:48:33'),
(54, 'omar benseghier', 'omarjijel18@hotmail.com', NULL, NULL, 'fxe5zDvnT4CVWHswyEFq96:APA91bHyO-EFw9qt6k_jnGG99tc2bzq6Ea3U1Z6xaT0DY1_B9xqaXh_J4nIU4cXXjge1VBDFrVcXXldxjJJvYT0rfMvOjdhFWGmT8qNtxC7-W9xdcesIy9JnDo934xB1Go-PT1c_VUy2', NULL, NULL, '$2y$10$O0V93G5w9STo8BR/IlWrDuPBzfAiDGzSLljaKtk1bfRzjO1.u/uUa', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '857280', '2023-07-03 08:56:58', '2023-07-03 08:57:59'),
(55, 'omar benseghier', 'omarjijel18@gmail.com', NULL, NULL, 'fxe5zDvnT4CVWHswyEFq96:APA91bFPoZPvze-QAyGha9cRsBoAq2UeF9yqp251esHomP2BfjnmprhqCCTtnpsmnfc33BYV3zm9Qa27RwPvq0LVNXuxvUnP6iAmyZAhaZKJbGm5lB5mJN1EDdbQuWc9MnMSb3DKs45n', NULL, NULL, '$2y$10$EUgr28l48seqQ4Zht9IOdOv6cLZDMx.05q1Sp1wdxSA0BA80AKkUC', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '594488', '2023-07-03 08:59:04', '2023-07-03 08:59:47'),
(56, 'ykhleflotfi', 'lotfig23@gmail.com', NULL, NULL, 'fdFqput4R5KVpBJ808wcdk:APA91bF_qtJ4Vv3HE-97WJAp-SGJIfrvie-UzNuwI6HOBezTvTFTkUyXKoa9Xkdgkpmvkgw2zn43EBIz-aBtPlw9tx598EMLxz9mPPCvYUxlh5PRz1LY9x45FPBwj8VEplXm9ne7vuPF', NULL, NULL, '$2y$10$F2a./3ZijT8I8WrdKaDXku90y/WsJNUmU4j2eQHyII8FOa9oUor3W', NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, '930203', '2023-07-03 09:53:00', '2023-07-04 03:23:56'),
(57, 'walid otmani', 'walid0636828@gmail.com', NULL, NULL, 'cAcfOsL-Qeu32Xcpsl0qJI:APA91bFM0LSYtpKcYLflKa07zVYXdWDLloaMABnD8iMdIvrVo0I-8g1cVjCPB2vz_s0xCcfet1BykMEdPr6bZCT636OiLZDvt0canlx-UqX25URWOBwz2CRxlF0P840jXCM2bek0MeiQ', NULL, '0662863225', '$2y$10$KAFBwWVsPqDXNWEqUrrrJOZ/2RznJc1WOJWxy1U5s1zqprnXP.9lm', 1450, 'حي مجاهدي مجاهد زدين', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-07-03 14:33:29', '2023-07-03 14:35:16'),
(58, 'Mba Steel', 'billel_34a@hotmail.fr', NULL, NULL, 'diQfFNuMS-mFTPf-ce-VTJ:APA91bGjai7ck1c20SJQX_o6VSOSM9kbZczktqreqJA5vbqG-J8uWfLH_Ev6hpVT35nNL6Xm6r_q1ztjsVjVvdOAwWEU2Xzw8gWE8bRABN1NCILy8bnCkUO8F9Hv0MUM87Kt2iouKtPy', NULL, NULL, '$2y$10$uSwa6dEQKn9rxCsix6TsBuXBxKDWc7CLREhjZnhTwVGIx4IWd3EDW', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '589130', '2023-07-03 19:42:21', '2023-07-03 19:43:31'),
(59, 'Ahmed Hicham', 'hicham2013as@gmail.com', NULL, NULL, 'fS1cr2raQWqkpv3hzaYoKc:APA91bHAznCbYIcwGYcQV8Hld8uazS-NRtxtsvrOoV4D7gOne3RArVHX-idSyAe2JY3nyVKmsPQxav1UphPC8fa4I-Nw7jtQXY9BIfLxdRRemJHEIXB8rVWtgb83Dy7XTmdJNCAHDRDW', NULL, '0661132200', '$2y$10$7UZQolZ0knSd.FY28TZjGe.bUowa1bsoPN81nC54GQFJfFISbDZ7K', 1131, 'bir eldjir', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-07-03 21:39:16', '2023-07-03 21:42:56'),
(60, 'Zaki Arrache', 'arrachezaki36@gmail.com', NULL, NULL, 'fosuYbYCTsi_WMBtX9KMzm:APA91bFORo-PmnWCZ0KWuoBFJGEMbgd-3bOFNZcn2iPBBAOhT_bhdPUqMor4B1wvFSUy34oeCxXUubbtGMdp0zbNHgohhAa_LTnT1L_G3Ruyedvi-o3wAsGf8B8OXgC4vm2geFGMlkld', NULL, '0672995539', '$2y$10$oM7osLXo82fK36tDtS1Ry.V0VxE.qxidNYBM77MbTJAtD5NDRnMp6', 1214, 'issers Boumerdes', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-07-03 21:56:32', '2023-07-03 22:00:16'),
(61, 'haddouche Lounes', 'louneshaddouche71@gmail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$oizpj11I3kkMGYhc3fpqeO7yY57tWxRjhoa8C4jIHBuGsrciN3rzG', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2023-07-03 22:10:41', '2023-07-03 22:10:41'),
(62, 'moussa atchi', 'moussaatchi@gmail.com', NULL, NULL, 'cf2L0tY9RH-gjxAMgsO1aH:APA91bGGfvuJTvQLbD8_OmCRgTL0CHTv3bEj0gbhji3AC4UUuDuPQ6FQQySLtwhfBQiqgGwL2gyH9uepA8MMrKAtfdFN5EmxshJDpa7o_F2urZ56R3JMG8rQsk3vhkzOJYKhUQlwwqir', NULL, NULL, '$2y$10$vh8gF6KFLVdvMKN1kxOqte3At4/ytoNuMyYaPLPlVsCJt/fahEReK', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '962326', '2023-07-04 00:26:46', '2023-07-04 00:30:29'),
(63, 'Houari abderazak', 'abderazakjournaliste@gmail.com', NULL, NULL, 'eg-rHH2OQKmy0N5C90kPV6:APA91bGBOCwmgj-rxAxPLk_M7wK95wnY1C26fVxpZEQF0tvXSsPUSrNCGoYKfpe1icsb-Zzfgehc6Cn1CdQ0k1DQIeu-zGkMrVmKfEeGrLFUoP2oaw27gmi7yBErpasFlst_2qKy0Auf', NULL, '0660365250', '$2y$10$icV5SgYBPPBKqiVLNV7ikeX5SFOC7LC6/xfNiaQlgNW3hwW6Mj3py', 79, 'Oasis nord', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-07-04 09:21:26', '2023-07-04 09:24:52'),
(64, 'red', 'redouane@yopmail.com', NULL, NULL, 'eGiGg8W6SCqgE9AZ8jl3Hb:APA91bEjIlkwdV-tER5G0g3fzLFE9vKpyCaDGVH1-L2gs-f-W5F0FUfIWatb63LEJqprw0-yBFCgsGPnNztzyeBzoGVWLihjPiqA8q86w-DfpYAONjFSUBEMuLqeZL7PNls2LaQAETxq', NULL, '0777777777', '$2y$10$VI7NzTZs5gaZpdgL3B7VRubngoTHVQgy.M9mA6LBzj2QlbCC.Q3zy', 288, 'blida', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-07-04 11:36:45', '2023-07-04 11:38:02'),
(65, 'bh rénovation', 'bhrenovation.entreprise@gmail.com', NULL, NULL, 'ePrwWirxSJmY8HpP1b8STD:APA91bGjmOqyPj-0bsLd663b1eVT-dMa-g9Z1p7ERTliEAsVedKi9xWVsfjIH2hPY1fh6tvYSKQyMRafcXVW11ZwqLKV0J0C92PQL3PxFQwuPZAjbj6FGqkr27iLwszNZT1Fge55YYeU', NULL, NULL, '$2y$10$IrjMVMpo61HPSz4Vpegp3OHZjXhs2aDWbP5nVA.AYkFNK46WsaZsa', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '979932', '2023-07-04 12:58:01', '2023-07-04 21:37:42'),
(66, 'med bel', 'belabbes288@gmail.com', NULL, NULL, 'drofWZ-BQsGYGf7Hqvu8Y6:APA91bF90KxSf8kw3wzXSdxR6g4MSyxr8aTC6DdSVRx-EcTrET4BFEPq7SYf45j61R5_WRtPmxwaP8EsiAhqM6MBkVCWJWcGQhtemCDYix_3V8kQc88MxNm1lEKjhnncrMDZcTImq6FJ', NULL, NULL, '$2y$10$mGDaozrkZ17Nkef6sNuNJ.E5G5Plt80D8p64pQEkpQcrJceT1CgQe', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '240708', '2023-07-04 14:17:47', '2023-07-04 14:18:01'),
(67, 'saloh', 'babasaleh31@gmail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$4j1OGK4u9BaJsbFrMeCIZetEH.7Cxt0VuejySen3azZ2.Tqy3S6i.', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '959447', '2023-07-04 20:29:29', '2023-07-04 20:30:50'),
(68, 'tazouta riad', 'tazoutariad@gmail.com', NULL, NULL, 'eS4mz5OgQOSVLb2myHxbWT:APA91bHGkNuPCvDFEU794QUmzu7hnxBDVQfc6fluWVYw3RF2qMdP37XJZDFi0nl0QdO7AwkNpSJhRtrdr0njNqN_hCpPnoeTn72VRY-qbE0gW5fsk9FB5ATuhLMw0kn-GEXAdT47ZH7n', NULL, NULL, '$2y$10$sREK/4e8cGSh6tqTUttzFuAO0Xr5833hIMN.RAQ/54VN/cuM.e9sq', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '847347', '2023-07-04 22:33:28', '2023-07-04 22:40:47'),
(69, 'HID Manel', 'hkawthermanel@gmail.com', NULL, NULL, 'cr_ZaeoaRsy0gjbGK4Bcmv:APA91bHwIEaCkPDHOwVM3IgrAblpWQu801QS_Cv6XzRKfb8pBrr0FU2RjDBR7pO-oeiazLaMT5__8DIk9vANNHzrhLR9HSxBb8x0sfKqGeJwslAXJofthoco2DTqs0rdpeuVB68h77E5', NULL, '0551946523', '$2y$10$gPRR2x0XVsDgpkXON8qV5OThqv/ZrtuCOqAsgE33DBKRYD3zKi./q', 595, 'les bananiers', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-07-05 06:50:33', '2023-07-05 09:33:54'),
(70, 'sos', 'hfjhgf@gmail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$L7793SZXB0PA87ayikhVZuPJbxT4bYoN4y4Ri0VKakh4Cf4Sk4wbu', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2023-07-05 09:40:49', '2023-07-05 09:40:49'),
(71, 'aziz', 'azizcharef85@gmail.com', NULL, NULL, 'dJR_MYIQTKu2TdAshlorLm:APA91bEuGerCATxiveS-FH81VYwErlYG286oQS068HlKFlZ37tfqRYT9FquDid5bxkVcxEiL3wPm_lm71pNXyWSsC9h6No4YN7FAxnLOWH0A5H6pInV3hxDnliGd3qjOswCecuzgz7s2', NULL, '0772894404', '$2y$10$i.mHdF2TV60/gkw0qpw0DO7UrRq9TcYIkGWJ/rSeRSzrSY/PuEzCi', 1144, 'route aflou', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-07-05 11:04:29', '2023-07-05 11:06:57'),
(72, 'lahcene sayad', 'sayadlahcene@gmail.com', NULL, NULL, 'eSwK0QQZRSmcRhKDJjrxQ4:APA91bESnbqdIm5lCbnzic_KSFbwtWLiD16Pz4YcaQSudyIGf3mYkuuckgsgebfdwwnPYrEnaxv0mHOkuPHYUqRU_Wz-Off5Xd4m1bTfrjLo8nNz_zEGBdvlEtEyc8aZGeJXnH9m9FO6', NULL, '0540388119', '$2y$10$BQxnQJqjaxep9Lxnzl2iKOGycrk9ZjDzI3HND3D2g0Q8PNf2PIB96', 250, 'rue regge lioua', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-07-05 14:01:11', '2023-07-05 14:02:00'),
(73, 'hassentopo', 'hassentopo2023@gmail.com', NULL, NULL, 'c8juNWvYTZutWeHri9gkl6:APA91bEFD9itfwq7vWQ1PGnKQwiqmdsodkfBP4fgETijl55UIJviJfKtv3WHqZ4LMrTjtaqKB32KkUOlRlEr-uIYh35dDlZtBq_pXEKSyynOqgZuAGq1byknnLalgwL8LxuYsHMuFLML', NULL, NULL, '$2y$10$msLqilCPCS0yJ2gIWkgZiOWFOhub.K7vCl5YL2uazzQu0GLP2APnq', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '210630', '2023-07-05 19:56:47', '2023-07-05 19:57:04'),
(74, 'youcef', 'youcefsaid895@gmail.com', NULL, NULL, 'e5QFtuS3SyaoPXUiRkf99w:APA91bFK3B62oMrYfpTaGrkcsvCBuv7OhA99WHtDOA4Ri8EP2Dn4CfMfOtXG7oBMgdW7WpqAJqKyyuyfZP8RCIyIi_FsRq1XZQQyEKbPKVEPTFxwcmxM91VxXYs180AU70UL382FxXQf', NULL, '0656770293', '$2y$10$n.7P8z2Zh/gDdDIwwxb0juXErvAmiKjMpD/sAk47FRsqCVjriJThq', 423, 'maghnia', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-07-05 21:11:46', '2023-07-05 21:13:54'),
(75, 'bouzouini hocine', 'hadiamel42@gmail.comr', NULL, NULL, NULL, NULL, NULL, '$2y$10$HSsfeax8hWkUX3fa4Jg45uWqIgM1TbTglhzirF0Q6NPYsTkPZEajq', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2023-07-06 11:53:12', '2023-07-06 11:53:12'),
(76, 'nedjib', 'nedjib400@gmail.com', NULL, NULL, 'dgr4FuRoSKuwffWOaiOUxJ:APA91bHcd-bS2m3BEbnuhOVKqO0Jybj_q51cNEX11rBat_aiNjAj_4WABWE7YO_Mz07r0AF-rlX6OAOWmHlMrFpmLy7W5nAxG-3drLdM_eLqN1JmS6Fqkqv3bm3bwHI4Nepb0aBwUHsn', NULL, '0671598814', '$2y$10$/PZ6BP02pEhzJaAO7WuRBun9sPohXIxSOqsWv.9mA4Q88jH8bDule', 1101, 'hkgh', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-07-06 14:38:50', '2023-07-06 14:41:14'),
(77, 'sino76', 'sinogha@gmail.com', NULL, NULL, 'fb3sVEktTN2-4svML97VCg:APA91bEKoQm422hQ8mz-LudqtM3dmsv221bUaemWuoRMYfk4a39fXMnVPgmyr3M21vOKjIFETlM9uwPuARl6E1ucXJVnTyqvcNY3Yyz_pFA-b0ek3qfXaDUADJNYf6iSnjQS1oDABKmm', NULL, NULL, '$2y$10$8bVY6wTaApa5coWwwhj0uOkwbA6nVpS6dHzyfReXZgTG6hpIPqh2.', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '663406', '2023-07-07 13:26:46', '2023-07-07 13:27:59'),
(78, 'youcef', 'firajhoria@gmail.com', NULL, NULL, 'dcIZtkD0SIa9IkO_FYyF6x:APA91bGDIm2oRmRLwezZ13KE0DOCtzEfJ4KWVHAWkvUOKuGxmVWoScxmg1Kb4z-sLaA0LANhcxWMcnYF9Ad3uepIfCKFyA1WfVpd37zNbjW74eIpKdOTb_SZwRJS43Y31yxM8_zxC8qd', NULL, '0658306571', '$2y$10$iELpBWQEWZZ9ZvQXzvuGEuPevfU.MBKMAoTTiigfH0MHoC.V92OM.', 486, 'جنان الطوافرية', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-07-07 21:11:49', '2023-07-07 21:13:03'),
(79, 'Salah Mallek', 'malleksalah@gmail.com', NULL, NULL, 'fap_hMZPS42H8K4bQSD3Dy:APA91bE7QrO7sGdGlSOfqHIVdzTCdK0NpUqa-rBA_7_8O2fBSl5UABnMpBXUYyqLQNlccUBpQ2TAI8u2tFjL8JCGtLxrteTxF2R7hDBX7Qn3Klfrr2oaEQTh22d0HN-8FzVFzHjPxvgl', NULL, '0550027785', '$2y$10$AgoR3t53avESKEvPBiubse4rlRHPLJDvK6bn9ui9sRK0zbAA3Bm1K', 554, 'belle vue', NULL, NULL, NULL, 0, NULL, 1, NULL, '2023-07-08 00:25:46', '2023-07-08 00:26:51'),
(80, 'aissa abdelli', 'papaya.3isawi@hotmail.fr', NULL, NULL, 'chw8KROeSxSx-1tN0eiHP2:APA91bF2-faHfbEq_Msdx7uZxA8Oc40h4Yfr8q4UzYLtlIWeEY5-r-yTpxIuCo0fMqOqbuI8PdiyG5Pu5wOPRxoVRF9-lMPwr_J_QVuEJkfQibJlOsmT1_JS0QoqMu2PApRAqG6x-TIO', NULL, NULL, '$2y$10$FtnbkpN/sC8JGIfporztT.CSfDVB3am3nzqowHt2ptrJhuMiX14Vu', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '855497', '2023-07-08 08:41:40', '2023-07-08 08:42:43'),
(81, 'Boraych Mabrouk', 'BoraychMabrouk@gmail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$Tvq3RtXsKJfRrD1vE8UHk.koVk0haSbWqjXmN.2US9uXEmYW49v/2', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2023-07-09 03:13:37', '2023-07-09 03:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `customer_notifications`
--

CREATE TABLE `customer_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `store_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_fr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_fr` text COLLATE utf8mb4_unicode_ci,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `read` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_notifications`
--

INSERT INTO `customer_notifications` (`id`, `customer_id`, `store_id`, `type`, `name_fr`, `name_ar`, `description_fr`, `description_ar`, `read`, `created_at`, `updated_at`, `order_id`) VALUES
(1, 28, 15, 'change order status', 'Mise à jour de l\'état de la commande', NULL, 'Il y a eu de nouvelles mises à jour concernant vos commandes', NULL, 1, '2023-05-22 10:39:13', '2023-05-22 10:39:48', 1),
(2, 28, 15, 'change order status', 'Mise à jour de l\'état de la commande', NULL, 'Il y a eu de nouvelles mises à jour concernant vos commandes', NULL, 0, '2023-05-22 10:40:32', '2023-05-22 10:40:32', 1),
(3, 28, 15, 'change order status', 'Mise à jour de l\'état de la commande', NULL, 'Il y a eu de nouvelles mises à jour concernant vos commandes', NULL, 0, '2023-05-22 10:40:55', '2023-05-22 10:40:55', 1),
(4, 28, 15, 'change order status', 'Mise à jour de l\'état de la commande', NULL, 'Il y a eu de nouvelles mises à jour concernant vos commandes', NULL, 0, '2023-05-22 10:41:44', '2023-05-22 10:41:44', 1),
(5, 28, 15, 'change order status', 'Mise à jour de l\'état de la commande', NULL, 'Il y a eu de nouvelles mises à jour concernant vos commandes', NULL, 0, '2023-05-22 10:41:51', '2023-05-22 10:41:51', 1),
(6, 28, 15, 'change order status', 'Mise à jour de l\'état de la commande', NULL, 'Il y a eu de nouvelles mises à jour concernant vos commandes', NULL, 0, '2023-05-22 11:38:05', '2023-05-22 11:38:05', 1),
(7, 31, 18, 'change order status', 'Mise à jour de l\'état de la commande', NULL, 'Il y a eu de nouvelles mises à jour concernant vos commandes', NULL, 1, '2023-07-01 20:02:26', '2023-07-01 20:10:16', 3),
(8, 31, 18, 'change order status', 'Mise à jour de l\'état de la commande', NULL, 'Il y a eu de nouvelles mises à jour concernant vos commandes', NULL, 1, '2023-07-01 20:03:20', '2023-07-01 20:10:20', 3),
(9, 31, 18, 'change order status', 'Mise à jour de l\'état de la commande', NULL, 'Il y a eu de nouvelles mises à jour concernant vos commandes', NULL, 1, '2023-07-01 20:03:42', '2023-07-01 20:10:22', 3),
(10, 31, 18, 'change order status', 'Mise à jour de l\'état de la commande', NULL, 'Il y a eu de nouvelles mises à jour concernant vos commandes', NULL, 1, '2023-07-01 20:07:48', '2023-07-01 20:10:24', 3),
(11, 31, 18, 'change order status', 'Mise à jour de l\'état de la commande', NULL, 'Il y a eu de nouvelles mises à jour concernant vos commandes', NULL, 1, '2023-07-01 20:07:56', '2023-07-01 20:10:50', 3);

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deviceble_id` int(11) NOT NULL,
  `deviceble_type` int(11) NOT NULL,
  `fcm_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_fr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reponse_ar` text COLLATE utf8mb4_unicode_ci,
  `reponse_fr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question_ar`, `question_fr`, `reponse_ar`, `reponse_fr`, `created_at`, `updated_at`) VALUES
(1, 'شسيبسيبسيبسي', 'dfsdfsdfsdf', 'سيبسيبسيبسيب', 'sdfsdfsdfsdf', NULL, NULL),
(2, 'شسيبسيبسيبسي', 'dfsdfsdfsdf', 'سيبسيبسيبسيب', 'sdfsdfsdfsdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `created_at`, `updated_at`, `name`) VALUES
(2, 2, '2023-05-20 13:38:07', '2023-05-20 13:38:07', 'storage/images/products/store_15/6468cd3fd621363efab1271702fda86eb0b04a6a8ba81.jpg'),
(4, 4, '2023-06-19 21:08:27', '2023-06-19 21:08:27', 'storage/images/products/store_18/6490c3cb89dfd6266fd62f0bea2c474699d0ce5b37972.jpg'),
(5, 4, '2023-06-19 21:08:27', '2023-06-19 21:08:27', 'storage/images/products/store_18/6490c3cba34aa85f53e18f05f601b104cce3f6c6e183b.jpg'),
(6, 4, '2023-06-19 21:08:27', '2023-06-19 21:08:27', 'storage/images/products/store_18/6490c3cbb55d0cbc37f3962ee0a83bd9967e9f06262f9.jpg'),
(7, 10, '2023-06-26 22:13:12', '2023-06-26 22:13:12', 'storage/images/products/store_21/649a0d78210ffCT18056.jpg'),
(8, 11, '2023-06-26 22:15:43', '2023-06-26 22:15:43', 'storage/images/products/store_21/649a0e0fa0d4cct18024-bmc-cnc-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

CREATE TABLE `informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`id`, `address`, `phone`, `email`, `facebook`, `instagram`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 'Omran', '0559396310', 'buildingmaterials29@gmail.com', 'https://m.facebook.com/profile.php?id=100093063001848&mibextid=ZbWKwL', 'https://instagram.com/omran.dz1?igshid=ZGUzMzM3NWJiOQ==', 'https://twitter.com/buildin01729315?t=7ivKQSvTxG1bdSUrhS_7BA&s=09', '2023-01-05 14:46:06', '2023-05-19 20:08:32');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_08_28_102615_create_admins_table', 1),
(5, '2022_08_28_102628_create_wilayas_table', 1),
(6, '2022_08_28_102635_create_communes_table', 1),
(7, '2022_08_28_102646_create_stores_table', 1),
(8, '2022_08_28_102659_create_customers_table', 1),
(9, '2022_08_28_102822_create_categories_table', 1),
(10, '2022_08_28_102830_create_unites_table', 1),
(11, '2022_08_28_102834_create_products_table', 1),
(12, '2022_08_28_102847_create_images_table', 1),
(13, '2022_08_28_103813_create_devices_table', 1),
(14, '2022_08_28_105048_create_orders_table', 1),
(15, '2022_08_28_105058_create_order_details_table', 1),
(16, '2022_08_28_105210_create_settings_table', 1),
(17, '2022_08_28_105225_create_faqs_table', 1),
(18, '2022_08_28_105244_create_slider_offres_table', 1),
(19, '2022_08_28_105253_create_sliders_table', 1),
(20, '2022_08_28_105319_create_reports_table', 1),
(21, '2022_08_29_101228_commune_store_table', 1),
(22, '2022_08_29_102544_category_product_table', 1),
(23, '2022_08_30_123215_create_informations_table', 1),
(24, '2022_09_01_025640_add_name_to_images_table', 1),
(25, '2022_09_01_135654_add_id_to_order_details_table', 1),
(26, '2022_09_01_165613_add_price_to_order_details_table', 1),
(27, '2022_09_20_205839_create_favorites_table', 1),
(28, '2022_09_20_223525_create_customer_notifications_table', 1),
(29, '2022_09_24_210204_create_savings_table', 1),
(30, '2022_10_26_101622_create_store_notifications_table', 1),
(31, '2022_10_26_102354_create_storedevices_table', 1),
(32, '2022_10_26_103435_create_customerdevices_table', 1),
(33, '2022_12_16_164356_add_price_to_commune_table', 2),
(34, '2022_12_17_164356_add_price_wilaya_to_commune_table', 3),
(35, '2023_01_09_205200_add_order_id_to_store_notifications_table', 4),
(36, '2023_01_09_205233_add_order_id_to_customer_notifications_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `store_id` bigint(20) UNSIGNED DEFAULT NULL,
  `commune_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_cost` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `status` enum('PENDING','PROCESSING','PREPARED','DISPATCHED','DELIVERED','CANCELED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `code`, `customer_id`, `store_id`, `commune_id`, `name`, `phone`, `address`, `shipping_cost`, `grand_total`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ORD_00001', 28, 15, 561, 'aaa', '0668418740', 'address', 500, 2500, 'DELIVERED', '2023-05-22 10:36:43', '2023-05-22 10:41:50'),
(2, 'ORD_00002', 31, 15, 236, 'خالد', '0696741006', 'address', 0, 2000, 'PENDING', '2023-06-19 20:45:35', '2023-06-19 20:45:35'),
(3, 'ORD_00003', 31, 18, 568, 'خالد', '0696741006', 'adresse dress', 0, 42000, 'DISPATCHED', '2023-07-01 19:59:03', '2023-07-01 20:07:56'),
(4, 'ORD_00004', 64, 18, 288, 'red', '0777777777', 'blida', 0, 10500, 'PENDING', '2023-07-04 11:46:55', '2023-07-04 11:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `product_id`, `qty`, `subtotal`, `created_at`, `updated_at`, `id`, `price`) VALUES
(1, 2, 100, 2000, '2023-05-22 10:36:43', '2023-05-22 10:36:43', 1, 20.00),
(2, 2, 100, 2000, '2023-06-19 20:45:35', '2023-06-19 20:45:35', 2, 20.00),
(3, 4, 4, 42000, '2023-07-01 19:59:03', '2023-07-01 19:59:03', 3, 10500.00),
(4, 4, 1, 10500, '2023-07-04 11:46:55', '2023-07-04 11:46:55', 4, 10500.00);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Store', 401, 'Banaa', '993841af9547c2b3606b682dd30b66480dd9402de6946cb7ff68455aadc49af8', '[\"*\"]', NULL, '2022-10-28 19:19:41', '2022-10-28 19:19:41'),
(2, 'App\\Models\\Store', 1, 'Ms. Ada Klein', 'ff3725719fca5243a1a7cf4312f86130126c90eaf88a11a029c4ad6d866ae713', '[\"*\"]', '2022-10-29 18:47:47', '2022-10-29 18:10:53', '2022-10-29 18:47:47'),
(3, 'App\\Models\\Store', 1, 'Ms. Ada Klein', '32328266bc5034f459c36c58445ee50f770e19241a0d5cea847f588f9594b833', '[\"*\"]', NULL, '2022-10-31 00:25:41', '2022-10-31 00:25:41'),
(4, 'App\\Models\\Store', 802, 'Banaa', 'd559756c8a76074ae823243c7b62097a9127f46d86141974e1bdf6bd2b20ab37', '[\"*\"]', '2022-11-01 17:23:23', '2022-11-01 17:21:48', '2022-11-01 17:23:23'),
(5, 'App\\Models\\Store', 802, 'Banaa', 'f4018294c0263d4861f32db5a08a9848f9e31e93a3f834f66c65fbed7f533f31', '[\"*\"]', '2022-11-01 17:52:09', '2022-11-01 17:35:12', '2022-11-01 17:52:09'),
(6, 'App\\Models\\Store', 803, 'Banaa', '4507ed5a2c94163bf589dff3e03fc6bca4e9c9acf69f596236267742cdac732d', '[\"*\"]', '2022-11-01 17:55:23', '2022-11-01 17:54:29', '2022-11-01 17:55:23'),
(7, 'App\\Models\\Store', 802, 'Banaa', '9172a9093d830323e347fd12a941e25550ba229ffa95b85fbcc03292bb32297d', '[\"*\"]', '2022-11-01 17:55:55', '2022-11-01 17:55:36', '2022-11-01 17:55:55'),
(8, 'App\\Models\\Store', 804, 'Banaa', '2b9f40d1253f568464008631a361b85b2d3bb45dab35a387176c1e1ce3e63a6b', '[\"*\"]', '2022-11-01 21:20:34', '2022-11-01 21:12:16', '2022-11-01 21:20:34'),
(9, 'App\\Models\\Store', 804, 'Banaa', '11da3f7d0706d7d612c347481159bcaaaa34a2df8c2234d074fe9ee4cc5ca805', '[\"*\"]', '2022-11-03 02:55:54', '2022-11-03 02:38:51', '2022-11-03 02:55:54'),
(10, 'App\\Models\\Customer', 201, 'Banaa', 'f496333ecf19b8d227ea935fe0a0accdfd2bcd57f47125d7fa5ed32ede689077', '[\"*\"]', '2022-11-03 19:40:14', '2022-11-03 03:55:35', '2022-11-03 19:40:14'),
(11, 'App\\Models\\Customer', 202, 'Banaa', 'd7e6f3483a4c0ef9fbf571819c56e603a5a52e6a4b098177338beabe1ddb08f7', '[\"*\"]', '2022-11-03 18:07:55', '2022-11-03 18:05:39', '2022-11-03 18:07:55'),
(12, 'App\\Models\\Store', 804, 'Banaa', 'abb77738ee9627c07ef7bee9112283adf16ce646003bb0c4ac2e281057ccacf3', '[\"*\"]', '2022-11-03 20:37:00', '2022-11-03 19:40:33', '2022-11-03 20:37:00'),
(13, 'App\\Models\\Store', 805, 'Banaa', 'ef89358675d96abfec070b6dee7feccbe2c3947e2c473761577dc6d98eb43d61', '[\"*\"]', '2022-11-06 15:57:03', '2022-11-06 15:18:45', '2022-11-06 15:57:03'),
(14, 'App\\Models\\Customer', 201, 'Mohammed Besselma', '6dd89e4d04719bec40f2be3f6d075e8ff47b9731757b7d8860dd5aff38bca162', '[\"*\"]', NULL, '2022-11-06 16:02:14', '2022-11-06 16:02:14'),
(15, 'App\\Models\\Customer', 203, 'Banaa', 'f435cedb78d485f13980201e92611a0af6be53ee4b5a384d31a68e345f25745e', '[\"*\"]', NULL, '2022-11-06 16:07:57', '2022-11-06 16:07:57'),
(16, 'App\\Models\\Customer', 203, 'Banaa', 'fa678a7f43027ea8d128929a827cdcb6ed4733e4494a48e8c9eba9377ae3b325', '[\"*\"]', '2022-11-06 16:11:37', '2022-11-06 16:08:55', '2022-11-06 16:11:37'),
(17, 'App\\Models\\Store', 805, 'Banaa', 'c2459958e0e4c07fe5119c5d79bc4434a4b1a89d00ca36b488b5dd4b6764de11', '[\"*\"]', '2022-11-06 16:18:32', '2022-11-06 16:13:08', '2022-11-06 16:18:32'),
(18, 'App\\Models\\Customer', 203, 'Banaa', 'd37ba717f218e9f0f9c5a22f1a558aa1e6cbbd6ccabdadbc62414a3545369550', '[\"*\"]', '2022-11-06 16:21:10', '2022-11-06 16:19:47', '2022-11-06 16:21:10'),
(19, 'App\\Models\\Store', 805, 'Banaa', 'f6b468858babb2978456f44d209c5302c9ba3d02f9ac0ff1d1245396ebe6253b', '[\"*\"]', '2022-11-06 21:40:23', '2022-11-06 16:21:54', '2022-11-06 21:40:23'),
(20, 'App\\Models\\Store', 805, 'Banaa', '0cb8a412ed8f851e9093264147176817fdeac0d98aede565ba9e50cdcbb490b5', '[\"*\"]', '2022-11-06 21:46:47', '2022-11-06 21:42:26', '2022-11-06 21:46:47'),
(21, 'App\\Models\\Store', 804, 'Mohammed Besselma', 'ac71104f64e07913565d16c4c799fceccb86d65fdddcf7ff5370f7986e8a7055', '[\"*\"]', '2022-12-01 21:46:30', '2022-11-06 21:47:07', '2022-12-01 21:46:30'),
(22, 'App\\Models\\Customer', 203, 'Banaa', '6f2de97c50a782239d4d92d22b4da6d96c1b248df0378f18b258e0b6e826646d', '[\"*\"]', '2022-11-06 22:17:15', '2022-11-06 21:56:02', '2022-11-06 22:17:15'),
(23, 'App\\Models\\Store', 804, 'Mohammed Besselma', '61093c449ea1e4b09ead512ad3b11a020f38e684774540127b2998fe55a679c1', '[\"*\"]', NULL, '2022-11-06 21:56:39', '2022-11-06 21:56:39'),
(24, 'App\\Models\\Store', 806, 'Banaa', '1549d6348ef91fc79c2016fe219bc20cd1333c4a7711f5552846363c45ffcae3', '[\"*\"]', '2022-11-07 00:32:49', '2022-11-06 22:18:05', '2022-11-07 00:32:49'),
(25, 'App\\Models\\Customer', 204, 'Banaa', '4185a08d26ee42a4f38ec6658b6bac73bfcfbf9782bc44ed42a67818d841454e', '[\"*\"]', '2022-11-08 02:16:56', '2022-11-06 22:33:37', '2022-11-08 02:16:56'),
(26, 'App\\Models\\Customer', 201, 'Mohammed Besselma', '20a9c1a1275cd2e801e50385dd484feeb0b9e1bf6ff869a1e58b3632521670c7', '[\"*\"]', '2022-11-09 03:43:55', '2022-11-06 22:46:28', '2022-11-09 03:43:55'),
(27, 'App\\Models\\Customer', 201, 'Mohammed Besselma', 'bb6f7764d01f9f06a490dc95c7acadbe7b623d42166ea83ccf6ec4b10da8077a', '[\"*\"]', '2022-11-06 23:35:25', '2022-11-06 23:34:45', '2022-11-06 23:35:25'),
(29, 'App\\Models\\Customer', 203, 'Banaa', 'e26365162134eb3b30f1de39757e875b66c963fc4e4732b280a9db2d0f7587cb', '[\"*\"]', '2022-11-07 01:16:32', '2022-11-07 00:33:48', '2022-11-07 01:16:32'),
(30, 'App\\Models\\Store', 804, 'Mohammed Besselma', 'f05338578e3c06365dddb7fb6540ab3230675a3fde3fc100d928a1d202fa298b', '[\"*\"]', NULL, '2022-11-07 00:45:13', '2022-11-07 00:45:13'),
(31, 'App\\Models\\Customer', 203, 'Banaa', '43228496c57ce8c4f64ac38bd8dd2af33c4cb828c98962d7f657197d68cf52f5', '[\"*\"]', '2022-11-07 01:41:31', '2022-11-07 01:18:00', '2022-11-07 01:41:31'),
(32, 'App\\Models\\Store', 806, 'Banaa', '865869fd1c094e06eebdd7154fe5783636b88e933a826cf30b75af7e20d69f9b', '[\"*\"]', '2022-11-07 01:45:59', '2022-11-07 01:41:50', '2022-11-07 01:45:59'),
(33, 'App\\Models\\Customer', 203, 'Banaa', '656a68695a0a01fa6c78329c30d187e81851d2307083a77c69f61176e393d3a5', '[\"*\"]', NULL, '2022-11-07 01:46:59', '2022-11-07 01:46:59'),
(34, 'App\\Models\\Customer', 203, 'Banaa', '2efeac400b10634138a0430a1aa81df0e7bc43f609bafa8c401d08c6ed5aa0bd', '[\"*\"]', NULL, '2022-11-07 01:53:49', '2022-11-07 01:53:49'),
(35, 'App\\Models\\Customer', 203, 'Banaa', '87ea5b7d2d05d83344566b90b331335257cab090fe357fdd1e323cdf182c7afa', '[\"*\"]', NULL, '2022-11-07 01:53:59', '2022-11-07 01:53:59'),
(36, 'App\\Models\\Customer', 203, 'Banaa', '626ab0301e596f84fd6e2dc78414c2425731ced01919f03d70299bdd152991d6', '[\"*\"]', NULL, '2022-11-07 01:56:33', '2022-11-07 01:56:33'),
(37, 'App\\Models\\Customer', 203, 'Banaa', 'e49ff5dba1050f3d8c83367c98174bfc14b2eeb1d3ac7177fe99b4cb012b5cf4', '[\"*\"]', NULL, '2022-11-07 01:56:48', '2022-11-07 01:56:48'),
(38, 'App\\Models\\Customer', 203, 'Banaa', 'e783c981aa3a4af167f960edf6a7d3473729705edb795af4a5524d5929f5a56e', '[\"*\"]', NULL, '2022-11-07 01:57:01', '2022-11-07 01:57:01'),
(39, 'App\\Models\\Customer', 203, 'Banaa', 'ba016a11bcb15ab230a64927eaa8ed95391e9eceb81a53684d45aa153b60307c', '[\"*\"]', NULL, '2022-11-07 01:57:20', '2022-11-07 01:57:20'),
(40, 'App\\Models\\Store', 807, 'Banaa', '3e67df20d4162e6c57f0292bf15268c642bc18a180b0ae753424bb395beed453', '[\"*\"]', NULL, '2022-11-07 01:57:40', '2022-11-07 01:57:40'),
(41, 'App\\Models\\Customer', 203, 'Banaa', 'b7c71ff9107d55056ea29db7ec814b5a1cce236b9bb1a4b9b73556106b43613d', '[\"*\"]', NULL, '2022-11-07 01:57:46', '2022-11-07 01:57:46'),
(42, 'App\\Models\\Customer', 203, 'Banaa', '3d174afa4cd02d18c6eff9681747296b28cefa817479b78da9837ed4b7db3299', '[\"*\"]', '2022-11-07 02:08:38', '2022-11-07 02:08:25', '2022-11-07 02:08:38'),
(43, 'App\\Models\\Customer', 203, 'Banaa', 'cfc00d6d0e6f4e70bf469c4be116b731f54e068046b383b28d07a1da80964ce5', '[\"*\"]', NULL, '2022-11-07 02:08:57', '2022-11-07 02:08:57'),
(44, 'App\\Models\\Store', 807, 'Banaa', '3088bb4a740df28a2f64a718a7c488e0ead9b00fc865e59de78a6f85bbac9b63', '[\"*\"]', NULL, '2022-11-07 02:09:11', '2022-11-07 02:09:11'),
(45, 'App\\Models\\Customer', 203, 'Banaa', '5f146ed8a015a1b77f26ad911617f3b0c4d25d6ad90caf4224ff30a13aa82a0f', '[\"*\"]', NULL, '2022-11-07 02:09:46', '2022-11-07 02:09:46'),
(46, 'App\\Models\\Customer', 203, 'Banaa', 'e93f070911638f0de7b3ee5684cd071256cfe9085b14a0d9df0a0c3ea101faba', '[\"*\"]', NULL, '2022-11-07 02:12:55', '2022-11-07 02:12:55'),
(47, 'App\\Models\\Customer', 203, 'Banaa', '1709d87417f63bf8e93b31f8818ce5651ee3fb7f8704fa2facbb96d4efda6bb5', '[\"*\"]', NULL, '2022-11-07 02:13:45', '2022-11-07 02:13:45'),
(48, 'App\\Models\\Customer', 203, 'Banaa', 'de29094f0948c27b8e89e8f0e43f60fe7f1b468884621168c2563616e2dc02b2', '[\"*\"]', NULL, '2022-11-07 18:51:40', '2022-11-07 18:51:40'),
(49, 'App\\Models\\Customer', 203, 'Banaa', 'a2e1e9116f207ed2664667ad8b3a08ed07ca9cc7186dd1bb7d17d752732346b5', '[\"*\"]', NULL, '2022-11-07 18:52:54', '2022-11-07 18:52:54'),
(50, 'App\\Models\\Customer', 203, 'Banaa', '9a672a6e8936ede39c88c89b46e07a522eb0882ea79eaa5dad4f96af0c753936', '[\"*\"]', NULL, '2022-11-07 19:05:12', '2022-11-07 19:05:12'),
(51, 'App\\Models\\Customer', 203, 'Banaa', 'f80300942b689132e48c2e8aa9a98299b0674798e68267bc3d469feb2d881999', '[\"*\"]', NULL, '2022-11-07 19:11:06', '2022-11-07 19:11:06'),
(52, 'App\\Models\\Customer', 203, 'Banaa', '68096da03a800db66d0989ad02579132c12b09894f0bc375c22f26782250e888', '[\"*\"]', NULL, '2022-11-07 19:17:49', '2022-11-07 19:17:49'),
(53, 'App\\Models\\Customer', 203, 'Banaa', 'a4faf6c695f520d09605fa6a032f42fee82c2815513487b243e0aa90884f7b96', '[\"*\"]', NULL, '2022-11-07 19:21:06', '2022-11-07 19:21:06'),
(54, 'App\\Models\\Customer', 203, 'Banaa', 'fefb616576439b4550e7261ba3b4dceb6c45010d071a5dcb7057d4d1d249ff14', '[\"*\"]', NULL, '2022-11-07 19:27:37', '2022-11-07 19:27:37'),
(55, 'App\\Models\\Customer', 203, 'Banaa', 'f0f458161c6f0d219a4e8ab651097aadd5713699535721c851906cd1e75d5696', '[\"*\"]', NULL, '2022-11-07 19:31:54', '2022-11-07 19:31:54'),
(56, 'App\\Models\\Customer', 203, 'Banaa', 'ca8636889661167e698be875246bb47fdf1231a2190b1ea62f13cc5ecd74f679', '[\"*\"]', NULL, '2022-11-07 19:31:58', '2022-11-07 19:31:58'),
(57, 'App\\Models\\Customer', 203, 'Banaa', '92bf169f1dbda040e63c0aa2cb04e8ddce8a3d5c4f5fa74938cbf0f009545efa', '[\"*\"]', NULL, '2022-11-07 19:33:08', '2022-11-07 19:33:08'),
(58, 'App\\Models\\Customer', 203, 'Banaa', 'aa3cf1286b66e8dc7f3e3fe1c9f1d3dc7f44c5d52fa018fce9ebd4729cf57ae8', '[\"*\"]', NULL, '2022-11-07 19:42:30', '2022-11-07 19:42:30'),
(59, 'App\\Models\\Customer', 203, 'Banaa', 'd15fb799d6f98ffb7a4d09926fd442a173506c97d118dd004b5edbd5842457d3', '[\"*\"]', NULL, '2022-11-07 19:42:37', '2022-11-07 19:42:37'),
(60, 'App\\Models\\Customer', 203, 'Banaa', 'acf6a296ed47108912838e56cb518edae076cf6412d2928821d60c6d88192a7f', '[\"*\"]', NULL, '2022-11-07 19:52:13', '2022-11-07 19:52:13'),
(61, 'App\\Models\\Customer', 203, 'Banaa', 'ef550c3af135e6eb74cf234ac5b43dd54809dc2df099e62edb0c28529c82d2ca', '[\"*\"]', NULL, '2022-11-07 19:56:27', '2022-11-07 19:56:27'),
(62, 'App\\Models\\Customer', 203, 'Banaa', '37ee038469de976fb3b7be8d962feaba9484c0fcbb49b80c4e505197b79817e9', '[\"*\"]', NULL, '2022-11-07 19:58:47', '2022-11-07 19:58:47'),
(63, 'App\\Models\\Customer', 203, 'Banaa', 'dcb017662d9250ce1cf7fe6df87e6e193956848d32ba3e9c3c0fdf7910adf1fd', '[\"*\"]', NULL, '2022-11-07 20:05:11', '2022-11-07 20:05:11'),
(64, 'App\\Models\\Customer', 203, 'Banaa', '4e0227d82890c4aa5dbe2263d14759396463a51320e122e3214f3db9aa4ee9af', '[\"*\"]', NULL, '2022-11-07 20:11:08', '2022-11-07 20:11:08'),
(65, 'App\\Models\\Customer', 203, 'Banaa', 'a3b2b7fa22eda38eeda27be5394aad60cbb50ccde201dfc6543dc30dff45a796', '[\"*\"]', NULL, '2022-11-07 20:23:54', '2022-11-07 20:23:54'),
(66, 'App\\Models\\Customer', 203, 'Banaa', '2dc7fcb3f5b28f10d3ec641d37071e0c94660ef6a0cb61ea680840377c3ba4f9', '[\"*\"]', NULL, '2022-11-07 20:29:19', '2022-11-07 20:29:19'),
(67, 'App\\Models\\Customer', 203, 'Banaa', '6975bd9a6e5b4d061674d23d9c42dd3c5ec307ce53aef5d48dfb1eaf0c512a30', '[\"*\"]', NULL, '2022-11-07 20:33:37', '2022-11-07 20:33:37'),
(68, 'App\\Models\\Store', 807, 'Banaa', '2e34a33d2c765098b611efdcda009c7fbfd0d150efbbd2273b3a23aaae0be47d', '[\"*\"]', '2022-11-07 20:49:01', '2022-11-07 20:43:25', '2022-11-07 20:49:01'),
(69, 'App\\Models\\Customer', 204, 'Banaa', 'f7477e0cd5f38c56db809687934d823fb696af3267fc0bfbc6610ac1208c5141', '[\"*\"]', '2022-11-07 22:24:41', '2022-11-07 20:49:27', '2022-11-07 22:24:41'),
(70, 'App\\Models\\Store', 807, 'Banaa', '72b514f7f50755a5829b779c257a8f030246beb909741db29f0b62d457ea7492', '[\"*\"]', '2022-11-07 22:26:58', '2022-11-07 22:25:00', '2022-11-07 22:26:58'),
(71, 'App\\Models\\Customer', 204, 'Banaa', 'c480f461f46630b15213eb81dd80d7c1bf23376d39243e4e5961c1f78a158a5d', '[\"*\"]', NULL, '2022-11-07 22:27:14', '2022-11-07 22:27:14'),
(72, 'App\\Models\\Customer', 204, 'Banaa', 'f45017020f16bde2e46de76cf156deb0ec5302f5d003dc182761ec7b6cce784c', '[\"*\"]', NULL, '2022-11-07 22:29:30', '2022-11-07 22:29:30'),
(73, 'App\\Models\\Customer', 203, 'Banaa', '7b2661478baa442142bada4a95013fffd532d794410cd538619a795e0dbfe0f5', '[\"*\"]', NULL, '2022-11-07 22:29:58', '2022-11-07 22:29:58'),
(74, 'App\\Models\\Store', 806, 'Banaa', '52d212b55dd2c9c0cc4cfa326d48a22cd35c4ca5965f470b39bc7dc34828e191', '[\"*\"]', '2022-11-08 05:32:25', '2022-11-08 05:31:06', '2022-11-08 05:32:25'),
(75, 'App\\Models\\Customer', 203, 'Banaa', '170eb2f9fae589dd56fe43a7616bca6d1562d1cd44f0658274c93bd9328b4646', '[\"*\"]', NULL, '2022-11-08 05:32:39', '2022-11-08 05:32:39'),
(76, 'App\\Models\\Customer', 203, 'Banaa', '0716efa56e618ceb82b7818b1da3bb64fee835b0f545fb2465bbb42a943c9ea1', '[\"*\"]', NULL, '2022-11-08 05:32:55', '2022-11-08 05:32:55'),
(77, 'App\\Models\\Store', 807, 'Banaa', '3c7af16560c2d4f44f33c838a290c937f754370a0e5bae50c8fc5105c0685848', '[\"*\"]', '2022-11-08 05:40:34', '2022-11-08 05:35:10', '2022-11-08 05:40:34'),
(78, 'App\\Models\\Store', 806, 'Banaa', '64837d5f31f0ad80d86ac73aa0ec49ed7d5710dd45fbfb49ee8f42cfbdef4666', '[\"*\"]', '2022-11-08 05:42:09', '2022-11-08 05:40:45', '2022-11-08 05:42:09'),
(79, 'App\\Models\\Store', 807, 'Banaa', '72f0731ebf373d5a1e02569f6eff3889939aa8ea141698f137047b0589f7006d', '[\"*\"]', '2022-11-08 05:45:42', '2022-11-08 05:43:43', '2022-11-08 05:45:42'),
(80, 'App\\Models\\Store', 807, 'Banaa', 'e12e35521bbd167305601b03494507e64f84446c38b3b44dfae9c8a13840bb54', '[\"*\"]', '2022-11-08 05:50:33', '2022-11-08 05:48:37', '2022-11-08 05:50:33'),
(81, 'App\\Models\\Store', 807, 'Banaa', 'cfb0ffdb7505580347f7b4cd9f88abbdd1d18e2d596a21ea68908971a17d4ae9', '[\"*\"]', '2022-11-08 06:03:26', '2022-11-08 05:59:31', '2022-11-08 06:03:26'),
(82, 'App\\Models\\Store', 808, 'Banaa', '12300d8d2abf5a6b3e1b51ea456d800fa08aff931665832bd759b4ad46ea2d06', '[\"*\"]', '2022-11-08 06:11:31', '2022-11-08 06:07:35', '2022-11-08 06:11:31'),
(83, 'App\\Models\\Store', 808, 'Banaa', '73246e7e012354beca3fff0a441ddede90d74e5175598f4e33e77cbf6caf2975', '[\"*\"]', '2022-11-08 06:14:44', '2022-11-08 06:13:07', '2022-11-08 06:14:44'),
(84, 'App\\Models\\Customer', 205, 'Banaa', '3713cac16d6983092abde97e75c93f4805b8ca5e63219f077c0bbfb2765caf8b', '[\"*\"]', '2022-11-08 12:22:53', '2022-11-08 06:18:27', '2022-11-08 12:22:53'),
(85, 'App\\Models\\Store', 808, 'Banaa', '7944a544373e986c48bc1d1664718f6e627cd3b93cf4c8ef90d71ae2b170c1b0', '[\"*\"]', '2022-11-09 00:48:03', '2022-11-09 00:46:59', '2022-11-09 00:48:03'),
(86, 'App\\Models\\Customer', 203, 'Banaa', '1ce9b8e6a63d4d9a319266a98a524e707d2ec0688034c59271c95717a4fd624d', '[\"*\"]', NULL, '2022-11-09 00:50:19', '2022-11-09 00:50:19'),
(87, 'App\\Models\\Customer', 203, 'Banaa', '59181c1458f7224810ee6ababb7b41754f4f265366946884acacc68f0a9520fb', '[\"*\"]', NULL, '2022-11-09 00:50:31', '2022-11-09 00:50:31'),
(88, 'App\\Models\\Store', 807, 'Banaa', 'c7c877c4c8754e01b93f751b1999eb08d8a9c470389f462d03d7aa941e50e0c8', '[\"*\"]', NULL, '2022-11-09 00:51:52', '2022-11-09 00:51:52'),
(89, 'App\\Models\\Customer', 206, 'Banaa', '26c6c7ad0c13b30416fbf97f4f5a99199171baf63fca958bc9e3b30b395c3bda', '[\"*\"]', '2022-11-09 01:14:35', '2022-11-09 00:55:35', '2022-11-09 01:14:35'),
(90, 'App\\Models\\Customer', 206, 'Banaa', '64f9015920bdc5a02f3863b32514f3217e661f03032cea1422203f2a36bfa69c', '[\"*\"]', NULL, '2022-11-09 03:35:26', '2022-11-09 03:35:26'),
(91, 'App\\Models\\Customer', 207, 'Banaa', '92a99dc2801b6e67d5ba77cbacc71be9506a3bfcb23f0dee9b68d2e98f093a66', '[\"*\"]', '2022-11-09 03:54:18', '2022-11-09 03:40:00', '2022-11-09 03:54:18'),
(92, 'App\\Models\\Customer', 208, 'Banaa', '48b9262a6c8963d3ef589009967f97ec4c30f46289edb3225b4e92376406449b', '[\"*\"]', '2022-11-09 04:16:07', '2022-11-09 04:08:25', '2022-11-09 04:16:07'),
(93, 'App\\Models\\Store', 807, 'Banaa', '50f8b166f62731b805418051722d0bf6a8a009579d561976b391081cb7c13c7d', '[\"*\"]', '2022-11-09 18:25:32', '2022-11-09 04:16:27', '2022-11-09 18:25:32'),
(94, 'App\\Models\\Customer', 309, 'Banaa', '3b7a3206a6702bdc3ce6d4a960a25acb3e4162a89266c3e493958f14250ba762', '[\"*\"]', '2022-11-09 19:35:25', '2022-11-09 18:30:25', '2022-11-09 19:35:25'),
(95, 'App\\Models\\Customer', 201, 'zzzzzzzz', '08881f14ea67067b3b80c1aef32fd1b5c66c50f2a3c52027ea1dca9bae63e8d6', '[\"*\"]', '2022-11-09 19:04:07', '2022-11-09 19:03:16', '2022-11-09 19:04:07'),
(96, 'App\\Models\\Customer', 310, 'Banaa', '168402933868c282f198895481a85a6eefbf1620ea05cea23bae28e654a69bc3', '[\"*\"]', '2022-11-09 19:55:23', '2022-11-09 19:48:45', '2022-11-09 19:55:23'),
(97, 'App\\Models\\Customer', 310, 'Banaa', '09bf55f04a73e28651f86f3a96410afc250351e8adaaacda4e0822e8ea1b61f2', '[\"*\"]', NULL, '2022-11-09 19:58:18', '2022-11-09 19:58:18'),
(98, 'App\\Models\\Customer', 310, 'Banaa', '68f77eaa5c73324b8d895a35b25b41246dc128ee92d7694ff8ea1047613d5584', '[\"*\"]', NULL, '2022-11-09 19:58:37', '2022-11-09 19:58:37'),
(99, 'App\\Models\\Customer', 311, 'Banaa', 'e04f7d36bbacd9b11c9984235e4009cd00c4a8f3d545781b7984a1de704e58c9', '[\"*\"]', '2022-11-09 20:27:40', '2022-11-09 20:11:29', '2022-11-09 20:27:40'),
(100, 'App\\Models\\Customer', 312, 'Banaa', '47c7c044a274a59f5b309742e663891fb82a98e1d29ce37df308e38b59cebc19', '[\"*\"]', '2022-11-09 21:05:16', '2022-11-09 21:01:03', '2022-11-09 21:05:16'),
(101, 'App\\Models\\Customer', 208, 'Banaa', '6395a97a27c47eb9c86a9bd0e92817676b630569b36be0d638c8e70d924cc066', '[\"*\"]', NULL, '2022-11-09 21:05:42', '2022-11-09 21:05:42'),
(102, 'App\\Models\\Customer', 208, 'Banaa', '2f28fde4ba97863c9747179bf2004dd9e072e7245554a176fa0d8c172ad411de', '[\"*\"]', NULL, '2022-11-09 21:05:50', '2022-11-09 21:05:50'),
(103, 'App\\Models\\Customer', 313, 'Banaa', '5a0ec3b7632e8783fec763ae5ee02f4fb57102f01512f69c51ef48ce2db0c36a', '[\"*\"]', '2022-11-09 21:23:57', '2022-11-09 21:19:03', '2022-11-09 21:23:57'),
(104, 'App\\Models\\Customer', 314, 'Banaa', '4fca1fae04f2d9f7724bd2017bdd2766892b41533d6c28ce04d634c04ff56f43', '[\"*\"]', '2022-11-10 06:29:20', '2022-11-10 06:19:43', '2022-11-10 06:29:20'),
(105, 'App\\Models\\Customer', 315, 'Banaa', '435e71da5029d3842879f26a8de1a8931479488b22ccc99ee0f91772c49e0f93', '[\"*\"]', '2022-11-10 06:57:21', '2022-11-10 06:35:34', '2022-11-10 06:57:21'),
(106, 'App\\Models\\Store', 1209, 'Banaa', 'ef243a2c96dff3968c27a0696a1ea7b575c5c84fa7ffce0c4d3f2295e1f3a1c5', '[\"*\"]', NULL, '2022-11-10 06:58:47', '2022-11-10 06:58:47'),
(107, 'App\\Models\\Store', 806, 'Banaa', '077ee9161c1fcf1567bf5ded4854b54fa896dda3b4fc5652b25d6557f6c49c2e', '[\"*\"]', '2022-11-10 07:01:47', '2022-11-10 06:59:48', '2022-11-10 07:01:47'),
(108, 'App\\Models\\Customer', 314, 'Banaa', 'edc71104f4f6769a66af6770da1d0d6cebca81a7819f7097c099f9b06f9372a8', '[\"*\"]', NULL, '2022-11-10 07:03:19', '2022-11-10 07:03:19'),
(109, 'App\\Models\\Customer', 314, 'Banaa', '7cf95969532f5aba1b0fced787de33fb48f2b6bc6d1c3317bcd5ae9527f6c10f', '[\"*\"]', NULL, '2022-11-10 07:03:26', '2022-11-10 07:03:26'),
(110, 'App\\Models\\Customer', 314, 'Banaa', 'ef1db0418a6ef3e506da421bfe30671c7dbc5f2223f0e404a1dcc2d869c454d8', '[\"*\"]', NULL, '2022-11-10 07:03:31', '2022-11-10 07:03:31'),
(111, 'App\\Models\\Customer', 314, 'Banaa', 'd43a4397925f6db00a3261669c42cfebd9f1ac5f60dc8e8948aad75e5287b23b', '[\"*\"]', NULL, '2022-11-10 07:04:00', '2022-11-10 07:04:00'),
(112, 'App\\Models\\Customer', 315, 'Banaa', '3c5f0981d75ecea0f151420c7ae010aa97a586d43ce4c6a0d0e638d4b2d148ca', '[\"*\"]', NULL, '2022-11-10 07:19:49', '2022-11-10 07:19:49'),
(113, 'App\\Models\\Customer', 315, 'Banaa', 'fc42509fdbc1799cb98de5000188fc5b7cdfcee3cdd2ce79c42e7bb4121b4c33', '[\"*\"]', NULL, '2022-11-10 07:20:01', '2022-11-10 07:20:01'),
(114, 'App\\Models\\Customer', 316, 'Banaa', '8014c64f6be8384ef774f850ed2e27c535b1725167b449fabd54417efcc3fed4', '[\"*\"]', '2022-11-10 07:30:22', '2022-11-10 07:29:39', '2022-11-10 07:30:22'),
(115, 'App\\Models\\Customer', 317, 'Banaa', '4adddc245a0da9cfaaf0e8bf51a3d59f68ce83eda571851fdec0adf75c8ea2b1', '[\"*\"]', '2022-11-10 07:57:07', '2022-11-10 07:39:13', '2022-11-10 07:57:07'),
(116, 'App\\Models\\Customer', 318, 'Banaa', '50467802591b5e07c36a942a157212295a77fe284d2ca062c317824ef4936d8b', '[\"*\"]', '2022-11-10 08:05:05', '2022-11-10 08:01:18', '2022-11-10 08:05:05'),
(117, 'App\\Models\\Customer', 319, 'Banaa', 'b106e9757d1137edf97130d5bfd1f33c4e13aa579c1c25ae1d5e12b0f2842494', '[\"*\"]', '2022-11-10 08:06:54', '2022-11-10 08:05:59', '2022-11-10 08:06:54'),
(118, 'App\\Models\\Customer', 320, 'Banaa', '1115230cdd11431d279a71ce053c9f96fd990a5cc8b67a8871849f8beabae809', '[\"*\"]', '2022-11-10 08:37:42', '2022-11-10 08:12:26', '2022-11-10 08:37:42'),
(119, 'App\\Models\\Customer', 316, 'Banaa', 'ddc3f828fc898a3816ac05ba07d862867010ea2ec76884da9528367da2d638e4', '[\"*\"]', NULL, '2022-11-10 08:44:34', '2022-11-10 08:44:34'),
(120, 'App\\Models\\Customer', 316, 'Banaa', '5f299a54110fc6f3849147464fc18f1b504f6f3c293b5987e71cc1e83ad7059b', '[\"*\"]', NULL, '2022-11-10 08:44:46', '2022-11-10 08:44:46'),
(121, 'App\\Models\\Customer', 321, 'Banaa', 'cdecf654b82f3d2117166723f88fc3ee9d26b6a1da10a7b3792dfe8767a01156', '[\"*\"]', '2022-11-10 11:10:44', '2022-11-10 11:09:32', '2022-11-10 11:10:44'),
(122, 'App\\Models\\Customer', 322, 'Banaa', 'df167b7963af17fbe16f06968dd06d8d131a8aa28a0f3315785bc8a1cebb0b5d', '[\"*\"]', '2022-11-10 11:44:14', '2022-11-10 11:16:59', '2022-11-10 11:44:14'),
(123, 'App\\Models\\Customer', 323, 'Banaa', '06723b150dd3e11b8fdbe0265832a5b8d6d59d259be72ac2e4d4afd9284e47e3', '[\"*\"]', '2022-11-10 12:42:03', '2022-11-10 11:49:33', '2022-11-10 12:42:03'),
(124, 'App\\Models\\Store', 807, 'Banaa', '4c62cddc1f30d0d0b1a8a796e7da5b34141a79bcdf67743ce3c3b2e237ab4c99', '[\"*\"]', '2022-11-10 12:43:33', '2022-11-10 12:42:44', '2022-11-10 12:43:33'),
(125, 'App\\Models\\Store', 806, 'Banaa', '0348bc5269a4e91fa6997b2f23f3d2715a7492c86d48497ca4c67b6b1c29bae6', '[\"*\"]', '2022-11-10 12:54:20', '2022-11-10 12:53:52', '2022-11-10 12:54:20'),
(126, 'App\\Models\\Store', 807, 'Banaa', 'd9586c16cc71e8959edb41385bdd5ea2f0ef1e61e18681cbeba53480da23a809', '[\"*\"]', '2022-11-10 12:59:46', '2022-11-10 12:54:45', '2022-11-10 12:59:46'),
(127, 'App\\Models\\Store', 807, 'Banaa', 'c37640bc362b5cf17df5c50e9804d11f45ea150db3d98f6d96c4353461c2c0db', '[\"*\"]', '2022-11-10 13:13:17', '2022-11-10 13:06:40', '2022-11-10 13:13:17'),
(128, 'App\\Models\\Store', 804, 'Mohammed Besselma', 'da8b4bc94f13c9e6b4741118b500329fc00ec7ff2ec7a2138346efd65ea200d5', '[\"*\"]', NULL, '2022-11-12 20:06:14', '2022-11-12 20:06:14'),
(129, 'App\\Models\\Customer', 321, 'Name', '8916f2438bbabee96b45fcf1ac2a4beda02bba4ef02b1b06cd61269568a2fcb5', '[\"*\"]', '2022-11-29 20:49:37', '2022-11-29 20:48:57', '2022-11-29 20:49:37'),
(130, 'App\\Models\\Customer', 321, 'Name', '68e0edda44fb4dc020f330fa583c1b4fb55f6687f35170575e7ded280e6fb299', '[\"*\"]', NULL, '2022-11-29 20:49:37', '2022-11-29 20:49:37'),
(131, 'App\\Models\\Store', 804, 'Mohammed Besselma', 'a7d75c13799730d65526cdf9d78ba2b37c4faf398eeaf4d7f8f92c5cb7ef7f5b', '[\"*\"]', '2022-12-07 16:12:31', '2022-11-29 20:54:32', '2022-12-07 16:12:31'),
(132, 'App\\Models\\Store', 804, 'Mohammed Besselma', '7376e9a5bccd5b318ec1fde1bc3a5407c7022f884468deed6c78c6952114ad1c', '[\"*\"]', NULL, '2022-11-30 15:11:17', '2022-11-30 15:11:17'),
(133, 'App\\Models\\Customer', 321, 'Name', 'e26941f0169e56a667108063c1260bb7dc917770bd2ef34f7cfe5d85e88b12c8', '[\"*\"]', '2022-12-04 16:00:49', '2022-12-01 02:31:49', '2022-12-04 16:00:49'),
(134, 'App\\Models\\Customer', 324, 'Banaa', '0d3d0eff835bd263e73e4439af3701dede095d3d2689682d1a5c307adb517f6a', '[\"*\"]', NULL, '2022-12-04 20:25:05', '2022-12-04 20:25:05'),
(135, 'App\\Models\\Customer', 324, 'Banaa', '5c343d9bb2c867c0a0e9666d2215857dc767b4953a5ba9c1859c00237e88f8fa', '[\"*\"]', NULL, '2022-12-04 22:12:54', '2022-12-04 22:12:54'),
(136, 'App\\Models\\Customer', 324, 'Banaa', 'c476482c2fe1607bdd25541514a4f7c5f5c012e88fbc1ca839eb44e7f95cda8c', '[\"*\"]', '2022-12-04 22:28:14', '2022-12-04 22:13:43', '2022-12-04 22:28:14'),
(137, 'App\\Models\\Customer', 324, 'Banaa', '761708c1176eaac000007180c812a0ac2270b8d30cdaf48b4360d7ad0d939561', '[\"*\"]', NULL, '2022-12-04 22:30:28', '2022-12-04 22:30:28'),
(138, 'App\\Models\\Customer', 324, 'Banaa', '7db1982fb09de87b851a4a84e88cbe0fd25b5bdd1a6468ccbd21584974cb3011', '[\"*\"]', NULL, '2022-12-04 22:30:41', '2022-12-04 22:30:41'),
(139, 'App\\Models\\Customer', 324, 'Banaa', '4e31828224563d040f273ba402c3ab231bc1852af3344d63151fbaf477298b78', '[\"*\"]', NULL, '2022-12-04 22:30:51', '2022-12-04 22:30:51'),
(140, 'App\\Models\\Customer', 324, 'Banaa', 'fccc34e7f13e791e8f1f09d31aff7067e0eb107b0ee2dd6ac18efb1a64735f8c', '[\"*\"]', NULL, '2022-12-05 15:08:21', '2022-12-05 15:08:21'),
(141, 'App\\Models\\Customer', 325, 'Banaa', '842f4be37e05670e61768615818e039344c0b5a062e5026c4d30d2992b8c1a9c', '[\"*\"]', '2022-12-08 14:36:36', '2022-12-05 15:14:55', '2022-12-08 14:36:36'),
(142, 'App\\Models\\Store', 804, 'Mohammed Besselma', 'b6b03f15a8a965881b229904f169dc8277207a9ff7cbe6425909dc7e48982140', '[\"*\"]', NULL, '2022-12-05 17:36:40', '2022-12-05 17:36:40'),
(143, 'App\\Models\\Customer', 324, 'Banaa', 'e32201c23a18aaacb553f107c250d5dae1d8ec171da9efde32c8d16503c8f960', '[\"*\"]', NULL, '2022-12-05 18:34:43', '2022-12-05 18:34:43'),
(144, 'App\\Models\\Customer', 325, 'Banaa', 'f64673ae402d19e746cff7c58812326bfe58700763c1d9e42452d864bcddcbdd', '[\"*\"]', NULL, '2022-12-05 18:38:49', '2022-12-05 18:38:49'),
(145, 'App\\Models\\Customer', 324, 'Banaa', '2966a41ea1c96711203c28e36ed79d687988d18fbdb2c10554f32912a1a25968', '[\"*\"]', '2022-12-05 18:57:23', '2022-12-05 18:43:06', '2022-12-05 18:57:23'),
(146, 'App\\Models\\Store', 1210, 'Banaa', '6117b12492fde1bce66d279bfad3942e771740bddf07ad3e452caf60e34a6f22', '[\"*\"]', '2022-12-06 17:42:10', '2022-12-06 15:08:31', '2022-12-06 17:42:10'),
(147, 'App\\Models\\Store', 1211, 'Banaa', 'c460cc00f5f50b5561059903269ca9dfc2779545c8843a4a772ae9b8e07034a7', '[\"*\"]', '2022-12-06 15:48:02', '2022-12-06 15:23:10', '2022-12-06 15:48:02'),
(148, 'App\\Models\\Store', 804, 'Mohammed Besselma', 'eef41e4d347beadb7f1239d66251e1b4cd0bb68a7234d4f57b8af1f3cf642ed0', '[\"*\"]', '2022-12-06 16:41:55', '2022-12-06 15:42:45', '2022-12-06 16:41:55'),
(149, 'App\\Models\\Store', 1212, 'Banaa', 'b626eaba1f43385e0e682cbada4e810e863aabf4967eb507412f28cb1aa21ffc', '[\"*\"]', '2022-12-07 21:56:05', '2022-12-06 16:03:01', '2022-12-07 21:56:05'),
(150, 'App\\Models\\Customer', 324, 'Banaa', '7250c8fd0be09188f3c2b077dc0a1d6620ab38e59450bfa954236ff4ba8c30a4', '[\"*\"]', '2022-12-06 18:05:13', '2022-12-06 17:42:39', '2022-12-06 18:05:13'),
(151, 'App\\Models\\Customer', 324, 'Banaa', '33545c4cf53a61a5bd0dd001d8b0f49baf1c6bfabaa61821e4808126681d5210', '[\"*\"]', '2022-12-06 18:37:33', '2022-12-06 18:13:52', '2022-12-06 18:37:33'),
(152, 'App\\Models\\Store', 1210, 'Banaa', '84ff7a12c4c9dad7f2a876b9ae918b2237921291b8565cc5b087e56d4fd47095', '[\"*\"]', '2022-12-06 18:58:55', '2022-12-06 18:37:49', '2022-12-06 18:58:55'),
(153, 'App\\Models\\Customer', 324, 'Banaa', 'ad75e9fc0be2169647bf04da48d982b98831ddba5a3b5c2a71831cd79abb90dc', '[\"*\"]', '2022-12-06 19:10:47', '2022-12-06 18:59:12', '2022-12-06 19:10:47'),
(154, 'App\\Models\\Store', 1210, 'Banaa', 'a06e097d10b8e7827fd0f707880de8099c1ff3ead153d6f263d79d2670fd6ec4', '[\"*\"]', '2022-12-06 20:15:27', '2022-12-06 19:11:07', '2022-12-06 20:15:27'),
(155, 'App\\Models\\Customer', 324, 'Banaa', '1850180795652c13a50c56a6aed79be3edc0a846f33e826401a18e0f76354fd9', '[\"*\"]', '2022-12-08 14:49:13', '2022-12-06 20:15:49', '2022-12-08 14:49:13'),
(156, 'App\\Models\\Store', 804, 'Mohammed Besselma', '2d197d6855e0b917d81c2b29432166db68be2148f75be5b668d26b38a4169f65', '[\"*\"]', '2022-12-07 19:49:25', '2022-12-07 17:58:42', '2022-12-07 19:49:25'),
(157, 'App\\Models\\Store', 1212, 'Banaa', '59f7677edeb34b19b120afc7240693e2398a7f880c0ee004583d97b1bee5e142', '[\"*\"]', '2022-12-07 22:05:40', '2022-12-07 22:03:01', '2022-12-07 22:05:40'),
(158, 'App\\Models\\Store', 1212, 'Banaa', '5f6e2824bef37f7bb56781ae735120b48909fbe1796a0e6e3fa5932773d25eda', '[\"*\"]', '2022-12-07 22:13:01', '2022-12-07 22:08:27', '2022-12-07 22:13:01'),
(159, 'App\\Models\\Customer', 326, 'Banaa', '6370ad296f3a8f032468f74427d6a97495eccfae8a6d6bc64d004fcce7d4fdc3', '[\"*\"]', '2022-12-08 16:22:46', '2022-12-07 22:13:19', '2022-12-08 16:22:46'),
(160, 'App\\Models\\Store', 1216, 'Banaa', '1321a68ff16940052d8a72c2429fee7c97dafce4b318c56815c16ec9e400d137', '[\"*\"]', '2022-12-08 18:40:08', '2022-12-08 18:38:47', '2022-12-08 18:40:08'),
(161, 'App\\Models\\Customer', 329, 'Banaa', '7bd916f5773c5e803f91393cf8cc38f6b840cbd2b15757f8c6a37fb28a8e96c0', '[\"*\"]', '2022-12-09 02:58:31', '2022-12-08 18:40:20', '2022-12-09 02:58:31'),
(162, 'App\\Models\\Customer', 330, 'Banaa', '4d239152ac831e0bebcce877e68ba92c3d1e79a7f94df696199061a1eeb08d30', '[\"*\"]', NULL, '2022-12-08 20:58:52', '2022-12-08 20:58:52'),
(163, 'App\\Models\\Customer', 330, 'Banaa', '6fd02209647ed5f04a1a359ab183e4bb261bb6461fbae8768818233204e7137d', '[\"*\"]', NULL, '2022-12-08 21:02:25', '2022-12-08 21:02:25'),
(164, 'App\\Models\\Store', 1217, 'Banaa', '3d7406ef114b1a97593bf9504a23fc3eb899a28360b511ba3aa93ece1c026a61', '[\"*\"]', NULL, '2022-12-08 21:04:32', '2022-12-08 21:04:32'),
(165, 'App\\Models\\Store', 1217, 'Banaa', '1612fd3e4abf5aeb99978e33860423a5ae1b888c952159c1364e88ee51a40403', '[\"*\"]', NULL, '2022-12-08 21:04:45', '2022-12-08 21:04:45'),
(166, 'App\\Models\\Customer', 331, 'Banaa', '272bab1bed27b34b68acc8e84bfb54933ff8bf2494525d2da885029cb3f04023', '[\"*\"]', '2022-12-08 23:49:51', '2022-12-08 23:23:39', '2022-12-08 23:49:51'),
(167, 'App\\Models\\Customer', 331, 'Banaa', 'c4b7e6543e462aa2c0fb18c6211505087c0b23fe3a9a7ac18ea2268733d509f1', '[\"*\"]', NULL, '2022-12-08 23:24:34', '2022-12-08 23:24:34'),
(168, 'App\\Models\\Customer', 331, 'Banaa', 'd5eb36f8f6c57f22c15738b8432f23ed1567539311d35cf559ec2377ed6b184f', '[\"*\"]', NULL, '2022-12-08 23:29:24', '2022-12-08 23:29:24'),
(169, 'App\\Models\\Customer', 331, 'Banaa', '1ad024daf9712041e3255b483814a5d0a247591b76d22b3c1fe7d85af1443b35', '[\"*\"]', NULL, '2022-12-08 23:50:06', '2022-12-08 23:50:06'),
(170, 'App\\Models\\Customer', 331, 'Banaa', '63ce7d5707d80786092b412e131a9a4085beef440d578a096232bc3ffb014da5', '[\"*\"]', NULL, '2022-12-08 23:56:27', '2022-12-08 23:56:27'),
(171, 'App\\Models\\Customer', 331, 'Banaa', 'e7e8fed1a44a877af6e5ba5f743a17a918bd30523cb0dad56dbe0c9e43eec66f', '[\"*\"]', NULL, '2022-12-08 23:56:50', '2022-12-08 23:56:50'),
(172, 'App\\Models\\Customer', 331, 'Banaa', 'f5a119b00e36ffd7423aadb0fba5223c7036896c98c8f402c4ea8e938b48545d', '[\"*\"]', NULL, '2022-12-09 00:01:27', '2022-12-09 00:01:27'),
(173, 'App\\Models\\Customer', 331, 'Banaa', '1ee1536581dc87a4ea7737613a2237a9ec8d546d7a15233dd7123bef2e845427', '[\"*\"]', NULL, '2022-12-09 00:01:34', '2022-12-09 00:01:34'),
(174, 'App\\Models\\Customer', 331, 'Banaa', '4447755474a738436d3579a7618376d81895f26517107ccca33bc083fa4fb323', '[\"*\"]', NULL, '2022-12-09 00:08:48', '2022-12-09 00:08:48'),
(175, 'App\\Models\\Customer', 331, 'Banaa', 'f3e52e87fe7af7f520a34fa31b75966afa74322163fe6bd6d15b8edc0caa63d4', '[\"*\"]', '2022-12-09 00:52:37', '2022-12-09 00:14:12', '2022-12-09 00:52:37'),
(176, 'App\\Models\\Customer', 327, 'Merouane', '20b307f9f9b33f5b70d0556422c3cef5f279bf8ba3ef3b90522305fd2b7f0633', '[\"*\"]', NULL, '2022-12-09 02:14:51', '2022-12-09 02:14:51'),
(177, 'App\\Models\\Customer', 327, 'Merouane', '126bbc9b4093898c78d4c800fbf0daa979c8dbeeb907a5886f633b7574549ef2', '[\"*\"]', '2022-12-09 02:15:42', '2022-12-09 02:15:04', '2022-12-09 02:15:42'),
(178, 'App\\Models\\Customer', 332, 'Banaa', '13c9668bd31c0b3edb553bfd72291595ecb40e8a876a7f1d917ba5779b5cc282', '[\"*\"]', '2022-12-09 02:18:55', '2022-12-09 02:17:18', '2022-12-09 02:18:55'),
(179, 'App\\Models\\Customer', 332, 'Banaa', '7e5daadd30f35906c15bb98d8bee7644029d3894d2403d2cd4cf20bc7458acc1', '[\"*\"]', NULL, '2022-12-09 02:18:55', '2022-12-09 02:18:55'),
(180, 'App\\Models\\Customer', 332, 'Banaa', '5e333a53a143b4ae1e28d770a2b64de1bb7f93a8e004a824c8e87f429051179f', '[\"*\"]', NULL, '2022-12-09 02:25:20', '2022-12-09 02:25:20'),
(181, 'App\\Models\\Customer', 332, 'Banaa', '23b26031fb94acc307e470a31ed2fbd688d8a6d42f9dfd734ca647f3b4f379f6', '[\"*\"]', NULL, '2022-12-09 02:33:25', '2022-12-09 02:33:25'),
(182, 'App\\Models\\Customer', 332, 'Banaa', 'fedab35cbb80830c8924b75e3df84b62bd88531c6dbe53e78a1c3dd54bc6376e', '[\"*\"]', '2022-12-09 02:38:02', '2022-12-09 02:34:47', '2022-12-09 02:38:02'),
(183, 'App\\Models\\Customer', 332, 'Banaa', '334e5cd6e4fb46cdc9303176d6e74027702878d8de8a089d19763b981972b19c', '[\"*\"]', '2022-12-09 02:54:09', '2022-12-09 02:38:19', '2022-12-09 02:54:09'),
(184, 'App\\Models\\Customer', 332, 'Banaa', 'de33f1118f7c93c31b9a3b8612a00730ab68fbf94537159d465b4c4415813f48', '[\"*\"]', NULL, '2022-12-09 02:54:25', '2022-12-09 02:54:25'),
(185, 'App\\Models\\Customer', 332, 'Banaa', 'b9938ee0f1d205551eab79c65bdfd55a1474592e5e91e8af32d577f7ea72f5a6', '[\"*\"]', NULL, '2022-12-09 02:54:42', '2022-12-09 02:54:42'),
(186, 'App\\Models\\Customer', 332, 'Banaa', '33d47e9f782fb4b825fef92a88dcf4554f62913769d57ffa8d32624c21339e4b', '[\"*\"]', '2022-12-09 02:55:23', '2022-12-09 02:54:56', '2022-12-09 02:55:23'),
(187, 'App\\Models\\Customer', 332, 'Banaa', 'd8998a7126c34d24466710467e64a1fa178486642a4bf945ced64f5176fcc438', '[\"*\"]', NULL, '2022-12-09 02:55:37', '2022-12-09 02:55:37'),
(188, 'App\\Models\\Customer', 333, 'Banaa', '97b5fc5ab7316271c6d1116883b54d5caef3c6a13dc86c963aac0f2b6572c371', '[\"*\"]', '2022-12-09 04:26:31', '2022-12-09 03:23:21', '2022-12-09 04:26:31'),
(189, 'App\\Models\\Store', 1218, 'Banaa', '11e4709b77a83e946bbc0204f2580ea4c9de73f2c027aa0fdfeecbe4c6d10743', '[\"*\"]', '2022-12-09 15:53:03', '2022-12-09 14:17:07', '2022-12-09 15:53:03'),
(190, 'App\\Models\\Customer', 333, 'Banaa', 'c03d3bdb1adf59595ba8ef09fdf8d8ae68ca07034170571c53e9ce82990a10fa', '[\"*\"]', '2022-12-29 04:16:14', '2022-12-09 15:53:52', '2022-12-29 04:16:14'),
(191, 'App\\Models\\Customer', 327, 'Merouane', '1a65d9018fb805f9c80d98093254e4592b9bf3e6dff2f3cd2ac154217f44ca32', '[\"*\"]', NULL, '2022-12-11 04:36:32', '2022-12-11 04:36:32'),
(192, 'App\\Models\\Customer', 331, 'Banaa', '149302a4e534ecab9a55a2c227b25ce0c780268a2ffa3ceae28710d56b1c98f4', '[\"*\"]', NULL, '2022-12-11 16:32:02', '2022-12-11 16:32:02'),
(193, 'App\\Models\\Customer', 331, 'Banaa', 'e71d8e3f4e9310c623a6dd3704df7c35ddbd78720d658650aea6bed13692aa68', '[\"*\"]', '2022-12-11 16:33:17', '2022-12-11 16:32:30', '2022-12-11 16:33:17'),
(194, 'App\\Models\\Customer', 331, 'Banaa', '03a73ffb12c46f450c74873d56516314e6b886566b73dbd70cb3a41059efd44c', '[\"*\"]', '2022-12-11 16:53:08', '2022-12-11 16:48:32', '2022-12-11 16:53:08'),
(195, 'App\\Models\\Store', 1219, 'Banaa', 'e4ce754f2dc1f2d0c94a7a280ecfa7e45ae70dc7eb835dda535ba0356752b20e', '[\"*\"]', '2022-12-11 16:59:38', '2022-12-11 16:54:03', '2022-12-11 16:59:38'),
(196, 'App\\Models\\Store', 1219, 'Banaa', '3a5579bc1e4542c9e5cdf550c5d93ba54895417fc056b7a3d8c95ea1d61dc636', '[\"*\"]', '2022-12-11 17:00:01', '2022-12-11 16:59:55', '2022-12-11 17:00:01'),
(197, 'App\\Models\\Customer', 331, 'Banaa', '70bc39eb665687a220aa4421a6836129d5e2cc365aa1b589abd60de279594495', '[\"*\"]', '2022-12-11 17:00:27', '2022-12-11 17:00:14', '2022-12-11 17:00:27'),
(198, 'App\\Models\\Customer', 332, 'Banaa', 'cdfa01bd067e8a1edbcc7f5edf8bd40d747444b5f40a2dc568065eb1b2d53ad1', '[\"*\"]', '2022-12-11 17:03:30', '2022-12-11 17:03:08', '2022-12-11 17:03:30'),
(199, 'App\\Models\\Customer', 334, 'Banaa', 'b83c8591e734b33d081236d8f78b08e09a35f4723cafe46edeb595e1d37e133d', '[\"*\"]', '2022-12-11 17:40:13', '2022-12-11 17:03:52', '2022-12-11 17:40:13'),
(200, 'App\\Models\\Customer', 331, 'Banaa', '577430862e1996438897acb225e83c321b3906d7a46dfb370e4dec39b693cd7f', '[\"*\"]', '2022-12-12 19:13:30', '2022-12-12 19:13:09', '2022-12-12 19:13:30'),
(201, 'App\\Models\\Customer', 334, 'Banaa', '525dd8bb83707f6adfa3285e76e9f978e7f6a54a2d5e7b203a18cd1349d225a6', '[\"*\"]', '2022-12-12 19:14:04', '2022-12-12 19:13:59', '2022-12-12 19:14:04'),
(202, 'App\\Models\\Store', 1219, 'Banaa', '38f1d87d277cccb8680c5dd67182b8bbda0615d7ccdaaf990246790607aac773', '[\"*\"]', '2022-12-12 20:22:45', '2022-12-12 19:14:36', '2022-12-12 20:22:45'),
(203, 'App\\Models\\Store', 1219, 'Banaa', '2ccf577a15b51233777ef5adaaab57c91da611e0900b21cdf5110f6450a06b02', '[\"*\"]', '2022-12-12 21:47:58', '2022-12-12 21:17:59', '2022-12-12 21:47:58'),
(204, 'App\\Models\\Store', 1219, 'Banaa', '94f2ea848f97aa60901b9776656f7516062421cf6564be0a813919f62cc78b4e', '[\"*\"]', '2022-12-12 22:03:37', '2022-12-12 22:01:37', '2022-12-12 22:03:37'),
(205, 'App\\Models\\Store', 1219, 'Banaa', 'c54d36d9cd9eb96182f1e8c829df6347b2d0587762a41f151f88d96c4b12a9e3', '[\"*\"]', '2022-12-12 22:33:34', '2022-12-12 22:16:08', '2022-12-12 22:33:34'),
(206, 'App\\Models\\Store', 1219, 'Banaa', '70809cd01c1959ca7c3d11f047218a55036f9aaa61bfa1eaa08e3455d1d0185b', '[\"*\"]', '2022-12-13 00:04:38', '2022-12-12 23:20:20', '2022-12-13 00:04:38'),
(207, 'App\\Models\\Store', 1219, 'Banaa', '5df40d149e212ac1181b2969da49ae526dc0103b5db25e05c322f66ddda18e83', '[\"*\"]', '2022-12-15 01:17:07', '2022-12-14 19:51:18', '2022-12-15 01:17:07'),
(208, 'App\\Models\\Customer', 331, 'Banaa', 'f28428fe1d7a93467e60f7a07abf46e53b636e34aef820a104d54b5b7b01289e', '[\"*\"]', '2022-12-15 04:49:12', '2022-12-15 01:18:02', '2022-12-15 04:49:12'),
(209, 'App\\Models\\Store', 1219, 'Banaa', 'd9f95d0fb125f05b91e5a7996194a60d8e95cbf0a2394271b1a9ffe6d7eb655f', '[\"*\"]', '2022-12-19 19:29:42', '2022-12-15 04:49:32', '2022-12-19 19:29:42'),
(210, 'App\\Models\\Store', 1213, 'Blida Store', '53ae6620f5448f7e633d4714aacab12f03586d07dec4791cf7f6f882830be44e', '[\"*\"]', '2022-12-17 15:48:50', '2022-12-17 15:29:23', '2022-12-17 15:48:50'),
(211, 'App\\Models\\Store', 1213, 'Blida Store', 'ef2308d841a511fff3279eb7552927a2111ade05831ec14d5e8007e264d9de35', '[\"*\"]', '2022-12-17 20:29:37', '2022-12-17 16:10:45', '2022-12-17 20:29:37'),
(212, 'App\\Models\\Customer', 327, 'Merouane', 'f7927008fc2b65be2427b1021139fda6701868cf304da69362164e5ba05d1fbe', '[\"*\"]', NULL, '2022-12-17 18:32:17', '2022-12-17 18:32:17'),
(213, 'App\\Models\\Store', 1213, 'Blida Store', 'e9af644fd950b617bf5b45ce516700d8cf2d2ceefb3f210d4c5b1060739a64b5', '[\"*\"]', '2022-12-18 17:43:08', '2022-12-17 22:20:12', '2022-12-18 17:43:08'),
(214, 'App\\Models\\Store', 1213, 'eeeeeeee', 'ab695f45819abc0102d8ceda38283eadd11a5c4521794f3d4bb00cda20fb9543', '[\"*\"]', '2022-12-18 17:05:21', '2022-12-17 22:22:37', '2022-12-18 17:05:21'),
(215, 'App\\Models\\Store', 1213, 'eeeeeeee', 'e575c7128f54489f1b4d8f79f8342b5a4cfaefd0f08d33e03b845afd5aff88bc', '[\"*\"]', NULL, '2022-12-18 16:36:57', '2022-12-18 16:36:57'),
(216, 'App\\Models\\Store', 1213, 'eeeeeeee', 'ab616b3c5bc2583566fc414543c515d4af656003a5112924108f3a1d3bd24baf', '[\"*\"]', '2023-01-08 04:34:12', '2022-12-18 16:55:54', '2023-01-08 04:34:12'),
(217, 'App\\Models\\Store', 1219, 'Banaa', 'f813158325faafbf1bc385e0e775717d20149561fa4328d01ad7d8a7c53cb486', '[\"*\"]', '2022-12-19 00:05:37', '2022-12-18 19:12:00', '2022-12-19 00:05:37'),
(218, 'App\\Models\\Customer', 331, 'Banaa', '9556688bf7b1810fdfadc8af72590ce8a9e7f8ed8cdd856fdf0336a21fd3a64f', '[\"*\"]', '2022-12-19 14:15:31', '2022-12-19 14:15:18', '2022-12-19 14:15:31'),
(219, 'App\\Models\\Store', 1219, 'Banaa', '018cfe2053f07c1a3e3261c63f92cbe4f552eb41c38a2a3f594663c037c8a64c', '[\"*\"]', '2022-12-19 17:54:12', '2022-12-19 14:15:46', '2022-12-19 17:54:12'),
(220, 'App\\Models\\Store', 1219, 'Banaa', '447a12dcdd4176a52f1f1af115fa285a57f80baf827b924d21531cfd3c02dde7', '[\"*\"]', '2022-12-20 17:02:48', '2022-12-19 19:17:06', '2022-12-20 17:02:48'),
(221, 'App\\Models\\Customer', 331, 'Banaa', 'd9a9e7aeacf3900b6bc07c67e3b3cd9da2c4253e93cd9e38a1969e5f4f1d2c44', '[\"*\"]', '2022-12-21 02:19:41', '2022-12-20 17:03:19', '2022-12-21 02:19:41'),
(222, 'App\\Models\\Store', 1213, 'eeeeeeee', 'cc44c2551bec3479c0748307b09852ed70073fcf6ba5d948d84dcbabc6d9c02f', '[\"*\"]', NULL, '2022-12-20 19:16:13', '2022-12-20 19:16:13'),
(223, 'App\\Models\\Store', 1214, 'Alger Store', 'dfeadca6b53c6c8b69bd7df9c08061ddf65a41ae215f94d866946ef64f4cde27', '[\"*\"]', '2022-12-20 19:17:12', '2022-12-20 19:16:41', '2022-12-20 19:17:12'),
(224, 'App\\Models\\Customer', 331, 'Banaa', '0af26f9f47ac6e50e22925918bf9fc950ef2e13c4c1e0b7f7e03f1cbb7d2b666', '[\"*\"]', '2022-12-21 03:09:59', '2022-12-21 02:33:58', '2022-12-21 03:09:59'),
(225, 'App\\Models\\Customer', 331, 'Banaa', '2e171e7bc7f9bd67a3f55876d616be367a8996164e9926ea6f75081187da494f', '[\"*\"]', '2022-12-21 03:14:19', '2022-12-21 03:11:09', '2022-12-21 03:14:19'),
(226, 'App\\Models\\Customer', 331, 'Banaa', '12c335830afe804289b3af5430c912db9e6ed77425cc885ecb43657ca56e5260', '[\"*\"]', '2022-12-21 04:56:54', '2022-12-21 03:15:42', '2022-12-21 04:56:54'),
(227, 'App\\Models\\Customer', 331, 'Banaa', 'e53a108fc56238082f495ed9af57267f6f9c94198bbdc693f2817564e2ab0b29', '[\"*\"]', '2022-12-21 19:48:03', '2022-12-21 04:59:06', '2022-12-21 19:48:03'),
(228, 'App\\Models\\Customer', 331, 'Banaa', 'b7cf447d39ef24ab7e4a8529b11d2fc3761258c6510b2332493bc1d4d522b436', '[\"*\"]', '2022-12-21 21:27:28', '2022-12-21 19:57:41', '2022-12-21 21:27:28'),
(229, 'App\\Models\\Store', 1213, 'eeeeeeee', '78cdd4265c4e527793b7d32b4a663b4b8b4bd6776ec8f2f24716c83c843dbb8b', '[\"*\"]', NULL, '2022-12-23 03:17:30', '2022-12-23 03:17:30'),
(230, 'App\\Models\\Customer', 327, 'Merouane', 'deddfc44bec9c8708a51a2050af51191d93984f0541a1a969f9e5b8030ed847f', '[\"*\"]', NULL, '2022-12-24 16:22:47', '2022-12-24 16:22:47'),
(231, 'App\\Models\\Customer', 331, 'Banaa', '0e03022dfb6cb9af5e16645bce6480d460e19290c1daf45fc1fb84ad31f6e301', '[\"*\"]', '2022-12-26 04:11:02', '2022-12-26 04:06:46', '2022-12-26 04:11:02'),
(232, 'App\\Models\\Store', 1219, 'Banaa', 'cfc8dbb2ad877dc7f5375bb38b734809722cab79a7d2f5f8677017215f589b77', '[\"*\"]', '2022-12-26 04:17:48', '2022-12-26 04:11:22', '2022-12-26 04:17:48'),
(233, 'App\\Models\\Customer', 335, 'Banaa', '3b8eb00f10aee040d77bde61da8bad4b9144a72479e49c1543b574c538bf0d0e', '[\"*\"]', '2022-12-28 21:19:56', '2022-12-28 21:19:01', '2022-12-28 21:19:56'),
(234, 'App\\Models\\Customer', 335, 'Banaa', '4b09d1344fb3290a9e289bdad4a33743aedb54855ad55e076f9d55e156b4d9a8', '[\"*\"]', '2022-12-31 06:20:16', '2022-12-31 06:08:31', '2022-12-31 06:20:16'),
(235, 'App\\Models\\Store', 1219, 'Banaa', 'ba000c09bc36f20a8c9baffd3bfaf7bda3731ff498c8f00f9f03ff509fbc0022', '[\"*\"]', '2022-12-31 19:23:24', '2022-12-31 06:20:40', '2022-12-31 19:23:24'),
(236, 'App\\Models\\Customer', 336, 'Banaa', 'ca7c538cf542088697dbbe9374bc527998fb9ef18bf37102883998b03e15b29d', '[\"*\"]', '2022-12-31 06:43:49', '2022-12-31 06:34:59', '2022-12-31 06:43:49'),
(237, 'App\\Models\\Customer', 337, 'Banaa', '92dc916b3d027ec47e0a21db424bd84766263bfd264e4448ad212f762ad50391', '[\"*\"]', NULL, '2022-12-31 06:44:26', '2022-12-31 06:44:26'),
(238, 'App\\Models\\Customer', 336, 'Banaa', '80a299809409d4a0eafebc82dbd0b807da6b5d1cc05a6ae7b1dc0f21bf233dd8', '[\"*\"]', '2022-12-31 06:48:21', '2022-12-31 06:46:21', '2022-12-31 06:48:21'),
(239, 'App\\Models\\Store', 1220, 'Banaa', '050949c18a6b42934c09f1c26e70e5e311c102eb795864a1ee30e388293fb6d4', '[\"*\"]', '2022-12-31 06:51:49', '2022-12-31 06:49:13', '2022-12-31 06:51:49'),
(240, 'App\\Models\\Customer', 336, 'Banaa', '0d9092f650a28a9fac48bb5acb8c75904ad0a952d6b1badf079ed1dc3faa4b59', '[\"*\"]', '2022-12-31 06:54:21', '2022-12-31 06:51:58', '2022-12-31 06:54:21'),
(241, 'App\\Models\\Store', 1220, 'Banaa', '2c937a813f90357a559cd0d26c592e3376903f672d281a7e33e6f028ff11579d', '[\"*\"]', '2022-12-31 07:02:27', '2022-12-31 06:54:30', '2022-12-31 07:02:27'),
(242, 'App\\Models\\Customer', 338, 'Banaa', '43521870fade1dfd129878c0562b09aedb0268a1e847638c5cd9bf13fcf43a12', '[\"*\"]', '2022-12-31 15:39:49', '2022-12-31 15:23:49', '2022-12-31 15:39:49'),
(243, 'App\\Models\\Customer', 331, 'Banaa', '9771232b6ef0409a4d679deb994688fe228fed78c48b1cba6d5f8aafb212faa1', '[\"*\"]', '2023-01-10 19:19:22', '2022-12-31 19:24:59', '2023-01-10 19:19:22'),
(244, 'App\\Models\\Customer', 336, 'Banaa', '83054e19591c99882f8b029a805f71975c6d48d00ef310536cddfc4ac312cd20', '[\"*\"]', '2023-01-03 12:39:13', '2022-12-31 22:53:54', '2023-01-03 12:39:13'),
(245, 'App\\Models\\Customer', 338, 'Banaa', 'f3a2cad508abbd2477e23ed72fa6b0efc6dbf01c710fe4d251df870d78322581', '[\"*\"]', '2023-01-02 21:06:15', '2023-01-02 15:36:00', '2023-01-02 21:06:15'),
(246, 'App\\Models\\Store', 1219, 'Banaa', 'c5c4b0b9200669e2672023b44b5062f941ec6ef59f7b61b848fdc3ad5e9d0adc', '[\"*\"]', '2023-01-02 19:30:49', '2023-01-02 16:56:27', '2023-01-02 19:30:49'),
(247, 'App\\Models\\Customer', 331, 'Banaa', 'f1c9a89ff5e435b74f7a9baddd01b00eb17e2168f555cd5886e803ce0f687119', '[\"*\"]', '2023-01-03 05:57:06', '2023-01-02 19:31:10', '2023-01-03 05:57:06'),
(248, 'App\\Models\\Store', 1219, 'Banaa', 'bb763bc6385685b3b537dab33524bc8000e67cade8b89427ac3342c188db2886', '[\"*\"]', '2023-01-03 17:04:49', '2023-01-03 06:01:57', '2023-01-03 17:04:49'),
(249, 'App\\Models\\Customer', 327, 'Merouane', '610ad7862fbac8b738c16b81fd701fe021d2935ba3b5fbc8a1523732d248a19c', '[\"*\"]', '2023-01-04 20:38:34', '2023-01-03 13:21:47', '2023-01-04 20:38:34'),
(250, 'App\\Models\\Customer', 331, 'Banaa', 'cb2a92d021c7a40eb6f4cbd18a50813f601fafd47308c6a99c38e1a2c8e929c2', '[\"*\"]', '2023-01-04 04:33:31', '2023-01-03 17:05:06', '2023-01-04 04:33:31'),
(251, 'App\\Models\\Customer', 327, 'Merouane', 'bc924040ef236ed988eb0689a8296d89d54dc914dd9597a73a965543f78c3649', '[\"*\"]', '2023-01-05 20:38:02', '2023-01-03 17:45:49', '2023-01-05 20:38:02'),
(252, 'App\\Models\\Store', 1219, 'Banaa', '105c0690a62ed185ba7334d995c26274dd62affa6e4723a14a38961955fa60fa', '[\"*\"]', '2023-01-03 22:25:04', '2023-01-03 20:10:02', '2023-01-03 22:25:04'),
(253, 'App\\Models\\Customer', 327, 'Merouane', '65eadce734db708db3d70d9b453b8906c89cb7d06acde7d6627648ecbb765117', '[\"*\"]', '2023-01-03 21:01:52', '2023-01-03 20:56:20', '2023-01-03 21:01:52'),
(254, 'App\\Models\\Customer', 331, 'Banaa', 'ab8bcc057a5b803ef25931512ee464ab5c2a5d54141e3578e4862c54310abefc', '[\"*\"]', '2023-01-04 06:14:43', '2023-01-03 22:25:28', '2023-01-04 06:14:43'),
(255, 'App\\Models\\Store', 1219, 'Banaa', '49147ff9e0e3c8d8846d20ecc2389fdd7fee51f9e1919d4d1af19c7ab3332789', '[\"*\"]', '2023-01-04 17:11:05', '2023-01-04 06:15:00', '2023-01-04 17:11:05'),
(256, 'App\\Models\\Customer', 331, 'Banaa', 'f5d9d58630d69fa19216259a23bb7fe4b8594d98725e4b45dde1893eebae5c62', '[\"*\"]', '2023-01-04 17:23:43', '2023-01-04 17:12:32', '2023-01-04 17:23:43'),
(257, 'App\\Models\\Customer', 331, 'Banaa', '6350f8e5aeaef66b2983974987284ea7a2e902ea8c80678957bb8afe36f419a6', '[\"*\"]', '2023-01-04 20:03:23', '2023-01-04 18:55:10', '2023-01-04 20:03:23'),
(258, 'App\\Models\\Store', 1219, 'Banaa', 'dc896c0bba4d46c04f860fa0614a42754ef0fcdcbcea0b21f36cc25c687c8c0a', '[\"*\"]', '2023-01-04 21:55:21', '2023-01-04 20:03:46', '2023-01-04 21:55:21'),
(259, 'App\\Models\\Customer', 331, 'Banaa', '40ed614b8d2a6937fa6a0067e358c689cc2ce4dfbdf9af053b4bab93e7b3f0e4', '[\"*\"]', '2023-01-05 17:28:38', '2023-01-04 21:55:37', '2023-01-05 17:28:38'),
(260, 'App\\Models\\Store', 1219, 'Banaa', '08ec9891f24867f74635378958d06933d34a9c5b692c7a7e26832939ccea2621', '[\"*\"]', '2023-01-05 17:01:13', '2023-01-05 16:43:29', '2023-01-05 17:01:13'),
(261, 'App\\Models\\Customer', 331, 'Banaa', 'e08142d3f83e88836f96272175b776b514814c79e82ab352cbdce3e2242e1639', '[\"*\"]', '2023-01-05 17:24:12', '2023-01-05 17:02:38', '2023-01-05 17:24:12'),
(262, 'App\\Models\\Store', 1219, 'Banaa', 'ba8236d8a3566496606d6a80a6d39fcfb7cde41e9cee2ae6fe3ec2b7f9fffb06', '[\"*\"]', '2023-01-05 17:34:10', '2023-01-05 17:24:31', '2023-01-05 17:34:10'),
(263, 'App\\Models\\Customer', 331, 'Banaa', '3ddb1425893d13c040d504b085a14efeba69840fa339d02982c358f948a853c7', '[\"*\"]', '2023-01-06 04:48:59', '2023-01-05 17:34:32', '2023-01-06 04:48:59'),
(264, 'App\\Models\\Store', 1213, 'eeeeeeee', '2239e305516131b3caea22694770ab745412b512d1a1403b1d79f4d5514d4339', '[\"*\"]', '2023-01-05 20:45:07', '2023-01-05 20:40:14', '2023-01-05 20:45:07'),
(265, 'App\\Models\\Customer', 336, 'Banaa', '31a73ca93b22451de53c53b3967913ed2d0838b7b07a481897d1e456ada1535f', '[\"*\"]', '2023-01-08 05:58:55', '2023-01-05 20:41:37', '2023-01-08 05:58:55'),
(266, 'App\\Models\\Store', 1219, 'Banaa', '33e61177395d2a778c0b50dd7ab18b42bf172c26925b94d94e9b10023916eac0', '[\"*\"]', '2023-01-06 05:44:36', '2023-01-06 04:49:14', '2023-01-06 05:44:36'),
(267, 'App\\Models\\Customer', 331, 'Banaa', 'a078b50f416c50358cc96ed79f13c9cad3380a70a65c3287d08896b2eab5aef1', '[\"*\"]', '2023-01-06 06:15:17', '2023-01-06 05:45:00', '2023-01-06 06:15:17'),
(268, 'App\\Models\\Store', 1219, 'Banaa', 'faaf853bfa86b9f274f197b7883c6767f9b202dd515f05b326d37a30326821fa', '[\"*\"]', '2023-01-06 06:18:43', '2023-01-06 06:15:29', '2023-01-06 06:18:43'),
(269, 'App\\Models\\Customer', 331, 'Banaa', 'fac21a775b9585739e87d0b9bb2f3e9b6743fae1904d331544d55fdf898250c8', '[\"*\"]', '2023-01-06 06:49:09', '2023-01-06 06:29:05', '2023-01-06 06:49:09'),
(270, 'App\\Models\\Store', 1219, 'Banaa', '4f6484621f1673c2845427fa23c8a2020b5882d74919921645823fe2f313f09a', '[\"*\"]', '2023-01-06 08:51:30', '2023-01-06 06:49:28', '2023-01-06 08:51:30');
INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(271, 'App\\Models\\Customer', 331, 'Banaa', '7195659f72d81fe92e02f939a4f240978d588aa3d739c3cb126921c9c5d78b75', '[\"*\"]', '2023-01-06 08:55:15', '2023-01-06 08:51:55', '2023-01-06 08:55:15'),
(272, 'App\\Models\\Store', 1219, 'Banaa', 'd0f17517a67d8c93fd8f87fb3dde91749cce90235750e6e608892d2fb893c6e6', '[\"*\"]', '2023-01-06 09:08:16', '2023-01-06 08:55:26', '2023-01-06 09:08:16'),
(273, 'App\\Models\\Customer', 332, 'Banaa', 'bc3f42a81306acef27238d6963814e8770f2056fbf7f9f7e8d08a656c9cc0eb5', '[\"*\"]', '2023-01-06 09:12:12', '2023-01-06 09:08:42', '2023-01-06 09:12:12'),
(274, 'App\\Models\\Customer', 331, 'Banaa', '391c75c43b608d11f32891bb4157556745451a2920179a64570b300bd65f9769', '[\"*\"]', '2023-01-06 09:21:00', '2023-01-06 09:18:32', '2023-01-06 09:21:00'),
(275, 'App\\Models\\Store', 1219, 'Banaa', '926e7f0750bb7bee9cf9cab0246aae4b7d93a3dd18574db3a52625b3c31f930e', '[\"*\"]', '2023-01-07 07:48:23', '2023-01-07 07:02:37', '2023-01-07 07:48:23'),
(276, 'App\\Models\\Customer', 331, 'Banaa', 'bc15371f26e5862be4f98d5fcece42265fadbcf1a1dc2868f3a773aa5f499bef', '[\"*\"]', '2023-01-07 07:53:30', '2023-01-07 07:51:22', '2023-01-07 07:53:30'),
(277, 'App\\Models\\Store', 1219, 'Banaa', 'c21a06d02554f0bdc21712e88d65895b6bbdecd36808f8cfc47fcfc231220290', '[\"*\"]', '2023-01-07 07:53:46', '2023-01-07 07:53:42', '2023-01-07 07:53:46'),
(278, 'App\\Models\\Customer', 338, 'Banaa', '9685f1fcd562c1232d318f1e6533239a469f074210f485d89de332790868c3e7', '[\"*\"]', '2023-01-07 21:47:35', '2023-01-07 21:40:53', '2023-01-07 21:47:35'),
(279, 'App\\Models\\Store', 1221, 'Banaa', '5a5e08d0cd91925e23bc6484bf46843cf72b25e90946a87eb4d072fca822c359', '[\"*\"]', '2023-01-07 21:57:39', '2023-01-07 21:50:12', '2023-01-07 21:57:39'),
(280, 'App\\Models\\Customer', 329, 'Banaa', '1a7716946decfee5e794df1222549e892edde646fe68994726101559d0d1b44a', '[\"*\"]', '2023-01-08 19:28:24', '2023-01-07 21:57:19', '2023-01-08 19:28:24'),
(281, 'App\\Models\\Store', 1219, 'Banaa', '171a4670e368f4a0ffe52543676759ee59e608772649ba39757818b1b72d342f', '[\"*\"]', '2023-01-08 05:41:03', '2023-01-08 04:35:26', '2023-01-08 05:41:03'),
(282, 'App\\Models\\Customer', 331, 'Banaa', 'a1a7a364f353246a075bca546112ed33c3756ae49caadf28dd51bec629f7c399', '[\"*\"]', '2023-01-08 06:15:50', '2023-01-08 05:41:26', '2023-01-08 06:15:50'),
(283, 'App\\Models\\Customer', 337, 'Banaa', '609eef61a18f477e5d88e0af24b965c5ba14163447b0a27d8dd1a47935bfba2d', '[\"*\"]', NULL, '2023-01-08 05:59:24', '2023-01-08 05:59:24'),
(284, 'App\\Models\\Customer', 337, 'Banaa', '2c1c09f293d68df2f91a1f7ca510daace44abf05380b61a485cc91c027dc49e8', '[\"*\"]', NULL, '2023-01-08 05:59:46', '2023-01-08 05:59:46'),
(285, 'App\\Models\\Store', 1220, 'Banaa', 'bf4277e2cf0171e5f2866b3d41f68d4957db60d70bc1430dc69afcbc11fce0d3', '[\"*\"]', '2023-01-08 06:28:19', '2023-01-08 06:00:22', '2023-01-08 06:28:19'),
(286, 'App\\Models\\Store', 1220, 'Banaa', '8c724ca22119ecb206a60a2677fe205a1155773e90875851a451c81b64226c56', '[\"*\"]', '2023-01-08 06:46:41', '2023-01-08 06:26:02', '2023-01-08 06:46:41'),
(287, 'App\\Models\\Store', 1220, 'Banaa', '139c77fb6d71f7785a1ca6a05cf2124aa2d606f1582b97eee5e93d5d4a2c879c', '[\"*\"]', '2023-01-09 04:50:30', '2023-01-08 06:36:11', '2023-01-09 04:50:30'),
(288, 'App\\Models\\Customer', 331, 'Banaa', '21bf6b326130dc2741a93362e413ca21bdb645c50b3d57e67d6549d66e97fdc5', '[\"*\"]', '2023-01-08 16:44:35', '2023-01-08 06:56:12', '2023-01-08 16:44:35'),
(289, 'App\\Models\\Store', 1221, 'Banaa', '1a430fd648f51a47d485e98bee63699f6000abe63b1c9bda44404f158dc350c9', '[\"*\"]', '2023-01-08 19:28:22', '2023-01-08 19:18:46', '2023-01-08 19:28:22'),
(290, 'App\\Models\\Customer', 338, 'Banaa', '6d29b12fa47e463cce6325c84bbb50571b88026ebb5ea40ee7d43760a8d03a66', '[\"*\"]', '2023-01-08 19:30:03', '2023-01-08 19:28:31', '2023-01-08 19:30:03'),
(291, 'App\\Models\\Store', 1221, 'Banaa', 'd99c8ecb163f8d8d6aa411a6a486e28efce88510d1214eb26e7a291fb6b439cf', '[\"*\"]', '2023-01-08 19:37:29', '2023-01-08 19:30:09', '2023-01-08 19:37:29'),
(292, 'App\\Models\\Customer', 329, 'Banaa', '899c0e5ac956364e10992b607981e1737fa4c3a7cf52f5b6bbc7f1252c09dad8', '[\"*\"]', '2023-01-08 19:33:21', '2023-01-08 19:33:17', '2023-01-08 19:33:21'),
(293, 'App\\Models\\Customer', 329, 'Banaa', '98641a9f6ccde95cdc7f4ef17e197e5631854aa0ff7738620cf150a859babc15', '[\"*\"]', '2023-01-15 01:36:02', '2023-01-08 19:33:29', '2023-01-15 01:36:02'),
(294, 'App\\Models\\Store', 1219, 'Banaa', '905ac2295f7eaa3a7a3f3512173509504ac8a6d1b448b7c925ea164084cfb0ff', '[\"*\"]', '2023-01-08 19:59:10', '2023-01-08 19:35:22', '2023-01-08 19:59:10'),
(295, 'App\\Models\\Store', 1219, 'Banaa', '099c70f964e2dd7296aaeecd96837b8fb53ddd223a961b5bd80139aa405e1212', '[\"*\"]', '2023-01-08 21:30:50', '2023-01-08 21:30:07', '2023-01-08 21:30:50'),
(296, 'App\\Models\\Customer', 331, 'Banaa', '1a9a745dc4ff2e53b578dd12da7a7b0e4512f0ab298436588ed6dc0da911410b', '[\"*\"]', '2023-01-08 21:41:11', '2023-01-08 21:40:20', '2023-01-08 21:41:11'),
(297, 'App\\Models\\Store', 1219, 'Banaa', '63095311172d244f97f013b6d60cc12c95d7fa30806f6f94ae9eaa25066b8442', '[\"*\"]', '2023-01-09 05:40:31', '2023-01-08 21:41:26', '2023-01-09 05:40:31'),
(298, 'App\\Models\\Customer', 331, 'Banaa', '62db9f8f75fdbf9d2227266e2b3ae0edfa8ab69c4e1b1eac777b209fdacf7f37', '[\"*\"]', '2023-01-09 17:21:49', '2023-01-09 05:40:39', '2023-01-09 17:21:49'),
(299, 'App\\Models\\Store', 1221, 'Banaa', '3ae9b8457b550b4d7954d57397ca714f8b723222e3e007ef2aea16e1d267b740', '[\"*\"]', '2023-01-09 17:28:16', '2023-01-09 17:21:41', '2023-01-09 17:28:16'),
(300, 'App\\Models\\Store', 1219, 'Banaa', 'ae9860235af0a86fe2c6fcde4778c0fc8645cda7ef24231c6528c2cda3cb3315', '[\"*\"]', '2023-01-09 17:22:14', '2023-01-09 17:22:03', '2023-01-09 17:22:14'),
(301, 'App\\Models\\Store', 1219, 'Banaa', '194cacf4fd3bd4deb740e0bf728afacb920c2f5d8e43b171277871a5dfef205c', '[\"*\"]', '2023-01-09 17:22:50', '2023-01-09 17:22:20', '2023-01-09 17:22:50'),
(302, 'App\\Models\\Store', 1219, 'Banaa', 'ceb4053dbe4c2019ad06525784b6e79523d61cf7fa08b09c58e3a64fb53b0759', '[\"*\"]', '2023-01-09 17:23:08', '2023-01-09 17:22:57', '2023-01-09 17:23:08'),
(303, 'App\\Models\\Customer', 331, 'Banaa', '395ed753ae6fdd7c0de5072328ba12d558188e49c3a213ba114c20dc5e8870dc', '[\"*\"]', '2023-01-09 21:52:07', '2023-01-09 17:23:29', '2023-01-09 21:52:07'),
(304, 'App\\Models\\Customer', 336, 'Banaa', 'f8b37105983322446fc428be65e4054b5834ac56d99049425539d3591895330e', '[\"*\"]', '2023-01-22 03:29:28', '2023-01-09 19:52:29', '2023-01-22 03:29:28'),
(305, 'App\\Models\\Customer', 331, 'Banaa', 'f3a6a9cedb17457412850d14f3bd71e7470b3043035f784a49531bf7d67b04a3', '[\"*\"]', '2023-01-09 21:57:01', '2023-01-09 21:50:08', '2023-01-09 21:57:01'),
(306, 'App\\Models\\Store', 1219, 'Banaa', '04995f75abb3c52af8611284c2529fc1f68ad0b6a30c4ae85efdb95f66b96905', '[\"*\"]', '2023-01-09 22:52:34', '2023-01-09 21:52:21', '2023-01-09 22:52:34'),
(307, 'App\\Models\\Customer', 331, 'Banaa', '90f958afbbe8cb4f3f8a8d6b4a8252ba4cd6098d02dcafc2782c589b72e3f429', '[\"*\"]', '2023-01-09 22:59:30', '2023-01-09 22:52:52', '2023-01-09 22:59:30'),
(308, 'App\\Models\\Customer', 331, 'Banaa', 'fb3005cd2bb2a4aac29638ae073b9924c61fd7a6c56ad80257f3598aec10ca4a', '[\"*\"]', '2023-01-09 23:39:43', '2023-01-09 22:59:51', '2023-01-09 23:39:43'),
(309, 'App\\Models\\Customer', 331, 'Banaa', '27ba06421d9ae358b70fd15ab293a6c6f106acd9c706e0a576f101cecbdfbcda', '[\"*\"]', '2023-01-09 23:50:47', '2023-01-09 23:40:12', '2023-01-09 23:50:47'),
(310, 'App\\Models\\Customer', 331, 'Banaa', 'cb215cd19847931535830ecc35ca2091a5930d786b4b1985006f503bca3f7d3b', '[\"*\"]', '2023-01-10 00:02:49', '2023-01-09 23:51:15', '2023-01-10 00:02:49'),
(311, 'App\\Models\\Customer', 331, 'Banaa', 'e6f24f1a40c7bad5420e54cb34a0038ff4eaeff2f700e40fdd166698ada9c945', '[\"*\"]', '2023-01-10 05:02:53', '2023-01-10 00:03:06', '2023-01-10 05:02:53'),
(312, 'App\\Models\\Customer', 339, 'Banaa', 'c3edb602389f837360947cb623cffa2d3b9e28cc697c59e95d6571794e402c24', '[\"*\"]', '2023-01-10 02:06:15', '2023-01-10 00:50:18', '2023-01-10 02:06:15'),
(313, 'App\\Models\\Customer', 339, 'Banaa', '8dcf2dff1bce4d5a7f2851ded69c25086295244cdd91c2b707d90b549538c9e3', '[\"*\"]', '2023-01-10 05:56:30', '2023-01-10 02:06:41', '2023-01-10 05:56:30'),
(314, 'App\\Models\\Customer', 339, 'Banaa', 'b6592403f98a42fd51b9d8abf55a3a6d3b8fc4ec112e2dfc7af9918964541389', '[\"*\"]', NULL, '2023-01-10 02:14:11', '2023-01-10 02:14:11'),
(315, 'App\\Models\\Customer', 339, 'Banaa', '3a8b683117931757bb6ff9d3bde56456224eec5e657dd0763124a9bb9187e51c', '[\"*\"]', NULL, '2023-01-10 02:14:16', '2023-01-10 02:14:16'),
(316, 'App\\Models\\Customer', 339, 'Banaa', '54083deb23be330147b1eb747b3418ca4e5d3568d74f928a11d00b30aa4aa2dd', '[\"*\"]', NULL, '2023-01-10 05:01:31', '2023-01-10 05:01:31'),
(317, 'App\\Models\\Customer', 331, 'Banaa', '79e50e8b2bec7227d973f6fddac196ef5ba816d9ae847737692bdb9b5546f5e3', '[\"*\"]', '2023-01-10 05:13:47', '2023-01-10 05:03:13', '2023-01-10 05:13:47'),
(318, 'App\\Models\\Customer', 331, 'Banaa', '9dd009f8e21956d400d94dc26429ce0676250e85fb7d9f29591e59d781c9b9a2', '[\"*\"]', '2023-01-10 05:15:45', '2023-01-10 05:14:24', '2023-01-10 05:15:45'),
(319, 'App\\Models\\Store', 1219, 'Banaa', 'f4b4755cbbb1f9ae47f302235a0fcd2a257149103b4ecac2dfb26075d01242a4', '[\"*\"]', '2023-01-10 05:34:06', '2023-01-10 05:16:14', '2023-01-10 05:34:06'),
(320, 'App\\Models\\Customer', 327, 'Merouane', '83dd170234454b0b6cb9046aec1e5ecfc6d5200e58f013845df16aa43eb8a664', '[\"*\"]', '2023-01-10 13:51:52', '2023-01-10 05:17:49', '2023-01-10 13:51:52'),
(321, 'App\\Models\\Customer', 331, 'Banaa', 'b0f4e59fe7784526ee9b4b4959747f82ea722704c7efbc858b54b6fc6518e7b2', '[\"*\"]', '2023-01-10 05:35:41', '2023-01-10 05:34:22', '2023-01-10 05:35:41'),
(322, 'App\\Models\\Customer', 331, 'Banaa', '79a395cd1e8eb40ccf8cea140a1872f159540394ca9f1ccd26ab93cbef5c9adf', '[\"*\"]', '2023-01-10 05:36:15', '2023-01-10 05:36:11', '2023-01-10 05:36:15'),
(323, 'App\\Models\\Store', 1219, 'Banaa', '99c8cd83091a58fef3f3169b50b6baf7236793dd30ac67c09f65fd057fb24b2e', '[\"*\"]', '2023-01-10 05:39:08', '2023-01-10 05:36:27', '2023-01-10 05:39:08'),
(324, 'App\\Models\\Customer', 331, 'Banaa', 'cbcd59214907a751da450ac0560fd05052950f0bdaf89f492472cad0e7439184', '[\"*\"]', '2023-01-10 05:40:08', '2023-01-10 05:39:21', '2023-01-10 05:40:08'),
(325, 'App\\Models\\Store', 1219, 'Banaa', '02fe11f646b8a5eb46b660b20a3184b2bed8b1e4d4ec3e2af0f991868db8805a', '[\"*\"]', '2023-01-10 06:53:23', '2023-01-10 05:40:15', '2023-01-10 06:53:23'),
(326, 'App\\Models\\Customer', 339, 'Banaa', 'dcca7929975e682c191e21a4f59c254cddddb0b2ed92fa25044610905a7e9509', '[\"*\"]', '2023-01-10 05:57:28', '2023-01-10 05:57:25', '2023-01-10 05:57:28'),
(327, 'App\\Models\\Customer', 331, 'Banaa', '4ca1cb5b54c7dc9f66280ebe699fa783dbc011e4d9a3659d8852c2e961bfa741', '[\"*\"]', '2023-01-10 07:13:56', '2023-01-10 06:53:40', '2023-01-10 07:13:56'),
(328, 'App\\Models\\Store', 1219, 'Banaa', '8b553da99f02eb68a66a55a77f5ad66c0dcf46859c9cf3b6027b331eb8ccd2b6', '[\"*\"]', '2023-01-10 07:05:22', '2023-01-10 06:55:59', '2023-01-10 07:05:22'),
(329, 'App\\Models\\Store', 1219, 'Banaa', '42a3710b17f1e45663f250c96dab5673c922f72f7cd99bbcef5d8ca5bf221ba6', '[\"*\"]', '2023-01-10 07:05:52', '2023-01-10 07:05:36', '2023-01-10 07:05:52'),
(330, 'App\\Models\\Customer', 331, 'Banaa', 'fda248497c75333387fe857e4952c4e5c90e9cbc2ed64eab1eee572998e3b5e3', '[\"*\"]', '2023-01-10 07:35:55', '2023-01-10 07:06:03', '2023-01-10 07:35:55'),
(331, 'App\\Models\\Customer', 331, 'Banaa', '4551708349dff55b689bbc53373fd6e28ff9e63dcfe706f95a4be865a87b8eae', '[\"*\"]', '2023-01-10 08:18:30', '2023-01-10 08:00:13', '2023-01-10 08:18:30'),
(332, 'App\\Models\\Customer', 331, 'Banaa', '056665715564c2ed7bfb0cc054f2c5231e797caffe4849ac9c78ab72e55533cc', '[\"*\"]', NULL, '2023-01-10 08:00:13', '2023-01-10 08:00:13'),
(333, 'App\\Models\\Store', 1219, 'Banaa', '8d1384625f481645deec8f6a8e055cd3e931b0959aeff4e13929d38edde5f99e', '[\"*\"]', '2023-01-10 08:09:40', '2023-01-10 08:00:54', '2023-01-10 08:09:40'),
(334, 'App\\Models\\Store', 1219, 'Banaa', 'c717125eaa64056c1f442ca70df416f0d3605eebba53282b386c6fdec8dda0f0', '[\"*\"]', '2023-01-10 08:18:20', '2023-01-10 08:09:53', '2023-01-10 08:18:20'),
(335, 'App\\Models\\Customer', 331, 'Banaa', 'b89b5c1fd7cc9cc041f7ee647eae01ac292b4b2c201d885d0187f5616a89098c', '[\"*\"]', '2023-01-10 08:28:20', '2023-01-10 08:18:31', '2023-01-10 08:28:20'),
(336, 'App\\Models\\Store', 1219, 'Banaa', '5c1b68dd60e89e86728ece4a9eac49e87b83af991dc6cc15cd759b9976d37bdb', '[\"*\"]', '2023-01-10 08:28:03', '2023-01-10 08:25:48', '2023-01-10 08:28:03'),
(337, 'App\\Models\\Customer', 331, 'Banaa', '85100994c51e4f1b43c53bc0109f6040c58f338d3e85d2a0194e1273ffd7e1d0', '[\"*\"]', '2023-01-10 08:32:38', '2023-01-10 08:28:14', '2023-01-10 08:32:38'),
(338, 'App\\Models\\Customer', 331, 'Banaa', 'f04e83d71cc8226319ce3a8566dfcc809b981a2e57d148ec8d11d5dda0b2d27f', '[\"*\"]', '2023-01-10 08:28:40', '2023-01-10 08:28:32', '2023-01-10 08:28:40'),
(339, 'App\\Models\\Store', 1219, 'Banaa', '6d2dbd5a1d0ea8c9563178c7a97087079fc839e1e7e364cdeb38de228b8d051b', '[\"*\"]', '2023-01-10 08:48:27', '2023-01-10 08:29:23', '2023-01-10 08:48:27'),
(340, 'App\\Models\\Customer', 327, 'Merouane', 'e78b6c0bcbf19ff70e755b3595ae702ab74347c44abdede98b5c2904cfa5415e', '[\"*\"]', '2023-01-10 13:52:22', '2023-01-10 13:52:11', '2023-01-10 13:52:22'),
(341, 'App\\Models\\Customer', 327, 'Merouane', '4ab41d1b90d35f43737adc3a949c7a3c829e04c9608354030cad5c030128548e', '[\"*\"]', '2023-01-10 13:52:53', '2023-01-10 13:52:39', '2023-01-10 13:52:53'),
(342, 'App\\Models\\Customer', 327, 'Merouane', '77f85486c9c7f7399b43f0074f8b6d01ac66d3fc353ee46046b680b92fa87271', '[\"*\"]', '2023-01-10 14:02:09', '2023-01-10 14:02:00', '2023-01-10 14:02:09'),
(343, 'App\\Models\\Customer', 327, 'Merouane', 'a2ed8266424480e78c1581a916bc6c2365ab575e2e090a0deaa5bbf605e205b1', '[\"*\"]', '2023-01-10 14:03:22', '2023-01-10 14:03:05', '2023-01-10 14:03:22'),
(344, 'App\\Models\\Customer', 327, 'Merouane', '63301f80991197bc65690794fcf5ca30bad8a6bff05fc33f55f64c0ff4bc460e', '[\"*\"]', '2023-01-10 14:03:47', '2023-01-10 14:03:34', '2023-01-10 14:03:47'),
(345, 'App\\Models\\Customer', 339, 'AIMEN KAABI', '5053f7740502666b4871aed237a226c50309a33c3bf67ba5aa81d8f4bb401d09', '[\"*\"]', '2023-01-10 14:24:55', '2023-01-10 14:08:13', '2023-01-10 14:24:55'),
(346, 'App\\Models\\Customer', 331, 'Banaa', '40c4bba0c89232f4d71a55d686a1b854b346e23218b28ce0e0413e3ac0b54480', '[\"*\"]', '2023-01-12 03:20:16', '2023-01-10 19:56:15', '2023-01-12 03:20:16'),
(347, 'App\\Models\\Customer', 338, 'Banaa', '2b1d03b5d3f2e1cc262d2cdf57d1eb26ffc88d435cddfcecf232a9c05430492b', '[\"*\"]', '2023-01-10 21:29:20', '2023-01-10 21:29:16', '2023-01-10 21:29:20'),
(348, 'App\\Models\\Customer', 340, 'Banaa', 'a71aa0d1db64de748ad45ec2fc09317018230aaa1b8e1c6c84a7ced46eb452df', '[\"*\"]', '2023-01-23 16:06:10', '2023-01-11 05:59:38', '2023-01-23 16:06:10'),
(349, 'App\\Models\\Store', 1219, 'Banaa', 'b94314707bbb6f8942bfb39165d2c9a110659b1f31e3820c1dd4df3eb6048018', '[\"*\"]', '2023-01-17 02:20:34', '2023-01-12 03:20:48', '2023-01-17 02:20:34'),
(350, 'App\\Models\\Customer', 341, 'Banaa', '139d46d45fc76691246f130963cc11b1b293de594e852d6273ffb323d6dba539', '[\"*\"]', '2023-01-13 01:38:55', '2023-01-13 01:35:52', '2023-01-13 01:38:55'),
(351, 'App\\Models\\Customer', 341, 'Banaa', '2f5bf3ec2b6cc8f1a78ea69eca587232f71512402cb49f6e307acd33a1a35467', '[\"*\"]', '2023-01-13 01:39:16', '2023-01-13 01:39:09', '2023-01-13 01:39:16'),
(352, 'App\\Models\\Store', 1222, 'Banaa', '2723d4f86aaeba592730ce9890fe214148ad5c68bb21a3171ad81bcf31301a36', '[\"*\"]', '2023-01-21 21:56:46', '2023-01-13 01:40:02', '2023-01-21 21:56:46'),
(353, 'App\\Models\\Customer', 331, 'Banaa', 'bb584e29db97ddbba1be36b7c3b12f4720ce9ec92740a607a9594ccc30c38f9a', '[\"*\"]', '2023-01-23 02:43:03', '2023-01-17 02:22:06', '2023-01-23 02:43:03'),
(354, 'App\\Models\\Store', 1, 'Banaa', '19142c2abe960927be623dda2ed6f44dd8a553a11440dcbd2953c529e25b6885', '[\"*\"]', '2023-02-22 15:59:26', '2023-02-16 12:44:37', '2023-02-22 15:59:26'),
(355, 'App\\Models\\Customer', 1, 'Banaa', '42c7afcc67d098a04b00e018037677e855e3e37c7f5e5b1177e9a546ffdacffd', '[\"*\"]', '2023-02-20 18:21:57', '2023-02-20 11:24:31', '2023-02-20 18:21:57'),
(356, 'App\\Models\\Store', 2, 'Banaa', '8f1eed2092668b0c4a115d68d1b275be8ec4235680abc2f2cb1cbf3b862ef40d', '[\"*\"]', '2023-02-20 21:16:28', '2023-02-20 19:30:13', '2023-02-20 21:16:28'),
(357, 'App\\Models\\Customer', 1, 'Banaa', '79326f5de7b0be2400c0a4186bebea364227128145a1db13487bc38563c1487c', '[\"*\"]', '2023-02-20 21:16:42', '2023-02-20 21:16:41', '2023-02-20 21:16:42'),
(358, 'App\\Models\\Store', 2, 'Banaa', '24e6cd1a35ee9a4668f790110be7672dfe2fd4bf515e1fa64d951d9ded64a45b', '[\"*\"]', '2023-02-22 17:25:09', '2023-02-20 21:24:20', '2023-02-22 17:25:09'),
(359, 'App\\Models\\Customer', 2, 'Banaa', '8e5264e3ae411d21d79b30d863f20702764b102defb6cb593476143bf57a4d6e', '[\"*\"]', '2023-03-03 11:05:42', '2023-02-20 21:43:48', '2023-03-03 11:05:42'),
(360, 'App\\Models\\Store', 2, 'Banaa', 'f9723ed16c5760074f81b2475d02b67d194ded4b77551b4596af6b2993af2cdc', '[\"*\"]', '2023-02-21 19:00:51', '2023-02-21 19:00:40', '2023-02-21 19:00:51'),
(361, 'App\\Models\\Customer', 1, 'Banaa', 'efa0cc21c1f6300e378a44615c6ee09007afa9c77d2634d71db4effeacde361f', '[\"*\"]', '2023-02-21 19:01:44', '2023-02-21 19:01:09', '2023-02-21 19:01:44'),
(362, 'App\\Models\\Store', 1, 'Banaa', '59c3819945b013b49c336fd5ec3b3aeded84d1331236ea25a3d21ea241f9bf88', '[\"*\"]', '2023-02-22 22:35:27', '2023-02-22 15:59:41', '2023-02-22 22:35:27'),
(363, 'App\\Models\\Customer', 1, 'Banaa', 'f5ec97367e5be5ce8422de3f5100ae428f200de817118c2e829937bd4ab44c50', '[\"*\"]', '2023-04-01 14:27:48', '2023-02-22 17:25:27', '2023-04-01 14:27:48'),
(364, 'App\\Models\\Customer', 3, 'Banaa', '4145ca26262daa9e4589b91749e002a1b2a3542456d53a1d20fa52576d8d1ae0', '[\"*\"]', '2023-02-23 20:15:58', '2023-02-22 22:40:32', '2023-02-23 20:15:58'),
(365, 'App\\Models\\Customer', 1, 'Khaled Hadria', '145eaf2f4718fb433914571257c3910a28b21eb16c4937aeaf2cdd89a7aaaef4', '[\"*\"]', '2023-02-23 09:07:31', '2023-02-23 09:06:13', '2023-02-23 09:07:31'),
(366, 'App\\Models\\Customer', 1, 'Khaled Hadria', '68c23614605b5780ceabc007247b55f8586f5ab30d21a5ff37d0d0b78568fcae', '[\"*\"]', '2023-02-23 09:09:21', '2023-02-23 09:07:31', '2023-02-23 09:09:21'),
(367, 'App\\Models\\Customer', 4, 'Banaa', '879174a4fe95524ed0b7b9c1de85a9c3303863a8ea291e8469cfe0474f4c2433', '[\"*\"]', '2023-02-26 21:30:43', '2023-02-26 20:20:39', '2023-02-26 21:30:43'),
(368, 'App\\Models\\Store', 3, 'Banaa', '8d0012e151b348529e5f09f759b78ed7c962a6b80c9a2264af8dabb9e12725c4', '[\"*\"]', '2023-02-26 21:35:08', '2023-02-26 21:31:41', '2023-02-26 21:35:08'),
(369, 'App\\Models\\Customer', 4, 'Banaa', '3fd1a06ba4f6f7f5e06f98e0f7346308216976c1ab561d06d2c5a406053295c5', '[\"*\"]', '2023-02-26 21:38:05', '2023-02-26 21:35:20', '2023-02-26 21:38:05'),
(370, 'App\\Models\\Store', 3, 'Banaa', '2dad2ed3167480158397e13287081b8f6e648db1924307207a0c6c9121d66688', '[\"*\"]', '2023-02-26 21:39:14', '2023-02-26 21:38:22', '2023-02-26 21:39:14'),
(371, 'App\\Models\\Customer', 4, 'Banaa', 'f8f3e261545770fe5dc1fc46fbd37270d495d220343b72d5dad18cc7e8d4912f', '[\"*\"]', '2023-02-26 21:39:46', '2023-02-26 21:39:22', '2023-02-26 21:39:46'),
(372, 'App\\Models\\Store', 3, 'Banaa', 'b05adf7cc25f0267440ccc42b7819e8d8e63c8b137bce9418d85908d94ade155', '[\"*\"]', '2023-02-26 21:40:40', '2023-02-26 21:39:54', '2023-02-26 21:40:40'),
(373, 'App\\Models\\Customer', 4, 'Banaa', '2a3e136f986ebd8aa9f0f9b1237c3d7ee2b160352f2836657319b6d360b081c6', '[\"*\"]', '2023-02-26 21:42:05', '2023-02-26 21:41:04', '2023-02-26 21:42:05'),
(374, 'App\\Models\\Store', 3, 'Banaa', '11fe020b1e62fe7aacb5fb3a647ffb7481798ef55bbe3859c6ffa5d121b96b3e', '[\"*\"]', '2023-02-26 21:42:56', '2023-02-26 21:42:16', '2023-02-26 21:42:56'),
(375, 'App\\Models\\Customer', 4, 'Banaa', 'baf1cdf03312cbd4fecac6323259b935d64120e1c92758dfd9a2efb47f15ab92', '[\"*\"]', '2023-02-26 21:45:05', '2023-02-26 21:43:19', '2023-02-26 21:45:05'),
(376, 'App\\Models\\Store', 3, 'Banaa', '7552d7ea9cb39a2fb62533a670b18fa07c68de5cb14d6ad79d6422d3a3b4414f', '[\"*\"]', '2023-02-27 10:17:31', '2023-02-26 21:45:29', '2023-02-27 10:17:31'),
(377, 'App\\Models\\Customer', 4, 'Banaa', '1dc31ab409551e62f3b328797704d1aa5f27067bc5737cc27d91043c354dde63', '[\"*\"]', '2023-02-27 10:57:17', '2023-02-27 10:17:47', '2023-02-27 10:57:17'),
(378, 'App\\Models\\Customer', 3, 'Banaa', '7c0c5303d1371d60a674dceab7236a739d7f3ab69918c14d39fb45cb6d1f53cc', '[\"*\"]', '2023-02-27 10:57:35', '2023-02-27 10:57:30', '2023-02-27 10:57:35'),
(379, 'App\\Models\\Store', 3, 'Banaa', 'f28111ab09acb1178341a3131c6a8a5f31978423f18aa81b6336800b17e3ceb7', '[\"*\"]', '2023-02-28 13:53:01', '2023-02-27 10:57:43', '2023-02-28 13:53:01'),
(380, 'App\\Models\\Store', 3, 'Banaa', '6aeb4a770ec181df79bd79be2011bed60039c075c70d216d831892af0c6d0889', '[\"*\"]', '2023-03-04 11:36:54', '2023-02-28 14:12:11', '2023-03-04 11:36:54'),
(381, 'App\\Models\\Customer', 3, 'Banaa', 'ccb52aa205fef0bc6da2312f0da99a2c73947628efd5cf5760f5021fde2f943f', '[\"*\"]', NULL, '2023-02-28 15:01:32', '2023-02-28 15:01:32'),
(382, 'App\\Models\\Customer', 3, 'Banaa', '245e58b7768db9f390ca0449058b1ea2fcb8d226252ac0f64af0238e6c3db694', '[\"*\"]', '2023-02-28 15:01:48', '2023-02-28 15:01:32', '2023-02-28 15:01:48'),
(383, 'App\\Models\\Store', 3, 'Banaa', 'ca50207f3f265c9d1e30b43fea4a39adff471b384b913a6dfefe0c95fc584db8', '[\"*\"]', '2023-02-28 15:18:03', '2023-02-28 15:02:42', '2023-02-28 15:18:03'),
(384, 'App\\Models\\Store', 4, 'Banaa', '078f13be9f4b14d0ca0f81a3ec3568dd165f13cc8069983dd4705892c7f303e5', '[\"*\"]', '2023-03-04 14:18:49', '2023-03-04 11:35:22', '2023-03-04 14:18:49'),
(385, 'App\\Models\\Customer', 4, 'Banaa', 'e79f4753e78fa3fdf14e7b9bd3bac153a0a639ddf64b0ab491aa52d3d2596143', '[\"*\"]', '2023-03-04 14:35:27', '2023-03-04 11:37:48', '2023-03-04 14:35:27'),
(386, 'App\\Models\\Customer', 5, 'Banaa', '835b8489be3623863e6425e59859e7f4a6179df5bb8eeede008dd8026d5a7cc0', '[\"*\"]', '2023-03-05 11:24:43', '2023-03-04 14:19:03', '2023-03-05 11:24:43'),
(387, 'App\\Models\\Store', 3, 'Banaa', '85b8a099a52f6dd1512670e34573a605d392b873a4f21aa9a3542bda8c13beda', '[\"*\"]', '2023-03-04 20:27:58', '2023-03-04 14:36:06', '2023-03-04 20:27:58'),
(388, 'App\\Models\\Customer', 4, 'Banaa', '95b3dbe6bdc344eeaedb0e9228d48d0af3cea7b817088f013e617a345da6eefe', '[\"*\"]', '2023-03-04 21:12:38', '2023-03-04 20:28:15', '2023-03-04 21:12:38'),
(389, 'App\\Models\\Customer', 4, 'Banaa', '4b9fab0c560f13e8ecf95d639ff5a4a4d7df3364ebc4b6d0e74d94a77818e41e', '[\"*\"]', '2023-03-05 12:58:04', '2023-03-05 12:57:50', '2023-03-05 12:58:04'),
(390, 'App\\Models\\Customer', 6, 'Banaa', 'bdcb04471686b5112d4fe627b1b45f85e3001b4f86d9a7cb3ac5df6c240d20a6', '[\"*\"]', '2023-03-05 16:01:27', '2023-03-05 16:00:57', '2023-03-05 16:01:27'),
(391, 'App\\Models\\Customer', 6, 'Banaa', '15b9e5830b8fea65bae4b74046d67e208a58e17101644054aac9fa054c342010', '[\"*\"]', '2023-03-05 16:10:18', '2023-03-05 16:01:37', '2023-03-05 16:10:18'),
(392, 'App\\Models\\Customer', 3, 'Banaa', 'f7ce5043709d2baa74256d50abbea62c49bb43486b23536cb074ef7ee083662c', '[\"*\"]', '2023-03-05 16:12:22', '2023-03-05 16:10:45', '2023-03-05 16:12:22'),
(393, 'App\\Models\\Store', 3, 'Banaa', 'e09a3d2657997cddfbd62a4dfdd199591453ad06cdfa10e454d3b4372e1db561', '[\"*\"]', '2023-03-05 16:13:18', '2023-03-05 16:12:47', '2023-03-05 16:13:18'),
(394, 'App\\Models\\Store', 3, 'Banaa', 'f0c5fbda040495c4a37bcc43abce8092ef12c30f6176a45a000825927bcb71f9', '[\"*\"]', '2023-03-05 16:35:30', '2023-03-05 16:35:27', '2023-03-05 16:35:30'),
(395, 'App\\Models\\Customer', 3, 'Banaa', '7ec2e41891ccec6b0600d49ce857baaff651197cc6344daa01b00c7178ee96c9', '[\"*\"]', '2023-03-06 10:42:37', '2023-03-06 10:42:19', '2023-03-06 10:42:37'),
(396, 'App\\Models\\Customer', 6, 'Banaa', '814a02517a821a4b2416bcedac78a42f0063db164c651da9d0b1d6759a0e4659', '[\"*\"]', '2023-03-06 10:44:49', '2023-03-06 10:44:45', '2023-03-06 10:44:49'),
(397, 'App\\Models\\Store', 5, 'Banaa', '4a8ed2f5efc4a58e98b12617faed312ddfa02daf77126a0aeab534fce1efd9b6', '[\"*\"]', NULL, '2023-03-09 08:28:02', '2023-03-09 08:28:02'),
(398, 'App\\Models\\Store', 5, 'Banaa', '44146a27e7c9ff4dcde0083a96e91e7ae4ce77ceb69b5326682cd6b19834e331', '[\"*\"]', NULL, '2023-03-09 08:32:51', '2023-03-09 08:32:51'),
(399, 'App\\Models\\Customer', 4, 'Banaa', '5a3dead04623ac303b8adbf9741a8e225ecbcb69f87e501508cff29e2d65995f', '[\"*\"]', '2023-03-25 13:08:13', '2023-03-25 13:07:17', '2023-03-25 13:08:13'),
(400, 'App\\Models\\Store', 3, 'Banaa', '44220fa7ff3ccc729d39c9864c9b674092619f2d356b3cca935a7c57d024c445', '[\"*\"]', '2023-03-25 13:09:06', '2023-03-25 13:08:49', '2023-03-25 13:09:06'),
(401, 'App\\Models\\Customer', 7, 'Banaa', '5ade5503dac41c784ab5c32676e97c5c3815d6dd904c9dfa0486aede8c5ff502', '[\"*\"]', '2023-03-25 13:21:49', '2023-03-25 13:09:46', '2023-03-25 13:21:49'),
(402, 'App\\Models\\Customer', 8, 'Banaa', '9db770cb5084db6ae6192cf7eeb6a781cac355acaa77ebfd9f7aef33a9128281', '[\"*\"]', NULL, '2023-03-25 13:24:58', '2023-03-25 13:24:58'),
(403, 'App\\Models\\Customer', 4, 'Banaa', '9fda9cc16db6b4d453b5756d558325cca1beaf86cc9c668aed7ddf6ebaccfcde', '[\"*\"]', '2023-03-25 21:15:42', '2023-03-25 21:15:33', '2023-03-25 21:15:42'),
(404, 'App\\Models\\Customer', 4, 'Banaa', '19864fea57e12a188d772f49082c5f799a0b13b52e709b65d87ffc6cb8276217', '[\"*\"]', '2023-03-25 21:16:08', '2023-03-25 21:16:01', '2023-03-25 21:16:08'),
(405, 'App\\Models\\Customer', 9, 'Banaa', 'fe6788885aa0b2eb4b0f86397e441770acbd5742192d37f24c1fe00bf8c3e5a6', '[\"*\"]', '2023-05-12 03:44:53', '2023-03-27 18:00:21', '2023-05-12 03:44:53'),
(406, 'App\\Models\\Customer', 7, 'Banaa', '41b37166d70dc58ade7d28876bab2d12d788e15008ac97586832173d5457ac1e', '[\"*\"]', '2023-04-05 12:47:14', '2023-03-27 18:04:34', '2023-04-05 12:47:14'),
(407, 'App\\Models\\Customer', 10, 'Banaa', '2f21cbef179be38feaaecd223eb0c2b0c9a9e45cbcae29b931a4e65253911dbc', '[\"*\"]', '2023-04-27 23:35:34', '2023-03-29 11:17:55', '2023-04-27 23:35:34'),
(408, 'App\\Models\\Customer', 11, 'Banaa', '0eea694ecda34f160c069f945b05ed217f7451a52fb0c070d21e41376bf3b794', '[\"*\"]', '2023-05-16 11:13:50', '2023-03-29 15:07:17', '2023-05-16 11:13:50'),
(409, 'App\\Models\\Customer', 12, 'Banaa', '37c729823ddc30125c6dac2388acad460585e65dd4de0f71b2995bc3385e4746', '[\"*\"]', '2023-05-05 11:35:06', '2023-03-29 19:20:48', '2023-05-05 11:35:06'),
(410, 'App\\Models\\Customer', 13, 'Banaa', '7adcb544a0250878c1961ea234f5aea1bfbda2df47dff6bf7747e10b291d4da2', '[\"*\"]', '2023-03-29 21:48:18', '2023-03-29 21:45:04', '2023-03-29 21:48:18'),
(411, 'App\\Models\\Store', 6, 'Banaa', 'ff99c316019b1a8b45d9738cd97fbb73904371584f27092045bf35a6849c7f9d', '[\"*\"]', '2023-05-12 17:40:08', '2023-03-29 21:51:17', '2023-05-12 17:40:08'),
(412, 'App\\Models\\Customer', 2, 'Banaa', 'cf2996e5f2c818defe1926121ff6dfcf8412aaad482da5d02c00d748cb59126b', '[\"*\"]', '2023-05-14 23:30:03', '2023-04-02 18:52:04', '2023-05-14 23:30:03'),
(413, 'App\\Models\\Customer', 14, 'Banaa', 'f4cb8375fc1ed96804f623df966980477b3cd17d55e51bc57083917224a43688', '[\"*\"]', '2023-04-05 18:51:06', '2023-04-05 18:48:37', '2023-04-05 18:51:06'),
(414, 'App\\Models\\Store', 7, 'Banaa', 'f411528e154c6e645edbab854f0e1a961f28dcdb64b82e5d490cb63d76a7dc2e', '[\"*\"]', '2023-04-26 00:12:23', '2023-04-26 00:11:56', '2023-04-26 00:12:23'),
(415, 'App\\Models\\Customer', 15, 'Banaa', '711dd9339f85d021b6a4cf780b9269dd982bb38576f1513587491c868c6ca792', '[\"*\"]', '2023-04-26 00:13:30', '2023-04-26 00:12:40', '2023-04-26 00:13:30'),
(416, 'App\\Models\\Store', 3, 'Banaa', 'd99549f00fa7e359767c1c87f0b73153c2ff0870a7ec3f457b6ccd69fa999172', '[\"*\"]', '2023-04-26 00:14:18', '2023-04-26 00:14:16', '2023-04-26 00:14:18'),
(417, 'App\\Models\\Customer', 16, 'Banaa', '8bde0b81fffc7c1595492dbedd1c06a6dfa3980b18883fa149daa2840befdf6b', '[\"*\"]', '2023-04-26 09:41:50', '2023-04-26 00:29:22', '2023-04-26 09:41:50'),
(418, 'App\\Models\\Store', 3, 'Banaa', '4e48a5241b06090788676158a0a9e187e709a5288c9b27d38a2d1e2f85ea188c', '[\"*\"]', '2023-05-09 14:33:41', '2023-05-09 14:33:09', '2023-05-09 14:33:41'),
(419, 'App\\Models\\Store', 7, 'Banaa', '6241b871d8e22653b16de6f4bde064edd0658855bc184257a158a6e42ad01360', '[\"*\"]', '2023-05-09 14:34:55', '2023-05-09 14:34:27', '2023-05-09 14:34:55'),
(420, 'App\\Models\\Customer', 17, 'Omran', '3ec2e068c7cfb233b72d70230a639a2036f87975c0d79192c8eb75649784deb2', '[\"*\"]', NULL, '2023-05-13 15:23:26', '2023-05-13 15:23:26'),
(421, 'App\\Models\\Customer', 17, 'Omran', '2ae2e6037e81f36695364084189171faf92d1a83123a8f8edd3525457a3d91f7', '[\"*\"]', NULL, '2023-05-13 15:24:43', '2023-05-13 15:24:43'),
(422, 'App\\Models\\Customer', 6, 'Omran', '0b238bf3a4718911364bc5fc4eab1d848ee69f28a91d3c542ac4fc4fdf15fcce', '[\"*\"]', '2023-05-13 15:31:05', '2023-05-13 15:30:42', '2023-05-13 15:31:05'),
(423, 'App\\Models\\Customer', 18, 'Omran', 'de230af49350b119e58b4c3d073b2ef70ba6e2bcb1a9662f98a6f5b30a7ff537', '[\"*\"]', NULL, '2023-05-13 15:31:43', '2023-05-13 15:31:43'),
(424, 'App\\Models\\Customer', 18, 'Omran', '1f2f246736c3e1415718f111be583a796bfc3952eac0b02d76f6fca30d7b908b', '[\"*\"]', NULL, '2023-05-13 15:31:54', '2023-05-13 15:31:54'),
(425, 'App\\Models\\Customer', 18, 'Omran', '41e1000446f425a76867d5266648317325b91137a22380a7482ce9961fd07bcc', '[\"*\"]', NULL, '2023-05-13 15:31:57', '2023-05-13 15:31:57'),
(426, 'App\\Models\\Customer', 18, 'Omran', '2ba855ee54a9a8410c48bae0460fd81c85435957e8bde44647decee162f3df83', '[\"*\"]', NULL, '2023-05-13 15:33:00', '2023-05-13 15:33:00'),
(427, 'App\\Models\\Customer', 18, 'Omran', 'bf36d16f6b0c069ca7a537be7c49f2449af48a2066dfe357e1fafc0163a09c0f', '[\"*\"]', NULL, '2023-05-13 15:33:11', '2023-05-13 15:33:11'),
(428, 'App\\Models\\Customer', 18, 'Omran', '4535f7f5bd39d6e50f5a338326f6dd7a9ee09e5d05c06c9ef12612b37b7ec5e8', '[\"*\"]', NULL, '2023-05-13 15:35:41', '2023-05-13 15:35:41'),
(429, 'App\\Models\\Customer', 18, 'Omran', '79b677d63a72a9bcadcf59877ea61a0b1621ef7e2a78a2d9cbe9505b5eded5c4', '[\"*\"]', NULL, '2023-05-13 15:38:06', '2023-05-13 15:38:06'),
(430, 'App\\Models\\Customer', 18, 'Omran', 'a202865940e8d210b191a1aae2303b42da13dba1eb5dabd284e0ed5abf1848a2', '[\"*\"]', '2023-05-13 16:15:39', '2023-05-13 15:41:28', '2023-05-13 16:15:39'),
(431, 'App\\Models\\Customer', 18, 'Omran', 'a796200a6ed97bfff1be9d9f3677b3595d262361339e116fae7662f1c4fb949f', '[\"*\"]', '2023-05-13 16:19:10', '2023-05-13 16:17:23', '2023-05-13 16:19:10'),
(432, 'App\\Models\\Store', 8, 'Omran', 'f002fb993f36abca133125e76d16cf3656323350034a33c7700da88f9effc4f2', '[\"*\"]', '2023-05-13 16:20:57', '2023-05-13 16:19:27', '2023-05-13 16:20:57'),
(433, 'App\\Models\\Store', 9, 'Omran', '6e6414ae2d82f01018efb0f435300f50b9672c13b0a0388e4b7efaf3ab1e9f34', '[\"*\"]', '2023-05-13 16:36:19', '2023-05-13 16:21:27', '2023-05-13 16:36:19'),
(434, 'App\\Models\\Customer', 17, 'Omran', '673e8bcd456cb4601dc9cccbaa96bb598ad1bdf2964b1d3f2ebb3f47b40adefd', '[\"*\"]', NULL, '2023-05-13 16:35:59', '2023-05-13 16:35:59'),
(435, 'App\\Models\\Store', 9, 'Omran', 'bc594fa981286b1687aca18ed00a8a182da653664674222235c3c69335b1d087', '[\"*\"]', '2023-05-13 16:36:52', '2023-05-13 16:36:38', '2023-05-13 16:36:52'),
(436, 'App\\Models\\Store', 9, 'Omran', '463ef1ac4d1242045f24bd65d768bee73b18f9af9133df69c82efeb9078c99d6', '[\"*\"]', '2023-05-13 16:38:25', '2023-05-13 16:38:17', '2023-05-13 16:38:25'),
(437, 'App\\Models\\Store', 9, 'Omran', '6d81373ed9825f1c02532121104099da5ff0c18cd2d527365194103038454fe0', '[\"*\"]', '2023-05-13 16:49:46', '2023-05-13 16:49:42', '2023-05-13 16:49:46'),
(438, 'App\\Models\\Customer', 19, 'Omran', '85ab7d3032e86631a6e5c01e7c120e68ef64ee1e50cff4ef3aaecc59f2cedc36', '[\"*\"]', '2023-05-13 22:42:15', '2023-05-13 22:04:27', '2023-05-13 22:42:15'),
(439, 'App\\Models\\Store', 9, 'Omran', '874254c0aa4031c831e6613ab02f31f98e94c39ffd80fb0ddc6d85f128e194bb', '[\"*\"]', '2023-05-13 22:37:44', '2023-05-13 22:21:05', '2023-05-13 22:37:44'),
(440, 'App\\Models\\Store', 9, 'Omran', 'a3c48be0ddc6080767c39ab962ab2cfbc77154351d311cebf1ae1daf0b5efa5d', '[\"*\"]', '2023-05-13 22:44:49', '2023-05-13 22:38:37', '2023-05-13 22:44:49'),
(441, 'App\\Models\\Customer', 19, 'Omran', '27d9bdcb387add19531e555d443bc418d5771d1b6be95cbd7fa797b4d55029c9', '[\"*\"]', '2023-05-16 03:43:18', '2023-05-13 22:43:48', '2023-05-16 03:43:18'),
(442, 'App\\Models\\Customer', 18, 'Omran', 'bdc6fcd53e85db47244f3014a68c4ca81b8dfddf478e1eb2ab1b1b9dc14bc04c', '[\"*\"]', '2023-05-13 22:58:23', '2023-05-13 22:45:10', '2023-05-13 22:58:23'),
(443, 'App\\Models\\Store', 10, 'Omran', '667e40b4ea13fd6910eff2ecce1bca0b5da7a6837fdeb62aafc813cb6523c8ed', '[\"*\"]', '2023-05-13 22:53:04', '2023-05-13 22:52:43', '2023-05-13 22:53:04'),
(444, 'App\\Models\\Customer', 20, 'Omran', '0384d7caf3969c541d8e5d5d737eedef9377da474d235ede9f35f8a3d3f5fefc', '[\"*\"]', '2023-05-13 22:53:42', '2023-05-13 22:53:18', '2023-05-13 22:53:42'),
(445, 'App\\Models\\Store', 9, 'Omran', '6f3861623111138656fc33ac9c23a3a4680f2bf56d9c70737cc3c7643fe0f354', '[\"*\"]', '2023-05-14 11:19:07', '2023-05-14 11:18:41', '2023-05-14 11:19:07'),
(446, 'App\\Models\\Store', 11, 'Omran', 'ae60996d583c128845f74655893560a55b082a1655014825005dd1aa9d75ab8e', '[\"*\"]', '2023-05-16 14:14:46', '2023-05-14 15:34:43', '2023-05-16 14:14:46'),
(447, 'App\\Models\\Customer', 21, 'Omran', '057e0457a68320abdf2c0858c17d51fa239832393b25c5d46c4d631b4cb8b036', '[\"*\"]', '2023-05-16 11:04:05', '2023-05-16 10:57:07', '2023-05-16 11:04:05'),
(448, 'App\\Models\\Customer', 21, 'Omran', '6f5fe96df64673b209db6cecf41d106d8706140387ee2b0422903fd6700da124', '[\"*\"]', NULL, '2023-05-16 12:34:19', '2023-05-16 12:34:19'),
(449, 'App\\Models\\Customer', 21, 'Omran', 'bbe55fc97a5ae105007fcd95257efa3d31df35c7306c4b420d2ce7daefae2f4d', '[\"*\"]', NULL, '2023-05-16 12:34:38', '2023-05-16 12:34:38'),
(450, 'App\\Models\\Customer', 21, 'Omran', 'ddc028e68ad5b28a0e0d085bd049c444233f861a63799521b9ff4f9d1cd94b0c', '[\"*\"]', NULL, '2023-05-16 12:35:11', '2023-05-16 12:35:11'),
(451, 'App\\Models\\Customer', 21, 'Omran', '41e4a06ea9da78c4d90b5c25f95ec4228f82b7f6286c92b9af36a98336645f08', '[\"*\"]', NULL, '2023-05-16 12:35:39', '2023-05-16 12:35:39'),
(452, 'App\\Models\\Customer', 21, 'Omran', 'e08dc59b751faeb639100dc55091b0e0fa12286c448109b01575c066e91f4fb2', '[\"*\"]', NULL, '2023-05-16 12:48:40', '2023-05-16 12:48:40'),
(453, 'App\\Models\\Customer', 21, 'Omran', '2d35dc51a5072568b65abdcb4f0c89daf1ea94aec298c9be00f1cf5bf9a9b128', '[\"*\"]', NULL, '2023-05-16 12:48:56', '2023-05-16 12:48:56'),
(454, 'App\\Models\\Customer', 21, 'Omran', '28c628ddc62c4f8c8177d30a4a80072c74c5a220e69b38962c08ca449c39024d', '[\"*\"]', NULL, '2023-05-16 12:50:37', '2023-05-16 12:50:37'),
(455, 'App\\Models\\Customer', 21, 'Omran', '5b063cbb7052456309bd06858885a2612d95af6001bce6a68f1087d35c9ff8a0', '[\"*\"]', NULL, '2023-05-16 12:51:29', '2023-05-16 12:51:29'),
(456, 'App\\Models\\Customer', 21, 'Omran', 'f582d61a375ba95016f34da64c0cf019f0c0724c0e3e06dca01879daa5194050', '[\"*\"]', NULL, '2023-05-16 12:53:08', '2023-05-16 12:53:08'),
(457, 'App\\Models\\Customer', 21, 'Omran', '8ce9f4db3642cc1d042cfa2f81399116b930eda38c838a3bec4e397f12c12a7c', '[\"*\"]', NULL, '2023-05-16 12:55:47', '2023-05-16 12:55:47'),
(458, 'App\\Models\\Customer', 21, 'Omran', '877133299874bb37a9d2b6a0ba70888a61e3f2ca23629956f8ef92bd3d4c19f0', '[\"*\"]', NULL, '2023-05-16 12:58:06', '2023-05-16 12:58:06'),
(459, 'App\\Models\\Customer', 21, 'Omran', 'fbe0131f5f01c06e3bce04d534c3a4e571f620dad4b184ce4fd1c2e8f700b330', '[\"*\"]', NULL, '2023-05-16 12:59:12', '2023-05-16 12:59:12'),
(460, 'App\\Models\\Customer', 21, 'Omran', 'bfff9f6237089be3471131ebfc6bb0d37b0e3277b0fe01add70c626cee68c4a3', '[\"*\"]', NULL, '2023-05-16 13:01:18', '2023-05-16 13:01:18'),
(461, 'App\\Models\\Customer', 21, 'Omran', '36e3b44f02549e87e74ddd5a30c2eca01be5df433e66f2564542af1a8d9455a8', '[\"*\"]', NULL, '2023-05-16 13:04:13', '2023-05-16 13:04:13'),
(462, 'App\\Models\\Customer', 21, 'Omran', 'ef1ef4481492ec3fa590af22d250c6a32fe46fd39cd6af9ae8b5027dd3a0b14f', '[\"*\"]', NULL, '2023-05-16 13:11:30', '2023-05-16 13:11:30'),
(463, 'App\\Models\\Customer', 21, 'Omran', '44bf9ce5fb6162fd5d5ea8cfa5d7c2b5ef6e0158232c299b7dd4fce2795a0696', '[\"*\"]', NULL, '2023-05-16 13:18:25', '2023-05-16 13:18:25'),
(464, 'App\\Models\\Customer', 21, 'Omran', '8c5a6422b47c43525b08a2718eb4e1c14d3a6195f0814e62419f25cb9c37d3e2', '[\"*\"]', NULL, '2023-05-16 14:12:52', '2023-05-16 14:12:52'),
(465, 'App\\Models\\Store', 12, 'Omran', '59d4c8d91da195085ad4ad9e2b1b56dd209a9f983a7ac72ccc7b834229c06736', '[\"*\"]', NULL, '2023-05-16 14:25:44', '2023-05-16 14:25:44'),
(466, 'App\\Models\\Store', 12, 'Omran', '1f6ac9314b88e8ca15874815dd6ae198b2bf4bffe57cb1cd0264c799f7f16e48', '[\"*\"]', NULL, '2023-05-16 15:09:32', '2023-05-16 15:09:32'),
(467, 'App\\Models\\Store', 12, 'Omran', '9d70a74aaf5125e0a8cbb2cc592cf6a7a9bff61a622181a2bb4e8f74b5fc326a', '[\"*\"]', NULL, '2023-05-16 15:11:30', '2023-05-16 15:11:30'),
(468, 'App\\Models\\Store', 12, 'Omran', '92e4e9b3a130cc726ce4fe27f655c63c9bfd275a0fd9600709c975c37dc971d5', '[\"*\"]', NULL, '2023-05-16 15:16:38', '2023-05-16 15:16:38'),
(469, 'App\\Models\\Customer', 22, 'Omran', '45b8b1b02772bcdf7dd2234c41ca2d9885b6fdf3ef489cec4e413b5eec8abcc4', '[\"*\"]', NULL, '2023-05-16 16:03:59', '2023-05-16 16:03:59'),
(470, 'App\\Models\\Store', 12, 'Omran', '619b4a55a251602d75af26d6ec13cea9dd1e625a8c5174e5035d0a6896f7318f', '[\"*\"]', NULL, '2023-05-17 13:40:34', '2023-05-17 13:40:34'),
(471, 'App\\Models\\Store', 12, 'Omran', 'c07472b1fc24c69b43364d7ab9efa7d9b02d9f4c90fcc3c948c46871b380eef3', '[\"*\"]', NULL, '2023-05-17 13:46:46', '2023-05-17 13:46:46'),
(472, 'App\\Models\\Store', 12, 'Omran', 'b2097e3fe000c515a8c0baa44c51e1126d1f48537466c49cc97b40ba5a7fe159', '[\"*\"]', NULL, '2023-05-17 13:48:44', '2023-05-17 13:48:44'),
(473, 'App\\Models\\Store', 12, 'Omran', 'b8dade64d7c7d932700fe72254e7e5af15d130cd03056639b7d37eadb3d38519', '[\"*\"]', '2023-05-17 13:55:04', '2023-05-17 13:51:51', '2023-05-17 13:55:04'),
(474, 'App\\Models\\Store', 12, 'Omran', 'b4fe6feea85eb907525f0ed8a0cb0fc11ddb0b92b8116ed8effa00258dceca22', '[\"*\"]', '2023-05-17 13:58:04', '2023-05-17 13:56:32', '2023-05-17 13:58:04'),
(475, 'App\\Models\\Store', 13, 'Omran', '517d05ab51d354c256d61ac09e1847bf3055981d2d6d0ac6be9180432a0c00c4', '[\"*\"]', '2023-05-17 14:16:35', '2023-05-17 14:05:56', '2023-05-17 14:16:35'),
(476, 'App\\Models\\Store', 13, 'Omran', '0be1b328aaf73243f53bde826f91c052186d065de7c5838bf44ae5a9a82aada9', '[\"*\"]', '2023-05-17 14:17:06', '2023-05-17 14:16:35', '2023-05-17 14:17:06'),
(477, 'App\\Models\\Store', 13, 'Omran', '73ede1e02bfdc5cae3a12be0302d4b4d37870e45172b109e7b3022c3676c9ca3', '[\"*\"]', '2023-05-17 14:19:04', '2023-05-17 14:18:00', '2023-05-17 14:19:04'),
(478, 'App\\Models\\Store', 13, 'Omran', '1d55d012ed55db33c3ec67279bdd14a8fdac24d5bb71a66261b2334215f9a29c', '[\"*\"]', '2023-05-17 14:53:55', '2023-05-17 14:50:53', '2023-05-17 14:53:55'),
(479, 'App\\Models\\Customer', 23, 'Omran', '9be8ddc877a323ead22b3f790bf8e777fecf9e398c23c441433e50ffaa7e435d', '[\"*\"]', '2023-05-17 17:39:24', '2023-05-17 17:39:23', '2023-05-17 17:39:24'),
(480, 'App\\Models\\Customer', 24, 'Omran', '7354938f8f20fc370acadcdca92ba266309b751f4f19639f777f772c673a495a', '[\"*\"]', '2023-05-17 17:52:23', '2023-05-17 17:51:50', '2023-05-17 17:52:23'),
(481, 'App\\Models\\Customer', 24, 'Omran', 'b45a6bf51f81c4de9cffbb6981f38652b58ba8729cd6b0ad3cea30c96d932771', '[\"*\"]', '2023-05-17 17:54:51', '2023-05-17 17:52:23', '2023-05-17 17:54:51'),
(482, 'App\\Models\\Customer', 24, 'Omran', 'a0ac1da1241496449a786f6acad8a17630ca2303d97c4b0f25879d6466bea747', '[\"*\"]', '2023-05-17 18:12:57', '2023-05-17 18:01:48', '2023-05-17 18:12:57'),
(483, 'App\\Models\\Store', 13, 'Omran', '78ec22ce9539d19c5786c9b3621318aa143fc3ec9200a6794951621ed0557ef1', '[\"*\"]', '2023-05-18 10:47:39', '2023-05-18 10:45:02', '2023-05-18 10:47:39'),
(484, 'App\\Models\\Customer', 25, 'Omran', '25ffc5f7d112f9c57c1c2a70fd072ea5ee50ad2a78866faceea64ace02ca88ff', '[\"*\"]', '2023-05-18 10:49:11', '2023-05-18 10:48:45', '2023-05-18 10:49:11'),
(485, 'App\\Models\\Customer', 25, 'Omran', '208130d1ae44b9d385510c12b33f43c258797af97ac39c085535b39ca3b40526', '[\"*\"]', '2023-05-18 13:42:10', '2023-05-18 10:49:11', '2023-05-18 13:42:10'),
(486, 'App\\Models\\Store', 12, 'Omran', '711f8feed894a99684049c0790d545521d5c23ca4b1205bd525c049b88ad3333', '[\"*\"]', '2023-05-18 13:44:31', '2023-05-18 13:42:37', '2023-05-18 13:44:31'),
(487, 'App\\Models\\Customer', 25, 'Omran', 'd691cfe4702b27c8c399f004d1192ccca95a4c5213c3f07649667fe2127c805c', '[\"*\"]', '2023-05-20 15:03:06', '2023-05-18 13:50:54', '2023-05-20 15:03:06'),
(488, 'App\\Models\\Store', 13, 'Omran', '648f296cc88c9bdfe35262b6c6c8e249d1cd0e4d5ebadcf8b7a909bc92a353e8', '[\"*\"]', '2023-05-18 13:55:48', '2023-05-18 13:55:47', '2023-05-18 13:55:48'),
(489, 'App\\Models\\Customer', 26, 'Omran', '0a33aca2a617daa1737efc1817477ffe98652eae7fadcea7f85670de8f5d38c0', '[\"*\"]', '2023-05-18 14:31:22', '2023-05-18 14:30:44', '2023-05-18 14:31:22'),
(490, 'App\\Models\\Customer', 26, 'Omran', '03b1ebaee6188b095e696a376d15f17334244c2eece31d8123e70b114d55dabd', '[\"*\"]', '2023-07-08 14:07:11', '2023-05-18 14:31:22', '2023-07-08 14:07:11'),
(491, 'App\\Models\\Customer', 24, 'Omran', '35a2febb1f0be41d154a76f48bdf511d342f3627e97b9b980c2c81779be3d458', '[\"*\"]', '2023-05-19 23:01:19', '2023-05-18 15:17:07', '2023-05-19 23:01:19'),
(492, 'App\\Models\\Customer', 27, 'Omran', '08ae79f6ff95e585449dcb9381a46116a041e988e06f40f0f022b73e917640c0', '[\"*\"]', '2023-05-19 07:49:43', '2023-05-19 07:49:43', '2023-05-19 07:49:43'),
(493, 'App\\Models\\Store', 12, 'Omran', '7c90664d4345bdf0ae0ab5ea98a9627b00a1aa37b3f7882889a8eac1b04492f9', '[\"*\"]', '2023-05-20 11:23:46', '2023-05-20 11:23:41', '2023-05-20 11:23:46'),
(494, 'App\\Models\\Customer', 25, 'Omran', '5c8af8c31a139775af06ef6b23d43f03ddd87b525b5a8f4d4c753b46ffa74060', '[\"*\"]', '2023-05-20 13:38:48', '2023-05-20 11:24:16', '2023-05-20 13:38:48'),
(495, 'App\\Models\\Store', 15, 'Omran', '490d1845cfbf1c4df76c81eb555a16d4b231d60ecd87dacced405aeeca8e5392', '[\"*\"]', '2023-05-20 13:23:31', '2023-05-20 13:23:30', '2023-05-20 13:23:31'),
(496, 'App\\Models\\Store', 15, 'Omran', '4d5cc8a1cd9fa9d649ec7675800f34e2bbcdf5f091d3ef58c1d95d3aa1f0e4a4', '[\"*\"]', '2023-05-20 13:25:12', '2023-05-20 13:24:21', '2023-05-20 13:25:12'),
(497, 'App\\Models\\Store', 15, 'Omran', 'df0a4ab43ffd8951995b58d09cb85678bbf8ef8bef6281d309adc3e2e6a88f3b', '[\"*\"]', '2023-06-07 20:53:20', '2023-05-20 13:25:12', '2023-06-07 20:53:20'),
(498, 'App\\Models\\Store', 12, 'Omran', 'e93ec922ba70d0c6ae73f85d87168f580a028c0568f7acdc5759d9850ff6e756', '[\"*\"]', '2023-05-20 13:40:28', '2023-05-20 13:39:02', '2023-05-20 13:40:28'),
(499, 'App\\Models\\Customer', 28, 'Omran', 'd0ec6194a81cdcc314aef54a9791cd55014d0ddb4fc5c72379b00ff5167c484d', '[\"*\"]', '2023-05-22 10:33:19', '2023-05-22 10:32:51', '2023-05-22 10:33:19'),
(500, 'App\\Models\\Customer', 28, 'Omran', 'b06c5eed2d729c778b3db1efb4af686d9d286b45c317beb68c7f6448a534909b', '[\"*\"]', '2023-06-19 20:52:05', '2023-05-22 10:33:19', '2023-06-19 20:52:05'),
(501, 'App\\Models\\Store', 16, 'Omran', '9c7007013c3dc6810ee14ced46f60771180c271794cb5b2bd3402fad2b4b84a1', '[\"*\"]', '2023-05-25 18:16:10', '2023-05-25 18:15:50', '2023-05-25 18:16:10'),
(502, 'App\\Models\\Store', 16, 'Omran', 'a876994d01e858fcab1027b4f75e48cf075ae06a6f655be8c9a3b14995ebd405', '[\"*\"]', '2023-05-25 18:18:19', '2023-05-25 18:16:10', '2023-05-25 18:18:19'),
(503, 'App\\Models\\Customer', 30, 'Omran', '7012a147fa4c43f95c6db504df6e5212ae44b790ecc37e51278f99a425df590c', '[\"*\"]', '2023-06-08 09:29:59', '2023-06-08 09:29:58', '2023-06-08 09:29:59'),
(504, 'App\\Models\\Customer', 31, 'Omran', 'b2e122d887399270fa99f1a6700ef043effb9e524cd46f0114e8feb2e8b41169', '[\"*\"]', '2023-06-10 19:58:24', '2023-06-10 19:54:59', '2023-06-10 19:58:24'),
(505, 'App\\Models\\Customer', 31, 'Omran', '98258af8c11f399535a96ee54cffb841d54bb7795b469d76edcc3b6e47ea33c3', '[\"*\"]', '2023-06-19 21:02:19', '2023-06-10 19:58:24', '2023-06-19 21:02:19'),
(506, 'App\\Models\\Store', 17, 'Omran', '87166187fdb4f068340cc7440db91c7d81162f75d121ec51263d60ea799a1d3e', '[\"*\"]', '2023-06-16 13:52:01', '2023-06-16 13:51:29', '2023-06-16 13:52:01'),
(507, 'App\\Models\\Store', 17, 'Omran', 'd22090647dd1c1d72228725182dd3199612b070e72abd0c5a78b50d1f508d1bf', '[\"*\"]', '2023-06-17 13:29:29', '2023-06-16 13:52:01', '2023-06-17 13:29:29'),
(508, 'App\\Models\\Store', 18, 'Omran', '99934eea7fdca21eb298151540c4f4a77a882d5c678352f8a85ac9cf5dedce49', '[\"*\"]', '2023-06-19 21:01:07', '2023-06-19 21:00:42', '2023-06-19 21:01:07'),
(509, 'App\\Models\\Store', 18, 'Omran', '413db2b38f86239844835ad09267145a104031b90cd8d75e96dd8abd1da1c077', '[\"*\"]', '2023-06-22 19:35:59', '2023-06-19 21:01:07', '2023-06-22 19:35:59'),
(510, 'App\\Models\\Store', 18, 'Omran', 'd738037f6bf07905df350cffaa3e94be84c2caf0810787a36d53cd9b44e3f5d0', '[\"*\"]', '2023-06-25 14:41:29', '2023-06-19 21:02:38', '2023-06-25 14:41:29'),
(511, 'App\\Models\\Customer', 32, 'Omran', 'ac46a7e60259f4463b5d9906d1f72472a4adbd7c14fdabae030f397c8c3405ce', '[\"*\"]', '2023-06-21 10:02:04', '2023-06-21 10:01:19', '2023-06-21 10:02:04'),
(512, 'App\\Models\\Customer', 32, 'Omran', '7b7da171618a2e0591e77d6d23ad85ab32ebce7b4f8e18bfae89a1be9dbfe3ad', '[\"*\"]', '2023-06-21 10:03:52', '2023-06-21 10:02:04', '2023-06-21 10:03:52'),
(513, 'App\\Models\\Customer', 33, 'Omran', '2aeca3db99fe42270476dcf536a8f57d560b79399c13b6ea067394c10ac589fd', '[\"*\"]', '2023-06-22 22:50:28', '2023-06-22 22:50:28', '2023-06-22 22:50:28'),
(514, 'App\\Models\\Customer', 34, 'Omran', '3452b92f651f4c193885edc21332f49b3f999cc1fdaa615d307e2ad6db39b54b', '[\"*\"]', '2023-06-23 06:55:01', '2023-06-23 06:55:01', '2023-06-23 06:55:01'),
(515, 'App\\Models\\Customer', 36, 'Omran', 'b3d5138e126a3f9fbe5239cb89513a35292a532cc8ea94b860f158a6f3c59e39', '[\"*\"]', '2023-06-23 10:36:10', '2023-06-23 10:31:56', '2023-06-23 10:36:10'),
(516, 'App\\Models\\Customer', 36, 'Omran', '2ff11e0887a442719a21c1cce2c864b168f140f9a601664cfdd7eb1b36897472', '[\"*\"]', '2023-06-23 10:39:56', '2023-06-23 10:36:10', '2023-06-23 10:39:56'),
(517, 'App\\Models\\Store', 19, 'Omran', '52836d3c573f5213b6acbaf1ba5e307da76fa7b92e121f068d66c391a073efe3', '[\"*\"]', '2023-06-24 05:19:48', '2023-06-24 05:19:24', '2023-06-24 05:19:48'),
(518, 'App\\Models\\Store', 19, 'Omran', 'b2f1fca74f6e67c4e930483c4672e91173819b068dc13239610b440bae69708d', '[\"*\"]', '2023-06-24 05:22:12', '2023-06-24 05:19:48', '2023-06-24 05:22:12'),
(519, 'App\\Models\\Store', 19, 'Omran', 'b0af62105b8c6536a3d391d455454b0b3d046681ac6868e70406ca88af127efd', '[\"*\"]', '2023-06-24 05:24:04', '2023-06-24 05:23:20', '2023-06-24 05:24:04'),
(520, 'App\\Models\\Customer', 37, 'Omran', 'c0fcead403faee14854d459eaa30d34fbbcb2c6e916de60455a9d7634638aaae', '[\"*\"]', '2023-06-24 05:25:05', '2023-06-24 05:24:46', '2023-06-24 05:25:05'),
(521, 'App\\Models\\Customer', 37, 'Omran', 'a14703101811fa326c77a8e4ba13c526168a855451559139a3304dc2dab21200', '[\"*\"]', '2023-06-24 05:27:19', '2023-06-24 05:25:05', '2023-06-24 05:27:19'),
(522, 'App\\Models\\Customer', 38, 'Omran', '408c83481f29d8d926e65b0509e6d7289f12759c152a9b77b71beff2b4f70e22', '[\"*\"]', '2023-06-24 11:53:41', '2023-06-24 11:53:10', '2023-06-24 11:53:41'),
(523, 'App\\Models\\Customer', 38, 'Omran', '037faa7eb3a8b3bc2bb3aeea7bf72cda53d8886d4059b593090087debd6cac64', '[\"*\"]', '2023-07-04 12:31:01', '2023-06-24 11:53:41', '2023-07-04 12:31:01'),
(524, 'App\\Models\\Store', 18, 'Omran', '06c0c6e4cf79956326cc1718748e81dcbcdc6597ac024ebb51c2ea2b380fa053', '[\"*\"]', '2023-06-25 14:45:31', '2023-06-25 14:45:13', '2023-06-25 14:45:31'),
(525, 'App\\Models\\Customer', 39, 'Omran', 'c60ddc85813716a8bab06d1052c37af33b198b6e89d29691289e81ee0e790b56', '[\"*\"]', '2023-06-25 14:47:59', '2023-06-25 14:47:09', '2023-06-25 14:47:59'),
(526, 'App\\Models\\Customer', 39, 'Omran', '276aaf21f932c9d719bc33ea287390c017c5534c60e864a89811a305315b70d9', '[\"*\"]', '2023-07-01 08:46:22', '2023-06-25 14:47:59', '2023-07-01 08:46:22'),
(527, 'App\\Models\\Customer', 40, 'Omran', '9c70c4b42f93d8dab6ed17915ea2f564e3ce0449d8cd38da6a43260508ae0300', '[\"*\"]', '2023-06-26 01:03:12', '2023-06-26 01:02:37', '2023-06-26 01:03:12'),
(528, 'App\\Models\\Customer', 40, 'Omran', 'ac2087e22ed37a613852ac829ad6d20a15b99405dc8445bf366a9718fe759c4b', '[\"*\"]', '2023-06-26 01:04:45', '2023-06-26 01:04:45', '2023-06-26 01:04:45'),
(529, 'App\\Models\\Customer', 41, 'Omran', '2debba63e90ab5693680c7b949b7c3c05f76f2a1092c476ec40888df88ef3f15', '[\"*\"]', '2023-06-26 06:33:43', '2023-06-26 06:32:58', '2023-06-26 06:33:43'),
(530, 'App\\Models\\Customer', 41, 'Omran', 'e421f01e2008bb85108ce8c3ed416b091bff0aefd875e15124dca02aa98975b3', '[\"*\"]', '2023-06-26 06:35:21', '2023-06-26 06:33:43', '2023-06-26 06:35:21'),
(531, 'App\\Models\\Customer', 42, 'Omran', '2314c6aa918e7ee69ffb36b46e29ec34e677fd9f22e3854ffce4e6c2806a5617', '[\"*\"]', '2023-06-26 06:55:29', '2023-06-26 06:54:26', '2023-06-26 06:55:29'),
(532, 'App\\Models\\Customer', 42, 'Omran', '0f533c884b1d4b2b8cd663a3b31170a6ceda8537f7a8d1006e40cfd094dfca04', '[\"*\"]', '2023-06-27 06:55:06', '2023-06-26 06:55:29', '2023-06-27 06:55:06'),
(533, 'App\\Models\\Customer', 43, 'Omran', '296da9eeb740b7117eadcd128d60831ec129156112a764a9df6be8d9ffa529e8', '[\"*\"]', '2023-06-26 09:19:25', '2023-06-26 09:19:01', '2023-06-26 09:19:25'),
(534, 'App\\Models\\Customer', 43, 'Omran', '35bf4cf617c44f2f905b38f2029e09fd591340e4318bee0e27fd6c08eba7ec30', '[\"*\"]', '2023-06-26 09:22:39', '2023-06-26 09:19:25', '2023-06-26 09:22:39'),
(535, 'App\\Models\\Customer', 44, 'Omran', '01d8d7ad4be4c8c6f1b008e26cb23450278ab746a7534e48ee105a4c2ec0b44f', '[\"*\"]', '2023-06-26 10:45:30', '2023-06-26 10:44:58', '2023-06-26 10:45:30'),
(536, 'App\\Models\\Customer', 44, 'Omran', 'd7bfd807a2780a27d7ca24e09fdefeefcdb365ffcb308f71ac99f7d9cb1c69a7', '[\"*\"]', '2023-06-26 10:49:59', '2023-06-26 10:45:30', '2023-06-26 10:49:59');
INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(537, 'App\\Models\\Store', 20, 'Omran', '9a8b2a89886a8f8cd7f05fd990fd7bd8c19f65927ff88ffd78f6328e6bc6badf', '[\"*\"]', '2023-06-26 21:17:59', '2023-06-26 21:17:40', '2023-06-26 21:17:59'),
(538, 'App\\Models\\Store', 20, 'Omran', '6b407fc2669f87f05e334fdc96cb9136d1c18fd7994549baf4de5633f21db298', '[\"*\"]', '2023-06-26 21:24:34', '2023-06-26 21:17:59', '2023-06-26 21:24:34'),
(539, 'App\\Models\\Store', 21, 'Omran', '6d883834eced46cbbcd3be11c5c62dadc8360e7915d6e8a654e73615a1a80543', '[\"*\"]', '2023-06-26 22:03:37', '2023-06-26 22:00:51', '2023-06-26 22:03:37'),
(540, 'App\\Models\\Store', 21, 'Omran', 'e7daa7e12510fb09ad3a120c11fdbd0520e59eafc0d85c83ec1f2eb61a2f4914', '[\"*\"]', '2023-06-26 22:04:44', '2023-06-26 22:03:58', '2023-06-26 22:04:44'),
(541, 'App\\Models\\Store', 21, 'Omran', 'efe93470968448054b2d2177a12ed9aa55bb1b14ae973d6802c84d325618d902', '[\"*\"]', '2023-06-26 22:20:18', '2023-06-26 22:04:44', '2023-06-26 22:20:18'),
(542, 'App\\Models\\Store', 22, 'Omran', '9b9ff43a89c7bbc053045e124db318df5b17ec966c20d2052d6621fe95f4a91c', '[\"*\"]', '2023-06-26 22:22:03', '2023-06-26 22:21:47', '2023-06-26 22:22:03'),
(543, 'App\\Models\\Store', 22, 'Omran', 'd9fffa73f79587c18f22fc09d23529ced7d5789082e52a3ee4aa6933c09f5095', '[\"*\"]', '2023-06-26 22:23:41', '2023-06-26 22:22:03', '2023-06-26 22:23:41'),
(544, 'App\\Models\\Store', 23, 'Omran', 'df9923493bf081336b97414207cd8cf2c3fd6831eff7753774ec0b264459deef', '[\"*\"]', '2023-06-26 22:34:56', '2023-06-26 22:32:02', '2023-06-26 22:34:56'),
(545, 'App\\Models\\Customer', 46, 'Omran', 'bd8a687f2a99ae698d76e586f9f1ca62ad8dae6e7a00375443db988928301236', '[\"*\"]', '2023-06-26 22:48:37', '2023-06-26 22:47:41', '2023-06-26 22:48:37'),
(546, 'App\\Models\\Customer', 46, 'Omran', '68e735d777f9682072832b2b0817df526ca2f5924b859ff4342198b0f65828af', '[\"*\"]', '2023-06-28 23:00:50', '2023-06-26 22:48:37', '2023-06-28 23:00:50'),
(547, 'App\\Models\\Customer', 47, 'Omran', 'bf50d322c950b598733c0c89d4478f6c00e1e7eda84e697b719411fca01c1b66', '[\"*\"]', '2023-06-27 00:35:03', '2023-06-27 00:34:39', '2023-06-27 00:35:03'),
(548, 'App\\Models\\Customer', 47, 'Omran', '8f64b6b6e42bfd3f8cde210a78db6af81c8f62c150da65f1c59140649de4f445', '[\"*\"]', '2023-06-27 00:36:58', '2023-06-27 00:35:03', '2023-06-27 00:36:58'),
(549, 'App\\Models\\Customer', 48, 'Omran', '04393406e560f451584e3d69a1092bce00c93e2a6bb60a815a4857a9389962aa', '[\"*\"]', '2023-06-27 07:02:34', '2023-06-27 07:02:20', '2023-06-27 07:02:34'),
(550, 'App\\Models\\Customer', 48, 'Omran', '6d775a9d40386de5c0ff9a1491e3fd9e079f59ac633602a7ad3614bbb03c1b7e', '[\"*\"]', '2023-06-27 07:05:07', '2023-06-27 07:02:34', '2023-06-27 07:05:07'),
(551, 'App\\Models\\Store', 20, 'Omran', '769eb8efc0250e91bbf1c4ade0e73f5882f47e7010ca3ad723102d2fc867b8af', '[\"*\"]', '2023-07-04 21:39:05', '2023-06-27 10:18:58', '2023-07-04 21:39:05'),
(552, 'App\\Models\\Customer', 49, 'Omran', '4566c5aa68a677cfb84ef13b8ca14c4991b07ed6f475f38d04fbfc0b1d0e9987', '[\"*\"]', '2023-06-27 10:57:50', '2023-06-27 10:48:18', '2023-06-27 10:57:50'),
(553, 'App\\Models\\Customer', 49, 'Omran', 'bb2baf4e89169c0ced08ee7c0d56bc083bd84174bb4cbf28caed3fd798d44f7d', '[\"*\"]', '2023-06-27 11:02:31', '2023-06-27 10:57:50', '2023-06-27 11:02:31'),
(554, 'App\\Models\\Customer', 50, 'Omran', '967ad6826d634f59ca9e193fa5b04167cfc28ec791183b8448c4f867b2997bb9', '[\"*\"]', '2023-06-27 11:22:42', '2023-06-27 11:21:12', '2023-06-27 11:22:42'),
(555, 'App\\Models\\Customer', 50, 'Omran', '099cc1bafcc9e53dd2abbfe0b1ba86c238ec21a5f53f7e07e22b4b4da1547aba', '[\"*\"]', '2023-06-27 11:59:01', '2023-06-27 11:22:42', '2023-06-27 11:59:01'),
(556, 'App\\Models\\Store', 24, 'Omran', '52a9e5d71939368ff03957e3f09bb459fdb0458884b5f17bd28e943d0b79985b', '[\"*\"]', '2023-06-27 23:06:37', '2023-06-27 23:06:09', '2023-06-27 23:06:37'),
(557, 'App\\Models\\Store', 24, 'Omran', 'd43e7e1bf0830154edf22c0079c49c3d0a44074c003fd945480a150339ff95ec', '[\"*\"]', '2023-06-27 23:10:11', '2023-06-27 23:06:37', '2023-06-27 23:10:11'),
(558, 'App\\Models\\Customer', 51, 'Omran', '74e84bdb03db8d9e3b82bcc80e6cbda3e4baf106ee6c6c06874e7c5dc399fca9', '[\"*\"]', '2023-06-29 08:33:12', '2023-06-29 08:32:16', '2023-06-29 08:33:12'),
(559, 'App\\Models\\Customer', 51, 'Omran', '10f1aea5b027a8241c755ed31a416c0eabca076fc7865e7ed8faade5c9860139', '[\"*\"]', '2023-06-29 17:36:57', '2023-06-29 08:35:57', '2023-06-29 17:36:57'),
(560, 'App\\Models\\Customer', 51, 'Omran', '00b6234d43e2490621fda251b79773bd219208ae21d6ee60393e3b3b25952d8a', '[\"*\"]', '2023-06-29 17:38:19', '2023-06-29 17:36:57', '2023-06-29 17:38:19'),
(561, 'App\\Models\\Store', 18, 'Omran', '18f733607b12c8910fca973a9973a00c41e681d1b94bbe07c6e3514f009498eb', '[\"*\"]', '2023-07-01 19:52:24', '2023-07-01 08:48:24', '2023-07-01 19:52:24'),
(562, 'App\\Models\\Customer', 52, 'Omran', '994b512c63e71c899efc41e3442dea8e6a162e3751370bf7735cf75910ba0702', '[\"*\"]', '2023-07-01 14:00:09', '2023-07-01 13:59:16', '2023-07-01 14:00:09'),
(563, 'App\\Models\\Customer', 52, 'Omran', 'b92867490ef5d1ba04daa5c41001d0be79e0a10fbaa50bd3f7f54c5aa4eb41d5', '[\"*\"]', '2023-07-07 17:56:38', '2023-07-01 14:00:09', '2023-07-07 17:56:38'),
(564, 'App\\Models\\Customer', 29, 'Omran', '98611291b9e8c1657541949ff9e8d3b1153cd361f4f8c8ca261d1fbdb5eb5f48', '[\"*\"]', '2023-07-01 18:08:08', '2023-07-01 18:08:07', '2023-07-01 18:08:08'),
(565, 'App\\Models\\Customer', 34, 'Omran', 'fac0958e86c2a619fd046f25a254b93a29bf02a6eeafc62f115d84d362d99938', '[\"*\"]', '2023-07-01 18:13:43', '2023-07-01 18:11:29', '2023-07-01 18:13:43'),
(566, 'App\\Models\\Customer', 34, 'Omran', 'bd41c765cad3b4b7dbf0312974b485f2dac184268194058fec2d243a3b507dd4', '[\"*\"]', '2023-07-01 18:16:09', '2023-07-01 18:13:43', '2023-07-01 18:16:09'),
(567, 'App\\Models\\Customer', 31, 'Omran', '1def0f9f727a3078390f6fa55c24a2702bb1b7b427c71d582bc3b4eb28ab9d65', '[\"*\"]', '2023-07-01 20:01:03', '2023-07-01 19:52:47', '2023-07-01 20:01:03'),
(568, 'App\\Models\\Store', 18, 'Omran', '55753707f7ce5760fc48862101e9be13700d460b53de168055bec276170b8ca1', '[\"*\"]', '2023-07-01 20:09:19', '2023-07-01 20:01:22', '2023-07-01 20:09:19'),
(569, 'App\\Models\\Customer', 31, 'Omran', 'ec1586a9a4556f1e7344e5b065a2a0937552893d152491976c48c66b884710e6', '[\"*\"]', '2023-07-09 09:33:14', '2023-07-01 20:09:31', '2023-07-09 09:33:14'),
(570, 'App\\Models\\Customer', 53, 'Omran', 'fc134d95e95c1394210720a80315469c2749fa71b4dc8436cb8e644176fc2132', '[\"*\"]', '2023-07-02 21:48:33', '2023-07-02 21:44:03', '2023-07-02 21:48:33'),
(571, 'App\\Models\\Store', 25, 'Omran', 'd9b99122cc4367007e0b7d21d9fd03ec7ddcf1509fd95e89a9f8eb4250326937', '[\"*\"]', '2023-07-03 08:52:37', '2023-07-03 08:52:15', '2023-07-03 08:52:37'),
(572, 'App\\Models\\Store', 25, 'Omran', '5f3a892412ee8ab2dd7ea0fca9b6bfecf64019af7b24ccad462604ecfef2d31c', '[\"*\"]', '2023-07-03 08:53:01', '2023-07-03 08:52:51', '2023-07-03 08:53:01'),
(573, 'App\\Models\\Customer', 54, 'Omran', '71088a8b7d60daa1e60f536914682d9aa3ec8bf743f7a4ea5a97580d39ca1166', '[\"*\"]', '2023-07-03 08:57:59', '2023-07-03 08:57:17', '2023-07-03 08:57:59'),
(574, 'App\\Models\\Customer', 55, 'Omran', 'd890d523dc9862ed72aae5f68a9bea3755e3501dcfa301779901113d4549ccdd', '[\"*\"]', '2023-07-03 08:59:47', '2023-07-03 08:59:47', '2023-07-03 08:59:47'),
(575, 'App\\Models\\Customer', 56, 'Omran', 'b663d34f47a6e5a9d35415677434d650038a9013636975ccc2c631e2043d7093', '[\"*\"]', '2023-07-03 09:58:02', '2023-07-03 09:53:12', '2023-07-03 09:58:02'),
(576, 'App\\Models\\Customer', 57, 'Omran', '89f799086a3f7bc4fdc8843df3caaa29a84378f909bcf628e1fc5920e5a151da', '[\"*\"]', '2023-07-03 14:34:06', '2023-07-03 14:33:36', '2023-07-03 14:34:06'),
(577, 'App\\Models\\Customer', 57, 'Omran', '79d3b7755042a182c3347f1bf4d47a824740f52906b7cf60eae0ae88f63a1005', '[\"*\"]', '2023-07-04 08:07:58', '2023-07-03 14:34:06', '2023-07-04 08:07:58'),
(578, 'App\\Models\\Store', 26, 'Omran', '925a385b898ebae2e343133e3689a5b5f41dccee1204f77199bc9b91cf3369b8', '[\"*\"]', '2023-07-03 16:50:10', '2023-07-03 16:48:42', '2023-07-03 16:50:10'),
(579, 'App\\Models\\Customer', 58, 'Omran', 'b9bc529145f2df200f45594eea004ce2a1b32ebd98f82a7e9e5b3e0dea09ada6', '[\"*\"]', '2023-07-03 19:43:31', '2023-07-03 19:42:47', '2023-07-03 19:43:31'),
(580, 'App\\Models\\Store', 27, 'Omran', '4f6aab265868569b73d1163dfa6c3c11806128ff386bdf0a3e93224ce4b3d176', '[\"*\"]', '2023-07-03 19:53:18', '2023-07-03 19:45:40', '2023-07-03 19:53:18'),
(581, 'App\\Models\\Customer', 59, 'Omran', '3527ab3edb8bea0d7e47a0f80e3dbdaeefbefc5ab6a19d30512e644e3e83757c', '[\"*\"]', '2023-07-03 21:42:09', '2023-07-03 21:39:29', '2023-07-03 21:42:09'),
(582, 'App\\Models\\Customer', 59, 'Omran', '8412577b49f117024f2257f3c9da08ae16899b5c04534ce5f5ce6f34a958e7d3', '[\"*\"]', '2023-07-03 21:43:23', '2023-07-03 21:42:09', '2023-07-03 21:43:23'),
(583, 'App\\Models\\Customer', 60, 'Omran', 'cc8042b746cf0eb0cbb8d6b0c16fdb68d450d6912410e910db51746472c4082c', '[\"*\"]', '2023-07-03 21:59:38', '2023-07-03 21:56:40', '2023-07-03 21:59:38'),
(584, 'App\\Models\\Customer', 60, 'Omran', '1ffdce10af49af54dc869e7b728618ba6a23b820f0267098fd5099a0e382bf16', '[\"*\"]', '2023-07-03 22:01:01', '2023-07-03 21:59:38', '2023-07-03 22:01:01'),
(585, 'App\\Models\\Customer', 62, 'Omran', 'b6013f77a32545c2a21d4af571c6817b6510d6ab89e25cf159262620dd3d1366', '[\"*\"]', '2023-07-04 00:29:55', '2023-07-04 00:27:02', '2023-07-04 00:29:55'),
(586, 'App\\Models\\Customer', 62, 'Omran', '7550d304ef931db410ab6a8f0ad3b578bed24852281da29d20e67a6b4b75aaf4', '[\"*\"]', '2023-07-04 00:30:29', '2023-07-04 00:30:28', '2023-07-04 00:30:29'),
(587, 'App\\Models\\Customer', 63, 'Omran', 'bd720de760e1ebc1daa8e2206e6bdcebb1db95eab97a98a57d2c80aed3794cf2', '[\"*\"]', '2023-07-04 09:24:25', '2023-07-04 09:23:24', '2023-07-04 09:24:25'),
(588, 'App\\Models\\Customer', 63, 'Omran', 'bd4c30cd4680d2bcd76ba92389724f617607f9df4db8f2baf7c95ecedacfb51c', '[\"*\"]', '2023-07-04 09:26:25', '2023-07-04 09:24:25', '2023-07-04 09:26:25'),
(589, 'App\\Models\\Customer', 64, 'Omran', 'afa7abf91023e3e66d4ef86854d2444cd9e2cfa9b7ab10727ccb21fa29a239c4', '[\"*\"]', '2023-07-04 11:37:36', '2023-07-04 11:36:57', '2023-07-04 11:37:36'),
(590, 'App\\Models\\Customer', 64, 'Omran', '99df27e6a1d61d2350edc8e94a9adca60cbed865a4dcc54f9080e8b76c70ba4d', '[\"*\"]', '2023-07-09 09:24:29', '2023-07-04 11:37:36', '2023-07-09 09:24:29'),
(591, 'App\\Models\\Customer', 65, 'Omran', '5438a805ea158138c42c3556016dabe3e9abdb11822121e9d2e9a754570d4088', '[\"*\"]', '2023-07-04 13:01:11', '2023-07-04 12:58:30', '2023-07-04 13:01:11'),
(592, 'App\\Models\\Customer', 66, 'Omran', '92a97ccac335ad6afd3a3ae53055ec5a492b70cc51e0d55fd581516f83da76be', '[\"*\"]', '2023-07-04 14:18:01', '2023-07-04 14:18:00', '2023-07-04 14:18:01'),
(593, 'App\\Models\\Customer', 65, 'Omran', '4328af411f288e025bf7d3aa833af472d8e5a42567fbab13f05304782e045e1f', '[\"*\"]', '2023-07-04 21:37:53', '2023-07-04 21:37:42', '2023-07-04 21:37:53'),
(594, 'App\\Models\\Customer', 68, 'Omran', '0adf9460f41ab746d31b50f11a1393f84c98368d16b55b06588d49900f5cb8c1', '[\"*\"]', '2023-07-04 22:40:47', '2023-07-04 22:33:55', '2023-07-04 22:40:47'),
(595, 'App\\Models\\Customer', 69, 'Omran', '5899f30bf17a8335bac6a056c5ad1c8fa2814a9d973d1b2e1714ec3db68af750', '[\"*\"]', '2023-07-05 09:33:12', '2023-07-05 06:50:39', '2023-07-05 09:33:12'),
(596, 'App\\Models\\Customer', 69, 'Omran', '4af14933204150a2ea897728f9c34ec1da92fc1a190a09220b709fddfc5dc89a', '[\"*\"]', '2023-07-08 08:30:29', '2023-07-05 09:33:12', '2023-07-08 08:30:29'),
(597, 'App\\Models\\Store', 28, 'Omran', '4e63527a8c2d659596380ddfa31501ac53c5d2ba3f1705f0b9c578cf07208bcf', '[\"*\"]', '2023-07-05 09:42:05', '2023-07-05 09:42:05', '2023-07-05 09:42:05'),
(598, 'App\\Models\\Customer', 71, 'Omran', 'd40b83d0fbb47164cf188e2e472218b6f4fb58ed92a8bd32e0c077cbc79c1ac7', '[\"*\"]', '2023-07-05 11:06:11', '2023-07-05 11:05:13', '2023-07-05 11:06:11'),
(599, 'App\\Models\\Customer', 71, 'Omran', '6507f5438d8fadcb9ca408ba20997cf4fa32b1e88c683ddf80a3b23981e1af83', '[\"*\"]', '2023-07-05 11:08:35', '2023-07-05 11:06:11', '2023-07-05 11:08:35'),
(600, 'App\\Models\\Customer', 72, 'Omran', '70c5b9815c915a530a1218e98e9778542e51920083099b9e2b9d7fbe13f45e4b', '[\"*\"]', '2023-07-05 14:01:36', '2023-07-05 14:01:19', '2023-07-05 14:01:36'),
(601, 'App\\Models\\Customer', 72, 'Omran', 'cb38392aaebc6a8b8b1e517bd188cb01196a5869963e0543dc787bbe6be07f05', '[\"*\"]', '2023-07-05 14:03:49', '2023-07-05 14:01:36', '2023-07-05 14:03:49'),
(602, 'App\\Models\\Customer', 73, 'Omran', '8f620ac0de3e10c75d69631b4f1987a4e8bae32bf2a04d356fa2fe979b61fdc8', '[\"*\"]', '2023-07-05 19:57:04', '2023-07-05 19:57:03', '2023-07-05 19:57:04'),
(603, 'App\\Models\\Customer', 74, 'Omran', '87590867318a1f91f2c414eefd032e96492808fe75eebd921196a94f973a6158', '[\"*\"]', '2023-07-05 21:12:55', '2023-07-05 21:12:07', '2023-07-05 21:12:55'),
(604, 'App\\Models\\Customer', 74, 'Omran', 'c2ae0adc90f504d11d04b802f4fc6b73dfa7e6c6392c78d45f82c96d3a7d1a49', '[\"*\"]', '2023-07-06 16:58:32', '2023-07-05 21:12:55', '2023-07-06 16:58:32'),
(605, 'App\\Models\\Store', 29, 'Omran', 'd18db4070f69797245f3f41b8832b95d979f3370e7294d109c19b0a8c5e5cefc', '[\"*\"]', '2023-07-06 13:13:10', '2023-07-06 13:12:35', '2023-07-06 13:13:10'),
(606, 'App\\Models\\Store', 29, 'Omran', '8d05226bdf5e8d168eabee5a35b22e47923d0f8c3420600da6b25815a7333b07', '[\"*\"]', '2023-07-06 13:14:25', '2023-07-06 13:13:10', '2023-07-06 13:14:25'),
(607, 'App\\Models\\Customer', 76, 'Omran', '89ce4b8149555ab7714b5dcc0bc46a86f0f698c6260f4d0d818ad419ab00902d', '[\"*\"]', '2023-07-06 14:39:58', '2023-07-06 14:39:11', '2023-07-06 14:39:58'),
(608, 'App\\Models\\Customer', 76, 'Omran', '1c9095f6f5c65f5de667f04643009296ea235446322d522a85d0fc6fc131aa56', '[\"*\"]', '2023-07-06 14:42:56', '2023-07-06 14:39:58', '2023-07-06 14:42:56'),
(609, 'App\\Models\\Customer', 77, 'Omran', '05de39de68477caf250e796a4ffe5dfe4037e46c5fe3d32416cb00816cbd732f', '[\"*\"]', '2023-07-07 13:27:59', '2023-07-07 13:26:52', '2023-07-07 13:27:59'),
(610, 'App\\Models\\Store', 30, 'Omran', 'e184d8f00c17d4d1612d270966fcffd35a2397cb51267b708835eac6b91d6e2c', '[\"*\"]', '2023-07-07 21:06:08', '2023-07-07 21:05:48', '2023-07-07 21:06:08'),
(611, 'App\\Models\\Store', 30, 'Omran', 'ecb418cb213b2fc9654f18d0bd92f4c152dd243f7e19a782ab62cc92bc899f0b', '[\"*\"]', '2023-07-07 21:10:48', '2023-07-07 21:06:08', '2023-07-07 21:10:48'),
(612, 'App\\Models\\Customer', 78, 'Omran', '26c8a8d9112546451490ca9e35f511eebf013d0bce2a44493cbfadf927f8fca0', '[\"*\"]', '2023-07-07 21:12:26', '2023-07-07 21:12:01', '2023-07-07 21:12:26'),
(613, 'App\\Models\\Customer', 78, 'Omran', '49f48992bb147d3b702281d9e87cc8d359afaabfcc1f47646895e3203db233ef', '[\"*\"]', '2023-07-07 21:14:23', '2023-07-07 21:12:26', '2023-07-07 21:14:23'),
(614, 'App\\Models\\Customer', 79, 'Omran', '7580d6b3b24beea1958543eb128846bb9b0bff98763a634be17064e7158a44d8', '[\"*\"]', '2023-07-08 00:26:14', '2023-07-08 00:25:50', '2023-07-08 00:26:14'),
(615, 'App\\Models\\Customer', 79, 'Omran', 'c8c95cf891c7c922036e9710513005e88f537591b455b26ec703d6b74da8b629', '[\"*\"]', '2023-07-08 00:29:14', '2023-07-08 00:26:14', '2023-07-08 00:29:14'),
(616, 'App\\Models\\Customer', 80, 'Omran', '3fb2e520ac3f034fbe09d035b23b14192835acde59652ee518fc444002919d91', '[\"*\"]', '2023-07-08 08:42:44', '2023-07-08 08:41:58', '2023-07-08 08:42:44'),
(617, 'App\\Models\\Customer', 39, 'Omran', '9aa8611992018f18334818473c498d270d5d67137eec4095a62decb443ce2114', '[\"*\"]', '2023-07-09 09:33:47', '2023-07-09 09:33:39', '2023-07-09 09:33:47'),
(618, 'App\\Models\\Store', 18, 'Omran', '738553224b732176a6bc2a572187675adfc78cb62002000a81e93b1b62bb88df', '[\"*\"]', '2023-07-09 10:03:09', '2023-07-09 09:34:00', '2023-07-09 10:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `unite_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` int(11) NOT NULL,
  `qty` double(8,2) DEFAULT NULL,
  `min_qty` double(8,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `store_id`, `unite_id`, `name`, `description`, `price`, `qty`, `min_qty`, `created_at`, `updated_at`) VALUES
(2, 15, 11, 'قرميد', 'وصف المنتج', 20, 1.00, 100.00, '2023-05-20 13:38:07', '2023-05-20 13:38:07'),
(4, 18, 2, 'حديد 12ملم', 'حديد 12ملم توصيالي', 10500, 1.00, 1.00, '2023-06-19 21:08:27', '2023-06-19 21:08:27'),
(9, 20, 1, 'matin', 'bienvenue', 500, 1.00, 1.00, '2023-06-26 21:24:02', '2023-06-27 10:23:05'),
(10, 21, 11, '° CROWN Marteau Perforateur 1250W', 'الميزات\nالعلامات\nDescription\nتعد شركة CROWN الأمريكية الرائدة في مجال الصناعة و المعدات الصناعية و الحرفية واحدة من أفضل خمس شركات عالمية في هذا المجال، اكتسبت سمعة كبيرة كمبتكر عالمي و تلقت العديد من الجوائز الدولية،  هذا لسعيها الدائم في دمج أحدث و أفضل التكنولوجيات في تصميم منتجاتها، مع اهتمامها بسلامة و صحة المستخدمين.  \nMandrin SDS Plus System.\n2 Fonctions : Perforateur - Perceuse A Percussion - Burin.\nTige de profondeur.\nPrise Souple.\nUne poignée ergonomique Anti Vibration 360°.\nTension : 220-230V ～ 50 / 60HZ.\nPuissance : 1250W.\nVitesse à vide : 800 tr/min.\nTaux d’impact : 2600 BPM.\nBois : 40mm.\nAcier : 13mm.\nBéton : 32mm.\nPoids : 5.9 Kg.', 16700, 1.00, 100.00, '2023-06-26 22:13:12', '2023-06-26 22:20:01'),
(11, 21, 11, 'Marteau-Piqueur 1700W 45J CT18024 BMC', 'Double Ciseaux Pour Marteau Piqueur De 40cm.\nTension: 230-240V ～ 50Hz.\nPuissance d\'impact unique: 45J.\nTaux d’impact: 1300 min¯¹.\nUn Pot De Graisse Inclut.\nBouton de verrouillage.\nPorte-outil: HEX-30mm.\nPuissance: 1700W.\nPoids: 15.5kg.\nPrise Souple.\nDimension: 75x13x22 cm.', 46500, 1.00, 100.00, '2023-06-26 22:15:43', '2023-06-26 22:15:43'),
(12, 20, 1, 'chamel', 'bienvenue', 450, 1.00, 1.00, '2023-06-27 10:20:14', '2023-06-27 10:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reporting_customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `store_id` bigint(20) UNSIGNED DEFAULT NULL,
  `reportable_type` int(11) DEFAULT NULL,
  `report_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `savings`
--

CREATE TABLE `savings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `savings`
--

INSERT INTO `savings` (`id`, `customer_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 39, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `privacy_fr` text COLLATE utf8mb4_unicode_ci,
  `privacy_ar` text COLLATE utf8mb4_unicode_ci,
  `terms_fr` text COLLATE utf8mb4_unicode_ci,
  `terms_ar` text COLLATE utf8mb4_unicode_ci,
  `about_fr` text COLLATE utf8mb4_unicode_ci,
  `about_ar` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `privacy_fr`, `privacy_ar`, `terms_fr`, `terms_ar`, `about_fr`, `about_ar`, `created_at`, `updated_at`) VALUES
(1, '<div>L\'application Omran est un service destiné à permettre aux utilisateurs de l\'application de parcourir ou de commander des produits ou des biens. Votre utilisation de cette application pour quelque raison que ce soit, y compris la réalisation de transactions, est soumise aux termes et conditions mentionnés ci-dessous.</div><div><br></div><div>&nbsp; 1. Nous avons le droit de modifier ces termes et conditions à tout moment, et ces modifications seront réputées effectives le jour où elles sont publiées ou des avis indiquant le changement des conditions dans l\'application vous sont envoyés, par votre utilisation. des services fournis par l\'application.</div><div><br></div><div>&nbsp; 2. Cette politique de confidentialité définit la manière dont omran utilise et protège toute information qui y est saisie lors de l\'utilisation de l\'application.&nbsp; omran garantit que votre vie privée est entièrement protégée et que ces informations restent confidentielles et utilisées uniquement conformément à la présente déclaration de confidentialité.&nbsp; Cette politique peut changer de temps à autre en mettant à jour cette page.</div><div><br></div><div>&nbsp; 3. Afin d\'accéder à certaines fonctions du Service, y compris la possibilité d\'acheter des produits et services, vous devez vous inscrire à l\'Application</div><div><br></div><div>&nbsp; 4. L\'application n\'est pas entièrement responsable des transactions financières entre les deux parties, car la tâche de l\'application se limite à organiser et faciliter la communication électronique entre elles.</div><div><br></div><div>&nbsp; 4. L\'application a le droit d\'arrêter tout client sans préavis si des plaintes sont déposées contre lui ou s\'il ne respecte pas le prix prévu.</div><div><br></div><div>&nbsp; 5. Omran ne sera pas responsable de tout retard ou défaut de livraison des produits ou autre.</div><div><br></div><div>&nbsp; Merci de votre visite (application omran) S\'il y a des suggestions ou des commentaires, nous sommes heureux de les recevoir par e-mail: buildingmaterials29@gmail.com</div><div><br></div><div>&nbsp; Ou appelez le numéro suivant : 0559396310</div>', '<div>تطبيق omran هو خدمة الهدف منه السماح لمستخدمي التطبيق بتصفح أو طلب المنتجات أو السلع ، إن إستخدامك لهذا التطبيق لأي سبب من الأسباب، بما في ذلك إجراء التعاملات يخضع للشروط والأحكام المذكورة أدناه.</div><div><br></div><div>&nbsp;1. يحق لنا تغيير هذه البنود والشروط في أي وقت ، ويتم إعتبار أي من هذه التغييرات سارية المفعول في اليوم الذي يتم فيه نشرها أو إرسال الإشعارات التي تفيد بتغيير الشروط في التطبيق إليك ، بإستخدامك الخدمات التي يقدمها التطبيق.</div><div><br></div><div>&nbsp;2. تحدد سياسة الخصوصية هذه كيفية استخدام omran وحمايتها لأي معلومات يتم إدخالها عليها أثناء استخدام&nbsp; التطبيق . يضمن omran حماية خصوصيتك بشكل كامل ، وأن هذه المعلومات تظل سرية ولا يتم استخدامها إلا وفقًا لبيان الخصوصية هذا. قد تتغير هذه السياسة من وقت لآخر عن طريق تحديث هذه الصفحة.</div><div><br></div><div>&nbsp;3. من أجل الوصول إلى وظائف معينة من الخدمة ، بما في ذلك القدرة على شراء المنتجات والخدمات ، يتوجب عليك التسجيل في التطبيق</div><div><br></div><div>&nbsp;4. التطبيق غير مسؤول تماما عن التعاملات المالية بين الطرفين، حيث تنحصر مهمة التطبيق في التنظيم و تسهيل التواصل الإلكتروني بينهما</div><div><br></div><div>&nbsp;4.يحق للتطبيق إيقاف أي عميل وبدون سابق إنذار إذا قُدمت ضده شكاوى أو في حال عدم التزامه بالسعر المقدم.</div><div><br></div><div>&nbsp;5.&nbsp; لايتحمل omran مسؤولية عن أي تأخير أو فشل لتسليم المنتجات أو خلاف ذلك.</div><div><br></div><div>&nbsp;شكرا لكم لزيارة( تطبيق omran) إذا كان هناك اقتراحات أو تعليقات فيسعدنا استقبالها على البريد الإلكتروني: buildingmaterials29@gmail.com</div><div><br></div><div>&nbsp;أو الاتصال بالرقم التالي : 0559396310</div>', 'The omran application is a service intended to allow users of the application to browse or order products or goods. Your use of this application for any reason, including conducting transactions, is subject to the terms and conditions mentioned below.<div><br></div><div><br></div><div>&nbsp;1. We have the right to change these terms and conditions at any time, and any such changes shall be deemed effective on the day on which they are posted or notices stating the change of conditions in the application are sent to you, by your use of the services provided by the application.</div><div><br></div><div><br></div><div>&nbsp;2. This privacy policy sets out how omran uses and protects any information that is entered on it while using the application.  omran ensures that your privacy is fully protected, and that such information is kept confidential and used only in accordance with this privacy statement.  This policy may change from time to time by updating this page.</div><div><br></div><div><br></div><div>&nbsp;3. In order to access certain functions of the Service, including the ability to purchase products and services, you must register with the Application</div><div><br></div><div><br></div><div>&nbsp;4. The application is not fully responsible for the financial transactions between the two parties, as the task of the application is limited to organizing and facilitating electronic communication between them</div><div><br></div><div><br></div><div>&nbsp;4. The application has the right to stop any customer without prior notice if complaints are submitted against him or if he does not comply with the price provided.</div><div><br></div><div><br></div><div>&nbsp;5. Omran shall not be liable for any delay or failure to deliver products or otherwise.</div><div><br></div><div><br></div><div>&nbsp;Thank you for visiting (omran application). If there are suggestions or comments, we are happy to receive them at the e-mail: buildingmaterials29@gmail.com</div><div><br></div><div><br></div><div>&nbsp;Or call the following number: 0559396310</div>', '<div>تطبيق omran هو خدمة الهدف منه السماح لمستخدمي التطبيق بتصفح أو طلب المنتجات أو السلع ، إن إستخدامك لهذا التطبيق لأي سبب من الأسباب، بما في ذلك إجراء التعاملات يخضع للشروط والأحكام المذكورة أدناه.</div><div><br></div><div>&nbsp;1. يحق لنا تغيير هذه البنود والشروط في أي وقت ، ويتم إعتبار أي من هذه التغييرات سارية المفعول في اليوم الذي يتم فيه نشرها أو إرسال الإشعارات التي تفيد بتغيير الشروط في التطبيق إليك ، بإستخدامك الخدمات التي يقدمها التطبيق.</div><div><br></div><div>&nbsp;2. تحدد سياسة الخصوصية هذه كيفية استخدام omran وحمايتها لأي معلومات يتم إدخالها عليها أثناء استخدام&nbsp; التطبيق . يضمن omran حماية خصوصيتك بشكل كامل ، وأن هذه المعلومات تظل سرية ولا يتم استخدامها إلا وفقًا لبيان الخصوصية هذا. قد تتغير هذه السياسة من وقت لآخر عن طريق تحديث هذه الصفحة.</div><div><br></div><div>&nbsp;3. من أجل الوصول إلى وظائف معينة من الخدمة ، بما في ذلك القدرة على شراء المنتجات والخدمات ، يتوجب عليك التسجيل في التطبيق</div><div><br></div><div>&nbsp;4. التطبيق غير مسؤول تماما عن التعاملات المالية بين الطرفين، حيث تنحصر مهمة التطبيق في التنظيم و تسهيل التواصل الإلكتروني بينهما</div><div><br></div><div>&nbsp;4.يحق للتطبيق إيقاف أي عميل وبدون سابق إنذار إذا قُدمت ضده شكاوى أو في حال عدم التزامه بالسعر المقدم.</div><div><br></div><div>&nbsp;5.&nbsp; لايتحمل omran مسؤولية عن أي تأخير أو فشل لتسليم المنتجات أو خلاف ذلك.</div><div><br></div><div>&nbsp;شكرا لكم لزيارة( تطبيق omran) إذا كان هناك اقتراحات أو تعليقات فيسعدنا استقبالها على البريد الإلكتروني: buildingmaterials29@gmail.com</div><div><br></div><div>&nbsp;أو الاتصال بالرقم التالي : 0559396310</div>', 'omran application is a service that aims to allow application users to browse and order construction products or goods and to facilitate communication between the customer and the shops', 'تطبيق omran هو خدمة الهدف منه السماح لمستخدمي التطبيق بتصفح و طلب المنتجات أو السلع الخاصة بالبناء وتسهيل التواصل بين العميل والمحلات التجارية&nbsp;<br>', '2023-02-16 14:07:59', '2023-05-19 20:07:45');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `begin` date NOT NULL,
  `end` date DEFAULT NULL,
  `slider_offres_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `image`, `link`, `begin`, `end`, `slider_offres_id`, `created_at`, `updated_at`) VALUES
(1, 'Omran app', '6473ae9828abfScreenshot_20230528_204029_Chrome.jpg', 'https://omran-dz.com/', '2023-05-27', '2023-06-27', 5, '2023-05-28 19:42:16', '2023-05-28 19:42:16'),
(2, 'معرض الجزائر الدولي الطبعة 54', '6498520a15bd2d_d45014d6feb06037c08c2e988ddf60a3.jpg', 'https://elwataniatv.dz/2023/06/19/%D9%85%D8%B9%D8%B1%D8%B6-%D8%A7%D9%84%D8%AC%D8%B2%D8%A7%D8%A6%D8%B1-%D8%A7%D9%84%D8%AF%D9%88%D9%84%D9%8A-%D8%A7%D9%84%D9%80-54-%D8%A5%D8%B7%D9%84%D8%A7%D9%82-%D8%A3%D9%88%D9%84-%D8%B5%D8%A7%D9%84/', '2023-06-23', '2023-07-02', 3, '2023-06-25 14:41:14', '2023-06-25 14:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `slider_offres`
--

CREATE TABLE `slider_offres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_fr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` text COLLATE utf8mb4_unicode_ci,
  `desc_fr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_offres`
--

INSERT INTO `slider_offres` (`id`, `name_ar`, `name_fr`, `desc_ar`, `desc_fr`, `days`, `prix`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'rrr', 'fff', 'qsef', 'srtg', 3, 3000, '2023-02-23 14:38:33', '2023-05-13 22:45:41', '2023-05-13 22:45:41'),
(2, 'عرض الاٍسبوع', 'عرض الاٍسبوع', 'عرض الاٍسبوع', 'عرض الاٍسبوع', 10, 5000, '2023-02-26 21:23:21', '2023-05-13 22:45:38', '2023-05-13 22:45:38'),
(3, '7 أيام', '07 jours', 'عرض لافتة اشهارية داخل التطبيق في الصفحة الرئيسية', 'Afficher une bannière intégrée à l’application sur la page d’accueil', 7, 2000, '2023-05-13 22:47:57', '2023-05-15 20:07:06', NULL),
(4, '20 يوم', '20 jours', 'عرض لافتة اشهارية داخل التطبيق في الصفحة الرئيسية', 'Afficher une bannière intégrée à l’application sur la page d’accueil', 20, 4000, '2023-05-15 20:10:02', '2023-05-15 20:10:02', NULL),
(5, '30 يوم', '30 jours', 'عرض لافتة اشهارية داخل التطبيق في الصفحة الرئيسية', 'Afficher une bannière intégrée à l’application sur la page d’accueil', 30, 6000, '2023-05-15 20:12:38', '2023-05-15 20:12:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `storedevices`
--

CREATE TABLE `storedevices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fcm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fcm_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune_id` bigint(20) UNSIGNED DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `longitude` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban` tinyint(1) NOT NULL DEFAULT '0',
  `status` enum('PENDING','ACCEPTED','REFUSED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `min_amount_order` double(8,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `validated` tinyint(4) NOT NULL DEFAULT '0',
  `code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`, `provider`, `provider_id`, `fcm_token`, `key`, `phone`, `password`, `email`, `commune_id`, `address`, `longitude`, `latitude`, `image`, `ban`, `status`, `min_amount_order`, `created_at`, `updated_at`, `validated`, `code`) VALUES
(12, 'hamid beghdaoui 2', NULL, NULL, 'cLBxYEkmR3CiOL_IYe4E5L:APA91bGkuIWNSJtfbOItloiPCsV5rT1F0_xdFCaYq-RlWCgdPDaYLKxPco-0Vhd3UYsBaq5kL-VYd8ZXorLyZT0XTmih4hwacidGEbEpNDqjMcxKZ1CZ6OzHLdEauJyECVBuoJ7wvwRc', NULL, '0561353184', '$2y$10$2Hw1zCxKuY0byNelXmVFN.P39nhk/0/k3Je9EoT8jxrv/j4Xf7xo.', 'hamidbeghdaoui09@gmail.com', 318, '\"blida\"', 0, 0, NULL, 0, 'ACCEPTED', 12.22, '2023-05-16 14:25:22', '2023-05-20 13:39:02', 1, NULL),
(13, 'haron rachid', NULL, NULL, 'fi-B4GbVQ9-GjvGW3aE0s2:APA91bGlyhIMUCFLaWSl60JvnHIDEpogs7jt5cU6GBeQcE1Tu2V7Q7jIx6LuzNrM2ntLeT3YnUOTVIkvII6UL07rafzlrz0qAISfntmD7mC2Cj6CSNHiCCwaQmFiThigXCmF72tewEaT', NULL, '0561358524', '$2y$10$39jOm4xu1OgC8IFOphNYwuuL9rUnqFar7sQBALNkjPcnK/HSiKxcq', '99haronrachid99@gmail.com', 321, '\"blida\"', 0, 0, NULL, 0, 'ACCEPTED', 12.22, '2023-05-17 14:05:28', '2023-05-18 13:55:47', 1, NULL),
(14, 'ahmed', NULL, NULL, NULL, NULL, NULL, '$2y$10$Jdl1CFf.Mj.EwGyMiPcFze/th5T/4Wqp5YNHhjr7o8pautt7PoEpe', 'olivetop1@gmail.com', NULL, NULL, NULL, NULL, NULL, 0, 'ACCEPTED', 0.00, '2023-05-18 14:29:24', '2023-05-19 20:02:06', 0, NULL),
(15, 'bahdja', NULL, NULL, 'cZYgVa_MR7erm1ZnnB_mer:APA91bFRHQf9PKXQ2v2W8c1J_T8F-kL5dDKcosE_GVJ4c8f-scMHemcYrNazHc7AKdLtbSFsZOrKsKiSwfvYOXJJG9tqOXN8csOwuSoyAE4coyFKtNTOx2FjqRkYaCph6Dn5ZlQmJ-sk', NULL, '0696741006', '$2y$10$9mNQPbgz3srvoa6Noz.LqOMrbSvqFK7RL4X1hBDN9q../AkyoxxCG', 'omran1apk@gmail.com', 568, '\"adresse\"', 0, 0, NULL, 0, 'ACCEPTED', 12.22, '2023-05-20 13:23:10', '2023-05-20 13:46:06', 1, NULL),
(16, 'eurl nadjah', NULL, NULL, 'cb-PZ2nMR62oEQWe71aBCj:APA91bHM-jejs4PJEkvXry27gvkh9R6uIWYYMrb48uVpLbhjh5Gvyxr40U0M39R9McPIzPcjyh9XSZXRVw6yF9aqoTcxyI9s7zDCYY_Q9hDJrBUhH-CxG-UYY0VNbZDtMXE4x30wHtnX', NULL, '0550987105', '$2y$10$/l2SMfYiGo4vOKvO6k6hSu9qLIXvqUfUjGmqvMRwRK6TK5R8/Uox.', 'abdelghani.adjimi@gmail.com', 603, '\"rouiba alger\"', 0, 0, NULL, 0, 'ACCEPTED', 12.22, '2023-05-25 18:15:39', '2023-05-27 22:37:17', 1, NULL),
(17, 'Samir sami', NULL, NULL, 'cg7ebdk8TOi7n8KKoY7GRm:APA91bGVrfMKD9-cFYVbfK1Ap2eytS4yfWYeLd3rmDm_BeAfidOyS73bstkhVQlbAXFAZ3mdm4qCJ1FylP5VCTpOA0-ATVwG-bP5dCGqUEVtaUMo-QYTaMTObw-0m9PyqZyQiBuIV7YQ', NULL, '0667094403', '$2y$10$1.HbP/St6WpcSjr4Xe1vlOuEwTWsdAmuknfAkp0wgpq0FLx7rmsZO', 'ouahidscred@gmail.com', 1126, '\"Hai chahid Mahmoud , Boudjemaa\"', 10, 10, '17_648c698dd7d40image_cropper_1686923644459.jpg', 0, 'ACCEPTED', 10.00, '2023-06-16 13:51:16', '2023-06-16 15:40:33', 1, NULL),
(18, 'بيع مواد البناء', NULL, NULL, 'cZYgVa_MR7erm1ZnnB_mer:APA91bHCL-0JBRJo9TPbDFvcr-Vbo0_jMxmft6I4lv4xAT4RixymsgBBLCguCqoTL9JMPhH-wx31lJ8ws_N86dZRxd1YWtpIp-mbh9Qljtq-5soR0JrnAR9eBN0PYn8LNxTwxQAEFvnf', NULL, '0696741006', '$2y$10$QXSoHSw/WFKEMQdXDEURS.pfyXhfcfaABeLc2Picjw1Qi2yfAT/Om', 'kha22led03@gmail.com', 568, '\"\\u0634\\u0645\\u0627\\u0644 \\u0634\\u0631\\u0642 \\u0628\\u0631\\u062c \\u0627\\u0644\\u0628\\u062d\\u0631\\u064a\"', 10, 10, '18_6490c40a85d18image_cropper_1687208966714.jpg', 0, 'ACCEPTED', 10.00, '2023-06-19 20:58:29', '2023-07-09 09:34:00', 1, NULL),
(19, 'gemsy', NULL, NULL, 'eQa02cTUQb-dF9IpDwfJvS:APA91bEYn_pDfhbmJyKKOoWMlf9ECY3DDyo-OdTU5_dqiNqVeQNrPyIgXx6beQvXYbcG_zRnksB6MpEIj7iQBvBmsKxD9-u3JVygtBFjdsuhRGKiDxZCeo63cricuyw7FUYAwyWncRyg', NULL, '0778234665', '$2y$10$LfN/UKdcJ.6Ztwiz2r/5n.FIGn6gAEnuDiFKOBUz3dsF0UvZ7t4qO', 'lina.archit@gmail.com', 602, '\"reghaya\"', 10, 10, NULL, 0, 'ACCEPTED', 10.00, '2023-06-24 05:19:12', '2023-06-24 09:13:36', 1, NULL),
(20, 'matériaux de construction brahim', NULL, NULL, 'fPvpv_5HSN6Qd0sqJuuQiG:APA91bHpkDWpuMh7Jnzfgf5HR8RJ0_iydtEa3GFaodr95dJB36yU4PNGfPTy3wgFYFBBf3_ScBqOiEjz0U2r8CTdeJkFOWhAc4jy4pcC3NataLGyPpFJ3_-UU25sFE4XemovID6A7qI1', NULL, '0556701199', '$2y$10$lZtZzfso2/bb2qV5U036BeovXsFEKPgqmkmgv6TzCgtCzvZbDOSFi', 'abdo.ab3514@gmail.com', 1216, '\"larbaatach\"', 10, 10, '20_649a0120ab18eimage_cropper_1687814427957.jpg', 0, 'ACCEPTED', 10.00, '2023-06-26 21:17:28', '2023-06-27 10:18:58', 1, NULL),
(21, 'hamza', NULL, NULL, 'fPLHJIsvQISKs68JY58LUV:APA91bHHezFDkwI0TKxs8JlW9zOtIJL3sQcfLBP6msTHgTrersQK9xmk6XgWth2jGYzMdQrslFjwei1TDXWjNN7Q1d9YC8LDkX1OeFSE6nGTX1pes_nPwqgoAPS_B6CLI3gshmruxKDm', NULL, '0659823198', '$2y$10$JsLCiadUAkizxeH2661wbur4EcEBECTANpUga5s7xggCrJzonk2LS', 'hayllahamza@gmail.com', 306, '\"Blida\"', 0, 0, NULL, 0, 'ACCEPTED', 12.22, '2023-06-26 22:00:22', '2023-06-26 22:32:42', 1, NULL),
(22, 'hamza', NULL, NULL, 'fPLHJIsvQISKs68JY58LUV:APA91bH1JZW48NgcZgjlr3gmg6GCiyJutoXv4DuhkahDTKJR83mFefgmOSA1NG8-2w6Y8hBnzKMoydO__3gArjDHoxI6KAtQeO6CiyKI7qYG0hdCmLo5DbySwmDxX6R8QpiuWcztmF0k', NULL, '0659823198', '$2y$10$6pfspTSP762guVw5m7XJyuNCn47Eh5BWgHIxWkWM/VSLKkmREioeW', 'brk069785@gmail.com', 1203, '\"boumerdrs\"', 0, 0, NULL, 0, 'ACCEPTED', 12.22, '2023-06-26 22:21:23', '2023-06-26 22:32:27', 1, NULL),
(23, 'oued kniss', NULL, NULL, 'fr4JcA7-SziP9ST9DeMxKH:APA91bEjAn3XTNe16si6xUGAYi_qmT2fvBlBJ26zRZ8-HnF1xzDBTEvJyFlww8eAMUGb9SKkeodOg4ABX7BqtahUFCr4v_Fn0n1ddv9OMy2lXgAwnlGoAiMkJSPV7IbLjSQAhfiwklll', NULL, NULL, '$2y$10$BSvB7tC757mbx0bSitV4d.wj4Ss0XSjE5.MAOgSE9X/N.18wQd.US', 'ouedkniss@gmeil.com', NULL, NULL, NULL, NULL, NULL, 0, 'ACCEPTED', 0.00, '2023-06-26 22:31:12', '2023-06-26 22:32:29', 0, '981115'),
(24, 'abdelnour', NULL, NULL, 'fOnMEIXQRiq60LAMSHUWTw:APA91bF28H0pERu-nYx30-qWpjxD0UxKv2T9pzxWO85riCjPVsa5OoqKf265WhygphpEGtjerMm7Ky1yMimQii1trmpSIwWDjmdojStmDx3USs_I8f7Dj2xQABsrQgxfcaZOePkC6bcO', NULL, '0657683445', '$2y$10$LHJxI.gw.l87Z4BM.EvQp.UnYmnEqUAuAvb9FMepY4fAAGQIt8FPu', 'abdoughdia@gmail.com', 848, '\"drean\"', 10, 10, NULL, 0, 'ACCEPTED', 10.00, '2023-06-27 23:06:04', '2023-06-28 00:04:31', 1, NULL),
(25, 'Walid Garici', NULL, NULL, 'cXiR12G9RyOXKqqLNN0cqJ:APA91bEv1jAilF2qN56nsy3w7QYb9jWKT7NmsHeijrEdkR8ZGajkx4yd7G3-oQE_Y76BH7PQeODZrcdnoDsi5Axx3Hrxr_zgChU8GLboVpI7WedWNjKSm8TaSKH3CqbqCV6vzcuL8YSl', NULL, NULL, '$2y$10$eeE0YVHdl3qbEe8dNYcIge/wwBqRVfzUN2hOSnkVUbDqm1vJcdncK', 'walid.50.gee@gmail.com', NULL, NULL, NULL, NULL, NULL, 0, 'ACCEPTED', 0.00, '2023-07-03 08:52:12', '2023-07-03 14:36:38', 0, '128536'),
(26, 'norri Bouloussa', NULL, NULL, 'cEzKom0SRBuKIQpYuV0ua2:APA91bFRL_0mb26znU1xpozwXteR6i62SMhqqRIJPeS2mgLHgEFk_ni7thLxnnVl4Y0ssH-oYop2JKfoMhBZOH1tkV4ZiFeoYUEPjpP2n-z1KTPKrjSwGGmAWcX8sYoWBBz8Trj6sOWd', NULL, NULL, '$2y$10$EdeJC6kLk7mJWTx7SkA31.i74mej8uJngpVM765rVJ65VHDhDP4s.', 'norribouloussa3990@gmail.com', NULL, NULL, NULL, NULL, NULL, 0, 'ACCEPTED', 0.00, '2023-07-03 16:48:01', '2023-07-03 19:19:03', 0, '871312'),
(27, 'Mba Steel', NULL, NULL, 'diQfFNuMS-mFTPf-ce-VTJ:APA91bGtjisMoJSLhY82NnA61ZiG5jLxbnAbM3BCtFkQuMoLPfKe3pG6JJiYynce2ffhi5S3s4cwfWiLEZ0BqGHlfEaSgsNO5E8-23aYLstxtQyPh_3cn-iYLaUTxa5dsWId_4TZMVL5', NULL, NULL, '$2y$10$2NFmR4KkkaBx4F1DV3WUtOoYsJquBkhYq/NyAFLoOEqtThKACQR7e', 'siawhati@gmail.com', NULL, NULL, NULL, NULL, NULL, 0, 'ACCEPTED', 0.00, '2023-07-03 19:45:10', '2023-07-03 20:33:50', 0, '187314'),
(28, 'sosdz', NULL, NULL, 'd7ZIrxb6SGmLHfZgUOncCT:APA91bHQK3F0J3TfK0qxIBL9b1cu16K3vUCondrDU6Cckb8hrpLa6yZYW5WetuAAHNrYaYU0IdzjmCjfiRg2s-oqQ8iBVsbyxM93x7zuUNaivAqPW3IYF1P1OVGVw3FxPllYCdTuwwOF', NULL, NULL, '$2y$10$jwyzcm62Ozev8tlVzklp5udio/Ra0t3ZVYra0zhR8AHWvyjaeMImi', 'hhhh@gmail.com', NULL, NULL, NULL, NULL, NULL, 0, 'ACCEPTED', 0.00, '2023-07-05 09:41:53', '2023-07-05 10:15:56', 0, '837994'),
(29, 'bouzouini hocine', NULL, NULL, 'f4fqTLPJTr-3UdTU3_4_l-:APA91bEDWyPFBMvEpo-Hb_J1X2KCBzc6IAmYEwrLnDsa7MYEnkuEe4SeebuyegOzsM9aIB2zgzaibY9Gk9Mpxe6FKUNSPySe_Yif5C5ZzHTQu_w5VnEASyBhb3WEBp1tFT-9zkj4ygZ_', NULL, '0665091079', '$2y$10$DJI3lfEzRHYm/YZ4qAPg9.yWoakiljizhxyPX.lnCIitSPC1R/nxe', 'nafahayat2@gmail.com', 423, '\"brigui\"', 0, 0, NULL, 0, 'ACCEPTED', 12.22, '2023-07-06 13:12:21', '2023-07-06 13:49:23', 1, NULL),
(30, 'youcef', NULL, NULL, 'dcIZtkD0SIa9IkO_FYyF6x:APA91bHvSDSkbrVvtCKnKLfdJ0yZ0FK0Vo4Cdm_BGkTKxzFhZ9pAOpxtO8dscKXosGwwtuoNkqsQqL-xov-5YSgCz6jPtOXJ4Z_VpmP9JDLyhhHPxQ7uFmC3TDecHFKC3V_S63YpnouF', NULL, '0658306571', '$2y$10$KgKNCQAD02mzGfx46IVaEeXzajLkCzzLaaiP0vbnAObIi.AXWxqCy', 'youcefsofiane1994@gmail.com', 486, '\"zmalet el amir abdelkader\"', 0, 0, NULL, 0, 'ACCEPTED', 12.22, '2023-07-07 21:05:34', '2023-07-08 08:05:47', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `store_notifications`
--

CREATE TABLE `store_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `store_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_fr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_fr` text COLLATE utf8mb4_unicode_ci,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `read` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store_notifications`
--

INSERT INTO `store_notifications` (`id`, `customer_id`, `store_id`, `type`, `name_fr`, `name_ar`, `description_fr`, `description_ar`, `read`, `created_at`, `updated_at`, `order_id`) VALUES
(1, 28, 15, 'new order', 'Nouvelle commande', NULL, 'Vous avez reçu une nouvelle commande !!', NULL, 0, '2023-05-22 10:36:43', '2023-05-22 10:36:43', 1),
(2, 31, 15, 'new order', 'Nouvelle commande', NULL, 'Vous avez reçu une nouvelle commande !!', NULL, 0, '2023-06-19 20:45:35', '2023-06-19 20:45:35', 2),
(3, 31, 18, 'new order', 'Nouvelle commande', NULL, 'Vous avez reçu une nouvelle commande !!', NULL, 0, '2023-07-01 19:59:04', '2023-07-01 19:59:04', 3),
(4, 64, 18, 'new order', 'Nouvelle commande', NULL, 'Vous avez reçu une nouvelle commande !!', NULL, 0, '2023-07-04 11:46:55', '2023-07-04 11:46:55', 4);

-- --------------------------------------------------------

--
-- Table structure for table `unites`
--

CREATE TABLE `unites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_fr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unites`
--

INSERT INTO `unites` (`id`, `name_fr`, `name_ar`, `created_at`, `updated_at`) VALUES
(1, 'sac', 'كيس', '2023-02-20 19:44:52', '2023-02-20 19:44:52'),
(2, 'Cent ratls', 'قنطار', '2023-02-20 19:45:32', '2023-02-20 19:47:59'),
(3, 'Une tonne', 'طن', '2023-02-20 19:48:24', '2023-02-20 19:48:24'),
(4, 'Kg', 'كغ', '2023-02-20 19:48:56', '2023-02-20 19:48:56'),
(5, 'm', 'متر', '2023-02-20 19:49:39', '2023-02-20 19:49:39'),
(6, 'm3', 'متر مكعب', '2023-02-20 19:50:31', '2023-02-20 19:50:31'),
(7, 'L', 'لتر', '2023-02-20 19:50:46', '2023-02-20 19:50:46'),
(8, 'cm', 'سم', '2023-02-20 19:53:23', '2023-02-20 19:53:23'),
(9, 'mm', 'مم', '2023-02-20 19:53:45', '2023-02-20 19:53:45'),
(10, 'm2', 'متر مربع', '2023-02-20 19:55:59', '2023-02-20 19:58:19'),
(11, 'unité', 'وحدة', '2023-02-20 21:30:59', '2023-02-20 21:30:59');

-- --------------------------------------------------------

--
-- Table structure for table `wilayas`
--

CREATE TABLE `wilayas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_fr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wilayas`
--

INSERT INTO `wilayas` (`id`, `code`, `name_ar`, `name_fr`, `created_at`, `updated_at`) VALUES
(1, '01', 'أدرار', 'Adrar', NULL, NULL),
(2, '02', ' الشلف', 'Chlef', NULL, NULL),
(3, '03', 'الأغواط', 'Laghouat	', NULL, NULL),
(4, '04', 'أم البواقي', 'Oum El Bouaghi', NULL, NULL),
(5, '05', 'باتنة', 'Batna', NULL, NULL),
(6, '06', ' بجاية', 'Béjaïa', NULL, NULL),
(7, '07', 'بسكرة', 'Biskra', NULL, NULL),
(8, '08', 'بشار', 'Béchar', NULL, NULL),
(9, '09', 'البليدة', 'Blida', NULL, NULL),
(10, '10', 'البويرة', 'Bouira', NULL, NULL),
(11, '11', 'تمنراست', 'Tamanrasset', NULL, NULL),
(12, '12', 'تبسة', 'Tébessa', NULL, NULL),
(13, '13', 'تلمسان', 'Tlemcen', NULL, NULL),
(14, '14', 'تيارت', 'tiaret', NULL, NULL),
(15, '15', 'تيزي وزو', 'Tizi-Ouzou', NULL, NULL),
(16, '16', 'الجزائر', 'Alger', NULL, NULL),
(17, '17', 'الجلفة', 'Djelfa', NULL, NULL),
(18, '18', 'جيجل', 'Jijel', NULL, NULL),
(19, '19', 'سطيف', 'Sétif', NULL, NULL),
(20, '20', 'سعيدة', 'Saida', NULL, NULL),
(21, '21', 'سكيكدة', 'Skikda', NULL, NULL),
(22, '22', 'سيدي بلعباس', 'Sidi-Bel-Abbès', NULL, NULL),
(23, '23', 'عنابة', 'Annaba', NULL, NULL),
(24, '24', 'قالمة', 'Guelma', NULL, NULL),
(25, '25', 'قسنطينة', 'Constantine', NULL, NULL),
(26, '26', 'المدية', 'Médéa', NULL, NULL),
(27, '27', 'مستغانم', 'Mostaganem', NULL, NULL),
(28, '28', 'المسيلة', 'M\'Sila', NULL, NULL),
(29, '29', 'معسكر', ' Mascara', NULL, NULL),
(30, '30', 'ورقلة', 'Ouargla', NULL, NULL),
(31, '31', 'وهران', 'Oran', NULL, NULL),
(32, '32', 'البيض', 'El-Bayadh', NULL, NULL),
(33, '33', 'إليزي', 'Illizi', NULL, NULL),
(34, '34', 'برج بوعريريج', 'Bordj Bou Arreridj', NULL, NULL),
(35, '35', 'بومرداس', 'Boumerdès', NULL, NULL),
(36, '36', 'الطارف', 'El-Tarf', NULL, NULL),
(37, '37', 'تندوف', 'Tindouf', NULL, NULL),
(38, '38', 'تيسمسيلت', 'Tissemsilt', NULL, NULL),
(39, '39', 'الوادي', 'El-Oued', NULL, NULL),
(40, '40', 'خنشلة', 'Khenchela', NULL, NULL),
(41, '41', 'سوق أهراس', 'Souk-Ahras', NULL, NULL),
(42, '42', 'تيبازة', 'Tipaza', NULL, NULL),
(43, '43', 'ميلة', 'Mila', NULL, NULL),
(44, '44', 'عين الدفلة', 'Aïn-Defla', NULL, NULL),
(45, '45', 'النعامة', 'Naâma', NULL, NULL),
(46, '46', 'عين تيموشنت', 'Aïn-Témouchent', NULL, NULL),
(47, '47', 'غرداية', 'Ghardaia', NULL, NULL),
(48, '48', 'غليزان', 'Relizane', NULL, NULL),
(49, '49', 'تيميمون', 'Timimoun', NULL, NULL),
(50, '50', 'برج باجي مختار', 'Bordj Badji Mokhtar', NULL, NULL),
(51, '51', 'أولاد جلال', 'Ouled Djellal', NULL, NULL),
(52, '52', 'بني عباس', 'Béni Abbès', NULL, NULL),
(53, '53', 'عين صالح', 'In Salah', NULL, NULL),
(54, '54', 'عين قزام', 'In Guezzam', NULL, NULL),
(55, '55', 'تقرت', 'Touggourt', NULL, NULL),
(56, '56', 'جانت', 'Djanet', NULL, NULL),
(57, '57', 'المغير', 'El Meghaier', NULL, NULL),
(58, '58', 'المنيعة', 'El Menia', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD KEY `category_product_category_id_foreign` (`category_id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `communes`
--
ALTER TABLE `communes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `communes_wilaya_id_foreign` (`wilaya_id`);

--
-- Indexes for table `commune_store`
--
ALTER TABLE `commune_store`
  ADD KEY `commune_store_commune_id_foreign` (`commune_id`),
  ADD KEY `commune_store_store_id_foreign` (`store_id`);

--
-- Indexes for table `customerdevices`
--
ALTER TABLE `customerdevices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customerdevices_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_key_unique` (`key`),
  ADD KEY `customers_commune_id_index` (`commune_id`);

--
-- Indexes for table `customer_notifications`
--
ALTER TABLE `customer_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_notifications_customer_id_foreign` (`customer_id`),
  ADD KEY `customer_notifications_store_id_foreign` (`store_id`),
  ADD KEY `customer_notifications_order_id_foreign` (`order_id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_customer_id_foreign` (`customer_id`),
  ADD KEY `favorites_product_id_foreign` (`product_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_index` (`product_id`);

--
-- Indexes for table `informations`
--
ALTER TABLE `informations`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_code_unique` (`code`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`),
  ADD KEY `orders_store_id_foreign` (`store_id`),
  ADD KEY `orders_commune_id_index` (`commune_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_store_id_index` (`store_id`),
  ADD KEY `products_unite_id_index` (`unite_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `savings`
--
ALTER TABLE `savings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `savings_customer_id_foreign` (`customer_id`),
  ADD KEY `savings_product_id_foreign` (`product_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_slider_offres_id_index` (`slider_offres_id`);

--
-- Indexes for table `slider_offres`
--
ALTER TABLE `slider_offres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storedevices`
--
ALTER TABLE `storedevices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `storedevices_store_id_foreign` (`store_id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stores_key_unique` (`key`),
  ADD KEY `stores_commune_id_index` (`commune_id`);

--
-- Indexes for table `store_notifications`
--
ALTER TABLE `store_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `store_notifications_customer_id_foreign` (`customer_id`),
  ADD KEY `store_notifications_store_id_foreign` (`store_id`),
  ADD KEY `store_notifications_order_id_foreign` (`order_id`);

--
-- Indexes for table `unites`
--
ALTER TABLE `unites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wilayas`
--
ALTER TABLE `wilayas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `communes`
--
ALTER TABLE `communes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1542;

--
-- AUTO_INCREMENT for table `customerdevices`
--
ALTER TABLE `customerdevices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `customer_notifications`
--
ALTER TABLE `customer_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=619;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `savings`
--
ALTER TABLE `savings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider_offres`
--
ALTER TABLE `slider_offres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `storedevices`
--
ALTER TABLE `storedevices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `store_notifications`
--
ALTER TABLE `store_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `unites`
--
ALTER TABLE `unites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wilayas`
--
ALTER TABLE `wilayas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `communes`
--
ALTER TABLE `communes`
  ADD CONSTRAINT `communes_wilaya_id_foreign` FOREIGN KEY (`wilaya_id`) REFERENCES `wilayas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `commune_store`
--
ALTER TABLE `commune_store`
  ADD CONSTRAINT `commune_store_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `commune_store_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customerdevices`
--
ALTER TABLE `customerdevices`
  ADD CONSTRAINT `customerdevices_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer_notifications`
--
ALTER TABLE `customer_notifications`
  ADD CONSTRAINT `customer_notifications_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customer_notifications_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `customer_notifications_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorites_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_unite_id_foreign` FOREIGN KEY (`unite_id`) REFERENCES `unites` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `savings`
--
ALTER TABLE `savings`
  ADD CONSTRAINT `savings_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `savings_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_slider_offres_id_foreign` FOREIGN KEY (`slider_offres_id`) REFERENCES `slider_offres` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `storedevices`
--
ALTER TABLE `storedevices`
  ADD CONSTRAINT `storedevices_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `store_notifications`
--
ALTER TABLE `store_notifications`
  ADD CONSTRAINT `store_notifications_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `store_notifications_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `store_notifications_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
