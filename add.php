<?php
	session_start();
	
	if(isset($_POST['email']))
	{
		$verified = true;
		
		$nick = $_POST['nick'];
		$email = $_POST['email'];
		$emailf = filter_var($email, FILTER_SANITIZE_EMAIL);
		$haslo1 = $_POST['haslo'];
		$haslo2 = $_POST['haslo2'];
		$lognum = 0;
		
		if(strlen($nick) < 5 || (strlen($nick) > 18))
		{
			$verified = false;
			$_SESSION['error_nick'] = "Nick powinien zawierać od 5 do 18 znaków!";
		}
		
		if(ctype_alnum($nick) == false)
		{
			$verified = false;
			$_SESSION['error_nick'] = "Nick powinien składać się jedynie z liter i cyfr!";
		}
		
		if((filter_var($emailf, FILTER_VALIDATE_EMAIL) == false) || ($emailf != $email)){
			$verified = false;
			$_SESSION['error_mail'] = "Adres e-mail jest niepoprawny!";
		}
		
		if(strlen($haslo1) < 8 || (strlen($haslo1) > 21))
		{
			$verified = false;
			$_SESSION['error_passwd'] = "Hasło powininno zawierać od 8 do 21 znaków!";
		}
		
		if($haslo1 != $haslo2)
		{
			$verified = false;
			$_SESSION['error_passwd'] = "Podane hasła nie są identyczne!";
		}
		
		
		$hashed = password_hash($haslo1, PASSWORD_DEFAULT);
		
		if(!isset($_POST['rules']))
		{
			$verified = false;
			$_SESSION['error_rules'] = "Regulamin nie został zaakceptowany!";
		}
		
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
		 		$r1 = $connect->query("SELECT id FROM info WHERE mail='$email'");
				if(!$r1) throw new Exception($connect->error);
				$num = $r1->num_rows;
				if($num > 0)
				{
					$verified = false;
					$_SESSION['error_mail'] = "Podany email jest już zajęty!";
				}
				
				$r2 = $connect->query("SELECT id FROM info WHERE nazwa='$nick'");
				if(!$r2) throw new Exception($connect->error);
				$num2= $r2->num_rows;
				if($num2 > 0)
				{
					$verified = false;
					$_SESSION['error_nick'] = "Podany nick został przypisany do istniejącego konta!";
				}
				
				if($verified == true)
				{
					if($connect->query("INSERT INTO info VALUES (NULL, '$nick', '$hashed', '$email', 0)"))
					{
						$_SESSION['success'] = true;
						$_SESSION['regsuc'] = "Rejestracja udana! Możesz się zalogować!";
						header('Location: log.php');
					
					}
					else
					{
						throw new Exception($connect->error);
						header("Location: register.php");
					}
				}
				else
				{
					header("Location: register.php");
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