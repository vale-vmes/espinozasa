CREATE DATABASE IF NOT EXISTS espinozasa;
USE espinozasa;
CREATE TABLE PRODUCTO
(
    ID_PRODUCTO INT PRIMARY KEY AUTO_INCREMENT,
    NOMBRE VARCHAR(50) NOT NULL,
    CATEGORIA VARCHAR(250) NOT NULL,
    MARCA VARCHAR (30) NOT NULL,
    PRECIO DOUBLE NOT NULL,
    DESCRIPCION VARCHAR(100) NOT NULL,
    FECHA_INGRESO DATE NOT NULL

);
INSERT INTO PRODUCTO
(NOMBRE, CATEGORIA, MARCA, PRECIO, DESCRIPCION, FECHA_INGRESO)
VALUES 
('Caja Paletas Payaso 10PZ','Dulces','Rikolino', 65.99,'Caja con 10 piezas de paletas Payaso',CURDATE()),
('Caja Chicles Bubbaloo 30PZ','Dulces','Cadbury Adams', 48.99,'Caja con 30 chicles individuales Bubbaloo',CURDATE()),
('Platos desechables rectangulares 25PZ','Desechables','Reyma', 35.99,'Paquete de platos desechables rectangulares con 25 piezas',CURDATE()),
('Bolsa Globos Mixta No.9 50PZ','Decoraciones','Payaso',45.99,'Bolsa de globos de colores mixtos número 9 con 50 piezas',CURDATE())