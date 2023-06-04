-- Use the following commands to create the database
CREATE DATABASE registration;
USE registration;

-- Creating tables for the users registration database
CREATE TABLE `registration`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `first_name` VARCHAR(100) NOT NULL , `last_name` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , `citizenship_number` VARCHAR(11) NOT NULL , `temporary_address` VARCHAR(40) NOT NULL , `permanent_address` VARCHAR(40) NOT NULL , `nationality` VARCHAR(30) NOT NULL , `district_name` VARCHAR(50) NOT NULL , `municipality_name` VARCHAR(50) NOT NULL , `ward_no` INT(2) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`email`)) ENGINE = InnoDB;


-- Create the table for the contact form
CREATE TABLE `registration`.`contact_form` (`id` INT NOT NULL AUTO_INCREMENT , `fullname` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;