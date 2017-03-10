-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 08 Mars 2017 à 10:43
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdchu`
--

-- --------------------------------------------------------

--
-- Structure de la table `consultations`
--

CREATE TABLE `consultations` (
  `IdConsul` int(11) NOT NULL,
  `fk_IdPatient` int(11) NOT NULL,
  `fk_IdService` int(11) NOT NULL,
  `DateConsul` date NOT NULL,
  `HeureConsul` time NOT NULL,
  `ButConsul` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `consultations`
--

INSERT INTO `consultations` (`IdConsul`, `fk_IdPatient`, `fk_IdService`, `DateConsul`, `HeureConsul`, `ButConsul`) VALUES
(1, 1, 3, '2017-01-03', '14:00:00', 'Chute'),
(2, 2, 3, '2017-01-12', '09:00:00', 'Echographie'),
(3, 3, 4, '2017-01-17', '11:00:00', 'Grippe'),
(4, 1, 3, '2017-02-03', '15:00:00', 'Suivi fracture'),
(5, 3, 4, '2017-02-04', '10:30:00', 'Gastro'),
(6, 4, 1, '2017-02-25', '08:00:00', 'Accouchement'),
(7, 5, 2, '2017-03-03', '16:00:00', 'Rougeur bras');

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE `patients` (
  `IdPatient` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `DateNaissance` date NOT NULL,
  `AdressPostale` varchar(255) NOT NULL,
  `NumSecu` bigint(15) NOT NULL,
  `Email` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `patients`
--

INSERT INTO `patients` (`IdPatient`, `Nom`, `Prenom`, `DateNaissance`, `AdressPostale`, `NumSecu`, `Email`) VALUES
(1, 'Dupont', 'Alain', '1980-10-25', '3 rue de la gendarmerie 27000 Evreux', 180102735624578, 'dupontalain@free.fr'),
(2, 'Durand', 'Florence', '1972-05-12', '12 rue de Panette 27000 Evreux', 272052748571268, 'durandflorance@orange.fr'),
(3, 'Luis', 'Peter', '1968-11-04', '54 boulevard de la Seine 76000 Rouen', 168117645214875, 'luispeter@gmail.com'),
(4, 'Casier', 'Sylvie', '1982-01-15', '12 rue de la grosse horloge 76000 Rouen', 282017625487541, 'sylviepanier@orange.fr'),
(5, 'Petit', 'Luc', '2009-07-30', '4 rue du Maréchal Joffre 27400 louviers', 109072741526825, 'luc.petit@free.fr');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `IdService` int(11) NOT NULL,
  `NomService` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `services`
--

INSERT INTO `services` (`IdService`, `NomService`) VALUES
(1, 'Maternité'),
(2, 'Pédiatrie'),
(3, 'Radiologie'),
(4, 'Consultation générale');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`IdConsul`);

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`IdPatient`),
  ADD UNIQUE KEY `NumSecu` (`NumSecu`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`IdService`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `consultations`
--
ALTER TABLE `consultations`
  MODIFY `IdConsul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `patients`
--
ALTER TABLE `patients`
  MODIFY `IdPatient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `IdService` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
