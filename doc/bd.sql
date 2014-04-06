-- Created by DiaSql-Dump Version 0.01(Beta)
-- Filename: bd.sql

-- users --
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
	`id` INT ( 5 ) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`num_telefonico` VARCHAR (100) DEFAULT NULL,
	`nombre` VARCHAR ( 200 ) NOT NULL UNIQUE COMMENT "Nombre del empleado",
	`domicilio` VARCHAR ( 200 ) DEFAULT NULL,
	`direccion` VARCHAR ( 200 ) DEFAULT "" NOT NULL,
	`username` VARCHAR( 30 ) NOT NULL UNIQUE COMMENT "Nick para uso del loggin",
	`password` VARCHAR ( 200 ) DEFAULT NULL COMMENT "Contraseña a utilizar",
	`fecha_nacimiento` DATE DEFAULT NULL,
	`ultimo_login` DATETIME DEFAULT NULL,
	`email` VARCHAR ( 200 ) NOT NULL UNIQUE,
	`created` DATETIME DEFAULT NULL,
	`modified` DATETIME DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- posiciones --
DROP TABLE IF EXISTS `posiciones`;
CREATE TABLE IF NOT EXISTS `posiciones` (
	`id` INT ( 5 ) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`lat` VARCHAR ( 100 ) NOT NULL UNIQUE COMMENT "nombre de la vacuna",
	`long` VARCHAR ( 100 ) DEFAULT NULL,
	`created` DATETIME DEFAULT NULL,
	`modified` DATETIME DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- perros_vacunas --
DROP TABLE IF EXISTS `perros_vacunas`;
CREATE TABLE IF NOT EXISTS `perros_vacunas` (
	`id` INT ( 5 ) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`perro_id` INT ( 5 ) NOT NULL,
	`vacuna_id` INT ( 5 ) NOT NULL UNIQUE COMMENT "VACUNA",
	`created` DATETIME DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- veterinarias --
DROP TABLE IF EXISTS `veterinarias`;
CREATE TABLE IF NOT EXISTS `veterinarias` (
	`id` INT ( 5 ) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`nombre` VARCHAR ( 200 ) NOT NULL UNIQUE COMMENT "Nombre del empleado",
	`direccion` VARCHAR ( 200 ) DEFAULT "" NOT NULL,
	`posicion_id` INT ( 5 ) DEFAULT NULL,
	`contacto` VARCHAR ( 200 ) DEFAULT NULL,
	`telefono` VARCHAR ( 150 ) DEFAULT NULL,
	`direccion_web` VARCHAR ( 200 ) DEFAULT NULL,
	`email` VARCHAR ( 200 ) NOT NULL UNIQUE,
	`created` DATETIME DEFAULT NULL,
	`modified` DATETIME DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- vacunas --
DROP TABLE IF EXISTS `vacunas`;
CREATE TABLE IF NOT EXISTS `vacunas` (
	`id` INT ( 5 ) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`nombre` VARCHAR ( 100 ) NOT NULL UNIQUE COMMENT "nombre de la vacuna",
	`descripcion` VARCHAR ( 250 ) DEFAULT NULL,
	`created` DATETIME DEFAULT NULL,
	`modified` DATETIME DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- enfermedades --
DROP TABLE IF EXISTS `enfermedades`;
CREATE TABLE IF NOT EXISTS `enfermedades` (
	`id` INT ( 5 ) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`vacuna_id` INT ( 5 ) DEFAULT NULL,
	`nombre` VARCHAR ( 100 ) NOT NULL UNIQUE COMMENT "nombre de la vacuna",
	`descripcion` VARCHAR ( 250 ) DEFAULT NULL,
	`created` DATETIME DEFAULT NULL,
	`modified` DATETIME DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- votos --
DROP TABLE IF EXISTS `votos`;
CREATE TABLE IF NOT EXISTS `votos` (
	`id` INT ( 5 ) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`user_id` INT ( 5 ) NOT NULL UNIQUE COMMENT "nombre de la vacuna",
	`tabla_nombre` VARCHAR ( 250 ) NOT NULL,
	`id_externo` INT ( 5 ) NOT NULL,
	`created` DATETIME DEFAULT NULL,
	`modified` DATETIME DEFAULT NULL,
	`voto` FLOAT (  3 ) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- paseos --
DROP TABLE IF EXISTS `paseos`;
CREATE TABLE IF NOT EXISTS `paseos` (
	`id` INT ( 5 ) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`lugar` VARCHAR ( 150 ) NOT NULL UNIQUE COMMENT "nombre de la vacuna",
	`posicion_id` INT ( 5 ) DEFAULT NULL,
	`fecha_hora` DATETIME DEFAULT NULL,
	`created` DATETIME DEFAULT NULL,
	`modified` DATETIME DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- adopciones --
DROP TABLE IF EXISTS `adopciones`;
CREATE TABLE IF NOT EXISTS `adopciones` (
	`id` INT ( 5 ) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`user_id` INT ( 5 ) NOT NULL UNIQUE COMMENT "nombre de la vacuna",
	`usuario_quien_dio_en_adopcion` INT ( 250 ) DEFAULT NULL,
	`estado` VARCHAR ( 100 ) DEFAULT NULL,
	`perro_id` INT ( 5 ) DEFAULT NULL,
	`created` DATETIME DEFAULT NULL,
	`modified` DATETIME DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- extraviados --
DROP TABLE IF EXISTS `extraviados`;
CREATE TABLE IF NOT EXISTS `extraviados` (
	`id` INT ( 5 ) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`user_id` INT ( 5 ) NOT NULL,
	`perro_id` INT ( 5 ) NOT NULL,
	`posicion_id` INT ( 5 ) DEFAULT NULL,
	`lugar` VARCHAR ( 200 ) NOT NULL UNIQUE COMMENT "Nombre del empleado",
	`fecha` DATE NOT NULL,
	`contacto` VARCHAR ( 200 ) DEFAULT NULL,
	`estado` VARCHAR ( 150 ) DEFAULT 'ABIERTO' DEFAULT NULL,
	`created` DATETIME DEFAULT NULL,
	`modified` DATETIME DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- perros --
DROP TABLE IF EXISTS `perros`;
CREATE TABLE IF NOT EXISTS `perros` (
	`id` INT ( 5 ) PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
	`user_id` INT ( 5 ) DEFAULT NULL,
	`estado` VARCHAR ( 100 ) NOT NULL UNIQUE COMMENT "estado del perro",
	`raza` VARCHAR ( 100 ) DEFAULT NULL,
	`fecha_nacimiento` DATE NOT NULL,
	`color` VARCHAR ( 30 ) NOT NULL UNIQUE,
	`peso` FLOAT ( 5 ) DEFAULT NULL COMMENT "Peso del animal",
	`tamanio` VARCHAR ( 50 ) DEFAULT NULL,
	`created` DATETIME DEFAULT NULL,
	`modified` DATETIME DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
-- End SQL-Dump
