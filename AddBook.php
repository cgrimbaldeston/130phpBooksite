<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>book Tracking system</title>

</head>
<body>
	<a href="index.php"><button style="background-color: red; float:right;color: #fff; border: none; padding: 10px 20px; text-align: center; text-decoration: none; font-size: 18px; margin: 20px; cursor: pointer; transition: all 0.3s ease-in-out;">Back</button></a>
	<form method="post" action="insert.php">
		<p>Title:</p><input type="text" name="Title">
		<p>Author:</p><input type="text" name="Author">
		<p>Genre:</p><input type="text" name="Genre">
		<p>Year:</p><input type="text" name="Year">
		<br>
		<br>
		<input type="submit" name="submit">
		</form>
</body>
<style>
	body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f7f7f7;
}

form {
  max-width: 800px;
  margin: 0 auto;
  padding: 40px;
  background-color: #fff;
  border: 1px solid #ccc;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
}

form p {
  font-size: 24px;
  font-weight: bold;
  margin-top: 20px;
}

form input[type="text"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  font-size: 18px;
  border: none;
  border-bottom: 2px solid #ccc;
}

form input[type="submit"] {
  background-color: blue;
  color: #fff;
  border: none;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
  margin-top: 20px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

form input[type="submit"]:hover {
  background-color: blueviolet;
}

</style>
</html>