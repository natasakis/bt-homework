<?php

$products =  [
    [
        'id' => 1253214,
        'title' => "Bottega Bag",
        'description' => "Black leather Bottega bag, simple and fashionable. This bag will raise any outfit.",
        'available' => 0,
        'price' => 4300,
        'category' => 'bag',
        'img' => "./public/theme/img/b.jpg"
    ],
    [
        'id' => 1263222,
        'title' => "Bottega Bag",
        'description' => "Beige leather Bottega bag with gold chain. This bag will raise any outfit.",
        'available' => 1,
        'price' => 4680,
        'category' => 'bag',
        'img' => "./public/theme/img/bv.jpg"
    ],
    [
        'id' => 1263223,
        'title' => "Bottega Bag",
        'description' => "Green leather Bottega bag with gold chain. This bag will raise any outfit.",
        'available' => 1,
        'price' => 4680,
        'category' => 'bag',
        'img' => "./public/theme/img/bvg.jpg"
    ],
    [
        'id' => 1268722,
        'title' => "Dior Bag",
        'description' => "White leather Dior bag with recognizable logo. This bag will raise any outfit.",
        'available' => 1,
        'price' => 5280,
        'category' => 'bag',
        'img' => "./public/theme/img/d.jpg"
    ],
    [
        'id' => 12636752,
        'title' => "Gucci Bag",
        'description' => "White Gucci bag with black details and gold hardware. This bag will raise any outfit.",
        'available' => 1,
        'price' => 5345,
        'category' => 'bag',
        'img' => "./public/theme/img/g.jpg"
    ],
    [
        'id' => 1263864,
        'title' => "Gucci Shoes",
        'description' => "Black leather shoes with short heel and gold details. These shoes will raise any outfit.",
        'available' => 1,
        'price' => 2590,
        'category' => 'shoes',
        'img' => "./public/theme/img/gb.jpg"
    ],
    [
        'id' => 2265864,
        'title' => "Gucci Boots",
        'description' => "Black leather riding boots with short heel and beige detail. These shoes will raise any outfit.",
        'available' => 1,
        'price' => 3530,
        'category' => 'shoes',
        'img' => "./public/theme/img/gc.jpg"
    ],
    [
        'id' => 1263342,
        'title' => "Dior Bag",
        'description' => "Grey Dior bag with signature logo. This bag will raise any outfit.",
        'available' => 0,
        'price' => 5255,
        'category' => 'bag',
        'img' => "./public/theme/img/gd.jpg"
    ],
    [
        'id' => 22654564,
        'title' => "Gucci Boots",
        'description' => "Beige leather boots with block heel. These shoes will raise any outfit.",
        'available' => 1,
        'price' => 3560,
        'category' => 'shoes',
        'img' => "./public/theme/img/gr.jpg"
    ],
    [
        'id' => 35453342,
        'title' => "Gucci Bag",
        'description' => "Beige Gucci bag with signature logo. This bag will raise any outfit.",
        'available' => 1,
        'price' => 5345,
        'category' => 'bag',
        'img' => "./public/theme/img/gd.jpg"
    ],
    [
        'id' => 3253342,
        'title' => "Gucci Bag",
        'description' => "White Gucci bag with signature logo. This bag will raise any outfit.",
        'available' => 1,
        'price' => 6545,
        'category' => 'bag',
        'img' => "./public/theme/img/gw.jpg"
    ],
    [
        'id' => 3235792,
        'title' => "Loewe Bag",
        'description' => "Green Loewe leather bag with signature logo. This bag will raise any outfit.",
        'available' => 1,
        'price' => 2745,
        'category' => 'bag',
        'img' => "./public/theme/img/l.jpg"
    ],
    [
        'id' => 3235354,
        'title' => "Loewe Bag",
        'description' => "Coignac Loewe leather bag with signature logo. This bag will raise any outfit.",
        'available' => 0,
        'price' => 2935,
        'category' => 'bag',
        'img' => "./public/theme/img/l.jpg"
    ],
    [
        'id' => 385354,
        'title' => "Prada Bag",
        'description' => "Simple Brown Prada leather bag. This bag will raise any outfit.",
        'available' => 1,
        'price' => 3935,
        'category' => 'bag',
        'img' => "./public/theme/img/r.jpg"
    ],
    
    [
        'id' => 8553999,
        'title' => "Tom Ford Bag",
        'description' => "Mettalic Tom Ford bag with details. This bag will raise any outfit.",
        'available' => 1,
        'price' => 2995,
        'category' => 'bag',
        'img' => "./public/theme/img/tf.jpg"
    ],
    
    [
        'id' => 535497696,
        'title' => "YSL Bag",
        'description' => "Simple YSL black leather bag. This bag will raise any outfit.",
        'available' => 1,
        'price' => 3475,
        'category' => 'bag',
        'img' => "./public/theme/img/y.jpg"
    ],
    [
        'id' => 2546599,
        'title' => "Rossi Boots",
        'description' => "Patent leather black boots with shiny buckle. These shoes will raise any outfit.",
        'available' => 1,
        'price' => 3560,
        'category' => 'shoes',
        'img' => "./public/theme/img/rv.jpg"
    ],
    [
        'id' => 99954564,
        'title' => "Tom Ford Boots",
        'description' => "Tom Ford black leather boots mid-length. These shoes will raise any outfit.",
        'available' => 1,
        'price' => 2960,
        'category' => 'shoes',
        'img' => "./public/theme/img/tr.jpg"
    ],
    [
        'id' => 22654564,
        'title' => "Versace Boots",
        'description' => "Versace long leather boots with short heel. These shoes will raise any outfit.",
        'available' => 1,
        'price' => 3580,
        'category' => 'shoes',
        'img' => "./public/theme/img/vg.jpg"
    ],
];

/* * * mysql hostname ** */
$hostname = "localhost";
/* * * mysql username ** */
$username = "root";
/* * * mysql password ** */
$password = "";
/* * * mysql database name ** */
$database = "shop-bt";

try {
    $connection = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    foreach ($products as $product) {
        $sqlQueryString = "INSERT INTO ec_products (title, description, price, stock, img, status, barcode)"
                        . " VALUES (" . ":title" . ", " . ":description" . ", " . ":price" . ", " . ":stock" . ", " . ":img" . ", "
                        . ":status" . ", " . ":barcode" . ")";
        $statement = $connection->prepare($sqlQueryString);
        $params = [
            'title' => $product["title"],
            'description' => $product["description"],
            'price' => $product["price"],
            'stock' => rand(1, 10),
            'img' => $product["img"],
            'status' => $product["available"],
            'barcode' => $product["id"],
        ];
        $status = $statement->execute($params);
    }
} catch (PDOException $exception) {
    echo "Something went wrong: " . $exception->getMessage() . "<br>";
}
