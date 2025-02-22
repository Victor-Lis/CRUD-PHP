CREATE DATABASE IF NOT EXISTS colaboradores;
USE colaboradores;

Create Table colaboradores (
	id int NOT NULL AUTO_INCREMENT,
    nome varchar(255),
	sobrenome varchar(255),
    email varchar(255),
    formacao varchar(255),
    descricao varchar(255),
    PRIMARY KEY (id)
);