<main>
    <br><br>
    <div class="container">
    <form class="p-4" action="./change-pass-page.php" method="post" style="border: solid black 2px; border-radius: 2%;">
    <div class="form-group">
                        <label for="oldp">Old password</label>
                        <input type="text" class="form-control" id="oldp" placeholder="Enter old password" name="oldp" value="<?php echo htmlspecialchars($oldp); ?>">
                        <?php if (!empty($systemErrors['oldp'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['oldp']); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="newp">New password</label>
                        <input type="text" class="form-control" id="newp" placeholder="Enter new password" name="newp" value="<?php echo htmlspecialchars($newp); ?>">
                        <?php if (!empty($systemErrors['newp'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['newp']); ?></small>
                        <?php } ?>
                    </div>
<br>
  <button type="submit" class="btn btn-dark" name="change" value="yes">Change password</button>

</form>






    </div>
</main>