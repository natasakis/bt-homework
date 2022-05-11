<?php

$sirina=mt_rand(1,10);
$visina=mt_rand(1,10);
$poluprecnik=mt_rand(1,10);


function krug($x){
    $pkruga=round($x**2*pi(),2);
    return $pkruga;
}
function pravougaonik($x,$y){
    $ppravougaonika=$x*$y;
    return $ppravougaonika;
}
function prvibazen($x,$y){
    $pprvogbazena=pravougaonik($x,$y)+krug(($x/2))/2;
    return $pprvogbazena;
}
function ukupno($x,$y,$z){
    $pukupno=prvibazen($x,$y)+pravougaonik($x,$y)+krug($z);
    return $pukupno;
}

echo "Ukoliko su visina i sirina prvog bazena ". $sirina. " i " . $visina . " njegova povrsina je " . prvibazen($sirina, $visina) .".<br>";
echo "Ukoliko su visina i sirina pravougaonog bazena ". $sirina. " i " . $visina . " njegova povrsina je " . pravougaonik($sirina, $visina) .".<br>";
echo "Ukoliko je poluprecnik kruznog bazena ". $poluprecnik . " njegova povrsina je " . krug($poluprecnik) .".<br>";
echo "Ukupna povrsina ovih bazena je " . ukupno($sirina, $visina,$poluprecnik) .".";








?>