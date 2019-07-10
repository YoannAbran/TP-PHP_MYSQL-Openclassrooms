-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 10 juil. 2019 à 07:35
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `minichat2`
--

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

DROP TABLE IF EXISTS `minichat`;
CREATE TABLE IF NOT EXISTS `minichat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_mes` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `minichat`
--

INSERT INTO `minichat` (`id`, `pseudo`, `message`, `date_mes`) VALUES
(1, 'Bob', 'Salut !comment ça va?', '2019-07-09 15:29:15'),
(5, 'Max', 'Salut salut', '2019-07-09 16:00:54'),
(6, 'Max', 'Salut', '2019-07-09 16:13:49'),
(7, 'Bob', 'jbkb', '2019-07-10 08:34:51'),
(8, 'Max', 'jzk,pkz', '2019-07-10 08:37:47'),
(9, 'Jean', 'je suis un ange', '2019-07-10 08:51:28'),
(10, 'Jean', 'jnun', '2019-07-10 08:52:16'),
(11, 'Jean', 'jnoiun', '2019-07-10 09:00:56'),
(12, 'Bob', 'uniup', '2019-07-10 09:01:44'),
(13, 'Gerard', 'rdj', '2019-07-10 09:02:58'),
(14, 'Bob', 'gros bovb', '2019-07-10 09:06:32'),
(15, 'Jean', 'iks,kx,', '2019-07-10 09:12:24'),
(16, 'Max', 'jnonon', '2019-07-10 09:14:45'),
(17, 'Bob', 'inin', '2019-07-10 09:15:48'),
(18, 'Bob', 'non', '2019-07-10 09:17:28'),
(19, 'Max', 'ki,i,', '2019-07-10 09:19:13'),
(20, 'Bob', 'noino', '2019-07-10 09:20:23'),
(21, 'Max', 'vyiyhv', '2019-07-10 09:22:17'),
(22, 'Bob', 'nbo', '2019-07-10 09:23:54'),
(23, 'Bob', 'bjojb', '2019-07-10 09:24:54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
