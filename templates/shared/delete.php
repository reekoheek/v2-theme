<h2>
    <?php echo f('controller.name').': '.$entry[key($entry->collection->schema())] ?>
</h2>


<form action="" method="POST">
    <input type="hidden" name="confirm" value="1">
    <p>
        Are you sure want to delete?
    </p>

    <div>
        <input type="submit" value="OK">
        <a href="<?php echo f('controller.url') ?>" class="button">Cancel</a>
    </div>
</form>
