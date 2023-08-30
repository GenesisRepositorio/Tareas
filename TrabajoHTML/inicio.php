<!DOCTYPE html>
 
<html lang="es">
 
<head><link rel="icon" type="image/jpg" href="osop.jpg" />

     <title>Noticias Ambientales | Daños y cambios críticos del Medio Ambiente   </title>
	<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
-->
  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="jquery.infinitecarousel.js"></script>
  <script type="text/javascript">
$(function()
{
	$('#carousel').infiniteCarousel({
		displayTime: 6000, //velocidad de cambio de fotos
		textholderHeight : .25 //alto de barra transparente para el texto 
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
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(500);	
		$('#mask').fadeTo("normal",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
function centrar() { 
    iz=(screen.width-document.body.clientWidth) / 2; 
    de=(screen.height-document.body.clientHeight) / 2; 
    moveTo(iz,de); 
}  
	
		//transition effect
		$(id).fadeIn(10); 
	
	});
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});			
	
});

</script>


	    
         <meta charset="utf-8" />
         <link rel="stylesheet" href="css\estilos.css" />
       <link rel="stylesheet" href="css\fonts.css" />
</head>
 
<body background="fondo.jpg">

      
        <div id="contenedor">
		 <div class="social">
		<ul>
			<li><a href="http://www.facebook.com" target="_blank"  class="icon-facebook2"></a></li>
						

			<li><a href="http://www.twitter.com"  class="icon-twitter"></a></li>
			<li><a href="http://www.googleplus.com" class="icon-google-plus3"></a></li>
			<li><a href="http://www.pinterest.com"  class="icon-whatsapp"></a></li>
			<li><a href="conts:genesis_29@live.cl" class="icon-mail4"></a></li>
		</ul>
	</div>
        <header>
		   <h3><p ALIGN=center>Noticias Ambientales</p></h3>
		   
           <h6><p ALIGN=center> Daños y cambios críticos del Medio Ambiente.</p></h6>
		  
		     
		<div id="buscar">
		 <form action="">
        <input type="search" name="nombre" placeholder="Buscar">
		
         </form>
		 </div>
        </header>
       


	  
	
	   <section>
	    <div id="carousel" style="color:#FFFFFF;">
		 
	<ul>
		<li><img alt="" src="pier.jpg" width="1000" height="288" />
		<p><br />
		<a href="">leer mas­.</a></p>
		</li>
		<li><img alt="" src="ko.jpg" width="1000" height="288" />
		<p><br />
		<a href="">leer mas­.</a></p>
		</li>
		<li><img alt="" src="ove.jpg" width="1000" height="288" />
		<p><br />
		<a href="">leer mas-.</a></p>
		</li>
		<li><img alt="" src="pai.jpg" width="1000" height="288" />
		<p><br />
		<a href="">leer mas­.</a></p>
		</li>
		<li><img alt="" src="pe.png" width="1000" height="288" />
		<p><br />
		<a href="">leer mas­.</a></p>
		</li>
		<li><img alt="" src="banner.jpg" width="1000" height="288" />
		<p><br />
		<a href="">leer mas­.</a></p>
		</li>
	</ul>
		 
		 </div>

	
	   </section>
	  
	    <nav>
	    <ul>
		   <li><a href="inicio.html">Inicio</a></li>
		   <li><a href="mundial.html">Mundial</a></li>
		   <li><a href="local.html">Local</a></li>
		   <li><a href="consejos.html">Consejos</a></li>
		   <li><a href="informate.html">Informate</a></li>
		   <li><a href="contactenos.html">Contactenos</a></li>
		   </ul>
    </nav>
     <section id="contenido">
	      <article class="articulos">
		   
				 <center><img src="el sis.jpg " alt=""/></center>
			<center><img src="refris.jpg " alt=""/></center>
			
			<center><p ALIGN=left>Puede sonar paradójico, pero los sistemas que utilizamos para mantener nuestros alimentos helados son de lo que más contribuyen a la generación del calentamiento global. El uso de los llamado gases refrigerantes-más conocidos por su sigla HCFC– en supermercados, por ejemplo, son responsables de generar 361 toneladas métricas de estos gases al año, solo en Chile, lo cual va en directo daño de la capa de ozono, según datos entregados por el Programa de Naciones Unidas para el Desarrollo, PNUD Chile. </p>
			<p ALIGN=left>Pero esta realidad está pronto a cambiar, si las compañías comienzan a adoptar una nueva tecnología de refrigeración, mucho más eficiente que el HCFC y por supuesto, mucho más amigable con el medio ambiente. Se trata del CO2 Transcrítico, un sistema que mediante un programa de la Unidad Ozono del Ministerio del Medio Ambiente ya está empezando a adoptarse en nuestro país.</p>
			<p ALIGN=left>El programa, cofinanciado por la Coalición del Clima y el Aire Limpio y el Fondo Multilateral del Protocolo de Montreal, logró la implementación de esta nueva tecnología en dos supermercados del país -Jumbo de Valdivia y Tottus de Vitacura- los cuales ya están utilizando estos sistemas de refrigeración.</p>
			<p ALIGN=left>¿Pero qué tan amigable con el medio ambiente es este nuevo sistema? Por ejemplo, si un equipo genera 130.000 kg de gases de efecto invernadero al año usando el sistema HCFC, un aparato del mismo tamaño pero refrigerado con CO2 Transcrítico emite sólo 16 kg de estos gases en el mismo período de tiempo. Además, es un 20% más eficiente energéticamente. Evidentemente se trata de un sistema cuya implementación tiene un costo mayor, que debe ser subvencionado por estas iniciativas, pero que a largo plazo, genera beneficios tanto para las empresas como para el medio ambiente.</p>
			<p ALIGN=left>El Subsecretario de Medio Ambiente, Cristián Gutiérrez, destacó que la iniciativa responde a una solución integral, tal como el gobierno se lo ha planteado. “Como país adoptamos una posición de trabajo activo de contribución al cambio climático. Por lo que estas acciones marcan una señal de lo que queremos seguir haciendo en materia de gestión ambiental, con un enfoque de actores múltiples que incluya al sector público, privado, la academia y organizaciones no gubernamentales”.</p>
			<p ALIGN=left>Fuente: http://www.latercera.com/noticia/sistema-refrigeracion-no-dana-la-capa-ozono-ya-se-instala-chile/</p></center>
			
			</article>
			
			<article class="articulos">
			
			
			<hr>
			<center><img src="briga.jpg" alt=""></center>
		<center>	<p>Objetivo contra el fuego: evitar siete de cada diez incendios</p>

