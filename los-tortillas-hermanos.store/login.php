<?php

if(isset($_POST['email']) && isset($_POST['password'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	if($email == 'mail' && $password == 'mail') {
		echo ;	
	} else {
		echo ;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 1000px)" href="css/petitLogin.css">
	<link rel="icon" type="image/png" href="img/logoLosTortillas.png">
	<title>LosTortillasHermanos - History</title>
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
			
			<form class="loginBox" method="post">
				<input class="emailLogin" type="email" name="email" placeholder="Email...">
				<input class="passwordLogin" type="password" name="password" placeholder="Password...">
				<button class="subLogButton" type="submit">Login</button>
				<a class="registerButton" href="register.php">Register?</a>
			</form>

		</div>	

		<!-- oublie pas de rajouter ce truc en sql, je sais pas comment ça marche, tu viens du futur, tu te demerde :
			
			CREATE TABLE `users` (
			`email` varchar(100) NOT NULL,
			`password` varchar(100) NOT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=latin1;

			faut aussi le mettre dans register mais un peu différemment connard
			cherche "mySQL migration tool" sur google pour avoir la soluce
			
		 -->


		<?php
		
		
		?>

			
		<footer>
			<div id="resBox">
				<a class="réseaux" target="_blank" href="https://www.facebook.com/profile.php?id=100084051005720"><img class="imgRés" src="img/facebook.png"></a>
				<a class="réseaux" target="_blank" href="https://twitter.com/LosTortillasHem"><img class="imgRés" src="img/twitter.png"></a>
				<a class="réseaux" target="_blank" href="https://www.instagram.com/lostortillashermanos/"><img class="imgRés" src="img/instagram.png"></a>
			</div>

			<div id="copyright">
				<p>&copy 2022 Los Tortillas Hermanos <br> All Right Reserved</p>
			</div>
		</footer>
		<div id="downBande"></div>		

	</div>


</body>
</html>