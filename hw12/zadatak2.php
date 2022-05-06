<?php
    if(!empty($_POST['zids'])) $sirz=$_POST['zids'];
    else echo "Niste uneli sirinu zida!<br>";
    if(!empty($_POST['zidv'])) $visz=$_POST['zidv'];
    else echo "Niste uneli visinu zida!<br>";
    if(!empty($_POST['plos']))  $sirp=$_POST['plos'];
    else echo "Niste uneli sirinu plocice!<br>";
    if(!empty($_POST['plov'])) $visp=$_POST['plov'];
    else echo "Niste uneli visinu plocice!<br>";

    if(isset($sirz) && isset($visz) && isset($sirp)  && isset($visp)){
        $zid=$sirz*$visz;
        $plocica=$sirp*$visp;
        $broj=$zid/$plocica;
        $broj=ceil($broj);
        echo "Broj neophodnih plocica je ".$broj;
    }
?>