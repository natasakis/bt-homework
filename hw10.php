

<?php
//zadatak 1
$num1 = 200;
$num2 = 80;
$sum = $num1 + $num2;
echo "Zbir je " .$sum;
echo "<br>";
$product = $num1 * $num2;
echo "Proizvod je " .$product;
echo "<br>";
$subtract = $num1 - $num2;
echo "Razlika je " .$subtract;
echo "<br>";
$division = $num1 / $num2;
echo "Kolicnik je " .$division;
echo "<br>";
echo "<br>";

//zadatak2
$r=rand(0,6);
//echo $r; //za proveru
switch ($r){
    case 0:
        echo "Danas je ponedeljak!";
        break;
    case 1:
        echo "Danas je utorak!";
        break;
    case 2:
        echo "Danas je sreda!";
        break;
    case 3:
        echo "Danas je cetvrtak!";
        break;
    case 4:
        echo "Danas je petak!";
        break;
    case 5:
        echo "Danas je subota!";
        break;
    case 6:
        echo "Danas je nedelja!";
        break;
    }
    echo "<br>";
    echo "<br>";

    //zadatak3
    $a=rand(100,1000)/100;
    $b=rand(10,100)/10;
    $c=rand(1,10);
    echo "Zbir brojeva $a, $b i $c je " .$a+$b+$c .".";


?>