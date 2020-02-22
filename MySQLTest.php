
<?php
$servername = "localhost";
$username = "mason";
$password = "2004manofawesome";
$dbname = "TEST";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Customers (Name, City)
VALUES ('Mason DiGiorgio', 'Millington')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>