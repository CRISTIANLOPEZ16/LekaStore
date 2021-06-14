CREATE TABLE `producto` (
`id` int(10) NOT NULL AUTO_INCREMENT,
`nombre` varchar(10) NOT NULL,
`descripcion` varchar(50) NOT NULL,
`precio` int(10) NOT NULL,
`cantidadDisponible` int(10) NULL,
PRIMARY KEY (`id`) 
);
CREATE TABLE `persona` (
`id` int(10) NOT NULL AUTO_INCREMENT,
`nombre` varchar(20) NOT NULL,
`apellido` varchar(20) NOT NULL,
`fechaNacimiento` date NOT NULL,
`cedula` int(15) NOT NULL,
`celular` int(11) NOT NULL,
`email` varchar(30) NOT NULL,
`clave` varchar(15) NOT NULL,
`tipoPersona` varchar(15) NOT NULL,
PRIMARY KEY (`id`) 
);
CREATE TABLE `cliente` (
`idCliente` int(10) NOT NULL,
`direccion` varchar(50) NOT NULL
);
CREATE TABLE `empleado` (
`idEmpleado` int(10) NOT NULL,
`fechaEmpleo` date NOT NULL
);
CREATE TABLE `tipoPersona` (
`nombre` varchar(15) NOT NULL,
`descripcion` varchar(20) NOT NULL,
PRIMARY KEY (`nombre`) 
);
CREATE TABLE `pedido` (
`idPedido` int(10) NOT NULL AUTO_INCREMENT,
`idCliente` int(10) NOT NULL,
`fechaPedido` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
`totalPedido` int(20) NOT NULL,
`descuento` int(10) NOT NULL,
`total` int(20) NOT NULL,
PRIMARY KEY (`idPedido`) 
);
CREATE TABLE `factura` (
`idFactura` int(10) NOT NULL AUTO_INCREMENT,
`idEmpleado` int(10) NOT NULL,
`fechaFactura` date NOT NULL,
`totalFactura` int(30) NOT NULL,
PRIMARY KEY (`idFactura`) 
);
CREATE TABLE `listaProductosPedido` (
`idProducto` int(10) NOT NULL,
`idPedido` int(10) NOT NULL,
`cantidad` int(10) NOT NULL,
PRIMARY KEY (`idProducto`, `idPedido`) 
);
CREATE TABLE `listaProductosFactura` (
`idProducto` int(10) NOT NULL,
`idFactura` int(10) NOT NULL,
`cantidad` int(5) NOT NULL,
PRIMARY KEY (`idProducto`, `idFactura`) 
);
CREATE TABLE `favorito` (
`idCliente` int(10) NOT NULL,
`idProducto` int(10) NOT NULL,
`fecha` datetime NULL ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE `stock` (
`idProducto` int(10) NOT NULL,
`idProveedor` int(10) NOT NULL,
`cantidadComprada` int(30) NOT NULL,
`fechaCompra` date NOT NULL,
PRIMARY KEY (`idProducto`, `idProveedor`, `fechaCompra`) 
);
CREATE TABLE `proveedor` (
`id` int(10) NOT NULL AUTO_INCREMENT,
`nombre` varchar(20) NOT NULL,
`tipoProducto` varchar(20) NOT NULL,
PRIMARY KEY (`id`) 
);
CREATE TABLE `bisuteria` (
`idProducto` int(10) NOT NULL,
`funcionalidad` varchar(50) NOT NULL
);
CREATE TABLE `maquillaje` (
`idProducto` int(10) NOT NULL,
`fechaVencimiento` date NOT NULL,
`marc` varchar(20) NOT NULL
);
CREATE TABLE `perfumeria` (
`idProducto` int(10) NOT NULL,
`marca` varchar(20) NOT NULL,
`olor` varchar(50) NOT NULL
);
CREATE TABLE `accesorio` (
`idProducto` int(10) NOT NULL,
`material` varchar(50) NOT NULL,
`color` varchar(10) NULL
);
CREATE TABLE `descuento` (
`id` int(10) NOT NULL AUTO_INCREMENT,
`decripcion` varchar(20) NOT NULL,
`porcentajeDescuento` int(10) NOT NULL,
PRIMARY KEY (`id`) 
);
CREATE TABLE `peluche` (
`idProducto` int(10) NOT NULL,
`textura` varchar(20) NOT NULL,
`color` varchar(20) NOT NULL
);
CREATE TABLE `sup` (
`idSup` int(10) NOT NULL
);
CREATE TABLE `listaEmpleado` (
`idEmpleador` int(10) NOT NULL,
`idEmpleado` int(10) NOT NULL,
`idLocal` int(10) NOT NULL,
PRIMARY KEY (`idEmpleador`, `idEmpleado`, `idLocal`) 
);
CREATE TABLE `local` (
`id` int(10) NOT NULL,
`direccion` varchar(30) NOT NULL,
PRIMARY KEY (`id`) 
);

ALTER TABLE `cliente` ADD CONSTRAINT `cliente_persona` FOREIGN KEY (`idCliente`) REFERENCES `persona` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `persona` ADD CONSTRAINT `persona_tipoPersona` FOREIGN KEY (`tipoPersona`) REFERENCES `tipoPersona` (`nombre`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `empleado` ADD CONSTRAINT `empleado_persona` FOREIGN KEY (`idEmpleado`) REFERENCES `persona` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `pedido` ADD CONSTRAINT `pedido_cliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `pedido` ADD CONSTRAINT `pedido_descuento` FOREIGN KEY (`descuento`) REFERENCES `descuento` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `factura` ADD CONSTRAINT `factura_empleado` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `listaProductosPedido` ADD CONSTRAINT `lpp_pedido` FOREIGN KEY (`idPedido`) REFERENCES `pedido` (`idPedido`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `listaProductosFactura` ADD CONSTRAINT `lpf_factura` FOREIGN KEY (`idFactura`) REFERENCES `factura` (`idFactura`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `listaProductosFactura` ADD CONSTRAINT `lpf_producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `listaProductosPedido` ADD CONSTRAINT `lpp_producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `stock` ADD CONSTRAINT `stock_producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `stock` ADD CONSTRAINT `stock_proveedor` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `maquillaje` ADD CONSTRAINT `reposteria_producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `bisuteria` ADD CONSTRAINT `visuteria_producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `perfumeria` ADD CONSTRAINT `ropa_producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `accesorio` ADD CONSTRAINT `accesorio_producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `favorito` ADD CONSTRAINT `favorito_cliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `favorito` ADD CONSTRAINT `favorito_producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `peluche` ADD CONSTRAINT `peluche_producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `sup` ADD CONSTRAINT `sup_persona` FOREIGN KEY (`idSup`) REFERENCES `persona` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `listaEmpleado` ADD CONSTRAINT `le_sup` FOREIGN KEY (`idEmpleador`) REFERENCES `sup` (`idSup`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `listaEmpleado` ADD CONSTRAINT `le_empleado` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `listaEmpleado` ADD CONSTRAINT `le_local` FOREIGN KEY (`idLocal`) REFERENCES `local` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

