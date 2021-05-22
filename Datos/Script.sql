-- MySQL Workbench Synchronization
-- Generated: 2021-05-21 19:51
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Usuario

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `BDSitio` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;

CREATE TABLE IF NOT EXISTS `BDSitio`.`Usuarios` (
  `nombreUsuario` VARCHAR(20) NOT NULL ,
  `identificacion` VARCHAR(45) NOT NULL,
  `primerNombre` VARCHAR(45) NOT NULL,
  `segundoNombre` VARCHAR(45) NULL DEFAULT NULL,
  `primerApellido` VARCHAR(45) NOT NULL,
  `segundoApellido` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(70) NOT NULL,
  `celular` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(250) NULL DEFAULT NULL,
  `perfilUsuario` INT(11) NOT NULL,
  `passWord` VARCHAR(45) NOT NULL,
  `auxVarcharUno` VARCHAR(255) NULL DEFAULT NULL,
  `auxVarcharDos` VARCHAR(255) NULL DEFAULT NULL,
  `intAuxUno` INT(11) NULL DEFAULT NULL,
  `intAuxDos` INT(11) NULL DEFAULT NULL,
  `usuarioCreacion` VARCHAR(45) NULL DEFAULT NULL,
  `fechaCreacion` DATETIME NULL DEFAULT NULL,
  `UsuarioModificacion` VARCHAR(45) NULL DEFAULT NULL,
  `fechaModificacion` DATETIME NULL DEFAULT NULL,
  `estadoUsuario` BIT(1) NOT NULL,
  PRIMARY KEY (`nombreUsuario`),
  INDEX `indx_identificacion_usuario` (`identificacion` ASC)) 
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;

CREATE TABLE IF NOT EXISTS `BDSitio`.`productos` (
  `codigosProducto` VARCHAR(15) NOT NULL,
  `nombreProducto` VARCHAR(150) NOT NULL,
  `descripcionProducto` VARCHAR(255) NULL DEFAULT NULL,
  `unidadMedida` VARCHAR(45) NOT NULL,
  `marcaProducto` VARCHAR(45) NULL DEFAULT NULL,
  `productoActual` FLOAT(11) NOT NULL,
  `cantidadActual` INT(11) NOT NULL,
  `usuarioCreacion` VARCHAR(45) NOT NULL,
  `FechaCreacion` DATETIME NOT NULL,
  `UsuarioModificacion` VARCHAR(45) NULL DEFAULT NULL,
  `fechaModificacion` DATETIME NULL DEFAULT NULL,
  `estadoProducto` BIT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`codigosProducto`),
  INDEX `indx_nombre_producto` (`nombreProducto` ASC)) 
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;

CREATE TABLE IF NOT EXISTS `BDSitio`.`Terceros` (
  `identificacionTercero` VARCHAR(25) NOT NULL,
  `nombreTercero` VARCHAR(255) NOT NULL,
  `emailTercero` VARCHAR(70) NULL DEFAULT NULL,
  `celularTercero` VARCHAR(15) NULL DEFAULT NULL,
  `telefonTercero` VARCHAR(45) NULL DEFAULT NULL,
  `direccionTercero` VARCHAR(250) NULL DEFAULT NULL,
  `estadoTercero` BIT(1) NOT NULL,
  `fechaCreacion` DATETIME NOT NULL,
  `usuarioCreacion` VARCHAR(45) NOT NULL,
  `fechaModificacion` DATETIME NULL DEFAULT NULL,
  `usuarioModificacion` VARCHAR(45) NULL DEFAULT NULL,
  `descripcionTercero` VARCHAR(45) NULL DEFAULT NULL,
  `esCliente` BIT(1) NOT NULL,
  `esproveedor` BIT(1) NOT NULL,
  `contactoTercero` VARCHAR(105) NULL DEFAULT NULL,
  PRIMARY KEY (`identificacionTercero`),
  INDEX `indx_nombre_tercero` (`nombreTercero` ASC) ,
  INDEX `indx_descripcion_tercero` (`descripcionTercero` ASC) ,
  INDEX `indx_contacto_tercero` (`contactoTercero` ASC)) 
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;

CREATE TABLE IF NOT EXISTS `BDSitio`.`compraventa` (
  `idcompraventa` INT(11) NOT NULL AUTO_INCREMENT,
  `fechaCompraVenta` DATETIME NOT NULL,
  `tipoPago` TINYINT(1) NOT NULL,
  `tipoOperacion` TINYINT(1) NOT NULL,
  `estadoCompraVenta` BIT(1) NOT NULL,
  `usuarioCreacion` VARCHAR(45) NOT NULL,
  `fechaCreacion` DATETIME NOT NULL,
  `usuarioModificados` VARCHAR(45) NULL DEFAULT NULL,
  `fechaModificacion` DATETIME NULL DEFAULT NULL,
  `conceptoCompraVenta` VARCHAR(45) NOT NULL,
  `identificacionTercero` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`idcompraventa`),
  INDEX `indx_fechaCompraVenta` (`fechaCompraVenta` ASC) ,
  INDEX `fk_compraventa_Terceros1_idx` (`identificacionTercero` ASC) ,
  CONSTRAINT `fk_compraventa_Terceros1`
    FOREIGN KEY (`identificacionTercero`)
    REFERENCES `BDSitio`.`Terceros` (`identificacionTercero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;

CREATE TABLE IF NOT EXISTS `BDSitio`.`productosporCompraVenta` (
  `idProductosPorCompraVenta` BIGINT(11) NOT NULL AUTO_INCREMENT,
  `codigoProducto` VARCHAR(15) NOT NULL,
  `idCompraVenta` INT(11) NOT NULL,
  `Cantidad` INT(11) NOT NULL,
  `estadoProductosPorCompraVenta` BIT(1) NULL DEFAULT NULL,
  `usuarioCreacion` VARCHAR(45) NOT NULL,
  `fechaCreacion` DATETIME NOT NULL,
  `usuarioModificacion` VARCHAR(45) NULL DEFAULT NULL,
  `fechaModificacion` DATETIME NULL DEFAULT NULL,
  INDEX `fk_compraventa_has_productos_productos1_idx` (`codigoProducto` ASC), 
  INDEX `fk_compraventa_has_productos_compraventa_idx` (`idCompraVenta` ASC), 
  PRIMARY KEY (`idProductosPorCompraVenta`),
  CONSTRAINT `fk_compraventa_has_productos_compraventa`
    FOREIGN KEY (`idCompraVenta`)
    REFERENCES `BDSitio`.`compraventa` (`idcompraventa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_compraventa_has_productos_productos1`
    FOREIGN KEY (`codigoProducto`)
    REFERENCES `BDSitio`.`productos` (`codigosProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
