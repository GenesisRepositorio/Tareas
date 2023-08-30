--  NOMBRE ALUMNO(A):

--  CREACION DE TABLAS (Ejecutar)

CREATE TABLE T_AFP
( codigoAFP     NUMBER(4,0) NOT NULL,
  nombreAFP     CHAR(14)    NOT NULL,
  comisionAFP   NUMBER(3,2) NOT NULL
);

CREATE TABLE T_COTIZANTE
( rut           CHAR(9)       NOT NULL,
  apellido1     VARCHAR2(15)  NOT NULL,
  apellido2     VARCHAR2(15)  NOT NULL,
  nombres       VARCHAR2(30)  NOT NULL,
  fechaNac      DATE          NOT NULL,
  genero        CHAR(1)       NOT NULL,
  codigoAFP     NUMBER(4,0)   NOT NULL,
  fondoCapital  NUMBER(9,0)   NOT NULL,
  tipoCotizante CHAR(1)       NOT NULL,
  tipoContrato  CHAR(2)       NOT NULL,
  codigoCom     NUMBER(5,0)   NOT NULL,
  situacion     NUMBER(1,0)   NOT NULL
);

CREATE TABLE T_COMUNA
( codigoCom     NUMBER(5,0)   NOT NULL,
  nombreCom     VARCHAR2(30)  NOT NULL,
  codigoReg     NUMBER(2,0)   NOT NULL
);

CREATE TABLE T_INVERSION
( codigoInv     NUMBER(10,0)  NOT NULL,
  numeroInv     NUMBER(1,0)   NOT NULL,
  rut           CHAR(9)       NOT NULL,
  tipoFondo     CHAR(1)       NOT NULL,
  porcentajeInv NUMBER(3,0)   NOT NULL,
  montoInv      NUMBER(9,0)   NOT NULL,
  fechaInv      DATE          NOT NULL,
  ejecutorInv   CHAR(2)       NOT NULL,
  estadoInv     NUMBER(1,0)   NOT NULL
);

--1. (05 puntos)  Establecer las CLAVES PRIMARIAS



--2. (05 puntos)  Establecer las  CLAVES FORANEAS



--3. (10 puntos)  Establecer la integridad de dominio para las siguientes columnas:
--                T_INVERSION.tipoFondo
--                T_INVERSION.porcentajeInv
--                T_INVERSION.estadoInv, valor por defecto 1.
--                T_COTIZANTE.fondoCapital
--                T_COTIZANTE.situacion




--  INSERCION DE DATOS (Ejecutar)

INSERT INTO T_AFP VALUES(1033, 'AFP CAPITAL',1.44);
INSERT INTO T_AFP VALUES(1003, 'AFP CUPRUM',1.44);
INSERT INTO T_AFP VALUES(1005, 'AFP HABITAT',1.27);
INSERT INTO T_AFP VALUES(1008, 'AFP PROVIDA',1.45);
INSERT INTO T_AFP VALUES(1032, 'AFP PLANVITAL',1.16);
INSERT INTO T_AFP VALUES(1034, 'AFP MODELO',0.77);
INSERT INTO T_AFP VALUES(1035, 'AFP UNO',0.69);

-- Todos los valores, excepto el nombre, son aleatorios y no reflejan la realidad
INSERT INTO T_COTIZANTE VALUES('111111111','CASTILLO','PONCE','CAMILA','15-07-1980','F',1033,28000000,'D','IN',02201,1); 
INSERT INTO T_COTIZANTE VALUES('222222222','SALAZAR','SILVA','ALONDRA','21-04-1995','F',1008,10000000,'D','IN',06101,3);   
INSERT INTO T_COTIZANTE VALUES('333333333','QUIROZ','TORO','FRANCISCA','08-10-1975','F',1034,10000000,'I','SR',07301,2);     
INSERT INTO T_COTIZANTE VALUES('444444444','VERDUGO','PEZOA','CAMILA','23-06-1985','F',1008,15000000,'I','SR',06205,1);    
INSERT INTO T_COTIZANTE VALUES('555555555','MACHUCA','MOLINA','JARED','14-11-2000','M',1034,4000000,'D','PF',04203,3);   
INSERT INTO T_COTIZANTE VALUES('666666666','GUTIERREZ','FLORES','SOLANGE','01-12-1990','F',1034,25000000,'D','IN',06101,2);   
INSERT INTO T_COTIZANTE VALUES('777777777','PASTEN','FLORES','JUAN','21-01-2000','M',1033,7000000,'I','SR',05101,1);   
INSERT INTO T_COTIZANTE VALUES('888888888','OLIVARES','QUEZADA','PABLO','12-07-1985','M',1008,10000000,'D','IN',05101,2);   

