/* scrpit final bda */
CREATE DATABASE torneo_ping_pong_bogota;

/*se cambian a la base de datos nueva*/
CREATE TABLE rol (
 id_rol SERIAL NOT NULL PRIMARY KEY,
 nombre varchar(100)
);

CREATE TABLE medio_comunicacion (
 id_medio SERIAL NOT NULL PRIMARY KEY,
 nombre varchar(100)
);

CREATE TABLE hotel (
 id_hotel SERIAL NOT NULL PRIMARY KEY,
 nombre VARCHAR(255),
 direccion VARCHAR(255)
);

CREATE TABLE sala (
 id_sala SERIAL NOT NULL PRIMARY KEY,
 id_hotel INTEGER,
 capacidad INTEGER,
 FOREIGN KEY (id_hotel) REFERENCES hotel(id_hotel)
);

CREATE TABLE medios_sala (
 id_sala INTEGER,
 id_medio INTEGER,
 PRIMARY KEY (id_sala, id_medio),
 FOREIGN KEY (id_sala) REFERENCES sala(id_sala),
 FOREIGN KEY (id_medio) REFERENCES medio_comunicacion(id_medio)
);

CREATE TABLE ciudad (
 id_ciudad SERIAL NOT NULL PRIMARY KEY,
 nombre VARCHAR(255),
 num_clubes INTEGER
);

CREATE TABLE participante (
 numero_asociado SERIAL NOT NULL PRIMARY KEY,
 nombre VARCHAR(255),
 direccion VARCHAR(255),
 nivel_de_juego INT,
 correo VARCHAR(255),
 clave VARCHAR(255),
 id_ciudad INTEGER,
 id_rol INTEGER,
 FOREIGN KEY (id_ciudad) REFERENCES ciudad(id_ciudad),
 FOREIGN KEY (id_rol) REFERENCES rol(id_rol)
);

CREATE SEQUENCE num_asociado
INCREMENT BY 1
START WITH 20000;

ALTER TABLE participante 
ALTER COLUMN numero_asociado 
SET DEFAULT nextval('num_asociado');

CREATE TABLE hospedaje (
 id_hotel INTEGER,
 numero_asociado INTEGER,
 fecha_inicio TIMESTAMP,
 fecha_fin TIMESTAMP,
 PRIMARY KEY (id_hotel, numero_asociado),
 FOREIGN KEY (id_hotel) REFERENCES hotel(id_hotel),
 FOREIGN KEY (numero_asociado) REFERENCES participante(numero_asociado)
);

CREATE TABLE telefono_hotel (
 id_hotel INTEGER NOT NULL,
 telefono varchar(20),
 PRIMARY KEY (id_hotel,telefono),
 FOREIGN KEY (id_hotel) REFERENCES hotel(id_hotel)
);

CREATE TABLE telefono_participante (
 numero_asociado INTEGER NOT NULL,
 telefono varchar(20),
 PRIMARY KEY (numero_asociado,telefono),
 FOREIGN KEY (numero_asociado) REFERENCES participante(numero_asociado)
);

CREATE TABLE campeonato (
 id_campeonato SERIAL NOT NULL PRIMARY KEY,
 nombre VARCHAR(255),
 id_ciudad INTEGER,
 numero_asociado_ganador INTEGER,
 FOREIGN KEY (id_ciudad) REFERENCES ciudad(id_ciudad),
 FOREIGN KEY (numero_asociado_ganador) REFERENCES participante(numero_asociado)
);

CREATE TABLE campeonatos_asistidos (
 numero_asociado INTEGER,
 id_campeonato INTEGER,
 nombre_rol VARCHAR(100),
 PRIMARY KEY (numero_asociado, id_campeonato),
 FOREIGN KEY (numero_asociado) REFERENCES participante(numero_asociado),
 FOREIGN KEY (id_campeonato) REFERENCES campeonato(id_campeonato)
);

CREATE TABLE partido (
 id_partido SERIAL NOT NULL PRIMARY KEY,
 fecha_de_juego TIMESTAMP,
 id_sala INTEGER,
 num_entradas_vendidas INTEGER,
 FOREIGN KEY (id_sala) REFERENCES sala(id_sala)
);

CREATE TABLE resultado_partido (
 id_partido INTEGER,
 numero_asociado_juez INTEGER,
 numero_asociado_jugador1 INTEGER,
 numero_asociado_jugador2 INTEGER,
 numero_asociado_ganador INTEGER,
 marcador VARCHAR(10),
 comenatrios TEXT,
 PRIMARY KEY (id_partido, numero_asociado_juez, numero_asociado_jugador1, numero_asociado_jugador2),
 FOREIGN KEY (id_partido) REFERENCES partido(id_partido)
);

