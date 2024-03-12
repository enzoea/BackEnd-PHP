CREATE DATABASE if not exists users;
USE users;
CREATE TABLE if not exists usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    email VARCHAR(50)
);

INSERT INTO usuarios (nome, email) VALUES
('Enzo', 'enzo@enzo.com'),
('Valentina', 'valentina@valentina.com');