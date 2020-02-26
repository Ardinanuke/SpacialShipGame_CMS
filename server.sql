/*
 Navicat MySQL Data Transfer

 Source Server         : server
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : server

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 21/02/2020 07:18:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for chat_permissions
-- ----------------------------
DROP TABLE IF EXISTS `chat_permissions`;
CREATE TABLE `chat_permissions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of chat_permissions
-- ----------------------------
INSERT INTO `chat_permissions` VALUES (1, 1, 1);

-- ----------------------------
-- Table structure for log_event_jpb
-- ----------------------------
DROP TABLE IF EXISTS `log_event_jpb`;
CREATE TABLE `log_event_jpb`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `players` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `finalists` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `winner_id` int(11) NOT NULL,
  `start_date` datetime(0) NOT NULL,
  `end_date` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for log_player_kills
-- ----------------------------
DROP TABLE IF EXISTS `log_player_kills`;
CREATE TABLE `log_player_kills`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `killer_id` int(11) NOT NULL,
  `target_id` int(11) NOT NULL,
  `pushing` tinyint(1) NOT NULL,
  `date_added` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;
/**





TABLAS AGREGADAS :)



*/
-- ----------------------------
-- Table structure for player_designs
-- ----------------------------
DROP TABLE IF EXISTS `player_designs`;
CREATE TABLE `player_designs`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `baseShipId` int(11) NOT NULL,
  `userId` bigint(20) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;
