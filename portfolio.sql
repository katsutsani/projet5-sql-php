-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 30 nov. 2021 à 11:40
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
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`avis_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`avis_id`, `page_id`, `title`, `description`, `logo`) VALUES
(1, 1, 'Découverte d\'outils de travail', 'C\'est toujours un plaisir d\'apprendre de nouveau langage de programmation même si nous faisons facilement des erreurs, on apprend à ne plus les refaires. Mais c\'est encore plus plaisant lorsque qu\'on apprend en même temps de nouveaux outils de travail comme ça était le cas pour ce projet avec la découverte du C, de l\'éditeur emacs mais aussi de trello pour partager les taches et de github pour mettre le travail en commun.', '<i class=\"small material-icons\">thumbs_up_down</i>'),
(2, 1, 'Organisation du travail', 'Pour pouvoir bien avancer, il faut bien organiser le travail et ce projet nous à bien aider pour apprendre comment s\'organiser grace à trello pour partager les taches à faire mais aussi grace à github qui nous permettait de mettre à jour nos fichiers facilement quand une modification était apportée.', '<i class=\"small material-icons\">flash_on</i>'),
(3, 2, 'Organiser son travail', 'Des milliers d\'outils sont disponibles gratuitement. Nous avons choisi Unity comme moteur de jeux, Git et GitHub pour travailler en même temps sur le même projet et Trello pour se répartir le travail.', '<i class=\"small material-icons\">lightbulb_outline</i>'),
(4, 2, 'Appréhender les erreurs', 'Dès que nous avons commencé le projet nous avons fait face à une multitude de problèmes. Pour les résoudre nous avons demandé de l\'aide, cherché par nous-mêmes, discuté entre nous des décisions à prendre.', '<i class=\"small material-icons\">highlight_off</i>'),
(5, 2, 'Atteindre son objectif', 'Il y a-t-il meilleure récompense que la satisfaction personnelle ? Se dépasser, aller plus loin, se tromper, recommencer; comme dirait Elon Musk, il n\'y a pas meilleure réussite que l\'échec.', '<i class=\"small material-icons\">directions_run</i>'),
(6, 3, 'Développer ses connaissances', 'Selon moi, il est toujours bon de toujours chercher à développer ses connaissances et ses projets mon été très utile pour cela car avant de le commencer je n\'avais jamais fait de Javascript et je n\'avais jamais utilisé github ou encore héroku.', '<i class=\"small material-icons\">plus_one</i>'),
(7, 3, 'Développer pour aider', 'En plus de vouloir développer mes connaissances se projet aussi pourra simplifier la façon de s\'amuser de plusieurs personnes. Après tout qui ne voudrait pas d\'un petit Rpg qui demande seulement une connexion internet, même pas besoin d\'avoir un puissant appareil, il suffit juste de pouvoir installer discord.', '<i class=\"small material-icons\">accessibility</i>');

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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

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
(21, 3, 'parallax_bot', '<img src=\"img/exaltya/parallax/bot.jpg\" alt=\"parallax projet 3 Portfolio\">', 'parallax projet 3 Portfolio');

-- --------------------------------------------------------

--
-- Structure de la table `objectifs`
--

DROP TABLE IF EXISTS `objectifs`;
CREATE TABLE IF NOT EXISTS `objectifs` (
  `objectifs_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`objectifs_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `objectifs`
--

INSERT INTO `objectifs` (`objectifs_id`, `page_id`, `title`, `description`, `logo`) VALUES
(1, 1, 'Environnement linux', 'Lors de ce projet, l\'un des objectifs était de développer sur un environnement Linux. Pour se faire nous avons utilisé Debian. Au début le plus difficile était de se déplacer dans les fichiers car Debian n\'a pas d\'interface graphique et toute action se fait à partir de ligne de commande.', '<img src=\"img/puissance_quatre/icons/linux.png\" alt=\"icon projet 1 Portfolio\">'),
(2, 1, 'Github', 'Afin de travailler en groupe, ont nous à demander d\'utiliser git et github et de nous créer un environnement professionnel afin de stocker notre travail et de pouvoir se mettre à jour lorsque l\'un de nous faisait une modification.', '<img src=\"img/puissance_quatre/icons/github.png\" alt=\"icon projet 1 Portfolio\">'),
(3, 1, 'Puissance 4', 'Pour la partie programmation, le projet consistait à faire une puissance 4 pour ce faire, il nous à falloir un éditeur de texte type Emacs puis il nous a fallu utiliser Gcc afin de compiler notre code pour pouvoir le lancer.', '<img src=\"img/puissance_quatre/icons/manette.png\" alt=\"icon projet 1 Portfolio\">'),
(4, 2, 'Savoir se ré-inventer', 'En tant que fanatique de l\'Univers du Krosmoz, j\'ai créé un projet hybride, mêlant gameplay / style graphique à la Pokémon et plongent dans l\'histoire des Dofus. Le gameplay s\'articule autour de défis, combats au tour par tour, et quêtes épiques.', '<i class=\"small material-icons\">import_contacts</i>'),
(5, 2, 'Cibler un public large', 'Ce jeu a pour objectif d\'être adapté à tous les types de joueurs, du casual au hardore gamer en passant par l\'intermédiaire. Le jeu est divisé en 3 phases non explicites à la vue des joueurs, correspondant à un niveau de difficulté croissant.', '<i class=\"small material-icons\">groupe</i>'),
(6, 2, 'Un modèle économique solide', 'Le marché du jeu vidéo est en constante évolution, le modèle économique d\'un jeu est très important, il peut aussi définir sa durée de vie mais surtout ça rentabilité. L\'aire des jeux matériels, par abonnement etc. est révolue, c\'est pourquoi nous avons fait le choix du gacha.', '<i class=\"small material-icons\">show_chart</i>'),
(7, 3, 'Créer un bot discord', 'Dans un premier temps l\'objectif de ce projet était de se familiariser avec le Javascript passant beaucoup de temps sur discord, quoi de mieux que de se faire un bot discord personnalisé. J\'ai relevé le défi et je me suis lancé.', '<img src=\"img/exaltya/icons/djs.png\" alt=\"icon projet 3 Portfolio\">'),
(8, 3, 'Disponibility 24h/24 et 7j/7', 'Pour avoir un vrai bot, il est mieux qu\'il soit connecté 24h/24 et 7j/7 alors j\'ai fait beaucoup de recherches pour trouver des hébergeurs gratuits et j\'ai fini par trouver Heroku. J\'ai alors commencé à utiliser git pour pouvoir mettre mon bot sur l\'hébergeur.', '<img src=\"img/exaltya/icons/heroku.png\" alt=\"icon projet 3 Portfolio\">'),
(9, 3, 'Créer un rpg sur discord', 'Ayant des amis fanatiques du roleplay, le bot qui était essentiellement prévu pour me familiariser avec le Javascript c\'est transfort en un projet de Rpg sur discord. Pour enregister les informations de chaque joueur, forcement il m\'a fallu une base de donné. J\'ai donc utilisé MongoBD pour cela. Mais le projet n\'est pas encore fini et il y a pu une nouvelle mise à jour de discord js a appliqué beaucoup de changements, je suis donc entrain de revoir tout mon code avant de la continuer, il détient une fonction musicale pour ceux qui aimeraient écouter de la musique pendant qu\'ils jouent.', '<img src=\"img/exaltya/icons/jss.png\" alt=\"icon projet 3 Portfolio\">');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pages`
--

INSERT INTO `pages` (`id`, `title`, `img_link`, `description`, `subtitle`) VALUES
(1, ' Introduction à la programation en C', 'img/puissance_quatre/icons/Nicolas.png', 'Python & scientific developer, bash scripting, Linux systems administrator. Software & algorithms design, data processing, visualization, automation, tests, statistics, problems solving, debugging, code optimisation. Research engineer in remote sensing: satellite altimetry & imagery, geomatics.', 'Intervenant : Nicolas BERCHER'),
(2, ' PokeFus', '', '', 'PokeFus est un RPG solo, un savoureux mélange entre l\'univers du Krosmoz et celui de Pokémon.<br>Projet personnel de Lilian Prieu.'),
(3, ' Exaltya', '', '', 'Exaltya est un bot discord permettant de se lancer dans un petit Rpg grace à de simples commandes, il est donc accessible de n\'importe où tant que vous disposez d\'une connexion et facile d\'utilisation, ce projet est encore en cours de développement. Projet personnel de SIMOES Guillaume.');

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
