<?php
require_once __DIR__ . "/models/products-model.php";
//require_once __DIR__ . "/models/user-model.php";

$page = 1;

if(!empty($_GET['stranica'])) {
    $productId = $_GET['stranica'];
}

$product = getOneProductById($productId);


if(isset($_POST['quantity'])){
    $quan = $_POST['quantity'];
}
$q=$quan;
$pric=$product['price'];
$totalprice=$pric*$q;

//$systemErrors['email']='nesto';



// HEADER
require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-checkout.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";