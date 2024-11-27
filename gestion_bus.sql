-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 18 nov. 2024 à 14:42
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_bus`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `motDePasse` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `email`, `motDePasse`) VALUES
(1, 'El Mansouri', 'Hassan', 'hassan.elmansouri@mail.com', 'adminpass1');

-- --------------------------------------------------------

--
-- Structure de la table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `marque` varchar(50) DEFAULT NULL,
  `capacite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `bus`
--

INSERT INTO `bus` (`id`, `numero`, `marque`, `capacite`) VALUES
(1, 'AG12345', 'Mercedes-Benz', 50),
(2, 'AG23456', 'Volvo', 40),
(3, 'AG34567', 'Scania', 60),
(4, 'AG45678', 'Iveco', 55),
(5, 'AG56789', 'Man', 45),
(6, 'AG67890', 'Renault', 48),
(7, 'AG78901', 'Setra', 60),
(8, 'AG89012', 'Isuzu', 35),
(9, 'AG90123', 'Van Hool', 52),
(10, 'AG01234', 'Solaris', 40),
(11, 'AG11223', 'Scania', 62),
(12, 'AG22334', 'Volvo', 50),
(13, 'AG33445', 'Mercedes-Benz', 54),
(14, 'AG44556', 'Iveco', 58),
(15, 'AG55667', 'Man', 44),
(16, 'AG66778', 'Setra', 59),
(17, 'AG77889', 'Renault', 47),
(18, 'AG88990', 'Solaris', 42),
(19, 'AG99001', 'Isuzu', 37),
(20, 'AG10012', 'Van Hool', 55);

-- --------------------------------------------------------

--
-- Structure de la table `cartereduction`
--

CREATE TABLE `cartereduction` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `pourcentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cartereduction`
--

INSERT INTO `cartereduction` (`id`, `type`, `pourcentage`) VALUES
(1, 'Etudiant', 20),
(2, 'Senior', 15),
(3, 'Militaire', 25),
(4, 'Professeur', 18);

-- --------------------------------------------------------

--
-- Structure de la table `chauffeur`
--

