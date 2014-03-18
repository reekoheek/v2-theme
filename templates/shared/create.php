<?php
use \ROH\Theme\V2Theme\Helper\Form;
?>

<h2>Create <?php echo f('controller.name') ?></h2>

<form method="POST">
    <?php echo Form::create()->show() ?>

    <div>
    <a href="<?php echo f('controller.url', '/') ?>" class="button">Back</a>
        <input type="submit" value="Save">
    </div>
</form>