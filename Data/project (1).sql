-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 08:04 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `article_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `type_id`, `id`, `article_text`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 1, 8, 'ถ้าเรามัวแต่สนใจว่า คนอื่นจะเห็นเราเป็นอย่างไรเราจะไม่มีวัน เห็นเราเป็นเรา', NULL, NULL, NULL),
(13, 1, 8, 'ข้อดีของการไม่ครอบครองสิ่งใด คือเราจะไม่ทุกข์จากสิ่งนั้น', NULL, NULL, NULL),
(14, 2, 8, 'การบ้านหรือจะสู้การนอน เก็บเอาไว้ก่อน ขอนอนก่อนละกัน', NULL, NULL, NULL),
(15, 2, 8, 'อยู่กับพี่ไม่มีหรอกสวัสดิการเพราะพี่ ไม่ใช่รัฐบาลที่จะคอยดูแลประชาชน', NULL, NULL, NULL),
(17, 3, 10, 'ช่วงนี้ไม่ค่อยได้คุยกัน ความสัมพันธ์เลยไม่ชัดเจน', NULL, NULL, NULL),
(18, 4, 10, 'It’s never too late to start again.', NULL, NULL, NULL),
(27, 1, 12, 'โตมาถึงได้รู้ ว่าชินจังไม่ใช่การ์ตูนแต่เป็นความรู้สึก', NULL, NULL, NULL),
(28, 1, 12, 'จงอยู่กับคนที่แสดงความรักให้ได้เห็น ดีกว่าพูดให้ได้ยิน', NULL, NULL, NULL),
(29, 1, 12, 'ไม่มียาตัวไหน รักษาแผลได้ดีเท่า ความเข้มแข็งของตัวเราเอง', NULL, NULL, NULL),
(30, 1, 12, 'ธรรมชาติสร้างให้ตาอยู่ข้างหน้า เพื่อสอนว่าอย่าหันหลังมองอตีต', NULL, NULL, NULL),
(31, 2, 12, 'ทีมเกรดไม่ดีแต่หน้าตาดีนะครับ ว้ายยยย', NULL, NULL, NULL),
(32, 2, 12, 'เหล้าดั่งลูกเศรษฐี เงินในบัญชีสั้นกว่ารหัสบัตร atm', NULL, NULL, NULL),
(34, 2, 12, 'กลัวเมียมันเสียระบบ แล้วเคยโดนเมียตบระบบพังป่ะ!', NULL, NULL, NULL),
(35, 2, 12, 'เห็นเกรดแล้วจะเป็นลม กูหยิบยาดมแทบไม่ทัน', NULL, NULL, NULL),
(36, 3, 12, 'ความรักไม่ได้ทำให้เราเจ็บหรอก …. ความทรงจำต่างหากที่เจ็บ', NULL, NULL, NULL),
(37, 3, 12, 'อยากมีแฟนที่อยู่ด้วยกันแล้วสบายใจ เข้าใจพากันสร้างอนาคตไปด้วยกัน ไม่ใช่หาเรื่องทะเลาะบั่นทอนจิตใจอยู่กันไปวันๆ', NULL, NULL, NULL),
(38, 3, 12, 'ถ้า’มีเเฟนเเล้ว’โปรดขึ้นสถานะ จะได้ไม่เป็นภาระต่อคน’เเอบชอบ’', NULL, NULL, NULL),
(39, 3, 12, 'บางทีเราก็แคร์บางคนมากไป จนลืมไปว่าเค้าก็ไม่ได้แคร์เราขนาดนั้น', NULL, NULL, NULL),
(41, 4, 12, 'When nothing is sure, everything is possible. ในเมื่อไม่มีอะไรแน่นอน ทุกอย่างก็เป็นไปได้ทั้งนั้น -มาร์กาเร็ต แดร็บเบิ้ล-', NULL, NULL, NULL),
(42, 4, 12, 'Sometimes it’s very hard to move on, but once you move on. you’ll realize it was the best decision you’ve ever made. บางครั้งมันก็เป็นเรื่องยากมากที่จะก้าวเดินต่อไป แต่ถ้าเริ่มก้าวเมื่อใดคุณจะพบว่ามันคือการตัดสินใจที่ดีที่สุด', NULL, NULL, NULL),
(43, 4, 12, 'Defeat is not the worst of failures. Not to have tried is the true failure. ความพ่ายแพ้ไม่ใช่ความล้มเหลวที่แย่ที่สุด แต่การไม่พยายามต่างหาก คือความล้มเหลว ที่แท้จริง', NULL, NULL, NULL),
(44, 4, 12, 'I did my best even if it’s not good enough for some people. “ฉันทำดีที่สุดแล้ว ถึงแม้จะไม่ได้ดีที่สุดสำหรับใครก็ตาม”', NULL, NULL, NULL);

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
(3, '2019_11_24_100600_create_type_table', 1),
(4, '2019_11_24_100619_create_article_table', 1);

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
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(10) UNSIGNED NOT NULL,
  `typeName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `typeName`, `created_at`, `updated_at`) VALUES
(1, 'คำคมโดนๆ', NULL, NULL),
(2, 'คำคมกวนๆ', NULL, NULL),
(3, 'คำคมเศร้าๆ', NULL, NULL),
(4, 'คำคมภาษาอังกฤษ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `email`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'พรหมพัฒน์   ชาญโชคประเสริฐ', 'guyprompat', '$2y$10$OZEdf1X2LI5Zw/dGdGJQZusvxXKTSDD.pjavJm7VtVhUd1SzgXjfi', 'guyynwa@gmail.com', '1', 'cQuQPWoQdT9Ko8oEZ6aENfSC5vhPyUE4H6kxjlnlfvhI0zDHFaPV5xD9uEj0', '2019-11-24 10:12:01', '2019-11-24 10:12:01'),
(8, 'พรหมพัฒน์   ชาญโชคประเสริฐ', 'guy', '$2y$10$QzWtv/knSDAxz7S6XiEZLuMbHWCDkkbY229xwhxypCbprJ3E321DO', 'guyynwa3@gmail.com', '0', 'qSvD8Dikxjs9cF5G8TtFvp0ZDs6F6zcLI8HVpU6vRho4KbByfTtJevPPVxS4', '2019-11-25 04:26:42', '2019-11-25 04:26:42'),
(10, 'ณรงค์ศึก   เตชะศรี', 'chacha', '$2y$10$fPYKd6wkPuIrTYS./qt2TOvFxoUacUBnOSfZ13NeDu108qwjuocSu', 'chacha3@gmail.com', '0', '6fR1OLZ0Ziwug3BgprzCye5AYBs1rMvSn3P49mJQYMxMBWmTlcC6iAMtwGN4', '2019-11-25 07:23:03', '2019-11-25 07:23:03'),
(12, 'ติยพล   ต่อติด', 'tiyapont', '$2y$10$w8R0RVftwJQcqPVKWDPk7uc.U/WMFJMnnxuT.KTyVRmFbrEfIXQBW', 'youyou2030@hotmail.co.th', '0', 'nIwiWuC51SgO8J4VBOqxVKbcAxV1207BjKDOV2PiauOvLe7kLl6FvAdJz7ya', '2019-11-25 11:50:03', '2019-11-25 11:50:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

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
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
