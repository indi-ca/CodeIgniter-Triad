DROP DATABASE IF EXISTS `ci_triad` ;

CREATE DATABASE `ci_triad` ;
USE ci_triad;

DROP USER 'ci_triadu'@'localhost';
CREATE USER 'ci_triadu'@'localhost' IDENTIFIED BY 'password';

GRANT USAGE ON * . * TO 'ci_triadu'@'localhost' IDENTIFIED BY 'password' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ;

GRANT ALL PRIVILEGES ON `ci_triad` . * TO 'ci_triadu'@'localhost';

CREATE TABLE IF NOT EXISTS `phone_carrier` (
  `name` varchar(255) NOT NULL,
  `txt_address` varchar(255) NOT NULL,
  `txt_message_length` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `kombucha_batches` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
PRIMARY KEY (`id`))
ENGINE=InnoDB DEFAULT CHARSET=utf8;





DROP DATABASE IF EXISTS `ci_triad_test` ;
CREATE DATABASE `ci_triad_test` ;
USE ci_triad_test;

DROP USER 'ci_triad_testu'@'localhost';
CREATE USER 'ci_triad_testu'@'localhost' IDENTIFIED BY 'password';

GRANT USAGE ON * . * TO 'ci_triad_testu'@'localhost' IDENTIFIED BY 'password' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ;

GRANT ALL PRIVILEGES ON `ci_triad_test` . * TO 'ci_triad_testu'@'localhost';


CREATE TABLE IF NOT EXISTS `phone_carrier` (
  `name` varchar(255) NOT NULL,
  `txt_address` varchar(255) NOT NULL,
  `txt_message_length` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `kombucha_batches` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
PRIMARY KEY (`id`))
ENGINE=InnoDB DEFAULT CHARSET=utf8;

