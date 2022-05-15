<?php
if (isset($_GET['btn'])){
    if (!empty($_GET)){ 
        if (empty($_GET['dan'])) die ("Niste uneli dan!");
        elseif (!is_numeric($_GET['dan'])) die ("Dan mora biti broj!");
        else $day=$_GET['dan'];
        if (empty($_GET['mesec'])) die ("Niste uneli mesec!");
        elseif (!is_numeric($_GET['mesec'])) die ("Mesec mora biti broj!");
        else $month=$_GET['mesec'];
        if (empty($_GET['godina'])) die ("Niste uneli godinu!");
        elseif (!is_numeric($_GET['godina'])) die ("Godina mora biti broj!");
        elseif ($_GET['godina']<1970) die ("Datum mora biti posle 1.1.1970.");
        else $year=$_GET['godina'];
        if (checkdate($month, $day, $year)) echo "Datum ".$day.".".$month.".".$year.". je ispravan!<br>";
        else echo ("Niste uneli pravilan datum!");
    }
}




?>