<?php
	$conn=mysqli_connect("localhost", "root", "root", "complain");
			// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		$action=$_REQUEST["action"];
		if ($action == "register" || $action == "update") {
			$dept_name=$_REQUEST["dept_name"];
			$mngr_id=$_REQUEST["mngr_id"];
			$mngr_name=$_REQUEST["mngr_name"];
			$password=$_REQUEST["psswrd"];
			if ($action == "register") {
				$sql = "INSERT INTO department (dept_name, manager_id, manager_name, password) VALUES ('".$dept_name."', '".$mngr_id."', '".$mngr_name."', '".$password."')";

			}
		}	
	}
?>
