CREATE TABLE `tags` ( 
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
  `name` VARCHAR(50) NOT NULL , 
  PRIMARY KEY (`id`), 
  UNIQUE `name` (`name`)
) ENGINE = InnoDB;

ALTER TABLE `posts` ADD `tags` TEXT(500) NOT NULL AFTER `img`;
ALTER TABLE `posts` ADD INDEX `tags` (`tags`(500));

ALTER TABLE `posts` ADD `counter` INT(11) UNSIGNED NOT NULL AFTER `active`;