<p ALIGN=left>La consejera de Medio Ambiente, Elena Cebrián, pide “máxima precaución” y políticas de prevención</p>
<p ALIGN=left>La consellera de Agricultura y Medio Ambiente, Elena Cebrián, ha indicado este miércoles que el riesgo de grandes incendios”, aquellos que afectan a más de 500 hectáreas, “es muy alto y durante todo el año” en la Comunitat, por lo que ha pedido “máxima precaución” y políticas de prevención.</p>

<p ALIGN=left>En su intervención en el Fórum Europa Tribuna Mediterránea, la consellera ha indicado que todos los informes técnicos y los expertos alertan desde años de que el riesgo de los llamados grandes incendios en la Comunitat Valenciana “es cada vez mayor”.</p>

<p ALIGN=left>“Nuestra principal preocupación, la mayor amenaza a que nos enfrentamos, son los incendios forestales”, ha asegurado Cebrián, quien ha añadido que este territorio es “especialmente vulnerable” al riesgo de incendio, un riesgo que crece con los efectos del cambio climático.</p>

<p ALIGN=left>Por ello, ha considerado que “el verdadero desafío” pasa por fortalecer las medidas de prevención, y por ello el actual Consell destina 19 millones de euros a ese ámbito, una cifra que “no es suficiente, pero es más que hace dos años”, cuando el Ejecutivo del PP redujo ese presupuesto de los 33 millones de 2009 a los 16 de 2014.</p>

<p ALIGN=left>Además, ha indicado que se ha reforzado el dispositivo de vigilancia y prevención, y de manera específica están apostando por más concienciación y divulgación, con la campaña #stopalfoc, ya que las causas humanas están detrás del 80 % de los incendios.</p>

<p ALIGN=left>Cebrián ha resaltado que hay que ser conscientes del impacto “destructor” de los incendios forestales, sobre todo por el riesgo que supone para las vidas humanas, que “a menudo es incomprensiblemente olvidado”.</p>

<p ALIGN=left>La consellera ha enviado un mensaje de ánimo a Portugal por el incendio que les afecta, donde se han conjugado de forma “excepcional y trágica” altísimas temperaturas, vientos que han producido lo que se ha llamado una tormenta de fuego, y la confluencia de muchas personas dispersas en esa zona.</p>

<p ALIGN=left>Preguntada sobre si cabría un endurecimiento de las penas para quienes causan los incendios, la consellera ha afirmado que, aunque no se trata de su ámbito, entiende que sí, y que eso debe estar complementado con “muchas más medidas de concienciación, de educación y de divulgación” sobre el “enorme riesgo” existente.</p>

<p ALIGN=left>Cebrián ha reivindicado que han impulsado una nueva política forestal, con un modelo de gestión sostenible, enfocado a recuperar y potenciar la función protectora de los bosques, unida a la sostenibilidad económica y social.</p>

<p ALIGN=left>Dentro de esa reorientación, ha explicado que se han impulsado trabajos selvícolas de mejora, un plan de recuperación de la vegetación y restauración forestal de zonas quemadas en los últimos 20 años, y ayudas para el comercio responsable y el aprovechamiento sostenible de productos forestales.</p>

<p ALIGN=left>Además, ha indicado que esta nueva política se basa en actuar para reforzar la propia capacidad del bosque para defenderse ante los incendios, de manera que su estructura evite o frene la propagación del fuego en caso de incendio.</p>

<p ALIGN=left>Fuente: http://www.elmundo.es/comunidad-valenciana/2017/06/20/5948ec20268e3e3c4c8b4621.html</p> </center>
			
			
			
			
			
			
			
			
			
			
			
			</article>
	 
	 
	 </section>
	 <aside>
	<table>
  <tr>
     <td>Fecha</td>
     <td>
         <input type="date">
     </td>
         
    </tr>
	</table>
	
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3345.2073733542175!2d-71.64274058478112!3d-33.02466668089793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689e6c652de701d%3A0x1c6891fdd7b481be!2sUniversidad+de+Playa+Ancha%2C+valparaiso!5e0!3m2!1ses-419!2scl!4v1499190693358" width="200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
   <img src="glaciar.jpg" alt=""/>
   <br>
  <br>
     Deforestación
    <iframe width="191" height="150" src="https://www.youtube.com/embed/ZaZZFm7vhds" frameborder="0" allowfullscreen> </iframe>
 <br>
 <br>
    <img src="huemul.jpg" alt=""/>
	<br>
	<br>
	Medio Ambiente
	<iframe width="191" height="150" src="https://www.youtube.com/embed/tYgspji4y7s" frameborder="0" allowfullscreen></iframe>
	<br>
	<br>
	La Tierra esta muriendo
	<iframe width="191" height="150" src="https://www.youtube.com/embed/JQYXJfMlD30" frameborder="0" allowfullscreen></iframe>
	
	     








		</aside>
		   
		   
		   
		   
	</div>	   
    
</body>
</html>