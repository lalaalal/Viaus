CREATE DATABASE viaus;

USE viaus;

CREATE TABLE user (
  `no` INT NOT NULL AUTO_INCREMENT,
  `id` VARCHAR(24) NOT NULL,
  `pw` VARCHAR(64) NOT NULL,
  `name` CHAR(16) NULL,
  `sex` CHAR(5) NULL,
  `date` DATETIME NOT NULL DEFAULT NOW(),
  `class` CHAR(10) NOT NULL DEFAULT 'user',
  PRIMARY KEY (no, id)
);
