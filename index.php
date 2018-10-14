<?php

$page = 'Home';

 ?>


<?php require('templates/head.php'); ?>

<body class="text-center bgImageMain">
	<div class="triangle-up"></div>

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
		<?php require('templates/header.php') ?>

      <main role="main" class="inner cover">
		<i class="fas fa-book-reader fa-3x bookIcon"></i><br><br>
        <h1 class="cover-heading logoHeader">GLOBAL LIBRARY</h1>
		<hr>
        <p class="lead homeDes">Digital library for viewing and updating books.</p>
      </main>

		<?php require('templates/footer.php') ?>
    </div>

<?php require('templates/scripts.php'); ?>
