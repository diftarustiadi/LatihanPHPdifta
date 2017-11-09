<?php
 	//1. Create a database connection
 	$dbhost = "localhost";
 	$dbuser = "root";
 	$dbpass = "";
 	$dbname = "kalbis_cms";
 	$connection = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);
 
 	//Test if connection occured
 	if (mysqli_connect_errno()) {
 		die("Database connection failed: " . mysqli_connect_error() . " ( " . mysqli_connect_errno() . ")"
 		);
 	}
 ?>
 
 <?php
 // Often these are form values in $_POST
 	$menu_name = "Todays Widget Trivia";
 	$position = (int) 4;
 	$visible = (int) 1;
 
 	// Escape all strings
 	$menu_name = mysqli_real_escape_String($connection, $menu_name);
	
 	//2. Perform database query
 	$query = "INSERT INTO subjects (";
 	$query .= " menu_name, position, visible";
 	$query .= ") VALUES (";
 	$query .= " '{$menu_name}', {$position}, {visible}";
 	$query .= ")";
 	$result = mysqli_query($connection, $query);
 	if ($result){
 		// Success
 		// redirect to ...
 		echo "SUCCESS!";
 	}else {
 		// Failure
 		// $message = "Subject creation failed"
 		die("Database query failed." . mysqli_error($connection));
 	}
 ?>
 
 <html>
 	<head>
 	<title> Database </title>
 	</head>
 	<body>
 		
 	</body>
 </html>
 
 <?php
 	//5. Close database connection
 mysqli_close($connection);
 ?>