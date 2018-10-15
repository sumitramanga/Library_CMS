<?php
	require 'vendor/autoload.php';
	use Intervention\Image\ImageManager;

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

		if (isset($_FILES['image'])) {
			$fileSize = $_FILES['image']['size'];
			$fileTmp = $_FILES['image']['tmp_name'];
			$fileType = $_FILES['image']['type'];
			if ($fileSize === 0) {
				array_push($errors, 'No image has been uploaded. Please upload an image.');
			} elseif ($fileSize === 5000000) {
				array_push($errors, 'File size is too large, It must be under 5MB');
			} else {
				$validExtensions = array('jpg', 'jpeg', 'png');

				// Split and find the dot which is added to an array.
				$fileNameArray = explode('.', $_FILES['image']['name']);

				// converts string to lowercase
				$fileExt = strtolower(end($fileNameArray));

				if (in_array($fileExt, $validExtensions) === false) {
					array_push($errors, 'File can only be a jpg, jpeg or png');
				}
			}

			if (empty($errors)) {
				// Where the uploaded file will go
				$destination = 'images/uploads';

				// if this destination doesn't exists make the directory
				if (! is_dir($destination)) {
					mkdir('images/uploads/', 0777, true);
				}

			// This is so we can create a unqiue name for the file
			$newFileName = uniqid() .'.'. $fileExt;
			// move_uploaded_file($fileTmp, $destination.'/'.$newFileName);

			$manager = new ImageManager();

			$mainImage = $manager->make($fileTmp);
			$mainImage->save($destination.'/'.$newFileName, 100);


			$thumbDestination = 'images/uploads/thumbnails';

				if (! is_dir($thumbDestination)) {
					mkdir('images/uploads/thumbnails/', 0777, true);
				}

				// calling the make funciton
				$thumbnailImage = $manager->make($fileTmp);

				// Using the resize function
				$thumbnailImage->resize(300, null, function($constraint){
					$constraint->aspectRatio();
					$constraint->upsize();
				});

				$thumbnailImage->save($thumbDestination.'/'.$newFileName, 100);

			}
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
					<textarea type="textarea" name="description" rows="5" class="form-control" id="description"></textarea>
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
