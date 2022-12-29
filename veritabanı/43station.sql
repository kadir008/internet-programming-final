-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 29 Ara 2022, 21:01:17
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `43station`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bolum`
--

DROP TABLE IF EXISTS `bolum`;
CREATE TABLE IF NOT EXISTS `bolum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aciklama` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gorselurl` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bolumid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `bolum`
--

INSERT INTO `bolum` (`id`, `baslik`, `aciklama`, `gorselurl`, `bolumid`) VALUES
(1, 'Türkçe Pop | Hareketli Şarkılar', 'Dinlerken yerinde duramayacağın en hareketli şarkıları senin için derledik. İşte Ece Mumay, Edis ve Tarkan gibi şarkıcıların hareketli şarkılarının yer aldığı çalma listesi...', 'https://i.hizliresim.com/eukpdhz.jpg', 0),
(2, 'Yabancı Pop | Hareketli Şarkılar', 'Yerinde duramayanlar için yabancı popun en hareketli şarkılarını derledik. İşte Justın Tımberlake, Lady Gaga ve Shakira\'nın bomba gibi şarkılarının yer aldığı çalma listesi...', 'https://i.hizliresim.com/bz60dkf.jpg', 0),
(3, 'Türkçe Rock | Hareketli Şarkılar', 'Hareketli Türkçe rock şarkıları bu çalma listesinde bulabilirsin. İşte Pamela ve Gökçe gibi şarkıcıların hareketli rock şarkılarını dinleyebileceğin çalma listesi...', 'https://i.hizliresim.com/trxtk77.jpg', 0),
(4, 'Yaz Şarkıları | Hareketli Şarkılar', 'Yaz aylarının vazgeçilmez şarkılarını senin için derledik. İşte Türkçe Pop\'un rengarenk, yaz sıcaklığındaki şarkılarını dinleyebileceğin çalma listesi...', 'https://i.hizliresim.com/9c5qbux.jpg', 0),
(5, 'Karadeniz | Hareketli Şarkılar', 'En güzel Karadeniz şarkıları dinlemek için doğru yerdesiniz. 7/24 dinle ile Karadeniz türküleri ve şarkıları en sevilen Karadeniz sanatçıları ile sizlerle.', 'https://i.hizliresim.com/sa7vels.jpg', 0),
(6, 'Hareketli Türk Sanat Müziği', 'Hareketli Türk Sanat Müziği şarkılarını bu çalma listesinde bulabilirsin. İşte Safiye Ayla, Emel Sayın ve Zeki Müren gibi müzisyenlerin şarkılarını dinleyebileceğin çalma listesi...', 'https://i.hizliresim.com/8rfmivx.jpg', 0),
(7, 'Pop Nostalji', '70\'ler ve 80\'lerden özenle seçtiğimiz efsaneleşmiş pop şarkıları senin için derledik. İşte Nesrin Sipahi, Nilüfer ve Semiramis Pekkan gibi unutulmaz şarkıcıların şarkılarının yer aldığı çalma listesi...', 'https://i.hizliresim.com/setm336.jpg', 1),
(8, 'Anadolu Rock Nostalji', 'Cem Karaca\'dan Barış Manço\'ya kadar birçok Anadolu Rock efsanelerinin şarkılarının yer aldığı çalma listesi...', 'https://i.hizliresim.com/pyl7i9f.jpg', 1),
(9, 'Eski Şarkılar', 'Zamanın ötesinde bir güzelliğe sahip olan efsaneleşmiş şarkıları bu çalma listesinde bulabilirsin. İşte Uğur Akdora, Cici Kızlar ve Esmeray\'ın şarkılarının yer aldığı çalma listesi...', 'https://i.hizliresim.com/lorwp0p.jpg', 1),
(10, '45\'lik Nostalji', 'Her dönem sıkılmadan dinlediğimiz ölümsüz eserlerin yer aldığı şarkıları bu çalma listesinde bulabilirsin. İşte Füsun Önal, Gönül Akkor ve Semiramis Pekkan\'ın şarkılarının yer aldığı çalma listesi...', 'https://i.hizliresim.com/qp1a8gu.jpg', 1),
(11, 'Efsane Şarkılar', 'Yıllar geçse de eskimeyen muhteşem eserleri senin için derledik. İşte geçmişten günümüze ulaşan efsane şarkılar...', 'https://i.hizliresim.com/f0e8yod.jpg', 1),
(12, 'Retro Şarkılar', 'Dillerden düşmeyen retro şarkıları senin için derledik. İşte Kamuran Akkor, Ajda Pekkan ve Barış Manço\'nun şarkılarının yer aldığı çalma listesi...', 'https://i.hizliresim.com/1sycmmv.jpg', 1),
(13, 'Cem Karaca', 'Cem Karaca\'nın şarkılarını senin için derledik. İşte Cem Karaca\'nın dillerden düşmeyen şarkılarının da yer aldığı çalma listesi..', 'https://i.hizliresim.com/4il2ajc.jpg', 3),
(14, 'Kıraç', 'Kıraç\'ın en popüler şarkılarını bu çalma listesinde bulabilirsin... İşte Endamın Yeter, Kara Kaş Gözlerin Elmas ve daha nice Kıraç şarkısının yer aldığı çalma listemiz....', 'https://i.hizliresim.com/1mfjv9q.jpg', 3),
(15, 'Erkin Koray', 'Anadolu Rock müziğin efsane isimlerinden Erkin Koray\'in 1960\'lı yıllardan bugüne en özel şarkılarını senin için derledik. İşte Öyle Bir Geçer Zaman ki, Sevince, Anma Arkadaş ve daha nice Erkin Koray şarkısının yer aldığı çalma listemiz...', 'https://i.hizliresim.com/w9v3bow.jpg', 3),
(16, 'Haluk Levent', 'Haluk Levent\'in şarkılarını senin için derledik. İşte Haluk Levent\'in dillerden düşmeyen Akdeniz Akşamları, Anlasana ve Ela Gözlüm şarkılarının da yer aldığı çalma listesi...', 'https://i.hizliresim.com/snrggiz.jpg', 3),
(17, 'Edip Akbayram', 'Anadolu Rock\'ın güçlü seslerinden Edip Akbayram\'ın benzersiz şarkılarını senin için derledik. İşte Edip Akbayram\'ın Aldırma Gönül ve Hasretinle Yandı Gönlüm gibi şarkılarının yer aldığı çalma listesi...', 'https://i.hizliresim.com/n7884hn.jpg', 3),
(18, 'Barış Manço', 'Barış Manço\'nun 1960\'lı yıllardan bugüne en özel şarkılarını senin için derledik. İşte Gülpembe, Dönence, Alla Beni Pulla Beni, Can Bedenden Çıkmayınca ve daha nice Barış Manço şarkısının yer aldığı çalma listemiz...', 'https://i.hizliresim.com/2bh48zi.jpg', 3),
(19, 'Evde Tek Başına | Fantezi Müzik', 'Evde tek başınayken hem dinleyip hem de rahat rahat eşlik edeceğin fantezi türündeki müzikler bu çalma listesinde... Tek kaldığında müzikler sana eşlik etsin istiyorsan fantezi türündeki müzikleri buradan dinleyebilirsin...', 'https://i.hizliresim.com/tvqpgh3.jpg', 2),
(20, 'Son Ses | Fantezi Müzik', 'Son ses dinleyebileceğin fantezi müzikler bu çalma listesinde...İçinde kopan kırgınlıkları dindirmek istediğinde buradan son ses fantezi müzikler dinleyebilirsin...', 'https://i.hizliresim.com/5plo91z.jpg', 2),
(21, 'Melankoli | Fantezi Müzik', 'Kendini hüzünlü hissettiğinde dinleyebileceğin fantezi türündeki müzikler bu çalma listesinde...İstediğin her vakitte buradan melankolik fantezi müzikler dinleyebilirsin...', 'https://i.hizliresim.com/8mqygfq.jpg', 2),
(22, 'Uykusuz | Fantezi Müzik', 'Uyku tutmadığında dinleyebileceğin fantezi müzikler bu çalma listesinde... Uyumak istediğinde fantezi türündeki müzikleri buradan dinleyebilirsin...', 'https://i.hizliresim.com/j57injb.jpg', 2),
(23, 'Derinlere Git | Fantezi Müzik', 'Derin hislerini sözlere döken fantezi türündeki müzikler bu çalma listesinde... Duygularına tercüman olan fantezi türündeki müzikleri buradan dinleyebilirsin...', 'https://i.hizliresim.com/otgi9sc.jpg', 2),
(24, 'Karamsar | Fantezi Müzik', 'Karamsar hissettiğinde dinleyebileceğin fantezi türündeki müzikler bu çalma listesinde... Moduna uygun müzikler sana eşlik etsin istiyorsan fantezi müziklerini buradan dinleyebilirsin...', 'https://i.hizliresim.com/6ybyjfp.jpg', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `genelbaslik`
--

DROP TABLE IF EXISTS `genelbaslik`;
CREATE TABLE IF NOT EXISTS `genelbaslik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bolumid` int(11) NOT NULL,
  `baslik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `genelbaslik`
--

INSERT INTO `genelbaslik` (`id`, `bolumid`, `baslik`) VALUES
(1, 0, 'EĞLENCENE HAREKET KAT'),
(2, 1, 'BİRAZ NOSTALJİ'),
(3, 3, '%100 ANADOLU ROCK'),
(5, 2, 'DUYGU DURUMUNA GÖRE MÜZİKLER');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

DROP TABLE IF EXISTS `iletisim`;
CREATE TABLE IF NOT EXISTS `iletisim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konu` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `istek` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesaj` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `adi`, `mail`, `konu`, `istek`, `mesaj`) VALUES
(3, 'Kadir', '111@gmail.com', 'test', 'Mabel Matiz Antidepresan', 'Doldurulması zorunlu alan.'),
(2, 'sa as', 'jsmith@sample.com', '', '', 'Yandakiler boş'),
(4, 'Kadir', '111@gmail.com', 'Aaa', 'Son', 'Mesaj giriniz.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

DROP TABLE IF EXISTS `kategoriler`;
CREATE TABLE IF NOT EXISTS `kategoriler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `isim`) VALUES
(1, 'Türkçe Pop'),
(2, 'Yabancı Pop'),
(3, 'Türkçe Rock'),
(4, 'Yaz Şarkıları'),
(5, 'Türk Sanat Müziği'),
(6, 'Karadeniz'),
(7, 'Pop Nostalji'),
(8, 'Anadolu Rock'),
(9, 'Eski Şarkılar'),
(10, '45lik'),
(11, 'Efsane Şarkılar'),
(12, 'Retro Şarkılar'),
(13, 'Cem Karaca'),
(14, 'Kıraç'),
(15, 'Erkin Koray'),
(16, 'Haluk Levent'),
(17, 'Edip Akbayram'),
(18, 'Barış Manço');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `muzikler`
--

DROP TABLE IF EXISTS `muzikler`;
CREATE TABLE IF NOT EXISTS `muzikler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sanatci` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `muzikler`
--

INSERT INTO `muzikler` (`id`, `adi`, `sanatci`, `url`, `kategori`) VALUES
(16, 'Galaksi', 'Ece Mumay', '1-e3yedlTW_iKm27PW-_zjgjbW5Eo0DvP', 1),
(17, 'Aşkın Saniyesi', 'Soner Arıca', '1-WDuMGvkJ4livBW8wOGsDywpvpToHnM7', 1),
(18, 'Mış Mış', 'Simge', '1-g576J7TfzKaYUsX7ydK0ckxDMemvwaG', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `radyolar`
--

DROP TABLE IF EXISTS `radyolar`;
CREATE TABLE IF NOT EXISTS `radyolar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `radyolar`
--

INSERT INTO `radyolar` (`id`, `adi`, `url`) VALUES
(0, 'Kral Pop Radyo', 'http://46.20.3.201:80/;'),
(1, 'Kral Fm', 'http://46.20.3.204/;'),
(9, 'Radyo Türkü', 'http://radyo.turkuradyo.net:4591/;'),
(10, 'Radyo 7', 'http://46.20.3.250/;'),
(11, 'TRT Türkü', 'https://nmicenotrt.mediatriple.net/trt_turku.aac'),
(12, 'TRT Radyo 1', 'https://nmicenotrt.mediatriple.net/trt_1.aac'),
(13, 'Radyo Spor', 'http://46.20.7.103:8040/;'),
(14, 'Radyo 90lar', 'http://37.247.98.8/stream/166/'),
(15, 'Best FM', 'http://46.20.7.125/;'),
(17, 'Baba Radyo', 'http://37.247.98.7/;');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(5, 'admin', 'c06511398f95156426a7d63dae5c5cb6', 'Kurucum'),
(6, 'kadir', '827ccb0eea8a706c4c34a16891f84e7b', 'kadir');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
