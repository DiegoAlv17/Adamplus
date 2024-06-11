DROP DATABASE IF EXISTS adambd;

CREATE DATABASE adambd;
USE adambd;

CREATE TABLE cursos (
  id_curso int primary key auto_increment,
  nombre varchar(30) NOT NULL,
  tipo varchar(20) NOT NULL,
  link varchar(8000) DEFAULT NULL,
  Planes_id_plan varchar(4) NOT NULL
) auto_increment=100;

CREATE TABLE usuarios (
  id_usuarios int primary key auto_increment,
  nombre varchar(25) NOT NULL,
  email varchar(40) NOT NULL,
  contraseña varchar(20) NOT NULL
) auto_increment=100;

CREATE TABLE suscripcion_form (
  id_suscripcion int primary key auto_increment,
  fec_ini date NOT NULL,
  fec_fin date NOT NULL,
  num_tar int NOT NULL,
  fec_tar date NOT NULL,
  cvv char(3) NOT NULL,
  pais varchar(20) NOT NULL,
  Usuarios_id_usuarios varchar(5) NOT NULL,
  Planes_id_plan varchar(4) NOT NULL
) auto_increment=100;

CREATE TABLE planes (
  id_plan int primary key auto_increment,
  descripcion varchar(200) DEFAULT NULL,
  precio decimal(19,4) NOT NULL
) auto_increment=100;


--Procedimiento para insertar un subscripcion 
DELIMITER $$

CREATE PROCEDURE InsertSuscripcion(IN p_num_tar INT, IN p_fec_tar DATE,IN p_cvv CHAR(3),
    IN p_pais VARCHAR(20),IN p_Usuarios_id_usuarios VARCHAR(5),IN p_Planes_id_plan VARCHAR(4))
BEGIN
    DECLARE v_fec_ini DATE;
    DECLARE v_fec_fin DATE;

    SET v_fec_ini = CURDATE();

    SET v_fec_fin = DATE_ADD(v_fec_ini, INTERVAL 1 MONTH);

    INSERT INTO suscripcion_form VALUES (
        null,
        v_fec_ini, 
        v_fec_fin, 
        p_num_tar, 
        p_fec_tar, 
        p_cvv, 
        p_pais, 
        p_Usuarios_id_usuarios, 
        p_Planes_id_plan
    );
END $$

DELIMITER ;