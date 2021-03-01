-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 01 2021 г., 16:30
-- Версия сервера: 5.6.47
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ecopsy`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `html_href` varchar(511) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(511) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `html_href`, `title`, `text`, `img`, `date`, `categorie`) VALUES
(1, '', 'Культурная эволюция2', 'Российские и зарубежные компании ценят в менеджерах совершенно разные качества', './i/c/cards/12.jpg', '2021-02-28', 1),
(2, '', 'Switch — тесты способностей нового поколения', 'Российские и зарубежные компании ценят в менеджерах совершенно разные качества', './i/c/cards/12.jpg', '0000-00-00', 1),
(3, '', 'Меньше временных затрат — больше результат: как сократить трудоемкось работы с отчетностью. Методика TIME', 'Российские и зарубежные компании ценят в менеджерах совершенно разные качества', './i/c/cards/13.jpg', '2021-02-22', 3),
(4, '', 'Культурная эвол', 'Российские и зарубежные компании ценят в менеджерах совершенно разные качества', './i/c/cards/13.jpg', '2021-02-03', 3),
(5, '', 'Edit', 'Some', 'icservices-video-bg.jpg', '0000-00-00', 0),
(6, '', '', '', 'icservices-video-bg.jpg', '0000-00-00', 0),
(7, '', '', '', 'i/c/services-video-bg.jpg', '0000-00-00', 0),
(8, '', '', '', 'i/c/services-video-bg.jpg', '0000-00-00', 0),
(9, '', '', '', 'i/c/services-video-bg.jpg', '0000-00-00', 0),
(10, '', '', '', 'i/c/services-video-bg.jpg', '0000-00-00', 0),
(11, '', '', '', 'i/c/services-video-bg.jpg', '0000-00-00', 0),
(12, '', '', '', 'i/c/services-video-bg.jpg', '0000-00-00', 0),
(13, '', 'Статья из добавления статьи', '', 'i/c/services-video-bg.jpg', '0000-00-00', 0),
(14, '', 'Статья из добавления статьи1', '', 'i/c/services-video-bg.jpg', '0000-00-00', 0),
(15, '', 'Статья из добавления статьи12', '', 'i/c/services-video-bg.jpg', '0000-00-00', 0),
(16, '', 'Статья из добавления статьи12', '', 'i/c/services-video-bg.jpg', '0000-00-00', 0),
(17, '', 'Статья из добавления статьи12', '', 'i/c/services-video-bg.jpg', '0000-00-00', 0),
(18, '', 'фывафыва', '', 'i/c/Operate.png', '0000-00-00', 0),
(19, '', 'фывафыва', '', 'i/c/Operate.png', '0000-00-00', 0),
(20, '', 'фывафыва', '', 'i/c/Operate.png', '0000-00-00', 0),
(21, '', 'Статья из добавления статьи12', 'Текст статьи ии12рр', 'i/c/services-video-bg.jpg', '0000-00-00', 0),
(22, '', 'Статья из добавления статьи12', 'Текст статьи ии12рраввввввввТекст статьи ии12рраввввввввТекст статьи ии12рраввввввввТекст статьи ии12рраввввввввТекст статьи ии12рраввввввввТекст статьи ии12рраввввввввТекст статьи апо\nапоА. ии12рраввввввввТекст статьи ии12рраввввввввТекст статьи ии12рраввввввввТекст статьи ии12рраввввввввТекст статьи ии12рраввввввввТекст статьи ии12рраввввввввТекст статьи ии12рраввввввввТекст статьи ии12рраввввввввТекст статьи ии12рраввввввввТекст статьи ии12рраввввввввТекст статьи ии12рраввввввввТекст статьи ии12рравввввввв', 'i/c/services-video-bg.jpg', '0000-00-00', 0),
(23, '', 'Культурная эволюция', 'Российские и зарубежные компании ценят в менеджерах совершенно разные качества', 'i/c/', '0000-00-00', 0),
(24, '', 'Культурная эволюция2', 'Российские и зарубежные компании ценят в менеджерах совершенно разные качества', 'i/c/', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categorie`
--

INSERT INTO `categorie` (`id`, `name`) VALUES
(1, 'Описание подхода'),
(2, 'вебинар'),
(3, 'hrtimes');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `tel`, `name`, `surname`, `message`) VALUES
(1, 'asdf', '', '', '', ''),
(2, 'asdf@ms.ru', 'asdf', 'asdf', 'asdf', 'asdfasdfasdf'),
(4, 'sdfg@asd.rc', 'sdfg', 'sdfg', 'sdfg', 'sdfg'),
(5, 'sdfg@asd.rc', 'sdfg', 'sdfg', 'sdfg', 'sdfg'),
(6, 'test@asd.rc', 'sdfg', 'sdfg', 'sdfg', 'sdfg'),
(7, 'asdf@m.ru', 'asdf', 'asdf', 'asdf', 'test'),
(8, 'asdf@m.ru', 'asdf', 'asdf', 'asdf', 'test1');

-- --------------------------------------------------------

--
-- Структура таблицы `footer_nav`
--

