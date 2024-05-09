-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Lis 2022, 03:51
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `miman`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gry`
--

CREATE TABLE `gry` (
  `id_gry` int(11) NOT NULL,
  `nazwa` varchar(128) COLLATE utf8_polish_ci DEFAULT NULL,
  `link` varchar(256) COLLATE utf8_polish_ci DEFAULT NULL,
  `gatunek` varchar(64) COLLATE utf8_polish_ci DEFAULT NULL,
  `ikonka` varchar(256) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `gry`
--

INSERT INTO `gry` (`id_gry`, `nazwa`, `link`, `gatunek`, `ikonka`) VALUES
(1, 'Soldier Attack 1', '<div><script src=https://cdn.htmlgames.com/embed.js?game=SoldierAttack1&amp;bgcolor=white></script></div>', 'action', 'https://www.htmlgames.com/uploaded/game/thumb200/soldierattack1200.jpg'),
(2, 'Halloween Mahjong', '<div><script src=https://cdn.htmlgames.com/embed.js?game=HalloweenMahjong&amp;bgcolor=white></script></div>', 'mahjong', 'https://www.htmlgames.com/uploaded/game/thumb200/halloweenmahjong200.jpg'),
(3, 'Easter Pile', '<div><script src=https://cdn.htmlgames.com/embed.js?game=EasterPile&amp;bgcolor=white></script></div>', 'mahjong', 'https://www.htmlgames.com/uploaded/game/thumb200/easterpile200.jpg'),
(4, 'Dark Mahjong Connect', '<div><script src=https://cdn.htmlgames.com/embed.js?game=DarkMahjongConnect&amp;bgcolor=white></script></div>', 'mahjong', 'https://www.htmlgames.com/uploaded/game/thumb200/darkmahjongconnect200.jpg'),
(5, 'Christmas Connect', '<div><script src=https://cdn.htmlgames.com/embed.js?game=ChristmasConnect&amp;bgcolor=white></script></div>', 'mahjong', 'https://www.htmlgames.com/uploaded/game/thumb200/christmasconnect200.jpg'),
(6, 'Spite and Malice Extreme', '<div><script src=https://cdn.htmlgames.com/embed.js?game=SpiteAndMaliceExtreme&amp;bgcolor=white></script></div>', 'solitaire', 'https://www.htmlgames.com/uploaded/game/thumb200/spiteandmaliceextreme200.jpg'),
(7, 'Ace of Spades', '<div><script src=https://cdn.htmlgames.com/embed.js?game=AceOfSpades&amp;bgcolor=white></script></div>', 'solitaire', 'https://www.htmlgames.com/uploaded/game/thumb200/aceofspades200.jpg'),
(8, 'Spider Solitaire', '<div><script src=https://cdn.htmlgames.com/embed.js?game=SpiderSolitaire&amp;bgcolor=white></script></div>', 'solitaire', 'https://www.htmlgames.com/uploaded/game/thumb200/spidersolitaire200.jpg'),
(9, 'Hearts ', '<div><script src=https://cdn.htmlgames.com/embed.js?game=Hearts&amp;bgcolor=white></script></div>', 'solitaire', 'https://www.htmlgames.com/uploaded/game/thumb200/hearts200.jpg'),
(10, 'Jungle Jump', '<div><script src=https://cdn.htmlgames.com/embed.js?game=JungleJump&amp;bgcolor=white></script></div>', 'action', 'https://www.htmlgames.com/uploaded/game/thumb200/junglejump200.jpg'),
(11, 'Daily Futoshiki', '<div><script src=https://cdn.htmlgames.com/embed.js?game=DailyFutoshiki&amp;bgcolor=white></script></div>', 'puzzle', 'https://www.htmlgames.com/uploaded/game/thumb200/dailyfutoshiki200.jpg'),
(12, 'Hashiwokakero', '<div><script src=https://cdn.htmlgames.com/embed.js?game=Hashiwokakero&amp;bgcolor=white></script></div>', 'puzzle', 'https://www.htmlgames.com/uploaded/game/thumb200/hashiwokakero200.jpg'),
(13, 'Daily Loop', '<div><script src=https://cdn.htmlgames.com/embed.js?game=DailyLoop&amp;bgcolor=white></script></div>', 'puzzle', 'https://www.htmlgames.com/uploaded/game/thumb200/dailyloop200.jpg'),
(14, 'Daily Killer Sudoku', '<div><script src=https://cdn.htmlgames.com/embed.js?game=DailyKillerSudoku&amp;bgcolor=white></script></div>', 'puzzle', 'https://www.htmlgames.com/uploaded/game/thumb200/dailykillersudoku200.jpg'),
(15, 'Hidden Spots - Indonesia', '<div><script src=https://cdn.htmlgames.com/embed.js?game=HiddenSpotsIndonesia&amp;bgcolor=white></script></div>', 'detective', 'https://www.htmlgames.com/uploaded/game/thumb200/hiddenspotsindonesia200.jpg'),
(16, 'Amsterdam Hidden Objects', '<div><script src=https://cdn.htmlgames.com/embed.js?game=AmsterdamHiddenObjects&amp;bgcolor=white></script></div>', 'detective', 'https://www.htmlgames.com/uploaded/game/thumb200/amsterdamhiddenobjects200.jpg'),
(17, 'Sydney Hidden Objects', '<div><script src=https://cdn.htmlgames.com/embed.js?game=SydneyHiddenObjects&amp;bgcolor=white></script></div>', 'detective', 'https://www.htmlgames.com/uploaded/game/thumb200/sydneyhiddenobjects200.jpg'),
(18, 'Hidden Spots - Jewelry', '<div><script src=https://cdn.htmlgames.com/embed.js?game=HiddenSpotsJewelry&amp;bgcolor=white></script></div>', 'detective', 'https://www.htmlgames.com/uploaded/game/thumb200/hiddenspots-jewelry200.jpg'),
(19, 'Soldier Attack 2', '<div><script src=https://cdn.htmlgames.com/embed.js?game=SoldierAttack2&amp;bgcolor=white></script></div>', 'action', 'https://www.htmlgames.com/uploaded/game/thumb200/soldierattack2200.jpg'),
(20, 'Soldier Attack 3', '<div><script src=https://cdn.htmlgames.com/embed.js?game=SoldierAttack3&amp;bgcolor=white></script></div>', 'action', 'https://www.htmlgames.com/uploaded/game/thumb200/soldierattack3-200.jpg'),
(21, 'Timber Guy', '<iframe src=\"http://wanted5games.com/games/html5/timber-guy-new-en-s-iga-cloud/index.html?pub=10\" name=\"cloudgames-com\" width=\"500\" height=\"490\" frameborder=\"0\" scrolling=\"no\"></iframe>', 'reaction', 'https://cdn.wanted5games.com/game-img/timber-guy.png'),
(22, 'Among Us Sling', '<iframe src=\"http://wanted5games.com/games/html5/among-us-sling-new-en-s-iga-cloud/index.html?pub=10\" name=\"cloudgames-com\" width=\"500\" height=\"700\" frameborder=\"0\" scrolling=\"no\"></iframe>', 'sus skill', 'https://cdn.wanted5games.com/game-img/among-us-sling.png'),
(23, 'Elsa Kiss Jack', '<iframe src=\"http://wanted5games.com/games/html5/elsa-kiss-jack-new-en-s-iga-cloud/index.html?pub=10\" name=\"cloudgames-com\" width=\"330\" height=\"560\" frameborder=\"0\" scrolling=\"no\"></iframe>', 'kissing', 'https://cdn.wanted5games.com/game-img/5323.jpg'),
(24, 'Reaction', '<iframe src=\"https://play.idevgames.co.uk/embed/reaction\" name=\"cloudgames-com\" width=\"330\" height=\"560\" frameborder=\"0\" scrolling=\"no\"></iframe>', 'reaction', 'https://i.ibb.co/nmsHs1R/image.png'),
(25, 'Ghost warrior', '<iframe src=\"https://www.crazygames.pl/embed/ghost-walker\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'action ninja', 'https://www5.minijuegosgratis.com/v3/games/thumbnails/243338_7_sq.jpg'),
(27, 'Capybara clicker', '<iframe src=\"https://www.crazygames.pl/embed/capybara-clicker\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'clicker income', 'https://i.ibb.co/KNLrG0s/obraz-2022-11-23-001313086.png'),
(28, 'Getting over it', '<iframe src=\"https://www.crazygames.pl/embed/getting-over-it\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'action platform', 'https://i.ibb.co/VQz7g88/obraz-2022-11-23-000738618.png'),
(29, 'Stickman Battle Fight Warriors', '<iframe src=\"https://www.crazygames.pl/embed/stickman-supreme-duelist-2\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'action stickman skill', 'https://i.ibb.co/wrYcVQQ/image.png'),
(30, 'Time Shooter 2', '<iframe src=\"https://www.crazygames.pl/embed/time-shooter-2 style=width: 100%; height: 100%; frameborder=0></iframe>', 'shooter fps', 'https://avatars.mds.yandex.net/get-games/3006389/2a0000017e4142916be6f4f6ccbf7f7a1a7c/default170x170'),
(31, 'Turbo Dismouting', '<iframe src=\"https://www.crazygames.pl/embed/turbo-dismounting\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'stickman skill casual', 'https://img.kbhgames.com/2018/09/Turbo-Dismounting.jpg'),
(32, 'Crazy Flips 3D', '<iframe src=\"https://www.crazygames.pl/embed/crazy-flips-3d\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'sport jump jumping', 'https://i.ibb.co/558kFQ9/image.png'),
(33, 'Bloxd.io', '<iframe src=\"https://www.crazygames.pl/embed/bloxdhop-io\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'io adventure multiplayer \r\n online minecraft', 'https://i.ibb.co/pQYdK2q/image.png'),
(34, 'Snake.io', '<iframe src=\"https://www.crazygames.pl/embed/snake-io\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'io snake skill', 'https://m.snake.io/assets/contact_us/app_icon_snakeio.png'),
(35, 'Smash Karts', '<iframe src=\"https://www.crazygames.pl/embed/smash-karts\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'io multiplayer skill racing', 'https://img.poki.com/cdn-cgi/image/quality=78,width=600,height=600,fit=cover,f=auto/9c9e529b14731be871b07b89660bbc2a.png'),
(36, 'Zombs Royale (ZombsRoyale.io)', '<iframe src=\"https://www.crazygames.pl/embed/zombsroyaleio\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'io battle royale shooter multiplayer', 'https://img.poki.com/cdn-cgi/image/quality=78,width=600,height=600,fit=cover,f=auto/f123d546-42d3-4607-8bfd-2fbb7c45d6e7.png'),
(37, '1v1 Battle', '<iframe src=\"https://www.crazygames.pl/embed/1v1battle-build-fight-simulator\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'action shooter fortnite mulitplayer skill', 'https://i.ibb.co/dtxsHrq/image.png'),
(38, 'Save the Hostages', '<iframe src=\"https://www.crazygames.pl/embed/save-the-hostages\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'shooter fps 3D gun zombie', 'https://i.ibb.co/92ckPMt/image.png'),
(39, 'Gulag', '<iframe src=\"https://www.crazygames.pl/embed/gulag\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'shooter fps 3D gun survive', 'https://i.ibb.co/0J6V7z1/obraz-2022-11-23-001147500.png'),
(40, 'The Rooms: Escape Challenge', '<iframe src=\"https://www.crazygames.pl/embed/the-rooms-escape-challenge\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'puzzle skill escape', 'https://i.ibb.co/Hp27JVZ/image.png'),
(41, 'Flip Bottle', '<iframe src=\"https://www.crazygames.pl/embed/flip-bottle\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'flip onebutton action', 'https://i.ibb.co/m5TTjMD/image.png'),
(42, 'Hobo', '<iframe src=\"https://www.crazygames.pl/embed/hobo\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'fight action skill fighting', 'https://i.ibb.co/yhb39vL/image.png'),
(43, 'Archery Master', '<iframe src=\"https://www.crazygames.pl/embed/archery-master\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'archery skill sport', 'https://play-lh.googleusercontent.com/z5bQsrP0vYpb2aMb5oIHGPNreMpcVTZ8tyN1C-oo4_S9GXoXKH0CE4bQh1iKNwtsds04'),
(44, 'Kirka.io', '<iframe src=\"https://www.crazygames.com/embed/kirka-io\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'io strzelanie skill fps', 'https://static-cdn.jtvnw.net/ttv-boxart/356609813_IGDB-272x380.jpg'),
(45, 'Sonic The Hedgehog', '<iframe src=\"https://funhtml5games.com?embed=sonic\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'Platformer Action Sonic', 'https://play-lh.googleusercontent.com/zS5PLmUQ-52nkQZdrDDmue4eMrso8x9GiV3kCTbyx5Ol4olXASU7PoWBAuNGBSeQNxY'),
(46, 'Riot Escape', '<iframe src=\"https://www.crazygames.com/embed/riot-escape\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'action riot escape running', 'https://play-lh.googleusercontent.com/RZrI3q1A9sb5kuIuPJDRKY9icODP7xDdIKziY7SlqGCOhW2cYPpQVJvQGgS_YbIVdes'),
(47, 'Hide N Seek', '<iframe src=\"https://www.crazygames.com/embed/hide-n-seek\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'casual simulation', 'https://i1.silvergames.com/j/b/hide-n-seek-3d.jpg'),
(48, 'Time Control!', '<iframe src=\"https://www.crazygames.com/embed/time-control\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'casual avoid skill', 'https://play-lh.googleusercontent.com/kW0eSKkCa69sKtbP_XgWdUGcL-A1xhbz-eObLkOXEmKPeM4TmyDXUCZ7P3_52j37F8o'),
(49, 'Ninja Hands', '<iframe src=\"https://www.crazygames.com/embed/ninja-hands\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'action ninja skill', 'https://play-lh.googleusercontent.com/6nrAsmf7t-kyJDVsxWIf-_gOXk1vCXKGDS6N-e43WsSCihHHG5tbBOy-NKp2XhWMxTk'),
(50, 'Open 100 Doors', '<iframe src=\"https://www.crazygames.com/embed/open-100-doors\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'puzzle skill escape', 'https://play-lh.googleusercontent.com/7PaiAJlm0arDGdVNDvyvtXq1nzyXw5f1cr6GJiX5670IZt8mDVloFrrmX9CWYERx_A'),
(51, 'TNTcraft', '<iframe src=\"https://www.crazygames.com/embed/tntcraft\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'action minecraft coop bomberman', 'https://i.ibb.co/M1KYYNy/image.png'),
(52, 'Crazy Drift', '<iframe src=\"https://www.crazygames.com/embed/crazy-drift\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'racing skill drift avoid driving', 'https://play-lh.googleusercontent.com/-HP-SjdvMqyE-VtaB26ZgKho-_Dxy_77kiIUQ7Hj3yrsMMoxacaqIxXyoAr5I5JQcMQ'),
(53, 'Pencil Rush', '<iframe src=\"https://www.crazygames.com/embed/pencil-rush\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'casual avoid skill', 'https://play-lh.googleusercontent.com/zLI26Q43lVq1h2Hcon1srXBlD-h0ZtWC3Y9PR9V1kmJgGWY4z3DkizP9j-C4JxQgtK4'),
(54, 'Computer Repair', '<iframe src=\"https://www.crazygames.com/embed/computer-repair\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'casual simulation skill', 'https://i.ibb.co/BCq8280/image.png'),
(55, 'Wood Farmer', '<iframe src=\"https://www.crazygames.com/embed/wood-farmer\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'casual buliding', 'https://play-lh.googleusercontent.com/jEepymla__s73QrVgpCohujMOrp5mv1vWLcS5fH0WcHKXTAtxG2rn296zZd30E3-etQ'),
(56, 'Backwoods', '<iframe src=\"https://www.crazygames.com/embed/backwoods\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'horror skill action dark', 'https://i.ibb.co/qkZtk76/image.png'),
(57, 'TNTcraft', '<iframe src=\"https://www.crazygames.com/embed/tntcraft\" style=width: 100%; height: 100%; frameborder=0></iframe>', 'action minecraft coop bomberman', 'https://i.ibb.co/M1KYYNy/image.png'),
(58, 'Forward Assault Remix', '<iframe src=\"https://www.crazygames.pl/embed/forward-assault\"  style=width: 100%; height: 100%; frameborder=0></iframe>', 'shooting skill multiplayer fps', 'https://play-lh.googleusercontent.com/UC4ccL49S4KGwwrJkcbPk7ImIecyi4QmXyBTmKINgWeYY526GLlsIrUbBTyc3JfK1hc');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komentarze`
--

