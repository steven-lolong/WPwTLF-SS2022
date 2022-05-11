-- create scheme / database 
CREATE SCHEMA `wpwlf` ;

-- create database 
CREATE TABLE `wpwlf`.`user` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `surname` VARCHAR(255) NOT NULL,
  `lasname` VARCHAR(255) NULL,
  `loginid` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE INDEX `iduser_UNIQUE` (`iduser` ASC),
  UNIQUE INDEX `loginid_UNIQUE` (`loginid` ASC));

-- get data from table user 
SELECT * FROM wpwlf.user

-- create a row in table
INSERT INTO `wpwlf`.`user` (`surname`, `lastname`, `loginid`, `password`) VALUES ('steven', 'lolong', 'steel', md5('007'))

-- update row in table 
UPDATE `wpwlf`.`user` SET `loginid` = 'steel_tu' WHERE (`iduser` = '1')

-- delete a row in table 
DELETE FROM `wpwlf`.`user` WHERE (`iduser` = '1')