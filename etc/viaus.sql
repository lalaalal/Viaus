CREATE DATABASE viaus;

USE viaus;

CREATE TABLE user_data (
  `no` INT NOT NULL AUTO_INCREMENT,
  `id` CHAR(16) NOT NULL,
  `pw` CHAR(16) NOT NULL,
  `name` CHAR(16) NULL,
  `sex` CHAR(5) NULL,
  `date` DATETIME NOT NULL DEFAULT NOW(),
  `class` CHAR(10) NOT NULL DEFAULT 'user',
  PRIMARY KEY (no, id)
);
