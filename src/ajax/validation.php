<?php
 
  /* ukljucujemo funkcije definisane u datoteci funckije.inc */
  include('funkcije.inc');
  
  /* povezujemo se sa serverom */
  konektuj_se();
  
  /* analiziramo zahtevanu akciju */
  /* ako akcija nije postavljena (npr. neko direktno pokusava da pristupi strani) prekidamo izvrsavanje */
  if(!isset($_POST['registerUsername']))
    exit();
  if(!isset($_POST['registerEmail']))
    exit();
  if(!isset($_POST['registerPassword']))
    exit();
  if(!isset($_POST['registerConfirm']))
    exit();
    
  /* inace, analiziramo vrednost akcije */
  $userName=$_POST['registerUsername'];
  $email=$_POST['registerEmail'];
  $pass=$_POST['registerPassword'];
  $confPass=$_POST['registerConfirm'];  
    /* treba procitati podatke o studentima */
    
    /* formiramo upit i izvrsavamo ga */
    $upit="INSERT INTO Users (Username, Email, Password) VALUES('$userName','$email','$pass')";
    $rezultat=mysqli_query($veza_sa_bazom, $upit) or die("Problem prilikom izvrsavanja upita");
    
    /* sve podatke koje citamo formatiracemo na nivou niske */
    // $za_slanje="";
    // while($red=mysqli_fetch_assoc($rezultat)){
    //   $za_slanje.=$red['ime']." ".$red['prezime']." ".$red['indeks']."::";
    // }
    
    // case "polozeni_predmeti":
    //   $indeks=$_GET['indeks'];
    //   $upit="select naziv from polaganja, predmeti where ocena>5 and indeks='$indeks' and polaganja.sifra=predmeti.sifra";
    //   $rezultat=mysqli_query($veza_sa_bazom, $upit) or die("Problem prilikom izvrsavanja upita");
    //   if(mysqli_num_rows($rezultat)==0){
    // 	$za_slanje="Nema polozenih predmeta!";
    //   }
    //   else{
	   //  $za_slanje="";
	   //  while($red=mysqli_fetch_assoc($rezultat)){
	   //    $za_slanje.=$red['naziv']." ";
	   //  }
    //     }


 /* saljemo podatke */
 if($rezultat) {
    echo "success";
  }
  else {
    echo "error";
  }
 
 /* raskidamo konekciju sa serverom */
 diskonektuj_se();

?>
