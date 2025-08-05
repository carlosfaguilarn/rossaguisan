CREATE TABLE acredito_acredito.productos (
	id BIGINT auto_increment NOT NULL PRIMARY KEY,
	descripcion varchar(250) NOT NULL,
	costo DECIMAL NOT NULL,
	precio DECIMAL NOT NULL,
	tipo BIGINT NOT NULL,
	activo BOOL NOT NULL
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;