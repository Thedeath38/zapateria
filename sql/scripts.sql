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
    precio decimal(5,2),
    check(cvv=3 and numTarjeta=16), 
    usuario bigint not null,
    foreign key(usuario) references simple.usuario(id)
) engine = innodb
  character set utf8
  collate utf8_general_ci;