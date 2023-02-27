DROP TABLE IF EXISTS `product_types`;

CREATE TABLE `product_types` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `code` varchar(64) DEFAULT NULL,
  `description` text(255) DEFAULT NULL,
  `info_path` text(255) DEFAULT NULL,
  `creation_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `modification_at` DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO product_types

  (name, code, description, info_path)    
VALUES 
('Relay Controller', 'RC', 'Switching Load Controller', 'images/img/relay_controller.jpg'),
('Dimmer Controller', 'RC', 'Relay Controllers', 'images/img/relay_controller.jpg'),
('Relay Controllers', 'RC', 'Relay Controllers', 'images/img/relay_controller.jpg'),
('Relay Controllers', 'RC', 'Relay Controllers', 'images/img/relay_controller.jpg')
