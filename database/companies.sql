DROP TABLE IF EXISTS `companies`;

CREATE TABLE `companies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `trading_name` varchar(128) DEFAULT NULL,
  `company_num` varchar(15) DEFAULT NULL,
  `website` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `industry_id` int DEFAULT '0',
  `address_country_id` int DEFAULT NULL,
  `address_city` varchar(45) DEFAULT NULL,
  `address_street` varchar(45) DEFAULT NULL,
  `address_building` varchar(45) DEFAULT NULL,
  `address_zip` varchar(12) DEFAULT NULL,
  `description` text(255) DEFAULT NULL,
  `creation_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `modification_at` DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO companies
  ( name, trading_name, company_num, website, email, phone, industry_id, address_country_id, address_city, address_building, address_zip, description)
VALUES
  ( 'IGM', 'Interantainal Guy Managment', '32515315', 'https://igm.com', 'email@igm.com','+63 4322 435 64', 23, 12, 'address_city' ,'address_building', '89234', 'company description')