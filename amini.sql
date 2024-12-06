-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2024 at 04:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amini`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `title` varchar(40) NOT NULL,
  `descrip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`title`, `descrip`) VALUES
('درباره  تامین سایش البرز', 'شرکت تامین سایش البرز با کادری تحصیلکرده  و آشنا به مباحث تولید  و فروش محصولات سایشی   با برند تجاری subasayesh  در سال 1399   فعالیت خود را آغاز نمود،موسسان تامین سایش البرز پیگیر چند هدف میباشند\r\n\r\n * ارتقای دانش فنی کشور در خصوص سنباده و اسکاج و فرایندهای سایشی\r\n * تولید و تامین محصولات با کیفیت برای صنایع مختلف\r\n* تولید محصولات سایشی با کیفیت در جهت جلوگیری از خروج ارز از کشور و خودکفایی\r\n* صادرات محصولات تولید شده به بازارهای منطقه ای\r\n\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `body` text NOT NULL,
  `src1` varchar(255) NOT NULL,
  `key1` varchar(100) NOT NULL,
  `src2` varchar(255) NOT NULL,
  `key2` varchar(100) NOT NULL,
  `src3` varchar(255) NOT NULL,
  `key3` varchar(100) NOT NULL,
  `src4` varchar(255) NOT NULL,
  `key4` varchar(100) NOT NULL,
  `is_featured` tinyint(4) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `body`, `src1`, `key1`, `src2`, `key2`, `src3`, `key3`, `src4`, `key4`, `is_featured`, `data`) VALUES
(1, 'سمباده هزارلا 454446', 'جهت باربرداری بر روی سطوح انواع فلزات ، چوب و سرامیک مورد استفاده قرار میگیرد\r\nو در اندازه های 50*165 --30*165--50*200 و....موجود میباشد', '1', 'img1', '2', 'img2', '3', 'img3', '', '', 0, '2024-12-05 06:47:48'),
(2, 'سمباده اسکاچ هزارلا', 'جهت باربرداری  و صیقل بر روی سطوح انواع فلزات ، چوب و سرامیک مورد استفاده قرار میگیرد\r\nو در اندازه های 50*165 --30*165--50*200 و....موجود میباشد', '', '', '', '', '', '', '', '', 0, '2024-12-05 06:40:39'),
(3, 'اسکاچ هزارلا', 'جهت  صیقل بر روی سطوح انواع فلزات ، چوب و سرامیک مورد استفاده قرار میگیرد\r\nو در اندازه های 50*165 --30*165--50*200 و....موجود میباشد', '', '', '', '', '', '', '', '', 0, '2024-12-05 06:40:50'),
(4, 'سمباده چتری (سردریلی)', 'سمباده چتری (سردریلی) برای باربرداری    انواع سطوح غیر قابل دسترس فلزی و غیر فلزی، چوب، سرامیک و پلاستیک استفاده می‌شود.\r\nسمباده چتری (سردریلی)  بستگی بر اساس نوع و قطری که سفارش می‌دهید، مشخص می‌شود.\r\n این ابزار همانطور که از نامش مشخص است به دریل بسته می‌شود', '', '', '', '', '', '', '', '', 0, '2024-12-05 06:40:58'),
(5, 'سمباده اسکاچ چتری(سردریلی)', '\r\nسمباده اسکاچ چتری(سردریلی)  برای باربرداری  و صیقل  انواع سطوح غیر قابل دسترس فلزی و غیر فلزی، چوب، سرامیک و پلاستیک استفاده می‌شود.\r\nسمباده اسکاچ چتری(سردریلی) بستگی بر اساس نوع و قطری که سفارش می‌دهید، مشخص می‌شود.\r\n این ابزار همانطور که از نامش مشخص است به دریل بسته می‌شود', '', '', '', '', '', '', '', '', 0, '2024-12-05 06:41:02'),
(6, 'اسکاچ چتری (سردریلی)', 'اسکاچ  چتری (سردریلی)  برای صیقل  انواع سطوح غیر قابل دسترس فلزی و غیر فلزی، چوب، سرامیک و پلاستیک استفاده می‌شود.\r\nقیمت اسکاچ سردریلی بستگی بر اساس نوع و قطری که سفارش می‌دهید، مشخص می‌شود.\r\n این ابزار همانطور که از نامش مشخص است به دریل بسته می‌شود', '', '', '', '', '', '', '', '', 0, '2024-12-05 06:41:05'),
(7, 'رول سمباده', 'رل سمباده که به صورت برش خورده در عرضهای مختلف و همچنین جامبورول موجود میباشد', '', '', '', '', '', '', '', '', 0, '2024-12-05 06:41:08'),
(8, 'رول اسکاچ', 'رل اسکاج که به صورت برش خورده در عرضهای مختلف و همچنین جامبورول موجود میباشد', '', '', '', '', '', '', '', '', 0, '2024-12-05 06:41:12'),
(21, 'Consequat Eos eum ', 'Dolorem nulla qui ac', '../upload/1.png', 'Nisi Nam adipisicing', '../upload/2.jpg', 'Sint nisi veritatis', '../upload/3.jpg', 'Eos voluptatem Qua', '../upload/4.png', 'Cillum voluptatem e', 1, '2024-12-06 13:43:22'),
(22, 'Ex aspernatur in min', 'Dignissimos in venia', '../upload/3.jpg', 'Nisi qui voluptas qu', '../upload/4.png', 'Officiis esse impedi', '../upload/360_F_525080936_JEpnKXh2siYKBPpsqd98pbbcIzy4ySKz.jpg', 'Quis ut corrupti be', '../upload/thumb-1920-1289303.png', 'Perspiciatis repreh', 0, '2024-12-06 15:02:49'),
(23, 'Consequat Eos eum ', 'Dolorem nulla qui ac', '../upload/1.png', 'Nisi Nam adipisicing', '../upload/1.png', 'Sint nisi veritatis', '../upload/1.png', 'Eos voluptatem Qua', '../upload/1.png', 'Cillum voluptatem e', 1, '2024-12-06 15:06:10'),
(24, 'test24', 'test24', 'Array', 'test', 'Array', 'test', 'Array', 'test', 'Array', 'test', 1, '2024-12-06 15:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_uid` tinytext NOT NULL,
  `users_pwd` longtext NOT NULL,
  `users_email` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_uid`, `users_pwd`, `users_email`) VALUES
(1, 'amini', '$2y$10$aq.1K4P4KbfB2XpQR/X1DuhG06a.52YKntWUSDmv23Daj6Lh5/n52', 'amini@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
