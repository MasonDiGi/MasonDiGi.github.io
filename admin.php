<html>
<head>
<title>Admin Page Chief</title>
<?php require('navbar.php'); ?>
</head>
<body>
<!-- Check to see if logged in -->
<?php 
	if (!($_SESSION['loggedin'] == true)) {
		header("Location: login");
	}
?>

<?php
if (isset($_POST['submit'])) {
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$sql = "UPDATE info SET Value='" . $_POST['introtext'] . "' WHERE Name='Intro Text'";
	mysqli_query($conn, $sql);
	
	header("Location: ");
}
?>
<form method="post" id="changeintrotextform" class="forms">
<div class="formtext">Intro Text:</div><textarea name="introtext" placeholder="What would you like to say?" required></textarea>
<input type="submit" name="submit">
</form>
</body>
</html>