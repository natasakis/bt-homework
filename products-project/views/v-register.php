<main class="mt-5">
    <div class="container">
        <div class="row">
                <form class="p-4" action="./register-page.php" method="post" style="border: solid black 2px; border-radius: 2%;">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo htmlspecialchars($name); ?>">
                        <?php if (!empty($systemErrors['name'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['name']); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <input type="text" class="form-control" id="last-name" placeholder="Enter last name" name="last_name" value="<?php echo htmlspecialchars($last_name); ?>">
                        <?php if (!empty($systemErrors['last_name'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['last_name']); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo htmlspecialchars($email); ?>">
                        <?php if (!empty($systemErrors['email'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['email']); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" placeholder="Enter password" name="password" value="<?php echo htmlspecialchars($password); ?>">
                        <?php if (!empty($systemErrors['password'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['password']); ?></small>
                        <?php } ?>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="img">Image</label><!--HOCU SLIKU UMESTO OVOGA-->
                                <input type="text" class="form-control" id="img" placeholder="Enter image" name="img" value="<?php echo htmlspecialchars($img); ?>">
                            </div>
                        </div>
                    </div>

                    
                    <button type="submit" class="btn btn-dark mt-5 mb-5" name="register" value="yes">Register</button>
                </form>
            </div>

        
    </div>
</main>