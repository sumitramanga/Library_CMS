<?php
	$page = 'Book Details';
	require('templates/head.php');
 ?>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

		<?php require('templates/header.php'); ?>


		<main>
			<div class="container">
				<h2>Book Name</h2>
				<img src="https://via.placeholder.com/286x286" alt="book">
				<h5 style="text-align:left;">Author:</h5>
				<p style="text-align:left;">Leah Grant</p>

				<br>

				<h5 style="text-align:left;">Description:</h5>
				<p style="text-align:left;">Lorem ipsum dolor sit amet,
					consectetur adipisicing elit, sed do eiusmod tempor
					incididunt ut labore et dolore magna aliqua. Ut enim ad
					minim veniam, quis nostrud exercitation ullamco laboris nisi
					 ut aliquip ex ea commodo consequat. Duis aute irure dolor
					 in reprehenderit in voluptate velit esse cillum dolore eu
					 fugiat nulla pariatur. Excepteur sint occaecat cupidatat
					 non proident, sunt in culpa qui officia deserunt mollit
					 anim id est laborum.</p>

				<!-- <a href="update.html" class="btn btn-primary">Edit Details</a> -->
			</div>
		</main>
	</div>


	<?php require('templates/scripts.php'); ?>
