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
 	// 2. Perform database query
 	$query = "SELECT * ";
 	$query .= "FROM subjects ";
 	$query .= "WHERE visible = 1";
 	$query .= "ORDER BY position ASC"
 
 	$result = mysqli_query($connection, $query);
 	if (!$result) {
 		die("Database query failed");
 	}
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 	<head>
 		<title>Databases</title>
 	</head>
 	<body>
			<ul>
 		<?php
 		// 3. Use returned data (if any)
 		while($row = mysqli_fetch_row($result)) {
 			while($subject = mysqli_fetch_assoc($result)) {
  				// output data from each row
 				var_dump($row);
				echo "";
 		?>
			<li> 
 			<?php
 					echo $subject["menu_name"];
 			?>
 		</li>
 		<?php
 			}
 		?>
 		
 	</ul>
 		<?php
 		// 4. Release returnedd data
 		mysqli_free_result($result);
 		?>
 
 	</body>
 </html>
 
 
 <?php
 	//5. Close database connection
 mysqli_close($connection);
 ?> 
 