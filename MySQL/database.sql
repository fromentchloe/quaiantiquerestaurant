CREATE DATABASE quaiavare;
USE quaiavare ;
CREATE TABLE users (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name TEXT(100) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE,
password VARCHAR(100) NOT NULL,
inscription_date DATETIME DEFAULT CURRENT_TIMESTAMP, 
is_admin BOOLEAN NOT NULL DEFAULT FALSE,
allergy TEXT(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE reservations (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
date DATE NOT NULL,
hour TIME NOT NULL,
count INT UNSIGNED NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_data` varchar(255) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE images

