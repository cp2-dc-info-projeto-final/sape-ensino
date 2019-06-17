use Cadastro;

CREATE TABLE aluno
(
nome VARCHAR (70),
matricula VARCHAR (9) NOT NULL,
email VARCHAR (50),
senha VARCHAR (30),
PRIMARY KEY (matricula)
);

CREATE TABLE docente
(
nome VARCHAR (70),
matricula INT NOT NULL,
email VARCHAR (50),
senha VARCHAR (30),
cargo VARCHAR (20),
PRIMARY KEY (matricula)
);