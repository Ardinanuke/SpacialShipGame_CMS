DROP TABLE IF EXISTS `galaxy_gates`;

CREATE TABLE `galaxy_gates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `piezes` int(11) NOT NULL,
  `typeGate` int(11) NOT NULL,
  `horde` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;