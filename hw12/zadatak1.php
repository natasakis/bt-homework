<?php
if (isset($_POST['godine'])){
    $god=$_POST['godine'];
    if ($god<=3 && $god>=0) 
    $starost=1.9;
    else if ($god<=10 && $god>=4) 
    $starost=1.5;
    else if ($god<=18 && $god>=11) 
    $starost=1.2;
    else if ($god<=26 && $god>=19) 
    $starost=1;
    else if (($god<=30 && $god>=27)||($god<=60 && $god>=50)) 
    $starost=0.8;
    else if (($god<=35 && $god>=31)||($god<=49 && $god>=45)) 
    $starost=0.7;
    else if (($god<=44 && $god>=36)||($god>60)) 
    $starost=0.6;
    else echo "Niste uneli godine!<br>";
}

if (empty($_POST['tezina'])) echo "Niste uneli tezinu!<br>";
else{ 
    $tez=$_POST['tezina'];
    $tez=intval($tez);
    }

if (isset($_POST['zanimanje'])){
    $zan=$_POST['zanimanje'];
    $aktivnost=150;
    if ($zan=="programer")
    $aktivnost=100;
    else if ($zan=='administrativni radnik')
    $aktivnost=100;
    else if ($zan=='menadzer')
    $aktivnost=100;
    else if ($zan=='policajac')
    $aktivnost=200;
    else if ($zan=='vojnik')
    $aktivnost=200;
    else if ($zan=="sportista") 
    $aktivnost=300;
}

if ((isset($_POST['godine']))&&(!empty($_POST['tezina']))){
$max_kalorije=$tez*$aktivnost*$starost;
echo "Vas maksimalan dnevni unos kalorija je ".$max_kalorije.".";
}


?>