-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 10:38 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lina`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `uid` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `description` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `type` text COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT 'service'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`uid`, `name`, `description`, `price`, `image`, `type`) VALUES
(1, 'Trị Mụn Huyết Thanh Tảo Biển 155', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus purus quis tellus interdum, id mollis lectus dapibus. Phasellus velit ligula, pulvinar non finibus a, congue nec mauris. Nullam ac erat at justo interdum vehicula in id ex. Praesent sit amet sapien id nisl maximus vehicula a non nisi. Integer condimentum ante tortor, vitae congue justo tincidunt sed. Quisque consequat tortor ac velit rutrum, nec consectetur nibh mollis.', 192000, './images/huyetthanh.jpg', 'service'),
(2, 'Điều Trị Mụn Lưng', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus purus quis tellus interdum, id mollis lectus dapibus. Phasellus velit ligula, pulvinar non finibus a, congue nec mauris. Nullam ac erat at justo interdum vehicula in id ex. Praesent sit amet sapien id nisl maximus vehicula a non nisi. Integer condimentum ante tortor, vitae congue justo tincidunt sed. Quisque consequat tortor ac velit rutrum, nec consectetur nibh mollis.', 245000, './images/lung.jpg', 'service'),
(3, 'Liệu Trình Chăm Sóc Da Luxury', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus purus quis tellus interdum, id mollis lectus dapibus. Phasellus velit ligula, pulvinar non finibus a, congue nec mauris. Nullam ac erat at justo interdum vehicula in id ex. Praesent sit amet sapien id nisl maximus vehicula a non nisi. Integer condimentum ante tortor, vitae congue justo tincidunt sed. Quisque consequat tortor ac velit rutrum, nec consectetur nibh mollis.', 290000, './images/luxury.jpg', 'service'),
(4, 'Liệu Trình Carboxyl Thải Độc Da', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus purus quis tellus interdum, id mollis lectus dapibus. Phasellus velit ligula, pulvinar non finibus a, congue nec mauris. Nullam ac erat at justo interdum vehicula in id ex. Praesent sit amet sapien id nisl maximus vehicula a non nisi. Integer condimentum ante tortor, vitae congue justo tincidunt sed. Quisque consequat tortor ac velit rutrum, nec consectetur nibh mollis.', 290000, './images/cacbon.jpg', 'service'),
(5, 'Hút Chì Thải Độc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus purus quis tellus interdum, id mollis lectus dapibus. Phasellus velit ligula, pulvinar non finibus a, congue nec mauris. Nullam ac erat at justo interdum vehicula in id ex. Praesent sit amet sapien id nisl maximus vehicula a non nisi. Integer condimentum ante tortor, vitae congue justo tincidunt sed. Quisque consequat tortor ac velit rutrum, nec consectetur nibh mollis.', 260000, './images/hutchi.jpg', 'service'),
(7, 'Kem chống nắng nám Laaskin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus purus quis tellus interdum, id mollis lectus dapibus. Phasellus velit ligula, pulvinar non finibus a, congue nec mauris. Nullam ac erat at justo interdum vehicula in id ex. Praesent sit amet sapien id nisl maximus vehicula a non nisi. Integer condimentum ante tortor, vitae congue justo tincidunt sed. Quisque consequat tortor ac velit rutrum, nec consectetur nibh mollis.', 350000, './images/laaskin.jpg', 'product'),
(9, 'Mặt nạ tràm trà Laaskin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus purus quis tellus interdum, id mollis lectus dapibus. Phasellus velit ligula, pulvinar non finibus a, congue nec mauris. Nullam ac erat at justo interdum vehicula in id ex. Praesent sit amet sapien id nisl maximus vehicula a non nisi. Integer condimentum ante tortor, vitae congue justo tincidunt sed. Quisque consequat tortor ac velit rutrum, nec consectetur nibh mollis.', 1200000, './images/tram.jpg', 'product'),
(13, 'Trị Mụn Huyết Thanh Tảo Biển 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus purus quis tellus interdum, id mollis lectus dapibus. Phasellus velit ligula, pulvinar non finibus a, congue nec mauris. Nullam ac erat at justo interdum vehicula in id ex. Praesent sit amet sapien id nisl maximus vehicula a non nisi. Integer condimentum ante tortor, vitae congue justo tincidunt sed. Quisque consequat tortor ac velit rutrum, nec consectetur nibh mollis.', 195000, './images/huyetthanh.jpg', 'service'),
(15, 'Masssage 5 bước', 'Lorem Ipsum', 200000, 'https://cdn.spafinder.com/2015/08/swedish-massage.jpg', 'service');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `uid` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`uid`, `name`, `permissions`) VALUES
(1, 'Standard User', ''),
(2, 'Administrator', '{\"admin\": 1,\r\n\"moderator\" :1}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joined` datetime NOT NULL,
  `role` int(11) NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `name`, `joined`, `role`, `email`, `adress`, `phone`, `avatar`) VALUES
(20, 'namgold', '$2y$10$A6QittDzHKpxDFxZIau/2eZeAaond7gbbS8I9Ubkm00adiY3AOYkG', 'namgold', '2020-07-08 17:02:37', 2, '', '', '', ''),
(21, 'linhhy2', '$2y$10$Bn9bb79OXmZwzuhNcB50ies8pMymeNokB2odS.5lW7W74nGz8a09.', 'Hy Phạm Ngọc Linh', '2020-07-08 18:00:05', 1, '', '', '', ''),
(22, '123', '$2y$10$2EVSkVqzyKA7WDXUPaNvvu1nIvPJ5VrQzYmEgckWszT31q0R0p6.G', '123', '2020-07-09 03:52:21', 1, '', '', '', ''),
(23, 'linhhy', '$2y$10$XJWQQ7pr2i3hfXobduJRfOt9wuSJev3LtG.1knp2.hrxECavsbbDC', 'Linh admin', '2020-07-09 08:20:41', 2, '', '', '', ''),
(24, 'abc', '$2y$10$Nu1ypIn.3mLZzlBcKtRMsuK1QanVlTWVs3kLbt.RQF9xVkCeGSteS', 'abc', '2020-07-09 08:23:24', 1, '', '', '', ''),
(25, 'ádadasdasd', '$2y$10$ohVGYfBALEjAUWYRdHp7YuaxYZl31h./Um0n7sdRFvhFnSRJBzqNG', 'đáasd', '2020-07-09 08:24:18', 1, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_session`
--

CREATE TABLE `users_session` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users_session`
--
ALTER TABLE `users_session`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users_session`
--
ALTER TABLE `users_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
