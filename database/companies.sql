DROP TABLE IF EXISTS `companies`;

CREATE TABLE `companies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `trading_name` varchar(128) DEFAULT NULL,
  `company_number` varchar(15) DEFAULT NULL,
  `ird_number` varchar(15) DEFAULT NULL,
  `website` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `industry_id` varchar(4) NOT NULL,
  `address_country_id` int DEFAULT NULL,
  `address_city` varchar(45) DEFAULT NULL,
  `address_street` varchar(45) DEFAULT NULL,
  `address_building` varchar(45) DEFAULT NULL,
  `address_zip` varchar(12) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `motto` text(255) DEFAULT NULL,
  `description` text(255) DEFAULT NULL,
  `creation_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `modification_at` DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

  INSERT INTO companies 
  (`name`, `trading_name`, `company_number`, `ird_number`, `website`, `email`, `phone`, `industry_id`, `address_country_id`, `address_city`, `address_street`, `address_building`, `address_zip`, `logo`, `motto`, `description`, `creation_at`) 
  VALUES
   ('Mok', 'Bok', '98709809', '129839283', 'www.mok.com', 'light@mok.com', '098908098', '2300', '2', 'City', 'Street', 'Building 3', '67783', '/logo.png', 'Heray!', 'Good lighting company', '2022-12-23 00:00:00');
