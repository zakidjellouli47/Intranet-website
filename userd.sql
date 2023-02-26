-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  jeu. 01 oct. 2020 à 12:42
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `userd`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

DROP TABLE IF EXISTS `adherent`;
CREATE TABLE IF NOT EXISTS `adherent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_naissance` date NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `specialite` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_adhesion` date NOT NULL,
  `date_fin_adhesion` date NOT NULL,
  `tel` varchar(255) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(255) COLLATE utf8_bin NOT NULL,
  `cotisation_annuaire` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_payement` date NOT NULL,
  `etat` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_service` (`id_service`)
) ENGINE=InnoDB AUTO_INCREMENT=167 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`id`, `id_service`, `nom`, `prenom`, `date_naissance`, `mail`, `specialite`, `date_adhesion`, `date_fin_adhesion`, `tel`, `adresse`, `cotisation_annuaire`, `date_payement`, `etat`) VALUES
(2, 12, 'fortas', 'nadia', '2001-05-23', 'nadiafortas@gmail.com', 'info', '2020-05-13', '2020-05-19', '0773202556', 'oran', '   2563212 dzd', '2020-05-21', 1),
(3, 12, 'karim', 'amine', '2020-05-21', 'karimam@gmail.com', 'biologie', '2020-05-15', '2020-05-22', '0663251545', 'alger', ' 255454 dzd', '2020-05-31', 1),
(5, 5, 'ahmed', 'amine', '1998-02-15', 'ahmedsf@outlook.fr', 'medecine', '2020-05-08', '2020-05-22', '0516222225', 'oran', '255454 dzd', '2020-05-22', 1),
(6, 156, 'dahou', 'sofiane', '2020-05-15', 'sof_sf@gmail.com', 'biologie', '2020-05-08', '2020-05-16', '05162222', 'marseille', '256514 dzd', '2020-05-22', 1),
(160, 12, 'amir', 'mohamed', '2004-02-15', 'amirmohamed@gmail.com', 'info', '2020-09-16', '2020-09-16', '054151994', 'oran', '2555550051696 $', '2020-10-02', 0),
(166, 1, 'mohamed', 'bourezg', '1998-09-22', 'bourez_ref1548gmail.com', 'info', '2020-10-01', '2020-09-16', '015152552', 'oran', '2559626', '2020-09-16', 1);

-- --------------------------------------------------------

--
-- Structure de la table `bilans`
--

DROP TABLE IF EXISTS `bilans`;
CREATE TABLE IF NOT EXISTS `bilans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `type` varchar(255) COLLATE utf8_bin NOT NULL,
  `auteur` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_creation` date NOT NULL,
  `date_publication` date NOT NULL,
  `fichier` varchar(255) COLLATE utf8_bin NOT NULL,
  `lien` varchar(255) COLLATE utf8_bin NOT NULL,
  `etat` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `bilans`
--

INSERT INTO `bilans` (`id`, `titre`, `type`, `auteur`, `date_creation`, `date_publication`, `fichier`, `lien`, `etat`) VALUES
(1, 'Modele_complet_pour_societes_en_euro', 'Bilans', 'Banque_Nationale_de_Belgique', '2019-01-18', '2019-05-01', '2019_fr_com_complet_modele', './pdf/', 1);

-- --------------------------------------------------------

--
-- Structure de la table `bilan_financier`
--

DROP TABLE IF EXISTS `bilan_financier`;
CREATE TABLE IF NOT EXISTS `bilan_financier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `auteur` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_creation` date NOT NULL,
  `date_publication` date NOT NULL,
  `fichier` varchar(255) COLLATE utf8_bin NOT NULL,
  `lien` varchar(255) COLLATE utf8_bin NOT NULL,
  `etat` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `bilan_financier`
--

INSERT INTO `bilan_financier` (`id`, `titre`, `auteur`, `date_creation`, `date_publication`, `fichier`, `lien`, `etat`) VALUES
(1, 'Gestion_de_la_pharmacie_d\'Officine_au_Maroc', 'Mohammed_Chattou', '2020-06-11', '2020-06-18', 'chattou_presentation', './pdf_pv/', 1);

-- --------------------------------------------------------

--
-- Structure de la table `bureau`
--

DROP TABLE IF EXISTS `bureau`;
CREATE TABLE IF NOT EXISTS `bureau` (
  `id_bureau` int(100) NOT NULL AUTO_INCREMENT,
  `id_societe` int(100) NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lieu` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `adresse_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_mandat_deb` date NOT NULL,
  `date_mandat_fin` date NOT NULL,
  PRIMARY KEY (`id_bureau`,`id_societe`),
  KEY `id_societe` (`id_societe`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `bureau`
--

INSERT INTO `bureau` (`id_bureau`, `id_societe`, `nom`, `lieu`, `tel`, `adresse_email`, `date_mandat_deb`, `date_mandat_fin`) VALUES
(1, 12, 'intranet', 'oran', '05532455', 'intranet-sath@gmail.com', '2020-06-02', '2020-06-18'),
(2, 2, 'intranet', 'oran', '052626261', 'fortasnadia@gmail.com', '2020-06-11', '2020-06-19');

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

DROP TABLE IF EXISTS `comptes`;
CREATE TABLE IF NOT EXISTS `comptes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` varchar(255) COLLATE utf8_bin NOT NULL,
  `mot_de_passe` varchar(255) COLLATE utf8_bin NOT NULL,
  `code_rec` varchar(50) COLLATE utf8_bin NOT NULL,
  `role` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `comptes`
--

INSERT INTO `comptes` (`id`, `nom_utilisateur`, `mot_de_passe`, `code_rec`, `role`) VALUES
(1, 'secretaire intranet', 'nadia_fortas_20', '0553212592', 'secretaire'),
(2, 'admin intranet', 'zaki_djellouli_47', '0779125584', 'president'),
(3, 'tresorier intranet', 'daho_amine_18', '05226118488', 'tresorier');

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

DROP TABLE IF EXISTS `document`;
CREATE TABLE IF NOT EXISTS `document` (
  `id_document` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `type` varchar(255) COLLATE utf8_bin NOT NULL,
  `auteur` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_creation` date NOT NULL,
  `date_pub_ligne` date NOT NULL,
  `fichier` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_membre` int(11) NOT NULL,
  PRIMARY KEY (`id_document`),
  KEY `id_membre` (`id_membre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `Type` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_eve` date NOT NULL,
  `lieu` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_membre` int(11) NOT NULL,
  `etat` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_membre` (`id_membre`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `Titre`, `Type`, `date_eve`, `lieu`, `description`, `id_membre`, `etat`) VALUES
(3, 'zaki', 'dsfdsfm', '2020-09-17', 'oran', 'dsfsdf', 1, 1),
(7, 'even11', 'congré', '2020-10-06', 'Oran  1', 'evenement1', 1, 1),
(9, 'Appel_à_communications', 'Congré', '2020-09-24', 'hôtel_Mercure,Alger', 'Dans le cadre de l’organisation de son 19ème congrès qui aura lieu du 26 au 27 Novembre à l’hôtel Mercure, Alger. la Société Algérienne de Transfusion et d’hémobiologie lance un appel à communication pour toutes les personnes qui souhaitent participer.', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `meeting`
--

DROP TABLE IF EXISTS `meeting`;
CREATE TABLE IF NOT EXISTS `meeting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Organisateur` varchar(255) COLLATE utf8_bin NOT NULL,
  `intitule` varchar(255) COLLATE utf8_bin NOT NULL,
  `Type` varchar(255) COLLATE utf8_bin NOT NULL,
  `Lieu` varchar(255) COLLATE utf8_bin NOT NULL,
  `Date` date NOT NULL,
  `id_membre` int(11) NOT NULL,
  `etat` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_membre` (`id_membre`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `meeting`
--

INSERT INTO `meeting` (`id`, `Organisateur`, `intitule`, `Type`, `Lieu`, `Date`, `id_membre`, `etat`) VALUES
(3, 'Djellouli Zakaria', 'Dames', 'Congré', 'Université Guelma.', '2020-10-01', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id_membre` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `role` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_bureau` int(100) NOT NULL,
  PRIMARY KEY (`id_membre`),
  KEY `id_bureau` (`id_bureau`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `nom`, `prenom`, `date_naissance`, `role`, `id_bureau`) VALUES
(1, 'djellouli', 'zakaria', '2020-06-24', 'president', 1);

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

DROP TABLE IF EXISTS `presentation`;
CREATE TABLE IF NOT EXISTS `presentation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `presentation` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `but` text COLLATE utf8_bin NOT NULL,
  `composition` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `presentation`
--

INSERT INTO `presentation` (`id`, `presentation`, `but`, `composition`) VALUES
(1, '             <h3>\r\nLA SOCIÉTÉ ALGÉRIENNE DE TRANSFUSION ET D’HÉMOBIOLOGIE :\r\n</h3>\r\nL’association est Scientifique, les membres fondateurs et adhérents de l’association mettent en commun, bénévolement et dans un but non lucratif, leurs connaissances et leurs moyens pour promouvoir et encourager les activités dans ce domaine. Toutefois, l’objet et le but de ses activités doivent s’inscrire dans l’intérêt général et ne pas être contraire aux constantes et aux valeurs nationales ainsi qu’à l’ordre public, aux bonnes moeurs et aux dispositions des lois et règlements en vigueur.\r\n</br></br>           ', '                               \r\n<h3>\r\nL’association a pour buts essentiels :\r\n</h3>\r\n\r\n<li>Promouvoir la Transfusion sanguine et l’Hémobiologie .</li>\r\n<li>Contribuer dans le développement et la Recherche Scientifique .</li>\r\n<li>Assurer l’enseignement spécifique et la formation continue. </li>\r\n</br>\r\n                   ', '                               \r\n<h3>\r\nLe comité scientifique est composé comme suit :\r\n</h3>\r\n<li>Pr. SEGHIER. F Z.</li>\r\n<li>Pr. ZERHOUNI. F</li>\r\n<li>Pr OUELAA H</li>\r\n<li>Pr. HARITI G</li>\r\n<li>Pr. BROUK. H.</li>\r\n<li>Pr. HARIECHE F</li> \r\n</br>                       ');

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

DROP TABLE IF EXISTS `publication`;
CREATE TABLE IF NOT EXISTS `publication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `Type` varchar(255) COLLATE utf8_bin NOT NULL,
  `Nom_Auteur` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_pub` date NOT NULL,
  `Lien` text COLLATE utf8_bin NOT NULL,
  `etat` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`id`, `Titre`, `Type`, `Nom_Auteur`, `date_pub`, `Lien`, `etat`) VALUES
(1, 'pub', 'medecine', 'zaki_djellouli', '2020-05-15', 'https://pub.com', 1),
(2, 'pub1', 'medecine1', 'fortas_nadia', '2020-05-06', 'https://pub1.com', 1),
(3, 'L’influence_des_défauts_de_rugosité', 'examen', 'sassi_ahmed', '2020-09-15', '//', 1);

-- --------------------------------------------------------

--
-- Structure de la table `residanat`
--

DROP TABLE IF EXISTS `residanat`;
CREATE TABLE IF NOT EXISTS `residanat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Responsable_stage` varchar(255) COLLATE utf8_bin NOT NULL,
  `Theme` varchar(255) COLLATE utf8_bin NOT NULL,
  `Annee` date NOT NULL,
  `Intitule` varchar(255) COLLATE utf8_bin NOT NULL,
  `Ville` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_service` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `etat` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `residanat_ibfk_1` (`id_service`),
  KEY `residanat_ibfk_2` (`id_membre`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `residanat`
--

INSERT INTO `residanat` (`id`, `Responsable_stage`, `Theme`, `Annee`, `Intitule`, `Ville`, `id_service`, `id_membre`, `etat`) VALUES
(43, 'sqf', 'dsgdfh', '2020-09-23', 'dsgdfh', 'dsgsfg', 12, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id_service` int(11) NOT NULL AUTO_INCREMENT,
  `acronyme` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `adresse_service` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_service`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id_service`, `acronyme`, `nom`, `type`, `adresse_service`, `tel`) VALUES
(12, 'acr', 'djellouli', 'sevice', 'oran', '041 32 84 92');

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

DROP TABLE IF EXISTS `societe`;
CREATE TABLE IF NOT EXISTS `societe` (
  `id_societe` int(100) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `acronyme` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `adresse_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `domaine` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_creation` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `presentation` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_societe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `these`
--

DROP TABLE IF EXISTS `these`;
CREATE TABLE IF NOT EXISTS `these` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `Auteur` varchar(200) COLLATE utf8_bin NOT NULL,
  `Option_These` varchar(200) COLLATE utf8_bin NOT NULL,
  `Directeur_These` varchar(200) COLLATE utf8_bin NOT NULL,
  `Lieu` varchar(200) COLLATE utf8_bin NOT NULL,
  `Annee` date NOT NULL,
  `Abstract` text COLLATE utf8_bin NOT NULL,
  `etat` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `these`
--

INSERT INTO `these` (`id`, `Titre`, `Auteur`, `Option_These`, `Directeur_These`, `Lieu`, `Annee`, `Abstract`, `etat`) VALUES
(2, 'Le traitement laparoscopique ', 'ELAIB_Mostefa', 'Medecine', 'BOUBEKEUR Mohammed', 'Dep_Medecine', '2012-01-22', 'https://theses.univ-oran1.dz/document/1012012001t.pdf', 1),
(3, ' prise en charge de la tuberculose a bacilles ', 'OUARDI_Aissa', 'Medecine', 'BERRABAH Yahia', 'Dep_Medecine', '2013-10-10', 'https://theses.univ-oran1.dz/document/1012013004t.pdf', 1),
(4, 'Evaluation des teneurs ', 'GAOUAR_Zakaria_Lotfi', 'Medecine', 'REZKKALLAH Haciba', 'Dep_Pharmacie', '2017-10-25', 'https://theses.univ-oran1.dz/document/1022017001t.pdf', 1),
(5, ' prise en charge des corps etrangers ', 'TADJ_Zineb', 'Medecine', 'IDDER Aicha', 'Dep_Medecine', '2016-03-07', 'https://theses.univ-oran1.dz/document/1012016004t.pdf', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id_membre`);

--
-- Contraintes pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `evenement_ibfk_1` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id_membre`);

--
-- Contraintes pour la table `meeting`
--
ALTER TABLE `meeting`
  ADD CONSTRAINT `meeting_ibfk_1` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id_membre`);

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `membre_ibfk_1` FOREIGN KEY (`id_bureau`) REFERENCES `bureau` (`id_bureau`);

--
-- Contraintes pour la table `residanat`
--
ALTER TABLE `residanat`
  ADD CONSTRAINT `residanat_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`),
  ADD CONSTRAINT `residanat_ibfk_2` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id_membre`);

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `adherent` (`id_service`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
