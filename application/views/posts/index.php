<h2><?= $title ?></h2>

<?php foreach($posts as $post): ?>
	<h3><?php echo $post['title']; ?></h3>
	<div class="row">
		<div class="col-md-3">
			<img class="post-thumb thumbnail rounded" src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="">
		</div>
		<div class="col-md-9">
			<small class="post-date"><?php echo $post['created_at']; ?> in <strong><?php echo $post['name']; ?></strong></small></br>
			<?php echo word_limiter($post['body'], 70); ?>
			<p class="mt-2"><a class="btn btn-md btn-primary" href="<?php echo site_url('/posts/'.$post['slug']); ?>"> Read More</a></p>
		</div>
	</div>
	
<?php endforeach; ?>
