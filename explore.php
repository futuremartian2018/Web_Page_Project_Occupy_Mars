<?php
		session_start();
		$_SESSION['page'] = 'explore.php';
		unset($_SESSION['error']);
?>
<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset = "utf-8" />
	<title>OccupyMars-Explore</title>
	<meta name="Science&Technology"  content="Strona przedstawia ciekawe informacje ze świata nauki i techniki! Jeżeli interesują Cię bieżące informacje na temat lotów kosmicznych, odkryś naukowych oraz wielu ciekawostek ze świata techniki, to jest to storna właśnie dla Ciebie!"/>
	
	<link rel="stylesheet" href="styles/expl.css" type="text/css"/>
	<link rel="stylesheet" href="fontello/css/fontello.css" type="text/css"/>
	
	
	<link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css?family=Kelly+Slab&display=swap" rel="stylesheet">
	
</head>

<body onload = "apslide()">
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
				<h1 id="bridge" class = "ptitle">Badania Czerwonej Planety</h1>
				<h4  class = "mtitle">Mars Exploration Program</h4>
				
				<div class ="sect">
					Mimo iż żaden człowiek nie stąpał dotąd po powierzchni Czerwonej Planety, to ludzkość bardzo dobrze zna topografię Marsa, informacje na temat panujących tam warunków atmosferycznych itd. Stało się to możliwe dzięki wielu bezzałogowym misjom, wykorzystującym zrobotyzowane narzędzia służące do eksploracji i badań tej planety. 
				</div>
				<img class = "mars"  src="images/mars.jpg"></img>				
				<div class ="sect">
					Misje z udziałem człowieka są obecnie niemożliwe ze względu na brak odpowiednich technologii. NASA nie posiada obecnie rakiety, która byłaby w stanie wysłać załogę wraz z sprzętem badawczym i zapasami na dwukierunkową podróż. Dlatego obecnym celem NASA jest tzw. Mars Exploration Program, mający za cel badania powierzchni  Czerwonej Planety przy użyciu sond i łazików. Operacje te mają w przyszłości ułatwić załogowe misje na Marsa.
				</div>
				
				<img class = "mars"  src="images/explorate.jpg"></img>
				
				<div class ="sect">
					Program ten charakteryzują cztery główne cele. Pierwszym z nich jest ustalenie, czy znajduje się tam życie. Główną strategią było poszukiwanie wody na powierzchni Marsa, ponieważ w przypadku Ziemi woda odgrywa kluczową rolę w procesach życiowych. Poszukiwana jest zatem sama woda, a także miejsca w których mogłaby się znajdować, lub kiedyś się znajdowała. Poszukiwane są równie źródła energi w postaci geotermalnej lub innych źródeł energii chemicznej. Kolejnym celem jest określenie klimatu Marsa oraz czynników jakie wpływały na zmiany klimatyczne na Marsie. Obecnie wiadomo że klimat regulowany jest przez pokrywy lodowe, ruchy pyłu w atmosferze oraz wymianę pary wodnej między powierzchnią a atmosferą. W przypadku badań geologii Marsa najważniejszym celem jest zrozumienie różnic pomiędzy Czerwoną Planetą a Ziemią. Istotne są badania erozji wiatrowej, wpływu wody, wulkanów oraz tektoniki na kształtowanie się powierzchni planety. Analiza skał mogłaby pomóc w określeniu, czy na Marsie istniały w przeszłości duże zbiorniki wodne oraz czy posiadał on magnetosferę. Wszystkie poprzednie cele są istotne ze względu na ostatnią inicjatywę jaką jest eksploracja Marsa przez człowieka w postaci misji załogowych. Zbadanie czynników takich jak brak magnetosfery czy warstwy ozonowej ma wpły na czas przez jaki astronauci mogą przebywać na Marsie, jak również ochronę jaką będzie należało zaprojektować.
					
					
					
				</div>
				
				<h4 id="iss" class = "mtitle">Ciekawość na kółkach</h4>
				
					<div class="sect">
				
					<div class = "sidetx">
						<p>
							NASA wysłała na Marsa szereg sond i łazików w celach badawczych. Prowadziły one szeroki zakres czynności od zwykłych badań terenu po badania geologiczne oraz chemiczne mające sprawdzić obecność organizmów żywych. Jednymi z były Opportunity i  Spirit, których praca trwała od 2004 roku. Celem misji było określenie klimatu i geologii Marsa. Łaziki wykonywały szerego analiz geologicznych aby określić czy kiedykolwiek znajdowała się tu woda, oraz jakie minerały są zawarte w marsjańskim regolicie. Obydwa łaziki były zaprojektowane, aby pracować przez 90 soli, czyli 92 dni ziemskie.
						</p>
					</div>
					
					<div class = "sideph">
						<div id ="photo" ></div>
					</div>
					<div style ="clear:both"></div>
					</div>
				
				
				
				
					
				<div class = "sect">
					<p>
						Obydwa łaziki pracowały jednak znacznie dłużej niż przewidywano. Praca Spirit trwała do 2010 roku, aż do momentu gdy koła łazika zostały uszkodzone. Opportunity pracował aż do 2018 roku, a jego praca została przerwana w wyniku burzy piaskowej. Podczas niej łazik wszedł w stan hibernacji i żywiono nadzieje, że po jej zakończeniu uda się go przywrócić do pracy, co jednak się nie powiodło. Prawdopodobnie łazik doznał bardzo dużych uszkodzeń, albo jego panele słoneczne zostały pokryte zbyt grubą warstwą pyłu.
					</p>
					
				</div>
				<div class="sect">
				<div class = "sidepht">
						<img class="col" src="images/mlab.png"></img>
					</div>
					<div class = "sidetx">
						<p>
							Kolejnym ważnym łazikiem jest wysłany w 2011 roku w ramach Mars Science Laboratory łazik Curiosity. Łazik ten jest wciąż aktywny i przejechał łącznie 560km. Zadaniem MSL było zbadanie marsjańskiego klimatu i geolgoii. Ważnym było również sprawdzenie, czy w badanym regionie znajdowały się uwarunkowania środowiskowe, które pozwoliłyby na istnienie tam mikroorganizmów.
							Curiosity poszukiwał istnienia związków organicznych oraz ważnych pierwiastków koniecznych do procesów życiowych. 
						</p>
					</div>
					<div style ="clear:both"></div>
					</div>
					
				<div class = "sect">
					<p>
						Poszukiwał m.in. azotu, tlenu, fosforu czy siarki. Próbował również identyfikować  biomarkery, które mogłyby świadczyć o funkcjach życiowych mikroorganizmów. Curiosity zajmuje się także badaniem procesów atmosferycznych i wymiany wody pomiędzy atmosferą a regolitem. Przeprowadził on również szereg badań związanych z pomiarem natężenia promieniowania na powierzchni Marsa, co jest istotne z punktu widzenia przyszłych misji załogowych.
					</p>
				</div>
				
				<img class = "mars"  src="images/sunset.jpg"></img>
					
					<div class ="sect">
						<p>
							Curiosity jest podstawą konstrukcji kolejnego łazika, wysyłanego w ramach misji Mars 2020.
							Łazik ten zbada podobnie jak jego poprzednik procesy geologiczne oraz możliwość występowania życia na Marsie. Dodatkowo przygotuje istotne próbki, które  posłużą do dalszych badań. Próbki będa przechowywane w specjalnych pojemnikach, które zostaną przez łazik zostawione podczas jego trasy. Ich dokładna lokalizacja zostanie zapisana tak, aby w czasie kolejnych misji mogły zostać zebrane i przetransportowane na Ziemię.
						</p>
					</div>
					
					<iframe src="https://www.youtube-nocookie.com/embed/s595S1Vf3PE?vq=hd1080&showinfo=0&rel=0&iv_load_policy=3&fs=0" class ="vid"></iframe>
					
					<div class ="sect">
						<p>
							Mars 2020 będzie wyposażony w szereg 23 kamer o różnym przeznaczeniu. Będzie zawierał m.in. urządzenie testujące techcnologię pozyskiwania tlenu  poprzez rozkład dwutlenku węgla zawartego w marsjańskiej atmosferze, spektrometr ultrafioletowy SHERLOC, który będzie stosowany do identyfikacji materiałów organicznych. Możliwe również, że łazik zostanie wyposażony w zasilanego przez baterie słoneczne drona, którego celem będzie testowanie stabilności lotu na Marsie. Ma równiez posłyżyć do skanowania terenu i wyznaczania potencjalnych tras dla łazika.
						</p>
					</div>
				
				
				<img class = "mars"  src="images/mhs.jpg"></img>
				
				<div class ="sect">
						<p>
							Mars Helicopter Scout - MHS - będzie stanowił podstawę, na której będą budowane kolejne drony, których celem będzie powietrzna eksploracja Marsa i obiektów znajdujących się w atmosferze. Oczekuje się, że MHS wykona do pięciu lotów w trakcie 30 dniowych testów w 2021 roku.
						</p>
					</div>	
					
					<iframe src="https://www.youtube-nocookie.com/embed/O9YBPRF3o5w?vq=hd1080&showinfo=0&rel=0&iv_load_policy=3&fs=0" class ="vid"></iframe>
					
			</header>
		
		
		</div>
		
		<div class ="aside" >
		<p style = "color: #DAA520">Zawarte Informacje</p>
				<ul class ="pglist">
				<a id = "link1" href="#"><img  class="impglist" src="images/wanted.jpg"></img></a>
				<li><a id = "link2" href = "#" >Program Eksploracji Marsa</a></li>
				<a id = "link3" href="#"><img  class="impglist" src="images/selfie.jpg"></img></a>
				<li><a id = "link4" href = "#" >Łaziki Marsjańskie</a></li>
				</ul>
			
		</div>
		
		
		<div style ="clear:both"></div>
	
	
	</div>
	</div>
	
	<div class = "footer">
		Wszelkie prawa zastrzeżone &copy A.Marta 2019
	</div>
	
	<script src ="js/jquery-3.4.1.min.js" ></script>
	<script src ="js/stick.js" ></script>
	<script src ="js/eslide.js" ></script>
	<script src ="js/jquery.scrollTo.min.js" ></script>		
	<script src ="js/exp.js" ></script>	
					
	
</body>
</html>