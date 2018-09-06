<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
		<a class="navbar-brand" href="main.php">Robots</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 			aria-controls="navbarSupportedContent"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="main.php">Home
					<span class="sr-only">(current)</span>
				</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
				aria-expanded="false">
				About
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="main.php#">Education</a>
				<a class="dropdown-item" href="main.php#robots">Robots</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#footer">About us</a>
			</div>
			<?php 
	if($_SESSION['admin'] == 1)
		echo '<li class="nav-item ">
				<a class="nav-link" href="admin.php">Admin page
					<span class="sr-only">(current)</span>
				</a>
			</li>'
		 ?>
		</li>
	</ul>
	<form method="get" action="logout.php">
    	<button class="btn btn-outline-success mr-sm-2 my-2 my-sm-0" type="submit">Log Out of 
    	<?php 
			echo $_SESSION['username'];
		?>
	</button>
	</form>
</div>
</nav>