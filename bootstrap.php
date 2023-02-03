<?php 	

	
	//Svuda gdje je ukljucen bootstrap sada imamo i sesiju
	session_start();

	//Pozovi podatke iz config.php fajla
	$config = require 'config.php';

	require 'classes/Connection.php';
	
	$db = Connection::connect( $config['database']);

	//Prebaceno iz index.php -- sluzi da poveze sa query bulderom i posalje upit za $db
	require 'classes/QueryBuilder.php';
	require 'classes/User.php';
	require 'classes/Post.php';
 
	$query = new QueryBuilder($db);
	$user = new User($db);
	$post = new Post($db);



 ?>