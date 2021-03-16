-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 16 mars 2021 à 13:19
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `eventvirtual`
--

-- --------------------------------------------------------

--
-- Structure de la table `creerstand`
--

CREATE TABLE `creerstand` (
  `id` int(50) NOT NULL,
  `noms` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `avatar` int(50) NOT NULL,
  `video` varchar(50) NOT NULL,
  `couleur` varchar(50) NOT NULL,
  `position` int(50) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `creerstand`
--

INSERT INTO `creerstand` (`id`, `noms`, `password`, `email`, `avatar`, `video`, `couleur`, `position`, `logo`) VALUES
(1, 'istic', 'mamma', 'ems@gmail.com', 3, 'http', '', 0, 'ms.jpg'),
(2, 'istic', 'mmmm', 'elmay@gmail.com', 3, 'https://www.youtube.com/watch?v=nt8Kg_fpvTc', '', 0, ''),
(3, 'istic', 'mmmm', 'elmay@gmail.com', 2, 'https://www.youtube.com/watch?v=nt8Kg_fpvTc', '', 0, ''),
(4, 'istic', 'mmmm', 'elmay@gmail.com', 2, 'https://www.youtube.com/watch?v=nt8Kg_fpvTc', '', 0, ''),
(5, '', '', '', 0, '', '', 0, ''),
(6, 'istic', 'mmm', 'elmay@gmail.com', 3, 'https://www.youtube.com/watch?v=nt8Kg_fpvTc', '', 0, ''),
(7, 'istic', 'mmm', 'elmay@gmail.com', 4, 'https://www.youtube.com/watch?v=nt8Kg_fpvTc', '', 0, ''),
(8, '', '', '', 0, '', '', 0, ''),
(9, '', '', '', 0, '', '', 0, ''),
(10, '', '', '', 4, '', '', 0, ''),
(11, 'istic', ',d', 'lsdlqs@dnksn.com', 1, '', '', 0, ''),
(12, '', '', '', 0, '', '', 0, ''),
(13, '', '', '', 0, '', '', 0, ''),
(14, '', '', '', 1, '', '', 0, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `creerstand`
--
ALTER TABLE `creerstand`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `creerstand`
--
ALTER TABLE `creerstand`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
