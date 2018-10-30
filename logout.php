<?php
	session_start();
	unset($_SESSION['USER']);
	unset($_SESSION['id']);
	unset($_SESSION['EMAIL']);
	session_destroy();
	header('Location: index.php');
?>