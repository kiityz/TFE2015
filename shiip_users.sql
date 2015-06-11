-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 11 Juin 2015 à 15:30
-- Version du serveur: 5.5.43
-- Version de PHP: 5.4.41-0+deb7u1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `carolinedemaubeuge`
--

-- --------------------------------------------------------

--
-- Structure de la table `shiip_users`
--

CREATE TABLE IF NOT EXISTS `shiip_users` (
  `Num` int(11) NOT NULL AUTO_INCREMENT,
  `Login` text NOT NULL,
  `Mdp` text NOT NULL,
  `Email` text NOT NULL,
  PRIMARY KEY (`Num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `shiip_users`
--

INSERT INTO `shiip_users` (`Num`, `Login`, `Mdp`, `Email`) VALUES
(1, 'caro', '123', 'caro@gmail.com'),
(3, 'pony', 'magic', 'email@pony.com'),
(4, 'hello', 'erjgeg', 'caro@gmail.com'),
(5, 'kat', 'eaze', 'caro@gmail.com'),
(6, 'ki', 'dazd', 'dad@fzf.com'),
(7, '', '', ''),
(8, 'caro', 'adt', 'caor@gmail.com'),
(9, 'Cekr', 'hahdj', 'Kfkf@hmziah.com'),
(10, 'Ã©r', 'Ã©r', 'Ã©r'),
(11, 'Jehe', 'hee', 'Hehe'),
(12, 'kooka', 'kediskedis', 'lekooka@gmail.com'),
(13, 'caro', 'adt', 'carolyn225@hotmail.com'),
(14, 'jurydwm', 'jury111215', 'Jfkf'),
(15, 'caro', 'adt', 'kaa'),
(16, 'eli', 'adt', 'alal');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
