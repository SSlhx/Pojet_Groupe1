-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 03 avr. 2023 à 12:26
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gsb_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `form_visite`
--

DROP TABLE IF EXISTS `form_visite`;
CREATE TABLE IF NOT EXISTS `form_visite` (
  `id_form` int(11) NOT NULL AUTO_INCREMENT,
  `dateJ` date NOT NULL,
  `praticien` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `motif` varchar(255) NOT NULL,
  `bilan` text NOT NULL,
  `medicament` varchar(255) NOT NULL,
  `avis_visiteur` longtext NOT NULL,
  `id_User` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_form`),
  KEY `id_User` (`id_User`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `form_visite`
--

INSERT INTO `form_visite` (`id_form`, `dateJ`, `praticien`, `date`, `motif`, `bilan`, `medicament`, `avis_visiteur`, `id_User`) VALUES
(25, '2023-03-13', 'M.Durant', '2023-03-13', 'mal de ventre', 'test test', 'Doliprane', 'idhjqxhflejdhqxljfbcedq', 7),
(26, '2023-03-13', 'Dr.Sam', '2022-12-05', 'AUT', 'Mal de tête', 'doliprane', 'consultation agréable ', 7),
(28, '2023-03-14', 'Dr.Sam', '2022-12-03', 'REL', 'test test', 'Smecta', 'ceci est un test', 10),
(29, '2023-03-15', 'Dr.Axel', '2002-01-08', 'SOL', 'test', 'test', 'test\r\n', 10);

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

DROP TABLE IF EXISTS `medicament`;
CREATE TABLE IF NOT EXISTS `medicament` (
  `num_medicament` int(11) NOT NULL AUTO_INCREMENT,
  `nom_commercial` varchar(255) NOT NULL,
  `famille_medicament` varchar(255) NOT NULL,
  `composition` varchar(255) NOT NULL,
  `effet_indesirable` varchar(255) NOT NULL,
  `contre-indication` varchar(255) NOT NULL,
  `prix_echantillon` int(11) NOT NULL,
  PRIMARY KEY (`num_medicament`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`num_medicament`, `nom_commercial`, `famille_medicament`, `composition`, `effet_indesirable`, `contre-indication`, `prix_echantillon`) VALUES
(1, 'test', 'test,test', 'test,test,test', 'test', 'test', 10);

-- --------------------------------------------------------

--
-- Structure de la table `practiciens`
--

DROP TABLE IF EXISTS `practiciens`;
CREATE TABLE IF NOT EXISTS `practiciens` (
  `Numero_praticiens` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_praticiens` varchar(255) DEFAULT NULL,
  `Prenom_praticiens` varchar(255) NOT NULL,
  `Adresse_praticiens` varchar(255) NOT NULL,
  `CP_praticiens` decimal(5,0) NOT NULL,
  `Ville_praticiens` varchar(255) NOT NULL,
  `region_practiciens` varchar(255) NOT NULL,
  `num_compte` int(11) NOT NULL,
  PRIMARY KEY (`Numero_praticiens`),
  KEY `num_compte` (`num_compte`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `practiciens`
--

INSERT INTO `practiciens` (`Numero_praticiens`, `Nom_praticiens`, `Prenom_praticiens`, `Adresse_praticiens`, `CP_praticiens`, `Ville_praticiens`, `region_practiciens`, `num_compte`) VALUES
(5, 'Richard', 'Sofiane', '51 rue du 8 Mai 1945, 51', '73410', 'Albens', 'Grand Est', 0),
(4, 'Salih', 'Sofiane', '51 rue du 8 Mai 1945, 51', '73410', 'Albens', 'Auvergne-Rhône-Alpes', 0);

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `departement` varchar(255) NOT NULL,
  PRIMARY KEY (`departement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`departement`) VALUES
('Auvergne-Rhône-Alpes'),
('Bourgogne-Franche-Comté'),
('Bretagne'),
('Centre-Val de Loire'),
('Corse'),
('Grand Est'),
('Hauts-de-France'),
('Île-de-France'),
('Normandie'),
('Nouvelle-Aquitaine'),
('Occitanie'),
('Pays de la Loire'),
('Provence-Alpes-Côte d\'Azur');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_User` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL,
  PRIMARY KEY (`id_User`),
  KEY `departement` (`departement`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_User`, `username`, `type`, `password`, `nom`, `prenom`, `departement`) VALUES
(7, 'sofiane', 'responsable', 'e0bc60c82713f64ef8a57c0c40d02ce24fd0141d5cc3086259c19b1e62a62bea', '', '', ''),
(10, 'Benj', 'visiteur', 'b3a8e0e1f9ab1bfe3a36f231f676f78bb30a519d2b21e6c530c0eee8ebb4a5d0', 'Benjamin', 'Perrin', 'Hauts-de-France'),
(12, 'Benjamin', 'visiteur', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '', '', ''),
(14, 'Axel', 'responsable', 'b3a8e0e1f9ab1bfe3a36f231f676f78bb30a519d2b21e6c530c0eee8ebb4a5d0', '', '', ''),
(15, 'Sofianesalih4@gmail.com', 'delegue', '*846AEC788124A4D732D51692E35E9DE488607F86', '', '', ''),
(16, 'yous', 'delegue', '35a9e381b1a27567549b5f8a6f783c167ebf809f1c4d6a9e367240484d8ce281', '', '', ''),
(18, 'root', 'delegue', '*81F5E21E35407D884A6CD4A731AEBFB6AF209E1B', '', '', ''),
(20, 'test', 'visiteur', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 's', 'o', 'Hauts-de-France');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `form_visite`
--
ALTER TABLE `form_visite`
  ADD CONSTRAINT `form_visite_ibfk_1` FOREIGN KEY (`id_User`) REFERENCES `users` (`id_User`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