INSERT INTO T_COMUNA VALUES(01101, 'IQUIQUE',1);
INSERT INTO T_COMUNA VALUES(01405, 'PICA',1);
INSERT INTO T_COMUNA VALUES(02101, 'ANTOFAGASTA',2);
INSERT INTO T_COMUNA VALUES(02102, 'MEJILLONES',2);
INSERT INTO T_COMUNA VALUES(02201, 'CALAMA',2);
INSERT INTO T_COMUNA VALUES(03101, 'COPIAPÓ',3);
INSERT INTO T_COMUNA VALUES(03301, 'VALLENAR',3);
INSERT INTO T_COMUNA VALUES(04101, 'LA SERENA',4);
INSERT INTO T_COMUNA VALUES(04203, 'LOS VILOS',4);
INSERT INTO T_COMUNA VALUES(04301, 'OVALLE',4);
INSERT INTO T_COMUNA VALUES(05101, 'VALPARAISO',5);
INSERT INTO T_COMUNA VALUES(05109, 'VIÑA DEL MAR',5);
INSERT INTO T_COMUNA VALUES(05801, 'QUILPUE',5);
INSERT INTO T_COMUNA VALUES(05701, 'SAN FELIPE',5);
INSERT INTO T_COMUNA VALUES(06101, 'RANCAGUA',6);
INSERT INTO T_COMUNA VALUES(06205, 'NAVIDAD',6);
INSERT INTO T_COMUNA VALUES(07101, 'TALCA',7);
INSERT INTO T_COMUNA VALUES(07303, 'LICANTÉN',7);
INSERT INTO T_COMUNA VALUES(07301, 'CURICÓ',7);
INSERT INTO T_COMUNA VALUES(07404, 'PARRAL',7);

INSERT INTO T_INVERSION VALUES(111,1,'111111111','B',100,25000000,'01-03-2017','AF',0);
INSERT INTO T_INVERSION VALUES(222,1,'222222222','E',100,10000000,'01-06-2017','AF',0);
INSERT INTO T_INVERSION VALUES(333,1,'333333333','B',50,4000000,'01-03-2018','RA',0);
INSERT INTO T_INVERSION VALUES(333,2,'333333333','E',50,4000000,'01-03-2018','RA',0);
INSERT INTO T_INVERSION VALUES(444,1,'444444444','A',100,13000000,'01-07-2018','EA',0);
INSERT INTO T_INVERSION VALUES(555,1,'555555555','E',100,10000000,'01-03-2018','EA',0);
INSERT INTO T_INVERSION VALUES(666,1,'666666666','C',100,24000000,'01-07-2018','AF',0);
INSERT INTO T_INVERSION VALUES(777,1,'777777777','C',50,3000000,'01-07-2018','RA',0);
INSERT INTO T_INVERSION VALUES(777,2,'777777777','D',50,3000000,'01-07-2018','RA',0);
INSERT INTO T_INVERSION VALUES(888,1,'888888888','A',100,9000000,'01-07-2019','AF',0);
INSERT INTO T_INVERSION VALUES(1111,1,'111111111','C',50,14000000,'01-03-2019','RA',1);
INSERT INTO T_INVERSION VALUES(1111,2,'111111111','E',50,14000000,'01-03-2019','RA',1);
INSERT INTO T_INVERSION VALUES(2222,1,'222222222','A',100,10000000,'01-05-2019','AF',1);
INSERT INTO T_INVERSION VALUES(3333,1,'333333333','A',70,7000000,'01-03-2019','RA',1);
INSERT INTO T_INVERSION VALUES(3333,2,'333333333','C',30,3000000,'01-03-2019','RA',1);
INSERT INTO T_INVERSION VALUES(4444,1,'444444444','E',100,15000000,'01-07-2019','EA',1);
INSERT INTO T_INVERSION VALUES(5555,1,'555555555','A',100,15000000,'01-03-2019','EA',1);
INSERT INTO T_INVERSION VALUES(6666,1,'666666666','D',50,12500000,'01-07-2019','AF',1);
INSERT INTO T_INVERSION VALUES(6666,2,'666666666','E',50,12500000,'01-07-2019','AF',1);
INSERT INTO T_INVERSION VALUES(7777,1,'777777777','B',100,7000000,'01-07-2019','AF',1);
INSERT INTO T_INVERSION VALUES(8888,1,'888888888','C',50,5000000,'01-07-2019','RA',1);
INSERT INTO T_INVERSION VALUES(8888,2,'888888888','D',50,5000000,'01-07-2019','RA',1);


--4.  (05 puntos) Para las cotizantes independientes incremente el fondo capitalizado en un 10%.



--5.  (05 puntos) A las inversiones vigentes efectuadas en el fondo A por un 100% cambiarlas al fondo C, 
--                considerando como nueva fecha de inversión la actual.



--6.  (05 puntos)	Mostrar las inversiones activas efectuadas en el fondo E ejecutadas por el propio afiliado. 
--                Los datos de interés son: rut del cotizante, porcentaje y monto de la inversión.



--7.  (05 puntos) Mostrar para los cotizantes (hombres) nacidos en un cierto rango de fechas: rut, fecha de nacimiento, 
--                nombre de la AFP, la comuna, región, y la cantidad de inversiones efectuadas el año pasado.


--8.	(05 puntos)	Mostrar los datos de la AFP que cobra la mayor comisión.


--9.	(05 puntos)	Mostrar para cada comuna la cantidad de cotizantes.



--10.	(05 puntos)	Mostrar las inversiones correspondientes al 100% de los fondos capitalizados, efectuadas sólo en los fondos A y C, 
--                durante el presente año. Los datos de interés son: rut del cotizante, fecha de la inversión y 
--                la descripción del ejecutor de la inversión.


--11.	(05 puntos)	Mostrar para cada inversión vigente, renovada automáticamente y por un porcentaje menor o igual al 50%, 
--                los siguientes datos: código y correlativo de inversión, fecha de la inversión, monto respectivo y días que lleva vigente.