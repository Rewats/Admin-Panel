-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 Oca 2021, 15:53:59
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `websitem`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `ad` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soyad` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eposta` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sifre` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `ad`, `soyad`, `eposta`, `sifre`) VALUES
(1, 'Emre', 'Karadereli', 'emrekaradereli0@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilgi`
--

CREATE TABLE `bilgi` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `ad` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icerik` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `bilgi`
--

INSERT INTO `bilgi` (`id`, `ad`, `icerik`) VALUES
(1, 'Hakkımızda', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sollicitudin mauris justo, eget ultricies lorem pellentesque sed. Curabitur consectetur, elit sit amet sollicitudin efficitur, mi felis condimentum dui, at imperdiet dui libero vitae erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris scelerisque lobortis cursus. Praesent posuere augue sed ipsum tincidunt dapibus. '),
(2, 'Emre Karadereli', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim`
--

CREATE TABLE `egitim` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `adi` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipi` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baslama` year(4) NOT NULL,
  `bitis` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `egitim`
--

INSERT INTO `egitim` (`id`, `adi`, `tipi`, `baslama`, `bitis`) VALUES
(14, 'İstiklal İlköğretim Okulu', 'İlkokul - Ortaokul', 2007, 2014),
(15, 'Ümraniye Anadolu İHL', 'Lise', 2014, 2018),
(16, 'Mehmet Akif Ersoy Üniversitesi - Yönetim Bilişim Sistemleri', 'Lisans', 2018, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `headerlar`
--

CREATE TABLE `headerlar` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `header1` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header2` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header3` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header4` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `headerlar`
--

INSERT INTO `headerlar` (`id`, `header1`, `header2`, `header3`, `header4`) VALUES
(1, 'Anasayfa', 'Yazılar', 'Galeri', 'Admin Panel');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `adi` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soyadi` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesaj` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`id`, `adi`, `soyadi`, `email`, `mesaj`) VALUES
(55, 'asdasd', 'asdasd', 'emrekaradereli0@gmail.com', 'deneme 1231231'),
(56, 'EMRE', 'KARADERELİ', 'emrekaradereli0@gmail.com', 'DENEME 1'),
(57, 'EMRE', 'KARADERELİ', 'emrekaradereli0@gmail.com', 'DENEME 1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimler`
--

CREATE TABLE `resimler` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `adi` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `resimler`
--

INSERT INTO `resimler` (`id`, `adi`) VALUES
(20, 'Roman Empire'),
(21, 'HRE'),
(22, 'Osman1'),
(23, 'En Büyük Kebab'),
(24, 'HRE2'),
(27, 'Fail Roma');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `eposta` (`eposta`);

--
-- Tablo için indeksler `bilgi`
--
ALTER TABLE `bilgi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `egitim`
--
ALTER TABLE `egitim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `headerlar`
--
ALTER TABLE `headerlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `resimler`
--
ALTER TABLE `resimler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `bilgi`
--
ALTER TABLE `bilgi`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `egitim`
--
ALTER TABLE `egitim`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `headerlar`
--
ALTER TABLE `headerlar`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Tablo için AUTO_INCREMENT değeri `resimler`
--
ALTER TABLE `resimler`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
