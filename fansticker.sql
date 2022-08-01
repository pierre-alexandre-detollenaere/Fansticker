-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 29 juil. 2022 à 18:18
-- Version du serveur :  5.7.30
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fanstickers`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `message_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(40) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE `order` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `order_sticker`
--

CREATE TABLE `order_sticker` (
  `order_id` bigint(20) NOT NULL,
  `sticker_id` bigint(20) NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `sticker`
--

CREATE TABLE `sticker` (
  `sticker_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `price` decimal(10,0) UNSIGNED NOT NULL,
  `width` int(10) UNSIGNED NOT NULL,
  `height` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `categorie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sticker`
--

INSERT INTO `sticker` (`sticker_id`, `name`, `price`, `width`, `height`, `image`, `categorie`) VALUES
(1, 'Gâteau muffin', '5', 4, 5, 'images/Stickers_Anniversaire/a1.png', 'anniversaire'),
(2, 'Gâteau Smarties', '5', 5, 5, 'images/Stickers_Anniversaire/a6.png', 'anniversaire'),
(3, 'Petits pieds', '5', 6, 4, 'images/Stickers_Bapteme/b1.png', 'baptême'),
(4, 'Mon petit arc-en-ciel', '5', 6, 5, 'images/Stickers_Bapteme/b6.png', 'baptême'),
(5, 'Garçon1', '5', 4, 5, 'images/Stickers_Naissance/n1.png', 'naissance'),
(6, 'Garçon2', '5', 4, 5, 'images/Stickers_Naissance/n2.png', 'anniversaire'),
(7, 'Sticker carré Athlète', '5', 4, 4, 'images/theme_sport/athletisme_carre.png', 'athlétisme'),
(8, 'Sticker long Athlète', '5', 6, 4, 'images/theme_sport/athletisme_long.png', 'athlétisme'),
(9, 'Sticker carré Basket', '5', 4, 4, 'images/theme_sport/basket_carre.png', 'basket'),
(10, 'Sticker long Basket', '5', 6, 4, 'images/theme_sport/basket_long.png', 'basket'),
(11, 'Sticker carré Football', '5', 4, 4, 'images/theme_sport/foot_carre.png', 'foot'),
(12, 'Sticker long Football', '5', 6, 4, 'images/theme_sport/foot_long.png', 'foot'),
(13, 'Sticker carré Golf', '5', 4, 4, 'images/theme_sport/golf_carre.png', 'golf'),
(14, 'Sticker long Golf', '5', 6, 4, 'images/theme_sport/golf_long.png', 'golf'),
(15, 'Sticker carré Rugby', '5', 4, 4, 'images/theme_sport/rugby_carre.png', 'rugby'),
(16, 'Sticker long Rugby', '5', 6, 4, 'images/theme_sport/rugby_long.png', 'rugby'),
(17, 'Sticker carré Tennis', '5', 4, 4, 'images/theme_sport/tennis_carre.png', 'tennis'),
(18, 'Sticker long Tennis', '5', 6, 4, 'images/theme_sport/tennis_long.png', 'tennis'),
(19, 'Sticker carré mariage classique', '5', 4, 4, 'images/images_mariage/classicblanc.png', 'classic'),
(20, 'Sticker coeur mariage classique ', '5', 6, 4, 'images/images_mariage/classiccoeur.png', 'classic'),
(21, 'Sticker carré mariage romantique', '5', 4, 4, 'images/images_mariage/talons.png', 'romantique'),
(22, 'Sticker coeur mariage romantique', '5', 6, 4, 'images/images_mariage/Weddtri.png', 'romantique'),
(23, 'Sticker rectangle mariage moderne', '5', 4, 4, 'images/images_mariage/mariagerectangle.png', 'moderne'),
(24, 'Sticker coeur mariage moderne', '5', 6, 4, 'images/images_mariage/rosecoeur.png', 'moderne'),
(25, 'Sticker mariage femmes', '5', 4, 4, 'images/images_mariage/leswed.png', 'divers'),
(26, 'Sticker mariage rectangle oriental', '5', 6, 4, 'images/images_mariage/oriental.png', 'divers'),
(27, 'Sticker justmarried gâteau', '5', 4, 4, 'images/images_mariage/lesmaries.png', 'original'),
(28, 'Sticker feuille mariage', '5', 6, 4, 'images/images_mariage/feuille.png', 'original'),
(29, 'Sticker carré Bâtiment', '5', 4, 4, 'images/theme_metier/batiment_carre.png', 'bâtiment'),
(30, 'Sticker long Bâtiment', '5', 6, 4, 'images/theme_metier/batiment_long.png', 'bâtiment'),
(31, 'Sticker carré Informatique', '5', 4, 4, 'images/theme_metier/informatique_carre.png', 'informatique'),
(32, 'Sticker long Informatique', '5', 6, 4, 'images/theme_metier/informatique_long.png', 'informatique'),
(33, 'Sticker carré Musique', '5', 4, 4, 'images/theme_metier/musique_carre.png', 'musique'),
(34, 'Sticker long Musique', '5', 6, 4, 'images/theme_metier/musique_long.png', 'musique'),
(35, 'Sticker carré Photo', '5', 4, 4, 'images/theme_metier/photo_carre.png', 'photo'),
(36, 'Sticker long Photo', '5', 6, 4, 'images/theme_metier/photo_long.png', 'photo'),
(37, 'Sticker carré Pompier', '5', 4, 4, 'images/theme_metier/pompier_carre.png', 'pompier'),
(38, 'Sticker long Pompier', '5', 6, 4, 'images/theme_metier/pompier_long.png', 'pompier'),
(39, 'Sticker carré Santé', '5', 4, 4, 'images/theme_metier/sante_carre.png', 'santé'),
(40, 'Sticker long Santé', '5', 6, 4, 'images/theme_metier/sante_long.png', 'santé');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `postal_code` varchar(20) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Index pour la table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Index pour la table `order_sticker`
--
ALTER TABLE `order_sticker`
  ADD PRIMARY KEY (`order_id`,`sticker_id`);

--
-- Index pour la table `sticker`
--
ALTER TABLE `sticker`
  ADD PRIMARY KEY (`sticker_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sticker`
--
ALTER TABLE `sticker`
  MODIFY `sticker_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
