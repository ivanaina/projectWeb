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
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<title>Education with robots</title>
  
  <link rel="stylesheet" type="text/css" href="css/admin.css">
  <script type="text/javascript" src="js/admin.js"></script>
</head>
<body>
	<?php 
  include ('php/adminNav.php'); ?>
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
<?php include ('php/footer.php'); ?>

</body>
</html>