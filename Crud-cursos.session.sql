CREATE DATABASE [IF NOT EXISTS] crud-cursos;

use crud-cursos;

CREATE TABLE cursos(
    id int(4) not null,
    nombre varchar(20) not null,
    codigo int(12) not null
);

ALTER TABLE cursos
    ADD PRIMARY KEY (id);

ALTER TABLE cursos
    MODIFY id int (4) not null auto_increment, auto_increment=1;


create TABLE gestores(
    id int(4) not null,
    nombre varchar(20) not null,
    tipo_usuario varchar(20) not null,
    usuario varchar(20) not null,
    clave varchar(20) not null
);
ALTER TABLE gestores
    ADD PRIMARY KEY (id);

ALTER TABLE gestores
    MODIFY id int (4) not null auto_increment, auto_increment=1;


CREATE TABLE usuarios(
    id int(4) not null,
    nombres varchar(20) not null,
    apellidos varchar(20) not null,
    documento int(11),
    correo varchar(30) not null,
    direccion varchar(30),
    celular int(12) not null,
    ultimo_estudio VARCHAR(30),
    continua boolean,
    observacion text(500),
    ciudad varchar(20),
    curso_id int(4) not null,
    gestor_id int(4)
);

ALTER TABLE usuarios
    ADD PRIMARY KEY (id);

ALTER TABLE usuarios
    MODIFY id int (4) not null auto_increment, auto_increment=1;

ALTER TABLE usuarios
    ADD FOREIGN KEY (curso_id) REFERENCES cursos(id);

ALTER TABLE usuarios
    ADD FOREIGN KEY (gestor_id) REFERENCES gestores(id);