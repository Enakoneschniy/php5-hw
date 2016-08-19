<?php

/*
View example at: http://php.real.kh.ua/lesson_09/index.php
*/

include_once '../function.php';

$errorArray = [];

if (isset($_REQUEST['saveNews'])) {
	if (empty($_REQUEST['title'])) {
		$errorArray[] = 'Field <strong>Title</strong> can not be empty!';
	}

	if (empty($_REQUEST['teaser'])) {
		$errorArray[] = 'Field <strong>Teaser</strong> can not be empty!';
	}

	if (empty($_REQUEST['body'])) {
		$errorArray[] = 'Field <strong>Body</strong> can not be empty!';
	}

	if (empty($errorArray)) {
		$success = addNews($_REQUEST['title'], $_REQUEST['teaser'], $_REQUEST['body']);
		unset($_REQUEST);
	}
}
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
	<title>Add news to json file</title>
</head>
<body>
<div class="container">
	<div class="header clearfix">
		<nav>
			<ul class="nav nav-pills pull-right" style="padding-top: 10px">
				<li role="presentation"><a href="../index.php">Home</a></li>
				<li role="presentation"><a href=".././news/">News list</a></li>
				<li role="presentation" class="active"><a href="add.php">Add news</a></li>
				<li role="presentation"><a href="../db/news.json" target="_blank">View file: <strong>news.json</strong></a></li>
			</ul>
		</nav>
		<h3 class="text-muted">Home work 09</h3>
	</div>
	<div class="row">
		<div class="col-md-8">
			<h2>Add news</h2>
			<?php if (isset($success)): ?>
				<div class="alert alert-success">
					News <strong><?php echo $success ?></strong> added.
				</div>
			<?php endif; ?>

			<?php if (!empty($errorArray)): ?>
				<div class="alert alert-danger">
					<?php foreach ($errorArray as $value): ?>
						<?php echo $value ?><br>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
			<form method="post" action="add.php" id="addNews">
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" id="title" class="form-control" value="<?php echo !empty($_REQUEST['title']) ? $_REQUEST['title'] : '' ?>">
				</div>

				<div class="form-group">
					<label for="teaser">Teaser</label>
					<textarea rows="3" name="teaser" id="teaser" class="form-control"><?php echo !empty($_REQUEST['teaser']) ? $_REQUEST['teaser'] : '' ?></textarea>
				</div>

				<div class="form-group">
					<label for="body">Body</label>
					<textarea rows="8" name="body" id="body" class="form-control"><?php echo !empty($_REQUEST['body']) ? $_REQUEST['body'] : '' ?></textarea>
				</div>

				<button class="btn btn-primary" type="submit" name="saveNews">Submit news</button>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div> <!-- /container -->
</body>
</html>