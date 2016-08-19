<?php

/*
View example at: http://php.real.kh.ua/lesson_09/index.php
*/

function addNews($title, $teaser, $body)
{

	// Clean data and initialize var
	$id 	= 1;
	$title  = strip_tags($title);
	$teaser = strip_tags($teaser, '<p><strong><u><a><i><br>');
	$body   = strip_tags($body, '<p><strong><u><a><i><br>');

	// Specify file
	$file = '../db/news.json';

	// initialize array for Data
	$dataArray = [];

	// If the file does not exist or is empty
	if (!file_exists($file) || trim(file_get_contents($file)) === '') {
		$dataArray[] = ['id' => $id, 'title' => $title, 'teaser' => $teaser, 'body' => $body];
		$data = json_encode($dataArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
		file_put_contents($file, $data);
		unset($data);

		// Push to existing file
	} else {
		$source = file_get_contents($file);
		$dataArray = json_decode($source, true);

		//Generate id
		$id = 1;
		foreach ($dataArray as $value) {
			foreach ($value as $k => $v) {
				if ($k == 'id' && $v > $id) {
					$id = $v;
				}
			}
		}

		// Limited. No more 25 news for example at Hosting: SPAM ;)
		if (count($dataArray) > 10) {
			exit('No need to add');
		}

		$dataArray[] = ['id' => ++$id, 'title' => $title, 'teaser' => $teaser, 'body' => $body];
		$data = json_encode($dataArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
		file_put_contents($file, $data);
		unset($data);
	}
	unset($dataArray);
	return $title;
}

function allNews()
{
	// Specify file
	$file = '../db/news.json';

	// Parsing file
	$source = file_get_contents($file);
	$dataArray = json_decode($source, true);

	// Sorting as descending
	arsort($dataArray);

	return $dataArray;
}

function fullNews($id)
{

	// Specify file
	$file = '../db/news.json';

	// // initialize array for data one news
	$oneNewsArray = [];

	// Parsing file
	$source = file_get_contents($file);
	$dataArray = json_decode($source, true);

	// Selection and creation array News value
	foreach ($dataArray as $key => $value) {
		foreach ($value as $k => $v) {
			if ($k == 'id' && $v == $id) {
				$oneNewsArray = $value;
			}
		}
	}
	unset($dataArray);

	// Checking for values
	if (count($oneNewsArray) > 0) {
		return $oneNewsArray;
	} else {
		return false;
	}
}

function lastNews() {

	// Specify file
	$file = 'db/news.json';

	// // initialize array for data one news
	$lastNewsArray = [];

	// Parsing file
	$source = file_get_contents($file);
	$dataArray = json_decode($source, true);

	// Find MAX value ID
	$lastValue = 0;
	foreach ($dataArray as $value) {
		foreach ($value as $k => $v) {
			if ($k == 'id' && $v > $lastValue) {
				$lastValue = $v;
			}
		}
	}

	// Create new array for latest news
	foreach ($dataArray as $value) {
		foreach ($value as $k => $v) {
			if ($k == 'id' && $v == $lastValue) {
				$lastNewsArray = $value;
			}
		}
	}
	unset($dataArray);

	return $lastNewsArray;
}