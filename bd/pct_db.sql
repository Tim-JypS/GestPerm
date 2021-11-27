-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 23 nov. 2021 à 11:47
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.33

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
-- Structure de la table `t_annonce`
--

CREATE TABLE `t_annonce` (
  `IdAnn` int(11) NOT NULL,
  `DateAjout` date NOT NULL,
  `LocaliteOrigine` varchar(255) NOT NULL,
  `LocaliteDesiree` varchar(255) NOT NULL,
  `Adherant` varchar(255) NOT NULL,
  `Statut` varchar(255) NOT NULL,
  `IdTypAn` int(11) NOT NULL,
  `IdCompte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_compte`
--

CREATE TABLE `t_compte` (
  `IdCompte` int(11) NOT NULL,
  `Login` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Civilite` varchar(255) NOT NULL,
  `SitMatri` varchar(255) NOT NULL,
  `Sexe` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Date_de_naiss` date NOT NULL,
  `DateCreation` date NOT NULL,
  `Matricule` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DatePriseFonction` date NOT NULL,
  `NomJeuneFille` date NOT NULL,
  `Tel` varchar(255) NOT NULL,
  `Adress` varchar(255) NOT NULL,
  `IdTypeCpt` int(11) NOT NULL,
  `IdFonc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_dren`
--

CREATE TABLE `t_dren` (
  `IdDren` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Sit_Geo` varchar(255) NOT NULL,
  `Tel` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_etablissement`
--

CREATE TABLE `t_etablissement` (
  `IdEtab` int(11) NOT NULL,
  `LibEtablisement` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Sit_Geo` varchar(255) NOT NULL,
  `Tel` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `IdInspec` int(11) NOT NULL,
  `IdTypEta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_fonction`
--

CREATE TABLE `t_fonction` (
  `IdFonc` int(11) NOT NULL,
  `LibFonction` varchar(255) NOT NULL,
  `IdEtab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_inspection`
--

CREATE TABLE `t_inspection` (
  `IdInspec` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Sit_Geo` varchar(255) NOT NULL,
  `Tel` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `IdLoc` int(11) NOT NULL,
  `IdDren` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_localite`
--

CREATE TABLE `t_localite` (
  `IdLoc` int(11) NOT NULL,
  `LibeZone` varchar(255) NOT NULL,
  `IdTypLoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_msg`
--

CREATE TABLE `t_msg` (
  `IdMsg` int(11) NOT NULL,
  `Extrait` text NOT NULL,
  `Description` text NOT NULL,
  `DateEnvoie` date NOT NULL,
  `Lecture` varchar(255) NOT NULL,
  `IdDestinataire` int(11) NOT NULL,
  `IdCompte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_notification`
--

CREATE TABLE `t_notification` (
  `IdNotif` int(11) NOT NULL,
  `Sender` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `PermanantLink` varchar(255) NOT NULL,
  `DateEnvoie` date NOT NULL,
  `Lecture` varchar(255) NOT NULL,
  `IdCompte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_type_annonce`
--

CREATE TABLE `t_type_annonce` (
  `IdTypAn` int(11) NOT NULL,
  `LibTypeAnnonce` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_type_compte`
--

CREATE TABLE `t_type_compte` (
  `IdTypeCpt` int(11) NOT NULL,
  `LibTypeCompte` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_type_etablissement`
--

CREATE TABLE `t_type_etablissement` (
  `IdTypEta` int(11) NOT NULL,
  `LibType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_type_localite`
--

CREATE TABLE `t_type_localite` (
  `IdTypLoc` int(11) NOT NULL,
  `LibeTypeZone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_validation`
--

CREATE TABLE `t_validation` (
  `IdValid` int(11) NOT NULL,
  `Date_Envoi` date NOT NULL,
  `Date_Validation` date NOT NULL,
  `Statut` varchar(255) NOT NULL,
  `MotifRejet` varchar(255) NOT NULL,
  `IdValidateur` int(11) NOT NULL,
  `IdAnn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_annonce`
--
ALTER TABLE `t_annonce`
  ADD PRIMARY KEY (`IdAnn`);

--
-- Index pour la table `t_compte`
--
ALTER TABLE `t_compte`
  ADD PRIMARY KEY (`IdCompte`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Index pour la table `t_dren`
--
ALTER TABLE `t_dren`
  ADD PRIMARY KEY (`IdDren`);

--
-- Index pour la table `t_etablissement`
--
ALTER TABLE `t_etablissement`
  ADD PRIMARY KEY (`IdEtab`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Index pour la table `t_fonction`
--
ALTER TABLE `t_fonction`
  ADD PRIMARY KEY (`IdFonc`);

--
-- Index pour la table `t_inspection`
--
ALTER TABLE `t_inspection`
  ADD PRIMARY KEY (`IdInspec`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Index pour la table `t_localite`
--
ALTER TABLE `t_localite`
  ADD PRIMARY KEY (`IdLoc`);

--
-- Index pour la table `t_msg`
--
ALTER TABLE `t_msg`
  ADD PRIMARY KEY (`IdMsg`);

--
-- Index pour la table `t_notification`
--
ALTER TABLE `t_notification`
  ADD PRIMARY KEY (`IdNotif`);

--
-- Index pour la table `t_type_annonce`
--
ALTER TABLE `t_type_annonce`
  ADD PRIMARY KEY (`IdTypAn`);

--
-- Index pour la table `t_type_compte`
--
ALTER TABLE `t_type_compte`
  ADD PRIMARY KEY (`IdTypeCpt`);

--
-- Index pour la table `t_type_etablissement`
--
ALTER TABLE `t_type_etablissement`
  ADD PRIMARY KEY (`IdTypEta`);

--
-- Index pour la table `t_type_localite`
--
ALTER TABLE `t_type_localite`
  ADD PRIMARY KEY (`IdTypLoc`);

--
-- Index pour la table `t_validation`
--
ALTER TABLE `t_validation`
  ADD PRIMARY KEY (`IdValid`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_annonce`
--
ALTER TABLE `t_annonce`
  MODIFY `IdAnn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_compte`
--
ALTER TABLE `t_compte`
  MODIFY `IdCompte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_dren`
--
ALTER TABLE `t_dren`
  MODIFY `IdDren` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_etablissement`
--
ALTER TABLE `t_etablissement`
  MODIFY `IdEtab` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_fonction`
--
ALTER TABLE `t_fonction`
  MODIFY `IdFonc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_inspection`
--
ALTER TABLE `t_inspection`
  MODIFY `IdInspec` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_localite`
--
ALTER TABLE `t_localite`
  MODIFY `IdLoc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_msg`
--
ALTER TABLE `t_msg`
  MODIFY `IdMsg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_notification`
--
ALTER TABLE `t_notification`
  MODIFY `IdNotif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_type_annonce`
--
ALTER TABLE `t_type_annonce`
  MODIFY `IdTypAn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_type_compte`
--
ALTER TABLE `t_type_compte`
  MODIFY `IdTypeCpt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_type_etablissement`
--
ALTER TABLE `t_type_etablissement`
  MODIFY `IdTypEta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_type_localite`
--
ALTER TABLE `t_type_localite`
  MODIFY `IdTypLoc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_validation`
--
ALTER TABLE `t_validation`
  MODIFY `IdValid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
