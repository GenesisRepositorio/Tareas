CREATE TABLE PACIENTE(
IdPaciente  INT(3)  NOT NULL AUTO_INCREMENT PRIMARY KEY,
NombrePaciente VARCHAR(30) DEFAULT NULL,
Previsión       VARCHAR(10) DEFAULT NULL,
Direccion       VARCHAR(30) DEFAULT NULL,
Patologias      VARCHAR(15)   DEFAULT NULL,
FichaAtencion INT(4)  NOT NULL,
ImgPaciente    VARCHAR(30) DEFAULT NULL,
Fono		VARCHAR(10) DEFAULT NULL,
Correo		VARCHAR(15) DEFAULT NULL,
Alergias	VARCHAR(20) DEFAULT NULL
)

CREATE TABLE MEDICO(
IdMedico  INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
NombreMedico  VARCHAR(30) DEFAULT NULL,
ApellidoMedico VARCHAR(30) DEFAULT NULL,
Especialidad   VARCHAR(20) DEFAULT NULL,
Telefono       VARCHAR(10) DEFAULT NULL,
Correo		VARCHAR(15) DEFAULT NULL
)

CREATE TABLE PATOLOGIA(
IdPatologia  INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
NombrePatologia VARCHAR(30) DEFAULT NULL,
Descripcion	TEXT,
IdMedico	INT(3) NOT NULL,
Tratamiento	TEXT,
ImgPatologia	VARCHAR(30) DEFAULT NULL

)

INSERT INTO MEDICO VALUES(1,'Juan','Merino','cirujano',2234756,'juan@miu.com');
INSERT INTO MEDICO VALUES(2,'Pedro','Bustamante','cirujano',524187452,'pedromi@gmail.com');
INSERT INTO MEDICO VALUES(3,'Maria','Garcia','cirujano',542454154,'mariam@hotmail.com');
INSERT INTO MEDICO VALUES(4,'Jose','Cal','cirujano',965856585,'jose@miu.com');
INSERT INTO MEDICO VALUES(5,'Estefan','Merino','Dentista',2234756,'juan@miu.com');
INSERT INTO MEDICO VALUES(6,'Marco','Merino','Dentista',2234756,'juan@miu.com');
INSERT INTO MEDICO VALUES(7,'Eduardo','Merino','Dentista',2234756,'juan@miu.com');
INSERT INTO MEDICO VALUES(8,'Rodrigo','Merino','Dentista',2234756,'juan@miu.com');
INSERT INTO MEDICO VALUES(9,'Celsa','Merino','Oftalmologo',2234756,'juan@miu.com');
INSERT INTO MEDICO VALUES(10,'Javier','Merino','Oftalmologo',2234756,'juan@miu.com');
INSERT INTO MEDICO VALUES(11,'Jun','Merino','Oftalmologo',2234756,'juan@miu.com');
INSERT INTO MEDICO VALUES(12,'Jn','Merino','Oftalmologo',2234756,'juan@miu.com');
INSERT INTO MEDICO VALUES(13,'ian','Merino','Obstetra',2234756,'juan@miu.com');
INSERT INTO MEDICO VALUES(14,'Mark','Merino','Obstetra',2234756,'juan@miu.com');
INSERT INTO MEDICO VALUES(15,'Molly','Merino','Obstetra',2234756,'juan@miu.com');
INSERT INTO MEDICO VALUES(16,'Ana','Merino','Obstetra',2234756,'juan@miu.com');


INSERT INTO PATOLOGIA VAlUES(1,'Extraccion Molar','',1,'extraccion','img/hqdefault.jpg');
INSERT INTO PATOLOGIA VAlUES(2,'Embolia Pulmonar','pulmon',4,'operacion','img/hqdefault.jpg');
INSERT INTO PATOLOGIA VAlUES(3,'eccema ','costras en la piel',13,'crema en la piel','img/hqdefault.jpg');
INSERT INTO PATOLOGIA VAlUES(4,' Cataratas','cristalino empañado',9,'operacion','img/hqdefault.jpg');
INSERT INTO PATOLOGIA VAlUES(5,'Conjuntivitis ','ojos con pus',10,'gotas','img/hqdefault.jpg');
INSERT INTO PATOLOGIA VAlUES(6,'Actismatismo','vision borrosa',11,'lentes','img/hqdefault.jpg');


INSERT INTO PACIENTE VALUES(1,'Maria','Fonasa','los nogales 1123','cataratas','123','','582545454','maria@patta.com','huevo');
SELECT * FROM MEDICO;


