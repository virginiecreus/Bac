-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 21 Novembre 2016 à 18:06
-- Version du serveur: 5.5.52-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bac`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `titre_article` varchar(100) NOT NULL,
  `article` text NOT NULL,
  `utilisateurs_id` int(11) NOT NULL,
  `publier` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `image`, `titre_article`, `article`, `utilisateurs_id`, `publier`) VALUES
(15, 'article1.jpg', 'Retour sur la nuit exceptionnelle où Thomas Pesquet est entré dans l''ISS.', 'L’amarrage de la capsule Soyouz à l’ISS s’est parfaitement déroulé dans la nuit de samedi à dimanche 20 novembre 2016. L’astronaute français Thomas Pesquet est enfin entré dans la station, après 7 ans d’entraînement. C’est le début d’une mission de 6 mois à 400 km d’altitude. Retour sur une nuit exceptionnelle…\r\nLa nuit promet d’être longue au TsUP, le centre de contrôle russe des missions spatiales, situé dans la cité Korolev à Moscou. C’est dans cet immeuble massif, de style désuètement soviétique, qu’est programmée, contrôlée, corrigée la trajectoire du vaisseau Soyouz, qui conduit le Français Thomas Pesquet, l’Américaine Peggy Whitson et le Russe Oleg Nivitsky vers la station spatiale internationale (ISS). Dans la salle de contrôle principale, l’écran central affiche une série d’indicateurs (vitesse, heure, distance à la station, etc.) sur fond de nuit noire. Lancée depuis la base spatiale de Baïkonour (Kazakhstan) le 17 novembre 2016, la capsule  Soyouz MS-3 est très logiquement le troisième modèle d’une nouvelle génération de Soyouz qui vient d’être mise en service cette année. Conçue au début des années 1960, elle remplace l’électronique, jusqu’alors analogique, par du numérique. Au cours des deux derniers jours, la capsule russe injectée sur une orbite intermédiaire à 320 km d’altitude a effectué des corrections orbitales, s’élevant peu à peu pour rejoindre l’orbite de la station, à une altitude de 400 km environ.', 1, 'oui'),
(24, 'article2.jpg', 'Autour d''une étoile, quelques planètes en formation', 'Dans le disque qui entoure les étoiles jeunes, le très grand télescope (VLT) de l''observatoire austral européen a surpris des planètes en train de se former.\r\nLes astronomes s’en doutaient : une planète en formation perturbe le disque de gaz et de poussières autour de son étoile mère. Mais rarement ce stade précoce de la naissance d’une planète avait été surpris aussi distinctement. C’est ce spectacle surprenant que l’instrument Sphere (Spectro-Polarimètre à Haut contraste dédié à la REcherche d''Exoplanètes) installé il y a deux ans sur le VLT (le très grand télescope de l’Observatoire Austral européen, ESO) a offert à trois équipes d’astronomes, issues entre autres de quelques laboratoires français.', 1, 'non'),
(28, 'article3.jpg', 'Combien de temps dure un jour sur Saturne ?', 'Les prochaines manœuvres de la sonde Cassini pourront-elles enfin préciser la durée d''une journée sur Saturne ? Réponse attendue en mai 2017.\r\n23,934. C''est la durée précise, en heures, d''un jour terrestre. C''est à dire d''une rotation complète de la Terre autour de son axe. "Quelqu''un situé sur une autre planète pourrait aisément calculer cette durée en choisissant une caractéristique de surface distincte, comme Madagascar, en notant sa position et en cliquant sur un chronomètre. Lorsque Madagascar revient à sa position initiale, l''observateur peut noter le temps écoulé et ainsi obtenir le taux de rotation de la Terre", explique Michele Dougherty de l''Imperial College à Londres. Cette méthode a été appliquée pour déterminer le taux de rotation des planètes rocheuses du système solaire comme Mars ou Mercure. Mais elle ne fonctionne pas pour les géantes gazeuses Jupiter ou Saturne par exemple, cachées par une épaisse couche nuageuse. Il est effectivement difficile d''y repérer un point fixe à leur surface. Les astronomes sont donc contraints d''utiliser d''autres indices pour déterminer cette vitesse de rotation comme la mesure la périodicité des émissions des signaux radio découverts au début des années 80 avec les sondes Voyager ou la variation de leur champ magnétique. Des méthodes qui ont des marges d''incertitudes assez importantes.', 1, 'non'),
(29, 'article4.jpg', 'Deux galaxies en collision forment un œil géant', 'A 114 millions d''années-lumière, deux galaxies en collision offrent un magnifique spectacle composé d''étoiles en formation. \r\nOCULAIRE. "Bien que les collisions de galaxies spirales ne soient pas rares, seules quelques galaxies avec des structures oculaires sont connues", souligne Michele Kaufman, principal auteur d''une publication sur un duo de galaxies qui s''entrechoque à paraître dans l''Astrophysical Journal. En fait, ces deux galaxies, situées à 114 millions d''années-lumière de la Terre dans la constellation du Grand Chien n''ont encore fait que se frôler, des prémices à ce qui se transformera dans quelques centaines de millions d''années en une véritable collision. Mais cette interaction a déjà provoqué des bouleversements au sein des deux membres de la paire. ', 1, 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `utilisateurs_id` varchar(100) NOT NULL,
  `articles_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `utilisateurs_id`, `articles_id`) VALUES
(2, 'bhjkbkjlbjklb', '', '24'),
(3, 'gfckjhjkhgjktgkjjkt', '', '15'),
(4, 'cfgdghfjygj', '', '15'),
(5, 'fgfgf', '', '15'),
(6, 'gfgg', '', '15'),
(7, 'gfgf', '', '15'),
(8, 'cvfghjjhhjh', '', '15');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `mail`, `mot_de_passe`, `avatar`, `pseudo`, `role`) VALUES
(1, 'Robert', 'Antoine', 'RobertAntoine@gmail.com', 'girafe', '', 'RB', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
