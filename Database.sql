USE Db_Developerjuan;
CREATE TABLE Users(
Id_User INT primary KEY AUTO_INCREMENT,
Users VARCHAR (20) ,
Nombre VARCHAR (20) NOT NULL,
Apellido VARCHAR (20) NOT NULL,
Correo VARCHAR (20) NOT NULL,
Contraseña VARCHAR (20) NOT NULL,
Telefono INT (12) NOT NULL,
Num_ident INT (20) NOT NULL
);

SELECT * FROM Users;


