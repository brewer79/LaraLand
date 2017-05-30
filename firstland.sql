-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 30 2017 г., 17:18
-- Версия сервера: 5.5.53
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `firstland`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `name`, `text`, `images`, `created_at`, `updated_at`) VALUES
(4, '<h2>We are<br> Web Design<br> Heroes</h2>', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet\n                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit\n                lobortis nisl ut aliquip ex ea commodo consequat.', 'about.jpg', '2017-05-15 11:54:32', '2017-05-15 11:54:32');

-- --------------------------------------------------------

--
-- Структура таблицы `features`
--

CREATE TABLE `features` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `features`
--

INSERT INTO `features` (`id`, `name`, `text`, `icon`, `created_at`, `updated_at`) VALUES
(5, 'Fully responsive', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'icon-tablet icon3x', '2017-05-15 12:16:57', '2017-05-15 12:16:57'),
(6, 'Clean design', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing.', 'icon-isight icon3x', '2017-05-15 12:16:57', '2017-05-15 12:16:57'),
(7, 'Valid code', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna erat volutpat.', 'icon-star icon3x', '2017-05-15 12:16:57', '2017-05-15 12:16:57'),
(8, 'Totally free', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat nonummy.', 'icon-heart icon3x', '2017-05-15 12:16:57', '2017-05-15 12:16:57');

-- --------------------------------------------------------

--
-- Структура таблицы `filters`
--

CREATE TABLE `filters` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `filters`
--

INSERT INTO `filters` (`id`, `name`, `alias`, `created_at`, `updated_at`) VALUES
(1, 'Web Design', 'Web Design', '2017-05-26 09:32:03', '2017-05-26 09:32:03'),
(2, 'Development', 'Development', '2017-05-26 09:32:03', '2017-05-26 09:32:03'),
(3, 'Social Campaigns', 'Social Campaigns', '2017-05-26 09:32:03', '2017-05-26 09:32:03'),
(4, 'Photography', 'Photography', '2017-05-26 09:32:03', '2017-05-26 09:32:03');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_12_124216_create_table_pages', 1),
('2017_05_12_124436_create_table_services', 1),
('2017_05_12_124918_create_table_portfolios', 1),
('2017_05_12_125128_create_table_features', 1),
('2017_05_15_075428_create_table_about', 2),
('2017_05_15_123302_change_portfolios_table', 3),
('2017_05_15_142320_change_pages_table', 4),
('2017_05_23_154342_create_table_sliders', 5),
('2017_05_24_142118_change_pages_table', 6),
('2017_05_24_143159_change_about_table', 7),
('2017_05_25_144934_change_pages_table', 8),
('2017_05_26_121209_create_table_filters', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `images` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name`, `alias`, `text`, `created_at`, `updated_at`, `images`) VALUES
(6, 'general', 'first-block', '<h1>Amazing Responsive Business Template</h1>\n            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>', '2017-05-24 11:29:42', '2017-05-24 11:29:42', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `images`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Web Design', 'por1.jpg', '<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>', '2017-05-15 10:38:51', '2017-05-30 10:29:11'),
(5, 'Web Design', 'por4.jpg', '<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>', '2017-05-15 10:38:51', '2017-05-15 10:38:51'),
(6, 'Web Design', 'por6.jpg', '<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>', '2017-05-15 10:38:51', '2017-05-15 10:38:51'),
(7, 'Web Design', 'por3.jpg', '<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>', '2017-05-15 10:38:51', '2017-05-15 10:38:51'),
(8, 'Development', 'por7.jpg', '<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>', '2017-05-15 10:38:51', '2017-05-15 10:38:51'),
(9, 'Development', 'por5.jpg', '<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>', '2017-05-15 10:38:51', '2017-05-15 10:38:51'),
(10, 'Development', 'por1.jpg', '<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>', '2017-05-15 10:38:51', '2017-05-15 10:38:51'),
(11, 'Development', 'por2.jpg', '<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>', '2017-05-15 10:38:51', '2017-05-15 10:38:51'),
(12, 'Social Campaigns', 'por4.jpg', '<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>', '2017-05-15 10:38:51', '2017-05-15 10:38:51'),
(13, 'Social Campaigns', 'por6.jpg', '<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>', '2017-05-15 10:38:51', '2017-05-15 10:38:51'),
(14, 'Social Campaigns', 'por3.jpg', '<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>', '2017-05-15 10:38:51', '2017-05-15 10:38:51'),
(15, 'Social Campaigns', 'por5.jpg', '<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>', '2017-05-15 10:38:51', '2017-05-15 10:38:51'),
(16, 'Photography', 'por7.jpg', '<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>', '2017-05-15 10:38:51', '2017-05-15 10:38:51'),
(17, 'Photography', 'por2.jpg', '<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>', '2017-05-15 10:38:51', '2017-05-15 10:38:51'),
(18, 'Photography', 'por5.jpg', '<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>', '2017-05-15 10:38:51', '2017-05-15 10:38:51'),
(19, 'Photography', 'por6.jpg', '<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>', '2017-05-15 10:38:51', '2017-05-15 10:38:51');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `name`, `text`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'We create', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'icon-vector', '2017-05-15 12:26:12', '2017-05-15 12:26:12'),
(2, 'We look to the future', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'icon-eye', '2017-05-15 12:26:12', '2017-05-30 10:32:33'),
(3, 'We find a solution', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'icon-random', '2017-05-15 12:26:12', '2017-05-15 12:26:12');

-- --------------------------------------------------------

--
-- Структура таблицы `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `text`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Free Onepage Responsive Template', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'first.jpg', '2017-05-23 13:08:44', '2017-05-23 13:08:44'),
(2, 'Fully Responsive Components', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'second.jpg', '2017-05-23 13:08:44', '2017-05-23 13:08:44'),
(3, 'Build new Layout in 10 minutes!', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'third.jpg', '2017-05-23 13:08:44', '2017-05-23 13:08:44');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User1', 'user1@mail.ua', '$2y$10$7ow8RLn8wAsB3iLZ7Jegb.q0RuEI0HsVQwBN0dMUvL5mSDKcVHk0O', NULL, '2017-05-19 11:13:10', '2017-05-19 11:13:10');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `filters`
--
ALTER TABLE `filters`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `filters`
--
ALTER TABLE `filters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
