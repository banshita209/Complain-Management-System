<?php
	
	$conn=mysqli_connect("localhost", "root", "root", "complain");
			// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		//------------functions
		function generateTempName($id)
		{
			echo "id".$id;
			$result = mysqli_query($GLOBALS["conn"],"SELECT * FROM temporary_name");
			$rows = mysqli_num_rows($result);

			$name_id=rand(1,$rows);

			$sql="SELECT temp_name from temporary_name where id =".$name_id;
			$result = mysqli_query($GLOBALS["conn"], $sql);

				if (mysqli_num_rows($result) >0) 
				{
					$temp_name= $result->fetch_row();
					print_r($temp_name);
					$temp_name=$temp_name[0].strval($id);
	        		echo "temp_name =".$temp_name;

	        		$sql = "UPDATE student SET temp_name = '".$temp_name."' WHERE stud_no = ".$id;
	        		$conn=$GLOBALS["conn"];
	        		if ($conn->query($sql) === TRUE) 
					{
						echo "done";
						header("location:home.php");
					}
	        	}else 
	        	{
	            	echo "0 results";
	        	}
		}
		//END OF FUNCTION

		$action=$_REQUEST["action"];
		if ($action == "register" || $action == "update") {
			$enroll=trim($_POST["enroll"]);
			$password = trim($_POST["password"]);
			$name = trim($_POST["name"]);
			$sem = trim($_POST["sem"]);
			$dept = trim($_POST["dept"]);
			$contact = trim($_POST["contact"]);
			$email = trim($_POST["email"]);
			$counter = 0;
			$flag =0;
			if ($action == "register") {				
				$sql = "INSERT INTO student ('enroll', 'password', 'name', 'sem', 'dept', 'contact', 'email', 'counter', 'flag') VALUES ('".$enroll."', '".$password."', '".$name."', '".$sem."', '".$dept."', '".$contact."', '".$email."', '".$counter."', '".$flag."')";
				if (mysqli_query($conn, $sql)) {
					$id = mysqli_insert_id($conn);
					echo "New record created successfully. Last inserted ID is: " . $id;
					$temp_name = generateTempName($id);
				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}
		}
		elseif($action == "login"){
			$sql = "Select * from Student where email='".trim($_REQUEST["email"])."'";
			$result = mysqli_query($conn, $sql);
			if(! $result){
				die('Could not get data: ' . mysqli_error($conn));
			}else{
				while($rows = mysqli_fetch_array($result)){
					$password = $rows['password'];
					echo "password =".$password;
					if($password == $_REQUEST['password']){
						session_start();
						$_SESSION['userType']="Student";
						$_SESSION['enroll']=$rows['enroll'];
						$_SESSION['temp']=$rows['temp_name'];
						echo "login successful";
						header("location:home.php");
					}
					else{
						echo "login failed";
					}
				}
			}
		}	
	}
