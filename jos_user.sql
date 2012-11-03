-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 03, 2012 at 04:07 PM
-- Server version: 5.1.65-community-log
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `production`
--

-- --------------------------------------------------------

--
-- Table structure for table `jos_user`
--

DROP TABLE IF EXISTS `jos_user`;
CREATE TABLE IF NOT EXISTS `jos_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` varchar(50) DEFAULT NULL,
  `network` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `fio` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `public` int(11) NOT NULL DEFAULT '0',
  `vip` int(11) NOT NULL DEFAULT '0',
  `new` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `jos_user`
--

INSERT INTO `jos_user` (`id`, `uid`, `network`, `name`, `fio`, `login`, `pass`, `email`, `phone`, `desc`, `public`, `vip`, `new`) VALUES
(1, '7859497', 'vkontakte', 'Андрій Стружков', '', '', '', '', '', '', 0, 0, 0),
(2, '109577905009177913651', 'google', 'Andrej Struzhkov', '', '', '', '', '', '', 0, 0, 0),
(3, '779196', 'vkontakte', 'Светлана Кирпа', '', '', '', '', '', '', 0, 0, 0),
(4, '113275087722076674882', 'google', 'Светлана Кирпа', '', '', '', '', '', '', 0, 0, 0),
(5, '10006470696685068025', 'mailru', 'Светлана Кирпа', '', '', '', '', '', '', 0, 0, 0),
(6, '6474751', 'vkontakte', 'Михаил Бабаков', '', '', '', '', '', '', 0, 0, 0),
(7, '37097121', 'vkontakte', 'Gorguno Medozo', '', '', '', '', '', '', 0, 0, 0),
(8, '', 'anons.dp.ua', '', '', '', 'c4ca4238a0b923820dcc509a6f75849b', 'a@a.com', '', '', 0, 0, 0),
(9, '', 'anons.dp.ua', '', '', '', '81dc9bdb52d04dc20036dbd8313ed055', 'dfsd@fsdfsd.com', '', '', 0, 0, 0),
(10, '', 'anons.dp.ua', '', '', '', 'b59c67bf196a4758191e42f76670ceba', 'saasdas@dsdasdas.com', '', '', 0, 0, 0),
(11, '', 'anons.dp.ua', '', '', '', 'b8a64c4c4d2ab09c020112339ec3be2f', 'Shurenochek_zi@mail.ru', '', '', 0, 0, 0),
(12, '', 'anons.dp.ua', '', '', '', '27b88ffc99dc10a00435ad39ea177708', 'maxim.tymanov@yandex.ua', '', '', 0, 0, 0),
(13, '', 'anons.dp.ua', '', '', '', 'b59c67bf196a4758191e42f76670ceba', 'max@sunny.net.ua', '', '', 0, 0, 0),
(15, '9588521', 'vkontakte', '', 'Максим Александрович Туманов', '', '', 'maxim.tymanov@yandex.ua', '380963334242', '<p>Программист</p>', 1, 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
