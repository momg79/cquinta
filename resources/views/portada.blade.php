<!DOCTYPE HTML>
<html>
	<head>
		<title>Quinta Balon Mano</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="portada/assets/css/main.css" />
		<!-- Styles -->
        <style>
            .full-height {
                height: 10vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }


            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

          
        </style>
	</head>
	<body>
		<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Inicio</a>
                        <!--<a href="{{ route('register') }}">Registro</a>-->
                    @endauth
                </div>
			@endif
		</div>
		<!-- Header -->
			<section id="header" class="dark">
				<header>
					<!--
					<h1>Quinta Balon Mano</h1>
					<p>Club Quinta Balon Mano de Viña del Mar</a></p>
					-->
				</header>
				<!--<footer>
					<a href="#first" class="button scrolly">Proceed to second phase</a>
				</footer>-->
			</section>
		
		<!-- First -->
			<section id="first" class="main">
				<header>
					<div class="container">
						<h2>Club Quinta Balon Mano de Viña del Mar</h2>
						<p>Tiene como misión ser el primer club deportivo de balonmano con su propia sede de entrenamiento, a través de la cual podremos lograr fomentar de manera eficaz la popularización 
						y la competencia de nuestro deporte consolidando una cultura de generación en generación en el balonmano como un nuevo deporte chileno que dará a la población y a nuestros jugadores una nueva oportunidad de emerger como deportistas profesionales de nivel internacional.<br />
						</p>
					</div>
				</header>
				<div class="content dark style1 featured">
					<div class="container">
						<div class="row">
							<div class="4u 12u(narrow)">
								<section>
									<span class="feature-icon"><span class="icon fa-clock-o"></span></span>
									<header>
										<h3>Entrenamiento</h3>
									</header>
									<p>Sábados 10:00 a 11:00
									   Centro Polideportivo, ubicado en Avenida Uno Norte </br> N° 1893, Viña del Mar.</p>
								</section>
							</div>
							<div class="4u 12u(narrow)">
								<section>
									<span class="feature-icon"><span class="icon fa-bolt"></span></span>
									<header>
										<h3>Categrias</h3>
									</header>
									<p>
										<ul class="list-group">
										<li class="list-group-item">Alevines (4 a 8 años de edad) Mixto</li>
										<li class="list-group-item">Premini y Mini (9 a 12 años de edad) Mixto</li>
										<li class="list-group-item">Infantil/Cadete (13 años de edad en adelante) Mixto</li>
										<li class="list-group-item">Cadete, Juvenil/Adulto (16 años en adelante) Mixto </li>
										</ul>
									</p>
								</section>
							</div>
							<div class="4u 12u(narrow)">
								<section>
									<span class="feature-icon"><span class="icon fa-cloud"></span></span>
									<header>
										<h3>Que es el Hándbol?</h3>
									</header>
									<p>Hándbol es un deporte colectivo en el cual participan dos equipos y que tiene </br>
										como objetivo introducir la pelota en la portería contraria jugándola con la mano.</p>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<footer>
									<a href="#second" class="button scrolly">Entrenadores</a>
								</footer>
							</div>
						</div>
					</div>
				</div>
			</section>

		<!-- Second -->
			<section id="second" class="main">
				<header>
					<div class="container">
						<h2>Cuerpo Técnico Club Quinta Balonmano</h2>
						<p>
							<ul class="list-group">
								<li class="list-group-item">Pablo Ugarte Pastene, Prof. Mg. Educación Física - Entrenador</li>
								<li class="list-group-item">Evelyn Rivera, Prof. Educación Física - Entrenador</li>
								<li class="list-group-item">Claudio Paredes, Prof. Educación Física  - Entrenador</li>									
							</ul>
						</p>
					</div>
				</header>
				<div class="content dark style2">
					<div class="container">
						<div class="row">
							<div class="4u 12u(narrow)">
								<section>
									<h3>Proyecto España</h3>
									<p>Te invitamos a ser parte de nuestro proyecto anual en España “Campus Internacional de Balonmano, Leon, Cuna del Parlamentarismo”</br>
									   Una experiencia única en el mundo. Un viaje cultural y deportivo para todos los jóvenes handbolistas que desean mejorar sus capacidades individuales como colectivas en un viaje de 20 días viviendo el balonmano como los mejores jugadores del mundo.</p>									
								</section>
							</div>
							<div class="8u 12u(narrow)">
								<div class="row">
									<div class="6u"><a href="#" class="image fit"><img src="portada/images/pic01.jpg" alt="" /></a></div>
									<div class="6u"><a href="#" class="image fit"><img src="portada/images/pic02.jpg" alt="" /></a></div>
									<div class="6u"><a href="#" class="image fit"><img src="portada/images/pic03.jpg" alt="" /></a></div>
									<div class="6u"><a href="#" class="image fit"><img src="portada/images/pic04.jpg" alt="" /></a></div>
									<div class="6u"><a href="#" class="image fit"><img src="portada/images/pic05.jpg" alt="" /></a></div>
									<div class="6u"><a href="#" class="image fit"><img src="portada/images/pic06.jpg" alt="" /></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		
			<section id="fourth" class="main">
				<header>
					<div class="container">
						<h2>Contacto - Quinta Balonmano</h2>
						<ul class="list-group">							
						 <li>Viña del mar, Chile.</li>						
						 <li>pablougarte@quintabalonmano.cl</li>						
						</ul>
					</div>
				</header>
				<div class="content style4 featured">
					<div class="container 75%">
						<form method="post" action="#">
							<div class="row 50%">
								<div class="6u 12u(mobile)"><input type="text" placeholder="Nombre" /></div>
								<div class="6u 12u(mobile)"><input type="text" placeholder="Email" /></div>
							</div>
							<div class="row 50%">
								<div class="12u"><textarea name="message" placeholder="Mensaje"></textarea></div>
							</div>
							<div class="row">
								<div class="12u">
									<ul class="actions">
										<li><input type="submit" class="button" value="Enviar Mensaje" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<section id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
				</ul>
				<div class="copyright">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">Quinta Balon Mano</a></li>
					</ul>
				</div>
			</section>

		<!-- Scripts -->
			<script src="portada/assets/js/jquery.min.js"></script>
			<script src="portada/assets/js/jquery.scrolly.min.js"></script>
			<script src="portada/assets/js/skel.min.js"></script>
			<script src="portada/assets/js/util.js"></script>
			<script src="portada/assets/js/main.js"></script>

	</body>
</html>