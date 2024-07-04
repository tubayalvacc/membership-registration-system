-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:8889
-- Üretim Zamanı: 04 Tem 2024, 16:12:47
-- Sunucu sürümü: 5.7.39
-- PHP Sürümü: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `member_register`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1544635225, 'karanbirdag', '123456'),
(1544635226, 'merveysen', 'admin123'),
(1544635227, 'ahmetsari', 'p@ssw0rd'),
(1544635228, 'aslitaskin', 'securepass'),
(1544635229, 'burakozturk', 'adminpass'),
(1544635230, 'selindemir', 'pass123'),
(1544635231, 'emrealtin', 'adminadmin'),
(1544635232, 'elifcetin', 'password'),
(1544635233, 'mertkara', 'admin1234'),
(1544635234, 'aylinsari', 'securepass123'),
(1544635235, 'onurozturk', 'adminpass123'),
(1544635236, 'melisgenc', 'passpass'),
(1544635237, 'emineerdogan', 'adminadmin123'),
(1544635238, 'muratyalcin', 'password123'),
(1544635239, 'sevilaykaya', 'adminsecure'),
(1544635240, 'oguzatas', 'passpass123'),
(1544635241, 'elifdemir', 'adminpassword'),
(1544635242, 'mehmetunal', 'secureadmin'),
(1544635243, 'denizcetin', 'pass1234'),
(1544635244, 'gizemcengiz', 'adminpass@123'),
(1544635245, 'emrealtun', 'securepass@123'),
(1544635246, 'asliyilmaz', 'passpass@123'),
(1544635247, 'berkcetin', 'adminadmin@123'),
(1544635248, 'elifkaya', 'password@123'),
(1544635249, 'emreakin', 'adminsecure@123'),
(1544635250, 'aydinyildirim', 'passpass123@'),
(1544635251, 'mehmetcengiz', 'adminpassword123'),
(1544635252, 'sevincdemir', 'secureadmin123'),
(1544635253, 'zeynepcetin', 'pass12345'),
(1544635254, 'serdarcetin', 'adminpass@12345'),
(1544635255, 'mehmetcetin', 'securepass@12345'),
(1544635256, 'emrecetin', 'passpass@12345'),
(1544635257, 'mervegenc', 'adminadmin@12345'),
(1544635258, 'aslikaya', 'password@12345'),
(1544635259, 'mehmetaksoy', 'adminsecure@12345'),
(1544635260, 'selincengiz', 'passpass12345'),
(1544635261, 'elifgenc', 'adminpassword12345'),
(1544635262, 'emreekin', 'secureadmin12345'),
(1544635263, 'sevincaltun', 'pass123456'),
(1544635264, 'zeynepyilmaz', 'adminpass@123456'),
(1544635265, 'serdaryilmaz', 'securepass@123456'),
(1544635266, 'mehmetgenc', 'passpass@123456'),
(1544635267, 'merveyilmaz', 'adminadmin@123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'AYŞE BULUT', 'aysebulut@mail.com', '123456', '2024-07-04 14:08:13'),
(3, 'ZEHRA KAYA', 'zehrakaya@mail.com', 'securepass', '2024-07-04 14:10:18'),
(4, 'EMRE DEMIR', 'emredemir@mail.com', 'p@ssw0rd', '2024-07-04 14:11:07'),
(5, 'SELMA YILDIZ', 'selmayildiz@mail.com', 'pass1234', '2024-07-04 14:12:09'),
(6, 'ALI AKSU', 'aliaksu@mail.com', 'qwerty', '2024-07-04 14:13:01'),
(7, 'GÜL DEMIR', 'guldemir@mail.com', '987654', '2024-07-04 14:14:12'),
(8, 'HASAN OZTURK', 'hasanozturk@mail.com', 'password321', '2024-07-04 14:15:03'),
(9, 'MERVE KOC', 'mervekoc@mail.com', 'mypass', '2024-07-04 14:16:15'),
(10, 'SERKAN YILMAZ', 'serkanyilmaz@mail.com', 'password456', '2024-07-04 14:17:29'),
(11, 'NURCAN BAYRAK', 'nurcanbayrak@mail.com', 'abc123', '2024-07-04 14:18:18'),
(12, 'OSMAN AYDIN', 'osmanaydin@mail.com', 'securepassword', '2024-07-04 14:19:20'),
(13, 'SEMA DEMIR', 'semademir@mail.com', 'password789', '2024-07-04 14:20:10'),
(14, 'MURAT TEKIN', 'murattekin@mail.com', 'passpass', '2024-07-04 14:21:05'),
(15, 'AYLIN YILDIRIM', 'aylinyildirim@mail.com', '123abc', '2024-07-04 14:22:17'),
(16, 'EMIN YILMAZ', 'eminyilmaz@mail.com', 'passpass123', '2024-07-04 14:23:08'),
(17, 'SEMA YILMAZ', 'semayilmaz@mail.com', 'password1234', '2024-07-04 14:24:19'),
(18, 'DENIZ DEMIR', 'denizdemir@mail.com', 'mypassword', '2024-07-04 14:25:21'),
(19, 'MUSTAFA AYDIN', 'mustafaaydin@mail.com', '123456789', '2024-07-04 14:26:13'),
(20, 'SELIM DEMIR', 'selimdemir@mail.com', 'passpass123', '2024-07-04 14:27:05'),
(21, 'SILA YILMAZ', 'silayilmaz@mail.com', 'securepass123', '2024-07-04 14:28:17'),
(22, 'DENIZ OZTURK', 'denizozturk@mail.com', 'myp@ssword', '2024-07-04 14:29:28'),
(23, 'BUSE KAYA', 'busekaya@mail.com', 'password!@#', '2024-07-04 14:30:19'),
(24, 'KEREM TEKIN', 'keremtekin@mail.com', 'pass123!@#', '2024-07-04 14:31:11'),
(25, 'MERVE YILMAZ', 'merveyilmaz@mail.com', 'password!@#123', '2024-07-04 14:32:23'),
(26, 'EMIR DEMIR', 'emirdemir@mail.com', 'securepass!@#', '2024-07-04 14:33:14'),
(27, 'EDA AYDIN', 'edaaydin@mail.com', 'pass1234!@#', '2024-07-04 14:34:25'),
(28, 'ALI YILMAZ', 'aliyilmaz@mail.com', 'myp@ss123', '2024-07-04 14:35:27'),
(29, 'SELIN KAYA', 'selinkaya@mail.com', 'secure!@#123', '2024-07-04 14:36:18'),
(30, 'ARDA TEKIN', 'ardatekin@mail.com', 'password@!#123', '2024-07-04 14:37:30'),
(49, 'ZEHRA BALAT', 'zehrabalatt@mail.com', '$2y$10$5tE9JXHv71aoT7KlYUuM3efA1ZiX4nKTD.lgmLNHLJZZ5i1Yak/HW', '2024-07-04 15:03:13'),
(51, 'ZEHRA BALAT ALA', 'zehrabalatala@mail.com', '$2y$10$5y.cn84qBg8w1vHXfoe1/.e9l0w2lNjt6hJxcaBK5OjAXYhvW6YtK', '2024-07-04 15:07:22'),
(52, 'KAHRAMAN BOLU', 'kahramanbolu@mail.com', '$2y$10$P.sN0k2.7ZpsevW0KpdsR.dp7dKOpUl4bTIYUWh/CMtqz0S5N6/RG', '2024-07-04 15:09:51'),
(53, 'Karahanlı MEHMET', 'karahanmhmt@mail.com', '4847237835734578', '2024-07-04 15:31:35'),
(60, 'ANALA TOR', 'anala@mail.com', '$2y$10$6UwqhDOopV.2PQHLwd9QwOXjD0SM3UNzYlPPa8GTTXsQUsJFz8s7m', '2024-07-04 15:53:50'),
(61, 'Hale GÜLER', 'hale@mail.com', '$2y$10$eKjngQNRNojUDzFu/FHUIeDBUk5Og62PslMeFul7ZkE8vUEv/d226', '2024-07-04 15:54:44'),
(63, 'MyName Surname', 'myemail@mail.com', '$2y$10$/m0Dumy7Y2qpqYF0XUiLPe3NGr6xlm1OJFetc6CbZYy3oVjnaW3Q.', '2024-07-04 16:11:24');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1544635268;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
