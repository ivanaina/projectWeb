<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" type="image/png" href="Login_v8/images/icons/favicon.ico"/>
	<title>

		
	</title>
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
				<!-- <a class="dropdown-item" href="#">Education</a>
				<a class="dropdown-item" href="#robots">Robots</a>
				<div class="dropdown-divider"></div>
 -->				<a class="dropdown-item" href="#aboutUs">About us</a>
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
</nav>
<div class="container">
	<br>  <p class="text-center">More bootstrap 4 components on </p>
<hr>

	
<div class="card">
	<div class="row">
		<aside class="col-sm-5 border-right">
<article class="gallery-wrap"> 
<div class="img-big-wrap">
  <div> <a href="#"><img src="https://www.ducan-online.com/wp-content/uploads/2018/01/mbot-v11-stem-edukativni-robot-za-decu-bluetooth-rozi-1.png"></a></div>
</div> <!-- slider-product.// -->
<div class="img-small-wrap">
  <div class="item-gallery"> <img src="https://www.ducan-online.com/wp-content/uploads/2018/01/mbot-v11-stem-edukativni-robot-za-decu-bluetooth-rozi-1.png"> </div>
  <div class="item-gallery"> <img src="https://www.ducan-online.com/wp-content/uploads/2018/01/mbot-v11-stem-edukativni-robot-za-decu-bluetooth-rozi-1.png"> </div>
  <div class="item-gallery"> <img src="https://www.ducan-online.com/wp-content/uploads/2018/01/mbot-v11-stem-edukativni-robot-za-decu-bluetooth-rozi-1.png"> </div>
  <div class="item-gallery"> <img src="https://www.ducan-online.com/wp-content/uploads/2018/01/mbot-v11-stem-edukativni-robot-za-decu-bluetooth-rozi-1.png"> </div>
</div> <!-- slider-nav.// -->
</article> <!-- gallery-wrap .end// -->
		</aside>
		<aside class="col-sm-7">
<article class="card-body p-5">
	<h3 class="title mb-3">Mbot</h3>

<p class="price-detail-wrap"> 
	<span class="price h3 text-warning"> 
		<span class="currency">RSD </span><span class="num">11999</span>
	</span> 
	
</p> <!-- price-detail-wrap .// -->
<dl class="item-property">
  <dt>Description</dt>
  <dd><p>Here goes description consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco </p></dd>
</dl>
<dl class="param param-feature">
  <dt>Model#</dt>
  <dd>12345611</dd>
</dl>  <!-- item-property-hor .// -->
<dl class="param param-feature">
  <dt>Color</dt>
  <dd>Rose</dd>
</dl>  <!-- item-property-hor .// -->
<dl class="param param-feature">
  <dt>Delivery</dt>
  <dd>Russia, USA, and Europe</dd>
</dl>  <!-- item-property-hor .// -->

<hr>
	<div class="row">
		<div class="col-sm-5">
			<dl class="param param-inline">
			  <dt>Quantity: </dt>
			  <dd>
			  	<select class="form-control form-control-sm" style="width:70px;">
			  		<option> 1 </option>
			  		<option> 2 </option>
			  		<option> 3 </option>
			  	</select>
			  </dd>
			</dl>  <!-- item-property .// -->
		</div> <!-- col.// -->
		<div class="col-sm-7">
			<!-- <dl class="param param-inline">
				  <dt>Size: </dt>
				  <dd>
				  	<label class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <span class="form-check-label">SM</span>
					</label>
					<label class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <span class="form-check-label">MD</span>
					</label>
					<label class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <span class="form-check-label">XXL</span>
					</label>
				  </dd>
			</dl>  -->
		</div> <!-- col.// -->
	</div> <!-- row.// -->
	<hr>
	<a href="#" class="btn btn-lg btn-primary text-uppercase"> Buy now </a>
	<!-- <a href="#" class="btn btn-lg btn-outline-primary text-uppercase"> <i class="fas fa-shopping-cart"></i> Add to cart </a> -->
</article> <!-- card-body.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
</div> <!-- card.// -->


</div>
<!--container.//-->


<br><br>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

</html>