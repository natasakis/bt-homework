<?php


function getAllProducts() {
    $products = [
        [
            'id' => 1,
            'title' => "Burberry Her 100ml",
            'price' => "12999",
            'description' => "Burberry Her by Burberry is a Floral Fruity Gourmand fragrance for women. Burberry Her was launched in 2018. The nose behind this fragrance is Francis Kurkdjian. Top notes are Strawberry, Raspberry, Blackberry, Sour Cherry, Black Currant, Mandarin Orange and Lemon; middle notes are Violet and Jasmine; base notes are Musk, Vanilla, Cashmeran, Oakmoss, Woody Notes, Amber and Patchouli.",
            'available' => true,
            'category' => 100,
            'img' => "./public/theme/img/bher.jpg",
            'brand'=>'Burberry',
            'quantity'=>""
        ],
        [
            'id' => 2,
            'title' => "Chanel Chance 50ml",
            'price' => "16979",
            'description' => "Chance Eau de Toilette by Chanel is a Chypre Floral fragrance for women. Chance Eau de Toilette was launched in 2003. The nose behind this fragrance is Jacques Polge. Top notes are Patchouli, Pink Pepper, Pineapple, Hiacynth and iris; middle notes are Lemon, Jasmine and Rose; base notes are Patchouli, Musk, Vetiver and Vanilla.",
            'available' => true,
            'category' => 50,
            'img' => "./public/theme/img/ch2.jpg",
            'brand'=>'Chanel',
            'quantity'=>""
        ],
        [
            'id' => 3,
            'title' => "Chanel Eau Tendre 30ml",
            'price' => "10200",
            'description' => "Chance Eau Tendre by Chanel is a Floral Fruity fragrance for women. Chance Eau Tendre was launched in 2010. The nose behind this fragrance is Jacques Polge. Top notes are Quince and Grapefruit; middle notes are Hyacinth and Jasmine; base notes are Musk, iris, Virginia Cedar and Amber.",
            'available' => false,
            'category' => 30,
            'img' => "./public/theme/img/chanelchance.jpg",
            'brand'=>'Chanel',
            'quantity'=>""
        ],
        [
            'id' => 4,
            'title' => "DG Ligth Blue 100ml",
            'price' => "16978",
            'description' => "Light Blue by Dolce&Gabbana is a Floral Fruity fragrance for women. Light Blue was launched in 2001. The nose behind this fragrance is Olivier Cresp. Top notes are Sicilian Lemon, Apple, Cedar and Bellflower; middle notes are Bamboo, Jasmine and White Rose; base notes are Cedar, Musk and Amber.",
            'available' => true,
            'category' => 100,
            'img' => "./public/theme/img/dg.jpg",
            'brand'=>'Dolce Gabbana',
            'quantity'=>""
        ],
        [
            'id' => 5,
            'title' => "Dior J'adore 100ml",
            'price' => "17999",
            'description' => "J'adore by Dior is a Floral Fruity fragrance for women. J'adore was launched in 1999. The nose behind this fragrance is Calice Becker. Top notes are Pear, Melon, Magnolia, Peach, Mandarin Orange and Bergamot; middle notes are Jasmine, Lily-of-the-Valley, Tuberose, Freesia, Rose, Orchid, Plum and Violet; base notes are Musk, Vanilla, Blackberry and Cedar. This perfume is the winner of award FiFi Award Best National Advertising Campaign / TV 2007.",
            'available' => false,
            'category' => 100,
            'img' => "./public/theme/img/dior.jpg",
            'brand'=>'Dior',
            'quantity'=>""
        ],
        [
            'id' => 6,
            'title' => "DG Dolce Lily 50ml",
            'price' => "8998",
            'description' => "Dolce Lily by Dolce&Gabbana is a Floral Fruity fragrance for women. This is a new fragrance. Dolce Lily was launched in 2022. Top notes are Passionfruit, Lemon and Bergamot; middle notes are Lily and Rose; base notes are Musk, Vanilla and Sandalwood.",
            'available' => true,
            'category' => 50,
            'img' => "./public/theme/img/dolce.jpg",
            'brand'=>'Dolce Gabbana',
            'quantity'=>""
        ],
        [
            'id' => 7,
            'title' => "Givenchy L'Interdit 70ml",
            'price' => "12999",
            'description' => "L'Interdit Eau de Parfum by Givenchy is a Amber Floral fragrance for women. L'Interdit Eau de Parfum was launched in 2018. L'Interdit Eau de Parfum was created by Dominique Ropion, Anne Flipo and Fanny Bal. Top notes are Pear and Bergamot; middle notes are Tuberose, Orange Blossom and Jasmine Sambac; base notes are Vanilla, Patchouli, Ambroxan and Vetiver.",
            'available' => true,
            'category' => 70,
            'img' => "./public/theme/img/giv.jpg",
            'brand'=>'Givenchy',
            'quantity'=>""
        ],
        [
            'id' => 8,
            'title' => "Lancome Idole 100ml",
            'price' => "21998",
            'description' => "Idôle by Lancôme is a Chypre Floral fragrance for women. Idôle was launched in 2019. Idôle was created by Shyamala Maisondieu, Adriana Medina-Baez and Nadege le Garlantezec. Top notes are Pear and Bergamot; middle notes are Turkish Rose, Rose de Mai and Indian Jasmine; base notes are White Musk and Vanilla.",
            'available' => false,
            'category' => 100,
            'img' => "./public/theme/img/lancome.jpg",
            'brand'=>'Lancome',
            'quantity'=>""
        ],
        [
            'id' => 9,
            'title' => "YSL Libre 70ml",
            'price' => "15995",
            'description' => "Libre by Yves Saint Laurent is a Amber Fougere fragrance for women. Libre was launched in 2019. Libre was created by Anne Flipo and Carlos Benaim. Top notes are Lavender, Mandarin Orange, Black Currant and Petitgrain; middle notes are Lavender, Orange Blossom and Jasmine; base notes are Madagascar Vanilla, Musk, Cedar and Ambergris.",
            'available' => true,
            'category' => 70,
            'img' => "./public/theme/img/libre.jpg",
            'brand'=>'YSL',
            'quantity'=>""
        ],
        [
            'id' => 10,
            'title' => "Marc Jacobs Daisy Love 50ml",
            'price' => "7979",
            'description' => "Daisy Love by Marc Jacobs is a Floral Woody Musk fragrance for women. Daisy Love was launched in 2018. The nose behind this fragrance is Alberto Morillas. Top note is Cloudberry; middle note is Daisy; base notes are Cashmere Musk and Driftwood.",
            'available' => false,
            'category' => 50,
            'img' => "./public/theme/img/marc.jpg",
            'brand'=>'Marc Jabobs',
            'quantity'=>""
        ],
        [
            'id' => 11,
            'title' => "Dior Miss Dior 100ml",
            'price' => "16966",
            'description' => "Miss Dior (2012) by Dior is a Chypre Floral fragrance for women. Miss Dior (2012) was launched in 2012. The nose behind this fragrance is Francois Demachy. Top note is Italian Mandarin; middle notes are Rose and Egyptian Jasmine; base notes are Patchouli and Musk.",
            'available' => true,
            'category' => 100,
            'img' => "./public/theme/img/missdior.jpg",
            'brand'=>'Dior',
            'quantity'=>""
        ],
        [
            'id' => 12,
            'title' => "Armany My Way 50ml",
            'price' => "9999",
            'description' => "My Way by Giorgio Armani is a Floral fragrance for women. This is a new fragrance. My Way was launched in 2020. My Way was created by Carlos Benaim and Bruno Jovanovic. Top notes are Orange Blossom and Bergamot; middle notes are Tuberose and Indian Jasmine; base notes are Madagascar Vanilla, White Musk and Virginian Cedar.",
            'available' => true,
            'category' => 50,
            'img' => "./public/theme/img/myway.jpg",
            'brand'=>'Armany',
            'quantity'=>""
        ],
        [
            'id' => 13,
            'title' => "Narciso For Her 50ml",
            'price' => "8997",
            'description' => "Narciso Rodriguez For Her by Narciso Rodriguez is a Floral Woody Musk fragrance for women. Narciso Rodriguez For Her was launched in 2003. Narciso Rodriguez For Her was created by Christine Nagel and Francis Kurkdjian. Top notes are African Orange flower, Osmanthus and Bergamot; middle notes are Musk and Amber; base notes are Vetiver, Vanille and Patchouli. This perfume is the winner of 2 awards: FiFi Award Fragrance Of The Year Women`s Nouveau Niche 2004 and FiFi Award Fragrance Of The Year Women`s Nouveau Niche 2007.",
            'available' => true,
            'category' => 50,
            'img' => "./public/theme/img/narciso.jpg",
            'brand'=>'Narciso',
            'quantity'=>""
        ],
        [
            'id' => 14,
            'title' => "Prada Candy 100ml",
            'price' => "14999",
            'description' => "Prada Candy by Prada is a Amber Vanilla fragrance for women. Prada Candy was launched in 2011. The nose behind this fragrance is Daniela (Roche) Andrier. Top note is Caramel; middle notes are Powdery Notes and Musk; base notes are Benzoin and Vanilla.",
            'available' => true,
            'category' => 100,
            'img' => "./public/theme/img/prada.jpg",
            'brand'=>'Prada',
            'quantity'=>""
        ],
        [
            'id' => 15,
            'title' => "Armani Si 50ml",
            'price' => "9889",
            'description' => "Si by Giorgio Armani is a Chypre Fruity fragrance for women. Si was launched in 2013. The nose behind this fragrance is Christine Nagel. Top note is Cassis; middle notes are May Rose and Freesia; base notes are Vanilla, Patchouli, Woody Notes and Ambroxan.",
            'available' => true,
            'category' => 50,
            'img' => "./public/theme/img/si.jpg",
            'brand'=>'Armani',
            'quantity'=>""
        ],
        [
            'id' => 16,
            'title' => "Burberry Her 50ml",
            'price' => "7999",
            'description' => "Burberry Her by Burberry is a Floral Fruity Gourmand fragrance for women. Burberry Her was launched in 2018. The nose behind this fragrance is Francis Kurkdjian. Top notes are Strawberry, Raspberry, Blackberry, Sour Cherry, Black Currant, Mandarin Orange and Lemon; middle notes are Violet and Jasmine; base notes are Musk, Vanilla, Cashmeran, Oakmoss, Woody Notes, Amber and Patchouli.",
            'available' => false,
            'category' => 50,
            'img' => "./public/theme/img/bher.jpg",
            'brand'=>'Burberry',
            'quantity'=>""
        ],
        [
            'id' => 17,
            'title' => "Chanel Chance 70ml",
            'price' => "19979",
            'description' => "Chance Eau de Toilette by Chanel is a Chypre Floral fragrance for women. Chance Eau de Toilette was launched in 2003. The nose behind this fragrance is Jacques Polge. Top notes are Patchouli, Pink Pepper, Pineapple, Hiacynth and iris; middle notes are Lemon, Jasmine and Rose; base notes are Patchouli, Musk, Vetiver and Vanilla.",
            'available' => true,
            'category' => 70,
            'img' => "./public/theme/img/ch2.jpg",
            'brand'=>'Chanel',
            'quantity'=>""
        ],
        [
            'id' => 18,
            'title' => "DG Ligth Blue 50ml",
            'price' => "8978",
            'description' => "Light Blue by Dolce&Gabbana is a Floral Fruity fragrance for women. Light Blue was launched in 2001. The nose behind this fragrance is Olivier Cresp. Top notes are Sicilian Lemon, Apple, Cedar and Bellflower; middle notes are Bamboo, Jasmine and White Rose; base notes are Cedar, Musk and Amber.",
            'available' => true,
            'category' => 50,
            'img' => "./public/theme/img/dg.jpg",
            'brand'=>'Dolce Gabbana',
            'quantity'=>""
        ],
        [
            'id' => 19,
            'title' => "Dior J'adore 50ml",
            'price' => "9999",
            'description' => "J'adore by Dior is a Floral Fruity fragrance for women. J'adore was launched in 1999. The nose behind this fragrance is Calice Becker. Top notes are Pear, Melon, Magnolia, Peach, Mandarin Orange and Bergamot; middle notes are Jasmine, Lily-of-the-Valley, Tuberose, Freesia, Rose, Orchid, Plum and Violet; base notes are Musk, Vanilla, Blackberry and Cedar. This perfume is the winner of award FiFi Award Best National Advertising Campaign / TV 2007.",
            'available' => true,
            'category' => 50,
            'img' => "./public/theme/img/dior.jpg",
            'brand'=>'Dior',
            'quantity'=>""
        ],
        [
            'id' => 20,
            'title' => "Givenchy L'Interdit 50ml",
            'price' => "9999",
            'description' => "L'Interdit Eau de Parfum by Givenchy is a Amber Floral fragrance for women. L'Interdit Eau de Parfum was launched in 2018. L'Interdit Eau de Parfum was created by Dominique Ropion, Anne Flipo and Fanny Bal. Top notes are Pear and Bergamot; middle notes are Tuberose, Orange Blossom and Jasmine Sambac; base notes are Vanilla, Patchouli, Ambroxan and Vetiver.",
            'available' => false,
            'category' => 50,
            'img' => "./public/theme/img/giv.jpg",
            'brand'=>'Givenchy',
            'quantity'=>""
        ],
        [
            'id' => 21,
            'title' => "Lancome Idole 50ml",
            'price' => "11998",
            'description' => "Idôle by Lancôme is a Chypre Floral fragrance for women. Idôle was launched in 2019. Idôle was created by Shyamala Maisondieu, Adriana Medina-Baez and Nadege le Garlantezec. Top notes are Pear and Bergamot; middle notes are Turkish Rose, Rose de Mai and Indian Jasmine; base notes are White Musk and Vanilla.",
            'available' => true,
            'category' => 50,
            'img' => "./public/theme/img/lancome.jpg",
            'brand'=>'Lancome',
            'quantity'=>""
        ],
        [
            'id' => 22,
            'title' => "Marc Jacobs Daisy Love 70ml",
            'price' => "9979",
            'description' => "Daisy Love by Marc Jacobs is a Floral Woody Musk fragrance for women. Daisy Love was launched in 2018. The nose behind this fragrance is Alberto Morillas. Top note is Cloudberry; middle note is Daisy; base notes are Cashmere Musk and Driftwood.",
            'available' => true,
            'category' => 70,
            'img' => "./public/theme/img/marc.jpg",
            'brand'=>'Marc Jabobs',
            'quantity'=>""
        ],
        [
            'id' => 23,
            'title' => "Armany My Way 70ml",
            'price' => "13699",
            'description' => "My Way by Giorgio Armani is a Floral fragrance for women. This is a new fragrance. My Way was launched in 2020. My Way was created by Carlos Benaim and Bruno Jovanovic. Top notes are Orange Blossom and Bergamot; middle notes are Tuberose and Indian Jasmine; base notes are Madagascar Vanilla, White Musk and Virginian Cedar.",
            'available' => false,
            'category' => 70,
            'img' => "./public/theme/img/myway.jpg",
            'brand'=>'Armany',
            'quantity'=>""
        ],
        [
            'id' => 24,
            'title' => "Narciso For Her 70ml",
            'price' => "12997",
            'description' => "Narciso Rodriguez For Her by Narciso Rodriguez is a Floral Woody Musk fragrance for women. Narciso Rodriguez For Her was launched in 2003. Narciso Rodriguez For Her was created by Christine Nagel and Francis Kurkdjian. Top notes are African Orange flower, Osmanthus and Bergamot; middle notes are Musk and Amber; base notes are Vetiver, Vanille and Patchouli. This perfume is the winner of 2 awards: FiFi Award Fragrance Of The Year Women`s Nouveau Niche 2004 and FiFi Award Fragrance Of The Year Women`s Nouveau Niche 2007.",
            'available' => true,
            'category' => 70,
            'img' => "./public/theme/img/narciso.jpg",
            'brand'=>'Narciso',
            'quantity'=>""
        ],
        [
            'id' => 25,
            'title' => "Prada Candy 50ml",
            'price' => "9999",
            'description' => "Prada Candy by Prada is a Amber Vanilla fragrance for women. Prada Candy was launched in 2011. The nose behind this fragrance is Daniela (Roche) Andrier. Top note is Caramel; middle notes are Powdery Notes and Musk; base notes are Benzoin and Vanilla.",
            'available' => true,
            'category' => 50,
            'img' => "./public/theme/img/prada.jpg",
            'brand'=>'Prada',
            'quantity'=>""
        ]
    ];

    return $products;
}

