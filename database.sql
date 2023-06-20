-- SQLBook: Code

CREATE DATABASE alquilartemis;
USE alquilartemis;
-- Pagina

CREATE TABLE empleados (
    id_empleado INT PRIMARY KEY AUTO_INCREMENT,
    nombre_empleado VARCHAR (60) NOT NULL,
    telefono_empleado VARCHAR(60) NOT NULL
);

CREATE TABLE users(
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(60) NOT NULL,
    gmail VARCHAR(60) NOT NULL,
    id_empleado INT NOT NULL,
    password VARCHAR(60) NOT NULL,
    FOREIGN KEY (id_empleado) REFERENCES empleados(id_empleado)
);

DROP TABLE users;
CREATE TABLE salida(
    salida_id INT PRIMARY KEY AUTO_INCREMENT,
    id_constructora INT NOT NULL ,
    id_empleado INT NOT NULL,
    id_obra INT NOT NULL,
    id_inventario INT NOT NULL,
    fecha_salida VARCHAR(60) NOT NULL,
    subtotalPeso INT NOT NULL,
    placatransporte VARCHAR(10) NOT NULL,
    observaciones VARCHAR(60) NOT NULL,
    cantidad_salida INT NOT NULL,
    valorUnitario INT NOT NULL,
    fecha_standBye TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
    estado INT NOT NULL,
    valorTotal INT NOT NULL,
    FOREIGN KEY (id_constructora) REFERENCES constructoras(id_constructora),
    FOREIGN KEY (id_empleado) REFERENCES empleados(id_empleado),
    FOREIGN KEY (id_obra) REFERENCES obras(id_obra),
    FOREIGN KEY (id_inventario) REFERENCES inventario(id_inventario)
);





CREATE TABLE entrada (
    entrada_id INT PRIMARY KEY AUTO_INCREMENT,
    id_empleado INT NOT NULL,
    id_constructora INT NOT NULL,
    id_inventario INT NOT NULL,
    id_obra INT NOT NULL,
    entrada_cantidad INT NOT NULL,
    fecha_entreda VARCHAR(60) NOT NULL,
    observaciones VARCHAR(60) NOT NULL,
    FOREIGN KEY (id_inventario) REFERENCES inventario(id_inventario),
    FOREIGN KEY (id_empleado) REFERENCES empleados(id_empleado),
    FOREIGN KEY (id_constructora) REFERENCES constructoras(id_constructora),
    FOREIGN KEY (id_obra) REFERENCES obras(id_obra)

);




-- Se llena en phpmyadmin
CREATE TABLE obras (
    id_obra INT PRIMARY KEY AUTO_INCREMENT,
    nombre_obra VARCHAR(100) NOT NULL,
    lugar_obra VARCHAR(60) NOT NULL
);


CREATE TABLE inventario (
    id_inventario INT PRIMARY KEY AUTO_INCREMENT,
    nombre_inventario VARCHAR(60) NOT NULL,
    cantidad INT NOT NULL,
    FechaInventario TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);




CREATE TABLE constructoras (
  id_constructora INT PRIMARY KEY AUTO_INCREMENT,
  nombre_constructora varchar(60) DEFAULT NULL,
  telefono_constructora VARCHAR(60) NOT NULL );




-- DROPS 

DROP DATABASE alquilartemis;
DROP TABLE constructoras;
DROP TABLE inventario;
DROP TABLE entrada_detalle;
DROP TABLE entrada;
DROP TABLE empleados;
DROP TABLE inventario;
