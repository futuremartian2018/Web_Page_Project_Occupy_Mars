<?php
		session_start();
		/*if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
			header('Location:'.$_SESSION['page']);
			exit();
		}*/
		unset($_SESSION['error']);
?>

<!DOCTYPE HTML>
<html lang = "pl">
<head>

	<title>OccupyMars-Logowanie</title>
	<meta charset = "utf-8" />
	
	
	<link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kelly+Slab&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="styles/reg.css" type="text/css"/>
	<link rel="stylesheet" href="fontello/css/fontello.css" type="text/css"/>
	
</head>




<body>
	<div class="header">
		
		<div class = "title"><a class = "home" href = "index.php">Occupy<span style="color: #911121">Mars</span></a></div>
	</div>
		<div class ="getin"> 
		
		<h1 class = "ltitle">UTWÓRZ KONTO</h1>
		
		<form class = "log" action="add.php" method="post">
		<?php
			
				if(isset($_SESSION['error_con'])){
					echo '<div style="color: red">'.$_SESSION['error_con'].'</div>'; 
					unset($_SESSION['error_con']);
				}
			
			?>
		
		
			<span style="color: #BA1121;">Podaj nick:</span> <br/> <input class="in" type="text" name="nick"/> <br/>
			<?php
			
				if(isset($_SESSION['error_nick'])){
					echo '<div style="color: red">'.$_SESSION['error_nick'].'</div>'; 
					unset($_SESSION['error_nick']);
				}
			
			?>
			
			<span style="color: #DAA520">Podaj email: <br/> <input class ="in" type="text" name="email"/> <br/>
			<?php
			
				if(isset($_SESSION['error_mail'])){
					echo '<div style="color: red">'.$_SESSION['error_mail'].'</div>'; 
					unset($_SESSION['error_mail']);
				}
			
			?>
			
			<span style="color: #BA1121">Podaj hasło: <br/> <input class ="in" type="password" name="haslo"/> <br/>
			<span style="color: #DAA520">Powtórz hasło: <br/> <input class ="in" type="password" name="haslo2"/> <br/>
			<?php
			
				if(isset($_SESSION['error_passwd'])){
					echo '<div style="color: red">'.$_SESSION['error_passwd'].'</div>'; 
					unset($_SESSION['error_passwd']);
				}
			
			?>
			
			<input type ="checkbox" name ="rules"/> Akceptuję <a href="raports/regulamin.pdf"  target="_blank" style="margin-bottom: 15 px;">regulamin</a><br/>
			
			<br/><input class= "logbut" type="submit" value="Register" ></br>
			<?php
			
				if(isset($_SESSION['error_rules'])){
					echo '<div style="color: red">'.$_SESSION['error_rules'].'</div>'; 
					unset($_SESSION['error_rules']);
				}
			
			?>
			
			
			
		</form>
			<?php
				if(isset($_SESSION['error'])) echo $_SESSION['error'];
			
			?>
			
		</div>
		
		<div style="text-align: center; margin-top: 15px;">
			Wszelkie prawa zastrzeżone &copy A.Marta 2019
		</div>	
	

</body>
</html>

