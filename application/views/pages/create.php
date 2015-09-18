<?php


?>
<?php echo form_open('pages/create') ?>

	<label for="fName">Page: </label>
	<input type="input" name="name" value="<?php echo set_value('name'); ?>"/><br />
	
	<label for="menu">Show in menu: </label>
	<input type="radio" name="menu" value="true" <?php echo set_radio('menu', 'true', TRUE); ?>/>Yes 
	<input type="radio" name="menu" value="false" <?php echo set_radio('menu', 'false', FALSE); ?>/>No 
	<br/>
	
	<label for="content">Content:</label>
	<textarea name="content" rows="10" cols="80"><?php echo set_value('content'); ?></textarea>

	<input type="submit" name="submit" value="Create page" />
</form>
<script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
<script>CKEDITOR.replace( 'content' );</script>