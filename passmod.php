<?php
	session_start();
	if(isset($_POST['passmod1'])){
		
		$mod2 = true;
		
		$haslo1 = $_POST['passmod1'];
		$haslo2 = $_POST['passmod2'];
		
		if(strlen($haslo1) < 8 || (strlen($haslo1) > 21))
		{
			$mod2 = false;
			$_SESSION['error_passwdm'] = "Hasło powininno zawierać od 8 do 21 znaków!";
		}
		
		if($haslo1 != $haslo2)
		{
			$mod2 = false;
			$_SESSION['error_passwdm'] = "Podane hasła nie są identyczne!";
		}
		
		$hashed = password_hash($haslo1, PASSWORD_DEFAULT);
		
		require_once "hub.php";
		mysqli_report(MYSQLI_REPORT_STRICT);

		try
		{
			$connect = new mysqli($host, $user, $passwd, $dbase);
			if($connect -> connect_errno != 0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
		 		if($mod2 == true)
				{	
					$oldmail = $_SESSION['acname'];
			
					if($connect->query("UPDATE info SET haslo = '$hashed' WHERE nazwa='$oldmail'"))
					{	
						
						$_SESSION['success3'] = true;
						$_SESSION['regsuc3'] = "Zmiana hasła przebiegła pomyślnie";
						header('Location: personal.php');
					
					}
					else
					{
						throw new Exception($connect->error);
						header("Location: personal.php");
						
					}
				}
				else
				{
					header('Location: personal.php');
				}
		
				$connect ->close();
			}
		}
		catch(Exception $conerror)
		{
			$_SESSION['error_con'] ='Wystąpił błąd podczas połączenia z serwerem!'; //Błąd:'.$conerror;
			
		}
		
	}
?>