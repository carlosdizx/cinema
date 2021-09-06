/*
 Creacion y uso de la base de datos
 */
CREATE DATABASE IF NOT EXISTS  cinema;
USE cinema;

/*
 Eliminacion de las tablas para crearlas de manera adecuada
 */
DROP TABLE IF EXISTS usuarios;
DROP TABLE IF EXISTS films;
DROP TABLE IF EXISTS tipos;
DROP TABLE IF EXISTS generos;
DROP TABLE IF EXISTS paises;
DROP TABLE IF EXISTS plataformas;

/**
  Creacion de las tablas
 */
CREATE TABLE IF NOT EXISTS usuarios
(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombres VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS tipos
(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombre VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS generos
(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombre VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS paises
(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombre VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS plataformas
(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombre VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS films
(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    fecha DATE NOT NULL,
    trialer VARCHAR(255) NOT NULL,
    director VARCHAR(100) NOT NULL,
    sinopsis VARCHAR(255) NOT NULL,
    ruta_img VARCHAR(255) NOT NULL,
    genero INT NOT NULL,
    tipo INT NOT NULL,
    pais INT NOT NULL,
    plataforma INT NOT NULL
);

INSERT INTO tipos (nombre) VALUES ('Pelicula'),('Serie'),('Telenovela'),('Documental');
INSERT INTO generos (nombre) VALUES ('Accion'),('Biografia'),('Crimen'),('Familiar'),('Horror'),
                                    ('Romance'),('Deportes'),('Aventuras'),('Accion'),
                                    ('Comedia'),('Fantasia'),('Thiller'),('Musicales'),('Sicologicas');
INSERT INTO plataformas (nombre) VALUES ('Netflix'),('Disney+'),('Amazon Prime'),('DirecTV GO'),('HBO max'),('Hulu');
INSERT INTO paises (nombre) VALUES ('E.E. U.U.'),('India'),('China'),('Reino Unido'),('España'),('Colombia');

INSERT INTO usuarios (nombres, apellidos, correo, password) VALUES
    ('Carlos Ernesto','Diaz Basante','carlodiaz@umariana.edu.co','12345678');