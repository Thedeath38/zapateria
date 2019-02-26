-- create database simple
--   default character set utf8
--   collate utf8_general_ci;
  
-- create user simple@localhost
--   identified by 'simple';

-- grant all
--   on simple.*
--   to simple@localhost;

-- flush privileges;

-- create table simple.usuario (
--     idUsuario bigint not null auto_increment primary key,
--     login varchar(100) not null,
--     clave varchar(255) not null,
--     nombre varchar(30) not null,
--     apellidos varchar (60),
--     correo varchar(60) not null unique,
--     direccion varchar (80),
--     fechaAlta date not null,
--     activo tinyint not null,
--     admin tinyint not null
-- ) engine = innodb
--   character set utf8
--   collate utf8_general_ci;
  
-- create table simple.pedido (
--     idPedido bigint not null auto_increment primary key,
--     fecha date not null,
--     numTarjeta int not null,
--     fechaVal date not null,
--     cvv int not null,
--     check(cvv=3 and numTarjeta=16), 
--     usuario bigint not null,
--     foreign key(usuario) references simple.usuario(idUsuario)
-- ) engine = innodb
--   character set utf8
--   collate utf8_general_ci;
  
  
-- create table simple.destinatario (
--     idDesti bigint not null auto_increment primary key,
    
--     nombre varchar(20) not null
    
-- ) engine = innodb
--   character set utf8
--   collate utf8_general_ci;
  
-- create table simple.categoria (
--     idCate bigint not null auto_increment primary key,
    
--     nombre varchar(20) not null
    
-- ) engine = innodb
--   character set utf8
--   collate utf8_general_ci;
  
-- create table simple.zapato (
--     idZapato bigint not null auto_increment primary key,
--     marca varchar(30)  not null,
--     modelo varchar(30) not null,
--     categoria bigint  not null,
--     destinatario bigint not null,
--     precio decimal(5,2) not null,
--     color varchar(30) not null,
--     material varchar(20) not null,
--     cubierta varchar(20) not null,
--     materialForro varchar(20) not null,
--     materialSuela varchar(20) not null,
--     numDesde int not null,
--     numhasta int not null,
--     descripcion varchar(200) not null,
--     disponible tinyint not null,
--     foreign key(categoria) references simple.categoria(idCate),
--     foreign key(destinatario) references simple.destinatario(idDesti)
-- ) engine = innodb
--   character set utf8
--   collate utf8_general_ci;
  
-- create table simple.detallePedido (
--     idDetaPedido bigint not null auto_increment primary key,
--     numero int not null,
--     cantidad int not null,
--     precioUnidad decimal(5,2) not null,
--     pedido bigint not null,
--     zapato bigint not null,
--     foreign key(pedido) references simple.pedido(idPedido),
--     foreign key(zapato) references simple.zapato(idZapato)
-- ) engine = innodb
--   character set utf8
--   collate utf8_general_ci;
  
  
  
INSERT INTO `mvc`.`categoria` VALUES (NULL, 'alpargata');
INSERT INTO `mvc`.`categoria` VALUES (NULL, 'bailarinas');
INSERT INTO `mvc`.`categoria` VALUES (NULL, 'botas');
INSERT INTO `mvc`.`categoria` VALUES (NULL, 'botines');
INSERT INTO `mvc`.`categoria` VALUES (NULL, 'chanclas');
INSERT INTO `mvc`.`categoria` VALUES (NULL, 'deportivas');
INSERT INTO `mvc`.`categoria` VALUES (NULL, 'nauticos');
INSERT INTO `mvc`.`categoria` VALUES (NULL, 'salon');
INSERT INTO `mvc`.`categoria` VALUES (NULL, 'sandalias');
INSERT INTO `mvc`.`categoria` VALUES (NULL, 'zapatillas');
INSERT INTO `mvc`.`categoria` VALUES (NULL, 'zapatos vestir');
INSERT INTO `mvc`.`categoria` VALUES (NULL, 'zapatos traje');
 
 
INSERT INTO  `mvc`.`destinatario` VALUES (NULL, 'hombre');
INSERT INTO `mvc`.`destinatario` VALUES (NULL, 'mujer');
INSERT INTO `mvc`.`destinatario` VALUES (NULL, 'niño');
INSERT INTO `mvc`.`destinatario` VALUES (NULL, 'niña');
INSERT INTO `mvc`.`destinatario` VALUES (NULL, 'unisex');


INSERT INTO `mvc`.`zapato`  
VALUES (NULL, '1', '2','Colors of California', 'Lara 2', '45', 'Plateado', 'Textil', 'Textil', 'Textil', '36',
'40', 'Para dar buenos alpargatazos a tus niños', '1');
INSERT INTO `mvc`.`zapato`  
VALUES (NULL, '1', '1','Toms', 'Diego', '64.99', 'Marron', 'Textil', 'Textil', 'Sintetico', '38', '45',
'Alpargatas de color marrón perfectas para andar por casa', '1');
INSERT INTO `mvc`.`zapato`  
VALUES (NULL, '1', '3','Toms', 'Alpargata E', '38', 'Plateado', 'Textil', 'Textil', 'Textil', '16', '26',
'Alpargata de color plateado confortable', '1');
INSERT INTO `mvc`.`zapato`  
VALUES (NULL, '2', '2','Sketchers', 'Breathe-Easy Calmly', '29.90', 'Negro', 'Textil', 'Textil', 'Sintetico',
'35', '40', 'Bailarina de color negro de material textil muy comodas', '1');
INSERT INTO `mvc`.`zapato`  
VALUES (NULL, '2', '2','Sketchers', 'Bikers Free Thinker', '35.90', 'Negro', 'Textil', 'Textil', 'Sintetico',
'35', '40', 'Bailarinas negras Sketchers faciles de llevar en el bolso', '1');
INSERT INTO `mvc`.`zapato`  
VALUES (NULL, '2', '4', 'Bopy', 'Savenay',  '40.90', 'Azul', 'Cuero', 'Cuero', 'Cuero', '15', '26',
'Bailarinas ideales para tus niñas', '1');
INSERT INTO `mvc`.`zapato`  
VALUES (NULL, '3', '2','Pataguas', 'Myne', '125.30', 'Negro', 'Cuero-textil', 'Cuero-textil', 'Sintetico',
'35', '40', 'Botas altas y caras', '1');
INSERT INTO `mvc`.`zapato`  
VALUES (NULL, '3', '1','Base', 'London Metal', '87', 'Marron', 'Caucho', 'Textil', 'Cuero', '37', '45',
'Botas altas de caucho', '1');
INSERT INTO `mvc`.`zapato`  
VALUES (NULL, '3', '4', 'UGG', 'Bailey Bow II K', '136', 'Marron', 'Nubuck', 'Piel', 'Sintetico', '15', '28',
'Botas para niñas de piel autentica', '1');
INSERT INTO `mvc`.`zapato`
VALUES (NULL, '4', '1', 'Clarks', 'Clarkdale Bud', '98', 'Negro', 'Cuero', 'Cuero', 'Cuero', '35', '45',
'Zapatillas Clarks de cuero, comodas e ideales para salir', '1');



