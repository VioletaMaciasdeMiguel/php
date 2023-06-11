CREATE TABLE `usuario` (
    `id` INT(10) AUTO_INCREMENT PRIMARY KEY,
    `nombre` VARCHAR(20),
    `apellido` VARCHAR(20),
    `email` VARCHAR(20));
    
INSERT INTO usuario (nombre, apellido, email, id)
VALUES ('Antonio', 'Garcia', 'antoniogarcia@gmail.com', '1');
