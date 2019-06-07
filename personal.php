<?php
		session_start();
		if(!isset($_SESSION['logged'])){
			header('Location:'.$_SESSION['page']);
			exit();
		}
?>

<!DOCTYPE HTML>
<html lang = "pl">
<head>

	<title>OccupyMars-Logowanie</title>
	<meta charset = "utf-8" />
	
	
	<link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kelly+Slab&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="styles/per.css" type="text/css"/>
	<link rel="stylesheet" href="fontello/css/fontello.css" type="text/css"/>
	
</head>





<body>
	<div class="header">
		
		<div class = "title"><a class = "home" href = "index.php">Occupy<span style="color: #911121">Mars</span></a></div>
		<div class = "info">
			<ol class = "loglist">
			<li><a href = "logout.php" ><i class = "icon-lock"></i></a></li>
			<li><a href = <?php echo $_SESSION['page']?> ><i class = "icon-up-open"></i></a></li>
			</ol>
		</div>
		<div style ="clear:both"></div>
		
	</div>
	
	
		<div class ="getin"> 
		
			<h1 style="color: #45ECC5">TWOJE DANE</h1>
		
	
		<?php
	 


		echo '<div class = "acinfo">';
			echo'<span style ="color:#3767C7";>Nick: </span>'.$_SESSION['acname'].'<br/>';
			echo'<br/><span style ="color:#DAA520";>Email: </span>'.$_SESSION['acmail'].'<br/>';
			echo'<br/><span style ="color:#1DAE7D";>Liczba odwiedzin: </span>'.$_SESSION['acvisit'].'<br/>';
		echo'</div>';
				

		
		
		?>
		<h1 style="color: #45ECC5">ZMIEN DANE</h1>
		
		<form class = "log" action="datamod.php" method="post">
			<span style="color: #911121;">Podaj nowy nick:</span> <br/> <input class="in" type="text" name="nickmod"/> <br/>
			<?php
			
				if(isset($_SESSION['error_nickm'])){
					echo '<div style="color: red">'.$_SESSION['error_nickm'].'</div><br/>'; 
					unset($_SESSION['error_nickm']);
				}
				
				if(isset($_SESSION['regsuc1'])){
					echo '<div style="color: red">'.$_SESSION['regsuc1'].'</div><br/>'; 
					unset($_SESSION['regsuc1']);
				}
			
			?>
			<input class= "logbut" type="submit" value="Zmiana nicku" ></br>
		</form>
		<form class = "log" action="mailmod.php" method="post">
			<span style="color: #911121;">Podaj nowy adres e-mail:</span> <br/> <input class="in" type="text" name="mailmod"/> <br/>
			<?php
			
				if(isset($_SESSION['error_mailm'])){
					echo '<div style="color: red">'.$_SESSION['error_mailm'].'</div><br/>'; 
					unset($_SESSION['error_mailm']);
				}
				
				if(isset($_SESSION['regsuc2'])){
					echo '<div style="color: red">'.$_SESSION['regsuc2'].'</div><br/>'; 
					unset($_SESSION['regsuc2']);
				}
			
			?>
			<input class= "logbut" type="submit" value="Zmiana e-mail" ></br>
		</form>
		<form class = "log" action="passmod.php" method="post">
			<span style="color: #DAA520">Nowe hasło: <br/> <input class ="in" type="password" name="passmod1"/> <br/>
			<span style="color: #DAA520">Powtórz hasło: <br/> <input class ="in" type="password" name="passmod2"/> <br/>
			<?php
			
				if(isset($_SESSION['error_passwdm'])){
					echo '<div style="color: red">'.$_SESSION['error_passwdm'].'</div><br/>'; 
					unset($_SESSION['error_passwdm']);
				}
				
				if(isset($_SESSION['regsuc3'])){
					echo '<div style="color: red">'.$_SESSION['regsuc3'].'</div><br/>'; 
					unset($_SESSION['regsuc3']);
				}
			
			?>
			<input class= "logbut" type="submit" value="Zmiana hasła" ></br>
		</form>	
			
		</div>
		
		<div class = "photo">
			<img class="imac" src ="images/apollo4.jpg"></img>
		</div>
		<div style ="clear:both"></div>
	<div style="text-align: center; margin-top: 15px; color:white;">
			Wszelkie prawa zastrzeżone &copy A.Marta 2019
		</div>

</body>
</html>

