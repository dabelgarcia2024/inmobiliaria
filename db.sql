CREATE DATABASE inmobiliaria;

\c inmobiliaria

CREATE TABLE propiedades (
    id SERIAL PRIMARY KEY,
    titulo VARCHAR(100),
    descripcion TEXT,
    precio DECIMAL,
    direccion VARCHAR(255),
    fecha_publicacion DATE
);
