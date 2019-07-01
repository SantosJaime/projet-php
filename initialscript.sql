CREATE DATABASE AnnuaireToutou;-- Creation Base de Données
USE AnnuaireToutou;

CREATE USER "adminToutou"@"localhost" IDENTIFIED BY "Annu@ireT0ut0u";--Creation user 
GRANT ALL PRIVILEGES ON AnnuaireToutou.* TO "adminToutou"@"localhost";--sans droits de creation d'autres utilisateurs
FLUSH PRIVILEGES;-- Force creation user

CREATE TABLE Maitres (--Creation table
    id INT PRIMARY KEY,
    nom VARCHAR(200),
    telephone VARCHAR(20)
);

CREATE TABLE Chiens (--Creation table
    id INT PRIMARY KEY,
    nom VARCHAR(255),
    age INT,
    race VARCHAR(200),
    id_maitre INT,
    FOREIGN KEY (id_maitre)REFERENCES Maitres (id)-- creation FK
);
