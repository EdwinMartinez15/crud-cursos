CREATE DATABASE [IF NOT EXISTS] crud-cursos;

use crud-cursos;

CREATE TABLE Producto(
    id int(4) not null,
    nombre varchar(20) not null,
    tipo varchar(20) not null
    proveedor varchar(20) not null,
    costo_venta Decimal not null,
    costo_compra Decimal not null,
    cantidad int not null
);

ALTER TABLE Producto
    ADD PRIMARY KEY (id);

ALTER TABLE Producto
    MODIFY id int (4) not null auto_increment, auto_increment=1;


create TABLE gestores(
    id int(4) not null,
    nombres varchar(20) not null,
    apellidos varchar(20) not null,
    documento int(11),
    correo varchar(30) not null,
    direccion varchar(30)
    tipo_usuario varchar(20) not null,
    usuario varchar(20) not null,
    clave varchar(20) not null
    sede int(2) not null,

);
ALTER TABLE gestores
    ADD PRIMARY KEY (id);

ALTER TABLE gestores
    MODIFY id int (4) not null auto_increment, auto_increment=1;


CREATE TABLE venta(
id int,
fecha datetime NOT NULL
);

ALTER TABLE venta
    ADD PRIMARY KEY (id);

ALTER TABLE venta
    MODIFY id int (4) not null auto_increment, auto_increment=1;

ALTER TABLE venta
    ADD FOREIGN KEY (id) REFERENCES Producto(id);

ALTER TABLE venta
    ADD FOREIGN KEY (sede) REFERENCES gestores(id);