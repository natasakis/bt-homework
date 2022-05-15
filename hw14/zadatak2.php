<?php

function kamioni($x, $y, $z){
    if ($z==true) echo "Ostatak goriva je ". ($x-$y*floor($x/$y)); //da su integeri $x % $y
    else echo "Broj kamiona koji mogu da predju rutu je ". floor($x/$y);
}


if (isset($_GET['btn'])){
    if (!empty($_GET)){ 
        if (empty($_GET['ug'])) die ("Niste uneli ukupno gorivo!");
        elseif (!is_numeric($_GET['ug']) || ($_GET['ug']) < 0) die ("Ukupno gorivo mora biti pozitivan broj!");
        else $gorivo=$_GET['ug'];
        if (empty($_GET['potrosnja'])) die ("Niste uneli potrosnju!");
        elseif (!is_numeric($_GET['potrosnja']) || ($_GET['potrosnja']) < 0 ) die ("Potrosnja mora biti pozitivan broj!");
        else $potros=$_GET['potrosnja'];
        if (isset($_GET['ostatak'])) $os=true;
        else $os=false;
        
        kamioni($gorivo, $potros, $os);
    }
}











?>