<?php 	
session_start();

unset($_SESSION['Role']);
unset($_SESSION['id']);
unset($_SESSION['phone']);
header("location:login");

 ?>