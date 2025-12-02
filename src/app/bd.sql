Create DATABASE bimmer;
use bimmer;

CREATE TABLE carros(
    id int not null primary key AUTO_INCREMENT,
	image varchar(255) not null,
    modelo varchar(255),
    preco float not null,
    ano int not null,
    detalhes varchar(255)
);

CREATE TABLE usuario(
 	id int not null PRIMARY KEY AUTO_INCREMENT,
	email varchar(255) not null,
    senha varchar(100) not null
);

insert into usuario(id, email, senha) VALUES (null,'admin@gmail.com','12345');

insert into carros (id,image, modelo, preco, ano, detalhes) values
(null,'/src/public/assets/img/bmw.jpg', 'BMW M4 Competition', '950.000', 2024, 'Motor TwinPower Turbo de 510cv. Cor Vermelho Vibrante, com teto em fibra de carbono.'),
(null,'/src/public/assets/img/mustang.png', 'Mustang Hardtop', '280.000', 1967, 'Clássico americano restaurado com motor V8.'),
(null,'/src/public/assets/img/corvett.jpg', 'Corvette Stingray C7', '750.000', 2019, 'Motor V8 6.2L. Visual agressivo em Preto Sólido.');