<?php
		session_start();	
		$_SESSION['page'] = 'apollo.php';
		unset($_SESSION['error']);
?>
<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset = "utf-8" />
	<title>OccupyMars-Apollo</title>
	<meta name="Science&Technology"  content="Strona przedstawia ciekawe informacje ze świata nauki i techniki! Jeżeli interesują Cię bieżące informacje na temat lotów kosmicznych, odkryś naukowych oraz wielu ciekawostek ze świata techniki, to jest to storna właśnie dla Ciebie!"/>
	
	<link rel="stylesheet" href="styles/apollo.css" type="text/css"/>
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
				<h1 id="kenmon" class = "ptitle">Program Apollo</h1>
				<h4  class = "mtitle">We choose to go to the Moon</h4>
				
					<p>
						"We choose to go to the Moon!" Tymi słowami, 12 września 1962 roku, prezydent John F. Kennedy urzekł widownię na Rice Stadium w 
						Houston. Jego wypowiedź przepełniona była entuzjazmem, albowiem tego właśnie potrzebował od amerykańskiej opinii publicznej.
						Entuzjazmu dla programu Apollo mającego postawić człowieka na Księżycu.
					</p>	
				
				
				<div >
					<iframe class ="vid" src="https://www.youtube-nocookie.com/embed/kwFvJog2dMw?rel=0&iv_load_policy=3&fs=0"   ></iframe>
				 </div>
				<div class = "sect">
					<p> 
						Oczywiście przyczyny tej decyzji nie miały wiele wspólnego z pragnieniem realizacji ludzkich aspiracji o lotach na Księżyc. Zimna wojna, czyli konflikt pomiędzy USA a ZSRR trwający w latach 1947 - 1991, była główną przyczyną amerykańskich ambicji.  Gdy 4 października 1957 roku Sowieci wystrzelili swojego pierwszego sztucznego satelitę Sputnika 1, Stany Zjednoczone w opinii pubicznej zdawały się przegrywać 'wyścig kosminczny'. W rzeczywistości zdarzenie to wywołało niepokój władz USA, albowiem obawiały się, że ZSRR może użyć nowej technologii do ataków nuklearnych na amerykańskiej ziemii. Potrzebny był więc cel, który zyskałby akceptację opinii publicznej, a tym samym pozwolił na rozwój technologii rakietowej przez wojsko amerykańskie i NASA. Propozycja ta nie zyskała poparcia Kongresu, przed którym Kennedy przedstawił propozycję lotu człowieka na księżyc 25 Maja 1961 roku. Niemniej jednak jeszce tego samego roku wybrano Houston w Texasie, jako lokację placówki, gdzie program Apollo miał być rozwijany. 
					</p>
			    </div>
					
				<h4 id="vbraun" class = "mtitle">Inżynier Nazistów i Amerykanów</h4>
					
				<div class = "sect">
					<p>
						Werhner von Braun, postać ta jest zarówno podziwiana jak i owiana sporymi kontrowersjami. W czasie drugiej wojny światowej pracował on dla Nazistowskich Niemiec nad programem rakietowym. Wówczas jego największym osiągnięciem była rakieta V2. Była to pierwsza na świecie rakieta balistyczna dużego zasięgu. 
					</p>
					
				</div>
				<div class="sect">
				<div class = "sideph">
						<div id ="photo" ></div>
					</div>
					<div class = "sidetx">
						<p>
							Rakiety V2 zostały użyte przez Wermacht w atakach przeciw Aliantom w Londynie, Antwerpie oraz Liège. Po zakończeniu II wojny światowej von Braun został, wraz z innymi niemieckimi naukowcami, przejęty przez amerykański rząd w wyniku tzw. Operacji Paperclip. Naukowcy ci zostali zaangażowani w wiele militarnych programów rządowych. Dzięki temu USA kontynuowało pracę nad rakietą V2. W 1946 roku Stany wystrzeliły V2 w kosmos, gdzie dokonała pierwszego w historii zdjęcia Ziemi z przestrzeni kosmicznej.
						</p>
					</div>
					<div style ="clear:both"></div>
					</div>
					
				<div class = "sect">
					<p>
						W roku 1957 po wystrzeleniu Sputnika przez ZSRR von Braun oraz jego niemiecki zespół zostali przydzieleni do pracy nad rakietą, mającą możliwość wynoszenia obiektów na orbitę. W 1958 po założeniu NASA rozpoczęto prace nad projektem. Finalnym efektem prac była rakieta Saturn V, która była podstawą programu Apollo.
					</p>
				</div>
					
				<div>
					<iframe class ="vid" src="https://www.youtube-nocookie.com/embed/eipw03noUls?rel=0&iv_load_policy=3&fs=0" ></iframe>
				</div>	
				
				<h4 id="apollo" class = "mtitle">Apollo</h4>
				
				<div class ="sect">
					<p>
							Program Apollo rozpoczął się od tragedii. 21 Lutego 1967 miała miejsce pierwsza misja nazywana wtedy AS-204, która była pierwszą załogową misją przeprowadzoną w ramach tego projektu. Miała za zadanie wynieść załogę do niskiej orbity okołoziemskiej, jednak nigdy nie udało się osiągnąć tego celu. Rakieta nigdy nie wystartowała. W wyniku pożaru, który wybuchł w kabinie podczas próby startu silników, cała załoga zginęła.
					</p>
				</div>
				
				<img class = "md" src="images/apollof.jpg"></img>
				
				<div class ="sect">
					<p>
							Początkowo loty załogowe wstrzymano na 20 miesięcy. Przeprowadzono szereg misji bezzałogowych, a gdy te zakończyły się sukcesem przeprowadzono misje załogowe w niskiej orbicie okołoziemskiej.
							Kolejnym celem była lot załogowy podczas którego kapsuła z kosmonautami okrążyłaby Księżyc i powróciła na Ziemię.
							
					</p>
				</div>
				
				<img class = "md" src="images/lunaro.jpg"></img>
				
				<div class ="sect">
					<p>
							Kulminacją tych ambicji była misja Apollo 8, która miała miejsce 21 Grudnia 1968 roku. Podczas tej misji trzej astronauci - Frank Borman, James Lovell i William Anders - zostali pierwszymi ludźmi, którzy opuścili orbitę okołoziemską. Podczas tego lotu zostało zrobione słynne zdjęcie przedstawiające wschód Ziemi nad horyzontem Księżyca.
							
					</p>
				</div>
				
				<img class = "md" src="images/moone.jpg"></img>
				
				<div class ="sect">
					<p>
							Zwieńczeniem programu Apollo było lądowanie na Księżycu w trakcie misji Apollo 11.
							
					</p>
				</div>
				
				<h4 id="gleap" class = "mtitle">One giant leap for mankind</h4>
				<iframe class ="vid" src="https://www.youtube-nocookie.com/embed/HCt1BwWE2gA?rel=0&iv_load_policy=3&fs=">
				</iframe>
					
				<div class ="sect">
					<p>
							Apollo 11 miała miejsce 20 Czerwca 1969 roku. Dwaj astronauci - Neil Armstrong i Buzz Aldrin byli pierwszymi ludźmi, którzy odbyli spacer bo powierzchni Księżyca.
							
					</p>
				</div>	
					
			</header>
		
		
		</div>
		
		<div class ="aside" >
		<p style = "color: #DAA520">Zawarte Informacje</p>
				<ul class ="pglist">
				<a id = "link3" href="#"><img  class="impglist" src="images/choose.jpg"></img></a>
				<li><a id = "link1" href = "#" >We choose to go to the Moon</a></li>
				<a id = "link4" href="#"><img  class="impglist" src="images/vbrock.jpg"></img></a>
				<li><a id = "link2" href = "#" >Werhner von Braun</a></li>
				<a id = "link5" href="#"><img class="impglist" src="images/a11.png"></img></a>
				<li><a id = "link6" href = "#" >Apollo</a></li>
				<a id = "link7" href="#"><img class="impglist" src="images/footprint.jpg"></img></a>
				<li><a id = "link8" href = "#" >Small Step</a></li>
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
	<script src ="js/apslide.js" ></script>
	<script src ="js/jquery.scrollTo.min.js" ></script>		
	<script src ="js/apollo.js" ></script>	
					
	
</body>
</html>