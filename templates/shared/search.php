
<h2><?php echo f('controller.name') ?> List</h2>

<a href="<?php echo f('controller.url', '/null/create') ?>" class="button">Create</a>

<ul class="listview">
    <?php foreach($entries as $entry): ?>
    <li>
        <a href="<?php echo f('controller.url', '/'.$entry['$id']) ?>">
        <?php echo $entry[key($entry->collection->schema())] ?>
        </a>
    </li>
    <?php endforeach ?>
</ul>