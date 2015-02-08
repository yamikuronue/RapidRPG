<span class="error"><?php echo validation_errors(); echo $errmsg ?></span>

<?php echo form_open('login/validate') ?>


<label for="username">Username: </label>
<input type="input" name="username" /><br />

<label for="password">Password: </label>
<input type="password" name="password"/><br />

<input type="submit" name="submit" value="Login" />