-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 31 May 2024, 01:09:45
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hzalidb`
--
CREATE DATABASE IF NOT EXISTS `hzalidb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hzalidb`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(150) NOT NULL,
  `ptype` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`ID`, `pname`, `ptype`, `image`, `price`) VALUES
(1, 'Hz Ali Aslan Temalı T-shirt', 'T-shirt', './images/tshirtforsale.jpg', 50),
(2, 'Hz.Ali Tshirt', 'T-Shirt', './images/alitshirtt.png', 50),
(3, 'Zülfikar Kolye', 'Kolye', './images/zulfikarkolye.png', 50),
(4, 'Hz.Ali Tablo', 'Tablo', './images/tabloali.png', 1000);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `phone` bigint(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`ID`, `name`, `lastname`, `email`, `username`, `password`, `gender`, `phone`, `address`) VALUES
(12, 'Tolga', 'ÜNLÜ', 'tolgaunlu1999@hotmail.com', 'tunlu1999', 'T1o2l3g4a5', 'm', 5532243683, 'Maltepe mah şehit bahadır demir sokak tunç apartmanı 12/3 Ankara/Çankaya/Maltepe Mah.'),
(17, 'Alperen', 'Akdemir', 'alevlialevialpi@gmail.com', 'BestAlevi99', '22112211', 'm', 902321231321, 'Maltepe mah şehit bahadır demir sokak tunç apartmanı 12/3 Ankara/Çankaya/Maltepe Mah.'),
(19, 'Cenk', 'Ceylan', 'cenkceylan@hotmail.com', 'cenkcey', '22112211', 'm', 90553214321321, 'asdasdasdasdsa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
