DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `surename` varchar(45) DEFAULT NULL,
  `dob` DATE DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `company_id` int DEFAULT '0',
  `position` varchar(145) DEFAULT NULL,
  `notification` boolean DEFAULT NULL,
  `newsletter` boolean DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `permission` int DEFAULT '0',
  `creation_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `modification_at` DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO users
  (name, surename, dob, email, phone, company_id, position, notification, newsletter, password, permission)    
VALUES 
('Admin', 'Adminich', '1994-12-12', 'admin@admin.com', '64213645284', 1, 'staff', '1','0','$2y$10$NrOn2M5Lppw1zWMjaE/GGe/LhM2.dJya1HYla4vP9d8uCgye2YjPO',0), 
('Amit', 'Jana', '1994-12-12', 'amit@email.com', '64213645284', 1, 'staff', '1','0','$2y$10$NrOn2M5Lppw1zWMjaE/GGe/LhM2.dJya1HYla4vP9d8uCgye2YjPO',0),   
('Alexa', 'Jana', '2004-12-22', 'alexa@email.com', '64219645284',0, 'staff',  '1','0', '$2y$10$NrOn2M5Lppw1zWMjaE/GGe/LhM2.dJya1HYla4vP9d8uCgye2YjPO',0), 
('Lynn', 'Jana', '2004-12-22', 'lynn@email.com','64293645284', 0, 'staff', '1', '0', '$2y$10$NrOn2M5Lppw1zWMjaE/GGe/LhM2.dJya1HYla4vP9d8uCgye2YjPO',0), 
('Merry', 'Jana', '2004-12-22', 'merry@email.com', '64210645284',0, 'staff', '1',  '0', '$2y$10$NrOn2M5Lppw1zWMjaE/GGe/LhM2.dJya1HYla4vP9d8uCgye2YjPO',0), 
('Juli', 'Jana', '2004-12-22', 'juli@email.com','64213646284', 0, 'staff', '1',  '0', '$2y$10$NrOn2M5Lppw1zWMjaE/GGe/LhM2.dJya1HYla4vP9d8uCgye2YjPO',0), 
('Becka', 'Jana', '2004-12-22', 'becka@email.com', '64213646284',0, 'staff', '1',  '0', '$2y$10$NrOn2M5Lppw1zWMjaE/GGe/LhM2.dJya1HYla4vP9d8uCgye2YjPO',0) 