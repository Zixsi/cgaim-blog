ALTER TABLE `posts` ADD `meta_keywords` TEXT NULL DEFAULT NULL AFTER `description`, ADD `meta_description` TEXT NULL DEFAULT NULL AFTER `meta_keywords`;