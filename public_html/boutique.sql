/*
Navicat MySQL Data Transfer

Source Server         : Mysql
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : boutique

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2014-11-22 01:40:27
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

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `IdCliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(40) NOT NULL,
  `FechaN` date NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `NickName` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contra` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  PRIMARY KEY (`IdCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------

-- ----------------------------
-- Table structure for ventas
-- ----------------------------
DROP TABLE IF EXISTS `ventas`;
CREATE TABLE `ventas` (
  `IdVenta` int(11) NOT NULL,
  `IdCliente` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL,
  `FechaV` date NOT NULL,
  `CostoU` float(7,0) NOT NULL,
  `Cantidad` int(5) NOT NULL,
  `CostoT` float(7,0) NOT NULL,
  PRIMARY KEY (`IdVenta`),
  KEY `IdCliente` (`IdCliente`),
  KEY `IdProducto` (`IdProducto`),
  CONSTRAINT `IdCliente` FOREIGN KEY (`IdCliente`) REFERENCES `usuarios` (`IdCliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `IdProducto` FOREIGN KEY (`IdProducto`) REFERENCES `productos` (`IdProducto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ventas
-- ----------------------------
