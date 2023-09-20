-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema toilet-advisor
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema toilet-advisor
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `toilet-advisor` DEFAULT CHARACTER SET utf8 ;
USE `toilet-advisor` ;

-- -----------------------------------------------------
-- Table `toilet-advisor`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `toilet-advisor`.`user` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `favori` INT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `toilet-advisor`.`city`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `toilet-advisor`.`city` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `zipCode` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `toilet-advisor`.`toilet`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `toilet-advisor`.`toilet` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `adress` VARCHAR(255) NOT NULL,
  `status` TINYINT NULL,
  `rating` INT NULL,
  `accessiblility` VARCHAR(255) NULL,
  `city_id` BIGINT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_toilet_city1_idx` (`city_id` ASC),
  CONSTRAINT `fk_toilet_city1`
    FOREIGN KEY (`city_id`)
    REFERENCES `toilet-advisor`.`city` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `toilet-advisor`.`toilet_has_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `toilet-advisor`.`toilet_has_user` (
  `toilet_id` BIGINT NOT NULL,
  `user_id` BIGINT NOT NULL,
  PRIMARY KEY (`toilet_id`, `user_id`),
  INDEX `fk_toilet_has_user_user1_idx` (`user_id` ASC),
  INDEX `fk_toilet_has_user_toilet_idx` (`toilet_id` ASC),
  CONSTRAINT `fk_toilet_has_user_toilet`
    FOREIGN KEY (`toilet_id`)
    REFERENCES `toilet-advisor`.`toilet` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_toilet_has_user_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `toilet-advisor`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
