<p><a href="./"><-- Back to list</a>

<?php
echo '<h2>'.$char['fName']." ". $char['lName'].'</h2>';
?>

<p>
	<span class="label-shortfield">Played by:</span> <?php echo $char['ownerName']?><br/>
	<span class="label-shortfield">Gender:</span> <?php echo $char['gender']?><br/>
	<span class="label-shortfield">Birthday:</span> <?php echo $char['bday']?><br/>
</p>

<p><span class="label-longfield">Description:</span><br/>
<?php echo $char['description'];?></p>

<p><span class="label-longfield">Personality:</span><br/>
<?php echo $char['personality'];?></p>

<p><span class="label-longfield">History:</span><br/>
<?php echo $char['history'];?></p>

<p><span class="label-longfield">Notes:</span><br/>
<?php echo $char['notes'];?></p>