<?php
 
  /* ukljucujemo funkcije definisane u datoteci funckije.inc */
  include('funkcije.inc');
  
  /* povezujemo se sa serverom */
  konektuj_se();
  
  /* analiziramo zahtevanu akciju */
  /* ako akcija nije postavljena (npr. neko direktno pokusava da pristupi strani) prekidamo izvrsavanje */
  if(!isset($_POST['logUsername']))
    exit();
  if(!isset($_POST['logPass']))
    exit();
    
  /* inace, analiziramo vrednost akcije */
  $userName=$_POST['logUsername'];
  $pass=$_POST['logPass'];
    
    /* formiramo upit i izvrsavamo ga */
  $upit="SELECT Username, Password FROM  Users WHERE Username = '$userName' AND Password='$pass'";
  $rezultat=mysqli_query($veza_sa_bazom, $upit) or die("Problem prilikom izvrsavanja upita");
  if($rezultat->num_rows > 0)
    echo "uspeh";
  else
    echo "neuspeh";
 
 /* raskidamo konekciju sa serverom */
 diskonektuj_se();

?>