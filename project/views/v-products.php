<main>
    <div class="container">
        <form class="row" action="./all-products-page.php" method="get">
            <select name="sort-by" id="" class="col-3">
                <option value="">None</option>
                <option value="price-asc">By price asc</option>
                <option value="price-desc">By price desc</option>
            </select>
            <input class="col-7" type="text" name="filter">
            <button type="submit" class="btn btn-dark col-2">Search</button>
        </form>
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <article class="single-product col-4 row my-5">
                <div class='col-5'>
                    <img src="<?php echo htmlspecialchars($product['img']); ?>" alt="" width="90" maxheight="150">
                </div>
                <div class='col-6 text-center'>
                    <br>
                    <span style="style="letter-spacing: 2px; color: #7f4722;"><?php echo htmlspecialchars($product['price'])." RSD";?></span><br><br>
                    <a class="btn btn-outline-dark" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($product['id']) ?>">Show Product</a>
                </div>
                <div class='row text-center'>
                    <span class="text-lg"><?php echo htmlspecialchars($product['title']); ?></span>
                </div>
            </article>
            <?php } ?>
        </div>
    </div>
</main>