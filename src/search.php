<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" type="image/png" href="Login_v8/images/icons/favicon.ico"/>
	<title>

		
	</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
	crossorigin="anonymous">

	<style >
		body {
			padding-left: 10px;
			padding-right: 10px;

		}

		nav {
			background-color: red;
			position: fixed !important;
			z-index: 10;
			width: 100%;
		}

		.nesto {
			background-color: rgb(220, 229, 223);
		}

		.nesto2 {
			position: absolute;
			top: 40%;
			left: 70%;
			max-width: 25%;
			min-width: 250px;
		}

		@media only screen and (max-width: 820px) {
			.nesto2 {
				left: 20px;
			}
		}
	</style>
	<title>Education with robots</title>
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
			<li class="nav-item active">
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
	<form class="form-inline my-2 my-lg-0" id="login" action="search.php">
		<input class="form-control mr-sm-2 " id="" defaultValue="" type="text" placeholder="Search..." aria-label="userName">
		<button class="btn btn-outline-success mr-sm-2 my-2 my-sm-0" type="submit">Search</button>
	</form>
	<form method="get" action="logout.php">
    	<button class="btn btn-outline-success mr-sm-2 my-2 my-sm-0" type="submit">Log Out of 
    	<?php 
			echo $_SESSION['username'];
		?>
		
	</button>
	</form>
</div>
</nav><!-- 
<div class="nesto">

	<div style="position: relative; height: 100vh; background-image: url('http://pbskids.org/learn/img/child-development-tracker.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center">
		<div style="clip-path: polygon(76% 0, 100% 0, 100% 100%, 36% 100%);
		height: 100vh; background-image: linear-gradient(to right bottom, rgba(126,213,111,0.8), rgba(40,180,133,0.8)); background-repeat: no-repeat;     background-size: cover; background-position: center">
	</div>
	<div class="nesto2">
		<h1 style="padding-bottom: 5px">Education</h1>
		<p>Some quick example text to build on the card
			<a href="https://www.facebook.com" target="_blank">title</a> and make up the bulk of the card's content.</p>
		</div>
	</div>
</div>
 -->
<div style="height: 100vh; padding-top: 10vh" class="table-responsive" id="robots">
	<table class="table">
		<tr>
			<td>
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="https://www.yogee.com.au/media/catalog/product/cache/1/image/600x/9df78eab33525d08d6e5fb8d27136e95/M/B/MBK_90058_6.jpg"
					alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="mbot.php" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</td>
			<td>
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="https://www.robotshop.com/media/catalog/product/cache/image/480x480/9df78eab33525d08d6e5fb8d27136e95/m/a/makeblock-ultimate-20-10-in-1-kit-electronics.jpg"
					alt="Card image cap2">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</td>
			<td>
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" style="width: 180px height: 100px" src="https://www.yogee.com.au/media/catalog/product/cache/1/image/600x/9df78eab33525d08d6e5fb8d27136e95/M/B/MBK_90058_6.jpg"
					alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</td>
			<td>
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="https://www.ducan-online.com/wp-content/uploads/2018/01/mbot-v11-stem-edukativni-robot-za-decu-bluetooth-rozi-1.png"
					alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</td>
		</tr>
	</table>
</div>

<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4" id="aboutUs">

	<!-- Footer Links -->
	<div class="container text-center text-md-left">

		<!-- Grid row -->
		<div class="row">

			<!-- Grid column -->
			<div class="col-md-4 mx-auto">

				<!-- Content -->
				<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
				<p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
					adipisicing elit.</p>

				</div>
				<!-- Grid column -->

				<hr class="clearfix w-100 d-md-none">

				<!-- Grid column -->
				<div class="col-md-2 mx-auto">

					<!-- Links -->
          <!-- <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
        </ul> -->

    </div>
    <!-- Grid column -->

    <!-- <hr class="clearfix w-100 d-md-none"> -->

    <!-- Grid column -->
    <div class="col-md-2 mx-auto">

    	<!-- Links -->
    	<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

    	<ul class="list-unstyled">
    		<li>
    			<a href="#!">Link 1</a>
    		</li>
    		<li>
    			<a href="#!">Link 2</a>
    		</li>
    		<li>
    			<a href="#!">Link 3</a>
    		</li>
    		<li>
    			<a href="#!">Link 4</a>
    		</li>
    	</ul>

    </div>
    <!-- Grid column -->

    <!-- <hr class="clearfix w-100 d-md-none"> -->

    <!-- Grid column -->
    <!-- <div class="col-md-2 mx-auto"> -->

    <!-- Links -->
        <!-- <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>

      </div> -->
      <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<hr>







<!-- Social buttons -->
<!-- Ovde srki -->
<!-- Social buttons -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2018 Copyright:
	<a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

</html>