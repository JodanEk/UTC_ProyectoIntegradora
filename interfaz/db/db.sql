create database napoli;
use napoli;

/*---------------------------------------------------------------------------------------*/
create table pizza(
id_pizza int primary key auto_increment,
nombre varchar(30) not null,
precio int(3)not null,
tamano varchar(50) not null
);

insert into pizza values(0,'napoli',55,'mediana');
insert into pizza values(0,'mexicana',55,'mediana');
insert into pizza values(0,'vegetariana',55,'mediana');
insert into pizza values(0,'hawaiana',55,'mediana');
insert into pizza values(0,'dionisio',55,'mediana');
insert into pizza values(0,'alemana',55,'mediana');

/*---------------------------------------------------------------------------------------*/

create table status(
id_status int primary key auto_increment,
status varchar(25)not null
);

insert into status values(1,"activo");
insert into status values(2,"inactivo");


/*---------------------------------------------------------------------------------------*/

create table privilegio(
id_privilegio int primary key auto_increment,
tipo_usuario varchar(45) not null
);

insert into privilegio values(1,"admin");
insert into privilegio values(2,"vendedor");

/*---------------------------------------------------------------------------------------*/

create table usuario(
id_usuario int primary key auto_increment,
id_privilegio int not null,
nombre varchar(45) not null,
apellido varchar(45) not null,
telefono int(12) not null,
direccion varchar(100) not null,
usuario varchar(45) not null,
contra varchar(45) not null,
fecha_reg timestamp not null,
id_status int not null
);


insert into usuario values(0,1,'amado','martin solis',9982579687,'Region 103 mza 10 lote 17','amado',sha1('amad0'),current_timestamp(),1);
insert into usuario values(0,2,'miguel','martin solis',9982788541,'Region 103 mza 10 lote 17','miguel',sha1('1234'),current_timestamp(),1);
insert into usuario values(0,2,'sara','herrera',9982875696,'Region 103 mza 10 lote 17','sara',sha1('sya123'), current_timestamp(),1);


/*---------------------------------------------------------------------------------------*/

create table sucursal(
id_sucursal int primary key auto_increment,
nombre varchar(50)not null,
direccion varchar(100) not null
);

insert into sucursal values(0,"tierra maya", "region 104 mza 25 lote 32");
insert into sucursal values(0,"region 101", "region 101 mza 7 lote 3");
insert into sucursal values(0,"las palmas", "se desconose por el momento");
insert into sucursal values(0,"la gran plaza", "se desconose por el momento");


/*---------------------------------------------------------------------------------------*/

create table ticket(
id_ticket int primary key auto_increment,
fecha date
);

insert into ticket values(0,current_date());
/*---------------------------------------------------------------------------------------*/

create table venta(
id_venta int primary key auto_increment,
id_usuario int not null,
id_pizza int not null,
id_sucursal int not null,
id_status int not null,
id_ticket int not null,
cantidad int(2) not null,
monto_total double(10,2) not null,
fecha_venta timestamp not null
);

/*nsert into venta values(1,)*/

/*---------------------------------------------------------------------------------------*/



/* ------------------------------------------------------------------------------------------------------------ */
/* ---------alteraciones a las tablas por medio de las relaciones foreign key por medio de los Alter table..------------------*/
/* ------------------------------------------------------------------------------------------------------------ */

/* ----------------------ALTERACIONES EN LA TABLA VENTA ----------------------- */
alter table venta
add constraint fk_ID_usuario_venta foreign key (id_usuario)
references usuario (id_usuario) on delete cascade on update cascade;

alter table venta
add constraint fk_ID_pizza_venta foreign key (id_pizza)
references pizza (id_pizza) on delete cascade on update cascade;

alter table venta
add constraint fk_ID_sucursal_venta foreign key (id_sucursal)
references sucursal (id_sucursal) on delete cascade on update cascade;

alter table venta
add constraint fk_ID_status_venta foreign key (id_status)
references status (id_status) on delete cascade on update cascade;

alter table venta
add constraint fk_ID_ticket_venta foreign key (id_ticket)
references ticket (id_ticket) on delete cascade on update cascade;

/* ----------------------ALTERACIONES EN LA TABLA USUARIO ----------------------- */

alter table usuario
add constraint fk_ID_privilegio_usuario foreign key (id_privilegio)
references privilegio (id_privilegio) on delete cascade on update cascade;

alter table usuario
add constraint fk_ID_status_usuario foreign key (id_status)
references status (id_status) on delete cascade on update cascade;

create table pizza_p(
	id_p int primary key auto_increment,
	nombre varchar(50) not null,
	tamano varchar(50) not null,
	precio int(3) not null,
	cantidad int(2) not null
	);

