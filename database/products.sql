DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `code` varchar(64) DEFAULT NULL,
  `order_code` varchar(64) DEFAULT NULL,
  `stock_code` varchar(64) DEFAULT NULL,
  `bar_code` varchar(64) DEFAULT NULL,
  `type` varchar(64) DEFAULT NULL,
  `brand` varchar(64) DEFAULT NULL,
  `weight` decimal(12,3) DEFAULT NULL,
  `description` text(255) DEFAULT NULL,
  `info_path` text(255) DEFAULT NULL,
  `creation_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `modification_at` DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO products
  (name, code, order_code, stock_code, bar_code, type, brand, weight, description, info_path)    
VALUES 
('DDRC1220FR-GL', 'DDRC1220FR-GL', '913703243009', '871869688795000', 
'97809667456487987', 'Dynalite Relay Controllers', 'Philips Dynalite', '	
0.900', 'DDRC1220FR-GL provides control of multiple types of switched loads. 12 channel controller supports switched loads - up to 20A per channel, max. load of 180 A.','HUhw76214g#yuyt')