-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 15 jan. 2022 à 13:34
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
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `avis_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `title_avis` varchar(255) NOT NULL,
  `description_avis` text NOT NULL,
  `logo_avis` varchar(255) NOT NULL,
  `typeLogo_avis` varchar(50) NOT NULL,
  `idTypeAvis` int(11) NOT NULL,
  PRIMARY KEY (`avis_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`avis_id`, `page_id`, `order`, `title_avis`, `description_avis`, `logo_avis`, `typeLogo_avis`, `idTypeAvis`) VALUES
(1, 1, 1, 'Découverte d\'outils de travail', 'C\'est toujours un plaisir d\'apprendre de nouveau langage de programmation même si nous faisons facilement des erreurs, on apprend à ne plus les refaires. Mais c\'est encore plus plaisant lorsque qu\'on apprend en même temps de nouveaux outils de travail comme ça était le cas pour ce projet avec la découverte du C, de l\'éditeur emacs mais aussi de trello pour partager les taches et de github pour mettre le travail en commun.', 'thumbs_up_down', 'icon', 2),
(2, 1, 2, 'Organisation du travail', 'Pour pouvoir bien avancer, il faut bien organiser le travail et ce projet nous à bien aider pour apprendre comment s\'organiser grace à trello pour partager les taches à faire mais aussi grace à github qui nous permettait de mettre à jour nos fichiers facilement quand une modification était apportée.', 'flash_on', 'icon', 2),
(3, 2, 1, 'Organiser son travail', 'Des milliers d\'outils sont disponibles gratuitement. Nous avons choisi Unity comme moteur de jeux, Git et GitHub pour travailler en même temps sur le même projet et Trello pour se répartir le travail.', 'lightbulb_outline', 'icon', 1),
(4, 2, 2, 'Appréhender les erreurs', 'Dès que nous avons commencé le projet nous avons fait face à une multitude de problèmes. Pour les résoudre nous avons demandé de l\'aide, cherché par nous-mêmes, discuté entre nous des décisions à prendre.', 'highlight_off', 'icon', 1),
(5, 2, 3, 'Atteindre son objectif', 'Il y a-t-il meilleure récompense que la satisfaction personnelle ? Se dépasser, aller plus loin, se tromper, recommencer; comme dirait Elon Musk, il n\'y a pas meilleure réussite que l\'échec.', 'directions_run', 'icon', 1),
(6, 3, 1, 'Développer ses connaissances', 'Selon moi, il est toujours bon de toujours chercher à développer ses connaissances et ses projets mon été très utile pour cela car avant de le commencer je n\'avais jamais fait de Javascript et je n\'avais jamais utilisé github ou encore héroku.', 'plus_one', 'icon', 1),
(7, 3, 2, 'Développer pour aider', 'En plus de vouloir développer mes connaissances se projet aussi pourra simplifier la façon de s\'amuser de plusieurs personnes. Après tout qui ne voudrait pas d\'un petit Rpg qui demande seulement une connexion internet, même pas besoin d\'avoir un puissant appareil, il suffit juste de pouvoir installer discord.', 'accessibility', 'icon', 1);

-- --------------------------------------------------------

--
-- Structure de la table `carousel`
--

