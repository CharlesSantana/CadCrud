
CREATE DATABASE cadastro;
USE cadastro;

CREATE TABLE tab_usuarios(
codigo int(4) AUTO_INCREMENT,
nome varchar(100) NOT NULL,
usuario varchar(30) NOT NULL,
senha varchar(10) NOT NULL,
PRIMARY KEY (codigo)
);

INSERT INTO tab_usuarios (codigo, nome, usuario, senha) VALUES (null, "administrador", "admin", 1723128);
INSERT INTO tab_usuarios (codigo, nome, usuario, senha) VALUES (null, "administrador", "charles", 1723128);


CREATE TABLE tab_cadgeral(
codigo int(4) AUTO_INCREMENT,

nome varchar(50) NOT NULL,
sobrenome varchar(30) NOT NULL,
cpf varchar(10) NOT NULL,
rg varchar(10) NOT NULL,
fone varchar(10) NOT NULL,
email varchar(30) NOT NULL,
nomecontato varchar(10) NOT NULL,
fonecontato varchar(10) NOT NULL,
endereco varchar(10) NOT NULL,
bairro varchar(10) NOT NULL,
cidade varchar(10) NOT NULL,
estado varchar(10) NOT NULL,
trabalho varchar(10) NOT NULL,
fonetrabalho varchar(10) NOT NULL,
esposa varchar(10) NOT NULL,
pai varchar(10) NOT NULL,
mae varchar(10) NOT NULL,
qtdfilhos varchar(10) NOT NULL,
about varchar(10) NOT NULL,
favcidade varchar(10) NOT NULL,
dtcadastro varchar(10) NOT NULL,
PRIMARY KEY (codigo)
)ENGINE = innodb;







