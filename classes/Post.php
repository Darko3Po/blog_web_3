<?php 	
	class Post extends QueryBuilder
	{
		public $newPostStatus = NULL;
		
		public function createPost()
		{
			$title = $_POST['post_title'];
			$description = $_POST['post_description'];
			$createAt = date('Y-m-d');
			$user_id = $_SESSION['loggedUser']->id;

			// Probavanje da li radi 
			// die(var_dump($createAt, $title, $description));

			$sql = "INSERT INTO posts VALUES (NULL,?,?,?,?)";
			$query = $this->db->prepare($sql);
			$query->execute([$title,$description,$user_id,$createAt]);

			if ($query) {
				// code...
				$this->newPostStatus = true;
			} else {
				// code...
				$this->newPostStatus = false;
			}

		}

		public function deletePost($id)
		{
			// Method for delete post
			$sql = "DELETE FROM posts WHERE id = ?";
			$query = $this->db->prepare($sql);
			$query->execute([$id]);
		}


	}

	
 ?>