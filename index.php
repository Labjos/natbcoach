<!DOCTYPE html>
<html>
<head>
	<title>Natalia B COACH</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilonatalia.css">
	<meta c name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<header>
		<section id="cabecera">
		<div id="logonatalia"></div>
		<nav id="menu_principal">
			<ul id="menu">
				<li><a href="#cabecera">Natalia</a></li>
				<li><a href="#servicios">Servicios</a></li>
				<li><a href="#agenda">Agenda</a></li>
				<li><a href="#testimonios">Testimonios</a></li>
				<li><a href="#sumate">Sumate</a></li>
				<li><a href="#pie">Contacto</a></li>
				
			</ul>
		</nav>
		<nav id="redes">
			<ul >
				<li><a href="https://www.instagram.com/nataliab.coach/" target="_blank"><img src="imagenesweb/instagram.png"></a></li>
				<li><a href="https://www.facebook.com/natyb.co" target="_blank"><img src="imagenesweb/facebook.png"></a></li>
			</ul></nav>

		
	</section>
	</header>

<section id="natalia">
	
	<div id="fotonat"></div>
	<div id="cv">
		<div id="titulo_nat"><a href="coach.php#natalia_b"style="text-decoration: none;"><h1>NATALIA COACH</h1></a></div>
		<div id="texto_nat"><h2>En 2018 obtuvo el certificado PCC, que la acerdíta como COAH ONTOLÓGICO, desde ese momento, ha estado trabajando para ofrecer un servicio especifico e integral para emprendedores nóveles.<br>Diferentes herramientas, diplomados en creación de negocios y otros más a conseguido generar un servicio como<br>FACILITADOR ONTOLÓGICO.</h2></div>
	</div>
	<div id="coach">
		<div id="titulo_nat"><a href="coach.php#coaching"style="text-decoration: none;"><h1>COACHING ONTÓLOGICO</h1></a></div>
		<div id="texto_coach"><h2>¿Qué es el coaching?
El coaching ontológico es un proceso conversacional, que tiene como finalidad acortar la brecha entre el estado presente de una persona y su estado deseado. Identificando los obstáculos que se le presentan, desde su observador y sus posibilidades reales...<h2>QUIERO SABER MÁS!!!</div>
	</div>
</section>

<section id="slider">

	<ul>
			<li><img src="imagenesweb/slide2.jpg"></li>
			<li><img src="imagenesweb/slide3.jpg"></li>
			<li><img src="imagenesweb/slide4.jpg"></li>
			<li><img src="imagenesweb/slide5.jpg"></li>
			<li><img src="imagenesweb/slide6.jpg"></li>

		</ul>

</section>

<section id="servicios">
	<div id="servicio1">
		<div id="titulo_servicio1"><h1>SESIÓN INICIAL<br><br>GRATUITA</h1></div>
		<div id="texto_servicio1"><h2>Se busca identificar la problematica y posibles cursos de acción, confirmando si el coaching es la propuesta optima y más efectiva que se puede proponer</h2></div>
		<div id="boton"><a href="mailto:info@nataliabcoach.com.ar"style="text-decoration: none;"><h1>ACORDAR</h1></a></div>
	</div>
	<div id="servicio2">
		<div id="titulo_servicio2"><h1>SESIÓN BÁSICA<br><br>(4 SESIONES)</h1></div>
		<div id="texto_servicio2"><h2>Identificar obstaculos, que nos impiden accionar. Clarificar metas que qeuremos lograr, diseñar acciones posibles desde una nueva perspectiva</h2></div>
		<div id="boton"><a href="mailto:info@nataliabcoach.com.ar"style="text-decoration: none;"><h1>ACORDAR</h1></a></div>
	</div>
	<div id="servicio3">
		<div id="titulo_servicio3"><h1>SESIÓN AMPLIADA<br><br>(10 SESIONES)</h1></div>
		<div id="texto_servicio3"><h2>Vamos más allá, optenemos todo el potencial del coaching utilizando al máximo herramientas que nos brinda el lenguaje en post de los objetivos propuestos a cada persona</h2></div>
		<div id="boton"><a href="mailto:info@nataliabcoach.com.ar"style="text-decoration: none;"><h1>ACORDAR</h1></a></div>
			</div>
		</div>
	</div>
</section>

