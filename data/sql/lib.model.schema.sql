
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- group
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `group`;


CREATE TABLE `group`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`label` VARCHAR(50)  NOT NULL,
	`description` VARCHAR(255),
	`test` VARCHAR(500),
	`previous_test` VARCHAR(500),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- item
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `item`;


CREATE TABLE `item`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`label` VARCHAR(50)  NOT NULL,
	`description` VARCHAR(255),
	`url` VARCHAR(255),
	`test` VARCHAR(500),
	`previous_test` VARCHAR(500),
	`tree_left` INTEGER,
	`tree_right` INTEGER,
	`tree_level` INTEGER,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
