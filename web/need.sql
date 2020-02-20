-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 20 fév. 2020 à 10:08
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `need`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `civilites`
--

DROP TABLE IF EXISTS `civilites`;
CREATE TABLE IF NOT EXISTS `civilites` (
  `id_civilite` int(11) NOT NULL AUTO_INCREMENT,
  `civilite` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_civilite`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_civilite` int(11) NOT NULL,
  `date_naissance` date NOT NULL,
  `date_inscription` date NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id_client`),
  KEY `fk_clients_civilites` (`id_civilite`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `date_commande` date NOT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `fk_commandes_clients` (`id_client`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `compose`
--

DROP TABLE IF EXISTS `compose`;
CREATE TABLE IF NOT EXISTS `compose` (
  `id_compose` int(11) NOT NULL AUTO_INCREMENT,
  `id_commande` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY (`id_compose`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `couleurs`
--

DROP TABLE IF EXISTS `couleurs`;
CREATE TABLE IF NOT EXISTS `couleurs` (
  `id_couleur` int(11) NOT NULL AUTO_INCREMENT,
  `couleur` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_couleur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `id_genre` int(11) NOT NULL AUTO_INCREMENT,
  `genre` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genres`
--

INSERT INTO `genres` (`id_genre`, `genre`) VALUES
(1, 'hom'),
(2, 'fem');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `id_taille` int(11) NOT NULL,
  `id_couleur` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `id_reference` int(11) NOT NULL,
  `id_categories` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `prix` float NOT NULL,
  `id_genre` int(11) NOT NULL,
  PRIMARY KEY (`id_produit`),
  KEY `fk_produits_tailles` (`id_taille`),
  KEY `fk_produits_couleurs` (`id_couleur`),
  KEY `fk_produits_reference` (`id_reference`),
  KEY `fk_produits_categories` (`id_categories`),
  KEY `fk_produits_types` (`id_type`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id_produit`, `image`, `description`, `id_taille`, `id_couleur`, `stock`, `id_reference`, `id_categories`, `id_type`, `prix`, `id_genre`) VALUES
(1, 'img/item_1.jpg', 'chino slim fit', 1, 0, 1, 0, 0, 1, 99.9, 1),
(2, 'img/item_2.jpg', 't-shirt scotch&soda', 2, 0, 1, 0, 0, 2, 99.9, 1),
(3, 'img/item_3_red.jpg', 'chemises femme', 2, 0, 1, 0, 0, 3, 99.9, 2);

-- --------------------------------------------------------

--
-- Structure de la table `reference`
--

DROP TABLE IF EXISTS `reference`;
CREATE TABLE IF NOT EXISTS `reference` (
  `id_reference` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_reference`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tailles`
--

DROP TABLE IF EXISTS `tailles`;
CREATE TABLE IF NOT EXISTS `tailles` (
  `id_taille` int(11) NOT NULL AUTO_INCREMENT,
  `taille` varchar(25) DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_taille`),
  KEY `fk_taille_type` (`id_type`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tailles`
--

INSERT INTO `tailles` (`id_taille`, `taille`, `id_type`) VALUES
(1, '28/32', 1),
(2, '29/32', 1),
(3, 's', 2),
(4, 'm', 2);

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE IF NOT EXISTS `types` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`id_type`, `type`) VALUES
(1, 'jeans-chinos'),
(2, 't-shirts'),
(3, 'chemises-tops');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
