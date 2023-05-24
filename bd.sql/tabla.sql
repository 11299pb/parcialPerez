create table insumos(
    insumos_id serial not null,
    insumos_nombre varchar(50) not null,
    insumos_existencia integer(50) not null,
    insumos_marca varchar(50) not null,
    insumos_proveedor varchar(50) not null,
    insumos_precio varchar(50) not null,
    primary key (insumos_id)
);