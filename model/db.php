<?php 
	
	include_once 'curd_operations.php';

	function db_connect(){
		$connection = mysqli_connect("localhost","root","","blood_bank");
		if (!$connection) {
			die("connection failed:".mysqli_connect_error());
			exit();
		}
		return $connection;
	}

	function execute_query

 ?>