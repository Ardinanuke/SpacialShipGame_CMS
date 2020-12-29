-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:30200
-- Tiempo de generación: 29-12-2020 a las 18:08:44
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `server`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auction_house`
--

CREATE TABLE `auction_house` (
  `id` int(11) NOT NULL,
  `name` varchar(35) COLLATE utf8_bin NOT NULL,
  `bidderId` bigint(20) DEFAULT NULL,
  `bid` bigint(20) DEFAULT NULL,
  `typeCoin` varchar(10) COLLATE utf8_bin NOT NULL,
  `category` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auction_house_winners`
--

CREATE TABLE `auction_house_winners` (
  `id` int(11) NOT NULL,
  `itemName` varchar(35) COLLATE utf8_bin NOT NULL,
  `userId` bigint(20) DEFAULT NULL,
  `bid` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat_permissions`
--

CREATE TABLE `chat_permissions` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `html_code` varchar(2000) COLLATE utf8_bin NOT NULL,
  `active` int(11) NOT NULL,
  `event_code` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event_coins`
--

CREATE TABLE `event_coins` (
  `id` int(11) NOT NULL,
  `coins` int(11) NOT NULL,
  `userId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event_participation`
--

CREATE TABLE `event_participation` (
  `id` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `event_code` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_event_jpb`
--

CREATE TABLE `log_event_jpb` (
  `id` int(11) NOT NULL,
  `players` text COLLATE utf8_bin NOT NULL,
  `finalists` text COLLATE utf8_bin NOT NULL,
  `winner_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_player_kills`
--

CREATE TABLE `log_player_kills` (
  `id` int(11) NOT NULL,
  `killer_id` int(11) NOT NULL,
  `target_id` int(11) NOT NULL,
  `pushing` tinyint(1) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_uba_kills`
--

CREATE TABLE `log_uba_kills` (
  `id` int(11) NOT NULL,
  `killer_id` int(11) NOT NULL,
  `target_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `html_code` varchar(2000) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `player_accounts`
--

CREATE TABLE `player_accounts` (
  `userId` bigint(20) NOT NULL,
  `sessionId` varchar(32) COLLATE utf8_bin NOT NULL,
  `data` text COLLATE utf8_bin NOT NULL DEFAULT '{"uridium":0,"credits":0,"honor":0,"experience":0,"jackpot":0}',
  `bootyKeys` text COLLATE utf8_bin NOT NULL DEFAULT '{"greenKeys": 0, "redKeys": 0, "blueKeys": 0}',
  `info` text COLLATE utf8_bin NOT NULL,
  `destructions` text COLLATE utf8_bin NOT NULL DEFAULT '{"fpd":0,"dbrz":0}',
  `username` char(20) COLLATE utf8_bin NOT NULL,
  `pilotName` char(20) COLLATE utf8_bin NOT NULL,
  `petName` char(20) COLLATE utf8_bin NOT NULL DEFAULT 'P.E.T 15',
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(260) COLLATE utf8_bin NOT NULL,
  `shipId` int(11) NOT NULL DEFAULT 10,
  `premium` tinyint(1) NOT NULL DEFAULT 0,
  `title` varchar(128) COLLATE utf8_bin NOT NULL,
  `factionId` int(1) NOT NULL DEFAULT 0,
  `clanId` int(11) NOT NULL DEFAULT 0,
  `rankId` int(2) NOT NULL DEFAULT 1,
  `rankPoints` bigint(20) NOT NULL DEFAULT 0,
  `rank` int(11) NOT NULL DEFAULT 0,
  `warPoints` bigint(20) NOT NULL,
  `warRank` int(11) NOT NULL,
  `extraEnergy` int(11) NOT NULL,
  `nanohull` int(11) NOT NULL,
  `verification` text COLLATE utf8_bin NOT NULL,
  `oldPilotNames` text COLLATE utf8_bin NOT NULL DEFAULT '[]',
  `version` tinyint(4) NOT NULL DEFAULT 1,
  `ggRings` int(11) DEFAULT NULL,
  `petDesign` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `player_designs`
--

CREATE TABLE `player_designs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `baseShipId` int(11) NOT NULL,
  `userId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `player_equipment`
--

CREATE TABLE `player_equipment` (
  `userId` int(11) NOT NULL,
  `config1_lasers` text COLLATE utf8_bin NOT NULL DEFAULT '[]',
  `config1_generators` text COLLATE utf8_bin NOT NULL DEFAULT '[]',
  `config1_drones` text COLLATE utf8_bin NOT NULL DEFAULT '[{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]}]',
  `config2_lasers` text COLLATE utf8_bin NOT NULL DEFAULT '[]',
  `config2_generators` text COLLATE utf8_bin NOT NULL DEFAULT '[]',
  `config2_drones` text COLLATE utf8_bin NOT NULL DEFAULT '[{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]}]',
  `items` text COLLATE utf8_bin NOT NULL DEFAULT '{"sg3na01Count":0, "sg3na02Count":0, "sg3na03Count":0, "sg3nb01Count":0, "sg3nb02Count":0,"g3n1010Count":0,"g3n2010Count":0,"g3n3210Count":0,"g3n3310Count":0,"g3n6900Count":0,"g3n7900Count":0,"lf1Count":0, "lf2Count":0, "lf3Count":0, "lf4Count":0,"havocCount":0,"herculesCount":0,"apis":false,"zeus":false,"pet":false,"petModules":[],"ships":[],"designs":{},"skillTree":{"logdisks":0,"researchPoints":0,"resetCount":0}}',
  `skill_points` text COLLATE utf8_bin NOT NULL DEFAULT '{"engineering":0,"shieldEngineering":0,"detonation1":0,"detonation2":0,"heatseekingMissiles":0,"rocketFusion":0,"cruelty1":0,"cruelty2":0,"explosives":0,"luck1":0,"luck2":0}',
  `modules` longtext COLLATE utf8_bin NOT NULL DEFAULT '[]',
  `boosters` longtext COLLATE utf8_bin NOT NULL DEFAULT '{}'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `player_galaxygates`
--

CREATE TABLE `player_galaxygates` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `gateId` int(11) NOT NULL,
  `parts` longtext COLLATE utf8_bin NOT NULL,
  `multiplier` int(11) NOT NULL DEFAULT 0,
  `lives` int(11) NOT NULL DEFAULT -1,
  `prepared` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `player_galaxygates_done`
--

CREATE TABLE `player_galaxygates_done` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `gateId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `player_items`
--

CREATE TABLE `player_items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `item_category` varchar(50) COLLATE utf8_bin NOT NULL,
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `player_settings`
--

CREATE TABLE `player_settings` (
  `userId` int(11) NOT NULL,
  `audio` text COLLATE utf8_bin NOT NULL,
  `quality` text COLLATE utf8_bin NOT NULL,
  `classY2T` text COLLATE utf8_bin NOT NULL,
  `display` text COLLATE utf8_bin NOT NULL,
  `gameplay` text COLLATE utf8_bin NOT NULL,
  `window` text COLLATE utf8_bin NOT NULL,
  `boundKeys` text COLLATE utf8_bin NOT NULL,
  `inGameSettings` text COLLATE utf8_bin NOT NULL,
  `cooldowns` text COLLATE utf8_bin NOT NULL,
  `slotbarItems` text COLLATE utf8_bin NOT NULL,
  `premiumSlotbarItems` text COLLATE utf8_bin NOT NULL,
  `proActionBarItems` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `player_titles`
--

CREATE TABLE `player_titles` (
  `userID` int(11) NOT NULL,
  `titles` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '[]'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `server_bans`
--

CREATE TABLE `server_bans` (
  `id` bigint(20) NOT NULL,
  `userId` int(11) NOT NULL,
  `modId` int(11) NOT NULL,
  `reason` text COLLATE utf8_bin NOT NULL,
  `typeId` tinyint(4) NOT NULL,
  `ended` tinyint(1) NOT NULL,
  `end_date` datetime NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `server_battlestations`
--

CREATE TABLE `server_battlestations` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `mapId` int(11) NOT NULL,
  `clanId` int(11) NOT NULL,
  `positionX` int(11) NOT NULL,
  `positionY` int(11) NOT NULL,
  `inBuildingState` tinyint(4) NOT NULL,
  `buildTimeInMinutes` int(11) NOT NULL,
  `buildTime` datetime NOT NULL,
  `deflectorActive` tinyint(4) NOT NULL,
  `deflectorSecondsLeft` int(11) NOT NULL,
  `deflectorTime` datetime NOT NULL,
  `visualModifiers` text COLLATE utf8_bin NOT NULL,
  `modules` longtext COLLATE utf8_bin NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `server_clans`
--

CREATE TABLE `server_clans` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `tag` varchar(4) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `description` varchar(16000) COLLATE utf8_bin NOT NULL DEFAULT '',
  `factionId` tinyint(4) NOT NULL DEFAULT 0,
  `recruiting` tinyint(4) NOT NULL DEFAULT 1,
  `leaderId` int(11) NOT NULL DEFAULT 0,
  `news` text COLLATE utf8_bin NOT NULL,
  `join_dates` text COLLATE utf8_bin NOT NULL,
  `rankPoints` bigint(20) NOT NULL,
  `rank` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `profile` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `server_clan_applications`
--

CREATE TABLE `server_clan_applications` (
  `id` int(11) NOT NULL,
  `clanId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `server_clan_diplomacy`
--

CREATE TABLE `server_clan_diplomacy` (
  `id` bigint(20) NOT NULL,
  `senderClanId` int(11) NOT NULL,
  `toClanId` int(11) NOT NULL,
  `diplomacyType` tinyint(4) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `server_clan_diplomacy_applications`
--

CREATE TABLE `server_clan_diplomacy_applications` (
  `id` bigint(20) NOT NULL,
  `senderClanId` int(11) NOT NULL,
  `toClanId` int(11) NOT NULL,
  `diplomacyType` tinyint(4) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `server_maps`
--

CREATE TABLE `server_maps` (
  `mapID` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `npcs` longtext COLLATE utf8_bin NOT NULL,
  `stations` longtext COLLATE utf8_bin NOT NULL,
  `portals` longtext COLLATE utf8_bin NOT NULL,
  `collectables` longtext COLLATE utf8_bin NOT NULL,
  `options` varchar(512) COLLATE utf8_bin NOT NULL DEFAULT '{"StarterMap":false,"PvpMap":false,"RangeDisabled":false,"CloakBlocked":false,"LogoutBlocked":false,"DeathLocationRepair":true}',
  `factionID` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `server_ships`
--

CREATE TABLE `server_ships` (
  `id` int(11) NOT NULL,
  `shipID` int(11) NOT NULL,
  `baseShipId` int(11) NOT NULL,
  `lootID` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `health` int(11) NOT NULL DEFAULT 0,
  `shield` int(11) NOT NULL DEFAULT 0,
  `speed` int(11) NOT NULL DEFAULT 300,
  `lasers` int(11) NOT NULL DEFAULT 1,
  `generators` int(11) NOT NULL DEFAULT 1,
  `cargo` int(11) NOT NULL DEFAULT 100,
  `aggressive` tinyint(1) NOT NULL DEFAULT 0,
  `damage` int(11) NOT NULL DEFAULT 20,
  `respawnable` tinyint(1) NOT NULL,
  `reward` varchar(2048) COLLATE utf8_bin NOT NULL DEFAULT '{"Experience":0,"Honor":0,"Credits":0,"Uridium":0}'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_bans`
--

CREATE TABLE `user_bans` (
  `id` int(11) NOT NULL,
  `ip_user` varchar(25) COLLATE utf8_bin NOT NULL,
  `userId` bigint(20) NOT NULL,
  `banType` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auction_house`
--
ALTER TABLE `auction_house`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `auction_house_winners`
--
ALTER TABLE `auction_house_winners`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `chat_permissions`
--
ALTER TABLE `chat_permissions`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `event_coins`
--
ALTER TABLE `event_coins`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `event_participation`
--
ALTER TABLE `event_participation`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `log_event_jpb`
--
ALTER TABLE `log_event_jpb`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `log_player_kills`
--
ALTER TABLE `log_player_kills`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `log_uba_kills`
--
ALTER TABLE `log_uba_kills`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `player_accounts`
--
ALTER TABLE `player_accounts`
  ADD PRIMARY KEY (`userId`) USING BTREE;

--
-- Indices de la tabla `player_designs`
--
ALTER TABLE `player_designs`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `player_equipment`
--
ALTER TABLE `player_equipment`
  ADD PRIMARY KEY (`userId`) USING BTREE;

--
-- Indices de la tabla `player_galaxygates`
--
ALTER TABLE `player_galaxygates`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `player_galaxygates_done`
--
ALTER TABLE `player_galaxygates_done`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `player_items`
--
ALTER TABLE `player_items`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `player_settings`
--
ALTER TABLE `player_settings`
  ADD PRIMARY KEY (`userId`) USING BTREE;

--
-- Indices de la tabla `player_titles`
--
ALTER TABLE `player_titles`
  ADD PRIMARY KEY (`userID`) USING BTREE;

--
-- Indices de la tabla `server_bans`
--
ALTER TABLE `server_bans`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `server_battlestations`
--
ALTER TABLE `server_battlestations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `server_clans`
--
ALTER TABLE `server_clans`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `server_clan_applications`
--
ALTER TABLE `server_clan_applications`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `server_clan_diplomacy`
--
ALTER TABLE `server_clan_diplomacy`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `server_clan_diplomacy_applications`
--
ALTER TABLE `server_clan_diplomacy_applications`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `server_maps`
--
ALTER TABLE `server_maps`
  ADD PRIMARY KEY (`mapID`) USING BTREE;

--
-- Indices de la tabla `server_ships`
--
ALTER TABLE `server_ships`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `shipID` (`shipID`) USING BTREE;

--
-- Indices de la tabla `user_bans`
--
ALTER TABLE `user_bans`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auction_house`
--
ALTER TABLE `auction_house`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `auction_house_winners`
--
ALTER TABLE `auction_house_winners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `chat_permissions`
--
ALTER TABLE `chat_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `event_coins`
--
ALTER TABLE `event_coins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `event_participation`
--
ALTER TABLE `event_participation`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `log_event_jpb`
--
ALTER TABLE `log_event_jpb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `log_player_kills`
--
ALTER TABLE `log_player_kills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `log_uba_kills`
--
ALTER TABLE `log_uba_kills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `player_accounts`
--
ALTER TABLE `player_accounts`
  MODIFY `userId` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `player_designs`
--
ALTER TABLE `player_designs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `player_equipment`
--
ALTER TABLE `player_equipment`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `player_galaxygates`
--
ALTER TABLE `player_galaxygates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `player_galaxygates_done`
--
ALTER TABLE `player_galaxygates_done`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `player_items`
--
ALTER TABLE `player_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `server_bans`
--
ALTER TABLE `server_bans`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `server_battlestations`
--
ALTER TABLE `server_battlestations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `server_clans`
--
ALTER TABLE `server_clans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `server_clan_applications`
--
ALTER TABLE `server_clan_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `server_clan_diplomacy`
--
ALTER TABLE `server_clan_diplomacy`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `server_clan_diplomacy_applications`
--
ALTER TABLE `server_clan_diplomacy_applications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `server_maps`
--
ALTER TABLE `server_maps`
  MODIFY `mapID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `server_ships`
--
ALTER TABLE `server_ships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user_bans`
--
ALTER TABLE `user_bans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