CREATE TABLE `komentarze` (
  `id_komentarza` int(11) NOT NULL,
  `id_gry` int(11) DEFAULT NULL,
  `id_usera` int(11) DEFAULT NULL,
  `komentarz` varchar(256) NOT NULL,
  `ilosc_lajkow` int(11) DEFAULT NULL,
  `data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `komentarze`
--

INSERT INTO `komentarze` (`id_komentarza`, `id_gry`, `id_usera`, `komentarz`, `ilosc_lajkow`, `data`) VALUES
(1, 44, 21, 'Fajne', 0, '2022-11-27 03:18:17'),
(2, 44, 20, 'Giga spoko', 0, '2022-11-16 03:17:20'),
(3, 44, 20, 'Giga spoko', 0, '2022-11-28 03:17:23'),
(4, 44, 20, 'Giga spoko', 0, '2022-11-14 03:17:51'),
(5, 44, 21, 'Ale gówno XDD!', 0, '2022-11-12 03:17:48'),
(6, 45, 2, 'CO JEST ALE FAJNA GRA!!', 0, '2022-11-02 03:17:46'),
(7, 45, 2, 'CO JEST ALE FA', 0, '2022-11-08 03:17:44'),
(8, 45, 2, 'CO JES', 0, '2022-11-14 03:17:26'),
(9, 45, 2, 'Łot', 0, '2022-11-22 03:17:42'),
(10, 45, 2, 'CO JEST ALE FAJNA GRA!!', 0, '2022-11-27 03:17:53'),
(11, 56, 1, 'O kurde', 0, '2022-11-02 03:17:40'),
(12, 56, 1, 'dziala', 0, '2022-11-01 03:17:33'),
(13, 56, 1, 'komentarz', 0, '2022-11-16 03:17:35'),
(14, 56, 1, 'jou', 0, '2022-11-21 03:17:38'),
(15, 56, 1, 'dffsad', 0, '2022-11-02 03:17:55'),
(16, 56, 1, 'Łot', 0, '2022-11-07 03:17:11'),
(17, 44, 1, 'komentarz', 0, '2022-11-25 03:24:02'),
(18, 44, 1, 'dsada', 0, '2022-11-25 03:24:28'),
(19, 44, 1, 'lets goooooooo', 0, '2022-11-25 03:25:15'),
(20, 44, 1, 'ads', 0, '2022-11-25 03:25:59'),
(21, 44, 1, 'gfd', 0, '2022-11-25 03:27:25'),
(22, 57, 1, 'Super gra', 0, '2022-11-25 03:36:35'),
(23, 37, 21, 'Fajna gra polecam z rodzinką!', 0, '2022-11-25 03:43:37'),
(24, 37, 21, 'Spoko nawet!', 0, '2022-11-25 03:47:10'),
(25, 37, 21, 'Naprawdę niesamowita gra jest kurde 3:49 leci mi z tyły yabadabadoo i matka mi wbija i mówi że mordo co ty robisz a ja grałem akurat na stronie żeby zobaczyć jak to działa i mówi że gram do 4 potne sie', 0, '2022-11-25 03:50:34');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_usera` int(11) NOT NULL,
  `login` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `haslo` varchar(64) COLLATE utf8_polish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `ranga` char(1) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_usera`, `login`, `haslo`, `email`, `ranga`) VALUES
(1, 'admin', 'admin', 'miman.admin@gmail.com', '1'),
(2, 'Andrew Tate', 'bugatti', 'andrew.tate@rich.io', '0'),
(3, 'Krutowski', 'jakub', 'jakub.krutowski@simp.pl', '0'),
(20, 'kar2135', 'haslo123', 'karol@mail.com', '0'),
(21, 'Roman', 'roman', 'thefrobro228@gmail.com', '0'),
(22, 'gamer1231', 'hollymolly34@', 'ggmolidick@mail.pl', '0'),
(23, 'Włodzimierz biały', 'crystal', 'wladek@2137.bitch', '0'),
(24, 'mariaxx03', 'elefele420', 'maria09102003@gmail.com', '0');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `gry`
--
ALTER TABLE `gry`
  ADD PRIMARY KEY (`id_gry`);

--
-- Indeksy dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  ADD PRIMARY KEY (`id_komentarza`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_usera`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `gry`
--
ALTER TABLE `gry`
  MODIFY `id_gry` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  MODIFY `id_komentarza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_usera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
