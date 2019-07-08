DROP DATABASE IF EXISTS sapeensino;
CREATE DATABASE sapeensino CHARACTER SET utf8 COLLATE utf8_general_ci;

use sapeensino;


DROP TABLE IF EXISTS login;
CREATE TABLE login
(
    id int not null AUTO_INCREMENT,
    nome VARCHAR (70),
    matricula VARCHAR(11) NOT NULL UNIQUE,
    email VARCHAR (50),
    senha VARCHAR (255),
    cargo VARCHAR (20),
    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS aluno;
CREATE TABLE aluno
(
    id int not null,
    PRIMARY KEY (id),
    FOREIGN KEY (id) references login (id)
);

DROP TABLE IF EXISTS docente;
CREATE TABLE docente
(
    id int not null,
    PRIMARY KEY (id),
    FOREIGN KEY (id) references login (id) 
);

DROP TABLE IF EXISTS escolas;
CREATE TABLE escolas
(
    id int not null AUTO_INCREMENT,
    nome varchar(100) not null, 
    PRIMARY KEY(id)
);

DROP TABLE IF EXISTS turmas;
CREATE TABLE turmas
(
    id int not null AUTO_INCREMENT,
    nome varchar(100) not null unique,
    escola_id int not null,
    PRIMARY KEY(id),
    FOREIGN KEY(escola_id) references escolas(id)
);

DROP TABLE IF EXISTS aluno_turma;
CREATE TABLE aluno_turma
(
    id_aluno int not null,
    id_turma int not null,
    PRIMARY KEY(id_aluno, id_turma),
    FOREIGN KEY(id_aluno) references aluno(id),
    FOREIGN KEY(id_turma) references turmas(id)
);

DROP TABLE IF EXISTS escola_aluno;
CREATE TABLE escola_aluno
(
    id_escola int not null,
    id_aluno int not null,
    PRIMARY KEY(id_escola, id_aluno),
    FOREIGN KEY(id_escola) references escolas(id),
    FOREIGN KEY(id_aluno) references aluno(id)
    
);