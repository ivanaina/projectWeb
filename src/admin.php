<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" type="image/png" href="Login_v8/images/icons/favicon.ico"/>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
	crossorigin="anonymous">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


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

		@media only screen and (max-width: 820px) {
			nav {
				width: 95%;
			}
		}

		body{
    		background-color:#EEEEEE;
		}
		body{
    background-color:#EEEEEE;
}
	</style>
	<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->

	<title>Education with robots</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $(".check").click(function(){

      let name = $(this).attr('name');
      
      $.ajax({
        method: 'post',
        url: 'ajax/changeStatus.php',
        data: {
          name: name
        },
        success: function(response){
          console.log("response");
        }
      });
      window.location='admin.php';
    });
    $(".uncheck").click(function(){

      let name = $(this).attr('name');
      
      $.ajax({
        method: 'post',
        url: 'ajax/changeStatus.php',
        data: {
          name: name
        },
        success: function(response){
          console.log("response");
        }
      });
      window.location='admin.php';
    });
    $(".delete").click(function(){

      let name = $(this).attr('name');
      
      $.ajax({
        method: 'post',
        url: 'ajax/delete.php',
        data: {
          name: name
        },
        success: function(response){
          console.log("response");
        }
      });
      window.location='admin.php';
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
	<!-- <form class="form-inline my-2 my-lg-0" id="login" action="search.php">
		<input class="form-control mr-sm-2 " id="" defaultValue="" type="text" placeholder="Search..." aria-label="userName">
		<button class="btn btn-outline-success mr-sm-2 my-2 my-sm-0" type="submit">Search</button>
	</form> -->
	<form method="get" action="logout.php">
    	<button class="btn btn-outline-success mr-sm-2 my-2 my-sm-0" type="submit">Log Out of 
    	<?php 
			echo $_SESSION['username'];
		?>
		
	</button>



	</form>
</div>
</nav>

<!-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script> -->
<br>

<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
        <h4>Bootstrap Snipp for Datatable</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>           
                   <th>Model</th>
                   <th>Username</th>
                     <th>Address</th>
                     <th>Email</th>
                     <th>Contact</th>
                      <th>Done</th>
                      <th>Delete</th>
                       
                   </thead>

    <tbody>
    <?php
  /* ukljucujemo funkcije definisane u datoteci funckije.inc */
  include('ajax/funkcije.inc');
  
  /* povezujemo se sa serverom */
  konektuj_se();
    
    /* formiramo upit i izvrsavamo ga */
  $upit="SELECT * FROM  Porudzbina WHERE status = 1 ORDER BY datum_porudzbine DESC";
  $rezultat=mysqli_query($veza_sa_bazom, $upit) or die("Problem prilikom izvrsavanja upita");
  
  while($red = mysqli_fetch_assoc($rezultat)){
      $id = $red['id_porudzbine'];
      $username = $red['username'];
      $model = $red['model'];
      $address = $red['address'];
      $email = $red['email'];
      $phone = $red['phone'];
      
      echo  '<tr>

    <td>' . $model . '</td>
    <td>' . $username . '</td>
    <td>' . $address . '</td>
    <td>' . $email . '</td>
    <td>' . $phone . '</td>
    <td><p><button href name="' . $id .'" class="btn btn-primary btn-xs check"><span class="fa fa-circle"></span></button></p></td>
    <td><p><button name="'. $id .'" class="btn btn-danger btn-xs delete"><span class="fa fa-trash"></span></button></p></td>
    </tr>';
      
      
    }

    $upit="SELECT * FROM  Porudzbina WHERE status = 0 ORDER BY datum_porudzbine";
  $rezultat=mysqli_query($veza_sa_bazom, $upit) or die("Problem prilikom izvrsavanja upita");
  
  while($red = mysqli_fetch_assoc($rezultat)){
      $id = $red['id_porudzbine'];
      $username = $red['username'];
      $model = $red['model'];
      $address = $red['address'];
      $email = $red['email'];
      $phone = $red['phone'];
      
      echo  '<tr>
    <td>' . $model . '</td>
    <td>' . $username . '</td>
    <td>' . $address . '</td>
    <td>' . $email . '</td>
    <td>' . $phone . '</td>
    <td><p><button type="submit" name="' . $id .'" class="btn btn-primary btn-xs uncheck"><span class="fa fa-check-circle"></span></button></p></td>
    <td><p><button name="'. $id .'" class="btn btn-danger btn-xs delete"><span class="fa fa-trash"></span></button></p></td>
    </tr>';

      
      
    }
    
 /* raskidamo konekciju sa serverom */
 diskonektuj_se();

?>
    <form></form>
    </tbody>
        
</table>         
            </div>   
        </div>
	</div>
</div>
    
    
    
    

<!-- Footer -->
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
<!-- Footer -->
</body>


</html>