<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" type="image/png" href="Login_v8/images/icons/favicon.ico"/>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

		@media only screen and (max-width: 820px) {
			nav {
				width: 95%;
			}
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

		@media only screen and (max-width: 820px) {
			body: {
				padding-left: 0px;
				padding-right: 0px;
			}
		} 

		.gallery-wrap .img-big-wrap img {
		    height: 450px;
		    width: auto;
		    display: inline-block;
		    cursor: zoom-in;
		}


		.gallery-wrap .img-small-wrap .item-gallery {
		    width: 60px;
		    height: 60px;
		    border: 1px solid #ddd;
		    margin: 7px 2px;
		    display: inline-block;
		    overflow: hidden;
		}

		.gallery-wrap .img-small-wrap {
		    text-align: center;
		}
		.gallery-wrap .img-small-wrap img {
		    max-width: 100%;
		    max-height: 100%;
		    object-fit: cover;
		    border-radius: 4px;
		    cursor: zoom-in;
		}


/*****************globals*************/
body {
  font-family: 'open sans';
  overflow-x: hidden; }

img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  background: #fff;
  padding: 3em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

/*# sourceMappingURL=style.css.map */

	</style>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<title>Ultimate</title>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#kupi").click(function() {
				const model="Ultimate";
				if(confirm("Da li zelite da kupite ovo?")){

					$.ajax({
						method: 'post',
						url: 'ajax/kupi.php',
						data: {
							model : model
						},
						success: function(response) {
							console.log(response);
						}
					})
				}
			});
		});
	</script>

</head>

<body>
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
				<!-- <a class="dropdown-item" href="#">Education</a>
				<a class="dropdown-item" href="#robots">Robots</a>
				<div class="dropdown-divider"></div>
 -->				<a class="dropdown-item" href="#footer">About us</a>
			</div>
		</li>
	</ul>
	<!-- <form class="form-inline my-2 my-lg-0" id="login" action="search.php">
		<input class="form-control mr-sm-2 " id="" defaultValue="" type="text" placeholder="Search..." aria-label="userName">
		<button class="btn btn-outline-success mr-sm-2 my-2 my-sm-0" type="submit">Search</button>
	</form> -->
	<?php 
	if(isset($_SESSION['username'])){
		echo '<form method="get" action="logout.php">
    	<button class="btn btn-outline-success mr-sm-2 my-2 my-sm-0" type="submit">Log Out of 
			' . $_SESSION["username"] .'
	</button></form>';
		}

	else {
		echo '<form method="post" action="index.php">
    	<button class="btn btn-outline-success mr-sm-2 my-2 my-sm-0" type="submit">Sign In 
	</button></form>

	<form method="post" action="register.php">
    	<button class="btn btn-outline-success mr-sm-2 my-2 my-sm-0" type="submit">Sign Up
	</button></form>';

		} ?>
</div>
</nav>

<br>
<!-- Footer -->

