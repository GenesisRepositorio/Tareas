<?php
include "conn.php";
$IdPaciente=trim($_POST['IdPaciente']);
$NombrePaciente=$_POST['NombrePaciente'];
$Previsión =$_POST['Previsión'];
$Direccion=$_POST['Direccion'];
$Patologías=$_POST['Patologías'];
$FichaAtencion=$_POST['FichaAtencion'];
$ImgPaciente=$_POST['ImgPaciente'];
$Fono=$_POST['Fono'];
$Correo=$_POST['Correo'];
$Alergias=$_POST['Alergias'];



$sql = "insert into Animal (IdPaciente,NombrePaciente,Previsión,Direccion,Patologías,FichaAtencion,ImgPaciente,Fono,Correo,Alergias)
 values ('$IdPaciente','$NombrePaciente','$Previsión','$Direccion','$Patologías','$FichaAtencion','$ImgPaciente','$Fono','$Correo','$Alergias')";
 


if ($conn->query($sql) === TRUE) {
    echo "el registro paciente se ingreso con exito";
}else{
echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close(); 


?>