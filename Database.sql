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
INSERT INTO Users (Users, Nombre, Apellido, Correo, Contraseña, Telefono, Num_ident) VALUES
('jdoe', 'John', 'Doe', 'john.doe@example.com', 'password123', '1234567890', 'ID123456789'),
('asmith', 'Anna', 'Smith', 'anna.smith@example.com', 'password456', '0987654321', 'ID987654321'),
('bwilliams', 'Brian', 'Williams', 'brian.williams@example.com', 'pass789', '1122334455', 'ID1122334455'),
('cmiller', 'Chris', 'Miller', 'chris.miller@example.com', 'wordpass', '6677889900', 'ID6677889900'),
('djohnson', 'David', 'Johnson', 'david.johnson@example.com', 'mypassword', '5544332211', 'ID5544332211'),
('eflores', 'Emily', 'Flores', 'emily.flores@example.com', 'emilypass', '4433221100', 'ID4433221100'),
('fmartin', 'Frank', 'Martin', 'frank.martin@example.com', 'frankpass', '2211334455', 'ID2211334455'),
('ghernandez', 'Grace', 'Hernandez', 'grace.hernandez@example.com', 'grace1234', '6677008899', 'ID6677008899'),
('hlopez', 'Hannah', 'Lopez', 'hannah.lopez@example.com', 'hannahpass', '3344556677', 'ID3344556677'),
('ijones', 'Ian', 'Jones', 'ian.jones@example.com', 'ianpass', '7766554433', 'ID7766554433');


