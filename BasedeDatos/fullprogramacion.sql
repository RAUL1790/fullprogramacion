set datestyle to 'European';

create table usuario(
	nombre varchar(40) check(nombre ~ '^[a-zA-Z]+$') not null, 
	correo varchar(40) check(correo ~ '^[a-zA-Z0-9._%+-]+@(?:[a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$'),
	contraseña varchar(40) check(contraseña ~ '^[A-Za-z0-9]+$') not null,
	tipo_usuario varchar(15) check (tipo_usuario in ('administrador','moderador','usuario')) not null,
	primary key (correo)
);