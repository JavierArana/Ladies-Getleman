/*
Navicat MySQL Data Transfer

Source Server         : Mysql
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : boutique

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2014-11-19 13:42:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `IdProducto` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(20) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `talla` varchar(8) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `costo` float(10,0) NOT NULL,
  `existencia` int(7) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`IdProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of productos
-- ----------------------------

-- ----------------------------
-- Table structure for proveedores
-- ----------------------------
DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE `proveedores` (
  `IdProveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tipoProducto` varchar(30) NOT NULL,
  `cantidad` int(7) NOT NULL,
  PRIMARY KEY (`IdProveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proveedores
-- ----------------------------
INSERT INTO `proveedores` VALUES ('1', 'ladies', 'huetamo', '123', 'bety@', 'blusa', '5');

-- ----------------------------
-- Table structure for sugerencias
-- ----------------------------
DROP TABLE IF EXISTS `sugerencias`;
CREATE TABLE `sugerencias` (
  `IdSugerencia` int(11) NOT NULL AUTO_INCREMENT,
  `IdCliente` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL,
  `sugerencia` varchar(500) NOT NULL,
  PRIMARY KEY (`IdSugerencia`),
  KEY `ClienteID` (`IdCliente`),
  KEY `ProductoID` (`IdProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sugerencias
-- ----------------------------
INSERT INTO `sugerencias` VALUES ('1', '1', '1', 'buen producto');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `IdCliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(40) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `NickName` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  PRIMARY KEY (`IdCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'eli', '0000-00-00', '', '', 'betty', 'bin', '123', 'huetamo');
INSERT INTO `usuarios` VALUES ('3', 'rosio', '0000-00-00', '', '', 'rosi@', 'princess', '1234567', 'altamirano');

-- ----------------------------
-- Table structure for ventas
-- ----------------------------
DROP TABLE IF EXISTS `ventas`;
CREATE TABLE `ventas` (
  `IdVenta` int(11) NOT NULL AUTO_INCREMENT,
  `IdCliente` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL,
  `fechaV` date NOT NULL,
  `CostoU` float(7,0) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `costoT` float(7,0) NOT NULL,
  PRIMARY KEY (`IdVenta`),
  KEY `ClienteID` (`IdCliente`),
  KEY `ProductoID` (`IdProducto`),
  CONSTRAINT `ClienteID` FOREIGN KEY (`IdCliente`) REFERENCES `usuarios` (`IdCliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ProductoID` FOREIGN KEY (`IdProducto`) REFERENCES `productos` (`IdProducto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ventas
-- ----------------------------
DROP TRIGGER IF EXISTS `usuarios_in_be`;
DELIMITER ;;
CREATE TRIGGER `usuarios_in_be` BEFORE INSERT ON `usuarios` FOR EACH ROW insert into bitacora (id,usuario, lugar, operacion, 
fecha,hora,tabla,estado) values (0,current_user(),@@hostname,"insercion",current_date(),
current_time(),"Usuarios","Sin cambios en el registro")
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `usuarios_up_af`;
DELIMITER ;;
CREATE TRIGGER `usuarios_up_af` AFTER UPDATE ON `usuarios` FOR EACH ROW insert into bitacora (id,usuario, lugar, operacion, 
fecha,hora,tabla,estado) values (0,current_user(),@@hostname,"insercion",current_date(),current_time(),"Usuarios",
 CONCAT(NEW.idcliente, " ", NEW.nombre," ",NEW.password," " ,NEW.direccion," ",NEW.telefono," ",NEW.email))
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `usuarios_del_af`;
DELIMITER ;;
CREATE TRIGGER `usuarios_del_af` AFTER DELETE ON `usuarios` FOR EACH ROW insert into bitacora (id,usuario, lugar, operacion,
 fecha,hora,tabla,estado) values (0,current_user(),@@hostname,"insercion",current_date(),current_time(),"Usuarios","Dato eliminado")
;;
DELIMITER ;