<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						<div class="preview-pic tab-content">
              <div class="tab-pane active" id="pic-1"><img src="https://www.robotshop.com/media/catalog/product/cache/image/480x480/9df78eab33525d08d6e5fb8d27136e95/m/a/makeblock-ultimate-20-10-in-1-kit-electronics.jpg"
          alt="Card image cap2" /></div>
              <div class="tab-pane" id="pic-2"><img src="https://static3.shop033.com/resources/C5/164037/picture/9A/86409370.JPG" /></div>
              <div class="tab-pane" id="pic-3"><img src="https://www.stemfinity.com/image/catalog/Makeblock/90040/Makeblock-Ultimate-2-0-10-in-1-Robot-Kit-08.JPG" /></div>
              <div class="tab-pane" id="pic-4"><img src="http://cdnlab.makeblock.com/Fp9oCk00XRsVu7grzPqHnWUXbOZG?imageMogr2/thumbnail/765x/gravity/Center" /></div>
              <div class="tab-pane" id="pic-5"><img src="http://www.spc-makeblock.es/wp-content/uploads/2016/07/mbot-Ultimatev2-0-Makeblock-90040.jpg" /></div>
            </div>
            <ul class="preview-thumbnail nav nav-tabs">
              <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="https://www.robotshop.com/media/catalog/product/cache/image/480x480/9df78eab33525d08d6e5fb8d27136e95/m/a/makeblock-ultimate-20-10-in-1-kit-electronics.jpg"
          alt="Card image cap2" /></a></li>
              <li><a data-target="#pic-2" data-toggle="tab"><img src="https://static3.shop033.com/resources/C5/164037/picture/9A/86409370.JPG" /></a></li>
              <li><a data-target="#pic-3" data-toggle="tab"><img src="https://www.stemfinity.com/image/catalog/Makeblock/90040/Makeblock-Ultimate-2-0-10-in-1-Robot-Kit-08.JPG" /></a></li>
              <li><a data-target="#pic-4" data-toggle="tab"><img src="http://cdnlab.makeblock.com/Fp9oCk00XRsVu7grzPqHnWUXbOZG?imageMogr2/thumbnail/765x/gravity/Center" /></a></li>
              <li><a data-target="#pic-5" data-toggle="tab"><img src="http://www.spc-makeblock.es/wp-content/uploads/2016/07/mbot-Ultimatev2-0-Makeblock-90040.jpg" /></a></li>
            </ul>
            
          </div>
						
					<div class="details col-md-6">
						<h3 class="product-title">men's shoes fashion</h3>
						<p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
						<h4 class="price">current price: <span>$180</span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						<!-- <h5 class="sizes">sizes:
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5> -->
						<h5 class="colors">color:
							<!-- <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span> -->
							<!-- <span class="color rose"></span> -->
							<span class="color blue"></span>
						</h5>
						<div class="action">
						<?php 
							if (isset($_SESSION['username'])) {
								echo '<form action="" method="post">
							<button type="button" name="submit" class="add-to-cart btn btn-default" type="button" id="kupi">Buy this</button>
							<!-- <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> -->
							</form>';
							}
							else
							{
								echo '<button type="button" disabled  class="add-to-cart btn btn-default">Buy this</button><span>  Morate se ulogovati</span>';
							}
						 ?>
						
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<footer class="page-footer font-small blue-grey lighten-5" id="footer">

    <div style="background-color: #21d192;">
      <div class="container">

        <!-- Grid row-->
        
      </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

      <!-- Grid row -->
      <div class="row mt-3 dark-grey-text">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">Robotic</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Sajt izradjen kao studentski projekat, u sklopu kursa Web programiranje. </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Products</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a class="dark-grey-text" href="mbot.php">Mbot</a>
          </p>
          <p>
            <a class="dark-grey-text" href="ultimate.php">Mbot ultimate</a>
          </p>
          <p>
            <a class="dark-grey-text" href="dash.php">Dash</a>
          </p>
          <p>
            <a class="dark-grey-text" href="mbotrose.php">Mbot rose</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <!-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4"> -->

          <!-- Links -->
          <!-- <h6 class="text-uppercase font-weight-bold">Useful links</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a class="dark-grey-text" href="#!">Your Account</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Become an Affiliate</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Shipping Rates</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Help</a>
          </p> -->

        <!-- </div> -->
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fa fa-home mr-3"></i> Studentski trg 16, Beograd</p>
          <p>
            <i class="fa fa-envelope mr-3"></i> mv11183@alas.matf.bg.ac.rs</p>
          <p>
            <i class="fa fa-phone mr-3"></i> +381 (0) 11 202 78 01</p>
          <!-- <p>
            <i class="fa fa-print mr-3"></i> + 01 234 567 89</p> -->

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">
       <p class="dark-grey-text">© 2018 Copyright: Ivana Milosavljevic</p>
    </div>
    <!-- Copyright -->

  </footer>

  <!-- Footer -->
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

</html>