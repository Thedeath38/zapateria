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
 
 
INSERT INTO  `mvc`.`destinatario` VALUES (NULL ,  'hombre');
INSERT INTO `mvc`.`destinatario` VALUES (NULL, 'mujer');
INSERT INTO `mvc`.`destinatario` VALUES (NULL, 'niño');
INSERT INTO `mvc`.`destinatario` VALUES (NULL, 'niña');
INSERT INTO `mvc`.`destinatario` VALUES (NULL, 'unisex');


INSERT INTO `mvc`.`zapato`  
VALUES (NULL, 'Colors of California', 'Lara 2', '1', '2', '45', 'Plateado', 'Textil', 'Textil', 'Textil', 'Textil', '36',
'40', 'Para dar buenos alpargatazos a tus niños', '1');
INSERT INTO `mvc`.`zapato`  
VALUES (NULL, 'Toms', 'Diego', '1', '1', '64.99', 'Marron', 'Textil', 'Textil', 'Textil', 'Sintetico', '38', '45',
'Alpargatas de color marrón perfectas para andar por casa', '1');
INSERT INTO `mvc`.`zapato`  
VALUES (NULL, 'Toms', 'Alpargata E', '1', '3', '38', 'Plateado', 'Textil', 'Textil', 'Textil', 'Textil', '16', '26',
'Alpargata de color plateado confortable', '1');
INSERT INTO `mvc`.`zapato`  
VALUES (NULL, 'Sketchers', 'Breathe-Easy Calmly', '2', '2', '29.90', 'Negro', 'Textil', 'Textil', 'Textil', 'Sintetico',
'35', '40', 'Bailarina de color negro de material textil muy comodas', '1');
INSERT INTO `mvc`.`zapato`  
VALUES (NULL, 'Sketchers', 'Bikers Free Thinker', '2', '2', '35.90', 'Negro', 'Textil', 'Textil', 'Textil', 'Sintetico',
'35', '40', 'Bailarinas negras Sketchers faciles de llevar en el bolso', '1');
INSERT INTO `mvc`.`zapato`  
VALUES (NULL, 'Bopy', 'Savenay', '2', '4', '40.90', 'Azul', 'Cuero', 'Cuero', 'Cuero', 'Cuero', '15', '26',
'Bailarinas ideales para tus niñas', '1');
INSERT INTO `mvc`.`zapato`  
VALUES (NULL, 'Pataguas', 'Myne', '3', '1', '125.30', 'Negro', 'Cuero-textil', 'Cuero-textil', 'Cuero-textil', 'Sintetico',
'35', '40', 'Botas altas y caras', '1');
INSERT INTO `mvc`.`zapato`  
VALUES (NULL, 'Base', 'London Metal', '3', '1', '87', 'Marron', 'Caucho', 'Caucho', 'Textil', 'Cuero', '37', '45',
'Botas altas de caucho', '1');
INSERT INTO `mvc`.`zapato`  
VALUES (NULL, 'UGG', 'Bailey Bow II K', '3', '4', '136', 'Marron', 'Nubuck', 'Nubuck', 'Piel', 'Sintetico', '15', '28',
'Botas para niñas de piel autentica', '1');


