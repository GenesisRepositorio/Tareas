<?PHP
include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        #header {
            width: 90%;
            height: 200px;
            background: #cccc33;
        }
        
        #menu {
            width: 90%;
            height: 30px;
            background: #cccccc;
        }
        
        #main {
            width: 90%;
            height: 1000px;
            background: #7c8c90;
        }
        
        #footer {
            width: 90%;
            height: 200px;
            background: #333;
        }
        #cuadro1
        {
          width: 25%;
            height: 250px;
            background: #fff;
            float: left;
        }
        #cuadro2
        {
          width: 25%;
            height: 250px;
            background: #fff;
            float: left;
        }
        #cuadro3
        {
          width: 25%;
            height: 250px;
            background: #fff;
            float: left;
        }
        #cuadro4
        {
          width: 25%;
            height: 250px;
            background: #fff;
            float: left;
        }
	
        h1
        {
          
          color: #0000ff;
        }
        .texto{
          font-size: 14px;
          text-align: justify;
          margin: 0px 15px 15px 15px;
          background: #eee;
        }
        .imagen{
          width: 300px;
          float: left;
          margin: 10px 10px 0px 10px; 

        }
    </style>
    <title>Document</title>
</head>

<body>
    <center>
        <div id="header"></div>
        <div id="menu"> </div>
        <div id="main">
            <div >
              <?php
              
				$sql = "select NombrePaciente,Previsión,Direccion,Patologías,Ficha de Atencion,Fono,Correo,Alergias from PACIENTE";
				$result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                      echo  "Nombre Paciente: ".$row['NombrePaciente'] ."</br>" ."Prevision ". $row['Prevision'] ."</br>"."Direccion: ".$row['Direccion']."</br>"."</br>"."Patologias: ".$row['Patologias'] ."</br>" ."Ficha de atencion: ".$row['FichaAtencion'] ."</br>" ."Fono: ".$row['Fono'] ."</br>" ."Correo : ".$row['correo'] ."</br>" ."Alergias: ".$row['Alergias'] ."</br>";
                  }
              } else {
                  echo "0 results";
              } 

              
          ?>
            </div>
            
          
          
            
			

        </div>
        <div id="footer"></div>
    </center>
</body>

</html>