DROP TABLE IF EXISTS `carousel`;
CREATE TABLE IF NOT EXISTS `carousel` (
  `carousel_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `carousel_link` varchar(255) NOT NULL,
  `idTypeCarousel` int(11) NOT NULL,
  PRIMARY KEY (`carousel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `carousel`
--

INSERT INTO `carousel` (`carousel_id`, `page_id`, `order`, `carousel_link`, `idTypeCarousel`) VALUES
(1, 1, 1, 'img/puissance_quatre/carousel/1.png', 2),
(2, 1, 2, 'img/puissance_quatre/carousel/2.png', 2),
(3, 1, 3, 'img/puissance_quatre/carousel/3.png', 2),
(4, 1, 4, 'img/puissance_quatre/carousel/4.png', 2),
(5, 2, 1, 'img/pokefus/carousel/pokeball.png', 1),
(6, 2, 2, 'img/pokefus/carousel/personnages.png', 1),
(7, 2, 3, 'img/pokefus/carousel/dofus.png', 1),
(8, 2, 4, 'img/pokefus/carousel/epee.png', 1),
(9, 3, 1, 'img/exaltya/carousel/carousel1.png', 1),
(10, 3, 2, 'img/exaltya/carousel/carousel2.png', 1),
(11, 3, 3, 'img/exaltya/carousel/carousel3.png', 1),
(12, 3, 4, 'img/exaltya/carousel/carousel4.png', 1),
(13, 4, 1, '', 0),
(14, 4, 2, '', 0),
(15, 4, 3, '', 0),
(16, 4, 4, '', 0),
(17, 5, 1, '', 0),
(18, 5, 2, '', 0),
(19, 5, 3, '', 0),
(20, 5, 4, '', 0),
(21, 6, 1, '', 0),
(22, 6, 2, '', 0),
(23, 6, 3, '', 0),
(24, 6, 4, '', 0),
(25, 7, 1, '', 0),
(26, 7, 2, '', 0),
(27, 7, 3, '', 0),
(28, 7, 4, '', 0),
(29, 8, 1, '', 0),
(30, 8, 2, '', 0),
(31, 8, 3, '', 0),
(32, 8, 4, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `img_link` varchar(255) NOT NULL,
  `img_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`img_id`, `page_id`, `img_name`, `img_link`, `img_desc`) VALUES
(1, 1, 'parallax_top', '<img src=\"img/puissance_quatre/parallax/top.jpg\" alt=\"parallax projet 1 Portfolio\">', 'parallax projet 1 Portfolio'),
(2, 1, 'parallax_mid', '<img src=\"img/puissance_quatre/parallax/mid.jpg\" alt=\"parallax projet 1 Portfolio\">', 'parallax projet 1 Portfolio'),
(3, 1, 'carousel_1', '<img src=\"img/puissance_quatre/carousel/1.png\" alt=\"carousel projet 1 Portfolio\">', 'carousel projet 1 Portfolio'),
(4, 1, 'carousel_2', '<img src=\"img/puissance_quatre/carousel/2.png\" alt=\"carousel projet 1 Portfolio\">', 'carousel projet 1 Portfolio'),
(5, 1, 'carousel_3', '<img src=\"img/puissance_quatre/carousel/3.png\" alt=\"carousel projet 1 Portfolio\">', 'carousel projet 1 Portfolio'),
(6, 1, 'carousel_4', '<img src=\"img/puissance_quatre/carousel/4.png\" alt=\"carousel projet 1 Portfolio\">', 'carousel projet 1 Portfolio'),
(7, 1, 'parallax_bot', '<img src=\"img/puissance_quatre/parallax/bot.png\" alt=\"parallax projet 1 Portfolio\">', 'parallax projet 1 Portfolio'),
(8, 2, 'parallax_top', '<img src=\"img/pokefus/parallax/top.jpg\" alt=\"parallax projet 2 Portfolio\">', 'parallax projet 2 Portfolio'),
(9, 2, 'parallax_mid', '<img src=\"img/pokefus/parallax/mid.jpg\" alt=\"parallax projet 2 Portfolio\">', 'parallax projet 2 Portfolio'),
(10, 2, 'carousel_1', '<img src=\"img/pokefus/carousel/pokeball.png\" alt=\"carousel projet 2 Portfolio\">', 'carousel projet 2 Portfolio'),
(11, 2, 'carousel_2', '<img src=\"img/pokefus/carousel/personnages.png\" alt=\"carousel projet 2 Portfolio\">', 'carousel projet 2 Portfolio'),
(12, 2, 'carousel_3', '<img src=\"img/pokefus/carousel/dofus.png\" alt=\"carousel projet 2 Portfolio\">', 'carousel projet 2 Portfolio'),
(13, 2, 'carousel_4', '<img src=\"img/pokefus/carousel/epee.png\" alt=\"carousel projet 2 Portfolio\">', 'carousel projet 2 Portfolio'),
(14, 2, 'parallax_bot', '<img src=\"img/pokefus/parallax/bot.jpg\" alt=\"parallax projet 2 Portfolio\">', 'parallax projet 2 Portfolio'),
(15, 3, 'parallax_top', '<img src=\"img/exaltya/parallax/top.jpg\" alt=\"parallax projet 3 Portfolio\">', 'parallax projet 3 Portfolio'),
(16, 3, 'parallax_mid', '<img src=\"img/exaltya/parallax/mid.jpg\" alt=\"parallax projet 3 Portfolio\">', 'parallax projet 3 Portfolio'),
(17, 3, 'carousel_1', '<img src=\"img/exaltya/carousel/carousel1.PNG\" alt=\"carousel projet 3 Portfolio\">', 'carousel projet 3 Portfolio'),
(18, 3, 'carousel_2', '<img src=\"img/exaltya/carousel/carousel2.PNG\" alt=\"carousel projet 3 Portfolio\">', 'carousel projet 3 Portfolio'),
(19, 3, 'carousel_3', '<img src=\"img/exaltya/carousel/carousel3.PNG\" alt=\"carousel projet 3 Portfolio\">', 'carousel projet 3 Portfolio'),
(20, 3, 'carousel_4', '<img src=\"img/exaltya/carousel/carousel4.PNG\" alt=\"carousel projet 3 Portfolio\">', 'carousel projet 3 Portfolio'),
(21, 3, 'parallax_bot', '<img src=\"img/exaltya/parallax/bot.jpg\" alt=\"parallax projet 3 Portfolio\">', 'parallax projet 3 Portfolio'),
(22, 4, '', '', ''),
(23, 4, '', '', ''),
(24, 4, '', '', ''),
(25, 4, '', '', ''),
(26, 4, '', '', ''),
(27, 4, '', '', ''),
(28, 4, '', '', ''),
(29, 5, '', '', ''),
(30, 5, '', '', ''),
(31, 5, '', '', ''),
(32, 5, '', '', ''),
(33, 5, '', '', ''),
(34, 5, '', '', ''),
(35, 5, '', '', ''),
(36, 6, '', '', ''),
(37, 6, '', '', ''),
(38, 6, '', '', ''),
(39, 6, '', '', ''),
(40, 6, '', '', ''),
(41, 6, '', '', ''),
(42, 6, '', '', ''),
(43, 7, '', '', ''),
(44, 7, '', '', ''),
(45, 7, '', '', ''),
(46, 7, '', '', ''),
(47, 7, '', '', ''),
(48, 7, '', '', ''),
(49, 7, '', '', ''),
(50, 8, '', '', ''),
(51, 8, '', '', ''),
(52, 8, '', '', ''),
(53, 8, '', '', ''),
(54, 8, '', '', ''),
(55, 8, '', '', ''),
(56, 8, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `objectifs`
--

DROP TABLE IF EXISTS `objectifs`;
CREATE TABLE IF NOT EXISTS `objectifs` (
  `objectifs_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `title_objectifs` varchar(255) NOT NULL,
  `description_objectifs` text NOT NULL,
  `logo_objectifs` varchar(255) NOT NULL,
  `typeLogo_objectifs` varchar(50) NOT NULL,
  `idTypeObjectifs` int(11) NOT NULL,
  PRIMARY KEY (`objectifs_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `objectifs`
--

INSERT INTO `objectifs` (`objectifs_id`, `page_id`, `order`, `title_objectifs`, `description_objectifs`, `logo_objectifs`, `typeLogo_objectifs`, `idTypeObjectifs`) VALUES
(1, 1, 1, 'Environnement linux', 'Lors de ce projet, l\'un des objectifs était de développer sur un environnement Linux. Pour se faire nous avons utilisé Debian. Au début le plus difficile était de se déplacer dans les fichiers car Debian n\'a pas d\'interface graphique et toute action se fait à partir de ligne de commande.', 'img/puissance_quatre/icons/linux.png', 'image', 2),
(2, 1, 2, 'Github', 'Afin de travailler en groupe, ont nous à demander d\'utiliser git et github et de nous créer un environnement professionnel afin de stocker notre travail et de pouvoir se mettre à jour lorsque l\'un de nous faisait une modification.', 'img/puissance_quatre/icons/github.png', 'image', 2),
(3, 1, 3, 'Puissance 4', 'Pour la partie programmation, le projet consistait à faire une puissance 4 pour ce faire, il nous à falloir un éditeur de texte type Emacs puis il nous a fallu utiliser Gcc afin de compiler notre code pour pouvoir le lancer.', 'img/puissance_quatre/icons/manette.png', 'image', 2),
(4, 2, 1, 'Savoir se ré-inventer', 'En tant que fanatique de l\'Univers du Krosmoz, j\'ai créé un projet hybride, mêlant gameplay / style graphique à la Pokémon et plongent dans l\'histoire des Dofus. Le gameplay s\'articule autour de défis, combats au tour par tour, et quêtes épiques.', 'import_contacts', 'icon', 1),
(5, 2, 2, 'Cibler un public large', 'Ce jeu a pour objectif d\'être adapté à tous les types de joueurs, du casual au hardore gamer en passant par l\'intermédiaire. Le jeu est divisé en 3 phases non explicites à la vue des joueurs, correspondant à un niveau de difficulté croissant.', 'groupe', 'icon', 1),
(6, 2, 3, 'Un modèle économique solide', 'Le marché du jeu vidéo est en constante évolution, le modèle économique d\'un jeu est très important, il peut aussi définir sa durée de vie mais surtout ça rentabilité. L\'aire des jeux matériels, par abonnement etc. est révolue, c\'est pourquoi nous avons fait le choix du gacha.', 'show_chart', 'icon', 1),
(7, 3, 1, 'Créer un bot discord', 'Dans un premier temps l\'objectif de ce projet était de se familiariser avec le Javascript passant beaucoup de temps sur discord, quoi de mieux que de se faire un bot discord personnalisé. J\'ai relevé le défi et je me suis lancé.', 'img/exaltya/icons/djs.png', 'image', 1),
(8, 3, 2, 'Disponibility 24h/24 et 7j/7', 'Pour avoir un vrai bot, il est mieux qu\'il soit connecté 24h/24 et 7j/7 alors j\'ai fait beaucoup de recherches pour trouver des hébergeurs gratuits et j\'ai fini par trouver Heroku. J\'ai alors commencé à utiliser git pour pouvoir mettre mon bot sur l\'hébergeur.', 'img/exaltya/icons/heroku.png', 'image', 1),
(9, 3, 3, 'Créer un rpg sur discord', 'Ayant des amis fanatiques du roleplay, le bot qui était essentiellement prévu pour me familiariser avec le Javascript c\'est transfort en un projet de Rpg sur discord. Pour enregister les informations de chaque joueur, forcement il m\'a fallu une base de donné. J\'ai donc utilisé MongoBD pour cela. Mais le projet n\'est pas encore fini et il y a pu une nouvelle mise à jour de discord js a appliqué beaucoup de changements, je suis donc entrain de revoir tout mon code avant de la continuer, il détient une fonction musicale pour ceux qui aimeraient écouter de la musique pendant qu\'ils jouent.', 'img/exaltya/icons/jss.png', 'image', 1),
(10, 4, 1, '', '', '', '', 0),
(11, 4, 2, '', '', '', '', 0),
(12, 4, 3, '', '', '', '', 0),
(13, 5, 1, '', '', '', '', 0),
(14, 5, 2, '', '', '', '', 0),
(15, 5, 3, '', '', '', '', 0),
(16, 6, 1, '', '', '', '', 0),
(17, 6, 2, '', '', '', '', 0),
(18, 6, 3, '', '', '', '', 0),
(19, 7, 1, '', '', '', '', 0),
(20, 7, 2, '', '', '', '', 0),
(21, 7, 3, '', '', '', '', 0),
(22, 8, 1, '', '', '', '', 0),
(23, 8, 2, '', '', '', '', 0),
(24, 8, 3, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `img_link` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `subtitle` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `id_type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pages`
--

INSERT INTO `pages` (`id`, `title`, `img_link`, `description`, `subtitle`, `type`, `id_type`) VALUES
(1, ' Introduction à la programation en C', 'img/puissance_quatre/icons/Nicolas.png', 'Python & scientific developer, bash scripting, Linux systems administrator. Software & algorithms design, data processing, visualization, automation, tests, statistics, problems solving, debugging, code optimisation. Research engineer in remote sensing: satellite altimetry & imagery, geomatics.', 'Intervenant : Nicolas BERCHER', 'Commun', 2),
(2, ' PokeFus', 'img\\pokefus\\icons\\lprieu.jpg', '', 'PokeFus est un RPG solo, un savoureux mélange entre l\'univers du Krosmoz et celui de Pokémon.<br>Projet personnel de Lilian Prieu.', 'Lilian', 1),
(3, ' Exaltya', 'img\\exaltya\\icons\\gsimoes.jpg', '', 'Exaltya est un bot discord permettant de se lancer dans un petit Rpg grace à de simples commandes, il est donc accessible de n\'importe où tant que vous disposez d\'une connexion et facile d\'utilisation, ce projet est encore en cours de développement. Projet personnel de SIMOES Guillaume.', 'Guillaume', 1),
(4, 'Initiation à l\'algorithmique avec Python', '', '', '', 'Commun', 1),
(5, 'HTML / CSS / SEO', '', '', '', 'Lilian', 2),
(6, 'HTML / CSS / SEO', '', '', '', 'Guillaume', 2),
(7, 'Framework CSS & JavaScript', '', '', '', 'Commun', 3),
(8, 'PHP / MySQL', '', '', '', 'Commun', 4);

-- --------------------------------------------------------

--
-- Structure de la table `parallax`
--

DROP TABLE IF EXISTS `parallax`;
CREATE TABLE IF NOT EXISTS `parallax` (
  `parallax_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `parallax_link` varchar(255) NOT NULL,
  `idTypeParallax` int(11) NOT NULL,
  PRIMARY KEY (`parallax_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `parallax`
--

INSERT INTO `parallax` (`parallax_id`, `page_id`, `order`, `parallax_link`, `idTypeParallax`) VALUES
(1, 1, 1, 'img/puissance_quatre/parallax/top.jpg', 2),
(2, 1, 2, 'img/puissance_quatre/parallax/mid.jpg', 2),
(3, 1, 3, 'img/puissance_quatre/parallax/bot.png', 2),
(4, 2, 1, 'img/pokefus/parallax/top.jpg', 1),
(5, 2, 2, 'img/pokefus/parallax/mid.jpg', 1),
(6, 2, 3, 'img/pokefus/parallax/bot.jpg', 1),
(7, 3, 1, 'img/exaltya/parallax/top.jpg', 1),
(8, 3, 2, 'img/exaltya/parallax/mid.jpeg', 1),
(9, 3, 3, 'img/exaltya/parallax/bot.png', 1),
(10, 4, 1, '', 0),
(11, 4, 2, '', 0),
(12, 4, 3, '', 0),
(13, 5, 1, '', 0),
(14, 5, 2, '', 0),
(15, 5, 3, '', 0),
(16, 6, 1, '', 0),
(17, 6, 2, '', 0),
(18, 6, 3, '', 0),
(19, 7, 1, '', 0),
(20, 7, 2, '', 0),
(21, 7, 3, '', 0),
(22, 8, 1, '', 0),
(23, 8, 2, '', 0),
(24, 8, 3, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `admin`) VALUES
(2, 'hlmkj', 'katsutsani@gmail.com', 'd8a516749f173ca218a22443d3fedb46803b7630', 0),
(3, 'admin', 'campus@gmail.com', '1ecd9a1f5fb21b4b12347e14be3fc4027d5b61c1', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
