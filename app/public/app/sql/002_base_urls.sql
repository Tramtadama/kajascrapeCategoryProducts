CREATE TABLE `ludek_sauto_robot`.`base_urls` ( `id` INT NOT NULL AUTO_INCREMENT , `url` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
ALTER TABLE `base_urls` ADD `category` VARCHAR(255) NOT NULL AFTER `url`;

INSERT INTO `base_urls` (`id`, `url`, `category`) VALUES (NULL, 'https://www.sauto.cz/inzerce/autobusy', 'autobusy');
INSERT INTO `base_urls` (`id`, `url`, `category`) VALUES (NULL, 'https://www.sauto.cz/inzerce/osobni/audi/a4', 'audi-a4');