-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 24 oct. 2022 à 17:43
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tasteofeurope`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id_activite` int(6) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`id_activite`, `nom`, `description`, `date`) VALUES
(1, 'gispert', 'apprend a cuisiner', '28/07/23 10h52');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `login` varchar(25) NOT NULL,
  `mdp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`login`, `mdp`) VALUES
('groupe', 'tasteofeurope'),
('prof', 'prof');

-- --------------------------------------------------------

--
-- Structure de la table `animation`
--

CREATE TABLE `animation` (
  `description` text NOT NULL,
  `date` varchar(15) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `id_animation` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `animation`
--

INSERT INTO `animation` (`description`, `date`, `nom`, `id_animation`) VALUES
('On vous propose un petit concour de cuisine européennes pour voir qui seras le grand gagnant de la cuisine a nôtre festival', '28/07/23 09h45', 'concours de cuisine', 1);

-- --------------------------------------------------------

--
-- Structure de la table `inscrit`
--

CREATE TABLE `inscrit` (
  `prenom` varchar(25) NOT NULL,
  `mail` varchar(85) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `id_inscrit` int(6) NOT NULL,
  `animation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `inscrit`
--

INSERT INTO `inscrit` (`prenom`, `mail`, `nom`, `id_inscrit`, `animation`) VALUES
('charles', 'xenonkiin@gmail.com', 'gispert', 27, 'concour de mangeur'),
('incarnation', 'eeee', 'exposito', 29, 'concour de mangeur'),
('', '', 'cuisine slovaque en hiver', 30, ''),
('', '', 'cuisine slovaque en hiver', 31, ''),
('', '', 'gispert', 32, ''),
('', '', 'gispert', 33, ''),
('', '', 'gispert', 34, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`id_activite`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`login`);

--
-- Index pour la table `animation`
--
ALTER TABLE `animation`
  ADD PRIMARY KEY (`id_animation`);

--
-- Index pour la table `inscrit`
--
ALTER TABLE `inscrit`
  ADD PRIMARY KEY (`id_inscrit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `inscrit`
--
ALTER TABLE `inscrit`
  MODIFY `id_inscrit` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