CREATE TABLE `footer_nav` (
  `id` int(11) NOT NULL,
  `RUS` varchar(511) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ENG` varchar(511) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parant_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `footer_nav`
--

INSERT INTO `footer_nav` (`id`, `RUS`, `ENG`, `parant_id`) VALUES
(1, 'Обучение и развитие людей', 'http://localhost:3000/services-learning-first.html#container-4', 0),
(2, 'Оценка людей', '', 1),
(3, 'Разработка HR-систем', '', 1),
(4, 'Бизнес-консалтинг', '', 1),
(5, 'SuccessFactors', '', 1),
(6, 'Работа с мнениями и&nbsp;отношениями людей ', '', 1),
(7, 'Инсайты', 'insights.php', 0),
(8, 'Описание подхода', '', 7),
(9, 'Кейс', '', 7),
(10, 'Обзорная статья', '', 7),
(11, 'HRTimes', '', 7),
(12, 'О компании', '', 0),
(13, 'ЭКОПСИ. Цифры и факты', '', 12),
(14, 'Клиенты', '', 12),
(15, 'О компании', '', 12),
(16, 'Партнеры', '', 12),
(17, 'Управленческая команда', '', 12),
(18, 'Библиотека ЭКОПСИ', '', 12),
(19, 'Карьера', '', 0),
(20, 'Карьера в ЭКОПСИ', '', 19),
(21, 'Интервью с сотрудниками', '', 19),
(22, 'Как стать сотрудником', '', 19),
(23, 'Вакансии', '', 19);

-- --------------------------------------------------------

--
-- Структура таблицы `header_menu_items`
--

CREATE TABLE `header_menu_items` (
  `id` int(11) NOT NULL,
  `RUS` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ENG` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_html` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parant` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `header_menu_items`
--

INSERT INTO `header_menu_items` (`id`, `RUS`, `ENG`, `id_html`, `parant`) VALUES
(1, 'Услуги', 'services-learning-first', 'js-menu-services-btn', 0),
(2, 'Инсайты', 'insights', '', 0),
(3, 'Мероприятия', 'events', '', 0),
(4, 'О компании', 'about', '', 0),
(5, 'Карьера', 'career', '', 0),
(6, 'Контакты', 'contacts', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `menu__lists`
--

CREATE TABLE `menu__lists` (
  `id` int(11) NOT NULL,
  `RUS` varchar(511) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ENG` varchar(511) COLLATE utf8mb4_unicode_ci NOT NULL,
  `html_class` varchar(511) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parant_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu__lists`
--

INSERT INTO `menu__lists` (`id`, `RUS`, `ENG`, `html_class`, `parant_id`) VALUES
(1, 'Система работы с персоналом', 'services-opinions', 'menu__list-title', 0),
(2, 'Бренд работодателя', '', '', 1),
(3, 'Корпоративная культура', '', '', 1),
(4, 'Вовлеченность', '', '', 1),
(5, 'Промышленная безопасность', 'services-security', '', 1),
(6, 'Бренд работодателя', '', '', 1),
(7, 'Системы управления персоналом', 'services-learning-second', '', 1),
(8, 'Автоматизация HR на базе SAP SuccessFactors', 'services-success', '', 1),
(9, 'Система управления организацией', 'services-systems', 'menu__list-title', 0),
(10, 'Стретегия и организационное проектирование', '', '', 9),
(11, 'Операционная эффективность', '', '', 9),
(12, 'Практики регулярного менеджмента', '', '', 9),
(13, 'Люди', '', 'menu__list-title', 0),
(14, 'Оценка персонала', 'services-hr', '', 13),
(15, 'Обучение и развитие', 'services-learning-first', '', 13),
(16, 'Работа с топ-менеджерами', '', '', 13),
(47, 'test2 3', 'services-test2 3', '', 13);

-- --------------------------------------------------------

--
-- Структура таблицы `solutions`
--

CREATE TABLE `solutions` (
  `id` int(11) NOT NULL,
  `title` varchar(511) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parant_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `solutions`
--

INSERT INTO `solutions` (`id`, `title`, `text`, `parant_id`) VALUES
(1, 'Система управления эффективностью/ переменной оплаты труда', 'Опыт работы — один из самых очевидных критериев оценки при подборе. Около 80% вакансий содержат опыт как одно из базовых требований — в количестве лет или просто факт работы на похожей позиции (Chakrabarti, 2018). И есть такое же интуитивное ощущение, что это правильный критерий. Но нет ли здесь подмены понятий, когда под опытом работы мы подразумеваем релевантные навыки и знания? Насколько опыт работы действительно предсказывает успешность в работе? Для ответов на эти вопросы группа исследователей провела крупный метаанализ. ', 0),
(3, 'Аудит промышленной безопасности', '2Аудит промышленной безопасности', 5),
(4, 'Управление промышленной безопасностью', '22Управление промышленной безопасностью', 5),
(5, 'Обучение по охране труда и культуре безопасности', 'asasfОбучение по охране труда и культуре безопасности', 5),
(6, 'Xnjasdf', 'asdfasdf', 5),
(7, '7Аудит промышленной безопасности', '2Аудит промышленной безопасности', 5),
(8, '8Управление промышленной безопасностью', '22Управление промышленной безопасностью', 5),
(9, '9Обучение по охране труда и культуре безопасности', 'asasfОбучение по охране труда и культуре безопасности', 5),
(10, '10Xnjasdf', 'asdfasdf', 5),
(11, 'Что-то', '111', 15);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `footer_nav`
--
ALTER TABLE `footer_nav`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `header_menu_items`
--
ALTER TABLE `header_menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu__lists`
--
ALTER TABLE `menu__lists`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `footer_nav`
--
ALTER TABLE `footer_nav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `header_menu_items`
--
ALTER TABLE `header_menu_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `menu__lists`
--
ALTER TABLE `menu__lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT для таблицы `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
