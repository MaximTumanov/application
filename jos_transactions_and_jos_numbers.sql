CREATE TABLE `jos_transactions` (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`user_id` INT(10) NOT NULL,
	`order_id` INT(10) NULL DEFAULT NULL,
	`payrefno` INT(10) NOT NULL,
	`event_id` INT(10) NOT NULL,
	`date` DATETIME NOT NULL,
	`secure` VARCHAR(3) NOT NULL DEFAULT 'NO',
	`ctrl` VARCHAR(100) NOT NULL,
	`status` VARCHAR(10) NOT NULL DEFAULT 'created',
	`info` TEXT NULL,
	`ticket_numbers` TEXT NULL,
	PRIMARY KEY (`id`),
	INDEX `payrefno` (`payrefno`),
	INDEX `order_id` (`order_id`),
	INDEX `user_id` (`user_id`),
	INDEX `event_id` (`event_id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;


CREATE TABLE `jos_numbers` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`number` VARCHAR(50) NULL DEFAULT NULL,
	`date` DATETIME NULL DEFAULT NULL,
	PRIMARY KEY (`id`),
	INDEX `number` (`number`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;
