DROP TABLE IF EXISTS 'FreshFusion';

CREATE DATABASE 'FreshFusion';

USE 'FreshFusion';

CREATE TABLE
    `Roles` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `Name` VARCHAR(255) NOT NULL
    );

CREATE TABLE
    `Users` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `RoleId` INT NOT NULL,
        `Name` VARCHAR(255) NOT NULL,
        `Mobile` INT NOT NULL,
        `Email` VARCHAR(255) NOT NULL,
        `Address` VARCHAR(255) NOT NULL,
        FOREIGN KEY (`RoleId`) REFERENCES `Roles` (`Id`)
    );

CREATE TABLE
    `Categories` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `Name` VARCHAR(255) NOT NULL
    );

CREATE TABLE
    `Products` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `CategoryId` INT NOT NULL,
        `Price` INT NOT NULL,
        `Name` VARCHAR(255) NOT NULL,
        `Details` VARCHAR(255) NOT NULL,
        FOREIGN KEY (`CategoryId`) REFERENCES `Categories` (`Id`)
    );

CREATE TABLE
    `ProductImages` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `ProductId` INT NOT NULL,
        `ImageName` VARCHAR(255) NOT NULL,
        FOREIGN KEY (`ProductId`) REFERENCES `Products` (`Id`)
    );

CREATE TABLE
    `Orders` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `UserId` INT NOT NULL,
        `ProductId` INT NOT NULL,
        `Quantity` INT NOT NULL,
        `TotalPrice` INT NOT NULL,
        `Status` VARCHAR(255) NOT NULL,
        FOREIGN KEY (`UserId`) REFERENCES `Users` (`Id`),
        FOREIGN KEY (`ProductId`) REFERENCES `Products` (`Id`)
    );

CREATE TABLE
    `Feedback` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `Topic` VARCHAR(255) NOT NULL,
        `Msg` VARCHAR(255) NOT NULL,
        `DateTime` DATE TIME NOT NULL
    );

CREATE TABLE
    `Inquiry` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `Topic` VARCHAR(255) NOT NULL,
        `Msg` VARCHAR(255) NOT NULL,
        `DateTime` DATE TIME NOT NULL
    );

