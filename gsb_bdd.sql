-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 03 avr. 2023 à 23:00
-- Version du serveur :  10.5.16-MariaDB
-- Version de PHP : 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `id20465321_db_gsb_g1`
--

-- --------------------------------------------------------

--
-- Structure de la table `form_visite`
--

CREATE TABLE `form_visite` (
  `id_form` int(11) NOT NULL,
  `dateJ` date NOT NULL,
  `praticien` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `motif` varchar(255) NOT NULL,
  `bilan` text NOT NULL,
  `medicament` varchar(255) NOT NULL,
  `avis_visiteur` longtext NOT NULL,
  `id_User` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `form_visite`
--

INSERT INTO `form_visite` (`id_form`, `dateJ`, `praticien`, `date`, `motif`, `bilan`, `medicament`, `avis_visiteur`, `id_User`) VALUES
(25, '2023-03-13', 'M.Durant', '2023-03-13', 'mal de ventre', 'test test', 'Doliprane', 'idhjqxhflejdhqxljfbcedq', 7),
(26, '2023-03-13', 'Dr.Sam', '2022-12-05', 'AUT', 'Mal de tête', 'doliprane', 'consultation agréable ', 7),
(28, '2023-03-14', 'Dr.Sam', '2022-12-03', 'REL', 'test test', 'Smecta', 'ceci est un test', 10),
(29, '2023-03-15', 'Dr.Axel', '2002-01-08', 'SOL', 'test', 'test', 'test\r\n', 10),
(30, '2023-03-28', 'test', '2022-12-05', 'PRD', 'tfdgtefgdte', 'fzggdfg', 'grgrgrgrg', 10),
(31, '2023-04-03', '', '2023-07-20', 'AUT', 'le praticien est intéressé.', 'doliprane', 'avis positif ', 10),
(32, '2023-04-03', 'COLLIN', '2022-12-05', 'SOL', 'Souffre de maux de tête', 'Doliprane 1000', 'Bonne consultation', 23),
(33, '2023-04-03', 'PROVENCHER', '2022-10-08', 'AUT', 'Souffre de crise de crise d\'épilepsie', 'Lamictal', 'un praticiens qui connais son métier', 24);

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE `medicament` (
  `num_medicament` int(11) NOT NULL,
  `nom_commercial` varchar(255) NOT NULL,
  `famille_medicament` varchar(255) NOT NULL,
  `composition` varchar(255) NOT NULL,
  `effet_indesirable` varchar(255) NOT NULL,
  `contre_indication` varchar(255) NOT NULL,
  `prix_echantillon` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`num_medicament`, `nom_commercial`, `famille_medicament`, `composition`, `effet_indesirable`, `contre_indication`, `prix_echantillon`) VALUES
(3, 'Smecta', 'ADSORBANTS INTESTINAUX', 'Maltodextrine, saccharose, triacétate de glycéryle (E1518), dioxyde de silicium (E551), alcool éthylique, lécithine de soja (E322), parfum vanille', 'Aucun', 'Si patients présentant une intolérance au fructose, un syndrome de malabsorption du glucose et du galactose ou un déficit en sucrase/isomaltase', '4,39 euro'),
(2, 'Doliprane 1000', 'paracétamol', 'sodium (409 mg/cp). Excipients : povidone, amidon prégélatinisé, carboxyméthylamidon sodique (type A), talc, stéarate de magnésium, hydroxypropylcellulose, hypromellose, macrogol 6000', 'diminution globule blanc', 'allergie au paracétamol ou à l\'un des autres composants contenus dans ce médicament', '2,00 euro'),
(4, 'Spasfon', 'Antispasmodiques musculotropes', 'Phloroglucinol hydraté,Triméthylphloroglucinol', 'Aucun', ' si vous êtes allergique au phloroglucinol, au triméthylphloroglucinol ou à l\'un des autres composants contenus dans ce médicament', '3,17 euro'),
(5, 'Lamictal', ' anti-épileptiques', 'Lamotrigine', 'Maux de tête, troubles de la vision, tremblements, somnolence, agitation, fatigue, vertiges, troubles digestifs, augmentation paradoxale de la fréquence des crises d\'épilepsie', 'Ne jamais donné à des personnes de moins de 18 ans pour traiter des troubles bipolaire', '4,73 euro');

-- --------------------------------------------------------

--
-- Structure de la table `practiciens`
--

CREATE TABLE `practiciens` (
  `Numero_praticiens` int(11) NOT NULL,
  `Nom_praticiens` varchar(255) DEFAULT NULL,
  `Prenom_praticiens` varchar(255) NOT NULL,
  `Adresse_praticiens` varchar(255) NOT NULL,
  `CP_praticiens` decimal(5,0) NOT NULL,
  `Ville_praticiens` varchar(255) NOT NULL,
  `region_practiciens` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `practiciens`
--

INSERT INTO `practiciens` (`Numero_praticiens`, `Nom_praticiens`, `Prenom_praticiens`, `Adresse_praticiens`, `CP_praticiens`, `Ville_praticiens`, `region_practiciens`) VALUES
(6, 'DECIANTS', 'Marine', '35 Rue de Marseille', 69000, 'Lyon', 'Rhone-Alpes'),
(7, 'D\'Aoust', 'Théodore', '15, rue du Paillle en queue', 69000, 'Lyon', 'Rhone-Alpes'),
(8, 'COLLIN', 'Roxanne', '43, rue du Clair Bocage', 69000, 'Lyon', 'Rhones-Alpes'),
(9, 'ECHEVERRI', 'Donat', '69, avenue Voltaire', 69000, 'Lyon', 'Rhone-Alpes'),
(10, 'BLER', 'Isaac', '27, rue du Clair Bocage', 69000, 'Lyon', 'Rhone-Alpes'),
(11, 'PROVENCHER', 'Saville', '93, rue de l\'Epeule', 69000, 'Lyon', 'Rhone-Alpes'),
(12, 'BOURQUE', 'Dielle', '87, avenue de l\'Amandier', 69000, 'Lyon', 'Rhone-Alpes'),
(13, 'BELLEMARE', 'Verrill', '22, boulevard d\'Alsace', 0, 'Lyon', '69000'),
(14, 'ABATTI', 'Taryll', '97 rue ferdinant buisson', 69000, 'Lyon', 'Rhone-Alpes');

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `departement` varchar(255) NOT NULL
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

CREATE TABLE `users` (
  `id_User` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(20, 'test', 'visiteur', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 's', 'o', 'Hauts-de-France'),
(21, 'paul', 'visiteur', '35e1d1aeed3f7179b02a0dfde8f4e826e191649ee2acfd6da6b2ce7a12aa0f8b', 'durant', 'paul', 'Auvergne-Rhône-Alpes'),
(22, 'delegue', 'delegue', '789', '', '', ''),
(23, 'dupont', 'visiteur', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'Dupont', 'Jean', 'Auvergne-Rhône-Alpes'),
(24, 'alexandre', 'delegue', 'b3a8e0e1f9ab1bfe3a36f231f676f78bb30a519d2b21e6c530c0eee8ebb4a5d0', 'Richard', 'Alexandre', 'Auvergne-Rhône-Alpes'),
(25, 'rick', 'responsable', '35a9e381b1a27567549b5f8a6f783c167ebf809f1c4d6a9e367240484d8ce281', 'Sanchez', 'Rick', 'Auvergne-Rhône-Alpes');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `form_visite`
--
ALTER TABLE `form_visite`
  ADD PRIMARY KEY (`id_form`),
  ADD KEY `id_User` (`id_User`);

--
-- Index pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`num_medicament`);

--
-- Index pour la table `practiciens`
--
ALTER TABLE `practiciens`
  ADD PRIMARY KEY (`Numero_praticiens`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`departement`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_User`),
  ADD KEY `departement` (`departement`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `form_visite`
--
ALTER TABLE `form_visite`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `medicament`
--
ALTER TABLE `medicament`
  MODIFY `num_medicament` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `practiciens`
--
ALTER TABLE `practiciens`
  MODIFY `Numero_praticiens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
