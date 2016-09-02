<?php

/*
View example at: http://php.real.kh.ua/lesson_09/index.php
*/

include_once 'function.php';

$lastNews = lastNews();
extract($lastNews);

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
	<title>Home</title>
	<style>
		.jumbotron p {
			font-size: 14px !important;
			font-weight: 200 !important;
			margin-bottom: 15px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="header clearfix">
		<nav>
			<ul class="nav nav-pills pull-right" style="padding-top: 10px">
				<li role="presentation" class="active"><a href="index.php">Home</a></li>
				<li role="presentation"><a href="news/">News list</a></li>
				<li role="presentation"><a href="admin/add.php">Add news</a></li>
				<li role="presentation"><a href="db/news.json" target="_blank">View file: <strong>news.json</strong></a></li>
			</ul>
		</nav>
		<h3 class="text-muted">Home work 09</h3>
	</div>
	<div class="row">
		<div class="col-md-8"><br>
			<div class="jumbotron">
				<h3><?php echo $title; ?></h3>
				<p style="font-size: 12px !important;"><?php echo $body; ?></p>
				<hr class="m-y-2">
				<p class="lead">
					<a role="button" href="news" class="btn btn-primary btn-lg">Learn more news</a>
				</p>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</div> <!-- /container -->
</body>
</html>