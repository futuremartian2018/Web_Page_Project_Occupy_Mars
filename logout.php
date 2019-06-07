<?php
	session_start();
	unset($_SESSION['logged']);
	unset($_SESSION['acname']);
	unset($_SESSION['acmail']);
	unset($_SESSION['acvisit']);
	header('Location:'.$_SESSION['page']);
?>