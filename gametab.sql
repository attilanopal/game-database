-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 12:01 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gametab`
--

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE `developer` (
  `id` int(4) NOT NULL,
  `namaDev` varchar(50) NOT NULL,
  `link_foto_dev` varchar(200) NOT NULL,
  `sinopsis` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`id`, `namaDev`, `link_foto_dev`, `sinopsis`) VALUES
(1, 'EA SPORTS', 'assets/images/ea2.png', 'EA Sports is a division of Electronic Arts that develops and publishes sports video games. Formerly a marketing gimmick of Electronic Arts, in which they tried to imitate real-life sports networks by calling themselves the \"EA Sports Network\" (EASN) with pictures or endorsements with real commentators such as John Madden, it soon grew up to become a sub-label on its own, releasing game series such as FIFA, NHL, NBA Live and Madden NFL.\r\n<br>\r\nMost games under this brand are developed by EA Vancouver, the Electronic Arts studio in Burnaby, British Columbia as well as EA Tiburon in Maitland, Florida. The main rival to EA Sports is 2K Sports. Notably, both companies compete over the realm of NBA games, with 2K releasing the NBA 2K series. Konami is its rival in association football games with their own series, Pro Evolution Soccer.'),
(2, 'NINTENDO', 'assets/images/nintendo2.png', 'Nintendo Co., Ltd. is a Japanese multinational consumer electronics and video game company headquartered in Kyoto. The company was founded in 1889 as Nintendo Karuta by craftsman Fusajiro Yamauchi and originally produced handmade hanafuda playing cards. After venturing into various lines of business during the 1960s and acquiring a legal status as a public company under the current company name, Nintendo distributed its first video game console, the Color TV-Game, in 1977. It gained international recognition with the release of Donkey Kong in 1981 and the Nintendo Entertainment System and Super Mario Bros. in 1985.\r\n<br>\r\nNintendo has produced some of the most successful consoles in the video game industry, such as the Game Boy, the Super Nintendo Entertainment System, the Nintendo DS, the Wii, and the Nintendo Switch. It has created numerous major franchises, including Mario, Donkey Kong, The Legend of Zelda, Pokémon, Kirby, Metroid, Fire Emblem, Animal Crossing, Splatoon, Star Fox, Xenoblade Chronicles, and Super Smash Bros.'),
(3, 'ACTIVISION', 'assets/images/activision.png', 'Activision Publishing, Inc. is an American video game publisher based in Santa Monica, California. It currently serves as the publishing business for its parent company, Activision Blizzard, and consists of several subsidiary studios. Activision is one of the largest third-party video game publishers in the world and was the top United States publisher in 2016.\r\n<br>\r\nThe company was founded as Activision, Inc. in October 1979 in Sunnyvale, California, by former Atari game developers, upset at how they were treated at Atari, to develop their own games for the popular Atari 2600 home video game console. Activision was the first independent, third-party, console video game developer. The 1983 video game crash, in part created by too many new companies trying to follow in Activision\'s footsteps without the expertise of Activision\'s founders, hurt Activision\'s position in console games, forcing them to diversify into games for home computers, including the acquisition of Infocom. After a management shift, with CEO Jim Levy replaced by Bruce Davis, the company renamed itself as Mediagenic and branched out into business software applications. Mediagenic quickly fell into debt, and the company was bought for around US$500,000 by Bobby Kotick and a small group of investors around 1991.');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `producers` varchar(50) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `link_foto` varchar(200) NOT NULL,
  `id_developer` int(11) NOT NULL,
  `id_publisher` int(11) NOT NULL,
  `id_platform_store` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `judul`, `producers`, `kategori`, `link_foto`, `id_developer`, `id_publisher`, `id_platform_store`) VALUES
(1, 'The Legend Of Zelda Breath Of The Wild', 'Eiji Aonuma', 'Action-Adventure', 'assets/images/zelda.png', 2, 2, 1),
(2, 'FIFA 2021', '-', 'Sports', 'assets/images/fifa.jpg', 1, 1, 3),
(3, 'Call Of Duty : Modern Warfare', 'Mark Rubin', 'First-Person Shooter', 'assets/images/codmw.jpg', 3, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `platform_store`
--

CREATE TABLE `platform_store` (
  `id` int(4) NOT NULL,
  `namaPlat` varchar(50) NOT NULL,
  `link_foto_plat` varchar(200) NOT NULL,
  `sinopsis` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `platform_store`
--

INSERT INTO `platform_store` (`id`, `namaPlat`, `link_foto_plat`, `sinopsis`) VALUES
(1, 'STEAM', 'https://www.freeiconspng.com/uploads/steam-icon-19.png', 'Steam is a video game digital distribution service by Valve. It was launched as a standalone software client in September 2003 as a way for Valve to provide automatic updates for their games, and expanded to include games from third-party publishers. Steam has also expanded into an online web-based and mobile digital storefront. Steam offers digital rights management (DRM), server hosting, video streaming, and social networking services. It also provides the user with installation and automatic updating of games, and community features such as friends lists and groups, cloud storage, and in-game voice and chat functionality.<br>\nThe software provides a freely available application programming interface (API) called Steamworks, which developers can use to integrate many of Steam\'s functions into their products, including in-game achievements, microtransactions, and support for user-created content through Steam Workshop.<br>'),
(2, 'Epic Games', 'assets/images/epic.png', 'The Epic Games Store is a digital video game storefront for Microsoft Windows and macOS, operated by Epic Games. It launched in December 2018 as both a website and a standalone launcher, of which the latter is required to download and play games. The storefront provides a basic catalog, friends list management, matchmaking, and other features. Epic Games has further plans to expand the feature set of the store front but it does not plan to add as many features as other digital distribution platforms, such as discussion boards or user reviews, instead using existing social media platforms to support these.<br>\r\nEpic entered the distribution market after the success of Fortnite, which Epic distributed by their own channels to users on Windows and macOS system rather than other storefronts. Tim Sweeney, founder and CEO of Epic Games, had stated his opinion that the revenue cut of Steam, the dominant games storefront run by Valve, was too high at 30%, and suggested that they could run a st'),
(3, 'Origin', 'assets/images/origin.png', 'Origin is a digital distribution platform developed by Electronic Arts for purchasing and playing video games. The platform\'s software client is available for personal computer and mobile platforms.<br>\r\nOrigin contains social features such as profile management, networking with friends with chat and direct game joining along with an in-game overlay, streaming via Twitch and sharing of game library and community integration with networking sites like Facebook, Xbox Live, PlayStation Network, and Nintendo Network. In 2011, Electronic Arts stated that it wanted Origin to match Valve\'s Steam service, Origin\'s primary competitor, by adding cloud game saves, auto-patching, achievements, and cross-platform releases. By 2013, Origin had over 50 million registered users.');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `id` int(4) NOT NULL,
  `namaPub` varchar(50) NOT NULL,
  `link_foto_pub` varchar(200) NOT NULL,
  `sinopsis` varchar(1000) NOT NULL,
  `link_wiki` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`id`, `namaPub`, `link_foto_pub`, `sinopsis`, `link_wiki`) VALUES
(1, 'EA SPORTS', 'assets/images/ea2.png', 'EA Sports is a division of Electronic Arts that develops and publishes sports video games. Formerly a marketing gimmick of Electronic Arts, in which they tried to imitate real-life sports networks by calling themselves the \"EA Sports Network\" (EASN) with pictures or endorsements with real commentators such as John Madden, it soon grew up to become a sub-label on its own, releasing game series such as FIFA, NHL, NBA Live and Madden NFL.\r\n<br>\r\nMost games under this brand are developed by EA Vancouver, the Electronic Arts studio in Burnaby, British Columbia as well as EA Tiburon in Maitland, Florida. The main rival to EA Sports is 2K Sports. Notably, both companies compete over the realm of NBA games, with 2K releasing the NBA 2K series. Konami is its rival in association football games with their own series, Pro Evolution Soccer.', 'https://id.wikipedia.org/wiki/EA_Sports'),
(2, 'NINTENDO', 'assets/images/nintendo2.png', 'Nintendo Co., Ltd. is a Japanese multinational consumer electronics and video game company headquartered in Kyoto. The company was founded in 1889 as Nintendo Karuta by craftsman Fusajiro Yamauchi and originally produced handmade hanafuda playing cards. After venturing into various lines of business during the 1960s and acquiring a legal status as a public company under the current company name, Nintendo distributed its first video game console, the Color TV-Game, in 1977. It gained international recognition with the release of Donkey Kong in 1981 and the Nintendo Entertainment System and Super Mario Bros. in 1985.\r\n<br>\r\nNintendo has produced some of the most successful consoles in the video game industry, such as the Game Boy, the Super Nintendo Entertainment System, the Nintendo DS, the Wii, and the Nintendo Switch. It has created numerous major franchises, including Mario, Donkey Kong, The Legend of Zelda, Pokémon, Kirby, Metroid, Fire Emblem, Animal Crossing, Splatoon, Star Fox, X', 'https://id.wikipedia.org/wiki/Nintendo'),
(3, 'ACTIVISION', 'assets/images/activision.png', 'Activision Publishing, Inc. is an American video game publisher based in Santa Monica, California. It currently serves as the publishing business for its parent company, Activision Blizzard, and consists of several subsidiary studios. Activision is one of the largest third-party video game publishers in the world and was the top United States publisher in 2016.\r\n<br>\r\nThe company was founded as Activision, Inc. in October 1979 in Sunnyvale, California, by former Atari game developers, upset at how they were treated at Atari, to develop their own games for the popular Atari 2600 home video game console. Activision was the first independent, third-party, console video game developer. The 1983 video game crash, in part created by too many new companies trying to follow in Activision\'s footsteps without the expertise of Activision\'s founders, hurt Activision\'s position in console games, forcing them to diversify into games for home computers, including the acquisition of Infocom. After a m', 'https://id.wikipedia.org/wiki/Activision');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `developer`
--
ALTER TABLE `developer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_developer` (`id_developer`),
  ADD KEY `id_publisher` (`id_publisher`),
  ADD KEY `id_platform_store` (`id_platform_store`);

--
-- Indexes for table `platform_store`
--
ALTER TABLE `platform_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `developer`
--
ALTER TABLE `developer`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `platform_store`
--
ALTER TABLE `platform_store`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`id_developer`) REFERENCES `developer` (`id`),
  ADD CONSTRAINT `game_ibfk_2` FOREIGN KEY (`id_publisher`) REFERENCES `publisher` (`id`),
  ADD CONSTRAINT `game_ibfk_3` FOREIGN KEY (`id_platform_store`) REFERENCES `platform_store` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
