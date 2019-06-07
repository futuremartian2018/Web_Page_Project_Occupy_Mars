<?php
		session_start();
		$_SESSION['page'] = 'iss.php';	
		unset($_SESSION['error']);		
?>
<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset = "utf-8" />
	<title>OccupyMars-ISS</title>
	<meta name="Science&Technology"  content="Strona przedstawia ciekawe informacje ze świata nauki i techniki! Jeżeli interesują Cię bieżące informacje na temat lotów kosmicznych, odkryś naukowych oraz wielu ciekawostek ze świata techniki, to jest to storna właśnie dla Ciebie!"/>
	
	<link rel="stylesheet" href="styles/iss.css" type="text/css"/>
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
				<h1 id="bridge" class = "ptitle">Międzynarodowa Stacja Kosmiczna</h1>
				<h4  class = "mtitle">Inicjatywa Mocarstw</h4>
				
					<div class="sect">
				<div class = "sideph">
						<div id ="photo" ></div>
					</div>
					<div class = "sidetx">
						<p>
							Międzynarodowa Stacja Kosmiczna (ang. International Space Station, ISS) to pierwsza stacja kosmiczna wybudowana z założenia przy współudziale wielu krajów. Pierwszymi państwami, jakie podjęły tą inictatywę były Stany Zjednoczone i Rosja, dlatego też stacja powstała poprzez połączenie ze sobą dwóch części: amerykańskiej i rosyjskiej. Pierwsze moduły zostały wyniesione już w 1998 roku, natomiast pierwsza załoga zamieszkała na stacji dwa lata później, tj. w 2000 roku. USA obecnie przewiduje jej finansowanie do 2028 roku. Obecnie NASA proponuje stworzenie nowej stacji stale orbitującej wokół Księżyca.
						</p>
					</div>
					<div style ="clear:both"></div>
					</div>
				
					<div class ="sect">
						<p>Projekty nowej stacji zostały przedstawione m.in przez amerykańskie koncerny tajkie jak Lockheed Martin. Stacja ta nie wymagałaby stałej załogi i byłaby w stanie przeprowadzać część eksperymentów autnomicznie.</p>
					</div>
					
					<iframe src="https://www.youtube-nocookie.com/embed/K4YMFP9O-as?rel=0&iv_load_policy=3&fs=0" class ="vid"></iframe>
					
				<div class = "sect">
					<p> 
						Począwszy od 1998 roku na ISS przebywało 170 osób, z tego 50 było członkami stałych załóg w ramach 20 ekspedycji. Dla porównania – rosyjską stację Mir w ciągu 14 lat odwiedziło łącznie 137 ludzi. Niemal 1/4 wszystkich astronautów stanowiło załogę Międzynarodowej Stacji Kosmicznej lub pojazdów ją obsługujących.

						Pierwotnie stałe załogi składały się z trzech osób, wymienianych amerykańskimi wahadłowcami, jednakże po unieruchomieniu amerykańskich wahadłowców po katastrofie Columbii czasowo zmniejszono ich liczebność do dwóch. Do trzyosobowych załóg powrócono w 2006 r.; trzeci członek załogi był wymieniany przez wahadłowce. Natomiast od 2009 roku na stacji przebywają pełne, 6-osobowe załogi. W związku z wycofaniem wahadłowców z użytku wymiana załóg odbywa się wyłącznie za pomocą rosyjskich Sojuzów.

						Członkowie załóg ISS otrzymują następujące funkcje: dowódca ekspedycji (amer. CDR lub ros. KOM), inżynier pokładowy (amer. FE lub ros. BI), dowódca statku ratunkowego Sojuz (zawsze Rosjanin, KK) oraz pracownik naukowy ISS (SO, wprowadzone we wrześniu 2002).
					</p>
			    </div>
				
				<img class = "md" src="images/logos.png"></img>
				
				
				<div class = "sect">
					<p>
						Obecnie stacja jest owocem współpracy pięciu agencji kosmicznych: amerykańskiej NASA, rosyjskiej ROSKOSMOS, kanadyjskiej CSA, japońskiej JAXA oraz europejskiej ESA. 
					</p>
					
				</div>
				
				<h4 id="iss" class = "mtitle">Konstrukcja w Kosmosie</h4>
					
				<div class = "sect">
					<p>
						Budowa stacji była planowana już od 1990 raoku. Jej pierwszy moduł - Zarya, został wystrzelony 20 Listopada 1998 roku przez rosyjską rakietę Proton. Dwa tygodnie później moduł na pokładzie promu kosmicznego Endeavour wyniesiono amerykański moduł Unity. W trakcie 7 dniowej misji dokonano połączenia obu modółów. Dwa lata później został przyłączony kolejny rosyjski moduł Zvezda, który umożliwiał przebywanie na stacji maksymalnie dwuosobowej załogi. 
					</p>
					
				</div>
				<div class="sect">
				<div class = "sidepht">
						<img class="col" src="images/columbia.jpg"></img>
					</div>
					<div class = "sidetx">
						<p>
							1 Lutego 2003 roku miała miejsce katastrofa promu Columbia, co znacznie zahamowało proces rozbudowy stacji. W trakcie lotu kawałek izolacji oderwał się od zewnętrznego zbiornika z paliwem i uderzył w lewe skrzydło orbitera uszkadzając je. Podejrzewano, że uszkodzenia mogły być poważne, jednak zostały one zignorowane twierdząc, że załoga nie byłaby w stanie naprawić uszkodzenia, nawet gdyby zostało ono potwierdzone. 
						</p>
					</div>
					<div style ="clear:both"></div>
					</div>
					
				<div class = "sect">
					<p>
						W trakcie ponownego wejścia w ziemską atmosferę, uszkodzenie pozwoliło na dostanie się ciepłych gazów atmosferycznym pod osłonę termiczną i uszkodzenie wewnętrznej struktury skrzydła, co sprawiło, że prom kosmiczny utracił stabilność i rozpadł się. W wyniku katastrofy zginęło siedmioro członków załogi. Loty wahadłowców zostały wstrzymane i stacja polegała w całości na rosyjskiej agencji kosmicznej ROSKOSMOS.
						Najważniejsze moduły stacji, jak np. w pełni gotowe europejskie laboratorium Columbus, były zbyt ciężkie, aby mogły zostać wyniesione na orbitę za pomocą innych pojazdów czy rakiet. Wymiana załóg odbywała się wyłącznie za pomocą statków kosmicznych Sojuz, zaś wyposażenie dostarczały wyłącznie niewielkie statki Progress, co wymusiło ograniczenie stałej załogi ISS do dwóch osób.

						26 lipca 2005, po ponad 2-letniej przerwie, wystartował wahadłowiec Discovery z misją testowo-logistyczną STS-114. Lot, mimo histerycznego nastawienia mediów, przebiegł pomyślnie. Stało się tak, mimo iż powtórzył się problem z odpadającą z kadłuba Discovery pianką. Program wahadłowców znów wstrzymano, aby rozwiązać ten problem. Kolejny lot Discovery (też testowo-logistyczny), przewidziany początkowo na 1 lipca 2006 roku, rozpoczął się 4 lipca 2006 roku. Misja STS-121 się powiodła. Prom Discovery wylądował 17 lipca 2006 roku o godzinie 15:14 czasu polskiego w Centrum Kosmicznym Kennedy'ego na Florydzie. 9 września 2006 wahadłowiec Atlantis wystartował do misji konstrukcyjnej STS-115. Misja, podczas której do ISS dołączone zostały nowe baterie słoneczne, trwała do 21 września.
					</p>
				</div>
					<iframe src="https://www.youtube-nocookie.com/embed/vgfWH3g9kpY?rel=0&iv_load_policy=3&fs=0" class ="vid"></iframe>
					
				<div class = "sect">
					<p>
						10 grudnia wystartował do ostatniej w 2006 roku, logistyczno-konstrukcyjnej misji STS-116, wahadłowiec Discovery wraz z siedmioosobową załogą. Misja, trwająca do 22 grudnia, zakończyła się pełnym sukcesem.

						9 czerwca 2007 wahadłowiec Atlantis wystartował do misji konstrukcyjnej STS-117. Miała ona na celu zamontowanie nowych paneli słonecznych.

						W styczniu 2010 roku załodze ISS udostępniono bezpośrednie połączenie z Internetem.

						Ostatnia misja wahadłowca do ISS miała miejsce w lipcu 2011 (STS-135) Była to misja zaopatrzeniowa, a zarazem ostatnia misja całego programu STS.
					</p>
				</div>
					
					<img class = "md" src="images/dragon.jpg"></img>
				<div class ="sect">
					<p>
						Obecnie NASA korzysta z usług prywatnych firm w celach zaopatrzeniowych, natomiast Rosjanie zajmują się lotami załogowymi na ISS. Jedną z takich firm jest SpaceX, która wielokrotnie dokonała operacji zaopatrzeniowych dla stacji przy użyciu własnej kapsuły Dragon. Statek Dragon ma stosunkowo dużą ładowność. Podczas pierwszego lotu przywieziono na Ziemię ponad 750 kilogramów ładunku. Obecnie SpaceX dokonało testu kolejnej kapsuły Dragon V2, która w przyszłości posłuży w lotach załogowych.
					</p>
				</div>
					<iframe src="https://www.youtube-nocookie.com/embed/fPmPUrE5IYI?vq=hd1080&showinfo=0&rel=0&iv_load_policy=3&fs=0"  class ="vid"></iframe>
				
				<h4 id="life" class = "mtitle">Sweet home... ISS</h4>
				
				<div class ="sect">
					<p>
						Czas na stacji mierzony jest według Uniwersalnego Czasu Koordynowanego (ang.  Universal Time Coordinated, UTC). Jest to wzorcowy czas ustalany na podstawie Międzynarodowego Czasu Atomowego (ang. International Atomic Time), który jest standardem pomiaru utworzonym w 1955 roku i bazuje na uśredianiu czasu mierzonego przez wiele zegarów atomowych na świecie. UTC uwzględnia również ruch obrotowy Ziemi i jest koordynowany względem czasu słonecznego.
					</p>
				</div>
				<iframe src="https://www.youtube-nocookie.com/embed/oZvwn9B7LUA?vq=hd1080&showinfo=0&rel=0&iv_load_policy=3&fs=0" class ="vid"></iframe>
				
				<div class ="sect">
					<p>
						Dzień załogi zaczyna się pobudką o godzinie 06:00, po czym następuje poranna inspekcja calej stacji. Załoga je śniadanie i bierze udział w codziennej konferencji z Kontrolą Misji, zanim rozpocznie pracę około godziny 08:10. Potem następują ćwiczenia fizyczne, po których załoga pracuje do godziny 13:05. Po godzinnej przerwie przychodzi czas na kolejne ćwiczenia oraz pracę, zanim rozpoczną przygotowania do snu około godziny 19:30. Ustalony czas snu rozpoczyna się o godzinie 21:30. Załoga pracuje zazwyczaj około dziesięciu godzin w dni robocze oraz pięć godzin w soboty, resztę czasu mogą przeznaczyć na zaległą pracę lub relaks.
					</p>
				</div>
				
				<iframe src="https://www.youtube-nocookie.com/embed/4exaXdPKS3Y?vq=hd1080&showinfo=0&rel=0&iv_load_policy=3&fs=0" class ="vid"></iframe>
				
				<div class ="sect">
					<p>
							Większość żywności na stacji jest przechowywana w specjalnych plastkiowych torbach. Puszki stosowane są stosunkowo rzadko, ponieważ są ciężkie, a zatem kosztowne w transporcie. Każdy członek załogi posiada własne paczki z jedzeniem i może ugotować je w kuchni pokładowej. Kuchnia zawiera dwa urządzenia podgrzewające jedzenie, lodówkę i podajnik z wodą. Napoje mają postać proszku, który jest mieszany z wodą przed wypiciem. Jakiegolwiek resztki jedzenia muszą zostać zebrane, aby zapobiec uszkodzeniu filtrów powietrza i innych urządzeń pokładowych
							
					</p>
				</div>
				
				<iframe src="https://www.youtube-nocookie.com/embed/EkRRo5DN9lI?vq=hd1080&showinfo=0&rel=0&iv_load_policy=3&fs=0" class ="vid"></iframe>
				
				
					
			</header>
		
		
		</div>
		
		<div class ="aside" >
		<p style = "color: #DAA520">Zawarte Informacje</p>
				<ul class ="pglist">
				<a id = "link1" href="#"><img  class="impglist" src="images/bridge.jpg"></img></a>
				<li><a id = "link2" href = "#" >Kosmiczny Most</a></li>
				<a id = "link3" href="#"><img  class="impglists" src="images/insignia.png"></img></a>
				<li><a id = "link4" href = "#" >Powstanie ISS</a></li>
				<a id = "link5" href="#"><img class="impglist" src="images/life.png"></img></a>
				<li><a id = "link6" href = "#" >Życie na stacji</a></li>
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
	<script src ="js/islide.js" ></script>
	<script src ="js/jquery.scrollTo.min.js" ></script>		
	<script src ="js/iss.js" ></script>	
					
	
</body>
</html>