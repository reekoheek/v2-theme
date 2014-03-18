<?php
use \ROH\Theme\V2Theme\Helper\Form;
?>

<h2><?php echo f('controller.name') ?></h2>

<form method="POST">

    <?php echo Form::create()->of($entry)->show(array( 'readonly' => true )) ?>

    <div>
        <a href="<?php echo f('controller.url', '/') ?>" class="button">Back</a>
        <input type="submit" value="Save">
        <a href="<?php echo f('controller.url', '/'.$entry['$id'].'/update') ?>" class="button">Update</a>
        <a href="<?php echo f('controller.url', '/'.$entry['$id'].'/delete') ?>" class="button">Delete</a>
    </div>
</form>