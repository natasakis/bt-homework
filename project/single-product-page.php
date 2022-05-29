<?php
require_once __DIR__ . "/models/products-model.php";

$page = 1;

if(!empty($_GET['stranica'])) {
    $productId = $_GET['stranica'];
}

$product = getOneProductById($productId);
$relatedProducts = getRelatedProducs($product);
$nextproduct=getNextProduct($productId);
$previousproduct=getPreviousProduct($productId);

// HEADER
require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-single-product.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";