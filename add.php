<?php
	// require 'vendor/autoload.php';

	$page = 'Add Book';
	require('templates/head.php');

	if ($_POST) {
		extract($_POST);

		$errors = array();

		if (!$bookTitle) {
			array_push($errors, 'Title of the book is required');
		} elseif (strlen($bookTitle) < 2) {
			array_push($errors, 'Book title too short. Please enter a longer book title.');
		} else if (strlen($bookTitle) > 100) {
			array_push($errors, 'Title is too long. Please enter a shorter title.');
		}

		if (!$author) {
			array_push($errors, 'Author of the book is required');
		} elseif (strlen($author) < 2) {
			array_push($errors, 'Book title too short. Please enter a longer book title.');
		} else if (strlen($author) > 100) {
			array_push($errors, 'Title is too long. Please enter a shorter title.');
		}

		if (!$description) {
			array_push($errors, 'A description about the book is required.');
		} elseif (strlen($author) < 2) {
			array_push($errors, 'Description too short. Please enter a longer description about the book.');
		} else if (strlen($author) > 100) {
			array_push($errors, 'Description is too long. Please enter a shorter description.');
		}


	}
 ?>

<body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
		<?php require('templates/header.php'); ?>

	  <main>

		  <div class="container">
			  <h2 class="title">ADD A BOOK</h2>

			  <?php if($_POST && !empty($errors)): ?>
				  <div class="alert alert-danger" role="alert">
				  	<ul>
				  		<?php foreach($errors as $singleError): ?>
							<li><?=$singleError; ?></li>
						<?php endforeach;?>
				  	</ul>
				  </div>
			  <?php endif; ?>

			  <form method="post" action="add.php" enctype="multipart/form-data">
			    <div class="form-group">
			    	<label class="label" for="bookTitle">Book Title</label>
					<input type="text" name="bookTitle" class="form-control" id="bookTitle">
			    </div>
			    <div class="form-group">
					<label class="label" for="author">Author Name</label>
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
