-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 11 sep. 2023 à 16:18
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wf3_php_intermediaire_cynthia`
--

-- --------------------------------------------------------

--
-- Structure de la table `advert`
--

CREATE TABLE `advert` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `postal_code` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `type` enum('location','vente') NOT NULL,
  `price` double NOT NULL,
  `reservation_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `advert`
--

INSERT INTO `advert` (`id`, `title`, `description`, `postal_code`, `city`, `type`, `price`, `reservation_message`) VALUES
(1, 'Parisien', 'Des choses', 75015, 'Paris', 'vente', 300000, '1111 nnn'),
(2, 'Parisien', 'Des choses', 75015, 'Paris', 'vente', 300000, ''),
(3, 'Haussmannien', 'Vue sur les toits de Paris', 75015, '15 rue de la république', 'vente', 455000, 'hh ttt'),
(4, 'Super Appart', 'Lorem ipsum', 75014, '45 avenue magenta', 'location', 1860, 'aaa nnnn mmm'),
(5, 'Appartement lumineux', 'Lorem ipsum', 75018, '5 Impasse de la villa', 'location', 2500, ''),
(6, 'Appartement somptueux', 'Lorem ipsum', 75016, '5 Impasse de la villa', 'location', 5400, ''),
(7, 'Super Appart', 'Lorem ipsum', 75015, '15 rue de la république', 'vente', 500500, ''),
(8, 'Appartement lumineux', 'Lorem ipsum', 75014, '45 avenue magenta', 'vente', 455000, 'bbb ffff'),
(9, 'Appartement lumineux', 'Lorem ipsum', 75014, '45 avenue magenta', 'vente', 455000, ''),
(10, 'Appartement lumineux', 'Lorem ipsum', 75014, '45 avenue magenta', 'vente', 455000, ''),
(11, 'Appartement lumineux', 'Lorem ipsum', 75014, '45 avenue magenta', 'vente', 455000, ''),
(12, 'Appartement lumineux', 'Lorem ipsum', 75014, '45 avenue magenta', 'vente', 455000, ''),
(13, 'Appartement lumineux', 'Lorem ipsum', 75014, '45 avenue magenta', 'vente', 455000, ''),
(14, 'Appartement lumineux', 'Lorem ipsum', 75014, '45 avenue magenta', 'vente', 455000, ''),
(15, 'Appartement lumineux', 'Lorem ipsum', 75014, '45 avenue magenta', 'vente', 455000, ''),
(16, 'Appartement lumineux', 'Lorem ipsum', 75014, '45 avenue magenta', 'vente', 455000, ''),
(17, 'Appartement lumineux', 'Lorem ipsum', 75014, '45 avenue magenta', 'vente', 455000, ''),
(18, 'Appartement lumineux', 'Lorem ipsum', 75014, '45 avenue magenta', 'vente', 455000, ''),
(19, 'Appartement somptueux', 'Lorem ipsum', 75014, '45 avenue magenta', 'vente', 455000, 'hhh hhh');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `advert`
--
ALTER TABLE `advert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
