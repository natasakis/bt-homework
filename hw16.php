<?php
//zadatak1
function CheckIfEmail(&$a){
    foreach($a as $key=>$mail){
        if (!str_contains($mail,'@')) unset($a[$key]);
    }
}
$emailovi=array('mejl@gmail.com','mejl2@hotmail.com','mejl3yahoo.com','mejl4@gmail.com','mejl5outlook.com');
print_r ($emailovi);
echo "<br>";
CheckIfEmail($emailovi);
print_r($emailovi);
echo "<br>";echo "<br>";

//zadatak3
function ArrayKey($a,$k){
    $bool=false;
    foreach($a as $kljuc=>$value){
        if ($k===$kljuc) $bool=true;
    }
    return $bool;
}
$gorivo=array ("Evro Dizel" => "199.9","Expert Dizel" => "211.9","BMB 95" => "180","Expert BMB"=>"201.9" ,"TNG" => "108.9");
if (ArrayKey($gorivo,"TNG")) echo "Trazeni key postoji!";
else echo "Trazeni key ne postoji!";
echo "<br>";echo "<br>";

//zadatak2
function Calculate($a,$i='+'){
    if ($i=='+'){
        $rez=0;
        foreach($a as $broj) $rez+=$broj;
        return $rez;
    }
    else if ($i=='-'){
        $rez=0;
        foreach($a as $broj) $rez-=$broj;
        return $rez;
    }
    else if ($i=='*'){
        $rez=1;
        foreach($a as $broj) $rez*=$broj;
        return $rez;
    }
    else if ($i=='/'){
        $rez=1;
        foreach($a as $broj) 
            if ($broj!=0) $rez*=1/$broj;
            else die("Deljenje nulom!");
        return $rez;
    }
   
    else die("Operacija morao biti +, - , * ili / !");
}
$j=mt_rand(1,10);
for ($i=0;$i<$j;$i++){
    $niz[$i]=mt_rand(0,20);
}
print_r($niz); echo "<br>";
echo Calculate($niz); echo "<br>";
echo Calculate($niz,'/'); echo "<br>";
echo "<br>";echo "<br>";




?>