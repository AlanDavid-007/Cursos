CREATE DATABASE `cursos`;



CREATE TABLE `categorias`(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `descricao` text,
  `ordem` INT DEFAULT NULL,
  `status` enum('s','n') DEFAULT NULL,
    PRIMARY KEY (`id`)
);


CREATE TABLE `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `data` TIMESTAMP NULL DEFAULT NULL,
  `palavra_chave`VARCHAR(30)DEFAULT NULL,
  `valor` FLOAT (50) DEFAULT NULL,
  `professor` INT DEFAULT NULL,
  `categoria` INT DEFAULT NULL,
  `ordem` INT DEFAULT NULL,
  `status` enum('s','n') DEFAULT NULL,
  PRIMARY KEY (`id`)
);

ALTER TABLE cursos ADD CONSTRAINT id_professor FOREIGN KEY(professor) REFERENCES professores (id);
ALTER TABLE cursos ADD CONSTRAINT id_categorias FOREIGN KEY(categoria) REFERENCES categorias (id);

CREATE TABLE `professores`(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR (45) NOT NULL,
  `sobrenome` VARCHAR (45) NOT NULL,
  `cpf` BIGINT (15) NOT NULL UNIQUE,
  `formacao` VARCHAR (45) NOT NULL,
  `telefone` BIGINT (15) NOT NULL UNIQUE,
  `endereco` VARCHAR (100) NOT NULL,
  `email` VARCHAR (100) NOT NULL,
  `ordem` INT DEFAULT NULL,
  `status` enum('s','n') DEFAULT NULL,
    PRIMARY KEY (`id`)
);