<section id="formulario">
			
			<div id="imagen_formulario"></div>
				
			<div id="texto_formulario"><h1>CONSULTA SIN COMPROMISO</h1></div>

			<div id="plantilla">
			<form method="POST" action="enviar_registro.php">
			<input type="text" name="nombre" placeholder="Nombre" required maxlength="50">
			<input type="text" name="apellido" placeholder="Apellido" required maxlength="100">
			<input type="email" name="correo" placeholder="Correo Electrónico" required maxlength="100">
			<input type="number" name="telefono" placeholder="Celular / Telefono" required maxlength="80">
			<input type="text" name="emprendimiento" placeholder="Tipo de Emprendimiento" required maxlength="200">			
			<textarea name="consulta" placeholder="Realice su Consulta" rows="3" required=""></textarea>
			<input type="submit"></form></div>

			<div id="texto_aux"><h2>Realice su consulta, en breve le responderemos (48hrs max).<br><br>
			Su consulta es bienvenida y no representa compromiso alguno.<br><br><br> Atentamente,<br>Natalia Bargas.</h2></div>

			<div id="respuesta"><p>			
			<?php
			
			if  (isset($_GET['e'])) {
				
				 echo "<h3> Su consulta ha sido enviada. Gracias!</h3>";
			}
			?>
		</p></div>

		<div id="iso"></div>

</section>

<section id="agenda">

	<div id="agen">
		<div id="titulo_agen"><a href="coach.php#plus"style="text-decoration: none;" ><h1>AGENDA</h1></a></div>
		<div id="texto_agen"><h2>Encuentra aqui informacion de los mejores eventos relacionados con el mundo del Coaching</h2></div>
		<div id="imagen_agen"></div>
	</div>
	<div id="prensa">
		<div id="titulo_agen"><a href="coach.php#plus"style="text-decoration: none;"><h1>PRENSA</h1></a></div>
		<div id="texto_prensa"><h2>Articulos sobre nosotros o articulos de interes en el Coaching</h2></div>
		<div id="imagen_prensa"></div>
	</div>
	<div id="sumate">
		<div id="titulo_sumate"><a href="coach.php#coaching"style="text-decoration: none;"><h1>SUMATE</h1></a></div>
		<div id="texto_sumate"><h2>Quieres saber un poco más del coaching, quieres acceder a inetresantes articulos.</h2></div>
		<div id="imagen_sumate"></div>

	</div>
</section>

<section id="testimonios">
	<div id="titulo_testimonios"><h1>ALGUNOS TESTIMONIOS</h1></div>
	
	<div id="testigo1">
		<div id="nombre_testigo1"><h1>Andrea, 37 años</h1></div>
		<div id="imagen_testigo1"></div>
		<div id="texto_testimonio1"><h2>Me sentí muy cómoda, motivada al final de cada sesión, y con mayor claridad, en cuanto a la visión de lo que quiero, y como lo quiero.</h2></div>
	</div>
	<div id="testigo2">
		<div id="nombre_testigo2"><h1>Ruth, 36 años</h1></div>
		<div id="imagen_testigo2"></div>
		<div id="texto_testimonio2"><h2>Recomiendo las sesiones de Coach Natalia, por su profesionalidad, compromiso  y empatía. Tuve muy buenos resultados, avances y aprendí a gestionar mis emociones durante sus sesiones, me impulsaron a ser una persona más asertiva, resilente y potenciar mis acciones.</h2></div>
	</div>
	<div id="testigo3">
		<div id="nombre_testigo3"><h1>Analia, 33 años</h1></div>
		<div id="imagen_testigo3"></div>
		<div id="texto_testimonio3"><h2>He vuelto a poner foco en lo que realmente me interesa, mis objetivos. Me sentí muy a gusto y fueron conversaciones muy útiles.</h2></div>
	</div>

</section>

<section id="pie">
	<div id="datos">
		<div id="datos_coach"><h2>Coach Min. 32551</h2></div>
		<div id="mail1"><h2>info@nataliabcoach.com.ar</h2></div>
		<div id="mail"><h2>natalia@nataliabcoach.com.ar</h2></div>
	</div>
	<div id="logonatalia"></div>
	<nav id="redes">
		<ul >
				<li><a href="https://www.instagram.com/nataliab.coach/" target="_blank"><img src="imagenesweb/instagram.png"></a></li>
				<li><a href="https://www.facebook.com/natyb.co" target="_blank"><img src="imagenesweb/facebook.png"></a></li>
			</ul>
	</nav>
</section>

</body>
</html>
