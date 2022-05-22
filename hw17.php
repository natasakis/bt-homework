<?php

function search_users($users, $searchContent){
    $filtredArray=[];
    foreach($users as $no=>$user){
        foreach($user as $key=>$value){
            if(str_contains($value,$searchContent)) $filtredArray[]=$user;
        }
    }
    return $filtredArray;
}

 $users = [
[
	"name" => "Pera",
	"last_name" => "Miric",
	"img" =>'...',
],
[
	"name" => "Mitar",
	"last_name" => "Miric",
	"img" =>'...',
],
[
	"name" => "Marko",
	"last_name" => "Markovic",
	"img" =>'...',
],
[
	"name" => "Petar",
	"last_name" => "Petrovic",
	"img" =>'...',
],
[
	"name" => "Milan",
	"last_name" => "Mitrovic",
	"img" =>'...',
]
];

print_r($users);
echo "<br>";
echo "<br>";

$searchContent="Pera";
print_r(search_users($users,$searchContent));
echo "<br>";
echo "<br>";

$searchContent="...";
print_r(search_users($users,$searchContent));
echo "<br>";
echo "<br>";

$searchContent="Miric";
print_r (search_users($users,$searchContent));
echo "<br>";
echo "<br>";

$searchContent="assfsf";
print_r (search_users($users,$searchContent));







?>