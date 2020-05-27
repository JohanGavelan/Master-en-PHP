CREATE TABLE usuarios(
ID int(255) AUTO_INCREMENT NOT NULL,    
nombre VARCHAR(100) NOT NULL,
apellidos VARCHAR(100) NOT NULL,
email VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
fecha DATE NOT NULL,
CONSTRAINT pk_usuarios PRIMARY KEY(ID),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE = InnoDb;

CREATE TABLE categorias (
ID int(255) AUTO_INCREMENT NOT NULL,
nombre VARCHAR(100) NOT NULL,
CONSTRAINT pk_categorias PRIMARY KEY(ID)  
)ENGINE = InnoDb;

CREATE TABLE entradas (
ID              int(255) AUTO_INCREMENT NOT NULL,
usuario_id      int(255) NOT NULL,
categoria_id    int(255) NOT NULL,
titulo          VARCHAR(255) NOT NULL,
descripcion     MEDIUMTEXT,
fecha           date NOT NULL,
CONSTRAINT pk_entradas PRIMARY KEY(ID),
CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(ID),
CONSTRAINT fk_entrada_categoria FOREIGN KEY (categoria_id) REFERENCES categorias(ID)
)ENGINE = InnoDb;  