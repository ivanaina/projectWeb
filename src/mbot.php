<!DOCTYPE html>
<html>
<head>
	<title>Mbot</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
	crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
		<a class="navbar-brand" href="#">Robots</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 			aria-controls="navbarSupportedContent"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item ">
				<a class="nav-link" href="#">Home
					<span class="sr-only">(current)</span>
				</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
				aria-expanded="false">
				About
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="#">Education</a>
				<a class="dropdown-item" href="#robots">Robots</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#aboutUs">About us</a>
			</div>
		</li>
	</ul>
	<div id="logForm">
	<form class="form-inline my-2 my-lg-0" id="login" action="#">
		<input class="form-control mr-sm-2 " id="logUsername" defaultValue="" type="text" placeholder="User name" aria-label="userName">
		<input class="form-control mr-sm-2 " id="logPass" defaultValue="" type="password" placeholder="Password" aria-label="userPass">
		<button class="btn btn-outline-success mr-sm-2 my-2 my-sm-0" type="submit">Sign In</button>
		<button class="btn btn-outline-success my-2 my-sm-0" type="button" data-toggle="modal" data-target="#myModal">Sign Up</button>
	</form>
	</div>
</div>
</nav>
</body>
</html>