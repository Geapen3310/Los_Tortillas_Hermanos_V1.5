<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/history.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 1000px)" href="css/petiteHistory.css">
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
		
				<audio src="music/tuyo.mp3" autoplay loop>
					<p>If you are reading this, it is because your browser does not support the audio element.</p>
					<embed src="music/tuyo.ogg" width="100" height="100" hidden="false"/>
				</audio>


				<div class="loginEnterBox">
					<a class="loginButton" href="login.php">
						Login
					</a>
				</div>


				<!-- <div id="mercyTextBox">
					<p class="mercyText">
						The Tortillas Brothers fight all their life to survive in Zacatecas, but now the Tortillas Brother need money like our famous uncle : "Dutch Van Der Linde", so you can buy something here or just give us MONEY.
					</p>
				</div> -->

				<div id="productBox">
					
					<div class="textProductBox">
						
						<p class="productTitle">Autographs</p>
						<p class="productCollector">Collector</p>
						<p id="productPrice">0.01 €</p>
						<p class="typeAuto">model :</p>
						<div class="model">
							<a id="auto1"></a>
							<a id="auto2"></a>
							<a id="auto3"></a>
						</div>
						<p class="productTDescription">Description :</p>
						<p class="productDescription">You can choose your autograph and BUY it. There Lalito, Flynn Jr Blanco and Miguel Salazar Autograph, it's priceless, BUY IT NOW !</p>
					</div>

					<div class="imgProductBox">
						<img id="lalito" src="img/lalitoSigna.png" alt="">
					</div>

					<script type="text/javascript">
						
						let auto1 = document.querySelector('#auto1');
						let auto2 = document.querySelector('#auto2');
						let auto3 = document.querySelector('#auto3');
						let image = document.querySelector('#lalito');
						let productPrice = document.querySelector('#productPrice')

						auto1.addEventListener('click', () =>{
							image.src = "img/lalitoSigna.png";
							productPrice.innerHTML = "0.01 €";							
						});

						auto2.addEventListener('click', () =>{
							image.src = "img/miguelSigna.png";
							productPrice.innerHTML = "1.00 €";
						});

						auto3.addEventListener('click', () =>{
							image.src = "img/flynnJr.png";
							productPrice.innerHTML = "0.50 €";
						});

					</script>

				</div>

		</div>

			
		<footer>
			<div id="resBox">
				<a class="réseaux" target="_blank" href="https://www.facebook.com/profile.php?id=100084051005720"><img class="imgRés" src="img/facebook.png"></a>
				<a class="réseaux" target="_blank" href="https://twitter.com/LosTortillasHem"><img class="imgRés" src="img/twitter.png"></a>
				<a class="réseaux" target="_blank" href="https://www.instagram.com/lostortillashermanos/"><img class="imgRés" src="img/instagram.png"></a>
			</div>

			<div id="copyright">
				<p>&copy 2022 Los Tortillas Hermanos <br> All Right Reserved<br>(definitely not, there narcos song playing up here, we can't do this)</p>
			</div>
		</footer>
		<div id="downBande"></div>		

	</div>


</body>
</html>