<?php 
	//use Tema;
	require_once('Temos.php');
	require_once("../databaseWrapper.php");
	require_once('display.php');

	$connection = new DatabaseWrapper();
	$load = new Temos();
	$temos = $load->loadAll();	
	
	display($temos);
	

	

