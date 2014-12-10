/*
Navicat MySQL Data Transfer

Source Server         : Mysql
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : boutique

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2014-12-10 09:36:17
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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES ('22', 'polo', 'Playera', 'Mediana', 'Caballero', '100', '7', 'Playera1.jpg', 'playera');
INSERT INTO `productos` VALUES ('23', 'polo', 'Playera', 'Mediana', 'Caballero', '100', '1', 'Playera23.jpg', 'playera');
INSERT INTO `productos` VALUES ('24', 'nike', 'Playera', 'Mediana', 'Caballero', '120', '7', 'Playera24.jpg', 'playera');
INSERT INTO `productos` VALUES ('25', 'polo', 'Jeans', 'Chica', 'Caballero', '100', '2', 'Jeans25.jpg', 'Jeans');
INSERT INTO `productos` VALUES ('26', 'nike', 'Jeans', 'Grande', 'Caballero', '120', '4', 'Jeans26.jpg', 'Jeans');
INSERT INTO `productos` VALUES ('27', 'polo', 'Jeans', 'Unitalla', 'Caballero', '120', '2', 'Jeans27.jpg', 'Jeans');
INSERT INTO `productos` VALUES ('28', 'nike', 'Pantalon', 'Mediana', 'Caballero', '120', '5', 'Pantalon28.jpg', 'Pantalon');
INSERT INTO `productos` VALUES ('29', 'polo', 'Pantalon', 'Chica', 'Caballero', '100', '7', 'Pantalon29.jpg', 'Pantalon');
INSERT INTO `productos` VALUES ('30', 'nike', 'Pantalon', 'Unitalla', 'Caballero', '120', '1', 'Pantalon30.jpg', 'Pantalon');
INSERT INTO `productos` VALUES ('31', 'polo', 'Camisa', 'Chica', 'Caballero', '157', '4', 'Camisa31.jpg', 'Camisa');
INSERT INTO `productos` VALUES ('32', 'polo', 'Camisa', 'Mediana', 'Caballero', '157', '5', 'Camisa32.jpg', 'Camisa');
INSERT INTO `productos` VALUES ('33', 'nike', 'Camisa', 'Grande', 'Caballero', '125', '3', 'Camisa33.jpg', 'Camisa');
INSERT INTO `productos` VALUES ('34', 'polo', 'Accesorio', 'Mediana', 'Caballero', '50', '2', 'Accesorio34.jpg', 'Accesorio');
INSERT INTO `productos` VALUES ('35', 'polo', 'Accesorio', 'Mediana', 'Caballero', '100', '5', 'Accesorio35.jpg', 'Accesorio');
INSERT INTO `productos` VALUES ('36', 'nike', 'Accesorio', 'Chica', 'Caballero', '157', '7', 'Accesorio36.jpg', 'Accesorio');
INSERT INTO `productos` VALUES ('37', 'nike', 'Blusa', 'Mediana', 'Dama', '250', '6', 'Blusa37.jpg', 'Blusa');
INSERT INTO `productos` VALUES ('38', 'Areopostal', 'Blusa', 'Grande', 'Dama', '200', '8', 'Blusa38.jpg', 'Blusa');
INSERT INTO `productos` VALUES ('39', 'Holister', 'Blusa', 'Unitalla', 'Dama', '157', '6', 'Blusa39.jpg', 'Blusa');
INSERT INTO `productos` VALUES ('40', 'nike', 'Jeans', 'Mediana', 'Dama', '125', '3', 'Jeans40.jpg', 'Jeans');
INSERT INTO `productos` VALUES ('41', 'Holister', 'Jeans', 'Unitalla', 'Dama', '200', '7', 'Jeans41.jpg', 'Jeans');
INSERT INTO `productos` VALUES ('42', 'Areopostal', 'Jeans', 'Grande', 'Dama', '157', '9', 'Jeans42.jpg', 'Jeans');
INSERT INTO `productos` VALUES ('43', 'Mireya', 'Pantalon', 'Mediana', 'Dama', '250', '3', 'Pantalon43.jpg', 'Pantalon');
INSERT INTO `productos` VALUES ('44', 'Mireya', 'Pantalon', 'Chica', 'Dama', '250', '7', 'Pantalon44.jpg', 'Pantalon');
INSERT INTO `productos` VALUES ('45', 'Holister', 'Pantalon', 'Grande', 'Dama', '200', '5', 'Pantalon45.jpg', 'Pantalon');
INSERT INTO `productos` VALUES ('46', 'sara', 'Vestido', 'Mediana', 'Dama', '300', '3', 'Vestido46.jpg', 'Vestido');
INSERT INTO `productos` VALUES ('47', 'Holister', 'Vestido', 'Grande', 'Dama', '157', '7', 'Vestido47.jpg', 'Vestido');
INSERT INTO `productos` VALUES ('48', 'Areopostal', 'Vestido', 'Mediana', 'Dama', '150', '5', 'Vestido48.jpg', 'Vestido');
INSERT INTO `productos` VALUES ('49', 'Holister', 'Falda', 'Mediana', 'Dama', '120', '4', 'Falda49.jpg', 'Falda');
INSERT INTO `productos` VALUES ('50', 'atletica', 'Blusa', 'Mediana', 'Dama', '20', '10', 'Blusa50.jpg', 'articulo muy a la moda con la mejor tecnologia y confort');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proveedores
-- ----------------------------
INSERT INTO `proveedores` VALUES ('1', 'polo', 'tejerias 7 huetamo', '1234567', 'polo@hotmail.com', 'Playera', '5');
INSERT INTO `proveedores` VALUES ('6', 'Jesus Guerrero Rojas', 'huetamo michoacan', '12242', 'jark@hotmail.com', 'Accesorios', '100');
INSERT INTO `proveedores` VALUES ('7', 'Rosio Varona Chamu', 'huetamo michoacan', '1234567', 'jertdark@gmail.com', 'Blusas', '5');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sugerencias
-- ----------------------------
INSERT INTO `sugerencias` VALUES ('9', '22', '49', 'r');

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('10', 'Jose Guadalupe Valle Avellaneda', 'cliente', '2014-12-12', 'Masculino', 'lupe', 'play_boy_valle@live.com.mx', '*9219FFCF72B76950ADF3E91DB8DCB6836D0F59A4', '1234567', 'erongaricuaro 7 Tejerias huetamo Michoacán');
INSERT INTO `usuarios` VALUES ('22', 'javier arana', 'admin', '2014-12-09', 'Masculino', 'javier', 'jertdark@gmail.com', '*24A9090E99BCAF60D0E6D2972E9C7C636FD8ED9B', '1234567', 'erongaricuaro 3 tejerias huetamo Michoacán   ');
INSERT INTO `usuarios` VALUES ('23', 'elizabeth cruz', 'admin', '2014-12-14', 'Femenino', 'bety', 'betty_cruzz@hotmail.com', '*FAD6A3BC09BBA2A9FC6FE99F0158A1975832DC00', '014351037333', 'erongaricuaro 7 tejerias huetamo Michoacán');
INSERT INTO `usuarios` VALUES ('24', 'Jesus Guerrero Rojas', 'admin', '2014-12-09', 'Masculino', 'jesman', 'jark@hotmail.com', '*5141719707587634957A063F98F9E17116D8DEE2', '1234567', 'erongaricuaro 7 tejerias huetamo Michoacán  ');
INSERT INTO `usuarios` VALUES ('25', 'Rosio Varona Chamu', 'admin', '2014-12-10', 'Femenino', 'rosio', 'rosio.flakita.001@gmail.com', '*9B869B1FD5758BB46F688A1DBC7B2C9D7716C8C9', '1234567', 'erongaricuaro 7 tejerias huetamo Michoacán');
INSERT INTO `usuarios` VALUES ('26', 'Ana Iris Varona Chamu', 'cliente', '2014-12-17', 'Femenino', 'irisval', 'jark@hotmail.com', '*A4B6157319038724E3560894F7F932C8886EBFCF', '1234567', 'aurrera 7 centro huetamo Michoacán');
INSERT INTO `usuarios` VALUES ('27', 'Ana Iris Varona Chamu', 'cliente', '2014-12-17', 'Femenino', 'irisval', 'jark@hotmail.com', '*A4B6157319038724E3560894F7F932C8886EBFCF', '1234567', 'aurrera 7 centro huetamo Michoacán');

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
