
-- ----------------------------
-- AUCTION_ITEMS_WINNERS
-- ----------------------------
DROP TABLE IF EXISTS `auction_house_winners`;
CREATE TABLE `auction_house_winners`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemName` varchar(35) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL, 
  `userId`  bigint(20),
  `bid` bigint(20), 
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;
