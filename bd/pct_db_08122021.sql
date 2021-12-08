-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 08 déc. 2021 à 22:20
-- Version du serveur :  5.7.31
-- Version de PHP : 7.1.33

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
DROP DATABASE IF EXISTS `pct_db`;
CREATE DATABASE IF NOT EXISTS `pct_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pct_db`;

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
  PRIMARY KEY (`IdAgent`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`IdAgent`, `MatriculeAgent`, `NomAgent`, `PrenomsAgent`, `CiviliteAgent`, `NomJeuneFilleAgent`, `SexeAgent`, `DateNaissanceAgent`, `TelAgent`, `EmailAgent`, `DatePriseServiceAgent`, `SituationMatrimonialeAgent`, `DateCreationAgent`, `PasswordAgent`, `IdEmploi`, `IdFonction`, `TypeAgent`) VALUES
(1, '14123', 'COULIBALY', 'Ruth Marlène', 'Madame', '', 'F', '2021-01-01', '', 'tiemoko.coulibaly@uvci.edu.ci', NULL, 'Marie', '2021-12-01', '$2y$10$KNMLkT2epNoI.WI.q7qmi.VFt/Ypmo.kD8ACBrozutez9SUNzwEhq', -1, -1, 1);

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
  `AdherantAnnonce` varchar(255) NOT NULL,
  `StatutAnnonce` varchar(255) NOT NULL,
  `IdAgent` bigint(20) NOT NULL,
  PRIMARY KEY (`IdAnnonce`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  PRIMARY KEY (`IdEcole`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ecole`
--

INSERT INTO `ecole` (`IdEcole`, `NomEcole`, `TypeEcole`, `TelEcole`, `EmailEcole`, `LocaliteEcole`) VALUES
(1, 'EPP Congo 2 Grand-Bassam', 'Primaire', '223034567', '', 126),
(2, 'EPP Congo 1 Grand-Bassam....', 'Primaire', '223034567', '', 126),
(3, 'Epp Jardin', 'Pré-scolaire', '', '', 165),
(4, 'Tim', 'Pré-scolaire', '', '', 101),
(5, 'EPP l\'olivier', 'Primaire', '', '', 125);

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

DROP TABLE IF EXISTS `emploi`;
CREATE TABLE IF NOT EXISTS `emploi` (
  `IdEmploi` int(11) NOT NULL AUTO_INCREMENT,
  `LibelleEmploi` varchar(255) NOT NULL,
  PRIMARY KEY (`IdEmploi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

DROP TABLE IF EXISTS `fonction`;
CREATE TABLE IF NOT EXISTS `fonction` (
  `IdFonction` int(11) NOT NULL AUTO_INCREMENT,
  `NomFonction` varchar(255) NOT NULL,
  PRIMARY KEY (`IdFonction`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fonction`
--

INSERT INTO `fonction` (`IdFonction`, `NomFonction`) VALUES
(1, 'rsdfghj');

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
  PRIMARY KEY (`IdInspection`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(165, 'ABUJA', 164, 2),
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
  `LibelleEmploi` varchar(255) NOT NULL,
  `ContenuMessage` text NOT NULL,
  `ObjetMessage` varchar(255) NOT NULL,
  PRIMARY KEY (`IdMessage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `IdNotification` int(11) NOT NULL AUTO_INCREMENT,
  `LibelleEmploi` varchar(255) NOT NULL,
  `ContentNotification` text NOT NULL,
  `PermalinkNotification` text NOT NULL,
  `DateEnvoieNotification` date NOT NULL,
  `LectureNotification` varchar(255) NOT NULL,
  PRIMARY KEY (`IdNotification`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typeagent`
--

INSERT INTO `typeagent` (`IdTypeAgent`, `NomTypeAgent`) VALUES
(1, 'Instituteur'),
(2, 'Inspecteur'),
(3, 'Directeur Régional');

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
  `NomTypeAgent` varchar(255) NOT NULL,
  PRIMARY KEY (`IdTypeEcole`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
