<?PHP
include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<script type="text/javascript" src="js/jquery.min.js"></script>
    </script>
    <script type="text/javascript" src="js/jquery.infinitecarousel.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#slider1').infiniteCarousel({
                displayTime: 1000, //velocidad de cambio de fotos
                textholderHeight: .17 //alto de barra transparente para el texto
            });
        });
    </script>
    <script>
        $(document).ready(function() {

            //select all the a tag with name equal to modal
            $('a[name=modal]').click(function(e) {
                //Cancel the link behavior
                e.preventDefault();

                //Get the A tag
                var id = $(this).attr('href');

                //Get the screen height and width
                var maskHeight = $(document).height();
                var maskWidth = $(window).width();

                //Set heigth and width to mask to fill up the whole screen
                $('#mask').css({
                    'width': maskWidth,
                    'height': maskHeight
                });

                //transition effect		
                $('#mask').fadeIn(500);
                $('#mask').fadeTo("normal", 0.8);

                //Get the window height and width
                var winH = $(window).height();
                var winW = $(window).width();

                //Set the popup window to center
                function centrar() {
                    iz = (screen.width - document.body.clientWidth) / 2;
                    de = (screen.height - document.body.clientHeight) / 2;
                    moveTo(iz, de);
                }

                //transition effect
                $(id).fadeIn(1000);

            });

            //if close button is clicked
            $('.window .close').click(function(e) {
                //Cancel the link behavior
                e.preventDefault();

                $('#mask').hide();
                $('.window').hide();
            });

            //if mask is clicked
            $('#mask').click(function() {
                $(this).hide();
                $('.window').hide();
            });

        });
    </script>
<style>
#header
{
    width: 90%;
    height: 200px;
    border: 1px solid #333333;
}
#menu
{
    width: 90%;
    height: 50px;
    border: 1px solid #333333;
}
#main
{
    width: 90%;
    height: 1200px;
    border: 1px solid #333333;
}
#footer
{
    width: 90%;
    height: 200px;
    border: 1px solid #333333;
}
#slider1
{
    width: 98%;
    height: 400px;
    border: 1px solid #333333;
    margin: 1%;
}
#cuadro1
{
    width: 48%;
    height: 300px;
    border: 1px solid #333333;
    margin: 0% 1% 1% 1%;
    float: left;
}
#cuadro2
{
    width: 48%;
    height: 300px;
    border: 1px solid #333333;
    margin: 0% 0.5% 1% 0.8%;
    float: left;
}
#cuadro3
{
    width: 32%;
    height: 300px;
    border: 1px solid #333333;
    margin: 0% 1% 1% 1%;
    float: left;
}
#cuadro4
{
    width: 31%;
    height: 300px;
    border: 1px solid #333333;
    margin: 0% 0.253% 1% 0.254%;
    float: left;
}
#cuadro5
{
    width: 32%;
    height: 300px;
    border: 1px solid #333333;
    margin: 0% 1% 1% 1%;
    float: left;
}
.Estilo1
{
  color:#fff;
}
 </style>
<body>
    <center>
    <div id="header"></div>
    <div id="menu">
        <a href="medico.php" target="_self"> Medico</a>
        <a href="patologia.php" target="_self"> Patologia</a>
        <a href="paciente.php" target="_self"> Paciente</a>
        
    </div>
    <div id="main">
       
        <div id="cuadro2">
		<a href="FormularioPac.php" target="_self">Ingresar Paciente</a></div>
        <div id="cuadro3"></div>
        <div id="cuadro4"></div>
        <div id="cuadro5"></div>
    </div>
    <div id="footer"></div>
</center>

</body>
</html>