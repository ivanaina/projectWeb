<?php
 
  /* ukljucujemo funkcije definisane u datoteci funckije.inc */
  include('funkcije.inc');
  
  /* povezujemo se sa serverom */
  konektuj_se();
  
  /* analiziramo zahtevanu akciju */
  /* ako akcija nije postavljena (npr. neko direktno pokusava da pristupi strani) prekidamo izvrsavanje */
  if(!isset($_POST['registerUsername']))
    exit();
  if(!isset($_POST['registerAddress']))
    exit();
  if(!isset($_POST['registerPhone']))
    exit();
  if(!isset($_POST['registerEmail']))
    exit();
  if(!isset($_POST['registerPassword']))
    exit();
  if(!isset($_POST['registerConfirm']))
    exit();
    
  /* inace, analiziramo vrednost akcije */
  $userName=$_POST['registerUsername'];
  $address=$_POST['registerAddress'];
  $phone=$_POST['registerPhone'];
  $email=$_POST['registerEmail'];
  $pass=$_POST['registerPassword'];
  $confPass=$_POST['registerConfirm'];  
    /* treba procitati podatke o studentima */
    
    /* formiramo upit i izvrsavamo ga */
    $upit="INSERT INTO Users (Username, Address, Phone, Email, Password) VALUES('$userName','$address','$phone','$email','$pass')";
    $rezultat=mysqli_query($veza_sa_bazom, $upit) or die("postoji");
    if(mysqli_affected_rows($veza_sa_bazom) > 0)
      echo "uspeh";
    else
      echo "neuspeh";
 
 /* raskidamo konekciju sa serverom */
 diskonektuj_se();

?>
