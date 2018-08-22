<?php
  session_start();
  /* ukljucujemo funkcije definisane u datoteci funckije.inc */
  include('funkcije.inc');
  
  /* povezujemo se sa serverom */
  konektuj_se();

    
  /* inace, analiziramo vrednost akcije */
  $id=$_POST['name'];
    
    /* formiramo upit i izvrsavamo ga */
  $upit="UPDATE Porudzbina SET status=(1-status)  WHERE id_porudzbine = '$id'";
  $rezultat=mysqli_query($veza_sa_bazom, $upit) or die("Problem prilikom izvrsavanja upita");

 
 /* raskidamo konekciju sa serverom */
 diskonektuj_se();

?>
