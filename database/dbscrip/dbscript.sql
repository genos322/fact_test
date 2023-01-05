create table tventa(
idVenta varchar(13),
idProducto varchar(13),
comprobante varchar(15),
typeClient varchar(20),
dni varchar(8),
ruc varchar(15),
razonSocial varchar(200),
nameClient varchar(100),
lastName varchar(100),
addressClient varchar(100),
fechaEmision datetime,
igv decimal(10,2),
subTotal decimal(10,2),
priceTotal decimal(10,2),
created_at datetime ,
updated_at datetime,
primary key (idVenta)
);

create table tproducto(
idProducto varchar(8),
nameProduct varchar(150),
priceUnit decimal(10,2),
stock int,
created_at datetime,
updated_at datetime,
primary key (idProducto)
);