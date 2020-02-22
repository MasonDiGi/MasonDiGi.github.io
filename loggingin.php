<?php
if(isset($_POST['submit'])){
$servername = "localhost";
$username = "mason";
$password = "2004manofawesome";
$dbname = "Masontech";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM Users WHERE Username='" . $_POST['Username'] . "';";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if ($row['Password'] == $_POST['Password']) {
			$_SESSION['loggedin'] = true;
			$_SESSION['uid'] = $row['UserID'];
			header("Location: admin");
		} else {
			echo "<div class='error'>Incorrect Password</div>";
		}
    }
} else {
    echo "<div class='error'>Incorrect Username</div>";
}

mysqli_close($conn);
}
?>