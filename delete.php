<?php 
	require_once('includes/init.php');

	$todo = new Todo();

	if(isset($_GET['id'])) {

		$todo->delete($_GET['id']);

		header("Location: todos.php");

	}
 ?>