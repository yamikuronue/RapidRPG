<?php if($loggedin) {?>
<a href="<?php echo site_url("logs/create") ?>">Add new log</a>
<?php }?>


<?php foreach ($logs as $log): ?>

    <h2><?php echo $log['title'] ?></h2>
    <div class="main">
    <strong>Featuring:</strong>
    	<?php foreach($log['chars'] as $char) { ?>
    		<a href="<?php echo site_url("/chars/".$char['id'])?>"><?php echo $char['FName'] . " " . $char['LName']?></a>
    	<?php }?>
    	<br/>
        <?php echo $log['summary'] ?>
    </div>
    <p><a href="/logs/<?php echo $log['id'] ?>">View log</a></p>

<?php endforeach ?>