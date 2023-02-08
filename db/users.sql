DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `surename` varchar(45) DEFAULT NULL,
  `dob` DATE DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `company_id` int DEFAULT '0',
  `position` varchar(145) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `permission` int DEFAULT '0',
  `creation_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `modification_at` DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO users
  (name, surename, dob, email, company_id, position, password, permission)    
VALUES 
('Amit', 'Jana', '1994-12-12', 'amit@email.com', 0, 'staff', '$2y$10$NrOn2M5Lppw1zWMjaE/GGe/LhM2.dJya1HYla4vP9d8uCgye2YjPO',0),   
('Alexa', 'Jana', '2004-12-22', 'alexa@email.com', 0, 'staff', '$2y$10$NrOn2M5Lppw1zWMjaE/GGe/LhM2.dJya1HYla4vP9d8uCgye2YjPO',0), 
('Lynn', 'Jana', '2004-12-22', 'lynn@email.com', 0, 'staff', '$2y$10$NrOn2M5Lppw1zWMjaE/GGe/LhM2.dJya1HYla4vP9d8uCgye2YjPO',0), 
('Merry', 'Jana', '2004-12-22', 'merry@email.com', 0, 'staff', '$2y$10$NrOn2M5Lppw1zWMjaE/GGe/LhM2.dJya1HYla4vP9d8uCgye2YjPO',0), 
('Juli', 'Jana', '2004-12-22', 'juli@email.com', 0, 'staff', '$2y$10$NrOn2M5Lppw1zWMjaE/GGe/LhM2.dJya1HYla4vP9d8uCgye2YjPO',0), 
('Becka', 'Jana', '2004-12-22', 'becka@email.com', 0, 'staff', '$2y$10$NrOn2M5Lppw1zWMjaE/GGe/LhM2.dJya1HYla4vP9d8uCgye2YjPO',0) 