CREATE TABLE `chauffeur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `numTelephone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `permis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `chauffeur`
--

INSERT INTO `chauffeur` (`id`, `nom`, `prenom`, `numTelephone`, `email`, `permis`) VALUES
(1, 'El Amrani', 'Rachid', '0611234567', 'rachid.elamrani@mail.com', 'D567890'),
(2, 'Zaidi', 'Latifa', '0622345678', 'latifa.zaidi@mail.com', 'D678901');

-- --------------------------------------------------------

--
-- Structure de la table `horaire`
--

CREATE TABLE `horaire` (
  `id` int(11) NOT NULL,
  `trajet_station_id` int(11) NOT NULL,
  `heure_passage` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `horaire`
--

INSERT INTO `horaire` (`id`, `trajet_station_id`, `heure_passage`) VALUES
(1, 1, '08:00:00'),
(2, 2, '08:15:00'),
(3, 3, '08:30:00'),
(4, 4, '08:45:00'),
(5, 5, '09:00:00'),
(6, 6, '09:15:00'),
(7, 7, '09:30:00'),
(8, 8, '09:45:00'),
(9, 9, '08:15:00'),
(10, 38, '08:30:00'),
(11, 39, '08:45:00'),
(12, 10, '09:00:00'),
(13, 11, '09:15:00'),
(14, 40, '09:30:00'),
(15, 12, '09:45:00'),
(16, 41, '10:00:00'),
(17, 13, '10:15:00'),
(18, 42, '10:30:00'),
(19, 43, '10:45:00'),
(20, 14, '11:00:00'),
(21, 15, '11:15:00'),
(22, 44, '11:30:00'),
(23, 45, '11:45:00'),
(24, 16, '12:00:00'),
(25, 46, '12:15:00'),
(26, 17, '12:30:00'),
(27, 47, '12:45:00'),
(28, 18, '13:00:00'),
(29, 48, '13:15:00'),
(30, 19, '13:30:00'),
(31, 20, '13:45:00'),
(32, 49, '14:00:00'),
(33, 50, '14:15:00'),
(34, 21, '14:30:00'),
(35, 51, '14:45:00'),
(36, 22, '15:00:00'),
(37, 52, '15:15:00'),
(38, 23, '15:30:00'),
(39, 53, '15:45:00'),
(40, 24, '16:00:00'),
(41, 54, '16:15:00'),
(42, 25, '16:30:00'),
(43, 55, '16:45:00'),
(44, 26, '17:00:00'),
(45, 56, '17:15:00'),
(46, 27, '17:30:00'),
(47, 57, '17:45:00'),
(48, 28, '18:00:00'),
(49, 58, '18:15:00'),
(50, 29, '18:30:00'),
(51, 30, '18:45:00'),
(52, 59, '19:00:00'),
(53, 60, '19:15:00'),
(54, 31, '19:30:00'),
(55, 61, '19:45:00'),
(56, 32, '20:00:00'),
(57, 33, '20:15:00'),
(58, 62, '20:30:00'),
(59, 63, '20:45:00'),
(60, 34, '21:00:00'),
(61, 35, '21:15:00'),
(62, 64, '21:30:00'),
(63, 36, '21:45:00'),
(64, 65, '22:00:00'),
(65, 37, '22:15:00'),
(66, 66, '22:30:00');

-- --------------------------------------------------------

--
-- Structure de la table `station`
--

CREATE TABLE `station` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `station`
--

INSERT INTO `station` (`id`, `nom`, `adresse`) VALUES
(1, 'Gare Routière', 'Avenue Mohammed V, Agadir'),
(2, 'Centre-ville', 'Place Al Amal, Agadir'),
(3, 'Université Ibn Zohr', 'Quartier Universitaire, Agadir'),
(4, 'Plage d’Agadir', 'Corniche, Agadir'),
(5, 'Allée des Oiseaux', 'Adresse inconnue'),
(6, 'Poste Principale', 'Adresse inconnue'),
(7, 'Av. 29 Fev. Centre De Sante', 'Adresse inconnue'),
(8, 'Talborjt artisanat', 'Adresse inconnue'),
(9, 'Ennahda Mosquee', 'Adresse inconnue'),
(10, 'Anouar Souss', 'Adresse inconnue'),
(11, 'Les Amicales', 'Adresse inconnue'),
(12, 'Les Amicales Mosquee', 'Adresse inconnue'),
(13, 'Marin Pecheur', 'Adresse inconnue'),
(14, 'Lagouira Najah', 'Adresse inconnue'),
(15, 'Lagouira Farha', 'Adresse inconnue'),
(16, 'Lagouira', 'Adresse inconnue'),
(17, 'Lagouira 2', 'Adresse inconnue'),
(18, 'Erac 20 Aout', 'Adresse inconnue'),
(19, 'Iman Boukhari-Tafoukt', 'Adresse inconnue'),
(20, 'Iman Boukhari-Erac', 'Adresse inconnue'),
(21, 'L\'Wafa-L\'Qods', 'Adresse inconnue'),
(22, 'Rjaflah-Ghandi El Feddia', 'Adresse inconnue'),
(23, 'Dakhla L\'Fath', 'Adresse inconnue'),
(24, 'Dakhla Mosquee Abou Baker', 'Adresse inconnue'),
(25, 'Mansour Eddahbi Nakhli', 'Adresse inconnue'),
(26, '11 Janvier Dakhla', 'Adresse inconnue'),
(27, 'Complexe Jamal Dorra', 'Adresse inconnue'),
(28, 'Entree Hay Assalam', 'Adresse inconnue'),
(29, 'Place Hay Assalam', 'Adresse inconnue'),
(30, 'Salam Anas Bnou Malek', 'Adresse inconnue'),
(31, 'Houda Annexe Omrane', 'Adresse inconnue'),
(32, 'El Houda Banques', 'Adresse inconnue'),
(33, 'Houda Terminus', 'Adresse inconnue'),
(34, 'Sidi Bibi Centre', ''),
(35, 'Commune Sidi Bibi V', ''),
(36, 'Amm-Plas V', ''),
(37, 'Terminus Takkad', '');

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

CREATE TABLE `trajet` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `bus_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `trajet`
--

INSERT INTO `trajet` (`id`, `nom`, `bus_id`) VALUES
(1, 'Gare Routière à Plage', 1),
(2, 'Allée des Oiseaux', 2),
(3, 'Sidi Bibi Centre - Terminus Takkad', 2);

-- --------------------------------------------------------

--
-- Structure de la table `trajet_station`
--