function getAvailableProducts($sort="price-asc") {
    $allProducts = getAllProducts();
    $availabaleProducts = [];
    foreach ($allProducts as $product) {
        if($product['available'] == true) {
            $availabaleProducts[] = $product;
        }
    }
    $keys = array_column($availabaleProducts, 'price');
    if ($sort=="price-desc") array_multisort($keys, SORT_DESC, $availabaleProducts);
    else array_multisort($keys, SORT_ASC, $availabaleProducts); 
    return $availabaleProducts;
    
}

function filteredProducts($products, $term) {
    $filteredProducts = [];
    foreach ($products as $product) {
        if(str_contains($product['title'], $term)) {
            $filteredProducts[] = $product;
        }
    }

    return $filteredProducts;
}

function getOneProductById($id) {
    $products = getAvailableProducts();
    foreach ($products as $product) {
        if($product['id'] == $id) {
            return $product;
        }
    }
}

function getRelatedProducs($mainProduct) {
    $related = [];
    $products = getAvailableProducts();
    foreach ($products as  $product) {
        if($product['category'] == $mainProduct['category'] && $mainProduct['id'] != $product['id']) {
            $related[] = $product;
            if(count($related) >= 3) {
                break;
            }
        }
    }
    return $related;
}
function getNextProduct($id){
    $products = getAllProducts();
    for($i=$id;$i<count($products);$i++){
            if($products[$i]['available'] == true ) return $products[$i];
            else {getNextProduct($i+1);}
    }
    if ($id==count($products) && $products[0]['available']) return $products[0];
}
function getPreviousProduct($id){
    $products = getAllProducts();
    $i=$id;
    if ($i==1 && $products[count($products)-1]['available']) return $products[count($products)-1];
    else{
    do {
        $i--;
        if($products[$i-1]['available'] == true ) return $products[$i-1];
    } while ($i > 0);}

}
