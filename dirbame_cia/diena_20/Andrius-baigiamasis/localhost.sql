-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Aug 19, 2019 at 02:41 PM
-- Server version: 5.7.24-log
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `about_us`
--
CREATE DATABASE IF NOT EXISTS `about_us` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `about_us`;

-- --------------------------------------------------------

--
-- Table structure for table `parduotuves`
--

CREATE TABLE `parduotuves` (
  `id` int(11) NOT NULL,
  `Parduotuves_gatve` varchar(150) NOT NULL,
  `Lokacija` varchar(150) NOT NULL,
  `Darbo laiko pradzia` time NOT NULL,
  `darbo laiko pabaiga` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parduotuves`
--

INSERT INTO `parduotuves` (`id`, `Parduotuves_gatve`, `Lokacija`, `Darbo laiko pradzia`, `darbo laiko pabaiga`) VALUES
(1, 'Minties rato 22', '54.904265, 23.937370', '09:00:00', '21:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parduotuves`
--
ALTER TABLE `parduotuves`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parduotuves`
--
ALTER TABLE `parduotuves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `apie_imone`
--
CREATE DATABASE IF NOT EXISTS `apie_imone` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `apie_imone`;

-- --------------------------------------------------------

--
-- Table structure for table `parduotuves`
--

CREATE TABLE `parduotuves` (
  `id` int(11) NOT NULL,
  `nuo` time NOT NULL,
  `iki` time NOT NULL,
  `gatve` varchar(150) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parduotuves`
--

INSERT INTO `parduotuves` (`id`, `nuo`, `iki`, `gatve`, `lat`, `lng`) VALUES
(1, '09:00:00', '21:00:00', 'minties rato g', 54.904225, 23.937273);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parduotuves`
--
ALTER TABLE `parduotuves`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parduotuves`
--
ALTER TABLE `parduotuves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `product_info`
--
CREATE DATABASE IF NOT EXISTS `product_info` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `product_info`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(100) NOT NULL,
  `aprasymas` text NOT NULL,
  `nuotrauka` varchar(100) NOT NULL,
  `kaina` double NOT NULL,
  `ivertinimas` double NOT NULL DEFAULT '0',
  `kategorija` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pavadinimas`, `aprasymas`, `nuotrauka`, `kaina`, `ivertinimas`, `kategorija`) VALUES
(1, 'VYPE EPEN 3 MINI RINKINYS', 'Vype ePen 3 MINI rinkinys - elegantiškas ir efektyvus AIO tipo įrenginys, kurio veikimas paremtas keičiamomis e. skysčio kapsulėmis. Talpi, net 650mAh baterija leis mėgautis garu visą dieną, o prietaiso naudojimas itin paprastas. Kapsulės sukurtos taip, kad e. skystis nepatektų į burną, o išgaunamas skonis būtų ryškus. Kapsulės pakeitimas itin paprastas. Prietaiso valdymas paremtas vieno mygtuko sistema, kuris aktyvuoja kaitinimą bei leidžia įrenginį išjungti transportavimo metu. Mygtuko viršutinėje dalyje įmontuotas LED indikatorius informuoja apie baterijos įkrovos lygį naudojimo ar krovimo metu. 10 min nenaudojant įrenginio jis automatiškai išsijungia ir norint jį vėl naudoti reikia pakartotinai paspausti mygtuką 3 kartus. Vype ePen 3 lengvas ir patogus, jį malonu laikyti rankoje, jis neužima daug vietos kišenėje ar rankinėje.', 'VYPE-EPEN-3.jpg', 19.99, 0, 'Starter kit\'ai'),
(2, 'HCIGAR AKSO MINI RINKINYS', 'Hcigar Akso OS mini rinkinys - mažas, patogus ir kompaktiškas įrenginys, turintis 350mAh bateriją. Tai pirmasis Hcigar gamintojo įrenginys, naudojantis užpildomas kapsules, kurios viduje yra įmontuota keramikinė vielutė, pagaminta iš neorganinių medžiagų. Įrenginys neturi mygtuko, todėl naudojimasis šiuo įrenginiu jums primins tikrą cigaretę. LED indikatorius praneš apie baterijos įkrovos lygį naudojimo bei įkrovimo metu. Hcigar Akso OS mini rinkinys dėl savo kompaktiško dydžio taps jūsų kompanionu nesvarbu kur bebūtumėte ir leis mėgautis švelniu, bet skaniu garu.\r\n\r\n', 'hcigar-akso-mini.jpg', 29.99, 0, 'Starter kit\'ai'),
(3, 'HOTCIG KUBI MINI RINKINYS', 'HotCig KUBI mini rinkinys - kompaktiškas cigaro formos įrenginys, turintis net 550mAh talpos bateriją. Kubi veikimas paremtas užpildomomis e. skysčio kapsulėmis. Įrenginys neturi mygtuko, todėl naudojimasis Kubi primena įprastą cigaretę ar cigarą, kai kaitinimas aktyvuojamas traukimo metu. LED indikatorius praneš apie baterijos įkrovos lygį naudojimo bei įkrovimo metu. Net 1,7ml e. skysčio talpinančios kapsulės pildymas labai paprastas, garas sodrus, o išgaunamas skonis puikus. Puikiai tinka ir e. skysčiams su nikotino druska.\r\n\r\n', 'hotcig-cubi-mini.jpg', 25.99, 0, 'Starter kit\'ai'),
(38, 'BYPASS MODS THE KING V2', 'Naujausias kompanijos Bypass Mods kūrinys, tai vienas mažiausių mechaninių modų veikiančių su 18650 baterija - The King V2. Modo kontaktas pagamintas iš žalvario ir padengtas sidabru, siekiant išvengti oksidacijos ir pagerinti elektros srovės pralaidumą, o vientisas modo korpusas iš žalvario. Dėka \"talijos\" modas neslysta iš rankos, jį patogu naudoti. The King V2 dengtas milteliniais dažais, kurie sukuria išskirtinę išvaizdą bei yra ilgaamžiai. Inovatyvi kontaktų grupės konstrukcija leidžia palaikyti pastovų kontaktą su baterija, o elektros srovės grandinėje dalyvauja tik vienas sriegis. Modas suderinamas su kaitikliais iki 25mm diametro, o komplekte esantys 810 kandiklis ir mygtuko apdaila iš tokio pat rašto akrilo.', 'bypass-mods-the-king-v2.jpg', 89, 0, 'Mechaniniai'),
(39, 'PRIME SPECIAL EDITION', 'Prime - originali Kayfun patirtis šiolaikinėje garinimo rinkoje. Svoemesto Kayfun Prime - aukščiausios kokybės, tyrą cigaretinio traukimo (ang. MTL-Mouth To Lung) oro srautą turintis perrenkamas kaitiklis. Nors kaitilio dizainas ir patobulintas, jis išlaikė savo pirmtako Kayfun 5 patogumą bei funkcionalumą, tuo tarpu kaitiklio vidus suprojektuotas suteikti nepriekaištingą garą. Kaitiklis turi reguliuojamą oro srautą, kurį galima nustatyti 1-2mm ribose. Itin paprasta e. skysčio padavimo kontrolė. Kaitiklio užpildymas paprastas, o spiralės sudėjimas vienas patogiausių visoje rinkoje. Dėl nepriekaištingos vokiškos kokybės ir inovatyvių sprendimų Kayfun kaitiklius drąsiai galima vadinti vienais geriausių rinkoje. Special Edition versija nustebins išskirtine išvaizda. Visos elektros srovės grandinėje dalyvaujančios dalys dengtos auksu, pasirinktinai kitos dalys dengtos auksu arba smėliuotos stiklu. Nite DLC versija padengta deimanto savybes turinčios anglies sluoksniu.', 'prime-special-edition.jpg', 169.55, 0, 'MTL'),
(40, 'DEBESŲ LYGA SILIKONINIS ŽIEDAS', 'Dekoratyvinis silikoninis žiedas su \"Debesų Lygos\" logotipu.', 'debesu-lyga-silikoninis-ziedas-vape-ring.jpg', 1, 0, 'Gumytes'),
(41, 'SMOKERSTORE TAIFUN GT IV', 'Dažnai minimas, kaip geriausias rinkoje vienos spiralės perrenkamas kaitiklis, Taifun GT 4 - tai vokiška kokybė ir unikalūs inžineriniais sprendimai, kurie pakeis jūsų garinimo patirtį. Nepriekaištinga pagaminimo kokybė ir unikalus dizainas, kuris leidžia kaitiklį ne tik greit paruošti, bet išgauti labai efektyvų veikimą. Didelė vienos spiralės bazė, kurioje esantys 6 spiralės tvirtinimo taškai leis įdėti bet kokią turimą spiralę greit ir patogiai. Itin efektyvus e. skysčio padavimas reguliuojamas ir leis susitvarkyti su bet kokio klampumo e. skysčiais ar lengviau atleis vatos sudėjimo klaidas. Gausus dviejų krypčių ir atskirai reguliuojamas oro padavimas. Net 5ml e. skysčio talpa ir labai patogi pildymo sistema.', 'smokerstore-taifun-gt-iv.jpg', 149, 0, 'RTA'),
(42, 'TWELVE MONKEYS MANGABEYS', 'Kanadoje sukurtos Twelve Monkeys aromatizuotos Premium bazės pateikiamos 60ml talpos buteliukuose ir yra skirtos maišyti su NIC Shot ar kito stiprumo baze. Twelve Monkeys dar nuo 2014-ųjų garintojus džiugina itis ryškiais skoniais ir nepakartojamais jų receptais. Aukščiausia kokybė ir gausybė laimėtų apdovanojimų. Aukštas augalinio glicerino kiekis užtikrins švelnų ir gausų garą. Mangabeys - tiesiai iš tropikų! Sultingas ananasas, saldus, šiek tiek karstelėjęs guavos vaisiaus skonis ir sultingo mango aromatas.\n', 'twelve-monkeys-mangabeys.jpg', 23, 0, 'Premium klasės skysčiai'),
(43, 'DICODES DANI BOX 21700', 'Dicodes Dani Box 21700 tai aukštos kokybės baterijos modifikacija, užtikrinsinati nepriekaištingą veikimą ir ilgaamžiškumą. Sukurtas ir pagamintas Vokietijoje, vieną 20700/21700 bateriją naudojantis modas pasiekia iki 80W galią (iki 100W veikiant boost režimu). Tiksliausia spiralės temperatūros kontrolė, 4 skirtingi veikimo režimai, bei galimybė supaprastinti modo valdymą išjungiant nenaudojamus režimus. Modo valdymas paprastas ir patogus, visus pakeitimus galima atlikti viena ranka, o ryškiame OLED ekrane pateikiama visa reikiama nustatymų informacija, kaitiklio parametrai ar modo būsena. Modas labai kompaktiškas, pagamintas ir aukštos kokybės nerūdijančio plieno bei anoduoto aliuminio. Modo 510 kontaktas iš berilinės bronzos.', 'dicodes-dani-box-21700.jpg', 269.99, 0, 'Full size modai'),
(44, 'CAFE RACER DAILY GRIND', 'Cafe Racer Vape - amerikiečių kompanija, puoselėjanti garinimo tradicijas dar nuo 2007-ųjų. Cafe Racer produkcija gerai žinoma visame pasaulyje, yra laimėjusi daugybe apdovanojimų įvairiose kategorijose. Ilgametė patirtis, unikalūs receptai ir nepriekaištinga premium kokybė. Cafe Racer aromatizuota bazė pateikiama 60ml talpos buteliukuose, skirta maišyti su NIC Shot ar kito stiprumo 70/30 VG/PG baze. Daily Grind - tikros prancūziškos vanilinės latte skonis. Aromatinga kava praturtinta traškiais lazdyno riešutais, saldžiu irisiniu saldainiu, karamele ir švelniu vanilės aromatu. Naujausias Cafe Racer šeimos narys, kuris tarptautinėse parodose jau spėjo sužibėti, kaip geriausias desertinis skonis.', 'cafe-racer-daily-grind.jpg', 21.95, 0, 'Premium klasės skysčiai'),
(45, 'NASTY SALT BAD BLOOD', 'Populiariausi gerai pasaulyje žinomų Nasty Juice e. skysčių skoniai nuo šiol ir su nikotino druska. Tokia nikotino forma aprūpina organizmą didesniu nikotino kiekiu suteikdama kur kas švelnesnį gerklės smūgį (ang. Throat Hit). Bad Blood - saldžiarūgtis juodasis serbentas pagardintas lengva mėta sukuria gaivų ir energingą skonį.', 'nasty-salt-bad-blood.jpg', 5.49, 0, 'Nikotino druskos skysčiai'),
(46, 'NASTY SALT SLOW BLOW', 'Populiariausi gerai pasaulyje žinomų Nasty Juice e. skysčių skoniai nuo šiol ir su nikotino druska. Tokia nikotino forma aprūpina organizmą didesniu nikotino kiekiu suteikdama kur kas švelnesnį gerklės smūgį (ang. Throat Hit). Slow Blow - tropikais dvelkiantis sultingo ananaso skonis praturtintas šlakeliu žaliųjų citrinų limonadu.', 'nasty-salt-slow-blow.jpg', 5.49, 0, 'Nikotino druskos skysčiai'),
(47, 'NASTY SALT ASAP GRAPE', 'Populiariausi gerai pasaulyje žinomų Nasty Juice e. skysčių skoniai nuo šiol ir su nikotino druska. Tokia nikotino forma aprūpina organizmą didesniu nikotino kiekiu suteikdama kur kas švelnesnį gerklės smūgį (ang. Throat Hit). Asap Grape - saldžiarūgštės juodosios vynuogės pagardinos prisirpusiomis uogomis ir vaisiais, sukuria laukinį ir nevaržomą skonį.', 'nasty-salt-asap-grape.jpg', 5.49, 0, 'Nikotino druskos skysčiai'),
(48, 'POD SALT FUSIONS COLA WITH LIME', 'Pod Salt e. skysčiuose naudojama natūraliai randama tabako lapuose nikotino druska. Tokia nikotino forma aprūpina organizmą didesniu nikotino kiekiu suteikdama kur kas švelnesnį gerklės smūgį (ang. Throat Hit). Fusions serija leis pasimėgauti garsių premium e. skysčių skoniais.  Cola with Lime - pašėlęs burbuliuojančios kolos ir rūgštaus laimo derinys.', 'pod-salt-fusions-cola-with-lime.jpg', 5.49, 0, 'Nikotino druskos skysčiai'),
(49, 'POD SALT FUSIONS BUBBLE BLUE', 'Pod Salt e. skysčiuose naudojama natūraliai randama tabako lapuose nikotino druska. Tokia nikotino forma aprūpina organizmą didesniu nikotino kiekiu suteikdama kur kas švelnesnį gerklės smūgį (ang. Throat Hit). Fusions serija leis pasimėgauti garsių premium e. skysčių skoniais. Bubble Blue - nekartojamas kramtomosios gumos skonis, džiuginsiantis kiekvienu įtraukimu.', 'pod-salt-fusions-bubble-blue.jpg', 5.49, 0, 'Nikotino druskos skysčiai'),
(50, 'POD SALT FUSIONS SUMMER SYRUP', 'Pod Salt e. skysčiuose naudojama natūraliai randama tabako lapuose nikotino druska. Tokia nikotino forma aprūpina organizmą didesniu nikotino kiekiu suteikdama kur kas švelnesnį gerklės smūgį (ang. Throat Hit). Fusions serija leis pasimėgauti garsių premium e. skysčių skoniais. Bubble Blue - nekartojamas kramtomosios gumos skonis, džiuginsiantis kiekvienu įtraukimu.', 'pod-salt-fusions-summer-syrup.jpg', 5.49, 0, 'Nikotino druskos skysčiai'),
(51, 'VAPORESSO GEN', 'Vaporesso GEN - baterijos modifikacija kiekvienam. Tai puikiai subalansuotas funkcionalumo ir paprastumo derinys, kuris leis net ir nepatyrusiems garintojams mėgautis modo suteikiamais privalumais. Klasikinis dizainas patobulintas pasitelkiant šiek tiek moderno. Malonus neslystantis padengimas, modas solidus ir tvirtas, o sveria tik 107g. Naujoji AXON mikroschema dar paprastesnė valdyti, o aukščiausios kokybės komponentų ir pažangiausių technologijų derinys suteiks vartotojui dar daugiau galimybių. GEN veikia naudojant dvi 18650 standarto baterijas ir pasiekia iki 220W (vatų) galią. Modas palaiko begalę skirtingų veikimo režimų ir yra aprūpintas visomis reikiamomis apsauginėmis funkcijomis.', 'vaporesso-gen-baterijos-modifikacija.jpg', 60, 0, 'Full size modai'),
(52, 'VAPORESSO DRIZZLE FIT MINI RINKINYS', 'Vaporesso Drizzle Fit yra ko gero universaliausias įrenginys garinimo rinkoje. Jis leidžia rinktis tarp MTL (cigaretinio traukimo) ir DL (traukimo tiesiai į plaučius). Įrenginio „Omni” plokštė atpažįsta kaitinimo galvutės varžą ir pagal ją nustato tinkamiausią galią. Ilgo tarnavimo MINI EUC CCELL kaitinimo galvučių dizainas leis pasimėgauti nikotinu kartu su puikiu skoniu ir malonia garo konsistencija. Viršutinis e. skysčio pildymas leis ypač lengvai ir greitai užpildyti kaitiklį mėgiamu e. skysčiu. Viršuje esantį oro reguliavimą sumažinus, galėsite mėgautis cigaretiniu traukimu, o atvėrus plačiai - traukimu tiesiai į plaučius. Integruota 1400mAh baterija ir 1A greitas krovimas užtikrins galimybę mėgautis garu visą dieną be pertraukos.', 'vaporesso-drizzle-fit-mini-rinkinys.jpg', 29, 0, 'Starter kit\'ai');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--
-- Error reading structure for table product_info.product_info: #1146 - Table 'product_info.product_info' doesn't exist
-- Error reading data for table product_info.product_info: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `product_info`.`product_info`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `produkto_komentarai`
--

CREATE TABLE `produkto_komentarai` (
  `ID` int(11) NOT NULL,
  `Produktas` varchar(150) NOT NULL,
  `Username` varchar(150) NOT NULL,
  `Komentaras` text NOT NULL,
  `Ivertinimas` int(11) NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produkto_komentarai`
--

INSERT INTO `produkto_komentarai` (`ID`, `Produktas`, `Username`, `Komentaras`, `Ivertinimas`, `Data`) VALUES
(15, 'HOTCIG KUBI MINI RINKINYS', 'kabakaba', 'visai nieko', 5, '2019-08-14'),
(16, 'HCIGAR AKSO MINI RINKINYS', 'kabakaba', 'beleka', 3, '2019-08-14'),
(22, 'VYPE EPEN 3 MINI RINKINYS', 'kabakaba', 'neblogas', 5, '2019-08-15'),
(24, '', 'kabakaba', 'dega coilai', 2, '2019-08-18'),
(25, '', 'kabakaba', 'galetu geresnis but', 4, '2019-08-18'),
(26, 'PRIME SPECIAL EDITION', 'kabakaba', 'galejo geresnis but bet vistiek geras', 4, '2019-08-18'),
(27, 'BYPASS MODS THE KING V2', 'kabakaba', 'geriausias modas', 5, '2019-08-18'),
(28, '', 'kabakaba', 'prasta kokybe', 2, '2019-08-18'),
(29, 'DEBESŲ LYGA SILIKONINIS ŽIEDAS', 'kabakaba', 'prasta kokybe', 2, '2019-08-18'),
(30, 'DEBESŲ LYGA SILIKONINIS ŽIEDAS', 'kabakaba', 'geri', 5, '2019-08-18'),
(31, 'DEBESŲ LYGA SILIKONINIS ŽIEDAS', 'kabakaba', 'suplyso po pirmos sav...', 1, '2019-08-18'),
(32, 'SMOKERSTORE TAIFUN GT IV', 'kabakaba', 'kartais leakina', 4, '2019-08-18'),
(33, 'DICODES DANI BOX 21700', 'kabakaba', 'Idealus modas', 5, '2019-08-18'),
(34, 'DICODES DANI BOX 21700', 'kabakaba', 'Super', 5, '2019-08-18'),
(35, 'TWELVE MONKEYS MANGABEYS', 'kabakaba', 'skanus', 4, '2019-08-18'),
(36, 'CAFE RACER DAILY GRIND', 'kabakaba', 'slykstyne', 1, '2019-08-18'),
(37, 'NASTY SALT BAD BLOOD', 'kabakaba', 'geras', 4, '2019-08-19'),
(38, 'NASTY SALT SLOW BLOW', 'kabakaba', 'geriausias', 5, '2019-08-19'),
(39, 'NASTY SALT ASAP GRAPE', 'kabakaba', 'neblogas', 4, '2019-08-19'),
(40, 'NASTY SALT ASAP GRAPE', 'kabakaba', 'geras', 5, '2019-08-19'),
(41, 'NASTY SALT ASAP GRAPE', 'kabakaba', 'geras sitas', 5, '2019-08-19'),
(42, 'POD SALT FUSIONS COLA WITH LIME', 'kabakaba', 'geras', 5, '2019-08-19'),
(43, 'POD SALT FUSIONS BUBBLE BLUE', 'kabakaba', 'nekazka', 3, '2019-08-19'),
(44, 'POD SALT FUSIONS SUMMER SYRUP', 'kabakaba', 'geras', 4, '2019-08-19'),
(45, 'VAPORESSO GEN', 'kabakaba', 'lievas', 2, '2019-08-19'),
(46, 'VAPORESSO GEN', 'kabakaba', 'geras', 5, '2019-08-19'),
(47, 'CAFE RACER DAILY GRIND', 'kabakaba', 'geras', 5, '2019-08-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produkto_komentarai`
--
ALTER TABLE `produkto_komentarai`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `produkto_komentarai`
--
ALTER TABLE `produkto_komentarai`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- Database: `user_info`
--
CREATE DATABASE IF NOT EXISTS `user_info` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `user_info`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Username` varchar(150) NOT NULL,
  `Password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Email`, `Username`, `Password`) VALUES
(1, 'dsadsadsa@gmail.com', 'dasdsadsad', 'dasdsadsada'),
(2, 'andrius@gmail.com', 'andrius1234', 'andrius123'),
(3, 'andrius.tratulis@gmail.com', 'andrius44', '$2y$10$.6SGWNu6/s7et8Hya6A3M.2ErBTS/H8AHMpSlZI/d9dbq..o12f2e'),
(4, 'kaba@kaba.kab', 'kabakaba', '$2y$10$kdxdi4tJrretD0QB8AzX2.YRcyH3exj6/0l8yf7ruz70zGPITWpMm'),
(5, 'gabagaba@gmail.com', 'gabagaba', '$2y$10$Rx1z7DrU2OTOsc5x0id0nODKPWgEIJovsXIM1x9eze9Fy80BxA4Sm');

-- --------------------------------------------------------

--
-- Table structure for table `uzsakymai`
--

CREATE TABLE `uzsakymai` (
  `id` int(11) NOT NULL,
  `user` varchar(150) NOT NULL,
  `cookie` text NOT NULL,
  `data` date NOT NULL,
  `Miestas` varchar(150) NOT NULL,
  `Gatve` varchar(150) NOT NULL,
  `Vardas` varchar(150) NOT NULL,
  `Pavarde` varchar(150) NOT NULL,
  `Pastas` varchar(150) NOT NULL,
  `Bendra_kaina` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uzsakymai`
--

INSERT INTO `uzsakymai` (`id`, `user`, `cookie`, `data`, `Miestas`, `Gatve`, `Vardas`, `Pavarde`, `Pastas`, `Bendra_kaina`) VALUES
(1, 'kabakaba', 'BYPASS MODS THE KING V2;;;HCIGAR AKSO MINI RINKINYS;HOTCIG KUBI MINI RINKINYS;TWELVE MONKEYS MANGABEYS;', '2019-08-17', 'dasdsa', 'dasdsa', 'dasda', 'dasdas', 'kaba@kaba.kab', 167.98),
(2, 'kabakaba', 'VYPE EPEN 3 MINI RINKINYS;HCIGAR AKSO MINI RINKINYS;HOTCIG KUBI MINI RINKINYS;DEBESŲ LYGA SILIKONINIS ŽIEDAS;', '2019-08-18', 'Kaunas', 'Minties rato 22', 'Andrius ', 'Tratulis', 'kaba@kaba.kab', 76.97),
(5, 'kabakaba', ';;HOTCIG KUBI MINI RINKINYS;VYPE EPEN 3 MINI RINKINYS;;', '2019-08-18', 'Kaunas', 'velniu g 69', 'Andrelis', 'Pavardenis', 'kaba@kaba.kab', 45.98),
(6, 'kabakaba', ';;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;BYPASS MODS THE KING V2;PRIME SPECIAL EDITION;DEBESŲ LYGA SILIKONINIS ŽIEDAS;', '2019-08-19', 'dasda', 'dadas', 'sasaasas', 'assaas', 'kaba@kaba.kab', 259.55),
(7, 'gabagaba', ';;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;VYPE EPEN 3 MINI RINKINYS;PRIME SPECIAL EDITION;BYPASS MODS THE KING V2;', '2019-08-19', 'kaunas', 'velnio g', 'vardens', 'pavardens', 'gabagaba@gmail.com', 278.54),
(8, 'anonimas', ';;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;VYPE EPEN 3 MINI RINKINYS;', '2019-08-19', 'dsadas', 'dasdas', 'a', 'waasd', 'dasdasdsa@gmail.com', 19.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `uzsakymai`
--
ALTER TABLE `uzsakymai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uzsakymai`
--
ALTER TABLE `uzsakymai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
