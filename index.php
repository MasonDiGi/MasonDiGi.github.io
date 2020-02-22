<html>
<head>
   <title>Masontech</title>
   <?php require('navbar.php') ?>
   <link rel="stylesheet" href="main.css">
   <link rel="icon" type="image/x-icon" href="/favicon.ico">
</head>
<body>
<?php
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$sql = "SELECT * FROM info WHERE Name='Intro Text';";
	
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$introtext = $row['Value'];
?>
<div id = "intro" class="text">
<?php echo $introtext; ?>
</div>

<div id = "info" class="text">
   <h6>My services:</h6>
   <ul>
   	  <li>Building a new computer - if you want a completely new computer, I can help you pick out the parts you need and build it for you.</li>
	  <li>Custom computer cables  - if your computer has a window, or even if it doesn't I can install custom power cables to make the inside look nicer(see photo gallery).</li>
      <li>Fixing software         - if a program on your computer is not working or not opening, your want this service.</li>
	  <li>Fixing hardware         - if your computer is not turning on or not loading, this is what you should use.</li>
	  <li>Fix slow computers      - if your computer is slow, then I can help make it at least a little faster, if not a lot (no form required).</li>
   </ul>
</div>



</body>
</html>