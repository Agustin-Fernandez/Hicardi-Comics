CREATE TABLE IF NOT EXISTS `comics` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `author` varchar(64) NOT NULL,
  `images` text NOT NULL,
  PRIMARY KEY (`id`));
