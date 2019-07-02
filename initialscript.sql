CREATE DATABASE AnnuaireToutou;-- Creation Base de Données
USE AnnuaireToutou;

-- Creation user 
CREATE USER "adminToutou"@"%" IDENTIFIED BY "Annu@ireT0ut0u";
-- sans droits de creation d'autres utilisateurs
GRANT ALL PRIVILEGES ON AnnuaireToutou.* TO "adminToutou"@"%";
-- Force creation user
FLUSH PRIVILEGES;

-- Creation table
CREATE TABLE Maitres (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(200),
    telephone VARCHAR(20)
);

-- Creation table
CREATE TABLE Chiens (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    age INT,
    race VARCHAR(200),
    id_maitre INT,
    -- creation FK
    FOREIGN KEY (id_maitre) REFERENCES Maitres (id)
);

-- insérer un maitre
INSERT INTO Maitres (nom, telephone) VALUES ('Bob', '0798767654');
-- insérer un chien
INSERT INTO Chiens (nom, age, race, id_maitre) VALUES ('Chipie',12,'Yorkshire',1);
