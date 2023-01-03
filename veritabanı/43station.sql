-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 03 Oca 2023, 22:07:04
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
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(13, 'Manga', 'Manga\'nin en popüler sarkilarini bu çalma listesinde bulabilirsin... Iste Cevapsiz Sorular, Bir Kadin Çizeceksin ve daha nice Manga sarkisinin yer aldigi çalma listemiz....', 'https://i.hizliresim.com/jvvfirw.jpg', 3),
(14, 'Sebnem Ferah', 'Rock müzigin kraliçesi Sebnem Ferah\'in efsanelesen sarkilarini bu çalma listesinde bulabilirsin... Iste Sil Bastan, Can Kiriklari ve daha nice Sebnem Ferah sarkisinin yer aldigi çalma listemiz.... ', 'https://i.hizliresim.com/500l014.jpg', 3),
(15, 'Zakkum', '\"Anason\" sarkisiyla tanidigimiz Zakkum grubunun sarkilarini bu çalma listesinde bulabilirsin. Iste Zakkum\'un sarkilarinin yer aldigi çalma listesi...', 'https://i.hizliresim.com/hifnmaf.jpg', 3),
(16, 'Mor ve Ötesi', '1995\'te Istanbul\'da kurulan Türk rock müzik grubu Mor ve Ötesi, Oyunbozan, Araf gibi sarkilar çikardi. Iste Mor ve Ötesi\'nin sarkilarini dinleyebilecegin çalma listesi...', 'https://i.hizliresim.com/3g8zwd2.jpg', 3),
(17, 'Yüksek Sadakat', 'Dilimizden düsmeyen \"Belki Üstümüzden Bir Kus Geçer\" sarkisinin sahibi Yüksek Sadakat\'in sarkilarini senin için derledik. Iste Yüksek Sadakat\'in sarkilarini dinleyebilecegin çalma listesi...', 'https://i.hizliresim.com/qb2fv4w.jpg', 3),
(18, 'Pinhani', '\"Kavak Yelleri\" dizisine yaptigi müziklerle hafizalara kazinan Pinhani\'nin sarkilarini bu çalma listesinde bulabilirsin. Iste Pinhani\'nin çok sevilen Beni Sen Inandir, Hele Bi Gel ve Dünyadan Uzak sarkilarinin yer aldigi çalma listesi...', 'https://i.hizliresim.com/hgescul.jpg', 3),
(30, 'Karamsar | Fantezi Müzik', 'Karamsar hissettiğinde dinleyebileceğin fantezi türündeki müzikler bu çalma listesinde... Moduna uygun müzikler sana eşlik etsin istiyorsan fantezi müziklerini buradan dinleyebilirsin...', 'https://i.hizliresim.com/6ybyjfp.jpg', 2),
(25, 'Evde Tek Başına | Fantezi Müzik', 'Evde tek başınayken hem dinleyip hem de rahat rahat eşlik edeceğin fantezi türündeki müzikler bu çalma listesinde... Tek kaldığında müzikler sana eşlik etsin istiyorsan fantezi türündeki müzikleri buradan dinleyebilirsin...', 'https://i.hizliresim.com/tvqpgh3.jpg', 2),
(26, 'Son Ses | Fantezi Müzik', 'Son ses dinleyebileceğin fantezi müzikler bu çalma listesinde...İçinde kopan kırgınlıkları dindirmek istediğinde buradan son ses fantezi müzikler dinleyebilirsin...', 'https://i.hizliresim.com/5plo91z.jpg', 2),
(27, 'Melankoli | Fantezi Müzik', 'Kendini hüzünlü hissettiğinde dinleyebileceğin fantezi türündeki müzikler bu çalma listesinde...İstediğin her vakitte buradan melankolik fantezi müzikler dinleyebilirsin...', 'https://i.hizliresim.com/8mqygfq.jpg', 2),
(28, 'Uykusuz | Fantezi Müzik', 'Uyku tutmadığında dinleyebileceğin fantezi müzikler bu çalma listesinde... Uyumak istediğinde fantezi türündeki müzikleri buradan dinleyebilirsin...', 'https://i.hizliresim.com/j57injb.jpg', 2),
(29, 'Derinlere Git | Fantezi Müzik', 'Derin hislerini sözlere döken fantezi türündeki müzikler bu çalma listesinde... Duygularına tercüman olan fantezi türündeki müzikleri buradan dinleyebilirsin...', 'https://i.hizliresim.com/otgi9sc.jpg', 2);

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
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(13, 'Manga'),
(14, 'Sebnem Ferah'),
(15, 'Zakkum'),
(16, 'Mor ve Ötesi'),
(17, 'Yüksek Sadakat'),
(18, 'Pinhani'),
(26, 'Son Ses | Fantezi Müzik'),
(25, 'Evde Tek Başına | Fantezi Müzik'),
(27, 'Melankoli | Fantezi Müzik'),
(28, 'Uykusuz | Fantezi Müzik'),
(29, 'Derinlere Git | Fantezi Müzik'),
(30, 'Karamsar | Fantezi Müzik');

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
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `muzikler`
--

