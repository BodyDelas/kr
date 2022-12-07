-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 02 2022 г., 19:18
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bogdan_web5`
--

-- --------------------------------------------------------

--
-- Структура таблицы `imgs`
--

CREATE TABLE `imgs` (
  `id` int(11) NOT NULL,
  `link` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titles` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `imgs`
--

INSERT INTO `imgs` (`id`, `link`, `titles`) VALUES
(1, 'https://shoko.ru/upload/iblock/b59/hyc0xw0uihyuvvyc7e02anl5h79khf84.jpg', 'Сладость 1'),
(2, 'https://shoko.ru/upload/iblock/a77/e5e1c5l48bul7w8x1zl16gbugir0ub55.jpg', 'Сладость 2'),
(3, 'https://shoko.ru/upload/iblock/1f6/62vmyyehyhfp536nht7er5n3t6irt716.jpg', 'Сладость 3'),
(4, 'https://shoko.ru/upload/iblock/461/nsv5c0fds18t1micz6g6czzlp0b1t0ka.jpg', 'Сладость 4'),
(5, 'https://shoko.ru/upload/iblock/ce4/mzyzu7153l2kjgor8pmse740z0d64r0z.jpg', 'Сладость 5'),
(6, 'https://shoko.ru/upload/iblock/c7a/4tzloxeo168nkpsmnvs872k7ww6jht9s.jpg', 'Сладость 6'),
(7, 'https://shoko.ru/upload/iblock/abf/krdr3ndar1t9a013r6ud2448capv1nup.jpg', 'Сладость 7'),
(8, 'https://shoko.ru/upload/iblock/fe9/thhz891a7ikl2c0elpi8dda1sep99mxi.jpg', 'Сладость 8'),
(9, 'https://shoko.ru/upload/iblock/99e/vqpwdqslhclhtwd7tns64xph1qn5xmii.jpg', 'Сладость 9'),
(10, 'https://shoko.ru/upload/iblock/a0a/53khaqjou2fhs7y4atg6xpnncsaaxv55.jpg', 'Сладость 10'),
(11, 'https://shoko.ru/upload/iblock/cb6/nan1rjg1psqt00vi4psho1f2cdwun8u4.jpg', 'Сладость 11'),
(12, 'https://shoko.ru/upload/iblock/37e/hri8sb6sw8upz2qch9tr2hv6o8auj32i.jpg', 'Сладость 12');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `imgs`
--
ALTER TABLE `imgs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `imgs`
--
ALTER TABLE `imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
