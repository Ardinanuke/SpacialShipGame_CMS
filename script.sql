DROP TABLE IF EXISTS `galaxy_gates`;

CREATE TABLE `log_player_kills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `killer_id` int(11) NOT NULL,
  `target_id` int(11) NOT NULL,
  `pushing` tinyint(1) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=33189 DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;