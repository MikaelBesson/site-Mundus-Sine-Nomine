-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 03 juin 2021 à 05:57
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mundus`
--

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

DROP TABLE IF EXISTS `game`;
CREATE TABLE IF NOT EXISTS `game` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `infogame_fk` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `info` (`infogame_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `game`
--

INSERT INTO `game` (`id`, `name`, `infogame_fk`) VALUES
(2, '7 days to die', 2),
(3, 'Ark survival', 3),
(4, 'Valheim', 4),
(5, 'Last oasis', 5),
(6, 'Scum', 6),
(7, 'Life is feudal', 7);

-- --------------------------------------------------------

--
-- Structure de la table `infogame`
--

DROP TABLE IF EXISTS `infogame`;
CREATE TABLE IF NOT EXISTS `infogame` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `dev` varchar(50) COLLATE utf8_bin NOT NULL,
  `genre` varchar(50) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `infogame`
--

INSERT INTO `infogame` (`id`, `dev`, `genre`, `content`) VALUES
(2, 'The Fun Pimp', 'Survival horror', 'Dans 7 Days To Die, le joueur apparaît soit dans un monde généré aléatoirement soit dans le comté de Navezgane en Arizona. Il n\'a alors qu\'un seul objectif : survivre aussi longtemps que possible contre les éléments et les hordes de zombies. Étant un jeu de survie, le joueur est dans le besoin constant d\'avoir accès à de l\'eau et de la nourriture pour ne pas mourir et est vulnérable aux blessures et aux maladies\r\nqui peuplent le monde.'),
(3, 'Studio Wilcard', 'Action-aventure, survie', 'Dans le jeu, les joueurs doivent survivre dans un monde rempli de dinosaures, d\'animaux préhistoriques\r\net toutes sortes de créatures disparues, de dangers naturels et potentiellement de joueurs humains hostiles.Ils doivent aussi faire attention à leur vie, leur fatigue, leur poids, leur nourriture et leur soif,leur oxygène et leur torpeur ainsi que des dangers tels que les poisons, les maladies, la chaleur, le froid, etc.'),
(4, 'Iron Gate AB', 'Sandbox, survie', 'Le joueur incarne un viking tombé au combat à Valheim, dixième monde fictif de la mythologie nordique où il doit fabriquer des outils, construire des abris et combattre des ennemis pour survivre. L\'histoire veut que le joueur prouve sa valeur aux dieux en survivant face à la faune rude aux côtés de laquelle il évolue.Des stèles à travers le monde témoignent du récit de vikings auparavant déchus.'),
(5, 'Donkey Crew', 'Survival MMO', 'La Terre a cessé de tourner et les survivants doivent être constamment en mouvement pour rester dans la zone habitable entre l\'obscurité froide et la chaleur torride du soleil. Construisez des marcheurs en bois pour les bases de combat. Maniez des armes portatives et montées sur marcheurs pour combattre les Rupus et d\'autres nomades.'),
(6, 'Gamepires', 'Survie', 'Le jeu se déroule sur une île inspirée de la Méditerranée où 64 joueurs par serveur tenteront de survivre et de quitter l\'île en retirant d\'abord l\'implant qui vous empêche de partir. Le joueur gagnera des points de renommée en participant à divers événements motivés par l\'action ou tout simplement en survivant dans un environnement hostile. Ces points de renommée permettent au joueur d\'être cloné en cas de décès et sont utilisés comme devises pour acheter ou échanger dans diverses zones de sécurité. Le joueur sera en mesure de fortifier les structures et les points existants afin de sécuriser les positions ou de stocker les éléments nécessaires au joueur. '),
(7, 'Bitbox', 'Survie', 'Life Is Feudal: Your Own est un jeu vidéo de type sandbox développé par Bitbox, se plaçant dans l\'univers du médiéval réaliste dans un monde fictif.');

-- --------------------------------------------------------

--
-- Structure de la table `infoserv`
--

DROP TABLE IF EXISTS `infoserv`;
CREATE TABLE IF NOT EXISTS `infoserv` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `serv_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `ip` int(11) NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `game_fk` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `serv_name` (`serv_name`),
  KEY `game_fk` (`game_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'guest');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(200) COLLATE utf8_bin NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `role_fk` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `role` (`role_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `role_fk`) VALUES
(1, 'Groot', '$2y$10$d8ekLYCPY/WxiW7T9z7EmuTRazToSWyN36jlgxwBF2j7p4Yj0zqsi', 'besson.mikael04@gmail.com', 1),
(2, 'tom', '$2y$10$gxzfLQY4qAgs.X24qg25B.1g0OAQNj7fDgvmCVcqAu/l0g/NupuT.', 'tom@gmail.com', 3);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `infogame_fk` FOREIGN KEY (`infogame_fk`) REFERENCES `game` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `infoserv`
--
ALTER TABLE `infoserv`
  ADD CONSTRAINT `game_fk` FOREIGN KEY (`game_fk`) REFERENCES `game` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `role` FOREIGN KEY (`role_fk`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
