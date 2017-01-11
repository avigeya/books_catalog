<?php 

	require_once 'classes/Books_class.php';

	$postArray = (filter_input_array(INPUT_POST, $_POST));
	$author = $postArray['author'];
	$book = $postArray['book'];
	$description = $postArray['description'];
	$genre = $postArray['genre'];
	$price = $postArray['price'];
	$typeAction = $postArray['typeAction'];

	$bk = new Books($author, $book, $description, $genre, $price);
	$bk->connect_to_db();



	if($typeAction == 'add'){
		$bk->add_book($author, $book, $description, $genre, $price);
	}


	//var_dump($postArray);
	die();


?>