DROP DATABASE IF EXISTS `FreshFusion`;

CREATE DATABASE `FreshFusion`;

USE `FreshFusion`;

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
        `BranchId` INT NOT NULL,
        `RoleId` INT NOT NULL,
        `Name` VARCHAR(255) NOT NULL,
        `Mobile` VARCHAR(255) NOT NULL,
        `Email` VARCHAR(255) NOT NULL,
        `Address` VARCHAR(255) NOT NULL,
        `Password` VARCHAR(255) NOT NULL,
        FOREIGN KEY (`RoleId`) REFERENCES `Roles` (`Id`),
        FOREIGN KEY (`BranchId`) REFERENCES `BranchDetails` (`Id`)
    );

CREATE TABLE
    `Modules` (
        `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `Name` VARCHAR(255) NOT NULL
    );

CREATE TABLE
    `Permissions` (
        `Id` INT PRIMARY KEY AUTO_INCREMENT,
        `UserId` INT NOT NULL,
        `ModuleId` INT NOT NULL,
        `AddPermission` INT NOT NULL,
        `EditPermission` INT NOT NULL,
        `DeletePermission` INT NOT NULL,
        `ViewPermission` INT NOT NULL,
        FOREIGN KEY (`UserId`) REFERENCES `Users` (`Id`),
        FOREIGN KEY (`ModuleId`) REFERENCES `Modules` (`Id`)
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

INSERT INTO
    `Roles` (`Name`)
VALUES
    ('Admin'),
    ('BranchOwner'),
    ('Manager'),
    ('Staff');

INSERT INTO
    `City` (`Name`)
VALUES
    ('Jamnagar');

INSERT INTO
    `BranchDetails` (`CityId`, `Address`, `Squarefeet`, `OwnerName`)
VALUES
    (
        1,
        'Testing Branch Details Address',
        20,
        'Yash Sen'
    );

INSERT INTO
    `Users` (
        `BranchId`,
        `RoleId`,
        `Name`,
        `Mobile`,
        `Email`,
        `Address`,
        `Password`
    )
VALUES
    (
        1,
        1,
        'OwnerName',
        '7894561234',
        'Testing@gmail.com',
        'This is the testing address',
        'xyz'
    );

INSERT INTO
    `Modules` (`Name`)
VALUES
    ('Roles'),
    ('City'),
    ('BranchDetails'),
    ('Users'),
    ('Categories'),
    ('Products'),
    ('Stocks'),
    ('Purchase'),
    ('Sales'),
    ('Expenses');

INSERT INTO
    `Permissions` (
        `UserId`,
        `ModuleId`,
        `AddPermission`,
        `EditPermission`,
        `DeletePermission`,
        `ViewPermission`
    )
VALUES
    (1, 1, 1, 1, 1, 1),
    (1, 2, 1, 1, 1, 1),
    (1, 3, 1, 1, 1, 1),
    (1, 4, 1, 1, 1, 1),
    (1, 5, 1, 1, 1, 1),
    (1, 6, 1, 1, 1, 1),
    (1, 7, 1, 1, 1, 1),
    (1, 8, 1, 1, 1, 1),
    (1, 9, 1, 1, 1, 1),
    (1, 10, 1, 1, 1, 1);