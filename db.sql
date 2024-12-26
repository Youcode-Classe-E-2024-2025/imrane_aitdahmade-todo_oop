
CREATE DATABASE GESTION_DES_TACHES;
USE  GESTION_DES_TACHES;

CREATE TABLE TACHES (
    id int PRIMARY KEY UNIQUE AUTO_INCREMENT,
    titre VARCHAR(255) UNIQUE NOT NULL,
    descreption TEXT  NOT NULL,
    Attribué  VARCHAR(255) Foreign Key  REFERENCES USER(nom),
    status VARCHAR(10) ENUM('À faire','En cours','Terminé') DEFAULT  'À faire',
    type VARCHAR(10) ENUM('basique','bug','feature') DEFAULT  'basique',

);
CREATE TABLE USER (
  id int UNIQUE AUTO_INCREMENT,
  nom VARCHAR(255) PRIMARY KEY UNIQUE NOT NULL,
  role VARCHAR(255) ENUM('admin','user') DEFAULT 'user',
)

