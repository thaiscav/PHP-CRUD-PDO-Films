-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 06 Juillet 2017 à 21:23
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdfilms`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `code_categ` int(11) NOT NULL,
  `description` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`code_categ`, `description`) VALUES
(1, 'Action'),
(2, 'Drame et répertoire'),
(3, 'Comédie'),
(4, 'Horreur'),
(5, 'Suspense'),
(6, 'Pour la famile'),
(7, 'Science'),
(8, 'Jeuesse');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `code_commandes` int(11) NOT NULL,
  `code_util` int(11) NOT NULL,
  `code_film` int(11) NOT NULL,
  `date_commande` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `code_film` int(11) NOT NULL,
  `titre` varchar(30) DEFAULT NULL,
  `realisateur` varchar(30) DEFAULT NULL,
  `description` text,
  `code_categ` int(11) NOT NULL,
  `duree` int(11) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `preview` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `films`
--

INSERT INTO `films` (`code_film`, `titre`, `realisateur`, `description`, `code_categ`, `duree`, `prix`, `image`, `preview`) VALUES
(1, 'Deepwater horizon', 'BERG PETER', 'Mike Williams est électricien sur la plateforme Deepwater Horizon dans le golfe du Mexique. Lorsque la société locataire de la plateforme décide, contre l’avis des techniciens, de la déplacer, ils sont loin de se douter que 5 millions de barils sous leurs pieds sont prêts à exploser. Le courage de Mike et ses collègues suffira-t-il à limiter les dégâts et sauver ce qui peut encore l’être?', 2, 180, 12.95, 'images/1.jpg', 'https://youtu.be/2lECxLMIuLk'),
(2, 'Accountant (the)', 'O\'CONNOR GAVIN', 'Christian Wolff est plus à l’aise avec les chiffres qu’avec les gens. Sous l’anonymat d’un bureau d’experts-comptables, il travaille pour de dangereuses organisations criminelles. Lorsque le département du Trésor américain s’intéresse de trop près à lui, Christian fait diversion en s’occupant d’un client légitime. Mais tandis que Christian épluche les comptes de l’entreprise, les morts s’accumulent.', 1, 120, 12.95, 'images/2.jpg', 'https://youtu.be/2lECxLMIuLk'),
(4, 'Intouchables', 'Nakache, Olivier/ Toledano, Ér', 'À la suite d\'un accident de parapente, Philippe, riche aristocrate, engage comme aide à domicile Driss, un jeune de banlieue tout juste sorti de prison. Bref, la personne la moins adaptée pour l\'emploi. Ensemble, ils vont faire cohabiter Vivaldi et Earth Wind and Fire, l\'éloquence et la moquerie, les complets et les pantalons de survêtement... Deux univers vont s\'enchevêtrer, s\'apprivoiser, pour donner naissance à une amitié aussi dingue, drôle et forte qu\'inattendue, une relation unique qui fera des étincelles et qui les rendra... Intouchables.', 2, 190, 6.99, 'images/4.jpg', 'https://youtu.be/2lECxLMIuLk'),
(5, 'Longest ride', 'Tillman Jr., George', 'Lorsque Luke, un ancien champion de rodéo, rencontre Sophia, une universitaire sur le point de décrocher un emploi de rêve à New York, ils entreprennent un périple sentimental aussi extraordinaire qu\'incertain. Tandis que leurs aspirations personnelles incompatibles mettent leur relation naissante à l\'épreuve, Luke et Sophia rencontrent Ira, un vieil homme dont les souvenirs de son propre mariage pousseront les jeunes amoureux à se remettre en question et à changer leur existence à jamais.', 2, 210, 6.99, 'images/5.jpg', 'https://youtu.be/2lECxLMIuLk'),
(6, 'Whiplash', 'Chazelle, Damien', 'Andrew, 19 ans, rêve de devenir l\'un des meilleurs batteurs de jazz de sa génération. Mais la concurrence est rude au conservatoire de Manhattan où il s\'entraîne avec acharnement. Il a pour objectif d\'intégrer le fleuron des orchestres dirigé par Terence Fletcher, professeur féroce et intraitable. Lorsque celui-ci le repère enfin, Andrew se lance, sous sa direction, dans la quête de l\'excellence.', 2, 180, 6.99, 'images/6.jpg', 'https://youtu.be/2lECxLMIuLk'),
(7, '9 le film', 'DIVERS', 'Un homme dont la petite amie vient tout juste de mourir, une jeune femme qui s\'est récemment évertuée à convaincre une ancienne connaissance rencontrée lors d\'une fête qu\'elles ont déjà été des amies très proches et un homme hautain, qui a magasiné des appareils électroniques en insultant au passage le vendeur, assistent tous à la conférence de Marc Gauthier. Celui-ci, prétendu gourou de la communication, propose une nouvelle approche afin d\'améliorer les relations entre les êtres humains. Mais, comme s\'en rendront compte ces participants, il y aura toujours un décalage important entre la théorie et la pratique. ', 7, 180, 17.99, 'images/7.jpg', 'https://youtu.be/2lECxLMIuLk'),
(8, 'Jason bourne', 'GREENGRASS PAUL', 'La traque de Jason Bourne par les services secrets américains se poursuit. Des Îles Canaries à Londres en passant par Las Vegas...', 1, 160, 12.95, 'images/8.jpg', 'https://youtu.be/2lECxLMIuLk'),
(9, 'Petit prince (le)', 'OSBORNE MARK', 'N/A', 8, 120, 12.95, 'images/9.jpg', 'https://youtu.be/2lECxLMIuLk'),
(10, 'Downfall (la chute)', 'Hirschbiegel, Oliver', 'Qualifié de « dramatique, fidèle et poignant » par le San Francisco Chronicle et en nomination pour l\'Oscar du Meilleur film étranger, LA CHUTE vous fait pénétrer dans le bunker d\'Hitler pendant les derniers jours terribles et déchirants du IIIe Reich. À travers les yeux de Traudi Yunge, la célèbre secrétaire de Hitler, nous assistons à l\'écroulement de l\'optimisme devant le constat indéniable que la défaite de l\'Allemagne est devenue inévitable. Tandis que l\'armée russe encercle Berlin, les salles faiblement éclairées du refuge souterrain deviennent un lieu de mise à mort pour le führer et ses plus proches conseillers.', 2, 180, 6.99, 'images/10.jpg', 'https://youtu.be/2lECxLMIuLk'),
(11, '12 years a slave', 'Mcqueen, Steve', 'Les États-Unis, quelques années avant la guerre de Sécession. Solomon Northup, jeune homme noir originaire de l\'État de New York, est enlevé et vendu comme esclave. Face à la cruauté d\'un propriétaire de plantation de coton, Solomon se bat pour rester en vie et garder sa dignité. Douze ans plus tard, il va croiser un abolitionniste canadien et cette rencontre va changer sa vie... Basé sur une histoire vraie.', 2, 160, 6.99, 'images/11.jpg', 'https://youtu.be/2lECxLMIuLk'),
(12, 'Suicide squad', 'AYER DAVID', 'C\'est tellement jouissif d\'être un salopard! Face à une menace aussi énigmatique qu\'invincible, l\'agent secret Amanda Waller réunit une armada de crapules de la pire espèce. Armés jusqu\'aux dents par le gouvernement, ces super-méchants entreprennent alors une mission-suicide. Jusqu\'au moment où ils comprennent qu\'ils ont été sacrifiés. Accepteront-ils leur sort ou se rebelleront-ils?', 1, 180, 12.95, 'images/12.jpg', 'https://youtu.be/2lECxLMIuLk'),
(13, 'Eat pray love (mange prie aime', 'Murphy, Ryan', 'À la croisée des chemins après un divorce, Liz Gilbert décide de prendre une année sabbatique loin de son travail et, pour une très rare fois, s\'éloigne de sa zone de confort, risquant tout ce qu\'elle a pour changer de vie. Lors de ses merveilleux et exotiques voyages, Liz Gilbert découvre le plaisir tout simple de bien manger en Italie, le pouvoir de la prière en Inde et, de façon inattendue, la paix intérieure ainsi que l\'amour à Bali.', 2, 160, 6.99, 'images/13.jpg', 'https://youtu.be/2lECxLMIuLk'),
(14, 'Piano,the(1993)', 'Campion, Jane', 'Au siècle dernier en Nouvelle-Zélande, Ada, mère d\'une fillette de neuf ans, s\'apprète à suivre son nouveau mari au fin fond du bush. Il accepte de transporter tous ses meubles à l\'exception d\'un piano qui échoue chez un voisin illettré. Ne pouvant supporter cette perte, Ada accepte le marché que lui propose ce dernier. Regagner son piano touche par touche en se soumettant à ses fantaisies.', 2, 180, 6.99, 'images/14.jpg', 'https://youtu.be/2lECxLMIuLk'),
(15, 'Secret life of pets (the)', 'CHENEY YARROW RENAUD CHRIS', 'Que font vos animaux de compagnie quand vous n\'êtes pas à la maison? Lorsque leurs maîtres quittent le domicile pour la journée, des animaux de compagnie papotent avec leurs amis, satisfont leurs fringales et organisent des fêtes. Mais quand un terrier chouchouté et son nouveau « coloc » turbulent se perdent dans la jungle urbaine de New York, ils doivent mettre leurs différends de côté afin de survivre à leur dangereux périple pour rentrer à la maison.', 3, 90, 12.95, 'images/15.jpg', 'https://youtu.be/2lECxLMIuLk'),
(16, 'Jaws (3-movie collection)', 'Szwarc, Jeannot/Alves, Joe/Sar', 'Les dents de la mer : Deuxième partie. \n\r\n                        Les dents de la mer 3. \n\r\n                        Les dents de la mer : La revanche.', 5, 90, 15.99, 'images/16.jpg', 'https://youtu.be/2lECxLMIuLk'),
(17, 'Get out', 'PEELE JORDAN', 'Couple mixte, Chris et sa petite amie Rose filent le parfait amour. Le moment est donc venu de rencontrer la belle famille, Missy et Dean lors d\'un week-end sur leur domaine dans le nord de l\'État. Chris commence par penser que l\'atmosphère tendue est liée à leur différence de couleur de peau, mais très vite une série d\'incidents de plus en plus inquiétants lui permet de découvrir l\'inimaginable.', 4, 180, 22.99, 'images/17.jpg', 'https://youtu.be/2lECxLMIuLk'),
(18, 'Godfather (the) (3 movie colle', 'Coppola, Francis Ford', 'N/A', 2, 120, 12.95, 'images/18.jpg', 'https://youtu.be/2lECxLMIuLk'),
(19, 'Revenant (the)', 'Inarritu, Alejandro Gonzalez', 'N/A', 2, 140, 12.95, 'images/19.jpg', 'https://youtu.be/2lECxLMIuLk'),
(20, 'Impossible,the(2012)', 'Bayona, Juan Antonio', 'En vacances en Thaïlande pour célébrer la fête de Noël en famille, Maria, Henry et leurs trois enfants profitent pleinement du soleil et de la plage lorsque, soudainement, un événement tragique vient bouleverser leur vie. À leur insu, un gigantesque tremblement de terre à l\'autre bout de l\'océan déclenche un énorme tsunami. L\'un des désastres naturels les plus dévastateurs de la planète se dirige vers eux... Voici leur émouvante histoire.', 2, 120, 6.99, 'images/20.jpg', 'https://youtu.be/2lECxLMIuLk'),
(21, 'Gravity', 'Cuaron, Alfonso', 'Pour sa première expédition à bord d\'une navette spatiale, le docteur Ryan Stone accompagne l\'astronaute chevronné Matt Kowalsky. Mais cette banale sortie dans l\'espace se transforme en catastrophe. Lorsque la navette est pulvérisée, Stone et Kowalsky se retrouvent totalement seuls. Peu à peu, ils cèdent à la panique; à chaque respiration, leurs réserves d\'oxygène diminuent. Mais c\'est peut-être en s\'enfonçant plus loin encore dans l\'espace qu\'ils trouveront le moyen de rentrer sur Terre... l\'espace.', 5, 120, 6.99, 'images/21.jpg', 'https://youtu.be/2lECxLMIuLk'),
(22, 'Da vinci code (the)', 'Howard, Ron', 'Accompagnez l\'éminent spécialiste de l\'étude des symboles Robert Langdon et la cryptographe Sophie Neveu dans leur quête palpitante pour résoudre un meurtre étrange qui les mènera en France, en Angleterre et dans les coulisses d\'une mystérieuse organisation séculaire où ils découvriront un secret dissimulé depuis l\'époque du Christ.', 5, 120, 6.99, 'images/22.jpg', 'https://youtu.be/2lECxLMIuLk');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `code_util` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `courriel` varchar(30) DEFAULT NULL,
  `nomUtil` varchar(30) DEFAULT NULL,
  `mp` varchar(100) DEFAULT NULL,
  `avatar` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`code_util`, `nom`, `courriel`, `nomUtil`, `mp`, `avatar`) VALUES
(15, 'admin', 'admin@admin.ca', 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL),
(16, 'Test', 'test@test.ca', 'test', '098f6bcd4621d373cade4e832627b4f6', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`code_categ`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`code_commandes`),
  ADD KEY `code_util` (`code_util`),
  ADD KEY `code_film` (`code_film`);

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`code_film`),
  ADD KEY `code_categ` (`code_categ`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`code_util`),
  ADD UNIQUE KEY `nomUtil` (`nomUtil`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `code_categ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `code_commandes` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `code_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `code_util` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`code_util`) REFERENCES `utilisateurs` (`code_util`) ON DELETE CASCADE,
  ADD CONSTRAINT `commandes_ibfk_2` FOREIGN KEY (`code_film`) REFERENCES `films` (`code_film`) ON DELETE CASCADE;

--
-- Contraintes pour la table `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `films_ibfk_1` FOREIGN KEY (`code_categ`) REFERENCES `categories` (`code_categ`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
