<h2><?= $title ?></h2>


<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="hidden" class="form-control" name="id" value="<?php echo $post['id']; ?>">
    <input type="text" class="form-control" name="title"  placeholder="Enter Title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label>Content</label>
	<textarea id="editor1" rows="5" name="body" class="form-control" placeholder="Enter Content"><?php echo $post['body']; ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
