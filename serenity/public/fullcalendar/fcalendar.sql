-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 12 2016 г., 10:52
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.4.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `fcalendar`
--

CREATE TABLE IF NOT EXISTS `fcalendar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `fcalendar`
--

INSERT INTO `fcalendar` (`id`, `title`, `description`, `start`, `end`) VALUES
(1, 'Событие 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos tempore possimus id voluptas perferendis adipisci beatae sapiente iure odio, asperiores debitis vel repellendus consequuntur! Ullam doloremque omnis dolorum aspernatur minima.', '2016-02-23', '2016-02-23'),
(2, 'Событие 2', 'Описание события 2', '2016-03-04', '2016-03-06'),
(3, 'Событие 1 апреля', 'Описание события 1 октября', '2016-04-07', '2016-04-07'),
(4, 'Событие 2 апреля', 'Описание события 2 октября', '2016-04-07', '2016-04-07'),
(5, '1', '2', '2016-03-10', '2016-03-16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
