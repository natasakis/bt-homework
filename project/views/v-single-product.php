<main>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <img src="<?php echo htmlspecialchars($product['img']); ?>" alt="slika" width="180" maxheight="300">
            </div>
            <div class="col-5">
                <h1 class="card-title mb-4"><?php echo htmlspecialchars($product['title']); ?></h1><br>
                <div class="mb-4"><?php echo "Price: ". htmlspecialchars($product['price']) ." RSD"?></div>
                <div class="mb-4"><?php echo "Brand: " .htmlspecialchars($product['brand'])?></div>
                <div class="mb-4"><?php echo "Volume (ml): " .htmlspecialchars($product['category'])?></div>
                <form  method="POST" action="./checkout-page.php?stranica=<?php echo htmlspecialchars($product['id']) ?>"><label for="quantity">Quantity:</label><input class="col-2" type=number id="quantity" name="quantity" required></input>
                <input type="submit" class="btn btn-outline-dark" value="Add to cart">
                </form>
            <br><br>
            <span class="mb-4"><a href="./single-product-page.php?stranica=<?php echo htmlspecialchars($previousproduct['id']) ?>"><- Previous</a></span>
            <span class="mb-4"><a href=./all-products-page.php>All Products</a></span>
            <span class="mb-4"><a href="./single-product-page.php?stranica=<?php echo htmlspecialchars($nextproduct['id']) ?>">Next -></a></span>
            <br><br>
            </div>
    
        <br><br>
        <div class="row">
            <p><?php echo htmlspecialchars($product['description']); ?></p>
        </div>
        </div>
        <br><br>
        <div class="row">
            <?php 
            foreach ($relatedProducts as $singleRelated) { ?>
            <article class="single-product col-4 row mb-5">
                <div class='col-6'>
                    <img src="<?php echo htmlspecialchars($singleRelated['img']); ?>" alt="" width="90" maxheight="150">
                </div>
                <div class='col-6'>
                    <span><?php echo htmlspecialchars($singleRelated['title']); ?></span>
                    <a class="btn btn-outline-dark" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($singleRelated['id']); ?>">Show Product</a>
                </div>
            </article>
            <?php } ?>
        </div>
    </div>
</main>