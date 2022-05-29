<?php
require_once __DIR__ . "/models/products-model.php";
//require_once __DIR__ . "/models/user-model.php";


$page = 1;


if(!empty($_GET['stranica'])) {
    $productId = $_GET['stranica'];
}
$product = getOneProductById($productId);

if(isset($_POST['btn'])){
if(!empty($_POST['name'])) $name = $_POST['name'];
    else die("You didnt enter name!");

if(!empty($_POST['lastname'])) $lastname = $_POST['lastname'];
    else die("You didn't enter lastname!");

if(!empty($_POST['email'])) 
    $email = $_POST['email'];
    else die("You didn't enter email!");

if(!empty($_POST['city'])) 
    $city = $_POST['city'];
    else die("You didn't enter city!");

if(!empty($_POST['phone'])) 
    $phone = $_POST['phone'];
    else die("You didn't enter phone!");

if(!empty($_POST['street'])) 
    $street = $_POST['street'];
    else die("You didn't enter street!");

if(!empty($_POST['zip'])) 
    $zip = $_POST['zip'];
    else die("You didn't enter zip!");

$comment=[];
if(!empty($_POST['comment'])) {
    $comment=$_POST['comment'];
}
}


// HEADER
require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-conformation.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";