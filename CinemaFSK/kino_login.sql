-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 07:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kino_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `filmovi`
--

CREATE TABLE `filmovi` (
  `id_film` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `sinopsis` text NOT NULL,
  `naziv_filma` varchar(50) NOT NULL,
  `tip` varchar(50) NOT NULL,
  `reditelj` varchar(20) NOT NULL,
  `uloge` varchar(50) NOT NULL,
  `trajanje` varchar(20) NOT NULL,
  `termini` varchar(20) NOT NULL,
  `slika` varchar(50) DEFAULT NULL,
  `triler` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filmovi`
--

INSERT INTO `filmovi` (`id_film`, `status`, `sinopsis`, `naziv_filma`, `tip`, `reditelj`, `uloge`, `trajanje`, `termini`, `slika`, `triler`) VALUES
(8, 'sada', 'Film prati strogog CIA operativca JJ-a (Dave Bautista) koji je degradiran i poslan u tajnu misiju da zaštiti obitelj devetogodišnje djevojčice Sophie (Chloe Coleman), koja mi nikako taj posao ne olakšava. Kada Sophie otkrije skrivene kamere u svom stanu, upotrijebit će svoje vještine da locira tko ih nadzire. U zamjenu da ne otkrije tko je JJ, Sophie ga zamoli da provodi vrijeme s njom i nauči je da bude špijunka. Unatoč oklijevanju, JJ shvati da se ne može oduprijeti njezinu šarmu...', 'Otkrila sam špijuna', 'Akcija, komedija', 'Peter Segal', 'Dave Bautista, Kristen Schaal, Ken Jeong...', '102min', '14:30 16:30 20:30', 'http://cinemacity.ba/upload/mala_1564_0_WEB.jpg', 'https://youtu.be/Sqfdmn-KPcc'),
(10, 'sada', 'Najbolje prijateljice Mia i Mel žive život iz snova vodeći vlastitu kozmetičku kompaniju koju su izgradile od početka. Nažalost, zapadaju u financijske poteškoće, a iz tih problema mogu se izvući ukoliko pristanu da ih otkupi zloglasni mogul kozmetičke industrije Claire Luna. Nova poslovna ponuda staviti će na kušnju dugogodišnje prijateljstvo Mije i Mel, a svijet ljepote više neće bit tako lijep.', 'Kao šef', 'Komedija', 'Miguel Arteta', 'Rose Byrne, Tiffany Haddish, Salma Hayek...', '83min', '13:30 15:30 19:30', 'http://cinemacity.ba/upload/mala_1556_0_web.jpg', ''),
(11, 'sada', 'Snimljen prema istoimenom bestseler stripu film Bloodshot prati Rayja Garrisona, nedavno poginulog vojnika, kojeg je korporacija Rising Spirit Technologies, uz pomoć posebne nanotehnologije – uskrsnula i učinila superjunakom. S vojskom nanotehnologije u svojim venama on postaje nezaustavljiva sila snage – jači nego ikada i s mogućnošću samo-izlječivanja. Ali kontrolirajući njegovo tijelo, korporacija je preuzela i njegov um i sjećanje. Ray više ne zna što je stvarno, a što nije - ali na misiji je da otkrije...', 'Bloodshot', 'Akcija, drama, SF', 'Dave Wilson', 'Vin Diesel, Guy Pearce, Sam Heughan...', '110min', '11:30 14:30 20:30 22', 'http://cinemacity.ba/upload/mala_1567_0_web.jpg', ''),
(12, 'sada', 'Joan (Lesley Manville) i Tom (Liam Neeson) su u braku godinama.\r\nU njihovoj vezi osjeća se lakoća koja nastaje iz života koji su proveli zajedno i velike ljubavi koja se ogleda u nježnosti i humoru koji dijele. Kada Joani otkriju rak dojke, tok njenog liječenja počinje da baca sjenku na njihovu vezu, pošto počinju da se suočavaju sa izazovima koji prijeteći stoje pred njima i pokazuju u šta bi život mogao da se pretvori ukoliko bi se nekome od njih nešto dogodilo. Ovo je priča o ljubavi, preživljavanju i epskim pitanjima koje život postavlja svakom od nas...', 'Naša ljubav', 'Romantična drama', 'Lisa Barros D Sa, Gl', 'Liam Neeson, Lesley Manville, Amit Shah...', '93min', '12:00 14:00 20:00', 'http://cinemacity.ba/upload/mala_1569_0_web.jpg', ''),
(15, 'uskoro', 'Kad kineski car izda dekret po kojem jedan muškarac u svakoj obitelji mora služiti carskoj vojsci kako bi obranili zemlju od sjevernih napadača, Hua Mulan, najstarija kćerka časnog ratnika, istupa umjesto svog bolesnog oca. Maskirajući se kao muškarac, Hua Jun prolazi iskušenja na svakom koraku svog puta te mora naučiti iskoristiti svoju unutarnju snagu i prihvatiti svoj istinski potencijal. Na ovom epskom putovanju ona će se transformirati u časnu ratnicu i steći poštovanje zahvalne nacije... ali i ponosnog oca.', 'MULAN', 'Akcija, avantura, drama', 'Niki Caro', 'Yifei Liu, Donnie Yen, Jet Li...', 'TBA min', '', 'http://cinemacity.ba/upload/mala_1572_0_web.jpg', ''),
(16, 'uskoro', 'Jeremy Camp iza sebe ima dvanaestogodišnje muzičko iskustvo i brojna priznanja i ostvarenja, preko četiri milijuna prodanih albuma, tri nominacije za American Music Awards i nominaciju za Grammy, a nastupao je u više od trideset zemalja svijeta. Ovo je priča nastala na temelju njegove intimne ispovijesti u knjizi I Still Believe u kojoj je s čitateljima podijelio neka od životnih iskustava. Njegova supruga umrla je od raka kad je imao dvadeset i jednu godinu. Teški životni trenuci i patnja dio su njegovog života koji ga je na neki način oblikovao. O patnjama ne šuti, nego pokušava i drugima koji prolaze kroz slične situacije pomoći, ohrabriti ih i poručiti im da je Krist čovjekov supatnik te da razumije svaku bol koju čovjek može doživjeti', 'Još uvijek vjerujem', 'Romantična muzička drama', 'Andrew Erwin, Jon Er', 'Britt Robertson, Melissa Roxburgh, K.J. Apa...', '115min', '', 'http://cinemacity.ba/upload/mala_1577_0_web.jpg', ''),
(17, 'uskoro', 'Nakon smrtonosnih događaja koji su se odigrali, porodica Abot prinuđena je da se suoči sa strahotama spoljašnjeg svijeta, dok njeni članovi nastavljaju borbu za opstanak u tišini. Prisiljeni da se upuste u nepoznato, brzo shvataju da stvorenja koja ih love ukoliko ispuste zvuk nisu jedina prijetnja koja vreba...', 'TIHO MJESTO 2', 'Horor,triler', 'John Krasinski', 'Emily Blunt, Cillian Murphy, Noah Jupe..', '97min', '', 'http://cinemacity.ba/upload/mala_1565_0_web.jpg', ''),
(18, 'uskoro', 'Ovog proljeća otkrijte koliko daleko biste otišli da saznate gdje pripadate. Naš obožavani i pomalo vragolasti Petar Zecimir ovoga puta nalazi se pred najvećim izazovom u kojem će morati napokon odgovoriti na pitanje – gdje zaista pripada.\r\nNeko vrijeme je prošlo otkako su Petar Zecimir i Tomica zakopali ratnu sjekiru, barem prividno. Biba, Tomica i zečevi osnovali su improvizovanu porodicu ali pored svih nastojanja, Petar nikako da se riješi svoje nevaljale reputacije. Osjeća se neprihvaćeno i neshvaćeno zbog čega odluči napustiti sigurnost vlastitog vrta i potražiti novu avanturu negdje daleko u gradu. Zecimir sada otkriva cijeli novi svijet u kojemu se njegovi nestašluci cijene. No, kao što to često biva, čini se da stvari nisu onakvima kakvim se čine. Svojom nesmotrenošću dovodi svoju porodicu u opasnost i sada mora odlučiti, kakav zec želi biti.', 'PETAR ZECIMIR: SKOK ', 'Animirana porodična komedija', 'Will Gluck', 'Margot Robbie, Elizabeth Debicki, Rose Byrne...', '85min', '', 'http://cinemacity.ba/upload/mala_1578_0_web.jpg', ''),
(19, 'uskoro', 'Anna Kendrick (Ana Štajdohar) i Justin Timberlake (Marko Mandić) vraćaju se u fantastičnom nastavku animiranog mužičkog filmskog hita iz 2016. godine: TROLOVI – SVJETSKA TURNEJA. U avanturi koja će ih odvesti daleko izvan granica poznatog, Maka i Zakeralo će otkriti da su oni samo jedno od šest različitih trolovskih plemena, koje živi u jednoj od šest različitih teritorija i posvećeni jednom od šest muzičkih pravaca: fanku, roku, kantri muzici, tehno muzici, klasičnoj i pop roku. Sada će njihov svijet postati mnogo veći i mnogo, mnogo bučniji...', 'Trolovi : svjetska turneja', 'Animirana avantura,komedija', 'Walt Dohrn, David P.', 'Glasovi: Ana Štajdohar, Marko Mandić, Iva Stefanov', '86min', '', 'http://cinemacity.ba/upload/mala_1568_0_web.jpg', ''),
(20, 'uskoro', 'Piet Koslow, reformirani kriminalac i bivši specijalac radi za FBI kako bi se infiltrirao u krugove trgovaca drogom u New Yorku. Nakon što isporuka droge u kojoj sudjeluje krene po zlu, suočava se s najtežim zadatkom u svom životu - mora se infiltrirati u najozloglašeniji zatvor... Jedna prilika i tri sekunde da izvuče živu glavu... Hoće li biti dovoljne?...', 'Doušnik', 'Kriminalistička drama,triler', 'Andrea Di Stefano', ' Ana de Armas, Joel Kinnaman, Rosamund Pike...', '113min', '', 'http://cinemacity.ba/upload/mala_1571_0_web.jpg', ''),
(21, 'uskoro', 'Priča o 7 prinčeva koji su pretvoreni u patuljke. Zadatak im je pronaći crvene cipele kako bi razbili čaroliju te ponovo postali pravi prinčevi. No, ovaj zadatak uopće neće biti lak...', 'Crvencipelica i 7 patuljaka', 'Animirana avantura', 'Sung Ho Hong', 'Glasovi: Doris Pinčić Rogoznica, Marko Makovičić', '92min', '', 'http://cinemacity.ba/upload/mala_1576_0_WEB.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `rezervacije`
--

CREATE TABLE `rezervacije` (
  `id_rezervacije` int(11) NOT NULL,
  `naziv_filma` varchar(50) NOT NULL,
  `datum` date NOT NULL,
  `termin` time NOT NULL,
  `br_karata` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rezervacije`
--

INSERT INTO `rezervacije` (`id_rezervacije`, `naziv_filma`, `datum`, `termin`, `br_karata`, `id_user`) VALUES
(2, 'Kao šef', '2020-06-10', '15:30:00', 3, 3),
(3, 'Naša ljubav', '2020-07-03', '13:44:00', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'admin', 'trebinjacn@gmail.com', 'admin', 'e00cf25ad42683b3df678c61f42c6bda'),
(2, 'adminadmin', 'edinamuminovic@hotmail.com', 'admin', '1844156d4166d94387f1a4ad031ca5fa'),
(3, 'user1', 'user1@gmail.com', 'user', '24c9e15e52afc47c225b757e7bee1f9d'),
(5, 'user', 'user2@gmail.com', 'user', '7e58d63b60197ceb55a1c487989a3720'),
(6, 'edina', 'edinamuminovic@hotmail.com', 'user', '863a5dc72d5c63a72e5acc359592c71a'),
(7, 'nedzla', 'nedzlatrebinjac@hotmail.com', 'user', '2bcc17b5dbb4be9dc566e5703d764297'),
(8, 'dini', 'dini@com.ba', 'user', '147c87eb0fd811b1607863cdbeb8a1a5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filmovi`
--
ALTER TABLE `filmovi`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `rezervacije`
--
ALTER TABLE `rezervacije`
  ADD PRIMARY KEY (`id_rezervacije`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filmovi`
--
ALTER TABLE `filmovi`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `rezervacije`
--
ALTER TABLE `rezervacije`
  MODIFY `id_rezervacije` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rezervacije`
--
ALTER TABLE `rezervacije`
  ADD CONSTRAINT `rezervacije_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
