create database simple
  default character set utf8
  collate utf8_general_ci;
  
create user simple@localhost
  identified by 'simple';

grant all
  on simple.*
  to simple@localhost;

flush privileges;

create table simple.usuario (
    idUsuario bigint not null auto_increment primary key,
    correo varchar(60) not null unique,
    clave varchar(255) not null
) engine = innodb
  character set utf8
  collate utf8_general_ci;
  
create table simple.pedido (
    idPedido bigint not null auto_increment primary key,
    fecha date not null,
    numTarjeta int not null,
    fechaVal date not null,
    cvv int not null,
    check(cvv=3 and numTarjeta=16), 
    usuario bigint not null,
    foreign key(usuario) references simple.usuario(idUsuario)
) engine = innodb
  character set utf8
  collate utf8_general_ci;
  
  
create table simple.destinatario (
    idDesti bigint not null auto_increment primary key,
    
    nombre varchar(20) not null
    
) engine = innodb
  character set utf8
  collate utf8_general_ci;
  
create table simple.categoria (
    idCate bigint not null auto_increment primary key,
    
    nombre varchar(20) not null
    
) engine = innodb
  character set utf8
  collate utf8_general_ci;
  
create table simple.zapato (
    idZapato bigint not null auto_increment primary key,
    marca varchar(30)  not null,
    modelo varchar(30) not null,
    categoria bigint  not null,
    destinatario bigint not null,
    precio decimal(5,2) not null,
    color char(6) not null,
    material varchar(20) not null,
    cubierta varchar(20) not null,
    materialForro varchar(20) not null,
    materialSuela varchar(20) not null,
    numDesde int not null,
    numhasta int not null,
    descripcion varchar(200) not null,
    disponible bit not null,
    foreign key(categoria) references simple.categoria(idCate),
    foreign key(destinatario) references simple.destinatario(idDesti)
) engine = innodb
  character set utf8
  collate utf8_general_ci;
  
create table simple.detallePedido (
    idDetaPedido bigint not null auto_increment primary key,
    numero int not null,
    cantidad int not null,
    precioUnidad decimal(5,2) not null,
    pedido bigint not null,
    zapato bigint not null,
    foreign key(pedido) references simple.pedido(idPedido),
    foreign key(zapato) references simple.zapato(idZapato)
) engine = innodb
  character set utf8
  collate utf8_general_ci;
  
  
  
 INSERT INTO `simple`.`categoria` (`idCate`, `nombre`) VALUES (NULL, 'Alpargata');
 INSERT INTO `simple`.`categoria` (`idCate`, `nombre`) VALUES (NULL, 'Bailarinas');
 INSERT INTO `simple`.`categoria` (`idCate`, `nombre`) VALUES (NULL, 'Botas');
 INSERT INTO `simple`.`categoria` (`idCate`, `nombre`) VALUES (NULL, 'Botines');
 INSERT INTO `simple`.`categoria` (`idCate`, `nombre`) VALUES (NULL, 'Chanclas');
 INSERT INTO `simple`.`categoria` (`idCate`, `nombre`) VALUES (NULL, 'Deportivas');
 INSERT INTO `simple`.`categoria` (`idCate`, `nombre`) VALUES (NULL, 'Nauticos');
 INSERT INTO `simple`.`categoria` (`idCate`, `nombre`) VALUES (NULL, 'salon');
 INSERT INTO `simple`.`categoria` (`idCate`, `nombre`) VALUES (NULL, 'sandalias');
 INSERT INTO `simple`.`categoria` (`idCate`, `nombre`) VALUES (NULL, 'zapatillas');
 INSERT INTO `simple`.`categoria` (`idCate`, `nombre`) VALUES (NULL, 'zapatos vestir');
 INSERT INTO `simple`.`categoria` (`idCate`, `nombre`) VALUES (NULL, 'zapatos traje');
 
 
INSERT INTO  `simple`.`destinatario` (`idDesti` ,`nombre`) VALUES (NULL ,  'hombre');
INSERT INTO `simple`.`destinatario` (`idDesti`, `nombre`) VALUES (NULL, 'mujer');
INSERT INTO `simple`.`destinatario` (`idDesti`, `nombre`) VALUES (NULL, 'niño');
INSERT INTO `simple`.`destinatario` (`idDesti`, `nombre`) VALUES (NULL, 'niña');
INSERT INTO `simple`.`destinatario` (`idDesti`, `nombre`) VALUES (NULL, 'unisex');