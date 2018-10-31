CREATE DATABASE `erp`;
USE `erp`;

CREATE TABLE `companies`(
	id INTEGER UNSIGNED AUTO_INCREMENT NOT NULL,
	name VARCHAR(50) NOT NULL,
	PRIMARY KEY(id)
); 

INSERT INTO `companies` (id, name) VALUES 
	(null, 'Apple'), 
	(null, 'Google'),
	(null, 'Docker Inc'), 
	(null, 'Space X');