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
-- NEWS
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `html_code` varchar(2000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- EVENT
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
-- EVENT_PARTICIPATION
-- ----------------------------
DROP TABLE IF EXISTS `event_participation`;
CREATE TABLE `event_participation`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) NOT NULL,
  `event_code` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;


--
-- Volcado de datos para la tabla `news`
--

INSERT INTO `news` (`id`, `html_code`) VALUES
(1, '<img src=\"https://i.imgur.com/BScLR9j.jpg\" style=\"width:100%\">\r\n          <br><br>\r\n          <strong>DeathSpace UPDATE 28/07/2020</strong>\r\n          <br><br>\r\n          <p> * NEW Aegis, Citadel, Spearhead <br> * No more BUGS in EQUIPMENT <br> * ANTI PUSHING System <br> * NPC Implemented <br> * HAVVOC and HERCULES price balancing\r\n            <br><br><strong><a href=\"https://web.facebook.com/groups/1672675672946614/?_rdc=1&_rdr\" target=\"_blank\" rel=\"noopener noreferrer\">OFFICIAL FACEBOOK GROUP</a></strong> </p>'),
(2, '\r\n          <img src=\"https://i.imgur.com/BScLR9j.jpg\" style=\"width:100%\">\r\n          <br><br>\r\n          <strong>DeathSpace UPDATE 27/07/2020</strong>\r\n          <br><br>\r\n          <p> * APIS & ZEUS FREE! <br> * Havoc & Hercules implemented <br> * Hammerclaw & Cyborg implemented <br> * Hangar system working <br> * LF-4 FREE!\r\n            <br><br><strong><a href=\"https://web.facebook.com/groups/1672675672946614/?_rdc=1&_rdr\" target=\"_blank\" rel=\"noopener noreferrer\">OFFICIAL FACEBOOK GROUP</a></strong> </p>'),
(3, '<iframe width=\"100%\" height=250px src=\"https://www.youtube.com/embed/N-_mhCi-fQY\">\r\n          </iframe>\r\n          <br><br>\r\n          <strong>DeathSpaces is now ONLINE!</strong>\r\n          <br><br>\r\n          <p>After weeks of hard work, we are ready to start this new adventure! Invite your friends. <br> <br> The galaxy gates and events will arrive soon, don\'t despair!\r\n            <br><br> <strong><a href=\"https://web.facebook.com/groups/1672675672946614/?_rdc=1&_rdr\" target=\"_blank\" rel=\"noopener noreferrer\">OFFICIAL FACEBOOK GROUP</a></strong> </p>'),
(4, '<img src=\"https://i.imgur.com/3BUpClT.jpg\" style=\"width:100%\">\r\n          <br><br>\r\n          <strong>Play right now with 2D / 3D</strong>\r\n          <br><br>\r\n          <p>Get a more realistic experience with the deathspace 3D graphics engine. <br> <br> You can change 2D / 3D from \"Settings\"\r\n            <br><br><strong><a href=\"https://web.facebook.com/groups/1672675672946614/?_rdc=1&_rdr\" target=\"_blank\" rel=\"noopener noreferrer\">OFFICIAL FACEBOOK GROUP</a></strong> <br><br> </p>');
