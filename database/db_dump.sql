-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Апр 27 2021 г., 12:36
-- Версия сервера: 5.7.30-33
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cd00119_nicehost`
--

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `hostels`
--

CREATE TABLE IF NOT EXISTS `hostels` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `coords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `hostels`
--

INSERT INTO `hostels` (`id`, `city`, `address`, `phone`, `email`, `route`, `about`, `coords`) VALUES
(1, 'Москва', 'ул. Земляной вал, 38-40с5', '+7(985)986-60-13', 'kurskaya@nicehostel.ru', 'zemlyanoy-val', '\n                    <p class=\"lh-120\">Хостел «Найс Курская» находится в Москве, в пяти минутах пешком от станции метро Курская кольцевая и всего одной станции метро от Кремля, Красной площади площади трех вокзалов (станция метро Комсомольская). Большой театр и Третьяковская галерея – в пешей доступности от хостела.</p>\n                    <p class=\"lh-120\">Номера хостела комфортны как для кратковременного, так и длительного проживания, оформлены в привлекательных ярких тонах.</p>\n                    <p class=\"lh-120\">К услугам гостей – общая ванная комната, а также шкафчики - сейфы. Все спальные места оборудованы индивидуальным освещением, электрическими розетками, полочками и полотенцедержателями. Для приготовления еды гости Хостела могут воспользоваться полностью оборудованной кухней с барной стойкой. Тостер, микроволновка, посудомоечная и стиральная машины – все это в распоряжении гостей. Хостел оформлен фотографиями московских street фотографов, что создает атмосферу уюта, дает прочувствовать красоту Москвы и вдохновляет на прогулки по знаменитому городу.</p>\n                    <p class=\"lh-120\">На всей территории хостела Найс Курская действует бесплатный WiFi, телевизоры с плоским экраном установлены в lounge зоне и номере Люкс. В общей гостиной вас ждет приятное общение и уютная атмосфера. Вы можете пообщаться, помечтать, поиграть на гитаре укулеле и провести время за настольными играми.</p>\n                    <p class=\"lh-120\">Стойка ресепшн открыта круглосуточно.</p>\n                    <p class=\"lh-120\">Рядом с Хостелом расположено историческое Садовое кольцо. При выходе из арки двора открывается незабываемо красивый вид на Москву, а напротив хостела расположен Атриум – известный крупный торговый центр с множеством кинотеатров и международными брендами, ресторанами и супермаркетами.</p>\n                    <p class=\"lh-120\">К нам легко добраться от любого аэропорта до хостела на аэроэкспрессе за 35-40 минут, а затем одну-две остановки на метро по кольцевой линии не более 15 минут. Мы рады предложить гостям абсолютно новый хостел (2018 год) со всеми необходимыми удобствами и услугами. Мы можем разместить до 34 гостей, поэтому, также, будем рады и группам туристов.</p>\n                ', '[55.755251, 37.655320]'),
(2, 'Москва', 'ул. Садовая-Черногрязская, д. 59, кв. 1', '+7(985)050-00-85', 'red@nicehostel.ru', 'sadovaya-chernogryazsckaya', '', '[55.766516, 37.653424]'),
(3, 'Иваноно', 'пр-т Ленина, 20', '+7(920)356-83-37', 'ivanovo@nicehostel.ru', 'ivanovo', '', '[56.997627, 40.976391]'),
(4, 'Тюмень', 'ул. Миусская, д.83', '+7(952)671-60-60', 'tmn-m@nicehostel.ru', 'tumen', '', '[57.145983, 65.535837]'),
(5, 'Пенза', 'ул. Свердлова, 49', '+7(8412)23-51-15', 'penza@nicehostel.ru', 'penza', '', '[53.176669, 45.006099]'),
(6, 'Красногорск', 'Ильинский бульвар, д 8', '+7(968)7777-550', 'crocus@nicehostel.ru', 'krasnogorsk', '', '[55.817249, 37.370796]'),
(7, 'Рязань', 'пр-т, Первомайский проспект, дом 62', '+7(4912)983-983', 'ryazan@nicehostel.ru', 'ryazan', '', '[54.629450, 39.715974]'),
(8, 'Сочи', 'пер., Виноградный, 2а', '+7(862)233-78-88', 'sochi@nicehostel.ru', 'sochi', '', '[43.630642, 39.716944]');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_01_081223_create_hostels_table', 1),
(5, '2020_12_01_103549_create_rooms_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hostel_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rooms_hostel_id_foreign` (`hostel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `rooms`
--

INSERT INTO `rooms` (`id`, `hostel_id`, `name`, `slug`, `price`) VALUES
(1, 1, 'Кровать в общем 8-местном номере для мужчин и женщин', '8-pers-dorm-room-mw', 550),
(2, 1, 'Кровать в общем 6-местном номере', '6-pers-dorm-room-mw', 610),
(3, 1, 'Кровать в общем четырехместном номере', '4-pers-dorm-room-mw', 850),
(4, 1, 'Кровать в общем четырехместном номере для женщин', '4-pers-dorm-room-w', 900),
(5, 1, 'Четырехместный номер', '4-pers-room', 2900),
(6, 1, 'Двухместный номер делюкс с 1 кроватью или 2 отдельными кроватями', '2-pers-room-deluxe', 3100),
(7, 2, 'Кровать в общем 6-местном номере для мужчин и женщин', '8-pers-dorm-room-mw', 850),
(8, 2, 'Кровать в общем 4-местном номере для мужчин и женщин комфорт', '4-pers-dorm-room-mw', 1000),
(9, 2, 'Двухместный номер с 1 кроватью полулюкс', 'double-room-1-bed', 2500),
(10, 3, 'Спальное место в общем 6-местном номере для мужчин и женщик', '6-pers-dorm-room-mw', 500),
(11, 3, 'Спальное место в общем 6-местном номере для женщин', '6-pers-dorm-room-w', 550),
(12, 3, 'Спальное место в общем 6-местном номере для мужчин', '6-pers-dorm-room-m', 550),
(13, 3, 'Двухместный номер', 'double-room', 1500),
(14, 3, 'Улучшенный двухместный номер', 'double-room-improved', 1700),
(15, 3, 'Улучшенный двухместный номер (мансарда)', 'double-room-improved-attic', 1700),
(16, 4, 'Кровать в общем номере для мужчин и женщин с 10 кроватями', '10-pers-dorm-room-mw', 600),
(17, 4, 'Кровать в общем 8-местном номере для мужчин и женщин', '8-pers-dorm-room-mw', 600),
(18, 4, 'Кровать в общем 6-местном номере для мужчин и женщин', '6-pers-dorm-room-mw', 650),
(19, 4, 'Кровать в общем 4-местном номере для мужчин и женщин', '4-pes-dorm-room-mw', 650),
(20, 4, 'Двухместный номер с 1 кроватью', 'double-room-1-bed', 1400),
(21, 5, 'Кровать в общем 12-местном номере для мужчин', '12-pers-dorm-room-m', 600),
(22, 5, 'Кровать в общем 12-местном номере для мужчин и женщин', '12-pers-dorm-room-w', 600),
(23, 5, 'Кровать в общем 8-местном номере для женщин', '8-pers-dorm-room-w', 650),
(24, 5, 'Кровать в общем 8-местном номере для мужчин', '8-pers-dorm-room-m', 650),
(25, 5, 'Кровать в общем 8-местном номере для женщин (комфорт)', '8-pers-dorm-room-w-comfort', 700),
(26, 5, 'Кровать в общем 8-местном номере для мужчин (комфорт)', '8-pers-dorm-room-m-comfort', 700),
(27, 5, 'Двухместный номер с 2 отдельными кроватями', 'double-room-2-beds', 1850),
(28, 5, 'Стандартный двухместный номер с 1 кроватью', 'double-room-1-bed', 1950),
(29, 6, 'Кровать в общем 8-местном номере для женщин с собственной ванной комнатой', '8-pres-dorm-room-w-own-bath', 650),
(30, 6, 'Кровать в общем 8-местном номере для мужчин', '8-pers-dorm-room-m', 650),
(31, 6, 'Кровать в общем 6-местном номере для мужчин', '6-pers-dorm-room-m', 700),
(32, 6, 'Кровать в общем 6-местном номере для женщин с собственной ванной комнатой', '6-pers-dorm-room-w-own-bath', 700),
(33, 6, 'Номер на 2-х человек капсульного типа (без окна!) с собственным санузлом', 'double-room-own-toilet', 2000),
(34, 6, 'Семейный vip номер', 'family-room-vip', 3200),
(35, 7, 'Кровать в мужском номере на 8 человек', '8-pers-dorm-room-m', 500),
(36, 7, 'Кровать в женском номере на 8 человек', '8-pers-dorm-room-w', 500),
(37, 7, 'Кровать в общем номере на 8 человек', '8-pers-dorm-room-mw', 500),
(38, 7, 'Кровать в мужском номере на 6 человек', '6-pers-dorm-room-m', 600),
(39, 7, 'Кровать в женском номере на 6 человек', '6-pers-dorm-room-w', 600),
(40, 7, 'Двухместный номер люкс с удобствами', 'double-room-luxe', 1800),
(41, 8, 'Номер на 6 человек', '6-pers-dorm-room-mw', 396),
(42, 8, '6 местный женский номер', '6-pers-dorm-room-w', 420),
(43, 8, 'Номер на 4 человек', '4-pers-dorm-room-mw', 630),
(44, 8, 'Стандартный номер с двухспальной кроватью', 'double-room-1-bed', 1890),
(45, 8, 'Двухместный номер с 2 отдельными кроватями', 'double-room-2-beds', 1890),
(46, 8, 'Семейный номер', 'family-room', 2375);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_hostel_id_foreign` FOREIGN KEY (`hostel_id`) REFERENCES `hostels` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
