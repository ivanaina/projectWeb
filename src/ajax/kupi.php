	<?php 
	session_start();
	if(!isset($_POST['model']))
		exit("lalallala");

		include('funkcije.inc');

		/* povezujemo se sa serverom */
		konektuj_se();

		$model=$_POST['model'];
		$status=1;
		$username=$_SESSION['username'];
		$address=$_SESSION['address'];
		$email=$_SESSION['email'];
		$phone=$_SESSION['phone'];

		/* formiramo upit i izvrsavamo ga */
		$upit="INSERT INTO Porudzbina (model, status, username, address, email, phone) VALUES('$model','$status','$username','$address','$email','$phone')";
		$rezultat=mysqli_query($veza_sa_bazom, $upit) or die("postoji");


		/* raskidamo konekciju sa serverom */
		diskonektuj_se();
	 ?>