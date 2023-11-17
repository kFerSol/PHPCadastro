CREATE DATABASE meubanco;
USE meubanco;

CREATE TABLE tb_livro(
	id_livro int PRIMARY KEY AUTO_INCREMENT,
	nm_livro varchar(45),
	dt_ano DATE,
	dt_cadastro DATE,
	qt_exemplares int(9)
);