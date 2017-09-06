-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 06 sep. 2017 à 10:11
-- Version du serveur :  10.1.25-MariaDB
-- Version de PHP :  7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `weebelule`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `IDADMIN` int(11) NOT NULL,
  `NOMADMIN` varchar(100) NOT NULL,
  `PRENOMADMIN` varchar(100) NOT NULL,
  `LOGIN` varchar(100) NOT NULL,
  `PSWADMIN` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `IDANNONCE` int(11) NOT NULL,
  `TITREANNONCE` text NOT NULL,
  `IDCATEGORIE` int(11) NOT NULL,
  `IDSCATEGORIE` int(11) NOT NULL,
  `CONTENUANNONCE` text NOT NULL,
  `DATECREAANNONCE` datetime NOT NULL,
  `VALEURANNONCE` varchar(20) NOT NULL,
  `PHOTOANNONCE` longtext NOT NULL,
  `IDUSER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `IDCATEGORIE` int(11) NOT NULL,
  `LIBELLECATEGORIE` varchar(250) NOT NULL,
  `ROUTECATEGORIE` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`IDCATEGORIE`, `LIBELLECATEGORIE`, `ROUTECATEGORIE`) VALUES
(1, 'materiel', 'categorie/materiel'),
(2, 'culture', 'categorie/culture'),
(3, 'mode', 'categorie/mode'),
(4, 'service_a_domicile', 'categorie/service_a_domicile'),
(5, 'vivre_ensemble', 'categorie/vivre_ensemble'),
(6, 'vacances', 'categorie/vacances'),
(7, 'je_recherche', 'categorie/je_recherche');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `IDNEWSLETTER` int(11) NOT NULL,
  `ELAILNEWSLETTER` varchar(50) NOT NULL,
  `CONTACTNEWSLETTER` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `scategorie`
--

CREATE TABLE `scategorie` (
  `IDSCATEGORIE` int(11) NOT NULL,
  `IDCATEGORIE` int(11) NOT NULL,
  `LIBELLESCATEGORIE` varchar(50) NOT NULL,
  `ROUTESCATEGORIE` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `scategorie`
--

INSERT INTO `scategorie` (`IDSCATEGORIE`, `IDCATEGORIE`, `LIBELLESCATEGORIE`, `ROUTESCATEGORIE`) VALUES
(10, 1, 'ameublement_deco', 'categorie/materiel/ameublement_deco'),
(11, 1, 'electromenager', 'categorie/materiel/electromenager'),
(12, 1, 'brico_jardinage', 'categorie/materiel/brico_jardinage'),
(13, 1, 'puericulture', 'categorie/materiel/puericulture'),
(14, 1, 'sport_loisirs', 'categorie/materiel/sport_loisirs'),
(20, 2, 'livres', 'categorie/culture/livres'),
(21, 2, 'comics&bd', 'categorie/culture/comics&bd'),
(22, 2, 'films_musique', 'categorie/culture/films_musique'),
(23, 2, 'multimedia', 'categorie/culture/multimedia'),
(24, 2, 'instruments_de_musique', 'categorie/culture/instruments_de_musique'),
(30, 3, 'hab_h', 'categorie/mode/hab_h'),
(31, 3, 'hab_f', 'categorie/mode/hab_f'),
(32, 3, 'hab_jr', 'categorie/mode/hab_jr'),
(33, 3, 'accssessoires', 'categorie/mode/accssessoires'),
(34, 3, 'chaussures', 'categorie/mode/chaussures'),
(40, 4, 'brico', 'categorie/service/brico'),
(41, 4, 'meca', 'categorie/service/meca'),
(42, 4, 'aide_senior', 'categorie/service/aide_senior'),
(43, 4, 'aide_menage', 'categorie/service/aide_menage'),
(44, 4, 'baby_sitting', 'categorie/service/baby_sitting'),
(45, 4, 'demenagement', 'categorie/service/demenagement'),
(46, 4, 'aide_info', 'categorie/service/aide_info'),
(47, 4, 'soutien_scolaire', 'categorie/service/soutien_scolaire'),
(48, 4, 'beaute', 'categorie/service/beaute'),
(49, 4, 'administratif', 'categorie/service/administratif'),
(50, 5, 'coach', 'categorie/vivre_ensemble/coach'),
(51, 5, 'covoiturage', 'categorie/vivre_ensemble/covoiturage'),
(52, 5, 'randonee', 'categorie/vivre_ensemble/randonee'),
(53, 5, 'sortie_kids', 'categorie/vivre_ensemble/sortie_kids'),
(54, 5, 'sortie_sport', 'categorie/vivre_ensemble/sortie_sport'),
(60, 6, 'animaux', 'categorie/vacances/animaux'),
(61, 6, 'services', 'categorie/vacances/services'),
(62, 6, 'home_sitting', 'categorie/vacances/home_sitting'),
(63, 6, 'troc_maison', 'categorie/vacances/troc_maison'),
(64, 6, 'voyage', 'categorie/vacances/voyage');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `IDUSER` int(11) NOT NULL,
  `NOMUSER` varchar(50) NOT NULL,
  `PRENOMUSER` varchar(100) NOT NULL,
  `EMAILUSER` varchar(100) NOT NULL,
  `TELUSER` int(10) NOT NULL,
  `ADRESSEUSER` varchar(250) NOT NULL,
  `CPUSER` varchar(10) NOT NULL,
  `VILLEUSER` varchar(100) NOT NULL,
  `MDPUSER` varchar(250) NOT NULL,
  `ROLEUSER` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`IDUSER`, `NOMUSER`, `PRENOMUSER`, `EMAILUSER`, `TELUSER`, `ADRESSEUSER`, `CPUSER`, `VILLEUSER`, `MDPUSER`, `ROLEUSER`) VALUES
(12, 'supernice', 'nice', 'nice@super.youpi', 0, '', '', '', '0e831999c6d5d44f6b8926fe6575c1fd5d63dc6e', ''),
(13, 'yoshikage', 'kira', 'killerqueen@bakudan.dust', 0, '', '', '', 'c53d2f1a9a8499bcb477be56c31caa5c76ae60f5', '');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `view_annonces`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `view_annonces` (
`IDUSER` int(11)
,`IDCATEGORIE` int(11)
,`LIBELLECATEGORIE` varchar(250)
,`TITREANNONCE` text
,`CONTENUANNONCE` text
,`PHOTOANNONCE` longtext
,`DATECREAANNONCE` datetime
,`NOMUSER` varchar(50)
,`PRENOMUSER` varchar(100)
,`EMAILUSER` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure de la vue `view_annonces`
--
DROP TABLE IF EXISTS `view_annonces`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_annonces`  AS  select `annonce`.`IDUSER` AS `IDUSER`,`annonce`.`IDCATEGORIE` AS `IDCATEGORIE`,`categorie`.`LIBELLECATEGORIE` AS `LIBELLECATEGORIE`,`annonce`.`TITREANNONCE` AS `TITREANNONCE`,`annonce`.`CONTENUANNONCE` AS `CONTENUANNONCE`,`annonce`.`PHOTOANNONCE` AS `PHOTOANNONCE`,`annonce`.`DATECREAANNONCE` AS `DATECREAANNONCE`,`user`.`NOMUSER` AS `NOMUSER`,`user`.`PRENOMUSER` AS `PRENOMUSER`,`user`.`EMAILUSER` AS `EMAILUSER` from ((`annonce` join `user`) join `categorie`) where ((`annonce`.`IDUSER` = `user`.`IDUSER`) and (`annonce`.`IDCATEGORIE` = `categorie`.`IDCATEGORIE`)) ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IDADMIN`);

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`IDANNONCE`),
  ADD KEY `IDCATEGORIE` (`IDCATEGORIE`),
  ADD KEY `IDSCATEGORIE` (`IDSCATEGORIE`),
  ADD KEY `IDUSER` (`IDUSER`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`IDCATEGORIE`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`IDNEWSLETTER`);

--
-- Index pour la table `scategorie`
--
ALTER TABLE `scategorie`
  ADD PRIMARY KEY (`IDSCATEGORIE`),
  ADD UNIQUE KEY `IDSCATEGORIE` (`IDSCATEGORIE`,`IDCATEGORIE`,`LIBELLESCATEGORIE`,`ROUTESCATEGORIE`),
  ADD KEY `IDCATEGORIE` (`IDCATEGORIE`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDUSER`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `IDADMIN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `IDANNONCE` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `IDCATEGORIE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `IDNEWSLETTER` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `scategorie`
--
ALTER TABLE `scategorie`
  MODIFY `IDSCATEGORIE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `IDUSER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `annonce_ibfk_1` FOREIGN KEY (`IDSCATEGORIE`) REFERENCES `scategorie` (`IDSCATEGORIE`),
  ADD CONSTRAINT `annonce_ibfk_2` FOREIGN KEY (`IDUSER`) REFERENCES `user` (`IDUSER`),
  ADD CONSTRAINT `annonce_ibfk_3` FOREIGN KEY (`IDCATEGORIE`) REFERENCES `categorie` (`IDCATEGORIE`);

--
-- Contraintes pour la table `scategorie`
--
ALTER TABLE `scategorie`
  ADD CONSTRAINT `scategorie_ibfk_1` FOREIGN KEY (`IDCATEGORIE`) REFERENCES `categorie` (`IDCATEGORIE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
