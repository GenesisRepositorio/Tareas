--1

ALTER TABLE T_INVERSION
ADD fechaTermVig DATE  NULL;

ALTER TABLE T_COTIZANTE
ADD  fechaSituacion DATE NULL;

ALTER TABlE T_COTIZANTE
ADD fechaAfiliacion DATE  NULL ;

ALTER TABLE T_COTIZANTE
MODIFY fechaAfiliacion DEFAULT SYSDATE;
--2

--3
UPDATE T_COTIZANTE SET fechaSituacion=TO_DATE (SYSDATE,'dd-MM-yy')
WHERE  tipoCotizante='D' AND tipoContrato='PF' AND situacion=3;
--4

--5
SELECT cot.situacion,cot.genero,co.codigoCom,co.codigoReg,
COUNT(cot.rut)AS CantCotizante,
SUM(inv.montoInv)AS MontoTotalFondoAsociado
FROM T_COMUNA co JOIN T_COTIZANTE cot ON co.codigoCom=cot.codigocom
                 JOIN T_INVERSION inv ON cot.rut=inv.rut
WHERE genero='M' AND situacion=5
                 AND codigoReg='&REGION'
GROUP BY cot.situacion,cot.genero,co.codigoCom,co.codigoReg;

--6
SELECT AFP.nombreAFP,AFP.comisionAFP, AVG(cot.fondoCapital) AS promFonCap,MAX(cot.fondoCapital)AS maxfondo,
MIN(cot.fondoCapital)AS minfondo
FROM T_AFP AFP  LEFT JOIN T_COTIZANTE cot ON AFP.codigoAFP=cot.codigoAFP
WHERE comisionAFP  BETWEEN '&comision1' AND '&comision2' 
GROUP BY AFP.nombreAFP,AFP.comisionAFP;
--7
SELECT co.rut,nombres,apellido1,apellido2,situacion,AFP.nombreAFP,
EXTRACT(YEAR FROM SYSDATE)- EXTRACT(YEAR FROM fechaNac)AS EDAD 
FROM T_COTIZANTE co JOIN T_AFP AFP ON  co.codigoAFP=AFP.codigoAFP
WHERE  fechaNac=(SELECT MIN(fechaNac)FROM T_COTIZANTE)AND situacion=3 ;









