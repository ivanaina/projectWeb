<?php

    /* funkcija kojom se povezujemo sa serverom */
    function konektuj_se(){
        global $veza_sa_bazom;
        
        /* NAPOMENA: korisnicko ime i sifru i ime baze prilagoditi svojim podesavanjima */
        $veza_sa_bazom=mysqli_connect("localhost", "root", "mi14126", "Roboti");
        if(mysqli_connect_errno()){
            die("Problem prilikom povezivanja sa bazom: ".mysqli_connect_error());
        }
    }
    
    /* funkcija kojom se raskida veza sa serverom */
    function diskonektuj_se(){
        global $veza_sa_bazom;
        
        mysqli_close($veza_sa_bazom);
    }

?>
