CREATE TABLE `user` (
  `userid` INT(11) NOT NULL AUTO_INCREMENT,
  `currency` VARCHAR(30) NOT NULL,
  `id_currency` VARCHAR(30) NOT NULL,
  `currency_value` VARCHAR(30) NOT NULL,
PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;