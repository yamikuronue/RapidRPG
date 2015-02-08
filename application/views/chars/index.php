<?php if($loggedin) {?>
<a href="<?php echo site_url("chars/create") ?>">Create character</a>
<?php }?>

<?php foreach ($chars as $char): ?>

    <h2><?php echo $char['fName'] ?> <?php echo $char['lName'] ?></h2>
    <div class="main">
        <?php echo $char['description'] ?>
    </div>
    <p><a href="/chars/<?php echo $char['id'] ?>">View character</a></p>

<?php endforeach ?>