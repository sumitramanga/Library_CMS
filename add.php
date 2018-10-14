<?php
	$page = 'Add Book';
	require('templates/head.php');

	if ($_POST) {
		extract($_POST);

		$errors = array();

		if (!$bookTitle) {
			array_push($errors, 'Title of the book is required');
			var_dump('no book title');
		}
	}
 ?>

<body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
		<?php require('templates/header.php'); ?>

	  <main>

		  <div class="container">
			  <h2 class="title">ADD A BOOK</h2>
			  <form method="post" action="index.php" enctype="multipart/form-data">
			    <div class="form-group">
			    	<label class="label" for="bookTitle">Book Title</label>
					<input type="text" name="bookTitle" class="form-control" id="bookTitle">
			    </div>
			    <div class="form-group">
					<label class="label" for="authorName">Author Name</label>
   					<input type="text" name="author" class="form-control" id="authorName">
			    </div>
			    <div class="form-group">
					<label for="description" class="label">Description</label>
					<textarea type="textarea" rows="5" class="form-control" id="description"></textarea>
			    </div>

				<div class="form-group">
					<label for="image" class="label">Upload Book Cover</label><br>
					<input type="file" name="image" id="imageUpload">
				</div>

			    <button type="submit" class="btn btn-primary">Submit</button>
			  </form>
		  </div>

	  </main>
  </div>

<?php require('templates/scripts.php'); ?>
