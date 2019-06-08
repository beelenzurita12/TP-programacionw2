drop database if exists marketplace;
create database marketplace;
use marketplace;

create table usuario (
    id int(11) auto_increment,
    tipoUsuario varchar(15) not null,
    nombre varchar(15) not null,
    apellido varchar(15) not null,
    dni int(10) not null,
    calle varchar(15) not null,
    nroCalle int(15) not null,
    localidad varchar(20) not null,
    telefono varchar(15) not null,
    cuil varchar(15) not null,
    email varchar(50) not null,
    password varchar(13) not null,
    passwordRepetida varchar(13) not null,
    primary key(id)
);

create table producto (
	id int auto_increment,
	nombre varchar(50) not null,
	descripcion text not null,
	precio float not null,
	cantidad int not null,
	categoria varchar(15) not null,
	fecha_publicacion datetime not null,
	duracion_publicacion int,
	primary key(id)
);

drop table imagen;

create table imagen (
	id int auto_increment,
	idProducto int not null,
	imagen blob not null,
	primary key(id),
	foreign key(idProducto) references producto(id)
);

insert into usuario (tipoUsuario, nombre, apellido, dni, calle, nroCalle, localidad, telefono, cuil, email, password, passwordRepetida) values 
("comun", "Belen", "Zurita", 38709826, "Triunvirato", "3553", "Villa Luzuriaga", "4696-2327", "27-38709654-2", "belenz@gmail.com", "12345678", "12345678");