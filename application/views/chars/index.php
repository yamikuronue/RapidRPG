<?php foreach ($chars as $char): ?>

    <h2><?php echo $char['FName'] ?> <?php echo $char['LName'] ?></h2>
    <div class="main">
        <?php echo $char['description'] ?>
    </div>
    <p><a href="chars/<?php echo $char['id'] ?>">View character</a></p>

<?php endforeach ?>