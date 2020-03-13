<h2><?= $title ?></h2>


<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title"  placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label>Content</label>
	<textarea id="editor1" rows="10" name="body" class="form-control" placeholder="Enter Content"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
