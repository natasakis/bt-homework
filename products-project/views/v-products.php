<main class="mt-5">
    <div class="container">
        <form class="row" action="./all-products-page.php" method="get">
        <div class="col-2">
                <select name="sort" class="input-group-text bg-white">
                    <option <?php
                            if ($sort == "") {
                                echo htmlspecialchars("Selected");
                            } ?> value="">None</option>
                    <option <?php if ($sort == \Models\Product\Product::ORDER_BY_PRICE_ASC) {
                            } ?> value="<?php echo htmlspecialchars(\Models\Product\Product::ORDER_BY_PRICE_ASC); ?>">By price asc</option>
                    <option <?php if ($sort == \Models\Product\Product::ORDER_BY_PRICE_DESC) {
                                echo htmlspecialchars("Selected");
                            } ?> value="<?php echo htmlspecialchars(\Models\Product\Product::ORDER_BY_PRICE_DESC); ?>">By price desc</option>
                </select>
                        </div>
                <div class="col-2">
            <select name="select" id="select" class="input-group-text bg-white">
                          
            <option selected value="<?php count($products)?>">Products per page</option>
            <option value="3" <?php echo (isset($_GET['select']) && $_GET['select'] === '3') ? 'selected' : ''; ?>>3</option>
<option value="6" <?php echo (isset($_GET['select']) && $_GET['select'] === '6') ? 'selected' : ''; ?>>6</option>
<option value="10" <?php echo (isset($_GET['select']) && $_GET['select'] === '10') ? 'selected' : ''; ?>>10</option>
                        </select>
                        </div>
                        
            <div class="col-1"></div>
            <input class="col-5" type="text" id="term" name="term"  value="<?php echo htmlspecialchars($term); ?>">
            <button type="submit" class="btn btn-dark col-2">Search</button>
        </form>
        
        <br><br>
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <article class="single-product col-4 row mb-5">
                    <div class='col-12 text-center'>
                    <a  href="./single-product-page.php?product=<?php echo htmlspecialchars($product->id) ?>">
                        <img src="<?php echo htmlspecialchars($product->img); ?>" alt="<?php echo htmlspecialchars($product->title); ?>" width="200" height="200">
                    </a>
                    </div>
                    <div class='col-12 text-center'>
                        <a  class="text-dark text-decoration-none" href="./single-product-page.php?product=<?php echo htmlspecialchars($product->id) ?>">
                        <h6><?php echo htmlspecialchars($product->title); ?></h6>
                        <p>PRICE: <?php echo htmlspecialchars($product->price); ?> $</p>
                        </a>
                        <button form="add-to-cart-<?php echo htmlspecialchars($product->id); ?>" class="btn btn-dark">Add to Cart</button>
                        <form id="add-to-cart-<?php echo htmlspecialchars($product->id); ?>" action="./all-products-page.php" method="post">
                            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product->id); ?>">
                        </form>
                    </div>
                </article>
            <?php } ?>
        </div>
        <div class="text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-flex justify-content-center">
                    <li class="page-item">
    <?php 
    for ($i=1; $i<=$total_pages; $i++) echo '<a class="page-link  text-dark" href="all-products-page.php?page='.$i.'&sort='.$sort.'&select='.$select.'&term='.$term.'">'.$i.'</a></li>' ?>
                </ul>
            </nav>
        </div>
    </div>
</main>