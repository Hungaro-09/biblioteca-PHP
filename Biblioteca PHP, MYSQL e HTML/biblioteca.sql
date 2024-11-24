
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE DATABASE biblioteca;



CREATE TABLE livro(
id_livro int(4) AUTO_INCREMENT,nome_livro varchar(30) NOT NULL,ISBN varchar(80),quantidade int(3),
 PRIMARY KEY (id_livro)
);

CREATE TABLE membros(
id_membro int(4) AUTO_INCREMENT,nome varchar(30) NOT NULL,telefone varchar(80),
 PRIMARY KEY (id_livro)
);

INSERT INTO `livro` (`id`, `nome_livro`, `ISBN`, `quantidade`) VALUES
(2, 'Livro1', '000000', '0000000', '0000000'),