/*inserts*/
INSERT INTO rol(nombre) VALUES ('Admin'), ('Organizador'), ('Juez'), ('Jugador');
INSERT INTO medio_comunicacion (nombre) VALUES ('TV'), ('Proyector'), ('Computador'), ('Camaras'), ('Microfono');
INSERT INTO hotel (nombre, direccion) 
VALUES ('B de BAKATA', 'Carrera 7A # 46-75'), 
('Hotel Atrio', 'Carrera 8A #100-54'), 
('Hotel Camaron', 'Transversal 8 # 6A BIS - 54'),
('Hostal Capicua', 'Avenida Gaitan #56-76'),
('Hotel Capsulas Urbanas', 'Aeropuerto el Dorado');
INSERT INTO sala (id_hotel, capacidad) VALUES 
(1,40),(1,30),(1,35),(2,60),(2,70),(2,40),(3,60),(3,10),(4,60),(4,100),(5,200),(5,500);
INSERT INTO medios_sala VALUES (1,1),(1,2),(1,4),(1,5),
(2,1),(2,3),(2,4),(2,5),
(3,1),(3,2),(3,3),(3,4),(3,5),
(4,1),(4,3),(4,4),(4,5),
(5,1),(5,2),(5,3),(5,4),(5,5),
(6,1),(6,2),(6,4),(6,5),
(7,1),(7,2),(7,3),(7,5),
(8,1),(8,2),(8,4),(8,5),
(9,1),(9,2),(9,3),(9,4),(9,5),
(10,1),(10,3),(10,4),(10,5),
(11,1),(11,2),(11,3),(11,5),
(12,1),(12,2),(12,3),(12,4);
INSERT INTO ciudad (nombre, num_clubes) VALUES
('Cali',4),('B/Manga',4),('Cucuta',1),('Bogota D.C.',14),
('Caldas',7),('Mirada',6),('Ricaurte',1),('Medellin',8);
INSERT INTO participante (nombre,direccion,nivel_de_juego,correo,clave,id_ciudad,id_rol)
VALUES ('Juane Freio', 'Calle 9 # 38 - 75', 5, 'juaneFrio@lbpp.com','clave',1,4),
('Crespo Young', 'Calle 8 # 67 - 75', 1, 'crespoYong@lbpp.com','clave',2,4),
('Camilo Cruz', 'Carrera 6 # 34 - 56', 2, 'camiloCruz@lbpp.com','clave',3,4),
('Pedro Landia', 'Calle 6 # 56 - 6', 3, 'pedroLaia@lbpp.com','clave',4,4),
('July Combita', 'Calle 8 # 45 - 78', 4, 'julyCota@lbpp.com','clave',5,4),
('Julian Grande', 'Calle 90 # 67A - 75', 5, 'julianGrde@lbpp.com','clave',6,4),
('Rocio Gehirn', 'Carrera 23 # 66 - 56', 5, 'rocioGern@lbpp.com','clave',7,4),
('Daniel Torres', 'Calle 32 # 8 - 78', 6, 'danielToes@lbpp.com','clave',8,4),
('Paco Rabone', 'Carrera 33 # 3 - 89', 8, 'pacoRane@lbpp.com','clave',8,3),
('Metro Metropolis', 'Calle 45 # 367 - 897', 9, 'metroMeis@lbpp.com','clave',4,3),
('Argento Cristo', 'Carrera 45 # 386 - 78', 10, 'argentoCrto@lbpp.com','clave',5,2),
('Mariana Rosa', 'Calle 99 # 38 - 75', 5, 'marianaRosa@lbpp.com','clave',1,4),
('Sergio Dominguez', 'Calle 80 # 670 - 75', 1, 'sergioDoez@lbpp.com','clave',6,4),
('Camilo Diaz', 'Carrera 60 # 34 - 56', 2, 'camiloDiaz@lbpp.com','clave',3,4),
('Peter Cuervo', 'Calle 6 # 56 - 6', 3, 'peterCuvo@lbpp.com','clave',4,4),
('Sara Diaz', 'Calle 887 # 45 - 78', 4, 'saraDiaz@lbpp.com','clave',5,4),
('Cesar Curzarao', 'Calle 90 # 67A - 75', 5, 'cesarCuao@lbpp.com','clave',6,4),
('Emilia Zambrano', 'Carrera 23 # 66 - 56', 5, 'emiliaZano@lbpp.com','clave',7,4),
('Fede Valde', 'Carrera 232 # 66 - 56', 5, 'fedeVade@lbpp.com','clave',7,4);
INSERT INTO hospedaje VALUES 
(1,20000,'2022-12-06 18:48:37','2022-12-15 18:48:37'),
(2,20002,'2022-12-06 18:48:37','2022-12-15 18:48:37'),
(3,20003,'2022-12-06 18:48:37','2022-12-15 18:48:37'),
(4,20004,'2022-12-06 18:48:37','2022-12-15 18:48:37'),
(5,20005,'2022-12-06 18:48:37','2022-12-15 18:48:37'),
(1,20006,'2022-12-06 18:48:37','2022-12-15 18:48:37'),
(2,20007,'2022-12-06 18:48:37','2022-12-15 18:48:37'),
(3,20008,'2022-12-06 18:48:37','2022-12-15 18:48:37'),
(4,20008,'2022-12-06 18:48:37','2022-12-15 18:48:37'),
(5,20009,'2022-12-06 18:48:37','2022-12-15 18:48:37'),
(1,20010,'2022-12-06 18:48:37','2022-12-15 18:48:37'),
(1,20011,'2022-12-06 18:48:37','2022-12-15 18:48:37'),
(2,20012,'2022-12-06 18:48:37','2022-12-15 18:48:37'),
(1,20013,'2022-12-06 18:48:37','2022-12-15 18:48:37'),
(3,20014,'2022-12-06 18:48:37','2022-12-18 18:48:37'),
(4,20015,'2022-12-06 18:48:37','2022-12-19 18:48:37'),
(5,20016,'2022-12-06 18:48:37','2022-12-18 18:48:37'),
(1,20017,'2022-12-06 18:48:37','2022-12-29 18:48:37'),
(2,20018,'2022-12-06 18:48:37','2022-12-20 18:48:37'),
(4,20001,'2022-12-06 18:48:37','2022-12-21 18:48:37');
INSERT INTO telefono_hotel VALUES
(1,'6015673456'),(1,'6015673457'),
(2,'60145473456'),(2,'6015656757'),
(3,'6015673234'),
(4,'6015673566'),(1,'2345678901'),(4,'6017673456'),
(5,'6015673456');
INSERT INTO telefono_participante VALUES
(20009,'6015673456'),(20002,'3406566777'),
(20002,'3132233322'),(20003,'3242423424'),
(20004,'6034555669'),
(20005,'3245677899'),(20007,'6023545555'),(20008,'6053443455'),
(20006,'6015673456');
INSERT INTO campeonato (nombre, id_ciudad, numero_asociado_ganador) VALUES 
('PP 1', 3, 20003),('Ping Pong B/manga', 2, 20007),('New PP tour', 5, 20010);
INSERT INTO campeonatos_asistidos VALUES 
(20003,1,4),(20002,1,4),(20004,1,4),(20005,1,3),(20007,1,4),(20011,1,3),
(20003,2,4),(20002,2,4),(20004,2,3),(20005,2,3),(20007,2,4),(20011,2,4),
(20003,3,3),(20002,3,3),(20004,3,4),(20005,3,4),(20007,3,4),(20010,3,4);
INSERT INTO partido (fecha_de_juego, id_sala, num_entradas_vendidas) VALUES
('2022-12-12 22:00:00', 4, 50),('2022-12-12 23:00:00', 5, 52),
('2022-12-13 22:00:00', 7, 30),('2022-12-13 23:00:00', 9, 52),
('2022-12-13 22:00:00', 8, 5),('2022-12-14 23:00:00', 12, 400),
('2022-12-14 22:00:00', 8, 5),('2022-12-15 23:00:00', 12, 400);
INSERT INTO resultado_partido VALUES 
(1,20009,20000,20002,20000,'15-13','El ganador empezo con ventaja'),
(2,20010,20003,20005,20003,'15-10','Gran juego limpio del Camilo'),
(3,20009,20004,20006,20006,'14-15','Grande julian'),
(4,20010,20007,20008,20007,'10-15','Increible inicio'),
(5,20010,20012,20013,20012,'15-13','Primer partido pero ya va con cansancio'),
(6,20009,20014,20015,20015,'12-15','No comentarios'),
(7,20010,20016,20017,20016,'15-13','El ganador puede se la revelacion'),
(8,20009,20019,20018,20019,'15-10','Ultimo partido de octavos');