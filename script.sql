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
    trailer VARCHAR(1000) NOT NULL,
    director VARCHAR(1000) NOT NULL,
    sinopsis VARCHAR(1000) NOT NULL,
    ruta_img VARCHAR(1000) NOT NULL,
    genero INT NOT NULL,
    tipo INT NOT NULL,
    pais INT NOT NULL,
    plataforma INT NOT NULL,
    CONSTRAINT tf FOREIGN KEY (tipo) REFERENCES tipos (id),
    CONSTRAINT gf FOREIGN KEY (genero) REFERENCES generos (id),
    CONSTRAINT pf FOREIGN KEY (pais) REFERENCES paises (id),
    CONSTRAINT plf FOREIGN KEY (plataforma) REFERENCES plataformas (id)
);

INSERT INTO tipos (nombre) VALUES ('Pelicula'),('Serie'),('Telenovela'),('Documental');
INSERT INTO generos (nombre) VALUES ('Accion'),('Biografia'),('Crimen'),('Familiar'),('Horror'),
                                    ('Romance'),('Deportes'),('Aventuras'),('Accion'),
                                    ('Comedia'),('Fantasia'),('Thiller'),('Musicales'),('Sicologicas');
INSERT INTO plataformas (nombre) VALUES ('Netflix'),('Disney+'),('Amazon Prime'),('DirecTV GO'),('HBO max'),('Hulu');
INSERT INTO paises (nombre) VALUES ('E.E. U.U.'),('India'),('China'),('Reino Unido'),('España'),('Colombia');

INSERT INTO usuarios (nombres, apellidos, correo, password)
VALUES ('Carlos Ernesto','Diaz Basante','carlodiaz@umariana.edu.co','25d55ad283aa400af464c76d713c07ad');

INSERT INTO cinema.films (sinopsis, director, nombre, id, fecha, trailer, ruta_img, genero, tipo, pais, plataforma) VALUES ('Kenso Tenma, un reconocido medico cirujano de origen japonés que vive en Alemania con una gran reputación, está a punto de experimentar una historia que le cambiará la vida: en el año 1986 en Dusseldorf mientras se preparaba para operar a una personalidad que llegaba en estado crítico, una pareja de niños también llegaba al hospital; la niña se encontraba en estado de shock y el niño estaba grave con una herida de bala en la cabeza. Debatiéndose entre lo más ético y en la moral, Tenma accede a operar al niño yendo en contra de sus superiores lo que le acarrearía problemas ya que con la muerte del paciente anterior, los directivos del hospital se encargarían de arruinar su reputación. Sin embargo las cosas empeoran cuando los directivos son asesinados en extrañas circunstancias y Tenma siendo el más favorecido por estos crímenes, es señalado de ser el sospechoso. Han pasado 9 años y un fantasma de su pasado ha regresado.', 'Naoki Urasawa', 'Monster', 1, '2016-01-25', 'https://www.youtube.com/embed/9aS-EgdAq6U', 'https://laverdadnoticias.com/__export/1621527835188/sites/laverdad/img/2021/05/20/monster_anime_guia_completa.jpg_830901119.jpg', 14, 2, 1, 6);
INSERT INTO cinema.films (sinopsis, director, nombre, id, fecha, trailer, ruta_img, genero, tipo, pais, plataforma) VALUES ('Spider-Man: No Way Home es una próxima película estadounidense de superhéroes basada en el personaje de Marvel Comics, Spider-Man, coproducida por Columbia Pictures y Marvel Studios, y distribuida por Sony Pictures Releasing.', 'Jon Watts', 'El Hombre Araña No Way Home', 2, '2021-11-20', 'https://www.youtube.com/embed/CKc794FewWg', 'https://www.egames.news/__export/1629747492246/sites/debate/img/2021/08/23/spider-man-3.jpg_976912859.jpg', 1, 1, 1, 2);
INSERT INTO cinema.films (sinopsis, director, nombre, id, fecha, trailer, ruta_img, genero, tipo, pais, plataforma) VALUES ('Kyle Reese regresa en el tiempo para salvar a Sarah Connor y descubre que ella ha sido criada como una guerrera por un guardián Terminator en una línea temporal alterna.', 'Alan Taylor', 'Terminator 5', 3, '2015-02-15', 'https://www.youtube.com/embed/jNU_jrPxs-0', 'https://pasionporelcine.net/wp-content/uploads/2021/03/Sarah-Connor-y-el-abuelo-en-Terminator-5-scaled.jpg', 1, 1, 1, 4);
INSERT INTO cinema.films (sinopsis, director, nombre, id, fecha, trailer, ruta_img, genero, tipo, pais, plataforma) VALUES ('Una banda organizada de ladrones se propone cometer el atraco del siglo en la Fábrica Nacional de Moneda y Timbre. Cinco meses de preparación quedarán reducidos a once días para poder llevar a cabo con éxito el gran golpe.', 'Álex Pina', 'La casa de  papel', 4, '2017-04-12', 'https://www.youtube.com/embed/6UMmM_XmFVg', 'https://cr00.epimg.net/radio/imagenes/2019/06/03/entretenimiento/1559568354_988410_1559568554_noticia_normal.jpg', 1, 2, 5, 1);
INSERT INTO cinema.films (sinopsis, director, nombre, id, fecha, trailer, ruta_img, genero, tipo, pais, plataforma) VALUES ('Vida sexual de adolescentes y las cosas que adultos no les cuentan.
Otis siempre tiene una respuesta respecto al sexo. Otis se une a su amiga Maeve para abrir una clínica de terapia sexual en la escuela.', 'Laurie Nunn', 'Sex Education', 5, '2018-12-02', 'https://www.youtube.com/embed/pC5aQdUNG6U', 'https://i2.wp.com/estotambienes.com/wp-content/uploads/2019/05/sex-education.jpg', 10, 2, 4, 1);
INSERT INTO cinema.films (sinopsis, director, nombre, id, fecha, trailer, ruta_img, genero, tipo, pais, plataforma) VALUES ('Las guerras mundiales vividas desde los personajes mas emblematicos.
Un programa que detalla los eventos durante tres décadas en donde las dos guerras mundiales causaron terribles muertes y devastación; las batallas son representadas a través de los ojos de hombres poderosos como Roosevelt, Hitler y Mussolini.', 'History Channel', 'Guerras Mundiales', 6, '2018-08-08', 'https://www.youtube.com/embed/03OWwp2Yom4?start=100', 'https://mott.pe/noticias/wp-content/uploads/2015/12/history-perfumes.jpg', 1, 4, 2, 4);