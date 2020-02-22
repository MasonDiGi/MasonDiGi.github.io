<html>
<head>
	<title>Login Plz</title>
	<?php require('navbar.php') ?>
</head>
<body>
	<?php require('loggingin.php') ?>

    <form action="" method="post" id="loginform" class="forms">
    <div class="formtext">Username:</div><input type="text" name="Username" placeholder="What is your username?" required>
	<div class="formtext">Password:</div><input type="password" name="Password" placeholder="What is your password?" required>
	<input type="submit" name="submit" value="Login">
   </form>
</body>
</html>