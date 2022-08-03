-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 03 août 2022 à 08:01
-- Version du serveur : 8.0.27
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fansticker`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `message_id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(40) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_product` int NOT NULL,
  `qty` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sticker`
--

DROP TABLE IF EXISTS `sticker`;
CREATE TABLE IF NOT EXISTS `sticker` (
  `sticker_id` bigint UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `price` decimal(10,0) UNSIGNED NOT NULL,
  `width` int UNSIGNED NOT NULL,
  `height` int UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `categorie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `sticker`
--

INSERT INTO `sticker` (`sticker_id`, `name`, `price`, `width`, `height`, `image`, `categorie`) VALUES
(1, 'Gâteau muffin', '5', 4, 5, 'images/Stickers_Anniversaire/a1.png', 'anniversaire'),
(2, 'Gâteau Smarties', '5', 5, 5, 'images/Stickers_Anniversaire/a6.png', 'anniversaire'),
(3, 'Petits pieds', '5', 6, 4, 'images/Stickers_Bapteme/b1.png', 'bapteme'),
(4, 'Mon petit arc-en-ciel', '5', 6, 5, 'images/Stickers_Bapteme/b6.png', 'bapteme'),
(5, 'Garçon1', '5', 4, 5, 'images/Stickers_Naissance/n1.png', 'naissance'),
(6, 'Garçon2', '5', 4, 5, 'images/Stickers_Naissance/n2.png', 'naissance'),
(7, 'Sticker carré Athlète', '5', 4, 4, 'images/theme_sport/athletisme_carre_217.png', 'sport'),
(8, 'Sticker long Athlète', '5', 6, 4, 'images/theme_sport/athletisme_long.png', 'sport'),
(9, 'Sticker carré Basket', '5', 4, 4, 'images/theme_sport/basket_carre.png', 'sport'),
(10, 'Sticker long Basket', '5', 6, 4, 'images/theme_sport/basket_long.png', 'sport'),
(11, 'Sticker carré Football', '5', 4, 4, 'images/theme_sport/foot_carre.png', 'sport'),
(12, 'Sticker long Football', '5', 6, 4, 'images/theme_sport/foot_long.png', 'sport'),
(13, 'Sticker carré Golf', '5', 4, 4, 'images/theme_sport/golf_carre.png', 'sport'),
(14, 'Sticker long Golf', '5', 6, 4, 'images/theme_sport/golf_long.png', 'sport'),
(15, 'Sticker carré Rugby', '5', 4, 4, 'images/theme_sport/rugby_carre.png', 'sport'),
(16, 'Sticker long Rugby', '5', 6, 4, 'images/theme_sport/rugby_long.png', 'sport'),
(17, 'Sticker carré Tennis', '5', 4, 4, 'images/theme_sport/tennis_carre.png', 'sport'),
(18, 'Sticker long Tennis', '5', 6, 4, 'images/theme_sport/tennis_long.png', 'sport'),
(19, 'Sticker carré mariage classique', '5', 4, 4, 'images/images_mariage/classicblanc.png', 'mariage'),
(20, 'Sticker coeur mariage classique ', '5', 6, 4, 'images/images_mariage/classiccoeur.png', 'mariage'),
(21, 'Sticker carré mariage romantique', '5', 4, 4, 'images/images_mariage/talons.png', 'mariage'),
(22, 'Sticker coeur mariage romantique', '5', 6, 4, 'images/images_mariage/Weddtri.png', 'mariage'),
(23, 'Sticker rectangle mariage moderne', '5', 4, 4, 'images/images_mariage/mariagerectangle.png', 'mariage'),
(24, 'Sticker coeur mariage moderne', '5', 6, 4, 'images/images_mariage/rosecoeur.png', 'mariage'),
(25, 'Sticker mariage femmes', '5', 4, 4, 'images/images_mariage/leswed.png', 'mariage'),
(26, 'Sticker mariage rectangle oriental', '5', 6, 4, 'images/images_mariage/oriental.png', 'mariage'),
(27, 'Sticker justmarried gâteau', '5', 4, 4, 'images/images_mariage/lesmaries.png', 'mariage'),
(28, 'Sticker feuille mariage', '5', 6, 4, 'images/images_mariage/feuille.png', 'mariage'),
(29, 'Sticker carré Bâtiment', '5', 4, 4, 'images/theme_metier/batiment_carre.png', 'metier'),
(30, 'Sticker long Bâtiment', '5', 6, 4, 'images/theme_metier/batiment_long.png', 'metier'),
(31, 'Sticker carré Informatique', '5', 4, 4, 'images/theme_metier/informatique_carre.png', 'metier'),
(32, 'Sticker long Informatique', '5', 6, 4, 'images/theme_metier/informatique_long.png', 'metier'),
(33, 'Sticker carré Musique', '5', 4, 4, 'images/theme_metier/musique_carre.png', 'metier'),
(34, 'Sticker long Musique', '5', 6, 4, 'images/theme_metier/musique_long.png', 'metier'),
(35, 'Sticker carré Photo', '5', 4, 4, 'images/theme_metier/photo_carre.png', 'metier'),
(36, 'Sticker long Photo', '5', 6, 4, 'images/theme_metier/photo_long.png', 'metier'),
(37, 'Sticker carré Pompier', '5', 4, 4, 'images/theme_metier/pompier_carre.png', 'metier'),
(38, 'Sticker long Pompier', '5', 6, 4, 'images/theme_metier/pompier_long.png', 'metier'),
(39, 'Sticker carré Santé', '5', 4, 4, 'images/theme_metier/sante_carre.png', 'metier'),
(40, 'Sticker long Santé', '5', 6, 4, 'images/theme_metier/sante_long.png', 'metier');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` bigint UNSIGNED NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `postal_code` varchar(20) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
