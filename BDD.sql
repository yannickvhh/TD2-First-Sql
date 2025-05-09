DROP DATABASE IF EXISTS famille ;
CREATE DATABASE famille;
USE famille;

CREATE TABLE membre(
ID int(11) NOT NULL PRIMARY KEY,
Nom varchar(255) NOT NULL,
Prenom varchar(255) NOT NULL,
Statut varchar(255) NOT NULL,
DateDeNaissance Date NOT NULL,
Photo varchar(255) NOT NULL
);

Insert into membre(ID,Nom, Prenom, Statut, DateDeNaissance, Photo)
values(1, "Dupond", "Grégoire", "Grand-père", '1942-05-17', 'dupond/gregoire.avif'),
(2, "Dupond", "Germaine", "Grand-mère", '1949-02-15', 'dupond/germaine.avif'),
(3, "Dupond", "gérard", "père", '1969-12-22', 'dupond/gerard.avif'),
(4, "Dupond", "Marie", "mère", '1981-03-01', 'dupond/marie.avif'),
(5, "Julien", "gérard", "fils", '2005-05-17', 'dupond/julien.avif'),
(6, "Manon", "gérard", "fille", '2010-11-29', 'dupond/manon.avif');