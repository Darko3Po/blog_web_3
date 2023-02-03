<?php 
	require_once 'bootstrap.php';

	if (!isset($_SESSION['loggedUser'])) {
		// Ako korisnik nije ulogovan da ga vrati na header index.php stranicu
		header("Location:index.php");
	}

	if (isset($_POST['post_sub_btn'])) {
		// create post
		$post->createPost();
	}

	require_once 'views/add.post.view.php';

	

 ?>