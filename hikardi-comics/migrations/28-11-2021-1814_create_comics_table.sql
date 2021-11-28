CREATE TABLE `comics` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `author` varchar(64) NOT NULL,
  `images` varchar(8192) NOT NULL,
  PRIMARY KEY (`id`));
