create database tatuagem;

use tatuagem;

create table usuario (
    id int primary key auto_increment,
    nome varchar(250) not null,
    senha varchar(250) not null,
    usuario varchar(250) not null,
    email varchar(250) not null unique,
    tatuador boolean not null,
    telefone varchar(250),
    instagram varchar(255),
    caracteristicas varchar(250)
    );
    