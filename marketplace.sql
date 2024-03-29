drop database if exists marketplace;
create database marketplace;
use marketplace;

create table usuario (
    idUsuario int(11) auto_increment,
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
    primary key(idUsuario)
);

create table producto (
	idProducto int auto_increment,
    idUsuario int not null,
	nombre varchar(50) not null,
	descripcion text not null,
	precio float not null,
	cantidad int not null,
	categoria varchar(15) not null,
	fecha_publicacion datetime not null,
	duracion_publicacion int,
    eliminado boolean default false,
	primary key(idProducto),
    foreign key(idUsuario) references usuario(idUsuario)
);

create table imagen (
	idImagen int auto_increment,
	idProducto int not null,
	imagen varchar(100) not null,
	primary key(idImagen),
	foreign key(idProducto) references producto(idProducto) ON DELETE CASCADE
);

create table carrito (
    id int auto_increment,
    idProducto int not null,
    fechaInsercion datetime not null,
    idUsuario int not null,
    foreign key(idProducto) references producto(idProducto) ON DELETE CASCADE,
    foreign key(idUsuario) references usuario(idUsuario),
    primary key(id)
);

create table comentario (
    idComentario int auto_increment,
    idProducto int not null,
    idUsuario int not null,
    comentario varchar(500) not null,
    fechaPublicacion datetime not null,
    primary key(idComentario),
    foreign key(idProducto) references producto(idProducto) ON DELETE CASCADE,
    foreign key(idUsuario) references usuario(idUsuario)
);

create table compra (
    idCompra int auto_increment,
    idProducto int not null,
    cantidad int not null,
    idUsuario int not null,
    fecha datetime not null,
    formaDeEntrega varchar(30),
    estado varchar(13) not null default "pendiente",
    foreign key(idProducto) references producto(idProducto) ON DELETE CASCADE,
    foreign key(idUsuario) references usuario(idUsuario),
    primary key(idCompra)
);

create table mensajeCompra (
    idMensaje int auto_increment,
    idCompra int not null,
    mensaje varchar(300) not null,
    idEmisor int not null,
    idReceptor int not null,
    fechaMensaje datetime not null,
    foreign key(idEmisor) references usuario(idUsuario),
    foreign key(idReceptor) references usuario(idUsuario),
    foreign key(idCompra) references compra(idCompra) ON DELETE CASCADE,
    primary key(idMensaje)
);

create table estadoUsuario (
    idEstado int auto_increment,
    idUsuario int not null,
    habilitado boolean not null,
    foreign key(idUsuario) references usuario(idUsuario),
    primary key(idEstado)
);

create table pagosComision (
    idPago int auto_increment,
    idVendedor int not null,
    montoComision double(10,2) not null,
    estado varchar(12) default "pendiente",
    foreign key(idVendedor) references usuario(idUsuario),
    primary key(idPago)
);

create table calificacion (
    idCalificacion int auto_increment,
    idCompra int not null,
    idUsuario int not null,
    idProducto int,
    comentario varchar(300) not null,
    calificacion int(1) not null,
    foreign key(idUsuario) references usuario(idUsuario),
    foreign key(idCompra) references compra(idCompra),
    foreign key(idProducto) references producto(idProducto) ON DELETE CASCADE,
    primary key(idCalificacion)
);

insert into usuario (tipoUsuario, nombre, apellido, dni, calle, nroCalle, localidad, telefono, cuil, email, password) values 
("comun", "Belen", "Zurita", 38709826, "Triunvirato", "3553", "Villa Luzuriaga", "4696-2327", "27-38709654-2", "belenz@gmail.com", "12345678");
insert into usuario (tipoUsuario, nombre, apellido, dni, calle, nroCalle, localidad, telefono, cuil, email, password) values 
("admin", "Admin", "Admin", 38709826, "Triunvirato", "3553", "Villa Luzuriaga", "4696-2327", "27-38709654-2", "admin@admin.com", "admin");

insert into estadoUsuario (idUsuario, habilitado) values (1, true);
insert into estadoUsuario (idUsuario, habilitado) values (2, true);