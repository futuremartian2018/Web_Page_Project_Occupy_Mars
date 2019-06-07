<?php
	session_start();
	
	
	require_once "hub.php";
	$connect = @new mysqli($host, $user, $passwd, $dbase);
	
	if($connect -> connect_errno != 0)
	{
		echo "Error:".$connect->connect_errno;
		if(!isset($_POST['login']) || (!isset($POST['passwd']))){
		header('Location:'.$_SESSION['page']);
		exit();
	}
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['passwd'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		//$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
		
		$sql = "SELECT * FROM info WHERE nazwa ='$login' AND haslo ='$haslo'" ;
		
		if($status = @$connect->query(sprintf("SELECT * FROM info WHERE nazwa ='%s'",mysqli_real_escape_string($connect, $login))))
		{
			$res = $status->num_rows;
			if($res > 0)
			{
				$row = $status->fetch_assoc();
				
				if(password_verify($haslo, $row['haslo']))
				{
					
					$user = $row['nazwa'];
					$_SESSION['logged'] = true;
					$_SESSION['acname'] = $row['nazwa'];
					$_SESSION['acmail'] = $row['mail'];
					$odw = $row['odwiedziny'] + 1;
					$_SESSION['acvisit'] = $odw;
					$identify = $row['id'];
					$connect->query("UPDATE info SET odwiedziny = '$odw' WHERE id='$identify'");
					$status->close();
					unset($_SESSION['error']);
					header('Location:'.$_SESSION['page']);
				}
				else{
				
					$_SESSION['error'] = '<span style="color: red">Niepoprawne dane logowania!</span>';
					header('Location: log.php');
					}
				
			}
			else{
				
				$_SESSION['error'] = '<span style="color: red">Niepoprawne dane logowania!</span>';
				header('Location: log.php');
			}
		}
		
		
	}
	$connect -> close();	
	
?>