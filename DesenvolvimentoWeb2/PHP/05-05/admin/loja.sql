CREATE DATABASE loja;

USE loja;

CREATE TABLE produtos (
	id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    descricao VARCHAR(255),
    preco DECIMAL(7, 2) NOT NULL,
    promocao BOOLEAN DEFAULT FALSE,
    lancamento BOOLEAN DEFAULT FALSE,
    PRIMARY KEY (id)
);

INSERT INTO produtos (nome, descricao, preco)
VALUES ('Mouse com fio', 'Mouse USB genérico', 29.9);
INSERT INTO produtos (nome, descricao, preco)
VALUES ('Teclado mecânico', 'Conexão USB', 195);
INSERT INTO produtos (nome, descricao, preco)
VALUES ('Notebook Lenovo', 'Intel i5 - 8 GB RAM - 512 GB SSD', 2499.5);
INSERT INTO produtos (nome, descricao, preco)
VALUES ('Impressora HP', 'Jato de tinta', 289.7);
INSERT INTO produtos (nome, descricao, preco)
VALUES ('Tablet Samsung', 'Android 16 GB', 1450);

CREATE USER 'php'@'localhost' IDENTIFIED BY 'senha123';
GRANT ALL PRIVILEGES ON loja.* TO 'php'@'localhost';
