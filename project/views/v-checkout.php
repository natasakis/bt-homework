<main>
    <div class="container">
        <form method="POST" action="./conformation-page.php?stranica=<?php echo htmlspecialchars($product['id']) ?>" >
            <div class="row">
            <div class="col-md-8 mb-4">
            <div class="card mb-4">
            <div class="card-header py-3">
                <h5 class="mb-0">Biling details</h5>
            </div>
            <div class="card-body">
                <form>
                <div class="form-outline mb-4">
                    <label class="form-label" for="name" >Name</label>
                    <input type="text" name="name" id="name" class="form-control" required/>
                    <?php if(!empty($systemErrors['name'])) { ?>
                        <div id="nameHelp" class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['name'])?></div>
                        <?php }?>
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="lastname" >Last name</label>
                    <input type="text" id="lastname" class="form-control" name='lastname'required/>
                    <?php if(!empty($systemErrors['lastname'])) { ?>
                        <div id="lastnameHelp" class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['lastname'])?></div>
                        <?php }?>
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form6Example3" >Email</label>
                    <input type="email" id="form6Example3" class="form-control" name="email" required/>
                    <?php if(!empty($systemErrors['email'])) { ?>
                        <div id="emailHelp" class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['email'])?></div>
                        <?php }?>
                </div>
                <div class="row mb-4">
                    <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example1" >City</label>
                        <input type="text" id="form6Example1" class="form-control" name="city" required/>
                        <?php if(!empty($systemErrors['email'])) { ?>
                        <div id="cityHelp" class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['city'])?></div>
                        <?php }?>
                        
                    </div>
                    </div>
                    <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example2" >Phone</label>
                        <input type="number" id="form6Example2" class="form-control" maxlength="11" minlength="9" name="phone" required/>
                        <?php if(!empty($systemErrors['phone'])) { ?>
                        <div id="phoneHelp" class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['phone'])?></div>
                        <?php }?>
                    </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example1" required>Street and number</label>
                        <input type="text" id="form6Example1" class="form-control" name="street" />
                        <?php if(!empty($systemErrors['street'])) { ?>
                        <div id="streetHelp" class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['street'])?></div>
                        <?php }?>
                    </div>
                    </div>
                    <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example2" required>ZIP</label>
                        <input type="number" id="form6Example2" class="form-control" name="zip" />
                        <?php if(!empty($systemErrors['zip'])) { ?>
                        <div id="zipHelp" class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['zip'])?></div>
                        <?php }?>
                    </div>
                    </div>
                </div>
                <div class="form-outline mb-4">
                    <text class="form-label" for="form6Example3" name="comment">Comment</label>
                    <textarea type="text" id="form6Example3" class="form-control"></textarea>
                </div>

                <hr class="my-4" />

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkoutForm1" checked />
                    <label class="form-check-label" for="checkoutForm1">
                    Agree to the terms 
                    </label>
                </div>
                    </form>
                    </div>
                </div>
                </div>

                <div class="col-md-4 mb-4">
                <div class="card mb-4">
                    <div class="card-header py-3">
                    <h5 class="mb-0">Summary</h5>
                    </div>

                    <div class="row">
            <div class="col-4">
                <img src="<?php echo htmlspecialchars($product['img']); ?>" alt="slika" width="100" maxheight="200">
            </div>
                <div class="col-4">
                    <span><?php echo htmlspecialchars($product['title'])?></span>

                </div>
                <div class="col-4">
                    <span>Quantity: <?php echo $quan?></span>
                </div>
            </div>

                    <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                        Price
                        <span><?php echo htmlspecialchars($product['price'])." RSD"?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                        Price with quantity
                        <span><?php echo $totalprice ." RSD"?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        Shipping
                        <span>Gratis</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                        <div>
                            <strong>Total amount</strong>
                        </div>
                        <span><strong><?php echo $totalprice ." RSD"?></strong></span>
                        </li>
                    </ul>
                    </div>
                    
                </div>
                <div class="text-right" style="float: right">
                <input type="submit" name="btn" class="btn btn-dark btn-lg"  value="Continue to checkout">
                </div>

                </div>

            </div>
            </form>
        

    </div>
</main>