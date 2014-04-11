<h2>
    <?php echo 'Delete '.f('controller.name').' ('.count($ids).' entries)' ?>
</h2>


<form action="" method="POST">
    <input type="hidden" name="confirm" value="1">
    <p>
        Are you sure want to delete <?php echo count($ids).' entries' ?>?
    </p>

    <div>
        <input type="submit" value="OK">
        <a href="<?php echo f('controller.url') ?>" class="button">Cancel</a>
    </div>
</form>
