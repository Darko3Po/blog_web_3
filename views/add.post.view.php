<?php require_once 'partials/top.php' ?>

<nav class="navbar navbar-expand navbar-light bg-light">
	<a class="navbar-brand navbar-collapse ">Best WEB3 Blog</a>
	<ul class="navbar-nav ml-auto">
		<li class="nav-lin nav-item">
			<a href="logout.php" class="nav-link">Logout</a>
		</li>
		<li class="nav-lin nav-item">
			<a href="index.php" class="nav-link">Back to Blog</a>
		</li>
	</ul>
</nav>

<div class="jumbotron text-center" style="background-color:#cfcfcf;padding: 100px;">
	<h1>ADD NEW POST</h1>
</div>

<div class="container">
	<div class="row">
		<div class="col-8 offset-2">
			<?php if ($post->newPostStatus): ?>
				<div class="alert alert-success">New Post inserted</div>
			<?php endif; ?>

			<form action="add_post.php" method="POST"><br>
				<input type="text" name="post_title" placeholder="title" class="form-control"><br>
				<textarea name="post_description" class="form-control" placeholder="description" cols="30" rows="10"></textarea><br>
				<button type="submit" name="post_sub_btn" class="form-control btn btn-primary">Add</button>
			</form>
		</div>
	</div>
</div>

<?php require_once 'partials/bottom.php' ?>