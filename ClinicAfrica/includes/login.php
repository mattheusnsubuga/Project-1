<?php

if (isset($_POST["submit"])){

$username = $_POST["u_user"];
$password = $_POST["u_pass"];



require_once 'dbh.php';
require_once 'functions.php';



if (emptyInputLogin($u_user, $u_pass)!== false){
	alert("Invalid Login");
	
	exit();
}



}
















?>