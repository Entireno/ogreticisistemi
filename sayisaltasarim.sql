-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 19 Oca 2019, 01:17:43
-- Sunucu sürümü: 5.6.34-log
-- PHP Sürümü: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sayisaltasarim`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim`
--

CREATE TABLE `egitim` (
  `id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `seviye` int(11) NOT NULL,
  `puan` int(11) NOT NULL,
  `zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `egitim`
--

INSERT INTO `egitim` (`id`, `o_id`, `seviye`, `puan`, `zaman`) VALUES
(20, 1, 3, 1, '2019-01-18 18:17:47'),
(21, 1, 3, 1, '2019-01-18 19:06:10'),
(22, 2, 3, 1, '2019-01-18 19:12:24'),
(23, 1, 3, 1, '2019-01-18 19:50:55'),
(24, 1, 3, 1, '2019-01-18 19:59:31'),
(25, 2, 3, 1, '2019-01-18 20:00:00'),
(26, 1, 3, 1, '2019-01-18 21:07:47'),
(27, 1, 3, 1, '2019-01-18 21:19:16'),
(28, 1, 2, 1, '2019-01-18 21:40:32'),
(29, 1, 3, 1, '2019-01-18 21:47:41'),
(30, 1, 4, 1, '2019-01-18 22:11:15');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `konular`
--

CREATE TABLE `konular` (
  `konu_id` int(11) NOT NULL,
  `konu_unitesi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `konu_basligi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `konu_icerigi` text COLLATE utf8_turkish_ci NOT NULL,
  `video_linki` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `konular`
--

INSERT INTO `konular` (`konu_id`, `konu_unitesi`, `konu_basligi`, `konu_icerigi`, `video_linki`) VALUES
(1, '3', 'İlk Konu', 'TÜRKÇE KARAKTER TEST', '<iframe width=\"859\" height=\"608\" src=\"https://www.youtube.com/embed/EjELnQMrc5E?list=PLDUOF2Be-kzmTqYsJTMZgGTAzq_ZIwxWz\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, '3', 'İkinci Konu Denemesi', 'DENEME', '<iframe width=\"859\" height=\"608\" src=\"https://www.youtube.com/embed/Zp03bNOg_fI?list=PLDUOF2Be-kzmTqYsJTMZgGTAzq_ZIwxWz\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, '1', 'ÜÇÜNCÜ KONU', 'DENEME', '<iframe width=\"859\" height=\"608\" src=\"https://www.youtube.com/embed/UYCHi27GYQo?list=PLDUOF2Be-kzmTqYsJTMZgGTAzq_ZIwxWz\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(4, '11', 'AND (VE) Kapısı ', 'Birbirine VE işlemi ile bağlı iki önermeden oluşan bir birleşik önermenin doğru olması,\r\nher iki önermenin de doğru olmasına bağlıdır.', '<iframe width=\"1015\" height=\"571\" src=\"https://www.youtube.com/embed/LAVNGeKjaro\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(5, '11', 'OR (VEYA) Kapısı ', 'Birbirine VEYA işlemi ile bağlı iki önermeden oluşan bir birleşik önermenin doğru\r\nolması, birleşik önermeyi meydana getiren önermelerden en az birinin doğru olmasına\r\nbağlıdır.', '<iframe width=\"1015\" height=\"571\" src=\"https://www.youtube.com/embed/LAVNGeKjaro\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci`
--

CREATE TABLE `ogrenci` (
  `id` int(11) NOT NULL,
  `ad` varchar(30) NOT NULL,
  `soyad` varchar(30) NOT NULL,
  `k_ad` varchar(24) NOT NULL,
  `sifre` varchar(200) NOT NULL,
  `eposta` varchar(50) NOT NULL,
  `tarih` date NOT NULL,
  `hakkimda` text,
  `resim` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ogrenci`
--

INSERT INTO `ogrenci` (`id`, `ad`, `soyad`, `k_ad`, `sifre`, `eposta`, `tarih`, `hakkimda`, `resim`, `facebook`, `twitter`, `instagram`) VALUES
(1, 'Görkem', 'Özdemir', 'entireno', '1e55dbf412cb74d5e2c21fb6452408c7', 'entireno@gmail.com', '2018-11-23', 'Web Developer', '1', 'ozdemir.gorkem58', '', 'klyvii'),
(2, 'Okan ', 'Akgöz', 'okan', '1e55dbf412cb74d5e2c21fb6452408c7', 'okankgz@gmail.com', '2022-07-08', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `url` varchar(50) NOT NULL,
  `durum` tinyint(1) NOT NULL,
  `tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uniteler`
--

CREATE TABLE `uniteler` (
  `unite_id` int(11) NOT NULL,
  `unite_adi` varchar(255) NOT NULL,
  `Baslik` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `uniteler`
--

INSERT INTO `uniteler` (`unite_id`, `unite_adi`, `Baslik`) VALUES
(1, 'Ünite 1', NULL),
(3, 'Ünite 3', NULL),
(10, 'Ünite 2', 'McKluskey'),
(11, 'Ünite 4', 'Lojik Devre Temelleri');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici`
--

CREATE TABLE `yonetici` (
  `id` int(11) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `soyad` varchar(255) NOT NULL,
  `k_ad` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hakkimda` varchar(255) DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yonetici`
--

INSERT INTO `yonetici` (`id`, `ad`, `soyad`, `k_ad`, `sifre`, `email`, `hakkimda`, `resim`, `facebook`, `twitter`, `instagram`) VALUES
(1, 'İbrahim', 'Türkoğlu', 'yonetici', '1e55dbf412cb74d5e2c21fb6452408c7', 'ibturkoglu@gmail.com', '', '1', 'ibturkoglu', '', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `egitim`
--
ALTER TABLE `egitim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `konular`
--
ALTER TABLE `konular`
  ADD PRIMARY KEY (`konu_id`);

--
-- Tablo için indeksler `ogrenci`
--
ALTER TABLE `ogrenci`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uniteler`
--
ALTER TABLE `uniteler`
  ADD PRIMARY KEY (`unite_id`);

--
-- Tablo için indeksler `yonetici`
--
ALTER TABLE `yonetici`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `egitim`
--
ALTER TABLE `egitim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- Tablo için AUTO_INCREMENT değeri `konular`
--
ALTER TABLE `konular`
  MODIFY `konu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `ogrenci`
--
ALTER TABLE `ogrenci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `uniteler`
--
ALTER TABLE `uniteler`
  MODIFY `unite_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Tablo için AUTO_INCREMENT değeri `yonetici`
--
ALTER TABLE `yonetici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
