<?php

require_once __DIR__ . "/models/products-model.php";

$filter = "";
$sort = "";

if(!empty($_GET['filter'])) {
    $filter = $_GET['filter'];
}
if(isset($_GET['sort-by'])){
    $sort = $_GET['sort-by']; 
}
$products = getAvailableProducts($sort);

if($filter != "") {
    $products = filteredProducts($products, $filter);
}


require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-products.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";