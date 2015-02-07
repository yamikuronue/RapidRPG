<h2>Create a character</h2>

<span class="error"><?php echo validation_errors(); ?></span>

<?php echo form_open('chars/create') ?>

	<label for="fName">First Name: </label>
	<input type="input" name="fName" value="<?php echo set_value('fName'); ?>"/><br />

	<label for="lName">Last Name: </label>
	<input type="input" name="lName" value="<?php echo set_value('lName'); ?>"/><br />
	
	<label for="gender">Gender: </label>
	<input type="radio" name="gender" value="male" <?php echo set_radio('gender', 'male', TRUE); ?>/>Male 
	<input type="radio" name="gender" value="female" <?php echo set_radio('gender', 'female', FALSE); ?>/>Female 
	<input type="radio" name="gender" value="other" <?php echo set_radio('gender', 'other', FALSE); ?>/>Other
	<br/> 
	
	<label for="bday">Birthday: </label>
	<input type="date" name="bday" value="<?php echo set_value('bday'); ?>"/><br />
	
	<label for="description">Description</label>
	<textarea name="description"><?php echo set_value('description'); ?></textarea><br />
	
	<label for="personality">Personality</label>
	<textarea name="personality"><?php echo set_value('personality'); ?></textarea><br />
	
	<label for="history">History</label>
	<textarea name="history"><?php echo set_value('history'); ?></textarea><br />
	
	<label for="notes">Notes</label>
	<textarea name="notes"><?php echo set_value('notes'); ?></textarea><br />

	<input type="submit" name="submit" value="Create character" />

</form>
