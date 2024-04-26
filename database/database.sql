DROP TABLE IF EXISTS 'FreshFusion';

CREATE DATABASE 'FreshFusion';

USE 'FreshFusion';

CREATE TABLE
    `Roles` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `Name` VARCHAR(255) NOT NULL
    );

CREATE TABLE
    `City` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `Name` VARCHAR(255) NOT NULL
    );

CREATE TABLE
    `BranchDetails` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `CityId` INT NOT NULL,
        `Address` VARCHAR(255) NOT NULL,
        `Squarefeet` INT NOT NULL,
        `OwnerName` VARCHAR(255) NOT NULL,
        FOREIGN KEY (`CityId`) REFERENCES `City` (`Id`)
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
    `Modules` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `Name` VARCHAR(255) NOT NULL
    );

CREATE TABLE
    `Permissions` (
        `UserId` INT NOT NULL,
        `ModuleId` INT NOT NULL,
        `BranchId` INT NOT NULL,
        FOREIGN KEY (`UserId`) REFERENCES `Users` (`Id`),
        FOREIGN KEY (`ModuleId`) REFERENCES `Modules` (`Id`),
        FOREIGN KEY (`BranchId`) REFERENCES `BranchDetails` (`Id`)
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
        `Name` VARCHAR(255) NOT NULL,
        `Details` VARCHAR(255) NOT NULL,
        `Price` INT NOT NULL,
        `ImageFileName` VARCHAR(255) NOT NULL,
        FOREIGN KEY (`CategoryId`) REFERENCES `Categories` (`Id`)
    );

CREATE TABLE
    `Stocks` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `BranchId` INT NOT NULL,
        `ProductId` INT NOT NULL,
        `CurrentQuantity` INT NOT NULL,
        FOREIGN KEY (`BranchId`) REFERENCES `BranchDetails` (`Id`)
    );

CREATE TABLE
    `Purchase` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `BranchId` INT NOT NULL,
        `ProductId` INT NOT NULL,
        `Quantity` INT NOT NULL,
        FOREIGN KEY (`BranchId`) REFERENCES `BranchDetails` (`Id`),
        FOREIGN KEY (`ProductId`) REFERENCES `Products` (`Id`)
    );

CREATE TABLE
    `Sales` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `BranchId` INT NOT NULL,
        `ProductId` INT NOT NULL,
        `Quantity` INT NOT NULL,
        FOREIGN KEY (`BranchId`) REFERENCES `BranchDetails` (`Id`),
        FOREIGN KEY (`ProductId`) REFERENCES `Products` (`Id`)
    );

CREATE TABLE
    `Expenses` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `BranchId` INT NOT NULL,
        `Name` VARCHAR(255) NOT NULL,
        `Amount` INT NOT NULL,
        FOREIGN KEY (`BranchId`) REFERENCES `BranchDetails` (`Id`)
    );
