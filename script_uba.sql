DROP TABLE IF EXISTS `log_uba_kills`;
CREATE TABLE `log_uba_kills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `killer_id` int(11) NOT NULL,
  `target_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;
