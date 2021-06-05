
<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "id16949155_root", "Cgec@12345678", "id16949155_pragatishil");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$email= $_REQUEST['email'];
		$mobile= $_REQUEST['mobile'];
		$year = $_REQUEST['year'];
		$dept = $_REQUEST['dept'];
		$feedback = $_REQUEST['feedback'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO literary VALUES ('$name',
			'$email','$year','$dept','$mobile','$feedback')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Registration Complete</h3>";

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
	
		?>
	</center>
</body>

</html>
