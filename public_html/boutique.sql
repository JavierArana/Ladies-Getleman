/*
Navicat MySQL Data Transfer

Source Server         : Mysql
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : boutique

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2014-12-08 04:03:09
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES ('3', 'polo', 'Blusa', 'Mediana', 'Dama', '100', '5', 'Blusa1.jpg', 'blusa ');
INSERT INTO `productos` VALUES ('4', 'polo', 'Jeans', 'Unitalla', 'Dama', '100', '7', 'Jeans1.jpg', 'jeans');
INSERT INTO `productos` VALUES ('5', 'nike', 'Pantalon', 'Mediana', 'Dama', '100', '5', 'Pantalon1.jpg', 'pantalon');
INSERT INTO `productos` VALUES ('6', 'polo', 'Vestido', 'Chica', 'Dama', '100', '5', 'Vestido1.jpg', 'vestido');
INSERT INTO `productos` VALUES ('7', 'polo', 'Playera', 'Mediana', 'Caballero', '100', '5', 'Playera1.jpg', 'playera');
INSERT INTO `productos` VALUES ('8', 'polo', 'Camisa', 'Mediana', 'Caballero', '100', '1', 'Camisa1.jpg', 'camisa');
INSERT INTO `productos` VALUES ('9', 'polo', 'Falda', 'Mediana', 'Niña', '100', '7', 'Falda1.jpg', 'falda');
INSERT INTO `productos` VALUES ('10', 'polo', 'Short', 'Mediana', 'Dama', '120', '7', 'Short1.jpg', 'short');
INSERT INTO `productos` VALUES ('11', 'nike', 'Accesorio', 'Mediana', 'Niña', '100', '5', 'Accesorio1.jpg', 'acces');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proveedores
-- ----------------------------
INSERT INTO `proveedores` VALUES ('1', 'polo', 'tejerias 7 huetamo', '1234567', 'polo@hotmail.com', 'Playera', '5');
INSERT INTO `proveedores` VALUES ('6', 'Jesus Guerrero Rojas', 'huetamo michoacan', '12242', 'jark@hotmail.com', 'Accesorios', '100');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

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
  `tipousuario` varchar(15) NOT NULL,
  `fechanac` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `nickname` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contra` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  PRIMARY KEY (`IdCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('10', 'Jose Guadalupe Valle Avellaneda', 'cliente', '2014-12-12', 'Masculino', 'lupe', 'play_boy_valle@live.com.mx', '*9219FFCF72B76950ADF3E91DB8DCB6836D0F59A4', '1234567', 'erongaricuaro 7 Tejerias huetamo Michoacán');
INSERT INTO `usuarios` VALUES ('22', 'javier arana', 'admin', '2014-12-09', 'Masculino', 'javier', 'jertdark@gmail.com', '*E6CC90B878B948C35E92B003C792C46C58C4AF40', '1234567', 'erongaricuaro 3 tejerias huetamo Michoacán');
INSERT INTO `usuarios` VALUES ('23', 'elizabeth cruz', 'admin', '2014-12-14', 'Femenino', 'bety', 'betty_cruzz@hotmail.com', '*FAD6A3BC09BBA2A9FC6FE99F0158A1975832DC00', '014351037333', 'erongaricuaro 7 tejerias huetamo Michoacán');

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
