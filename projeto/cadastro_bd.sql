use cadastro;


DROP TABLE IF EXISTS login;
CREATE TABLE login
(
    id int not null AUTO_INCREMENT,
    nome VARCHAR (70),
    matricula VARCHAR(11) NOT NULL UNIQUE,
    email VARCHAR (50),
    senha VARCHAR (90),
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