<?php
	session_start();
if(isset($_POST['mailmod'])){
		
		$mod2 = true;
		
		$email = $_POST['mailmod'];
		$emailf = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if((filter_var($emailf, FILTER_VALIDATE_EMAIL) == false) || ($emailf != $email)){
			$mod2 = false;
			$_SESSION['error_mailm'] = "Adres e-mail jest niepoprawny!";
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
		 		
				
				$r2 = $connect->query("SELECT id FROM info WHERE mail='$email'");
				if(!$r2) throw new Exception($connect->error);
				$num2= $r2->num_rows;
				if($num2 > 0)
				{
					$mod2 = false;
					$_SESSION['error_mailm'] = "Podany e-mail jest już zajęty!";
				}
				
				if($mod2 == true)
				{	
					$oldmail = $_SESSION['acname'];
			
					if($connect->query("UPDATE info SET mail = '$email' WHERE nazwa='$oldmail'"))
					{	
						$_SESSION['acmail'] = $email;
						$_SESSION['success2'] = true;
						$_SESSION['regsuc2'] = "Zmiana adresu e-mail przebiegła pomyślnie";
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