<main>
        <section class="mb-5 justify-content-center">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner justify-content-center">
    <div class="carousel-item active justify-content-center">
    <div class="d-flex justify-content-center">
      <img src="./public/theme/img/index1.jpg" class="center-block" height="600px"  alt="...">
    </div>
    </div>
    <div class="carousel-item">
    <div class="d-flex justify-content-center">
      <img src="./public/theme/img/index2.jpg" class="center-block" height="600px" alt="...">
    </div>
    </div>
    <div class="carousel-item">
    <div class="d-flex justify-content-center">
      <img src="./public/theme/img/index3.jpg" class="center-block" height="600px" alt="...">
    </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </section>

<section>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="row">
            <div class="col-4">
                <img src="./public/theme/img/bottegapng.png" class="d-block w-75" alt="...">
            </div>
            <div class="col-4">
                <img src="./public/theme/img/gucci.png" class="d-block w-75" alt="...">
            </div>
            <div class="col-4"><br><br><br><br>
                <img src="./public/theme/img/loewe-logo.png" class="d-block w-75" alt="...">
            </div>
        </div>
    </div>

    <div class="carousel-item">
        <div class="row">
            <div class="col-4">
                <img src="./public/theme/img/chanel-logo.png" class="d-block w-75" alt="...">
            </div>
            <div class="col-4">
                <img src="./public/theme/img/prada.png" class="d-block w-75" alt="...">
            </div>
            <div class="col-4">
                <img src="./public/theme/img/tomfordpng.png" class="d-block w-75" alt="...">
            </div>
        </div>
    </div>
</div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

        <section class="my-5">
            <div class="mb-5">
                <h2 class="text-center">Most popular product</h2>
            </div>
            <div class="row">
                <?php foreach ($mostProducts as $product) { ?>
                    <div class="col-3 p-2">
                        <a class="text-dark text-decoration-none" href="./single-product-page.php?product=<?php echo htmlspecialchars($product->id); ?>">
                            <div class="row">
                                <img src="<?php echo htmlspecialchars($product->img); ?>" class="col-12" alt="<?php echo htmlspecialchars($product->title); ?>">
                                <div class="col-12 mt-2 d-flex justify-content-between"><br>
                                    <h5><?php echo htmlspecialchars($product->title); ?></h5><br>
                                    
                                    <p><?php echo htmlspecialchars($product->price); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </section>
        <section class="d-flex justify-content-center">
          <h2><span><a href="./register-page.php" class="text-dark">Register</a> to our website!</span></h2>
                </section>
    </div>

</main>