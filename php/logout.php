<?php 
session_start();
if (isset($_SESSION['user_id'])){
	session_destroy();
		foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
		header("location:../index.php");
	}else{
		header("location: ../index.php");
	}
 ?>