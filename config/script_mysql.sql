CREATE DATABASE system_cms;

use system_cms;

CREATE TABLE tb_usuario (
	id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nm_usuario VARCHAR(50) NOT NULL,
	ds_senha VARCHAR(200) NOT NULL
);

CREATE TABLE tb_post (
	id_post INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nm_titulo VARCHAR(50) NOT NULL,
	ds_contexto TEXT,
	ds_path VARCHAR(100) NOT NULL,
	id_usuario integer	
);
