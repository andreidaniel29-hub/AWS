CREATE DATABASE IF NOT EXISTS usermanager CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE usermanager;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    edad INT NOT NULL,
    rol VARCHAR(20) NOT NULL
);

INSERT INTO usuarios (nombre, email, edad, rol) VALUES
('Juan Pérez', 'juan@example.com', 30, 'admin'),
('Ana López', 'ana@example.com', 25, 'editor'),
('Carlos García', 'carlos@example.com', 40, 'usuario'),
('María Fernández', 'maria@example.com', 28, 'usuario'),
('Pedro Sánchez', 'pedro@example.com', 35, 'editor');
