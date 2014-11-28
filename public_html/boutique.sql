/*
Navicat MySQL Data Transfer

Source Server         : Mysql
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : boutique

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2014-11-28 12:39:25
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
  `descripcion` varchar(500) NOT NULL,
  PRIMARY KEY (`IdProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `tipoproducto` varchar(30) NOT NULL,
  `cantidad` int(7) NOT NULL,
  PRIMARY KEY (`IdProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proveedores
-- ----------------------------

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
  KEY `IdCliente` (`IdCliente`) USING BTREE,
  KEY `IdProducto` (`IdProducto`) USING BTREE,
  CONSTRAINT `ClienteId` FOREIGN KEY (`IdCliente`) REFERENCES `usuarios` (`IdCliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ProductoId` FOREIGN KEY (`IdProducto`) REFERENCES `productos` (`IdProducto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sugerencias
-- ----------------------------

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `IdCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `fechanac` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `nickname` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contra` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  PRIMARY KEY (`IdCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('2', 'elizabeth cruz', '1993-04-14', 'Femenino', 'bety', 'betty_cruzz@hotmail.com', '*FAD6A3BC09BBA2A9FC6FE99F0158A1975832DC00', '014351037333', 'erongaricuaro 7 tejerias huetamo Michoacán');
INSERT INTO `usuarios` VALUES ('3', 'eli', '1993-04-14', 'Femenino', 'betty', 'no@gmail.com', 'binario', '123', 'n 1 t hue Michoacán');
INSERT INTO `usuarios` VALUES ('4', 'Carlos Reyes Dueñas', '2014-11-12', 'Masculino', 'charly', 'king_slave@gmail.com', '*FAD6A3BC09BBA2A9FC6FE99F0158A1975832DC00', '1234567', 'aurrera 1 centro huetamo Michoacán');

-- ----------------------------
-- Table structure for ventas
-- ----------------------------
DROP TABLE IF EXISTS `ventas`;
CREATE TABLE `ventas` (
  `IdVenta` int(11) NOT NULL,
  `IdCliente` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL,
  `fechaventa` date NOT NULL,
  `costouni` float(7,0) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `costototal` float(7,0) NOT NULL,
  PRIMARY KEY (`IdVenta`),
  KEY `IdCliente` (`IdCliente`),
  KEY `IdProducto` (`IdProducto`),
  CONSTRAINT `IdCliente` FOREIGN KEY (`IdCliente`) REFERENCES `usuarios` (`IdCliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `IdProducto` FOREIGN KEY (`IdProducto`) REFERENCES `productos` (`IdProducto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ventas
-- ----------------------------
