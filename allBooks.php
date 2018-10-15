<?php
$page = 'Browse Library';
require('templates/head.php');
 ?>


<body class="text-center">

	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
		<?php require('templates/header.php'); ?>

		<main>
			<div class="container">
				<h2 class="title">LIBRARY</h2>

				<br><br>
				<!-- download emmet simplified -->
				<!-- fix spacing issue -->

			<div class="row">
				<div class="col"><a href="add.php" class="btn btn-light" style="font-weight:normal;">Add a book</a></div>
				<br><br><br>
			</div>

				<div class="row">
					<div class="col-sm">
						<div class="card">
							<img class="card-img-top" src="https://via.placeholder.com/286x286" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Book title</h5>
								<p class="card-text">Some description about the book</p>
								<a href="book.php" class="btn btn-primary">View Book</a>
								<a href="update.php" class="btn btn-primary">Edit Details</a>
							</div>
						</div>
					</div>

					<div class="col-sm">
						<div class="card">
						<img class="card-img-top" src="https://via.placeholder.com/286x286" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Book title</h5>
								<p class="card-text">Some description about the book</p>
								<a href="#" class="btn btn-primary">View Book</a>
								<a href="#" class="btn btn-primary">Edit Details</a>
							</div>
						</div>
					</div>

					<div class="col-sm">
						<div class="card">
						<img class="card-img-top" src="https://via.placeholder.com/286x286" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Book title</h5>
								<p class="card-text">Some description about the book</p>
								<a href="#" class="btn btn-primary">View Book</a>
								<a href="#" class="btn btn-primary">Edit Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>

<?php require('templates/scripts.php'); ?>
