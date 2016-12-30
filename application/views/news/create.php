<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

	<label for="title">Title</label>
	<input type="input" class="form-control" name="title" /><br />
	
	<label for="text">Text</label>
	<textarea class="form-control" name="text" rows="6" ></textarea><br />
	
	<input type="submit" name="submit" class="btn btn-primary" value="Create news item" />

</form>