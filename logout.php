<?php 
session_start();
if (isset($_SESSION['nic'])) {	
	session_unset();
	session_destroy();
	header("Location: index.php");
}

 ?>