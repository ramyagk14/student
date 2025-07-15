<?php
	$servername="localhost";
	$username  ="root";
	$password  ="";
	$dbname    ="std_login";

	$con= new mysqli($servername,$username,$password,$dbname);
	if($con->connect_error){
		die("Connection error".$connect_error);
	}
?>