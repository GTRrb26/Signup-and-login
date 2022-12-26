<!-- INSERT INTO `input` (`id`, `email`, `password`) VALUES (NULL, 'text@mail.com', 'test');  -->
<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
    <style>

        
    </style>
</head>

<body>
	
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "signin");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO input VALUES (NULL, '$email', '$password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>LOGIN successfully.";

			echo nl2br("\n$email \n ");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	
</body>

</html>
