<?php

/*
View example at: http://php.real.kh.ua/lesson_09/index.php
*/

include_once '../function.php';
$listNews = allNews();
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>News list</title>
</head>
<body>
<div class="container">
	<div class="header clearfix">
		<nav>
			<ul class="nav nav-pills pull-right" style="padding-top: 10px">
				<li role="presentation"><a href="../index.php">Home</a></li>
				<li role="presentation" class="active"><a href=".././news/">News list</a></li>
				<li role="presentation"><a href=".././admin/add.php">Add news</a></li>
				<li role="presentation"><a href="../db/news.json" target="_blank">View file: <strong>news.json</strong></a></li>
			</ul>
		</nav>
		<h3 class="text-muted">Home work 09</h3>
	</div>
	<div class="row">
		<div class="col-md-8">
			<h2>News list</h2>
			<?php
				foreach ($listNews as $item) {
					foreach ($item as $key => $value) {
						if ($key == 'id') {
							$id = $value;
						}
						if ($key == 'title') {
							echo '<h3 style="padding-top: 10px;"><a href="detail.php?id=' . $id . '">' . $value . '</a></h3>';
						}
						if ($key == 'teaser') {
							echo '<div style="padding: 25px;">' . $value . '<a href="detail.php?id=' . $id . '"> Read more ...</a></div>';
						}
					}
				}
			?>
		</div>
		<div class="col-md-4"></div>
	</div>
</div> <!-- /container -->
</body>
</html>