-- ----------------------------
-- Table structure for event_coins
-- ----------------------------
DROP TABLE IF EXISTS `event_coins`;
CREATE TABLE `event_coins`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coins` int(11) NOT NULL,
  `userId` bigint(20) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;
-- ----------------------------
-- Table structure for news
-- ----------------------------

-- ----------------------------
-- ALERT
-- ----------------------------

/**





TABLAS AGREGADAS :)



*/
-- ----------------------------
-- Table structure for player_accounts
-- ----------------------------
DROP TABLE IF EXISTS `player_accounts`;
CREATE TABLE `player_accounts`  (
  `userId` bigint(20) NOT NULL AUTO_INCREMENT,
  `sessionId` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `data` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `bootyKeys` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `info` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `destructions` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pilotName` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `petName` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'P.E.T 15',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(260) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `shipId` int(11) NOT NULL DEFAULT 10,
  `premium` tinyint(1) NOT NULL DEFAULT 0,
  `title` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `factionId` int(1) NOT NULL DEFAULT 0,
  `clanId` int(11) NOT NULL DEFAULT 0,
  `rankId` int(2) NOT NULL DEFAULT 1,
  `rankPoints` bigint(20) NOT NULL DEFAULT 0,
  `rank` int(11) NOT NULL DEFAULT 0,
  `warPoints` bigint(20) NOT NULL,
  `warRank` int(11) NOT NULL,
  `extraEnergy` int(11) NOT NULL,
  `nanohull` int(11) NOT NULL,
  `verification` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `oldPilotNames` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `version` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`userId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of player_accounts
-- ----------------------------
INSERT INTO `player_accounts` VALUES (1, '33Zlewo9Eptin2Lz1GUFb0V1pXG0J78W', '{\"uridium\":139,\"credits\":58160,\"honor\":32,\"experience\":6400,\"jackpot\":0}', '{\"greenKeys\": 0, \"redKeys\": 0, \"blueKeys\": 0}', '{\"lastIP\":\"189.174.117.41\",\"registerIP\":\"189.174.117.41\",\"registerDate\":\"21.02.2020 03:37:11\"}', '{\"fpd\":0,\"dbrz\":0}', 'MGL_RELOAD', 'MGL_RELOAD', 'P.E.T 15', '$2y$10$A2dUCu6sd4fjQ02R1PVdvOoWENwtxBK3cPZ.laEUeA4QJv1mpVJ9C', 'mgl.gb@gmail.com', 98, 0, '', 2, 0, 21, 1100, 1, 0, 0, 0, 0, '{\"verified\":true,\"hash\":\"HsRs5FXANNslxVK6LRxznx9HGF4Bvb59\"}', '[]', 1);
INSERT INTO `player_accounts` VALUES (4, 'sy5KjV1btGCpKJq5XmZIXsOXBsioC1IB', '{\"uridium\":0,\"credits\":0,\"honor\":0,\"experience\":0,\"jackpot\":0}', '{\"greenKeys\": 0, \"redKeys\": 0, \"blueKeys\": 0}', '{\"lastIP\":\"85.117.246.106\",\"registerIP\":\"85.117.246.106\",\"registerDate\":\"21.02.2020 03:44:28\"}', '{\"fpd\":0,\"dbrz\":0}', 'Revamped.', 'Revamped.', 'P.E.T 15', '$2y$10$FjVURED3JeIPNQ6xWnrjruf7CmMI28P43aD0Fa2L47BMmYHhZi7Am', 'alexfrunza91@gmail.com', 10, 0, '', 0, 0, 1, 1100, 2, 0, 0, 0, 0, '{\"verified\":false,\"hash\":\"sy5KjV1btGCpKJq5XmZIXsOXBsioC1IB\"}', '[]', 1);
INSERT INTO `player_accounts` VALUES (5, 'xml6XIqf4d0AX1c8dHWLGYjaV6cgpVlg', '{\"uridium\":0,\"credits\":0,\"honor\":0,\"experience\":0,\"jackpot\":0}', '{\"greenKeys\": 0, \"redKeys\": 0, \"blueKeys\": 0}', '{\"lastIP\":\"190.99.198.176\",\"registerIP\":\"190.99.198.176\",\"registerDate\":\"21.02.2020 03:59:21\"}', '{\"fpd\":0,\"dbrz\":0}', 'ElGuason', 'ElGuason', 'P.E.T 15', '$2y$10$9a3Q24v3L.lv1RnBYoxQOuLjja07TVa9w.mYMjowGn8ON9dUhJhtW', 'brayam-1996@hotmail.com', 10, 0, '', 0, 0, 1, 1100, 3, 0, 0, 0, 0, '{\"verified\":false,\"hash\":\"xml6XIqf4d0AX1c8dHWLGYjaV6cgpVlg\"}', '[]', 1);
INSERT INTO `player_accounts` VALUES (6, 'CLhWKrVWJwemNpWAdXQJZtbLp8vL5fyg', '{\"uridium\":0,\"credits\":0,\"honor\":0,\"experience\":0,\"jackpot\":0}', '{\"greenKeys\": 0, \"redKeys\": 0, \"blueKeys\": 0}', '{\"lastIP\":\"189.243.152.252\",\"registerIP\":\"189.243.152.252\",\"registerDate\":\"21.02.2020 04:03:36\"}', '{\"fpd\":0,\"dbrz\":0}', 'NNA69', 'NNA69', 'P.E.T 15', '$2y$10$qtJRxLnUO916.jdMxewp/uXEMHToRWH7siX2zpA6avXNBRnlTtSE2', 'boosqueletor@gmail.com', 10, 0, '', 0, 0, 1, 1100, 4, 0, 0, 0, 0, '{\"verified\":false,\"hash\":\"CLhWKrVWJwemNpWAdXQJZtbLp8vL5fyg\"}', '[]', 1);
INSERT INTO `player_accounts` VALUES (7, 'LaBsVy113FbIkf693dLA38qPgtHpeK4V', '{\"uridium\":0,\"credits\":0,\"honor\":0,\"experience\":0,\"jackpot\":0}', '{\"greenKeys\": 0, \"redKeys\": 0, \"blueKeys\": 0}', '{\"lastIP\":\"189.243.152.252\",\"registerIP\":\"189.243.152.252\",\"registerDate\":\"21.02.2020 04:04:47\"}', '{\"fpd\":0,\"dbrz\":0}', 'NNA690', 'NNA690', 'P.E.T 15', '$2y$10$QmfYplUUWiuc8bAv4aMFhuc.erM68Ek7okKG96HSUj.eHfhJF83F2', 'boosqueletor@gmail.com', 10, 0, '', 0, 0, 1, 1100, 5, 0, 0, 0, 0, '{\"verified\":false,\"hash\":\"LaBsVy113FbIkf693dLA38qPgtHpeK4V\"}', '[]', 1);
INSERT INTO `player_accounts` VALUES (8, 'zJF0DRgK9dHfLXHRQp6UHp92GgdZCHkP', '{\"uridium\":0,\"credits\":0,\"honor\":0,\"experience\":0,\"jackpot\":0}', '{\"greenKeys\": 0, \"redKeys\": 0, \"blueKeys\": 0}', '{\"lastIP\":\"189.243.152.252\",\"registerIP\":\"189.243.152.252\",\"registerDate\":\"21.02.2020 04:05:01\"}', '{\"fpd\":0,\"dbrz\":0}', 'boos', 'boos', 'P.E.T 15', '$2y$10$z.H.2HDYboGN618yIvpqJ.zgCKwyF3cgNRCRA9rPmYZElyHsRr7z6', 'boosqueletor@gmail.com', 10, 0, '', 0, 0, 1, 1100, 6, 0, 0, 0, 0, '{\"verified\":false,\"hash\":\"zJF0DRgK9dHfLXHRQp6UHp92GgdZCHkP\"}', '[]', 1);
INSERT INTO `player_accounts` VALUES (9, 'KXAnM7EWoPQEV8PtBGW2UB0pZeu9Ud8z', '{\"uridium\":0,\"credits\":0,\"honor\":0,\"experience\":0,\"jackpot\":0}', '{\"greenKeys\": 0, \"redKeys\": 0, \"blueKeys\": 0}', '{\"lastIP\":\"189.243.152.252\",\"registerIP\":\"189.243.152.252\",\"registerDate\":\"21.02.2020 04:05:07\"}', '{\"fpd\":0,\"dbrz\":0}', 'boossss', 'boossss', 'P.E.T 15', '$2y$10$6.f3DdkruWNYlV1HrBt2y.Bd6Bl..PmvO8PzRZCn54tsazTU92o9W', 'boosqueletor@gmail.com', 10, 0, '', 0, 0, 1, 1100, 7, 0, 0, 0, 0, '{\"verified\":false,\"hash\":\"KXAnM7EWoPQEV8PtBGW2UB0pZeu9Ud8z\"}', '[]', 1);
INSERT INTO `player_accounts` VALUES (10, 'W64AEi2oIu2hBLlSDdC4FlxbtGEa4mXW', '{\"uridium\":0,\"credits\":0,\"honor\":0,\"experience\":0,\"jackpot\":0}', '{\"greenKeys\": 0, \"redKeys\": 0, \"blueKeys\": 0}', '{\"lastIP\":\"189.243.152.252\",\"registerIP\":\"189.243.152.252\",\"registerDate\":\"21.02.2020 04:05:11\"}', '{\"fpd\":0,\"dbrz\":0}', 'boossssasfdsfgcbnm', 'boossssasfdsfgcbnm', 'P.E.T 15', '$2y$10$ERq.lj7ZD3W6iJQ1RsDW7.7xwiKgPWmxT5D8LQMBbeeVlmUK/lfwu', 'boosqueletor@gmail.com', 10, 0, '', 0, 0, 1, 1100, 8, 0, 0, 0, 0, '{\"verified\":false,\"hash\":\"W64AEi2oIu2hBLlSDdC4FlxbtGEa4mXW\"}', '[]', 1);
INSERT INTO `player_accounts` VALUES (11, 'ssvGMRyqVuUxkRoQ2AvY0TW2JM3JUBaJ', '{\"uridium\":0,\"credits\":0,\"honor\":0,\"experience\":0,\"jackpot\":0}', '{\"greenKeys\": 0, \"redKeys\": 0, \"blueKeys\": 0}', '{\"lastIP\":\"189.243.152.252\",\"registerIP\":\"189.243.152.252\",\"registerDate\":\"21.02.2020 04:05:21\"}', '{\"fpd\":0,\"dbrz\":0}', 'ASDFGVHBBDCVBMGKJHG', 'ASDFGVHBBDCVBMGKJHG', 'P.E.T 15', '$2y$10$dAah8xTNt.kwgDBBgmpDF.iOx2vrLucve/WxWd2Wtsrav6YnMOTlS', 'boosqueletor@gmail.com', 10, 0, '', 0, 0, 1, 1100, 9, 0, 0, 0, 0, '{\"verified\":false,\"hash\":\"ssvGMRyqVuUxkRoQ2AvY0TW2JM3JUBaJ\"}', '[]', 1);
INSERT INTO `player_accounts` VALUES (12, 'QOzEVO5jP2OvPY0M49xZpx8YMyTO5ZpH', '{\"uridium\":0,\"credits\":0,\"honor\":0,\"experience\":0,\"jackpot\":0}', '{\"greenKeys\": 0, \"redKeys\": 0, \"blueKeys\": 0}', '{\"lastIP\":\"189.243.152.252\",\"registerIP\":\"189.243.152.252\",\"registerDate\":\"21.02.2020 04:10:01\"}', '{\"fpd\":0,\"dbrz\":0}', '12erf3f', '12erf3f', 'P.E.T 15', '$2y$10$hBhzNbm15jkRTMxrOmhR0.Vaa4ruT0BbK16u0CRYllzjVn11APpmy', 'boosqueletor@gmail.com', 10, 0, '', 0, 0, 1, 1100, 10, 0, 0, 0, 0, '{\"verified\":false,\"hash\":\"QOzEVO5jP2OvPY0M49xZpx8YMyTO5ZpH\"}', '[]', 1);
INSERT INTO `player_accounts` VALUES (13, '5RKcE4t4PAuLm8BN6093ABnG43HHJs08', '{\"uridium\":0,\"credits\":0,\"honor\":0,\"experience\":0,\"jackpot\":0}', '{\"greenKeys\": 0, \"redKeys\": 0, \"blueKeys\": 0}', '{\"lastIP\":\"189.243.152.252\",\"registerIP\":\"189.243.152.252\",\"registerDate\":\"21.02.2020 04:10:31\"}', '{\"fpd\":0,\"dbrz\":0}', '12erf3f0000000000000', '12erf3f0000000000000', 'P.E.T 15', '$2y$10$lVlXRB2k55JajHjpkUrTNeUHPKQw0paMyLD8b5CskryCe6p/h5UJS', 'boosqueletor@gmail.com', 10, 0, '', 0, 0, 1, 1100, 11, 0, 0, 0, 0, '{\"verified\":false,\"hash\":\"5RKcE4t4PAuLm8BN6093ABnG43HHJs08\"}', '[]', 1);
INSERT INTO `player_accounts` VALUES (14, 'FXJzgCREOKLGI6ipee1UGijyVms77Gto', '{\"uridium\":0,\"credits\":0,\"honor\":0,\"experience\":0,\"jackpot\":0}', '{\"greenKeys\": 0, \"redKeys\": 0, \"blueKeys\": 0}', '{\"lastIP\":\"201.175.173.20\",\"registerIP\":\"201.175.173.20\",\"registerDate\":\"21.02.2020 05:58:59\"}', '{\"fpd\":0,\"dbrz\":0}', 'DEV_Node', 'DEV_Node', 'P.E.T 15', '$2y$10$uiBv.m.HYKcN4BAFlFGT..jem.6yCRUNACtzqzrACeEtpPIhq3GLO', 'psteampremium@gmail.com', 10, 0, '', 0, 0, 1, 0, 0, 0, 0, 0, 0, '{\"verified\":true,\"hash\":\"FXJzgCREOKLGI6ipee1UGijyVms77Gto\"}', '[]', 1);
INSERT INTO `player_accounts` VALUES (15, 'gBGE7ms3mQN8lLlHwlOaHiyUNiBQ9OU0', '{\"uridium\":0,\"credits\":0,\"honor\":0,\"experience\":0,\"jackpot\":0}', '{\"greenKeys\": 0, \"redKeys\": 0, \"blueKeys\": 0}', '{\"lastIP\":\"179.232.121.230\",\"registerIP\":\"179.232.121.230\",\"registerDate\":\"21.02.2020 06:28:54\"}', '{\"fpd\":0,\"dbrz\":0}', 'MMOLuther', 'MMOLuther', 'P.E.T 15', '$2y$10$NfD7U/HghKLba/pjX4e8k.XqLv/xrCm03y130gOdP0MPi749GrT9S', 'maotheus@hotmail.com', 10, 0, '', 0, 0, 1, 0, 0, 0, 0, 0, 0, '{\"verified\":false,\"hash\":\"gBGE7ms3mQN8lLlHwlOaHiyUNiBQ9OU0\"}', '[]', 1);

-- ----------------------------
-- Table structure for player_equipment
-- ----------------------------
DROP TABLE IF EXISTS `player_equipment`;
CREATE TABLE `player_equipment`  (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `config1_lasers` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `config1_generators` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `config1_drones` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `config2_lasers` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `config2_generators` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `config2_drones` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `items` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `skill_points` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `modules` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `boosters` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`userId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of player_equipment
-- ----------------------------
INSERT INTO `player_equipment` VALUES (1, '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '{\"lf4Count\":0,\"havocCount\":0,\"herculesCount\":0,\"apis\":false,\"zeus\":false,\"pet\":false,\"petModules\":[],\"ships\":[],\"designs\":{},\"skillTree\":{\"logdisks\":0,\"researchPoints\":0,\"resetCount\":0}}', '{\"engineering\":0,\"shieldEngineering\":0,\"detonation1\":0,\"detonation2\":0,\"heatseekingMissiles\":0,\"rocketFusion\":0,\"cruelty1\":0,\"cruelty2\":0,\"explosives\":0,\"luck1\":0,\"luck2\":0}', '[]', '{}');
INSERT INTO `player_equipment` VALUES (2, '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '{\"lf4Count\":0,\"havocCount\":0,\"herculesCount\":0,\"apis\":false,\"zeus\":false,\"pet\":false,\"petModules\":[],\"ships\":[],\"designs\":{},\"skillTree\":{\"logdisks\":0,\"researchPoints\":0,\"resetCount\":0}}', '{\"engineering\":0,\"shieldEngineering\":0,\"detonation1\":0,\"detonation2\":0,\"heatseekingMissiles\":0,\"rocketFusion\":0,\"cruelty1\":0,\"cruelty2\":0,\"explosives\":0,\"luck1\":0,\"luck2\":0}', '[]', '{}');
INSERT INTO `player_equipment` VALUES (3, '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '{\"lf4Count\":0,\"havocCount\":0,\"herculesCount\":0,\"apis\":false,\"zeus\":false,\"pet\":false,\"petModules\":[],\"ships\":[],\"designs\":{},\"skillTree\":{\"logdisks\":0,\"researchPoints\":0,\"resetCount\":0}}', '{\"engineering\":0,\"shieldEngineering\":0,\"detonation1\":0,\"detonation2\":0,\"heatseekingMissiles\":0,\"rocketFusion\":0,\"cruelty1\":0,\"cruelty2\":0,\"explosives\":0,\"luck1\":0,\"luck2\":0}', '[]', '{}');
INSERT INTO `player_equipment` VALUES (4, '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '{\"lf4Count\":0,\"havocCount\":0,\"herculesCount\":0,\"apis\":false,\"zeus\":false,\"pet\":false,\"petModules\":[],\"ships\":[],\"designs\":{},\"skillTree\":{\"logdisks\":0,\"researchPoints\":0,\"resetCount\":0}}', '{\"engineering\":0,\"shieldEngineering\":0,\"detonation1\":0,\"detonation2\":0,\"heatseekingMissiles\":0,\"rocketFusion\":0,\"cruelty1\":0,\"cruelty2\":0,\"explosives\":0,\"luck1\":0,\"luck2\":0}', '[]', '{}');
INSERT INTO `player_equipment` VALUES (5, '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '{\"lf4Count\":0,\"havocCount\":0,\"herculesCount\":0,\"apis\":false,\"zeus\":false,\"pet\":false,\"petModules\":[],\"ships\":[],\"designs\":{},\"skillTree\":{\"logdisks\":0,\"researchPoints\":0,\"resetCount\":0}}', '{\"engineering\":0,\"shieldEngineering\":0,\"detonation1\":0,\"detonation2\":0,\"heatseekingMissiles\":0,\"rocketFusion\":0,\"cruelty1\":0,\"cruelty2\":0,\"explosives\":0,\"luck1\":0,\"luck2\":0}', '[]', '{}');
INSERT INTO `player_equipment` VALUES (6, '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '{\"lf4Count\":0,\"havocCount\":0,\"herculesCount\":0,\"apis\":false,\"zeus\":false,\"pet\":false,\"petModules\":[],\"ships\":[],\"designs\":{},\"skillTree\":{\"logdisks\":0,\"researchPoints\":0,\"resetCount\":0}}', '{\"engineering\":0,\"shieldEngineering\":0,\"detonation1\":0,\"detonation2\":0,\"heatseekingMissiles\":0,\"rocketFusion\":0,\"cruelty1\":0,\"cruelty2\":0,\"explosives\":0,\"luck1\":0,\"luck2\":0}', '[]', '{}');
INSERT INTO `player_equipment` VALUES (7, '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '{\"lf4Count\":0,\"havocCount\":0,\"herculesCount\":0,\"apis\":false,\"zeus\":false,\"pet\":false,\"petModules\":[],\"ships\":[],\"designs\":{},\"skillTree\":{\"logdisks\":0,\"researchPoints\":0,\"resetCount\":0}}', '{\"engineering\":0,\"shieldEngineering\":0,\"detonation1\":0,\"detonation2\":0,\"heatseekingMissiles\":0,\"rocketFusion\":0,\"cruelty1\":0,\"cruelty2\":0,\"explosives\":0,\"luck1\":0,\"luck2\":0}', '[]', '{}');
INSERT INTO `player_equipment` VALUES (8, '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '{\"lf4Count\":0,\"havocCount\":0,\"herculesCount\":0,\"apis\":false,\"zeus\":false,\"pet\":false,\"petModules\":[],\"ships\":[],\"designs\":{},\"skillTree\":{\"logdisks\":0,\"researchPoints\":0,\"resetCount\":0}}', '{\"engineering\":0,\"shieldEngineering\":0,\"detonation1\":0,\"detonation2\":0,\"heatseekingMissiles\":0,\"rocketFusion\":0,\"cruelty1\":0,\"cruelty2\":0,\"explosives\":0,\"luck1\":0,\"luck2\":0}', '[]', '{}');
INSERT INTO `player_equipment` VALUES (9, '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '{\"lf4Count\":0,\"havocCount\":0,\"herculesCount\":0,\"apis\":false,\"zeus\":false,\"pet\":false,\"petModules\":[],\"ships\":[],\"designs\":{},\"skillTree\":{\"logdisks\":0,\"researchPoints\":0,\"resetCount\":0}}', '{\"engineering\":0,\"shieldEngineering\":0,\"detonation1\":0,\"detonation2\":0,\"heatseekingMissiles\":0,\"rocketFusion\":0,\"cruelty1\":0,\"cruelty2\":0,\"explosives\":0,\"luck1\":0,\"luck2\":0}', '[]', '{}');
INSERT INTO `player_equipment` VALUES (10, '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '{\"lf4Count\":0,\"havocCount\":0,\"herculesCount\":0,\"apis\":false,\"zeus\":false,\"pet\":false,\"petModules\":[],\"ships\":[],\"designs\":{},\"skillTree\":{\"logdisks\":0,\"researchPoints\":0,\"resetCount\":0}}', '{\"engineering\":0,\"shieldEngineering\":0,\"detonation1\":0,\"detonation2\":0,\"heatseekingMissiles\":0,\"rocketFusion\":0,\"cruelty1\":0,\"cruelty2\":0,\"explosives\":0,\"luck1\":0,\"luck2\":0}', '[]', '{}');
INSERT INTO `player_equipment` VALUES (11, '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '{\"lf4Count\":0,\"havocCount\":0,\"herculesCount\":0,\"apis\":false,\"zeus\":false,\"pet\":false,\"petModules\":[],\"ships\":[],\"designs\":{},\"skillTree\":{\"logdisks\":0,\"researchPoints\":0,\"resetCount\":0}}', '{\"engineering\":0,\"shieldEngineering\":0,\"detonation1\":0,\"detonation2\":0,\"heatseekingMissiles\":0,\"rocketFusion\":0,\"cruelty1\":0,\"cruelty2\":0,\"explosives\":0,\"luck1\":0,\"luck2\":0}', '[]', '{}');
INSERT INTO `player_equipment` VALUES (12, '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '{\"lf4Count\":0,\"havocCount\":0,\"herculesCount\":0,\"apis\":false,\"zeus\":false,\"pet\":false,\"petModules\":[],\"ships\":[],\"designs\":{},\"skillTree\":{\"logdisks\":0,\"researchPoints\":0,\"resetCount\":0}}', '{\"engineering\":0,\"shieldEngineering\":0,\"detonation1\":0,\"detonation2\":0,\"heatseekingMissiles\":0,\"rocketFusion\":0,\"cruelty1\":0,\"cruelty2\":0,\"explosives\":0,\"luck1\":0,\"luck2\":0}', '[]', '{}');
INSERT INTO `player_equipment` VALUES (13, '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '{\"lf4Count\":0,\"havocCount\":0,\"herculesCount\":0,\"apis\":false,\"zeus\":false,\"pet\":false,\"petModules\":[],\"ships\":[],\"designs\":{},\"skillTree\":{\"logdisks\":0,\"researchPoints\":0,\"resetCount\":0}}', '{\"engineering\":0,\"shieldEngineering\":0,\"detonation1\":0,\"detonation2\":0,\"heatseekingMissiles\":0,\"rocketFusion\":0,\"cruelty1\":0,\"cruelty2\":0,\"explosives\":0,\"luck1\":0,\"luck2\":0}', '[]', '{}');
INSERT INTO `player_equipment` VALUES (14, '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '{\"lf4Count\":0,\"havocCount\":0,\"herculesCount\":0,\"apis\":false,\"zeus\":false,\"pet\":false,\"petModules\":[],\"ships\":[],\"designs\":{},\"skillTree\":{\"logdisks\":0,\"researchPoints\":0,\"resetCount\":0}}', '{\"engineering\":0,\"shieldEngineering\":0,\"detonation1\":0,\"detonation2\":0,\"heatseekingMissiles\":0,\"rocketFusion\":0,\"cruelty1\":0,\"cruelty2\":0,\"explosives\":0,\"luck1\":0,\"luck2\":0}', '[]', '{}');
INSERT INTO `player_equipment` VALUES (15, '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '[]', '[]', '[{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]},{\"items\":[],\"designs\":[]}]', '{\"lf4Count\":0,\"havocCount\":0,\"herculesCount\":0,\"apis\":false,\"zeus\":false,\"pet\":false,\"petModules\":[],\"ships\":[],\"designs\":{},\"skillTree\":{\"logdisks\":0,\"researchPoints\":0,\"resetCount\":0}}', '{\"engineering\":0,\"shieldEngineering\":0,\"detonation1\":0,\"detonation2\":0,\"heatseekingMissiles\":0,\"rocketFusion\":0,\"cruelty1\":0,\"cruelty2\":0,\"explosives\":0,\"luck1\":0,\"luck2\":0}', '[]', '{}');

-- ----------------------------
-- Table structure for player_galaxygates
-- ----------------------------
DROP TABLE IF EXISTS `player_galaxygates`;
CREATE TABLE `player_galaxygates`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `gateId` int(11) NOT NULL,
  `parts` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `multiplier` int(11) NOT NULL DEFAULT 0,
  `lives` int(11) NOT NULL DEFAULT -1,
  `prepared` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for player_settings
-- ----------------------------
DROP TABLE IF EXISTS `player_settings`;
CREATE TABLE `player_settings`  (
  `userId` int(11) NOT NULL,
  `audio` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `quality` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `classY2T` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `display` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `gameplay` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `window` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `boundKeys` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `inGameSettings` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cooldowns` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `slotbarItems` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `premiumSlotbarItems` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `proActionBarItems` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`userId`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of player_settings
-- ----------------------------
INSERT INTO `player_settings` VALUES (1, '{\"notSet\":false,\"playCombatMusic\":true,\"music\":1,\"sound\":13,\"voice\":100}', '{\"notSet\":false,\"qualityAttack\":0,\"qualityBackground\":3,\"qualityPresetting\":3,\"qualityCustomized\":true,\"qualityPoizone\":3,\"qualityShip\":3,\"qualityEngine\":3,\"qualityExplosion\":3,\"qualityCollectable\":3,\"qualityEffect\":0}', '{\"questsAvailableFilter\":false,\"questsUnavailableFilter\":false,\"questsCompletedFilter\":false,\"var_1151\":false,\"var_2239\":false,\"questsLevelOrderDescending\":false}', '{\"notSet\":false,\"displayPlayerNames\":true,\"displayResources\":true,\"showPremiumQuickslotBar\":true,\"allowAutoQuality\":true,\"preloadUserShips\":true,\"displayHitpointBubbles\":true,\"showNotOwnedItems\":true,\"displayChat\":true,\"displayWindowsBackground\":true,\"displayNotFreeCargoBoxes\":true,\"dragWindowsAlways\":true,\"displayNotifications\":true,\"hoverShips\":true,\"displayDrones\":true,\"displayBonusBoxes\":true,\"displayFreeCargoBoxes\":true,\"var12P\":true,\"varb3N\":false,\"displaySetting3DqualityAntialias\":4,\"varp3M\":4,\"displaySetting3DqualityEffects\":4,\"displaySetting3DqualityLights\":3,\"displaySetting3DqualityTextures\":3,\"var03r\":4,\"displaySetting3DsizeTextures\":3,\"displaySetting3DtextureFiltering\":-1,\"proActionBarEnabled\":true,\"proActionBarKeyboardInputEnabled\":true,\"proActionBarAutohideEnabled\":true,\"proActionBarOpened\":true}', '{\"notSet\":false,\"autoRefinement\":false,\"quickSlotStopAttack\":true,\"autoBoost\":false,\"autoBuyBootyKeys\":false,\"doubleclickAttackEnabled\":true,\"autochangeAmmo\":true,\"autoStartEnabled\":true,\"varE3N\":true}', '{\"hideAllWindows\":false,\"scale\":10,\"barState\":\"24,1|23,1|100,1|25,1|35,0|34,0|39,0|\",\"gameFeatureBarPosition\":\"0.09910802775024777,-0.15503875968992248\",\"gameFeatureBarLayoutType\":\"0\",\"genericFeatureBarPosition\":\"99.75206611570248,-0.15503875968992248\",\"genericFeatureBarLayoutType\":\"0\",\"categoryBarPosition\":\"50,80.79268292682927\",\"standartSlotBarPosition\":\"50,86.73780487804879|0,40\",\"standartSlotBarLayoutType\":\"0\",\"premiumSlotBarPosition\":\"50,92.6829268292683|0,80\",\"premiumSlotBarLayoutType\":\"0\",\"proActionBarPosition\":\"50,98.6280487804878|0,0\",\"proActionBarLayoutType\":\"0\",\"windows\":{\"user\":{\"x\":30,\"y\":30,\"width\":212,\"height\":88,\"maximixed\":false},\"ship\":{\"x\":29,\"y\":29,\"width\":212,\"height\":88,\"maximixed\":true},\"ship_warp\":{\"x\":50,\"y\":50,\"width\":300,\"height\":210,\"maximixed\":false},\"chat\":{\"x\":81,\"y\":28,\"width\":300,\"height\":150,\"maximixed\":true},\"group\":{\"x\":50,\"y\":50,\"width\":196,\"height\":200,\"maximixed\":false},\"minimap\":{\"x\":95,\"y\":95,\"width\":235,\"height\":176,\"maximixed\":true},\"spacemap\":{\"x\":10,\"y\":10,\"width\":650,\"height\":475,\"maximixed\":false},\"log\":{\"x\":29,\"y\":29,\"width\":240,\"height\":150,\"maximixed\":false},\"pet\":{\"x\":50,\"y\":50,\"width\":260,\"height\":130,\"maximixed\":false},\"spaceball\":{\"x\":10,\"y\":10,\"width\":170,\"height\":70,\"maximixed\":false},\"booster\":{\"x\":10,\"y\":10,\"width\":110,\"height\":150,\"maximixed\":false},\"traininggrounds\":{\"x\":9,\"y\":9,\"width\":320,\"height\":320,\"maximixed\":false},\"settings\":{\"x\":50,\"y\":48,\"width\":400,\"height\":470,\"maximixed\":false},\"help\":{\"x\":10,\"y\":10,\"width\":219,\"height\":121,\"maximixed\":false},\"logout\":{\"x\":50,\"y\":50,\"width\":200,\"height\":200,\"maximixed\":false}}}', '[{\"actionType\":7,\"charCode\":0,\"parameter\":0,\"keyCodes\":[49]},{\"actionType\":7,\"charCode\":0,\"parameter\":1,\"keyCodes\":[50]},{\"actionType\":7,\"charCode\":0,\"parameter\":2,\"keyCodes\":[51]},{\"actionType\":7,\"charCode\":0,\"parameter\":3,\"keyCodes\":[52]},{\"actionType\":7,\"charCode\":0,\"parameter\":4,\"keyCodes\":[53]},{\"actionType\":7,\"charCode\":0,\"parameter\":5,\"keyCodes\":[54]},{\"actionType\":7,\"charCode\":0,\"parameter\":6,\"keyCodes\":[55]},{\"actionType\":7,\"charCode\":0,\"parameter\":7,\"keyCodes\":[56]},{\"actionType\":7,\"charCode\":0,\"parameter\":8,\"keyCodes\":[57]},{\"actionType\":7,\"charCode\":0,\"parameter\":9,\"keyCodes\":[48]},{\"actionType\":8,\"charCode\":0,\"parameter\":0,\"keyCodes\":[112]},{\"actionType\":8,\"charCode\":0,\"parameter\":1,\"keyCodes\":[113]},{\"actionType\":8,\"charCode\":0,\"parameter\":2,\"keyCodes\":[114]},{\"actionType\":8,\"charCode\":0,\"parameter\":3,\"keyCodes\":[115]},{\"actionType\":8,\"charCode\":0,\"parameter\":4,\"keyCodes\":[116]},{\"actionType\":8,\"charCode\":0,\"parameter\":5,\"keyCodes\":[117]},{\"actionType\":8,\"charCode\":0,\"parameter\":6,\"keyCodes\":[118]},{\"actionType\":8,\"charCode\":0,\"parameter\":7,\"keyCodes\":[119]},{\"actionType\":8,\"charCode\":0,\"parameter\":8,\"keyCodes\":[120]},{\"actionType\":0,\"charCode\":0,\"parameter\":0,\"keyCodes\":[74]},{\"actionType\":1,\"charCode\":0,\"parameter\":0,\"keyCodes\":[67]},{\"actionType\":2,\"charCode\":0,\"parameter\":0,\"keyCodes\":[17]},{\"actionType\":3,\"charCode\":0,\"parameter\":0,\"keyCodes\":[32]},{\"actionType\":4,\"charCode\":0,\"parameter\":0,\"keyCodes\":[69]},{\"actionType\":5,\"charCode\":0,\"parameter\":0,\"keyCodes\":[82]},{\"actionType\":13,\"charCode\":0,\"parameter\":0,\"keyCodes\":[68]},{\"actionType\":6,\"charCode\":0,\"parameter\":0,\"keyCodes\":[76]},{\"actionType\":9,\"charCode\":0,\"parameter\":0,\"keyCodes\":[72]},{\"actionType\":10,\"charCode\":0,\"parameter\":0,\"keyCodes\":[70]},{\"actionType\":11,\"charCode\":0,\"parameter\":0,\"keyCodes\":[107]},{\"actionType\":12,\"charCode\":0,\"parameter\":0,\"keyCodes\":[109]},{\"actionType\":14,\"charCode\":0,\"parameter\":0,\"keyCodes\":[13]},{\"actionType\":15,\"charCode\":0,\"parameter\":0,\"keyCodes\":[9]},{\"actionType\":8,\"charCode\":0,\"parameter\":9,\"keyCodes\":[121]},{\"actionType\":16,\"charCode\":0,\"parameter\":0,\"keyCodes\":[16]}]', '{\"petDestroyed\":false,\"blockedGroupInvites\":false,\"selectedLaser\":\"ammunition_laser_ucb-100\",\"selectedRocket\":\"ammunition_rocket_r-310\",\"selectedRocketLauncher\":\"ammunition_rocketlauncher_hstrm-01\",\"selectedFormation\":\"drone_formation_f-11-he\",\"currentConfig\":2,\"selectedCpus\":[\"equipment_extra_cpu_arol-x\",\"equipment_extra_cpu_rllb-x\"]}', '{\"ammunition_mine_smb-01\":\"03/02/1952 3:51:44\",\"equipment_extra_cpu_ish-01\":\"03/02/1952 3:51:44\",\"ammunition_specialammo_emp-01\":\"03/02/1952 3:51:44\",\"ammunition_mine\":\"03/02/1952 3:51:44\",\"ammunition_specialammo_dcr-250\":\"03/02/1952 3:51:44\",\"ammunition_specialammo_pld-8\":\"03/02/1952 3:51:44\",\"ammunition_specialammo_r-ic3\":\"03/02/1952 3:51:44\",\"tech_energy-leech\":\"\",\"tech_chain-impulse\":\"\",\"tech_precision-targeter\":\"\",\"tech_backup-shields\":\"\",\"tech_battle-repair-bot\":\"\",\"ability_venom\":\"21/02/2020 7:00:20\"}', '{\"1\":\"ammunition_laser_ucb-100\",\"5\":\"ammunition_laser_rsb-75\"}', '{\"1\":\"drone_formation_default\",\"3\":\"ammunition_specialammo_emp-01\"}', '{\"2\":\"ammunition_laser_sab-50\"}');
INSERT INTO `player_settings` VALUES (2, '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `player_settings` VALUES (3, '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `player_settings` VALUES (4, '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `player_settings` VALUES (5, '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `player_settings` VALUES (6, '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `player_settings` VALUES (7, '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `player_settings` VALUES (8, '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `player_settings` VALUES (9, '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `player_settings` VALUES (10, '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `player_settings` VALUES (11, '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `player_settings` VALUES (12, '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `player_settings` VALUES (13, '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `player_settings` VALUES (14, '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `player_settings` VALUES (15, '', '', '', '', '', '', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for player_titles
-- ----------------------------
DROP TABLE IF EXISTS `player_titles`;
CREATE TABLE `player_titles`  (
  `userID` int(11) NOT NULL,
  `titles` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '[]',
  PRIMARY KEY (`userID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of player_titles
-- ----------------------------
INSERT INTO `player_titles` VALUES (1, '[]');
INSERT INTO `player_titles` VALUES (2, '[]');
INSERT INTO `player_titles` VALUES (3, '[]');
INSERT INTO `player_titles` VALUES (4, '[]');
INSERT INTO `player_titles` VALUES (5, '[]');
INSERT INTO `player_titles` VALUES (6, '[]');
INSERT INTO `player_titles` VALUES (7, '[]');
INSERT INTO `player_titles` VALUES (8, '[]');
INSERT INTO `player_titles` VALUES (9, '[]');
INSERT INTO `player_titles` VALUES (10, '[]');
INSERT INTO `player_titles` VALUES (11, '[]');
INSERT INTO `player_titles` VALUES (12, '[]');
INSERT INTO `player_titles` VALUES (13, '[]');
INSERT INTO `player_titles` VALUES (14, '[]');
INSERT INTO `player_titles` VALUES (15, '[]');

-- ----------------------------
-- Table structure for server_bans
-- ----------------------------
DROP TABLE IF EXISTS `server_bans`;
CREATE TABLE `server_bans`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `modId` int(11) NOT NULL,
  `reason` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `typeId` tinyint(4) NOT NULL,
  `ended` tinyint(1) NOT NULL,
  `end_date` datetime(0) NOT NULL,
  `date_added` datetime(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for server_battlestations
-- ----------------------------
DROP TABLE IF EXISTS `server_battlestations`;
CREATE TABLE `server_battlestations`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mapId` int(11) NOT NULL,
  `clanId` int(11) NOT NULL,
  `positionX` int(11) NOT NULL,
  `positionY` int(11) NOT NULL,
  `inBuildingState` tinyint(4) NOT NULL,
  `buildTimeInMinutes` int(11) NOT NULL,
  `buildTime` datetime(0) NOT NULL,
  `deflectorActive` tinyint(4) NOT NULL,
  `deflectorSecondsLeft` int(11) NOT NULL,
  `deflectorTime` datetime(0) NOT NULL,
  `visualModifiers` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `modules` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of server_battlestations
-- ----------------------------
INSERT INTO `server_battlestations` VALUES (1, 'Julius', 15, 0, 16400, 11400, 0, 0, '0000-00-00 00:00:00', 0, 0, '0001-01-01 00:00:00', '[]', '[]', 0);

-- ----------------------------
-- Table structure for server_clan_applications
-- ----------------------------
DROP TABLE IF EXISTS `server_clan_applications`;
CREATE TABLE `server_clan_applications`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clanId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `text` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for server_clan_diplomacy
-- ----------------------------
DROP TABLE IF EXISTS `server_clan_diplomacy`;
CREATE TABLE `server_clan_diplomacy`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `senderClanId` int(11) NOT NULL,
  `toClanId` int(11) NOT NULL,
  `diplomacyType` tinyint(4) NOT NULL,
  `date` datetime(0) NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for server_clan_diplomacy_applications
-- ----------------------------
DROP TABLE IF EXISTS `server_clan_diplomacy_applications`;
CREATE TABLE `server_clan_diplomacy_applications`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `senderClanId` int(11) NOT NULL,
  `toClanId` int(11) NOT NULL,
  `diplomacyType` tinyint(4) NOT NULL,
  `date` datetime(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for server_clans
-- ----------------------------
DROP TABLE IF EXISTS `server_clans`;
CREATE TABLE `server_clans`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `tag` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `description` varchar(16000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `factionId` tinyint(4) NOT NULL DEFAULT 0,
  `recruiting` tinyint(4) NOT NULL DEFAULT 1,
  `leaderId` int(11) NOT NULL DEFAULT 0,
  `news` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `join_dates` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `rankPoints` bigint(20) NOT NULL,
  `rank` int(11) NOT NULL,
  `date` datetime(0) NOT NULL DEFAULT current_timestamp(0),
  `profile` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for server_maps
-- ----------------------------
DROP TABLE IF EXISTS `server_maps`;
CREATE TABLE `server_maps`  (
  `mapID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `npcs` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `stations` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `portals` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `collectables` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `options` varchar(512) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}',
  `factionID` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`mapID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 225 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of server_maps
-- ----------------------------
INSERT INTO `server_maps` VALUES (1, '1-1', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (2, '1-2', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (3, '1-3', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (4, '1-4', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (5, '2-1', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (6, '2-2', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (7, '2-3', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (8, '2-4', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (9, '3-1', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (10, '3-2', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (11, '3-3', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (12, '3-4', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (13, '4-1', '[{   \"ShipId\": 79,   \"Amount\": 7},{   \"ShipId\": 78,   \"Amount\":12},{   \"ShipId\": 35,   \"Amount\":2},{   \"ShipId\": 29,   \"Amount\":4}]', '[{   \"TypeId\": 46,   \"FactionId\": 1,   \"Position\": [1600,1600] }]', '[{   \"TargetSpaceMapId\": 16,   \"Position\": [10000, 6200],   \"TargetPosition\": [19200,13400],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true },{   \"TargetSpaceMapId\": 14,   \"Position\": [18900, 1900],   \"TargetPosition\": [2500,10900],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true },{   \"TargetSpaceMapId\": 15,   \"Position\": [18900, 11300],   \"TargetPosition\": [2000,11200],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true }]', '[{   \"TypeId\": 2,   \"Amount\": 100,   \"TopLeft\": [18300,1100], \"BottomRight\": [18300,1100], \"Respawnable\":true }]', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (14, '4-2', '[{   \"ShipId\": 79,   \"Amount\": 7},{   \"ShipId\": 78,   \"Amount\":12},{   \"ShipId\": 35,   \"Amount\":2},{   \"ShipId\": 29,   \"Amount\":4}]', '[{   \"TypeId\": 46,   \"FactionId\": 2,   \"Position\": [19500,1500] }]', '[{   \"TargetSpaceMapId\": 16,   \"Position\": [10400, 6300],   \"TargetPosition\": [21900,11900],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true }, {   \"TargetSpaceMapId\": 13,   \"Position\": [2500, 10900],   \"TargetPosition\": [18900,1900],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true }, {   \"TargetSpaceMapId\": 15,   \"Position\": [18900, 10900],   \"TargetPosition\": [2000,1900],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true }]', '[{   \"TypeId\": 2,   \"Amount\": 100,   \"TopLeft\": [18300,1100], \"BottomRight\": [18300,1100], \"Respawnable\":true }]', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (15, '4-3', '[{   \"ShipId\": 79,   \"Amount\": 7},{   \"ShipId\": 78,   \"Amount\":12},{   \"ShipId\": 35,   \"Amount\":2},{   \"ShipId\": 29,   \"Amount\":4}]', '[{   \"TypeId\": 46,   \"FactionId\": 3,   \"Position\": [19500,11600] }]', '[{   \"TargetSpaceMapId\": 16,   \"Position\": [10300, 6600],   \"TargetPosition\": [21900,14500],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true },  {   \"TargetSpaceMapId\": 13,   \"Position\": [2000,11200],   \"TargetPosition\": [18900,11300],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true },  {   \"TargetSpaceMapId\": 14,   \"Position\": [2000,1900],   \"TargetPosition\": [18700,10900],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true }]', '[{   \"TypeId\": 2,   \"Amount\": 100,   \"TopLeft\": [18300,1100], \"BottomRight\": [18300,1100], \"Respawnable\":true }]', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (16, '4-4', '', '', '[{   \"TargetSpaceMapId\": 13,   \"Position\": [19200,13400],   \"TargetPosition\": [10000,6200],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true },  {   \"TargetSpaceMapId\": 14,   \"Position\": [21900,11900],   \"TargetPosition\": [10400,6300],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true },  {   \"TargetSpaceMapId\": 15,   \"Position\": [21900,14500],   \"TargetPosition\": [10300,6600],   \"GraphicId\": 1,   \"FactionId\": 1,   \"Visible\": true,   \"Working\": true }]', '', '{\"StarterMap\":false,\"PvpMap\":true,\"RangeDisabled\":true,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (17, '1-5', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (18, '1-6', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (19, '1-7', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (20, '1-8', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (21, '2-5', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (22, '2-6', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (23, '2-7', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (24, '2-8', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (25, '3-5', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (26, '3-6', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (27, '3-7', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (28, '3-8', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (42, '???', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":true,\"CloakBlocked\":true,\"LogoutBlocked\":true,\"DeathLocationRepair\":false}', 0);
INSERT INTO `server_maps` VALUES (71, 'GG Zeta', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (74, 'GG Kappa', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (101, 'JP', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":true,\"CloakBlocked\":true,\"LogoutBlocked\":true,\"DeathLocationRepair\":false}', 0);
INSERT INTO `server_maps` VALUES (102, 'JP', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (103, 'JP', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (104, 'JP', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (105, 'JP', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (106, 'JP', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (107, 'JP', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (108, 'JP', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (109, 'JP', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (110, 'JP', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (111, 'JP', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (121, 'TA', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":true,\"CloakBlocked\":true,\"LogoutBlocked\":true,\"DeathLocationRepair\":false}', 0);
INSERT INTO `server_maps` VALUES (200, 'LoW', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);
INSERT INTO `server_maps` VALUES (224, 'Custom Tournament', '', '', '', '', '{\"StarterMap\":false,\"PvpMap\":false,\"RangeDisabled\":false,\"CloakBlocked\":false,\"LogoutBlocked\":false,\"DeathLocationRepair\":true}', 0);

-- ----------------------------
-- Table structure for server_ships
-- ----------------------------
DROP TABLE IF EXISTS `server_ships`;
CREATE TABLE `server_ships`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shipID` int(11) NOT NULL,
  `baseShipId` int(11) NOT NULL,
  `lootID` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `health` int(11) NOT NULL DEFAULT 0,
  `shield` int(11) NOT NULL DEFAULT 0,
  `speed` int(11) NOT NULL DEFAULT 300,
  `lasers` int(11) NOT NULL DEFAULT 1,
  `generators` int(11) NOT NULL DEFAULT 1,
  `cargo` int(11) NOT NULL DEFAULT 100,
  `aggressive` tinyint(1) NOT NULL DEFAULT 0,
  `damage` int(11) NOT NULL DEFAULT 20,
  `respawnable` tinyint(1) NOT NULL,
  `reward` varchar(2048) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `shipID`(`shipID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 118 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of server_ships
-- ----------------------------
INSERT INTO `server_ships` VALUES (18, 1, 0, 'ship_phoenix', 'Phoenix', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (19, 2, 0, 'ship_yamato', 'Yamato', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (20, 3, 0, 'ship_leonov', 'Leonov', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (21, 4, 0, 'ship_defcom', 'Defcom', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (22, 5, 0, 'ship_liberator', 'Liberator', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (23, 6, 0, 'ship_piranha', 'Piranha', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (24, 7, 0, 'ship_nostromo', 'Nostromo', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (25, 8, 8, 'ship_vengeance', 'Vengeance', 180000, 0, 380, 10, 10, 0, 0, 0, 0, '{\"Experience\":25600,\"Honor\":256,\"Credits\":0,\"Uridium\":256}');
INSERT INTO `server_ships` VALUES (26, 9, 0, 'ship_bigboy', 'Bigboy', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (27, 10, 10, 'ship_goliath', 'Goliath', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (28, 12, 0, 'pet', 'P.E.T. Level 1-3', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":25000,\"Honor\":150,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (29, 13, 0, 'pet', 'P.E.T. Red', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":25000,\"Honor\":150,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (30, 15, 0, 'pet', 'P.E.T. Frozen', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":25000,\"Honor\":150,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (31, 16, 8, 'ship_vengeance_design_adept', 'Adept', 180000, 0, 380, 10, 10, 0, 0, 0, 0, '{\"Experience\":25600,\"Honor\":256,\"Credits\":0,\"Uridium\":256}');
INSERT INTO `server_ships` VALUES (32, 17, 8, 'ship_vengeance_design_corsair', 'Corsair', 180000, 0, 380, 10, 10, 0, 0, 0, 0, '{\"Experience\":25600,\"Honor\":256,\"Credits\":0,\"Uridium\":256}');
INSERT INTO `server_ships` VALUES (33, 18, 8, 'ship_vengeance_design_lightning', 'Lightning', 180000, 0, 380, 10, 10, 0, 0, 0, 0, '{\"Experience\":25600,\"Honor\":256,\"Credits\":0,\"Uridium\":256}');
INSERT INTO `server_ships` VALUES (34, 19, 10, 'ship_goliath_design_jade', 'Jade', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (35, 20, 0, 'ship_admin', 'Ufo', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (36, 22, 0, 'pet', 'P.E.T. Normal', 0, 50000, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":25000,\"Honor\":150,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (37, 49, 49, 'ship_aegis', 'Aegis', 275000, 0, 300, 10, 15, 0, 0, 0, 0, '{\"Experience\":25000,\"Honor\":250,\"Credits\":0,\"Uridium\":250}');
INSERT INTO `server_ships` VALUES (38, 52, 10, 'ship_goliath_design_amber', 'Amber', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (39, 53, 10, 'ship_goliath_design_crimson', 'Crimson', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (40, 54, 10, 'ship_goliath_design_sapphire', 'Sapphire', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (41, 56, 10, 'ship_goliath_design_enforcer', 'Enforcer', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (42, 57, 10, 'ship_goliath_design_independence', 'Independence', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (43, 58, 8, 'ship_vengeance_design_revenge', 'Revenge', 180000, 0, 380, 10, 10, 0, 0, 0, 0, '{\"Experience\":25600,\"Honor\":256,\"Credits\":0,\"Uridium\":256}');
INSERT INTO `server_ships` VALUES (44, 59, 10, 'ship_goliath_design_bastion', 'Bastion', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (45, 60, 8, 'ship_vengeance_design_avenger', 'Avenger', 180000, 0, 380, 10, 10, 0, 0, 0, 0, '{\"Experience\":25600,\"Honor\":256,\"Credits\":0,\"Uridium\":256}');
INSERT INTO `server_ships` VALUES (46, 14, 0, 'pet', 'P.E.T. Green', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":25000,\"Honor\":150,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (47, 62, 10, 'ship_goliath_design_exalted', 'Exalted', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (48, 63, 10, 'ship_goliath_design_solace', 'Solace', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (49, 64, 10, 'ship_goliath_design_diminisher', 'Diminisher', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (50, 65, 10, 'ship_goliath_design_spectrum', 'Spectrum', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (51, 66, 10, 'ship_goliath_design_sentinel', 'Sentinel', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (52, 67, 10, 'ship_goliath_design_venom', 'Venom', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (53, 68, 10, 'ship_goliath_design_ignite', 'Ignite', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (54, 69, 69, 'ship_citadel', 'Citadel', 550000, 0, 240, 7, 20, 0, 0, 0, 0, '{\"Experience\":120000,\"Honor\":1200,\"Credits\":0,\"Uridium\":1200}');
INSERT INTO `server_ships` VALUES (55, 70, 70, 'ship_spearhead', 'Spearhead', 100000, 0, 370, 5, 12, 0, 0, 0, 0, '{\"Experience\":7500,\"Honor\":75,\"Credits\":0,\"Uridium\":75}');
INSERT INTO `server_ships` VALUES (56, 81, 81, 'ship_vengeance_design_pusat', 'Pusat', 125000, 0, 370, 16, 12, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (57, 86, 10, 'ship_goliath_design_kick', 'Kick', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (58, 87, 10, 'ship_goliath_design_referee', 'Referee', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (59, 88, 10, 'ship_goliath_design_goal', 'Goal', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (60, 98, 98, 'ship_police', 'PoliceShip', 1000000, 0, 300, 35, 35, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (61, 109, 10, 'ship_goliath_design_saturn', 'Saturn', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (62, 110, 10, 'ship_goliath_design_centaur', 'Centaur', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (63, 61, 10, 'ship_goliath_design_veteran', 'Veteran', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (64, 140, 10, 'ship_goliath_design_vanquisher', 'Vanquisher', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (65, 141, 10, 'ship_goliath_design_sovereign', 'Sovereign', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (66, 142, 10, 'ship_goliath_design_peacemaker', 'Peacemaker', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (67, 150, 0, 'ship_nostromo_design_diplomat', 'Nostromo Diplomat', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (68, 151, 0, 'ship_nostromo_design_envoy', 'Nostromo Envoy', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (69, 152, 0, 'ship_nostromo_design_ambassador', 'Nostromo Ambassador', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (70, 153, 10, 'ship_goliath_design_goliath-razer', 'Razer', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (71, 154, 0, 'ship_nostromo_design_nostromo-razer', 'Nostromo Razer', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (72, 155, 10, 'ship_goliath_design_turkish', 'Hezarfen', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (73, 156, 156, 'ship_g-surgeon', 'Surgeon', 256000, 0, 300, 15, 16, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (74, 157, 49, 'ship_aegis_design_aegis-elite', 'Aegis Veteran', 275000, 0, 300, 10, 15, 0, 0, 0, 0, '{\"Experience\":25000,\"Honor\":250,\"Credits\":0,\"Uridium\":250}');
INSERT INTO `server_ships` VALUES (75, 158, 49, 'ship_aegis_design_aegis-superelite', 'Aegis Super Elite', 275000, 0, 300, 10, 15, 0, 0, 0, 0, '{\"Experience\":25000,\"Honor\":250,\"Credits\":0,\"Uridium\":250}');
INSERT INTO `server_ships` VALUES (76, 159, 69, 'ship_citadel_design_citadel-elite', 'Citadel Veteran', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (77, 160, 69, 'ship_citadel_design_citadel-superelite', 'Citadel Super Elite', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (78, 161, 70, 'ship_aegis_design_aegis-elite', 'Spearhead Veteran', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (79, 162, 70, 'ship_aegis_design_aegis-superelite', 'Spearhead Super Elite', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (80, 442, 0, 'spaceball_summer', '..::{Spaceball}::..', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (81, 443, 0, 'spaceball_winter', '..::{Spaceball}::..', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (82, 444, 0, 'spaceball_soccer', '..::{Spaceball}::..', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"Experience\":0,\"Honor\":0,\"Credits\":0,\"Uridium\":0}');
INSERT INTO `server_ships` VALUES (83, 79, 0, 'ship79', '-=[ Kristallon ]=-', 400000, 300000, 250, 1, 1, 100, 0, 4500, 1, '{\"Experience\":51200,\"Honor\":256,\"Credits\":409600,\"Uridium\":128}');
INSERT INTO `server_ships` VALUES (84, 78, 0, 'ship78', '-=[ Kristallin ]=-', 50000, 40000, 320, 1, 1, 100, 1, 1100, 1, '{\"Experience\":6400,\"Honor\":32,\"Credits\":12800,\"Uridium\":16}');
INSERT INTO `server_ships` VALUES (85, 35, 0, 'ship35', '..::{ Boss Kristallon }::..', 1600000, 1200000, 250, 1, 1, 100, 0, 18000, 1, '{\"Experience\":204800,\"Honor\":1024,\"Credits\":1638400,\"Uridium\":512}');
INSERT INTO `server_ships` VALUES (86, 29, 0, 'ship29', '..::{ Boss Kristallin }::..', 200000, 160000, 320, 1, 1, 100, 1, 4000, 1, '{\"Experience\":25600,\"Honor\":128,\"Credits\":51200,\"Uridium\":64}');
INSERT INTO `server_ships` VALUES (87, 245, 245, 'ship_cyborg', 'Cyborg', 256000, 0, 300, 15, 15, 0, 0, 0, 0, '{\"Experience\":51200,\"Honor\":512,\"Credits\":0,\"Uridium\":512}');

SET FOREIGN_KEY_CHECKS = 1;
