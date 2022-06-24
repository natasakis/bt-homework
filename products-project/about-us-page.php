<?php
session_start();
//if(empty($_SESSION['user'])) {
//    header("Location: ./all-products-page.php");
//}

$page = 'about-us-page';

// REQUIRE CLASSES
require_once __DIR__ . "/Models/Model.php";
require_once __DIR__ . "/Models/Product.php";

// USING MODELS
//use Models\Product\User;

//try {
//    $user = new User($_SESSION['user']);
//    $logeduser = $user->getUser();
//} catch (\Throwable $th) {
//    header("Location: ./");
//}


// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-about-us.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";