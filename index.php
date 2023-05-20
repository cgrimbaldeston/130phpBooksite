<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>book Tracking system</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>
		My book Tracking system
	</h1>
	<h1>Your books Read:</h1>
	<a href="AddBook.php"><button type="button">Add book</button></a>
		<a href="DeleteBook.php"><button type="button">Delete book</button></a>
<div class="books-list">
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "booksdb";
	$conn = new mysqli($servername, $username, $password,$dbname);
	if ($conn->connect_error) {
  	die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT `books`.*\n". "FROM `books` AS `books`;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
  		echo "<ul>";
  		while($row = $result->fetch_assoc()) {
   			echo "<li>" . $row["Title"], "<br> ID: ".$row["BookID"],	"</li>";
  		}
  		echo "</ul>";
	} else {
  		echo "0 Books found";
	}

	$conn->close();
?>
</div>
</body>
</html>