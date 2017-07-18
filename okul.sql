-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Tem 2017, 22:04:03
-- Sunucu sürümü: 10.1.24-MariaDB
-- PHP Sürümü: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `okul`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `branslar`
--

CREATE TABLE `branslar` (
  `brans_id` int(11) NOT NULL,
  `brans_ismi` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dersler`
--

CREATE TABLE `dersler` (
  `ders_id` int(11) NOT NULL,
  `subeler_sube_id` int(11) NOT NULL,
  `subeler_sube_ismi` varchar(45) NOT NULL,
  `ogretmenler_ogretmen_id` int(11) NOT NULL,
  `donemler_donem_id` int(11) NOT NULL,
  `saatler_saat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `donemler`
--

CREATE TABLE `donemler` (
  `donem_id` int(11) NOT NULL,
  `donem_yil` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyurular`
--

CREATE TABLE `duyurular` (
  `duyuru_id` int(11) NOT NULL,
  `duyuru` text COLLATE utf8_turkish_ci,
  `baslik` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(12) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `duyurular`
--

INSERT INTO `duyurular` (`duyuru_id`, `duyuru`, `baslik`, `tarih`) VALUES
(4, '1.duyurum', '1.DUYURU', '13.7.2017'),
(5, '2.DUYURU', '2.DUYURU', '13.7.2017'),
(8, '3.duyuru', '3.duyuru', '13.7.2017'),
(9, '4.duyuru', '4.duyuru', '13.7.2017'),
(12, 'okulalr nasdbahsdkabkdgkagsdkgskdbfgşksdfşkbsdkşfbksşb kbk bkbsakş tatil işte amk sadm ajsdş jalsdn l', 'okul tatil..', '13.7.2017'),
(14, 'ibo pazara azz kaldÄ± uyumalÄ±sÄ±n', 'ibo uyu', '14.07.2017'),
(15, 'ABD Ligi ekiplerinden Los Angeles Galaxy, Ibrahimovic\'e yÄ±llÄ±k 27 milyon TL\'lik teklif yaptÄ±. Ä°sveÃ§li futbolcu kabul ederse, ligin gelmiÅŸ geÃ§miÅŸ en pahalÄ± futbolcusu olacak.', 'deneme', '14.07.2017'),
(16, 'deneme deneme denemdaisÅŸkdÅŸalsmdÅŸnsodjfn', 'muco', '15.07.2017');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haftalar`
--

CREATE TABLE `haftalar` (
  `hafta_id` int(11) NOT NULL,
  `hafta` varchar(45) DEFAULT NULL,
  `hafta_araligi` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `mesaj_id` int(11) NOT NULL,
  `baslik` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(12) COLLATE utf8_turkish_ci NOT NULL,
  `gonderen_id` int(11) NOT NULL,
  `alici_id` int(11) NOT NULL,
  `kim` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`mesaj_id`, `baslik`, `mesaj`, `tarih`, `gonderen_id`, `alici_id`, `kim`) VALUES
(1, 'merhab', ' masd', '16.07.2017', 17, 11, ''),
(2, 'merhab', ' deneme', '16.07.2017', 17, 2, ''),
(3, 'merhab', ' deneme', '16.07.2017', 17, 3, ''),
(4, 'merhab', ' deneme', '16.07.2017', 17, 9, ''),
(5, 'merhab', ' deneme', '16.07.2017', 17, 11, ''),
(6, 'merhaba', ' deneme', '16.07.2017', 17, 2, ''),
(7, 'merhaba', ' deneme', '16.07.2017', 17, 3, ''),
(8, 'merhaba', ' deneme', '16.07.2017', 17, 9, ''),
(9, 'merhaba', ' deneme', '16.07.2017', 17, 11, ''),
(10, 'merhaba', ' merhaba anÄ±l', '17.07.2017', 17, 90, ''),
(11, 'merhaba', 'Ã–ÄŸretmenlere ilk mesaj', '17.07.2017', 17, 2, ''),
(12, 'merhaba', 'Ã–ÄŸretmenlere ilk mesaj', '17.07.2017', 17, 8, ''),
(13, 'merhaba', 'Ã–ÄŸretmenlere ilk mesaj', '17.07.2017', 17, 16, ''),
(14, 'merhaba', ' YÃ¶neticilere ilk mesaj', '17.07.2017', 17, 15, ''),
(15, 'merhaba', ' YÃ¶neticilere ilk mesaj', '17.07.2017', 17, 17, ''),
(16, 'merhaba', ' YÃ¶neticilere ilk mesaj', '17.07.2017', 17, 19, ''),
(17, 'merhaba', ' YÃ¶neticilere ilk mesaj', '17.07.2017', 17, 20, ''),
(18, 'merhaba', ' merhaba ahmet', '17.07.2017', 15, 2, ''),
(19, 'merhaba', ' okulun ilk haftasÄ±', '17.07.2017', 17, 15, 'yÃ¶netici'),
(20, 'merhaba', ' okulun ilk haftasÄ±', '17.07.2017', 17, 17, 'yÃ¶netici'),
(21, 'merhaba', ' okulun ilk haftasÄ±', '17.07.2017', 17, 19, 'yÃ¶netici');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `notlar`
--

CREATE TABLE `notlar` (
  `notlar_id` int(11) NOT NULL,
  `yazili1` varchar(45) DEFAULT NULL,
  `yaziili2` varchar(45) DEFAULT NULL,
  `yazili3` varchar(45) DEFAULT NULL,
  `sozlu1` varchar(45) DEFAULT NULL,
  `sozlu2` varchar(45) DEFAULT NULL,
  `sozlu3` varchar(45) DEFAULT NULL,
  `ogrenci_ogrenci_id` int(11) NOT NULL,
  `dersler_ders_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenciler`
--

CREATE TABLE `ogrenciler` (
  `ogrenci_id` int(11) NOT NULL,
  `ogrenci_adi` varchar(45) DEFAULT NULL,
  `ogrenci_soyadi` varchar(45) DEFAULT NULL,
  `ogrenci_tckimlik` varchar(45) DEFAULT NULL,
  `ogrenci_numara` varchar(45) DEFAULT NULL,
  `subeler_sube_id` int(11) DEFAULT NULL,
  `subeler_sube_ismi` varchar(45) NOT NULL,
  `cinsiyet` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ogrenciler`
--

INSERT INTO `ogrenciler` (`ogrenci_id`, `ogrenci_adi`, `ogrenci_soyadi`, `ogrenci_tckimlik`, `ogrenci_numara`, `subeler_sube_id`, `subeler_sube_ismi`, `cinsiyet`) VALUES
(2, 'anıl', 'kobakoğlu', '53857505716', '33', NULL, '', ''),
(3, 'emre', 'demir', '12345678912', '10', NULL, '', ''),
(9, 'altay', 'altay', '123456789', '78', NULL, '', ''),
(11, 'ahmet', 'bozkurt', '46546', '8787', NULL, '', ''),
(12, 'merve', 'bozkurt', 'deneme', '88888888', NULL, '', ''),
(13, 'irem', 'derici', '4567896325', '454', NULL, '', ''),
(14, 'irem', 'bozkurt', 'deneme', 'kamuran@gmail.com', NULL, '', ''),
(86, 'selin', 'niles', '77777777', '8898', NULL, '', ''),
(87, 'abc', 'debnem', 'asd', 'asd', NULL, '', ''),
(88, 'ahmet', 'MEHMET', '46546', 'kamuran@gmail.com', NULL, '', ''),
(89, 'ibo', 'goksu', '753951852456', '85', NULL, '', 'erkek'),
(90, 'deli', 'veli', 'sanane', 'dedi', NULL, '', 'kÄ±z');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogretmenler`
--

CREATE TABLE `ogretmenler` (
  `ogretmen_id` int(11) NOT NULL,
  `ogretmen_adi` varchar(45) DEFAULT NULL,
  `ogretmen_soyadi` varchar(45) DEFAULT NULL,
  `ogretmen_brans` varchar(45) DEFAULT NULL,
  `branslar_brans_id` int(11) DEFAULT NULL,
  `kullaniciadi` varchar(45) DEFAULT NULL,
  `ogretmen_parola` varchar(45) DEFAULT NULL,
  `durum` varchar(10) DEFAULT NULL,
  `cinsiyet` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ogretmenler`
--

INSERT INTO `ogretmenler` (`ogretmen_id`, `ogretmen_adi`, `ogretmen_soyadi`, `ogretmen_brans`, `branslar_brans_id`, `kullaniciadi`, `ogretmen_parola`, `durum`, `cinsiyet`) VALUES
(2, 'ahmet', 'ahmet', 'mat', NULL, 'ahmet', 'ahmet1', '1', 0),
(8, 'mehmet', 'kaya', 'turkce', NULL, 'mehmet', 'mehmet1', '1', 0),
(15, 'irem', 'bozkurt', 'matematik', NULL, 'deneme', 'deneme', '0', 0),
(16, 'muco', 'aytekin', 'bote', NULL, 'muco', 'muco', '1', 1),
(17, 'anil', 'kobakoglu', 'bote', NULL, 'ako', 'ako', '0', 0),
(19, 'kamuran', 'ozkan', 'bote', NULL, 'kamuran', 'kamuran', '0', 0),
(20, 'ibrahim', 'goksu', 'matematik', NULL, 'ibo7', 'goksu7', '0', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `saatler`
--

CREATE TABLE `saatler` (
  `saat_id` int(11) NOT NULL,
  `saatler` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `subeler`
--

CREATE TABLE `subeler` (
  `sube_id` int(11) NOT NULL,
  `sube_ismi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veliler`
--

CREATE TABLE `veliler` (
  `veli_id` int(11) NOT NULL,
  `veli_adi` varchar(45) NOT NULL,
  `veli_soyadi` varchar(45) NOT NULL,
  `ogrenci_ogrenci_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yoklama`
--

CREATE TABLE `yoklama` (
  `yoklama_id` int(11) NOT NULL,
  `dersler_ders_id` int(11) NOT NULL,
  `ogrenci_ogrenci_id` int(11) NOT NULL,
  `sayi` varchar(45) NOT NULL,
  `haftalar_hafta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `branslar`
--
ALTER TABLE `branslar`
  ADD PRIMARY KEY (`brans_id`),
  ADD UNIQUE KEY `brans_id_UNIQUE` (`brans_id`);

--
-- Tablo için indeksler `dersler`
--
ALTER TABLE `dersler`
  ADD PRIMARY KEY (`ders_id`),
  ADD KEY `fk_dersler_subeler1_idx` (`subeler_sube_id`,`subeler_sube_ismi`),
  ADD KEY `fk_dersler_ogretmenler1_idx` (`ogretmenler_ogretmen_id`),
  ADD KEY `fk_dersler_donemler1_idx` (`donemler_donem_id`),
  ADD KEY `fk_dersler_saatler1_idx` (`saatler_saat_id`);

--
-- Tablo için indeksler `donemler`
--
ALTER TABLE `donemler`
  ADD PRIMARY KEY (`donem_id`),
  ADD UNIQUE KEY `donem_id_UNIQUE` (`donem_id`);

--
-- Tablo için indeksler `duyurular`
--
ALTER TABLE `duyurular`
  ADD UNIQUE KEY `duyuru_id` (`duyuru_id`);

--
-- Tablo için indeksler `haftalar`
--
ALTER TABLE `haftalar`
  ADD PRIMARY KEY (`hafta_id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`mesaj_id`);

--
-- Tablo için indeksler `notlar`
--
ALTER TABLE `notlar`
  ADD PRIMARY KEY (`notlar_id`),
  ADD UNIQUE KEY `notlar_id_UNIQUE` (`notlar_id`),
  ADD KEY `fk_notlar_ogrenci1_idx` (`ogrenci_ogrenci_id`),
  ADD KEY `fk_notlar_dersler1_idx` (`dersler_ders_id`);

--
-- Tablo için indeksler `ogrenciler`
--
ALTER TABLE `ogrenciler`
  ADD PRIMARY KEY (`ogrenci_id`),
  ADD UNIQUE KEY `ogrenci_id_UNIQUE` (`ogrenci_id`),
  ADD KEY `fk_ogrenci_subeler1_idx` (`subeler_sube_id`,`subeler_sube_ismi`);

--
-- Tablo için indeksler `ogretmenler`
--
ALTER TABLE `ogretmenler`
  ADD PRIMARY KEY (`ogretmen_id`),
  ADD UNIQUE KEY `ogretmen_id_UNIQUE` (`ogretmen_id`),
  ADD KEY `fk_ogretmenler_branslar1_idx` (`branslar_brans_id`);

--
-- Tablo için indeksler `saatler`
--
ALTER TABLE `saatler`
  ADD PRIMARY KEY (`saat_id`);

--
-- Tablo için indeksler `subeler`
--
ALTER TABLE `subeler`
  ADD PRIMARY KEY (`sube_id`,`sube_ismi`);

--
-- Tablo için indeksler `veliler`
--
ALTER TABLE `veliler`
  ADD PRIMARY KEY (`veli_id`),
  ADD UNIQUE KEY `veli_id_UNIQUE` (`veli_id`),
  ADD KEY `fk_veliler_ogrenci_idx` (`ogrenci_ogrenci_id`);

--
-- Tablo için indeksler `yoklama`
--
ALTER TABLE `yoklama`
  ADD PRIMARY KEY (`yoklama_id`),
  ADD UNIQUE KEY `yoklama_id_UNIQUE` (`yoklama_id`),
  ADD KEY `fk_yoklama_dersler1_idx` (`dersler_ders_id`),
  ADD KEY `fk_yoklama_ogrenci1_idx` (`ogrenci_ogrenci_id`),
  ADD KEY `fk_yoklama_haftalar1_idx` (`haftalar_hafta_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `branslar`
--
ALTER TABLE `branslar`
  MODIFY `brans_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `dersler`
--
ALTER TABLE `dersler`
  MODIFY `ders_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `donemler`
--
ALTER TABLE `donemler`
  MODIFY `donem_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `duyurular`
--
ALTER TABLE `duyurular`
  MODIFY `duyuru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `mesaj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Tablo için AUTO_INCREMENT değeri `notlar`
--
ALTER TABLE `notlar`
  MODIFY `notlar_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `ogrenciler`
--
ALTER TABLE `ogrenciler`
  MODIFY `ogrenci_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- Tablo için AUTO_INCREMENT değeri `ogretmenler`
--
ALTER TABLE `ogretmenler`
  MODIFY `ogretmen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Tablo için AUTO_INCREMENT değeri `saatler`
--
ALTER TABLE `saatler`
  MODIFY `saat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `veliler`
--
ALTER TABLE `veliler`
  MODIFY `veli_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `yoklama`
--
ALTER TABLE `yoklama`
  MODIFY `yoklama_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `dersler`
--
ALTER TABLE `dersler`
  ADD CONSTRAINT `fk_dersler_donemler1` FOREIGN KEY (`donemler_donem_id`) REFERENCES `donemler` (`donem_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dersler_ogretmenler1` FOREIGN KEY (`ogretmenler_ogretmen_id`) REFERENCES `ogretmenler` (`ogretmen_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dersler_saatler1` FOREIGN KEY (`saatler_saat_id`) REFERENCES `saatler` (`saat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dersler_subeler1` FOREIGN KEY (`subeler_sube_id`,`subeler_sube_ismi`) REFERENCES `subeler` (`sube_id`, `sube_ismi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Tablo kısıtlamaları `notlar`
--
ALTER TABLE `notlar`
  ADD CONSTRAINT `fk_notlar_dersler1` FOREIGN KEY (`dersler_ders_id`) REFERENCES `dersler` (`ders_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_notlar_ogrenci1` FOREIGN KEY (`ogrenci_ogrenci_id`) REFERENCES `ogrenciler` (`ogrenci_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Tablo kısıtlamaları `ogrenciler`
--
ALTER TABLE `ogrenciler`
  ADD CONSTRAINT `fk_ogrenci_subeler1` FOREIGN KEY (`subeler_sube_id`,`subeler_sube_ismi`) REFERENCES `subeler` (`sube_id`, `sube_ismi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Tablo kısıtlamaları `ogretmenler`
--
ALTER TABLE `ogretmenler`
  ADD CONSTRAINT `fk_ogretmenler_branslar1` FOREIGN KEY (`branslar_brans_id`) REFERENCES `branslar` (`brans_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Tablo kısıtlamaları `veliler`
--
ALTER TABLE `veliler`
  ADD CONSTRAINT `fk_veliler_ogrenci` FOREIGN KEY (`ogrenci_ogrenci_id`) REFERENCES `ogrenciler` (`ogrenci_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Tablo kısıtlamaları `yoklama`
--
ALTER TABLE `yoklama`
  ADD CONSTRAINT `fk_yoklama_dersler1` FOREIGN KEY (`dersler_ders_id`) REFERENCES `dersler` (`ders_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_yoklama_haftalar1` FOREIGN KEY (`haftalar_hafta_id`) REFERENCES `haftalar` (`hafta_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_yoklama_ogrenci1` FOREIGN KEY (`ogrenci_ogrenci_id`) REFERENCES `ogrenciler` (`ogrenci_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
