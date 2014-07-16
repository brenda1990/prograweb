-- MySQL Script generated by MySQL Workbench
-- Tue 08 Jul 2014 07:55:01 AM CDT
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema revista
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `revista` ;
CREATE SCHEMA IF NOT EXISTS `revista` DEFAULT CHARACTER SET utf8 ;
USE `revista` ;

-- -----------------------------------------------------
-- Table `revista`.`status`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `revista`.`status` ;

CREATE TABLE IF NOT EXISTS `revista`.`status` (
  `id_status` INT NOT NULL AUTO_INCREMENT,
  `status` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_status`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `revista`.`articulo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `revista`.`articulo` ;

CREATE TABLE IF NOT EXISTS `revista`.`articulo` (
  `id_articulo` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(500) NOT NULL,
  `resumen` LONGTEXT NULL DEFAULT NULL,
  `abstract` LONGTEXT NULL DEFAULT NULL,
  `introduccion` LONGTEXT NULL DEFAULT NULL,
  `metodologia` LONGTEXT NULL DEFAULT NULL,
  `contenido` LONGTEXT NULL DEFAULT NULL,
  `fecha_creacion` TIMESTAMP NOT NULL,
  `archivo_pdf` VARCHAR(100) NULL DEFAULT NULL,
  `id_status` INT NOT NULL,
  `conclusiones` LONGTEXT NULL DEFAULT NULL,
  `agradecimientos` TEXT NULL DEFAULT NULL,
  `referencias` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id_articulo`),
  INDEX `fk_status_articulo_idx` (`id_status` ASC),
  CONSTRAINT `fk_status_articulo`
    FOREIGN KEY (`id_status`)
    REFERENCES `revista`.`status` (`id_status`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `revista`.`revista`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `revista`.`revista` ;

CREATE TABLE IF NOT EXISTS `revista`.`revista` (
  `id_revista` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(500) NOT NULL,
  `portada` VARCHAR(100) NOT NULL,
  `fecha` DATE NOT NULL,
  `volumen` VARCHAR(45) NOT NULL,
  `titulo` VARCHAR(200) NULL DEFAULT NULL,
  `subtitulo` VARCHAR(200) NULL DEFAULT NULL,
  `numero` INT NULL DEFAULT NULL,
  `clave` VARCHAR(45) NULL DEFAULT NULL,
  `directorio` LONGTEXT NULL DEFAULT NULL,
  `editorial` LONGTEXT NULL DEFAULT NULL,
  `id_status` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id_revista`),
  INDEX `fk_status_revista_idx` (`id_status` ASC),
  CONSTRAINT `fk_status_revista`
    FOREIGN KEY (`id_status`)
    REFERENCES `revista`.`status` (`id_status`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `revista`.`autor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `revista`.`autor` ;

CREATE TABLE IF NOT EXISTS `revista`.`autor` (
  `id_autor` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `apellidos` VARCHAR(200) NOT NULL,
  `email` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id_autor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `revista`.`indice`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `revista`.`indice` ;

CREATE TABLE IF NOT EXISTS `revista`.`indice` (
  `id_indice` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(500) NOT NULL,
  `numero` INT NULL DEFAULT NULL,
  `id_revista` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id_indice`),
  INDEX `fk_revista_idx` (`id_revista` ASC),
  CONSTRAINT `fk_revista`
    FOREIGN KEY (`id_revista`)
    REFERENCES `revista`.`revista` (`id_revista`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `revista`.`indice_articulo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `revista`.`indice_articulo` ;

CREATE TABLE IF NOT EXISTS `revista`.`indice_articulo` (
  `id_indice_articulo` INT NOT NULL AUTO_INCREMENT,
  `id_indice` INT NOT NULL,
  `id_articulo` INT NOT NULL,
  `numero` FLOAT NOT NULL,
  PRIMARY KEY (`id_indice_articulo`),
  INDEX `fk_indice_idx` (`id_indice` ASC),
  INDEX `fk_articulo_idx` (`id_articulo` ASC),
  CONSTRAINT `fk_indice`
    FOREIGN KEY (`id_indice`)
    REFERENCES `revista`.`indice` (`id_indice`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_articulo`
    FOREIGN KEY (`id_articulo`)
    REFERENCES `revista`.`articulo` (`id_articulo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `revista`.`articulo_autor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `revista`.`articulo_autor` ;

CREATE TABLE IF NOT EXISTS `revista`.`articulo_autor` (
  `id_articulo_autor` INT NOT NULL AUTO_INCREMENT,
  `id_articulo` INT NOT NULL,
  `id_autor` INT NOT NULL,
  PRIMARY KEY (`id_articulo_autor`),
  INDEX `fk_articulo_idx` (`id_autor` ASC),
  INDEX `fk_autor__idx` (`id_articulo` ASC),
  CONSTRAINT `fk_articulo_autor`
    FOREIGN KEY (`id_autor`)
    REFERENCES `revista`.`autor` (`id_autor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_autor_articulo`
    FOREIGN KEY (`id_articulo`)
    REFERENCES `revista`.`articulo` (`id_articulo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
