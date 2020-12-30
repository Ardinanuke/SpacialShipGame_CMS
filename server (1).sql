-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:30200
-- Tiempo de generación: 30-12-2020 a las 17:47:32
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
  `data` text COLLATE utf8_bin NOT NULL DEFAULT '{"uridium":10000,"credits":10000,"honor":0,"experience":0,"jackpot":0}',
  `bootyKeys` text COLLATE utf8_bin NOT NULL DEFAULT '{"greenKeys": 0, "redKeys": 0, "blueKeys": 0}',
  `info` text COLLATE utf8_bin NOT NULL,
  `destructions` text COLLATE utf8_bin NOT NULL DEFAULT '{"fpd":0,"dbrz":0}',
  `username` char(20) COLLATE utf8_bin NOT NULL,
  `pilotName` char(20) COLLATE utf8_bin NOT NULL,
  `petName` char(20) COLLATE utf8_bin NOT NULL DEFAULT 'P.E.T 15',
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(260) COLLATE utf8_bin NOT NULL,
  `shipId` int(11) NOT NULL DEFAULT 1,
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

--
-- Volcado de datos para la tabla `player_accounts`
--

INSERT INTO `player_accounts` (`userId`, `sessionId`, `data`, `bootyKeys`, `info`, `destructions`, `username`, `pilotName`, `petName`, `password`, `email`, `shipId`, `premium`, `title`, `factionId`, `clanId`, `rankId`, `rankPoints`, `rank`, `warPoints`, `warRank`, `extraEnergy`, `nanohull`, `verification`, `oldPilotNames`, `version`, `ggRings`, `petDesign`) VALUES
(1, 'vKP7oGpNWS29Z6JqbMt6Zx1I8CfmBdfC', '{\"uridium\":0,\"credits\":0,\"honor\":0,\"experience\":0,\"jackpot\":0}', '{\"greenKeys\": 0, \"redKeys\": 0, \"blueKeys\": 0}', '{\"lastIP\":\"127.0.0.1\",\"registerIP\":\"127.0.0.1\",\"registerDate\":\"30.12.2020 17:46:22\"}', '{\"fpd\":0,\"dbrz\":0}', 'node', 'node', 'P.E.T 15', '$2y$10$k0fEGEw3klQIXF.PP1GnWOeldHkUjyVrIjLSejxubusQGhCGkY.pS', 'leon.luisgerardo775@gmail.com', 10, 0, '', 1, 0, 1, 0, 0, 0, 0, 0, 0, '{\"verified\":true,\"hash\":\"8waqXwns7ukOenfT5w0r8dtxk9xndd3K\"}', '[]', 1, NULL, NULL);

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
  `items` text COLLATE utf8_bin NOT NULL DEFAULT '{"sg3na01Count":0, "sg3na02Count":0, "sg3na03Count":0, "sg3nb01Count":0, "sg3nb02Count":0,"g3n1010Count":0,"g3n2010Count":0,"g3n3210Count":0,"g3n3310Count":0,"g3n6900Count":0,"g3n7900Count":0,"lf1Count":0, "lf2Count":0, "lf3Count":0, "lf4Count":0,"havocCount":0,"herculesCount":0,"apis":false,"zeus":false,"pet":false,"petModules":[],"ships":[1],"designs":{},"skillTree":{"logdisks":0,"researchPoints":0,"resetCount":0}}',
  `skill_points` text COLLATE utf8_bin NOT NULL DEFAULT '{"engineering":0,"shieldEngineering":0,"detonation1":0,"detonation2":0,"heatseekingMissiles":0,"rocketFusion":0,"cruelty1":0,"cruelty2":0,"explosives":0,"luck1":0,"luck2":0}',
  `modules` longtext COLLATE utf8_bin NOT NULL DEFAULT '[]',
  `boosters` longtext COLLATE utf8_bin NOT NULL DEFAULT '{}'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `player_equipment`
--

