create table tallas
(
id bigserial NOT NULL,
numero integer NOT NULL,
PRIMARY KEY (id)
);

create table tipos
(
id bigserial NOT NULL,
nombre text NOT NULL,  
PRIMARY KEY (id)
);

create table categorias
(
id bigserial NOT NULL,
nombre text NOT NULL,
PRIMARY KEY (id)    
);

create table tipocategorias
(
id bigserial NOT NULL,
nu_tipo bigint NOT NULL,
nu_categoria bigint NOT NULL,

FOREIGN KEY (nu_tipo) REFERENCES tipos(id),
FOREIGN KEY (nu_categoria) REFERENCES categorias(id),
PRIMARY KEY (id)    
);

create table colores
(
id bigserial NOT NULL,
nombre text NOT NULL,
PRIMARY KEY (id)    
);

create table catalagos
(
id bigserial NOT NULL,
modelo integer NOT NULL,
nu_tipo integer NOT NULL,
nu_categoria bigint NOT NULL,    
nu_talla bigint NOT NULL,
nu_color bigint NOT NULL,    
precio integer NOT NULL,
imagen text NOT NULL,

FOREIGN KEY (nu_talla) REFERENCES tallas(id),
FOREIGN KEY (nu_tipo) REFERENCES tipos(id),    
FOREIGN KEY (nu_categoria) REFERENCES categorias(id), 
FOREIGN KEY (nu_color) REFERENCES colores(id),     
PRIMARY KEY (id)
);

create table clientes
(
id bigserial NOT NULL,
nombre text NOT NULL,
paterno text NOT NULL,
materno text NOT NULL,
direccion text,
telefono integer NOT NULL,
correo text,
usuario text NOT NULL,

PRIMARY KEY (id)
);