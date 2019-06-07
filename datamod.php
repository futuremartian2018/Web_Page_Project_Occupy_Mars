<?php
	session_start();


	if(isset($_POST['nickmod'])){
		
		$mod1= true;
		
		$nick = $_POST['nickmod'];
		
		if(strlen($nick) < 5 || (strlen($nick) > 18))
		{
			$mod1= false;
			$_SESSION['error_nickm'] = "Nick powinien zawierać od 5 do 18 znaków!";
		}
		
		if(ctype_alnum($nick) == false)
		{
			$mod1 = false;
			$_SESSION['error_nickm'] = "Nick powinien składać się jedynie z liter i cyfr!";
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
		 		
				
				$r2 = $connect->query("SELECT nazwa FROM info WHERE nazwa='$nick'");
				if(!$r2) throw new Exception($connect->error);
				$num2= $r2->num_rows;
				if($num2 > 0)
				{
					$mod1 = false;
					$_SESSION['error_nickm'] = "Podany nick jest już zajęty!";
				}
				
				if($mod1 == true)
				{	
					$oldname = $_SESSION['acname'];
			
					if($connect->query("UPDATE info SET nazwa = '$nick' WHERE nazwa='$oldname'"))
					{	
						$_SESSION['acname'] = $nick;
						$_SESSION['success1'] = true;
						$_SESSION['regsuc1'] = "Zmiana nazwy użytkownika przebiegła pomyślnie";
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



