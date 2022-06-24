<main>
    <br><br>

            <div class="card">
                <div class="card-header">
                    <h1 class="text-center"><?php echo htmlspecialchars($user->name);echo " ";echo htmlspecialchars($user->last_name); ?></h1>
                </div>
                <div class="card-body">
                        <div class="item-container row">
                            <div class="col-4">
                                <img width="300px" height="300px" src="<?php echo htmlspecialchars($user->img); ?>" alt="Card image cap">
                            </div>
                            <div class="col-8">
                                <br><br><br>
                                <h3 class="card-title"><span class="text-dark">Email address:</span><?php echo htmlspecialchars($user->email); ?></h3>
                                <br>
                                <div class="d-flex justify-content-center">
                                <a href="change-pass-page.php" class="btn btn-dark">Change password</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

</main>