<main class="mt-5">
    <div class="container">
        <div class="row">
                <form class="p-4" action="./add-file-page.php" method="post" style="border: solid black 2px; border-radius: 2%;">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="<?php echo htmlspecialchars($title); ?>">
                        <?php if (!empty($systemErrors['title'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['title']); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" placeholder="Enter description" name="description" value="<?php echo htmlspecialchars($description); ?>">
                        <?php if (!empty($systemErrors['description'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['description']); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="bool" class="form-control" id="status" placeholder="Enter status" name="status" value="<?php echo htmlspecialchars($status); ?>">
                        <?php if (!empty($systemErrors['status'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['status']); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" placeholder="Enter price" name="price" value="<?php echo htmlspecialchars($price); ?>">
                        <?php if (!empty($systemErrors['price'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['price']); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="barcode">Barcode</label>
                        <input type="text" class="form-control" id="barcode" placeholder="Enter barcode" name="barcode" value="<?php echo htmlspecialchars($barcode); ?>">
                        <?php if (!empty($systemErrors['barcode'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['barcode']); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="img">Image</label>
                        <input type="text" class="form-control" id="img" placeholder="Enter img" name="img" value="<?php echo htmlspecialchars($img); ?>">
                        <?php if (!empty($systemErrors['img'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['img']); ?></small>
                        <?php } ?>
                    </div>
                                </div>

                    
                    <button type="submit" class="btn btn-dark mt-5 mb-5" name="addfile" value="yes">Add file</button>
                </form>
            </div>

        
    </div>
</main>