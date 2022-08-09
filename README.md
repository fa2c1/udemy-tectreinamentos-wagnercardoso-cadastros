# Exemplo de codigo utilizando Xampp como Servidor PHP

# Para funcionar é necessario criar a seguinte base de dados no phpmyadmim

CREATE DATABASE cadastros;
USE cadastros;

CREATE TABLE `cadastros`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(150) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`id`));
