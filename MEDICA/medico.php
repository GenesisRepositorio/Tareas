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
		 #cuadro5
        {
          width: 25%;
            height: 250px;
            background: #fff;
            float: left;
        }
		 #cuadro6
        {
          width: 25%;
            height: 250px;
            background: #fff;
            float: left;
        }
		 #cuadro7
        {
          width: 25%;
            height: 250px;
            background: #fff;
            float: left;
        }
		 #cuadro8
        {
          width: 25%;
            height: 250px;
            background: #fff;
            float: left;
        }
		   #cuadro9
        {
          width: 25%;
            height: 250px;
            background: #fff;
            float: left;
        }
        #cuadro10
        {
          width: 25%;
            height: 250px;
            background: #fff;
            float: left;
        }
        #cuadro11
        {
          width: 25%;
            height: 250px;
            background: #fff;
            float: left;
        }
        #cuadro12
        {
          width: 25%;
            height: 250px;
            background: #fff;
            float: left;
        }
		 #cuadro13
        {
          width: 25%;
            height: 250px;
            background: #fff;
            float: left;
        }
		 #cuadro14
        {
          width: 25%;
            height: 250px;
            background: #fff;
            float: left;
        }
		 #cuadro15
        {
          width: 25%;
            height: 250px;
            background: #fff;
            float: left;
        }
		 #cuadro16
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
            <div id="cuadro1">
              <?php
              
				$sql = "select NombreMedico,ApellidoMedico,Especialidad from MEDICO WHERE Especialidad='cirujano' AND IdMedico=1
					order by idMedico  				";
				$result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                      echo  $row['NombreMedico'] ."</br>". $row['ApellidoMedico'] ."</br>".$row['Especialidad']."</br>";
                  }
              } else {
                  echo "0 results";
              } 

              
          ?>
            </div>
            <div id="cuadro2">
            <?php
              
				$sql = "select NombreMedico,ApellidoMedico,Especialidad from MEDICO WHERE Especialidad='cirujano' AND IdMedico=2
					order by idMedico  	  ";
				$result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                      echo  $row['NombreMedico'] ."</br>". $row['ApellidoMedico'] ."</br>".$row['Especialidad'];
                  }
              } else {
                  echo "0 results";
              } 

              
          ?>
		


  

            </div>
            <div id="cuadro3">
			            <?php
              
				$sql = "select NombreMedico,ApellidoMedico,Especialidad from MEDICO WHERE Especialidad='cirujano' AND IdMedico=3
					order by idMedico  			 ";
				$result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                      echo  $row['NombreMedico'] ."</br>". $row['ApellidoMedico'] ."</br>".$row['Especialidad'];
                  }
              } else {
                  echo "0 results";
              } 

              
          ?>
			
			
			</div>
            <div id="cuadro4">
                       <?php
              
				$sql = "select NombreMedico,ApellidoMedico,Especialidad from MEDICO WHERE Especialidad='cirujano' AND IdMedico=4
					order by idMedico  			 ";
				$result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                      echo  $row['NombreMedico'] ."</br>". $row['ApellidoMedico'] ."</br>".$row['Especialidad'];
                  }
              } else {
                  echo "0 results";
              } 

              
          ?>
          
            </div>
			<div id="cuadro5">
                       <?php
              
				$sql = "select NombreMedico,ApellidoMedico,Especialidad from MEDICO WHERE Especialidad='Dentista' AND IdMedico=5
					order by idMedico  			  ";
				$result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                      echo  $row['NombreMedico'] ."</br>". $row['ApellidoMedico'] ."</br>".$row['Especialidad'];
                  }
              } else {
                  echo "0 results";
              } 

              
          ?>
          
            </div>
        
			<div id="cuadro6">
                       <?php
              
				$sql = "select NombreMedico,ApellidoMedico,Especialidad from MEDICO WHERE Especialidad='Dentista' AND IdMedico=6
					order by idMedico  			   ";
				$result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                      echo  $row['NombreMedico'] ."</br>". $row['ApellidoMedico'] ."</br>".$row['Especialidad'];
                  }
              } else {
                  echo "0 results";
              } 

              
          ?>
          
            </div>
			<div id="cuadro7">
                       <?php
              
				$sql = "select NombreMedico,ApellidoMedico,Especialidad from MEDICO WHERE Especialidad='Dentista' AND IdMedico=7
					order by idMedico  			  ";
				$result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                      echo  $row['NombreMedico'] ."</br>". $row['ApellidoMedico'] ."</br>".$row['Especialidad'];
                  }
              } else {
                  echo "0 results";
              } 

              
          ?>
          
            </div>
			<div id="cuadro8">
                       <?php
              
				$sql = "select NombreMedico,ApellidoMedico,Especialidad from MEDICO WHERE Especialidad='Dentista' AND IdMedico=8
					order by idMedico  			  ";
				$result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                      echo  $row['NombreMedico'] ."</br>". $row['ApellidoMedico'] ."</br>".$row['Especialidad'];
                  }
              } else {
                  echo "0 results";
              } 

              
          ?>
          
            </div>
			  <div id="cuadro9">
              <?php
              
				$sql = "select NombreMedico,ApellidoMedico,Especialidad from MEDICO  WHERE Especialidad='Oftalmologo' AND IdMedico=9
					order by idMedico  			 ";
				$result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                      echo  $row['NombreMedico'] ."</br>". $row['ApellidoMedico'] ."</br>".$row['Especialidad'];
                  }
              } else {
                  echo "0 results";
              } 

              
          ?>
            </div>
            <div id="cuadro10">
            <?php
              
				$sql = "select NombreMedico,ApellidoMedico,Especialidad from MEDICO WHERE Especialidad='Oftalmologo' AND IdMedico=10
					order by idMedico  			  ";
				$result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                      echo  $row['NombreMedico'] ."</br>". $row['ApellidoMedico'] ."</br>".$row['Especialidad'];
                  }
              } else {
                  echo "0 results";
              } 

              
          ?>
		


  

            </div>
            <div id="cuadro11">
			            <?php
              
				$sql = "select NombreMedico,ApellidoMedico,Especialidad from MEDICO WHERE Especialidad='Oftalmologo' AND IdMedico=11
					order by idMedico  			   ";
				$result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                      echo  $row['NombreMedico'] ."</br>". $row['ApellidoMedico'] ."</br>".$row['Especialidad'];
                  }
              } else {
                  echo "0 results";
              } 

              
          ?>
			
			
			</div>
            <div id="cuadro12">
                       <?php
              
				$sql = "select NombreMedico,ApellidoMedico,Especialidad from MEDICO  WHERE Especialidad='Oftalmologo' AND IdMedico=12
					order by idMedico  			 ";
				$result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                      echo  $row['NombreMedico'] ."</br>". $row['ApellidoMedico'] ."</br>".$row['Especialidad'];
                  }
              } else {
                  echo "0 results";
              } 

              
          ?>
          
            </div>
			<div id="cuadro13">
                       <?php
              
				$sql = "select NombreMedico,ApellidoMedico,Especialidad from MEDICO WHERE Especialidad='Obstetra' AND IdMedico=13
					order by idMedico  			  ";
				$result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                      echo  $row['NombreMedico'] ."</br>". $row['ApellidoMedico'] ."</br>".$row['Especialidad'];
                  }
              } else {
                  echo "0 results";
              } 

              
          ?>
          
            </div>
        
			<div id="cuadro14">
                       <?php
              
				$sql = "select NombreMedico,ApellidoMedico,Especialidad from MEDICO WHERE Especialidad='Obstetra' AND IdMedico=14
					order by idMedico  			  ";
				$result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                      echo  $row['NombreMedico'] ."</br>". $row['ApellidoMedico'] ."</br>".$row['Especialidad'];
                  }
              } else {
                  echo "0 results";
              } 

              
          ?>
          
            </div>
			<div id="cuadro15">
                       <?php
              
				$sql = "select NombreMedico,ApellidoMedico,Especialidad from MEDICO WHERE Especialidad='Obstetra' AND IdMedico=15
					order by idMedico  			  ";
				$result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                      echo  $row['NombreMedico'] ."</br>". $row['ApellidoMedico'] ."</br>".$row['Especialidad'];
                  }
              } else {
                  echo "0 results";
              } 

              
          ?>
          
            </div>
			<div id="cuadro16">
                       <?php
              
				$sql = "select NombreMedico,ApellidoMedico,Especialidad from MEDICO WHERE Especialidad='Obstetra' AND IdMedico=16
					order by idMedico  			  ";
				$result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                      echo  $row['NombreMedico'] ."</br>". $row['ApellidoMedico'] ."</br>".$row['Especialidad'];
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


