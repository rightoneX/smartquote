DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `source` varchar(15) DEFAULT NULL,
  `source_id` int DEFAULT '0',
  `description` text(255) DEFAULT NULL,
  `path` text(255) DEFAULT NULL,
  `creation_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `modification_at` DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO images
  (name, source, source_id, description, path)    
VALUES 
('DDRC1220FR-GL', 'products', 1, 'Philips Dynalite Relay Controller with 12 channel - up to 20A per channel, max. load of 180 A.','img/98srh376/dsfij3987shhuer.jpg')