-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 30 Janvier 2017 à 08:27
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vnc`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `description` varchar(2550) DEFAULT NULL,
  `picture` varchar(45) DEFAULT NULL,
  `schema` varchar(45) DEFAULT NULL,
  `link` varchar(45) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `title`, `description`, `picture`, `schema`, `link`, `type_id`, `users_id`) VALUES
(56, 'Box Ego aio', 'Le modèle Ego Aio Box est une cigarette électronique simple, pratique, idéale pour une personne qui souhaite débuter la vape.Garantie sans fuite, avec une excellente résistance BF SS316 et une batterie intégrée de 2100 mah qui vous donnerons les sensations de vape que vous attendez d\'une cigarette électronique, la box Ego Aio Box c\'est l\'assurance d\'une vape sans prise de tête.', 'boxegoaio.jpg', 'boxegoaio_shema.jpg', 'https://youtu.be/S_mwaSJiH7I', 1, 1),
(57, 'Ego aio', 'Le kit eGo AIO est un nouveau concept adapté aux fumeurs qui souhaitent vaper avec une e-cigarette d\'une grande simplicité d\'usage et utilisable en toute occasion.L\'eGo AIO est une cigarette électronique "TOUT EN UN" qui comprend une batterie de 1500 mAh et un clearomizer, d\'une contenance de 2ml, munie d\'une protection anti-fuites pour le fond comme pour le CUBIS. Vous découvrirez donc un équipement innovant, puissant et très pratique. La partie clearomizer, indissociable de la batterie, est unique, dispose d\'une protection enfant comme les flacons d-e-liquide. Pour l\'ouvrir il suffit d\'exercer une pression sur son sommet et de dévisser la partie supérieure. Le réservoir possède une contenance de ml et son drip-tip a été pensé pour éviter les reflux de condensation grâce a une hélice placée a l\'intérieur.', 'egoaio.jpg', 'egoaio_shema.jpg', 'https://youtu.be/Gibcv2dh5XM', 1, 1),
(58, 'iStick Basic', 'Le kit iStick Basic de Eleaf est composé d\'un atomiseur GS Air 2 et d\'une batterie iStick d\'une capacité de 2300 mAh.  L\'iStick Basic est un modèle de vaporisateur électronique format box idéal pour les débutants qui désirent débuter avec du matériel performant et simple d\'utilisation. Son design aux formes arrondis offre une prise en main très agréable.  La batterie iStick a une capacité de 2300 mAh et est équipée d\'un tout système de connectique magnétique. Il n\'est plus nécessaire de visser votre atomiseur sur la batterie, il faut simplement le faire glisser dans le socle de l\'iStick.  Concernant son fonctionnement, rien de plus simple : le bouton principal sert a allumer la batterie, vapoter, et l\'eteindre. Aucun réglage n\'est a effectuer,plus la batterie sera chargée, plus elle délivrera une puissance importante. Elle se recharge grâce au câble micro-USB fourni.  L\'atomiseur GS Air 2 qui compose ce coffret a une contenance de 2ml et un diamètre de 14mm. Il dispose également d\'un système airflow pour un tirage serré ou bien un tirage plus aérien pour une vapeur plus dense.  Le GS Air 2 est livré avec des résistances 0.75 Ohm mais il est également possible d\'utiliser les résistances GS Air Pure Cotton 1.2 ohm. Il est également livré un adaptateur 510 et eGo pour pouvoir le visser sur n\'importe quelle batterie équipée de ce type de pas de vis.', 'istickbasic.jpg', 'istickbasic_shema.jpg', 'https://youtu.be/GVMQE9vJ8-I', 1, 1),
(59, 'Kit Target Mini', 'Découvrez le tout nouveau kit box électronique de Vaporesso, le Target Mini.  Composé d\'une petite box électronique Target Mini de 40W et d\'un clearomiseur Guardian de 2ml avec protection anti fuites et remplissage par le haut, il ravira aussi bien les vapoteurs débutants qu\'expérimentés.  Ce petit kit ultra simple mais puissant vous etonnera par ses capacités et sa qualité de vape. Un indispensable !', 'kittargetmini.jpg', 'kittargetmini_shema.jpg', 'https://youtu.be/IR_TBve5VGM', 1, 1),
(60, 'Kit G-priv', 'Le kit G-PRIV TFV8 Big Baby Smok est un kit de cigarette électronique composé d\'une box à écran tactile G-PRIV 220W Smok ainsi que d\'un clearomiseur hautes performances TFV8 Big Baby Smok. Un kit très innovant et performant de dernère génération ! Alimentée par 2 accus 18650 (non fournis) la box G-PRIV développe une puissance de 220W et propose le contrôle de température (Ni / Ti / SS) ainsi que le mode TCR.  Le kit de cigarette électronique SMOK G-PRIV TFV8 est livré sans accus. Nous vous conseillons d\'utiliser des accus avec plus de 25A de décharge continue.', 'kitgpriv.jpg', 'kitgpriv_schema.jpg', '', 2, 1),
(61, 'Kit iStick 40W', 'Le kit GS Tank du fabriquant ELEAF est un clearomiseur polyvalent de 22 mm de diamètre, doté d\'un réservoir en pyrex de 3 ml et d\'un airflow (flux d\'air réglable). Il est livré avec 2 résistances en Nickel de 0.15 ohm conçues spécialement pour fonctionner en mode contrôle de température. Cette fonction permet de régler la température de chauffe de la résistance et aide à la conservation de la mèche , pour ne pas la brûler.', 'istick40.jpg', 'istick40_schema.jpg', 'https://www.youtube.com/watch?v=GSoKpHV7jew', 2, 1),
(62, 'Kit iStick Powernano', 'Version miniature de la iPower, le kit iStick Power Nano est une cigarette électronique complète, offrant des performances et des fonctionnalités avancées dans un format très peu encombrant.  Combinant une box à accumulateur intégré de 1100 mAh avec un réservoir 2ml, l\'ensemble propose plusieurs styles de vape pour un rendu souple et adaptable selon vos envies. Le système est capable d\'atteindre une puisssance de 40W (redoutable pour sa taille) et permet d\'apprécier de beaux nuages de vapeur ou, au contraire, d\'adopter un style discret.  Comme a l\'accoutumée chez Eleaf, la iPower Nano a été pensée pour une prise en main très intuitive. Ce modèle se paramètre donc en toute simplicité et s\'adresse aux vapoteurs de tous niveaux.', 'istickpowernano.jpg', 'istickpowernano_schema.png', 'https://www.youtube.com/watch?v=VTdNcA34_zw', 2, 1),
(63, 'Kit Target Pro', 'Kit Target PRO VTC est un système complet comprenant une box Target PRO VTC et un clearomiseur Target PRO Tank. Un ensemble mis à jour avec une box plus fiable et un clearomiseur Target PRO Tank doté d\'un remplissage plus facile par le haut. La Box Target PRO propose désormais le contrôle de température compatible avec Ni, SS, Ti ainsi que le mode TCR.', 'kittargetpro.jpg', 'kittargetpro_shema.PNG', 'https://www.youtube.com/watch?v=3Var2BfGWzU', 2, 1),
(64, 'Kit Box Alien 220', 'Smoktech présente son kit subhom Alien 220 composé de la box Alien 220 et du clearomiseur TFV8 Baby Tank dans un package très complet. L e kit Alien 220 est conçu pour une vape performante et orienté vapeur. La box Alien 220 est un concentré de high-tech à double accus et une puissance de 220W. Le clearomiseur TFV8 Baby quand a lui embarque les résistances V8 Baby Q2 Core et T8 Core pour des valeurs respectives de 0.4 et 0.15 ohm. Un kit plug & play prêt a vaper dernière génération et subhom.', 'kitboxalien.png', 'kitboxalien_shema.png', 'https://youtu.be/LSudnCs89pk', 3, 1),
(65, 'ljoy RDTA BOX 200W', 'La ljoy RDTA BOX 200W est un mélange de box Bottom Feeder et de mod tout-en-un. Le mod ljoy RDTA BOX 200W est un mod a double accus 18650 doté d\'un réservoir pouvant contenir 12.8ml de e-liquide. Elle est associée à un dripper très polyvalent puisqu\'il peut être installé avec les nombreux plateaux de montage IMC de ljoy. Si vous ne souhaitez pas faire de montages, le mod ljoy RDTA BOX 200W est aussi compatible avec la résistance IMC-Coil de ljoy. La ljoy RDTA BOX 200W est surprenante, faite pour une vape puissante, avec une énorme autonomie.', 'boxijoy.png', 'boxijoy_schema.jpg', 'https://youtu.be/k_Ev3S5EVL0', 3, 1),
(66, 'Kit Drop Box 2', 'Le kit Bottom-Feeder de Kangertech revient avec la Dropbox 2. Le kit est composé d\'un dripper, le Subrip 2, et du mod Dripbox 2qui dispose désormais d\'une puissance de 80W et d\'un contrôle de température pour les fils en Ni200, Titane et Stainless Steel. Redessinée pour améliorer son ergonomie, la dripbox 2 est dotée de son flacon souple pouvant contenir jusqu\'a 7 ml de e-liquide pour "squonker" et vapoter pendant des heures.', 'kitdropbox2.jpg', 'kitdropbox2_schema.jpg', 'https://youtu.be/22RovWE8YbE', 3, 1),
(67, 'Kit Pico Squeeze', 'Le kit G Priv TFV8 Big Baby associe puissance et technologie. Ce kit comprend la box à écran tactile G Priv d\'une puissance de 220W poussée par 2 accus 18650 en série (non fournis). La box est associée au dernier clearomiseur "Cloud Beast" de Smoktech : le TFV8 Big Baby. Ce set-up fait pour la production de vapeur n\'oublie pas les saveurs des e-liquides grâce aux excellentes résistances V8 Baby Core. Un kit complet,exceptionnel et spécial subohm.', 'pikosqueeze.jpg', 'pikosqueeze_schema.jpg', 'https://youtu.be/3UcX59biIJs', 3, 1),
(68, 'A&L Menthe Extra-glaciale V2', 'La Menthe Extra Glaciale V2 par A&L reproduit au mieux le goût du sirop de menthe glaciale.  Vous aurez ainsi l\'impression de vous servir un grand verre de cette boisson à déguster à la paille ou à grandes gorgées pour étancher votre soif en été comme en hiver !  La Menthe Extra Glaciale V2 est un arôme de qualité alimentaire fabriqué en laboratoire avec les normes sanitaires les plus strictes, et il est proposé en fioles de type PET de 10ml avec compte-gouttes.  Vous le doserez à partir de 17 gouttes pour 10ml de base 50/50 pour faire du e-liquide pour cigarettes électroniques, et le laisserez reposer 24 à 48h pour obtenir un rendu optimal.', 'arome-menthe-extra-glaciale-v2.jpg', '', '', 4, 1),
(69, 'Crazy', 'La saveur du liquide Crazy Frost - Crazy par Savourea est follement rafraîchissante.   Avec un hit parfait et un volume de vapeur garantie grâce à sa base en 40/60 PG/VG, ce liquide mentholé vous procurera une ascension rapide vers les sommets. Frais, Frais, et Fort en bouche !  Flacon 10ml disponible en 3, 6 et 12mg de nicotine.', 'crazy.jpg', '', '', 4, 1),
(70, 'Dlice Classic Menthe', 'Eliquide D\'lice CLASSIC MENTHE, Le doux mélange de la force du Classic blond et du rafraîchissement de la menthe. Un e-liquide incontournable. Les e-liquides D\'lice sont conditionnés en flacon PET de 10 ml avec bouchon sécurité enfant et verseur compte-goutte. Composition en PG/VG : 80%/20%. ', 'classicment.jpg', '', '', 4, 1),
(71, 'Kiss Full', 'Mettez les moufles avec ce e-liquide qui vous procure une vraie sensation de fraîcheur. Un bon hit renforcé par l’effet glacial du goût en bouche. Composition : Oliquide vous propose un e-liquide LIquidéo de fabrication française, composé de glycérine végétale (30%), de propylène de glycol (70%), d’arômes alimentaires naturels, alcool et d\'eau. Garanti sans diacétyle, sans parabène et sans ambrox. E-liquide compatible avec tout type d’atomiseurs.', 'kiss.jpeg', '', '', 4, 1),
(72, 'Menthe Glaciale', ' Le eliquide Menthe Glaciale d\'Alfaliquid porte bien son nom, il vous procurera une sensation de fraicheur intense, vraiment glaciale accompagné d\'un goût de menthe fraiche. Le Menthe Glaciale est composé de 75% de PG et de 25% de VG et proposé en 0mg, 6mg, 11mg et 16mg/ml et vendu en flacon sécurisé avec compte goutte d\'une contenance de 10ml.', 'glaciale.jpg', '', '', 4, 1),
(73, 'FR-M', 'FR-M d\'Alfaliquid propose un mélange de tabac blond qui n\'est pas sans rappeler certaines cigarettes bien connues dans leur paquet rouge et blanc.\r\nLes e.liquides d\'alfaliquid sont composés de : propylène glycol (80%), glycérine végétal (<20%), éthanol (- de 2%), d\'eau (- de 3%) et de nicotine. Ils sont garantis sans Diacétyle, Parabène ni Ambrox.', 'marlboro.jpg', '', '', 5, 1),
(74, 'Le Classic', 'E-liquide Le Classic de The Fuu un tabac Simple et sec, ce e-liquide tabac est parfait pour celles et ceux qui veulent se lancer dans la vapote. Il rappelle fidèlement les arômes des cigarettes blondes. Très neutre au premier abord, il surprend par sa simplicité et sa franchise puis il séduit par sa subtilité. Une de nos meilleures ventes. Base du e-liquide 10ml - The Fuu composée de : 60% : Propylène Glycol 40% : Glycérine Végétale et de l\'Eau.', 'fuu.jpg', '', '', 5, 1),
(75, 'Le Gainsbar', 'Souvenez vous du paquet à peine ouvert,  approchez votre nez, fermez les yeux, prenez une grande inspiration…  ça y est, vous y êtes !!  Une potion pour ceux qui veulent retrouver ce goût authentique.  Le meilleur de la gamme aux yeux du patron.  A VAPER COMME BONNIE AND CLYDE  Propylène Glycol 70% pharmaceutique Français Glycérine végétale 30 % pharmaceutique Française Arômes alimentaires Européen Dosage de nicotine : 0, 6, 11, 16 mg USP', 'gainsbar.jpg', '', '', 5, 1),
(76, 'Le Gaulois', 'Appréciez les délicates notes fruitées et fleuries de ce Classic brun et sec, une réussite ! Si vous appréciez les arômes Classic, alors ruez-vous sur cet e-liquide pas cher, tant qu’il en reste encore ! En effet, une rupture de stock est toujours possible, tant il suscite l’engouement des possesseurs de cigarette électronique… Bonne vape !  Fiole de 10 ml, Base : 60 % de propylène glycol et 40 % de glycérine végétale, e-Liquide sans alcool et garanti sans diacétyl, sans ambrox et sans paraben. Taux de nicotine disponibles : 0 mg, 6 mg, 12 mg ou 18 mg, Fabriqué en France. Compatible avec tous les types de e-cigarette.', 'gauloise.jpg', '', '', 5, 1),
(77, 'Le Gitan', 'e-Liquide saveur tabac brun, Le Gitan de chez Savourea ravira les amateurs de ce type de saveur ; à noter qu\'il est légèrement sucré et qu\'il pourra très bien convenir aux vapoteurs utilisant des tabacs blond légèrement sucrés et qui recherchent une saveur plus corsé.  Note dominante : tabac brun, PG 50 % / VG 50 %, Fiole de 10 ml, e-Liquide sans alcool, Compatible avec tous les types de cigarette électronique, Fabriqué en France par Savourea.', 'gitan.jpg', '', '', 5, 1),
(78, 'Bubble-Gum', 'E-liquide goût bubble gum.\r\nUne subtile saveur de chewing-gum comme les distributeurs de notre enfance a vapoter.\r\nFlacon avec bouchon sécurité enfant.\r\n\r\nDe nombreux dosages de nicotine sont disponibles :\r\n0 mg/ml, 6 mg/ml, 11 mg/ml, 17 mg/ml.\r\nComposition de nos e-liquides:\r\nPropylène Glycol (<75%)\r\nGlycérine Végétale bio (<20%)\r\nAlcool (<1%)\r\nAromes alimentaires (<5%).', 'Bubble.PNG', '', '', 6, 1),
(79, 'La femme a barbe', 'Pour les amateurs de saveurs gourmandes, un e-liquide avec des notes festives de barbe à papa et de guimauve qui se mêlent avec harmonie agrémenté d\'une pointe de violette.  Flacon en verre de 20ml avec pipette intégrée  Proportion de la base : 50% PG, 50% VG.  Disponible en 0mg, 3mg, 6mg et 12mg  E-liquide fabriqué en France', 'femme.jpg', '', '', 6, 1),
(80, 'Hustle Grape', 'Bonbon acidulé au raisin qui ne rigole pas. Le e-liquide Hustle Grape de The Fuu , Sucré, très US dans son approche avec des notes de fruits rouges bien franches. Le citron vert relève le tout et le résultat est gangsta comme un chat des 80\'s tout de violet vétu !   Base du e-liquide Fuug Life 10ml - The Fuu composée de : 50% : Propylène Glycol 50% : Glycérine Végétale et de l\'Eau.', 'hustle.jpg', '', '', 6, 1),
(81, 'Le Nostromo', 'Le Nostromo, par  Le French Liquide est un e-liquide gourmand aux saveurs bien équilibrées qui vous propose une vanille custard avec des notes biscuitées et de discrètes framboises en fin de vape. Taux de nicotine disponibles : 0, 3, 6 et 11 mg/ml. Flacon de 3 x 10ml avec pipette intégrée. Flacon de 30 ml pour le 0 mg. Dosage en 50/50 de PG/VG Fabriqué en France par le laboratoire Lips. ', 'nostro.jpg', '', '', 6, 1),
(82, 'The French Butter Milk', 'Un grand bol de lait frais sucré, une noisette de beurre blond et une poignée de flocons d’avoine : voilà notre version d’un petit-déjeuner léger et énergique. Proche du traditionnel porridge écossais, Butter Milk c’est l’assurance de démarrer la journée du bon pied !  Fabriqué en France. Taux PG / VG : 20/80.', 'french.jpg', '', '', 6, 1),
(83, 'Absinthe Rouge', 'Le liquide Absinthe Rouge est une saveur d\'été, enivrez vous de cet élixir frais et mentholé, à consommer sans modération !  Flacon de 10ml avec compte-goutte.  Base du e-liquide Authentik Cirkus composée de :  50% : Propylène Glycol de qualité PE (Pharmacopée Européenne) 50% : Glycérine Végétale de qualité PE (Pharmacopée Européenne) Arômes alimentaires naturels et de synthèse, tous produits en France selon les exigences du cahier des charges VDLV. Ils ne contiennent ni sucre, ni huile, ni diacétyle, ni gomme, ni substances OGM, ni aucune des substances aromatiques allergènes soumises à une obligation de déclaration Eau ultra-pure (Milli-Q) Alcool (support des arômes naturels), Éventuellement de la nicotine liquide pure, de qualité USP, extraite de capes de classic. Celle-ci est régulièrement analysée en pureté et en concentration grâce à différents moyens d\'analyses (chromatographie HPLC et gaz / spectromètre de masse), et comparée à des étalons fournis par des laboratoires accrédités.', 'absinthe.jpg', '', '', 7, 1),
(84, 'El-Loco', 'El Loco ... c\'est juste une explosion de fruits ! Un mélange de Fraise, de Framboise, d\'Ananas de Cola avec une pointe de Menthe. Avec El Loco, vous avez les 5 fruits par jour ! Saveur : Ananas, framboise, fraise, cola, feuilles de menthe Tenue en bouche : Parfaite Nez : Fraise Notes : Notes magiques et fruitées Force :? 4/5 Hit : 4/5 Vapeur : 4/5 Produit garanti sans Diacétyle, Parabène ni Ambrox. Dosage en nicotine : 6 mg - 12 mg - 18 mg', 'elloco.jpg', '', '', 7, 1),
(85, 'Fruits Rouges', 'Le e-liquide pour cigarette électronique Fruits Rouges d\'Alfaliquid vous offre un véritable cocktail de fruits rouges pour une explosion de saveurs !  Dosage nicotine disponible en 0mg, 6mg, 11mg, 16mg et 19,6mg/ml. Proportion de la base : 76% PG, 24% VG. Flacon pipette de 10ml avec bouchon sécurité enfant.  Les e-liquides Alfaliquid sont fabriqués en France et sont à base d\'arômes alimentaires.', 'fruitsrouges.jpg', '', '', 7, 1),
(86, 'Noix De Coco', 'Caractéristiques :  Saveur : Noix de coco Proportion PG/VG : 60/40 Eau ultra pure (Mili-Q), Alcool (support des arômes naturels) Contenance : 10ml Garantie sans diacétyl, sans parabène, sans ambrox. Flacon Pet easy fill et sécurité enfant Provenance : France Marque : Vincent Dans Les Vapes', 'coco.jpg', '', '', 7, 1),
(87, 'Voyageur', 'La saveur du e-liquide Voyageur de la gamme Premium - Bordo2 est, comme son nom l\'indique, une invitation au voyage.  Pour faire de cette aventure un moment inoubliable, Bordo2 a associé de façon très originale la Pomme, le Cactus, le Kiwi et le Cassis.  Flacon en verre de 20ml avec pipette intégrée.  Disponible en 0, 3, 6 et 11 mg de nicotine.', 'voyageur.jpg', '', '', 7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `author` varchar(45) NOT NULL,
  `content` text,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `article_id` int(11) DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'ecig_debutant'),
(2, 'ecig_intermediaire'),
(3, 'ecig_expert'),
(4, 'eliquid_menthol'),
(5, 'eliquid_tabac'),
(6, 'eliquid_gourmand'),
(7, 'eliquid_fruit');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(10) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'tokjiji', 'u_hguyhuyhççu', '48748854894', 'user'),
(2, 'tontonyolo', 'tontonyolo@gmail.com', '$2y$10$yLY.1iWHg86wg2ix0qL0.uGqgHJvISNqfwQgzfBQ76o5/BYHej.xe', 'user'),
(3, 'popo', 'popo@popo.con', '$2y$10$YKSF9FtqjlKgxLC.ZEB/GupznMeDzTWvsivqg2NmfB1/I/AFAH9Mu', 'admin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`,`type_id`,`users_id`),
  ADD KEY `fk_article_type1_idx` (`type_id`),
  ADD KEY `fk_article_users1_idx` (`users_id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`,`users_id`),
  ADD KEY `fk_comment_users1_idx` (`users_id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_type1` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_article_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
