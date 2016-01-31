-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Структура на таблица `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `publish` int(4) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `countp` int(4) NOT NULL,
  `format` enum('A3','A4','','') NOT NULL,
  `Resume` text NOT NULL,
  `Isbn` varchar(15) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Схема на данните от таблица `books`
--

INSERT INTO `books` (`id`, `title`, `publish`, `author`, `countp`, `format`, `Resume`, `Isbn`, `image`) VALUES
(1, 'Book1', 1995, 'someone', 123, 'A4', 'hdsh someone', '1234567', '../uploads/1454106387Limitless.jpg'),
(2, 'book1', 1994, 'someone1', 100, 'A3', 'some info about the book1', '1234511AF', '../uploads/1.jpg'),
(3, 'book1', 1994, 'someone1', 100, 'A3', 'some info about the book2', '12342323AF', '../uploads/2.jpg'),
(4, 'book1', 1995, 'someone1', 100, 'A3', 'some info about the book3', '123456AFff', '../uploads/3.jpg'),
(5, 'book1', 1990, 'someone1', 100, 'A4', 'some info about the book4', '12345sdads6AF', '../uploads/4.jpg'),
(6, 'book1', 1997, 'someone1', 100, 'A4', 'some info about the book5', '123456sdsAF', '../uploads/5.jpg'),
(7, 'book1', 1999, 'someone1', 100, 'A4', 'some info about the book6', '123456123AF', '../uploads/1.jpg'),
(8, 'book1', 1970, 'someone1', 100, 'A4', 'some info about the book7', '12345645AF', '../uploads/1.jpg'),
(9, 'book1', 1975, 'someone1', 100, 'A4', 'some info about the book8', '123456321AF', '../uploads/1.jpg'),
(10, 'book1', 1974, 'someone1', 100, 'A3', 'some info about the book9', '123456dsdsAF', '../uploads/3.jpg'),
(11, 'book1', 1974, 'someone1', 100, 'A4', 'some info about the book10', '123456A12F', '../uploads/4.jpg'),
(12, 'book1', 1924, 'someone1', 100, 'A3', 'some info about the book11', '12345633AF', '../uploads/5.jpg'),
(13, 'book61', 1934, 'someone1', 100, 'A4', 'some info about the book12', '123456AF', '../uploads/5.jpg'),
(14, 'book15', 1114, 'someone1', 100, 'A3', 'some info about the book13', '123456AF', '../uploads/3.jpg'),
(15, 'book13', 1204, 'someone1', 100, 'A4', 'some info about the book14', '123456AF', '../uploads/1.jpg'),
(16, 'book21', 1994, 'someone1', 100, 'A3', 'some info about the book15', '123456AF', '../uploads/1.jpg'),
(17, 'book41', 1994, 'someone1', 100, 'A3', 'some info about the book16', '123456AF', '../uploads/2.jpg'),
(18, 'dsad', 123, 'dasd', 123, 'A4', 'Resume:dasd', 'dasd', '../uploads/1454234320Limitless.jpg'),
(19, 'otherBook', 2004, 'gosho', 123, 'A4', 'dsad', '12343', '../uploads/1454235081Limitless.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `pass` char(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `email`) VALUES
(5, 'tito', '9fa6439825692944fbce929d0a2842f3', 'tito@abv.bg'),
(6, 'elab', '9fa6439825692944fbce929d0a2842f3', 'elab@abv.bg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
