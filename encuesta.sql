CREATE DATABASE IF NOT EXISTS EncuestaDB;

USE EncuestaDB;
select * from RespuestasEncuesta;

CREATE TABLE IF NOT EXISTS RespuestasEncuesta (respuestasencuesta
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    calificacion VARCHAR(20) NOT NULL,
    recomendacion VARCHAR(3) NOT NULL,
    comentarios TEXT,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
