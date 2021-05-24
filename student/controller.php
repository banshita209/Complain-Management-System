<?php
	require_once 'model.php';

	$action = $_REQUEST['action'];
	unset($_REQUEST['action']);

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$conn = new mysqli($servername, $username, $password, "complain");

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	else{
		
			switch ($action){
				case "submit complain":
					$sql ="Insert into ";
					break;
			}
		
		
	}
 ?>
