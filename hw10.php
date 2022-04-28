

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

//zadatak 1-drugi nacin
function sum($x,$y){
    $sum2=$x+$y;
    echo $sum2;
}
function product($x,$y){
    $product2=$x*$y;
    echo $product2;
}
function substract($x,$y){
    $substract2=$x-$y;
    echo $substract2;
}
function division($x,$y){
    $division2=$x/$y;
    echo $division2;
}
echo "Ako su brojevi $num1 i $num2 njihov zbir je: "; sum($num1,$num2);
echo ", prizvod je: "; product($num1,$num2);
echo ", razlika je: "; substract($num1,$num2);
echo ", a kolicnik je: "; division($num1,$num2);
echo ".<br>";
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

//zadatak2-drugi nacin
$days=array("ponedeljak", "utorak", "sreda", "cetvrtak", "petak", "subota", "nedelja");
echo "Danas je $days[$r]!";
echo "<br>";
echo "<br>";

//zadatak3
$a=rand(100,1000)/100;
$b=rand(10,100)/10;
$c=rand(1,10);
echo "Zbir brojeva $a, $b i $c je " .$a+$b+$c .".";
echo "<br>";

//zadatak3-drugi nacin
function add($x,$y,$z){
    $w=$x+$y+$z;
    echo $w;
}
echo "Zbir brojeva $a, $b i $c je "; add($a, $b, $c); echo "."; 

?>