CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

CREATE TABLE coches (
id          INT (10) AUTO_INCREMENT NOT NULL,
modelo      VARCHAR (100) NOT NULL,
marca       VARCHAR (50),
precio      INT (20) NOT NULL,
stock       INT (255) NOT NULL, 

CONSTRAINT pk_coches PRIMARY KEY(id)
) ENGINE = InnoDB;


CREATE TABLE grupos (
id          INT (10) AUTO_INCREMENT NOT NULL,
nombre      VARCHAR (100) NOT NULL,
ciudad      VARCHAR (100), 

CONSTRAINT pk_grupos PRIMARY KEY(id)
) ENGINE = InnoDB;


CREATE TABLE vendedores (
id          INT (10) AUTO_INCREMENT NOT NULL,
grupo_id    INT (10) NOT NULL,
jefe        INT (10), 
nombre      VARCHAR (100) NOT NULL ,
apellidos   VARCHAR (150),
cargo       VARCHAR (50),
fecha_alta  DATE,
sueldo      FLOAT (20, 2),
comision    FLOAT (10, 2),

CONSTRAINT pk_vendedores PRIMARY KEY(id),
CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
) ENGINE = InnoDB;


CREATE TABLE clientes (
id          INT (10) AUTO_INCREMENT NOT NULL,
vendedor_id INT (10),
nombre      VARCHAR (150) NOT NULL,
ciudad      VARCHAR (100),
gastado     FLOAT (50, 2),
fecha       DATE, 

CONSTRAINT pk_clientes PRIMARY KEY(id),
CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
) ENGINE = InnoDB;

CREATE TABLE encargos (
id          INT (10) AUTO_INCREMENT NOT NULL,
cliente_id  INT (10) NOT NULL,
coche_id    INT (10) NOT NULL,
cantidad    INT (100),
fecha       DATE,

CONSTRAINT pk_encargos PRIMARY KEY(id),
CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
) ENGINE = InnoDB;


#RELLENAR LA BASE DE DATOS CON INFORMACIÓN

#COCHES

INSERT INTO coches VALUES (NULL, 'Renault Clio', 'Renault', 12000, 13);
INSERT INTO coches VALUES (NULL, 'Seat Panda', 'Seat', 10000, 10);
INSERT INTO coches VALUES (NULL, 'Mercedes Ranchera', 'Mercedes Benz', 32000, 24);
INSERT INTO coches VALUES (NULL, 'Porche Cayene', 'Porche', 65000, 5);
INSERT INTO coches VALUES (NULL, 'Lambo Aventador', 'Lamborghini', 170000, 2);
INSERT INTO coches VALUES (NULL, 'Ferrari Spider', 'Ferrari', 245000, 80);

#GRUPOS

INSERT INTO grupos VALUES (NULL, 'Vendedores A', 'Madrid');
INSERT INTO grupos VALUES (NULL, 'Vendedores B', 'Madrid');
INSERT INTO grupos VALUES (NULL, 'Directores mecanicos', 'Madrid');
INSERT INTO grupos VALUES (NULL, 'Vendedores A', 'Barcelona');
INSERT INTO grupos VALUES (NULL, 'Vendedores B', 'Barcelona');
INSERT INTO grupos VALUES (NULL, 'Vendedores C', 'Valencia');
INSERT INTO grupos VALUES (NULL, 'Vendedores A', 'Bilbao');
INSERT INTO grupos VALUES (NULL, 'Vendedores B', 'Pamplona');
INSERT INTO grupos VALUES (NULL, 'Vendedores C', 'Santiago de Compostela');

#VENDEDORES

INSERT INTO vendedores VALUES (NULL, 1, null, 'David', 'Lopez', 'Responsable de tienda', CURDATE(), 30000, 4);
INSERT INTO vendedores VALUES (NULL, 1, 1, 'Fran', 'Martinez', 'Ayudante en tienda', CURDATE(), 23000, 2);
INSERT INTO vendedores VALUES (NULL, 2, null, 'Nelson', 'Sanchez', 'Responsable de tienda', CURDATE(), 38000, 5);
INSERT INTO vendedores VALUES (NULL, 2, 3, 'Jesus', 'Lopez', 'Ayudante en tienda', CURDATE(), 12000, 6);
INSERT INTO vendedores VALUES (NULL, 3, null, 'Victor', 'Lopez', 'Mecanico en jefe', CURDATE(), 50000, 2);
INSERT INTO vendedores VALUES (NULL, 4, null, 'Antonio', 'Lopez', 'Vendedor de recambios', CURDATE(), 13000, 8);
INSERT INTO vendedores VALUES (NULL, 5, null, 'Salvador', 'Lopez', 'Vendedor experto', CURDATE(), 60000, 2);
INSERT INTO vendedores VALUES (NULL, 6, null, 'Joaquin', 'Lopez', 'Ejecutivo de cuentas', CURDATE(), 80000, 1);
INSERT INTO vendedores VALUES (NULL, 6, 8, 'Luis', 'Lopez', 'Ayudante en tienda', CURDATE(), 10000, 10);


#CLIENTES

INSERT INTO clientes VALUES (NULL, 1, 'Construcciones Diaz Inc', 'Alcobendas', 24000, CURDATE());
INSERT INTO clientes VALUES (NULL, 1, 'Fruteria Antonia Inc', 'Fuelabrada', 40000, CURDATE());
INSERT INTO clientes VALUES (NULL, 1, 'Imprenta Martinez Inc', 'Barcelona', 32000, CURDATE());
INSERT INTO clientes VALUES (NULL, 1, 'Jesus Colchones Inc', 'El Prat', 96000, CURDATE());
INSERT INTO clientes VALUES (NULL, 1, 'Bar Pepe Inc', 'Valencia', 170000, CURDATE());
INSERT INTO clientes VALUES (NULL, 1, 'Tienda PC Inc', 'Murcia', 245000, CURDATE());


#ENCARGOS

INSERT INTO encargos VALUES (NULL, 1, 1, 2, CURDATE());
INSERT INTO encargos VALUES (NULL, 2, 2, 4, CURDATE());
INSERT INTO encargos VALUES (NULL, 3, 3, 1, CURDATE());
INSERT INTO encargos VALUES (NULL, 4, 3, 3, CURDATE());
INSERT INTO encargos VALUES (NULL, 5, 5, 1, CURDATE());
INSERT INTO encargos VALUES (NULL, 6, 6, 1, CURDATE());