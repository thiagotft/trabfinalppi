CREATE TABLE endereco
(
    id int PRIMARY KEY auto_increment,
    cep varchar(15) UNIQUE,
    logradouro varchar(50),
    cidade varchar(30),
    estado varchar(30)

) ENGINE=InnoDB;

CREATE TABLE pessoa
(
   codigo int PRIMARY KEY auto_increment,
   nome varchar(50),
   sexo varchar(14),
   email varchar(50) UNIQUE,
   telefone varchar(15),
   cep varchar(15),
   logradouro varchar(30),
   cidade varchar(30),
   estado varchar(30)

) ENGINE=InnoDB;

CREATE TABLE funcionario
(
   datacontrato date,
   salario int,
   senhahash varchar(300),
   codigo int PRIMARY KEY,
   FOREIGN KEY (codigo) REFERENCES pessoa(codigo)

) ENGINE=InnoDB;

CREATE TABLE paciente 
(
    peso decimal(5,2) ,
    altura decimal(3,2),
    tiposanguineo varchar(1),
    codigo int PRIMARY KEY,
    FOREIGN KEY (codigo) REFERENCES pessoa(codigo) 

) ENGINE=InnoDB;


CREATE TABLE medico
(
    especialidade varchar(30),
    crm varchar(10),
    codigo int PRIMARY KEY,
    FOREIGN KEY (codigo) REFERENCES funcionario(codigo)

) ENGINE=InnoDB;

CREATE TABLE agenda
(
    codigo int PRIMARY KEY auto_increment,
    data_ag date,
    horario time,
    nome varchar(50),
    sexo varchar(14),
    email varchar(50),
    codigomedico int,
    FOREIGN KEY (codigomedico) REFERENCES medico(codigo)

) ENGINE=InnoDB;