INSERT INTO `muzikler` (`id`, `adi`, `sanatci`, `url`, `kategori`) VALUES
(16, 'Galaksi', 'Ece Mumay', '1-e3yedlTW_iKm27PW-_zjgjbW5Eo0DvP', 1),
(19, 'Çatlat', 'Murat Dalkiliç', '1-CEkE_OL7RIjk028SPRlLSRAVKW4ay2d', 1),
(17, 'Askin Saniyesi', 'Soner Arica', '1-WDuMGvkJ4livBW8wOGsDywpvpToHnM7', 1),
(18, 'Mış Mış', 'Simge', '1-g576J7TfzKaYUsX7ydK0ckxDMemvwaG', 1),
(20, 'Sampiyon', 'Hadise', '1-KNCD7rnHjdxYn9H8NGWPtNTQxCeBfPv', 1),
(21, 'Poset', 'Serdar Ortaç', '1-97vavUcTzNN05VoSPF4y3ci58KYwpHe', 1),
(22, 'Kasma', 'Yalin', '1-LOiXR8azpEdPm7kvIZjEzbkZHsuApFR', 1),
(25, 'Arada Sirada', 'Ajda Pekkan', '1-LO410XjZjDesyiyg_FTrJ1LS9SuR3GV', 1),
(26, 'Bir de Bana Sor', 'Erol Evgin', '10qb_UWXGb2VIZ22B6SdI5THRmYmEdqPM', 7),
(27, 'Sana Ne Kime Ne', 'Ajda Pekkan', '10qwIawGaHWx7c93X_HdGPZoznjIQHPn1', 7),
(28, 'Dünya Dönüyor', 'Nilüfer', '10u4cI5K-8Crd8y9g-hZEw7xmBJcAlmrL', 7),
(29, 'Dert Ortagim', 'Semiramis', '10vAGMn-YdQd9qaPph_xjyLuxct93FMQP', 7),
(30, 'Dibi Dibi Da (1976)', 'Rana Alagöz', '10xqDlp0u96Y88tw0_RVKJyrKXdtWQ327', 7),
(31, 'Bir Garip Yolcu', 'Behiye Aksoy', '11AH24rER5xnXI7f9SO8ip-kafRn5G-fj', 10),
(32, 'Tamirci Çiragi', 'Cem Karaca', '11Cneffe8MipVTEAlqBkSnCO7MdNvbYfC', 10),
(33, 'Sessiz Gemi(1974)', 'Hümeyra', '11JK1Wslc1ozbdpgTYSNIHycVBiSuiqV4', 10),
(34, 'Son Verdim  Kalbimin Isine', 'Seyyal Taner', '11KerzA7gyAVYp_6wVviulnFgLxuejwfi', 10),
(37, ' Aldirma Gönül', 'Edip Akbayram', '11c-wx74Qy0h8rn9dvVmZMddTJ9MWmc2t', 8),
(38, 'Saskin', 'Erkin Koray', '11cS6jxe3_TgdHEAIBi0ntQOxkgesDfYY', 8),
(39, 'Sari Çizmeli Mehmet Aga', 'Baris Manço', '11bWMJVTUu5yVdpkOuL9UTLE9XBVBk7ci', 8),
(41, 'Bir Sevmek Bin Defa', 'Üç Hürel', '11WcNQ-3vPEW_rSblsKGfZyNpgSrj5r86', 8),
(42, 'Birisine Birisine', 'Nil Burak', '11-YUD6tj271sP058r3q55OmUyktfiZQn', 9),
(43, 'Delisin', 'Cici Kızlar', '115Q54PXrQK6nljtdSMoUKQwOOIF-Pszr', 9),
(44, 'Hayırdır İnşallah', 'Uğur Akdora', '116neSCImQv-U7-Vaon0iA95bQhNdgJOq', 9),
(45, 'Ölsem de Bir Kalsam da', 'Banu Kırbağ', '11TcdsXTzu8nnaRyn2LYjdAaKdeSMncNC', 11),
(46, 'Sana Neler Edeceğim', 'Ajda Pekkan', '11QurCuvrWfGdN_-7v4z29jgEhBj4hSAO', 11),
(47, 'Bal Gibi Olur', 'Asu Maralman', '11Oti1zd-Rej9EOCzpFuB_7DS125zvER4', 11),
(48, 'İki Yabancı', 'Ajda Pekkan', '11eE85iuYtGUdNUSX6g0V2V0yBeqzg-QJ', 12),
(49, 'Mavi Boncuk', 'Kamuran Akkor', '11iydGUvjUDzVRJDRXhVbBbt4ZPsojdJ8', 12),
(50, 'Yeter Ki', 'Saadet Sun', '11gx7FcDQbd0XlC-1DhJOxIagt1LS6tee', 12),
(51, 'Efem', 'Alpay', '11glvjbgVa_QHMMGIBOQUWhXXn76nJ0-s', 12),
(52, 'Single Ladies', 'Beyonce', '11pm1pZ8pZljG4dLRO-rHy60WOk7qcm6x', 2),
(53, 'Last Friday Night', 'Katy Perry', '11qkq8-3m2HHse2D6XORwCr5rSxEJvX_Q', 2),
(54, 'Gimme More', 'Britney Spears', '11xPOr5y4hIOCCWK2_0ecLfafPmKZM_oE', 2),
(55, 'Hung Up', 'Madonna', '11yiac0Tir4JePL094B3w22sl3U0vK6de', 2),
(56, 'Carry Out', 'Justin Timberlake', '128sbSh-R6-lGxpgyj3X6B0UqOKxASjkr', 2),
(57, 'Çay Elinden Öteye', 'Şevval Sam', '12EUSwIrX4k00e-tj8OLMvmmnH5Pxol7D', 6),
(58, 'Rap Atma', 'Fuat Saka', '12Tfrc7Ij14gEZgcKU8uDLAoT4BZGrvFW', 6),
(59, 'Tonya Maçka', 'Fuat Saka', '12VWCT31_4CtQGoz3KuQqxAFsMvKyZ4mr', 6),
(60, 'Narino', 'Kazım Koyuncu', '12assU0ivq5Z_rH5znCpy7Mp6S2Kl2u3q', 6),
(61, 'Hui Hui', 'Fuat Saka', '12bFrdyz-EGkzYvsoNk22t8L60GBnHQuP', 6),
(62, 'Okyanus', 'Derya Uluğ', '12qxRP6lWW8M2vyLYYwk53Z4Lmc7kFy6p', 4),
(63, 'Yaz', 'Sezen Aksu', '12qyzGxv9Eljx4_wYR-XnX38xD9dNGOmX', 4),
(64, 'Tabi Tabi', 'Sinan Akçıl', '12wquhgZmXA3SwMYP5og9woRN7CjCZVcn', 4),
(65, 'Kalbim Tatilde', 'Ziynet Sali', '13033nvBDlRwF9Wgkq3q7zIVwqpc-GTFp', 4),
(66, 'Kumsalda', 'Özdemir Erdoğan', '1340HVQZGmygGc4il_ORuHxPlYoWDn4w0', 4),
(67, 'Ebruli', 'Gripin', '13894WAQGtVVYK6cwYFVuTkH1K9VPWXYp', 3),
(68, 'Dağılmak İstiyorum', 'Model', '138dNVM0yg-HyhRkZWrc20H2aB9yvtekM', 3),
(69, 'Ayrılamayız Biz', 'Pamela', '13J1FOTSb5MwvVE4jRaymiNBnZbnq9C0k', 3),
(70, 'Mor Yazma', 'Umut Kaya', '13M8Dj39fFIyQwhBiVQgoGFVAiqqxJyhG', 3),
(71, 'Maazallah', 'Bülent Ersoy', '13Rcx1XvRnVtAO9bmgkfo6ZGjTH0Q4tIo', 5),
(72, 'Ayva Çiçek Açmış', 'Muazzez Ersoy', '13S0JYwd-2viMXjGBbluO_aLYA6Xh_Yvv', 5),
(73, 'Sevdadır Şu Kalbe Dolan', 'Sibel Can', '13SAmF6t3zhxgjadfkzTkE8HdnQ-3PNiW', 5),
(74, 'Ada Sahillerinde', 'Fikret Erkaya', '13WuI7MjIeXOHyMcKA_5bX5wrII3ojWP7', 5),
(75, 'Pencere Açıldı Bilal Oğlan', 'Safiye Ayla', '13ZYDOeDT8crFf5Yw7OB4U5qjK8bImiA_', 5),
(76, 'Araf', 'Mor ve Ötesi', '13dz99ZsP8FEyDc4VTo-uVJDno2Qa57KY', 16),
(77, 'Oyunbozan', 'Mor ve Ötesi', '13jqyU_cW9MT4yy570PSJRf7K5-ncP2WH', 16),
(78, 'Bir Derdim Var', 'Mor ve Ötesi', '13i36kRETOn2-MC1BNI-OGkiB0YZuhLqR', 16),
(79, 'Dünyanın Sonuna Doğmuşum', 'Manga', '14491ykjyH4Wu_GOlEn6TjCnfLO-EwU00', 13),
(80, 'Dursun Zaman', 'Manga', '145XWmgu8FfXKHS67FlBzh0--MpbDZDY7', 13),
(81, 'We Could Be The Same', 'Manga', '143tVZwVd7wPjTQiyt4vh5o-2W0gNN9up', 13),
(82, 'Sigara', 'Şebnem Ferah', '14HyDymsJ-HLbkzKexw4CntZ8RQiBDeZ2', 14),
(83, 'Can Kırıkları', 'Şebnem Ferah', '14IOjXAxpXfOLc46G1fh5ofxryeyNIeYB', 14),
(84, 'Sil Baştan', 'Şebnem Ferah', '14NoIh3FFdrLzf0tvIIQz2PUywNM31cDv', 14),
(85, 'Hatıran Yeter', 'Zakkum', '14SG4UOwcsmp-qNQcjsiK6KMz4avPUxey', 15),
(86, 'Ben Ne Yangınlar Gördüm', 'Zakkum', '14eO6WhVEmwRmzOzciw9cGWpR9DQ6HBe3', 15),
(87, 'Hüzzam', 'Zakkum', '14X9vTnW2B987y5ewhXZch8xRD0mEkHIX', 15),
(88, 'Aşk Durdukça', 'Yüksek Sadakat', '14morL6PX-5huPiueyFDFZ1X5vU2_1DMg', 17),
(89, 'Aklımın İplerini Saldım', 'Yüksek Sadakat', '14p3dp3uh6RiCiSW32zUX6bvq-gbGpr7q', 17),
(90, 'Belki Üstümüzden Bir Kuş Geçer', 'Yüksek Sadakat', '14pkJuRDa7ShHOrOsTO-UTAchhLKxsv8P', 17),
(91, 'Dünyadan Uzak', 'Pinhani', '14yAVjQ97PayGY-ZuxupKk-7G8SN6jRfL', 18),
(92, 'Beni Al', 'Pinhani', '15J_K2AKCouo2AE0ZHHGlYAwQ6DYDLPcC', 18),
(93, 'Beni Sen İnandır', 'Pinhani', '15SsMg1KHe5OwzoUubazl4HZEXLajjPeS', 18);

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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
