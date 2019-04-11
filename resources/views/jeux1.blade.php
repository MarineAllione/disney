<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Morpion (by Wandrille K.)</title>
	<link id="icone" rel="icon" href="./images/onglet.ico" type="image/ico" />
	<link rel="stylesheet" href="css/style.css" />
<!--*************************************************************************
	Description : Code HTML pour un jeu du morpion en JS
	Author : Wandrille K.
	Author URL : http://tuto.wibb.free.fr
	Author mail : tuto.wibb@free.fr
	Date : 13 D�cembre 2013
	*************************************************************************-->
	<!-- Styles -->
	<style>
			html, body {
					background-image: url('img/i.jpg');
					background-size: cover;


			}

			.content {
					text-align: center;
			}

	</style>

</head>

<body>

	<div class="content">
		<div class="title m-b-md">
			<img src="img/morpion.png">
		</div>
	</div>
<br>
<br>

													<!--jeux-->
	<div id="field">
		<canvas id="canvas" width="400" height="400">
			<p>
			D�sol�, votre navigateur ne supporte pas Canvas. Mettez-vous � jour. Ou utilisez Firefox ou Google Chrome.
			</p>
		</canvas>

		<div id="scores">
<br>
			<p id="nbMatches">0 manche</p>
			<p class="scores-title">Scores</p>
<br>
			<p id="player1" class="player1"><strong>X</strong> Joueur 1 : <span id="score1">0</span></p>
			<p id="player2" class="player2"><strong>O</strong> Joueur 2 : <span id="score2">0</span></p>
			<p id="scoreMessages" class="messages"></p>
		</div>
	</div>


	<br>
	<br>
	                      <!-- btn retour-->
	<form>
	    <div class="content">
	      <div class="title m-b-md">
	        <img type = "button" src="img/retour.png" onclick = "history.back()">
	      </div>
	    </div>
	</form>


	<script type="text/javascript" src="js/jquery.js"> </script>
	<script type="text/javascript" src="js/script.js"> </script>

</body>

</html>
