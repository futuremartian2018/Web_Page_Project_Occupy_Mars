<?php
		session_start();	
		$_SESSION['page'] = 'index.php';
		unset($_SESSION['error']);
?>
<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset = "utf-8" />
	<title>OccupyMars-Home</title>
	<meta name="Science&Technology"  content="Strona przedstawia ciekawe informacje ze świata nauki i techniki! Jeżeli interesują Cię bieżące informacje na temat lotów kosmicznych, odkryś naukowych oraz wielu ciekawostek ze świata techniki, to jest to storna właśnie dla Ciebie!"/>
	
	<link rel="stylesheet" href="styles/main.css" type="text/css"/>
	
	<link rel="stylesheet" href="fontello/css/fontello.css" type="text/css"/>
	
	<link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css?family=Kelly+Slab&display=swap" rel="stylesheet">
	
</head>

<body onload = "slide()">
	<div class="header">
		
		<div class = "title"><a class = "home" href = "index.php">Occupy<span style="color: #911121">Mars</span></a></div>
		<?php
		if(isset($_SESSION['logged'])){
echo<<<END

		<div class = "info">
			<ol class = "loglist">
			<li><a href = "logout.php" ><i class = "icon-lock"></i></a></li>
			<li><a href = "personal.php" ><i class = "icon-user"></i></a></li>
			</ol>
		</div>
				
END;
		}
		
		else {
			
echo<<<END

		<div class = "info">
			<ol class = "loglist">
			<li><a href = "log.php" ><i class = "icon-lock-open"></i></a></li>
			<li><a href = "register.php" ><i class = "icon-user-add"></i></a></li>
			</ol>
		</div>
		
END;
				
		}
		?>
		<div style ="clear:both"></div>
		
		<div class="navbar">
			<ol class = "navlist">
			<li><a href = "index.php" ><i class = "icon-globe"></i></a></li>
			<li><a href = "#" ><i class = "icon-rocket"></i></a>
				<ul>
					<li><a href = "apollo.php" >Program Apollo</a></li>
					<li><a href = "iss.php" >Stacja Kosmiczna</a></li>
				</ul>
			</li>
			<li><a href = "#" ><i class = "icon-space-shuttle"></i></a>
				<ul>
					<li><a href = "explore.php" >Eksploracja Marsa</a></li>
				
				</ul>
				</li>
			<li><a href = "#" ><i class = "icon-doc-text-inv"></i></a>
				<ul>
				<li><a href = "raports/SKIBD_Lab1_SSH_Arkadiusz_Marta.pdf" target="_blank">Sprawozdanie nr 1</a></li>
				<li><a href = "raports/SKIBD_Lab2_Badanie_sieci_Arkadiusz_Marta.pdf" target="_blank">Sprawozdanie nr 2</a></li>
				<li><a href = "raports/SKIBD_Lab3_Protokoły_Arkadiusz_Marta.pdf" target="_blank">Sprawozdanie nr 3</a></li>
				<li><a href = "raports/SKIBD_Lab4_HTML_Arkadiusz_Marta.pdf" target="_blank">Sprawozdanie nr 4</a></li>
				<li><a href = "raports/SKIBD_Lab5_email_Arkadiusz_Marta.pdf" target="_blank">Sprawozdanie nr 5</a></li>
				</ul>
			</li>
			</ol>
		</div>
	</div>
	
	<div class = "bound">
	<div class="main">
		<div class="article">
			<header>
				<h1 class = "ptitle">Strona główna</h1>
				<p>
					Strona ta jest poświęcona historii rozwoju lotów kosmicznych, najważniejszych osiągnięć w tej dziedzinie oraz analizie nowych informacji dotyczących tego tematu!
				</p>
				
				
				<div>
					<div id ="photo" ></div>
				 </div>
				<div class = "sect">
					<p> 
						Loty kosmiczne posiadają w sobie pierwiastek techniczny i humanistyczny. Pierwiastek techniczny dotyczy wszelkich elementów inżynierskich, a więc budowy i testów napędów oraz paliw, doboru odpowiednich materiałów, zaprojektowania optymalnego kształtu rakiety itd. Pierwiastek humanistyczny z kolei jest związany z głębokimi ludzkimi pragnieniami, takimi jak przekraczanie granic możliwości, możliwość odkrywanina tego, co nieznane. Dzięki niemu wszelkie dokonania w tej dziedzinie są możliwe, ponieważ są motorem napędowym innowacji i źródłem pasji wielu utalentowanych ludzi zaangażowanych w to przedsięwzięcie.
					</p>
					
					<p>
						Na tej stronie znajdziesz informacje poświęcone rozwojowi tej dziedziny od jej narodzin, aż po współczesne osiągnięcia. Opowiemy również, jakie nadzieje na przyszłość można wiązać z tą dyscypliną, skupiając się na możliwości podróżowania w układzie słonecznym i jego kolonizacji.
					</p>
				</div>
				
				<div class ="sect">
					<h2 class="bio">Krótkie biografie wpływowych osobistości</h2>
				<div class ="pinfo">
				
					<div class = "pimg">
						<a href = "https://en.wikipedia.org/wiki/Elon_Musk" target="_blank"><img  src ="images/melon.jpg"></img></a>
					</div>
					
					<div class = "pbio">
						<h3 class="btitle">Elon Musk<h3>
						<p>
							Urodzony w RPA, w wieku 19 lat emigrował do Kanady a następnie do USA. Założyciel firm takich jak Tesla, PayPal, czy SpaceX. Celem SpaceX, jak twierdzi sam Musk, jest uczynienie życia multiplanetarnym. Obecnym celem jego firmy jest stworzenie rakiet wielokrotnego użytku, posiadających możliwość przeniesienia znacznego ładunku, co umożliwiłoby kolonizację Marsa.
						</p>
					</div>
					
				</div>
				
				<div class ="pinfo">
				
					<div class = "pimg">
						<a href="https://en.wikipedia.org/wiki/Wernher_von_Braun" target="_blank"><img   src ="images/vbraun2.jpg"></img></a>
					</div>
					
					<div class = "pbio">
						<h3 class="btitle">Wernher von Braun<h3>
						<p>
							Urodzony w Niemczech, był jednym z głównych konstruktorów rakiet balistycznych V2 dla nazistów w czasie II wojny światowej. Po wojnie amerykańskie władze przyjęły go do pracy w ramach programów armii amerykańskiej. W 1958 roku został członiem NASA na stanowisku dyrektora. Jego kolejnym dziełem była rakieta Saturn V, która była podstawą programu misji na księżyc Apollo. 
						</p>
					</div>
					
				</div>
				
				<div class ="pinfo">
				
					<div class = "pimg">
						<a href = "https://en.wikipedia.org/wiki/Peter_Beck_(engineer)" target="_blank"><img  src ="images/pbeck.jpg"></img></a>
					</div>
					
					<div class = "pbio">
						<h3 class="btitle">Peter Beck<h3>
						<p>
							Urodzony w Nowej Zelandii, od dziecka marzył o zostaniu konstruktorem rakiet. Jako 17 pracując w firmie Fisher & Paykel używał tamtejszego warsztatu w celach eksperymentalnych. Podczas pracy w Industrial Research pracował nad kompozytami i inteligentymi materiałami. W 2006 roku założył Rocket Lab, która jest jednym z najszybciej rozwijających się przedsiębiorstw w branży.
						</p>
					</div>
					
				</div>
				
				</div>
			</header>
		
		</div>
		
		<div class ="aside" >
		<p style = "color: #DAA520">Polecane tematy</p>
			
			<div class = "topic">
				<div>
					<a href="iss.php"><img src="images/iss.jpg"></img></a>
					<a href="iss.php">Międzynarodowa Stacja Kosmiczna</a>
				</div>
				
				<p></p>
				
			</div>
					
			<div class = "topic">
				<div>
					<a href="explore.php"><img src="images/marsss.jpg"></img></a>
					<a href="explore.php">Odkrywanie Czerwonej Planety</img></a>
				</div>
			</div>
		
		<p style = "color: #DAA520">Polecane kanały YT</p>
		
			<div class = "topic">
				<div>
					<a href="https://www.youtube.com/curiouselephant" target="_blank"><img src="images/lei.jpg"></img></a>
					<a href="https://www.youtube.com/curiouselephant" target="_blank">Lei Shi / Curious Elephant</img></a>
				</div>
			</div>
		
		</div>
		<div style ="clear:both"></div>
		
		
		<div class="section">
		</div>
		
	</div>
	
	
	
	<div class ="explore">
	</div>
	
	</div>
	
	<div class = "footer">
		Wszelkie prawa zastrzeżone &copy A.Marta 2019
	</div>
	
	<script src ="js/jquery-3.4.1.min.js" ></script>
	<script src ="js/stick.js" ></script>
	<script src ="js/slide.js" ></script>
	
	
</body>
</html>