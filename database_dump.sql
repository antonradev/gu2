-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 10 юни 2014 в 15:23
-- Версия на сървъра: 5.5.36-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mynshost_xp`
--

-- --------------------------------------------------------

--
-- Структура на таблица `findable_items`
--

CREATE TABLE IF NOT EXISTS `findable_items` (
  `item_id` int(3) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(80) NOT NULL,
  `item_value` int(9) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Схема на данните от таблица `findable_items`
--

INSERT INTO `findable_items` (`item_id`, `item_name`, `item_value`) VALUES
(1, 'Bronze coin', 1),
(2, 'Copper coin', 2),
(3, 'Silver coin', 10),
(4, 'Golden coin', 30),
(5, 'Wooden medallion', 1),
(6, 'Iron medallion', 3),
(7, 'Bronze medallion', 4),
(8, 'Copper medallion', 5),
(9, 'Silver medallion', 15),
(10, 'Golden medallion', 40),
(11, 'Copper teaspoon', 2),
(12, 'Silver teaspoon', 10),
(13, 'Golden teaspoon', 30),
(14, 'Broken toy', 1),
(15, 'Broken cellphone', 2),
(16, 'Lost cellphone', 4),
(17, 'Banknote', 1);

-- --------------------------------------------------------

--
-- Структура на таблица `levels_names`
--

CREATE TABLE IF NOT EXISTS `levels_names` (
  `level_id` int(3) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(60) NOT NULL,
  `min_value` int(11) NOT NULL,
  `max_value` int(11) NOT NULL,
  PRIMARY KEY (`level_id`),
  UNIQUE KEY `level_name` (`level_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Схема на данните от таблица `levels_names`
--

INSERT INTO `levels_names` (`level_id`, `level_name`, `min_value`, `max_value`) VALUES
(1, 'Newbie', 1, 9999),
(2, 'Advanced Newbie', 10000, 19999),
(3, 'Newbie Pro', 20000, 29999),
(4, 'Advanced', 30000, 39999),
(5, 'High Advanced', 40000, 49999),
(6, 'Advanced Pro', 50000, 59999),
(7, 'Pro', 60000, 69999),
(8, 'Master', 70000, 79999),
(9, 'Guru', 80000, 89999),
(10, 'Godlike', 90000, 99999),
(11, 'God', 100000, 200000);

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(80) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `level_number` int(3) NOT NULL,
  `xp_total_gained` int(15) NOT NULL,
  `pages_views` int(9) NOT NULL,
  `collected_items` int(9) NOT NULL,
  `total_coins` int(11) NOT NULL,
  `vip_membership` int(1) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`, `date_created`, `level_number`, `xp_total_gained`, `pages_views`, `collected_items`, `total_coins`, `vip_membership`) VALUES
(1, 'john', '5f4dcc3b5aa765d61d8327deb882cf99', 'John Smith', '2014-01-28 00:00:00', 6, 58199, 16, 153, 1326, 0);

-- --------------------------------------------------------

--
-- Структура на таблица `xp_users`
--

CREATE TABLE IF NOT EXISTS `xp_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(36) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `level_count` int(6) NOT NULL,
  `level_name` varchar(40) NOT NULL,
  `xp_gained` int(11) NOT NULL,
  `pages_views` int(11) NOT NULL,
  `clicks_count` int(11) NOT NULL,
  `total_xp_number` int(24) NOT NULL,
  `vip_membership` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Схема на данните от таблица `xp_users`
--

INSERT INTO `xp_users` (`user_id`, `username`, `password`, `name`, `date_created`, `level_count`, `level_name`, `xp_gained`, `pages_views`, `clicks_count`, `total_xp_number`, `vip_membership`) VALUES
(1, 'john', '5f4dcc3b5aa765d61d8327deb882cf99', 'John Smith', '2014-01-07 06:00:00', 11, '11', -127740, 103, 6, 2538811, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
