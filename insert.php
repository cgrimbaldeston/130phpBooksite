<!DOCTYPE html>
<html>

<head>
	<title>Insert page</title>
</head>

<body>
	<center>
		<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "booksdb";
		$conn = new mysqli($servername, $username, $password,$dbname);
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		$sql = "SELECT `books`.*\n". "FROM `books` AS `books`;";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
   	 		$BookID=$row["BookID"];
  		}
		// Taking all 5 values from the form data(input)
		$BookID = $BookID+1; 
		$Title = $_REQUEST['Title'];
		$Author = $_REQUEST['Author'];
		$Genre = $_REQUEST['Genre'];
		$Year = $_REQUEST['Year'];
		
		$sql = "INSERT INTO books VALUES ('$BookID','$Title','$Author','$Genre','$Year')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully.";
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
