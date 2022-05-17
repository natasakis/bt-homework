<?php

//zadatak1
$hwArray = ["Pera", "Milka", "Pera" ,"Sonja", "Danilo", "Marica", "Ivica", "Sonja", "Vanja", "Mira"];
print_r($hwArray); echo "<br><br>";

//a - dodavanje elementa na kraj niza
if (!in_array("Natasa", $hwArray)) array_push($hwArray,"Natasa");
print_r($hwArray); echo "<br><br>";

//b - dodavanje elementa na trece mesto u nizu
if (!in_array("<Misa", $hwArray)) array_splice($hwArray,2,0,"Misa");
print_r($hwArray); echo "<br><br>";

//c - broj clanova niza
echo "Ucenika ima ".count($hwArray)."."; echo "<br><br>";

//d - dodavanje elementa na prvo mesto u nizu 
array_unshift($hwArray,"Milan");
print_r($hwArray); echo "<br><br>";

//e - brisanje elementa po vrednosti
foreach (array_keys($hwArray, "Danilo", true) as $key) {
    unset($hwArray[$key]);
}
print_r($hwArray); echo "<br><br>";

//f - pravljanje jedinstvenog niza
$hwArrayUn=array_unique($hwArray);
print_r($hwArrayUn); echo "<br><br>";

//zadatak2
$data=array(
    array('name' => "Pera",
	'last_name' => "Peric",
	'age' => 28,
	'gender' => 'male',
	'avg_rating' => 7.5,
	'married' => false,
	'courses' => ['laravel', 'react', 'jQuery']),
    array('name' => "Marko",
	'last_name' => "Markovic",
	'age' => 35,
	'gender' => 'male',
	'avg_rating' => 4.5,
	'married' => true,
	'courses' => ['PHP', 'jQuery']),
    array('name' => "Milica",
	'last_name' => "Milicevic",
	'age' => 23,
	'gender' => 'female',
	'avg_rating' => 9.3,
	'married' => false,
	'courses' => ['laravel']),
    array('name' => "Milos",
	'last_name' => "Milosevic",
	'age' => 75,
	'gender' => 'male',
	'avg_rating' => 2.4,
	'married' => true,
	'courses' => ['laravel', 'react', 'bootstrap']),
    array('name' => "Lena",
	'last_name' => "Peric",
	'age' => 54,
	'gender' => 'female',
	'avg_rating' => 7.3,
	'married' => true,
	'courses' => ['laravel', 'react', 'jQuery','PHP']),
    array('name' => "Ivan",
	'last_name' => "Ivanovic",
	'age' => 34,
	'gender' => 'male',
	'avg_rating' => 5.3,
	'married' => false,
	'courses' => ['PHP', 'jQuery'])
);
foreach($data as $key=>$podatak){
    echo $key+1 .". ";
    echo $podatak["name"] ." ". $podatak["last_name"] ." ima ".$podatak["age"];
    if ($podatak["age"]%10==1) echo " godinu i ";
    else if ($podatak["age"]%10==2 || $podatak["age"]%10==3|| $podatak["age"]%10==4) echo " godine i ";
    else echo " godina i ";
    if ($podatak["gender"]=="male" && $podatak["married"]) echo "jeste ozenjen. ";
    else if ($podatak["gender"]=="male" && !$podatak["married"]) echo "nije ozenjen. ";
    else if ($podatak["gender"]=="female" && $podatak["married"]) echo "jeste udata. ";
    else if ($podatak["gender"]=="female" && !$podatak["married"]) echo "nije udata. ";
    echo "Ima prosecnu ocenu ".$podatak["avg_rating"].", a kursevi koje trenutno slusa su: ";
    for ($i=0;$i<count($podatak["courses"]);$i++){
        $k=$podatak["courses"][$i];
        if ($i+1==count($podatak["courses"])) echo $k. ". ";
        else echo $k. ", ";
    }
    echo "<br>";
}


?>