CREATE TABLE `trajet_station` (
  `id` int(11) NOT NULL,
  `trajet_id` int(11) NOT NULL,
  `station_id` int(11) NOT NULL,
  `ordre_passage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `trajet_station`
--

INSERT INTO `trajet_station` (`id`, `trajet_id`, `station_id`, `ordre_passage`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 2),
(3, 1, 3, 3),
(4, 1, 4, 4),
(5, 1, 4, 5),
(6, 1, 3, 6),
(7, 1, 2, 7),
(8, 1, 1, 8),
(9, 2, 5, 1),
(10, 2, 6, 2),
(11, 2, 7, 3),
(12, 2, 8, 4),
(13, 2, 9, 5),
(14, 2, 10, 6),
(15, 2, 11, 7),
(16, 2, 12, 8),
(17, 2, 13, 9),
(18, 2, 14, 10),
(19, 2, 15, 11),
(20, 2, 16, 12),
(21, 2, 17, 13),
(22, 2, 18, 14),
(23, 2, 19, 15),
(24, 2, 20, 16),
(25, 2, 21, 17),
(26, 2, 22, 18),
(27, 2, 23, 19),
(28, 2, 24, 20),
(29, 2, 25, 21),
(30, 2, 26, 22),
(31, 2, 27, 23),
(32, 2, 28, 24),
(33, 2, 29, 25),
(34, 2, 30, 26),
(35, 2, 31, 27),
(36, 2, 32, 28),
(37, 2, 33, 29),
(38, 2, 33, 1),
(39, 2, 32, 2),
(40, 2, 31, 3),
(41, 2, 30, 4),
(42, 2, 29, 5),
(43, 2, 28, 6),
(44, 2, 27, 7),
(45, 2, 26, 8),
(46, 2, 25, 9),
(47, 2, 24, 10),
(48, 2, 23, 11),
(49, 2, 22, 12),
(50, 2, 21, 13),
(51, 2, 20, 14),
(52, 2, 19, 15),
(53, 2, 18, 16),
(54, 2, 17, 17),
(55, 2, 16, 18),
(56, 2, 15, 19),
(57, 2, 14, 20),
(58, 2, 13, 21),
(59, 2, 12, 22),
(60, 2, 11, 23),
(61, 2, 10, 24),
(62, 2, 9, 25),
(63, 2, 8, 26),
(64, 2, 7, 27),
(65, 2, 6, 28),
(66, 2, 5, 29),
(67, 3, 34, 1),
(68, 3, 35, 2),
(69, 3, 36, 3),
(70, 3, 37, 4),
(71, 3, 37, 1),
(72, 3, 36, 2),
(73, 3, 35, 3),
(74, 3, 34, 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `motDePasse` varchar(100) NOT NULL,
  `carteReduction_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `telephone`, `motDePasse`, `carteReduction_id`) VALUES
(1, 'El Idrissi', 'Khalid', 'khalid.elidrissi@mail.com', '0612345678', 'khalid123', 1),
(2, 'Bennani', 'Fatima', 'fatima.bennani@mail.com', '0623456789', 'fatima123', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Index pour la table `cartereduction`
--
ALTER TABLE `cartereduction`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chauffeur`
--
ALTER TABLE `chauffeur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `horaire`
--
ALTER TABLE `horaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trajet_station_id` (`trajet_station_id`);

--
-- Index pour la table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bus_id` (`bus_id`);

--
-- Index pour la table `trajet_station`
--
ALTER TABLE `trajet_station`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trajet_id` (`trajet_id`),
  ADD KEY `station_id` (`station_id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `carteReduction_id` (`carteReduction_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `cartereduction`
--
ALTER TABLE `cartereduction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `chauffeur`
--
ALTER TABLE `chauffeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `horaire`
--
ALTER TABLE `horaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT pour la table `station`
--
ALTER TABLE `station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `trajet`
--
ALTER TABLE `trajet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `trajet_station`
--
ALTER TABLE `trajet_station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `horaire`
--
ALTER TABLE `horaire`
  ADD CONSTRAINT `horaire_ibfk_1` FOREIGN KEY (`trajet_station_id`) REFERENCES `trajet_station` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD CONSTRAINT `trajet_ibfk_1` FOREIGN KEY (`bus_id`) REFERENCES `bus` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `trajet_station`
--
ALTER TABLE `trajet_station`
  ADD CONSTRAINT `trajet_station_ibfk_1` FOREIGN KEY (`trajet_id`) REFERENCES `trajet` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `trajet_station_ibfk_2` FOREIGN KEY (`station_id`) REFERENCES `station` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`carteReduction_id`) REFERENCES `cartereduction` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
