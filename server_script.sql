-- ----------------------------
-- Table structure for player_designs (WORKING)
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
-- Table structure for event_coins (WORKING)
-- ----------------------------
DROP TABLE IF EXISTS `event_coins`;
CREATE TABLE `event_coins`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coins` int(11) NOT NULL,
  `userId` bigint(20) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- NEWS (WORKING)
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `html_code` varchar(2000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- EVENT (WORKING)
-- ----------------------------
DROP TABLE IF EXISTS `event`;
CREATE TABLE `event`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `html_code` varchar(2000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `active` int(11) NOT NULL,
  `event_code` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- USER_BANS (No send in other scripts because we have users banned.)
-- ----------------------------
DROP TABLE IF EXISTS `user_bans`;
CREATE TABLE `user_bans`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_user` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `userId`bigint(20) NOT NULL,
  `reason` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `banType` tinyint(10) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- EVENT_PARTICIPATION
-- ----------------------------
DROP TABLE IF EXISTS `event_participation`;
CREATE TABLE `event_participation`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) NOT NULL,
  `event_code` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;
