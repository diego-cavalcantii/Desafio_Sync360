drop table pessoa cascade constraints;

create table pessoa(id number(2) primary key,
nome varchar(30),
idade number(2),
rua varchar(50),
numero number(4),
complemento varchar(30),
estado varchar(20),
bairro varchar(20),
biografia varchar(255));

insert into pessoa values(1,'Diego Silva Cavalcanti',21,'Rua Francisco Luiz de Souza Junior',398,'APTO 44B','SP','Agua Branca','Teste');