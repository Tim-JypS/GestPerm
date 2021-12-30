-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 29 déc. 2021 à 22:13
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
-- Base de données : `pct_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

DROP TABLE IF EXISTS `agent`;
CREATE TABLE IF NOT EXISTS `agent` (
  `IdAgent` int(11) NOT NULL AUTO_INCREMENT,
  `MatriculeAgent` varchar(255) NOT NULL,
  `NomAgent` varchar(255) NOT NULL,
  `PrenomsAgent` varchar(255) NOT NULL,
  `CiviliteAgent` varchar(25) NOT NULL,
  `NomJeuneFilleAgent` varchar(255) NOT NULL DEFAULT '',
  `SexeAgent` varchar(25) NOT NULL,
  `DateNaissanceAgent` date NOT NULL,
  `TelAgent` varchar(25) NOT NULL DEFAULT '',
  `EmailAgent` varchar(255) NOT NULL DEFAULT '',
  `DatePriseServiceAgent` date DEFAULT NULL,
  `SituationMatrimonialeAgent` varchar(255) NOT NULL,
  `DateCreationAgent` date NOT NULL,
  `PasswordAgent` varchar(255) NOT NULL,
  `IdEmploi` int(11) NOT NULL DEFAULT '-1',
  `IdFonction` int(11) NOT NULL DEFAULT '-1',
  `TypeAgent` int(11) NOT NULL DEFAULT '1',
  `IdEcole` int(11) NOT NULL DEFAULT '1',
  `photoAgent` text,
  `signatureAgent` text,
  PRIMARY KEY (`IdAgent`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`IdAgent`, `MatriculeAgent`, `NomAgent`, `PrenomsAgent`, `CiviliteAgent`, `NomJeuneFilleAgent`, `SexeAgent`, `DateNaissanceAgent`, `TelAgent`, `EmailAgent`, `DatePriseServiceAgent`, `SituationMatrimonialeAgent`, `DateCreationAgent`, `PasswordAgent`, `IdEmploi`, `IdFonction`, `TypeAgent`, `IdEcole`, `photoAgent`, `signatureAgent`) VALUES
(1, '12345B', 'BECHIE', 'Maotto Jean Martial', 'Monsieur', '', 'M', '2021-01-01', '0748968679', 'tiemoko.coulibaly@uvci.edu.ci', '2021-06-08', 'Marie', '2021-12-01', '$2y$10$x8dN75ea8ECDdUAr4kaMU.JFVvVLyZwXL.t3pfRbeRh7FY7UIcBwK', 1, 1, 1, 1, NULL, NULL),
(2, '15028B', 'KOUAO', 'Akoua Sarah', 'Madame', 'Labelle', 'F', '2021-12-07', '2122405689', 'akoua.kouao@uvci.edu.ci', '2021-12-07', 'Marie', '2021-12-11', '$2y$10$aMbCBWLZaQ9/BKLuJ2fdv.jfRRBi/loyPYaB/hesnRvHqm6rplO4W', 1, 1, 1, 2, NULL, NULL),
(3, '12029C', 'COULIBALY', 'Tim', 'Monsieur', '', 'M', '2021-12-14', '', 'tiemoko.coulibaly@uvci.edu.ci', '2021-12-14', 'Marie', '2021-12-11', '$2y$10$aMbCBWLZaQ9/BKLuJ2fdv.jfRRBi/loyPYaB/hesnRvHqm6rplO4W', 1, 1, 4, 1, '3.png', NULL),
(4, '12345A', 'MAOTTO', 'ERIC', 'Monsieur', '', 'M', '2021-05-20', '0748968679', 'maotto@live.fr', '2021-12-14', 'Celibat', '2021-12-11', '$2y$10$x8dN75ea8ECDdUAr4kaMU.JFVvVLyZwXL.t3pfRbeRh7FY7UIcBwK', 1, 1, 1, 1, '4.png', NULL),
(5, '12345C', 'COULIBALY', 'TIEMOKO', 'Monsieur', '', 'M', '1995-10-15', '0707070707', 'coulibaly@gmail.com', '2021-12-14', 'Celibat', '2021-12-26', '$2y$10$K29ZAEm2Ub8zV8PTlY.sJ.fxYlwxY8VEw8iUqWsbPD/vy0EHdRKC.', -1, 1, 1, 1, NULL, NULL),
(6, '12345K', 'KADJO', 'ANTHE RUTH BENEDICTE', 'Madame', 'ANTHOU', 'F', '1993-03-15', '0707070707', 'kadjoruth@gmail.com', '2018-12-19', 'Marie', '2021-12-26', '$2y$10$YxRjSRlp.G28lgBBWAeMAOE77sxgvrtkG.Drlc5nJ8HD6vXbzvlei', -1, 1, 1, 6, NULL, NULL),
(7, '12345S', 'AKOUA', 'SARAH', 'Mademoiselle', 'CHOUPIE', 'F', '1997-02-10', '0707070707', 'sarahakoua@gmail.com', '2014-12-16', 'Celibat', '2021-12-26', '$2y$10$z13h/RSrm/FnY5d1DgW4GODBjBLA0r9exuFQqx7Emyhj0HZg20Qbm', -1, 1, 1, 2, NULL, NULL),
(8, '12345F', 'KOUASSI', 'FULGENCE', 'Monsieur', '', 'M', '1991-08-15', '0707070707', 'kouassifulgence@gmail.com', '2021-12-15', 'Celibat', '2021-12-26', '$2y$10$.CUkJ8t7avBIOakcR88TA.9ZPneVF2njo9Vrrip5HWJ5xABb9ZhRK', -1, 1, 1, 1, NULL, NULL),
(9, '12345D', 'DJIMAN', 'KOUAME ANDERSON', 'Monsieur', '', 'M', '1990-01-25', '0707070707', 'djimankouame@gmail.com', '2016-12-15', 'Celibat', '2021-12-26', '$2y$10$VR4jg9cc9GXcqjFBIaFxtOYeIWyMK8ORZc0KhkSzzHnniL6QjxQAe', -1, 1, 1, 1, NULL, NULL),
(10, '12345L', 'BLE', 'LINDA', 'Mademoiselle', 'LINDOLE', 'F', '1995-07-15', '0707070707', 'blezoukoulinda@gmail.com', '2019-12-02', 'Celibat', '2021-12-26', '$2y$10$Z38MGyooOWn86PyYnhwyeOF/.jmEEpwzoeAsLOa8yiv3Mj6wJB9nK', -1, 1, 4, 4, '10.jpg', '10.png');

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

DROP TABLE IF EXISTS `annonce`;
CREATE TABLE IF NOT EXISTS `annonce` (
  `IdAnnonce` int(11) NOT NULL AUTO_INCREMENT,
  `DateAjoutAnnonce` date NOT NULL,
  `LocaliteOrigineAnnonce` varchar(255) NOT NULL,
  `LocaliteDesireeAnnonce` varchar(255) NOT NULL,
  `AdherantAnnonce` varchar(255) NOT NULL DEFAULT '-1',
  `StatutAnnonce` varchar(255) NOT NULL,
  `IdAgent` bigint(20) NOT NULL,
  `IdTypeAnnonce` int(11) NOT NULL,
  PRIMARY KEY (`IdAnnonce`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`IdAnnonce`, `DateAjoutAnnonce`, `LocaliteOrigineAnnonce`, `LocaliteDesireeAnnonce`, `AdherantAnnonce`, `StatutAnnonce`, `IdAgent`, `IdTypeAnnonce`) VALUES
(1, '2021-12-11', '126', '10', '2', 'VA1', 1, 1),
(2, '2021-12-11', '126', '10', '2', 'VA1', 1, 1),
(17, '2021-12-24', '126', '141', '-1', 'VA0', 4, 1),
(18, '2021-12-26', '101', '125', '-1', 'VA0', 7, 1),
(19, '2021-12-26', '101', '124', '-1', 'VA0', 6, 1),
(20, '2021-12-26', '126', '114', '-1', 'VA0', 5, 1),
(21, '2021-12-26', '126', '22', '-1', 'VA0', 8, 1),
(22, '2021-12-26', '126', '87', '-1', 'VA0', 9, 1);

-- --------------------------------------------------------

--
-- Structure de la table `configsite`
--

DROP TABLE IF EXISTS `configsite`;
CREATE TABLE IF NOT EXISTS `configsite` (
  `validationconf` tinyint(1) NOT NULL,
  PRIMARY KEY (`validationconf`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `configsite`
--

INSERT INTO `configsite` (`validationconf`) VALUES
(0);

-- --------------------------------------------------------

--
-- Structure de la table `directionregionale`
--

DROP TABLE IF EXISTS `directionregionale`;
CREATE TABLE IF NOT EXISTS `directionregionale` (
  `IdDirectionRegionale` int(11) NOT NULL AUTO_INCREMENT,
  `NomDirectionRegionale` varchar(255) NOT NULL,
  `TelDirectionRegionale` varchar(255) NOT NULL,
  `EmailDirectionRegionale` varchar(255) NOT NULL,
  `CommuneDirectionRegionale` varchar(255) NOT NULL,
  PRIMARY KEY (`IdDirectionRegionale`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `directionregionale`
--

INSERT INTO `directionregionale` (`IdDirectionRegionale`, `NomDirectionRegionale`, `TelDirectionRegionale`, `EmailDirectionRegionale`, `CommuneDirectionRegionale`) VALUES
(1, 'Direction Régionale d\'Aboisso', '43567890', 'drenaaboisso@gmail.com', '125'),
(2, 'Direction Régionale de Daloa', '0707070707', 'drenadaloa@gmail.com', '68'),
(3, 'Direction Régionale de Korhogo', '0707070707', 'drenakorhogo@gmail.com', '114'),
(4, 'Direction Régionale de Bouaké', '0707070707', 'drenabouake@gmail.com', '40'),
(5, 'Direction Régionale de Gagnoa', '0707070707', 'drenagagnoa@gmail.com', '46'),
(6, 'Direction Régionale de Yamoussoukro', '0707070707', 'drenayakro@gmail.com', '142'),
(7, 'Direction Régionale de Bondoukou', '0707070707', 'drenabondoukou@gmail.com', '49'),
(8, 'Direction Régionale de Abidjan 1', '0707070707', 'drenaabidjan1@gmail.com', '141'),
(9, 'Direction Régionale de Abidjan 2', '0707070707', 'drenaabidjan2@gmail.com', '141'),
(10, 'Direction Régionale de Abidjan 3', '0707070707', 'drenaabidjan3@gmail.com', '141'),
(11, 'Direction Régionale de Abidjan 4', '0707070707', 'drenaabidjan4@gmail.com', '141'),
(12, 'Direction Régionale d\'Abengourou', '0707070707', 'drenaabengourou@gmail.com', '77'),
(13, 'Direction Régionale d\'Adzopé', '0707070707', 'drenaadzope@gmail.com', '87'),
(14, 'Direction Régionale d\'Agboville', '0707070707', 'drenaagboville@gmail.com', '3'),
(15, 'Direction Régionale de Bongouanou', '0707070707', 'drenabongouanou@gmail.com', '101'),
(16, 'Direction Régionale de Bouaflé', '0707070707', 'drenabouafle@gmail.com', '96'),
(17, 'Direction Régionale de Bouna', '0707070707', 'drenabouna@gmail.com', '25'),
(18, 'Direction Régionale de Boundiali', '0707070707', 'drenaboundiali@gmail.com', '12'),
(19, 'Direction Régionale de Dabou', '0707070707', 'drenadabou@gmail.com', '55'),
(20, 'Direction Régionale de Daoukro', '0707070707', 'drenadaoukro@gmail.com', '73'),
(21, 'Direction Régionale de Dimbokro', '0707070707', 'drenadimbokro@gmail.com', '110'),
(22, 'Direction Régionale de Divo', '0707070707', 'drenadivo@gmail.com', '92'),
(23, 'Direction Régionale de Duékoué', '0707070707', 'drendke@gmail.com', '60'),
(24, 'Direction Régionale de Ferké', '0707070707', 'drenaferke@gmail.com', '129'),
(25, 'Direction Régionale de Guiglo', '0707070707', 'drenaguiglo@gmail.com', '31'),
(26, 'Direction Régionale de Katiola', '0707070707', 'drenakatiola', '65'),
(27, 'Direction Régionale de Man', '0707070707', 'drenaman@gmail.com', '135'),
(28, 'Direction Régionale de Mankono', '0707070707', 'drenamankono@gmail.com', '23'),
(29, 'Direction Régionale de Minignan', '0707070707', 'drenaminignan@gmail.com', '36'),
(30, 'Direction Régionale d\'Odiéné', '0707070707', 'drenodiene@gmail.com', '83'),
(31, 'Direction Régionale de San-Pédro', '0707070707', 'drenasanpedro@gmail.com', '121'),
(32, 'Direction Régionale de Sassandra', '0707070707', 'drenasassandra@gmail.com', '44'),
(33, 'Direction Régionale de Séguéla', '0707070707', 'drenaseguela@gmail.com', '140'),
(34, 'Direction Régionale de Soubré', '0707070707', 'drensoubre@gmail.com', '107'),
(35, 'Direction Régionale de Touba', '0707070707', 'drenatouba@gmail.com', '10'),
(36, 'Direction Régionale de Grand-Bassam', '', 'drenabassam@gmail.com', '126');

-- --------------------------------------------------------

--
-- Structure de la table `drh`
--

DROP TABLE IF EXISTS `drh`;
CREATE TABLE IF NOT EXISTS `drh` (
  `IdDRH` int(11) NOT NULL AUTO_INCREMENT,
  `NomDRH` varchar(255) NOT NULL,
  `TelDRH` varchar(255) NOT NULL,
  `AdresseDRH` varchar(255) NOT NULL,
  PRIMARY KEY (`IdDRH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

