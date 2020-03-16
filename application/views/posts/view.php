<h2><?php echo $post['title']; ?></h2>
	<small class="post-date"><?php echo $post['created_at']; ?></small></br>
	<img class="thumbnail rounded" src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="">
<div class="post-body">
	<?php echo $post['body']; ?>
</div>

<hr>

<?php echo form_open('posts/delete/'.$post['id']); ?>
	<input type="submit" value="Delete" class="btn btn-danger">
</form>

<a class="btn btn-info pull-left" href="<?php echo base_url();?>posts/edit/<?= $post['slug'];?>">Edit</a>

<hr>
<h3>Add Comment</h3>

<?php echo validation_errors();?>

<?php echo form_open('comments/create/'.$post['id']); ?>

<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control">
</div>
<div class="form-group">
<label>Email</label>
<input type="text" name="email" class="form-control">
</div>
<div class="form-group">
<label>Body</label>
<textarea id="editor1" rows="5" name="body" class="form-control" placeholder="Enter Content"></textarea>
</div>
<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>" class="form-control">
<button type="submit" class="btn btn-md btn-info">Submit</button>
</form>
