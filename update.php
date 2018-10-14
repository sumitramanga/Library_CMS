<?php
	$page = 'Update Book Details';
	require('templates/head.php');
	 ?>


<body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
		<?php require('templates/header.php'); ?>

	  <main>

		  <div class="container">
			  <h2 class="title">UPDATE BOOK</h2>
			  <form>
			    <div class="form-group" method="post" enctype="multipart/form-data" >
			    	<label class="label" for="bookTitle">Book Title</label>
					<input type="text" class="form-control" id="bookTitle" placeholder="The Secret">
			    </div>
			    <div class="form-group">
					<label class="label" for="authorName">Author Name</label>
   					<input type="text" class="form-control" id="authorName" placeholder="Rhonda Byrne">
			    </div>
			    <div class="form-group">
					<label for="description" class="label">Description</label>
					<textarea type="textarea" rows="5" class="form-control" id="description">The Secret is a best-selling 2006 self-help book by Rhonda Byrne, based on the earlier film of the same name. It is based on the law of attraction, which claims that thoughts can change the world directly. The book has sold 30 million copies worldwide and has been translated into 50 languages.</textarea>
			    </div>

				<div class="form-group">
					<img src="https://via.placeholder.com/350x150"><br>
					<label for="imageUpload" class="label">Upload Book Cover</label><br>
					<input type="file" name="imageUpload" id="imageUpload">
				</div>

				 <button type="button" class="btn btn-primary deleteBookBtn">Delete Book</button>
			    <button type="submit" class="btn btn-primary submitBtn">Submit</button>
			  </form>
		  </div>

	  </main>
  </div>

  <?php require('templates/scripts.php'); ?>
