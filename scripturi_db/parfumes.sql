-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iun. 09, 2021 la 10:44 PM
-- Versiune server: 10.4.18-MariaDB
-- Versiune PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `parfumes`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `id_produs` int(255) DEFAULT NULL,
  `denumire` varchar(100) DEFAULT NULL,
  `categorie` varchar(100) DEFAULT NULL,
  `pret` int(100) DEFAULT NULL,
  `cantitate` int(100) DEFAULT NULL,
  `id_client` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `cart`
--

INSERT INTO `cart` (`id`, `id_produs`, `denumire`, `categorie`, `pret`, `cantitate`, `id_client`) VALUES
(47, 1, 'Apa de Toaleta Hugo Boss Bottled Night', 'barbati', 155, 1, 37);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `comenzi`
--

CREATE TABLE `comenzi` (
  `id` int(255) NOT NULL,
  `id_produs` int(255) NOT NULL,
  `denumire` varchar(100) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `pret` int(100) NOT NULL,
  `pret_total` int(100) NOT NULL,
  `cantitate` int(100) NOT NULL,
  `id_client` int(255) NOT NULL,
  `nume_client` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adresa` varchar(255) NOT NULL,
  `oras` varchar(100) NOT NULL,
  `cod_postal` int(11) NOT NULL,
  `judet` varchar(50) NOT NULL,
  `nume_client_livrare` varchar(255) NOT NULL,
  `telefon_cumparator` int(10) NOT NULL,
  `telefon_vanzator` int(10) NOT NULL,
  `adresa_livrare` varchar(255) NOT NULL,
  `oras_livrare` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `comenzi`
--

INSERT INTO `comenzi` (`id`, `id_produs`, `denumire`, `categorie`, `pret`, `pret_total`, `cantitate`, `id_client`, `nume_client`, `email`, `adresa`, `oras`, `cod_postal`, `judet`, `nume_client_livrare`, `telefon_cumparator`, `telefon_vanzator`, `adresa_livrare`, `oras_livrare`) VALUES
(16, 3, 'Apa de Toaleta Hugo Boss Bottled Tonic', 'barbati', 165, 655, 1, 23, 'usertest100', '', '', '', 0, '', '', 0, 0, '', ''),
(17, 11, 'Apa de Parfum Calvin Klein Beauty', 'femei', 110, 1060, 4, 38, 'usertest2', '', '', '', 0, '', '', 0, 0, '', ''),
(18, 8, 'Apa de parfum Giorgio Armani Acqua Di Gio Profumo', 'barbati', 330, 1545, 1, 38, 'usertest2', '', '', '', 0, '', '', 0, 0, '', ''),
(19, 8, 'Apa de parfum Giorgio Armani Acqua Di Gio Profumo', 'barbati', 330, 1545, 1, 38, 'usertest2', '', '', '', 0, '', '', 0, 0, '', ''),
(20, 1, 'Apa de Toaleta Hugo Boss Bottled Night', 'barbati', 155, 155, 1, 37, 'usertest', '', '', '', 0, '', '', 0, 0, '', ''),
(21, 0, '', '', 0, 0, 0, 37, 'usertest', '', '', '', 0, '', '', 0, 0, '', ''),
(22, 1, 'Apa de Toaleta Hugo Boss Bottled Night', 'barbati', 155, 155, 1, 37, 'usertest', '', '', '', 0, '', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `denumire` varchar(100) NOT NULL,
  `descriere` varchar(600) NOT NULL,
  `compozitie` varchar(200) NOT NULL,
  `categorie` varchar(50) CHARACTER SET utf16 NOT NULL,
  `pret` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `products`
--

INSERT INTO `products` (`id`, `denumire`, `descriere`, `compozitie`, `categorie`, `pret`) VALUES
(1, 'Apa de Toaleta Hugo Boss Bottled Night', 'Boss Bottled Night de Hugo Boss este un parfum Lemnos Aromatic de barbati. Boss Bottled Night a fost lansat in 2010.\r\nBrandul Hugo Boss a devenit sinonim cu luxul in domeniul modei, al accesoriilor si al articolelor cosmetice pentru barbati. Se bucura de cautare inca de la debutul sau, pentru calitatea exceptionala a materialelor, pentru simtul detaliilor si pentru precizia tipic germane.', '- Notele de varf sunt lavanda si mesteacan; \r\n- Nota de mijloc este violeta;\r\n- Notele de baza sunt note lemnoase si mosc.', 'barbati', 155),
(2, 'Apa de Toaleta Hugo Boss Bottled', 'Hugo Boss Bottled este un parfum lemnos-picant, lansat in anul 1998 si creat de Annick Menardo. Boss Bottled este considerat parfumul semnatura al casei Hugo Boss. Parfumul are ca grup tinta barbatul modern, urban si care prezinta un stil de moda elegant.\r\nParfumul Hugo Boss Bottled are un caracter curat, elegant, care defineste perfect tendinta clasica.\r\nLa cativa ani dupa al Primul Razboi Mondial, Hugo Boss a pus bazele casei sale germane de moda, in 1923. De-a lungul anilor, compania a incercat sa stearga din memoria publicului perioada in care a creat uniformele negre pentru trupele SS.', '- Note de varf: Mar, citrice, pruna, lichean, muscata;\r\n- Note de mijloc: Note lemnoase, garoafa, scortisoara;\r\n- Note de baza: Lemn de santal, vetiver, lemn de cedru, mosc, ambra.', 'barbati', 180),
(3, 'Apa de Toaleta Hugo Boss Bottled Tonic', 'Boss Bottled Tonic de Hugo Boss este un parfum Lemnos Condimentat de barbati. Acesta este un parfum nou si a fost lansat in 2017.', '- Note de varf: grapefruit, portocala amaruie, lamaie, mar;\r\n- Note de mijloc: ghimbir, scortisoara, cuisoare, muscata;\r\n- Note de baza: vetiver, note lemnoase.', 'barbati', 165),
(4, 'Apa de toaleta CR7 Game On ', 'Pentru barbatul care este pregatit de orice, cu un spirit indraznet si optimist. Un barbat modern si senzual, care atrage atentia asupra sa de fiecare data cand isi face aparitia.\r\nImbatator si adictiv, parfumul combina notele bogate de cardamom si boabe tonka cu cele de cashmeran pentru o senzatie calda, senzuala.\r\nNotele lemnoase, puternic masculine sunt amplificate cu o atingere dulce, imbiindu-te sa revii pentru mai mult… sau sa iti petreci toata noaptea in oras.', 'Note de varf: mar proaspat, papaya, cardamom, gheata\r\nNote de mijloc: elemi, roua de violete, mugur de lavanda, fructe de ienupar\r\nNote de baza: cashmeran, cedru, boabe de tonka zaharisite, guiac', 'barbati', 200),
(5, 'Apa de Parfum Christian Dior, Sauvage', 'Sauvage Eau de Parfum de la Christian Dior este un parfum oriental fougere pentru barbati. Acesta este un parfum nou, Sauvage Eau de Parfum a fost lansat in anul 2018. Creatorul acestui parfum este Francois Demachy.\r\nChristian Dior a fost un creator influent de moda francez nascut in Maurice Dior. De cand era copil, a avut o pasinue pentru arte si a primit sprijinul tatalui sau in acest sens. A primit bani pentru a deschide o mica galerie de arta pentru a vinde creatii de Pablo Picasso si Max Jacob, totusi, dupa ce a intampinat probleme financiare, a trebuit sa inchida galeria. ', '- Note de varf: bergamota;\r\n- Note de mijloc: lavanda, piper de Sichuan, anason stelat si nucsoara;\r\n- Note de baza: ambroxan si vanilie.', 'barbati', 350),
(6, 'Apa de Toaleta Calvin Klein CK IN2U', 'Parfumul Calvin Klein IN2U este un parfum aromatic-fougere, lansat in anul 2007. Parfumul a fost creat de Carlos Benaim, Bruno Jovanovic, Loc Dong si Jean-Marc Chaillan.\r\nParfumul CK IN2U Men de la Calvin Klein intruchipeaza tineretea, exuberanta, libertatea si dorinta de a descoperi noi experiente.\r\n\r\nAcest parfum modern si delicat se deschide cu note de citrice precum lime, pomelo si ienibahar. Se schimba treptat intr-un parfum exotic erotic cu arome de cacao si mosc. Catre final, domina arome orientale de vetiver si patchouli.', '- Note de varf: Lamaie, frunze de tomate;\r\n- Note de mijloc: Pastai, cacao;\r\n- Note de baza: Vetiver, cedru, mosc alb.', 'barbati', 80),
(7, 'Apa de Toaleta Paco Rabanne Invictus', 'Paco Rabanne lanseaza in vara anului 2013 Invictus, un parfum nou ce reprezinta putere, dinamism si energie.\r\n\r\nCu o compozitie Acvatic -  Lemnoasa, acesta este un parfum fresh, usor si clar, un parfum ce emana prospetime si siguranta.\r\n\r\nCreat special pentru barbatul dinamic, cu simt de invingator si mereu creativ, Invictus vine cu un design aparte, sticla este in forma unei cupe.', 'Compozitia parfumului: grapefruit, mandarine si note de apa. Notele de mijloc: iasomie si frunza de dafin, iar baza: ambra cenusie,paciuli, lemn de Guaiac si muschi de stejar.', 'barbati', 250),
(8, 'Apa de parfum Giorgio Armani Acqua Di Gio Profumo', 'Casa Armani reinventeaza un parfum legendar. Noua compozitie este sofisticata si profunda. Mineral, intens, bogat in contraste, \"Acqua Di Gio Profumo\", cu prospetimea lui minerala, simbolizeaza intalnirea dintre mare si roca vulcanica. Creat de Alberto Morillas, elixirul se deschide cu un val de condimente si note citrice de bergamota si elemi unite cu patrunzatoarea si captivanta tamaie. Elegant si plin de pasiune, el gaseste armonie in contrastul cald - rece si prospetime-opacitate.', '-Note de varf: bergamot, note de apa\r\n-Note de mijloc: Salvie, muscata, rozmarin\r\n-Note de baza: tamaie, paciuli', 'barbati', 330),
(9, 'Apa de Parfum Paco Rabanne 1 million Prive', '1 Million Prive de Paco Rabanne este un parfum Oriental Lemnos de barbati. Acesta este un parfum nou 1 Million Prive a fost lansat in 2016. Creatorul acestui parfum este Christophe Raynaud.\r\n1 Million Prive de Paco Rabanne este un parfum Oriental Lemnos de barbati. Acesta este un parfum nou 1 Million Prive a fost lansat in 2016. Creatorul acestui parfum este Christophe Raynaud.', '- Notele de varf sunt mandarina sangerie si scortisoara;\r\n- Notele de mijloc sunt tutun si smirna;\r\n- Notele de baza sunt paciuli si boabe de tonka.', 'barbati', 300),
(10, 'Apa de Parfum Calvin Klein Euphoria', 'Parfumul Calvin Klein Euphoria este un parfum floral fructat, lansat in anul 2005.\r\nCalvin Klein  a fost fondat de bine-cunoscutul designer de moda Calvin Richard Klein. El si prietenul sau din copilarie Barry Schwartz (managerul afacerii) au fondat compania in 1968, care pe acea vreme era doar un magazin de paltoane in Hotelul York, in New York.\r\nA primit premiul Coty trei ani consecutiv.Genul de vanzare cu amanuntul in intreaga lume pe care Calvin Klein o realiza era estimata la mai mult de 600 milioane de dolari intr-un singur an, hainele fiind vandute prin intermediul a 12.000 magazine', 'Note de varf: Rodie;\r\nNote de mijloc: Lotus, orhidee;\r\nNote de baza: Violeta, ambra, mosc, lemn de mahon.', 'femei', 150),
(11, 'Apa de Parfum Calvin Klein Beauty', 'Parfumul Calvin Klein Beauty este un parfum floral fructat, lansat in anul 2005.\r\nCalvin Klein  a fost fondat de bine-cunoscutul designer de moda Calvin Richard Klein. El si prietenul sau din copilarie Barry Schwartz (managerul afacerii) au fondat compania in 1968, care pe acea vreme era doar un magazin de paltoane in Hotelul York, in New York.\r\nA primit premiul Coty trei ani consecutiv.Genul de vanzare cu amanuntul in intreaga lume pe care Calvin Klein o realiza era estimata la mai mult de 600 milioane de dolari intr-un singur an, hainele fiind vandute prin intermediul a 12.000 magazine', 'Note de varf: Nalba de mosc;\r\n\r\nNote de mijloc: Iasomie;\r\n\r\nNote de baza: Cedru de Virginia.', 'femei', 110),
(12, 'Apa de Parfum Carolina Herrera Good Girl', 'Good Girl de Carolina Herrera este un parfum Oriental Floral de dama. Acesta este un parfum nou Good Girl a fost lansat in 2016. Creatorul acestui parfum este Louise Turner.', 'Good Girl de Carolina Herrera este un parfum Oriental Floral de dama. Acesta este un parfum nou Good Girl a fost lansat in 2016. Creatorul acestui parfum este Louise Turner.', 'femei', 275),
(13, 'Apa de Toaleta Guess Seductive', 'Descopera un parfum senzual, seducator, esenta marcii emblematice. Seductive este un parfum floral-oriental-lemnos, pretios, care subliniaza frumusetea irezistibila a femeii.', '-Note de varf:bergamota, coacaze si para crocanta\r\n-Note de mijloc: portocal, iasomie si iris\r\n-Note de baza: tamaie oliban, vanilie, lemn de casmir', 'femei', 75),
(14, 'Apa de Parfum Lancome La Vie Est Belle', 'La Vie Est Belle de Lancome este un parfum Floral Fructat Gurmand de dama ce reprezinta improspatare si fericire. La Vie Est Belle a fost lansat in 2012. La Vie Est Belle a fost creat de Olivier Polge, Dominique Ropion si Anne Flipo. Compozitia parfumului se bazeaza pe trei trasee: un traseu Floral, un traseu Fructat si un traseu format din note gurmande\r\nFrumusetea care lumineaza si confera incredere. Frumusetea de a fi autentic. Frumusetea care emana fericire.', '-Note de varf: coacaze negre si Para;\r\n-Note de mijloc: stanjenel, iasomie si floare de portocal;\r\n-Note de baza: paciuli, boabe de tonka, vanilie si pralina.', 'femei', 280),
(15, 'Apa de Parfum Hugo Boss Femme', 'Hugo Boss Femme este un parfum floral-fructat, lansat in anul 2006. Radiant, bland si luminos, este destinat femeilor moderne.\r\nHugo Boss Femme este un parfum floral-fructat, lansat in anul 2006. Radiant, bland si luminos, este destinat femeilor moderne.', 'Note de varf:  Coacaze negre, frezie\r\nNote de mijloc: Crin, trandafir de Bulgaria\r\nNote de baza: Caise, chihlimbar, lemn de santal\r\n', 'femei', 150),
(16, 'Apa de Parfum Paco Rabanne Lady Million', 'Paco Rabanne s-a nascut pe data de 18 februarie 1934 in inima Spaniei Basce, in San Sebastian. Pe vremea cand era copil, el si familia sa au indurat in Spania bombele razboiului inainte de a se exila in Franta datorita afilieriilor politice. Inainte de a se muta in Franta, mama sa a lucrat pentru Balenciaga pe postul de croitoreasa sefa. In 1952, Paco Rabanne a studiat arhitectura si scoala de arte la Beaux din Paris, si a produs accesorii pentru couturierii timpului. Courreges, Cardin, Balenciaga si Givenchy l-au incurajat si i-au sustinut munca cumparandu-i schitele.', 'Note de varf: Neroli, lamaie de Amalfi, zmeura\r\nNote de mijloc: Iasomie, floare de portocal african, gardenie\r\nNote de baza: Paciuli, miere alba, ambra', 'femei', 300),
(17, 'Apa de Toaleta Dolce & Gabbana Light Blue', 'Parfumul ispititor Dolce & Gabbana Light Blue evoca mangaierea calda a vantului, in noptile de vara mediteraneene iar tonuri de citrice se amesteca cu note dulci de mosc, creand astfel un acord vesel.\r\nNotele de top sunt evidentiate de cedru sicilian revigorant care se imbina cu vitalitatea aromelor de mere si farmecul sincer al florilor albastre. In notele de mijloc isi fac aparitia aromele prospete ale bambusului cu un buchet feminin de iasomie si de trandafir alb.', 'Note de varf: Cedru , mar;\r\nNote de mijloc: Bambus, iasomie, trandafir alb;\r\nNote de baza: Chilimbar, mosc.', 'femei', 200),
(18, 'Apa de Parfum Calvin Klein Secret Obsession', 'Calvin Klein Inc. a fost fondata de bine-cunoscutul designer de moda Calvin Richard Klein. El si prietenul sau din copilarie Barry Schwartz (managerul afacerii) au fondat compania in 1968, care pe acea vreme era doar un magazin de paltoane in Hotelul York, in New York.\r\nA primit premiul Coty trei ani consecutiv. Genul de vanzare cu amanuntul in intreaga lume pe care Calvin Klein o realiza era estimata la mai mult de 600 milioane de dolari intr-un singur an, hainele fiind vandute prin intermediul a 12.000 magazine. Chiar si cu succesul avut de companie, in 1992 era pe punctul de a da faliment. ', 'Note de varf: Pruna, trandafir, nucsoara\r\nNote de mijloc: Tuberoza, iasomie, floare de portocala, orhidee, ylang-ylang\r\nNote de baza: Ambra, lemn de santal, vanilie, cedru, pelin, iris', 'femei', 100);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(37, 'usertest', 'usertest', 'usertest@gmail.com'),
(38, 'usertest2', 'usertest2', 'usertest2@gmail.com');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `comenzi`
--
ALTER TABLE `comenzi`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailUnic` (`email`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pentru tabele `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pentru tabele `comenzi`
--
ALTER TABLE `comenzi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pentru tabele `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