INSERT INTO `player_equipment` (`userId`, `config1_lasers`, `config1_generators`, `config1_drones`, `config2_lasers`, `config2_generators`, `config2_drones`, `items`, `skill_points`, `modules`, `boosters`) VALUES
(1, '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '{\"lf4Count\":0,\"havocCount\":0,\"herculesCount\":0,\"apis\":false,\"zeus\":false,\"pet\":false,\"petModules\":[],\"ships\":[],\"designs\":{},\"skillTree\":{\"logdisks\":0,\"researchPoints\":0,\"resetCount\":0}}', '{\"engineering\":0,\"shieldEngineering\":0,\"detonation1\":0,\"detonation2\":0,\"heatseekingMissiles\":0,\"rocketFusion\":0,\"cruelty1\":0,\"cruelty2\":0,\"explosives\":0,\"luck1\":0,\"luck2\":0}', '[]', '{}');

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

--
-- Volcado de datos para la tabla `player_settings`
--

INSERT INTO `player_settings` (`userId`, `audio`, `quality`, `classY2T`, `display`, `gameplay`, `window`, `boundKeys`, `inGameSettings`, `cooldowns`, `slotbarItems`, `premiumSlotbarItems`, `proActionBarItems`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `player_titles`
--

CREATE TABLE `player_titles` (
  `userID` int(11) NOT NULL,
  `titles` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '[]'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `player_titles`
--

INSERT INTO `player_titles` (`userID`, `titles`) VALUES
(1, '[]');

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

--
-- Volcado de datos para la tabla `server_maps`
--

INSERT INTO `server_maps` (`mapID`, `name`, `npcs`, `stations`, `portals`, `collectables`, `options`, `factionID`) VALUES
(1, '1-1', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(2, '1-2', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(3, '1-3', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(4, '1-4', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(5, '2-1', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(6, '2-2', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(7, '2-3', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(8, '2-4', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(9, '3-1', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(10, '3-2', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(11, '3-3', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(12, '3-4', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(13, '4-1', '[]', '', '[{   \"TargetSpaceMapId\": 16,   \"Position\": [10000,6400],   \"TargetPosition\": [19100,12700],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true }]\r\n', '[]', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(14, '4-2', '[]', '', '[{   \"TargetSpaceMapId\": 16,   \"Position\": [10000,6400],   \"TargetPosition\": [21300,11900],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true }]', '[]', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(15, '4-3', '[]', '', '[{   \"TargetSpaceMapId\": 16,   \"Position\": [10300, 6600],   \"TargetPosition\": [21900,14500],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true }]', '[]', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(16, '4-4', '[]', '', '[  {   \"TargetSpaceMapId\": 17,   \"Position\": [6000,13000],   \"TargetPosition\": [18500,6750],   \"GraphicId\": 1,   \"FactionId\": 0,   \"Visible\": true,   \"Working\": true },  {   \"TargetSpaceMapId\": 21,   \"Position\": [28000,3000],   \"TargetPosition\": [2000,11500],   \"GraphicId\": 1,   \"FactionId\": 0,   \"Visible\": true,   \"Working\": true },  {   \"TargetSpaceMapId\": 25,   \"Position\": [28000,24000],   \"TargetPosition\": [2000,2000],   \"GraphicId\": 1,   \"FactionId\": 0,   \"Visible\": true,   \"Working\": true }]', '', '{\"StarterMap\":false,\"PvpMap\":true,\"RangeDisabled\": false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(17, '1-5', '[{   \"ShipId\": 28,   \"Amount\": 4},{   \"ShipId\": 27,   \"Amount\":15}]', '', '[{   \"TargetSpaceMapId\": 18,   \"Position\": [2000,2000],   \"TargetPosition\": [18500, 11500],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true },{   \"TargetSpaceMapId\": 16,   \"Position\": [18500,6750],   \"TargetPosition\": [6000,13000],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true },  {   \"TargetSpaceMapId\": 19,   \"Position\": [2000,11500],   \"TargetPosition\": [18500, 2000],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true },  {   \"TargetSpaceMapId\": 29,   \"Position\": [11500,11500],   \"TargetPosition\": [6000,13000],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true }]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(18, '1-6', '[{   \"ShipId\": 35,   \"Amount\": 4},{   \"ShipId\": 29,   \"Amount\":15}]', '', '[{   \"TargetSpaceMapId\": 17,   \"Position\": [18500, 11500],   \"TargetPosition\": [2000,2000],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true },{   \"TargetSpaceMapId\": 20,   \"Position\": [2000, 11500],   \"TargetPosition\": [18500, 2000],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true }]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(19, '1-7', '[{   \"ShipId\": 35,   \"Amount\": 4},{   \"ShipId\": 29,   \"Amount\":15}]', '', '[{   \"TargetSpaceMapId\": 20,   \"Position\": [2000, 2000],   \"TargetPosition\": [18500, 11500],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true },{   \"TargetSpaceMapId\": 17,   \"Position\": [18500, 2000],   \"TargetPosition\": [2000,11500],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true }]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(20, '1-8', '[]', '[{   \"TypeId\": 46,   \"FactionId\": 1,   \"Position\": [2000,6000] }]', '[{   \"TargetSpaceMapId\": 16,   \"Position\": [9958, 7116],   \"TargetPosition\": [6000,13000],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true },{   \"TargetSpaceMapId\": 19,   \"Position\": [18500, 11500],   \"TargetPosition\": [2000,2000],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true },{   \"TargetSpaceMapId\": 18,   \"Position\": [18500, 2000],   \"TargetPosition\": [2000,11500],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true }]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(21, '2-5', '[{   \"ShipId\": 28,   \"Amount\": 4},{   \"ShipId\": 27,   \"Amount\":15}]', '', '[{   \"TargetSpaceMapId\": 22,   \"Position\": [2000, 2000],   \"TargetPosition\": [2000, 11500],   \"GraphicId\": 1,   \"FactionId\": 2,   \"Visible\": true,   \"Working\": true }, {   \"TargetSpaceMapId\": 16,   \"Position\": [2000,11500],   \"TargetPosition\": [28000,3000],   \"GraphicId\": 1,   \"FactionId\": 2,   \"Visible\": true,   \"Working\": true },  {   \"TargetSpaceMapId\": 29,   \"Position\": [18500,11500],   \"TargetPosition\": [28000,3000],   \"GraphicId\": 1,   \"FactionId\": 2,   \"Visible\": true,   \"Working\": true },  {   \"TargetSpaceMapId\": 23,   \"Position\": [18500,2000],   \"TargetPosition\": [2000, 11000],   \"GraphicId\": 1,   \"FactionId\": 2,   \"Visible\": true,   \"Working\": true }]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(22, '2-6', '[{   \"ShipId\": 35,   \"Amount\": 4},{   \"ShipId\": 29,   \"Amount\":15}]', '', '[{   \"TargetSpaceMapId\": 21,   \"Position\": [2000, 11500],   \"TargetPosition\": [2000,2000],   \"GraphicId\": 1,   \"FactionId\": 2,   \"Visible\": true,   \"Working\": true },{   \"TargetSpaceMapId\": 24,   \"Position\": [18500, 2000],   \"TargetPosition\": [2000,11500],   \"GraphicId\": 1,   \"FactionId\": 2,   \"Visible\": true,   \"Working\": true }]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(23, '2-7', '[{   \"ShipId\": 35,   \"Amount\": 4},{   \"ShipId\": 29,   \"Amount\":15}]', '', '[{   \"TargetSpaceMapId\": 21,   \"Position\": [2000, 11000],   \"TargetPosition\": [18500,2000],   \"GraphicId\": 1,   \"FactionId\": 2,   \"Visible\": true,   \"Working\": true },{   \"TargetSpaceMapId\": 24,   \"Position\": [18500, 2000],   \"TargetPosition\": [18500, 11500],   \"GraphicId\": 1,   \"FactionId\": 2,   \"Visible\": true,   \"Working\": true }]\r\n', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(24, '2-8', '[]', '[{   \"TypeId\": 46,   \"FactionId\": 2,   \"Position\": [10000,2000] }]', '[{   \"TargetSpaceMapId\": 16,   \"Position\": [9958, 7116],   \"TargetPosition\": [28000,3000],   \"GraphicId\": 1,   \"FactionId\": 2,   \"Visible\": true,   \"Working\": true },{   \"TargetSpaceMapId\": 23,   \"Position\": [18500, 11500],   \"TargetPosition\": [18500,2000],   \"GraphicId\": 1,   \"FactionId\": 2,   \"Visible\": true,   \"Working\": true },{   \"TargetSpaceMapId\": 22,   \"Position\": [2000, 11500],   \"TargetPosition\": [18500,2000],   \"GraphicId\": 1,   \"FactionId\": 2,   \"Visible\": true,   \"Working\": true }]\r\n', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(25, '3-5', '[{   \"ShipId\": 28,   \"Amount\": 4},{   \"ShipId\": 27,   \"Amount\":15}]', '', '[{   \"TargetSpaceMapId\": 16,   \"Position\": [2000,2000],   \"TargetPosition\": [28000,24000],   \"GraphicId\": 1,   \"FactionId\": 3,   \"Visible\": true,   \"Working\": true }, {   \"TargetSpaceMapId\": 29,   \"Position\": [18500,2000],   \"TargetPosition\": [28000,24000],   \"GraphicId\": 1,   \"FactionId\": 3,   \"Visible\": true,   \"Working\": true },  {   \"TargetSpaceMapId\": 27,   \"Position\": [18500,11500],   \"TargetPosition\": [2000,11400],   \"GraphicId\": 1,   \"FactionId\": 3,   \"Visible\": true,   \"Working\": true },  {   \"TargetSpaceMapId\": 26,   \"Position\": [2000,11500],   \"TargetPosition\": [2000,2000],   \"GraphicId\": 1,   \"FactionId\": 3,   \"Visible\": true,   \"Working\": true }]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(26, '3-6', '[{   \"ShipId\": 35,   \"Amount\": 4},{   \"ShipId\": 29,   \"Amount\":15}]', '', '[{   \"TargetSpaceMapId\": 25,   \"Position\": [2000, 2000],   \"TargetPosition\": [2000,11500],   \"GraphicId\": 1,   \"FactionId\": 3,   \"Visible\": true,   \"Working\": true },{   \"TargetSpaceMapId\": 28,   \"Position\": [18500, 11500],   \"TargetPosition\": [2000,11500],   \"GraphicId\": 1,   \"FactionId\": 3,   \"Visible\": true,   \"Working\": true }]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(27, '3-7', '[{   \"ShipId\": 35,   \"Amount\": 4},{   \"ShipId\": 29,   \"Amount\":15}]', '', '[{   \"TargetSpaceMapId\": 25,   \"Position\": [2000,11400],   \"TargetPosition\": [18500,11500],   \"GraphicId\": 1,   \"FactionId\": 3,   \"Visible\": true,   \"Working\": true },{   \"TargetSpaceMapId\": 28,   \"Position\": [18500,11500],   \"TargetPosition\": [2000,2000],   \"GraphicId\": 1,   \"FactionId\": 3,   \"Visible\": true,   \"Working\": true }]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(28, '3-8', '[]', '[{   \"TypeId\": 46,   \"FactionId\": 3,   \"Position\": [18500,6000] }]', '[{   \"TargetSpaceMapId\": 16,   \"Position\": [9958, 7116],   \"TargetPosition\": [28000,24000],   \"GraphicId\": 1,   \"FactionId\": 3,   \"Visible\": true,   \"Working\": true },  {   \"TargetSpaceMapId\": 27,   \"Position\": [2000,2000],   \"TargetPosition\": [18500,11500],   \"GraphicId\": 1,   \"FactionId\": 3,   \"Visible\": true,   \"Working\": true }, {   \"TargetSpaceMapId\": 26,   \"Position\": [2000,11500],   \"TargetPosition\": [18500,11500],   \"GraphicId\": 1,   \"FactionId\": 3,   \"Visible\": true,   \"Working\": true }]\r\n', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(29, '4-5', '[{   \"ShipId\": 45,   \"Amount\": 7},{   \"ShipId\": 42,  \"Amount\":20}]', '', '[{   \"TargetSpaceMapId\": 17,   \"Position\": [6000,13000],   \"TargetPosition\": [11500,11500],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true },  {   \"TargetSpaceMapId\": 21,   \"Position\": [28000,3000],   \"TargetPosition\": [18500,11500],   \"GraphicId\": 1,   \"FactionId\": 2,   \"Visible\": true,   \"Working\": true },  {   \"TargetSpaceMapId\": 25,   \"Position\": [28000,24000],   \"TargetPosition\": [18500,2000],   \"GraphicId\": 1,   \"FactionId\": 3,   \"Visible\": true,   \"Working\": true }]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(42, '???', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":true,\"CloakBlocked\":true,\"LogoutBlocked\":true,\"DeathLocationRepair\":false}', 0),
(51, 'GG α', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":true,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":false}', 0),
(52, 'GG β', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":true,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":false}', 0),
(53, 'GG γ', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":true,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":false}', 0),
(54, 'GG NC', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(55, 'GG δ', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(56, 'GG Orb', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(57, 'GG Y6', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(58, 'HSG', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(59, '', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(61, 'MMO Invasion', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(62, 'EIC Invasion', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(63, 'VRU Invasion', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(70, 'GG ε', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(71, 'GG ζ 1', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(72, 'GG ζ 2', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(73, 'GG ζ 3', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(74, 'GG κ', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(75, 'GG λ', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(76, 'GG Kronos', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(77, 'GG Cold Wave (Easy)', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(78, 'GG Cold Wave (Hard)', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(81, 'TDM I', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(82, 'TDM II', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(91, '5-1', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(92, '5-2', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(93, '5-3', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(101, 'JP', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":true,\"CloakBlocked\":true,\"LogoutBlocked\":true,\"DeathLocationRepair\":false}', 0),
(102, 'JP', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(103, 'JP', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(104, 'JP', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(105, 'JP', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(106, 'JP', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(107, 'JP', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(108, 'JP', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(109, 'JP', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(110, 'JP', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(111, 'JP', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(112, 'UBA', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(113, 'UBA', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(114, 'UBA', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(115, 'UBA', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(116, 'UBA', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(117, 'UBA', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(118, 'UBA', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(119, 'UBA', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(120, 'UBA', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(121, 'UBA', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":true,\"CloakBlocked\":true,\"LogoutBlocked\":true,\"DeathLocationRepair\":false}', 0),
(150, 'R-Zone 1', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(151, 'R-Zone 2', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(152, 'R-Zone 3', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(153, 'R-Zone 4', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(154, 'R-Zone 5', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(155, 'R-Zone 6', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(156, 'R-Zone 7', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(157, 'R-Zone 8', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(158, 'R-Zone 9', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(159, 'R-Zone 10', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(200, 'LoW', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(201, 'SC-1', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(202, 'SC-2', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(203, 'GG Hades', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(223, 'Devolarium Attack', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(224, 'Custom Tournament', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":true,\"RangeDisabled\":false,\"CloakBlocked\":true,\"LogoutBlocked\":true,\"DeathLocationRepair\":false}', 0),
(225, 'GG PET Attack (easy)', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":true,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(228, 'Permafrost Fissure', '[]', '', '[{\"TargetSpaceMapId\": 16,   \"Position\": [10324, 6315],   \"TargetPosition\": [22415, 13851],   \"GraphicId\": 2,   \"FactionId\": 0,   \"Visible\": true,   \"Working\": true }]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(229, 'Quarantine Zone', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(230, 'GG Vortex of Terror', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(231, 'GG Vortex of Terror', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(232, 'GG Vortex of Terror', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(233, 'GG Vortex of Terror', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(234, 'GG Vortex of Terror', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(235, 'GG Vortex of Terror', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(236, 'GG Vortex of Terror', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(300, 'GG ς 1', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(301, 'GG ς 2', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(302, 'GG ς 3', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(303, 'GG ς 4', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0),
(304, 'GG ς 5', '[]', '', '[]', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);

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

--
-- Volcado de datos para la tabla `server_ships`
--

INSERT INTO `server_ships` (`id`, `shipID`, `baseShipId`, `lootID`, `name`, `health`, `shield`, `speed`, `lasers`, `generators`, `cargo`, `aggressive`, `damage`, `respawnable`, `reward`) VALUES
(18, 1, 0, 'ship_phoenix', 'Phoenix', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(19, 2, 0, 'ship_yamato', 'Yamato', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(20, 3, 0, 'ship_leonov', 'Leonov', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(21, 4, 0, 'ship_defcom', 'Defcom', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(22, 5, 0, 'ship_liberator', 'Liberator', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(23, 6, 0, 'ship_piranha', 'Piranha', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(24, 7, 0, 'ship_nostromo', 'Nostromo', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(25, 8, 8, 'ship_vengeance', 'Vengeance', 280000, 0, 380, 10, 10, 0, 0, 0, 0, '{\"Experience\":25600,\"Honor\":256,\"Credits\":0,\"Uridium\":256}'),
(26, 9, 0, 'ship_bigboy', 'Bigboy', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(27, 10, 10, 'ship_goliath', 'Goliath', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(28, 12, 0, 'pet', 'P.E.T. Level 1-3', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":25000,\"Honor\":150,\"Credits\":0,\"Uridium\":0}'),
(29, 13, 0, 'pet', 'P.E.T. ', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":25000,\"Honor\":150,\"Credits\":0,\"Uridium\":0}'),
(30, 15, 0, 'pet', 'P.E.T. ', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":25000,\"Honor\":150,\"Credits\":0,\"Uridium\":0}'),
(31, 16, 8, 'ship_vengeance_design_adept', 'Adept', 280000, 0, 380, 10, 10, 0, 0, 0, 0, '{\"Experience\":25600,\"Honor\":256,\"Credits\":0,\"Uridium\":256}'),
(32, 17, 8, 'ship_vengeance_design_corsair', 'Corsair', 280000, 0, 380, 10, 10, 0, 0, 0, 0, '{\"Experience\":25600,\"Honor\":256,\"Credits\":0,\"Uridium\":256}'),
(33, 18, 8, 'ship_vengeance_design_lightning', 'Lightning', 280000, 0, 380, 10, 10, 0, 0, 0, 0, '{\"Experience\":25600,\"Honor\":256,\"Credits\":0,\"Uridium\":256}'),
(34, 19, 10, 'ship_goliath_design_jade', 'Jade', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(35, 20, 0, 'ship_admin', 'Ufo', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(36, 22, 0, 'pet', 'P.E.T. Normal', 0, 50000, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":25000,\"Honor\":150,\"Credits\":0,\"Uridium\":0}'),
(37, 49, 49, 'ship_aegis', 'Aegis', 275000, 0, 300, 10, 15, 0, 0, 0, 0, '{\"Experience\":25000,\"Honor\":250,\"Credits\":0,\"Uridium\":250}'),
(38, 52, 10, 'ship_goliath_design_amber', 'Amber', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(39, 53, 10, 'ship_goliath_design_crimson', 'Crimson', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(40, 54, 10, 'ship_goliath_design_sapphire', 'Sapphire', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(41, 56, 10, 'ship_goliath_design_enforcer', 'Enforcer', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(42, 57, 10, 'ship_goliath_design_independence', 'Independence', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(43, 58, 8, 'ship_vengeance_design_revenge', 'Revenge', 280000, 0, 380, 10, 10, 0, 0, 0, 0, '{\"Experience\":25600,\"Honor\":256,\"Credits\":0,\"Uridium\":256}'),
(44, 59, 10, 'ship_goliath_design_bastion', 'Bastion', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(45, 60, 8, 'ship_vengeance_design_avenger', 'Avenger', 280000, 0, 380, 10, 10, 0, 0, 0, 0, '{\"Experience\":25600,\"Honor\":256,\"Credits\":0,\"Uridium\":256}'),
(46, 14, 0, 'pet', 'P.E.T. Green', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":25000,\"Honor\":150,\"Credits\":0,\"Uridium\":0}'),
(47, 62, 10, 'ship_goliath_design_exalted', 'Exalted', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(48, 63, 10, 'ship_goliath_design_solace', 'Solace', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(49, 64, 10, 'ship_goliath_design_diminisher', 'Diminisher', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(50, 65, 10, 'ship_goliath_design_spectrum', 'Spectrum', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(51, 66, 10, 'ship_goliath_design_sentinel', 'Sentinel', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(52, 67, 10, 'ship_goliath_design_venom', 'Venom', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(53, 68, 10, 'ship_goliath_design_ignite', 'Ignite', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(54, 69, 69, 'ship_citadel', 'Citadel', 550000, 0, 240, 7, 20, 0, 0, 0, 0, '{\"Experience\":120000,\"Honor\":1200,\"Credits\":0,\"Uridium\":1200}'),
(55, 70, 70, 'ship_spearhead', 'Spearhead', 200000, 0, 370, 5, 12, 0, 0, 0, 0, '{\"Experience\":7500,\"Honor\":75,\"Credits\":0,\"Uridium\":75}'),
(56, 200, 8, 'ship_vengeance_design_pusat', 'Pusat', 225000, 0, 370, 16, 12, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(57, 86, 10, 'ship_goliath_design_kick', 'Kick', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(58, 87, 10, 'ship_goliath_design_referee', 'Referee', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(59, 88, 10, 'ship_goliath_design_goal', 'Goal', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(60, 98, 98, 'ship_police', 'PoliceShip', 1000000, 0, 300, 35, 35, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(61, 109, 10, 'ship_goliath_design_saturn', 'Saturn', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(62, 110, 10, 'ship_goliath_design_centaur', 'Centaur', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(63, 61, 10, 'ship_goliath_design_veteran', 'Veteran', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(64, 140, 10, 'ship_goliath_design_vanquisher', 'Vanquisher', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(65, 141, 10, 'ship_goliath_design_sovereign', 'Sovereign', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(66, 142, 10, 'ship_goliath_design_peacemaker', 'Peacemaker', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(67, 150, 0, 'ship_nostromo_design_diplomat', 'Nostromo Diplomat', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(68, 151, 0, 'ship_nostromo_design_envoy', 'Nostromo Envoy', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(69, 152, 0, 'ship_nostromo_design_ambassador', 'Nostromo Ambassador', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(70, 153, 10, 'ship_goliath_design_goliath-razer', 'Razer', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(71, 154, 0, 'ship_nostromo_design_nostromo-razer', 'Nostromo Razer', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(72, 155, 10, 'ship_goliath_design_turkish', 'Hezarfen', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(73, 156, 10, 'ship_g-surgeon', 'Surgeon', 356000, 0, 300, 15, 16, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(74, 157, 49, 'ship_aegis_design_aegis-elite', 'Aegis Veteran', 275000, 0, 300, 10, 15, 0, 0, 0, 0, '{\"Experience\":25000,\"Honor\":250,\"Credits\":0,\"Uridium\":250}'),
(75, 158, 49, 'ship_aegis_design_aegis-superelite', 'Aegis Super Elite', 275000, 0, 300, 10, 15, 0, 0, 0, 0, '{\"Experience\":25000,\"Honor\":250,\"Credits\":0,\"Uridium\":250}'),
(76, 159, 69, 'ship_citadel_design_citadel-elite', 'Citadel Veteran', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(77, 1060, 69, 'ship_citadel_design_citadel-superelite', 'Citadel Super Elite', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(78, 1061, 70, 'ship_aegis_design_aegis-elite', 'Spearhead Veteran', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(79, 1062, 70, 'ship_aegis_design_spearhead-superelite', 'Spearhead Super Elite', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(80, 442, 0, 'spaceball_summer', '..::{Spaceball}::..', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(81, 443, 0, 'spaceball_winter', '..::{Spaceball}::..', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(82, 444, 0, 'spaceball_soccer', '..::{Spaceball}::..', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(83, 79, 0, 'ship79', '-=[ Kristallon ]=-', 800000, 800000, 250, 1, 1, 100, 0, 9000, 1, '{\"Experience\":104800,\"Honor\":550,\"Credits\":838400,\"Uridium\":1300}'),
(84, 78, 0, 'ship78', '-=[ Kristallin ]=-', 200000, 200000, 320, 1, 1, 100, 1, 2500, 1, '{\"Experience\":25800,\"Honor\":150,\"Credits\":238400,\"Uridium\":600}'),
(85, 35, 0, 'ship35', '..::{ Boss Kristallon }::..', 1600000, 1200000, 250, 1, 1, 100, 0, 18000, 1, '{\"Experience\":204800,\"Honor\":1024,\"Credits\":1638400,\"Uridium\":2300}'),
(86, 29, 0, 'ship29', '..::{ Boss Kristallin }::..', 400000, 400000, 320, 1, 1, 100, 1, 4500, 1, '{\"Experience\":52800,\"Honor\":250,\"Credits\":438400,\"Uridium\":1000}'),
(87, 245, 245, 'ship_cyborg', 'Cyborg', 365000, 0, 300, 16, 16, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(88, 246, 246, 'ship_hammerclaw', 'Hammerclaw', 377500, 0, 310, 12, 14, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(89, 23, 0, 'ship23', '..::{Boss Streuner}::..', 12225, 12225, 320, 1, 1, 100, 1, 300, 1, '{\"Experience\":1816,\"Honor\":70,\"Credits\":12845,\"Uridium\":40} '),
(90, 281, 245, 'ship_cyborg_design_cyborg-infinite', 'Cyborg-Infinite', 365000, 0, 300, 16, 16, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(91, 249, 245, 'ship_cyborg_design_cyborg-lava', 'Cyborg-Lava', 365000, 0, 300, 16, 16, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(92, 273, 245, 'ship_cyborg_design_cyborg-carbonite', 'Cyborg-Carbonite', 365000, 0, 300, 16, 16, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(93, 274, 245, 'ship_cyborg_design_cyborg-firestar', 'Cyborg-Firestar', 365000, 0, 300, 16, 16, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(94, 115, 0, 'ship115', '..::{ Battleray }::..', 1000000, 260000, 200, 1, 1, 100, 1, 15000, 1, '{\"Experience\":83300,\"Honor\":190,\"Credits\":1160000,\"Uridium\":1500}'),
(95, 111, 0, 'ship111', '..::{ Uber Interceptor }::..', 480000, 320000, 500, 1, 1, 100, 1, 4000, 1, '{\"Experience\":30000,\"Honor\":100,\"Credits\":100000,\"Uridium\":700}\r\n'),
(96, 46, 0, 'ship46', '..::{ Uber Sibelon }::..', 3200000, 3200000, 100, 1, 1, 100, 1, 36000, 1, '{\"Experience\":404800,\"Honor\":2150,\"Credits\":3638400,\"Uridium\":5200}'),
(97, 32, 0, 'ship32', 'Santa-1100101', 800000, 1200000, 250, 1, 1, 100, 1, 20000, 1, '{\"Experience\":256000,\"Honor\":512,\"Credits\":2048000,\"Uridium\":3000}'),
(98, 486, 10, 'ship_spectrum_design_spectrum-dusklight', 'Spectrum-dusklight', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(99, 487, 10, 'ship_spectrum_design_spectrum-legend', 'Spectrum-Legend', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(100, 265, 10, 'ship_sentinel_design_sentinel-argon', 'sentinel-argon', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(101, 266, 10, 'ship_sentinel_design_sentinel-legend', 'Sentinel-Legend', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(102, 268, 10, 'ship_diminisher_design_diminisher-argon', 'Diminisher-Argon', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(103, 269, 10, 'ship_diminisher_design_diminisher-legend', 'Diminisher-Legend', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(104, 1200, 10, 'ship_goliath_design_orion', 'Goliath-Orion', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(105, 80, 0, 'ship80', '-=[ Cubikon ]=-', 4200000, 2200000, 30, 0, 0, 100, 0, 0, 1, '{\"Experience\":251200,\"Honor\":500,\"Credits\":409600,\"Uridium\":20000}'),
(106, 81, 0, 'ship81', '..::{ Protegit }::..', 10000000, 10000000, 400, 1, 1, 100, 1, 2000, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(107, 473, 10, 'ship_g-surgeon_design_g-surgeon-cicada', 'Surgeon-Cicada', 356000, 0, 300, 15, 16, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(108, 474, 10, 'ship_g-surgeon_design_g-surgeon-locust', 'Surgeon-Locust', 356000, 0, 300, 15, 16, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(109, 25, 0, 'ship25', '..::{ Boss Saimon }::..', 24225, 24225, 400, 1, 1, 100, 1, 650, 1, '{\"Experience\":3216,\"Honor\":150,\"Credits\":25845,\"Uridium\":80}'),
(110, 26, 0, 'ship26', '..::{ Boss Devolarium }::..', 800000, 800000, 250, 1, 1, 100, 1, 9000, 1, '{\"Experience\":104800,\"Honor\":550,\"Credits\":838400,\"Uridium\":1300}'),
(111, 27, 0, 'ship27', '..::{ Boss Sibelonit }::..', 400000, 400000, 320, 1, 1, 100, 1, 4500, 1, '{\"Experience\":52800,\"Honor\":250,\"Credits\":438400,\"Uridium\":1000}'),
(112, 28, 0, 'ship28', '..::{ Boss Lordakium }::..', 1600000, 1200000, 250, 1, 1, 100, 0, 18000, 1, '{\"Experience\":204800,\"Honor\":1024,\"Credits\":1638400,\"Uridium\":2300}'),
(113, 31, 0, 'ship31', '..::{ Boss Mordon }::..', 160000, 160000, 250, 1, 1, 100, 1, 2000, 1, '{\"Experience\":20320,\"Honor\":120,\"Credits\":190360,\"Uridium\":220}'),
(114, 33, 0, 'ship33', '(Super Ice Meteoroid )', 1600000, 1200000, 250, 1, 1, 100, 0, 24000, 1, '{\"Experience\":1000000,\"Honor\":5000,\"Credits\":3000000,\"Uridium\":4200}'),
(115, 34, 0, 'ship34', '..::{ Boss StreuneR }::..', 12225, 12225, 320, 1, 1, 100, 1, 300, 1, '{\"Experience\":1816,\"Honor\":70,\"Credits\":12845,\"Uridium\":40}'),
(116, 36, 0, 'ship36', '( Uber StreuneR )', 24500, 24500, 320, 1, 1, 100, 1, 900, 1, '{\"Experience\":3200,\"Honor\":150,\"Credits\":24845,\"Uridium\":90}'),
(117, 24, 0, 'ship24', '( Uber Lordakia )', 24225, 24225, 320, 1, 1, 100, 1, 480, 1, '{\"Experience\":3416,\"Honor\":140,\"Credits\":24845,\"Uridium\":80}'),
(118, 42, 0, 'ship42', '( Uber Kristallin )', 850000, 650000, 320, 1, 1, 100, 1, 4200, 1, '{\"Experience\":104800,\"Honor\":550,\"Credits\":838400,\"Uridium\":2300}'),
(119, 45, 0, 'ship45', '( Uber Kristallon )', 3000000, 2400000, 320, 1, 1, 100, 1, 36000, 1, '{\"Experience\":404800,\"Honor\":2024,\"Credits\":2638400,\"Uridium\":4300}\r\n'),
(120, 48, 0, 'ship48', '..::{ DisguisoR }::..', 1700000, 1500000, 200, 1, 1, 100, 0, 19000, 1, '{\"Experience\":240000,\"Honor\":2048,\"Credits\":2400000,\"Uridium\":4070}'),
(121, 82, 0, 'ship82', '-== Kucurbium ==-', 5000000, 5000000, 200, 1, 1, 100, 1, 27000, 1, '{\"Experience\":819200,\"Honor\":4096,\"Credits\":2000000,\"Uridium\":6500}'),
(122, 90, 0, 'ship90', '-== Century Falcon ==-', 23000000, 11000000, 360, 1, 1, 100, 0, 50000, 1, '{\"Experience\":9500000,\"Honor\":130000,\"Credits\":22500000,\"Uridium\":120000}'),
(123, 91, 0, 'ship91', '-== Corsair ==-', 800000, 800000, 380, 1, 1, 100, 1, 9800, 1, '{\"Experience\":250000,\"Honor\":350,\"Credits\":1038400,\"Uridium\":2400}'),
(124, 92, 0, 'ship91', '-== Outcast ==-', 1800000, 1800000, 370, 1, 1, 100, 1, 7500, 1, '{\"Experience\":325000,\"Honor\":750,\"Credits\":1500000,\"Uridium\":3600}'),
(125, 93, 0, 'ship93', '-== Marauder ==-', 400000, 400000, 370, 1, 1, 100, 1, 5500, 1, '{\"Experience\":52800,\"Honor\":250,\"Credits\":438400,\"Uridium\":1000}'),
(126, 94, 0, 'ship94', '-== Vagrant ==-', 200000, 200000, 400, 1, 1, 100, 1, 2500, 1, '{\"Experience\":25800,\"Honor\":150,\"Credits\":238400,\"Uridium\":600}'),
(127, 95, 0, 'ship95', '-== Convict ==-', 2200000, 2200000, 400, 1, 1, 100, 1, 11500, 1, '{\"Experience\":425000,\"Honor\":1500,\"Credits\":2000000,\"Uridium\":4500}'),
(128, 96, 0, 'ship96', '-== Hooligan ==-', 800000, 800000, 380, 1, 1, 100, 1, 9000, 1, '{\"Experience\":250000,\"Honor\":350,\"Credits\":1038400,\"Uridium\":2400}'),
(129, 97, 0, 'ship97', '-== Ravager ==-', 2000000, 1800000, 380, 1, 1, 100, 1, 9500, 1, '{\"Experience\":325000,\"Honor\":750,\"Credits\":1500000,\"Uridium\":3600}'),
(130, 106, 0, 'ship106', '-== Football Lordakia ==-', 150000, 120000, 380, 1, 1, 100, 1, 3500, 1, '{\"Experience\":25000,\"Honor\":64,\"Credits\":125000,\"Uridium\":400}'),
(131, 107, 0, 'ship107', '-== Sunburst Lordakim ==-', 1000000, 1200000, 250, 1, 1, 100, 1, 5000, 1, '{\"Experience\":161500,\"Honor\":324,\"Credits\":1250000,\"Uridium\":2200}'),
(132, 112, 0, 'ship112', '-== Barracuda ==-', 180000, 100000, 430, 1, 1, 100, 1, 6000, 1, '{\"Experience\":15000,\"Honor\":56,\"Credits\":90000,\"Uridium\":50}'),
(133, 113, 0, 'ship113', '-== Saboteur ==-', 200000, 150000, 430, 1, 1, 100, 1, 4000, 1, '{\"Experience\":23000,\"Honor\":72,\"Credits\":125000,\"Uridium\":100}'),
(134, 114, 0, 'ship114', '-== Annihilator ==-', 300000, 200000, 350, 1, 1, 100, 1, 15000, 1, '{\"Experience\":75000,\"Honor\":128,\"Credits\":250000,\"Uridium\":315}'),
(135, 116, 0, 'ship116', '-== (Hitac) ==-', 15000000, 5500000, 300, 1, 1, 100, 1, 27000, 1, '{\"Experience\":8000000,\"Honor\":15000,\"Credits\":22500000,\"Uridium\":135000}'),
(136, 117, 0, 'ship117', '-== (Hitac Minion) ==-', 3800000, 26000000, 300, 1, 1, 100, 1, 10000, 1, '{\"Experience\":1000000,\"Honor\":20000,\"Credits\":2500000,\"Uridium\":10000}'),
(137, 118, 0, 'ship118', '-== (Boss Curcubitor) ==-', 1200000, 1200000, 300, 1, 1, 100, 0, 12000, 1, '{\"Experience\":112000,\"Honor\":450,\"Credits\":750000,\"Uridium\":780}'),
(138, 122, 0, 'ship122', '-== (Emperor Kristallon) ==-', 14080000, 11100000, 300, 1, 1, 100, 0, 95000, 1, '{\"Experience\":1512000,\"Honor\":9450,\"Credits\":5750000,\"Uridium\":67780}'),
(139, 123, 0, 'ship123', '-== (Emperor Lordakium) ==-', 9600000, 6400000, 300, 1, 1, 100, 0, 45000, 1, '{\"Experience\":1200000,\"Honor\":7450,\"Credits\":3750000,\"Uridium\":33780}'),
(140, 124, 0, 'ship124', '-== (Emperor Sibelon) ==-', 6400000, 6400000, 300, 1, 1, 100, 0, 35000, 1, '{\"Experience\":780000,\"Honor\":3450,\"Credits\":1750000,\"Uridium\":18780}'),
(141, 126, 0, 'ship126', '-== (-Demaner Freigter-) ==-', 400000000, 300000000, 140, 1, 1, 100, 0, 15000, 1, '{\"Experience\":45000000,\"Honor\":60450,\"Credits\":12750000,\"Uridium\":458780}'),
(142, 127, 0, 'ship127', '-== (-Skoll-) ==-', 100000000, 100000000, 290, 1, 1, 100, 1, 65000, 1, '{\"Experience\":10000000,\"Honor\":10450,\"Credits\":50000000,\"Uridium\":100000}'),
(143, 148, 0, 'ship148', '(Streuner Guard Turret)', 300000, 800000, 0, 1, 1, 100, 1, 5000, 1, '{\"Experience\":22500,\"Honor\":100,\"Credits\":180000,\"Uridium\":400}'),
(144, 175, 175, 'ship_tartarus', 'Tartarus red', 360000, 0, 300, 14, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(145, 176, 175, 'ship_tartarus_design_tartarus-orange', 'Tartarus Orange', 360000, 0, 300, 14, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(146, 177, 175, 'ship_tartarus_design_tartarus-mint', 'Tartarus Mint', 360000, 0, 300, 14, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(147, 223, 175, 'ship_tartarus_design_tartarus-lava', 'Tartarus Lava', 360000, 0, 300, 14, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(148, 225, 175, 'ship_tartarus_design_tartarus-ocean', 'Tartarus Ocean', 360000, 0, 300, 14, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(149, 222, 175, 'ship_tartarus_design_tartarus-argon', 'Tartarus Argon', 360000, 0, 300, 14, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(150, 224, 175, 'ship_tartarus_design_tartarus-legend', 'Tartarus Legend', 360000, 0, 300, 14, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(151, 226, 175, 'ship_tartarus_design_tartarus-poison', 'Tartarus Poison', 360000, 0, 300, 14, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(152, 178, 178, 'ship_mimesis', 'Mimesis Orange', 386000, 0, 300, 14, 14, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(153, 179, 178, 'ship_mimesis_design_mimesis-red', 'Mimesis Red', 386000, 0, 300, 14, 14, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(154, 180, 178, 'ship_mimesis_design_mimesis-mint', 'Mimesis Mint', 386000, 0, 300, 14, 14, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(155, 248, 178, 'ship_mimesis_design_mimesis-lava', 'Mimesis Lava', 386000, 0, 300, 14, 14, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(156, 257, 178, 'ship_mimesis_design_mimesis-poison', 'Mimesis Poison', 386000, 0, 300, 14, 14, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(157, 258, 178, 'ship_mimesis_design_mimesis-ocean', 'Mimesis Ocean', 386000, 0, 300, 14, 14, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(158, 259, 178, 'ship_mimesis_design_mimesis-argon', 'Mimesis Argon', 386000, 0, 300, 14, 14, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(159, 260, 178, 'ship_mimesis_design_mimesis-legend', 'Mimesis Legend', 386000, 0, 300, 14, 14, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(160, 339, 178, 'ship_mimesis_design_mimesis-carbonite', 'Mimesis Carbonite', 386000, 0, 300, 14, 14, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(161, 347, 178, 'ship_mimesis_design_mimesis-nobilis', 'Mimesis Nobilis', 386000, 0, 300, 14, 14, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(162, 275, 245, 'ship_cyborg_design_cyborg-maelstrom', 'Cyborg-Maelstrom', 365000, 0, 300, 16, 16, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(163, 276, 245, 'ship_cyborg_design_cyborg-starscream', 'Cyborg-Starscream', 365000, 0, 300, 16, 16, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(164, 277, 245, 'ship_cyborg_design_cyborg-sunstorm', 'Cyborg-Sunstorm', 365000, 0, 300, 16, 16, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(165, 282, 245, 'ship_cyborg_design_cyborg-scourge', 'Cyborg-Scourge', 365000, 0, 300, 16, 16, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(166, 338, 245, 'ship_cyborg_design_cyborg-frozen', 'Cyborg-Frozen', 365000, 0, 300, 16, 16, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(167, 342, 245, 'ship_cyborg_design_cyborg-dusklight', 'Cyborg-Dusklight', 365000, 0, 300, 16, 16, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(168, 345, 245, 'ship_cyborg_design_cyborg-nobilis', 'Cyborg-Nobilis', 365000, 0, 300, 16, 16, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(169, 348, 245, 'ship_cyborg_design_cyborg-inferno', 'Cyborg-Inferno', 365000, 0, 300, 16, 16, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(170, 352, 245, 'ship_cyborg_design_cyborg-ullrin', 'Cyborg-Ullrin', 365000, 0, 300, 16, 16, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(171, 344, 344, 'ship_hecate', 'Hecate', 377500, 0, 300, 15, 16, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(172, 343, 344, 'ship_hecate_design_hecate-dusklight', 'Hecate-Dusklight', 377500, 0, 300, 15, 16, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(173, 350, 344, 'ship_hecate_design_hecate-inferno', 'Hecate-Inferno', 377500, 0, 300, 15, 16, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(174, 666, 344, 'ship_hecate_design_hecate-ullrin', 'Hecate-Ullrin', 377500, 0, 300, 15, 16, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(175, 250, 246, 'ship_hammerclaw_design_hammerclaw-lava', 'Hammerclaw-lava', 377500, 0, 300, 12, 14, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(176, 667, 246, 'ship_hammerclaw_design_hammerclaw-carbonite', 'Hammerclaw-Carbonite', 377500, 0, 300, 12, 14, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(177, 283, 246, 'ship_hammerclaw_design_hammerclaw-bane', 'Hammerclaw-Bane', 377500, 0, 300, 12, 14, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(178, 337, 246, 'ship_hammerclaw_design_hammerclaw-frozen', 'Hammerclaw-Frost', 377500, 0, 300, 12, 14, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(179, 346, 246, 'ship_hammerclaw_design_hammerclaw-nobilis', 'Hammerclaw-Nobilis', 377500, 0, 300, 12, 14, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(180, 353, 246, 'ship_hammerclaw_design_hammerclaw-Ullrin', 'Hammerclaw-Ullrin', 377500, 0, 300, 12, 14, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(181, 227, 10, 'ship_goliath-x', 'Goliath X', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(182, 228, 10, 'ship_goliath-x_design_goliath-x-ocean', 'Goliath X Ocean', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(183, 229, 10, 'ship_goliath-x_design_goliath-x-borealis', 'Goliath X Borealis', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(184, 230, 10, 'ship_goliath-x_design_goliath-x-sandstorm', 'Goliath X Sandstorm', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(185, 270, 10, 'ship_goliath-x_design_goliath-x-lava', 'Goliath X Lava', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(186, 271, 10, 'ship_goliath-x_design_goliath-x-argon', 'Goliath X Argon', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(187, 272, 10, 'ship_goliath-x_design_goliath-x-legend', 'Goliath X Legend', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(188, 172, 8, 'ship_v-lightning_design_v-lightning-expo2016', 'Vengeance Skill Design Lightning Violet', 280000, 0, 380, 10, 10, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(189, 244, 8, 'ship_v-lightning_design_v-lightning-inferno', 'Vengeance Skill Design Lightning Inferno', 280000, 0, 380, 10, 10, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(190, 164, 8, 'ship_v-lightning_design_v-lightning-frost', 'Vengeance Skill Design Lightning Frost', 280000, 0, 380, 10, 10, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(191, 168, 10, 'ship_g-champion', 'Goliath Champion', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(192, 668, 10, 'ship_g-champion_design_g-champion-legend', 'Champion-Legend', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(193, 669, 10, 'ship_g-champion_design_g-champion-lava', 'Champion-Lava', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(194, 670, 10, 'ship_g-champion_design_g-champion-argon', 'Champion-Argon', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(195, 671, 10, 'ship_g-champion_design_g-champion-dusklight', 'Champion-Dusklight', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(196, 672, 10, 'ship_g-champion_design_g-champion-albania', 'Champion-Albania', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(197, 673, 10, 'ship_g-champion_design_g-champion-austria', 'Champion-Austria', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(198, 674, 10, 'ship_g-champion_design_g-champion-belgium', 'Champion-Belgium', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(199, 675, 10, 'ship_g-champion_design_g-champion-croatia', 'Champion-Croatia', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(200, 676, 10, 'ship_g-champion_design_g-champion-czech-republic', 'Champion-Czech-Republic', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(201, 677, 10, 'ship_g-champion_design_g-champion-england', 'Champion-England', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(202, 678, 10, 'ship_g-champion_design_g-champion-france', 'Champion-France', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(203, 679, 10, 'ship_g-champion_design_g-champion-germany', 'Goliath Champion Germany', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(204, 680, 10, 'ship_g-champion_design_g-champion-hungary', 'Goliath Champion Hungary', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(205, 681, 10, 'ship_g-champion_design_g-champion-iceland', 'Goliath Champion Iceland', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(206, 682, 10, 'ship_g-champion_design_g-champion-italy', 'Goliath Champion italy', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(207, 683, 10, 'ship_g-champion_design_g-champion-northern-ireland', 'Goliath Champion Northern Ireland', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(208, 684, 10, 'ship_g-champion_design_g-champion-poland', 'Goliath Champion Poland', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(209, 685, 10, 'ship_g-champion_design_g-champion-portugal', 'Goliath Champion Portugal', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(210, 686, 10, 'ship_g-champion_design_g-champion-republic-of-ireland', 'Goliath Champion Republic of Ireland', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(211, 687, 10, 'ship_g-champion_design_g-champion-romania', 'Goliath Champion Romania', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(212, 688, 10, 'ship_g-champion_design_g-champion-russia', 'Goliath Champion Russia', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(213, 689, 10, 'ship_g-champion_design_g-champion-slovakia', 'Goliath Champion Slovakia', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(214, 690, 10, 'ship_g-champion_design_g-champion-spain', 'Goliath Champion Spain', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(215, 691, 10, 'ship_g-champion_design_g-champion-sweden', 'Goliath Champion Sweden', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(216, 692, 10, 'ship_g-champion_design_g-champion-switzerland', 'Goliath Champion Switzerland', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(217, 693, 10, 'ship_g-champion_design_g-champion-ukraine', 'Goliath Champion Ukraine', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(218, 694, 10, 'ship_g-champion_design_g-champion-wales', 'Goliath Champion Wales', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(219, 695, 10, 'ship_solace_design_solace-blaze', 'Solace-Blaze', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(220, 696, 10, 'ship_sentinel_design_sentinel-frost', 'Sentinel-Frost', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(221, 697, 10, 'ship_sentinel_design_sentinel-inferno', 'Sentinel-Inferno', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(222, 698, 10, 'ship_sentinel_design_sentinel-expo2016', 'Sentinel-Expo 2016', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(223, 699, 10, 'ship_sentinel_design_sentinel-lava', 'Sentinel-Lava', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(224, 700, 10, 'ship_sentinel_design_sentinel-argon', 'Sentinel-Argon', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(225, 701, 10, 'ship_sentinel_design_sentinel-legend', 'Sentinel-Legend', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(226, 702, 10, 'ship_venom_design_venom-blaze', 'Venom-Blaze', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(227, 703, 10, 'ship_venom_design_venom-poison', 'Venom-Poison', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(228, 704, 10, 'ship_spectrum_design_spectrum-lava', 'Spectrum-Lava', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(229, 705, 10, 'ship_venom_design_venom-borealis', 'Venom-Borealis', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(230, 706, 10, 'ship_venom_design_venom-argon', 'Venom-Argon', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(231, 708, 10, 'ship_spectrum_design_spectrum-frost', 'Spectrum-Frost', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(232, 709, 10, 'ship_spectrum_design_spectrum-inferno', 'Spectrum-Inferno', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(233, 710, 10, 'ship_spectrum_design_spectrum-poison', 'Spectrum-Poison', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(234, 711, 10, 'ship_spectrum_design_spectrum-sandstorm', 'Spectrum-Sandstorm', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(235, 712, 10, 'ship_spectrum_design_spectrum-ocean', 'Spectrum-Ocean', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(236, 713, 10, 'ship_spectrum_design_spectrum-blaze', 'Spectrum-Blaze', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(237, 714, 10, 'ship_diminisher_design_diminisher-expo2016', 'Diminisher-Expo', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(238, 715, 10, 'ship_diminisher_design_diminisher-lava', 'Diminisher-Lava', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(239, 716, 10, 'ship_solace_design_solace-borealis', 'Solace-Borealis', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(240, 717, 10, 'ship_solace_design_solace-argon', 'Solace-argon', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(241, 718, 10, 'ship_solace_design_solace-inferno', 'Solace-Inferno', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(242, 720, 10, 'ship_venom_design_venom-frost', 'Venom Frost', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(243, 721, 10, 'ship_venom_design_venom-inferno', 'Venom Inferno', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(244, 722, 10, 'ship_venom_design_venom-ocean', 'Venom-Ocean', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(245, 723, 10, 'ship_goliath_design_bronze', 'Goliath Bronze', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(246, 724, 10, 'ship_goliath_design_silver', 'Goliath Silver', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(247, 725, 10, 'ship_goliath_design_gold', 'Goliath Gold', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(248, 726, 10, 'ship_goliath_design_iron', 'Goliath Iron', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(249, 727, 10, 'ship_goliath_design_goliath-frost', 'Goliath Frost', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(250, 1201, 10, 'ship_goliath_design_blue', 'Goliath-Blue', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(251, 1202, 10, 'ship_goliath_design_orange', 'Goliath-Orange', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(252, 1203, 10, 'ship_goliath_design_rose', 'Goliath-Rose', 356000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}'),
(253, 251, 0, 'ship_kristallon_pink', '-=[Viral Kristallon]=-', 400000, 300000, 250, 1, 1, 100, 0, 4500, 1, '{\"Experience\":51200,\"Honor\":256,\"Credits\":409600,\"Uridium\":128}'),
(254, 252, 0, 'ship_kristallin_pink', '-=[Plagued Kristallin ]=-', 50000, 40000, 320, 1, 1, 100, 1, 1100, 1, '{\"Experience\":6400,\"Honor\":32,\"Credits\":12800,\"Uridium\":16}'),
(255, 129, 0, 'ship129', '-=[Gygerim Overlord]=-', 400000, 300000, 250, 1, 1, 100, 0, 4500, 1, '{\"Experience\":51200,\"Honor\":256,\"Credits\":409600,\"Uridium\":128}'),
(256, 128, 0, 'ship128', '-=[Plagued Gygerthrall ]=-', 50000, 40000, 320, 1, 1, 100, 1, 1100, 1, '{\"Experience\":6400,\"Honor\":32,\"Credits\":12800,\"Uridium\":16}'),
(257, 365, 365, 'ship_disruptor', 'disruptor', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(258, 366, 365, 'ship_disruptor_design_disruptor-neikos', 'Disruptor Neikos', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(259, 367, 365, 'ship_disruptor_design_disruptor-arios', 'Disruptor Arios', 356000, 0, 300, 15, 15, 0, 1, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":512000,\"Uridium\":512}'),
(260, 71, 0, 'ship71', '-=[ Lordakia ]=-', 6225, 6225, 320, 1, 1, 100, 1, 140, 1, '{\"Experience\":816,\"Honor\":36,\"Credits\":6845,\"Uridium\":20}'),
(261, 73, 0, 'ship73', '-=[ Mordon ]=-', 80000, 80000, 150, 1, 1, 100, 1, 1000, 1, '{\"Experience\":10320,\"Honor\":60,\"Credits\":95360,\"Uridium\":120}'),
(262, 74, 0, 'ship74', '-=[ Sibelon ]=-', 800000, 800000, 100, 1, 1, 100, 1, 9000, 1, '{\"Experience\":104800,\"Honor\":550,\"Credits\":838400,\"Uridium\":1300}'),
(263, 75, 0, 'ship75', '-=[ Saimon ]=-', 12225, 12225, 320, 1, 1, 100, 1, 280, 1, '{\"Experience\":1616,\"Honor\":70,\"Credits\":12845,\"Uridium\":40}'),
(264, 76, 0, 'ship76', '-=[ Sibelonit ]=-', 200000, 200000, 320, 1, 1, 100, 1, 2500, 1, '{\"Experience\":25800,\"Honor\":150,\"Credits\":238400,\"Uridium\":600}'),
(265, 77, 0, 'ship77', '-=[ Lordakium ]=-', 800000, 800000, 230, 1, 1, 4000, 1, 9000, 1, '{\"Experience\":104800,\"Honor\":550,\"Credits\":838400,\"Uridium\":1300}'),
(266, 84, 0, 'ship84', '-=[ Streuner ]=-', 3225, 3225, 280, 1, 1, 100, 1, 40, 1, '{\"Experience\":416,\"Honor\":16,\"Credits\":3845,\"Uridium\":10}'),
(267, 72, 0, 'ship72', '-=[ Devolarium ]=-', 400000, 400000, 200, 1, 1, 100, 1, 5500, 1, '{\"Experience\":50800,\"Honor\":300,\"Credits\":438400,\"Uridium\":600}'),
(268, 99, 0, 'ship99', '-=[ Scorcher ]=-', 200000, 200000, 360, 1, 1, 100, 1, 3000, 1, '{\"Experience\":6400,\"Honor\":32,\"Credits\":12800,\"Uridium\":16}'),
(269, 100, 0, 'ship100', '-=[ Infernal ]=-', 60000, 50000, 370, 1, 1, 100, 1, 1200, 1, '{\"Experience\":6400,\"Honor\":32,\"Credits\":12800,\"Uridium\":16}'),
(270, 102, 0, 'ship102', '-=[ Melter ]=-', 300000, 400000, 380, 1, 1, 100, 1, 5000, 1, '{\"Experience\":6400,\"Honor\":32,\"Credits\":12800,\"Uridium\":16}'),
(271, 105, 0, 'ship105', '-=[ Devourer ]=-', 3000000, 2000000, 370, 1, 1, 100, 1, 12000, 1, '{\"Experience\":6400,\"Honor\":32,\"Credits\":12800,\"Uridium\":16}'),
(272, 160, 0, 'pet_frozen', 'P.E.T. Frozen', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(273, 161, 0, 'pet_red', 'P.E.T. Red', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(274, 162, 0, 'pet_green', 'P.E.T. Green', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(275, 190, 0, 'pet-hammerclaw', 'P.E.T. Hammerclaw', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(276, 194, 0, 'pet-hammerclaw-argon', 'P.E.T  Hammerclaw argon', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(277, 210, 0, 'pet_designs_pet-phoenix', 'P.E.T. phoenix', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(278, 174, 0, 'pet-pusat-blaze', 'Pet Pusat Blaze', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(279, 187, 0, 'pet_design_pet-pusat-poison', 'Pusat Pet Poison', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}'),
(280, 103, 0, 'ship103', '-=[  Icy ]=-', 10000000, 8500000, 320, 1, 1, 100, 1, 9000, 1, '{\"Experience\":500000,\"Honor\":1000,\"Credits\":10000000,\"Uridium\":45000}');

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
  MODIFY `userId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `player_designs`
--
ALTER TABLE `player_designs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `player_equipment`
--
ALTER TABLE `player_equipment`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `mapID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=307;

--
-- AUTO_INCREMENT de la tabla `server_ships`
--
ALTER TABLE `server_ships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3031;

--
-- AUTO_INCREMENT de la tabla `user_bans`
--
ALTER TABLE `user_bans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
