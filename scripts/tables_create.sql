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
