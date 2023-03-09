<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/job.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 1000px)" href="css/petitJob.css">
	<link rel="icon" type="image/png" href="img/logoLosTortillas.png">
	<title>LosTortillasHermanos - Job Listing</title>
</head>
<body>
	<div id="ConteinerBox">


		<div id="upBande"></div>
		<header>
			<a class="buttonLogo" href="index.php"><img class="Logo" src="img/logoLosTortillas.png"></a>
		</header>

		<div id="buttonBox">
			
				<a href="history.php" class="buttona">OUR HISTORY</a>
					
					<img class="Losange" src="img/petitLosange.png">

				<a href="values.php" class="buttona">OUR VALUES</a>
			
					<img class="Losange" src="img/petitLosange.png">

				<a href="job.php" class="buttona">JOB LISTINGS</a>

		</div>


		<div id="MainBox">
			<div id="laCafJob">
				<p class="cafp">There no job here, we are in France</p>
				<p class="cafpR">but you can contact us right here (pls contact us, this contact thing was hard to make)</p>
			</div>

			<div id="contactBox">
				
				<p class="contactPresText">Contact us right here !<br>(did lalo sent you ?)</p>
				<form method="post">
					<label>Name :</label>
					<input type="text" name="nom" required>
					<label>Email :</label>
					<input type="email" name="email" required>
					<label>Subject :</label>
					<input type="text" name="sujet" required>
					<label>Message :</label>
					<textarea name="message" required></textarea>
					<input class="buttoni" type="submit" value="Submit">
				</form>

				<?php 
				if (isset($_POST["message"])) {
					$message = "Ce message vous a été envoyé via la page contact du site de Los-Tortillas-Hermanos
					Nom : " . $_POST["nom"] . "
					Email : " . $_POST["email"] . "
					Message : " . $_POST["message"];
					$retour = mail("alkudev@gmail.com", $_POST["sujet"], $message, "From:contact@exemplesite.fr" . "\r\n" . "Reply-to:" . $_POST["email"]);
					if ($retour) {
						echo "l'email a bien été envoyé.";
					}
				}
				 ?>


			</div>


		</div>


		<footer>
			<div id="resBox">
				<a class="réseaux" target="_blank" href="https://www.facebook.com/profile.php?id=100084051005720"><img class="imgRés" src="img/facebook.png"></a>
				<a class="réseaux" target="_blank" href="https://twitter.com/LosTortillasHem"><img class="imgRés" src="img/twitter.png"></a>
				<a class="réseaux" target="_blank" href="https://www.instagram.com/lostortillashermanos/"><img class="imgRés" src="img/instagram.png"></a>
			</div>

			<div id="copyright">
				<p>&copy 2022 Los Tortillas Hermanos <br> All Right Reserved (I guess)</p>
			</div>
		</footer>
		<div id="downBande"></div>


	</div>


</body>
</html>