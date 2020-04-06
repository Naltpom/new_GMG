-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 02 Avril 2020 à 00:11
-- Version du serveur :  10.1.41-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-12+0~20191026.23+debian9~1.gbp940de0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `np_gmg`
--

-- --------------------------------------------------------

--
-- Structure de la table `gmg_articles`
--

CREATE TABLE `gmg_articles` (
  `id_article` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description_courte` text NOT NULL,
  `description` text NOT NULL,
  `prixdevente` int(5) NOT NULL,
  `model` varchar(255) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `stock` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `gmg_reward`
--

CREATE TABLE `gmg_reward` (
  `id_reward` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `articles_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='definit le classement des utilisateur en fonction des action';

-- --------------------------------------------------------

--
-- Structure de la table `gmg_user`
--

CREATE TABLE `gmg_user` (
  `id_user` int(3) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `genre` enum('h','f','a') NOT NULL,
  `pays` varchar(100) NOT NULL,
  `participation` int(10) DEFAULT NULL,
  `points` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `gmg_articles`
--
ALTER TABLE `gmg_articles`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `gmg_reward`
--
ALTER TABLE `gmg_reward`
  ADD PRIMARY KEY (`id_reward`);

--
-- Index pour la table `gmg_user`
--
ALTER TABLE `gmg_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `gmg_articles`
--
ALTER TABLE `gmg_articles`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `gmg_reward`
--
ALTER TABLE `gmg_reward`
  MODIFY `id_reward` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `gmg_user`
--
ALTER TABLE `gmg_user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
