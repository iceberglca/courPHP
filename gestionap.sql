-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 12 juil. 2024 à 18:23
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionap`
--

-- --------------------------------------------------------

--
-- Structure de la table `appel_offre`
--

DROP TABLE IF EXISTS `appel_offre`;
CREATE TABLE IF NOT EXISTS `appel_offre` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(300) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `date_limite` datetime DEFAULT NULL,
  `ID_type_ap` int DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_type_ap` (`ID_type_ap`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `appel_offre`
--

INSERT INTO `appel_offre` (`ID`, `titre`, `description`, `date_limite`, `ID_type_ap`) VALUES
(1, 'tcmp3', 'une offre  réservée seulement aux partenaires de la CNPS', '2024-07-30 12:00:00', 2),
(2, 'progrès', 'une offre pour toute les personnes qui desirent collaborés pour un partenariat avec la CNPS', '2024-07-31 12:00:00', 1),
(3, 'E juriste', 'une offre reservée aux partenaires de la CNPS', '2024-08-10 12:00:00', 2);

-- --------------------------------------------------------

--
-- Structure de la table `prestataire`
--

DROP TABLE IF EXISTS `prestataire`;
CREATE TABLE IF NOT EXISTS `prestataire` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NOM` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Prenom` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Adress` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Tel` int DEFAULT NULL,
  `EMAIL` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `prestataire`
--

INSERT INTO `prestataire` (`ID`, `NOM`, `Prenom`, `Adress`, `Tel`, `EMAIL`) VALUES
(1, 'olloko', 'marc-roland ndouba', 'yopougon niangon villa 527', 769291720, 'marcolloko15@gmail.com'),
(2, 'olloko', 'emmanuel aimée', 'cocody angre star8', 540503820, 'aiméeemmauel@gmail.com'),
(3, 'kouame', 'franck ciriac', 'plateau sud', 100044466, 'franckkouame@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `soumission`
--

DROP TABLE IF EXISTS `soumission`;
CREATE TABLE IF NOT EXISTS `soumission` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `montant` int NOT NULL,
  `date_soumission` datetime DEFAULT NULL,
  `ID_prestataire` int NOT NULL,
  `ID_appel_offre` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_prestataire` (`ID_prestataire`),
  KEY `ID_appel_offre` (`ID_appel_offre`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `soumission`
--

INSERT INTO `soumission` (`ID`, `montant`, `date_soumission`, `ID_prestataire`, `ID_appel_offre`) VALUES
(1, 50, '2024-07-12 16:00:00', 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `type_ap`
--

DROP TABLE IF EXISTS `type_ap`;
CREATE TABLE IF NOT EXISTS `type_ap` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `libelle_AP` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `type_ap`
--

INSERT INTO `type_ap` (`ID`, `libelle_AP`) VALUES
(1, 'offre privé'),
(2, 'offre publique');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
