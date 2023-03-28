CREATE TABLE `dev_kajascrape`.`urls` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(500) NOT NULL,
  `url` VARCHAR(500) NOT NULL,
  `processed` DATETIME NULL,
  `downloaded` DATETIME NULL,
  PRIMARY KEY (`id`));
  
ALTER TABLE `dev_kajascrape`.`urls` 
ADD COLUMN `category` VARCHAR(500) NOT NULL AFTER `downloaded`;

CREATE TABLE `dev_kajascrape`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(500) NOT NULL,
  `category` VARCHAR(500) NOT NULL,
  `price` VARCHAR(500) NOT NULL,
  `article_no` VARCHAR(500) NOT NULL,
  PRIMARY KEY (`id`));