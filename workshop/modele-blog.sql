-- MySQL Workbench Synchronization
-- Generated: 2020-09-15 12:06
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Pierre-Gilles Levallois

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `cv_db` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE IF NOT EXISTS `cv_db`.`article` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(80) NOT NULL,
  `accroche` VARCHAR(45) NULL DEFAULT NULL,
  `texte` VARCHAR(2000) NULL DEFAULT NULL,
  `date_publication` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `cv_db`.`tag` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `libelle` VARCHAR(45) NOT NULL,
  `couleur` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `cv_db`.`article_tag` (
  `article_id` INT(11) NOT NULL,
  `tag_id` INT(11) NOT NULL,
  INDEX `fk_article_tag_article1_idx` (`article_id` ASC),
  INDEX `fk_article_tag_tag1_idx` (`tag_id` ASC),
  CONSTRAINT `fk_article_tag_article1`
    FOREIGN KEY (`article_id`)
    REFERENCES `cv_db`.`article` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_article_tag_tag1`
    FOREIGN KEY (`tag_id`)
    REFERENCES `cv_db`.`tag` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
