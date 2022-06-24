<main>
    <br><br>
    <div class="container">
    <form class="p-4" action="./log-in-page.php" method="post" style="border: solid black 2px; border-radius: 2%;">
    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo htmlspecialchars($email); ?>">
                        <?php if (!empty($systemErrors['email'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['email']); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" placeholder="Enter password" name="password2" value="<?php echo htmlspecialchars($password2); ?>">
                        <?php if (!empty($systemErrors['password2'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['password2']); ?></small>
                        <?php } ?>
                    </div>
<br>
  <button type="submit" class="btn btn-dark" name="login" value="yes">Log in</button>
  <div class="float-end">
  <a href="./register-page.php" class="btn btn-outline-dark" role="button">Register</a>
  </div>
</form>






    </div>
</main>