<?php
		session_start();
		if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
			header('Location:'.$_SESSION['page']);
			exit();
		}
?>

<!DOCTYPE HTML>
<html lang = "pl">
<head>

	<title>OccupyMars-Logowanie</title>
	<meta charset = "utf-8" />
	
	
	<link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Kelly+Slab&display=swap" rel="stylesheet"/>
	<link rel="stylesheet" href="styles/log.css" type="text/css"/>
	<link rel="stylesheet" href="fontello/css/fontello.css" type="text/css"/>
	
</head>




<body>
	<div class="header">
		
		<div class = "title"><a class = "home" href = "index.php">Occupy<span style="color: #911121">Mars</span></a></div>
	</div>
	
	
		<div class ="getin"> 
		
			<h1 style="color: #DAA520">ZALOGUJ SIĘ</h1>
			<?php
			
				if(isset($_SESSION['regsuc'])){
					echo '<div style="color: red">'.$_SESSION['regsuc'].'</div>'; 
					unset($_SESSION['regsuc']);
				}
			
			?>
		<form class = "log" action="verify.php" method="post">
			<span style="color: #911121;">Login:</span> <br/> <input class="in" type="text" name="login"/> <br/>
			<span style="color: #DAA520">Password: <br/> <input class ="in" type="password" name="passwd"/> <br/>
			<input class= "logbut" type="submit" value="Log In" ></br>
		</form>
			<?php
				if(isset($_SESSION['error'])) echo $_SESSION['error'];
				unset($_SESSION['error']);
			?>
			
			<div class="info"> Nie posiadasz konta? <a class="register" href="register.php"> Zarejestruj się!</a></div>
		</div>
		
		<div style="text-align: center; margin-top: 15px;">
			Wszelkie prawa zastrzeżone &copy A.Marta 2019
		</div>
	

</body>
</html>