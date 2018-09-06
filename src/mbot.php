<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="icon" type="image/png" href="Login_v8/images/icons/favicon.ico"/>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
  crossorigin="anonymous">

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	
  <link rel="stylesheet" type="text/css" href="css/robots.css">
  <title>Mbot</title>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#kupi").click(function() {
				const model="Mbot";
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
	<?php 
        include ('php/navbar.php');
     ?>

<br>
<!-- Footer -->

<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="https://www.yogee.com.au/media/catalog/product/cache/1/image/600x/9df78eab33525d08d6e5fb8d27136e95/M/B/MBK_90058_6.jpg" /></div>
						  <div class="tab-pane" id="pic-2"><img src="http://www.lukvel.rs/slike/velike/makeblock-mbot-v11-stem-edukacioni-robot-mbotv11_1.jpg" /></div>
						  <div class="tab-pane" id="pic-3"><img src="https://cdn.shopify.com/s/files/1/0735/0383/products/90053__42332.1461824832.1280.1280_1024x1024_1024x1024_b2b334d3-bb95-4f3b-a8bb-459037f6d718.jpg?v=1523791257" /></div>
						  <div class="tab-pane" id="pic-4"><img src="https://www.astanadigital.com/webshaper/pcm/gallery/lg/cd92e7173c421402e0d8564bc90efc381452842565-lg.jpg" /></div>
						  <div class="tab-pane" id="pic-5"><img src="https://i.ebayimg.com/images/g/HosAAOSwhlZYtyZ9/s-l640.jpg" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="https://www.yogee.com.au/media/catalog/product/cache/1/image/600x/9df78eab33525d08d6e5fb8d27136e95/M/B/MBK_90058_6.jpg" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="http://www.lukvel.rs/slike/velike/makeblock-mbot-v11-stem-edukacioni-robot-mbotv11_1.jpg" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="https://cdn.shopify.com/s/files/1/0735/0383/products/90053__42332.1461824832.1280.1280_1024x1024_1024x1024_b2b334d3-bb95-4f3b-a8bb-459037f6d718.jpg?v=1523791257" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="https://www.astanadigital.com/webshaper/pcm/gallery/lg/cd92e7173c421402e0d8564bc90efc381452842565-lg.jpg" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="https://i.ebayimg.com/images/g/HosAAOSwhlZYtyZ9/s-l640.jpg" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">men's shoes fashion</h3>
						<p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
						<h4 class="price">current price: <span>$180</span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						<h5 class="colors">color:
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


<?php 
        include ('php/footer.php');
     ?>
</body>
</html>