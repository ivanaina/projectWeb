<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="image/png" href="Login_v8/images/icons/favicon.ico"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
	crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>Education with robots</title>
</head>

<body>
	<?php 
	include ('php/header.php'); ?>

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
						<a href="mbot.php" class="btn btn-primary">Read more or Buy</a>
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
						<a href="ultimate.php" class="btn btn-primary">Read more or Buy</a>
					</div>
				</div>
			</td>
			<td>
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" style="width: 180px height: 100px" src="https://cdn.shopify.com/s/files/1/2363/7229/products/20171022151945_1800x.jpg?v=1527481643"
					alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="dash.php" class="btn btn-primary">Read more or Buy</a>
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
						<a href="mbotrose.php" class="btn btn-primary">Read more or Buy</a>
					</div>
				</div>
			</td>

		</tr>
	</table>
</div>
<?php 
include ('php/footer.php'); ?>

</body>
</html>