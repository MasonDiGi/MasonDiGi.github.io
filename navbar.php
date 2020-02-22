<head>
	<?php
		session_start();
		$servername = "localhost";
		$username = "mason";
		$password = "2004manofawesome";
		$dbname = "Masontech";
	?>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel='stylesheet' href='/main.css'>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"><span class="mason">Mason</span><span class="tech">Tech</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/contact">Contact Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/photo">Photo Gallery</a>
      </li>
	  <?php
		if (isset($_SESSION['loggedin'])) {
			echo '<li class="nav-item">';
			echo '<a class="nav-link" href="/admin">Admin Page</a>';
			echo '</li>';
			echo '<li class="nav-item">';
			echo '<a class="nav-link" href="/DBTest/admin">DBTest Admin Page</a>';
			echo '</li>';
		}
	  ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Forms
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/Computer Building Form.pdf">New computer build</a>
          <a class="dropdown-item" href="/Sleeving Form.pdf">Custom cables</a>
          <a class="dropdown-item" href="/Software Repair Form.pdf">Software repair</a>
          <a class="dropdown-item" href="/Hardware Repair Form.pdf">Hardware repair</a>
        </div>
      </li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
		<li class="nav-item">
			<?php
				if (isset($_SESSION['loggedin'])) {
					echo '<a class="nav-link" href="/logout">Logout</a>';
				} else {
					echo '<a class="nav-link" href="/login">Login</a>';
				}
			?>
		</li>
	</ul>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
