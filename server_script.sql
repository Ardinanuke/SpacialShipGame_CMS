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