-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 22 mai 2024 à 14:54
-- Version du serveur : 10.6.17-MariaDB-cll-lve
-- Version de PHP : 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `autoplus_site`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

CREATE TABLE `actualites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL DEFAULT '',
  `partenaire_id` int(11) DEFAULT NULL,
  `vu` int(11) NOT NULL DEFAULT 0,
  `date_actualite` date DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `accueil` int(11) NOT NULL DEFAULT 0,
  `photos` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actualites`
--

INSERT INTO `actualites` (`id`, `title`, `content`, `partenaire_id`, `vu`, `date_actualite`, `deleted_at`, `created_at`, `updated_at`, `accueil`, `photos`) VALUES
(20, 'Roadshow : brembo', '<p>Autoplus a organis&eacute; un road-show en partenariat avec Brembo&nbsp;au profit de nos clients. Cet &eacute;v&egrave;nement avait pour but principal de transmettre les informations techniques, partage des savoir-faire et retour d&#39;exp&eacute;rience vis-&agrave;-vis des produits Brembo.&nbsp;&nbsp;</p>\r\n\r\n<p>Date de l&#39;&eacute;v&egrave;nement : 2017</p>\r\n\r\n<p>Itin&eacute;raire :&nbsp;</p>\r\n\r\n<p>Etape 1 : Tanger&nbsp;</p>\r\n\r\n<p>Etape 2 : Fes&nbsp;</p>\r\n\r\n<p>Etape 3 : Rabat&nbsp;</p>\r\n\r\n<p>Etape 4 : Marrakech&nbsp;</p>\r\n\r\n<p>Etape 5 : Casablanca</p>', 12, 2, '2017-08-01', NULL, '2020-11-18 13:12:24', '2022-04-28 12:48:14', 0, 0),
(21, 'Roadshow : KYB', '<p>Connu pour sa qualit&eacute; OEM et sa politique R&amp;D, KYB&nbsp;est dot&eacute; de l&rsquo;usine d&rsquo;amortisseurs le&nbsp;plus importante du monde.&nbsp;</p>\r\n\r\n<p>Autoplus, en partenariat avec KYB, a organis&eacute; un road-show pour se rapprocher et int&eacute;ragir avec son public cible.&nbsp;</p>\r\n\r\n<p>Date :&nbsp;</p>\r\n\r\n<p>Itin&eacute;raire :&nbsp;</p>', 37, 1, '2020-11-08', NULL, '2020-11-18 13:14:15', '2022-04-28 15:32:10', 0, 0),
(22, 'Roadshow : GALFER', '<p>L&#39;organisation de cet &eacute;v&egrave;nement a permis dans un premier temps &agrave; Galfer de recueillir un feedback aupr&egrave;s de son public cible et dans un deuxi&egrave;me temps, de renforcer son image &agrave; l&#39;&eacute;chelle nationale.&nbsp;</p>\r\n\r\n<p>Date : du 10 au 19 Avril 2017</p>\r\n\r\n<p><strong>Itin&eacute;raire :</strong></p>\r\n\r\n<p>Etape 1 : Agadir - Inzegane</p>\r\n\r\n<p>Etape 2 : Ouled Teima - Tiznit</p>\r\n\r\n<p>Etape 3 : Marrakech</p>\r\n\r\n<p>Etape 4 : Beni Mellal - Khouribga</p>\r\n\r\n<p>Etape 5 : Oujda</p>\r\n\r\n<p>Etape 6 : Berkane - Nadour&nbsp;</p>\r\n\r\n<p>Etape 7 : F&egrave;s</p>', 14, 1, '2020-11-16', NULL, '2020-11-18 13:23:09', '2022-04-29 13:14:18', 0, 0),
(23, 'Roadshow : NRF', '<p>NRF est un leader mondial&nbsp;dans la conception, la production et la distribution de produits d&rsquo;apr&egrave;s-vente pour les v&eacute;hicules l&eacute;gers et poids lourds.&nbsp;</p>\r\n\r\n<p>Pour assurer sa pr&eacute;sence Marketing et r&eacute;pondre aux attentes des clients, Autoplus a organis&eacute; un road-show en partenariat avec NRF.&nbsp;</p>\r\n\r\n<p><strong>Date : </strong>du 21 au 25 Ao&ucirc;t 2017</p>\r\n\r\n<p><strong>Itin&eacute;raire&nbsp;</strong>:</p>\r\n\r\n<p>Etape 1 : Agadir (Ait Melloul / Ouled Taima)&nbsp;</p>\r\n\r\n<p>Etape 2 : Marrakech&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />\r\nEtape 3 : El Jadida&nbsp;</p>\r\n\r\n<p>Etape 4 : Casa -centre&nbsp;/ Casa -nord&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>', 24, 0, '2020-11-16', NULL, '2020-11-20 21:02:06', '2022-04-29 14:45:03', 0, 0),
(24, 'Roadshow : VARTA', '<p>Dans le cadre de sa strat&eacute;gie Marketing, Autoplus a organis&eacute; un road-show, en partenariat avec VARTA Automotive, au profit de nos clients. Cet &eacute;v&egrave;nement avait pour but le partage des informations et savoir-faire technique ainsi que de tisser des liens relationnels entre VARTA et ses clients au Maroc.</p>\r\n\r\n<p><strong>Itin&eacute;raire&nbsp;:&nbsp;</strong></p>\r\n\r\n<p>Etape 1 : Agadir</p>\r\n\r\n<p>Etape 2 : Marrakech</p>\r\n\r\n<p>Etape 3 : Rabat</p>\r\n\r\n<p>Etape 4 : Tanger</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', 5, 0, '2016-01-04', NULL, '2021-01-12 09:06:40', '2022-04-28 12:57:31', 0, 0),
(25, 'Tester', 'Testing carjsg', 24, 0, '2016-11-11', '2021-01-22 13:14:05', '2021-01-22 13:11:12', '2021-01-22 13:14:05', 0, 0),
(26, 'Roadshow : Wolf', '<p>R&Eacute;ALISATION DU ROADSHOW EN PARTENARIAT AVEC WOLF</p>\r\n\r\n<p>Avec sa gamme de lubrifiants de haute technologie qui permet de tirer toute la puissance et l&rsquo;&eacute;nergie du moteur, Wolf offre une qualit&eacute; sup&eacute;rieure aux concurrents, gr&acirc;ce &agrave; cela, il est homologu&eacute; en &eacute;quipement original.</p>\r\n\r\n<p>Le roadshow, allant du 07 au 11 Novembre, a visit&eacute; 8 villes dans 5 r&eacute;gions diff&eacute;rentes pour conforter le positionnement de Wolf autant que producteur&nbsp;de lubrifiants de haute qualit&eacute; avec un prix comp&eacute;titif.&nbsp;</p>', 2, 0, '2016-11-04', NULL, '2021-01-22 13:13:08', '2022-04-28 13:57:50', 0, 0),
(27, 'Roadshow : Purflux', '<p>Gr&acirc;ce &agrave; sa forte implication et investissement en R&amp;D, PURFLUX est aujourd&#39;hui l&#39;un des leaders mondiaux&nbsp;dans le domaine des &eacute;quipements d&#39;origine pour l&#39;industrie automobile.</p>\r\n\r\n<p>Le road-show PURFLUX a eu lieu du 07 au 13 Mars 2017 et ce, afin de renforcer sa relation vis-&agrave;-vis de ses clients ainsi pour transmettre des informations techniques concernant ses produits.</p>\r\n\r\n<p><strong>Itin&eacute;raire :&nbsp;</strong></p>\r\n\r\n<p>Etape 1 :&nbsp; Agadir - Ait Melloul - Tiznit</p>\r\n\r\n<p>Etape 2 :&nbsp; Marrakech</p>\r\n\r\n<p>Etape 3 :&nbsp; Casa &laquo;Nord&raquo;</p>\r\n\r\n<p>Etape 4 : Casa &laquo;Centre&raquo;</p>\r\n\r\n<p>Etape 5 : Casa &laquo;Grand Compte&raquo;</p>', 7, 0, '2017-11-07', NULL, '2021-01-22 15:09:04', '2022-04-28 14:18:47', 0, 0),
(28, 'Profitez de notre application de fidélité : RAB7A+', '<p>RAB7A+ est l&rsquo;application de fid&eacute;lit&eacute; d&eacute;velopp&eacute;e par Autoplus au profit des garagistes situ&eacute;s dans les<br />\r\nquatre coins du royaume.<br />\r\nT&eacute;l&eacute;chargez l&rsquo;application, scannez le code QR et cumulez vos points sur tous vos achats des produits<br />\r\ndistribu&eacute;s par Autoplus+. Choisissez votre cadeau et il vous sera livr&eacute; jusqu&rsquo;&agrave; chez vous.<br />\r\nEt ce n&rsquo;est pas tout ! L&rsquo;application vous offre plusieurs avantages. Vous pouvez d&eacute;sormais consulter<br />\r\nle catalogue AutoDoc+, qui vous permettra d&rsquo;identifier la pi&egrave;ce de rechanges automobile dont vous<br />\r\navez besoin selon la marque, le mod&egrave;le ou num&eacute;ro VIN du v&eacute;hicule.<br />\r\nRAB7A+ vous permet &eacute;galement de consulter nos offres, catalogue de cadeaux et suivre toutes vos<br />\r\nop&eacute;rations en temps r&eacute;el.</p>', 24, 0, '2020-11-08', NULL, '2021-01-25 15:09:35', '2022-09-05 14:30:27', 1, 0),
(29, 'Désormais, nous débarquons sur WhatsApp Business', '<p>Chez Autoplus, la satisfaction clients est au coeur de nos pr&eacute;occupations. D&eacute;sormais, vous pouvez nous contacter, quand vous voulez, au :&nbsp;</p>\r\n\r\n<p>+2127 75 61 61 61.&nbsp;</p>\r\n\r\n<p>Pour tout renseignement/r&eacute;clamation, merci de nous contacter au :</p>\r\n\r\n<p>+212522516161</p>', 3, 0, '2020-11-19', NULL, '2021-01-25 15:10:42', '2022-09-21 15:27:32', 1, 0),
(30, 'Accédez à votre espace catalogue de pièce auto', '<p>R&eacute;servez vos pi&egrave;ces en ligne: Un meilleur rapport qualit&eacute; prix - Une Offre compl&egrave;te</p>\r\n\r\n<p>Chez Autoplus, vous pouvez acc&eacute;der &agrave; notre catalogue en ligne, comparer les produits des diff&eacute;rents produits, consulter la disponibilit&eacute; des produits en temps r&eacute;el et passer votre commande o&ugrave; vous &ecirc;tes et &agrave; n&#39;importe quel moment.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 24, 0, '2020-11-13', NULL, '2021-01-25 15:11:25', '2022-05-17 17:34:41', 1, 0),
(31, 'Road-show : Brembo', '<p>Autoplus a organis&eacute; un road-show en partenariat avec Brembo&nbsp;au profit de nos clients. Cet &eacute;v&egrave;nement avait pour but principal de transmettre les informations techniques, partage des savoir-faire et retour d&#39;exp&eacute;rience vis-&agrave;-vis des produits Brembo.&nbsp;&nbsp;</p>\r\n\r\n<p>Date de l&#39;&eacute;v&egrave;nement : 2016</p>\r\n\r\n<p>Itin&eacute;raire :&nbsp;</p>\r\n\r\n<p>Etape 1 : Casablanca&nbsp;</p>\r\n\r\n<p>Etape 2 : Rabat&nbsp;</p>\r\n\r\n<p>Etape 3 : Mekn&egrave;s&nbsp;</p>\r\n\r\n<p>Etape 4 : F&egrave;s&nbsp;</p>\r\n\r\n<p>Etape 5 : Oujda</p>', 12, 0, '2020-05-02', '2022-04-29 13:09:58', '2022-04-28 12:52:38', '2022-04-29 13:09:58', 0, 0),
(32, 'ROADSHOW VARTA | 2023', '<p>Nous sommes ravis de partager avec vous les moments forts de notre&nbsp;roadshow organis&eacute; en collaboration avec notre partenaire de confiance, VARTA. Cet &eacute;v&eacute;nement exceptionnel s&#39;est d&eacute;roul&eacute; dans plusieurs villes du royaume, s&#39;adressant sp&eacute;cifiquement &agrave; nos clients revendeurs ainsi que leurs clients garagistes.</p>\r\n\r\n<p><strong>Date</strong> : Du 07&nbsp;au 11 Ao&ucirc;t 2023</p>\r\n\r\n<p><strong>Objectifs</strong> :</p>\r\n\r\n<ul>\r\n	<li>Am&eacute;lioration de la visibilit&eacute; et de la notori&eacute;t&eacute; de la marque aupr&egrave;s de la cible</li>\r\n	<li>Pr&eacute;sentation des produits et des nouveaut&eacute;s</li>\r\n	<li>Interaction directe avec les clients potentiels en&nbsp;r&eacute;pondant&nbsp;&agrave; leurs questions, en recueillant&nbsp;leurs&nbsp;commentaires pr&eacute;cieux et en &eacute;tablissant&nbsp;des liens significatifs</li>\r\n	<li>Partage d&#39;Informations Techniques sur les produits avec des d&eacute;monstrations pratiques pour les aider &agrave; mieux comprendre leur fonctionnement et leur valeur ajout&eacute;e</li>\r\n</ul>\r\n\r\n<p><strong>Itin&eacute;raire</strong> :</p>\r\n\r\n<p><em><strong>&Eacute;tape 1</strong></em> : Le 07&nbsp;Ao&ucirc;t =&gt; F&egrave;s&nbsp;</p>\r\n\r\n<p><em><strong>&Eacute;tape 2</strong></em>&nbsp;:&nbsp;Le 08&nbsp;Ao&ucirc;t&nbsp;=&gt; Mekn&egrave;s</p>\r\n\r\n<p><em><strong>&Eacute;tape 3&nbsp;</strong></em>:&nbsp;Le 09&nbsp;Ao&ucirc;t&nbsp;=&gt; Rabat</p>\r\n\r\n<p><em><strong>&Eacute;tape 4</strong></em>&nbsp;:&nbsp;Le 10&nbsp;Ao&ucirc;t&nbsp;=&gt; Casablanca</p>\r\n\r\n<p><em><strong>&Eacute;tape 5</strong></em>&nbsp;:&nbsp;Le 11&nbsp;Ao&ucirc;t&nbsp;=&gt; Khouribga &amp; Beni Mellal</p>\r\n\r\n<p>Nous tenons &agrave; remercier chaleureusement notre partenaire VARTA&nbsp;ainsi que tous ceux qui ont contribu&eacute; au succ&egrave;s de ce roadshow.</p>\r\n\r\n<p>&nbsp;</p>', 5, 0, '2023-08-07', NULL, '2023-12-18 09:11:28', '2023-12-20 07:16:35', 1, 40),
(33, 'ROADSHOW PURFLUX | 2023', '<p>C&#39;est avec une grande joie que nous partageons les moments forts de notre roadshow, organis&eacute; en partenariat avec PURFLUX. Cet &eacute;v&eacute;nement d&#39;exception a pris place dans plusieurs villes du royaume, ciblant sp&eacute;cifiquement nos clients revendeurs et leurs clients&nbsp;garagistes.</p>\r\n\r\n<p><strong>Date&nbsp;:</strong> Du 18&nbsp;au 22&nbsp;Septembre&nbsp;2023</p>\r\n\r\n<p><strong>Objectifs cl&eacute;s :</strong></p>\r\n\r\n<ul>\r\n	<li>Accro&icirc;tre la visibilit&eacute; de la marque aupr&egrave;s de notre public cible</li>\r\n	<li>Pr&eacute;senter&nbsp;les produits et les derni&egrave;res innovations</li>\r\n	<li>Favoriser une interaction directe avec nos clients potentiels</li>\r\n	<li>Partager des informations techniques approfondies sur les produits, accompagn&eacute;es de d&eacute;monstrations pratiques pour une meilleure compr&eacute;hension</li>\r\n</ul>\r\n\r\n<p><strong>Itin&eacute;raire</strong>&nbsp;:</p>\r\n\r\n<p><em><strong>&Eacute;tape 1</strong></em>&nbsp;: Le 18 Septembre&nbsp;=&gt; Agadir&nbsp;&nbsp;</p>\r\n\r\n<p><em><strong>&Eacute;tape 2</strong></em>&nbsp;:&nbsp;Le 19&nbsp;Septembre&nbsp;=&gt; Ait Melloul</p>\r\n\r\n<p><em><strong>&Eacute;tape 3&nbsp;</strong></em>:&nbsp;Le 20&nbsp;Septembre&nbsp;&nbsp;=&gt; Marrakech</p>\r\n\r\n<p><em><strong>&Eacute;tape 4</strong></em>&nbsp;:&nbsp;Le 21&nbsp;Septembre&nbsp;&nbsp;=&gt; Marrakech</p>\r\n\r\n<p><em><strong>&Eacute;tape 5</strong></em>&nbsp;:&nbsp;Le 22&nbsp;Septembre&nbsp;&nbsp;=&gt; Khouribga &amp; Beni Mellal</p>\r\n\r\n<p>Nous exprimons notre sinc&egrave;re reconnaissance envers notre partenaire PURFLUX&nbsp;et toutes les personnes ayant contribu&eacute; au succ&egrave;s de ce roadshow.</p>', 7, 0, '2023-09-18', NULL, '2023-12-18 10:53:18', '2023-12-20 07:48:38', 1, 6),
(34, 'ROADSHOW TRW | 2023', '<p>En partenariat avec TRW, les Experts du freinage, nous avons organis&eacute; un&nbsp;roadshow qui a eu lieu dans plusieurs villes du royaume et qui&nbsp;s&#39;est adress&eacute; sp&eacute;cifiquement &agrave; nos clients revendeurs ainsi que leurs clients garagistes.</p>\r\n\r\n<p><strong>Date</strong>&nbsp;: Du 25&nbsp;au 27&nbsp;Septembre 2023</p>\r\n\r\n<p><strong>Objectifs</strong>&nbsp;:</p>\r\n\r\n<ul>\r\n	<li>Renforcement de la notori&eacute;t&eacute; de la marque</li>\r\n	<li>Pr&eacute;sentation des produits et des nouveaut&eacute;s</li>\r\n	<li>Engagement avec les clients potentiels</li>\r\n	<li>Formations Techniques approfondies sur les produits avec des d&eacute;monstrations pratiques</li>\r\n</ul>\r\n\r\n<p><strong>Itin&eacute;raire</strong>&nbsp;:</p>\r\n\r\n<p><em><strong>&Eacute;tape 1</strong></em>&nbsp;: Le 25&nbsp;Septembre =&gt; Tanger&nbsp;</p>\r\n\r\n<p><em><strong>&Eacute;tape 2</strong></em>&nbsp;:&nbsp;Le&nbsp;26&nbsp;Septembre&nbsp;=&gt; Rabat</p>\r\n\r\n<p><em><strong>&Eacute;tape 3&nbsp;</strong></em>:&nbsp;Le&nbsp;27&nbsp;Septembre&nbsp;=&gt; Casablanca</p>\r\n\r\n<p>Un immense MERCI &agrave; notre&nbsp;partenaire TRW (ZF Group) et &agrave;&nbsp;toutes les personnes ayant jou&eacute; un r&ocirc;le essentiel dans la r&eacute;ussite de ce roadshow.</p>', 11, 0, '2023-09-25', NULL, '2023-12-18 13:27:22', '2023-12-20 07:53:22', 1, 9),
(35, 'ROADSHOW NRF | 2023', '<p>Autoplus et Lambert ont co-organis&eacute; un roadshow en collaboration avec leur partenaire NRF,&nbsp;fabricant et fournisseur leader de produits de refroidissement pour le march&eacute; de la pi&egrave;ce de rechange automobile, qui a dur&eacute; pendant toute une semaine et lors duquel ils ont visit&eacute;&nbsp;Casablanca, Mohammedia, Rabat, Ait Melloul et Agadir. Cet &eacute;v&eacute;nement d&#39;exception a &eacute;t&eacute; particuli&egrave;rement pens&eacute; pour nos clients revendeurs ainsi que leurs clients garagistes sp&eacute;cialis&eacute;s en PL et VL.</p>\r\n\r\n<p><strong>Date</strong>&nbsp;: Du 07&nbsp;au 11 Novembre 2023</p>\r\n\r\n<p><strong>Objectifs</strong>&nbsp;<strong>cl&eacute;s</strong> :</p>\r\n\r\n<ul>\r\n	<li>Am&eacute;lioration de la position de la marque sur le march&eacute; marocain</li>\r\n	<li>Pr&eacute;sentation des produits PL &amp; VL ainsi que les&nbsp;nouveaut&eacute;s&nbsp;</li>\r\n	<li>&Eacute;tablir une relation de proximit&eacute; avec les clients potentiels en les &eacute;coutant attentivement afin de mieux comprendre et r&eacute;pondre &agrave; leurs besoins et attentes</li>\r\n	<li>Transmettre un savoir-faire technique</li>\r\n</ul>\r\n\r\n<p><strong>Itin&eacute;raire</strong>&nbsp;:</p>\r\n\r\n<p><em><strong>&Eacute;tape 1</strong></em>&nbsp;: Le 07&nbsp;Novembre =&gt; Rabat&nbsp;</p>\r\n\r\n<p><em><strong>&Eacute;tape 2</strong></em>&nbsp;:&nbsp;Le 08&nbsp;Novembre&nbsp;=&gt; Casablanca &amp; Mohammedia</p>\r\n\r\n<p><em><strong>&Eacute;tape 3&nbsp;</strong></em>:&nbsp;Le 09&nbsp;Novembre&nbsp;=&gt; Casablanca</p>\r\n\r\n<p><em><strong>&Eacute;tape 4</strong></em>&nbsp;:&nbsp;Le 10&nbsp;Novembre&nbsp;=&gt; Ait Melloul</p>\r\n\r\n<p><em><strong>&Eacute;tape 5</strong></em>&nbsp;:&nbsp;Le 11&nbsp;Novembre&nbsp;=&gt; Agadir</p>\r\n\r\n<p>Sinc&egrave;re gratitude envers notre partenaire fiable&nbsp;NRF. Nous tenons &agrave; le remercier pour son engagement et son soutien.</p>', 42, 0, '2023-11-07', '2023-12-18 15:53:05', '2023-12-18 15:47:45', '2023-12-18 15:53:05', 1, 0),
(36, 'ROADSHOW NRF | 2023', '<p>Autoplus et Lambert ont co-organis&eacute; un roadshow en collaboration avec leur partenaire NRF,&nbsp;fabricant et fournisseur leader de produits de refroidissement pour le march&eacute; de la pi&egrave;ce de rechange automobile, qui a dur&eacute; pendant toute une semaine et lors duquel ils ont visit&eacute;&nbsp;Casablanca, Mohammedia, Rabat, Ait Melloul et Agadir. Cet &eacute;v&eacute;nement d&#39;exception a &eacute;t&eacute; particuli&egrave;rement pens&eacute; pour nos clients revendeurs ainsi que leurs clients garagistes sp&eacute;cialis&eacute;s en PL et VL.</p>\r\n\r\n<p><strong>Date</strong>&nbsp;: Du 07&nbsp;au 11 Novembre 2023</p>\r\n\r\n<p><strong>Objectifs</strong>&nbsp;<strong>cl&eacute;s</strong> :</p>\r\n\r\n<ul>\r\n	<li>Am&eacute;lioration de la position de la marque sur le march&eacute; marocain</li>\r\n	<li>Pr&eacute;sentation des produits PL &amp; VL ainsi que les&nbsp;nouveaut&eacute;s&nbsp;</li>\r\n	<li>&Eacute;tablir une relation de proximit&eacute; avec les clients potentiels en les &eacute;coutant attentivement afin de mieux comprendre et r&eacute;pondre &agrave; leurs besoins et attentes</li>\r\n	<li>Transmettre un savoir-faire technique</li>\r\n</ul>\r\n\r\n<p><strong>Itin&eacute;raire</strong>&nbsp;:</p>\r\n\r\n<p><em><strong>&Eacute;tape 1</strong></em>&nbsp;: Le 07&nbsp;Novembre =&gt; Rabat&nbsp;</p>\r\n\r\n<p><em><strong>&Eacute;tape 2</strong></em>&nbsp;:&nbsp;Le 08&nbsp;Novembre&nbsp;=&gt; Casablanca &amp; Mohammedia</p>\r\n\r\n<p><em><strong>&Eacute;tape 3&nbsp;</strong></em>:&nbsp;Le 09&nbsp;Novembre&nbsp;=&gt; Casablanca</p>\r\n\r\n<p><em><strong>&Eacute;tape 4</strong></em>&nbsp;:&nbsp;Le 10&nbsp;Novembre&nbsp;=&gt; Ait Melloul</p>\r\n\r\n<p><em><strong>&Eacute;tape 5</strong></em>&nbsp;:&nbsp;Le 11&nbsp;Novembre&nbsp;=&gt; Agadir</p>\r\n\r\n<p>Sinc&egrave;re gratitude envers notre partenaire fiable&nbsp;NRF. Nous tenons &agrave; le remercier pour son engagement et son soutien.</p>', 42, 0, '2023-11-07', '2023-12-18 15:53:12', '2023-12-18 15:49:58', '2023-12-18 15:53:12', 1, 0),
(37, 'ROADSHOW NRF | 2023', '<p>Autoplus et Lambert ont co-organis&eacute; un roadshow en collaboration avec leur partenaire NRF,&nbsp;fabricant et fournisseur leader de produits de refroidissement pour le march&eacute; de la pi&egrave;ce de rechange automobile, qui a dur&eacute; pendant toute une semaine et lors duquel ils ont visit&eacute;&nbsp;Casablanca, Mohammedia, Rabat, Ait Melloul et Agadir. Cet &eacute;v&eacute;nement d&#39;exception a &eacute;t&eacute; particuli&egrave;rement pens&eacute; pour nos clients revendeurs ainsi que leurs clients garagistes sp&eacute;cialis&eacute;s en PL et VL.</p>\r\n\r\n<p><strong>Date</strong>&nbsp;: Du 07&nbsp;au 11 Novembre 2023</p>\r\n\r\n<p><strong>Objectifs</strong>&nbsp;<strong>cl&eacute;s</strong> :</p>\r\n\r\n<ul>\r\n	<li>Am&eacute;lioration de la position de la marque sur le march&eacute; marocain</li>\r\n	<li>Pr&eacute;sentation des produits PL &amp; VL ainsi que les&nbsp;nouveaut&eacute;s&nbsp;</li>\r\n	<li>&Eacute;tablir une relation de proximit&eacute; avec les clients potentiels en les &eacute;coutant attentivement afin de mieux comprendre et r&eacute;pondre &agrave; leurs besoins et attentes</li>\r\n	<li>Transmettre un savoir-faire technique</li>\r\n</ul>\r\n\r\n<p><strong>Itin&eacute;raire</strong>&nbsp;:</p>\r\n\r\n<p><em><strong>&Eacute;tape 1</strong></em>&nbsp;: Le 07&nbsp;Novembre =&gt; Rabat&nbsp;</p>\r\n\r\n<p><em><strong>&Eacute;tape 2</strong></em>&nbsp;:&nbsp;Le 08&nbsp;Novembre&nbsp;=&gt; Casablanca &amp; Mohammedia</p>\r\n\r\n<p><em><strong>&Eacute;tape 3&nbsp;</strong></em>:&nbsp;Le 09&nbsp;Novembre&nbsp;=&gt; Casablanca</p>\r\n\r\n<p><em><strong>&Eacute;tape 4</strong></em>&nbsp;:&nbsp;Le 10&nbsp;Novembre&nbsp;=&gt; Ait Melloul</p>\r\n\r\n<p><em><strong>&Eacute;tape 5</strong></em>&nbsp;:&nbsp;Le 11&nbsp;Novembre&nbsp;=&gt; Agadir</p>\r\n\r\n<p>Sinc&egrave;re gratitude envers notre partenaire fiable&nbsp;NRF. Nous tenons &agrave; le remercier pour son engagement et son soutien.</p>', 42, 0, '2023-11-07', '2023-12-18 15:53:18', '2023-12-18 15:50:12', '2023-12-18 15:53:18', 1, 0),
(38, 'ROADSHOW NRF | 2023', '<p>Autoplus et Lambert ont co-organis&eacute; un roadshow en collaboration avec leur partenaire NRF,&nbsp;fabricant et fournisseur leader de produits de refroidissement pour le march&eacute; de la pi&egrave;ce de rechange automobile, qui a dur&eacute; pendant toute une semaine et lors duquel ils ont visit&eacute;&nbsp;Casablanca, Mohammedia, Rabat, Ait Melloul et Agadir. Cet &eacute;v&eacute;nement d&#39;exception a &eacute;t&eacute; particuli&egrave;rement pens&eacute; pour nos clients revendeurs ainsi que leurs clients garagistes sp&eacute;cialis&eacute;s en PL et VL.</p>\r\n\r\n<p><strong>Date</strong>&nbsp;: Du 07&nbsp;au 11 Novembre 2023</p>\r\n\r\n<p><strong>Objectifs</strong>&nbsp;<strong>cl&eacute;s</strong> :</p>\r\n\r\n<ul>\r\n	<li>Am&eacute;lioration de la position de la marque sur le march&eacute; marocain</li>\r\n	<li>Pr&eacute;sentation des produits PL &amp; VL ainsi que les&nbsp;nouveaut&eacute;s&nbsp;</li>\r\n	<li>&Eacute;tablir une relation de proximit&eacute; avec les clients potentiels en les &eacute;coutant attentivement afin de mieux comprendre et r&eacute;pondre &agrave; leurs besoins et attentes</li>\r\n	<li>Transmettre un savoir-faire technique</li>\r\n</ul>\r\n\r\n<p><strong>Itin&eacute;raire</strong>&nbsp;:</p>\r\n\r\n<p><em><strong>&Eacute;tape 1</strong></em>&nbsp;: Le 07&nbsp;Novembre =&gt; Rabat&nbsp;</p>\r\n\r\n<p><em><strong>&Eacute;tape 2</strong></em>&nbsp;:&nbsp;Le 08&nbsp;Novembre&nbsp;=&gt; Casablanca &amp; Mohammedia</p>\r\n\r\n<p><em><strong>&Eacute;tape 3&nbsp;</strong></em>:&nbsp;Le 09&nbsp;Novembre&nbsp;=&gt; Casablanca</p>\r\n\r\n<p><em><strong>&Eacute;tape 4</strong></em>&nbsp;:&nbsp;Le 10&nbsp;Novembre&nbsp;=&gt; Ait Melloul</p>\r\n\r\n<p><em><strong>&Eacute;tape 5</strong></em>&nbsp;:&nbsp;Le 11&nbsp;Novembre&nbsp;=&gt; Agadir</p>\r\n\r\n<p>Sinc&egrave;re gratitude envers notre partenaire fiable&nbsp;NRF. Nous tenons &agrave; le remercier pour son engagement et son soutien.</p>', 42, 0, '2023-11-07', '2023-12-18 15:53:23', '2023-12-18 15:50:17', '2023-12-18 15:53:23', 1, 0),
(39, 'ROADSHOW NRF | 2023', '<p>Autoplus et Lambert ont co-organis&eacute; un roadshow en collaboration avec leur partenaire NRF,&nbsp;fabricant et fournisseur leader de produits de refroidissement pour le march&eacute; de la pi&egrave;ce de rechange automobile, qui a dur&eacute; pendant toute une semaine et lors duquel ils ont visit&eacute;&nbsp;Casablanca, Mohammedia, Rabat, Ait Melloul et Agadir. Cet &eacute;v&eacute;nement d&#39;exception a &eacute;t&eacute; particuli&egrave;rement pens&eacute; pour nos clients revendeurs ainsi que leurs clients garagistes sp&eacute;cialis&eacute;s en PL et VL.</p>\r\n\r\n<p><strong>Date</strong>&nbsp;: Du 07&nbsp;au 11 Novembre 2023</p>\r\n\r\n<p><strong>Objectifs</strong>&nbsp;<strong>cl&eacute;s</strong>&nbsp;:</p>\r\n\r\n<ul>\r\n	<li>Am&eacute;liorer&nbsp;la position de la marque sur le march&eacute; marocain</li>\r\n	<li>Pr&eacute;senter&nbsp;les produits destin&eacute;s aux PL &amp; VL ainsi que les&nbsp;nouveaut&eacute;s&nbsp;</li>\r\n	<li>&Eacute;tablir une relation de proximit&eacute; avec les clients potentiels en les &eacute;coutant attentivement afin de mieux comprendre et r&eacute;pondre &agrave; leurs besoins et attentes</li>\r\n	<li>Transmettre un savoir-faire technique</li>\r\n</ul>\r\n\r\n<p><strong>Itin&eacute;raire</strong>&nbsp;:</p>\r\n\r\n<p><em><strong>&Eacute;tape 1</strong></em>&nbsp;: Le 07&nbsp;Novembre =&gt; Rabat&nbsp;</p>\r\n\r\n<p><em><strong>&Eacute;tape 2</strong></em>&nbsp;:&nbsp;Le 08&nbsp;Novembre&nbsp;=&gt; Casablanca &amp; Mohammedia</p>\r\n\r\n<p><em><strong>&Eacute;tape 3&nbsp;</strong></em>:&nbsp;Le 09&nbsp;Novembre&nbsp;=&gt; Casablanca</p>\r\n\r\n<p><em><strong>&Eacute;tape 4</strong></em>&nbsp;:&nbsp;Le 10&nbsp;Novembre&nbsp;=&gt; Ait Melloul</p>\r\n\r\n<p><em><strong>&Eacute;tape 5</strong></em>&nbsp;:&nbsp;Le 11&nbsp;Novembre&nbsp;=&gt; Agadir</p>\r\n\r\n<p>Sinc&egrave;re gratitude envers notre partenaire fiable&nbsp;NRF. Nous tenons &agrave; le remercier pour son engagement et son soutien.</p>', 42, 0, '2023-11-07', NULL, '2023-12-18 15:52:49', '2023-12-20 07:59:29', 1, 63),
(40, 'ROADSHOW KYB | 2023', '<p>Nos clients revendeurs et leurs clients garagistes ont eu l&#39;opportunit&eacute; de d&eacute;couvrir l&#39;avenir du&nbsp;confort automobile, et ce, lors du roadshow que nous avons organis&eacute; en partenariat avec KYB, l&#39;un des plus importants fournisseurs mondiaux d&#39;amortisseurs pour les march&eacute;s de l&#39;&eacute;quipement d&#39;origine et des pi&egrave;ces de rechange. Ce roadshow a eu lieu dans les villes pr&eacute;sentant un potentiel &eacute;lev&eacute; en termes de concentration de garagistes&nbsp;:&nbsp;Rabat, Casablanca, Marrakech, Agadir et Ait Melloul.&nbsp;</p>\r\n\r\n<p><strong>Date</strong>&nbsp;: Du 27 Novembre&nbsp;au 02 D&eacute;cembre 2023</p>\r\n\r\n<p><strong>Objectifs</strong>&nbsp;<strong>cl&eacute;s</strong>&nbsp;:</p>\r\n\r\n<ul>\r\n	<li>Optimiser&nbsp;la visibilit&eacute; de la marque sur le march&eacute; marocain</li>\r\n	<li>Pr&eacute;senter&nbsp;les gammes de produits et partager les nouveaut&eacute;s</li>\r\n	<li>Se rapprocher des clients, collecter des insights pertinents afin de mieux appr&eacute;hender et r&eacute;pondre &agrave; leurs besoins et attentes</li>\r\n	<li>Fournir des formations techniques approfondies sur les produits</li>\r\n</ul>\r\n\r\n<p><strong>Itin&eacute;raire</strong>&nbsp;:</p>\r\n\r\n<p><em><strong>&Eacute;tape 1</strong></em>&nbsp;: Le 27&nbsp;Novembre =&gt; Rabat&nbsp;</p>\r\n\r\n<p><em><strong>&Eacute;tape 2</strong></em>&nbsp;:&nbsp;Le 28&nbsp;Novembre&nbsp;=&gt; Casablanca</p>\r\n\r\n<p><em><strong>&Eacute;tape 3&nbsp;</strong></em>:&nbsp;Les 29 &amp; 30&nbsp;Novembre&nbsp;=&gt; Marrakech</p>\r\n\r\n<p><em><strong>&Eacute;tape 4</strong></em>&nbsp;:&nbsp;Les 01 &amp; 02&nbsp;&nbsp;D&eacute;cembre =&gt; Agadir &amp; Ait Melloul</p>\r\n\r\n<p>Nos remerciements les plus sinc&egrave;res &agrave; notre&nbsp;partenaire&nbsp;KYB&nbsp;qui a &eacute;t&eacute; &agrave; nos c&ocirc;t&eacute;s cette ann&eacute;e lors de ce roadshow.</p>', 37, 0, '2023-11-27', NULL, '2023-12-19 13:00:26', '2023-12-20 07:14:16', 1, 16);

-- --------------------------------------------------------

--
-- Structure de la table `bannieres`
--

CREATE TABLE `bannieres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `classement` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lien` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bannieres`
--

INSERT INTO `bannieres` (`id`, `classement`, `deleted_at`, `created_at`, `updated_at`, `lien`) VALUES
(1, '1', '2020-10-26 02:25:17', '2020-10-26 02:21:25', '2020-10-26 02:25:17', NULL),
(2, '1', '2020-11-20 18:15:27', '2020-10-26 02:25:55', '2020-11-20 18:15:27', NULL),
(3, '9', NULL, '2020-10-26 10:38:25', '2024-01-08 14:51:02', 'https://autoplus.net.ma/varta'),
(4, '8', NULL, '2020-10-26 10:38:48', '2024-01-08 14:50:52', NULL),
(5, '4', '2023-09-10 11:15:28', '2020-11-20 18:15:59', '2023-09-10 11:15:28', NULL),
(6, '4', '2021-11-16 12:39:45', '2021-01-22 11:04:19', '2021-11-16 12:39:45', NULL),
(7, '7', NULL, '2021-11-16 14:14:18', '2024-01-08 14:50:41', NULL),
(8, '0', '2023-12-29 07:40:45', '2023-08-14 09:06:51', '2023-12-29 07:40:45', 'plan-formation-2023'),
(9, '6', NULL, '2023-08-14 09:08:53', '2024-01-08 14:50:31', NULL),
(10, '5', NULL, '2023-08-14 09:09:46', '2024-01-08 14:50:19', NULL),
(11, '4', NULL, '2023-08-15 08:56:39', '2024-01-08 14:50:08', NULL),
(12, '3', NULL, '2023-09-10 11:15:46', '2024-01-08 14:49:53', 'marques-autoplus'),
(13, '2', NULL, '2023-12-29 08:24:31', '2024-01-08 14:49:43', 'http://autoplus.net.ma/plan-formation-2023/'),
(14, '1', NULL, '2024-01-08 14:48:25', '2024-04-23 12:35:03', 'https://aftermarket.zf.com/fr/portail-aftermarket/');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `classement` int(255) DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `title`, `classement`, `deleted_at`, `created_at`, `updated_at`, `parent`, `description`) VALUES
(3, 'Lubrifiants et fluides', 8, NULL, '2020-10-26 21:45:28', '2022-09-08 15:01:38', 0, '<p>Assurez la long&eacute;tivit&eacute; et&nbsp;le bon fonctionnement du moteur en utilisant nos lubrifiants en partenariat avec les plus grandes marques internationales.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>'),
(4, 'Pièce Moteur', NULL, '2022-09-07 10:48:06', '2020-10-26 21:46:40', '2022-09-07 10:48:06', 42, '<p>Pour assurer une performance optimale &agrave; votre moteur, il est n&eacute;cessaire d&#39;avoir des pi&egrave;ces moteur de haute qualit&eacute;. En effet, les pi&egrave;ces moteur permettent de contr&ocirc;ler&nbsp;l&#39;alimentation de carburant, programmer l&#39;&eacute;tincelle &eacute;lectrique, disperser la chaleur et la lubrification pour r&eacute;duire la friction engendr&eacute;e.</p>\r\n\r\n<p>D&eacute;couvrez l&#39;ensemble des pi&egrave;ces Autoplus pour l&#39;environnement moteur en partenariat avec les plus grandes marques d&#39;&eacute;quipementiers.</p>'),
(5, 'Courroie & distribution', NULL, '2022-09-06 20:40:46', '2020-10-26 21:47:18', '2022-09-06 20:40:46', 42, '<p>le syst&egrave;me distribution correspond&nbsp;&agrave; l&#39;ensemble de pi&egrave;ces m&eacute;caniques permettant la synchronisation des diff&eacute;rents temps du moteur (l&#39;admission, la compression, l&#39;explosion et l&#39;&eacute;chappement), elle met en lien les mouvements de rotation du vilebrequin avec celui du (ou des) arbres &agrave; came pour coordonner la succession des quatre temps.</p>'),
(6, 'Transmission', NULL, NULL, '2020-10-26 21:47:48', '2022-09-06 10:18:34', 45, '<p>Le syst&egrave;me de transmission comprend l&rsquo;ensemble des m&eacute;canismes permettant de transmettre le couple et la puissance du moteur aux roues de voiture.</p>\r\n\r\n<p><strong>Le syst&egrave;me de transmission doit &ecirc;tre capable de:</strong></p>\r\n\r\n<ul>\r\n	<li>Transmettre la puissance du moteur aux roues motrices.</li>\r\n	<li>Distribuer la puissance aux roues quelque soient leur diff&eacute;rence de vitesse.</li>\r\n	<li>Adapter la puissance motrice &agrave; l&rsquo;&eacute;volution souhait&eacute;e du v&eacute;hicule.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>'),
(7, 'Freinage', 3, NULL, '2020-10-26 21:48:24', '2022-09-07 07:21:38', 0, '<p>Le syst&egrave;me de freinage permet de ralentir et arr&ecirc;ter le v&eacute;hicule dans les meilleures conditions. Il assure la s&eacute;curit&eacute; des passagers et des usagers de la route en ralentissant les v&eacute;hicules gr&acirc;ce au frottement de ses composants.</p>\r\n\r\n<p>Le syst&egrave;me de freinage doit faire preuve de :&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>Stabilit&eacute; :</strong>&nbsp;en conservant la trajectoire du v&eacute;hicule</li>\r\n	<li><strong>Efficacit&eacute; :</strong>&nbsp;dans un temps et sur une distance minimale</li>\r\n	<li><strong>Progressivit&eacute; :</strong>&nbsp;avec un freinage proportionnel &agrave; l&rsquo;effort du conducteur</li>\r\n	<li><strong>Confort :</strong>&nbsp;avec un effort minimum par le conducteur</li>\r\n</ul>\r\n\r\n<p>Autoplus vous propose les meilleures marques du syst&egrave;me de freinage afin d&#39;assurer votre s&eacute;curit&eacute;.</p>'),
(8, 'Essuyage', 5, NULL, '2020-10-26 21:48:54', '2022-09-07 07:22:27', 0, '<p>Pour assurer la&nbsp;bonne conduite, il est primordial d&#39;avoir une bonne vision. Les essuies-glace vous accompagne dans toutes les saisons, tant&ocirc;t pour nettoyer la pare-brise tant&ocirc;t pour &eacute;vacuer d&#39;en &eacute;vacuer l&#39;eau.&nbsp;</p>\r\n\r\n<p><strong>Conseil d&#39;expert</strong></p>\r\n\r\n<p>Les essuies-glace ont une dur&eacute;e de vie limit&eacute;e &agrave; 500.000 cycles, soit environ une ann&eacute;e d&#39;utilisation selon le conducteur. Pensez donc &agrave; les changer si besoin.</p>\r\n\r\n<p>&nbsp;</p>'),
(9, 'Batteries', NULL, NULL, '2020-11-20 18:09:33', '2022-05-23 13:04:23', 46, '<p>La batterie de votre voiture a un r&ocirc;le primordial. Outre le d&eacute;marrage de votre v&eacute;hicule, la batterie permet &agrave; l&rsquo;ensemble des &eacute;l&eacute;ments &eacute;lectriques de votre v&eacute;hicule de fonctionner : voyants du tableau de bord, optiques de phares, essuie-glaces, vitres &eacute;lectriques, ou encore autoradio.</p>\r\n\r\n<p>Penser &agrave; v&eacute;rifier r&eacute;guli&egrave;rement l&rsquo;&eacute;tat de votre batterie pour &eacute;viter de tomber en panne.</p>\r\n\r\n<p>Autoplus, en partenariat avec plusieurs marques internationales, vous propose un large choix de batterie adapt&eacute; &agrave; vos besoins.&nbsp;</p>'),
(12, 'Alimentation carburant', NULL, NULL, '2021-01-12 07:57:10', '2022-05-23 13:06:42', 41, '<p>Le syst&egrave;me d&#39;alimentation carburant est charg&eacute; de l&rsquo;alimentation du moteur en carburant, en fonction des besoins. Chaque composant doit fonctionner au mieux pour que le v&eacute;hicule offre les performances et la fiabilit&eacute; attendues.</p>\r\n\r\n<p>Autoplus assure les diff&eacute;rentes pi&egrave;ces de rechange pour le syst&egrave;me d&#39;alimentation carburant de votre v&eacute;hicule, tel que :&nbsp;</p>\r\n\r\n<p>&nbsp;</p>'),
(13, 'Bougie allumage-préchauffage', NULL, NULL, '2021-01-12 08:01:30', '2022-09-08 15:40:40', 42, '<p>Les bougies d&rsquo;allumage et les bougies de pr&eacute;chauffage constituent la source d&rsquo;allumage du moteur &agrave; combustion. Elles sont primordiales pour assurer un d&eacute;marrage optimal de votre v&eacute;hicule. &nbsp;En effet, les bougies d&#39;allumage ne se trouvent que dans les moteurs &agrave; essence et les bougies de pr&eacute;chauffage dans les moteurs diesel.</p>\r\n\r\n<p><strong>Conseil d&#39;expert&nbsp;</strong></p>\r\n\r\n<p>Pour assurer une meilleure performance du moteur, nous vous conseillons de contr&ocirc;ler les bougies d&#39;allumage tous les 30.000 km. En effet, leurs dur&eacute;e de vie varie de 30.000 &agrave; 120.000 km.</p>\r\n\r\n<p>Avec plus de 40.000 r&eacute;f&eacute;rences en stock, Autoplus vous assure la disponibilit&eacute; ce dont vous avez besoin, au bon moment.</p>'),
(14, 'Filtration', 2, NULL, '2021-01-18 07:56:34', '2022-09-07 07:20:48', 0, '<p>Les filtres de votre v&eacute;hicule ont une dur&eacute;e de vie bien pr&eacute;cise. Avec le temps, il faudrait les changer r&eacute;guli&egrave;rement afin d&rsquo;&eacute;viter les dysfonctionnements et/ou les pannes &agrave; l&rsquo;impr&eacute;vu.</p>\r\n\r\n<p>Optimisez le fonctionnement de votre v&eacute;hicule gr&acirc;ce &agrave; notre gamme de filtres.</p>'),
(15, 'Embrayage', NULL, NULL, '2021-01-18 10:53:50', '2022-09-07 12:41:59', 45, '<p>Avez-vous remarqu&eacute; un blocage quant &agrave; la transmission de la vitesse ? Les pi&egrave;ces de l&#39;embrayage de la voiture doivent-&ecirc;tre chang&eacute;es.&nbsp;</p>\r\n\r\n<p>Chez Autoplus,vous y trouverez ce dont vous avez besoins pour r&eacute;parer vos pi&egrave;ces d&#39;embrayage.</p>\r\n\r\n<ul>\r\n	<li>Hydraulique d&#39;embrayage : but&eacute;es hydrauliques, &eacute;metteurs et r&eacute;cepteurs d&#39;embrayage.</li>\r\n	<li>Kit d&#39;embrayage.</li>\r\n	<li>Disques d&#39;embrayage.</li>\r\n	<li>M&eacute;canismes d&#39;embrayage.</li>\r\n	<li>Volant bi-masse.</li>\r\n	<li>Kits complet embrayage et volant bi-masse.</li>\r\n	<li>Kits double-embrayage.</li>\r\n</ul>\r\n\r\n<p>Autoplus, leader de la distribution des pi&egrave;ces de rechange en B2B.</p>'),
(16, 'Amortissement', NULL, NULL, '2021-01-18 14:26:07', '2022-09-08 12:20:43', 43, '<p>Avez-vous remarqu&eacute; une perte d&rsquo;adh&eacute;rence, des rebonds excessifs, des vibrations au volant, des balancements aux virages, des claquements sourds, d&rsquo;importants piquages en avant lors de freinage&nbsp;? Autoplus vous propose une gamme large et profonde des amortisseurs et coupelles de suspension&nbsp;qui r&eacute;pond &agrave; la m&ecirc;me qualit&eacute; des pi&egrave;ces de premi&egrave;re monte afin de permettre &agrave; vos clients un remplacement &agrave; l&#39;identique, tout en gardant la m&ecirc;me performance.</p>\r\n\r\n<p><strong>Conseil d&#39;expert</strong>&nbsp;</p>\r\n\r\n<p>Nous vous conseillons de changer les amortisseurs et coupelles de suspensions tous les 80.000 km.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>'),
(17, 'Roulement', NULL, NULL, '2021-01-18 14:53:44', '2022-09-08 09:52:12', 43, '<p>Un roulement de roue d&eacute;fectueux prend du jeu et finit par se casser. Une fois cass&eacute; le roulement se d&eacute;compose et la bague ext&eacute;rieure du roulement va entra&icirc;ner dans sa chute le moyeu portant la roue.</p>\r\n\r\n<p>Pensez &agrave; changer votre roulement de roue autour de&nbsp;150 000 km et faites appel &agrave; Autoplus, leader dans la distribution des pi&egrave;ces de rechanges.</p>'),
(18, 'Pièces de suspension', NULL, NULL, '2021-01-18 15:05:23', '2022-09-08 12:28:07', 43, '<p>Vous cherchez des pi&egrave;ces de suspsension pour votre voiture ?&nbsp;</p>\r\n\r\n<p>Autoplus vous propose une large s&eacute;lection des pi&egrave;ces de suspension : triangle, bras et&nbsp;silent bloc. En saisissant le n&deg;VIN ou en s&eacute;lectionnant la marque et le mod&egrave;le de votre voiture,&nbsp;vous retrouverez facilement toutes les pi&egrave;ces de suspension compatibles avec votre voiture gr&acirc;ce &agrave; notre immense base de don&eacute;es.&nbsp;</p>\r\n\r\n<p>Autoplus, c&#39;est plus de 70 ans au service de la pi&egrave;ce automobile et plus+.</p>'),
(19, 'Lampes', NULL, '2022-08-19 13:01:18', '2021-01-18 15:11:14', '2022-08-19 13:01:18', 29, '<p>Assurez votre s&eacute;curit&eacute; et celle des autres conducteurs gr&acirc;ce &agrave; un bon &eacute;clairage de votre v&eacute;hicule.&nbsp;</p>\r\n\r\n<p>Peu importe le mod&egrave;le ou l&#39;anciennet&eacute; de votre v&eacute;hicule, autoplus met &agrave; votre disposition une gamme profonde qui r&eacute;pond &agrave; vos diff&eacute;rents besoins.</p>'),
(20, 'Bougies', 16, '2021-01-18 15:19:33', '2021-01-18 15:18:45', '2021-01-18 15:19:33', 0, 'Voir et être vu : deux motifs d\'entretien et de réparation importants. AUTOPLUS vous propose une gamme large pour répondre aux demandes de tous les conducteurs.'),
(21, 'Transmission', 19, '2022-04-12 11:24:31', '2021-01-18 15:48:37', '2022-04-12 11:24:31', 0, 'Voir et être vu : deux motifs d\'entretien et de réparation importants. AUTOPLUS vous propose une gamme large pour répondre aux demandes de tous les conducteurs.'),
(22, 'Tendeurs & Galet', NULL, NULL, '2021-01-18 15:51:11', '2022-05-23 13:04:42', 5, '<p>Assurez une tension optimale sur votre courroie de distribution gr&acirc;ce &agrave; nos produits galets-tendeurs. En effet, le galet tendeur permet de garder la courroie suffisamment tendue afin d&rsquo;assurer le bon fonctionnement des diff&eacute;rentes pi&egrave;ces moteur.</p>\r\n\r\n<p>Chez autoplus, nous mettons &agrave; votre disposition les meilleures pi&egrave;ces de rechange pour r&eacute;pondre &agrave; tous vos besoins.&nbsp;</p>'),
(23, 'thermique', NULL, NULL, '2021-01-18 16:02:44', '2022-09-08 07:50:27', 44, '<p>Assurez une meilleure performance du moteur en optant &agrave; des pi&egrave;ces thermiques de qualit&eacute; premium, qui r&eacute;pondent &agrave;&nbsp;la m&ecirc;me qualit&eacute; des pi&egrave;ces de premi&egrave;re monte afin de permettre &agrave; vos clients un remplacement &agrave; l&#39;identique.</p>\r\n\r\n<p>Chez Autoplus, nous disposons&nbsp;:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Compresseurs;&nbsp;</li>\r\n	<li>Radiateurs d&#39;huile;</li>\r\n	<li>Radiateurs d&#39;eau;</li>\r\n	<li>Condenseurs de climatisation;</li>\r\n	<li>Intercoolers.</li>\r\n</ul>\r\n\r\n<p>Quelque soit le mod&egrave;le ou l&#39;anciennet&eacute; de votre v&eacute;hicule, autoplus met &agrave; votre disposition une gamme large et profonde qui r&eacute;pond &agrave; vos diff&eacute;rents besoins.</p>'),
(24, 'Essuyage', 19, '2021-01-29 11:28:35', '2021-01-18 16:07:54', '2021-01-29 11:28:35', 0, 'Voir et être vu : deux motifs d\'entretien et de réparation importants. AUTOPLUS vous propose une gamme large pour répondre aux demandes de tous les conducteurs.'),
(25, 'Pompe à eau', NULL, NULL, '2021-01-18 16:22:34', '2022-09-07 13:53:39', 44, '<p>D&eacute;couvrez notre s&eacute;lection des pompes &agrave; eau et pompes &agrave; eau additionnelles,&nbsp;qui r&eacute;pond &agrave; la m&ecirc;me qualit&eacute; des pi&egrave;ces de premi&egrave;re monte en nous appellant ou en consultant notre plateforme B2B.&nbsp;<br />\r\nPassez votre commande et faites vous livrer dans l&#39;une de nos points de vente ou chez vous.</p>\r\n\r\n<p>Autoplus, leader de la pi&egrave;ce de rechange automobile en B2B.</p>'),
(26, 'Courroies', NULL, '2022-06-08 14:29:35', '2021-01-18 16:31:38', '2022-06-08 14:29:35', 0, '<p>Pi&egrave;ce essentielles dans le bon fonctionnement d&#39;un moteur, la courroie&nbsp;assure la synchronisation entre les pistons, les soupapes et la pompe d&rsquo;injection. Cependant, il faudrait savoir que cette derni&egrave;re peut s&#39;user dans la discr&eacute;tion et sans pr&eacute;venir.&nbsp;</p>\r\n\r\n<p>Sa dur&eacute;e de vie varie&nbsp;de 60&nbsp;000 km &agrave; 240&nbsp;000 km selon la voiture et le carburant qu&rsquo;elle utilise. Pensez donc &agrave; entretenir votre voiture de temps en temps afin de maintenir sa performance.&nbsp;</p>'),
(27, 'Thermostat', NULL, NULL, '2021-01-18 16:43:21', '2022-09-07 09:41:58', 44, '<p>Le r&ocirc;le du thermostat est de contr&ocirc;ler la&nbsp;temp&eacute;rature de l&rsquo;eau de refroidissement&nbsp;: il doit&nbsp;monter&nbsp;rapidement le moteur &agrave;&nbsp;sa temp&eacute;rature de fonctionnement optimale et le maintenir &agrave; temp&eacute;rature constante. Le thermostat dispose d&rsquo;un petit et d&rsquo;un grand circuit d&rsquo;eau de refroidissement.</p>\r\n\r\n<p>Quelque soit le type du thermostat que vous cherchez, Autoplus vous garantie sa disponibilit&eacute;.</p>'),
(28, 'Sond Lambda', NULL, NULL, '2021-01-18 16:50:36', '2022-05-23 13:06:52', 41, '<p>La sonde lambda, appel&eacute;e &eacute;galement la pompe &agrave; oxyg&egrave;ne,&nbsp;&nbsp;est implant&eacute;e sur le syst&egrave;me d&#39;&eacute;chappement en amont du catalyseur.</p>\r\n\r\n<p>Son r&ocirc;le consiste &agrave; informer le bo&icirc;tier de gestion du moteur, sur la teneur en oxyg&egrave;ne des gaz br&ucirc;l&eacute;s issus de la combustion. Le bo&icirc;tier de gestion en d&eacute;duit donc la quantit&eacute; d&#39;essence &agrave; injecter dans les cylindres pour que le ratio air-essence&nbsp;soit id&eacute;al.</p>\r\n\r\n<p>&nbsp;</p>'),
(29, 'Carrosserie/ éclairage', 6, NULL, '2021-01-20 12:49:51', '2022-09-07 07:22:44', 0, '<p>&Ecirc;tes-vous &agrave; la recherche d&#39;une carrosserie d&#39;excellente qualit&eacute; afin de garantir une meilleure protection &agrave; votre v&eacute;hicule mais &eacute;galement de soigner son c&ocirc;t&eacute; esth&eacute;tique? Autoplus vous offre &agrave; la fois une gamme large et profonde de carrosserie pour r&eacute;pondre &agrave; vos besoins.</p>'),
(30, 'Filtre à air', NULL, NULL, '2021-10-07 09:19:37', '2022-03-18 13:41:36', 14, '<p>Le filtre &agrave; air assure le bon fonctionnement du moteur. En effet, il purifie l&#39;air qui s&#39;y infiltre&nbsp;et emp&ecirc;che &eacute;galement la poussi&egrave;re et les insectes de s&#39;y engouffrer. Il est fortement conseiller aux conducteurs de changer les filtres &agrave; air r&eacute;guli&egrave;rement pour &eacute;viter la panne moteur.</p>\r\n\r\n<p>Quelquoi le mod&egrave;le de votre v&eacute;hicule, nouveau ou ancien, autoplus vous assure une gamme large et profonde pour satisfaire vos besoins.</p>'),
(31, 'Filtre à huile', NULL, NULL, '2021-10-07 09:20:12', '2022-09-06 10:25:08', 14, '<p>Comme son nom l&#39;indique, le filtre &agrave; huile vient en compl&eacute;ment des lubrifiants moteur et assure donc le nottoyage du circuit.</p>\r\n\r\n<p><strong>Avis d&#39;expert&nbsp;</strong></p>\r\n\r\n<p>Nous vous recommandons de changer le filtre &agrave; huile de votre moteur tous les 15 000 &agrave; 30 000 kms ou une fois par an.</p>\r\n\r\n<p>Quelque soit le mod&egrave;le de votre v&eacute;hicule, Autoplus vous assure ses pi&egrave;ces de rechange gr&acirc;ce &agrave; notre large gamme de produits.</p>\r\n\r\n<p>Autoplus, c&rsquo;est plus de 70 ans d&rsquo;exp&eacute;riences.</p>\r\n\r\n<p>&nbsp;</p>'),
(32, 'Filtre à carburant', NULL, NULL, '2021-10-07 09:20:31', '2022-05-23 13:29:56', 14, '<p>Comme son nom l&#39;indique, le filtre &agrave; essence&nbsp;lutte contre la salet&eacute;, les particules et les impuret&eacute;s du r&eacute;servoir. Il prot&egrave;ge le moteur en &eacute;vitant son usure pr&eacute;matur&eacute;e, la surconsommation du carburant et en allonge sa dur&eacute;e de vie.</p>\r\n\r\n<p>Quelque soit le mod&egrave;le de votre v&eacute;hicule, Autoplus vous assure ses pi&egrave;ces de rechange gr&acirc;ce &agrave; notre large gamme de produits.</p>\r\n\r\n<p>Autoplus, c&rsquo;est plus de 70 ans d&rsquo;exp&eacute;riences.</p>'),
(33, 'Filtre à habitacle', NULL, NULL, '2021-10-07 09:20:59', '2022-09-06 10:25:47', 14, '<p>Le filtre &agrave; habitacle prot&egrave;ge votre v&eacute;hicule contre les particules nocives, les odeurs et assure donc une meilleure visibilit&eacute;. En effet, un filtre non entretenu rend les conditions hygi&eacute;niques moins favorables pour les passagers.</p>\r\n\r\n<p><strong>Conseil d&#39;expert&nbsp;</strong></p>\r\n\r\n<p>Il est pr&eacute;f&eacute;rable le changer tous les 15&nbsp;000 &agrave; 30&nbsp;000 km, et tous les 10&nbsp;000 kms en ville, ou une fois par an.&nbsp;</p>\r\n\r\n<p>Quelque soit le mod&egrave;le de votre v&eacute;hicule, Autoplus vous assure ses pi&egrave;ces de rechange gr&acirc;ce &agrave; notre large gamme de produits.</p>\r\n\r\n<p>Autoplus, c&rsquo;est plus de 70 ans d&rsquo;exp&eacute;riences.</p>'),
(34, 'Filtre à hydraulique/BVA', NULL, NULL, '2021-10-07 09:21:24', '2022-09-06 10:29:36', 14, '<p>Ce type de filtre a pour principale fonction de nettoyer l&rsquo;huile hydraulique. Il permet d&rsquo;&eacute;liminer des contaminants qui sont susceptibles d&rsquo;endommager les pi&egrave;ces de l&rsquo;&eacute;quipement. En fonction de l&rsquo;estimation en micron du filtre, il peut pi&eacute;ger plus ou moins de quantit&eacute; de particules.</p>\r\n\r\n<p>Quelquoi le mod&egrave;le de votre v&eacute;hicule, nouveau ou ancien, Autoplus vous assure une gamme large et profonde pour satisfaire vos besoins.</p>\r\n\r\n<p>Autoplus, c&#39;est plus de 70 ans d&#39;exp&eacute;rience.</p>'),
(35, 'Filtre à gasoil', NULL, '2022-05-25 12:31:24', '2021-10-07 09:21:38', '2022-05-25 12:31:24', 14, '<p>Le filtre &agrave; gasoil lutte contre la salet&eacute;, les particules et les impuret&eacute;s du r&eacute;servoir. Il prot&egrave;ge le moteur en &eacute;vitant son usure pr&eacute;matur&eacute;e, la surconsommation du carburant et en allonge sa dur&eacute;e de vie.</p>\r\n\r\n<p>Quelque soit le mod&egrave;le de votre v&eacute;hicule, Autoplus vous assure ses pi&egrave;ces de rechange gr&acirc;ce &agrave; notre large gamme de produits.</p>\r\n\r\n<p>Autoplus, c&rsquo;est plus de 70 ans d&rsquo;exp&eacute;riences.&nbsp;</p>'),
(36, 'Fluides & produits universels', NULL, '2022-09-06 13:06:02', '2022-05-11 12:27:28', '2022-09-06 13:06:02', 3, NULL),
(37, 'Antigel', NULL, NULL, '2022-05-11 12:28:00', '2022-05-11 12:28:00', 36, NULL),
(38, 'AdBlue', NULL, NULL, '2022-05-11 12:28:35', '2022-05-11 12:28:35', 36, NULL),
(39, 'Graisse', NULL, NULL, '2022-05-11 12:36:23', '2022-05-11 12:36:23', 36, NULL),
(40, 'Liquide de frein', NULL, NULL, '2022-05-11 12:37:06', '2022-05-11 12:37:06', 36, NULL),
(41, 'Pièces moteur', NULL, NULL, '2022-05-11 13:37:51', '2022-09-07 10:53:41', 42, '<p>Le joint de culasse est l&rsquo;une des pi&egrave;ces les plus fragiles et qui n&eacute;cessite une attention particuli&egrave;re. Par ailleurs, la segmentation de moteur &agrave; combustion permet de d&eacute;gager un maximum d&#39;&eacute;nergie.&nbsp;</p>\r\n\r\n<p><strong>Conseil d&#39;experts :&nbsp;</strong></p>\r\n\r\n<p>Pensez &agrave; changer les joints de culasses et les segments moteur&nbsp;<strong>autour des 200 000 kilom&egrave;tres</strong>.</p>'),
(42, 'Moteur', 1, NULL, '2022-05-11 13:44:33', '2022-09-07 10:44:41', 0, '<p>Retrouvez toutes nos pi&egrave;ces moteur en partenariats avec les plus grands &eacute;quipementiers.</p>'),
(43, 'Direc./susp./Amort.', 4, NULL, '2022-05-11 13:47:27', '2022-09-07 07:21:53', 0, '<p>D&eacute;couvrez nos produits de la suspension, direction et amortissement en partenariats avec les plus grands &eacute;quipementiers.</p>'),
(44, 'Refroidissement et thermique', 7, NULL, '2022-05-12 08:04:17', '2022-09-07 07:23:12', 0, NULL),
(45, 'Entrainement', 9, NULL, '2022-05-12 08:32:27', '2022-09-07 07:23:45', 0, '<p>D&eacute;couvrez tous nos produits d&#39;entra&icirc;nement en partenariat avec les plus grand &eacute;quipementiers.</p>'),
(46, 'Démarrage électrique', 10, NULL, '2022-05-12 08:33:40', '2022-09-07 07:23:56', 0, '<p>D&eacute;couvrez nos produits des pi&egrave;ces moteurs en collaboration avec les plus grands &eacute;quipementiers.&nbsp;</p>'),
(47, 'Freinage', NULL, '2022-05-23 13:11:57', '2022-05-23 12:59:31', '2022-05-23 13:11:57', 0, NULL),
(48, 'Bougies allumage & préchauffage', NULL, '2022-09-07 10:50:23', '2022-05-23 13:28:36', '2022-09-07 10:50:23', 42, '<p>Les bougies d&rsquo;allumage et les bougies de pr&eacute;chauffage constituent la source d&rsquo;allumage du moteur &agrave; combustion. Elles sont primordiales pour assurer un d&eacute;marrage optimal de votre v&eacute;hicule. &nbsp;En effet, les bougies d&#39;allumage ne se trouvent que dans les moteurs &agrave; essence et les bougies de pr&eacute;chauffage dans les moteurs diesel.</p>\r\n\r\n<p>Par ailleurs, le r&ocirc;le d&rsquo;une bobine d&rsquo;allumage est de convertir le courant basse tension qui provient de la batterie du v&eacute;hicule en une tension bien plus &eacute;lev&eacute;e qui permet de d&eacute;marrer le moteur de la voiture.</p>\r\n\r\n<p>Avec plus de 40.000 r&eacute;f&eacute;rences en stock, Autoplus vous assure la disponibilit&eacute; ce dont vous avez besoin, au bon moment.</p>'),
(49, 'Pièces moteur', NULL, '2022-09-07 10:50:44', '2022-05-23 13:28:50', '2022-09-07 10:50:44', 42, '<p>Le joint de culasse est l&rsquo;une des pi&egrave;ces les plus fragiles et qui n&eacute;cessite une attention particuli&egrave;re. Par ailleurs, la segmentation de moteur &agrave; combustion permet de d&eacute;gager un maximum d&#39;&eacute;nergie.&nbsp;</p>\r\n\r\n<p><strong>Conseil d&#39;experts :&nbsp;</strong></p>\r\n\r\n<p>Pensez &agrave; changer les joints de culasses et les segments moteur&nbsp;<strong>autour des 200 000 kilom&egrave;tres</strong>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>'),
(50, 'Courroies & distribution', NULL, NULL, '2022-05-23 13:29:13', '2022-09-08 15:08:13', 42, '<p><strong>Retrouvez une large gamme de courroie, galet tendeur et cha&icirc;nes de distribution chez Autoplus !</strong></p>\r\n\r\n<p>La courroie est une pi&egrave;ce d&#39;usure. Il est important de ne pas attendre qu&#39;elle casse pour la changer, car cela pourrait d&eacute;t&eacute;riorer votre moteur. En moyenne, il est conseill&eacute; de la remplacer tous les 80 000 km ou tous les 5 ans.&nbsp;La cha&icirc;ne de distribution peut, en revanche, durer toute la vie de votre voiture si elle est bien entretenue.</p>\r\n\r\n<p>Retrouvez une panoplie de produits courroie et distribution de la m&ecirc;me qualit&eacute; de premi&egrave;re monte chez Autoplus :</p>\r\n\r\n<ul>\r\n	<li>Courroie de tansmission;</li>\r\n	<li>Courroie d&#39;alternateur;</li>\r\n	<li>Kits de distribution;</li>\r\n	<li>Tendeurs de courroie de distribution;</li>\r\n	<li>Galets tendeurs.</li>\r\n</ul>'),
(51, 'Pièces de direction', NULL, NULL, '2022-05-23 13:37:58', '2022-09-08 12:40:40', 43, '<p>Avez-vous remarqu&eacute; un&nbsp;bruit de grincement en tournant la roue, volant lent &agrave; r&eacute;agir ou raide, bruits de couinement au d&eacute;marrage du v&eacute;hicule, ou encore des bruits de sifflement ? Il est temps de changer vos pi&egrave;ces de direction.&nbsp;</p>\r\n\r\n<p>Les pi&egrave;ces de direction : chapes, rotules, biellette, barre de direction, etc. permettent au conducteur d&#39;intervenir facilement sur&nbsp;l&#39;orientation de sa trajectoire</p>\r\n\r\n<p>Autoplus vous propose une large gamme des pi&egrave;ces de rechange, qui r&eacute;pond &agrave; la m&ecirc;me qualit&eacute; des pi&egrave;ces de premi&egrave;re monte,&nbsp;afin de permettre &agrave; vos clients un remplacement &agrave; l&#39;identique&nbsp;tout en gardant la m&ecirc;me performance.</p>'),
(52, 'Eclairage', NULL, NULL, '2022-05-23 13:39:04', '2022-09-08 14:06:55', 29, '<p>Les projecteurs de lumi&egrave;res sont un &eacute;l&eacute;ment primordial de votre v&eacute;hicule &agrave; moteur. Il est fortement conseill&eacute; de s&rsquo;assurer du bon fonctionnement des feux de votre v&eacute;hicule :&nbsp;<strong>feux arri&egrave;re gauche/droite, antibrouillard, feux clignotant, feu de recul, feu du jour, Pare-chocs, feux de plaque d&rsquo;immatriculation&nbsp;</strong>et de les changer si besoin.</p>\r\n\r\n<p>Autoplus vous propose une <strong>multitude des pi&egrave;ces d&rsquo;&eacute;clairage de grande qualit&eacute;</strong> &agrave; des <strong>prix imbattables</strong>, avec une <strong>livraison express</strong> allant de <strong>1H jusqu&rsquo;&agrave; 24H pour les villes lointaines.</strong></p>'),
(53, 'Carrosserie', NULL, '2022-08-19 13:01:33', '2022-05-23 13:39:20', '2022-08-19 13:01:33', 29, NULL),
(54, 'Rétroviseurs et glaces', NULL, '2022-05-23 14:12:17', '2022-05-23 13:39:37', '2022-05-23 14:12:17', 0, NULL),
(55, 'Rétroviseurs', NULL, NULL, '2022-05-23 14:10:54', '2022-09-05 14:57:52', 29, '<p>Le r&eacute;troviseur n&#39;est pas une pi&egrave;ce d&#39;usure. Cependant, il est tr&egrave;s dangereux de conduire avec un r&eacute;troviseur cass&eacute; ou en panne.&nbsp;</p>\r\n\r\n<p>Autoplus vous propose l&#39;ensemble des &eacute;l&eacute;ments du r&eacute;troviseur pour une meilleure visibilit&eacute; pendant la conduite, &agrave; savoir : Glace&nbsp;r&eacute;troviseur, bo&icirc;tier r&eacute;troviseur, feu r&eacute;troviseur, r&eacute;troviseur complet.</p>'),
(56, 'Plaquettes de frein et machoires', NULL, NULL, '2022-05-25 12:33:07', '2022-09-06 07:30:33', 7, '<p>Incontournables pour la s&eacute;curit&eacute; du conducteur, les plaquettes de frein sont&nbsp;maintenues par l&#39;&eacute;trier de frein. En effet, elles assurent des frictions sur les disques de frein et permettent ainsi de diminuer la vitesse du v&eacute;hicule et de l&#39;immobiliser.&nbsp;&nbsp;</p>\r\n\r\n<p>Autoplus vous offre une large gamme des plaquettes de frein adapt&eacute;e &agrave; vos besoins</p>'),
(57, 'Disque de frein', NULL, NULL, '2022-05-25 12:33:33', '2022-09-07 12:48:43', 7, '<p>Le frein &agrave; disque est une pi&egrave;ce d&#39;usure et un dispositif de freinage permettant d&#39;am&eacute;liorer les performances des freins des v&eacute;hicules.</p>\r\n\r\n<p><strong>Conseil d&#39;expert</strong></p>\r\n\r\n<p>Pensez &agrave; changer votre disque de frein lorsque la p&eacute;dale de frein devient dure, molle/&eacute;lastique ou lorsque vous entendez du bruit au freinage.</p>\r\n\r\n<p>Chez Autoplus, vous b&eacute;n&eacute;ficiez de la gamme la plus large et la plus profonde des pi&egrave;ces de rechange au Maroc avec plus de 40.000 r&eacute;f&eacute;rences en stock et plusieurs points de vente partout au Maroc.</p>'),
(58, 'Hydraulique de freinage', NULL, NULL, '2022-05-25 12:35:18', '2022-09-07 13:24:41', 7, '<p>&Eacute;l&eacute;ment primordial dans le syst&egrave;me du freinage, l&#39;hydraulique de freinage est un syst&egrave;me de freinage dans lequel l&#39;huile hydraulique est utilis&eacute;e&nbsp;afin d&rsquo;obtenir le freinage.</p>\r\n\r\n<p>D&eacute;couvrez notre s&eacute;lection du maitre-cylindre et cylindre de roue. Une gamme riche et diversifi&eacute;e&nbsp;qui r&eacute;pond &agrave; la m&ecirc;me qualit&eacute; des pi&egrave;ces de premi&egrave;re monte afin de permettre &agrave; vos clients un remplacement &agrave; l&#39;identique, tout en gardant la m&ecirc;me performance.</p>\r\n\r\n<p>&nbsp;</p>'),
(59, 'Câbles de freinage', NULL, NULL, '2022-05-25 12:35:47', '2022-09-06 07:52:09', 7, '<p><strong>Des c&acirc;bles de frein plus r&eacute;sistants et plus souples !&nbsp;</strong></p>\r\n\r\n<p>Chez Autoplus, nous avons une large gamme de produits de qualit&eacute; pour une performance meilleure et une s&eacute;curit&eacute; accrue.&nbsp;</p>\r\n\r\n<p>Pour acc&eacute;der &agrave; toute la gamme des c&acirc;bles de frein compatibles avec votre v&eacute;hicule, il vous suffit d&#39;indiquer le num&eacute;ro d&#39;immatriculation de votre voiture.&nbsp;Parcourez la s&eacute;lection Autoplus et trouvez les c&acirc;bles de frein qu&#39;il vous faut, des pi&egrave;ces de qualit&eacute; &eacute;quivalente aux pi&egrave;ces d&#39;origine.</p>'),
(60, 'Liquide de frein', NULL, '2022-09-08 15:15:25', '2022-05-25 12:36:33', '2022-09-08 15:15:25', 7, '<p><strong>Chouchoutez votre voiture !</strong></p>\r\n\r\n<p>Pour le&nbsp;bon fonctionnement du syst&egrave;me de freinage de votre voiture, il est&nbsp;n&eacute;cessaire de contr&ocirc;ler r&eacute;guli&egrave;rement la temp&eacute;rature d&#39;&eacute;bullition du liquide de frein par un sp&eacute;cialiste, au moins tous les deux ans ou tous les 10&nbsp;000 kilom&egrave;tres.&nbsp;</p>\r\n\r\n<p>Chez Autoplus, vous y trouverez ce dont vous avez besoin pour assurer une meilleure performance du v&eacute;hicule. Tous nos produits sont issus des plus grands &eacute;quipementiers.</p>\r\n\r\n<p>Autoplus, c&#39;est plus de 70 ans d&#39;exp&eacute;rience au service de la pi&egrave;ce de rechange automobile et plus+.</p>'),
(61, 'Antigel', NULL, NULL, '2022-05-25 12:59:55', '2022-09-07 13:27:03', 3, '<p>L&#39;antigel est un liquide<strong>&nbsp;</strong>de refroidissement, il permet&nbsp;de maintenir votre voiture en bon &eacute;tat. Il contribue &agrave; r&eacute;guler la temp&eacute;rature du moteur tout en prot&eacute;geant et en lubrifiant diverses pi&egrave;ces m&eacute;talliques du circuit de&nbsp;refroidissement&nbsp;de votre moteur.</p>\r\n\r\n<p><strong>Avis d&#39;expert&nbsp;</strong></p>\r\n\r\n<p>Il n&#39;existe pas d&#39;antigel standard, &agrave;&nbsp;chaque type de voiture son antigel. Vous devez remplacer votre&nbsp;antigel&nbsp;tous les <strong>48 000 km ou tous les trois ans.</strong></p>\r\n\r\n<p>Quelque soit le mod&egrave;le ou la marque de votre v&eacute;hicule, autoplus met &agrave; votre disposition une gamme profonde qui r&eacute;pond &agrave; vos diff&eacute;rents besoins.</p>'),
(62, 'AdBlue', NULL, NULL, '2022-05-25 13:00:23', '2022-09-08 14:53:17', 3, '<p><strong>AdBlue au meilleur prix ... !&nbsp;</strong></p>\r\n\r\n<p>D&eacute;couvrez nos produits AdBlue de qualit&eacute; premium compos&eacute;s d&#39;eau min&eacute;ralis&eacute;e et d&#39;ur&eacute;&nbsp;, en marque propre. L&#39;AdBlue sert &agrave; limiter la pollution de votre voiture diesel en transformant les oxydes d&#39;azote&nbsp;en vapeur d&#39;eau et en azote, des &eacute;l&eacute;ments non nocifs.&nbsp;</p>\r\n\r\n<p><strong>Conseil d&#39;expert&nbsp;</strong></p>\r\n\r\n<p>Nous vous conseillons de verser au moins&nbsp;5 litres d&#39;AdBlue sans d&eacute;passer&nbsp;le niveau maximal.</p>\r\n\r\n<p>&nbsp;</p>'),
(63, 'Graisse', NULL, NULL, '2022-05-25 13:01:48', '2022-09-06 19:12:27', 3, '<p>Autoplus vous accompagne &agrave; entretenir votre v&eacute;hicule &agrave; des prix imbattables gr&acirc;ce &agrave; notre s&eacute;lection de graisse.&nbsp;</p>\r\n\r\n<p><strong>Conseil d&#39;expert</strong></p>\r\n\r\n<p>Afin de garder votre v&eacute;hicule en bon &eacute;tat, nous vous recommandons d&#39;effectuer le graissage une &agrave; deux fois par an.</p>\r\n\r\n<p>Autoplus, c&#39;est plus de 70 ans d&#39;exp&eacute;rience au service de la pi&egrave;ce automobile et plus+.</p>'),
(64, 'Liquide de frein', NULL, NULL, '2022-05-25 13:12:47', '2022-09-08 15:17:15', 7, '<p>Chouchoutez votre voiture !</p>\r\n\r\n<p>Pour le&nbsp;bon fonctionnement du syst&egrave;me de freinage de votre voiture, il est&nbsp;n&eacute;cessaire de contr&ocirc;ler r&eacute;guli&egrave;rement la temp&eacute;rature d&#39;&eacute;bullition du liquide de frein par un sp&eacute;cialiste, au moins tous les deux ans ou tous les 10&nbsp;000 kilom&egrave;tres.&nbsp;</p>\r\n\r\n<p>Chez Autoplus, vous y trouverez ce dont vous avez besoin pour assurer une meilleure performance du v&eacute;hicule. Tous nos produits sont issus des plus grands &eacute;quipementiers.</p>\r\n\r\n<p>Passez votre commande d&egrave;s maintenant en nous appellant ou via notre site &amp; plateforme B2B ! La livraison se fait en un temps record, chez vous ou dans nos plateformes.</p>\r\n\r\n<p>Autoplus, c&#39;est plus de 70 ans d&#39;exp&eacute;rience au service de la pi&egrave;ce de rechange automobile et plus+.</p>'),
(65, 'Pâte à joint', NULL, NULL, '2022-05-25 13:14:04', '2022-09-06 20:09:48', 3, '<p><strong>Trouvez le produit qui vous convient en quelques clics</strong></p>\r\n\r\n<p>Vous h&eacute;sitez de choisir la p&acirc;te &agrave; joint qui convient ? Pas de soucis, il suffit de saisir votre num&eacute;ro de VIN ou bien de s&eacute;lectionner le mod&egrave;le et la marque de votre v&eacute;hicule en nous appellant ou via notre plateforme B2B.&nbsp;</p>\r\n\r\n<p>Autoplus, c&#39;est plus de 70 ans au service de la pi&egrave;ce de rechange automobile et plus+.</p>'),
(66, 'Lubrifiant moteur', NULL, NULL, '2022-05-25 13:30:23', '2022-09-06 20:16:48', 3, '<p>D&eacute;couvrez la gamme d&#39;huile moteur Autoplus en partenariat avec les plus grandes marques.&nbsp;</p>\r\n\r\n<p><strong>Conseil d&#39;expert&nbsp;</strong></p>\r\n\r\n<p>Pour une meilleure performance du moteur,&nbsp;mesurer le niveau d&#39;huile au bout de 1000 km et refaire l&#39;appoint jusqu&#39;au rep&egrave;re maximum.</p>\r\n\r\n<p>&nbsp;</p>'),
(67, 'Lubrifiant de transmission', NULL, NULL, '2022-05-26 09:03:14', '2022-09-06 20:29:27', 3, '<p>Les pi&egrave;ces du syst&egrave;me de transmission sont en frottement constant. En absence de lubrification, les pi&egrave;ces peuvent-&ecirc;tre endommag&eacute;es et la vitesse deviennent tr&egrave;s d&ucirc;re &agrave; passer.&nbsp;</p>\r\n\r\n<p><strong>Conseil d&#39;expert&nbsp;</strong></p>\r\n\r\n<p>Nous vous conseillons d&#39;effectuer un entretien r&eacute;guli&egrave;rement pour am&eacute;liorer la dur&eacute;e de vie de votre syst&egrave;me de transmission.</p>'),
(68, 'Lubrifiant pour industrie', NULL, NULL, '2022-05-26 09:03:37', '2022-09-06 21:19:43', 3, '<p>L&#39;huile hydraulique joue un r&ocirc;le essentiel dans le bon fonctionnement des syst&egrave;mes hydrauliques. Il est utiliser&nbsp;pour assurer le bon fonctionnement de certains engins utilis&eacute;s dans le secteur agricole, les industries ou encore les travaux publics.&nbsp;</p>\r\n\r\n<p><strong>Conseil d&#39;expert&nbsp;</strong></p>\r\n\r\n<p>Pour bien choisir l&#39;huile hydraulique, nous vous recommandons de saisir le n&deg; VIN du v&eacute;hicule dans notre plateforme B2B ou bien de nous appeler. Nos technico-commerciaux se feront un plaisir de vous assister.&nbsp;</p>\r\n\r\n<p>Autoplus, leader de la distribution des pi&egrave;ces de rechange en B2B.</p>'),
(69, 'Compartiment moteur', NULL, NULL, '2022-08-19 07:53:51', '2022-09-02 08:50:12', 29, '<p><strong>Commandez vos pi&egrave;ces de compartiment moteur &agrave; des prix imbattables chez Autoplus.</strong></p>\r\n\r\n<p>&Ecirc;tes-vous &agrave; la recherche des pi&egrave;ces compartiment moteur, comme buse radiateur, cache moteur, protecteur sous-moteur, bouchon r&eacute;servoir ou berceau moteur ?&nbsp;</p>\r\n\r\n<p>Autoplus vous offre la gamme la plus large et la plus profonde au Maroc. Avec plus de 24.000 r&eacute;f&eacute;rences en stock, Autoplus vous assure la disponibilit&eacute; de la pi&egrave;ce quelque soit le mod&egrave;le ou la marque du v&eacute;hicule.&nbsp;</p>'),
(70, 'Carrosserie extérieur', NULL, NULL, '2022-08-19 07:54:09', '2022-09-05 15:00:56', 29, '<p><strong>Venez d&eacute;couvrir la carrosserie au meilleur prix avec Autoplus !&nbsp;</strong></p>\r\n\r\n<p>Quelque soit la marque ou le mod&egrave;le de votre voiture, Autoplus vous offre un large panel de kits carrosserie ext&eacute;rieure.&nbsp;</p>\r\n\r\n<p><strong>Livraison partout au Maroc en un temps record&nbsp;!</strong></p>\r\n\r\n<p>Autoplus vous offre une livraison express sur toutes vos commandes, 1H dans les zones de chalandise et J+1 seulement dans les villes les plus lointaines.</p>'),
(71, 'Pièces de l\'intérieur', NULL, NULL, '2022-08-19 07:54:23', '2022-09-08 14:14:19', 29, '<p><strong>Vous cherchez des pi&egrave;ces de l&#39;int&eacute;rieur de votre v&eacute;hicule ?&nbsp;</strong></p>\r\n\r\n<p>M&ecirc;me les pi&egrave;ces de l&#39;int&eacute;rieur s&#39;usent avec le temps. Il faudrait donc les changer pour donner un coup de jeunesse &agrave; l&#39;int&eacute;rieur de votre voiture.&nbsp;</p>\r\n\r\n<p>Retrouvez dans l&#39;ensemble de nos magasins Autoplus, une panoplie de produits de l&#39;int&eacute;rieur, que ce soit poign&eacute;e de porte, pommeau levier de vitesse, cendiers ou leviers r&eacute;glage si&egrave;ge quelle que soit la marque et le mod&egrave;le de votre voiture.</p>'),
(72, 'Poulie alternateur', NULL, NULL, '2022-09-05 15:09:16', '2022-09-05 15:09:16', 46, '<p>La poulie alternateur d&eacute;signe&nbsp;la pi&egrave;ce qui sert &agrave; g&eacute;n&eacute;rer du courant &eacute;lectrique quand votre voiture roule pour recharger la batterie et faire fonctionner les &eacute;quipements &eacute;lectriques.</p>\r\n\r\n<p>B&eacute;n&eacute;ficiez d&#39;une panoplie des pi&egrave;ces de rechange adapt&eacute;es &agrave; vos besoins, en partenariat avec les plus grands &eacute;quipementiers.</p>'),
(73, 'Bobines d\'allumage', NULL, NULL, '2022-09-05 19:48:07', '2022-09-06 10:21:52', 46, '<p>Une bobine d&#39;allumage fournit le courant haute tension aux bougies d&#39;allumage pour fournir l&#39;&eacute;tincelle n&eacute;cessaire &agrave; la combustion du moteur essence.</p>\r\n\r\n<p><strong>Conseil d&#39;expert&nbsp;</strong></p>\r\n\r\n<p>En cas de probl&egrave;me d&#39;allumage, nous vous recommandons de remplacer les bougies en premier lieu.</p>'),
(74, 'Pièces électriques diverses', NULL, NULL, '2022-09-05 19:58:58', '2022-09-06 10:07:31', 46, '<p>D&eacute;couvrez toutes nos pi&egrave;ces &eacute;lectriques diverses : r&eacute;gulateurs, pignons, doigt allumeur pour un meilleur d&eacute;marrage de la voiture.&nbsp;</p>\r\n\r\n<p>Autoplus vous garantit :&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Disponibilit&eacute; des pi&egrave;ces;&nbsp;</li>\r\n	<li>Livraison express;&nbsp;</li>\r\n	<li>Large choix des produits.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>'),
(75, 'Pièces techniques', 11, NULL, '2022-09-07 14:19:37', '2022-09-07 14:19:37', 0, '<p>D&eacute;couvrez notre gamme de pi&egrave;ces techniques en partenariat avec les plus grandes marques.</p>'),
(76, 'Capteurs', NULL, NULL, '2022-09-07 14:45:15', '2022-09-08 08:08:29', 75, '<p><strong>Toutes les pi&egrave;ces capteurs pour votre voiture</strong></p>\r\n\r\n<p>Autoplus propose pour votre voiture plusieurs articles des capteurs comme les capteurs FAP, capteurs vilebrequin, capteurs ABS, capteur pression, capteur position d&#39;arbre &agrave; came, etc.&nbsp;</p>\r\n\r\n<p><strong>Commander vos pi&egrave;ces autos chez Autoplus&nbsp;</strong></p>\r\n\r\n<p>En entrant le n&deg;VIN ou en s&eacute;lectionnant la marque et le mod&egrave;le de votre voiture, vous retrouverez facilement les pi&egrave;ces techniques&nbsp;compatibles avec votre v&eacute;hicule gr&acirc;ce &agrave; notre immense base de don&eacute;es.&nbsp;</p>'),
(77, 'Sondes', NULL, NULL, '2022-09-07 14:54:00', '2022-09-08 08:30:39', 75, '<p>Vous cherchez des sondes de voiture ?&nbsp;</p>\r\n\r\n<p>Il suffit de nous indiquer le n&deg; VIN ou bien la marque et le mod&egrave;le de la voiture.&nbsp;</p>\r\n\r\n<p>Autoplus dispose de la gamme la plus large et la plus profonde au Maroc, avec plus de 40.000 r&eacute;f&eacute;rences en stock, vous y trouverez tout ce dont vous avez besoin.&nbsp;</p>\r\n\r\n<p>Autoplus, c&#39;est plus de 70 ans d&#39;exp&eacute;riences.</p>'),
(78, 'Vannes EGR, Radiateurs et Modules EGR', NULL, NULL, '2022-09-08 07:20:03', '2022-09-08 09:12:31', 75, '<p>Autoplus vous propose de nombreuses pi&egrave;ces de Vannes EGR, radiateurs et Modules EGR.&nbsp;</p>\r\n\r\n<p>Gr&acirc;ce &agrave; nos partenariats avec les marques de renom, vous y retrouverez tout ce dont vous avez besoin.&nbsp;Une large gamme qui r&eacute;pond &agrave; la m&ecirc;me qualit&eacute; des pi&egrave;ces de premi&egrave;re monte afin de permettre &agrave; vos clients un remplacement &agrave; l&#39;identique.</p>\r\n\r\n<p>Autoplus, leader de la distribution des pi&egrave;ces de rechange en B2B.</p>'),
(79, 'Contacteurs et interrupteurs', NULL, NULL, '2022-09-08 07:20:46', '2022-09-08 09:41:59', 75, '<p>Retrouvez un large choix de contacteurs et interrupteurs adapt&eacute; &agrave; votre voiture, quelque soit sa marque et son mod&egrave;le.&nbsp;</p>\r\n\r\n<p><strong>Livraison express partout au Maroc !</strong></p>\r\n\r\n<p>Autoplus vous assure d&#39;obtenir la bonne pi&egrave;ce &agrave; tout moment : une plateforme nationale qui livre &agrave; J+1 quasiment partout au Maroc, et nos plateformes r&eacute;gionales qui livrent en moins d&#39;une heure.</p>'),
(80, 'Débimètre et doseurs d\'air', NULL, NULL, '2022-09-08 09:26:37', '2022-09-08 13:45:22', 75, '<p>Vous &ecirc;tes &agrave; la recherche des pi&egrave;ces auto ?&nbsp;</p>\r\n\r\n<p>Retrouvez toutes les pi&egrave;ces d&eacute;bim&egrave;tres et doseurs d&#39;air quelque soit la marque et le mod&egrave;le de la voiture.&nbsp;</p>\r\n\r\n<p>Autoplus dispose de la gamme la plus large et la plus profonde des pi&egrave;ces de rechange au Maroc avec plus de 40.000 r&eacute;f&eacute;rences en stock.</p>\r\n\r\n<p>Autoplus vous garantit une livraison express partout au Maroc.</p>'),
(81, 'Pièces métal-caouatchouc', NULL, NULL, '2022-09-08 12:57:43', '2022-09-08 12:57:43', 43, '<p>Autoplus vous assure un large choix des pi&egrave;ces m&eacute;tal-caouatchouc pour les supports moteur et supports bo&icirc;te &agrave; vitesse.&nbsp;</p>\r\n\r\n<p>Avec plus de 40.000 r&eacute;f&eacute;rences en stock,&nbsp;vous retrouverez facilement les pi&egrave;ces de rechange compatibles avec votre v&eacute;hicule gr&acirc;ce &agrave; notre immense base de don&eacute;es.&nbsp;</p>'),
(82, 'Alimentation carburant', NULL, NULL, '2022-09-08 15:36:58', '2022-09-08 15:37:47', 75, '<p>Le syst&egrave;me d&#39;alimentation en carburant de votre voiture se compose g&eacute;n&eacute;ralement de trois &eacute;l&eacute;ments :&nbsp;pompe &agrave; carburant, situ&eacute;e dans le r&eacute;servoir, d&rsquo;un filtre &agrave; carburant et d&rsquo;injecteurs.&nbsp;</p>\r\n\r\n<p>Autoplus dispose d&#39;une gamme large et profonde des pi&egrave;ces techniques, qui&nbsp;r&eacute;pond &agrave; la m&ecirc;me qualit&eacute; des pi&egrave;ces de premi&egrave;re monte afin de permettre &agrave; vos clients un remplacement &agrave; l&#39;identique, tout en gardant la m&ecirc;me performance.</p>');

-- --------------------------------------------------------

--
-- Structure de la table `categories_partenaires`
--

CREATE TABLE `categories_partenaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `partenaire_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories_partenaires`
--

INSERT INTO `categories_partenaires` (`id`, `categorie_id`, `created_at`, `updated_at`, `partenaire_id`) VALUES
(5, 10, NULL, NULL, 2),
(6, 10, NULL, NULL, 5),
(7, 10, NULL, NULL, 4),
(11, 11, NULL, NULL, 10),
(12, 11, NULL, NULL, 2),
(21, 7, NULL, NULL, 3),
(35, 4, NULL, NULL, 4),
(41, 9, NULL, NULL, 3),
(45, 9, NULL, NULL, 5),
(50, 9, NULL, NULL, 33),
(51, 9, NULL, NULL, 8),
(55, 15, NULL, NULL, 16),
(58, 4, NULL, NULL, 32),
(59, 4, NULL, NULL, 19),
(63, 6, NULL, NULL, 35),
(64, 16, NULL, NULL, 20),
(65, 16, NULL, NULL, 37),
(67, 17, NULL, NULL, 18),
(68, 18, NULL, NULL, 3),
(69, 18, NULL, NULL, 28),
(70, 18, NULL, NULL, 39),
(72, 19, NULL, NULL, 9),
(73, 19, NULL, NULL, 40),
(74, 19, NULL, NULL, 6),
(75, 20, NULL, NULL, 3),
(76, 20, NULL, NULL, 22),
(77, 20, NULL, NULL, 23),
(78, 13, NULL, NULL, 22),
(79, 13, NULL, NULL, 23),
(80, 21, NULL, NULL, 41),
(81, 21, NULL, NULL, 26),
(82, 22, NULL, NULL, 30),
(83, 22, NULL, NULL, 38),
(84, 22, NULL, NULL, 18),
(85, 23, NULL, NULL, 42),
(86, 24, NULL, NULL, 25),
(87, 24, NULL, NULL, 6),
(94, 26, NULL, NULL, 43),
(96, 27, NULL, NULL, 45),
(97, 28, NULL, NULL, 31),
(98, 29, NULL, NULL, 50),
(99, 29, NULL, NULL, 51),
(100, 29, NULL, NULL, 48),
(101, 29, NULL, NULL, 46),
(102, 29, NULL, NULL, 53),
(103, 29, NULL, NULL, 52),
(104, 29, NULL, NULL, 6),
(105, 29, NULL, NULL, 54),
(106, 29, NULL, NULL, 55),
(108, 17, NULL, NULL, 38),
(109, 3, NULL, NULL, 2),
(110, 13, NULL, NULL, 13),
(111, 6, NULL, NULL, 26),
(112, 7, NULL, NULL, 14),
(113, 7, NULL, NULL, 11),
(115, 8, NULL, NULL, 6),
(116, 12, NULL, NULL, 6),
(117, 12, NULL, NULL, 57),
(118, 14, NULL, NULL, 19),
(119, 14, NULL, NULL, 7),
(121, 30, NULL, NULL, 26),
(123, 14, NULL, NULL, 13),
(124, 13, NULL, NULL, 31),
(125, 13, NULL, NULL, 6),
(126, 16, NULL, NULL, 3),
(127, 26, NULL, NULL, 13),
(128, 5, NULL, NULL, 43),
(130, 15, NULL, NULL, 6),
(131, 8, NULL, NULL, 13),
(132, 13, NULL, NULL, 58),
(133, 13, NULL, NULL, 59),
(134, 5, NULL, NULL, 60),
(135, 5, NULL, NULL, 38),
(138, 37, NULL, NULL, 3),
(139, 37, NULL, NULL, 6),
(140, 38, NULL, NULL, 3),
(141, 38, NULL, NULL, 63),
(142, 39, NULL, NULL, 38),
(143, 39, NULL, NULL, 18),
(144, 40, NULL, NULL, 34),
(145, 40, NULL, NULL, 13),
(146, 57, NULL, NULL, 3),
(147, 57, NULL, NULL, 12),
(148, 57, NULL, NULL, 11),
(149, 58, NULL, NULL, 26),
(150, 58, NULL, NULL, 11),
(151, 59, NULL, NULL, 11),
(152, 60, NULL, NULL, 34),
(153, 60, NULL, NULL, 13),
(154, 60, NULL, NULL, 11),
(155, 60, NULL, NULL, 66),
(156, 61, NULL, NULL, 3),
(157, 61, NULL, NULL, 6),
(158, 62, NULL, NULL, 3),
(161, 63, NULL, NULL, 18),
(163, 64, NULL, NULL, 13),
(167, 66, NULL, NULL, 67),
(168, 66, NULL, NULL, 2),
(169, 67, NULL, NULL, 2),
(171, 68, NULL, NULL, 2),
(172, 52, NULL, NULL, 55),
(173, 52, NULL, NULL, 52),
(174, 52, NULL, NULL, 6),
(175, 52, NULL, NULL, 68),
(176, 55, NULL, NULL, 50),
(177, 55, NULL, NULL, 52),
(178, 69, NULL, NULL, 79),
(179, 69, NULL, NULL, 75),
(180, 69, NULL, NULL, 76),
(181, 69, NULL, NULL, 74),
(182, 69, NULL, NULL, 77),
(183, 69, NULL, NULL, 78),
(184, 69, NULL, NULL, 72),
(185, 69, NULL, NULL, 54),
(186, 69, NULL, NULL, 73),
(187, 70, NULL, NULL, 79),
(188, 70, NULL, NULL, 75),
(189, 70, NULL, NULL, 51),
(190, 70, NULL, NULL, 74),
(191, 70, NULL, NULL, 77),
(192, 70, NULL, NULL, 78),
(193, 70, NULL, NULL, 48),
(194, 70, NULL, NULL, 54),
(195, 70, NULL, NULL, 46),
(196, 70, NULL, NULL, 53),
(197, 71, NULL, NULL, 81),
(198, 56, NULL, NULL, 3),
(199, 56, NULL, NULL, 11),
(201, 50, NULL, NULL, 60),
(202, 3, NULL, NULL, 34),
(203, 3, NULL, NULL, 3),
(204, 3, NULL, NULL, 13),
(205, 3, NULL, NULL, 32),
(206, 3, NULL, NULL, 66),
(207, 3, NULL, NULL, 38),
(208, 3, NULL, NULL, 67),
(209, 3, NULL, NULL, 18),
(210, 3, NULL, NULL, 6),
(211, 3, NULL, NULL, 21),
(212, 31, NULL, NULL, 3),
(213, 31, NULL, NULL, 19),
(214, 31, NULL, NULL, 7),
(215, 32, NULL, NULL, 3),
(216, 32, NULL, NULL, 19),
(217, 32, NULL, NULL, 7),
(218, 30, NULL, NULL, 3),
(219, 30, NULL, NULL, 19),
(220, 30, NULL, NULL, 65),
(221, 30, NULL, NULL, 7),
(222, 31, NULL, NULL, 65),
(223, 32, NULL, NULL, 65),
(224, 33, NULL, NULL, 29),
(225, 33, NULL, NULL, 19),
(226, 33, NULL, NULL, 7),
(227, 4, NULL, NULL, 82),
(228, 50, NULL, NULL, 13),
(229, 50, NULL, NULL, 84),
(230, 50, NULL, NULL, 83),
(231, 50, NULL, NULL, 85),
(232, 16, NULL, NULL, 39),
(233, 16, NULL, NULL, 28),
(234, 16, NULL, NULL, 86),
(235, 18, NULL, NULL, 86),
(236, 18, NULL, NULL, 84),
(237, 18, NULL, NULL, 83),
(238, 51, NULL, NULL, 3),
(239, 51, NULL, NULL, 86),
(240, 51, NULL, NULL, 39),
(241, 51, NULL, NULL, 28),
(244, 23, NULL, NULL, 19),
(245, 23, NULL, NULL, 84),
(246, 23, NULL, NULL, 83),
(247, 27, NULL, NULL, 86),
(248, 27, NULL, NULL, 19),
(249, 27, NULL, NULL, 31),
(250, 27, NULL, NULL, 42),
(251, 65, NULL, NULL, 4),
(253, 64, NULL, NULL, 11),
(255, 68, NULL, NULL, 67),
(256, 72, NULL, NULL, 6),
(257, 73, NULL, NULL, 80),
(258, 73, NULL, NULL, 31),
(259, 73, NULL, NULL, 6),
(260, 74, NULL, NULL, 13),
(261, 74, NULL, NULL, 80),
(262, 74, NULL, NULL, 6),
(263, 6, NULL, NULL, 41),
(264, 6, NULL, NULL, 23),
(266, 42, NULL, NULL, 13),
(267, 42, NULL, NULL, 58),
(268, 42, NULL, NULL, 85),
(269, 42, NULL, NULL, 32),
(270, 42, NULL, NULL, 22),
(271, 42, NULL, NULL, 82),
(272, 42, NULL, NULL, 60),
(273, 42, NULL, NULL, 19),
(274, 42, NULL, NULL, 23),
(275, 42, NULL, NULL, 84),
(276, 42, NULL, NULL, 83),
(277, 42, NULL, NULL, 4),
(278, 41, NULL, NULL, 32),
(279, 41, NULL, NULL, 82),
(280, 41, NULL, NULL, 19),
(281, 41, NULL, NULL, 4),
(282, 34, NULL, NULL, 19),
(283, 34, NULL, NULL, 31),
(284, 56, NULL, NULL, 14),
(285, 15, NULL, NULL, 24),
(286, 15, NULL, NULL, 62),
(287, 64, NULL, NULL, 34),
(288, 64, NULL, NULL, 66),
(289, 67, NULL, NULL, 21),
(290, 25, NULL, NULL, 43),
(291, 25, NULL, NULL, 60),
(292, 25, NULL, NULL, 42),
(293, 25, NULL, NULL, 57),
(294, 75, NULL, NULL, 13),
(295, 75, NULL, NULL, 43),
(296, 75, NULL, NULL, 59),
(297, 75, NULL, NULL, 31),
(298, 75, NULL, NULL, 42),
(299, 75, NULL, NULL, 57),
(300, 75, NULL, NULL, 6),
(301, 75, NULL, NULL, 45),
(302, 76, NULL, NULL, 13),
(303, 76, NULL, NULL, 59),
(304, 76, NULL, NULL, 31),
(305, 77, NULL, NULL, 13),
(306, 77, NULL, NULL, 31),
(307, 78, NULL, NULL, 43),
(308, 78, NULL, NULL, 42),
(309, 78, NULL, NULL, 57),
(310, 78, NULL, NULL, 6),
(311, 79, NULL, NULL, 31),
(312, 79, NULL, NULL, 45),
(313, 80, NULL, NULL, 13),
(314, 80, NULL, NULL, 43),
(315, 80, NULL, NULL, 31),
(316, 80, NULL, NULL, 57),
(317, 81, NULL, NULL, 3),
(318, 81, NULL, NULL, 29),
(319, 81, NULL, NULL, 39),
(320, 81, NULL, NULL, 28),
(321, 82, NULL, NULL, 13),
(322, 82, NULL, NULL, 80),
(323, 82, NULL, NULL, 31);

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL DEFAULT '\'\'',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `deleted_at`, `created_at`, `updated_at`, `tel`) VALUES
(24, 'younes el hilali', 'admin@autoplus.ma', 'demande d\'embauche', 'besoin d emploi', '2020-11-21 13:04:46', '2020-11-21 13:02:26', '2020-11-21 13:04:46', ''),
(25, 'Particulier', 'zikass90@gmail.com', 'Adhésion', 'Bonjour, \r\nEtant un particulier et souhaitant me lancer dans la vente de pièces auto, j\'aurais besoin de me procurer d\'un espace pour commande pièces à prix grossiste destiné à la revente.\r\nCdt\r\nZakaria', NULL, '2022-09-20 22:04:28', '2022-09-20 22:04:28', '0696668280'),
(26, 'mounir jouhrani', 'carserv.khouribga@gmail.com', 'Garage mecanique et pneumatique a khouribga', 'Contact', NULL, '2022-09-20 22:23:10', '2022-09-20 22:23:10', '0635012522'),
(27, 'Particulier', 'zikass90@gmail.com', 'Adhésion', 'Bonjour\r\nEtant un particulier et souhaitant me lancer dans la vente de pièces auto, j\'aurais besoin de me procurer d\'un espace pour commande pièces à prix grossiste destiné à la revente.\r\nCdt\r\nZakaria', NULL, '2022-09-20 22:27:10', '2022-09-20 22:27:10', '0696668280'),
(28, 'AUTOMEK/C0003505', 'automek.pieces@gmail.com', 'DEMANDE D\'INSCRIPTION', 'BONJOUR MR\r\nNOUS SOMMES UNE SOCIETE DE VENTE DES PIECES CARROSSRIE ET MECANIQUE AUTOMOBILE MULTIMARQUES EST BESOIN DE VOTRE SITE WEB D\'ACHTER PLUSIEURS PIECES\r\nDANS L\'ATTENTE DE VOTRE REPONSE D\'ACCES AU VOTRE SITE VEILLEZ M\'ACCEPTER MONSIEUR MES MEILLEURS SALUTATIONS.', NULL, '2022-09-21 12:59:22', '2022-09-21 12:59:22', '+212535464614'),
(29, 'reda bennazi', 'benazzireda0@gmail.com', 'stager', 'Madame, Monsieur,\r\n\r\n\r\nJ\'aimerais beaucoup intégrer vos équipes pour apporter toute mon énergie et contribuer aux succès de votre entreprise tout en apprenant au poste qui m\'intéresse énormément.\r\n\r\nje suis à la recherche d\'un stage pour compléter ma formation. je souhaiterais acquérir une première expérience au sein d\'une grande entreprise comme la vôtre.\r\n\r\nJe vous remercie de l\'attention que vous porterez à cette demande de stage et je me tiens à votre disposition pour un entretien.\r\n\r\nJe vous prie d’agréer, Madame, Monsieur, l’expression de mes salutations distinguées.\r\n\r\n                                                                                                                       Merci,', NULL, '2022-09-21 23:03:08', '2022-09-21 23:03:08', '0687078007'),
(31, 'Abderrahim', 'Morahime@gmail.com', 'kit de rehaussement pour tiguan', 'je cherche un kit de rehaussement pour tiguan 2008', NULL, '2022-09-22 09:43:07', '2022-09-22 09:43:07', '0667152647'),
(33, 'Ring Auto', 'reda.ammari@icloud.com', 'Ouverture compte', 'On souhaite accéder à votre plateforme on est sur casablanca', NULL, '2022-09-24 17:06:21', '2022-09-24 17:06:21', '0620100893'),
(37, 'Ring Auto', 'reda.ammari@icloud.com', 'Ouverture compte', 'On souhaite accéder à votre plateforme on est sur casablanca j', NULL, '2022-09-24 17:06:38', '2022-09-24 17:06:38', '0620100893'),
(40, 'Laghmani', 'dr.laghmani@gmail.com', 'Copte pro', 'Bonjour, est ce que  c’est possible d’ouvrir un compte pro', NULL, '2022-09-28 17:19:50', '2022-09-28 17:19:50', '0693713361'),
(44, 'saad', 'saad.merji@gmail.com', 'demande', 'Accepter mon compte', NULL, '2022-09-30 08:09:47', '2022-09-30 08:09:47', '0668394537'),
(45, 'Ismail El Achhab', 'ismailelachhab123@gmail.com', 'création d\'un magasin de pièces de rechange', 'bonjour communité Auto Plus , \r\nje vais ouvrir un magasin de pièces de rechanges le plutôt possible , et j\'essaye d\'obtenir une adhésion avec votre société.\r\nj\'attend votre réponse le plutôt possible .\r\nCordialement \r\nIsmail', NULL, '2022-10-06 12:55:09', '2022-10-06 12:55:09', '+212643941675'),
(46, 'ISMAIL GHAILANI', 'ismailtangergh@gmail.com', 'TANGER', 'vendeur', NULL, '2022-10-07 10:00:09', '2022-10-07 10:00:09', '0618246485'),
(48, 'ABDELHAKIM', 'ALYOUMNE@gmail.com', 'PRIX', 'LES PRIX DE BATTRIE VARTA L1 L2 L3 L5.', NULL, '2022-10-10 19:44:36', '2022-10-10 19:44:36', '0661070604'),
(49, 'ABDELHAKIM', 'alyoumnepieceauto@gmail.com', 'PRIX', 'les prix de batterie varta  L1 L2 L3 L5', NULL, '2022-10-10 20:06:16', '2022-10-10 20:06:16', '0661070604'),
(50, 'EL IDRISSI /IRRIDATA', 'el.chouaib1@gmail.com', 'DEVINR CLIENT', 'BONJOUR JE VIENS DE CREER MA BOITE DANS LE SECTEUR DE ENTRETIEN DES VOITURE SUR LA ZONE DE TANGER ET JE SUIS A LA RECHERCHE DDES FOURNISSEURES', NULL, '2022-10-13 16:31:48', '2022-10-13 16:31:48', '0635633818'),
(51, 'edy burak', 'edybur@edybur.net', 'HIGH PRO', 'good day , we manufacture ignition coils and ill be in Casablanca\r\ncan we have a meeting ??', NULL, '2022-10-16 12:35:30', '2022-10-16 12:35:30', '+1 954 993 2909'),
(52, 'PERLA AUTOLIBRE', 'PERLA.AUTOLIBRE@GMAIL.COM', 'Créer un compte', 'MERCI', NULL, '2022-12-13 09:31:22', '2022-12-13 09:31:22', '0678224242'),
(53, 'Marc Lin', 'marc.lin@ceradex.com.tw', 'Ceradex Taiwan--The EGT Sensor, O2 Sensor,  Air/Fuel Ratio, Wide Band Sensor Specialist', 'Ceradex Taiwan--The EGT Sensor, O2 Sensor,  Air/Fuel Ratio, Wide Band Sensor Specialist\r\n\r\nGood Day! My name is Marc Lin with Ceradex Sales department.\r\nWe are Taiwan Oxygen Sensor Manufacturer. Our main product lines include thimble oxygen sensor, planar oxygen sensor, air-fuel ratio sensor, and wideband sensor.\r\nIn 2019, we also announce our new product line – Exhaust gas temperature sensor(EGT) for diesel and turbo supercharge automotive.\r\nWe are few oxygen sensor provider that develop and manufacture the core ceramics elements for its sensors.\r\nOur advantage and strength is that we specialize in the oxygen sensor for over 25 years of experience.\r\nBelow is CERADEX Corporation brief introduction, for more information please visit our website: www.ceradex-sensor.com\r\n\r\n \r\n   Wide range application coverage\r\n   Over 20,000+ direct fit OEM referencing that cover automotive, motorcycle, and truck applications.\r\n   Over 200 connector to choose from.                                                                                                     \r\n   Specification in both universal and OEM direct fit.\r\n   Available applications for American, European, Japanese, Korean, and Chinese vehicles.\r\n\r\n   Advance technology\r\n   2019 NEW PRODUCT – EXHAUST GAS TEMPERATURE SENSOR\r\n   Thimble oxygen sensor – headed and unheated\r\n   Planar oxygen sensor – quicker start up timing and switch timing\r\n   Air-fuel ratio sensor – higher sensitivity and mileage saving (HOT!)\r\n   Wideband sensor – duel cell technology allowing all range lambda detection to meet higher standard of today’s emission. (HOT!)\r\n   M12 planar motorcycle sensor – high sensitive ceramic element encased in small packaging\r\n   Premium Quality\r\n   Patented core ceramic element achieve excellent signal response\r\n   Sensor components and raw materials are sourced from OEM suppliers\r\n   Member of AAIA\r\n   OEM and ODM supplier\r\n   IATF16949 certified (2019 UPDATE CERTIFICATION)\r\n   ISO9001 certified\r\n   CE certified\r\n   100% Quality inspection\r\n   In house designed quality control equipment calibrated by SGS and CLS.\r\n   100% functional and seal inspection before shipment to ensure highest quality\r\n   Excellent service\r\n   2 facilities and 2 export points in both Taiwan and China to ensure the quickest delivery time\r\n   Shipment consolidation flexibility\r\n   Tailored instruction sheet\r\n   Private labeling\r\n   Bar-coding\r\n   Leaflet\r\n   Product laser imprint\r\n\r\nIf any question or needed information, please don’t hesitate to contact me at marc.lin@ceradex.com.tw\r\n\r\n\r\nThank you!\r\nWish you have a grateful day!\r\n\r\nBest Regards,\r\n\r\nMarc Lin\r\nLIST\r\nCERADEX CORPORATION\r\nNo 1. Ruiyuan 1st St., Bade Dist.,\r\nTao Yuan City 334, Taiwan\r\nTel: +886.3.365.6878\r\nFax: +886.3.365.6879\r\nWebsite: www.ceradex-sensor.com\r\nEmail: marc.lin@ceredex.com.tw', NULL, '2022-12-22 06:33:59', '2022-12-22 06:33:59', '886-33656878'),
(54, 'Nouçair farah', 'farahnoucair@gmail.com', 'candidature spontanée', 'Étant à la recherche d’un emploi dans le domaine de génie industriel et maintenance j’ai l’honneur de vous soumettre ma candidature pour le stage au sein de département de production en répondant a votre demande  publié  sur linkedin. \r\n\r\nJe vous prie de trouver en pièce jointe mon curriculum vitae, en espérant qu’il trouve votre intérêt et de pouvoir défendre mon parcours lors d’un entretien.\r\n\r\nRestant à vos entière dispositions pour tout complément.\r\n\r\nJe vous remercie d’avance de l’intérêt que vous portez à ce message.\r\n\r\nBien cordialement,\r\n\r\nNouçair Farah\r\n\r\nIngénieur en génie industriel et maintenace', NULL, '2022-12-26 21:18:49', '2022-12-26 21:18:49', '0696590550'),
(55, 'UNIVERS DIAGNOSTIC MAROC', 'gheouanyounes@gmail.com', 'En compte', 'Je voudrais contacter votre commercial à BERRECHID', NULL, '2023-01-01 20:23:07', '2023-01-01 20:23:07', '0600936000'),
(56, 'Adrane Akram', 'akram.quark@gmail.com', 'Demande Adhesion', 'Demande Adhesion', NULL, '2023-01-04 21:54:00', '2023-01-04 21:54:00', '0708291962'),
(60, 'ELHOUDALI Auto', 'elhoudali84@gmail.com', 'DEVIS', 'Bonjour, j\'ai besoin de contacter un de vos commerciales', NULL, '2023-01-06 13:24:57', '2023-01-06 13:24:57', '0707290824'),
(61, 'ELHOUDALI Auto', 'elhoudali84@gmail.com', 'DEVIS', 'contact commercial', NULL, '2023-01-06 13:27:23', '2023-01-06 13:27:23', '0711492478'),
(62, 'kila', 'kila.hanafi01@gmail.com', 'demande de devien un client', 'bonjour ,\r\nj\'ai l\'honeur de postuler ma demande de devien un client je suis un entrepreneure des pieces auto et merci', NULL, '2023-01-06 19:46:13', '2023-01-06 19:46:13', '0607492972'),
(63, 'RAKHSANE -  ANAS', 'rakhsane112@gmail.com', 'Je suis intéressé pour dernier annonce de recrutement', 'Je suis un jeune homme âgé de 21 ans, diplômé en technico-commercial en vente de véhicules et pièces de rechange lauréat de l’ISTA et j\'ai effectué un stage 6 mois chez SOPRIAM en poste de conseiller commercial dans la période d\'étude, et actuellement je suis stagiaire de département Après-Vente AFRICA MOTORS chez Groupe Auto hall', NULL, '2023-01-09 19:56:53', '2023-01-09 19:56:53', '07 71 04 30 96'),
(70, 'BENZEKRI', 'mohcinebenzekrri@gmail.com', 'Quelques pièces intérieur Tucson Diesel 2007', 'Bonjour,\r\nJe suis à la recherche d\'une poignée intéreir de poste, un cache en plastique de poignée de soutien avant passager et d\'un cache en plastique de fixation d\'u siège avant pour mon Tucson Diesel de 2007, le tout de couleur beige.\r\n\r\nMerci d\'avance', NULL, '2023-01-10 11:31:59', '2023-01-10 11:31:59', '0636376975'),
(74, 'Muhammad Osama', 'muhammad.osama@gmail.com', 'Meeting Request: Potential Partnership for Auto Parts Distribution in Morocco', 'Dear Sir,\r\n\r\nWe hope this email finds you well. Our company, House of Habib, through its group companies is a leading manufacturer of auto parts in Pakistan. We specialize in producing a wide range of auto parts, from radiators and condensers to tubes and hoses, heater parts, sheet metal parts, bumpers, front grills, and many more products.\r\n\r\nWe will be visiting Morocco during 15th to 20th January, therefore we are writing to inquire about the possibility of connecting with your company to discuss the potential of selling our products in Morocco. As a well-established and reputable company in the auto parts industry, we believe that our products would be a valuable addition to your product range.\r\n\r\nWe understand that the Moroccan market is competitive, and we are confident that our products would stand out in terms of quality and competitive pricing. Our manufacturing facilities are equipped with the latest technologies and we have a team of experienced professionals who are dedicated to producing high-quality products that meet international standards.\r\n\r\nWe would be happy to schedule a meeting with you to discuss the possibilities of working together further. Please let us know if this is of interest to you and we will make arrangements accordingly.\r\n\r\nThank you for considering our company as a potential supplier. We look forward to hearing from you soon.\r\n\r\nSee below our Auto Parts companies:\r\n\r\nhttps://thalengg.com/\r\n\r\nhttps://www.agriauto.com.pk/\r\n\r\nhttps://auvitronics.com/https://auvitronics.com/\r\n\r\n\r\nBest regards,\r\n\r\nMuhammad Osama\r\nExport Division\r\nHouse of Habib', NULL, '2023-01-10 18:20:07', '2023-01-10 18:20:07', '+923218991620'),
(76, 'Ender KURUOGLU', 'enderkuruoglu@dgsauto.com', 'Request', 'MAGHREB ACCESSORIES', NULL, '2023-01-11 08:09:03', '2023-01-11 08:09:03', '00905343626669'),
(77, 'ben hicham', 'benhicham.fm@gmail.com', 'Achat des pièces de rechange', 'Je suis passionné par les voitures et j\'ai mis l\'accent sur la mécanique des véhicules, y compris les voitures bien sûr. \r\nEn fait, je ne suis pas professionnel, je suis propriétaire d\'une voiture particulière, et je possède un garage de réparation des automobile', NULL, '2023-01-12 12:27:07', '2023-01-12 12:27:07', '0662219670'),
(78, 'ulteos', 'badr@ulteos.com', 'Creation compte', 'Bonjour, prière de nous créer un compte pro SVP . merci', NULL, '2023-01-15 13:57:20', '2023-01-15 13:57:20', '0661177795'),
(79, 'HBIDEK Abderrahmane', 'hbide16@gmail.com', 'candidature spontanée', 'Bonjour\r\nMadame, monsieur ;\r\nJe suis un jeune commercial en lubrifiant et pièces de rechanges, avec une expérience de 5ans, diplômé technicien spécialisé en vente de véhicule et pièces de rechanges de ISTA-IE de Casablanca, actuellement je suis à la recherche d\'une nouvelle opportunité d’accrocher un poste . Conscient de l’engagement, et je suis prêt et déterminé à m’investir pleinement dans ce poste, je me tiens à votre disposition pour tout entretien que vous jugeriez utile à l’examen de ma candidature .\r\nEn vous remerciant par avance de votre attention, je vous prie de bien vouloir agréer, madame, monsieur, mes plus cordiales salutations.\r\nVous trouverez ci-joint ma candidature.\r\nCordialement', NULL, '2023-01-17 13:38:14', '2023-01-17 13:38:14', '0694596711'),
(80, 'Khettab', 'Khettabmedmo@gmail.com', 'Pieces ford fiesta 2016 tdci', 'Disques et plaquettes ford fiesta', NULL, '2023-01-24 16:39:48', '2023-01-24 16:39:48', '0662319266'),
(81, 'Youssef', 'affadassyoussef@gmail.com', 'Devenir un client', 'Quel sont les conditions pour acheter des piéces en gros', NULL, '2023-01-24 19:07:03', '2023-01-24 19:07:03', '0697840066'),
(82, 'ELHOUDALI Auto', 'elhoudali84@gmail.com', 'DEVIS', 'CATALOGUE  DE  PIECES', NULL, '2023-01-26 16:15:43', '2023-01-26 16:15:43', '0708655416'),
(83, 'Mohamed bouhlal', 'mohamedbouhlal33 @gmail.com', 'Client', 'Je suis client', NULL, '2023-01-27 15:14:57', '2023-01-27 15:14:57', '0661701656'),
(84, 'Loukehaich', 'loukehaich@gmail.com', 'Amortisseurs', 'Je cherche les 4 amortisseurs d\'une Dodge Avenger modèle 2010 type ACC6AAVENGER20L n° châssis 1B3ACC6AX8N216032.\r\nMerci', NULL, '2023-01-28 20:22:00', '2023-01-28 20:22:00', '0661071440'),
(85, 'Tinigur services dkl', 'massoud.helloul2@gmail.com', 'Demande', 'Je veux acheter des marchandises en gros, des pièces automobiles...', NULL, '2023-02-02 08:37:59', '2023-02-02 08:37:59', '0706020498'),
(90, 'Lahcen', 'Hassanelfarissi57@gmail.com', 'Vendeur de redaiteur et accessoires température', 'Mobile de comreciel region Marrakech et safi', NULL, '2023-02-03 13:58:13', '2023-02-03 13:58:13', '0602461877'),
(92, 'Tamer', 'jsondev255@gmail.com', 'Devenir Client', 'Achat des Filtres', NULL, '2023-02-04 16:40:43', '2023-02-04 16:40:43', '0666374292'),
(93, 'ETABLISSEMENT  BOUAZZA (SARL RENAULT DACIA ALHOCEIMA)', 'SAHBI.RENAULT@GMAIL.COM', 'achat des pièces', 'demande d\'ouverture  de compte', NULL, '2023-02-11 10:48:09', '2023-02-11 10:48:09', '0539841499/0668208116'),
(94, 'Promark', 'h.elmaghraoui@promark.ma', 'Demande de devis', 'Merci de me donner un devis pour des filtres pour une cadillac escalade 2022 v6 diesel', NULL, '2023-02-17 10:27:09', '2023-02-17 10:27:09', '0671988590'),
(96, 'aabdejlalil al.hachami', 'serenov55@gmail.com', 'demande de fournire', 'jai.un.nouveau magasain  pour piece auto je.veut de me.fournire', NULL, '2023-02-17 19:28:48', '2023-02-17 19:28:48', '0666512148'),
(97, 'Elhamdaoui', 'Salh_elhamdaoui@hotmail.com', 'Boîtier', 'Bonjour, je cherche boîtier pour Toyota prado tx model2018\r\nMerci', NULL, '2023-02-18 07:07:09', '2023-02-18 07:07:09', '0662769526'),
(98, 'Ammar', 'Ammar.badreddine@gmail.com', 'Demande tarif amortisseurs', 'Bonjour monsieur\r\nJ aimerai bien connaitre le prix des amortisseurs arriere et devant kia ceed 2008 \r\nCordialement', NULL, '2023-02-18 10:33:31', '2023-02-18 10:33:31', '0660376874'),
(99, 'CENTRE JURIDIQUE DROIT ET DEVOIR', 'rec.expert@cjdd.ma', 'Proposition de service en matière de recouvrement des créances', 'Nous sommes une entreprise spécialisée dans le recouvrement des créances et nous proposons nos services pour vous aider à récupérer les sommes qui vous sont dues.\r\n\r\nNotre équipe a expérimenté en place une stratégie efficace pour récupérer vos créances de manière rapide et professionnelle. Nous travaillons de manière transparente et respectons les règles et les normes éthiques en matière de recouvrement des créances.\r\n\r\nNos services comprennent la gestion des relances téléphoniques et écrites, la négociation de paiements échelonnés, la médiation avec les débiteurs et la gestion des contentieux.\r\n\r\nNous proposons également des services personnalisés adaptés à vos besoins spécifiques. Nous pouvons mettre en place des rapports réguliers sur l\'état d\'avancement de notre travail et nous sommes disponibles pour répondre à toutes vos questions.\r\n\r\nN\'hésitez pas à nous contacter pour discuter de vos besoins en matière de recouvrement des créances. Nous serions ravis de travailler avec vous pour récupérer les sommes qui vous sont dues.\r\n\r\nCordialement,', NULL, '2023-02-20 10:28:58', '2023-02-20 10:28:58', '0661830702'),
(100, 'Hicham', 'dyaloguer69@gmail.com', 'Demande d\'adhesion', 'Je vous prie de bien vouloir accorder mon adhesion a votre site pour utilisation professionnelle', NULL, '2023-02-23 09:17:25', '2023-02-23 09:17:25', '0600726840'),
(101, 'SAID EL GHAZI', 'Steizricars@gmail.com', 'DEVENIR CLIENT', 'DEVENIR CLIENT', NULL, '2023-02-25 16:28:49', '2023-02-25 16:28:49', '0619490903'),
(102, 'ste carross', 'carross2021@gmail.com', 'client', 'merci d4accepter mon inscription', NULL, '2023-02-27 10:41:28', '2023-02-27 10:41:28', '0667650307'),
(103, 'mouala zakaria', 'mouala.zakaria@gmail.com', 'demande de franchise', 'd après l experience de 9ans + les etudes supérieur que au domaine d automobile, maintenant et c est le moment de développé cette  experience et  les connaissances, et pour cela j aimerais lancé cette activité. d après une etude optimale j arrive enfin a trouver la zone ou je vais  exploité le projet, un secteur vierge au meme temps fort, plus de 80 location de voiture plus de 40 auto école et un moyen 20 véhicule immatricule a la province mensuelle. c est l occasion maintenant ou jamais. un bon local une bonne localisation, expérience, relation, compétence, vision.. tous cela est la clé de réussirai ce projet et garantie le gain.', NULL, '2023-02-28 16:54:06', '2023-02-28 16:54:06', '0600818470'),
(104, 'Paul Bae', 'baebyunghoo@iljin.com', 'ILJIN GLOBAL BEARUNG', 'Good day Sir\r\n\r\nThis is Paul from ILJIN GLOBAL. It is nice to contact you.\r\nWe are ILJIN GLOBAL who is producing Wheel Bearings in OE & AM\r\nI think you have heard our company or brand before.\r\n\r\nI would like to know if you are interested ILJIN products that has more than 30% market share in OE field.\r\nI believe you have heard this brand who is a main supplier of Hyundai/Kia/Mobis factory.\r\nRecently, we are the biggest partner of European & American car makers as well. We beat SNR SKF Schaeffler in many car models.\r\n\r\nP\r\nThere is no official dealer in your country yet. So, I think this is very good opportunity.\r\nIf you can let me know purchasing team contact (email or phone), please let me know\r\n\r\nThank you in advance ! Looking forward to hearing from you soon.', NULL, '2023-03-02 03:50:55', '2023-03-02 03:50:55', '+82 10 7373 6863'),
(105, 'Elasri', 'elasrimoncef@gmail.com', 'Savoir vos produits au niveau de la carrosserie des voitures', 'Moi j\'ai un magasin des accessoires a salé je cherche à travailler la carrosserie c\'est pour ça je vous ai contacter pour savoir vos produits', NULL, '2023-03-02 06:41:08', '2023-03-02 06:41:08', '0675222860'),
(106, 'youssefeddaoudi', 'youssefeddaoudi@gmail.com', 'devenir client', 'bnj j ai un local commercial   a errachidia  aoufous  et ja i des produit auto plus', NULL, '2023-03-03 18:06:48', '2023-03-03 18:06:48', '0661693488'),
(107, 'Ste transmission al buraq', 'Transmissionalburaq23@gmail.com', 'Demande', 'Bonjour \r\nS’il vous plus chercher nemro de commercial', NULL, '2023-03-04 07:12:39', '2023-03-04 07:12:39', '0619600166'),
(108, 'MOHAMMED BENBOUYA', 'benbouyamohammed@gmail.com', 'OUVERTURE DE COMPTE', 'NOUS SOMME UNE SOCIETE DONT L ACTIVITE EST LA REPARATION MECANIQUE ET TOLORERIE ET MARCHANT DE PIECES AUTO . NOUS VOULONS DEVLOPPER NOTRE ENGAGEMENT ENVERS NIOTRES CLIENT S POUR CELA NOUS AVONS ADRESSER VERS VOTRE ORGANISME .J AI VOULUS SAVOIR LES CONDITIONS POUR CREER CETTE COLABORATION\r\nCORFIALEMENT', NULL, '2023-03-05 12:48:28', '2023-03-05 12:48:28', '0626138655'),
(109, 'Ferchach', 'akuir-vert@hotmail.fr', 'Nouveau client', 'Salem .\r\nJ\'attends votre appel téléphonique.j\'aimerais bien travaillé avec auto plus.. cordialement', NULL, '2023-03-07 19:35:10', '2023-03-07 19:35:10', '0614093987'),
(110, 'الزاهري نزهة', 'zahirinazha2@gmail.com', 'العمل', 'السلام انا اسمي نزهة العمر 25 سنة اريد العمل معكم في شركة مغرب اكسسوار', NULL, '2023-03-08 03:29:42', '2023-03-08 03:29:42', '0761650255'),
(164, 'Said', 'Rinadehiho@gmail.com', 'Tr', 'Rt', NULL, '2023-03-09 08:18:02', '2023-03-09 08:18:02', '0654802512'),
(166, 'Younes', 'younesunes119@gmail.com', 'Acheter des pieces', 'Mrc pour le site', NULL, '2023-03-11 06:44:05', '2023-03-11 06:44:05', '0603956614'),
(169, 'Marketparts', 'matthieu@marketparts.com', 'Fournisseur', 'Bonjour,\r\nComment devenir fournisseur de Maghreb accessoires ?', NULL, '2023-03-19 10:00:46', '2023-03-19 10:00:46', '0033629627452'),
(171, 'CHAKRAM', 'hatim.chakram@gmail.com', 'amortisseur KYB 348031', 'Bonjour, svp je suis un particulier a la recherche des amortisseurs KYB 348031, plusieurs vendeur de pieces me disent qu\'ils ne sont pas disponible et ils sont en rupture de stock, j\'ai checke le staut t des amortisseurs sur le catalogue KYB et ils s\'est avere que l\'etat de production est normlae, priere de m\'aider afin que je puisse iobtenir les amortisseurs en m\'indiquant un venduer de pieces qui a ces amortisseurs en stock.', NULL, '2023-03-21 21:58:27', '2023-03-21 21:58:27', '0677822923'),
(172, 'BOURAADA KHALID', 'khbouraada@gmail.com', 'Reclemation', 'Bonjour, je vous prie de prendre en considération ma présente réclamation de de m\'avoir vendu une batterie VERTA  qui a une défaut de charge à l\'agence de Fès Maroc, et après réclamation, on a changer cette batterie par une autre, mais après un certain temps, cette batterie changé présente aussi les même problèmes de défaut de charge après vérification de ce défaut à l\'agence de Fès. \r\nPrière de me changer cette batterie par une une autre qui ne présente pas de défaut de charge.\r\nN.B. : ma voiture Hyandai IX35 et en très bonne état et sans aucuns défaut', NULL, '2023-03-26 17:35:25', '2023-03-26 17:35:25', '0661519947'),
(173, 'SBEAI company', 'info.sbeai@gmail.com', 'Demande d ouverture de compte', 'Bonjour', NULL, '2023-03-27 17:46:31', '2023-03-27 17:46:31', '0617897636'),
(174, 'Youssef', 'yousseflegnaoui@gmail.com', 'Pare-choc citroën c4 modele 2014', 'Salut je cherche un pare-choc citroën c4 modele 2014 avont', NULL, '2023-03-28 01:19:17', '2023-03-28 01:19:17', '0661690819'),
(176, 'Abdesselam MAATOUGUI', 'maatougui@hotmail.com', 'Demande d\'information', 'Bonjour\r\nComment pouvoir acheter sur votre site des pièces auto', NULL, '2023-03-31 11:49:49', '2023-03-31 11:49:49', '0661367147'),
(177, 'Laurence Roch société p-invest', 'lroch73@gmail.com', 'Demande de partenariat', 'Bonjour\r\nNous sommes propriétaire d\'une station service TotalEnergies à bouskoura et souhaitons ouvrir un espace entretien voiture.\r\nNous serions intéressés pour vous rencontrer et savoir comment lier un partenariat.\r\nMerci et bonne journée', NULL, '2023-03-31 16:23:51', '2023-03-31 16:23:51', '0666033354'),
(178, 'Mohamed Mbodji', 'momombodji9@gmail.com', 'DEmande Urgente', 'Bonjour, j\'espère que vous vous portez bien, je suis à la recherche de certaines pièces pour une Range Rover Sport 2014 Essence ( VIN:SALWR2WF2EA313858 ). Voilà liste:\r\n- 1 vilebrequin\r\n- 1 pompe à  huile\r\n- 1 jeu coussinets bielle\r\n- 1 jeu coussinets pallier\r\n\r\nMerci de me communiquer la disponibilité et le prix svp.', NULL, '2023-04-06 13:31:34', '2023-04-06 13:31:34', '0660030736'),
(179, 'Laurence Roch société pinvest', 'lroch73@gmail.com', 'Demande rdv commercial pour réseau de distribution', 'Monsieur bonjour\r\nNous somme propriétaire d\'une station service TotalEnergies à bouskoura et cherchons à mettre en place un partenariat avec votre société afin d\'en distribuer les produits.\r\nMerci de votre repo se\r\nBonne journée', NULL, '2023-04-06 14:59:14', '2023-04-06 14:59:14', '0666033354'),
(180, 'Jnfcompany', 'Abidnourdine13@gmail.com', 'Devis', 'NOUS SOLLICITONS PAR LA PRÉSENTE  DE BIEN VOULOIR ÉTUDIER LA POSSIBILITÉ DE COLLABORER AVEC NOTRE ENTREPRISE POUR L\'OUVERTURE DE COMPTE CHEZ VOTRE SOCIÉTÉ .\r\n\r\nNOUS PORTONS À VOTRE CONNAISSANCE QUE NOTRE ENTREPRISE EST EN ACTIVITÉ DEPUIS PLUS DE 7 ANS, DISPOSE D’UNE EXPERTISE DANS LE MÉTIER, DES MOYENS HUMAINS ET TECHNIQUES.\r\n\r\nNOTRE PRÉOCCUPATION PRINCIPALE EST DE SERVIR AU MIEUX NOTRE CLIENTÈLE ET ÊTRE À LA HAUTEUR DES ATTENTES DE NOS PARTENAIRES', NULL, '2023-04-06 22:23:54', '2023-04-06 22:23:54', '0661111990'),
(184, 'Hamid', 'simsimaj83@gmail.com', 'الضمان', 'لدي ضمان لبطارية اشترتها من متجر بعد مدة من استعمالها اتضح انه انها لاتعمل   ذهبت لتقني في \r\n  اما بالنسبة لتاجر لم يريد تغيرها مع اني لدي ضمان  المرجو حل هذا المشكل في اقرب وقت كهربائي السيارات واتضح ان مشكل من البطارية  ا', NULL, '2023-04-11 00:40:07', '2023-04-11 00:40:07', '0629343440'),
(195, 'TK services Bosch Car Services 2 Mars', 'Contact.Tkservices@gmail.com', 'Demande d’adhésion', 'Nous sommes un Atelier Bosch Car Services, sis à Casablanca, quartier 2Mars \r\nMerci de traiter notre demande d’adhésion à votre plate-forme et voir la possibilité d’ouvrir Un compte avec vous.\r\nPour plus d’informations merci de prendre contact avec Mme Zineb numéro déjà mentionné ci-dessus.\r\nMerci d’Avance.\r\nCrdt.', NULL, '2023-04-16 11:18:13', '2023-04-16 11:18:13', '0661850146'),
(197, 'Said khadmaoui', 'hereboy191@gmail.com', 'Acheter les articles chez vous', 'Acheter les articles chez vous', NULL, '2023-04-16 20:06:22', '2023-04-16 20:06:22', '0668416554'),
(198, 'Abdelkarim Msaad', 'msaad.karim@gmail.com', 'Dévenir un partenaire (Revendeur)', 'Bonjour,\r\nPouvez vous me contacter de retour, dès que possible pour discuter mon projet de partenariat .\r\n\r\nMille merci', NULL, '2023-04-17 04:15:16', '2023-04-17 04:15:16', '0666755032'),
(200, 'mehdi yakhlef', 'yakhlefmehdi@gmail.com', 'Adhésion', 'Adhésion', NULL, '2023-04-18 13:38:43', '2023-04-18 13:38:43', '0666995077'),
(201, 'KHALID HITITE', 'hitite15kh@gmail.com', 'Nouvelles collaboration', 'Bonjour \r\nJe souhaite avoir des renseignements pour une nouvelle collaboration', NULL, '2023-04-19 23:00:16', '2023-04-19 23:00:16', '0662131098'),
(202, 'hellen wang', 'sinson@sc-sinson.com', 'Power Steering Pump - OEM supplier of Daimler AG - Benz', 'Dear, Please kindly pass this messge to your Purchasing Manager, thanks a lot!\r\n\r\nintroducing ourselves as an experienced Power Steering Pump supplier in China, our factory is OEM supplier to Daimler AG-BENZ, MAN Germany, Sinotruk, YUCHAI, DAYUN...etc, kindly build connection with you for any possible cooperation.\r\nwe have wide range of applications for trucks, cars, buses...etc, if you consider to involve more products in your \"KSW\" brand, kindly take us into consideration, our OEM quality PSP (more than 3000 items ) might be a good supplement in your category.\r\nthanks for your time!\r\nhellen wang\r\nmob. / whatsapp/wechat:+86 13340988676', NULL, '2023-04-20 08:55:23', '2023-04-20 08:55:23', '+8613340988676'),
(203, 'salah eddine', 'sbary5@gmail.com', 'demande de devis (Pièce d\'occasion)', 'j\'ai l\'honneur de vous demander de bien vouloirme faire parvenir votre devis relatif à la fourniture de :1- grille par choc av2- masque AV3- Logo d\'avant SKODA4- Par choc AR5- Feu AR/ D/Gpour ma voiture SKODA, Rapid Model 2015, diésel\r\n\r\nMes salutations les meilleures\r\nSalah Eddine\r\n0666 58 61 89', NULL, '2023-04-20 10:42:23', '2023-04-20 10:42:23', '0666586189'),
(204, 'youssef', 'youssefbriri@gmail.com', 'renseignement à propos de la disponibilité d\'un rétroviseurs fiat panda essence', 'Bonjour, je cherche SVP un rétroviseurs droite pour une fiat panda modèle 2017 essence manuelle est ce qu\'il est disponible chez vous ?', NULL, '2023-04-20 21:44:34', '2023-04-20 21:44:34', '0610755180'),
(205, 'OMAR ABOULAS', 'Aboulaso@trasmediterranea.es', 'Compresseur Climatisation', 'Bonsoir,\r\nJe souhaite savoir si la pièce Compresseur, climatisation CSE613C est disponible (BMW E90 318i modèle 2011)', NULL, '2023-04-21 21:51:13', '2023-04-21 21:51:13', '0618533367'),
(206, 'Elammary', 'elammarymohamed1@gmail.com', 'Baie de pare-brise', 'Je cherche le baie de pare-brise de 308 2012\r\nMerci en avance', NULL, '2023-04-24 10:54:06', '2023-04-24 10:54:06', '0696640834'),
(207, 'Mohcine Taleb', 'tmohcine@gmail.com', 'Besoin de crémaillère neuve', 'Besoin crémaillère neuve pour bmw serie 5 e60 de 2006 réf oem 32104043589', NULL, '2023-04-26 21:24:51', '2023-04-26 21:24:51', '0684195784'),
(209, 'HAMDAOUI Abdessadek', 'hamdaoui.ofppt@gmail.com', 'DEMANDE D\'ADHESION', 'Bonjour,\r\nJe vous contact pour vous demander de bien vouloir m\'adhérer à votre réseau des professionnels. \r\nCordialement.', NULL, '2023-04-27 12:43:44', '2023-04-27 12:43:44', '0708832350'),
(215, 'HAMDAOUI Abdessadek', 'hamdaoui.ofppt@gmail.com', 'DEMANDE D\'ADHESION', 'Bonjour,\r\nJe vous contact pour vous demander de bien vouloir d\'adhérer à votre réseau des professionnels.\r\nCordialement', NULL, '2023-04-27 14:06:15', '2023-04-27 14:06:15', '0708832350'),
(216, 'EZZAKANI', 'kimokamal1222@gmail.com', 'Client', 'Ravie de contacter le service client', NULL, '2023-04-30 21:43:27', '2023-04-30 21:43:27', '0610597251'),
(217, 'ayman', 'aymanoall67@gmail.com', 'cherche piece automobile', 'pieace auto volksagen passat', NULL, '2023-05-04 12:04:07', '2023-05-04 12:04:07', '0603480020'),
(218, 'khayi soufyane', 'soufyanekhayi@gmail.com', 'création compte', 'salut', NULL, '2023-05-04 16:44:34', '2023-05-04 16:44:34', '0600295679'),
(219, 'ELHOUDALI  mehdi', 'elhoudali84@gmail.com', 'adhésion', 'je suis entrepreneur pieces auto elhoudali j veux faire adhésion chez vous et je veux appliquer votre application pour lvos références', NULL, '2023-05-12 15:50:05', '2023-05-12 15:50:05', '0708655416'),
(220, 'GLOBAL AUTO BUSINESS', 'info@globalautobusiness.ma', 'Demande d\'ouverture', 'Bonjour \r\n\r\nNous sommes un distributeur de pneumatique\r\nSur mohammedia. \r\nOn a de la vente directe dans notre atelier. \r\nOu en ligne sur le site www.opneu.ma \r\nAvec montage et vidange aussi à domicile. \r\nJe veux ouvrir un.compte revendeur chez vous .\r\nMerci de m\'indiquer les procédures à suivre. \r\n\r\nCdt\r\n\r\n0670 35 15 37', NULL, '2023-05-12 18:36:34', '2023-05-12 18:36:34', '0670351537'),
(221, 'hamza', 'mizomejd@gmail.com', 'pieces', 'auto ford', NULL, '2023-05-15 22:44:15', '2023-05-15 22:44:15', '0622058346'),
(226, 'Wafi', 'chafieilham88@gmail.com', 'Amortisseur', 'Prix amortisseur', NULL, '2023-05-22 10:33:20', '2023-05-22 10:33:20', '0636912799'),
(228, 'benlamlih mohamed', 'anabenlamlih@msn.com', 'demande d\'hadesion', 'je vous pris de bien vouloir me compter parmis vos clients\r\nbien a vous', NULL, '2023-05-22 14:49:40', '2023-05-22 14:49:40', '0661072363'),
(230, 'benlamlih mohamed', 'anabenlamlih@msn.com', 'demande d\'hadesion', 'je vous pris de bien vouloir me compter parmis vos clients', NULL, '2023-05-22 14:55:27', '2023-05-22 14:55:27', '0661072363'),
(257, 'AYOUB', 'imtservicescasa@gmail.com', 'CREATION DE COMPTE', 'Bonjour, \r\nnous sommes un atelier a dar bouazza, nous aimerons ouvrir compte avec vous pour pièces de rechanges.\r\nCordialement', NULL, '2023-05-24 12:30:30', '2023-05-24 12:30:30', '0667606341'),
(258, 'lisynord sarl', 'lisynord.sarl@gmail.com', 'DEVENIR  CLIENT', 'Priére de nous communiquer les conditions pour devenir client', NULL, '2023-05-24 15:35:34', '2023-05-24 15:35:34', '0701099867'),
(260, 'Qodad', 'mqodad@gmail.com', 'Achat pièce', 'Je suis intéressé', NULL, '2023-05-24 20:28:20', '2023-05-24 20:28:20', '06 30 08 39 98'),
(262, 'Gad Trading', 'gadtradingbusiness@gmail.com', 'Création de compte', 'Madame, Monsieur, Par la présente j\'ai l\'honneur de vous demander d\'ouvrir un compte . Je vous remercie de bien me faire parvenir les documents nécessaires à cette demande. Je reste naturellement à votre disposition pour tout complément d\'information me concernant.', NULL, '2023-05-26 15:47:41', '2023-05-26 15:47:41', '0603795676'),
(263, 'EXPRESS AUTO SERVICES', 'easpneus@gmail.com', 'DEMANDE DOUVERTURE DE COMPTE .', 'DEMANDE DOUVERTURE DE COMPTE .', NULL, '2023-05-27 15:24:18', '2023-05-27 15:24:18', '0670934005'),
(267, 'Afkir ali', 'ali.afkir@gmail.com', 'Durite', 'Bonjour\r\nEst ce que vous avez la durite renault latitude version 8200551943', NULL, '2023-05-28 18:37:37', '2023-05-28 18:37:37', '0661393385'),
(269, 'TOPRAK Kagan', 'export@brakingtech.com', 'Fournisseur', 'Bonjour, \r\nnous sommes une compagnie en Turquie vendant des pièces de rechange des freins pour poids lourds avec notre marque Brakingtech. \r\nVous pouvez voir nos produits et notre catalogue en ligne sur notre site internet: \r\n\r\nwww.brakingtech.com \r\n\r\nN\'hesitez pas de nous contacter pour toutes questions.\r\n\r\nBonne journée.', NULL, '2023-05-31 05:43:12', '2023-05-31 05:43:12', '+2324785657'),
(283, 'Marc Lin', 'marc.lin@ceradex.com.tw', 'Ceradex Taiwan--The Air/Fuel Ratio, Wide Band Sensor, O2 Sensor,  EGT Sensor Specialist', 'Good Day! My name is Marc Lin with Ceradex Sales department.\r\nWe are Taiwan Oxygen Sensor Manufacturer. Our main product lines include thimble oxygen sensor, planar oxygen sensor, air-fuel ratio sensor, and wideband sensor.\r\nIn 2019, we also announce our new product line – Exhaust gas temperature sensor(EGT) for diesel and turbo supercharge automotive.\r\nWe are few oxygen sensor provider that develop and manufacture the core ceramics elements for its sensors.\r\nOur advantage and strength is that we specialize in the oxygen sensor for over 25 years of experience.\r\nBelow is CERADEX Corporation brief introduction, for more information please visit our website: www.ceradex-sensor.com\r\n\r\n \r\n   Wide range application coverage\r\n   Over 20,000+ direct fit OEM referencing that cover automotive, motorcycle, and truck applications.\r\n   Over 200 connector to choose from.                                                                                                     \r\n   Specification in both universal and OEM direct fit.\r\n   Available applications for American, European, Japanese, Korean, and Chinese vehicles.\r\n\r\n   Advance technology\r\n   2019 NEW PRODUCT – EXHAUST GAS TEMPERATURE SENSOR\r\n   Thimble oxygen sensor – headed and unheated\r\n   Planar oxygen sensor – quicker start up timing and switch timing\r\n   Air-fuel ratio sensor – higher sensitivity and mileage saving (HOT!)\r\n   Wideband sensor – duel cell technology allowing all range lambda detection to meet higher standard of today’s emission. (HOT!)\r\n   M12 planar motorcycle sensor – high sensitive ceramic element encased in small packaging\r\n   Premium Quality\r\n   Patented core ceramic element achieve excellent signal response\r\n   Sensor components and raw materials are sourced from OEM suppliers\r\n   Member of AAIA\r\n   OEM and ODM supplier\r\n   IATF16949 certified (2019 UPDATE CERTIFICATION)\r\n   ISO9001 certified\r\n   CE certified\r\n   100% Quality inspection\r\n   In house designed quality control equipment calibrated by SGS and CLS.\r\n   100% functional and seal inspection before shipment to ensure highest quality\r\n   Excellent service\r\n   2 facilities and 2 export points in both Taiwan and China to ensure the quickest delivery time\r\n   Shipment consolidation flexibility\r\n   Tailored instruction sheet\r\n   Private labeling\r\n   Bar-coding\r\n   Leaflet\r\n   Product laser imprint\r\n\r\nIf any question or needed information, please don’t hesitate to contact me at marc.lin@ceradex.com.tw\r\n\r\n\r\nThank you!\r\nWish you have a grateful day!\r\n\r\nBest Regards,\r\n\r\nMarc Lin\r\nLIST\r\nCERADEX CORPORATION\r\nNo 1. Ruiyuan 1st St., Bade Dist.,\r\nTao Yuan City 334, Taiwan\r\nTel: +886.3.365.6878\r\nFax: +886.3.365.6879\r\nWebsite: www.ceradex-sensor.com\r\nEmail: marc.lin@ceredex.com.tw', NULL, '2023-06-02 04:41:04', '2023-06-02 04:41:04', '886-633656878'),
(290, 'Mbks trans', 'Mbks.trans@gmail.com', 'Achat de pièces mercedes sprinter+ renault master', 'Bonjour on est une société de transport du personnel basé à tanger, nois avons besoin de tous les produits concernant la Mercedes sprinter et Renault master , vito, lodgy, express', NULL, '2023-06-04 08:49:48', '2023-06-04 08:49:48', '0660219697'),
(292, 'LAKHAL', 'contact@medtechnoconception.com', 'soufflet de camion', 'Bonjour j\'ai besoin des soufflets de camion qte 100', NULL, '2023-06-06 21:21:03', '2023-06-06 21:21:03', '0662362121'),
(293, 'Smart drive pieces et services', 'smartdrive.ps@gmail.com', 'Demande d\'information', 'Merci de me mettre en contact avec un commercial serteur lala meriem', NULL, '2023-06-07 10:28:24', '2023-06-07 10:28:24', '0633513412'),
(296, 'Smart drive pieces et services', 'smartdrive.ps@gmail.com', 'Demande d\'information', 'Merci de me mettre en contact avec un commercial secteur lala meriem', NULL, '2023-06-07 10:29:28', '2023-06-07 10:29:28', '00212633513412'),
(298, 'OMAC FRANCE SAS', 'O.PEKPAZAR@OMACSHOP.COM', 'OMAC FRANCE SAS PARIS automotive accesoires', 'Bonjour,\r\n\r\nIts Onur Pekpazar from OMAC Global, we are manufacturer of chrome, aluminum and rubber automotive accessories. We would like to offer you our barre de toit, marche pieds and inox products from our France company OMAC FRANCE located in Paris (5 minutes from CDG Airport) \r\n\r\nWe are a 27 years old manufacturer company with USA, Germany, France distribution warehouses.\r\n\r\nPlease see some of our links to see some of our products and let us know if you would be interested in selling our products in Morocco market.\r\n\r\nhttps://omacshop.fr/collections/barres-de-toit-longitudinales\r\n\r\nhttps://omacshop.fr/collections/accoudoir-central-et-couvercle-daccoudoir\r\n\r\nhttps://omacshop.fr/search?q=marche+pied+pedal&options%5Bprefix%5D=last&type=product\r\n\r\nhttps://omacshop.fr/collections/barres-de-toit-transversales\r\n\r\nhttps://omacshop.fr/collections/garniture-chromee\r\n\r\n\r\nRegards,\r\nOnur PEKPAZAR\r\nBusiness Development Director\r\n\r\nOMAC USA Inc.\r\nGuhn Rd, Ste. 300\r\nHouston TX 77040\r\nUnited States\r\nwww.omacshop.com\r\n\r\nOMAC GmbH                                                                            \r\nSüdstr. 48, 44625\r\nHerne Deutschland\r\nwww.omacshop.de\r\n\r\nOMAC FRANCE SAS\r\nSegro Park Le Thillay\r\nBatiment 1.4. 95500\r\nParis France\r\nwww.omacshop.fr', NULL, '2023-06-07 16:09:04', '2023-06-07 16:09:04', '+1 415 6851409'),
(300, 'qarouani el mostafa', 'qarouani@hotmail.fr', 'achat et devis', 'merci pour votre collaboration', NULL, '2023-06-08 10:01:48', '2023-06-08 10:01:48', '0662022690'),
(301, 'youness bakrim', 'younes8it@gmail.com', 'job application', 'i have the honor to ask your high benevolence to accept my candidacy.\r\ni am YOUNESS BAKRIM . INTERESTED IN THE ACTIVITIES OF YOUR COMPANY\' i allow myself to submit my present application for a possible position in your team \r\n\r\ni beg you to believe sir the expression of my sincere greetings', NULL, '2023-06-09 13:18:16', '2023-06-09 13:18:16', '0603386734'),
(302, 'MON BATTERIE DISTRIBUTION', 'monbatterie@gmail.com', 'inscription client', 'bonjour\r\n pouviez vous m\'indique sur la procédure d\'ouvrir un compte client chez vous \r\nmerci', NULL, '2023-06-09 17:28:46', '2023-06-09 17:28:46', '0708474004'),
(303, 'BENMESSAOUD LEFT DRISS', 'benmessaoudleftdriss@gmail.om', 'demande d\'information', 'Bonjour Madame,Monsieur \r\nJe souhaire savoir si les amortisseurs avant de Nissan Micra K14 - Diesel sont disponible ainsi que les freins disques. Merci de m\'envoyer le prix . \r\nCordialemnt,', NULL, '2023-06-12 15:52:49', '2023-06-12 15:52:49', '0690943989'),
(304, 'Test', 'sifeddine.borja@maghrebaccessoires.com', 'Test', 'Test', NULL, '2023-06-13 09:32:28', '2023-06-13 09:32:28', 'Test'),
(305, 'Redouane El isaoui', 'elisaoui@gmail.com', 'Piece Auto', 'Je voudrai confirmer si vous avez les piece suivant :\r\n\r\n43512-06200\r\n\r\n04466-0E070\r\n\r\nG9510-33110\r\n\r\n47850-06160\r\n\r\n47822-06160\r\n\r\nG951033110\r\n\r\n43420-06B41\r\n\r\n48790-06010\r\n\r\n45470-09180\r\n\r\n48830-06090\r\n\r\n43212-06250\r\n\r\n48815-06260\r\n\r\n48818-06330\r\n\r\n48820-06100\r\n\r\nMerci', NULL, '2023-06-16 04:03:01', '2023-06-16 04:03:01', '5148367147'),
(306, 'Sergey Skachkov', 'tmtriocom@gmail.com', 'offre de partenariat', 'Cher Monsieur/Madame,\r\nNous sommes une entreprise ukrainienne qui produit des radiateurs infrarouges FAR muraux innovants avec image sur le devant. Nos appareils de chauffage ont été TRÈS populaires en Europe et dans d\'autres pays en raison d\'une qualité fiable, mais toujours d\'un prix TRÈS abordable (le prix unitaire commence à partir de 14 USD). Ces appareils de chauffage sont utiles pour les humains et TRÈS économiques. Nous croyons fermement que notre rapport qualité (utilisabilité)/prix est la base de notre succès. En ce moment, nous recherchons des partenaires/distributeurs qui nous aideront à pénétrer de nouveaux marchés. Nous pouvons proposer vos propres images sur le devant, il peut s\'agir du logo de votre entreprise, de votre devise, il peut également s\'agir d\'images de la nature, de bâtiments célèbres, etc. Ce produit possède un certificat CE qui garantit une haute qualité. Nous produisons également d\'autres types de produits qui peuvent être intéressants pour les acheteurs internationaux. Si vous êtes intéressé, veuillez nous contacter pour plus d\'informations.\r\n\r\ncordialement,\r\n\r\nSergey Skachkov\r\n\r\nTrio Ukraine LLC\r\n\r\nwww.tmtrio.com\r\n\r\n+38 063 231 3505 (whatsapp, viber, telegram)', NULL, '2023-06-19 10:46:54', '2023-06-19 10:46:54', '+380632313505'),
(307, 'CHOUKI Youness', 'youness.chouki.bac@gmail.com', 'Recherche d\'un stage PFA en service logistique', 'Bonsoir,\r\nC\'est CHOUKI Youness, élève ingénieur en deuxième année génie industriel et logistique à l’école normale supérieure de l\'enseignement technique ENSET-Mohammedia.\r\nJe suis à la recherche d\'un stage PFA pour le mois 7 et 8 en service logistique.\r\nJe me tiens à votre disposition pour tous renseignements complémentaires et vous prie d’agréer, Madame, Monsieur, l’expression de mes respectueuses salutations.\r\nMerci.', NULL, '2023-07-01 17:32:20', '2023-07-01 17:32:20', '0628391664'),
(308, 'TALBI', 'brahim.talbi.it@gmail.com', 'Alternateur Valeo référence 9646321780', 'Merci de bien vouloir me communiquer votre meilleure offre de prix pour la fourniture d\'un alternateur Valeo référence 9646321780 CL 15 12V', NULL, '2023-07-03 04:27:35', '2023-07-03 04:27:35', '0661282713'),
(312, 'Goudass abdelilah', 'Waelabdilah100@gmail.com', 'Chauffeur B.D', 'J\'ai le plaisir de vous soumettre respectueusement ma demande d\'obtention d\'un emploi de chauffeur.Je suis pirmi B.D et je tiens à vous informer que je suis un jeune marocain casablanca de 40 ans, marié, au chômage, et le seul soutien de famille pour mon J\'ai déjà travaillé comme chauffeur dans plusieurs domaines, je voudrais donc vous demander de m\'inclure dans Travailler avec vous, que Dieu vous récompense.\r\n J\'espère que le Dieu Tout-Puissant réussira et obtiendra votre approbation de ma demande, et je promets de faire tout ce que j\'ai d\'effort et d\'énergie pour être comme vous pensez bien de moi, et que Dieu nous aide et vous aide à servir notre cher pays\r\n Monsieur, veuillez accepter mon respect et ma reconnaissance.', NULL, '2023-07-11 09:41:54', '2023-07-11 09:41:54', '0610030676'),
(313, 'Mourad En amrani', 'elamranimourad465@gmail.com', 'Demande client', 'Je suis un mécanicien je veux devenir un nembre de votre groupe', NULL, '2023-07-13 20:24:05', '2023-07-13 20:24:05', '0628460479'),
(314, 'HAMZA', 'mr.makroum.hamza@gmail.com', 'cache moteur bas', 'Bonjour,\r\nEst ce que la cache sous moteur honda jazz 1.3 2005 est disponible ?\r\nmerci\r\ncordialement', NULL, '2023-07-13 21:46:22', '2023-07-13 21:46:22', '0600407583'),
(316, 'MAKROUM', 'mr.makroum.hamza@gmail.com', 'Demande devis', 'Bonjour,\r\n\r\nJe suis commerçant, vous pouvez m\'envoyer les prix pour :\r\nANTIGEL VALEO 5L\r\nHuile WOLF 5L 10w40, 5w40, 5w30\r\nMerci\r\n\r\ncordialement', NULL, '2023-07-13 21:53:32', '2023-07-13 21:53:32', '0672668313'),
(317, 'Lambda Automotive S.L.', 'francisco.mohedano@lambdamotive.com', 'Synergie', 'Bonjour,\r\nJe suis Francisco Mohedano de Lambda Automotive, technicien commercial de l\'entreprise.\r\n\r\nNous sommes une entreprise d\'Alhaurín de la Torre à Malaga et nous sommes à la recherche d’une synergie avec votre groupe pour distribuer nos produits. Vous trouverez ci-dessous les liens de nos pages Internet afin que vous puissiez avoir plus d\'informations sur les produits et services que nous fournissons.\r\n\r\nD\'une part, nous avons Efi Taller, qui sont des produits tels que sont les appareils de diagnostic automobile, des systèmes ADAS, des stations de recharges automatiques pour la climatisation, des stations automatiques pour le changement d´huile pour les boîtes à vitesse automatique, des analyseurs de gaz, un opacimètre, des TPMS et autres. Tous ces produits sont de la marque Brain Bee (Mahle) mais commercialisés sous notre marque.\r\nNous sommes fournisseurs de stations ITV (Contrôle technique automobile) dans toute l\'Andalousie, pour que vous vous fassiez une idée.\r\nhttps://efitaller.com/\r\n\r\nD\'autre part, nous sommes importateurs et service technique pour toute l\'Europe de la marque FCar Europe qui développe des produits tels que des appareils de géométrie (3D mais avec l’avantage que les nôtres peuvent être installés sur tout type de pont élévateurs selon le modèle acheté), appareil de diagnostic pour tous types d’automobiles et pour les véhicules industriels (machines, tracteurs, camions, bus, etc.).\r\n\r\nhttps://www.fcareurope.com/\r\n\r\nSi vous êtes intéressé, nous pouvons envoyer des catalogues et des listes de prix et arranger une date afin de pouvoir vous présenter nos produits physiquement. \r\nJe serai également présent lors d’Equip Auto à Lyon.  \r\n\r\nJe reste à votre disposition pour éclaircir tout doute ou répondre à vos questions.\r\n\r\nJe vous remercie par avance du temps accordé à la lecture de ce mail.\r\nCordialement.\r\nFrancisco Mohedano\r\nWorkshop Equipment Account Manager\r\nfrancisco.mohedano@lambdamotive.com \r\n+34 674 211 965', NULL, '2023-07-14 10:40:19', '2023-07-14 10:40:19', '+34674211965'),
(321, 'Mourad Marzouki', 'moradmarzouki@gmail.com', 'Demande d\'adhésion d\'adhésion', 'Bonjour je viens de créer ma société de venddete de pièces de rechange à Tétouan est je veux être un client est crer un nouveau compte et Merci', NULL, '2023-07-16 21:47:47', '2023-07-16 21:47:47', '0667966246'),
(324, 'Abdelhamid Amri', 'Abdelhamidamri49@gmail.com', 'El kimma piece auto', 'Devenir un clients', NULL, '2023-07-17 16:29:55', '2023-07-17 16:29:55', '0676731071'),
(326, 'Slh', 'fdsi20201@gmail.com', 'Piece toyota rav 4 2004  116cv', 'B7alache n9dre nwsle l tout les produits', NULL, '2023-07-18 21:40:19', '2023-07-18 21:40:19', '0611787838'),
(327, 'Mr. Sally Brekke', 'Danny.Windler13@gmail.com', 'North', 'capacitor', NULL, '2023-07-19 10:40:57', '2023-07-19 10:40:57', '15165448565'),
(328, 'Hanane Elhachimi', 'abdel.kiiit@gmail.com', 'decouverte', 'decouvrir', NULL, '2023-07-19 13:13:39', '2023-07-19 13:13:39', '0612953040'),
(333, 'ER RIFAI MOHAMMED AMINE', 'rrifai921@gmail.com', 'demande d\'hadeson', 'demande de creation d\'un point de vente', NULL, '2023-07-19 14:51:37', '2023-07-19 14:51:37', '+212666502921'),
(334, 'Ilyass', 'Aouadilyas2006@gmail.com', 'Devenir un client', 'Je veux  acheter les piece de rechange chez vous', NULL, '2023-07-19 17:12:36', '2023-07-19 17:12:36', '0614159217'),
(336, 'Bouchaib', 'bouchaib.aoun@gmail.com', 'devenir un client', 'Salam, je souhaite créer un compte chez vous\r\nMes remerciements par avance\r\nBouchaib Aoun', NULL, '2023-07-20 14:20:52', '2023-07-20 14:20:52', '+212662744526'),
(345, 'Y 1 E', 'mahicrypte@gmail.com', 'DEVENIR REVENDEUR', 'BONJOUR,\r\nJ\'AI L\'HONNEUR DE DEVENIR REVENDEUR DE VOS PRODUITS, MERCI DE NOUS CONTACTER POUR PLUS D\'INFORMATIONS POUR VOUS REJOINDRE ET POUR SAVOIR VOS CONDITIONS .\r\nCORDIALEMENTS.', NULL, '2023-07-20 15:43:19', '2023-07-20 15:43:19', '0668034642'),
(346, 'Imane Eddoua', 'eddoua.imane777@gmail.com', 'Demande de stage', 'Bonjour je cherche un stage preembauche', NULL, '2023-07-22 17:04:07', '2023-07-22 17:04:07', '0705638293');
INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `deleted_at`, `created_at`, `updated_at`, `tel`) VALUES
(347, 'Hossin Outaleb', 'outalebhossin7@gmail.com', 'revendeur daccessoires automobil', 'bonjours\r\nje suis un revendeur situer sur LOUDAYA province de MARRAKECH.\r\nje tiens a devenir parmis vous client distributeur de votre marque .', NULL, '2023-07-27 10:14:46', '2023-07-27 10:14:46', '0666425452'),
(349, 'Abde Ssamad Ismaili', 'samatisamati7575@gmail.com', 'Tout', 'BP2041  ste riakik sarl au', NULL, '2023-07-28 11:56:41', '2023-07-28 11:56:41', '0675286710'),
(350, 'LahcendMAKROUM', 'mr.makroum.hamza@gmail.com', 'Demande infos', 'Bonjour, \r\nje suis commerçant, je voulais demander être contacter par un commercial pour devenir client .\r\nmerci.', NULL, '2023-08-01 13:14:26', '2023-08-01 13:14:26', '0672668313'),
(352, 'Aamimi abdelrani', 'abdelhani132amimi@gmail.com', 'Poli de croi asiste boxer motorisation ford', 'Contacter moi silvou plai', NULL, '2023-08-05 20:26:36', '2023-08-05 20:26:36', '0639313575'),
(353, 'HAOUZA Mohamed', 'haouza.mohamed@gmail.com', 'Revente de pièces de rechange auto', 'Je voudrais monter mon magasin de revendeur détaillant de pièces de rechange auto. Merci.', NULL, '2023-08-06 18:01:47', '2023-08-06 18:01:47', '0618698595'),
(354, 'Lahsini Issam', 'lahsiniissam0@gmail.com', 'DEVENIR CLIENT', 'J\'aimerais bien etre un client', NULL, '2023-08-07 09:50:00', '2023-08-07 09:50:00', '0699175575'),
(355, 'Lahsini Issam', 'lahsiniissam0@gmail.com', 'DEVENIR CLIENT', 'J\'AIMERAIS BIEN ETRE UN CLIENT PARMIS VOS CLIENTS \r\nMERCI POUR VOTRE COMPREHENSION', NULL, '2023-08-07 10:10:43', '2023-08-07 10:10:43', '0699175575'),
(356, 'Youssef', 'Affadassyoussef@gmail.com', 'Quels sont les conditions pour devenir votre client et comment accéder à vos données et prix de pièces en gros', 'Et merci', NULL, '2023-08-07 19:37:01', '2023-08-07 19:37:01', '0697840066'),
(358, 'ABDERRAHMAN AITTAHAR', 'ab.aittahar@gmail.com', 'roulement', 'je cherche une roulement pour kia picanto 2019 boite automatique', NULL, '2023-08-08 07:00:14', '2023-08-08 07:00:14', '0662772071'),
(359, 'S.G.M.H BOURTA', 'sgmh2021@gmail.com', 'Bonjour, nous sommes la société S.G.M.H, sidi moumen.casa. Nous voulons ouvrir avec vous dès que possible. Merci', 'Bonjour, nous sommes la société S.G.M.H, sidi moumen.casa. Nous voulons ouvrir avec vous dès que possible. Merci', NULL, '2023-08-09 07:52:16', '2023-08-09 07:52:16', '0668048252/0616150793'),
(361, '\' OR \'1\'=\'1', 'test@test.ma', '\' OR \'1\'=\'1', '\' OR \'1\'=\'1', '2023-11-03 12:50:20', '2023-08-11 15:15:01', '2023-11-03 12:50:20', '\' OR \'1\'=\'1'),
(362, 'Brandon Kennedy', 'boxives853@tipent.com', 'Laudantium qui amet', 'Ex corrupti amet n', NULL, '2023-08-11 15:16:26', '2023-08-11 15:16:26', 'Quia cupiditate debi'),
(364, '\' OR \'1\'=\'1\'; --', 'boxives853@tipent.com', '\' OR \'1\'=\'1\'; --', '\' OR \'1\'=\'1\'; --', '2023-11-03 12:49:55', '2023-08-11 15:24:06', '2023-11-03 12:49:55', '\' OR \'1\'=\'1\'; --'),
(365, 'Shehryar', 'shehryar.khan@petromin.com', 'Need auto car parts for a oil change service center', 'Hi, We are looking for suppliers for automotive car parts in Morocco for our chain of quick service centers. Kindly contact for further details.', NULL, '2023-08-13 13:46:53', '2023-08-13 13:46:53', '+966539142885'),
(366, 'Youssef Chouraichi', 'Youssefchouraichi9@gmail.com', 'Demande d\'emploi de chauffeur', 'Bonjour madame monsieur.                                                                                                                                                        Veuillez trouver ci-joint ma candidature pour le poste chauffeur de transport .                                Je suis disponible pour un éventuel entreien en presentiel ou vai mon numéro de téléphone 0696261958.              Dans l attente de vous lire,je vous prie d agréer mes sincères salutations.Trés Cordialement.                                                        (Youssef chouraichi)', NULL, '2023-08-17 12:34:05', '2023-08-17 12:34:05', '0696261958'),
(371, 'ste ela brothers', 'elabrothers23@gmail.com', 'acheter des pièces auto', 'je suis une nouvelles société à tikiouin agadir je veux ouvrir une  compte chez vous .\r\net merci', NULL, '2023-08-17 17:29:57', '2023-08-17 17:29:57', '0666230071'),
(372, 'Paul', 'paul-china@hotmail.com', 'Visit your company during 5th,Sep to 10th,Sep', 'Dears, we are radiator and condenser manufacturer in china, we will visit morocco on Sep. ,we will visit you for talking about the cooperation.', NULL, '2023-08-18 07:13:55', '2023-08-18 07:13:55', '+86 19117119629'),
(373, 'SAKAN TLT', 'sakan.tlt@gmail.com', 'DEMANDE D\'ADHESION', 'Bonjour;\r\nNous vous prions de bien vouloir accepter notre adhésion à votre plateforme afin que nous puissions avoir accès au catalogue d\'Autoplus et par la même pouvoir passer des commandes en ligne. \r\nCordialement', NULL, '2023-08-22 13:57:11', '2023-08-22 13:57:11', '0661355507'),
(374, 'youness', 'younessfech1992@gmail.com', 'achat de pièces', 'je veux acheter des pièces automobiles', NULL, '2023-08-23 14:02:33', '2023-08-23 14:02:33', '0639965573'),
(379, 'ARJDAL Rachida', 'arjdalrachida10@gmail.com', 'Demande d\'emploi', 'Monsieur/Madame\r\n\r\nJ\'espère que vous allez bien . Je tiens à exprimer mon désir rejoindre l\'équipe de votre entreprise exceptionnelle.\r\n\r\nVotre excellent réputation dans le domaine, a attiré mon attention, et je suis enthousiaste à l\'idée de travailler avec vous et de contribuer à votre succès continu.', NULL, '2023-08-24 11:41:12', '2023-08-24 11:41:12', '0693737598'),
(380, 'Baaba', 'simobaaba2424@gmail.com', 'Demande', 'Bonjour je suis un technicien en mécanique je suis en démarche d ouverture d\' une magasin des pièces de rechange comment vous pouvez m aidé merci', NULL, '2023-08-25 20:34:58', '2023-08-25 20:34:58', '0670515515'),
(381, 'reda ech chaffani', 'redacheff24@gmail.com', 'devis', 'bonjour,\r\nje cherche un devis pour plusieurs pièce pour ma voiture Citroën c3 2010', NULL, '2023-08-26 20:53:15', '2023-08-26 20:53:15', '0669954699'),
(382, 'reda ech chaffani', 'redacheff24@gmail.com', 'devis', 'piece de voiture citroen c3 2010', NULL, '2023-08-26 20:58:44', '2023-08-26 20:58:44', '0669954699'),
(388, 'HOSSAME.BAZAD', 'Hossambazad049@gmail.com', 'Je cherche à travail', 'EMPLOYÉS', NULL, '2023-08-28 20:21:25', '2023-08-28 20:21:25', '0700668146'),
(392, 'Adam', 'abdurrahman.aziz@web.de', 'demande de catalogue', 'Assalamu alaikum. J\'aimerais savoir si je peux également acheter chez vous en tant que client privé. Alors s\'il vous plaît, donnez-moi accès à votre portail client\r\n\r\nMerci', NULL, '2023-08-29 19:28:38', '2023-08-29 19:28:38', '0643833832'),
(394, 'Adam', 'abdurrahman.aziz@web.de', 'demande de catalogue', 'Assalamu aleikoum. J\'aimerais savoir si je peux également acheter chez vous en tant que client privé. Si oui, envoyez-moi votre catalogue. Merci', NULL, '2023-08-29 19:30:32', '2023-08-29 19:30:32', '0643833832'),
(397, 'O\'BOUCHTA', 'oto.bouchta@gmail.com', 'Demande d\'adhésion', 'Bonjour, \r\nj\'ai un magasin de vente pièces détachées et lubrifiants pour véhicule légers à Marrakech (La ferraille) et je souhaiterai créer un compte chez votre société pour achat en gros.\r\nEn attendant votre accord, merci d\'accepter mes meilleures salutations.\r\nO\'BOUCHTA.', NULL, '2023-09-03 18:20:43', '2023-09-03 18:20:43', '0660737654'),
(400, 'Habbaz Abdellah', 'habbaz.abdellah@gmail.com', 'Accédez au catalige', 'Salam', NULL, '2023-09-04 14:51:34', '2023-09-04 14:51:34', '0674713271'),
(401, 'Mustapha EL KAYSI', 'contact.elkaysi@gmail.com', 'demande une chaîne destrubition', 'Bmw seri 1 118d n47 model 2011', NULL, '2023-09-15 10:52:36', '2023-09-15 10:52:36', '0600048466'),
(406, 'Benzakour', 'mehdi.benzakour@hotmail.fr', 'Demande d\'adhésion', 'Dzmande d\'adhésion', NULL, '2023-09-19 19:01:11', '2023-09-19 19:01:11', '0661458850'),
(407, 'Spare parts', 'Daoud.salameh@movingparts.ae', 'Spare Parts', 'Dear sir,\r\n\r\nThis is Daoud fro m moving parts, we are spare parts importer from UAE and learn your company from TEMOT, may I know if you know the brand named DPA? \r\nLook forward to your reply and cooperation.\r\n\r\nBest regards,\r\n\r\nDaoud', NULL, '2023-09-20 02:21:02', '2023-09-20 02:21:02', '+971'),
(408, 'Madiha jaadi', 'madihajaadi18@gmail.com', 'En Recherche d’emploi', 'Je me permets de candidater à votre offre. Très intéressée par le secteur automobile,( technico-commercial en vente des véhicules  et pièces de rechange', NULL, '2023-09-23 20:16:47', '2023-09-23 20:16:47', '0602758584'),
(409, 'Mohammed Mehdi Zemmouri', 'mehdi.zemmourimed@gmail.com', 'Demande d\'information', 'Bonjour, \r\nJe souhaite ouvrir un magasin de pièces de rechange et accessoires auto comment peut-on collaborer ensemble .\r\nCordialement', NULL, '2023-09-24 18:37:43', '2023-09-24 18:37:43', '0667089065'),
(417, 'Auto24h', 'auto24h.ma@gmail.com', 'Demande d\'adhesion', 'Bonjour;\r\nNius somment une plate-forme de vente de pièces automobiles en ligne, nous vous prions de bien vouloir nous accepter notre adhésion à fin de collaborer avec vous.\r\nCordialement.', NULL, '2023-09-25 08:11:01', '2023-09-25 08:11:01', '0660109204'),
(418, 'Daaoua', 'Daaouayouness802@gmail.com', 'Mécanicien', 'Je vous acheté une pièces', NULL, '2023-09-26 20:35:55', '2023-09-26 20:35:55', '0624332495'),
(420, 'SAKAN TLT', 'sakan.tlt@gmail.com', 'DEMANDE D\'ADHESION', 'Bonjour; \r\nNous vous prions de bien vouloir nous accorder un accès à la plateforme my autoplus afin que nous puissions passer des commandes en et ligne.\r\ncordialement.', NULL, '2023-09-27 16:28:51', '2023-09-27 16:28:51', '0661355507'),
(421, 'Jellal', 'jellal.abdelhak@gmail.com', 'Garage mécanique', 'Inscription', NULL, '2023-10-01 13:53:10', '2023-10-01 13:53:10', '0679466168'),
(422, 'Adil SLIMI', 'adil.slimi@gmail.com', 'Cherche KIT embrayage', 'Bonjour,\r\n\r\nJe Cherche KIT embrayage aisin swt-378', NULL, '2023-10-02 09:15:53', '2023-10-02 09:15:53', '0663399812'),
(423, 'digilux', 'chiaamalainine@gmail.com', 'devenir client', 'je veux devenire un client', NULL, '2023-10-02 21:46:41', '2023-10-02 21:46:41', '0661851819'),
(424, 'ameggaoulou zakaria', 'zakameg3@gmail.com', 'Partenariat', 'Atelier mécanique diagnostic', NULL, '2023-10-07 16:42:48', '2023-10-07 16:42:48', '0660779942'),
(425, 'ameggaoulou zakaria', 'zakameg3@gmail.com', 'Partenaire', 'Atelier mécanique et entreprise de gestion de flotte', NULL, '2023-10-07 16:43:28', '2023-10-07 16:43:28', '0660779942'),
(427, 'Cecil Hills', 'Otho506Paucek_1985@alabamahomenetwoks.com', 'voco', 'vulgivagus', NULL, '2023-10-08 06:38:32', '2023-10-08 06:38:32', '115545491034'),
(428, 'Taha Atmani', 'taha.atmani.pro@gmail.com', 'Accessoires pour golf 3', 'J\'aimerais savoir si vous avez les agrafes du Volkswagen golf 3, je viens de rénover ma golf 3, j\'ai aussi savoir si vous avez les optiques, les accessoires intérieurs divers.\r\nMerci', NULL, '2023-10-15 00:12:37', '2023-10-15 00:12:37', '0677799106'),
(429, 'Ouargaga mbarek Maroc', 'mebarkouargaga@gmail.com', 'Demande d\'information pour les filtres', 'Achat', NULL, '2023-10-18 08:23:25', '2023-10-18 08:23:25', '0663859181'),
(430, 'FADIL Abderrahmane', 'abdo.fadilo@gmail.com', 'Cherche le tavail', 'Objet : Candidature pour le poste de commercial\r\n\r\n\r\nMadame, Monsieur,\r\n\r\nActuellement à la recherche d’un nouveau challenge, je me permets de vous envoyer ma candidature au poste de commercial. Titulaire d’une licence en science de la matière physique et disposant d’une expérience de six ans en tant que commercial, je pense avoir tous les atouts pour atteindre vos objectifs et devenir un élément essentiel à votre organisation.\r\n\r\nAu cours de mon expérience professionnelle, j’ai eu l’occasion de développer de nombreuses compétences. Comme vente et communication, Dynamique, rigoureux et ambitieux, j’ai le goût du dépassement de soi, ce qui m’a toujours permis de répondre aux exigences du métier de commercial. Par ailleurs, j’ai toujours à cœur d’instaurer une relation de confiance avec le client en lui proposant le service ou le produit parfaitement adapté à ses besoins.\r\n\r\nConvaincu de la qualité de vos produits pieces auto je suis particulièrement motivé pour mettre mon savoir-faire à votre profit. Néanmoins, je suis persuadé que l’excellence de votre entreprise me donnera aussi la chance d’apprendre et de progresser.\r\n\r\nDisponible à partir du maintenant, je suis à même d’effectuer des missions nationales et internationales. Je reste à votre disposition pour vous rencontrer afin de vous décrire plus en avant mes motivations.\r\n\r\nJe vous prie d’agréer, Madame, Monsieur, l’expression de mes salutations distinguées.\r\n\r\n\r\nFADIL Abderrahmane', NULL, '2023-10-19 22:08:41', '2023-10-19 22:08:41', '0671866448'),
(431, 'Micheal Bartell', 'Lolita958_Marks.1981@alabamahomenetwoks.com', 'cibus', 'defero', NULL, '2023-10-20 03:18:43', '2023-10-20 03:18:43', '112024171344'),
(432, 'issam benammi', 'issam.benammi@gmail.com', 'طلب الانظمان', 'السلام عليكم ورحمة الله \r\nتحية طيبة وبعد\r\nلي شرف رف التقدم بطلبي هذا قصد الانضمام الى منصتكم بغية اقتناء السلع لمحلي التجاري ال\r\nشكرا جزيلا', NULL, '2023-10-20 08:10:45', '2023-10-20 08:10:45', '0662449258'),
(434, 'Amerka Auto', 'teamhanual3@gmail.com', 'Objet : Demande de devis pour toutes les pièces de rechange et les consomables  disponibles', 'Je suis le fondateur d\'une nouvelle société de réparation automobile et je suis à la recherche d\'un fournisseur de pièces de rechange pour automobiles. J\'ai trouvé votre entreprise en ligne et je suis intéressé par les produits que vous proposez.\r\nJe souhaiterais obtenir un devis pour toutes les pièces de rechange disponibles pour les marques de voitures les plus courantes. Pouvez-vous m\'envoyer une liste complète des pièces que vous proposez, ainsi que les prix correspondants ?\r\nJe suis également intéressé par les conditions de paiement et de livraison, ainsi que par les délais de livraison.\r\nJe vous remercie par avance pour votre réponse.\r\nCordialement,\r\nAmerkad Auto\r\nAbdellatif amerkad', NULL, '2023-10-21 00:21:57', '2023-10-21 00:21:57', '0661547964'),
(435, 'Yassine Outtalb', 'outtalbyassineservice@gmail.com', 'demande de stage', 'Madame, Monsieur,\r\n\r\nActuellement en deuxième années  à l\'OFPPT, je suis étudiant en GESTION DES ENTREPRISE OPTION COMMERCE ET MARKETING. Je suis à la recherche d\'un stage au sien de votre Entreprise situe a Ait Melloul .\r\n\r\nJe suis particulièrement intéressé par votre entreprise, car elle est leader dans son domaine et propose des produits et services innovants. Je suis également attiré par vos valeurs d\'entreprise, qui correspondent à mes propres valeurs.\r\n\r\nAu cours de mes études, j\'ai acquis les compétences et connaissances nécessaires pour exercer le métier de commercial. Je suis notamment à l\'aise avec les outils informatiques [Excel,Word,Powerpoint et aussi SAGES GESTION COMMERCIAL ….].\r\nJe suis une personne dynamique, motivée et rigoureuse. Je suis également très intéressé par le monde de l\'entreprise et par le développement de mes compétences.\r\nJe vous prie d\'agréer, Madame, Monsieur, l\'expression de mes salutations distinguées.\r\n\r\nYassine Outtalb\r\n\r\ncordialement .', NULL, '2023-10-24 09:59:42', '2023-10-24 09:59:42', '+212645212541'),
(438, 'Amine saghir', 'aminexd@gmail.com', 'Franchise', 'Salam je suis amine saghir de Marrakech je dispose d un grand magasin a Marrakech massira actuellement ecpoilte en tant que café je souhaite rejoindre le resaux en tant que franchisé', NULL, '2023-10-24 16:53:57', '2023-10-24 16:53:57', '0661350877'),
(439, 'DIEME Marie Louise Som', 'rimadieme185@gmail.com', 'Demande d\'emploi', 'Bonjour,\r\nJe viens déposer ma candidature auprès de votre société afin de pouvoir mettre en pratique mes compétences professionnelles et universitaires.\r\nDans l\'attente d\'une suite favorable de votre part, veuillez agréer mes sincères salutations.\r\nCordialement,', NULL, '2023-10-26 17:18:46', '2023-10-26 17:18:46', '0679621676'),
(449, 'ANTAR  younes', 'capmalero@gmail.com', 'candidature spontaneé', 'bonjour :\r\nc ets avec un grand plaisir que je vous ecrit ce message pour présenté ma candidature spontanee .\r\nje porte a votre connaissance que  j ai deja fait parti de l \'equipe de autoplus autant que responsable de plateforme logistique region laayoune enn 2017.\r\nactuelement je sui responsable logistique chez tumag cable *groupe berrada*.\r\nje postule pour une oportunité ou un poste vacant dans les region de marrakech /agadir/settat/berrchide .\r\ncdlt .', NULL, '2023-10-27 09:38:04', '2023-10-27 09:38:04', '0666941953'),
(451, 'EMPT MAROC', 'emptmaroc@gmail.com', 'devenir client', 'bonjour\r\nmerci  de nous transmettre la procédure pour être votre client \r\ncordialement', NULL, '2023-10-27 17:37:01', '2023-10-27 17:37:01', '0707632822'),
(453, 'Abdrahim', 'abdrahimelbouti875@gmail.com', 'Nidap', 'Ccc', '2023-11-03 12:50:03', '2023-10-29 15:00:23', '2023-11-03 12:50:03', '0709144122'),
(454, 'Ismail el hilal', 'shopelhilal@hotmail.fr', 'Nouveau client', 'Bonjour, je suis en train d’ouvrir mon nouveau magasin et je veux devenir client', NULL, '2023-11-01 18:51:43', '2023-11-01 18:51:43', '0660001771'),
(456, 'Driss Rahmani', 'rahmanidriss894@gmail.xom', 'Abonnement', 'Bonjour je suis mécanicien je cous drais bien avoir l\'acces avitre application pour effectuer des achats de pièces', NULL, '2023-11-04 21:15:50', '2023-11-04 21:15:50', '0676925457'),
(457, 'Mustapha', 'mustaphakhalouta5@gmail.com', 'Acheter des produits', 'Acheter des produits', NULL, '2023-11-05 10:34:03', '2023-11-05 10:34:03', '0664146268'),
(458, 'Mustapha', 'mustaphakhalouta5@gmail.com', 'Acheter des produits', 'Acheter des produits', NULL, '2023-11-05 10:34:30', '2023-11-05 10:34:30', '0664146268'),
(459, 'Mustapha', 'mustaphakhalouta5@gmail.com', 'Acheter des produits', 'Acheter des produits', NULL, '2023-11-05 10:34:34', '2023-11-05 10:34:34', '0664146268'),
(460, 'Mustapha', 'mustaphakhalouta5@gmail.com', 'Acheter des produits', 'Acheter des produits', NULL, '2023-11-05 10:34:39', '2023-11-05 10:34:39', '0664146268'),
(461, 'el heddaoui zakaria', 'zelheddaoui6@gmail.com', 'demande d\'emploi', 'je suis un représentant commercial je travaille sur un autre société  et j\'ai le besoin de développer ma carrière chez vous monsieur', NULL, '2023-11-05 21:56:42', '2023-11-05 21:56:42', '0698663928'),
(462, 'KARA AUTO', 'karaautocasa@gmail.com', 'Demande d\'Informations pour la création d\'un garage automobile', 'Madame, Monsieur,\r\n\r\nJe m\'appelle Othmane Kara-Allal et je représente KARA AUTO. Nous sommes en train de planifier la création d\'un nouveau garage automobile d\'environ 200m² à Casablanca ou dans les environs et nous recherchons des partenaires fiables pour la fourniture de pneus et de pièces de rechange de haute qualité.\r\n\r\nNous proposerons différents services comme : Vidange, disques et plaquettes, révisions, pneus, mécanique rapide, lavage, ainsi que la vente de pièces détachées essentielles.\r\n\r\nNous avons entendu parler de votre réputation en tant que fournisseur de confiance, et nous aimerions en savoir plus sur les produits et services que vous proposez.\r\n\r\nPourriez-vous nous faire parvenir un catalogue de vos pièces de rechange et consommables atelier ?\r\n\r\nNous sommes particulièrement intéressés par les informations suivantes :\r\n\r\n1. Pièces de rechange / consommables : Liste des pièces, marques, références et prix.\r\n2. Conditions de livraison, délais et coûts associés.\r\n3. Options de paiement, notamment pour un paiement comptant ou différé. \r\n4. Politique de retour et garantie.\r\n\r\nDans un deuxième temps, nous pourrons vous fournir une liste précise des pièces que nous souhaitons commercialiser.\r\n\r\nSi vous avez des offres spéciales en cours, n\'hésitez pas à nous en informer.\r\n\r\nSi vous avez besoin de plus d\'informations, n\'hésitez pas à me contacter par mail ou sur WhatsApp au +33611042209 compte tenu de ma domiciliation à l\'étranger.\r\n\r\nNous sommes impatients de découvrir vos produits et de discuter de la possibilité de travailler avec votre entreprise. Merci d\'avance pour votre réponse.\r\n\r\nCordialement,', NULL, '2023-11-06 19:00:30', '2023-11-06 19:00:30', '+33611042209'),
(463, 'KARA AUTO', 'karaautocasa@gmail.com', 'Demande d\'Informations pour la création d\'un garage automobile', 'Madame, Monsieur,\r\n\r\nJe m\'appelle Othmane Kara-Allal et je représente KARA AUTO. Nous sommes en train de planifier la création d\'un nouveau garage automobile d\'environ 200m² à Casablanca ou dans les environs et nous recherchons des partenaires fiables pour la fourniture de pneus et de pièces de rechange de haute qualité.\r\n\r\nNous proposerons différents services comme : Vidange, disques et plaquettes, révisions, pneus, mécanique rapide, lavage, ainsi que la vente de pièces détachées essentielles.\r\n\r\nNous avons entendu parler de votre réputation en tant que fournisseur de confiance, et nous aimerions en savoir plus sur les produits et services que vous proposez.\r\n\r\nPourriez-vous nous faire parvenir un catalogue de vos pièces de rechange et consommables atelier ?\r\n\r\nNous sommes particulièrement intéressés par les informations suivantes :\r\n\r\n1. Pièces de rechange / consommables : Liste des pièces, marques, références et prix.\r\n2. Conditions de livraison, délais et coûts associés.\r\n3. Options de paiement, notamment pour un paiement comptant ou différé. \r\n4. Politique de retour et garantie.\r\n\r\nDans un deuxième temps, nous pourrons vous fournir une liste précise des pièces que nous souhaitons commercialiser.\r\n\r\nSi vous avez des offres spéciales en cours, n\'hésitez pas à nous en informer.\r\n\r\nSi vous avez besoin de plus d\'informations, n\'hésitez pas à me contacter par mail ou sur WhatsApp au +33611042209 compte tenu de ma domiciliation à l\'étranger.\r\n\r\nNous sommes impatients de découvrir vos produits et de discuter de la possibilité de travailler avec votre entreprise. Merci d\'avance pour votre réponse.\r\n\r\nCordialement,', NULL, '2023-11-06 19:00:56', '2023-11-06 19:00:56', '+33611042209'),
(464, 'Jalal', 'Jalalelmir9114@gmail.com', 'Piyse', 'Piyas', NULL, '2023-11-06 20:03:18', '2023-11-06 20:03:18', '0608868517'),
(465, 'M-I System', 'Pro.networksecure@gmail.com', 'Demande d\'adhésion', 'Bonjour,,\r\nPar le présent message veuillez approuver ma demande d\'adhésion.\r\nBien à vous', NULL, '2023-11-07 21:12:34', '2023-11-07 21:12:34', '0612902121'),
(466, 'M-I System', 'Pro.networksecure@gmail.com', 'Demande d\'adhésion', 'Bonjour,,\r\nPar le présent message veuillez approuver ma demande d\'adhésion.\r\nBien à vous', NULL, '2023-11-07 21:13:12', '2023-11-07 21:13:12', '0612902121'),
(467, 'M-I System', 'Pro.networksecure@gmail.com', 'Demande d\'adhésion', 'Bonjour,,\r\nPar le présent message veuillez approuver ma demande d\'adhésion.\r\nBien à vous', NULL, '2023-11-07 21:18:34', '2023-11-07 21:18:34', '0612902121'),
(468, 'M-I System', 'Pro.networksecure@gmail.com', 'Demande d\'adhésion', 'Bonjour,\r\nPar le présent message veuillez approuver ma demande d\'adhésion.\r\nBien à vous', NULL, '2023-11-07 21:22:32', '2023-11-07 21:22:32', '0612902121'),
(469, 'Al hamd logistique', 'y.hassour@alhamdlogistique.ma', 'Demande d\'information', 'Salam \r\nNous sommes une société du transport située au zone industrielle ain sebaa nous cherche des pièces de rechange (batteries, plaquette,......) pour ntre parc auto  (camions, voiture)', NULL, '2023-11-08 19:12:35', '2023-11-08 19:12:35', '0679828290'),
(470, 'Al hamd logistique', 'y.hassour@alhamdlogistique.ma', 'Demande d\'information', 'Salam \r\nNous sommes une société du transport située au zone industrielle ain sebaa nous cherche des pièces de rechange (batteries, plaquette,......) pour ntre parc auto  (camions, voiture)', NULL, '2023-11-08 19:12:54', '2023-11-08 19:12:54', '0679828290'),
(471, 'agro industrielle al atlas \" alf al maghrib\"', 'khalid.sefraoui@alf.ma', 'ouverture de compte', 'bonjour, \r\nNous souhaitons collaborer', NULL, '2023-11-10 14:02:36', '2023-11-10 14:02:36', '0662309338'),
(472, 'agro industrielle al atlas \" alf al maghrib\"', 'khalid.sefraoui@alf.ma', 'ouverture de compte', 'bonjour, \r\nNous souhaitons collaborer', NULL, '2023-11-10 14:02:52', '2023-11-10 14:02:52', '0662309338'),
(473, 'agro industrielle al atlas \" alf al maghrib\"', 'khalid.sefraoui@alf.ma', 'ouverture de compte', 'bonjour, \r\nNous souhaitons collaborer', NULL, '2023-11-10 14:03:05', '2023-11-10 14:03:05', '0662309338'),
(474, 'Karim', 'Carmelokarim@hotmail.com', 'Demande de placettes de frein', 'Demande de freins placette', NULL, '2023-11-12 07:55:41', '2023-11-12 07:55:41', '0766801798'),
(475, 'Boughalla lhaj', 'Boughallalhaj.exiam@gmail.com', 'Prix batterie  L2 et L3', 'Bonsoir \r\nMerci de m\'envoyer prix d\'un  batterie L2 et L3 marque  VARTA\r\net aussi  prix  pour marque  autoplus. \r\nCordialement', NULL, '2023-11-14 17:33:26', '2023-11-14 17:33:26', '0668792222'),
(476, 'Boughalla lhaj', 'Boughallalhaj.exiam@gmail.com', 'Prix batterie  L2 et L3', 'Bonsoir \r\nMerci de m\'envoyer prix d\'un  batterie L2 et L3 marque  VARTA\r\net aussi  prix  pour marque  autoplus. \r\nCordialement', NULL, '2023-11-14 17:33:42', '2023-11-14 17:33:42', '0668792222'),
(477, 'marouane rahmani', 'sski.m.94@gmail.com', 'pieces auto', 'slam', NULL, '2023-11-14 21:11:18', '2023-11-14 21:11:18', '0707070601'),
(478, 'marouane rahmani', 'saski.m.94@gmail.com', 'pieces auto mobile', 'salam', NULL, '2023-11-14 21:16:24', '2023-11-14 21:16:24', '0707070601'),
(479, 'ACHRAF.LAHMEUR', 'lahachraf69@gmail.com', 'Travailler dans n\'importe quel domaine', 'Chokran bzaf', NULL, '2023-11-15 00:01:06', '2023-11-15 00:01:06', '0682233869'),
(480, 'ACHRAF.LAHMEUR', 'lahachraf69@gmail.com', 'Travailler dans n\'importe quel domaine', 'Chokran bzaf', NULL, '2023-11-15 00:04:44', '2023-11-15 00:04:44', '0682233869'),
(481, 'ACHRAF.LAHMEUR', 'lahachraf69@gmail.com', 'Travailler dans n\'importe quel domaine', 'Bonjour\r\n      Je suis à la recherche d\'une nouvelle opportunité d\'embauche.\r\n    vous trouverez ci-joint mon CV expliquer clairement mon parcours professionnel\r\n\r\ncordialement\r\n\r\nMRC', NULL, '2023-11-15 00:07:41', '2023-11-15 00:07:41', '0682233869'),
(482, 'Sadekaymane', 'Sadekaymane@gmail.com', 'Cherche d\'emploi', '*', NULL, '2023-11-16 09:31:14', '2023-11-16 09:31:14', '0695251977'),
(483, 'Sadekaymane', 'Sadekaymane@gmail.com', 'Cherche d\'emploi', '*', NULL, '2023-11-16 09:31:27', '2023-11-16 09:31:27', '0695251977'),
(484, 'amine aitjmal', 'centre.auto.aitjamal@gmail.com', 'devenic revendeur', 'ouvrir compte societer', NULL, '2023-11-17 10:40:07', '2023-11-17 10:40:07', '06-56-84-07-07'),
(485, 'amine aitjmal', 'centre.auto.aitjamal@gmail.com', 'devenic revendeur', 'ouvrir compte', NULL, '2023-11-17 10:43:39', '2023-11-17 10:43:39', '06-56-84-07-07'),
(486, 'SANHAJI', 'SANHAJIMOSTAFA@gmail.com', 'demande tableau bord toyota yaris', 'je cherche le tableau de bord toyota yaris esssence modele 2001', NULL, '2023-11-21 10:29:34', '2023-11-21 10:29:34', '0617673523'),
(487, 'Nakhil pièce auto', 'Ysfmoad@gmail.com', 'Devient client', 'Merci de accepter', NULL, '2023-11-27 16:56:10', '2023-11-27 16:56:10', '0667099999'),
(488, 'Nakhil pièce auto', 'Ysfmoad@gmail.com', 'Devient client', 'Merci de accepter', NULL, '2023-11-27 16:56:18', '2023-11-27 16:56:18', '0667099999'),
(489, 'Amine benhada', 'abenhada1@gmail.com', 'Piece skoda fabia 3', 'Kit complet distribution fabia 2016', NULL, '2023-11-27 20:52:20', '2023-11-27 20:52:20', '0628481627'),
(490, 'Amine benhada', 'abenhada1@gmail.com', 'Piece skoda fabia 3', 'Kit complet distribution fabia 2016', NULL, '2023-11-27 20:54:00', '2023-11-27 20:54:00', '0628481627'),
(491, 'Hicham', 'hichamakri@gmail.com', 'Pièces de rechange', 'LR008863 pompe à eau range rover', NULL, '2023-11-28 18:37:36', '2023-11-28 18:37:36', '0703431118'),
(492, 'Haidara Mohamed', 'haidara_mohamed@outlook.com', 'Demande d\'emploi', 'Bonjour,je suis Mohamed Haidara,un jeune Technicien âgée de 24ans ,ayant un Diplôme de Technicien en Réparation d\'Engins à Moteurs,\r\nJe suis a la recherche d\'un emploi/stage dans le domaine de l\'automobile,\r\nJ\'ai une expérience moyenne dans le domaine des services après vente (Vidange , contrôles périodiques, changement des plaquettes et amortisseurs...) \r\nJe cherche une opportunité pour bien s\'immerger dans le domaine\r\nJe suis disponible immédiatement et Merci d\'avance', NULL, '2023-11-29 15:30:30', '2023-11-29 15:30:30', '0767222423'),
(493, 'Abdelhak SAFINE', 'safineabdelhak@gmail.com', 'DEMEND DE STAGE', 'Rcherche un stage \r\n01/12/2023\r\n01/02/2023\r\n01/04/2023', NULL, '2023-11-29 19:50:36', '2023-11-29 19:50:36', '0693226031'),
(494, 'Malainien', 'Feiji.melanine@hotmail.fr', 'Devis', 'Bonjour, je vous contact pour avoir un devis sur c’est produit s’il vous plaît .\r\n\r\n-ENSEMBLE DISQUE PLATEAU GUN125\r\nENSEMBLE DISQUE PLATEAU GUN125 REF : 31001-0K010 MARQUE : TOYOTA\r\nYYPE : GUN125L\r\nSERIE : AHTFB6CD304670031 ENSEMBLE DISQUE PLATEAU GUN125 REF : 31001-0K010 MARQUE : TOYOTA\r\nYYPE : GUN125L\r\nSERIE : AHTFB6CD304670031\r\n\r\n\r\n\r\n-BUTEE D\'EMBRAYAGE GUN125 REF : 31230-71050\r\nMARQUE : TOYOTA\r\nYYPE : GUN125L\r\nSERIE : AHTFB6CD304670031 BUTEE D\'EMBRAYAGE GUN125 REF : 31230-71050\r\nMARQUE : TOYOTA\r\nYYPE : GUN125L\r\nSERIE : AHTFB6CD304670031', NULL, '2023-11-30 16:05:13', '2023-11-30 16:05:13', '0022238081234'),
(495, 'ali essolaymany', 'solali7217@gmail.com', 'DWMANDE D:ADHESION', 'je besoisn des piec des pieces', NULL, '2023-12-02 12:41:04', '2023-12-02 12:41:04', '+212659820549'),
(496, 'Anas', 'anastnjawi27@gmail.com', 'Securi', 'Securi', NULL, '2023-12-02 23:08:08', '2023-12-02 23:08:08', '9635549081'),
(497, '101247', 'piecesautobenhazem@gmail.com', 'الاشتراك معكم', 'بسرني التعامل معكم', NULL, '2023-12-05 00:21:27', '2023-12-05 00:21:27', '0600931254'),
(498, '101247', 'piecesautobenhazem@gmail.com', 'الاشتراك معكم', 'لدي محل للبيع بالتقسيط واريد ان اكون زبون لديكم', NULL, '2023-12-06 18:12:28', '2023-12-06 18:12:28', '0600931254'),
(499, '101247', 'piecesautobenhazem@gmail.com', 'الاشتراك معكم', 'لدي محل للبيع بالتقسيط واريد ان اكون زبون لديكم', NULL, '2023-12-06 18:12:46', '2023-12-06 18:12:46', '0600931254'),
(500, '101247', 'piecesautobenhazem@gmail.com', 'ان اكون زبون لكم', 'لدي محل بيع اجزاء السيارات واريد التعامل معكم', NULL, '2023-12-06 18:15:58', '2023-12-06 18:15:58', '0600931254'),
(501, 'PA ben omar', 'fatih.mohammed@gmail.com', 'devnier client', 'je veux ouvrir un compte pour ma magasin situé a casa', NULL, '2023-12-08 08:42:10', '2023-12-08 08:42:10', '0600070708'),
(502, 'Ismail MRANI ALAOUI', 'ismailmranialaoui57@gmail.com', 'Candidature spontanée', 'Candidature pour postuler à un poste', NULL, '2023-12-08 09:13:38', '2023-12-08 09:13:38', '0641482513'),
(503, 'ANAS FAROUJ', 'Anassfarouj@gmail.com', 'Bonjour , je cherche un emploi , tu peux m\'aider !!!', 'J\'espère que vous allez bien. Je vous écris pour vous informer de mon intérêt à rejoindre votre entreprise en tant qu\'employé. J\'aimerais avoir l\'opportunité de contribuer à votre équipe et de mettre à profit mes compétences . Je suis convaincu(e) que mon expérience et ma motivation me permettront de réussir dans ce rôle.', NULL, '2023-12-08 09:38:39', '2023-12-08 09:38:39', '0653916085'),
(504, 'ANAS FAROUJ', 'Anassfarouj@gmail.com', 'Bonjour , je cherche un emploi , tu peux m\'aider !!!', 'J\'espère que vous allez bien. Je vous écris pour vous informer de mon intérêt à rejoindre votre entreprise en tant qu\'employé. J\'aimerais avoir l\'opportunité de contribuer à votre équipe et de mettre à profit mes compétences . Je suis convaincu(e) que mon expérience et ma motivation me permettront de réussir dans ce rôle.', NULL, '2023-12-08 09:38:50', '2023-12-08 09:38:50', '0653916085'),
(505, 'ANAS FAROUJ', 'Anassfarouj@gmail.com', 'Bonjour , je cherche un emploi , tu peux m\'aider !!!', 'J\'espère que vous allez bien. Je vous écris pour vous informer de mon intérêt à rejoindre votre entreprise en tant qu\'employé. J\'aimerais avoir l\'opportunité de contribuer à votre équipe et de mettre à profit mes compétences . Je suis convaincu(e) que mon expérience et ma motivation me permettront de réussir dans ce rôle.', NULL, '2023-12-08 09:38:57', '2023-12-08 09:38:57', '0653916085'),
(506, 'El Manssouri', 'elmanssouri.hm@gmail.com', 'Demande d\'adhésion', 'Accéptez ma demande.', NULL, '2023-12-08 10:24:10', '2023-12-08 10:24:10', '0643291394'),
(507, 'Mohsine BOUIFRADEN', 'bouifraden123@gmail.com', 'Demande d\'emploi', 'Bonjour cher recruteurs j\'ai trouvé une annonce qui me permet de vous contacter car je suis à la recherche d\'un emploi j\'ai 15 ans d\'expérience dans le domaine de tourisem et d\'hôtellerie voiala mon numéro 0633685042 mohsine', NULL, '2023-12-08 10:36:27', '2023-12-08 10:36:27', '0633685042'),
(508, 'El malek sabah', 'Sabahloujaine@gmail.com', 'Candidature responsable commercial', 'Intéressé par le poste', NULL, '2023-12-08 11:20:22', '2023-12-08 11:20:22', '0627433733'),
(509, 'Zammar', 'zammarjalal3@gmail.com', 'Demande d\'emploi', 'Monsieur j\'ai l\'honneur de vous envoyer ma candidature pour un poste permanent au sein de votre entreprises', NULL, '2023-12-08 11:25:08', '2023-12-08 11:25:08', 'l0612783873'),
(510, 'Omar BENHARI', 'omarbenhari95@gmail.com', 'Responsable agence logistique et distribution', '…', NULL, '2023-12-08 12:10:50', '2023-12-08 12:10:50', '0661148950'),
(511, 'Omar BENHARI', 'omarbenhari95@gmail.com', 'Responsable agence logistique et distribution', '…', NULL, '2023-12-08 12:10:57', '2023-12-08 12:10:57', '0661148950'),
(512, 'Soumia moujane', 'simsimmouj@gmail.com', 'Category Manager', '.', NULL, '2023-12-08 15:09:58', '2023-12-08 15:09:58', '0628529661'),
(513, 'Soumia moujane', 'simsimmouj@gmail.com', 'Category Manager', '.', NULL, '2023-12-08 15:10:20', '2023-12-08 15:10:20', '0628529661'),
(514, 'nasreddine moussair', 'moussairnasser1@gmail.com', 'DEMANDE D\'EMPLOI', 'DEMANDE D\'EMPLOI', NULL, '2023-12-08 16:24:38', '2023-12-08 16:24:38', '0612761928'),
(515, 'nasreddine moussair', 'moussairnasser1@gmail.com', 'DEMANDE D\'EMPLOI', 'DEMANDE D\'EMPLOI', NULL, '2023-12-08 16:24:52', '2023-12-08 16:24:52', '0612761928'),
(516, 'nasreddine moussair', 'moussairnasser1@gmail.com', 'DEMANDE D\'EMPLOI', 'DEMANDE D\'EMPLOI', NULL, '2023-12-08 16:24:54', '2023-12-08 16:24:54', '0612761928'),
(517, 'nasreddine moussair', 'moussairnasser1@gmail.com', 'DEMANDE D\'EMPLOI', 'DEMANDE D\'EMPLOI', NULL, '2023-12-08 16:24:54', '2023-12-08 16:24:54', '0612761928'),
(518, 'Younes MARJAN', 'marjyounes@gmail.com', 'Demande d\'emploi', 'Bonjour Madame Monsieur\r\n\r\n\r\nDemande d\'emploi pour ma candidature  le poste de Commerce et finance et comptabilité, gestion\r\n\r\nJe suis disponible pour un éventuel entretien en\r\nprésentiel ou via mon numéro de téléphone 0674-79-94-66 \r\nDans l\'attente de vous lire, Je vous prie d\'agréer mes sincères salutations.\r\nTrès Cordialement.\r\nYounes Marjan.', NULL, '2023-12-09 11:15:34', '2023-12-09 11:15:34', '0674799466'),
(519, 'Younes MARJAN', 'marjyounes@gmail.com', 'Demande d\'emploi', 'Bonjour Madame Monsieur\r\n\r\n\r\nDemande d\'emploi pour ma candidature  le poste de Commerce et finance et comptabilité, gestion\r\n\r\nJe suis disponible pour un éventuel entretien en\r\nprésentiel ou via mon numéro de téléphone 0674-79-94-66 \r\nDans l\'attente de vous lire, Je vous prie d\'agréer mes sincères salutations.\r\nTrès Cordialement.\r\nYounes Marjan.', NULL, '2023-12-09 11:16:02', '2023-12-09 11:16:02', '0674799466'),
(520, 'Younes MARJAN', 'marjyounes@gmail.com', 'Demande d\'emploi', 'Bonjour Madame Monsieur\r\n\r\n\r\nDemande d\'emploi pour ma candidature  le poste de Commerce et finance et comptabilité, gestion\r\n\r\nJe suis disponible pour un éventuel entretien en\r\nprésentiel ou via mon numéro de téléphone 0674-79-94-66 \r\nDans l\'attente de vous lire, Je vous prie d\'agréer mes sincères salutations.\r\nTrès Cordialement.\r\nYounes Marjan.', NULL, '2023-12-09 11:17:59', '2023-12-09 11:17:59', '0674799466'),
(521, 'RHAZLANI', 'm.rhazlani@gmail.com', 'working', 'je souhaite travailler avec vous chez Responsable d\'Agence Pièces de Rechanges', NULL, '2023-12-10 11:47:18', '2023-12-10 11:47:18', '0667086145'),
(522, 'aziz', 'Aziz1983@gmail.com', 'devenire cluiont', 'devenire cleont', NULL, '2023-12-12 13:23:30', '2023-12-12 13:23:30', '0669498168'),
(523, 'aziz', 'Aziz1983@gmail.com', 'devenire cluiont', 'devenire cleont', NULL, '2023-12-12 13:23:49', '2023-12-12 13:23:49', '0669498168'),
(524, 'Aziz', 'Zoulgamiaziz@gmail.com', 'Client', 'Client', NULL, '2023-12-12 13:37:37', '2023-12-12 13:37:37', '0669498168'),
(525, 'Hajjaj Abdellatif', 'abdltifhajjaj@gmail.com', 'Demande d\'emploi', 'Bonjour', NULL, '2023-12-14 19:05:20', '2023-12-14 19:05:20', '0664209272'),
(526, 'Auto matrise', 'auto.maitrise1@gmail.com', 'demande d\'ouverture le compte', '.', NULL, '2023-12-16 08:28:05', '2023-12-16 08:28:05', '0634804626'),
(527, 'Auto matrise', 'auto.maitrise1@gmail.com', 'demande d\'ouverture le compte', 'ouverture de compte', NULL, '2023-12-16 08:30:11', '2023-12-16 08:30:11', '0634804626'),
(528, 'Auto matrise', 'auto.maitrise1@gmail.com', 'demande d\'ouverture le compte', 'ouverture de compte', NULL, '2023-12-16 08:30:36', '2023-12-16 08:30:36', '0634804626'),
(529, 'Auto matrise', 'auto.maitrise1@gmail.com', 'demande d\'ouverture le compte', 'ouverture de compte', NULL, '2023-12-16 08:30:37', '2023-12-16 08:30:37', '0634804626'),
(530, 'Auto matrise', 'auto.maitrise1@gmail.com', 'demande d\'ouverture le compte', 'ouverture de compte', NULL, '2023-12-16 08:30:37', '2023-12-16 08:30:37', '0634804626'),
(531, 'Auto matrise', 'auto.maitrise1@gmail.com', 'demande d\'ouverture le compte', 'ouverture de compte', NULL, '2023-12-16 08:30:37', '2023-12-16 08:30:37', '0634804626'),
(532, 'Auto matrise', 'auto.maitrise1@gmail.com', 'demande d\'ouverture le compte', 'ouverture de compte', NULL, '2023-12-16 08:42:23', '2023-12-16 08:42:23', '0634804626'),
(533, 'Auto matrise', 'auto.maitrise1@gmail.com', 'demande d\'ouverture le compte', 'ouverture de compte', NULL, '2023-12-16 08:42:23', '2023-12-16 08:42:23', '0634804626'),
(534, 'Auto matrise', 'auto.maitrise1@gmail.com', 'demande d\'ouverture le compte', 'ouverture de compte', NULL, '2023-12-16 08:42:23', '2023-12-16 08:42:23', '0634804626'),
(535, 'Auto matrise', 'auto.maitrise1@gmail.com', 'demande d\'ouverture le compte', 'ouverture de compte', NULL, '2023-12-16 08:53:15', '2023-12-16 08:53:15', '0634804626'),
(536, 'ياسين سكوك', 'Yassin.skouk@gmail.com', 'Demand', 'السلام عليكم', NULL, '2023-12-17 16:49:49', '2023-12-17 16:49:49', '0691645646'),
(537, 'Soufiane Bendhiba', 'senigiro@gmail.com', 'Demande d\'adhésion', 'Demande d\'adhésion', NULL, '2023-12-18 09:06:15', '2023-12-18 09:06:15', '0677808491'),
(538, 'HICHAM DIBSSI', 'hichamdibssi@gmail.com', 'ouverture de compte', 'j espère avoir accès a votre site', NULL, '2023-12-18 16:49:41', '2023-12-18 16:49:41', '0600200112'),
(539, 'khalid nadif', 'khalidnadif16@gmail.com', 'demande de candidature', 'Permettez-moi de vous adresser ma candidature afin d\'envisager un recrutement au sein de votre équipe.\r\n\r\nEn effet, cherchant à diversifier mes fonctions et à valoriser mes acquis, je pense que rejoindre votre entreprise représente une réelle opportunité, et j\'espère que vous saurez apprécier mon profil .', NULL, '2023-12-25 09:24:21', '2023-12-25 09:24:21', '0663149444'),
(540, 'khalid nadif', 'khalidnadif16@gmail.com', 'demande de candidature', 'Permettez-moi de vous adresser ma candidature afin d\'envisager un recrutement au sein de votre équipe.\r\n\r\nEn effet, cherchant à diversifier mes fonctions et à valoriser mes acquis, je pense que rejoindre votre entreprise représente une réelle opportunité, et j\'espère que vous saurez apprécier mon profil .', NULL, '2023-12-25 09:28:04', '2023-12-25 09:28:04', '0663149444'),
(541, 'Yassine Ouayach', 'y.ouayach@gmail.com', 'Offre amortisseur Monroe orti', 'Bonjour \r\n\r\nJe souhaite savoir la disponibilité des amortisseurs monroe G2227 et le prix svp ?\r\n\r\nMerci', NULL, '2023-12-26 14:16:17', '2023-12-26 14:16:17', '0673081386'),
(542, 'Yassine Ouayach', 'y.ouayach@gmail.com', 'Offre amortisseur Monroe orti', 'Bonjour \r\n\r\nJe souhaite savoir la disponibilité des amortisseurs monroe G2227 et le prix svp ?\r\n\r\nMerci', NULL, '2023-12-26 14:16:36', '2023-12-26 14:16:36', '0673081386'),
(543, 'Yassine Ouayach', 'y.ouayach@gmail.com', 'Offre amortisseur Monroe orti', 'Bonjour \r\n\r\nJe souhaite savoir la disponibilité des amortisseurs monroe G2227 et le prix svp ?\r\n\r\nMerci', NULL, '2023-12-26 14:16:38', '2023-12-26 14:16:38', '0673081386'),
(544, 'Yassine Ouayach', 'y.ouayach@gmail.com', 'Offre amortisseur Monroe orti', 'Bonjour \r\n\r\nJe souhaite savoir la disponibilité des amortisseurs monroe G2227 et le prix svp ?\r\n\r\nMerci', NULL, '2023-12-26 14:16:40', '2023-12-26 14:16:40', '0673081386'),
(545, 'Yassine Ouayach', 'y.ouayach@gmail.com', 'Offre amortisseur Monroe orti', 'Bonjour \r\n\r\nJe souhaite savoir la disponibilité des amortisseurs monroe G2227 et le prix svp ?\r\n\r\nMerci', NULL, '2023-12-26 14:16:52', '2023-12-26 14:16:52', '0673081386'),
(546, 'Yassine Ouayach', 'y.ouayach@gmail.com', 'Offre amortisseur Monroe orti', 'Bonjour \r\n\r\nJe souhaite savoir la disponibilité des amortisseurs monroe G2227 et le prix svp ?\r\n\r\nMerci', NULL, '2023-12-26 14:16:57', '2023-12-26 14:16:57', '0673081386'),
(547, 'Yassine Ouayach', 'y.ouayach@gmail.com', 'Offre amortisseur Monroe orti', 'Bonjour \r\n\r\nJe souhaite savoir la disponibilité des amortisseurs monroe G2227 et le prix svp ?\r\n\r\nMerci', NULL, '2023-12-26 14:16:58', '2023-12-26 14:16:58', '0673081386'),
(548, 'Yassine Ouayach', 'y.ouayach@gmail.com', 'Offre amortisseur Monroe orti', 'Bonjour \r\n\r\nJe souhaite savoir la disponibilité des amortisseurs monroe G2227 et le prix svp ?\r\n\r\nMerci', NULL, '2023-12-26 14:16:58', '2023-12-26 14:16:58', '0673081386'),
(549, 'Yassine Ouayach', 'y.ouayach@gmail.com', 'Offre amortisseur Monroe orti', 'Bonjour \r\n\r\nJe souhaite savoir la disponibilité des amortisseurs monroe G2227 et le prix svp ?\r\n\r\nMerci', NULL, '2023-12-26 14:16:59', '2023-12-26 14:16:59', '0673081386'),
(550, 'Yassine Ouayach', 'y.ouayach@gmail.com', 'Offre amortisseur Monroe orti', 'Bonjour \r\n\r\nJe souhaite savoir la disponibilité des amortisseurs monroe G2227 et le prix svp ?\r\n\r\nMerci', NULL, '2023-12-26 14:16:59', '2023-12-26 14:16:59', '0673081386'),
(551, 'Eddoubaji zineb', 'eddoubajizineb100@gmail.com', 'Je suis une femme  agent de magasinier', 'Je suis intéressé pour travailler avec vous', NULL, '2023-12-26 14:34:07', '2023-12-26 14:34:07', '0606136858'),
(552, 'silver auto service', 'silverautoservices22@gmail.com', 'collaboration', 'nos avons besoin d\'un de vos vendeur itinérant pour  une éventuel collaboration', NULL, '2023-12-26 14:51:32', '2023-12-26 14:51:32', '0661593494'),
(553, 'Monentreprise', 'mustaphaabouahmed01@gmail.com', 'initialiser mon compte', 'bj je veux ,initialiser monpte pou la livraiston en gros mercis', NULL, '2023-12-26 16:42:14', '2023-12-26 16:42:14', '0661787675'),
(554, 'محمد', 'elmadkorimohamd@gmail.com', '.......', 'واو', NULL, '2023-12-28 12:00:49', '2023-12-28 12:00:49', '0682859379'),
(555, 'khalid Msellek', 'msellek1@hotmail.com', 'bmw x3 2006', 'j ai besoin d amortisser arriere', NULL, '2023-12-28 19:51:27', '2023-12-28 19:51:27', '0640174222'),
(556, 'khalid Msellek', 'msellek1@hotmail.com', 'bmw x3 2006', 'j ai besoin d amortisser arriere', NULL, '2023-12-28 19:51:39', '2023-12-28 19:51:39', '0640174222'),
(557, 'khalid Msellek', 'msellek1@hotmail.com', 'bmw x3 2006', 'j ai besoin d amortisser arriere', NULL, '2023-12-28 19:51:39', '2023-12-28 19:51:39', '0640174222'),
(558, 'khalid Msellek', 'msellek1@hotmail.com', 'bmw x3 2006', 'j ai besoin d amortisser arriere', NULL, '2023-12-28 19:51:40', '2023-12-28 19:51:40', '0640174222'),
(559, 'Eager Chen', 'sales20@bosoko.com', 'Ｗiper Blade', 'Dear Friend,\r\n\r\nThis is Eager from Bosoko, a professional wiper blade manufacturer in China. We have been in this business for more than 20 years, and our annual production capacity is 75 million pieces wiper blades. Because of our huge production capacity, we can get a much better cost for our raw material, so that we can offer much better price for our quality products. Our products are well recognized by our customers from all over the world, such as Russia, Turkey, Italy, Argentina...etc.\r\n\r\nOur factory covers more than one hundred thousand square meters and we have more than one thousand employees. We probably are the largest wiper blade manufacturer in China. And we have been focusing on our product quality, in our company, we value our product quality the most, which is why many customers have been working with us for more than 10 years.\r\n\r\nMy dear friend, as you are also doing auto parts business, we hope to establish a long-term business relationship with you. We strongly believe that our cooperation will benefit both of our two companies greatly. May I know who I can talk to for new supplier development in your company? Thank you.\r\n\r\nLook forward to hearing from you shortly.', NULL, '2024-01-02 07:47:35', '2024-01-02 07:47:35', '8613610174915'),
(560, 'toklu speed autos', 'speedautosmagasin@gmail.com', 'distributeur', 'speed autos', NULL, '2024-01-02 14:47:49', '2024-01-02 14:47:49', '0760352968'),
(561, 'kaissi tijani', 'tijanikaissi3@gmail.com', 'طلب عمل', 'طلب عمل وشكرا', NULL, '2024-01-04 15:56:48', '2024-01-04 15:56:48', '0659293560'),
(562, 'Ayoub', 'ae92441@gmail.com', 'Demande d\'adhésion', 'Comment puis-je voir les produits ?', NULL, '2024-01-04 16:07:36', '2024-01-04 16:07:36', '0642331908'),
(563, 'Ghali Skalli', '09skalli@gmail.com', 'Demande d\'adhésion', 'Je voudrais faire des achats pour mes besoins particulier. Je fais de la mécanique sur mes voitures persos', NULL, '2024-01-06 09:48:27', '2024-01-06 09:48:27', '0662786652'),
(564, 'Ouartou', 'I.ouartou@gmail.com', 'Demande de piece de rechange', 'Besoin de pdr', NULL, '2024-01-07 11:51:44', '2024-01-07 11:51:44', '0661563519'),
(565, 'Ste Ela brothers', 'elabrothers23@gmail.com', 'Je veux être adhérent avec vous', 'Nous sommes une société de la mécanique localisé à Agadir j\' ai contacté votre société ici mais sans réponse', NULL, '2024-01-08 08:18:17', '2024-01-08 08:18:17', '0666230071'),
(566, 'PRO ACCESSOIRE AOTO', 'chaoukiism20@outlook.fr', 'DIGITALE PLATFORME DE VENTE ET ACHAT DE PIECE RECHANGE', 'je veus demander un campte pour accéder à la base de données de tous vos produits', NULL, '2024-01-08 13:16:39', '2024-01-08 13:16:39', '0767831665'),
(567, 'PRO ACCESSOIRE AOTO', 'chaoukiism20@outlook.fr', 'DIGITALE PLATFORME DE VENTE ET ACHAT DE PIECE RECHANGE', 'je veus demander un campte pour accéder à la base de données de tous vos produits', NULL, '2024-01-08 13:17:00', '2024-01-08 13:17:00', '0767831665'),
(568, 'PRO ACCESSOIRE AOTO', 'chaoukiism20@outlook.fr', 'DIGITALE PLATFORME DE VENTE ET ACHAT DE PIECE RECHANGE', 'je veus demander un campte pour accéder à la base de données de tous vos produits', NULL, '2024-01-08 13:17:01', '2024-01-08 13:17:01', '0767831665'),
(569, 'PRO ACCESSOIRE AOTO', 'chaoukiism20@outlook.fr', 'DIGITALE PLATFORME DE VENTE ET ACHAT DE PIECE RECHANGE', 'je veus demander un campte pour accéder à la base de données de tous vos produits', NULL, '2024-01-08 13:17:01', '2024-01-08 13:17:01', '0767831665'),
(570, 'PRO ACCESSOIRE AOTO', 'chaoukiism20@outlook.fr', 'DIGITALE PLATFORME DE VENTE ET ACHAT DE PIECE RECHANGE', 'je veus demander un campte pour accéder à la base de données de tous vos produits', NULL, '2024-01-08 13:17:02', '2024-01-08 13:17:02', '0767831665'),
(571, 'PRO ACCESSOIRE AOTO', 'chaoukiism20@outlook.fr', 'DIGITALE PLATFORME DE VENTE ET ACHAT DE PIECE RECHANGE', 'je veus demander un campte pour accéder à la base de données de tous vos produits', NULL, '2024-01-08 13:17:02', '2024-01-08 13:17:02', '0767831665'),
(572, 'PRO ACCESSOIRE AOTO', 'chaoukiism20@outlook.fr', 'DIGITALE PLATFORME DE VENTE ET ACHAT DE PIECE RECHANGE', 'je veus demander un campte pour accéder à la base de données de tous vos produits', NULL, '2024-01-08 13:17:14', '2024-01-08 13:17:14', '0767831665'),
(573, 'PRO ACCESSOIRE AOTO', 'chaoukiism20@outlook.fr', 'DIGITALE PLATFORME DE VENTE ET ACHAT DE PIECE RECHANGE', 'je veus demander un campte pour accéder à la base de données de tous vos produits', NULL, '2024-01-08 13:17:17', '2024-01-08 13:17:17', '0767831665'),
(574, 'PRO ACCESSOIRE AOTO', 'chaoukiism20@outlook.fr', 'DIGITALE PLATFORME DE VENTE ET ACHAT DE PIECE RECHANGE', 'je veus demander un campte pour accéder à la base de données de tous vos produits', NULL, '2024-01-08 13:17:18', '2024-01-08 13:17:18', '0767831665'),
(575, 'PRO ACCESSOIRE AOTO', 'chaoukiism20@outlook.fr', 'DIGITALE PLATFORME DE VENTE ET ACHAT DE PIECE RECHANGE', 'je veus demander un campte pour accéder à la base de données de tous vos produits', NULL, '2024-01-08 13:17:20', '2024-01-08 13:17:20', '0767831665'),
(576, 'PRO ACCESSOIRE AOTO', 'chaoukiism20@outlook.fr', 'DIGITALE PLATFORME DE VENTE ET ACHAT DE PIECE RECHANGE', 'je veus demander un campte pour accéder à la base de données de tous vos produits', NULL, '2024-01-08 13:17:21', '2024-01-08 13:17:21', '0767831665'),
(577, 'PRO ACCESSOIRE AOTO', 'chaoukiism20@outlook.fr', 'DIGITALE PLATFORME DE VENTE ET ACHAT DE PIECE RECHANGE', 'je veus demander un campte pour accéder à la base de données de tous vos produits', NULL, '2024-01-08 13:17:30', '2024-01-08 13:17:30', '0767831665'),
(578, 'PRO ACCESSOIRE AOTO', 'chaoukiism20@outlook.fr', 'DIGITALE PLATFORME DE VENTE ET ACHAT DE PIECE RECHANGE', 'je veus demander un campte pour accéder à la base de données de tous vos produits', NULL, '2024-01-08 13:17:32', '2024-01-08 13:17:32', '0767831665');
INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `deleted_at`, `created_at`, `updated_at`, `tel`) VALUES
(579, 'PRO ACCESSOIRE AOTO', 'chaoukiism20@outlook.fr', 'DIGITALE PLATFORME DE VENTE ET ACHAT DE PIECE RECHANGE', 'je veus demander un campte pour accéder à la base de données de tous vos produits', NULL, '2024-01-08 13:17:35', '2024-01-08 13:17:35', '0767831665'),
(580, 'PRO ACCESSOIRE AOTO', 'chaoukiism20@outlook.fr', 'DIGITALE PLATFORME DE VENTE ET ACHAT DE PIECE RECHANGE', 'je veus demander un campte pour accéder à la base de données de tous vos produits', NULL, '2024-01-08 13:17:36', '2024-01-08 13:17:36', '0767831665'),
(581, 'PRO ACCESSOIRE AOTO', 'chaoukiism20@outlook.fr', 'DIGITALE PLATFORME DE VENTE ET ACHAT DE PIECE RECHANGE', 'je veus avoir un campte pour accéder à la base de données de tous vos produits', NULL, '2024-01-08 13:19:53', '2024-01-08 13:19:53', '0767831665'),
(582, 'SAKAN TLT', 'sakan.tlt@gmail.com', 'Demande d\'adhésion à l\'espace professionnel', 'Bonjour.\r\nNous sommes revendeurs de pièces détachées installés à TAMESNA et nous sommes client d\'Autoplus et nous souhaitons avoir accès à la plateforme professionnelle et ainsi être en mesure de passer des commandes en ligne.\r\nCordialement', NULL, '2024-01-09 20:41:12', '2024-01-09 20:41:12', '0661355507'),
(583, 'SAKAN TLT', 'sakan.tlt@gmail.com', 'Demande d\'adhésion à l\'espace professionnel', 'Bonjour.\r\nNous sommes revendeurs de pièces détachées installés à TAMESNA et nous sommes client d\'Autoplus et nous souhaitons avoir accès à la plateforme professionnelle et ainsi être en mesure de passer des commandes en ligne.\r\nCordialement', NULL, '2024-01-09 20:42:03', '2024-01-09 20:42:03', '0661355507'),
(584, 'Chafik  EL-MANSORI', 'chafikmen@gmail.com', 'devenir client', 'devenir client', NULL, '2024-01-10 14:38:02', '2024-01-10 14:38:02', '0671048551'),
(585, 'Chafik  EL-MANSORI', 'chafikmen@gmail.com', 'devenir client', 'devenir client', NULL, '2024-01-10 14:38:17', '2024-01-10 14:38:17', '0671048551'),
(586, 'Chafik  EL-MANSORI', 'chafikmen@gmail.com', 'devenir client', 'je voudrer etre un client du votre société', NULL, '2024-01-10 14:43:23', '2024-01-10 14:43:23', '0671048551'),
(587, 'azmano', 'azestheticar@gmail.com', 'Offre de parteneriat', 'Bonjour\r\n\r\nAyant une société de de communication avec des équipes de commerciaux et un méthode marketing ayant déjà porté ses fruits sur le marché marocain et français, je souhaiterais commercialisé vos produits.\r\n\r\nPourrions-nous convenir d’un rdv (physique ou téléphonique) afin de parler des modalités et comment on pourrais procéder?\r\n\r\nVoici le numéro sur lequel vous pourrais me joindre: 06 23 67 53 95 (disponible également sur Whatsapp).\r\n\r\nJe reste à votre disposition pour toute question\r\nCordialement\r\nAZMANO Amine', NULL, '2024-01-11 10:45:42', '2024-01-11 10:45:42', '0623675395'),
(588, 'ghostdz', 'shinefelok@outlook.com', 'sqqsdqs', 'sqdqsdqs', NULL, '2024-01-11 14:24:57', '2024-01-11 14:24:57', '0552255885'),
(589, 'Titanium maintenance et services', 'Titanium.serviceplus@gmail.com', 'Demande d\'accès a vos produits', 'Nous somme une ste de reparation automobile \r\nEt nous souhaitons etre parmi vos adhérents pour touts ce qui concerne l\'achat des pieces de rechange', NULL, '2024-01-12 21:07:41', '2024-01-12 21:07:41', '0660631929'),
(590, 'Titanium maintenance et services', 'Titanium.serviceplus@gmail.com', 'Demande d\'accès a vos produits', 'Nous somme une ste de reparation automobile \r\nEt nous souhaitons etre parmi vos adhérents pour touts ce qui concerne l\'achat des pieces de rechange', NULL, '2024-01-12 21:07:58', '2024-01-12 21:07:58', '0660631929'),
(591, 'Titanium maintenance et services', 'Titanium.serviceplus@gmail.com', 'Demande d\'accès a vos produits', 'Nous somme une ste de reparation automobil\r\nNous souhaitons devenir permis vos client pour l\'achat des PDR', NULL, '2024-01-12 22:50:59', '2024-01-12 22:50:59', '0660631929'),
(592, 'hdxjorf@gmail.com', 'hdxjorf@gmail.com', 'etre', 'rrrr', NULL, '2024-01-13 12:22:26', '2024-01-13 12:22:26', '0660487480'),
(593, 'Hajaoui', 'zineb.hajaoui@seyidoglutedarik.com', 'offre de Business', 'Bonjour\r\nJe suis Zineb de la société Turque \"SEYIDOGLU AUTOMOTİVE\", commerçants de pièces de rechange d\'origine. Je voudrais savoir si vous vous occupez de pièces de rechange ? ou si vous avez une idée de qui je peux contacter à ce sujet', NULL, '2024-01-15 09:55:36', '2024-01-15 09:55:36', '+905017501232'),
(594, 'Noureddine TARIK', 'tarik.nour.34@gmail.com', 'Responsable commercial', 'bonjour Mme, Mr;\r\n\r\nJe vous adresse ma candidature pour un poste de commercial terrain à Agadir au sein de votre société.\r\n Fort d\'une expérience diversifiée dans la vente B2B ET B2C, je suis enthousiaste de contribuer à votre équipe dynamique et de m\'investir dans ce domaine.\r\nj\'ai acquis une expertise approfondie en matière de vente produits et services, de négociation et de développement de relations clients et ma capacité à apprendre rapidement me permettent de m\'immerger rapidement dans de nouveaux secteurs.\r\n\r\nDans l\'attente de votre réponse veuillez agréer Madame Monsieur l\'expression de mes salutations.\r\n\r\n\r\nCordialement.\r\n\r\nNoureddine TARIK\r\n0640300404\r\ntarik.nour.34@gmail.com', NULL, '2024-01-16 12:20:16', '2024-01-16 12:20:16', '0640300404'),
(595, 'Noureddine TARIK', 'tarik.nour.34@gmail.com', 'Responsable commercial', 'bonjour Mme, Mr;\r\n\r\nJe vous adresse ma candidature pour un poste de commercial terrain à Agadir au sein de votre société.\r\n Fort d\'une expérience diversifiée dans la vente B2B ET B2C, je suis enthousiaste de contribuer à votre équipe dynamique et de m\'investir dans ce domaine.\r\nj\'ai acquis une expertise approfondie en matière de vente produits et services, de négociation et de développement de relations clients et ma capacité à apprendre rapidement me permettent de m\'immerger rapidement dans de nouveaux secteurs.\r\n\r\nDans l\'attente de votre réponse veuillez agréer Madame Monsieur l\'expression de mes salutations.\r\n\r\n\r\nCordialement.\r\n\r\nNoureddine TARIK\r\n0640300404\r\ntarik.nour.34@gmail.com', NULL, '2024-01-16 12:20:29', '2024-01-16 12:20:29', '0640300404'),
(596, 'Noureddine TARIK', 'tarik.nour.34@gmail.com', 'Responsable commercial', 'bonjour Mme, Mr;\r\n\r\nJe vous adresse ma candidature pour un poste de commercial terrain à Agadir au sein de votre société.\r\n Fort d\'une expérience diversifiée dans la vente B2B ET B2C, je suis enthousiaste de contribuer à votre équipe dynamique et de m\'investir dans ce domaine.\r\nj\'ai acquis une expertise approfondie en matière de vente produits et services, de négociation et de développement de relations clients et ma capacité à apprendre rapidement me permettent de m\'immerger rapidement dans de nouveaux secteurs.\r\n\r\nDans l\'attente de votre réponse veuillez agréer Madame Monsieur l\'expression de mes salutations.\r\n\r\n\r\nCordialement.\r\n\r\nNoureddine TARIK\r\n0640300404\r\ntarik.nour.34@gmail.com', NULL, '2024-01-16 12:20:32', '2024-01-16 12:20:32', '0640300404'),
(597, 'Noureddine TARIK', 'tarik.nour.34@gmail.com', 'Responsable commercial', 'bonjour Mme, Mr;\r\n\r\nJe vous adresse ma candidature pour un poste de commercial terrain à Agadir au sein de votre société.\r\n Fort d\'une expérience diversifiée dans la vente B2B ET B2C, je suis enthousiaste de contribuer à votre équipe dynamique et de m\'investir dans ce domaine.\r\nj\'ai acquis une expertise approfondie en matière de vente produits et services, de négociation et de développement de relations clients et ma capacité à apprendre rapidement me permettent de m\'immerger rapidement dans de nouveaux secteurs.\r\n\r\nDans l\'attente de votre réponse veuillez agréer Madame Monsieur l\'expression de mes salutations.\r\n\r\n\r\nCordialement.\r\n\r\nNoureddine TARIK\r\n0640300404\r\ntarik.nour.34@gmail.com', NULL, '2024-01-16 12:20:49', '2024-01-16 12:20:49', '0640300404'),
(598, 'Noureddine TARIK', 'tarik.nour.34@gmail.com', 'Responsable commercial', 'bonjour Mme, Mr;\r\n\r\nJe vous adresse ma candidature pour un poste de commercial terrain à Agadir au sein de votre société.\r\n Fort d\'une expérience diversifiée dans la vente B2B ET B2C, je suis enthousiaste de contribuer à votre équipe dynamique et de m\'investir dans ce domaine.\r\nj\'ai acquis une expertise approfondie en matière de vente produits et services, de négociation et de développement de relations clients et ma capacité à apprendre rapidement me permettent de m\'immerger rapidement dans de nouveaux secteurs.\r\n\r\nDans l\'attente de votre réponse veuillez agréer Madame Monsieur l\'expression de mes salutations.\r\n\r\n\r\nCordialement.\r\n\r\nNoureddine TARIK\r\n0640300404\r\ntarik.nour.34@gmail.com', NULL, '2024-01-16 12:20:51', '2024-01-16 12:20:51', '0640300404'),
(599, 'Noureddine TARIK', 'tarik.nour.34@gmail.com', 'Responsable commercial', 'Bonjour', NULL, '2024-01-16 12:23:22', '2024-01-16 12:23:22', '0640300404'),
(600, 'DISTRIBITEUR FILTER KRAL AUTO', 'DISTRIBUTEURFILTERKRALAUTODFKA@gmail.com', 'pièce auto', 'I WANT TO BECOME A CLIENT', NULL, '2024-01-18 18:35:46', '2024-01-18 18:35:46', '0667846331'),
(601, 'BERCHID Charaf Eddine', 'charafeddineberchid@gmail.com', 'Candidature de Mr. Berchid Charaf eddine au poste Responsable Management Qualité', 'Bonjours\r\n\r\nJe vous prie de trouver ci-joint mon CV en Candidature au Poste Responsable Management Qualité.\r\n\r\nMes sincères salutations.\r\n\r\nMr. Charaf Eddine BERCHID\r\n\r\nTél : 06 20 55 97 20\r\n\r\nhttps://drive.google.com/file/d/141yDKkFU7AQ05Dpkx_TOSVVqa6gQvZDg/view?usp=drive_link', NULL, '2024-01-21 14:19:44', '2024-01-21 14:19:44', '0620559720'),
(602, 'BK2R TRANSPORT', 'bouhsine.said@gmail.com', 'Achat de PDR', 'Achat de PDR', NULL, '2024-01-22 12:36:07', '2024-01-22 12:36:07', '0662182321'),
(603, 'Bernard HOULIER', 'contact@rpmgarage-marrakech.com', 'Fourniture pieces et consommables', 'Bonjour\r\nPour notre garage à Marrakech, nous cherchons un fournisseur/grossiste proposant des marques reconnues. Nous sommes spécialisés PORSCHE, AUDI, MERCEDES; BMW;', NULL, '2024-01-25 08:17:26', '2024-01-25 08:17:26', '0761511303'),
(604, 'ZOHIR BOULARF', 'zouhirboularf098@gmail.com', 'Cherche d\'un emploi avec vous s\'il vous plaît', 'Bonjour je m\'appelle zohir 30 ans habitant à Meknès je suis intéressé pour travaille avec vous', NULL, '2024-01-26 20:36:45', '2024-01-26 20:36:45', '0641069546'),
(605, 'ZOHIR BOULARF', 'zouhirboularf098@gmail.com', 'Cherche d\'un emploi avec vous s\'il vous plaît', 'Bonjour je m\'appelle zohir 30 ans habitant à Meknès je suis intéressé pour travaille avec vous', NULL, '2024-01-26 20:37:42', '2024-01-26 20:37:42', '0641069546'),
(606, 'Hasnaoui Mohamed', 'hasnaouimohamed2013@gmail.com', 'Demande inscription', 'Je vous souhaite faire compte client', NULL, '2024-01-26 21:30:54', '2024-01-26 21:30:54', '0677881459'),
(607, 'Hasnaoui Mohamed', 'hasnaouimohamed2013@gmail.com', 'Demande inscription', 'Je vous souhaite faire un compte client', NULL, '2024-01-26 21:32:42', '2024-01-26 21:32:42', '0677881459'),
(608, 'Hasnaoui Mohamed', 'hasnaouimohamed2013@gmail.com', 'Demande inscription', 'Je vous souhaite faire un compte client', NULL, '2024-01-26 21:32:45', '2024-01-26 21:32:45', '0677881459'),
(609, 'Hasnaoui Mohamed', 'hasnaouimohamed2013@gmail.com', 'Demande inscription', 'Je vous souhaite faire un compte client', NULL, '2024-01-26 21:42:36', '2024-01-26 21:42:36', '0677881459'),
(610, 'HAMZIOUI HANINE', 'hanine.hamzioui@gmail.com', 'Demande d\'adhesion', 'Merci de me fournir un login/MDP. Merci', NULL, '2024-01-31 20:24:44', '2024-01-31 20:24:44', '0620943223'),
(611, 'garage l\'dar', 'garageldar@gmail.com', 'compte professionnel', 'Bonjour,\r\nJe voudrais voudrais un compte professionnel.\r\nCordialement', NULL, '2024-02-01 12:10:25', '2024-02-01 12:10:25', '0701605459'),
(612, 'garage l\'dar', 'garageldar@gmail.com', 'compte professionnel', 'Bonjour,\r\nJe voudrais voudrais un compte professionnel.\r\nCordialement', NULL, '2024-02-01 12:13:24', '2024-02-01 12:13:24', '0701605459'),
(613, 'garage l\'dar', 'garageldar@gmail.com', 'compte professionnel', 'Bonjour,\r\nJe voudrais voudrais un compte professionnel.\r\nCordialement', NULL, '2024-02-01 12:13:28', '2024-02-01 12:13:28', '0701605459'),
(614, 'garage l\'dar', 'garageldar@gmail.com', 'compte professionnel', 'Bonjour,\r\nJe voudrais voudrais un compte professionnel.\r\nCordialement', NULL, '2024-02-01 12:13:28', '2024-02-01 12:13:28', '0701605459'),
(615, 'garage l\'dar', 'garageldar@gmail.com', 'compte professionnel', 'Bonjour,\r\nJe voudrais voudrais un compte professionnel.\r\nCordialement', NULL, '2024-02-01 12:13:29', '2024-02-01 12:13:29', '0701605459'),
(616, 'garage l\'dar', 'garageldar@gmail.com', 'compte professionnel', 'Bonjour,\r\nJe voudrais voudrais un compte professionnel.\r\nCordialement', NULL, '2024-02-01 12:13:29', '2024-02-01 12:13:29', '0701605459'),
(617, 'EL MOSTAFA KARBOUS', 'mustaphazoumi@gmail.com', 'الانضمام اليكم', 'انا مهني في بيع أجزاء السيارات', NULL, '2024-02-01 13:33:24', '2024-02-01 13:33:24', '0602339496'),
(618, 'madi omar', 'garageldar@gmail.com', 'puverture compte pro', 'Bonjour,\r\nJe voudrais ouvrir un compte professionnel. \r\nCordialement.', NULL, '2024-02-02 08:04:41', '2024-02-02 08:04:41', '0701605459'),
(619, 'aghilles kerbal', 'kerbal.aghilles@gmail.com', 'compte client', 'je veux creer un compte pour passer commande', NULL, '2024-02-03 08:34:35', '2024-02-03 08:34:35', '0684219267'),
(620, 'Tahiri', 'mstaf25_2@hotmail.com', 'Demande d Adhésion', 'Demande d Adhésion a la base des données  pour faire des comande de piece de rechange automobil', NULL, '2024-02-05 20:44:28', '2024-02-05 20:44:28', '0600496203'),
(621, 'Tahiri', 'mstaf25_2@hotmail.com', 'Demande d Adhésion', 'Demande d Adhésion a la base des données  pour faire des comande de piece de rechange automobil', NULL, '2024-02-05 20:44:57', '2024-02-05 20:44:57', '0600496203'),
(622, 'Tahiri', 'mstaf25_2@hotmail.com', 'Demande d Adhésion', 'Demande d Adhésion a la base des données  pour faire des comande de piece de rechange automobil', NULL, '2024-02-05 20:44:58', '2024-02-05 20:44:58', '0600496203'),
(623, 'Tahiri', 'mstaf25_2@hotmail.com', 'Demande d Adhésion', 'Demande d Adhésion a la base des données  pour faire des comande de piece de rechange automobil', NULL, '2024-02-05 20:44:58', '2024-02-05 20:44:58', '0600496203'),
(624, 'Tahiri', 'mstaf25_2@hotmail.com', 'Demande d Adhésion', 'Demande d Adhésion a la base des données  pour faire des comande de piece de rechange automobil', NULL, '2024-02-05 20:44:59', '2024-02-05 20:44:59', '0600496203'),
(625, 'Tahiri', 'mstaf25_2@hotmail.com', 'Demande d Adhésion', 'Demande d Adhésion a la base des données  pour faire des comande de piece de rechange automobil', NULL, '2024-02-05 20:45:00', '2024-02-05 20:45:00', '0600496203'),
(626, 'Tahiri', 'mstaf25_2@hotmail.com', 'Demande d Adhésion', 'Demande d Adhésion a la base des données  pour faire des comande de piece de rechange automobil', NULL, '2024-02-05 20:45:15', '2024-02-05 20:45:15', '0600496203'),
(627, 'adnane alioua', 'adnane2121@live.fr', 'Demande d adhesion', 'Demande d adhesion', NULL, '2024-02-07 05:14:16', '2024-02-07 05:14:16', '0563587832'),
(628, 'Younes Bzioui', 'Bzioui53@gmail.com', 'Demande d\'adhésion', 'Merci d\'accepter ma demande d\'adhésion.', NULL, '2024-02-07 18:11:09', '2024-02-07 18:11:09', '06 72 292 192'),
(629, 'Carrosserie auto adnane  sarl', 'carrosserieadnane@gmail.com', 'Demande d\'information', 'Bonjour,\r\nMerci de me cotacter ou m\'envoyer le numero de téléphone de votre commercial à marrakech.', NULL, '2024-02-08 22:32:58', '2024-02-08 22:32:58', '0666542299'),
(630, 'Carrosserie auto adnane  sarl', 'carrosserieadnane@gmail.com', 'Demande d\'information', 'Bonjour,\r\nMerci de me cotacter ou m\'envoyer le numero de téléphone de votre commercial à marrakech.', NULL, '2024-02-08 22:33:08', '2024-02-08 22:33:08', '0666542299'),
(631, 'Carrosserie auto adnane  sarl', 'carrosserieadnane@gmail.com', 'Demande d\'information', 'Bonjour,\r\nMerci de me cotacter ou m\'envoyer le numero de téléphone de votre commercial à marrakech.', NULL, '2024-02-08 22:33:13', '2024-02-08 22:33:13', '0666542299'),
(632, 'RAZZOUKI NABIL', 'nabil.razzouki@gmail.com', 'LOT DE PIECES AUTOMOBILES NEUVES - TARIFS COMPETITIFS', 'Bonjour, je suis Nabil Razzouki, je suis chargé d\'affaires pour mon propre compte. J\'aimerais vous proposer un lot de pièces automobiles de plus de 9000 PIÈCES contenant en majorité des plaquettes de freins, disques de freins, kits de distribution, filtres à air, eamortisseurs, rotules, triangles etc... Le tarif peut etre très competitif. Je peux vous envoyer un listing détaillé de toutes les pièces qui composent le lot. Vous pouvez me joindre par mail ou par telephone ou sur whatsapp. Merci beaucoup !', NULL, '2024-02-12 15:01:26', '2024-02-12 15:01:26', '0610342819'),
(633, 'Nichole Harris', 'notification@domainsystems.co', 'JMHOLZHANDEL.COM TERMINATION FINAL ALERT', 'Disclaimer: We are not responsible for any monetary loss, information loss, downgrade in search engine rankings, overlooked patrons, undeliverable email or any other detriments that you may incur upon the termination of jmholzhandel.com. For more details please consult section 5.d.1a of our Terms of Service.\r\nThis represents your ultimate warning to renew jmholzhandel.com:\r\nhttps://domainsystems.co/renew/Sk1IT0xaSEFOREVMLkNPTQ\r\nIn the event that jmholzhandel.com ceases, we hold the privilege to offer your listing to rival businesses in the same sector and region after 3 business days on an sale basis.\r\nThis constitutes the last notice that we are required to send out pertaining to the expiry of jmholzhandel.com\r\nSecure Online Payment:\r\nhttps://domainsystems.co/renew/Sk1IT0xaSEFOREVMLkNPTQ\r\nAll operations will be instantly reinstated on jmholzhandel.com if payment is obtained in full before expiration. Thanks for  your cooperation.', NULL, '2024-02-14 02:44:06', '2024-02-14 02:44:06', '26575504819'),
(634, 'Can Am Importation Inc', 'canamimportationinc@gmail.com', 'I would like to open an account with you  and get a login and password to order from you online', 'I AM HAPPY TO PROVIDE YOU WHAT EVER DOCUMENTS YOU REQUIRE.', NULL, '2024-02-14 08:52:50', '2024-02-14 08:52:50', '212632486207'),
(635, 'BETTIOUI HOUDA', 'houdabettioui12@gmail.com', 'DEMANDE D\'EMPLOI', 'BONSOIR VEUILLEZ TROUVEZ CI JOINT MON CV POUR UN EVENTUEL EMPLOI AU SEIN DE VOTRE SOCIETE', NULL, '2024-02-15 22:13:09', '2024-02-15 22:13:09', '0668237212'),
(636, 'Karl', 'willkoblavi@gmail.com', 'Pièces de rechange', 'Bonjour, \r\nJe cherche des pièces de rechange pour les modèles Suzuki Dzire et Suzuki Spresso.\r\nMerci', NULL, '2024-02-18 11:32:18', '2024-02-18 11:32:18', '0665946904'),
(637, 'Karl', 'willkoblavi@gmail.com', 'Pièces de rechange', 'Bonjour, \r\nJe cherche des pièces de rechange pour les modèles Suzuki Dzire et Suzuki Spresso.\r\nMerci', NULL, '2024-02-18 11:32:26', '2024-02-18 11:32:26', '0665946904'),
(638, 'Mohammed CHRAIBI', 'medkotra@gmail.com', 'Proposition de Partenariat avec une entreprise coréen', 'Bonjour, \r\n\r\nJ\'espère que ce courriel vous trouve en bonne santé et prospérité. Permettez-moi de me présenter, Je suis CHRAIBI Mohammed, un consultant commercial chez KOTRA CASABLANCA, la section commerciale du l’ambassade de la Corée du Sud.\r\n\r\nJe me permets de vous contacter afin d\'explorer les possibilités de collaboration entre vous et une entreprise coréen réputée dans le secteur des pièces de rechange automobiles, précisément les pièces de suspensions.\r\n\r\nNous serions ravis de discuter plus en détail de cette opportunité et de vous fournir toute l\'assistance nécessaire pour faciliter la mise en place de ce partenariat, Que ce soit pour des réunions exploratoires, la coordination des échanges d\'informations ou toute autre démarche, nous nous engageons à vous accompagner à chaque étape du processus.\r\n\r\nSi cette proposition suscite votre intérêt, je vous propose de planifier une réunion pour discuter des prochaines étapes et explorer comment nous pouvons concrétiser cette opportunité de partenariat.\r\n\r\nDans l\'attente de votre réponse, je vous prie d\'agréer, Madame, \r\nMonsieur, l\'expression de mes salutations distinguées.\r\n\r\n CHRAIBI Mohammed\r\n\r\nTrade Consultant\r\n\r\nE-mail : medkotra@gmail.com\r\n\r\n       M :  +212 688 73 32 53             \r\n\r\nKOTRA CASABLANCA\r\n\r\n      KOTRA Casablanca est la section commerciale de l\'ambassade de la République de Corée qui renforce les relations commerciales entre la Corée et le Maroc\r\n\r\nBd Ghandi, Ghandi Mall Imm 8, 2ème étage.\r\n\r\n   T :  +212 522 98 96 27 / 98 46 36\r\n   F :  +212 522 99 45 13', NULL, '2024-02-19 13:03:04', '2024-02-19 13:03:04', '0688733253'),
(639, 'Mohammed CHRAIBI', 'medkotra@gmail.com', 'Proposition de Partenariat avec une entreprise coréen', 'Bonjour, \r\n\r\nJ\'espère que ce courriel vous trouve en bonne santé et prospérité. Permettez-moi de me présenter, Je suis CHRAIBI Mohammed, un consultant commercial chez KOTRA CASABLANCA, la section commerciale du l’ambassade de la Corée du Sud.\r\n\r\nJe me permets de vous contacter afin d\'explorer les possibilités de collaboration entre vous et une entreprise coréen réputée dans le secteur des pièces de rechange automobiles, précisément les pièces de suspensions.\r\n\r\nNous serions ravis de discuter plus en détail de cette opportunité et de vous fournir toute l\'assistance nécessaire pour faciliter la mise en place de ce partenariat, Que ce soit pour des réunions exploratoires, la coordination des échanges d\'informations ou toute autre démarche, nous nous engageons à vous accompagner à chaque étape du processus.\r\n\r\nSi cette proposition suscite votre intérêt, je vous propose de planifier une réunion pour discuter des prochaines étapes et explorer comment nous pouvons concrétiser cette opportunité de partenariat.\r\n\r\nDans l\'attente de votre réponse, je vous prie d\'agréer, Madame, \r\nMonsieur, l\'expression de mes salutations distinguées.\r\n\r\n CHRAIBI Mohammed\r\n\r\nTrade Consultant\r\n\r\nE-mail : medkotra@gmail.com\r\n\r\n       M :  +212 688 73 32 53             \r\n\r\nKOTRA CASABLANCA\r\n\r\n      KOTRA Casablanca est la section commerciale de l\'ambassade de la République de Corée qui renforce les relations commerciales entre la Corée et le Maroc\r\n\r\nBd Ghandi, Ghandi Mall Imm 8, 2ème étage.\r\n\r\n   T :  +212 522 98 96 27 / 98 46 36\r\n   F :  +212 522 99 45 13', NULL, '2024-02-19 13:06:06', '2024-02-19 13:06:06', '0688733253'),
(640, 'Mohammed CHRAIBI', 'medkotra@gmail.com', 'Proposition de Partenariat avec une entreprise coréen', 'Bonjour, \r\n\r\nJ\'espère que ce courriel vous trouve en bonne santé et prospérité. Permettez-moi de me présenter, Je suis CHRAIBI Mohammed, un consultant commercial chez KOTRA CASABLANCA, la section commerciale du l’ambassade de la Corée du Sud.\r\n\r\nJe me permets de vous contacter afin d\'explorer les possibilités de collaboration entre vous et une entreprise coréen réputée dans le secteur des pièces de rechange automobiles, précisément les pièces de suspensions.\r\n\r\nNous serions ravis de discuter plus en détail de cette opportunité et de vous fournir toute l\'assistance nécessaire pour faciliter la mise en place de ce partenariat, Que ce soit pour des réunions exploratoires, la coordination des échanges d\'informations ou toute autre démarche, nous nous engageons à vous accompagner à chaque étape du processus.\r\n\r\nSi cette proposition suscite votre intérêt, je vous propose de planifier une réunion pour discuter des prochaines étapes et explorer comment nous pouvons concrétiser cette opportunité de partenariat.\r\n\r\nDans l\'attente de votre réponse, je vous prie d\'agréer, Madame, \r\nMonsieur, l\'expression de mes salutations distinguées.\r\n\r\n CHRAIBI Mohammed\r\n\r\nTrade Consultant\r\n\r\nE-mail : medkotra@gmail.com\r\n\r\n       M :  +212 688 73 32 53             \r\n\r\nKOTRA CASABLANCA\r\n\r\n      KOTRA Casablanca est la section commerciale de l\'ambassade de la République de Corée qui renforce les relations commerciales entre la Corée et le Maroc\r\n\r\nBd Ghandi, Ghandi Mall Imm 8, 2ème étage.\r\n\r\n   T :  +212 522 98 96 27 / 98 46 36\r\n   F :  +212 522 99 45 13', NULL, '2024-02-19 13:06:06', '2024-02-19 13:06:06', '0688733253'),
(641, 'Mohammed CHRAIBI', 'medkotra@gmail.com', 'Proposition de Partenariat avec une entreprise coréen', 'Bonjour, \r\n\r\nJ\'espère que ce courriel vous trouve en bonne santé et prospérité. Permettez-moi de me présenter, Je suis CHRAIBI Mohammed, un consultant commercial chez KOTRA CASABLANCA, la section commerciale du l’ambassade de la Corée du Sud.\r\n\r\nJe me permets de vous contacter afin d\'explorer les possibilités de collaboration entre vous et une entreprise coréen réputée dans le secteur des pièces de rechange automobiles, précisément les pièces de suspensions.\r\n\r\nNous serions ravis de discuter plus en détail de cette opportunité et de vous fournir toute l\'assistance nécessaire pour faciliter la mise en place de ce partenariat, Que ce soit pour des réunions exploratoires, la coordination des échanges d\'informations ou toute autre démarche, nous nous engageons à vous accompagner à chaque étape du processus.\r\n\r\nSi cette proposition suscite votre intérêt, je vous propose de planifier une réunion pour discuter des prochaines étapes et explorer comment nous pouvons concrétiser cette opportunité de partenariat.\r\n\r\nDans l\'attente de votre réponse, je vous prie d\'agréer, Madame, \r\nMonsieur, l\'expression de mes salutations distinguées.\r\n\r\n CHRAIBI Mohammed\r\n\r\nTrade Consultant\r\n\r\nE-mail : medkotra@gmail.com\r\n\r\n       M :  +212 688 73 32 53             \r\n\r\nKOTRA CASABLANCA\r\n\r\n      KOTRA Casablanca est la section commerciale de l\'ambassade de la République de Corée qui renforce les relations commerciales entre la Corée et le Maroc\r\n\r\nBd Ghandi, Ghandi Mall Imm 8, 2ème étage.\r\n\r\n   T :  +212 522 98 96 27 / 98 46 36\r\n   F :  +212 522 99 45 13', NULL, '2024-02-19 13:06:06', '2024-02-19 13:06:06', '0688733253'),
(642, 'Mohammed CHRAIBI', 'medkotra@gmail.com', 'Proposition de Partenariat avec une entreprise coréen', 'Bonjour, \r\n\r\nJ\'espère que ce courriel vous trouve en bonne santé et prospérité. Permettez-moi de me présenter, Je suis CHRAIBI Mohammed, un consultant commercial chez KOTRA CASABLANCA, la section commerciale du l’ambassade de la Corée du Sud.\r\n\r\nJe me permets de vous contacter afin d\'explorer les possibilités de collaboration entre vous et une entreprise coréen réputée dans le secteur des pièces de rechange automobiles, précisément les pièces de suspensions.\r\n\r\nNous serions ravis de discuter plus en détail de cette opportunité et de vous fournir toute l\'assistance nécessaire pour faciliter la mise en place de ce partenariat, Que ce soit pour des réunions exploratoires, la coordination des échanges d\'informations ou toute autre démarche, nous nous engageons à vous accompagner à chaque étape du processus.\r\n\r\nSi cette proposition suscite votre intérêt, je vous propose de planifier une réunion pour discuter des prochaines étapes et explorer comment nous pouvons concrétiser cette opportunité de partenariat.\r\n\r\nDans l\'attente de votre réponse, je vous prie d\'agréer, Madame, \r\nMonsieur, l\'expression de mes salutations distinguées.\r\n\r\n CHRAIBI Mohammed\r\n\r\nTrade Consultant\r\n\r\nE-mail : medkotra@gmail.com\r\n\r\n       M :  +212 688 73 32 53             \r\n\r\nKOTRA CASABLANCA\r\n\r\n      KOTRA Casablanca est la section commerciale de l\'ambassade de la République de Corée qui renforce les relations commerciales entre la Corée et le Maroc\r\n\r\nBd Ghandi, Ghandi Mall Imm 8, 2ème étage.\r\n\r\n   T :  +212 522 98 96 27 / 98 46 36\r\n   F :  +212 522 99 45 13', NULL, '2024-02-19 13:06:06', '2024-02-19 13:06:06', '0688733253'),
(643, 'Mohammed CHRAIBI', 'medkotra@gmail.com', 'Proposition de Partenariat avec une entreprise coréen', 'Bonjour, \r\n\r\nJ\'espère que ce courriel vous trouve en bonne santé et prospérité. Permettez-moi de me présenter, Je suis CHRAIBI Mohammed, un consultant commercial chez KOTRA CASABLANCA, la section commerciale du l’ambassade de la Corée du Sud.\r\n\r\nJe me permets de vous contacter afin d\'explorer les possibilités de collaboration entre vous et une entreprise coréen réputée dans le secteur des pièces de rechange automobiles, précisément les pièces de suspensions.\r\n\r\nNous serions ravis de discuter plus en détail de cette opportunité et de vous fournir toute l\'assistance nécessaire pour faciliter la mise en place de ce partenariat, Que ce soit pour des réunions exploratoires, la coordination des échanges d\'informations ou toute autre démarche, nous nous engageons à vous accompagner à chaque étape du processus.\r\n\r\nSi cette proposition suscite votre intérêt, je vous propose de planifier une réunion pour discuter des prochaines étapes et explorer comment nous pouvons concrétiser cette opportunité de partenariat.\r\n\r\nDans l\'attente de votre réponse, je vous prie d\'agréer, Madame, \r\nMonsieur, l\'expression de mes salutations distinguées.\r\n\r\n CHRAIBI Mohammed\r\n\r\nTrade Consultant\r\n\r\nE-mail : medkotra@gmail.com\r\n\r\n       M :  +212 688 73 32 53             \r\n\r\nKOTRA CASABLANCA\r\n\r\n      KOTRA Casablanca est la section commerciale de l\'ambassade de la République de Corée qui renforce les relations commerciales entre la Corée et le Maroc\r\n\r\nBd Ghandi, Ghandi Mall Imm 8, 2ème étage.\r\n\r\n   T :  +212 522 98 96 27 / 98 46 36\r\n   F :  +212 522 99 45 13', NULL, '2024-02-19 13:06:07', '2024-02-19 13:06:07', '0688733253'),
(644, 'Mohammed CHRAIBI', 'medkotra@gmail.com', 'Proposition de Partenariat avec une entreprise coréen', 'Bonjour, \r\n\r\nJ\'espère que ce courriel vous trouve en bonne santé et prospérité. Permettez-moi de me présenter, Je suis CHRAIBI Mohammed, un consultant commercial chez KOTRA CASABLANCA, la section commerciale du l’ambassade de la Corée du Sud.\r\n\r\nJe me permets de vous contacter afin d\'explorer les possibilités de collaboration entre vous et une entreprise coréen réputée dans le secteur des pièces de rechange automobiles, précisément les pièces de suspensions.\r\n\r\nNous serions ravis de discuter plus en détail de cette opportunité et de vous fournir toute l\'assistance nécessaire pour faciliter la mise en place de ce partenariat, Que ce soit pour des réunions exploratoires, la coordination des échanges d\'informations ou toute autre démarche, nous nous engageons à vous accompagner à chaque étape du processus.\r\n\r\nSi cette proposition suscite votre intérêt, je vous propose de planifier une réunion pour discuter des prochaines étapes et explorer comment nous pouvons concrétiser cette opportunité de partenariat.\r\n\r\nDans l\'attente de votre réponse, je vous prie d\'agréer, Madame, \r\nMonsieur, l\'expression de mes salutations distinguées.\r\n\r\n CHRAIBI Mohammed\r\n\r\nTrade Consultant\r\n\r\nE-mail : medkotra@gmail.com\r\n\r\n       M :  +212 688 73 32 53             \r\n\r\nKOTRA CASABLANCA\r\n\r\n      KOTRA Casablanca est la section commerciale de l\'ambassade de la République de Corée qui renforce les relations commerciales entre la Corée et le Maroc\r\n\r\nBd Ghandi, Ghandi Mall Imm 8, 2ème étage.\r\n\r\n   T :  +212 522 98 96 27 / 98 46 36\r\n   F :  +212 522 99 45 13', NULL, '2024-02-19 13:06:22', '2024-02-19 13:06:22', '0688733253'),
(645, 'lamrani', 'jojobenchouchan2@gmail.com', 'piece mini', 'je cherche la reference ci-apres : 18201176013\r\npour mini cooper r 53 s / 163', NULL, '2024-02-20 18:33:57', '2024-02-20 18:33:57', '0674815575'),
(646, 'Diana Davis', 'notification@domainscorporate.net', 'DEGOUDENZEBRA.NL EXPIRY NOTICE', 'Notice: We are not accountable for any monetary losses, information loss, downgrade in SEO rankings, overlooked clients, undeliverable email or any other harm that you may incur after the expiration of degoudenzebra.nl. For more info please consult section 89.e.1a of our User Agreement.\r\nThis represents your final notice to extend degoudenzebra.nl:\r\nhttps://domainscorporate.net/renew/REVHT1VERU5aRUJSQS5OTA\r\nIn the scenario that degoudenzebra.nl ceases, we reserve the right to present your position to competing businesses in the identical industry and zone after 3 business days on an sale basis.\r\nThis is the final message that we are obliged to send out regarding the expiration of degoudenzebra.nl\r\nSecure Online Payment:\r\nhttps://domainscorporate.net/renew/REVHT1VERU5aRUJSQS5OTA\r\nAll functions will be automatically renewed on degoudenzebra.nl if payment is obtained in full prior to expiration. We appreciate  your immediate attention to this.', NULL, '2024-02-22 00:37:24', '2024-02-22 00:37:24', '00172584224'),
(647, 'Soufiane Bendhiba', 'bendhiba.soufiane@gmail.com', 'Demande d\'adhésion', 'Souhaite adhérer a votre service', NULL, '2024-02-27 20:04:53', '2024-02-27 20:04:53', '0677808491'),
(648, 'SCOOBIJOU', 'contact@scoobijou.com', 'Cadeaux Journée de la Femme', 'Bonjour,\r\n\r\nNous sommes experts en cadeaux d\'entreprise et bijouterie fine et à l\'approche de la Journée Internationale des droits de la Femme, nous proposons des solutions personnalisées pour célébrer et reconnaître la contribution des femmes au sein de votre entreprise. Si vous êtes intéressés par des idées de cadeaux uniques et mémorables, n\'hésitez pas à nous contacter pour discuter de vos besoins spécifiques. Nous serons ravis de vous aider à trouver le cadeau parfait pour cette occasion spéciale.\r\n\r\nPar mail : contact@scoobijou.com\r\nTél / WhatsApp. +212 6 60 87 60 47\r\n\r\nL\'équipe ScooBijou', NULL, '2024-02-28 15:55:33', '2024-02-28 15:55:33', '0660876047'),
(649, 'Yassine BACHBACH', 'yassine.bachbache@gmail.com', 'Inscription', 'Etre un client', NULL, '2024-02-28 18:55:48', '2024-02-28 18:55:48', '0662654237'),
(650, 'Yassine BACHBACH', 'yassine.bachbache@gmail.com', 'Inscription', 'Etre un client', NULL, '2024-02-28 18:56:00', '2024-02-28 18:56:00', '0662654237'),
(651, 'Siham MOUKTASSI BILLAH', 'siham@securimag.ma', 'Offre de service / Service Achat', 'Bonjour ,\r\n\r\nC’est avec un grand plaisir que nous vous faisons parvenir un aperçu sur les produits et solutions de SECURIMAG leader marocain des systèmes de sécurité électronique et physique.\r\n\r\nVous pouvez trouver ci-après, un descriptif des dernières nouveautés pour une meilleure  sécurisation des biens et des personnes qu’offrent nos partenaires  de renommé.\r\n\r\n  vidéosurveillance à très haute résolution  avec des fonctionnalités d’analyse intelligente : sécurité périmétrique, surveillance des sens de circulation des véhicules, comptage des véhicules et des personnes …\r\n  Système de contrôle d’accès et de gestion de temps de présence avec un large choix entre les technologies d’identification : carte RFID, empreinte digitale, reconnaissance faciale, bio-veine,…\r\n  Système de protection des sites sensibles: portique détecteur de métaux, détecteur des explosives, détecteur des produits narcotiques, machine à inspection en rayon X pour bagage et véhicules…\r\n  Système d’alarme: système filaire ou sans file, détection de mouvement, détection d’ouverture, détection d’inondation, détection d’incendie, télésurveillance et assistance en cas de sinistre…    \r\n  Obstacles physiques : barrière automatique, plot escamotable, road blocker, tourniquet mi-hauteur et pleine hauteur, couloir rapide…\r\n  Portes coupe-feu métallique ou en bois, porte semi-blindée, porte forte, serrure et cylindre à haute sécurité\r\n         Coffre-fort et armoire forte', NULL, '2024-02-29 07:28:31', '2024-02-29 07:28:31', '0688405256'),
(652, 'Siham MOUKTASSI BILLAH', 'siham@securimag.ma', 'Offre de service / Service Achat', 'Bonjour ,\r\n\r\nC’est avec un grand plaisir que nous vous faisons parvenir un aperçu sur les produits et solutions de SECURIMAG leader marocain des systèmes de sécurité électronique et physique.\r\n\r\nVous pouvez trouver ci-après, un descriptif des dernières nouveautés pour une meilleure  sécurisation des biens et des personnes qu’offrent nos partenaires  de renommé.\r\n\r\n  vidéosurveillance à très haute résolution  avec des fonctionnalités d’analyse intelligente : sécurité périmétrique, surveillance des sens de circulation des véhicules, comptage des véhicules et des personnes …\r\n  Système de contrôle d’accès et de gestion de temps de présence avec un large choix entre les technologies d’identification : carte RFID, empreinte digitale, reconnaissance faciale, bio-veine,…\r\n  Système de protection des sites sensibles: portique détecteur de métaux, détecteur des explosives, détecteur des produits narcotiques, machine à inspection en rayon X pour bagage et véhicules…\r\n  Système d’alarme: système filaire ou sans file, détection de mouvement, détection d’ouverture, détection d’inondation, détection d’incendie, télésurveillance et assistance en cas de sinistre…    \r\n  Obstacles physiques : barrière automatique, plot escamotable, road blocker, tourniquet mi-hauteur et pleine hauteur, couloir rapide…\r\n  Portes coupe-feu métallique ou en bois, porte semi-blindée, porte forte, serrure et cylindre à haute sécurité\r\n         Coffre-fort et armoire forte', NULL, '2024-02-29 07:28:37', '2024-02-29 07:28:37', '0688405256'),
(653, 'Siham MOUKTASSI BILLAH', 'siham@securimag.ma', 'Offre de service / Service Achat', 'Bonjour ,\r\n\r\nC’est avec un grand plaisir que nous vous faisons parvenir un aperçu sur les produits et solutions de SECURIMAG leader marocain des systèmes de sécurité électronique et physique.\r\n\r\nVous pouvez trouver ci-après, un descriptif des dernières nouveautés pour une meilleure  sécurisation des biens et des personnes qu’offrent nos partenaires  de renommé.\r\n\r\n  vidéosurveillance à très haute résolution  avec des fonctionnalités d’analyse intelligente : sécurité périmétrique, surveillance des sens de circulation des véhicules, comptage des véhicules et des personnes …\r\n  Système de contrôle d’accès et de gestion de temps de présence avec un large choix entre les technologies d’identification : carte RFID, empreinte digitale, reconnaissance faciale, bio-veine,…\r\n  Système de protection des sites sensibles: portique détecteur de métaux, détecteur des explosives, détecteur des produits narcotiques, machine à inspection en rayon X pour bagage et véhicules…\r\n  Système d’alarme: système filaire ou sans file, détection de mouvement, détection d’ouverture, détection d’inondation, détection d’incendie, télésurveillance et assistance en cas de sinistre…    \r\n  Obstacles physiques : barrière automatique, plot escamotable, road blocker, tourniquet mi-hauteur et pleine hauteur, couloir rapide…\r\n  Portes coupe-feu métallique ou en bois, porte semi-blindée, porte forte, serrure et cylindre à haute sécurité\r\n         Coffre-fort et armoire forte', NULL, '2024-02-29 07:28:42', '2024-02-29 07:28:42', '0688405256'),
(654, 'kadream', 'kadream24@gmail.com', 'devenir client', 'salut', NULL, '2024-03-05 10:34:16', '2024-03-05 10:34:16', '0661209262'),
(655, 'Soufiane Bendhiba', 'bendhiba.soufiane@gmail.com', 'Demande d\'adhésion', 'Demande d\'adhésion', NULL, '2024-03-06 14:03:07', '2024-03-06 14:03:07', '0677808491'),
(656, 'Microsoft Office 365', 'hicham.laabouby@gmail.com', '^جوان كيلاس فيات ماريا 1999 اصانص', 'جوان كيلاس فيات ماريا 1999 اصانص', NULL, '2024-03-07 10:46:59', '2024-03-07 10:46:59', '0666688993'),
(657, 'GHLAMI Amin', 'Ghlamiamin2@gmail.com', 'Ouverture un compte', 'Nous somme une magasin pièces auto situé à rhafsai region taounate, nous avon une expérience puls de 27ans et potentiel dans le marche  très importante.\r\nJe souhaite de travailler avec vous vue que vos produits de qualité.\r\nMerci.', NULL, '2024-03-07 23:03:22', '2024-03-07 23:03:22', '0634428321'),
(658, 'GHLAMI Amin', 'Ghlamiamin2@gmail.com', 'Ouverture un compte', 'Nous somme une magasin pièces auto situé à rhafsai region taounate, nous avon une expérience puls de 27ans et potentiel dans le marche  très importante.\r\nJe souhaite de travailler avec vous vue que vos produits de qualité.\r\nMerci.', NULL, '2024-03-07 23:03:44', '2024-03-07 23:03:44', '0634428321'),
(659, 'Rafali Auto Services', '7sa.casa@gmail.com', 'Demande devis', 'Achat gros pour notre magasin', NULL, '2024-03-08 16:36:24', '2024-03-08 16:36:24', '0684867100'),
(660, 'PIECE AUTO FAOUZI', 'pieceautofaouzi@gmail.com', 'devenir votre client', 'bonjour,\r\nje m appelle Rachid Faouzi fondateur de la Ste pièce auto Faouzi , comme activité la vente des pièces et accessoires de voiture \r\nje vous contacte dans le but de devenir votre l\'un de vos client\r\ncordialement', NULL, '2024-03-08 21:04:09', '2024-03-08 21:04:09', '0665831316'),
(661, 'PIECE AUTO FAOUZI', 'pieceautofaouzi@gmail.com', 'devenir votre client', 'bonjour,\r\nje m appelle Rachid Faouzi fondateur de la Ste pièce auto Faouzi , comme activité la vente des pièces et accessoires de voiture \r\nje vous contacte dans le but de devenir votre l\'un de vos client\r\ncordialement', NULL, '2024-03-08 21:12:41', '2024-03-08 21:12:41', '0665831316'),
(662, 'Abdeltif ELBIHEL', 'ab.elbihel62@gmail.com', 'Amortisseurs arrière de Nissan Qashqai acenta 1.5 année 2018', 'Amortisseurs arrière de Nissan Qashqai acenta 1.5 modèle 2018', NULL, '2024-03-09 12:23:49', '2024-03-09 12:23:49', '0661065653'),
(663, 'idriss ait driss', 'fifaimassine@gmail.com', 'piece auto', 'مسيرة موفقة', NULL, '2024-03-09 23:22:05', '2024-03-09 23:22:05', '0608703102'),
(664, 'idriss ait driss', 'fifaimassine@gmail.com', 'piece auto', 'مسيرة موفقة', NULL, '2024-03-09 23:22:26', '2024-03-09 23:22:26', '0608703102'),
(665, 'idriss ait driss', 'fifaimassine@gmail.com', 'piece auto', 'مسيرة موفقة', NULL, '2024-03-09 23:36:48', '2024-03-09 23:36:48', '0608703102'),
(666, 'Idriss', 'fifaimassine@gmail.com', 'Vente des pièces', 'Local Ouarzazate', NULL, '2024-03-11 10:35:39', '2024-03-11 10:35:39', '0608703102'),
(667, 'idriss', 'fifaimassine@gmail.com', 'piece auto', 'Bonjour, je suis un expert dans le domaine automobile sans magasin à Ouarzazate, je souhaiterais être parmi vos clients.', NULL, '2024-03-11 11:39:04', '2024-03-11 11:39:04', '0608703102'),
(668, 'idriss', 'fifaimassine@gmail.com', 'piece auto', 'Bonjour, je suis un expert dans le domaine automobile sans magasin à Ouarzazate, je souhaiterais être parmi vos clients.', NULL, '2024-03-11 11:45:27', '2024-03-11 11:45:27', '0608703102'),
(669, 'ALFA POINT SERVICES', 'abdelhak.g24@gmail.com', 'Demande d\'ouverture de compte', 'ALFA POINT SERVICES à Kenitra.', NULL, '2024-03-13 12:20:12', '2024-03-13 12:20:12', '0669926664'),
(670, 'ALFA POINT SERVICES', 'abdelhak.g24@gmail.com', 'Demande d\'ouverture de compte', 'ALFA POINT SERVICES à Kenitra.', NULL, '2024-03-13 12:22:23', '2024-03-13 12:22:23', '0669926664'),
(671, 'ADIL EL OUANJLI', 'Lmbrsud@gmail.com', 'doc', 'sds', NULL, '2024-03-13 17:55:51', '2024-03-13 17:55:51', '0617769999'),
(672, 'Ismail Rahim', 'ism.rahim@gmail.com', 'Maître cylindre frein Audi A5 2.0 TDI 2011', 'Bonjour,\r\nJe cherche maître cylindre frein pour ma Audi A5 2.0TDI de 2011.\r\nVIn  : WAUZZZ8T3BA097270\r\n\r\nMerci\r\nIsmail', NULL, '2024-03-14 10:41:27', '2024-03-14 10:41:27', '0656057049'),
(673, 'Ismail Rahim', 'ism.rahim@gmail.com', 'Maître cylindre frein Audi A5 2.0 TDI 2011', 'Bonjour,\r\nJe cherche maître cylindre frein pour ma Audi A5 2.0TDI de 2011.\r\nVIn  : WAUZZZ8T3BA097270\r\n\r\nMerci\r\nIsmail', NULL, '2024-03-14 10:41:46', '2024-03-14 10:41:46', '0656057049'),
(674, 'MOHAMED HUSSEIN FAYED', 'mohamed@simpos.si', 'SIMPOS SLOVENIA', 'To whom it may concern ,\r\nMy name is Mohamed Hussein Fayed , im a regional sales manager for Africa & Middle East in Simpos Company .\r\nSimpos is one of the top European suppliers for engine oils. With a global portfolio of more than 30 world leading oil brands, a large 7.500 m2 and bullet proof warehouse and an impeccable client service, Simpos is recognized as the engine oil supplier of choice for some of the largest and most respected European companies. Starting as a small business in 2007, the company today supplies more than 8 millions of oil per year to customers around the world. Besides supplying companies with oil, Simpos aspires to produce its own oil brand that will be second to none.\r\nI hope we can create long term fruitful business opportunities for both of our companies in the lubricants oil filed .', NULL, '2024-03-14 14:10:48', '2024-03-14 14:10:48', '+38631419489'),
(675, 'MOHAMED HUSSEIN FAYED', 'mohamed@simpos.si', 'SIMPOS SLOVENIA', 'To whom it may concern ,\r\nMy name is Mohamed Hussein Fayed , im a regional sales manager for Africa & Middle East in Simpos Company .\r\nSimpos is one of the top European suppliers for engine oils. With a global portfolio of more than 30 world leading oil brands, a large 7.500 m2 and bullet proof warehouse and an impeccable client service, Simpos is recognized as the engine oil supplier of choice for some of the largest and most respected European companies. Starting as a small business in 2007, the company today supplies more than 8 millions of oil per year to customers around the world. Besides supplying companies with oil, Simpos aspires to produce its own oil brand that will be second to none.\r\nI hope we can create long term fruitful business opportunities for both of our companies in the lubricants oil filed .', NULL, '2024-03-14 14:10:56', '2024-03-14 14:10:56', '+38631419489'),
(676, 'T8 auto', 'T8.auto.sarl@gmail.com', 'Location de voiture t8 auto', 'Bonjour, j\'ai besoin créer un compte', NULL, '2024-03-16 01:14:43', '2024-03-16 01:14:43', '0672400030'),
(677, 'T8 auto', 'T8.auto.sarl@gmail.com', 'Location de voiture t8 auto', 'Bonjour, j\'ai besoin créer un compte', NULL, '2024-03-16 01:14:51', '2024-03-16 01:14:51', '0672400030'),
(678, 'T8 auto', 'T8.auto.sarl@gmail.com', 'Location de voiture t8 auto', 'Bonjour, j\'ai besoin créer un compte', NULL, '2024-03-16 01:14:53', '2024-03-16 01:14:53', '0672400030'),
(679, 'EXPRESS AUTO SERVICES', 'easpneus@gmail.com', 'DEMANDE DOUVERTURE DE COMPTE .', 'DEMANDE DOUVERTURE DE COMPTE .', NULL, '2024-03-17 12:26:32', '2024-03-17 12:26:32', '0633788400'),
(680, 'EXPRESS AUTO SERVICES', 'easpneus@gmail.com', 'DEMANDE DOUVERTURE DE COMPTE .', 'DEMANDE DOUVERTURE DE COMPTE .', NULL, '2024-03-17 12:28:14', '2024-03-17 12:28:14', '0633788400'),
(681, 'EXPRESS AUTO SERVICES', 'easpneus@gmail.com', 'DEMANDE DOUVERTURE DE COMPTE .', 'DEMANDE DOUVERTURE DE COMPTE .', NULL, '2024-03-17 12:28:14', '2024-03-17 12:28:14', '0633788400'),
(682, 'Salaheddine', 'Salah.dine.a72@gmail.com', 'Kite embriage', 'Salut je veux une Kit embrayage Complet Renault master 3  2017 Merci', NULL, '2024-03-20 00:28:50', '2024-03-20 00:28:50', '0662197346'),
(683, 'Mounib Adnane', 'mnbautopartner@outlook.com', 'PRIX CATALOGUE VARTA', 'Bonjour,\r\nPourriez vous m\'envoyer vos prix pour les batterie Varta svp', NULL, '2024-03-24 12:18:59', '2024-03-24 12:18:59', '0032472667115'),
(684, 'Spare parts', 'root@tantivy.com', 'Partnership Cooperation', 'Dear Mr. Ikram Ezdi,\r\n\r\nHope this mail finds you well. \r\n\r\nThis greeting is from vikaDPA brand. We are service supplier for VAG spare parts and got to know your esteemed company from ATR community. Last year we visited your headquarter and we sincerely wish to build business connection with your company, so we are trying to contact with you. Here below refers to some brief introduction of our company and brand.\r\n\r\nOur company name of Tantivy Automotive Co., Ltd (China). We are aftermarket brand service supplier for VAG full complete range auto spare parts since 1990s, especially for VW, AUDI, Skoda and Seat car models. And based on company development strategy, Benz and BMW parts is in progress to be introduced officially this year.\r\n \r\nl  vikaDPA provides VAG car parts service with more than 20,000 kinds of items, vika covers engine, chassis, electric parts, DPA covers car body parts;\r\nl  vikaDPA shares the same manufacturing line with European brands for most of our product series, eg. water pump series, same manufacturer with Marelli, ignition coil, same production line with Bremi, wheel hub unit, same with Febi;\r\nl  vikaDPA have 24 months warranty guaranteed, quick responding settle solution if any claim occurred;\r\nl  We have professional team to serve wholesalers, importers and distributors from different continents;\r\nl  We are Tecdoc data supplier and Nexus Automotive(ITG) member;\r\nl  New products resources are introduced on regular basis to bring new increasing value  for partners;\r\nl  One stop service for brand promotion with our marekting team online and offline advertising design;\r\nl  Collaborative team on order production, preparation, packing and logistic to make sure cargo arriving at partners\' side well;\r\n\r\nYour kind comments then will be appreciated. Hope we could share more detailed business talking then. \r\n\r\n\r\nBest regards,\r\n\r\nMarvin\r\n\r\n \r\n\r\nTANTIVY AUTOMOTIVE CO.,LTD.\r\n \r\nAddress: 9C Plaza B, Tower 2, Gloden Resources Business Center, Beijing, China \r\nEmail: root@tantivy.com \r\nTel: +86 10 8886 1011   Ext:9047          Mobile/Whatsapp: +8615501330540\r\nWebsite: www.tantivy.com                     Online Catalogue: catalogue.vikadpa.com', NULL, '2024-03-26 02:54:22', '2024-03-26 02:54:22', '+86 15501330540'),
(685, 'Ficar meknes code 3296', 'abderrahmane_achir@yahoo.com', 'Demande application pour pc', 'Svp comment avoir l’application pour acheter en ligne je suis votre client a meknes', NULL, '2024-03-27 09:55:56', '2024-03-27 09:55:56', '0666733521');
INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `deleted_at`, `created_at`, `updated_at`, `tel`) VALUES
(686, 'Ficar meknes code 3296', 'abderrahmane_achir@yahoo.com', 'Demande application pour pc', 'Svp comment avoir l’application pour acheter en ligne je suis votre client a meknes', NULL, '2024-03-27 09:56:09', '2024-03-27 09:56:09', '0666733521'),
(687, 'EL ADDOULI MOHAMMED', 'adoulim.jesagroup@gmail.com', 'INSCRIPTION', 'SALUT MERCI D\'ACCEPTE MA DEMANDE D\'INSCRIPTION POUR DEVENIR UN CLIENT', NULL, '2024-03-27 12:19:35', '2024-03-27 12:19:35', '0614226576'),
(688, 'EL ADDOULI MOHAMMED', 'adoulim.jesagroup@gmail.com', 'INSCRIPTION', 'SALUT MERCI D\'ACCEPTE MA DEMANDE D\'INSCRIPTION POUR DEVENIR UN CLIENT', NULL, '2024-03-27 12:21:12', '2024-03-27 12:21:12', '0614226576'),
(689, 'Youssef Makran', 'makranyoussef@gmail.com', 'Demande d\'adhésion', 'En cours d\'ouverture d\'un local d\'après vente et besoin d\'accès à vos produits', NULL, '2024-03-29 17:20:00', '2024-03-29 17:20:00', '0676013603'),
(690, 'Youssef Makran', 'makranyoussef@gmail.com', 'Demande d\'adhésion', 'En cours d\'ouverture d\'un local d\'après vente et besoin d\'accès à vos produits', NULL, '2024-03-29 17:20:20', '2024-03-29 17:20:20', '0676013603'),
(691, 'Souleymane', 'souleyboly@gmail.com', 'Amenagement interieur', 'Ouss accessoires dembellissement', NULL, '2024-03-29 17:23:24', '2024-03-29 17:23:24', '00 226 71 89 1152'),
(692, 'sayarat pieces auto', 'sayarat.pa@gmail.com', 'demande d activation de domaine sayarat.pa', 'merci d activer autoplus domaine pour sayarat pieces auto pour commander des articles.', NULL, '2024-03-30 12:02:03', '2024-03-30 12:02:03', '0657200771'),
(693, 'KARIM LMBA', 'bentahrasadek2018@gmail.com', 'Merci', 'Mercis', NULL, '2024-04-02 19:45:26', '2024-04-02 19:45:26', '212600462431'),
(694, 'KARIM LMBA', 'bentahrasadek2018@gmail.com', 'Merci', 'Mercis', NULL, '2024-04-02 19:45:56', '2024-04-02 19:45:56', '212600462431'),
(695, 'pretige pieces auto', 'RT.KHALID@YAHOO.FR', 'inscription au application Mon autoplus', 'Bjr\r\ninscription au service Mon auto plus app sous le code client 2714.\r\nmerci', NULL, '2024-04-03 11:41:56', '2024-04-03 11:41:56', '0664263168'),
(696, 'IDDOUCH', 'fadilidouch@gmail.com', 'Poste poue emploi', 'Je deja travial sur hyundai et renault .', NULL, '2024-04-03 17:59:37', '2024-04-03 17:59:37', '+212602511506'),
(697, 'IDDOUCH', 'fadilidouch@gmail.com', 'Poste poue emploi', 'Je deja travial sur hyundai et renault .', NULL, '2024-04-03 18:00:06', '2024-04-03 18:00:06', '+212602511506'),
(698, 'IDDOUCH', 'fadilidouch@gmail.com', 'Poste poue emploi', 'Je deja travial sur hyundai et renault .', NULL, '2024-04-03 18:00:06', '2024-04-03 18:00:06', '+212602511506'),
(699, 'ismail', 'smaivovic6@gmail.com', 'demande ouverture d\'un compte espace client', 'Bienvenue\r\n vertu de mon travail dans le domaine de la vente de pièces de camion, j\'ai parfois eu du mal à trouver certains produits pour le camion, et la seule solution qui me reste est rechercher par numéro de série de l\'usine (numero de chassis, donc je suis ici pour vous envoyer cette lettre pour demander la pénétration et rejoindre votre site et le rechercher et en bénéficier et apprendre aussi, si bien sûr possible', NULL, '2024-04-03 21:24:39', '2024-04-03 21:24:39', '0635833879'),
(700, 'ismail', 'smaivovic6@gmail.com', 'demande ouverture d\'un compte espace client', 'Bienvenue\r\n vertu de mon travail dans le domaine de la vente de pièces de camion, j\'ai parfois eu du mal à trouver certains produits pour le camion, et la seule solution qui me reste est rechercher par numéro de série de l\'usine (numero de chassis, donc je suis ici pour vous envoyer cette lettre pour demander la pénétration et rejoindre votre site et le rechercher et en bénéficier et apprendre aussi, si bien sûr possible', NULL, '2024-04-03 21:25:04', '2024-04-03 21:25:04', '0635833879'),
(701, 'ismail', 'smaivovic6@gmail.com', 'demande ouverture d\'un compte espace client', 'Bienvenue\r\n vertu de mon travail dans le domaine de la vente de pièces de camion, j\'ai parfois eu du mal à trouver certains produits pour le camion, et la seule solution qui me reste est rechercher par numéro de série de l\'usine (numero de chassis, donc je suis ici pour vous envoyer cette lettre pour demander la pénétration et rejoindre votre site et le rechercher et en bénéficier et apprendre aussi, si bien sûr possible', NULL, '2024-04-03 21:25:05', '2024-04-03 21:25:05', '0635833879'),
(702, 'ismail', 'smaivovic6@gmail.com', 'demande ouverture d\'un compte espace client', 'Bienvenue\r\n vertu de mon travail dans le domaine de la vente de pièces de camion, j\'ai parfois eu du mal à trouver certains produits pour le camion, et la seule solution qui me reste est rechercher par numéro de série de l\'usine (numero de chassis, donc je suis ici pour vous envoyer cette lettre pour demander la pénétration et rejoindre votre site et le rechercher et en bénéficier et apprendre aussi, si bien sûr possible', NULL, '2024-04-03 21:25:05', '2024-04-03 21:25:05', '0635833879'),
(703, 'ismail', 'smaivovic6@gmail.com', 'demande ouverture d\'un compte espace client', 'Bienvenue\r\na', NULL, '2024-04-03 21:26:43', '2024-04-03 21:26:43', '0635833879'),
(704, 'ismail', 'smaivovic6@gmail.com', 'demande ouverture d\'un compte espace client', 'Bienvenue\r\na', NULL, '2024-04-03 21:26:44', '2024-04-03 21:26:44', '0635833879'),
(705, 'ismail', 'smaivovic6@gmail.com', 'demande ouverture d\'un compte espace client', 'Bienvenue\r\na', NULL, '2024-04-03 21:26:45', '2024-04-03 21:26:45', '0635833879'),
(706, 'ismail', 'smaivovic6@gmail.com*', 'demande ouverture d\'un compte espace client', 'Bienvenue\r\na', NULL, '2024-04-03 21:27:14', '2024-04-03 21:27:14', '0635833879'),
(707, 'ismail', 'smaivovic6@gmail.com*', 'demande ouverture d\'un compte espace client', 'Bienvenue\r\na', NULL, '2024-04-03 21:27:17', '2024-04-03 21:27:17', '0635833879'),
(708, 'pieces autos salma', 'lasrihicham@gmail.com', 'ouverture compte avec GAP', 'bonjour , je suis deja client avec maghreb accessoires depuis tres longtemp et je souhaite ouvrire un compte avec GAP si possible je serais ravis  merci bien et exellente journee', NULL, '2024-04-03 23:29:31', '2024-04-03 23:29:31', '0667271480'),
(709, 'Pieces Auto Maroc', 'support@pieces-auto-maoc.com', 'Recherche de fournisseurs sur Casa', 'Bonjour, nous sommes une jeune startup de vente de pieces de carrosseire et nous recherchons des fournisseurs fiables sur Casablanca, de preference ayant une interface enligne pour faciliter l\'achat et la livraison. cdt', NULL, '2024-04-04 15:29:20', '2024-04-04 15:29:20', '0601750847'),
(710, '45993', 'Amine.awni@gmail.com', 'Ouverture de compte', 'Ouverture de compte pour revendeur', NULL, '2024-04-08 01:49:10', '2024-04-08 01:49:10', '0661428289'),
(711, '45993', 'Amine.awni@gmail.com', 'Ouverture de compte', 'Ouverture de compte pour revendeur', NULL, '2024-04-08 01:49:24', '2024-04-08 01:49:24', '0661428289'),
(712, '45993', 'Amine.awni@gmail.com', 'Ouverture de compte', 'Ouverture de compte pour revendeur', NULL, '2024-04-08 01:49:49', '2024-04-08 01:49:49', '0661428289'),
(713, 'Fouad Chbihi', 'swidiri95@gmail.com', 'Demande d\'emploi', 'Fouad chbihi technicien en réparation automobile et camion et engain j\'ai d\'expérience de 14 ans sur le secteur. Veuillez accepter ma candidature avec mes salutations', NULL, '2024-04-10 13:38:29', '2024-04-10 13:38:29', '0614681197'),
(714, 'Fouad Chbihi', 'swidiri95@gmail.com', 'Demande d\'emploi', 'Fouad chbihi technicien en réparation automobile et camion et engain j\'ai d\'expérience de 14 ans sur le secteur. Veuillez accepter ma candidature avec mes salutations', NULL, '2024-04-10 13:38:36', '2024-04-10 13:38:36', '0614681197'),
(715, 'Fouad Chbihi', 'swidiri95@gmail.com', 'Demande d\'emploi', 'Fouad chbihi technicien en réparation automobile et camion et engain j\'ai d\'expérience de 14 ans sur le secteur. Veuillez accepter ma candidature avec mes salutations', NULL, '2024-04-10 13:38:40', '2024-04-10 13:38:40', '0614681197'),
(716, 'Sakina Essaouabi', 'ssidki1993@gmail.com', 'demande d\'ouverture compte client', 'merci d\'accepté ma  demande d\'inscription', NULL, '2024-04-15 08:14:17', '2024-04-15 08:14:17', '0672542871'),
(717, 'Sakina Essaouabi', 'ssidki1993@gmail.com', 'demande d\'ouverture compte client', 'merci d\'accepté ma  demande d\'inscription', NULL, '2024-04-15 08:14:32', '2024-04-15 08:14:32', '0672542871'),
(718, 'Sakina Essaouabi', 'ssidki1993@gmail.com', 'demande d\'ouverture compte client', 'merci d\'accepté ma  demande d\'inscription', NULL, '2024-04-15 08:17:07', '2024-04-15 08:17:07', '0672542871'),
(719, 'HAMZA', 'hamza.boualam@gmail.com', 'DEVENIR REVENDEUR', 'DEMANDE INFORMATION', NULL, '2024-04-15 13:38:21', '2024-04-15 13:38:21', '06669907496'),
(720, 'sidate tarik', 'tariksidate@gmail.com', 'vente en detail de consommable automobile', 'bonjour, je suis sur le point de la création d\'une entreprise spécialisée dans la vente en détails de consommables automobiles, et je cherche un fournisseur sur lequel je pourrais m\'appuyer pour me lancer dans ce domaine de façon correcte et qui pourra m\'accompagner par ces conseils tout au long de la phase de lancement.\r\nmerci pour votre collaboration', NULL, '2024-04-16 17:23:12', '2024-04-16 17:23:12', '0661484348'),
(721, 'sidate tarik', 'tariksidate@gmail.com', 'vente en detail de consommable automobile', 'bonjour, je suis sur le point de la création d\'une entreprise spécialisée dans la vente en détails de consommables automobiles, et je cherche un fournisseur sur lequel je pourrais m\'appuyer pour me lancer dans ce domaine de façon correcte et qui pourra m\'accompagner par ces conseils tout au long de la phase de lancement\r\nmerci pour votre collaboration', NULL, '2024-04-16 17:27:34', '2024-04-16 17:27:34', '0661484348'),
(722, 'Mohandis Jaouad', 'contact@moja.ma', 'Devenir revendeur', 'Bonjour\r\nNous avons ouvert un nouveau local à Tanger et serions intéressé par une collaboration.\r\n\r\nCordialement', NULL, '2024-04-19 08:01:44', '2024-04-19 08:01:44', '0666153100'),
(723, 'Hassan', 'jamcha1989@gmail.com', 'Demande d\'adhésion', 'Merci', NULL, '2024-04-20 18:52:57', '2024-04-20 18:52:57', '0629600635'),
(724, 'Hassan', 'jamcha1989@gmail.com', 'Demande d\'adhésion', 'Merci', NULL, '2024-04-20 18:52:59', '2024-04-20 18:52:59', '0629600635'),
(725, 'Hassan', 'jamcha1989@gmail.com', 'Demande d\'adhésion', 'Merci', NULL, '2024-04-20 18:53:06', '2024-04-20 18:53:06', '0629600635'),
(726, 'sadik', 'bentahrasadek2018@gmail.com', 'merci', 'remirci', NULL, '2024-04-23 07:23:28', '2024-04-23 07:23:28', '0600462431'),
(727, 'koreak', 'med.wwb@gmail.com', 'accès base de données', 'Madame, Monsieur,\r\nJe me permets par la présente de vous adresser ma demande pour obtenir l\'accès à la base de données des pièces automobiles de votre entreprise. En tant que gérant de l’entreprise Koreak, je suis convaincu que l\'accès à cette base de données me sera d\'une grande utilité, répondant aux questions concernant la disponibilité, les prix et diminuant le temps pour effectuer une commande ainsi que la satisfaction de nos clients.\r\nJe reste à votre disposition pour toute information supplémentaire que vous pourriez nécessiter concernant ma demande. Dans l\'attente d\'une réponse favorable de votre part, je vous prie d\'agréer, Madame, Monsieur, l\'expression de mes salutations distinguées.\r\nCordialement,', NULL, '2024-04-30 12:26:30', '2024-04-30 12:26:30', '0690284748'),
(728, 'Bcr pièce auto', 'bcrsucraitair@gmail.com', 'Catalogue', 'Demande catalogue de achat pièce', NULL, '2024-05-02 11:31:56', '2024-05-02 11:31:56', '0538985289'),
(729, 'MEHDI ZOUHRI', 'Z.MEHDI.BERGAMO@GMAIL.COM', 'VENDEUR', 'JE SUIS INTERSE POUR UTILISEZ CETTE PAGE POUR VENTE PIECE AUTO', NULL, '2024-05-09 10:05:06', '2024-05-09 10:05:06', '0601011959'),
(730, 'MEHDI ZOUHRI', 'Z.MEHDI.BERGAMO@GMAIL.COM', 'VENDEUR', 'JE SUIS INTERSE POUR UTILISEZ CETTE PAGE POUR VENTE PIECE AUTO', NULL, '2024-05-09 10:14:22', '2024-05-09 10:14:22', '0601011959'),
(731, 'MEHDI ZOUHRI', 'Z.MEHDI.BERGAMO@GMAIL.COM', 'VENDEUR', 'JE SUIS INTERSE POUR UTILISEZ CETTE PAGE POUR VENTE PIECE AUTO', NULL, '2024-05-09 10:25:12', '2024-05-09 10:25:12', '0601011959'),
(732, 'Omar Hafidi', 'omarhafidi04@gmail.com', 'Demande d\'adhésion', 'Bonjour.  Je me permets de vous contacter pour créer mon compte revendeur avec  vous. \r\nPourriez vous svp me dire c\'est quoi procédure?\r\nD\'avance merci \r\nOmar', NULL, '2024-05-09 22:08:34', '2024-05-09 22:08:34', '0690964648'),
(733, 'Omar Hafidi', 'omarhafidi04@gmail.com', 'Demande d\'adhésion', 'Bonjour.  Je me permets de vous contacter pour créer mon compte revendeur avec  vous. \r\nPourriez vous svp me dire c\'est quoi procédure?\r\nD\'avance merci \r\nOmar', NULL, '2024-05-09 22:08:56', '2024-05-09 22:08:56', '0690964648'),
(734, 'FARAHANEAUTO', 'Ayoubfarhane012@gmail.com', 'Besoin de parchoc av + optique av g pour mégane 4 2018 optique noir', 'Besoin de parchoc av + optique av g pour mégane 4 2018 optique noir', NULL, '2024-05-11 16:18:55', '2024-05-11 16:18:55', '0661692787'),
(735, 'TRASALMAR SARL AU', 'rachid.salek73@gmail.com', 'demande d\'adhésion', 'merci de bien vouloir  accepter  notre demande  d\'adhésion', NULL, '2024-05-11 16:32:59', '2024-05-11 16:32:59', '0663682582'),
(736, 'Pièces auto faouzi', 'pieceautofaouzi@gmail.com', 'Devenir votre client', 'Bonjour,\r\nJe suis faouzi Rachid gérant de la société pièces auto faouzi, une nouvelle dans le marché et je veux devenir votre client.\r\nSi c\'est possible de donner un rendez vous avec un de vos commerciaux \r\n\r\nMerci', NULL, '2024-05-12 15:25:38', '2024-05-12 15:25:38', '0665831316'),
(737, 'Pièces auto faouzi', 'pieceautofaouzi@gmail.com', 'Devenir votre client', 'Bonjour,\r\nJe suis faouzi Rachid gérant de la société pièces auto faouzi, une nouvelle dans le marché et je veux devenir votre client.\r\nSi c\'est possible de donner un rendez vous avec un de vos commerciaux \r\n\r\nMerci', NULL, '2024-05-12 15:26:37', '2024-05-12 15:26:37', '0665831316'),
(738, 'Pièces auto faouzi', 'pieceautofaouzi@gmail.com', 'Devenir votre client', 'Bonjour,\r\nJe suis faouzi Rachid gérant de la société pièces auto faouzi, une nouvelle dans le marché et je veux devenir votre client.\r\nSi c\'est possible de donner un rendez vous avec un de vos commerciaux \r\n\r\nMerci', NULL, '2024-05-12 15:26:49', '2024-05-12 15:26:49', '0665831316'),
(739, 'KHEDIF', 'brahim.khedif@maghrebsteel.ma', 'Demande de prix', 'Bonjour,\r\nMerci de m\'envoyer votre meilleur prix d\'une paire de vérins pour le coffres du skoda superb modèl 2020', NULL, '2024-05-13 07:18:24', '2024-05-13 07:18:24', '0661481506'),
(740, 'Yassine MORHLI', 'yassinemorhli@gmail.com', 'Demande de prix', 'Je souhaite avoir contact d\'un commercial pour une commande de batterie VARTA', NULL, '2024-05-13 08:02:51', '2024-05-13 08:02:51', '0634474813'),
(741, 'Amine zeddoug', 'zedd.electricite@gmail.com', 'Je cherche une fournisseur de batterie varta o Bosch je suis a Kenitra et je cherche de faire une magasin de batterie', 'Et se que tu peux me aid et merci pour tout', NULL, '2024-05-13 16:35:17', '2024-05-13 16:35:17', '00212648310906'),
(742, 'Amine zeddoug', 'zedd.electricite@gmail.com', 'Je cherche une fournisseur de batterie varta o Bosch je suis a Kenitra et je cherche de faire une magasin de batterie', 'Et se que tu peux me aid et merci pour tout', NULL, '2024-05-13 16:35:22', '2024-05-13 16:35:22', '00212648310906'),
(743, 'Amine zeddoug', 'zedd.electricite@gmail.com', 'Je cherche une fournisseur de batterie varta o Bosch je suis a Kenitra et je cherche de faire une magasin de batterie', 'Et se que tu peux me aid et merci pour tout', NULL, '2024-05-13 16:35:31', '2024-05-13 16:35:31', '00212648310906'),
(744, 'Amine zeddoug', 'zedd.electricite@gmail.com', 'Je cherche une fournisseur de batterie varta o Bosch je suis a Kenitra et je cherche de faire une magasin de batterie', 'Et se que tu peux me aid et merci pour tout', NULL, '2024-05-13 16:35:39', '2024-05-13 16:35:39', '00212648310906'),
(745, 'Amine zeddoug', 'zedd.electricite@gmail.com', 'Je cherche une fournisseur de batterie varta o Bosch je suis a Kenitra et je cherche de faire une magasin de batterie', 'Et se que tu peux me aid et merci pour tout', NULL, '2024-05-13 16:35:45', '2024-05-13 16:35:45', '00212648310906'),
(746, 'Amine zeddoug', 'zedd.electricite@gmail.com', 'Je cherche une fournisseur de batterie varta o Bosch je suis a Kenitra et je cherche de faire une magasin de batterie', 'Et se que tu peux me aid et merci pour tout', NULL, '2024-05-13 16:35:56', '2024-05-13 16:35:56', '00212648310906'),
(747, 'Amine zeddoug', 'zedd.electricite@gmail.com', 'Je cherche une fournisseur de batterie varta o Bosch je suis a Kenitra et je cherche de faire une magasin de batterie', 'Et se que tu peux me aid et merci pour tout', NULL, '2024-05-13 16:36:11', '2024-05-13 16:36:11', '0648310906'),
(748, 'Amine zeddoug', 'zeddoug.amine@gmail.com', 'Je cherche une fournisseur de batterie varta o Bosch je suis a Kenitra et je cherche de faire une magasin de batterie', 'Et se que tu peux me aid et merci pour tout', NULL, '2024-05-13 16:36:29', '2024-05-13 16:36:29', '0648310906'),
(749, 'Amine zeddoug', 'zeddoug.amine@gmail.com', 'Je cherche une fournisseur de batterie varta o Bosch je suis a Kenitra et je cherche de faire une magasin de batterie', 'Et se que tu peux me aid et merci pour tout', NULL, '2024-05-13 16:36:35', '2024-05-13 16:36:35', '0648310906'),
(750, 'anouar aznibar', 'znibaranouar2@gmail.com', 'acheter vous produit', 'comment j\'achète vous produit', NULL, '2024-05-13 19:26:18', '2024-05-13 19:26:18', '0682062704'),
(751, 'ID m\'hand ayoub', 'idmhandayoub0@gmail.com', 'Demande de trvaial', 'Je suis Ayoub Idmhand, âgé de 22 ans, titulaire d\'un diplôme en fabrication agroalimentaire,désireux d\'apprendre de nouvelles choses, et avez la volonté de travailler dans différents postes.', NULL, '2024-05-14 22:14:18', '2024-05-14 22:14:18', '0655169209'),
(752, 'Sud car', 'Sudcarloc@gmail.com', 'FOURNITURES ET PIECES AUTO', 'Je voudrais m\'aprovisionner chez vous en etant professionnel', NULL, '2024-05-16 11:30:32', '2024-05-16 11:30:32', '0654026774'),
(753, 'Sud car', 'Sudcarloc@gmail.com', 'FOURNITURES ET PIECES AUTO', 'Je voudrais m\'aprovisionner chez vous en etant professionnel', NULL, '2024-05-16 11:30:50', '2024-05-16 11:30:50', '0654026774'),
(754, 'Sud car', 'Sudcarloc@gmail.com', 'FOURNITURES ET PIECES AUTO', 'Je voudrais m\'aprovisionner chez vous en etant professionnel', NULL, '2024-05-16 11:30:51', '2024-05-16 11:30:51', '0654026774'),
(755, 'Sud car', 'Sudcarloc@gmail.com', 'FOURNITURES ET PIECES AUTO', 'Je voudrais m\'aprovisionner chez vous en etant professionnel', NULL, '2024-05-16 11:31:03', '2024-05-16 11:31:03', '0654026774'),
(756, 'Ibn rakkane mohammed', 'bevnrakkanemed@gmail.com', 'Pieces de rechanges auto', 'Kit d embrayge kia cerato 2006 diesel', NULL, '2024-05-16 16:24:26', '2024-05-16 16:24:26', '0662286348'),
(757, 'FADIL', 'mhamed.fadil3@gmail.com', 'Ouverture d’un magasin', 'Bonjour j’aimerais connaître vos conditions pour ouvrir un magasin auto plus au Maroc', NULL, '2024-05-19 11:46:59', '2024-05-19 11:46:59', '+33668784588'),
(758, 'FADIL', 'mhamed.fadil3@gmail.com', 'Ouverture d’un magasin', 'Bonjour j’aimerais connaître vos conditions pour ouvrir un magasin auto plus au Maroc', NULL, '2024-05-19 11:47:09', '2024-05-19 11:47:09', '+33668784588'),
(759, 'FADIL', 'mhamed.fadil3@gmail.com', 'Ouverture d’un magasin', 'Bonjour j’aimerais connaître vos conditions pour ouvrir un magasin auto plus au Maroc', NULL, '2024-05-19 11:47:30', '2024-05-19 11:47:30', '+33668784588'),
(760, 'DIGISHORE', 'omar.hafidi@dscloudify.com', 'demande de partenariat', 'Bonjour, je me permets de vous contacter pour procéder à la création d\'un compte revendeur.\r\nje vous remercie par avance \r\nOmar', NULL, '2024-05-19 13:02:13', '2024-05-19 13:02:13', '0690964648'),
(761, 'Yahya nouri', 'Nourihya1@gmail.com', 'Auto nouri', 'Salam', NULL, '2024-05-19 13:22:48', '2024-05-19 13:22:48', '0661659857'),
(762, 'Yahya nouri', 'Nourihya1@gmail.com', 'Auto nouri', 'Salam', NULL, '2024-05-19 13:22:55', '2024-05-19 13:22:55', '0661659857'),
(763, 'Pièces  auto argabi', 'Techno1innovation@gmail.com', 'طلب فتح حساب', 'السلام عليكم ورحمة الله وبركاته \r\nيشرفني أن أقدم بطلي هذا من أجل الحصول على حساب يمكنني من طلب قطع الغيار عير الإنترنت مما يسهل عملية الطلبات و السرعة في تنفيذها', NULL, '2024-05-19 19:50:59', '2024-05-19 19:50:59', '0767919848'),
(764, 'Pièces  auto argabi', 'Techno1innovation@gmail.com', 'طلب فتح حساب', 'السلام عليكم ورحمة الله وبركاته \r\nيشرفني أن أقدم بطلي هذا من أجل الحصول على حساب يمكنني من طلب قطع الغيار عير الإنترنت مما يسهل عملية الطلبات و السرعة في تنفيذها', NULL, '2024-05-19 19:51:23', '2024-05-19 19:51:23', '0767919848'),
(765, 'Pièces  auto argabi', 'Techno1innovation@gmail.com', 'طلب فتح حساب', 'السلام عليكم ورحمة الله وبركاته \r\nيشرفني أن أقدم بطلي هذا من أجل الحصول على حساب يمكنني من طلب قطع الغيار عير الإنترنت مما يسهل عملية الطلبات و السرعة في تنفيذها', NULL, '2024-05-19 19:51:29', '2024-05-19 19:51:29', '0767919848'),
(766, 'Pièces  auto argabi', 'Techno1innovation@gmail.com', 'طلب فتح حساب', 'السلام عليكم ورحمة الله وبركاته \r\nيشرفني أن أقدم بطلي هذا من أجل الحصول على حساب يمكنني من طلب قطع الغيار عير الإنترنت مما يسهل عملية الطلبات و السرعة في تنفيذها', NULL, '2024-05-19 19:51:29', '2024-05-19 19:51:29', '0767919848'),
(767, 'Pièces  auto argabi', 'Techno1innovation@gmail.com', 'طلب فتح حساب', 'السلام عليكم ورحمة الله وبركاته \r\nيشرفني أن أقدم بطلي هذا من أجل الحصول على حساب يمكنني من طلب قطع الغيار عير الإنترنت مما يسهل عملية الطلبات و السرعة في تنفيذها', NULL, '2024-05-19 19:51:30', '2024-05-19 19:51:30', '0767919848'),
(768, 'Pièces  auto argabi', 'Techno1innovation@gmail.com', 'طلب فتح حساب', 'السلام عليكم ورحمة الله وبركاته \r\nيشرفني أن أقدم بطلي هذا من أجل الحصول على حساب يمكنني من طلب قطع الغيار عير الإنترنت مما يسهل عملية الطلبات و السرعة في تنفيذها', NULL, '2024-05-19 19:51:30', '2024-05-19 19:51:30', '0767919848'),
(769, 'Laabibate youssef', 'laabibate1988@gmail.com', 'Demande d\'emploi', 'Bonjour \r\nMon CV \r\nhttps://drive.google.com/file/d/104A8eUHh0aChgFLblMBzYmvIDs23puPj/view?usp=drivesdk', NULL, '2024-05-20 19:15:54', '2024-05-20 19:15:54', '0655389292'),
(770, 'Laabibate youssef', 'laabibate1988@gmail.com', 'Demande d\'emploi', 'Bonjour \r\nMon CV \r\nhttps://drive.google.com/file/d/104A8eUHh0aChgFLblMBzYmvIDs23puPj/view?usp=drivesdk', NULL, '2024-05-20 19:16:52', '2024-05-20 19:16:52', '0655389292'),
(771, 'Laabibate youssef', 'laabibate1988@gmail.com', 'Demande d\'emploi', 'Bonjour \r\nMon CV \r\nhttps://drive.google.com/file/d/104A8eUHh0aChgFLblMBzYmvIDs23puPj/view?usp=drivesdk', NULL, '2024-05-20 19:16:57', '2024-05-20 19:16:57', '0655389292'),
(772, 'Laabibate youssef', 'laabibate1988@gmail.com', 'Demande d\'emploi', 'Bonjour \r\nMon CV \r\nhttps://drive.google.com/file/d/104A8eUHh0aChgFLblMBzYmvIDs23puPj/view?usp=drivesdk', NULL, '2024-05-20 19:18:11', '2024-05-20 19:18:11', '0655389292'),
(773, 'Laabibate youssef', 'laabibate1988@gmail.com', 'Demande d\'emploi', 'Bonjour \r\nMon CV \r\nhttps://drive.google.com/file/d/104A8eUHh0aChgFLblMBzYmvIDs23puPj/view?usp=drivesdk', NULL, '2024-05-20 19:18:12', '2024-05-20 19:18:12', '0655389292'),
(774, 'Laabibate youssef', 'laabibate1988@gmail.com', 'Demande d\'emploi', 'Bonjour \r\nMon CV \r\nhttps://drive.google.com/file/d/104A8eUHh0aChgFLblMBzYmvIDs23puPj/view?usp=drivesdk', NULL, '2024-05-20 19:18:12', '2024-05-20 19:18:12', '0655389292'),
(775, 'Laabibate youssef', 'laabibate1988@gmail.com', 'Demande d\'emploi', 'Bonjour \r\nMon CV \r\nhttps://drive.google.com/file/d/104A8eUHh0aChgFLblMBzYmvIDs23puPj/view?usp=drivesdk', NULL, '2024-05-20 19:19:01', '2024-05-20 19:19:01', '0655389292');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `module` varchar(50) NOT NULL,
  `imageable_type` varchar(255) NOT NULL,
  `imageable_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `path`, `module`, `imageable_type`, `imageable_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'image-1.png', 'users', 'App\\Models\\User', 1, '2020-10-26 01:35:14', '2020-10-26 01:35:14', NULL),
(4, 'hetfvUFqKcy6PwmMD6XTzMhzVs6LfNjNFMKoYcmG.png', 'categories', 'App\\Models\\Categorie', 2, '2020-10-26 20:44:16', '2020-10-26 20:44:16', NULL),
(5, 'D5ZWSws9sdn6WA7CgHGIkqLI2Cy1xajdBMz16TlX.png', 'categories', 'App\\Models\\Categorie', 3, '2020-10-26 20:45:28', '2020-10-26 20:45:28', NULL),
(6, 'FdHXFkLfFbQtdgVI8RJKUp8AT998ULCGvhigZm1z.png', 'categories', 'App\\Models\\Categorie', 4, '2020-10-26 20:46:40', '2020-10-26 20:46:40', NULL),
(7, 'MIU6HnVaNM2aL8D5MQyaYVA2i8bxqXgo8TefFLuu.png', 'categories', 'App\\Models\\Categorie', 5, '2020-10-26 20:47:18', '2020-10-26 20:47:18', NULL),
(8, 'ZBChucOiMQ0sLe5kfMAlLjf1HIN5kGiAlvCzDFd4.png', 'categories', 'App\\Models\\Categorie', 6, '2020-10-26 20:47:48', '2020-10-26 20:47:48', NULL),
(9, 'xvLwl63A64hisBipgEcACxFRNdKDNeWCHgJomhnf.png', 'categories', 'App\\Models\\Categorie', 7, '2020-10-26 20:48:24', '2020-10-26 20:48:24', NULL),
(10, 'dOZWLc5O9KpMTVzagdsBHqTbqyYkQZXWZDuQ0WAT.png', 'categories', 'App\\Models\\Categorie', 8, '2020-10-26 20:48:54', '2020-10-26 20:48:54', NULL),
(302, 'RWrk3G45WGlJNm9I0SidBjuJUIBYZTffqa6vqTYq.jpeg', 'promotions', 'App\\Models\\Promotion', 1, '2020-10-26 01:41:14', '2020-10-26 01:41:14', NULL),
(303, '1PHnJ670A8GULVPZqMnKU1WCDfR0LJvl0sccXDxb.jpeg', 'promotions', 'App\\Models\\Promotion', 2, '2020-10-26 01:43:01', '2020-10-26 01:43:01', NULL),
(304, 'm4SUlTRE5VE2qlDpz8LGbbSnhicogZp9ml5v1BBF.jpeg', 'bannieres', 'App\\Models\\Banniere', 1, '2020-10-26 02:21:25', '2020-10-26 02:21:25', NULL),
(305, 'EapX9kHPrj6A1KLPXhhMQFZN6pU3WcIglAqQRU04.jpeg', 'bannieres', 'App\\Models\\Banniere', 2, '2020-10-26 02:25:55', '2020-10-26 02:25:55', NULL),
(306, '1713879355.jpg', 'bannieres', 'App\\Models\\Banniere', 3, '2020-10-26 10:38:25', '2024-04-23 12:35:55', NULL),
(307, '1713879329.jpg', 'bannieres', 'App\\Models\\Banniere', 4, '2020-10-26 10:38:48', '2024-04-23 12:35:29', NULL),
(308, 'NesZNjnidihMRlbA2ZUXc7hdeqOtjeLip7ihgYnQ.png', 'partenaires', 'App\\Models\\Partenaire', 1, '2020-10-26 10:52:00', '2020-11-04 10:35:19', NULL),
(309, 'c3ALEU766TK03HxfYtulj6sNqSBYq2v6KIybRbMc.png', 'partenaires', 'App\\Models\\Partenaire', 2, '2020-10-26 10:52:19', '2020-11-04 10:35:27', NULL),
(310, '1610960559.png', 'partenaires', 'App\\Models\\Partenaire', 3, '2020-10-26 10:52:45', '2021-01-18 08:02:39', NULL),
(311, 'C4RFDtrbiZIMOSGsHL70ICgfU5sNOTnt3ltAGlER.png', 'partenaires', 'App\\Models\\Partenaire', 4, '2020-10-26 10:53:25', '2020-11-04 10:35:51', NULL),
(312, 'raGKsdQF8rfOs0vNEXndFsNh35Eyc80bjFDZPPpy.png', 'partenaires', 'App\\Models\\Partenaire', 5, '2020-10-26 10:53:46', '2020-11-04 10:36:00', NULL),
(313, 'nPjY449qF1xU94y8J8EIdN9SswZZWfVgyz7YA2i7.png', 'partenaires', 'App\\Models\\Partenaire', 6, '2020-10-26 10:54:03', '2020-11-04 10:36:11', NULL),
(314, 'UyW7s2GDGcs1bPspg39KnScUq5hR17aLLDgTHbfj.png', 'partenaires', 'App\\Models\\Partenaire', 7, '2020-10-26 10:54:27', '2020-11-04 10:36:16', NULL),
(315, '1610961085.png', 'partenaires', 'App\\Models\\Partenaire', 8, '2020-10-26 10:55:12', '2021-01-18 08:11:25', NULL),
(316, 'AnNZdjLhxU3bBkRWO4AmqGmkI2WRmTBlLRzaTzYZ.jpeg', 'promotions', 'App\\Models\\Promotion', 3, '2020-10-26 11:00:26', '2020-10-26 11:00:26', NULL),
(317, '1663751973.jpg', 'promotions', 'App\\Models\\Promotion', 4, '2020-10-26 11:01:00', '2022-09-21 08:19:33', NULL),
(318, '1663751945.jpg', 'promotions', 'App\\Models\\Promotion', 5, '2020-10-26 11:03:42', '2022-09-21 08:19:05', NULL),
(319, 'buuZBniPShwc2jNAZzeORfHOfPMTMfJIrDyZ0vd5.png', 'partenaires', 'App\\Models\\Partenaire', 9, '2020-10-26 11:27:27', '2020-11-04 10:36:28', NULL),
(320, 'Hb32TXvj8KE4KuS6sjkObWRQeRzmwRHj96ReSAEe.jpeg', 'actualites', 'App\\Models\\Actualite', 1, '2020-11-17 16:26:22', '2020-11-17 16:26:22', NULL),
(321, '2O0u8Uht3DJwYGxRoBdQxObgRjkFnFB7ZGvGb8vQ.jpeg', 'actualites', 'App\\Models\\Actualite', 2, '2020-11-17 16:34:29', '2020-11-17 16:34:29', NULL),
(322, 'a2XbJ7JCGbSD0UPcX3HFvR0zisJCvnxTbbpj8f3V.jpeg', 'actualites', 'App\\Models\\Actualite', 3, '2020-11-17 16:39:11', '2020-11-17 16:39:11', NULL),
(332, '1605706497Desert.jpg', 'actualites', 'App\\Models\\Actualite', 19, '2020-11-18 12:29:32', '2020-11-18 12:34:57', NULL),
(333, '16057087442594_img-20170714-wa0000.jpeg', 'actualites', 'App\\Models\\Actualite', 20, '2020-11-18 13:12:24', '2020-11-18 13:12:24', NULL),
(334, '16057088552595_img-20170708-wa0004.jpeg', 'actualites', 'App\\Models\\Actualite', 21, '2020-11-18 13:14:15', '2020-11-18 13:14:15', NULL),
(335, '16057093892592_img-20170411-wa0010.jpeg', 'actualites', 'App\\Models\\Actualite', 22, '2020-11-18 13:23:09', '2020-11-18 13:23:09', NULL),
(336, '1605899449hetfvUFqKcy6PwmMD6XTzMhzVs6LfNjNFMKoYcmG.png', 'categories', 'App\\Models\\Categorie', 9, '2020-11-20 18:09:33', '2020-11-20 18:10:49', NULL),
(337, '1663751911.jpg', 'promotions', 'App\\Models\\Promotion', 6, '2020-11-20 18:13:23', '2022-09-21 08:18:31', NULL),
(338, '1637075676.jpg', 'bannieres', 'App\\Models\\Banniere', 5, '2020-11-20 18:15:59', '2021-11-16 14:14:36', NULL),
(339, '1605900204NesZNjnidihMRlbA2ZUXc7hdeqOtjeLip7ihgYnQ.png', 'partenaires', 'App\\Models\\Partenaire', 10, '2020-11-20 18:20:15', '2020-11-20 18:23:24', NULL),
(340, '1610442689NRF.jpg', 'actualites', 'App\\Models\\Actualite', 23, '2020-11-20 21:02:06', '2021-01-12 08:11:29', NULL),
(341, '1605915368dOZWLc5O9KpMTVzagdsBHqTbqyYkQZXWZDuQ0WAT.png', 'categories', 'App\\Models\\Categorie', 10, '2020-11-20 22:36:08', '2020-11-20 22:36:08', NULL),
(342, '1605916582hetfvUFqKcy6PwmMD6XTzMhzVs6LfNjNFMKoYcmG.png', 'categories', 'App\\Models\\Categorie', 11, '2020-11-20 22:56:22', '2020-11-20 22:56:22', NULL),
(345, '1608201890latest-blog5.jpg', 'offres', 'App\\Models\\Offre', 27, '2020-12-16 13:38:37', '2020-12-17 09:44:50', NULL),
(346, '1608202857homepage-option15-image-1.png', 'offres', 'App\\Models\\Offre', 28, '2020-12-16 15:25:50', '2020-12-17 10:00:57', NULL),
(347, '1608202866contrat-commercial-min.jpg', 'offres', 'App\\Models\\Offre', 29, '2020-12-16 15:27:18', '2020-12-17 10:01:06', NULL),
(348, '1608820252Desert.jpg', 'offres', 'App\\Models\\Offre', 30, '2020-12-24 13:30:52', '2020-12-24 13:30:52', NULL),
(349, '1608820287Desert.jpg', 'offres', 'App\\Models\\Offre', 31, '2020-12-24 13:31:27', '2020-12-24 13:31:27', NULL),
(350, '1610447629.png', 'categories', 'App\\Models\\Categorie', 12, '2021-01-12 07:57:10', '2021-01-12 09:33:49', NULL),
(351, '1610447583.png', 'categories', 'App\\Models\\Categorie', 13, '2021-01-12 08:01:30', '2021-01-12 09:33:03', NULL),
(352, '1610446000VARTA.jpg', 'actualites', 'App\\Models\\Actualite', 24, '2021-01-12 09:06:40', '2021-01-12 09:06:40', NULL),
(353, '1610960194.png', 'categories', 'App\\Models\\Categorie', 14, '2021-01-18 07:56:35', '2021-01-18 07:56:35', NULL),
(354, '1610961284.png', 'partenaires', 'App\\Models\\Partenaire', 11, '2021-01-18 08:14:44', '2021-01-18 08:14:44', NULL),
(355, '1610961678.png', 'partenaires', 'App\\Models\\Partenaire', 12, '2021-01-18 08:21:18', '2021-01-18 08:21:18', NULL),
(356, '1610962023.png', 'partenaires', 'App\\Models\\Partenaire', 13, '2021-01-18 08:27:03', '2021-01-18 08:27:03', NULL),
(357, '1610962598.png', 'partenaires', 'App\\Models\\Partenaire', 14, '2021-01-18 08:36:38', '2021-01-18 08:36:38', NULL),
(358, '1610963135.png', 'partenaires', 'App\\Models\\Partenaire', 15, '2021-01-18 08:45:35', '2021-01-18 08:45:35', NULL),
(359, '1610963231.png', 'partenaires', 'App\\Models\\Partenaire', 16, '2021-01-18 08:47:11', '2021-01-18 08:47:11', NULL),
(360, '1610963434.png', 'partenaires', 'App\\Models\\Partenaire', 17, '2021-01-18 08:50:34', '2021-01-18 08:50:34', NULL),
(361, '1610963521.png', 'partenaires', 'App\\Models\\Partenaire', 18, '2021-01-18 08:52:01', '2021-01-18 08:52:01', NULL),
(362, '1610963617.png', 'partenaires', 'App\\Models\\Partenaire', 19, '2021-01-18 08:53:37', '2021-01-18 08:53:37', NULL),
(363, '1610964021.png', 'partenaires', 'App\\Models\\Partenaire', 20, '2021-01-18 09:00:21', '2021-01-18 09:00:21', NULL),
(364, '1610964597.png', 'partenaires', 'App\\Models\\Partenaire', 21, '2021-01-18 09:09:57', '2021-01-18 09:09:57', NULL),
(365, '1610966975.png', 'partenaires', 'App\\Models\\Partenaire', 22, '2021-01-18 09:49:35', '2021-01-18 09:49:35', NULL),
(366, '1610967196.png', 'partenaires', 'App\\Models\\Partenaire', 23, '2021-01-18 09:53:16', '2021-01-18 09:53:16', NULL),
(367, '1610967339.png', 'partenaires', 'App\\Models\\Partenaire', 24, '2021-01-18 09:55:39', '2021-01-18 09:55:39', NULL),
(368, '1610967487.png', 'partenaires', 'App\\Models\\Partenaire', 25, '2021-01-18 09:58:07', '2021-01-18 09:58:07', NULL),
(369, '1610967796.png', 'partenaires', 'App\\Models\\Partenaire', 26, '2021-01-18 10:03:16', '2021-01-18 10:03:16', NULL),
(370, '1610967979.png', 'partenaires', 'App\\Models\\Partenaire', 27, '2021-01-18 10:06:19', '2021-01-18 10:06:19', NULL),
(371, '1610968126.png', 'partenaires', 'App\\Models\\Partenaire', 28, '2021-01-18 10:08:46', '2021-01-18 10:08:46', NULL),
(372, '1610968313.png', 'partenaires', 'App\\Models\\Partenaire', 29, '2021-01-18 10:11:53', '2021-01-18 10:11:53', NULL),
(373, '1610968691.png', 'partenaires', 'App\\Models\\Partenaire', 30, '2021-01-18 10:18:11', '2021-01-18 10:18:11', NULL),
(374, '1610968832.png', 'partenaires', 'App\\Models\\Partenaire', 31, '2021-01-18 10:20:32', '2021-01-18 10:20:32', NULL),
(375, '1610969297.png', 'partenaires', 'App\\Models\\Partenaire', 32, '2021-01-18 10:28:17', '2021-01-18 10:28:17', NULL),
(376, '1610969629.png', 'partenaires', 'App\\Models\\Partenaire', 33, '2021-01-18 10:33:50', '2021-01-18 10:33:50', NULL),
(377, '1610970179.png', 'partenaires', 'App\\Models\\Partenaire', 34, '2021-01-18 10:42:59', '2021-01-18 10:42:59', NULL),
(378, '1610970830.png', 'categories', 'App\\Models\\Categorie', 15, '2021-01-18 10:53:50', '2021-01-18 10:53:50', NULL),
(379, '1610971296.png', 'partenaires', 'App\\Models\\Partenaire', 35, '2021-01-18 11:01:36', '2021-01-18 11:01:36', NULL),
(380, '1610983567.png', 'categories', 'App\\Models\\Categorie', 16, '2021-01-18 14:26:07', '2021-01-18 14:26:07', NULL),
(381, '1610983893.png', 'partenaires', 'App\\Models\\Partenaire', 36, '2021-01-18 14:31:34', '2021-01-18 14:31:34', NULL),
(382, '1610983967.png', 'partenaires', 'App\\Models\\Partenaire', 37, '2021-01-18 14:32:47', '2021-01-18 14:32:47', NULL),
(383, '1610985224.png', 'categories', 'App\\Models\\Categorie', 17, '2021-01-18 14:53:44', '2021-01-18 14:53:44', NULL),
(384, '1610985366.png', 'partenaires', 'App\\Models\\Partenaire', 38, '2021-01-18 14:56:06', '2021-01-18 14:56:06', NULL),
(385, '1610985923.png', 'categories', 'App\\Models\\Categorie', 18, '2021-01-18 15:05:23', '2021-01-18 15:05:23', NULL),
(386, '1610986150.png', 'partenaires', 'App\\Models\\Partenaire', 39, '2021-01-18 15:06:07', '2021-01-18 15:09:10', NULL),
(387, '1610986274.png', 'categories', 'App\\Models\\Categorie', 19, '2021-01-18 15:11:14', '2021-01-18 15:11:14', NULL),
(388, '1610986507.png', 'partenaires', 'App\\Models\\Partenaire', 40, '2021-01-18 15:15:07', '2021-01-18 15:15:07', NULL),
(389, '1610986725.png', 'categories', 'App\\Models\\Categorie', 20, '2021-01-18 15:18:45', '2021-01-18 15:18:45', NULL),
(390, '1610988477.png', 'partenaires', 'App\\Models\\Partenaire', 41, '2021-01-18 15:47:57', '2021-01-18 15:47:57', NULL),
(391, '1610988517.png', 'categories', 'App\\Models\\Categorie', 21, '2021-01-18 15:48:37', '2021-01-18 15:48:37', NULL),
(392, '1610988671.png', 'categories', 'App\\Models\\Categorie', 22, '2021-01-18 15:51:11', '2021-01-18 15:51:11', NULL),
(393, '1610989289.png', 'partenaires', 'App\\Models\\Partenaire', 42, '2021-01-18 16:01:29', '2021-01-18 16:01:29', NULL),
(394, '1610989364.png', 'categories', 'App\\Models\\Categorie', 23, '2021-01-18 16:02:44', '2021-01-18 16:02:44', NULL),
(395, '1610989674.png', 'categories', 'App\\Models\\Categorie', 24, '2021-01-18 16:07:54', '2021-01-18 16:07:54', NULL),
(396, '1610990396.png', 'partenaires', 'App\\Models\\Partenaire', 43, '2021-01-18 16:19:56', '2021-01-18 16:19:56', NULL),
(397, '1620209642.png', 'categories', 'App\\Models\\Categorie', 25, '2021-01-18 16:22:34', '2021-05-05 10:14:02', NULL),
(398, '1610991077.png', 'partenaires', 'App\\Models\\Partenaire', 44, '2021-01-18 16:31:17', '2021-01-18 16:31:17', NULL),
(399, '1610991098.png', 'categories', 'App\\Models\\Categorie', 26, '2021-01-18 16:31:38', '2021-01-18 16:31:38', NULL),
(400, '1610991764.png', 'partenaires', 'App\\Models\\Partenaire', 45, '2021-01-18 16:42:44', '2021-01-18 16:42:44', NULL),
(401, '1610991801.png', 'categories', 'App\\Models\\Categorie', 27, '2021-01-18 16:43:21', '2021-01-18 16:43:21', NULL),
(402, '1610992236.png', 'categories', 'App\\Models\\Categorie', 28, '2021-01-18 16:50:36', '2021-01-18 16:50:36', NULL),
(403, '1611150591.png', 'categories', 'App\\Models\\Categorie', 29, '2021-01-20 12:49:51', '2021-01-20 12:49:51', NULL),
(404, '1611151672.png', 'partenaires', 'App\\Models\\Partenaire', 46, '2021-01-20 13:07:52', '2021-01-20 13:07:52', NULL),
(405, '1611151775.png', 'partenaires', 'App\\Models\\Partenaire', 47, '2021-01-20 13:09:35', '2021-01-20 13:09:35', NULL),
(406, '1611151805.png', 'partenaires', 'App\\Models\\Partenaire', 48, '2021-01-20 13:10:05', '2021-01-20 13:10:05', NULL),
(407, '1611152232.png', 'partenaires', 'App\\Models\\Partenaire', 49, '2021-01-20 13:17:12', '2021-01-20 13:17:12', NULL),
(408, '1611152287.png', 'partenaires', 'App\\Models\\Partenaire', 50, '2021-01-20 13:18:07', '2021-01-20 13:18:07', NULL),
(409, '1611152552.png', 'partenaires', 'App\\Models\\Partenaire', 51, '2021-01-20 13:22:32', '2021-01-20 13:22:32', NULL),
(410, '1611152757.png', 'partenaires', 'App\\Models\\Partenaire', 52, '2021-01-20 13:25:57', '2021-01-20 13:25:57', NULL),
(411, '1611153183.png', 'partenaires', 'App\\Models\\Partenaire', 53, '2021-01-20 13:33:03', '2021-01-20 13:33:03', NULL),
(412, '1611153408.png', 'partenaires', 'App\\Models\\Partenaire', 54, '2021-01-20 13:36:48', '2021-01-20 13:36:48', NULL),
(413, '1611161480.png', 'partenaires', 'App\\Models\\Partenaire', 55, '2021-01-20 15:51:20', '2021-01-20 15:51:20', NULL),
(414, '1611314411.png', 'partenaires', 'App\\Models\\Partenaire', 56, '2021-01-22 10:20:11', '2021-01-22 10:20:11', NULL),
(415, '1620819837.jpg', 'bannieres', 'App\\Models\\Banniere', 6, '2021-01-22 11:04:19', '2021-05-12 11:43:57', NULL),
(416, '1611324672.jpg', 'actualites', 'App\\Models\\Actualite', 25, '2021-01-22 13:11:12', '2021-01-22 13:11:12', NULL),
(417, '1611324788.png', 'actualites', 'App\\Models\\Actualite', 26, '2021-01-22 13:13:08', '2021-01-22 13:13:08', NULL),
(418, '1611331744.png', 'actualites', 'App\\Models\\Actualite', 27, '2021-01-22 15:09:04', '2021-01-22 15:09:04', NULL),
(419, '1662391807.jpg', 'actualites', 'App\\Models\\Actualite', 28, '2021-01-25 15:09:35', '2022-09-05 14:30:07', NULL),
(420, '1665738760.jpg', 'actualites', 'App\\Models\\Actualite', 29, '2021-01-25 15:10:42', '2022-10-14 08:12:40', NULL),
(421, '1652812481.jpeg', 'actualites', 'App\\Models\\Actualite', 30, '2021-01-25 15:11:25', '2022-05-17 17:34:41', NULL),
(422, '1611736779.png', 'partenaires', 'App\\Models\\Partenaire', 57, '2021-01-27 07:39:39', '2021-01-27 07:39:39', NULL),
(423, '1620129399.jpg', 'promotions', 'App\\Models\\Promotion', 7, '2021-05-04 11:56:39', '2021-05-04 11:56:39', NULL),
(424, '1637075658.jpg', 'bannieres', 'App\\Models\\Banniere', 7, '2021-11-16 14:14:18', '2021-11-16 14:14:18', NULL),
(425, '1646750042.png', 'categories', 'App\\Models\\Categorie', 30, '2022-03-08 13:34:02', '2022-03-08 13:34:02', NULL),
(426, '1651150358.jpg', 'actualites', 'App\\Models\\Actualite', 31, '2022-04-28 12:52:38', '2022-04-28 12:52:38', NULL),
(427, '1663687436.png', 'partenaires', 'App\\Models\\Partenaire', 58, '2022-05-11 09:20:06', '2022-09-20 14:23:56', NULL),
(428, '1663687422.png', 'partenaires', 'App\\Models\\Partenaire', 59, '2022-05-11 09:23:19', '2022-09-20 14:23:42', NULL),
(429, '1663687410.png', 'partenaires', 'App\\Models\\Partenaire', 60, '2022-05-11 09:25:17', '2022-09-20 14:23:30', NULL),
(430, '1652264795.png', 'partenaires', 'App\\Models\\Partenaire', 61, '2022-05-11 09:26:35', '2022-05-11 09:26:35', NULL),
(431, '1663687393.png', 'partenaires', 'App\\Models\\Partenaire', 62, '2022-05-11 09:31:15', '2022-09-20 14:23:13', NULL),
(432, '1663687379.png', 'partenaires', 'App\\Models\\Partenaire', 63, '2022-05-11 12:34:48', '2022-09-20 14:22:59', NULL),
(433, '1663687366.png', 'partenaires', 'App\\Models\\Partenaire', 64, '2022-05-11 12:46:49', '2022-09-20 14:22:46', NULL),
(434, '1663687351.png', 'partenaires', 'App\\Models\\Partenaire', 65, '2022-05-11 13:34:10', '2022-09-20 14:22:31', NULL),
(435, '1652441479.png', 'categories', 'App\\Models\\Categorie', 42, '2022-05-12 20:58:30', '2022-05-13 10:31:19', NULL),
(436, '1652441703.png', 'categories', 'App\\Models\\Categorie', 41, '2022-05-12 21:02:02', '2022-05-13 10:35:03', NULL),
(437, '1652393357.png', 'categories', 'App\\Models\\Categorie', 36, '2022-05-12 21:09:17', '2022-05-12 21:09:17', NULL),
(438, '1662713450.png', 'categories', 'App\\Models\\Categorie', 43, '2022-05-12 21:13:22', '2022-09-09 07:50:50', NULL),
(439, '1662557223.png', 'categories', 'App\\Models\\Categorie', 44, '2022-05-13 13:46:05', '2022-09-07 12:27:03', NULL),
(440, '1652453362.png', 'categories', 'App\\Models\\Categorie', 45, '2022-05-13 13:49:22', '2022-05-13 13:49:22', NULL),
(441, '1652453437.png', 'categories', 'App\\Models\\Categorie', 46, '2022-05-13 13:50:37', '2022-05-13 13:50:37', NULL),
(442, '1663687331.png', 'partenaires', 'App\\Models\\Partenaire', 66, '2022-05-25 12:40:09', '2022-09-20 14:22:11', NULL),
(443, '1663687130.png', 'partenaires', 'App\\Models\\Partenaire', 67, '2022-05-25 13:29:44', '2022-09-20 14:18:50', NULL),
(444, '1663687112.png', 'partenaires', 'App\\Models\\Partenaire', 68, '2022-05-31 12:32:10', '2022-09-20 14:18:32', NULL),
(445, '1663687097.png', 'partenaires', 'App\\Models\\Partenaire', 69, '2022-05-31 14:44:06', '2022-09-20 14:18:17', NULL),
(446, '1663687081.png', 'partenaires', 'App\\Models\\Partenaire', 70, '2022-05-31 14:46:22', '2022-09-20 14:18:01', NULL),
(447, '1654012136.png', 'partenaires', 'App\\Models\\Partenaire', 71, '2022-05-31 14:48:56', '2022-05-31 14:48:56', NULL),
(448, '1663687046.png', 'partenaires', 'App\\Models\\Partenaire', 72, '2022-05-31 14:52:02', '2022-09-20 14:17:26', NULL),
(449, '1663687021.png', 'partenaires', 'App\\Models\\Partenaire', 73, '2022-05-31 15:04:56', '2022-09-20 14:17:01', NULL),
(450, '1663687006.png', 'partenaires', 'App\\Models\\Partenaire', 74, '2022-05-31 15:13:27', '2022-09-20 14:16:46', NULL),
(451, '1663686990.png', 'partenaires', 'App\\Models\\Partenaire', 75, '2022-06-01 08:26:05', '2022-09-20 14:16:30', NULL),
(452, '1654075833.png', 'partenaires', 'App\\Models\\Partenaire', 76, '2022-06-01 08:30:33', '2022-06-01 08:30:33', NULL),
(453, '1654076143.png', 'partenaires', 'App\\Models\\Partenaire', 77, '2022-06-01 08:35:43', '2022-06-01 08:35:43', NULL),
(454, '1663686971.png', 'partenaires', 'App\\Models\\Partenaire', 78, '2022-06-01 13:01:39', '2022-09-20 14:16:11', NULL),
(455, '1654092219.png', 'partenaires', 'App\\Models\\Partenaire', 79, '2022-06-01 13:03:39', '2022-06-01 13:03:39', NULL),
(456, '1663686959.png', 'partenaires', 'App\\Models\\Partenaire', 80, '2022-06-08 12:23:50', '2022-09-20 14:15:59', NULL),
(457, '1663686945.png', 'partenaires', 'App\\Models\\Partenaire', 81, '2022-09-05 12:31:22', '2022-09-20 14:15:45', NULL),
(458, '1662393270.png', 'categories', 'App\\Models\\Categorie', 52, '2022-09-05 12:40:06', '2022-09-05 14:54:30', NULL),
(459, '1662393284.png', 'categories', 'App\\Models\\Categorie', 55, '2022-09-05 12:51:45', '2022-09-05 14:54:44', NULL),
(460, '1662393379.png', 'categories', 'App\\Models\\Categorie', 71, '2022-09-05 13:20:34', '2022-09-05 14:56:19', NULL),
(461, '1662393297.png', 'categories', 'App\\Models\\Categorie', 69, '2022-09-05 14:34:22', '2022-09-05 14:54:57', NULL),
(462, '1662393369.png', 'categories', 'App\\Models\\Categorie', 70, '2022-09-05 14:36:49', '2022-09-05 14:56:09', NULL),
(463, '1662410887.png', 'categories', 'App\\Models\\Categorie', 73, '2022-09-05 19:48:07', '2022-09-05 19:48:07', NULL),
(464, '1662411307.png', 'categories', 'App\\Models\\Categorie', 72, '2022-09-05 19:55:07', '2022-09-05 19:55:07', NULL),
(465, '1662411538.png', 'categories', 'App\\Models\\Categorie', 74, '2022-09-05 19:58:58', '2022-09-05 19:58:58', NULL),
(466, '1662443173.png', 'categories', 'App\\Models\\Categorie', 51, '2022-09-06 04:45:37', '2022-09-06 04:46:13', NULL),
(467, '1662444430.png', 'categories', 'App\\Models\\Categorie', 31, '2022-09-06 05:07:10', '2022-09-06 05:07:10', NULL),
(468, '1662741273.png', 'categories', 'App\\Models\\Categorie', 32, '2022-09-06 05:12:24', '2022-09-09 15:34:33', NULL),
(469, '1662445028.png', 'categories', 'App\\Models\\Categorie', 33, '2022-09-06 05:17:08', '2022-09-06 05:17:08', NULL),
(470, '1662445220.png', 'categories', 'App\\Models\\Categorie', 34, '2022-09-06 05:20:20', '2022-09-06 05:20:20', NULL),
(471, '1662453033.png', 'categories', 'App\\Models\\Categorie', 56, '2022-09-06 07:30:33', '2022-09-06 07:30:33', NULL),
(472, '1662453535.png', 'categories', 'App\\Models\\Categorie', 57, '2022-09-06 07:38:55', '2022-09-06 07:38:55', NULL),
(473, '1662453883.png', 'categories', 'App\\Models\\Categorie', 58, '2022-09-06 07:44:43', '2022-09-06 07:44:43', NULL),
(474, '1662454329.png', 'categories', 'App\\Models\\Categorie', 59, '2022-09-06 07:52:09', '2022-09-06 07:52:09', NULL),
(475, '1662454888.png', 'categories', 'App\\Models\\Categorie', 60, '2022-09-06 08:01:28', '2022-09-06 08:01:28', NULL),
(476, '1662455786.png', 'categories', 'App\\Models\\Categorie', 50, '2022-09-06 08:16:26', '2022-09-06 08:16:26', NULL),
(477, '1662456259.png', 'categories', 'App\\Models\\Categorie', 48, '2022-09-06 08:24:19', '2022-09-06 08:24:19', NULL),
(478, '1662459204.png', 'categories', 'App\\Models\\Categorie', 66, '2022-09-06 09:13:24', '2022-09-06 09:13:24', NULL),
(479, '1662459914.png', 'categories', 'App\\Models\\Categorie', 63, '2022-09-06 09:25:14', '2022-09-06 09:25:14', NULL),
(480, '1662460157.png', 'categories', 'App\\Models\\Categorie', 62, '2022-09-06 09:28:04', '2022-09-06 09:29:17', NULL),
(481, '1662460147.png', 'categories', 'App\\Models\\Categorie', 64, '2022-09-06 09:29:07', '2022-09-06 09:29:07', NULL),
(482, '1662460436.png', 'categories', 'App\\Models\\Categorie', 61, '2022-09-06 09:33:56', '2022-09-06 09:33:56', NULL),
(483, '1662460554.png', 'categories', 'App\\Models\\Categorie', 65, '2022-09-06 09:35:54', '2022-09-06 09:35:54', NULL),
(484, '1662474123.png', 'categories', 'App\\Models\\Categorie', 68, '2022-09-06 13:22:03', '2022-09-06 13:22:03', NULL),
(485, '1662474335.png', 'categories', 'App\\Models\\Categorie', 49, '2022-09-06 13:25:35', '2022-09-06 13:25:35', NULL),
(486, '1662493811.png', 'categories', 'App\\Models\\Categorie', 67, '2022-09-06 18:50:11', '2022-09-06 18:50:11', NULL),
(487, '1662545443.png', 'partenaires', 'App\\Models\\Partenaire', 82, '2022-09-07 09:10:43', '2022-09-07 09:10:43', NULL),
(488, '1662545663.png', 'partenaires', 'App\\Models\\Partenaire', 83, '2022-09-07 09:14:23', '2022-09-07 09:14:23', NULL),
(489, '1662545689.png', 'partenaires', 'App\\Models\\Partenaire', 84, '2022-09-07 09:14:49', '2022-09-07 09:14:49', NULL),
(490, '1662546339.png', 'partenaires', 'App\\Models\\Partenaire', 85, '2022-09-07 09:25:39', '2022-09-07 09:25:39', NULL),
(491, '1662546751.png', 'partenaires', 'App\\Models\\Partenaire', 86, '2022-09-07 09:32:31', '2022-09-07 09:32:31', NULL),
(492, '1662550264.png', 'partenaires', 'App\\Models\\Partenaire', 87, '2022-09-07 10:31:04', '2022-09-07 10:31:04', NULL),
(493, '1662563977.png', 'categories', 'App\\Models\\Categorie', 75, '2022-09-07 14:19:37', '2022-09-07 14:19:37', NULL),
(494, '1662565515.png', 'categories', 'App\\Models\\Categorie', 76, '2022-09-07 14:45:15', '2022-09-07 14:45:15', NULL),
(495, '1662566040.png', 'categories', 'App\\Models\\Categorie', 77, '2022-09-07 14:54:00', '2022-09-07 14:54:00', NULL),
(496, '1663752018.jpg', 'promotions', 'App\\Models\\Promotion', 8, '2022-09-21 08:20:18', '2022-09-21 08:20:18', NULL),
(497, '1663752051.jpg', 'promotions', 'App\\Models\\Promotion', 9, '2022-09-21 08:20:51', '2022-09-21 08:20:51', NULL),
(498, 'plan.jpg', 'bannieres', 'App\\Models\\Banniere', 8, '2023-08-14 09:06:51', '2023-08-14 09:06:51', NULL),
(499, '1698760988.jpg', 'bannieres', 'App\\Models\\Banniere', 9, '2023-08-14 09:08:53', '2023-10-31 13:03:08', NULL),
(500, '1698761003.jpg', 'bannieres', 'App\\Models\\Banniere', 10, '2023-08-14 09:09:46', '2023-10-31 13:03:23', NULL),
(501, '1698761017.jpg', 'bannieres', 'App\\Models\\Banniere', 11, '2023-08-15 08:56:39', '2023-10-31 13:03:37', NULL),
(502, '1698761076.jpg', 'bannieres', 'App\\Models\\Banniere', 12, '2023-09-10 11:15:46', '2023-10-31 13:04:36', NULL),
(503, '1698916989.jpg', 'offres', 'App\\Models\\Offre', 33, '2023-11-02 08:23:09', '2023-11-02 08:23:09', NULL),
(504, '1699019593.jpg', 'offres', 'App\\Models\\Offre', 34, '2023-11-03 12:53:14', '2023-11-03 12:53:14', NULL),
(505, '1699026444.jfif', 'offres', 'App\\Models\\Offre', 35, '2023-11-03 14:47:24', '2023-11-03 14:47:24', NULL),
(506, '1699026908.jpg', 'offres', 'App\\Models\\Offre', 36, '2023-11-03 14:55:08', '2023-11-03 14:55:08', NULL),
(507, '1699286017.jpg', 'offres', 'App\\Models\\Offre', 37, '2023-11-06 14:53:37', '2023-11-06 14:53:37', NULL),
(508, '1699286519.jpg', 'offres', 'App\\Models\\Offre', 38, '2023-11-06 15:01:59', '2023-11-06 15:01:59', NULL),
(509, '1700150393.jpg', 'offres', 'App\\Models\\Offre', 39, '2023-11-07 07:27:10', '2023-11-16 14:59:53', NULL),
(510, '1700151138.jpg', 'offres', 'App\\Models\\Offre', 40, '2023-11-16 15:12:18', '2023-11-16 15:12:18', NULL),
(511, '1700151274.jpg', 'offres', 'App\\Models\\Offre', 41, '2023-11-16 15:14:34', '2023-11-16 15:14:34', NULL),
(512, '1700305848.jpg', 'offres', 'App\\Models\\Offre', 42, '2023-11-18 10:10:48', '2023-11-18 10:10:48', NULL),
(513, '1702894288.jpg', 'actualites', 'App\\Models\\Actualite', 32, '2023-12-18 09:11:28', '2023-12-18 09:11:28', NULL),
(514, '1702903979.jpg', 'actualites', 'App\\Models\\Actualite', 33, '2023-12-18 10:53:18', '2023-12-18 11:52:59', NULL),
(515, '1702909642.jpg', 'actualites', 'App\\Models\\Actualite', 34, '2023-12-18 13:27:22', '2023-12-18 13:27:22', NULL),
(516, '1702918065.jfif', 'actualites', 'App\\Models\\Actualite', 35, '2023-12-18 15:47:45', '2023-12-18 15:47:45', NULL),
(517, '1702918198.jfif', 'actualites', 'App\\Models\\Actualite', 36, '2023-12-18 15:49:58', '2023-12-18 15:49:58', NULL),
(518, '1702918212.jfif', 'actualites', 'App\\Models\\Actualite', 37, '2023-12-18 15:50:12', '2023-12-18 15:50:12', NULL),
(519, '1702918217.jfif', 'actualites', 'App\\Models\\Actualite', 38, '2023-12-18 15:50:17', '2023-12-18 15:50:17', NULL),
(520, '1702918369.png', 'actualites', 'App\\Models\\Actualite', 39, '2023-12-18 15:52:49', '2023-12-18 15:52:49', NULL),
(521, '1702994426.jpg', 'actualites', 'App\\Models\\Actualite', 40, '2023-12-19 13:00:26', '2023-12-19 13:00:26', NULL),
(522, '1703842821.png', 'bannieres', 'App\\Models\\Banniere', 13, '2023-12-29 08:24:31', '2023-12-29 08:40:21', NULL),
(523, '1713879303.png', 'bannieres', 'App\\Models\\Banniere', 14, '2024-01-08 14:48:25', '2024-04-23 12:35:03', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(29, '2014_10_12_000000_create_users_table', 1),
(30, '2014_10_12_100000_create_password_resets_table', 1),
(31, '2019_08_19_000000_create_failed_jobs_table', 1),
(32, '2020_04_16_173019_create_images_table', 1),
(33, '2020_10_19_160312_create_categories_table', 1),
(34, '2020_10_19_213449_create_bannieres_table', 1),
(35, '2020_10_19_213449_create_partenaires_table', 1),
(36, '2020_10_19_213449_create_produits_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

CREATE TABLE `offres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL DEFAULT '',
  `vu` int(11) NOT NULL DEFAULT 0,
  `contrat` varchar(50) NOT NULL,
  `ville_id` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `offres`
--

INSERT INTO `offres` (`id`, `title`, `content`, `vu`, `contrat`, `ville_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(39, 'CHARGé(E) DE TRANSPORT', '<p>Nous sommes &agrave; la recherche d&#39;un(e) charg&eacute;(e) de transport pour rejoindre notre &eacute;quipe.</p>\r\n\r\n<p><strong>Mission:</strong></p>\r\n\r\n<ul>\r\n	<li>Pr&eacute;parer &agrave; l&rsquo;&eacute;laboration du sch&eacute;ma du transport,</li>\r\n	<li>Garantir le respect du planning de livraison en optimisant en permanence les moyens humains et mat&eacute;riels,</li>\r\n	<li>Encadrer les &eacute;quipes transport (chauffeurs)</li>\r\n	<li>Surveiller le d&eacute;roulement et la qualit&eacute; des prestations de transport,</li>\r\n	<li>Etablir, suivre et analyser des indicateurs de performance .</li>\r\n</ul>\r\n\r\n<p><strong>Profil :</strong></p>\r\n\r\n<ul>\r\n	<li>Etre titulaire d&#39;un Bac+5 en management de la logistique et transport ou &eacute;quivalent,</li>\r\n	<li>Avoir une exp&eacute;rience significative de 5 ans minimum dans un poste similaire</li>\r\n	<li>Connaissance de la r&eacute;glementation en mati&egrave;re de transport,</li>\r\n	<li>Ma&icirc;trise des outils informatiques et bureautiques,</li>\r\n	<li>Autonomie, gestion de stress, esprit d&#39;&eacute;quipe, et capacit&eacute; d&#39;analyse.</li>\r\n</ul>', 0, 'CDI', 11, NULL, '2023-11-07 07:27:10', '2023-11-18 10:11:25'),
(40, 'RESPONSABLE AGENCE DE PIèCES DE RECHANGE', '<p><strong>Mission:&nbsp;</strong><br />\r\nRattach&eacute; &agrave; la direction Commercial, vous aurez pour mission:<br />\r\nVous prenez en charge l&rsquo;ensemble des activit&eacute;s d&rsquo;encadrement, d&rsquo;organisation et de gestion de l&rsquo;agence.<br />\r\n<br />\r\nVous assurez les activit&eacute;s relatives :</p>\r\n\r\n<ul>\r\n	<li>Au management des collaborateurs;</li>\r\n	<li>&Agrave; l&#39;organisation, &agrave; la gestion et au d&eacute;veloppement de la commercialisation des pi&egrave;ces de rechange .Profil recherch&eacute; :</li>\r\n	<li>Vous &ecirc;tes issu d&rsquo;une formation de Bac+4/5 de sp&eacute;cialit&eacute; logistique,commerce ou &eacute;quivalent.</li>\r\n	<li>Vous justifiez d&rsquo;une exp&eacute;rience confirm&eacute;e dans le domaine des pi&egrave;ces de rechange de 5 ans minimum</li>\r\n	<li>Vous ma&icirc;trisez la gestion de stock</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 0, 'CDI', 131, NULL, '2023-11-16 15:12:18', '2023-11-18 10:11:17'),
(41, 'RESPONSABLE COMMERCIAL GRANDS COMPTES', '<p><strong>MISSION :</strong></p>\r\n\r\n<ul>\r\n	<li>Ex&eacute;cuter la strat&eacute;gie commerciale et les orientations strat&eacute;giques mise en place par la direction</li>\r\n	<li>Pr&eacute;senter, proposer et commercialiser les produits et services de la soci&eacute;t&eacute;,</li>\r\n	<li>Assurer une veille concurrentiel active,</li>\r\n	<li>Veiller &agrave; la bonne mise en &oelig;uvre des politiques commerciales d&eacute;finies</li>\r\n	<li>Effectuer un reporting r&eacute;gulier de votre activit&eacute; aupr&egrave;s de la Direction.</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Profil:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>&Ecirc;tre titulaire d&#39;un Bac+3/5 en commerce , marketing ou &eacute;quivalent.</li>\r\n	<li>Avoir une exp&eacute;rience de 3 ans minimum dans un poste similaire dans le domaine des pi&egrave;ces de rechanges automobiles</li>\r\n	<li>Bon niveau de communication</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 0, 'CDI', 11, NULL, '2023-11-16 15:14:34', '2023-11-18 10:11:06'),
(42, 'CATEGORY MANAGER', '<p>Nous sommes &agrave; la recherche d&#39;un(e) Category Manager<br />\r\nRattach&eacute; &agrave; la direction des achats<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Missions principales:</strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Choix des fournisseurs,</li>\r\n	<li>&nbsp;N&eacute;gociation des prix,</li>\r\n	<li>Assurer le d&eacute;veloppement des familles.</li>\r\n</ul>\r\n\r\n<p><strong>Profil recherch&eacute; :</strong></p>\r\n\r\n<ul>\r\n	<li>De formation Bac+5 en achat et logistique ou &eacute;quivalent.</li>\r\n	<li>Avoir une exp&eacute;rience de 2 &agrave; 3 ans dans un poste similaire</li>\r\n	<li>&nbsp;Avoir un bon niveau de communication en fran&ccedil;ais et anglais</li>\r\n</ul>', 0, 'CDI', 11, NULL, '2023-11-18 10:10:48', '2023-11-18 10:13:57');

-- --------------------------------------------------------

--
-- Structure de la table `offres_users`
--

CREATE TABLE `offres_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `offre_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `offres_users`
--

INSERT INTO `offres_users` (`id`, `offre_id`, `created_at`, `updated_at`, `user_id`) VALUES
(2, 28, NULL, NULL, 1),
(3, 29, NULL, NULL, 1),
(4, 27, NULL, NULL, 21),
(5, 33, NULL, NULL, 1),
(6, 34, NULL, NULL, 1),
(7, 38, NULL, NULL, 1),
(86, 41, NULL, NULL, 133),
(91, 42, NULL, NULL, 138),
(93, 39, NULL, NULL, 137),
(94, 40, NULL, NULL, 137);

-- --------------------------------------------------------

--
-- Structure de la table `parametres`
--

CREATE TABLE `parametres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `valeur` text NOT NULL DEFAULT '',
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `parametres`
--

INSERT INTO `parametres` (`id`, `valeur`, `updated_at`) VALUES
(1, 'Autoplus-(Maghreb Accessoires)', NULL),
(2, '------------------------------------------', NULL),
(3, 'Maghreb Accessoires a été fondée en 1948, et intervient dans le secteur de la commercialisation et de la distribution de pièces de rechange et accessoires pour l’automobile, poids lourd et la carrosserie.', NULL),
(4, 'Maghreb Accessoires a été fondée en 1948, et intervient dans le secteur de la commercialisation et de la distribution de pièces de rechange et accessoires pour l’automobile, poids lourd et la carrosserie.\r\n\r\nLa confiance et le sérieux des clients ont toujours été et resteront la source N°1 de l’énergie, de la réactivité et du développement de Maghreb Accessoires. Maghreb Accessoires se veut donc pour tous un partenaire fiable et solide qui conjugue la maîtrise de son métier, une bonne connaissance du marché, des fournisseurs mondiaux de référence à des valeurs d’entreprise pour accompagner et répondre concrètement aux attentes de ses clients.', NULL),
(5, 'ESPRIT D\'EQUIPE', NULL),
(6, 'Solidarité et répartition des tâches, tel est notre devise pour la satisfaction client.', NULL),
(7, 'Solidarité et répartition des tâches, tel est notre devise pour la satisfaction client.', NULL),
(8, 'contenu 7', NULL),
(9, 'ECOUTE', NULL),
(10, 'Localisation des plantations', NULL),
(11, 'titre 1', NULL),
(12, 'titre 2', NULL),
(13, 'titre 3', NULL),
(14, 'What does royalty free mean?', NULL),
(15, 'contenu 1', NULL),
(16, 'contenu1', NULL),
(17, 'contenu 10', NULL),
(18, 'contenu 3', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `partenaires`
--

CREATE TABLE `partenaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lien` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `libelle` varchar(250) NOT NULL,
  `classement` int(11) NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `partenaires`
--

INSERT INTO `partenaires` (`id`, `lien`, `deleted_at`, `created_at`, `updated_at`, `libelle`, `classement`) VALUES
(2, 'https://www.wolflubes.com/', NULL, '2020-10-26 10:52:19', '2020-10-26 10:52:19', 'Wolf', 1),
(3, 'http://lambert.ma/dynamic/', NULL, '2020-10-26 10:52:45', '2020-10-26 10:52:45', 'Autoplus', 100),
(4, 'https://www.victorreinz.com/EN/Home.aspx', NULL, '2020-10-26 10:53:25', '2020-10-26 10:53:25', 'victorreiniz', 100),
(5, 'https://www.varta-automotive.fr/fr-fr', NULL, '2020-10-26 10:53:46', '2021-01-18 08:22:29', 'Varta', 0),
(6, 'https://www.valeo.com/en/', NULL, '2020-10-26 10:54:03', '2020-10-26 10:54:03', 'Valeo', 6),
(7, 'https://www.purflux.com/fr/index.html', NULL, '2020-10-26 10:54:27', '2020-10-26 10:54:27', 'purflux', 100),
(8, 'https://www.bluestorm-batteries.com/', NULL, '2020-10-26 10:55:12', '2021-01-18 08:11:25', 'Blue Storm', 100),
(9, 'https://www.philips.com/c-cs/automotive-products-country-selector.html', NULL, '2020-10-26 11:27:27', '2020-10-26 11:27:27', 'philips', 100),
(10, 'https://www.wabco-auto.com/emea/home', '2021-01-18 09:55:53', '2020-11-20 18:20:15', '2021-01-18 09:55:53', 'Wabco', 100),
(11, 'https://www.trwaftermarket.com/fr/', NULL, '2021-01-18 08:14:44', '2021-01-18 08:14:44', 'TRW', 7),
(12, 'https://www.brembo.com/fr', NULL, '2021-01-18 08:21:18', '2021-01-18 08:21:18', 'Brembo', 100),
(13, 'www.bosch.com', NULL, '2021-01-18 08:27:03', '2021-01-18 08:27:03', 'Bosch', 5),
(14, 'https://www.galfer-aftermarket.com/', NULL, '2021-01-18 08:36:38', '2021-01-18 08:36:38', 'Galfer', 100),
(15, 'https://www.drivparts.com/', NULL, '2021-01-18 08:45:35', '2021-01-18 08:45:35', 'DR1V', 100),
(16, 'https://aftermarket.zf.com/go/en/sachs/home/', NULL, '2021-01-18 08:47:11', '2021-01-18 08:47:11', 'Sachs', 4),
(17, 'https://aftermarket.schaeffler.com/en', '2021-01-18 10:54:46', '2021-01-18 08:50:34', '2021-01-18 10:54:46', 'LUK', 100),
(18, 'https://www.skf.com/group', NULL, '2021-01-18 08:52:01', '2021-01-18 08:52:01', 'SKF', 100),
(19, 'https://www.mahle.com/', NULL, '2021-01-18 08:53:37', '2021-01-18 08:53:37', 'MAHLE', 100),
(20, 'https://aftermarket.zf.com/go/en/boge/home/', NULL, '2021-01-18 09:00:21', '2021-01-18 09:00:21', 'BOGE', 100),
(21, 'https://www.zf.com/mobile/en/homepage/homepage.html', NULL, '2021-01-18 09:09:57', '2021-01-18 09:09:57', 'ZF', 100),
(22, 'https://www.eyquem.com/en/', NULL, '2021-01-18 09:49:35', '2021-01-18 09:49:35', 'EYQUEM', 100),
(23, 'https://www.ngkntk.com/fr/', NULL, '2021-01-18 09:53:16', '2021-01-18 09:53:16', 'NGK', 100),
(24, 'https://www.aisin.com/product/automotive/', NULL, '2021-01-18 09:55:39', '2021-01-18 09:55:39', 'AISIN', 100),
(25, 'www.hella.com', NULL, '2021-01-18 09:58:07', '2021-01-18 09:58:07', 'HELLA', 100),
(26, 'https://www.metelligroup.it/Brands/Metelli', NULL, '2021-01-18 10:03:16', '2021-01-18 10:03:16', 'metelli', 100),
(27, 'https://nissens.com/', NULL, '2021-01-18 10:06:19', '2021-01-18 10:06:19', 'Nissens', 100),
(28, 'https://sasic.fr/', NULL, '2021-01-18 10:08:46', '2021-01-18 10:08:46', 'SASIC', 100),
(29, 'https://www.corteco.com/en/home/', NULL, '2021-01-18 10:11:53', '2021-01-18 10:11:53', 'corteco', 100),
(30, 'https://www.schaeffler.com/fork/', NULL, '2021-01-18 10:18:11', '2021-01-18 10:18:11', 'Group schaeffler', 100),
(31, 'https://www.meat-doria.com/', NULL, '2021-01-18 10:20:32', '2021-01-18 10:20:32', 'Meat Doria', 100),
(32, 'https://www.elring.com/en/retail/online-catalogs/', NULL, '2021-01-18 10:28:17', '2021-01-18 10:28:17', 'elring', 100),
(33, 'www.autopro-maroc.ma', NULL, '2021-01-18 10:33:49', '2021-01-18 10:33:49', 'autopro', 2),
(34, 'https://www.ate.de/error/', NULL, '2021-01-18 10:42:59', '2021-01-18 10:42:59', 'Ate', 100),
(35, 'https://www.gkn.com/', NULL, '2021-01-18 11:01:36', '2021-01-18 11:01:36', 'JKN', 100),
(36, 'http://www.monroe.com/en-US/', NULL, '2021-01-18 14:31:33', '2021-01-18 14:31:33', 'MONROE', 100),
(37, 'https://kyb-europe.com/france/produits/amortisseurs/', NULL, '2021-01-18 14:32:47', '2021-01-18 14:32:47', 'KYB', 100),
(38, 'https://www.ntn-snr.com/fr', NULL, '2021-01-18 14:56:06', '2021-01-18 15:07:31', 'ntn snr', 100),
(39, 'https://aftermarket.zf.com/fr/fr/lemfoerder/accueil/', NULL, '2021-01-18 15:06:07', '2021-01-18 15:07:20', 'LEMFORDER', 100),
(40, 'https://www.klaxcar.com/fr/produits/', NULL, '2021-01-18 15:15:07', '2021-01-18 15:16:11', 'Klaxcar', 100),
(41, 'https://www.gsp-europe.com/fr/', NULL, '2021-01-18 15:47:57', '2021-01-18 15:47:57', 'GSP', 100),
(42, 'https://www.nrf.eu/fr/', NULL, '2021-01-18 16:01:29', '2021-01-18 16:01:29', 'NRF', 100),
(43, 'https://www.continental-engineparts.com/eu/fr-FR/Aftermarket/Products/Components/Water-pumps-for-ancillary-drives', NULL, '2021-01-18 16:19:56', '2021-01-18 16:19:56', 'Continental', 100),
(44, 'https://www.dayco.com/fr/', NULL, '2021-01-18 16:31:17', '2021-01-18 16:31:17', 'DAYCO', 100),
(45, 'https://www.vernet-group.com/', NULL, '2021-01-18 16:42:44', '2021-01-18 16:42:44', 'Vernet', 100),
(46, 'https://www.r2agroup.it/fr', NULL, '2021-01-20 13:07:52', '2021-01-20 13:07:52', 'R2A', 100),
(47, 'https://www.eurobump.com/', NULL, '2021-01-20 13:09:35', '2021-01-20 13:09:35', 'Eurobump', 100),
(48, 'http://www.phira.es/fr/home', NULL, '2021-01-20 13:10:05', '2021-01-20 13:10:05', 'Phira', 100),
(49, 'https://www.itsa.es/', NULL, '2021-01-20 13:17:12', '2021-01-20 13:17:12', 'ITSA', 100),
(50, 'https://www.alkar.es/fr/retroviseurs.html', NULL, '2021-01-20 13:18:07', '2021-01-20 13:18:07', 'ALKAR', 100),
(51, 'https://www.de-ga.com.tr/', NULL, '2021-01-20 13:22:32', '2021-01-20 13:22:32', 'DE-GA', 100),
(52, 'http://www.tyc.com.tw/', NULL, '2021-01-20 13:25:57', '2021-01-20 13:25:57', 'TYC', 100),
(53, 'http://www.tong-yang.com/', NULL, '2021-01-20 13:33:03', '2021-01-20 13:33:03', 'TONG YANG', 100),
(54, 'http://www.pulo.com.tw/', NULL, '2021-01-20 13:36:48', '2021-01-20 13:36:48', 'PULO', 100),
(55, 'https://www.magnetimarelli-parts-and-services.com/', NULL, '2021-01-20 15:51:20', '2021-01-20 15:51:20', 'MAGNETI MERELLI', 100),
(56, 'https://www.atr.de/', NULL, '2021-01-22 10:20:11', '2021-01-22 10:20:11', 'ATR', 100),
(57, 'https://www.pierburg-sa.es/en/', NULL, '2021-01-27 07:39:39', '2021-01-27 07:39:39', 'Pierburg', 100),
(58, 'https://www.championparts.ca/fr/', NULL, '2022-05-11 09:20:06', '2022-05-11 09:20:06', 'Champion', 100),
(59, 'https://www.hueco.com/dynasitece5a.html', NULL, '2022-05-11 09:23:19', '2022-05-11 09:23:19', 'Hüco', 100),
(60, 'https://www.schaeffler.fr/fr/index.jsp', NULL, '2022-05-11 09:25:17', '2022-05-11 09:25:17', 'INA', 100),
(61, 'https://www.ntn-snr.com/fr', '2022-05-11 09:31:33', '2022-05-11 09:26:35', '2022-05-11 09:31:33', 'SNR', 100),
(62, 'https://aftermarket.schaeffler.fr/fr/luk-repset', NULL, '2022-05-11 09:31:15', '2022-05-11 09:31:15', 'LUK', 3),
(63, 'https://www.febi.com/fr/', NULL, '2022-05-11 12:34:48', '2022-05-11 12:34:48', 'Febi', 100),
(64, 'https://www.skf.com/fr', NULL, '2022-05-11 12:46:49', '2022-05-11 12:46:49', 'SKF', 100),
(65, 'https://www.mecafilter.com/catalogue/', NULL, '2022-05-11 13:34:10', '2022-05-11 13:34:10', 'Mecafilter', 100),
(66, 'https://www.jurid.com/', NULL, '2022-05-25 12:40:09', '2022-05-25 12:40:09', 'Jurid', 100),
(67, 'https://pennol.com/', NULL, '2022-05-25 13:29:44', '2022-05-25 13:29:44', 'Pennol', 100),
(68, 'http://www.pleksan.com/', NULL, '2022-05-31 12:32:10', '2022-05-31 12:32:10', 'Pleksan', 100),
(69, 'https://www.alkar.es/fr/', NULL, '2022-05-31 14:44:06', '2022-05-31 14:44:06', 'Alkar', 100),
(70, 'https://www.tyceurope.com/', NULL, '2022-05-31 14:46:22', '2022-05-31 14:46:22', 'TYC', 100),
(71, 'https://www.viewmax.com.tw/en/index.php', NULL, '2022-05-31 14:48:56', '2022-05-31 14:48:56', 'View-max', 100),
(72, 'http://www.phira.es/fr/catalogo', NULL, '2022-05-31 14:52:02', '2022-05-31 14:52:02', 'Phira', 100),
(73, 'http://www.tyg.com.tw/en/', NULL, '2022-05-31 15:04:56', '2022-05-31 15:06:47', 'Tong yang', 100),
(74, 'https://www.eurobump.com/', NULL, '2022-05-31 15:13:27', '2022-05-31 15:13:27', 'Eurobump', 100),
(75, 'https://api-belgique.be/', NULL, '2022-06-01 08:26:05', '2022-06-01 08:26:05', 'API', 100),
(76, 'https://www.de-ga.com.tr/', NULL, '2022-06-01 08:30:33', '2022-06-01 08:30:33', 'De-Ga', 100),
(77, 'https://isam.it/', NULL, '2022-06-01 08:35:43', '2022-06-01 08:35:43', 'ISAM', 100),
(78, 'https://orangroup.es/automocion/', NULL, '2022-06-01 13:01:39', '2022-06-01 13:01:39', 'ORAN', 100),
(79, 'https://www.alguerra.pt/', NULL, '2022-06-01 13:03:39', '2022-06-01 13:03:39', 'Alguerra', 100),
(80, 'https://www.hitachi.com/', NULL, '2022-06-08 12:23:50', '2022-06-08 12:23:50', 'Hitachi', 100),
(81, 'http://www.kayaautoparts.co.ke', NULL, '2022-09-05 12:31:22', '2022-09-05 12:31:22', 'KAYA', 100),
(82, 'https://www.drivparts.com/', NULL, '2022-09-07 09:10:43', '2022-09-07 09:11:09', 'Federal Mogul', 100),
(83, 'https://www.renault.ma/', NULL, '2022-09-07 09:14:23', '2022-09-07 09:14:23', 'Renault', 100),
(84, 'https://www.peugeot.ma/', NULL, '2022-09-07 09:14:49', '2022-09-07 09:14:49', 'Peugeot', 100),
(85, 'https://www.continental-industry.com/fr', NULL, '2022-09-07 09:25:39', '2022-09-07 09:25:39', 'Contitech', 100),
(86, 'http://www.cautex.com/fr/', NULL, '2022-09-07 09:32:31', '2022-09-07 09:32:31', 'CAUTEX', 100),
(87, 'https://www.schaeffler.fr/fr/', NULL, '2022-09-07 10:31:04', '2022-09-07 10:31:04', 'SCHAEFFLER', 100);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@autoplus.ma', '$2y$10$RWqfDnTcsZUTofYTTXHjdOuG797zhV7ygNcwNrz7a3Y/a7xLHAJdi', '2020-12-06 14:07:54'),
('talat.mohamed7@gmail.com', '$2y$10$2hPjhj5tg0YbJ1oQFyPyLORjQD.2KW75acqEaeexMu8BAP6b9k2T2', '2023-02-22 11:04:26'),
('mohammed.talat@maghrebaccessoires.com', '$2y$10$DBqP3vgyNShQkKfB5L3Iwe4zSGcEdnjY.p2NvspF1P52NjehBDY6C', '2023-02-22 11:05:47'),
('elhilali067@gmail.com', '$2y$10$d4nF6ZL9yUwW/IL2ivZT2ubcV8VLuTZpTgpJYUgYfiSA50mqUIlwu', '2023-05-08 09:46:24'),
('ayoubaitbella011@gmail.com', '$2y$10$kl/mWH9TqGFVn2YzY2cItOWVmBndmH3.x67b9s/..G4uBkFF3MOf.', '2023-10-31 11:12:52'),
('nouhaila.moutimoune@gmail.com', '$2y$10$lSDFbfUleKNpfDgyHlWj2e4we2gFy6sw01byZ1nN9.zp2AAQHxmgy', '2023-12-08 14:40:48'),
('kamallabay@outlook.fr', '$2y$10$JCkPtWK7gHwG1V3ThykWte2yAlCcz.CwNGcc1nHtAJ2tsCUXXKsMC', '2024-04-14 21:45:02'),
('a.lizat@yahoo.fr', '$2y$10$NvlA9D5rADFLGdZg6HJX3OURkcT0khgR.K4UMAKKfNebl4hDNrX0i', '2024-05-16 15:27:22');

-- --------------------------------------------------------

--
-- Structure de la table `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL DEFAULT '',
  `classement` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `promotions`
--

INSERT INTO `promotions` (`id`, `title`, `content`, `classement`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'promotion october', 'contentcontentcontentcontentcontent', '2', '2020-10-26 01:42:29', '2020-10-26 01:41:14', '2020-10-26 01:42:29'),
(2, 'promotion october', 'contentcontentcontentcontentcontent', '2', '2020-10-26 02:13:04', '2020-10-26 01:43:01', '2020-10-26 02:13:04'),
(3, 'Promotion Mois d\'october', '<p>consectetur adipiscing elit, sed do eiusmod <strong>tempor</strong> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1', '2020-11-20 18:11:54', '2020-10-26 11:00:26', '2020-11-20 18:11:54'),
(4, 'Promotion NRF', '<p>Promotion NRF</p>', '3', NULL, '2020-10-26 11:01:00', '2022-09-21 08:19:33'),
(5, 'Promotion VALEO', '<p>Promotion VALEO</p>', '2', NULL, '2020-10-26 11:03:42', '2022-09-21 08:19:05'),
(6, 'Promotions NTN SNR', '<p>Promotion NTN SNR.</p>', '1', NULL, '2020-11-20 18:13:22', '2022-09-21 08:18:31'),
(7, 'Promotion_TRW', '<p>Challenge commercial sur les plaquettes de frein TRW.</p>', '4', NULL, '2021-05-04 11:56:39', '2022-09-21 08:16:17'),
(8, 'Promotion LUK', '<p>Promotion LUK.</p>', '5', NULL, '2022-09-21 08:20:18', '2022-09-21 08:20:18'),
(9, 'Promotion MDD', '<p>Promotion MDD.</p>', '6', NULL, '2022-09-21 08:20:51', '2022-09-21 08:20:51');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `mobilite` varchar(50) NOT NULL,
  `metier` varchar(50) NOT NULL,
  `contrat` varchar(50) NOT NULL,
  `cv` varchar(200) DEFAULT NULL,
  `motivation` varchar(200) DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `prenom`, `tel`, `adresse`, `mobilite`, `metier`, `contrat`, `cv`, `motivation`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'TALAT', 'elhilali067@gmail.com', 'autoplus', 'MOHAMMED', '4563426', 'Bd AHl Loghlam', 'Nationale', 'LOGISTIQUE', 'Intérim', '', '', 1, '2020-10-26 01:35:14', '$2y$10$YimMEGKUke2yAp4S8Riv0OEIs.kLvkoX12TClImo60Rvc0qIM6WRO', 'NBIC6Jr3l7s2CTXwN2mYRlKlY7KlzkiaWfCX160s4t2LJw0dbqB9ML5t2L7O', '2019-01-07 18:11:56', '2023-08-14 08:46:09', NULL),
(20, 'Talat', 'talat.mohamed7@gmail.com', 'talatwac', 'Mohammed', '0660214690', 'sidi Maarouf 8 Rue 15 No 65 Casa', 'Nationale', 'RH', 'CDI', '161167086601.jpg', '161167086701.jpg', 1, NULL, '$2y$10$aqazffbftiiO/hyQJDmBDeJ3xS4n7VOECnQozyWQX9DGPKO6SWiLa', NULL, '2021-01-26 13:21:08', '2021-01-26 13:21:08', NULL),
(21, 'Talat', 'mohammed.talat@maghrebaccessoires.com', 'talat12347', 'Mohamed', '0660214690', 'sidi Maarouf 8 Rue 15 No 65 Casa', 'Régionale', 'RH', 'CDI', '161167107801.jpg', '161167107801.jpg', 1, NULL, '$2y$10$odxjlMHEF3cHzdS9Flb1FufN82d9ea0M15eHjQcBPe4NNjdp8nCPm', 'PBL8uGbSeOEA7rLO0kBM9ytYPk2D6JOhGbDb2TsZRXQPTkoVy3Oss41AJOXk', '2021-01-26 13:24:38', '2021-10-08 08:20:15', NULL),
(22, 'NAIT BIGOUALEN', 'azzeddine.nait1@gmail.com', 'kakacasa', 'AZZEDDINE', '0629999216', 'hay hassani sidi el khadir rue 5 numéro 76', 'Régionale', 'LOGISTIQUE', 'CDI', '166375186620201211090349.doc', '166375186620201211090349.doc', 0, NULL, '$2y$10$ajPJEjpPlbtwef32FhOTUe8UdQ/MxWRACdYG7kVdYw07bPvklHuxC', NULL, '2022-09-21 08:17:46', '2022-09-21 08:17:46', NULL),
(23, 'BEN TAYEB', 'ZIYADZIYACH2014@GMAIL.COM', 'ZIYADZIYACH2014@GMAIL.COM', 'SAID', '0679788232', 'MEKNES', 'Nationale', 'COMMERCIAL', 'CDI', NULL, NULL, 0, NULL, '$2y$10$LjSXpgLCLhv9F0FrbOhG5uOTvpLMSpRDAUMAE4HgBuZhb2b0WQ0CK', NULL, '2022-09-21 13:07:07', '2022-09-21 13:07:07', NULL),
(24, 'JADOUR', 'amaljadour71@gmail.com', 'amaljadour', 'AMAL', '+212700342238', 'PANORAMA IMM N NR 12 AHL LOGHLAM BERNOUSSI CASABLANCA', 'Locale', 'COMMERCIAL', 'CDI', '1663945349cv commercial.pdf', NULL, 0, NULL, '$2y$10$ygOJ52wjTwtEUPp7kujr4OeV9DNO0CsjWCh39FW3m8XOfuOgdXYGa', NULL, '2022-09-23 14:02:29', '2022-09-23 14:02:29', NULL),
(25, 'abdelbassat', 'abdelbassat.ouassib@gmail.com', 'abdelbassat', 'Ouassib', '0644936694', 'Salam 1 Gr C Rue 24 Nr 24 ahl loghlam', 'Régionale', 'LOGISTIQUE', 'CDI', '1664353553abdelbassat ouassib.pdf', '1664353553abdelbassat-ouassib.doc', 0, NULL, '$2y$10$.2cP.fGnSeq45BYSB.S7DOU5vikD0OXPx4AQ8CuP3aF6D8dBnkU9S', NULL, '2022-09-28 07:25:53', '2022-09-28 07:25:53', NULL),
(26, 'Mohamed Rakid', 'Mohamedrakid98@gmail.com', 'Mohamedrakid98@gmail.com', 'mohamed', '0660374448', 'Salam 1 GR EXT RUE 40 NR 23', 'Nationale', 'LOGISTIQUE', 'CDI', '1664789004cv22mohamedrakid.pdf', NULL, 0, NULL, '$2y$10$tXHxmIjT3k9PdzgZLp0OJus1UKsryGLIj1abN.rfDI3jEGYVSBhby', NULL, '2022-10-03 08:23:24', '2022-10-03 08:23:24', NULL),
(27, 'NOURDINE', 'chronoelansari@gmail.com', 'CHRONOELANSARI', 'EL ANSARI', '0661377914', '22 ROUTE BARAGE HASSAN 2 MIDELT', 'Régionale', 'ACHAT', 'CDI', NULL, NULL, 0, NULL, '$2y$10$9ecnyZ5IwpwMfmRcgTjMHe6mXgxQpNfEIOabEuSbaYFr/gOuooFbq', NULL, '2022-10-06 13:42:37', '2022-10-06 13:42:37', NULL),
(29, 'ELJIHAD', 'sara.eljihad@maghrebaccessoires.com', 'SELJIHAD', 'SARA', '0522323222', 'BD AHL LOGHLAM', 'Nationale', 'RH', 'CDI', NULL, NULL, 0, NULL, '$2y$10$71eumYgtuwPxWvs2QLmFyO4WGb3Dw8ekps/dcqMtetQwIteKhgKgu', NULL, '2022-12-21 13:07:08', '2022-12-21 13:07:08', NULL),
(30, 'elaloui', 'alaouisalahdin9@gmail.com', 'elalaouisalahdin', 'salahdin', '0691143108', 'fes', 'Locale', 'ACHAT', 'CDI', NULL, NULL, 0, NULL, '$2y$10$LyF.xuPLGBt0rWo25knZ9eSeioTi2vu9jTq44EjEQb3NKnsZS5OGK', NULL, '2022-12-23 11:51:36', '2022-12-23 11:51:36', NULL),
(31, 'kandri', 'kandri.r79@gmail.com', 'kandri.r79@gmail.com', 'rachid', '0600212382', 'piece auto el akhawayn hay soukaina fes', 'Internationale', 'COMMERCIAL', 'Stage', NULL, NULL, 0, NULL, '$2y$10$GFV0YVJ1M6dw.zBgRr7rEu8DG/SA.R.CXF8sJD1pPUskkRS.APsXK', NULL, '2022-12-24 21:15:44', '2022-12-24 21:15:44', NULL),
(32, 'Elaly', 'simoelaly19@gmail.com', 'simoelaly19@gmail.com', 'Hammou', '0611637296', 'N92 rue 18 lot G hay salam 2 ahl loghlam Casablanca', 'Nationale', 'TRAVAUX ET MAINTENANCE', 'Intérim', '1672235753Cv 2022 bc .pdf', '1672235753motiv .pdf', 0, NULL, '$2y$10$bQ/1ijLPjNRpasXIOfZEc.9HtVf864DV4U4sVio5NZrNhIGJeuy66', NULL, '2022-12-28 12:55:53', '2022-12-28 12:55:53', NULL),
(33, 'Dakil', 'saad.dakil@gmail.com', 'saaddakil', 'Saad', '0697709100', 'saada 1 bloc H n:23 EL jadida', 'Nationale', 'COMMERCIAL', 'CDI', '1672498185CV MARKETING et COMMUNICATION.pdf', NULL, 0, NULL, '$2y$10$Mi9Y1.uMZuWaztNlUcvSkenqajiaUlIJh7UwPUkEbQ./SwaIzT1fG', NULL, '2022-12-31 13:49:45', '2022-12-31 13:49:45', NULL),
(34, 'saif-eddin', 'otmane.saif.eddin@gmail.com', 'Otmane.saif', 'Otmane', '0659046692', 'Loris ouad elmakhazine safi', 'Nationale', 'COMMERCIAL', 'CDI', NULL, NULL, 0, NULL, '$2y$10$N8OZHhlUhSiQjpO.Av0fPO6AnFkEKFsMn96.eRZXIJcYJ.R6ANKU6', NULL, '2023-01-13 09:43:39', '2023-01-13 09:43:39', NULL),
(35, 'lizzati', 'a.lizat@yahoo.fr', 'a.lizat@yahoo.fr', 'abdelaziz', '0607321195', 'bd des f.a.r n 417-419 nador', 'Régionale', 'COMMERCIAL', 'Intérim', NULL, NULL, 0, NULL, '$2y$10$nQbXHMoAxnWBVMYVkZjuWObX.Vsn6cNWUl.jLpSmA1tqnp8J9xDIS', NULL, '2023-01-25 09:59:22', '2023-01-25 09:59:22', NULL),
(36, 'berra', 'emyberra@gmail.com', 'emyberra@gmail.com', 'amal', '0651991378', 'al wiam casablanca', 'Régionale', 'ACHAT', 'CDI', '1675263086N.CV Amal Berra 12.2022.pdf', NULL, 0, NULL, '$2y$10$FP6hmmkrfU0Qii2pJLIDBuUvriomtV.oMBX5bEzlbZpuRH/CzPbBO', NULL, '2023-02-01 13:51:26', '2023-02-01 13:51:26', NULL),
(37, 'BRIGUAM', 'HBRIGM@GMAIL.COM', 'Hamza4auto', 'HAMZA', '0602304035', 'Ain sbaa Casablanca', 'Locale', 'COMMERCIAL', 'Stage', '1675875095Cv23_compressed.pdf', '1675875095HAMZA BRIGUAM  AUTOPLUS.docx', 0, NULL, '$2y$10$n63sjcCPsj0qANYvcXG6COckx.cfnz4CXO81haMsGcyZ.G9lK3T/u', NULL, '2023-02-08 15:51:35', '2023-02-08 15:51:35', NULL),
(38, 'tagui', 'tagui.marwan@gmail.com', 'marouan@maghrebaccessoires.com', 'marouan', '0644069241', 'HAY MASSIRA 3 RUE 69 N14', 'Régionale', 'COMMERCIAL', 'Stage', NULL, NULL, 0, NULL, '$2y$10$RAZ.zyA3d.WIhdH0SqnBW.fNLzTWe03kKv25Gfuy4T8SBwwXE2ifS', NULL, '2023-02-10 19:16:45', '2023-02-10 19:16:45', NULL),
(39, 'lambarki', 'lambarkii.loubna@gmail.com', 'lambarkii.loubna@gmail.com', 'loubna', '0772839696', 'Hay al Azhar imm 2 tr 10/2 nr 52 Bernoussi, Casablanca', 'Locale', 'ACHAT', 'CDI', '1676322460Loubna LAMBARKII.pdf', '1676322460Lettre de motivation.pdf', 0, NULL, '$2y$10$WHiYo19xObBx3mzEdnznhe7m9wCNgdi4kDs6kDDVuJV/XXrPplyoK', NULL, '2023-02-13 20:07:40', '2023-02-13 20:07:40', NULL),
(40, 'Luca', 'lucafisun@gmail.com', 'lucafisun', 'Fisun', '0602589464', 'Fes', 'Locale', 'ACHAT', 'CDI', NULL, NULL, 0, NULL, '$2y$10$kA351JmasxcoEivBtmpBtekr9EHCpwfn2iEFolmqRAJjhoP2xozOG', NULL, '2023-02-18 16:05:43', '2023-02-18 16:05:43', NULL),
(41, 'HOSSNY', 'hh.elhassnaoui@gmail.com', 'Lordpdr2006', 'HAMID', '0694455222', 'casablanca', 'Locale', 'TRAVAUX ET MAINTENANCE', 'CDI', NULL, NULL, 0, NULL, '$2y$10$tdOX1cuqNRbnEZOAEiNm2u7IhUq/yKd1Vi4s/ZCwTB0M514eBeQd.', NULL, '2023-02-28 15:15:28', '2023-02-28 15:15:28', NULL),
(42, 'soufian', 'suufihanhadd123@gmail.com', 'soufianhaddadI', 'haddadi', '0604627928', 'rue agadir hay rahma, secteur c 753', 'Nationale', 'ACHAT', 'Intérim', '1678711332SCPU2022V00848477.pdf', '1678711332SCPU2022V01328356.pdf', 0, NULL, '$2y$10$0Xkja35ZO3KpilroO8ETTufmBbLmyjyR64rO.RkSJa5QQ/uytU3B.', NULL, '2023-03-13 11:42:12', '2023-03-13 11:42:12', NULL),
(43, 'AYOUB', 'ayoub.azendour@gmail.com', 'a.azendour', 'AZENDOUR', '0670472592', 'NR 3857 HAY MOHAMMADI AGADIR', 'Nationale', 'ACHAT', 'CDI', '1680702761C.V.pdf', NULL, 0, NULL, '$2y$10$b.1ySCYEWkjZs1qU1.yvO.Rueo.eOSwdikLXCme4/yBT4mVsUVN3.', NULL, '2023-04-05 13:52:41', '2023-04-05 13:52:41', NULL),
(44, 'LACHHAB', 'safwan.lechhab@gmail.com', 'safwan.lechhab@gmail.com', 'SAFWANE', '0681406464', 'Anassi 6A Entre 2 N25', 'Locale', 'COMMERCIAL', 'CDD', '/tmp/php5JCOON', NULL, 0, NULL, '$2y$10$kSe9870rlQHcmduIqqpuo.DoG7F4bUnx3t9Ejn1bnd3X/17l52EaO', NULL, '2023-04-20 17:27:26', '2023-05-11 13:35:29', NULL),
(45, 'yassine', 'yassineessamit1@gmail.com', 'Jassine ess', 'essamit', '0620342873', 'Sidi othman bloc 19 numero 22', 'Locale', 'ACHAT', 'CDI', NULL, NULL, 0, NULL, '$2y$10$CslCP4tCTF0dqcUfyEWrPemmiUkkq6RY2wOtGRyOw2c3ltnKwebIW', NULL, '2023-04-23 19:23:29', '2023-04-23 19:23:29', NULL),
(46, 'ESSEBBAE', 'essebbaeoussama@gmail.com', 'essebbaeoussama@gmail.com', 'OUSSAMA', '0767575397', 'Hay El Azhar Rue Maghreb Arabi, 20620 Casablanca', 'Locale', 'TRAVAUX ET MAINTENANCE', 'CDI', '/tmp/phpcg8CAG', NULL, 0, NULL, '$2y$10$tfqraDVFdNz.ASZS1NLr/OMOZmVl.fkoBG6h0E0R7g/p1OVRAiubW', NULL, '2023-05-01 13:08:16', '2023-05-01 13:09:42', NULL),
(47, 'eljamaai', 'anaseljamaai516@gmail.com', 'anaseljamaai516@gmail.com', 'Anas', '0679177359', 'BD MY RACHID', 'Locale', 'ACHAT', 'CDI', NULL, NULL, 0, NULL, '$2y$10$gKAFeLmJIHQCrhXt6lqyEOlPK67dkJ0oK2DhWbLNUJb1k1MpPhUL6', NULL, '2023-05-02 15:04:02', '2023-05-02 15:04:02', NULL),
(48, 'ELHOUDALI', 'elhoudali84@gmail.com', 'elhoudali84@gmail.com', 'MEHDI', '0708655416', 'N°315 Lotissement EL Haddioui Sidi Maarouf', 'Locale', 'ACHAT', 'CDI', NULL, NULL, 0, NULL, '$2y$10$Hsk1R.NxdQJHiBuOQhdOPeRuUzV3SBCMr6sQdllSgaHE73Nknly.y', NULL, '2023-05-12 15:51:35', '2023-05-12 15:51:35', NULL),
(49, 'Lrhomari', 'marwane.lrhomari@gmail.com', 'Marwane2002', 'Marwane', '0689904302', 'Fes ,route de sefrou av moulay rachid', 'Locale', 'ACHAT', 'CDI', NULL, NULL, 0, NULL, '$2y$10$9yg3.Jt1cJKaESQyH/HZ6OAFFgDw26qD05vtLd0IkZF7IKLVyB1C2', NULL, '2023-05-13 14:34:12', '2023-05-13 14:34:12', NULL),
(50, 'Elallali', 'elallali.m1@gmail.com', 'Bricoleur', 'Mustapha', '0671764205', 'Jnane Californie , Emmeuble Youssra 11 , Etage 4 , Appartement 20 , Ain chok , Casablanca ; 20460', 'Locale', 'ACHAT', 'CDI', NULL, NULL, 0, NULL, '$2y$10$3f2CAdjPk5m23lXWCNVSf./8TzrG/88nQomFm79.IdsPYFdlZEGIG', NULL, '2023-05-14 16:40:32', '2023-05-14 16:40:32', NULL),
(51, 'AIT BAHA', 'aitbahayassine03@gmail.com', 'aitbahayassine03@gmail.com', 'YASSINE', '0626155567', 'Hay ben tachfin nr849 marrakech', 'Locale', 'ACHAT', 'CDI', NULL, NULL, 0, NULL, '$2y$10$cDUX2M36xO7hyITqU.Zkw.F7dhAockI8o2PLIRP/SgwZZtEzGeIL2', NULL, '2023-05-16 15:57:50', '2023-05-16 16:02:31', NULL),
(52, 'Mouhib', 'imtservicescasa@gmail.com', 'imtservicescasa@gmail.com', 'Ayoub', '0667606341', 'KM19 ROUTE D\'AZEMMOUR DOUAR BORODA ARRABA CHARKIA OULED AZZOUZ', 'Nationale', 'TRAVAUX ET MAINTENANCE', 'CDI', NULL, NULL, 0, NULL, '$2y$10$k5ED6911iEbJfqUqQMFnW.oLrSN0j7YGqIP3IBcGz9YPs47OECgz2', NULL, '2023-05-24 12:32:21', '2023-05-24 12:32:21', NULL),
(53, 'Merhraoui', 'mohammed.merhraoui@gmail.com', 'Maghraoui', 'Mohammed', '0665973012', '32 lot green parc et2 champs de course V.N Fes', 'Nationale', 'ACHAT', 'Stage', NULL, NULL, 0, NULL, '$2y$10$7o3u8ulUXlNFC6mMs9GcdOBfvZQS/5w6yyXNP7bFObDEOtuKVO3.m', NULL, '2023-05-30 14:59:29', '2023-05-30 14:59:29', NULL),
(54, 'mohamed', 'lamjadarmahmoud@gmail.com', 'lamjadarmahmoud@gmail.com', 'lamjadar', '0638570371', 'rue ahl golam panorama al azhar bernoussi casablanca', 'Nationale', 'INFORMATIQUE', 'Intérim', '1685881900mhamed nouveau.pdf', NULL, 0, NULL, '$2y$10$xpioJJozMHzRFddBut4M.e6JK5W9zVuOSVw68bfohFJuPlkqNNXQu', NULL, '2023-06-04 11:31:40', '2023-06-04 11:31:40', NULL),
(55, 'Abdelkrim', 'karimsitli@gmail.com', 'abdelkrim sitli', 'Sitli', '0643229095', '185 lot regraga, berrechid', 'Nationale', 'TRAVAUX ET MAINTENANCE', 'CDI', NULL, NULL, 0, NULL, '$2y$10$25jhZF8eOFuxdtvJCX7MEeQ8hPd0sw5t6wj/JqLrubPa88bOAFvVy', NULL, '2023-06-17 13:38:40', '2023-06-17 13:38:40', NULL),
(56, 'Said', 'said86azhar@gmail.com', 'said86azhar@gmail.com', 'Mortadi', '0628922559', '103 Hay al azhar imm 1n', 'Nationale', 'LOGISTIQUE', 'CDI', '1687188622said mortadi 111.pdf', NULL, 0, NULL, '$2y$10$oPgNF50fwqAAVnvjPecw/OXXl9OxUmjXTaX3ViMZ7bytXKIsbj5tW', NULL, '2023-06-19 14:30:22', '2023-06-19 14:30:22', NULL),
(57, 'SEBTANE', 'rachid.sebtane@gmail.com', 'rachid.sebtane@gmail.com', 'RACHID', '0688926075', '333.LOT ALBADR SIDI HAJJAJ OUED HASSAR TITE MELLIL', 'Régionale', 'LOGISTIQUE', 'CDI', '1688677550CV Sebtane Rachid.docx', '1688677550lettre-de-motivation.docx', 0, NULL, '$2y$10$HydmIhZTgm7lsRvXr6egJeMTr.tQLqRdYVBX9L0nVfRj5h8012u/q', NULL, '2023-07-06 20:05:50', '2023-07-06 20:05:50', NULL),
(58, 'TOUIR', 'younessurf00@gmail.com', 'younessurf', 'YOUNESS', '0661916999', 'Lot villa N 1758 alliance darna kasbah mehdia Kenitra', 'Locale', 'ACHAT', 'CDI', NULL, NULL, 0, NULL, '$2y$10$YAcwBSB1n085p.EW4c4M1ecw6dJdbbhc3zFtGvIHJsJLl5y8oeSeO', NULL, '2023-07-08 23:38:44', '2023-07-08 23:47:32', NULL),
(59, 'NAKTANE', 'mehdi_naktane@hotmail.com', 'mehdi_naktane@hotmail.com', 'MEHDI', '0620187915', '15 Rue de dixmude, ETG 3 Appt 21 Casablanca', 'Nationale', 'ACHAT', 'CDI', '/tmp/phpuftmE9', NULL, 0, NULL, '$2y$10$q5V9HLkvgUfUVZU3javWfOkKLPk3l42ItGdIsjq7fPQOldlCBpK5O', NULL, '2023-07-19 10:52:53', '2023-07-19 10:53:33', NULL),
(60, 'ESSAADANI', 'Failkhair12@gmail.com', 'youssefessa', 'Abdelati', '0661601028', '43 bolc 14 qu riyad safi', 'Nationale', 'COMMERCIAL', 'CDI', NULL, NULL, 0, NULL, '$2y$10$p2jYzsZnG3Bp2sLLzXckJuKchQN8iJIvYFdfqhypeE/pbeQ55PYy6', NULL, '2023-07-20 14:21:10', '2023-07-20 14:21:10', NULL),
(61, 'Touini', 'tonyzakaria144@gmail.com', 'Abuhiba10', 'Zakariae', '0697695264', 'Rce al yassmine b rue 01 lot dayaa tghat fes', 'Nationale', 'COMMERCIAL', 'CDD', '1692385100zakaria1.pdf', NULL, 0, NULL, '$2y$10$yK2hhcERSQe8MXJQCJf2kuY31tCXmIcTFMTDIJEJgrlUkyYF7DsfG', NULL, '2023-08-18 17:58:21', '2023-08-18 17:58:21', NULL),
(62, 'Elhadi', 'hamza.elhadi.tcvvpr@gmail.com', 'hamza.elhadi.tcvvpr@gmail.com', 'Hamza', '+212620989429', 'Lot el amane n58 errachidia', 'Nationale', 'COMMERCIAL', 'CDI', '1693469714CV HAMZA ELHADI 23.pdf', '1693469714lettre de Motiva Hamza elhadi.pdf', 0, NULL, '$2y$10$E5TePvA2iqTOmxKscRTkRe3DW3eoLS16.Q4mFaONPdH4UhiKPm5cW', NULL, '2023-08-31 07:15:14', '2023-08-31 07:15:14', NULL),
(63, 'KHOBOUZ', 'khobouz.mohamed@gmail.com', 'khobouz.mohamed', 'MOHAMED', '0676959620', 'Casablanca Maroc', 'Locale', 'INFORMATIQUE', 'CDI', '1694603276CV KHOBOUZ MOHAMED.pdf', NULL, 0, NULL, '$2y$10$0yRCchSYt/P12Qoec1J/qefY222qmu2Jdqe/t1M2t70KeyQp9keGm', NULL, '2023-09-13 10:07:57', '2023-09-13 10:07:57', NULL),
(64, 'Bahi', 'BAHIKAMAL08@GMAIL.COM', 'BAHIKAMAL08@GMAIL.COM', 'Kamal', '0652554990', '95 baidi 2', 'Régionale', 'COMMERCIAL', 'CDI', '1695684890Cv BAHI KAMAL .pdf', NULL, 0, NULL, '$2y$10$jZ5HzwPXNXr45HO9AYMoReTB99AI039IbViXXNvF7saKUHir5Dx9u', NULL, '2023-09-25 22:34:50', '2023-09-25 22:34:50', NULL),
(65, 'EL MOUDEN', 'Ahmed.mouden1979@gmail.com', 'AHMED123', 'AHMED', '+212 661 605 794', 'Casablanca, Maroc', 'Locale', 'COMMERCIAL', 'CDI', '1698326553CV AHMED EL MOUDEN.pdf', NULL, 0, NULL, '$2y$10$TZbQ0CyyRVD9udgGSPLAAONy8QmeoUNzxVstbgqoHOhwDmJqu37.a', NULL, '2023-10-26 12:22:33', '2023-10-26 12:22:33', NULL),
(66, 'ANTAR', 'capmalero@gmail.com', 'capmalero', 'YOUNES', '0666941953', 'berrchide', 'Nationale', 'LOGISTIQUE', 'CDI', '1698398435CV_2023-10-01-110357.pdf', NULL, 0, NULL, '$2y$10$6.saQem4QCO3F5yW2PzHW.kmUEA7oMm/iETeTxQMkrmKO0PqDO7Ay', NULL, '2023-10-27 08:20:35', '2023-10-27 08:20:35', NULL),
(67, 'AIT BELLA', 'ayoubaitbella011@gmail.com', 'ayoubaitbella011@gmail.com', 'AYOUB', '0652620714', 'HAY AL MAGHREB ARABI N 393 SEC 1 TEMARA', 'Régionale', 'INFORMATIQUE', 'Stage', '/tmp/php8AqOKp', '/tmp/phpFlUHz6', 0, NULL, '$2y$10$ViMOslr2y1vOEOPzBkX6uuTjCx9S8Oei8K7xohFgkETzDS8W3nBxa', NULL, '2023-10-31 11:10:54', '2024-02-09 15:21:56', NULL),
(68, 'houcine', 'houcine@yopmail.com', 'houcine95', 'mido', '000000000', 'BD MOHAMED', 'Locale', 'ACHAT', 'CDI', NULL, NULL, 0, NULL, '$2y$10$LtlNXOHeuJ5WzLxC15fJ6erK8ZYt2tVWt0pPCgLN3mmD.hi5gtSoi', NULL, '2023-11-08 12:57:42', '2023-11-08 12:57:42', NULL),
(69, 'BOULMIRATE', 'boulmiratemohamed@gmail.com', 'boulmiratemohamed@gmail.com', 'MOHAMED', '0617180430', 'JAMILA 2 RUE 3 N 20', 'Locale', 'ACHAT', 'CDI', '1700689902Mohamed_Boulmirate_CV.pdf', NULL, 0, NULL, '$2y$10$.cdIpF4Q.DaiAdWr.sGU9Ou6.lmsCG8JaQG8no2rC/e4xkfMBEqM.', NULL, '2023-11-22 20:51:42', '2023-11-22 20:51:42', NULL),
(70, 'RAMMOUZ', 'rammouz.ghizlane@gmail.com', 'RAMMOUZ Ghizlane', 'Ghizlane', '+212669036713', 'Aïn Sebaâ, Casablanca, Maroc', 'Locale', 'ACHAT', 'CDI', '1700919638CV.pdf', '1700919638LM.pdf', 0, NULL, '$2y$10$i.OOlC3z0pC1L89iikcvA.20aYT.Uzh7ehRgE2n/37qkwEUIEADy.', NULL, '2023-11-25 12:40:39', '2023-11-25 12:40:39', NULL),
(71, 'KAMEL', 'Khalilkamel1219@gmail.com', 'khalil kamel', 'KHALIL', '0631386531', 'Sidi bernoussi, hay el azhar,  tranche1, immeuble 3, casablanca', 'Locale', 'COMMERCIAL', 'Stage', '1701199886cv (5).pdf', NULL, 0, NULL, '$2y$10$HjsU4qDxLr/KKyhgLOA2D.4ygg/Jm1zx1M1pSb4xLPOF02xEDsz2O', NULL, '2023-11-28 18:31:26', '2023-11-28 18:34:33', NULL),
(72, 'SAFINE', 'safineabdelhak@gmail.com', 'Abdelhk.SAFINE', 'ABDELHAK', '0693226032', 'Lot Riad Sidi Moumen Gh 7 Imm N°14 S/M Casa', 'Locale', 'RH', 'Stage', NULL, NULL, 0, NULL, '$2y$10$oif0XxculTlI9IgHvBdL2Oj75FmQtQFvPFgfNc9/FTO0FtWm7hDIO', NULL, '2023-11-29 19:56:19', '2023-11-29 19:56:19', NULL),
(73, 'bouzergue', 'hajar.bouzergue@edu.encgcasa.ma', 'hajar.bouzergue@edu.encgcasa.ma', 'hajar', '0762443834', 'lot fadila n° 11 azharia maghreb el arabie', 'Locale', 'ACHAT', 'CDI', NULL, NULL, 0, NULL, '$2y$10$3PhP/BT9RodgTOwLQd9kNuINUui1T4ZbBsA/qgjC7GGjeCaXc/sxC', NULL, '2023-12-07 11:31:17', '2023-12-07 11:31:17', NULL),
(74, 'Kaddouri', 'abdel.kadd74@gmail.com', 'abdel.kadd74@gmail.com', 'Abdelhamid', '0609885339', '4 rue fkih mabkhoute lot safi, Quartier el amal', 'Nationale', 'COMMERCIAL', 'CDI', '1701954923Abdel Cv.pdf', NULL, 0, NULL, '$2y$10$E7snp7UbVfIEXIdpX2FWge.vIkaQALwfKCBpKu6Rfu4cI1Y7XMN7i', NULL, '2023-12-07 12:15:23', '2023-12-07 12:15:23', NULL),
(75, 'EL MSAADI', 'elmsaadiayman@gmail.com', 'elmayman', 'Ayman', '0777997707', 'Wifak 4, rue 122, n⁰ 16, Oulfa, Casablanca', 'Locale', 'LOGISTIQUE', 'CDI', '1701956324Exploitant transport et logistique actualisé..cv.pdf', NULL, 0, NULL, '$2y$10$wCqZNywQJ.da71GiduH2A.gFc0si.R9/lelUJrGDFo3/nHGvWLeRm', NULL, '2023-12-07 12:38:44', '2023-12-07 12:38:44', NULL),
(76, 'ENNASSIRI', 'mohamed.ennassiri7@gmail.com', 'Mohamed Ennassiri', 'MOHAMED', '0672380613', 'Complexe Al Manzil Tanger', 'Nationale', 'LOGISTIQUE', 'CDI', '/tmp/phpywcgPJ', NULL, 0, NULL, '$2y$10$JooV3Koph.RAtl1lQcoq9eDJWMshKutVId053N34i6dEq47U5CCKK', NULL, '2023-12-07 15:00:51', '2023-12-07 15:05:06', NULL),
(77, 'Toubali', 'ismailtoubali1996@gmail.com', 'ismailtoubali1996@gmail.com', 'Ismail', '+212632801524', 'Ain chok hay moulay abdellah', 'Nationale', 'LOGISTIQUE', 'CDI', '1701986621CV ISMAILTOUBALI M23 (1).pdf', NULL, 0, NULL, '$2y$10$2QCGxq.kkxFVEZt/Qxv14.RMp2U65HT.fX.KXprRGD3NCO1lSbaWK', NULL, '2023-12-07 21:03:41', '2023-12-07 21:03:41', NULL),
(78, 'BENLAROUSSI', 'souhaila.aitaliounaceur@gmail.com', 'souhaila.aitaliounaceur@gmail.com', 'jamal', '0675593200', '0675593200', 'Nationale', 'LOGISTIQUE', 'CDI', '1702029431JAMAL BENLAROUSSI 2023.pdf', '1702029431LETTRE DE MOTIVATION JAMAL BENLAROUSSI (1).pdf', 0, NULL, '$2y$10$fC5gl26BGHSKi1/z1B4qAOnehgIsxk4eKwpPF65iW9m8I8WTPtmEa', NULL, '2023-12-08 08:57:11', '2023-12-08 08:57:11', NULL),
(79, 'Zouhari', 'abdessamad.zouhari1@gmail.com', 'abdessamad.zouhari1@gmail.com', 'Abdessamad', '0699701967', 'Hay walaa sidi moumen casa', 'Nationale', 'COMMERCIAL', 'CDI', '1702030062DOC-20231130-WA0019..pdf', '1702030062DOC-20231130-WA0019..pdf', 0, NULL, '$2y$10$gxQQvAK/bH4NVCMty.AOHeFOnEj3TITheGl.nELvcQdZz2pp.DXqq', NULL, '2023-12-08 09:07:42', '2023-12-08 09:07:42', NULL),
(80, 'Mrani Alaoui', 'ismailmranialaoui57@gmail.com', 'ismailmranialaoui57@gmail.com', 'Mohammed Ismail', '06 41 48 25 13', 'Casablanca', 'Locale', 'COMMERCIAL', 'CDI', '1702030570CV-COM.pdf', '1702030570Lettre de motivation .pdf', 0, NULL, '$2y$10$aYLVdmM4Kosj3d/A5yroBeXHKYa.GChVEDIsVOEFVA/26AUF9i9LG', NULL, '2023-12-08 09:16:10', '2023-12-08 09:16:10', NULL),
(81, 'Lakhmach', 'Lakhmach6@gmail.com', 'lakhmach', 'Ahmed', '0602871944', 'Lot el khouzama N 99 E4 casa', 'Régionale', 'COMMERCIAL', 'CDI', '1702030979Cv ahmed lakhmach.pdf', NULL, 0, NULL, '$2y$10$BaY4sCQ.spv7ouEO/uHI5.koyr2NaBUjTiXD.B1/ojujHC0AcRoKG', NULL, '2023-12-08 09:22:59', '2023-12-08 09:22:59', NULL),
(82, 'WAHBI', 'wahbi-anass@hotmail.com', 'Anass Wahbi', 'ANASS', '+212674133694', 'Rte de Taddart, subdivision yasmina 2, Residence Al mawlid 10', 'Internationale', 'COMMERCIAL', 'CDI', '/tmp/php05pQuT', NULL, 0, NULL, '$2y$10$v4D1AXjbLFqhp./iUnPjoeYe8HDRD0FanG5DbwlTQdEpPc/3D4KBq', NULL, '2023-12-08 09:28:42', '2023-12-08 09:30:11', NULL),
(83, 'AIT MHAMDOUHMID', 'elmehdi.aitmhamd@gmail.com', 'elmehdi129', 'EL MEHDI', '0660-166645', 'Rue 129 N°91 Ain Chock', 'Nationale', 'LOGISTIQUE', 'CDI', '1702031997cv-1-1.pdf', NULL, 0, NULL, '$2y$10$UMKsTv0/uMm8eX.4LqiDb.J/2grgLjfza/.L9iAW1Vjp0luSftziC', NULL, '2023-12-08 09:39:57', '2023-12-08 09:39:57', NULL),
(84, 'Dendane', 'dendane1982@gmail.com', 'dendane1982@gmail.com', 'Mohammed amine', '0607196568', 'Bd ennargiss rue essabil 6n 11', 'Nationale', 'COMMERCIAL', 'CDI', '1702032748cv DENDANE 2024 (1).pdf', NULL, 0, NULL, '$2y$10$mTPvE70BPMbcFIyWRyn21.t27YVHVH43Jc2nala4T/Ful7gXdYFUa', NULL, '2023-12-08 09:52:28', '2023-12-08 09:52:28', NULL),
(85, 'moutimoune', 'nouhaila.moutimoune@gmail.com', 'nouhaila.moutimoune@gmail.com', 'nouhaila', '0703650319', 'LOT  RAKIA  BLOCK D IMM 9 APP 1 SIDI MAAROUF', 'Nationale', 'LOGISTIQUE', 'CDI', '1702034144cv nouhaila mt.pdf', NULL, 0, NULL, '$2y$10$0Hm2INyWxUJ3GM2r2EYXg.rgoIxrSgn7HFDJnYhxg3wtf1VXn9FJe', NULL, '2023-12-08 10:15:44', '2023-12-08 10:15:44', NULL),
(86, 'Fadli', 'Wassimfadli60@gmail.com', 'Wassimfadli60@gmail.com', 'Wassim', '0623080645', 'Wassimfadli60@gmail.com', 'Nationale', 'COMMERCIAL', 'CDI', NULL, NULL, 0, NULL, '$2y$10$you04EXYLosV/Hpyla6pAeHfo8Y0DJjLVYnhrRrQrnzfZlw/tnqjK', NULL, '2023-12-08 11:02:10', '2023-12-08 11:02:10', NULL),
(87, 'ELHAMDI', 'mohammedelhamdi2000@gmail.com', 'mohammedelhamdi2000@gmail.com', 'MOHAMMED', '0658313409', 'SIDI BENNOUR', 'Nationale', 'INFORMATIQUE', 'CDI', '1702037878CV_Mohammed ELHAMDI.pdf', NULL, 0, NULL, '$2y$10$oHVxkFqyaSydrmLHf0KQKO7FuIm2LNtSYq9ni.tIG/wKN6Ne0E1DW', NULL, '2023-12-08 11:17:58', '2023-12-08 11:17:58', NULL),
(88, 'Ziky', 'badreziky@gmail.com', 'ZikyBadre', 'Badre', '0669948624', 'Casablanca', 'Nationale', 'COMMERCIAL', 'CDI', '1702040083Cv Badre Ziky .pdf', NULL, 0, NULL, '$2y$10$5kw8DrZo3YSenvqvgDFazeW9p/E7ef/zG/Bz/WoC9470XrRC9YV8G', NULL, '2023-12-08 11:54:44', '2023-12-08 11:54:44', NULL),
(89, 'Mahfoudi', 'aminamahfoudi73@gmail.com', 'Amina mahfoudi', 'Amina', '0620966150', '9 rue oulad dlim oudayas rabat', 'Locale', 'LOGISTIQUE', 'CDI', '1702040143CV.pdf', NULL, 0, NULL, '$2y$10$UMBMzrKROGbmAEaZofjdqutVhzD008icIc57wYXwTwLjdndzZCbqi', NULL, '2023-12-08 11:55:43', '2023-12-08 11:55:43', NULL),
(90, 'ATEZGANE', 'j.atezgane@gmail.com', 'j.atezgane', 'JIHANE', '0651771271', 'Hay Al Qods, Lotissement Al Amal, Résidence Aya “C” N° 1, Sidi Bernoussi - Casablanca', 'Locale', 'LOGISTIQUE', 'CDI', '1702041329CV Jihane ATEZGANE - FR -.pdf', NULL, 0, NULL, '$2y$10$5NGByR/t9ilWz8/oxtMzbOiNrc5gzIZUi7Q3gQUMyIwyJ8XxWeUqa', NULL, '2023-12-08 12:15:29', '2023-12-08 12:15:29', NULL),
(91, 'Nabar', 'nabarghizlane1@gmail.com', 'ghizlane', 'Ghizlane', '0600934565', 'Fès', 'Nationale', 'LOGISTIQUE', 'CDI', '1702041413Ghizlane Nabar CV.pdf', NULL, 0, NULL, '$2y$10$t3UUBtRvi5e2Oj8/mCtoSOQq3m..ozjfpr.uq0ycYgFe.KiIBVni2', NULL, '2023-12-08 12:16:53', '2023-12-08 12:16:53', NULL),
(92, 'Benabdouh', 'kbenabdouh@gmail.com', 'kbenabdouh@gmail.com', 'Karim', '0661205704', '10, rue Salonique résidence MAHA étage 3 Appt 15', 'Locale', 'ACHAT', 'CDI', '1702042372Karim Benabdouh achat.pdf', NULL, 0, NULL, '$2y$10$AKM8md6MQ/ngaf7bGtn9NOHl7buev9ut/DQfiD4pLKZ7BPYDNlJ.S', NULL, '2023-12-08 12:32:52', '2023-12-08 12:32:52', NULL),
(93, 'AMRANI MARRAKCHI', 'achrafamrani05@gmail.com', 'achrafamrani05gmail.com', 'Achraf', '0607453525', 'N63 lotissement arafat rte ain chkef', 'Nationale', 'COMMERCIAL', 'CDI', '1702044611CV.pdf', '1702044611Lettre de motivation1.docx.pdf', 0, NULL, '$2y$10$hzhbNB3H6RZf5hAiSkJT0eUo7Gsqkc7KUSGpYgi.eMAUfvRVUIB06', NULL, '2023-12-08 13:10:11', '2023-12-08 13:10:11', NULL),
(94, 'Abderrahmane', 'lakhchaiiabderrahman@gmail.com', 'lakhchaiiabderrahman@gmail.com', 'Lakhchai', '+212678481512', 'N°7 Rue 10 AIN CHOK CASABLANCA', 'Nationale', 'LOGISTIQUE', 'CDI', '1702048825CV Abderrahmane Lakhchai 2023 Logistics specialist.pdf', NULL, 0, NULL, '$2y$10$PPOV4/jLe98hteJsruXzx.pn2qPMRYefayKyc5oFcK8Z68Q3wmx8W', NULL, '2023-12-08 14:20:25', '2023-12-08 14:20:25', NULL),
(95, 'Bachraf', 'bachraf.ilham@gmail.com', 'bachraf.ilhame', 'Ilhame', '0630962327', 'Residence najmat sidi moumen GH27 Ent S1 Apt 10 sidi moumen casablanca', 'Locale', 'ACHAT', 'CDI', '1702051989CVBachrafilhame.pdf', NULL, 0, NULL, '$2y$10$55MO6M.qTKbU4GDr4tcQF.vlylRdXffJ.aWlPfhTpS63m0ihbzJ9C', NULL, '2023-12-08 15:13:10', '2023-12-08 15:13:10', NULL),
(96, 'TAOUJA', 'taouja.youssef@gmail.com', 'yousseftaouja', 'YOUSSEF', '0602929402', 'Db baladia rue michlifen N21 Casablanca', 'Nationale', 'TRAVAUX ET MAINTENANCE', 'CDI', '/tmp/phpPVV5mP', NULL, 0, NULL, '$2y$10$C1cCPfux6l8NB1hm8JsCmutzsteDBJfzJ1nZp7AHTUVm9EmHJbwze', NULL, '2023-12-08 16:09:19', '2023-12-08 16:10:10', NULL),
(97, 'BOUCHOUF', 'hbmaroc@gmail.com', 'hbmaroc@gmail.com', 'Abdelkarim', '+212619327849', 'Rue 194 N230 AIN CHOCK', 'Internationale', 'ACHAT', 'CDI', '1702068594CV_BOUCHOUF-1 (1).pdf', NULL, 0, NULL, '$2y$10$PzgwZZqoJAQ4o9c8cvcPPOnhhTEgl7tHzON4hKHYzJo1HuSUbkrHu', NULL, '2023-12-08 19:49:54', '2023-12-08 19:49:54', NULL),
(98, 'Mouslih', 'mouslihsalma3@gmail.com', 'mouslihsalma3@gmail.com', 'Salma', '0689089913', 'Mouslihsalma3@gmail.com', 'Locale', 'LOGISTIQUE', 'CDI', '1702108471Salma Mouslih (logistique).pdf', '1702108471Salma Mouslih (logistique).pdf', 0, NULL, '$2y$10$GfZZhMVd/LRdVlhcznenx.HYubY6AkhP/Y9dDjU3GSOkejn3BNR2C', NULL, '2023-12-09 06:54:31', '2023-12-09 06:54:31', NULL),
(99, 'MARJAN', 'marjyounes@gmail.com', 'marjyounes@gmail.com', 'Younes', '0674799466', 'RIAD OULFA 02, AL AZHAR', 'Nationale', 'COMMERCIAL', 'CDI', '1702124433Cv.Pro.pdf', '1702124433Lettre de motivation d\'emploi .pdf', 0, NULL, '$2y$10$Fqdhp6ZzB9u3r7SpPGGpS.0zF/ho7ic4FbALiQ90YpL0fe9.gDW8q', NULL, '2023-12-09 11:20:33', '2023-12-09 11:20:33', NULL),
(100, 'LABAY', 'kamallabay@outlook.fr', 'kamallabay@outlook.fr', 'KAMAL', '+212678740662', 'casablanca', 'Nationale', 'ACHAT', 'CDI', '/tmp/php2zVRdN', NULL, 0, NULL, '$2y$10$5wmN.7Ax1duXOsmO5ZFyruUw6/vxX8vucmaku7OyvWmckyuyiSNTq', NULL, '2023-12-09 18:04:21', '2024-05-14 19:48:12', NULL),
(101, 'MOUKRAM', 'mymailbox.ym@gmail.com', 'mymailbox.ym@gmail.com', 'YOUSSEF', '06 93 17 33 00', '61, Av Moulay Hassan 1er. 20070. Casablanca.', 'Nationale', 'COMMERCIAL', 'CDI', '1702205692CV - Youssef MOUKRAM.pdf', '1702205692Cover Letter - Youssef MOUKRAM.pdf', 0, NULL, '$2y$10$u9k424nXMBymN/Y4h/LDO.i53WYwuaI1AKnSKSoL0MaLv1MA3.OaC', NULL, '2023-12-10 09:54:52', '2023-12-10 09:54:52', NULL),
(102, 'BENFEDDOUL', 'abdelhamid.benfeddoul@gmail.com', 'abdelhamid.benfeddoul@gmail.com', 'Abdelhamid', '0671928777', 'Bd Ibnou Tachfin, RES Al Ferdaous Imm B n° 7 Ain--Borja, Casablanca', 'Locale', 'LOGISTIQUE', 'CDI', '1702215694CV BENFEDDOUL Abdelhamid.pdf', '1702215694LM BENFEDDOUL Abdelhamid.pdf', 0, NULL, '$2y$10$.xkviueIZQvUeovZmZ9am.YTnTB3enNQn5JZhoiJ4xWGbArMPofn2', NULL, '2023-12-10 12:41:34', '2023-12-10 12:41:34', NULL),
(103, 'chergui', 'chergui.sara@gmail.com', 'CHERGUISARA', 'sara', '0701053878', 'N 64 HAY MOULAY RACHID TRANCHE 3 BLOC H APRT 2 LAAYOUNE', 'Nationale', 'COMMERCIAL', 'CDI', '1702285987CV SARA CHERGUI MARS 2023.pdf', NULL, 0, NULL, '$2y$10$vUHAr5li.qsy8XIYjL.o/.ZMhkmz64dW6id9JJIwAryfnq/bNAPty', NULL, '2023-12-11 08:13:07', '2023-12-11 08:13:07', NULL),
(104, 'Bakkali hassani', 'bk.khalidbakkali@gmail.com', 'kbekkali', 'Khalid', '0666-837453', 'Hay nahda 3 gr Chourouk n 129 rabat', 'Nationale', 'COMMERCIAL', 'CDI', '1702295631Curriculum vitae.docx', '1702295631Curriculum vitae.docx', 0, NULL, '$2y$10$Ai3mYgzMDvg/DoT1B2yVK..aLk7hYQgikixPxaTkP1kgdVBZRL/bO', NULL, '2023-12-11 10:53:51', '2023-12-11 10:53:51', NULL),
(105, 'Bouddehbine', 'elmehdi.bouddehbine@gmail.com', 'elmehdi.bouddehbine@gmail.com', 'Elmehdi', '0690119957', 'Hay sadri rue 15 groupe 4 numéro 31', 'Internationale', 'COMMERCIAL', 'CDI', '1702295979cv bouddehbine.pdf', '1702295979lM fr.pdf', 0, NULL, '$2y$10$lAaFeJYW.uPVhmbmJ3K9MuFaTDl4h6mvrzLXjIKZaI5sta6NGmlNO', NULL, '2023-12-11 10:59:39', '2023-12-11 10:59:39', NULL),
(106, 'Boussebaa', 'ihssanboussebaa51@gmail.com', 'ihssanboussebaa51@gmail.com', 'Ihssan', '0679756275', 'Agadir', 'Nationale', 'LOGISTIQUE', 'CDI', NULL, NULL, 0, NULL, '$2y$10$poSyzkXuB54M/6JKe2i/euQv5Zn9LXIHRRj8WkOK5eXYEYhEtq/yO', NULL, '2023-12-11 11:10:04', '2023-12-11 11:10:04', NULL),
(107, 'DGHOUGHI', 'hafid1997dgh@gmail.com', 'Hafid1997', 'HAFID', '0616423961', 'RABAT', 'Nationale', 'COMMERCIAL', 'CDI', '1702297823CV_2023-11-30-061552_11zon.pdf', NULL, 0, NULL, '$2y$10$nuI2MKTDX3UGdGl0rjHESeIP5jfDQq3zbAjOWvO1wXPnv4PGZPmLa', NULL, '2023-12-11 11:30:24', '2023-12-11 11:30:24', NULL),
(108, 'bouksim', 'youssef94bouksim@gmail.com', 'youssef94bouksim@gmail.com', 'youssef', '0676479559', 'bloc 4 nr 203 sidi youssef agadir', 'Locale', 'COMMERCIAL', 'CDI', '1702305280CV Youssef BOUKSIM pdf.pdf', NULL, 0, NULL, '$2y$10$2Vp6R7KPXeTcc/Y7pl4df.wLwtTqkKhCbOgnOrtSkYeL5sXNuGclq', NULL, '2023-12-11 13:34:40', '2023-12-11 13:34:40', NULL),
(109, 'El ghannay', 'Hajaremghannay@gmail.com', 'hajaremghannay@gmail.com', 'Hajar', '+212641157773', 'av aicha elmoussafir tanger', 'Nationale', 'LOGISTIQUE', 'CDI', '1702308440cv.pdf', '1702308440Lettre de motivation.pdf', 0, NULL, '$2y$10$.oUocyhT9tHxnYbq21/ZfuVAGdLA6a3WC3tnnlcsb.CzJNOZLkYOi', NULL, '2023-12-11 14:27:20', '2023-12-11 14:27:20', NULL),
(110, 'FARIS', 'halima.faris@gmail.com', 'halima.faris@gmail.com', 'HALIMA', '+212610566742', 'CASABLANCA SIDI MAAROUF', 'Nationale', 'LOGISTIQUE', 'CDI', '1702325535CV HALIMA FARIS chef projets 2023 avec photo3.pdf', NULL, 0, NULL, '$2y$10$1eaepdHVnfF7UjN0rvjxSeSk7RJbrM78Veo8x1BGgqQCF0G5fitAa', NULL, '2023-12-11 19:12:15', '2023-12-11 19:12:15', NULL),
(111, 'EL MOUSTAKI', 'y.elmoustaki@gmail.com', 'y.elmoustaki@gmail.com', 'YOUSSEF', '0679218076', 'Avenue Charif Radi,N°147 CHAMA, BERRECHID,MAROC', 'Nationale', 'ACHAT', 'CDI', '/tmp/phpREAgqz', NULL, 0, NULL, '$2y$10$mj8AexmZ8MOGjFvakAeCvuApIbSqds6pfhrnQqVMPDF1YtUJmlEJq', NULL, '2023-12-12 13:18:15', '2023-12-12 13:19:41', NULL),
(112, 'EL HABLI', 'elhabliayoube99@gmail.com', 'ayoubehb', 'AYOUB', '+212639267141', 'HAY MASSIRA 2 RUE 4 N° 91 CASA', 'Locale', 'ACHAT', 'CDI', '1702393178CV_AYOUB ELHABLI223.pdf', NULL, 0, NULL, '$2y$10$04V9l1/NuNOeTaE88afg/eh7cEQ01HcI.L43anrg/G1D6FtP5fslq', NULL, '2023-12-12 13:59:38', '2023-12-12 13:59:38', NULL),
(113, 'Salek', 'salek.abderrazaq@gmail.com', 'Salek.abderrazaq@gmail.com', 'Abderrazaq', '0652715412', 'Res al basma 01 gh 02 App 12 App 05 Ain sebaa Casablanca', 'Internationale', 'LOGISTIQUE', 'CDI', '1702405830CV S C M 023-4.pdf', NULL, 0, NULL, '$2y$10$oVmX0VuYlJ1OdAovotuNGeo/6Cc.ibrm/dTTEdBn6EHQOk/UsvyJu', NULL, '2023-12-12 17:30:30', '2023-12-12 17:30:30', NULL),
(114, 'MEFTTAH', 'a.meftah96@gmail.com', 'a.meftah96@gmail.com', 'ALAA EDDINE', '0657854730', 'Hay moulay abdelah Rue 241 N 9 ain choc', 'Internationale', 'LOGISTIQUE', 'CDI', '1702481426CV Alaaeddine Meftah - Copie.pdf', NULL, 0, NULL, '$2y$10$FP5l.0SqXTv0DfjtXQqJD.mRvMiA76tYS9KlOTiFAEd4JKeURAKVS', NULL, '2023-12-13 14:30:26', '2023-12-13 14:30:26', NULL),
(115, 'Hajar', 'hajarkabarousse0@gmail.com', 'hajarkabarousse0@gmail.com', 'Kabarousse', '0767091714', 'إقامة بيتي سكن أهل الغلام السلام 2 حي أناسي الدار البيضاء', 'Locale', 'LOGISTIQUE', 'CDI', '1702567047CV_2023-08-31_Hajar_Kabarousse (8)_page-0001.jpg', NULL, 0, NULL, '$2y$10$G4HoEpxvvUlFfPhTe.zd6.Tx.ephGm1VF5XujvgP8/SbiMNU//Zuu', NULL, '2023-12-14 14:17:27', '2023-12-14 14:17:27', NULL),
(116, 'Meriem', 'sehbanimeriem1@gmail.com', 'sehbanimeriem1', 'sehbani', '0629810400', 'Mohammedia', 'Locale', 'COMMERCIAL', 'CDI', '1703003188CV Mlle SEHBANI Meriem.pdf', '1703003188Lettre de Motivation-1.pdf', 0, NULL, '$2y$10$JAyanJfP6qLkfG4hmm714.aeafF5gWV1ZHUsdWLRkDksVtawRflny', NULL, '2023-12-19 15:26:28', '2023-12-19 15:26:28', NULL),
(117, 'nadif', 'khalidnadif16@gmail.com', 'khalidnadif16@gmail.com', 'khalid', '+212 663 149 444', '12 rue ibnou khalouya 2mars', 'Nationale', 'COMMERCIAL', 'CDI', '1703597433CV__KHALID_NADIF.pdf', '1703597433lettre-de-motivation.docx', 0, NULL, '$2y$10$L1PU.jtJ75laSxA6Z67ZPu0FLwjI1i..4onrlpHAIu9pqHQ2sAPsi', NULL, '2023-12-26 12:30:33', '2023-12-26 12:30:33', NULL),
(118, 'Elhaddioui', 'younesselhaddioui87@gmail.com', 'Youness2024', 'Youness', '+212661088742', 'Anassi  a1entre 7 n 95 casablanca', 'Nationale', 'LOGISTIQUE', 'CDI', NULL, NULL, 0, NULL, '$2y$10$IjpU8ItQ7qvuFt/wO8bma.I2rm8t8VqJE.75evSA2fvV3zke75D.u', NULL, '2023-12-28 14:38:36', '2023-12-28 14:38:36', NULL),
(119, 'Guasbaoui', 'younes.qid@gmail.com', 'younes.qid@gmail.com', 'Youness', '0661781477', 'BD MIMOZA N71 AIN SEBA', 'Régionale', 'COMMERCIAL', 'CDI', '1703838781Cv Younes GUASBAOUI B-16-15 (1)-1-2.pdf', NULL, 0, NULL, '$2y$10$.3afkJ3CVtTi8.2eIDVdw.3V8wngdEplRyFB.qJudG5cxxpocd/6O', NULL, '2023-12-29 07:33:01', '2023-12-29 07:33:01', NULL),
(120, 'DANNOUN', 'mohameddannoun8@hotmail.com', 'mohamedannoun8@gmail.com', 'MOHAMED', '0682775300', 'el massira 2 bloque 1 num 157 beni mellal', 'Nationale', 'COMMERCIAL', 'CDI', '1704975106CV-DANNOUN.pdf', '1704975106CV-DANNOUN.pdf', 0, NULL, '$2y$10$WapUuc7i6T32cv.zPGHW.uCTYf0xFj8xjwQEfn1ExeneQQxEN0ddS', NULL, '2024-01-11 11:11:46', '2024-01-11 11:11:46', NULL),
(121, 'Gagua', 'gaguaahlam@gmail.com', 'gaguaahlam@gmail.com', 'Ahlam', '0633617584', 'Quartier Agdal , Hadika', 'Locale', 'ACHAT', 'CDI', '1705928737CV AG 2024 PDF.pdf', NULL, 0, NULL, '$2y$10$uvJFMxGEwgbAeS8MTtaWsOaIjDroca/eSvRxIL4Nsi5tdHwcab.jq', NULL, '2024-01-22 12:05:37', '2024-01-22 12:05:37', NULL),
(122, 'PENTESTER', 'cexoxer554@grassdev.com', 'cexoxer554@grassdev.com', 'CEXOXER554@GRASSDEV.COM', '0660123212', 'test', 'Internationale', 'INFORMATIQUE', 'Intérim', '/tmp/php8BC3uJ', '/tmp/phpQXbeR0', 0, NULL, '$2y$10$TeWbJZHk0zkqAP0yEg4Hx.ENBhugyOTqXYtq68cYS0R.OjjrIAoDy', NULL, '2024-01-22 16:01:42', '2024-01-22 16:07:57', NULL),
(123, 'elhanine', 'elhanine.elmehdi@gmail.com', 'elhanine.elmehdi@gmail.com', 'elmehdi', '+212630095397', 'RES PRESTIGE CALIFORNIE IMM G APPT 3 AI CHOK CASABLANCA', 'Nationale', 'COMMERCIAL', 'CDI', '1706291438CV ELHANINE ELMEHDI Manager commercial.pdf', NULL, 0, NULL, '$2y$10$tE48G9X88vCJV0sJDek2Puhwoyp/1JZjp6U5rcsPaO3Ed0NdWF1si', NULL, '2024-01-26 16:50:38', '2024-01-26 16:50:38', NULL),
(124, 'Abdelali Jabar', 'Abdelalijabar14@gmail.com', 'Abdelalijabar14@gmail.com', 'Jabar', '0632441492', 'Cité de la communne bloc 13 no 611 hay hassani', 'Nationale', 'LOGISTIQUE', 'CDI', '1706631031CV  minimaliste noir  blanc et rouge (3) (1).pdf', NULL, 0, NULL, '$2y$10$IrRH28cC5WhMfHpKX6UHxed/LYMGGbSbbO6ibPckQNhdcfgBWKUKa', NULL, '2024-01-30 15:10:31', '2024-01-30 15:10:31', NULL),
(125, 'ERRABAI', 'yousseferrabai24@gmail.com', 'yousseferrabai24@gmail.com', 'YOUSSEF', '0610994671', 'Tranche 25 Azhar  Casablanca  Maroc', 'Locale', 'LOGISTIQUE', 'CDI', '/tmp/phpE20N12', NULL, 0, NULL, '$2y$10$WoutCstwuKHyPyBZBndSo.d39Xn2uxGQpnP7xIqDUfu88DiAywkXe', NULL, '2024-02-11 15:02:55', '2024-02-11 15:03:26', NULL),
(126, 'BAHIR', 'chaimabahir1@gmail.com', 'chaima bahir', 'CHAIMA', '0770982695', 'AMLAK BERNOUSSI GH 7 IMM 59 NR 12 AIN HARROUDA MOHAMMEDIA', 'Nationale', 'COMMERCIAL', 'CDI', '/tmp/phpgaczWH', '/tmp/phpCuAzef', 0, NULL, '$2y$10$eM6Eb9TpfmBQvmRi7AWoLunbZ0pFymTp7mmVwcy2I52Z6/Qa5wVBu', NULL, '2024-02-12 08:00:50', '2024-02-12 08:09:33', NULL),
(127, 'Abdessadak', 'samati198714@gmail.com', 'AbdessamadABDESSADAK', 'Abdessamad', '0652718709', 'Immeuble B, Appartement 5, 2 ème étage Bab Batioui', 'Nationale', 'COMMERCIAL', 'CDI', '1707860531cvvc.pdf', NULL, 0, NULL, '$2y$10$MZRhJC6gj4wH7kIuZgFO0.f3IjeOTLkvHRSOFDDLyFsWCV34Dxyd.', NULL, '2024-02-13 20:42:11', '2024-02-13 20:42:11', NULL),
(128, 'Taous', 'wissaltaous4@gmail.com', 'wissal.taous', 'Wissal', '0602341192', 'Bab anassi al azhar  Gh12 Imm 12 Sidi bernousi', 'Nationale', 'COMMERCIAL', 'CDI', '1709031836CV de Wissal TAOUS 2024.pdf', NULL, 0, NULL, '$2y$10$/pRa7/kaZU7mWfaPR8F6X.7SS/YZlNFMlJO5j5vQs/Ja3I15EEkT6', NULL, '2024-02-27 10:03:56', '2024-02-27 10:03:56', NULL),
(129, 'HAMZA ROUDA', 'Roudahamza038@gmail.com', 'Roudahamza038@gmail.com', 'ROUDA', '+212616460561', 'settat', 'Nationale', 'ACHAT', 'CDI', '1709199580Cv hamza rouda .PDF', NULL, 0, NULL, '$2y$10$E.tD/B8gCCrRNu1epQiS1OZcfhNretJjdBKcdVssy9eNUTlNjmS7O', NULL, '2024-02-29 08:39:40', '2024-02-29 08:39:40', NULL),
(130, 'wesifiy267@comsb.com', 'wesifiy267@comsb.com', 'wesifiy267@comsb.com', 'wesifiy267@comsb.com', '0667876788', 'wesifiy267@comsb.com', 'Locale', 'ACHAT', 'CDI', NULL, NULL, 0, NULL, '$2y$10$A0xZCxxqIH7ID/LwqMUQLuXz9bsQtQOLWB2q6C60UK5ggv407fOVG', NULL, '2024-03-03 21:52:59', '2024-03-03 21:52:59', NULL),
(131, 'Stevencig', 'c.b.rea.l.est.at.ehomes@gmail.com', 'Stevencig', 'StevencigTJ', '87813669175', 'Ordway', 'Nationale', 'INFORMATIQUE', 'CDD', '170955314831.gif', NULL, 0, NULL, '$2y$10$3B5MvHIRtXkVpkO8UXvMUO.6A.AWgaSHtyAqTcRL0.jrRjnVQbBsa', NULL, '2024-03-04 10:52:28', '2024-03-04 10:52:28', NULL),
(132, 'MOUHLI', 'medmouhli@gmail.com', 'medmouhli@gmail.com', 'Mohamed', '+21625173277', '15 Rue de Ghandi', 'Internationale', 'ACHAT', 'CDI', '1713602959CV Mohamed Mouhli , V French.pdf', '1713602959Resume Mohamed Mouhli.pdf', 0, NULL, '$2y$10$vU/0tw/uhrSYuzNUbj53zuHSy97VMw2ysyTg3gV0k8Fwvi4AXUESy', NULL, '2024-04-20 07:49:19', '2024-04-20 07:49:19', NULL),
(133, 'LAHLOU', 'mahlou257@gmail.com', 'mahlou257@gmail.com', 'Mohamed', '+33605615579', 'avenue de la république, paris', 'Nationale', 'COMMERCIAL', 'CDI', '1714482442CV.pdf', NULL, 0, NULL, '$2y$10$3Uk0xzncI7AxSPPoj5qR9O7Ns86YzsOi6Yy8LzvFeMalJtlXlimqO', NULL, '2024-04-30 12:07:22', '2024-04-30 12:07:22', NULL),
(134, 'belayachi', 'belayachi1972@gmail.com', 'belayachi1972@gmail.com', 'driss', '0608070333', 'n 14 rita appt 6 bouzenika', 'Locale', 'ACHAT', 'Stage', NULL, NULL, 0, NULL, '$2y$10$jazC80I0HB2kUfkenbrVBOfzmV3L3hN7xYVSqx8r35S7VfmlWvbcO', NULL, '2024-05-04 22:19:21', '2024-05-04 22:19:21', NULL),
(135, 'Sihri', 'sihrinabil@gmail.com', 'sihrinabil@gmail.com', 'Nabil', '0651060431', 'Fes', 'Régionale', 'TRAVAUX ET MAINTENANCE', 'CDI', '1715375471CV_2024050218311579.pdf', NULL, 0, NULL, '$2y$10$aKA4fdbQi5siaEMAwk7B.Oz1eeVDQCoAUv75zcZXHaJ.Mr/kJ4cCe', NULL, '2024-05-10 20:11:11', '2024-05-10 20:11:11', NULL),
(136, 'BOUGALLA', 'galla.amssab@gmail.com', 'B Bassma', 'BASSMA', '060653316', 'Rsd Madinati GH7 imm01 n32 Sidi Bernoussi. Casablanca', 'Locale', 'LOGISTIQUE', 'CDI', NULL, NULL, 0, NULL, '$2y$10$gG5i8SE4yuj8gaJ97HTbRel7kKek6X/Oef4DvYA3cP/6s.m2ajUEW', NULL, '2024-05-13 08:59:19', '2024-05-13 08:59:19', NULL),
(137, 'ayoub', 'idmhandayoub0@gmail.com', 'idmhandayoub0@gmail.com', 'ID M H\'AND', '0655169209', 'Anassi38 sidi bernoussi casablanca', 'Locale', 'LOGISTIQUE', 'Intérim', '1715728672CV_2024050914194925.pdf', NULL, 0, NULL, '$2y$10$4xp0DFA1UbvbNZZtf5SNVO4cyjt7oeggBgcnQaM1kXIF0wqpkcTOa', NULL, '2024-05-14 22:17:52', '2024-05-14 22:17:52', NULL),
(138, 'Faiz', 'nasrofaiz.pro@gmail.com', 'nasrofaiz.pro@gmail.com', 'Nasser Allah', '06 31 72 58 73', 'AL FAJR IMM 17 NR 10 TR I CASABLANCA', 'Nationale', 'ACHAT', 'CDI', '1715902126CV Nasser allah (1) (3) (1) (2).pdf', NULL, 0, NULL, '$2y$10$IKp8X.DbNEi0inBGwuicDe2LN9WOUORyk6KiqIMPtklTXeEPDCqBu', NULL, '2024-05-16 22:28:46', '2024-05-16 22:28:46', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`id`, `libelle`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, 'Rabat', NULL, NULL, NULL),
(11, 'Casablanca', NULL, NULL, NULL),
(19, 'Mohammedia', NULL, NULL, NULL),
(23, 'Agadir', NULL, NULL, NULL),
(50, 'Salé', NULL, NULL, NULL),
(131, 'Tanger', NULL, NULL, NULL),
(133, 'Meknés', NULL, NULL, NULL),
(210, 'Khémisset', NULL, NULL, NULL),
(211, 'Tiflet', NULL, NULL, NULL),
(212, 'Azrou', NULL, NULL, NULL),
(213, 'Ahfir', NULL, NULL, NULL),
(214, 'Al-Hoceima', NULL, NULL, NULL),
(215, 'Arfoud', NULL, NULL, NULL),
(216, 'Asilah', NULL, NULL, NULL),
(217, 'Beni Mellal', NULL, NULL, NULL),
(218, 'Ben Slimane', NULL, NULL, NULL),
(219, 'Berkane', NULL, NULL, NULL),
(220, 'Berrechid', NULL, NULL, NULL),
(221, 'Bouarfa', NULL, NULL, NULL),
(222, 'Boujdour', NULL, NULL, NULL),
(223, 'Bouknadel', NULL, NULL, NULL),
(224, 'Boulemane', NULL, NULL, NULL),
(225, 'Bouznika', NULL, NULL, NULL),
(226, 'Chefchaouen', NULL, NULL, NULL),
(227, 'Chichaoua', NULL, NULL, NULL),
(228, 'Dakhla', NULL, NULL, NULL),
(229, 'Demnate', NULL, NULL, NULL),
(230, 'Driouch', NULL, NULL, NULL),
(231, 'El Hajeb', NULL, NULL, NULL),
(232, 'El Jadida', NULL, NULL, NULL),
(233, 'Errachidia', NULL, NULL, NULL),
(234, 'Erfoud', NULL, NULL, NULL),
(235, 'Essaouira', NULL, NULL, NULL),
(236, 'Fès', NULL, NULL, NULL),
(237, 'Figuig', NULL, NULL, NULL),
(238, 'Fnideq', NULL, NULL, NULL),
(239, 'Fquih Ben Salah', NULL, NULL, NULL),
(240, 'Guelmim', NULL, NULL, NULL),
(241, 'Guercif', NULL, NULL, NULL),
(244, 'Oulad Taima', NULL, NULL, NULL),
(245, 'Kénitra', NULL, NULL, NULL),
(246, 'Khénifra', NULL, NULL, NULL),
(247, 'Khouribga', NULL, NULL, NULL),
(248, 'Ksar El-Kbir', NULL, NULL, NULL),
(249, 'Laayoune', NULL, NULL, NULL),
(250, 'Larache', NULL, NULL, NULL),
(251, 'Marrakech', NULL, NULL, NULL),
(252, 'Martill', NULL, NULL, NULL),
(253, 'Mechra Bel Ksiri', NULL, NULL, NULL),
(254, 'M`diq', NULL, NULL, NULL),
(255, 'Midelt', NULL, NULL, NULL),
(256, 'Nador', NULL, NULL, NULL),
(257, 'Ouarzazate', NULL, NULL, NULL),
(258, 'Ouezzane', NULL, NULL, NULL),
(259, 'Oujda', NULL, NULL, NULL),
(260, 'Rommani', NULL, NULL, NULL),
(261, 'Rissani', NULL, NULL, NULL),
(262, 'Safi', NULL, NULL, NULL),
(263, 'Saadia', NULL, NULL, NULL),
(264, 'Sefrou', NULL, NULL, NULL),
(265, 'Settate', NULL, NULL, NULL),
(266, 'Sidi Kacem', NULL, NULL, NULL),
(267, 'Sidi Slimane', NULL, NULL, NULL),
(268, 'Sidi Yahya el Gharb', NULL, NULL, NULL),
(269, 'Skhirat', NULL, NULL, NULL),
(270, 'Smara', NULL, NULL, NULL),
(271, 'Ifrane', NULL, NULL, NULL),
(272, 'Imintanoute', NULL, NULL, NULL),
(273, 'Inezgane', NULL, NULL, NULL),
(274, 'Tan-Tan', NULL, NULL, NULL),
(275, 'Taourirte', NULL, NULL, NULL),
(276, 'Taounate', NULL, NULL, NULL),
(277, 'Tarfaya', NULL, NULL, NULL),
(278, 'Taroudant', NULL, NULL, NULL),
(279, 'Tata', NULL, NULL, NULL),
(280, 'Taza', NULL, NULL, NULL),
(281, 'Temara', NULL, NULL, NULL),
(282, 'Tetouan', NULL, NULL, NULL),
(283, 'Tinghir', NULL, NULL, NULL),
(284, 'Tiznit', NULL, NULL, NULL),
(285, 'Youssoufia', NULL, NULL, NULL),
(286, 'Zagora', NULL, NULL, NULL),
(288, 'Settat', NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actualites_partenaire_id_foreign` (`partenaire_id`);

--
-- Index pour la table `bannieres`
--
ALTER TABLE `bannieres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories_partenaires`
--
ALTER TABLE `categories_partenaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_partenaire_categorie_id_foreign` (`categorie_id`) USING BTREE,
  ADD KEY `categorie_partenaire_partenaire_id_foreign` (`partenaire_id`) USING BTREE;

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_imageable_type_imageable_id_index` (`imageable_type`,`imageable_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `offres`
--
ALTER TABLE `offres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `offres_users`
--
ALTER TABLE `offres_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_partenaire_categorie_id_foreign` (`offre_id`) USING BTREE,
  ADD KEY `categorie_partenaire_partenaire_id_foreign` (`user_id`) USING BTREE;

--
-- Index pour la table `parametres`
--
ALTER TABLE `parametres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partenaires`
--
ALTER TABLE `partenaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `villes_libelle_unique` (`libelle`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `bannieres`
--
ALTER TABLE `bannieres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT pour la table `categories_partenaires`
--
ALTER TABLE `categories_partenaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=776;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=524;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `offres`
--
ALTER TABLE `offres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `offres_users`
--
ALTER TABLE `offres_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT pour la table `parametres`
--
ALTER TABLE `parametres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT pour la table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=289;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
