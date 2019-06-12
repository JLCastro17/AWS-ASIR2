<?php
include "variables.php";
include ('../db.php');
$nombre="Policia Militar";
echo "<!DOCTYPE html><!DOCTYPE html>
<html lang='es' xmlns='http://www.w3.org/1999/xhtml'>
<head>
	<title>$nombre</title>
	<meta charset='utf-8' />
	<meta name='viewport' content='width=device-witdh,user-scalabe=no,initial-scale=1.0' />
	<link rel='shortcut icon' href='../images/favicon.png' />
	<link rel='stylesheet' type='text/css' href='../css/style.css' />
	<script src='../js/jquery.latest.js'></script>
	<script src='../js/parallax.js'></script>
	<script src='../js/drop.down.js'></script>
</head>
<body id='mbody'>
	<div id='contenedor' class='amuse'>
		<address id='iconos'>
			<a href='https://www.facebook.com/kminorito' target='_blank'><img src='../images/facebook.jpg' alt='facebook_icon' /></a>
			<a href='https://www.instagram.com/kminorito/' target='_blank'><img src='../images/instagram.jpg' alt='instagram_icon' /></a>
			<a href='https://twitter.com/kminorito' target='_blank'><img src='../images/twitter.jpg' alt='twitter_icon' /></a>
		</address>
		<header>
			<a href='../index.php'><img class='logo' src='../images/logo.png' alt='logo' /></a>
			<nav>
				<ul class='menu muse-main'>
					<li><a href='../index.php'>Inicio</a></li>
					<li>
						<a href='#'>Personajes</a>
						<ul>
							<li>
								<a href='#'>Humanos</a>
								<ul>
									<li><a href='$eren'>Eren Jaeger</a></li>
									<li><a href='$mikasa'>Mikasa Ackerman</a></li>
									<li><a href='$armin'>Armin Arlert</a></li>
									<li><a href='$reiner'>Reiner Braun</a></li>
									<li><a href='$bertholdt'>Bertholdt Hoover</a></li>
									<li><a href='$annie'>Annie Leonhart</a></li>
									<li><a href='$levi'>Levi Ackerman</a></li>
								</ul>
							</li>
							<li>
								<a href='#'>Titanes</a>
								<ul>
									<li><a href='$colosal'>Titán Colosal</a></li>
									<li><a href='$acorazado'>Titán Acorazado</a></li>
									<li><a href='$hembra'>Titán Hembra</a></li>
									<li><a href='$bestia'>Titán Bestia</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href='#'>Organizaciones</a>
						<ul>
							<li><a href='$guarnicion'>Tropas de Guarnición</a></li>
							<li><a href='$legion'>Legión de Reconocimiento</a></li>
							<li><a href='$policia'>Policía Militar</a></li>
						</ul>
					</li>
					<li>
						<a href='#'>Murallas</a>
						<ul>
							<li><a href='$maria'>María</a></li>
							<li><a href='$rose'>Rose</a></li>
							<li><a href='$sina'>Sina</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</header>
		<div class='container muse-nav'>
			<div class='boton muse-boton'><img src='../images/menu.png' alt='menu' /></div>
			<nav>
				<ul id='menu_principal'>
					<li><a href='#'>Inicio</a></li>
					<li>
						<label for='drop-1'>Personajes</label>
						<input type='checkbox' id='drop-1'>
						<ul>
							<li>
								<label for='drop-2'>Humanos</label>
								<input type='checkbox' id='drop-2'>
								<ul>
									<li><a href='$eren'>Eren Jaeger</a></li>
									<li><a href='$mikasa'>Mikasa Ackerman</a></li>
									<li><a href='$armin'>Armin Arlert</a></li>
									<li><a href='$reiner'>Reiner Braun</a></li>
									<li><a href='$bertholdt'>Bertholdt Hoover</a></li>
									<li><a href='$annie'>Annie Leonhart</a></li>
									<li><a href='$levi'>Levi Ackerman</a></li>
								</ul>
							</li>
							<li>
								<label for='drop-3'>Titanes</label>
								<input type='checkbox' id='drop-3'>
								<ul>
									<li><a href='$colosal'>Titán Colosal</a></li>
									<li><a href='$acorazado'>Titán Acorazado</a></li>
									<li><a href='$hembra'>Titán Hembra</a></li>
									<li><a href='$bestia'>Titán Bestia</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<label for='drop-4'>Organizaciones</label>
						<input type='checkbox' id='drop-4'>
						<ul>
							<li><a href='$guarnicion'>Tropas de Guarnición</a></li>
							<li><a href='$legion'>Legión de Reconocimiento</a></li>
							<li><a href='$policia'>Policía Militar</a></li>
						</ul>
					</li>
					<li>
						<label for='drop-5'>Murallas</label>
						<input type='checkbox' id='drop-5'>
						<ul>
							<li><a href='$maria'>María</a></li>
							<li><a href='$rose'>Rose</a></li>
							<li><a href='$sina'>Sina</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<main>
			<div id='contenido'>
				<div id='tabla'>
					<table class='muse muse-border tabla'>
						<tr>
							<td class='principal nombre no-line' colspan='2'><span><strong>$nombre</strong></span></td>
						</tr>
						<tr>
							<td class='no-line' colspan='2'><img class='center' src='";
						$result = mysqli_query($connection, "SELECT image FROM organizaciones WHERE nombre='$nombre'");
						while($query_data = mysqli_fetch_row($result)) {
							echo $query_data[0];
						}
					echo "' alt='$nombre' /></td>
						</tr>
						<tr>
							<td class='principal nombre no-line' colspan='2'><b>Detalles</b></td>
						</tr>
						<tr>
							<td><b>Comandante</b></td>
							<td>";
						$result = mysqli_query($connection, "SELECT comandante FROM organizaciones WHERE nombre='$nombre'");
						while($query_data = mysqli_fetch_row($result)) {
							echo $query_data[0];
						}
					echo "</td>
						</tr>
						<tr>
							<td><b>Afiliación</b></td>
							<td>";
						$result = mysqli_query($connection, "SELECT afiliacion FROM organizaciones WHERE nombre='$nombre'");
						while($query_data = mysqli_fetch_row($result)) {
							echo $query_data[0];
						}
					echo "</td>
						</tr>
					</table>
				</div>
				<article id='informacion' class='muse muse-border'>
					<h2>$nombre</h2>
					<br />";
						$result = mysqli_query($connection, "SELECT biografia FROM organizaciones WHERE nombre='$nombre'");
						while($query_data = mysqli_fetch_row($result)) {
							echo $query_data[0];
						}
					echo "<br/><hr /><br />
					<h3>Misión</h3>
					<br />";
						$result = mysqli_query($connection, "SELECT mision FROM organizaciones WHERE nombre='$nombre'");
						while($query_data = mysqli_fetch_row($result)) {
							echo $query_data[0];
						}
					echo "<br/><hr /><br />
					<h3>Estructura</h3>
					<br />";
						$result = mysqli_query($connection, "SELECT estructura FROM organizaciones WHERE nombre='$nombre'");
						while($query_data = mysqli_fetch_row($result)) {
							echo $query_data[0];
						}
					echo "<br/><hr /><br />
					<h3>Caracteristicas</h3>
					<br />";
						$result = mysqli_query($connection, "SELECT caracteristicas FROM organizaciones WHERE nombre='$nombre'");
						while($query_data = mysqli_fetch_row($result)) {
							echo $query_data[0];
						}
					echo "<br/><hr /><br />
				</article>
				<span class='altura'></span>
				<div class='ajustar'></div>
				<address id='social'>
					<div>
						<a href='https://www.facebook.com/kminorito' target='_blank'><img src='../images/facebook.jpg' alt='facebook_icon' /></a>
					</div>
					<div>
						<a href='https://www.instagram.com/kminorito/' target='_blank'><img src='../images/instagram.jpg' alt='instagram_icon' /></a>
					</div>
					<div>
						<a href='https://twitter.com/kminorito' target='_blank'><img src='../images/twitter.jpg' alt='twitter_icon' /></a>
					</div>
				</address>
			</div>
		</main>
		<footer>
			<span>© 2018 Shingeki no Kyojin!</span>
		</footer>
	</div>

</body>
</html>";
?>