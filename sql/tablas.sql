CREATE TABLE `juegos` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `descripcion` text CHARACTER SET utf8,
  `plataforma` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `genero` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
CREATE TABLE `localizaciones` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` text,
  `importancia` int(1) DEFAULT NULL,
  `id_juego` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_juego` (`id_juego`),
  CONSTRAINT `fk_juego` FOREIGN KEY (`id_juego`) REFERENCES `juegos` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