DROP TABLE IF EXISTS `ecole`;
CREATE TABLE IF NOT EXISTS `ecole` (
  `IdEcole` int(11) NOT NULL AUTO_INCREMENT,
  `NomEcole` varchar(255) NOT NULL DEFAULT '',
  `TypeEcole` varchar(160) NOT NULL DEFAULT 'Primaire',
  `TelEcole` varchar(255) NOT NULL DEFAULT '',
  `EmailEcole` varchar(255) NOT NULL DEFAULT '',
  `LocaliteEcole` bigint(20) NOT NULL DEFAULT '1',
  `IdInspection` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`IdEcole`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ecole`
--

INSERT INTO `ecole` (`IdEcole`, `NomEcole`, `TypeEcole`, `TelEcole`, `EmailEcole`, `LocaliteEcole`, `IdInspection`) VALUES
(1, 'EPP Congo 2 Grand-Bassam', 'Primaire', '223034567', '', 126, 2),
(2, 'EPP Habitat-Koffikro 1', 'Primaire', '', '', 101, 1),
(3, 'EPP MOMO1', 'Primaire', '', '', 22, 1),
(4, 'EPP ADZOPE 1', 'Primaire', '', '', 87, 1),
(5, 'EPP Kennedy 1', 'Primaire', '', '', 68, 4),
(6, 'EPP Patrick Achi', 'Primaire', '', '', 46, 3);

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

DROP TABLE IF EXISTS `emploi`;
CREATE TABLE IF NOT EXISTS `emploi` (
  `IdEmploi` int(11) NOT NULL AUTO_INCREMENT,
  `LibelleEmploi` varchar(255) NOT NULL,
  PRIMARY KEY (`IdEmploi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `emploi`
--

INSERT INTO `emploi` (`IdEmploi`, `LibelleEmploi`) VALUES
(1, 'Instituteur'),
(2, 'Princesse');

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

DROP TABLE IF EXISTS `fonction`;
CREATE TABLE IF NOT EXISTS `fonction` (
  `IdFonction` int(11) NOT NULL AUTO_INCREMENT,
  `NomFonction` varchar(255) NOT NULL,
  PRIMARY KEY (`IdFonction`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fonction`
--

INSERT INTO `fonction` (`IdFonction`, `NomFonction`) VALUES
(1, 'Instituteur'),
(2, 'Directeur');

-- --------------------------------------------------------

--
-- Structure de la table `inspection`
--

DROP TABLE IF EXISTS `inspection`;
CREATE TABLE IF NOT EXISTS `inspection` (
  `IdInspection` int(11) NOT NULL AUTO_INCREMENT,
  `NomInspection` varchar(255) NOT NULL,
  `TelInspection` varchar(255) NOT NULL,
  `CommuneInspection` varchar(255) NOT NULL,
  `IdDirectionRegionale` int(11) NOT NULL,
  PRIMARY KEY (`IdInspection`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inspection`
--

INSERT INTO `inspection` (`IdInspection`, `NomInspection`, `TelInspection`, `CommuneInspection`, `IdDirectionRegionale`) VALUES
(1, 'Inspection d\'Enseignement Primaire de Bongouanou', '', '101', 15),
(2, 'Inspection d\'Enseignement Primaire de Biétry', '', '141', 9),
(3, 'Inspection d\'enseignement préscolaire et primaire d\'Adzopé', '0707070707', '87', 1),
(4, 'Inspection d\'Enseignement Préscolaire et Primaire de Daloa', '0707070707', '68', 2),
(5, 'Inspection d\'Enseignement Préscolaire et Primaire d\'Adjamé 220 logements', '0707070707', '141', 8),
(6, 'Inspection d\'Enseignement Préscolaire et Primaire de Yamoussoukro', '0707070707', '142', 6),
(7, 'Inspection d\'Enseignement Préscolaire et Primaire de Bouaké', '0707070707', '40', 4),
(8, 'Inspection d\'Enseignement Primaire de Koumassi SICOGI', '', '141', 9),
(9, 'Inspection d\'Enseignement Primaire de Koumassi PRODOMO', '', '141', 9),
(10, 'Inspection d\'Enseignement Primaire de Koumassi Remblais', '', '141', 9),
(11, 'Inspection d\'Enseignement Primaire de Marcory', '', '141', 9),
(12, 'Inspection d\'Enseignement Primaire de Port-Bouët', '', '141', 9),
(13, 'Inspection d\'Enseignement Primaire de Treichville', '', '141', 9),
(14, 'Inspection d\'Enseignement Primaire de Vridi', '', '141', 9),
(15, 'Inspection d\'Enseignement Primaire d\'Adjamé Municipalité', '', '141', 8),
(16, 'Inspection d\'Enseignement Primaire de Bingerville', '', '141', 8),
(17, 'Inspection d\'Enseignement Primaire de Cocody II Plateaux', '', '141', 8),
(18, 'Inspection d\'Enseignement Primaire de Cocody Blockhauss', '', '141', 8),
(19, 'Inspection d\'Enseignement Primaire de Cocody Attoban', '', '141', 8),
(20, 'Inspection d\'Enseignement Primaire de Cocody Akouédo', '', '141', 8),
(21, 'Inspection d\'Enseignement Primaire du Plateau', '', '141', 8),
(22, 'Inspection d\'Enseignement Primaire d\'Attécoubé', '', '141', 10),
(23, 'Inspection d\'Enseignement Primaire d\'Yopougon Andokoi', '', '141', 10),
(24, 'Inspection d\'Enseignement Primaire de Yopougon Siporex', '', '141', 10),
(25, 'Inspection d\'Enseignement Primaire de Yopougon Tout Rouge', '', '141', 10),
(26, 'Inspection d\'Enseignement Primaire de Yopougon Ananeraie', '', '141', 10),
(27, 'Inspection d\'Enseignement Primaire de Yopougon Selmer', '', '141', 10),
(28, 'Inspection d\'Enseignement Primaire de Yopougon-Centre', '', '141', 10),
(29, 'Inspection d\'Enseignement Primaire de Yopougon Gesco', '', '141', 10),
(30, 'Inspection d\'Enseignement Primaire de Yopougon Kouté', '', '141', 10),
(31, 'Inspection d\'Enseignement Primaire de Yopougon Maroc', '', '141', 10),
(32, 'Inspection d\'Enseignement Primaire de Yopougon Sideci', '', '141', 10),
(33, 'Inspection d\'Enseignement Primaire de Yopougon Niangon', '', '141', 10),
(34, 'Inspection d\'Enseignement Primaire de Yopougon Songon', '', '141', 10),
(35, 'Inspection d\'Enseignement Primaire d\'Abobo Houantoué', '', '141', 11),
(36, 'Inspection d\'Enseignement Primaire d\'Abobo Agbékoi', '', '141', 11),
(37, 'Inspection d\'Enseignement Primaire d\'Abobo Avocatier', '', '141', 11),
(38, 'Inspection d\'Enseignement Primaire d\'Abobo Banco', '', '141', 11),
(39, 'Inspection d\'Enseignement Primaire d\'Abobo Agnissankoi', '', '141', 11),
(40, 'Inspection d\'Enseignement Primaire d\'Abobo Anonkoi Kouté', '', '141', 11),
(41, 'Inspection d\'Enseignement Primaire d\'Abobo Plateau Dokui', '', '141', 11),
(42, 'Inspection d\'Enseignement Primaire d\'Abobo Anyama 1', '', '141', 11),
(43, 'Inspection d\'Enseignement Primaire d\'Abobo Anyama 2', '', '141', 11),
(44, 'Inspection d\'Enseignement Primaire de Dabakala', '', '65', 26),
(45, 'Inspection d\'Enseignement Primaire de Katiola', '', '65', 26),
(46, 'Inspection d\'Enseignement Primaire de Niakaraman', '', '65', 26),
(47, 'Inspection d\'Enseignement Primaire de Boniérédougou', '', '65', 26),
(48, 'Inspection d\'Enseignement Primaire de Fronan', '', '65', 26),
(49, 'Inspection d\'Enseignement Primaire de Satama Sokoura', '', '65', 26),
(50, 'Inspection d\'Enseignement Primaire de Tafiré', '', '65', 26),
(51, 'Inspection d\'Enseignement Primaire de Korhogo Nord', '', '114', 3),
(52, 'Inspection d\'Enseignement Primaire de Korhogo Sud', '', '114', 3),
(53, 'Inspection d\'Enseignement Primaire de Korhogo Est', '', '114', 3),
(54, 'Inspection d\'Enseignement Primaire de Sinématiali', '', '114', 3),
(55, 'Inspection d\'Enseignement Primaire de Sirasso', '', '114', 3),
(56, 'Inspection d\'Enseignement Primaire de Dikodougou', '', '114', 3),
(57, 'Inspection d\'Enseignement Primaire de Mbengue', '', '114', 3),
(58, 'Inspection d\'Enseignement Primaire de Niofoin', '', '114', 3),
(59, 'Inspection d\'Enseignement Primaire de Korhogo Centre', '', '114', 3),
(60, 'Inspection d\'Enseignement Primaire de Karakoro', '', '114', 3),
(61, 'Inspection d\'Enseignement Primaire de Napié', '', '114', 3),
(62, 'Inspection d\'Enseignement Primaire de Biankouman', '', '135', 27),
(63, 'Inspection d\'Enseignement Primaire de Gbonné', '', '135', 27),
(64, 'Inspection d\'Enseignement Primaire de Logoualé', '', '135', 27),
(65, 'Inspection d\'Enseignement Primaire de Man Koko', '', '135', 27),
(66, 'Inspection d\'Enseignement Primaire de Man-Doyagouiné', '', '135', 27),
(67, 'Inspection d\'Enseignement Primaire de Man Libreville', '', '135', 27),
(68, 'Inspection d\'Enseignement Primaire de Sangouiné', '', '135', 27),
(69, 'Inspection d\'Enseignement Primaire de Sipilou', '', '135', 27),
(70, 'Inspection d\'Enseignement Primaire de Dianra', '', '21', 28),
(71, 'Inspection d\'Enseignement Primaire de Mankono', '', '23', 28),
(72, 'Inspection d\'Enseignement Primaire de Kounhahiri', '', '22', 28),
(73, 'Inspection d\'Enseignement Primaire de Sahrala', '', '23', 28),
(74, 'Inspection d\'Enseignement Primaire de Tiénningboué', '', '23', 28),
(75, 'Inspection d\'Enseignement Primaire de Kaniasso', '', '35', 29),
(76, 'Inspection d\'Enseignement Primaire de Minignan', '', '36', 29),
(77, 'Inspection d\'Enseignement Primaire de Bangolo 1', '', '59', 23),
(78, 'Inspection d\'Enseignement Primaire de Bangolo 2', '', '59', 23),
(79, 'Inspection d\'Enseignement Primaire de Gbapleu', '', '60', 23),
(80, 'Inspection d\'Enseignement Primaire de Duékoué 1', '', '60', 23),
(81, 'Inspection d\'Enseignement Primaire de Duékoué 2', '', '60', 23),
(82, 'Inspection d\'Enseignement Primaire de Sémien', '', '60', 23),
(83, 'Inspection d\'Enseignement Primaire de Facobly', '', '61', 23),
(84, 'Inspection d\'Enseignement Primaire de Guézon', '', '60', 23),
(85, 'Inspection d\'Enseignement Primaire de Kouibly', '', '60', 23),
(86, 'Inspection d\'Enseignement Primaire de Ferké Nord', '', '129', 24),
(87, 'Inspection d\'Enseignement Primaire de Diawala', '', '129', 24),
(88, 'Inspection d\'Enseignement Primaire de Kong', '', '130', 24),
(89, 'Inspection d\'Enseignement Primaire de Koumbala', '', '129', 24),
(90, 'Inspection d\'Enseignement Primaire de Ouangolo', '', '131', 24),
(91, 'Inspection d\'Enseignement Primaire de Diégonéfla', '', '46', 5),
(92, 'Inspection d\'Enseignement Primaire de Gagnoa Lonaci', '', '46', 5),
(93, 'Inspection d\'Enseignement Primaire de Gagnoa Dioulabougou', '', '46', 5),
(94, 'Inspection d\'Enseignement Primaire de Guibéroua', '', '46', 5),
(95, 'Inspection d\'Enseignement Primaire d\'Oumé', '', '47', 5),
(96, 'Inspection d\'Enseignement Primaire de Sériho', '', '46', 5),
(97, 'Inspection d\'Enseignement Primaire d\'Ouragahio', '', '46', 5),
(98, 'Inspection d\'Enseignement Primaire de Bassam', '', '126', 36),
(99, 'Inspection d\'Enseignement Primaire de Bonoua', '', '126', 36),
(100, 'Inspection d\'Enseignement Primaire de Bloléquin', '', '30', 25),
(101, 'Inspection d\'Enseignement Primaire de Guiglo 1', '', '31', 25),
(102, 'Inspection d\'Enseignement Primaire de Guiglo 2', '', '31', 25),
(103, 'Inspection d\'Enseignement Primaire de Taï', '', '32', 25),
(104, 'Inspection d\'Enseignement Primaire de Toulepleu', '', '33', 25);

-- --------------------------------------------------------

--
-- Structure de la table `localite`
--

DROP TABLE IF EXISTS `localite`;
CREATE TABLE IF NOT EXISTS `localite` (
  `CodeZone` bigint(19) NOT NULL AUTO_INCREMENT,
  `LibelleZone` varchar(200) NOT NULL,
  `CodeZoneMere` bigint(19) NOT NULL,
  `NiveauStr` smallint(6) NOT NULL,
  PRIMARY KEY (`CodeZone`)
) ENGINE=InnoDB AUTO_INCREMENT=170 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `localite`
--

INSERT INTO `localite` (`CodeZone`, `LibelleZone`, `CodeZoneMere`, `NiveauStr`) VALUES
(1, 'CÔTE D&APOST;IVOIRE', 0, 1),
(2, 'AGNÉBY TIASSA', 148, 3),
(3, 'AGBOVILLE', 2, 4),
(4, 'SIKENSI', 2, 4),
(5, 'TAABO', 2, 4),
(6, 'TIASSALÉ', 2, 4),
(7, 'BAFING', 153, 3),
(8, 'KORO', 7, 4),
(9, 'OUANINOU', 7, 4),
(10, 'TOUBA', 7, 4),
(11, 'BAGOUÉ', 151, 3),
(12, 'BOUNDIALI', 11, 4),
(13, 'KOUTO', 11, 4),
(14, 'TENGRÉLA', 11, 4),
(15, 'BÉLIER', 147, 3),
(16, 'DIDIÉVI', 15, 4),
(17, 'DJÉKANOU', 15, 4),
(18, 'TIÉBISSOU', 15, 4),
(19, 'TOUMODI', 15, 4),
(20, 'BÉRÉ', 153, 3),
(21, 'DIANRA', 20, 4),
(22, 'KOUNAHIRI', 20, 4),
(23, 'MANKONO', 20, 4),
(24, 'BOUNKANI', 154, 3),
(25, 'BOUNA', 24, 4),
(26, 'DOROPO', 24, 4),
(27, 'NASSIAN', 24, 4),
(28, 'TÉHINI', 24, 4),
(29, 'CAVALLY', 149, 3),
(30, 'BLOLÉQUIN', 29, 4),
(31, 'GUIGLO', 29, 4),
(32, 'TAÏ', 29, 4),
(33, 'TOULÉPLEU', 29, 4),
(34, 'FOLON', 145, 3),
(35, 'KANIASSO', 34, 4),
(36, 'MINIGNAN', 34, 4),
(37, 'GBÊKÊ', 152, 3),
(38, 'BÉOUMI', 37, 4),
(39, 'BOTRO', 37, 4),
(40, 'BOUAKÉ', 37, 4),
(41, 'SAKASSOU', 37, 4),
(42, 'GBÔKLÉ', 143, 3),
(43, 'FRESCO', 42, 4),
(44, 'SASSANDRA', 42, 4),
(45, 'GÔH', 146, 3),
(46, 'GAGNOA', 45, 4),
(47, 'OUMÉ', 45, 4),
(48, 'GONTOUGO', 154, 3),
(49, 'BONDOUKOU', 48, 4),
(50, 'KOUN-FAO', 48, 4),
(51, 'SANDÉGUÉ', 48, 4),
(52, 'TANDA', 48, 4),
(53, 'TRANSUA', 48, 4),
(54, 'GRANDS-PONTS', 148, 3),
(55, 'DABOU', 54, 4),
(56, 'GRAND-LAHOU', 54, 4),
(57, 'JACQUEVILLE', 54, 4),
(58, 'GUÉMON', 149, 3),
(59, 'BANGOLO', 58, 4),
(60, 'DUÉKOUÉ', 58, 4),
(61, 'FACOBLY', 58, 4),
(62, 'KOUIBLY', 58, 4),
(63, 'HAMBOL', 152, 3),
(64, 'DABAKALA', 63, 4),
(65, 'KATIOLA', 63, 4),
(66, 'NIAKARAMANDOUGOU', 63, 4),
(67, 'HAUT-SASSANDRA', 150, 3),
(68, 'DALOA', 67, 4),
(69, 'ISSIA', 67, 4),
(70, 'VAVOUA', 67, 4),
(71, 'ZOUKOUGBEU', 67, 4),
(72, 'IFFOU', 147, 3),
(73, 'DAOUKRO', 72, 4),
(74, 'M&apost;BAHIAKRO', 72, 4),
(75, 'PRIKRO', 72, 4),
(76, 'INDÉNIÉ-DJUABLIN', 144, 3),
(77, 'ABENGOUROU', 76, 4),
(78, 'AGNIBILÉKROU', 76, 4),
(79, 'BETTIÉ', 76, 4),
(80, 'KABADOUGOU', 145, 3),
(81, 'GBÉLÉBAN', 80, 4),
(82, 'MADINANI', 80, 4),
(83, 'ODIENNÉ', 80, 4),
(84, 'SAMATIGUILA', 80, 4),
(85, 'SÉGUÉLON', 80, 4),
(86, 'LA MÉ', 148, 3),
(87, 'ADZOPÉ', 86, 4),
(88, 'AKOUPÉ', 86, 4),
(89, 'ALÉPÉ', 86, 4),
(90, 'YAKASSÉ-ATTOBROU', 86, 4),
(91, 'LÔH-DJIBOUA', 146, 3),
(92, 'DIVO', 91, 4),
(93, 'GUITRY', 91, 4),
(94, 'LAKOTA', 91, 4),
(95, 'MARAHOUÉ', 150, 3),
(96, 'BOUAFLÉ', 95, 4),
(97, 'SINFRA', 95, 4),
(98, 'ZUÉNOULA', 95, 4),
(99, 'MORONOU', 147, 3),
(100, 'ARRAH', 99, 4),
(101, 'BONGOUANOU', 99, 4),
(102, 'M&apost;BATTO', 99, 4),
(103, 'NAWA', 143, 3),
(104, 'BUYO', 103, 4),
(105, 'GUÉYO', 103, 4),
(106, 'MÉAGUI', 103, 4),
(107, 'SOUBRÉ', 103, 4),
(108, 'N&apost;ZI', 147, 3),
(109, 'BOCANDA', 108, 4),
(110, 'DIMBOKRO', 108, 4),
(111, 'KOUASSI-KOUASSIKRO', 108, 4),
(112, 'PORO', 151, 3),
(113, 'DIKODOUGOU', 112, 4),
(114, 'KORHOGO', 112, 4),
(115, 'M&apost;BENGUÉ', 112, 4),
(116, 'SINÉMATIALI', 112, 4),
(120, 'REGION SAN-PÉDRO', 143, 3),
(121, 'SAN-PÉDRO', 120, 4),
(122, 'TABOU', 120, 4),
(123, 'SUD-COMOÉ', 144, 3),
(124, 'ADIAKÉ', 123, 4),
(125, 'ABOISSO', 123, 4),
(126, 'GRAND-BASSAM', 123, 4),
(127, 'TIAPOUM', 123, 4),
(128, 'TCHOLOGO', 151, 3),
(129, 'FERKESSÉDOUGOU', 128, 4),
(130, 'KONG', 128, 4),
(131, 'OUANGOLODOUGOU', 128, 4),
(132, 'TONKPI', 149, 3),
(133, 'BIANKOUMA', 132, 4),
(134, 'DANANÉ', 132, 4),
(135, 'MAN', 132, 4),
(136, 'SIPILOU', 132, 4),
(137, 'ZOUAN-HOUNIEN', 132, 4),
(138, 'WORODOUGOU', 153, 3),
(139, 'KANI', 138, 4),
(140, 'SÉGUÉLA', 138, 4),
(141, 'ABIDJAN', 1, 2),
(142, 'YAMOUSSOUKRO', 1, 2),
(143, 'BAS-SASSANDRA', 1, 2),
(144, 'COMOÉ', 1, 2),
(145, 'DENGUÉLÉ', 1, 2),
(146, 'GÔH-DJIBOUA', 1, 2),
(147, 'LACS', 1, 2),
(148, 'LAGUNES', 1, 2),
(149, 'MONTAGNES', 1, 2),
(150, 'SASSANDRA-MARAHOUÉ', 1, 2),
(151, 'SAVANES', 1, 2),
(152, 'VALLÉE DU BANDAMA', 1, 2),
(153, 'WOROBA', 1, 2),
(154, 'ZANZAN', 1, 2),
(157, 'FRANCE', 0, 1),
(158, 'PARIS', 157, 2),
(159, 'MALI', 0, 1),
(160, 'BAMAKO', 159, 4),
(161, 'SIKASSO', 159, 4),
(162, 'SEGOU', 159, 4),
(163, 'USA', 0, 1),
(164, 'NIGERIA', 0, 1),
(166, 'LAGOS', 164, 2),
(167, 'KANO', 164, 2),
(168, 'SAIOUA', 68, 5),
(169, 'DISTRICT DE YAMOUSSOUKRO', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `IdMessage` int(11) NOT NULL AUTO_INCREMENT,
  `ContenuMessage` text NOT NULL,
  `ObjetMessage` varchar(255) NOT NULL,
  `IdAgent` int(11) NOT NULL,
  PRIMARY KEY (`IdMessage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `IdNotification` int(11) NOT NULL AUTO_INCREMENT,
  `ContentNotification` text NOT NULL,
  `PermalinkNotification` text NOT NULL,
  `DateEnvoieNotification` date NOT NULL,
  `LectureNotification` tinyint(1) NOT NULL DEFAULT '0',
  `IdAgent` int(11) NOT NULL,
  PRIMARY KEY (`IdNotification`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `notification`
--

INSERT INTO `notification` (`IdNotification`, `ContentNotification`, `PermalinkNotification`, `DateEnvoieNotification`, `LectureNotification`, `IdAgent`) VALUES
(1, 'Bienvenue, sur la plateforme de gestion des permutations', '#Bienvenue', '2021-12-01', 0, 4);

-- --------------------------------------------------------

--
-- Structure de la table `struct_localite`
--

DROP TABLE IF EXISTS `struct_localite`;
CREATE TABLE IF NOT EXISTS `struct_localite` (
  `NiveauStr` bigint(19) NOT NULL AUTO_INCREMENT,
  `CodeStr` varchar(2) NOT NULL,
  `LibelleStr` varchar(100) NOT NULL,
  PRIMARY KEY (`NiveauStr`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `struct_localite`
--

INSERT INTO `struct_localite` (`NiveauStr`, `CodeStr`, `LibelleStr`) VALUES
(1, 'PS', 'PAYS'),
(2, 'DS', 'DISTRICT'),
(3, 'RG', 'REGION'),
(4, 'DP', 'DEPARTEMENT'),
(5, 'SP', 'SOUS-PREFECTURE'),
(6, 'CO', 'COMMUNE'),
(7, 'VI', 'VILLAGE'),
(8, 'CA', 'CAMPEMENT');

-- --------------------------------------------------------

--
-- Structure de la table `typeagent`
--

DROP TABLE IF EXISTS `typeagent`;
CREATE TABLE IF NOT EXISTS `typeagent` (
  `IdTypeAgent` int(11) NOT NULL AUTO_INCREMENT,
  `NomTypeAgent` varchar(255) NOT NULL,
  PRIMARY KEY (`IdTypeAgent`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typeagent`
--

INSERT INTO `typeagent` (`IdTypeAgent`, `NomTypeAgent`) VALUES
(1, 'Instituteur'),
(2, 'Inspecteur'),
(3, 'Directeur Régional'),
(4, 'DRH');

-- --------------------------------------------------------

--
-- Structure de la table `typeannonce`
--

DROP TABLE IF EXISTS `typeannonce`;
CREATE TABLE IF NOT EXISTS `typeannonce` (
  `IdTypeAnnonce` int(11) NOT NULL AUTO_INCREMENT,
  `NomTypeAnnonce` varchar(255) NOT NULL,
  PRIMARY KEY (`IdTypeAnnonce`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `typeecole`
--

DROP TABLE IF EXISTS `typeecole`;
CREATE TABLE IF NOT EXISTS `typeecole` (
  `IdTypeEcole` int(11) NOT NULL AUTO_INCREMENT,
  `NomTypeEcole` varchar(255) NOT NULL,
  PRIMARY KEY (`IdTypeEcole`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `validationannonce`
--

DROP TABLE IF EXISTS `validationannonce`;
CREATE TABLE IF NOT EXISTS `validationannonce` (
  `IdValidation` int(11) NOT NULL AUTO_INCREMENT,
  `DateEnvoiValidation` datetime NOT NULL,
  `DateValidation` datetime DEFAULT NULL,
  `StatutValidation` varchar(25) NOT NULL DEFAULT 'EN',
  `MotifRejetValidation` varchar(255) NOT NULL DEFAULT '',
  `ValideurValidation` varchar(225) NOT NULL,
  `IdAnnonce` int(11) NOT NULL,
  PRIMARY KEY (`IdValidation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
