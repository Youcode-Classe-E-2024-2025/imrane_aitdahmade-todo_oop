
CREATE DATABASE GESTION_DES_TACHES;
USE  GESTION_DES_TACHES;

CREATE TABLE TACHES (
    id int PRIMARY KEY UNIQUE AUTO_INCREMENT,
    titre VARCHAR(255) UNIQUE NOT NULL,
    descreption TEXT  NOT NULL,
    Attribue  VARCHAR(255),
    status  ENUM('À faire','En cours','Terminé') DEFAULT  'À faire',
    type  ENUM('basique','bug','feature') DEFAULT  'basique',
     Foreign Key (Attribue )  REFERENCES USER(nom)

);
CREATE TABLE USER (
  id int UNIQUE AUTO_INCREMENT,
  nom VARCHAR(255) PRIMARY KEY UNIQUE NOT NULL,
  role  ENUM('admin','user') DEFAULT 'user'
);



