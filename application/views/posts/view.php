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
