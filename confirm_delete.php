<?php
	$page = 'Confirm Delete';
	require('templates/head.php');
  ?>



<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
<?php require('templates/header.php'); ?>

		<main>
			<div class="container">
				<h2>Are you sure you want to delete this book?</h2>
				<button type="button" name="button" class="btn">Yes</button>
				<button type="button" name="button" class="btn">Cancel deletion</button>

				<!-- <a href="update.html" class="btn btn-primary">Edit Details</a> -->
			</div>
		</main>
	</div>

<?php require('templates/scripts.php'); ?>
