# CrudPHP
Sistema em PHP - CRUD

Criar um banco de dados conforme os comandos abaixo:

CREATE DATABASE crud;

CREATE TABLE tb_usuario (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  nome varchar(120) CHARACTER SET utf8 NOT NULL,
  email varchar(120) CHARACTER SET utf8 NOT NULL,
  senha varchar(120) CHARACTER SET utf8 NOT NULL
);

Se necessaário pode ser feito alterações no arquivo DB.php para conectar ao banco de dados.
