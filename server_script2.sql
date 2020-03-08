-- ----------------------------
-- AUCTION_ITEMS
-- ----------------------------
DROP TABLE IF EXISTS `auction_house`;
CREATE TABLE `auction_house`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL, 
  `bidderId`  bigint(20),
  `bid` bigint(20), 
  `typeCoin` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL, 
  `category` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL, 
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- AUCTION_ITEMS_WINNERS
-- ----------------------------
DROP TABLE IF EXISTS `auction_house_winners`;
CREATE TABLE `auction_house_winners`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemName` varchar(35) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL, 
  `userId`  bigint(20),
  `bid` bigint(20), 
  `typeCoin` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `category` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL, 
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- BOOSTERS_AUCTION
-- ----------------------------

